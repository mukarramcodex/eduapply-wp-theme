<?php

/**
 * Template Name: EduApply — Admission Application
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>University Admission Application | EduApply</title>
  <meta name="description" content="Apply for admission to any of our six partner universities. Fill in your details, upload your documents, and submit your application in one place." />
  <meta name="robots" content="noindex, follow" />

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,400;0,9..144,500;0,9..144,600;0,9..144,700;1,9..144,500&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=IBM+Plex+Mono:wght@400;500&display=swap" rel="stylesheet">

  <style>
    /* ============================================================
   TOKENS — identical to the rest of the marketing site
   ============================================================ */
    #ccx-page {
      --ccx-navy-950: #0A1120;
      --ccx-navy-900: #101B32;
      --ccx-navy-800: #16253F;
      --ccx-navy-700: #1D2E4F;
      --ccx-ink: #15213A;
      --ccx-ink-soft: #4B5670;
      --ccx-paper: #F4F6FA;
      --ccx-paper-dim: #E9ECF3;
      --ccx-white: #FFFFFF;
      --ccx-gold: #C9972E;
      --ccx-gold-bright: #E4B450;
      --ccx-gold-dim: #8A6A22;
      --ccx-teal: #1F7A6C;
      --ccx-teal-bright: #28998A;
      --ccx-danger: #C1443C;
      --ccx-success: #1F7A5C;
      --ccx-font-display: 'Fraunces', serif;
      --ccx-font-body: 'Plus Jakarta Sans', sans-serif;
      --ccx-font-mono: 'IBM Plex Mono', monospace;
      --ccx-radius-s: 8px;
      --ccx-radius-m: 14px;
      --ccx-radius-l: 22px;
      --ccx-shadow-s: 0 2px 10px rgba(16, 27, 50, 0.08);
      --ccx-shadow-m: 0 12px 32px rgba(16, 27, 50, 0.14);
      --ccx-shadow-l: 0 24px 60px rgba(16, 27, 50, 0.18);
      --ccx-container: 1180px;
    }

    #ccx-page,
    #ccx-page * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    #ccx-page {
      font-family: var(--ccx-font-body);
      color: var(--ccx-ink);
      background: var(--ccx-paper);
      overflow-x: hidden;
      -webkit-font-smoothing: antialiased;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }

    #ccx-page img {
      max-width: 100%;
      display: block;
    }

    #ccx-page a {
      color: inherit;
      text-decoration: none;
    }

    #ccx-page button {
      font-family: inherit;
      cursor: pointer;
      border: none;
      background: none;
    }

    #ccx-page ul {
      list-style: none;
    }

    #ccx-page .ccx-container {
      max-width: var(--ccx-container);
      margin: 0 auto;
      padding: 0 clamp(16px, 4vw, 40px);
    }

    #ccx-page :focus-visible {
      outline: 3px solid var(--ccx-gold-bright);
      outline-offset: 2px;
    }

    /* ---- Minimal focused header (no main nav, deliberately) ---- */
    #ccx-page .ccx-apply-header {
      background: var(--ccx-navy-950);
      padding: 16px 0;
      border-bottom: 3px solid var(--ccx-gold);
    }

    #ccx-page .ccx-apply-header .ccx-container {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 16px;
      flex-wrap: wrap;
    }

    #ccx-page .ccx-apply-brand {
      display: flex;
      align-items: center;
      gap: 10px;
      color: #fff;
      font-family: var(--ccx-font-display);
      font-weight: 600;
      font-size: 18px;
    }

    #ccx-page .ccx-apply-brand-mark {
      width: 34px;
      height: 34px;
      border-radius: 9px;
      background: linear-gradient(135deg, var(--ccx-gold-bright), var(--ccx-gold-dim));
      display: flex;
      align-items: center;
      justify-content: center;
      font-family: var(--ccx-font-mono);
      font-weight: 600;
      font-size: 12px;
      color: var(--ccx-navy-950);
      flex-shrink: 0;
    }

    #ccx-page .ccx-apply-help {
      display: flex;
      align-items: center;
      gap: 8px;
      font-size: 13px;
      color: rgba(255, 255, 255, 0.8);
      font-weight: 600;
    }

    #ccx-page .ccx-apply-help a {
      color: var(--ccx-gold-bright);
    }

    /* ---- Page title block ---- */
    #ccx-page .ccx-apply-title {
      padding: 36px 0 8px;
      text-align: center;
    }

    #ccx-page .ccx-apply-uni-badge {
      display: none;
      align-items: center;
      gap: 10px;
      justify-content: center;
      margin-bottom: 16px;
    }

    #ccx-page .ccx-apply-uni-badge.ccx-apply-show {
      display: inline-flex;
    }

    #ccx-page .ccx-apply-uni-logo-tile {
      width: 42px;
      height: 42px;
      border-radius: 10px;
      background: #fff;
      border: 1px solid var(--ccx-paper-dim);
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 6px;
      box-shadow: var(--ccx-shadow-s);
      flex-shrink: 0;
    }

    #ccx-page .ccx-apply-uni-logo-tile img {
      width: 100%;
      height: 100%;
      object-fit: contain;
    }

    #ccx-page .ccx-apply-uni-logo-tile.ccx-apply-dark-bg {
      background: var(--ccx-navy-950);
      border-color: var(--ccx-navy-950);
    }

    #ccx-page .ccx-apply-uni-logo-tile.ccx-apply-mono {
      background: linear-gradient(150deg, var(--ccx-gold), var(--ccx-navy-900));
      border-color: transparent;
      font-family: var(--ccx-font-display);
      font-weight: 700;
      font-size: 12px;
      color: #fff;
    }

    #ccx-page .ccx-apply-uni-name {
      font-size: 14px;
      font-weight: 700;
      color: var(--ccx-navy-900);
    }

    #ccx-page .ccx-apply-title h1 {
      font-family: var(--ccx-font-display);
      font-weight: 600;
      font-size: clamp(24px, 3.4vw, 34px);
      color: var(--ccx-navy-900);
    }

    #ccx-page .ccx-apply-title p {
      margin-top: 8px;
      font-size: 14.5px;
      color: var(--ccx-ink-soft);
    }

    /* ---- Stepper ---- */
    #ccx-page .ccx-apply-stepper {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 0;
      max-width: 760px;
      margin: 26px auto 0;
      padding: 0 16px;
    }

    #ccx-page .ccx-apply-step {
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 8px;
      flex: 1;
      position: relative;
    }

    #ccx-page .ccx-apply-step-num {
      width: 34px;
      height: 34px;
      border-radius: 50%;
      background: var(--ccx-paper-dim);
      color: var(--ccx-ink-soft);
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: 700;
      font-size: 14px;
      transition: background .25s ease, color .25s ease;
      position: relative;
      z-index: 1;
    }

    #ccx-page .ccx-apply-step-label {
      font-size: 11.5px;
      font-weight: 700;
      color: var(--ccx-ink-soft);
      text-align: center;
      letter-spacing: 0.01em;
    }

    #ccx-page .ccx-apply-step.ccx-apply-step-active .ccx-apply-step-num {
      background: var(--ccx-danger);
      color: #fff;
    }

    #ccx-page .ccx-apply-step.ccx-apply-step-active .ccx-apply-step-label {
      color: var(--ccx-danger);
    }

    #ccx-page .ccx-apply-step.ccx-apply-step-done .ccx-apply-step-num {
      background: var(--ccx-teal);
      color: #fff;
    }

    #ccx-page .ccx-apply-step::before {
      content: "";
      position: absolute;
      top: 17px;
      left: -50%;
      width: 100%;
      height: 2px;
      background: var(--ccx-paper-dim);
      z-index: 0;
    }

    #ccx-page .ccx-apply-step:first-child::before {
      display: none;
    }

    #ccx-page .ccx-apply-step.ccx-apply-step-done::before {
      background: var(--ccx-teal);
    }

    @media (max-width:600px) {
      #ccx-page .ccx-apply-step-label {
        display: none;
      }
    }

    /* ---- Form layout ---- */
    #ccx-page .ccx-apply-main {
      padding: 34px 0 90px;
      flex: 1;
    }

    #ccx-page .ccx-apply-panel {
      display: none;
    }

    #ccx-page .ccx-apply-panel.ccx-apply-panel-active {
      display: block;
      animation: ccxApplyFade .35s ease;
    }

    @keyframes ccxApplyFade {
      from {
        opacity: 0;
        transform: translateY(8px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    #ccx-page .ccx-apply-section {
      background: #fff;
      border: 1px solid var(--ccx-paper-dim);
      border-radius: var(--ccx-radius-m);
      padding: 26px clamp(18px, 3vw, 30px);
      box-shadow: var(--ccx-shadow-s);
      margin-bottom: 22px;
    }

    #ccx-page .ccx-apply-section-head {
      display: flex;
      align-items: center;
      gap: 12px;
      margin-bottom: 20px;
    }

    #ccx-page .ccx-apply-section-icon {
      width: 34px;
      height: 34px;
      border-radius: 9px;
      background: rgba(193, 68, 60, 0.1);
      color: var(--ccx-danger);
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
    }

    #ccx-page .ccx-apply-section-head h2 {
      font-family: var(--ccx-font-display);
      font-size: 17.5px;
      font-weight: 700;
      color: var(--ccx-navy-900);
    }

    #ccx-page .ccx-apply-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 16px 18px;
    }

    #ccx-page .ccx-apply-grid.ccx-apply-grid-2 {
      grid-template-columns: repeat(2, 1fr);
    }

    #ccx-page .ccx-apply-field {
      display: flex;
      flex-direction: column;
      gap: 6px;
    }

    #ccx-page .ccx-apply-field.ccx-apply-full {
      grid-column: 1/-1;
    }

    #ccx-page .ccx-apply-field label {
      font-size: 12.5px;
      font-weight: 700;
      color: var(--ccx-navy-800);
    }

    #ccx-page .ccx-apply-field label .ccx-apply-req {
      color: var(--ccx-danger);
    }

    #ccx-page .ccx-apply-field label .ccx-apply-opt {
      font-weight: 500;
      color: var(--ccx-ink-soft);
      font-size: 11px;
    }

    #ccx-page .ccx-apply-field input[type="text"],
    #ccx-page .ccx-apply-field input[type="email"],
    #ccx-page .ccx-apply-field input[type="tel"],
    #ccx-page .ccx-apply-field input[type="date"],
    #ccx-page .ccx-apply-field input[type="number"],
    #ccx-page .ccx-apply-field select,
    #ccx-page .ccx-apply-field textarea {
      border: 1.5px solid var(--ccx-paper-dim);
      border-radius: 9px;
      padding: 11px 13px;
      font-family: inherit;
      font-size: 13.5px;
      color: var(--ccx-ink);
      background: var(--ccx-paper);
      width: 100%;
      transition: border-color .2s ease, background .2s ease;
    }

    #ccx-page .ccx-apply-field input:focus,
    #ccx-page .ccx-apply-field select:focus,
    #ccx-page .ccx-apply-field textarea:focus {
      outline: none;
      border-color: var(--ccx-gold);
      background: #fff;
    }

    #ccx-page .ccx-apply-field textarea {
      resize: vertical;
      min-height: 76px;
    }

    #ccx-page .ccx-apply-field:invalid input,
    #ccx-page .ccx-apply-field.ccx-apply-error input,
    #ccx-page .ccx-apply-field.ccx-apply-error select,
    #ccx-page .ccx-apply-field.ccx-apply-error textarea {
      border-color: var(--ccx-danger);
      background: #FDF3F2;
    }

    #ccx-page .ccx-apply-radio-row {
      display: flex;
      gap: 20px;
      align-items: center;
      padding-top: 8px;
    }

    #ccx-page .ccx-apply-radio-opt {
      display: flex;
      align-items: center;
      gap: 7px;
      font-size: 13.5px;
      font-weight: 600;
      color: var(--ccx-navy-800);
    }

    #ccx-page .ccx-apply-radio-opt input {
      width: 16px;
      height: 16px;
      accent-color: var(--ccx-danger);
    }

    #ccx-page .ccx-apply-hint {
      font-size: 11px;
      color: var(--ccx-ink-soft);
      margin-top: -2px;
    }

    @media (max-width:780px) {
      #ccx-page .ccx-apply-grid {
        grid-template-columns: 1fr 1fr;
      }
    }

    @media (max-width:520px) {

      #ccx-page .ccx-apply-grid,
      #ccx-page .ccx-apply-grid.ccx-apply-grid-2 {
        grid-template-columns: 1fr;
      }
    }

    /* ---- Document upload cards ---- */
    #ccx-page .ccx-apply-doc-note {
      font-size: 12.5px;
      color: var(--ccx-ink-soft);
      background: var(--ccx-paper);
      border-left: 3px solid var(--ccx-gold);
      border-radius: 0 8px 8px 0;
      padding: 12px 14px;
      margin-bottom: 20px;
      line-height: 1.6;
    }

    #ccx-page .ccx-apply-doc-grid {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 14px;
    }

    #ccx-page .ccx-apply-doc-card {
      border: 1.5px dashed var(--ccx-paper-dim);
      border-radius: 12px;
      padding: 16px;
      transition: border-color .2s ease, background .2s ease;
    }

    #ccx-page .ccx-apply-doc-card.ccx-apply-has-file {
      border-style: solid;
      border-color: var(--ccx-teal);
      background: rgba(31, 122, 106, 0.05);
    }

    #ccx-page .ccx-apply-doc-card.ccx-apply-error {
      border-color: var(--ccx-danger);
      border-style: solid;
      background: #FDF3F2;
    }

    #ccx-page .ccx-apply-doc-top {
      display: flex;
      align-items: flex-start;
      gap: 10px;
      margin-bottom: 10px;
    }

    #ccx-page .ccx-apply-doc-icon {
      width: 28px;
      height: 28px;
      border-radius: 7px;
      background: var(--ccx-paper-dim);
      color: var(--ccx-ink-soft);
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
    }

    #ccx-page .ccx-apply-doc-card.ccx-apply-has-file .ccx-apply-doc-icon {
      background: var(--ccx-teal);
      color: #fff;
    }

    #ccx-page .ccx-apply-doc-name {
      font-size: 13px;
      font-weight: 700;
      color: var(--ccx-navy-900);
      line-height: 1.35;
    }

    #ccx-page .ccx-apply-doc-btn-row {
      display: flex;
      align-items: center;
      gap: 10px;
      flex-wrap: wrap;
    }

    #ccx-page .ccx-apply-doc-choose {
      background: var(--ccx-navy-900);
      color: #fff;
      font-size: 12px;
      font-weight: 700;
      padding: 8px 16px;
      border-radius: 999px;
      transition: background .2s ease;
    }

    #ccx-page .ccx-apply-doc-choose:hover {
      background: var(--ccx-navy-800);
    }

    #ccx-page .ccx-apply-doc-filename {
      font-size: 11.5px;
      color: var(--ccx-ink-soft);
      overflow: hidden;
      text-overflow: ellipsis;
      white-space: nowrap;
      max-width: 170px;
    }

    #ccx-page .ccx-apply-doc-card input[type="file"] {
      display: none;
    }

    #ccx-page .ccx-apply-doc-hint {
      font-size: 10.5px;
      color: var(--ccx-ink-soft);
      margin-top: 6px;
    }

    @media (max-width:600px) {
      #ccx-page .ccx-apply-doc-grid {
        grid-template-columns: 1fr;
      }
    }

    /* ---- Certify + submit ---- */
    #ccx-page .ccx-apply-certify {
      display: flex;
      align-items: flex-start;
      gap: 10px;
      margin: 6px 0 24px;
      font-size: 12.5px;
      color: var(--ccx-ink-soft);
      line-height: 1.55;
    }

    #ccx-page .ccx-apply-certify input {
      width: 18px;
      height: 18px;
      margin-top: 2px;
      accent-color: var(--ccx-danger);
      flex-shrink: 0;
    }

    /* ---- Nav buttons ---- */
    #ccx-page .ccx-apply-nav {
      display: flex;
      justify-content: space-between;
      gap: 14px;
      margin-top: 8px;
    }

    #ccx-page .ccx-apply-btn {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 8px;
      padding: 13px 26px;
      border-radius: 999px;
      font-weight: 700;
      font-size: 13.5px;
      transition: transform .2s ease, box-shadow .2s ease, background .2s ease;
    }

    #ccx-page .ccx-apply-btn-primary {
      background: linear-gradient(180deg, var(--ccx-gold-bright), var(--ccx-gold));
      color: var(--ccx-navy-950);
      box-shadow: 0 6px 18px rgba(201, 151, 46, 0.3);
    }

    #ccx-page .ccx-apply-btn-primary:hover {
      transform: translateY(-2px);
    }

    #ccx-page .ccx-apply-btn-danger {
      background: var(--ccx-danger);
      color: #fff;
      box-shadow: 0 6px 18px rgba(193, 68, 60, 0.3);
    }

    #ccx-page .ccx-apply-btn-danger:hover {
      transform: translateY(-2px);
    }

    #ccx-page .ccx-apply-btn-outline {
      background: #fff;
      color: var(--ccx-navy-900);
      border: 1.5px solid var(--ccx-paper-dim);
    }

    #ccx-page .ccx-apply-btn-outline:hover {
      background: var(--ccx-paper);
    }

    #ccx-page .ccx-apply-btn[disabled] {
      opacity: 0.5;
      cursor: not-allowed;
      transform: none !important;
    }

    #ccx-page .ccx-apply-nav-spacer {
      flex: 1;
    }

    /* ---- Submitting / error banner ---- */
    #ccx-page .ccx-apply-banner {
      display: none;
      align-items: center;
      gap: 10px;
      padding: 13px 16px;
      border-radius: 10px;
      font-size: 13px;
      font-weight: 600;
      margin-bottom: 18px;
    }

    #ccx-page .ccx-apply-banner.ccx-apply-show {
      display: flex;
    }

    #ccx-page .ccx-apply-banner-error {
      background: #FDF3F2;
      color: var(--ccx-danger);
      border: 1px solid rgba(193, 68, 60, 0.25);
    }

    #ccx-page .ccx-apply-banner-info {
      background: var(--ccx-paper);
      color: var(--ccx-ink-soft);
      border: 1px solid var(--ccx-paper-dim);
    }

    /* ---- Confirmation ---- */
    #ccx-page .ccx-apply-confirm {
      max-width: 560px;
      margin: 60px auto;
      text-align: center;
      background: #fff;
      border-radius: var(--ccx-radius-l);
      box-shadow: var(--ccx-shadow-l);
      padding: 48px 34px;
    }

    #ccx-page .ccx-apply-confirm-check {
      width: 70px;
      height: 70px;
      border-radius: 50%;
      background: rgba(31, 122, 106, 0.1);
      color: var(--ccx-teal);
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto 22px;
    }

    #ccx-page .ccx-apply-confirm h2 {
      font-family: var(--ccx-font-display);
      font-size: 24px;
      font-weight: 700;
      color: var(--ccx-navy-900);
      margin-bottom: 12px;
    }

    #ccx-page .ccx-apply-confirm p {
      font-size: 14px;
      color: var(--ccx-ink-soft);
      line-height: 1.65;
      margin-bottom: 8px;
    }

    #ccx-page .ccx-apply-confirm-ref {
      font-family: var(--ccx-font-mono);
      font-size: 12.5px;
      color: var(--ccx-navy-900);
      background: var(--ccx-paper);
      border-radius: 8px;
      padding: 10px 14px;
      margin: 18px 0;
      display: inline-block;
    }

    /* ---- Minimal footer ---- */
    #ccx-page .ccx-apply-footer {
      padding: 24px 0;
      text-align: center;
      font-size: 12px;
      color: var(--ccx-ink-soft);
      border-top: 1px solid var(--ccx-paper-dim);
    }

    #ccx-page .ccx-apply-footer a {
      color: var(--ccx-teal);
      font-weight: 600;
    }

    /* ---- WhatsApp float ---- */
    #ccx-page .ccx-whatsapp-float {
      position: fixed;
      right: 20px;
      bottom: 20px;
      z-index: 800;
      width: 54px;
      height: 54px;
      border-radius: 50%;
      background: #25D366;
      display: flex;
      align-items: center;
      justify-content: center;
      box-shadow: 0 8px 22px rgba(37, 211, 102, 0.4);
    }

    #ccx-page .ccx-sr-only {
      position: absolute;
      width: 1px;
      height: 1px;
      overflow: hidden;
      clip: rect(0, 0, 0, 0);
      white-space: nowrap;
    }

    /* ---- Submission loader overlay ---- */
    #ccx-page .ccx-apply-loader-overlay {
      display: none;
      position: fixed;
      inset: 0;
      background: rgba(10, 17, 32, 0.72);
      backdrop-filter: blur(3px);
      z-index: 2000;
      align-items: center;
      justify-content: center;
    }

    #ccx-page .ccx-apply-loader-overlay.ccx-apply-show {
      display: flex;
    }

    #ccx-page .ccx-apply-loader-box {
      background: #fff;
      border-radius: var(--ccx-radius-l);
      padding: 40px 36px;
      text-align: center;
      max-width: 340px;
      box-shadow: var(--ccx-shadow-l);
    }

    #ccx-page .ccx-apply-loader-spinner {
      width: 54px;
      height: 54px;
      margin: 0 auto 20px;
      border-radius: 50%;
      border: 4px solid var(--ccx-paper-dim);
      border-top-color: var(--ccx-danger);
      animation: ccxApplySpin 0.9s linear infinite;
    }

    @keyframes ccxApplySpin {
      to {
        transform: rotate(360deg);
      }
    }

    #ccx-page .ccx-apply-loader-title {
      font-family: var(--ccx-font-display);
      font-size: 17px;
      font-weight: 700;
      color: var(--ccx-navy-900);
      margin-bottom: 8px;
    }

    #ccx-page .ccx-apply-loader-msg {
      font-size: 13px;
      color: var(--ccx-ink-soft);
      min-height: 36px;
      transition: opacity .3s ease;
    }
  </style>
  <?php wp_head(); ?>
</head>

<body>

  <div id="ccx-page">

    <div class="ccx-apply-title">
      <div class="ccx-container">
        <div class="ccx-apply-uni-badge" id="ccx-apply-uni-badge">
          <span class="ccx-apply-uni-logo-tile" id="ccx-apply-uni-logo-tile"></span>
          <span class="ccx-apply-uni-name" id="ccx-apply-uni-name"></span>
        </div>
        <h1>University Admission Application</h1>
        <p>Please fill in the details carefully and upload the required documents.</p>
      </div>
    </div>

    <!-- ============================================================
     STEPPER
     ============================================================ -->
    <nav class="ccx-apply-stepper" aria-label="Application steps">
      <div class="ccx-apply-step ccx-apply-step-active" data-ccx-apply-step-indicator="1">
        <span class="ccx-apply-step-num">1</span><span class="ccx-apply-step-label">Program Information</span>
      </div>
      <div class="ccx-apply-step" data-ccx-apply-step-indicator="2">
        <span class="ccx-apply-step-num">2</span><span class="ccx-apply-step-label">Personal Information</span>
      </div>
      <div class="ccx-apply-step" data-ccx-apply-step-indicator="3">
        <span class="ccx-apply-step-num">3</span><span class="ccx-apply-step-label">Academic &amp; Additional Information</span>
      </div>
      <div class="ccx-apply-step" data-ccx-apply-step-indicator="4">
        <span class="ccx-apply-step-num">4</span><span class="ccx-apply-step-label">Documents &amp; Submit</span>
      </div>
    </nav>

    <main class="ccx-apply-main">
      <div class="ccx-container" style="max-width:900px;">

        <div class="ccx-apply-banner ccx-apply-banner-error" id="ccx-apply-error-banner" role="alert"></div>

        <form id="ccx-apply-form" novalidate>

          <!-- ============================================================
           STEP 1 — PROGRAM INFORMATION
           ============================================================ -->
          <div class="ccx-apply-panel ccx-apply-panel-active" data-ccx-apply-panel="1">
            <section class="ccx-apply-section">
              <div class="ccx-apply-section-head">
                <span class="ccx-apply-section-icon"><svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M4 19.5A2.5 2.5 0 016.5 17H20" />
                    <path d="M6.5 2H20v20H6.5A2.5 2.5 0 014 19.5v-15A2.5 2.5 0 016.5 2z" />
                  </svg></span>
                <h2>1. Program Information</h2>
              </div>
              <div class="ccx-apply-grid ccx-apply-grid-2">
                <div class="ccx-apply-field ccx-apply-full" data-ccx-apply-field="university">
                  <input type="hidden" id="ccx-apply-university-hidden" name="university" value="">
                  <input type="hidden" id="ccx-apply-referrer-hidden" name="referrerUrl" value="">
                </div>
                <div class="ccx-apply-field" data-ccx-apply-field="program1">
                  <label for="ccx-apply-program1">Programme Preference 1 <span class="ccx-apply-req">*</span></label>
                  <select id="ccx-apply-program1" name="program1" required disabled>
                    <option value="">Select University First</option>
                  </select>
                  <input type="text" id="ccx-apply-program1-other" class="ccx-apply-program-other" placeholder="Type your preferred program name" style="display:none;margin-top:8px;">
                  <span class="ccx-apply-hint ccx-apply-program-other-hint" id="ccx-apply-program1-other-hint" style="display:none;">Not listed? Your typed program will be submitted instead.</span>
                </div>
                <div class="ccx-apply-field" data-ccx-apply-field="program2">
                  <label for="ccx-apply-program2">Programme Preference 2 <span class="ccx-apply-opt">(optional)</span></label>
                  <select id="ccx-apply-program2" name="program2" disabled>
                    <option value="">Select University First</option>
                  </select>
                  <input type="text" id="ccx-apply-program2-other" class="ccx-apply-program-other" placeholder="Type your preferred program name" style="display:none;margin-top:8px;">
                  <span class="ccx-apply-hint ccx-apply-program-other-hint" id="ccx-apply-program2-other-hint" style="display:none;">Not listed? Your typed program will be submitted instead.</span>
                </div>
                <div class="ccx-apply-field" data-ccx-apply-field="program3">
                  <label for="ccx-apply-program3">Programme Preference 3 <span class="ccx-apply-opt">(optional)</span></label>
                  <select id="ccx-apply-program3" name="program3" disabled>
                    <option value="">Select University First</option>
                  </select>
                  <input type="text" id="ccx-apply-program3-other" class="ccx-apply-program-other" placeholder="Type your preferred program name" style="display:none;margin-top:8px;">
                  <span class="ccx-apply-hint ccx-apply-program-other-hint" id="ccx-apply-program3-other-hint" style="display:none;">Not listed? Your typed program will be submitted instead.</span>
                </div>
                <div class="ccx-apply-field" data-ccx-apply-field="campus">
                  <label for="ccx-apply-campus">Preferred Campus <span class="ccx-apply-req">*</span></label>
                  <select id="ccx-apply-campus" name="campus" required disabled>
                    <option value="">Select University First</option>
                  </select>
                </div>
              </div>
            </section>

            <div class="ccx-apply-nav">
              <span class="ccx-apply-nav-spacer"></span>
              <button type="button" class="ccx-apply-btn ccx-apply-btn-danger" data-ccx-apply-next="2">Continue →</button>
            </div>
          </div>

          <!-- ============================================================
           STEP 2 — PERSONAL + CONTACT INFORMATION
           ============================================================ -->
          <div class="ccx-apply-panel" data-ccx-apply-panel="2">
            <section class="ccx-apply-section">
              <div class="ccx-apply-section-head">
                <span class="ccx-apply-section-icon"><svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2" />
                    <circle cx="12" cy="7" r="4" />
                  </svg></span>
                <h2>2. Personal Information</h2>
              </div>
              <div class="ccx-apply-grid">
                <div class="ccx-apply-field ccx-apply-full" data-ccx-apply-field="fullName">
                  <label for="ccx-apply-fullname">Full Name <span class="ccx-apply-req">*</span></label>
                  <input type="text" id="ccx-apply-fullname" name="fullName" required placeholder="Enter full name">
                </div>
                <div class="ccx-apply-field ccx-apply-full" data-ccx-apply-field="fatherName">
                  <label for="ccx-apply-fathername">Father / Guardian Name <span class="ccx-apply-req">*</span></label>
                  <input type="text" id="ccx-apply-fathername" name="fatherName" required placeholder="Enter father / guardian name">
                </div>
                <div class="ccx-apply-field" data-ccx-apply-field="dob">
                  <label for="ccx-apply-dob">Date of Birth <span class="ccx-apply-req">*</span></label>
                  <input type="date" id="ccx-apply-dob" name="dob" required>
                </div>
                <div class="ccx-apply-field" data-ccx-apply-field="cnic">
                  <label for="ccx-apply-cnic">CNIC / B-Form No. <span class="ccx-apply-req">*</span></label>
                  <input type="text" id="ccx-apply-cnic" name="cnic" required placeholder="XXXXXXXXXXXXX" pattern="\d{13}" inputmode="numeric" title="Format: XXXXXXXXXXXXX" maxlength="13">
                </div>
                <div class="ccx-apply-field" data-ccx-apply-field="gender">
                  <label for="ccx-apply-gender">Gender <span class="ccx-apply-req">*</span></label>
                  <select id="ccx-apply-gender" name="gender" required>
                    <option value="">Select Gender</option>
                    <option>Male</option>
                    <option>Female</option>
                    <option>Prefer not to say</option>
                  </select>
                </div>
                <div class="ccx-apply-field" data-ccx-apply-field="nationality">
                  <label for="ccx-apply-nationality">Nationality <span class="ccx-apply-req">*</span></label>
                  <select id="ccx-apply-nationality" name="nationality" required>
                    <option value="">Select Nationality</option>
                    <option>Pakistani</option>
                    <option>Overseas Pakistani</option>
                    <option>Other / International</option>
                  </select>
                </div>
                <div class="ccx-apply-field" data-ccx-apply-field="maritalStatus">
                  <label for="ccx-apply-marital">Marital Status <span class="ccx-apply-opt">(optional)</span></label>
                  <select id="ccx-apply-marital" name="maritalStatus">
                    <option value="">Select Status</option>
                    <option>Single</option>
                    <option>Married</option>
                  </select>
                </div>
                <div class="ccx-apply-field" data-ccx-apply-field="religion">
                  <label for="ccx-apply-religion">Religion <span class="ccx-apply-opt">(optional)</span></label>
                  <select id="ccx-apply-religion" name="religion">
                    <option value="">Select Religion</option>
                    <option>Islam</option>
                    <option>Christianity</option>
                    <option>Hinduism</option>
                    <option>Other</option>
                    <option>Prefer not to say</option>
                  </select>
                </div>
              </div>
            </section>

            <section class="ccx-apply-section">
              <div class="ccx-apply-section-head">
                <span class="ccx-apply-section-icon"><svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.362 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.338 1.85.573 2.81.7A2 2 0 0122 16.92z" />
                  </svg></span>
                <h2>3. Contact Information</h2>
              </div>
              <div class="ccx-apply-grid ccx-apply-grid-2">
                <div class="ccx-apply-field" data-ccx-apply-field="mobile">
                  <label for="ccx-apply-mobile">Mobile / WhatsApp Number <span class="ccx-apply-req">*</span></label>
                  <input type="tel" id="ccx-apply-mobile" name="mobile" title="Format: 03XXXXXXXXX" required placeholder="03XXXXXXXXX" maxlength="11" pattern="03\d{9}" inputmode="numeric">
                </div>
                <div class="ccx-apply-field" data-ccx-apply-field="email">
                  <label for="ccx-apply-email">Email Address <span class="ccx-apply-req">*</span></label>
                  <input type="email" id="ccx-apply-email" name="email" required placeholder="example@gmail.com">
                </div>
                <div class="ccx-apply-field ccx-apply-full" data-ccx-apply-field="address">
                  <label for="ccx-apply-address">Current Address <span class="ccx-apply-req">*</span></label>
                  <textarea id="ccx-apply-address" name="address" required placeholder="Enter current address"></textarea>
                </div>
                <div class="ccx-apply-field" data-ccx-apply-field="city">
                  <label for="ccx-apply-city">City <span class="ccx-apply-req">*</span></label>
                  <input type="text" id="ccx-apply-city" name="city" required placeholder="Enter city">
                </div>
                <div class="ccx-apply-field" data-ccx-apply-field="province">
                  <label for="ccx-apply-province">Province <span class="ccx-apply-req">*</span></label>
                  <select id="ccx-apply-province" name="province" required>
                    <option value="">Select Province</option>
                    <option>Punjab</option>
                    <option>Sindh</option>
                    <option>Khyber Pakhtunkhwa</option>
                    <option>Balochistan</option>
                    <option>Islamabad Capital Territory</option>
                    <option>Gilgit-Baltistan</option>
                    <option>Azad Jammu &amp; Kashmir</option>
                    <option>Other</option>
                  </select>
                </div>
                <div class="ccx-apply-field" data-ccx-apply-field="postalCode">
                  <label for="ccx-apply-postal">Postal Code <span class="ccx-apply-opt">(optional)</span></label>
                  <input type="text" id="ccx-apply-postal" name="postalCode" placeholder="Enter postal code">
                </div>
              </div>
            </section>

            <div class="ccx-apply-nav">
              <button type="button" class="ccx-apply-btn ccx-apply-btn-outline" data-ccx-apply-back="1">← Back</button>
              <span class="ccx-apply-nav-spacer"></span>
              <button type="button" class="ccx-apply-btn ccx-apply-btn-danger" data-ccx-apply-next="3">Continue →</button>
            </div>
          </div>

          <!-- ============================================================
           STEP 3 — ACADEMIC + PARENT/GUARDIAN + ADDITIONAL INFORMATION
           ============================================================ -->
          <div class="ccx-apply-panel" data-ccx-apply-panel="3">
            <section class="ccx-apply-section">
              <div class="ccx-apply-section-head">
                <span class="ccx-apply-section-icon"><svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M22 10L12 5 2 10l10 5 10-5z" />
                    <path d="M6 12v5c0 1.5 2.7 3 6 3s6-1.5 6-3v-5" />
                  </svg></span>
                <h2>4. Academic Information</h2>
              </div>
              <div class="ccx-apply-grid">
                <div class="ccx-apply-field" data-ccx-apply-field="lastQualification">
                  <label for="ccx-apply-qualification">Last Qualification <span class="ccx-apply-req">*</span></label>
                  <select id="ccx-apply-qualification" name="lastQualification" required>
                    <option value="">Select Qualification</option>
                    <option>Matriculation / O-Level</option>
                    <option>Intermediate / A-Level</option>
                    <option>Bachelor's Degree</option>
                    <option>Master's Degree</option>
                    <option>Other</option>
                  </select>
                </div>
                <div class="ccx-apply-field" data-ccx-apply-field="board">
                  <label for="ccx-apply-board">Board / University <span class="ccx-apply-req">*</span></label>
                  <input type="text" id="ccx-apply-board" name="board" required placeholder="Enter board / university">
                </div>
                <div class="ccx-apply-field" data-ccx-apply-field="passingYear">
                  <label for="ccx-apply-year">Passing Year <span class="ccx-apply-req">*</span></label>
                  <select id="ccx-apply-year" name="passingYear" required></select>
                </div>
                <div class="ccx-apply-field" data-ccx-apply-field="totalMarks">
                  <label for="ccx-apply-totalmarks">Total Marks / CGPA <span class="ccx-apply-req">*</span></label>
                  <input type="text" id="ccx-apply-totalmarks" name="totalMarks" required placeholder="Enter total marks / CGPA">
                </div>
                <div class="ccx-apply-field" data-ccx-apply-field="obtainedMarks">
                  <label for="ccx-apply-obtainedmarks">Obtained Marks / CGPA <span class="ccx-apply-req">*</span></label>
                  <input type="text" id="ccx-apply-obtainedmarks" name="obtainedMarks" required placeholder="Enter obtained marks / CGPA">
                </div>
                <div class="ccx-apply-field" data-ccx-apply-field="rollNumber">
                  <label for="ccx-apply-rollnumber">Roll Number <span class="ccx-apply-req">*</span></label>
                  <input type="text" id="ccx-apply-rollnumber" name="rollNumber" required placeholder="Enter roll number">
                </div>
              </div>
            </section>

            <section class="ccx-apply-section">
              <div class="ccx-apply-section-head">
                <span class="ccx-apply-section-icon"><svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z" />
                    <path d="M14 2v6h6M9 13h6M9 17h6M9 9h1" />
                  </svg></span>
                <h2>5. Additional Information</h2>
              </div>
              <div class="ccx-apply-grid ccx-apply-grid-2">
                <div class="ccx-apply-field" data-ccx-apply-field="previousEducation">
                  <label>Any Previous Education at This University? <span class="ccx-apply-opt">(optional)</span></label>
                  <div class="ccx-apply-radio-row">
                    <label class="ccx-apply-radio-opt"><input type="radio" name="previousEducation" value="Yes"> Yes</label>
                    <label class="ccx-apply-radio-opt"><input type="radio" name="previousEducation" value="No" checked> No</label>
                  </div>
                </div>
                <div class="ccx-apply-field ccx-apply-full" data-ccx-apply-field="message">
                  <label for="ccx-apply-message">Message / Additional Information <span class="ccx-apply-opt">(optional)</span></label>
                  <textarea id="ccx-apply-message" name="message" placeholder="Type your message here..."></textarea>
                </div>
              </div>
            </section>

            <div class="ccx-apply-nav">
              <button type="button" class="ccx-apply-btn ccx-apply-btn-outline" data-ccx-apply-back="2">← Back</button>
              <span class="ccx-apply-nav-spacer"></span>
              <button type="button" class="ccx-apply-btn ccx-apply-btn-danger" data-ccx-apply-next="4">Continue →</button>
            </div>
          </div>

          <!-- ============================================================
           STEP 4 — DOCUMENT UPLOADS + SUBMIT
           ============================================================ -->
          <div class="ccx-apply-panel" data-ccx-apply-panel="4">
            <section class="ccx-apply-section">
              <div class="ccx-apply-section-head">
                <span class="ccx-apply-section-icon"><svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z" />
                    <path d="M14 2v6h6" />
                  </svg></span>
                <h2>6. Upload Documents</h2>
              </div>
              <p class="ccx-apply-doc-note">Please upload clear scanned copies of the following documents. All documents are mandatory except those marked as (if applicable). File size must be less than 5MB, format PDF, JPG or PNG.</p>

              <div class="ccx-apply-doc-grid" id="ccx-apply-doc-grid">
                <!-- doc cards are rendered here by JS from ccxApplyDocFields, to keep markup + validation in sync -->
              </div>
            </section>

            <label class="ccx-apply-certify">
              <input type="checkbox" id="ccx-apply-certify" name="certify" required>
              <span>I certify that the information provided in this application is true and correct. I understand that providing false information may result in cancellation of my admission.</span>
            </label>

            <div class="ccx-apply-nav">
              <button type="button" class="ccx-apply-btn ccx-apply-btn-outline" data-ccx-apply-back="3">← Back</button>
              <span class="ccx-apply-nav-spacer"></span>
              <button type="submit" class="ccx-apply-btn ccx-apply-btn-danger" id="ccx-apply-submit-btn">Submit Admission Application →</button>
            </div>
          </div>

        </form>

        <!-- ============================================================
         CONFIRMATION (shown after successful submission)
         ============================================================ -->
        <div class="ccx-apply-confirm" id="ccx-apply-confirm" style="display:none;">
          <div class="ccx-apply-confirm-check"><svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
              <path d="M5 13l4 4L19 7" />
            </svg></div>
          <h2>Application Submitted</h2>
          <p>Thank you — your admission application has been received. Our admissions team will contact you shortly with the next steps.</p>
          <div class="ccx-apply-confirm-ref" id="ccx-apply-confirm-ref"></div>
          <p style="font-size:12.5px;">A copy has also been sent to your email address. If you don't see it, please check your spam folder.</p>
          <a href="/" class="ccx-apply-btn ccx-apply-btn-outline" style="margin-top:18px;">Return to Home</a>
        </div>

      </div>
    </main>

    <footer class="ccx-apply-footer">
      <div class="ccx-container">
        EduApply — an independent admissions guidance platform. Not an official university website.
        Need help? <a href="#" id="ccx-apply-footer-whatsapp">Chat with us on WhatsApp</a>.
      </div>
    </footer>

    <a href="#" class="ccx-whatsapp-float" id="ccx-apply-whatsapp-float" aria-label="Chat with us on WhatsApp">
      <svg width="26" height="26" viewBox="0 0 24 24" fill="#fff">
        <path d="M17.6 6.32A8.86 8.86 0 0012.05 4a8.94 8.94 0 00-7.74 13.4L3 21l3.7-1.28a8.9 8.9 0 004.34 1.12h.01A8.94 8.94 0 0021 12.32a8.87 8.87 0 00-3.4-6zM12.05 19.6a7.4 7.4 0 01-3.78-1.04l-.27-.16-2.8.97.94-2.73-.18-.28a7.44 7.44 0 01-1.15-3.98 7.4 7.4 0 0112.65-5.25 7.36 7.36 0 012.17 5.25 7.4 7.4 0 01-7.58 7.22zm4.08-5.55c-.22-.11-1.31-.65-1.51-.72-.2-.07-.35-.11-.5.11-.15.22-.57.72-.7.87-.13.15-.26.16-.48.05a6.1 6.1 0 01-1.8-1.11 6.8 6.8 0 01-1.24-1.55c-.13-.22 0-.34.1-.45.1-.1.22-.26.33-.39.11-.13.15-.22.22-.37.07-.15.04-.28-.02-.39-.06-.11-.5-1.21-.69-1.66-.18-.43-.36-.37-.5-.38h-.43c-.15 0-.39.06-.6.28-.2.22-.79.77-.79 1.87 0 1.1.81 2.16.92 2.31.11.15 1.6 2.44 3.87 3.42.54.23.96.37 1.29.48.54.17 1.03.15 1.42.09.43-.06 1.31-.53 1.5-1.05.18-.51.18-.95.13-1.05-.06-.1-.2-.15-.42-.26z" />
      </svg>
    </a>

    <div class="ccx-apply-loader-overlay" id="ccx-apply-loader-overlay" role="status" aria-live="polite">
      <div class="ccx-apply-loader-box">
        <div class="ccx-apply-loader-spinner"></div>
        <div class="ccx-apply-loader-title">Submitting your application…</div>
        <div class="ccx-apply-loader-msg" id="ccx-apply-loader-msg">Please don't close or refresh this page.</div>
      </div>
    </div>

  </div><!-- /#ccx-page -->

  <script>
    /* ============================================================
   REAL UNIVERSITY DATA — same verified campuses/programs used
   throughout the rest of this site. Nothing invented here.
   ============================================================ */
    /**
     * Programs for each university now come from Appearance → Customize →
     * EduApply Settings → Application Form — Programs, so this is the one
     * place a program list can be edited and every ?program= deep link
     * (from marketing-page faculty/department cards) stays in sync
     * automatically. Name/logo/campus fields are unchanged from before.
     */
    var ccxApplyUniversities = {
      UCP: {
        name: "University of Central Punjab",
        logo: "https://ucp.edu.pk/inc/uploads/2019/06/ucp-sticky-logo-white-1.png",
        logoDarkBg: true,
        campuses: ["Lahore (Main Campus)"],
        programs: <?php echo wp_json_encode( ccx_university_programs( 'ucp' ) ); ?>
      },
      BIMS: {
        name: "Barani Institute of Management & Sciences (BIMS)",
        logo: "https://eduapply.online/wp-content/uploads/2026/08/bims-logo-nav.webp",
        campuses: ["Rawalpindi (Main Campus)"],
        programs: <?php echo wp_json_encode( ccx_university_programs( 'bims' ) ); ?>
      },
      UOR: {
        name: "University of Rawalpindi",
        logo: "https://www.uor.edu.pk/frontend/academics/img/logo-primary.png",
        campuses: ["Rawalpindi (Main Campus)"],
        programs: <?php echo wp_json_encode( ccx_university_programs( 'uor' ) ); ?>
      },
      NUML: {
        name: "National University of Modern Languages",
        logo: "https://numl.edu.pk/templates/template10/images/numl_logo.png",
        campuses: ["Islamabad (Main Campus)", "Lahore", "Faisalabad", "Multan", "Hyderabad", "Quetta", "Peshawar", "Karachi", "Rawalpindi", "Mirpur (Azad Kashmir)"],
        programs: <?php echo wp_json_encode( ccx_university_programs( 'numl' ) ); ?>
      },
      TMUC: {
        name: "The Millennium Universal College",
        logo: "https://tmuc.edu.pk/wp-content/uploads/2019/10/Tmuc-logo.png",
        campuses: ["Islamabad (Main Campus)", "Rawalpindi", "Gujranwala", "Faisalabad", "Lahore", "Karachi", "Peshawar", "Abbottabad", "Multan"],
        programs: <?php echo wp_json_encode( ccx_university_programs( 'tmuc' ) ); ?>
      },
      Bahria: {
        name: "Bahria University",
        logo: "https://eduapply.online/wp-content/uploads/2026/08/bu_logo.png",
        campuses: ["Islamabad", "Karachi", "Lahore"],
        programs: <?php echo wp_json_encode( ccx_university_programs( 'bahria' ) ); ?>
      },
      IQRA: {
        name: "Iqra University Islamabad Campus",
        logo: "https://eduapply.online/wp-content/uploads/2026/08/Iqra-Logo.webp",
        campuses: ["Islamabad (H-9 Campus)"],
        programs: <?php echo wp_json_encode( ccx_university_programs( 'iqra' ) ); ?>
      }
    };

    /* ============================================================
       DOCUMENT FIELDS — name shown to user, field name posted to
       the backend, and whether it's required.
       ============================================================ */
    var ccxApplyDocFields = [{
        key: "cnic_file",
        label: "CNIC / B-Form",
        required: true
      },
      {
        key: "photo_file",
        label: "Passport Size Photograph",
        required: true
      },
      {
        key: "matric_cert_file",
        label: "Matric / O-Level Certificate",
        required: true
      },
      {
        key: "matric_result_file",
        label: "Matric / O-Level Result Card",
        required: true
      },
      {
        key: "inter_cert_file",
        label: "Intermediate / A-Level Certificate",
        required: true
      },
      {
        key: "inter_result_file",
        label: "Intermediate / A-Level Result Card",
        required: true
      },
    ];

    var ccxApplyConfig = {
      // Set at Appearance → Customize → EduApply Settings → WhatsApp Numbers → Default / General Helpline.
      whatsappNumber: "<?php echo esc_js( ccx_whatsapp_number() ); ?>",
      whatsappMessage: "Hello, I need help with my admission application.",
      // Submits via WordPress's own admin-ajax.php system (not a standalone
      // submit.php) — see inc/admission-handler.php for the PHP side.
      submitEndpoint: "<?php echo esc_url(admin_url('admin-ajax.php')); ?>",
      ajaxAction: "ccx_submit_admission",
      nonce: "<?php echo esc_js(wp_create_nonce('ccx_admission_nonce')); ?>",
      maxFileSizeMB: 5,
      allowedFileTypes: ["application/pdf", "image/jpeg", "image/png"]
    };

    var ccxApplyPage = (function() {
      "use strict";

      var currentStep = 1;
      var totalSteps = 4;

      function init() {
        setupWhatsapp();
        populateYears();
        renderDocCards();
        setupStepNav();
        setupSubmit();
        prefillFromQuery();
        setupProgramDuplicateGuard();
        setupProgramOtherFields();
        setupDigitOnlyFields();
      }

      /* ---------- WhatsApp ---------- */
      function setupWhatsapp() {
        var number = ccxApplyConfig.whatsappNumber && ccxApplyConfig.whatsappNumber.trim() ? ccxApplyConfig.whatsappNumber.trim() : "";
        var base = number ? ("https://wa.me/" + number) : "https://wa.me/";
        var url = base + "?text=" + encodeURIComponent(ccxApplyConfig.whatsappMessage);
        ["ccx-apply-help-link", "ccx-apply-footer-whatsapp", "ccx-apply-whatsapp-float"].forEach(function(id) {
          var el = document.getElementById(id);
          if (el) el.setAttribute("href", url);
        });
      }

      /* ---------- Passing year dropdown ---------- */
      function populateYears() {
        var select = document.getElementById("ccx-apply-year");
        if (!select) return;
        var currentYear = new Date().getFullYear();
        var html = '<option value="">Select Year</option>';
        for (var y = currentYear; y >= currentYear - 15; y--) {
          html += '<option value="' + y + '">' + y + '</option>';
        }
        select.innerHTML = html;
      }


      function applyUniversitySelection(uniKey) {
        var programSelects = [
          document.getElementById("ccx-apply-program1"),
          document.getElementById("ccx-apply-program2"),
          document.getElementById("ccx-apply-program3")
        ];
        var campusSelect = document.getElementById("ccx-apply-campus");
        var hiddenUni = document.getElementById("ccx-apply-university-hidden");
        var data = ccxApplyUniversities[uniKey];

        if (!data) {
          programSelects.forEach(function(sel) {
            sel.innerHTML = '<option value="">Select University First</option>';
            sel.disabled = true;
          });
          campusSelect.innerHTML = '<option value="">Select University First</option>';
          campusSelect.disabled = true;
          if (hiddenUni) hiddenUni.value = "";
          updateUniversityBadge(null);
          return;
        }

        var optionsHtml = buildProgramOptionsHtml(data) +
          '<option value="__other__">Other (not listed — type it in)</option>';

        programSelects.forEach(function(sel, i) {
          sel.disabled = false;
          sel.innerHTML = i === 0 ?
            optionsHtml.replace('Select Program', 'Select Program') :
            optionsHtml.replace('Select Program', 'Select Program (optional)');
          resetProgramOtherField(i + 1);
        });

        campusSelect.disabled = false;
        campusSelect.innerHTML = '<option value="">Select Campus</option>' +
          data.campuses.map(function(c) {
            return '<option>' + c + '</option>';
          }).join("");

        if (hiddenUni) hiddenUni.value = uniKey;
        updateUniversityBadge(uniKey);
      }

      function buildProgramOptionsHtml(data) {
        var base = '<option value="">Select Program</option>';
        if (data.programGroups && data.programGroups.length) {
          return base + data.programGroups.map(function(group) {
            var opts = group.departments.map(function(d) {
              return '<option>' + d + '</option>';
            }).join("");
            return '<optgroup label="' + group.faculty + '">' + opts + '</optgroup>';
          }).join("");
        }
        return base + (data.programs || []).map(function(p) {
          return '<option>' + p + '</option>';
        }).join("");
      }

      function resetProgramOtherField(n) {
        var sel = document.getElementById("ccx-apply-program" + n);
        var other = document.getElementById("ccx-apply-program" + n + "-other");
        var hint = document.getElementById("ccx-apply-program" + n + "-other-hint");
        if (!sel || !other) return;
        other.value = "";
        other.style.display = "none";
        other.required = false;
        other.removeAttribute("name");
        if (hint) hint.style.display = "none";
        sel.name = "program" + n;
        sel.required = (n === 1); // program1 is the only required preference
      }

      function setupProgramOtherFields() {
        [1, 2, 3].forEach(function(n) {
          var sel = document.getElementById("ccx-apply-program" + n);
          var other = document.getElementById("ccx-apply-program" + n + "-other");
          var hint = document.getElementById("ccx-apply-program" + n + "-other-hint");
          if (!sel || !other) return;

          sel.addEventListener("change", function() {
            if (sel.value === "__other__") {
              sel.removeAttribute("name"); // stop the placeholder select from being submitted
              sel.required = false;
              other.style.display = "block";
              if (hint) hint.style.display = "block";
              other.name = "program" + n;
              other.required = (n === 1);
              other.focus();
            } else {
              resetProgramOtherField(n);
            }
          });
        });
      }

      function setupDigitOnlyFields() {
        ["ccx-apply-cnic", "ccx-apply-mobile"].forEach(function(id) {
          var el = document.getElementById(id);
          if (!el) return;
          el.addEventListener("input", function() {
            var digitsOnly = el.value.replace(/\D/g, "");
            var max = parseInt(el.getAttribute("maxlength"), 10) || digitsOnly.length;
            el.value = digitsOnly.slice(0, max);
          });
        });
      }

      function getEffectiveProgramValue(n) {
        var sel = document.getElementById("ccx-apply-program" + n);
        var other = document.getElementById("ccx-apply-program" + n + "-other");
        if (sel && sel.value === "__other__") return "";
        if (other && other.style.display !== "none") return other.value.trim().toLowerCase();
        return sel ? sel.value.trim().toLowerCase() : "";
      }

      /* Prevents picking the same program twice across the 3 preference fields */
      function setupProgramDuplicateGuard() {
        function checkDuplicates(triggerEl) {
          var p1 = getEffectiveProgramValue(1);
          var p2 = getEffectiveProgramValue(2);
          var p3 = getEffectiveProgramValue(3);
          var values = [p1, p2, p3].filter(function(v) {
            return v;
          });
          var hasDuplicate = new Set(values).size !== values.length;
          if (hasDuplicate) {
            showError("Please choose 3 different programmes — you've selected the same one more than once.");
            if (triggerEl) triggerEl.value = "";
          } else {
            hideError();
          }
        }

        ["ccx-apply-program1", "ccx-apply-program2", "ccx-apply-program3"].forEach(function(id) {
          var el = document.getElementById(id);
          if (!el) return;
          el.addEventListener("change", function() {
            checkDuplicates(el);
          });
        });

        [1, 2, 3].forEach(function(n) {
          var other = document.getElementById("ccx-apply-program" + n + "-other");
          if (!other) return;
          other.addEventListener("blur", function() {
            checkDuplicates(other);
          });
        });
      }

      /* ---------- University logo badge (shown above the page title) ---------- */
      function updateUniversityBadge(uniKey) {
        var badge = document.getElementById("ccx-apply-uni-badge");
        var logoTile = document.getElementById("ccx-apply-uni-logo-tile");
        var nameEl = document.getElementById("ccx-apply-uni-name");
        if (!badge || !logoTile || !nameEl) return;

        var data = ccxApplyUniversities[uniKey];
        if (!data) {
          badge.classList.remove("ccx-apply-show");
          return;
        }

        nameEl.textContent = data.name;
        logoTile.className = "ccx-apply-uni-logo-tile";
        if (data.logo) {
          if (data.logoDarkBg) logoTile.classList.add("ccx-apply-dark-bg");
          logoTile.innerHTML = '<img src="' + data.logo + '" alt="' + data.name + ' logo">';
        } else {
          // No official logo asset available (e.g. BIMS) — fall back to a
          // styled initials tile rather than a missing/broken image.
          logoTile.classList.add("ccx-apply-mono");
          logoTile.textContent = uniKey;
        }
        badge.classList.add("ccx-apply-show");
      }

      /* ---------- Pre-fill university (+ program, if given) from query params ---------- */
      function prefillFromQuery() {
        var params = new URLSearchParams(window.location.search);
        var uni = params.get("university");
        var program = params.get("program");

        var refField = document.getElementById("ccx-apply-referrer-hidden");
        if (refField) refField.value = document.referrer || "(direct link / no referrer)";

        if (uni && ccxApplyUniversities[uni]) {
          applyUniversitySelection(uni);
        } else {
          var inferredUni = inferUniversityFromReferrer(document.referrer);
          if (inferredUni) {
            applyUniversitySelection(inferredUni);
          }
        }

        if (uni && program) {
          var programSelect = document.getElementById("ccx-apply-program1");
          window.setTimeout(function() {
            if (programSelect) {
              var match = Array.prototype.find.call(programSelect.options, function(opt) {
                return opt.value === program;
              });
              if (match) {
                programSelect.value = program;
              } else {
                programSelect.value = "__other__";
                programSelect.dispatchEvent(new Event("change"));
                var otherField = document.getElementById("ccx-apply-program1-other");
                if (otherField) otherField.value = program;
              }
            }
          }, 0);
        }
      }

      function inferUniversityFromReferrer(referrer) {
        if (!referrer) return null;
        var pathMap = {
          "/ucp": "UCP",
          "/bims": "BIMS",
          "/uor": "UOR",
          "/numl": "NUML",
          "/tmuc": "TMUC",
          "/bahria": "Bahria",
          "/iqra": "IQRA"
        };
        for (var path in pathMap) {
          if (referrer.indexOf(path) !== -1) return pathMap[path];
        }
        return null;
      }

      /* ---------- Document upload cards ---------- */
      function renderDocCards() {
        var grid = document.getElementById("ccx-apply-doc-grid");
        if (!grid) return;

        grid.innerHTML = ccxApplyDocFields.map(function(doc) {
          var reqMark = doc.required ? ' <span class="ccx-apply-req">*</span>' : ' <span class="ccx-apply-opt">(if applicable)</span>';
          return (
            '<div class="ccx-apply-doc-card" data-ccx-apply-doc="' + doc.key + '">' +
            '<div class="ccx-apply-doc-top">' +
            '<span class="ccx-apply-doc-icon"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/></svg></span>' +
            '<span class="ccx-apply-doc-name">' + doc.label + reqMark + '</span>' +
            '</div>' +
            '<div class="ccx-apply-doc-btn-row">' +
            '<label class="ccx-apply-doc-choose">Choose File<input type="file" name="' + doc.key + '" id="ccx-apply-doc-' + doc.key + '" accept=".pdf,.jpg,.jpeg,.png" ' + (doc.required ? 'required' : '') + '></label>' +
            '<span class="ccx-apply-doc-filename" id="ccx-apply-doc-filename-' + doc.key + '">No file chosen</span>' +
            '</div>' +
            '<p class="ccx-apply-doc-hint">PDF, JPG or PNG (Max ' + ccxApplyConfig.maxFileSizeMB + 'MB)</p>' +
            '</div>'
          );
        }).join("");

        ccxApplyDocFields.forEach(function(doc) {
          var input = document.getElementById("ccx-apply-doc-" + doc.key);
          var card = grid.querySelector('[data-ccx-apply-doc="' + doc.key + '"]');
          var filenameEl = document.getElementById("ccx-apply-doc-filename-" + doc.key);
          if (!input) return;
          input.addEventListener("change", function() {
            card.classList.remove("ccx-apply-error");
            if (!input.files || !input.files[0]) {
              filenameEl.textContent = "No file chosen";
              card.classList.remove("ccx-apply-has-file");
              return;
            }
            var file = input.files[0];
            var validType = ccxApplyConfig.allowedFileTypes.indexOf(file.type) !== -1;
            var validSize = file.size <= ccxApplyConfig.maxFileSizeMB * 1024 * 1024;
            if (!validType || !validSize) {
              card.classList.add("ccx-apply-error");
              card.classList.remove("ccx-apply-has-file");
              filenameEl.textContent = !validType ? "Unsupported file type" : "File exceeds " + ccxApplyConfig.maxFileSizeMB + "MB";
              input.value = "";
              return;
            }
            card.classList.add("ccx-apply-has-file");
            filenameEl.textContent = file.name;
          });
        });
      }

      /* ---------- Step navigation ---------- */
      function goToStep(step) {
        currentStep = step;
        document.querySelectorAll("#ccx-page .ccx-apply-panel").forEach(function(panel) {
          panel.classList.toggle("ccx-apply-panel-active", parseInt(panel.getAttribute("data-ccx-apply-panel"), 10) === step);
        });
        document.querySelectorAll("#ccx-page .ccx-apply-step").forEach(function(el) {
          var s = parseInt(el.getAttribute("data-ccx-apply-step-indicator"), 10);
          el.classList.toggle("ccx-apply-step-active", s === step);
          el.classList.toggle("ccx-apply-step-done", s < step);
        });
        window.scrollTo({
          top: 0,
          behavior: "smooth"
        });
      }

      function validateStep(step) {
        var panel = document.querySelector('.ccx-apply-panel[data-ccx-apply-panel="' + step + '"]');
        if (!panel) return true;
        var fields = panel.querySelectorAll("input[required], select[required], textarea[required]");
        var firstInvalid = null;
        var valid = true;

        fields.forEach(function(field) {
          // radio groups: only validate once per name
          if (field.type === "radio") {
            var group = panel.querySelectorAll('input[name="' + field.name + '"]');
            var checked = Array.prototype.some.call(group, function(r) {
              return r.checked;
            });
            if (!checked) {
              valid = false;
              if (!firstInvalid) firstInvalid = field;
            }
            return;
          }
          if (!field.checkValidity()) {
            valid = false;
            if (!firstInvalid) firstInvalid = field;
            var wrap = field.closest(".ccx-apply-field") || field.closest(".ccx-apply-doc-card");
            if (wrap) wrap.classList.add("ccx-apply-error");
          } else {
            var wrapOk = field.closest(".ccx-apply-field") || field.closest(".ccx-apply-doc-card");
            if (wrapOk) wrapOk.classList.remove("ccx-apply-error");
          }
        });

        if (!valid && firstInvalid) {
          firstInvalid.reportValidity ? firstInvalid.reportValidity() : null;
          var scrollWrap = firstInvalid.closest(".ccx-apply-field") || firstInvalid.closest(".ccx-apply-doc-card");
          if (scrollWrap) scrollWrap.scrollIntoView({
            behavior: "smooth",
            block: "center"
          });
        }
        return valid;
      }

      function setupStepNav() {
        document.querySelectorAll("[data-ccx-apply-next]").forEach(function(btn) {
          btn.addEventListener("click", function() {
            var target = parseInt(btn.getAttribute("data-ccx-apply-next"), 10);
            if (!validateStep(currentStep)) return;
            goToStep(target);
          });
        });
        document.querySelectorAll("[data-ccx-apply-back]").forEach(function(btn) {
          btn.addEventListener("click", function() {
            goToStep(parseInt(btn.getAttribute("data-ccx-apply-back"), 10));
          });
        });
      }

      /* ---------- Submit ---------- */
      function showError(msg) {
        var banner = document.getElementById("ccx-apply-error-banner");
        if (!banner) return;
        banner.textContent = msg;
        banner.classList.add("ccx-apply-show");
        banner.scrollIntoView({
          behavior: "smooth",
          block: "center"
        });
      }

      function hideError() {
        var banner = document.getElementById("ccx-apply-error-banner");
        if (banner) banner.classList.remove("ccx-apply-show");
      }

      var ccxApplyLoaderMessages = [
        "Please don't close or refresh this page.",
        "Uploading your documents securely…",
        "Almost there, hang tight…",
        "Double-checking everything looks good…"
      ];
      var ccxApplyLoaderInterval = null;

      function showLoader() {
        var overlay = document.getElementById("ccx-apply-loader-overlay");
        var msgEl = document.getElementById("ccx-apply-loader-msg");
        if (!overlay) return;
        if (ccxApplyLoaderInterval) window.clearInterval(ccxApplyLoaderInterval);
        overlay.classList.add("ccx-apply-show");
        var i = 0;
        if (msgEl) msgEl.textContent = ccxApplyLoaderMessages[0];
        ccxApplyLoaderInterval = window.setInterval(function() {
          i = (i + 1) % ccxApplyLoaderMessages.length;
          if (!msgEl) return;
          msgEl.style.opacity = "0";
          window.setTimeout(function() {
            msgEl.textContent = ccxApplyLoaderMessages[i];
            msgEl.style.opacity = "1";
          }, 250);
        }, 2200);
      }

      function hideLoader() {
        var overlay = document.getElementById("ccx-apply-loader-overlay");
        if (overlay) overlay.classList.remove("ccx-apply-show");
        if (ccxApplyLoaderInterval) {
          window.clearInterval(ccxApplyLoaderInterval);
          ccxApplyLoaderInterval = null;
        }
      }

      function setupSubmit() {
        var form = document.getElementById("ccx-apply-form");
        var submitBtn = document.getElementById("ccx-apply-submit-btn");
        if (!form) return;

        form.addEventListener("submit", function(e) {
          e.preventDefault();
          hideError();

          if (!validateStep(4)) return;

          var certify = document.getElementById("ccx-apply-certify");
          if (certify && !certify.checked) {
            showError("Please confirm the certification checkbox before submitting.");
            return;
          }

          submitBtn.disabled = true;
          submitBtn.textContent = "Submitting…";
          showLoader();

          var formData = new FormData(form);
          formData.append("action", ccxApplyConfig.ajaxAction);
          formData.append("nonce", ccxApplyConfig.nonce);

          fetch(ccxApplyConfig.submitEndpoint, {
              method: "POST",
              body: formData
            })
            .then(function(res) {
              if (!res.ok) throw new Error("Server returned status " + res.status);
              return res.json();
            })
            .then(function(data) {
              if (!data || data.success !== true) {
                throw new Error((data && data.data && data.data.error) || "Something went wrong. Please try again.");
              }
              hideLoader();
              document.querySelector(".ccx-apply-stepper").style.display = "none";
              form.style.display = "none";
              var confirmBox = document.getElementById("ccx-apply-confirm");
              var refEl = document.getElementById("ccx-apply-confirm-ref");
              if (refEl) refEl.textContent = "Reference No: " + (data.data.referenceId || "—");
              if (data.data.warning) {
                console.warn(data.data.warning); // or surface it to the user if you want
              }
              if (confirmBox) confirmBox.style.display = "block";
            })
            .catch(function(err) {
              hideLoader();
              showError("We couldn't submit your application (" + err.message + "). Please check your connection and try again, or contact us on WhatsApp.");
              submitBtn.disabled = false;
              submitBtn.textContent = "Submit Admission Application →";
            });
        });
      }

      return {
        init: init
      };
    })();

    if (document.readyState === "loading") {
      document.addEventListener("DOMContentLoaded", ccxApplyPage.init);
    } else {
      ccxApplyPage.init();
    }
  </script>

  <?php wp_footer(); ?>
</body>

</html>