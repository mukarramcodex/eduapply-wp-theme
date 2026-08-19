<?php
/**
 * Template Name: EduApply — NUML Fee Structure
 *
 * Displays the NUML fee structure PDF (embedded viewer + download)
 * alongside the standard NUML site header/footer chrome, so it feels like
 * part of the NUML site rather than a generic utility page.
 *
 * The actual PDF comes from inc/resource-documents.php — upload the PDF to
 * the WordPress Media Library, then paste its URL into that file against the
 * 'numl_fee' key. Nothing in this template needs to change when the PDF
 * is updated.
 */

$ccx_doc = function_exists( 'ccx_get_resource_document' ) ? ccx_get_resource_document( 'numl_fee' ) : array();
$ccx_pdf_url     = ! empty( $ccx_doc['url'] ) ? $ccx_doc['url'] : '';
$ccx_pdf_updated = ! empty( $ccx_doc['updated'] ) ? $ccx_doc['updated'] : '';
$ccx_has_pdf     = ! empty( $ccx_pdf_url );
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Fee Structure — NUML</title>
<meta name="description" content="National University of Modern Languages fee structure — view online or download the official PDF." />
<meta name="robots" content="noindex, follow" />

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lora:wght@500;600;700&family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

<style>

#numl-page{
  --numl-maroon-950:#3B0C14;
  --numl-maroon-900:#5C121F;
  --numl-maroon-800:#7A1B29;
  --numl-maroon-700:#96222F;
  --numl-gold:#C9A227;
  --numl-gold-bright:#E0BB44;
  --numl-paper:#F6F5F2;
  --numl-paper-dim:#ECE8E0;
  --numl-ink:#241417;
  --numl-ink-soft:#5C5058;
  --numl-white:#FFFFFF;

  --numl-font-display:'Lora', serif;
  --numl-font-body:'Inter', sans-serif;

  --numl-shadow-s:0 2px 10px rgba(59,12,20,0.09);
  --numl-shadow-m:0 12px 30px rgba(59,12,20,0.15);
  --numl-shadow-l:0 22px 54px rgba(59,12,20,0.24);
  --numl-container:1300px;
}


#numl-page, #numl-page *{box-sizing:border-box; margin:0; padding:0;}

#numl-page{
  font-family:var(--numl-font-body);
  color:var(--numl-ink);
  background:var(--numl-white);
  overflow-x:hidden;
  -webkit-font-smoothing:antialiased;
  position:relative;
}

#numl-page img{max-width:100%; display:block;}

#numl-page a{color:inherit; text-decoration:none;}

#numl-page button{font-family:inherit; cursor:pointer; border:none; background:none;}

#numl-page ul{list-style:none;}

#numl-page .numl-container{max-width:var(--numl-container); margin:0 auto; padding:0 clamp(18px,4vw,48px);}


@media (prefers-reduced-motion: reduce){
  #numl-page *{animation-duration:0.001ms !important; animation-iteration-count:1 !important; transition-duration:0.001ms !important;}
}

#numl-page :focus-visible{outline:3px solid var(--numl-gold); outline-offset:2px;}


#numl-page .numl-btn{
  display:inline-flex; align-items:center; gap:8px; padding:12px 24px; border-radius:4px;
  font-weight:700; font-size:13px; letter-spacing:0.02em;
  transition:background .2s ease, color .2s ease, transform .2s ease, border-color .2s ease;
}

#numl-page .numl-btn-maroon{background:var(--numl-maroon-900); color:#fff;}

#numl-page .numl-btn-maroon:hover{background:var(--numl-maroon-800); transform:translateY(-1px);}

#numl-page .numl-btn-gold{background:var(--numl-gold); color:var(--numl-maroon-950);}

#numl-page .numl-btn-gold:hover{background:var(--numl-gold-bright); transform:translateY(-1px);}

#numl-page .numl-btn-outline{background:transparent; border:1.5px solid rgba(255,255,255,0.55); color:#fff;}

#numl-page .numl-btn-outline:hover{background:rgba(255,255,255,0.12);}

#numl-page .numl-btn-block{width:100%; justify-content:center;}

#numl-page .numl-topbar .numl-container{display:flex; align-items:center; justify-content:space-between; gap:16px; flex-wrap:wrap;}


/* ============================================================
   HEADER
   ============================================================ */
#numl-page .numl-header{background:#fff; box-shadow:0 1px 0 rgba(59,12,20,0.08); position:relative; z-index:100;}

#numl-page .numl-header .numl-container{display:flex; align-items:center; justify-content:space-between; gap:20px; padding-top:12px; padding-bottom:12px;}

#numl-page .numl-logo img{height:54px; width:auto; display:block;}


#numl-page .numl-nav{display:flex; align-items:center; gap:4px;}

#numl-page .numl-nav > li{position:relative;}

#numl-page .numl-nav > li > a{
  display:flex; align-items:center; gap:5px;
  font-size:13px; font-weight:700; color:var(--numl-maroon-900); padding:10px 11px; border-radius:5px;
  text-transform:uppercase; letter-spacing:0.02em;
  transition:background .2s ease;
}

#numl-page .numl-nav > li > a:hover, #numl-page .numl-nav > li:focus-within > a{background:var(--numl-paper);}

#numl-page .numl-caret{transition:transform .2s ease;}

#numl-page .numl-nav > li:hover .numl-caret, #numl-page .numl-nav > li:focus-within .numl-caret{transform:rotate(180deg);}


#numl-page .numl-dropdown{
  position:absolute; top:100%; left:0; min-width:250px;
  background:#fff; border-top:3px solid var(--numl-gold); border-radius:0 0 8px 8px;
  box-shadow:var(--numl-shadow-l); padding:10px;
  opacity:0; visibility:hidden; transform:translateY(8px);
  transition:opacity .2s ease, transform .2s ease, visibility .2s ease;
  z-index:50;
}

#numl-page .numl-nav > li:hover .numl-dropdown, #numl-page .numl-nav > li:focus-within .numl-dropdown{opacity:1; visibility:visible; transform:translateY(0);}

#numl-page .numl-dropdown a{display:block; padding:8px 12px; border-radius:5px; font-size:13px; font-weight:500; color:var(--numl-ink);}

#numl-page .numl-dropdown a:hover{background:var(--numl-paper); color:var(--numl-maroon-800);}

#numl-page .numl-dropdown.numl-mega{min-width:600px; column-count:2; column-gap:6px;}

#numl-page .numl-dropdown-label{font-size:10.5px; font-weight:700; text-transform:uppercase; letter-spacing:0.06em; color:var(--numl-maroon-700); padding:8px 12px 3px; break-after:avoid;}

#numl-page .numl-dropdown-group{break-inside:avoid; margin-bottom:4px;}


#numl-page .numl-header-cta{display:flex; align-items:center; gap:10px;}

#numl-page .numl-hamburger{
  display:none; width:42px; height:42px; border-radius:6px;
  align-items:center; justify-content:center; flex-direction:column; gap:5px;
  background:var(--numl-paper);
}

#numl-page .numl-hamburger span{width:19px; height:2px; background:var(--numl-maroon-900); display:block; transition:transform .25s ease, opacity .25s ease;}

#numl-page .numl-hamburger.numl-active span:nth-child(1){transform:translateY(7px) rotate(45deg);}

#numl-page .numl-hamburger.numl-active span:nth-child(2){opacity:0;}

#numl-page .numl-hamburger.numl-active span:nth-child(3){transform:translateY(-7px) rotate(-45deg);}


#numl-page .numl-mobile-nav{
  display:none; flex-direction:column; background:var(--numl-maroon-950);
  max-height:0; overflow:hidden; overflow-y:auto; transition:max-height .35s ease;
}

#numl-page .numl-mobile-nav.numl-open{max-height:70vh;}

#numl-page .numl-mobile-nav > li > a{display:block; color:#fff; font-size:14.5px; font-weight:700; padding:14px 20px; border-bottom:1px solid rgba(255,255,255,0.08); text-transform:uppercase; letter-spacing:0.02em;}

#numl-page .numl-mobile-sub{padding:0 20px 12px 30px; display:flex; flex-direction:column; gap:2px;}

#numl-page .numl-mobile-sub a{font-size:13px; font-weight:500; color:rgba(255,255,255,0.68); padding:7px 0;}


@media (max-width:1120px){
  #numl-page .numl-nav{display:none;}
  #numl-page .numl-header-cta .numl-btn{display:none;}
  #numl-page .numl-hamburger{display:flex;}
  #numl-page .numl-mobile-nav{display:flex;}
}

#numl-page .numl-quicklinks-strip .numl-container{display:flex; flex-wrap:wrap; gap:2px 0;}

#numl-page .numl-ticker .numl-container{display:flex; align-items:center; gap:14px;}


/* ============================================================
   FOOTER
   ============================================================ */
#numl-page .numl-footer{background:var(--numl-maroon-950); color:rgba(255,255,255,0.68); padding:64px 0 0;}

#numl-page .numl-footer-grid{display:grid; grid-template-columns:1.3fr 1fr 1fr 1.2fr; gap:36px; padding-bottom:40px; border-bottom:1px solid rgba(255,255,255,0.1);}

#numl-page .numl-footer-brand img{height:52px; width:auto; margin-bottom:14px;}

#numl-page .numl-footer-brand p{font-size:13px; line-height:1.7; color:rgba(255,255,255,0.6);}

#numl-page .numl-footer-col h5{font-family:var(--numl-font-display); font-size:12.5px; font-weight:700; letter-spacing:0.06em; text-transform:uppercase; color:var(--numl-gold-bright); margin-bottom:16px;}

#numl-page .numl-footer-col ul{display:flex; flex-direction:column; gap:10px;}

#numl-page .numl-footer-col a{font-size:13.5px; color:rgba(255,255,255,0.65);}

#numl-page .numl-footer-col a:hover{color:#fff;}

#numl-page .numl-footer-map{border-radius:10px; overflow:hidden; min-height:190px; box-shadow:var(--numl-shadow-m);}

#numl-page .numl-footer-map iframe{width:100%; height:100%; min-height:190px; border:0; display:block;}

#numl-page .numl-footer-bottom{display:flex; justify-content:space-between; align-items:center; flex-wrap:wrap; gap:12px; padding:20px 0 26px; font-size:12px; color:rgba(255,255,255,0.4);}

#numl-page .numl-footer-utility{display:flex; flex-wrap:wrap; gap:14px; padding:18px 0; border-bottom:1px solid rgba(255,255,255,0.08); font-size:12px;}

#numl-page .numl-footer-utility a{color:rgba(255,255,255,0.5);}

#numl-page .numl-footer-utility a:hover{color:var(--numl-gold-bright);}

@media (max-width:900px){#numl-page .numl-footer-grid{grid-template-columns:1fr 1fr; row-gap:30px;}}

@media (max-width:520px){#numl-page .numl-footer-grid{grid-template-columns:1fr;}}

#numl-page .numl-modal-header{margin-bottom:22px; padding-right:30px;}

#numl-page .numl-modal-header h3{font-family:var(--numl-font-display); font-size:clamp(19px,2.4vw,23px); font-weight:700; color:var(--numl-maroon-900);}

#numl-page .numl-dept-header{margin-bottom:18px;}

#numl-page .numl-dept-header h3{font-family:var(--numl-font-display); font-size:clamp(19px,2.4vw,23px); font-weight:700; color:var(--numl-maroon-900);}

#numl-page .numl-dept-header p{margin-top:6px; font-size:13.5px; color:var(--numl-ink-soft); line-height:1.5;}

#numl-page .numl-dept-form-actions .numl-btn{flex:1; justify-content:center;}

#numl-page .numl-qa-header{margin-bottom:20px; padding-right:30px;}

#numl-page .numl-qa-header h3{font-family:var(--numl-font-display); font-size:clamp(19px,2.4vw,23px); font-weight:700; color:var(--numl-maroon-900);}

#numl-page .numl-qa-header p{margin-top:6px; font-size:13.5px; color:var(--numl-ink-soft); line-height:1.5;}

#numl-page .numl-qa-form-actions .numl-btn{flex:1; justify-content:center;}

/* ============================================================
   RESOURCE PAGE CONTENT (Merit List / Fee Structure)
   Scoped under #numl-page, reuses the NUML design tokens above.
   ============================================================ */
#numl-page .numl-res-main{ background:var(--numl-paper); min-height:60vh; }
#numl-page .numl-res-breadcrumb{ padding:18px clamp(18px,4vw,48px) 0; font-size:13px; color:var(--numl-ink-soft); display:flex; gap:8px; align-items:center; }
#numl-page .numl-res-breadcrumb a{ color:var(--numl-ink-soft); }
#numl-page .numl-res-breadcrumb a:hover{ text-decoration:underline; }
#numl-page .numl-res-hero{ padding:22px 0 28px; }
#numl-page .numl-res-eyebrow{ font-size:12.5px; font-weight:700; text-transform:uppercase; letter-spacing:0.08em; color:var(--numl-ink-soft); margin-bottom:8px; }
#numl-page .numl-res-hero h1{ font-family:var(--numl-font-display); font-size:clamp(28px,4vw,42px); line-height:1.12; margin-bottom:12px; }
#numl-page .numl-res-lead{ max-width:720px; font-size:15.5px; line-height:1.65; color:var(--numl-ink-soft); }
#numl-page .numl-res-doc{ padding-bottom:64px; }
#numl-page .numl-res-doc-grid{ display:grid; grid-template-columns:1fr 320px; gap:28px; align-items:start; }
@media (max-width:900px){ #numl-page .numl-res-doc-grid{ grid-template-columns:1fr; } }
#numl-page .numl-res-doc-viewer{ background:var(--numl-white); border-radius:14px; box-shadow:var(--numl-shadow-m); overflow:hidden; min-height:70vh; display:flex; flex-direction:column; }
#numl-page .numl-res-doc-viewer iframe{ flex:1; width:100%; min-height:70vh; border:0; display:block; }
#numl-page .numl-res-doc-empty{ padding:48px 28px; text-align:center; color:var(--numl-ink-soft); }
#numl-page .numl-res-doc-side{ display:flex; flex-direction:column; gap:16px; }
#numl-page .numl-res-doc-card{ background:var(--numl-white); border-radius:14px; box-shadow:var(--numl-shadow-s); padding:22px; }
#numl-page .numl-res-doc-card h3{ font-family:var(--numl-font-display); font-size:17px; margin-bottom:8px; }
#numl-page .numl-res-doc-card p{ font-size:13.5px; line-height:1.55; color:var(--numl-ink-soft); margin-bottom:16px; }
#numl-page .numl-res-doc-card a{ width:100%; text-align:center; justify-content:center; display:flex; margin-bottom:10px; }
#numl-page .numl-res-updated{ font-size:12px; color:var(--numl-ink-soft); margin-top:10px; margin-bottom:0 !important; }
</style>
</head>
<body>
<div id="numl-page">

<header class="numl-header">
  <div class="numl-container">
    <a href="/numl" class="numl-logo" aria-label="NUML home">
      <!-- Sourced directly from the official NUML asset (numl.edu.pk) -->
      <img src="https://numl.edu.pk/templates/template10/images/numl_logo.png" alt="National University of Modern Languages logo">
    </a>

    <ul class="numl-nav" aria-label="Primary">
      <li>
        <a href="#" aria-haspopup="true">About <svg class="numl-caret" width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M6 9l6 6 6-6"/></svg></a>
        <div class="numl-dropdown">
          <a href="#">Board of Governors</a>
          <a href="#">Rector</a>
          <a href="#">Director General</a>
          <a href="#">History</a>
          <a href="#">Core Values</a>
          <a href="#">Vision &amp; Mission</a>
          <a href="#">Objectives</a>
        </div>
      </li>
      <li>
        <a href="#" aria-haspopup="true">Campuses <svg class="numl-caret" width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M6 9l6 6 6-6"/></svg></a>
        <div class="numl-dropdown numl-mega">
          <a href="#">Lahore</a>
          <a href="#">Faisalabad</a>
          <a href="#">Multan</a>
          <a href="#">Hyderabad</a>
          <a href="#">Quetta</a>
          <a href="#">Peshawar</a>
          <a href="#">Karachi</a>
          <a href="#">Rawalpindi</a>
          <a href="#">Mirpur (Azad Kashmir)</a>
        </div>
      </li>
      <li>
        <a href="#" aria-haspopup="true">Faculties <svg class="numl-caret" width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M6 9l6 6 6-6"/></svg></a>
        <div class="numl-dropdown numl-mega">
          <a href="#">Faculty of Engineering and Computing</a>
          <a href="#">Faculty of Languages and Cultures</a>
          <a href="#">Faculty of Management Sciences</a>
          <a href="#">Faculty of Social Sciences</a>
          <a href="#">Faculty of Arts and Humanities</a>
          <a href="#">Confucius Institute</a>
          <a href="#">Islamabad King Sejong Institute</a>
        </div>
      </li>
      <li>
        <a href="#" aria-haspopup="true">Academics <svg class="numl-caret" width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M6 9l6 6 6-6"/></svg></a>
        <div class="numl-dropdown numl-mega">
          <div class="numl-dropdown-group">
            <p class="numl-dropdown-label">Admissions</p>
            <a href="#">Online Admissions</a>
            <a href="#">Fee Structure</a>
            <a href="#">Eligibility Criteria</a>
            <a href="#">Admission Schedule</a>
          </div>
          <div class="numl-dropdown-group">
            <p class="numl-dropdown-label">Programs</p>
            <a href="#">Undergraduate Programs</a>
            <a href="#">Graduate Programs</a>
            <a href="#">PhD Programs</a>
            <a href="#">Diplomas</a>
          </div>
        </div>
      </li>
      <li><a href="#">Offices</a></li>
      <li>
        <a href="#" aria-haspopup="true">Research <svg class="numl-caret" width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M6 9l6 6 6-6"/></svg></a>
        <div class="numl-dropdown">
          <a href="#">Journals</a>
          <a href="#">Projects</a>
          <a href="#">Thesis Repository</a>
          <a href="#">Annual Report</a>
          <a href="#">Numlian Magazine</a>
        </div>
      </li>
      <li>
        <a href="#" aria-haspopup="true">Life @ NUML <svg class="numl-caret" width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M6 9l6 6 6-6"/></svg></a>
        <div class="numl-dropdown">
          <a href="#">Gallery</a>
          <a href="#">Facilities</a>
          <a href="#">Societies</a>
          <a href="#">NUML Radio</a>
        </div>
      </li>
      <li><a href="#">Contact Us</a></li>
    </ul>

    <div class="numl-header-cta">
      <a href="#" class="numl-btn numl-btn-maroon numl-admission-trigger">Admission Now</a>
      <button class="numl-hamburger" id="numl-hamburger-btn" aria-label="Open menu" aria-expanded="false" aria-controls="numl-mobile-nav">
        <span></span><span></span><span></span>
      </button>
    </div>
  </div>

  <ul class="numl-mobile-nav" id="numl-mobile-nav" aria-label="Mobile primary">
    <li>
      <a href="#">About</a>
      <div class="numl-mobile-sub">
        <a href="#">Rector</a>
        <a href="#">Director General</a>
        <a href="#">History</a>
        <a href="#">Vision &amp; Mission</a>
      </div>
    </li>
    <li>
      <a href="#">Campuses</a>
      <div class="numl-mobile-sub">
        <a href="#">Lahore</a>
        <a href="#">Faisalabad</a>
        <a href="#">Multan</a>
        <a href="#">Peshawar</a>
        <a href="#">Karachi</a>
        <a href="#">Rawalpindi</a>
      </div>
    </li>
    <li>
      <a href="#">Faculties</a>
      <div class="numl-mobile-sub">
        <a href="#">Faculty of Languages and Cultures</a>
        <a href="#">Faculty of Engineering and Computing</a>
        <a href="#">Faculty of Management Sciences</a>
        <a href="#">Faculty of Social Sciences</a>
      </div>
    </li>
    <li>
      <a href="#">Academics</a>
      <div class="numl-mobile-sub">
        <a href="#">Undergraduate Programs</a>
        <a href="#">Graduate Programs</a>
        <a href="#">PhD Programs</a>
        <a href="#">Online Admissions</a>
      </div>
    </li>
    <li><a href="#">Offices</a></li>
    <li><a href="#">Research</a></li>
    <li><a href="#">Life @ NUML</a></li>
    <li><a href="#">Contact Us</a></li>
    <li style="padding:16px 20px;"><a href="#" class="numl-btn numl-btn-maroon numl-btn-block numl-admission-trigger">Admission Now</a></li>
  </ul>
</header>

<main class="numl-res-main">
  <div class="numl-container numl-res-breadcrumb">
    <a href="/numl">NUML</a>
    <span>/</span>
    <span>Fee Structure</span>
  </div>

  <section class="numl-res-hero">
    <div class="numl-container">
      <p class="numl-res-eyebrow">National University of Modern Languages</p>
      <h1>Fee Structure</h1>
      <p class="numl-res-lead">Review the official National University of Modern Languages fee structure below, including tuition and other applicable charges. Fees are set by the university and may change between intakes — the PDF below reflects the most recently published figures.</p>
    </div>
  </section>

  <section class="numl-res-doc">
    <div class="numl-container numl-res-doc-grid">
      <div class="numl-res-doc-viewer">
        <?php if ( $ccx_has_pdf ) : ?>
          <iframe src="<?php echo esc_url( $ccx_pdf_url ); ?>" title="National University of Modern Languages Fee Structure PDF" loading="lazy"></iframe>
        <?php else : ?>
          <div class="numl-res-doc-empty">
            <p>The fee structure PDF hasn't been uploaded yet. Once it's added in <code>inc/resource-documents.php</code>, it will appear here automatically.</p>
          </div>
        <?php endif; ?>
      </div>

      <aside class="numl-res-doc-side">
        <div class="numl-res-doc-card">
          <h3>Download Fee Structure</h3>
          <p>Get the full PDF with the complete program-wise breakdown of tuition and other charges.</p>
          <?php if ( $ccx_has_pdf ) : ?>
            <a href="<?php echo esc_url( $ccx_pdf_url ); ?>" class="numl-btn numl-btn-maroon" download>Download Fee Structure PDF</a>
            <a href="<?php echo esc_url( $ccx_pdf_url ); ?>" class="numl-btn numl-btn-outline" target="_blank" rel="noopener">Open in New Tab</a>
            <?php if ( $ccx_pdf_updated ) : ?>
              <p class="numl-res-updated">Last updated: <?php echo esc_html( $ccx_pdf_updated ); ?></p>
            <?php endif; ?>
          <?php else : ?>
            <p class="numl-res-updated">Check back soon.</p>
          <?php endif; ?>
        </div>

        <div class="numl-res-doc-card">
          <h3>Have Questions About Fees?</h3>
          <p>For installment plans, scholarships or program-specific questions, our admissions team can guide you before you apply.</p>
          <a href="/admissions/apply?university=NUML" class="numl-btn numl-btn-maroon">Apply Now</a>
          <a href="/numl" class="numl-btn numl-btn-outline">Back to NUML</a>
        </div>
      </aside>
    </div>
  </section>
</main>

<footer class="numl-footer" id="numl-contact">
  <div class="numl-container">
    <div class="numl-footer-grid">
      <div class="numl-footer-brand">
        <!-- Sourced directly from the official NUML asset (numl.edu.pk) -->
        <img src="https://numl.edu.pk/templates/template10/images/logo.png" alt="National University of Modern Languages logo">
        <p>National University of Modern Languages<br>H-9/4 Islamabad, Pakistan<br>Phone: <a href="tel:+92519265100">+92-51-9265100</a><br>Email: <a href="mailto:info@numl.edu.pk">info@numl.edu.pk</a></p>
      </div>

      <div class="numl-footer-col">
        <h5>Regional Campuses</h5>
        <ul>
          <li><a href="#">Lahore Campus</a></li>
          <li><a href="#">Faisalabad Campus</a></li>
          <li><a href="#">Multan Campus</a></li>
          <li><a href="#">Hyderabad Campus</a></li>
          <li><a href="#">Quetta Campus</a></li>
          <li><a href="#">Peshawar Campus</a></li>
          <li><a href="#">Karachi Campus</a></li>
          <li><a href="#">Rawalpindi Campus</a></li>
          <li><a href="#">Mirpur AJK Campus</a></li>
        </ul>
      </div>

      <div class="numl-footer-col">
        <h5>Explore</h5>
        <ul>
          <li><a href="#">Admissions</a></li>
          <li><a href="#">Faculties</a></li>
          <li><a href="#">Research</a></li>
          <li><a href="#">Gallery</a></li>
          <li><a href="#">Facilities</a></li>
          <li><a href="#">Privacy Policy</a></li>
        </ul>
      </div>

      <div class="numl-footer-col">
        <h5>Main Campus Map</h5>
        <div class="numl-footer-map">
          <!-- Sourced directly from the official NUML embed (numl.edu.pk) -->
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3320.63768734688!2d73.04938881473066!3d33.66654864540482!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38df9570806ed9ed%3A0x894fbeb9e70954d4!2sNational+University+Of+Modern+Languages!5e0!3m2!1sen!2sus!4v1493360961919"
            title="Map showing NUML main campus, H-9/4 Islamabad"
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>

    <div class="numl-footer-utility">
      <a href="#">NUML ERP</a>
      <a href="#">Admission</a>
      <a href="#">LMS</a>
      <a href="#">Student Portal</a>
      <a href="#">Library</a>
      <a href="#">Journals</a>
      <a href="#">E-Registration</a>
      <a href="#">Online QEC</a>
      <a href="#">Results</a>
      <a href="#">Datesheets</a>
      <a href="#">Scholarships</a>
      <a href="#">Feedback</a>
      <a href="#">Telephone Directory</a>
    </div>

    <div class="numl-footer-bottom">
      <p><span id="numl-year"></span> &copy; National University of Modern Languages, Islamabad.</p>
      <a href="#">Privacy Policy</a>
    </div>
  </div>
</footer>

</div>

<script>
(function(){
  var btn = document.getElementById("numl-hamburger-btn");
  var nav = document.getElementById("numl-mobile-nav");
  if (btn && nav) {
    btn.addEventListener("click", function(){
      var open = btn.classList.toggle("numl-active");
      btn.setAttribute("aria-expanded", open ? "true" : "false");
      nav.classList.toggle("numl-mobile-open", open);
    });
  }

  var header = document.querySelector("#numl-page .numl-header");
  if (header) {
    var onScroll = function(){
      header.classList.toggle("numl-scrolled", window.scrollY > 12);
    };
    window.addEventListener("scroll", onScroll, { passive: true });
    onScroll();
  }

  var yearEl = document.getElementById("numl-year");
  if (yearEl) {
    yearEl.textContent = new Date().getFullYear();
  }
})();
</script>
</body>
</html>
