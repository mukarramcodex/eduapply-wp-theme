<?php
/**
 * ============================================================
 * EDUAPPLY — CUSTOMIZER
 * ============================================================
 * Every previously-hardcoded "TODO: fill this in" value across the theme
 * (SMTP/mail settings, per-university lead emails, WhatsApp numbers,
 * popup text, and the application form's per-university program lists)
 * now lives here as one central registry, editable from
 * Appearance → Customize → EduApply Settings.
 *
 * WHY THIS FILE EXISTS
 * Before this, the same WhatsApp number or program list was hardcoded
 * in 5-7 different places across the theme (once per page), and they
 * had already drifted out of sync with each other (see README notes).
 * Every getter function below is the SINGLE source of truth for its
 * value; every template should call the getter, never hardcode again.
 *
 * All values fall back to the theme's original hardcoded defaults, so
 * nothing changes on the live site until you actually edit a setting
 * in the Customizer.
 * ============================================================
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * ------------------------------------------------------------
 * PANEL
 * ------------------------------------------------------------
 */
function ccx_customize_register( $wp_customize ) {

	$wp_customize->add_panel( 'ccx_panel', array(
		'title'       => __( 'EduApply Settings', 'campus-compass' ),
		'description' => __( 'Mail routing, WhatsApp numbers, popups, and application-form program lists for all universities.', 'campus-compass' ),
		'priority'    => 30,
	) );

	/**
	 * ============================================================
	 * SECTION: MAIL & LEAD ROUTING
	 * ============================================================
	 */
	$wp_customize->add_section( 'ccx_mail', array(
		'title' => __( 'Mail & Lead Routing', 'campus-compass' ),
		'panel' => 'ccx_panel',
	) );

	$mail_text_settings = array(
		'ccx_smtp_host'       => 'smtp.hostinger.com',
		'ccx_smtp_username'   => 'apply@eduapply.online',
		'ccx_mail_from_address' => 'apply@eduapply.online',
		'ccx_mail_from_name'  => 'EduApply Admissions',
		'ccx_mail_to_address' => 'apply@eduapply.online',
		'ccx_mail_to_name'    => 'Admissions Team',
		'ccx_webhook_url'     => '',
	);
	foreach ( $mail_text_settings as $id => $default ) {
		$wp_customize->add_setting( $id, array(
			'default'           => $default,
			'sanitize_callback' => 'sanitize_text_field',
		) );
	}
	$wp_customize->add_control( 'ccx_smtp_host', array( 'section' => 'ccx_mail', 'label' => __( 'SMTP Host', 'campus-compass' ) ) );

	$wp_customize->add_setting( 'ccx_smtp_port', array(
		'default'           => 465,
		'sanitize_callback' => 'absint',
	) );
	$wp_customize->add_control( 'ccx_smtp_port', array( 'section' => 'ccx_mail', 'label' => __( 'SMTP Port', 'campus-compass' ), 'type' => 'number' ) );

	$wp_customize->add_setting( 'ccx_smtp_secure', array(
		'default'           => 'ssl',
		'sanitize_callback' => function( $v ) { return in_array( $v, array( 'ssl', 'tls' ), true ) ? $v : 'ssl'; },
	) );
	$wp_customize->add_control( 'ccx_smtp_secure', array(
		'section'  => 'ccx_mail',
		'label'    => __( 'SMTP Encryption', 'campus-compass' ),
		'type'     => 'select',
		'choices'  => array( 'ssl' => 'SSL (port 465)', 'tls' => 'STARTTLS (port 587)' ),
	) );

	$wp_customize->add_control( 'ccx_smtp_username', array( 'section' => 'ccx_mail', 'label' => __( 'SMTP Username', 'campus-compass' ) ) );

	$wp_customize->add_setting( 'ccx_smtp_password', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'ccx_smtp_password', array(
		'section'     => 'ccx_mail',
		'label'       => __( 'SMTP Password', 'campus-compass' ),
		'description' => __( 'Stored in the database, not in a theme file. Leave blank to keep the current password unchanged — re-enter it only when rotating.', 'campus-compass' ),
		'type'        => 'text',
	) );

	$wp_customize->add_control( 'ccx_mail_from_address', array( 'section' => 'ccx_mail', 'label' => __( '"From" Address', 'campus-compass' ), 'description' => __( 'Should match the SMTP username above.', 'campus-compass' ) ) );
	$wp_customize->add_control( 'ccx_mail_from_name', array( 'section' => 'ccx_mail', 'label' => __( '"From" Name', 'campus-compass' ) ) );
	$wp_customize->add_control( 'ccx_mail_to_address', array( 'section' => 'ccx_mail', 'label' => __( 'Fallback / CC Address', 'campus-compass' ), 'description' => __( 'Used when a university has no address configured below, and CC\'d on every application as a safety-net copy.', 'campus-compass' ) ) );
	$wp_customize->add_control( 'ccx_mail_to_name', array( 'section' => 'ccx_mail', 'label' => __( 'Fallback / CC Name', 'campus-compass' ) ) );
	$wp_customize->add_control( 'ccx_webhook_url', array( 'section' => 'ccx_mail', 'label' => __( 'Webhook URL (optional)', 'campus-compass' ), 'description' => __( 'Leave blank to skip webhook POST entirely.', 'campus-compass' ) ) );

	// Per-university destination email addresses.
	$university_email_defaults = array(
		'ucp'    => array( 'University of Central Punjab (UCP)', 'ucp@eduapply.online' ),
		'bims'   => array( 'BIMS', 'bims@eduapply.online' ),
		'uor'    => array( 'University of Rawalpindi (UOR)', 'uor@eduapply.online' ),
		'numl'   => array( 'NUML', 'numl@eduapply.online' ),
		'tmuc'   => array( 'TMUC', 'tmuc@eduapply.online' ),
		'bahria' => array( 'Bahria University', 'bahria@eduapply.online' ),
		'iqra'   => array( 'IQRA University', 'iqra@eduapply.online' ),
	);
	foreach ( $university_email_defaults as $key => $info ) {
		$wp_customize->add_setting( "ccx_email_{$key}", array(
			'default'           => $info[1],
			'sanitize_callback' => 'sanitize_email',
		) );
		$wp_customize->add_control( "ccx_email_{$key}", array(
			'section' => 'ccx_mail',
			'label'   => sprintf( __( '%s — Lead Email', 'campus-compass' ), $info[0] ),
		) );
	}

	/**
	 * ============================================================
	 * SECTION: WHATSAPP NUMBERS
	 * ============================================================
	 */
	$wp_customize->add_section( 'ccx_whatsapp', array(
		'title' => __( 'WhatsApp Numbers', 'campus-compass' ),
		'panel' => 'ccx_panel',
	) );

	$wp_customize->add_setting( 'ccx_whatsapp_default', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'ccx_whatsapp_default', array(
		'section'     => 'ccx_whatsapp',
		'label'       => __( 'Default / General Helpline', 'campus-compass' ),
		'description' => __( 'Used on the application form and any page without a university-specific number set below. Digits only, with country code, no +, e.g. 923001234567', 'campus-compass' ),
	) );

	$whatsapp_defaults = array(
		'ucp'    => array( 'UCP', '' ),
		'bims'   => array( 'BIMS', '923333332467' ),
		'uor'    => array( 'UOR', '' ),
		'numl'   => array( 'NUML', '' ),
		'tmuc'   => array( 'TMUC', '' ),
		'bahria' => array( 'Bahria University', '' ),
		'iqra'   => array( 'IQRA University', '923155264264' ),
	);
	foreach ( $whatsapp_defaults as $key => $info ) {
		$wp_customize->add_setting( "ccx_whatsapp_{$key}", array(
			'default'           => $info[1],
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_control( "ccx_whatsapp_{$key}", array(
			'section' => 'ccx_whatsapp',
			'label'   => $info[0],
		) );
	}

	/**
	 * ============================================================
	 * SECTION: ADMISSION INQUIRY POPUP (shared across About, Programs,
	 * Universities, Why Choose Us, and the Home page)
	 * ============================================================
	 */
	$wp_customize->add_section( 'ccx_inquiry_modal', array(
		'title' => __( 'Admission Inquiry Popup', 'campus-compass' ),
		'panel' => 'ccx_panel',
	) );

	$wp_customize->add_setting( 'ccx_inquiry_title', array(
		'default'           => 'Admission Inquiry',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'ccx_inquiry_title', array( 'section' => 'ccx_inquiry_modal', 'label' => __( 'Popup Title', 'campus-compass' ) ) );

	$wp_customize->add_setting( 'ccx_inquiry_subtitle', array(
		'default'           => "Share your details and we'll open WhatsApp with your inquiry ready to send — pick the university you're interested in.",
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'ccx_inquiry_subtitle', array( 'section' => 'ccx_inquiry_modal', 'label' => __( 'Popup Subtitle', 'campus-compass' ), 'type' => 'textarea' ) );

	/**
	 * ============================================================
	 * SECTION: UNIVERSITY WELCOME POPUPS (image popup shown on load,
	 * one per university landing page)
	 * ============================================================
	 */
	$wp_customize->add_section( 'ccx_welcome_popups', array(
		'title' => __( 'University Welcome Popups', 'campus-compass' ),
		'panel' => 'ccx_panel',
	) );

	$welcome_defaults = array(
		'ucp'    => array( 'UCP', 'https://eduapply.online/wp-content/uploads/2026/08/web-popup.webp' ),
		'bims'   => array( 'BIMS', '' ),
		'uor'    => array( 'UOR', '' ),
		'numl'   => array( 'NUML', 'https://eduapply.online/wp-content/uploads/2026/08/7898AdmissionPhase-II-Fall26.webp' ),
		'tmuc'   => array( 'TMUC', '' ),
		'bahria' => array( 'Bahria University', '' ),
	);
	foreach ( $welcome_defaults as $key => $info ) {
		$wp_customize->add_setting( "ccx_welcome_enabled_{$key}", array(
			'default'           => true,
			'sanitize_callback' => function( $v ) { return (bool) $v; },
		) );
		$wp_customize->add_control( "ccx_welcome_enabled_{$key}", array(
			'section' => 'ccx_welcome_popups',
			'label'   => sprintf( __( '%s — Show Welcome Popup', 'campus-compass' ), $info[0] ),
			'type'    => 'checkbox',
		) );

		$wp_customize->add_setting( "ccx_welcome_image_{$key}", array(
			'default'           => $info[1],
			'sanitize_callback' => 'esc_url_raw',
		) );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, "ccx_welcome_image_{$key}", array(
			'section' => 'ccx_welcome_popups',
			'label'   => sprintf( __( '%s — Popup Image', 'campus-compass' ), $info[0] ),
		) ) );

		$wp_customize->add_setting( "ccx_welcome_alt_{$key}", array(
			'default'           => sprintf( '%s admissions — click to apply now', $info[0] ),
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_control( "ccx_welcome_alt_{$key}", array(
			'section' => 'ccx_welcome_popups',
			'label'   => sprintf( __( '%s — Image Alt Text', 'campus-compass' ), $info[0] ),
		) );
	}

	/**
	 * ============================================================
	 * SECTION: BAHRIA ANNOUNCEMENT POPUP (the centered modal-style
	 * announcement, distinct from the welcome popup above)
	 * ============================================================
	 */
	$wp_customize->add_section( 'ccx_bahria_announce', array(
		'title' => __( 'Bahria Announcement Popup', 'campus-compass' ),
		'panel' => 'ccx_panel',
	) );

	$wp_customize->add_setting( 'ccx_bahria_announce_enabled', array(
		'default'           => true,
		'sanitize_callback' => function( $v ) { return (bool) $v; },
	) );
	$wp_customize->add_control( 'ccx_bahria_announce_enabled', array( 'section' => 'ccx_bahria_announce', 'label' => __( 'Show Announcement Popup', 'campus-compass' ), 'type' => 'checkbox' ) );

	$wp_customize->add_setting( 'ccx_bahria_announce_label', array(
		'default'           => 'Important Announcement',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'ccx_bahria_announce_label', array( 'section' => 'ccx_bahria_announce', 'label' => __( 'Header Label', 'campus-compass' ) ) );

	$wp_customize->add_setting( 'ccx_bahria_announce_text', array(
		'default'           => 'Sindh Educational Endowment Fund (SEEF) Trust scholarship applications are open for Academic Year 2025–2026',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'ccx_bahria_announce_text', array( 'section' => 'ccx_bahria_announce', 'label' => __( 'Announcement Text', 'campus-compass' ), 'type' => 'textarea' ) );

	$wp_customize->add_setting( 'ccx_bahria_announce_link', array(
		'default'           => '',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( 'ccx_bahria_announce_link', array( 'section' => 'ccx_bahria_announce', 'label' => __( 'Link URL (optional)', 'campus-compass' ), 'description' => __( 'Leave blank for plain text with no link.', 'campus-compass' ) ) );

	/**
	 * Shared university key => display label map, used by the Campuses,
	 * Logos, Admission Dates, and Programs sections below.
	 */
	$program_labels = array(
		'ucp' => 'UCP', 'bims' => 'BIMS', 'uor' => 'UOR', 'numl' => 'NUML',
		'tmuc' => 'TMUC', 'bahria' => 'Bahria University', 'iqra' => 'IQRA University',
	);

	/**
	 * ============================================================
	 * SECTION: CAMPUSES PER UNIVERSITY
	 * ============================================================
	 * One campus per line. Drives the application form's Campus dropdown
	 * for each university.
	 */
	$wp_customize->add_section( 'ccx_campuses', array(
		'title'       => __( 'Campuses', 'campus-compass' ),
		'panel'       => 'ccx_panel',
		'description' => __( 'One campus per line. Drives the application form\'s Campus dropdown for each university.', 'campus-compass' ),
	) );

	$campus_defaults = array(
		'ucp'    => "Lahore (Main Campus)",
		'bims'   => "Rawalpindi (Main Campus)",
		'uor'    => "Rawalpindi (Main Campus)",
		'numl'   => "Islamabad (Main Campus)\nLahore\nFaisalabad\nMultan\nHyderabad\nQuetta\nPeshawar\nKarachi\nRawalpindi\nMirpur (Azad Kashmir)",
		'tmuc'   => "Islamabad (Main Campus)\nRawalpindi\nGujranwala\nFaisalabad\nLahore\nKarachi\nPeshawar\nAbbottabad\nMultan",
		'bahria' => "Islamabad\nKarachi\nLahore",
		'iqra'   => "Islamabad (H-9 Campus)",
	);
	foreach ( $campus_defaults as $key => $default ) {
		$wp_customize->add_setting( "ccx_campuses_{$key}", array(
			'default'           => $default,
			'sanitize_callback' => 'sanitize_textarea_field',
		) );
		$wp_customize->add_control( "ccx_campuses_{$key}", array(
			'section' => 'ccx_campuses',
			'label'   => $program_labels[ $key ],
			'type'    => 'textarea',
		) );
	}

	/**
	 * ============================================================
	 * SECTION: UNIVERSITY LOGOS
	 * ============================================================
	 */
	$wp_customize->add_section( 'ccx_logos', array(
		'title' => __( 'University Logos', 'campus-compass' ),
		'panel' => 'ccx_panel',
	) );

	$logo_defaults = array(
		'ucp'    => 'https://ucp.edu.pk/inc/uploads/2019/06/ucp-sticky-logo-white-1.png',
		'bims'   => 'https://eduapply.online/wp-content/uploads/2026/08/bims-logo-nav.webp',
		'uor'    => 'https://www.uor.edu.pk/frontend/academics/img/logo-primary.png',
		'numl'   => 'https://numl.edu.pk/templates/template10/images/numl_logo.png',
		'tmuc'   => 'https://eduapply.online/wp-content/uploads/2026/08/tmuc-dark-logo.png',
		'bahria' => 'https://eduapply.online/wp-content/uploads/2026/08/bu_logo.png',
		'iqra'   => 'https://eduapply.online/wp-content/uploads/2026/08/Iqra-Logo.webp',
	);
	foreach ( $logo_defaults as $key => $default ) {
		$wp_customize->add_setting( "ccx_logo_{$key}", array(
			'default'           => $default,
			'sanitize_callback' => 'esc_url_raw',
		) );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, "ccx_logo_{$key}", array(
			'section' => 'ccx_logos',
			'label'   => $program_labels[ $key ],
		) ) );
	}

	/**
	 * ============================================================
	 * SECTION: ADMISSION DATES BAR
	 * ============================================================
	 * The top notification bar shown on every university landing page:
	 * "Last Date to Apply" and "Open Merit Based Admission Date".
	 */
	$wp_customize->add_section( 'ccx_admission_dates', array(
		'title'       => __( 'Admission Dates Bar', 'campus-compass' ),
		'panel'       => 'ccx_panel',
		'description' => __( 'The top notification bar on each university landing page. Shown for every university, including IQRA.', 'campus-compass' ),
	) );

	foreach ( $program_labels as $key => $label ) {
		$wp_customize->add_setting( "ccx_admission_bar_enabled_{$key}", array(
			'default'           => true,
			'sanitize_callback' => function( $v ) { return (bool) $v; },
		) );
		$wp_customize->add_control( "ccx_admission_bar_enabled_{$key}", array(
			'section' => 'ccx_admission_dates',
			'label'   => sprintf( __( '%s — Show Bar', 'campus-compass' ), $label ),
			'type'    => 'checkbox',
		) );

		$wp_customize->add_setting( "ccx_admission_lastdate_{$key}", array(
			'default'           => 'numl' === $key ? '17 August 2026 (Phase-II)' : 'Contact Admissions Office for Current Dates',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_control( "ccx_admission_lastdate_{$key}", array(
			'section' => 'ccx_admission_dates',
			'label'   => sprintf( __( '%s — Last Date to Apply', 'campus-compass' ), $label ),
		) );

		$wp_customize->add_setting( "ccx_admission_meritdate_{$key}", array(
			'default'           => 'Contact Admissions Office for Current Dates',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_control( "ccx_admission_meritdate_{$key}", array(
			'section' => 'ccx_admission_dates',
			'label'   => sprintf( __( '%s — Open Merit Based Admission Date', 'campus-compass' ), $label ),
		) );
	}

	/**
	 * ============================================================
	 * SECTION: APPLICATION FORM — PROGRAMS PER UNIVERSITY
	 * ============================================================
	 * One program per line. This directly drives the three programme-
	 * preference dropdowns on the application form (page-apply.php) for
	 * the selected university — the single canonical list that
	 * ?program= deep links must match.
	 */
	$wp_customize->add_section( 'ccx_programs', array(
		'title'       => __( 'Application Form — Programs', 'campus-compass' ),
		'panel'       => 'ccx_panel',
		'description' => __( 'One program per line. This is the list shown in the application form\'s programme-preference dropdowns for each university.', 'campus-compass' ),
	) );

	$program_defaults = array(
		'ucp'  => "Faculty of Management Sciences\nFaculty of Information Technology & Computer Science\nFaculty of Engineering\nFaculty of Pharmaceutical Sciences\nFaculty of Media & Mass Communication\nFaculty of Law\nFaculty of Languages & Literature\nFaculty of Humanities & Social Sciences\nFaculty of Science & Technology\nAssociate Degree Programs",
		'bims' => "BBA (Hons) 4 Years\nBBA 2 Years\nBS Accounts & Finance\nBS Economics\nBSCS (General Computing)\nBSCS (Software Engineering)\nBSCS (Artificial Intelligence)\nBS Environmental Sciences\nBS Mathematics\nBS Statistics\nBSc. Hons HND (Human Nutrition & Dietetics)\nBS MLT (Medical Laboratory Technology)",
		'uor'  => "Business Administration\nDoctor of Pharmacy (Pharm-D)\nAccounting and Finance\nMedia and Communication Studies\nDigital Design and Computer Arts\nInterior Design\nIslamic Sciences\nPsychology\nComputer Science\nSoftware Engineering\nEnglish and Linguistic Studies",
		'numl' => "Undergraduate Programs\nPostgraduate Programs\nDoctoral Programs\nLanguage Courses\nOnline Languages",
		'tmuc' => "BA (Hons) Business Administration\nBSc Computer Science\nLLB Hons\nBA (Hons) Fashion Textile\nMBA\nBSc Psychology",
		'bahria' => "Computer Science\nLLB\nPharm-D\nSoftware Engineering\nCyber Security\nBS Nursing\nMS\nBS – Program Not Specified\nOther\nElectrical Engineering\nAccounting & Finance\nPolitical Science\nEnglish\nBS Respiratory Therapist\nBusiness Administration / BBA\nInternational Relations (IR)\nInformation Technology (IT)\nBS Financial Technology\nMPhil Islamic Studies\nMechanical Engineering\nBusiness Analytics\nPsychology\nMBA / MPhil Linguistics\nCivil Rights\nLaw\nData Science & Analytics\nMS Clinical Psychology\nB.Ed\nArtificial Intelligence (AI)\nOperation Theatre Technology",
		'iqra' => "BS Computer Science (BSCS)\nAssociate Degree (AD) Computing\nBS Artificial Intelligence (BSAI)\nBS Software Engineering (BSSE)\nMS Computer Science\nMS Software Engineering\nPhD Computer Science\nAD in Accounting & Finance\nAD in Digital Marketing\nAD in Business Analytics\nBBA (Hons)\nBS Business Analytics\nBS Accounting and Finance\nBS Commerce\nMBA\nMS Management Science\nPhD Business Administration\nDiploma in Fashion Design (BFD)\nDiploma in Textile Design (BTD)\nAD in International Relations\nAD in English\nBS International Relations (BSIR)\nBS English\nM.Phil International Development Studies (IDS)\nM.Phil International Relations (IR)\nAD in Film & TV\nAD in Animation\nBS Media Studies (BMS)\nDoctor of Pharmacy (Pharm.D)\nAD in Psychology\nBS Psychology\nBS Psychology (Clinical)\nBS Medical Lab Technology (MLT)\nBS Human Nutrition & Dietetics (HND)",
	);
	foreach ( $program_defaults as $key => $default ) {
		$wp_customize->add_setting( "ccx_programs_{$key}", array(
			'default'           => $default,
			'sanitize_callback' => 'sanitize_textarea_field',
		) );
		$wp_customize->add_control( "ccx_programs_{$key}", array(
			'section' => 'ccx_programs',
			'label'   => $program_labels[ $key ],
			'type'    => 'textarea',
		) );
	}
}
add_action( 'customize_register', 'ccx_customize_register' );

/**
 * ============================================================
 * GETTERS — templates call these, never get_theme_mod() directly,
 * so the fallback defaults only ever need to live in one place
 * (the add_setting() calls above).
 * ============================================================
 */

function ccx_mail_config() {
	return array(
		'smtp_host'     => get_theme_mod( 'ccx_smtp_host', 'smtp.hostinger.com' ),
		'smtp_port'     => (int) get_theme_mod( 'ccx_smtp_port', 465 ),
		'smtp_secure'   => get_theme_mod( 'ccx_smtp_secure', 'ssl' ),
		'smtp_username' => get_theme_mod( 'ccx_smtp_username', 'apply@eduapply.online' ),
		'smtp_password' => get_theme_mod( 'ccx_smtp_password', '' ),
		'from_address'  => get_theme_mod( 'ccx_mail_from_address', 'apply@eduapply.online' ),
		'from_name'     => get_theme_mod( 'ccx_mail_from_name', 'EduApply Admissions' ),
		'to_address'    => get_theme_mod( 'ccx_mail_to_address', 'apply@eduapply.online' ),
		'to_name'       => get_theme_mod( 'ccx_mail_to_name', 'Admissions Team' ),
		'webhook_url'   => get_theme_mod( 'ccx_webhook_url', '' ),
	);
}

/**
 * @param string $key University code exactly as submitted by the form:
 *                    UCP, BIMS, UOR, NUML, TMUC, Bahria, IQRA.
 */
function ccx_university_email( $key ) {
	$map = array(
		'UCP'    => get_theme_mod( 'ccx_email_ucp', 'ucp@eduapply.online' ),
		'BIMS'   => get_theme_mod( 'ccx_email_bims', 'bims@eduapply.online' ),
		'UOR'    => get_theme_mod( 'ccx_email_uor', 'uor@eduapply.online' ),
		'NUML'   => get_theme_mod( 'ccx_email_numl', 'numl@eduapply.online' ),
		'TMUC'   => get_theme_mod( 'ccx_email_tmuc', 'tmuc@eduapply.online' ),
		'Bahria' => get_theme_mod( 'ccx_email_bahria', 'bahria@eduapply.online' ),
		'IQRA'   => get_theme_mod( 'ccx_email_iqra', 'iqra@eduapply.online' ),
	);
	return isset( $map[ $key ] ) ? $map[ $key ] : '';
}

/**
 * @param string $key University code (UCP, BIMS, UOR, NUML, TMUC, Bahria,
 *                    IQRA), or '' for the default/general number.
 */
function ccx_whatsapp_number( $key = '' ) {
	if ( '' === $key ) {
		return get_theme_mod( 'ccx_whatsapp_default', '' );
	}
	$map = array(
		'UCP'    => get_theme_mod( 'ccx_whatsapp_ucp', '' ),
		'BIMS'   => get_theme_mod( 'ccx_whatsapp_bims', '923333332467' ),
		'UOR'    => get_theme_mod( 'ccx_whatsapp_uor', '' ),
		'NUML'   => get_theme_mod( 'ccx_whatsapp_numl', '' ),
		'TMUC'   => get_theme_mod( 'ccx_whatsapp_tmuc', '' ),
		'Bahria' => get_theme_mod( 'ccx_whatsapp_bahria', '' ),
		'IQRA'   => get_theme_mod( 'ccx_whatsapp_iqra', '923155264264' ),
	);
	if ( isset( $map[ $key ] ) && '' !== $map[ $key ] ) {
		return $map[ $key ];
	}
	// Fall back to the default/general number rather than a dead link.
	return get_theme_mod( 'ccx_whatsapp_default', '' );
}

/**
 * Returns the full { UCP: "...", BIMS: "...", ... } map, for templates
 * that need every number at once (e.g. the Admission Inquiry popup's
 * per-university WhatsApp routing).
 */
function ccx_whatsapp_map() {
	$keys = array( 'UCP', 'BIMS', 'UOR', 'NUML', 'TMUC', 'Bahria', 'IQRA' );
	$map  = array();
	foreach ( $keys as $key ) {
		$map[ $key ] = ccx_whatsapp_number( $key );
	}
	return $map;
}

/**
 * @param string $key University code, lowercase: ucp, bims, uor, numl,
 *                    tmuc, bahria, iqra.
 * @return array List of program name strings, one per Customizer line.
 */
function ccx_university_programs( $key ) {
	$key = strtolower( $key );
	$raw = get_theme_mod( "ccx_programs_{$key}", '' );
	if ( '' === trim( (string) $raw ) ) {
		return array();
	}
	$lines = array_map( 'trim', explode( "\n", $raw ) );
	$lines = array_filter( $lines, function( $line ) { return '' !== $line; } );
	return array_values( $lines );
}

/**
 * @param string $key University code, lowercase: ucp, bims, uor, numl,
 *                    tmuc, bahria, iqra.
 * @return array List of campus name strings, one per Customizer line.
 */
function ccx_university_campuses( $key ) {
	$key = strtolower( $key );
	$raw = get_theme_mod( "ccx_campuses_{$key}", '' );
	if ( '' === trim( (string) $raw ) ) {
		return array();
	}
	$lines = array_map( 'trim', explode( "\n", $raw ) );
	$lines = array_filter( $lines, function( $line ) { return '' !== $line; } );
	return array_values( $lines );
}

/**
 * @param string $key University code, lowercase: ucp, bims, uor, numl,
 *                    tmuc, bahria, iqra.
 */
function ccx_university_logo( $key ) {
	$key = strtolower( $key );
	return get_theme_mod( "ccx_logo_{$key}", '' );
}

/**
 * @param string $key University code, lowercase: ucp, bims, uor, numl,
 *                    tmuc, bahria, iqra.
 * @return array { enabled, lastDate, meritDate }
 */
function ccx_admission_dates( $key ) {
	$key = strtolower( $key );
	return array(
		'enabled'   => (bool) get_theme_mod( "ccx_admission_bar_enabled_{$key}", true ),
		'lastDate'  => get_theme_mod( "ccx_admission_lastdate_{$key}", 'Contact Admissions Office for Current Dates' ),
		'meritDate' => get_theme_mod( "ccx_admission_meritdate_{$key}", 'Contact Admissions Office for Current Dates' ),
	);
}

function ccx_welcome_popup( $key ) {
	$key = strtolower( $key );
	return array(
		'enabled' => (bool) get_theme_mod( "ccx_welcome_enabled_{$key}", true ),
		'image'   => get_theme_mod( "ccx_welcome_image_{$key}", '' ),
		'alt'     => get_theme_mod( "ccx_welcome_alt_{$key}", '' ),
	);
}

function ccx_bahria_announcement() {
	return array(
		'enabled' => (bool) get_theme_mod( 'ccx_bahria_announce_enabled', true ),
		'label'   => get_theme_mod( 'ccx_bahria_announce_label', 'Important Announcement' ),
		'text'    => get_theme_mod( 'ccx_bahria_announce_text', '' ),
		'link'    => get_theme_mod( 'ccx_bahria_announce_link', '' ),
	);
}
