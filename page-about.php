<?php
/**
 * Template Name: EduApply — About
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>About Us | Explore Leading Universities &amp; Programs</title>
<meta name="description" content="Learn about our platform and discover universities, programs, and admissions opportunities through one convenient education platform." />

<!--
  About page for the MAIN MARKETING WEBSITE only (/about route). Reuses the
  same "ccx-" namespacing, design tokens, header, footer, WhatsApp button and
  admission modal as the marketing index page, so the two pages feel like one
  site. This page does not touch or duplicate any of the six university
  pages. It positions the platform honestly as an independent information/
  marketing resource, not an official university website, and makes no
  unverifiable claims (no fabricated stats, no "official partner", no
  "guaranteed admission").
-->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,400;0,9..144,500;0,9..144,600;0,9..144,700;1,9..144,500&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=IBM+Plex+Mono:wght@400;500&display=swap" rel="stylesheet">

<style>
/* ============================================================
   TOKENS — identical to the marketing index page
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
  font-family:var(--ccx-font-mono); font-size:12.5px; letter-spacing:0.14em; text-transform:uppercase;
  color:var(--ccx-gold-dim); display:flex; align-items:center; gap:10px; margin-bottom:16px;
}
#ccx-page .ccx-eyebrow::before{content:""; width:26px; height:1px; background:var(--ccx-gold); display:inline-block;}
#ccx-page .ccx-eyebrow.ccx-on-dark{color:var(--ccx-gold-bright);}

#ccx-page .ccx-section-head{max-width:640px; margin-bottom:48px;}
#ccx-page .ccx-section-head h2{
  font-family:var(--ccx-font-display); font-weight:600; font-size:clamp(30px,4vw,44px);
  line-height:1.12; color:var(--ccx-navy-900); letter-spacing:-0.01em;
}
#ccx-page .ccx-section-head p{margin-top:14px; font-size:16.5px; line-height:1.6; color:var(--ccx-ink-soft);}
#ccx-page .ccx-section-head.ccx-center{margin-left:auto; margin-right:auto; text-align:center;}

#ccx-page .ccx-btn{
  display:inline-flex; align-items:center; justify-content:center; gap:10px; padding:15px 30px;
  border-radius:999px; font-weight:700; font-size:14.5px; letter-spacing:0.01em;
  transition:transform .25s ease, box-shadow .25s ease, background .25s ease, color .25s ease, border-color .25s ease;
  white-space:nowrap;
}
#ccx-page .ccx-btn-gold{
  background:linear-gradient(180deg, var(--ccx-gold-bright), var(--ccx-gold)); color:var(--ccx-navy-950);
  box-shadow:0 8px 24px rgba(201,151,46,0.35);
}
#ccx-page .ccx-btn-gold:hover{transform:translateY(-2px); box-shadow:0 14px 30px rgba(201,151,46,0.45);}
#ccx-page .ccx-btn-outline{background:transparent; color:var(--ccx-white); border:1.5px solid rgba(255,255,255,0.55);}
#ccx-page .ccx-btn-outline:hover{background:rgba(255,255,255,0.12); border-color:#fff; transform:translateY(-2px);}
#ccx-page .ccx-btn-outline-dark{background:transparent; color:var(--ccx-navy-900); border:1.5px solid rgba(16,27,50,0.28);}
#ccx-page .ccx-btn-outline-dark:hover{background:var(--ccx-navy-900); color:#fff; transform:translateY(-2px);}
#ccx-page .ccx-btn-block{width:100%;}
#ccx-page .ccx-btn[disabled]{opacity:0.6; cursor:not-allowed; transform:none !important;}

/* ============================================================
   HEADER — identical to the marketing index page
   ============================================================ */
#ccx-page .ccx-site-header{
  position:fixed; top:0; left:0; right:0; z-index:900; padding:20px 0;
  transition:background .35s ease, padding .35s ease, box-shadow .35s ease, backdrop-filter .35s ease;
  background:var(--ccx-navy-950);
}
#ccx-page .ccx-site-header .ccx-container{display:flex; align-items:center; justify-content:space-between; gap:24px;}
#ccx-page .ccx-site-header.ccx-scrolled{
  padding:12px 0; background:rgba(10,17,32,0.92); backdrop-filter:blur(14px); -webkit-backdrop-filter:blur(14px);
  box-shadow:0 6px 24px rgba(0,0,0,0.18);
}
#ccx-page .ccx-brand{display:flex; align-items:center; gap:11px; font-family:var(--ccx-font-display); font-weight:600; font-size:21px; color:#fff;}
#ccx-page .ccx-brand-mark{
  width:38px; height:38px; border-radius:10px; background:linear-gradient(135deg, var(--ccx-gold-bright), var(--ccx-gold-dim));
  display:flex; align-items:center; justify-content:center; font-family:var(--ccx-font-mono); font-weight:600; font-size:13px; color:var(--ccx-navy-950);
  flex-shrink:0;
}
#ccx-page .ccx-brand .ccx-brand-small{display:block; font-family:var(--ccx-font-mono); font-size:10.5px; letter-spacing:0.12em; color:var(--ccx-gold-bright); font-weight:400; text-transform:uppercase; margin-top:1px;}

#ccx-page .ccx-main-nav{display:flex; align-items:center; gap:32px;}
#ccx-page .ccx-main-nav a{font-size:14.5px; font-weight:600; color:rgba(255,255,255,0.88); position:relative; padding:6px 0;}
#ccx-page .ccx-main-nav a::after{content:""; position:absolute; left:0; bottom:0; width:0; height:2px; background:var(--ccx-gold-bright); transition:width .25s ease;}
#ccx-page .ccx-main-nav a:hover::after{width:100%;}
#ccx-page .ccx-main-nav a.ccx-nav-active{color:#fff;}
#ccx-page .ccx-main-nav a.ccx-nav-active::after{width:100%;}

#ccx-page .ccx-header-right{display:flex; align-items:center; gap:18px;}
#ccx-page .ccx-hamburger{
  display:none; width:44px; height:44px; border-radius:10px; align-items:center; justify-content:center;
  background:rgba(255,255,255,0.1); flex-direction:column; gap:5px;
}
#ccx-page .ccx-hamburger span{width:20px; height:2px; background:#fff; display:block; transition:transform .25s ease, opacity .25s ease;}
#ccx-page .ccx-hamburger.ccx-active span:nth-child(1){transform:translateY(7px) rotate(45deg);}
#ccx-page .ccx-hamburger.ccx-active span:nth-child(2){opacity:0;}
#ccx-page .ccx-hamburger.ccx-active span:nth-child(3){transform:translateY(-7px) rotate(-45deg);}

#ccx-page .ccx-mobile-drawer{
  position:fixed; inset:0; z-index:950; background:var(--ccx-navy-950); display:flex; flex-direction:column;
  padding:100px 32px 40px; transform:translateX(100%); transition:transform .4s cubic-bezier(.77,0,.18,1);
}
#ccx-page .ccx-mobile-drawer.ccx-open{transform:translateX(0);}
#ccx-page .ccx-mobile-drawer nav{display:flex; flex-direction:column; gap:6px;}
#ccx-page .ccx-mobile-drawer nav a{
  font-family:var(--ccx-font-display); font-size:26px; font-weight:500; color:#fff;
  padding:14px 0; border-bottom:1px solid rgba(255,255,255,0.08);
}
#ccx-page .ccx-mobile-drawer nav a.ccx-nav-active{color:var(--ccx-gold-bright);}
#ccx-page .ccx-mobile-drawer .ccx-btn{margin-top:28px;}
#ccx-page .ccx-drawer-close{
  position:absolute; top:24px; right:24px; width:44px; height:44px; border-radius:10px;
  background:rgba(255,255,255,0.08); color:#fff; display:flex; align-items:center; justify-content:center; font-size:22px;
}

@media (max-width:900px){
  #ccx-page .ccx-main-nav{display:none;}
  #ccx-page .ccx-header-right .ccx-btn{display:none;}
  #ccx-page .ccx-hamburger{display:flex;}
}

/* ============================================================
   ABOUT HERO
   ============================================================ */
#ccx-page .ccx-about-hero{
  position:relative; min-height:78vh; display:flex; align-items:flex-end; overflow:hidden;
  background:var(--ccx-navy-950);
}
#ccx-page .ccx-about-hero-media{position:absolute; inset:0;}
#ccx-page .ccx-about-hero-media img{width:100%; height:100%; object-fit:cover;}
#ccx-page .ccx-about-hero-media::after{
  content:""; position:absolute; inset:0;
  background:linear-gradient(0deg, rgba(8,13,24,0.94) 0%, rgba(8,13,24,0.68) 40%, rgba(8,13,24,0.42) 70%, rgba(8,13,24,0.5) 100%);
}
#ccx-page .ccx-about-hero-content{position:relative; z-index:1; width:100%; padding:150px 0 80px;}
#ccx-page .ccx-about-hero h1{
  font-family:var(--ccx-font-display); font-weight:600; font-size:clamp(36px,5.6vw,64px); line-height:1.08;
  color:#fff; max-width:18ch; letter-spacing:-0.01em;
}
#ccx-page .ccx-about-hero-sub{margin-top:22px; font-size:clamp(15.5px,1.5vw,18px); line-height:1.65; color:rgba(255,255,255,0.82); max-width:56ch;}
#ccx-page .ccx-about-hero-actions{display:flex; gap:16px; margin-top:34px; flex-wrap:wrap;}

/* ============================================================
   ABOUT PLATFORM (intro, image + text)
   ============================================================ */
#ccx-page .ccx-intro{padding:110px 0;}
#ccx-page .ccx-intro-grid{display:grid; grid-template-columns:0.9fr 1.1fr; gap:64px; align-items:center;}
#ccx-page .ccx-intro-media{border-radius:var(--ccx-radius-l); overflow:hidden; box-shadow:var(--ccx-shadow-l); aspect-ratio:4/5;}
#ccx-page .ccx-intro-media img{width:100%; height:100%; object-fit:cover;}
#ccx-page .ccx-intro-text h2{
  font-family:var(--ccx-font-display); font-weight:600; font-size:clamp(28px,3.4vw,40px); color:var(--ccx-navy-900);
  line-height:1.15; margin-bottom:20px; letter-spacing:-0.01em;
}
#ccx-page .ccx-intro-text p{color:var(--ccx-ink-soft); line-height:1.75; font-size:16px; margin-bottom:18px;}
#ccx-page .ccx-intro-text .ccx-note{
  margin-top:8px; padding:16px 18px; border-left:3px solid var(--ccx-gold); background:var(--ccx-paper);
  border-radius:0 10px 10px 0; font-size:14px; color:var(--ccx-ink-soft); line-height:1.6;
}
@media (max-width:900px){#ccx-page .ccx-intro-grid{grid-template-columns:1fr;}}

/* ============================================================
   OUR PURPOSE
   ============================================================ */
#ccx-page .ccx-purpose{padding:100px 0; background:var(--ccx-navy-950);}
#ccx-page .ccx-purpose .ccx-section-head h2, #ccx-page .ccx-purpose .ccx-eyebrow{color:#fff;}
#ccx-page .ccx-purpose .ccx-section-head p{color:rgba(255,255,255,0.62);}
#ccx-page .ccx-purpose-grid{display:grid; grid-template-columns:repeat(4,1fr); gap:1px; background:rgba(255,255,255,0.09); border-radius:var(--ccx-radius-l); overflow:hidden;}
#ccx-page .ccx-purpose-card{background:var(--ccx-navy-900); padding:38px 30px; transition:background .3s ease;}
#ccx-page .ccx-purpose-card:hover{background:var(--ccx-navy-800);}
#ccx-page .ccx-purpose-num{font-family:var(--ccx-font-mono); font-size:13px; color:var(--ccx-gold-bright); letter-spacing:0.06em; margin-bottom:18px; display:block;}
#ccx-page .ccx-purpose-card h3{font-family:var(--ccx-font-display); font-size:19px; font-weight:600; color:#fff; margin-bottom:10px;}
#ccx-page .ccx-purpose-card p{font-size:14px; line-height:1.65; color:rgba(255,255,255,0.6);}
@media (max-width:900px){#ccx-page .ccx-purpose-grid{grid-template-columns:repeat(2,1fr);}}
@media (max-width:520px){#ccx-page .ccx-purpose-grid{grid-template-columns:1fr;}}

/* ============================================================
   UNIVERSITY NETWORK
   ============================================================ */
#ccx-page .ccx-network{padding:110px 0;}
#ccx-page .ccx-network-grid{display:grid; grid-template-columns:repeat(3,1fr); gap:24px;}
#ccx-page .ccx-network-card{
  background:#fff; border:1px solid var(--ccx-paper-dim); border-radius:var(--ccx-radius-m);
  padding:30px 26px; display:flex; flex-direction:column; transition:transform .3s ease, box-shadow .3s ease;
}
#ccx-page .ccx-network-card:hover{transform:translateY(-6px); box-shadow:var(--ccx-shadow-m);}
#ccx-page .ccx-network-badge{
  width:52px; height:52px; border-radius:12px; background:var(--ccx-navy-900); color:var(--ccx-gold-bright);
  display:flex; align-items:center; justify-content:center; font-family:var(--ccx-font-mono); font-weight:600; font-size:13px;
  margin-bottom:20px;
}
#ccx-page .ccx-network-card h3{font-family:var(--ccx-font-display); font-size:19px; font-weight:600; color:var(--ccx-navy-900); margin-bottom:10px; line-height:1.3;}
#ccx-page .ccx-network-card p{font-size:14px; line-height:1.6; color:var(--ccx-ink-soft); margin-bottom:22px; flex:1;}
#ccx-page .ccx-network-cta{display:inline-flex; align-items:center; gap:8px; font-size:13.5px; font-weight:700; color:var(--ccx-teal);}
#ccx-page .ccx-network-cta:hover{color:var(--ccx-teal-bright);}
#ccx-page .ccx-network-cta .ccx-arrow{transition:transform .25s ease;}
#ccx-page .ccx-network-card:hover .ccx-network-cta .ccx-arrow{transform:translateX(5px);}
@media (max-width:1024px){#ccx-page .ccx-network-grid{grid-template-columns:repeat(2,1fr);}}
@media (max-width:640px){#ccx-page .ccx-network-grid{grid-template-columns:1fr;}}

/* ============================================================
   WHY STUDENTS USE THE PLATFORM
   ============================================================ */
#ccx-page .ccx-benefits{padding:100px 0; background:var(--ccx-paper-dim);}
#ccx-page .ccx-benefits-grid{display:grid; grid-template-columns:repeat(3,1fr); gap:22px;}
#ccx-page .ccx-benefit-card{background:#fff; border-radius:var(--ccx-radius-m); padding:28px 24px; box-shadow:var(--ccx-shadow-s); transition:transform .3s ease, box-shadow .3s ease;}
#ccx-page .ccx-benefit-card:hover{transform:translateY(-5px); box-shadow:var(--ccx-shadow-m);}
#ccx-page .ccx-benefit-icon{
  width:46px; height:46px; border-radius:12px; background:rgba(31,122,106,0.1); color:var(--ccx-teal);
  display:flex; align-items:center; justify-content:center; margin-bottom:18px;
}
#ccx-page .ccx-benefit-card h3{font-family:var(--ccx-font-display); font-size:17px; font-weight:600; color:var(--ccx-navy-900); margin-bottom:9px;}
#ccx-page .ccx-benefit-card p{font-size:13.8px; line-height:1.6; color:var(--ccx-ink-soft);}
@media (max-width:900px){#ccx-page .ccx-benefits-grid{grid-template-columns:repeat(2,1fr);}}
@media (max-width:560px){#ccx-page .ccx-benefits-grid{grid-template-columns:1fr;}}

/* ============================================================
   STUDENT-CENTRIC SECTION
   ============================================================ */
#ccx-page .ccx-student-section{padding:0; position:relative; overflow:hidden; min-height:560px; display:flex; align-items:center;}
#ccx-page .ccx-student-media{position:absolute; inset:0;}
#ccx-page .ccx-student-media img{width:100%; height:100%; object-fit:cover;}
#ccx-page .ccx-student-media::after{
  content:""; position:absolute; inset:0;
  background:linear-gradient(100deg, rgba(10,17,32,0.92) 0%, rgba(10,17,32,0.72) 46%, rgba(10,17,32,0.3) 80%);
}
#ccx-page .ccx-student-content{position:relative; z-index:1; max-width:620px; padding:100px 0;}
#ccx-page .ccx-student-content h2{
  font-family:var(--ccx-font-display); font-weight:600; font-size:clamp(28px,3.6vw,42px); color:#fff;
  line-height:1.15; margin-bottom:20px; letter-spacing:-0.01em;
}
#ccx-page .ccx-student-content p{color:rgba(255,255,255,0.82); font-size:16px; line-height:1.75; margin-bottom:30px;}

/* ============================================================
   TRUST SECTION
   ============================================================ */
#ccx-page .ccx-trust{padding:100px 0;}
#ccx-page .ccx-trust-grid{display:grid; grid-template-columns:repeat(3,1fr); gap:28px;}
#ccx-page .ccx-trust-card{text-align:center; padding:10px 14px;}
#ccx-page .ccx-trust-icon{
  width:58px; height:58px; margin:0 auto 20px; border-radius:50%; background:var(--ccx-navy-900); color:var(--ccx-gold-bright);
  display:flex; align-items:center; justify-content:center;
}
#ccx-page .ccx-trust-card h3{font-family:var(--ccx-font-display); font-size:18px; font-weight:600; color:var(--ccx-navy-900); margin-bottom:10px;}
#ccx-page .ccx-trust-card p{font-size:14px; line-height:1.65; color:var(--ccx-ink-soft); max-width:32ch; margin:0 auto;}
@media (max-width:760px){#ccx-page .ccx-trust-grid{grid-template-columns:1fr; gap:40px;}}

/* ============================================================
   STATS STRIP
   ============================================================ */
#ccx-page .ccx-about-stats{padding:70px 0; background:var(--ccx-navy-950);}
#ccx-page .ccx-about-stats-grid{display:grid; grid-template-columns:repeat(4,1fr); gap:24px; text-align:center;}
#ccx-page .ccx-about-stat-num{font-family:var(--ccx-font-display); font-weight:600; font-size:clamp(30px,3.6vw,44px); color:var(--ccx-gold-bright);}
#ccx-page .ccx-about-stat-label{margin-top:8px; font-size:13.5px; color:rgba(255,255,255,0.65); line-height:1.5;}
@media (max-width:760px){#ccx-page .ccx-about-stats-grid{grid-template-columns:repeat(2,1fr); row-gap:36px;}}

/* ============================================================
   ABOUT CTA
   ============================================================ */
#ccx-page .ccx-about-cta{padding:120px 0; text-align:center; background:linear-gradient(180deg, var(--ccx-paper), var(--ccx-paper-dim));}
#ccx-page .ccx-about-cta h2{
  font-family:var(--ccx-font-display); font-weight:600; color:var(--ccx-navy-900); font-size:clamp(30px,4.4vw,48px);
  margin-bottom:18px; letter-spacing:-0.01em;
}
#ccx-page .ccx-about-cta p{color:var(--ccx-ink-soft); font-size:16px; max-width:52ch; margin:0 auto 34px; line-height:1.65;}
#ccx-page .ccx-about-cta-actions{display:flex; gap:16px; justify-content:center; flex-wrap:wrap;}

/* ============================================================
   FOOTER — identical to the marketing index page
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
   WHATSAPP FLOAT — identical to the marketing index page
   ============================================================ */
#ccx-page .ccx-whatsapp-float{
  position:fixed; right:22px; bottom:22px; z-index:800; width:60px; height:60px; border-radius:50%;
  background:#25D366; display:flex; align-items:center; justify-content:center; box-shadow:0 10px 26px rgba(37,211,102,0.45);
  transition:transform .25s ease;
}
#ccx-page .ccx-whatsapp-float:hover{transform:scale(1.08);}
#ccx-page .ccx-whatsapp-float::before{
  content:""; position:absolute; inset:0; border-radius:50%; background:#25D366; opacity:0.55;
  animation:ccxPulseRing 2.2s ease-out infinite;
}
@keyframes ccxPulseRing{0%{transform:scale(1); opacity:0.5;} 100%{transform:scale(1.7); opacity:0;}}
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

/* ============================================================
   ADMISSION INQUIRY MODAL — identical to the marketing index page
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

#ccx-page .ccx-field{display:flex; flex-direction:column; gap:7px;}
#ccx-page .ccx-field.ccx-full{grid-column:1 / -1;}
#ccx-page .ccx-field label{font-size:13px; font-weight:700; color:var(--ccx-navy-800);}
#ccx-page .ccx-field input, #ccx-page .ccx-field select, #ccx-page .ccx-field textarea{
  border:1.5px solid var(--ccx-paper-dim); border-radius:10px; padding:12px 14px;
  font-family:inherit; font-size:14.5px; color:var(--ccx-ink); background:var(--ccx-paper);
  transition:border-color .2s ease, background .2s ease; width:100%;
}
#ccx-page .ccx-field input:focus, #ccx-page .ccx-field select:focus, #ccx-page .ccx-field textarea:focus{
  border-color:var(--ccx-gold); background:#fff; outline:none;
}
#ccx-page .ccx-field textarea{resize:vertical; min-height:90px;}
#ccx-page .ccx-field.ccx-error input, #ccx-page .ccx-field.ccx-error select, #ccx-page .ccx-field.ccx-error textarea{border-color:var(--ccx-danger); background:#FDF3F2;}
#ccx-page .ccx-field-error{font-size:12.5px; color:var(--ccx-danger); min-height:15px; display:none;}
#ccx-page .ccx-field.ccx-error .ccx-field-error{display:block;}

#ccx-page .ccx-sr-only{position:absolute; width:1px; height:1px; overflow:hidden; clip:rect(0,0,0,0); white-space:nowrap;}
</style>
<?php wp_head(); ?>
</head>
<body>

<div id="ccx-page">

<!-- ============================================================
     HEADER (identical to marketing index page; "About" active)
     ============================================================ -->
<header class="ccx-site-header" id="ccx-site-header">
  <div class="ccx-container">
    <a href="/" class="ccx-brand" aria-label="EduApply home">
      <span class="ccx-brand-mark">EA</span>
      <span>EduApply<span class="ccx-brand-small">Admissions Guide</span></span>
    </a>

    <nav class="ccx-main-nav" aria-label="Primary">
      <a href="/">Home</a>
      <a href="/about" class="ccx-nav-active" aria-current="page">About</a>
      <a href="/#ccx-universities">Universities</a>
      <a href="/#ccx-programs">Programs</a>
      <a href="/#ccx-why">Why Choose Us</a>
      <a href="/#ccx-admissions">Admissions</a>
      <a href="/#ccx-contact">Contact</a>
    </nav>

    <div class="ccx-header-right">
      <a href="#" class="ccx-btn ccx-btn-gold ccx-admission-trigger">Admission Now</a>
      <button class="ccx-hamburger" id="ccx-hamburger-btn" aria-label="Open menu" aria-expanded="false" aria-controls="ccx-mobile-drawer">
        <span></span><span></span><span></span>
      </button>
    </div>
  </div>
</header>

<div class="ccx-mobile-drawer" id="ccx-mobile-drawer" role="dialog" aria-modal="true" aria-label="Mobile navigation">
  <button class="ccx-drawer-close" id="ccx-drawer-close-btn" aria-label="Close menu">&times;</button>
  <nav>
    <a href="/">Home</a>
    <a href="/about" class="ccx-nav-active" aria-current="page">About</a>
    <a href="/#ccx-universities">Universities</a>
    <a href="/#ccx-programs">Programs</a>
    <a href="/#ccx-why">Why Choose Us</a>
    <a href="/#ccx-admissions">Admissions</a>
    <a href="/#ccx-contact">Contact</a>
  </nav>
  <a href="#" class="ccx-btn ccx-btn-gold ccx-btn-block ccx-admission-trigger">Admission Now</a>
</div>

<!-- ============================================================
     ABOUT HERO
     ============================================================ -->
<section class="ccx-about-hero">
  <div class="ccx-about-hero-media">
    <img src="https://www.bahria.edu.pk/Content/images/main/main_campus.jpg" alt="Students walking together on a university campus">
  </div>
  <div class="ccx-container ccx-about-hero-content">
    <p class="ccx-eyebrow on-dark">About Us</p>
    <h1>Connecting Students With The Right University</h1>
    <p class="ccx-about-hero-sub">Explore leading universities, discover academic opportunities, and take the next step toward your future through one trusted platform.</p>
    <div class="ccx-about-hero-actions">
      <a href="/#ccx-universities" class="ccx-btn ccx-btn-gold">Explore Universities</a>
      <a href="/#ccx-programs" class="ccx-btn ccx-btn-outline">Explore Programs</a>
    </div>
  </div>
</section>

<!-- ============================================================
     ABOUT THE PLATFORM
     ============================================================ -->
<section class="ccx-intro">
  <div class="ccx-container">
    <div class="ccx-intro-grid ccx-reveal">
      <div class="ccx-intro-media">
        <img src="https://numl.edu.pk/templates/template10/images/numl_mainBldg.jpg" alt="Students reviewing university program materials together">
      </div>
      <div class="ccx-intro-text">
        <p class="ccx-eyebrow">Who We Are</p>
        <h2>One Platform. Multiple Opportunities.</h2>
        <p>EduApply brings together information about six partner universities in one convenient place, so prospective students can explore campuses, academic programs, admissions pathways and study opportunities without having to search separately across six different institutional websites.</p>
        <p>Whether you're comparing programs, trying to understand admissions requirements, or simply figuring out where to start, our platform is built to make that early research phase easier.</p>
        <div class="ccx-note">EduApply is an independent marketing and information platform. It is not an official website of any of the six universities listed here — for authoritative admissions details, always confirm directly with the university.</div>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     OUR PURPOSE
     ============================================================ -->
<section class="ccx-purpose">
  <div class="ccx-container">
    <div class="ccx-section-head ccx-reveal">
      <p class="ccx-eyebrow ccx-on-dark">Our Purpose</p>
      <h2>Helping Students Make Better Education Decisions</h2>
    </div>

    <div class="ccx-purpose-grid ccx-reveal">
      <div class="ccx-purpose-card">
        <span class="ccx-purpose-num">01</span>
        <h3>Explore Universities</h3>
        <p>Compare and discover multiple university options from one convenient platform.</p>
      </div>
      <div class="ccx-purpose-card">
        <span class="ccx-purpose-num">02</span>
        <h3>Discover Programs</h3>
        <p>Explore academic fields and programs that match your goals and interests.</p>
      </div>
      <div class="ccx-purpose-card">
        <span class="ccx-purpose-num">03</span>
        <h3>Understand Admissions</h3>
        <p>Find useful admissions information and understand the next steps toward applying.</p>
      </div>
      <div class="ccx-purpose-card">
        <span class="ccx-purpose-num">04</span>
        <h3>Start Your Journey</h3>
        <p>Connect with the right opportunity and take the next step toward your academic future.</p>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     SIX UNIVERSITY NETWORK
     ============================================================ -->
<section class="ccx-network">
  <div class="ccx-container">
    <div class="ccx-section-head ccx-center ccx-reveal">
      <p class="ccx-eyebrow">Our Network</p>
      <h2>Explore Our University Network</h2>
      <p>Discover opportunities across six leading university destinations.</p>
    </div>

    <div class="ccx-network-grid ccx-reveal">
      <div class="ccx-network-card">
        <span class="ccx-network-badge">UCP</span>
        <h3>University of Central Punjab</h3>
        <p>A private-sector university offering a broad mix of business, computing, media and social science programs.</p>
        <a href="/ucp" class="ccx-network-cta">Explore University <span class="ccx-arrow">→</span></a>
      </div>
      <div class="ccx-network-card">
        <span class="ccx-network-badge">BIMS</span>
        <h3>BIMS</h3>
        <p>The Barani Institute of Management &amp; Sciences — a Rawalpindi-based institute focused on management and professional programs.</p>
        <a href="/bims" class="ccx-network-cta">Explore University <span class="ccx-arrow">→</span></a>
      </div>
      <div class="ccx-network-card">
        <span class="ccx-network-badge">UOR</span>
        <h3>University of Rawalpindi</h3>
        <p>A growing university on GT Road, Rawalpindi, with a widening portfolio across business, computing and design.</p>
        <a href="/uor" class="ccx-network-cta">Explore University <span class="ccx-arrow">→</span></a>
      </div>
      <div class="ccx-network-card">
        <span class="ccx-network-badge">NUML</span>
        <h3>National University of Modern Languages</h3>
        <p>A public-sector university known for language education, with regional campuses across Pakistan.</p>
        <a href="/numl" class="ccx-network-cta">Explore University <span class="ccx-arrow">→</span></a>
      </div>
      <div class="ccx-network-card">
        <span class="ccx-network-badge">TMUC</span>
        <h3>The Millennium Universal College</h3>
        <p>An internationally affiliated college offering UK-linked qualifications across business, computing, law and creative arts.</p>
        <a href="/tmuc" class="ccx-network-cta">Explore University <span class="ccx-arrow">→</span></a>
      </div>
      <div class="ccx-network-card">
        <span class="ccx-network-badge">BU</span>
        <h3>Bahria University</h3>
        <p>A federally chartered public-sector university established by the Pakistan Navy, with campuses in Islamabad, Karachi and Lahore.</p>
        <a href="/bahria" class="ccx-network-cta">Explore University <span class="ccx-arrow">→</span></a>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     WHY STUDENTS USE THE PLATFORM
     ============================================================ -->
<section class="ccx-benefits">
  <div class="ccx-container">
    <div class="ccx-section-head ccx-center ccx-reveal">
      <p class="ccx-eyebrow">Why It Helps</p>
      <h2>Everything You Need To Start Your University Journey</h2>
    </div>

    <div class="ccx-benefits-grid ccx-reveal">
      <div class="ccx-benefit-card">
        <div class="ccx-benefit-icon"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M3 21l6-6M13 11l8-8M3 12l9 9 9-9-9-9-9 9z"/></svg></div>
        <h3>Multiple Universities</h3>
        <p>See six different institutions side by side instead of researching each one separately.</p>
      </div>
      <div class="ccx-benefit-card">
        <div class="ccx-benefit-icon"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M4 19.5A2.5 2.5 0 016.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 014 19.5v-15A2.5 2.5 0 016.5 2z"/></svg></div>
        <h3>Wide Range of Programs</h3>
        <p>Browse study areas spanning business, computing, sciences, media, law and more.</p>
      </div>
      <div class="ccx-benefit-card">
        <div class="ccx-benefit-icon"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 3"/></svg></div>
        <h3>Easy Information Access</h3>
        <p>Key facts about each university are organized clearly, without digging through multiple sites.</p>
      </div>
      <div class="ccx-benefit-card">
        <div class="ccx-benefit-icon"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M12 21s-7-6.2-7-11a7 7 0 0114 0c0 4.8-7 11-7 11z"/><circle cx="12" cy="10" r="2.5"/></svg></div>
        <h3>Admissions Guidance</h3>
        <p>Understand the general admissions picture before you reach out to a specific university.</p>
      </div>
      <div class="ccx-benefit-card">
        <div class="ccx-benefit-icon"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M13 2L4 14h6l-1 8 9-12h-6l1-8z"/></svg></div>
        <h3>Convenient Exploration</h3>
        <p>Move between universities and programs at your own pace, from any device.</p>
      </div>
      <div class="ccx-benefit-card">
        <div class="ccx-benefit-icon"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M22 12a10 10 0 11-20 0 10 10 0 0120 0z"/><path d="M12 7v5l3 3"/></svg></div>
        <h3>One Simple Starting Point</h3>
        <p>Start your research here, then move confidently toward each university's own admissions process.</p>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     STUDENT-CENTRIC SECTION
     ============================================================ -->
<section class="ccx-student-section">
  <div class="ccx-student-media">
    <img src="https://www.uor.edu.pk/frontend/academics/img/about/intro.png" alt="Student thinking through university options">
  </div>
  <div class="ccx-container">
    <div class="ccx-student-content ccx-reveal">
      <p class="ccx-eyebrow ccx-on-dark">For Students</p>
      <h2>Your Future Starts With The Right Choice</h2>
      <p>Choosing a university is an important decision. Our platform helps you explore your options, understand what each university offers, and move closer to finding the opportunity that fits your goals.</p>
      <a href="/#ccx-universities" class="ccx-btn ccx-btn-gold">Explore Your Options</a>
    </div>
  </div>
</section>

<!-- ============================================================
     TRUST SECTION
     ============================================================ -->
<section class="ccx-trust">
  <div class="ccx-container">
    <div class="ccx-section-head ccx-center ccx-reveal">
      <p class="ccx-eyebrow">How We Help</p>
      <h2>Designed To Make University Exploration Simpler</h2>
      <p>The platform provides an organized starting point for students and families researching higher education — not a replacement for speaking directly with the universities themselves.</p>
    </div>

    <div class="ccx-trust-grid ccx-reveal">
      <div class="ccx-trust-card">
        <div class="ccx-trust-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M4 19.5A2.5 2.5 0 016.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 014 19.5v-15A2.5 2.5 0 016.5 2z"/></svg></div>
        <h3>Clear Information</h3>
        <p>Find key university and program information in one place.</p>
      </div>
      <div class="ccx-trust-card">
        <div class="ccx-trust-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M13 2L4 14h6l-1 8 9-12h-6l1-8z"/></svg></div>
        <h3>Easy Exploration</h3>
        <p>Move between universities and explore different academic opportunities.</p>
      </div>
      <div class="ccx-trust-card">
        <div class="ccx-trust-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M5 12h14M13 6l6 6-6 6"/></svg></div>
        <h3>Action-Oriented</h3>
        <p>Quickly move from exploration toward admissions and inquiry.</p>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     STATS STRIP (non-fabricated, structural facts only)
     ============================================================ -->
<section class="ccx-about-stats">
  <div class="ccx-container">
    <div class="ccx-about-stats-grid ccx-reveal">
      <div>
        <div class="ccx-about-stat-num">06</div>
        <div class="ccx-about-stat-label">Universities</div>
      </div>
      <div>
        <div class="ccx-about-stat-num">Multiple</div>
        <div class="ccx-about-stat-label">Academic Opportunities</div>
      </div>
      <div>
        <div class="ccx-about-stat-num">Multiple</div>
        <div class="ccx-about-stat-label">Study Areas</div>
      </div>
      <div>
        <div class="ccx-about-stat-num">01</div>
        <div class="ccx-about-stat-label">Convenient Platform</div>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     ABOUT CTA
     ============================================================ -->
<section class="ccx-about-cta">
  <div class="ccx-container">
    <h2>Ready To Explore Your University Options?</h2>
    <p>Discover universities, explore programs, and take the next step toward your academic future.</p>
    <div class="ccx-about-cta-actions">
      <a href="/#ccx-universities" class="ccx-btn ccx-btn-gold">Explore Universities</a>
      <a href="/#ccx-contact" class="ccx-btn ccx-btn-outline-dark">Contact Us</a>
    </div>
  </div>
</section>

<!-- ============================================================
     FOOTER (identical to marketing index page)
     ============================================================ -->
<footer class="ccx-site-footer" id="ccx-contact">
  <div class="ccx-container">
    <div class="ccx-footer-grid">
      <div class="ccx-footer-brand">
        <a href="/" class="ccx-brand" style="font-size:19px;">
          <span class="ccx-brand-mark">EA</span>
          <span>EduApply</span>
        </a>
        <p>An independent admissions guidance campaign helping students explore and compare university options in one place. This is not an official university website.</p>
      </div>

      <div class="ccx-footer-col">
        <h5>Universities</h5>
        <ul>
          <li><a href="/ucp">University of Central Punjab</a></li>
          <li><a href="/bims">BIMS</a></li>
          <li><a href="/uor">University of Rawalpindi</a></li>
          <li><a href="/numl">NUML</a></li>
          <li><a href="/tmuc">The Millennium Universal College</a></li>
          <li><a href="/bahria">Bahria University</a></li>
        </ul>
      </div>

      <div class="ccx-footer-col">
        <h5>Quick Links</h5>
        <ul>
          <li><a href="/">Home</a></li>
          <li><a href="/about">About</a></li>
          <li><a href="/#ccx-universities">Universities</a></li>
          <li><a href="/#ccx-programs">Programs</a></li>
          <li><a href="/#ccx-why">Why Choose Us</a></li>
          <li><a href="/#ccx-admissions">Admissions</a></li>
          <li><a href="/#ccx-contact">Contact</a></li>
        </ul>
      </div>

      <div class="ccx-footer-col">
        <h5>Contact</h5>
        <ul>
          <li class="ccx-contact-item">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.362 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.338 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
            +92 3XX XXXXXXX <span style="color:rgba(255,255,255,0.35);">(placeholder)</span>
          </li>
          <li class="ccx-contact-item">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16v16H4z" opacity="0"/><path d="M22 6l-10 7L2 6"/><path d="M2 6h20v12H2z"/></svg>
            admissions@example.com
          </li>
          <li>
            <a href="#" id="ccx-footer-whatsapp" class="ccx-contact-item" style="color:#25D366;">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M17.6 6.32A8.86 8.86 0 0012.05 4a8.94 8.94 0 00-7.74 13.4L3 21l3.7-1.28a8.9 8.9 0 004.34 1.12h.01A8.94 8.94 0 0021 12.32a8.87 8.87 0 00-3.4-6zM12.05 19.6a7.4 7.4 0 01-3.78-1.04l-.27-.16-2.8.97.94-2.73-.18-.28a7.44 7.44 0 01-1.15-3.98 7.4 7.4 0 0112.65-5.25 7.36 7.36 0 012.17 5.25 7.4 7.4 0 01-7.58 7.22zm4.08-5.55c-.22-.11-1.31-.65-1.51-.72-.2-.07-.35-.11-.5.11-.15.22-.57.72-.7.87-.13.15-.26.16-.48.05a6.1 6.1 0 01-1.8-1.11 6.8 6.8 0 01-1.24-1.55c-.13-.22 0-.34.1-.45.1-.1.22-.26.33-.39.11-.13.15-.22.22-.37.07-.15.04-.28-.02-.39-.06-.11-.5-1.21-.69-1.66-.18-.43-.36-.37-.5-.38h-.43c-.15 0-.39.06-.6.28-.2.22-.79.77-.79 1.87 0 1.1.81 2.16.92 2.31.11.15 1.6 2.44 3.87 3.42.54.23.96.37 1.29.48.54.17 1.03.15 1.42.09.43-.06 1.31-.53 1.5-1.05.18-.51.18-.95.13-1.05-.06-.1-.2-.15-.42-.26z"/></svg>
              Chat on WhatsApp
            </a>
          </li>
        </ul>
      </div>
    </div>

    <div class="ccx-footer-bottom">
      <p>&copy; <span id="ccx-year"></span> EduApply. All rights reserved.</p>
      <div class="ccx-footer-legal">
        <a href="#">Privacy Policy</a>
        <a href="#">Terms of Use</a>
      </div>
    </div>
  </div>
</footer>

<!-- ============================================================
     WHATSAPP FLOAT (identical to marketing index page)
     ============================================================ -->
<a href="#" class="ccx-whatsapp-float" id="ccx-whatsapp-float" aria-label="Chat with us on WhatsApp">
  <span class="ccx-wa-tooltip" role="tooltip">Chat with us on WhatsApp</span>
  <svg width="30" height="30" viewBox="0 0 24 24" fill="#fff"><path d="M17.6 6.32A8.86 8.86 0 0012.05 4a8.94 8.94 0 00-7.74 13.4L3 21l3.7-1.28a8.9 8.9 0 004.34 1.12h.01A8.94 8.94 0 0021 12.32a8.87 8.87 0 00-3.4-6zM12.05 19.6a7.4 7.4 0 01-3.78-1.04l-.27-.16-2.8.97.94-2.73-.18-.28a7.44 7.44 0 01-1.15-3.98 7.4 7.4 0 0112.65-5.25 7.36 7.36 0 012.17 5.25 7.4 7.4 0 01-7.58 7.22zm4.08-5.55c-.22-.11-1.31-.65-1.51-.72-.2-.07-.35-.11-.5.11-.15.22-.57.72-.7.87-.13.15-.26.16-.48.05a6.1 6.1 0 01-1.8-1.11 6.8 6.8 0 01-1.24-1.55c-.13-.22 0-.34.1-.45.1-.1.22-.26.33-.39.11-.13.15-.22.22-.37.07-.15.04-.28-.02-.39-.06-.11-.5-1.21-.69-1.66-.18-.43-.36-.37-.5-.38h-.43c-.15 0-.39.06-.6.28-.2.22-.79.77-.79 1.87 0 1.1.81 2.16.92 2.31.11.15 1.6 2.44 3.87 3.42.54.23.96.37 1.29.48.54.17 1.03.15 1.42.09.43-.06 1.31-.53 1.5-1.05.18-.51.18-.95.13-1.05-.06-.1-.2-.15-.42-.26z"/></svg>
</a>

<!-- ============================================================
     ADMISSION INQUIRY MODAL (identical to marketing index page)
     ============================================================ -->
<div class="ccx-modal-overlay" id="ccx-admission-modal" role="dialog" aria-modal="true" aria-labelledby="ccx-modal-title" aria-hidden="true">
  <div class="ccx-modal-panel">
    <button type="button" class="ccx-modal-close" id="ccx-modal-close" aria-label="Close admission inquiry form">&times;</button>
    <div class="ccx-modal-header">
      <p class="ccx-eyebrow">Admissions</p>
      <h3 id="ccx-modal-title"><?php echo esc_html( get_theme_mod( 'ccx_inquiry_title', 'Admission Inquiry' ) ); ?></h3>
      <p class="ccx-modal-sub"><?php echo esc_html( get_theme_mod( 'ccx_inquiry_subtitle', "Share your details and we'll open WhatsApp with your inquiry ready to send — pick the university you're interested in." ) ); ?></p>
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
   Same namespaced IIFE pattern as the marketing index page.
   ============================================================ */
var ccxAboutPage = (function(){
  "use strict";

  var ccxConfig = {
    whatsappNumber: "<?php echo esc_js( ccx_whatsapp_number() ); ?>",
    whatsappMessage: "Hello, I would like to get information about university admissions."
  };

  function ccxInit(){
    ccxSetupWhatsapp();
    ccxSetupStickyHeader();
    ccxSetupMobileDrawer();
    ccxSetupSmoothScroll();
    ccxSetupScrollReveal();
    ccxSetupFooterYear();
    ccxSetupAdmissionModal();
  }

  /* ---------- ADMISSION INQUIRY MODAL (WhatsApp) ---------- */
  function ccxSetupAdmissionModal(){
    var overlay = document.getElementById("ccx-admission-modal");
    var closeBtn = document.getElementById("ccx-modal-close");
    var form = document.getElementById("ccx-admission-form");
    if(!overlay || !closeBtn || !form) return;

    var universityWhatsapp = <?php echo wp_json_encode( ccx_whatsapp_map() ); ?>;

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

  /* ---------- SMOOTH SCROLL (only for in-page "#..." anchors) ---------- */
  function ccxSetupSmoothScroll(){
    document.querySelectorAll('#ccx-page a[href^="#"]').forEach(function(link){
      var href = link.getAttribute("href");
      if(!href || href.length < 2) return;
      link.addEventListener("click", function(e){
        var target = document.querySelector(href);
        if(target){
          e.preventDefault();
          var offset = 84;
          var top = target.getBoundingClientRect().top + window.pageYOffset - offset;
          window.scrollTo({top:top, behavior:"smooth"});
        }
      });
    });
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

  return { init: ccxInit };
})();

if(document.readyState === "loading"){
  document.addEventListener("DOMContentLoaded", ccxAboutPage.init);
} else {
  ccxAboutPage.init();
}
</script>

<?php wp_footer(); ?>
</body>
</html>
