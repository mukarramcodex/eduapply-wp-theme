<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Something Went Wrong | EduApply</title>
  <meta name="robots" content="noindex, nofollow" />

  <!--
    IMPORTANT: this file must stay 100% static — no PHP, no calls to
    WordPress functions, no dependency on the database or theme files.
    A 500 error usually means PHP/WordPress itself is the thing that
    broke, so this page has to be able to render even when the CMS
    can't load at all. Update EDUAPPLY_HOME_URL below to your real
    domain before uploading.
  -->

  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    html,
    body {
      min-height: 100%;
    }

    body {
      font-family: 'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Arial, sans-serif;
      color: #15213A;
      background: #F4F6FA;
      -webkit-font-smoothing: antialiased;
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }

    a {
      color: inherit;
      text-decoration: none;
    }

    .ccx-err-header {
      background: #0A1120;
      padding: 16px 0;
      border-bottom: 3px solid #C9972E;
      text-align: center;
    }

    .ccx-err-brand {
      display: inline-flex;
      align-items: center;
      gap: 10px;
      color: #fff;
      font-weight: 700;
      font-size: 18px;
    }

    .ccx-err-brand-mark {
      width: 34px;
      height: 34px;
      border-radius: 9px;
      background: linear-gradient(135deg, #E4B450, #C9972E);
      display: inline-flex;
      align-items: center;
      justify-content: center;
      font-family: 'Courier New', monospace;
      font-weight: 700;
      font-size: 12px;
      color: #0A1120;
    }

    .ccx-err-main {
      flex: 1;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 40px 20px;
    }

    .ccx-err-card {
      max-width: 460px;
      width: 100%;
      text-align: center;
      background: #fff;
      border-radius: 22px;
      box-shadow: 0 24px 60px rgba(16, 27, 50, 0.18);
      padding: 48px 34px;
    }

    .ccx-err-code {
      font-weight: 800;
      font-size: 64px;
      line-height: 1;
      color: #C1443C;
      margin-bottom: 6px;
    }

    .ccx-err-title {
      font-weight: 700;
      font-size: 22px;
      color: #101B32;
      margin-bottom: 12px;
    }

    .ccx-err-text {
      font-size: 14px;
      color: #4B5670;
      line-height: 1.65;
      margin-bottom: 28px;
    }

    .ccx-err-actions {
      display: flex;
      flex-wrap: wrap;
      gap: 12px;
      justify-content: center;
    }

    .ccx-err-btn {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      padding: 13px 24px;
      border-radius: 999px;
      font-weight: 700;
      font-size: 13.5px;
      transition: transform .2s ease, background .2s ease;
    }

    .ccx-err-btn-primary {
      background: linear-gradient(180deg, #E4B450, #C9972E);
      color: #0A1120;
      box-shadow: 0 6px 18px rgba(201, 151, 46, 0.3);
    }

    .ccx-err-btn-primary:hover {
      transform: translateY(-2px);
    }

    .ccx-err-btn-outline {
      background: #fff;
      color: #101B32;
      border: 1.5px solid #E9ECF3;
    }

    .ccx-err-btn-outline:hover {
      background: #F4F6FA;
    }

    .ccx-err-footer {
      padding: 22px 0;
      text-align: center;
      font-size: 12px;
      color: #4B5670;
    }
  </style>
</head>

<body>

  <header class="ccx-err-header">
    <a href="https://eduapply.online/" class="ccx-err-brand">
      <span class="ccx-err-brand-mark">EA</span>
      EduApply
    </a>
  </header>

  <main class="ccx-err-main">
    <div class="ccx-err-card">
      <div class="ccx-err-code">500</div>
      <h1 class="ccx-err-title">Something went wrong on our end</h1>
      <p class="ccx-err-text">
        Our server ran into an unexpected problem. This isn't something you did —
        our team has been notified. Please try again in a few minutes, or reach out
        if you were in the middle of submitting an application.
      </p>
      <div class="ccx-err-actions">
        <a href="https://eduapply.online/" class="ccx-err-btn ccx-err-btn-primary">Return to Home</a>
        <a href="https://wa.me/?text=Hello%2C%20I%20got%20a%20server%20error%20on%20EduApply." class="ccx-err-btn ccx-err-btn-outline">Contact Support</a>
      </div>
    </div>
  </main>

  <footer class="ccx-err-footer">
    EduApply — an independent admissions guidance platform.
  </footer>

</body>

</html>
