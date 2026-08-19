<?php

/**
 * Template Name: EduApply — Bahria University
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Bahria University</title>
  <meta name="description" content="Bahria University — a federally chartered public sector university established by the Pakistan Navy, with campuses in Islamabad, Karachi and Lahore." />
  <link rel="shortcut icon" href="https://eduapply.online/wp-content/uploads/2026/08/bu_logo.png" type="image/png">

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

    #bahria-page a {
      color: inherit;
      text-decoration: none;
    }

    #bahria-page button {
      font-family: inherit;
      cursor: pointer;
      border: none;
      background: none;
    }

    #bahria-page ul {
      list-style: none;
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

    #bahria-page .bahria-eyebrow {
      font-family: var(--bahria-font-display);
      font-size: 12px;
      font-weight: 700;
      letter-spacing: 0.1em;
      text-transform: uppercase;
      color: var(--bahria-maroon);
      margin-bottom: 10px;
    }

    #bahria-page .bahria-section-title {
      font-family: var(--bahria-font-display);
      font-weight: 800;
      font-size: clamp(24px, 3.1vw, 36px);
      color: var(--bahria-navy-900);
      line-height: 1.2;
    }

    #bahria-page .bahria-section-sub {
      margin-top: 12px;
      font-size: 15px;
      color: var(--bahria-ink-soft);
      line-height: 1.65;
      max-width: 64ch;
    }

    #bahria-page .bahria-section-head {
      margin-bottom: 38px;
    }

    #bahria-page .bahria-section-head.bahria-center {
      text-align: center;
      max-width: 660px;
      margin-left: auto;
      margin-right: auto;
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

    #bahria-page .bahria-topbar a {
      color: rgba(255, 255, 255, 0.72);
      font-weight: 600;
    }

    #bahria-page .bahria-topbar a:hover {
      color: var(--bahria-gold-bright);
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

    /* ============================================================
   HERO
   ============================================================ */
    #bahria-page .bahria-hero {
      position: relative;
      min-height: 580px;
      display: flex;
      align-items: center;
      overflow: hidden;
    }

    #bahria-page .bahria-hero-media {
      position: absolute;
      inset: 0;
    }

    #bahria-page .bahria-hero-media img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      object-position: center 35%;
    }

    #bahria-page .bahria-hero-media::after {
      content: "";
      position: absolute;
      inset: 0;
      background: linear-gradient(100deg, rgba(5, 32, 48, 0.94) 10%, rgba(11, 53, 80, 0.76) 46%, rgba(11, 53, 80, 0.4) 80%);
    }

    #bahria-page .bahria-hero-content {
      position: relative;
      z-index: 1;
      padding: 88px 0;
    }

    #bahria-page .bahria-hero-kicker {
      font-size: 12.5px;
      font-weight: 700;
      letter-spacing: 0.1em;
      text-transform: uppercase;
      color: var(--bahria-gold-bright);
      margin-bottom: 18px;
    }

    #bahria-page .bahria-hero h1 {
      font-family: var(--bahria-font-display);
      font-weight: 800;
      color: #fff;
      font-size: clamp(30px, 5vw, 52px);
      line-height: 1.12;
      max-width: 15ch;
    }

    #bahria-page .bahria-hero-sub {
      margin-top: 20px;
      font-size: 15.5px;
      line-height: 1.7;
      color: rgba(255, 255, 255, 0.82);
      max-width: 58ch;
    }

    #bahria-page .bahria-hero-actions {
      display: flex;
      gap: 14px;
      margin-top: 32px;
      flex-wrap: wrap;
    }

    /* ============================================================
   VISION / MISSION / RECTOR
   ============================================================ */
    #bahria-page .bahria-vmr {
      padding: 80px 0;
    }

    #bahria-page .bahria-vmr-grid {
      display: grid;
      grid-template-columns: 1fr 1fr 1fr;
      gap: 24px;
    }

    #bahria-page .bahria-vmr-card {
      background: var(--bahria-paper);
      border-radius: 14px;
      padding: 30px 26px;
      display: flex;
      flex-direction: column;
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

    #bahria-page .bahria-vmr-card p {
      font-size: 13.8px;
      line-height: 1.7;
      color: var(--bahria-ink-soft);
      flex: 1;
    }

    #bahria-page .bahria-vmr-card.bahria-rector {
      background: var(--bahria-navy-950);
      color: #fff;
    }

    #bahria-page .bahria-vmr-card.bahria-rector h3 {
      color: var(--bahria-gold-bright);
    }

    #bahria-page .bahria-vmr-card.bahria-rector p {
      color: rgba(255, 255, 255, 0.78);
    }

    #bahria-page .bahria-rector-name {
      margin-top: 14px;
      font-weight: 700;
      font-size: 13.5px;
      color: #fff;
    }

    #bahria-page .bahria-vmr-more {
      margin-top: 14px;
      font-size: 12.5px;
      font-weight: 700;
      color: var(--bahria-maroon);
    }

    #bahria-page .bahria-rector .bahria-vmr-more {
      color: var(--bahria-gold-bright);
    }

    @media (max-width:900px) {
      #bahria-page .bahria-vmr-grid {
        grid-template-columns: 1fr;
      }
    }

    /* ============================================================
   NEWS
   ============================================================ */
    #bahria-page .bahria-news {
      padding: 80px 0;
      background: var(--bahria-paper);
    }

    #bahria-page .bahria-news-track-wrap {
      position: relative;
    }

    #bahria-page .bahria-news-track {
      display: flex;
      gap: 20px;
      overflow-x: auto;
      scroll-snap-type: x mandatory;
      padding-bottom: 8px;
    }

    #bahria-page .bahria-news-card {
      scroll-snap-align: start;
      flex: 0 0 min(280px, 80vw);
      background: #fff;
      border-radius: 12px;
      overflow: hidden;
      box-shadow: var(--bahria-shadow-s);
      transition: transform .3s ease, box-shadow .3s ease;
    }

    #bahria-page .bahria-news-card:hover {
      transform: translateY(-5px);
      box-shadow: var(--bahria-shadow-m);
    }

    #bahria-page .bahria-news-media {
      aspect-ratio: 4/3;
      overflow: hidden;
    }

    #bahria-page .bahria-news-media img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform .5s ease;
    }

    #bahria-page .bahria-news-card:hover .bahria-news-media img {
      transform: scale(1.06);
    }

    #bahria-page .bahria-news-body {
      padding: 16px 18px 20px;
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

    #bahria-page .bahria-read-more {
      font-size: 12px;
      font-weight: 700;
      color: var(--bahria-maroon);
      display: inline-flex;
      align-items: center;
      gap: 6px;
    }

    #bahria-page .bahria-read-more:hover {
      color: var(--bahria-navy-900);
    }

    #bahria-page .bahria-news-controls {
      display: flex;
      justify-content: flex-end;
      gap: 10px;
      margin-top: 16px;
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

    /* ============================================================
   UPCOMING EVENT
   ============================================================ */
    #bahria-page .bahria-event {
      padding: 56px 0;
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

    #bahria-page .bahria-event-date .bahria-day {
      font-size: 26px;
      font-weight: 800;
      line-height: 1;
    }

    #bahria-page .bahria-event-date .bahria-mon {
      font-size: 11px;
      font-weight: 700;
      text-transform: uppercase;
      margin-top: 2px;
    }

    #bahria-page .bahria-event-text {
      flex: 1;
    }

    #bahria-page .bahria-event-text h3 {
      font-family: var(--bahria-font-display);
      font-size: 18px;
      font-weight: 700;
      margin-bottom: 6px;
    }

    #bahria-page .bahria-event-text p {
      font-size: 13px;
      color: rgba(255, 255, 255, 0.68);
    }

    @media (max-width:640px) {
      #bahria-page .bahria-event-card {
        flex-direction: column;
        text-align: center;
      }
    }

    /* ============================================================
   ADMISSIONS
   ============================================================ */
    #bahria-page .bahria-admissions {
      padding: 80px 0;
      background: var(--bahria-navy-950);
      color: #fff;
    }

    #bahria-page .bahria-admissions .bahria-section-head h2,
    #bahria-page .bahria-admissions .bahria-eyebrow {
      color: #fff;
    }

    #bahria-page .bahria-admissions .bahria-section-head p {
      color: rgba(255, 255, 255, 0.62);
    }

    #bahria-page .bahria-admissions .bahria-eyebrow {
      color: var(--bahria-gold-bright);
    }

    #bahria-page .bahria-admissions-grid {
      display: grid;
      grid-template-columns: repeat(5, 1fr);
      gap: 16px;
      margin-bottom: 36px;
    }

    #bahria-page .bahria-adm-card {
      background: rgba(255, 255, 255, 0.06);
      border: 1px solid rgba(255, 255, 255, 0.1);
      border-radius: 12px;
      padding: 26px 18px;
      text-align: center;
      transition: background .25s ease, transform .25s ease;
    }

    #bahria-page .bahria-adm-card:hover {
      background: rgba(255, 255, 255, 0.12);
      transform: translateY(-4px);
    }

    #bahria-page .bahria-adm-icon {
      font-size: 26px;
      margin-bottom: 14px;
    }

    #bahria-page .bahria-adm-card h3 {
      font-family: var(--bahria-font-display);
      font-size: 13.5px;
      font-weight: 700;
    }

    #bahria-page .bahria-admissions-side {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 20px;
    }

    #bahria-page .bahria-adm-feature {
      position: relative;
      border-radius: 12px;
      overflow: hidden;
      min-height: 180px;
      display: flex;
      align-items: flex-end;
    }

    #bahria-page .bahria-adm-feature img {
      position: absolute;
      inset: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    #bahria-page .bahria-adm-feature::after {
      content: "";
      position: absolute;
      inset: 0;
      background: linear-gradient(0deg, rgba(5, 32, 48, 0.9), rgba(5, 32, 48, 0.2));
    }

    #bahria-page .bahria-adm-feature-body {
      position: relative;
      z-index: 1;
      padding: 20px;
    }

    #bahria-page .bahria-adm-feature-body h3 {
      font-family: var(--bahria-font-display);
      font-size: 16px;
      font-weight: 700;
      margin-bottom: 8px;
    }

    #bahria-page .bahria-adm-feature-body a {
      font-size: 12px;
      font-weight: 700;
      color: var(--bahria-gold-bright);
    }

    @media (max-width:980px) {
      #bahria-page .bahria-admissions-grid {
        grid-template-columns: repeat(3, 1fr);
      }
    }

    @media (max-width:640px) {
      #bahria-page .bahria-admissions-grid {
        grid-template-columns: repeat(2, 1fr);
      }

      #bahria-page .bahria-admissions-side {
        grid-template-columns: 1fr;
      }
    }

    /* ============================================================
   WHY BAHRIA — STATS
   ============================================================ */
    #bahria-page .bahria-why {
      padding: 80px 0;
    }

    #bahria-page .bahria-why-grid {
      display: grid;
      grid-template-columns: repeat(7, 1fr);
      gap: 14px;
    }

    #bahria-page .bahria-why-card {
      background: var(--bahria-paper);
      border-radius: 12px;
      padding: 22px 14px;
      text-align: center;
      transition: transform .3s ease, box-shadow .3s ease;
    }

    #bahria-page .bahria-why-card:hover {
      transform: translateY(-5px);
      box-shadow: var(--bahria-shadow-m);
    }

    #bahria-page .bahria-why-num {
      font-family: var(--bahria-font-display);
      font-weight: 800;
      font-size: clamp(18px, 2vw, 24px);
      color: var(--bahria-navy-900);
    }

    #bahria-page .bahria-why-label {
      font-size: 10.5px;
      font-weight: 700;
      color: var(--bahria-ink-soft);
      margin-top: 6px;
      text-transform: uppercase;
      letter-spacing: 0.02em;
      line-height: 1.4;
    }

    @media (max-width:1080px) {
      #bahria-page .bahria-why-grid {
        grid-template-columns: repeat(4, 1fr);
      }
    }

    @media (max-width:640px) {
      #bahria-page .bahria-why-grid {
        grid-template-columns: repeat(2, 1fr);
      }
    }

    /* ============================================================
   ACADEMICS
   ============================================================ */
    #bahria-page .bahria-academics {
      padding: 80px 0;
      background: var(--bahria-paper);
    }

    #bahria-page .bahria-academics-grid {
      display: grid;
      grid-template-columns: repeat(5, 1fr);
      gap: 18px;
    }

    #bahria-page .bahria-ac-card {
      background: #fff;
      border-radius: 12px;
      overflow: hidden;
      box-shadow: var(--bahria-shadow-s);
      transition: transform .3s ease, box-shadow .3s ease;
    }

    #bahria-page .bahria-ac-card:hover {
      transform: translateY(-6px);
      box-shadow: var(--bahria-shadow-m);
    }

    #bahria-page .bahria-ac-media {
      aspect-ratio: 4/3;
      overflow: hidden;
    }

    #bahria-page .bahria-ac-media img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform .5s ease;
    }

    #bahria-page .bahria-ac-card:hover .bahria-ac-media img {
      transform: scale(1.07);
    }

    #bahria-page .bahria-ac-body {
      padding: 16px 16px 20px;
    }

    #bahria-page .bahria-ac-body h3 {
      font-family: var(--bahria-font-display);
      font-size: 14px;
      font-weight: 700;
      color: var(--bahria-navy-900);
      margin-bottom: 8px;
      line-height: 1.35;
    }

    #bahria-page .bahria-ac-body p {
      font-size: 12px;
      color: var(--bahria-ink-soft);
      line-height: 1.55;
    }

    @media (max-width:1080px) {
      #bahria-page .bahria-academics-grid {
        grid-template-columns: repeat(3, 1fr);
      }
    }

    @media (max-width:640px) {
      #bahria-page .bahria-academics-grid {
        grid-template-columns: repeat(2, 1fr);
      }
    }

    @media (max-width:420px) {
      #bahria-page .bahria-academics-grid {
        grid-template-columns: 1fr;
        max-width: 300px;
        margin: 0 auto;
      }
    }

    /* ============================================================
   CAMPUSES
   ============================================================ */
    #bahria-page .bahria-campuses {
      padding: 80px 0;
    }

    #bahria-page .bahria-campuses-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 18px;
    }

    #bahria-page .bahria-campus-card {
      position: relative;
      border-radius: 12px;
      overflow: hidden;
      aspect-ratio: 4/3;
      box-shadow: var(--bahria-shadow-s);
    }

    #bahria-page .bahria-campus-card img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform .5s ease;
    }

    #bahria-page .bahria-campus-card:hover img {
      transform: scale(1.08);
    }

    #bahria-page .bahria-campus-card::after {
      content: "";
      position: absolute;
      inset: 0;
      background: linear-gradient(180deg, rgba(5, 32, 48, 0.05) 40%, rgba(5, 32, 48, 0.88) 100%);
    }

    #bahria-page .bahria-campus-name {
      position: absolute;
      left: 14px;
      right: 14px;
      bottom: 14px;
      z-index: 1;
      color: #fff;
      font-family: var(--bahria-font-display);
      font-size: 13.5px;
      font-weight: 700;
      line-height: 1.35;
    }

    @media (max-width:900px) {
      #bahria-page .bahria-campuses-grid {
        grid-template-columns: repeat(2, 1fr);
      }
    }

    @media (max-width:480px) {
      #bahria-page .bahria-campuses-grid {
        grid-template-columns: 1fr;
        max-width: 340px;
        margin: 0 auto;
      }
    }

    /* ============================================================
   RESEARCH
   ============================================================ */
    #bahria-page .bahria-research {
      padding: 80px 0;
      background: var(--bahria-navy-950);
      color: #fff;
    }

    #bahria-page .bahria-research .bahria-section-head h2,
    #bahria-page .bahria-research .bahria-eyebrow {
      color: #fff;
    }

    #bahria-page .bahria-research .bahria-section-head p {
      color: rgba(255, 255, 255, 0.62);
    }

    #bahria-page .bahria-research .bahria-eyebrow {
      color: var(--bahria-gold-bright);
    }

    #bahria-page .bahria-research-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 18px;
    }

    #bahria-page .bahria-rs-card {
      position: relative;
      border-radius: 12px;
      overflow: hidden;
      min-height: 200px;
      display: flex;
      align-items: flex-end;
    }

    #bahria-page .bahria-rs-card img {
      position: absolute;
      inset: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform .5s ease;
    }

    #bahria-page .bahria-rs-card:hover img {
      transform: scale(1.08);
    }

    #bahria-page .bahria-rs-card::after {
      content: "";
      position: absolute;
      inset: 0;
      background: linear-gradient(0deg, rgba(5, 32, 48, 0.92), rgba(5, 32, 48, 0.25));
    }

    #bahria-page .bahria-rs-body {
      position: relative;
      z-index: 1;
      padding: 20px;
    }

    #bahria-page .bahria-rs-body h3 {
      font-family: var(--bahria-font-display);
      font-size: 14.5px;
      font-weight: 700;
      margin-bottom: 8px;
      line-height: 1.3;
    }

    #bahria-page .bahria-rs-body p {
      font-size: 11.5px;
      color: rgba(255, 255, 255, 0.68);
      line-height: 1.5;
    }

    @media (max-width:980px) {
      #bahria-page .bahria-research-grid {
        grid-template-columns: repeat(2, 1fr);
      }
    }

    @media (max-width:480px) {
      #bahria-page .bahria-research-grid {
        grid-template-columns: 1fr;
      }
    }

    /* ============================================================
   FACILITIES
   ============================================================ */
    #bahria-page .bahria-facilities {
      padding: 80px 0;
    }

    #bahria-page .bahria-facilities-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 20px;
      margin-bottom: 56px;
    }

    #bahria-page .bahria-fac-card {
      position: relative;
      border-radius: 12px;
      overflow: hidden;
      min-height: 220px;
      display: flex;
      align-items: flex-end;
      box-shadow: var(--bahria-shadow-s);
    }

    #bahria-page .bahria-fac-card img {
      position: absolute;
      inset: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform .5s ease;
    }

    #bahria-page .bahria-fac-card:hover img {
      transform: scale(1.08);
    }

    #bahria-page .bahria-fac-card::after {
      content: "";
      position: absolute;
      inset: 0;
      background: linear-gradient(0deg, rgba(5, 32, 48, 0.88), rgba(5, 32, 48, 0.15));
    }

    #bahria-page .bahria-fac-name {
      position: relative;
      z-index: 1;
      padding: 20px;
      color: #fff;
      font-family: var(--bahria-font-display);
      font-size: 16px;
      font-weight: 700;
    }

    @media (max-width:760px) {
      #bahria-page .bahria-facilities-grid {
        grid-template-columns: 1fr;
      }
    }

    #bahria-page .bahria-support-label {
      font-family: var(--bahria-font-display);
      font-size: 13px;
      font-weight: 700;
      letter-spacing: 0.08em;
      text-transform: uppercase;
      color: var(--bahria-maroon);
      margin-bottom: 20px;
    }

    #bahria-page .bahria-support-grid {
      display: grid;
      grid-template-columns: repeat(7, 1fr);
      gap: 14px;
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

    #bahria-page .bahria-support-item img {
      width: 32px;
      height: 32px;
      object-fit: contain;
    }

    #bahria-page .bahria-support-item:hover {
      background: var(--bahria-navy-900);
      color: #fff;
    }

    @media (max-width:980px) {
      #bahria-page .bahria-support-grid {
        grid-template-columns: repeat(4, 1fr);
      }
    }

    @media (max-width:560px) {
      #bahria-page .bahria-support-grid {
        grid-template-columns: repeat(2, 1fr);
      }
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

    #bahria-page .bahria-locations {
      padding: 40px 0;
      border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    }

    #bahria-page .bahria-locations-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 20px;
    }

    #bahria-page .bahria-loc-card h6 {
      font-family: var(--bahria-font-display);
      font-size: 13px;
      font-weight: 700;
      color: var(--bahria-gold-bright);
      margin-bottom: 8px;
    }

    #bahria-page .bahria-loc-card p {
      font-size: 12.5px;
      color: rgba(255, 255, 255, 0.6);
      line-height: 1.6;
    }

    @media (max-width:980px) {
      #bahria-page .bahria-locations-grid {
        grid-template-columns: repeat(2, 1fr);
      }
    }

    @media (max-width:520px) {
      #bahria-page .bahria-locations-grid {
        grid-template-columns: 1fr;
      }
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

    #bahria-page .bahria-reveal {
      opacity: 0;
      transform: translateY(20px);
      transition: opacity .6s ease, transform .6s ease;
    }

    #bahria-page .bahria-reveal.bahria-in {
      opacity: 1;
      transform: translateY(0);
    }

    /* ============================================================
   ADMISSION INQUIRY MODAL
   ============================================================ */
    #bahria-page .bahria-modal-overlay {
      position: fixed;
      inset: 0;
      z-index: 2000;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 20px;
      background: rgba(5, 32, 48, 0.62);
      backdrop-filter: blur(4px);
      opacity: 0;
      visibility: hidden;
      transition: opacity .25s ease, visibility .25s ease;
    }

    #bahria-page .bahria-modal-overlay.bahria-modal-open {
      opacity: 1;
      visibility: visible;
    }

    #bahria-page .bahria-modal-panel {
      position: relative;
      width: 100%;
      max-width: 560px;
      max-height: 90vh;
      overflow-y: auto;
      background: #fff;
      border-radius: 16px;
      box-shadow: var(--bahria-shadow-l);
      padding: clamp(26px, 4vw, 40px);
      transform: translateY(16px);
      transition: transform .25s ease;
    }

    #bahria-page .bahria-modal-overlay.bahria-modal-open .bahria-modal-panel {
      transform: translateY(0);
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

    #bahria-page .bahria-modal-close:hover {
      background: var(--bahria-paper-dim);
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

    #bahria-page .bahria-modal-sub {
      margin-top: 8px;
      font-size: 13.5px;
      color: var(--bahria-ink-soft);
      line-height: 1.55;
    }

    #bahria-page .bahria-modal-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 14px 16px;
      margin-bottom: 18px;
    }

    #bahria-page .bahria-modal-grid .bahria-mfield.bahria-full {
      grid-column: 1/-1;
    }

    #bahria-page .bahria-mfield {
      display: flex;
      flex-direction: column;
      gap: 6px;
    }

    #bahria-page .bahria-mfield label {
      font-size: 13px;
      font-weight: 700;
      color: var(--bahria-navy-900);
    }

    #bahria-page .bahria-mfield input,
    #bahria-page .bahria-mfield textarea {
      border: 1.5px solid var(--bahria-paper-dim);
      border-radius: 8px;
      padding: 11px 13px;
      font-family: inherit;
      font-size: 14px;
      color: var(--bahria-ink);
      background: var(--bahria-paper);
      width: 100%;
    }

    #bahria-page .bahria-mfield input:focus,
    #bahria-page .bahria-mfield textarea:focus {
      outline: none;
      border-color: var(--bahria-gold);
      background: #fff;
    }

    #bahria-page .bahria-mfield textarea {
      resize: vertical;
      min-height: 80px;
    }

    #bahria-page .bahria-mfield.bahria-merror input,
    #bahria-page .bahria-mfield.bahria-merror textarea {
      border-color: #C1443C;
      background: #FDF3F2;
    }

    #bahria-page .bahria-mfield-error {
      font-size: 12px;
      color: #C1443C;
      min-height: 14px;
      display: none;
    }

    #bahria-page .bahria-mfield.bahria-merror .bahria-mfield-error {
      display: block;
    }

    #bahria-page .bahria-modal-note {
      font-size: 12px;
      color: var(--bahria-ink-soft);
      margin-top: 14px;
      text-align: center;
    }

    @media (max-width:480px) {
      #bahria-page .bahria-modal-grid {
        grid-template-columns: 1fr;
      }
    }

    /* ============================================================
   PROGRAM/DEPARTMENT MULTI-STEP MODAL
   (Fee Structure → Application Form → Confirmation, submitted via email)
   ============================================================ */
    #bahria-page .bahria-dept-overlay {
      position: fixed;
      inset: 0;
      z-index: 2100;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 20px;
      background: rgba(5, 32, 48, 0.65);
      backdrop-filter: blur(4px);
      opacity: 0;
      visibility: hidden;
      transition: opacity .25s ease, visibility .25s ease;
    }

    #bahria-page .bahria-dept-overlay.bahria-dept-open {
      opacity: 1;
      visibility: visible;
    }

    #bahria-page .bahria-dept-panel {
      position: relative;
      width: 100%;
      max-width: 600px;
      max-height: 90vh;
      overflow-y: auto;
      background: #fff;
      border-radius: 16px;
      box-shadow: var(--bahria-shadow-l);
      padding: clamp(26px, 4vw, 40px);
      transform: translateY(16px);
      transition: transform .25s ease;
    }

    #bahria-page .bahria-dept-overlay.bahria-dept-open .bahria-dept-panel {
      transform: translateY(0);
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

    #bahria-page .bahria-dept-close:hover {
      background: var(--bahria-paper-dim);
    }

    #bahria-page .bahria-dept-steps {
      display: flex;
      align-items: center;
      gap: 8px;
      margin-bottom: 22px;
      padding-right: 30px;
    }

    #bahria-page .bahria-dept-step-dot {
      display: flex;
      align-items: center;
      gap: 8px;
      font-size: 11px;
      font-weight: 600;
      color: var(--bahria-ink-soft);
    }

    #bahria-page .bahria-dept-step-dot .bahria-num {
      width: 24px;
      height: 24px;
      border-radius: 50%;
      background: var(--bahria-paper-dim);
      color: var(--bahria-ink-soft);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 11px;
      font-weight: 700;
      transition: background .2s ease, color .2s ease;
    }

    #bahria-page .bahria-dept-step-dot.bahria-dept-step-active .bahria-num {
      background: var(--bahria-gold);
      color: var(--bahria-navy-950);
    }

    #bahria-page .bahria-dept-step-dot.bahria-dept-step-done .bahria-num {
      background: var(--bahria-maroon);
      color: #fff;
    }

    #bahria-page .bahria-dept-step-line {
      flex: 1;
      height: 1px;
      background: var(--bahria-paper-dim);
    }

    #bahria-page .bahria-dept-view {
      display: none;
    }

    #bahria-page .bahria-dept-view.bahria-dept-view-active {
      display: block;
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

    #bahria-page .bahria-dept-fee-note {
      font-size: 13px;
      line-height: 1.65;
      color: var(--bahria-ink-soft);
      background: var(--bahria-paper);
      border-left: 3px solid var(--bahria-gold);
      border-radius: 0 8px 8px 0;
      padding: 14px 16px;
      margin-bottom: 18px;
    }

    #bahria-page .bahria-dept-fee-table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 22px;
      border: 1px solid var(--bahria-paper-dim);
      border-radius: 10px;
      overflow: hidden;
    }

    #bahria-page .bahria-dept-fee-table tr {
      border-bottom: 1px solid var(--bahria-paper-dim);
    }

    #bahria-page .bahria-dept-fee-table tr:last-child {
      border-bottom: none;
    }

    #bahria-page .bahria-dept-fee-table td {
      padding: 12px 16px;
      font-size: 13.5px;
    }

    #bahria-page .bahria-dept-fee-table td:first-child {
      font-weight: 600;
      color: var(--bahria-navy-900);
      width: 55%;
    }

    #bahria-page .bahria-dept-fee-table td:last-child {
      color: var(--bahria-ink-soft);
      text-align: right;
    }

    #bahria-page .bahria-dept-fee-actions {
      display: flex;
      gap: 12px;
      flex-wrap: wrap;
    }

    #bahria-page .bahria-dept-form-actions {
      display: flex;
      gap: 12px;
      margin-top: 6px;
    }

    #bahria-page .bahria-dept-form-actions .bahria-btn {
      flex: 1;
      justify-content: center;
    }

    #bahria-page .bahria-dept-confirm {
      text-align: center;
      padding: 10px 0 4px;
    }

    #bahria-page .bahria-dept-confirm .bahria-check {
      width: 60px;
      height: 60px;
      border-radius: 50%;
      background: rgba(122, 31, 43, 0.08);
      color: var(--bahria-maroon);
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto 18px;
    }

    #bahria-page .bahria-dept-confirm h3 {
      font-family: var(--bahria-font-display);
      font-size: 22px;
      font-weight: 800;
      color: var(--bahria-navy-900);
      margin-bottom: 10px;
    }

    #bahria-page .bahria-dept-confirm p {
      font-size: 13.5px;
      color: var(--bahria-ink-soft);
      line-height: 1.65;
      max-width: 42ch;
      margin: 0 auto 18px;
    }

    #bahria-page .bahria-dept-confirm-summary {
      background: var(--bahria-paper);
      border-radius: 10px;
      padding: 16px 18px;
      text-align: left;
      margin-bottom: 20px;
      font-size: 13px;
      line-height: 1.9;
    }

    #bahria-page .bahria-dept-confirm-summary strong {
      color: var(--bahria-navy-900);
    }

    #bahria-page .bahria-dept-fallback {
      font-size: 12px;
      color: var(--bahria-ink-soft);
      margin-top: 4px;
    }

    /* ============================================================
   NOTIFICATION BAR
   ============================================================ */
    #bahria-page .bahria-notify-bar {
      background: var(--bahria-gold);
      color: var(--bahria-navy-950);
    }

    #bahria-page .bahria-notify-inner {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 14px;
      flex-wrap: wrap;
      padding: 9px 0;
    }

    #bahria-page .bahria-notify-items {
      display: flex;
      flex-wrap: wrap;
      gap: 18px;
    }

    #bahria-page .bahria-notify-item {
      display: inline-flex;
      align-items: center;
      gap: 7px;
      font-size: 12.5px;
      font-weight: 700;
    }

    #bahria-page .bahria-notify-item strong {
      font-weight: 800;
    }

    #bahria-page .bahria-notify-apply {
      flex-shrink: 0;
      background: var(--bahria-maroon);
      color: #fff;
      font-size: 12px;
      font-weight: 700;
      padding: 8px 18px;
      border-radius: 999px;
      transition: background .2s ease, transform .2s ease;
    }

    #bahria-page .bahria-notify-apply:hover {
      background: #5f1622;
      transform: translateY(-1px);
    }

    @media (max-width:640px) {
      #bahria-page .bahria-notify-inner {
        justify-content: center;
        text-align: center;
      }

      #bahria-page .bahria-notify-items {
        justify-content: center;
        gap: 10px 16px;
      }
    }

    /* ============================================================
   QUICK APPLY MODAL (single-step, submitted via email)
   ============================================================ */
    #bahria-page .bahria-qa-overlay {
      position: fixed;
      inset: 0;
      z-index: 2200;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 20px;
      background: rgba(5, 32, 48, 0.68);
      backdrop-filter: blur(4px);
      opacity: 0;
      visibility: hidden;
      transition: opacity .25s ease, visibility .25s ease;
    }

    #bahria-page .bahria-qa-overlay.bahria-qa-open {
      opacity: 1;
      visibility: visible;
    }

    #bahria-page .bahria-qa-panel {
      position: relative;
      width: 100%;
      max-width: 540px;
      max-height: 90vh;
      overflow-y: auto;
      background: #fff;
      border-radius: 16px;
      box-shadow: var(--bahria-shadow-l);
      padding: clamp(26px, 4vw, 40px);
      transform: translateY(16px);
      transition: transform .25s ease;
    }

    #bahria-page .bahria-qa-overlay.bahria-qa-open .bahria-qa-panel {
      transform: translateY(0);
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

    #bahria-page .bahria-qa-close:hover {
      background: var(--bahria-paper-dim);
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

    #bahria-page .bahria-qa-view {
      display: none;
    }

    #bahria-page .bahria-qa-view.bahria-qa-view-active {
      display: block;
    }

    #bahria-page .bahria-qa-confirm {
      text-align: center;
      padding: 10px 0 4px;
    }

    #bahria-page .bahria-qa-confirm .bahria-check {
      width: 56px;
      height: 56px;
      border-radius: 50%;
      background: rgba(122, 31, 43, 0.08);
      color: var(--bahria-maroon);
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto 18px;
    }

    #bahria-page .bahria-qa-confirm h3 {
      font-family: var(--bahria-font-display);
      font-size: 21px;
      font-weight: 800;
      color: var(--bahria-navy-900);
      margin-bottom: 10px;
    }

    #bahria-page .bahria-qa-confirm p {
      font-size: 13.5px;
      color: var(--bahria-ink-soft);
      line-height: 1.65;
      max-width: 40ch;
      margin: 0 auto 6px;
    }

    #bahria-page .bahria-qa-confirm-summary {
      background: var(--bahria-paper);
      border-radius: 10px;
      padding: 16px 18px;
      text-align: left;
      margin: 16px 0;
      font-size: 13px;
      line-height: 1.85;
    }

    #bahria-page .bahria-qa-confirm-summary strong {
      color: var(--bahria-navy-900);
    }

    /* ---- Step indicator ---- */
    #bahria-page .bahria-qa-steps {
      display: flex;
      align-items: center;
      gap: 6px;
      margin-bottom: 22px;
      padding-right: 30px;
      flex-wrap: wrap;
    }

    #bahria-page .bahria-qa-step-dot {
      display: flex;
      align-items: center;
      gap: 6px;
      font-size: 10.5px;
      font-weight: 600;
      color: var(--bahria-ink-soft);
    }

    #bahria-page .bahria-qa-num {
      width: 22px;
      height: 22px;
      border-radius: 50%;
      background: var(--bahria-paper-dim);
      color: var(--bahria-ink-soft);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 10.5px;
      font-weight: 700;
      transition: background .2s ease, color .2s ease;
    }

    #bahria-page .bahria-qa-step-dot.bahria-qa-step-active .bahria-qa-num {
      background: var(--bahria-gold);
      color: var(--bahria-navy-950);
    }

    #bahria-page .bahria-qa-step-dot.bahria-qa-step-done .bahria-qa-num {
      background: var(--bahria-maroon);
      color: #fff;
    }

    #bahria-page .bahria-qa-step-line {
      width: 14px;
      height: 1px;
      background: var(--bahria-paper-dim);
    }

    /* ---- Step 1: program list ---- */
    #bahria-page .bahria-qa-program-list {
      display: flex;
      flex-direction: column;
      gap: 9px;
      max-height: 340px;
      overflow-y: auto;
      margin-bottom: 20px;
      padding-right: 2px;
    }

    #bahria-page .bahria-qa-program-opt {
      display: flex;
      align-items: center;
      gap: 12px;
      padding: 13px 16px;
      border: 1.5px solid var(--bahria-paper-dim);
      border-radius: 10px;
      cursor: pointer;
      transition: border-color .2s ease, background .2s ease;
    }

    #bahria-page .bahria-qa-program-opt:hover {
      border-color: var(--bahria-maroon);
    }

    #bahria-page .bahria-qa-program-opt.bahria-qa-selected {
      border-color: var(--bahria-maroon);
      background: rgba(122, 31, 43, 0.05);
    }

    #bahria-page .bahria-qa-program-opt input {
      width: 17px;
      height: 17px;
      accent-color: var(--bahria-maroon);
      flex-shrink: 0;
    }

    #bahria-page .bahria-qa-program-opt span {
      font-size: 13.5px;
      font-weight: 600;
      color: var(--bahria-navy-900);
    }

    /* ---- Step 2: fee options ---- */
    #bahria-page .bahria-qa-fee-note {
      font-size: 12.5px;
      line-height: 1.6;
      color: var(--bahria-ink-soft);
      background: var(--bahria-paper);
      border-left: 3px solid var(--bahria-gold);
      border-radius: 0 8px 8px 0;
      padding: 12px 14px;
      margin-bottom: 18px;
    }

    #bahria-page .bahria-qa-fee-options {
      display: flex;
      flex-direction: column;
      gap: 10px;
      margin-bottom: 22px;
    }

    #bahria-page .bahria-qa-fee-opt {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 12px;
      padding: 14px 16px;
      border: 1.5px solid var(--bahria-paper-dim);
      border-radius: 10px;
      cursor: pointer;
      transition: border-color .2s ease, background .2s ease;
    }

    #bahria-page .bahria-qa-fee-opt:hover {
      border-color: var(--bahria-maroon);
    }

    #bahria-page .bahria-qa-fee-opt.bahria-qa-selected {
      border-color: var(--bahria-maroon);
      background: rgba(122, 31, 43, 0.05);
    }

    #bahria-page .bahria-qa-fee-opt-left {
      display: flex;
      align-items: center;
      gap: 12px;
    }

    #bahria-page .bahria-qa-fee-opt input {
      width: 17px;
      height: 17px;
      accent-color: var(--bahria-maroon);
      flex-shrink: 0;
    }

    #bahria-page .bahria-qa-fee-opt-title {
      font-size: 13.5px;
      font-weight: 700;
      color: var(--bahria-navy-900);
    }

    #bahria-page .bahria-qa-fee-opt-amount {
      font-size: 11px;
      color: var(--bahria-ink-soft);
      text-align: right;
    }

    /* ---- Form action row (shared by steps 2 & 3) ---- */
    #bahria-page .bahria-qa-form-actions {
      display: flex;
      gap: 12px;
      margin-top: 6px;
    }

    #bahria-page .bahria-qa-form-actions .bahria-btn {
      flex: 1;
      justify-content: center;
    }

    #bahria-page .bahria-qa-view [disabled] {
      opacity: 0.55;
      cursor: not-allowed;
    }


    /* ============================================================
   ANNOUNCEMENT POPUP (floating card, screenshot style)
   ============================================================ */
    #bahria-page .bahria-announce {
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      z-index: 1500;
      width: min(420px, calc(100vw - 40px));
      background: #fff;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: var(--bahria-shadow-l);
      opacity: 1;
      transition: opacity .3s ease, transform .3s ease;
    }

    #bahria-page .bahria-announce.bahria-hidden {
      opacity: 0;
      transform: translate(-50%, -50%) scale(0.96);
      pointer-events: none;
    }

    #bahria-page .bahria-announce-header {
      display: flex;
      align-items: center;
      gap: 10px;
      background: var(--bahria-navy-950);
      color: #fff;
      padding: 14px 16px;
    }

    #bahria-page .bahria-announce-icon {
      flex-shrink: 0;
      font-size: 15px;
      transform: rotate(-15deg);
    }

    #bahria-page .bahria-announce-label {
      flex: 1;
      font-family: var(--bahria-font-display);
      font-weight: 800;
      font-size: 13px;
      letter-spacing: 0.04em;
      text-transform: uppercase;
    }

    #bahria-page .bahria-announce-close {
      flex-shrink: 0;
      font-size: 18px;
      line-height: 1;
      color: rgba(255, 255, 255, 0.75);
      padding: 2px 4px;
      transition: color .2s ease;
    }

    #bahria-page .bahria-announce-close:hover {
      color: #fff;
    }

    #bahria-page .bahria-announce-body {
      padding: 16px 18px 18px;
    }

    #bahria-page .bahria-announce-body ul {
      display: flex;
      flex-direction: column;
      gap: 10px;
    }

    #bahria-page .bahria-announce-body li {
      position: relative;
      padding-left: 16px;
      font-size: 13.5px;
      line-height: 1.5;
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

    #bahria-page .bahria-announce-body li a:hover {
      color: var(--bahria-maroon);
    }

    #bahria-page .bahria-announce-extra {
      margin-top: 14px;
    }

    #bahria-page .bahria-announce-extra img {
      width: 100%;
      border-radius: 8px;
      display: block;
    }

    #bahria-page .bahria-announce-extra p {
      font-size: 12.5px;
      color: var(--bahria-ink-soft);
      line-height: 1.55;
    }

    @media (max-width:640px) {
      #bahria-page .bahria-announce {
        width: calc(100vw - 32px);
      }
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

    #bahria-page .bahria-announce-overlay.bahria-announce-overlay-open {
      opacity: 1;
      visibility: visible;
    }
  </style>
  <?php wp_head(); ?>
</head>

<body>
  <div id="bahria-page">

    <!-- ============================================================
     TOP UTILITY BAR
     ============================================================ -->
    <div class="bahria-topbar">
      <div class="bahria-container">
        <a href="#">ODL</a>
        <a href="#">Students</a>
        <a href="#">Alumni</a>
        <a href="#">Sustainability</a>
        <a href="#">QA</a>
        <a href="#">Careers</a>
        <a href="#">Downloads</a>
        <a href="#">Webmail</a>
      </div>
    </div>

    <!-- ============================================================
     NOTIFICATION BAR (admission dates + quick Apply Now)
     ============================================================ -->
    <div class="bahria-notify-bar" id="bahria-notify-bar">
      <div class="bahria-container bahria-notify-inner">
        <div class="bahria-notify-items">
          <span class="bahria-notify-item"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <rect x="3" y="5" width="18" height="16" rx="2" />
              <path d="M8 3v4M16 3v4M3 10h18" />
            </svg> Last Date to Apply: <strong id="bahria-notify-lastdate"></strong></span>
          <span class="bahria-notify-item"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M9 11l3 3L22 4" />
              <path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11" />
            </svg> Entry Test: <strong id="bahria-notify-entrytest"></strong></span>
        </div>
        <button type="button" class="bahria-notify-apply bahria-quickapply-trigger">Apply Now</button>
      </div>
    </div>

    <!-- ============================================================
     HEADER
     ============================================================ -->
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

    <!-- ============================================================
     HERO
     ============================================================ -->
    <section class="bahria-hero" id="bahria-about">
      <div class="bahria-hero-media">
        <!-- TODO: replace with official Bahria University photography — dummy stock placeholder for now -->
        <img src="https://eduapply.online/wp-content/uploads/2026/08/homebg1.webp?auto=format&fit=crop&w=1920&q=75" alt="Placeholder campus image — replace with official Bahria University photography">
      </div>
      <div class="bahria-container bahria-hero-content">
        <p class="bahria-hero-kicker">Discover Bahria University</p>
        <h1>Welcome to Bahria University</h1>
        <p class="bahria-hero-sub">A federally chartered public sector university established by the Pakistan Navy in 2000, Bahria has grown steadily into one of Pakistan's leading higher education institutions.</p>
        <div class="bahria-hero-actions">
          <a href="#" class="bahria-btn bahria-btn-maroon">Learn More</a>
        </div>
      </div>
    </section>

    <!-- ============================================================
     VISION / MISSION / RECTOR
     ============================================================ -->
    <section class="bahria-vmr">
      <div class="bahria-container">
        <div class="bahria-vmr-grid bahria-reveal">
          <div class="bahria-vmr-card">
            <h3>Vision</h3>
            <p>Bahria aims to grow into an international university driven by knowledge and creativity, contributing meaningfully to the development of society.</p>
          </div>
          <div class="bahria-vmr-card">
            <h3>Mission</h3>
            <p>The university works to ensure academic excellence through quality education and applied research, in a collegiate environment with strong industry and international ties, to meet social challenges.</p>
          </div>
          <div class="bahria-vmr-card bahria-rector">
            <h3>Rector's Message</h3>
            <p>Bahria's vision, in the Rector's words, is to nurture future leaders through quality education, impactful research, and a strong commitment to character building.</p>
            <p class="bahria-rector-name">Vice Admiral Abid Hameed HI(M)</p>
            <a href="#" class="bahria-vmr-more">Read More →</a>
          </div>
        </div>
      </div>
    </section>

    <!-- ============================================================
     STAY UPDATED — NEWS
     ============================================================ -->
    <section class="bahria-news">
      <div class="bahria-container">
        <div class="bahria-section-head bahria-reveal">
          <p class="bahria-eyebrow">Stay Updated</p>
          <h2 class="bahria-section-title">University Pulse: Bahria News</h2>
        </div>

        <!-- News images/titles below are sourced directly from the live "Stay
         Updated" feed on bahria.edu.pk. -->
        <div class="bahria-news-track-wrap bahria-reveal">
          <div class="bahria-news-track" id="bahria-news-track">
            <a href="#" class="bahria-news-card">
              <div class="bahria-news-media"><img src="https://www.bahria.edu.pk/Content/images/content_photos/fbfffb29-5913-478d-9130-f5a896f1ce0c.png" alt="Bahria University Merit List" loading="lazy"></div>
              <div class="bahria-news-body">
                <h3>Bahria University Merit List</h3><span class="bahria-read-more">Read More →</span>
              </div>
            </a>
            <a href="#" class="bahria-news-card">
              <div class="bahria-news-media"><img src="https://www.bahria.edu.pk/Content/images/content_photos/4423937b-2f3e-41cf-9ed9-1bdfec50e050.png" alt="International Summer School on Business Skills" loading="lazy"></div>
              <div class="bahria-news-body">
                <h3>International Summer School on Business Skills</h3><span class="bahria-read-more">Read More →</span>
              </div>
            </a>
            <a href="#" class="bahria-news-card">
              <div class="bahria-news-media"><img src="https://www.bahria.edu.pk/Content/images/content_photos/841ac6d6-bb75-4258-a363-4954bb2a068f.png" alt="MS(PM) students visit JIC project site" loading="lazy"></div>
              <div class="bahria-news-body">
                <h3>MS(PM) Students Visit JIC Project Site for Experiential Learning</h3><span class="bahria-read-more">Read More →</span>
              </div>
            </a>
            <a href="#" class="bahria-news-card">
              <div class="bahria-news-media"><img src="https://www.bahria.edu.pk/Content/images/content_photos/bc96e03c-5821-40d4-9976-52dcb0fd08c8.png" alt="BU-KITCC partnership for Thalassemia awareness" loading="lazy"></div>
              <div class="bahria-news-body">
                <h3>BU–KITCC Partnership for Thalassemia Awareness and Social Impact</h3><span class="bahria-read-more">Read More →</span>
              </div>
            </a>
            <a href="#" class="bahria-news-card">
              <div class="bahria-news-media"><img src="https://www.bahria.edu.pk/Content/images/content_photos/4e18cf60-879e-49cb-a3a5-ce0132721531.png" alt="Building a responsible information environment in Pakistan" loading="lazy"></div>
              <div class="bahria-news-body">
                <h3>Building a Responsible Information Environment in Pakistan</h3><span class="bahria-read-more">Read More →</span>
              </div>
            </a>
            <a href="#" class="bahria-news-card">
              <div class="bahria-news-media"><img src="https://www.bahria.edu.pk/Content/images/content_photos/74d20c00-0b2f-417f-a0ad-f5dc6e26aa5d.png" alt="Bahria University hosts Bangladeshi academic delegation" loading="lazy"></div>
              <div class="bahria-news-body">
                <h3>Bahria University Hosts Bangladeshi Academic Delegation</h3><span class="bahria-read-more">Read More →</span>
              </div>
            </a>
            <a href="#" class="bahria-news-card">
              <div class="bahria-news-media"><img src="https://www.bahria.edu.pk/Content/images/content_photos/c3e5f964-bd0c-4604-9892-242c972d8aee.png" alt="Establishment of Huawei ICT Academy at Bahria University" loading="lazy"></div>
              <div class="bahria-news-body">
                <h3>Establishment of Huawei ICT Academy Through Strategic Industry Partnerships</h3><span class="bahria-read-more">Read More →</span>
              </div>
            </a>
            <a href="#" class="bahria-news-card">
              <div class="bahria-news-media"><img src="https://www.bahria.edu.pk/Content/images/content_photos/3ea43d95-09b1-46dc-a6e7-b1290eabdce8.png" alt="Industrial visit to NRTC Haripur" loading="lazy"></div>
              <div class="bahria-news-body">
                <h3>Industrial Visit to NRTC Haripur</h3><span class="bahria-read-more">Read More →</span>
              </div>
            </a>
          </div>
        </div>

        <div class="bahria-news-controls bahria-reveal">
          <button type="button" id="bahria-news-prev" aria-label="Scroll news left"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4">
              <path d="M15 18l-6-6 6-6" />
            </svg></button>
          <button type="button" id="bahria-news-next" aria-label="Scroll news right"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4">
              <path d="M9 18l6-6-6-6" />
            </svg></button>
        </div>
      </div>
    </section>

    <!-- ============================================================
     UPCOMING EVENT
     ============================================================ -->
    <section class="bahria-event">
      <div class="bahria-container">
        <div class="bahria-section-head bahria-reveal">
          <p class="bahria-eyebrow">Upcoming</p>
          <h2 class="bahria-section-title">Mark Your Calendar</h2>
        </div>
        <a href="#" class="bahria-event-card bahria-reveal">
          <span class="bahria-event-date"><span class="bahria-day">18</span><span class="bahria-mon">Aug</span></span>
          <span class="bahria-event-text">
            <h3>Workshop on Developing Medical and Health Sciences Entrepreneurs</h3>
            <p>Read more for the full event details and registration information.</p>
          </span>
        </a>
      </div>
    </section>

    <!-- ============================================================
     ADMISSIONS
     ============================================================ -->
    <section class="bahria-admissions" id="bahria-admissions">
      <div class="bahria-container">
        <div class="bahria-section-head bahria-reveal">
          <p class="bahria-eyebrow">Admissions</p>
          <h2 class="bahria-section-title">Your Path to Excellence Starts Here</h2>
        </div>

        <div class="bahria-admissions-grid bahria-reveal">
          <a href="#" class="bahria-adm-card bahria-admission-trigger" data-bahria-program="Undergraduate"><span class="bahria-adm-icon">🎓</span>
            <h3>Undergraduate</h3>
          </a>
          <a href="#" class="bahria-adm-card bahria-admission-trigger" data-bahria-program="Masters"><span class="bahria-adm-icon">🎓</span>
            <h3>Masters</h3>
          </a>
          <a href="#" class="bahria-adm-card bahria-admission-trigger" data-bahria-program="PhD"><span class="bahria-adm-icon">🎓</span>
            <h3>PhD</h3>
          </a>
          <a href="#" class="bahria-adm-card bahria-admission-trigger" data-bahria-program="LifeLong Learning"><span class="bahria-adm-icon">🎓</span>
            <h3>LifeLong Learning</h3>
          </a>
          <a href="#" class="bahria-adm-card bahria-admission-trigger" data-bahria-program="Open &amp; Distance Learning (ODL)"><span class="bahria-adm-icon">🎓</span>
            <h3>Open &amp; Distance Learning (ODL)</h3>
          </a>
        </div>

        <div class="bahria-admissions-side bahria-reveal">
          <a href="#" class="bahria-adm-feature">
            <img src="https://www.bahria.edu.pk/Content/images/main/scholorships/scholorship.jpg" alt="Bahria University scholarships">
            <span class="bahria-adm-feature-body">
              <h3>Scholarships</h3><a href="#">Admission Plan – Fall 2026 →</a>
            </span>
          </a>
          <a href="#" class="bahria-adm-feature">
            <img src="https://www.bahria.edu.pk/Content/images/main/scholorships/international_students.jpg" alt="International students at Bahria University">
            <span class="bahria-adm-feature-body">
              <h3>International Students</h3><a href="#">Explore International Office →</a>
            </span>
          </a>
        </div>
      </div>
    </section>

    <!-- ============================================================
     WHY BAHRIA — STATS
     ============================================================ -->
    <section class="bahria-why">
      <div class="bahria-container">
        <div class="bahria-section-head bahria-center bahria-reveal">
          <p class="bahria-eyebrow">Why Bahria University?</p>
          <h2 class="bahria-section-title">Discovering Excellence, Innovation &amp; Your Path to Success</h2>
        </div>

        <div class="bahria-why-grid bahria-reveal">
          <div class="bahria-why-card">
            <div class="bahria-why-num">130+</div>
            <div class="bahria-why-label">Programmes in 3 Cities</div>
          </div>
          <div class="bahria-why-card">
            <div class="bahria-why-num">55,000+</div>
            <div class="bahria-why-label">Successful Alumni</div>
          </div>
          <div class="bahria-why-card">
            <div class="bahria-why-num">75+</div>
            <div class="bahria-why-label">International Linkages</div>
          </div>
          <div class="bahria-why-card">
            <div class="bahria-why-num">21,000+</div>
            <div class="bahria-why-label">Students Enrolled</div>
          </div>
          <div class="bahria-why-card">
            <div class="bahria-why-num">PKR 535M+</div>
            <div class="bahria-why-label">Scholarships Granted</div>
          </div>
          <div class="bahria-why-card">
            <div class="bahria-why-num">Top 2%</div>
            <div class="bahria-why-label">Scientists in the World</div>
          </div>
          <div class="bahria-why-card">
            <div class="bahria-why-num">Ranked</div>
            <div class="bahria-why-label">Top Ranked University</div>
          </div>
        </div>
      </div>
    </section>

    <!-- ============================================================
     ACADEMICS
     ============================================================ -->
    <section class="bahria-academics" id="bahria-academics">
      <div class="bahria-container">
        <div class="bahria-section-head bahria-reveal">
          <p class="bahria-eyebrow">Academics</p>
          <h2 class="bahria-section-title">From BS to PhD and Beyond</h2>
        </div>

        <div class="bahria-academics-grid bahria-reveal">
          <a href="#" class="bahria-ac-card bahria-dept-trigger">
            <div class="bahria-ac-media"><img src="https://www.bahria.edu.pk/Content/images/main/academics/1.jpg" alt="Undergraduate Programmes" loading="lazy"></div>
            <div class="bahria-ac-body">
              <h3>Undergraduate Programmes</h3>
              <p>A strong academic foundation, practical skills and industry-relevant experience for real-world careers.</p>
            </div>
          </a>
          <a href="#" class="bahria-ac-card bahria-dept-trigger">
            <div class="bahria-ac-media"><img src="https://www.bahria.edu.pk/Content/images/main/academics/2.jpg" alt="Graduate Programmes" loading="lazy"></div>
            <div class="bahria-ac-body">
              <h3>Graduate Programmes</h3>
              <p>Expertise across Engineering, Humanities, Medical Sciences and IT, with a research and industry focus.</p>
            </div>
          </a>
          <a href="#" class="bahria-ac-card bahria-dept-trigger">
            <div class="bahria-ac-media"><img src="https://www.bahria.edu.pk/Content/images/main/academics/3.jpg" alt="PhD Programmes" loading="lazy"></div>
            <div class="bahria-ac-body">
              <h3>PhD Programmes</h3>
              <p>Rigorous research and critical inquiry preparing scholars for academia, industry and global growth.</p>
            </div>
          </a>
          <a href="#" class="bahria-ac-card bahria-dept-trigger">
            <div class="bahria-ac-media"><img src="https://www.bahria.edu.pk/Content/images/main/academics/4.jpg" alt="LifeLong Learning" loading="lazy"></div>
            <div class="bahria-ac-body">
              <h3>LifeLong Learning</h3>
              <p>Flexible diploma programmes that help professionals upskill and stay adaptable.</p>
            </div>
          </a>
          <a href="#" class="bahria-ac-card bahria-dept-trigger">
            <div class="bahria-ac-media"><img src="https://www.bahria.edu.pk/Content/images/main/academics/5.PNG" alt="Open and Distance Learning" loading="lazy"></div>
            <div class="bahria-ac-body">
              <h3>Open &amp; Distance Learning</h3>
              <p>Flexible, technology-driven education accessible anytime, anywhere.</p>
            </div>
          </a>
        </div>
      </div>
    </section>

    <!-- ============================================================
     BU CAMPUSES
     ============================================================ -->
    <section class="bahria-campuses" id="bahria-campuses">
      <div class="bahria-container">
        <div class="bahria-section-head bahria-reveal">
          <p class="bahria-eyebrow">BU Campuses</p>
          <h2 class="bahria-section-title">Top-Tier Education in Pakistan's Metropolitan Hubs</h2>
        </div>

        <div class="bahria-campuses-grid bahria-reveal">
          <a href="#" class="bahria-campus-card"><img src="https://www.bahria.edu.pk/Content/images/main/campuses/1.jpg" alt="Bahria University E-8, Islamabad" loading="lazy"><span class="bahria-campus-name">Bahria University E-8, Islamabad</span></a>
          <a href="#" class="bahria-campus-card"><img src="https://www.bahria.edu.pk/Content/images/main/campuses/2.jpg" alt="Bahria University H-11, Islamabad" loading="lazy"><span class="bahria-campus-name">Bahria University H-11, Islamabad</span></a>
          <a href="#" class="bahria-campus-card"><img src="https://www.bahria.edu.pk/Content/images/main/campuses/3.jpg" alt="Bahria University, Karachi" loading="lazy"><span class="bahria-campus-name">Bahria University, Karachi</span></a>
          <a href="#" class="bahria-campus-card"><img src="https://www.bahria.edu.pk/Content/images/main/campuses/4.jpg" alt="Institute of Professional Psychology, Karachi" loading="lazy"><span class="bahria-campus-name">Institute of Professional Psychology, Karachi</span></a>
          <a href="#" class="bahria-campus-card"><img src="https://www.bahria.edu.pk/Content/images/main/campuses/5.jpg" alt="Bahria University, Lahore" loading="lazy"><span class="bahria-campus-name">Bahria University, Lahore</span></a>
          <a href="#" class="bahria-campus-card"><img src="https://www.bahria.edu.pk/Content/images/main/campuses/6.jpg" alt="Bahria University Health Sciences, Islamabad" loading="lazy"><span class="bahria-campus-name">Bahria University Health Sciences, Islamabad</span></a>
          <a href="#" class="bahria-campus-card"><img src="https://www.bahria.edu.pk/Content/images/main/campuses/7.jpg" alt="Bahria University Health Sciences, Karachi" loading="lazy"><span class="bahria-campus-name">Bahria University Health Sciences, Karachi</span></a>
        </div>
      </div>
    </section>

    <!-- ============================================================
     RESEARCH, INNOVATION & COMMERCIALIZATION
     ============================================================ -->
    <section class="bahria-research" id="bahria-research">
      <div class="bahria-container">
        <div class="bahria-section-head bahria-reveal">
          <p class="bahria-eyebrow">Research, Innovation &amp; Commercialization</p>
          <h2 class="bahria-section-title">Transforming Ideas into Impact</h2>
        </div>

        <div class="bahria-research-grid bahria-reveal">
          <a href="#" class="bahria-rs-card">
            <img src="https://www.bahria.edu.pk/Content/images/content_photos/1522b40f-ce53-4e1a-a9fd-9d560b9418c4.png" alt="Center of Research Excellence - Climate Finance" loading="lazy">
            <span class="bahria-rs-body">
              <h3>Center of Research Excellence — Climate Finance</h3>
              <p>Climate finance, carbon management, ESG &amp; sustainable transformation.</p>
            </span>
          </a>
          <a href="#" class="bahria-rs-card">
            <img src="https://www.bahria.edu.pk/Content/images/content_photos/72b681b8-7fa1-41a4-b9fc-30e4806f8f54.jpg" alt="Bahria Innovative Sciences and Technologies" loading="lazy">
            <span class="bahria-rs-body">
              <h3>Bahria Innovative Sciences &amp; Technologies</h3>
              <p>Advancing scientific breakthroughs for a smarter tomorrow.</p>
            </span>
          </a>
          <a href="#" class="bahria-rs-card">
            <img src="https://www.bahria.edu.pk/Content/images/content_photos/40b87f89-e38c-43f8-8584-16cde67d06fe.jpg" alt="Research Innovation and Commercialization" loading="lazy">
            <span class="bahria-rs-body">
              <h3>Research Innovation &amp; Commercialization</h3>
              <p>Bridging research with market-driven success.</p>
            </span>
          </a>
          <a href="#" class="bahria-rs-card">
            <img src="https://www.bahria.edu.pk/Content/images/content_photos/c7eb3eca-de6c-432c-b411-b30e571bbf02.jpg" alt="Excellence in Artificial Intelligence" loading="lazy">
            <span class="bahria-rs-body">
              <h3>Excellence in Artificial Intelligence</h3>
              <p>Shaping the future of AI with innovation &amp; expertise.</p>
            </span>
          </a>
          <a href="#" class="bahria-rs-card">
            <img src="https://www.bahria.edu.pk/Content/images/content_photos/0ffbd2fd-c65a-4b31-8a1c-0316349590dc.jpg" alt="National Institute of Maritime Affairs" loading="lazy">
            <span class="bahria-rs-body">
              <h3>National Institute of Maritime Affairs</h3>
              <p>Leading maritime policy and strategic research.</p>
            </span>
          </a>
          <a href="#" class="bahria-rs-card">
            <img src="https://www.bahria.edu.pk/Content/images/content_photos/3dd91fa9-a0f1-4a63-9bf5-b7a881c1f0f6.jpg" alt="Maritime Science and Technology Park" loading="lazy">
            <span class="bahria-rs-body">
              <h3>Maritime Science &amp; Technology Park</h3>
              <p>A hub for maritime innovation &amp; blue-economy growth.</p>
            </span>
          </a>
          <a href="#" class="bahria-rs-card">
            <img src="https://www.bahria.edu.pk/Content/images/content_photos/ebd721a4-b464-4e80-bcfa-2330e0e612f6.jpg" alt="Business Incubation Center" loading="lazy">
            <span class="bahria-rs-body">
              <h3>Business Incubation Center</h3>
              <p>Empowering startups and shaping entrepreneurial success.</p>
            </span>
          </a>
        </div>
      </div>
    </section>

    <!-- ============================================================
     FACILITIES
     ============================================================ -->
    <section class="bahria-facilities">
      <div class="bahria-container">
        <div class="bahria-section-head bahria-reveal">
          <p class="bahria-eyebrow">Facilities</p>
          <h2 class="bahria-section-title">Bahria's Vibrant Student Life &amp; Campus Facilities</h2>
        </div>

        <div class="bahria-facilities-grid bahria-reveal">
          <a href="#" class="bahria-fac-card">
            <img src="https://www.bahria.edu.pk/Content/images/content_photos/73de654e-d9e0-431c-8c8f-3835e4a17807.jpg" alt="Student Clubs" loading="lazy">
            <span class="bahria-fac-name">Student Clubs</span>
          </a>
          <a href="#" class="bahria-fac-card">
            <img src="https://www.bahria.edu.pk/Content/images/content_photos/b3950b7d-f6d5-4a7e-8d6d-f354fdd9eea2.jpg" alt="Career Advisory" loading="lazy">
            <span class="bahria-fac-name">Career Advisory</span>
          </a>
          <a href="#" class="bahria-fac-card">
            <img src="https://www.bahria.edu.pk/Content/images/content_photos/87ea0a0c-ab56-4229-816f-6e57a443937a.jpg" alt="Sports" loading="lazy">
            <span class="bahria-fac-name">Sports</span>
          </a>
        </div>

        <p class="bahria-support-label bahria-reveal">Support Centers</p>
        <div class="bahria-support-grid bahria-reveal">
          <a href="#" class="bahria-support-item"><img src="https://www.bahria.edu.pk/Content/images/main/support_center/1.png" alt="" loading="lazy">Pak-China Study &amp; Research Center</a>
          <a href="#" class="bahria-support-item"><img src="https://www.bahria.edu.pk/Content/images/main/support_center/3.png" alt="" loading="lazy">Advancement</a>
          <a href="#" class="bahria-support-item"><img src="https://www.bahria.edu.pk/Content/images/main/support_center/5.png" alt="" loading="lazy">Admissions Office</a>
          <a href="#" class="bahria-support-item"><img src="https://www.bahria.edu.pk/Content/images/main/support_center/7.png" alt="" loading="lazy">Library</a>
          <a href="#" class="bahria-support-item"><img src="https://www.bahria.edu.pk/Content/images/main/support_center/2.png" alt="" loading="lazy">Leadership &amp; Professional Development</a>
          <a href="#" class="bahria-support-item"><img src="https://www.bahria.edu.pk/Content/images/main/support_center/4.png" alt="" loading="lazy">Umeed-e-Nau</a>
          <a href="#" class="bahria-support-item"><img src="https://www.bahria.edu.pk/Content/images/main/support_center/6.png" alt="" loading="lazy">Student Affairs</a>
        </div>
      </div>
    </section>

    <!-- ============================================================
     FOOTER
     ============================================================ -->
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

    <!-- ============================================================
     ADMISSION INQUIRY MODAL
     ============================================================ -->
    <div class="bahria-modal-overlay" id="bahria-admission-modal" role="dialog" aria-modal="true" aria-labelledby="bahria-modal-title" aria-hidden="true">
      <div class="bahria-modal-panel">
        <button type="button" class="bahria-modal-close" id="bahria-modal-close" aria-label="Close admission inquiry form">&times;</button>
        <div class="bahria-modal-header">
          <p class="bahria-eyebrow">Admissions</p>
          <h3 id="bahria-modal-title">Bahria University Admission Inquiry</h3>
          <p class="bahria-modal-sub">Share your details and we'll open WhatsApp with your inquiry ready to send to Bahria admissions.</p>
        </div>

        <form id="bahria-admission-form" novalidate>
          <div class="bahria-modal-grid">
            <div class="bahria-mfield bahria-full" data-bahria-field="name">
              <label for="bahria-adm-name">Full Name</label>
              <input type="text" id="bahria-adm-name" name="name" placeholder="e.g. Ayesha Khan" autocomplete="name">
              <span class="bahria-mfield-error">Please enter your full name.</span>
            </div>
            <div class="bahria-mfield" data-bahria-field="phone">
              <label for="bahria-adm-phone">Phone / WhatsApp Number</label>
              <input type="tel" id="bahria-adm-phone" name="phone" placeholder="03XX XXXXXXX" autocomplete="tel">
              <span class="bahria-mfield-error">Please enter a valid phone number.</span>
            </div>
            <div class="bahria-mfield" data-bahria-field="email">
              <label for="bahria-adm-email">Email <span style="font-weight:500; color:var(--bahria-ink-soft);">(optional)</span></label>
              <input type="email" id="bahria-adm-email" name="email" placeholder="you@example.com" autocomplete="email">
              <span class="bahria-mfield-error">Please enter a valid email address.</span>
            </div>
            <div class="bahria-mfield" data-bahria-field="city">
              <label for="bahria-adm-city">City</label>
              <input type="text" id="bahria-adm-city" name="city" placeholder="e.g. Islamabad" autocomplete="address-level2">
            </div>
            <div class="bahria-mfield" data-bahria-field="campus">
              <label for="bahria-adm-campus">Preferred Campus <span style="font-weight:500; color:var(--bahria-ink-soft);">(optional)</span></label>
              <input type="text" id="bahria-adm-campus" name="campus" placeholder="e.g. Islamabad, Karachi, Lahore...">
            </div>
            <div class="bahria-mfield bahria-full" data-bahria-field="program">
              <label for="bahria-adm-program">Program of Interest</label>
              <input type="text" id="bahria-adm-program" name="program" placeholder="e.g. Undergraduate — Computer Science">
              <span class="bahria-mfield-error">Please tell us which program you're interested in.</span>
            </div>
            <div class="bahria-mfield bahria-full">
              <label for="bahria-adm-message">Message <span style="font-weight:500; color:var(--bahria-ink-soft);">(optional)</span></label>
              <textarea id="bahria-adm-message" name="message" placeholder="Anything else you'd like us to know?"></textarea>
            </div>
          </div>
          <button type="submit" class="bahria-btn bahria-btn-maroon bahria-btn-block" id="bahria-adm-submit">Send via WhatsApp</button>
          <p class="bahria-modal-note">This opens WhatsApp with your details pre-filled. No data is stored by this page.</p>
        </form>
      </div>
    </div>

    <!-- ============================================================
     PROGRAM/DEPARTMENT MULTI-STEP MODAL
     (Fee Structure → Application Form → Confirmation)
     ============================================================ -->
    <div class="bahria-dept-overlay" id="bahria-dept-modal" role="dialog" aria-modal="true" aria-labelledby="bahria-dept-title" aria-hidden="true">
      <div class="bahria-dept-panel">
        <button type="button" class="bahria-dept-close" id="bahria-dept-close" aria-label="Close">&times;</button>

        <div class="bahria-dept-steps" aria-hidden="true">
          <span class="bahria-dept-step-dot bahria-dept-step-active" data-bahria-dept-dot="1"><span class="bahria-num">1</span> Fee Structure</span>
          <span class="bahria-dept-step-line"></span>
          <span class="bahria-dept-step-dot" data-bahria-dept-dot="2"><span class="bahria-num">2</span> Application</span>
          <span class="bahria-dept-step-line"></span>
          <span class="bahria-dept-step-dot" data-bahria-dept-dot="3"><span class="bahria-num">3</span> Confirmation</span>
        </div>

        <div class="bahria-dept-view bahria-dept-view-active" data-bahria-dept-view="1">
          <span class="bahria-dept-program-tag" id="bahria-dept-tag-1"></span>
          <div class="bahria-dept-header">
            <h3 id="bahria-dept-title">Fee Structure</h3>
            <p>A general overview before you apply. Bahria University updates its fee structure each academic year.</p>
          </div>
          <p class="bahria-dept-fee-note">Exact tuition, admission and other fees are set and published by Bahria University and can change between intakes. Please confirm current figures on Bahria's fee structure page or directly with the admissions office before applying.</p>
          <table class="bahria-dept-fee-table">
            <tr>
              <td>Tuition Fee</td>
              <td>Confirm with Bahria University</td>
            </tr>
            <tr>
              <td>Admission / Processing Fee</td>
              <td>Confirm with Bahria University</td>
            </tr>
            <tr>
              <td>Security Deposit</td>
              <td>Confirm with Bahria University</td>
            </tr>
            <tr>
              <td>Scholarships &amp; Financial Aid</td>
              <td>Ask admissions office</td>
            </tr>
          </table>
          <div class="bahria-dept-fee-actions">
            <a href="#" class="bahria-btn bahria-btn-outline-navy">View Fee Structure</a>
            <button type="button" class="bahria-btn bahria-btn-maroon" id="bahria-dept-to-step2">Continue to Application</button>
          </div>
        </div>

        <div class="bahria-dept-view" data-bahria-dept-view="2">
          <span class="bahria-dept-program-tag" id="bahria-dept-tag-2"></span>
          <div class="bahria-dept-header">
            <h3>Application Details</h3>
            <p>Share your details and this opens your email app with your application ready to send.</p>
          </div>
          <form id="bahria-dept-form" novalidate>
            <div class="bahria-modal-grid">
              <div class="bahria-mfield bahria-full" data-bahria-dfield="name">
                <label for="bahria-dept-name">Full Name</label>
                <input type="text" id="bahria-dept-name" name="name" placeholder="e.g. Ayesha Khan" autocomplete="name">
                <span class="bahria-mfield-error">Please enter your full name.</span>
              </div>
              <div class="bahria-mfield" data-bahria-dfield="phone">
                <label for="bahria-dept-phone">Phone</label>
                <input type="tel" id="bahria-dept-phone" name="phone" placeholder="03XX XXXXXXX" autocomplete="tel">
                <span class="bahria-mfield-error">Please enter a valid phone number.</span>
              </div>
              <div class="bahria-mfield" data-bahria-dfield="email">
                <label for="bahria-dept-email">Email</label>
                <input type="email" id="bahria-dept-email" name="email" placeholder="you@example.com" autocomplete="email">
                <span class="bahria-mfield-error">Please enter a valid email address.</span>
              </div>
              <div class="bahria-mfield bahria-full" data-bahria-dfield="city">
                <label for="bahria-dept-city">City</label>
                <input type="text" id="bahria-dept-city" name="city" placeholder="e.g. Islamabad" autocomplete="address-level2">
              </div>
              <div class="bahria-mfield bahria-full">
                <label for="bahria-dept-message">Message <span style="font-weight:500; color:var(--bahria-ink-soft);">(optional)</span></label>
                <textarea id="bahria-dept-message" name="message" placeholder="Anything else you'd like us to know?"></textarea>
              </div>
            </div>
            <div class="bahria-dept-form-actions">
              <button type="button" class="bahria-btn bahria-btn-outline-navy" id="bahria-dept-back-step1">Back</button>
              <button type="submit" class="bahria-btn bahria-btn-maroon" id="bahria-dept-submit">Submit Application</button>
            </div>
          </form>
        </div>

        <div class="bahria-dept-view" data-bahria-dept-view="3">
          <div class="bahria-dept-confirm">
            <div class="bahria-check"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
                <path d="M5 13l4 4L19 7" />
              </svg></div>
            <h3>Application Ready to Send</h3>
            <p>Your email app should now open with your application pre-filled. If it didn't open automatically, use the email address below to send it yourself.</p>
            <div class="bahria-dept-confirm-summary" id="bahria-dept-summary"></div>
            <p class="bahria-dept-fallback" id="bahria-dept-fallback-email"></p>
            <button type="button" class="bahria-btn bahria-btn-outline-navy" id="bahria-dept-done">Close</button>
          </div>
        </div>

      </div>
    </div>

    <!-- ============================================================
     QUICK APPLY MODAL (4-step: Program → Fee Structure → Application → Confirmation)
     ============================================================ -->
    <div class="bahria-qa-overlay" id="bahria-qa-modal" role="dialog" aria-modal="true" aria-labelledby="bahria-qa-title" aria-hidden="true">
      <div class="bahria-qa-panel">
        <button type="button" class="bahria-qa-close" id="bahria-qa-close" aria-label="Close">&times;</button>

        <div class="bahria-qa-steps" aria-hidden="true">
          <span class="bahria-qa-step-dot bahria-qa-step-active" data-bahria-qa-dot="program"><span class="bahria-qa-num">1</span> Program</span>
          <span class="bahria-qa-step-line"></span>
          <span class="bahria-qa-step-dot" data-bahria-qa-dot="fee"><span class="bahria-qa-num">2</span> Fee</span>
          <span class="bahria-qa-step-line"></span>
          <span class="bahria-qa-step-dot" data-bahria-qa-dot="form"><span class="bahria-qa-num">3</span> Application</span>
          <span class="bahria-qa-step-line"></span>
          <span class="bahria-qa-step-dot" data-bahria-qa-dot="confirm"><span class="bahria-qa-num">4</span> Confirmation</span>
        </div>

        <!-- STEP 1: SELECT PROGRAM -->
        <div class="bahria-qa-view bahria-qa-view-active" data-bahria-qa-view="program">
          <div class="bahria-qa-header">
            <h3 id="bahria-qa-title">Select a Program</h3>
            <p>Choose the Bahria University study level you'd like to apply to.</p>
          </div>
          <div class="bahria-qa-program-list" id="bahria-qa-program-list" role="radiogroup" aria-label="Select a program"></div>
          <button type="button" class="bahria-btn bahria-btn-maroon bahria-btn-block" id="bahria-qa-to-fee" disabled>Continue to Fee Structure</button>
        </div>

        <!-- STEP 2: FEE STRUCTURE -->
        <div class="bahria-qa-view" data-bahria-qa-view="fee">
          <div class="bahria-qa-header">
            <h3>Fee Structure</h3>
            <p id="bahria-qa-fee-program-label"></p>
          </div>
          <p class="bahria-qa-fee-note">Exact fees are set and published by Bahria University and can change between intakes. Select your seat category below — confirm the exact amount with Bahria admissions before applying.</p>
          <div class="bahria-qa-fee-options" id="bahria-qa-fee-options" role="radiogroup" aria-label="Select your fee category"></div>
          <div class="bahria-qa-form-actions">
            <button type="button" class="bahria-btn bahria-btn-outline-navy" id="bahria-qa-back-program">Back</button>
            <button type="button" class="bahria-btn bahria-btn-maroon" id="bahria-qa-to-form" disabled>Continue to Application</button>
          </div>
        </div>

        <!-- STEP 3: APPLICATION FORM -->
        <div class="bahria-qa-view" data-bahria-qa-view="form">
          <div class="bahria-qa-header">
            <h3>Application Details</h3>
            <p>Fill in your details below. Your application is sent directly by email to our admissions team.</p>
          </div>
          <form id="bahria-qa-form" novalidate>
            <div class="bahria-modal-grid">
              <div class="bahria-mfield" data-bahria-qafield="name">
                <label for="bahria-qa-name">Full Name</label>
                <input type="text" id="bahria-qa-name" name="name" placeholder="e.g. Ayesha Khan" autocomplete="name">
                <span class="bahria-mfield-error">Please enter your full name.</span>
              </div>
              <div class="bahria-mfield" data-bahria-qafield="father">
                <label for="bahria-qa-father">Father's Name</label>
                <input type="text" id="bahria-qa-father" name="father" placeholder="e.g. Muhammad Khan" autocomplete="off">
                <span class="bahria-mfield-error">Please enter your father's name.</span>
              </div>
              <div class="bahria-mfield" data-bahria-qafield="cnic">
                <label for="bahria-qa-cnic">CNIC / B-Form Number</label>
                <input type="text" id="bahria-qa-cnic" name="cnic" placeholder="XXXXX-XXXXXXX-X" autocomplete="off">
                <span class="bahria-mfield-error">Please enter your CNIC or B-Form number.</span>
              </div>
              <div class="bahria-mfield" data-bahria-qafield="phone">
                <label for="bahria-qa-phone">Phone</label>
                <input type="tel" id="bahria-qa-phone" name="phone" placeholder="03XX XXXXXXX" autocomplete="tel">
                <span class="bahria-mfield-error">Please enter a valid phone number.</span>
              </div>
              <div class="bahria-mfield" data-bahria-qafield="email">
                <label for="bahria-qa-email">Email</label>
                <input type="email" id="bahria-qa-email" name="email" placeholder="you@example.com" autocomplete="email">
                <span class="bahria-mfield-error">Please enter a valid email address.</span>
              </div>
              <div class="bahria-mfield" data-bahria-qafield="city">
                <label for="bahria-qa-city">City</label>
                <input type="text" id="bahria-qa-city" name="city" placeholder="e.g. Islamabad" autocomplete="address-level2">
                <span class="bahria-mfield-error">Please enter your city.</span>
              </div>
              <div class="bahria-mfield" data-bahria-qafield="matricRoll">
                <label for="bahria-qa-matric-roll">Matriculation Roll Number</label>
                <input type="text" id="bahria-qa-matric-roll" name="matricRoll" placeholder="e.g. 123456" autocomplete="off">
                <span class="bahria-mfield-error">Please enter your matriculation roll number.</span>
              </div>
              <div class="bahria-mfield" data-bahria-qafield="matricPct">
                <label for="bahria-qa-matric-pct">Matriculation Percentage</label>
                <input type="text" id="bahria-qa-matric-pct" name="matricPct" placeholder="e.g. 85%" autocomplete="off">
                <span class="bahria-mfield-error">Please enter your matriculation percentage.</span>
              </div>
              <div class="bahria-mfield" data-bahria-qafield="interRoll">
                <label for="bahria-qa-inter-roll">Intermediate Roll Number</label>
                <input type="text" id="bahria-qa-inter-roll" name="interRoll" placeholder="e.g. 654321" autocomplete="off">
                <span class="bahria-mfield-error">Please enter your intermediate roll number.</span>
              </div>
              <div class="bahria-mfield" data-bahria-qafield="interPct">
                <label for="bahria-qa-inter-pct">Intermediate Percentage</label>
                <input type="text" id="bahria-qa-inter-pct" name="interPct" placeholder="e.g. 78%" autocomplete="off">
                <span class="bahria-mfield-error">Please enter your intermediate percentage.</span>
              </div>
              <div class="bahria-mfield bahria-full">
                <label for="bahria-qa-message">Message <span style="font-weight:500; color:var(--bahria-ink-soft);">(optional)</span></label>
                <textarea id="bahria-qa-message" name="message" placeholder="Anything else you'd like us to know?"></textarea>
              </div>
            </div>
            <div class="bahria-qa-form-actions">
              <button type="button" class="bahria-btn bahria-btn-outline-navy" id="bahria-qa-back-fee">Back</button>
              <button type="submit" class="bahria-btn bahria-btn-maroon" id="bahria-qa-submit">Submit Application</button>
            </div>
          </form>
        </div>

        <!-- STEP 4: CONFIRMATION -->
        <div class="bahria-qa-view" data-bahria-qa-view="confirm">
          <div class="bahria-qa-confirm">
            <div class="bahria-check"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
                <path d="M5 13l4 4L19 7" />
              </svg></div>
            <h3>Application Sent</h3>
            <p>Your email app should now open with your application pre-filled and addressed to info@eduapply.online. If it didn't open automatically, please send your details there directly.</p>
            <div class="bahria-qa-confirm-summary" id="bahria-qa-confirm-summary"></div>
            <button type="button" class="bahria-btn bahria-btn-outline-navy" id="bahria-qa-done" style="margin-top:16px;">Close</button>
          </div>
        </div>
      </div>
    </div>

    <!-- ============================================================
     ANNOUNCEMENT POPUP
     ============================================================ -->
    <div class="bahria-announce-overlay" id="bahria-announce-overlay"></div>

    <div class="bahria-announce" id="bahria-announce">
      <div class="bahria-announce-header">
        <span class="bahria-announce-icon">📢</span>
        <span class="bahria-announce-label">Important Announcement</span>
        <button class="bahria-announce-close" id="bahria-announce-close" aria-label="Dismiss announcement">&times;</button>
      </div>
      <div class="bahria-announce-body">
        <ul>
          <li><a href="#">Sindh Educational Endowment Fund (SEEF) Trust scholarship applications are open for Academic Year 2025–2026</a></li>
        </ul>
        <!-- Optional: image or extra text goes here -->
        <!--
    <div class="bahria-announce-extra">
      <img src="https://eduapply.online/wp-content/uploads/2026/08/example.jpg" alt="">
    </div>
    -->
      </div>
    </div>

  </div><!-- /#bahria-page -->

  <script>
    var bahriaHomepage = (function() {
      "use strict";

      function bahriaInit() {
        bahriaSetupMobileNav();
        bahriaSetupAnnouncement();
        bahriaSetupSmoothScroll();
        bahriaSetupNewsControls();
        bahriaSetupScrollReveal();
        bahriaSetupFooterYear();
        bahriaSetupAdmissionModal();
        bahriaSetupDeptModal();
        bahriaSetupNotifyBar();
        bahriaSetupQuickApply();
        bahriaSetupWelcomePopup();
      }

      /* ============================================================
         ADMISSION DATES — configurable placeholder until Bahria supplies
         verified dates.
         ============================================================ */
      // TODO: replace with Bahria University's verified admission dates.
      var bahriaAdmissionInfo = {
        lastDateToApply: "Contact Admissions Office for Current Dates",
        entryTestDate: "Contact Admissions Office for Current Dates"
      };
      var bahriaQuickApplyEmail = "info@eduapply.online";
      var bahriaQuickApplyBound = false;
      var bahriaQaSelectedProgram = null;
      var bahriaQaSelectedFee = null;

      // Real Bahria study levels, matching the "Admissions" section on this page.
      var bahriaPrograms = [
        "Undergraduate",
        "Masters",
        "PhD",
        "LifeLong Learning",
        "Open & Distance Learning (ODL)"
      ];
      // Generic, non-fabricated fee categories used across Pakistani university
      // admissions. No specific amounts are shown — only Bahria admissions can
      // confirm exact figures.
      var bahriaFeeCategories = [{
          key: "regular",
          title: "Regular / Merit Seat",
          amount: "Confirm with Bahria"
        },
        {
          key: "selffinance",
          title: "Self-Finance Seat",
          amount: "Confirm with Bahria"
        }
      ];

      function bahriaSetupNotifyBar() {
        var lastDateEl = document.getElementById("bahria-notify-lastdate");
        var entryTestEl = document.getElementById("bahria-notify-entrytest");
        if (lastDateEl) lastDateEl.textContent = bahriaAdmissionInfo.lastDateToApply;
        if (entryTestEl) entryTestEl.textContent = bahriaAdmissionInfo.entryTestDate;
      }

      /* ---------- QUICK APPLY MODAL (4-step: Program → Fee → Application → Confirmation) ---------- */
      function bahriaQuickApplyGoTo(view) {
        document.querySelectorAll("#bahria-page .bahria-qa-view").forEach(function(v) {
          v.classList.toggle("bahria-qa-view-active", v.getAttribute("data-bahria-qa-view") === view);
        });
        document.querySelectorAll("#bahria-page .bahria-qa-step-dot").forEach(function(dot) {
          var order = ["program", "fee", "form", "confirm"];
          var dotStep = dot.getAttribute("data-bahria-qa-dot");
          dot.classList.toggle("bahria-qa-step-active", dotStep === view);
          dot.classList.toggle("bahria-qa-step-done", order.indexOf(dotStep) < order.indexOf(view));
        });
      }

      function bahriaRenderProgramList() {
        var list = document.getElementById("bahria-qa-program-list");
        if (!list) return;
        list.innerHTML = bahriaPrograms.map(function(p, i) {
          return '<label class="bahria-qa-program-opt" data-bahria-qa-program="' + i + '">' +
            '<input type="radio" name="bahriaQaProgram" value="' + i + '">' +
            '<span>' + p + '</span></label>';
        }).join("");

        list.querySelectorAll(".bahria-qa-program-opt").forEach(function(opt) {
          opt.addEventListener("click", function() {
            list.querySelectorAll(".bahria-qa-program-opt").forEach(function(o) {
              o.classList.remove("bahria-qa-selected");
            });
            opt.classList.add("bahria-qa-selected");
            opt.querySelector("input").checked = true;
            bahriaQaSelectedProgram = bahriaPrograms[parseInt(opt.getAttribute("data-bahria-qa-program"), 10)];
            var toFeeBtn = document.getElementById("bahria-qa-to-fee");
            if (toFeeBtn) toFeeBtn.disabled = false;
          });
        });
      }

      function bahriaRenderFeeOptions() {
        var wrap = document.getElementById("bahria-qa-fee-options");
        var label = document.getElementById("bahria-qa-fee-program-label");
        if (label) label.textContent = bahriaQaSelectedProgram || "";
        if (!wrap) return;
        wrap.innerHTML = bahriaFeeCategories.map(function(f, i) {
          return '<label class="bahria-qa-fee-opt" data-bahria-qa-fee="' + i + '">' +
            '<span class="bahria-qa-fee-opt-left"><input type="radio" name="bahriaQaFee" value="' + i + '"><span class="bahria-qa-fee-opt-title">' + f.title + '</span></span>' +
            '<span class="bahria-qa-fee-opt-amount">' + f.amount + '</span></label>';
        }).join("");

        wrap.querySelectorAll(".bahria-qa-fee-opt").forEach(function(opt) {
          opt.addEventListener("click", function() {
            wrap.querySelectorAll(".bahria-qa-fee-opt").forEach(function(o) {
              o.classList.remove("bahria-qa-selected");
            });
            opt.classList.add("bahria-qa-selected");
            opt.querySelector("input").checked = true;
            bahriaQaSelectedFee = bahriaFeeCategories[parseInt(opt.getAttribute("data-bahria-qa-fee"), 10)].title;
            var toFormBtn = document.getElementById("bahria-qa-to-form");
            if (toFormBtn) toFormBtn.disabled = false;
          });
        });
      }

      function bahriaOpenQuickApply() {
        var overlay = document.getElementById("bahria-qa-modal");
        if (!overlay) return;
        var form = document.getElementById("bahria-qa-form");
        if (form) form.reset();
        document.querySelectorAll("#bahria-qa-form .bahria-mfield").forEach(function(f) {
          f.classList.remove("bahria-merror");
        });

        bahriaQaSelectedProgram = null;
        bahriaQaSelectedFee = null;
        var toFeeBtn = document.getElementById("bahria-qa-to-fee");
        var toFormBtn = document.getElementById("bahria-qa-to-form");
        if (toFeeBtn) toFeeBtn.disabled = true;
        if (toFormBtn) toFormBtn.disabled = true;

        bahriaRenderProgramList();
        bahriaQuickApplyGoTo("program");
        overlay.classList.add("bahria-qa-open");
        overlay.setAttribute("aria-hidden", "false");
        document.body.style.overflow = "hidden";
      }

      function bahriaCloseQuickApply() {
        var overlay = document.getElementById("bahria-qa-modal");
        if (!overlay) return;
        overlay.classList.remove("bahria-qa-open");
        overlay.setAttribute("aria-hidden", "true");
        document.body.style.overflow = "";
      }

      function bahriaSetupQuickApply() {
        if (bahriaQuickApplyBound) return;
        bahriaQuickApplyBound = true;

        var overlay = document.getElementById("bahria-qa-modal");
        var closeBtn = document.getElementById("bahria-qa-close");
        var doneBtn = document.getElementById("bahria-qa-done");
        var form = document.getElementById("bahria-qa-form");
        var toFeeBtn = document.getElementById("bahria-qa-to-fee");
        var toFormBtn = document.getElementById("bahria-qa-to-form");
        var backProgramBtn = document.getElementById("bahria-qa-back-program");
        var backFeeBtn = document.getElementById("bahria-qa-back-fee");
        if (!overlay || !closeBtn || !form) return;

        document.querySelectorAll("#bahria-page .bahria-quickapply-trigger").forEach(function(trigger) {
          trigger.addEventListener("click", function(e) {
            e.preventDefault();
            window.location.href = "/admissions/apply?university=Bahria";
          });
        });

        closeBtn.addEventListener("click", bahriaCloseQuickApply);
        if (doneBtn) doneBtn.addEventListener("click", bahriaCloseQuickApply);
        overlay.addEventListener("click", function(e) {
          if (e.target === overlay) bahriaCloseQuickApply();
        });
        document.addEventListener("keydown", function(e) {
          if (e.key === "Escape" && overlay.classList.contains("bahria-qa-open")) bahriaCloseQuickApply();
        });

        if (toFeeBtn) toFeeBtn.addEventListener("click", function() {
          if (!bahriaQaSelectedProgram) return;
          bahriaRenderFeeOptions();
          bahriaQuickApplyGoTo("fee");
        });
        if (backProgramBtn) backProgramBtn.addEventListener("click", function() {
          bahriaQuickApplyGoTo("program");
        });
        if (toFormBtn) toFormBtn.addEventListener("click", function() {
          if (!bahriaQaSelectedFee) return;
          bahriaQuickApplyGoTo("form");
        });
        if (backFeeBtn) backFeeBtn.addEventListener("click", function() {
          bahriaQuickApplyGoTo("fee");
        });

        function setError(fieldEl, hasError) {
          if (fieldEl) fieldEl.classList.toggle("bahria-merror", hasError);
        }

        function isValidEmail(v) {
          return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(v);
        }

        function isValidPhone(v) {
          var d = v.replace(/[^\d]/g, "");
          return d.length >= 10 && d.length <= 13;
        }

        function req(field, value, minLen) {
          var el = form.querySelector('[data-bahria-qafield="' + field + '"]');
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

          var phoneField = form.querySelector('[data-bahria-qafield="phone"]');
          if (!isValidPhone(form.phone.value.trim())) {
            setError(phoneField, true);
            valid = false;
          } else {
            setError(phoneField, false);
          }

          var emailField = form.querySelector('[data-bahria-qafield="email"]');
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
            var firstError = form.querySelector(".bahria-mfield.bahria-merror");
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

          var subject = "Admission Application — Bahria University (" + bahriaQaSelectedProgram + ")";
          var bodyLines = [
            "University: Bahria University",
            "Program: " + bahriaQaSelectedProgram,
            "Fee Category: " + bahriaQaSelectedFee,
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
          var mailtoUrl = "mailto:" + encodeURIComponent(bahriaQuickApplyEmail) + "?subject=" + encodeURIComponent(subject) + "&body=" + encodeURIComponent(bodyLines.join("\n"));

          window.location.href = mailtoUrl;

          var summaryEl = document.getElementById("bahria-qa-confirm-summary");
          if (summaryEl) {
            summaryEl.innerHTML =
              "<div><strong>Program:</strong> " + bahriaQaSelectedProgram + "</div>" +
              "<div><strong>Fee Category:</strong> " + bahriaQaSelectedFee + "</div>" +
              "<div><strong>Name:</strong> " + name + "</div>" +
              "<div><strong>Phone:</strong> " + phone + "</div>" +
              "<div><strong>Email:</strong> " + email + "</div>";
          }

          bahriaQuickApplyGoTo("confirm");
        });
      }

      /* ---------- WELCOME / ADMISSION POPUP (shows once per browser session) ---------- */
      function bahriaCloseWelcomePopup() {
        var overlay = document.getElementById("bahria-welcome-modal");
        if (!overlay) return;
        overlay.classList.remove("bahria-welcome-open");
        overlay.setAttribute("aria-hidden", "true");
        document.body.style.overflow = "";
      }

      function bahriaSetupWelcomePopup() {
        var overlay = document.getElementById("bahria-welcome-modal");
        var closeBtn = document.getElementById("bahria-welcome-close");
        var lastDateEl = document.getElementById("bahria-welcome-lastdate");
        var entryTestEl = document.getElementById("bahria-welcome-entrytest");
        if (!overlay || !closeBtn) return;

        if (lastDateEl) lastDateEl.textContent = bahriaAdmissionInfo.lastDateToApply;
        if (entryTestEl) entryTestEl.textContent = bahriaAdmissionInfo.entryTestDate;

        closeBtn.addEventListener("click", bahriaCloseWelcomePopup);
        overlay.addEventListener("click", function(e) {
          if (e.target === overlay) bahriaCloseWelcomePopup();
        });
        document.addEventListener("keydown", function(e) {
          if (e.key === "Escape" && overlay.classList.contains("bahria-welcome-open")) bahriaCloseWelcomePopup();
        });

        var SESSION_KEY = "ccxSeenBahriaWelcome";
        var alreadyShown = false;
        try {
          alreadyShown = window.sessionStorage.getItem(SESSION_KEY) === "1";
        } catch (err) {
          alreadyShown = false;
        }

        if (!alreadyShown) {
          window.setTimeout(function() {
            overlay.classList.add("bahria-welcome-open");
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
      // TODO: replace with Bahria's real admissions email before going live.
      var bahriaDeptEmail = "";
      var bahriaDeptFallbackEmail = "admissions@example.com";
      var bahriaDeptCurrent = null;

      function bahriaDeptGoToStep(step) {
        document.querySelectorAll("#bahria-page .bahria-dept-view").forEach(function(view) {
          view.classList.toggle("bahria-dept-view-active", view.getAttribute("data-bahria-dept-view") === String(step));
        });
        document.querySelectorAll("#bahria-page .bahria-dept-step-dot").forEach(function(dot) {
          var dotStep = parseInt(dot.getAttribute("data-bahria-dept-dot"), 10);
          dot.classList.toggle("bahria-dept-step-active", dotStep === step);
          dot.classList.toggle("bahria-dept-step-done", dotStep < step);
        });
      }

      function bahriaOpenDeptModal(programName) {
        var overlay = document.getElementById("bahria-dept-modal");
        if (!overlay) return;
        bahriaDeptCurrent = {
          program: programName
        };

        var tag1 = document.getElementById("bahria-dept-tag-1");
        var tag2 = document.getElementById("bahria-dept-tag-2");
        if (tag1) tag1.textContent = programName + " · Bahria University";
        if (tag2) tag2.textContent = programName + " · Bahria University";

        var form = document.getElementById("bahria-dept-form");
        if (form) form.reset();
        document.querySelectorAll("#bahria-dept-form .bahria-mfield").forEach(function(f) {
          f.classList.remove("bahria-merror");
        });

        bahriaDeptGoToStep(1);
        overlay.classList.add("bahria-dept-open");
        overlay.setAttribute("aria-hidden", "false");
        document.body.style.overflow = "hidden";
      }

      function bahriaCloseDeptModal() {
        var overlay = document.getElementById("bahria-dept-modal");
        if (!overlay) return;
        overlay.classList.remove("bahria-dept-open");
        overlay.setAttribute("aria-hidden", "true");
        document.body.style.overflow = "";
      }

      function bahriaSetupDeptModal() {
        var overlay = document.getElementById("bahria-dept-modal");
        var closeBtn = document.getElementById("bahria-dept-close");
        var toStep2 = document.getElementById("bahria-dept-to-step2");
        var backStep1 = document.getElementById("bahria-dept-back-step1");
        var doneBtn = document.getElementById("bahria-dept-done");
        var form = document.getElementById("bahria-dept-form");
        if (!overlay || !closeBtn || !form) return;

        document.querySelectorAll("#bahria-page .bahria-dept-trigger").forEach(function(trigger) {
          trigger.addEventListener("click", function(e) {
            e.preventDefault();
            var titleEl = trigger.querySelector(".bahria-ac-body h3");
            var programName = titleEl ? titleEl.textContent.trim() : "Program";
            window.location.href = "/admissions/apply?university=Bahria&program=" + encodeURIComponent(programName);
          });
        });

        closeBtn.addEventListener("click", bahriaCloseDeptModal);
        if (doneBtn) doneBtn.addEventListener("click", bahriaCloseDeptModal);
        overlay.addEventListener("click", function(e) {
          if (e.target === overlay) bahriaCloseDeptModal();
        });
        document.addEventListener("keydown", function(e) {
          if (e.key === "Escape" && overlay.classList.contains("bahria-dept-open")) bahriaCloseDeptModal();
        });
        if (toStep2) toStep2.addEventListener("click", function() {
          bahriaDeptGoToStep(2);
        });
        if (backStep1) backStep1.addEventListener("click", function() {
          bahriaDeptGoToStep(1);
        });

        function setError(fieldEl, hasError) {
          if (fieldEl) fieldEl.classList.toggle("bahria-merror", hasError);
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
          var nameField = form.querySelector('[data-bahria-dfield="name"]');
          if (name.length < 2) {
            setError(nameField, true);
            valid = false;
          } else {
            setError(nameField, false);
          }

          var phone = form.phone.value.trim();
          var phoneField = form.querySelector('[data-bahria-dfield="phone"]');
          if (!isValidPhone(phone)) {
            setError(phoneField, true);
            valid = false;
          } else {
            setError(phoneField, false);
          }

          var email = form.email.value.trim();
          var emailField = form.querySelector('[data-bahria-dfield="email"]');
          if (!isValidEmail(email)) {
            setError(emailField, true);
            valid = false;
          } else {
            setError(emailField, false);
          }

          var city = form.city.value.trim();
          var message = form.message.value.trim();

          if (!valid) {
            var firstError = form.querySelector(".bahria-mfield.bahria-merror");
            if (firstError) {
              firstError.scrollIntoView({
                behavior: "smooth",
                block: "center"
              });
            }
            return;
          }

          var info = bahriaDeptCurrent || {
            program: ""
          };
          var destEmail = bahriaDeptEmail || bahriaDeptFallbackEmail;
          var subject = "Admission Application — " + info.program + " (Bahria University)";
          var bodyLines = ["Program: " + info.program, "University: Bahria University", "Name: " + name, "Phone: " + phone, "Email: " + email];
          if (city) bodyLines.push("City: " + city);
          if (message) bodyLines.push("Message: " + message);
          var mailtoUrl = "mailto:" + encodeURIComponent(destEmail) + "?subject=" + encodeURIComponent(subject) + "&body=" + encodeURIComponent(bodyLines.join("\n"));

          window.location.href = mailtoUrl;

          var summaryEl = document.getElementById("bahria-dept-summary");
          if (summaryEl) {
            summaryEl.innerHTML =
              "<div><strong>Program:</strong> " + info.program + "</div>" +
              "<div><strong>Name:</strong> " + name + "</div>" +
              "<div><strong>Phone:</strong> " + phone + "</div>" +
              "<div><strong>Email:</strong> " + email + "</div>";
          }
          var fallbackEl = document.getElementById("bahria-dept-fallback-email");
          if (fallbackEl) fallbackEl.textContent = "Send to: " + destEmail;

          bahriaDeptGoToStep(3);
        });
      }


      function bahriaSetupAdmissionModal() {
        var overlay = document.getElementById("bahria-admission-modal");
        var closeBtn = document.getElementById("bahria-modal-close");
        var form = document.getElementById("bahria-admission-form");
        if (!overlay || !closeBtn || !form) return;

        // TODO: set Bahria's real WhatsApp/admissions helpline number before going live
        var bahriaAdmissionWhatsapp = "";

        function bahriaOpenModal(prefill) {
          overlay.classList.add("bahria-modal-open");
          overlay.setAttribute("aria-hidden", "false");
          document.body.style.overflow = "hidden";
          if (prefill && prefill.program) form.program.value = prefill.program;
          window.setTimeout(function() {
            form.name.focus();
          }, 250);
        }

        function bahriaCloseModal() {
          overlay.classList.remove("bahria-modal-open");
          overlay.setAttribute("aria-hidden", "true");
          document.body.style.overflow = "";
        }

        document.querySelectorAll("#bahria-page .bahria-admission-trigger").forEach(function(trigger) {
          trigger.addEventListener("click", function(e) {
            e.preventDefault();
            window.location.href = "/admissions/apply?university=Bahria";
          });
        });

        closeBtn.addEventListener("click", bahriaCloseModal);
        overlay.addEventListener("click", function(e) {
          if (e.target === overlay) bahriaCloseModal();
        });
        document.addEventListener("keydown", function(e) {
          if (e.key === "Escape" && overlay.classList.contains("bahria-modal-open")) bahriaCloseModal();
        });

        function setError(fieldEl, hasError) {
          if (fieldEl) fieldEl.classList.toggle("bahria-merror", hasError);
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
          var nameField = form.querySelector('[data-bahria-field="name"]');
          if (name.length < 2) {
            setError(nameField, true);
            valid = false;
          } else {
            setError(nameField, false);
          }

          var phone = form.phone.value.trim();
          var phoneField = form.querySelector('[data-bahria-field="phone"]');
          if (!isValidPhone(phone)) {
            setError(phoneField, true);
            valid = false;
          } else {
            setError(phoneField, false);
          }

          var email = form.email.value.trim();
          var emailField = form.querySelector('[data-bahria-field="email"]');
          if (!isValidEmail(email)) {
            setError(emailField, true);
            valid = false;
          } else {
            setError(emailField, false);
          }

          var city = form.city.value.trim();
          var campus = form.campus.value.trim();

          var program = form.program.value.trim();
          var programField = form.querySelector('[data-bahria-field="program"]');
          if (program.length < 2) {
            setError(programField, true);
            valid = false;
          } else {
            setError(programField, false);
          }

          var message = form.message.value.trim();

          if (!valid) {
            var firstError = form.querySelector(".bahria-mfield.bahria-merror");
            if (firstError) {
              firstError.scrollIntoView({
                behavior: "smooth",
                block: "center"
              });
            }
            return;
          }

          var lines = [
            "Hello, I would like to apply for admission at Bahria University.",
            "Name: " + name,
            "Phone: " + phone
          ];
          if (email) lines.push("Email: " + email);
          if (city) lines.push("City: " + city);
          if (campus) lines.push("Preferred Campus: " + campus);
          lines.push("Program of Interest: " + program);
          if (message) lines.push("Message: " + message);

          var waBase = bahriaAdmissionWhatsapp ? ("https://wa.me/" + bahriaAdmissionWhatsapp) : "https://wa.me/";
          var waUrl = waBase + "?text=" + encodeURIComponent(lines.join("\n"));

          window.open(waUrl, "_blank", "noopener");
          bahriaCloseModal();
          form.reset();
        });
      }

      function bahriaSetupMobileNav() {
        var btn = document.getElementById("bahria-hamburger-btn");
        var nav = document.getElementById("bahria-mobile-nav");
        if (!btn || !nav) return;
        btn.addEventListener("click", function() {
          var isOpen = nav.classList.toggle("bahria-open");
          btn.classList.toggle("bahria-active", isOpen);
          btn.setAttribute("aria-expanded", isOpen ? "true" : "false");
        });
        nav.querySelectorAll("a").forEach(function(a) {
          a.addEventListener("click", function() {
            nav.classList.remove("bahria-open");
            btn.classList.remove("bahria-active");
            btn.setAttribute("aria-expanded", "false");
          });
        });
      }

      function bahriaSetupAnnouncement() {
        var bar = document.getElementById("bahria-announce");
        var overlay = document.getElementById("bahria-announce-overlay");
        var closeBtn = document.getElementById("bahria-announce-close");
        if (!bar || !closeBtn) return;

        function closeAnnounce() {
          bar.classList.add("bahria-hidden");
          if (overlay) overlay.classList.remove("bahria-announce-overlay-open");
        }

        if (overlay) overlay.classList.add("bahria-announce-overlay-open");
        closeBtn.addEventListener("click", closeAnnounce);
        if (overlay) overlay.addEventListener("click", closeAnnounce);
      }

      function bahriaSetupSmoothScroll() {
        document.querySelectorAll('#bahria-page a[href^="#bahria-"], #bahria-page a[data-bahria-scroll]').forEach(function(link) {
          var targetSel = link.getAttribute("data-bahria-scroll") || link.getAttribute("href");
          if (!targetSel || targetSel.length < 2) return;
          link.addEventListener("click", function(e) {
            var target = document.querySelector(targetSel);
            if (target) {
              e.preventDefault();
              var top = target.getBoundingClientRect().top + window.pageYOffset - 90;
              window.scrollTo({
                top: top,
                behavior: "smooth"
              });
            }
          });
        });
      }

      function bahriaSetupNewsControls() {
        var track = document.getElementById("bahria-news-track");
        var prevBtn = document.getElementById("bahria-news-prev");
        var nextBtn = document.getElementById("bahria-news-next");
        if (!track || !prevBtn || !nextBtn) return;

        function scrollByCard(dir) {
          var card = track.querySelector(".bahria-news-card");
          var amount = card ? (card.getBoundingClientRect().width + 20) * dir : 280 * dir;
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

      function bahriaSetupScrollReveal() {
        var els = document.querySelectorAll("#bahria-page .bahria-reveal");
        if (!els.length) return;
        if ("IntersectionObserver" in window) {
          var io = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
              if (entry.isIntersecting) {
                entry.target.classList.add("bahria-in");
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
            el.classList.add("bahria-in");
          });
        }
      }

      function bahriaSetupFooterYear() {
        var el = document.getElementById("bahria-year");
        if (el) el.textContent = new Date().getFullYear();
      }

      return {
        init: bahriaInit
      };
    })();

    if (document.readyState === "loading") {
      document.addEventListener("DOMContentLoaded", bahriaHomepage.init);
    } else {
      bahriaHomepage.init();
    }
  </script>

  <?php wp_footer(); ?>
</body>

</html>