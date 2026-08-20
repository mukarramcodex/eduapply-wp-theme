<?php
/**
 * Template Name: EduApply — TMUC Fee Structure
 *
 * Displays the TMUC fee structure PDF (embedded viewer + download)
 * alongside the standard TMUC site header/footer chrome, so it feels like
 * part of the TMUC site rather than a generic utility page.
 *
 * The actual PDF comes from inc/resource-documents.php — upload the PDF to
 * the WordPress Media Library, then paste its URL into that file against the
 * 'tmuc_fee' key. Nothing in this template needs to change when the PDF
 * is updated.
 */

$ccx_doc = function_exists( 'ccx_get_resource_document' ) ? ccx_get_resource_document( 'tmuc_fee' ) : array();
$ccx_pdf_url     = ! empty( $ccx_doc['url'] ) ? $ccx_doc['url'] : '';
$ccx_pdf_updated = ! empty( $ccx_doc['updated'] ) ? $ccx_doc['updated'] : '';
$ccx_has_pdf     = ! empty( $ccx_pdf_url );
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Fee Structure — TMUC</title>
<meta name="description" content="The Millennium Universal College fee structure — view online or download the official PDF." />
<meta name="robots" content="noindex, follow" />

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Archivo:wght@500;600;700;800&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

<style>

#tmuc-page{
  --tmuc-black:#141414;
  --tmuc-black-900:#1E1E1E;
  --tmuc-black-800:#2A2A2A;
  --tmuc-red:#E11B2C;
  --tmuc-red-dark:#B4121F;
  --tmuc-red-tint:#FCE9EA;
  --tmuc-paper:#F5F5F5;
  --tmuc-paper-dim:#E7E7E7;
  --tmuc-ink:#1A1A1A;
  --tmuc-ink-soft:#5C5C5C;
  --tmuc-white:#FFFFFF;

  --tmuc-font-display:'Archivo', sans-serif;
  --tmuc-font-body:'Inter', sans-serif;

  --tmuc-shadow-s:0 2px 10px rgba(0,0,0,0.08);
  --tmuc-shadow-m:0 12px 30px rgba(0,0,0,0.14);
  --tmuc-shadow-l:0 24px 56px rgba(0,0,0,0.24);
  --tmuc-container:1300px;
}


#tmuc-page, #tmuc-page *{box-sizing:border-box; margin:0; padding:0;}

#tmuc-page{
  font-family:var(--tmuc-font-body);
  color:var(--tmuc-ink);
  background:var(--tmuc-white);
  overflow-x:hidden;
  -webkit-font-smoothing:antialiased;
  position:relative;
}

#tmuc-page img{max-width:100%; display:block;}

#tmuc-page a{color:inherit; text-decoration:none;}

#tmuc-page button{font-family:inherit; cursor:pointer; border:none; background:none;}

#tmuc-page ul{list-style:none;}

#tmuc-page .tmuc-container{max-width:var(--tmuc-container); margin:0 auto; padding:0 clamp(18px,4vw,48px);}


@media (prefers-reduced-motion: reduce){
  #tmuc-page *{animation-duration:0.001ms !important; animation-iteration-count:1 !important; transition-duration:0.001ms !important;}
}

#tmuc-page :focus-visible{outline:3px solid var(--tmuc-red); outline-offset:2px;}


#tmuc-page .tmuc-btn{
  display:inline-flex; align-items:center; gap:9px; padding:14px 28px; border-radius:3px;
  font-family:var(--tmuc-font-display); font-weight:700; font-size:13px; letter-spacing:0.03em; text-transform:uppercase;
  transition:background .2s ease, color .2s ease, transform .2s ease, border-color .2s ease;
}

#tmuc-page .tmuc-btn-red{background:var(--tmuc-red); color:#fff;}

#tmuc-page .tmuc-btn-red:hover{background:var(--tmuc-red-dark); transform:translateY(-2px);}

#tmuc-page .tmuc-btn-outline-white{background:transparent; border:1.5px solid rgba(255,255,255,0.55); color:#fff;}

#tmuc-page .tmuc-btn-outline-white:hover{background:rgba(255,255,255,0.12); transform:translateY(-2px);}

#tmuc-page .tmuc-btn-outline-black{background:transparent; border:1.5px solid var(--tmuc-black); color:var(--tmuc-black);}

#tmuc-page .tmuc-btn-outline-black:hover{background:var(--tmuc-black); color:#fff;}

#tmuc-page .tmuc-btn-block{width:100%; justify-content:center;}

#tmuc-page .tmuc-topbar .tmuc-container{display:flex; align-items:center; justify-content:space-between; gap:16px; flex-wrap:wrap;}


/* ============================================================
   HEADER
   ============================================================ */
#tmuc-page .tmuc-header{background:#fff; box-shadow:0 1px 0 rgba(0,0,0,0.08); position:relative; z-index:100;}

#tmuc-page .tmuc-header .tmuc-container{display:flex; align-items:center; justify-content:space-between; gap:20px; padding-top:14px; padding-bottom:14px;}

#tmuc-page .tmuc-logo img{height:46px; width:auto; display:block;}


#tmuc-page .tmuc-nav{display:flex; align-items:center; gap:4px;}

#tmuc-page .tmuc-nav > li{position:relative;}

#tmuc-page .tmuc-nav > li > a{
  display:flex; align-items:center; gap:5px;
  font-size:13px; font-weight:700; color:var(--tmuc-black); padding:10px 12px; border-radius:4px;
  transition:color .2s ease, background .2s ease;
}

#tmuc-page .tmuc-nav > li > a:hover, #tmuc-page .tmuc-nav > li:focus-within > a{color:var(--tmuc-red); background:var(--tmuc-paper);}

#tmuc-page .tmuc-caret{transition:transform .2s ease;}

#tmuc-page .tmuc-nav > li:hover .tmuc-caret, #tmuc-page .tmuc-nav > li:focus-within .tmuc-caret{transform:rotate(180deg);}


#tmuc-page .tmuc-dropdown{
  position:absolute; top:100%; left:0; min-width:230px;
  background:#fff; border-top:3px solid var(--tmuc-red);
  box-shadow:var(--tmuc-shadow-l); padding:10px;
  opacity:0; visibility:hidden; transform:translateY(8px);
  transition:opacity .2s ease, transform .2s ease, visibility .2s ease;
  z-index:50;
}

#tmuc-page .tmuc-nav > li:hover .tmuc-dropdown, #tmuc-page .tmuc-nav > li:focus-within .tmuc-dropdown{opacity:1; visibility:visible; transform:translateY(0);}

#tmuc-page .tmuc-dropdown a{display:block; padding:8px 12px; border-radius:4px; font-size:13px; font-weight:500; color:var(--tmuc-ink);}

#tmuc-page .tmuc-dropdown a:hover{background:var(--tmuc-paper); color:var(--tmuc-red);}

#tmuc-page .tmuc-dropdown.tmuc-mega{min-width:620px; column-count:3; column-gap:6px;}

#tmuc-page .tmuc-dropdown-label{font-size:10.5px; font-weight:700; text-transform:uppercase; letter-spacing:0.06em; color:var(--tmuc-red); padding:8px 12px 3px; break-after:avoid;}

#tmuc-page .tmuc-dropdown-group{break-inside:avoid; margin-bottom:6px;}


#tmuc-page .tmuc-header-cta{display:flex; align-items:center; gap:10px;}

#tmuc-page .tmuc-hamburger{
  display:none; width:42px; height:42px; border-radius:6px;
  align-items:center; justify-content:center; flex-direction:column; gap:5px;
  background:var(--tmuc-paper);
}

#tmuc-page .tmuc-hamburger span{width:19px; height:2px; background:var(--tmuc-black); display:block; transition:transform .25s ease, opacity .25s ease;}

#tmuc-page .tmuc-hamburger.tmuc-active span:nth-child(1){transform:translateY(7px) rotate(45deg);}

#tmuc-page .tmuc-hamburger.tmuc-active span:nth-child(2){opacity:0;}

#tmuc-page .tmuc-hamburger.tmuc-active span:nth-child(3){transform:translateY(-7px) rotate(-45deg);}


#tmuc-page .tmuc-mobile-nav{
  display:none; flex-direction:column; background:var(--tmuc-black);
  max-height:0; overflow:hidden; overflow-y:auto; transition:max-height .35s ease;
}

#tmuc-page .tmuc-mobile-nav.tmuc-open{max-height:70vh;}

#tmuc-page .tmuc-mobile-nav > li > a{display:block; color:#fff; font-size:14.5px; font-weight:700; padding:14px 20px; border-bottom:1px solid rgba(255,255,255,0.08);}

#tmuc-page .tmuc-mobile-sub{padding:0 20px 12px 30px; display:flex; flex-direction:column; gap:2px;}

#tmuc-page .tmuc-mobile-sub a{font-size:13px; font-weight:500; color:rgba(255,255,255,0.68); padding:7px 0;}

#tmuc-page .tmuc-mobile-cta{padding:16px 20px;}


@media (max-width:1180px){
  #tmuc-page .tmuc-nav{display:none;}
  #tmuc-page .tmuc-header-cta .tmuc-btn{display:none;}
  #tmuc-page .tmuc-hamburger{display:flex;}
  #tmuc-page .tmuc-mobile-nav{display:flex;}
}


/* ============================================================
   FOOTER
   ============================================================ */
#tmuc-page .tmuc-footer{background:var(--tmuc-black); color:rgba(255,255,255,0.68); padding:64px 0 0;}

#tmuc-page .tmuc-footer-grid{display:grid; grid-template-columns:1.3fr 1fr 1fr 1fr; gap:36px; padding-bottom:40px; border-bottom:1px solid rgba(255,255,255,0.1);}

#tmuc-page .tmuc-footer-brand img{height:46px; width:auto; margin-bottom:14px;}

#tmuc-page .tmuc-footer-brand p{font-size:13px; line-height:1.7; color:rgba(255,255,255,0.55); max-width:32ch;}

#tmuc-page .tmuc-footer-social{display:flex; gap:10px; margin-top:18px;}

#tmuc-page .tmuc-footer-social a{width:34px; height:34px; border-radius:50%; background:rgba(255,255,255,0.08); color:#fff; display:flex; align-items:center; justify-content:center; transition:background .2s ease;}

#tmuc-page .tmuc-footer-social a:hover{background:var(--tmuc-red);}

#tmuc-page .tmuc-footer-col h5{font-family:var(--tmuc-font-display); font-size:12px; font-weight:700; letter-spacing:0.07em; text-transform:uppercase; color:#fff; margin-bottom:18px;}

#tmuc-page .tmuc-footer-col ul{display:flex; flex-direction:column; gap:11px;}

#tmuc-page .tmuc-footer-col a{font-size:13.5px; color:rgba(255,255,255,0.65);}

#tmuc-page .tmuc-footer-col a:hover{color:#fff;}

#tmuc-page .tmuc-footer-bottom{display:flex; justify-content:space-between; align-items:center; flex-wrap:wrap; gap:12px; padding:20px 0 26px; font-size:12px; color:rgba(255,255,255,0.4);}

@media (max-width:900px){#tmuc-page .tmuc-footer-grid{grid-template-columns:1fr 1fr; row-gap:30px;}}

@media (max-width:520px){#tmuc-page .tmuc-footer-grid{grid-template-columns:1fr;}}

#tmuc-page .tmuc-modal-header{margin-bottom:22px; padding-right:30px;}

#tmuc-page .tmuc-modal-header h3{font-family:var(--tmuc-font-display); font-size:clamp(19px,2.4vw,23px); font-weight:800; color:var(--tmuc-black);}

#tmuc-page .tmuc-dept-header{margin-bottom:18px;}

#tmuc-page .tmuc-dept-header h3{font-family:var(--tmuc-font-display); font-size:clamp(19px,2.4vw,23px); font-weight:800; color:var(--tmuc-black);}

#tmuc-page .tmuc-dept-header p{margin-top:6px; font-size:13.5px; color:var(--tmuc-ink-soft); line-height:1.5;}

#tmuc-page .tmuc-dept-form-actions .tmuc-btn{flex:1; justify-content:center;}

#tmuc-page .tmuc-qa-header{margin-bottom:20px; padding-right:30px;}

#tmuc-page .tmuc-qa-header h3{font-family:var(--tmuc-font-display); font-size:clamp(19px,2.4vw,23px); font-weight:800; color:var(--tmuc-black);}

#tmuc-page .tmuc-qa-header p{margin-top:6px; font-size:13.5px; color:var(--tmuc-ink-soft); line-height:1.5;}

#tmuc-page .tmuc-qa-form-actions .tmuc-btn{flex:1; justify-content:center;}

/* ============================================================
   RESOURCE PAGE CONTENT (Merit List / Fee Structure)
   Scoped under #tmuc-page, reuses the TMUC design tokens above.
   ============================================================ */
#tmuc-page .tmuc-res-main{ background:var(--tmuc-paper); min-height:60vh; }
#tmuc-page .tmuc-res-breadcrumb{ padding:18px clamp(18px,4vw,48px) 0; font-size:13px; color:var(--tmuc-ink-soft); display:flex; gap:8px; align-items:center; }
#tmuc-page .tmuc-res-breadcrumb a{ color:var(--tmuc-ink-soft); }
#tmuc-page .tmuc-res-breadcrumb a:hover{ text-decoration:underline; }
#tmuc-page .tmuc-res-hero{ padding:22px 0 28px; }
#tmuc-page .tmuc-res-eyebrow{ font-size:12.5px; font-weight:700; text-transform:uppercase; letter-spacing:0.08em; color:var(--tmuc-ink-soft); margin-bottom:8px; }
#tmuc-page .tmuc-res-hero h1{ font-family:var(--tmuc-font-display); font-size:clamp(28px,4vw,42px); line-height:1.12; margin-bottom:12px; }
#tmuc-page .tmuc-res-lead{ max-width:720px; font-size:15.5px; line-height:1.65; color:var(--tmuc-ink-soft); }
#tmuc-page .tmuc-res-doc{ padding-bottom:64px; }
#tmuc-page .tmuc-res-doc-grid{ display:grid; grid-template-columns:1fr 320px; gap:28px; align-items:start; }
@media (max-width:900px){ #tmuc-page .tmuc-res-doc-grid{ grid-template-columns:1fr; } }
#tmuc-page .tmuc-res-doc-viewer{ background:var(--tmuc-white); border-radius:14px; box-shadow:var(--tmuc-shadow-m); overflow:hidden; min-height:70vh; display:flex; flex-direction:column; }
#tmuc-page .tmuc-res-doc-viewer iframe{ flex:1; width:100%; min-height:70vh; border:0; display:block; }
#tmuc-page .tmuc-res-doc-empty{ padding:48px 28px; text-align:center; color:var(--tmuc-ink-soft); }
#tmuc-page .tmuc-res-doc-side{ display:flex; flex-direction:column; gap:16px; }
#tmuc-page .tmuc-res-doc-card{ background:var(--tmuc-white); border-radius:14px; box-shadow:var(--tmuc-shadow-s); padding:22px; }
#tmuc-page .tmuc-res-doc-card h3{ font-family:var(--tmuc-font-display); font-size:17px; margin-bottom:8px; }
#tmuc-page .tmuc-res-doc-card p{ font-size:13.5px; line-height:1.55; color:var(--tmuc-ink-soft); margin-bottom:16px; }
#tmuc-page .tmuc-res-doc-card a{ width:100%; text-align:center; justify-content:center; display:flex; margin-bottom:10px; }
#tmuc-page .tmuc-res-updated{ font-size:12px; color:var(--tmuc-ink-soft); margin-top:10px; margin-bottom:0 !important; }
</style>
</head>
<body>
<div id="tmuc-page">

<header class="tmuc-header">
  <div class="tmuc-container">
    <a href="/tmuc" class="tmuc-logo" aria-label="TMUC home">
      <!-- Sourced directly from the official TMUC asset (tmuc.edu.pk) -->
      <img src="https://eduapply.online/wp-content/uploads/2026/08/tmuc-dark-logo.png" alt="The Millennium Universal College logo">
    </a>

    <ul class="tmuc-nav" aria-label="Primary">
      <li>
        <a href="#" aria-haspopup="true">Discover TMUC <svg class="tmuc-caret" width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M6 9l6 6 6-6"/></svg></a>
        <div class="tmuc-dropdown">
          <a href="#">About Us</a>
          <a href="#">Our History</a>
          <a href="#">Founder's Vision</a>
          <a href="#">Our Legacy</a>
          <a href="#">Leadership</a>
          <a href="#">Advisory Council</a>
          <a href="#">Academic Quality Assurance</a>
          <a href="#">International Office</a>
        </div>
      </li>
      <li>
        <a href="#" aria-haspopup="true">Study at TMUC <svg class="tmuc-caret" width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M6 9l6 6 6-6"/></svg></a>
        <div class="tmuc-dropdown tmuc-mega">
          <div class="tmuc-dropdown-group">
            <p class="tmuc-dropdown-label">School of Business Management</p>
            <a href="#">BA (Hons) Business Administration</a>
            <a href="#">MBA</a>
            <a href="#">LSE BSc Business and Management</a>
          </div>
          <div class="tmuc-dropdown-group">
            <p class="tmuc-dropdown-label">School of Creative Arts</p>
            <a href="#">BA Hons Fashion Textile</a>
            <a href="#">BA Hons Film &amp; Digital Arts</a>
            <a href="#">BA Hons Interior Design</a>
          </div>
          <div class="tmuc-dropdown-group">
            <p class="tmuc-dropdown-label">School of Computing &amp; Emerging Tech</p>
            <a href="#">BSc Hons Computer Science</a>
            <a href="#">HN Computing</a>
          </div>
          <div class="tmuc-dropdown-group">
            <p class="tmuc-dropdown-label">Faculty of Laws</p>
            <a href="#">LLB (Hons)</a>
            <a href="#">LLB — University of London</a>
          </div>
          <div class="tmuc-dropdown-group">
            <p class="tmuc-dropdown-label">Faculty of Professional Studies</p>
            <a href="#">ACCA</a>
            <a href="#">ICAP — CA</a>
          </div>
          <div class="tmuc-dropdown-group">
            <p class="tmuc-dropdown-label">More</p>
            <a href="#">School of Hospitality</a>
            <a href="#">School of Foundation</a>
            <a href="#">Faculty of Health Sciences</a>
          </div>
        </div>
      </li>
      <li><a href="#">Life at TMUC</a></li>
      <li><a href="#">Student Services</a></li>
      <li><a href="#">Careers</a></li>
      <li>
        <a href="#" aria-haspopup="true">Contact Us <svg class="tmuc-caret" width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M6 9l6 6 6-6"/></svg></a>
        <div class="tmuc-dropdown">
          <a href="#">TMUC Islamabad Campus</a>
          <a href="#">TMUC Rawalpindi Campus</a>
          <a href="#">TMUC Lahore Campus</a>
          <a href="#">TMUC Karachi Campus</a>
          <a href="#">TMUC Faisalabad Campus</a>
          <a href="#">TMUC Gujranwala Campus</a>
          <a href="#">TMUC Peshawar Campus</a>
          <a href="#">TMUC Abbottabad Campus</a>
          <a href="#">TMUC Multan Campus</a>
        </div>
      </li>
    </ul>

    <div class="tmuc-header-cta">
      <a href="#" class="tmuc-btn tmuc-btn-red tmuc-admission-trigger">Admission Now</a>
      <button class="tmuc-hamburger" id="tmuc-hamburger-btn" aria-label="Open menu" aria-expanded="false" aria-controls="tmuc-mobile-nav">
        <span></span><span></span><span></span>
      </button>
    </div>
  </div>

  <ul class="tmuc-mobile-nav" id="tmuc-mobile-nav" aria-label="Mobile primary">
    <li>
      <a href="#">Discover TMUC</a>
      <div class="tmuc-mobile-sub">
        <a href="#">About Us</a>
        <a href="#">Our History</a>
        <a href="#">Leadership</a>
      </div>
    </li>
    <li>
      <a href="#">Study at TMUC</a>
      <div class="tmuc-mobile-sub">
        <a href="#">School of Business Management</a>
        <a href="#">School of Creative Arts</a>
        <a href="#">School of Computing &amp; Emerging Tech</a>
        <a href="#">Faculty of Laws</a>
      </div>
    </li>
    <li><a href="#">Life at TMUC</a></li>
    <li><a href="#">Student Services</a></li>
    <li><a href="#">Careers</a></li>
    <li>
      <a href="#">Contact Us</a>
      <div class="tmuc-mobile-sub">
        <a href="#">Islamabad Campus</a>
        <a href="#">Lahore Campus</a>
        <a href="#">Karachi Campus</a>
      </div>
    </li>
    <li class="tmuc-mobile-cta"><a href="#" class="tmuc-btn tmuc-btn-red tmuc-btn-block tmuc-admission-trigger">Admission Now</a></li>
  </ul>
</header>

<main class="tmuc-res-main">
  <div class="tmuc-container tmuc-res-breadcrumb">
    <a href="/tmuc">TMUC</a>
    <span>/</span>
    <span>Fee Structure</span>
  </div>

  <section class="tmuc-res-hero">
    <div class="tmuc-container">
      <p class="tmuc-res-eyebrow">The Millennium Universal College</p>
      <h1>Fee Structure</h1>
      <p class="tmuc-res-lead">Review the official The Millennium Universal College fee structure below, including tuition and other applicable charges. Fees are set by the university and may change between intakes — the PDF below reflects the most recently published figures.</p>
    </div>
  </section>

  <section class="tmuc-res-doc">
    <div class="tmuc-container tmuc-res-doc-grid">
      <div class="tmuc-res-doc-viewer">
        <?php if ( $ccx_has_pdf ) : ?>
          <iframe src="https://docs.google.com/viewer?url=<?php echo rawurlencode( $ccx_pdf_url ); ?>&embedded=true" title="The Millennium Universal College Fee Structure PDF" loading="lazy"></iframe>
        <?php else : ?>
          <div class="tmuc-res-doc-empty">
            <p>The fee structure PDF hasn't been uploaded yet. Once it's added in <code>inc/resource-documents.php</code>, it will appear here automatically.</p>
          </div>
        <?php endif; ?>
      </div>

      <aside class="tmuc-res-doc-side">
        <div class="tmuc-res-doc-card">
          <h3>Download Fee Structure</h3>
          <p>Get the full PDF with the complete program-wise breakdown of tuition and other charges.</p>
          <?php if ( $ccx_has_pdf ) : ?>
            <a href="<?php echo esc_url( $ccx_pdf_url ); ?>" class="tmuc-btn tmuc-btn-red" download>Download Fee Structure PDF</a>
            <a href="<?php echo esc_url( $ccx_pdf_url ); ?>" class="tmuc-btn tmuc-btn-outline-black" target="_blank" rel="noopener">Open in New Tab</a>
            <?php if ( $ccx_pdf_updated ) : ?>
              <p class="tmuc-res-updated">Last updated: <?php echo esc_html( $ccx_pdf_updated ); ?></p>
            <?php endif; ?>
          <?php else : ?>
            <p class="tmuc-res-updated">Check back soon.</p>
          <?php endif; ?>
        </div>

        <div class="tmuc-res-doc-card">
          <h3>Have Questions About Fees?</h3>
          <p>For installment plans, scholarships or program-specific questions, our admissions team can guide you before you apply.</p>
          <a href="/admissions/apply?university=TMUC" class="tmuc-btn tmuc-btn-red">Apply Now</a>
          <a href="/tmuc" class="tmuc-btn tmuc-btn-outline-black">Back to TMUC</a>
        </div>
      </aside>
    </div>
  </section>
</main>

<footer class="tmuc-footer">
  <div class="tmuc-container">
    <div class="tmuc-footer-grid">
      <div class="tmuc-footer-brand">
        <!-- Sourced directly from the official TMUC asset (tmuc.edu.pk) -->
        <img src="https://tmuc.edu.pk/wp-content/uploads/2019/10/Tmuc-logo.png" alt="The Millennium Universal College logo">
        <p>TMUC Main Campus: 68 South Street, behind Nescom, H-11/4, Islamabad</p>
        <div class="tmuc-footer-social">
          <a href="https://web.facebook.com/tmuc.Islamabad/" target="_blank" rel="noopener" aria-label="TMUC on Facebook"><svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M22 12a10 10 0 10-11.6 9.9v-7H7.9V12h2.5V9.8c0-2.5 1.5-3.9 3.8-3.9 1.1 0 2.2.2 2.2.2v2.5h-1.3c-1.2 0-1.6.8-1.6 1.6V12h2.8l-.4 2.9h-2.4v7A10 10 0 0022 12z"/></svg></a>
          <a href="https://twitter.com/tmuc_Pakistan" target="_blank" rel="noopener" aria-label="TMUC on Twitter/X"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M18.9 3H22l-7.6 8.7L23 21h-6.8l-5.3-6.5L5 21H2l8.1-9.3L1.5 3h7l4.8 5.9L18.9 3z"/></svg></a>
          <a href="https://www.youtube.com/c/TheMillenniumUniversalCollegeTMUC" target="_blank" rel="noopener" aria-label="TMUC on YouTube"><svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M23 12s0-3.6-.46-5.3a2.9 2.9 0 00-2-2C18.9 4.2 12 4.2 12 4.2s-6.9 0-8.54.5a2.9 2.9 0 00-2 2C1 8.4 1 12 1 12s0 3.6.46 5.3a2.9 2.9 0 002 2c1.64.5 8.54.5 8.54.5s6.9 0 8.54-.5a2.9 2.9 0 002-2C23 15.6 23 12 23 12zM9.8 15.5V8.5l6 3.5z"/></svg></a>
          <a href="https://www.linkedin.com/company/tmuc/" target="_blank" rel="noopener" aria-label="TMUC on LinkedIn"><svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M4.98 3.5a2.5 2.5 0 11-.02 5 2.5 2.5 0 01.02-5zM3 9h4v12H3zM9 9h3.8v1.7h.05c.53-1 1.83-2.06 3.77-2.06 4.03 0 4.78 2.65 4.78 6.1V21h-4v-5.7c0-1.36-.02-3.1-1.89-3.1-1.9 0-2.19 1.48-2.19 3v5.8H9z"/></svg></a>
          <a href="https://www.instagram.com/tmucpakistan/" target="_blank" rel="noopener" aria-label="TMUC on Instagram"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="3" y="3" width="18" height="18" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="1"/></svg></a>
        </div>
      </div>

      <div class="tmuc-footer-col">
        <h5>Quick Links</h5>
        <ul>
          <li><a href="#">Pay Now</a></li>
          <li><a href="#">Careers</a></li>
          <li><a href="#">Virtual Job Fair</a></li>
          <li><a href="#">Announcements</a></li>
          <li><a href="#">Office of QA and Enhancement</a></li>
          <li><a href="#">Office of Internationalization</a></li>
          <li><a href="#">Privacy Policy</a></li>
        </ul>
      </div>

      <div class="tmuc-footer-col">
        <h5>Life at TMUC</h5>
        <ul>
          <li><a href="#">Facilities</a></li>
          <li><a href="#">Student Blog</a></li>
          <li><a href="#">Events &amp; News</a></li>
          <li><a href="#">Industry Engagement</a></li>
          <li><a href="#">TMUC Incubation Centre</a></li>
          <li><a href="#">Online Fee Payment</a></li>
          <li><a href="#">Harassment and Bullying Policy</a></li>
        </ul>
      </div>

      <div class="tmuc-footer-col">
        <h5>Academics</h5>
        <ul>
          <li><a href="#">Learning Management System</a></li>
          <li><a href="#">Online Library</a></li>
          <li><a href="#">Academic Concerns</a></li>
          <li><a href="#">International Fee Payment Guidance</a></li>
          <li><a href="#">Student Login</a></li>
        </ul>
      </div>
    </div>

    <div class="tmuc-footer-bottom">
      <p>Copyright All Rights Reserved &copy; <span id="tmuc-year"></span>, TMUC Pakistan</p>
    </div>
  </div>
</footer>

</div>

<script>
(function(){
  var btn = document.getElementById("tmuc-hamburger-btn");
  var nav = document.getElementById("tmuc-mobile-nav");
  if (btn && nav) {
    btn.addEventListener("click", function(){
      var open = btn.classList.toggle("tmuc-active");
      btn.setAttribute("aria-expanded", open ? "true" : "false");
      nav.classList.toggle("tmuc-mobile-open", open);
    });
  }

  var header = document.querySelector("#tmuc-page .tmuc-header");
  if (header) {
    var onScroll = function(){
      header.classList.toggle("tmuc-scrolled", window.scrollY > 12);
    };
    window.addEventListener("scroll", onScroll, { passive: true });
    onScroll();
  }

  var yearEl = document.getElementById("tmuc-year");
  if (yearEl) {
    yearEl.textContent = new Date().getFullYear();
  }
})();
</script>
</body>
</html>
