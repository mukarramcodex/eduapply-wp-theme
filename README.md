# EduApply — WordPress Theme

A complete WordPress theme for the EduApply admissions marketing
site: the main marketing pages plus six branded university pages and a
full admission application form with real email delivery and lead
tracking.

---

## 1. Install the theme

1. Zip up this whole `campus-compass-theme` folder (make sure `style.css`
   ends up at the top level of the zip, not nested inside another folder).
2. In WordPress: **Appearance → Themes → Add New → Upload Theme**, choose
   the zip, install, then **Activate**.

   (Alternative: upload the unzipped folder directly into
   `wp-content/themes/` via FTP/cPanel File Manager, then activate from
   Appearance → Themes.)

---

## 2. Create your pages

The homepage (`front-page.php`) works automatically — no page needs to be
created for it, WordPress uses it for the site root as soon as the theme
is active.

For every other page, **create a WordPress Page with the exact slug shown
below.** WordPress automatically applies the matching template by slug —
you don't need to manually pick a template from the dropdown (though you
can, they're also registered there under Page Attributes → Template, in
case you ever rename a slug and need to reassign it).

| Page title (yours to choose) | Slug (must match exactly) | Template used automatically |
|---|---|---|
| About | `about` | `page-about.php` |
| Universities | `universities` | `page-universities.php` |
| Programs | `programs` | `page-programs.php` |
| Why Choose Us | `why-choose-us` | `page-why-choose-us.php` |
| UCP | `ucp` | `page-ucp.php` |
| BIMS | `bims` | `page-bims.php` |
| UOR | `uor` | `page-uor.php` |
| NUML | `numl` | `page-numl.php` |
| TMUC | `tmuc` | `page-tmuc.php` |
| Bahria University | `bahria` | `page-bahria.php` |
| Admissions | `admissions` | (leave default/empty — this page is just a URL parent, see below) |
| Apply | `apply` | `page-apply.php` |

**Important — the "Apply" page must be a *child* of the "Admissions" page**
(set this under Page Attributes → Parent when editing the Apply page), so
its URL becomes `yoursite.com/admissions/apply/` to match every link
across the site. Content on the "Admissions" parent page itself doesn't
matter — it's just there to build the URL structure. (If you'd rather
have a real "Admissions" info page, you're free to add content to it —
`page-apply.php` will still apply automatically to its child page based
on the `apply` slug either way.)

Go to **Settings → Permalinks** and make sure something other than
"Plain" is selected (e.g. "Post name") — this is required for the
`/admissions/apply/` nested URL to work, and for all the pretty URLs
generally.

Every page body content field can be left empty — none of these
templates use `the_content()`; they're fully self-contained.

---

## 3. Set up the admission form's email + lead tracking

This is the same backend from the original build, just re-wired to run
through WordPress's own AJAX system (`admin-ajax.php`) instead of a
standalone `submit.php` file — see `inc/admission-handler.php`.

Browsers can't send email or speak SMTP directly (a security restriction,
not a limitation of this code), so real sending happens via **PHPMailer**
using authenticated SMTP. WordPress's built-in `wp_mail()` uses PHP's
`mail()` function by default, which doesn't support authenticated SMTP
reliably — that's why PHPMailer is used directly here instead.

### a) Install PHPMailer

**No Composer needed (recommended for most WordPress hosts):**

1. Download the latest release from
   https://github.com/PHPMailer/PHPMailer/releases ("Source code (zip)")
2. From the extracted `src/` folder, copy these 3 files into this theme's
   `phpmailer/` folder (already created, currently empty):
   ```
   wp-content/themes/campus-compass-theme/phpmailer/PHPMailer.php
   wp-content/themes/campus-compass-theme/phpmailer/SMTP.php
   wp-content/themes/campus-compass-theme/phpmailer/Exception.php
   ```

**Or with Composer**, from inside the theme folder:
```bash
composer require phpmailer/phpmailer
```
`inc/admission-handler.php` automatically prefers `vendor/autoload.php`
if present, so either method works with no code changes.

### b) Configure SMTP + destination email

Open `inc/admission-handler.php` and fill in the `CONFIG` block near the
top:

```php
define( 'CCX_SMTP_HOST', 'smtp.yourdomain.com' );
define( 'CCX_SMTP_PORT', 587 );
define( 'CCX_SMTP_SECURE', 'tls' );
define( 'CCX_SMTP_USERNAME', 'apply@yourdomain.com' );
define( 'CCX_SMTP_PASSWORD', 'REPLACE_WITH_REAL_PASSWORD' );

define( 'CCX_MAIL_FROM_ADDRESS', 'apply@yourdomain.com' );
define( 'CCX_MAIL_FROM_NAME', 'EduApply Admissions' );
define( 'CCX_MAIL_TO_ADDRESS', 'info@eduapply.online' );
define( 'CCX_MAIL_TO_NAME', 'Admissions Team' );
```

Ask your email host for the SMTP host/port, whether it's TLS (587) or SSL
(465), and a username + password (or "app password") authorized to send.

**Gmail/Google Workspace:** you need an "App Password", not your regular
login password (Google Account → Security → 2-Step Verification → App
Passwords).

### c) Configure the webhook (for lead tracking)

Still in the same `CONFIG` block:

```php
define( 'CCX_WEBHOOK_URL', '' );
```

Paste your webhook URL — Zapier "Catch Hook", Make.com, a CRM's inbound
endpoint, or your own API. Every successful application POSTs a JSON
payload here with all form fields plus uploaded document filenames/URLs.

Leave it blank to skip the webhook entirely — email still sends and the
lead is still logged locally either way (see next section).

---

## 4. Where leads and documents are stored

Both live inside your normal WordPress uploads directory, **not** the
theme folder — so they survive theme updates and aren't wiped if you ever
replace the theme:

```
wp-content/uploads/ccx-admissions/
  ├── leads.csv          ← every application, whether or not the webhook is set up
  ├── .htaccess           ← blocks directory listing / PHP execution here
  ├── index.php            ← blocks directory listing on hosts that ignore .htaccess
  └── (uploaded documents, randomized filenames)
```

Open `leads.csv` directly in Excel/Google Sheets any time — it's your
built-in safety net independent of whatever webhook/CRM you connect
later.

---

## 5. Test it

1. Visit `/admissions/apply/`, fill out all 4 steps with a real (or test)
   email, and submit.
2. Confirm:
   - The application email arrives at `CCX_MAIL_TO_ADDRESS`.
   - A new row appears in `wp-content/uploads/ccx-admissions/leads.csv`.
   - (If configured) your webhook receiver shows the new lead.
3. If email fails, the applicant still sees the success screen (nothing
   is lost — it's still in `leads.csv` and sent to the webhook if
   configured), but the JSON response includes a `warning` field with the
   SMTP error, useful while debugging. Check your host's PHP error log
   too if something's unclear.

---

## What's included

- `front-page.php` — main marketing homepage
- `page-about.php`, `page-universities.php`, `page-programs.php`,
  `page-why-choose-us.php` — marketing sub-pages
- `page-ucp.php`, `page-bims.php`, `page-uor.php`, `page-numl.php`,
  `page-tmuc.php`, `page-bahria.php` — the six branded university pages
- `page-apply.php` — the 4-step admission application form
- `functions.php` — theme setup, asset registration, template
  registration
- `inc/admission-handler.php` — the AJAX handler: validation, file
  uploads, SMTP email, webhook, and the leads.csv log
- `phpmailer/` — empty; drop in the 3 PHPMailer files per step 3a above
- `index.php` — minimal required fallback template
- `style.css` — required WordPress theme header (deliberately minimal —
  every page carries its own complete, scoped styling, so nothing here
  needs to be shared globally or risks colliding with plugins)

Every page is a fully self-contained document — its own `<head>`, its own
scoped `<style>` (namespaced under a unique wrapper ID like `#ccx-page`,
`#ucp-page`, `#bims-page`, etc.), and its own `<script>`. `wp_head()` and
`wp_footer()` are called directly inside each template so plugins (SEO,
analytics, security, the admin bar when logged in) keep working normally,
without WordPress needing a shared `header.php`/`footer.php` in the
traditional sense.

---

## Notes / assumptions

- Internal links (nav, footers, "Apply Now" buttons, etc.) use
  root-relative paths like `/about`, `/programs`, `/admissions/apply` —
  this assumes WordPress is installed at your domain root
  (`yoursite.com`), which is by far the most common setup. If your
  WordPress lives in a subdirectory (`yoursite.com/blog/`), these links
  will need adjusting to include that subdirectory prefix.
- No page uses `the_content()` — content is baked directly into each
  template, matching how the site was originally built and designed.
  If you'd prefer editable content per page down the line, that's a
  larger follow-up refactor, not something this theme does out of the box.
