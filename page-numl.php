<?php
/**
 * Template Name: EduApply — NUML
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>National University of Modern Languages (NUML)</title>
<meta name="description" content="National University of Modern Languages (NUML) — a public sector university in Islamabad with regional campuses across Pakistan, known for its language faculties and broad academic programs." />

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

#numl-page .numl-eyebrow{
  font-family:var(--numl-font-body); font-size:12px; font-weight:700; letter-spacing:0.1em; text-transform:uppercase;
  color:var(--numl-maroon-800); margin-bottom:10px;
}
#numl-page .numl-section-title{
  font-family:var(--numl-font-display); font-weight:700; font-size:clamp(23px,2.8vw,32px); color:var(--numl-maroon-900);
  line-height:1.25;
}
#numl-page .numl-section-sub{margin-top:10px; font-size:14.5px; color:var(--numl-ink-soft); line-height:1.6; max-width:64ch;}
#numl-page .numl-section-head{margin-bottom:34px;}
#numl-page .numl-section-head.numl-center{text-align:center; max-width:640px; margin-left:auto; margin-right:auto;}

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

/* ============================================================
   TOP UTILITY BAR
   ============================================================ */
#numl-page .numl-topbar{background:var(--numl-maroon-950); padding:7px 0; font-size:11.5px;}
#numl-page .numl-topbar .numl-container{display:flex; align-items:center; justify-content:space-between; gap:16px; flex-wrap:wrap;}
#numl-page .numl-topbar-links{display:flex; gap:16px; flex-wrap:wrap;}
#numl-page .numl-topbar a{color:rgba(255,255,255,0.75); font-weight:600;}
#numl-page .numl-topbar a:hover{color:var(--numl-gold-bright);}
#numl-page .numl-topbar-social{display:flex; gap:10px;}
#numl-page .numl-topbar-social a{width:22px; height:22px; display:flex; align-items:center; justify-content:center; color:rgba(255,255,255,0.75);}
#numl-page .numl-topbar-social a:hover{color:var(--numl-gold-bright);}
@media (max-width:900px){#numl-page .numl-topbar-links{display:none;}}

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

/* ============================================================
   HERO
   ============================================================ */
#numl-page .numl-hero{position:relative; min-height:560px; display:flex; align-items:flex-end; overflow:hidden; background:var(--numl-maroon-950);}
#numl-page .numl-hero-media{position:absolute; inset:0;}
#numl-page .numl-hero-media video, #numl-page .numl-hero-media img{width:100%; height:100%; object-fit:cover; position:absolute; inset:0;}
#numl-page .numl-hero-media::after{
  content:""; position:absolute; inset:0;
  background:linear-gradient(0deg, rgba(59,12,20,0.94) 0%, rgba(59,12,20,0.6) 55%, rgba(59,12,20,0.35) 100%);
}
#numl-page .numl-hero-content{position:relative; z-index:1; padding:74px 0 46px;}
#numl-page .numl-hero h1{
  font-family:var(--numl-font-display); font-weight:700; color:#fff;
  font-size:clamp(28px,4.4vw,46px); line-height:1.2; max-width:20ch;
}
#numl-page .numl-hero h1 .numl-accent{color:var(--numl-gold-bright);}
#numl-page .numl-hero-sub{margin-top:16px; font-size:15px; line-height:1.6; color:rgba(255,255,255,0.8); max-width:56ch;}

#numl-page .numl-quicklinks-strip{position:relative; z-index:1; background:var(--numl-maroon-900); border-top:1px solid rgba(255,255,255,0.1);}
#numl-page .numl-quicklinks-strip .numl-container{display:flex; flex-wrap:wrap; gap:2px 0;}
#numl-page .numl-quicklinks-strip a{
  padding:13px 18px; font-size:12.5px; font-weight:700; color:#fff; letter-spacing:0.02em;
  border-right:1px solid rgba(255,255,255,0.12); transition:background .2s ease, color .2s ease;
}
#numl-page .numl-quicklinks-strip a:hover{background:var(--numl-gold); color:var(--numl-maroon-950);}
@media (max-width:760px){#numl-page .numl-quicklinks-strip a{flex:1 1 50%; text-align:center; border-bottom:1px solid rgba(255,255,255,0.12);}}

/* ============================================================
   IMPORTANT NEWS TICKER
   ============================================================ */
#numl-page .numl-ticker{background:var(--numl-gold); color:var(--numl-maroon-950); padding:11px 0; overflow:hidden;}
#numl-page .numl-ticker .numl-container{display:flex; align-items:center; gap:14px;}
#numl-page .numl-ticker-label{
  flex-shrink:0; font-size:11.5px; font-weight:800; text-transform:uppercase; letter-spacing:0.05em;
  background:var(--numl-maroon-950); color:#fff; padding:5px 12px; border-radius:3px;
}
#numl-page .numl-ticker-text{font-size:13px; font-weight:600; line-height:1.5;}

/* ============================================================
   WHY STUDY AT NUML — RANKINGS
   ============================================================ */
#numl-page .numl-rankings{padding:70px 0 20px;}
#numl-page .numl-rankings-grid{display:grid; grid-template-columns:repeat(4,1fr); gap:18px;}
#numl-page .numl-rank-card{
  background:var(--numl-paper); border-radius:12px; padding:26px 22px; text-align:center;
  border:1px solid var(--numl-paper-dim); transition:transform .3s ease, box-shadow .3s ease;
}
#numl-page .numl-rank-card:hover{transform:translateY(-5px); box-shadow:var(--numl-shadow-m);}
#numl-page .numl-rank-num{font-family:var(--numl-font-display); font-weight:700; font-size:clamp(24px,3vw,32px); color:var(--numl-maroon-900);}
#numl-page .numl-rank-label{font-size:12px; font-weight:600; color:var(--numl-ink-soft); margin-top:8px; line-height:1.4;}
@media (max-width:900px){#numl-page .numl-rankings-grid{grid-template-columns:repeat(2,1fr);}}
@media (max-width:480px){#numl-page .numl-rankings-grid{grid-template-columns:1fr;}}

#numl-page .numl-stats{padding:44px 0 70px;}
#numl-page .numl-stats-grid{display:grid; grid-template-columns:repeat(4,1fr); gap:20px; text-align:center; border-top:1px solid var(--numl-paper-dim); border-bottom:1px solid var(--numl-paper-dim); padding:36px 0;}
#numl-page .numl-stat-num{font-family:var(--numl-font-display); font-weight:700; font-size:clamp(30px,3.6vw,42px); color:var(--numl-maroon-900);}
#numl-page .numl-stat-label{font-size:13px; font-weight:600; color:var(--numl-ink-soft); margin-top:6px;}
@media (max-width:760px){#numl-page .numl-stats-grid{grid-template-columns:repeat(2,1fr); row-gap:26px;}}

/* ============================================================
   LEADERSHIP MESSAGES
   ============================================================ */
#numl-page .numl-leadership{padding:20px 0 76px;}
#numl-page .numl-leadership-grid{display:grid; grid-template-columns:repeat(3,1fr); gap:24px;}
#numl-page .numl-leader-card{background:var(--numl-paper); border-radius:14px; padding:28px 24px; display:flex; flex-direction:column; height:100%;}
#numl-page .numl-leader-portrait{width:64px; height:64px; border-radius:50%; overflow:hidden; margin-bottom:16px; box-shadow:var(--numl-shadow-s); flex-shrink:0;}
#numl-page .numl-leader-portrait img{width:100%; height:100%; object-fit:cover;}
#numl-page .numl-leader-portrait.numl-avatar{
  background:linear-gradient(150deg, var(--numl-maroon-800), var(--numl-maroon-950));
  display:flex; align-items:center; justify-content:center; color:var(--numl-gold-bright);
  font-family:var(--numl-font-display); font-weight:700; font-size:20px;
}
#numl-page .numl-leader-card p{font-size:13.5px; line-height:1.65; color:var(--numl-ink-soft); flex:1; margin-bottom:16px;}
#numl-page .numl-leader-name{font-weight:700; font-size:13.5px; color:var(--numl-maroon-900); margin-bottom:10px;}
#numl-page .numl-leader-more{font-size:12.5px; font-weight:700; color:var(--numl-maroon-800);}
#numl-page .numl-leader-more:hover{color:var(--numl-gold);}
@media (max-width:900px){#numl-page .numl-leadership-grid{grid-template-columns:1fr;}}

/* ============================================================
   EXPLORE NUML — PROGRAM LEVELS
   ============================================================ */
#numl-page .numl-explore{padding:76px 0; background:var(--numl-maroon-950); color:#fff;}
#numl-page .numl-explore .numl-section-head h2, #numl-page .numl-explore .numl-eyebrow{color:#fff;}
#numl-page .numl-explore .numl-section-head p{color:rgba(255,255,255,0.62);}
#numl-page .numl-explore .numl-eyebrow{color:var(--numl-gold-bright);}
#numl-page .numl-explore-grid{display:grid; grid-template-columns:repeat(5,1fr); gap:1px; background:rgba(255,255,255,0.1); border-radius:12px; overflow:hidden;}
#numl-page .numl-explore-card{background:var(--numl-maroon-900); padding:30px 22px; transition:background .25s ease;}
#numl-page .numl-explore-card:hover{background:var(--numl-maroon-800);}
#numl-page .numl-explore-tag{font-size:10.5px; font-weight:700; letter-spacing:0.06em; text-transform:uppercase; color:var(--numl-gold-bright); margin-bottom:10px;}
#numl-page .numl-explore-card h3{font-family:var(--numl-font-display); font-size:16px; font-weight:700; margin-bottom:10px; line-height:1.3;}
#numl-page .numl-explore-card p{font-size:12.5px; line-height:1.55; color:rgba(255,255,255,0.65);}
@media (max-width:980px){#numl-page .numl-explore-grid{grid-template-columns:repeat(2,1fr);}}
@media (max-width:480px){#numl-page .numl-explore-grid{grid-template-columns:1fr;}}

/* ============================================================
   LATEST FROM NUML (events/announcements/reports/calendar)
   ============================================================ */
#numl-page .numl-latest{padding:76px 0;}
#numl-page .numl-latest-grid{display:grid; grid-template-columns:repeat(4,1fr); gap:22px;}
#numl-page .numl-latest-col{background:var(--numl-paper); border-radius:12px; padding:24px 22px; display:flex; flex-direction:column;}
#numl-page .numl-latest-col h4{
  font-family:var(--numl-font-display); font-size:13px; font-weight:700; letter-spacing:0.06em; text-transform:uppercase;
  color:var(--numl-maroon-900); border-bottom:2px solid var(--numl-gold); padding-bottom:12px; margin-bottom:16px;
}
#numl-page .numl-latest-col ul{display:flex; flex-direction:column; gap:14px; flex:1;}
#numl-page .numl-latest-col li a{display:block;}
#numl-page .numl-latest-title{font-size:13px; font-weight:600; color:var(--numl-ink); line-height:1.45; display:block;}
#numl-page .numl-latest-col li a:hover .numl-latest-title{color:var(--numl-maroon-800);}
#numl-page .numl-latest-date{font-size:11px; font-weight:600; color:var(--numl-ink-soft); margin-top:4px; display:block;}
#numl-page .numl-latest-viewall{margin-top:16px; font-size:12px; font-weight:700; color:var(--numl-maroon-800);}
#numl-page .numl-latest-viewall:hover{color:var(--numl-gold);}
@media (max-width:1080px){#numl-page .numl-latest-grid{grid-template-columns:repeat(2,1fr);}}
@media (max-width:560px){#numl-page .numl-latest-grid{grid-template-columns:1fr;}}

/* ============================================================
   GALLERY
   ============================================================ */
#numl-page .numl-gallery{padding:76px 0; background:var(--numl-paper);}
#numl-page .numl-gallery-grid{display:grid; grid-template-columns:repeat(6,1fr); gap:10px;}
#numl-page .numl-gallery-item{position:relative; border-radius:8px; overflow:hidden; aspect-ratio:1/1; box-shadow:var(--numl-shadow-s);}
#numl-page .numl-gallery-item img{width:100%; height:100%; object-fit:cover; transition:transform .5s ease;}
#numl-page .numl-gallery-item:hover img{transform:scale(1.08);}
#numl-page .numl-gallery-item.numl-wide{grid-column:span 2; grid-row:span 2;}
#numl-page .numl-gallery-actions{display:flex; gap:12px; justify-content:center; margin-top:30px; flex-wrap:wrap;}
@media (max-width:900px){#numl-page .numl-gallery-grid{grid-template-columns:repeat(3,1fr);} #numl-page .numl-gallery-item.numl-wide{grid-column:span 1; grid-row:span 1;}}
@media (max-width:480px){#numl-page .numl-gallery-grid{grid-template-columns:repeat(2,1fr);}}

/* ============================================================
   QUICK LINKS GRID
   ============================================================ */
#numl-page .numl-quicklinks-grid-section{padding:76px 0;}
#numl-page .numl-quicklinks-grid{display:grid; grid-template-columns:repeat(6,1fr); gap:10px;}
#numl-page .numl-ql-item{
  background:var(--numl-paper); border:1px solid var(--numl-paper-dim); border-radius:8px; padding:14px 12px;
  text-align:center; font-size:12px; font-weight:700; color:var(--numl-maroon-900);
  transition:background .2s ease, color .2s ease, border-color .2s ease;
}
#numl-page .numl-ql-item:hover{background:var(--numl-maroon-900); color:#fff; border-color:var(--numl-maroon-900);}
@media (max-width:900px){#numl-page .numl-quicklinks-grid{grid-template-columns:repeat(3,1fr);}}
@media (max-width:480px){#numl-page .numl-quicklinks-grid{grid-template-columns:repeat(2,1fr);}}

/* ============================================================
   CAMPUSES STRIP
   ============================================================ */
#numl-page .numl-campuses{padding:50px 0; background:var(--numl-maroon-900);}
#numl-page .numl-campuses .numl-section-head h2{color:#fff;}
#numl-page .numl-campuses-row{display:flex; flex-wrap:wrap; gap:10px; justify-content:center;}
#numl-page .numl-campuses-row a{
  padding:11px 20px; border-radius:999px; background:rgba(255,255,255,0.08); color:#fff;
  font-size:13px; font-weight:600; transition:background .2s ease;
}
#numl-page .numl-campuses-row a:hover{background:var(--numl-gold); color:var(--numl-maroon-950);}

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

#numl-page .numl-reveal{opacity:0; transform:translateY(20px); transition:opacity .6s ease, transform .6s ease;}
#numl-page .numl-reveal.numl-in{opacity:1; transform:translateY(0);}

/* ============================================================
   ADMISSION INQUIRY MODAL
   ============================================================ */
#numl-page .numl-modal-overlay{
  position:fixed; inset:0; z-index:2000; display:flex; align-items:center; justify-content:center;
  padding:20px; background:rgba(59,12,20,0.6); backdrop-filter:blur(4px);
  opacity:0; visibility:hidden; transition:opacity .25s ease, visibility .25s ease;
}
#numl-page .numl-modal-overlay.numl-modal-open{opacity:1; visibility:visible;}
#numl-page .numl-modal-panel{
  position:relative; width:100%; max-width:560px; max-height:90vh; overflow-y:auto;
  background:#fff; border-radius:14px; box-shadow:var(--numl-shadow-l);
  padding:clamp(26px,4vw,40px); transform:translateY(16px); transition:transform .25s ease;
}
#numl-page .numl-modal-overlay.numl-modal-open .numl-modal-panel{transform:translateY(0);}
#numl-page .numl-modal-close{
  position:absolute; top:16px; right:16px; width:36px; height:36px; border-radius:50%;
  background:var(--numl-paper); color:var(--numl-maroon-900); display:flex; align-items:center; justify-content:center;
  font-size:20px; line-height:1; transition:background .2s ease;
}
#numl-page .numl-modal-close:hover{background:var(--numl-paper-dim);}
#numl-page .numl-modal-header{margin-bottom:22px; padding-right:30px;}
#numl-page .numl-modal-header h3{font-family:var(--numl-font-display); font-size:clamp(19px,2.4vw,23px); font-weight:700; color:var(--numl-maroon-900);}
#numl-page .numl-modal-sub{margin-top:8px; font-size:13.5px; color:var(--numl-ink-soft); line-height:1.55;}
#numl-page .numl-modal-grid{display:grid; grid-template-columns:1fr 1fr; gap:14px 16px; margin-bottom:18px;}
#numl-page .numl-modal-grid .numl-mfield.numl-full{grid-column:1/-1;}
#numl-page .numl-mfield{display:flex; flex-direction:column; gap:6px;}
#numl-page .numl-mfield label{font-size:13px; font-weight:700; color:var(--numl-maroon-900);}
#numl-page .numl-mfield input, #numl-page .numl-mfield textarea{
  border:1.5px solid var(--numl-paper-dim); border-radius:8px; padding:11px 13px; font-family:inherit; font-size:14px;
  color:var(--numl-ink); background:var(--numl-paper); width:100%;
}
#numl-page .numl-mfield input:focus, #numl-page .numl-mfield textarea:focus{outline:none; border-color:var(--numl-gold); background:#fff;}
#numl-page .numl-mfield textarea{resize:vertical; min-height:80px;}
#numl-page .numl-mfield.numl-merror input, #numl-page .numl-mfield.numl-merror textarea{border-color:#C1443C; background:#FDF3F2;}
#numl-page .numl-mfield-error{font-size:12px; color:#C1443C; min-height:14px; display:none;}
#numl-page .numl-mfield.numl-merror .numl-mfield-error{display:block;}
#numl-page .numl-modal-note{font-size:12px; color:var(--numl-ink-soft); margin-top:14px; text-align:center;}
@media (max-width:480px){#numl-page .numl-modal-grid{grid-template-columns:1fr;}}

/* ============================================================
   PROGRAM/DEPARTMENT MULTI-STEP MODAL
   (Fee Structure → Application Form → Confirmation, submitted via email)
   ============================================================ */
#numl-page .numl-dept-overlay{
  position:fixed; inset:0; z-index:2100; display:flex; align-items:center; justify-content:center;
  padding:20px; background:rgba(59,12,20,0.62); backdrop-filter:blur(4px);
  opacity:0; visibility:hidden; transition:opacity .25s ease, visibility .25s ease;
}
#numl-page .numl-dept-overlay.numl-dept-open{opacity:1; visibility:visible;}
#numl-page .numl-dept-panel{
  position:relative; width:100%; max-width:600px; max-height:90vh; overflow-y:auto;
  background:#fff; border-radius:14px; box-shadow:var(--numl-shadow-l);
  padding:clamp(26px,4vw,40px); transform:translateY(16px); transition:transform .25s ease;
}
#numl-page .numl-dept-overlay.numl-dept-open .numl-dept-panel{transform:translateY(0);}
#numl-page .numl-dept-close{
  position:absolute; top:16px; right:16px; width:36px; height:36px; border-radius:50%;
  background:var(--numl-paper); color:var(--numl-maroon-900); display:flex; align-items:center; justify-content:center;
  font-size:20px; line-height:1; transition:background .2s ease; z-index:2;
}
#numl-page .numl-dept-close:hover{background:var(--numl-paper-dim);}
#numl-page .numl-dept-steps{display:flex; align-items:center; gap:8px; margin-bottom:22px; padding-right:30px;}
#numl-page .numl-dept-step-dot{display:flex; align-items:center; gap:8px; font-size:11px; font-weight:600; color:var(--numl-ink-soft);}
#numl-page .numl-dept-step-dot .numl-num{
  width:24px; height:24px; border-radius:50%; background:var(--numl-paper-dim); color:var(--numl-ink-soft);
  display:flex; align-items:center; justify-content:center; font-size:11px; font-weight:700; transition:background .2s ease, color .2s ease;
}
#numl-page .numl-dept-step-dot.numl-dept-step-active .numl-num{background:var(--numl-gold); color:var(--numl-maroon-950);}
#numl-page .numl-dept-step-dot.numl-dept-step-done .numl-num{background:var(--numl-maroon-800); color:#fff;}
#numl-page .numl-dept-step-line{flex:1; height:1px; background:var(--numl-paper-dim);}
#numl-page .numl-dept-view{display:none;}
#numl-page .numl-dept-view.numl-dept-view-active{display:block;}
#numl-page .numl-dept-header{margin-bottom:18px;}
#numl-page .numl-dept-header h3{font-family:var(--numl-font-display); font-size:clamp(19px,2.4vw,23px); font-weight:700; color:var(--numl-maroon-900);}
#numl-page .numl-dept-header p{margin-top:6px; font-size:13.5px; color:var(--numl-ink-soft); line-height:1.5;}
#numl-page .numl-dept-program-tag{
  display:inline-flex; align-items:center; gap:8px; font-size:12px; font-weight:700; color:var(--numl-maroon-800);
  background:var(--numl-paper); padding:6px 13px; border-radius:999px; margin-bottom:14px;
}
#numl-page .numl-dept-fee-note{
  font-size:13px; line-height:1.65; color:var(--numl-ink-soft); background:var(--numl-paper);
  border-left:3px solid var(--numl-gold); border-radius:0 8px 8px 0; padding:14px 16px; margin-bottom:18px;
}
#numl-page .numl-dept-fee-table{width:100%; border-collapse:collapse; margin-bottom:22px; border:1px solid var(--numl-paper-dim); border-radius:10px; overflow:hidden;}
#numl-page .numl-dept-fee-table tr{border-bottom:1px solid var(--numl-paper-dim);}
#numl-page .numl-dept-fee-table tr:last-child{border-bottom:none;}
#numl-page .numl-dept-fee-table td{padding:12px 16px; font-size:13.5px;}
#numl-page .numl-dept-fee-table td:first-child{font-weight:600; color:var(--numl-maroon-900); width:55%;}
#numl-page .numl-dept-fee-table td:last-child{color:var(--numl-ink-soft); text-align:right;}
#numl-page .numl-dept-fee-actions{display:flex; gap:12px; flex-wrap:wrap;}
#numl-page .numl-dept-form-actions{display:flex; gap:12px; margin-top:6px;}
#numl-page .numl-dept-form-actions .numl-btn{flex:1; justify-content:center;}
#numl-page .numl-dept-confirm{text-align:center; padding:10px 0 4px;}
#numl-page .numl-dept-confirm .numl-check{
  width:60px; height:60px; border-radius:50%; background:rgba(201,162,39,0.12); color:var(--numl-gold-dim,#8A6A22);
  display:flex; align-items:center; justify-content:center; margin:0 auto 18px;
}
#numl-page .numl-dept-confirm h3{font-family:var(--numl-font-display); font-size:22px; font-weight:700; color:var(--numl-maroon-900); margin-bottom:10px;}
#numl-page .numl-dept-confirm p{font-size:13.5px; color:var(--numl-ink-soft); line-height:1.65; max-width:42ch; margin:0 auto 18px;}
#numl-page .numl-dept-confirm-summary{background:var(--numl-paper); border-radius:10px; padding:16px 18px; text-align:left; margin-bottom:20px; font-size:13px; line-height:1.9;}
#numl-page .numl-dept-confirm-summary strong{color:var(--numl-maroon-900);}
#numl-page .numl-dept-fallback{font-size:12px; color:var(--numl-ink-soft); margin-top:4px;}

/* ============================================================
   NOTIFICATION BAR
   ============================================================ */
#numl-page .numl-notify-bar{background:var(--numl-gold); color:var(--numl-maroon-950);}
#numl-page .numl-notify-inner{display:flex; align-items:center; justify-content:space-between; gap:14px; flex-wrap:wrap; padding:9px 0;}
#numl-page .numl-notify-items{display:flex; flex-wrap:wrap; gap:18px;}
#numl-page .numl-notify-item{display:inline-flex; align-items:center; gap:7px; font-size:12.5px; font-weight:700;}
#numl-page .numl-notify-item strong{font-weight:800;}
#numl-page .numl-notify-apply{
  flex-shrink:0; background:var(--numl-maroon-900); color:#fff; font-size:12px; font-weight:700;
  padding:8px 18px; border-radius:999px; transition:background .2s ease, transform .2s ease;
}
#numl-page .numl-notify-apply:hover{background:var(--numl-maroon-800); transform:translateY(-1px);}
@media (max-width:640px){
  #numl-page .numl-notify-inner{justify-content:center; text-align:center;}
  #numl-page .numl-notify-items{justify-content:center; gap:10px 16px;}
}

/* ============================================================
   QUICK APPLY MODAL (single-step, submitted via email)
   ============================================================ */
#numl-page .numl-qa-overlay{
  position:fixed; inset:0; z-index:2200; display:flex; align-items:center; justify-content:center;
  padding:20px; background:rgba(59,12,20,0.65); backdrop-filter:blur(4px);
  opacity:0; visibility:hidden; transition:opacity .25s ease, visibility .25s ease;
}
#numl-page .numl-qa-overlay.numl-qa-open{opacity:1; visibility:visible;}
#numl-page .numl-qa-panel{
  position:relative; width:100%; max-width:540px; max-height:90vh; overflow-y:auto;
  background:#fff; border-radius:14px; box-shadow:var(--numl-shadow-l);
  padding:clamp(26px,4vw,40px); transform:translateY(16px); transition:transform .25s ease;
}
#numl-page .numl-qa-overlay.numl-qa-open .numl-qa-panel{transform:translateY(0);}
#numl-page .numl-qa-close{
  position:absolute; top:16px; right:16px; width:36px; height:36px; border-radius:50%;
  background:var(--numl-paper); color:var(--numl-maroon-900); display:flex; align-items:center; justify-content:center;
  font-size:20px; line-height:1; transition:background .2s ease; z-index:2;
}
#numl-page .numl-qa-close:hover{background:var(--numl-paper-dim);}
#numl-page .numl-qa-header{margin-bottom:20px; padding-right:30px;}
#numl-page .numl-qa-header h3{font-family:var(--numl-font-display); font-size:clamp(19px,2.4vw,23px); font-weight:700; color:var(--numl-maroon-900);}
#numl-page .numl-qa-header p{margin-top:6px; font-size:13.5px; color:var(--numl-ink-soft); line-height:1.5;}
#numl-page .numl-qa-view{display:none;}
#numl-page .numl-qa-view.numl-qa-view-active{display:block;}
#numl-page .numl-qa-confirm{text-align:center; padding:10px 0 4px;}
#numl-page .numl-qa-confirm .numl-check{
  width:56px; height:56px; border-radius:50%; background:rgba(31,122,92,0.1); color:#1F7A5C;
  display:flex; align-items:center; justify-content:center; margin:0 auto 18px;
}
#numl-page .numl-qa-confirm h3{font-family:var(--numl-font-display); font-size:21px; font-weight:700; color:var(--numl-maroon-900); margin-bottom:10px;}
#numl-page .numl-qa-confirm p{font-size:13.5px; color:var(--numl-ink-soft); line-height:1.65; max-width:40ch; margin:0 auto 6px;}
#numl-page .numl-qa-confirm-summary{background:var(--numl-paper); border-radius:10px; padding:16px 18px; text-align:left; margin:16px 0; font-size:13px; line-height:1.85;}
#numl-page .numl-qa-confirm-summary strong{color:var(--numl-maroon-900);}

/* ---- Step indicator ---- */
#numl-page .numl-qa-steps{display:flex; align-items:center; gap:6px; margin-bottom:22px; padding-right:30px; flex-wrap:wrap;}
#numl-page .numl-qa-step-dot{display:flex; align-items:center; gap:6px; font-size:10.5px; font-weight:600; color:var(--numl-ink-soft);}
#numl-page .numl-qa-num{
  width:22px; height:22px; border-radius:50%; background:var(--numl-paper-dim); color:var(--numl-ink-soft);
  display:flex; align-items:center; justify-content:center; font-size:10.5px; font-weight:700; transition:background .2s ease, color .2s ease;
}
#numl-page .numl-qa-step-dot.numl-qa-step-active .numl-qa-num{background:var(--numl-gold); color:var(--numl-maroon-950);}
#numl-page .numl-qa-step-dot.numl-qa-step-done .numl-qa-num{background:var(--numl-maroon-800); color:#fff;}
#numl-page .numl-qa-step-line{width:14px; height:1px; background:var(--numl-paper-dim);}

/* ---- Step 1: program list ---- */
#numl-page .numl-qa-program-list{display:flex; flex-direction:column; gap:9px; max-height:340px; overflow-y:auto; margin-bottom:20px; padding-right:2px;}
#numl-page .numl-qa-program-opt{
  display:flex; align-items:center; gap:12px; padding:13px 16px; border:1.5px solid var(--numl-paper-dim);
  border-radius:10px; cursor:pointer; transition:border-color .2s ease, background .2s ease;
}
#numl-page .numl-qa-program-opt:hover{border-color:var(--numl-gold);}
#numl-page .numl-qa-program-opt.numl-qa-selected{border-color:var(--numl-gold); background:rgba(201,162,39,0.08);}
#numl-page .numl-qa-program-opt input{width:17px; height:17px; accent-color:var(--numl-gold); flex-shrink:0;}
#numl-page .numl-qa-program-opt span{font-size:13.5px; font-weight:600; color:var(--numl-maroon-900);}

/* ---- Step 2: fee options ---- */
#numl-page .numl-qa-fee-note{font-size:12.5px; line-height:1.6; color:var(--numl-ink-soft); background:var(--numl-paper); border-left:3px solid var(--numl-gold); border-radius:0 8px 8px 0; padding:12px 14px; margin-bottom:18px;}
#numl-page .numl-qa-fee-options{display:flex; flex-direction:column; gap:10px; margin-bottom:22px;}
#numl-page .numl-qa-fee-opt{
  display:flex; align-items:center; justify-content:space-between; gap:12px; padding:14px 16px;
  border:1.5px solid var(--numl-paper-dim); border-radius:10px; cursor:pointer; transition:border-color .2s ease, background .2s ease;
}
#numl-page .numl-qa-fee-opt:hover{border-color:var(--numl-gold);}
#numl-page .numl-qa-fee-opt.numl-qa-selected{border-color:var(--numl-gold); background:rgba(201,162,39,0.08);}
#numl-page .numl-qa-fee-opt-left{display:flex; align-items:center; gap:12px;}
#numl-page .numl-qa-fee-opt input{width:17px; height:17px; accent-color:var(--numl-gold); flex-shrink:0;}
#numl-page .numl-qa-fee-opt-title{font-size:13.5px; font-weight:700; color:var(--numl-maroon-900);}
#numl-page .numl-qa-fee-opt-amount{font-size:11px; color:var(--numl-ink-soft); text-align:right;}

/* ---- Form action row (shared by steps 2 & 3) ---- */
#numl-page .numl-qa-form-actions{display:flex; gap:12px; margin-top:6px;}
#numl-page .numl-qa-form-actions .numl-btn{flex:1; justify-content:center;}
#numl-page .numl-qa-view [disabled]{opacity:0.55; cursor:not-allowed;}

/* ============================================================
   WELCOME / ADMISSION ANNOUNCEMENT POPUP (auto-shows once per session)
   ============================================================ */
#numl-page .numl-welcome-overlay{
  position:fixed; inset:0; z-index:2150; display:flex; align-items:center; justify-content:center;
  padding:20px; background:rgba(59,12,20,0.65); backdrop-filter:blur(4px);
  opacity:0; visibility:hidden; transition:opacity .3s ease, visibility .3s ease;
}
#numl-page .numl-welcome-overlay.numl-welcome-open{opacity:1; visibility:visible;}
#numl-page .numl-welcome-panel{
  position:relative; width:100%; max-width:440px; background:#fff; border-radius:14px; box-shadow:var(--numl-shadow-l);
  overflow:hidden; text-align:center; transform:scale(0.96); transition:transform .3s ease;
}
#numl-page .numl-welcome-overlay.numl-welcome-open .numl-welcome-panel{transform:scale(1);}
#numl-page .numl-welcome-image{overflow:hidden;}
#numl-page .numl-welcome-image img{width:auto; height:auto; object-fit:contain; display:block;}
#numl-page .numl-welcome-body{padding:26px 30px 30px;}
#numl-page .numl-welcome-close{
  position:absolute; top:14px; right:14px; width:32px; height:32px; border-radius:50%;
  background:var(--numl-paper); color:var(--numl-maroon-900); display:flex; align-items:center; justify-content:center; font-size:18px; z-index:2;
}
#numl-page .numl-welcome-close:hover{background:var(--numl-paper-dim);}
#numl-page .numl-welcome-icon{
  width:52px; height:52px; border-radius:50%; margin:0 auto 16px; background:rgba(201,162,39,0.14); color:var(--numl-gold-dim,#8A6A22);
  display:flex; align-items:center; justify-content:center;
}
#numl-page .numl-welcome-panel h3{font-family:var(--numl-font-display); font-size:20px; font-weight:700; color:var(--numl-maroon-900); margin-bottom:8px;}
#numl-page .numl-welcome-panel > .numl-welcome-body > p{font-size:13.5px; color:var(--numl-ink-soft); line-height:1.55; margin-bottom:20px;}
#numl-page .numl-welcome-dates{background:var(--numl-paper); border-radius:10px; padding:16px 18px; margin-bottom:22px; text-align:left;}
#numl-page .numl-welcome-date-row{display:flex; align-items:center; gap:10px; font-size:13.5px; color:var(--numl-maroon-900); font-weight:600;}
#numl-page .numl-welcome-date-row + .numl-welcome-date-row{margin-top:10px;}
#numl-page .numl-welcome-date-row svg{color:var(--numl-gold-dim,#8A6A22); flex-shrink:0;}
</style>
<?php wp_head(); ?>
</head>
<body>
<div id="numl-page">

<!-- ============================================================
     TOP UTILITY BAR
     ============================================================ -->
<div class="numl-topbar">
  <div class="numl-container">
    <div class="numl-topbar-links">
      <a href="#">Virtual Tour</a>
      <a href="#">Admissions</a>
      <a href="#">Jobs &amp; Career</a>
      <a href="#">Tenders</a>
      <a href="#">QEC</a>
      <a href="#">Contact Us</a>
    </div>
    <div class="numl-topbar-social">
      <a href="https://www.facebook.com/NUMLOFFICIALPAGE/" target="_blank" rel="noopener" aria-label="NUML on Facebook"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M22 12a10 10 0 10-11.6 9.9v-7H7.9V12h2.5V9.8c0-2.5 1.5-3.9 3.8-3.9 1.1 0 2.2.2 2.2.2v2.5h-1.3c-1.2 0-1.6.8-1.6 1.6V12h2.8l-.4 2.9h-2.4v7A10 10 0 0022 12z"/></svg></a>
      <a href="https://x.com/numl_official" target="_blank" rel="noopener" aria-label="NUML on X"><svg width="13" height="13" viewBox="0 0 24 24" fill="currentColor"><path d="M18.9 3H22l-7.6 8.7L23 21h-6.8l-5.3-6.5L5 21H2l8.1-9.3L1.5 3h7l4.8 5.9L18.9 3z"/></svg></a>
      <a href="https://www.youtube.com/channel/UCY_fvvBIFB_2-0-o5a6lAfg/featured" target="_blank" rel="noopener" aria-label="NUML on YouTube"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M23 12s0-3.6-.46-5.3a2.9 2.9 0 00-2-2C18.9 4.2 12 4.2 12 4.2s-6.9 0-8.54.5a2.9 2.9 0 00-2 2C1 8.4 1 12 1 12s0 3.6.46 5.3a2.9 2.9 0 002 2c1.64.5 8.54.5 8.54.5s6.9 0 8.54-.5a2.9 2.9 0 002-2C23 15.6 23 12 23 12zM9.8 15.5V8.5l6 3.5z"/></svg></a>
      <a href="https://www.linkedin.com/company/numl-official" target="_blank" rel="noopener" aria-label="NUML on LinkedIn"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M4.98 3.5a2.5 2.5 0 11-.02 5 2.5 2.5 0 01.02-5zM3 9h4v12H3zM9 9h3.8v1.7h.05c.53-1 1.83-2.06 3.77-2.06 4.03 0 4.78 2.65 4.78 6.1V21h-4v-5.7c0-1.36-.02-3.1-1.89-3.1-1.9 0-2.19 1.48-2.19 3v5.8H9z"/></svg></a>
      <a href="https://www.instagram.com/numlofficial/" target="_blank" rel="noopener" aria-label="NUML on Instagram"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="3" y="3" width="18" height="18" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="1"/></svg></a>
    </div>
  </div>
</div>

<!-- ============================================================
     NOTIFICATION BAR (admission dates + quick Apply Now)
     ============================================================ -->
<div class="numl-notify-bar" id="numl-notify-bar">
  <div class="numl-container numl-notify-inner">
    <div class="numl-notify-items">
      <span class="numl-notify-item"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="5" width="18" height="16" rx="2"/><path d="M8 3v4M16 3v4M3 10h18"/></svg> Last Date to Apply: <strong id="numl-notify-lastdate"></strong></span>
      <span class="numl-notify-item"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 11l3 3L22 4"/><path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"/></svg> Entry Test: <strong id="numl-notify-entrytest"></strong></span>
    </div>
    <button type="button" class="numl-notify-apply numl-quickapply-trigger">Apply Now</button>
  </div>
</div>

<!-- ============================================================
     HEADER
     ============================================================ -->
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
            <a href="/numl-fee-structure">Fee Structure</a>
            <a href="/numl-merit-list">Merit List</a>
            <a href="/numl-fee-chalan">Fee Chalan</a>
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
        <a href="/numl-fee-structure">Fee Structure</a>
        <a href="/numl-merit-list">Merit List</a>
        <a href="/numl-fee-chalan">Fee Chalan</a>
      </div>
    </li>
    <li><a href="#">Offices</a></li>
    <li><a href="#">Research</a></li>
    <li><a href="#">Life @ NUML</a></li>
    <li><a href="#">Contact Us</a></li>
    <li style="padding:16px 20px;"><a href="#" class="numl-btn numl-btn-maroon numl-btn-block numl-admission-trigger">Admission Now</a></li>
  </ul>
</header>

<!-- ============================================================
     HERO
     ============================================================ -->
<section class="numl-hero">
  <div class="numl-hero-media">
    <!-- TODO: replace with official NUML photography/video — dummy stock placeholder for now -->
    <img src="https://images.unsplash.com/photo-1562774053-701939374585?auto=format&fit=crop&w=1920&q=75" alt="Placeholder campus image — replace with official NUML photography">
  </div>
  <div class="numl-container numl-hero-content">
    <h1>National University of <span class="numl-accent">Modern Languages</span></h1>
    <p class="numl-hero-sub">A public sector university headquartered in Islamabad, with regional campuses across Pakistan and a distinctive strength in language education alongside a wide range of academic faculties.</p>
  </div>
</section>

<div class="numl-quicklinks-strip">
  <div class="numl-container">
    <a href="#">Admissions</a>
    <a href="#">CMS</a>
    <a href="#">LMS</a>
    <a href="#">NILO</a>
    <a href="#">Translation Services</a>
    <a href="#">Latest News</a>
    <a href="#">Upcoming Events</a>
  </div>
</div>

<!-- ============================================================
     IMPORTANT NEWS TICKER
     ============================================================ -->
<div class="numl-ticker">
  <div class="numl-container">
    <span class="numl-ticker-label">Important News</span>
    <p class="numl-ticker-text">Merit Lists are displayed for Phase-I. Admissions for Phase-II are in process till 17 August, 2026. Business Incubation Centre of NUML (BICON) has been ranked in Top 04 in W-Category by the Higher Education Commission (HEC).</p>
  </div>
</div>

<!-- ============================================================
     WHY STUDY AT NUML — RANKINGS
     ============================================================ -->
<section class="numl-rankings" id="numl-why">
  <div class="numl-container">
    <div class="numl-section-head numl-center numl-reveal">
      <p class="numl-eyebrow">Recognition</p>
      <h2 class="numl-section-title">Why Study at NUML?</h2>
    </div>

    <div class="numl-rankings-grid numl-reveal">
      <div class="numl-rank-card">
        <div class="numl-rank-num">#251-300</div>
        <div class="numl-rank-label">QS Subject Ranking — Modern Languages (World)</div>
      </div>
      <div class="numl-rank-card">
        <div class="numl-rank-num">#21 / #439</div>
        <div class="numl-rank-label">QS Sustainability Rankings — Pakistan / Asia</div>
      </div>
      <div class="numl-rank-card">
        <div class="numl-rank-num">#112 / #26</div>
        <div class="numl-rank-label">QS Asian University Rankings 2026 — Southern Asia / Pakistan</div>
      </div>
      <div class="numl-rank-card">
        <div class="numl-rank-num">Top 04</div>
        <div class="numl-rank-label">BICON — W-Category by HEC</div>
      </div>
      <div class="numl-rank-card">
        <div class="numl-rank-num">#1 in Pakistan</div>
        <div class="numl-rank-label">THE Impact Rankings 2025 — SDG7 Affordable &amp; Clean Energy</div>
      </div>
      <div class="numl-rank-card">
        <div class="numl-rank-num">#2 in Pakistan</div>
        <div class="numl-rank-label">THE Impact Rankings 2025 — SDG16 Peace, Justice &amp; Strong Institutions</div>
      </div>
      <div class="numl-rank-card">
        <div class="numl-rank-num">#1201-1250</div>
        <div class="numl-rank-label">QS Sustainability Rankings — World</div>
      </div>
      <div class="numl-rank-card">
        <div class="numl-rank-num">200+</div>
        <div class="numl-rank-label">Degree Programs Offered</div>
      </div>
    </div>
  </div>
</section>

<section class="numl-stats">
  <div class="numl-container">
    <div class="numl-stats-grid numl-reveal">
      <div><div class="numl-stat-num">200+</div><div class="numl-stat-label">Degree Programs</div></div>
      <div><div class="numl-stat-num">35,000+</div><div class="numl-stat-label">Enrolled Students</div></div>
      <div><div class="numl-stat-num">2,000+</div><div class="numl-stat-label">Scholarships</div></div>
      <div><div class="numl-stat-num">1700+</div><div class="numl-stat-label">Faculty</div></div>
    </div>
  </div>
</section>

<!-- ============================================================
     LEADERSHIP MESSAGES
     ============================================================ -->
<section class="numl-leadership">
  <div class="numl-container">
    <div class="numl-section-head numl-reveal">
      <p class="numl-eyebrow">Leadership</p>
      <h2 class="numl-section-title">A Word From NUML's Leadership</h2>
    </div>

    <div class="numl-leadership-grid numl-reveal">
      <div class="numl-leader-card">
        <div class="numl-leader-portrait">
          <!-- Sourced directly from the official NUML asset (numl.edu.pk) -->
          <img src="https://numl.edu.pk/templates/template10/images/rectorNUML.jpg" alt="Maj Gen Shahid Mahmood Kayani, Rector NUML">
        </div>
        <p>Welcomes visitors to NUML as an institution built on educational excellence and innovation, tracing its growth from modest beginnings to its current standing.</p>
        <p class="numl-leader-name">Maj Gen Shahid Mahmood Kayani HI(M), Retd — Rector NUML</p>
        <a href="#" class="numl-leader-more">Read More →</a>
      </div>

      <div class="numl-leader-card">
        <div class="numl-leader-portrait numl-avatar" aria-hidden="true">DG</div>
        <p>Welcomes students to a university profoundly committed to excellence and equity, highlighting the faculty, facilities and supportive environment on offer.</p>
        <p class="numl-leader-name">Director General, NUML</p>
        <a href="#" class="numl-leader-more">Read More →</a>
      </div>

      <div class="numl-leader-card">
        <div class="numl-leader-portrait numl-avatar" aria-hidden="true">PR</div>
        <p>Describes NUML as a meeting point for global languages, cultures and an international student community that reaches beyond the boundaries of a typical campus.</p>
        <p class="numl-leader-name">Pro-Rector, Research &amp; Strategic Initiatives</p>
        <a href="#" class="numl-leader-more">Read More →</a>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     EXPLORE NUML — PROGRAM LEVELS
     ============================================================ -->
<section class="numl-explore">
  <div class="numl-container">
    <div class="numl-section-head numl-reveal">
      <p class="numl-eyebrow">Academics</p>
      <h2 class="numl-section-title">Explore NUML — A Global Education Destination</h2>
    </div>

    <div class="numl-explore-grid numl-reveal">
      <a href="#" class="numl-explore-card numl-dept-trigger" data-numl-program="Undergraduate Programs">
        <p class="numl-explore-tag">Undergraduate</p>
        <h3>Undergraduate Programs</h3>
        <p>Programs that build a strong academic foundation and practical skills for real-world challenges.</p>
      </a>
      <a href="#" class="numl-explore-card numl-dept-trigger" data-numl-program="Postgraduate Programs">
        <p class="numl-explore-tag">Postgraduate</p>
        <h3>Postgraduate Programs</h3>
        <p>Advanced study pathways designed to foster deep expertise and leadership in your chosen field.</p>
      </a>
      <a href="#" class="numl-explore-card numl-dept-trigger" data-numl-program="Doctoral Programs">
        <p class="numl-explore-tag">Doctoral</p>
        <h3>Doctoral Programs</h3>
        <p>Research-intensive programs tailored for academic and industry experts driving innovation.</p>
      </a>
      <a href="#" class="numl-explore-card numl-dept-trigger" data-numl-program="Language Courses">
        <p class="numl-explore-tag">Language</p>
        <h3>Language Courses</h3>
        <p>Professional language learning curriculum to build global communication skills.</p>
      </a>
      <a href="#" class="numl-explore-card numl-dept-trigger" data-numl-program="Online Languages">
        <p class="numl-explore-tag">Short Courses</p>
        <h3>Online Languages</h3>
        <p>Remote learning of national and international languages from local and foreign experts.</p>
      </a>
    </div>
  </div>
</section>

<!-- ============================================================
     LATEST FROM NUML
     ============================================================ -->
<section class="numl-latest">
  <div class="numl-container">
    <div class="numl-section-head numl-reveal">
      <p class="numl-eyebrow">Stay Informed</p>
      <h2 class="numl-section-title">Latest From National University of Modern Languages</h2>
    </div>

    <div class="numl-latest-grid numl-reveal">
      <div class="numl-latest-col">
        <h4>Events</h4>
        <ul>
          <li><a href="#"><span class="numl-latest-title">Call for Papers: International Conference&hellip;</span><span class="numl-latest-date">Jul 16, 2026</span></a></li>
          <li><a href="#"><span class="numl-latest-title">3rd Special Convocation 2026</span><span class="numl-latest-date">Jul 13, 2026</span></a></li>
          <li><a href="#"><span class="numl-latest-title">Jinnah The Great</span><span class="numl-latest-date">May 18, 2026</span></a></li>
          <li><a href="#"><span class="numl-latest-title">Marka-e-Haq: Operation Bunyaan-un-Marsoos&hellip;</span><span class="numl-latest-date">May 07, 2026</span></a></li>
        </ul>
        <a href="#" class="numl-latest-viewall">View All →</a>
      </div>

      <div class="numl-latest-col">
        <h4>Announcements</h4>
        <ul>
          <li><a href="#"><span class="numl-latest-title">IKSI Admissions — Fall 2026 (Open Now)</span><span class="numl-latest-date">Aug 11, 2026</span></a></li>
          <li><a href="#"><span class="numl-latest-title">Hostel Admissions for Boys and Girls&hellip;</span><span class="numl-latest-date">Aug 10, 2026</span></a></li>
          <li><a href="#"><span class="numl-latest-title">NUML Transportal Announcement for Fall&hellip;</span><span class="numl-latest-date">Aug 05, 2026</span></a></li>
          <li><a href="#"><span class="numl-latest-title">NUML Online Language Proficiency Course&hellip;</span><span class="numl-latest-date">Jul 28, 2026</span></a></li>
        </ul>
        <a href="#" class="numl-latest-viewall">View All →</a>
      </div>

      <div class="numl-latest-col">
        <h4>Annual Reports</h4>
        <ul>
          <li><a href="#"><span class="numl-latest-title">NUML Annual Report 2023 – 2024</span><span class="numl-latest-date">Jul 2023 – Jun 2024</span></a></li>
          <li><a href="#"><span class="numl-latest-title">NUML Annual Report 2022 – 2023</span><span class="numl-latest-date">2022 – 2023</span></a></li>
          <li><a href="#"><span class="numl-latest-title">NUML Annual Report 2021 – 2022</span><span class="numl-latest-date">2021 – 2022</span></a></li>
          <li><a href="#"><span class="numl-latest-title">NUML Annual Report 2020 – 2021</span><span class="numl-latest-date">Jul 2020 – Jun 2021</span></a></li>
        </ul>
      </div>

      <div class="numl-latest-col">
        <h4>Calendar</h4>
        <ul>
          <li><a href="#"><span class="numl-latest-title">Academic Calendar (Feb 2026 – Feb 2027)</span></a></li>
          <li><a href="#"><span class="numl-latest-title">University Calendar (Feb 2025 – Feb 2026)</span></a></li>
          <li><a href="#"><span class="numl-latest-title">Academic Calendar (Feb 2024 – Feb 2025)</span></a></li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     GALLERY
     ============================================================ -->
<section class="numl-gallery" id="numl-gallery">
  <div class="numl-container">
    <div class="numl-section-head numl-center numl-reveal">
      <p class="numl-eyebrow">Life at NUML</p>
      <h2 class="numl-section-title">Our Gallery</h2>
    </div>

    <!-- Images below are hotlinked directly from NUML's own gallery uploads (numl.edu.pk/gallery/...) -->
    <div class="numl-gallery-grid numl-reveal">
      <div class="numl-gallery-item numl-wide">
        <img src="https://numl.edu.pk/gallery/1761111069WhatsApp%20Image%202025-10-22%20at%209.23.10%20AM.jpeg" alt="NUML campus life photo" loading="lazy">
      </div>
      <div class="numl-gallery-item"><img src="https://numl.edu.pk/gallery/1748583788496009942_732699795772616_7721838644880629721_n.jpg" alt="NUML campus life photo" loading="lazy"></div>
      <div class="numl-gallery-item"><img src="https://numl.edu.pk/gallery/1748583785501282560_732699835772612_3951990254330103431_n.jpg" alt="NUML campus life photo" loading="lazy"></div>
      <div class="numl-gallery-item"><img src="https://numl.edu.pk/gallery/1748257904494404797_729705629405366_8121228024136305321_n.jpg" alt="NUML campus life photo" loading="lazy"></div>
      <div class="numl-gallery-item"><img src="https://numl.edu.pk/gallery/1748257901494558474_729705689405360_4291912841184995618_n.jpg" alt="NUML campus life photo" loading="lazy"></div>
      <div class="numl-gallery-item"><img src="https://numl.edu.pk/gallery/1748257756500065365_729026116139984_7980621942175263285_n.jpg" alt="NUML campus life photo" loading="lazy"></div>
      <div class="numl-gallery-item"><img src="https://numl.edu.pk/gallery/1747890000498331754_727045383004724_1636423128591141851_n.jpg" alt="NUML campus life photo" loading="lazy"></div>
      <div class="numl-gallery-item"><img src="https://numl.edu.pk/gallery/1747631959IMG-20250517-WA0028(1).jpg" alt="NUML campus life photo" loading="lazy"></div>
    </div>

    <div class="numl-gallery-actions numl-reveal">
      <a href="#" class="numl-btn numl-btn-maroon">View Gallery</a>
      <a href="#" class="numl-btn numl-btn-outline" style="color:var(--numl-maroon-900); border-color:var(--numl-maroon-900);">View Facilities</a>
      <a href="#" class="numl-btn numl-btn-outline" style="color:var(--numl-maroon-900); border-color:var(--numl-maroon-900);">Watch Videos</a>
    </div>
  </div>
</section>

<!-- ============================================================
     QUICK LINKS
     ============================================================ -->
<section class="numl-quicklinks-grid-section">
  <div class="numl-container">
    <div class="numl-section-head numl-reveal">
      <p class="numl-eyebrow">Systems &amp; Portals</p>
      <h2 class="numl-section-title">Quick Links</h2>
    </div>

    <div class="numl-quicklinks-grid numl-reveal">
      <a href="#" class="numl-ql-item">CMS</a>
      <a href="#" class="numl-ql-item">OPAC</a>
      <a href="#" class="numl-ql-item">Student Clearance</a>
      <a href="#" class="numl-ql-item">LMS</a>
      <a href="#" class="numl-ql-item">Success Stories</a>
      <a href="#" class="numl-ql-item">Transportal</a>
      <a href="#" class="numl-ql-item">HR System</a>
      <a href="#" class="numl-ql-item">Placement System</a>
      <a href="#" class="numl-ql-item">Task Management</a>
      <a href="#" class="numl-ql-item">High Achievers</a>
      <a href="#" class="numl-ql-item">Publications System</a>
      <a href="#" class="numl-ql-item">Hostels Form</a>
      <a href="#" class="numl-ql-item">Online Language Courses</a>
      <a href="#" class="numl-ql-item">Professional Courses</a>
      <a href="#" class="numl-ql-item">NEWS</a>
      <a href="#" class="numl-ql-item">Event Repository</a>
      <a href="#" class="numl-ql-item">Downloads</a>
      <a href="#" class="numl-ql-item">Results</a>
      <a href="#" class="numl-ql-item">Online QEC</a>
      <a href="#" class="numl-ql-item">E-Registration</a>
      <a href="#" class="numl-ql-item">Scholarships</a>
      <a href="#" class="numl-ql-item">E-Library</a>
      <a href="#" class="numl-ql-item">Rector's Suggestion Box</a>
      <a href="#" class="numl-ql-item">NUML RTI Compliance</a>
    </div>
  </div>
</section>

<!-- ============================================================
     REGIONAL CAMPUSES
     ============================================================ -->
<section class="numl-campuses">
  <div class="numl-container">
    <div class="numl-section-head numl-center numl-reveal">
      <h2 class="numl-section-title">Regional Campuses</h2>
    </div>
    <div class="numl-campuses-row numl-reveal">
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
  </div>
</section>

<!-- ============================================================
     FOOTER
     ============================================================ -->
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

<!-- ============================================================
     ADMISSION INQUIRY MODAL
     ============================================================ -->
<div class="numl-modal-overlay" id="numl-admission-modal" role="dialog" aria-modal="true" aria-labelledby="numl-modal-title" aria-hidden="true">
  <div class="numl-modal-panel">
    <button type="button" class="numl-modal-close" id="numl-modal-close" aria-label="Close admission inquiry form">&times;</button>
    <div class="numl-modal-header">
      <p class="numl-eyebrow">Admissions</p>
      <h3 id="numl-modal-title">NUML Admission Inquiry</h3>
      <p class="numl-modal-sub">Share your details and we'll open WhatsApp with your inquiry ready to send to NUML admissions.</p>
    </div>

    <form id="numl-admission-form" novalidate>
      <div class="numl-modal-grid">
        <div class="numl-mfield numl-full" data-numl-field="name">
          <label for="numl-adm-name">Full Name</label>
          <input type="text" id="numl-adm-name" name="name" placeholder="e.g. Ayesha Khan" autocomplete="name">
          <span class="numl-mfield-error">Please enter your full name.</span>
        </div>
        <div class="numl-mfield" data-numl-field="phone">
          <label for="numl-adm-phone">Phone / WhatsApp Number</label>
          <input type="tel" id="numl-adm-phone" name="phone" placeholder="03XX XXXXXXX" autocomplete="tel">
          <span class="numl-mfield-error">Please enter a valid phone number.</span>
        </div>
        <div class="numl-mfield" data-numl-field="email">
          <label for="numl-adm-email">Email <span style="font-weight:500; color:var(--numl-ink-soft);">(optional)</span></label>
          <input type="email" id="numl-adm-email" name="email" placeholder="you@example.com" autocomplete="email">
          <span class="numl-mfield-error">Please enter a valid email address.</span>
        </div>
        <div class="numl-mfield" data-numl-field="city">
          <label for="numl-adm-city">City</label>
          <input type="text" id="numl-adm-city" name="city" placeholder="e.g. Islamabad" autocomplete="address-level2">
        </div>
        <div class="numl-mfield" data-numl-field="campus">
          <label for="numl-adm-campus">Preferred Campus <span style="font-weight:500; color:var(--numl-ink-soft);">(optional)</span></label>
          <input type="text" id="numl-adm-campus" name="campus" placeholder="e.g. Islamabad, Lahore, Karachi...">
        </div>
        <div class="numl-mfield numl-full" data-numl-field="program">
          <label for="numl-adm-program">Program of Interest</label>
          <input type="text" id="numl-adm-program" name="program" placeholder="e.g. BS Computer Science">
          <span class="numl-mfield-error">Please tell us which program you're interested in.</span>
        </div>
        <div class="numl-mfield numl-full">
          <label for="numl-adm-message">Message <span style="font-weight:500; color:var(--numl-ink-soft);">(optional)</span></label>
          <textarea id="numl-adm-message" name="message" placeholder="Anything else you'd like us to know?"></textarea>
        </div>
      </div>
      <button type="submit" class="numl-btn numl-btn-maroon numl-btn-block" id="numl-adm-submit">Send via WhatsApp</button>
      <p class="numl-modal-note">This opens WhatsApp with your details pre-filled. No data is stored by this page.</p>
    </form>
  </div>
</div>

<!-- ============================================================
     PROGRAM/DEPARTMENT MULTI-STEP MODAL
     (Fee Structure → Application Form → Confirmation)
     ============================================================ -->
<div class="numl-dept-overlay" id="numl-dept-modal" role="dialog" aria-modal="true" aria-labelledby="numl-dept-title" aria-hidden="true">
  <div class="numl-dept-panel">
    <button type="button" class="numl-dept-close" id="numl-dept-close" aria-label="Close">&times;</button>

    <div class="numl-dept-steps" aria-hidden="true">
      <span class="numl-dept-step-dot numl-dept-step-active" data-numl-dept-dot="1"><span class="numl-num">1</span> Fee Structure</span>
      <span class="numl-dept-step-line"></span>
      <span class="numl-dept-step-dot" data-numl-dept-dot="2"><span class="numl-num">2</span> Application</span>
      <span class="numl-dept-step-line"></span>
      <span class="numl-dept-step-dot" data-numl-dept-dot="3"><span class="numl-num">3</span> Confirmation</span>
    </div>

    <div class="numl-dept-view numl-dept-view-active" data-numl-dept-view="1">
      <span class="numl-dept-program-tag" id="numl-dept-tag-1"></span>
      <div class="numl-dept-header">
        <h3 id="numl-dept-title">Fee Structure</h3>
        <p>A general overview before you apply. NUML updates its fee structure each academic year.</p>
      </div>
      <p class="numl-dept-fee-note">Exact tuition, admission and other fees are set and published by NUML and can change between intakes. Please confirm current figures on NUML's fee structure page or directly with the admissions office before applying.</p>
      <table class="numl-dept-fee-table">
        <tr><td>Tuition Fee</td><td>Confirm with NUML</td></tr>
        <tr><td>Admission / Processing Fee</td><td>Confirm with NUML</td></tr>
        <tr><td>Security Deposit</td><td>Confirm with NUML</td></tr>
        <tr><td>Scholarships &amp; Financial Aid</td><td>Ask admissions office</td></tr>
      </table>
      <div class="numl-dept-fee-actions">
        <a href="#" class="numl-btn numl-btn-outline" style="color:var(--numl-maroon-900); border-color:var(--numl-maroon-900);">View Fee Structure</a>
        <button type="button" class="numl-btn numl-btn-maroon" id="numl-dept-to-step2">Continue to Application</button>
      </div>
    </div>

    <div class="numl-dept-view" data-numl-dept-view="2">
      <span class="numl-dept-program-tag" id="numl-dept-tag-2"></span>
      <div class="numl-dept-header">
        <h3>Application Details</h3>
        <p>Share your details and this opens your email app with your application ready to send.</p>
      </div>
      <form id="numl-dept-form" novalidate>
        <div class="numl-modal-grid">
          <div class="numl-mfield numl-full" data-numl-dfield="name">
            <label for="numl-dept-name">Full Name</label>
            <input type="text" id="numl-dept-name" name="name" placeholder="e.g. Ayesha Khan" autocomplete="name">
            <span class="numl-mfield-error">Please enter your full name.</span>
          </div>
          <div class="numl-mfield" data-numl-dfield="phone">
            <label for="numl-dept-phone">Phone</label>
            <input type="tel" id="numl-dept-phone" name="phone" placeholder="03XX XXXXXXX" autocomplete="tel">
            <span class="numl-mfield-error">Please enter a valid phone number.</span>
          </div>
          <div class="numl-mfield" data-numl-dfield="email">
            <label for="numl-dept-email">Email</label>
            <input type="email" id="numl-dept-email" name="email" placeholder="you@example.com" autocomplete="email">
            <span class="numl-mfield-error">Please enter a valid email address.</span>
          </div>
          <div class="numl-mfield numl-full" data-numl-dfield="city">
            <label for="numl-dept-city">City</label>
            <input type="text" id="numl-dept-city" name="city" placeholder="e.g. Islamabad" autocomplete="address-level2">
          </div>
          <div class="numl-mfield numl-full">
            <label for="numl-dept-message">Message <span style="font-weight:500; color:var(--numl-ink-soft);">(optional)</span></label>
            <textarea id="numl-dept-message" name="message" placeholder="Anything else you'd like us to know?"></textarea>
          </div>
        </div>
        <div class="numl-dept-form-actions">
          <button type="button" class="numl-btn numl-btn-outline" style="color:var(--numl-maroon-900); border-color:var(--numl-maroon-900);" id="numl-dept-back-step1">Back</button>
          <button type="submit" class="numl-btn numl-btn-maroon" id="numl-dept-submit">Submit Application</button>
        </div>
      </form>
    </div>

    <div class="numl-dept-view" data-numl-dept-view="3">
      <div class="numl-dept-confirm">
        <div class="numl-check"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M5 13l4 4L19 7"/></svg></div>
        <h3>Application Ready to Send</h3>
        <p>Your email app should now open with your application pre-filled. If it didn't open automatically, use the email address below to send it yourself.</p>
        <div class="numl-dept-confirm-summary" id="numl-dept-summary"></div>
        <p class="numl-dept-fallback" id="numl-dept-fallback-email"></p>
        <button type="button" class="numl-btn numl-btn-outline" style="color:var(--numl-maroon-900); border-color:var(--numl-maroon-900);" id="numl-dept-done">Close</button>
      </div>
    </div>

  </div>
</div>

<!-- ============================================================
     QUICK APPLY MODAL (4-step: Program → Fee Structure → Application → Confirmation)
     ============================================================ -->
<div class="numl-qa-overlay" id="numl-qa-modal" role="dialog" aria-modal="true" aria-labelledby="numl-qa-title" aria-hidden="true">
  <div class="numl-qa-panel">
    <button type="button" class="numl-qa-close" id="numl-qa-close" aria-label="Close">&times;</button>

    <div class="numl-qa-steps" aria-hidden="true">
      <span class="numl-qa-step-dot numl-qa-step-active" data-numl-qa-dot="program"><span class="numl-qa-num">1</span> Program</span>
      <span class="numl-qa-step-line"></span>
      <span class="numl-qa-step-dot" data-numl-qa-dot="fee"><span class="numl-qa-num">2</span> Fee</span>
      <span class="numl-qa-step-line"></span>
      <span class="numl-qa-step-dot" data-numl-qa-dot="form"><span class="numl-qa-num">3</span> Application</span>
      <span class="numl-qa-step-line"></span>
      <span class="numl-qa-step-dot" data-numl-qa-dot="confirm"><span class="numl-qa-num">4</span> Confirmation</span>
    </div>

    <!-- STEP 1: SELECT PROGRAM -->
    <div class="numl-qa-view numl-qa-view-active" data-numl-qa-view="program">
      <div class="numl-qa-header">
        <h3 id="numl-qa-title">Select a Program</h3>
        <p>Choose the NUML study route you'd like to apply to.</p>
      </div>
      <div class="numl-qa-program-list" id="numl-qa-program-list" role="radiogroup" aria-label="Select a program"></div>
      <button type="button" class="numl-btn numl-btn-maroon numl-btn-block" id="numl-qa-to-fee" disabled>Continue to Fee Structure</button>
    </div>

    <!-- STEP 2: FEE STRUCTURE -->
    <div class="numl-qa-view" data-numl-qa-view="fee">
      <div class="numl-qa-header">
        <h3>Fee Structure</h3>
        <p id="numl-qa-fee-program-label"></p>
      </div>
      <p class="numl-qa-fee-note">Exact fees are set and published by NUML and can change between intakes. Select your seat category below — confirm the exact amount with NUML admissions before applying.</p>
      <div class="numl-qa-fee-options" id="numl-qa-fee-options" role="radiogroup" aria-label="Select your fee category"></div>
      <div class="numl-qa-form-actions">
        <button type="button" class="numl-btn numl-btn-outline" style="color:var(--numl-maroon-900); border-color:var(--numl-maroon-900);" id="numl-qa-back-program">Back</button>
        <button type="button" class="numl-btn numl-btn-maroon" id="numl-qa-to-form" disabled>Continue to Application</button>
      </div>
    </div>

    <!-- STEP 3: APPLICATION FORM -->
    <div class="numl-qa-view" data-numl-qa-view="form">
      <div class="numl-qa-header">
        <h3>Application Details</h3>
        <p>Fill in your details below. Your application is sent directly by email to our admissions team.</p>
      </div>
      <form id="numl-qa-form" novalidate>
        <div class="numl-modal-grid">
          <div class="numl-mfield" data-numl-qafield="name">
            <label for="numl-qa-name">Full Name</label>
            <input type="text" id="numl-qa-name" name="name" placeholder="e.g. Ayesha Khan" autocomplete="name">
            <span class="numl-mfield-error">Please enter your full name.</span>
          </div>
          <div class="numl-mfield" data-numl-qafield="father">
            <label for="numl-qa-father">Father's Name</label>
            <input type="text" id="numl-qa-father" name="father" placeholder="e.g. Muhammad Khan" autocomplete="off">
            <span class="numl-mfield-error">Please enter your father's name.</span>
          </div>
          <div class="numl-mfield" data-numl-qafield="cnic">
            <label for="numl-qa-cnic">CNIC / B-Form Number</label>
            <input type="text" id="numl-qa-cnic" name="cnic" placeholder="XXXXX-XXXXXXX-X" autocomplete="off">
            <span class="numl-mfield-error">Please enter your CNIC or B-Form number.</span>
          </div>
          <div class="numl-mfield" data-numl-qafield="phone">
            <label for="numl-qa-phone">Phone</label>
            <input type="tel" id="numl-qa-phone" name="phone" placeholder="03XX XXXXXXX" autocomplete="tel">
            <span class="numl-mfield-error">Please enter a valid phone number.</span>
          </div>
          <div class="numl-mfield" data-numl-qafield="email">
            <label for="numl-qa-email">Email</label>
            <input type="email" id="numl-qa-email" name="email" placeholder="you@example.com" autocomplete="email">
            <span class="numl-mfield-error">Please enter a valid email address.</span>
          </div>
          <div class="numl-mfield" data-numl-qafield="city">
            <label for="numl-qa-city">City</label>
            <input type="text" id="numl-qa-city" name="city" placeholder="e.g. Islamabad" autocomplete="address-level2">
            <span class="numl-mfield-error">Please enter your city.</span>
          </div>
          <div class="numl-mfield" data-numl-qafield="matricRoll">
            <label for="numl-qa-matric-roll">Matriculation Roll Number</label>
            <input type="text" id="numl-qa-matric-roll" name="matricRoll" placeholder="e.g. 123456" autocomplete="off">
            <span class="numl-mfield-error">Please enter your matriculation roll number.</span>
          </div>
          <div class="numl-mfield" data-numl-qafield="matricPct">
            <label for="numl-qa-matric-pct">Matriculation Percentage</label>
            <input type="text" id="numl-qa-matric-pct" name="matricPct" placeholder="e.g. 85%" autocomplete="off">
            <span class="numl-mfield-error">Please enter your matriculation percentage.</span>
          </div>
          <div class="numl-mfield" data-numl-qafield="interRoll">
            <label for="numl-qa-inter-roll">Intermediate Roll Number</label>
            <input type="text" id="numl-qa-inter-roll" name="interRoll" placeholder="e.g. 654321" autocomplete="off">
            <span class="numl-mfield-error">Please enter your intermediate roll number.</span>
          </div>
          <div class="numl-mfield" data-numl-qafield="interPct">
            <label for="numl-qa-inter-pct">Intermediate Percentage</label>
            <input type="text" id="numl-qa-inter-pct" name="interPct" placeholder="e.g. 78%" autocomplete="off">
            <span class="numl-mfield-error">Please enter your intermediate percentage.</span>
          </div>
          <div class="numl-mfield numl-full">
            <label for="numl-qa-message">Message <span style="font-weight:500; color:var(--numl-ink-soft);">(optional)</span></label>
            <textarea id="numl-qa-message" name="message" placeholder="Anything else you'd like us to know?"></textarea>
          </div>
        </div>
        <div class="numl-qa-form-actions">
          <button type="button" class="numl-btn numl-btn-outline" style="color:var(--numl-maroon-900); border-color:var(--numl-maroon-900);" id="numl-qa-back-fee">Back</button>
          <button type="submit" class="numl-btn numl-btn-maroon" id="numl-qa-submit">Submit Application</button>
        </div>
      </form>
    </div>

    <!-- STEP 4: CONFIRMATION -->
    <div class="numl-qa-view" data-numl-qa-view="confirm">
      <div class="numl-qa-confirm">
        <div class="numl-check"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M5 13l4 4L19 7"/></svg></div>
        <h3>Application Sent</h3>
        <p>Your email app should now open with your application pre-filled and addressed to info@eduapply.online. If it didn't open automatically, please send your details there directly.</p>
        <div class="numl-qa-confirm-summary" id="numl-qa-confirm-summary"></div>
        <button type="button" class="numl-btn numl-btn-outline" style="color:var(--numl-maroon-900); border-color:var(--numl-maroon-900); margin-top:16px;" id="numl-qa-done">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- ============================================================
     WELCOME / ADMISSION ANNOUNCEMENT POPUP (auto-shows once per session)
     ============================================================ -->
<?php $ccx_welcome = ccx_welcome_popup( 'numl' ); ?>
<?php if ( $ccx_welcome['enabled'] && $ccx_welcome['image'] ) : ?>
<div class="numl-welcome-overlay" id="numl-welcome-modal" role="dialog" aria-modal="true" aria-label="NUML Admissions" aria-hidden="true">
  <div class="numl-welcome-panel">
    <button type="button" class="numl-welcome-close" id="numl-welcome-close" aria-label="Close">&times;</button>
    <button type="button" class="numl-welcome-image numl-quickapply-trigger" id="numl-welcome-apply" aria-label="Apply Now at NUML">
      <img src="<?php echo esc_url( $ccx_welcome['image'] ); ?>" alt="<?php echo esc_attr( $ccx_welcome['alt'] ); ?>">
    </button>
  </div>
</div>
<?php endif; ?>

</div><!-- /#numl-page -->

<script>
var numlHomepage = (function(){
  "use strict";

  function numlInit(){
    numlSetupMobileNav();
    numlSetupScrollReveal();
    numlSetupFooterYear();
    numlSetupAdmissionModal();
    numlSetupDeptModal();
    numlSetupNotifyBar();
    numlSetupQuickApply();
    numlSetupWelcomePopup();
  }

  /* ============================================================
     ADMISSION DATES — NUML's own live announcement (sourced from
     numl.edu.pk) confirmed a Phase-II deadline at build time; no
     confirmed entry-test date was published, so that remains a
     placeholder.
     ============================================================ */
  // TODO: keep this in sync with NUML's live admissions notice.
  var numlAdmissionInfo = {
    lastDateToApply: "17 August 2026 (Phase-II)",
    entryTestDate: "Contact Admissions Office for Current Dates"
  };
  var numlQuickApplyEmail = "info@eduapply.online";
  var numlQuickApplyBound = false;
  var numlQaSelectedProgram = null;
  var numlQaSelectedFee = null;

  // Real NUML study routes, matching the "Explore NUML" section on this page.
  var numlPrograms = [
    "Undergraduate Programs",
    "Postgraduate Programs",
    "Doctoral Programs",
    "Language Courses",
    "Online Languages"
  ];
  // Generic, non-fabricated fee categories used across Pakistani university
  // admissions. No specific amounts are shown — only NUML admissions can
  // confirm exact figures.
  var numlFeeCategories = [
    { key:"regular", title:"Regular / Merit Seat", amount:"Confirm with NUML" },
    { key:"selffinance", title:"Self-Finance Seat", amount:"Confirm with NUML" }
  ];

  function numlSetupNotifyBar(){
    var lastDateEl = document.getElementById("numl-notify-lastdate");
    var entryTestEl = document.getElementById("numl-notify-entrytest");
    if(lastDateEl) lastDateEl.textContent = numlAdmissionInfo.lastDateToApply;
    if(entryTestEl) entryTestEl.textContent = numlAdmissionInfo.entryTestDate;
  }

  /* ---------- QUICK APPLY MODAL (4-step: Program → Fee → Application → Confirmation) ---------- */
  function numlQuickApplyGoTo(view){
    document.querySelectorAll("#numl-page .numl-qa-view").forEach(function(v){
      v.classList.toggle("numl-qa-view-active", v.getAttribute("data-numl-qa-view") === view);
    });
    document.querySelectorAll("#numl-page .numl-qa-step-dot").forEach(function(dot){
      var order = ["program","fee","form","confirm"];
      var dotStep = dot.getAttribute("data-numl-qa-dot");
      dot.classList.toggle("numl-qa-step-active", dotStep === view);
      dot.classList.toggle("numl-qa-step-done", order.indexOf(dotStep) < order.indexOf(view));
    });
  }

  function numlRenderProgramList(){
    var list = document.getElementById("numl-qa-program-list");
    if(!list) return;
    list.innerHTML = numlPrograms.map(function(p, i){
      return '<label class="numl-qa-program-opt" data-numl-qa-program="' + i + '">' +
        '<input type="radio" name="numlQaProgram" value="' + i + '">' +
        '<span>' + p + '</span></label>';
    }).join("");

    list.querySelectorAll(".numl-qa-program-opt").forEach(function(opt){
      opt.addEventListener("click", function(){
        list.querySelectorAll(".numl-qa-program-opt").forEach(function(o){ o.classList.remove("numl-qa-selected"); });
        opt.classList.add("numl-qa-selected");
        opt.querySelector("input").checked = true;
        numlQaSelectedProgram = numlPrograms[parseInt(opt.getAttribute("data-numl-qa-program"), 10)];
        var toFeeBtn = document.getElementById("numl-qa-to-fee");
        if(toFeeBtn) toFeeBtn.disabled = false;
      });
    });
  }

  function numlRenderFeeOptions(){
    var wrap = document.getElementById("numl-qa-fee-options");
    var label = document.getElementById("numl-qa-fee-program-label");
    if(label) label.textContent = numlQaSelectedProgram || "";
    if(!wrap) return;
    wrap.innerHTML = numlFeeCategories.map(function(f, i){
      return '<label class="numl-qa-fee-opt" data-numl-qa-fee="' + i + '">' +
        '<span class="numl-qa-fee-opt-left"><input type="radio" name="numlQaFee" value="' + i + '"><span class="numl-qa-fee-opt-title">' + f.title + '</span></span>' +
        '<span class="numl-qa-fee-opt-amount">' + f.amount + '</span></label>';
    }).join("");

    wrap.querySelectorAll(".numl-qa-fee-opt").forEach(function(opt){
      opt.addEventListener("click", function(){
        wrap.querySelectorAll(".numl-qa-fee-opt").forEach(function(o){ o.classList.remove("numl-qa-selected"); });
        opt.classList.add("numl-qa-selected");
        opt.querySelector("input").checked = true;
        numlQaSelectedFee = numlFeeCategories[parseInt(opt.getAttribute("data-numl-qa-fee"), 10)].title;
        var toFormBtn = document.getElementById("numl-qa-to-form");
        if(toFormBtn) toFormBtn.disabled = false;
      });
    });
  }

  function numlOpenQuickApply(){
    var overlay = document.getElementById("numl-qa-modal");
    if(!overlay) return;
    var form = document.getElementById("numl-qa-form");
    if(form) form.reset();
    document.querySelectorAll("#numl-qa-form .numl-mfield").forEach(function(f){ f.classList.remove("numl-merror"); });

    numlQaSelectedProgram = null;
    numlQaSelectedFee = null;
    var toFeeBtn = document.getElementById("numl-qa-to-fee");
    var toFormBtn = document.getElementById("numl-qa-to-form");
    if(toFeeBtn) toFeeBtn.disabled = true;
    if(toFormBtn) toFormBtn.disabled = true;

    numlRenderProgramList();
    numlQuickApplyGoTo("program");
    overlay.classList.add("numl-qa-open");
    overlay.setAttribute("aria-hidden", "false");
    document.body.style.overflow = "hidden";
  }
  function numlCloseQuickApply(){
    var overlay = document.getElementById("numl-qa-modal");
    if(!overlay) return;
    overlay.classList.remove("numl-qa-open");
    overlay.setAttribute("aria-hidden", "true");
    document.body.style.overflow = "";
  }

  function numlSetupQuickApply(){
    if(numlQuickApplyBound) return;
    numlQuickApplyBound = true;

    var overlay = document.getElementById("numl-qa-modal");
    var closeBtn = document.getElementById("numl-qa-close");
    var doneBtn = document.getElementById("numl-qa-done");
    var form = document.getElementById("numl-qa-form");
    var toFeeBtn = document.getElementById("numl-qa-to-fee");
    var toFormBtn = document.getElementById("numl-qa-to-form");
    var backProgramBtn = document.getElementById("numl-qa-back-program");
    var backFeeBtn = document.getElementById("numl-qa-back-fee");
    if(!overlay || !closeBtn || !form) return;

    document.querySelectorAll("#numl-page .numl-quickapply-trigger").forEach(function(trigger){
      trigger.addEventListener("click", function(e){
        e.preventDefault();
        window.location.href = "/admissions/apply?university=NUML";
      });
    });

    closeBtn.addEventListener("click", numlCloseQuickApply);
    if(doneBtn) doneBtn.addEventListener("click", numlCloseQuickApply);
    overlay.addEventListener("click", function(e){ if(e.target === overlay) numlCloseQuickApply(); });
    document.addEventListener("keydown", function(e){
      if(e.key === "Escape" && overlay.classList.contains("numl-qa-open")) numlCloseQuickApply();
    });

    if(toFeeBtn) toFeeBtn.addEventListener("click", function(){
      if(!numlQaSelectedProgram) return;
      numlRenderFeeOptions();
      numlQuickApplyGoTo("fee");
    });
    if(backProgramBtn) backProgramBtn.addEventListener("click", function(){ numlQuickApplyGoTo("program"); });
    if(toFormBtn) toFormBtn.addEventListener("click", function(){
      if(!numlQaSelectedFee) return;
      numlQuickApplyGoTo("form");
    });
    if(backFeeBtn) backFeeBtn.addEventListener("click", function(){ numlQuickApplyGoTo("fee"); });

    function setError(fieldEl, hasError){ if(fieldEl) fieldEl.classList.toggle("numl-merror", hasError); }
    function isValidEmail(v){ return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(v); }
    function isValidPhone(v){ var d = v.replace(/[^\d]/g,""); return d.length >= 10 && d.length <= 13; }
    function req(field, value, minLen){
      var el = form.querySelector('[data-numl-qafield="' + field + '"]');
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

      var phoneField = form.querySelector('[data-numl-qafield="phone"]');
      if(!isValidPhone(form.phone.value.trim())){ setError(phoneField, true); valid = false; } else { setError(phoneField, false); }

      var emailField = form.querySelector('[data-numl-qafield="email"]');
      if(!isValidEmail(form.email.value.trim())){ setError(emailField, true); valid = false; } else { setError(emailField, false); }

      if(!req("city", form.city.value, 2)) valid = false;
      if(!req("matricRoll", form.matricRoll.value, 1)) valid = false;
      if(!req("matricPct", form.matricPct.value, 1)) valid = false;
      if(!req("interRoll", form.interRoll.value, 1)) valid = false;
      if(!req("interPct", form.interPct.value, 1)) valid = false;

      if(!valid){
        var firstError = form.querySelector(".numl-mfield.numl-merror");
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

      var subject = "Admission Application — NUML (" + numlQaSelectedProgram + ")";
      var bodyLines = [
        "University: National University of Modern Languages",
        "Program: " + numlQaSelectedProgram,
        "Fee Category: " + numlQaSelectedFee,
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
      var mailtoUrl = "mailto:" + encodeURIComponent(numlQuickApplyEmail) + "?subject=" + encodeURIComponent(subject) + "&body=" + encodeURIComponent(bodyLines.join("\n"));

      window.location.href = mailtoUrl;

      var summaryEl = document.getElementById("numl-qa-confirm-summary");
      if(summaryEl){
        summaryEl.innerHTML =
          "<div><strong>Program:</strong> " + numlQaSelectedProgram + "</div>" +
          "<div><strong>Fee Category:</strong> " + numlQaSelectedFee + "</div>" +
          "<div><strong>Name:</strong> " + name + "</div>" +
          "<div><strong>Phone:</strong> " + phone + "</div>" +
          "<div><strong>Email:</strong> " + email + "</div>";
      }

      numlQuickApplyGoTo("confirm");
    });
  }

  /* ---------- WELCOME / ADMISSION POPUP (shows once per browser session) ---------- */
  function numlCloseWelcomePopup(){
    var overlay = document.getElementById("numl-welcome-modal");
    if(!overlay) return;
    overlay.classList.remove("numl-welcome-open");
    overlay.setAttribute("aria-hidden", "true");
    document.body.style.overflow = "";
  }
  function numlSetupWelcomePopup(){
    var overlay = document.getElementById("numl-welcome-modal");
    var closeBtn = document.getElementById("numl-welcome-close");
    var lastDateEl = document.getElementById("numl-welcome-lastdate");
    var entryTestEl = document.getElementById("numl-welcome-entrytest");
    if(!overlay || !closeBtn) return;

    if(lastDateEl) lastDateEl.textContent = numlAdmissionInfo.lastDateToApply;
    if(entryTestEl) entryTestEl.textContent = numlAdmissionInfo.entryTestDate;

    closeBtn.addEventListener("click", numlCloseWelcomePopup);
    overlay.addEventListener("click", function(e){ if(e.target === overlay) numlCloseWelcomePopup(); });
    document.addEventListener("keydown", function(e){
      if(e.key === "Escape" && overlay.classList.contains("numl-welcome-open")) numlCloseWelcomePopup();
    });

    var SESSION_KEY = "ccxSeenNumlWelcome";
    var alreadyShown = false;
    try { alreadyShown = window.sessionStorage.getItem(SESSION_KEY) === "1"; } catch(err){ alreadyShown = false; }

    if(!alreadyShown){
      window.setTimeout(function(){
        overlay.classList.add("numl-welcome-open");
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
  // NUML's real published general contact email (no dedicated admissions
  // address was confirmed from the source, so this is the closest real one).
  var numlDeptEmail = "info@numl.edu.pk";
  var numlDeptCurrent = null;

  function numlDeptGoToStep(step){
    document.querySelectorAll("#numl-page .numl-dept-view").forEach(function(view){
      view.classList.toggle("numl-dept-view-active", view.getAttribute("data-numl-dept-view") === String(step));
    });
    document.querySelectorAll("#numl-page .numl-dept-step-dot").forEach(function(dot){
      var dotStep = parseInt(dot.getAttribute("data-numl-dept-dot"), 10);
      dot.classList.toggle("numl-dept-step-active", dotStep === step);
      dot.classList.toggle("numl-dept-step-done", dotStep < step);
    });
  }

  function numlOpenDeptModal(programName){
    var overlay = document.getElementById("numl-dept-modal");
    if(!overlay) return;
    numlDeptCurrent = { program: programName };

    var tag1 = document.getElementById("numl-dept-tag-1");
    var tag2 = document.getElementById("numl-dept-tag-2");
    if(tag1) tag1.textContent = programName + " · NUML";
    if(tag2) tag2.textContent = programName + " · NUML";

    var form = document.getElementById("numl-dept-form");
    if(form) form.reset();
    document.querySelectorAll("#numl-dept-form .numl-mfield").forEach(function(f){ f.classList.remove("numl-merror"); });

    numlDeptGoToStep(1);
    overlay.classList.add("numl-dept-open");
    overlay.setAttribute("aria-hidden", "false");
    document.body.style.overflow = "hidden";
  }
  function numlCloseDeptModal(){
    var overlay = document.getElementById("numl-dept-modal");
    if(!overlay) return;
    overlay.classList.remove("numl-dept-open");
    overlay.setAttribute("aria-hidden", "true");
    document.body.style.overflow = "";
  }

  function numlSetupDeptModal(){
    var overlay = document.getElementById("numl-dept-modal");
    var closeBtn = document.getElementById("numl-dept-close");
    var toStep2 = document.getElementById("numl-dept-to-step2");
    var backStep1 = document.getElementById("numl-dept-back-step1");
    var doneBtn = document.getElementById("numl-dept-done");
    var form = document.getElementById("numl-dept-form");
    if(!overlay || !closeBtn || !form) return;

    document.querySelectorAll("#numl-page .numl-dept-trigger").forEach(function(trigger){
      trigger.addEventListener("click", function(e){
        e.preventDefault();
        var programName = trigger.getAttribute("data-numl-program") || "Program";
        window.location.href = "/admissions/apply?university=NUML&program=" + encodeURIComponent(programName);
      });
    });

    closeBtn.addEventListener("click", numlCloseDeptModal);
    if(doneBtn) doneBtn.addEventListener("click", numlCloseDeptModal);
    overlay.addEventListener("click", function(e){ if(e.target === overlay) numlCloseDeptModal(); });
    document.addEventListener("keydown", function(e){
      if(e.key === "Escape" && overlay.classList.contains("numl-dept-open")) numlCloseDeptModal();
    });
    if(toStep2) toStep2.addEventListener("click", function(){ numlDeptGoToStep(2); });
    if(backStep1) backStep1.addEventListener("click", function(){ numlDeptGoToStep(1); });

    function setError(fieldEl, hasError){ if(fieldEl) fieldEl.classList.toggle("numl-merror", hasError); }
    function isValidEmail(v){ return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(v); }
    function isValidPhone(v){ var d = v.replace(/[^\d]/g,""); return d.length >= 10 && d.length <= 13; }

    form.addEventListener("submit", function(e){
      e.preventDefault();
      var valid = true;

      var name = form.name.value.trim();
      var nameField = form.querySelector('[data-numl-dfield="name"]');
      if(name.length < 2){ setError(nameField, true); valid = false; } else { setError(nameField, false); }

      var phone = form.phone.value.trim();
      var phoneField = form.querySelector('[data-numl-dfield="phone"]');
      if(!isValidPhone(phone)){ setError(phoneField, true); valid = false; } else { setError(phoneField, false); }

      var email = form.email.value.trim();
      var emailField = form.querySelector('[data-numl-dfield="email"]');
      if(!isValidEmail(email)){ setError(emailField, true); valid = false; } else { setError(emailField, false); }

      var city = form.city.value.trim();
      var message = form.message.value.trim();

      if(!valid){
        var firstError = form.querySelector(".numl-mfield.numl-merror");
        if(firstError){ firstError.scrollIntoView({behavior:"smooth", block:"center"}); }
        return;
      }

      var info = numlDeptCurrent || { program:"" };
      var subject = "Admission Application — " + info.program + " (NUML)";
      var bodyLines = ["Program: " + info.program, "University: National University of Modern Languages", "Name: " + name, "Phone: " + phone, "Email: " + email];
      if(city) bodyLines.push("City: " + city);
      if(message) bodyLines.push("Message: " + message);
      var mailtoUrl = "mailto:" + encodeURIComponent(numlDeptEmail) + "?subject=" + encodeURIComponent(subject) + "&body=" + encodeURIComponent(bodyLines.join("\n"));

      window.location.href = mailtoUrl;

      var summaryEl = document.getElementById("numl-dept-summary");
      if(summaryEl){
        summaryEl.innerHTML =
          "<div><strong>Program:</strong> " + info.program + "</div>" +
          "<div><strong>Name:</strong> " + name + "</div>" +
          "<div><strong>Phone:</strong> " + phone + "</div>" +
          "<div><strong>Email:</strong> " + email + "</div>";
      }
      var fallbackEl = document.getElementById("numl-dept-fallback-email");
      if(fallbackEl) fallbackEl.textContent = "Send to: " + numlDeptEmail;

      numlDeptGoToStep(3);
    });
  }


  function numlSetupAdmissionModal(){
    var overlay = document.getElementById("numl-admission-modal");
    var closeBtn = document.getElementById("numl-modal-close");
    var form = document.getElementById("numl-admission-form");
    if(!overlay || !closeBtn || !form) return;

    // TODO: set NUML's real WhatsApp/admissions helpline number before going live
    var numlAdmissionWhatsapp = "<?php echo esc_js( ccx_whatsapp_number( 'NUML' ) ); ?>";

    function numlOpenModal(prefill){
      overlay.classList.add("numl-modal-open");
      overlay.setAttribute("aria-hidden", "false");
      document.body.style.overflow = "hidden";
      if(prefill && prefill.program) form.program.value = prefill.program;
      window.setTimeout(function(){ form.name.focus(); }, 250);
    }
    function numlCloseModal(){
      overlay.classList.remove("numl-modal-open");
      overlay.setAttribute("aria-hidden", "true");
      document.body.style.overflow = "";
    }

    document.querySelectorAll("#numl-page .numl-admission-trigger").forEach(function(trigger){
      trigger.addEventListener("click", function(e){
        e.preventDefault();
        window.location.href = "/admissions/apply?university=NUML";
      });
    });

    closeBtn.addEventListener("click", numlCloseModal);
    overlay.addEventListener("click", function(e){ if(e.target === overlay) numlCloseModal(); });
    document.addEventListener("keydown", function(e){
      if(e.key === "Escape" && overlay.classList.contains("numl-modal-open")) numlCloseModal();
    });

    function setError(fieldEl, hasError){ if(fieldEl) fieldEl.classList.toggle("numl-merror", hasError); }
    function isValidEmail(v){ return v === "" || /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(v); }
    function isValidPhone(v){ var d = v.replace(/[^\d]/g,""); return d.length >= 10 && d.length <= 13; }

    form.addEventListener("submit", function(e){
      e.preventDefault();
      var valid = true;

      var name = form.name.value.trim();
      var nameField = form.querySelector('[data-numl-field="name"]');
      if(name.length < 2){ setError(nameField, true); valid = false; } else { setError(nameField, false); }

      var phone = form.phone.value.trim();
      var phoneField = form.querySelector('[data-numl-field="phone"]');
      if(!isValidPhone(phone)){ setError(phoneField, true); valid = false; } else { setError(phoneField, false); }

      var email = form.email.value.trim();
      var emailField = form.querySelector('[data-numl-field="email"]');
      if(!isValidEmail(email)){ setError(emailField, true); valid = false; } else { setError(emailField, false); }

      var city = form.city.value.trim();
      var campus = form.campus.value.trim();

      var program = form.program.value.trim();
      var programField = form.querySelector('[data-numl-field="program"]');
      if(program.length < 2){ setError(programField, true); valid = false; } else { setError(programField, false); }

      var message = form.message.value.trim();

      if(!valid){
        var firstError = form.querySelector(".numl-mfield.numl-merror");
        if(firstError){ firstError.scrollIntoView({behavior:"smooth", block:"center"}); }
        return;
      }

      var lines = [
        "Hello, I would like to apply for admission at NUML.",
        "Name: " + name,
        "Phone: " + phone
      ];
      if(email) lines.push("Email: " + email);
      if(city) lines.push("City: " + city);
      if(campus) lines.push("Preferred Campus: " + campus);
      lines.push("Program of Interest: " + program);
      if(message) lines.push("Message: " + message);

      var waBase = numlAdmissionWhatsapp ? ("https://wa.me/" + numlAdmissionWhatsapp) : "https://wa.me/";
      var waUrl = waBase + "?text=" + encodeURIComponent(lines.join("\n"));

      window.open(waUrl, "_blank", "noopener");
      numlCloseModal();
      form.reset();
    });
  }

  function numlSetupMobileNav(){
    var btn = document.getElementById("numl-hamburger-btn");
    var nav = document.getElementById("numl-mobile-nav");
    if(!btn || !nav) return;
    btn.addEventListener("click", function(){
      var isOpen = nav.classList.toggle("numl-open");
      btn.classList.toggle("numl-active", isOpen);
      btn.setAttribute("aria-expanded", isOpen ? "true" : "false");
    });
  }

  function numlSetupScrollReveal(){
    var els = document.querySelectorAll("#numl-page .numl-reveal");
    if(!els.length) return;
    if("IntersectionObserver" in window){
      var io = new IntersectionObserver(function(entries){
        entries.forEach(function(entry){
          if(entry.isIntersecting){
            entry.target.classList.add("numl-in");
            io.unobserve(entry.target);
          }
        });
      }, {threshold:0.1, rootMargin:"0px 0px -60px 0px"});
      els.forEach(function(el){ io.observe(el); });
    } else {
      els.forEach(function(el){ el.classList.add("numl-in"); });
    }
  }

  function numlSetupFooterYear(){
    var el = document.getElementById("numl-year");
    if(el) el.textContent = new Date().getFullYear();
  }

  return { init: numlInit };
})();

if(document.readyState === "loading"){
  document.addEventListener("DOMContentLoaded", numlHomepage.init);
} else {
  numlHomepage.init();
}
</script>

<?php wp_footer(); ?>
</body>
</html>
