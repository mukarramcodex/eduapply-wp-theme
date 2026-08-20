<?php
/**
 * Template Name: EduApply — Bahria University Fee Structure
 *
 * Displays the Bahria University fee structure PDF (embedded viewer + download)
 * alongside the standard Bahria University site header/footer chrome, so it feels like
 * part of the Bahria University site rather than a generic utility page.
 *
 * The actual PDF comes from inc/resource-documents.php — upload the PDF to
 * the WordPress Media Library, then paste its URL into that file against the
 * 'bahria_fee' key. Nothing in this template needs to change when the PDF
 * is updated.
 */

$ccx_doc = function_exists( 'ccx_get_resource_document' ) ? ccx_get_resource_document( 'bahria_fee' ) : array();
$ccx_pdf_url     = ! empty( $ccx_doc['url'] ) ? $ccx_doc['url'] : '';
$ccx_pdf_updated = ! empty( $ccx_doc['updated'] ) ? $ccx_doc['updated'] : '';
$ccx_has_pdf     = ! empty( $ccx_pdf_url );
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Fee Structure — Bahria University</title>
<meta name="description" content="Bahria University fee structure — view online or download the official PDF." />
<meta name="robots" content="noindex, follow" />

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:wght@500;600;700;800&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

<style>

    #bahria-page {
      --bahria-navy-950: #052030;
      --bahria-navy-900: #0B3550;
      --bahria-navy-800: #134A6B;
      --bahria-navy-700: #1C5E85;
      --bahria-gold: #B08D3E;
      --bahria-gold-bright: #CDA753;
      --bahria-maroon: #7A1F2B;
      --bahria-maroon-dark: #5E1620;
      --bahria-paper: #F4F6F8;
      --bahria-paper-dim: #E7EBF0;
      --bahria-ink: #152430;
      --bahria-ink-soft: #57667A;
      --bahria-white: #FFFFFF;

      --bahria-font-display: 'Barlow', sans-serif;
      --bahria-font-body: 'Inter', sans-serif;

      --bahria-shadow-s: 0 2px 10px rgba(5, 32, 48, 0.09);
      --bahria-shadow-m: 0 12px 30px rgba(5, 32, 48, 0.15);
      --bahria-shadow-l: 0 24px 56px rgba(5, 32, 48, 0.24);
      --bahria-container: 1300px;
    }


    #bahria-page,
    #bahria-page * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }


    #bahria-page {
      font-family: var(--bahria-font-body);
      color: var(--bahria-ink);
      background: var(--bahria-white);
      overflow-x: hidden;
      -webkit-font-smoothing: antialiased;
      position: relative;
    }


    #bahria-page img {
      max-width: 100%;
      display: block;
    }


    #bahria-page button {
      font-family: inherit;
      cursor: pointer;
      border: none;
      background: none;
    }


    #bahria-page .bahria-container {
      max-width: var(--bahria-container);
      margin: 0 auto;
      padding: 0 clamp(18px, 4vw, 48px);
    }


    @media (prefers-reduced-motion: reduce) {
      #bahria-page * {
        animation-duration: 0.001ms !important;
        animation-iteration-count: 1 !important;
        transition-duration: 0.001ms !important;
      }
    }


    #bahria-page :focus-visible {
      outline: 3px solid var(--bahria-gold);
      outline-offset: 2px;
    }


    #bahria-page .bahria-section-title {
      font-family: var(--bahria-font-display);
      font-weight: 800;
      font-size: clamp(24px, 3.1vw, 36px);
      color: var(--bahria-navy-900);
      line-height: 1.2;
    }


    #bahria-page .bahria-btn {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      padding: 13px 26px;
      border-radius: 4px;
      font-family: var(--bahria-font-display);
      font-weight: 700;
      font-size: 13.5px;
      letter-spacing: 0.02em;
      transition: background .2s ease, color .2s ease, transform .2s ease, border-color .2s ease;
    }


    #bahria-page .bahria-btn-maroon {
      background: var(--bahria-maroon);
      color: #fff;
    }


    #bahria-page .bahria-btn-maroon:hover {
      background: var(--bahria-maroon-dark);
      transform: translateY(-1px);
    }


    #bahria-page .bahria-btn-navy {
      background: var(--bahria-navy-900);
      color: #fff;
    }


    #bahria-page .bahria-btn-navy:hover {
      background: var(--bahria-navy-800);
      transform: translateY(-1px);
    }


    #bahria-page .bahria-btn-outline-white {
      background: transparent;
      border: 1.5px solid rgba(255, 255, 255, 0.55);
      color: #fff;
    }


    #bahria-page .bahria-btn-outline-white:hover {
      background: rgba(255, 255, 255, 0.14);
    }


    #bahria-page .bahria-btn-outline-navy {
      background: transparent;
      border: 1.5px solid var(--bahria-navy-800);
      color: var(--bahria-navy-900);
    }


    #bahria-page .bahria-btn-outline-navy:hover {
      background: var(--bahria-navy-900);
      color: #fff;
    }


    #bahria-page .bahria-btn-block {
      width: 100%;
      justify-content: center;
    }


    /* ============================================================
   TOP UTILITY BAR
   ============================================================ */
    #bahria-page .bahria-topbar {
      background: var(--bahria-navy-950);
      padding: 8px 0;
      font-size: 12px;
    }


    #bahria-page .bahria-topbar .bahria-container {
      display: flex;
      justify-content: flex-end;
      gap: 18px;
      flex-wrap: wrap;
    }


    @media (max-width:760px) {
      #bahria-page .bahria-topbar .bahria-container {
        justify-content: center;
      }
    }


    /* ============================================================
   HEADER
   ============================================================ */
    #bahria-page .bahria-header {
      background: #fff;
      box-shadow: 0 1px 0 rgba(5, 32, 48, 0.08);
      position: relative;
      z-index: 100;
    }


    #bahria-page .bahria-header .bahria-container {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 20px;
      padding-top: 12px;
      padding-bottom: 12px;
    }


    #bahria-page .bahria-logo {
      display: flex;
      align-items: center;
      gap: 10px;
    }


    #bahria-page .bahria-logo img {
      height: 50px;
      width: auto;
      display: block;
    }


    #bahria-page .bahria-logo-text {
      font-family: var(--bahria-font-display);
      line-height: 1.2;
    }


    #bahria-page .bahria-logo-text strong {
      display: block;
      font-size: 16px;
      font-weight: 800;
      color: var(--bahria-navy-900);
    }


    #bahria-page .bahria-logo-text span {
      display: block;
      font-size: 11px;
      font-weight: 600;
      color: var(--bahria-ink-soft);
      letter-spacing: 0.03em;
    }


    #bahria-page .bahria-nav {
      display: flex;
      align-items: center;
      gap: 4px;
    }


    #bahria-page .bahria-nav a {
      font-size: 13.5px;
      font-weight: 700;
      color: var(--bahria-navy-900);
      padding: 10px 13px;
      border-radius: 5px;
      transition: background .2s ease, color .2s ease;
    }


    #bahria-page .bahria-nav a:hover {
      background: var(--bahria-paper);
      color: var(--bahria-maroon);
    }


    #bahria-page .bahria-header-cta {
      display: flex;
      align-items: center;
      gap: 10px;
    }


    #bahria-page .bahria-hamburger {
      display: none;
      width: 42px;
      height: 42px;
      border-radius: 6px;
      align-items: center;
      justify-content: center;
      flex-direction: column;
      gap: 5px;
      background: var(--bahria-paper);
    }


    #bahria-page .bahria-hamburger span {
      width: 19px;
      height: 2px;
      background: var(--bahria-navy-900);
      display: block;
      transition: transform .25s ease, opacity .25s ease;
    }


    #bahria-page .bahria-hamburger.bahria-active span:nth-child(1) {
      transform: translateY(7px) rotate(45deg);
    }


    #bahria-page .bahria-hamburger.bahria-active span:nth-child(2) {
      opacity: 0;
    }


    #bahria-page .bahria-hamburger.bahria-active span:nth-child(3) {
      transform: translateY(-7px) rotate(-45deg);
    }


    #bahria-page .bahria-mobile-nav {
      display: none;
      flex-direction: column;
      background: var(--bahria-navy-950);
      max-height: 0;
      overflow: hidden;
      overflow-y: auto;
      transition: max-height .35s ease;
    }


    #bahria-page .bahria-mobile-nav.bahria-open {
      max-height: 70vh;
    }


    #bahria-page .bahria-mobile-nav a {
      display: block;
      color: #fff;
      font-size: 14.5px;
      font-weight: 700;
      padding: 14px 20px;
      border-bottom: 1px solid rgba(255, 255, 255, 0.08);
    }


    @media (max-width:980px) {
      #bahria-page .bahria-nav {
        display: none;
      }

      #bahria-page .bahria-header-cta .bahria-btn {
        display: none;
      }

      #bahria-page .bahria-hamburger {
        display: flex;
      }

      #bahria-page .bahria-mobile-nav {
        display: flex;
      }
    }


    #bahria-page .bahria-vmr-card h3 {
      font-family: var(--bahria-font-display);
      font-size: 16px;
      font-weight: 800;
      color: var(--bahria-navy-900);
      margin-bottom: 14px;
      text-transform: uppercase;
      letter-spacing: 0.02em;
    }


    #bahria-page .bahria-vmr-card.bahria-rector {
      background: var(--bahria-navy-950);
      color: #fff;
    }


    #bahria-page .bahria-news-body h3 {
      font-family: var(--bahria-font-display);
      font-size: 14.5px;
      font-weight: 700;
      color: var(--bahria-navy-900);
      line-height: 1.4;
      margin-bottom: 10px;
      min-height: 60px;
    }


    #bahria-page .bahria-read-more:hover {
      color: var(--bahria-navy-900);
    }


    #bahria-page .bahria-news-controls button {
      width: 38px;
      height: 38px;
      border-radius: 50%;
      background: #fff;
      box-shadow: var(--bahria-shadow-s);
      color: var(--bahria-navy-900);
      display: flex;
      align-items: center;
      justify-content: center;
      transition: background .2s ease, color .2s ease;
    }


    #bahria-page .bahria-news-controls button:hover {
      background: var(--bahria-navy-900);
      color: #fff;
    }


    #bahria-page .bahria-event-card {
      display: flex;
      align-items: center;
      gap: 26px;
      background: var(--bahria-navy-950);
      color: #fff;
      border-radius: 16px;
      padding: 30px;
      box-shadow: var(--bahria-shadow-m);
    }


    #bahria-page .bahria-event-date {
      flex-shrink: 0;
      width: 90px;
      height: 90px;
      border-radius: 12px;
      background: var(--bahria-gold);
      color: var(--bahria-navy-950);
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      font-family: var(--bahria-font-display);
    }


    /* ============================================================
   ADMISSIONS
   ============================================================ */
    #bahria-page .bahria-admissions {
      padding: 80px 0;
      background: var(--bahria-navy-950);
      color: #fff;
    }


    #bahria-page .bahria-why-num {
      font-family: var(--bahria-font-display);
      font-weight: 800;
      font-size: clamp(18px, 2vw, 24px);
      color: var(--bahria-navy-900);
    }


    #bahria-page .bahria-ac-body h3 {
      font-family: var(--bahria-font-display);
      font-size: 14px;
      font-weight: 700;
      color: var(--bahria-navy-900);
      margin-bottom: 8px;
      line-height: 1.35;
    }


    /* ============================================================
   RESEARCH
   ============================================================ */
    #bahria-page .bahria-research {
      padding: 80px 0;
      background: var(--bahria-navy-950);
      color: #fff;
    }


    #bahria-page .bahria-support-item {
      background: var(--bahria-paper);
      border-radius: 10px;
      padding: 18px 12px;
      text-align: center;
      font-size: 11.5px;
      font-weight: 700;
      color: var(--bahria-navy-900);
      transition: background .2s ease, color .2s ease;
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 10px;
    }


    #bahria-page .bahria-support-item:hover {
      background: var(--bahria-navy-900);
      color: #fff;
    }


    /* ============================================================
   FOOTER
   ============================================================ */
    #bahria-page .bahria-footer {
      background: var(--bahria-navy-950);
      color: rgba(255, 255, 255, 0.68);
      padding: 64px 0 0;
    }


    #bahria-page .bahria-footer-top {
      display: grid;
      grid-template-columns: 1.2fr 1fr 1fr 1.2fr;
      gap: 36px;
      padding-bottom: 40px;
      border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    }


    #bahria-page .bahria-footer-brand img {
      height: 56px;
      width: auto;
      margin-bottom: 14px;
    }


    #bahria-page .bahria-footer-video {
      border-radius: 10px;
      overflow: hidden;
      aspect-ratio: 16/9;
      box-shadow: var(--bahria-shadow-m);
    }


    #bahria-page .bahria-footer-video iframe {
      width: 100%;
      height: 100%;
      border: 0;
      display: block;
    }


    #bahria-page .bahria-footer-col h5 {
      font-family: var(--bahria-font-display);
      font-size: 12px;
      font-weight: 700;
      letter-spacing: 0.07em;
      text-transform: uppercase;
      color: var(--bahria-gold-bright);
      margin-bottom: 16px;
    }


    #bahria-page .bahria-footer-col ul {
      display: flex;
      flex-direction: column;
      gap: 10px;
    }


    #bahria-page .bahria-footer-col a {
      font-size: 13.5px;
      color: rgba(255, 255, 255, 0.65);
    }


    #bahria-page .bahria-footer-col a:hover {
      color: #fff;
    }


    #bahria-page .bahria-footer-social {
      display: flex;
      gap: 10px;
      margin-top: 16px;
    }


    #bahria-page .bahria-footer-social a {
      width: 34px;
      height: 34px;
      border-radius: 50%;
      background: rgba(255, 255, 255, 0.08);
      color: #fff;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: background .2s ease;
    }


    #bahria-page .bahria-footer-social a:hover {
      background: var(--bahria-maroon);
    }


    #bahria-page .bahria-footer-bottom {
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
      gap: 12px;
      padding: 20px 0 26px;
      font-size: 12px;
      color: rgba(255, 255, 255, 0.42);
    }


    @media (max-width:900px) {
      #bahria-page .bahria-footer-top {
        grid-template-columns: 1fr 1fr;
        row-gap: 32px;
      }
    }


    @media (max-width:520px) {
      #bahria-page .bahria-footer-top {
        grid-template-columns: 1fr;
      }
    }


    #bahria-page .bahria-modal-close {
      position: absolute;
      top: 16px;
      right: 16px;
      width: 36px;
      height: 36px;
      border-radius: 50%;
      background: var(--bahria-paper);
      color: var(--bahria-navy-900);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 20px;
      line-height: 1;
      transition: background .2s ease;
    }


    #bahria-page .bahria-modal-header {
      margin-bottom: 22px;
      padding-right: 30px;
    }


    #bahria-page .bahria-modal-header h3 {
      font-family: var(--bahria-font-display);
      font-size: clamp(19px, 2.4vw, 23px);
      font-weight: 800;
      color: var(--bahria-navy-900);
    }


    #bahria-page .bahria-mfield label {
      font-size: 13px;
      font-weight: 700;
      color: var(--bahria-navy-900);
    }


    #bahria-page .bahria-dept-close {
      position: absolute;
      top: 16px;
      right: 16px;
      width: 36px;
      height: 36px;
      border-radius: 50%;
      background: var(--bahria-paper);
      color: var(--bahria-navy-900);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 20px;
      line-height: 1;
      transition: background .2s ease;
      z-index: 2;
    }


    #bahria-page .bahria-dept-step-dot.bahria-dept-step-active .bahria-num {
      background: var(--bahria-gold);
      color: var(--bahria-navy-950);
    }


    #bahria-page .bahria-dept-header {
      margin-bottom: 18px;
    }


    #bahria-page .bahria-dept-header h3 {
      font-family: var(--bahria-font-display);
      font-size: clamp(19px, 2.4vw, 23px);
      font-weight: 800;
      color: var(--bahria-navy-900);
    }


    #bahria-page .bahria-dept-header p {
      margin-top: 6px;
      font-size: 13.5px;
      color: var(--bahria-ink-soft);
      line-height: 1.5;
    }


    #bahria-page .bahria-dept-program-tag {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      font-size: 12px;
      font-weight: 700;
      color: var(--bahria-navy-800);
      background: var(--bahria-paper);
      padding: 6px 13px;
      border-radius: 999px;
      margin-bottom: 14px;
    }


    #bahria-page .bahria-dept-fee-table td:first-child {
      font-weight: 600;
      color: var(--bahria-navy-900);
      width: 55%;
    }


    #bahria-page .bahria-dept-form-actions .bahria-btn {
      flex: 1;
      justify-content: center;
    }


    #bahria-page .bahria-dept-confirm h3 {
      font-family: var(--bahria-font-display);
      font-size: 22px;
      font-weight: 800;
      color: var(--bahria-navy-900);
      margin-bottom: 10px;
    }


    #bahria-page .bahria-dept-confirm-summary strong {
      color: var(--bahria-navy-900);
    }


    /* ============================================================
   NOTIFICATION BAR
   ============================================================ */
    #bahria-page .bahria-notify-bar {
      background: var(--bahria-gold);
      color: var(--bahria-navy-950);
    }


    #bahria-page .bahria-qa-close {
      position: absolute;
      top: 16px;
      right: 16px;
      width: 36px;
      height: 36px;
      border-radius: 50%;
      background: var(--bahria-paper);
      color: var(--bahria-navy-900);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 20px;
      line-height: 1;
      transition: background .2s ease;
      z-index: 2;
    }


    #bahria-page .bahria-qa-header {
      margin-bottom: 20px;
      padding-right: 30px;
    }


    #bahria-page .bahria-qa-header h3 {
      font-family: var(--bahria-font-display);
      font-size: clamp(19px, 2.4vw, 23px);
      font-weight: 800;
      color: var(--bahria-navy-900);
    }


    #bahria-page .bahria-qa-header p {
      margin-top: 6px;
      font-size: 13.5px;
      color: var(--bahria-ink-soft);
      line-height: 1.5;
    }


    #bahria-page .bahria-qa-confirm h3 {
      font-family: var(--bahria-font-display);
      font-size: 21px;
      font-weight: 800;
      color: var(--bahria-navy-900);
      margin-bottom: 10px;
    }


    #bahria-page .bahria-qa-confirm-summary strong {
      color: var(--bahria-navy-900);
    }


    #bahria-page .bahria-qa-step-dot.bahria-qa-step-active .bahria-qa-num {
      background: var(--bahria-gold);
      color: var(--bahria-navy-950);
    }


    #bahria-page .bahria-qa-program-opt span {
      font-size: 13.5px;
      font-weight: 600;
      color: var(--bahria-navy-900);
    }


    #bahria-page .bahria-qa-fee-opt-title {
      font-size: 13.5px;
      font-weight: 700;
      color: var(--bahria-navy-900);
    }


    #bahria-page .bahria-qa-form-actions .bahria-btn {
      flex: 1;
      justify-content: center;
    }


    #bahria-page .bahria-announce-header {
      display: flex;
      align-items: center;
      gap: 10px;
      background: var(--bahria-navy-950);
      color: #fff;
      padding: 14px 16px;
    }


    #bahria-page .bahria-announce-body li::before {
      content: "•";
      position: absolute;
      left: 0;
      top: 0;
      color: var(--bahria-navy-900);
      font-weight: 700;
    }


    #bahria-page .bahria-announce-body li a {
      color: var(--bahria-navy-800);
      font-weight: 600;
      text-decoration: underline;
      text-underline-offset: 2px;
      transition: color .2s ease;
    }


    /* ============================================================
   ANNOUNCEMENT OVERLAY (dimmed backdrop, theme navy)
   ============================================================ */
    #bahria-page .bahria-announce-overlay {
      position: fixed;
      inset: 0;
      z-index: 1490;
      background: rgba(5, 32, 48, 0.55);
      backdrop-filter: blur(3px);
      opacity: 0;
      visibility: hidden;
      transition: opacity .3s ease, visibility .3s ease;
    }

/* ============================================================
   RESOURCE PAGE CONTENT (Merit List / Fee Structure)
   Scoped under #bahria-page, reuses the Bahria University design tokens above.
   ============================================================ */
#bahria-page .bahria-res-main{ background:var(--bahria-paper); min-height:60vh; }
#bahria-page .bahria-res-breadcrumb{ padding:18px clamp(18px,4vw,48px) 0; font-size:13px; color:var(--bahria-ink-soft); display:flex; gap:8px; align-items:center; }
#bahria-page .bahria-res-breadcrumb a{ color:var(--bahria-ink-soft); }
#bahria-page .bahria-res-breadcrumb a:hover{ text-decoration:underline; }
#bahria-page .bahria-res-hero{ padding:22px 0 28px; }
#bahria-page .bahria-res-eyebrow{ font-size:12.5px; font-weight:700; text-transform:uppercase; letter-spacing:0.08em; color:var(--bahria-ink-soft); margin-bottom:8px; }
#bahria-page .bahria-res-hero h1{ font-family:var(--bahria-font-display); font-size:clamp(28px,4vw,42px); line-height:1.12; margin-bottom:12px; }
#bahria-page .bahria-res-lead{ max-width:720px; font-size:15.5px; line-height:1.65; color:var(--bahria-ink-soft); }
#bahria-page .bahria-res-doc{ padding-bottom:64px; }
#bahria-page .bahria-res-doc-grid{ display:grid; grid-template-columns:1fr 320px; gap:28px; align-items:start; }
@media (max-width:900px){ #bahria-page .bahria-res-doc-grid{ grid-template-columns:1fr; } }
#bahria-page .bahria-res-doc-viewer{ background:var(--bahria-white); border-radius:14px; box-shadow:var(--bahria-shadow-m); overflow:hidden; min-height:70vh; display:flex; flex-direction:column; }
#bahria-page .bahria-res-doc-viewer iframe{ flex:1; width:100%; min-height:70vh; border:0; display:block; }
#bahria-page .bahria-res-doc-empty{ padding:48px 28px; text-align:center; color:var(--bahria-ink-soft); }
#bahria-page .bahria-res-doc-side{ display:flex; flex-direction:column; gap:16px; }
#bahria-page .bahria-res-doc-card{ background:var(--bahria-white); border-radius:14px; box-shadow:var(--bahria-shadow-s); padding:22px; }
#bahria-page .bahria-res-doc-card h3{ font-family:var(--bahria-font-display); font-size:17px; margin-bottom:8px; }
#bahria-page .bahria-res-doc-card p{ font-size:13.5px; line-height:1.55; color:var(--bahria-ink-soft); margin-bottom:16px; }
#bahria-page .bahria-res-doc-card a{ width:100%; text-align:center; justify-content:center; display:flex; margin-bottom:10px; }
#bahria-page .bahria-res-updated{ font-size:12px; color:var(--bahria-ink-soft); margin-top:10px; margin-bottom:0 !important; }
</style>
</head>
<body>
<div id="bahria-page">

<header class="bahria-header">
      <div class="bahria-container">
        <a href="/bahria" class="bahria-logo" aria-label="Bahria University home">
          <img src="https://eduapply.online/wp-content/uploads/2026/08/bu_logo.png" alt="Bahria University logo">
          <span class="bahria-logo-text">
            <strong>Bahria University</strong>
            <span>Discovering Knowledge</span>
          </span>
        </a>

        <nav class="bahria-nav" aria-label="Primary">
          <a href="#bahria-about">About</a>
          <a href="#bahria-academics">Academics</a>
          <a href="#bahria-admissions">Admissions</a>
          <a href="#bahria-research">Research &amp; Innovations</a>
          <a href="#">International</a>
          <a href="#bahria-campuses">Campus</a>
        </nav>

        <div class="bahria-header-cta">
          <a href="#" class="bahria-btn bahria-btn-maroon bahria-admission-trigger">Admission Now</a>
          <button class="bahria-hamburger" id="bahria-hamburger-btn" aria-label="Open menu" aria-expanded="false" aria-controls="bahria-mobile-nav">
            <span></span><span></span><span></span>
          </button>
        </div>
      </div>

      <nav class="bahria-mobile-nav" id="bahria-mobile-nav" aria-label="Mobile primary">
        <a href="#bahria-about">About</a>
        <a href="#bahria-academics">Academics</a>
        <a href="#bahria-admissions">Admissions</a>
        <a href="#bahria-research">Research &amp; Innovations</a>
        <a href="#">International</a>
        <a href="#bahria-campuses">Campus</a>
        <div style="padding:16px 20px;"><a href="#" class="bahria-btn bahria-btn-maroon bahria-btn-block bahria-admission-trigger">Admission Now</a></div>
      </nav>
    </header>

<main class="bahria-res-main">
  <div class="bahria-container bahria-res-breadcrumb">
    <a href="/bahria">Bahria University</a>
    <span>/</span>
    <span>Fee Structure</span>
  </div>

  <section class="bahria-res-hero">
    <div class="bahria-container">
      <p class="bahria-res-eyebrow">Bahria University</p>
      <h1>Fee Structure</h1>
      <p class="bahria-res-lead">Review the official Bahria University fee structure below, including tuition and other applicable charges. Fees are set by the university and may change between intakes — the PDF below reflects the most recently published figures.</p>
    </div>
  </section>

  <section class="bahria-res-doc">
    <div class="bahria-container bahria-res-doc-grid">
      <div class="bahria-res-doc-viewer">
        <?php if ( $ccx_has_pdf ) : ?>
          <iframe src="https://docs.google.com/viewer?url=<?php echo rawurlencode( $ccx_pdf_url ); ?>&embedded=true" title="Bahria University Fee Structure PDF" loading="lazy"></iframe>
        <?php else : ?>
          <div class="bahria-res-doc-empty">
            <p>The fee structure PDF hasn't been uploaded yet. Once it's added in <code>inc/resource-documents.php</code>, it will appear here automatically.</p>
          </div>
        <?php endif; ?>
      </div>

      <aside class="bahria-res-doc-side">
        <div class="bahria-res-doc-card">
          <h3>Download Fee Structure</h3>
          <p>Get the full PDF with the complete program-wise breakdown of tuition and other charges.</p>
          <?php if ( $ccx_has_pdf ) : ?>
            <a href="<?php echo esc_url( $ccx_pdf_url ); ?>" class="bahria-btn bahria-btn-maroon" download>Download Fee Structure PDF</a>
            <a href="<?php echo esc_url( $ccx_pdf_url ); ?>" class="bahria-btn bahria-btn-outline-navy" target="_blank" rel="noopener">Open in New Tab</a>
            <?php if ( $ccx_pdf_updated ) : ?>
              <p class="bahria-res-updated">Last updated: <?php echo esc_html( $ccx_pdf_updated ); ?></p>
            <?php endif; ?>
          <?php else : ?>
            <p class="bahria-res-updated">Check back soon.</p>
          <?php endif; ?>
        </div>

        <div class="bahria-res-doc-card">
          <h3>Have Questions About Fees?</h3>
          <p>For installment plans, scholarships or program-specific questions, our admissions team can guide you before you apply.</p>
          <a href="/admissions/apply?university=BAHRIA" class="bahria-btn bahria-btn-maroon">Apply Now</a>
          <a href="/bahria" class="bahria-btn bahria-btn-outline-navy">Back to Bahria University</a>
        </div>
      </aside>
    </div>
  </section>
</main>

<footer class="bahria-footer" id="bahria-contact">
      <div class="bahria-container">
        <div class="bahria-footer-top">
          <div class="bahria-footer-brand">
            <!-- Sourced directly from the official Bahria asset (bahria.edu.pk) -->
            <img src="https://www.bahria.edu.pk/Content/images/main/footer/footer_logo.jpg" alt="Bahria University logo">
            <div class="bahria-footer-social">
              <a href="https://www.facebook.com/officialBU" target="_blank" rel="noopener" aria-label="Bahria on Facebook"><svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor">
                  <path d="M22 12a10 10 0 10-11.6 9.9v-7H7.9V12h2.5V9.8c0-2.5 1.5-3.9 3.8-3.9 1.1 0 2.2.2 2.2.2v2.5h-1.3c-1.2 0-1.6.8-1.6 1.6V12h2.8l-.4 2.9h-2.4v7A10 10 0 0022 12z" />
                </svg></a>
              <a href="https://www.instagram.com/bahriauniversityofficial" target="_blank" rel="noopener" aria-label="Bahria on Instagram"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                  <rect x="3" y="3" width="18" height="18" rx="5" />
                  <circle cx="12" cy="12" r="4" />
                  <circle cx="17.5" cy="6.5" r="1" />
                </svg></a>
              <a href="https://www.linkedin.com/school/bahria-university" target="_blank" rel="noopener" aria-label="Bahria on LinkedIn"><svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor">
                  <path d="M4.98 3.5a2.5 2.5 0 11-.02 5 2.5 2.5 0 01.02-5zM3 9h4v12H3zM9 9h3.8v1.7h.05c.53-1 1.83-2.06 3.77-2.06 4.03 0 4.78 2.65 4.78 6.1V21h-4v-5.7c0-1.36-.02-3.1-1.89-3.1-1.9 0-2.19 1.48-2.19 3v5.8H9z" />
                </svg></a>
              <a href="https://www.youtube.com/channel/UC30OHoxLmwe4XyTVod84Jrg" target="_blank" rel="noopener" aria-label="Bahria on YouTube"><svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor">
                  <path d="M23 12s0-3.6-.46-5.3a2.9 2.9 0 00-2-2C18.9 4.2 12 4.2 12 4.2s-6.9 0-8.54.5a2.9 2.9 0 00-2 2C1 8.4 1 12 1 12s0 3.6.46 5.3a2.9 2.9 0 002 2c1.64.5 8.54.5 8.54.5s6.9 0 8.54-.5a2.9 2.9 0 002-2C23 15.6 23 12 23 12zM9.8 15.5V8.5l6 3.5z" />
                </svg></a>
            </div>
          </div>

          <div class="bahria-footer-col">
            <h5>Bahria University</h5>
            <ul>
              <li><a href="#">Board of Governors</a></li>
              <li><a href="#">Academic Calendar</a></li>
              <li><a href="#">Faculty Profiles</a></li>
              <li><a href="#">Office Directory</a></li>
              <li><a href="#">BU Flagship Magazine — PRODIGY</a></li>
              <li><a href="#">BU Official Newsletter — BUGLE</a></li>
            </ul>
          </div>

          <div class="bahria-footer-col">
            <h5>Expansion &amp; Procurement</h5>
            <ul>
              <li><a href="#">Tender Notices</a></li>
            </ul>
          </div>

          <div class="bahria-footer-col">
            <h5>BU Documentary</h5>
            <div class="bahria-footer-video">
              <!-- Sourced directly from the official Bahria embed (bahria.edu.pk) -->
              <iframe src="https://www.youtube.com/embed/5klgw3YbBVw" title="Bahria University Documentary" loading="lazy" referrerpolicy="no-referrer-when-downgrade" allowfullscreen></iframe>
            </div>
          </div>
        </div>

        <div class="bahria-locations">
          <p class="bahria-support-label" style="color:var(--bahria-gold-bright);">Locations</p>
          <div class="bahria-locations-grid">
            <div class="bahria-loc-card">
              <h6>Head Office</h6>
              <p>Shangrila Road, Sector E-8, Islamabad<br>Ph: +92-51-9260002</p>
            </div>
            <div class="bahria-loc-card">
              <h6>H-11, Islamabad Campus</h6>
              <p>Plot 83, H-11/4, Islamabad<br>Ph: 051-9259500, 051-9259493</p>
            </div>
            <div class="bahria-loc-card">
              <h6>Lahore Campus</h6>
              <p>47-C, Civic Center, Johar Town, Lahore<br>Ph: 042-99233404</p>
            </div>
            <div class="bahria-loc-card">
              <h6>Karachi Campus</h6>
              <p>13 National Stadium Road, Karachi<br>Ph: 021 99240002-6</p>
            </div>
            <div class="bahria-loc-card">
              <h6>Institute of Professional Psychology, Karachi</h6>
              <p>13 National Stadium Road, Karachi<br>Ph: +92-21-111-111-028</p>
            </div>
            <div class="bahria-loc-card">
              <h6>Health Sciences Campus, Karachi</h6>
              <p>Adjacent to PNS Shifa, Sailor Street, DHA Phase 2, Karachi<br>Ph: +92-21-35319491-6</p>
            </div>
            <div class="bahria-loc-card">
              <h6>Health Sciences Campus, Islamabad</h6>
              <p>Naval Anchorage, Islamabad<br>Ph: +92-51-8855240</p>
            </div>
          </div>
        </div>

        <div class="bahria-footer-bottom">
          <p>Copyright &copy; <span id="bahria-year"></span> Bahria University Islamabad · UAN: 111-111-028</p>
        </div>
      </div>
    </footer>

</div>

<script>
(function(){
  var btn = document.getElementById("bahria-hamburger-btn");
  var nav = document.getElementById("bahria-mobile-nav");
  if (btn && nav) {
    btn.addEventListener("click", function(){
      var open = btn.classList.toggle("bahria-active");
      btn.setAttribute("aria-expanded", open ? "true" : "false");
      nav.classList.toggle("bahria-mobile-open", open);
    });
  }

  var header = document.querySelector("#bahria-page .bahria-header");
  if (header) {
    var onScroll = function(){
      header.classList.toggle("bahria-scrolled", window.scrollY > 12);
    };
    window.addEventListener("scroll", onScroll, { passive: true });
    onScroll();
  }

  var yearEl = document.getElementById("bahria-year");
  if (yearEl) {
    yearEl.textContent = new Date().getFullYear();
  }
})();
</script>
</body>
</html>
