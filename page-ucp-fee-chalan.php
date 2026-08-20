<?php
/**
 * Template Name: EduApply — UCP Fee Chalan
 *
 * Displays the UCP fee chalan PDF (embedded viewer + download)
 * alongside the standard UCP site header/footer chrome, so it feels like
 * part of the UCP site rather than a generic utility page.
 *
 * The actual PDF comes from inc/resource-documents.php — upload the PDF to
 * the WordPress Media Library, then paste its URL into that file against the
 * 'ucp_chalan' key. Nothing in this template needs to change when the PDF
 * is updated.
 */

$ccx_doc = function_exists( 'ccx_get_resource_document' ) ? ccx_get_resource_document( 'ucp_chalan' ) : array();
$ccx_pdf_url     = ! empty( $ccx_doc['url'] ) ? $ccx_doc['url'] : '';
$ccx_pdf_updated = ! empty( $ccx_doc['updated'] ) ? $ccx_doc['updated'] : '';
$ccx_has_pdf     = ! empty( $ccx_pdf_url );
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Fee Chalan — UCP</title>
<meta name="description" content="University of Central Punjab fee chalan — view online or download the official PDF." />
<meta name="robots" content="noindex, follow" />

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Playfair+Display:wght@600;700&family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

<style>

:root{}

#ucp-page{
  --ucp-navy-950:#0B1626;
  --ucp-navy-900:#12213D;
  --ucp-navy-800:#1B2B4B;
  --ucp-navy-700:#233A63;
  --ucp-maroon-900:#3A0F1C;
  --ucp-maroon-700:#5C1A2E;
  --ucp-maroon-600:#7A2138;
  --ucp-red-600:#B4152F;
  --ucp-gold:#F0B429;
  --ucp-gold-dim:#C99418;
  --ucp-paper:#EEF1F5;
  --ucp-paper-dim:#E3E7EE;
  --ucp-ink:#1B2B4B;
  --ucp-ink-soft:#5B667C;
  --ucp-white:#FFFFFF;

  --ucp-font-display:'Oswald', sans-serif;
  --ucp-font-serif:'Playfair Display', serif;
  --ucp-font-body:'Inter', sans-serif;

  --ucp-shadow-s:0 2px 8px rgba(11,22,38,0.10);
  --ucp-shadow-m:0 10px 28px rgba(11,22,38,0.16);
  --ucp-shadow-l:0 20px 50px rgba(11,22,38,0.24);
  --ucp-container:1300px;
}


#ucp-page, #ucp-page *{box-sizing:border-box; margin:0; padding:0;}

#ucp-page{
  font-family:var(--ucp-font-body);
  color:var(--ucp-ink);
  background:var(--ucp-white);
  overflow-x:hidden;
  -webkit-font-smoothing:antialiased;
  position:relative;
}

#ucp-page img{max-width:100%; display:block;}

#ucp-page a{color:inherit; text-decoration:none;}

#ucp-page button{font-family:inherit; cursor:pointer; border:none; background:none;}

#ucp-page ul{list-style:none;}

#ucp-page .ucp-container{max-width:var(--ucp-container); margin:0 auto; padding:0 clamp(18px,4vw,48px);}


@media (prefers-reduced-motion: reduce){
  #ucp-page *{animation-duration:0.001ms !important; animation-iteration-count:1 !important; transition-duration:0.001ms !important;}
}

#ucp-page :focus-visible{outline:3px solid var(--ucp-gold); outline-offset:2px;}


/* ============================================================
   HEADER
   ============================================================ */
#ucp-page .ucp-header{
  background:var(--ucp-navy-900);
  border-bottom:1px solid rgba(255,255,255,0.06);
}

#ucp-page .ucp-header .ucp-container{
  display:flex; align-items:center; justify-content:space-between;
  padding-top:12px; padding-bottom:12px; gap:24px;
}

#ucp-page .ucp-logo{display:flex; align-items:center; gap:10px;}

#ucp-page .ucp-crest{
  /* TODO: replace with official UCP crest asset */
  width:40px; height:40px; border-radius:50%;
  background:radial-gradient(circle at 35% 30%, #2a4372, var(--ucp-navy-950));
  border:1.5px solid rgba(240,180,41,0.6);
  display:flex; align-items:center; justify-content:center;
  font-family:var(--ucp-font-serif); font-weight:700; color:var(--ucp-gold); font-size:14px;
  flex-shrink:0;
}

#ucp-page .ucp-logo-text{font-family:var(--ucp-font-serif); color:#fff; line-height:1.15;}

#ucp-page .ucp-logo-text .ucp-logo-line1{display:block; font-size:14.5px; font-weight:600;}

#ucp-page .ucp-logo-text .ucp-logo-line2{display:block; font-size:14.5px; font-weight:600;}


#ucp-page .ucp-logo img{height:38px; width:auto; display:block;}


#ucp-page .ucp-nav{display:flex; align-items:center; gap:22px;}

#ucp-page .ucp-nav > li{position:relative;}

#ucp-page .ucp-nav > li > a{
  display:flex; align-items:center; gap:5px;
  font-size:13.5px; font-weight:500; color:rgba(255,255,255,0.88);
  letter-spacing:0.01em; position:relative; padding:6px 0;
}

#ucp-page .ucp-nav > li > a::after{
  content:""; position:absolute; left:0; bottom:0; width:0; height:2px; background:var(--ucp-gold);
  transition:width .2s ease;
}

#ucp-page .ucp-nav > li > a:hover::after, #ucp-page .ucp-nav > li:focus-within > a::after{width:100%;}

#ucp-page .ucp-nav-caret{transition:transform .2s ease; flex-shrink:0;}

#ucp-page .ucp-nav > li:hover .ucp-nav-caret, #ucp-page .ucp-nav > li:focus-within .ucp-nav-caret{transform:rotate(180deg);}


#ucp-page .ucp-nav-dropdown{
  position:absolute; top:100%; left:0; min-width:250px;
  background:var(--ucp-navy-900); border-top:2px solid var(--ucp-gold); border-radius:0 0 8px 8px;
  box-shadow:var(--ucp-shadow-l); padding:10px;
  opacity:0; visibility:hidden; transform:translateY(8px);
  transition:opacity .2s ease, transform .2s ease, visibility .2s ease;
  z-index:50;
}

#ucp-page .ucp-nav > li:hover .ucp-nav-dropdown, #ucp-page .ucp-nav > li:focus-within .ucp-nav-dropdown{opacity:1; visibility:visible; transform:translateY(0);}

#ucp-page .ucp-nav-dropdown a{display:block; padding:9px 12px; border-radius:6px; font-size:13px; font-weight:500; color:rgba(255,255,255,0.82);}

#ucp-page .ucp-nav-dropdown a:hover{background:rgba(255,255,255,0.06); color:var(--ucp-gold);}

#ucp-page .ucp-nav-dropdown.ucp-mega{min-width:520px; column-count:2; column-gap:6px;}

#ucp-page .ucp-nav-dropdown-label{font-size:10.5px; font-weight:700; text-transform:uppercase; letter-spacing:0.06em; color:var(--ucp-gold); padding:9px 12px 4px; break-after:avoid;}

#ucp-page .ucp-nav-dropdown-group{break-inside:avoid; margin-bottom:4px;}


#ucp-page .ucp-hamburger{
  display:none; width:40px; height:40px; border-radius:6px;
  align-items:center; justify-content:center; flex-direction:column; gap:5px;
  background:rgba(255,255,255,0.08);
}

#ucp-page .ucp-hamburger span{width:19px; height:2px; background:#fff; display:block; transition:transform .25s ease, opacity .25s ease;}

#ucp-page .ucp-hamburger.ucp-active span:nth-child(1){transform:translateY(7px) rotate(45deg);}

#ucp-page .ucp-hamburger.ucp-active span:nth-child(2){opacity:0;}

#ucp-page .ucp-hamburger.ucp-active span:nth-child(3){transform:translateY(-7px) rotate(-45deg);}


#ucp-page .ucp-mobile-nav{
  display:none; flex-direction:column; background:var(--ucp-navy-950);
  max-height:0; overflow:hidden; overflow-y:auto; transition:max-height .35s ease;
}

#ucp-page .ucp-mobile-nav.ucp-open{max-height:70vh;}

#ucp-page .ucp-mobile-nav > li > a{
  display:block; color:#fff; font-size:15px; font-weight:600; padding:14px 20px; border-bottom:1px solid rgba(255,255,255,0.07);
}

#ucp-page .ucp-mobile-sub{padding:0 20px 12px 30px; display:flex; flex-direction:column; gap:2px; background:rgba(255,255,255,0.03);}

#ucp-page .ucp-mobile-sub a{font-size:13px; font-weight:500; color:rgba(255,255,255,0.68); padding:7px 0;}

#ucp-page .ucp-mobile-sub-label{font-size:10.5px; font-weight:700; text-transform:uppercase; letter-spacing:0.05em; color:var(--ucp-gold); margin-top:8px;}


@media (max-width:980px){
  #ucp-page .ucp-nav{display:none;}
  #ucp-page .ucp-hamburger{display:flex;}
  #ucp-page .ucp-mobile-nav{display:flex;}
  #ucp-page .ucp-btn-gold{display:none;}
}


/* ============================================================
   HERO
   ============================================================ */
#ucp-page .ucp-hero{
  position:relative;
  background:linear-gradient(115deg, var(--ucp-maroon-900) 0%, var(--ucp-maroon-700) 32%, var(--ucp-navy-900) 68%, var(--ucp-navy-950) 100%);
  padding:40px 0 46px;
}

#ucp-page .ucp-hero-arrow:hover{background:rgba(240,180,41,0.85); color:var(--ucp-navy-950);}


/* ============================================================
   SECTION HEADS (shared)
   ============================================================ */
#ucp-page .ucp-section-title{
  font-family:var(--ucp-font-serif);
  font-weight:700;
  font-size:clamp(22px,2.6vw,28px);
  color:var(--ucp-navy-900);
  margin-bottom:24px;
}

#ucp-page .ucp-moment-feature-caption{
  position:relative; z-index:1; margin-top:auto;
  background:var(--ucp-navy-900); color:#fff;
  font-size:14.5px; font-weight:600; padding:14px 18px;
}

#ucp-page .ucp-moment-card{
  display:grid; grid-template-columns:1fr 1.1fr;
  background:var(--ucp-navy-900); color:#fff; border-radius:2px; overflow:hidden;
  box-shadow:var(--ucp-shadow-s); flex:1;
}

#ucp-page .ucp-moment-avatar-media{
  position:relative; min-height:120px; display:flex; align-items:center; justify-content:center;
  background:linear-gradient(150deg, var(--ucp-navy-800), var(--ucp-navy-950));
  padding:14px;
}

#ucp-page .ucp-moment-avatar-media .ucp-avatar{
  width:56px; height:56px; border-radius:50%; background:var(--ucp-gold);
  color:var(--ucp-navy-950); font-family:var(--ucp-font-display); font-weight:700; font-size:17px;
  display:flex; align-items:center; justify-content:center; flex-shrink:0;
  border:2px solid rgba(255,255,255,0.5);
}

#ucp-page .ucp-btn-navy{
  display:inline-flex; align-items:center; gap:8px;
  background:var(--ucp-navy-800); color:#fff; font-size:13.5px; font-weight:600;
  padding:12px 26px; border-radius:3px; transition:background .2s ease, transform .2s ease;
}

#ucp-page .ucp-btn-navy:hover{background:var(--ucp-navy-700); transform:translateY(-1px);}

#ucp-page .ucp-btn-gold{
  display:inline-flex; align-items:center; gap:8px;
  background:var(--ucp-gold); color:var(--ucp-navy-950); font-size:13.5px; font-weight:700;
  padding:11px 22px; border-radius:3px; transition:background .2s ease, transform .2s ease;
}

#ucp-page .ucp-btn-gold:hover{background:var(--ucp-gold-bright); transform:translateY(-1px);}

#ucp-page .ucp-btn-gold.ucp-btn-block{width:100%; justify-content:center;}

#ucp-page .ucp-check-label{display:flex; align-items:center; gap:7px; font-size:13.5px; font-weight:600; color:var(--ucp-navy-800);}

#ucp-page .ucp-check-label input{width:16px; height:16px; accent-color:var(--ucp-navy-800);}

#ucp-page .ucp-course-search-btn{
  background:var(--ucp-navy-800); color:#fff; font-size:14px; font-weight:600;
  padding:12px 30px; border-radius:3px; transition:background .2s ease;
  flex:0 0 auto;
}

#ucp-page .ucp-course-search-btn:hover{background:var(--ucp-navy-700);}


#ucp-page .ucp-faculty-links{
  font-size:13.5px; color:var(--ucp-navy-800); line-height:2; margin-bottom:26px;
}

#ucp-page .ucp-faculty-links a{font-weight:600; color:var(--ucp-navy-800);}


/* ============================================================
   CHAIRMAN'S MESSAGE
   ============================================================ */
#ucp-page .ucp-chairman{
  position:relative; background:var(--ucp-navy-950); color:#fff; padding:56px 0;
  overflow:hidden;
}

#ucp-page .ucp-side-tab.ucp-tab-1{background:var(--ucp-navy-800);}

#ucp-page .ucp-side-tab.ucp-tab-4{background:var(--ucp-navy-700);}

#ucp-page .ucp-stat-icon{
  width:40px; height:40px; margin:0 auto 14px; color:var(--ucp-navy-800);
  display:flex; align-items:center; justify-content:center;
}

#ucp-page .ucp-stat-num{
  font-family:var(--ucp-font-display); font-weight:700; font-size:clamp(22px,2.6vw,28px); color:var(--ucp-navy-900);
}

#ucp-page .ucp-community-feature-tag{
  position:absolute; top:16px; left:0; z-index:1;
  background:var(--ucp-navy-900); color:#fff; font-size:11.5px; font-weight:700;
  padding:8px 14px; letter-spacing:0.02em;
}


/* ============================================================
   FOOTER
   ============================================================ */
#ucp-page .ucp-footer{
  position:relative; background:var(--ucp-navy-950); color:rgba(255,255,255,0.72); padding:54px 0 0; overflow:hidden;
}

#ucp-page .ucp-footer::before{
  content:""; position:absolute; right:-8%; bottom:-18%; width:480px; height:480px;
  background:radial-gradient(circle, rgba(255,255,255,0.045), transparent 70%);
  border-radius:50%;
}

#ucp-page .ucp-footer-grid{
  display:grid; grid-template-columns:1.3fr 1fr 1fr; gap:40px; position:relative; z-index:1;
  padding-bottom:40px; border-bottom:1px solid rgba(255,255,255,0.08);
}

#ucp-page .ucp-footer-brand{display:flex; align-items:flex-start; gap:12px;}

#ucp-page .ucp-footer-brand .ucp-crest{width:50px; height:50px; font-size:16px;}

#ucp-page .ucp-footer-brand-text{font-family:var(--ucp-font-serif); font-size:15px; color:#fff; line-height:1.3;}

#ucp-page .ucp-footer-col h5{font-size:12.5px; font-weight:700; letter-spacing:0.06em; color:var(--ucp-gold); text-transform:uppercase; margin-bottom:16px;}

#ucp-page .ucp-footer-col ul{display:flex; flex-direction:column; gap:10px;}

#ucp-page .ucp-footer-col a{font-size:13.5px; color:rgba(255,255,255,0.7); transition:color .2s ease;}

#ucp-page .ucp-footer-col a:hover{color:#fff;}


#ucp-page .ucp-footer-bottom{
  position:relative; z-index:1;
  display:flex; align-items:center; justify-content:space-between; flex-wrap:wrap; gap:14px;
  padding:22px 0 26px; font-size:12.5px; color:rgba(255,255,255,0.45);
}

#ucp-page .ucp-footer-legal{display:flex; gap:18px;}

#ucp-page .ucp-footer-legal a{color:rgba(255,255,255,0.45);}

#ucp-page .ucp-footer-legal a:hover{color:#fff;}

#ucp-page .ucp-social-row a:hover{background:var(--ucp-navy-700);}


@media (max-width:860px){
  #ucp-page .ucp-footer-grid{grid-template-columns:1fr; gap:32px;}
}


/* ============================================================
   WHATSAPP (small, matching reference — not a campaign CTA)
   ============================================================ */
#ucp-page .ucp-whatsapp{
  position:fixed; right:18px; bottom:18px; z-index:500;
  width:46px; height:46px; border-radius:50%;
  background:#25D366; display:flex; align-items:center; justify-content:center;
  box-shadow:0 6px 18px rgba(37,211,102,0.4);
  transition:transform .2s ease;
}

#ucp-page .ucp-whatsapp:hover{transform:scale(1.08);}

#ucp-page .ucp-modal-close{
  position:absolute; top:16px; right:16px; width:36px; height:36px; border-radius:50%;
  background:var(--ucp-paper); color:var(--ucp-navy-900); display:flex; align-items:center; justify-content:center;
  font-size:20px; line-height:1; transition:background .2s ease;
}

#ucp-page .ucp-modal-header{margin-bottom:22px; padding-right:30px;}

#ucp-page .ucp-modal-header h3{font-family:var(--ucp-font-serif); font-size:clamp(20px,2.6vw,25px); font-weight:700; color:var(--ucp-navy-900);}

#ucp-page .ucp-mfield label{font-size:13px; font-weight:700; color:var(--ucp-navy-800);}

#ucp-page .ucp-dept-close{
  position:absolute; top:16px; right:16px; width:36px; height:36px; border-radius:50%;
  background:var(--ucp-paper); color:var(--ucp-navy-900); display:flex; align-items:center; justify-content:center;
  font-size:20px; line-height:1; transition:background .2s ease; z-index:2;
}

#ucp-page .ucp-dept-step-dot.ucp-dept-step-active .ucp-num{background:var(--ucp-gold); color:var(--ucp-navy-950);}

#ucp-page .ucp-dept-header{margin-bottom:18px;}

#ucp-page .ucp-dept-header h3{font-family:var(--ucp-font-serif); font-size:clamp(19px,2.4vw,23px); font-weight:700; color:var(--ucp-navy-900);}

#ucp-page .ucp-dept-header p{margin-top:6px; font-size:13.5px; color:var(--ucp-ink-soft); line-height:1.5;}

#ucp-page .ucp-dept-program-tag{
  display:inline-flex; align-items:center; gap:8px; font-size:12px; font-weight:700; color:var(--ucp-navy-800);
  background:var(--ucp-paper); padding:6px 13px; border-radius:999px; margin-bottom:14px;
}

#ucp-page .ucp-dept-fee-table td:first-child{font-weight:600; color:var(--ucp-navy-900); width:55%;}

#ucp-page .ucp-dept-form-actions .ucp-btn-gold, #ucp-page .ucp-dept-form-actions .ucp-btn-outline{flex:1; text-align:center;}

#ucp-page .ucp-dept-confirm h3{font-family:var(--ucp-font-serif); font-size:22px; font-weight:700; color:var(--ucp-navy-900); margin-bottom:10px;}

#ucp-page .ucp-dept-confirm-summary strong{color:var(--ucp-navy-900);}

#ucp-page .ucp-btn-outline{
  display:inline-flex; align-items:center; gap:8px; background:transparent; color:var(--ucp-navy-900);
  border:1.5px solid rgba(16,27,50,0.22); font-size:13.5px; font-weight:600; padding:11px 22px; border-radius:3px;
  transition:background .2s ease, color .2s ease;
}

#ucp-page .ucp-btn-outline:hover{background:var(--ucp-navy-900); color:#fff;}


/* ============================================================
   NOTIFICATION BAR
   ============================================================ */
#ucp-page .ucp-notify-bar{background:var(--ucp-gold); color:var(--ucp-navy-950);}

#ucp-page .ucp-notify-apply{
  flex-shrink:0; background:var(--ucp-navy-950); color:#fff; font-size:12px; font-weight:700;
  padding:8px 18px; border-radius:999px; transition:background .2s ease, transform .2s ease;
}

#ucp-page .ucp-notify-apply:hover{background:var(--ucp-navy-800); transform:translateY(-1px);}

#ucp-page .ucp-qa-close{
  position:absolute; top:16px; right:16px; width:36px; height:36px; border-radius:50%;
  background:var(--ucp-paper); color:var(--ucp-navy-900); display:flex; align-items:center; justify-content:center;
  font-size:20px; line-height:1; transition:background .2s ease; z-index:2;
}

#ucp-page .ucp-qa-header{margin-bottom:20px; padding-right:30px;}

#ucp-page .ucp-qa-header h3{font-family:var(--ucp-font-serif); font-size:clamp(19px,2.4vw,23px); font-weight:700; color:var(--ucp-navy-900);}

#ucp-page .ucp-qa-header p{margin-top:6px; font-size:13.5px; color:var(--ucp-ink-soft); line-height:1.5;}

#ucp-page .ucp-qa-confirm h3{font-family:var(--ucp-font-serif); font-size:21px; font-weight:700; color:var(--ucp-navy-900); margin-bottom:10px;}

#ucp-page .ucp-qa-confirm-summary strong{color:var(--ucp-navy-900);}

#ucp-page .ucp-qa-step-dot.ucp-qa-step-active .ucp-qa-num{background:var(--ucp-gold); color:var(--ucp-navy-950);}

#ucp-page .ucp-qa-program-opt span{font-size:13.5px; font-weight:600; color:var(--ucp-navy-900);}

#ucp-page .ucp-qa-fee-opt-title{font-size:13.5px; font-weight:700; color:var(--ucp-navy-900);}

#ucp-page .ucp-qa-form-actions .ucp-btn-outline, #ucp-page .ucp-qa-form-actions .ucp-btn-gold{flex:1; justify-content:center;}

#ucp-page .ucp-welcome-close{
  position:absolute; top:14px; right:14px; width:32px; height:32px; border-radius:50%;
  background:var(--ucp-paper); color:var(--ucp-navy-900); display:flex; align-items:center; justify-content:center; font-size:18px; z-index:2;
}

#ucp-page .ucp-welcome-panel h3{font-family:var(--ucp-font-serif); font-size:20px; font-weight:700; color:var(--ucp-navy-900); margin-bottom:8px;}

#ucp-page .ucp-welcome-date-row{display:flex; align-items:center; gap:10px; font-size:13.5px; color:var(--ucp-navy-900); font-weight:600;}

/* ============================================================
   RESOURCE PAGE CONTENT (Merit List / Fee Structure)
   Scoped under #ucp-page, reuses the UCP design tokens above.
   ============================================================ */
#ucp-page .ucp-res-main{ background:var(--ucp-paper); min-height:60vh; }
#ucp-page .ucp-res-breadcrumb{ padding:18px clamp(18px,4vw,48px) 0; font-size:13px; color:var(--ucp-ink-soft); display:flex; gap:8px; align-items:center; }
#ucp-page .ucp-res-breadcrumb a{ color:var(--ucp-ink-soft); }
#ucp-page .ucp-res-breadcrumb a:hover{ text-decoration:underline; }
#ucp-page .ucp-res-hero{ padding:22px 0 28px; }
#ucp-page .ucp-res-eyebrow{ font-size:12.5px; font-weight:700; text-transform:uppercase; letter-spacing:0.08em; color:var(--ucp-ink-soft); margin-bottom:8px; }
#ucp-page .ucp-res-hero h1{ font-family:var(--ucp-font-display); font-size:clamp(28px,4vw,42px); line-height:1.12; margin-bottom:12px; }
#ucp-page .ucp-res-lead{ max-width:720px; font-size:15.5px; line-height:1.65; color:var(--ucp-ink-soft); }
#ucp-page .ucp-res-doc{ padding-bottom:64px; }
#ucp-page .ucp-res-doc-grid{ display:grid; grid-template-columns:1fr 320px; gap:28px; align-items:start; }
@media (max-width:900px){ #ucp-page .ucp-res-doc-grid{ grid-template-columns:1fr; } }
#ucp-page .ucp-res-doc-viewer{ background:var(--ucp-white); border-radius:14px; box-shadow:var(--ucp-shadow-m); overflow:hidden; min-height:70vh; display:flex; flex-direction:column; }
#ucp-page .ucp-res-doc-viewer iframe{ flex:1; width:100%; min-height:70vh; border:0; display:block; }
#ucp-page .ucp-res-doc-empty{ padding:48px 28px; text-align:center; color:var(--ucp-ink-soft); }
#ucp-page .ucp-res-doc-side{ display:flex; flex-direction:column; gap:16px; }
#ucp-page .ucp-res-doc-card{ background:var(--ucp-white); border-radius:14px; box-shadow:var(--ucp-shadow-s); padding:22px; }
#ucp-page .ucp-res-doc-card h3{ font-family:var(--ucp-font-display); font-size:17px; margin-bottom:8px; }
#ucp-page .ucp-res-doc-card p{ font-size:13.5px; line-height:1.55; color:var(--ucp-ink-soft); margin-bottom:16px; }
#ucp-page .ucp-res-doc-card a{ width:100%; text-align:center; justify-content:center; display:flex; margin-bottom:10px; }
#ucp-page .ucp-res-updated{ font-size:12px; color:var(--ucp-ink-soft); margin-top:10px; margin-bottom:0 !important; }
</style>
</head>
<body>
<div id="ucp-page">

<header class="ucp-header">
  <div class="ucp-container">
    <a href="/ucp" class="ucp-logo" aria-label="University of Central Punjab home">
      <!-- Sourced directly from the official UCP asset (ucp.edu.pk) -->
      <img src="https://ucp.edu.pk/inc/uploads/2019/06/ucp-sticky-logo-white-1.png" alt="University of Central Punjab logo">
    </a>

    <ul class="ucp-nav" aria-label="Primary">
      <li>
        <a href="#" aria-haspopup="true">Academics <svg class="ucp-nav-caret" width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M6 9l6 6 6-6"/></svg></a>
        <div class="ucp-nav-dropdown ucp-mega">
          <div class="ucp-nav-dropdown-group">
            <p class="ucp-nav-dropdown-label">Faculties</p>
            <a href="#">Faculty of Pharmaceutical Sciences</a>
            <a href="#">Faculty of Languages &amp; Literature</a>
            <a href="#">Faculty of IT &amp; Computer Science</a>
            <a href="#">Faculty of Engineering</a>
            <a href="#">Faculty of Media &amp; Mass Communication</a>
            <a href="#">Faculty of Humanities &amp; Social Sciences</a>
            <a href="#">Faculty of Science &amp; Technology</a>
            <a href="#">Faculty of Management Sciences</a>
            <a href="#">Faculty of Law</a>
          </div>
          <div class="ucp-nav-dropdown-group">
            <p class="ucp-nav-dropdown-label">Associate Degree Programmes</p>
            <a href="#">ADP Details</a>
            <a href="#">ADP Accounting &amp; Finance</a>
            <a href="#">ADP Business Administration</a>
            <a href="#">ADP Computer Science</a>
            <p class="ucp-nav-dropdown-label">Programmes</p>
            <a href="#">Undergraduate</a>
            <a href="#">Postgraduate</a>
          </div>
        </div>
      </li>
      <li>
        <a href="#" aria-haspopup="true">Admissions <svg class="ucp-nav-caret" width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M6 9l6 6 6-6"/></svg></a>
        <div class="ucp-nav-dropdown">
          <a href="#">How To Apply</a>
          <a href="#">Admission Calendar</a>
          <a href="#">Sample Papers</a>
          <a href="#">Scholarships</a>
          <a href="#">Offered Programs</a>
          <a href="#">Fee Structure</a>
          <a href="#">Apply Online</a>
        </div>
      </li>
      <li>
        <a href="#" aria-haspopup="true">About <svg class="ucp-nav-caret" width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M6 9l6 6 6-6"/></svg></a>
        <div class="ucp-nav-dropdown ucp-mega">
          <div class="ucp-nav-dropdown-group">
            <a href="#">About UCP</a>
            <a href="#">Virtual Tour</a>
            <a href="#">Facilities</a>
            <a href="#">Our Campus</a>
            <a href="#">Societies and Clubs</a>
          </div>
          <div class="ucp-nav-dropdown-group">
            <a href="#">Departments</a>
            <a href="#">Our Initiatives</a>
            <a href="#">Governance</a>
            <a href="#">International Office</a>
            <a href="#">Partnerships &amp; Collaborations</a>
            <a href="#">Accreditations and NOCs</a>
          </div>
        </div>
      </li>
      <li>
        <a href="#" aria-haspopup="true">International Programs <svg class="ucp-nav-caret" width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M6 9l6 6 6-6"/></svg></a>
        <div class="ucp-nav-dropdown">
          <a href="#">University of Leicester</a>
        </div>
      </li>
      <li><a href="#">CNN Academy</a></li>
      <li>
        <a href="#" aria-haspopup="true">UCP Online <svg class="ucp-nav-caret" width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M6 9l6 6 6-6"/></svg></a>
        <div class="ucp-nav-dropdown">
          <a href="#">VLE Policy</a>
          <a href="#">VLE Academic Council</a>
          <a href="#">VLE Portal</a>
          <a href="#">VLE Assessment</a>
          <a href="#">VLE Technology</a>
          <a href="#">Download</a>
        </div>
      </li>
      <li>
        <a href="#" aria-haspopup="true">My UCP <svg class="ucp-nav-caret" width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M6 9l6 6 6-6"/></svg></a>
        <div class="ucp-nav-dropdown">
          <p class="ucp-nav-dropdown-label">Portals</p>
          <a href="#">Student</a>
          <a href="#">Teacher</a>
          <a href="#">Alumni</a>
          <p class="ucp-nav-dropdown-label">More</p>
          <a href="#">Academic Calendar</a>
          <a href="#">Rules &amp; Regulations</a>
          <a href="#">Verify Student</a>
        </div>
      </li>
      <li><a href="#">Blog</a></li>
      <li><a href="#">ORIC</a></li>
    </ul>

    <a href="#" class="ucp-btn-gold ucp-admission-trigger">Admission Now</a>
    <button class="ucp-hamburger" id="ucp-hamburger-btn" aria-label="Open menu" aria-expanded="false" aria-controls="ucp-mobile-nav">
      <span></span><span></span><span></span>
    </button>
  </div>

  <ul class="ucp-mobile-nav" id="ucp-mobile-nav" aria-label="Mobile primary">
    <li>
      <a href="#">Academics</a>
      <div class="ucp-mobile-sub">
        <p class="ucp-mobile-sub-label">Faculties</p>
        <a href="#">Faculty of Engineering</a>
        <a href="#">Faculty of Management Sciences</a>
        <a href="#">Faculty of Law</a>
        <p class="ucp-mobile-sub-label">Programmes</p>
        <a href="#">Undergraduate</a>
        <a href="#">Postgraduate</a>
        <a href="#">Associate Degree Programmes</a>
      </div>
    </li>
    <li>
      <a href="#">Admissions</a>
      <div class="ucp-mobile-sub">
        <a href="#">How To Apply</a>
        <a href="#">Fee Structure</a>
        <a href="#">Scholarships</a>
        <a href="#">Apply Online</a>
      </div>
    </li>
    <li>
      <a href="#">About</a>
      <div class="ucp-mobile-sub">
        <a href="#">About UCP</a>
        <a href="#">Our Campus</a>
        <a href="#">Governance</a>
        <a href="#">International Office</a>
      </div>
    </li>
    <li><a href="#">International Programs</a></li>
    <li><a href="#">CNN Academy</a></li>
    <li>
      <a href="#">UCP Online</a>
      <div class="ucp-mobile-sub">
        <a href="#">VLE Portal</a>
        <a href="#">VLE Policy</a>
      </div>
    </li>
    <li>
      <a href="#">My UCP</a>
      <div class="ucp-mobile-sub">
        <a href="#">Student Portal</a>
        <a href="#">Teacher Portal</a>
        <a href="#">Alumni Portal</a>
        <a href="#">Verify Student</a>
      </div>
    </li>
    <li><a href="#">Blog</a></li>
    <li><a href="#">ORIC</a></li>
    <li style="padding:16px 20px;"><a href="#" class="ucp-btn-gold ucp-btn-block ucp-admission-trigger">Admission Now</a></li>
  </ul>
</header>

<main class="ucp-res-main">
  <div class="ucp-container ucp-res-breadcrumb">
    <a href="/ucp">UCP</a>
    <span>/</span>
    <span>Fee Chalan</span>
  </div>

  <section class="ucp-res-hero">
    <div class="ucp-container">
      <p class="ucp-res-eyebrow">University of Central Punjab</p>
      <h1>Fee Chalan</h1>
      <p class="ucp-res-lead">Download the official University of Central Punjab fee chalan (bank deposit slip) below. Print it, fill in your details, and deposit your fee at any designated bank branch listed on the chalan before the due date.</p>
    </div>
  </section>

  <section class="ucp-res-doc">
    <div class="ucp-container ucp-res-doc-grid">
      <div class="ucp-res-doc-viewer">
        <?php if ( $ccx_has_pdf ) : ?>
          <iframe src="https://docs.google.com/viewer?url=<?php echo rawurlencode( $ccx_pdf_url ); ?>&embedded=true" title="University of Central Punjab Fee Chalan PDF" loading="lazy"></iframe>
        <?php else : ?>
          <div class="ucp-res-doc-empty">
            <p>The fee chalan PDF hasn't been uploaded yet. Once it's added in <code>inc/resource-documents.php</code>, it will appear here automatically.</p>
          </div>
        <?php endif; ?>
      </div>

      <aside class="ucp-res-doc-side">
        <div class="ucp-res-doc-card">
          <h3>Download Fee Chalan</h3>
          <p>Get the printable PDF chalan to deposit your fee at any designated bank branch.</p>
          <?php if ( $ccx_has_pdf ) : ?>
            <a href="<?php echo esc_url( $ccx_pdf_url ); ?>" class="ucp-btn-gold" download>Download Fee Chalan PDF</a>
            <a href="<?php echo esc_url( $ccx_pdf_url ); ?>" class="ucp-btn-outline" target="_blank" rel="noopener">Open in New Tab</a>
            <?php if ( $ccx_pdf_updated ) : ?>
              <p class="ucp-res-updated">Last updated: <?php echo esc_html( $ccx_pdf_updated ); ?></p>
            <?php endif; ?>
          <?php else : ?>
            <p class="ucp-res-updated">Check back soon.</p>
          <?php endif; ?>
        </div>

        <div class="ucp-res-doc-card">
          <h3>Trouble With Your Chalan?</h3>
          <p>If your details are missing, incorrect, or the chalan won't print properly, contact the admissions/accounts office directly for a corrected copy.</p>
          <a href="/admissions/apply?university=UCP" class="ucp-btn-gold">Apply Now</a>
          <a href="/ucp" class="ucp-btn-outline">Back to UCP</a>
        </div>
      </aside>
    </div>
  </section>
</main>

<footer class="ucp-footer">
  <div class="ucp-container">
    <div class="ucp-footer-grid">
      <div class="ucp-footer-brand">
        <!-- Sourced directly from the official UCP asset (ucp.edu.pk) -->
        <img src="https://ucp.edu.pk/static/uploads/2017/03/ucp-logof.png" alt="University of Central Punjab logo" style="height:50px; width:auto;">
        <span class="ucp-footer-brand-text">University of<br>Central Punjab</span>
      </div>

      <div class="ucp-footer-col">
        <h5>Useful Links</h5>
        <ul>
          <li><a href="#">Student Portal</a></li>
          <li><a href="#">Academic Calendar</a></li>
          <li><a href="#">Exam Office</a></li>
          <li><a href="#">Harassment Policy</a></li>
          <li><a href="#">Scholarships</a></li>
          <li><a href="#">Jobs</a></li>
          <li><a href="#">Verify Student</a></li>
          <li><a href="#">Tender Notice</a></li>
          <li><a href="#">FAQs</a></li>
        </ul>
      </div>

      <div class="ucp-footer-col">
        <h5>Contact Us</h5>
        <ul>
          <li class="ucp-contact-item">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 21s-7-6.2-7-11a7 7 0 0114 0c0 4.8-7 11-7 11z"/><circle cx="12" cy="10" r="2.5"/></svg>
            1 - Khayaban-e-Jinnah Road, Johar Town, Lahore.
          </li>
          <li class="ucp-contact-item">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.362 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.338 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
            +92-42-35880007
          </li>
          <li class="ucp-contact-item">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.362 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.338 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
            (+92) 80-000-827 (9:00AM to 5:00PM)
          </li>
          <li class="ucp-contact-item">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 8V7l-3 2-4-2-4 2-3-2v1l3 2v9a2 2 0 002 2h4a2 2 0 002-2V10l3-2z"/></svg>
            Fax: +92-42-35954892
          </li>
          <li class="ucp-contact-item">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16v16H4z" opacity="0"/><path d="M22 6l-10 7L2 6"/><path d="M2 6h20v12H2z"/></svg>
            Email: info@ucp.edu.pk
          </li>
        </ul>
      </div>
    </div>

    <div class="ucp-social-row">
      <a href="https://www.facebook.com/UCPofficial" target="_blank" rel="noopener" aria-label="UCP on Facebook"><svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M22 12a10 10 0 10-11.6 9.9v-7H7.9V12h2.5V9.8c0-2.5 1.5-3.9 3.8-3.9 1.1 0 2.2.2 2.2.2v2.5h-1.3c-1.2 0-1.6.8-1.6 1.6V12h2.8l-.4 2.9h-2.4v7A10 10 0 0022 12z"/></svg></a>
      <a href="https://www.twitter.com/UCPofficial" target="_blank" rel="noopener" aria-label="UCP on Twitter/X"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M18.9 3H22l-7.6 8.7L23 21h-6.8l-5.3-6.5L5 21H2l8.1-9.3L1.5 3h7l4.8 5.9L18.9 3z"/></svg></a>
      <a href="https://pk.linkedin.com/school/ucp-official/" target="_blank" rel="noopener" aria-label="UCP on LinkedIn"><svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M4.98 3.5a2.5 2.5 0 11-.02 5 2.5 2.5 0 01.02-5zM3 9h4v12H3zM9 9h3.8v1.7h.05c.53-1 1.83-2.06 3.77-2.06 4.03 0 4.78 2.65 4.78 6.1V21h-4v-5.7c0-1.36-.02-3.1-1.89-3.1-1.9 0-2.19 1.48-2.19 3v5.8H9z"/></svg></a>
      <a href="https://www.youtube.com/channel/UCTQwZphZ14iiRE1g3lHkpBA" target="_blank" rel="noopener" aria-label="UCP on YouTube"><svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M23 12s0-3.6-.46-5.3a2.9 2.9 0 00-2-2C18.9 4.2 12 4.2 12 4.2s-6.9 0-8.54.5a2.9 2.9 0 00-2 2C1 8.4 1 12 1 12s0 3.6.46 5.3a2.9 2.9 0 002 2c1.64.5 8.54.5 8.54.5s6.9 0 8.54-.5a2.9 2.9 0 002-2C23 15.6 23 12 23 12zM9.8 15.5V8.5l6 3.5z"/></svg></a>
      <a href="https://www.instagram.com/ucpofficial/" target="_blank" rel="noopener" aria-label="UCP on Instagram"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="3" y="3" width="18" height="18" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="1"/></svg></a>
    </div>

    <div class="ucp-footer-bottom">
      <p>Copyright &copy; 2013 - <span id="ucp-year"></span> University of Central Punjab</p>
      <div class="ucp-footer-legal">
        <a href="#">Privacy Policy</a>
        <a href="#">Disclaimer</a>
        <a href="#top" class="ucp-back-top" id="ucp-back-top">TOP</a>
      </div>
    </div>
  </div>
</footer>

</div>

<script>
(function(){
  var btn = document.getElementById("ucp-hamburger-btn");
  var nav = document.getElementById("ucp-mobile-nav");
  if (btn && nav) {
    btn.addEventListener("click", function(){
      var open = btn.classList.toggle("ucp-active");
      btn.setAttribute("aria-expanded", open ? "true" : "false");
      nav.classList.toggle("ucp-mobile-open", open);
    });
  }

  var header = document.querySelector("#ucp-page .ucp-header");
  if (header) {
    var onScroll = function(){
      header.classList.toggle("ucp-scrolled", window.scrollY > 12);
    };
    window.addEventListener("scroll", onScroll, { passive: true });
    onScroll();
  }

  var yearEl = document.getElementById("ucp-year");
  if (yearEl) {
    yearEl.textContent = new Date().getFullYear();
  }
})();
</script>
</body>
</html>
