<?php
/**
 * 404.php — Not Found
 *
 * WordPress automatically serves this file for any URL that doesn't
 * resolve to a page, post, or other content. No settings or shortcode
 * needed — just save this in the theme root as `404.php`.
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Page Not Found | EduApply</title>
  <meta name="robots" content="noindex, follow" />

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,400;0,9..144,600;0,9..144,700;1,9..144,500&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=IBM+Plex+Mono:wght@400;500&display=swap" rel="stylesheet">

  <style>
    #ccx-page {
      --ccx-navy-950: #0A1120;
      --ccx-navy-900: #101B32;
      --ccx-navy-800: #16253F;
      --ccx-ink: #15213A;
      --ccx-ink-soft: #4B5670;
      --ccx-paper: #F4F6FA;
      --ccx-paper-dim: #E9ECF3;
      --ccx-gold: #C9972E;
      --ccx-gold-bright: #E4B450;
      --ccx-danger: #C1443C;
      --ccx-teal: #1F7A6C;
      --ccx-font-display: 'Fraunces', serif;
      --ccx-font-body: 'Plus Jakarta Sans', sans-serif;
      --ccx-font-mono: 'IBM Plex Mono', monospace;
      --ccx-radius-l: 22px;
      --ccx-shadow-l: 0 24px 60px rgba(16, 27, 50, 0.18);
    }

    #ccx-page,
    #ccx-page * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    #ccx-page {
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      font-family: var(--ccx-font-body);
      color: var(--ccx-ink);
      background: var(--ccx-paper);
      -webkit-font-smoothing: antialiased;
    }

    #ccx-page a {
      color: inherit;
      text-decoration: none;
    }

    #ccx-page :focus-visible {
      outline: 3px solid var(--ccx-gold-bright);
      outline-offset: 2px;
    }

    #ccx-page .ccx-err-header {
      background: var(--ccx-navy-950);
      padding: 16px 0;
      border-bottom: 3px solid var(--ccx-gold);
      text-align: center;
    }

    #ccx-page .ccx-err-brand {
      display: inline-flex;
      align-items: center;
      gap: 10px;
      color: #fff;
      font-family: var(--ccx-font-display);
      font-weight: 600;
      font-size: 18px;
    }

    #ccx-page .ccx-err-brand-mark {
      width: 34px;
      height: 34px;
      border-radius: 9px;
      background: linear-gradient(135deg, var(--ccx-gold-bright), var(--ccx-gold));
      display: flex;
      align-items: center;
      justify-content: center;
      font-family: var(--ccx-font-mono);
      font-weight: 600;
      font-size: 12px;
      color: var(--ccx-navy-950);
    }

    #ccx-page .ccx-err-main {
      flex: 1;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 40px 20px;
    }

    #ccx-page .ccx-err-card {
      max-width: 460px;
      width: 100%;
      text-align: center;
      background: #fff;
      border-radius: var(--ccx-radius-l);
      box-shadow: var(--ccx-shadow-l);
      padding: 48px 34px;
    }

    #ccx-page .ccx-err-code {
      font-family: var(--ccx-font-display);
      font-weight: 700;
      font-size: 64px;
      line-height: 1;
      color: var(--ccx-danger);
      margin-bottom: 6px;
    }

    #ccx-page .ccx-err-title {
      font-family: var(--ccx-font-display);
      font-weight: 600;
      font-size: 22px;
      color: var(--ccx-navy-900);
      margin-bottom: 12px;
    }

    #ccx-page .ccx-err-text {
      font-size: 14px;
      color: var(--ccx-ink-soft);
      line-height: 1.65;
      margin-bottom: 28px;
    }

    #ccx-page .ccx-err-actions {
      display: flex;
      flex-wrap: wrap;
      gap: 12px;
      justify-content: center;
    }

    #ccx-page .ccx-err-btn {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      padding: 13px 24px;
      border-radius: 999px;
      font-weight: 700;
      font-size: 13.5px;
      transition: transform .2s ease, background .2s ease;
    }

    #ccx-page .ccx-err-btn-primary {
      background: linear-gradient(180deg, var(--ccx-gold-bright), var(--ccx-gold));
      color: var(--ccx-navy-950);
      box-shadow: 0 6px 18px rgba(201, 151, 46, 0.3);
    }

    #ccx-page .ccx-err-btn-primary:hover {
      transform: translateY(-2px);
    }

    #ccx-page .ccx-err-btn-outline {
      background: #fff;
      color: var(--ccx-navy-900);
      border: 1.5px solid var(--ccx-paper-dim);
    }

    #ccx-page .ccx-err-btn-outline:hover {
      background: var(--ccx-paper);
    }

    #ccx-page .ccx-err-footer {
      padding: 22px 0;
      text-align: center;
      font-size: 12px;
      color: var(--ccx-ink-soft);
    }

    #ccx-page .ccx-err-footer a {
      color: var(--ccx-teal);
      font-weight: 600;
    }
  </style>
  <?php wp_head(); ?>
</head>

<body>

  <div id="ccx-page">

    <header class="ccx-err-header">
      <a href="<?php echo esc_url(home_url('/')); ?>" class="ccx-err-brand">
        <span class="ccx-err-brand-mark">EA</span>
        EduApply
      </a>
    </header>

    <main class="ccx-err-main">
      <div class="ccx-err-card">
        <div class="ccx-err-code">404</div>
        <h1 class="ccx-err-title">We couldn't find that page</h1>
        <p class="ccx-err-text">
          The page you're looking for may have been moved, renamed, or no longer exists.
          Double-check the link, or head back to continue your application.
        </p>
        <div class="ccx-err-actions">
          <a href="<?php echo esc_url(home_url('/')); ?>" class="ccx-err-btn ccx-err-btn-primary">Return to Home</a>
          <a href="<?php echo esc_url(home_url('/admissions/apply')); ?>" class="ccx-err-btn ccx-err-btn-outline">Start an Application</a>
        </div>
      </div>
    </main>

    <footer class="ccx-err-footer">
      EduApply — an independent admissions guidance platform.
      Need help? <a href="#" id="ccx-err-whatsapp">Chat with us on WhatsApp</a>.
    </footer>

  </div>

  <script>
    // Optional: reuse the same WhatsApp number config as page-apply.php.
    // Replace with the real number when available, or remove this block.
    (function () {
      var whatsappNumber = ""; // e.g. "923001234567"
      var msg = "Hello, I was trying to reach a page on EduApply and got a Not Found error.";
      var url = "https://wa.me/" + whatsappNumber + "?text=" + encodeURIComponent(msg);
      var link = document.getElementById("ccx-err-whatsapp");
      if (link) link.setAttribute("href", url);
    })();
  </script>

  <?php wp_footer(); ?>
</body>

</html>
