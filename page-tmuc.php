<?php
/**
 * Template Name: EduApply — TMUC
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>The Millennium Universal College (TMUC) — Pakistan</title>
<meta name="description" content="The Millennium Universal College (TMUC) — an international university in Pakistan offering UK-affiliated degree programs across business, computing, law, creative arts and more." />

<!--
  Standalone reproduction of the TMUC homepage only (/tmuc route). Namespaced
  with a "tmuc-" prefix on every class/ID and scoped under #tmuc-page so it
  never collides with the campaign index or other university pages.

  SOURCE: nav structure, school/faculty names, program names, campus list,
  course-search filters, and footer/contact details are drawn from the live
  tmuc.edu.pk homepage. The three quick-link blurbs and the admissions blurb
  are paraphrased in our own words. Campus thumbnails and both logos are
  hotlinked directly from TMUC's own asset paths. No specific hero slide
  photography or homepage news items were exposed by the source (the hero
  uses a slider plugin with placeholder/dummy images, and no news articles
  were listed on the homepage itself), so the hero image is a flagged
  placeholder and no news section has been fabricated — a real "News & Events"
  link is provided instead.
-->

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

#tmuc-page .tmuc-eyebrow{
  font-family:var(--tmuc-font-display); font-size:12px; font-weight:700; letter-spacing:0.12em; text-transform:uppercase;
  color:var(--tmuc-red); margin-bottom:10px;
}
#tmuc-page .tmuc-section-title{
  font-family:var(--tmuc-font-display); font-weight:800; font-size:clamp(24px,3.2vw,38px); color:var(--tmuc-black);
  line-height:1.15; letter-spacing:-0.01em;
}
#tmuc-page .tmuc-section-sub{margin-top:12px; font-size:15px; color:var(--tmuc-ink-soft); line-height:1.65; max-width:64ch;}
#tmuc-page .tmuc-section-head{margin-bottom:38px;}
#tmuc-page .tmuc-section-head.tmuc-center{text-align:center; max-width:660px; margin-left:auto; margin-right:auto;}

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

/* ============================================================
   TOP UTILITY BAR
   ============================================================ */
#tmuc-page .tmuc-topbar{background:var(--tmuc-black); padding:9px 0; font-size:12px;}
#tmuc-page .tmuc-topbar .tmuc-container{display:flex; align-items:center; justify-content:space-between; gap:16px; flex-wrap:wrap;}
#tmuc-page .tmuc-topbar-info{display:flex; gap:20px; flex-wrap:wrap; color:rgba(255,255,255,0.75); font-weight:500;}
#tmuc-page .tmuc-topbar-info a{color:rgba(255,255,255,0.75);}
#tmuc-page .tmuc-topbar-info a:hover{color:var(--tmuc-red);}
@media (max-width:700px){#tmuc-page .tmuc-topbar-info{display:none;}}

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
   HERO
   ============================================================ */
#tmuc-page .tmuc-hero{position:relative; min-height:600px; display:flex; align-items:center; overflow:hidden; background:var(--tmuc-black);}
#tmuc-page .tmuc-hero-media{position:absolute; inset:0;}
#tmuc-page .tmuc-hero-media img{width:100%; height:100%; object-fit:cover;}
#tmuc-page .tmuc-hero-media::after{
  content:""; position:absolute; inset:0;
  background:linear-gradient(100deg, rgba(20,20,20,0.94) 8%, rgba(20,20,20,0.68) 45%, rgba(20,20,20,0.38) 80%);
}
#tmuc-page .tmuc-hero-content{position:relative; z-index:1; padding:90px 0;}
#tmuc-page .tmuc-hero-kicker{
  display:inline-flex; align-items:center; gap:8px; font-size:12px; font-weight:700; letter-spacing:0.1em; text-transform:uppercase;
  color:var(--tmuc-red); margin-bottom:20px;
}
#tmuc-page .tmuc-hero h1{
  font-family:var(--tmuc-font-display); font-weight:800; color:#fff;
  font-size:clamp(32px,5.4vw,58px); line-height:1.08; max-width:14ch; letter-spacing:-0.01em;
}
#tmuc-page .tmuc-hero-sub{margin-top:22px; font-size:16px; line-height:1.65; color:rgba(255,255,255,0.82); max-width:54ch;}
#tmuc-page .tmuc-hero-actions{display:flex; gap:14px; margin-top:36px; flex-wrap:wrap;}

/* ============================================================
   QUICK-LINK FEATURE BLOCKS
   ============================================================ */
#tmuc-page .tmuc-quickblocks{padding:0;}
#tmuc-page .tmuc-quickblocks-grid{display:grid; grid-template-columns:repeat(3,1fr);}
#tmuc-page .tmuc-qb{position:relative; min-height:280px; overflow:hidden; display:flex; align-items:flex-end;}
#tmuc-page .tmuc-qb img{position:absolute; inset:0; width:100%; height:100%; object-fit:cover; transition:transform .5s ease;}
#tmuc-page .tmuc-qb:hover img{transform:scale(1.06);}
#tmuc-page .tmuc-qb::after{content:""; position:absolute; inset:0; background:linear-gradient(0deg, rgba(20,20,20,0.92) 20%, rgba(20,20,20,0.45) 65%, rgba(20,20,20,0.55) 100%);}
#tmuc-page .tmuc-qb-body{position:relative; z-index:1; padding:28px; color:#fff;}
#tmuc-page .tmuc-qb-body h3{font-family:var(--tmuc-font-display); font-size:19px; font-weight:800; margin-bottom:10px;}
#tmuc-page .tmuc-qb-body p{font-size:12.5px; line-height:1.55; color:rgba(255,255,255,0.78); margin-bottom:14px; max-width:34ch;}
#tmuc-page .tmuc-qb-link{font-size:12px; font-weight:700; color:var(--tmuc-red); display:inline-flex; align-items:center; gap:6px; text-transform:uppercase; letter-spacing:0.03em;}
#tmuc-page .tmuc-qb:hover .tmuc-qb-link{color:#fff;}
@media (max-width:860px){#tmuc-page .tmuc-quickblocks-grid{grid-template-columns:1fr;}}

/* ============================================================
   ADMISSIONS CTA
   ============================================================ */
#tmuc-page .tmuc-admissions{background:var(--tmuc-black); color:#fff; padding:88px 0; position:relative; overflow:hidden;}
#tmuc-page .tmuc-admissions::before{
  content:""; position:absolute; right:-10%; top:-30%; width:520px; height:520px; border-radius:50%;
  background:radial-gradient(circle, rgba(225,27,44,0.16), transparent 70%);
}
#tmuc-page .tmuc-admissions-inner{position:relative; z-index:1; max-width:760px;}
#tmuc-page .tmuc-admissions h2{font-family:var(--tmuc-font-display); font-weight:800; font-size:clamp(26px,3.6vw,40px); margin-bottom:8px;}
#tmuc-page .tmuc-admissions-tag{font-size:14px; font-weight:600; color:var(--tmuc-red); margin-bottom:20px; display:block;}
#tmuc-page .tmuc-admissions p{font-size:15px; line-height:1.75; color:rgba(255,255,255,0.75); margin-bottom:30px;}

/* ============================================================
   CAMPUSES
   ============================================================ */
#tmuc-page .tmuc-campuses{padding:88px 0;}
#tmuc-page .tmuc-campuses-grid{display:grid; grid-template-columns:repeat(4,1fr); gap:20px;}
#tmuc-page .tmuc-campus-card{
  background:var(--tmuc-paper); border-radius:12px; padding:30px 20px; text-align:center;
  transition:transform .3s ease, box-shadow .3s ease, background .3s ease;
}
#tmuc-page .tmuc-campus-card:hover{transform:translateY(-6px); box-shadow:var(--tmuc-shadow-m); background:#fff;}
#tmuc-page .tmuc-campus-media{width:64px; height:64px; margin:0 auto 16px; display:flex; align-items:center; justify-content:center;}
#tmuc-page .tmuc-campus-media img{width:100%; height:100%; object-fit:contain;}
#tmuc-page .tmuc-campus-card h3{font-family:var(--tmuc-font-display); font-size:14.5px; font-weight:700; color:var(--tmuc-black);}
@media (max-width:900px){#tmuc-page .tmuc-campuses-grid{grid-template-columns:repeat(2,1fr);}}
@media (max-width:480px){#tmuc-page .tmuc-campuses-grid{grid-template-columns:1fr; max-width:280px; margin:0 auto;}}

/* ============================================================
   PROGRAMS
   ============================================================ */
#tmuc-page .tmuc-programs{padding:88px 0; background:var(--tmuc-paper);}
#tmuc-page .tmuc-programs-grid{display:grid; grid-template-columns:repeat(3,1fr); gap:22px;}
#tmuc-page .tmuc-program-card{background:#fff; border-radius:12px; overflow:hidden; box-shadow:var(--tmuc-shadow-s); transition:transform .3s ease, box-shadow .3s ease;}
#tmuc-page .tmuc-program-card:hover{transform:translateY(-6px); box-shadow:var(--tmuc-shadow-m);}
#tmuc-page .tmuc-program-media{position:relative; aspect-ratio:16/10; overflow:hidden;}
#tmuc-page .tmuc-program-media img{width:100%; height:100%; object-fit:cover; transition:transform .5s ease;}
#tmuc-page .tmuc-program-card:hover .tmuc-program-media img{transform:scale(1.07);}
#tmuc-page .tmuc-program-school{
  position:absolute; top:14px; left:14px; background:var(--tmuc-red); color:#fff; font-family:var(--tmuc-font-display);
  font-size:10.5px; font-weight:700; letter-spacing:0.04em; text-transform:uppercase; padding:6px 11px; border-radius:3px;
}
#tmuc-page .tmuc-program-body{padding:20px 22px 24px;}
#tmuc-page .tmuc-program-body h3{font-family:var(--tmuc-font-display); font-size:16px; font-weight:700; color:var(--tmuc-black); line-height:1.35; margin-bottom:10px;}
#tmuc-page .tmuc-program-body p{font-size:12.5px; color:var(--tmuc-ink-soft); margin-bottom:16px;}
#tmuc-page .tmuc-program-link{font-size:12px; font-weight:700; color:var(--tmuc-black); display:inline-flex; align-items:center; gap:6px; text-transform:uppercase; letter-spacing:0.02em;}
#tmuc-page .tmuc-program-link:hover{color:var(--tmuc-red);}
#tmuc-page .tmuc-programs-more{text-align:center; margin-top:36px;}
@media (max-width:900px){#tmuc-page .tmuc-programs-grid{grid-template-columns:repeat(2,1fr);}}
@media (max-width:560px){#tmuc-page .tmuc-programs-grid{grid-template-columns:1fr;}}

/* ============================================================
   COURSE SEARCH
   ============================================================ */
#tmuc-page .tmuc-search{padding:88px 0;}
#tmuc-page .tmuc-search-bar{
  display:grid; grid-template-columns:1.4fr 1fr 1fr auto; gap:14px;
  background:var(--tmuc-paper); border-radius:10px; padding:18px; box-shadow:var(--tmuc-shadow-s);
}
#tmuc-page .tmuc-search-bar select, #tmuc-page .tmuc-search-bar input{
  border:1.5px solid var(--tmuc-paper-dim); border-radius:6px; padding:12px 14px; font-size:14px;
  background:#fff; color:var(--tmuc-ink); width:100%; font-family:inherit;
}
#tmuc-page .tmuc-search-bar select:focus, #tmuc-page .tmuc-search-bar input:focus{outline:none; border-color:var(--tmuc-red);}
@media (max-width:760px){#tmuc-page .tmuc-search-bar{grid-template-columns:1fr;}}

/* ============================================================
   NEWS & EVENTS (link-out card — no fabricated articles)
   ============================================================ */
#tmuc-page .tmuc-news-cta{padding:88px 0; background:var(--tmuc-black); color:#fff; text-align:center;}
#tmuc-page .tmuc-news-cta h2{font-family:var(--tmuc-font-display); font-weight:800; font-size:clamp(24px,3.2vw,34px); margin-bottom:14px;}
#tmuc-page .tmuc-news-cta p{color:rgba(255,255,255,0.68); max-width:52ch; margin:0 auto 28px; font-size:14.5px; line-height:1.65;}

/* ============================================================
   CONTACT
   ============================================================ */
#tmuc-page .tmuc-contact{padding:88px 0;}
#tmuc-page .tmuc-contact-grid{display:grid; grid-template-columns:0.85fr 1.15fr; gap:32px;}
#tmuc-page .tmuc-contact-info{background:var(--tmuc-paper); border-radius:14px; padding:34px 30px;}
#tmuc-page .tmuc-contact-info h3{font-family:var(--tmuc-font-display); font-size:19px; font-weight:800; color:var(--tmuc-black); margin-bottom:18px;}
#tmuc-page .tmuc-contact-item{display:flex; gap:12px; align-items:flex-start; font-size:13.8px; line-height:1.55; color:var(--tmuc-ink); margin-bottom:16px;}
#tmuc-page .tmuc-contact-item svg{color:var(--tmuc-red); flex-shrink:0; margin-top:2px;}
#tmuc-page .tmuc-map-embed{border-radius:14px; overflow:hidden; box-shadow:var(--tmuc-shadow-s); min-height:320px;}
#tmuc-page .tmuc-map-embed iframe{width:100%; height:100%; min-height:320px; border:0; display:block;}
@media (max-width:900px){#tmuc-page .tmuc-contact-grid{grid-template-columns:1fr;}}

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

#tmuc-page .tmuc-reveal{opacity:0; transform:translateY(20px); transition:opacity .6s ease, transform .6s ease;}
#tmuc-page .tmuc-reveal.tmuc-in{opacity:1; transform:translateY(0);}

/* ============================================================
   ADMISSION INQUIRY MODAL
   ============================================================ */
#tmuc-page .tmuc-modal-overlay{
  position:fixed; inset:0; z-index:2000; display:flex; align-items:center; justify-content:center;
  padding:20px; background:rgba(20,20,20,0.65); backdrop-filter:blur(4px);
  opacity:0; visibility:hidden; transition:opacity .25s ease, visibility .25s ease;
}
#tmuc-page .tmuc-modal-overlay.tmuc-modal-open{opacity:1; visibility:visible;}
#tmuc-page .tmuc-modal-panel{
  position:relative; width:100%; max-width:560px; max-height:90vh; overflow-y:auto;
  background:#fff; border-radius:10px; box-shadow:var(--tmuc-shadow-l);
  padding:clamp(26px,4vw,40px); transform:translateY(16px); transition:transform .25s ease;
}
#tmuc-page .tmuc-modal-overlay.tmuc-modal-open .tmuc-modal-panel{transform:translateY(0);}
#tmuc-page .tmuc-modal-close{
  position:absolute; top:16px; right:16px; width:36px; height:36px; border-radius:50%;
  background:var(--tmuc-paper); color:var(--tmuc-black); display:flex; align-items:center; justify-content:center;
  font-size:20px; line-height:1; transition:background .2s ease;
}
#tmuc-page .tmuc-modal-close:hover{background:var(--tmuc-paper-dim);}
#tmuc-page .tmuc-modal-header{margin-bottom:22px; padding-right:30px;}
#tmuc-page .tmuc-modal-header h3{font-family:var(--tmuc-font-display); font-size:clamp(19px,2.4vw,23px); font-weight:800; color:var(--tmuc-black);}
#tmuc-page .tmuc-modal-sub{margin-top:8px; font-size:13.5px; color:var(--tmuc-ink-soft); line-height:1.55;}
#tmuc-page .tmuc-modal-grid{display:grid; grid-template-columns:1fr 1fr; gap:14px 16px; margin-bottom:18px;}
#tmuc-page .tmuc-modal-grid .tmuc-mfield.tmuc-full{grid-column:1/-1;}
#tmuc-page .tmuc-mfield{display:flex; flex-direction:column; gap:6px;}
#tmuc-page .tmuc-mfield label{font-size:13px; font-weight:700; color:var(--tmuc-black);}
#tmuc-page .tmuc-mfield input, #tmuc-page .tmuc-mfield textarea{
  border:1.5px solid var(--tmuc-paper-dim); border-radius:6px; padding:11px 13px; font-family:inherit; font-size:14px;
  color:var(--tmuc-ink); background:var(--tmuc-paper); width:100%;
}
#tmuc-page .tmuc-mfield input:focus, #tmuc-page .tmuc-mfield textarea:focus{outline:none; border-color:var(--tmuc-red); background:#fff;}
#tmuc-page .tmuc-mfield textarea{resize:vertical; min-height:80px;}
#tmuc-page .tmuc-mfield.tmuc-merror input, #tmuc-page .tmuc-mfield.tmuc-merror textarea{border-color:#C1443C; background:#FDF3F2;}
#tmuc-page .tmuc-mfield-error{font-size:12px; color:#C1443C; min-height:14px; display:none;}
#tmuc-page .tmuc-mfield.tmuc-merror .tmuc-mfield-error{display:block;}
#tmuc-page .tmuc-modal-note{font-size:12px; color:var(--tmuc-ink-soft); margin-top:14px; text-align:center;}
@media (max-width:480px){#tmuc-page .tmuc-modal-grid{grid-template-columns:1fr;}}

/* ============================================================
   PROGRAM/DEPARTMENT MULTI-STEP MODAL
   (Fee Structure → Application Form → Confirmation, submitted via email)
   ============================================================ */
#tmuc-page .tmuc-dept-overlay{
  position:fixed; inset:0; z-index:2100; display:flex; align-items:center; justify-content:center;
  padding:20px; background:rgba(20,20,20,0.65); backdrop-filter:blur(4px);
  opacity:0; visibility:hidden; transition:opacity .25s ease, visibility .25s ease;
}
#tmuc-page .tmuc-dept-overlay.tmuc-dept-open{opacity:1; visibility:visible;}
#tmuc-page .tmuc-dept-panel{
  position:relative; width:100%; max-width:600px; max-height:90vh; overflow-y:auto;
  background:#fff; border-radius:10px; box-shadow:var(--tmuc-shadow-l);
  padding:clamp(26px,4vw,40px); transform:translateY(16px); transition:transform .25s ease;
}
#tmuc-page .tmuc-dept-overlay.tmuc-dept-open .tmuc-dept-panel{transform:translateY(0);}
#tmuc-page .tmuc-dept-close{
  position:absolute; top:16px; right:16px; width:36px; height:36px; border-radius:50%;
  background:var(--tmuc-paper); color:var(--tmuc-black); display:flex; align-items:center; justify-content:center;
  font-size:20px; line-height:1; transition:background .2s ease; z-index:2;
}
#tmuc-page .tmuc-dept-close:hover{background:var(--tmuc-paper-dim);}
#tmuc-page .tmuc-dept-steps{display:flex; align-items:center; gap:8px; margin-bottom:22px; padding-right:30px;}
#tmuc-page .tmuc-dept-step-dot{display:flex; align-items:center; gap:8px; font-size:11px; font-weight:600; color:var(--tmuc-ink-soft);}
#tmuc-page .tmuc-dept-step-dot .tmuc-num{
  width:24px; height:24px; border-radius:50%; background:var(--tmuc-paper-dim); color:var(--tmuc-ink-soft);
  display:flex; align-items:center; justify-content:center; font-size:11px; font-weight:700; transition:background .2s ease, color .2s ease;
}
#tmuc-page .tmuc-dept-step-dot.tmuc-dept-step-active .tmuc-num{background:var(--tmuc-red); color:#fff;}
#tmuc-page .tmuc-dept-step-dot.tmuc-dept-step-done .tmuc-num{background:var(--tmuc-black); color:#fff;}
#tmuc-page .tmuc-dept-step-line{flex:1; height:1px; background:var(--tmuc-paper-dim);}
#tmuc-page .tmuc-dept-view{display:none;}
#tmuc-page .tmuc-dept-view.tmuc-dept-view-active{display:block;}
#tmuc-page .tmuc-dept-header{margin-bottom:18px;}
#tmuc-page .tmuc-dept-header h3{font-family:var(--tmuc-font-display); font-size:clamp(19px,2.4vw,23px); font-weight:800; color:var(--tmuc-black);}
#tmuc-page .tmuc-dept-header p{margin-top:6px; font-size:13.5px; color:var(--tmuc-ink-soft); line-height:1.5;}
#tmuc-page .tmuc-dept-program-tag{
  display:inline-flex; align-items:center; gap:8px; font-size:12px; font-weight:700; color:var(--tmuc-black);
  background:var(--tmuc-paper); padding:6px 13px; border-radius:999px; margin-bottom:14px;
}
#tmuc-page .tmuc-dept-fee-note{
  font-size:13px; line-height:1.65; color:var(--tmuc-ink-soft); background:var(--tmuc-paper);
  border-left:3px solid var(--tmuc-red); border-radius:0 8px 8px 0; padding:14px 16px; margin-bottom:18px;
}
#tmuc-page .tmuc-dept-fee-table{width:100%; border-collapse:collapse; margin-bottom:22px; border:1px solid var(--tmuc-paper-dim); border-radius:10px; overflow:hidden;}
#tmuc-page .tmuc-dept-fee-table tr{border-bottom:1px solid var(--tmuc-paper-dim);}
#tmuc-page .tmuc-dept-fee-table tr:last-child{border-bottom:none;}
#tmuc-page .tmuc-dept-fee-table td{padding:12px 16px; font-size:13.5px;}
#tmuc-page .tmuc-dept-fee-table td:first-child{font-weight:600; color:var(--tmuc-black); width:55%;}
#tmuc-page .tmuc-dept-fee-table td:last-child{color:var(--tmuc-ink-soft); text-align:right;}
#tmuc-page .tmuc-dept-fee-actions{display:flex; gap:12px; flex-wrap:wrap;}
#tmuc-page .tmuc-dept-form-actions{display:flex; gap:12px; margin-top:6px;}
#tmuc-page .tmuc-dept-form-actions .tmuc-btn{flex:1; justify-content:center;}
#tmuc-page .tmuc-dept-confirm{text-align:center; padding:10px 0 4px;}
#tmuc-page .tmuc-dept-confirm .tmuc-check{
  width:60px; height:60px; border-radius:50%; background:rgba(225,27,44,0.08); color:var(--tmuc-red);
  display:flex; align-items:center; justify-content:center; margin:0 auto 18px;
}
#tmuc-page .tmuc-dept-confirm h3{font-family:var(--tmuc-font-display); font-size:22px; font-weight:800; color:var(--tmuc-black); margin-bottom:10px;}
#tmuc-page .tmuc-dept-confirm p{font-size:13.5px; color:var(--tmuc-ink-soft); line-height:1.65; max-width:42ch; margin:0 auto 18px;}
#tmuc-page .tmuc-dept-confirm-summary{background:var(--tmuc-paper); border-radius:10px; padding:16px 18px; text-align:left; margin-bottom:20px; font-size:13px; line-height:1.9;}
#tmuc-page .tmuc-dept-confirm-summary strong{color:var(--tmuc-black);}
#tmuc-page .tmuc-dept-fallback{font-size:12px; color:var(--tmuc-ink-soft); margin-top:4px;}

/* ============================================================
   NOTIFICATION BAR
   ============================================================ */
#tmuc-page .tmuc-notify-bar{background:var(--tmuc-red); color:#fff;}
#tmuc-page .tmuc-notify-inner{display:flex; align-items:center; justify-content:space-between; gap:14px; flex-wrap:wrap; padding:9px 0;}
#tmuc-page .tmuc-notify-items{display:flex; flex-wrap:wrap; gap:18px;}
#tmuc-page .tmuc-notify-item{display:inline-flex; align-items:center; gap:7px; font-size:12.5px; font-weight:700;}
#tmuc-page .tmuc-notify-item strong{font-weight:800;}
#tmuc-page .tmuc-notify-apply{
  flex-shrink:0; background:var(--tmuc-black); color:#fff; font-size:12px; font-weight:700;
  padding:8px 18px; border-radius:6px; transition:background .2s ease, transform .2s ease;
}
#tmuc-page .tmuc-notify-apply:hover{background:#000; transform:translateY(-1px);}
@media (max-width:640px){
  #tmuc-page .tmuc-notify-inner{justify-content:center; text-align:center;}
  #tmuc-page .tmuc-notify-items{justify-content:center; gap:10px 16px;}
}

/* ============================================================
   QUICK APPLY MODAL (single-step, submitted via email)
   ============================================================ */
#tmuc-page .tmuc-qa-overlay{
  position:fixed; inset:0; z-index:2200; display:flex; align-items:center; justify-content:center;
  padding:20px; background:rgba(20,20,20,0.68); backdrop-filter:blur(4px);
  opacity:0; visibility:hidden; transition:opacity .25s ease, visibility .25s ease;
}
#tmuc-page .tmuc-qa-overlay.tmuc-qa-open{opacity:1; visibility:visible;}
#tmuc-page .tmuc-qa-panel{
  position:relative; width:100%; max-width:540px; max-height:90vh; overflow-y:auto;
  background:#fff; border-radius:10px; box-shadow:var(--tmuc-shadow-l);
  padding:clamp(26px,4vw,40px); transform:translateY(16px); transition:transform .25s ease;
}
#tmuc-page .tmuc-qa-overlay.tmuc-qa-open .tmuc-qa-panel{transform:translateY(0);}
#tmuc-page .tmuc-qa-close{
  position:absolute; top:16px; right:16px; width:36px; height:36px; border-radius:50%;
  background:var(--tmuc-paper); color:var(--tmuc-black); display:flex; align-items:center; justify-content:center;
  font-size:20px; line-height:1; transition:background .2s ease; z-index:2;
}
#tmuc-page .tmuc-qa-close:hover{background:var(--tmuc-paper-dim);}
#tmuc-page .tmuc-qa-header{margin-bottom:20px; padding-right:30px;}
#tmuc-page .tmuc-qa-header h3{font-family:var(--tmuc-font-display); font-size:clamp(19px,2.4vw,23px); font-weight:800; color:var(--tmuc-black);}
#tmuc-page .tmuc-qa-header p{margin-top:6px; font-size:13.5px; color:var(--tmuc-ink-soft); line-height:1.5;}
#tmuc-page .tmuc-qa-view{display:none;}
#tmuc-page .tmuc-qa-view.tmuc-qa-view-active{display:block;}
#tmuc-page .tmuc-qa-confirm{text-align:center; padding:10px 0 4px;}
#tmuc-page .tmuc-qa-confirm .tmuc-check{
  width:56px; height:56px; border-radius:50%; background:rgba(225,27,44,0.08); color:var(--tmuc-red);
  display:flex; align-items:center; justify-content:center; margin:0 auto 18px;
}
#tmuc-page .tmuc-qa-confirm h3{font-family:var(--tmuc-font-display); font-size:21px; font-weight:800; color:var(--tmuc-black); margin-bottom:10px;}
#tmuc-page .tmuc-qa-confirm p{font-size:13.5px; color:var(--tmuc-ink-soft); line-height:1.65; max-width:40ch; margin:0 auto 6px;}
#tmuc-page .tmuc-qa-confirm-summary{background:var(--tmuc-paper); border-radius:10px; padding:16px 18px; text-align:left; margin:16px 0; font-size:13px; line-height:1.85;}
#tmuc-page .tmuc-qa-confirm-summary strong{color:var(--tmuc-black);}

/* ---- Step indicator ---- */
#tmuc-page .tmuc-qa-steps{display:flex; align-items:center; gap:6px; margin-bottom:22px; padding-right:30px; flex-wrap:wrap;}
#tmuc-page .tmuc-qa-step-dot{display:flex; align-items:center; gap:6px; font-size:10.5px; font-weight:600; color:var(--tmuc-ink-soft);}
#tmuc-page .tmuc-qa-num{
  width:22px; height:22px; border-radius:50%; background:var(--tmuc-paper-dim); color:var(--tmuc-ink-soft);
  display:flex; align-items:center; justify-content:center; font-size:10.5px; font-weight:700; transition:background .2s ease, color .2s ease;
}
#tmuc-page .tmuc-qa-step-dot.tmuc-qa-step-active .tmuc-qa-num{background:var(--tmuc-red); color:#fff;}
#tmuc-page .tmuc-qa-step-dot.tmuc-qa-step-done .tmuc-qa-num{background:var(--tmuc-black); color:#fff;}
#tmuc-page .tmuc-qa-step-line{width:14px; height:1px; background:var(--tmuc-paper-dim);}

/* ---- Step 1: program list ---- */
#tmuc-page .tmuc-qa-program-list{display:flex; flex-direction:column; gap:9px; max-height:340px; overflow-y:auto; margin-bottom:20px; padding-right:2px;}
#tmuc-page .tmuc-qa-program-opt{
  display:flex; align-items:center; gap:12px; padding:13px 16px; border:1.5px solid var(--tmuc-paper-dim);
  border-radius:8px; cursor:pointer; transition:border-color .2s ease, background .2s ease;
}
#tmuc-page .tmuc-qa-program-opt:hover{border-color:var(--tmuc-red);}
#tmuc-page .tmuc-qa-program-opt.tmuc-qa-selected{border-color:var(--tmuc-red); background:rgba(225,27,44,0.05);}
#tmuc-page .tmuc-qa-program-opt input{width:17px; height:17px; accent-color:var(--tmuc-red); flex-shrink:0;}
#tmuc-page .tmuc-qa-program-opt span{font-size:13.5px; font-weight:600; color:var(--tmuc-black);}

/* ---- Step 2: fee options ---- */
#tmuc-page .tmuc-qa-fee-note{font-size:12.5px; line-height:1.6; color:var(--tmuc-ink-soft); background:var(--tmuc-paper); border-left:3px solid var(--tmuc-red); border-radius:0 8px 8px 0; padding:12px 14px; margin-bottom:18px;}
#tmuc-page .tmuc-qa-fee-options{display:flex; flex-direction:column; gap:10px; margin-bottom:22px;}
#tmuc-page .tmuc-qa-fee-opt{
  display:flex; align-items:center; justify-content:space-between; gap:12px; padding:14px 16px;
  border:1.5px solid var(--tmuc-paper-dim); border-radius:8px; cursor:pointer; transition:border-color .2s ease, background .2s ease;
}
#tmuc-page .tmuc-qa-fee-opt:hover{border-color:var(--tmuc-red);}
#tmuc-page .tmuc-qa-fee-opt.tmuc-qa-selected{border-color:var(--tmuc-red); background:rgba(225,27,44,0.05);}
#tmuc-page .tmuc-qa-fee-opt-left{display:flex; align-items:center; gap:12px;}
#tmuc-page .tmuc-qa-fee-opt input{width:17px; height:17px; accent-color:var(--tmuc-red); flex-shrink:0;}
#tmuc-page .tmuc-qa-fee-opt-title{font-size:13.5px; font-weight:700; color:var(--tmuc-black);}
#tmuc-page .tmuc-qa-fee-opt-amount{font-size:11px; color:var(--tmuc-ink-soft); text-align:right;}

/* ---- Form action row (shared by steps 2 & 3) ---- */
#tmuc-page .tmuc-qa-form-actions{display:flex; gap:12px; margin-top:6px;}
#tmuc-page .tmuc-qa-form-actions .tmuc-btn{flex:1; justify-content:center;}
#tmuc-page .tmuc-qa-view [disabled]{opacity:0.55; cursor:not-allowed;}

/* ============================================================
   WELCOME / ADMISSION ANNOUNCEMENT POPUP (auto-shows once per session)
   ============================================================ */
#tmuc-page .tmuc-welcome-overlay{
  position:fixed; inset:0; z-index:2150; display:flex; align-items:center; justify-content:center;
  padding:20px; background:rgba(20,20,20,0.68); backdrop-filter:blur(4px);
  opacity:0; visibility:hidden; transition:opacity .3s ease, visibility .3s ease;
}
#tmuc-page .tmuc-welcome-overlay.tmuc-welcome-open{opacity:1; visibility:visible;}
#tmuc-page .tmuc-welcome-panel{
  position:relative; width:100%; max-width:440px; background:#fff; border-radius:10px; box-shadow:var(--tmuc-shadow-l);
  overflow:hidden; text-align:center; transform:scale(0.96); transition:transform .3s ease;
}
#tmuc-page .tmuc-welcome-overlay.tmuc-welcome-open .tmuc-welcome-panel{transform:scale(1);}
#tmuc-page .tmuc-welcome-image{width:100%; height:150px; overflow:hidden;}
#tmuc-page .tmuc-welcome-image img{width:100%; height:100%; object-fit:cover; display:block;}
#tmuc-page .tmuc-welcome-body{padding:26px 30px 30px;}
#tmuc-page .tmuc-welcome-close{
  position:absolute; top:14px; right:14px; width:32px; height:32px; border-radius:50%;
  background:var(--tmuc-paper); color:var(--tmuc-black); display:flex; align-items:center; justify-content:center; font-size:18px; z-index:2;
}
#tmuc-page .tmuc-welcome-close:hover{background:var(--tmuc-paper-dim);}
#tmuc-page .tmuc-welcome-icon{
  width:52px; height:52px; border-radius:50%; margin:0 auto 16px; background:rgba(225,27,44,0.08); color:var(--tmuc-red);
  display:flex; align-items:center; justify-content:center;
}
#tmuc-page .tmuc-welcome-panel h3{font-family:var(--tmuc-font-display); font-size:20px; font-weight:800; color:var(--tmuc-black); margin-bottom:8px;}
#tmuc-page .tmuc-welcome-panel > .tmuc-welcome-body > p{font-size:13.5px; color:var(--tmuc-ink-soft); line-height:1.55; margin-bottom:20px;}
#tmuc-page .tmuc-welcome-dates{background:var(--tmuc-paper); border-radius:10px; padding:16px 18px; margin-bottom:22px; text-align:left;}
#tmuc-page .tmuc-welcome-date-row{display:flex; align-items:center; gap:10px; font-size:13.5px; color:var(--tmuc-black); font-weight:600;}
#tmuc-page .tmuc-welcome-date-row + .tmuc-welcome-date-row{margin-top:10px;}
#tmuc-page .tmuc-welcome-date-row svg{color:var(--tmuc-red); flex-shrink:0;}
</style>
<?php wp_head(); ?>
</head>
<body>
<div id="tmuc-page">

<!-- ============================================================
     NOTIFICATION BAR (admission dates + quick Apply Now)
     ============================================================ -->
<div class="tmuc-notify-bar" id="tmuc-notify-bar">
  <div class="tmuc-container tmuc-notify-inner">
    <div class="tmuc-notify-items">
      <span class="tmuc-notify-item"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="5" width="18" height="16" rx="2"/><path d="M8 3v4M16 3v4M3 10h18"/></svg> Last Date to Apply: <strong id="tmuc-notify-lastdate"></strong></span>
      <span class="tmuc-notify-item"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 11l3 3L22 4"/><path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"/></svg> Entry Test: <strong id="tmuc-notify-entrytest"></strong></span>
    </div>
    <button type="button" class="tmuc-notify-apply tmuc-quickapply-trigger">Apply Now</button>
  </div>
</div>

<!-- ============================================================
     HEADER
     ============================================================ -->
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
      <li>
        <a href="#" aria-haspopup="true">Admissions <svg class="tmuc-caret" width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M6 9l6 6 6-6"/></svg></a>
        <div class="tmuc-dropdown">
          <a href="/tmuc-fee-structure">Fee Structure</a>
          <a href="/tmuc-merit-list">Merit List</a>
          <a href="/tmuc-fee-chalan">Fee Chalan</a>
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
    <li>
      <a href="#">Admissions</a>
      <div class="tmuc-mobile-sub">
        <a href="/tmuc-fee-structure">Fee Structure</a>
        <a href="/tmuc-merit-list">Merit List</a>
        <a href="/tmuc-fee-chalan">Fee Chalan</a>
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

<!-- ============================================================
     HERO
     ============================================================ -->
<section class="tmuc-hero">
  <div class="tmuc-hero-media">
    <!-- TODO: replace with official TMUC photography — dummy stock placeholder for now -->
    <img src="https://images.unsplash.com/photo-1519452575417-564c1401ecc0?auto=format&fit=crop&w=1920&q=75" alt="Placeholder campus image — replace with official TMUC photography">
  </div>
  <div class="tmuc-container tmuc-hero-content">
    <p class="tmuc-hero-kicker">International Education in Pakistan</p>
    <h1>Discover Your Path at TMUC</h1>
    <p class="tmuc-hero-sub">UK-affiliated degree programs across business, computing, law and creative arts, delivered by qualified staff at campuses across Pakistan.</p>
    <div class="tmuc-hero-actions">
      <a href="#" class="tmuc-btn tmuc-btn-red tmuc-admission-trigger">Admission Now</a>
      <a href="#tmuc-programs" class="tmuc-btn tmuc-btn-outline-white" data-tmuc-scroll="#tmuc-programs">Explore Programs</a>
    </div>
  </div>
</section>

<!-- ============================================================
     QUICK-LINK FEATURE BLOCKS
     ============================================================ -->
<section class="tmuc-quickblocks">
  <div class="tmuc-quickblocks-grid">
    <a href="#" class="tmuc-qb">
      <img src="https://tmuc.edu.pk/wp-content/uploads/2020/09/alumni-tmuc.jpg" alt="TMUC student life">
      <div class="tmuc-qb-body">
        <h3>Life at TMUC</h3>
        <p>Access to Student Affairs, the student blog, events &amp; news, and pastoral support.</p>
        <span class="tmuc-qb-link">Learn More →</span>
      </div>
    </a>
    <a href="#" class="tmuc-qb">
      <img src="https://tmuc.edu.pk/wp-content/uploads/2020/09/student-book-tmuc.jpg" alt="TMUC academics">
      <div class="tmuc-qb-body">
        <h3>Academics</h3>
        <p>Access to the Learning Management System, online library catalog, and student services &amp; support.</p>
        <span class="tmuc-qb-link">Learn More →</span>
      </div>
    </a>
    <a href="#" class="tmuc-qb">
      <img src="https://tmuc.edu.pk/wp-content/uploads/2020/09/library-tmuc.jpg" alt="TMUC career development">
      <div class="tmuc-qb-body">
        <h3>Career Development Centre</h3>
        <p>Career advice and support for current students and alumni, including internships and work placements.</p>
        <span class="tmuc-qb-link">Learn More →</span>
      </div>
    </a>
  </div>
</section>

<!-- ============================================================
     ADMISSIONS CTA
     ============================================================ -->
<section class="tmuc-admissions">
  <div class="tmuc-container">
    <div class="tmuc-admissions-inner tmuc-reveal">
      <h2>Apply for Admission</h2>
      <span class="tmuc-admissions-tag">Applications are now open for 2026</span>
      <p>TMUC frames its role as more than teaching — helping students find a field they're genuinely passionate about and preparing them to lead in it, on the way to a career they actually want.</p>
      <a href="#" class="tmuc-btn tmuc-btn-red tmuc-admission-trigger">Admission Now</a>
    </div>
  </div>
</section>

<!-- ============================================================
     OUR CAMPUSES
     ============================================================ -->
<section class="tmuc-campuses" id="tmuc-campuses">
  <div class="tmuc-container">
    <div class="tmuc-section-head tmuc-center tmuc-reveal">
      <p class="tmuc-eyebrow">Nationwide Presence</p>
      <h2 class="tmuc-section-title">Our Campuses</h2>
    </div>

    <!-- Campus marks below are hotlinked directly from the official TMUC
         asset library (tmuc.edu.pk/wp-content/uploads/...). -->
    <div class="tmuc-campuses-grid tmuc-reveal">
      <a href="#" class="tmuc-campus-card">
        <div class="tmuc-campus-media"><img src="https://tmuc.edu.pk/wp-content/uploads/2023/03/isb.png" alt="TMUC Islamabad Campus" loading="lazy"></div>
        <h3>Islamabad Campus</h3>
      </a>
      <a href="#" class="tmuc-campus-card">
        <div class="tmuc-campus-media"><img src="https://tmuc.edu.pk/wp-content/uploads/2023/03/rwp.png" alt="TMUC Rawalpindi Campus" loading="lazy"></div>
        <h3>Rawalpindi Campus</h3>
      </a>
      <a href="#" class="tmuc-campus-card">
        <div class="tmuc-campus-media"><img src="https://tmuc.edu.pk/wp-content/uploads/2023/03/gjr.png" alt="TMUC Gujranwala Campus" loading="lazy"></div>
        <h3>Gujranwala Campus</h3>
      </a>
      <a href="#" class="tmuc-campus-card">
        <div class="tmuc-campus-media"><img src="https://tmuc.edu.pk/wp-content/uploads/2023/03/fsd.png" alt="TMUC Faisalabad Campus" loading="lazy"></div>
        <h3>Faisalabad Campus</h3>
      </a>
      <a href="#" class="tmuc-campus-card">
        <div class="tmuc-campus-media"><img src="https://tmuc.edu.pk/wp-content/uploads/2023/03/lhr.png" alt="TMUC Lahore Campus" loading="lazy"></div>
        <h3>Lahore Campus</h3>
      </a>
      <a href="#" class="tmuc-campus-card">
        <div class="tmuc-campus-media"><img src="https://tmuc.edu.pk/wp-content/uploads/2023/03/khi.png" alt="TMUC Karachi Campus" loading="lazy"></div>
        <h3>Karachi Campus</h3>
      </a>
      <a href="#" class="tmuc-campus-card">
        <div class="tmuc-campus-media"><img src="https://tmuc.edu.pk/wp-content/uploads/2024/03/Abbottabad-02.png" alt="TMUC Peshawar Campus" loading="lazy"></div>
        <h3>Peshawar Campus</h3>
      </a>
      <a href="#" class="tmuc-campus-card">
        <div class="tmuc-campus-media"><img src="https://tmuc.edu.pk/wp-content/uploads/2024/03/Abbottabad-01-1.png" alt="TMUC Abbottabad Campus" loading="lazy"></div>
        <h3>Abbottabad Campus</h3>
      </a>
    </div>
  </div>
</section>

<!-- ============================================================
     PROGRAMS
     ============================================================ -->
<section class="tmuc-programs" id="tmuc-programs">
  <div class="tmuc-container">
    <div class="tmuc-section-head tmuc-reveal">
      <p class="tmuc-eyebrow">Academics</p>
      <h2 class="tmuc-section-title">Explore Our Programs</h2>
      <p class="tmuc-section-sub">A sample of TMUC's UK-affiliated degree programs — see the full prospectus for the complete list across every school and faculty.</p>
    </div>

    <!-- TODO: replace program images with official TMUC photography — no
         per-program imagery was exposed by the source, only prospectus PDFs,
         so these use temporary placeholder photography. -->
    <div class="tmuc-programs-grid tmuc-reveal">
      <div class="tmuc-program-card">
        <div class="tmuc-program-media">
          <span class="tmuc-program-school">Business</span>
          <img src="https://tmuc.edu.pk/wp-content/uploads/2020/09/alumni-tmuc.jpg" alt="Business Administration program" loading="lazy">
        </div>
        <div class="tmuc-program-body">
          <h3>BA (Hons) Business Administration</h3>
          <p>University of Hertfordshire — School of Business Management</p>
          <a href="#" class="tmuc-program-link tmuc-dept-trigger">Learn More →</a>
        </div>
      </div>
      <div class="tmuc-program-card">
        <div class="tmuc-program-media">
          <span class="tmuc-program-school">Computing</span>
          <img src="https://tmuc.edu.pk/wp-content/uploads/2020/09/student-book-tmuc.jpg" alt="Computer Science program" loading="lazy">
        </div>
        <div class="tmuc-program-body">
          <h3>BSc (Hons) Computer Science</h3>
          <p>University of Hertfordshire — School of Computing &amp; Emerging Tech</p>
          <a href="#" class="tmuc-program-link tmuc-dept-trigger">Learn More →</a>
        </div>
      </div>
      <div class="tmuc-program-card">
        <div class="tmuc-program-media">
          <span class="tmuc-program-school">Law</span>
          <img src="https://tmuc.edu.pk/wp-content/uploads/2020/09/library-tmuc.jpg" alt="Law program" loading="lazy">
        </div>
        <div class="tmuc-program-body">
          <h3>LLB (Hons)</h3>
          <p>University of Hertfordshire — Faculty of Laws</p>
          <a href="#" class="tmuc-program-link tmuc-dept-trigger">Learn More →</a>
        </div>
      </div>
      <div class="tmuc-program-card">
        <div class="tmuc-program-media">
          <span class="tmuc-program-school">Creative Arts</span>
          <img src="https://tmuc.edu.pk/wp-content/uploads/2019/10/Campus-tmuc-nationwide.jpg" alt="Fashion and Textiles program" loading="lazy">
        </div>
        <div class="tmuc-program-body">
          <h3>BA (Hons) Fashion Textile</h3>
          <p>University for the Creative Arts — School of Creative Arts</p>
          <a href="#" class="tmuc-program-link tmuc-dept-trigger">Learn More →</a>
        </div>
      </div>
      <div class="tmuc-program-card">
        <div class="tmuc-program-media">
          <span class="tmuc-program-school">Business</span>
          <img src="https://tmuc.edu.pk/wp-content/uploads/2020/09/alumni-tmuc.jpg" alt="MBA program" loading="lazy">
        </div>
        <div class="tmuc-program-body">
          <h3>Master of Business Administration (MBA)</h3>
          <p>University of Hertfordshire — School of Business Management</p>
          <a href="#" class="tmuc-program-link tmuc-dept-trigger">Learn More →</a>
        </div>
      </div>
      <div class="tmuc-program-card">
        <div class="tmuc-program-media">
          <span class="tmuc-program-school">Health Sciences</span>
          <img src="https://tmuc.edu.pk/wp-content/uploads/2020/09/student-book-tmuc.jpg" alt="Psychology program" loading="lazy">
        </div>
        <div class="tmuc-program-body">
          <h3>BSc Psychology</h3>
          <p>Faculty of Health Sciences</p>
          <a href="#" class="tmuc-program-link tmuc-dept-trigger">Learn More →</a>
        </div>
      </div>
    </div>

    <div class="tmuc-programs-more">
      <a href="#" class="tmuc-btn tmuc-btn-outline-black">View All Programs</a>
    </div>
  </div>
</section>

<!-- ============================================================
     COURSE SEARCH
     ============================================================ -->
<section class="tmuc-search">
  <div class="tmuc-container">
    <div class="tmuc-section-head tmuc-reveal">
      <p class="tmuc-eyebrow">Find Your Course</p>
      <h2 class="tmuc-section-title">Search For Courses</h2>
    </div>

    <form class="tmuc-search-bar tmuc-reveal" id="tmuc-course-search" role="search" aria-label="Search for courses">
      <select aria-label="Level">
        <option value="">Level</option>
        <option>Undergraduate</option>
        <option>Postgraduate</option>
      </select>
      <select aria-label="Faculty">
        <option value="">Faculty</option>
        <option>Faculty of Art &amp; Design</option>
        <option>Faculty of Engineering &amp; Computing</option>
        <option>Faculty of Laws</option>
        <option>Faculty of Professional Studies</option>
        <option>Faculty of Social Sciences</option>
        <option>International Foundation Year</option>
      </select>
      <input type="text" placeholder="Search by keyword" aria-label="Search by keyword">
      <button type="submit" class="tmuc-btn tmuc-btn-red">Search</button>
    </form>
  </div>
</section>

<!-- ============================================================
     NEWS & EVENTS (link-out, no fabricated articles)
     ============================================================ -->
<section class="tmuc-news-cta">
  <div class="tmuc-container">
    <h2>Latest News &amp; Events</h2>
    <p>Homepage news items weren't exposed by the reference we pulled from — visit the News &amp; Events page directly for the current stories and campus updates.</p>
    <a href="#" class="tmuc-btn tmuc-btn-red">Visit News &amp; Events</a>
  </div>
</section>

<!-- ============================================================
     CONTACT
     ============================================================ -->
<section class="tmuc-contact" id="tmuc-contact">
  <div class="tmuc-container">
    <div class="tmuc-section-head tmuc-reveal">
      <p class="tmuc-eyebrow">Get In Touch</p>
      <h2 class="tmuc-section-title">Speak to an Admission Counselor</h2>
      <p class="tmuc-section-sub">Monday – Saturday, 08:00 – 16:30.</p>
    </div>

    <div class="tmuc-contact-grid tmuc-reveal">
      <div class="tmuc-contact-info">
        <h3>TMUC Main Campus</h3>
        <div class="tmuc-contact-item">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 21s-7-6.2-7-11a7 7 0 0114 0c0 4.8-7 11-7 11z"/><circle cx="12" cy="10" r="2.5"/></svg>
          68 South Street, behind Nescom, H-11/4, Islamabad
        </div>
        <div class="tmuc-contact-item">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.362 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.338 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
          <a href="tel:051111118682">051-111118682</a> | <a href="tel:0514866181">051-4866181-87</a>
        </div>
        <div class="tmuc-contact-item">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16v16H4z" opacity="0"/><path d="M22 6l-10 7L2 6"/><path d="M2 6h20v12H2z"/></svg>
          <a href="mailto:info@tmuc.edu.pk">info@tmuc.edu.pk</a>
        </div>
      </div>
      <div class="tmuc-map-embed">
        <iframe
          src="https://www.google.com/maps?q=TMUC+68+South+Street+behind+Nescom+H-11%2F4+Islamabad&output=embed"
          title="Map showing TMUC Main Campus, H-11/4 Islamabad"
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     FOOTER
     ============================================================ -->
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

<!-- ============================================================
     ADMISSION INQUIRY MODAL
     ============================================================ -->
<div class="tmuc-modal-overlay" id="tmuc-admission-modal" role="dialog" aria-modal="true" aria-labelledby="tmuc-modal-title" aria-hidden="true">
  <div class="tmuc-modal-panel">
    <button type="button" class="tmuc-modal-close" id="tmuc-modal-close" aria-label="Close admission inquiry form">&times;</button>
    <div class="tmuc-modal-header">
      <p class="tmuc-eyebrow">Admissions</p>
      <h3 id="tmuc-modal-title">TMUC Admission Inquiry</h3>
      <p class="tmuc-modal-sub">Share your details and we'll open WhatsApp with your inquiry ready to send to TMUC admissions.</p>
    </div>

    <form id="tmuc-admission-form" novalidate>
      <div class="tmuc-modal-grid">
        <div class="tmuc-mfield tmuc-full" data-tmuc-field="name">
          <label for="tmuc-adm-name">Full Name</label>
          <input type="text" id="tmuc-adm-name" name="name" placeholder="e.g. Ayesha Khan" autocomplete="name">
          <span class="tmuc-mfield-error">Please enter your full name.</span>
        </div>
        <div class="tmuc-mfield" data-tmuc-field="phone">
          <label for="tmuc-adm-phone">Phone / WhatsApp Number</label>
          <input type="tel" id="tmuc-adm-phone" name="phone" placeholder="03XX XXXXXXX" autocomplete="tel">
          <span class="tmuc-mfield-error">Please enter a valid phone number.</span>
        </div>
        <div class="tmuc-mfield" data-tmuc-field="email">
          <label for="tmuc-adm-email">Email <span style="font-weight:500; color:var(--tmuc-ink-soft);">(optional)</span></label>
          <input type="email" id="tmuc-adm-email" name="email" placeholder="you@example.com" autocomplete="email">
          <span class="tmuc-mfield-error">Please enter a valid email address.</span>
        </div>
        <div class="tmuc-mfield" data-tmuc-field="city">
          <label for="tmuc-adm-city">City</label>
          <input type="text" id="tmuc-adm-city" name="city" placeholder="e.g. Islamabad" autocomplete="address-level2">
        </div>
        <div class="tmuc-mfield" data-tmuc-field="campus">
          <label for="tmuc-adm-campus">Preferred Campus <span style="font-weight:500; color:var(--tmuc-ink-soft);">(optional)</span></label>
          <input type="text" id="tmuc-adm-campus" name="campus" placeholder="e.g. Islamabad, Lahore, Karachi...">
        </div>
        <div class="tmuc-mfield tmuc-full" data-tmuc-field="program">
          <label for="tmuc-adm-program">Program of Interest</label>
          <input type="text" id="tmuc-adm-program" name="program" placeholder="e.g. BA Hons Business Administration">
          <span class="tmuc-mfield-error">Please tell us which program you're interested in.</span>
        </div>
        <div class="tmuc-mfield tmuc-full">
          <label for="tmuc-adm-message">Message <span style="font-weight:500; color:var(--tmuc-ink-soft);">(optional)</span></label>
          <textarea id="tmuc-adm-message" name="message" placeholder="Anything else you'd like us to know?"></textarea>
        </div>
      </div>
      <button type="submit" class="tmuc-btn tmuc-btn-red tmuc-btn-block" id="tmuc-adm-submit">Send via WhatsApp</button>
      <p class="tmuc-modal-note">This opens WhatsApp with your details pre-filled. No data is stored by this page.</p>
    </form>
  </div>
</div>

<!-- ============================================================
     PROGRAM/DEPARTMENT MULTI-STEP MODAL
     (Fee Structure → Application Form → Confirmation)
     ============================================================ -->
<div class="tmuc-dept-overlay" id="tmuc-dept-modal" role="dialog" aria-modal="true" aria-labelledby="tmuc-dept-title" aria-hidden="true">
  <div class="tmuc-dept-panel">
    <button type="button" class="tmuc-dept-close" id="tmuc-dept-close" aria-label="Close">&times;</button>

    <div class="tmuc-dept-steps" aria-hidden="true">
      <span class="tmuc-dept-step-dot tmuc-dept-step-active" data-tmuc-dept-dot="1"><span class="tmuc-num">1</span> Fee Structure</span>
      <span class="tmuc-dept-step-line"></span>
      <span class="tmuc-dept-step-dot" data-tmuc-dept-dot="2"><span class="tmuc-num">2</span> Application</span>
      <span class="tmuc-dept-step-line"></span>
      <span class="tmuc-dept-step-dot" data-tmuc-dept-dot="3"><span class="tmuc-num">3</span> Confirmation</span>
    </div>

    <div class="tmuc-dept-view tmuc-dept-view-active" data-tmuc-dept-view="1">
      <span class="tmuc-dept-program-tag" id="tmuc-dept-tag-1"></span>
      <div class="tmuc-dept-header">
        <h3 id="tmuc-dept-title">Fee Structure</h3>
        <p>A general overview before you apply. TMUC updates its fee structure each academic year.</p>
      </div>
      <p class="tmuc-dept-fee-note">Exact tuition, admission and other fees are set and published by TMUC and can change between intakes. Please confirm current figures on TMUC's fee structure page or directly with the admissions office before applying.</p>
      <table class="tmuc-dept-fee-table">
        <tr><td>Tuition Fee</td><td>Confirm with TMUC</td></tr>
        <tr><td>Admission / Processing Fee</td><td>Confirm with TMUC</td></tr>
        <tr><td>Security Deposit</td><td>Confirm with TMUC</td></tr>
        <tr><td>Scholarships &amp; Financial Aid</td><td>Ask admissions office</td></tr>
      </table>
      <div class="tmuc-dept-fee-actions">
        <a href="#" class="tmuc-btn tmuc-btn-outline-black">View Fee Structure</a>
        <button type="button" class="tmuc-btn tmuc-btn-red" id="tmuc-dept-to-step2">Continue to Application</button>
      </div>
    </div>

    <div class="tmuc-dept-view" data-tmuc-dept-view="2">
      <span class="tmuc-dept-program-tag" id="tmuc-dept-tag-2"></span>
      <div class="tmuc-dept-header">
        <h3>Application Details</h3>
        <p>Share your details and this opens your email app with your application ready to send.</p>
      </div>
      <form id="tmuc-dept-form" novalidate>
        <div class="tmuc-modal-grid">
          <div class="tmuc-mfield tmuc-full" data-tmuc-dfield="name">
            <label for="tmuc-dept-name">Full Name</label>
            <input type="text" id="tmuc-dept-name" name="name" placeholder="e.g. Ayesha Khan" autocomplete="name">
            <span class="tmuc-mfield-error">Please enter your full name.</span>
          </div>
          <div class="tmuc-mfield" data-tmuc-dfield="phone">
            <label for="tmuc-dept-phone">Phone</label>
            <input type="tel" id="tmuc-dept-phone" name="phone" placeholder="03XX XXXXXXX" autocomplete="tel">
            <span class="tmuc-mfield-error">Please enter a valid phone number.</span>
          </div>
          <div class="tmuc-mfield" data-tmuc-dfield="email">
            <label for="tmuc-dept-email">Email</label>
            <input type="email" id="tmuc-dept-email" name="email" placeholder="you@example.com" autocomplete="email">
            <span class="tmuc-mfield-error">Please enter a valid email address.</span>
          </div>
          <div class="tmuc-mfield tmuc-full" data-tmuc-dfield="city">
            <label for="tmuc-dept-city">City</label>
            <input type="text" id="tmuc-dept-city" name="city" placeholder="e.g. Islamabad" autocomplete="address-level2">
          </div>
          <div class="tmuc-mfield tmuc-full">
            <label for="tmuc-dept-message">Message <span style="font-weight:500; color:var(--tmuc-ink-soft);">(optional)</span></label>
            <textarea id="tmuc-dept-message" name="message" placeholder="Anything else you'd like us to know?"></textarea>
          </div>
        </div>
        <div class="tmuc-dept-form-actions">
          <button type="button" class="tmuc-btn tmuc-btn-outline-black" id="tmuc-dept-back-step1">Back</button>
          <button type="submit" class="tmuc-btn tmuc-btn-red" id="tmuc-dept-submit">Submit Application</button>
        </div>
      </form>
    </div>

    <div class="tmuc-dept-view" data-tmuc-dept-view="3">
      <div class="tmuc-dept-confirm">
        <div class="tmuc-check"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M5 13l4 4L19 7"/></svg></div>
        <h3>Application Ready to Send</h3>
        <p>Your email app should now open with your application pre-filled. If it didn't open automatically, use the email address below to send it yourself.</p>
        <div class="tmuc-dept-confirm-summary" id="tmuc-dept-summary"></div>
        <p class="tmuc-dept-fallback" id="tmuc-dept-fallback-email"></p>
        <button type="button" class="tmuc-btn tmuc-btn-outline-black" id="tmuc-dept-done">Close</button>
      </div>
    </div>

  </div>
</div>

<!-- ============================================================
     QUICK APPLY MODAL (4-step: Program → Fee Structure → Application → Confirmation)
     ============================================================ -->
<div class="tmuc-qa-overlay" id="tmuc-qa-modal" role="dialog" aria-modal="true" aria-labelledby="tmuc-qa-title" aria-hidden="true">
  <div class="tmuc-qa-panel">
    <button type="button" class="tmuc-qa-close" id="tmuc-qa-close" aria-label="Close">&times;</button>

    <div class="tmuc-qa-steps" aria-hidden="true">
      <span class="tmuc-qa-step-dot tmuc-qa-step-active" data-tmuc-qa-dot="program"><span class="tmuc-qa-num">1</span> Program</span>
      <span class="tmuc-qa-step-line"></span>
      <span class="tmuc-qa-step-dot" data-tmuc-qa-dot="fee"><span class="tmuc-qa-num">2</span> Fee</span>
      <span class="tmuc-qa-step-line"></span>
      <span class="tmuc-qa-step-dot" data-tmuc-qa-dot="form"><span class="tmuc-qa-num">3</span> Application</span>
      <span class="tmuc-qa-step-line"></span>
      <span class="tmuc-qa-step-dot" data-tmuc-qa-dot="confirm"><span class="tmuc-qa-num">4</span> Confirmation</span>
    </div>

    <!-- STEP 1: SELECT PROGRAM -->
    <div class="tmuc-qa-view tmuc-qa-view-active" data-tmuc-qa-view="program">
      <div class="tmuc-qa-header">
        <h3 id="tmuc-qa-title">Select a Program</h3>
        <p>Choose the TMUC program you'd like to apply to.</p>
      </div>
      <div class="tmuc-qa-program-list" id="tmuc-qa-program-list" role="radiogroup" aria-label="Select a program"></div>
      <button type="button" class="tmuc-btn tmuc-btn-red tmuc-btn-block" id="tmuc-qa-to-fee" disabled>Continue to Fee Structure</button>
    </div>

    <!-- STEP 2: FEE STRUCTURE -->
    <div class="tmuc-qa-view" data-tmuc-qa-view="fee">
      <div class="tmuc-qa-header">
        <h3>Fee Structure</h3>
        <p id="tmuc-qa-fee-program-label"></p>
      </div>
      <p class="tmuc-qa-fee-note">Exact fees are set and published by TMUC and can change between intakes. Select your seat category below — confirm the exact amount with TMUC admissions before applying.</p>
      <div class="tmuc-qa-fee-options" id="tmuc-qa-fee-options" role="radiogroup" aria-label="Select your fee category"></div>
      <div class="tmuc-qa-form-actions">
        <button type="button" class="tmuc-btn tmuc-btn-outline-black" id="tmuc-qa-back-program">Back</button>
        <button type="button" class="tmuc-btn tmuc-btn-red" id="tmuc-qa-to-form" disabled>Continue to Application</button>
      </div>
    </div>

    <!-- STEP 3: APPLICATION FORM -->
    <div class="tmuc-qa-view" data-tmuc-qa-view="form">
      <div class="tmuc-qa-header">
        <h3>Application Details</h3>
        <p>Fill in your details below. Your application is sent directly by email to our admissions team.</p>
      </div>
      <form id="tmuc-qa-form" novalidate>
        <div class="tmuc-modal-grid">
          <div class="tmuc-mfield" data-tmuc-qafield="name">
            <label for="tmuc-qa-name">Full Name</label>
            <input type="text" id="tmuc-qa-name" name="name" placeholder="e.g. Ayesha Khan" autocomplete="name">
            <span class="tmuc-mfield-error">Please enter your full name.</span>
          </div>
          <div class="tmuc-mfield" data-tmuc-qafield="father">
            <label for="tmuc-qa-father">Father's Name</label>
            <input type="text" id="tmuc-qa-father" name="father" placeholder="e.g. Muhammad Khan" autocomplete="off">
            <span class="tmuc-mfield-error">Please enter your father's name.</span>
          </div>
          <div class="tmuc-mfield" data-tmuc-qafield="cnic">
            <label for="tmuc-qa-cnic">CNIC / B-Form Number</label>
            <input type="text" id="tmuc-qa-cnic" name="cnic" placeholder="XXXXX-XXXXXXX-X" autocomplete="off">
            <span class="tmuc-mfield-error">Please enter your CNIC or B-Form number.</span>
          </div>
          <div class="tmuc-mfield" data-tmuc-qafield="phone">
            <label for="tmuc-qa-phone">Phone</label>
            <input type="tel" id="tmuc-qa-phone" name="phone" placeholder="03XX XXXXXXX" autocomplete="tel">
            <span class="tmuc-mfield-error">Please enter a valid phone number.</span>
          </div>
          <div class="tmuc-mfield" data-tmuc-qafield="email">
            <label for="tmuc-qa-email">Email</label>
            <input type="email" id="tmuc-qa-email" name="email" placeholder="you@example.com" autocomplete="email">
            <span class="tmuc-mfield-error">Please enter a valid email address.</span>
          </div>
          <div class="tmuc-mfield" data-tmuc-qafield="city">
            <label for="tmuc-qa-city">City</label>
            <input type="text" id="tmuc-qa-city" name="city" placeholder="e.g. Islamabad" autocomplete="address-level2">
            <span class="tmuc-mfield-error">Please enter your city.</span>
          </div>
          <div class="tmuc-mfield" data-tmuc-qafield="matricRoll">
            <label for="tmuc-qa-matric-roll">Matriculation Roll Number</label>
            <input type="text" id="tmuc-qa-matric-roll" name="matricRoll" placeholder="e.g. 123456" autocomplete="off">
            <span class="tmuc-mfield-error">Please enter your matriculation roll number.</span>
          </div>
          <div class="tmuc-mfield" data-tmuc-qafield="matricPct">
            <label for="tmuc-qa-matric-pct">Matriculation Percentage</label>
            <input type="text" id="tmuc-qa-matric-pct" name="matricPct" placeholder="e.g. 85%" autocomplete="off">
            <span class="tmuc-mfield-error">Please enter your matriculation percentage.</span>
          </div>
          <div class="tmuc-mfield" data-tmuc-qafield="interRoll">
            <label for="tmuc-qa-inter-roll">Intermediate Roll Number</label>
            <input type="text" id="tmuc-qa-inter-roll" name="interRoll" placeholder="e.g. 654321" autocomplete="off">
            <span class="tmuc-mfield-error">Please enter your intermediate roll number.</span>
          </div>
          <div class="tmuc-mfield" data-tmuc-qafield="interPct">
            <label for="tmuc-qa-inter-pct">Intermediate Percentage</label>
            <input type="text" id="tmuc-qa-inter-pct" name="interPct" placeholder="e.g. 78%" autocomplete="off">
            <span class="tmuc-mfield-error">Please enter your intermediate percentage.</span>
          </div>
          <div class="tmuc-mfield tmuc-full">
            <label for="tmuc-qa-message">Message <span style="font-weight:500; color:var(--tmuc-ink-soft);">(optional)</span></label>
            <textarea id="tmuc-qa-message" name="message" placeholder="Anything else you'd like us to know?"></textarea>
          </div>
        </div>
        <div class="tmuc-qa-form-actions">
          <button type="button" class="tmuc-btn tmuc-btn-outline-black" id="tmuc-qa-back-fee">Back</button>
          <button type="submit" class="tmuc-btn tmuc-btn-red" id="tmuc-qa-submit">Submit Application</button>
        </div>
      </form>
    </div>

    <!-- STEP 4: CONFIRMATION -->
    <div class="tmuc-qa-view" data-tmuc-qa-view="confirm">
      <div class="tmuc-qa-confirm">
        <div class="tmuc-check"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M5 13l4 4L19 7"/></svg></div>
        <h3>Application Sent</h3>
        <p>Your email app should now open with your application pre-filled and addressed to info@eduapply.online. If it didn't open automatically, please send your details there directly.</p>
        <div class="tmuc-qa-confirm-summary" id="tmuc-qa-confirm-summary"></div>
        <button type="button" class="tmuc-btn tmuc-btn-outline-black" id="tmuc-qa-done" style="margin-top:16px;">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- ============================================================
     WELCOME / ADMISSION ANNOUNCEMENT POPUP (auto-shows once per session)
     ============================================================ -->
<?php $ccx_welcome = ccx_welcome_popup( 'tmuc' ); ?>
<?php if ( $ccx_welcome['enabled'] && $ccx_welcome['image'] ) : ?>
<div class="tmuc-welcome-overlay" id="tmuc-welcome-modal" role="dialog" aria-modal="true" aria-label="TMUC Admissions" aria-hidden="true">
  <div class="tmuc-welcome-panel">
    <button type="button" class="tmuc-welcome-close" id="tmuc-welcome-close" aria-label="Close">&times;</button>
    <button type="button" class="tmuc-welcome-image tmuc-quickapply-trigger" id="tmuc-welcome-apply" aria-label="Apply Now at TMUC">
      <img src="<?php echo esc_url( $ccx_welcome['image'] ); ?>" alt="<?php echo esc_attr( $ccx_welcome['alt'] ); ?>">
    </button>
  </div>
</div>
<?php endif; ?>

</div><!-- /#tmuc-page -->

<script>
var tmucHomepage = (function(){
  "use strict";

  function tmucInit(){
    tmucSetupMobileNav();
    tmucSetupSmoothScroll();
    tmucSetupCourseSearch();
    tmucSetupScrollReveal();
    tmucSetupFooterYear();
    tmucSetupAdmissionModal();
    tmucSetupDeptModal();
    tmucSetupNotifyBar();
    tmucSetupQuickApply();
    tmucSetupWelcomePopup();
  }

  /* ============================================================
     ADMISSION DATES — configurable placeholder until TMUC supplies
     verified dates.
     ============================================================ */
  // TODO: replace with TMUC's verified admission dates.
  var tmucAdmissionInfo = {
    lastDateToApply: "Contact Admissions Office for Current Dates",
    entryTestDate: "Contact Admissions Office for Current Dates"
  };
  var tmucQuickApplyEmail = "info@eduapply.online";
  var tmucQuickApplyBound = false;
  var tmucQaSelectedProgram = null;
  var tmucQaSelectedFee = null;

  // Real TMUC programs, matching the "Explore Programs" section on this page.
  var tmucPrograms = [
    "BA (Hons) Business Administration",
    "BSc Computer Science",
    "LLB Hons",
    "BA (Hons) Fashion Textile",
    "MBA",
    "BSc Psychology"
  ];
  // Generic, non-fabricated fee categories used across Pakistani university
  // admissions. No specific amounts are shown — only TMUC admissions can
  // confirm exact figures.
  var tmucFeeCategories = [
    { key:"regular", title:"Regular / Merit Seat", amount:"Confirm with TMUC" },
    { key:"selffinance", title:"Self-Finance Seat", amount:"Confirm with TMUC" }
  ];

  function tmucSetupNotifyBar(){
    var lastDateEl = document.getElementById("tmuc-notify-lastdate");
    var entryTestEl = document.getElementById("tmuc-notify-entrytest");
    if(lastDateEl) lastDateEl.textContent = tmucAdmissionInfo.lastDateToApply;
    if(entryTestEl) entryTestEl.textContent = tmucAdmissionInfo.entryTestDate;
  }

  /* ---------- QUICK APPLY MODAL (4-step: Program → Fee → Application → Confirmation) ---------- */
  function tmucQuickApplyGoTo(view){
    document.querySelectorAll("#tmuc-page .tmuc-qa-view").forEach(function(v){
      v.classList.toggle("tmuc-qa-view-active", v.getAttribute("data-tmuc-qa-view") === view);
    });
    document.querySelectorAll("#tmuc-page .tmuc-qa-step-dot").forEach(function(dot){
      var order = ["program","fee","form","confirm"];
      var dotStep = dot.getAttribute("data-tmuc-qa-dot");
      dot.classList.toggle("tmuc-qa-step-active", dotStep === view);
      dot.classList.toggle("tmuc-qa-step-done", order.indexOf(dotStep) < order.indexOf(view));
    });
  }

  function tmucRenderProgramList(){
    var list = document.getElementById("tmuc-qa-program-list");
    if(!list) return;
    list.innerHTML = tmucPrograms.map(function(p, i){
      return '<label class="tmuc-qa-program-opt" data-tmuc-qa-program="' + i + '">' +
        '<input type="radio" name="tmucQaProgram" value="' + i + '">' +
        '<span>' + p + '</span></label>';
    }).join("");

    list.querySelectorAll(".tmuc-qa-program-opt").forEach(function(opt){
      opt.addEventListener("click", function(){
        list.querySelectorAll(".tmuc-qa-program-opt").forEach(function(o){ o.classList.remove("tmuc-qa-selected"); });
        opt.classList.add("tmuc-qa-selected");
        opt.querySelector("input").checked = true;
        tmucQaSelectedProgram = tmucPrograms[parseInt(opt.getAttribute("data-tmuc-qa-program"), 10)];
        var toFeeBtn = document.getElementById("tmuc-qa-to-fee");
        if(toFeeBtn) toFeeBtn.disabled = false;
      });
    });
  }

  function tmucRenderFeeOptions(){
    var wrap = document.getElementById("tmuc-qa-fee-options");
    var label = document.getElementById("tmuc-qa-fee-program-label");
    if(label) label.textContent = tmucQaSelectedProgram || "";
    if(!wrap) return;
    wrap.innerHTML = tmucFeeCategories.map(function(f, i){
      return '<label class="tmuc-qa-fee-opt" data-tmuc-qa-fee="' + i + '">' +
        '<span class="tmuc-qa-fee-opt-left"><input type="radio" name="tmucQaFee" value="' + i + '"><span class="tmuc-qa-fee-opt-title">' + f.title + '</span></span>' +
        '<span class="tmuc-qa-fee-opt-amount">' + f.amount + '</span></label>';
    }).join("");

    wrap.querySelectorAll(".tmuc-qa-fee-opt").forEach(function(opt){
      opt.addEventListener("click", function(){
        wrap.querySelectorAll(".tmuc-qa-fee-opt").forEach(function(o){ o.classList.remove("tmuc-qa-selected"); });
        opt.classList.add("tmuc-qa-selected");
        opt.querySelector("input").checked = true;
        tmucQaSelectedFee = tmucFeeCategories[parseInt(opt.getAttribute("data-tmuc-qa-fee"), 10)].title;
        var toFormBtn = document.getElementById("tmuc-qa-to-form");
        if(toFormBtn) toFormBtn.disabled = false;
      });
    });
  }

  function tmucOpenQuickApply(){
    var overlay = document.getElementById("tmuc-qa-modal");
    if(!overlay) return;
    var form = document.getElementById("tmuc-qa-form");
    if(form) form.reset();
    document.querySelectorAll("#tmuc-qa-form .tmuc-mfield").forEach(function(f){ f.classList.remove("tmuc-merror"); });

    tmucQaSelectedProgram = null;
    tmucQaSelectedFee = null;
    var toFeeBtn = document.getElementById("tmuc-qa-to-fee");
    var toFormBtn = document.getElementById("tmuc-qa-to-form");
    if(toFeeBtn) toFeeBtn.disabled = true;
    if(toFormBtn) toFormBtn.disabled = true;

    tmucRenderProgramList();
    tmucQuickApplyGoTo("program");
    overlay.classList.add("tmuc-qa-open");
    overlay.setAttribute("aria-hidden", "false");
    document.body.style.overflow = "hidden";
  }
  function tmucCloseQuickApply(){
    var overlay = document.getElementById("tmuc-qa-modal");
    if(!overlay) return;
    overlay.classList.remove("tmuc-qa-open");
    overlay.setAttribute("aria-hidden", "true");
    document.body.style.overflow = "";
  }

  function tmucSetupQuickApply(){
    if(tmucQuickApplyBound) return;
    tmucQuickApplyBound = true;

    var overlay = document.getElementById("tmuc-qa-modal");
    var closeBtn = document.getElementById("tmuc-qa-close");
    var doneBtn = document.getElementById("tmuc-qa-done");
    var form = document.getElementById("tmuc-qa-form");
    var toFeeBtn = document.getElementById("tmuc-qa-to-fee");
    var toFormBtn = document.getElementById("tmuc-qa-to-form");
    var backProgramBtn = document.getElementById("tmuc-qa-back-program");
    var backFeeBtn = document.getElementById("tmuc-qa-back-fee");
    if(!overlay || !closeBtn || !form) return;

    document.querySelectorAll("#tmuc-page .tmuc-quickapply-trigger").forEach(function(trigger){
      trigger.addEventListener("click", function(e){
        e.preventDefault();
        window.location.href = "/admissions/apply?university=TMUC";
      });
    });

    closeBtn.addEventListener("click", tmucCloseQuickApply);
    if(doneBtn) doneBtn.addEventListener("click", tmucCloseQuickApply);
    overlay.addEventListener("click", function(e){ if(e.target === overlay) tmucCloseQuickApply(); });
    document.addEventListener("keydown", function(e){
      if(e.key === "Escape" && overlay.classList.contains("tmuc-qa-open")) tmucCloseQuickApply();
    });

    if(toFeeBtn) toFeeBtn.addEventListener("click", function(){
      if(!tmucQaSelectedProgram) return;
      tmucRenderFeeOptions();
      tmucQuickApplyGoTo("fee");
    });
    if(backProgramBtn) backProgramBtn.addEventListener("click", function(){ tmucQuickApplyGoTo("program"); });
    if(toFormBtn) toFormBtn.addEventListener("click", function(){
      if(!tmucQaSelectedFee) return;
      tmucQuickApplyGoTo("form");
    });
    if(backFeeBtn) backFeeBtn.addEventListener("click", function(){ tmucQuickApplyGoTo("fee"); });

    function setError(fieldEl, hasError){ if(fieldEl) fieldEl.classList.toggle("tmuc-merror", hasError); }
    function isValidEmail(v){ return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(v); }
    function isValidPhone(v){ var d = v.replace(/[^\d]/g,""); return d.length >= 10 && d.length <= 13; }
    function req(field, value, minLen){
      var el = form.querySelector('[data-tmuc-qafield="' + field + '"]');
      var ok = value.trim().length >= (minLen || 1);
      setError(el, !ok);
      return ok;
    }

    form.addEventListener("submit", function(e){
      e.preventDefault();
      var valid = true;

      if(!req("name", form.name.value, 2)) valid = false;
      if(!req("father", form.father.value, 2)) valid = false;
      if(!req("cnic", form.cnic.value, 5)) valid = false;

      var phoneField = form.querySelector('[data-tmuc-qafield="phone"]');
      if(!isValidPhone(form.phone.value.trim())){ setError(phoneField, true); valid = false; } else { setError(phoneField, false); }

      var emailField = form.querySelector('[data-tmuc-qafield="email"]');
      if(!isValidEmail(form.email.value.trim())){ setError(emailField, true); valid = false; } else { setError(emailField, false); }

      if(!req("city", form.city.value, 2)) valid = false;
      if(!req("matricRoll", form.matricRoll.value, 1)) valid = false;
      if(!req("matricPct", form.matricPct.value, 1)) valid = false;
      if(!req("interRoll", form.interRoll.value, 1)) valid = false;
      if(!req("interPct", form.interPct.value, 1)) valid = false;

      if(!valid){
        var firstError = form.querySelector(".tmuc-mfield.tmuc-merror");
        if(firstError){ firstError.scrollIntoView({behavior:"smooth", block:"center"}); }
        return;
      }

      var name = form.name.value.trim();
      var father = form.father.value.trim();
      var cnic = form.cnic.value.trim();
      var phone = form.phone.value.trim();
      var email = form.email.value.trim();
      var city = form.city.value.trim();
      var matricRoll = form.matricRoll.value.trim();
      var matricPct = form.matricPct.value.trim();
      var interRoll = form.interRoll.value.trim();
      var interPct = form.interPct.value.trim();
      var message = form.message.value.trim();

      var subject = "Admission Application — TMUC (" + tmucQaSelectedProgram + ")";
      var bodyLines = [
        "University: The Millennium Universal College",
        "Program: " + tmucQaSelectedProgram,
        "Fee Category: " + tmucQaSelectedFee,
        "Name: " + name,
        "Father's Name: " + father,
        "CNIC / B-Form: " + cnic,
        "Phone: " + phone,
        "Email: " + email,
        "City: " + city,
        "Matriculation Roll No: " + matricRoll,
        "Matriculation Percentage: " + matricPct,
        "Intermediate Roll No: " + interRoll,
        "Intermediate Percentage: " + interPct
      ];
      if(message) bodyLines.push("Message: " + message);
      var mailtoUrl = "mailto:" + encodeURIComponent(tmucQuickApplyEmail) + "?subject=" + encodeURIComponent(subject) + "&body=" + encodeURIComponent(bodyLines.join("\n"));

      window.location.href = mailtoUrl;

      var summaryEl = document.getElementById("tmuc-qa-confirm-summary");
      if(summaryEl){
        summaryEl.innerHTML =
          "<div><strong>Program:</strong> " + tmucQaSelectedProgram + "</div>" +
          "<div><strong>Fee Category:</strong> " + tmucQaSelectedFee + "</div>" +
          "<div><strong>Name:</strong> " + name + "</div>" +
          "<div><strong>Phone:</strong> " + phone + "</div>" +
          "<div><strong>Email:</strong> " + email + "</div>";
      }

      tmucQuickApplyGoTo("confirm");
    });
  }

  /* ---------- WELCOME / ADMISSION POPUP (shows once per browser session) ---------- */
  function tmucCloseWelcomePopup(){
    var overlay = document.getElementById("tmuc-welcome-modal");
    if(!overlay) return;
    overlay.classList.remove("tmuc-welcome-open");
    overlay.setAttribute("aria-hidden", "true");
    document.body.style.overflow = "";
  }
  function tmucSetupWelcomePopup(){
    var overlay = document.getElementById("tmuc-welcome-modal");
    var closeBtn = document.getElementById("tmuc-welcome-close");
    var lastDateEl = document.getElementById("tmuc-welcome-lastdate");
    var entryTestEl = document.getElementById("tmuc-welcome-entrytest");
    if(!overlay || !closeBtn) return;

    if(lastDateEl) lastDateEl.textContent = tmucAdmissionInfo.lastDateToApply;
    if(entryTestEl) entryTestEl.textContent = tmucAdmissionInfo.entryTestDate;

    closeBtn.addEventListener("click", tmucCloseWelcomePopup);
    overlay.addEventListener("click", function(e){ if(e.target === overlay) tmucCloseWelcomePopup(); });
    document.addEventListener("keydown", function(e){
      if(e.key === "Escape" && overlay.classList.contains("tmuc-welcome-open")) tmucCloseWelcomePopup();
    });

    var SESSION_KEY = "ccxSeenTmucWelcome";
    var alreadyShown = false;
    try { alreadyShown = window.sessionStorage.getItem(SESSION_KEY) === "1"; } catch(err){ alreadyShown = false; }

    if(!alreadyShown){
      window.setTimeout(function(){
        overlay.classList.add("tmuc-welcome-open");
        overlay.setAttribute("aria-hidden", "false");
        document.body.style.overflow = "hidden";
        try { window.sessionStorage.setItem(SESSION_KEY, "1"); } catch(err){}
      }, 1200);
    }
  }

  /* ============================================================
     PROGRAM/DEPARTMENT MULTI-STEP MODAL
     (Fee Structure → Application Form → Confirmation, submitted via email)
     ============================================================ */
  // TMUC's real published general contact email (no dedicated admissions
  // address was confirmed from the source, so this is the closest real one).
  var tmucDeptEmail = "info@tmuc.edu.pk";
  var tmucDeptCurrent = null;

  function tmucDeptGoToStep(step){
    document.querySelectorAll("#tmuc-page .tmuc-dept-view").forEach(function(view){
      view.classList.toggle("tmuc-dept-view-active", view.getAttribute("data-tmuc-dept-view") === String(step));
    });
    document.querySelectorAll("#tmuc-page .tmuc-dept-step-dot").forEach(function(dot){
      var dotStep = parseInt(dot.getAttribute("data-tmuc-dept-dot"), 10);
      dot.classList.toggle("tmuc-dept-step-active", dotStep === step);
      dot.classList.toggle("tmuc-dept-step-done", dotStep < step);
    });
  }

  function tmucOpenDeptModal(programName){
    var overlay = document.getElementById("tmuc-dept-modal");
    if(!overlay) return;
    tmucDeptCurrent = { program: programName };

    var tag1 = document.getElementById("tmuc-dept-tag-1");
    var tag2 = document.getElementById("tmuc-dept-tag-2");
    if(tag1) tag1.textContent = programName + " · TMUC";
    if(tag2) tag2.textContent = programName + " · TMUC";

    var form = document.getElementById("tmuc-dept-form");
    if(form) form.reset();
    document.querySelectorAll("#tmuc-dept-form .tmuc-mfield").forEach(function(f){ f.classList.remove("tmuc-merror"); });

    tmucDeptGoToStep(1);
    overlay.classList.add("tmuc-dept-open");
    overlay.setAttribute("aria-hidden", "false");
    document.body.style.overflow = "hidden";
  }
  function tmucCloseDeptModal(){
    var overlay = document.getElementById("tmuc-dept-modal");
    if(!overlay) return;
    overlay.classList.remove("tmuc-dept-open");
    overlay.setAttribute("aria-hidden", "true");
    document.body.style.overflow = "";
  }

  function tmucSetupDeptModal(){
    var overlay = document.getElementById("tmuc-dept-modal");
    var closeBtn = document.getElementById("tmuc-dept-close");
    var toStep2 = document.getElementById("tmuc-dept-to-step2");
    var backStep1 = document.getElementById("tmuc-dept-back-step1");
    var doneBtn = document.getElementById("tmuc-dept-done");
    var form = document.getElementById("tmuc-dept-form");
    if(!overlay || !closeBtn || !form) return;

    document.querySelectorAll("#tmuc-page .tmuc-dept-trigger").forEach(function(trigger){
      trigger.addEventListener("click", function(e){
        e.preventDefault();
        var card = trigger.closest(".tmuc-program-card");
        var titleEl = card ? card.querySelector("h3") : null;
        var programName = titleEl ? titleEl.textContent.trim() : "Program";
        window.location.href = "/admissions/apply?university=TMUC&program=" + encodeURIComponent(programName);
      });
    });

    closeBtn.addEventListener("click", tmucCloseDeptModal);
    if(doneBtn) doneBtn.addEventListener("click", tmucCloseDeptModal);
    overlay.addEventListener("click", function(e){ if(e.target === overlay) tmucCloseDeptModal(); });
    document.addEventListener("keydown", function(e){
      if(e.key === "Escape" && overlay.classList.contains("tmuc-dept-open")) tmucCloseDeptModal();
    });
    if(toStep2) toStep2.addEventListener("click", function(){ tmucDeptGoToStep(2); });
    if(backStep1) backStep1.addEventListener("click", function(){ tmucDeptGoToStep(1); });

    function setError(fieldEl, hasError){ if(fieldEl) fieldEl.classList.toggle("tmuc-merror", hasError); }
    function isValidEmail(v){ return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(v); }
    function isValidPhone(v){ var d = v.replace(/[^\d]/g,""); return d.length >= 10 && d.length <= 13; }

    form.addEventListener("submit", function(e){
      e.preventDefault();
      var valid = true;

      var name = form.name.value.trim();
      var nameField = form.querySelector('[data-tmuc-dfield="name"]');
      if(name.length < 2){ setError(nameField, true); valid = false; } else { setError(nameField, false); }

      var phone = form.phone.value.trim();
      var phoneField = form.querySelector('[data-tmuc-dfield="phone"]');
      if(!isValidPhone(phone)){ setError(phoneField, true); valid = false; } else { setError(phoneField, false); }

      var email = form.email.value.trim();
      var emailField = form.querySelector('[data-tmuc-dfield="email"]');
      if(!isValidEmail(email)){ setError(emailField, true); valid = false; } else { setError(emailField, false); }

      var city = form.city.value.trim();
      var message = form.message.value.trim();

      if(!valid){
        var firstError = form.querySelector(".tmuc-mfield.tmuc-merror");
        if(firstError){ firstError.scrollIntoView({behavior:"smooth", block:"center"}); }
        return;
      }

      var info = tmucDeptCurrent || { program:"" };
      var subject = "Admission Application — " + info.program + " (TMUC)";
      var bodyLines = ["Program: " + info.program, "University: The Millennium Universal College", "Name: " + name, "Phone: " + phone, "Email: " + email];
      if(city) bodyLines.push("City: " + city);
      if(message) bodyLines.push("Message: " + message);
      var mailtoUrl = "mailto:" + encodeURIComponent(tmucDeptEmail) + "?subject=" + encodeURIComponent(subject) + "&body=" + encodeURIComponent(bodyLines.join("\n"));

      window.location.href = mailtoUrl;

      var summaryEl = document.getElementById("tmuc-dept-summary");
      if(summaryEl){
        summaryEl.innerHTML =
          "<div><strong>Program:</strong> " + info.program + "</div>" +
          "<div><strong>Name:</strong> " + name + "</div>" +
          "<div><strong>Phone:</strong> " + phone + "</div>" +
          "<div><strong>Email:</strong> " + email + "</div>";
      }
      var fallbackEl = document.getElementById("tmuc-dept-fallback-email");
      if(fallbackEl) fallbackEl.textContent = "Send to: " + tmucDeptEmail;

      tmucDeptGoToStep(3);
    });
  }


  function tmucSetupAdmissionModal(){
    var overlay = document.getElementById("tmuc-admission-modal");
    var closeBtn = document.getElementById("tmuc-modal-close");
    var form = document.getElementById("tmuc-admission-form");
    if(!overlay || !closeBtn || !form) return;

    // TODO: set TMUC's real WhatsApp/admissions helpline number before going live
    var tmucAdmissionWhatsapp = "<?php echo esc_js( ccx_whatsapp_number( 'TMUC' ) ); ?>";

    function tmucOpenModal(prefill){
      overlay.classList.add("tmuc-modal-open");
      overlay.setAttribute("aria-hidden", "false");
      document.body.style.overflow = "hidden";
      if(prefill && prefill.program) form.program.value = prefill.program;
      window.setTimeout(function(){ form.name.focus(); }, 250);
    }
    function tmucCloseModal(){
      overlay.classList.remove("tmuc-modal-open");
      overlay.setAttribute("aria-hidden", "true");
      document.body.style.overflow = "";
    }

    document.querySelectorAll("#tmuc-page .tmuc-admission-trigger").forEach(function(trigger){
      trigger.addEventListener("click", function(e){
        e.preventDefault();
        window.location.href = "/admissions/apply?university=TMUC";
      });
    });

    closeBtn.addEventListener("click", tmucCloseModal);
    overlay.addEventListener("click", function(e){ if(e.target === overlay) tmucCloseModal(); });
    document.addEventListener("keydown", function(e){
      if(e.key === "Escape" && overlay.classList.contains("tmuc-modal-open")) tmucCloseModal();
    });

    function setError(fieldEl, hasError){ if(fieldEl) fieldEl.classList.toggle("tmuc-merror", hasError); }
    function isValidEmail(v){ return v === "" || /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(v); }
    function isValidPhone(v){ var d = v.replace(/[^\d]/g,""); return d.length >= 10 && d.length <= 13; }

    form.addEventListener("submit", function(e){
      e.preventDefault();
      var valid = true;

      var name = form.name.value.trim();
      var nameField = form.querySelector('[data-tmuc-field="name"]');
      if(name.length < 2){ setError(nameField, true); valid = false; } else { setError(nameField, false); }

      var phone = form.phone.value.trim();
      var phoneField = form.querySelector('[data-tmuc-field="phone"]');
      if(!isValidPhone(phone)){ setError(phoneField, true); valid = false; } else { setError(phoneField, false); }

      var email = form.email.value.trim();
      var emailField = form.querySelector('[data-tmuc-field="email"]');
      if(!isValidEmail(email)){ setError(emailField, true); valid = false; } else { setError(emailField, false); }

      var city = form.city.value.trim();
      var campus = form.campus.value.trim();

      var program = form.program.value.trim();
      var programField = form.querySelector('[data-tmuc-field="program"]');
      if(program.length < 2){ setError(programField, true); valid = false; } else { setError(programField, false); }

      var message = form.message.value.trim();

      if(!valid){
        var firstError = form.querySelector(".tmuc-mfield.tmuc-merror");
        if(firstError){ firstError.scrollIntoView({behavior:"smooth", block:"center"}); }
        return;
      }

      var lines = [
        "Hello, I would like to apply for admission at TMUC.",
        "Name: " + name,
        "Phone: " + phone
      ];
      if(email) lines.push("Email: " + email);
      if(city) lines.push("City: " + city);
      if(campus) lines.push("Preferred Campus: " + campus);
      lines.push("Program of Interest: " + program);
      if(message) lines.push("Message: " + message);

      var waBase = tmucAdmissionWhatsapp ? ("https://wa.me/" + tmucAdmissionWhatsapp) : "https://wa.me/";
      var waUrl = waBase + "?text=" + encodeURIComponent(lines.join("\n"));

      window.open(waUrl, "_blank", "noopener");
      tmucCloseModal();
      form.reset();
    });
  }

  function tmucSetupMobileNav(){
    var btn = document.getElementById("tmuc-hamburger-btn");
    var nav = document.getElementById("tmuc-mobile-nav");
    if(!btn || !nav) return;
    btn.addEventListener("click", function(){
      var isOpen = nav.classList.toggle("tmuc-open");
      btn.classList.toggle("tmuc-active", isOpen);
      btn.setAttribute("aria-expanded", isOpen ? "true" : "false");
    });
  }

  function tmucSetupSmoothScroll(){
    document.querySelectorAll('#tmuc-page a[data-tmuc-scroll]').forEach(function(link){
      var targetSel = link.getAttribute("data-tmuc-scroll");
      link.addEventListener("click", function(e){
        var target = document.querySelector(targetSel);
        if(target){
          e.preventDefault();
          var top = target.getBoundingClientRect().top + window.pageYOffset - 90;
          window.scrollTo({top:top, behavior:"smooth"});
        }
      });
    });
  }

  // Frontend-only course search — no backend/search API connected yet.
  function tmucSetupCourseSearch(){
    var form = document.getElementById("tmuc-course-search");
    if(!form) return;
    form.addEventListener("submit", function(e){
      e.preventDefault();
      console.log("Course search submitted (no backend connected yet).");
    });
  }

  function tmucSetupScrollReveal(){
    var els = document.querySelectorAll("#tmuc-page .tmuc-reveal");
    if(!els.length) return;
    if("IntersectionObserver" in window){
      var io = new IntersectionObserver(function(entries){
        entries.forEach(function(entry){
          if(entry.isIntersecting){
            entry.target.classList.add("tmuc-in");
            io.unobserve(entry.target);
          }
        });
      }, {threshold:0.1, rootMargin:"0px 0px -60px 0px"});
      els.forEach(function(el){ io.observe(el); });
    } else {
      els.forEach(function(el){ el.classList.add("tmuc-in"); });
    }
  }

  function tmucSetupFooterYear(){
    var el = document.getElementById("tmuc-year");
    if(el) el.textContent = new Date().getFullYear();
  }

  return { init: tmucInit };
})();

if(document.readyState === "loading"){
  document.addEventListener("DOMContentLoaded", tmucHomepage.init);
} else {
  tmucHomepage.init();
}
</script>

<?php wp_footer(); ?>
</body>
</html>
