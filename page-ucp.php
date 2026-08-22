<?php
/**
 * Template Name: EduApply — UCP
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>University of Central Punjab — UCP</title>
<meta name="description" content="University of Central Punjab (UCP) — official-style homepage reproduction: academics, admissions, faculties and campus life." />

<!--
  This page is a standalone reproduction of the UCP homepage only (/ucp route).
  It is namespaced with a "ucp-" prefix on every class/ID and scoped under
  #ucp-page so it can sit next to other pages (the campaign index, other
  university pages) without any CSS/JS collisions.

  PLACEHOLDER ASSETS: the crest/logo mark, the chairman portrait, and the two
  named alumni/faculty thumbnails in "In the Moment" are built as simple
  placeholder marks (not real photos of the named individuals) since no
  authorized UCP logo file or official photo asset was supplied. Swap the
  elements marked "TODO: replace with official asset" for the real files
  before launch. Scene photography (lab, meeting room, campus, clocktower)
  uses temporary stock imagery in the same spirit, structured so it drops
  in cleanly once official photography is available.
-->

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
#ucp-page .ucp-hero-heading-wrap{position:relative; min-height:1.05em; margin-bottom:26px;}
#ucp-page .ucp-hero-heading{
  font-family:var(--ucp-font-display);
  font-weight:700;
  font-size:clamp(46px,9vw,110px);
  line-height:0.95;
  letter-spacing:0.01em;
  color:#fff;
  text-transform:uppercase;
  text-shadow:0 4px 18px rgba(0,0,0,0.35);
  position:absolute; left:0; top:0; right:0;
  opacity:0; transform:translateY(14px);
  transition:opacity .5s ease, transform .5s ease;
  pointer-events:none;
}
#ucp-page .ucp-hero-heading.ucp-active{opacity:1; transform:translateY(0); position:relative; pointer-events:auto;}

/* ---- Slider frame ---- */
#ucp-page .ucp-hero-frame{
  border:5px solid var(--ucp-gold);
  border-radius:4px;
  overflow:hidden;
  box-shadow:var(--ucp-shadow-l);
  position:relative;
}
#ucp-page .ucp-hero-slides{
  position:relative;
  height:clamp(240px,46vw,540px);
}
#ucp-page .ucp-hero-slide{
  position:absolute; inset:0;
  opacity:0; visibility:hidden;
  transition:opacity 1s ease;
}
#ucp-page .ucp-hero-slide.ucp-active{opacity:1; visibility:visible; z-index:1;}
#ucp-page .ucp-hero-slide img{
  width:100%; height:100%; object-fit:cover; display:block;
}

/* ---- Slider controls ---- */
#ucp-page .ucp-hero-arrow{
  position:absolute; top:50%; transform:translateY(-50%); z-index:3;
  width:44px; height:44px; border-radius:50%;
  background:rgba(11,22,38,0.55); backdrop-filter:blur(3px);
  color:#fff; display:flex; align-items:center; justify-content:center;
  transition:background .2s ease, transform .2s ease;
}
#ucp-page .ucp-hero-arrow:hover{background:rgba(240,180,41,0.85); color:var(--ucp-navy-950);}
#ucp-page .ucp-hero-arrow.ucp-prev{left:14px;}
#ucp-page .ucp-hero-arrow.ucp-next{right:14px;}
@media (max-width:640px){
  #ucp-page .ucp-hero-arrow{width:36px; height:36px;}
}

#ucp-page .ucp-hero-dots{
  position:absolute; z-index:3; left:50%; bottom:16px; transform:translateX(-50%);
  display:flex; gap:9px;
}
#ucp-page .ucp-hero-dots button{
  width:9px; height:9px; border-radius:50%;
  background:rgba(255,255,255,0.5); border:1.5px solid rgba(255,255,255,0.7);
  transition:all .25s ease;
}
#ucp-page .ucp-hero-dots button.ucp-active{background:var(--ucp-gold); border-color:var(--ucp-gold); width:22px; border-radius:5px;}

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
#ucp-page .ucp-section-title.ucp-center{text-align:center;}

/* ============================================================
   IN THE MOMENT
   ============================================================ */
#ucp-page .ucp-moment{background:var(--ucp-paper); padding:56px 0 50px;}
#ucp-page .ucp-moment-grid{
  display:grid; grid-template-columns:1.35fr 1fr; gap:18px;
}
#ucp-page .ucp-moment-feature{
  position:relative; border-radius:2px; overflow:hidden; box-shadow:var(--ucp-shadow-s);
  min-height:340px;
}
#ucp-page .ucp-moment-feature img{width:100%; height:100%; object-fit:cover; position:absolute; inset:0;}
#ucp-page .ucp-moment-feature-caption{
  position:relative; z-index:1; margin-top:auto;
  background:var(--ucp-navy-900); color:#fff;
  font-size:14.5px; font-weight:600; padding:14px 18px;
}
#ucp-page .ucp-moment-feature{display:flex; flex-direction:column; justify-content:flex-end;}

#ucp-page .ucp-moment-side{display:flex; flex-direction:column; gap:18px;}
#ucp-page .ucp-moment-card{
  display:grid; grid-template-columns:1fr 1.1fr;
  background:var(--ucp-navy-900); color:#fff; border-radius:2px; overflow:hidden;
  box-shadow:var(--ucp-shadow-s); flex:1;
}
#ucp-page .ucp-moment-card-media{position:relative; overflow:hidden; min-height:120px;}
#ucp-page .ucp-moment-card-media img{width:100%; height:100%; object-fit:cover;}
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
#ucp-page .ucp-moment-avatar-media .ucp-avatar-info{margin-left:12px;}
#ucp-page .ucp-moment-avatar-media .ucp-avatar-name{font-weight:700; font-size:14px; color:var(--ucp-gold); line-height:1.2;}
#ucp-page .ucp-moment-avatar-media .ucp-avatar-sub{font-size:11px; color:rgba(255,255,255,0.7); margin-top:4px; line-height:1.4;}
#ucp-page .ucp-moment-avatar-media{display:flex; align-items:flex-start;}

#ucp-page .ucp-moment-card-body{padding:16px 18px; display:flex; align-items:center;}
#ucp-page .ucp-moment-card-body p{font-size:13px; line-height:1.55; font-weight:500;}

#ucp-page .ucp-moment-more{text-align:center; margin-top:34px;}
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

@media (max-width:860px){
  #ucp-page .ucp-moment-grid{grid-template-columns:1fr;}
  #ucp-page .ucp-moment-card{grid-template-columns:120px 1fr;}
}

/* ============================================================
   FIND A COURSE
   ============================================================ */
#ucp-page .ucp-course{background:var(--ucp-paper); padding:0 0 56px;}
#ucp-page .ucp-course-bar{
  display:flex; align-items:center; gap:22px; flex-wrap:wrap;
  background:#fff; border:1px solid var(--ucp-paper-dim); border-radius:4px;
  padding:16px 20px; box-shadow:var(--ucp-shadow-s); margin-bottom:22px;
}
#ucp-page .ucp-course-input{
  flex:1 1 260px; border:1px solid var(--ucp-paper-dim); border-radius:3px;
  padding:12px 14px; font-size:14px; color:var(--ucp-ink); background:var(--ucp-paper);
}
#ucp-page .ucp-course-input:focus{outline:none; border-color:var(--ucp-gold-dim); background:#fff;}
#ucp-page .ucp-course-checks{display:flex; align-items:center; gap:18px; flex-wrap:wrap;}
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
#ucp-page .ucp-faculty-links a:hover{color:var(--ucp-red-600); text-decoration:underline;}
#ucp-page .ucp-faculty-links .ucp-sep{color:var(--ucp-ink-soft); margin:0 4px;}

#ucp-page .ucp-faculty-grid{
  display:grid; grid-template-columns:repeat(5, 1fr); gap:10px;
}
#ucp-page .ucp-faculty-card{
  position:relative; border-radius:2px; overflow:hidden; aspect-ratio:4/3;
  box-shadow:var(--ucp-shadow-s); display:block;
}
#ucp-page .ucp-faculty-card img{width:100%; height:100%; object-fit:cover; transition:transform .6s ease;}
#ucp-page .ucp-faculty-card:hover img{transform:scale(1.08);}
#ucp-page .ucp-faculty-card::after{
  content:""; position:absolute; inset:0;
  background:linear-gradient(180deg, rgba(11,22,38,0.05) 40%, rgba(11,22,38,0.86) 100%);
}
#ucp-page .ucp-faculty-name{
  position:absolute; left:12px; right:12px; bottom:12px; z-index:1;
  color:#fff; font-size:13px; font-weight:700; line-height:1.3;
}
#ucp-page .ucp-faculty-name .ucp-fa-arrow{display:inline-block; margin-left:4px; transition:transform .25s ease;}
#ucp-page .ucp-faculty-card:hover .ucp-fa-arrow{transform:translateX(4px);}

@media (max-width:1080px){#ucp-page .ucp-faculty-grid{grid-template-columns:repeat(3,1fr);}}
@media (max-width:600px){#ucp-page .ucp-faculty-grid{grid-template-columns:repeat(2,1fr);}}

/* ============================================================
   CHAIRMAN'S MESSAGE
   ============================================================ */
#ucp-page .ucp-chairman{
  position:relative; background:var(--ucp-navy-950); color:#fff; padding:56px 0;
  overflow:hidden;
}
#ucp-page .ucp-chairman::before{
  content:""; position:absolute; right:-6%; top:50%; transform:translateY(-50%);
  width:520px; height:520px; border-radius:50%;
  background:radial-gradient(circle, rgba(240,180,41,0.10), transparent 70%);
}
#ucp-page .ucp-chairman-inner{
  display:flex; align-items:center; gap:34px; position:relative; z-index:1;
  padding-right:70px;
}
#ucp-page .ucp-chairman-portrait{
  width:110px; height:110px; border-radius:50%; flex-shrink:0;
  overflow:hidden;
  border:3px solid rgba(255,255,255,0.35);
  box-shadow:var(--ucp-shadow-m);
}
#ucp-page .ucp-chairman-portrait img{width:100%; height:100%; object-fit:cover; display:block;}
#ucp-page .ucp-chairman-text h2{
  font-family:var(--ucp-font-serif); font-size:clamp(22px,2.6vw,28px); font-weight:700; margin-bottom:18px;
}
#ucp-page .ucp-chairman-quote{
  font-size:15px; line-height:1.75; color:rgba(255,255,255,0.85); max-width:66ch; position:relative; padding-left:6px;
}
#ucp-page .ucp-chairman-name{margin-top:18px; font-weight:700; font-size:14.5px; letter-spacing:0.01em;}
#ucp-page .ucp-chairman-role{font-size:12.5px; color:rgba(255,255,255,0.6); margin-top:2px; text-transform:uppercase; letter-spacing:0.06em;}

#ucp-page .ucp-side-tabs{
  position:absolute; right:0; top:0; bottom:0; display:flex; flex-direction:column; z-index:2;
}
#ucp-page .ucp-side-tab{
  writing-mode:vertical-rl; text-orientation:mixed;
  flex:1; display:flex; align-items:center; justify-content:center;
  font-size:11.5px; font-weight:700; letter-spacing:0.05em; color:#fff;
  padding:14px 9px; transition:filter .2s ease;
}
#ucp-page .ucp-side-tab:hover{filter:brightness(1.15);}
#ucp-page .ucp-side-tab.ucp-tab-1{background:var(--ucp-navy-800);}
#ucp-page .ucp-side-tab.ucp-tab-2{background:var(--ucp-maroon-700);}
#ucp-page .ucp-side-tab.ucp-tab-3{background:var(--ucp-red-600);}
#ucp-page .ucp-side-tab.ucp-tab-4{background:var(--ucp-navy-700);}

@media (max-width:860px){
  #ucp-page .ucp-chairman-inner{flex-direction:column; align-items:flex-start; padding-right:56px;}
  #ucp-page .ucp-side-tab{font-size:10.5px; padding:12px 6px;}
}

/* ============================================================
   ABOUT / STATISTICS
   ============================================================ */
#ucp-page .ucp-stats{padding:60px 0 64px;}
#ucp-page .ucp-stats-grid{
  display:grid; grid-template-columns:repeat(3, 1fr);
}
#ucp-page .ucp-stat{
  padding:26px 20px; text-align:center;
  border-bottom:1px solid var(--ucp-paper-dim);
}
#ucp-page .ucp-stats-grid .ucp-stat:not(:nth-child(3n))::after{content:none;}
#ucp-page .ucp-stat{position:relative;}
#ucp-page .ucp-stat:not(:nth-child(3n)){border-right:1px solid var(--ucp-paper-dim);}
#ucp-page .ucp-stat-icon{
  width:40px; height:40px; margin:0 auto 14px; color:var(--ucp-navy-800);
  display:flex; align-items:center; justify-content:center;
}
#ucp-page .ucp-stat-num{
  font-family:var(--ucp-font-display); font-weight:700; font-size:clamp(22px,2.6vw,28px); color:var(--ucp-navy-900);
}
#ucp-page .ucp-stat-label{font-size:12.5px; font-weight:600; color:var(--ucp-ink-soft); margin-top:6px;}

@media (max-width:760px){
  #ucp-page .ucp-stats-grid{grid-template-columns:repeat(2,1fr);}
  #ucp-page .ucp-stat:not(:nth-child(3n)){border-right:none;}
  #ucp-page .ucp-stat:nth-child(odd){border-right:1px solid var(--ucp-paper-dim);}
}
@media (max-width:420px){
  #ucp-page .ucp-stats-grid{grid-template-columns:1fr;}
  #ucp-page .ucp-stat:nth-child(odd){border-right:none;}
}

/* ============================================================
   OUR COMMUNITY
   ============================================================ */
#ucp-page .ucp-community{background:var(--ucp-paper); padding:56px 0 60px;}
#ucp-page .ucp-community-grid{
  display:grid; grid-template-columns:1.15fr 1fr; gap:18px;
}
#ucp-page .ucp-community-feature{
  position:relative; border-radius:2px; overflow:hidden; min-height:420px; box-shadow:var(--ucp-shadow-s);
}
#ucp-page .ucp-community-feature img{width:100%; height:100%; object-fit:cover; position:absolute; inset:0;}
#ucp-page .ucp-community-feature-tag{
  position:absolute; top:16px; left:0; z-index:1;
  background:var(--ucp-navy-900); color:#fff; font-size:11.5px; font-weight:700;
  padding:8px 14px; letter-spacing:0.02em;
}
#ucp-page .ucp-community-feature-caption{
  position:absolute; left:16px; bottom:16px; z-index:1; color:#fff; max-width:70%;
  text-shadow:0 2px 10px rgba(0,0,0,0.5);
}
#ucp-page .ucp-community-feature-caption strong{display:block; font-size:14px; font-weight:700; margin-bottom:4px;}
#ucp-page .ucp-community-feature-caption span{font-size:12px; line-height:1.5; color:rgba(255,255,255,0.85);}

#ucp-page .ucp-community-side{display:grid; grid-template-columns:1fr 1fr; gap:18px;}
#ucp-page .ucp-community-thumb{position:relative; border-radius:2px; overflow:hidden; aspect-ratio:1/1; box-shadow:var(--ucp-shadow-s);}
#ucp-page .ucp-community-thumb img{width:100%; height:100%; object-fit:cover;}
#ucp-page .ucp-community-thumb .ucp-tag-small{
  position:absolute; left:0; bottom:10px; z-index:1;
  background:var(--ucp-red-600); color:#fff; font-size:10.5px; font-weight:700; padding:5px 10px;
}

@media (max-width:860px){
  #ucp-page .ucp-community-grid{grid-template-columns:1fr;}
  #ucp-page .ucp-community-feature{min-height:280px;}
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
#ucp-page .ucp-contact-item{display:flex; align-items:flex-start; gap:10px; font-size:13.5px; color:rgba(255,255,255,0.7); line-height:1.5;}
#ucp-page .ucp-contact-item svg{flex-shrink:0; margin-top:2px; color:var(--ucp-gold);}

#ucp-page .ucp-footer-bottom{
  position:relative; z-index:1;
  display:flex; align-items:center; justify-content:space-between; flex-wrap:wrap; gap:14px;
  padding:22px 0 26px; font-size:12.5px; color:rgba(255,255,255,0.45);
}
#ucp-page .ucp-footer-legal{display:flex; gap:18px;}
#ucp-page .ucp-footer-legal a{color:rgba(255,255,255,0.45);}
#ucp-page .ucp-footer-legal a:hover{color:#fff;}
#ucp-page .ucp-social-row{display:flex; gap:10px; padding-top:28px; position:relative; z-index:1;}
#ucp-page .ucp-social-row a{
  width:34px; height:34px; border-radius:50%; background:rgba(255,255,255,0.08); color:#fff;
  display:flex; align-items:center; justify-content:center; transition:background .2s ease;
}
#ucp-page .ucp-social-row a:hover{background:var(--ucp-navy-700);}
#ucp-page .ucp-back-top{
  background:rgba(255,255,255,0.08); color:#fff; font-size:11px; font-weight:700;
  padding:7px 18px; border-radius:999px; letter-spacing:0.06em;
}
#ucp-page .ucp-back-top:hover{background:rgba(255,255,255,0.16);}

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

#ucp-page .ucp-reveal{opacity:0; transform:translateY(20px); transition:opacity .6s ease, transform .6s ease;}
#ucp-page .ucp-reveal.ucp-in{opacity:1; transform:translateY(0);}

/* ============================================================
   ADMISSION INQUIRY MODAL
   ============================================================ */
#ucp-page .ucp-modal-overlay{
  position:fixed; inset:0; z-index:2000; display:flex; align-items:center; justify-content:center;
  padding:20px; background:rgba(11,17,32,0.6); backdrop-filter:blur(4px);
  opacity:0; visibility:hidden; transition:opacity .25s ease, visibility .25s ease;
}
#ucp-page .ucp-modal-overlay.ucp-modal-open{opacity:1; visibility:visible;}
#ucp-page .ucp-modal-panel{
  position:relative; width:100%; max-width:560px; max-height:90vh; overflow-y:auto;
  background:#fff; border-radius:14px; box-shadow:var(--ucp-shadow-l);
  padding:clamp(26px,4vw,40px); transform:translateY(16px); transition:transform .25s ease;
}
#ucp-page .ucp-modal-overlay.ucp-modal-open .ucp-modal-panel{transform:translateY(0);}
#ucp-page .ucp-modal-close{
  position:absolute; top:16px; right:16px; width:36px; height:36px; border-radius:50%;
  background:var(--ucp-paper); color:var(--ucp-navy-900); display:flex; align-items:center; justify-content:center;
  font-size:20px; line-height:1; transition:background .2s ease;
}
#ucp-page .ucp-modal-close:hover{background:var(--ucp-paper-dim);}
#ucp-page .ucp-modal-header{margin-bottom:22px; padding-right:30px;}
#ucp-page .ucp-modal-eyebrow{font-family:var(--ucp-font-mono); font-size:11.5px; font-weight:600; letter-spacing:0.1em; text-transform:uppercase; color:var(--ucp-gold-dim); margin-bottom:8px;}
#ucp-page .ucp-modal-header h3{font-family:var(--ucp-font-serif); font-size:clamp(20px,2.6vw,25px); font-weight:700; color:var(--ucp-navy-900);}
#ucp-page .ucp-modal-sub{margin-top:8px; font-size:13.5px; color:var(--ucp-ink-soft); line-height:1.55;}
#ucp-page .ucp-modal-grid{display:grid; grid-template-columns:1fr 1fr; gap:14px 16px; margin-bottom:18px;}
#ucp-page .ucp-modal-grid .ucp-mfield.ucp-full{grid-column:1/-1;}
#ucp-page .ucp-mfield{display:flex; flex-direction:column; gap:6px;}
#ucp-page .ucp-mfield label{font-size:13px; font-weight:700; color:var(--ucp-navy-800);}
#ucp-page .ucp-mfield input, #ucp-page .ucp-mfield select, #ucp-page .ucp-mfield textarea{
  border:1.5px solid var(--ucp-paper-dim); border-radius:8px; padding:11px 13px; font-family:inherit; font-size:14px;
  color:var(--ucp-ink); background:var(--ucp-paper); width:100%;
}
#ucp-page .ucp-mfield input:focus, #ucp-page .ucp-mfield select:focus, #ucp-page .ucp-mfield textarea:focus{outline:none; border-color:var(--ucp-gold); background:#fff;}
#ucp-page .ucp-mfield textarea{resize:vertical; min-height:80px;}
#ucp-page .ucp-mfield.ucp-merror input, #ucp-page .ucp-mfield.ucp-merror select, #ucp-page .ucp-mfield.ucp-merror textarea{border-color:#C1443C; background:#FDF3F2;}
#ucp-page .ucp-mfield-error{font-size:12px; color:#C1443C; min-height:14px; display:none;}
#ucp-page .ucp-mfield.ucp-merror .ucp-mfield-error{display:block;}
#ucp-page .ucp-modal-note{font-size:12px; color:var(--ucp-ink-soft); margin-top:14px; text-align:center;}
@media (max-width:480px){#ucp-page .ucp-modal-grid{grid-template-columns:1fr;}}

/* ============================================================
   FACULTY/DEPARTMENT MULTI-STEP MODAL
   (Fee Structure → Application Form → Confirmation, submitted via email)
   Namespaced separately from the admission-inquiry modal above.
   ============================================================ */
#ucp-page .ucp-dept-overlay{
  position:fixed; inset:0; z-index:2100; display:flex; align-items:center; justify-content:center;
  padding:20px; background:rgba(11,17,32,0.62); backdrop-filter:blur(4px);
  opacity:0; visibility:hidden; transition:opacity .25s ease, visibility .25s ease;
}
#ucp-page .ucp-dept-overlay.ucp-dept-open{opacity:1; visibility:visible;}
#ucp-page .ucp-dept-panel{
  position:relative; width:100%; max-width:600px; max-height:90vh; overflow-y:auto;
  background:#fff; border-radius:14px; box-shadow:var(--ucp-shadow-l);
  padding:clamp(26px,4vw,40px); transform:translateY(16px); transition:transform .25s ease;
}
#ucp-page .ucp-dept-overlay.ucp-dept-open .ucp-dept-panel{transform:translateY(0);}
#ucp-page .ucp-dept-close{
  position:absolute; top:16px; right:16px; width:36px; height:36px; border-radius:50%;
  background:var(--ucp-paper); color:var(--ucp-navy-900); display:flex; align-items:center; justify-content:center;
  font-size:20px; line-height:1; transition:background .2s ease; z-index:2;
}
#ucp-page .ucp-dept-close:hover{background:var(--ucp-paper-dim);}
#ucp-page .ucp-dept-steps{display:flex; align-items:center; gap:8px; margin-bottom:22px; padding-right:30px;}
#ucp-page .ucp-dept-step-dot{display:flex; align-items:center; gap:8px; font-family:var(--ucp-font-mono); font-size:11px; font-weight:600; color:var(--ucp-ink-soft);}
#ucp-page .ucp-dept-step-dot .ucp-num{
  width:24px; height:24px; border-radius:50%; background:var(--ucp-paper-dim); color:var(--ucp-ink-soft);
  display:flex; align-items:center; justify-content:center; font-size:11px; font-weight:700; transition:background .2s ease, color .2s ease;
}
#ucp-page .ucp-dept-step-dot.ucp-dept-step-active .ucp-num{background:var(--ucp-gold); color:var(--ucp-navy-950);}
#ucp-page .ucp-dept-step-dot.ucp-dept-step-done .ucp-num{background:#1F7A5C; color:#fff;}
#ucp-page .ucp-dept-step-line{flex:1; height:1px; background:var(--ucp-paper-dim);}
#ucp-page .ucp-dept-view{display:none;}
#ucp-page .ucp-dept-view.ucp-dept-view-active{display:block;}
#ucp-page .ucp-dept-header{margin-bottom:18px;}
#ucp-page .ucp-dept-header h3{font-family:var(--ucp-font-serif); font-size:clamp(19px,2.4vw,23px); font-weight:700; color:var(--ucp-navy-900);}
#ucp-page .ucp-dept-header p{margin-top:6px; font-size:13.5px; color:var(--ucp-ink-soft); line-height:1.5;}
#ucp-page .ucp-dept-program-tag{
  display:inline-flex; align-items:center; gap:8px; font-size:12px; font-weight:700; color:var(--ucp-navy-800);
  background:var(--ucp-paper); padding:6px 13px; border-radius:999px; margin-bottom:14px;
}
#ucp-page .ucp-dept-fee-note{
  font-size:13px; line-height:1.65; color:var(--ucp-ink-soft); background:var(--ucp-paper);
  border-left:3px solid var(--ucp-gold); border-radius:0 8px 8px 0; padding:14px 16px; margin-bottom:18px;
}
#ucp-page .ucp-dept-fee-table{width:100%; border-collapse:collapse; margin-bottom:22px; border:1px solid var(--ucp-paper-dim); border-radius:10px; overflow:hidden;}
#ucp-page .ucp-dept-fee-table tr{border-bottom:1px solid var(--ucp-paper-dim);}
#ucp-page .ucp-dept-fee-table tr:last-child{border-bottom:none;}
#ucp-page .ucp-dept-fee-table td{padding:12px 16px; font-size:13.5px;}
#ucp-page .ucp-dept-fee-table td:first-child{font-weight:600; color:var(--ucp-navy-900); width:55%;}
#ucp-page .ucp-dept-fee-table td:last-child{color:var(--ucp-ink-soft); text-align:right;}
#ucp-page .ucp-dept-fee-actions{display:flex; gap:12px; flex-wrap:wrap;}
#ucp-page .ucp-dept-form-actions{display:flex; gap:12px; margin-top:6px;}
#ucp-page .ucp-dept-form-actions .ucp-btn-gold, #ucp-page .ucp-dept-form-actions .ucp-btn-outline{flex:1; text-align:center;}
#ucp-page .ucp-dept-confirm{text-align:center; padding:10px 0 4px;}
#ucp-page .ucp-dept-confirm .ucp-check{
  width:60px; height:60px; border-radius:50%; background:rgba(31,122,92,0.1); color:#1F7A5C;
  display:flex; align-items:center; justify-content:center; margin:0 auto 18px;
}
#ucp-page .ucp-dept-confirm h3{font-family:var(--ucp-font-serif); font-size:22px; font-weight:700; color:var(--ucp-navy-900); margin-bottom:10px;}
#ucp-page .ucp-dept-confirm p{font-size:13.5px; color:var(--ucp-ink-soft); line-height:1.65; max-width:42ch; margin:0 auto 18px;}
#ucp-page .ucp-dept-confirm-summary{background:var(--ucp-paper); border-radius:10px; padding:16px 18px; text-align:left; margin-bottom:20px; font-size:13px; line-height:1.9;}
#ucp-page .ucp-dept-confirm-summary strong{color:var(--ucp-navy-900);}
#ucp-page .ucp-dept-fallback{font-size:12px; color:var(--ucp-ink-soft); margin-top:4px;}
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
#ucp-page .ucp-notify-inner{
  display:flex; align-items:center; justify-content:space-between; gap:14px; flex-wrap:wrap;
  padding:9px 0;
}
#ucp-page .ucp-notify-items{display:flex; flex-wrap:wrap; gap:18px;}
#ucp-page .ucp-notify-item{display:inline-flex; align-items:center; gap:7px; font-size:12.5px; font-weight:700;}
#ucp-page .ucp-notify-item strong{font-weight:800;}
#ucp-page .ucp-notify-apply{
  flex-shrink:0; background:var(--ucp-navy-950); color:#fff; font-size:12px; font-weight:700;
  padding:8px 18px; border-radius:999px; transition:background .2s ease, transform .2s ease;
}
#ucp-page .ucp-notify-apply:hover{background:var(--ucp-navy-800); transform:translateY(-1px);}
@media (max-width:640px){
  #ucp-page .ucp-notify-inner{justify-content:center; text-align:center;}
  #ucp-page .ucp-notify-items{justify-content:center; gap:10px 16px;}
}

/* ============================================================
   QUICK APPLY MODAL (single-step, submitted via email)
   ============================================================ */
#ucp-page .ucp-qa-overlay{
  position:fixed; inset:0; z-index:2200; display:flex; align-items:center; justify-content:center;
  padding:20px; background:rgba(11,17,32,0.65); backdrop-filter:blur(4px);
  opacity:0; visibility:hidden; transition:opacity .25s ease, visibility .25s ease;
}
#ucp-page .ucp-qa-overlay.ucp-qa-open{opacity:1; visibility:visible;}
#ucp-page .ucp-qa-panel{
  position:relative; width:100%; max-width:540px; max-height:90vh; overflow-y:auto;
  background:#fff; border-radius:14px; box-shadow:var(--ucp-shadow-l);
  padding:clamp(26px,4vw,40px); transform:translateY(16px); transition:transform .25s ease;
}
#ucp-page .ucp-qa-overlay.ucp-qa-open .ucp-qa-panel{transform:translateY(0);}
#ucp-page .ucp-qa-close{
  position:absolute; top:16px; right:16px; width:36px; height:36px; border-radius:50%;
  background:var(--ucp-paper); color:var(--ucp-navy-900); display:flex; align-items:center; justify-content:center;
  font-size:20px; line-height:1; transition:background .2s ease; z-index:2;
}
#ucp-page .ucp-qa-close:hover{background:var(--ucp-paper-dim);}
#ucp-page .ucp-qa-header{margin-bottom:20px; padding-right:30px;}
#ucp-page .ucp-qa-header h3{font-family:var(--ucp-font-serif); font-size:clamp(19px,2.4vw,23px); font-weight:700; color:var(--ucp-navy-900);}
#ucp-page .ucp-qa-header p{margin-top:6px; font-size:13.5px; color:var(--ucp-ink-soft); line-height:1.5;}
#ucp-page .ucp-qa-confirm h3{font-family:var(--ucp-font-serif); font-size:21px; font-weight:700; color:var(--ucp-navy-900); margin-bottom:10px;}
#ucp-page .ucp-qa-confirm p{font-size:13.5px; color:var(--ucp-ink-soft); line-height:1.65; max-width:40ch; margin:0 auto 6px;}
#ucp-page .ucp-qa-confirm-summary{background:var(--ucp-paper); border-radius:10px; padding:16px 18px; text-align:left; margin:16px 0; font-size:13px; line-height:1.85;}
#ucp-page .ucp-qa-confirm-summary strong{color:var(--ucp-navy-900);}

/* ---- Step indicator ---- */
#ucp-page .ucp-qa-steps{display:flex; align-items:center; gap:6px; margin-bottom:22px; padding-right:30px; flex-wrap:wrap;}
#ucp-page .ucp-qa-step-dot{display:flex; align-items:center; gap:6px; font-family:var(--ucp-font-mono); font-size:10.5px; font-weight:600; color:var(--ucp-ink-soft);}
#ucp-page .ucp-qa-num{
  width:22px; height:22px; border-radius:50%; background:var(--ucp-paper-dim); color:var(--ucp-ink-soft);
  display:flex; align-items:center; justify-content:center; font-size:10.5px; font-weight:700; transition:background .2s ease, color .2s ease;
}
#ucp-page .ucp-qa-step-dot.ucp-qa-step-active .ucp-qa-num{background:var(--ucp-gold); color:var(--ucp-navy-950);}
#ucp-page .ucp-qa-step-dot.ucp-qa-step-done .ucp-qa-num{background:#1F7A5C; color:#fff;}
#ucp-page .ucp-qa-step-line{width:14px; height:1px; background:var(--ucp-paper-dim);}

/* ---- Step 1: program list ---- */
#ucp-page .ucp-qa-program-list{display:flex; flex-direction:column; gap:9px; max-height:340px; overflow-y:auto; margin-bottom:20px; padding-right:2px;}
#ucp-page .ucp-qa-program-opt{
  display:flex; align-items:center; gap:12px; padding:13px 16px; border:1.5px solid var(--ucp-paper-dim);
  border-radius:10px; cursor:pointer; transition:border-color .2s ease, background .2s ease;
}
#ucp-page .ucp-qa-program-opt:hover{border-color:var(--ucp-gold);}
#ucp-page .ucp-qa-program-opt.ucp-qa-selected{border-color:var(--ucp-gold); background:rgba(240,180,41,0.08);}
#ucp-page .ucp-qa-program-opt input{width:17px; height:17px; accent-color:var(--ucp-gold); flex-shrink:0;}
#ucp-page .ucp-qa-program-opt span{font-size:13.5px; font-weight:600; color:var(--ucp-navy-900);}

/* ---- Step 2: fee options ---- */
#ucp-page .ucp-qa-fee-note{font-size:12.5px; line-height:1.6; color:var(--ucp-ink-soft); background:var(--ucp-paper); border-left:3px solid var(--ucp-gold); border-radius:0 8px 8px 0; padding:12px 14px; margin-bottom:18px;}
#ucp-page .ucp-qa-fee-options{display:flex; flex-direction:column; gap:10px; margin-bottom:22px;}
#ucp-page .ucp-qa-fee-opt{
  display:flex; align-items:center; justify-content:space-between; gap:12px; padding:14px 16px;
  border:1.5px solid var(--ucp-paper-dim); border-radius:10px; cursor:pointer; transition:border-color .2s ease, background .2s ease;
}
#ucp-page .ucp-qa-fee-opt:hover{border-color:var(--ucp-gold);}
#ucp-page .ucp-qa-fee-opt.ucp-qa-selected{border-color:var(--ucp-gold); background:rgba(240,180,41,0.08);}
#ucp-page .ucp-qa-fee-opt-left{display:flex; align-items:center; gap:12px;}
#ucp-page .ucp-qa-fee-opt input{width:17px; height:17px; accent-color:var(--ucp-gold); flex-shrink:0;}
#ucp-page .ucp-qa-fee-opt-title{font-size:13.5px; font-weight:700; color:var(--ucp-navy-900);}
#ucp-page .ucp-qa-fee-opt-amount{font-family:var(--ucp-font-mono); font-size:11px; color:var(--ucp-ink-soft); text-align:right;}

/* ---- Form action row (shared by steps 2 & 3) ---- */
#ucp-page .ucp-qa-form-actions{display:flex; gap:12px; margin-top:6px;}
#ucp-page .ucp-qa-form-actions .ucp-btn-outline, #ucp-page .ucp-qa-form-actions .ucp-btn-gold{flex:1; justify-content:center;}
#ucp-page .ucp-qa-view [disabled]{opacity:0.55; cursor:not-allowed;}

#ucp-page .ucp-qa-view{display:none;}
#ucp-page .ucp-qa-view.ucp-qa-view-active{display:block;}
#ucp-page .ucp-qa-confirm{text-align:center; padding:10px 0 4px;}
#ucp-page .ucp-qa-confirm .ucp-check{
  width:56px; height:56px; border-radius:50%; background:rgba(31,122,92,0.1); color:#1F7A5C;
  display:flex; align-items:center; justify-content:center; margin:0 auto 18px;
}

/* ============================================================
   WELCOME / ADMISSION ANNOUNCEMENT POPUP (auto-shows once per session)
   ============================================================ */
#ucp-page .ucp-welcome-overlay{
  position:fixed; inset:0; z-index:2150; display:flex; align-items:center; justify-content:center;
  padding:20px; background:rgba(11,17,32,0.65); backdrop-filter:blur(4px);
  opacity:0; visibility:hidden; transition:opacity .3s ease, visibility .3s ease;
}
#ucp-page .ucp-welcome-overlay.ucp-welcome-open{opacity:1; visibility:visible;}
#ucp-page .ucp-welcome-panel{
  position:relative; width:100%; max-width:440px; background:#fff; border-radius:16px; box-shadow:var(--ucp-shadow-l);
  overflow:hidden; text-align:center; transform:scale(0.96); transition:transform .3s ease;
}
#ucp-page .ucp-welcome-overlay.ucp-welcome-open .ucp-welcome-panel{transform:scale(1);}
#ucp-page .ucp-welcome-image{width:100%; height:150px; overflow:hidden;}
#ucp-page .ucp-welcome-image img{width:100%; height:100%; object-fit:cover; display:block;}
#ucp-page .ucp-welcome-body{padding:26px 30px 30px;}
#ucp-page .ucp-welcome-close{
  position:absolute; top:14px; right:14px; width:32px; height:32px; border-radius:50%;
  background:var(--ucp-paper); color:var(--ucp-navy-900); display:flex; align-items:center; justify-content:center; font-size:18px; z-index:2;
}
#ucp-page .ucp-welcome-close:hover{background:var(--ucp-paper-dim);}
#ucp-page .ucp-welcome-icon{
  width:52px; height:52px; border-radius:50%; margin:0 auto 16px; background:rgba(240,180,41,0.14); color:var(--ucp-gold-dim);
  display:flex; align-items:center; justify-content:center;
}
#ucp-page .ucp-welcome-panel h3{font-family:var(--ucp-font-serif); font-size:20px; font-weight:700; color:var(--ucp-navy-900); margin-bottom:8px;}
#ucp-page .ucp-welcome-panel > .ucp-welcome-body > p{font-size:13.5px; color:var(--ucp-ink-soft); line-height:1.55; margin-bottom:20px;}
#ucp-page .ucp-welcome-dates{background:var(--ucp-paper); border-radius:10px; padding:16px 18px; margin-bottom:22px; text-align:left;}
#ucp-page .ucp-welcome-date-row{display:flex; align-items:center; gap:10px; font-size:13.5px; color:var(--ucp-navy-900); font-weight:600;}
#ucp-page .ucp-welcome-date-row + .ucp-welcome-date-row{margin-top:10px;}
#ucp-page .ucp-welcome-date-row svg{color:var(--ucp-gold-dim); flex-shrink:0;}
</style>
<?php wp_head(); ?>
</head>
<body>
<div id="ucp-page">

<!-- ============================================================
     NOTIFICATION BAR (admission dates + quick Apply Now)
     ============================================================ -->
<?php $ccx_dates = ccx_admission_dates( 'ucp' ); ?>
<?php if ( $ccx_dates['enabled'] ) : ?>
<div class="ucp-notify-bar" id="ucp-notify-bar">
  <div class="ucp-container ucp-notify-inner">
    <div class="ucp-notify-items">
      <span class="ucp-notify-item"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="5" width="18" height="16" rx="2"/><path d="M8 3v4M16 3v4M3 10h18"/></svg> Last Date to Apply: <strong id="ucp-notify-lastdate"></strong></span>
      <span class="ucp-notify-item"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 11l3 3L22 4"/><path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"/></svg> Open Merit Based Admission: <strong id="ucp-notify-entrytest"></strong></span>
    </div>
    <button type="button" class="ucp-notify-apply ucp-quickapply-trigger">Apply Now</button>
  </div>
</div>
<?php endif; ?>

<!-- ============================================================
     HEADER
     ============================================================ -->
<header class="ucp-header">
  <div class="ucp-container">
    <a href="/ucp" class="ucp-logo" aria-label="University of Central Punjab home">
      <!-- Sourced directly from the official UCP asset (ucp.edu.pk) -->
      <img src="<?php echo esc_url( ccx_university_logo( 'ucp' ) ); ?>" alt="University of Central Punjab logo">
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
          <a href="/ucp-fee-structure">Fee Structure</a>
          <a href="/ucp-merit-list">Merit List</a>
          <a href="/ucp-fee-chalan">Fee Chalan</a>
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
        <a href="/ucp-fee-structure">Fee Structure</a>
        <a href="/ucp-merit-list">Merit List</a>
        <a href="/ucp-fee-chalan">Fee Chalan</a>
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

<!-- ============================================================
     HERO
     ============================================================ -->
<section class="ucp-hero">
  <div class="ucp-container">
    <div class="ucp-hero-heading-wrap" id="ucp-hero-heading-wrap">
      <!--<h1 class="ucp-hero-heading ucp-active">Experiment</h1>-->
      <!--<h1 class="ucp-hero-heading">Explore UCP</h1>-->
      <!--<h1 class="ucp-hero-heading">Achieve</h1>-->
    </div>

    <div class="ucp-hero-frame">
      <!-- Sourced directly from the official UCP homepage slider assets (ucp.edu.pk).
           The live site rotates 3 slides here; exact per-slide captions beyond
           "Experiment" weren't retrievable from the reference, so "Explore UCP"
           and "Achieve" are placeholders — swap for the real captions if different.
           TODO: replace all 3 slide images with official UCP photography —
           dummy stock placeholders for now. -->
      <div class="ucp-hero-slides" id="ucp-hero-slides">
        <div class="ucp-hero-slide ucp-active">
          <img src="https://ucp.edu.pk/wp-content/uploads/2025/06/03.webp?auto=format&fit=crop&w=1920&q=75" alt="Placeholder campus image — replace with official UCP photography, slide 1">
        </div>
        <div class="ucp-hero-slide">
          <img src="https://ucp.edu.pk/wp-content/uploads/2025/06/01.webp?auto=format&fit=crop&w=1920&q=75" alt="Placeholder campus image — replace with official UCP photography, slide 2">
        </div>
        <div class="ucp-hero-slide">
          <img src="https://ucp.edu.pk/wp-content/uploads/2025/06/02.webp?auto=format&fit=crop&w=1920&q=75" alt="Placeholder campus image — replace with official UCP photography, slide 3">
        </div>
      </div>

      <button type="button" class="ucp-hero-arrow ucp-prev" id="ucp-hero-prev" aria-label="Previous slide">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M15 18l-6-6 6-6"/></svg>
      </button>
      <button type="button" class="ucp-hero-arrow ucp-next" id="ucp-hero-next" aria-label="Next slide">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M9 18l6-6-6-6"/></svg>
      </button>

      <div class="ucp-hero-dots" id="ucp-hero-dots"></div>
    </div>
  </div>
</section>

<!-- ============================================================
     IN THE MOMENT
     ============================================================ -->
<section class="ucp-moment">
  <div class="ucp-container">
    <h2 class="ucp-section-title ucp-reveal">In the Moment</h2>

    <!-- News items and images below are sourced directly from the live "In the
         Moment" feed on ucp.edu.pk (titles + official image assets); descriptions
         are written in our own words rather than copied from the source pages. -->
    <div class="ucp-moment-grid ucp-reveal">
      <a href="#" class="ucp-moment-feature">
        <img src="https://ucp.edu.pk/wp-content/uploads/2026/08/Prof.-Dr.-Muhammad-Akhyar-Farrukhs-Keynote-Speech-on-Utilizing-AI-for-Academic-Research-1.webp" alt="Prof. Dr. Muhammad Akhyar Farrukh delivering a keynote on AI for academic research">
        <div class="ucp-moment-feature-caption">Prof. Dr. Muhammad Akhyar Farrukh's Keynote Speech on Utilizing AI for Academic Research</div>
      </a>

      <div class="ucp-moment-side">
        <a href="#" class="ucp-moment-card">
          <div class="ucp-moment-card-media">
            <img src="https://ucp.edu.pk/wp-content/uploads/2026/08/5-Day-Summer-Jam-Chinese-Language-Program-1.webp" alt="Students taking part in the 5-Day Summer Jam Chinese language program">
          </div>
          <div class="ucp-moment-card-body">
            <p>5-Day Summer Jam: a short-course introduction to the Chinese language, open to students over the summer break.</p>
          </div>
        </a>

        <a href="#" class="ucp-moment-card">
          <div class="ucp-moment-card-media">
            <img src="https://ucp.edu.pk/wp-content/uploads/2026/08/Faculty-of-Science-and-Technologys-11th-Faculty-Meeting-1.webp" alt="Faculty members at the Faculty of Science and Technology's 11th faculty meeting">
          </div>
          <div class="ucp-moment-card-body">
            <p>The Faculty of Science and Technology held its 11th faculty meeting to review academic progress and planning.</p>
          </div>
        </a>
      </div>
    </div>

    <div class="ucp-moment-more ucp-reveal">
      <a href="#" class="ucp-btn-navy">More UCP News</a>
    </div>
  </div>
</section>

<!-- ============================================================
     FIND A COURSE
     ============================================================ -->
<section class="ucp-course">
  <div class="ucp-container">
    <h2 class="ucp-section-title ucp-reveal">Find a Course</h2>

    <form class="ucp-course-bar ucp-reveal" id="ucp-course-form" role="search" aria-label="Find a course">
      <input type="search" class="ucp-course-input" placeholder="Enter a course name or keyword here" aria-label="Course name or keyword">
      <div class="ucp-course-checks">
        <label class="ucp-check-label"><input type="checkbox" checked> Undergraduate Courses</label>
        <label class="ucp-check-label"><input type="checkbox" checked> Postgraduate Courses</label>
      </div>
      <button type="submit" class="ucp-course-search-btn">Search</button>
    </form>

    <p class="ucp-faculty-links ucp-reveal">
      <a href="#">Faculty of Pharmaceutical Sciences</a><span class="ucp-sep">|</span>
      <a href="#">Faculty of Languages &amp; Literature</a><span class="ucp-sep">|</span>
      <a href="#">Faculty of Information Technology and Computer Science</a><span class="ucp-sep">|</span>
      <a href="#">Faculty of Engineering</a><span class="ucp-sep">|</span><br class="ucp-lb">
      <a href="#">Faculty of Media and Mass Communication</a><span class="ucp-sep">|</span>
      <a href="#">Faculty of Humanities &amp; Social Science</a><span class="ucp-sep">|</span>
      <a href="#">Faculty of Science and Technology</a><span class="ucp-sep">|</span>
      <a href="#">Faculty of Management Science</a><span class="ucp-sep">|</span>
      <a href="#">Faculty of Law</a>
    </p>

    <!-- Faculty card images below are hotlinked directly from the official
         UCP asset library (ucp.edu.pk/wp-content/uploads/2023/01/) and link
         to the real faculty page paths found in the live site's navigation. -->
    <div class="ucp-faculty-grid ucp-reveal">
      <a href="https://ucp.edu.pk/faculty-of-engineering/" class="ucp-faculty-card ucp-dept-trigger" data-ucp-url="https://ucp.edu.pk/faculty-of-engineering/">
        <img src="https://ucp.edu.pk/wp-content/uploads/2023/01/engg.webp" alt="Faculty of Engineering" loading="lazy">
        <span class="ucp-faculty-name">Faculty of Engineering<span class="ucp-fa-arrow">→</span></span>
      </a>
      <a href="https://ucp.edu.pk/faculty-of-pharmacy/" class="ucp-faculty-card ucp-dept-trigger" data-ucp-url="https://ucp.edu.pk/faculty-of-pharmacy/">
        <img src="https://ucp.edu.pk/wp-content/uploads/2023/01/03.webp" alt="Faculty of Pharmaceutical Sciences" loading="lazy">
        <span class="ucp-faculty-name">Faculty of Pharmaceutical Sciences<span class="ucp-fa-arrow">→</span></span>
      </a>
      <a href="https://ucp.edu.pk/faculty-of-media-and-mass-communication/" class="ucp-faculty-card ucp-dept-trigger" data-ucp-url="https://ucp.edu.pk/faculty-of-media-and-mass-communication/">
        <img src="https://ucp.edu.pk/wp-content/uploads/2023/01/media.webp" alt="Faculty of Media and Mass Communication" loading="lazy">
        <span class="ucp-faculty-name">Faculty of Media &amp; Mass Communication<span class="ucp-fa-arrow">→</span></span>
      </a>
      <a href="https://ucp.edu.pk/faculty-of-management-sciences/" class="ucp-faculty-card ucp-dept-trigger" data-ucp-url="https://ucp.edu.pk/faculty-of-management-sciences/">
        <img src="https://ucp.edu.pk/wp-content/uploads/2023/01/01.webp" alt="Faculty of Management Sciences" loading="lazy">
        <span class="ucp-faculty-name">Faculty of Management Sciences<span class="ucp-fa-arrow">→</span></span>
      </a>
      <a href="https://ucp.edu.pk/faculty-of-science-technology/" class="ucp-faculty-card ucp-dept-trigger" data-ucp-url="https://ucp.edu.pk/faculty-of-science-technology/">
        <img src="https://ucp.edu.pk/wp-content/uploads/2023/01/science.webp" alt="Faculty of Science and Technology" loading="lazy">
        <span class="ucp-faculty-name">Faculty of Science and Technology<span class="ucp-fa-arrow">→</span></span>
      </a>
      <a href="https://ucp.edu.pk/faculty-of-law/" class="ucp-faculty-card ucp-dept-trigger" data-ucp-url="https://ucp.edu.pk/faculty-of-law/">
        <img src="https://ucp.edu.pk/wp-content/uploads/2023/01/law.webp" alt="Faculty of Law" loading="lazy">
        <span class="ucp-faculty-name">Faculty of Law<span class="ucp-fa-arrow">→</span></span>
      </a>
      <a href="https://ucp.edu.pk/faculty-of-information-technology-and-computer-science/" class="ucp-faculty-card ucp-dept-trigger" data-ucp-url="https://ucp.edu.pk/faculty-of-information-technology-and-computer-science/">
        <img src="https://ucp.edu.pk/wp-content/uploads/2023/01/02.webp" alt="Faculty of Information Technology and Computer Science" loading="lazy">
        <span class="ucp-faculty-name">Faculty of Information Technology &amp; Computer Science<span class="ucp-fa-arrow">→</span></span>
      </a>
      <a href="https://ucp.edu.pk/faculty-of-languages-literature/" class="ucp-faculty-card ucp-dept-trigger" data-ucp-url="https://ucp.edu.pk/faculty-of-languages-literature/">
        <img src="https://ucp.edu.pk/wp-content/uploads/2023/01/language.webp" alt="Faculty of Languages and Literature" loading="lazy">
        <span class="ucp-faculty-name">Faculty of Language and Literature<span class="ucp-fa-arrow">→</span></span>
      </a>
      <a href="https://ucp.edu.pk/faculty-of-humanities-and-social-sciences/" class="ucp-faculty-card ucp-dept-trigger" data-ucp-url="https://ucp.edu.pk/faculty-of-humanities-and-social-sciences/">
        <img src="https://ucp.edu.pk/wp-content/uploads/2023/01/humanities.webp" alt="Faculty of Humanities and Social Sciences" loading="lazy">
        <span class="ucp-faculty-name">Faculty of Humanities and Social Sciences<span class="ucp-fa-arrow">→</span></span>
      </a>
      <a href="https://ucp.edu.pk/adp-admissions/" class="ucp-faculty-card ucp-dept-trigger" data-ucp-url="https://ucp.edu.pk/adp-admissions/">
        <img src="https://ucp.edu.pk/wp-content/uploads/2023/01/adp.webp" alt="Associate Degree Program" loading="lazy">
        <span class="ucp-faculty-name">Associate Degree Program<span class="ucp-fa-arrow">→</span></span>
      </a>
    </div>
  </div>
</section>

<!-- ============================================================
     CHAIRMAN'S MESSAGE
     ============================================================ -->
<section class="ucp-chairman">
  <div class="ucp-container">
    <div class="ucp-chairman-inner ucp-reveal">
      <div class="ucp-chairman-portrait">
        <!-- Sourced directly from the official UCP asset (ucp.edu.pk) -->
        <img src="https://ucp.edu.pk/wp-content/uploads/2023/01/home_chiarmain.webp" alt="Mian Amer Mahmood, Chairman, UCP">
      </div>
      <div class="ucp-chairman-text">
        <h2>Chairman's Message</h2>
        <p class="ucp-chairman-quote">&ldquo;We aim to make our students adaptable to change so that they may thrive in a rapidly evolving job market; critical thinkers to be able to identify problems in our society and; creative to come up with pragmatic solutions.&rdquo;</p>
        <p class="ucp-chairman-name">Mian Amer Mahmood</p>
        <p class="ucp-chairman-role">Chairman, UCP</p>
      </div>
    </div>
  </div>

  <div class="ucp-side-tabs" aria-hidden="true">
    <a href="#" class="ucp-side-tab ucp-tab-1">Our Newsletter</a>
    <a href="#" class="ucp-side-tab ucp-tab-2 ucp-admission-trigger" data-ucp-program="">Apply Online</a>
    <a href="#" class="ucp-side-tab ucp-tab-3">Merit List</a>
    <a href="#" class="ucp-side-tab ucp-tab-4">International Programs</a>
  </div>
</section>

<!-- ============================================================
     ABOUT UCP / STATISTICS
     ============================================================ -->
<section class="ucp-stats">
  <div class="ucp-container">
    <h2 class="ucp-section-title ucp-center ucp-reveal">About UCP</h2>

    <div class="ucp-stats-grid ucp-reveal">
      <div class="ucp-stat">
        <div class="ucp-stat-icon"><svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M4 19.5A2.5 2.5 0 016.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 014 19.5v-15A2.5 2.5 0 016.5 2z"/></svg></div>
        <div class="ucp-stat-num">35</div>
        <div class="ucp-stat-label">Undergraduate Programs Offered</div>
      </div>
      <div class="ucp-stat">
        <div class="ucp-stat-icon"><svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M2 3h6a4 4 0 014 4v14a3 3 0 00-3-3H2z"/><path d="M22 3h-6a4 4 0 00-4 4v14a3 3 0 013-3h7z"/></svg></div>
        <div class="ucp-stat-num">37</div>
        <div class="ucp-stat-label">Postgraduate Programs Offered</div>
      </div>
      <div class="ucp-stat">
        <div class="ucp-stat-icon"><svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M22 10L12 5 2 10l10 5 10-5z"/><path d="M6 12v5c0 1.5 2.7 3 6 3s6-1.5 6-3v-5"/></svg></div>
        <div class="ucp-stat-num">19</div>
        <div class="ucp-stat-label">PhD Programs Offered</div>
      </div>

      <div class="ucp-stat">
        <div class="ucp-stat-icon"><svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><circle cx="12" cy="8" r="4"/><path d="M4 21v-1a6 6 0 016-6h4a6 6 0 016 6v1"/></svg></div>
        <div class="ucp-stat-num">199</div>
        <div class="ucp-stat-label">PhD Faculty Members</div>
      </div>
      <div class="ucp-stat">
        <div class="ucp-stat-icon"><svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><circle cx="12" cy="12" r="9"/><path d="M3 12h18M12 3a14 14 0 010 18 14 14 0 010-18z"/></svg></div>
        <div class="ucp-stat-num">16</div>
        <div class="ucp-stat-label">International Faculty Members</div>
      </div>
      <div class="ucp-stat">
        <div class="ucp-stat-icon"><svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M17 20h5v-2a4 4 0 00-3-3.87"/><path d="M9 20H2v-2a4 4 0 013-3.87"/><circle cx="9" cy="7" r="4"/><circle cx="17" cy="7" r="3"/></svg></div>
        <div class="ucp-stat-num">20:1</div>
        <div class="ucp-stat-label">Student Teacher Ratio</div>
      </div>

      <div class="ucp-stat">
        <div class="ucp-stat-icon"><svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M17 21v-2a4 4 0 00-4-4H6a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg></div>
        <div class="ucp-stat-num">42%</div>
        <div class="ucp-stat-label">Women in Senior Leadership</div>
      </div>
      <div class="ucp-stat">
        <div class="ucp-stat-icon"><svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><circle cx="12" cy="8" r="4"/><path d="M6 21v-1a6 6 0 0112 0v1"/></svg></div>
        <div class="ucp-stat-num">43%</div>
        <div class="ucp-stat-label">Women in Faculty</div>
      </div>
      <div class="ucp-stat">
        <div class="ucp-stat-icon"><svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M4 20V10l8-6 8 6v10"/><path d="M9 20v-6h6v6"/></svg></div>
        <div class="ucp-stat-num">42%</div>
        <div class="ucp-stat-label">Female Students Population</div>
      </div>

      <div class="ucp-stat">
        <div class="ucp-stat-icon"><svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M3 3v18h18"/><path d="M7 15l4-6 3 4 5-8"/></svg></div>
        <div class="ucp-stat-num">362</div>
        <div class="ucp-stat-label">Top Asian QS Ranking</div>
      </div>
      <div class="ucp-stat">
        <div class="ucp-stat-icon"><svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><circle cx="12" cy="12" r="9"/><path d="M2 12h20M12 2c2.5 2.7 4 6.4 4 10s-1.5 7.3-4 10c-2.5-2.7-4-6.4-4-10s1.5-7.3 4-10z"/></svg></div>
        <div class="ucp-stat-num">206</div>
        <div class="ucp-stat-label">UI Green Metric Ranking</div>
      </div>
      <div class="ucp-stat">
        <div class="ucp-stat-icon"><svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M12 2l8 4v6c0 5-3.4 8.7-8 10-4.6-1.3-8-5-8-10V6l8-4z"/><path d="M9 12l2 2 4-4"/></svg></div>
        <div class="ucp-stat-num">91.3/100</div>
        <div class="ucp-stat-label">HEC Score Quality Assurance</div>
      </div>

      <div class="ucp-stat">
        <div class="ucp-stat-icon"><svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M12 3v18M6 8a4 4 0 108 0c0-2-3-2-6-2M12 12a4 4 0 108 0c0-2-3-2-6-2"/></svg></div>
        <div class="ucp-stat-num">1.3B</div>
        <div class="ucp-stat-label">Scholarships Awarded</div>
      </div>
      <div class="ucp-stat">
        <div class="ucp-stat-icon"><svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M20 12V8a2 2 0 00-2-2H6a2 2 0 00-2 2v4"/><path d="M2 12h20l-1.6 7.2a2 2 0 01-2 1.8H5.6a2 2 0 01-2-1.8L2 12z"/></svg></div>
        <div class="ucp-stat-num">37%</div>
        <div class="ucp-stat-label">Students on Financial Aid</div>
      </div>
      <div class="ucp-stat">
        <div class="ucp-stat-icon"><svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M17 21v-2a4 4 0 00-4-4H6a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M19 8v6M22 11h-6"/></svg></div>
        <div class="ucp-stat-num">80</div>
        <div class="ucp-stat-label">Intellectual Property Rights</div>
      </div>

      <div class="ucp-stat">
        <div class="ucp-stat-icon"><svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M4 4h16v16H4z"/><path d="M9 9h6M9 13h6M9 17h3"/></svg></div>
        <div class="ucp-stat-num">23</div>
        <div class="ucp-stat-label">Active International MOUs</div>
      </div>
      <div class="ucp-stat">
        <div class="ucp-stat-icon"><svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M22 10L12 5 2 10l10 5 10-5z"/><path d="M6 12v5c0 1.5 2.7 3 6 3s6-1.5 6-3v-5M22 10v6"/></svg></div>
        <div class="ucp-stat-num">29000+</div>
        <div class="ucp-stat-label">Alumni</div>
      </div>
      <div class="ucp-stat">
        <div class="ucp-stat-icon"><svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><circle cx="9" cy="8" r="3.2"/><circle cx="17" cy="8" r="2.6"/><path d="M3 20v-1a5 5 0 015-5h2a5 5 0 015 5v1"/><path d="M16 14a4.2 4.2 0 014 4.2V20"/></svg></div>
        <div class="ucp-stat-num">65</div>
        <div class="ucp-stat-label">Dynamic Student Clubs/Societies</div>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     OUR COMMUNITY
     ============================================================ -->
<section class="ucp-community">
  <div class="ucp-container">
    <h2 class="ucp-section-title ucp-reveal">Our Community</h2>

    <div class="ucp-community-grid ucp-reveal">
      <!-- Community photos below are hotlinked directly from the official UCP
           asset library (ucp.edu.pk/wp-content/uploads/2023/01/); the live site
           links each of these through to UCP's official Instagram account. -->
      <a href="https://www.instagram.com/ucpofficial/" target="_blank" rel="noopener" class="ucp-community-feature">
        <img src="https://ucp.edu.pk/wp-content/uploads/2023/01/gallery1-2.webp" alt="UCP campus community photo">
        <span class="ucp-community-feature-tag">Around The ClockTower</span>
        <span class="ucp-community-feature-caption">
          <strong>Around The ClockTower</strong>
          <span>UCP's photoblog featuring the community around the clocktower</span>
        </span>
      </a>

      <div class="ucp-community-side">
        <a href="https://www.instagram.com/ucpofficial/" target="_blank" rel="noopener" class="ucp-community-thumb">
          <img src="https://ucp.edu.pk/wp-content/uploads/2023/01/Gallery4.webp" alt="UCP campus community photo">
        </a>
        <a href="https://www.instagram.com/ucpofficial/" target="_blank" rel="noopener" class="ucp-community-thumb">
          <img src="https://ucp.edu.pk/wp-content/uploads/2023/01/Gallery3.webp" alt="UCP campus community photo">
        </a>
        <a href="https://www.instagram.com/ucpofficial/" target="_blank" rel="noopener" class="ucp-community-thumb">
          <img src="https://ucp.edu.pk/wp-content/uploads/2023/01/Gallery2.webp" alt="UCP campus community photo">
          <span class="ucp-tag-small">#UCPWomen</span>
        </a>
        <a href="https://www.instagram.com/ucpofficial/" target="_blank" rel="noopener" class="ucp-community-thumb">
          <img src="https://ucp.edu.pk/wp-content/uploads/2023/01/Gallery5.webp" alt="UCP campus community photo">
        </a>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     FOOTER
     ============================================================ -->
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

<a href="#" class="ucp-whatsapp" id="ucp-whatsapp" aria-label="Chat with UCP on WhatsApp">
  <svg width="24" height="24" viewBox="0 0 24 24" fill="#fff"><path d="M17.6 6.32A8.86 8.86 0 0012.05 4a8.94 8.94 0 00-7.74 13.4L3 21l3.7-1.28a8.9 8.9 0 004.34 1.12h.01A8.94 8.94 0 0021 12.32a8.87 8.87 0 00-3.4-6zM12.05 19.6a7.4 7.4 0 01-3.78-1.04l-.27-.16-2.8.97.94-2.73-.18-.28a7.44 7.44 0 01-1.15-3.98 7.4 7.4 0 0112.65-5.25 7.36 7.36 0 012.17 5.25 7.4 7.4 0 01-7.58 7.22zm4.08-5.55c-.22-.11-1.31-.65-1.51-.72-.2-.07-.35-.11-.5.11-.15.22-.57.72-.7.87-.13.15-.26.16-.48.05a6.1 6.1 0 01-1.8-1.11 6.8 6.8 0 01-1.24-1.55c-.13-.22 0-.34.1-.45.1-.1.22-.26.33-.39.11-.13.15-.22.22-.37.07-.15.04-.28-.02-.39-.06-.11-.5-1.21-.69-1.66-.18-.43-.36-.37-.5-.38h-.43c-.15 0-.39.06-.6.28-.2.22-.79.77-.79 1.87 0 1.1.81 2.16.92 2.31.11.15 1.6 2.44 3.87 3.42.54.23.96.37 1.29.48.54.17 1.03.15 1.42.09.43-.06 1.31-.53 1.5-1.05.18-.51.18-.95.13-1.05-.06-.1-.2-.15-.42-.26z"/></svg>
</a>

<!-- ============================================================
     ADMISSION INQUIRY MODAL
     ============================================================ -->
<div class="ucp-modal-overlay" id="ucp-admission-modal" role="dialog" aria-modal="true" aria-labelledby="ucp-modal-title" aria-hidden="true">
  <div class="ucp-modal-panel">
    <button type="button" class="ucp-modal-close" id="ucp-modal-close" aria-label="Close admission inquiry form">&times;</button>
    <div class="ucp-modal-header">
      <p class="ucp-modal-eyebrow">Admissions</p>
      <h3 id="ucp-modal-title">UCP Admission Inquiry</h3>
      <p class="ucp-modal-sub">Share your details and we'll open WhatsApp with your inquiry ready to send to UCP admissions.</p>
    </div>

    <form id="ucp-admission-form" novalidate>
      <div class="ucp-modal-grid">
        <div class="ucp-mfield ucp-full" data-ucp-field="name">
          <label for="ucp-adm-name">Full Name</label>
          <input type="text" id="ucp-adm-name" name="name" placeholder="e.g. Ayesha Khan" autocomplete="name">
          <span class="ucp-mfield-error">Please enter your full name.</span>
        </div>
        <div class="ucp-mfield" data-ucp-field="phone">
          <label for="ucp-adm-phone">Phone / WhatsApp Number</label>
          <input type="tel" id="ucp-adm-phone" name="phone" placeholder="03XX XXXXXXX" autocomplete="tel">
          <span class="ucp-mfield-error">Please enter a valid phone number.</span>
        </div>
        <div class="ucp-mfield" data-ucp-field="email">
          <label for="ucp-adm-email">Email <span style="font-weight:500; color:var(--ucp-ink-soft);">(optional)</span></label>
          <input type="email" id="ucp-adm-email" name="email" placeholder="you@example.com" autocomplete="email">
          <span class="ucp-mfield-error">Please enter a valid email address.</span>
        </div>
        <div class="ucp-mfield" data-ucp-field="city">
          <label for="ucp-adm-city">City</label>
          <input type="text" id="ucp-adm-city" name="city" placeholder="e.g. Lahore" autocomplete="address-level2">
        </div>
        <div class="ucp-mfield" data-ucp-field="program">
          <label for="ucp-adm-program">Program of Interest</label>
          <input type="text" id="ucp-adm-program" name="program" placeholder="e.g. BS Computer Science">
          <span class="ucp-mfield-error">Please tell us which program you're interested in.</span>
        </div>
        <div class="ucp-mfield ucp-full">
          <label for="ucp-adm-message">Message <span style="font-weight:500; color:var(--ucp-ink-soft);">(optional)</span></label>
          <textarea id="ucp-adm-message" name="message" placeholder="Anything else you'd like us to know?"></textarea>
        </div>
      </div>
      <button type="submit" class="ucp-btn-gold ucp-btn-block" id="ucp-adm-submit">Send via WhatsApp</button>
      <p class="ucp-modal-note">This opens WhatsApp with your details pre-filled. No data is stored by this page.</p>
    </form>
  </div>
</div>

<!-- ============================================================
     FACULTY/DEPARTMENT MULTI-STEP MODAL
     (Fee Structure → Application Form → Confirmation)
     ============================================================ -->
<div class="ucp-dept-overlay" id="ucp-dept-modal" role="dialog" aria-modal="true" aria-labelledby="ucp-dept-title" aria-hidden="true">
  <div class="ucp-dept-panel">
    <button type="button" class="ucp-dept-close" id="ucp-dept-close" aria-label="Close">&times;</button>

    <div class="ucp-dept-steps" aria-hidden="true">
      <span class="ucp-dept-step-dot ucp-dept-step-active" data-ucp-dept-dot="1"><span class="ucp-num">1</span> Fee Structure</span>
      <span class="ucp-dept-step-line"></span>
      <span class="ucp-dept-step-dot" data-ucp-dept-dot="2"><span class="ucp-num">2</span> Application</span>
      <span class="ucp-dept-step-line"></span>
      <span class="ucp-dept-step-dot" data-ucp-dept-dot="3"><span class="ucp-num">3</span> Confirmation</span>
    </div>

    <div class="ucp-dept-view ucp-dept-view-active" data-ucp-dept-view="1">
      <span class="ucp-dept-program-tag" id="ucp-dept-tag-1"></span>
      <div class="ucp-dept-header">
        <h3 id="ucp-dept-title">Fee Structure</h3>
        <p>A general overview before you apply. UCP updates its fee structure each academic year.</p>
      </div>
      <p class="ucp-dept-fee-note">Exact tuition, admission and other fees are set and published by UCP and can change between intakes. Please confirm current figures on UCP's faculty page or directly with their admissions office before applying.</p>
      <table class="ucp-dept-fee-table">
        <tr><td>Tuition Fee</td><td>Confirm with UCP</td></tr>
        <tr><td>Admission / Processing Fee</td><td>Confirm with UCP</td></tr>
        <tr><td>Security Deposit</td><td>Confirm with UCP</td></tr>
        <tr><td>Scholarships &amp; Financial Aid</td><td>Ask admissions office</td></tr>
      </table>
      <div class="ucp-dept-fee-actions">
        <a href="#" id="ucp-dept-uni-link" target="_blank" rel="noopener" class="ucp-btn-outline">View Faculty Page</a>
        <button type="button" class="ucp-btn-gold" id="ucp-dept-to-step2">Continue to Application</button>
      </div>
    </div>

    <div class="ucp-dept-view" data-ucp-dept-view="2">
      <span class="ucp-dept-program-tag" id="ucp-dept-tag-2"></span>
      <div class="ucp-dept-header">
        <h3>Application Details</h3>
        <p>Share your details and this opens your email app with your application ready to send.</p>
      </div>
      <form id="ucp-dept-form" novalidate>
        <div class="ucp-modal-grid">
          <div class="ucp-mfield" data-ucp-dfield="name" style="grid-column:1/-1;">
            <label for="ucp-dept-name">Full Name</label>
            <input type="text" id="ucp-dept-name" name="name" placeholder="e.g. Ayesha Khan" autocomplete="name">
            <span class="ucp-mfield-error">Please enter your full name.</span>
          </div>
          <div class="ucp-mfield" data-ucp-dfield="phone">
            <label for="ucp-dept-phone">Phone</label>
            <input type="tel" id="ucp-dept-phone" name="phone" placeholder="03XX XXXXXXX" autocomplete="tel">
            <span class="ucp-mfield-error">Please enter a valid phone number.</span>
          </div>
          <div class="ucp-mfield" data-ucp-dfield="email">
            <label for="ucp-dept-email">Email</label>
            <input type="email" id="ucp-dept-email" name="email" placeholder="you@example.com" autocomplete="email">
            <span class="ucp-mfield-error">Please enter a valid email address.</span>
          </div>
          <div class="ucp-mfield" data-ucp-dfield="city" style="grid-column:1/-1;">
            <label for="ucp-dept-city">City</label>
            <input type="text" id="ucp-dept-city" name="city" placeholder="e.g. Lahore" autocomplete="address-level2">
          </div>
          <div class="ucp-mfield" style="grid-column:1/-1;">
            <label for="ucp-dept-message">Message <span style="font-weight:500; color:var(--ucp-ink-soft);">(optional)</span></label>
            <textarea id="ucp-dept-message" name="message" placeholder="Anything else you'd like us to know?"></textarea>
          </div>
        </div>
        <div class="ucp-dept-form-actions">
          <button type="button" class="ucp-btn-outline" id="ucp-dept-back-step1">Back</button>
          <button type="submit" class="ucp-btn-gold" id="ucp-dept-submit">Submit Application</button>
        </div>
      </form>
    </div>

    <div class="ucp-dept-view" data-ucp-dept-view="3">
      <div class="ucp-dept-confirm">
        <div class="ucp-check"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M5 13l4 4L19 7"/></svg></div>
        <h3>Application Ready to Send</h3>
        <p>Your email app should now open with your application pre-filled. If it didn't open automatically, use the email address below to send it yourself.</p>
        <div class="ucp-dept-confirm-summary" id="ucp-dept-summary"></div>
        <p class="ucp-dept-fallback" id="ucp-dept-fallback-email"></p>
        <button type="button" class="ucp-btn-outline" id="ucp-dept-done">Close</button>
      </div>
    </div>

  </div>
</div>

<!-- ============================================================
     QUICK APPLY MODAL (4-step: Program → Fee Structure → Application → Confirmation)
     ============================================================ -->
<div class="ucp-qa-overlay" id="ucp-qa-modal" role="dialog" aria-modal="true" aria-labelledby="ucp-qa-title" aria-hidden="true">
  <div class="ucp-qa-panel">
    <button type="button" class="ucp-qa-close" id="ucp-qa-close" aria-label="Close">&times;</button>

    <div class="ucp-qa-steps" aria-hidden="true">
      <span class="ucp-qa-step-dot ucp-qa-step-active" data-ucp-qa-dot="program"><span class="ucp-qa-num">1</span> Program</span>
      <span class="ucp-qa-step-line"></span>
      <span class="ucp-qa-step-dot" data-ucp-qa-dot="fee"><span class="ucp-qa-num">2</span> Fee</span>
      <span class="ucp-qa-step-line"></span>
      <span class="ucp-qa-step-dot" data-ucp-qa-dot="form"><span class="ucp-qa-num">3</span> Application</span>
      <span class="ucp-qa-step-line"></span>
      <span class="ucp-qa-step-dot" data-ucp-qa-dot="confirm"><span class="ucp-qa-num">4</span> Confirmation</span>
    </div>

    <!-- STEP 1: SELECT PROGRAM -->
    <div class="ucp-qa-view ucp-qa-view-active" data-ucp-qa-view="program">
      <div class="ucp-qa-header">
        <h3 id="ucp-qa-title">Select a Program</h3>
        <p>Choose the UCP faculty or program you'd like to apply to.</p>
      </div>
      <div class="ucp-qa-program-list" id="ucp-qa-program-list" role="radiogroup" aria-label="Select a program"></div>
      <button type="button" class="ucp-btn-gold ucp-btn-block" id="ucp-qa-to-fee" disabled>Continue to Fee Structure</button>
    </div>

    <!-- STEP 2: FEE STRUCTURE -->
    <div class="ucp-qa-view" data-ucp-qa-view="fee">
      <div class="ucp-qa-header">
        <h3>Fee Structure</h3>
        <p id="ucp-qa-fee-program-label"></p>
      </div>
      <p class="ucp-qa-fee-note">Exact fees are set and published by UCP and can change between intakes. Select your seat category below — confirm the exact amount with UCP admissions before applying.</p>
      <div class="ucp-qa-fee-options" id="ucp-qa-fee-options" role="radiogroup" aria-label="Select your fee category"></div>
      <div class="ucp-qa-form-actions">
        <button type="button" class="ucp-btn-outline" id="ucp-qa-back-program">Back</button>
        <button type="button" class="ucp-btn-gold" id="ucp-qa-to-form" disabled>Continue to Application</button>
      </div>
    </div>

    <!-- STEP 3: APPLICATION FORM -->
    <div class="ucp-qa-view" data-ucp-qa-view="form">
      <div class="ucp-qa-header">
        <h3>Application Details</h3>
        <p>Fill in your details below. Your application is sent directly by email to our admissions team.</p>
      </div>
      <form id="ucp-qa-form" novalidate>
        <div class="ucp-modal-grid">
          <div class="ucp-mfield" data-ucp-qafield="name">
            <label for="ucp-qa-name">Full Name</label>
            <input type="text" id="ucp-qa-name" name="name" placeholder="e.g. Ayesha Khan" autocomplete="name">
            <span class="ucp-mfield-error">Please enter your full name.</span>
          </div>
          <div class="ucp-mfield" data-ucp-qafield="father">
            <label for="ucp-qa-father">Father's Name</label>
            <input type="text" id="ucp-qa-father" name="father" placeholder="e.g. Muhammad Khan" autocomplete="off">
            <span class="ucp-mfield-error">Please enter your father's name.</span>
          </div>
          <div class="ucp-mfield" data-ucp-qafield="cnic">
            <label for="ucp-qa-cnic">CNIC / B-Form Number</label>
            <input type="text" id="ucp-qa-cnic" name="cnic" placeholder="XXXXX-XXXXXXX-X" autocomplete="off">
            <span class="ucp-mfield-error">Please enter your CNIC or B-Form number.</span>
          </div>
          <div class="ucp-mfield" data-ucp-qafield="phone">
            <label for="ucp-qa-phone">Phone</label>
            <input type="tel" id="ucp-qa-phone" name="phone" placeholder="03XX XXXXXXX" autocomplete="tel">
            <span class="ucp-mfield-error">Please enter a valid phone number.</span>
          </div>
          <div class="ucp-mfield" data-ucp-qafield="email">
            <label for="ucp-qa-email">Email</label>
            <input type="email" id="ucp-qa-email" name="email" placeholder="you@example.com" autocomplete="email">
            <span class="ucp-mfield-error">Please enter a valid email address.</span>
          </div>
          <div class="ucp-mfield" data-ucp-qafield="city">
            <label for="ucp-qa-city">City</label>
            <input type="text" id="ucp-qa-city" name="city" placeholder="e.g. Lahore" autocomplete="address-level2">
            <span class="ucp-mfield-error">Please enter your city.</span>
          </div>
          <div class="ucp-mfield" data-ucp-qafield="matricRoll">
            <label for="ucp-qa-matric-roll">Matriculation Roll Number</label>
            <input type="text" id="ucp-qa-matric-roll" name="matricRoll" placeholder="e.g. 123456" autocomplete="off">
            <span class="ucp-mfield-error">Please enter your matriculation roll number.</span>
          </div>
          <div class="ucp-mfield" data-ucp-qafield="matricPct">
            <label for="ucp-qa-matric-pct">Matriculation Percentage</label>
            <input type="text" id="ucp-qa-matric-pct" name="matricPct" placeholder="e.g. 85%" autocomplete="off">
            <span class="ucp-mfield-error">Please enter your matriculation percentage.</span>
          </div>
          <div class="ucp-mfield" data-ucp-qafield="interRoll">
            <label for="ucp-qa-inter-roll">Intermediate Roll Number</label>
            <input type="text" id="ucp-qa-inter-roll" name="interRoll" placeholder="e.g. 654321" autocomplete="off">
            <span class="ucp-mfield-error">Please enter your intermediate roll number.</span>
          </div>
          <div class="ucp-mfield" data-ucp-qafield="interPct">
            <label for="ucp-qa-inter-pct">Intermediate Percentage</label>
            <input type="text" id="ucp-qa-inter-pct" name="interPct" placeholder="e.g. 78%" autocomplete="off">
            <span class="ucp-mfield-error">Please enter your intermediate percentage.</span>
          </div>
          <div class="ucp-mfield" style="grid-column:1/-1;">
            <label for="ucp-qa-message">Message <span style="font-weight:500; color:var(--ucp-ink-soft);">(optional)</span></label>
            <textarea id="ucp-qa-message" name="message" placeholder="Anything else you'd like us to know?"></textarea>
          </div>
        </div>
        <div class="ucp-qa-form-actions">
          <button type="button" class="ucp-btn-outline" id="ucp-qa-back-fee">Back</button>
          <button type="submit" class="ucp-btn-gold" id="ucp-qa-submit">Submit Application</button>
        </div>
      </form>
    </div>

    <!-- STEP 4: CONFIRMATION -->
    <div class="ucp-qa-view" data-ucp-qa-view="confirm">
      <div class="ucp-qa-confirm">
        <div class="ucp-check"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M5 13l4 4L19 7"/></svg></div>
        <h3>Application Sent</h3>
        <p>Your email app should now open with your application pre-filled and addressed to info@eduapply.online. If it didn't open automatically, please send your details there directly.</p>
        <div class="ucp-qa-confirm-summary" id="ucp-qa-confirm-summary"></div>
        <button type="button" class="ucp-btn-outline" id="ucp-qa-done" style="margin-top:16px;">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- ============================================================
     WELCOME / ADMISSION ANNOUNCEMENT POPUP (auto-shows once per session)
     ============================================================ -->
<?php $ccx_welcome = ccx_welcome_popup( 'ucp' ); ?>
<?php if ( $ccx_welcome['enabled'] && $ccx_welcome['image'] ) : ?>
<div class="ucp-welcome-overlay" id="ucp-welcome-modal" role="dialog" aria-modal="true" aria-label="UCP Admissions" aria-hidden="true">
  <div class="ucp-welcome-panel">
    <button type="button" class="ucp-welcome-close" id="ucp-welcome-close" aria-label="Close">&times;</button>
    <button type="button" class="ucp-welcome-image ucp-quickapply-trigger" id="ucp-welcome-apply" aria-label="Apply Now at UCP">
      <img src="<?php echo esc_url( $ccx_welcome['image'] ); ?>" alt="<?php echo esc_attr( $ccx_welcome['alt'] ); ?>">
    </button>
  </div>
</div>
<?php endif; ?>

</div><!-- /#ucp-page -->

<script>
var ucpHomepage = (function(){
  "use strict";

  var ucpConfig = {
    whatsappNumber: "<?php echo esc_js( ccx_whatsapp_number( 'UCP' ) ); ?>",
    whatsappMessage: "Hello, I have a question about UCP admissions."
  };

  function ucpInit(){
    ucpSetupMobileNav();
    ucpSetupWhatsapp();
    ucpSetupCourseForm();
    ucpSetupBackToTop();
    ucpSetupHeroSlider();
    ucpSetupScrollReveal();
    ucpSetupFooterYear();
    ucpSetupAdmissionModal();
    ucpSetupDeptModal();
    ucpSetupNotifyBar();
    ucpSetupQuickApply();
    ucpSetupWelcomePopup();
  }

  /* ============================================================
     ADMISSION DATES — configurable. Only NUML had a verified live
     deadline at build time; every other page shows an honest
     placeholder until the site owner supplies confirmed dates.
     ============================================================ */
  // Set at Appearance → Customize → EduApply Settings → Admission Dates Bar.
  var ucpAdmissionInfo = {
    lastDateToApply: "<?php echo esc_js( $ccx_dates['lastDate'] ); ?>",
    entryTestDate: "<?php echo esc_js( $ccx_dates['meritDate'] ); ?>"
  };
  var ucpQuickApplyEmail = "info@eduapply.online";
  var ucpQuickApplyBound = false;
  var ucpQaSelectedProgram = null;
  var ucpQaSelectedFee = null;

  // Real UCP faculties, matching the "Find a Course" section on this page.
  var ucpPrograms = [
    "Faculty of Management Sciences",
    "Faculty of Information Technology & Computer Science",
    "Faculty of Engineering",
    "Faculty of Pharmaceutical Sciences",
    "Faculty of Media & Mass Communication",
    "Faculty of Law",
    "Faculty of Languages & Literature",
    "Faculty of Humanities & Social Sciences",
    "Faculty of Science & Technology",
    "Associate Degree Programs"
  ];
  // Generic, non-fabricated fee categories used across Pakistani university
  // admissions. No specific amounts are shown — only UCP admissions can
  // confirm exact figures.
  var ucpFeeCategories = [
    { key:"regular", title:"Regular / Merit Seat", amount:"Confirm with UCP" },
    { key:"selffinance", title:"Self-Finance Seat", amount:"Confirm with UCP" }
  ];

  function ucpSetupNotifyBar(){
    var lastDateEl = document.getElementById("ucp-notify-lastdate");
    var entryTestEl = document.getElementById("ucp-notify-entrytest");
    if(lastDateEl) lastDateEl.textContent = ucpAdmissionInfo.lastDateToApply;
    if(entryTestEl) entryTestEl.textContent = ucpAdmissionInfo.entryTestDate;
  }

  /* ---------- QUICK APPLY MODAL (4-step: Program → Fee → Application → Confirmation) ---------- */
  function ucpQuickApplyGoTo(view){
    document.querySelectorAll("#ucp-page .ucp-qa-view").forEach(function(v){
      v.classList.toggle("ucp-qa-view-active", v.getAttribute("data-ucp-qa-view") === view);
    });
    document.querySelectorAll("#ucp-page .ucp-qa-step-dot").forEach(function(dot){
      var order = ["program","fee","form","confirm"];
      var dotStep = dot.getAttribute("data-ucp-qa-dot");
      dot.classList.toggle("ucp-qa-step-active", dotStep === view);
      dot.classList.toggle("ucp-qa-step-done", order.indexOf(dotStep) < order.indexOf(view));
    });
  }

  function ucpRenderProgramList(){
    var list = document.getElementById("ucp-qa-program-list");
    if(!list) return;
    list.innerHTML = ucpPrograms.map(function(p, i){
      return '<label class="ucp-qa-program-opt" data-ucp-qa-program="' + i + '">' +
        '<input type="radio" name="ucpQaProgram" value="' + i + '">' +
        '<span>' + p + '</span></label>';
    }).join("");

    list.querySelectorAll(".ucp-qa-program-opt").forEach(function(opt){
      opt.addEventListener("click", function(){
        list.querySelectorAll(".ucp-qa-program-opt").forEach(function(o){ o.classList.remove("ucp-qa-selected"); });
        opt.classList.add("ucp-qa-selected");
        opt.querySelector("input").checked = true;
        ucpQaSelectedProgram = ucpPrograms[parseInt(opt.getAttribute("data-ucp-qa-program"), 10)];
        var toFeeBtn = document.getElementById("ucp-qa-to-fee");
        if(toFeeBtn) toFeeBtn.disabled = false;
      });
    });
  }

  function ucpRenderFeeOptions(){
    var wrap = document.getElementById("ucp-qa-fee-options");
    var label = document.getElementById("ucp-qa-fee-program-label");
    if(label) label.textContent = ucpQaSelectedProgram || "";
    if(!wrap) return;
    wrap.innerHTML = ucpFeeCategories.map(function(f, i){
      return '<label class="ucp-qa-fee-opt" data-ucp-qa-fee="' + i + '">' +
        '<span class="ucp-qa-fee-opt-left"><input type="radio" name="ucpQaFee" value="' + i + '"><span class="ucp-qa-fee-opt-title">' + f.title + '</span></span>' +
        '<span class="ucp-qa-fee-opt-amount">' + f.amount + '</span></label>';
    }).join("");

    wrap.querySelectorAll(".ucp-qa-fee-opt").forEach(function(opt){
      opt.addEventListener("click", function(){
        wrap.querySelectorAll(".ucp-qa-fee-opt").forEach(function(o){ o.classList.remove("ucp-qa-selected"); });
        opt.classList.add("ucp-qa-selected");
        opt.querySelector("input").checked = true;
        ucpQaSelectedFee = ucpFeeCategories[parseInt(opt.getAttribute("data-ucp-qa-fee"), 10)].title;
        var toFormBtn = document.getElementById("ucp-qa-to-form");
        if(toFormBtn) toFormBtn.disabled = false;
      });
    });
  }

  function ucpOpenQuickApply(){
    var overlay = document.getElementById("ucp-qa-modal");
    if(!overlay) return;
    var form = document.getElementById("ucp-qa-form");
    if(form) form.reset();
    document.querySelectorAll("#ucp-qa-form .ucp-mfield").forEach(function(f){ f.classList.remove("ucp-merror"); });

    ucpQaSelectedProgram = null;
    ucpQaSelectedFee = null;
    var toFeeBtn = document.getElementById("ucp-qa-to-fee");
    var toFormBtn = document.getElementById("ucp-qa-to-form");
    if(toFeeBtn) toFeeBtn.disabled = true;
    if(toFormBtn) toFormBtn.disabled = true;

    ucpRenderProgramList();
    ucpQuickApplyGoTo("program");
    overlay.classList.add("ucp-qa-open");
    overlay.setAttribute("aria-hidden", "false");
    document.body.style.overflow = "hidden";
  }
  function ucpCloseQuickApply(){
    var overlay = document.getElementById("ucp-qa-modal");
    if(!overlay) return;
    overlay.classList.remove("ucp-qa-open");
    overlay.setAttribute("aria-hidden", "true");
    document.body.style.overflow = "";
  }

  function ucpSetupQuickApply(){
    if(ucpQuickApplyBound) return;
    ucpQuickApplyBound = true;

    var overlay = document.getElementById("ucp-qa-modal");
    var closeBtn = document.getElementById("ucp-qa-close");
    var doneBtn = document.getElementById("ucp-qa-done");
    var form = document.getElementById("ucp-qa-form");
    var toFeeBtn = document.getElementById("ucp-qa-to-fee");
    var toFormBtn = document.getElementById("ucp-qa-to-form");
    var backProgramBtn = document.getElementById("ucp-qa-back-program");
    var backFeeBtn = document.getElementById("ucp-qa-back-fee");
    if(!overlay || !closeBtn || !form) return;

    document.querySelectorAll("#ucp-page .ucp-quickapply-trigger").forEach(function(trigger){
      trigger.addEventListener("click", function(e){
        e.preventDefault();
        window.location.href = "/admissions/apply?university=UCP";
      });
    });

    closeBtn.addEventListener("click", ucpCloseQuickApply);
    if(doneBtn) doneBtn.addEventListener("click", ucpCloseQuickApply);
    overlay.addEventListener("click", function(e){ if(e.target === overlay) ucpCloseQuickApply(); });
    document.addEventListener("keydown", function(e){
      if(e.key === "Escape" && overlay.classList.contains("ucp-qa-open")) ucpCloseQuickApply();
    });

    if(toFeeBtn) toFeeBtn.addEventListener("click", function(){
      if(!ucpQaSelectedProgram) return;
      ucpRenderFeeOptions();
      ucpQuickApplyGoTo("fee");
    });
    if(backProgramBtn) backProgramBtn.addEventListener("click", function(){ ucpQuickApplyGoTo("program"); });
    if(toFormBtn) toFormBtn.addEventListener("click", function(){
      if(!ucpQaSelectedFee) return;
      ucpQuickApplyGoTo("form");
    });
    if(backFeeBtn) backFeeBtn.addEventListener("click", function(){ ucpQuickApplyGoTo("fee"); });

    function setError(fieldEl, hasError){ if(fieldEl) fieldEl.classList.toggle("ucp-merror", hasError); }
    function isValidEmail(v){ return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(v); }
    function isValidPhone(v){ var d = v.replace(/[^\d]/g,""); return d.length >= 10 && d.length <= 13; }
    function req(field, value, minLen){
      var el = form.querySelector('[data-ucp-qafield="' + field + '"]');
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

      var phoneField = form.querySelector('[data-ucp-qafield="phone"]');
      if(!isValidPhone(form.phone.value.trim())){ setError(phoneField, true); valid = false; } else { setError(phoneField, false); }

      var emailField = form.querySelector('[data-ucp-qafield="email"]');
      if(!isValidEmail(form.email.value.trim())){ setError(emailField, true); valid = false; } else { setError(emailField, false); }

      if(!req("city", form.city.value, 2)) valid = false;
      if(!req("matricRoll", form.matricRoll.value, 1)) valid = false;
      if(!req("matricPct", form.matricPct.value, 1)) valid = false;
      if(!req("interRoll", form.interRoll.value, 1)) valid = false;
      if(!req("interPct", form.interPct.value, 1)) valid = false;

      if(!valid){
        var firstError = form.querySelector(".ucp-mfield.ucp-merror");
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

      var subject = "Admission Application — UCP (" + ucpQaSelectedProgram + ")";
      var bodyLines = [
        "University: University of Central Punjab",
        "Program: " + ucpQaSelectedProgram,
        "Fee Category: " + ucpQaSelectedFee,
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
      var mailtoUrl = "mailto:" + encodeURIComponent(ucpQuickApplyEmail) + "?subject=" + encodeURIComponent(subject) + "&body=" + encodeURIComponent(bodyLines.join("\n"));

      // Opens the visitor's own email client with the application pre-filled.
      // No backend is connected on this static page.
      window.location.href = mailtoUrl;

      var summaryEl = document.getElementById("ucp-qa-confirm-summary");
      if(summaryEl){
        summaryEl.innerHTML =
          "<div><strong>Program:</strong> " + ucpQaSelectedProgram + "</div>" +
          "<div><strong>Fee Category:</strong> " + ucpQaSelectedFee + "</div>" +
          "<div><strong>Name:</strong> " + name + "</div>" +
          "<div><strong>Phone:</strong> " + phone + "</div>" +
          "<div><strong>Email:</strong> " + email + "</div>";
      }

      ucpQuickApplyGoTo("confirm");
    });
  }

  /* ---------- WELCOME / ADMISSION POPUP (shows once per browser session) ---------- */
  function ucpCloseWelcomePopup(){
    var overlay = document.getElementById("ucp-welcome-modal");
    if(!overlay) return;
    overlay.classList.remove("ucp-welcome-open");
    overlay.setAttribute("aria-hidden", "true");
    document.body.style.overflow = "";
  }
  function ucpSetupWelcomePopup(){
    var overlay = document.getElementById("ucp-welcome-modal");
    var closeBtn = document.getElementById("ucp-welcome-close");
    var lastDateEl = document.getElementById("ucp-welcome-lastdate");
    var entryTestEl = document.getElementById("ucp-welcome-entrytest");
    if(!overlay || !closeBtn) return;

    if(lastDateEl) lastDateEl.textContent = ucpAdmissionInfo.lastDateToApply;
    if(entryTestEl) entryTestEl.textContent = ucpAdmissionInfo.entryTestDate;

    closeBtn.addEventListener("click", ucpCloseWelcomePopup);
    overlay.addEventListener("click", function(e){ if(e.target === overlay) ucpCloseWelcomePopup(); });
    document.addEventListener("keydown", function(e){
      if(e.key === "Escape" && overlay.classList.contains("ucp-welcome-open")) ucpCloseWelcomePopup();
    });

    var SESSION_KEY = "ccxSeenUcpWelcome";
    var alreadyShown = false;
    try { alreadyShown = window.sessionStorage.getItem(SESSION_KEY) === "1"; } catch(err){ alreadyShown = false; }

    if(!alreadyShown){
      window.setTimeout(function(){
        overlay.classList.add("ucp-welcome-open");
        overlay.setAttribute("aria-hidden", "false");
        document.body.style.overflow = "hidden";
        try { window.sessionStorage.setItem(SESSION_KEY, "1"); } catch(err){}
      }, 1200);
    }
  }

  /* ============================================================
     FACULTY/DEPARTMENT MULTI-STEP MODAL
     (Fee Structure → Application Form → Confirmation, submitted via email)
     ============================================================ */
  // TODO: replace with UCP's real admissions email before going live.
  var ucpDeptEmail = "info@ucp.edu.pk";
  var ucpDeptCurrent = null;

  function ucpDeptGoToStep(step){
    document.querySelectorAll("#ucp-page .ucp-dept-view").forEach(function(view){
      view.classList.toggle("ucp-dept-view-active", view.getAttribute("data-ucp-dept-view") === String(step));
    });
    document.querySelectorAll("#ucp-page .ucp-dept-step-dot").forEach(function(dot){
      var dotStep = parseInt(dot.getAttribute("data-ucp-dept-dot"), 10);
      dot.classList.toggle("ucp-dept-step-active", dotStep === step);
      dot.classList.toggle("ucp-dept-step-done", dotStep < step);
    });
  }

  function ucpOpenDeptModal(programName, url){
    var overlay = document.getElementById("ucp-dept-modal");
    if(!overlay) return;
    ucpDeptCurrent = { program: programName, url: url || "#" };

    var tag1 = document.getElementById("ucp-dept-tag-1");
    var tag2 = document.getElementById("ucp-dept-tag-2");
    if(tag1) tag1.textContent = programName + " · UCP";
    if(tag2) tag2.textContent = programName + " · UCP";

    var link = document.getElementById("ucp-dept-uni-link");
    if(link) link.setAttribute("href", url || "#");

    var form = document.getElementById("ucp-dept-form");
    if(form) form.reset();
    document.querySelectorAll("#ucp-dept-form .ucp-mfield").forEach(function(f){ f.classList.remove("ucp-merror"); });

    ucpDeptGoToStep(1);
    overlay.classList.add("ucp-dept-open");
    overlay.setAttribute("aria-hidden", "false");
    document.body.style.overflow = "hidden";
  }
  function ucpCloseDeptModal(){
    var overlay = document.getElementById("ucp-dept-modal");
    if(!overlay) return;
    overlay.classList.remove("ucp-dept-open");
    overlay.setAttribute("aria-hidden", "true");
    document.body.style.overflow = "";
  }

  function ucpSetupDeptModal(){
    var overlay = document.getElementById("ucp-dept-modal");
    var closeBtn = document.getElementById("ucp-dept-close");
    var toStep2 = document.getElementById("ucp-dept-to-step2");
    var backStep1 = document.getElementById("ucp-dept-back-step1");
    var doneBtn = document.getElementById("ucp-dept-done");
    var form = document.getElementById("ucp-dept-form");
    if(!overlay || !closeBtn || !form) return;

    document.querySelectorAll("#ucp-page .ucp-dept-trigger").forEach(function(card){
      card.addEventListener("click", function(e){
        e.preventDefault();
        var nameEl = card.querySelector(".ucp-faculty-name");
        var programName = nameEl ? nameEl.textContent.replace("→", "").trim() : "Faculty";
        window.location.href = "/admissions/apply?university=UCP&program=" + encodeURIComponent(programName);
      });
    });

    closeBtn.addEventListener("click", ucpCloseDeptModal);
    if(doneBtn) doneBtn.addEventListener("click", ucpCloseDeptModal);
    overlay.addEventListener("click", function(e){ if(e.target === overlay) ucpCloseDeptModal(); });
    document.addEventListener("keydown", function(e){
      if(e.key === "Escape" && overlay.classList.contains("ucp-dept-open")) ucpCloseDeptModal();
    });
    if(toStep2) toStep2.addEventListener("click", function(){ ucpDeptGoToStep(2); });
    if(backStep1) backStep1.addEventListener("click", function(){ ucpDeptGoToStep(1); });

    function setError(fieldEl, hasError){ if(fieldEl) fieldEl.classList.toggle("ucp-merror", hasError); }
    function isValidEmail(v){ return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(v); }
    function isValidPhone(v){ var d = v.replace(/[^\d]/g,""); return d.length >= 10 && d.length <= 13; }

    form.addEventListener("submit", function(e){
      e.preventDefault();
      var valid = true;

      var name = form.name.value.trim();
      var nameField = form.querySelector('[data-ucp-dfield="name"]');
      if(name.length < 2){ setError(nameField, true); valid = false; } else { setError(nameField, false); }

      var phone = form.phone.value.trim();
      var phoneField = form.querySelector('[data-ucp-dfield="phone"]');
      if(!isValidPhone(phone)){ setError(phoneField, true); valid = false; } else { setError(phoneField, false); }

      var email = form.email.value.trim();
      var emailField = form.querySelector('[data-ucp-dfield="email"]');
      if(!isValidEmail(email)){ setError(emailField, true); valid = false; } else { setError(emailField, false); }

      var city = form.city.value.trim();
      var message = form.message.value.trim();

      if(!valid){
        var firstError = form.querySelector(".ucp-mfield.ucp-merror");
        if(firstError){ firstError.scrollIntoView({behavior:"smooth", block:"center"}); }
        return;
      }

      var info = ucpDeptCurrent || { program:"" };
      var subject = "Admission Application — " + info.program + " (UCP)";
      var bodyLines = ["Faculty: " + info.program, "University: University of Central Punjab", "Name: " + name, "Phone: " + phone, "Email: " + email];
      if(city) bodyLines.push("City: " + city);
      if(message) bodyLines.push("Message: " + message);
      var mailtoUrl = "mailto:" + encodeURIComponent(ucpDeptEmail) + "?subject=" + encodeURIComponent(subject) + "&body=" + encodeURIComponent(bodyLines.join("\n"));

      // Opens the visitor's own email client with the application pre-filled.
      // No backend is connected on this static page.
      window.location.href = mailtoUrl;

      var summaryEl = document.getElementById("ucp-dept-summary");
      if(summaryEl){
        summaryEl.innerHTML =
          "<div><strong>Faculty:</strong> " + info.program + "</div>" +
          "<div><strong>Name:</strong> " + name + "</div>" +
          "<div><strong>Phone:</strong> " + phone + "</div>" +
          "<div><strong>Email:</strong> " + email + "</div>";
      }
      var fallbackEl = document.getElementById("ucp-dept-fallback-email");
      if(fallbackEl) fallbackEl.textContent = "Send to: " + ucpDeptEmail;

      ucpDeptGoToStep(3);
    });
  }

  /* ---------- ADMISSION INQUIRY MODAL (WhatsApp) ---------- */
  function ucpSetupAdmissionModal(){
    var overlay = document.getElementById("ucp-admission-modal");
    var closeBtn = document.getElementById("ucp-modal-close");
    var form = document.getElementById("ucp-admission-form");
    if(!overlay || !closeBtn || !form) return;

    // TODO: set UCP's real WhatsApp/admissions helpline number before going live
    var ucpAdmissionWhatsapp = "<?php echo esc_js( ccx_whatsapp_number( 'UCP' ) ); ?>";

    function ucpOpenModal(prefill){
      overlay.classList.add("ucp-modal-open");
      overlay.setAttribute("aria-hidden", "false");
      document.body.style.overflow = "hidden";
      if(prefill && prefill.program) form.program.value = prefill.program;
      window.setTimeout(function(){ form.name.focus(); }, 250);
    }
    function ucpCloseModal(){
      overlay.classList.remove("ucp-modal-open");
      overlay.setAttribute("aria-hidden", "true");
      document.body.style.overflow = "";
    }

    document.querySelectorAll("#ucp-page .ucp-admission-trigger").forEach(function(trigger){
      trigger.addEventListener("click", function(e){
        e.preventDefault();
        window.location.href = "/admissions/apply?university=UCP";
      });
    });

    closeBtn.addEventListener("click", ucpCloseModal);
    overlay.addEventListener("click", function(e){ if(e.target === overlay) ucpCloseModal(); });
    document.addEventListener("keydown", function(e){
      if(e.key === "Escape" && overlay.classList.contains("ucp-modal-open")) ucpCloseModal();
    });

    function setError(fieldEl, hasError){ if(fieldEl) fieldEl.classList.toggle("ucp-merror", hasError); }
    function isValidEmail(v){ return v === "" || /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(v); }
    function isValidPhone(v){ var d = v.replace(/[^\d]/g,""); return d.length >= 10 && d.length <= 13; }

    form.addEventListener("submit", function(e){
      e.preventDefault();
      var valid = true;

      var name = form.name.value.trim();
      var nameField = form.querySelector('[data-ucp-field="name"]');
      if(name.length < 2){ setError(nameField, true); valid = false; } else { setError(nameField, false); }

      var phone = form.phone.value.trim();
      var phoneField = form.querySelector('[data-ucp-field="phone"]');
      if(!isValidPhone(phone)){ setError(phoneField, true); valid = false; } else { setError(phoneField, false); }

      var email = form.email.value.trim();
      var emailField = form.querySelector('[data-ucp-field="email"]');
      if(!isValidEmail(email)){ setError(emailField, true); valid = false; } else { setError(emailField, false); }

      var city = form.city.value.trim();

      var program = form.program.value.trim();
      var programField = form.querySelector('[data-ucp-field="program"]');
      if(program.length < 2){ setError(programField, true); valid = false; } else { setError(programField, false); }

      var message = form.message.value.trim();

      if(!valid){
        var firstError = form.querySelector(".ucp-mfield.ucp-merror");
        if(firstError){ firstError.scrollIntoView({behavior:"smooth", block:"center"}); }
        return;
      }

      var lines = [
        "Hello, I would like to apply for admission at UCP.",
        "Name: " + name,
        "Phone: " + phone
      ];
      if(email) lines.push("Email: " + email);
      if(city) lines.push("City: " + city);
      lines.push("Program of Interest: " + program);
      if(message) lines.push("Message: " + message);

      var waBase = ucpAdmissionWhatsapp ? ("https://wa.me/" + ucpAdmissionWhatsapp) : "https://wa.me/";
      var waUrl = waBase + "?text=" + encodeURIComponent(lines.join("\n"));

      window.open(waUrl, "_blank", "noopener");
      ucpCloseModal();
      form.reset();
    });
  }

  /* ---------- HERO SLIDER (image + heading word change together) ---------- */
  function ucpSetupHeroSlider(){
    var slidesWrap = document.getElementById("ucp-hero-slides");
    var headingWrap = document.getElementById("ucp-hero-heading-wrap");
    var dotsWrap = document.getElementById("ucp-hero-dots");
    var prevBtn = document.getElementById("ucp-hero-prev");
    var nextBtn = document.getElementById("ucp-hero-next");
    if(!slidesWrap || !headingWrap || !dotsWrap) return;

    var slides = slidesWrap.querySelectorAll(".ucp-hero-slide");
    var headings = headingWrap.querySelectorAll(".ucp-hero-heading");
    if(!slides.length) return;

    var current = 0;
    var slideTimer;
    var AUTOPLAY_MS = 5500;

    slides.forEach(function(_, i){
      var dot = document.createElement("button");
      dot.type = "button";
      dot.setAttribute("aria-label", "Go to slide " + (i + 1));
      if(i === 0) dot.classList.add("ucp-active");
      dot.addEventListener("click", function(){ ucpGoTo(i); ucpResetAutoplay(); });
      dotsWrap.appendChild(dot);
    });
    var dots = dotsWrap.querySelectorAll("button");

    function ucpGoTo(index){
      var next = (index + slides.length) % slides.length;
      slides[current].classList.remove("ucp-active");
      dots[current].classList.remove("ucp-active");
      if(headings[current]) headings[current].classList.remove("ucp-active");

      current = next;

      slides[current].classList.add("ucp-active");
      dots[current].classList.add("ucp-active");
      if(headings[current]) headings[current].classList.add("ucp-active");
    }
    function ucpNext(){ ucpGoTo(current + 1); }
    function ucpPrev(){ ucpGoTo(current - 1); }
    function ucpResetAutoplay(){
      window.clearInterval(slideTimer);
      slideTimer = window.setInterval(ucpNext, AUTOPLAY_MS);
    }

    if(nextBtn) nextBtn.addEventListener("click", function(){ ucpNext(); ucpResetAutoplay(); });
    if(prevBtn) prevBtn.addEventListener("click", function(){ ucpPrev(); ucpResetAutoplay(); });

    var heroFrame = slidesWrap.closest(".ucp-hero-frame");
    if(heroFrame){
      heroFrame.addEventListener("mouseenter", function(){ window.clearInterval(slideTimer); });
      heroFrame.addEventListener("mouseleave", ucpResetAutoplay);
    }

    ucpResetAutoplay();
  }

  function ucpSetupMobileNav(){
    var btn = document.getElementById("ucp-hamburger-btn");
    var nav = document.getElementById("ucp-mobile-nav");
    if(!btn || !nav) return;
    btn.addEventListener("click", function(){
      var isOpen = nav.classList.toggle("ucp-open");
      btn.classList.toggle("ucp-active", isOpen);
      btn.setAttribute("aria-expanded", isOpen ? "true" : "false");
    });
    nav.querySelectorAll("a").forEach(function(a){
      a.addEventListener("click", function(){
        nav.classList.remove("ucp-open");
        btn.classList.remove("ucp-active");
        btn.setAttribute("aria-expanded", "false");
      });
    });
  }

  function ucpSetupWhatsapp(){
    var link = document.getElementById("ucp-whatsapp");
    if(!link) return;
    var number = ucpConfig.whatsappNumber && ucpConfig.whatsappNumber.trim() ? ucpConfig.whatsappNumber.trim() : "";
    var base = number ? ("https://wa.me/" + number) : "https://wa.me/";
    link.setAttribute("href", base + "?text=" + encodeURIComponent(ucpConfig.whatsappMessage));
  }

  // Frontend-only search UI — no backend/search API is connected yet.
  function ucpSetupCourseForm(){
    var form = document.getElementById("ucp-course-form");
    if(!form) return;
    form.addEventListener("submit", function(e){
      e.preventDefault();
      console.log("Course search submitted (no backend connected yet).");
    });
  }

  function ucpSetupBackToTop(){
    var link = document.getElementById("ucp-back-top");
    if(!link) return;
    link.addEventListener("click", function(e){
      e.preventDefault();
      window.scrollTo({top:0, behavior:"smooth"});
    });
  }

  function ucpSetupScrollReveal(){
    var els = document.querySelectorAll("#ucp-page .ucp-reveal");
    if(!els.length) return;
    if("IntersectionObserver" in window){
      var io = new IntersectionObserver(function(entries){
        entries.forEach(function(entry){
          if(entry.isIntersecting){
            entry.target.classList.add("ucp-in");
            io.unobserve(entry.target);
          }
        });
      }, {threshold:0.1, rootMargin:"0px 0px -60px 0px"});
      els.forEach(function(el){ io.observe(el); });
    } else {
      els.forEach(function(el){ el.classList.add("ucp-in"); });
    }
  }

  function ucpSetupFooterYear(){
    var el = document.getElementById("ucp-year");
    if(el) el.textContent = new Date().getFullYear();
  }

  return { init: ucpInit };
})();

if(document.readyState === "loading"){
  document.addEventListener("DOMContentLoaded", ucpHomepage.init);
} else {
  ucpHomepage.init();
}
</script>

<?php wp_footer(); ?>
</body>
</html>
