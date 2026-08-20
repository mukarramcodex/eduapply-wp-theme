<?php
/**
 * Template Name: EduApply — UOR
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>University of Rawalpindi (UOR)</title>
<meta name="description" content="University of Rawalpindi (UOR) — a new institution on GT Road near DHA-1, offering hands-on, technology-forward degree programs across business, pharmacy, media, design and more." />

<!--
  Standalone reproduction of the UOR homepage only (/uor route). Namespaced
  with a "uor-" prefix on every class/ID and scoped under #uor-page so it
  never collides with the campaign index or other university pages.

  SOURCE: nav structure, hero copy, program names, "Why Choose Us" items,
  news headlines/dates, and footer/contact details are drawn from the live
  uor.edu.pk homepage. The hero headline and CTA labels are reproduced as
  short factual UI copy; the longer "Why Choose Us" descriptions and news
  summaries are paraphrased in our own words rather than copied verbatim.
  Program artwork, the intro photo, and both logos are hotlinked directly
  from UOR's own asset paths since they were available in the source. No
  specific hero background photo was exposed by the source, so that image
  is a clearly marked placeholder pending the real asset.
-->

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

#uor-page .uor-eyebrow{
  font-family:var(--uor-font-display); font-size:12.5px; font-weight:700; letter-spacing:0.09em; text-transform:uppercase;
  color:var(--uor-red); margin-bottom:12px;
}
#uor-page .uor-section-title{
  font-family:var(--uor-font-display); font-weight:700; font-size:clamp(24px,3.1vw,36px); color:var(--uor-blue-900);
  line-height:1.2; letter-spacing:-0.01em;
}
#uor-page .uor-section-sub{margin-top:12px; font-size:15.5px; color:var(--uor-ink-soft); line-height:1.65; max-width:62ch;}
#uor-page .uor-section-head{margin-bottom:42px;}
#uor-page .uor-section-head.uor-center{text-align:center; max-width:660px; margin-left:auto; margin-right:auto;}

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

/* ============================================================
   HERO
   ============================================================ */
#uor-page .uor-hero{position:relative; min-height:620px; display:flex; align-items:center; overflow:hidden;}
#uor-page .uor-hero-media{position:absolute; inset:0;}
#uor-page .uor-hero-media img{width:100%; height:100%; object-fit:cover; object-position:center 30%;}
#uor-page .uor-hero-media::after{
  content:""; position:absolute; inset:0;
  background:linear-gradient(100deg, rgba(7,27,61,0.94) 10%, rgba(12,42,94,0.78) 45%, rgba(12,42,94,0.42) 78%);
}
#uor-page .uor-hero-content{position:relative; z-index:1; padding:96px 0;}
#uor-page .uor-hero h1{
  font-family:var(--uor-font-display); font-weight:800; color:#fff;
  font-size:clamp(32px,5.2vw,56px); line-height:1.12; max-width:15ch; letter-spacing:-0.01em;
}
#uor-page .uor-hero h1 .uor-accent{color:var(--uor-red);}
#uor-page .uor-hero-sub{margin-top:20px; font-size:18px; font-weight:600; color:rgba(255,255,255,0.88); font-family:var(--uor-font-display);}
#uor-page .uor-hero-actions{margin-top:36px;}

/* ============================================================
   INTRODUCTION
   ============================================================ */
#uor-page .uor-intro{padding:92px 0;}
#uor-page .uor-intro-grid{display:grid; grid-template-columns:1fr 1fr; gap:60px; align-items:center;}
#uor-page .uor-intro-text p{font-size:15.5px; line-height:1.75; color:var(--uor-ink-soft); margin-bottom:22px;}
#uor-page .uor-intro-media{border-radius:16px; overflow:hidden; box-shadow:var(--uor-shadow-l); aspect-ratio:6/5;}
#uor-page .uor-intro-media img{width:100%; height:100%; object-fit:cover;}
@media (max-width:900px){#uor-page .uor-intro-grid{grid-template-columns:1fr;}}

/* ============================================================
   PROGRAMS
   ============================================================ */
#uor-page .uor-programs{padding:92px 0; background:var(--uor-paper);}
#uor-page .uor-programs-grid{display:grid; grid-template-columns:repeat(4,1fr); gap:22px;}
#uor-page .uor-program-card{
  background:#fff; border-radius:14px; overflow:hidden; box-shadow:var(--uor-shadow-s);
  transition:transform .3s ease, box-shadow .3s ease; display:flex; flex-direction:column;
}
#uor-page .uor-program-card:hover{transform:translateY(-6px); box-shadow:var(--uor-shadow-m);}
#uor-page .uor-program-media{position:relative; aspect-ratio:4/3; overflow:hidden; background:var(--uor-paper-dim); display:flex; align-items:center; justify-content:center;}
#uor-page .uor-program-media img{width:100%; height:100%; object-fit:contain; padding:18px; transition:transform .4s ease;}
#uor-page .uor-program-card:hover .uor-program-media img{transform:scale(1.06);}
#uor-page .uor-program-body{padding:18px 20px 22px; flex:1; display:flex; flex-direction:column;}
#uor-page .uor-program-tag{font-family:var(--uor-font-display); font-size:11px; font-weight:700; letter-spacing:0.06em; color:var(--uor-red); text-transform:uppercase; margin-bottom:8px;}
#uor-page .uor-program-body h3{font-family:var(--uor-font-display); font-size:15px; font-weight:700; color:var(--uor-blue-900); line-height:1.35; margin-bottom:14px; flex:1;}
#uor-page .uor-program-apply{font-size:12.5px; font-weight:700; color:var(--uor-blue-700); display:inline-flex; align-items:center; gap:6px;}
#uor-page .uor-program-apply:hover{color:var(--uor-red);}
@media (max-width:1080px){#uor-page .uor-programs-grid{grid-template-columns:repeat(3,1fr);}}
@media (max-width:760px){#uor-page .uor-programs-grid{grid-template-columns:repeat(2,1fr);}}
@media (max-width:480px){#uor-page .uor-programs-grid{grid-template-columns:1fr; max-width:340px; margin:0 auto;}}

/* ============================================================
   WHY CHOOSE US
   ============================================================ */
#uor-page .uor-why{padding:92px 0;}
#uor-page .uor-why-list{border-top:1px solid var(--uor-paper-dim);}
#uor-page .uor-why-item{border-bottom:1px solid var(--uor-paper-dim);}
#uor-page .uor-why-trigger{
  width:100%; display:flex; align-items:center; gap:22px; padding:24px 6px; text-align:left;
}
#uor-page .uor-why-num{
  flex-shrink:0; width:52px; height:52px; border-radius:50%; background:var(--uor-red-tint); color:var(--uor-red);
  display:flex; align-items:center; justify-content:center;
  font-family:var(--uor-font-display); font-weight:800; font-size:16px;
  transition:background .25s ease, color .25s ease;
}
#uor-page .uor-why-item.uor-open .uor-why-num{background:var(--uor-red); color:#fff;}
#uor-page .uor-why-heading{
  flex:1; font-family:var(--uor-font-display); font-size:17px; font-weight:700; color:var(--uor-blue-900);
}
#uor-page .uor-why-plus{
  flex-shrink:0; width:32px; height:32px; border-radius:50%; border:1.5px solid var(--uor-paper-dim); color:var(--uor-blue-800);
  display:flex; align-items:center; justify-content:center; transition:transform .3s ease, border-color .3s ease;
}
#uor-page .uor-why-item.uor-open .uor-why-plus{transform:rotate(135deg); border-color:var(--uor-red); color:var(--uor-red);}
#uor-page .uor-why-panel{max-height:0; overflow:hidden; transition:max-height .35s ease;}
#uor-page .uor-why-panel-inner{padding:0 6px 26px 74px; font-size:14.5px; line-height:1.7; color:var(--uor-ink-soft); max-width:70ch;}
@media (max-width:600px){
  #uor-page .uor-why-trigger{gap:14px;}
  #uor-page .uor-why-num{width:42px; height:42px; font-size:14px;}
  #uor-page .uor-why-heading{font-size:15px;}
  #uor-page .uor-why-panel-inner{padding-left:56px; font-size:13.8px;}
}

/* ============================================================
   NEWS & EVENTS
   ============================================================ */
#uor-page .uor-news{padding:92px 0; background:var(--uor-paper);}
#uor-page .uor-news-grid{display:grid; grid-template-columns:1.3fr 1fr 1fr; gap:24px;}
#uor-page .uor-news-card{
  background:#fff; border-radius:14px; overflow:hidden; box-shadow:var(--uor-shadow-s);
  transition:transform .3s ease, box-shadow .3s ease; display:flex; flex-direction:column;
}
#uor-page .uor-news-card:hover{transform:translateY(-5px); box-shadow:var(--uor-shadow-m);}
#uor-page .uor-news-card.uor-featured{grid-row:span 2;}
#uor-page .uor-news-media{position:relative; aspect-ratio:16/10; overflow:hidden;}
#uor-page .uor-news-card.uor-featured .uor-news-media{aspect-ratio:16/11.5;}
#uor-page .uor-news-media img{width:100%; height:100%; object-fit:cover; transition:transform .5s ease;}
#uor-page .uor-news-card:hover .uor-news-media img{transform:scale(1.06);}
#uor-page .uor-news-tag{
  position:absolute; top:14px; left:14px; background:var(--uor-red); color:#fff; font-family:var(--uor-font-display);
  font-size:10.5px; font-weight:700; letter-spacing:0.05em; text-transform:uppercase; padding:6px 11px; border-radius:5px;
}
#uor-page .uor-news-body{padding:20px 22px; flex:1; display:flex; flex-direction:column;}
#uor-page .uor-news-date{font-family:var(--uor-font-display); font-size:11.5px; font-weight:700; color:var(--uor-blue-700); letter-spacing:0.04em; margin-bottom:10px;}
#uor-page .uor-news-body h3{font-family:var(--uor-font-display); font-size:15.5px; font-weight:700; color:var(--uor-blue-900); line-height:1.35; margin-bottom:10px;}
#uor-page .uor-news-card.uor-featured .uor-news-body h3{font-size:19px;}
#uor-page .uor-news-body p{font-size:13px; color:var(--uor-ink-soft); line-height:1.6; margin-bottom:14px; flex:1;}
#uor-page .uor-read-more{font-size:12.5px; font-weight:700; color:var(--uor-red); display:inline-flex; align-items:center; gap:6px;}
#uor-page .uor-read-more:hover{color:var(--uor-red-dark);}
#uor-page .uor-news-viewall{text-align:center; margin-top:36px;}
@media (max-width:1080px){#uor-page .uor-news-grid{grid-template-columns:repeat(2,1fr);} #uor-page .uor-news-card.uor-featured{grid-row:span 1; grid-column:span 2;}}
@media (max-width:640px){#uor-page .uor-news-grid{grid-template-columns:1fr;} #uor-page .uor-news-card.uor-featured{grid-column:span 1;}}

/* ============================================================
   APPLY CTA
   ============================================================ */
#uor-page .uor-apply-cta{
  position:relative; padding:110px 0; text-align:center; overflow:hidden;
  background:linear-gradient(120deg, var(--uor-blue-950), var(--uor-blue-800));
}
#uor-page .uor-apply-cta::before{
  content:""; position:absolute; right:-8%; top:-20%; width:520px; height:520px; border-radius:50%;
  background:radial-gradient(circle, rgba(212,42,42,0.16), transparent 70%);
}
#uor-page .uor-apply-cta h2{position:relative; z-index:1; font-family:var(--uor-font-display); font-weight:800; color:#fff; font-size:clamp(26px,3.8vw,42px); margin-bottom:16px;}
#uor-page .uor-apply-cta p{position:relative; z-index:1; color:rgba(255,255,255,0.75); max-width:48ch; margin:0 auto 32px; font-size:15.5px; line-height:1.6;}
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
#uor-page .uor-social{display:flex; gap:10px;}
#uor-page .uor-social a{width:34px; height:34px; border-radius:50%; background:rgba(255,255,255,0.08); color:#fff; display:flex; align-items:center; justify-content:center; transition:background .2s ease;}
#uor-page .uor-social a:hover{background:var(--uor-red);}
@media (max-width:900px){#uor-page .uor-footer-top{grid-template-columns:1fr 1fr; row-gap:32px;}}
@media (max-width:520px){#uor-page .uor-footer-top{grid-template-columns:1fr;}}

#uor-page .uor-reveal{opacity:0; transform:translateY(20px); transition:opacity .6s ease, transform .6s ease;}
#uor-page .uor-reveal.uor-in{opacity:1; transform:translateY(0);}

/* ============================================================
   ADMISSION INQUIRY MODAL
   ============================================================ */
#uor-page .uor-modal-overlay{
  position:fixed; inset:0; z-index:2000; display:flex; align-items:center; justify-content:center;
  padding:20px; background:rgba(7,27,61,0.6); backdrop-filter:blur(4px);
  opacity:0; visibility:hidden; transition:opacity .25s ease, visibility .25s ease;
}
#uor-page .uor-modal-overlay.uor-modal-open{opacity:1; visibility:visible;}
#uor-page .uor-modal-panel{
  position:relative; width:100%; max-width:560px; max-height:90vh; overflow-y:auto;
  background:#fff; border-radius:16px; box-shadow:var(--uor-shadow-l);
  padding:clamp(26px,4vw,40px); transform:translateY(16px); transition:transform .25s ease;
}
#uor-page .uor-modal-overlay.uor-modal-open .uor-modal-panel{transform:translateY(0);}
#uor-page .uor-modal-close{
  position:absolute; top:16px; right:16px; width:36px; height:36px; border-radius:50%;
  background:var(--uor-paper); color:var(--uor-blue-900); display:flex; align-items:center; justify-content:center;
  font-size:20px; line-height:1; transition:background .2s ease;
}
#uor-page .uor-modal-close:hover{background:var(--uor-paper-dim);}
#uor-page .uor-modal-header{margin-bottom:22px; padding-right:30px;}
#uor-page .uor-modal-header h3{font-family:var(--uor-font-display); font-size:clamp(19px,2.4vw,23px); font-weight:700; color:var(--uor-blue-900);}
#uor-page .uor-modal-sub{margin-top:8px; font-size:13.5px; color:var(--uor-ink-soft); line-height:1.55;}
#uor-page .uor-modal-grid{display:grid; grid-template-columns:1fr 1fr; gap:14px 16px; margin-bottom:18px;}
#uor-page .uor-modal-grid .uor-mfield.uor-full{grid-column:1/-1;}
#uor-page .uor-mfield{display:flex; flex-direction:column; gap:6px;}
#uor-page .uor-mfield label{font-size:13px; font-weight:700; color:var(--uor-blue-800);}
#uor-page .uor-mfield input, #uor-page .uor-mfield textarea{
  border:1.5px solid var(--uor-paper-dim); border-radius:8px; padding:11px 13px; font-family:inherit; font-size:14px;
  color:var(--uor-ink); background:var(--uor-paper); width:100%;
}
#uor-page .uor-mfield input:focus, #uor-page .uor-mfield textarea:focus{outline:none; border-color:var(--uor-red); background:#fff;}
#uor-page .uor-mfield textarea{resize:vertical; min-height:80px;}
#uor-page .uor-mfield.uor-merror input, #uor-page .uor-mfield.uor-merror textarea{border-color:#C1443C; background:#FDF3F2;}
#uor-page .uor-mfield-error{font-size:12px; color:#C1443C; min-height:14px; display:none;}
#uor-page .uor-mfield.uor-merror .uor-mfield-error{display:block;}
#uor-page .uor-modal-note{font-size:12px; color:var(--uor-ink-soft); margin-top:14px; text-align:center;}
@media (max-width:480px){#uor-page .uor-modal-grid{grid-template-columns:1fr;}}

/* ============================================================
   PROGRAM/DEPARTMENT MULTI-STEP MODAL
   (Fee Structure → Application Form → Confirmation, submitted via email)
   ============================================================ */
#uor-page .uor-dept-overlay{
  position:fixed; inset:0; z-index:2100; display:flex; align-items:center; justify-content:center;
  padding:20px; background:rgba(7,27,61,0.62); backdrop-filter:blur(4px);
  opacity:0; visibility:hidden; transition:opacity .25s ease, visibility .25s ease;
}
#uor-page .uor-dept-overlay.uor-dept-open{opacity:1; visibility:visible;}
#uor-page .uor-dept-panel{
  position:relative; width:100%; max-width:600px; max-height:90vh; overflow-y:auto;
  background:#fff; border-radius:16px; box-shadow:var(--uor-shadow-l);
  padding:clamp(26px,4vw,40px); transform:translateY(16px); transition:transform .25s ease;
}
#uor-page .uor-dept-overlay.uor-dept-open .uor-dept-panel{transform:translateY(0);}
#uor-page .uor-dept-close{
  position:absolute; top:16px; right:16px; width:36px; height:36px; border-radius:50%;
  background:var(--uor-paper); color:var(--uor-blue-900); display:flex; align-items:center; justify-content:center;
  font-size:20px; line-height:1; transition:background .2s ease; z-index:2;
}
#uor-page .uor-dept-close:hover{background:var(--uor-paper-dim);}
#uor-page .uor-dept-steps{display:flex; align-items:center; gap:8px; margin-bottom:22px; padding-right:30px;}
#uor-page .uor-dept-step-dot{display:flex; align-items:center; gap:8px; font-size:11px; font-weight:600; color:var(--uor-ink-soft);}
#uor-page .uor-dept-step-dot .uor-num{
  width:24px; height:24px; border-radius:50%; background:var(--uor-paper-dim); color:var(--uor-ink-soft);
  display:flex; align-items:center; justify-content:center; font-size:11px; font-weight:700; transition:background .2s ease, color .2s ease;
}
#uor-page .uor-dept-step-dot.uor-dept-step-active .uor-num{background:var(--uor-red); color:#fff;}
#uor-page .uor-dept-step-dot.uor-dept-step-done .uor-num{background:var(--uor-blue-800); color:#fff;}
#uor-page .uor-dept-step-line{flex:1; height:1px; background:var(--uor-paper-dim);}
#uor-page .uor-dept-view{display:none;}
#uor-page .uor-dept-view.uor-dept-view-active{display:block;}
#uor-page .uor-dept-header{margin-bottom:18px;}
#uor-page .uor-dept-header h3{font-family:var(--uor-font-display); font-size:clamp(19px,2.4vw,23px); font-weight:700; color:var(--uor-blue-900);}
#uor-page .uor-dept-header p{margin-top:6px; font-size:13.5px; color:var(--uor-ink-soft); line-height:1.5;}
#uor-page .uor-dept-program-tag{
  display:inline-flex; align-items:center; gap:8px; font-size:12px; font-weight:700; color:var(--uor-blue-700);
  background:var(--uor-paper); padding:6px 13px; border-radius:999px; margin-bottom:14px;
}
#uor-page .uor-dept-fee-note{
  font-size:13px; line-height:1.65; color:var(--uor-ink-soft); background:var(--uor-paper);
  border-left:3px solid var(--uor-red); border-radius:0 8px 8px 0; padding:14px 16px; margin-bottom:18px;
}
#uor-page .uor-dept-fee-table{width:100%; border-collapse:collapse; margin-bottom:22px; border:1px solid var(--uor-paper-dim); border-radius:10px; overflow:hidden;}
#uor-page .uor-dept-fee-table tr{border-bottom:1px solid var(--uor-paper-dim);}
#uor-page .uor-dept-fee-table tr:last-child{border-bottom:none;}
#uor-page .uor-dept-fee-table td{padding:12px 16px; font-size:13.5px;}
#uor-page .uor-dept-fee-table td:first-child{font-weight:600; color:var(--uor-blue-900); width:55%;}
#uor-page .uor-dept-fee-table td:last-child{color:var(--uor-ink-soft); text-align:right;}
#uor-page .uor-dept-fee-actions{display:flex; gap:12px; flex-wrap:wrap;}
#uor-page .uor-dept-form-actions{display:flex; gap:12px; margin-top:6px;}
#uor-page .uor-dept-form-actions .uor-btn{flex:1; justify-content:center;}
#uor-page .uor-dept-confirm{text-align:center; padding:10px 0 4px;}
#uor-page .uor-dept-confirm .uor-check{
  width:60px; height:60px; border-radius:50%; background:rgba(212,42,42,0.08); color:var(--uor-red);
  display:flex; align-items:center; justify-content:center; margin:0 auto 18px;
}
#uor-page .uor-dept-confirm h3{font-family:var(--uor-font-display); font-size:22px; font-weight:700; color:var(--uor-blue-900); margin-bottom:10px;}
#uor-page .uor-dept-confirm p{font-size:13.5px; color:var(--uor-ink-soft); line-height:1.65; max-width:42ch; margin:0 auto 18px;}
#uor-page .uor-dept-confirm-summary{background:var(--uor-paper); border-radius:10px; padding:16px 18px; text-align:left; margin-bottom:20px; font-size:13px; line-height:1.9;}
#uor-page .uor-dept-confirm-summary strong{color:var(--uor-blue-900);}
#uor-page .uor-dept-fallback{font-size:12px; color:var(--uor-ink-soft); margin-top:4px;}

/* ============================================================
   NOTIFICATION BAR
   ============================================================ */
#uor-page .uor-notify-bar{background:var(--uor-red); color:#fff;}
#uor-page .uor-notify-inner{display:flex; align-items:center; justify-content:space-between; gap:14px; flex-wrap:wrap; padding:9px 0;}
#uor-page .uor-notify-items{display:flex; flex-wrap:wrap; gap:18px;}
#uor-page .uor-notify-item{display:inline-flex; align-items:center; gap:7px; font-size:12.5px; font-weight:700;}
#uor-page .uor-notify-item strong{font-weight:800;}
#uor-page .uor-notify-apply{
  flex-shrink:0; background:var(--uor-blue-950); color:#fff; font-size:12px; font-weight:700;
  padding:8px 18px; border-radius:999px; transition:background .2s ease, transform .2s ease;
}
#uor-page .uor-notify-apply:hover{background:var(--uor-blue-800); transform:translateY(-1px);}
@media (max-width:640px){
  #uor-page .uor-notify-inner{justify-content:center; text-align:center;}
  #uor-page .uor-notify-items{justify-content:center; gap:10px 16px;}
}

/* ============================================================
   QUICK APPLY MODAL (single-step, submitted via email)
   ============================================================ */
#uor-page .uor-qa-overlay{
  position:fixed; inset:0; z-index:2200; display:flex; align-items:center; justify-content:center;
  padding:20px; background:rgba(7,27,61,0.65); backdrop-filter:blur(4px);
  opacity:0; visibility:hidden; transition:opacity .25s ease, visibility .25s ease;
}
#uor-page .uor-qa-overlay.uor-qa-open{opacity:1; visibility:visible;}
#uor-page .uor-qa-panel{
  position:relative; width:100%; max-width:540px; max-height:90vh; overflow-y:auto;
  background:#fff; border-radius:16px; box-shadow:var(--uor-shadow-l);
  padding:clamp(26px,4vw,40px); transform:translateY(16px); transition:transform .25s ease;
}
#uor-page .uor-qa-overlay.uor-qa-open .uor-qa-panel{transform:translateY(0);}
#uor-page .uor-qa-close{
  position:absolute; top:16px; right:16px; width:36px; height:36px; border-radius:50%;
  background:var(--uor-paper); color:var(--uor-blue-900); display:flex; align-items:center; justify-content:center;
  font-size:20px; line-height:1; transition:background .2s ease; z-index:2;
}
#uor-page .uor-qa-close:hover{background:var(--uor-paper-dim);}
#uor-page .uor-qa-header{margin-bottom:20px; padding-right:30px;}
#uor-page .uor-qa-header h3{font-family:var(--uor-font-display); font-size:clamp(19px,2.4vw,23px); font-weight:700; color:var(--uor-blue-900);}
#uor-page .uor-qa-header p{margin-top:6px; font-size:13.5px; color:var(--uor-ink-soft); line-height:1.5;}
#uor-page .uor-qa-view{display:none;}
#uor-page .uor-qa-view.uor-qa-view-active{display:block;}
#uor-page .uor-qa-confirm{text-align:center; padding:10px 0 4px;}
#uor-page .uor-qa-confirm .uor-check{
  width:56px; height:56px; border-radius:50%; background:rgba(212,42,42,0.08); color:var(--uor-red);
  display:flex; align-items:center; justify-content:center; margin:0 auto 18px;
}
#uor-page .uor-qa-confirm h3{font-family:var(--uor-font-display); font-size:21px; font-weight:700; color:var(--uor-blue-900); margin-bottom:10px;}
#uor-page .uor-qa-confirm p{font-size:13.5px; color:var(--uor-ink-soft); line-height:1.65; max-width:40ch; margin:0 auto 6px;}
#uor-page .uor-qa-confirm-summary{background:var(--uor-paper); border-radius:10px; padding:16px 18px; text-align:left; margin:16px 0; font-size:13px; line-height:1.85;}
#uor-page .uor-qa-confirm-summary strong{color:var(--uor-blue-900);}

/* ---- Step indicator ---- */
#uor-page .uor-qa-steps{display:flex; align-items:center; gap:6px; margin-bottom:22px; padding-right:30px; flex-wrap:wrap;}
#uor-page .uor-qa-step-dot{display:flex; align-items:center; gap:6px; font-size:10.5px; font-weight:600; color:var(--uor-ink-soft);}
#uor-page .uor-qa-num{
  width:22px; height:22px; border-radius:50%; background:var(--uor-paper-dim); color:var(--uor-ink-soft);
  display:flex; align-items:center; justify-content:center; font-size:10.5px; font-weight:700; transition:background .2s ease, color .2s ease;
}
#uor-page .uor-qa-step-dot.uor-qa-step-active .uor-qa-num{background:var(--uor-red); color:#fff;}
#uor-page .uor-qa-step-dot.uor-qa-step-done .uor-qa-num{background:var(--uor-blue-800); color:#fff;}
#uor-page .uor-qa-step-line{width:14px; height:1px; background:var(--uor-paper-dim);}

/* ---- Step 1: program list ---- */
#uor-page .uor-qa-program-list{display:flex; flex-direction:column; gap:9px; max-height:340px; overflow-y:auto; margin-bottom:20px; padding-right:2px;}
#uor-page .uor-qa-program-opt{
  display:flex; align-items:center; gap:12px; padding:13px 16px; border:1.5px solid var(--uor-paper-dim);
  border-radius:10px; cursor:pointer; transition:border-color .2s ease, background .2s ease;
}
#uor-page .uor-qa-program-opt:hover{border-color:var(--uor-red);}
#uor-page .uor-qa-program-opt.uor-qa-selected{border-color:var(--uor-red); background:rgba(212,42,42,0.06);}
#uor-page .uor-qa-program-opt input{width:17px; height:17px; accent-color:var(--uor-red); flex-shrink:0;}
#uor-page .uor-qa-program-opt span{font-size:13.5px; font-weight:600; color:var(--uor-blue-900);}

/* ---- Step 2: fee options ---- */
#uor-page .uor-qa-fee-note{font-size:12.5px; line-height:1.6; color:var(--uor-ink-soft); background:var(--uor-paper); border-left:3px solid var(--uor-red); border-radius:0 8px 8px 0; padding:12px 14px; margin-bottom:18px;}
#uor-page .uor-qa-fee-options{display:flex; flex-direction:column; gap:10px; margin-bottom:22px;}
#uor-page .uor-qa-fee-opt{
  display:flex; align-items:center; justify-content:space-between; gap:12px; padding:14px 16px;
  border:1.5px solid var(--uor-paper-dim); border-radius:10px; cursor:pointer; transition:border-color .2s ease, background .2s ease;
}
#uor-page .uor-qa-fee-opt:hover{border-color:var(--uor-red);}
#uor-page .uor-qa-fee-opt.uor-qa-selected{border-color:var(--uor-red); background:rgba(212,42,42,0.06);}
#uor-page .uor-qa-fee-opt-left{display:flex; align-items:center; gap:12px;}
#uor-page .uor-qa-fee-opt input{width:17px; height:17px; accent-color:var(--uor-red); flex-shrink:0;}
#uor-page .uor-qa-fee-opt-title{font-size:13.5px; font-weight:700; color:var(--uor-blue-900);}
#uor-page .uor-qa-fee-opt-amount{font-size:11px; color:var(--uor-ink-soft); text-align:right;}

/* ---- Form action row (shared by steps 2 & 3) ---- */
#uor-page .uor-qa-form-actions{display:flex; gap:12px; margin-top:6px;}
#uor-page .uor-qa-form-actions .uor-btn{flex:1; justify-content:center;}
#uor-page .uor-qa-view [disabled]{opacity:0.55; cursor:not-allowed;}

/* ============================================================
   WELCOME / ADMISSION ANNOUNCEMENT POPUP (auto-shows once per session)
   ============================================================ */
#uor-page .uor-welcome-overlay{
  position:fixed; inset:0; z-index:2150; display:flex; align-items:center; justify-content:center;
  padding:20px; background:rgba(7,27,61,0.65); backdrop-filter:blur(4px);
  opacity:0; visibility:hidden; transition:opacity .3s ease, visibility .3s ease;
}
#uor-page .uor-welcome-overlay.uor-welcome-open{opacity:1; visibility:visible;}
#uor-page .uor-welcome-panel{
  position:relative; width:100%; max-width:440px; background:#fff; border-radius:16px; box-shadow:var(--uor-shadow-l);
  overflow:hidden; text-align:center; transform:scale(0.96); transition:transform .3s ease;
}
#uor-page .uor-welcome-overlay.uor-welcome-open .uor-welcome-panel{transform:scale(1);}
#uor-page .uor-welcome-image{width:100%; height:150px; overflow:hidden;}
#uor-page .uor-welcome-image img{width:100%; height:100%; object-fit:cover; display:block;}
#uor-page .uor-welcome-body{padding:26px 30px 30px;}
#uor-page .uor-welcome-close{
  position:absolute; top:14px; right:14px; width:32px; height:32px; border-radius:50%;
  background:var(--uor-paper); color:var(--uor-blue-900); display:flex; align-items:center; justify-content:center; font-size:18px; z-index:2;
}
#uor-page .uor-welcome-close:hover{background:var(--uor-paper-dim);}
#uor-page .uor-welcome-icon{
  width:52px; height:52px; border-radius:50%; margin:0 auto 16px; background:rgba(212,42,42,0.08); color:var(--uor-red);
  display:flex; align-items:center; justify-content:center;
}
#uor-page .uor-welcome-panel h3{font-family:var(--uor-font-display); font-size:20px; font-weight:700; color:var(--uor-blue-900); margin-bottom:8px;}
#uor-page .uor-welcome-panel > .uor-welcome-body > p{font-size:13.5px; color:var(--uor-ink-soft); line-height:1.55; margin-bottom:20px;}
#uor-page .uor-welcome-dates{background:var(--uor-paper); border-radius:10px; padding:16px 18px; margin-bottom:22px; text-align:left;}
#uor-page .uor-welcome-date-row{display:flex; align-items:center; gap:10px; font-size:13.5px; color:var(--uor-blue-900); font-weight:600;}
#uor-page .uor-welcome-date-row + .uor-welcome-date-row{margin-top:10px;}
#uor-page .uor-welcome-date-row svg{color:var(--uor-red); flex-shrink:0;}
</style>
<?php wp_head(); ?>
</head>
<body>
<div id="uor-page">

<!-- ============================================================
     NOTIFICATION BAR (admission dates + quick Apply Now)
     ============================================================ -->
<div class="uor-notify-bar" id="uor-notify-bar">
  <div class="uor-container uor-notify-inner">
    <div class="uor-notify-items">
      <span class="uor-notify-item"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="5" width="18" height="16" rx="2"/><path d="M8 3v4M16 3v4M3 10h18"/></svg> Last Date to Apply: <strong id="uor-notify-lastdate"></strong></span>
      <span class="uor-notify-item"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 11l3 3L22 4"/><path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"/></svg> Entry Test: <strong id="uor-notify-entrytest"></strong></span>
    </div>
    <button type="button" class="uor-notify-apply uor-quickapply-trigger">Apply Now</button>
  </div>
</div>

<!-- ============================================================
     HEADER
     ============================================================ -->
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
          <a href="/uor-fee-structure">Fee Structure</a>
          <a href="/uor-merit-list">Merit List</a>
          <a href="/uor-fee-chalan">Fee Chalan</a>
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
        <a href="/uor-fee-structure">Fee Structure</a>
        <a href="/uor-merit-list">Merit List</a>
        <a href="/uor-fee-chalan">Fee Chalan</a>
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

<!-- ============================================================
     HERO
     ============================================================ -->
<section class="uor-hero">
  <div class="uor-hero-media">
    <!-- TODO: replace with official UOR photography — dummy stock placeholder for now -->
    <img src="https://images.unsplash.com/photo-1523580494863-6f3031224c94?auto=format&fit=crop&w=1920&q=75" alt="Placeholder campus image — replace with official UOR photography">
  </div>
  <div class="uor-container uor-hero-content">
    <h1>Your Journey To <span class="uor-accent">Global Impact</span> Starts Here</h1>
    <p class="uor-hero-sub">Learn Boldly, Impact Broadly.</p>
    <div class="uor-hero-actions">
      <a href="#uor-programs" class="uor-btn uor-btn-red" data-uor-scroll="#uor-programs">Discover Our Programs</a>
    </div>
  </div>
</section>

<!-- ============================================================
     INTRODUCTION
     ============================================================ -->
<section class="uor-intro">
  <div class="uor-container">
    <div class="uor-intro-grid uor-reveal">
      <div class="uor-intro-text">
        <p class="uor-eyebrow">Introduction</p>
        <h2 class="uor-section-title" style="margin-bottom:20px;">Welcome to the University of Rawalpindi</h2>
        <p>UOR is a new institution that pairs its traditional roots with a forward-looking, technology- and AI-aware curriculum, built to prepare students for leadership in a fast-changing world.</p>
        <p>The university describes itself as a vibrant, inclusive community centered on global connections, teamwork and personal growth — inviting students to learn boldly and make a broad impact.</p>
        <a href="#" class="uor-btn uor-btn-outline-blue">Explore Our Story</a>
      </div>
      <div class="uor-intro-media">
        <!-- Sourced directly from the official UOR asset (uor.edu.pk) -->
        <img src="https://www.uor.edu.pk/frontend/academics/img/about/intro.png" alt="University of Rawalpindi introduction imagery">
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     EXPLORE OUR PROGRAMS
     ============================================================ -->
<section class="uor-programs" id="uor-programs">
  <div class="uor-container">
    <div class="uor-section-head uor-center uor-reveal">
      <p class="uor-eyebrow">Academics</p>
      <h2 class="uor-section-title">Explore our Programs</h2>
    </div>

    <!-- Program artwork below is hotlinked directly from the official UOR
         asset library (uor.edu.pk/frontend/academics/img/program/). -->
    <div class="uor-programs-grid uor-reveal">
      <div class="uor-program-card">
        <div class="uor-program-media"><img src="https://www.uor.edu.pk/frontend/academics/img/program/ADP_BBA.png" alt="Business Administration program" loading="lazy"></div>
        <div class="uor-program-body">
          <p class="uor-program-tag">ADP / BS</p>
          <h3>Business Administration</h3>
          <a href="#" class="uor-program-apply uor-dept-trigger" data-uor-program="Business Administration">Apply Now <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a>
        </div>
      </div>
      <div class="uor-program-card">
        <div class="uor-program-media"><img src="https://www.uor.edu.pk/frontend/academics/img/program/pharm_D.jpg" alt="Doctor of Pharmacy program" loading="lazy"></div>
        <div class="uor-program-body">
          <p class="uor-program-tag">Pharm-D</p>
          <h3>Doctor of Pharmacy</h3>
          <a href="#" class="uor-program-apply uor-dept-trigger" data-uor-program="Doctor of Pharmacy">Apply Now <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a>
        </div>
      </div>
      <div class="uor-program-card">
        <div class="uor-program-media"><img src="https://www.uor.edu.pk/frontend/academics/img/program/ADP_AF.png" alt="Accounting and Finance program" loading="lazy"></div>
        <div class="uor-program-body">
          <p class="uor-program-tag">ADP / BS</p>
          <h3>Accounting and Finance</h3>
          <a href="#" class="uor-program-apply uor-dept-trigger" data-uor-program="Accounting and Finance">Apply Now <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a>
        </div>
      </div>
      <div class="uor-program-card">
        <div class="uor-program-media"><img src="https://www.uor.edu.pk/frontend/academics/img/program/ADP_MC.png" alt="Media and Communication Studies program" loading="lazy"></div>
        <div class="uor-program-body">
          <p class="uor-program-tag">ADP / BS</p>
          <h3>Media and Communication Studies</h3>
          <a href="#" class="uor-program-apply uor-dept-trigger" data-uor-program="Media and Communication Studies">Apply Now <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a>
        </div>
      </div>
      <div class="uor-program-card">
        <div class="uor-program-media"><img src="https://www.uor.edu.pk/frontend/academics/img/program/ADP_DC.png" alt="Digital Design and Computer Arts program" loading="lazy"></div>
        <div class="uor-program-body">
          <p class="uor-program-tag">ADP / BS</p>
          <h3>Digital Design and Computer Arts</h3>
          <a href="#" class="uor-program-apply uor-dept-trigger" data-uor-program="Digital Design and Computer Arts">Apply Now <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a>
        </div>
      </div>
      <div class="uor-program-card">
        <div class="uor-program-media"><img src="https://www.uor.edu.pk/frontend/academics/img/program/ADP_ID.png" alt="Interior Design program" loading="lazy"></div>
        <div class="uor-program-body">
          <p class="uor-program-tag">ADP / BS</p>
          <h3>Interior Design</h3>
          <a href="#" class="uor-program-apply uor-dept-trigger" data-uor-program="Interior Design">Apply Now <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a>
        </div>
      </div>
      <div class="uor-program-card">
        <div class="uor-program-media"><img src="https://www.uor.edu.pk/frontend/academics/img/program/ADP_IS.png" alt="Islamic Sciences program" loading="lazy"></div>
        <div class="uor-program-body">
          <p class="uor-program-tag">ADP / BS</p>
          <h3>Islamic Sciences</h3>
          <a href="#" class="uor-program-apply uor-dept-trigger" data-uor-program="Islamic Sciences">Apply Now <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a>
        </div>
      </div>
      <div class="uor-program-card">
        <div class="uor-program-media"><img src="https://www.uor.edu.pk/frontend/academics/img/program/ADP_PSY.png" alt="Psychology program" loading="lazy"></div>
        <div class="uor-program-body">
          <p class="uor-program-tag">ADP / BS</p>
          <h3>Psychology</h3>
          <a href="#" class="uor-program-apply uor-dept-trigger" data-uor-program="Psychology">Apply Now <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a>
        </div>
      </div>
      <div class="uor-program-card">
        <div class="uor-program-media"><img src="https://www.uor.edu.pk/frontend/academics/img/program/ADP_CS.png" alt="Computer Science program" loading="lazy"></div>
        <div class="uor-program-body">
          <p class="uor-program-tag">ADP / BS</p>
          <h3>Computer Science</h3>
          <a href="#" class="uor-program-apply uor-dept-trigger" data-uor-program="Computer Science">Apply Now <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a>
        </div>
      </div>
      <div class="uor-program-card">
        <div class="uor-program-media"><img src="https://www.uor.edu.pk/frontend/academics/img/program/ADP_SE.png" alt="Software Engineering program" loading="lazy"></div>
        <div class="uor-program-body">
          <p class="uor-program-tag">ADP / BS</p>
          <h3>Software Engineering</h3>
          <a href="#" class="uor-program-apply uor-dept-trigger" data-uor-program="Software Engineering">Apply Now <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a>
        </div>
      </div>
      <div class="uor-program-card">
        <div class="uor-program-media"><img src="https://www.uor.edu.pk/frontend/academics/img/program/ADP_EL.png" alt="English and Linguistic Studies program" loading="lazy"></div>
        <div class="uor-program-body">
          <p class="uor-program-tag">ADP / BS</p>
          <h3>English and Linguistic Studies</h3>
          <a href="#" class="uor-program-apply uor-dept-trigger" data-uor-program="English and Linguistic Studies">Apply Now <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     WHY CHOOSE US
     ============================================================ -->
<section class="uor-why">
  <div class="uor-container">
    <div class="uor-section-head uor-reveal">
      <p class="uor-eyebrow">Why UOR</p>
      <h2 class="uor-section-title">Why Choose Us?</h2>
      <p class="uor-section-sub">UOR is working to become a leading regional institution — here's what the university highlights about the journey.</p>
    </div>

    <!-- Item headings are the real 12 points from the source; descriptions
         are paraphrased in our own words. -->
    <div class="uor-why-list uor-reveal" id="uor-why-list">
      <div class="uor-why-item">
        <button type="button" class="uor-why-trigger" aria-expanded="false">
          <span class="uor-why-num">01</span>
          <span class="uor-why-heading">Innovative Curriculum</span>
          <span class="uor-why-plus"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M12 5v14M5 12h14"/></svg></span>
        </button>
        <div class="uor-why-panel"><p class="uor-why-panel-inner">A hands-on curriculum built around current technology and AI, aimed at giving students practical skills that match what employers are looking for.</p></div>
      </div>
      <div class="uor-why-item">
        <button type="button" class="uor-why-trigger" aria-expanded="false">
          <span class="uor-why-num">02</span>
          <span class="uor-why-heading">Strategic Location</span>
          <span class="uor-why-plus"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M12 5v14M5 12h14"/></svg></span>
        </button>
        <div class="uor-why-panel"><p class="uor-why-panel-inner">The campus sits on the main GT Road near DHA-1 in Rawalpindi, close to the city's cultural, historical and recreational spots.</p></div>
      </div>
      <div class="uor-why-item">
        <button type="button" class="uor-why-trigger" aria-expanded="false">
          <span class="uor-why-num">03</span>
          <span class="uor-why-heading">Vision for Global Collaboration</span>
          <span class="uor-why-plus"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M12 5v14M5 12h14"/></svg></span>
        </button>
        <div class="uor-why-panel"><p class="uor-why-panel-inner">UOR aims to build local and international partnerships that open up collaborative growth and cross-cultural experience for students.</p></div>
      </div>
      <div class="uor-why-item">
        <button type="button" class="uor-why-trigger" aria-expanded="false">
          <span class="uor-why-num">04</span>
          <span class="uor-why-heading">Commitment to Sustainability</span>
          <span class="uor-why-plus"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M12 5v14M5 12h14"/></svg></span>
        </button>
        <div class="uor-why-panel"><p class="uor-why-panel-inner">The university's future campus is being planned with sustainability in mind, including green technology and responsible building practices.</p></div>
      </div>
      <div class="uor-why-item">
        <button type="button" class="uor-why-trigger" aria-expanded="false">
          <span class="uor-why-num">05</span>
          <span class="uor-why-heading">Dynamic Community</span>
          <span class="uor-why-plus"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M12 5v14M5 12h14"/></svg></span>
        </button>
        <div class="uor-why-panel"><p class="uor-why-panel-inner">A diverse, inclusive campus culture with student organizations and extracurricular activities that build a sense of global citizenship.</p></div>
      </div>
      <div class="uor-why-item">
        <button type="button" class="uor-why-trigger" aria-expanded="false">
          <span class="uor-why-num">06</span>
          <span class="uor-why-heading">Entrepreneurial Spirit</span>
          <span class="uor-why-plus"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M12 5v14M5 12h14"/></svg></span>
        </button>
        <div class="uor-why-panel"><p class="uor-why-panel-inner">UOR encourages creativity and entrepreneurship, with future spaces planned specifically to support student-led ventures.</p></div>
      </div>
      <div class="uor-why-item">
        <button type="button" class="uor-why-trigger" aria-expanded="false">
          <span class="uor-why-num">07</span>
          <span class="uor-why-heading">Experienced Faculty</span>
          <span class="uor-why-plus"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M12 5v14M5 12h14"/></svg></span>
        </button>
        <div class="uor-why-panel"><p class="uor-why-panel-inner">Courses are taught by industry professionals and academics who bring both subject expertise and mentorship to the classroom.</p></div>
      </div>
      <div class="uor-why-item">
        <button type="button" class="uor-why-trigger" aria-expanded="false">
          <span class="uor-why-num">08</span>
          <span class="uor-why-heading">State-of-the-Art Facilities</span>
          <span class="uor-why-plus"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M12 5v14M5 12h14"/></svg></span>
        </button>
        <div class="uor-why-panel"><p class="uor-why-panel-inner">While the future campus will bring modern facilities, the current campus already supports the university's day-to-day academic needs.</p></div>
      </div>
      <div class="uor-why-item">
        <button type="button" class="uor-why-trigger" aria-expanded="false">
          <span class="uor-why-num">09</span>
          <span class="uor-why-heading">Career Opportunities</span>
          <span class="uor-why-plus"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M12 5v14M5 12h14"/></svg></span>
        </button>
        <div class="uor-why-panel"><p class="uor-why-panel-inner">Career services extend beyond graduation, with internships, job fairs and networking events connecting students to employers.</p></div>
      </div>
      <div class="uor-why-item">
        <button type="button" class="uor-why-trigger" aria-expanded="false">
          <span class="uor-why-num">10</span>
          <span class="uor-why-heading">Holistic Development</span>
          <span class="uor-why-plus"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M12 5v14M5 12h14"/></svg></span>
        </button>
        <div class="uor-why-panel"><p class="uor-why-panel-inner">Education at UOR reaches beyond academics, with extracurricular activities that give students room to explore new interests and skills.</p></div>
      </div>
      <div class="uor-why-item">
        <button type="button" class="uor-why-trigger" aria-expanded="false">
          <span class="uor-why-num">11</span>
          <span class="uor-why-heading">Supportive Community</span>
          <span class="uor-why-plus"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M12 5v14M5 12h14"/></svg></span>
        </button>
        <div class="uor-why-panel"><p class="uor-why-panel-inner">Comprehensive student services and counseling are part of a welcoming, inclusive community focused on student well-being.</p></div>
      </div>
      <div class="uor-why-item">
        <button type="button" class="uor-why-trigger" aria-expanded="false">
          <span class="uor-why-num">12</span>
          <span class="uor-why-heading">High-Quality Accommodation</span>
          <span class="uor-why-plus"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M12 5v14M5 12h14"/></svg></span>
        </button>
        <div class="uor-why-panel"><p class="uor-why-panel-inner">On-campus accommodation is available, with a particular focus on high-quality, safe and comfortable housing for female students.</p></div>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     NEWS & EVENTS
     ============================================================ -->
<section class="uor-news" id="uor-news">
  <div class="uor-container">
    <div class="uor-section-head uor-reveal">
      <p class="uor-eyebrow">Stay Updated</p>
      <h2 class="uor-section-title">News and Events</h2>
    </div>

    <!-- Images, titles and dates below are sourced directly from the live
         "News and Events" feed on uor.edu.pk; summaries are paraphrased. -->
    <div class="uor-news-grid uor-reveal">
      <a href="#" class="uor-news-card uor-featured">
        <div class="uor-news-media">
          <img src="https://www.uor.edu.pk/storage/News-and-Events/thumbnail/2026/08/uor-qec-conducts-workshop-on-responsible-ai-in-teaching-and-research-111786442404-769748.jpg" alt="UOR QEC workshop on responsible AI in teaching and research" loading="lazy">
          <span class="uor-news-tag">Event</span>
        </div>
        <div class="uor-news-body">
          <p class="uor-news-date">10 Aug 2026</p>
          <h3>UOR QEC Conducts Workshop on Responsible AI in Teaching and Research</h3>
          <p>UOR's Quality Enhancement Cell ran its second Faculty Development Program session on responsible AI, covering ethics, academic integrity and effective prompt writing.</p>
          <span class="uor-read-more">Read More <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span>
        </div>
      </a>

      <a href="#" class="uor-news-card">
        <div class="uor-news-media">
          <img src="https://www.uor.edu.pk/storage/News-and-Events/thumbnail/2026/08/university-of-rawalpindi-participates-in-regional-vice-chancellors-forum-at-air-university-081786172949-652705.jpg" alt="UOR at the Regional Vice Chancellors' Forum" loading="lazy">
          <span class="uor-news-tag">Event</span>
        </div>
        <div class="uor-news-body">
          <p class="uor-news-date">7 Aug 2026</p>
          <h3>UOR Joins the Regional Vice Chancellors' Forum at Air University</h3>
          <p>Higher-education leaders gathered to discuss collaboration, innovation, governance and academic excellence.</p>
          <span class="uor-read-more">Read More <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span>
        </div>
      </a>

      <a href="#" class="uor-news-card">
        <div class="uor-news-media">
          <img src="https://www.uor.edu.pk/storage/News-and-Events/thumbnail/2026/08/university-of-rawalpindi-organizes-faculty-development-workshop-on-generative-ai-for-teaching-and-presentation-design-081786170619-490105.jpg" alt="Faculty development workshop on generative AI" loading="lazy">
          <span class="uor-news-tag">Event</span>
        </div>
        <div class="uor-news-body">
          <p class="uor-news-date">6 Aug 2026</p>
          <h3>Faculty Workshop on Generative AI for Teaching and Presentation Design</h3>
          <p>A Faculty Development Program session focused on using generative AI tools for teaching materials and presentations.</p>
          <span class="uor-read-more">Read More <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span>
        </div>
      </a>

      <a href="#" class="uor-news-card">
        <div class="uor-news-media">
          <img src="https://www.uor.edu.pk/storage/News-and-Events/thumbnail/2026/08/university-of-rawalpindi-commemorates-youm-e-istehsal-e-kashmir-051785910297-675884.jpg" alt="UOR observes Youm-e-Istehsal-e-Kashmir" loading="lazy">
          <span class="uor-news-tag">Event</span>
        </div>
        <div class="uor-news-body">
          <p class="uor-news-date">5 Aug 2026</p>
          <h3>UOR Observes Youm-e-Istehsal-e-Kashmir</h3>
          <p>The university marked the day in solidarity with the people of Jammu &amp; Kashmir, reaffirming its commitment to peace and human dignity.</p>
          <span class="uor-read-more">Read More <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span>
        </div>
      </a>

      <a href="#" class="uor-news-card">
        <div class="uor-news-media">
          <img src="https://www.uor.edu.pk/storage/News-and-Events/thumbnail/2026/08/university-of-rawalpindi-participates-in-launch-of-comstech-ccoe-somalia-programme-031785732635-802780.jpg" alt="Launch of the COMSTECH-CCoE Somalia Programme" loading="lazy">
          <span class="uor-news-tag">Event</span>
        </div>
        <div class="uor-news-body">
          <p class="uor-news-date">31 Jul 2026</p>
          <h3>UOR at the Launch of the COMSTECH-CCoE Somalia Programme</h3>
          <p>UOR joined the second-phase launch at OIC-COMSTECH Islamabad, strengthening ties in research and capacity building with Somalia.</p>
          <span class="uor-read-more">Read More <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span>
        </div>
      </a>

      <a href="#" class="uor-news-card">
        <div class="uor-news-media">
          <img src="https://www.uor.edu.pk/storage/News-and-Events/thumbnail/2026/08/university-of-rawalpindi-partners-in-see-pakistan-regional-round-2026-to-foster-innovation-and-entrepreneurship-031785753534-575289.jpg" alt="SEE Pakistan Regional Round 2026 partnership" loading="lazy">
          <span class="uor-news-tag">Event</span>
        </div>
        <div class="uor-news-body">
          <p class="uor-news-date">30 Jul 2026</p>
          <h3>UOR Partners in SEE Pakistan Regional Round 2026</h3>
          <p>The university partnered with the regional round of SEE Pakistan 2026 to support student innovation and entrepreneurship.</p>
          <span class="uor-read-more">Read More <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span>
        </div>
      </a>
    </div>

    <div class="uor-news-viewall">
      <a href="#" class="uor-btn uor-btn-outline-blue">View All</a>
    </div>
  </div>
</section>

<!-- ============================================================
     APPLY CTA
     ============================================================ -->
<section class="uor-apply-cta">
  <div class="uor-container">
    <h2>Ready to Learn Boldly?</h2>
    <p>Take the next step toward a degree built around hands-on learning, technology and a growing global community.</p>
    <a href="#" class="uor-btn uor-btn-red uor-admission-trigger">Admission Now</a>
  </div>
</section>

<!-- ============================================================
     FOOTER
     ============================================================ -->
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
          <li><a href="/uor-fee-structure">Fee Structure</a></li>
          <li><a href="/uor-merit-list">Merit List</a></li>
          <li><a href="/uor-fee-chalan">Fee Chalan</a></li>
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

<!-- ============================================================
     ADMISSION INQUIRY MODAL
     ============================================================ -->
<div class="uor-modal-overlay" id="uor-admission-modal" role="dialog" aria-modal="true" aria-labelledby="uor-modal-title" aria-hidden="true">
  <div class="uor-modal-panel">
    <button type="button" class="uor-modal-close" id="uor-modal-close" aria-label="Close admission inquiry form">&times;</button>
    <div class="uor-modal-header">
      <p class="uor-eyebrow">Admissions</p>
      <h3 id="uor-modal-title">UOR Admission Inquiry</h3>
      <p class="uor-modal-sub">Share your details and we'll open WhatsApp with your inquiry ready to send to UOR admissions.</p>
    </div>

    <form id="uor-admission-form" novalidate>
      <div class="uor-modal-grid">
        <div class="uor-mfield uor-full" data-uor-field="name">
          <label for="uor-adm-name">Full Name</label>
          <input type="text" id="uor-adm-name" name="name" placeholder="e.g. Ayesha Khan" autocomplete="name">
          <span class="uor-mfield-error">Please enter your full name.</span>
        </div>
        <div class="uor-mfield" data-uor-field="phone">
          <label for="uor-adm-phone">Phone / WhatsApp Number</label>
          <input type="tel" id="uor-adm-phone" name="phone" placeholder="03XX XXXXXXX" autocomplete="tel">
          <span class="uor-mfield-error">Please enter a valid phone number.</span>
        </div>
        <div class="uor-mfield" data-uor-field="email">
          <label for="uor-adm-email">Email <span style="font-weight:500; color:var(--uor-ink-soft);">(optional)</span></label>
          <input type="email" id="uor-adm-email" name="email" placeholder="you@example.com" autocomplete="email">
          <span class="uor-mfield-error">Please enter a valid email address.</span>
        </div>
        <div class="uor-mfield" data-uor-field="city">
          <label for="uor-adm-city">City</label>
          <input type="text" id="uor-adm-city" name="city" placeholder="e.g. Rawalpindi" autocomplete="address-level2">
        </div>
        <div class="uor-mfield" data-uor-field="program">
          <label for="uor-adm-program">Program of Interest</label>
          <input type="text" id="uor-adm-program" name="program" placeholder="e.g. Business Administration">
          <span class="uor-mfield-error">Please tell us which program you're interested in.</span>
        </div>
        <div class="uor-mfield uor-full">
          <label for="uor-adm-message">Message <span style="font-weight:500; color:var(--uor-ink-soft);">(optional)</span></label>
          <textarea id="uor-adm-message" name="message" placeholder="Anything else you'd like us to know?"></textarea>
        </div>
      </div>
      <button type="submit" class="uor-btn uor-btn-red uor-btn-block" id="uor-adm-submit">Send via WhatsApp</button>
      <p class="uor-modal-note">This opens WhatsApp with your details pre-filled. No data is stored by this page.</p>
    </form>
  </div>
</div>

<!-- ============================================================
     PROGRAM/DEPARTMENT MULTI-STEP MODAL
     (Fee Structure → Application Form → Confirmation)
     ============================================================ -->
<div class="uor-dept-overlay" id="uor-dept-modal" role="dialog" aria-modal="true" aria-labelledby="uor-dept-title" aria-hidden="true">
  <div class="uor-dept-panel">
    <button type="button" class="uor-dept-close" id="uor-dept-close" aria-label="Close">&times;</button>

    <div class="uor-dept-steps" aria-hidden="true">
      <span class="uor-dept-step-dot uor-dept-step-active" data-uor-dept-dot="1"><span class="uor-num">1</span> Fee Structure</span>
      <span class="uor-dept-step-line"></span>
      <span class="uor-dept-step-dot" data-uor-dept-dot="2"><span class="uor-num">2</span> Application</span>
      <span class="uor-dept-step-line"></span>
      <span class="uor-dept-step-dot" data-uor-dept-dot="3"><span class="uor-num">3</span> Confirmation</span>
    </div>

    <div class="uor-dept-view uor-dept-view-active" data-uor-dept-view="1">
      <span class="uor-dept-program-tag" id="uor-dept-tag-1"></span>
      <div class="uor-dept-header">
        <h3 id="uor-dept-title">Fee Structure</h3>
        <p>A general overview before you apply. UOR updates its fee structure each academic year.</p>
      </div>
      <p class="uor-dept-fee-note">Exact tuition, admission and other fees are set and published by UOR and can change between intakes. Please confirm current figures on UOR's fee structure page or directly with the admissions office before applying.</p>
      <table class="uor-dept-fee-table">
        <tr><td>Tuition Fee</td><td>Confirm with UOR</td></tr>
        <tr><td>Admission / Processing Fee</td><td>Confirm with UOR</td></tr>
        <tr><td>Security Deposit</td><td>Confirm with UOR</td></tr>
        <tr><td>Scholarships &amp; Financial Aid</td><td>Ask admissions office</td></tr>
      </table>
      <div class="uor-dept-fee-actions">
        <a href="#" class="uor-btn uor-btn-outline-blue">View Fee Structure</a>
        <button type="button" class="uor-btn uor-btn-red" id="uor-dept-to-step2">Continue to Application</button>
      </div>
    </div>

    <div class="uor-dept-view" data-uor-dept-view="2">
      <span class="uor-dept-program-tag" id="uor-dept-tag-2"></span>
      <div class="uor-dept-header">
        <h3>Application Details</h3>
        <p>Share your details and this opens your email app with your application ready to send.</p>
      </div>
      <form id="uor-dept-form" novalidate>
        <div class="uor-modal-grid">
          <div class="uor-mfield uor-full" data-uor-dfield="name">
            <label for="uor-dept-name">Full Name</label>
            <input type="text" id="uor-dept-name" name="name" placeholder="e.g. Ayesha Khan" autocomplete="name">
            <span class="uor-mfield-error">Please enter your full name.</span>
          </div>
          <div class="uor-mfield" data-uor-dfield="phone">
            <label for="uor-dept-phone">Phone</label>
            <input type="tel" id="uor-dept-phone" name="phone" placeholder="03XX XXXXXXX" autocomplete="tel">
            <span class="uor-mfield-error">Please enter a valid phone number.</span>
          </div>
          <div class="uor-mfield" data-uor-dfield="email">
            <label for="uor-dept-email">Email</label>
            <input type="email" id="uor-dept-email" name="email" placeholder="you@example.com" autocomplete="email">
            <span class="uor-mfield-error">Please enter a valid email address.</span>
          </div>
          <div class="uor-mfield uor-full" data-uor-dfield="city">
            <label for="uor-dept-city">City</label>
            <input type="text" id="uor-dept-city" name="city" placeholder="e.g. Rawalpindi" autocomplete="address-level2">
          </div>
          <div class="uor-mfield uor-full">
            <label for="uor-dept-message">Message <span style="font-weight:500; color:var(--uor-ink-soft);">(optional)</span></label>
            <textarea id="uor-dept-message" name="message" placeholder="Anything else you'd like us to know?"></textarea>
          </div>
        </div>
        <div class="uor-dept-form-actions">
          <button type="button" class="uor-btn uor-btn-outline-blue" id="uor-dept-back-step1">Back</button>
          <button type="submit" class="uor-btn uor-btn-red" id="uor-dept-submit">Submit Application</button>
        </div>
      </form>
    </div>

    <div class="uor-dept-view" data-uor-dept-view="3">
      <div class="uor-dept-confirm">
        <div class="uor-check"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M5 13l4 4L19 7"/></svg></div>
        <h3>Application Ready to Send</h3>
        <p>Your email app should now open with your application pre-filled. If it didn't open automatically, use the email address below to send it yourself.</p>
        <div class="uor-dept-confirm-summary" id="uor-dept-summary"></div>
        <p class="uor-dept-fallback" id="uor-dept-fallback-email"></p>
        <button type="button" class="uor-btn uor-btn-outline-blue" id="uor-dept-done">Close</button>
      </div>
    </div>

  </div>
</div>

<!-- ============================================================
     QUICK APPLY MODAL (4-step: Program → Fee Structure → Application → Confirmation)
     ============================================================ -->
<div class="uor-qa-overlay" id="uor-qa-modal" role="dialog" aria-modal="true" aria-labelledby="uor-qa-title" aria-hidden="true">
  <div class="uor-qa-panel">
    <button type="button" class="uor-qa-close" id="uor-qa-close" aria-label="Close">&times;</button>

    <div class="uor-qa-steps" aria-hidden="true">
      <span class="uor-qa-step-dot uor-qa-step-active" data-uor-qa-dot="program"><span class="uor-qa-num">1</span> Program</span>
      <span class="uor-qa-step-line"></span>
      <span class="uor-qa-step-dot" data-uor-qa-dot="fee"><span class="uor-qa-num">2</span> Fee</span>
      <span class="uor-qa-step-line"></span>
      <span class="uor-qa-step-dot" data-uor-qa-dot="form"><span class="uor-qa-num">3</span> Application</span>
      <span class="uor-qa-step-line"></span>
      <span class="uor-qa-step-dot" data-uor-qa-dot="confirm"><span class="uor-qa-num">4</span> Confirmation</span>
    </div>

    <!-- STEP 1: SELECT PROGRAM -->
    <div class="uor-qa-view uor-qa-view-active" data-uor-qa-view="program">
      <div class="uor-qa-header">
        <h3 id="uor-qa-title">Select a Program</h3>
        <p>Choose the UOR program you'd like to apply to.</p>
      </div>
      <div class="uor-qa-program-list" id="uor-qa-program-list" role="radiogroup" aria-label="Select a program"></div>
      <button type="button" class="uor-btn uor-btn-red uor-btn-block" id="uor-qa-to-fee" disabled>Continue to Fee Structure</button>
    </div>

    <!-- STEP 2: FEE STRUCTURE -->
    <div class="uor-qa-view" data-uor-qa-view="fee">
      <div class="uor-qa-header">
        <h3>Fee Structure</h3>
        <p id="uor-qa-fee-program-label"></p>
      </div>
      <p class="uor-qa-fee-note">Exact fees are set and published by UOR and can change between intakes. Select your seat category below — confirm the exact amount with UOR admissions before applying.</p>
      <div class="uor-qa-fee-options" id="uor-qa-fee-options" role="radiogroup" aria-label="Select your fee category"></div>
      <div class="uor-qa-form-actions">
        <button type="button" class="uor-btn uor-btn-outline-blue" id="uor-qa-back-program">Back</button>
        <button type="button" class="uor-btn uor-btn-red" id="uor-qa-to-form" disabled>Continue to Application</button>
      </div>
    </div>

    <!-- STEP 3: APPLICATION FORM -->
    <div class="uor-qa-view" data-uor-qa-view="form">
      <div class="uor-qa-header">
        <h3>Application Details</h3>
        <p>Fill in your details below. Your application is sent directly by email to our admissions team.</p>
      </div>
      <form id="uor-qa-form" novalidate>
        <div class="uor-modal-grid">
          <div class="uor-mfield" data-uor-qafield="name">
            <label for="uor-qa-name">Full Name</label>
            <input type="text" id="uor-qa-name" name="name" placeholder="e.g. Ayesha Khan" autocomplete="name">
            <span class="uor-mfield-error">Please enter your full name.</span>
          </div>
          <div class="uor-mfield" data-uor-qafield="father">
            <label for="uor-qa-father">Father's Name</label>
            <input type="text" id="uor-qa-father" name="father" placeholder="e.g. Muhammad Khan" autocomplete="off">
            <span class="uor-mfield-error">Please enter your father's name.</span>
          </div>
          <div class="uor-mfield" data-uor-qafield="cnic">
            <label for="uor-qa-cnic">CNIC / B-Form Number</label>
            <input type="text" id="uor-qa-cnic" name="cnic" placeholder="XXXXX-XXXXXXX-X" autocomplete="off">
            <span class="uor-mfield-error">Please enter your CNIC or B-Form number.</span>
          </div>
          <div class="uor-mfield" data-uor-qafield="phone">
            <label for="uor-qa-phone">Phone</label>
            <input type="tel" id="uor-qa-phone" name="phone" placeholder="03XX XXXXXXX" autocomplete="tel">
            <span class="uor-mfield-error">Please enter a valid phone number.</span>
          </div>
          <div class="uor-mfield" data-uor-qafield="email">
            <label for="uor-qa-email">Email</label>
            <input type="email" id="uor-qa-email" name="email" placeholder="you@example.com" autocomplete="email">
            <span class="uor-mfield-error">Please enter a valid email address.</span>
          </div>
          <div class="uor-mfield" data-uor-qafield="city">
            <label for="uor-qa-city">City</label>
            <input type="text" id="uor-qa-city" name="city" placeholder="e.g. Rawalpindi" autocomplete="address-level2">
            <span class="uor-mfield-error">Please enter your city.</span>
          </div>
          <div class="uor-mfield" data-uor-qafield="matricRoll">
            <label for="uor-qa-matric-roll">Matriculation Roll Number</label>
            <input type="text" id="uor-qa-matric-roll" name="matricRoll" placeholder="e.g. 123456" autocomplete="off">
            <span class="uor-mfield-error">Please enter your matriculation roll number.</span>
          </div>
          <div class="uor-mfield" data-uor-qafield="matricPct">
            <label for="uor-qa-matric-pct">Matriculation Percentage</label>
            <input type="text" id="uor-qa-matric-pct" name="matricPct" placeholder="e.g. 85%" autocomplete="off">
            <span class="uor-mfield-error">Please enter your matriculation percentage.</span>
          </div>
          <div class="uor-mfield" data-uor-qafield="interRoll">
            <label for="uor-qa-inter-roll">Intermediate Roll Number</label>
            <input type="text" id="uor-qa-inter-roll" name="interRoll" placeholder="e.g. 654321" autocomplete="off">
            <span class="uor-mfield-error">Please enter your intermediate roll number.</span>
          </div>
          <div class="uor-mfield" data-uor-qafield="interPct">
            <label for="uor-qa-inter-pct">Intermediate Percentage</label>
            <input type="text" id="uor-qa-inter-pct" name="interPct" placeholder="e.g. 78%" autocomplete="off">
            <span class="uor-mfield-error">Please enter your intermediate percentage.</span>
          </div>
          <div class="uor-mfield uor-full">
            <label for="uor-qa-message">Message <span style="font-weight:500; color:var(--uor-ink-soft);">(optional)</span></label>
            <textarea id="uor-qa-message" name="message" placeholder="Anything else you'd like us to know?"></textarea>
          </div>
        </div>
        <div class="uor-qa-form-actions">
          <button type="button" class="uor-btn uor-btn-outline-blue" id="uor-qa-back-fee">Back</button>
          <button type="submit" class="uor-btn uor-btn-red" id="uor-qa-submit">Submit Application</button>
        </div>
      </form>
    </div>

    <!-- STEP 4: CONFIRMATION -->
    <div class="uor-qa-view" data-uor-qa-view="confirm">
      <div class="uor-qa-confirm">
        <div class="uor-check"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M5 13l4 4L19 7"/></svg></div>
        <h3>Application Sent</h3>
        <p>Your email app should now open with your application pre-filled and addressed to info@eduapply.online. If it didn't open automatically, please send your details there directly.</p>
        <div class="uor-qa-confirm-summary" id="uor-qa-confirm-summary"></div>
        <button type="button" class="uor-btn uor-btn-outline-blue" id="uor-qa-done" style="margin-top:16px;">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- ============================================================
     WELCOME / ADMISSION ANNOUNCEMENT POPUP (auto-shows once per session)
     ============================================================ -->
<div class="uor-welcome-overlay" id="uor-welcome-modal" role="dialog" aria-modal="true" aria-label="UOR Admissions" aria-hidden="true">
  <div class="uor-welcome-panel">
    <button type="button" class="uor-welcome-close" id="uor-welcome-close" aria-label="Close">&times;</button>
    <button type="button" class="uor-welcome-image uor-quickapply-trigger" id="uor-welcome-apply" aria-label="Apply Now at UOR">
      <!-- TODO: replace with official UOR photography — dummy stock placeholder for now -->
      <img src="https://images.unsplash.com/photo-1523580494863-6f3031224c94?auto=format&fit=crop&w=900&q=75" alt="UOR admissions — click to apply now">
    </button>
  </div>
</div>
</div><!-- /#uor-page -->

<script>
var uorHomepage = (function(){
  "use strict";

  function uorInit(){
    uorSetupMobileNav();
    uorSetupSmoothScroll();
    uorSetupWhyAccordion();
    uorSetupScrollReveal();
    uorSetupAdmissionModal();
    uorSetupDeptModal();
    uorSetupNotifyBar();
    uorSetupQuickApply();
    uorSetupWelcomePopup();
  }

  /* ============================================================
     ADMISSION DATES — configurable placeholder until UOR supplies
     verified dates.
     ============================================================ */
  // TODO: replace with UOR's verified admission dates.
  var uorAdmissionInfo = {
    lastDateToApply: "Contact Admissions Office for Current Dates",
    entryTestDate: "Contact Admissions Office for Current Dates"
  };
  var uorQuickApplyEmail = "info@eduapply.online";
  var uorQuickApplyBound = false;
  var uorQaSelectedProgram = null;
  var uorQaSelectedFee = null;

  // Real UOR programs, matching the "Explore Our Programs" section on this page.
  var uorPrograms = [
    "Business Administration",
    "Doctor of Pharmacy (Pharm-D)",
    "Accounting and Finance",
    "Media and Communication Studies",
    "Digital Design and Computer Arts",
    "Interior Design",
    "Islamic Sciences",
    "Psychology",
    "Computer Science",
    "Software Engineering",
    "English and Linguistic Studies"
  ];
  // Generic, non-fabricated fee categories used across Pakistani university
  // admissions. No specific amounts are shown — only UOR admissions can
  // confirm exact figures.
  var uorFeeCategories = [
    { key:"regular", title:"Regular / Merit Seat", amount:"Confirm with UOR" },
    { key:"selffinance", title:"Self-Finance Seat", amount:"Confirm with UOR" }
  ];

  function uorSetupNotifyBar(){
    var lastDateEl = document.getElementById("uor-notify-lastdate");
    var entryTestEl = document.getElementById("uor-notify-entrytest");
    if(lastDateEl) lastDateEl.textContent = uorAdmissionInfo.lastDateToApply;
    if(entryTestEl) entryTestEl.textContent = uorAdmissionInfo.entryTestDate;
  }

  /* ---------- QUICK APPLY MODAL (4-step: Program → Fee → Application → Confirmation) ---------- */
  function uorQuickApplyGoTo(view){
    document.querySelectorAll("#uor-page .uor-qa-view").forEach(function(v){
      v.classList.toggle("uor-qa-view-active", v.getAttribute("data-uor-qa-view") === view);
    });
    document.querySelectorAll("#uor-page .uor-qa-step-dot").forEach(function(dot){
      var order = ["program","fee","form","confirm"];
      var dotStep = dot.getAttribute("data-uor-qa-dot");
      dot.classList.toggle("uor-qa-step-active", dotStep === view);
      dot.classList.toggle("uor-qa-step-done", order.indexOf(dotStep) < order.indexOf(view));
    });
  }

  function uorRenderProgramList(){
    var list = document.getElementById("uor-qa-program-list");
    if(!list) return;
    list.innerHTML = uorPrograms.map(function(p, i){
      return '<label class="uor-qa-program-opt" data-uor-qa-program="' + i + '">' +
        '<input type="radio" name="uorQaProgram" value="' + i + '">' +
        '<span>' + p + '</span></label>';
    }).join("");

    list.querySelectorAll(".uor-qa-program-opt").forEach(function(opt){
      opt.addEventListener("click", function(){
        list.querySelectorAll(".uor-qa-program-opt").forEach(function(o){ o.classList.remove("uor-qa-selected"); });
        opt.classList.add("uor-qa-selected");
        opt.querySelector("input").checked = true;
        uorQaSelectedProgram = uorPrograms[parseInt(opt.getAttribute("data-uor-qa-program"), 10)];
        var toFeeBtn = document.getElementById("uor-qa-to-fee");
        if(toFeeBtn) toFeeBtn.disabled = false;
      });
    });
  }

  function uorRenderFeeOptions(){
    var wrap = document.getElementById("uor-qa-fee-options");
    var label = document.getElementById("uor-qa-fee-program-label");
    if(label) label.textContent = uorQaSelectedProgram || "";
    if(!wrap) return;
    wrap.innerHTML = uorFeeCategories.map(function(f, i){
      return '<label class="uor-qa-fee-opt" data-uor-qa-fee="' + i + '">' +
        '<span class="uor-qa-fee-opt-left"><input type="radio" name="uorQaFee" value="' + i + '"><span class="uor-qa-fee-opt-title">' + f.title + '</span></span>' +
        '<span class="uor-qa-fee-opt-amount">' + f.amount + '</span></label>';
    }).join("");

    wrap.querySelectorAll(".uor-qa-fee-opt").forEach(function(opt){
      opt.addEventListener("click", function(){
        wrap.querySelectorAll(".uor-qa-fee-opt").forEach(function(o){ o.classList.remove("uor-qa-selected"); });
        opt.classList.add("uor-qa-selected");
        opt.querySelector("input").checked = true;
        uorQaSelectedFee = uorFeeCategories[parseInt(opt.getAttribute("data-uor-qa-fee"), 10)].title;
        var toFormBtn = document.getElementById("uor-qa-to-form");
        if(toFormBtn) toFormBtn.disabled = false;
      });
    });
  }

  function uorOpenQuickApply(){
    var overlay = document.getElementById("uor-qa-modal");
    if(!overlay) return;
    var form = document.getElementById("uor-qa-form");
    if(form) form.reset();
    document.querySelectorAll("#uor-qa-form .uor-mfield").forEach(function(f){ f.classList.remove("uor-merror"); });

    uorQaSelectedProgram = null;
    uorQaSelectedFee = null;
    var toFeeBtn = document.getElementById("uor-qa-to-fee");
    var toFormBtn = document.getElementById("uor-qa-to-form");
    if(toFeeBtn) toFeeBtn.disabled = true;
    if(toFormBtn) toFormBtn.disabled = true;

    uorRenderProgramList();
    uorQuickApplyGoTo("program");
    overlay.classList.add("uor-qa-open");
    overlay.setAttribute("aria-hidden", "false");
    document.body.style.overflow = "hidden";
  }
  function uorCloseQuickApply(){
    var overlay = document.getElementById("uor-qa-modal");
    if(!overlay) return;
    overlay.classList.remove("uor-qa-open");
    overlay.setAttribute("aria-hidden", "true");
    document.body.style.overflow = "";
  }

  function uorSetupQuickApply(){
    if(uorQuickApplyBound) return;
    uorQuickApplyBound = true;

    var overlay = document.getElementById("uor-qa-modal");
    var closeBtn = document.getElementById("uor-qa-close");
    var doneBtn = document.getElementById("uor-qa-done");
    var form = document.getElementById("uor-qa-form");
    var toFeeBtn = document.getElementById("uor-qa-to-fee");
    var toFormBtn = document.getElementById("uor-qa-to-form");
    var backProgramBtn = document.getElementById("uor-qa-back-program");
    var backFeeBtn = document.getElementById("uor-qa-back-fee");
    if(!overlay || !closeBtn || !form) return;

    document.querySelectorAll("#uor-page .uor-quickapply-trigger").forEach(function(trigger){
      trigger.addEventListener("click", function(e){
        e.preventDefault();
        window.location.href = "/admissions/apply?university=UOR";
      });
    });

    closeBtn.addEventListener("click", uorCloseQuickApply);
    if(doneBtn) doneBtn.addEventListener("click", uorCloseQuickApply);
    overlay.addEventListener("click", function(e){ if(e.target === overlay) uorCloseQuickApply(); });
    document.addEventListener("keydown", function(e){
      if(e.key === "Escape" && overlay.classList.contains("uor-qa-open")) uorCloseQuickApply();
    });

    if(toFeeBtn) toFeeBtn.addEventListener("click", function(){
      if(!uorQaSelectedProgram) return;
      uorRenderFeeOptions();
      uorQuickApplyGoTo("fee");
    });
    if(backProgramBtn) backProgramBtn.addEventListener("click", function(){ uorQuickApplyGoTo("program"); });
    if(toFormBtn) toFormBtn.addEventListener("click", function(){
      if(!uorQaSelectedFee) return;
      uorQuickApplyGoTo("form");
    });
    if(backFeeBtn) backFeeBtn.addEventListener("click", function(){ uorQuickApplyGoTo("fee"); });

    function setError(fieldEl, hasError){ if(fieldEl) fieldEl.classList.toggle("uor-merror", hasError); }
    function isValidEmail(v){ return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(v); }
    function isValidPhone(v){ var d = v.replace(/[^\d]/g,""); return d.length >= 10 && d.length <= 13; }
    function req(field, value, minLen){
      var el = form.querySelector('[data-uor-qafield="' + field + '"]');
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

      var phoneField = form.querySelector('[data-uor-qafield="phone"]');
      if(!isValidPhone(form.phone.value.trim())){ setError(phoneField, true); valid = false; } else { setError(phoneField, false); }

      var emailField = form.querySelector('[data-uor-qafield="email"]');
      if(!isValidEmail(form.email.value.trim())){ setError(emailField, true); valid = false; } else { setError(emailField, false); }

      if(!req("city", form.city.value, 2)) valid = false;
      if(!req("matricRoll", form.matricRoll.value, 1)) valid = false;
      if(!req("matricPct", form.matricPct.value, 1)) valid = false;
      if(!req("interRoll", form.interRoll.value, 1)) valid = false;
      if(!req("interPct", form.interPct.value, 1)) valid = false;

      if(!valid){
        var firstError = form.querySelector(".uor-mfield.uor-merror");
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

      var subject = "Admission Application — UOR (" + uorQaSelectedProgram + ")";
      var bodyLines = [
        "University: University of Rawalpindi",
        "Program: " + uorQaSelectedProgram,
        "Fee Category: " + uorQaSelectedFee,
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
      var mailtoUrl = "mailto:" + encodeURIComponent(uorQuickApplyEmail) + "?subject=" + encodeURIComponent(subject) + "&body=" + encodeURIComponent(bodyLines.join("\n"));

      window.location.href = mailtoUrl;

      var summaryEl = document.getElementById("uor-qa-confirm-summary");
      if(summaryEl){
        summaryEl.innerHTML =
          "<div><strong>Program:</strong> " + uorQaSelectedProgram + "</div>" +
          "<div><strong>Fee Category:</strong> " + uorQaSelectedFee + "</div>" +
          "<div><strong>Name:</strong> " + name + "</div>" +
          "<div><strong>Phone:</strong> " + phone + "</div>" +
          "<div><strong>Email:</strong> " + email + "</div>";
      }

      uorQuickApplyGoTo("confirm");
    });
  }

  /* ---------- WELCOME / ADMISSION POPUP (shows once per browser session) ---------- */
  function uorCloseWelcomePopup(){
    var overlay = document.getElementById("uor-welcome-modal");
    if(!overlay) return;
    overlay.classList.remove("uor-welcome-open");
    overlay.setAttribute("aria-hidden", "true");
    document.body.style.overflow = "";
  }
  function uorSetupWelcomePopup(){
    var overlay = document.getElementById("uor-welcome-modal");
    var closeBtn = document.getElementById("uor-welcome-close");
    var lastDateEl = document.getElementById("uor-welcome-lastdate");
    var entryTestEl = document.getElementById("uor-welcome-entrytest");
    if(!overlay || !closeBtn) return;

    if(lastDateEl) lastDateEl.textContent = uorAdmissionInfo.lastDateToApply;
    if(entryTestEl) entryTestEl.textContent = uorAdmissionInfo.entryTestDate;

    closeBtn.addEventListener("click", uorCloseWelcomePopup);
    overlay.addEventListener("click", function(e){ if(e.target === overlay) uorCloseWelcomePopup(); });
    document.addEventListener("keydown", function(e){
      if(e.key === "Escape" && overlay.classList.contains("uor-welcome-open")) uorCloseWelcomePopup();
    });

    var SESSION_KEY = "ccxSeenUorWelcome";
    var alreadyShown = false;
    try { alreadyShown = window.sessionStorage.getItem(SESSION_KEY) === "1"; } catch(err){ alreadyShown = false; }

    if(!alreadyShown){
      window.setTimeout(function(){
        overlay.classList.add("uor-welcome-open");
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
  // TODO: replace with UOR's real admissions email before going live.
  var uorDeptEmail = "";
  var uorDeptFallbackEmail = "admissions@example.com";
  var uorDeptCurrent = null;

  function uorDeptGoToStep(step){
    document.querySelectorAll("#uor-page .uor-dept-view").forEach(function(view){
      view.classList.toggle("uor-dept-view-active", view.getAttribute("data-uor-dept-view") === String(step));
    });
    document.querySelectorAll("#uor-page .uor-dept-step-dot").forEach(function(dot){
      var dotStep = parseInt(dot.getAttribute("data-uor-dept-dot"), 10);
      dot.classList.toggle("uor-dept-step-active", dotStep === step);
      dot.classList.toggle("uor-dept-step-done", dotStep < step);
    });
  }

  function uorOpenDeptModal(programName){
    var overlay = document.getElementById("uor-dept-modal");
    if(!overlay) return;
    uorDeptCurrent = { program: programName };

    var tag1 = document.getElementById("uor-dept-tag-1");
    var tag2 = document.getElementById("uor-dept-tag-2");
    if(tag1) tag1.textContent = programName + " · UOR";
    if(tag2) tag2.textContent = programName + " · UOR";

    var form = document.getElementById("uor-dept-form");
    if(form) form.reset();
    document.querySelectorAll("#uor-dept-form .uor-mfield").forEach(function(f){ f.classList.remove("uor-merror"); });

    uorDeptGoToStep(1);
    overlay.classList.add("uor-dept-open");
    overlay.setAttribute("aria-hidden", "false");
    document.body.style.overflow = "hidden";
  }
  function uorCloseDeptModal(){
    var overlay = document.getElementById("uor-dept-modal");
    if(!overlay) return;
    overlay.classList.remove("uor-dept-open");
    overlay.setAttribute("aria-hidden", "true");
    document.body.style.overflow = "";
  }

  function uorSetupDeptModal(){
    var overlay = document.getElementById("uor-dept-modal");
    var closeBtn = document.getElementById("uor-dept-close");
    var toStep2 = document.getElementById("uor-dept-to-step2");
    var backStep1 = document.getElementById("uor-dept-back-step1");
    var doneBtn = document.getElementById("uor-dept-done");
    var form = document.getElementById("uor-dept-form");
    if(!overlay || !closeBtn || !form) return;

    document.querySelectorAll("#uor-page .uor-dept-trigger").forEach(function(trigger){
      trigger.addEventListener("click", function(e){
        e.preventDefault();
        var programName = trigger.getAttribute("data-uor-program") || "Program";
        window.location.href = "/admissions/apply?university=UOR&program=" + encodeURIComponent(programName);
      });
    });

    closeBtn.addEventListener("click", uorCloseDeptModal);
    if(doneBtn) doneBtn.addEventListener("click", uorCloseDeptModal);
    overlay.addEventListener("click", function(e){ if(e.target === overlay) uorCloseDeptModal(); });
    document.addEventListener("keydown", function(e){
      if(e.key === "Escape" && overlay.classList.contains("uor-dept-open")) uorCloseDeptModal();
    });
    if(toStep2) toStep2.addEventListener("click", function(){ uorDeptGoToStep(2); });
    if(backStep1) backStep1.addEventListener("click", function(){ uorDeptGoToStep(1); });

    function setError(fieldEl, hasError){ if(fieldEl) fieldEl.classList.toggle("uor-merror", hasError); }
    function isValidEmail(v){ return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(v); }
    function isValidPhone(v){ var d = v.replace(/[^\d]/g,""); return d.length >= 10 && d.length <= 13; }

    form.addEventListener("submit", function(e){
      e.preventDefault();
      var valid = true;

      var name = form.name.value.trim();
      var nameField = form.querySelector('[data-uor-dfield="name"]');
      if(name.length < 2){ setError(nameField, true); valid = false; } else { setError(nameField, false); }

      var phone = form.phone.value.trim();
      var phoneField = form.querySelector('[data-uor-dfield="phone"]');
      if(!isValidPhone(phone)){ setError(phoneField, true); valid = false; } else { setError(phoneField, false); }

      var email = form.email.value.trim();
      var emailField = form.querySelector('[data-uor-dfield="email"]');
      if(!isValidEmail(email)){ setError(emailField, true); valid = false; } else { setError(emailField, false); }

      var city = form.city.value.trim();
      var message = form.message.value.trim();

      if(!valid){
        var firstError = form.querySelector(".uor-mfield.uor-merror");
        if(firstError){ firstError.scrollIntoView({behavior:"smooth", block:"center"}); }
        return;
      }

      var info = uorDeptCurrent || { program:"" };
      var destEmail = uorDeptEmail || uorDeptFallbackEmail;
      var subject = "Admission Application — " + info.program + " (UOR)";
      var bodyLines = ["Program: " + info.program, "University: University of Rawalpindi", "Name: " + name, "Phone: " + phone, "Email: " + email];
      if(city) bodyLines.push("City: " + city);
      if(message) bodyLines.push("Message: " + message);
      var mailtoUrl = "mailto:" + encodeURIComponent(destEmail) + "?subject=" + encodeURIComponent(subject) + "&body=" + encodeURIComponent(bodyLines.join("\n"));

      window.location.href = mailtoUrl;

      var summaryEl = document.getElementById("uor-dept-summary");
      if(summaryEl){
        summaryEl.innerHTML =
          "<div><strong>Program:</strong> " + info.program + "</div>" +
          "<div><strong>Name:</strong> " + name + "</div>" +
          "<div><strong>Phone:</strong> " + phone + "</div>" +
          "<div><strong>Email:</strong> " + email + "</div>";
      }
      var fallbackEl = document.getElementById("uor-dept-fallback-email");
      if(fallbackEl) fallbackEl.textContent = "Send to: " + destEmail;

      uorDeptGoToStep(3);
    });
  }


  function uorSetupAdmissionModal(){
    var overlay = document.getElementById("uor-admission-modal");
    var closeBtn = document.getElementById("uor-modal-close");
    var form = document.getElementById("uor-admission-form");
    if(!overlay || !closeBtn || !form) return;

    // TODO: set UOR's real WhatsApp/admissions helpline number before going live
    var uorAdmissionWhatsapp = "";

    function uorOpenModal(prefill){
      overlay.classList.add("uor-modal-open");
      overlay.setAttribute("aria-hidden", "false");
      document.body.style.overflow = "hidden";
      if(prefill && prefill.program) form.program.value = prefill.program;
      window.setTimeout(function(){ form.name.focus(); }, 250);
    }
    function uorCloseModal(){
      overlay.classList.remove("uor-modal-open");
      overlay.setAttribute("aria-hidden", "true");
      document.body.style.overflow = "";
    }

    document.querySelectorAll("#uor-page .uor-admission-trigger").forEach(function(trigger){
      trigger.addEventListener("click", function(e){
        e.preventDefault();
        window.location.href = "/admissions/apply?university=UOR";
      });
    });

    closeBtn.addEventListener("click", uorCloseModal);
    overlay.addEventListener("click", function(e){ if(e.target === overlay) uorCloseModal(); });
    document.addEventListener("keydown", function(e){
      if(e.key === "Escape" && overlay.classList.contains("uor-modal-open")) uorCloseModal();
    });

    function setError(fieldEl, hasError){ if(fieldEl) fieldEl.classList.toggle("uor-merror", hasError); }
    function isValidEmail(v){ return v === "" || /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(v); }
    function isValidPhone(v){ var d = v.replace(/[^\d]/g,""); return d.length >= 10 && d.length <= 13; }

    form.addEventListener("submit", function(e){
      e.preventDefault();
      var valid = true;

      var name = form.name.value.trim();
      var nameField = form.querySelector('[data-uor-field="name"]');
      if(name.length < 2){ setError(nameField, true); valid = false; } else { setError(nameField, false); }

      var phone = form.phone.value.trim();
      var phoneField = form.querySelector('[data-uor-field="phone"]');
      if(!isValidPhone(phone)){ setError(phoneField, true); valid = false; } else { setError(phoneField, false); }

      var email = form.email.value.trim();
      var emailField = form.querySelector('[data-uor-field="email"]');
      if(!isValidEmail(email)){ setError(emailField, true); valid = false; } else { setError(emailField, false); }

      var city = form.city.value.trim();

      var program = form.program.value.trim();
      var programField = form.querySelector('[data-uor-field="program"]');
      if(program.length < 2){ setError(programField, true); valid = false; } else { setError(programField, false); }

      var message = form.message.value.trim();

      if(!valid){
        var firstError = form.querySelector(".uor-mfield.uor-merror");
        if(firstError){ firstError.scrollIntoView({behavior:"smooth", block:"center"}); }
        return;
      }

      var lines = [
        "Hello, I would like to apply for admission at UOR.",
        "Name: " + name,
        "Phone: " + phone
      ];
      if(email) lines.push("Email: " + email);
      if(city) lines.push("City: " + city);
      lines.push("Program of Interest: " + program);
      if(message) lines.push("Message: " + message);

      var waBase = uorAdmissionWhatsapp ? ("https://wa.me/" + uorAdmissionWhatsapp) : "https://wa.me/";
      var waUrl = waBase + "?text=" + encodeURIComponent(lines.join("\n"));

      window.open(waUrl, "_blank", "noopener");
      uorCloseModal();
      form.reset();
    });
  }

  function uorSetupMobileNav(){
    var btn = document.getElementById("uor-hamburger-btn");
    var nav = document.getElementById("uor-mobile-nav");
    if(!btn || !nav) return;
    btn.addEventListener("click", function(){
      var isOpen = nav.classList.toggle("uor-open");
      btn.classList.toggle("uor-active", isOpen);
      btn.setAttribute("aria-expanded", isOpen ? "true" : "false");
    });
  }

  function uorSetupSmoothScroll(){
    document.querySelectorAll('#uor-page a[data-uor-scroll]').forEach(function(link){
      var targetSel = link.getAttribute("data-uor-scroll");
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

  function uorSetupWhyAccordion(){
    var list = document.getElementById("uor-why-list");
    if(!list) return;
    var items = list.querySelectorAll(".uor-why-item");

    items.forEach(function(item){
      var trigger = item.querySelector(".uor-why-trigger");
      var panel = item.querySelector(".uor-why-panel");
      trigger.addEventListener("click", function(){
        var isOpen = item.classList.contains("uor-open");
        items.forEach(function(other){
          other.classList.remove("uor-open");
          other.querySelector(".uor-why-trigger").setAttribute("aria-expanded", "false");
          other.querySelector(".uor-why-panel").style.maxHeight = null;
        });
        if(!isOpen){
          item.classList.add("uor-open");
          trigger.setAttribute("aria-expanded", "true");
          panel.style.maxHeight = panel.scrollHeight + "px";
        }
      });
    });

    // Open the first item by default, matching a typical accordion first-state.
    var first = items[0];
    if(first){
      first.classList.add("uor-open");
      first.querySelector(".uor-why-trigger").setAttribute("aria-expanded", "true");
      var firstPanel = first.querySelector(".uor-why-panel");
      firstPanel.style.maxHeight = firstPanel.scrollHeight + "px";
    }
  }

  function uorSetupScrollReveal(){
    var els = document.querySelectorAll("#uor-page .uor-reveal");
    if(!els.length) return;
    if("IntersectionObserver" in window){
      var io = new IntersectionObserver(function(entries){
        entries.forEach(function(entry){
          if(entry.isIntersecting){
            entry.target.classList.add("uor-in");
            io.unobserve(entry.target);
          }
        });
      }, {threshold:0.1, rootMargin:"0px 0px -60px 0px"});
      els.forEach(function(el){ io.observe(el); });
    } else {
      els.forEach(function(el){ el.classList.add("uor-in"); });
    }
  }

  return { init: uorInit };
})();

if(document.readyState === "loading"){
  document.addEventListener("DOMContentLoaded", uorHomepage.init);
} else {
  uorHomepage.init();
}
</script>

<?php wp_footer(); ?>
</body>
</html>
