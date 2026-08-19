<?php
/**
 * Template Name: EduApply — Programs
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Programs | Explore University Programs</title>
<meta name="description" content="Explore academic programs across six universities and find study opportunities that match your interests and future goals." />

<!--
  Programs discovery page for the MAIN MARKETING WEBSITE only (/programs).
  Reuses the same "ccx-" namespacing, design tokens, header, footer, WhatsApp
  button and admission modal as the index / about / universities pages.

  ============================================================
  DATA HONESTY NOTE — please read before editing the dataset
  ============================================================
  Every record in ccxPrograms below is drawn from what each university
  actually publishes on its own site. Because the six universities publish
  at different levels of detail, records come in two granularities, and the
  `granularity` field makes this explicit in the UI:

    - "program"  → a specific named degree the university lists publicly.
                   Used for BIMS, UOR and TMUC, which publish full program
                   lists.
    - "area"     → a faculty / school / study-level entry, used for UCP,
                   NUML and Bahria. Their homepages publish faculties and
                   degree levels rather than a complete public list of
                   individual program names, so listing invented degree
                   titles for them would be fabrication. These cards link
                   through to the university page where the full catalogue
                   lives.

  No durations, fees, eligibility, accreditation, rankings or career
  outcomes are included anywhere, because none of those were verifiable
  from the source sites. Do not add them without a verified source.
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

#ccx-page .ccx-section-head{max-width:640px; margin-bottom:44px;}
#ccx-page .ccx-section-head h2{
  font-family:var(--ccx-font-display); font-weight:600; font-size:clamp(28px,3.8vw,42px);
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
#ccx-page .ccx-pg-hero{position:relative; min-height:70vh; display:flex; align-items:flex-end; overflow:hidden; background:var(--ccx-navy-950);}
#ccx-page .ccx-pg-hero-media{position:absolute; inset:0; display:grid; grid-template-columns:1fr 1fr 1fr; gap:2px;}
#ccx-page .ccx-pg-hero-media img{width:100%; height:100%; object-fit:cover;}
#ccx-page .ccx-pg-hero-media::after{
  content:""; position:absolute; inset:0;
  background:linear-gradient(0deg, rgba(8,13,24,0.95) 0%, rgba(8,13,24,0.74) 42%, rgba(8,13,24,0.42) 74%, rgba(8,13,24,0.5) 100%);
}
#ccx-page .ccx-pg-hero-content{position:relative; z-index:1; width:100%; padding:150px 0 76px;}
#ccx-page .ccx-pg-hero h1{
  font-family:var(--ccx-font-display); font-weight:600; font-size:clamp(34px,5.2vw,58px); line-height:1.08;
  color:#fff; max-width:18ch; letter-spacing:-0.01em;
}
#ccx-page .ccx-pg-hero-sub{margin-top:22px; font-size:clamp(15.5px,1.5vw,18px); line-height:1.65; color:rgba(255,255,255,0.82); max-width:58ch;}
#ccx-page .ccx-pg-hero-actions{display:flex; gap:16px; margin-top:34px; flex-wrap:wrap;}
@media (max-width:760px){#ccx-page .ccx-pg-hero-media{grid-template-columns:1fr;} #ccx-page .ccx-pg-hero-media img:not(:first-child){display:none;}}

/* ============================================================
   INTRO
   ============================================================ */
#ccx-page .ccx-pg-intro{padding:88px 0 46px; text-align:center;}

/* ============================================================
   SEARCH + FILTER SHELL
   ============================================================ */
#ccx-page .ccx-pg-explore{padding:0 0 100px;}
#ccx-page .ccx-pg-search-wrap{
  background:#fff; border:1px solid var(--ccx-paper-dim); border-radius:var(--ccx-radius-l);
  padding:clamp(24px,3vw,36px); box-shadow:var(--ccx-shadow-s); margin-bottom:36px;
}
#ccx-page .ccx-pg-search-wrap h2{
  font-family:var(--ccx-font-display); font-size:clamp(22px,2.6vw,28px); font-weight:600; color:var(--ccx-navy-900);
  margin-bottom:18px; text-align:center;
}
#ccx-page .ccx-pg-search-row{display:flex; align-items:center; gap:10px; max-width:660px; margin:0 auto 14px;}
#ccx-page .ccx-pg-search-input{
  flex:1; display:flex; align-items:center; gap:10px; border:1.5px solid var(--ccx-paper-dim);
  border-radius:999px; padding:13px 20px; background:var(--ccx-paper); transition:border-color .2s ease, background .2s ease;
}
#ccx-page .ccx-pg-search-input:focus-within{border-color:var(--ccx-gold); background:#fff;}
#ccx-page .ccx-pg-search-input svg{color:var(--ccx-ink-soft); flex-shrink:0;}
#ccx-page .ccx-pg-search-input input{border:none; outline:none; background:transparent; font-family:inherit; font-size:15px; color:var(--ccx-ink); width:100%;}
#ccx-page .ccx-pg-search-clear{
  flex-shrink:0; width:40px; height:40px; border-radius:50%; background:var(--ccx-paper); color:var(--ccx-ink-soft);
  display:none; align-items:center; justify-content:center; font-size:18px; transition:background .2s ease, color .2s ease;
}
#ccx-page .ccx-pg-search-clear.ccx-show{display:flex;}
#ccx-page .ccx-pg-search-clear:hover{background:var(--ccx-navy-900); color:#fff;}
#ccx-page .ccx-pg-search-hint{text-align:center; font-size:12.5px; color:var(--ccx-ink-soft);}
#ccx-page .ccx-pg-search-hint button{
  font-size:12.5px; font-weight:700; color:var(--ccx-teal); text-decoration:underline; padding:0 3px;
}
#ccx-page .ccx-pg-search-hint button:hover{color:var(--ccx-teal-bright);}

#ccx-page .ccx-pg-layout{display:grid; grid-template-columns:266px 1fr; gap:34px; align-items:start;}
@media (max-width:980px){#ccx-page .ccx-pg-layout{grid-template-columns:1fr;}}

/* ---- Filter sidebar ---- */
#ccx-page .ccx-pg-filters{
  background:#fff; border:1px solid var(--ccx-paper-dim); border-radius:var(--ccx-radius-m);
  padding:26px 22px; box-shadow:var(--ccx-shadow-s); position:sticky; top:100px;
}
#ccx-page .ccx-pg-filters h3{
  font-family:var(--ccx-font-mono); font-size:11.5px; letter-spacing:0.1em; text-transform:uppercase;
  color:var(--ccx-gold-dim); margin-bottom:14px;
}
#ccx-page .ccx-pg-filter-group{padding-bottom:22px; margin-bottom:22px; border-bottom:1px solid var(--ccx-paper-dim);}
#ccx-page .ccx-pg-filter-group:last-of-type{border-bottom:none; margin-bottom:14px; padding-bottom:0;}
#ccx-page .ccx-pg-filter-opt{
  display:flex; align-items:center; gap:10px; padding:8px 0; font-size:14px; color:var(--ccx-ink); cursor:pointer;
}
#ccx-page .ccx-pg-filter-opt input{width:17px; height:17px; accent-color:var(--ccx-gold); flex-shrink:0; cursor:pointer;}
#ccx-page .ccx-pg-filter-count{margin-left:auto; font-family:var(--ccx-font-mono); font-size:11.5px; color:var(--ccx-ink-soft);}
#ccx-page .ccx-pg-clear-all{
  width:100%; padding:11px; border-radius:999px; border:1.5px solid rgba(16,27,50,0.2);
  font-size:13px; font-weight:700; color:var(--ccx-navy-900); transition:background .2s ease, color .2s ease;
}
#ccx-page .ccx-pg-clear-all:hover{background:var(--ccx-navy-900); color:#fff;}

/* ---- Mobile filter drawer ---- */
#ccx-page .ccx-pg-filter-toggle{
  display:none; width:100%; align-items:center; justify-content:center; gap:9px; padding:14px;
  border-radius:999px; background:var(--ccx-navy-900); color:#fff; font-size:13.5px; font-weight:700;
  margin-bottom:20px;
}
@media (max-width:980px){
  #ccx-page .ccx-pg-filter-toggle{display:flex;}
  #ccx-page .ccx-pg-filters{
    position:fixed; inset:auto 0 0 0; z-index:960; max-height:82vh; overflow-y:auto;
    border-radius:var(--ccx-radius-l) var(--ccx-radius-l) 0 0; box-shadow:var(--ccx-shadow-l);
    transform:translateY(102%); transition:transform .35s cubic-bezier(.2,.8,.2,1); padding-bottom:100px;
  }
  #ccx-page .ccx-pg-filters.ccx-open{transform:translateY(0);}
  #ccx-page .ccx-pg-filters-backdrop{
    position:fixed; inset:0; z-index:955; background:rgba(10,17,32,0.5); opacity:0; visibility:hidden;
    transition:opacity .3s ease, visibility .3s ease;
  }
  #ccx-page .ccx-pg-filters-backdrop.ccx-open{opacity:1; visibility:visible;}
  #ccx-page .ccx-pg-filters-apply{
    position:sticky; bottom:0; margin:18px -22px -100px; padding:16px 22px 22px;
    background:#fff; border-top:1px solid var(--ccx-paper-dim); display:block !important;
  }
}
#ccx-page .ccx-pg-filters-apply{display:none;}
#ccx-page .ccx-pg-filters-backdrop{display:none;}
@media (max-width:980px){#ccx-page .ccx-pg-filters-backdrop{display:block;}}

/* ---- Results header + active chips ---- */
#ccx-page .ccx-pg-results-head{
  display:flex; align-items:center; justify-content:space-between; gap:16px; flex-wrap:wrap; margin-bottom:18px;
}
#ccx-page .ccx-pg-results-count{font-size:14px; font-weight:600; color:var(--ccx-ink-soft);}
#ccx-page .ccx-pg-results-count strong{color:var(--ccx-navy-900);}
#ccx-page .ccx-pg-sort{display:flex; align-items:center; gap:9px; font-size:13px; color:var(--ccx-ink-soft);}
#ccx-page .ccx-pg-sort select{
  border:1.5px solid var(--ccx-paper-dim); border-radius:999px; padding:9px 14px; font-family:inherit;
  font-size:13px; color:var(--ccx-ink); background:#fff; cursor:pointer;
}
#ccx-page .ccx-pg-sort select:focus{outline:none; border-color:var(--ccx-gold);}

#ccx-page .ccx-pg-chips{display:flex; flex-wrap:wrap; gap:8px; margin-bottom:22px;}
#ccx-page .ccx-pg-chip{
  display:inline-flex; align-items:center; gap:8px; padding:7px 14px; border-radius:999px;
  background:var(--ccx-navy-900); color:#fff; font-size:12.5px; font-weight:600;
}
#ccx-page .ccx-pg-chip button{color:rgba(255,255,255,0.7); font-size:15px; line-height:1; padding:0 2px;}
#ccx-page .ccx-pg-chip button:hover{color:#fff;}

/* ---- Program grid ---- */
#ccx-page .ccx-pg-grid{display:grid; grid-template-columns:repeat(2,1fr); gap:22px;}
@media (min-width:1240px){#ccx-page .ccx-pg-grid{grid-template-columns:repeat(3,1fr);}}
@media (max-width:640px){#ccx-page .ccx-pg-grid{grid-template-columns:1fr;}}

#ccx-page .ccx-pg-card{
  background:#fff; border:1px solid var(--ccx-paper-dim); border-radius:var(--ccx-radius-m);
  padding:24px 22px 22px; display:flex; flex-direction:column;
  transition:transform .3s ease, box-shadow .3s ease, border-color .3s ease;
}
#ccx-page .ccx-pg-card:hover{transform:translateY(-5px); box-shadow:var(--ccx-shadow-m); border-color:transparent;}
#ccx-page .ccx-pg-card-top{display:flex; align-items:center; gap:12px; margin-bottom:16px;}
#ccx-page .ccx-pg-uni-badge{
  width:44px; height:44px; border-radius:11px; background:#fff; border:1px solid var(--ccx-paper-dim);
  display:flex; align-items:center; justify-content:center; padding:6px; flex-shrink:0;
}
#ccx-page .ccx-pg-uni-badge img{width:100%; height:100%; object-fit:contain;}
#ccx-page .ccx-pg-uni-badge.ccx-pg-mono{
  background:linear-gradient(150deg, var(--ccx-pg-accent, var(--ccx-gold)), var(--ccx-navy-950));
  border-color:transparent; font-family:var(--ccx-font-display); font-weight:700; font-size:13px; color:#fff;
}
#ccx-page .ccx-pg-uni-name{font-size:13px; font-weight:700; color:var(--ccx-navy-900); line-height:1.3;}
#ccx-page .ccx-pg-uni-loc{font-size:11.5px; color:var(--ccx-ink-soft); margin-top:2px;}
#ccx-page .ccx-pg-card h3{
  font-family:var(--ccx-font-display); font-size:17.5px; font-weight:600; color:var(--ccx-navy-900);
  line-height:1.32; margin-bottom:12px;
}
#ccx-page .ccx-pg-title-btn{
  font-family:inherit; font-size:inherit; font-weight:inherit; color:inherit; text-align:left;
  background:none; border:none; padding:0; cursor:pointer; transition:color .2s ease;
}
#ccx-page .ccx-pg-title-btn:hover{color:var(--ccx-teal);}
#ccx-page .ccx-pg-meta{display:flex; flex-wrap:wrap; gap:7px; margin-bottom:14px;}
#ccx-page .ccx-pg-meta span{
  font-size:11.5px; font-weight:600; color:var(--ccx-navy-800); background:var(--ccx-paper);
  border-radius:999px; padding:5px 11px;
}
#ccx-page .ccx-pg-meta span.ccx-pg-meta-area{background:rgba(31,122,106,0.1); color:var(--ccx-teal);}
#ccx-page .ccx-pg-card p{font-size:13.5px; line-height:1.6; color:var(--ccx-ink-soft); margin-bottom:20px; flex:1;}
#ccx-page .ccx-pg-card-actions{display:flex; flex-wrap:wrap; gap:10px; align-items:center; margin-top:auto;}
#ccx-page .ccx-pg-card-link{
  display:inline-flex; align-items:center; gap:8px; font-size:13px; font-weight:700; color:var(--ccx-teal);
}
#ccx-page .ccx-pg-card-link:hover{color:var(--ccx-teal-bright);}
#ccx-page .ccx-pg-card-link .ccx-arrow{transition:transform .3s ease;}
#ccx-page .ccx-pg-card:hover .ccx-pg-card-link .ccx-arrow{transform:translateX(5px);}
#ccx-page .ccx-pg-card-inquire{
  font-size:12.5px; font-weight:700; color:var(--ccx-navy-800); padding:8px 15px; border-radius:999px;
  border:1.5px solid rgba(16,27,50,0.18); transition:background .2s ease, color .2s ease;
}
#ccx-page .ccx-pg-card-inquire:hover{background:var(--ccx-navy-900); color:#fff;}
#ccx-page .ccx-pg-granularity-note{
  font-size:11.5px; color:var(--ccx-gold-dim); background:rgba(201,151,46,0.09);
  border-radius:8px; padding:9px 12px; margin-bottom:16px; line-height:1.5;
}

/* ---- No results / skeleton ---- */
#ccx-page .ccx-pg-empty{
  display:none; text-align:center; padding:70px 24px; background:#fff; border:1.5px dashed var(--ccx-paper-dim);
  border-radius:var(--ccx-radius-m);
}
#ccx-page .ccx-pg-empty.ccx-show{display:block;}
#ccx-page .ccx-pg-empty svg{color:var(--ccx-ink-soft); margin-bottom:18px;}
#ccx-page .ccx-pg-empty h3{font-family:var(--ccx-font-display); font-size:21px; font-weight:600; color:var(--ccx-navy-900); margin-bottom:10px;}
#ccx-page .ccx-pg-empty p{font-size:14.5px; color:var(--ccx-ink-soft); margin-bottom:22px; max-width:38ch; margin-left:auto; margin-right:auto;}

#ccx-page .ccx-pg-skeleton{display:grid; grid-template-columns:repeat(2,1fr); gap:22px;}
@media (min-width:1240px){#ccx-page .ccx-pg-skeleton{grid-template-columns:repeat(3,1fr);}}
@media (max-width:640px){#ccx-page .ccx-pg-skeleton{grid-template-columns:1fr;}}
#ccx-page .ccx-pg-skeleton.ccx-hide{display:none;}
#ccx-page .ccx-pg-skel-card{background:#fff; border:1px solid var(--ccx-paper-dim); border-radius:var(--ccx-radius-m); padding:24px 22px;}
#ccx-page .ccx-pg-skel-line{background:linear-gradient(90deg, var(--ccx-paper-dim) 25%, var(--ccx-paper) 50%, var(--ccx-paper-dim) 75%); background-size:200% 100%; animation:ccxShimmer 1.4s infinite; border-radius:6px;}
@keyframes ccxShimmer{0%{background-position:200% 0;} 100%{background-position:-200% 0;}}
#ccx-page .ccx-pg-skel-badge{width:44px; height:44px; border-radius:11px; margin-bottom:16px;}
#ccx-page .ccx-pg-skel-title{height:18px; width:80%; margin-bottom:12px;}
#ccx-page .ccx-pg-skel-meta{height:12px; width:55%; margin-bottom:16px;}
#ccx-page .ccx-pg-skel-text{height:11px; width:100%; margin-bottom:8px;}
#ccx-page .ccx-pg-skel-text:last-child{width:65%;}

/* ============================================================
   STUDY AREA GRID
   ============================================================ */
#ccx-page .ccx-pg-areas{padding:100px 0; background:var(--ccx-navy-950);}
#ccx-page .ccx-pg-areas .ccx-section-head h2, #ccx-page .ccx-pg-areas .ccx-eyebrow{color:#fff;}
#ccx-page .ccx-pg-areas .ccx-section-head p{color:rgba(255,255,255,0.62);}
#ccx-page .ccx-pg-areas-grid{display:grid; grid-template-columns:repeat(4,1fr); gap:18px;}
#ccx-page .ccx-pg-area-card{
  background:var(--ccx-navy-900); border:1px solid rgba(255,255,255,0.08); border-radius:var(--ccx-radius-m);
  padding:28px 24px; text-align:left; transition:background .3s ease, transform .3s ease; cursor:pointer;
}
#ccx-page .ccx-pg-area-card:hover{background:var(--ccx-navy-800); transform:translateY(-5px);}
#ccx-page .ccx-pg-area-icon{
  width:44px; height:44px; border-radius:11px; background:rgba(201,151,46,0.14); color:var(--ccx-gold-bright);
  display:flex; align-items:center; justify-content:center; margin-bottom:18px;
}
#ccx-page .ccx-pg-area-card h3{font-family:var(--ccx-font-display); font-size:16.5px; font-weight:600; color:#fff; margin-bottom:8px;}
#ccx-page .ccx-pg-area-card p{font-size:12.5px; line-height:1.55; color:rgba(255,255,255,0.6); margin-bottom:12px;}
#ccx-page .ccx-pg-area-count{font-family:var(--ccx-font-mono); font-size:11.5px; color:var(--ccx-gold-bright); letter-spacing:0.04em;}
@media (max-width:1024px){#ccx-page .ccx-pg-areas-grid{grid-template-columns:repeat(2,1fr);}}
@media (max-width:520px){#ccx-page .ccx-pg-areas-grid{grid-template-columns:1fr;}}

/* ============================================================
   COMPARE + JOURNEY
   ============================================================ */
#ccx-page .ccx-pg-compare{padding:90px 0; text-align:center;}
#ccx-page .ccx-pg-journey{padding:100px 0; background:var(--ccx-paper-dim);}
#ccx-page .ccx-pg-journey-grid{display:grid; grid-template-columns:repeat(4,1fr); gap:22px;}
#ccx-page .ccx-pg-journey-step{background:#fff; border-radius:var(--ccx-radius-m); padding:28px 22px; box-shadow:var(--ccx-shadow-s);}
#ccx-page .ccx-pg-journey-num{font-family:var(--ccx-font-display); font-weight:600; font-size:30px; color:var(--ccx-gold); margin-bottom:14px; display:block;}
#ccx-page .ccx-pg-journey-step h3{font-family:var(--ccx-font-display); font-size:16.5px; font-weight:600; color:var(--ccx-navy-900); margin-bottom:8px;}
#ccx-page .ccx-pg-journey-step a, #ccx-page .ccx-pg-journey-step button{
  font-size:12.5px; font-weight:700; color:var(--ccx-teal); display:inline-flex; align-items:center; gap:6px; margin-top:4px;
}
#ccx-page .ccx-pg-journey-step a:hover, #ccx-page .ccx-pg-journey-step button:hover{color:var(--ccx-teal-bright);}
@media (max-width:900px){#ccx-page .ccx-pg-journey-grid{grid-template-columns:repeat(2,1fr);}}
@media (max-width:520px){#ccx-page .ccx-pg-journey-grid{grid-template-columns:1fr;}}

/* ============================================================
   LEAD CTA
   ============================================================ */
#ccx-page .ccx-pg-lead-cta{padding:120px 0; text-align:center; background:linear-gradient(135deg, var(--ccx-navy-950), var(--ccx-navy-800));}
#ccx-page .ccx-pg-lead-cta h2{font-family:var(--ccx-font-display); font-weight:600; color:#fff; font-size:clamp(28px,4vw,44px); margin-bottom:18px; letter-spacing:-0.01em;}
#ccx-page .ccx-pg-lead-cta p{color:rgba(255,255,255,0.72); font-size:16px; max-width:52ch; margin:0 auto 34px; line-height:1.65;}

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
@media (max-width:640px){#ccx-page .ccx-whatsapp-float{right:16px; bottom:88px; width:54px; height:54px;} #ccx-page .ccx-wa-tooltip{display:none;}}

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

/* ============================================================
   PROGRAM/DEPARTMENT MULTI-STEP MODAL (Fee Structure → Application → Confirmation)
   Namespaced separately from the admission-inquiry modal above so both
   components can exist on the same page without any class/id collisions.
   ============================================================ */
#ccx-page .ccx-dept-overlay{
  position:fixed; inset:0; z-index:2100; display:flex; align-items:center; justify-content:center;
  padding:20px; background:rgba(10,17,32,0.62); backdrop-filter:blur(4px);
  opacity:0; visibility:hidden; transition:opacity .25s ease, visibility .25s ease;
}
#ccx-page .ccx-dept-overlay.ccx-dept-open{opacity:1; visibility:visible;}
#ccx-page .ccx-dept-panel{
  position:relative; width:100%; max-width:600px; max-height:90vh; overflow-y:auto;
  background:#fff; border-radius:var(--ccx-radius-l); box-shadow:var(--ccx-shadow-l);
  padding:clamp(26px,4vw,42px); transform:translateY(16px); transition:transform .25s ease;
}
#ccx-page .ccx-dept-overlay.ccx-dept-open .ccx-dept-panel{transform:translateY(0);}
#ccx-page .ccx-dept-close{
  position:absolute; top:16px; right:16px; width:36px; height:36px; border-radius:50%;
  background:var(--ccx-paper); color:var(--ccx-navy-900); display:flex; align-items:center; justify-content:center;
  font-size:20px; line-height:1; transition:background .2s ease; z-index:2;
}
#ccx-page .ccx-dept-close:hover{background:var(--ccx-paper-dim);}

#ccx-page .ccx-dept-steps{display:flex; align-items:center; gap:8px; margin-bottom:24px; padding-right:30px;}
#ccx-page .ccx-dept-step-dot{
  display:flex; align-items:center; gap:8px; font-family:var(--ccx-font-mono); font-size:11px; font-weight:600;
  color:var(--ccx-ink-soft);
}
#ccx-page .ccx-dept-step-dot .ccx-num{
  width:24px; height:24px; border-radius:50%; background:var(--ccx-paper-dim); color:var(--ccx-ink-soft);
  display:flex; align-items:center; justify-content:center; font-size:11px; font-weight:700; transition:background .2s ease, color .2s ease;
}
#ccx-page .ccx-dept-step-dot.ccx-dept-step-active .ccx-num{background:var(--ccx-gold); color:var(--ccx-navy-950);}
#ccx-page .ccx-dept-step-dot.ccx-dept-step-done .ccx-num{background:var(--ccx-teal); color:#fff;}
#ccx-page .ccx-dept-step-line{flex:1; height:1px; background:var(--ccx-paper-dim);}

#ccx-page .ccx-dept-view{display:none;}
#ccx-page .ccx-dept-view.ccx-dept-view-active{display:block;}
#ccx-page .ccx-dept-header{margin-bottom:20px;}
#ccx-page .ccx-dept-header h3{font-family:var(--ccx-font-display); font-size:clamp(19px,2.4vw,23px); font-weight:600; color:var(--ccx-navy-900);}
#ccx-page .ccx-dept-header p{margin-top:6px; font-size:13.5px; color:var(--ccx-ink-soft); line-height:1.5;}
#ccx-page .ccx-dept-program-tag{
  display:inline-flex; align-items:center; gap:8px; font-size:12px; font-weight:700; color:var(--ccx-teal);
  background:rgba(31,122,106,0.1); padding:6px 13px; border-radius:999px; margin-bottom:14px;
}

/* Step 1 — Fee structure (no fabricated figures) */
#ccx-page .ccx-dept-fee-note{
  font-size:13px; line-height:1.65; color:var(--ccx-ink-soft); background:var(--ccx-paper);
  border-left:3px solid var(--ccx-gold); border-radius:0 8px 8px 0; padding:14px 16px; margin-bottom:18px;
}
#ccx-page .ccx-dept-fee-table{width:100%; border-collapse:collapse; margin-bottom:22px; border:1px solid var(--ccx-paper-dim); border-radius:10px; overflow:hidden;}
#ccx-page .ccx-dept-fee-table tr{border-bottom:1px solid var(--ccx-paper-dim);}
#ccx-page .ccx-dept-fee-table tr:last-child{border-bottom:none;}
#ccx-page .ccx-dept-fee-table td{padding:12px 16px; font-size:13.5px;}
#ccx-page .ccx-dept-fee-table td:first-child{font-weight:600; color:var(--ccx-navy-900); width:55%;}
#ccx-page .ccx-dept-fee-table td:last-child{color:var(--ccx-ink-soft); text-align:right;}
#ccx-page .ccx-dept-fee-actions{display:flex; gap:12px; flex-wrap:wrap;}

/* Step 2 — Application form */
#ccx-page .ccx-dept-form-grid{display:grid; grid-template-columns:1fr 1fr; gap:14px 16px; margin-bottom:18px;}
#ccx-page .ccx-dept-form-grid .ccx-field.ccx-full{grid-column:1/-1;}
@media (max-width:480px){#ccx-page .ccx-dept-form-grid{grid-template-columns:1fr;}}
#ccx-page .ccx-dept-form-actions{display:flex; gap:12px;}
#ccx-page .ccx-dept-form-actions .ccx-btn{flex:1;}

/* Step 3 — Confirmation */
#ccx-page .ccx-dept-confirm{text-align:center; padding:10px 0 4px;}
#ccx-page .ccx-dept-confirm .ccx-check{
  width:60px; height:60px; border-radius:50%; background:rgba(31,122,106,0.1); color:var(--ccx-teal);
  display:flex; align-items:center; justify-content:center; margin:0 auto 18px;
}
#ccx-page .ccx-dept-confirm h3{font-family:var(--ccx-font-display); font-size:22px; font-weight:600; color:var(--ccx-navy-900); margin-bottom:10px;}
#ccx-page .ccx-dept-confirm p{font-size:13.5px; color:var(--ccx-ink-soft); line-height:1.65; max-width:42ch; margin:0 auto 18px;}
#ccx-page .ccx-dept-confirm-summary{
  background:var(--ccx-paper); border-radius:10px; padding:16px 18px; text-align:left; margin-bottom:20px; font-size:13px; line-height:1.9;
}
#ccx-page .ccx-dept-confirm-summary strong{color:var(--ccx-navy-900);}
#ccx-page .ccx-dept-fallback{font-size:12px; color:var(--ccx-ink-soft); margin-top:4px;}
</style>
<?php wp_head(); ?>
</head>
<body>

<div id="ccx-page">

<!-- ============================================================
     HEADER ("Programs" active)
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
      <a href="/programs" class="ccx-nav-active" aria-current="page">Programs</a>
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
    <a href="/universities">Universities</a>
    <a href="/programs" class="ccx-nav-active" aria-current="page">Programs</a>
    <a href="/#ccx-why">Why Choose Us</a>
    <a href="/admissions">Admissions</a>
    <a href="/#ccx-contact">Contact</a>
  </nav>
  <a href="#" class="ccx-btn ccx-btn-gold ccx-btn-block ccx-admission-trigger">Admission Now</a>
</div>

<!-- ============================================================
     HERO
     ============================================================ -->
<section class="ccx-pg-hero">
  <div class="ccx-pg-hero-media">
    <img src="https://numl.edu.pk/templates/template10/images/numl_mainBldg.jpg" alt="Students studying course material together">
    <img src="https://www.uor.edu.pk/frontend/academics/img/about/intro.png" alt="Computing and technology study environment">
    <img src="https://www.bahria.edu.pk/Content/images/main/main_campus.jpg" alt="Students working in a laboratory">
  </div>
  <div class="ccx-container ccx-pg-hero-content">
    <p class="ccx-eyebrow ccx-on-dark">Academic Programs</p>
    <h1>Find The Right Program For Your Future</h1>
    <p class="ccx-pg-hero-sub">Explore academic opportunities across our university network and discover programs that match your interests, ambitions, and career goals.</p>
    <div class="ccx-pg-hero-actions">
      <a href="/universities" class="ccx-btn ccx-btn-gold">Explore Universities</a>
      <a href="/admissions" class="ccx-btn ccx-btn-outline">Start Your Application</a>
    </div>
  </div>
</section>

<!-- ============================================================
     INTRO
     ============================================================ -->
<section class="ccx-pg-intro">
  <div class="ccx-container">
    <div class="ccx-section-head ccx-center ccx-reveal">
      <p class="ccx-eyebrow" style="margin-left:auto; margin-right:auto; justify-content:center;">Across The Network</p>
      <h2>Explore Programs Across Multiple Universities</h2>
      <p>From business and computing to engineering, languages, professional studies, and other academic fields, explore different opportunities across our university network.</p>
    </div>
  </div>
</section>

<!-- ============================================================
     SEARCH + FILTERS + RESULTS
     ============================================================ -->
<section class="ccx-pg-explore" id="ccx-pg-explore">
  <div class="ccx-container">

    <div class="ccx-pg-search-wrap ccx-reveal">
      <h2>What Do You Want To Study?</h2>
      <div class="ccx-pg-search-row">
        <label class="ccx-sr-only" for="ccx-pg-search">Search programs, subjects, or fields</label>
        <div class="ccx-pg-search-input">
          <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="7"/><path d="M21 21l-4.35-4.35"/></svg>
          <input type="text" id="ccx-pg-search" placeholder="Search programs, subjects, or fields..." autocomplete="off">
        </div>
        <button type="button" class="ccx-pg-search-clear" id="ccx-pg-search-clear" aria-label="Clear search">&times;</button>
      </div>
      <p class="ccx-pg-search-hint">
        Try:
        <button type="button" data-ccx-example="Business">Business</button>·
        <button type="button" data-ccx-example="Computer Science">Computer Science</button>·
        <button type="button" data-ccx-example="Engineering">Engineering</button>·
        <button type="button" data-ccx-example="English">English</button>·
        <button type="button" data-ccx-example="Management">Management</button>
      </p>
    </div>

    <button type="button" class="ccx-pg-filter-toggle" id="ccx-pg-filter-toggle" aria-expanded="false" aria-controls="ccx-pg-filters">
      <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 6h16M7 12h10M10 18h4"/></svg>
      Filter Programs
    </button>

    <div class="ccx-pg-filters-backdrop" id="ccx-pg-filters-backdrop"></div>

    <div class="ccx-pg-layout">
      <!-- FILTER SIDEBAR -->
      <aside class="ccx-pg-filters" id="ccx-pg-filters" aria-label="Program filters">
        <div class="ccx-pg-filter-group">
          <h3>University</h3>
          <div id="ccx-pg-filter-university"></div>
        </div>
        <div class="ccx-pg-filter-group">
          <h3>Study Area</h3>
          <div id="ccx-pg-filter-area"></div>
        </div>
        <div class="ccx-pg-filter-group">
          <h3>Level</h3>
          <div id="ccx-pg-filter-level"></div>
        </div>
        <button type="button" class="ccx-pg-clear-all" id="ccx-pg-clear-all">Clear All Filters</button>
        <div class="ccx-pg-filters-apply">
          <button type="button" class="ccx-btn ccx-btn-gold ccx-btn-block" id="ccx-pg-apply-filters">Apply Filters</button>
        </div>
      </aside>

      <!-- RESULTS -->
      <div>
        <div class="ccx-pg-results-head">
          <p class="ccx-pg-results-count" id="ccx-pg-count" role="status" aria-live="polite"></p>
          <div class="ccx-pg-sort">
            <label for="ccx-pg-sort-select">Sort by</label>
            <select id="ccx-pg-sort-select">
              <option value="name">Program Name</option>
              <option value="university">University</option>
            </select>
          </div>
        </div>

        <div class="ccx-pg-chips" id="ccx-pg-chips"></div>

        <p class="ccx-pg-granularity-note">
          Some universities publish a full list of individual degree titles; others publish faculties and degree levels instead. Entries marked <strong>Faculty / Level</strong> link through to that university's page, where the full catalogue is listed. Nothing here is invented — confirm details directly with the university before applying.
        </p>

        <!-- Skeleton loading state -->
        <div class="ccx-pg-skeleton" id="ccx-pg-skeleton" aria-hidden="true">
          <div class="ccx-pg-skel-card"><div class="ccx-pg-skel-line ccx-pg-skel-badge"></div><div class="ccx-pg-skel-line ccx-pg-skel-title"></div><div class="ccx-pg-skel-line ccx-pg-skel-meta"></div><div class="ccx-pg-skel-line ccx-pg-skel-text"></div><div class="ccx-pg-skel-line ccx-pg-skel-text"></div></div>
          <div class="ccx-pg-skel-card"><div class="ccx-pg-skel-line ccx-pg-skel-badge"></div><div class="ccx-pg-skel-line ccx-pg-skel-title"></div><div class="ccx-pg-skel-line ccx-pg-skel-meta"></div><div class="ccx-pg-skel-line ccx-pg-skel-text"></div><div class="ccx-pg-skel-line ccx-pg-skel-text"></div></div>
          <div class="ccx-pg-skel-card"><div class="ccx-pg-skel-line ccx-pg-skel-badge"></div><div class="ccx-pg-skel-line ccx-pg-skel-title"></div><div class="ccx-pg-skel-line ccx-pg-skel-meta"></div><div class="ccx-pg-skel-line ccx-pg-skel-text"></div><div class="ccx-pg-skel-line ccx-pg-skel-text"></div></div>
          <div class="ccx-pg-skel-card"><div class="ccx-pg-skel-line ccx-pg-skel-badge"></div><div class="ccx-pg-skel-line ccx-pg-skel-title"></div><div class="ccx-pg-skel-line ccx-pg-skel-meta"></div><div class="ccx-pg-skel-line ccx-pg-skel-text"></div><div class="ccx-pg-skel-line ccx-pg-skel-text"></div></div>
          <div class="ccx-pg-skel-card"><div class="ccx-pg-skel-line ccx-pg-skel-badge"></div><div class="ccx-pg-skel-line ccx-pg-skel-title"></div><div class="ccx-pg-skel-line ccx-pg-skel-meta"></div><div class="ccx-pg-skel-line ccx-pg-skel-text"></div><div class="ccx-pg-skel-line ccx-pg-skel-text"></div></div>
          <div class="ccx-pg-skel-card"><div class="ccx-pg-skel-line ccx-pg-skel-badge"></div><div class="ccx-pg-skel-line ccx-pg-skel-title"></div><div class="ccx-pg-skel-line ccx-pg-skel-meta"></div><div class="ccx-pg-skel-line ccx-pg-skel-text"></div><div class="ccx-pg-skel-line ccx-pg-skel-text"></div></div>
        </div>

        <div class="ccx-pg-grid" id="ccx-pg-grid"></div>

        <div class="ccx-pg-empty" id="ccx-pg-empty">
          <svg width="42" height="42" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><circle cx="11" cy="11" r="7"/><path d="M21 21l-4.35-4.35"/></svg>
          <h3>No programs found</h3>
          <p>Try changing your search or clearing one of your filters.</p>
          <button type="button" class="ccx-btn ccx-btn-gold" id="ccx-pg-empty-clear">Clear Filters</button>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     STUDY AREA GRID
     ============================================================ -->
<section class="ccx-pg-areas">
  <div class="ccx-container">
    <div class="ccx-section-head ccx-reveal">
      <p class="ccx-eyebrow ccx-on-dark">Browse By Field</p>
      <h2>Explore By Study Area</h2>
      <p>Select a study area to filter the results above. Counts reflect the entries currently listed on this page.</p>
    </div>
    <div class="ccx-pg-areas-grid ccx-reveal" id="ccx-pg-areas-grid"></div>
  </div>
</section>

<!-- ============================================================
     COMPARE YOUR OPTIONS
     ============================================================ -->
<section class="ccx-pg-compare">
  <div class="ccx-container">
    <div class="ccx-section-head ccx-center ccx-reveal">
      <p class="ccx-eyebrow" style="margin-left:auto; margin-right:auto; justify-content:center;">Weigh It Up</p>
      <h2>Compare Your Options</h2>
      <p>Explore different universities and study areas to find the option that best matches your goals.</p>
    </div>
    <a href="/universities" class="ccx-btn ccx-btn-gold ccx-reveal">Explore Universities</a>
  </div>
</section>

<!-- ============================================================
     STUDENT JOURNEY
     ============================================================ -->
<section class="ccx-pg-journey">
  <div class="ccx-container">
    <div class="ccx-section-head ccx-center ccx-reveal">
      <p class="ccx-eyebrow" style="margin-left:auto; margin-right:auto; justify-content:center;">The Journey</p>
      <h2>Your Path Starts Here</h2>
    </div>
    <div class="ccx-pg-journey-grid ccx-reveal">
      <div class="ccx-pg-journey-step">
        <span class="ccx-pg-journey-num">01</span>
        <h3>Choose A Study Area</h3>
        <a href="#ccx-pg-explore">Filter by area →</a>
      </div>
      <div class="ccx-pg-journey-step">
        <span class="ccx-pg-journey-num">02</span>
        <h3>Explore Programs</h3>
        <a href="#ccx-pg-explore">See results →</a>
      </div>
      <div class="ccx-pg-journey-step">
        <span class="ccx-pg-journey-num">03</span>
        <h3>Choose A University</h3>
        <a href="/universities">View universities →</a>
      </div>
      <div class="ccx-pg-journey-step">
        <span class="ccx-pg-journey-num">04</span>
        <h3>Learn About Admissions</h3>
        <a href="/admissions">Admissions info →</a>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     LEAD CTA
     ============================================================ -->
<section class="ccx-pg-lead-cta">
  <div class="ccx-container">
    <p class="ccx-eyebrow ccx-on-dark" style="justify-content:center;">We Can Help</p>
    <h2>Need Help Choosing A Program?</h2>
    <p>Tell us what you're interested in and we'll help you explore your options.</p>
    <a href="#" class="ccx-btn ccx-btn-gold ccx-admission-trigger">Get Information</a>
  </div>
</section>

<!-- ============================================================
     FOOTER
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

<!-- ============================================================
     PROGRAM/DEPARTMENT MULTI-STEP MODAL
     (Fee Structure → Application Form → Confirmation)
     ============================================================ -->
<div class="ccx-dept-overlay" id="ccx-dept-modal" role="dialog" aria-modal="true" aria-labelledby="ccx-dept-title" aria-hidden="true">
  <div class="ccx-dept-panel">
    <button type="button" class="ccx-dept-close" id="ccx-dept-close" aria-label="Close">&times;</button>

    <div class="ccx-dept-steps" aria-hidden="true">
      <span class="ccx-dept-step-dot ccx-dept-step-active" data-ccx-dept-dot="1"><span class="ccx-num">1</span> Fee Structure</span>
      <span class="ccx-dept-step-line"></span>
      <span class="ccx-dept-step-dot" data-ccx-dept-dot="2"><span class="ccx-num">2</span> Application</span>
      <span class="ccx-dept-step-line"></span>
      <span class="ccx-dept-step-dot" data-ccx-dept-dot="3"><span class="ccx-num">3</span> Confirmation</span>
    </div>

    <!-- STEP 1: FEE STRUCTURE -->
    <div class="ccx-dept-view ccx-dept-view-active" data-ccx-dept-view="1">
      <span class="ccx-dept-program-tag" id="ccx-dept-tag-1"></span>
      <div class="ccx-dept-header">
        <h3 id="ccx-dept-title">Fee Structure</h3>
        <p>A general overview before you apply. Universities update their fee structures each academic year.</p>
      </div>
      <p class="ccx-dept-fee-note">Exact tuition, admission and other fees are set and published by the university itself and can change between intakes. Please confirm current figures on the university's page or directly with their admissions office before applying.</p>
      <table class="ccx-dept-fee-table">
        <tr><td>Tuition Fee</td><td>Confirm with university</td></tr>
        <tr><td>Admission / Processing Fee</td><td>Confirm with university</td></tr>
        <tr><td>Security Deposit</td><td>Confirm with university</td></tr>
        <tr><td>Scholarships &amp; Financial Aid</td><td>Ask admissions office</td></tr>
      </table>
      <div class="ccx-dept-fee-actions">
        <a href="#" id="ccx-dept-uni-link" class="ccx-btn ccx-btn-outline-dark ccx-btn-sm">View University Page</a>
        <button type="button" class="ccx-btn ccx-btn-gold" id="ccx-dept-to-step2">Continue to Application</button>
      </div>
    </div>

    <!-- STEP 2: APPLICATION FORM -->
    <div class="ccx-dept-view" data-ccx-dept-view="2">
      <span class="ccx-dept-program-tag" id="ccx-dept-tag-2"></span>
      <div class="ccx-dept-header">
        <h3>Application Details</h3>
        <p id="ccx-dept-form-sub">Share your details and this opens your email app with your application ready to send.</p>
      </div>
      <form id="ccx-dept-form" novalidate>
        <div class="ccx-dept-form-grid">
          <div class="ccx-field ccx-full" data-ccx-dfield="name">
            <label for="ccx-dept-name">Full Name</label>
            <input type="text" id="ccx-dept-name" name="name" placeholder="e.g. Ayesha Khan" autocomplete="name">
            <span class="ccx-field-error">Please enter your full name.</span>
          </div>
          <div class="ccx-field" data-ccx-dfield="phone">
            <label for="ccx-dept-phone">Phone</label>
            <input type="tel" id="ccx-dept-phone" name="phone" placeholder="03XX XXXXXXX" autocomplete="tel">
            <span class="ccx-field-error">Please enter a valid phone number.</span>
          </div>
          <div class="ccx-field" data-ccx-dfield="email">
            <label for="ccx-dept-email">Email</label>
            <input type="email" id="ccx-dept-email" name="email" placeholder="you@example.com" autocomplete="email">
            <span class="ccx-field-error">Please enter a valid email address.</span>
          </div>
          <div class="ccx-field ccx-full" data-ccx-dfield="city">
            <label for="ccx-dept-city">City</label>
            <input type="text" id="ccx-dept-city" name="city" placeholder="e.g. Lahore" autocomplete="address-level2">
          </div>
          <div class="ccx-field ccx-full">
            <label for="ccx-dept-message">Message <span style="font-weight:500; color:var(--ccx-ink-soft);">(optional)</span></label>
            <textarea id="ccx-dept-message" name="message" placeholder="Anything else you'd like us to know?"></textarea>
          </div>
        </div>
        <div class="ccx-dept-form-actions">
          <button type="button" class="ccx-btn ccx-btn-outline-dark" id="ccx-dept-back-step1">Back</button>
          <button type="submit" class="ccx-btn ccx-btn-gold" id="ccx-dept-submit">Submit Application</button>
        </div>
      </form>
    </div>

    <!-- STEP 3: CONFIRMATION -->
    <div class="ccx-dept-view" data-ccx-dept-view="3">
      <div class="ccx-dept-confirm">
        <div class="ccx-check"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M5 13l4 4L19 7"/></svg></div>
        <h3>Application Ready to Send</h3>
        <p>Your email app should now open with your application pre-filled. If it didn't open automatically, use the email address below to send it yourself.</p>
        <div class="ccx-dept-confirm-summary" id="ccx-dept-summary"></div>
        <p class="ccx-dept-fallback" id="ccx-dept-fallback-email"></p>
        <button type="button" class="ccx-btn ccx-btn-outline-dark" id="ccx-dept-done">Close</button>
      </div>
    </div>

  </div>
</div>

</div><!-- /#ccx-page -->

<script>
/* ============================================================
   UNIVERSITY REFERENCE DATA
   Logos hotlinked from each university's own official asset path.
   ============================================================ */
var ccxUniversities = {
  UCP:    { name:"University of Central Punjab", short:"UCP", route:"/ucp", location:"Lahore", accent:"#F0B429", logo:"https://ucp.edu.pk/inc/uploads/2019/06/ucp-sticky-logo-white-1.png" },
  BIMS:   { name:"Barani Institute of Management & Sciences", short:"BIMS", route:"/bims", location:"Rawalpindi", accent:"#227A46", logo:null },
  UOR:    { name:"University of Rawalpindi", short:"UOR", route:"/uor", location:"Rawalpindi", accent:"#D42A2A", logo:"https://www.uor.edu.pk/frontend/academics/img/logo-primary.png" },
  NUML:   { name:"National University of Modern Languages", short:"NUML", route:"/numl", location:"Islamabad", accent:"#C9A227", logo:"https://numl.edu.pk/templates/template10/images/numl_logo.png" },
  TMUC:   { name:"The Millennium Universal College", short:"TMUC", route:"/tmuc", location:"Islamabad", accent:"#E11B2C", logo:"https://tmuc.edu.pk/wp-content/uploads/2019/10/Tmuc-logo.png" },
  Bahria: { name:"Bahria University", short:"Bahria", route:"/bahria", location:"Islamabad · Karachi · Lahore", accent:"#B08D3E", logo:"https://www.bahria.edu.pk/Content/images/bu_logo_small_1.png" }
};

/* ============================================================
   PROGRAM DATASET
   granularity: "program" = specific named degree published by the
   university | "area" = faculty / school / degree-level entry, used
   where the university publishes faculties and levels rather than a
   full public list of individual degree titles.
   No durations/fees/eligibility included — none were verifiable.
   ============================================================ */
var ccxPrograms = [
  /* ---------- BIMS (publishes full program list) ---------- */
  { id:"bims-bba-hons", title:"BBA (Hons) 4 Years", uni:"BIMS", area:"Business & Management", level:"Undergraduate", granularity:"program", desc:"Four-year bachelor of business administration listed under BIMS's Business & Management department." },
  { id:"bims-bba-2", title:"BBA 2 Years", uni:"BIMS", area:"Business & Management", level:"Undergraduate", granularity:"program", desc:"Two-year BBA route listed under BIMS's Business & Management department." },
  { id:"bims-af", title:"BS Accounts & Finance", uni:"BIMS", area:"Business & Management", level:"Undergraduate", granularity:"program", desc:"Bachelor's program in accounting and finance within BIMS's Business & Management department." },
  { id:"bims-econ", title:"BS Economics", uni:"BIMS", area:"Business & Management", level:"Undergraduate", granularity:"program", desc:"Bachelor's program in economics within BIMS's Business & Management department." },
  { id:"bims-bscs-gen", title:"BSCS (General Computing)", uni:"BIMS", area:"Computing & Technology", level:"Undergraduate", granularity:"program", desc:"Computer science degree with a general computing specialisation." },
  { id:"bims-bscs-se", title:"BSCS (Software Engineering)", uni:"BIMS", area:"Computing & Technology", level:"Undergraduate", granularity:"program", desc:"Computer science degree with a software engineering specialisation." },
  { id:"bims-bscs-ai", title:"BSCS (Artificial Intelligence)", uni:"BIMS", area:"Computing & Technology", level:"Undergraduate", granularity:"program", desc:"Computer science degree with an artificial intelligence specialisation." },
  { id:"bims-env", title:"BS Environmental Sciences", uni:"BIMS", area:"Sciences", level:"Undergraduate", granularity:"program", desc:"Bachelor's program in environmental sciences within BIMS's Sciences department." },
  { id:"bims-math", title:"BS Mathematics", uni:"BIMS", area:"Sciences", level:"Undergraduate", granularity:"program", desc:"Bachelor's program in mathematics within BIMS's Sciences department." },
  { id:"bims-stats", title:"BS Statistics", uni:"BIMS", area:"Sciences", level:"Undergraduate", granularity:"program", desc:"Bachelor's program in statistics within BIMS's Sciences department." },
  { id:"bims-hnd", title:"BSc. Hons HND (Human Nutrition & Dietetics)", uni:"BIMS", area:"Health Sciences", level:"Undergraduate", granularity:"program", desc:"Human nutrition and dietetics program under BIMS's Allied Health Sciences department." },
  { id:"bims-mlt", title:"BS MLT (Medical Laboratory Technology)", uni:"BIMS", area:"Health Sciences", level:"Undergraduate", granularity:"program", desc:"Medical laboratory technology program under BIMS's Allied Health Sciences department." },

  /* ---------- UOR (publishes full program list) ---------- */
  { id:"uor-bba", title:"Business Administration", uni:"UOR", area:"Business & Management", level:"Undergraduate", granularity:"program", desc:"Business administration offered by UOR at ADP and BS level." },
  { id:"uor-pharmd", title:"Doctor of Pharmacy (Pharm-D)", uni:"UOR", area:"Health Sciences", level:"Professional", granularity:"program", desc:"Pharm-D program listed among UOR's published programs." },
  { id:"uor-af", title:"Accounting and Finance", uni:"UOR", area:"Business & Management", level:"Undergraduate", granularity:"program", desc:"Accounting and finance offered by UOR at ADP and BS level." },
  { id:"uor-media", title:"Media and Communication Studies", uni:"UOR", area:"Media & Design", level:"Undergraduate", granularity:"program", desc:"Media and communication studies offered by UOR at ADP and BS level." },
  { id:"uor-ddca", title:"Digital Design and Computer Arts", uni:"UOR", area:"Media & Design", level:"Undergraduate", granularity:"program", desc:"Digital design and computer arts offered by UOR at ADP and BS level." },
  { id:"uor-interior", title:"Interior Design", uni:"UOR", area:"Media & Design", level:"Undergraduate", granularity:"program", desc:"Interior design offered by UOR at ADP and BS level." },
  { id:"uor-islamic", title:"Islamic Sciences", uni:"UOR", area:"Social Sciences", level:"Undergraduate", granularity:"program", desc:"Islamic sciences offered by UOR at ADP and BS level." },
  { id:"uor-psy", title:"Psychology", uni:"UOR", area:"Social Sciences", level:"Undergraduate", granularity:"program", desc:"Psychology offered by UOR at ADP and BS level." },
  { id:"uor-cs", title:"Computer Science", uni:"UOR", area:"Computing & Technology", level:"Undergraduate", granularity:"program", desc:"Computer science offered by UOR at ADP and BS level." },
  { id:"uor-se", title:"Software Engineering", uni:"UOR", area:"Computing & Technology", level:"Undergraduate", granularity:"program", desc:"Software engineering offered by UOR at ADP and BS level." },
  { id:"uor-eng", title:"English and Linguistic Studies", uni:"UOR", area:"Languages & Communication", level:"Undergraduate", granularity:"program", desc:"English and linguistic studies offered by UOR at ADP and BS level." },

  /* ---------- TMUC (publishes full program list) ---------- */
  { id:"tmuc-baba", title:"BA (Hons) Business Administration", uni:"TMUC", area:"Business & Management", level:"Undergraduate", granularity:"program", desc:"University of Hertfordshire program under TMUC's School of Business Management." },
  { id:"tmuc-mba", title:"Master of Business Administration (MBA)", uni:"TMUC", area:"Business & Management", level:"Postgraduate", granularity:"program", desc:"University of Hertfordshire MBA under TMUC's School of Business Management." },
  { id:"tmuc-mscpm", title:"MSc Project Management", uni:"TMUC", area:"Business & Management", level:"Postgraduate", granularity:"program", desc:"University of Hertfordshire program under TMUC's School of Business Management." },
  { id:"tmuc-lse-bm", title:"LSE BSc (Hons) Business and Management", uni:"TMUC", area:"Business & Management", level:"Undergraduate", granularity:"program", desc:"University of London (LSE) program offered through TMUC." },
  { id:"tmuc-rh-ba", title:"Royal Holloway BSc (Hons) Business Administration", uni:"TMUC", area:"Business & Management", level:"Undergraduate", granularity:"program", desc:"University of London (Royal Holloway) program offered through TMUC." },
  { id:"tmuc-hn-bus", title:"HN Business", uni:"TMUC", area:"Business & Management", level:"Professional", granularity:"program", desc:"Pearson BTEC Higher National in Business offered through TMUC." },
  { id:"tmuc-cs", title:"BSc (Hons) Computer Science", uni:"TMUC", area:"Computing & Technology", level:"Undergraduate", granularity:"program", desc:"University of Hertfordshire program under TMUC's School of Computing & Emerging Tech." },
  { id:"tmuc-hn-comp", title:"HN Computing", uni:"TMUC", area:"Computing & Technology", level:"Professional", granularity:"program", desc:"Pearson BTEC Higher National in Computing offered through TMUC." },
  { id:"tmuc-llb-hons", title:"Bachelor of Laws LLB (Hons)", uni:"TMUC", area:"Law", level:"Undergraduate", granularity:"program", desc:"University of Hertfordshire LLB under TMUC's Faculty of Laws." },
  { id:"tmuc-llb-uol", title:"Bachelor of Laws LLB (University of London)", uni:"TMUC", area:"Law", level:"Undergraduate", granularity:"program", desc:"University of London LLB under TMUC's Faculty of Laws." },
  { id:"tmuc-fashion", title:"BA (Hons) Fashion Textile", uni:"TMUC", area:"Media & Design", level:"Undergraduate", granularity:"program", desc:"University for the Creative Arts program under TMUC's School of Creative Arts." },
  { id:"tmuc-film", title:"BA (Hons) Film & Digital Arts", uni:"TMUC", area:"Media & Design", level:"Undergraduate", granularity:"program", desc:"University for the Creative Arts program under TMUC's School of Creative Arts." },
  { id:"tmuc-interior", title:"BA (Hons) Interior Design", uni:"TMUC", area:"Media & Design", level:"Undergraduate", granularity:"program", desc:"University for the Creative Arts program under TMUC's School of Creative Arts." },
  { id:"tmuc-fashion-image", title:"BA (Hons) Fashion Image & Styling", uni:"TMUC", area:"Media & Design", level:"Undergraduate", granularity:"program", desc:"University for the Creative Arts program under TMUC's School of Creative Arts." },
  { id:"tmuc-ma-fbm", title:"MA Fashion Business Management", uni:"TMUC", area:"Media & Design", level:"Postgraduate", granularity:"program", desc:"University for the Creative Arts program under TMUC's School of Creative Arts." },
  { id:"tmuc-ma-edu", title:"MA Education", uni:"TMUC", area:"Social Sciences", level:"Postgraduate", granularity:"program", desc:"University of Hertfordshire program under TMUC's School of Social Sciences and Education." },
  { id:"tmuc-lse-econ", title:"LSE BSc (Hons) Economics and Management", uni:"TMUC", area:"Social Sciences", level:"Undergraduate", granularity:"program", desc:"University of London (LSE) program offered through TMUC." },
  { id:"tmuc-lse-pir", title:"LSE BSc (Hons) Politics and International Relations", uni:"TMUC", area:"Social Sciences", level:"Undergraduate", granularity:"program", desc:"University of London (LSE) program offered through TMUC." },
  { id:"tmuc-lse-af", title:"LSE BSc (Hons) Accounting and Finance", uni:"TMUC", area:"Business & Management", level:"Undergraduate", granularity:"program", desc:"University of London (LSE) program offered through TMUC." },
  { id:"tmuc-psy", title:"BSc Psychology", uni:"TMUC", area:"Social Sciences", level:"Undergraduate", granularity:"program", desc:"Program under TMUC's Faculty of Health Sciences." },
  { id:"tmuc-acca", title:"ACCA", uni:"TMUC", area:"Professional Studies", level:"Professional", granularity:"program", desc:"Professional accountancy qualification under TMUC's Faculty of Professional Studies." },
  { id:"tmuc-icap", title:"ICAP – CA", uni:"TMUC", area:"Professional Studies", level:"Professional", granularity:"program", desc:"Chartered accountancy qualification under TMUC's Faculty of Professional Studies." },
  { id:"tmuc-cth", title:"CTH Level 4 & 5 Diploma in Hospitality Management", uni:"TMUC", area:"Professional Studies", level:"Professional", granularity:"program", desc:"Hospitality management diploma under TMUC's School of Hospitality." },
  { id:"tmuc-ifd", title:"NCC International Foundation Diploma (IFD)", uni:"TMUC", area:"Professional Studies", level:"Professional", granularity:"program", desc:"Foundation-year diploma under TMUC's School of Foundation." },

  /* ---------- UCP (publishes faculties) ---------- */
  { id:"ucp-mgmt", title:"Faculty of Management Sciences", uni:"UCP", area:"Business & Management", level:"Multiple Levels", granularity:"area", desc:"UCP publishes this faculty on its homepage; explore the UCP page for the programs offered within it." },
  { id:"ucp-itcs", title:"Faculty of Information Technology & Computer Science", uni:"UCP", area:"Computing & Technology", level:"Multiple Levels", granularity:"area", desc:"UCP publishes this faculty on its homepage; explore the UCP page for the programs offered within it." },
  { id:"ucp-eng", title:"Faculty of Engineering", uni:"UCP", area:"Engineering", level:"Multiple Levels", granularity:"area", desc:"UCP publishes this faculty on its homepage; explore the UCP page for the programs offered within it." },
  { id:"ucp-pharm", title:"Faculty of Pharmaceutical Sciences", uni:"UCP", area:"Health Sciences", level:"Multiple Levels", granularity:"area", desc:"UCP publishes this faculty on its homepage; explore the UCP page for the programs offered within it." },
  { id:"ucp-media", title:"Faculty of Media & Mass Communication", uni:"UCP", area:"Media & Design", level:"Multiple Levels", granularity:"area", desc:"UCP publishes this faculty on its homepage; explore the UCP page for the programs offered within it." },
  { id:"ucp-law", title:"Faculty of Law", uni:"UCP", area:"Law", level:"Multiple Levels", granularity:"area", desc:"UCP publishes this faculty on its homepage; explore the UCP page for the programs offered within it." },
  { id:"ucp-lang", title:"Faculty of Languages & Literature", uni:"UCP", area:"Languages & Communication", level:"Multiple Levels", granularity:"area", desc:"UCP publishes this faculty on its homepage; explore the UCP page for the programs offered within it." },
  { id:"ucp-hum", title:"Faculty of Humanities & Social Sciences", uni:"UCP", area:"Social Sciences", level:"Multiple Levels", granularity:"area", desc:"UCP publishes this faculty on its homepage; explore the UCP page for the programs offered within it." },
  { id:"ucp-sci", title:"Faculty of Science & Technology", uni:"UCP", area:"Sciences", level:"Multiple Levels", granularity:"area", desc:"UCP publishes this faculty on its homepage; explore the UCP page for the programs offered within it." },
  { id:"ucp-adp", title:"Associate Degree Programs", uni:"UCP", area:"Professional Studies", level:"Undergraduate", granularity:"area", desc:"UCP publishes an associate degree route; explore the UCP page for the programs offered within it." },

  /* ---------- NUML (publishes faculties + levels) ---------- */
  { id:"numl-lang", title:"Faculty of Languages and Cultures", uni:"NUML", area:"Languages & Communication", level:"Multiple Levels", granularity:"area", desc:"NUML publishes this faculty; explore the NUML page for the programs offered within it." },
  { id:"numl-engcomp", title:"Faculty of Engineering and Computing", uni:"NUML", area:"Computing & Technology", level:"Multiple Levels", granularity:"area", desc:"NUML publishes this faculty; explore the NUML page for the programs offered within it." },
  { id:"numl-mgmt", title:"Faculty of Management Sciences", uni:"NUML", area:"Business & Management", level:"Multiple Levels", granularity:"area", desc:"NUML publishes this faculty; explore the NUML page for the programs offered within it." },
  { id:"numl-social", title:"Faculty of Social Sciences", uni:"NUML", area:"Social Sciences", level:"Multiple Levels", granularity:"area", desc:"NUML publishes this faculty; explore the NUML page for the programs offered within it." },
  { id:"numl-arts", title:"Faculty of Arts and Humanities", uni:"NUML", area:"Social Sciences", level:"Multiple Levels", granularity:"area", desc:"NUML publishes this faculty; explore the NUML page for the programs offered within it." },
  { id:"numl-ug", title:"Undergraduate Programs", uni:"NUML", area:"Languages & Communication", level:"Undergraduate", granularity:"area", desc:"NUML publishes an undergraduate study route across its faculties." },
  { id:"numl-pg", title:"Postgraduate Programs", uni:"NUML", area:"Languages & Communication", level:"Postgraduate", granularity:"area", desc:"NUML publishes a postgraduate study route across its faculties." },
  { id:"numl-phd", title:"Doctoral Programs", uni:"NUML", area:"Languages & Communication", level:"Doctoral", granularity:"area", desc:"NUML publishes a research-intensive doctoral study route." },
  { id:"numl-langcourses", title:"Language Courses", uni:"NUML", area:"Languages & Communication", level:"Professional", granularity:"area", desc:"NUML publishes professional language learning courses alongside its degree programs." },

  /* ---------- Bahria (publishes degree levels) ---------- */
  { id:"bahria-ug", title:"Undergraduate Programmes", uni:"Bahria", area:"Multiple Areas", level:"Undergraduate", granularity:"area", desc:"Bahria publishes an undergraduate route spanning engineering, management, computing, health sciences and more." },
  { id:"bahria-grad", title:"Graduate Programmes", uni:"Bahria", area:"Multiple Areas", level:"Postgraduate", granularity:"area", desc:"Bahria publishes a graduate route across engineering, humanities, medical sciences and IT." },
  { id:"bahria-phd", title:"PhD Programmes", uni:"Bahria", area:"Multiple Areas", level:"Doctoral", granularity:"area", desc:"Bahria publishes a doctoral route focused on research and critical inquiry." },
  { id:"bahria-lifelong", title:"LifeLong Learning", uni:"Bahria", area:"Professional Studies", level:"Professional", granularity:"area", desc:"Bahria publishes flexible diploma programmes for professional upskilling." },
  { id:"bahria-odl", title:"Open & Distance Learning (ODL)", uni:"Bahria", area:"Multiple Areas", level:"Multiple Levels", granularity:"area", desc:"Bahria publishes a technology-driven open and distance learning route." }
];

/* ============================================================
   PAGE LOGIC — namespaced IIFE, same pattern as other pages
   ============================================================ */
var ccxProgramsPage = (function(){
  "use strict";

  var ccxConfig = {
    whatsappNumber: "", // TODO: set before going live — keep in sync with the index page
    whatsappMessage: "Hello, I would like to get information about university admissions."
  };

  var state = { query:"", universities:[], areas:[], levels:[], sort:"name" };

  var AREA_ICONS = {
    "Business & Management":'<path d="M4 19.5A2.5 2.5 0 016.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 014 19.5v-15A2.5 2.5 0 016.5 2z"/>',
    "Computing & Technology":'<rect x="2" y="4" width="20" height="13" rx="2"/><path d="M8 21h8M12 17v4"/>',
    "Engineering":'<path d="M14.7 6.3a1 1 0 000 1.4l1.6 1.6a1 1 0 001.4 0l3.8-3.8a6 6 0 01-7.9 7.9l-6.6 6.6a2 2 0 11-2.8-2.8l6.6-6.6a6 6 0 017.9-7.9l-3.8 3.8z"/>',
    "Languages & Communication":'<circle cx="12" cy="12" r="9"/><path d="M3 12h18M12 3a14 14 0 010 18 14 14 0 010-18z"/>',
    "Social Sciences":'<path d="M17 21v-2a4 4 0 00-4-4H6a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/>',
    "Media & Design":'<circle cx="12" cy="12" r="3"/><path d="M3 7V5a2 2 0 012-2h2M17 3h2a2 2 0 012 2v2M21 17v2a2 2 0 01-2 2h-2M7 21H5a2 2 0 01-2-2v-2"/>',
    "Law":'<path d="M12 3v18M5 7h14M7 7l-3 7h6zM17 7l3 7h-6z"/>',
    "Health Sciences":'<path d="M12 2l8 4v6c0 5-3.4 8.7-8 10-4.6-1.3-8-5-8-10V6l8-4z"/><path d="M12 8v8M8 12h8"/>',
    "Sciences":'<path d="M9 3h6M10 3v6l-5 9a2 2 0 002 3h10a2 2 0 002-3l-5-9V3"/>',
    "Professional Studies":'<path d="M20 7H4a2 2 0 00-2 2v9a2 2 0 002 2h16a2 2 0 002-2V9a2 2 0 00-2-2z"/><path d="M16 7V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v2"/>',
    "Multiple Areas":'<path d="M3 3h7v7H3zM14 3h7v7h-7zM3 14h7v7H3zM14 14h7v7h-7z"/>'
  };

  var AREA_DESCS = {
    "Business & Management":"Management, administration, accounting and economics.",
    "Computing & Technology":"Computer science, software engineering and IT.",
    "Engineering":"Engineering disciplines across the network.",
    "Languages & Communication":"Language education, linguistics and communication.",
    "Social Sciences":"Psychology, politics, education and humanities.",
    "Media & Design":"Media, film, fashion and design programs.",
    "Law":"Undergraduate and professional legal study.",
    "Health Sciences":"Pharmacy, nutrition and allied health programs.",
    "Sciences":"Mathematics, statistics and environmental sciences.",
    "Professional Studies":"ACCA, CA, diplomas and foundation routes.",
    "Multiple Areas":"Broad routes spanning several disciplines."
  };

  /* ---------- HELPERS ---------- */
  function uniqueSorted(key){
    var seen = {};
    ccxPrograms.forEach(function(p){ seen[p[key]] = true; });
    return Object.keys(seen).sort();
  }
  function countBy(key, value){
    return ccxPrograms.filter(function(p){ return p[key] === value; }).length;
  }
  function escapeHtml(str){
    return String(str).replace(/[&<>"']/g, function(c){
      return {"&":"&amp;","<":"&lt;",">":"&gt;",'"':"&quot;","'":"&#39;"}[c];
    });
  }

  /* ---------- FILTER UI ---------- */
  function buildFilterUI(){
    buildGroup("ccx-pg-filter-university", "uni", Object.keys(ccxUniversities), function(v){ return ccxUniversities[v].short; });
    buildGroup("ccx-pg-filter-area", "area", uniqueSorted("area"), function(v){ return v; });
    buildGroup("ccx-pg-filter-level", "level", uniqueSorted("level"), function(v){ return v; });
  }
  function buildGroup(containerId, key, values, labelFn){
    var container = document.getElementById(containerId);
    if(!container) return;
    container.innerHTML = values.map(function(v){
      var count = countBy(key, v);
      return '<label class="ccx-pg-filter-opt">' +
        '<input type="checkbox" data-ccx-group="' + key + '" value="' + escapeHtml(v) + '">' +
        '<span>' + escapeHtml(labelFn(v)) + '</span>' +
        '<span class="ccx-pg-filter-count">' + count + '</span>' +
      '</label>';
    }).join("");
    container.querySelectorAll("input").forEach(function(input){
      input.addEventListener("change", function(){
        var group = input.getAttribute("data-ccx-group");
        var bucket = group === "uni" ? state.universities : (group === "area" ? state.areas : state.levels);
        var idx = bucket.indexOf(input.value);
        if(input.checked && idx === -1) bucket.push(input.value);
        if(!input.checked && idx !== -1) bucket.splice(idx, 1);
        render();
      });
    });
  }

  function syncCheckboxes(){
    document.querySelectorAll('#ccx-pg-filters input[type="checkbox"]').forEach(function(input){
      var group = input.getAttribute("data-ccx-group");
      var bucket = group === "uni" ? state.universities : (group === "area" ? state.areas : state.levels);
      input.checked = bucket.indexOf(input.value) !== -1;
    });
  }

  /* ---------- FILTERING ---------- */
  function getFiltered(){
    var q = state.query.trim().toLowerCase();
    var results = ccxPrograms.filter(function(p){
      var uniName = ccxUniversities[p.uni].name.toLowerCase();
      var haystack = (p.title + " " + p.area + " " + p.level + " " + uniName + " " + p.uni).toLowerCase();
      if(q && haystack.indexOf(q) === -1) return false;
      if(state.universities.length && state.universities.indexOf(p.uni) === -1) return false;
      if(state.areas.length && state.areas.indexOf(p.area) === -1) return false;
      if(state.levels.length && state.levels.indexOf(p.level) === -1) return false;
      return true;
    });

    results.sort(function(a, b){
      if(state.sort === "university"){
        var ua = ccxUniversities[a.uni].name, ub = ccxUniversities[b.uni].name;
        if(ua !== ub) return ua.localeCompare(ub);
      }
      return a.title.localeCompare(b.title);
    });
    return results;
  }

  /* ---------- RENDER ---------- */
  function render(){
    var grid = document.getElementById("ccx-pg-grid");
    var empty = document.getElementById("ccx-pg-empty");
    var countEl = document.getElementById("ccx-pg-count");
    if(!grid) return;

    var results = getFiltered();

    countEl.innerHTML = "Showing <strong>" + results.length + "</strong> of " + ccxPrograms.length + " listed entries";

    grid.innerHTML = results.map(function(p){
      var u = ccxUniversities[p.uni];
      var badge = u.logo
        ? '<span class="ccx-pg-uni-badge"><img src="' + u.logo + '" alt="' + escapeHtml(u.name) + ' logo" loading="lazy"></span>'
        : '<span class="ccx-pg-uni-badge ccx-pg-mono" style="--ccx-pg-accent:' + u.accent + ';" aria-hidden="true">' + escapeHtml(u.short) + '</span>';
      var granTag = p.granularity === "area"
        ? '<span title="This university publishes faculties and levels rather than a full public list of degree titles.">Faculty / Level</span>'
        : '';
      return '<article class="ccx-pg-card">' +
        '<div class="ccx-pg-card-top">' + badge +
          '<span><span class="ccx-pg-uni-name">' + escapeHtml(u.name) + '</span>' +
          '<span class="ccx-pg-uni-loc">' + escapeHtml(u.location) + '</span></span>' +
        '</div>' +
        '<h3><button type="button" class="ccx-pg-title-btn ccx-dept-trigger" data-ccx-university="' + escapeHtml(p.uni) + '" data-ccx-program="' + escapeHtml(p.title) + '">' + escapeHtml(p.title) + '</button></h3>' +
        '<div class="ccx-pg-meta">' +
          '<span class="ccx-pg-meta-area">' + escapeHtml(p.area) + '</span>' +
          '<span>' + escapeHtml(p.level) + '</span>' + granTag +
        '</div>' +
        '<p>' + escapeHtml(p.desc) + '</p>' +
        '<div class="ccx-pg-card-actions">' +
          '<a href="' + u.route + '" class="ccx-pg-card-link">View at ' + escapeHtml(u.short) + ' <span class="ccx-arrow">→</span></a>' +
          '<button type="button" class="ccx-pg-card-inquire ccx-dept-trigger" data-ccx-university="' + escapeHtml(p.uni) + '" data-ccx-program="' + escapeHtml(p.title) + '">Fee &amp; Apply</button>' +
        '</div>' +
      '</article>';
    }).join("");

    empty.classList.toggle("ccx-show", results.length === 0);
    renderChips();
    bindAdmissionTriggers();
    bindDeptTriggers();
  }

  function renderChips(){
    var wrap = document.getElementById("ccx-pg-chips");
    if(!wrap) return;
    var chips = [];
    state.universities.forEach(function(v){ chips.push({group:"uni", value:v, label:ccxUniversities[v].short}); });
    state.areas.forEach(function(v){ chips.push({group:"area", value:v, label:v}); });
    state.levels.forEach(function(v){ chips.push({group:"level", value:v, label:v}); });
    if(state.query.trim()) chips.push({group:"query", value:state.query, label:'"' + state.query + '"'});

    wrap.innerHTML = chips.map(function(c){
      return '<span class="ccx-pg-chip">' + escapeHtml(c.label) +
        '<button type="button" data-ccx-chip-group="' + c.group + '" data-ccx-chip-value="' + escapeHtml(c.value) + '" aria-label="Remove filter ' + escapeHtml(c.label) + '">&times;</button></span>';
    }).join("");

    wrap.querySelectorAll("button").forEach(function(btn){
      btn.addEventListener("click", function(){
        var group = btn.getAttribute("data-ccx-chip-group");
        var value = btn.getAttribute("data-ccx-chip-value");
        if(group === "query"){
          state.query = "";
          var input = document.getElementById("ccx-pg-search");
          if(input) input.value = "";
          toggleClearBtn();
        } else {
          var bucket = group === "uni" ? state.universities : (group === "area" ? state.areas : state.levels);
          var idx = bucket.indexOf(value);
          if(idx !== -1) bucket.splice(idx, 1);
          syncCheckboxes();
        }
        render();
      });
    });
  }

  function renderAreaCards(){
    var wrap = document.getElementById("ccx-pg-areas-grid");
    if(!wrap) return;
    var areas = uniqueSorted("area");
    wrap.innerHTML = areas.map(function(a){
      var count = countBy("area", a);
      var icon = AREA_ICONS[a] || AREA_ICONS["Multiple Areas"];
      var desc = AREA_DESCS[a] || "";
      return '<button type="button" class="ccx-pg-area-card" data-ccx-area="' + escapeHtml(a) + '">' +
        '<span class="ccx-pg-area-icon"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">' + icon + '</svg></span>' +
        '<h3>' + escapeHtml(a) + '</h3>' +
        '<p>' + escapeHtml(desc) + '</p>' +
        '<span class="ccx-pg-area-count">' + count + ' listed</span>' +
      '</button>';
    }).join("");

    wrap.querySelectorAll(".ccx-pg-area-card").forEach(function(card){
      card.addEventListener("click", function(){
        var area = card.getAttribute("data-ccx-area");
        state.areas = [area];
        syncCheckboxes();
        render();
        var target = document.getElementById("ccx-pg-explore");
        if(target){
          var top = target.getBoundingClientRect().top + window.pageYOffset - 90;
          window.scrollTo({top:top, behavior:"smooth"});
        }
      });
    });
  }

  /* ---------- SEARCH ---------- */
  function toggleClearBtn(){
    var btn = document.getElementById("ccx-pg-search-clear");
    if(btn) btn.classList.toggle("ccx-show", state.query.trim().length > 0);
  }
  function setupSearch(){
    var input = document.getElementById("ccx-pg-search");
    var clearBtn = document.getElementById("ccx-pg-search-clear");
    if(!input) return;
    input.addEventListener("input", function(){
      state.query = input.value;
      toggleClearBtn();
      render();
    });
    if(clearBtn){
      clearBtn.addEventListener("click", function(){
        input.value = "";
        state.query = "";
        toggleClearBtn();
        render();
        input.focus();
      });
    }
    document.querySelectorAll("[data-ccx-example]").forEach(function(btn){
      btn.addEventListener("click", function(){
        input.value = btn.getAttribute("data-ccx-example");
        state.query = input.value;
        toggleClearBtn();
        render();
      });
    });
  }

  function setupClearAll(){
    ["ccx-pg-clear-all", "ccx-pg-empty-clear"].forEach(function(id){
      var btn = document.getElementById(id);
      if(!btn) return;
      btn.addEventListener("click", function(){
        state.query = ""; state.universities = []; state.areas = []; state.levels = [];
        var input = document.getElementById("ccx-pg-search");
        if(input) input.value = "";
        toggleClearBtn();
        syncCheckboxes();
        render();
      });
    });
  }

  function setupSort(){
    var select = document.getElementById("ccx-pg-sort-select");
    if(!select) return;
    select.addEventListener("change", function(){
      state.sort = select.value;
      render();
    });
  }

  /* ---------- MOBILE FILTER DRAWER ---------- */
  function setupFilterDrawer(){
    var toggle = document.getElementById("ccx-pg-filter-toggle");
    var panel = document.getElementById("ccx-pg-filters");
    var backdrop = document.getElementById("ccx-pg-filters-backdrop");
    var applyBtn = document.getElementById("ccx-pg-apply-filters");
    if(!toggle || !panel || !backdrop) return;

    function open(){
      panel.classList.add("ccx-open");
      backdrop.classList.add("ccx-open");
      toggle.setAttribute("aria-expanded", "true");
      document.body.style.overflow = "hidden";
    }
    function close(){
      panel.classList.remove("ccx-open");
      backdrop.classList.remove("ccx-open");
      toggle.setAttribute("aria-expanded", "false");
      document.body.style.overflow = "";
    }
    toggle.addEventListener("click", function(){
      panel.classList.contains("ccx-open") ? close() : open();
    });
    backdrop.addEventListener("click", close);
    if(applyBtn) applyBtn.addEventListener("click", close);
    document.addEventListener("keydown", function(e){
      if(e.key === "Escape" && panel.classList.contains("ccx-open")) close();
    });
  }

  /* ---------- SKELETON → CONTENT ---------- */
  function hideSkeleton(){
    var skel = document.getElementById("ccx-pg-skeleton");
    if(skel) skel.classList.add("ccx-hide");
  }

  /* ---------- ADMISSION MODAL ---------- */
  var modalBound = false;
  function bindAdmissionTriggers(){
    document.querySelectorAll("#ccx-page .ccx-admission-trigger").forEach(function(trigger){
      if(trigger.getAttribute("data-ccx-bound") === "1") return;
      trigger.setAttribute("data-ccx-bound", "1");
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
  }

  function ccxOpenModal(prefill){
    var overlay = document.getElementById("ccx-admission-modal");
    var form = document.getElementById("ccx-admission-form");
    if(!overlay || !form) return;
    overlay.classList.add("ccx-modal-open");
    overlay.setAttribute("aria-hidden", "false");
    document.body.style.overflow = "hidden";
    if(prefill && prefill.university) form.university.value = prefill.university;
    if(prefill && prefill.program) form.program.value = prefill.program;
    window.setTimeout(function(){ form.name.focus(); }, 250);
  }
  function ccxCloseModal(){
    var overlay = document.getElementById("ccx-admission-modal");
    if(!overlay) return;
    overlay.classList.remove("ccx-modal-open");
    overlay.setAttribute("aria-hidden", "true");
    document.body.style.overflow = "";
  }

  function ccxSetupAdmissionModal(){
    if(modalBound) return;
    modalBound = true;
    var overlay = document.getElementById("ccx-admission-modal");
    var closeBtn = document.getElementById("ccx-modal-close");
    var form = document.getElementById("ccx-admission-form");
    if(!overlay || !closeBtn || !form) return;

    var universityWhatsapp = { UCP:"", BIMS:"923333332467", UOR:"", NUML:"", TMUC:"", Bahria:"" };

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
      window.open(waBase + "?text=" + encodeURIComponent(lines.join("\n")), "_blank", "noopener");
      ccxCloseModal();
      form.reset();
    });
  }

  /* ============================================================
     PROGRAM/DEPARTMENT MULTI-STEP MODAL
     (Fee Structure → Application Form → Confirmation, submitted via email)
     ============================================================ */
  // TODO: replace with each university's real admissions email before going live.
  var ccxDeptEmails = {
    UCP: "info@ucp.edu.pk",
    BIMS: "admissions@bims.edu.pk",
    UOR: "",
    NUML: "info@numl.edu.pk",
    TMUC: "info@tmuc.edu.pk",
    Bahria: ""
  };
  var ccxDeptFallbackEmail = "admissions@example.com";
  var deptModalBound = false;
  var deptCurrentProgram = null;

  function bindDeptTriggers(){
    document.querySelectorAll("#ccx-page .ccx-dept-trigger").forEach(function(trigger){
      if(trigger.getAttribute("data-ccx-dept-bound") === "1") return;
      trigger.setAttribute("data-ccx-dept-bound", "1");
      trigger.addEventListener("click", function(e){
        e.preventDefault();
        var uniKey = trigger.getAttribute("data-ccx-university") || "";
        var program = trigger.getAttribute("data-ccx-program") || "";
        var url = "/admissions/apply";
        var params = [];
        if(uniKey) params.push("university=" + encodeURIComponent(uniKey));
        if(program) params.push("program=" + encodeURIComponent(program));
        if(params.length) url += "?" + params.join("&");
        window.location.href = url;
      });
    });
  }

  function ccxDeptGoToStep(step){
    document.querySelectorAll("#ccx-page .ccx-dept-view").forEach(function(view){
      view.classList.toggle("ccx-dept-view-active", view.getAttribute("data-ccx-dept-view") === String(step));
    });
    document.querySelectorAll("#ccx-page .ccx-dept-step-dot").forEach(function(dot){
      var dotStep = parseInt(dot.getAttribute("data-ccx-dept-dot"), 10);
      dot.classList.toggle("ccx-dept-step-active", dotStep === step);
      dot.classList.toggle("ccx-dept-step-done", dotStep < step);
    });
  }

  function ccxOpenDeptModal(uniKey, program){
    var overlay = document.getElementById("ccx-dept-modal");
    if(!overlay) return;
    var u = ccxUniversities[uniKey] || null;
    deptCurrentProgram = { uniKey: uniKey, uniName: u ? u.name : uniKey, program: program };

    var tagText = program + (u ? (" · " + u.name) : "");
    var tag1 = document.getElementById("ccx-dept-tag-1");
    var tag2 = document.getElementById("ccx-dept-tag-2");
    if(tag1) tag1.textContent = tagText;
    if(tag2) tag2.textContent = tagText;

    var uniLink = document.getElementById("ccx-dept-uni-link");
    if(uniLink) uniLink.setAttribute("href", u ? u.route : "#");

    var form = document.getElementById("ccx-dept-form");
    if(form) form.reset();
    document.querySelectorAll("#ccx-dept-form .ccx-field").forEach(function(f){ f.classList.remove("ccx-error"); });

    ccxDeptGoToStep(1);

    overlay.classList.add("ccx-dept-open");
    overlay.setAttribute("aria-hidden", "false");
    document.body.style.overflow = "hidden";
  }

  function ccxCloseDeptModal(){
    var overlay = document.getElementById("ccx-dept-modal");
    if(!overlay) return;
    overlay.classList.remove("ccx-dept-open");
    overlay.setAttribute("aria-hidden", "true");
    document.body.style.overflow = "";
  }

  function ccxSetupDeptModal(){
    if(deptModalBound) return;
    deptModalBound = true;

    var overlay = document.getElementById("ccx-dept-modal");
    var closeBtn = document.getElementById("ccx-dept-close");
    var toStep2Btn = document.getElementById("ccx-dept-to-step2");
    var backStep1Btn = document.getElementById("ccx-dept-back-step1");
    var doneBtn = document.getElementById("ccx-dept-done");
    var form = document.getElementById("ccx-dept-form");
    if(!overlay || !closeBtn || !form) return;

    closeBtn.addEventListener("click", ccxCloseDeptModal);
    if(doneBtn) doneBtn.addEventListener("click", ccxCloseDeptModal);
    overlay.addEventListener("click", function(e){ if(e.target === overlay) ccxCloseDeptModal(); });
    document.addEventListener("keydown", function(e){
      if(e.key === "Escape" && overlay.classList.contains("ccx-dept-open")) ccxCloseDeptModal();
    });

    if(toStep2Btn) toStep2Btn.addEventListener("click", function(){ ccxDeptGoToStep(2); });
    if(backStep1Btn) backStep1Btn.addEventListener("click", function(){ ccxDeptGoToStep(1); });

    function setError(fieldEl, hasError){ if(fieldEl) fieldEl.classList.toggle("ccx-error", hasError); }
    function isValidEmail(v){ return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(v); }
    function isValidPhone(v){ var d = v.replace(/[^\d]/g,""); return d.length >= 10 && d.length <= 13; }

    form.addEventListener("submit", function(e){
      e.preventDefault();
      var valid = true;

      var name = form.name.value.trim();
      var nameField = form.querySelector('[data-ccx-dfield="name"]');
      if(name.length < 2){ setError(nameField, true); valid = false; } else { setError(nameField, false); }

      var phone = form.phone.value.trim();
      var phoneField = form.querySelector('[data-ccx-dfield="phone"]');
      if(!isValidPhone(phone)){ setError(phoneField, true); valid = false; } else { setError(phoneField, false); }

      var email = form.email.value.trim();
      var emailField = form.querySelector('[data-ccx-dfield="email"]');
      if(!isValidEmail(email)){ setError(emailField, true); valid = false; } else { setError(emailField, false); }

      var city = form.city.value.trim();
      var message = form.message.value.trim();

      if(!valid){
        var firstError = form.querySelector(".ccx-field.ccx-error");
        if(firstError){ firstError.scrollIntoView({behavior:"smooth", block:"center"}); }
        return;
      }

      var info = deptCurrentProgram || { uniName:"", program:"", uniKey:"" };
      var destEmail = ccxDeptEmails[info.uniKey] || ccxDeptFallbackEmail;

      var subject = "Admission Application — " + info.program + " (" + info.uniName + ")";
      var bodyLines = [
        "Program: " + info.program,
        "University: " + info.uniName,
        "Name: " + name,
        "Phone: " + phone,
        "Email: " + email
      ];
      if(city) bodyLines.push("City: " + city);
      if(message) bodyLines.push("Message: " + message);
      var body = bodyLines.join("\n");

      var mailtoUrl = "mailto:" + encodeURIComponent(destEmail) +
        "?subject=" + encodeURIComponent(subject) +
        "&body=" + encodeURIComponent(body);

      // Opens the visitor's own email client with the application pre-filled.
      // No backend is connected on this static page — wire this to a real
      // form-submission endpoint if/when one exists.
      window.location.href = mailtoUrl;

      var summaryEl = document.getElementById("ccx-dept-summary");
      if(summaryEl){
        summaryEl.innerHTML =
          "<div><strong>Program:</strong> " + escapeHtml(info.program) + "</div>" +
          "<div><strong>University:</strong> " + escapeHtml(info.uniName) + "</div>" +
          "<div><strong>Name:</strong> " + escapeHtml(name) + "</div>" +
          "<div><strong>Phone:</strong> " + escapeHtml(phone) + "</div>" +
          "<div><strong>Email:</strong> " + escapeHtml(email) + "</div>";
      }
      var fallbackEl = document.getElementById("ccx-dept-fallback-email");
      if(fallbackEl) fallbackEl.textContent = "Send to: " + destEmail;

      ccxDeptGoToStep(3);
    });
  }

  /* ---------- SHARED CHROME ---------- */
  function ccxSetupWhatsapp(){
    var number = ccxConfig.whatsappNumber && ccxConfig.whatsappNumber.trim() ? ccxConfig.whatsappNumber.trim() : "";
    var base = number ? ("https://wa.me/" + number) : "https://wa.me/";
    var url = base + "?text=" + encodeURIComponent(ccxConfig.whatsappMessage);
    var floatBtn = document.getElementById("ccx-whatsapp-float");
    var footerBtn = document.getElementById("ccx-footer-whatsapp");
    if(floatBtn) floatBtn.setAttribute("href", url);
    if(footerBtn) footerBtn.setAttribute("href", url);
  }
  function ccxSetupStickyHeader(){
    var header = document.getElementById("ccx-site-header");
    if(!header) return;
    function onScroll(){
      if(window.scrollY > 40){ header.classList.add("ccx-scrolled"); }
      else { header.classList.remove("ccx-scrolled"); }
    }
    document.addEventListener("scroll", onScroll, {passive:true});
    onScroll();
  }
  function ccxSetupMobileDrawer(){
    var hamburger = document.getElementById("ccx-hamburger-btn");
    var drawer = document.getElementById("ccx-mobile-drawer");
    var drawerClose = document.getElementById("ccx-drawer-close-btn");
    if(!hamburger || !drawer || !drawerClose) return;
    function open(){
      drawer.classList.add("ccx-open"); hamburger.classList.add("ccx-active");
      hamburger.setAttribute("aria-expanded","true"); document.body.style.overflow = "hidden";
    }
    function close(){
      drawer.classList.remove("ccx-open"); hamburger.classList.remove("ccx-active");
      hamburger.setAttribute("aria-expanded","false"); document.body.style.overflow = "";
    }
    hamburger.addEventListener("click", function(){ drawer.classList.contains("ccx-open") ? close() : open(); });
    drawerClose.addEventListener("click", close);
    drawer.querySelectorAll("a").forEach(function(a){ a.addEventListener("click", close); });
  }
  function ccxSetupSmoothScroll(){
    document.querySelectorAll('#ccx-page a[href^="#"]').forEach(function(link){
      var href = link.getAttribute("href");
      if(!href || href.length < 2) return;
      link.addEventListener("click", function(e){
        var target = document.querySelector(href);
        if(target){
          e.preventDefault();
          var top = target.getBoundingClientRect().top + window.pageYOffset - 90;
          window.scrollTo({top:top, behavior:"smooth"});
        }
      });
    });
  }
  function ccxSetupScrollReveal(){
    var els = document.querySelectorAll("#ccx-page .ccx-reveal");
    if(!els.length) return;
    if("IntersectionObserver" in window){
      var io = new IntersectionObserver(function(entries){
        entries.forEach(function(entry){
          if(entry.isIntersecting){ entry.target.classList.add("ccx-in"); io.unobserve(entry.target); }
        });
      }, {threshold:0.12, rootMargin:"0px 0px -60px 0px"});
      els.forEach(function(el){ io.observe(el); });
    } else {
      els.forEach(function(el){ el.classList.add("ccx-in"); });
    }
  }
  function ccxSetupFooterYear(){
    var yearEl = document.getElementById("ccx-year");
    if(yearEl) yearEl.textContent = new Date().getFullYear();
  }

  /* ---------- INIT ---------- */
  function ccxInit(){
    ccxSetupWhatsapp();
    ccxSetupStickyHeader();
    ccxSetupMobileDrawer();
    ccxSetupSmoothScroll();
    ccxSetupScrollReveal();
    ccxSetupFooterYear();
    ccxSetupAdmissionModal();
    ccxSetupDeptModal();

    buildFilterUI();
    setupSearch();
    setupClearAll();
    setupSort();
    setupFilterDrawer();
    renderAreaCards();

    // Brief skeleton pass so the grid never pops in with a layout shift.
    window.setTimeout(function(){
      hideSkeleton();
      render();
    }, 260);
  }

  return { init: ccxInit };
})();

if(document.readyState === "loading"){
  document.addEventListener("DOMContentLoaded", ccxProgramsPage.init);
} else {
  ccxProgramsPage.init();
}
</script>

<?php wp_footer(); ?>
</body>
</html>
