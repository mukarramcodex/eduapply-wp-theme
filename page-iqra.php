<?php
/**
 * Template Name: EduApply — IQRA
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Iqra University Islamabad Campus — Admissions | EduApply</title>
<meta name="description" content="Apply for Bachelor's, Master's and PhD programs at Iqra University Islamabad Campus (H-9). Explore programs, fee structure, merit lists and start your application online." />

<!--
  Standalone reproduction of the Iqra University Islamabad Campus admissions
  landing page (/iqra route). Namespaced with an "iqra-" prefix on every
  class/ID and scoped under #iqra-page so it never collides with the
  campaign index or other university pages.

  SOURCE: nav structure, department/program listing, "How to Apply" steps,
  and footer/contact details are drawn from Iqra University's own online
  admissions portal (admissions.iuisl.com). Copy has been paraphrased and
  adapted to EduApply's own funnel: EduApply has no student login/account
  system of its own, so the portal's "Sign in / Create account" panel has
  been replaced with a direct "Apply Now" card that routes into EduApply's
  own multi-step application form, matching the pattern used for every
  other partner university on this site. Logo and hero banner are hosted
  in the EduApply Media Library.
-->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Archivo:wght@500;600;700;800&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

<style>
#iqra-page{
  --iqra-navy:#0F2647;
  --iqra-navy-800:#16345E;
  --iqra-navy-700:#1E4278;
  --iqra-navy-tint:#EAF0F8;
  --iqra-gold:#F2A900;
  --iqra-gold-dark:#C98800;
  --iqra-green:#25D366;
  --iqra-green-dark:#1DA851;
  --iqra-paper:#F4F6F9;
  --iqra-paper-dim:#E9EDF3;
  --iqra-border:#E3E7ED;
  --iqra-ink:#16202E;
  --iqra-ink-soft:#5C6470;
  --iqra-white:#FFFFFF;

  --iqra-font-display:'Archivo', sans-serif;
  --iqra-font-body:'Inter', sans-serif;

  --iqra-shadow-s:0 2px 10px rgba(15,38,71,0.08);
  --iqra-shadow-m:0 12px 30px rgba(15,38,71,0.12);
  --iqra-shadow-l:0 24px 56px rgba(15,38,71,0.22);
  --iqra-container:1280px;
}

#iqra-page, #iqra-page *{box-sizing:border-box; margin:0; padding:0;}
#iqra-page{
  font-family:var(--iqra-font-body);
  color:var(--iqra-ink);
  background:var(--iqra-white);
  overflow-x:hidden;
  -webkit-font-smoothing:antialiased;
  position:relative;
}
#iqra-page img{max-width:100%; display:block;}
#iqra-page a{color:inherit; text-decoration:none;}
#iqra-page button{font-family:inherit; cursor:pointer; border:none; background:none;}
#iqra-page ul{list-style:none;}
#iqra-page .iqra-container{max-width:var(--iqra-container); margin:0 auto; padding:0 clamp(18px,4vw,48px);}
#iqra-page :focus-visible{outline:3px solid var(--iqra-gold); outline-offset:2px;}

#iqra-page .iqra-btn{
  display:inline-flex; align-items:center; justify-content:center; gap:8px; padding:13px 24px; border-radius:6px;
  font-family:var(--iqra-font-display); font-weight:700; font-size:13.5px; letter-spacing:0.01em;
  transition:background .2s ease, color .2s ease, transform .2s ease, border-color .2s ease;
}
#iqra-page .iqra-btn-navy{background:var(--iqra-navy); color:#fff;}
#iqra-page .iqra-btn-navy:hover{background:var(--iqra-navy-700); transform:translateY(-2px);}
#iqra-page .iqra-btn-outline{background:transparent; border:1.5px solid var(--iqra-navy); color:var(--iqra-navy);}
#iqra-page .iqra-btn-outline:hover{background:var(--iqra-navy); color:#fff;}
#iqra-page .iqra-btn-green{background:var(--iqra-green); color:#fff;}
#iqra-page .iqra-btn-green:hover{background:var(--iqra-green-dark); transform:translateY(-2px);}
#iqra-page .iqra-btn-block{width:100%;}

/* ============================================================
   TOP UTILITY BAR
   ============================================================ */
#iqra-page .iqra-topbar{background:var(--iqra-navy); padding:8px 0; font-size:12px;}
#iqra-page .iqra-topbar .iqra-container{display:flex; align-items:center; justify-content:space-between; gap:16px; flex-wrap:wrap;}
#iqra-page .iqra-topbar-info{display:flex; gap:18px; flex-wrap:wrap; color:rgba(255,255,255,0.78); font-weight:500;}
#iqra-page .iqra-topbar-social{display:flex; gap:10px;}
#iqra-page .iqra-topbar-social a{width:24px; height:24px; border-radius:50%; background:rgba(255,255,255,0.12); display:flex; align-items:center; justify-content:center; color:#fff; transition:background .2s ease;}
#iqra-page .iqra-topbar-social a:hover{background:var(--iqra-gold);}
@media (max-width:640px){#iqra-page .iqra-topbar-info{display:none;}}

/* ============================================================
   HEADER
   ============================================================ */
#iqra-page .iqra-header{background:#fff; box-shadow:0 1px 0 rgba(15,38,71,0.08); position:sticky; top:0; z-index:200;}
#iqra-page .iqra-header .iqra-container{display:flex; align-items:center; justify-content:space-between; gap:18px; padding-top:12px; padding-bottom:12px;}
#iqra-page .iqra-logo img{height:44px; width:auto; display:block;}

#iqra-page .iqra-nav{display:flex; align-items:center; gap:2px;}
#iqra-page .iqra-nav > li{position:relative;}
#iqra-page .iqra-nav > li > a{
  display:flex; align-items:center; gap:5px;
  font-size:13.5px; font-weight:700; color:var(--iqra-navy); padding:10px 13px; border-radius:5px;
  transition:color .2s ease, background .2s ease;
}
#iqra-page .iqra-nav > li > a:hover, #iqra-page .iqra-nav > li:focus-within > a{color:var(--iqra-navy); background:var(--iqra-paper);}
#iqra-page .iqra-caret{transition:transform .2s ease;}
#iqra-page .iqra-nav > li:hover .iqra-caret, #iqra-page .iqra-nav > li:focus-within .iqra-caret{transform:rotate(180deg);}

#iqra-page .iqra-dropdown{
  position:absolute; top:100%; left:0; min-width:210px;
  background:#fff; border-top:3px solid var(--iqra-gold);
  box-shadow:var(--iqra-shadow-l); padding:8px;
  opacity:0; visibility:hidden; transform:translateY(8px);
  transition:opacity .2s ease, transform .2s ease, visibility .2s ease;
  z-index:50;
}
#iqra-page .iqra-nav > li:hover .iqra-dropdown, #iqra-page .iqra-nav > li:focus-within .iqra-dropdown{opacity:1; visibility:visible; transform:translateY(0);}
#iqra-page .iqra-dropdown a{display:block; padding:9px 12px; border-radius:4px; font-size:13px; font-weight:500; color:var(--iqra-ink);}
#iqra-page .iqra-dropdown a:hover{background:var(--iqra-paper); color:var(--iqra-navy-700);}

#iqra-page .iqra-header-cta{display:flex; align-items:center; gap:10px;}
#iqra-page .iqra-hamburger{
  display:none; width:42px; height:42px; border-radius:6px;
  align-items:center; justify-content:center; flex-direction:column; gap:5px;
  background:var(--iqra-paper);
}
#iqra-page .iqra-hamburger span{width:19px; height:2px; background:var(--iqra-navy); display:block; transition:transform .25s ease, opacity .25s ease;}
#iqra-page .iqra-hamburger.iqra-active span:nth-child(1){transform:translateY(7px) rotate(45deg);}
#iqra-page .iqra-hamburger.iqra-active span:nth-child(2){opacity:0;}
#iqra-page .iqra-hamburger.iqra-active span:nth-child(3){transform:translateY(-7px) rotate(-45deg);}

#iqra-page .iqra-mobile-nav{
  display:none; flex-direction:column; background:var(--iqra-navy);
  max-height:0; overflow:hidden; overflow-y:auto; transition:max-height .35s ease;
}
#iqra-page .iqra-mobile-nav.iqra-open{max-height:75vh;}
#iqra-page .iqra-mobile-nav > li > a{display:block; color:#fff; font-size:14.5px; font-weight:700; padding:14px 20px; border-bottom:1px solid rgba(255,255,255,0.08);}
#iqra-page .iqra-mobile-sub{padding:0 20px 12px 30px; display:flex; flex-direction:column; gap:2px;}
#iqra-page .iqra-mobile-sub a{font-size:13px; font-weight:500; color:rgba(255,255,255,0.68); padding:7px 0;}
#iqra-page .iqra-mobile-cta{padding:16px 20px;}

@media (max-width:1080px){
  #iqra-page .iqra-nav{display:none;}
  #iqra-page .iqra-header-cta .iqra-btn{display:none;}
  #iqra-page .iqra-hamburger{display:flex;}
  #iqra-page .iqra-mobile-nav{display:flex;}
}

/* ============================================================
   ANNOUNCEMENT BAR
   ============================================================ */
#iqra-page .iqra-announce{background:var(--iqra-paper); padding:10px 0; text-align:center;}
#iqra-page .iqra-announce-pill{
  display:inline-flex; align-items:center; gap:8px; background:var(--iqra-navy); color:#fff;
  font-family:var(--iqra-font-display); font-weight:700; font-size:11.5px; letter-spacing:0.06em; text-transform:uppercase;
  padding:7px 18px; border-radius:100px;
}
#iqra-page .iqra-announce-pill::before{content:""; width:7px; height:7px; border-radius:50%; background:var(--iqra-gold); display:inline-block;}

/* ============================================================
   HERO
   ============================================================ */
#iqra-page .iqra-hero{padding:56px 0 60px;}
#iqra-page .iqra-hero-grid{display:grid; grid-template-columns:1.5fr 1fr; gap:44px; align-items:start;}
#iqra-page .iqra-hero-eyebrow{font-family:var(--iqra-font-display); font-size:12px; font-weight:700; letter-spacing:0.12em; text-transform:uppercase; color:var(--iqra-navy-700); margin-bottom:12px;}
#iqra-page .iqra-hero h1{font-family:var(--iqra-font-display); font-weight:800; font-size:clamp(28px,3.6vw,42px); color:var(--iqra-navy); line-height:1.15; letter-spacing:-0.01em; margin-bottom:16px;}
#iqra-page .iqra-hero-lead{font-size:15.5px; color:var(--iqra-ink-soft); line-height:1.7; max-width:58ch; margin-bottom:22px;}

#iqra-page .iqra-hero-badges{display:flex; flex-wrap:wrap; gap:10px; margin-bottom:28px;}
#iqra-page .iqra-hero-badge{
  display:inline-flex; align-items:center; gap:7px; background:var(--iqra-navy-tint); color:var(--iqra-navy);
  font-size:12.5px; font-weight:600; padding:8px 14px; border-radius:100px; border:1px solid rgba(15,38,71,0.1);
}

#iqra-page .iqra-hero-banner{position:relative; border-radius:12px; overflow:hidden; box-shadow:var(--iqra-shadow-m);}
#iqra-page .iqra-hero-banner img{width:100%; height:auto; display:block;}

/* Apply card (replaces the source portal's Sign-in panel) */
#iqra-page .iqra-apply-card{
  background:#fff; border:1px solid var(--iqra-border); border-radius:12px; box-shadow:var(--iqra-shadow-m);
  padding:26px; position:sticky; top:88px;
}
#iqra-page .iqra-apply-card h2{font-family:var(--iqra-font-display); font-size:18px; font-weight:800; color:var(--iqra-navy); margin-bottom:8px;}
#iqra-page .iqra-apply-card p{font-size:13.5px; color:var(--iqra-ink-soft); line-height:1.6; margin-bottom:18px;}
#iqra-page .iqra-apply-card .iqra-btn{margin-bottom:10px;}
#iqra-page .iqra-apply-note{font-size:11.5px; color:var(--iqra-ink-soft); text-align:center; margin-top:14px; margin-bottom:0;}
#iqra-page .iqra-apply-divider{display:flex; align-items:center; gap:10px; margin:16px 0; font-size:11px; color:var(--iqra-ink-soft); text-transform:uppercase; letter-spacing:0.05em;}
#iqra-page .iqra-apply-divider::before, #iqra-page .iqra-apply-divider::after{content:""; flex:1; height:1px; background:var(--iqra-border);}

@media (max-width:900px){
  #iqra-page .iqra-hero-grid{grid-template-columns:1fr;}
  #iqra-page .iqra-apply-card{position:static;}
}

/* ============================================================
   SECTION HEAD
   ============================================================ */
#iqra-page .iqra-section-head{margin-bottom:30px;}
#iqra-page .iqra-section-head h2{font-family:var(--iqra-font-display); font-weight:800; font-size:clamp(22px,2.8vw,30px); color:var(--iqra-navy); letter-spacing:-0.01em; margin-bottom:8px;}
#iqra-page .iqra-section-head p{font-size:14px; color:var(--iqra-ink-soft); max-width:60ch;}

/* ============================================================
   PROGRAMS
   ============================================================ */
#iqra-page .iqra-programs{background:var(--iqra-paper); padding:56px 0 60px;}
#iqra-page .iqra-tabs{display:flex; flex-wrap:wrap; gap:8px; margin-bottom:26px;}
#iqra-page .iqra-tab{
  background:#fff; border:1px solid var(--iqra-border); color:var(--iqra-navy);
  font-family:var(--iqra-font-display); font-weight:700; font-size:12.5px;
  padding:9px 18px; border-radius:100px; transition:background .2s ease, color .2s ease, border-color .2s ease;
}
#iqra-page .iqra-tab:hover{border-color:var(--iqra-navy-700);}
#iqra-page .iqra-tab.iqra-tab-active{background:var(--iqra-navy); border-color:var(--iqra-navy); color:#fff;}

#iqra-page .iqra-dept-grid{display:grid; grid-template-columns:repeat(4,1fr); gap:16px;}
@media (max-width:1180px){#iqra-page .iqra-dept-grid{grid-template-columns:repeat(2,1fr);}}
@media (max-width:600px){#iqra-page .iqra-dept-grid{grid-template-columns:1fr;}}

#iqra-page .iqra-dept-card{
  background:#fff; border:1px solid var(--iqra-border); border-top:3px solid var(--iqra-navy);
  border-radius:8px; padding:18px; display:flex; flex-direction:column; min-height:100%;
}
#iqra-page .iqra-dept-card[data-level="masters"]{border-top-color:var(--iqra-navy-700);}
#iqra-page .iqra-dept-card[data-level="phd"]{border-top-color:var(--iqra-gold-dark);}
#iqra-page .iqra-dept-level{
  display:inline-block; font-family:var(--iqra-font-display); font-size:9.5px; font-weight:800; letter-spacing:0.08em; text-transform:uppercase;
  color:var(--iqra-navy-700); background:var(--iqra-navy-tint); padding:3px 8px; border-radius:4px; margin-bottom:9px; width:fit-content;
}
#iqra-page .iqra-dept-card[data-level="phd"] .iqra-dept-level{color:var(--iqra-gold-dark); background:#FBF1DC;}
#iqra-page .iqra-dept-name{font-family:var(--iqra-font-display); font-size:13.5px; font-weight:800; color:var(--iqra-navy); line-height:1.35; margin-bottom:12px;}
#iqra-page .iqra-dept-list{flex:1; margin-bottom:12px;}
#iqra-page .iqra-dept-list li{font-size:12.5px; color:var(--iqra-ink); padding:4px 0; padding-left:14px; position:relative; line-height:1.45;}
#iqra-page .iqra-dept-list li::before{content:"•"; position:absolute; left:0; color:var(--iqra-gold-dark); font-weight:700;}
#iqra-page .iqra-dept-note{font-size:11px; color:var(--iqra-ink-soft); line-height:1.5; border-top:1px solid var(--iqra-border); padding-top:10px; margin-top:auto;}

#iqra-page .iqra-programs-foot{margin-top:20px; font-size:12px; color:var(--iqra-ink-soft); text-align:center;}
#iqra-page .iqra-programs-foot a{color:var(--iqra-navy-700); font-weight:600; text-decoration:underline;}

/* ============================================================
   HOW TO APPLY
   ============================================================ */
#iqra-page .iqra-howto{padding:56px 0 60px;}
#iqra-page .iqra-steps{display:grid; grid-template-columns:repeat(4,1fr); gap:16px; margin-bottom:24px;}
@media (max-width:900px){#iqra-page .iqra-steps{grid-template-columns:repeat(2,1fr);}}
@media (max-width:560px){#iqra-page .iqra-steps{grid-template-columns:1fr;}}
#iqra-page .iqra-step{background:#fff; border:1px solid var(--iqra-border); border-radius:10px; padding:20px;}
#iqra-page .iqra-step-num{
  width:30px; height:30px; border-radius:50%; background:var(--iqra-navy); color:#fff;
  display:flex; align-items:center; justify-content:center; font-family:var(--iqra-font-display); font-weight:800; font-size:13px; margin-bottom:14px;
}
#iqra-page .iqra-step h3{font-family:var(--iqra-font-display); font-size:14.5px; font-weight:800; color:var(--iqra-navy); margin-bottom:6px;}
#iqra-page .iqra-step p{font-size:12.5px; color:var(--iqra-ink-soft); line-height:1.55;}

#iqra-page .iqra-campus-cta{
  background:var(--iqra-navy-tint); border:1px solid rgba(15,38,71,0.1); border-radius:10px;
  display:flex; align-items:center; justify-content:space-between; gap:16px; padding:18px 22px; flex-wrap:wrap;
}
#iqra-page .iqra-campus-cta-text{display:flex; align-items:center; gap:14px;}
#iqra-page .iqra-campus-cta-icon{
  width:40px; height:40px; border-radius:8px; background:#fff; display:flex; align-items:center; justify-content:center; color:var(--iqra-navy); flex-shrink:0;
}
#iqra-page .iqra-campus-cta-text strong{display:block; font-size:14px; color:var(--iqra-navy); margin-bottom:2px;}
#iqra-page .iqra-campus-cta-text span{font-size:12.5px; color:var(--iqra-ink-soft);}

/* ============================================================
   FOOTER
   ============================================================ */
#iqra-page .iqra-footer{background:var(--iqra-navy); color:rgba(255,255,255,0.85); padding:48px 0 0;}
#iqra-page .iqra-footer-grid{display:grid; grid-template-columns:repeat(3,1fr); gap:32px; padding-bottom:34px;}
@media (max-width:800px){#iqra-page .iqra-footer-grid{grid-template-columns:1fr; gap:26px;}}
#iqra-page .iqra-footer h5{font-family:var(--iqra-font-display); font-size:13.5px; font-weight:700; color:#fff; margin-bottom:14px; padding-bottom:10px; border-bottom:1px solid rgba(255,255,255,0.15);}
#iqra-page .iqra-footer-line{display:flex; align-items:flex-start; gap:10px; font-size:13px; margin-bottom:11px; color:rgba(255,255,255,0.8);}
#iqra-page .iqra-footer-line a{color:rgba(255,255,255,0.8);}
#iqra-page .iqra-footer-line a:hover{color:var(--iqra-gold);}
#iqra-page .iqra-footer-line svg{flex-shrink:0; margin-top:2px; opacity:0.8;}
#iqra-page .iqra-footer-social{display:flex; gap:10px; margin-top:14px;}
#iqra-page .iqra-footer-social a{width:30px; height:30px; border-radius:50%; background:rgba(255,255,255,0.1); display:flex; align-items:center; justify-content:center; color:#fff; transition:background .2s ease;}
#iqra-page .iqra-footer-social a:hover{background:var(--iqra-gold);}
#iqra-page .iqra-footer ul li{margin-bottom:8px;}
#iqra-page .iqra-footer-bottom{border-top:1px solid rgba(255,255,255,0.12); padding:16px 0; text-align:center; font-size:12px; color:rgba(255,255,255,0.6);}

/* ============================================================
   FLOATING WHATSAPP
   ============================================================ */
#iqra-page .iqra-whatsapp-float{
  position:fixed; bottom:22px; right:22px; width:56px; height:56px; border-radius:50%;
  background:var(--iqra-green); display:flex; align-items:center; justify-content:center;
  box-shadow:var(--iqra-shadow-m); z-index:150; transition:transform .2s ease;
}
#iqra-page .iqra-whatsapp-float:hover{transform:scale(1.08);}
</style>
</head>
<body <?php body_class(); ?>>
<?php wp_head(); ?>

<div id="iqra-page">

<!-- ============================================================
     TOP UTILITY BAR
     ============================================================ -->
<div class="iqra-topbar">
  <div class="iqra-container">
    <div class="iqra-topbar-info">
      <span>Islamabad Campus</span>
      <span>HEC Recognized</span>
      <span>Since 1998</span>
    </div>
    <div class="iqra-topbar-social">
      <a href="https://www.facebook.com/IUIsbCampus/" target="_blank" rel="noopener" aria-label="Facebook"><svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor"><path d="M22 12a10 10 0 10-11.6 9.9v-7H7.9V12h2.5V9.8c0-2.5 1.5-3.9 3.8-3.9 1.1 0 2.2.2 2.2.2v2.5h-1.3c-1.2 0-1.6.8-1.6 1.6V12h2.8l-.4 2.9h-2.4v7A10 10 0 0022 12z"/></svg></a>
      <a href="https://www.instagram.com/iuisbcampus/" target="_blank" rel="noopener" aria-label="Instagram"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="3" y="3" width="18" height="18" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="1"/></svg></a>
      <a href="#" aria-label="Twitter / X"><svg width="11" height="11" viewBox="0 0 24 24" fill="currentColor"><path d="M18.9 3H22l-7.6 8.7L23 21h-6.8l-5.3-6.5L5 21H2l8.1-9.3L1.5 3h7l4.8 5.9L18.9 3z"/></svg></a>
      <a href="https://iqra.edu.pk/" target="_blank" rel="noopener" aria-label="Website"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M3 12h18M12 3a15 15 0 010 18 15 15 0 010-18z"/></svg></a>
    </div>
  </div>
</div>

<!-- ============================================================
     HEADER
     ============================================================ -->
<header class="iqra-header">
  <div class="iqra-container">
    <a href="/iqra" class="iqra-logo" aria-label="Iqra University home">
      <img src="https://eduapply.online/wp-content/uploads/2026/08/Iqra-Logo.webp" alt="Iqra University logo">
    </a>

    <ul class="iqra-nav" aria-label="Primary">
      <li><a href="#iqra-programs" data-iqra-scroll="#iqra-programs">Programs</a></li>
      <li><a href="#iqra-howto" data-iqra-scroll="#iqra-howto">How to Apply</a></li>
      <li><a href="#iqra-contact" data-iqra-scroll="#iqra-contact">Contact</a></li>
      <li>
        <a href="#" aria-haspopup="true">Fee Structure <svg class="iqra-caret" width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M6 9l6 6 6-6"/></svg></a>
        <div class="iqra-dropdown">
          <a href="/iqra-fee-structure">Fee Structure</a>
          <a href="/iqra-merit-list">Merit List</a>
          <a href="/iqra-fee-chalan">Fee Chalan</a>
        </div>
      </li>
      <li>
        <a href="#" aria-haspopup="true">Admission Criteria <svg class="iqra-caret" width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M6 9l6 6 6-6"/></svg></a>
        <div class="iqra-dropdown">
          <a href="#iqra-programs" data-iqra-scroll="#iqra-programs">Eligibility by Program</a>
          <a href="https://iuisl.iqra.edu.pk/" target="_blank" rel="noopener">Full Criteria (Iqra University)</a>
        </div>
      </li>
    </ul>

    <div class="iqra-header-cta">
      <a href="/admissions/apply?university=IQRA" class="iqra-btn iqra-btn-navy">Apply Now</a>
    </div>
    <button class="iqra-hamburger" id="iqra-hamburger-btn" aria-label="Open menu" aria-expanded="false" aria-controls="iqra-mobile-nav">
      <span></span><span></span><span></span>
    </button>
  </div>

  <ul class="iqra-mobile-nav" id="iqra-mobile-nav" aria-label="Mobile primary">
    <li><a href="#iqra-programs" data-iqra-scroll="#iqra-programs">Programs</a></li>
    <li><a href="#iqra-howto" data-iqra-scroll="#iqra-howto">How to Apply</a></li>
    <li><a href="#iqra-contact" data-iqra-scroll="#iqra-contact">Contact</a></li>
    <li>
      <a href="#">Fee Structure</a>
      <div class="iqra-mobile-sub">
        <a href="/iqra-fee-structure">Fee Structure</a>
        <a href="/iqra-merit-list">Merit List</a>
        <a href="/iqra-fee-chalan">Fee Chalan</a>
      </div>
    </li>
    <li><a href="https://iuisl.iqra.edu.pk/" target="_blank" rel="noopener">Admission Criteria</a></li>
    <li class="iqra-mobile-cta"><a href="/admissions/apply?university=IQRA" class="iqra-btn iqra-btn-navy iqra-btn-block">Apply Now</a></li>
  </ul>
</header>

<!-- ============================================================
     ANNOUNCEMENT BAR
     ============================================================ -->
<div class="iqra-announce">
  <span class="iqra-announce-pill">Admissions Open · Fall 2026</span>
</div>

<!-- ============================================================
     HERO
     ============================================================ -->
<section class="iqra-hero">
  <div class="iqra-container iqra-hero-grid">
    <div>
      <p class="iqra-hero-eyebrow">Online Admissions Portal</p>
      <h1>Welcome to Iqra University Islamabad Campus</h1>
      <p class="iqra-hero-lead">Apply for Bachelor's, Master's and PhD programs at Iqra University H-9, Islamabad. Complete your application online through EduApply — it takes about 15 minutes, and our admissions guidance team is with you at every step.</p>

      <div class="iqra-hero-badges">
        <span class="iqra-hero-badge"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M20 6L9 17l-5-5"/></svg> HEC Recognized</span>
        <span class="iqra-hero-badge"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 10v6M2 10l10-5 10 5-10 5-10-5z"/><path d="M6 12v5c0 1.5 2.7 3 6 3s6-1.5 6-3v-5"/></svg> Bachelor's · Master's · PhD</span>
        <span class="iqra-hero-badge"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 6-9 12-9 12s-9-6-9-12a9 9 0 1118 0z"/><circle cx="12" cy="10" r="3"/></svg> H-9, Islamabad</span>
      </div>

      <div class="iqra-hero-banner">
        <img src="https://eduapply.online/wp-content/uploads/2026/08/admissionbannersp26.webp" alt="Iqra University Islamabad Campus — Fall 2026 admissions banner" loading="eager">
      </div>
    </div>

    <div class="iqra-apply-card">
      <h2>Start Your Application</h2>
      <p>EduApply doesn't require a separate account — begin your Iqra University application directly, save your details in one guided form, and our team forwards it to the Admissions Office on your behalf.</p>
      <a href="/admissions/apply?university=IQRA" class="iqra-btn iqra-btn-navy iqra-btn-block">Apply Now →</a>
      <div class="iqra-apply-divider">or</div>
      <a href="https://wa.me/923155264264" target="_blank" rel="noopener" class="iqra-btn iqra-btn-outline iqra-btn-block">Chat with Admissions on WhatsApp</a>
      <p class="iqra-apply-note">Applications are typically reviewed within 2–3 working days.</p>
    </div>
  </div>
</section>

<!-- ============================================================
     PROGRAMS
     ============================================================ -->
<section class="iqra-programs" id="iqra-programs">
  <div class="iqra-container">
    <div class="iqra-section-head">
      <h2>Our Programs</h2>
      <p>Click any program's department for a quick look at eligibility. For full curriculum and entry criteria, refer to the Iqra University website.</p>
    </div>

    <div class="iqra-tabs" id="iqra-tabs" role="tablist">
      <button class="iqra-tab iqra-tab-active" data-iqra-level="all">All Programs</button>
      <button class="iqra-tab" data-iqra-level="bachelors">Bachelor's Programs</button>
      <button class="iqra-tab" data-iqra-level="masters">Master's Programs</button>
      <button class="iqra-tab" data-iqra-level="phd">PhD Programs</button>
    </div>

    <div class="iqra-dept-grid" id="iqra-dept-grid">

      <div class="iqra-dept-card" data-level="bachelors">
        <span class="iqra-dept-level">Bachelor's</span>
        <h3 class="iqra-dept-name">Department of Computing and Technology</h3>
        <ul class="iqra-dept-list">
          <li>BS Computer Science – BS(CS)</li>
          <li>Associate Degree (AD) – Computing – AD(CS)</li>
          <li>BS Artificial Intelligence – BS(AI)</li>
          <li>BS Software Engineering – BS(SE)</li>
        </ul>
        <p class="iqra-dept-note">Minimum 45% in HSSC or equivalent for AD Computing, 50% for Bachelor programs.</p>
      </div>

      <div class="iqra-dept-card" data-level="masters">
        <span class="iqra-dept-level">Master's</span>
        <h3 class="iqra-dept-name">Department of Computing and Technology</h3>
        <ul class="iqra-dept-list">
          <li>MS (CS)</li>
          <li>MS (SE)</li>
        </ul>
        <p class="iqra-dept-note">16 years of education with min. 2.00/4.00 CGPA or equivalent, 2nd Division.</p>
      </div>

      <div class="iqra-dept-card" data-level="phd">
        <span class="iqra-dept-level">PhD</span>
        <h3 class="iqra-dept-name">Department of Computing and Technology</h3>
        <ul class="iqra-dept-list">
          <li>PhD Computer Science</li>
        </ul>
        <p class="iqra-dept-note">18 years of education in a relevant field, minimum CGPA 3.0/4.0.</p>
      </div>

      <div class="iqra-dept-card" data-level="bachelors">
        <span class="iqra-dept-level">Bachelor's</span>
        <h3 class="iqra-dept-name">Department of Business Administration</h3>
        <ul class="iqra-dept-list">
          <li>AD in Accounting &amp; Finance</li>
          <li>AD in Digital Marketing</li>
          <li>AD in Business Analytics</li>
          <li>BBA-H</li>
          <li>BS Business Analytics</li>
          <li>BS Accounting and Finance</li>
          <li>BS Commerce</li>
        </ul>
        <p class="iqra-dept-note">Min. 50% marks in HSSC or equivalent, except BS Commerce which requires 45%.</p>
      </div>

      <div class="iqra-dept-card" data-level="masters">
        <span class="iqra-dept-level">Master's</span>
        <h3 class="iqra-dept-name">Department of Business Administration</h3>
        <ul class="iqra-dept-list">
          <li>MBA</li>
          <li>MS Management Science</li>
        </ul>
        <p class="iqra-dept-note">16 years of education, min. 2.00/4.00 CGPA. Relevant discipline required for MS; non-relevant accepted for MBA.</p>
      </div>

      <div class="iqra-dept-card" data-level="phd">
        <span class="iqra-dept-level">PhD</span>
        <h3 class="iqra-dept-name">Department of Business Administration</h3>
        <ul class="iqra-dept-list">
          <li>PhD Business Administration</li>
        </ul>
        <p class="iqra-dept-note">18 years of education in a relevant discipline, CGPA 3.00/4.00 or 1st Division.</p>
      </div>

      <div class="iqra-dept-card" data-level="bachelors">
        <span class="iqra-dept-level">Bachelor's</span>
        <h3 class="iqra-dept-name">Department of Fashion and Design</h3>
        <ul class="iqra-dept-list">
          <li>One &amp; Two Year Diploma (BFD &amp; BTD)</li>
          <li>BFD</li>
          <li>BTD</li>
        </ul>
        <p class="iqra-dept-note">45% marks in HSSC or equivalent.</p>
      </div>

      <div class="iqra-dept-card" data-level="bachelors">
        <span class="iqra-dept-level">Bachelor's</span>
        <h3 class="iqra-dept-name">Department of Social Sciences</h3>
        <ul class="iqra-dept-list">
          <li>AD in International Relations</li>
          <li>AD in English</li>
          <li>BSIR</li>
          <li>BS (English)</li>
        </ul>
        <p class="iqra-dept-note">Passing marks in HSSC for AD programs; min. 45% for Bachelor programs.</p>
      </div>

      <div class="iqra-dept-card" data-level="masters">
        <span class="iqra-dept-level">Master's</span>
        <h3 class="iqra-dept-name">Department of Social Sciences</h3>
        <ul class="iqra-dept-list">
          <li>M.Phil (IDS)</li>
          <li>M.Phil (IR)</li>
        </ul>
        <p class="iqra-dept-note">16 years of education, min. 2.00/4.00 CGPA. Relevant discipline required for IR; non-relevant accepted for IDS.</p>
      </div>

      <div class="iqra-dept-card" data-level="bachelors">
        <span class="iqra-dept-level">Bachelor's</span>
        <h3 class="iqra-dept-name">Department of Media Studies</h3>
        <ul class="iqra-dept-list">
          <li>AD in Film &amp; TV</li>
          <li>AD in Animation</li>
          <li>BMS</li>
        </ul>
        <p class="iqra-dept-note">Passing marks in HSSC for AD programs; min. 45% for Bachelor programs.</p>
      </div>

      <div class="iqra-dept-card" data-level="bachelors">
        <span class="iqra-dept-level">Bachelor's</span>
        <h3 class="iqra-dept-name">Department of Pharmacy</h3>
        <ul class="iqra-dept-list">
          <li>Pharm.D</li>
        </ul>
        <p class="iqra-dept-note">FSc / A-Levels or equivalent (Physics, Chemistry, Biology) with at least 60% marks.</p>
      </div>

      <div class="iqra-dept-card" data-level="bachelors">
        <span class="iqra-dept-level">Bachelor's</span>
        <h3 class="iqra-dept-name">Department of Allied Health Sciences</h3>
        <ul class="iqra-dept-list">
          <li>AD in Psychology</li>
          <li>BS Psychology</li>
          <li>BS Psychology (Clinical)</li>
          <li>BS Medical Lab Technology (MLT)</li>
          <li>BS Human Nutrition &amp; Dietetics (HND)</li>
        </ul>
        <p class="iqra-dept-note">AD: passing marks in HSSC. Psychology: 45%. Psychology (Clinical): 50%. MLT &amp; HND: FSc Pre-Medical or equivalent.</p>
      </div>

    </div>

    <p class="iqra-programs-foot">Programs shown are indicative. Confirm eligibility with the Admissions Office. Full list on <a href="https://iuisl.iqra.edu.pk/" target="_blank" rel="noopener">iuisl.iqra.edu.pk</a>.</p>
  </div>
</section>

<!-- ============================================================
     HOW TO APPLY
     ============================================================ -->
<section class="iqra-howto" id="iqra-howto">
  <div class="iqra-container">
    <div class="iqra-section-head">
      <h2>How to Apply</h2>
      <p>Complete your application in about 15 minutes on phone or computer, and continue later anytime.</p>
    </div>

    <div class="iqra-steps">
      <div class="iqra-step">
        <div class="iqra-step-num">1</div>
        <h3>Start your application</h3>
        <p>Open the EduApply form for Iqra University — no lengthy signup required.</p>
      </div>
      <div class="iqra-step">
        <div class="iqra-step-num">2</div>
        <h3>Choose your program</h3>
        <p>Select degree level, department and your preferred program.</p>
      </div>
      <div class="iqra-step">
        <div class="iqra-step-num">3</div>
        <h3>Fill your details</h3>
        <p>Personal and academic information — takes just a few minutes.</p>
      </div>
      <div class="iqra-step">
        <div class="iqra-step-num">4</div>
        <h3>Submit application</h3>
        <p>Upload your documents and submit — we forward it to Admissions.</p>
      </div>
    </div>

    <div class="iqra-campus-cta">
      <div class="iqra-campus-cta-text">
        <span class="iqra-campus-cta-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 21h18M5 21V7l7-4 7 4v14M9 9h1M9 13h1M14 9h1M14 13h1M10 21v-4h4v4"/></svg></span>
        <div>
          <strong>Prefer to apply at campus?</strong>
          <span>Visit the Admissions Office — our team will guide you through every step.</span>
        </div>
      </div>
      <a href="https://wa.me/923155264264" target="_blank" rel="noopener" class="iqra-btn iqra-btn-green">Reserve via WhatsApp</a>
    </div>
  </div>
</section>

<!-- ============================================================
     FOOTER
     ============================================================ -->
<footer class="iqra-footer" id="iqra-contact">
  <div class="iqra-container">
    <div class="iqra-footer-grid">
      <div>
        <h5>Admissions Office</h5>
        <p class="iqra-footer-line"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.8 19.8 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.8 19.8 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.13.96.36 1.9.68 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.91.32 1.85.55 2.81.68A2 2 0 0122 16.92z"/></svg><a href="tel:+925111264264">+92 51 111 264 264 Ext. 199 | 231</a></p>
        <p class="iqra-footer-line"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.8 19.8 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.8 19.8 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.13.96.36 1.9.68 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.91.32 1.85.55 2.81.68A2 2 0 0122 16.92z"/></svg><a href="tel:+0514435207">051-4435207</a></p>
        <p class="iqra-footer-line"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16v16H4z" opacity="0"/><path d="M22 6l-10 7L2 6"/><rect x="2" y="4" width="20" height="16" rx="2"/></svg><a href="mailto:admissions@iqraisb.edu.pk">admissions@iqraisb.edu.pk</a></p>
        <p class="iqra-footer-line"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 3"/></svg><span>Mon – Fri, 9:00 AM – 4:00 PM</span></p>
        <div class="iqra-footer-social">
          <a href="https://www.facebook.com/IUIsbCampus/" target="_blank" rel="noopener" aria-label="Facebook"><svg width="13" height="13" viewBox="0 0 24 24" fill="currentColor"><path d="M22 12a10 10 0 10-11.6 9.9v-7H7.9V12h2.5V9.8c0-2.5 1.5-3.9 3.8-3.9 1.1 0 2.2.2 2.2.2v2.5h-1.3c-1.2 0-1.6.8-1.6 1.6V12h2.8l-.4 2.9h-2.4v7A10 10 0 0022 12z"/></svg></a>
          <a href="https://www.instagram.com/iuisbcampus/" target="_blank" rel="noopener" aria-label="Instagram"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="3" y="3" width="18" height="18" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="1"/></svg></a>
          <a href="#" aria-label="Twitter / X"><svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor"><path d="M18.9 3H22l-7.6 8.7L23 21h-6.8l-5.3-6.5L5 21H2l8.1-9.3L1.5 3h7l4.8 5.9L18.9 3z"/></svg></a>
          <a href="https://iqra.edu.pk/" target="_blank" rel="noopener" aria-label="Website"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M3 12h18M12 3a15 15 0 010 18 15 15 0 010-18z"/></svg></a>
        </div>
      </div>

      <div>
        <h5>WhatsApp</h5>
        <p class="iqra-footer-line"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M17.6 6.32A8.86 8.86 0 0012.05 4a8.94 8.94 0 00-7.74 13.4L3 21l3.7-1.28a8.9 8.9 0 004.34 1.12h.01A8.94 8.94 0 0021 12.32a8.87 8.87 0 00-3.4-6zM12.05 19.6a7.4 7.4 0 01-3.78-1.04l-.27-.16-2.8.97.94-2.73-.18-.28a7.44 7.44 0 01-1.15-3.98 7.4 7.4 0 0112.65-5.25 7.36 7.36 0 012.17 5.25 7.4 7.4 0 01-7.58 7.22z"/></svg><a href="https://wa.me/923155264264" target="_blank" rel="noopener">0315-5264264 (Primary)</a></p>
        <p class="iqra-footer-line"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M17.6 6.32A8.86 8.86 0 0012.05 4a8.94 8.94 0 00-7.74 13.4L3 21l3.7-1.28a8.9 8.9 0 004.34 1.12h.01A8.94 8.94 0 0021 12.32a8.87 8.87 0 00-3.4-6zM12.05 19.6a7.4 7.4 0 01-3.78-1.04l-.27-.16-2.8.97.94-2.73-.18-.28a7.44 7.44 0 01-1.15-3.98 7.4 7.4 0 0112.65-5.25 7.36 7.36 0 012.17 5.25 7.4 7.4 0 01-7.58 7.22z"/></svg><a href="https://wa.me/923345264264" target="_blank" rel="noopener">0334-5264264</a></p>
        <p class="iqra-footer-line"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M17.6 6.32A8.86 8.86 0 0012.05 4a8.94 8.94 0 00-7.74 13.4L3 21l3.7-1.28a8.9 8.9 0 004.34 1.12h.01A8.94 8.94 0 0021 12.32a8.87 8.87 0 00-3.4-6zM12.05 19.6a7.4 7.4 0 01-3.78-1.04l-.27-.16-2.8.97.94-2.73-.18-.28a7.44 7.44 0 01-1.15-3.98 7.4 7.4 0 0112.65-5.25 7.36 7.36 0 012.17 5.25 7.4 7.4 0 01-7.58 7.22z"/></svg><a href="https://wa.me/923215264264" target="_blank" rel="noopener">0321-5264264</a></p>
        <a href="https://wa.me/923155264264" target="_blank" rel="noopener" class="iqra-btn iqra-btn-green" style="margin-top:8px;">Chat on WhatsApp</a>
      </div>

      <div>
        <h5>Campus &amp; Links</h5>
        <p class="iqra-footer-line"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 6-9 12-9 12s-9-6-9-12a9 9 0 1118 0z"/><circle cx="12" cy="10" r="3"/></svg><span>Khayaban-e-Johar, H-9, Islamabad 44000</span></p>
        <p class="iqra-footer-line"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M3 12h18M12 3a15 15 0 010 18 15 15 0 010-18z"/></svg><a href="https://iuisl.iqra.edu.pk/" target="_blank" rel="noopener">iuisl.iqra.edu.pk</a></p>
        <ul>
          <li><a href="https://iuisl.iqra.edu.pk/" target="_blank" rel="noopener">Admission Criteria</a></li>
          <li><a href="/iqra-fee-structure">Fee Structure</a></li>
          <li><a href="#">Scholarships</a></li>
        </ul>
      </div>
    </div>

    <div class="iqra-footer-bottom">
      <p>&copy; <span id="iqra-year"></span> Iqra University Islamabad Campus, via EduApply | iuisl.iqra.edu.pk | UAN: 051 111 264 264</p>
    </div>
  </div>
</footer>

<a href="https://wa.me/923155264264" target="_blank" rel="noopener" class="iqra-whatsapp-float" aria-label="Chat on WhatsApp">
  <svg width="26" height="26" viewBox="0 0 24 24" fill="#fff"><path d="M17.6 6.32A8.86 8.86 0 0012.05 4a8.94 8.94 0 00-7.74 13.4L3 21l3.7-1.28a8.9 8.9 0 004.34 1.12h.01A8.94 8.94 0 0021 12.32a8.87 8.87 0 00-3.4-6zM12.05 19.6a7.4 7.4 0 01-3.78-1.04l-.27-.16-2.8.97.94-2.73-.18-.28a7.44 7.44 0 01-1.15-3.98 7.4 7.4 0 0112.65-5.25 7.36 7.36 0 012.17 5.25 7.4 7.4 0 01-7.58 7.22zm4.08-5.55c-.22-.11-1.31-.65-1.51-.72-.2-.07-.35-.11-.5.11-.15.22-.57.72-.7.87-.13.15-.26.16-.48.05a6.1 6.1 0 01-1.8-1.11 6.8 6.8 0 01-1.24-1.55c-.13-.22 0-.34.1-.45.1-.1.22-.26.33-.39.11-.13.15-.22.22-.37.07-.15.04-.28-.02-.39-.06-.11-.5-1.21-.69-1.66-.18-.43-.36-.37-.5-.38h-.43c-.15 0-.39.06-.6.28-.2.22-.79.77-.79 1.87 0 1.1.81 2.16.92 2.31.11.15 1.6 2.44 3.87 3.42.54.23.96.37 1.29.48.54.17 1.03.15 1.42.09.43-.06 1.31-.53 1.5-1.05.18-.51.18-.95.13-1.05-.06-.1-.2-.15-.42-.26z"/></svg>
</a>

</div><!-- /#iqra-page -->

<script>
(function(){
  function setupMobileNav(){
    var btn = document.getElementById("iqra-hamburger-btn");
    var nav = document.getElementById("iqra-mobile-nav");
    if(!btn || !nav) return;
    btn.addEventListener("click", function(){
      var isOpen = nav.classList.toggle("iqra-open");
      btn.classList.toggle("iqra-active", isOpen);
      btn.setAttribute("aria-expanded", isOpen ? "true" : "false");
    });
  }

  function setupSmoothScroll(){
    document.querySelectorAll('#iqra-page a[data-iqra-scroll]').forEach(function(link){
      var targetSel = link.getAttribute("data-iqra-scroll");
      link.addEventListener("click", function(e){
        var target = document.querySelector(targetSel);
        if(target){
          e.preventDefault();
          var top = target.getBoundingClientRect().top + window.pageYOffset - 90;
          window.scrollTo({top:top, behavior:"smooth"});
          var mobileNav = document.getElementById("iqra-mobile-nav");
          var hamburger = document.getElementById("iqra-hamburger-btn");
          if(mobileNav && mobileNav.classList.contains("iqra-open")){
            mobileNav.classList.remove("iqra-open");
            if(hamburger){ hamburger.classList.remove("iqra-active"); hamburger.setAttribute("aria-expanded","false"); }
          }
        }
      });
    });
  }

  function setupProgramFilter(){
    var tabs = document.querySelectorAll("#iqra-tabs .iqra-tab");
    var cards = document.querySelectorAll("#iqra-dept-grid .iqra-dept-card");
    if(!tabs.length || !cards.length) return;
    tabs.forEach(function(tab){
      tab.addEventListener("click", function(){
        tabs.forEach(function(t){ t.classList.remove("iqra-tab-active"); });
        tab.classList.add("iqra-tab-active");
        var level = tab.getAttribute("data-iqra-level");
        cards.forEach(function(card){
          var show = (level === "all") || (card.getAttribute("data-level") === level);
          card.style.display = show ? "" : "none";
        });
      });
    });
  }

  function setupFooterYear(){
    var el = document.getElementById("iqra-year");
    if(el) el.textContent = new Date().getFullYear();
  }

  setupMobileNav();
  setupSmoothScroll();
  setupProgramFilter();
  setupFooterYear();
})();
</script>

<?php wp_footer(); ?>
</body>
</html>
