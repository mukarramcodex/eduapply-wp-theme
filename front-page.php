<?php
/**
 * Front page template (auto-used by WordPress for the site homepage).
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Find Your University — Admissions Guide</title>
<meta name="description" content="Explore six leading universities, compare programs and get free admission guidance — all in one place." />

<!--
  NAMESPACING NOTES (WordPress / Elementor safety)
  - Every CSS class and ID on this page is prefixed with "ccx-" (unique to this
    "EduApply" campaign) so it cannot collide with Elementor's own
    "elementor-*" classes, other page builders, or theme classes like
    .container / .btn / .hero / #top that are extremely common in WP themes.
  - All page content is scoped inside a single wrapper, #ccx-page. The global
    reset and base typography are applied to "#ccx-page, #ccx-page *" instead
    of "*"/"body", so nothing here touches the rest of a WordPress page if
    this markup is dropped into an Elementor HTML widget or a template part.
  - All JavaScript lives inside one IIFE (ccxCampusCompass) with prefixed
    internal function names (ccx*), so nothing is added to the global window
    object and nothing can collide with other plugins' scripts (jQuery, other
    theme JS, Elementor's own handlers, etc.). No global $ is used.
  - This file has no PHP in it (plain static HTML/CSS/JS). If it is later
    wired into a WordPress theme/plugin (e.g. as a page template or shortcode
    callback), prefix any PHP function names the same way, e.g.
    ccx_render_landing_page(), ccx_handle_lead_submission(), to avoid
    clashing with other plugins' function names.
-->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,400;0,9..144,500;0,9..144,600;0,9..144,700;1,9..144,500&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=IBM+Plex+Mono:wght@400;500&display=swap" rel="stylesheet">

<style>
/* ============================================================
   TOKENS (scoped as custom properties on the page wrapper)
   ============================================================ */
#ccx-page{
  --ccx-navy-950:#0A1120;
  --ccx-navy-900:#101B32;
  --ccx-navy-800:#16253F;
  --ccx-navy-700:#1D2E4F;
  --ccx-navy-600:#2A3E63;
  --ccx-ink:#15213A;
  --ccx-ink-soft:#4B5670;
  --ccx-paper:#F4F6FA;
  --ccx-paper-dim:#E9ECF3;
  --ccx-white:#FFFFFF;
  --ccx-gold:#C9972E;
  --ccx-gold-bright:#E4B450;
  --ccx-gold-dim:#8A6A22;
  --ccx-teal:#1F7A6C;
  --ccx-teal-bright:#28998A;
  --ccx-danger:#C1443C;
  --ccx-success:#1F7A5C;

  --ccx-font-display:'Fraunces', serif;
  --ccx-font-body:'Plus Jakarta Sans', sans-serif;
  --ccx-font-mono:'IBM Plex Mono', monospace;

  --ccx-radius-s:8px;
  --ccx-radius-m:16px;
  --ccx-radius-l:28px;
  --ccx-shadow-s:0 2px 10px rgba(16,27,50,0.08);
  --ccx-shadow-m:0 12px 32px rgba(16,27,50,0.14);
  --ccx-shadow-l:0 24px 60px rgba(16,27,50,0.22);
  --ccx-container:1280px;
}

/* Reset + base type — scoped to #ccx-page only, never global */
#ccx-page, #ccx-page *{box-sizing:border-box; margin:0; padding:0;}
#ccx-page{
  font-family:var(--ccx-font-body);
  color:var(--ccx-ink);
  background:var(--ccx-paper);
  overflow-x:hidden;
  -webkit-font-smoothing:antialiased;
  position:relative;
}
#ccx-page img{max-width:100%; display:block;}
#ccx-page a{color:inherit; text-decoration:none;}
#ccx-page button{font-family:inherit; cursor:pointer; border:none; background:none;}
#ccx-page ul{list-style:none;}
#ccx-page .ccx-container{max-width:var(--ccx-container); margin:0 auto; padding:0 clamp(20px,5vw,64px);}

@media (prefers-reduced-motion: reduce){
  #ccx-page *{animation-duration:0.001ms !important; animation-iteration-count:1 !important; transition-duration:0.001ms !important;}
}

#ccx-page :focus-visible{outline:3px solid var(--ccx-gold-bright); outline-offset:3px;}

#ccx-page .ccx-eyebrow{
  font-family:var(--ccx-font-mono);
  font-size:12.5px;
  letter-spacing:0.14em;
  text-transform:uppercase;
  color:var(--ccx-gold-dim);
  display:flex;
  align-items:center;
  gap:10px;
  margin-bottom:16px;
}
#ccx-page .ccx-eyebrow::before{
  content:"";
  width:26px; height:1px;
  background:var(--ccx-gold);
  display:inline-block;
}
#ccx-page .ccx-eyebrow.ccx-on-dark{color:var(--ccx-gold-bright);}

#ccx-page .ccx-section-head{max-width:640px; margin-bottom:48px;}
#ccx-page .ccx-section-head h2{
  font-family:var(--ccx-font-display);
  font-weight:600;
  font-size:clamp(30px,4vw,44px);
  line-height:1.12;
  color:var(--ccx-navy-900);
  letter-spacing:-0.01em;
}
#ccx-page .ccx-section-head p{
  margin-top:14px;
  font-size:16.5px;
  line-height:1.6;
  color:var(--ccx-ink-soft);
}
#ccx-page .ccx-section-head.ccx-center{margin-left:auto; margin-right:auto; text-align:center;}

#ccx-page .ccx-btn{
  display:inline-flex;
  align-items:center;
  justify-content:center;
  gap:10px;
  padding:15px 30px;
  border-radius:999px;
  font-weight:700;
  font-size:14.5px;
  letter-spacing:0.01em;
  transition:transform .25s ease, box-shadow .25s ease, background .25s ease, color .25s ease, border-color .25s ease;
  white-space:nowrap;
}
#ccx-page .ccx-btn-gold{
  background:linear-gradient(180deg, var(--ccx-gold-bright), var(--ccx-gold));
  color:var(--ccx-navy-950);
  box-shadow:0 8px 24px rgba(201,151,46,0.35);
}
#ccx-page .ccx-btn-gold:hover{transform:translateY(-2px); box-shadow:0 14px 30px rgba(201,151,46,0.45);}
#ccx-page .ccx-btn-outline{
  background:transparent;
  color:var(--ccx-white);
  border:1.5px solid rgba(255,255,255,0.55);
}
#ccx-page .ccx-btn-outline:hover{background:rgba(255,255,255,0.12); border-color:#fff; transform:translateY(-2px);}
#ccx-page .ccx-btn-outline-dark{
  background:transparent;
  color:var(--ccx-navy-900);
  border:1.5px solid rgba(16,27,50,0.28);
}
#ccx-page .ccx-btn-outline-dark:hover{background:var(--ccx-navy-900); color:#fff; transform:translateY(-2px);}
#ccx-page .ccx-btn-block{width:100%;}
#ccx-page .ccx-btn[disabled]{opacity:0.6; cursor:not-allowed; transform:none !important;}

/* ============================================================
   HEADER
   ============================================================ */
#ccx-page .ccx-site-header{
  position:fixed; top:0; left:0; right:0; z-index:900;
  padding:20px 0;
  transition:background .35s ease, padding .35s ease, box-shadow .35s ease, backdrop-filter .35s ease;
}
#ccx-page .ccx-site-header .ccx-container{display:flex; align-items:center; justify-content:space-between; gap:24px;}
#ccx-page .ccx-site-header.ccx-scrolled{
  padding:12px 0;
  background:rgba(10,17,32,0.82);
  backdrop-filter:blur(14px);
  -webkit-backdrop-filter:blur(14px);
  box-shadow:0 6px 24px rgba(0,0,0,0.18);
}
#ccx-page .ccx-brand{display:flex; align-items:center; gap:11px; font-family:var(--ccx-font-display); font-weight:600; font-size:21px; color:#fff;}
#ccx-page .ccx-brand-mark{
  width:38px; height:38px; border-radius:10px;
  background:linear-gradient(135deg, var(--ccx-gold-bright), var(--ccx-gold-dim));
  display:flex; align-items:center; justify-content:center;
  font-family:var(--ccx-font-mono); font-weight:600; font-size:13px; color:var(--ccx-navy-950);
  flex-shrink:0;
}
#ccx-page .ccx-brand .ccx-brand-small{display:block; font-family:var(--ccx-font-mono); font-size:10.5px; letter-spacing:0.12em; color:var(--ccx-gold-bright); font-weight:400; text-transform:uppercase; margin-top:1px;}

#ccx-page .ccx-main-nav{display:flex; align-items:center; gap:36px;}
#ccx-page .ccx-main-nav a{
  font-size:14.5px; font-weight:600; color:rgba(255,255,255,0.88);
  position:relative; padding:6px 0;
}
#ccx-page .ccx-main-nav a::after{
  content:""; position:absolute; left:0; bottom:0; width:0; height:2px;
  background:var(--ccx-gold-bright); transition:width .25s ease;
}
#ccx-page .ccx-main-nav a:hover::after{width:100%;}

#ccx-page .ccx-header-right{display:flex; align-items:center; gap:18px;}
#ccx-page .ccx-hamburger{
  display:none; width:44px; height:44px; border-radius:10px;
  align-items:center; justify-content:center;
  background:rgba(255,255,255,0.1);
  flex-direction:column; gap:5px;
}
#ccx-page .ccx-hamburger span{width:20px; height:2px; background:#fff; display:block; transition:transform .25s ease, opacity .25s ease;}
#ccx-page .ccx-hamburger.ccx-active span:nth-child(1){transform:translateY(7px) rotate(45deg);}
#ccx-page .ccx-hamburger.ccx-active span:nth-child(2){opacity:0;}
#ccx-page .ccx-hamburger.ccx-active span:nth-child(3){transform:translateY(-7px) rotate(-45deg);}

#ccx-page .ccx-mobile-drawer{
  position:fixed; inset:0; z-index:950;
  background:var(--ccx-navy-950);
  display:flex; flex-direction:column;
  padding:100px 32px 40px;
  transform:translateX(100%);
  transition:transform .4s cubic-bezier(.77,0,.18,1);
}
#ccx-page .ccx-mobile-drawer.ccx-open{transform:translateX(0);}
#ccx-page .ccx-mobile-drawer nav{display:flex; flex-direction:column; gap:6px;}
#ccx-page .ccx-mobile-drawer nav a{
  font-family:var(--ccx-font-display); font-size:26px; font-weight:500; color:#fff;
  padding:14px 0; border-bottom:1px solid rgba(255,255,255,0.08);
}
#ccx-page .ccx-mobile-drawer .ccx-btn{margin-top:28px;}
#ccx-page .ccx-drawer-close{
  position:absolute; top:24px; right:24px;
  width:44px; height:44px; border-radius:10px;
  background:rgba(255,255,255,0.08); color:#fff;
  display:flex; align-items:center; justify-content:center; font-size:22px;
}

@media (max-width:900px){
  #ccx-page .ccx-main-nav{display:none;}
  #ccx-page .ccx-header-right .ccx-btn{display:none;}
  #ccx-page .ccx-hamburger{display:flex;}
}

/* ============================================================
   HERO
   ============================================================ */
#ccx-page .ccx-hero{
  position:relative; height:100vh; min-height:640px;
  display:flex; align-items:flex-end;
  overflow:hidden;
  background:var(--ccx-navy-950);
}
#ccx-page .ccx-hero-slides{position:absolute; inset:0;}
#ccx-page .ccx-hero-slide{
  position:absolute; inset:0;
  opacity:0; transition:opacity 1.4s ease;
  background-size:cover; background-position:center;
}
#ccx-page .ccx-hero-slide.ccx-active{opacity:1;}
#ccx-page .ccx-hero-slide .ccx-kb{
  position:absolute; inset:-4%;
  background-size:cover; background-position:center;
  animation:ccxKenburns 14s ease-in-out infinite alternate;
}
@keyframes ccxKenburns{
  0%{transform:scale(1) translate(0,0);}
  100%{transform:scale(1.12) translate(-1.5%,-1.5%);}
}
#ccx-page .ccx-hero::after{
  content:"";
  position:absolute; inset:0;
  background:linear-gradient(0deg, rgba(8,13,24,0.94) 0%, rgba(8,13,24,0.68) 38%, rgba(8,13,24,0.42) 62%, rgba(8,13,24,0.55) 100%);
  z-index:1;
}
#ccx-page .ccx-hero-content{position:relative; z-index:2; width:100%; padding-bottom:clamp(56px,9vw,104px);}
#ccx-page .ccx-hero-text{transition:opacity .5s ease, transform .5s ease;}
#ccx-page .ccx-hero-text.ccx-fade{opacity:0; transform:translateY(10px);}
#ccx-page .ccx-hero-eyebrow{
  font-family:var(--ccx-font-mono); font-size:12.5px; letter-spacing:0.16em; text-transform:uppercase;
  color:var(--ccx-gold-bright); margin-bottom:22px; display:flex; align-items:center; gap:10px;
}
#ccx-page .ccx-hero-eyebrow::before{content:""; width:30px; height:1px; background:var(--ccx-gold-bright);}
#ccx-page .ccx-hero h1{
  font-family:var(--ccx-font-display); font-weight:600;
  font-size:clamp(38px,6.4vw,84px); line-height:1.03; letter-spacing:-0.02em;
  color:#fff; max-width:18ch;
}
#ccx-page .ccx-hero h1 em{font-style:italic; color:var(--ccx-gold-bright); font-weight:500;}
#ccx-page .ccx-hero-sub{
  margin-top:24px; font-size:clamp(16px,1.6vw,19px); line-height:1.6; color:rgba(255,255,255,0.82); max-width:52ch;
}
#ccx-page .ccx-hero-actions{display:flex; gap:16px; margin-top:38px; flex-wrap:wrap;}

#ccx-page .ccx-hero-dots{
  position:absolute; z-index:3; right:clamp(20px,5vw,64px); bottom:clamp(56px,9vw,104px);
  display:flex; flex-direction:column; gap:10px;
}
#ccx-page .ccx-hero-dots button{
  width:9px; height:9px; border-radius:50%;
  background:rgba(255,255,255,0.35); transition:all .3s ease;
}
#ccx-page .ccx-hero-dots button.ccx-active{background:var(--ccx-gold-bright); height:26px; border-radius:6px;}

#ccx-page .ccx-scroll-cue{
  position:absolute; left:clamp(20px,5vw,64px); bottom:32px; z-index:3;
  display:flex; align-items:center; gap:10px; color:rgba(255,255,255,0.6);
  font-family:var(--ccx-font-mono); font-size:11px; letter-spacing:0.1em; text-transform:uppercase;
}
#ccx-page .ccx-scroll-cue .ccx-line{width:1px; height:34px; background:rgba(255,255,255,0.3); position:relative; overflow:hidden;}
#ccx-page .ccx-scroll-cue .ccx-line::after{content:""; position:absolute; top:-100%; left:0; width:100%; height:100%; background:var(--ccx-gold-bright); animation:ccxScrolldrip 2s ease-in-out infinite;}
@keyframes ccxScrolldrip{0%{top:-100%;} 60%{top:100%;} 100%{top:100%;}}
@media (max-width:640px){#ccx-page .ccx-scroll-cue{display:none;}}

#ccx-page .ccx-hero-divider{
  position:absolute; z-index:2; bottom:-1px; left:0; right:0; height:64px;
  background:var(--ccx-paper);
  clip-path:polygon(0 100%, 100% 100%, 100% 40%, 0 100%);
}
@media (max-width:640px){#ccx-page .ccx-hero-divider{clip-path:polygon(0 100%,100% 100%, 100% 68%, 0 100%);}}

/* ============================================================
   UNIVERSITY GRID
   ============================================================ */
#ccx-page .ccx-uni-section{padding:120px 0 100px; position:relative;}
#ccx-page .ccx-uni-grid{
  display:grid; grid-template-columns:repeat(3, 1fr); gap:28px;
}
@media (max-width:1024px){#ccx-page .ccx-uni-grid{grid-template-columns:repeat(2,1fr);}}
@media (max-width:640px){#ccx-page .ccx-uni-grid{grid-template-columns:1fr;}}

#ccx-page .ccx-uni-card{
  position:relative; border-radius:var(--ccx-radius-l); overflow:hidden;
  background:var(--ccx-navy-900);
  box-shadow:var(--ccx-shadow-s);
  transition:transform .4s cubic-bezier(.2,.8,.2,1), box-shadow .4s ease;
  display:block;
}
#ccx-page .ccx-uni-card:hover{transform:translateY(-8px); box-shadow:var(--ccx-shadow-l);}
#ccx-page .ccx-uni-card-media{position:relative; height:250px; overflow:hidden;}
#ccx-page .ccx-uni-card-media img{width:100%; height:100%; object-fit:cover; transition:transform .7s cubic-bezier(.2,.8,.2,1);}
#ccx-page .ccx-uni-card:hover .ccx-uni-card-media img{transform:scale(1.09);}
#ccx-page .ccx-uni-card-media::after{
  content:""; position:absolute; inset:0;
  background:linear-gradient(180deg, rgba(10,17,32,0) 45%, rgba(10,17,32,0.88) 100%);
}
#ccx-page .ccx-uni-badge{
  position:absolute; top:16px; left:16px; z-index:2;
  width:52px; height:52px; border-radius:12px;
  background:rgba(255,255,255,0.94); backdrop-filter:blur(6px);
  display:flex; align-items:center; justify-content:center;
  font-family:var(--ccx-font-mono); font-weight:600; font-size:13px; color:var(--ccx-navy-900);
  box-shadow:var(--ccx-shadow-s);
}
#ccx-page .ccx-uni-card-body{padding:26px 26px 28px; position:relative;}
#ccx-page .ccx-uni-card-body h3{font-family:var(--ccx-font-display); font-size:22px; font-weight:600; color:#fff; margin-bottom:9px; letter-spacing:-0.01em;}
#ccx-page .ccx-uni-card-body p{font-size:14.5px; line-height:1.6; color:rgba(255,255,255,0.68); margin-bottom:20px;}
#ccx-page .ccx-uni-card-cta{
  display:inline-flex; align-items:center; gap:9px;
  font-size:13.5px; font-weight:700; color:var(--ccx-gold-bright);
  letter-spacing:0.02em;
}
#ccx-page .ccx-uni-card-cta .ccx-arrow{transition:transform .3s ease;}
#ccx-page .ccx-uni-card:hover .ccx-uni-card-cta .ccx-arrow{transform:translateX(6px);}

/* ============================================================
   FEATURED ALTERNATING SECTIONS
   ============================================================ */
#ccx-page .ccx-featured-section{padding:60px 0;}
#ccx-page .ccx-featured-row{
  display:grid; grid-template-columns:1fr 1fr; gap:64px; align-items:center;
}
#ccx-page .ccx-featured-row.ccx-reverse .ccx-featured-media{order:2;}
#ccx-page .ccx-featured-row.ccx-reverse .ccx-featured-text{order:1;}
@media (max-width:900px){
  #ccx-page .ccx-featured-row, #ccx-page .ccx-featured-row.ccx-reverse{grid-template-columns:1fr;}
  #ccx-page .ccx-featured-row.ccx-reverse .ccx-featured-media, #ccx-page .ccx-featured-row.ccx-reverse .ccx-featured-text{order:initial;}
}
#ccx-page .ccx-featured-media{position:relative; border-radius:var(--ccx-radius-l); overflow:hidden; aspect-ratio:5/4; box-shadow:var(--ccx-shadow-m);}
#ccx-page .ccx-featured-media img{width:100%; height:100%; object-fit:cover;}
#ccx-page .ccx-featured-media .ccx-tag{
  position:absolute; bottom:18px; left:18px;
  background:rgba(16,27,50,0.85); backdrop-filter:blur(6px);
  color:#fff; font-family:var(--ccx-font-mono); font-size:11.5px; letter-spacing:0.08em; text-transform:uppercase;
  padding:9px 14px; border-radius:8px;
}
#ccx-page .ccx-featured-text h3{
  font-family:var(--ccx-font-display); font-weight:600; font-size:clamp(26px,3.2vw,36px);
  color:var(--ccx-navy-900); margin-bottom:16px; letter-spacing:-0.01em;
}
#ccx-page .ccx-featured-text p{color:var(--ccx-ink-soft); line-height:1.7; font-size:16px; margin-bottom:22px;}
#ccx-page .ccx-highlight-list{display:grid; grid-template-columns:1fr 1fr; gap:12px 20px; margin-bottom:28px;}
#ccx-page .ccx-highlight-list li{
  display:flex; align-items:flex-start; gap:10px; font-size:14.5px; color:var(--ccx-ink); font-weight:600;
}
#ccx-page .ccx-highlight-list li::before{
  content:""; width:7px; height:7px; border-radius:50%; background:var(--ccx-gold); margin-top:6px; flex-shrink:0;
}
@media (max-width:480px){#ccx-page .ccx-highlight-list{grid-template-columns:1fr;}}

/* ============================================================
   WHY EXPLORE
   ============================================================ */
#ccx-page .ccx-why-section{padding:110px 0; background:var(--ccx-navy-950); position:relative; overflow:hidden;}
#ccx-page .ccx-why-section::before{
  content:""; position:absolute; top:-20%; right:-10%; width:600px; height:600px; border-radius:50%;
  background:radial-gradient(circle, rgba(201,151,46,0.12), transparent 70%);
}
#ccx-page .ccx-why-section .ccx-section-head h2, #ccx-page .ccx-why-section .ccx-eyebrow{color:#fff;}
#ccx-page .ccx-why-section .ccx-section-head p{color:rgba(255,255,255,0.62);}
#ccx-page .ccx-why-grid{display:grid; grid-template-columns:repeat(3,1fr); gap:1px; background:rgba(255,255,255,0.09); border-radius:var(--ccx-radius-l); overflow:hidden; position:relative; z-index:1;}
#ccx-page .ccx-why-card{background:var(--ccx-navy-900); padding:38px 32px; transition:background .3s ease;}
#ccx-page .ccx-why-card:hover{background:var(--ccx-navy-800);}
#ccx-page .ccx-why-icon{
  width:48px; height:48px; border-radius:12px; margin-bottom:22px;
  background:rgba(201,151,46,0.14); color:var(--ccx-gold-bright);
  display:flex; align-items:center; justify-content:center;
}
#ccx-page .ccx-why-card h3{font-family:var(--ccx-font-display); font-size:19px; font-weight:600; color:#fff; margin-bottom:10px;}
#ccx-page .ccx-why-card p{font-size:14px; line-height:1.65; color:rgba(255,255,255,0.6);}
@media (max-width:900px){#ccx-page .ccx-why-grid{grid-template-columns:repeat(2,1fr);}}
@media (max-width:560px){#ccx-page .ccx-why-grid{grid-template-columns:1fr;}}

/* ============================================================
   STUDY AREAS
   ============================================================ */
#ccx-page .ccx-study-section{padding:110px 0;}
#ccx-page .ccx-study-grid{display:grid; grid-template-columns:repeat(4,1fr); gap:18px;}
@media (max-width:900px){#ccx-page .ccx-study-grid{grid-template-columns:repeat(2,1fr);}}
@media (max-width:480px){#ccx-page .ccx-study-grid{grid-template-columns:1fr;}}
#ccx-page .ccx-study-card{
  padding:30px 24px; border-radius:var(--ccx-radius-m); background:#fff; border:1px solid var(--ccx-paper-dim);
  transition:transform .3s ease, box-shadow .3s ease, border-color .3s ease;
}
#ccx-page .ccx-study-card:hover{transform:translateY(-5px); box-shadow:var(--ccx-shadow-m); border-color:transparent;}
#ccx-page .ccx-study-num{font-family:var(--ccx-font-mono); font-size:12px; color:var(--ccx-teal); letter-spacing:0.06em; margin-bottom:16px; display:block;}
#ccx-page .ccx-study-card h4{font-family:var(--ccx-font-display); font-size:18px; font-weight:600; color:var(--ccx-navy-900);}
#ccx-page .ccx-study-note{margin-top:32px; font-size:13.5px; color:var(--ccx-ink-soft); display:flex; gap:10px; align-items:flex-start;}
#ccx-page .ccx-study-note svg{flex-shrink:0; margin-top:2px; color:var(--ccx-gold-dim);}

/* ============================================================
   COMPARISON
   ============================================================ */
#ccx-page .ccx-compare-section{padding:110px 0; background:var(--ccx-paper-dim);}
#ccx-page .ccx-compare-table-wrap{
  border-radius:var(--ccx-radius-l); overflow:hidden; background:#fff; box-shadow:var(--ccx-shadow-m);
  overflow-x:auto;
}
#ccx-page table.ccx-compare-table{width:100%; border-collapse:collapse; min-width:640px;}
#ccx-page .ccx-compare-table thead th{
  font-family:var(--ccx-font-mono); font-size:11.5px; letter-spacing:0.1em; text-transform:uppercase;
  color:rgba(255,255,255,0.75); text-align:left; padding:20px 26px; background:var(--ccx-navy-900);
}
#ccx-page .ccx-compare-table thead th:first-child{color:#fff;}
#ccx-page .ccx-compare-table tbody td{padding:22px 26px; border-bottom:1px solid var(--ccx-paper-dim); font-size:15px; vertical-align:middle;}
#ccx-page .ccx-compare-table tbody tr:last-child td{border-bottom:none;}
#ccx-page .ccx-compare-table tbody tr{transition:background .2s ease;}
#ccx-page .ccx-compare-table tbody tr:hover{background:var(--ccx-paper);}
#ccx-page .ccx-compare-name{display:flex; align-items:center; gap:12px; font-weight:700; color:var(--ccx-navy-900); font-family:var(--ccx-font-display); font-size:16.5px;}
#ccx-page .ccx-compare-name .ccx-dot{width:9px; height:9px; border-radius:50%; background:var(--ccx-gold); flex-shrink:0;}
#ccx-page .ccx-compare-focus{color:var(--ccx-ink-soft);}
#ccx-page .ccx-compare-link{font-weight:700; color:var(--ccx-teal); font-size:14px; white-space:nowrap;}
#ccx-page .ccx-compare-link:hover{color:var(--ccx-teal-bright);}

/* ============================================================
   ADMISSION CTA
   ============================================================ */
#ccx-page .ccx-cta-banner{
  position:relative; padding:140px 0; text-align:center; overflow:hidden;
  background-image:linear-gradient(135deg, rgba(10,17,32,0.92), rgba(10,17,32,0.82)), url('https://tmuc.edu.pk/wp-content/uploads/2019/10/Campus-tmuc-nationwide.jpg');
  background-size:cover; background-position:center; background-attachment:fixed;
}
@media (max-width:900px){#ccx-page .ccx-cta-banner{background-attachment:scroll;}}
#ccx-page .ccx-cta-banner h2{
  font-family:var(--ccx-font-display); font-weight:600; color:#fff;
  font-size:clamp(30px,4.6vw,52px); max-width:16ch; margin:0 auto 20px; line-height:1.12; letter-spacing:-0.01em;
}
#ccx-page .ccx-cta-banner p{color:rgba(255,255,255,0.72); max-width:46ch; margin:0 auto 36px; font-size:16.5px; line-height:1.6;}

/* ============================================================
   LEAD FORM
   ============================================================ */
#ccx-page .ccx-lead-section{padding:110px 0;}
#ccx-page .ccx-lead-wrap{
  display:grid; grid-template-columns:0.85fr 1.15fr;
  border-radius:var(--ccx-radius-l); overflow:hidden; box-shadow:var(--ccx-shadow-l);
}
@media (max-width:900px){#ccx-page .ccx-lead-wrap{grid-template-columns:1fr;}}
#ccx-page .ccx-lead-media{
  position:relative; min-height:340px;
  background-image:linear-gradient(180deg, rgba(10,17,32,0.2), rgba(10,17,32,0.92)), url('https://www.bahria.edu.pk/Content/images/main/main_campus.jpg');
  background-size:cover; background-position:center;
  padding:44px; display:flex; flex-direction:column; justify-content:flex-end;
}
#ccx-page .ccx-lead-media h3{font-family:var(--ccx-font-display); color:#fff; font-size:26px; font-weight:600; margin-bottom:12px; line-height:1.2;}
#ccx-page .ccx-lead-media p{color:rgba(255,255,255,0.72); font-size:14.5px; line-height:1.6;}
#ccx-page .ccx-lead-form-panel{background:#fff; padding:clamp(32px,4vw,54px);}
#ccx-page .ccx-lead-form-panel > .ccx-eyebrow{margin-bottom:10px;}
#ccx-page .ccx-lead-form-panel h2{font-family:var(--ccx-font-display); font-size:clamp(24px,3vw,30px); font-weight:600; color:var(--ccx-navy-900); margin-bottom:6px;}
#ccx-page .ccx-lead-form-panel > p.ccx-sub{color:var(--ccx-ink-soft); font-size:14.5px; margin-bottom:30px;}

#ccx-page .ccx-form-grid{display:grid; grid-template-columns:1fr 1fr; gap:18px 16px;}
#ccx-page .ccx-field{display:flex; flex-direction:column; gap:7px;}
#ccx-page .ccx-field.ccx-full{grid-column:1 / -1;}
#ccx-page .ccx-field label{font-size:13px; font-weight:700; color:var(--ccx-navy-800);}
#ccx-page .ccx-field input, #ccx-page .ccx-field select, #ccx-page .ccx-field textarea{
  border:1.5px solid var(--ccx-paper-dim); border-radius:10px; padding:12px 14px;
  font-family:inherit; font-size:14.5px; color:var(--ccx-ink); background:var(--ccx-paper);
  transition:border-color .2s ease, background .2s ease;
  width:100%;
}
#ccx-page .ccx-field input:focus, #ccx-page .ccx-field select:focus, #ccx-page .ccx-field textarea:focus{
  border-color:var(--ccx-gold); background:#fff; outline:none;
}
#ccx-page .ccx-field textarea{resize:vertical; min-height:90px;}
#ccx-page .ccx-field.ccx-error input, #ccx-page .ccx-field.ccx-error select, #ccx-page .ccx-field.ccx-error textarea{border-color:var(--ccx-danger); background:#FDF3F2;}
#ccx-page .ccx-field-error{font-size:12.5px; color:var(--ccx-danger); min-height:15px; display:none;}
#ccx-page .ccx-field.ccx-error .ccx-field-error{display:block;}
#ccx-page .ccx-checkbox-field{display:flex; align-items:flex-start; gap:10px; grid-column:1/-1;}
#ccx-page .ccx-checkbox-field input{width:18px; height:18px; margin-top:2px; accent-color:var(--ccx-gold);}
#ccx-page .ccx-checkbox-field label{font-size:13.5px; color:var(--ccx-ink-soft); font-weight:500;}
#ccx-page .ccx-form-actions{grid-column:1/-1; margin-top:6px;}
#ccx-page .ccx-form-note{font-size:12px; color:var(--ccx-ink-soft); margin-top:14px; text-align:center;}

#ccx-page .ccx-form-success{display:none; text-align:center; padding:40px 10px;}
#ccx-page .ccx-form-success.ccx-show{display:block;}
#ccx-page .ccx-form-success .ccx-check{
  width:64px; height:64px; border-radius:50%; background:rgba(31,122,92,0.1); color:var(--ccx-success);
  display:flex; align-items:center; justify-content:center; margin:0 auto 20px;
}
#ccx-page .ccx-form-success h3{font-family:var(--ccx-font-display); font-size:24px; color:var(--ccx-navy-900); margin-bottom:10px;}
#ccx-page .ccx-form-success p{color:var(--ccx-ink-soft); font-size:14.5px; line-height:1.6;}
#ccx-page #ccx-lead-form.ccx-hide-form{display:none;}

/* ============================================================
   FINAL CTA
   ============================================================ */
#ccx-page .ccx-final-cta{padding:120px 0; text-align:center; background:linear-gradient(180deg, var(--ccx-paper), var(--ccx-paper-dim));}
#ccx-page .ccx-final-cta h2{
  font-family:var(--ccx-font-display); font-weight:600; color:var(--ccx-navy-900);
  font-size:clamp(30px,4.4vw,48px); margin-bottom:30px; letter-spacing:-0.01em;
}
#ccx-page .ccx-final-cta .ccx-hero-actions{justify-content:center;}
#ccx-page .ccx-final-cta .ccx-btn-outline{color:var(--ccx-navy-900); border-color:rgba(16,27,50,0.28);}
#ccx-page .ccx-final-cta .ccx-btn-outline:hover{background:var(--ccx-navy-900); color:#fff;}

/* ============================================================
   FOOTER
   ============================================================ */
#ccx-page .ccx-site-footer{background:var(--ccx-navy-950); color:rgba(255,255,255,0.7); padding:80px 0 30px;}
#ccx-page .ccx-footer-grid{display:grid; grid-template-columns:1.4fr 1fr 1fr 1fr; gap:40px; padding-bottom:56px; border-bottom:1px solid rgba(255,255,255,0.08);}
@media (max-width:900px){#ccx-page .ccx-footer-grid{grid-template-columns:1fr 1fr; row-gap:40px;}}
@media (max-width:520px){#ccx-page .ccx-footer-grid{grid-template-columns:1fr;}}
#ccx-page .ccx-footer-brand p{margin-top:16px; font-size:14px; line-height:1.65; max-width:34ch; color:rgba(255,255,255,0.5);}
#ccx-page .ccx-footer-col h5{font-family:var(--ccx-font-mono); font-size:11.5px; letter-spacing:0.1em; text-transform:uppercase; color:var(--ccx-gold-bright); margin-bottom:20px;}
#ccx-page .ccx-footer-col ul{display:flex; flex-direction:column; gap:12px;}
#ccx-page .ccx-footer-col a{font-size:14.5px; color:rgba(255,255,255,0.65); transition:color .2s ease;}
#ccx-page .ccx-footer-col a:hover{color:#fff;}
#ccx-page .ccx-footer-col .ccx-contact-item{display:flex; align-items:center; gap:10px; font-size:14.5px; color:rgba(255,255,255,0.65);}
#ccx-page .ccx-footer-bottom{padding-top:26px; display:flex; justify-content:space-between; align-items:center; flex-wrap:wrap; gap:12px; font-size:13px; color:rgba(255,255,255,0.4);}
#ccx-page .ccx-footer-legal{display:flex; gap:20px;}
#ccx-page .ccx-footer-legal a{color:rgba(255,255,255,0.4);}
#ccx-page .ccx-footer-legal a:hover{color:#fff;}

/* ============================================================
   WHATSAPP FLOAT
   ============================================================ */
#ccx-page .ccx-whatsapp-float{
  position:fixed; right:22px; bottom:22px; z-index:800;
  width:60px; height:60px; border-radius:50%;
  background:#25D366; display:flex; align-items:center; justify-content:center;
  box-shadow:0 10px 26px rgba(37,211,102,0.45);
  transition:transform .25s ease;
}
#ccx-page .ccx-whatsapp-float:hover{transform:scale(1.08);}
#ccx-page .ccx-whatsapp-float::before{
  content:""; position:absolute; inset:0; border-radius:50%;
  background:#25D366; opacity:0.55;
  animation:ccxPulseRing 2.2s ease-out infinite;
}
@keyframes ccxPulseRing{
  0%{transform:scale(1); opacity:0.5;}
  100%{transform:scale(1.7); opacity:0;}
}
#ccx-page .ccx-whatsapp-float svg{position:relative; z-index:1;}
#ccx-page .ccx-wa-tooltip{
  position:absolute; right:72px; top:50%; transform:translateY(-50%) translateX(6px);
  background:var(--ccx-navy-950); color:#fff; padding:9px 14px; border-radius:8px; font-size:13px; font-weight:600;
  white-space:nowrap; opacity:0; pointer-events:none; transition:opacity .2s ease, transform .2s ease;
}
#ccx-page .ccx-whatsapp-float:hover .ccx-wa-tooltip, #ccx-page .ccx-whatsapp-float:focus-visible .ccx-wa-tooltip{opacity:1; transform:translateY(-50%) translateX(0);}
@media (max-width:640px){#ccx-page .ccx-whatsapp-float{right:16px; bottom:16px; width:54px; height:54px;} #ccx-page .ccx-wa-tooltip{display:none;}}

#ccx-page .ccx-reveal{opacity:0; transform:translateY(24px); transition:opacity .7s ease, transform .7s ease;}
#ccx-page .ccx-reveal.ccx-in{opacity:1; transform:translateY(0);}

#ccx-page .ccx-sr-only{position:absolute; width:1px; height:1px; overflow:hidden; clip:rect(0,0,0,0); white-space:nowrap;}

/* ============================================================
   ADMISSION INQUIRY MODAL
   ============================================================ */
#ccx-page .ccx-modal-overlay{
  position:fixed; inset:0; z-index:2000; display:flex; align-items:center; justify-content:center;
  padding:20px; background:rgba(10,17,32,0.6); backdrop-filter:blur(4px);
  opacity:0; visibility:hidden; transition:opacity .25s ease, visibility .25s ease;
}
#ccx-page .ccx-modal-overlay.ccx-modal-open{opacity:1; visibility:visible;}
#ccx-page .ccx-modal-panel{
  position:relative; width:100%; max-width:560px; max-height:90vh; overflow-y:auto;
  background:#fff; border-radius:var(--ccx-radius-l); box-shadow:var(--ccx-shadow-l);
  padding:clamp(26px,4vw,42px); transform:translateY(16px); transition:transform .25s ease;
}
#ccx-page .ccx-modal-overlay.ccx-modal-open .ccx-modal-panel{transform:translateY(0);}
#ccx-page .ccx-modal-close{
  position:absolute; top:16px; right:16px; width:36px; height:36px; border-radius:50%;
  background:var(--ccx-paper); color:var(--ccx-navy-900); display:flex; align-items:center; justify-content:center;
  font-size:20px; line-height:1; transition:background .2s ease;
}
#ccx-page .ccx-modal-close:hover{background:var(--ccx-paper-dim);}
#ccx-page .ccx-modal-header{margin-bottom:24px; padding-right:30px;}
#ccx-page .ccx-modal-header h3{font-family:var(--ccx-font-display); font-size:clamp(20px,2.6vw,26px); font-weight:600; color:var(--ccx-navy-900);}
#ccx-page .ccx-modal-sub{margin-top:8px; font-size:13.5px; color:var(--ccx-ink-soft); line-height:1.55;}
#ccx-page .ccx-modal-grid{display:grid; grid-template-columns:1fr 1fr; gap:14px 16px; margin-bottom:20px;}
#ccx-page .ccx-modal-grid .ccx-field.ccx-full{grid-column:1/-1;}
#ccx-page .ccx-modal-note{font-size:12px; color:var(--ccx-ink-soft); margin-top:14px; text-align:center;}
@media (max-width:480px){#ccx-page .ccx-modal-grid{grid-template-columns:1fr;}}

</style>
<?php wp_head(); ?>
</head>
<body>

<div id="ccx-page">

<!-- ============================================================
     HEADER + MOBILE DRAWER REMOVED (per request — this page is
     embedded elsewhere with its own header/footer already provided)
     ============================================================ -->

<!-- ============================================================
     HERO

     ============================================================ -->
<section class="ccx-hero" id="ccx-top">
  <div class="ccx-hero-slides" id="ccx-hero-slides">
    <div class="ccx-hero-slide ccx-active" style="background-image:url('https://bims.edu.pk/public/uploads/slider/homepage-hero-01-campus-wide-optimized.jpg')">
      <div class="ccx-kb"></div>
    </div>
    <div class="ccx-hero-slide" style="background-image:url('https://www.uor.edu.pk/frontend/academics/img/about/intro.png')">
      <div class="ccx-kb"></div>
    </div>
    <div class="ccx-hero-slide" style="background-image:url('https://ucp.edu.pk/wp-content/uploads/2025/06/01.webp')">
      <div class="ccx-kb"></div>
    </div>
    <div class="ccx-hero-slide" style="background-image:url('https://numl.edu.pk/templates/template10/images/numl_mainBldg.jpg')">
      <div class="ccx-kb"></div>
    </div>
  </div>

  <div class="ccx-scroll-cue"><span class="ccx-line"></span> Scroll</div>

  <div class="ccx-container ccx-hero-content">
    <div class="ccx-hero-text" id="ccx-hero-text">
      <p class="ccx-hero-eyebrow" id="ccx-hero-eyebrow">Seven Universities · One Starting Point</p>
      <h1 id="ccx-hero-heading">Find the <em>Right</em> University for Your Future</h1>
      <p class="ccx-hero-sub" id="ccx-hero-sub">Explore leading universities, academic opportunities, campuses and admission options — all in one place.</p>
    </div>
    <div class="ccx-hero-actions">
      <a href="#ccx-universities" class="ccx-btn ccx-btn-gold" data-ccx-scroll="#ccx-universities">Explore Universities</a>
      <a href="#ccx-admissions" class="ccx-btn ccx-btn-outline ccx-admission-trigger">Admission Now</a>
    </div>
  </div>

  <div class="ccx-hero-dots" id="ccx-hero-dots"></div>
  <div class="ccx-hero-divider"></div>
</section>

<!-- ============================================================
     UNIVERSITY SHOWCASE
     ============================================================ -->
<section class="ccx-uni-section" id="ccx-universities">
  <div class="ccx-container">
    <div class="ccx-section-head ccx-reveal">
      <p class="ccx-eyebrow">The Options</p>
      <h2>Explore Your University Options</h2>
      <p>Discover seven universities offering diverse academic opportunities and experiences.</p>
    </div>

    <div class="ccx-uni-grid">

      <a href="/ucp" class="ccx-uni-card ccx-reveal">
        <div class="ccx-uni-card-media">
          <span class="ccx-uni-badge">UCP</span>
          <img src="https://ucp.edu.pk/wp-content/uploads/2025/06/01.webp" alt="University of Central Punjab campus" loading="lazy">
        </div>
        <div class="ccx-uni-card-body">
          <h3>University of Central Punjab</h3>
          <p>A well-established private university known for a broad range of business, computing and social science programs.</p>
          <span class="ccx-uni-card-cta">Explore University <span class="ccx-arrow">→</span></span>
        </div>
      </a>

      <a href="/bims" class="ccx-uni-card ccx-reveal">
        <div class="ccx-uni-card-media">
          <span class="ccx-uni-badge">
            <img src="https://eduapply.online/wp-content/uploads/2026/08/logo.webp" alt="badge-bims" >
          </span>
          <img src="https://eduapply.online/wp-content/uploads/2026/08/homepage-hero-01-campus-wide-optimized.webp" alt="BIMS campus" loading="lazy">
        </div>
        <div class="ccx-uni-card-body">
          <h3>BIMS</h3>
          <p>A focused institute offering specialized management and professional programs designed around industry needs.</p>
          <span class="ccx-uni-card-cta">Explore University <span class="ccx-arrow">→</span></span>
        </div>
      </a>

      <a href="/uor" class="ccx-uni-card ccx-reveal">
        <div class="ccx-uni-card-media">
          <span class="ccx-uni-badge">UOR</span>
          <img src="https://eduapply.online/wp-content/uploads/2026/08/uor-intro.webp" alt="University of Rawalpindi campus" loading="lazy">
        </div>
        <div class="ccx-uni-card-body">
          <h3>University of Rawalpindi</h3>
          <p>A growing university with a widening academic portfolio across sciences, arts and professional studies.</p>
          <span class="ccx-uni-card-cta">Explore University <span class="ccx-arrow">→</span></span>
        </div>
      </a>

      <a href="/numl" class="ccx-uni-card ccx-reveal">
        <div class="ccx-uni-card-media">
          <span class="ccx-uni-badge">NUML</span>
          <img src="https://numl.edu.pk/templates/template10/images/numl_mainBldg.jpg" alt="NUML campus" loading="lazy">
        </div>
        <div class="ccx-uni-card-body">
          <h3>National University of Modern Languages</h3>
          <p>Recognized for language education and international studies, alongside a wider range of academic disciplines.</p>
          <span class="ccx-uni-card-cta">Explore University <span class="ccx-arrow">→</span></span>
        </div>
      </a>

      <a href="/tmuc" class="ccx-uni-card ccx-reveal">
        <div class="ccx-uni-card-media">
          <span class="ccx-uni-badge">TMUC</span>
          <img src="https://tmuc.edu.pk/wp-content/uploads/2019/10/Campus-tmuc-nationwide.jpg" alt="The Millennium Universal College campus" loading="lazy">
        </div>
        <div class="ccx-uni-card-body">
          <h3>The Millennium Universal College</h3>
          <p>An internationally affiliated college offering globally recognized qualifications and pathways abroad.</p>
          <span class="ccx-uni-card-cta">Explore University <span class="ccx-arrow">→</span></span>
        </div>
      </a>

      <a href="/bahria" class="ccx-uni-card ccx-reveal">
        <div class="ccx-uni-card-media">
          <span class="ccx-uni-badge">BU</span>
          <img src="https://www.bahria.edu.pk/Content/images/main/main_campus.jpg" alt="Bahria University campus" loading="lazy">
        </div>
        <div class="ccx-uni-card-body">
          <h3>Bahria University</h3>
          <p>A multi-campus university with a strong reputation across engineering, management and computer science.</p>
          <span class="ccx-uni-card-cta">Explore University <span class="ccx-arrow">→</span></span>
        </div>
      </a>

      <a href="/iqra" class="ccx-uni-card ccx-reveal">
        <div class="ccx-uni-card-media">
          <span class="ccx-uni-badge">IQRA</span>
          <img src="https://eduapply.online/wp-content/uploads/2026/08/admissionbannersp26.webp" alt="Iqra University Islamabad Campus" loading="lazy">
        </div>
        <div class="ccx-uni-card-body">
          <h3>Iqra University Islamabad Campus</h3>
          <p>An HEC-recognized university at H-9, Islamabad offering Bachelor's, Master's and PhD programs across computing, business, media, health sciences and more.</p>
          <span class="ccx-uni-card-cta">Explore University <span class="ccx-arrow">→</span></span>
        </div>
      </a>

    </div>
  </div>
</section>

<!-- ============================================================
     FEATURED ALTERNATING SECTIONS
     ============================================================ -->
<section class="ccx-featured-section" id="ccx-programs">
  <div class="ccx-container">

    <div class="ccx-featured-row ccx-reveal" style="margin-bottom:110px;">
      <div class="ccx-featured-media">
        <img src="https://ucp.edu.pk/wp-content/uploads/2023/01/gallery1-2.webp" alt="University of Central Punjab campus grounds">
        <span class="ccx-tag">UCP</span>
      </div>
      <div class="ccx-featured-text">
        <p class="ccx-eyebrow">Featured University</p>
        <h3>University of Central Punjab</h3>
        <p>A private-sector university offering a wide mix of business, computing, media and social science degrees, with an emphasis on practical, industry-aware teaching.</p>
        <ul class="ccx-highlight-list">
          <li>Diverse undergraduate &amp; graduate programs</li>
          <li>Business &amp; computing focus</li>
          <li>Active student societies</li>
          <li>Central campus location</li>
        </ul>
        <a href="/ucp" class="ccx-btn ccx-btn-outline-dark">Explore University</a>
      </div>
    </div>

    <div class="ccx-featured-row ccx-reverse ccx-reveal" style="margin-bottom:110px;">
      <div class="ccx-featured-media">
        <img src="https://bims.edu.pk/public/uploads/gallery/1694069028.jpg" alt="BIMS classroom setting">
        <span class="ccx-tag">BIMS</span>
      </div>
      <div class="ccx-featured-text">
        <p class="ccx-eyebrow">Featured University</p>
        <h3>BIMS</h3>
        <p>A focused institute built around management education, giving students close mentorship and programs shaped by current industry practice.</p>
        <ul class="ccx-highlight-list">
          <li>Management-focused curriculum</li>
          <li>Smaller class sizes</li>
          <li>Industry-aligned faculty</li>
          <li>Practical coursework</li>
        </ul>
        <a href="/bims" class="ccx-btn ccx-btn-outline-dark">Explore University</a>
      </div>
    </div>

    <div class="ccx-featured-row ccx-reveal" style="margin-bottom:110px;">
      <div class="ccx-featured-media">
        <img src="https://www.uor.edu.pk/frontend/academics/img/about/intro.png" alt="University of Rawalpindi students">
        <span class="ccx-tag">UOR</span>
      </div>
      <div class="ccx-featured-text">
        <p class="ccx-eyebrow">Featured University</p>
        <h3>University of Rawalpindi</h3>
        <p>A developing university broadening its reach across sciences, arts and professional programs for students in the twin-cities region.</p>
        <ul class="ccx-highlight-list">
          <li>Expanding academic offerings</li>
          <li>Sciences &amp; arts programs</li>
          <li>Rawalpindi-based campus</li>
          <li>Growing student community</li>
        </ul>
        <a href="/uor" class="ccx-btn ccx-btn-outline-dark">Explore University</a>
      </div>
    </div>

    <div class="ccx-featured-row ccx-reverse ccx-reveal" style="margin-bottom:110px;">
      <div class="ccx-featured-media">
        <img src="https://numl.edu.pk/gallery/1748583788496009942_732699795772616_7721838644880629721_n.jpg" alt="NUML language studies">
        <span class="ccx-tag">NUML</span>
      </div>
      <div class="ccx-featured-text">
        <p class="ccx-eyebrow">Featured University</p>
        <h3>National University of Modern Languages</h3>
        <p>Known primarily for language education, NUML also offers a wider range of disciplines with an international outlook.</p>
        <ul class="ccx-highlight-list">
          <li>Strong language programs</li>
          <li>International studies focus</li>
          <li>Multiple academic departments</li>
          <li>Islamabad-based main campus</li>
        </ul>
        <a href="/numl" class="ccx-btn ccx-btn-outline-dark">Explore University</a>
      </div>
    </div>

    <div class="ccx-featured-row ccx-reveal" style="margin-bottom:110px;">
      <div class="ccx-featured-media">
        <img src="https://tmuc.edu.pk/wp-content/uploads/2020/09/student-book-tmuc.jpg" alt="TMUC students collaborating">
        <span class="ccx-tag">TMUC</span>
      </div>
      <div class="ccx-featured-text">
        <p class="ccx-eyebrow">Featured University</p>
        <h3>The Millennium Universal College</h3>
        <p>An internationally affiliated college offering globally recognized qualifications and pathways to study abroad.</p>
        <ul class="ccx-highlight-list">
          <li>International affiliations</li>
          <li>Globally recognized qualifications</li>
          <li>Pathway programs abroad</li>
          <li>Modern teaching facilities</li>
        </ul>
        <a href="/tmuc" class="ccx-btn ccx-btn-outline-dark">Explore University</a>
      </div>
    </div>

    <div class="ccx-featured-row ccx-reverse ccx-reveal" style="margin-bottom:110px;">
      <div class="ccx-featured-media">
        <img src="https://www.bahria.edu.pk/Content/images/main/academics/1.jpg" alt="Bahria University campus building">
        <span class="ccx-tag">Bahria</span>
      </div>
      <div class="ccx-featured-text">
        <p class="ccx-eyebrow">Featured University</p>
        <h3>Bahria University</h3>
        <p>A well-known multi-campus university with a strong presence in engineering, management and computer science education.</p>
        <ul class="ccx-highlight-list">
          <li>Multiple campus locations</li>
          <li>Engineering &amp; computer science</li>
          <li>Management programs</li>
          <li>Established institutional reputation</li>
        </ul>
        <a href="/bahria" class="ccx-btn ccx-btn-outline-dark">Explore University</a>
      </div>
    </div>

    <div class="ccx-featured-row ccx-reveal">
      <div class="ccx-featured-media">
        <img src="https://eduapply.online/wp-content/uploads/2026/08/admissionbannersp26.webp" alt="Iqra University Islamabad Campus, H-9">
        <span class="ccx-tag">IQRA</span>
      </div>
      <div class="ccx-featured-text">
        <p class="ccx-eyebrow">Featured University</p>
        <h3>Iqra University Islamabad Campus</h3>
        <p>An HEC-recognized university at H-9, Islamabad, offering Bachelor's, Master's and PhD programs across computing, business, media studies, design, pharmacy and allied health sciences.</p>
        <ul class="ccx-highlight-list">
          <li>HEC-recognized, since 1998</li>
          <li>Bachelor's, Master's &amp; PhD programs</li>
          <li>Computing, business &amp; health sciences</li>
          <li>H-9, Islamabad campus</li>
        </ul>
        <a href="/iqra" class="ccx-btn ccx-btn-outline-dark">Explore University</a>
      </div>
    </div>

  </div>
</section>

<!-- ============================================================
     WHY EXPLORE THESE UNIVERSITIES
     ============================================================ -->
<section class="ccx-why-section" id="ccx-why">
  <div class="ccx-container">
    <div class="ccx-section-head ccx-reveal">
      <p class="ccx-eyebrow ccx-on-dark">The Advantage</p>
      <h2>Why Explore These Universities?</h2>
      <p>Seven different institutions, each with its own strengths — here's what makes them worth a closer look.</p>
    </div>

    <div class="ccx-why-grid ccx-reveal">
      <div class="ccx-why-card">
        <div class="ccx-why-icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M4 6h16M4 12h16M4 18h10"/></svg></div>
        <h3>Diverse Programs</h3>
        <p>From business and computing to languages and engineering, explore a wide spread of academic disciplines.</p>
      </div>
      <div class="ccx-why-card">
        <div class="ccx-why-icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 3"/></svg></div>
        <h3>Modern Learning</h3>
        <p>Contemporary teaching approaches, updated coursework and facilities designed for today's students.</p>
      </div>
      <div class="ccx-why-card">
        <div class="ccx-why-icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M3 21l6-6M13 11l8-8M3 12l9 9 9-9-9-9-9 9z"/></svg></div>
        <h3>Career Opportunities</h3>
        <p>Programs shaped with industry relevance in mind, helping graduates move confidently into the workforce.</p>
      </div>
      <div class="ccx-why-card">
        <div class="ccx-why-icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M12 2l3 7h7l-5.5 4.5L18 21l-6-4-6 4 1.5-7.5L2 9h7z"/></svg></div>
        <h3>Student Experience</h3>
        <p>Active campus life, student societies and communities that shape more than just the classroom years.</p>
      </div>
      <div class="ccx-why-card">
        <div class="ccx-why-icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M12 21s-7-6.2-7-11a7 7 0 0114 0c0 4.8-7 11-7 11z"/><circle cx="12" cy="10" r="2.5"/></svg></div>
        <h3>Multiple Locations</h3>
        <p>Campuses across different cities, giving students options closer to home or a fresh city to explore.</p>
      </div>
      <div class="ccx-why-card">
        <div class="ccx-why-icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M13 2L4 14h6l-1 8 9-12h-6l1-8z"/></svg></div>
        <h3>Future-Focused Education</h3>
        <p>Curricula that evolve alongside industry and technology, preparing students for where their field is heading.</p>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     POPULAR STUDY AREAS
     ============================================================ -->
<section class="ccx-study-section" id="ccx-study-areas">
  <div class="ccx-container">
    <div class="ccx-section-head ccx-reveal">
      <p class="ccx-eyebrow">Fields Of Study</p>
      <h2>Explore Popular Study Areas</h2>
      <p>A general look at the kinds of fields students commonly pursue across these universities.</p>
    </div>

    <div class="ccx-study-grid ccx-reveal">
      <div class="ccx-study-card"><span class="ccx-study-num">01</span><h4>Business &amp; Management</h4></div>
      <div class="ccx-study-card"><span class="ccx-study-num">02</span><h4>Computing &amp; IT</h4></div>
      <div class="ccx-study-card"><span class="ccx-study-num">03</span><h4>Engineering</h4></div>
      <div class="ccx-study-card"><span class="ccx-study-num">04</span><h4>Health Sciences</h4></div>
      <div class="ccx-study-card"><span class="ccx-study-num">05</span><h4>Social Sciences</h4></div>
      <div class="ccx-study-card"><span class="ccx-study-num">06</span><h4>Media &amp; Communication</h4></div>
      <div class="ccx-study-card"><span class="ccx-study-num">07</span><h4>Languages</h4></div>
      <div class="ccx-study-card"><span class="ccx-study-num">08</span><h4>Pharmacy</h4></div>
    </div>

    <p class="ccx-study-note ccx-reveal">
      <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8h.01M11 12h1v5h1"/></svg>
      Program availability varies by university. Explore each university's page or speak with our team to confirm which study areas are offered where.
    </p>
  </div>
</section>

<!-- ============================================================
     COMPARISON
     ============================================================ -->
<section class="ccx-compare-section">
  <div class="ccx-container">
    <div class="ccx-section-head ccx-reveal">
      <p class="ccx-eyebrow">Side By Side</p>
      <h2>Quick University Comparison</h2>
      <p>A general snapshot to help you narrow down where to look first.</p>
    </div>

    <div class="ccx-compare-table-wrap ccx-reveal">
      <table class="ccx-compare-table">
        <thead>
          <tr><th>University</th><th>General Focus</th><th>Explore</th></tr>
        </thead>
        <tbody>
          <tr>
            <td><span class="ccx-compare-name"><span class="ccx-dot"></span>University of Central Punjab</span></td>
            <td class="ccx-compare-focus">Business, computing &amp; social sciences</td>
            <td><a href="/ucp" class="ccx-compare-link">Explore →</a></td>
          </tr>
          <tr>
            <td><span class="ccx-compare-name"><span class="ccx-dot"></span>BIMS</span></td>
            <td class="ccx-compare-focus">Management &amp; professional studies</td>
            <td><a href="/bims" class="ccx-compare-link">Explore →</a></td>
          </tr>
          <tr>
            <td><span class="ccx-compare-name"><span class="ccx-dot"></span>University of Rawalpindi</span></td>
            <td class="ccx-compare-focus">Sciences, arts &amp; professional programs</td>
            <td><a href="/uor" class="ccx-compare-link">Explore →</a></td>
          </tr>
          <tr>
            <td><span class="ccx-compare-name"><span class="ccx-dot"></span>NUML</span></td>
            <td class="ccx-compare-focus">Languages &amp; international studies</td>
            <td><a href="/numl" class="ccx-compare-link">Explore →</a></td>
          </tr>
          <tr>
            <td><span class="ccx-compare-name"><span class="ccx-dot"></span>The Millennium Universal College</span></td>
            <td class="ccx-compare-focus">International qualifications &amp; pathways</td>
            <td><a href="/tmuc" class="ccx-compare-link">Explore →</a></td>
          </tr>
          <tr>
            <td><span class="ccx-compare-name"><span class="ccx-dot"></span>Bahria University</span></td>
            <td class="ccx-compare-focus">Engineering, management &amp; computer science</td>
            <td><a href="/bahria" class="ccx-compare-link">Explore →</a></td>
          </tr>
          <tr>
            <td><span class="ccx-compare-name"><span class="ccx-dot"></span>Iqra University Islamabad Campus</span></td>
            <td class="ccx-compare-focus">Computing, business, media &amp; health sciences</td>
            <td><a href="/iqra" class="ccx-compare-link">Explore →</a></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</section>

<!-- ============================================================
     ADMISSION CTA BANNER
     ============================================================ -->
<section class="ccx-cta-banner">
  <div class="ccx-container">
    <p class="ccx-eyebrow ccx-on-dark" style="justify-content:center;">Take The Next Step</p>
    <h2>Ready to Start Your University Journey?</h2>
    <p>Tell us what you're looking for and we'll help you explore your university options.</p>
    <a href="#ccx-admissions" class="ccx-btn ccx-btn-gold" data-ccx-scroll="#ccx-admissions">Get Admission Information</a>
  </div>
</section>

<!-- ============================================================
     LEAD FORM
     ============================================================ -->
<section class="ccx-lead-section" id="ccx-admissions">
  <div class="ccx-container">
    <div class="ccx-lead-wrap ccx-reveal">
      <div class="ccx-lead-media">
        <h3>Not sure where to start?</h3>
        <p>Share a few details and our admissions guidance team will help match you with the right university and program.</p>
      </div>

      <div class="ccx-lead-form-panel">
        <p class="ccx-eyebrow">Free Guidance</p>
        <h2>Get Admission Information</h2>
        <p class="ccx-sub">Fill in your details below — this takes less than a minute.</p>

        <form id="ccx-lead-form" novalidate>
          <div class="ccx-form-grid">

            <div class="ccx-field ccx-full" data-ccx-field="fullName">
              <label for="ccx-fullName">Full Name</label>
              <input type="text" id="ccx-fullName" name="ccx_full_name" placeholder="e.g. Ayesha Khan" autocomplete="name">
              <span class="ccx-field-error">Please enter your full name.</span>
            </div>

            <div class="ccx-field" data-ccx-field="phone">
              <label for="ccx-phone">Phone Number</label>
              <input type="tel" id="ccx-phone" name="ccx_phone" placeholder="03XX XXXXXXX" autocomplete="tel">
              <span class="ccx-field-error">Please enter a valid phone number.</span>
            </div>

            <div class="ccx-field" data-ccx-field="email">
              <label for="ccx-email">Email Address</label>
              <input type="email" id="ccx-email" name="ccx_email" placeholder="you@example.com" autocomplete="email">
              <span class="ccx-field-error">Please enter a valid email address.</span>
            </div>

            <div class="ccx-field" data-ccx-field="city">
              <label for="ccx-city">City</label>
              <input type="text" id="ccx-city" name="ccx_city" placeholder="e.g. Islamabad" autocomplete="address-level2">
              <span class="ccx-field-error">Please enter your city.</span>
            </div>

            <div class="ccx-field" data-ccx-field="preferredUniversity">
              <label for="ccx-preferred-university">Preferred University</label>
              <select id="ccx-preferred-university" name="ccx_preferred_university">
                <option value="">Select University</option>
                <option value="UCP">University of Central Punjab</option>
                <option value="BIMS">BIMS</option>
                <option value="UOR">University of Rawalpindi</option>
                <option value="NUML">NUML</option>
                <option value="TMUC">The Millennium Universal College</option>
                <option value="Bahria">Bahria University</option>
                <option value="IQRA">Iqra University Islamabad Campus</option>
              </select>
              <span class="ccx-field-error">Please select a university.</span>
            </div>

            <div class="ccx-field ccx-full" data-ccx-field="studyArea">
              <label for="ccx-study-area">Interested Study Area</label>
              <select id="ccx-study-area" name="ccx_study_area">
                <option value="">Select Study Area</option>
                <option value="Business & Management">Business &amp; Management</option>
                <option value="Computing & IT">Computing &amp; IT</option>
                <option value="Engineering">Engineering</option>
                <option value="Health Sciences">Health Sciences</option>
                <option value="Social Sciences">Social Sciences</option>
                <option value="Media & Communication">Media &amp; Communication</option>
                <option value="Languages">Languages</option>
                <option value="Pharmacy">Pharmacy</option>
                <option value="Not sure yet">Not sure yet</option>
              </select>
              <span class="ccx-field-error">Please select a study area.</span>
            </div>

            <div class="ccx-field ccx-full" data-ccx-field="message">
              <label for="ccx-message">Message <span style="font-weight:500; color:var(--ccx-ink-soft);">(optional)</span></label>
              <textarea id="ccx-message" name="ccx_message" placeholder="Anything else you'd like us to know?"></textarea>
            </div>

            <div class="ccx-checkbox-field" data-ccx-field="consent">
              <input type="checkbox" id="ccx-consent" name="ccx_consent">
              <label for="ccx-consent">I agree to be contacted regarding admission information.</label>
            </div>
            <span class="ccx-field-error" id="ccx-consent-error" style="grid-column:1/-1; margin-top:-10px;">Please confirm you agree to be contacted.</span>

            <div class="ccx-form-actions">
              <button type="submit" class="ccx-btn ccx-btn-gold ccx-btn-block" id="ccx-submit-btn">Submit Inquiry</button>
              <p class="ccx-form-note">Your information is used only to help match you with admission guidance. No spam.</p>
            </div>
          </div>
        </form>

        <div class="ccx-form-success" id="ccx-form-success">
          <div class="ccx-check">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M5 13l4 4L19 7"/></svg>
          </div>
          <h3>Thank You!</h3>
          <p>Your inquiry has been received. Our team will contact you shortly.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     FINAL CTA
     ============================================================ -->
<section class="ccx-final-cta">
  <div class="ccx-container">
    <h2>Your Next Step Starts Here</h2>
    <div class="ccx-hero-actions">
      <a href="#ccx-universities" class="ccx-btn ccx-btn-gold" data-ccx-scroll="#ccx-universities">Explore Universities</a>
      <a href="#" class="ccx-btn ccx-btn-outline ccx-admission-trigger">Contact Us</a>
    </div>
  </div>
</section>

<!-- ============================================================
     FOOTER REMOVED (per request — this page is embedded elsewhere
     with its own header/footer already provided)
     ============================================================ -->

<!-- ============================================================
     WHATSAPP FLOAT
     ============================================================ -->
<a href="#" class="ccx-whatsapp-float" id="ccx-whatsapp-float" aria-label="Chat with us on WhatsApp">
  <span class="ccx-wa-tooltip" role="tooltip">Chat with us on WhatsApp</span>
  <svg width="30" height="30" viewBox="0 0 24 24" fill="#fff"><path d="M17.6 6.32A8.86 8.86 0 0012.05 4a8.94 8.94 0 00-7.74 13.4L3 21l3.7-1.28a8.9 8.9 0 004.34 1.12h.01A8.94 8.94 0 0021 12.32a8.87 8.87 0 00-3.4-6zM12.05 19.6a7.4 7.4 0 01-3.78-1.04l-.27-.16-2.8.97.94-2.73-.18-.28a7.44 7.44 0 01-1.15-3.98 7.4 7.4 0 0112.65-5.25 7.36 7.36 0 012.17 5.25 7.4 7.4 0 01-7.58 7.22zm4.08-5.55c-.22-.11-1.31-.65-1.51-.72-.2-.07-.35-.11-.5.11-.15.22-.57.72-.7.87-.13.15-.26.16-.48.05a6.1 6.1 0 01-1.8-1.11 6.8 6.8 0 01-1.24-1.55c-.13-.22 0-.34.1-.45.1-.1.22-.26.33-.39.11-.13.15-.22.22-.37.07-.15.04-.28-.02-.39-.06-.11-.5-1.21-.69-1.66-.18-.43-.36-.37-.5-.38h-.43c-.15 0-.39.06-.6.28-.2.22-.79.77-.79 1.87 0 1.1.81 2.16.92 2.31.11.15 1.6 2.44 3.87 3.42.54.23.96.37 1.29.48.54.17 1.03.15 1.42.09.43-.06 1.31-.53 1.5-1.05.18-.51.18-.95.13-1.05-.06-.1-.2-.15-.42-.26z"/></svg>
</a>

<!-- ============================================================
     ADMISSION INQUIRY MODAL
     ============================================================ -->
<div class="ccx-modal-overlay" id="ccx-admission-modal" role="dialog" aria-modal="true" aria-labelledby="ccx-modal-title" aria-hidden="true">
  <div class="ccx-modal-panel">
    <button type="button" class="ccx-modal-close" id="ccx-modal-close" aria-label="Close admission inquiry form">&times;</button>
    <div class="ccx-modal-header">
      <p class="ccx-eyebrow">Admissions</p>
      <h3 id="ccx-modal-title">Admission Inquiry</h3>
      <p class="ccx-modal-sub">Share your details and we'll open WhatsApp with your inquiry ready to send — pick the university you're interested in.</p>
    </div>

    <form id="ccx-admission-form" novalidate>
      <div class="ccx-modal-grid">
        <div class="ccx-field ccx-full" data-ccx-field="name">
          <label for="ccx-adm-name">Full Name</label>
          <input type="text" id="ccx-adm-name" name="name" placeholder="e.g. Ayesha Khan" autocomplete="name">
          <span class="ccx-field-error">Please enter your full name.</span>
        </div>
        <div class="ccx-field" data-ccx-field="phone">
          <label for="ccx-adm-phone">Phone / WhatsApp Number</label>
          <input type="tel" id="ccx-adm-phone" name="phone" placeholder="03XX XXXXXXX" autocomplete="tel">
          <span class="ccx-field-error">Please enter a valid phone number.</span>
        </div>
        <div class="ccx-field" data-ccx-field="email">
          <label for="ccx-adm-email">Email <span style="font-weight:500; color:var(--ccx-ink-soft);">(optional)</span></label>
          <input type="email" id="ccx-adm-email" name="email" placeholder="you@example.com" autocomplete="email">
          <span class="ccx-field-error">Please enter a valid email address.</span>
        </div>
        <div class="ccx-field ccx-full" data-ccx-field="university">
          <label for="ccx-adm-university">Preferred University</label>
          <select id="ccx-adm-university" name="university">
            <option value="">Select University</option>
            <option value="UCP">University of Central Punjab</option>
            <option value="BIMS">BIMS</option>
            <option value="UOR">University of Rawalpindi</option>
            <option value="NUML">NUML</option>
            <option value="TMUC">The Millennium Universal College</option>
            <option value="Bahria">Bahria University</option>
            <option value="IQRA">Iqra University Islamabad Campus</option>
          </select>
          <span class="ccx-field-error">Please select a university.</span>
        </div>
        <div class="ccx-field ccx-full" data-ccx-field="program">
          <label for="ccx-adm-program">Program / Course of Interest</label>
          <input type="text" id="ccx-adm-program" name="program" placeholder="e.g. BS Computer Science">
          <span class="ccx-field-error">Please tell us which program you're interested in.</span>
        </div>
        <div class="ccx-field ccx-full">
          <label for="ccx-adm-message">Message <span style="font-weight:500; color:var(--ccx-ink-soft);">(optional)</span></label>
          <textarea id="ccx-adm-message" name="message" placeholder="Anything else you'd like us to know?"></textarea>
        </div>
      </div>
      <button type="submit" class="ccx-btn ccx-btn-gold ccx-btn-block" id="ccx-adm-submit">Send via WhatsApp</button>
      <p class="ccx-modal-note">This opens WhatsApp with your details pre-filled. No data is stored by this page.</p>
    </form>
  </div>
</div>

</div><!-- /#ccx-page -->

<script>
/* ============================================================
   All page JS lives inside one namespaced IIFE — nothing is
   attached to window, and every internal helper is prefixed
   "ccx" so it cannot collide with jQuery, Elementor's own
   handlers, or other plugins' scripts running on the same page.
   ============================================================ */
var ccxCampusCompass = (function(){
  "use strict";

  /* ---------- CONFIG ---------- */
  // Set this to the real business WhatsApp number (country code, no + or spaces), e.g. "923001234567"
  var ccxConfig = {
    whatsappNumber: "", // TODO: set before going live
    whatsappMessage: "Hello, I would like to get information about university admissions."
  };

  /* ---------- HERO SLIDE CONTENT (image + text change together) ---------- */
  var ccxHeroSlideContent = [
    {
      eyebrow: "Six Universities · One Starting Point",
      headingHtml: 'Find the <em>Right</em> University for Your Future',
      sub: "Explore leading universities, academic opportunities, campuses and admission options — all in one place."
    },
    {
      eyebrow: "Real Classrooms · Real Learning",
      headingHtml: 'Learn From <em>Programs</em> Built for Today',
      sub: "Modern classrooms, practical coursework and faculty focused on where your field is heading."
    },
    {
      eyebrow: "Campus Life · Six Cities",
      headingHtml: 'Find a <em>Campus</em> That Feels Like Home',
      sub: "From central hubs to multi-campus networks, explore where your student life could actually happen."
    },
    {
      eyebrow: "Your Next Chapter Starts Here",
      headingHtml: 'Turn Admission Into <em>Achievement</em>',
      sub: "See where a degree from one of these six universities could take you next."
    }
  ];

  function ccxInit(){
    ccxSetupWhatsapp();
    ccxSetupStickyHeader();
    ccxSetupMobileDrawer();
    ccxSetupSmoothScroll();
    ccxSetupHeroCarousel();
    ccxSetupScrollReveal();
    ccxSetupFooterYear();
    ccxSetupLeadForm();
    ccxSetupAdmissionModal();
  }

  /* ---------- ADMISSION INQUIRY MODAL (WhatsApp) ---------- */
  function ccxSetupAdmissionModal(){
    var overlay = document.getElementById("ccx-admission-modal");
    var closeBtn = document.getElementById("ccx-modal-close");
    var form = document.getElementById("ccx-admission-form");
    if(!overlay || !closeBtn || !form) return;

    var universityWhatsapp = {
      UCP: "",
      BIMS: "923333332467",
      UOR: "",
      NUML: "",
      TMUC: "",
      Bahria: "",
      IQRA: "923155264264"
    };

    function ccxOpenModal(prefill){
      overlay.classList.add("ccx-modal-open");
      overlay.setAttribute("aria-hidden", "false");
      document.body.style.overflow = "hidden";
      if(prefill && prefill.university) form.university.value = prefill.university;
      if(prefill && prefill.program) form.program.value = prefill.program;
      window.setTimeout(function(){ form.name.focus(); }, 250);
    }
    function ccxCloseModal(){
      overlay.classList.remove("ccx-modal-open");
      overlay.setAttribute("aria-hidden", "true");
      document.body.style.overflow = "";
    }

    document.querySelectorAll("#ccx-page .ccx-admission-trigger").forEach(function(trigger){
      trigger.addEventListener("click", function(e){
        e.preventDefault();
        var uni = trigger.getAttribute("data-ccx-university") || "";
        var program = trigger.getAttribute("data-ccx-program") || "";
        var url = "/admissions/apply";
        var params = [];
        if(uni) params.push("university=" + encodeURIComponent(uni));
        if(program) params.push("program=" + encodeURIComponent(program));
        if(params.length) url += "?" + params.join("&");
        window.location.href = url;
      });
    });

    closeBtn.addEventListener("click", ccxCloseModal);
    overlay.addEventListener("click", function(e){ if(e.target === overlay) ccxCloseModal(); });
    document.addEventListener("keydown", function(e){
      if(e.key === "Escape" && overlay.classList.contains("ccx-modal-open")) ccxCloseModal();
    });

    function setError(fieldEl, hasError){ if(fieldEl) fieldEl.classList.toggle("ccx-error", hasError); }
    function isValidEmail(v){ return v === "" || /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(v); }
    function isValidPhone(v){ var d = v.replace(/[^\d]/g,""); return d.length >= 10 && d.length <= 13; }

    form.addEventListener("submit", function(e){
      e.preventDefault();
      var valid = true;

      var name = form.name.value.trim();
      var nameField = form.querySelector('[data-ccx-field="name"]');
      if(name.length < 2){ setError(nameField, true); valid = false; } else { setError(nameField, false); }

      var phone = form.phone.value.trim();
      var phoneField = form.querySelector('[data-ccx-field="phone"]');
      if(!isValidPhone(phone)){ setError(phoneField, true); valid = false; } else { setError(phoneField, false); }

      var email = form.email.value.trim();
      var emailField = form.querySelector('[data-ccx-field="email"]');
      if(!isValidEmail(email)){ setError(emailField, true); valid = false; } else { setError(emailField, false); }

      var university = form.university.value;
      var uniField = form.querySelector('[data-ccx-field="university"]');
      if(!university){ setError(uniField, true); valid = false; } else { setError(uniField, false); }

      var program = form.program.value.trim();
      var programField = form.querySelector('[data-ccx-field="program"]');
      if(program.length < 2){ setError(programField, true); valid = false; } else { setError(programField, false); }

      var message = form.message.value.trim();

      if(!valid){
        var firstError = form.querySelector(".ccx-field.ccx-error");
        if(firstError){ firstError.scrollIntoView({behavior:"smooth", block:"center"}); }
        return;
      }

      var universityLabel = form.university.options[form.university.selectedIndex].text;
      var lines = [
        "Hello, I would like to apply for admission.",
        "University: " + universityLabel,
        "Name: " + name,
        "Phone: " + phone
      ];
      if(email) lines.push("Email: " + email);
      lines.push("Program of Interest: " + program);
      if(message) lines.push("Message: " + message);

      var waNumber = universityWhatsapp[university] || "";
      var waBase = waNumber ? ("https://wa.me/" + waNumber) : "https://wa.me/";
      var waUrl = waBase + "?text=" + encodeURIComponent(lines.join("\n"));

      window.open(waUrl, "_blank", "noopener");
      ccxCloseModal();
      form.reset();
    });
  }

  /* ---------- WHATSAPP ---------- */
  function ccxBuildWhatsappUrl(){
    var number = ccxConfig.whatsappNumber && ccxConfig.whatsappNumber.trim() ? ccxConfig.whatsappNumber.trim() : "";
    var base = number ? ("https://wa.me/" + number) : "https://wa.me/";
    return base + "?text=" + encodeURIComponent(ccxConfig.whatsappMessage);
  }
  function ccxSetupWhatsapp(){
    var url = ccxBuildWhatsappUrl();
    var floatBtn = document.getElementById("ccx-whatsapp-float");
    var footerBtn = document.getElementById("ccx-footer-whatsapp");
    if(floatBtn) floatBtn.setAttribute("href", url);
    if(footerBtn) footerBtn.setAttribute("href", url);
  }

  /* ---------- STICKY HEADER ---------- */
  function ccxSetupStickyHeader(){
    var header = document.getElementById("ccx-site-header");
    if(!header) return;
    function ccxOnScroll(){
      if(window.scrollY > 40){ header.classList.add("ccx-scrolled"); }
      else { header.classList.remove("ccx-scrolled"); }
    }
    document.addEventListener("scroll", ccxOnScroll, {passive:true});
    ccxOnScroll();
  }

  /* ---------- MOBILE DRAWER ---------- */
  function ccxSetupMobileDrawer(){
    var hamburger = document.getElementById("ccx-hamburger-btn");
    var drawer = document.getElementById("ccx-mobile-drawer");
    var drawerClose = document.getElementById("ccx-drawer-close-btn");
    if(!hamburger || !drawer || !drawerClose) return;

    function ccxOpenDrawer(){
      drawer.classList.add("ccx-open");
      hamburger.classList.add("ccx-active");
      hamburger.setAttribute("aria-expanded","true");
      document.body.style.overflow = "hidden";
    }
    function ccxCloseDrawer(){
      drawer.classList.remove("ccx-open");
      hamburger.classList.remove("ccx-active");
      hamburger.setAttribute("aria-expanded","false");
      document.body.style.overflow = "";
    }
    hamburger.addEventListener("click", function(){
      drawer.classList.contains("ccx-open") ? ccxCloseDrawer() : ccxOpenDrawer();
    });
    drawerClose.addEventListener("click", ccxCloseDrawer);
    drawer.querySelectorAll("a").forEach(function(a){
      a.addEventListener("click", ccxCloseDrawer);
    });
  }

  /* ---------- SMOOTH SCROLL ---------- */
  function ccxSetupSmoothScroll(){
    document.querySelectorAll('#ccx-page a[href^="#ccx-"]').forEach(function(link){
      link.addEventListener("click", function(e){
        var targetId = this.getAttribute("href");
        if(targetId.length > 1){
          var target = document.querySelector(targetId);
          if(target){
            e.preventDefault();
            var offset = 84;
            var top = target.getBoundingClientRect().top + window.pageYOffset - offset;
            window.scrollTo({top:top, behavior:"smooth"});
          }
        }
      });
    });
  }

  /* ---------- HERO CAROUSEL (image + text change together) ---------- */
  function ccxSetupHeroCarousel(){
    var slides = document.querySelectorAll("#ccx-page .ccx-hero-slide");
    var dotsWrap = document.getElementById("ccx-hero-dots");
    var heroText = document.getElementById("ccx-hero-text");
    var heroEyebrow = document.getElementById("ccx-hero-eyebrow");
    var heroHeading = document.getElementById("ccx-hero-heading");
    var heroSub = document.getElementById("ccx-hero-sub");
    if(!slides.length || !dotsWrap) return;

    var current = 0;
    var slideInterval;

    slides.forEach(function(_, i){
      var dot = document.createElement("button");
      dot.setAttribute("aria-label", "Go to slide " + (i+1));
      if(i === 0) dot.classList.add("ccx-active");
      dot.addEventListener("click", function(){ ccxGoToSlide(i); ccxResetInterval(); });
      dotsWrap.appendChild(dot);
    });
    var dots = dotsWrap.querySelectorAll("button");

    function ccxApplySlideText(index){
      var content = ccxHeroSlideContent[index % ccxHeroSlideContent.length];
      if(!content || !heroText) return;
      heroText.classList.add("ccx-fade");
      window.setTimeout(function(){
        if(heroEyebrow) heroEyebrow.textContent = content.eyebrow;
        if(heroHeading) heroHeading.innerHTML = content.headingHtml;
        if(heroSub) heroSub.textContent = content.sub;
        heroText.classList.remove("ccx-fade");
      }, 260);
    }

    function ccxGoToSlide(i){
      slides[current].classList.remove("ccx-active");
      dots[current].classList.remove("ccx-active");
      current = i;
      slides[current].classList.add("ccx-active");
      dots[current].classList.add("ccx-active");
      ccxApplySlideText(current);
    }
    function ccxNextSlide(){ ccxGoToSlide((current + 1) % slides.length); }
    function ccxResetInterval(){
      window.clearInterval(slideInterval);
      slideInterval = window.setInterval(ccxNextSlide, 6000);
    }
    ccxResetInterval();
  }

  /* ---------- SCROLL REVEAL ---------- */
  function ccxSetupScrollReveal(){
    var revealEls = document.querySelectorAll("#ccx-page .ccx-reveal");
    if(!revealEls.length) return;
    if("IntersectionObserver" in window){
      var io = new IntersectionObserver(function(entries){
        entries.forEach(function(entry){
          if(entry.isIntersecting){
            entry.target.classList.add("ccx-in");
            io.unobserve(entry.target);
          }
        });
      }, {threshold:0.12, rootMargin:"0px 0px -60px 0px"});
      revealEls.forEach(function(el){ io.observe(el); });
    } else {
      revealEls.forEach(function(el){ el.classList.add("ccx-in"); });
    }
  }

  /* ---------- FOOTER YEAR ---------- */
  function ccxSetupFooterYear(){
    var yearEl = document.getElementById("ccx-year");
    if(yearEl) yearEl.textContent = new Date().getFullYear();
  }

  /* ---------- LEAD FORM VALIDATION ---------- */
  function ccxSetupLeadForm(){
    var form = document.getElementById("ccx-lead-form");
    var successPanel = document.getElementById("ccx-form-success");
    var submitBtn = document.getElementById("ccx-submit-btn");
    if(!form || !successPanel || !submitBtn) return;

    function ccxSetError(fieldEl, hasError){
      if(!fieldEl) return;
      fieldEl.classList.toggle("ccx-error", hasError);
    }
    function ccxIsValidEmail(value){
      return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value);
    }
    function ccxIsValidPhone(value){
      var digits = value.replace(/[^\d]/g, "");
      return digits.length >= 10 && digits.length <= 13;
    }

    function ccxValidateForm(){
      var valid = true;
      var data = {};

      var fullName = form.ccx_full_name.value.trim();
      var fullNameField = form.querySelector('[data-ccx-field="fullName"]');
      if(fullName.length < 2){ ccxSetError(fullNameField, true); valid = false; }
      else { ccxSetError(fullNameField, false); data.fullName = fullName; }

      var phone = form.ccx_phone.value.trim();
      var phoneField = form.querySelector('[data-ccx-field="phone"]');
      if(!ccxIsValidPhone(phone)){ ccxSetError(phoneField, true); valid = false; }
      else { ccxSetError(phoneField, false); data.phone = phone; }

      var email = form.ccx_email.value.trim();
      var emailField = form.querySelector('[data-ccx-field="email"]');
      if(!ccxIsValidEmail(email)){ ccxSetError(emailField, true); valid = false; }
      else { ccxSetError(emailField, false); data.email = email; }

      var city = form.ccx_city.value.trim();
      var cityField = form.querySelector('[data-ccx-field="city"]');
      if(city.length < 2){ ccxSetError(cityField, true); valid = false; }
      else { ccxSetError(cityField, false); data.city = city; }

      var preferredUniversity = form.ccx_preferred_university.value;
      var puField = form.querySelector('[data-ccx-field="preferredUniversity"]');
      if(!preferredUniversity){ ccxSetError(puField, true); valid = false; }
      else { ccxSetError(puField, false); data.preferredUniversity = preferredUniversity; }

      var studyArea = form.ccx_study_area.value;
      var saField = form.querySelector('[data-ccx-field="studyArea"]');
      if(!studyArea){ ccxSetError(saField, true); valid = false; }
      else { ccxSetError(saField, false); data.studyArea = studyArea; }

      data.message = form.ccx_message.value.trim();

      var consent = form.ccx_consent.checked;
      var consentError = document.getElementById("ccx-consent-error");
      if(!consent){ consentError.style.display = "block"; valid = false; }
      else { consentError.style.display = "none"; data.consent = true; }

      return { valid: valid, data: data };
    }

    // Placeholder submission handler — ready for future backend/CRM integration.
    // Replace this function body with a real API call (e.g. fetch('/wp-json/ccx/v1/leads', {...}))
    // once a backend endpoint is available. No real CRM is connected yet.
    function ccxSubmitLead(data){
      return new Promise(function(resolve){
        console.log("Lead inquiry captured (no backend connected yet):", data);
        window.setTimeout(resolve, 600);
      });
    }

    form.addEventListener("submit", function(e){
      e.preventDefault();
      var result = ccxValidateForm();
      if(!result.valid){
        var firstError = form.querySelector(".ccx-field.ccx-error, #ccx-consent-error[style*='block']");
        if(firstError){ firstError.scrollIntoView({behavior:"smooth", block:"center"}); }
        return;
      }

      submitBtn.disabled = true;
      submitBtn.textContent = "Submitting...";

      ccxSubmitLead(result.data).then(function(){
        form.classList.add("ccx-hide-form");
        successPanel.classList.add("ccx-show");
        submitBtn.disabled = false;
        submitBtn.textContent = "Submit Inquiry";
      });
    });
  }

  return { init: ccxInit };
})();

if(document.readyState === "loading"){
  document.addEventListener("DOMContentLoaded", ccxCampusCompass.init);
} else {
  ccxCampusCompass.init();
}
</script>

<?php wp_footer(); ?>
</body>
</html>
