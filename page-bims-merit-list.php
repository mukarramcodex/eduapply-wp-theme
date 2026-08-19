<?php
/**
 * Template Name: EduApply — BIMS Merit List
 *
 * Displays the BIMS merit list PDF (embedded viewer + download)
 * alongside the standard BIMS site header/footer chrome, so it feels like
 * part of the BIMS site rather than a generic utility page.
 *
 * The actual PDF comes from inc/resource-documents.php — upload the PDF to
 * the WordPress Media Library, then paste its URL into that file against the
 * 'bims_merit' key. Nothing in this template needs to change when the PDF
 * is updated.
 */

$ccx_doc = function_exists( 'ccx_get_resource_document' ) ? ccx_get_resource_document( 'bims_merit' ) : array();
$ccx_pdf_url     = ! empty( $ccx_doc['url'] ) ? $ccx_doc['url'] : '';
$ccx_pdf_updated = ! empty( $ccx_doc['updated'] ) ? $ccx_doc['updated'] : '';
$ccx_has_pdf     = ! empty( $ccx_pdf_url );
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Merit List — BIMS</title>
<meta name="description" content="Barani Institute of Management & Sciences merit list — view online or download the official PDF." />
<meta name="robots" content="noindex, follow" />

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;700;800&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

<style>

    #bims-page {
      --bims-green-950: #07281D;
      --bims-green-900: #0E3B2A;
      --bims-green-800: #14532D;
      --bims-green-700: #1B6B3C;
      --bims-green-600: #227A46;
      --bims-green-500: #2F9457;
      --bims-green-tint: #E7F2EB;
      --bims-paper: #F4F6F5;
      --bims-paper-dim: #E7ECE9;
      --bims-ink: #1B2B22;
      --bims-ink-soft: #57685E;
      --bims-white: #FFFFFF;
      --bims-gold: #D6A94A;

      --bims-font-display: 'Poppins', sans-serif;
      --bims-font-body: 'Inter', sans-serif;

      --bims-shadow-s: 0 2px 10px rgba(14, 59, 42, 0.08);
      --bims-shadow-m: 0 12px 28px rgba(14, 59, 42, 0.14);
      --bims-shadow-l: 0 22px 50px rgba(14, 59, 42, 0.22);
      --bims-container: 1280px;
    }


    #bims-page,
    #bims-page * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }


    #bims-page {
      font-family: var(--bims-font-body);
      color: var(--bims-ink);
      background: var(--bims-white);
      overflow-x: hidden;
      -webkit-font-smoothing: antialiased;
      position: relative;
    }


    #bims-page img {
      max-width: 100%;
      display: block;
    }


    #bims-page button {
      font-family: inherit;
      cursor: pointer;
      border: none;
      background: none;
    }


    #bims-page .bims-container {
      max-width: var(--bims-container);
      margin: 0 auto;
      padding: 0 clamp(18px, 4vw, 48px);
    }


    @media (prefers-reduced-motion: reduce) {
      #bims-page * {
        animation-duration: 0.001ms !important;
        animation-iteration-count: 1 !important;
        transition-duration: 0.001ms !important;
      }
    }


    #bims-page :focus-visible {
      outline: 3px solid var(--bims-green-500);
      outline-offset: 2px;
    }


    #bims-page .bims-btn {
      display: inline-flex;
      align-items: center;
      gap: 9px;
      padding: 13px 26px;
      border-radius: 6px;
      font-family: var(--bims-font-display);
      font-weight: 600;
      font-size: 14px;
      letter-spacing: 0.01em;
      transition: background .2s ease, color .2s ease, transform .2s ease, box-shadow .2s ease;
    }


    #bims-page .bims-btn-solid {
      background: var(--bims-green-600);
      color: #fff;
      box-shadow: 0 8px 22px rgba(34, 122, 70, 0.32);
    }


    #bims-page .bims-btn-solid:hover {
      background: var(--bims-green-700);
      transform: translateY(-2px);
    }


    #bims-page .bims-btn-outline {
      background: transparent;
      border: 1.5px solid rgba(255, 255, 255, 0.6);
      color: #fff;
    }


    #bims-page .bims-btn-outline:hover {
      background: rgba(255, 255, 255, 0.14);
      transform: translateY(-2px);
    }


    #bims-page .bims-btn-outline-green {
      background: transparent;
      border: 1.5px solid var(--bims-green-600);
      color: var(--bims-green-700);
    }


    #bims-page .bims-btn-outline-green:hover {
      background: var(--bims-green-600);
      color: #fff;
    }


    #bims-page .bims-btn-block {
      width: 100%;
      justify-content: center;
    }


    #bims-page .bims-btn[disabled] {
      opacity: .6;
      cursor: not-allowed;
      transform: none !important;
    }


    #bims-page .bims-topbar .bims-container {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 16px;
      flex-wrap: wrap;
    }


    /* ============================================================
   HEADER / NAV
   ============================================================ */
    #bims-page .bims-header {
      background: #fff;
      box-shadow: 0 1px 0 rgba(14, 59, 42, 0.08);
      position: relative;
      z-index: 100;
    }


    #bims-page .bims-header .bims-container {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 20px;
      padding-top: 14px;
      padding-bottom: 14px;
    }


    #bims-page .bims-logo {
      display: flex;
      align-items: center;
      gap: 10px;
    }


    #bims-page .bims-logo-mark {
      width: 46px;
      height: 46px;
      border-radius: 10px;
      flex-shrink: 0;
      background: linear-gradient(150deg, var(--bims-green-600), var(--bims-green-900));
      display: flex;
      align-items: center;
      justify-content: center;
      font-family: var(--bims-font-display);
      font-weight: 800;
      font-size: 14px;
      color: #fff;
    }


    #bims-page .bims-logo-text {
      font-family: var(--bims-font-display);
      line-height: 1.2;
    }


    #bims-page .bims-logo-text strong {
      display: block;
      font-size: 17px;
      font-weight: 800;
      color: var(--bims-green-900);
    }


    #bims-page .bims-logo-text span {
      display: block;
      font-size: 11px;
      font-weight: 500;
      color: var(--bims-ink-soft);
      letter-spacing: 0.03em;
    }


    #bims-page .bims-nav {
      display: flex;
      align-items: center;
      gap: 6px;
    }


    #bims-page .bims-nav>li {
      position: relative;
    }


    #bims-page .bims-nav>li>a {
      display: flex;
      align-items: center;
      gap: 5px;
      font-size: 14px;
      font-weight: 600;
      color: var(--bims-ink);
      padding: 10px 12px;
      border-radius: 6px;
      transition: color .2s ease, background .2s ease;
    }


    #bims-page .bims-nav>li>a:hover,
    #bims-page .bims-nav>li:focus-within>a {
      color: var(--bims-green-700);
      background: var(--bims-green-tint);
    }


    #bims-page .bims-caret {
      transition: transform .2s ease;
    }


    #bims-page .bims-nav>li:hover .bims-caret,
    #bims-page .bims-nav>li:focus-within .bims-caret {
      transform: rotate(180deg);
    }


    #bims-page .bims-dropdown {
      position: absolute;
      top: 100%;
      left: 0;
      min-width: 240px;
      background: #fff;
      border-radius: 10px;
      box-shadow: var(--bims-shadow-l);
      padding: 10px;
      opacity: 0;
      visibility: hidden;
      transform: translateY(8px);
      transition: opacity .2s ease, transform .2s ease, visibility .2s ease;
    }


    #bims-page .bims-nav>li:hover .bims-dropdown,
    #bims-page .bims-nav>li:focus-within .bims-dropdown {
      opacity: 1;
      visibility: visible;
      transform: translateY(0);
    }


    #bims-page .bims-dropdown a {
      display: block;
      padding: 9px 12px;
      border-radius: 6px;
      font-size: 13.5px;
      font-weight: 500;
      color: var(--bims-ink);
    }


    #bims-page .bims-dropdown a:hover {
      background: var(--bims-green-tint);
      color: var(--bims-green-700);
    }


    #bims-page .bims-dropdown-group-label {
      font-size: 11px;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 0.06em;
      color: var(--bims-green-600);
      padding: 9px 12px 4px;
    }


    #bims-page .bims-dropdown.bims-mega {
      min-width: 560px;
      column-count: 2;
      column-gap: 8px;
    }


    #bims-page .bims-dropdown.bims-mega .bims-dropdown-group {
      break-inside: avoid;
      margin-bottom: 6px;
    }


    #bims-page .bims-header-cta {
      display: flex;
      align-items: center;
      gap: 10px;
    }


    #bims-page .bims-hamburger {
      display: none;
      width: 42px;
      height: 42px;
      border-radius: 8px;
      align-items: center;
      justify-content: center;
      flex-direction: column;
      gap: 5px;
      background: var(--bims-green-tint);
    }


    #bims-page .bims-hamburger span {
      width: 19px;
      height: 2px;
      background: var(--bims-green-800);
      display: block;
      transition: transform .25s ease, opacity .25s ease;
    }


    #bims-page .bims-hamburger.bims-active span:nth-child(1) {
      transform: translateY(7px) rotate(45deg);
    }


    #bims-page .bims-hamburger.bims-active span:nth-child(2) {
      opacity: 0;
    }


    #bims-page .bims-hamburger.bims-active span:nth-child(3) {
      transform: translateY(-7px) rotate(-45deg);
    }


    #bims-page .bims-mobile-nav {
      display: none;
      flex-direction: column;
      background: #fff;
      border-top: 1px solid var(--bims-paper-dim);
      max-height: 0;
      overflow: hidden;
      transition: max-height .35s ease;
    }


    #bims-page .bims-mobile-nav.bims-open {
      max-height: 2000px;
      overflow-y: auto;
    }


    #bims-page .bims-mobile-nav>li>a {
      display: block;
      padding: 14px 20px;
      font-weight: 700;
      font-size: 14.5px;
      color: var(--bims-green-900);
      border-bottom: 1px solid var(--bims-paper-dim);
    }


    #bims-page .bims-mobile-sub {
      padding: 0 20px 12px 30px;
      display: flex;
      flex-direction: column;
      gap: 4px;
    }


    #bims-page .bims-mobile-sub a {
      font-size: 13.5px;
      font-weight: 500;
      color: var(--bims-ink-soft);
      padding: 6px 0;
    }


    #bims-page .bims-mobile-sub-label {
      font-size: 11px;
      font-weight: 700;
      text-transform: uppercase;
      color: var(--bims-green-600);
      margin-top: 8px;
    }


    @media (max-width:1080px) {
      #bims-page .bims-nav {
        display: none;
      }

      #bims-page .bims-header-cta .bims-btn {
        display: none;
      }

      #bims-page .bims-hamburger {
        display: flex;
      }

      #bims-page .bims-mobile-nav {
        display: flex;
      }
    }


    #bims-page .bims-announcement .bims-container {
      display: flex;
      align-items: center;
      gap: 12px;
    }


    /* ============================================================
   FOOTER
   ============================================================ */
    #bims-page .bims-footer {
      background: var(--bims-green-950);
      color: rgba(255, 255, 255, 0.68);
      padding: 70px 0 0;
    }


    #bims-page .bims-footer-grid {
      display: grid;
      grid-template-columns: 1.3fr 1fr 1fr 1fr;
      gap: 36px;
      padding-bottom: 44px;
      border-bottom: 1px solid rgba(255, 255, 255, 0.08);
    }


    @media (max-width:900px) {
      #bims-page .bims-footer-grid {
        grid-template-columns: 1fr 1fr;
        row-gap: 32px;
      }
    }


    @media (max-width:520px) {
      #bims-page .bims-footer-grid {
        grid-template-columns: 1fr;
      }
    }


    #bims-page .bims-footer-brand {
      display: flex;
      gap: 12px;
      align-items: flex-start;
    }


    #bims-page .bims-footer-brand-text strong {
      display: block;
      font-family: var(--bims-font-display);
      color: #fff;
      font-size: 17px;
      font-weight: 800;
    }


    #bims-page .bims-footer-brand-text span {
      display: block;
      font-size: 12px;
      color: rgba(255, 255, 255, 0.5);
      margin-top: 2px;
    }


    #bims-page .bims-footer-brand p {
      margin-top: 14px;
      font-size: 13px;
      line-height: 1.6;
      color: rgba(255, 255, 255, 0.55);
      max-width: 32ch;
    }


    #bims-page .bims-footer-col h5 {
      font-family: var(--bims-font-display);
      font-size: 12.5px;
      font-weight: 700;
      letter-spacing: 0.06em;
      text-transform: uppercase;
      color: var(--bims-gold);
      margin-bottom: 18px;
    }


    #bims-page .bims-footer-col ul {
      display: flex;
      flex-direction: column;
      gap: 11px;
    }


    #bims-page .bims-footer-col a {
      font-size: 13.5px;
      color: rgba(255, 255, 255, 0.68);
      transition: color .2s ease;
    }


    #bims-page .bims-footer-col a:hover {
      color: #fff;
    }


    #bims-page .bims-footer-bottom {
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
      gap: 14px;
      padding: 22px 0 26px;
      font-size: 12.5px;
      color: rgba(255, 255, 255, 0.45);
    }


    /* ============================================================
   WHATSAPP
   ============================================================ */
    #bims-page .bims-whatsapp {
      position: fixed;
      right: 20px;
      bottom: 20px;
      z-index: 500;
      width: 52px;
      height: 52px;
      border-radius: 50%;
      background: #25D366;
      display: flex;
      align-items: center;
      justify-content: center;
      box-shadow: 0 8px 20px rgba(37, 211, 102, 0.4);
      transition: transform .2s ease;
    }


    #bims-page .bims-whatsapp:hover {
      transform: scale(1.08);
    }


    #bims-page .bims-modal-header {
      margin-bottom: 22px;
      padding-right: 30px;
    }


    #bims-page .bims-modal-header h3 {
      font-family: var(--bims-font-display);
      font-size: clamp(19px, 2.4vw, 23px);
      font-weight: 700;
      color: var(--bims-green-900);
    }


    #bims-page .bims-dept-header {
      margin-bottom: 18px;
    }


    #bims-page .bims-dept-header h3 {
      font-family: var(--bims-font-display);
      font-size: clamp(19px, 2.4vw, 23px);
      font-weight: 700;
      color: var(--bims-green-900);
    }


    #bims-page .bims-dept-header p {
      margin-top: 6px;
      font-size: 13.5px;
      color: var(--bims-ink-soft);
      line-height: 1.5;
    }


    #bims-page .bims-dept-form-actions .bims-btn {
      flex: 1;
      justify-content: center;
    }


    #bims-page .bims-qa-header {
      margin-bottom: 20px;
      padding-right: 30px;
    }


    #bims-page .bims-qa-header h3 {
      font-family: var(--bims-font-display);
      font-size: clamp(19px, 2.4vw, 23px);
      font-weight: 700;
      color: var(--bims-green-900);
    }


    #bims-page .bims-qa-header p {
      margin-top: 6px;
      font-size: 13.5px;
      color: var(--bims-ink-soft);
      line-height: 1.5;
    }


    #bims-page .bims-qa-form-actions .bims-btn {
      flex: 1;
      justify-content: center;
    }

/* ============================================================
   RESOURCE PAGE CONTENT (Merit List / Fee Structure)
   Scoped under #bims-page, reuses the BIMS design tokens above.
   ============================================================ */
#bims-page .bims-res-main{ background:var(--bims-paper); min-height:60vh; }
#bims-page .bims-res-breadcrumb{ padding:18px clamp(18px,4vw,48px) 0; font-size:13px; color:var(--bims-ink-soft); display:flex; gap:8px; align-items:center; }
#bims-page .bims-res-breadcrumb a{ color:var(--bims-ink-soft); }
#bims-page .bims-res-breadcrumb a:hover{ text-decoration:underline; }
#bims-page .bims-res-hero{ padding:22px 0 28px; }
#bims-page .bims-res-eyebrow{ font-size:12.5px; font-weight:700; text-transform:uppercase; letter-spacing:0.08em; color:var(--bims-ink-soft); margin-bottom:8px; }
#bims-page .bims-res-hero h1{ font-family:var(--bims-font-display); font-size:clamp(28px,4vw,42px); line-height:1.12; margin-bottom:12px; }
#bims-page .bims-res-lead{ max-width:720px; font-size:15.5px; line-height:1.65; color:var(--bims-ink-soft); }
#bims-page .bims-res-doc{ padding-bottom:64px; }
#bims-page .bims-res-doc-grid{ display:grid; grid-template-columns:1fr 320px; gap:28px; align-items:start; }
@media (max-width:900px){ #bims-page .bims-res-doc-grid{ grid-template-columns:1fr; } }
#bims-page .bims-res-doc-viewer{ background:var(--bims-white); border-radius:14px; box-shadow:var(--bims-shadow-m); overflow:hidden; min-height:70vh; display:flex; flex-direction:column; }
#bims-page .bims-res-doc-viewer iframe{ flex:1; width:100%; min-height:70vh; border:0; display:block; }
#bims-page .bims-res-doc-empty{ padding:48px 28px; text-align:center; color:var(--bims-ink-soft); }
#bims-page .bims-res-doc-side{ display:flex; flex-direction:column; gap:16px; }
#bims-page .bims-res-doc-card{ background:var(--bims-white); border-radius:14px; box-shadow:var(--bims-shadow-s); padding:22px; }
#bims-page .bims-res-doc-card h3{ font-family:var(--bims-font-display); font-size:17px; margin-bottom:8px; }
#bims-page .bims-res-doc-card p{ font-size:13.5px; line-height:1.55; color:var(--bims-ink-soft); margin-bottom:16px; }
#bims-page .bims-res-doc-card a{ width:100%; text-align:center; justify-content:center; display:flex; margin-bottom:10px; }
#bims-page .bims-res-updated{ font-size:12px; color:var(--bims-ink-soft); margin-top:10px; margin-bottom:0 !important; }
</style>
</head>
<body>
<div id="bims-page">

<header class="bims-header">
      <div class="bims-container">
        <a href="/bims" class="bims-logo" aria-label="BIMS home">
          <img src="https://eduapply.online/wp-content/uploads/2026/08/bims-logo-nav.webp" style="width:auto; height:42px" alt="BIMS logo">
        </a>

        <ul class="bims-nav" aria-label="Primary">
          <li><a href="#">Home</a></li>
          <li>
            <a href="#" aria-haspopup="true">Admission <svg class="bims-caret" width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                <path d="M6 9l6 6 6-6" />
              </svg></a>
            <div class="bims-dropdown">
              <a href="#">Apply Online</a>
              <a href="#">Fee Structure</a>
              <a href="#">Scholarship</a>
              <a href="#">How To Apply</a>
            </div>
          </li>
          <li>
            <a href="#" aria-haspopup="true">About Us <svg class="bims-caret" width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                <path d="M6 9l6 6 6-6" />
              </svg></a>
            <div class="bims-dropdown">
              <a href="#">Vision &amp; Mission</a>
              <a href="#">Core Values</a>
              <a href="#">History</a>
              <a href="#">Affiliation</a>
              <a href="#">DG Message</a>
              <a href="#">Our Faculty</a>
              <a href="#">BIMS Policies</a>
              <a href="#">Contact Us</a>
            </div>
          </li>
          <li>
            <a href="#" aria-haspopup="true">Degree Programs <svg class="bims-caret" width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                <path d="M6 9l6 6 6-6" />
              </svg></a>
            <div class="bims-dropdown bims-mega">
              <div class="bims-dropdown-group">
                <p class="bims-dropdown-group-label">Business &amp; Management</p>
                <a href="#">BBA (Hons) 4 Years</a>
                <a href="#">BBA 2 Years</a>
                <a href="#">BS Accounts &amp; Finance</a>
                <a href="#">BS Economics</a>
              </div>
              <div class="bims-dropdown-group">
                <p class="bims-dropdown-group-label">Computing &amp; IT</p>
                <a href="#">BSCS (General Computing)</a>
                <a href="#">BSCS (Software Engineering)</a>
                <a href="#">BSCS (Artificial Intelligence)</a>
              </div>
              <div class="bims-dropdown-group">
                <p class="bims-dropdown-group-label">Sciences</p>
                <a href="#">BS Environmental Sciences</a>
                <a href="#">BS Mathematics</a>
                <a href="#">BS Statistics</a>
              </div>
              <div class="bims-dropdown-group">
                <p class="bims-dropdown-group-label">Allied Health Sciences</p>
                <a href="#">HND (Human Nutrition &amp; Dietetics)</a>
                <a href="#">BS MLT (Medical Laboratory Technology)</a>
              </div>
            </div>
          </li>
          <li>
            <a href="#" aria-haspopup="true">Life at BIMS <svg class="bims-caret" width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                <path d="M6 9l6 6 6-6" />
              </svg></a>
            <div class="bims-dropdown">
              <a href="#">Gallery</a>
              <a href="#">Student Portal</a>
              <a href="#">Alumni Success Stories</a>
              <a href="#">Student Societies</a>
              <a href="#">Directorate of Student Affairs</a>
            </div>
          </li>
          <li><a href="#">Downloads</a></li>
          <li><a href="#">BMS</a></li>
        </ul>

        <div class="bims-header-cta">
          <a href="#" class="bims-btn bims-btn-solid bims-admission-trigger">Admission Now</a>
          <button class="bims-hamburger" id="bims-hamburger-btn" aria-label="Open menu" aria-expanded="false" aria-controls="bims-mobile-nav">
            <span></span><span></span><span></span>
          </button>
        </div>
      </div>

      <ul class="bims-mobile-nav" id="bims-mobile-nav" aria-label="Mobile primary">
        <li><a href="#">Home</a></li>
        <li>
          <a href="#">Admission</a>
          <div class="bims-mobile-sub">
            <a href="#">Apply Online</a>
            <a href="#">Fee Structure</a>
            <a href="#">Scholarship</a>
            <a href="#">How To Apply</a>
          </div>
        </li>
        <li>
          <a href="#">About Us</a>
          <div class="bims-mobile-sub">
            <a href="#">Vision &amp; Mission</a>
            <a href="#">Core Values</a>
            <a href="#">History</a>
            <a href="#">Affiliation</a>
            <a href="#">DG Message</a>
            <a href="#">Our Faculty</a>
            <a href="#">BIMS Policies</a>
            <a href="#">Contact Us</a>
          </div>
        </li>
        <li>
          <a href="#">Degree Programs</a>
          <div class="bims-mobile-sub">
            <p class="bims-mobile-sub-label">Business &amp; Management</p>
            <a href="#">BBA (Hons) 4 Years</a>
            <a href="#">BS Accounts &amp; Finance</a>
            <p class="bims-mobile-sub-label">Computing &amp; IT</p>
            <a href="#">BSCS (Software Engineering)</a>
            <a href="#">BSCS (Artificial Intelligence)</a>
            <p class="bims-mobile-sub-label">Sciences</p>
            <a href="#">BS Environmental Sciences</a>
            <p class="bims-mobile-sub-label">Allied Health Sciences</p>
            <a href="#">BS MLT</a>
          </div>
        </li>
        <li>
          <a href="#">Life at BIMS</a>
          <div class="bims-mobile-sub">
            <a href="#">Gallery</a>
            <a href="#">Student Portal</a>
            <a href="#">Alumni Success Stories</a>
          </div>
        </li>
        <li><a href="#">Downloads</a></li>
        <li style="padding:16px 20px;"><a href="#" class="bims-btn bims-btn-solid bims-btn-block bims-admission-trigger">Admission Now</a></li>
        <li><a href="#">BMS</a></li>
      </ul>
    </header>

<main class="bims-res-main">
  <div class="bims-container bims-res-breadcrumb">
    <a href="/bims">BIMS</a>
    <span>/</span>
    <span>Merit List</span>
  </div>

  <section class="bims-res-hero">
    <div class="bims-container">
      <p class="bims-res-eyebrow">Barani Institute of Management & Sciences</p>
      <h1>Merit List</h1>
      <p class="bims-res-lead">Check the official Barani Institute of Management & Sciences merit list below. Merit lists are updated by the university as each admission phase is finalized — download the PDF for the complete, authoritative list of roll numbers and merit positions.</p>
    </div>
  </section>

  <section class="bims-res-doc">
    <div class="bims-container bims-res-doc-grid">
      <div class="bims-res-doc-viewer">
        <?php if ( $ccx_has_pdf ) : ?>
          <iframe src="<?php echo esc_url( $ccx_pdf_url ); ?>" title="Barani Institute of Management & Sciences Merit List PDF" loading="lazy"></iframe>
        <?php else : ?>
          <div class="bims-res-doc-empty">
            <p>The merit list PDF hasn't been uploaded yet. Once it's added in <code>inc/resource-documents.php</code>, it will appear here automatically.</p>
          </div>
        <?php endif; ?>
      </div>

      <aside class="bims-res-doc-side">
        <div class="bims-res-doc-card">
          <h3>Download Merit List</h3>
          <p>Get the full PDF with roll numbers, aggregate scores and merit positions for this list.</p>
          <?php if ( $ccx_has_pdf ) : ?>
            <a href="<?php echo esc_url( $ccx_pdf_url ); ?>" class="bims-btn bims-btn-solid" download>Download Merit List PDF</a>
            <a href="<?php echo esc_url( $ccx_pdf_url ); ?>" class="bims-btn bims-btn-outline" target="_blank" rel="noopener">Open in New Tab</a>
            <?php if ( $ccx_pdf_updated ) : ?>
              <p class="bims-res-updated">Last updated: <?php echo esc_html( $ccx_pdf_updated ); ?></p>
            <?php endif; ?>
          <?php else : ?>
            <p class="bims-res-updated">Check back soon.</p>
          <?php endif; ?>
        </div>

        <div class="bims-res-doc-card">
          <h3>Didn't Find Your Name?</h3>
          <p>Merit lists are released in phases. If you're not on this list, you may be considered in the next phase, or you can contact the admissions office directly.</p>
          <a href="/admissions/apply?university=BIMS" class="bims-btn bims-btn-solid">Apply Now</a>
          <a href="/bims" class="bims-btn bims-btn-outline">Back to BIMS</a>
        </div>
      </aside>
    </div>
  </section>
</main>

<footer class="bims-footer">
      <div class="bims-container">
        <div class="bims-footer-grid">
          <div class="bims-footer-brand">
            <span class="bims-logo-mark" aria-hidden="true">BIMS</span>
            <span class="bims-footer-brand-text">
              <strong>BIMS</strong>
              <span>Rawalpindi Campus</span>
              <p>Barani Institute of Management &amp; Sciences — BIMS Campus, Main Murree Road, b/w 5th and 6th Road, Rawalpindi.</p>
            </span>
          </div>

          <div class="bims-footer-col">
            <h5>Admissions</h5>
            <ul>
              <li><a href="#">Apply Online</a></li>
              <li><a href="#">Fee Structure</a></li>
              <li><a href="#">Scholarships</a></li>
              <li><a href="#">How To Apply</a></li>
              <li><a href="#">Prospectus &amp; Downloads</a></li>
            </ul>
          </div>

          <div class="bims-footer-col">
            <h5>Explore</h5>
            <ul>
              <li><a href="#">About BIMS</a></li>
              <li><a href="#dg-message">DG Message</a></li>
              <li><a href="#">Student Portal</a></li>
              <li><a href="#">Alumni Success Stories</a></li>
              <li><a href="#">Student Societies</a></li>
              <li><a href="#">Student Affairs</a></li>
            </ul>
          </div>

          <div class="bims-footer-col">
            <h5>Support</h5>
            <ul>
              <li><a href="#bims-contact">Contact Us</a></li>
              <li><a href="#">BIMS Policies</a></li>
              <li><a href="#bims-events">Campus Gallery</a></li>
              <li><a href="#">Affiliation</a></li>
            </ul>
          </div>
        </div>

        <div class="bims-footer-bottom">
          <p>&copy; <span id="bims-year"></span> Barani Institute of Management &amp; Sciences. All Rights Reserved.</p>
          <div class="bims-social">
            <a href="https://www.facebook.com/bimsOfficial/" target="_blank" rel="noopener" aria-label="BIMS on Facebook"><svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor">
                <path d="M22 12a10 10 0 10-11.6 9.9v-7H7.9V12h2.5V9.8c0-2.5 1.5-3.9 3.8-3.9 1.1 0 2.2.2 2.2.2v2.5h-1.3c-1.2 0-1.6.8-1.6 1.6V12h2.8l-.4 2.9h-2.4v7A10 10 0 0022 12z" />
              </svg></a>
            <a href="https://www.instagram.com/bims_official_page/" target="_blank" rel="noopener" aria-label="BIMS on Instagram"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                <rect x="3" y="3" width="18" height="18" rx="5" />
                <circle cx="12" cy="12" r="4" />
                <circle cx="17.5" cy="6.5" r="1" />
              </svg></a>
            <a href="https://www.linkedin.com/company/bimsofficial/" target="_blank" rel="noopener" aria-label="BIMS on LinkedIn"><svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor">
                <path d="M4.98 3.5a2.5 2.5 0 11-.02 5 2.5 2.5 0 01.02-5zM3 9h4v12H3zM9 9h3.8v1.7h.05c.53-1 1.83-2.06 3.77-2.06 4.03 0 4.78 2.65 4.78 6.1V21h-4v-5.7c0-1.36-.02-3.1-1.89-3.1-1.9 0-2.19 1.48-2.19 3v5.8H9z" />
              </svg></a>
            <a href="https://twitter.com/bimsedu" target="_blank" rel="noopener" aria-label="BIMS on Twitter/X"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor">
                <path d="M18.9 3H22l-7.6 8.7L23 21h-6.8l-5.3-6.5L5 21H2l8.1-9.3L1.5 3h7l4.8 5.9L18.9 3z" />
              </svg></a>
            <a href="https://wa.me/923333332467" target="_blank" rel="noopener" aria-label="BIMS on WhatsApp"><svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor">
                <path d="M17.6 6.32A8.86 8.86 0 0012.05 4a8.94 8.94 0 00-7.74 13.4L3 21l3.7-1.28a8.9 8.9 0 004.34 1.12h.01A8.94 8.94 0 0021 12.32a8.87 8.87 0 00-3.4-6z" />
              </svg></a>
          </div>
        </div>
      </div>
    </footer>

</div>

<script>
(function(){
  var btn = document.getElementById("bims-hamburger-btn");
  var nav = document.getElementById("bims-mobile-nav");
  if (btn && nav) {
    btn.addEventListener("click", function(){
      var open = btn.classList.toggle("bims-active");
      btn.setAttribute("aria-expanded", open ? "true" : "false");
      nav.classList.toggle("bims-mobile-open", open);
    });
  }

  var header = document.querySelector("#bims-page .bims-header");
  if (header) {
    var onScroll = function(){
      header.classList.toggle("bims-scrolled", window.scrollY > 12);
    };
    window.addEventListener("scroll", onScroll, { passive: true });
    onScroll();
  }

  var yearEl = document.getElementById("bims-year");
  if (yearEl) {
    yearEl.textContent = new Date().getFullYear();
  }
})();
</script>
</body>
</html>
