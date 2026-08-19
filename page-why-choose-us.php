<?php
/**
 * Template Name: EduApply — Why Choose Us
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Why Choose Us | Explore Universities &amp; Programs</title>
<meta name="description" content="Discover why our platform makes it easier to explore universities, programs, admissions information, and your next education opportunity." />

<!--
  Why Choose Us page for the MAIN MARKETING WEBSITE only (/why-choose-us).
  Reuses the same "ccx-" namespacing, design tokens, header, footer, WhatsApp
  button and admission modal as the other marketing pages.

  CONTENT HONESTY NOTE: this page sells the platform's convenience (one
  place to explore six universities, programs and admissions information),
  not university outcomes. No rankings, student counts, success rates,
  scholarships, employment stats, partnerships, testimonials, or "official
  representative" claims are made anywhere on this page, per the brief.
-->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,400;0,9..144,500;0,9..144,600;0,9..144,700;1,9..144,500&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=IBM+Plex+Mono:wght@400;500&display=swap" rel="stylesheet">

<style>
/* ============================================================
   TOKENS — identical to the other marketing pages
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
  font-family:var(--ccx-font-body); color:var(--ccx-ink); background:var(--ccx-paper);
  overflow-x:hidden; -webkit-font-smoothing:antialiased; position:relative;
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

#ccx-page .ccx-section-head{max-width:640px; margin-bottom:46px;}
#ccx-page .ccx-section-head h2{
  font-family:var(--ccx-font-display); font-weight:600; font-size:clamp(28px,3.8vw,42px);
  line-height:1.14; color:var(--ccx-navy-900); letter-spacing:-0.01em;
}
#ccx-page .ccx-section-head p{margin-top:14px; font-size:16px; line-height:1.6; color:var(--ccx-ink-soft);}
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
#ccx-page .ccx-btn-sm{padding:10px 20px; font-size:13px;}

/* ============================================================
   HEADER — identical to the other marketing pages
   ============================================================ */
#ccx-page .ccx-site-header{
  position:fixed; top:0; left:0; right:0; z-index:900; padding:20px 0; background:var(--ccx-navy-950);
  transition:background .35s ease, padding .35s ease, box-shadow .35s ease, backdrop-filter .35s ease;
}
#ccx-page .ccx-site-header .ccx-container{display:flex; align-items:center; justify-content:space-between; gap:24px;}
#ccx-page .ccx-site-header.ccx-scrolled{
  padding:12px 0; background:rgba(10,17,32,0.92); backdrop-filter:blur(14px); -webkit-backdrop-filter:blur(14px);
  box-shadow:0 6px 24px rgba(0,0,0,0.18);
}
#ccx-page .ccx-brand{display:flex; align-items:center; gap:11px; font-family:var(--ccx-font-display); font-weight:600; font-size:21px; color:#fff;}
#ccx-page .ccx-brand-mark{
  width:38px; height:38px; border-radius:10px; background:linear-gradient(135deg, var(--ccx-gold-bright), var(--ccx-gold-dim));
  display:flex; align-items:center; justify-content:center; font-family:var(--ccx-font-mono); font-weight:600; font-size:13px;
  color:var(--ccx-navy-950); flex-shrink:0;
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
   HERO
   ============================================================ */
#ccx-page .ccx-wc-hero{position:relative; min-height:76vh; display:flex; align-items:flex-end; overflow:hidden; background:var(--ccx-navy-950);}
#ccx-page .ccx-wc-hero-media{position:absolute; inset:0;}
#ccx-page .ccx-wc-hero-media img{width:100%; height:100%; object-fit:cover; object-position:center 30%;}
#ccx-page .ccx-wc-hero-media::after{
  content:""; position:absolute; inset:0;
  background:linear-gradient(0deg, rgba(8,13,24,0.95) 0%, rgba(8,13,24,0.7) 42%, rgba(8,13,24,0.4) 74%, rgba(8,13,24,0.5) 100%);
}
#ccx-page .ccx-wc-hero-content{position:relative; z-index:1; width:100%; padding:150px 0 78px;}
#ccx-page .ccx-wc-hero h1{
  font-family:var(--ccx-font-display); font-weight:600; font-size:clamp(34px,5.4vw,58px); line-height:1.1;
  color:#fff; max-width:16ch; letter-spacing:-0.01em;
}
#ccx-page .ccx-wc-hero-sub{margin-top:22px; font-size:clamp(15.5px,1.5vw,18px); line-height:1.65; color:rgba(255,255,255,0.82); max-width:58ch;}
#ccx-page .ccx-wc-hero-actions{display:flex; gap:16px; margin-top:34px; flex-wrap:wrap;}

/* ============================================================
   INTRO
   ============================================================ */
#ccx-page .ccx-wc-intro{padding:100px 0;}
#ccx-page .ccx-wc-intro-grid{display:grid; grid-template-columns:1.05fr 0.95fr; gap:60px; align-items:center;}
#ccx-page .ccx-wc-intro-media{border-radius:var(--ccx-radius-l); overflow:hidden; box-shadow:var(--ccx-shadow-l); aspect-ratio:6/5;}
#ccx-page .ccx-wc-intro-media img{width:100%; height:100%; object-fit:cover;}
#ccx-page .ccx-wc-intro-text p{color:var(--ccx-ink-soft); line-height:1.75; font-size:16px; margin-bottom:16px;}
@media (max-width:900px){#ccx-page .ccx-wc-intro-grid{grid-template-columns:1fr;} #ccx-page .ccx-wc-intro-media{order:-1;}}

/* ============================================================
   CORE BENEFITS
   ============================================================ */
#ccx-page .ccx-wc-benefits{padding:100px 0; background:var(--ccx-navy-950);}
#ccx-page .ccx-wc-benefits .ccx-section-head h2, #ccx-page .ccx-wc-benefits .ccx-eyebrow{color:#fff;}
#ccx-page .ccx-wc-benefits .ccx-section-head p{color:rgba(255,255,255,0.62);}
#ccx-page .ccx-wc-benefits-grid{display:grid; grid-template-columns:repeat(3,1fr); gap:22px;}
#ccx-page .ccx-wc-benefit-card{
  background:var(--ccx-navy-900); border:1px solid rgba(255,255,255,0.08); border-radius:var(--ccx-radius-m);
  padding:30px 26px; display:flex; flex-direction:column; transition:transform .3s ease, background .3s ease;
}
#ccx-page .ccx-wc-benefit-card:hover{transform:translateY(-6px); background:var(--ccx-navy-800);}
#ccx-page .ccx-wc-benefit-icon{
  width:48px; height:48px; border-radius:12px; background:rgba(201,151,46,0.14); color:var(--ccx-gold-bright);
  display:flex; align-items:center; justify-content:center; margin-bottom:20px;
}
#ccx-page .ccx-wc-benefit-card h3{font-family:var(--ccx-font-display); font-size:18.5px; font-weight:600; color:#fff; margin-bottom:10px;}
#ccx-page .ccx-wc-benefit-card p{font-size:13.8px; line-height:1.65; color:rgba(255,255,255,0.62); margin-bottom:18px; flex:1;}
#ccx-page .ccx-wc-benefit-cta{display:inline-flex; align-items:center; gap:8px; font-size:13px; font-weight:700; color:var(--ccx-gold-bright); align-self:flex-start;}
#ccx-page .ccx-wc-benefit-cta:hover{color:#fff;}
#ccx-page .ccx-wc-benefit-cta .ccx-arrow{transition:transform .3s ease;}
#ccx-page .ccx-wc-benefit-card:hover .ccx-wc-benefit-cta .ccx-arrow{transform:translateX(5px);}
@media (max-width:1024px){#ccx-page .ccx-wc-benefits-grid{grid-template-columns:repeat(2,1fr);}}
@media (max-width:600px){#ccx-page .ccx-wc-benefits-grid{grid-template-columns:1fr;}}

/* ============================================================
   HOW IT WORKS
   ============================================================ */
#ccx-page .ccx-wc-how{padding:100px 0;}
#ccx-page .ccx-wc-how-grid{display:grid; grid-template-columns:repeat(4,1fr); gap:22px; position:relative;}
#ccx-page .ccx-wc-how-step{background:#fff; border:1px solid var(--ccx-paper-dim); border-radius:var(--ccx-radius-m); padding:28px 24px; box-shadow:var(--ccx-shadow-s); transition:transform .3s ease, box-shadow .3s ease;}
#ccx-page .ccx-wc-how-step:hover{transform:translateY(-5px); box-shadow:var(--ccx-shadow-m);}
#ccx-page .ccx-wc-how-num{font-family:var(--ccx-font-display); font-weight:600; font-size:32px; color:var(--ccx-gold); margin-bottom:16px; display:block;}
#ccx-page .ccx-wc-how-step h3{font-family:var(--ccx-font-display); font-size:16.5px; font-weight:600; color:var(--ccx-navy-900); margin-bottom:8px;}
#ccx-page .ccx-wc-how-step p{font-size:13.5px; line-height:1.6; color:var(--ccx-ink-soft); margin-bottom:14px;}
#ccx-page .ccx-wc-how-step a{font-size:12.5px; font-weight:700; color:var(--ccx-teal); display:inline-flex; align-items:center; gap:6px;}
#ccx-page .ccx-wc-how-step a:hover{color:var(--ccx-teal-bright);}
@media (max-width:900px){#ccx-page .ccx-wc-how-grid{grid-template-columns:repeat(2,1fr);}}
@media (max-width:520px){#ccx-page .ccx-wc-how-grid{grid-template-columns:1fr;}}

/* ============================================================
   SIX-UNIVERSITY ADVANTAGE
   ============================================================ */
#ccx-page .ccx-wc-network{padding:100px 0; background:var(--ccx-paper-dim);}
#ccx-page .ccx-wc-network-grid{display:grid; grid-template-columns:repeat(6,1fr); gap:16px;}
#ccx-page .ccx-wc-network-card{
  background:#fff; border-radius:var(--ccx-radius-m); padding:24px 16px; text-align:center; box-shadow:var(--ccx-shadow-s);
  transition:transform .3s ease, box-shadow .3s ease;
}
#ccx-page .ccx-wc-network-card:hover{transform:translateY(-5px); box-shadow:var(--ccx-shadow-m);}
#ccx-page .ccx-wc-network-logo{
  width:54px; height:54px; border-radius:12px; margin:0 auto 14px; display:flex; align-items:center; justify-content:center;
  background:var(--ccx-paper); padding:8px;
}
#ccx-page .ccx-wc-network-logo img{width:100%; height:100%; object-fit:contain;}
#ccx-page .ccx-wc-network-logo.ccx-wc-mono{
  background:linear-gradient(150deg, var(--ccx-wc-accent,var(--ccx-gold)), var(--ccx-navy-950));
  font-family:var(--ccx-font-display); font-weight:700; font-size:14px; color:#fff;
}
#ccx-page .ccx-wc-network-card h3{font-family:var(--ccx-font-display); font-size:13px; font-weight:600; color:var(--ccx-navy-900); line-height:1.35;}
@media (max-width:900px){#ccx-page .ccx-wc-network-grid{grid-template-columns:repeat(3,1fr);}}
@media (max-width:480px){#ccx-page .ccx-wc-network-grid{grid-template-columns:repeat(2,1fr);}}

/* ============================================================
   STUDENT-CENTERED SECTION
   ============================================================ */
#ccx-page .ccx-wc-journey{position:relative; min-height:560px; display:flex; align-items:center; overflow:hidden;}
#ccx-page .ccx-wc-journey-media{position:absolute; inset:0;}
#ccx-page .ccx-wc-journey-media img{width:100%; height:100%; object-fit:cover;}
#ccx-page .ccx-wc-journey-media::after{
  content:""; position:absolute; inset:0;
  background:linear-gradient(100deg, rgba(10,17,32,0.92) 0%, rgba(10,17,32,0.72) 48%, rgba(10,17,32,0.28) 82%);
}
#ccx-page .ccx-wc-journey-content{position:relative; z-index:1; max-width:640px; padding:100px 0;}
#ccx-page .ccx-wc-journey-content h2{
  font-family:var(--ccx-font-display); font-weight:600; font-size:clamp(28px,3.6vw,42px); color:#fff;
  line-height:1.15; margin-bottom:18px; letter-spacing:-0.01em;
}
#ccx-page .ccx-wc-journey-content > p{color:rgba(255,255,255,0.8); font-size:15.5px; line-height:1.7; margin-bottom:34px;}
#ccx-page .ccx-wc-journey-points{display:grid; grid-template-columns:repeat(3,1fr); gap:20px;}
#ccx-page .ccx-wc-journey-point{background:rgba(255,255,255,0.06); border:1px solid rgba(255,255,255,0.12); border-radius:14px; padding:20px 18px;}
#ccx-page .ccx-wc-journey-point span{font-family:var(--ccx-font-mono); font-size:11px; color:var(--ccx-gold-bright); letter-spacing:0.06em; display:block; margin-bottom:8px;}
#ccx-page .ccx-wc-journey-point h4{font-family:var(--ccx-font-display); font-size:15.5px; font-weight:600; color:#fff; margin-bottom:6px;}
#ccx-page .ccx-wc-journey-point p{font-size:12.5px; line-height:1.55; color:rgba(255,255,255,0.68);}
@media (max-width:640px){#ccx-page .ccx-wc-journey-points{grid-template-columns:1fr;}}

/* ============================================================
   EVERYTHING IN ONE PLACE
   ============================================================ */
#ccx-page .ccx-wc-convenience{padding:110px 0; position:relative;}
#ccx-page .ccx-wc-convenience-inner{position:relative; border-radius:var(--ccx-radius-l); overflow:hidden; min-height:440px; display:flex; align-items:center; justify-content:center;}
#ccx-page .ccx-wc-convenience-inner img{position:absolute; inset:0; width:100%; height:100%; object-fit:cover;}
#ccx-page .ccx-wc-convenience-inner::after{content:""; position:absolute; inset:0; background:linear-gradient(180deg, rgba(10,17,32,0.55), rgba(10,17,32,0.78));}
#ccx-page .ccx-wc-convenience-heading{position:relative; z-index:1; text-align:center; color:#fff; padding:0 20px; margin-bottom:36px;}
#ccx-page .ccx-wc-convenience-heading h2{font-family:var(--ccx-font-display); font-weight:600; font-size:clamp(26px,3.4vw,38px); letter-spacing:-0.01em;}
#ccx-page .ccx-wc-convenience-cards{
  position:relative; z-index:1; display:grid; grid-template-columns:repeat(4,1fr); gap:16px; max-width:1000px; padding:0 24px 32px;
}
#ccx-page .ccx-wc-conv-card{background:rgba(255,255,255,0.96); border-radius:14px; padding:22px 18px; text-align:center; box-shadow:var(--ccx-shadow-m);}
#ccx-page .ccx-wc-conv-card h4{font-family:var(--ccx-font-display); font-size:14.5px; font-weight:700; color:var(--ccx-navy-900); margin-bottom:8px; text-transform:uppercase; letter-spacing:0.02em;}
#ccx-page .ccx-wc-conv-card p{font-size:12.5px; color:var(--ccx-ink-soft); line-height:1.5;}
@media (max-width:900px){#ccx-page .ccx-wc-convenience-cards{grid-template-columns:repeat(2,1fr);}}
@media (max-width:520px){#ccx-page .ccx-wc-convenience-cards{grid-template-columns:1fr;}}

/* ============================================================
   TRUST / TRANSPARENCY
   ============================================================ */
#ccx-page .ccx-wc-trust{padding:100px 0; background:var(--ccx-paper-dim);}
#ccx-page .ccx-wc-trust-grid{display:grid; grid-template-columns:repeat(3,1fr); gap:28px;}
#ccx-page .ccx-wc-trust-card{text-align:center; padding:10px 14px;}
#ccx-page .ccx-wc-trust-icon{
  width:56px; height:56px; margin:0 auto 20px; border-radius:50%; background:var(--ccx-navy-900); color:var(--ccx-gold-bright);
  display:flex; align-items:center; justify-content:center;
}
#ccx-page .ccx-wc-trust-card h3{font-family:var(--ccx-font-display); font-size:17.5px; font-weight:600; color:var(--ccx-navy-900); margin-bottom:10px;}
#ccx-page .ccx-wc-trust-card p{font-size:13.8px; line-height:1.65; color:var(--ccx-ink-soft); max-width:32ch; margin:0 auto;}
@media (max-width:760px){#ccx-page .ccx-wc-trust-grid{grid-template-columns:1fr; gap:40px;}}

/* ============================================================
   STUDENT / PARENT
   ============================================================ */
#ccx-page .ccx-wc-audience{padding:100px 0;}
#ccx-page .ccx-wc-audience-grid{display:grid; grid-template-columns:1fr 1fr; gap:26px;}
#ccx-page .ccx-wc-audience-card{background:#fff; border:1px solid var(--ccx-paper-dim); border-radius:var(--ccx-radius-l); padding:36px 32px; box-shadow:var(--ccx-shadow-s);}
#ccx-page .ccx-wc-audience-card h3{font-family:var(--ccx-font-display); font-size:22px; font-weight:600; color:var(--ccx-navy-900); margin-bottom:14px;}
#ccx-page .ccx-wc-audience-card p{font-size:15px; line-height:1.7; color:var(--ccx-ink-soft); margin-bottom:24px;}
@media (max-width:760px){#ccx-page .ccx-wc-audience-grid{grid-template-columns:1fr;}}

/* ============================================================
   FEATURE HIGHLIGHT — one platform, six universities
   ============================================================ */
#ccx-page .ccx-wc-feature{padding:100px 0; background:var(--ccx-navy-950); text-align:center;}
#ccx-page .ccx-wc-feature-num{font-family:var(--ccx-font-display); font-weight:600; font-size:clamp(70px,10vw,120px); color:var(--ccx-gold); line-height:1; margin-bottom:10px;}
#ccx-page .ccx-wc-feature h2{font-family:var(--ccx-font-display); font-weight:600; font-size:clamp(26px,3.4vw,38px); color:#fff; margin-bottom:16px; letter-spacing:-0.01em;}
#ccx-page .ccx-wc-feature p{color:rgba(255,255,255,0.68); font-size:15.5px; max-width:52ch; margin:0 auto 32px; line-height:1.65;}
#ccx-page .ccx-wc-feature-logos{display:flex; flex-wrap:wrap; justify-content:center; gap:14px; margin-bottom:36px;}
#ccx-page .ccx-wc-feature-logo{
  width:52px; height:52px; border-radius:12px; background:#fff; display:flex; align-items:center; justify-content:center; padding:8px;
}
#ccx-page .ccx-wc-feature-logo img{width:100%; height:100%; object-fit:contain;}
#ccx-page .ccx-wc-feature-logo.ccx-wc-mono{
  background:linear-gradient(150deg, var(--ccx-wc-accent,var(--ccx-gold)), var(--ccx-navy-800));
  font-family:var(--ccx-font-display); font-weight:700; font-size:13px; color:#fff;
}

/* ============================================================
   LEAD CTA
   ============================================================ */
#ccx-page .ccx-wc-lead-cta{padding:120px 0; text-align:center;}
#ccx-page .ccx-wc-lead-cta h2{font-family:var(--ccx-font-display); font-weight:600; color:var(--ccx-navy-900); font-size:clamp(28px,4vw,44px); margin-bottom:18px; letter-spacing:-0.01em;}
#ccx-page .ccx-wc-lead-cta p{color:var(--ccx-ink-soft); font-size:16px; max-width:52ch; margin:0 auto 34px; line-height:1.65;}

/* ============================================================
   FINAL CTA
   ============================================================ */
#ccx-page .ccx-wc-final{padding:110px 0; text-align:center; background:linear-gradient(135deg, var(--ccx-navy-950), var(--ccx-navy-800));}
#ccx-page .ccx-wc-final h2{font-family:var(--ccx-font-display); font-weight:600; color:#fff; font-size:clamp(28px,4vw,44px); margin-bottom:16px; letter-spacing:-0.01em;}
#ccx-page .ccx-wc-final p{color:rgba(255,255,255,0.72); font-size:15.5px; max-width:50ch; margin:0 auto 32px; line-height:1.6;}
#ccx-page .ccx-wc-final-actions{display:flex; gap:16px; justify-content:center; flex-wrap:wrap;}

/* ============================================================
   FOOTER — identical to the other marketing pages
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
     HEADER ("Why Choose Us" active)
     ============================================================ -->
<header class="ccx-site-header" id="ccx-site-header">
  <div class="ccx-container">
    <a href="/" class="ccx-brand" aria-label="EduApply home">
      <span class="ccx-brand-mark">EA</span>
      <span>EduApply<span class="ccx-brand-small">Admissions Guide</span></span>
    </a>

    <nav class="ccx-main-nav" aria-label="Primary">
      <a href="/">Home</a>
      <a href="/about">About</a>
      <a href="/universities">Universities</a>
      <a href="/programs">Programs</a>
      <a href="/why-choose-us" class="ccx-nav-active" aria-current="page">Why Choose Us</a>
      <a href="/admissions">Admissions</a>
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
    <a href="/about">About</a>
    <a href="/universities">Universities</a>
    <a href="/programs">Programs</a>
    <a href="/why-choose-us" class="ccx-nav-active" aria-current="page">Why Choose Us</a>
    <a href="/admissions">Admissions</a>
    <a href="/#ccx-contact">Contact</a>
  </nav>
  <a href="#" class="ccx-btn ccx-btn-gold ccx-btn-block ccx-admission-trigger">Admission Now</a>
</div>

<!-- ============================================================
     HERO
     ============================================================ -->
<section class="ccx-wc-hero">
  <div class="ccx-wc-hero-media">
    <img src="https://tmuc.edu.pk/wp-content/uploads/2019/10/Campus-tmuc-nationwide.jpg" alt="Students exploring university and program options together">
  </div>
  <div class="ccx-container ccx-wc-hero-content">
    <p class="ccx-eyebrow ccx-on-dark">Why Choose Us</p>
    <h1>Your University Search, Made Simpler</h1>
    <p class="ccx-wc-hero-sub">Explore universities, discover programs, and understand your next steps through one convenient platform designed around your education journey.</p>
    <div class="ccx-wc-hero-actions">
      <a href="/universities" class="ccx-btn ccx-btn-gold">Explore Universities</a>
      <a href="/programs" class="ccx-btn ccx-btn-outline">Explore Programs</a>
    </div>
  </div>
</section>

<!-- ============================================================
     INTRODUCTION
     ============================================================ -->
<section class="ccx-wc-intro">
  <div class="ccx-container">
    <div class="ccx-wc-intro-grid ccx-reveal">
      <div class="ccx-wc-intro-text">
        <p class="ccx-eyebrow">Where It Starts</p>
        <h2 style="font-family:var(--ccx-font-display); font-weight:600; font-size:clamp(28px,3.6vw,40px); color:var(--ccx-navy-900); line-height:1.15; margin-bottom:20px; letter-spacing:-0.01em;">Everything Starts With The Right Information</h2>
        <p>Choosing where and what to study is an important decision. Our platform brings university and program information together so students can explore their options more easily.</p>
        <p>From that first search to understanding admissions, the goal is to make the early research phase feel organized rather than overwhelming.</p>
      </div>
      <div class="ccx-wc-intro-media">
        <img src="https://ucp.edu.pk/wp-content/uploads/2025/06/01.webp" alt="Student researching university options on a laptop">
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     CORE BENEFITS
     ============================================================ -->
<section class="ccx-wc-benefits">
  <div class="ccx-container">
    <div class="ccx-section-head ccx-center ccx-reveal">
      <p class="ccx-eyebrow ccx-on-dark">The Benefits</p>
      <h2>Why Students Choose Our Platform</h2>
    </div>

    <div class="ccx-wc-benefits-grid ccx-reveal">
      <div class="ccx-wc-benefit-card">
        <div class="ccx-wc-benefit-icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M4 19.5A2.5 2.5 0 016.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 014 19.5v-15A2.5 2.5 0 016.5 2z"/></svg></div>
        <h3>Explore Multiple Universities</h3>
        <p>Discover six university options from one convenient starting point instead of searching through multiple platforms.</p>
        <a href="/universities" class="ccx-wc-benefit-cta">Explore Universities <span class="ccx-arrow">→</span></a>
      </div>
      <div class="ccx-wc-benefit-card">
        <div class="ccx-wc-benefit-icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M22 10L12 5 2 10l10 5 10-5z"/><path d="M6 12v5c0 1.5 2.7 3 6 3s6-1.5 6-3v-5"/></svg></div>
        <h3>Discover Programs</h3>
        <p>Explore academic fields and program opportunities based on your interests and future goals.</p>
        <a href="/programs" class="ccx-wc-benefit-cta">View Programs <span class="ccx-arrow">→</span></a>
      </div>
      <div class="ccx-wc-benefit-card">
        <div class="ccx-wc-benefit-icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="11" cy="11" r="7"/><path d="M21 21l-4.35-4.35"/></svg></div>
        <h3>Easy Information Access</h3>
        <p>Find useful university, program, and admissions information in an organized and accessible experience.</p>
      </div>
      <div class="ccx-wc-benefit-card">
        <div class="ccx-wc-benefit-icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M3 3h7v7H3zM14 3h7v7h-7zM3 14h7v7H3zM14 14h7v7h-7z"/></svg></div>
        <h3>Explore Your Options</h3>
        <p>Move between universities and study areas to understand different opportunities before making your next decision.</p>
      </div>
      <div class="ccx-wc-benefit-card">
        <div class="ccx-wc-benefit-icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M9 13h6M9 17h6M9 9h1"/></svg></div>
        <h3>Understand The Next Steps</h3>
        <p>Get a clearer starting point for understanding admissions and what you may need to do next.</p>
        <a href="/admissions" class="ccx-wc-benefit-cta">Admissions <span class="ccx-arrow">→</span></a>
      </div>
      <div class="ccx-wc-benefit-card">
        <div class="ccx-wc-benefit-icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg></div>
        <h3>Get In Touch</h3>
        <p>Have questions? Contact our team or submit an inquiry to get more information about your options.</p>
        <a href="/#ccx-contact" class="ccx-wc-benefit-cta">Contact Us <span class="ccx-arrow">→</span></a>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     HOW IT WORKS
     ============================================================ -->
<section class="ccx-wc-how">
  <div class="ccx-container">
    <div class="ccx-section-head ccx-center ccx-reveal">
      <p class="ccx-eyebrow" style="margin-left:auto; margin-right:auto; justify-content:center;">The Process</p>
      <h2>How It Works</h2>
      <p>Start exploring in a few simple steps.</p>
    </div>

    <div class="ccx-wc-how-grid ccx-reveal">
      <div class="ccx-wc-how-step">
        <span class="ccx-wc-how-num">01</span>
        <h3>Explore Universities</h3>
        <p>Browse the six universities available through our platform.</p>
        <a href="/universities">Explore now →</a>
      </div>
      <div class="ccx-wc-how-step">
        <span class="ccx-wc-how-num">02</span>
        <h3>Discover Programs</h3>
        <p>Explore study areas and programs that match your interests.</p>
        <a href="/programs">View programs →</a>
      </div>
      <div class="ccx-wc-how-step">
        <span class="ccx-wc-how-num">03</span>
        <h3>Understand Admissions</h3>
        <p>Learn about the next steps and available admission pathways.</p>
        <a href="/admissions">Admissions info →</a>
      </div>
      <div class="ccx-wc-how-step">
        <span class="ccx-wc-how-num">04</span>
        <h3>Take Action</h3>
        <p>Submit an inquiry, contact us, or continue toward your chosen opportunity.</p>
        <a href="/#ccx-contact">Contact us →</a>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     SIX-UNIVERSITY ADVANTAGE
     ============================================================ -->
<section class="ccx-wc-network">
  <div class="ccx-container">
    <div class="ccx-section-head ccx-center ccx-reveal">
      <p class="ccx-eyebrow">Our Network</p>
      <h2>Six Universities. More Ways To Explore.</h2>
      <p>Different students have different goals. Having multiple university options in one place makes it easier to explore different academic pathways.</p>
    </div>

    <!-- Logos below are hotlinked directly from each university's own
         official asset path where available. -->
    <div class="ccx-wc-network-grid ccx-reveal">
      <a href="/ucp" class="ccx-wc-network-card">
        <span class="ccx-wc-network-logo"><img src="https://ucp.edu.pk/inc/uploads/2019/06/ucp-sticky-logo-white-1.png" alt="University of Central Punjab logo" style="background:var(--ccx-navy-900); border-radius:8px;"></span>
        <h3>University of Central Punjab</h3>
      </a>
      <a href="/bims" class="ccx-wc-network-card">
        <span class="ccx-wc-network-logo ccx-wc-mono" style="--ccx-wc-accent:#227A46;" aria-hidden="true">BIMS</span>
        <h3>BIMS</h3>
      </a>
      <a href="/uor" class="ccx-wc-network-card">
        <span class="ccx-wc-network-logo"><img src="https://www.uor.edu.pk/frontend/academics/img/logo-primary.png" alt="University of Rawalpindi logo"></span>
        <h3>University of Rawalpindi</h3>
      </a>
      <a href="/numl" class="ccx-wc-network-card">
        <span class="ccx-wc-network-logo"><img src="https://numl.edu.pk/templates/template10/images/numl_logo.png" alt="National University of Modern Languages logo"></span>
        <h3>NUML</h3>
      </a>
      <a href="/tmuc" class="ccx-wc-network-card">
        <span class="ccx-wc-network-logo"><img src="https://tmuc.edu.pk/wp-content/uploads/2019/10/Tmuc-logo.png" alt="The Millennium Universal College logo"></span>
        <h3>TMUC</h3>
      </a>
      <a href="/bahria" class="ccx-wc-network-card">
        <span class="ccx-wc-network-logo"><img src="https://www.bahria.edu.pk/Content/images/bu_logo_small_1.png" alt="Bahria University logo"></span>
        <h3>Bahria University</h3>
      </a>
    </div>
  </div>
</section>

<!-- ============================================================
     STUDENT-CENTERED SECTION
     ============================================================ -->
<section class="ccx-wc-journey">
  <div class="ccx-wc-journey-media">
    <img src="https://bims.edu.pk/public/uploads/slider/homepage-hero-01-campus-wide-optimized.jpg" alt="Student walking on a university campus">
  </div>
  <div class="ccx-container">
    <div class="ccx-wc-journey-content ccx-reveal">
      <p class="ccx-eyebrow ccx-on-dark">Your Journey</p>
      <h2>Built Around Your Education Journey</h2>
      <p>From the first search to the next step, the platform is designed to make university exploration clearer and easier.</p>
      <div class="ccx-wc-journey-points">
        <div class="ccx-wc-journey-point">
          <span>01</span>
          <h4>Discover</h4>
          <p>Start by exploring universities and study areas.</p>
        </div>
        <div class="ccx-wc-journey-point">
          <span>02</span>
          <h4>Understand</h4>
          <p>Learn more about programs and admissions.</p>
        </div>
        <div class="ccx-wc-journey-point">
          <span>03</span>
          <h4>Act</h4>
          <p>Move forward by contacting us or continuing to your chosen university.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     EVERYTHING IN ONE PLACE
     ============================================================ -->
<section class="ccx-wc-convenience">
  <div class="ccx-container">
    <div class="ccx-wc-convenience-inner ccx-reveal" style="flex-direction:column; padding-top:56px;">
      <img src="https://www.uor.edu.pk/frontend/academics/img/about/intro.png" alt="Students collaborating on university research">
      <div class="ccx-wc-convenience-heading">
        <p class="ccx-eyebrow ccx-on-dark" style="justify-content:center;">Everything In One Place</p>
        <h2>One Platform, Every Next Step</h2>
      </div>
      <div class="ccx-wc-convenience-cards">
        <div class="ccx-wc-conv-card"><h4>Universities</h4><p>Explore six university options.</p></div>
        <div class="ccx-wc-conv-card"><h4>Programs</h4><p>Discover academic opportunities.</p></div>
        <div class="ccx-wc-conv-card"><h4>Admissions</h4><p>Understand your next steps.</p></div>
        <div class="ccx-wc-conv-card"><h4>Support</h4><p>Ask questions and get in touch.</p></div>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     TRUST / TRANSPARENCY
     ============================================================ -->
<section class="ccx-wc-trust">
  <div class="ccx-container">
    <div class="ccx-section-head ccx-center ccx-reveal">
      <p class="ccx-eyebrow">How We Help</p>
      <h2>Explore With Clarity</h2>
      <p>We bring key information into one organized experience so students can spend less time searching and more time understanding their options.</p>
    </div>

    <div class="ccx-wc-trust-grid ccx-reveal">
      <div class="ccx-wc-trust-card">
        <div class="ccx-wc-trust-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M4 6h16M4 12h16M4 18h10"/></svg></div>
        <h3>Clear Navigation</h3>
        <p>Find universities, programs, and admissions information through dedicated sections.</p>
      </div>
      <div class="ccx-wc-trust-card">
        <div class="ccx-wc-trust-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="3" y="3" width="7" height="7" rx="1"/><rect x="14" y="3" width="7" height="7" rx="1"/><rect x="3" y="14" width="7" height="7" rx="1"/><rect x="14" y="14" width="7" height="7" rx="1"/></svg></div>
        <h3>Organized Information</h3>
        <p>Explore information through structured pages and categories.</p>
      </div>
      <div class="ccx-wc-trust-card">
        <div class="ccx-wc-trust-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M5 12h14M13 6l6 6-6 6"/></svg></div>
        <h3>Easy Next Steps</h3>
        <p>Move from discovery to inquiry or admissions information without unnecessary complexity.</p>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     STUDENT / PARENT
     ============================================================ -->
<section class="ccx-wc-audience">
  <div class="ccx-container">
    <div class="ccx-section-head ccx-center ccx-reveal">
      <p class="ccx-eyebrow" style="margin-left:auto; margin-right:auto; justify-content:center;">For Everyone Involved</p>
      <h2>A Simpler Starting Point For Students And Families</h2>
      <p>Whether you are beginning your university search or already have a field of study in mind, the platform gives you a simple place to start exploring.</p>
    </div>

    <div class="ccx-wc-audience-grid ccx-reveal">
      <div class="ccx-wc-audience-card">
        <p class="ccx-eyebrow">Student</p>
        <h3>Exploring Your Options</h3>
        <p>Find programs, explore universities, and discover opportunities that match your interests.</p>
        <a href="/programs" class="ccx-btn ccx-btn-outline-dark ccx-btn-sm">Explore Programs</a>
      </div>
      <div class="ccx-wc-audience-card">
        <p class="ccx-eyebrow">Parent / Family</p>
        <h3>Supporting The Decision</h3>
        <p>Access organized information to help you understand the available university and admissions options.</p>
        <a href="/universities" class="ccx-btn ccx-btn-outline-dark ccx-btn-sm">Explore Universities</a>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     FEATURE HIGHLIGHT
     ============================================================ -->
<section class="ccx-wc-feature">
  <div class="ccx-container">
    <div class="ccx-wc-feature-num ccx-reveal">06</div>
    <h2 class="ccx-reveal">One Platform. Six University Options.</h2>
    <p class="ccx-reveal">Explore a range of university destinations without having to start your search from scratch every time.</p>
    <div class="ccx-wc-feature-logos ccx-reveal">
      <span class="ccx-wc-feature-logo"><img src="https://ucp.edu.pk/inc/uploads/2019/06/ucp-sticky-logo-white-1.png" alt="UCP logo" style="background:var(--ccx-navy-900); border-radius:6px;"></span>
      <span class="ccx-wc-feature-logo ccx-wc-mono" style="--ccx-wc-accent:#227A46;" aria-hidden="true">BIMS</span>
      <span class="ccx-wc-feature-logo"><img src="https://www.uor.edu.pk/frontend/academics/img/logo-primary.png" alt="UOR logo"></span>
      <span class="ccx-wc-feature-logo"><img src="https://numl.edu.pk/templates/template10/images/numl_logo.png" alt="NUML logo"></span>
      <span class="ccx-wc-feature-logo"><img src="https://tmuc.edu.pk/wp-content/uploads/2019/10/Tmuc-logo.png" alt="TMUC logo"></span>
      <span class="ccx-wc-feature-logo"><img src="https://www.bahria.edu.pk/Content/images/bu_logo_small_1.png" alt="Bahria University logo"></span>
    </div>
    <a href="/universities" class="ccx-btn ccx-btn-gold ccx-reveal">Explore Universities</a>
  </div>
</section>

<!-- ============================================================
     LEAD GENERATION CTA
     ============================================================ -->
<section class="ccx-wc-lead-cta">
  <div class="ccx-container">
    <p class="ccx-eyebrow" style="margin-left:auto; margin-right:auto; justify-content:center;">We Can Help</p>
    <h2>Need Help Exploring Your Options?</h2>
    <p>Tell us what you're interested in and get started with your university journey.</p>
    <a href="#" class="ccx-btn ccx-btn-gold ccx-admission-trigger">Get Information</a>
  </div>
</section>

<!-- ============================================================
     FINAL CTA
     ============================================================ -->
<section class="ccx-wc-final">
  <div class="ccx-container">
    <h2>Ready To Find Your Next Opportunity?</h2>
    <p>Explore universities, discover programs, and take the next step toward your future.</p>
    <div class="ccx-wc-final-actions">
      <a href="/universities" class="ccx-btn ccx-btn-gold">Explore Universities</a>
      <a href="/#ccx-contact" class="ccx-btn ccx-btn-outline">Contact Us</a>
    </div>
  </div>
</section>

<!-- ============================================================
     FOOTER (identical to the other marketing pages)
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
          <li><a href="/universities">Universities</a></li>
          <li><a href="/programs">Programs</a></li>
          <li><a href="/why-choose-us">Why Choose Us</a></li>
          <li><a href="/admissions">Admissions</a></li>
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
     WHATSAPP FLOAT
     ============================================================ -->
<a href="#" class="ccx-whatsapp-float" id="ccx-whatsapp-float" aria-label="Chat with us on WhatsApp">
  <span class="ccx-wa-tooltip" role="tooltip">Chat with us on WhatsApp</span>
  <svg width="30" height="30" viewBox="0 0 24 24" fill="#fff"><path d="M17.6 6.32A8.86 8.86 0 0012.05 4a8.94 8.94 0 00-7.74 13.4L3 21l3.7-1.28a8.9 8.9 0 004.34 1.12h.01A8.94 8.94 0 0021 12.32a8.87 8.87 0 00-3.4-6zM12.05 19.6a7.4 7.4 0 01-3.78-1.04l-.27-.16-2.8.97.94-2.73-.18-.28a7.44 7.44 0 01-1.15-3.98 7.4 7.4 0 0112.65-5.25 7.36 7.36 0 012.17 5.25 7.4 7.4 0 01-7.58 7.22zm4.08-5.55c-.22-.11-1.31-.65-1.51-.72-.2-.07-.35-.11-.5.11-.15.22-.57.72-.7.87-.13.15-.26.16-.48.05a6.1 6.1 0 01-1.8-1.11 6.8 6.8 0 01-1.24-1.55c-.13-.22 0-.34.1-.45.1-.1.22-.26.33-.39.11-.13.15-.22.22-.37.07-.15.04-.28-.02-.39-.06-.11-.5-1.21-.69-1.66-.18-.43-.36-.37-.5-.38h-.43c-.15 0-.39.06-.6.28-.2.22-.79.77-.79 1.87 0 1.1.81 2.16.92 2.31.11.15 1.6 2.44 3.87 3.42.54.23.96.37 1.29.48.54.17 1.03.15 1.42.09.43-.06 1.31-.53 1.5-1.05.18-.51.18-.95.13-1.05-.06-.1-.2-.15-.42-.26z"/></svg>
</a>

<!-- ============================================================
     ADMISSION INQUIRY MODAL (shared component)
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
   Same namespaced IIFE pattern as the other marketing pages.
   ============================================================ */
var ccxWhyChoosePage = (function(){
  "use strict";

  var ccxConfig = {
    whatsappNumber: "", // TODO: set before going live — keep in sync with the index page
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

    var universityWhatsapp = {
      UCP: "",
      BIMS: "923333332467",
      UOR: "",
      NUML: "",
      TMUC: "",
      Bahria: ""
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
  function ccxSetupWhatsapp(){
    var number = ccxConfig.whatsappNumber && ccxConfig.whatsappNumber.trim() ? ccxConfig.whatsappNumber.trim() : "";
    var base = number ? ("https://wa.me/" + number) : "https://wa.me/";
    var url = base + "?text=" + encodeURIComponent(ccxConfig.whatsappMessage);
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
  document.addEventListener("DOMContentLoaded", ccxWhyChoosePage.init);
} else {
  ccxWhyChoosePage.init();
}
</script>

<?php wp_footer(); ?>
</body>
</html>
