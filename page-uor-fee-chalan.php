<?php
/**
 * Template Name: EduApply — UOR Fee Chalan
 *
 * Displays the UOR fee chalan PDF (embedded viewer + download)
 * alongside the standard UOR site header/footer chrome, so it feels like
 * part of the UOR site rather than a generic utility page.
 *
 * The actual PDF comes from inc/resource-documents.php — upload the PDF to
 * the WordPress Media Library, then paste its URL into that file against the
 * 'uor_chalan' key. Nothing in this template needs to change when the PDF
 * is updated.
 */

$ccx_doc = function_exists( 'ccx_get_resource_document' ) ? ccx_get_resource_document( 'uor_chalan' ) : array();
$ccx_pdf_url     = ! empty( $ccx_doc['url'] ) ? $ccx_doc['url'] : '';
$ccx_pdf_updated = ! empty( $ccx_doc['updated'] ) ? $ccx_doc['updated'] : '';
$ccx_has_pdf     = ! empty( $ccx_pdf_url );
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Fee Chalan — UOR</title>
<meta name="description" content="University of Rawalpindi fee chalan — view online or download the official PDF." />
<meta name="robots" content="noindex, follow" />

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Sora:wght@500;600;700;800&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

<style>

#uor-page{
  --uor-blue-950:#071B3D;
  --uor-blue-900:#0C2A5E;
  --uor-blue-800:#123B7D;
  --uor-blue-700:#1B4F9C;
  --uor-blue-600:#2563C7;
  --uor-red:#D42A2A;
  --uor-red-dark:#B01F1F;
  --uor-red-tint:#FDEBEB;
  --uor-paper:#F5F7FA;
  --uor-paper-dim:#E8ECF3;
  --uor-ink:#16233D;
  --uor-ink-soft:#57647E;
  --uor-white:#FFFFFF;

  --uor-font-display:'Sora', sans-serif;
  --uor-font-body:'Inter', sans-serif;

  --uor-shadow-s:0 2px 10px rgba(7,27,61,0.08);
  --uor-shadow-m:0 12px 30px rgba(7,27,61,0.14);
  --uor-shadow-l:0 22px 54px rgba(7,27,61,0.22);
  --uor-container:1280px;
}

#uor-page, #uor-page *{box-sizing:border-box; margin:0; padding:0;}

#uor-page{
  font-family:var(--uor-font-body);
  color:var(--uor-ink);
  background:var(--uor-white);
  overflow-x:hidden;
  -webkit-font-smoothing:antialiased;
  position:relative;
}

#uor-page img{max-width:100%; display:block;}

#uor-page a{color:inherit; text-decoration:none;}

#uor-page button{font-family:inherit; cursor:pointer; border:none; background:none;}

#uor-page ul{list-style:none;}

#uor-page .uor-container{max-width:var(--uor-container); margin:0 auto; padding:0 clamp(18px,4vw,48px);}


@media (prefers-reduced-motion: reduce){
  #uor-page *{animation-duration:0.001ms !important; animation-iteration-count:1 !important; transition-duration:0.001ms !important;}
}

#uor-page :focus-visible{outline:3px solid var(--uor-red); outline-offset:2px;}


#uor-page .uor-btn{
  display:inline-flex; align-items:center; gap:9px; padding:14px 28px; border-radius:6px;
  font-family:var(--uor-font-display); font-weight:700; font-size:13.5px; letter-spacing:0.03em; text-transform:uppercase;
  transition:background .2s ease, color .2s ease, transform .2s ease, box-shadow .2s ease, border-color .2s ease;
}

#uor-page .uor-btn-red{background:var(--uor-red); color:#fff; box-shadow:0 10px 24px rgba(212,42,42,0.32);}

#uor-page .uor-btn-red:hover{background:var(--uor-red-dark); transform:translateY(-2px);}

#uor-page .uor-btn-outline-white{background:transparent; border:1.5px solid rgba(255,255,255,0.6); color:#fff;}

#uor-page .uor-btn-outline-white:hover{background:rgba(255,255,255,0.14); transform:translateY(-2px);}

#uor-page .uor-btn-outline-blue{background:transparent; border:1.5px solid var(--uor-blue-700); color:var(--uor-blue-800);}

#uor-page .uor-btn-outline-blue:hover{background:var(--uor-blue-800); color:#fff;}

#uor-page .uor-btn-block{width:100%; justify-content:center;}


/* ============================================================
   HEADER
   ============================================================ */
#uor-page .uor-header{background:var(--uor-blue-900); position:relative; z-index:100;}

#uor-page .uor-header .uor-container{display:flex; align-items:center; justify-content:space-between; gap:20px; padding-top:14px; padding-bottom:14px;}

#uor-page .uor-logo img{height:44px; width:auto; display:block;}


#uor-page .uor-nav{display:flex; align-items:center; gap:6px;}

#uor-page .uor-nav > li{position:relative;}

#uor-page .uor-nav > li > a{
  display:flex; align-items:center; gap:5px;
  font-size:13.5px; font-weight:600; color:rgba(255,255,255,0.9); padding:10px 13px; border-radius:6px;
  transition:background .2s ease, color .2s ease;
}

#uor-page .uor-nav > li > a:hover, #uor-page .uor-nav > li:focus-within > a{background:rgba(255,255,255,0.08); color:#fff;}

#uor-page .uor-caret{transition:transform .2s ease;}

#uor-page .uor-nav > li:hover .uor-caret, #uor-page .uor-nav > li:focus-within .uor-caret{transform:rotate(180deg);}


#uor-page .uor-dropdown{
  position:absolute; top:100%; left:0; min-width:210px;
  background:#fff; border-radius:10px; box-shadow:var(--uor-shadow-l); padding:8px;
  opacity:0; visibility:hidden; transform:translateY(8px);
  transition:opacity .2s ease, transform .2s ease, visibility .2s ease;
}

#uor-page .uor-nav > li:hover .uor-dropdown, #uor-page .uor-nav > li:focus-within .uor-dropdown{opacity:1; visibility:visible; transform:translateY(0);}

#uor-page .uor-dropdown a{display:block; padding:9px 12px; border-radius:6px; font-size:13.5px; font-weight:500; color:var(--uor-ink);}

#uor-page .uor-dropdown a:hover{background:var(--uor-paper); color:var(--uor-blue-700);}


#uor-page .uor-header-cta{display:flex; align-items:center; gap:12px;}

#uor-page .uor-hamburger{
  display:none; width:42px; height:42px; border-radius:8px;
  align-items:center; justify-content:center; flex-direction:column; gap:5px;
  background:rgba(255,255,255,0.1);
}

#uor-page .uor-hamburger span{width:19px; height:2px; background:#fff; display:block; transition:transform .25s ease, opacity .25s ease;}

#uor-page .uor-hamburger.uor-active span:nth-child(1){transform:translateY(7px) rotate(45deg);}

#uor-page .uor-hamburger.uor-active span:nth-child(2){opacity:0;}

#uor-page .uor-hamburger.uor-active span:nth-child(3){transform:translateY(-7px) rotate(-45deg);}


#uor-page .uor-mobile-nav{
  display:none; flex-direction:column; background:var(--uor-blue-950);
  max-height:0; overflow:hidden; overflow-y:auto; transition:max-height .35s ease;
}

#uor-page .uor-mobile-nav.uor-open{max-height:70vh;}

#uor-page .uor-mobile-nav > li > a{display:block; color:#fff; font-size:15px; font-weight:600; padding:14px 20px; border-bottom:1px solid rgba(255,255,255,0.08);}

#uor-page .uor-mobile-sub{padding:0 20px 12px 30px; display:flex; flex-direction:column; gap:2px;}

#uor-page .uor-mobile-sub a{font-size:13.5px; font-weight:500; color:rgba(255,255,255,0.68); padding:7px 0;}

#uor-page .uor-mobile-cta{padding:16px 20px;}


@media (max-width:1080px){
  #uor-page .uor-nav{display:none;}
  #uor-page .uor-header-cta .uor-btn{display:none;}
  #uor-page .uor-hamburger{display:flex;}
  #uor-page .uor-mobile-nav{display:flex;}
}

#uor-page .uor-apply-cta .uor-btn{position:relative; z-index:1;}


/* ============================================================
   FOOTER
   ============================================================ */
#uor-page .uor-footer{background:var(--uor-blue-950); color:rgba(255,255,255,0.7); padding:68px 0 0;}

#uor-page .uor-footer-top{display:grid; grid-template-columns:1.3fr 1fr 1fr 1fr; gap:36px; padding-bottom:44px; border-bottom:1px solid rgba(255,255,255,0.08);}

#uor-page .uor-footer-brand img{height:44px; width:auto; margin-bottom:8px;}

#uor-page .uor-footer-hec{height:44px; width:auto; margin-top:12px; opacity:.9;}

#uor-page .uor-footer-brand p{font-size:13px; line-height:1.65; color:rgba(255,255,255,0.55); max-width:34ch; margin-top:14px;}

#uor-page .uor-footer-col h5{font-family:var(--uor-font-display); font-size:12px; font-weight:700; letter-spacing:0.07em; text-transform:uppercase; color:#fff; margin-bottom:18px;}

#uor-page .uor-footer-col ul{display:flex; flex-direction:column; gap:11px;}

#uor-page .uor-footer-col a{font-size:13.5px; color:rgba(255,255,255,0.65); transition:color .2s ease;}

#uor-page .uor-footer-col a:hover{color:#fff;}

#uor-page .uor-footer-contact-item{display:flex; gap:10px; align-items:flex-start; font-size:13.5px; line-height:1.5; color:rgba(255,255,255,0.68);}

#uor-page .uor-footer-contact-item svg{color:var(--uor-red); flex-shrink:0; margin-top:2px;}

#uor-page .uor-footer-bottom{display:flex; justify-content:space-between; align-items:center; flex-wrap:wrap; gap:14px; padding:22px 0 26px; font-size:12.5px; color:rgba(255,255,255,0.42);}

@media (max-width:900px){#uor-page .uor-footer-top{grid-template-columns:1fr 1fr; row-gap:32px;}}

@media (max-width:520px){#uor-page .uor-footer-top{grid-template-columns:1fr;}}

#uor-page .uor-modal-header{margin-bottom:22px; padding-right:30px;}

#uor-page .uor-modal-header h3{font-family:var(--uor-font-display); font-size:clamp(19px,2.4vw,23px); font-weight:700; color:var(--uor-blue-900);}

#uor-page .uor-dept-header{margin-bottom:18px;}

#uor-page .uor-dept-header h3{font-family:var(--uor-font-display); font-size:clamp(19px,2.4vw,23px); font-weight:700; color:var(--uor-blue-900);}

#uor-page .uor-dept-header p{margin-top:6px; font-size:13.5px; color:var(--uor-ink-soft); line-height:1.5;}

#uor-page .uor-dept-form-actions .uor-btn{flex:1; justify-content:center;}

#uor-page .uor-qa-header{margin-bottom:20px; padding-right:30px;}

#uor-page .uor-qa-header h3{font-family:var(--uor-font-display); font-size:clamp(19px,2.4vw,23px); font-weight:700; color:var(--uor-blue-900);}

#uor-page .uor-qa-header p{margin-top:6px; font-size:13.5px; color:var(--uor-ink-soft); line-height:1.5;}

#uor-page .uor-qa-form-actions .uor-btn{flex:1; justify-content:center;}

/* ============================================================
   RESOURCE PAGE CONTENT (Merit List / Fee Structure)
   Scoped under #uor-page, reuses the UOR design tokens above.
   ============================================================ */
#uor-page .uor-res-main{ background:var(--uor-paper); min-height:60vh; }
#uor-page .uor-res-breadcrumb{ padding:18px clamp(18px,4vw,48px) 0; font-size:13px; color:var(--uor-ink-soft); display:flex; gap:8px; align-items:center; }
#uor-page .uor-res-breadcrumb a{ color:var(--uor-ink-soft); }
#uor-page .uor-res-breadcrumb a:hover{ text-decoration:underline; }
#uor-page .uor-res-hero{ padding:22px 0 28px; }
#uor-page .uor-res-eyebrow{ font-size:12.5px; font-weight:700; text-transform:uppercase; letter-spacing:0.08em; color:var(--uor-ink-soft); margin-bottom:8px; }
#uor-page .uor-res-hero h1{ font-family:var(--uor-font-display); font-size:clamp(28px,4vw,42px); line-height:1.12; margin-bottom:12px; }
#uor-page .uor-res-lead{ max-width:720px; font-size:15.5px; line-height:1.65; color:var(--uor-ink-soft); }
#uor-page .uor-res-doc{ padding-bottom:64px; }
#uor-page .uor-res-doc-grid{ display:grid; grid-template-columns:1fr 320px; gap:28px; align-items:start; }
@media (max-width:900px){ #uor-page .uor-res-doc-grid{ grid-template-columns:1fr; } }
#uor-page .uor-res-doc-viewer{ background:var(--uor-white); border-radius:14px; box-shadow:var(--uor-shadow-m); overflow:hidden; min-height:70vh; display:flex; flex-direction:column; }
#uor-page .uor-res-doc-viewer iframe{ flex:1; width:100%; min-height:70vh; border:0; display:block; }
#uor-page .uor-res-doc-empty{ padding:48px 28px; text-align:center; color:var(--uor-ink-soft); }
#uor-page .uor-res-doc-side{ display:flex; flex-direction:column; gap:16px; }
#uor-page .uor-res-doc-card{ background:var(--uor-white); border-radius:14px; box-shadow:var(--uor-shadow-s); padding:22px; }
#uor-page .uor-res-doc-card h3{ font-family:var(--uor-font-display); font-size:17px; margin-bottom:8px; }
#uor-page .uor-res-doc-card p{ font-size:13.5px; line-height:1.55; color:var(--uor-ink-soft); margin-bottom:16px; }
#uor-page .uor-res-doc-card a{ width:100%; text-align:center; justify-content:center; display:flex; margin-bottom:10px; }
#uor-page .uor-res-updated{ font-size:12px; color:var(--uor-ink-soft); margin-top:10px; margin-bottom:0 !important; }
</style>
</head>
<body>
<div id="uor-page">

<header class="uor-header">
  <div class="uor-container">
    <a href="/uor" class="uor-logo" aria-label="University of Rawalpindi home">
      <!-- Sourced directly from the official UOR asset (uor.edu.pk) -->
      <img src="https://www.uor.edu.pk/frontend/academics/img/logo-primary.png" alt="University of Rawalpindi logo">
    </a>

    <ul class="uor-nav" aria-label="Primary">
      <li><a href="#">About UOR</a></li>
      <li>
        <a href="#" aria-haspopup="true">Admissions <svg class="uor-caret" width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M6 9l6 6 6-6"/></svg></a>
        <div class="uor-dropdown">
          <a href="#uor-programs" data-uor-scroll="#uor-programs">Programs</a>
          <a href="#">Fee Structure</a>
          <a href="#">Admissions FAQs</a>
          <a href="#">Fee Policy</a>
        </div>
      </li>
      <li><a href="#">Academic</a></li>
      <li><a href="#">Student Life</a></li>
      <li><a href="#">Scholarship</a></li>
      <li><a href="#">Blogs</a></li>
      <li><a href="#uor-footer-contact" data-uor-scroll="#uor-footer">Contact Us</a></li>
    </ul>

    <div class="uor-header-cta">
      <a href="#" class="uor-btn uor-btn-red uor-admission-trigger">Admission Now</a>
      <button class="uor-hamburger" id="uor-hamburger-btn" aria-label="Open menu" aria-expanded="false" aria-controls="uor-mobile-nav">
        <span></span><span></span><span></span>
      </button>
    </div>
  </div>

  <ul class="uor-mobile-nav" id="uor-mobile-nav" aria-label="Mobile primary">
    <li><a href="#">About UOR</a></li>
    <li>
      <a href="#">Admissions</a>
      <div class="uor-mobile-sub">
        <a href="#uor-programs" data-uor-scroll="#uor-programs">Programs</a>
        <a href="#">Fee Structure</a>
        <a href="#">Admissions FAQs</a>
        <a href="#">Fee Policy</a>
      </div>
    </li>
    <li><a href="#">Academic</a></li>
    <li><a href="#">Student Life</a></li>
    <li><a href="#">Scholarship</a></li>
    <li><a href="#">Blogs</a></li>
    <li><a href="#">Contact Us</a></li>
    <li class="uor-mobile-cta"><a href="#" class="uor-btn uor-btn-red uor-btn-block uor-admission-trigger">Admission Now</a></li>
  </ul>
</header>

<main class="uor-res-main">
  <div class="uor-container uor-res-breadcrumb">
    <a href="/uor">UOR</a>
    <span>/</span>
    <span>Fee Chalan</span>
  </div>

  <section class="uor-res-hero">
    <div class="uor-container">
      <p class="uor-res-eyebrow">University of Rawalpindi</p>
      <h1>Fee Chalan</h1>
      <p class="uor-res-lead">Download the official University of Rawalpindi fee chalan (bank deposit slip) below. Print it, fill in your details, and deposit your fee at any designated bank branch listed on the chalan before the due date.</p>
    </div>
  </section>

  <section class="uor-res-doc">
    <div class="uor-container uor-res-doc-grid">
      <div class="uor-res-doc-viewer">
        <?php if ( $ccx_has_pdf ) : ?>
          <iframe src="https://docs.google.com/viewer?url=<?php echo rawurlencode( $ccx_pdf_url ); ?>&embedded=true" title="University of Rawalpindi Fee Chalan PDF" loading="lazy"></iframe>
        <?php else : ?>
          <div class="uor-res-doc-empty">
            <p>The fee chalan PDF hasn't been uploaded yet. Once it's added in <code>inc/resource-documents.php</code>, it will appear here automatically.</p>
          </div>
        <?php endif; ?>
      </div>

      <aside class="uor-res-doc-side">
        <div class="uor-res-doc-card">
          <h3>Download Fee Chalan</h3>
          <p>Get the printable PDF chalan to deposit your fee at any designated bank branch.</p>
          <?php if ( $ccx_has_pdf ) : ?>
            <a href="<?php echo esc_url( $ccx_pdf_url ); ?>" class="uor-btn uor-btn-red" download>Download Fee Chalan PDF</a>
            <a href="<?php echo esc_url( $ccx_pdf_url ); ?>" class="uor-btn uor-btn-outline-blue" target="_blank" rel="noopener">Open in New Tab</a>
            <?php if ( $ccx_pdf_updated ) : ?>
              <p class="uor-res-updated">Last updated: <?php echo esc_html( $ccx_pdf_updated ); ?></p>
            <?php endif; ?>
          <?php else : ?>
            <p class="uor-res-updated">Check back soon.</p>
          <?php endif; ?>
        </div>

        <div class="uor-res-doc-card">
          <h3>Trouble With Your Chalan?</h3>
          <p>If your details are missing, incorrect, or the chalan won't print properly, contact the admissions/accounts office directly for a corrected copy.</p>
          <a href="/admissions/apply?university=UOR" class="uor-btn uor-btn-red">Apply Now</a>
          <a href="/uor" class="uor-btn uor-btn-outline-blue">Back to UOR</a>
        </div>
      </aside>
    </div>
  </section>
</main>

<footer class="uor-footer" id="uor-footer">
  <div class="uor-container">
    <div class="uor-footer-top">
      <div class="uor-footer-brand">
        <!-- Sourced directly from the official UOR assets (uor.edu.pk) -->
        <img src="https://www.uor.edu.pk/frontend/academics/img/logo-footer.png" alt="University of Rawalpindi logo">
        <p>Situated on the main GT Road near DHA-1 in Rawalpindi, the campus supports a range of student activities close to the city's cultural and historical sites.</p>
        <img class="uor-footer-hec" src="https://www.uor.edu.pk/frontend/academics/img/hec.png" alt="HEC recognition mark">
      </div>

      <div class="uor-footer-col">
        <h5>Featured Links</h5>
        <ul>
          <li><a href="#">About UOR</a></li>
          <li><a href="#">International</a></li>
          <li><a href="#">FAQs</a></li>
          <li><a href="#">Blogs</a></li>
        </ul>
      </div>

      <div class="uor-footer-col">
        <h5>Admissions</h5>
        <ul>
          <li><a href="#uor-programs" data-uor-scroll="#uor-programs">Programs</a></li>
          <li><a href="#">Admissions</a></li>
          <li><a href="#">Fee Structure</a></li>
          <li><a href="#">Privacy Policy</a></li>
        </ul>
      </div>

      <div class="uor-footer-col" id="uor-footer-contact">
        <h5>Contacts</h5>
        <ul>
          <li class="uor-footer-contact-item">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.362 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.338 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
            <a href="tel:051-8770171">051-8770171-76</a>
          </li>
          <li class="uor-footer-contact-item">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.362 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.338 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
            <a href="tel:+923098678670">+92 309-8678670</a>
          </li>
          <li class="uor-footer-contact-item">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 21s-7-6.2-7-11a7 7 0 0114 0c0 4.8-7 11-7 11z"/><circle cx="12" cy="10" r="2.5"/></svg>
            Main Grand Trunk Rd, near DHA-1, opposite High Court, Rawalpindi, Punjab 46000
          </li>
        </ul>
      </div>
    </div>

    <div class="uor-footer-bottom">
      <p>Copyright &copy; 2024 UOR. All Rights Reserved.</p>
      <div class="uor-social">
        <a href="https://facebook.com/uniofrawalpindi" target="_blank" rel="noopener" aria-label="UOR on Facebook"><svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M22 12a10 10 0 10-11.6 9.9v-7H7.9V12h2.5V9.8c0-2.5 1.5-3.9 3.8-3.9 1.1 0 2.2.2 2.2.2v2.5h-1.3c-1.2 0-1.6.8-1.6 1.6V12h2.8l-.4 2.9h-2.4v7A10 10 0 0022 12z"/></svg></a>
        <a href="https://www.linkedin.com/company/uniofrawalpindi" target="_blank" rel="noopener" aria-label="UOR on LinkedIn"><svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M4.98 3.5a2.5 2.5 0 11-.02 5 2.5 2.5 0 01.02-5zM3 9h4v12H3zM9 9h3.8v1.7h.05c.53-1 1.83-2.06 3.77-2.06 4.03 0 4.78 2.65 4.78 6.1V21h-4v-5.7c0-1.36-.02-3.1-1.89-3.1-1.9 0-2.19 1.48-2.19 3v5.8H9z"/></svg></a>
        <a href="https://twitter.com/uniofrawalpindi" target="_blank" rel="noopener" aria-label="UOR on Twitter/X"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M18.9 3H22l-7.6 8.7L23 21h-6.8l-5.3-6.5L5 21H2l8.1-9.3L1.5 3h7l4.8 5.9L18.9 3z"/></svg></a>
        <a href="https://www.instagram.com/uniofrawalpindi" target="_blank" rel="noopener" aria-label="UOR on Instagram"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="3" y="3" width="18" height="18" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="1"/></svg></a>
      </div>
    </div>
  </div>
</footer>

</div>

<script>
(function(){
  var btn = document.getElementById("uor-hamburger-btn");
  var nav = document.getElementById("uor-mobile-nav");
  if (btn && nav) {
    btn.addEventListener("click", function(){
      var open = btn.classList.toggle("uor-active");
      btn.setAttribute("aria-expanded", open ? "true" : "false");
      nav.classList.toggle("uor-mobile-open", open);
    });
  }

  var header = document.querySelector("#uor-page .uor-header");
  if (header) {
    var onScroll = function(){
      header.classList.toggle("uor-scrolled", window.scrollY > 12);
    };
    window.addEventListener("scroll", onScroll, { passive: true });
    onScroll();
  }

  var yearEl = document.getElementById("uor-year");
  if (yearEl) {
    yearEl.textContent = new Date().getFullYear();
  }
})();
</script>
</body>
</html>
