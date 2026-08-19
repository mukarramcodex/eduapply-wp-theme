<?php
/**
 * Template Name: EduApply — Universities
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Universities | Explore Leading Universities</title>
<meta name="description" content="Explore six universities, discover academic opportunities, and find the university and program that fits your future." />

<!--
  Universities directory page for the MAIN MARKETING WEBSITE only
  (/universities route). Reuses the same "ccx-" namespacing, design tokens,
  header, footer, WhatsApp button and admission modal as the marketing index
  and About pages, so all marketing pages feel like one site. This page does
  not touch, copy, or duplicate any of the six individual university pages —
  each card here is a short promotional summary linking out to its full page.

  NAME NOTE: card #2 uses "Barani Institute of Management & Sciences (BIMS)",
  which is BIMS's actual verified name from its own site — not "Beaconhouse
  International College", which does not match the verified source and would
  misidentify the institution.
-->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,400;0,9..144,500;0,9..144,600;0,9..144,700;1,9..144,500&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=IBM+Plex+Mono:wght@400;500&display=swap" rel="stylesheet">

<style>
/* ============================================================
   TOKENS — identical to the marketing index/about pages
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
#ccx-page .ccx-btn-sm{padding:10px 20px; font-size:13px;}

/* ============================================================
   HEADER — identical to the marketing index/about pages
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
   HERO
   ============================================================ */
#ccx-page .ccx-uh-hero{position:relative; min-height:76vh; display:flex; align-items:flex-end; overflow:hidden; background:var(--ccx-navy-950);}
#ccx-page .ccx-uh-hero-media{position:absolute; inset:0; display:grid; grid-template-columns:1.3fr 1fr; gap:2px;}
#ccx-page .ccx-uh-hero-media .ccx-uh-col{display:grid; grid-template-rows:1fr 1fr; gap:2px; height:100%;}
#ccx-page .ccx-uh-hero-media img{width:100%; height:100%; object-fit:cover; display:block;}
#ccx-page .ccx-uh-hero-media::after{
  content:""; position:absolute; inset:0;
  background:linear-gradient(0deg, rgba(8,13,24,0.95) 0%, rgba(8,13,24,0.72) 42%, rgba(8,13,24,0.4) 72%, rgba(8,13,24,0.5) 100%);
}
#ccx-page .ccx-uh-hero-content{position:relative; z-index:1; width:100%; padding:150px 0 80px;}
#ccx-page .ccx-uh-hero h1{
  font-family:var(--ccx-font-display); font-weight:600; font-size:clamp(36px,5.6vw,62px); line-height:1.08;
  color:#fff; max-width:16ch; letter-spacing:-0.01em;
}
#ccx-page .ccx-uh-hero-sub{margin-top:22px; font-size:clamp(15.5px,1.5vw,18px); line-height:1.65; color:rgba(255,255,255,0.82); max-width:56ch;}
#ccx-page .ccx-uh-hero-actions{display:flex; gap:16px; margin-top:34px; flex-wrap:wrap;}
@media (max-width:760px){#ccx-page .ccx-uh-hero-media{grid-template-columns:1fr;} #ccx-page .ccx-uh-hero-media .ccx-uh-col:last-child{display:none;}}

/* ============================================================
   INTRODUCTION
   ============================================================ */
#ccx-page .ccx-uh-intro{padding:88px 0 40px; text-align:center;}
#ccx-page .ccx-uh-intro .ccx-section-head{margin-left:auto; margin-right:auto;}

/* ============================================================
   SEARCH / FILTER
   ============================================================ */
#ccx-page .ccx-uh-search-bar{
  display:flex; flex-wrap:wrap; align-items:center; gap:14px; justify-content:space-between;
  background:#fff; border:1px solid var(--ccx-paper-dim); border-radius:var(--ccx-radius-m);
  padding:18px 22px; box-shadow:var(--ccx-shadow-s); margin-bottom:44px;
}
#ccx-page .ccx-uh-search-input{
  flex:1 1 240px; display:flex; align-items:center; gap:10px; border:1.5px solid var(--ccx-paper-dim);
  border-radius:999px; padding:10px 18px; background:var(--ccx-paper);
}
#ccx-page .ccx-uh-search-input svg{color:var(--ccx-ink-soft); flex-shrink:0;}
#ccx-page .ccx-uh-search-input input{
  border:none; outline:none; background:transparent; font-family:inherit; font-size:14px; color:var(--ccx-ink); width:100%;
}
#ccx-page .ccx-uh-filters{display:flex; flex-wrap:wrap; gap:8px;}
#ccx-page .ccx-uh-filter-btn{
  padding:9px 16px; border-radius:999px; font-size:13px; font-weight:600; color:var(--ccx-navy-800);
  background:var(--ccx-paper); border:1.5px solid transparent; transition:background .2s ease, color .2s ease, border-color .2s ease;
}
#ccx-page .ccx-uh-filter-btn:hover{border-color:var(--ccx-gold);}
#ccx-page .ccx-uh-filter-btn.ccx-active{background:var(--ccx-navy-900); color:#fff;}
#ccx-page .ccx-uh-empty{display:none; text-align:center; padding:60px 20px; color:var(--ccx-ink-soft); font-size:15px;}
#ccx-page .ccx-uh-empty.ccx-show{display:block;}

/* ============================================================
   UNIVERSITY GRID / CARDS
   ============================================================ */
#ccx-page .ccx-uh-grid-section{padding:0 0 100px;}
#ccx-page .ccx-uh-grid{display:grid; grid-template-columns:repeat(3, 1fr); gap:28px;}
#ccx-page .ccx-uh-card{
  position:relative; border-radius:var(--ccx-radius-l); overflow:hidden; background:#fff;
  border:1px solid var(--ccx-paper-dim); box-shadow:var(--ccx-shadow-s);
  transition:transform .35s cubic-bezier(.2,.8,.2,1), box-shadow .35s ease, border-color .35s ease;
  display:flex; flex-direction:column;
}
#ccx-page .ccx-uh-card:hover{transform:translateY(-7px); box-shadow:var(--ccx-shadow-l); border-color:transparent;}
#ccx-page .ccx-uh-card:focus-within{box-shadow:var(--ccx-shadow-l);}
#ccx-page .ccx-uh-card-top{
  position:relative; padding:34px 26px 22px; display:flex; align-items:center; gap:16px;
  background:var(--ccx-navy-900);
}
#ccx-page .ccx-uh-card-top::after{
  content:""; position:absolute; left:0; right:0; bottom:0; height:4px; background:var(--ccx-uh-accent, var(--ccx-gold));
}
#ccx-page .ccx-uh-logo-tile{
  width:64px; height:64px; border-radius:14px; background:#fff; flex-shrink:0;
  display:flex; align-items:center; justify-content:center; padding:10px; box-shadow:var(--ccx-shadow-s);
}
#ccx-page .ccx-uh-logo-tile img{width:100%; height:100%; object-fit:contain;}
#ccx-page .ccx-uh-logo-tile.ccx-uh-mono{
  background:linear-gradient(150deg, var(--ccx-uh-accent, var(--ccx-gold)), var(--ccx-navy-950));
  font-family:var(--ccx-font-display); font-weight:700; font-size:18px; color:#fff;
}
#ccx-page .ccx-uh-card-top-text{color:#fff;}
#ccx-page .ccx-uh-shortname{font-family:var(--ccx-font-mono); font-size:11px; letter-spacing:0.08em; text-transform:uppercase; color:var(--ccx-uh-accent, var(--ccx-gold-bright));}
#ccx-page .ccx-uh-location{font-size:12.5px; color:rgba(255,255,255,0.6); margin-top:4px;}

#ccx-page .ccx-uh-card-body{padding:24px 26px 28px; display:flex; flex-direction:column; flex:1;}
#ccx-page .ccx-uh-card-body h3{font-family:var(--ccx-font-display); font-size:20px; font-weight:600; color:var(--ccx-navy-900); margin-bottom:10px; line-height:1.3;}
#ccx-page .ccx-uh-card-body p{font-size:14px; line-height:1.65; color:var(--ccx-ink-soft); margin-bottom:18px;}
#ccx-page .ccx-uh-tags{display:flex; flex-wrap:wrap; gap:7px; margin-bottom:22px;}
#ccx-page .ccx-uh-tag{
  font-size:11.5px; font-weight:600; color:var(--ccx-navy-800); background:var(--ccx-paper);
  border-radius:999px; padding:5px 12px;
}
#ccx-page .ccx-uh-card-cta{
  margin-top:auto; display:inline-flex; align-items:center; gap:9px; font-size:13.5px; font-weight:700;
  color:var(--ccx-teal); align-self:flex-start;
}
#ccx-page .ccx-uh-card-cta:hover{color:var(--ccx-teal-bright);}
#ccx-page .ccx-uh-card-cta .ccx-arrow{transition:transform .3s ease;}
#ccx-page .ccx-uh-card:hover .ccx-uh-card-cta .ccx-arrow{transform:translateX(6px);}

@media (max-width:1024px){#ccx-page .ccx-uh-grid{grid-template-columns:repeat(2,1fr);}}
@media (max-width:640px){#ccx-page .ccx-uh-grid{grid-template-columns:1fr;}}

/* ============================================================
   EXPLORE DIFFERENT ACADEMIC PATHS
   ============================================================ */
#ccx-page .ccx-uh-paths{padding:100px 0; background:var(--ccx-navy-950);}
#ccx-page .ccx-uh-paths .ccx-section-head h2, #ccx-page .ccx-uh-paths .ccx-eyebrow{color:#fff;}
#ccx-page .ccx-uh-paths .ccx-section-head p{color:rgba(255,255,255,0.62);}
#ccx-page .ccx-uh-paths-grid{display:grid; grid-template-columns:repeat(3,1fr); gap:1px; background:rgba(255,255,255,0.09); border-radius:var(--ccx-radius-l); overflow:hidden; margin-bottom:36px;}
#ccx-page .ccx-uh-path-card{background:var(--ccx-navy-900); padding:32px 26px; transition:background .3s ease;}
#ccx-page .ccx-uh-path-card:hover{background:var(--ccx-navy-800);}
#ccx-page .ccx-uh-path-card h3{font-family:var(--ccx-font-display); font-size:17px; font-weight:600; color:#fff; margin-bottom:8px;}
#ccx-page .ccx-uh-path-card p{font-size:13px; line-height:1.6; color:rgba(255,255,255,0.6);}
#ccx-page .ccx-uh-paths-cta{text-align:center;}
@media (max-width:900px){#ccx-page .ccx-uh-paths-grid{grid-template-columns:repeat(2,1fr);}}
@media (max-width:560px){#ccx-page .ccx-uh-paths-grid{grid-template-columns:1fr;}}

/* ============================================================
   NOT SURE WHERE TO START
   ============================================================ */
#ccx-page .ccx-uh-guide{padding:100px 0;}
#ccx-page .ccx-uh-guide-grid{display:grid; grid-template-columns:repeat(3,1fr); gap:24px;}
#ccx-page .ccx-uh-guide-card{
  background:#fff; border:1px solid var(--ccx-paper-dim); border-radius:var(--ccx-radius-m); padding:32px 26px;
  text-align:center; display:flex; flex-direction:column; align-items:center; transition:transform .3s ease, box-shadow .3s ease;
}
#ccx-page .ccx-uh-guide-card:hover{transform:translateY(-6px); box-shadow:var(--ccx-shadow-m);}
#ccx-page .ccx-uh-guide-num{
  width:48px; height:48px; border-radius:50%; background:var(--ccx-navy-900); color:var(--ccx-gold-bright);
  display:flex; align-items:center; justify-content:center; font-family:var(--ccx-font-mono); font-weight:600; font-size:14px;
  margin-bottom:18px;
}
#ccx-page .ccx-uh-guide-card h3{font-family:var(--ccx-font-display); font-size:18px; font-weight:600; color:var(--ccx-navy-900); margin-bottom:20px; line-height:1.35;}
@media (max-width:900px){#ccx-page .ccx-uh-guide-grid{grid-template-columns:1fr;}}

/* ============================================================
   STUDENT JOURNEY
   ============================================================ */
#ccx-page .ccx-uh-journey{padding:100px 0; background:var(--ccx-paper-dim);}
#ccx-page .ccx-uh-journey-grid{display:grid; grid-template-columns:repeat(4,1fr); gap:22px; position:relative;}
#ccx-page .ccx-uh-journey-step{background:#fff; border-radius:var(--ccx-radius-m); padding:28px 22px; box-shadow:var(--ccx-shadow-s); position:relative;}
#ccx-page .ccx-uh-journey-num{
  font-family:var(--ccx-font-display); font-weight:600; font-size:30px; color:var(--ccx-gold); margin-bottom:14px; display:block;
}
#ccx-page .ccx-uh-journey-step h3{font-family:var(--ccx-font-display); font-size:16.5px; font-weight:600; color:var(--ccx-navy-900); margin-bottom:8px;}
#ccx-page .ccx-uh-journey-step a{font-size:12.5px; font-weight:700; color:var(--ccx-teal); display:inline-flex; align-items:center; gap:6px; margin-top:4px;}
#ccx-page .ccx-uh-journey-step a:hover{color:var(--ccx-teal-bright);}
@media (max-width:900px){#ccx-page .ccx-uh-journey-grid{grid-template-columns:repeat(2,1fr);}}
@media (max-width:520px){#ccx-page .ccx-uh-journey-grid{grid-template-columns:1fr;}}

/* ============================================================
   LEAD GENERATION CTA
   ============================================================ */
#ccx-page .ccx-uh-lead-cta{padding:120px 0; text-align:center; background:linear-gradient(135deg, var(--ccx-navy-950), var(--ccx-navy-800));}
#ccx-page .ccx-uh-lead-cta h2{font-family:var(--ccx-font-display); font-weight:600; color:#fff; font-size:clamp(28px,4vw,44px); margin-bottom:18px; letter-spacing:-0.01em;}
#ccx-page .ccx-uh-lead-cta p{color:rgba(255,255,255,0.72); font-size:16px; max-width:52ch; margin:0 auto 34px; line-height:1.65;}

/* ============================================================
   FOOTER — identical to marketing index/about pages
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
   WHATSAPP FLOAT — identical to marketing index/about pages
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
   ADMISSION INQUIRY MODAL — identical to marketing index/about pages
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
     HEADER (identical to marketing index/about pages; "Universities" active)
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
      <a href="/universities" class="ccx-nav-active" aria-current="page">Universities</a>
      <a href="/programs">Programs</a>
      <a href="/#ccx-why">Why Choose Us</a>
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
    <a href="/universities" class="ccx-nav-active" aria-current="page">Universities</a>
    <a href="/programs">Programs</a>
    <a href="/#ccx-why">Why Choose Us</a>
    <a href="/admissions">Admissions</a>
    <a href="/#ccx-contact">Contact</a>
  </nav>
  <a href="#" class="ccx-btn ccx-btn-gold ccx-btn-block ccx-admission-trigger">Admission Now</a>
</div>

<!-- ============================================================
     HERO
     ============================================================ -->
<section class="ccx-uh-hero">
  <div class="ccx-uh-hero-media">
    <div class="ccx-uh-col">
      <img src="https://ucp.edu.pk/wp-content/uploads/2025/06/01.webp" alt="University campus building">
    </div>
    <div class="ccx-uh-col">
      <img src="https://tmuc.edu.pk/wp-content/uploads/2019/10/Campus-tmuc-nationwide.jpg" alt="Students studying together">
      <img src="https://bims.edu.pk/public/uploads/slider/homepage-hero-01-campus-wide-optimized.jpg" alt="Students collaborating in a classroom">
    </div>
  </div>
  <div class="ccx-container ccx-uh-hero-content">
    <p class="ccx-eyebrow ccx-on-dark">Our Universities</p>
    <h1>Explore Our Universities</h1>
    <p class="ccx-uh-hero-sub">Discover six university destinations offering diverse academic opportunities, learning environments, and pathways for your future.</p>
    <div class="ccx-uh-hero-actions">
      <a href="/programs" class="ccx-btn ccx-btn-gold">Explore Programs</a>
      <a href="/admissions" class="ccx-btn ccx-btn-outline">Start Your Journey</a>
    </div>
  </div>
</section>

<!-- ============================================================
     INTRODUCTION
     ============================================================ -->
<section class="ccx-uh-intro">
  <div class="ccx-container">
    <div class="ccx-section-head ccx-center ccx-reveal">
      <p class="ccx-eyebrow" style="margin-left:auto; margin-right:auto; justify-content:center;">Find Your Fit</p>
      <h2>Find the University That Fits Your Future</h2>
      <p>Every student has different ambitions. Explore our university network and discover institutions offering different academic fields, learning environments, and student experiences.</p>
    </div>
  </div>
</section>

<!-- ============================================================
     SEARCH / FILTER + UNIVERSITY GRID
     ============================================================ -->
<section class="ccx-uh-grid-section" id="ccx-uh-grid-section">
  <div class="ccx-container">

    <div class="ccx-uh-search-bar ccx-reveal">
      <div class="ccx-uh-search-input">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="7"/><path d="M21 21l-4.35-4.35"/></svg>
        <input type="text" id="ccx-uh-search" placeholder="Search by university name..." aria-label="Search universities by name">
      </div>
      <div class="ccx-uh-filters" id="ccx-uh-filters" role="group" aria-label="Filter universities by academic area">
        <button type="button" class="ccx-uh-filter-btn ccx-active" data-ccx-filter="all">All</button>
        <button type="button" class="ccx-uh-filter-btn" data-ccx-filter="business">Business</button>
        <button type="button" class="ccx-uh-filter-btn" data-ccx-filter="computing">Computing</button>
        <button type="button" class="ccx-uh-filter-btn" data-ccx-filter="engineering">Engineering</button>
        <button type="button" class="ccx-uh-filter-btn" data-ccx-filter="languages">Languages</button>
        <button type="button" class="ccx-uh-filter-btn" data-ccx-filter="professional">Professional Studies</button>
      </div>
    </div>

    <!-- University logos below are hotlinked directly from each university's
         own official asset path where available. -->
    <div class="ccx-uh-grid" id="ccx-uh-grid">

      <a href="/ucp" class="ccx-uh-card ccx-reveal" style="--ccx-uh-accent:#F0B429;" data-ccx-name="university of central punjab ucp" data-ccx-tags="business computing engineering languages">
        <div class="ccx-uh-card-top">
          <div class="ccx-uh-logo-tile">
            <img src="https://ucp.edu.pk/inc/uploads/2019/06/ucp-sticky-logo-white-1.png" alt="University of Central Punjab logo">
          </div>
          <div class="ccx-uh-card-top-text">
            <p class="ccx-uh-shortname">UCP</p>
            <p class="ccx-uh-location">Lahore, Punjab</p>
          </div>
        </div>
        <div class="ccx-uh-card-body">
          <h3>University of Central Punjab</h3>
          <p>Explore a broad range of academic opportunities within a modern university environment.</p>
          <div class="ccx-uh-tags">
            <span class="ccx-uh-tag">Business</span>
            <span class="ccx-uh-tag">Computing</span>
            <span class="ccx-uh-tag">Engineering</span>
          </div>
          <span class="ccx-uh-card-cta">Explore UCP <span class="ccx-arrow">→</span></span>
        </div>
      </a>

      <a href="/bims" class="ccx-uh-card ccx-reveal" style="--ccx-uh-accent:#227A46;" data-ccx-name="barani institute of management sciences bims" data-ccx-tags="business computing professional">
        <div class="ccx-uh-card-top">
          <div class="ccx-uh-logo-tile ccx-uh-mono" aria-hidden="true">BIMS</div>
          <div class="ccx-uh-card-top-text">
            <p class="ccx-uh-shortname">BIMS</p>
            <p class="ccx-uh-location">Rawalpindi, Punjab</p>
          </div>
        </div>
        <div class="ccx-uh-card-body">
          <h3>Barani Institute of Management &amp; Sciences (BIMS)</h3>
          <p>Discover professional and academic pathways designed to support students in building their future.</p>
          <div class="ccx-uh-tags">
            <span class="ccx-uh-tag">Business</span>
            <span class="ccx-uh-tag">Computing</span>
            <span class="ccx-uh-tag">Professional Studies</span>
          </div>
          <span class="ccx-uh-card-cta">Explore BIMS <span class="ccx-arrow">→</span></span>
        </div>
      </a>

      <a href="/uor" class="ccx-uh-card ccx-reveal" style="--ccx-uh-accent:#D42A2A;" data-ccx-name="university of rawalpindi uor" data-ccx-tags="business computing professional">
        <div class="ccx-uh-card-top">
          <div class="ccx-uh-logo-tile">
            <img src="https://www.uor.edu.pk/frontend/academics/img/logo-primary.png" alt="University of Rawalpindi logo">
          </div>
          <div class="ccx-uh-card-top-text">
            <p class="ccx-uh-shortname">UOR</p>
            <p class="ccx-uh-location">Rawalpindi, Punjab</p>
          </div>
        </div>
        <div class="ccx-uh-card-body">
          <h3>University of Rawalpindi</h3>
          <p>Explore academic opportunities and a student-focused learning environment.</p>
          <div class="ccx-uh-tags">
            <span class="ccx-uh-tag">Business</span>
            <span class="ccx-uh-tag">Computing</span>
            <span class="ccx-uh-tag">Design</span>
          </div>
          <span class="ccx-uh-card-cta">Explore UOR <span class="ccx-arrow">→</span></span>
        </div>
      </a>

      <a href="/numl" class="ccx-uh-card ccx-reveal" style="--ccx-uh-accent:#C9A227;" data-ccx-name="national university of modern languages numl" data-ccx-tags="languages engineering business">
        <div class="ccx-uh-card-top">
          <div class="ccx-uh-logo-tile">
            <img src="https://numl.edu.pk/templates/template10/images/numl_logo.png" alt="National University of Modern Languages logo">
          </div>
          <div class="ccx-uh-card-top-text">
            <p class="ccx-uh-shortname">NUML</p>
            <p class="ccx-uh-location">Islamabad</p>
          </div>
        </div>
        <div class="ccx-uh-card-body">
          <h3>National University of Modern Languages</h3>
          <p>Explore diverse academic opportunities with a strong focus on languages, communication, and wider academic disciplines.</p>
          <div class="ccx-uh-tags">
            <span class="ccx-uh-tag">Languages</span>
            <span class="ccx-uh-tag">Engineering</span>
            <span class="ccx-uh-tag">Business</span>
          </div>
          <span class="ccx-uh-card-cta">Explore NUML <span class="ccx-arrow">→</span></span>
        </div>
      </a>

      <a href="/tmuc" class="ccx-uh-card ccx-reveal" style="--ccx-uh-accent:#E11B2C;" data-ccx-name="the millennium universal college tmuc" data-ccx-tags="business computing professional engineering">
        <div class="ccx-uh-card-top">
          <div class="ccx-uh-logo-tile">
            <img src="https://tmuc.edu.pk/wp-content/uploads/2019/10/Tmuc-logo.png" alt="The Millennium Universal College logo">
          </div>
          <div class="ccx-uh-card-top-text">
            <p class="ccx-uh-shortname">TMUC</p>
            <p class="ccx-uh-location">Islamabad</p>
          </div>
        </div>
        <div class="ccx-uh-card-body">
          <h3>The Millennium Universal College (TMUC)</h3>
          <p>Discover modern academic and professional pathways in an internationally oriented learning environment.</p>
          <div class="ccx-uh-tags">
            <span class="ccx-uh-tag">Business</span>
            <span class="ccx-uh-tag">Computing</span>
            <span class="ccx-uh-tag">Professional Studies</span>
          </div>
          <span class="ccx-uh-card-cta">Explore TMUC <span class="ccx-arrow">→</span></span>
        </div>
      </a>

      <a href="/bahria" class="ccx-uh-card ccx-reveal" style="--ccx-uh-accent:#B08D3E;" data-ccx-name="bahria university" data-ccx-tags="engineering business computing">
        <div class="ccx-uh-card-top">
          <div class="ccx-uh-logo-tile">
            <img src="https://www.bahria.edu.pk/Content/images/bu_logo_small_1.png" alt="Bahria University logo">
          </div>
          <div class="ccx-uh-card-top-text">
            <p class="ccx-uh-shortname">Bahria</p>
            <p class="ccx-uh-location">Islamabad · Karachi · Lahore</p>
          </div>
        </div>
        <div class="ccx-uh-card-body">
          <h3>Bahria University</h3>
          <p>Explore a wide range of academic opportunities across different disciplines and campuses.</p>
          <div class="ccx-uh-tags">
            <span class="ccx-uh-tag">Engineering</span>
            <span class="ccx-uh-tag">Business</span>
            <span class="ccx-uh-tag">Computing</span>
          </div>
          <span class="ccx-uh-card-cta">Explore Bahria <span class="ccx-arrow">→</span></span>
        </div>
      </a>

    </div>

    <p class="ccx-uh-empty" id="ccx-uh-empty">No universities match your search. Try a different name or filter.</p>
  </div>
</section>

<!-- ============================================================
     EXPLORE DIFFERENT ACADEMIC PATHS
     ============================================================ -->
<section class="ccx-uh-paths">
  <div class="ccx-container">
    <div class="ccx-section-head ccx-reveal">
      <p class="ccx-eyebrow ccx-on-dark">Academic Areas</p>
      <h2>Explore Different Academic Paths</h2>
      <p>A general look at broad study areas across the network — not every university offers every area; explore each university's page to confirm what's available.</p>
    </div>

    <div class="ccx-uh-paths-grid ccx-reveal">
      <div class="ccx-uh-path-card"><h3>Business</h3><p>Management, finance and administration programs.</p></div>
      <div class="ccx-uh-path-card"><h3>Computing &amp; Technology</h3><p>Computer science, software engineering and IT.</p></div>
      <div class="ccx-uh-path-card"><h3>Engineering</h3><p>Engineering disciplines across several campuses.</p></div>
      <div class="ccx-uh-path-card"><h3>Languages &amp; Communication</h3><p>Language education, media and communication studies.</p></div>
      <div class="ccx-uh-path-card"><h3>Social Sciences</h3><p>Humanities, social sciences and education.</p></div>
      <div class="ccx-uh-path-card"><h3>Professional Studies</h3><p>Law, accountancy and other professional qualifications.</p></div>
    </div>

    <div class="ccx-uh-paths-cta ccx-reveal">
      <a href="/programs" class="ccx-btn ccx-btn-gold">View All Programs</a>
    </div>
  </div>
</section>

<!-- ============================================================
     NOT SURE WHERE TO START
     ============================================================ -->
<section class="ccx-uh-guide">
  <div class="ccx-container">
    <div class="ccx-section-head ccx-center ccx-reveal">
      <p class="ccx-eyebrow" style="margin-left:auto; margin-right:auto; justify-content:center;">Getting Started</p>
      <h2>Not Sure Where To Start?</h2>
    </div>

    <div class="ccx-uh-guide-grid ccx-reveal">
      <div class="ccx-uh-guide-card">
        <span class="ccx-uh-guide-num">01</span>
        <h3>I Know What I Want To Study</h3>
        <a href="/programs" class="ccx-btn ccx-btn-outline-dark ccx-btn-sm">Explore Programs</a>
      </div>
      <div class="ccx-uh-guide-card">
        <span class="ccx-uh-guide-num">02</span>
        <h3>I Want To Compare Universities</h3>
        <a href="#ccx-uh-grid-section" class="ccx-btn ccx-btn-outline-dark ccx-btn-sm">View Universities</a>
      </div>
      <div class="ccx-uh-guide-card">
        <span class="ccx-uh-guide-num">03</span>
        <h3>I Need Help Choosing</h3>
        <a href="/#ccx-contact" class="ccx-btn ccx-btn-outline-dark ccx-btn-sm">Contact Us</a>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     STUDENT JOURNEY
     ============================================================ -->
<section class="ccx-uh-journey">
  <div class="ccx-container">
    <div class="ccx-section-head ccx-center ccx-reveal">
      <p class="ccx-eyebrow" style="margin-left:auto; margin-right:auto; justify-content:center;">The Journey</p>
      <h2>From Exploration To Enrollment</h2>
    </div>

    <div class="ccx-uh-journey-grid ccx-reveal">
      <div class="ccx-uh-journey-step">
        <span class="ccx-uh-journey-num">01</span>
        <h3>Explore Universities</h3>
        <a href="#ccx-uh-grid-section">Browse the network →</a>
      </div>
      <div class="ccx-uh-journey-step">
        <span class="ccx-uh-journey-num">02</span>
        <h3>Find Your Program</h3>
        <a href="/programs">See programs →</a>
      </div>
      <div class="ccx-uh-journey-step">
        <span class="ccx-uh-journey-num">03</span>
        <h3>Learn About Admissions</h3>
        <a href="/admissions">Admissions info →</a>
      </div>
      <div class="ccx-uh-journey-step">
        <span class="ccx-uh-journey-num">04</span>
        <h3>Take The Next Step</h3>
        <a href="#" class="ccx-admission-trigger">Get information →</a>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     LEAD GENERATION CTA
     ============================================================ -->
<section class="ccx-uh-lead-cta">
  <div class="ccx-container">
    <p class="ccx-eyebrow ccx-on-dark" style="justify-content:center;">We Can Help</p>
    <h2>Need Help Finding The Right University?</h2>
    <p>Tell us what you're looking for and our team can help you explore your options.</p>
    <a href="#" class="ccx-btn ccx-btn-gold ccx-admission-trigger">Get Information</a>
  </div>
</section>

<!-- ============================================================
     FOOTER (identical to marketing index/about pages)
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
          <li><a href="/#ccx-why">Why Choose Us</a></li>
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
     WHATSAPP FLOAT (identical to marketing index/about pages)
     ============================================================ -->
<a href="#" class="ccx-whatsapp-float" id="ccx-whatsapp-float" aria-label="Chat with us on WhatsApp">
  <span class="ccx-wa-tooltip" role="tooltip">Chat with us on WhatsApp</span>
  <svg width="30" height="30" viewBox="0 0 24 24" fill="#fff"><path d="M17.6 6.32A8.86 8.86 0 0012.05 4a8.94 8.94 0 00-7.74 13.4L3 21l3.7-1.28a8.9 8.9 0 004.34 1.12h.01A8.94 8.94 0 0021 12.32a8.87 8.87 0 00-3.4-6zM12.05 19.6a7.4 7.4 0 01-3.78-1.04l-.27-.16-2.8.97.94-2.73-.18-.28a7.44 7.44 0 01-1.15-3.98 7.4 7.4 0 0112.65-5.25 7.36 7.36 0 012.17 5.25 7.4 7.4 0 01-7.58 7.22zm4.08-5.55c-.22-.11-1.31-.65-1.51-.72-.2-.07-.35-.11-.5.11-.15.22-.57.72-.7.87-.13.15-.26.16-.48.05a6.1 6.1 0 01-1.8-1.11 6.8 6.8 0 01-1.24-1.55c-.13-.22 0-.34.1-.45.1-.1.22-.26.33-.39.11-.13.15-.22.22-.37.07-.15.04-.28-.02-.39-.06-.11-.5-1.21-.69-1.66-.18-.43-.36-.37-.5-.38h-.43c-.15 0-.39.06-.6.28-.2.22-.79.77-.79 1.87 0 1.1.81 2.16.92 2.31.11.15 1.6 2.44 3.87 3.42.54.23.96.37 1.29.48.54.17 1.03.15 1.42.09.43-.06 1.31-.53 1.5-1.05.18-.51.18-.95.13-1.05-.06-.1-.2-.15-.42-.26z"/></svg>
</a>

<!-- ============================================================
     ADMISSION INQUIRY MODAL (identical to marketing index/about pages)
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
   Same namespaced IIFE pattern as the marketing index/about pages.
   ============================================================ */
var ccxUniversitiesPage = (function(){
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
    ccxSetupSearchAndFilter();
  }

  /* ---------- SEARCH + FILTER ---------- */
  function ccxSetupSearchAndFilter(){
    var searchInput = document.getElementById("ccx-uh-search");
    var filterBtns = document.querySelectorAll("#ccx-uh-filters .ccx-uh-filter-btn");
    var cards = document.querySelectorAll("#ccx-uh-grid .ccx-uh-card");
    var emptyState = document.getElementById("ccx-uh-empty");
    if(!searchInput || !cards.length) return;

    var activeFilter = "all";

    function applyFilters(){
      var query = searchInput.value.trim().toLowerCase();
      var visibleCount = 0;

      cards.forEach(function(card){
        var name = card.getAttribute("data-ccx-name") || "";
        var tags = card.getAttribute("data-ccx-tags") || "";
        var matchesQuery = !query || name.indexOf(query) !== -1;
        var matchesFilter = activeFilter === "all" || tags.indexOf(activeFilter) !== -1;
        var show = matchesQuery && matchesFilter;
        card.style.display = show ? "" : "none";
        if(show) visibleCount++;
      });

      if(emptyState) emptyState.classList.toggle("ccx-show", visibleCount === 0);
    }

    searchInput.addEventListener("input", applyFilters);

    filterBtns.forEach(function(btn){
      btn.addEventListener("click", function(){
        filterBtns.forEach(function(b){ b.classList.remove("ccx-active"); });
        btn.classList.add("ccx-active");
        activeFilter = btn.getAttribute("data-ccx-filter") || "all";
        applyFilters();
      });
    });
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
  document.addEventListener("DOMContentLoaded", ccxUniversitiesPage.init);
} else {
  ccxUniversitiesPage.init();
}
</script>

<?php wp_footer(); ?>
</body>
</html>
