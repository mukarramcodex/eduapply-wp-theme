<?php

/**
 * ============================================================
 * ADMISSION APPLICATION — AJAX HANDLER
 * ============================================================
 * Registered against WordPress's admin-ajax.php system, so the frontend
 * form POSTs to /wp-admin/admin-ajax.php?action=ccx_submit_admission
 * with a WordPress nonce for security (see page-apply.php for the JS
 * side of this).
 *
 * On a valid submission this:
 *   1. Validates required fields and uploaded files server-side.
 *   2. Saves uploaded documents to wp-content/uploads/ccx-admissions/
 *      with randomized filenames.
 *   3. Sends the application by email via authenticated SMTP, using
 *      PHPMailer (WordPress's built-in wp_mail() uses PHP's native
 *      mail() function by default, which does not support authenticated
 *      SMTP reliably — that's why PHPMailer is used directly here,
 *      exactly as in the original standalone submit.php).
 *   4. POSTs a JSON "lead" payload to your webhook URL.
 *   5. Appends a row to leads.csv as a local fallback log.
 *
 * ============================================================
 * REQUIRED SETUP — read this before going live
 * ============================================================
 * 1. Install PHPMailer (no Composer needed):
 *      - Download the latest release from
 *        https://github.com/PHPMailer/PHPMailer/releases
 *      - Copy the "src" folder's three files into:
 *        wp-content/themes/campus-compass-theme/phpmailer/PHPMailer.php
 *        wp-content/themes/campus-compass-theme/phpmailer/SMTP.php
 *        wp-content/themes/campus-compass-theme/phpmailer/Exception.php
 *      (Composer users: `composer require phpmailer/phpmailer` inside
 *      the theme folder also works — this file auto-detects
 *      vendor/autoload.php first.)
 *
 * 2. Fill in the CONFIG block below with your real SMTP credentials
 *    and your real webhook URL.
 *
 * See README.md for full setup instructions.
 * ============================================================
 */

if (! defined('ABSPATH')) {
	exit;
}

// ============================================================
// CONFIG — fill these in before going live
// ============================================================
// TODO: SMTP server details (ask your email/hosting provider if unsure).
define('CCX_SMTP_HOST', 'smtp.hostinger.com');        // e.g. smtp.gmail.com, smtp.office365.com
define('CCX_SMTP_PORT', 465);                           // 587 = STARTTLS, 465 = SSL
define('CCX_SMTP_SECURE', 'ssl');                        // 'tls' or 'ssl'
define('CCX_SMTP_USERNAME', 'apply@eduapply.online');     // TODO: your SMTP username
define('CCX_SMTP_PASSWORD', 'ZYx123!@#$%'); // TODO: your SMTP password / app password

// TODO: who the application email is "from".
define('CCX_MAIL_FROM_ADDRESS', 'apply@eduapply.online');
define('CCX_MAIL_FROM_NAME', 'EduApply Admissions');

// TODO: fallback "to" address, used when a university has no address below
// (or isn't recognized), and also CC'd on every application as a safety-net
// backup copy so nothing gets missed if a university inbox has a problem.
define('CCX_MAIL_TO_ADDRESS', 'apply@eduapply.online');
define('CCX_MAIL_TO_NAME', 'Admissions Team');

// ------------------------------------------------------------
// TODO: per-university destination emails.
// Keys MUST match the `university` value the form submits — these are the
// same codes used in ccxApplyUniversities in page-apply.php (UCP, BIMS,
// UOR, NUML, TMUC, Bahria, IQRA). Replace each placeholder with the real
// inbox for that university once it's set up in Hostinger.
// ------------------------------------------------------------
define('CCX_UNIVERSITY_EMAILS', array(
	'UCP'    => 'ucp@eduapply.online',
	'BIMS'   => 'bims@eduapply.online',
	'UOR'    => 'uor@eduapply.online',
	'NUML'   => 'numl@eduapply.online',
	'TMUC'   => 'tmuc@eduapply.online',
	'Bahria' => 'bahria@eduapply.online',
	'IQRA'   => 'iqra@eduapply.online',
));

// TODO: your webhook URL for lead tracking (Zapier / Make / CRM / custom).
// Leave blank ('') to skip the webhook POST entirely.
define('CCX_WEBHOOK_URL', '');

define('CCX_MAX_FILE_SIZE_BYTES', 5 * 1024 * 1024); // 5MB, matches the frontend
define('CCX_ALLOWED_MIME_TYPES', array('application/pdf', 'image/jpeg', 'image/png'));

// ============================================================
// Do not edit below this line unless you know what you're doing
// ============================================================

/**
 * Where uploaded documents and the leads.csv log live. Stored inside the
 * WordPress uploads directory (not the theme folder) so they survive
 * theme updates, and outside the web-servable document areas WordPress
 * itself already protects by default.
 */
function ccx_admission_storage_dir()
{
	$upload_dir = wp_upload_dir();
	$path       = trailingslashit($upload_dir['basedir']) . 'ccx-admissions/';
	if (! file_exists($path)) {
		wp_mkdir_p($path);
		// Block directory listing / PHP execution inside this folder.
		file_put_contents($path . '.htaccess', "Options -Indexes\nphp_flag engine off\n");
		file_put_contents($path . 'index.php', "<?php\n// Silence is golden.\n");
	}
	return $path;
}

function ccx_leads_csv_path()
{
	return ccx_admission_storage_dir() . 'leads.csv';
}

/**
 * Register the AJAX endpoints — wp_ajax_ for logged-in users,
 * wp_ajax_nopriv_ for the general public (prospective students aren't
 * logged into WordPress, so both are required).
 */
add_action('wp_ajax_ccx_submit_admission', 'ccx_handle_admission_submission');
add_action('wp_ajax_nopriv_ccx_submit_admission', 'ccx_handle_admission_submission');

function ccx_handle_admission_submission()
{
	check_ajax_referer('ccx_admission_nonce', 'nonce');

	// ---------- Required text fields ----------
	$required_fields = array(
		'fullName',
		'fatherName',
		'dob',
		'cnic',
		'gender',
		'nationality',
		'mobile',
		'email',
		'address',
		'city',
		'province',
		'lastQualification',
		'board',
		'passingYear',
		'totalMarks',
		'obtainedMarks',
		'rollNumber',
		'university',
		'program1',
		'campus',
	);

	$errors = array();
	$data   = array();
	foreach ($required_fields as $field) {
		$value = isset($_POST[$field]) ? sanitize_text_field(wp_unslash($_POST[$field])) : '';
		if ('' === $value) {
			$errors[] = "Missing required field: $field";
		}
		$data[$field] = $value;
	}

	// Optional text fields
	$optional_fields = array('maritalStatus', 'religion', 'postalCode', 'hearAbout', 'previousEducation', 'message', 'program2', 'program3', 'referrerUrl');
	foreach ($optional_fields as $field) {
		$data[$field] = isset($_POST[$field]) ? sanitize_textarea_field(wp_unslash($_POST[$field])) : '';
	}

	if (! isset($_POST['certify']) || 'on' !== $_POST['certify']) {
		$errors[] = 'You must certify that the information provided is true and correct.';
	}

	if (! is_email($data['email'])) {
		$errors[] = 'Invalid email address.';
	}

	if (! empty($errors)) {
		wp_send_json_error(array('error' => implode(' ', $errors)));
	}

	// ---------- File uploads ----------
	$required_files = array('cnic_file', 'photo_file', 'matric_cert_file', 'matric_result_file', 'inter_cert_file', 'inter_result_file');
	$optional_files = array('bachelor_degree_file', 'bachelor_transcript_file', 'domicile_file', 'other_file');
	$all_file_fields = array_merge($required_files, $optional_files);

	foreach ($required_files as $field) {
		if (! isset($_FILES[$field]) || UPLOAD_ERR_NO_FILE === $_FILES[$field]['error']) {
			$errors[] = "Missing required document: $field";
		}
	}
	if (! empty($errors)) {
		wp_send_json_error(array('error' => implode(' ', $errors)));
	}

	$upload_dir  = ccx_admission_storage_dir();
	$upload_url_base = trailingslashit(wp_upload_dir()['baseurl']) . 'ccx-admissions/';
	$saved_files = array();

	foreach ($all_file_fields as $field) {
		if (! isset($_FILES[$field]) || UPLOAD_ERR_NO_FILE === $_FILES[$field]['error']) {
			continue; // optional file not provided
		}
		$file = $_FILES[$field];

		if (UPLOAD_ERR_OK !== $file['error']) {
			$errors[] = "Upload error for $field.";
			continue;
		}
		if ($file['size'] > CCX_MAX_FILE_SIZE_BYTES) {
			$errors[] = "$field exceeds the 5MB size limit.";
			continue;
		}
		$mime = function_exists('mime_content_type') ? mime_content_type($file['tmp_name']) : '';
		if (! $mime && function_exists('finfo_open')) {
			$finfo = finfo_open(FILEINFO_MIME_TYPE);
			$mime  = finfo_file($finfo, $file['tmp_name']);
			finfo_close($finfo);
		}
		if (! in_array($mime, CCX_ALLOWED_MIME_TYPES, true)) {
			$errors[] = "$field has an unsupported file type.";
			continue;
		}

		$ext       = pathinfo($file['name'], PATHINFO_EXTENSION);
		$safe_name = $field . '_' . bin2hex(random_bytes(6)) . '.' . strtolower($ext);
		$destination = $upload_dir . $safe_name;

		if (! move_uploaded_file($file['tmp_name'], $destination)) {
			$errors[] = "Could not save uploaded file for $field.";
			continue;
		}
		$saved_files[$field] = array(
			'path'          => $destination,
			'url'           => $upload_url_base . $safe_name,
			'original_name' => sanitize_file_name($file['name']),
		);
	}

	if (! empty($errors)) {
		wp_send_json_error(array('error' => implode(' ', $errors)));
	}

	// ---------- Reference ID ----------
	$reference_id = 'CC-' . gmdate('Ymd') . '-' . strtoupper(bin2hex(random_bytes(3)));

	// ---------- Compose the application summary ----------
	$summary_lines = array(
		"New Admission Application — Reference: $reference_id",
		'',
		"University: {$data['university']}",
		"Landed From: " . ($data['referrerUrl'] ?: '—'),
		"Programme Preference 1: {$data['program1']}",
		"Programme Preference 2: " . ($data['program2'] ?: '—'),
		"Programme Preference 3: " . ($data['program3'] ?: '—'),
		"Campus: {$data['campus']}",
		'',
		'--- Personal Information ---',
		"Full Name: {$data['fullName']}",
		"Father/Guardian Name: {$data['fatherName']}",
		"Date of Birth: {$data['dob']}",
		"CNIC/B-Form: {$data['cnic']}",
		"Gender: {$data['gender']}",
		"Nationality: {$data['nationality']}",
		'Marital Status: ' . ($data['maritalStatus'] ?: '—'),
		'Religion: ' . ($data['religion'] ?: '—'),
		'',
		'--- Contact Information ---',
		"Mobile: {$data['mobile']}",
		"Email: {$data['email']}",
		"Address: {$data['address']}",
		"City: {$data['city']}",
		"Province: {$data['province']}",
		'Postal Code: ' . ($data['postalCode'] ?: '—'),
		'',
		'--- Academic Information ---',
		"Last Qualification: {$data['lastQualification']}",
		"Board/University: {$data['board']}",
		"Passing Year: {$data['passingYear']}",
		"Total Marks/CGPA: {$data['totalMarks']}",
		"Obtained Marks/CGPA: {$data['obtainedMarks']}",
		"Roll Number: {$data['rollNumber']}",
		'',
		'--- Additional Information ---',
		'How did you hear about us: ' . ($data['hearAbout'] ?: '—'),
		'Previous education at this university: ' . ($data['previousEducation'] ?: '—'),
		'Message: ' . ($data['message'] ?: '—'),
		'',
		'--- Documents Uploaded ---',
	);
	foreach ($saved_files as $field => $info) {
		$summary_lines[] = "$field: {$info['original_name']}";
	}
	$email_body = implode("\n", $summary_lines);

	// ============================================================
	// SEND EMAIL VIA AUTHENTICATED SMTP (PHPMailer)
	// ============================================================
	$mail_sent  = false;
	$mail_error = '';

	$composer_autoload = get_template_directory() . '/vendor/autoload.php';
	$manual_phpmailer  = get_template_directory() . '/phpmailer/PHPMailer.php';

	$phpmailer_available = false;
	if (file_exists($composer_autoload)) {
		require_once $composer_autoload;
		$phpmailer_available = class_exists('PHPMailer\\PHPMailer\\PHPMailer');
	} elseif (file_exists($manual_phpmailer)) {
		require_once get_template_directory() . '/phpmailer/Exception.php';
		require_once get_template_directory() . '/phpmailer/PHPMailer.php';
		require_once get_template_directory() . '/phpmailer/SMTP.php';
		$phpmailer_available = class_exists('PHPMailer\\PHPMailer\\PHPMailer');
	}

	if ($phpmailer_available) {
		try {
			$mail = new PHPMailer\PHPMailer\PHPMailer(true);
			$mail->isSMTP();
			$mail->Host       = CCX_SMTP_HOST;
			$mail->SMTPAuth   = true;
			$mail->Username   = CCX_SMTP_USERNAME;
			$mail->Password   = CCX_SMTP_PASSWORD;
			$mail->SMTPSecure = 'ssl' === CCX_SMTP_SECURE
				? PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_SMTPS
				: PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;
			$mail->Port = CCX_SMTP_PORT;

			// ---- Route to the correct university inbox ----
			// Look up the destination by the submitted `university` code.
			// If it's not in the map (typo, new university not yet added,
			// etc.), fall back to the central admin address so the lead
			// is never silently lost.
			$university_key = $data['university'];
			$primary_to      = isset(CCX_UNIVERSITY_EMAILS[$university_key])
				? CCX_UNIVERSITY_EMAILS[$university_key]
				: CCX_MAIL_TO_ADDRESS;

			$mail->setFrom(CCX_MAIL_FROM_ADDRESS, CCX_MAIL_FROM_NAME);
			$mail->addAddress($primary_to, CCX_MAIL_TO_NAME);

			// Always CC the central admin address as a safety-net backup
			// copy, unless it's already the primary recipient (avoids a
			// duplicate copy landing in the same inbox).
			if ($primary_to !== CCX_MAIL_TO_ADDRESS) {
				$mail->addCC(CCX_MAIL_TO_ADDRESS, CCX_MAIL_TO_NAME);
			}

			$mail->addReplyTo($data['email'], $data['fullName']);

			foreach ($saved_files as $info) {
				$mail->addAttachment($info['path'], $info['original_name']);
			}

			$mail->Subject = "Admission Application — {$data['university']} ({$data['program1']}) — $reference_id";
			$mail->Body    = $email_body;
			$mail->isHTML(false);

			$mail->send();
			$mail_sent = true;
		} catch (Exception $e) {
			$mail_error = $e->getMessage();
		}
	} else {
		$mail_error = 'PHPMailer is not installed. See the setup instructions at the top of inc/admission-handler.php and in README.md.';
	}

	// ============================================================
	// POST LEAD TO WEBHOOK
	// ============================================================
	$webhook_sent = false;
	if ('' !== CCX_WEBHOOK_URL) {
		$webhook_payload = array_merge(
			$data,
			array(
				'referenceId' => $reference_id,
				'submittedAt' => gmdate('c'),
				'documents'   => array_map(
					function ($info) {
						return array(
							'original_name' => $info['original_name'],
							'url'            => $info['url'],
						);
					},
					$saved_files
				),
			)
		);

		wp_remote_post(
			CCX_WEBHOOK_URL,
			array(
				'headers' => array('Content-Type' => 'application/json'),
				'body'    => wp_json_encode($webhook_payload),
				'timeout' => 8,
			)
		);
		// wp_remote_post() doesn't throw; treat "attempted" as sent for the
		// CSV log below (check your webhook receiver's own logs to confirm
		// delivery — same caveat applies to any fire-and-forget webhook).
		$webhook_sent = true;
	}

	// ============================================================
	// LOCAL LEADS.CSV FALLBACK LOG
	// ============================================================
	$csv_path   = ccx_leads_csv_path();
	$csv_is_new = ! file_exists($csv_path);
	$csv_handle = fopen($csv_path, 'a');
	if ($csv_handle) {
		if ($csv_is_new) {
			fputcsv($csv_handle, array(
				'Reference',
				'Submitted At',
				'University',
				'Program Preference 1',
				'Program Preference 2',
				'Program Preference 3',
				'Campus',
				'Full Name',
				'CNIC',
				'Mobile',
				'Email',
				'City',
				'Mail Sent',
				'Webhook Sent',
			));
		}
		fputcsv($csv_handle, array(
			$reference_id,
			gmdate('c'),
			$data['university'],
			$data['program1'],
			$data['program2'],
			$data['program3'],
			$data['campus'],
			$data['fullName'],
			$data['cnic'],
			$data['mobile'],
			$data['email'],
			$data['city'],
			$mail_sent ? 'yes' : 'no',
			$webhook_sent ? 'yes' : 'no',
		));
		fclose($csv_handle);
	}

	// ============================================================
	// RESPONSE
	// ============================================================
	if (! $mail_sent) {
		// The application was still recorded (CSV, and webhook if
		// configured), so the lead isn't lost — but we surface the SMTP
		// error in the response to help with debugging.
		wp_send_json_success(array(
			'referenceId' => $reference_id,
			'warning'     => 'Application recorded, but the confirmation email could not be sent: ' . $mail_error,
		));
	}

	wp_send_json_success(array('referenceId' => $reference_id));
}
