<?php

/**
 * Template Name: EduApply — BIMS
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Barani Institute of Management &amp; Sciences (BIMS) — Rawalpindi</title>
  <meta name="description" content="Barani Institute of Management & Sciences (BIMS) Rawalpindi — HEC recognized, PMAS-Arid affiliated institute offering degree programs in business, computing, sciences and allied health sciences." />
  <link rel="shortcut icon" href="https://eduapply.online/wp-content/uploads/2026/08/logo.webp" type="image/webp">

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

    #bims-page a {
      color: inherit;
      text-decoration: none;
    }

    #bims-page button {
      font-family: inherit;
      cursor: pointer;
      border: none;
      background: none;
    }

    #bims-page ul {
      list-style: none;
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

    #bims-page .bims-eyebrow {
      font-family: var(--bims-font-display);
      font-size: 12.5px;
      font-weight: 700;
      letter-spacing: 0.1em;
      text-transform: uppercase;
      color: var(--bims-green-600);
      margin-bottom: 10px;
    }

    #bims-page .bims-section-title {
      font-family: var(--bims-font-display);
      font-weight: 700;
      font-size: clamp(24px, 3vw, 34px);
      color: var(--bims-green-900);
      line-height: 1.2;
      letter-spacing: -0.01em;
    }

    #bims-page .bims-section-sub {
      margin-top: 12px;
      font-size: 15.5px;
      color: var(--bims-ink-soft);
      line-height: 1.65;
      max-width: 60ch;
    }

    #bims-page .bims-section-head {
      margin-bottom: 40px;
    }

    #bims-page .bims-section-head.bims-center {
      text-align: center;
      max-width: 640px;
      margin-left: auto;
      margin-right: auto;
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

    /* ============================================================
   TOP UTILITY BAR
   ============================================================ */
    #bims-page .bims-topbar {
      background: var(--bims-green-950);
      color: rgba(255, 255, 255, 0.85);
      font-size: 12.5px;
      padding: 8px 0;
    }

    #bims-page .bims-topbar .bims-container {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 16px;
      flex-wrap: wrap;
    }

    #bims-page .bims-topbar-items {
      display: flex;
      align-items: center;
      gap: 20px;
      flex-wrap: wrap;
    }

    #bims-page .bims-topbar-items span {
      display: flex;
      align-items: center;
      gap: 6px;
    }

    #bims-page .bims-topbar a:hover {
      color: var(--bims-gold);
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

    /* ============================================================
   HERO
   ============================================================ */
    #bims-page .bims-hero {
      position: relative;
      min-height: 600px;
      display: flex;
      align-items: center;
      overflow: hidden;
    }

    #bims-page .bims-hero-media {
      position: absolute;
      inset: 0;
    }

    #bims-page .bims-hero-media img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    #bims-page .bims-hero-media::after {
      content: "";
      position: absolute;
      inset: 0;
      background: linear-gradient(100deg, rgba(7, 40, 29, 0.92) 8%, rgba(14, 59, 42, 0.72) 42%, rgba(14, 59, 42, 0.35) 75%);
    }

    #bims-page .bims-hero-content {
      position: relative;
      z-index: 1;
      padding: 90px 0;
    }

    #bims-page .bims-hero-kicker {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      font-size: 12.5px;
      font-weight: 700;
      letter-spacing: 0.08em;
      text-transform: uppercase;
      color: var(--bims-gold);
      margin-bottom: 18px;
    }

    #bims-page .bims-hero h1 {
      font-family: var(--bims-font-display);
      font-weight: 800;
      color: #fff;
      font-size: clamp(34px, 5.4vw, 58px);
      line-height: 1.1;
      max-width: 14ch;
      letter-spacing: -0.01em;
    }

    #bims-page .bims-hero-sub {
      margin-top: 20px;
      font-size: 16.5px;
      line-height: 1.65;
      color: rgba(255, 255, 255, 0.85);
      max-width: 52ch;
    }

    #bims-page .bims-hero-actions {
      display: flex;
      gap: 14px;
      margin-top: 34px;
      flex-wrap: wrap;
    }

    #bims-page .bims-announcement {
      position: relative;
      z-index: 1;
      background: var(--bims-green-950);
      border-top: 1px solid rgba(255, 255, 255, 0.1);
      padding: 12px 0;
    }

    #bims-page .bims-announcement .bims-container {
      display: flex;
      align-items: center;
      gap: 12px;
    }

    #bims-page .bims-announcement-badge {
      flex-shrink: 0;
      background: var(--bims-gold);
      color: var(--bims-green-950);
      font-family: var(--bims-font-display);
      font-size: 10.5px;
      font-weight: 800;
      letter-spacing: 0.06em;
      text-transform: uppercase;
      padding: 5px 10px;
      border-radius: 5px;
    }

    #bims-page .bims-announcement p {
      font-size: 13px;
      color: rgba(255, 255, 255, 0.85);
      line-height: 1.5;
    }

    /* ============================================================
   WHY CHOOSE / QUICK LINKS
   ============================================================ */
    #bims-page .bims-why {
      padding: 88px 0 70px;
    }

    #bims-page .bims-why-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 22px;
    }

    #bims-page .bims-why-card {
      background: #fff;
      border: 1px solid var(--bims-paper-dim);
      border-radius: 14px;
      padding: 30px 26px;
      box-shadow: var(--bims-shadow-s);
      transition: transform .3s ease, box-shadow .3s ease, border-color .3s ease;
    }

    #bims-page .bims-why-card:hover {
      transform: translateY(-6px);
      box-shadow: var(--bims-shadow-m);
      border-color: transparent;
    }

    #bims-page .bims-why-icon {
      width: 52px;
      height: 52px;
      border-radius: 12px;
      margin-bottom: 20px;
      background: var(--bims-green-tint);
      color: var(--bims-green-700);
      display: flex;
      align-items: center;
      justify-content: center;
    }

    #bims-page .bims-why-card h3 {
      font-family: var(--bims-font-display);
      font-size: 17px;
      font-weight: 700;
      color: var(--bims-green-900);
      margin-bottom: 10px;
    }

    #bims-page .bims-why-card p {
      font-size: 13.8px;
      line-height: 1.6;
      color: var(--bims-ink-soft);
    }

    #bims-page .bims-quicklinks {
      margin-top: 34px;
      display: flex;
      flex-wrap: wrap;
      gap: 12px;
      align-items: center;
      justify-content: center;
      padding: 22px;
      background: var(--bims-green-tint);
      border-radius: 14px;
    }

    #bims-page .bims-quicklinks a {
      font-size: 13.5px;
      font-weight: 700;
      color: var(--bims-green-800);
      padding: 9px 16px;
      border-radius: 999px;
      background: #fff;
      box-shadow: var(--bims-shadow-s);
      transition: background .2s ease, color .2s ease;
    }

    #bims-page .bims-quicklinks a:hover {
      background: var(--bims-green-700);
      color: #fff;
    }

    @media (max-width:980px) {
      #bims-page .bims-why-grid {
        grid-template-columns: repeat(2, 1fr);
      }
    }

    @media (max-width:560px) {
      #bims-page .bims-why-grid {
        grid-template-columns: 1fr;
      }
    }

    /* ============================================================
   PROGRAMS
   ============================================================ */
    #bims-page .bims-programs {
      padding: 70px 0;
      background: var(--bims-paper);
    }

    #bims-page .bims-programs-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 16px;
    }

    #bims-page .bims-program-card {
      background: #fff;
      border-radius: 12px;
      padding: 22px 20px;
      box-shadow: var(--bims-shadow-s);
      transition: transform .25s ease, box-shadow .25s ease;
      border-left: 3px solid var(--bims-green-600);
      display: block;
      width: 100%;
      text-align: left;
      cursor: pointer;
      border-top: none;
      border-right: none;
      border-bottom: none;
    }

    #bims-page .bims-program-card:hover {
      transform: translateY(-4px);
      box-shadow: var(--bims-shadow-m);
    }

    #bims-page .bims-program-card .bims-dept {
      font-size: 11px;
      font-weight: 700;
      letter-spacing: 0.04em;
      text-transform: uppercase;
      color: var(--bims-green-600);
      margin-bottom: 8px;
    }

    #bims-page .bims-program-card h4 {
      font-family: var(--bims-font-display);
      font-size: 14.5px;
      font-weight: 700;
      color: var(--bims-green-900);
      line-height: 1.35;
    }

    @media (max-width:980px) {
      #bims-page .bims-programs-grid {
        grid-template-columns: repeat(2, 1fr);
      }
    }

    @media (max-width:560px) {
      #bims-page .bims-programs-grid {
        grid-template-columns: 1fr;
      }
    }

    /* ============================================================
   DG MESSAGE
   ============================================================ */
    #bims-page .bims-dg {
      padding: 88px 0;
      background: #fff;
    }

    #bims-page .bims-dg-grid {
      display: grid;
      grid-template-columns: 0.62fr 1fr;
      gap: 56px;
      align-items: center;
    }

    #bims-page .bims-dg-portrait-wrap {
      position: relative;
    }

    #bims-page .bims-dg-portrait {
      width: 220px;
      height: 220px;
      border-radius: 50%;
      margin: 0 auto;
      background: linear-gradient(150deg, var(--bims-green-600), var(--bims-green-900));
      display: flex;
      align-items: center;
      justify-content: center;
      font-family: var(--bims-font-display);
      font-weight: 800;
      font-size: 56px;
      color: #fff;
      box-shadow: var(--bims-shadow-l);
      border: 6px solid var(--bims-green-tint);
      overflow: hidden;
    }

    #bims-page .bims-dg-portrait img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    #bims-page .bims-dg-text blockquote {
      font-size: 16px;
      line-height: 1.75;
      color: var(--bims-ink-soft);
      border-left: 3px solid var(--bims-green-600);
      padding-left: 22px;
      margin: 22px 0;
    }

    #bims-page .bims-dg-name {
      font-family: var(--bims-font-display);
      font-weight: 700;
      font-size: 16.5px;
      color: var(--bims-green-900);
    }

    #bims-page .bims-dg-role {
      font-size: 13px;
      color: var(--bims-ink-soft);
      margin-top: 2px;
    }

    @media (max-width:860px) {
      #bims-page .bims-dg-grid {
        grid-template-columns: 1fr;
        text-align: center;
      }

      #bims-page .bims-dg-text blockquote {
        border-left: none;
        border-top: 3px solid var(--bims-green-600);
        padding-left: 0;
        padding-top: 18px;
        text-align: left;
      }
    }

    /* ============================================================
   ACADEMIC / VIDEO EXPERIENCE
   ============================================================ */
    #bims-page .bims-experience {
      position: relative;
      background: var(--bims-green-950);
      padding: 0;
      overflow: hidden;
    }

    #bims-page .bims-experience-grid {
      display: grid;
      grid-template-columns: 1.05fr 0.95fr;
    }

    #bims-page .bims-experience-text {
      padding: 80px clamp(20px, 5vw, 64px);
      color: #fff;
    }

    #bims-page .bims-experience-text .bims-eyebrow {
      color: var(--bims-gold);
    }

    #bims-page .bims-experience-text h2 {
      font-family: var(--bims-font-display);
      font-weight: 700;
      font-size: clamp(24px, 3vw, 32px);
      line-height: 1.25;
      margin-bottom: 18px;
    }

    #bims-page .bims-experience-text p {
      font-size: 15px;
      line-height: 1.7;
      color: rgba(255, 255, 255, 0.72);
      max-width: 52ch;
    }

    #bims-page .bims-experience-features {
      margin-top: 30px;
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 16px;
    }

    #bims-page .bims-experience-feature {
      display: flex;
      gap: 12px;
      align-items: flex-start;
    }

    #bims-page .bims-experience-feature .bims-check {
      width: 26px;
      height: 26px;
      border-radius: 50%;
      background: var(--bims-green-700);
      color: var(--bims-gold);
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
      margin-top: 2px;
    }

    #bims-page .bims-experience-feature strong {
      display: block;
      font-size: 14px;
      font-weight: 700;
      color: #fff;
      margin-bottom: 3px;
    }

    #bims-page .bims-experience-feature span {
      font-size: 12.5px;
      color: rgba(255, 255, 255, 0.65);
      line-height: 1.5;
    }

    #bims-page .bims-experience-media {
      position: relative;
      min-height: 340px;
    }

    #bims-page .bims-experience-media video,
    #bims-page .bims-experience-media img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      position: absolute;
      inset: 0;
    }

    @media (max-width:900px) {
      #bims-page .bims-experience-grid {
        grid-template-columns: 1fr;
      }

      #bims-page .bims-experience-media {
        min-height: 260px;
      }

      #bims-page .bims-experience-features {
        grid-template-columns: 1fr;
      }
    }

    /* ============================================================
   FACULTY
   ============================================================ */
    #bims-page .bims-faculty {
      padding: 88px 0;
      background: #fff;
    }

    #bims-page .bims-faculty-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 26px;
    }

    #bims-page .bims-faculty-card {
      text-align: center;
    }

    #bims-page .bims-faculty-avatar-wrap {
      position: relative;
      width: 132px;
      height: 132px;
      margin: 0 auto 18px;
    }

    #bims-page .bims-faculty-avatar {
      width: 100%;
      height: 100%;
      border-radius: 50%;
      background: linear-gradient(150deg, var(--bims-green-tint), #fff);
      border: 3px solid var(--bims-green-600);
      display: flex;
      align-items: center;
      justify-content: center;
      font-family: var(--bims-font-display);
      font-weight: 800;
      font-size: 30px;
      color: var(--bims-green-700);
      transition: transform .3s ease, border-color .3s ease;
    }

    #bims-page .bims-faculty-card:hover .bims-faculty-avatar {
      transform: scale(1.05);
      border-color: var(--bims-gold);
    }

    #bims-page .bims-faculty-card h4 {
      font-family: var(--bims-font-display);
      font-size: 15px;
      font-weight: 700;
      color: var(--bims-green-900);
    }

    #bims-page .bims-faculty-card p {
      font-size: 12.5px;
      color: var(--bims-ink-soft);
      margin-top: 4px;
    }

    #bims-page .bims-faculty-note {
      margin-top: 32px;
      font-size: 12.5px;
      color: var(--bims-ink-soft);
      text-align: center;
    }

    @media (max-width:980px) {
      #bims-page .bims-faculty-grid {
        grid-template-columns: repeat(2, 1fr);
      }
    }

    @media (max-width:480px) {
      #bims-page .bims-faculty-grid {
        grid-template-columns: 1fr;
        max-width: 260px;
        margin: 0 auto;
      }
    }

    /* ============================================================
   NEWS
   ============================================================ */
    #bims-page .bims-news {
      padding: 88px 0;
      background: var(--bims-paper);
    }

    #bims-page .bims-news-grid {
      display: grid;
      grid-template-columns: 1.2fr 1fr;
      gap: 26px;
    }

    #bims-page .bims-news-card {
      background: #fff;
      border-radius: 14px;
      overflow: hidden;
      box-shadow: var(--bims-shadow-s);
      transition: transform .3s ease, box-shadow .3s ease;
    }

    #bims-page .bims-news-card:hover {
      transform: translateY(-5px);
      box-shadow: var(--bims-shadow-m);
    }

    #bims-page .bims-news-media {
      position: relative;
      aspect-ratio: 16/9;
      overflow: hidden;
    }

    #bims-page .bims-news-media img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform .5s ease;
    }

    #bims-page .bims-news-card:hover .bims-news-media img {
      transform: scale(1.06);
    }

    #bims-page .bims-news-date {
      position: absolute;
      top: 14px;
      left: 14px;
      background: var(--bims-green-700);
      color: #fff;
      text-align: center;
      border-radius: 8px;
      padding: 8px 12px;
      font-family: var(--bims-font-display);
    }

    #bims-page .bims-news-date .bims-day {
      display: block;
      font-size: 18px;
      font-weight: 800;
      line-height: 1;
    }

    #bims-page .bims-news-date .bims-mon {
      display: block;
      font-size: 10px;
      font-weight: 700;
      text-transform: uppercase;
      margin-top: 2px;
    }

    #bims-page .bims-news-body {
      padding: 22px;
    }

    #bims-page .bims-news-cat {
      font-size: 11px;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 0.05em;
      color: var(--bims-green-600);
      margin-bottom: 8px;
    }

    #bims-page .bims-news-body h3 {
      font-family: var(--bims-font-display);
      font-size: 17px;
      font-weight: 700;
      color: var(--bims-green-900);
      margin-bottom: 10px;
      line-height: 1.3;
    }

    #bims-page .bims-news-body p {
      font-size: 13.5px;
      color: var(--bims-ink-soft);
      line-height: 1.6;
      margin-bottom: 14px;
    }

    #bims-page .bims-read-more {
      font-size: 13px;
      font-weight: 700;
      color: var(--bims-green-700);
      display: inline-flex;
      align-items: center;
      gap: 6px;
    }

    #bims-page .bims-read-more:hover {
      color: var(--bims-green-900);
    }

    #bims-page .bims-events-empty {
      background: #fff;
      border: 1.5px dashed var(--bims-paper-dim);
      border-radius: 14px;
      padding: 40px 28px;
      text-align: center;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      height: 100%;
    }

    #bims-page .bims-events-empty svg {
      color: var(--bims-green-600);
      margin-bottom: 16px;
    }

    #bims-page .bims-events-empty h3 {
      font-family: var(--bims-font-display);
      font-size: 16px;
      font-weight: 700;
      color: var(--bims-green-900);
      margin-bottom: 8px;
    }

    #bims-page .bims-events-empty p {
      font-size: 13px;
      color: var(--bims-ink-soft);
      max-width: 32ch;
    }

    @media (max-width:900px) {
      #bims-page .bims-news-grid {
        grid-template-columns: 1fr;
      }
    }

    /* ============================================================
   TESTIMONIALS
   ============================================================ */
    #bims-page .bims-testimonials {
      padding: 88px 0;
      background: var(--bims-green-950);
      color: #fff;
      position: relative;
      overflow: hidden;
    }

    #bims-page .bims-testimonials::before {
      content: "";
      position: absolute;
      left: -8%;
      top: -10%;
      width: 460px;
      height: 460px;
      border-radius: 50%;
      background: radial-gradient(circle, rgba(214, 169, 74, 0.10), transparent 70%);
    }

    #bims-page .bims-testimonials .bims-section-head h2 {
      color: #fff;
    }

    #bims-page .bims-testimonials .bims-section-head p {
      color: rgba(255, 255, 255, 0.62);
    }

    #bims-page .bims-testimonials .bims-eyebrow {
      color: var(--bims-gold);
    }

    #bims-page .bims-t-track-wrap {
      position: relative;
      z-index: 1;
    }

    #bims-page .bims-t-track {
      display: flex;
      gap: 22px;
      overflow: hidden;
      scroll-snap-type: x mandatory;
    }

    #bims-page .bims-t-card {
      scroll-snap-align: start;
      flex: 0 0 min(340px, 84vw);
      background: rgba(255, 255, 255, 0.06);
      border: 1px solid rgba(255, 255, 255, 0.1);
      border-radius: 14px;
      padding: 26px;
    }

    #bims-page .bims-t-stars {
      color: var(--bims-gold);
      font-size: 14px;
      margin-bottom: 14px;
      letter-spacing: 2px;
    }

    #bims-page .bims-t-quote {
      font-size: 14px;
      line-height: 1.7;
      color: rgba(255, 255, 255, 0.85);
      margin-bottom: 20px;
      min-height: 105px;
    }

    #bims-page .bims-t-person {
      display: flex;
      align-items: center;
      gap: 12px;
    }

    #bims-page .bims-t-avatar {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      background: var(--bims-green-700);
      color: var(--bims-gold);
      display: flex;
      align-items: center;
      justify-content: center;
      font-family: var(--bims-font-display);
      font-weight: 700;
      font-size: 13px;
      flex-shrink: 0;
    }

    #bims-page .bims-t-name {
      font-weight: 700;
      font-size: 13.5px;
    }

    #bims-page .bims-t-source {
      font-size: 11.5px;
      color: rgba(255, 255, 255, 0.55);
    }

    #bims-page .bims-t-controls {
      display: flex;
      justify-content: center;
      gap: 12px;
      margin-top: 28px;
      position: relative;
      z-index: 1;
    }

    #bims-page .bims-t-controls button {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      background: rgba(255, 255, 255, 0.1);
      color: #fff;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: background .2s ease;
    }

    #bims-page .bims-t-controls button:hover {
      background: var(--bims-green-600);
    }

    /* ============================================================
   STATS
   ============================================================ */
    #bims-page .bims-stats {
      padding: 60px 0;
      background: var(--bims-green-tint);
    }

    #bims-page .bims-stats-grid {
      display: grid;
      grid-template-columns: repeat(5, 1fr);
      gap: 20px;
      text-align: center;
    }

    #bims-page .bims-stat-num {
      font-family: var(--bims-font-display);
      font-weight: 800;
      font-size: clamp(28px, 3.4vw, 40px);
      color: var(--bims-green-800);
    }

    #bims-page .bims-stat-label {
      font-size: 13px;
      font-weight: 600;
      color: var(--bims-ink-soft);
      margin-top: 6px;
    }

    @media (max-width:860px) {
      #bims-page .bims-stats-grid {
        grid-template-columns: repeat(2, 1fr);
        row-gap: 28px;
      }
    }

    /* ============================================================
   EVENTS GALLERY
   ============================================================ */
    #bims-page .bims-gallery {
      padding: 88px 0;
      background: #fff;
    }

    #bims-page .bims-gallery-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 16px;
    }

    #bims-page .bims-gallery-card {
      position: relative;
      border-radius: 12px;
      overflow: hidden;
      aspect-ratio: 4/3;
      box-shadow: var(--bims-shadow-s);
    }

    #bims-page .bims-gallery-card img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform .5s ease;
    }

    #bims-page .bims-gallery-card:hover img {
      transform: scale(1.08);
    }

    #bims-page .bims-gallery-card::after {
      content: "";
      position: absolute;
      inset: 0;
      background: linear-gradient(180deg, rgba(7, 40, 29, 0) 45%, rgba(7, 40, 29, 0.85) 100%);
    }

    #bims-page .bims-gallery-num {
      position: absolute;
      top: 12px;
      left: 12px;
      z-index: 1;
      color: var(--bims-gold);
      font-family: var(--bims-font-display);
      font-weight: 800;
      font-size: 13px;
    }

    #bims-page .bims-gallery-caption {
      position: absolute;
      left: 14px;
      right: 14px;
      bottom: 12px;
      z-index: 1;
      color: #fff;
      font-size: 12.5px;
      font-weight: 700;
      line-height: 1.35;
    }

    #bims-page .bims-gallery-more {
      text-align: center;
      margin-top: 32px;
    }

    @media (max-width:980px) {
      #bims-page .bims-gallery-grid {
        grid-template-columns: repeat(2, 1fr);
      }
    }

    @media (max-width:480px) {
      #bims-page .bims-gallery-grid {
        grid-template-columns: 1fr;
        max-width: 340px;
        margin: 0 auto;
      }
    }

    /* ============================================================
   JOIN US CTA
   ============================================================ */
    #bims-page .bims-joinus {
      position: relative;
      padding: 120px 0;
      text-align: center;
      overflow: hidden;
      background-image: linear-gradient(120deg, rgba(7, 40, 29, 0.92), rgba(20, 83, 45, 0.82)), url('https://bims.edu.pk/public/uploads/slider/homepage-hero-01-campus-wide-optimized.jpg');
      background-size: cover;
      background-position: center;
      background-attachment: fixed;
    }

    @media (max-width:900px) {
      #bims-page .bims-joinus {
        background-attachment: scroll;
      }
    }

    #bims-page .bims-joinus h2 {
      font-family: var(--bims-font-display);
      font-weight: 800;
      color: #fff;
      font-size: clamp(28px, 4.2vw, 46px);
      margin-bottom: 16px;
    }

    #bims-page .bims-joinus p {
      color: rgba(255, 255, 255, 0.75);
      max-width: 44ch;
      margin: 0 auto 32px;
      font-size: 15.5px;
      line-height: 1.6;
    }

    /* ============================================================
   LOCATION
   ============================================================ */
    #bims-page .bims-location {
      padding: 88px 0;
      background: var(--bims-paper);
    }

    #bims-page .bims-location-grid {
      display: grid;
      grid-template-columns: 0.85fr 1.15fr;
      gap: 32px;
      align-items: stretch;
    }

    #bims-page .bims-location-info {
      background: #fff;
      border-radius: 14px;
      padding: 36px 30px;
      box-shadow: var(--bims-shadow-s);
    }

    #bims-page .bims-location-info h3 {
      font-family: var(--bims-font-display);
      font-size: 20px;
      font-weight: 700;
      color: var(--bims-green-900);
      margin-bottom: 14px;
    }

    #bims-page .bims-location-info p {
      font-size: 14.5px;
      color: var(--bims-ink-soft);
      line-height: 1.7;
      margin-bottom: 20px;
    }

    #bims-page .bims-location-list {
      display: flex;
      flex-direction: column;
      gap: 14px;
    }

    #bims-page .bims-location-item {
      display: flex;
      gap: 12px;
      align-items: flex-start;
      font-size: 13.8px;
      color: var(--bims-ink);
      line-height: 1.55;
    }

    #bims-page .bims-location-item svg {
      color: var(--bims-green-600);
      flex-shrink: 0;
      margin-top: 2px;
    }

    #bims-page .bims-map-embed {
      border-radius: 14px;
      overflow: hidden;
      box-shadow: var(--bims-shadow-s);
      min-height: 320px;
    }

    #bims-page .bims-map-embed iframe {
      width: 100%;
      height: 100%;
      min-height: 320px;
      border: 0;
      display: block;
    }

    @media (max-width:900px) {
      #bims-page .bims-location-grid {
        grid-template-columns: 1fr;
      }
    }

    /* ============================================================
   CONTACT
   ============================================================ */
    #bims-page .bims-contact {
      padding: 88px 0;
      background: #fff;
    }

    #bims-page .bims-contact-grid {
      display: grid;
      grid-template-columns: 0.85fr 1.15fr;
      gap: 40px;
    }

    #bims-page .bims-contact-info {
      background: var(--bims-green-950);
      color: #fff;
      border-radius: 16px;
      padding: 38px 32px;
    }

    #bims-page .bims-contact-info h3 {
      font-family: var(--bims-font-display);
      font-size: 19px;
      font-weight: 700;
      margin-bottom: 16px;
    }

    #bims-page .bims-contact-info p {
      font-size: 13.5px;
      color: rgba(255, 255, 255, 0.65);
      line-height: 1.65;
      margin-bottom: 24px;
    }

    #bims-page .bims-contact-list {
      display: flex;
      flex-direction: column;
      gap: 16px;
    }

    #bims-page .bims-contact-list li {
      display: flex;
      gap: 12px;
      align-items: flex-start;
      font-size: 13.5px;
      line-height: 1.5;
    }

    #bims-page .bims-contact-list svg {
      color: var(--bims-gold);
      flex-shrink: 0;
      margin-top: 2px;
    }

    #bims-page .bims-contact-list a:hover {
      color: var(--bims-gold);
    }

    #bims-page .bims-form-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 16px;
    }

    #bims-page .bims-field {
      display: flex;
      flex-direction: column;
      gap: 6px;
    }

    #bims-page .bims-field.bims-full {
      grid-column: 1/-1;
    }

    #bims-page .bims-field label {
      font-size: 13px;
      font-weight: 700;
      color: var(--bims-green-900);
    }

    #bims-page .bims-field input,
    #bims-page .bims-field textarea {
      border: 1.5px solid var(--bims-paper-dim);
      border-radius: 8px;
      padding: 12px 14px;
      font-family: inherit;
      font-size: 14px;
      background: var(--bims-paper);
      color: var(--bims-ink);
      width: 100%;
    }

    #bims-page .bims-field input:focus,
    #bims-page .bims-field textarea:focus {
      outline: none;
      border-color: var(--bims-green-600);
      background: #fff;
    }

    #bims-page .bims-field textarea {
      resize: vertical;
      min-height: 110px;
    }

    #bims-page .bims-field.bims-error input,
    #bims-page .bims-field.bims-error textarea {
      border-color: #C1443C;
      background: #FDF3F2;
    }

    #bims-page .bims-field-error {
      font-size: 12px;
      color: #C1443C;
      min-height: 14px;
      display: none;
    }

    #bims-page .bims-field.bims-error .bims-field-error {
      display: block;
    }

    #bims-page .bims-captcha-note {
      grid-column: 1/-1;
      font-size: 12.5px;
      color: var(--bims-ink-soft);
      background: var(--bims-paper);
      border: 1px dashed var(--bims-paper-dim);
      border-radius: 8px;
      padding: 12px 14px;
    }

    #bims-page .bims-form-success {
      display: none;
      text-align: center;
      padding: 30px 10px;
    }

    #bims-page .bims-form-success.bims-show {
      display: block;
    }

    #bims-page .bims-form-success .bims-check {
      width: 56px;
      height: 56px;
      border-radius: 50%;
      background: var(--bims-green-tint);
      color: var(--bims-green-700);
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto 16px;
    }

    #bims-page .bims-form-success h3 {
      font-family: var(--bims-font-display);
      font-size: 20px;
      color: var(--bims-green-900);
      margin-bottom: 8px;
    }

    #bims-page .bims-form-success p {
      font-size: 13.5px;
      color: var(--bims-ink-soft);
    }

    #bims-page #bims-contact-form.bims-hide {
      display: none;
    }

    @media (max-width:900px) {
      #bims-page .bims-contact-grid {
        grid-template-columns: 1fr;
      }
    }

    @media (max-width:480px) {
      #bims-page .bims-form-grid {
        grid-template-columns: 1fr;
      }
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

    #bims-page .bims-social {
      display: flex;
      gap: 10px;
    }

    #bims-page .bims-social a {
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

    #bims-page .bims-social a:hover {
      background: var(--bims-green-600);
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

    #bims-page .bims-reveal {
      opacity: 0;
      transform: translateY(20px);
      transition: opacity .6s ease, transform .6s ease;
    }

    #bims-page .bims-reveal.bims-in {
      opacity: 1;
      transform: translateY(0);
    }

    /* ============================================================
   ADMISSION INQUIRY MODAL
   ============================================================ */
    #bims-page .bims-modal-overlay {
      position: fixed;
      inset: 0;
      z-index: 2000;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 20px;
      background: rgba(7, 40, 29, 0.6);
      backdrop-filter: blur(4px);
      opacity: 0;
      visibility: hidden;
      transition: opacity .25s ease, visibility .25s ease;
    }

    #bims-page .bims-modal-overlay.bims-modal-open {
      opacity: 1;
      visibility: visible;
    }

    #bims-page .bims-modal-panel {
      position: relative;
      width: 100%;
      max-width: 560px;
      max-height: 90vh;
      overflow-y: auto;
      background: #fff;
      border-radius: 16px;
      box-shadow: var(--bims-shadow-l);
      padding: clamp(26px, 4vw, 40px);
      transform: translateY(16px);
      transition: transform .25s ease;
    }

    #bims-page .bims-modal-overlay.bims-modal-open .bims-modal-panel {
      transform: translateY(0);
    }

    #bims-page .bims-modal-close {
      position: absolute;
      top: 16px;
      right: 16px;
      width: 36px;
      height: 36px;
      border-radius: 50%;
      background: var(--bims-paper);
      color: var(--bims-green-900);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 20px;
      line-height: 1;
      transition: background .2s ease;
    }

    #bims-page .bims-modal-close:hover {
      background: var(--bims-paper-dim);
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

    #bims-page .bims-modal-sub {
      margin-top: 8px;
      font-size: 13.5px;
      color: var(--bims-ink-soft);
      line-height: 1.55;
    }

    #bims-page .bims-modal-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 14px 16px;
      margin-bottom: 18px;
    }

    #bims-page .bims-modal-grid .bims-field.bims-full {
      grid-column: 1/-1;
    }

    #bims-page .bims-modal-note {
      font-size: 12px;
      color: var(--bims-ink-soft);
      margin-top: 14px;
      text-align: center;
    }

    @media (max-width:480px) {
      #bims-page .bims-modal-grid {
        grid-template-columns: 1fr;
      }
    }

    /* ============================================================
   PROGRAM/DEPARTMENT MULTI-STEP MODAL
   (Fee Structure → Application Form → Confirmation, submitted via email)
   ============================================================ */
    #bims-page .bims-dept-overlay {
      position: fixed;
      inset: 0;
      z-index: 2100;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 20px;
      background: rgba(7, 40, 29, 0.62);
      backdrop-filter: blur(4px);
      opacity: 0;
      visibility: hidden;
      transition: opacity .25s ease, visibility .25s ease;
    }

    #bims-page .bims-dept-overlay.bims-dept-open {
      opacity: 1;
      visibility: visible;
    }

    #bims-page .bims-dept-panel {
      position: relative;
      width: 100%;
      max-width: 600px;
      max-height: 90vh;
      overflow-y: auto;
      background: #fff;
      border-radius: 16px;
      box-shadow: var(--bims-shadow-l);
      padding: clamp(26px, 4vw, 40px);
      transform: translateY(16px);
      transition: transform .25s ease;
    }

    #bims-page .bims-dept-overlay.bims-dept-open .bims-dept-panel {
      transform: translateY(0);
    }

    #bims-page .bims-dept-close {
      position: absolute;
      top: 16px;
      right: 16px;
      width: 36px;
      height: 36px;
      border-radius: 50%;
      background: var(--bims-paper);
      color: var(--bims-green-900);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 20px;
      line-height: 1;
      transition: background .2s ease;
      z-index: 2;
    }

    #bims-page .bims-dept-close:hover {
      background: var(--bims-paper-dim);
    }

    #bims-page .bims-dept-steps {
      display: flex;
      align-items: center;
      gap: 8px;
      margin-bottom: 22px;
      padding-right: 30px;
    }

    #bims-page .bims-dept-step-dot {
      display: flex;
      align-items: center;
      gap: 8px;
      font-size: 11px;
      font-weight: 600;
      color: var(--bims-ink-soft);
    }

    #bims-page .bims-dept-step-dot .bims-num {
      width: 24px;
      height: 24px;
      border-radius: 50%;
      background: var(--bims-paper-dim);
      color: var(--bims-ink-soft);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 11px;
      font-weight: 700;
      transition: background .2s ease, color .2s ease;
    }

    #bims-page .bims-dept-step-dot.bims-dept-step-active .bims-num {
      background: var(--bims-green-600);
      color: #fff;
    }

    #bims-page .bims-dept-step-dot.bims-dept-step-done .bims-num {
      background: var(--bims-green-800);
      color: #fff;
    }

    #bims-page .bims-dept-step-line {
      flex: 1;
      height: 1px;
      background: var(--bims-paper-dim);
    }

    #bims-page .bims-dept-view {
      display: none;
    }

    #bims-page .bims-dept-view.bims-dept-view-active {
      display: block;
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

    #bims-page .bims-dept-program-tag {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      font-size: 12px;
      font-weight: 700;
      color: var(--bims-green-700);
      background: var(--bims-green-tint);
      padding: 6px 13px;
      border-radius: 999px;
      margin-bottom: 14px;
    }

    #bims-page .bims-dept-fee-note {
      font-size: 13px;
      line-height: 1.65;
      color: var(--bims-ink-soft);
      background: var(--bims-paper);
      border-left: 3px solid var(--bims-green-600);
      border-radius: 0 8px 8px 0;
      padding: 14px 16px;
      margin-bottom: 18px;
    }

    #bims-page .bims-dept-fee-table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 22px;
      border: 1px solid var(--bims-paper-dim);
      border-radius: 10px;
      overflow: hidden;
    }

    #bims-page .bims-dept-fee-table tr {
      border-bottom: 1px solid var(--bims-paper-dim);
    }

    #bims-page .bims-dept-fee-table tr:last-child {
      border-bottom: none;
    }

    #bims-page .bims-dept-fee-table td {
      padding: 12px 16px;
      font-size: 13.5px;
    }

    #bims-page .bims-dept-fee-table td:first-child {
      font-weight: 600;
      color: var(--bims-green-900);
      width: 55%;
    }

    #bims-page .bims-dept-fee-table td:last-child {
      color: var(--bims-ink-soft);
      text-align: right;
    }

    #bims-page .bims-dept-fee-actions {
      display: flex;
      gap: 12px;
      flex-wrap: wrap;
    }

    #bims-page .bims-dept-form-actions {
      display: flex;
      gap: 12px;
      margin-top: 6px;
    }

    #bims-page .bims-dept-form-actions .bims-btn {
      flex: 1;
      justify-content: center;
    }

    #bims-page .bims-dept-confirm {
      text-align: center;
      padding: 10px 0 4px;
    }

    #bims-page .bims-dept-confirm .bims-check {
      width: 60px;
      height: 60px;
      border-radius: 50%;
      background: var(--bims-green-tint);
      color: var(--bims-green-700);
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto 18px;
    }

    #bims-page .bims-dept-confirm h3 {
      font-family: var(--bims-font-display);
      font-size: 22px;
      font-weight: 700;
      color: var(--bims-green-900);
      margin-bottom: 10px;
    }

    #bims-page .bims-dept-confirm p {
      font-size: 13.5px;
      color: var(--bims-ink-soft);
      line-height: 1.65;
      max-width: 42ch;
      margin: 0 auto 18px;
    }

    #bims-page .bims-dept-confirm-summary {
      background: var(--bims-paper);
      border-radius: 10px;
      padding: 16px 18px;
      text-align: left;
      margin-bottom: 20px;
      font-size: 13px;
      line-height: 1.9;
    }

    #bims-page .bims-dept-confirm-summary strong {
      color: var(--bims-green-900);
    }

    #bims-page .bims-dept-fallback {
      font-size: 12px;
      color: var(--bims-ink-soft);
      margin-top: 4px;
    }

    /* ============================================================
   NOTIFICATION BAR
   ============================================================ */
    #bims-page .bims-notify-bar {
      background: var(--bims-gold);
      color: var(--bims-green-950);
    }

    #bims-page .bims-notify-inner {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 14px;
      flex-wrap: wrap;
      padding: 9px 0;
    }

    #bims-page .bims-notify-items {
      display: flex;
      flex-wrap: wrap;
      gap: 18px;
    }

    #bims-page .bims-notify-item {
      display: inline-flex;
      align-items: center;
      gap: 7px;
      font-size: 12.5px;
      font-weight: 700;
    }

    #bims-page .bims-notify-item strong {
      font-weight: 800;
    }

    #bims-page .bims-notify-apply {
      flex-shrink: 0;
      background: var(--bims-green-950);
      color: #fff;
      font-size: 12px;
      font-weight: 700;
      padding: 8px 18px;
      border-radius: 999px;
      transition: background .2s ease, transform .2s ease;
    }

    #bims-page .bims-notify-apply:hover {
      background: var(--bims-green-800);
      transform: translateY(-1px);
    }

    @media (max-width:640px) {
      #bims-page .bims-notify-inner {
        justify-content: center;
        text-align: center;
      }

      #bims-page .bims-notify-items {
        justify-content: center;
        gap: 10px 16px;
      }
    }

    /* ============================================================
   QUICK APPLY MODAL (single-step, submitted via email)
   ============================================================ */
    #bims-page .bims-qa-overlay {
      position: fixed;
      inset: 0;
      z-index: 2200;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 20px;
      background: rgba(7, 40, 29, 0.65);
      backdrop-filter: blur(4px);
      opacity: 0;
      visibility: hidden;
      transition: opacity .25s ease, visibility .25s ease;
    }

    #bims-page .bims-qa-overlay.bims-qa-open {
      opacity: 1;
      visibility: visible;
    }

    #bims-page .bims-qa-panel {
      position: relative;
      width: 100%;
      max-width: 540px;
      max-height: 90vh;
      overflow-y: auto;
      background: #fff;
      border-radius: 16px;
      box-shadow: var(--bims-shadow-l);
      padding: clamp(26px, 4vw, 40px);
      transform: translateY(16px);
      transition: transform .25s ease;
    }

    #bims-page .bims-qa-overlay.bims-qa-open .bims-qa-panel {
      transform: translateY(0);
    }

    #bims-page .bims-qa-close {
      position: absolute;
      top: 16px;
      right: 16px;
      width: 36px;
      height: 36px;
      border-radius: 50%;
      background: var(--bims-paper);
      color: var(--bims-green-900);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 20px;
      line-height: 1;
      transition: background .2s ease;
      z-index: 2;
    }

    #bims-page .bims-qa-close:hover {
      background: var(--bims-paper-dim);
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

    #bims-page .bims-qa-view {
      display: none;
    }

    #bims-page .bims-qa-view.bims-qa-view-active {
      display: block;
    }

    #bims-page .bims-qa-confirm {
      text-align: center;
      padding: 10px 0 4px;
    }

    #bims-page .bims-qa-confirm .bims-check {
      width: 56px;
      height: 56px;
      border-radius: 50%;
      background: var(--bims-green-tint);
      color: var(--bims-green-700);
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto 18px;
    }

    #bims-page .bims-qa-confirm h3 {
      font-family: var(--bims-font-display);
      font-size: 21px;
      font-weight: 700;
      color: var(--bims-green-900);
      margin-bottom: 10px;
    }

    #bims-page .bims-qa-confirm p {
      font-size: 13.5px;
      color: var(--bims-ink-soft);
      line-height: 1.65;
      max-width: 40ch;
      margin: 0 auto 6px;
    }

    #bims-page .bims-qa-confirm-summary {
      background: var(--bims-paper);
      border-radius: 10px;
      padding: 16px 18px;
      text-align: left;
      margin: 16px 0;
      font-size: 13px;
      line-height: 1.85;
    }

    #bims-page .bims-qa-confirm-summary strong {
      color: var(--bims-green-900);
    }

    /* ---- Step indicator ---- */
    #bims-page .bims-qa-steps {
      display: flex;
      align-items: center;
      gap: 6px;
      margin-bottom: 22px;
      padding-right: 30px;
      flex-wrap: wrap;
    }

    #bims-page .bims-qa-step-dot {
      display: flex;
      align-items: center;
      gap: 6px;
      font-size: 10.5px;
      font-weight: 600;
      color: var(--bims-ink-soft);
    }

    #bims-page .bims-qa-num {
      width: 22px;
      height: 22px;
      border-radius: 50%;
      background: var(--bims-paper-dim);
      color: var(--bims-ink-soft);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 10.5px;
      font-weight: 700;
      transition: background .2s ease, color .2s ease;
    }

    #bims-page .bims-qa-step-dot.bims-qa-step-active .bims-qa-num {
      background: var(--bims-green-600);
      color: #fff;
    }

    #bims-page .bims-qa-step-dot.bims-qa-step-done .bims-qa-num {
      background: var(--bims-green-800);
      color: #fff;
    }

    #bims-page .bims-qa-step-line {
      width: 14px;
      height: 1px;
      background: var(--bims-paper-dim);
    }

    /* ---- Step 1: program list ---- */
    #bims-page .bims-qa-program-list {
      display: flex;
      flex-direction: column;
      gap: 9px;
      max-height: 340px;
      overflow-y: auto;
      margin-bottom: 20px;
      padding-right: 2px;
    }

    #bims-page .bims-qa-program-opt {
      display: flex;
      align-items: center;
      gap: 12px;
      padding: 13px 16px;
      border: 1.5px solid var(--bims-paper-dim);
      border-radius: 10px;
      cursor: pointer;
      transition: border-color .2s ease, background .2s ease;
    }

    #bims-page .bims-qa-program-opt:hover {
      border-color: var(--bims-green-600);
    }

    #bims-page .bims-qa-program-opt.bims-qa-selected {
      border-color: var(--bims-green-600);
      background: var(--bims-green-tint);
    }

    #bims-page .bims-qa-program-opt input {
      width: 17px;
      height: 17px;
      accent-color: var(--bims-green-600);
      flex-shrink: 0;
    }

    #bims-page .bims-qa-program-opt span {
      font-size: 13.5px;
      font-weight: 600;
      color: var(--bims-green-900);
    }

    /* ---- Step 2: fee options ---- */
    #bims-page .bims-qa-fee-note {
      font-size: 12.5px;
      line-height: 1.6;
      color: var(--bims-ink-soft);
      background: var(--bims-paper);
      border-left: 3px solid var(--bims-green-600);
      border-radius: 0 8px 8px 0;
      padding: 12px 14px;
      margin-bottom: 18px;
    }

    #bims-page .bims-qa-fee-options {
      display: flex;
      flex-direction: column;
      gap: 10px;
      margin-bottom: 22px;
    }

    #bims-page .bims-qa-fee-opt {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 12px;
      padding: 14px 16px;
      border: 1.5px solid var(--bims-paper-dim);
      border-radius: 10px;
      cursor: pointer;
      transition: border-color .2s ease, background .2s ease;
    }

    #bims-page .bims-qa-fee-opt:hover {
      border-color: var(--bims-green-600);
    }

    #bims-page .bims-qa-fee-opt.bims-qa-selected {
      border-color: var(--bims-green-600);
      background: var(--bims-green-tint);
    }

    #bims-page .bims-qa-fee-opt-left {
      display: flex;
      align-items: center;
      gap: 12px;
    }

    #bims-page .bims-qa-fee-opt input {
      width: 17px;
      height: 17px;
      accent-color: var(--bims-green-600);
      flex-shrink: 0;
    }

    #bims-page .bims-qa-fee-opt-title {
      font-size: 13.5px;
      font-weight: 700;
      color: var(--bims-green-900);
    }

    #bims-page .bims-qa-fee-opt-amount {
      font-size: 11px;
      color: var(--bims-ink-soft);
      text-align: right;
    }

    /* ---- Form action row (shared by steps 2 & 3) ---- */
    #bims-page .bims-qa-form-actions {
      display: flex;
      gap: 12px;
      margin-top: 6px;
    }

    #bims-page .bims-qa-form-actions .bims-btn {
      flex: 1;
      justify-content: center;
    }

    #bims-page .bims-qa-view [disabled] {
      opacity: 0.55;
      cursor: not-allowed;
    }

    /* ============================================================
   WELCOME / ADMISSION ANNOUNCEMENT POPUP (auto-shows once per session)
   ============================================================ */
    #bims-page .bims-welcome-overlay {
      position: fixed;
      inset: 0;
      z-index: 2150;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 20px;
      background: rgba(7, 40, 29, 0.65);
      backdrop-filter: blur(4px);
      opacity: 0;
      visibility: hidden;
      transition: opacity .3s ease, visibility .3s ease;
    }

    #bims-page .bims-welcome-overlay.bims-welcome-open {
      opacity: 1;
      visibility: visible;
    }

    #bims-page .bims-welcome-panel {
      position: relative;
      width: 100%;
      max-width: 440px;
      background: #fff;
      border-radius: 16px;
      box-shadow: var(--bims-shadow-l);
      overflow: hidden;
      text-align: center;
      transform: scale(0.96);
      transition: transform .3s ease;
    }

    #bims-page .bims-welcome-overlay.bims-welcome-open .bims-welcome-panel {
      transform: scale(1);
    }

    #bims-page .bims-welcome-image {
      width: 100%;
      height: 150px;
      overflow: hidden;
    }

    #bims-page .bims-welcome-image img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
    }

    #bims-page .bims-welcome-body {
      padding: 26px 30px 30px;
    }

    #bims-page .bims-welcome-close {
      position: absolute;
      top: 14px;
      right: 14px;
      width: 32px;
      height: 32px;
      border-radius: 50%;
      background: var(--bims-paper);
      color: var(--bims-green-900);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 18px;
      z-index: 2;
    }

    #bims-page .bims-welcome-close:hover {
      background: var(--bims-paper-dim);
    }

    #bims-page .bims-welcome-icon {
      width: 52px;
      height: 52px;
      border-radius: 50%;
      margin: 0 auto 16px;
      background: var(--bims-green-tint);
      color: var(--bims-green-700);
      display: flex;
      align-items: center;
      justify-content: center;
    }

    #bims-page .bims-welcome-panel h3 {
      font-family: var(--bims-font-display);
      font-size: 20px;
      font-weight: 700;
      color: var(--bims-green-900);
      margin-bottom: 8px;
    }

    #bims-page .bims-welcome-panel>.bims-welcome-body>p {
      font-size: 13.5px;
      color: var(--bims-ink-soft);
      line-height: 1.55;
      margin-bottom: 20px;
    }

    #bims-page .bims-welcome-dates {
      background: var(--bims-paper);
      border-radius: 10px;
      padding: 16px 18px;
      margin-bottom: 22px;
      text-align: left;
    }

    #bims-page .bims-welcome-date-row {
      display: flex;
      align-items: center;
      gap: 10px;
      font-size: 13.5px;
      color: var(--bims-green-900);
      font-weight: 600;
    }

    #bims-page .bims-welcome-date-row+.bims-welcome-date-row {
      margin-top: 10px;
    }

    #bims-page .bims-welcome-date-row svg {
      color: var(--bims-green-700);
      flex-shrink: 0;
    }
  </style>
  <?php wp_head(); ?>
</head>

<body>
  <div id="bims-page">

    <!-- ============================================================
     NOTIFICATION BAR (admission dates + quick Apply Now)
     ============================================================ -->
    <div class="bims-notify-bar" id="bims-notify-bar">
      <div class="bims-container bims-notify-inner">
        <div class="bims-notify-items">
          <span class="bims-notify-item"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <rect x="3" y="5" width="18" height="16" rx="2" />
              <path d="M8 3v4M16 3v4M3 10h18" />
            </svg> Last Date to Apply: <strong id="bims-notify-lastdate"></strong></span>
          <span class="bims-notify-item"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M9 11l3 3L22 4" />
              <path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11" />
            </svg> Entry Test: <strong id="bims-notify-entrytest"></strong></span>
        </div>
        <button type="button" class="bims-notify-apply bims-quickapply-trigger">Apply Now</button>
      </div>
    </div>

    <!-- ============================================================
     HEADER
     ============================================================ -->
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
              <a href="/bims-fee-structure">Fee Structure</a>
              <a href="/bims-merit-list">Merit List</a>
              <a href="/bims-fee-chalan">Fee Chalan</a>
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
            <a href="/bims-fee-structure">Fee Structure</a>
            <a href="/bims-merit-list">Merit List</a>
            <a href="/bims-fee-chalan">Fee Chalan</a>
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

    <!-- ============================================================
     HERO
     ============================================================ -->
    <section class="bims-hero">
      <div class="bims-hero-media">
        <!-- TODO: replace with official BIMS photography — dummy stock placeholder for now -->
        <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&w=1920&q=75" alt="Placeholder campus image — replace with official BIMS photography">
      </div>
      <div class="bims-container bims-hero-content">
        <p class="bims-hero-kicker">Barani Institute of Management &amp; Sciences</p>
        <h1>Welcome to BIMS</h1>
        <p class="bims-hero-sub">An HEC-recognized, PMAS-Arid affiliated institute in Rawalpindi, offering degree programs across business, computing, sciences and allied health sciences.</p>
        <div class="bims-hero-actions">
          <a href="#" class="bims-btn bims-btn-solid bims-admission-trigger">Admission Now</a>
          <a href="#bims-programs" class="bims-btn bims-btn-outline" data-bims-scroll="#bims-programs">Explore Programs</a>
        </div>
      </div>
    </section>

    <div class="bims-announcement">
      <div class="bims-container">
        <span class="bims-announcement-badge">Notice</span>
        <p>Some classes are temporarily moving online per recent scheduling guidance — students should check the BMS portal for the latest timings. <em>(Live announcement content — sync with the BIMS CMS feed.)</em></p>
      </div>
    </div>

    <!-- ============================================================
     WHY CHOOSE BIMS / QUICK LINKS
     ============================================================ -->
    <section class="bims-why" id="bims-why">
      <div class="bims-container">
        <div class="bims-section-head bims-center bims-reveal">
          <p class="bims-eyebrow">Why Choose BIMS</p>
          <h2 class="bims-section-title">A supportive, career-focused environment</h2>
          <p class="bims-section-sub" style="margin-left:auto; margin-right:auto;">Affordable higher education, a recognized academic pathway, practical learning and a student-friendly campus for learners building their future in Rawalpindi and beyond.</p>
        </div>

        <div class="bims-why-grid bims-reveal">
          <div class="bims-why-card">
            <div class="bims-why-icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                <path d="M12 2l8 4v6c0 5-3.4 8.7-8 10-4.6-1.3-8-5-8-10V6l8-4z" />
                <path d="M9 12l2 2 4-4" />
              </svg></div>
            <h3>HEC Recognized</h3>
            <p>Study at a recognized institute with academic standards behind every degree program.</p>
          </div>
          <div class="bims-why-card">
            <div class="bims-why-icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                <path d="M4 19.5A2.5 2.5 0 016.5 17H20" />
                <path d="M6.5 2H20v20H6.5A2.5 2.5 0 014 19.5v-15A2.5 2.5 0 016.5 2z" />
              </svg></div>
            <h3>PMAS Arid Affiliated</h3>
            <p>A structured academic linkage with PMAS Arid Agriculture University for higher education pathways.</p>
          </div>
          <div class="bims-why-card">
            <div class="bims-why-icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                <path d="M3 21l6-6M13 11l8-8M3 12l9 9 9-9-9-9-9 9z" />
              </svg></div>
            <h3>Career-Oriented Programs</h3>
            <p>Programs built to connect classroom learning with practical skills and future employability.</p>
          </div>
          <div class="bims-why-card">
            <div class="bims-why-icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                <path d="M17 21v-2a4 4 0 00-4-4H6a4 4 0 00-4 4v2" />
                <circle cx="9" cy="7" r="4" />
                <path d="M23 21v-2a4 4 0 00-3-3.87" />
                <path d="M16 3.13a4 4 0 010 7.75" />
              </svg></div>
            <h3>Student Support</h3>
            <p>Scholarship guidance, fee support and admissions help throughout the student journey.</p>
          </div>
        </div>

        <div class="bims-quicklinks bims-reveal">
          <a href="#">View Fee Structure</a>
          <a href="#">Scholarships</a>
          <a href="#bims-contact" data-bims-scroll="#bims-contact">Contact Us</a>
          <a href="#">Student Portal</a>
        </div>
      </div>
    </section>

    <!-- ============================================================
     PROGRAMS
     ============================================================ -->
    <section class="bims-programs" id="bims-programs">
      <div class="bims-container">
        <div class="bims-section-head bims-reveal">
          <p class="bims-eyebrow">Degree Programs</p>
          <h2 class="bims-section-title">Programs Offered at BIMS Rawalpindi</h2>
          <p class="bims-section-sub">Degree programs across business, computing, sciences and allied health sciences — including BSCS, BBA, BS MLT and HND.</p>
        </div>

        <div class="bims-programs-grid bims-reveal">
          <button type="button" class="bims-program-card bims-dept-trigger">
            <p class="bims-dept">Business &amp; Management</p>
            <h4>BBA (Hons) 4 Years</h4>
          </button>
          <button type="button" class="bims-program-card bims-dept-trigger">
            <p class="bims-dept">Business &amp; Management</p>
            <h4>BBA 2 Years</h4>
          </button>
          <button type="button" class="bims-program-card bims-dept-trigger">
            <p class="bims-dept">Business &amp; Management</p>
            <h4>BS Accounts &amp; Finance</h4>
          </button>
          <button type="button" class="bims-program-card bims-dept-trigger">
            <p class="bims-dept">Business &amp; Management</p>
            <h4>BS Economics</h4>
          </button>
          <button type="button" class="bims-program-card bims-dept-trigger">
            <p class="bims-dept">Computing &amp; IT</p>
            <h4>BSCS (General Computing)</h4>
          </button>
          <button type="button" class="bims-program-card bims-dept-trigger">
            <p class="bims-dept">Computing &amp; IT</p>
            <h4>BSCS (Software Engineering)</h4>
          </button>
          <button type="button" class="bims-program-card bims-dept-trigger">
            <p class="bims-dept">Computing &amp; IT</p>
            <h4>BSCS (Artificial Intelligence)</h4>
          </button>
          <button type="button" class="bims-program-card bims-dept-trigger">
            <p class="bims-dept">Sciences</p>
            <h4>BS Environmental Sciences</h4>
          </button>
          <button type="button" class="bims-program-card bims-dept-trigger">
            <p class="bims-dept">Sciences</p>
            <h4>BS Mathematics</h4>
          </button>
          <button type="button" class="bims-program-card bims-dept-trigger">
            <p class="bims-dept">Sciences</p>
            <h4>BS Statistics</h4>
          </button>
          <button type="button" class="bims-program-card bims-dept-trigger">
            <p class="bims-dept">Allied Health Sciences</p>
            <h4>BSc. Hons HND (Human Nutrition &amp; Dietetics)</h4>
          </button>
          <button type="button" class="bims-program-card bims-dept-trigger">
            <p class="bims-dept">Allied Health Sciences</p>
            <h4>BS MLT (Medical Laboratory Technology)</h4>
          </button>
        </div>
      </div>
    </section>

    <!-- ============================================================
     DG MESSAGE
     ============================================================ -->
    <section class="bims-dg" id="dg-message">
      <div class="bims-container">
        <div class="bims-dg-grid bims-reveal">
          <div class="bims-dg-portrait-wrap">
            <!-- Sourced directly from the official BIMS asset (bims.edu.pk) -->
            <div class="bims-dg-portrait"><img src="https://bims.edu.pk/public/assets/images/dg.jpg" alt="Dr. Hafeez-ur-Rahman, Air Cdre (R), Director General BIMS"></div>
          </div>
          <div class="bims-dg-text">
            <p class="bims-eyebrow">DG Message</p>
            <h2 class="bims-section-title">A message from the Director General</h2>
            <blockquote>
              Education, in the DG's view, goes beyond textbook knowledge — it builds character, practical skill and innovative thinking so students can step into leadership roles. BIMS aims to combine that knowledge with productivity and real-world opportunity, inviting students to grow into a more prosperous future together.
            </blockquote>
            <p class="bims-dg-name">Dr. Hafeez-ur-Rahman, Air Cdre (R)</p>
            <p class="bims-dg-role">Director General, BIMS</p>
          </div>
        </div>
      </div>
    </section>

    <!-- ============================================================
     ACADEMIC / VIDEO EXPERIENCE
     ============================================================ -->
    <section class="bims-experience">
      <div class="bims-experience-grid">
        <div class="bims-experience-text bims-reveal">
          <p class="bims-eyebrow">The BIMS Experience</p>
          <h2>An academic environment built around real outcomes</h2>
          <p>From recognized degree pathways to hands-on skill-building, BIMS is structured to prepare students for both further study and the workplace.</p>
          <div class="bims-experience-features">
            <div class="bims-experience-feature">
              <span class="bims-check"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                  <path d="M5 13l4 4L19 7" />
                </svg></span>
              <span><strong>HEC Recognition</strong><span>Recognized academic standing behind every program.</span></span>
            </div>
            <div class="bims-experience-feature">
              <span class="bims-check"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                  <path d="M5 13l4 4L19 7" />
                </svg></span>
              <span><strong>Academic Excellence</strong><span>Structured curricula guided by qualified faculty.</span></span>
            </div>
            <div class="bims-experience-feature">
              <span class="bims-check"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                  <path d="M5 13l4 4L19 7" />
                </svg></span>
              <span><strong>Career Development</strong><span>Programs designed with employability in mind.</span></span>
            </div>
            <div class="bims-experience-feature">
              <span class="bims-check"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                  <path d="M5 13l4 4L19 7" />
                </svg></span>
              <span><strong>Student Support</strong><span>Admissions, fee and scholarship guidance throughout.</span></span>
            </div>
          </div>
        </div>
        <div class="bims-experience-media bims-reveal">
          <!-- Sourced directly from the official BIMS homepage asset (bims.edu.pk) -->
          <video controls preload="none" poster="https://bims.edu.pk/public/uploads/slider/homepage-hero-01-campus-wide-optimized.jpg" aria-label="Why Choose BIMS video">
            <source src="https://bims.edu.pk/public/assets/videos/why-choose-bims.mp4" type="video/mp4">
          </video>
        </div>
      </div>
    </section>

    <!-- ============================================================
     FACULTY
     ============================================================ -->
    <section class="bims-faculty" id="bims-faculty">
      <div class="bims-container">
        <div class="bims-section-head bims-center bims-reveal">
          <p class="bims-eyebrow">Our Faculty</p>
          <h2 class="bims-section-title">Best Of The Best, Our Faculty</h2>
          <p class="bims-section-sub" style="margin-left:auto; margin-right:auto;">Learn with BIMS's qualified faculty across business, computing, sciences and allied health sciences.</p>
        </div>

        <div class="bims-faculty-grid bims-reveal">
          <div class="bims-faculty-card">
            <div class="bims-faculty-avatar-wrap">
              <div class="bims-faculty-avatar" aria-hidden="true">HR</div>
            </div>
            <h4>Haroon ur Rasheed</h4>
            <p>BIMS Faculty</p>
          </div>
          <div class="bims-faculty-card">
            <div class="bims-faculty-avatar-wrap">
              <div class="bims-faculty-avatar" aria-hidden="true">AH</div>
            </div>
            <h4>Asim Hafeez</h4>
            <p>BIMS Faculty</p>
          </div>
          <div class="bims-faculty-card">
            <div class="bims-faculty-avatar-wrap">
              <div class="bims-faculty-avatar" aria-hidden="true">GL</div>
            </div>
            <h4>Dr. Ghulam Fareed Laghari</h4>
            <p>BIMS Faculty</p>
          </div>
          <div class="bims-faculty-card">
            <div class="bims-faculty-avatar-wrap">
              <div class="bims-faculty-avatar" aria-hidden="true">BS</div>
            </div>
            <h4>Dr. Bilal Saeed</h4>
            <p>BIMS Faculty</p>
          </div>
          <div class="bims-faculty-card">
            <div class="bims-faculty-avatar-wrap">
              <div class="bims-faculty-avatar" aria-hidden="true">KS</div>
            </div>
            <h4>Dr. Kamran Suhaib</h4>
            <p>BIMS Faculty</p>
          </div>
          <div class="bims-faculty-card">
            <div class="bims-faculty-avatar-wrap">
              <div class="bims-faculty-avatar" aria-hidden="true">MR</div>
            </div>
            <h4>Dr. Misbah Riaz</h4>
            <p>BIMS Faculty</p>
          </div>
          <div class="bims-faculty-card">
            <div class="bims-faculty-avatar-wrap">
              <div class="bims-faculty-avatar" aria-hidden="true">NS</div>
            </div>
            <h4>Najm us Sahar</h4>
            <p>BIMS Faculty</p>
          </div>
        </div>
        <p class="bims-faculty-note">Faculty designations weren't available in the supplied reference — swap in official titles and photographs when ready.</p>
      </div>
    </section>

    <!-- ============================================================
     NEWS & EVENTS
     ============================================================ -->
    <section class="bims-news" id="bims-news">
      <div class="bims-container">
        <div class="bims-section-head bims-reveal">
          <p class="bims-eyebrow">Latest News</p>
          <h2 class="bims-section-title">News &amp; Events</h2>
        </div>

        <div class="bims-news-grid bims-reveal">
          <a href="#" class="bims-news-card">
            <div class="bims-news-media">
              <img src="https://bims.edu.pk/public/uploads/popup/1781094345_ClassesStart.jpg" alt="Students attending an online class">
              <span class="bims-news-date"><span class="bims-day">11</span><span class="bims-mon">Mar</span></span>
            </div>
            <div class="bims-news-body">
              <p class="bims-news-cat">Announcement</p>
              <h3>Online Classes</h3>
              <p>A temporary shift to online classes was announced in line with recent government directives — students were asked to follow the BMS portal for schedule updates.</p>
              <span class="bims-read-more">Read full news <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4">
                  <path d="M5 12h14M13 6l6 6-6 6" />
                </svg></span>
            </div>
          </a>

          <div class="bims-events-empty">
            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6">
              <rect x="3" y="5" width="18" height="16" rx="2" />
              <path d="M8 3v4M16 3v4M3 10h18" />
            </svg>
            <h3>No events published yet</h3>
            <p>Upcoming events will appear here once added from the events database.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- ============================================================
     TESTIMONIALS
     ============================================================ -->
    <section class="bims-testimonials" id="bims-testimonials">
      <div class="bims-container">
        <div class="bims-section-head bims-reveal">
          <p class="bims-eyebrow">What Our Students Say</p>
          <h2 class="bims-section-title">Verified Google reviews for BIMS</h2>
        </div>

        <div class="bims-t-track-wrap bims-reveal">
          <div class="bims-t-track" id="bims-t-track">
            <div class="bims-t-card">
              <div class="bims-t-stars">★★★★★</div>
              <p class="bims-t-quote">Describes BIMS as a supportive learning environment with qualified teachers, a friendly campus and good opportunities for growth.</p>
              <div class="bims-t-person"><span class="bims-t-avatar">SN</span><span><span class="bims-t-name">Syeda Nain Zahra</span><br><span class="bims-t-source">Google Review</span></span></div>
            </div>
            <div class="bims-t-card">
              <div class="bims-t-stars">★★★★★</div>
              <p class="bims-t-quote">Highlights BIMS's digital learning push and student support, and looks forward to the new mobile app.</p>
              <div class="bims-t-person"><span class="bims-t-avatar">SN</span><span><span class="bims-t-name">Shiza Noor</span><br><span class="bims-t-source">Google Review</span></span></div>
            </div>
            <div class="bims-t-card">
              <div class="bims-t-stars">★★★★★</div>
              <p class="bims-t-quote">Praises the affordable fee structure, flexible attendance policy and a cooperative, high-quality faculty.</p>
              <div class="bims-t-person"><span class="bims-t-avatar">SA</span><span><span class="bims-t-name">Sheheryar Abdullah</span><br><span class="bims-t-source">Google Review</span></span></div>
            </div>
            <div class="bims-t-card">
              <div class="bims-t-stars">★★★★★</div>
              <p class="bims-t-quote">A 4th-semester student describes a positive experience overall, with supportive teachers and a good campus environment.</p>
              <div class="bims-t-person"><span class="bims-t-avatar">JS</span><span><span class="bims-t-name">Junaid Sarvar</span><br><span class="bims-t-source">Google Review</span></span></div>
            </div>
            <div class="bims-t-card">
              <div class="bims-t-stars">★★★★★</div>
              <p class="bims-t-quote">Satisfied with faculty and management, and appreciates the library and academic resources available to students.</p>
              <div class="bims-t-person"><span class="bims-t-avatar">ST</span><span><span class="bims-t-name">Salman Tariq</span><br><span class="bims-t-source">Google Review</span></span></div>
            </div>
            <div class="bims-t-card">
              <div class="bims-t-stars">★★★★★</div>
              <p class="bims-t-quote">Calls the experience great overall — supportive faculty, a clean campus and regular, well-run classes.</p>
              <div class="bims-t-person"><span class="bims-t-avatar">MS</span><span><span class="bims-t-name">Meerab Saleem</span><br><span class="bims-t-source">Google Review</span></span></div>
            </div>
          </div>
        </div>

        <div class="bims-t-controls">
          <button type="button" id="bims-t-prev" aria-label="Previous testimonials"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4">
              <path d="M15 18l-6-6 6-6" />
            </svg></button>
          <button type="button" id="bims-t-next" aria-label="Next testimonials"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4">
              <path d="M9 18l6-6-6-6" />
            </svg></button>
        </div>
      </div>
    </section>

    <!-- ============================================================
     STATS
     ============================================================ -->
    <section class="bims-stats" id="bims-stats">
      <div class="bims-container">
        <div class="bims-section-head bims-center bims-reveal">
          <p class="bims-eyebrow">Stats of BIMS</p>
          <h2 class="bims-section-title">Our numbers reflect the BIMS journey</h2>
        </div>

        <div class="bims-stats-grid bims-reveal">
          <div>
            <div class="bims-stat-num">—</div>
            <div class="bims-stat-label">Years</div>
          </div>
          <div>
            <div class="bims-stat-num">—</div>
            <div class="bims-stat-label">Disciplines</div>
          </div>
          <div>
            <div class="bims-stat-num">—</div>
            <div class="bims-stat-label">Subjects</div>
          </div>
          <div>
            <div class="bims-stat-num">—</div>
            <div class="bims-stat-label">Active Students</div>
          </div>
          <div>
            <div class="bims-stat-num">—</div>
            <div class="bims-stat-label">Graduates</div>
          </div>
        </div>
        <p class="bims-faculty-note">Live figures animate from the BIMS stats counter and weren't available in the supplied reference — replace the placeholders with the real numbers.</p>
      </div>
    </section>

    <!-- ============================================================
     EVENTS GALLERY
     ============================================================ -->
    <section class="bims-gallery" id="bims-events">
      <div class="bims-container">
        <div class="bims-section-head bims-reveal">
          <p class="bims-eyebrow">Events at BIMS</p>
          <h2 class="bims-section-title">Student life &amp; campus events</h2>
          <p class="bims-section-sub">At BIMS the student is continuously learning, with fun.</p>
        </div>

        <div class="bims-gallery-grid bims-reveal">
          <a href="#" class="bims-gallery-card">
            <span class="bims-gallery-num">01</span>
            <img src="https://bims.edu.pk/public/uploads/gallery/1694069028.jpg" alt="Seminar for Career Growth event at BIMS" loading="lazy">
            <span class="bims-gallery-caption">Seminar for Carrier Growth</span>
          </a>
          <a href="#" class="bims-gallery-card">
            <span class="bims-gallery-num">02</span>
            <img src="https://bims.edu.pk/public/uploads/gallery/1694068840.jpg" alt="Students Farewell event at BIMS" loading="lazy">
            <span class="bims-gallery-caption">Students Farewell</span>
          </a>
          <a href="#" class="bims-gallery-card">
            <span class="bims-gallery-num">03</span>
            <img src="https://bims.edu.pk/public/uploads/gallery/1694068714.jpg" alt="Entrepreneur event at BIMS" loading="lazy">
            <span class="bims-gallery-caption">Entrepreneur Event</span>
          </a>
          <a href="#" class="bims-gallery-card">
            <span class="bims-gallery-num">04</span>
            <img src="https://bims.edu.pk/public/uploads/gallery/1694068624.jpg" alt="Pir Chinasi student trip" loading="lazy">
            <span class="bims-gallery-caption">Pir Chinasi Trip</span>
          </a>
          <a href="#" class="bims-gallery-card">
            <span class="bims-gallery-num">05</span>
            <img src="https://bims.edu.pk/public/uploads/gallery/1694068552.jpg" alt="Mushkpuri Top student trip" loading="lazy">
            <span class="bims-gallery-caption">Mushkpuri Top</span>
          </a>
          <a href="#" class="bims-gallery-card">
            <span class="bims-gallery-num">06</span>
            <img src="https://bims.edu.pk/public/uploads/gallery/1661346092.jpg" alt="Fun Gala campus event" loading="lazy">
            <span class="bims-gallery-caption">Fun Gala</span>
          </a>
          <a href="#" class="bims-gallery-card">
            <span class="bims-gallery-num">07</span>
            <img src="https://bims.edu.pk/public/uploads/gallery/1661345578.jpg" alt="Musical night campus event" loading="lazy">
            <span class="bims-gallery-caption">Musical Night 1</span>
          </a>
          <a href="#" class="bims-gallery-card">
            <span class="bims-gallery-num">08</span>
            <img src="https://bims.edu.pk/public/uploads/gallery/1661345491.jpg" alt="Musical night campus event" loading="lazy">
            <span class="bims-gallery-caption">Musical Night</span>
          </a>
        </div>

        <div class="bims-gallery-more">
          <a href="#" class="bims-btn bims-btn-outline-green">Show More</a>
        </div>
      </div>
    </section>

    <!-- ============================================================
     JOIN US CTA
     ============================================================ -->
    <section class="bims-joinus">
      <div class="bims-container">
        <h2>Come Join Us</h2>
        <p>Take the next step toward a recognized degree and a career-focused campus community at BIMS Rawalpindi.</p>
        <a href="#" class="bims-btn bims-btn-solid bims-admission-trigger">Admission Now</a>
      </div>
    </section>

    <!-- ============================================================
     LOCATION
     ============================================================ -->
    <section class="bims-location">
      <div class="bims-container">
        <div class="bims-section-head bims-reveal">
          <p class="bims-eyebrow">Location</p>
          <h2 class="bims-section-title">In the heart of Rawalpindi</h2>
        </div>

        <div class="bims-location-grid bims-reveal">
          <div class="bims-location-info">
            <h3>Find Us</h3>
            <p>BIMS Campus, Main Murree Road, between 5th and 6th Road, Rawalpindi.</p>
            <div class="bims-location-list">
              <div class="bims-location-item">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.362 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.338 1.85.573 2.81.7A2 2 0 0122 16.92z" />
                </svg>
                Main Office: +92 51-4853701-2
              </div>
              <div class="bims-location-item">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <path d="M17.6 6.32A8.86 8.86 0 0012.05 4a8.94 8.94 0 00-7.74 13.4L3 21l3.7-1.28a8.9 8.9 0 004.34 1.12h.01A8.94 8.94 0 0021 12.32a8.87 8.87 0 00-3.4-6z" />
                </svg>
                Admissions/WhatsApp: 0333-333-2467
              </div>
              <div class="bims-location-item">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <path d="M4 4h16v16H4z" opacity="0" />
                  <path d="M22 6l-10 7L2 6" />
                  <path d="M2 6h20v12H2z" />
                </svg>
                info@bims.edu.pk
              </div>
            </div>
          </div>
          <div class="bims-map-embed">
            <iframe
              src="https://www.google.com/maps?q=BIMS+Campus+Main+Murree+Road+Rawalpindi&output=embed"
              title="Map showing BIMS Campus location on Main Murree Road, Rawalpindi"
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
    </section>

    <!-- ============================================================
     CONTACT
     ============================================================ -->
    <section class="bims-contact" id="bims-contact">
      <div class="bims-container">
        <div class="bims-section-head bims-reveal">
          <p class="bims-eyebrow">Get In Touch</p>
          <h2 class="bims-section-title">Contact Us</h2>
        </div>

        <div class="bims-contact-grid bims-reveal">
          <div class="bims-contact-info">
            <h3>Reach the BIMS team</h3>
            <p>Have a question about admissions, fees or programs? Send a message and the admissions team will follow up.</p>
            <ul class="bims-contact-list">
              <li>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <path d="M12 21s-7-6.2-7-11a7 7 0 0114 0c0 4.8-7 11-7 11z" />
                  <circle cx="12" cy="10" r="2.5" />
                </svg>
                BIMS Campus, Main Murree Road, b/w 5th and 6th Road, Rawalpindi
              </li>
              <li>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.362 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.338 1.85.573 2.81.7A2 2 0 0122 16.92z" />
                </svg>
                <a href="tel:+92514853701">Main Office: +92 51-4853701-2</a>
              </li>
              <li>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.362 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.338 1.85.573 2.81.7A2 2 0 0122 16.92z" />
                </svg>
                <a href="tel:+923333332467">Admissions Hotline: 0333-333-2467</a>
              </li>
              <li>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <path d="M4 4h16v16H4z" opacity="0" />
                  <path d="M22 6l-10 7L2 6" />
                  <path d="M2 6h20v12H2z" />
                </svg>
                <a href="mailto:info@bims.edu.pk">General: info@bims.edu.pk</a>
              </li>
              <li>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <path d="M4 4h16v16H4z" opacity="0" />
                  <path d="M22 6l-10 7L2 6" />
                  <path d="M2 6h20v12H2z" />
                </svg>
                <a href="mailto:admissions@bims.edu.pk">Admissions: admissions@bims.edu.pk</a>
              </li>
            </ul>
          </div>

          <div>
            <form id="bims-contact-form" novalidate>
              <div class="bims-form-grid">
                <div class="bims-field" data-bims-field="name">
                  <label for="bims-name">Name</label>
                  <input type="text" id="bims-name" name="bims_name" placeholder="Your full name" autocomplete="name">
                  <span class="bims-field-error">Please enter your name.</span>
                </div>
                <div class="bims-field" data-bims-field="phone">
                  <label for="bims-phone">Phone</label>
                  <input type="tel" id="bims-phone" name="bims_phone" placeholder="03XX XXXXXXX" autocomplete="tel">
                  <span class="bims-field-error">Please enter a valid phone number.</span>
                </div>
                <div class="bims-field bims-full" data-bims-field="email">
                  <label for="bims-email">Email</label>
                  <input type="email" id="bims-email" name="bims_email" placeholder="you@example.com" autocomplete="email">
                  <span class="bims-field-error">Please enter a valid email address.</span>
                </div>
                <div class="bims-field bims-full" data-bims-field="message">
                  <label for="bims-message">Message</label>
                  <textarea id="bims-message" name="bims_message" placeholder="How can we help?"></textarea>
                  <span class="bims-field-error">Please enter a message.</span>
                </div>
                <p class="bims-captcha-note">This form is frontend-only for now — no CAPTCHA or backend is connected yet. Wire it to a real endpoint before launch.</p>
                <div class="bims-field bims-full">
                  <button type="submit" class="bims-btn bims-btn-solid bims-btn-block" id="bims-submit-btn">Send</button>
                </div>
              </div>
            </form>

            <div class="bims-form-success" id="bims-form-success">
              <div class="bims-check"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
                  <path d="M5 13l4 4L19 7" />
                </svg></div>
              <h3>Message Sent</h3>
              <p>Thanks for reaching out — the BIMS team will get back to you soon.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ============================================================
     FOOTER
     ============================================================ -->
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
              <li><a href="/bims-fee-structure">Fee Structure</a></li>
              <li><a href="/bims-merit-list">Merit List</a></li>
              <li><a href="/bims-fee-chalan">Fee Chalan</a></li>
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
            <a href="https://wa.me/<?php echo esc_attr( ccx_whatsapp_number( 'BIMS' ) ); ?>" target="_blank" rel="noopener" aria-label="BIMS on WhatsApp"><svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor">
                <path d="M17.6 6.32A8.86 8.86 0 0012.05 4a8.94 8.94 0 00-7.74 13.4L3 21l3.7-1.28a8.9 8.9 0 004.34 1.12h.01A8.94 8.94 0 0021 12.32a8.87 8.87 0 00-3.4-6z" />
              </svg></a>
          </div>
        </div>
      </div>
    </footer>

    <a href="https://wa.me/<?php echo esc_attr( ccx_whatsapp_number( 'BIMS' ) ); ?>" target="_blank" rel="noopener" class="bims-whatsapp" id="bims-whatsapp" aria-label="Chat with BIMS on WhatsApp">
      <svg width="26" height="26" viewBox="0 0 24 24" fill="#fff">
        <path d="M17.6 6.32A8.86 8.86 0 0012.05 4a8.94 8.94 0 00-7.74 13.4L3 21l3.7-1.28a8.9 8.9 0 004.34 1.12h.01A8.94 8.94 0 0021 12.32a8.87 8.87 0 00-3.4-6zM12.05 19.6a7.4 7.4 0 01-3.78-1.04l-.27-.16-2.8.97.94-2.73-.18-.28a7.44 7.44 0 01-1.15-3.98 7.4 7.4 0 0112.65-5.25 7.36 7.36 0 012.17 5.25 7.4 7.4 0 01-7.58 7.22zm4.08-5.55c-.22-.11-1.31-.65-1.51-.72-.2-.07-.35-.11-.5.11-.15.22-.57.72-.7.87-.13.15-.26.16-.48.05a6.1 6.1 0 01-1.8-1.11 6.8 6.8 0 01-1.24-1.55c-.13-.22 0-.34.1-.45.1-.1.22-.26.33-.39.11-.13.15-.22.22-.37.07-.15.04-.28-.02-.39-.06-.11-.5-1.21-.69-1.66-.18-.43-.36-.37-.5-.38h-.43c-.15 0-.39.06-.6.28-.2.22-.79.77-.79 1.87 0 1.1.81 2.16.92 2.31.11.15 1.6 2.44 3.87 3.42.54.23.96.37 1.29.48.54.17 1.03.15 1.42.09.43-.06 1.31-.53 1.5-1.05.18-.51.18-.95.13-1.05-.06-.1-.2-.15-.42-.26z" />
      </svg>
    </a>

    <!-- ============================================================
     ADMISSION INQUIRY MODAL
     ============================================================ -->
    <div class="bims-modal-overlay" id="bims-admission-modal" role="dialog" aria-modal="true" aria-labelledby="bims-modal-title" aria-hidden="true">
      <div class="bims-modal-panel">
        <button type="button" class="bims-modal-close" id="bims-modal-close" aria-label="Close admission inquiry form">&times;</button>
        <div class="bims-modal-header">
          <p class="bims-eyebrow">Admissions</p>
          <h3 id="bims-modal-title">BIMS Admission Inquiry</h3>
          <p class="bims-modal-sub">Share your details and we'll open WhatsApp with your inquiry ready to send to BIMS admissions.</p>
        </div>

        <form id="bims-admission-form" novalidate>
          <div class="bims-modal-grid">
            <div class="bims-field bims-full" data-bims-mfield="name">
              <label for="bims-adm-name">Full Name</label>
              <input type="text" id="bims-adm-name" name="name" placeholder="e.g. Ayesha Khan" autocomplete="name">
              <span class="bims-field-error">Please enter your full name.</span>
            </div>
            <div class="bims-field" data-bims-mfield="phone">
              <label for="bims-adm-phone">Phone / WhatsApp Number</label>
              <input type="tel" id="bims-adm-phone" name="phone" placeholder="03XX XXXXXXX" autocomplete="tel">
              <span class="bims-field-error">Please enter a valid phone number.</span>
            </div>
            <div class="bims-field" data-bims-mfield="email">
              <label for="bims-adm-email">Email <span style="font-weight:500; color:var(--bims-ink-soft);">(optional)</span></label>
              <input type="email" id="bims-adm-email" name="email" placeholder="you@example.com" autocomplete="email">
              <span class="bims-field-error">Please enter a valid email address.</span>
            </div>
            <div class="bims-field" data-bims-mfield="city">
              <label for="bims-adm-city">City</label>
              <input type="text" id="bims-adm-city" name="city" placeholder="e.g. Rawalpindi" autocomplete="address-level2">
            </div>
            <div class="bims-field" data-bims-mfield="program">
              <label for="bims-adm-program">Program of Interest</label>
              <input type="text" id="bims-adm-program" name="program" placeholder="e.g. BSCS Software Engineering">
              <span class="bims-field-error">Please tell us which program you're interested in.</span>
            </div>
            <div class="bims-field bims-full">
              <label for="bims-adm-message">Message <span style="font-weight:500; color:var(--bims-ink-soft);">(optional)</span></label>
              <textarea id="bims-adm-message" name="message" placeholder="Anything else you'd like us to know?"></textarea>
            </div>
          </div>
          <button type="submit" class="bims-btn bims-btn-solid bims-btn-block" id="bims-adm-submit">Send via WhatsApp</button>
          <p class="bims-modal-note">This opens WhatsApp with your details pre-filled. No data is stored by this page.</p>
        </form>
      </div>
    </div>

    <!-- ============================================================
     PROGRAM/DEPARTMENT MULTI-STEP MODAL
     (Fee Structure → Application Form → Confirmation)
     ============================================================ -->
    <div class="bims-dept-overlay" id="bims-dept-modal" role="dialog" aria-modal="true" aria-labelledby="bims-dept-title" aria-hidden="true">
      <div class="bims-dept-panel">
        <button type="button" class="bims-dept-close" id="bims-dept-close" aria-label="Close">&times;</button>

        <div class="bims-dept-steps" aria-hidden="true">
          <span class="bims-dept-step-dot bims-dept-step-active" data-bims-dept-dot="1"><span class="bims-num">1</span> Fee Structure</span>
          <span class="bims-dept-step-line"></span>
          <span class="bims-dept-step-dot" data-bims-dept-dot="2"><span class="bims-num">2</span> Application</span>
          <span class="bims-dept-step-line"></span>
          <span class="bims-dept-step-dot" data-bims-dept-dot="3"><span class="bims-num">3</span> Confirmation</span>
        </div>

        <div class="bims-dept-view bims-dept-view-active" data-bims-dept-view="1">
          <span class="bims-dept-program-tag" id="bims-dept-tag-1"></span>
          <div class="bims-dept-header">
            <h3 id="bims-dept-title">Fee Structure</h3>
            <p>A general overview before you apply. BIMS updates its fee structure each academic year.</p>
          </div>
          <p class="bims-dept-fee-note">Exact tuition, admission and other fees are set and published by BIMS and can change between intakes. Please confirm current figures on the BIMS fee structure page or directly with the admissions office before applying.</p>
          <table class="bims-dept-fee-table">
            <tr>
              <td>Tuition Fee</td>
              <td>Confirm with BIMS</td>
            </tr>
            <tr>
              <td>Admission / Processing Fee</td>
              <td>Confirm with BIMS</td>
            </tr>
            <tr>
              <td>Security Deposit</td>
              <td>Confirm with BIMS</td>
            </tr>
            <tr>
              <td>Scholarships &amp; Financial Aid</td>
              <td>Ask admissions office</td>
            </tr>
          </table>
          <div class="bims-dept-fee-actions">
            <a href="#" class="bims-btn bims-btn-outline-green">View Fee Structure</a>
            <button type="button" class="bims-btn bims-btn-solid" id="bims-dept-to-step2">Continue to Application</button>
          </div>
        </div>

        <div class="bims-dept-view" data-bims-dept-view="2">
          <span class="bims-dept-program-tag" id="bims-dept-tag-2"></span>
          <div class="bims-dept-header">
            <h3>Application Details</h3>
            <p>Share your details and this opens your email app with your application ready to send.</p>
          </div>
          <form id="bims-dept-form" novalidate>
            <div class="bims-modal-grid">
              <div class="bims-field bims-full" data-bims-dfield="name">
                <label for="bims-dept-name">Full Name</label>
                <input type="text" id="bims-dept-name" name="name" placeholder="e.g. Ayesha Khan" autocomplete="name">
                <span class="bims-field-error">Please enter your full name.</span>
              </div>
              <div class="bims-field" data-bims-dfield="phone">
                <label for="bims-dept-phone">Phone</label>
                <input type="tel" id="bims-dept-phone" name="phone" placeholder="03XX XXXXXXX" autocomplete="tel">
                <span class="bims-field-error">Please enter a valid phone number.</span>
              </div>
              <div class="bims-field" data-bims-dfield="email">
                <label for="bims-dept-email">Email</label>
                <input type="email" id="bims-dept-email" name="email" placeholder="you@example.com" autocomplete="email">
                <span class="bims-field-error">Please enter a valid email address.</span>
              </div>
              <div class="bims-field bims-full" data-bims-dfield="city">
                <label for="bims-dept-city">City</label>
                <input type="text" id="bims-dept-city" name="city" placeholder="e.g. Rawalpindi" autocomplete="address-level2">
              </div>
              <div class="bims-field bims-full">
                <label for="bims-dept-message">Message <span style="font-weight:500; color:var(--bims-ink-soft);">(optional)</span></label>
                <textarea id="bims-dept-message" name="message" placeholder="Anything else you'd like us to know?"></textarea>
              </div>
            </div>
            <div class="bims-dept-form-actions">
              <button type="button" class="bims-btn bims-btn-outline-green" id="bims-dept-back-step1">Back</button>
              <button type="submit" class="bims-btn bims-btn-solid" id="bims-dept-submit">Submit Application</button>
            </div>
          </form>
        </div>

        <div class="bims-dept-view" data-bims-dept-view="3">
          <div class="bims-dept-confirm">
            <div class="bims-check"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
                <path d="M5 13l4 4L19 7" />
              </svg></div>
            <h3>Application Ready to Send</h3>
            <p>Your email app should now open with your application pre-filled. If it didn't open automatically, use the email address below to send it yourself.</p>
            <div class="bims-dept-confirm-summary" id="bims-dept-summary"></div>
            <p class="bims-dept-fallback" id="bims-dept-fallback-email"></p>
            <button type="button" class="bims-btn bims-btn-outline-green" id="bims-dept-done">Close</button>
          </div>
        </div>

      </div>
    </div>

    <!-- ============================================================
     QUICK APPLY MODAL (4-step: Program → Fee Structure → Application → Confirmation)
     ============================================================ -->
    <div class="bims-qa-overlay" id="bims-qa-modal" role="dialog" aria-modal="true" aria-labelledby="bims-qa-title" aria-hidden="true">
      <div class="bims-qa-panel">
        <button type="button" class="bims-qa-close" id="bims-qa-close" aria-label="Close">&times;</button>

        <div class="bims-qa-steps" aria-hidden="true">
          <span class="bims-qa-step-dot bims-qa-step-active" data-bims-qa-dot="program"><span class="bims-qa-num">1</span> Program</span>
          <span class="bims-qa-step-line"></span>
          <span class="bims-qa-step-dot" data-bims-qa-dot="fee"><span class="bims-qa-num">2</span> Fee</span>
          <span class="bims-qa-step-line"></span>
          <span class="bims-qa-step-dot" data-bims-qa-dot="form"><span class="bims-qa-num">3</span> Application</span>
          <span class="bims-qa-step-line"></span>
          <span class="bims-qa-step-dot" data-bims-qa-dot="confirm"><span class="bims-qa-num">4</span> Confirmation</span>
        </div>

        <!-- STEP 1: SELECT PROGRAM -->
        <div class="bims-qa-view bims-qa-view-active" data-bims-qa-view="program">
          <div class="bims-qa-header">
            <h3 id="bims-qa-title">Select a Program</h3>
            <p>Choose the BIMS program you'd like to apply to.</p>
          </div>
          <div class="bims-qa-program-list" id="bims-qa-program-list" role="radiogroup" aria-label="Select a program"></div>
          <button type="button" class="bims-btn bims-btn-solid bims-btn-block" id="bims-qa-to-fee" disabled>Continue to Fee Structure</button>
        </div>

        <!-- STEP 2: FEE STRUCTURE -->
        <div class="bims-qa-view" data-bims-qa-view="fee">
          <div class="bims-qa-header">
            <h3>Fee Structure</h3>
            <p id="bims-qa-fee-program-label"></p>
          </div>
          <p class="bims-qa-fee-note">Exact fees are set and published by BIMS and can change between intakes. Select your seat category below — confirm the exact amount with BIMS admissions before applying.</p>
          <div class="bims-qa-fee-options" id="bims-qa-fee-options" role="radiogroup" aria-label="Select your fee category"></div>
          <div class="bims-qa-form-actions">
            <button type="button" class="bims-btn bims-btn-outline-green" id="bims-qa-back-program">Back</button>
            <button type="button" class="bims-btn bims-btn-solid" id="bims-qa-to-form" disabled>Continue to Application</button>
          </div>
        </div>

        <!-- STEP 3: APPLICATION FORM -->
        <div class="bims-qa-view" data-bims-qa-view="form">
          <div class="bims-qa-header">
            <h3>Application Details</h3>
            <p>Fill in your details below. Your application is sent directly by email to our admissions team.</p>
          </div>
          <form id="bims-qa-form" novalidate>
            <div class="bims-modal-grid">
              <div class="bims-field" data-bims-qafield="name">
                <label for="bims-qa-name">Full Name</label>
                <input type="text" id="bims-qa-name" name="name" placeholder="e.g. Ayesha Khan" autocomplete="name">
                <span class="bims-field-error">Please enter your full name.</span>
              </div>
              <div class="bims-field" data-bims-qafield="father">
                <label for="bims-qa-father">Father's Name</label>
                <input type="text" id="bims-qa-father" name="father" placeholder="e.g. Muhammad Khan" autocomplete="off">
                <span class="bims-field-error">Please enter your father's name.</span>
              </div>
              <div class="bims-field" data-bims-qafield="cnic">
                <label for="bims-qa-cnic">CNIC / B-Form Number</label>
                <input type="text" id="bims-qa-cnic" name="cnic" placeholder="XXXXX-XXXXXXX-X" autocomplete="off">
                <span class="bims-field-error">Please enter your CNIC or B-Form number.</span>
              </div>
              <div class="bims-field" data-bims-qafield="phone">
                <label for="bims-qa-phone">Phone</label>
                <input type="tel" id="bims-qa-phone" name="phone" placeholder="03XX XXXXXXX" autocomplete="tel">
                <span class="bims-field-error">Please enter a valid phone number.</span>
              </div>
              <div class="bims-field" data-bims-qafield="email">
                <label for="bims-qa-email">Email</label>
                <input type="email" id="bims-qa-email" name="email" placeholder="you@example.com" autocomplete="email">
                <span class="bims-field-error">Please enter a valid email address.</span>
              </div>
              <div class="bims-field" data-bims-qafield="city">
                <label for="bims-qa-city">City</label>
                <input type="text" id="bims-qa-city" name="city" placeholder="e.g. Rawalpindi" autocomplete="address-level2">
                <span class="bims-field-error">Please enter your city.</span>
              </div>
              <div class="bims-field" data-bims-qafield="matricRoll">
                <label for="bims-qa-matric-roll">Matriculation Roll Number</label>
                <input type="text" id="bims-qa-matric-roll" name="matricRoll" placeholder="e.g. 123456" autocomplete="off">
                <span class="bims-field-error">Please enter your matriculation roll number.</span>
              </div>
              <div class="bims-field" data-bims-qafield="matricPct">
                <label for="bims-qa-matric-pct">Matriculation Percentage</label>
                <input type="text" id="bims-qa-matric-pct" name="matricPct" placeholder="e.g. 85%" autocomplete="off">
                <span class="bims-field-error">Please enter your matriculation percentage.</span>
              </div>
              <div class="bims-field" data-bims-qafield="interRoll">
                <label for="bims-qa-inter-roll">Intermediate Roll Number</label>
                <input type="text" id="bims-qa-inter-roll" name="interRoll" placeholder="e.g. 654321" autocomplete="off">
                <span class="bims-field-error">Please enter your intermediate roll number.</span>
              </div>
              <div class="bims-field" data-bims-qafield="interPct">
                <label for="bims-qa-inter-pct">Intermediate Percentage</label>
                <input type="text" id="bims-qa-inter-pct" name="interPct" placeholder="e.g. 78%" autocomplete="off">
                <span class="bims-field-error">Please enter your intermediate percentage.</span>
              </div>
              <div class="bims-field bims-full">
                <label for="bims-qa-message">Message <span style="font-weight:500; color:var(--bims-ink-soft);">(optional)</span></label>
                <textarea id="bims-qa-message" name="message" placeholder="Anything else you'd like us to know?"></textarea>
              </div>
            </div>
            <div class="bims-qa-form-actions">
              <button type="button" class="bims-btn bims-btn-outline-green" id="bims-qa-back-fee">Back</button>
              <button type="submit" class="bims-btn bims-btn-solid" id="bims-qa-submit">Submit Application</button>
            </div>
          </form>
        </div>

        <!-- STEP 4: CONFIRMATION -->
        <div class="bims-qa-view" data-bims-qa-view="confirm">
          <div class="bims-qa-confirm">
            <div class="bims-check"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
                <path d="M5 13l4 4L19 7" />
              </svg></div>
            <h3>Application Sent</h3>
            <p>Your email app should now open with your application pre-filled and addressed to info@eduapply.online. If it didn't open automatically, please send your details there directly.</p>
            <div class="bims-qa-confirm-summary" id="bims-qa-confirm-summary"></div>
            <button type="button" class="bims-btn bims-btn-outline-green" id="bims-qa-done" style="margin-top:16px;">Close</button>
          </div>
        </div>
      </div>
    </div>

    <!-- ============================================================
     WELCOME / ADMISSION ANNOUNCEMENT POPUP (auto-shows once per session)
     ============================================================ -->
    <?php $ccx_welcome = ccx_welcome_popup( 'bims' ); ?>
    <?php if ( $ccx_welcome['enabled'] && $ccx_welcome['image'] ) : ?>
    <div class="bims-welcome-overlay" id="bims-welcome-modal" role="dialog" aria-modal="true" aria-label="BIMS Admissions" aria-hidden="true">
      <div class="bims-welcome-panel">
        <button type="button" class="bims-welcome-close" id="bims-welcome-close" aria-label="Close">&times;</button>
        <button type="button" class="bims-welcome-image bims-quickapply-trigger" id="bims-welcome-apply" aria-label="Apply Now at BIMS">
          <img src="<?php echo esc_url( $ccx_welcome['image'] ); ?>" alt="<?php echo esc_attr( $ccx_welcome['alt'] ); ?>">
        </button>
      </div>
    </div>
    <?php endif; ?>

  </div><!-- /#bims-page -->

  <script>
    var bimsHomepage = (function() {
      "use strict";

      function bimsInit() {
        bimsSetupMobileNav();
        bimsSetupSmoothScroll();
        bimsSetupTestimonialTrack();
        bimsSetupContactForm();
        bimsSetupScrollReveal();
        bimsSetupFooterYear();
        bimsSetupAdmissionModal();
        bimsSetupDeptModal();
        bimsSetupNotifyBar();
        bimsSetupQuickApply();
        bimsSetupWelcomePopup();
      }

      /* ============================================================
         ADMISSION DATES — configurable placeholder until BIMS supplies
         verified dates.
         ============================================================ */
      // TODO: replace with BIMS's verified admission dates.
      var bimsAdmissionInfo = {
        lastDateToApply: "Contact Admissions Office for Current Dates",
        entryTestDate: "Contact Admissions Office for Current Dates"
      };
      var bimsQuickApplyEmail = "info@eduapply.online";
      var bimsQuickApplyBound = false;
      var bimsQaSelectedProgram = null;
      var bimsQaSelectedFee = null;

      // Real BIMS programs, matching the "Programs Offered" section on this page.
      var bimsPrograms = [
        "BBA (Hons) 4 Years",
        "BBA 2 Years",
        "BS Accounts & Finance",
        "BS Economics",
        "BSCS (General Computing)",
        "BSCS (Software Engineering)",
        "BSCS (Artificial Intelligence)",
        "BS Environmental Sciences",
        "BS Mathematics",
        "BS Statistics",
        "BSc. Hons HND (Human Nutrition & Dietetics)",
        "BS MLT (Medical Laboratory Technology)"
      ];
      // Generic, non-fabricated fee categories used across Pakistani university
      // admissions. No specific amounts are shown — only BIMS admissions can
      // confirm exact figures.
      var bimsFeeCategories = [{
          key: "regular",
          title: "Regular / Merit Seat",
          amount: "Confirm with BIMS"
        },
        {
          key: "selffinance",
          title: "Self-Finance Seat",
          amount: "Confirm with BIMS"
        }
      ];

      function bimsSetupNotifyBar() {
        var lastDateEl = document.getElementById("bims-notify-lastdate");
        var entryTestEl = document.getElementById("bims-notify-entrytest");
        if (lastDateEl) lastDateEl.textContent = bimsAdmissionInfo.lastDateToApply;
        if (entryTestEl) entryTestEl.textContent = bimsAdmissionInfo.entryTestDate;
      }

      /* ---------- QUICK APPLY MODAL (4-step: Program → Fee → Application → Confirmation) ---------- */
      function bimsQuickApplyGoTo(view) {
        document.querySelectorAll("#bims-page .bims-qa-view").forEach(function(v) {
          v.classList.toggle("bims-qa-view-active", v.getAttribute("data-bims-qa-view") === view);
        });
        document.querySelectorAll("#bims-page .bims-qa-step-dot").forEach(function(dot) {
          var order = ["program", "fee", "form", "confirm"];
          var dotStep = dot.getAttribute("data-bims-qa-dot");
          dot.classList.toggle("bims-qa-step-active", dotStep === view);
          dot.classList.toggle("bims-qa-step-done", order.indexOf(dotStep) < order.indexOf(view));
        });
      }

      function bimsRenderProgramList() {
        var list = document.getElementById("bims-qa-program-list");
        if (!list) return;
        list.innerHTML = bimsPrograms.map(function(p, i) {
          return '<label class="bims-qa-program-opt" data-bims-qa-program="' + i + '">' +
            '<input type="radio" name="bimsQaProgram" value="' + i + '">' +
            '<span>' + p + '</span></label>';
        }).join("");

        list.querySelectorAll(".bims-qa-program-opt").forEach(function(opt) {
          opt.addEventListener("click", function() {
            list.querySelectorAll(".bims-qa-program-opt").forEach(function(o) {
              o.classList.remove("bims-qa-selected");
            });
            opt.classList.add("bims-qa-selected");
            opt.querySelector("input").checked = true;
            bimsQaSelectedProgram = bimsPrograms[parseInt(opt.getAttribute("data-bims-qa-program"), 10)];
            var toFeeBtn = document.getElementById("bims-qa-to-fee");
            if (toFeeBtn) toFeeBtn.disabled = false;
          });
        });
      }

      function bimsRenderFeeOptions() {
        var wrap = document.getElementById("bims-qa-fee-options");
        var label = document.getElementById("bims-qa-fee-program-label");
        if (label) label.textContent = bimsQaSelectedProgram || "";
        if (!wrap) return;
        wrap.innerHTML = bimsFeeCategories.map(function(f, i) {
          return '<label class="bims-qa-fee-opt" data-bims-qa-fee="' + i + '">' +
            '<span class="bims-qa-fee-opt-left"><input type="radio" name="bimsQaFee" value="' + i + '"><span class="bims-qa-fee-opt-title">' + f.title + '</span></span>' +
            '<span class="bims-qa-fee-opt-amount">' + f.amount + '</span></label>';
        }).join("");

        wrap.querySelectorAll(".bims-qa-fee-opt").forEach(function(opt) {
          opt.addEventListener("click", function() {
            wrap.querySelectorAll(".bims-qa-fee-opt").forEach(function(o) {
              o.classList.remove("bims-qa-selected");
            });
            opt.classList.add("bims-qa-selected");
            opt.querySelector("input").checked = true;
            bimsQaSelectedFee = bimsFeeCategories[parseInt(opt.getAttribute("data-bims-qa-fee"), 10)].title;
            var toFormBtn = document.getElementById("bims-qa-to-form");
            if (toFormBtn) toFormBtn.disabled = false;
          });
        });
      }

      function bimsOpenQuickApply() {
        var overlay = document.getElementById("bims-qa-modal");
        if (!overlay) return;
        var form = document.getElementById("bims-qa-form");
        if (form) form.reset();
        document.querySelectorAll("#bims-qa-form .bims-field").forEach(function(f) {
          f.classList.remove("bims-error");
        });

        bimsQaSelectedProgram = null;
        bimsQaSelectedFee = null;
        var toFeeBtn = document.getElementById("bims-qa-to-fee");
        var toFormBtn = document.getElementById("bims-qa-to-form");
        if (toFeeBtn) toFeeBtn.disabled = true;
        if (toFormBtn) toFormBtn.disabled = true;

        bimsRenderProgramList();
        bimsQuickApplyGoTo("program");
        overlay.classList.add("bims-qa-open");
        overlay.setAttribute("aria-hidden", "false");
        document.body.style.overflow = "hidden";
      }

      function bimsCloseQuickApply() {
        var overlay = document.getElementById("bims-qa-modal");
        if (!overlay) return;
        overlay.classList.remove("bims-qa-open");
        overlay.setAttribute("aria-hidden", "true");
        document.body.style.overflow = "";
      }

      function bimsSetupQuickApply() {
        if (bimsQuickApplyBound) return;
        bimsQuickApplyBound = true;

        var overlay = document.getElementById("bims-qa-modal");
        var closeBtn = document.getElementById("bims-qa-close");
        var doneBtn = document.getElementById("bims-qa-done");
        var form = document.getElementById("bims-qa-form");
        var toFeeBtn = document.getElementById("bims-qa-to-fee");
        var toFormBtn = document.getElementById("bims-qa-to-form");
        var backProgramBtn = document.getElementById("bims-qa-back-program");
        var backFeeBtn = document.getElementById("bims-qa-back-fee");
        if (!overlay || !closeBtn || !form) return;

        document.querySelectorAll("#bims-page .bims-quickapply-trigger").forEach(function(trigger) {
          trigger.addEventListener("click", function(e) {
            e.preventDefault();
            window.location.href = "/admissions/apply?university=BIMS";
          });
        });

        closeBtn.addEventListener("click", bimsCloseQuickApply);
        if (doneBtn) doneBtn.addEventListener("click", bimsCloseQuickApply);
        overlay.addEventListener("click", function(e) {
          if (e.target === overlay) bimsCloseQuickApply();
        });
        document.addEventListener("keydown", function(e) {
          if (e.key === "Escape" && overlay.classList.contains("bims-qa-open")) bimsCloseQuickApply();
        });

        if (toFeeBtn) toFeeBtn.addEventListener("click", function() {
          if (!bimsQaSelectedProgram) return;
          bimsRenderFeeOptions();
          bimsQuickApplyGoTo("fee");
        });
        if (backProgramBtn) backProgramBtn.addEventListener("click", function() {
          bimsQuickApplyGoTo("program");
        });
        if (toFormBtn) toFormBtn.addEventListener("click", function() {
          if (!bimsQaSelectedFee) return;
          bimsQuickApplyGoTo("form");
        });
        if (backFeeBtn) backFeeBtn.addEventListener("click", function() {
          bimsQuickApplyGoTo("fee");
        });

        function setError(fieldEl, hasError) {
          if (fieldEl) fieldEl.classList.toggle("bims-error", hasError);
        }

        function isValidEmail(v) {
          return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(v);
        }

        function isValidPhone(v) {
          var d = v.replace(/[^\d]/g, "");
          return d.length >= 10 && d.length <= 13;
        }

        function req(field, value, minLen) {
          var el = form.querySelector('[data-bims-qafield="' + field + '"]');
          var ok = value.trim().length >= (minLen || 1);
          setError(el, !ok);
          return ok;
        }

        form.addEventListener("submit", function(e) {
          e.preventDefault();
          var valid = true;

          if (!req("name", form.name.value, 2)) valid = false;
          if (!req("father", form.father.value, 2)) valid = false;
          if (!req("cnic", form.cnic.value, 5)) valid = false;

          var phoneField = form.querySelector('[data-bims-qafield="phone"]');
          if (!isValidPhone(form.phone.value.trim())) {
            setError(phoneField, true);
            valid = false;
          } else {
            setError(phoneField, false);
          }

          var emailField = form.querySelector('[data-bims-qafield="email"]');
          if (!isValidEmail(form.email.value.trim())) {
            setError(emailField, true);
            valid = false;
          } else {
            setError(emailField, false);
          }

          if (!req("city", form.city.value, 2)) valid = false;
          if (!req("matricRoll", form.matricRoll.value, 1)) valid = false;
          if (!req("matricPct", form.matricPct.value, 1)) valid = false;
          if (!req("interRoll", form.interRoll.value, 1)) valid = false;
          if (!req("interPct", form.interPct.value, 1)) valid = false;

          if (!valid) {
            var firstError = form.querySelector(".bims-field.bims-error");
            if (firstError) {
              firstError.scrollIntoView({
                behavior: "smooth",
                block: "center"
              });
            }
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

          var subject = "Admission Application — BIMS (" + bimsQaSelectedProgram + ")";
          var bodyLines = [
            "University: Barani Institute of Management & Sciences (BIMS)",
            "Program: " + bimsQaSelectedProgram,
            "Fee Category: " + bimsQaSelectedFee,
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
          if (message) bodyLines.push("Message: " + message);
          var mailtoUrl = "mailto:" + encodeURIComponent(bimsQuickApplyEmail) + "?subject=" + encodeURIComponent(subject) + "&body=" + encodeURIComponent(bodyLines.join("\n"));

          window.location.href = mailtoUrl;

          var summaryEl = document.getElementById("bims-qa-confirm-summary");
          if (summaryEl) {
            summaryEl.innerHTML =
              "<div><strong>Program:</strong> " + bimsQaSelectedProgram + "</div>" +
              "<div><strong>Fee Category:</strong> " + bimsQaSelectedFee + "</div>" +
              "<div><strong>Name:</strong> " + name + "</div>" +
              "<div><strong>Phone:</strong> " + phone + "</div>" +
              "<div><strong>Email:</strong> " + email + "</div>";
          }

          bimsQuickApplyGoTo("confirm");
        });
      }

      /* ---------- WELCOME / ADMISSION POPUP (shows once per browser session) ---------- */
      function bimsCloseWelcomePopup() {
        var overlay = document.getElementById("bims-welcome-modal");
        if (!overlay) return;
        overlay.classList.remove("bims-welcome-open");
        overlay.setAttribute("aria-hidden", "true");
        document.body.style.overflow = "";
      }

      function bimsSetupWelcomePopup() {
        var overlay = document.getElementById("bims-welcome-modal");
        var closeBtn = document.getElementById("bims-welcome-close");
        var lastDateEl = document.getElementById("bims-welcome-lastdate");
        var entryTestEl = document.getElementById("bims-welcome-entrytest");
        if (!overlay || !closeBtn) return;

        if (lastDateEl) lastDateEl.textContent = bimsAdmissionInfo.lastDateToApply;
        if (entryTestEl) entryTestEl.textContent = bimsAdmissionInfo.entryTestDate;

        closeBtn.addEventListener("click", bimsCloseWelcomePopup);
        overlay.addEventListener("click", function(e) {
          if (e.target === overlay) bimsCloseWelcomePopup();
        });
        document.addEventListener("keydown", function(e) {
          if (e.key === "Escape" && overlay.classList.contains("bims-welcome-open")) bimsCloseWelcomePopup();
        });

        var SESSION_KEY = "ccxSeenBimsWelcome";
        var alreadyShown = false;
        try {
          alreadyShown = window.sessionStorage.getItem(SESSION_KEY) === "1";
        } catch (err) {
          alreadyShown = false;
        }

        if (!alreadyShown) {
          window.setTimeout(function() {
            overlay.classList.add("bims-welcome-open");
            overlay.setAttribute("aria-hidden", "false");
            document.body.style.overflow = "hidden";
            try {
              window.sessionStorage.setItem(SESSION_KEY, "1");
            } catch (err) {}
          }, 1200);
        }
      }

      /* ============================================================
         PROGRAM/DEPARTMENT MULTI-STEP MODAL
         (Fee Structure → Application Form → Confirmation, submitted via email)
         ============================================================ */
      // BIMS's real published admissions email
      var bimsDeptEmail = "admissions@bims.edu.pk";
      var bimsDeptCurrent = null;

      function bimsDeptGoToStep(step) {
        document.querySelectorAll("#bims-page .bims-dept-view").forEach(function(view) {
          view.classList.toggle("bims-dept-view-active", view.getAttribute("data-bims-dept-view") === String(step));
        });
        document.querySelectorAll("#bims-page .bims-dept-step-dot").forEach(function(dot) {
          var dotStep = parseInt(dot.getAttribute("data-bims-dept-dot"), 10);
          dot.classList.toggle("bims-dept-step-active", dotStep === step);
          dot.classList.toggle("bims-dept-step-done", dotStep < step);
        });
      }

      function bimsOpenDeptModal(programName, deptLabel) {
        var overlay = document.getElementById("bims-dept-modal");
        if (!overlay) return;
        bimsDeptCurrent = {
          program: programName,
          dept: deptLabel
        };

        var tagText = programName + (deptLabel ? (" · " + deptLabel) : "");
        var tag1 = document.getElementById("bims-dept-tag-1");
        var tag2 = document.getElementById("bims-dept-tag-2");
        if (tag1) tag1.textContent = tagText;
        if (tag2) tag2.textContent = tagText;

        var form = document.getElementById("bims-dept-form");
        if (form) form.reset();
        document.querySelectorAll("#bims-dept-form .bims-field").forEach(function(f) {
          f.classList.remove("bims-error");
        });

        bimsDeptGoToStep(1);
        overlay.classList.add("bims-dept-open");
        overlay.setAttribute("aria-hidden", "false");
        document.body.style.overflow = "hidden";
      }

      function bimsCloseDeptModal() {
        var overlay = document.getElementById("bims-dept-modal");
        if (!overlay) return;
        overlay.classList.remove("bims-dept-open");
        overlay.setAttribute("aria-hidden", "true");
        document.body.style.overflow = "";
      }

      function bimsSetupDeptModal() {
        var overlay = document.getElementById("bims-dept-modal");
        var closeBtn = document.getElementById("bims-dept-close");
        var toStep2 = document.getElementById("bims-dept-to-step2");
        var backStep1 = document.getElementById("bims-dept-back-step1");
        var doneBtn = document.getElementById("bims-dept-done");
        var form = document.getElementById("bims-dept-form");
        if (!overlay || !closeBtn || !form) return;

        document.querySelectorAll("#bims-page .bims-dept-trigger").forEach(function(card) {
          card.addEventListener("click", function() {
            var titleEl = card.querySelector("h4");
            var programName = titleEl ? titleEl.textContent.trim() : "Program";
            window.location.href = "/admissions/apply?university=BIMS&program=" + encodeURIComponent(programName);
          });
        });

        closeBtn.addEventListener("click", bimsCloseDeptModal);
        if (doneBtn) doneBtn.addEventListener("click", bimsCloseDeptModal);
        overlay.addEventListener("click", function(e) {
          if (e.target === overlay) bimsCloseDeptModal();
        });
        document.addEventListener("keydown", function(e) {
          if (e.key === "Escape" && overlay.classList.contains("bims-dept-open")) bimsCloseDeptModal();
        });
        if (toStep2) toStep2.addEventListener("click", function() {
          bimsDeptGoToStep(2);
        });
        if (backStep1) backStep1.addEventListener("click", function() {
          bimsDeptGoToStep(1);
        });

        function setError(fieldEl, hasError) {
          if (fieldEl) fieldEl.classList.toggle("bims-error", hasError);
        }

        function isValidEmail(v) {
          return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(v);
        }

        function isValidPhone(v) {
          var d = v.replace(/[^\d]/g, "");
          return d.length >= 10 && d.length <= 13;
        }

        form.addEventListener("submit", function(e) {
          e.preventDefault();
          var valid = true;

          var name = form.name.value.trim();
          var nameField = form.querySelector('[data-bims-dfield="name"]');
          if (name.length < 2) {
            setError(nameField, true);
            valid = false;
          } else {
            setError(nameField, false);
          }

          var phone = form.phone.value.trim();
          var phoneField = form.querySelector('[data-bims-dfield="phone"]');
          if (!isValidPhone(phone)) {
            setError(phoneField, true);
            valid = false;
          } else {
            setError(phoneField, false);
          }

          var email = form.email.value.trim();
          var emailField = form.querySelector('[data-bims-dfield="email"]');
          if (!isValidEmail(email)) {
            setError(emailField, true);
            valid = false;
          } else {
            setError(emailField, false);
          }

          var city = form.city.value.trim();
          var message = form.message.value.trim();

          if (!valid) {
            var firstError = form.querySelector(".bims-field.bims-error");
            if (firstError) {
              firstError.scrollIntoView({
                behavior: "smooth",
                block: "center"
              });
            }
            return;
          }

          var info = bimsDeptCurrent || {
            program: "",
            dept: ""
          };
          var subject = "Admission Application — " + info.program + " (BIMS)";
          var bodyLines = ["Program: " + info.program, "Department: " + info.dept, "University: Barani Institute of Management & Sciences (BIMS)", "Name: " + name, "Phone: " + phone, "Email: " + email];
          if (city) bodyLines.push("City: " + city);
          if (message) bodyLines.push("Message: " + message);
          var mailtoUrl = "mailto:" + encodeURIComponent(bimsDeptEmail) + "?subject=" + encodeURIComponent(subject) + "&body=" + encodeURIComponent(bodyLines.join("\n"));

          window.location.href = mailtoUrl;

          var summaryEl = document.getElementById("bims-dept-summary");
          if (summaryEl) {
            summaryEl.innerHTML =
              "<div><strong>Program:</strong> " + info.program + "</div>" +
              "<div><strong>Department:</strong> " + info.dept + "</div>" +
              "<div><strong>Name:</strong> " + name + "</div>" +
              "<div><strong>Phone:</strong> " + phone + "</div>" +
              "<div><strong>Email:</strong> " + email + "</div>";
          }
          var fallbackEl = document.getElementById("bims-dept-fallback-email");
          if (fallbackEl) fallbackEl.textContent = "Send to: " + bimsDeptEmail;

          bimsDeptGoToStep(3);
        });
      }


      function bimsSetupAdmissionModal() {
        var overlay = document.getElementById("bims-admission-modal");
        var closeBtn = document.getElementById("bims-modal-close");
        var form = document.getElementById("bims-admission-form");
        if (!overlay || !closeBtn || !form) return;

        // BIMS's real published admissions WhatsApp number
        var bimsAdmissionWhatsapp = "<?php echo esc_js( ccx_whatsapp_number( 'BIMS' ) ); ?>";

        function bimsOpenModal(prefill) {
          overlay.classList.add("bims-modal-open");
          overlay.setAttribute("aria-hidden", "false");
          document.body.style.overflow = "hidden";
          if (prefill && prefill.program) form.program.value = prefill.program;
          window.setTimeout(function() {
            form.name.focus();
          }, 250);
        }

        function bimsCloseModal() {
          overlay.classList.remove("bims-modal-open");
          overlay.setAttribute("aria-hidden", "true");
          document.body.style.overflow = "";
        }

        document.querySelectorAll("#bims-page .bims-admission-trigger").forEach(function(trigger) {
          trigger.addEventListener("click", function(e) {
            e.preventDefault();
            window.location.href = "/admissions/apply?university=BIMS";
          });
        });

        closeBtn.addEventListener("click", bimsCloseModal);
        overlay.addEventListener("click", function(e) {
          if (e.target === overlay) bimsCloseModal();
        });
        document.addEventListener("keydown", function(e) {
          if (e.key === "Escape" && overlay.classList.contains("bims-modal-open")) bimsCloseModal();
        });

        function setError(fieldEl, hasError) {
          if (fieldEl) fieldEl.classList.toggle("bims-error", hasError);
        }

        function isValidEmail(v) {
          return v === "" || /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(v);
        }

        function isValidPhone(v) {
          var d = v.replace(/[^\d]/g, "");
          return d.length >= 10 && d.length <= 13;
        }

        form.addEventListener("submit", function(e) {
          e.preventDefault();
          var valid = true;

          var name = form.name.value.trim();
          var nameField = form.querySelector('[data-bims-mfield="name"]');
          if (name.length < 2) {
            setError(nameField, true);
            valid = false;
          } else {
            setError(nameField, false);
          }

          var phone = form.phone.value.trim();
          var phoneField = form.querySelector('[data-bims-mfield="phone"]');
          if (!isValidPhone(phone)) {
            setError(phoneField, true);
            valid = false;
          } else {
            setError(phoneField, false);
          }

          var email = form.email.value.trim();
          var emailField = form.querySelector('[data-bims-mfield="email"]');
          if (!isValidEmail(email)) {
            setError(emailField, true);
            valid = false;
          } else {
            setError(emailField, false);
          }

          var city = form.city.value.trim();

          var program = form.program.value.trim();
          var programField = form.querySelector('[data-bims-mfield="program"]');
          if (program.length < 2) {
            setError(programField, true);
            valid = false;
          } else {
            setError(programField, false);
          }

          var message = form.message.value.trim();

          if (!valid) {
            var firstError = form.querySelector(".bims-field.bims-error");
            if (firstError) {
              firstError.scrollIntoView({
                behavior: "smooth",
                block: "center"
              });
            }
            return;
          }

          var lines = [
            "Hello, I would like to apply for admission at BIMS.",
            "Name: " + name,
            "Phone: " + phone
          ];
          if (email) lines.push("Email: " + email);
          if (city) lines.push("City: " + city);
          lines.push("Program of Interest: " + program);
          if (message) lines.push("Message: " + message);

          var waBase = bimsAdmissionWhatsapp ? ("https://wa.me/" + bimsAdmissionWhatsapp) : "https://wa.me/";
          var waUrl = waBase + "?text=" + encodeURIComponent(lines.join("\n"));

          window.open(waUrl, "_blank", "noopener");
          bimsCloseModal();
          form.reset();
        });
      }

      function bimsSetupMobileNav() {
        var btn = document.getElementById("bims-hamburger-btn");
        var nav = document.getElementById("bims-mobile-nav");
        if (!btn || !nav) return;
        btn.addEventListener("click", function() {
          var isOpen = nav.classList.toggle("bims-open");
          btn.classList.toggle("bims-active", isOpen);
          btn.setAttribute("aria-expanded", isOpen ? "true" : "false");
        });
      }

      function bimsSetupSmoothScroll() {
        document.querySelectorAll('#bims-page a[data-bims-scroll], #bims-page a[href^="#bims-"], #bims-page a[href^="#dg-"]').forEach(function(link) {
          var targetSel = link.getAttribute("data-bims-scroll") || link.getAttribute("href");
          if (!targetSel || targetSel.length < 2) return;
          link.addEventListener("click", function(e) {
            var target = document.querySelector(targetSel);
            if (target) {
              e.preventDefault();
              var top = target.getBoundingClientRect().top + window.pageYOffset - 20;
              window.scrollTo({
                top: top,
                behavior: "smooth"
              });
            }
          });
        });
      }

      function bimsSetupTestimonialTrack() {
        var track = document.getElementById("bims-t-track");
        var prevBtn = document.getElementById("bims-t-prev");
        var nextBtn = document.getElementById("bims-t-next");
        if (!track || !prevBtn || !nextBtn) return;

        function scrollByCard(dir) {
          var card = track.querySelector(".bims-t-card");
          var amount = card ? (card.getBoundingClientRect().width + 22) * dir : 300 * dir;
          track.scrollBy({
            left: amount,
            behavior: "smooth"
          });
        }
        prevBtn.addEventListener("click", function() {
          scrollByCard(-1);
        });
        nextBtn.addEventListener("click", function() {
          scrollByCard(1);
        });
      }

      // Frontend-only contact form — no CAPTCHA/backend connected yet.
      function bimsSetupContactForm() {
        var form = document.getElementById("bims-contact-form");
        var successPanel = document.getElementById("bims-form-success");
        var submitBtn = document.getElementById("bims-submit-btn");
        if (!form || !successPanel || !submitBtn) return;

        function setError(fieldEl, hasError) {
          if (fieldEl) fieldEl.classList.toggle("bims-error", hasError);
        }

        function isValidEmail(v) {
          return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(v);
        }

        function isValidPhone(v) {
          var d = v.replace(/[^\d]/g, "");
          return d.length >= 10 && d.length <= 13;
        }

        form.addEventListener("submit", function(e) {
          e.preventDefault();
          var valid = true;

          var name = form.bims_name.value.trim();
          var nameField = form.querySelector('[data-bims-field="name"]');
          if (name.length < 2) {
            setError(nameField, true);
            valid = false;
          } else {
            setError(nameField, false);
          }

          var phone = form.bims_phone.value.trim();
          var phoneField = form.querySelector('[data-bims-field="phone"]');
          if (!isValidPhone(phone)) {
            setError(phoneField, true);
            valid = false;
          } else {
            setError(phoneField, false);
          }

          var email = form.bims_email.value.trim();
          var emailField = form.querySelector('[data-bims-field="email"]');
          if (!isValidEmail(email)) {
            setError(emailField, true);
            valid = false;
          } else {
            setError(emailField, false);
          }

          var message = form.bims_message.value.trim();
          var msgField = form.querySelector('[data-bims-field="message"]');
          if (message.length < 3) {
            setError(msgField, true);
            valid = false;
          } else {
            setError(msgField, false);
          }

          if (!valid) {
            var firstError = form.querySelector(".bims-field.bims-error");
            if (firstError) {
              firstError.scrollIntoView({
                behavior: "smooth",
                block: "center"
              });
            }
            return;
          }

          submitBtn.disabled = true;
          submitBtn.textContent = "Sending...";
          window.setTimeout(function() {
            console.log("BIMS contact form captured (no backend connected yet):", {
              name: name,
              phone: phone,
              email: email,
              message: message
            });
            form.classList.add("bims-hide");
            successPanel.classList.add("bims-show");
            submitBtn.disabled = false;
            submitBtn.textContent = "Send";
          }, 500);
        });
      }

      function bimsSetupScrollReveal() {
        var els = document.querySelectorAll("#bims-page .bims-reveal");
        if (!els.length) return;
        if ("IntersectionObserver" in window) {
          var io = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
              if (entry.isIntersecting) {
                entry.target.classList.add("bims-in");
                io.unobserve(entry.target);
              }
            });
          }, {
            threshold: 0.1,
            rootMargin: "0px 0px -60px 0px"
          });
          els.forEach(function(el) {
            io.observe(el);
          });
        } else {
          els.forEach(function(el) {
            el.classList.add("bims-in");
          });
        }
      }

      function bimsSetupFooterYear() {
        var el = document.getElementById("bims-year");
        if (el) el.textContent = new Date().getFullYear();
      }

      return {
        init: bimsInit
      };
    })();

    if (document.readyState === "loading") {
      document.addEventListener("DOMContentLoaded", bimsHomepage.init);
    } else {
      bimsHomepage.init();
    }
  </script>

  <?php wp_footer(); ?>
</body>

</html>