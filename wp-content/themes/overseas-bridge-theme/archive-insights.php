<?php
/**
 * Template Name: Blog & Insights (Sorav Jain Exact Redesign with OB Yellow Palette)
 * Template Post Type: page
 * Description: Exact implementation of Reference Images 1, 2, 3 & 4 with Overseas Bridge signature yellow (#ffc700 / #ffb800) and obsidian palette.
 * Features: Split Hero with Lead Blueprint Form, 3-Column Clean Card Boxes Grid, Dynamic WP Posts, Split Author/Editorial Desk Box, Sticky Bottom Audit Banner.
 *
 * @package Overseas_Bridge
 */

if (!headers_sent()) {
    header('X-LiteSpeed-Cache-Control: no-cache');
    header('Cache-Control: no-cache, no-store, must-revalidate, max-age=0');
    header('Pragma: no-cache');
    header('X-LiteSpeed-Purge: *');
}
if (function_exists('do_action')) {
    do_action('litespeed_disable_cache');
}

get_header();
?>

<!-- Glowing Fixed Top Reading Progress Bar -->
<div id="obReadingProgressBar" class="ob-reading-progress-bar">
  <span class="ob-progress-sparkle"></span>
</div>

<!-- Floating Back to Top Button -->
<button id="obBackToTop" class="ob-back-to-top" aria-label="Back to Top">
  <svg class="ob-progress-ring" width="54" height="54">
    <circle class="ob-progress-ring-bg" stroke="rgba(255, 199, 0, 0.25)" stroke-width="3.5" fill="transparent" r="23" cx="27" cy="27" />
    <circle id="obProgressCircle" class="ob-progress-ring-fill" stroke="#ffc700" stroke-width="3.5" stroke-dasharray="144.5" stroke-dashoffset="144.5" stroke-linecap="round" fill="transparent" r="23" cx="27" cy="27" />
  </svg>
  <span class="ob-back-to-top-arrow">&uarr;</span>
</button>

<main id="ob-blogs-redesign-page" class="ob-blogs-sj-theme">

  <style id="ob-blogs-sj-styles">
    /* ==========================================================================
       OVERSEAS BRIDGE — SIGNATURE OB YELLOW & OBSIDIAN DESIGN SYSTEM
       Primary Yellow: #ffc700 / #ffb800 / #f59e0b | Obsidian: #050b1a / #0b1736
       ========================================================================== */
    :root {
      --ob-yellow: #ffc700;
      --ob-yellow-light: #ffdb4d;
      --ob-yellow-hover: #e5b300;
      --ob-yellow-dark: #cc9f00;
      --ob-yellow-pale: #fffbeb;
      --ob-navy-dark: #050b1a;
      --ob-navy-main: #0b1736;
      --ob-navy-light: #1e293b;
      --ob-bg-light: #f8fafc;
      --ob-bg-white: #ffffff;
      --ob-text-heading: #050b1a;
      --ob-text-body: #334155;
      --ob-text-muted: #64748b;
      --ob-border: #e2e8f0;
      --ob-border-card: #e5e7eb;
      --ob-shadow: 0 4px 20px -2px rgba(11, 23, 54, 0.06), 0 2px 6px -1px rgba(11, 23, 54, 0.04);
      --ob-shadow-hover: 0 20px 35px -8px rgba(11, 23, 54, 0.14), 0 8px 16px -4px rgba(11, 23, 54, 0.06);
    }

    #ob-blogs-redesign-page {
      background-color: var(--ob-bg-light) !important;
      color: var(--ob-text-body) !important;
      min-height: 100vh !important;
      padding-top: 85px !important;
      padding-bottom: 110px !important;
      margin-top: 30px !important;
      font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif !important;
      position: relative !important;
    }

    .ob-sj-container {
      max-width: 1240px !important;
      margin: 0 auto !important;
      padding: 0 24px !important;
    }

    /* Reading Progress Bar */
    .ob-reading-progress-bar {
      position: fixed !important;
      top: 0 !important;
      left: 0 !important;
      height: 4px !important;
      width: 0% !important;
      background: linear-gradient(90deg, #ffc700 0%, #ffdb4d 50%, #10b981 100%) !important;
      z-index: 999999 !important;
      box-shadow: 0 0 16px rgba(255, 199, 0, 0.9) !important;
      transition: width 0.08s ease-out !important;
    }

    .ob-progress-sparkle {
      position: absolute !important;
      right: 0 !important;
      top: -4px !important;
      width: 12px !important;
      height: 12px !important;
      border-radius: 50% !important;
      background: #ffffff !important;
      box-shadow: 0 0 12px #ffc700, 0 0 24px #ffdb4d !important;
    }

    /* Floating Back to Top Button */
    .ob-back-to-top {
      position: fixed !important;
      bottom: 30px !important;
      right: 30px !important;
      width: 54px !important;
      height: 54px !important;
      border-radius: 50% !important;
      background: var(--ob-navy-dark) !important;
      border: 1.5px solid rgba(255, 199, 0, 0.5) !important;
      color: #ffffff !important;
      display: flex !important;
      align-items: center !important;
      justify-content: center !important;
      cursor: pointer !important;
      z-index: 9999 !important;
      opacity: 0 !important;
      visibility: hidden !important;
      transform: translateY(18px) scale(0.9) !important;
      transition: all 0.35s cubic-bezier(0.16, 1, 0.3, 1) !important;
      box-shadow: 0 14px 38px rgba(6, 13, 31, 0.35) !important;
    }

    .ob-back-to-top.is-visible {
      opacity: 1 !important;
      visibility: visible !important;
      transform: translateY(0) scale(1) !important;
    }

    .ob-back-to-top:hover {
      transform: translateY(-5px) scale(1.12) !important;
      border-color: var(--ob-yellow) !important;
      box-shadow: 0 18px 45px rgba(255, 199, 0, 0.5) !important;
    }

    .ob-progress-ring {
      position: absolute !important;
      top: 0 !important;
      left: 0 !important;
      transform: rotate(-90deg) !important;
    }

    /* Breadcrumbs */
    .ob-sj-breadcrumbs {
      display: flex !important;
      align-items: center !important;
      gap: 8px !important;
      font-size: 0.86rem !important;
      font-weight: 600 !important;
      color: var(--ob-text-muted) !important;
      margin-bottom: 24px !important;
    }

    .ob-sj-breadcrumbs a {
      color: var(--ob-text-muted) !important;
      text-decoration: none !important;
      transition: color 0.2s ease !important;
    }

    .ob-sj-breadcrumbs a:hover {
      color: var(--ob-yellow-dark) !important;
    }

    .ob-sj-breadcrumbs-sep {
      color: #cbd5e1 !important;
    }

    .ob-sj-breadcrumbs-current {
      color: var(--ob-text-heading) !important;
      font-weight: 700 !important;
    }

    /* ==========================================================================
       IMAGE 1 REFERENCE: HERO BANNER IN EXACT OB YELLOW (#ffc700)
       Clean, highly readable typography in deep obsidian (#050b1a)
       ========================================================================== */
    .ob-sj-hero-card {
      background: linear-gradient(135deg, #ffc700 0%, #ffb800 60%, #f5a600 100%) !important;
      border-radius: 28px !important;
      padding: 54px 50px !important;
      color: #050b1a !important;
      display: grid !important;
      grid-template-columns: 1.15fr 1fr !important;
      gap: 48px !important;
      align-items: center !important;
      box-shadow: 0 20px 45px rgba(255, 184, 0, 0.25) !important;
      position: relative !important;
      overflow: hidden !important;
      margin-bottom: 40px !important;
      border: 1.5px solid rgba(255, 255, 255, 0.6) !important;
    }

    .ob-sj-hero-card::before {
      content: '' !important;
      position: absolute !important;
      top: -30% !important;
      right: -20% !important;
      width: 500px !important;
      height: 500px !important;
      background: radial-gradient(circle, rgba(255, 255, 255, 0.35) 0%, transparent 65%) !important;
      pointer-events: none !important;
    }

    .ob-sj-hero-left h1 {
      font-size: 3.2rem !important;
      font-weight: 950 !important;
      color: #050b1a !important;
      line-height: 1.12 !important;
      letter-spacing: -0.03em !important;
      margin: 0 0 20px 0 !important;
    }

    .ob-sj-hero-left p {
      font-size: 1.14rem !important;
      line-height: 1.7 !important;
      color: #1e293b !important;
      margin: 0 0 28px 0 !important;
      font-weight: 500 !important;
    }

    .ob-sj-hero-badges {
      display: flex !important;
      flex-wrap: wrap !important;
      gap: 10px !important;
    }

    .ob-sj-hero-badge {
      background: rgba(5, 11, 26, 0.08) !important;
      color: #050b1a !important;
      border: 1.5px solid rgba(5, 11, 26, 0.2) !important;
      padding: 6px 16px !important;
      border-radius: 999px !important;
      font-size: 0.84rem !important;
      font-weight: 800 !important;
      backdrop-filter: blur(8px) !important;
    }

    /* Embedded Strategy Blueprint Form (Obsidian Contrast Card on Yellow Hero) */
    .ob-sj-form-card {
      background: #050b1a !important;
      border: 1.5px solid rgba(255, 199, 0, 0.4) !important;
      border-radius: 22px !important;
      padding: 32px 30px !important;
      box-shadow: 0 20px 45px rgba(5, 11, 26, 0.35) !important;
      color: #ffffff !important;
    }

    .ob-sj-form-card h2 {
      font-size: 1.22rem !important;
      font-weight: 850 !important;
      color: #ffffff !important;
      margin: 0 0 20px 0 !important;
      line-height: 1.35 !important;
      text-align: center !important;
    }

    .ob-sj-form-card h2 span {
      color: #ffc700 !important;
    }

    .ob-sj-form-grid {
      display: grid !important;
      grid-template-columns: 1fr 1fr !important;
      gap: 12px !important;
    }

    .ob-sj-form-group.is-full {
      grid-column: span 2 !important;
    }

    .ob-sj-input {
      width: 100% !important;
      padding: 12px 14px !important;
      background: #0f172a !important;
      border: 1.5px solid #334155 !important;
      border-radius: 10px !important;
      font-size: 0.92rem !important;
      color: #ffffff !important;
      outline: none !important;
      box-sizing: border-box !important;
      transition: all 0.2s ease !important;
    }

    .ob-sj-input::placeholder {
      color: #94a3b8 !important;
    }

    .ob-sj-input:focus {
      border-color: #ffc700 !important;
      box-shadow: 0 0 0 3px rgba(255, 199, 0, 0.25) !important;
      background: #1e293b !important;
    }

    .ob-sj-textarea {
      width: 100% !important;
      padding: 12px 14px !important;
      background: #0f172a !important;
      border: 1.5px solid #334155 !important;
      border-radius: 10px !important;
      font-size: 0.92rem !important;
      color: #ffffff !important;
      outline: none !important;
      box-sizing: border-box !important;
      resize: vertical !important;
      min-height: 70px !important;
      font-family: inherit !important;
    }

    .ob-sj-textarea::placeholder {
      color: #94a3b8 !important;
    }

    .ob-sj-textarea:focus {
      border-color: #ffc700 !important;
      box-shadow: 0 0 0 3px rgba(255, 199, 0, 0.25) !important;
      background: #1e293b !important;
    }

    .ob-sj-submit-btn {
      width: 100% !important;
      background: linear-gradient(135deg, #ffc700 0%, #ffb800 100%) !important;
      color: #050b1a !important;
      border: none !important;
      padding: 14px 20px !important;
      border-radius: 10px !important;
      font-size: 1rem !important;
      font-weight: 900 !important;
      cursor: pointer !important;
      transition: all 0.25s ease !important;
      box-shadow: 0 8px 24px rgba(255, 199, 0, 0.35) !important;
      margin-top: 4px !important;
    }

    .ob-sj-submit-btn:hover {
      background: #ffdb4d !important;
      transform: translateY(-2px) !important;
      box-shadow: 0 12px 30px rgba(255, 199, 0, 0.5) !important;
    }

    .ob-sj-form-success {
      display: none;
      background: #0f172a !important;
      border: 1.5px solid #ffc700 !important;
      color: #ffffff !important;
      padding: 24px !important;
      border-radius: 14px !important;
      text-align: center !important;
    }

    /* ==========================================================================
       CATEGORY FILTER & LIVE SEARCH BAR
       ========================================================================== */
    .ob-sj-filter-bar {
      background: var(--ob-bg-white) !important;
      border: 1.5px solid var(--ob-border) !important;
      border-radius: 18px !important;
      padding: 16px 20px !important;
      box-shadow: var(--ob-shadow) !important;
      margin-bottom: 38px !important;
      display: flex !important;
      align-items: center !important;
      justify-content: space-between !important;
      gap: 16px !important;
      flex-wrap: wrap !important;
    }

    .ob-sj-filter-pills {
      display: flex !important;
      flex-wrap: wrap !important;
      gap: 8px !important;
      align-items: center !important;
    }

    .ob-sj-pill {
      background: var(--ob-bg-light) !important;
      border: 1px solid var(--ob-border) !important;
      color: var(--ob-text-muted) !important;
      padding: 8px 18px !important;
      border-radius: 999px !important;
      font-size: 0.85rem !important;
      font-weight: 700 !important;
      cursor: pointer !important;
      transition: all 0.2s ease !important;
      user-select: none !important;
    }

    .ob-sj-pill:hover {
      background: #ffffff !important;
      border-color: var(--ob-yellow) !important;
      color: var(--ob-text-heading) !important;
    }

    .ob-sj-pill.is-active {
      background: #050b1a !important;
      border-color: #050b1a !important;
      color: #ffc700 !important;
      box-shadow: 0 4px 12px rgba(5, 11, 26, 0.2) !important;
    }

    .ob-sj-search-wrap {
      position: relative !important;
      min-width: 280px !important;
    }

    .ob-sj-search-input {
      width: 100% !important;
      padding: 10px 16px 10px 38px !important;
      background: var(--ob-bg-light) !important;
      border: 1.5px solid var(--ob-border) !important;
      border-radius: 999px !important;
      font-size: 0.88rem !important;
      color: var(--ob-text-heading) !important;
      outline: none !important;
      box-sizing: border-box !important;
      transition: all 0.2s ease !important;
    }

    .ob-sj-search-input:focus {
      background: #ffffff !important;
      border-color: var(--ob-yellow) !important;
      box-shadow: 0 0 0 3px rgba(255, 199, 0, 0.2) !important;
    }

    .ob-sj-search-icon {
      position: absolute !important;
      left: 14px !important;
      top: 50% !important;
      transform: translateY(-50%) !important;
      font-size: 0.95rem !important;
      color: var(--ob-text-muted) !important;
      pointer-events: none !important;
    }

    /* ==========================================================================
       IMAGE 2 & 3 REFERENCE: 3-COLUMN BLOG CARD BOXES GRID ("BLOGS IN BOXES")
       Clean white card containers, crisp featured image, bold title & meta
       ========================================================================== */
    .ob-sj-grid {
      display: grid !important;
      grid-template-columns: repeat(3, 1fr) !important;
      gap: 30px !important;
      margin-bottom: 50px !important;
    }

    .ob-sj-card {
      background: var(--ob-bg-white) !important;
      border: 1.5px solid var(--ob-border-card) !important;
      border-radius: 18px !important;
      overflow: hidden !important;
      box-shadow: var(--ob-shadow) !important;
      display: flex !important;
      flex-direction: column !important;
      transition: all 0.35s cubic-bezier(0.16, 1, 0.3, 1) !important;
      text-decoration: none !important;
      color: inherit !important;
    }

    .ob-sj-card:hover {
      transform: translateY(-6px) !important;
      border-color: var(--ob-yellow) !important;
      box-shadow: var(--ob-shadow-hover) !important;
    }

    .ob-sj-card-thumb {
      width: 100% !important;
      height: 220px !important;
      overflow: hidden !important;
      background: #050b1a !important;
      position: relative !important;
    }

    .ob-sj-card-img {
      width: 100% !important;
      height: 100% !important;
      object-fit: cover !important;
      transition: transform 0.5s ease !important;
    }

    .ob-sj-card:hover .ob-sj-card-img {
      transform: scale(1.08) !important;
    }

    .ob-sj-card-cat-pill {
      position: absolute !important;
      top: 14px !important;
      left: 14px !important;
      background: #050b1a !important;
      color: #ffc700 !important;
      border: 1px solid rgba(255, 199, 0, 0.45) !important;
      padding: 4px 12px !important;
      border-radius: 999px !important;
      font-size: 0.72rem !important;
      font-weight: 800 !important;
      text-transform: uppercase !important;
      letter-spacing: 0.05em !important;
      backdrop-filter: blur(8px) !important;
    }

    .ob-sj-card-body {
      padding: 26px 22px !important;
      display: flex !important;
      flex-direction: column !important;
      flex-grow: 1 !important;
    }

    .ob-sj-card-title {
      font-size: 1.16rem !important;
      font-weight: 850 !important;
      color: var(--ob-text-heading) !important;
      line-height: 1.4 !important;
      text-transform: uppercase !important;
      margin: 0 0 14px 0 !important;
      letter-spacing: -0.01em !important;
      transition: color 0.2s ease !important;
    }

    .ob-sj-card:hover .ob-sj-card-title {
      color: #b48200 !important;
    }

    .ob-sj-card-meta {
      font-size: 0.82rem !important;
      color: var(--ob-text-muted) !important;
      line-height: 1.6 !important;
      margin: 0 0 14px 0 !important;
      font-weight: 550 !important;
    }

    .ob-sj-card-excerpt {
      font-size: 0.92rem !important;
      line-height: 1.6 !important;
      color: var(--ob-text-body) !important;
      margin: 0 0 18px 0 !important;
      flex-grow: 1 !important;
    }

    .ob-sj-card-footer {
      display: flex !important;
      align-items: center !important;
      justify-content: space-between !important;
      padding-top: 14px !important;
      border-top: 1px solid var(--ob-border) !important;
      margin-top: auto !important;
    }

    .ob-sj-read-link {
      font-size: 0.86rem !important;
      font-weight: 800 !important;
      color: #050b1a !important;
      display: inline-flex !important;
      align-items: center !important;
      gap: 5px !important;
      transition: all 0.2s ease !important;
    }

    .ob-sj-card:hover .ob-sj-read-link {
      color: #b48200 !important;
      transform: translateX(4px) !important;
    }

    /* No results container */
    .ob-sj-no-results {
      grid-column: 1 / -1 !important;
      text-align: center !important;
      padding: 60px 20px !important;
      background: #ffffff !important;
      border: 1.5px dashed var(--ob-border) !important;
      border-radius: 18px !important;
      display: none;
    }

    

    /* ==========================================================================
       IMAGE 1 BOTTOM REFERENCE: STICKY AUDIT BANNER IN EXACT OB YELLOW (#ffc700)
       ========================================================================== */
    .ob-sj-bottom-banner {
      position: fixed !important;
      bottom: 0 !important;
      left: 0 !important;
      right: 0 !important;
      background: linear-gradient(90deg, #ffc700 0%, #ffdb4d 50%, #ffc700 100%) !important;
      color: #050b1a !important;
      padding: 14px 24px !important;
      z-index: 99998 !important;
      box-shadow: 0 -8px 25px rgba(0, 0, 0, 0.15) !important;
      display: flex !important;
      align-items: center !important;
      justify-content: center !important;
      gap: 24px !important;
      transition: transform 0.35s ease !important;
      border-top: 1px solid rgba(0, 0, 0, 0.08) !important;
    }

    .ob-sj-bottom-banner.is-hidden {
      transform: translateY(100%) !important;
    }

    .ob-sj-banner-text {
      font-size: 1.02rem !important;
      font-weight: 800 !important;
      color: #050b1a !important;
    }

    .ob-sj-banner-text span {
      opacity: 0.9 !important;
      font-weight: 600 !important;
      margin-left: 8px !important;
    }

    .ob-sj-banner-btn {
      background: #050b1a !important;
      color: #ffffff !important;
      padding: 9px 24px !important;
      border-radius: 999px !important;
      font-size: 0.9rem !important;
      font-weight: 850 !important;
      text-decoration: none !important;
      white-space: nowrap !important;
      box-shadow: 0 4px 14px rgba(5, 11, 26, 0.3) !important;
      transition: all 0.2s ease !important;
    }

    .ob-sj-banner-btn:hover {
      background: #ffffff !important;
      color: #050b1a !important;
      transform: scale(1.04) !important;
    }

    .ob-sj-banner-close {
      background: transparent !important;
      border: none !important;
      color: #050b1a !important;
      font-size: 1.2rem !important;
      cursor: pointer !important;
      padding: 4px 8px !important;
      opacity: 0.8 !important;
    }

    .ob-sj-banner-close:hover {
      opacity: 1 !important;
    }

    /* ==========================================================================
       RESPONSIVE BREAKPOINTS (MOBILE, TABLET, LAPTOP)
       ========================================================================== */
    @media (max-width: 1024px) {
      #ob-blogs-redesign-page {
        padding-top: 60px !important;
        margin-top: 20px !important;
      }
      .ob-sj-hero-card {
        grid-template-columns: 1fr !important;
        padding: 38px 28px !important;
        gap: 30px !important;
      }
      .ob-sj-hero-left h1 {
        font-size: 2.4rem !important;
      }
      .ob-sj-grid {
        grid-template-columns: repeat(2, 1fr) !important;
        gap: 22px !important;
      }
      
      
      .ob-sj-bottom-banner {
        flex-direction: column !important;
        gap: 10px !important;
        padding: 12px 16px !important;
        text-align: center !important;
      }
    }

    @media (max-width: 640px) {
      #ob-blogs-redesign-page {
        padding-top: 45px !important;
        margin-top: 15px !important;
      }
      .ob-sj-container {
        padding: 0 16px !important;
      }
      .ob-sj-hero-card {
        padding: 28px 18px !important;
        border-radius: 20px !important;
      }
      .ob-sj-hero-left h1 {
        font-size: 1.95rem !important;
      }
      .ob-sj-hero-left p {
        font-size: 0.98rem !important;
      }
      .ob-sj-form-grid {
        grid-template-columns: 1fr !important;
      }
      .ob-sj-form-group.is-full {
        grid-column: span 1 !important;
      }
      .ob-sj-form-card {
        padding: 20px 16px !important;
      }
      .ob-sj-grid {
        grid-template-columns: 1fr !important;
        gap: 20px !important;
      }
      .ob-sj-filter-bar {
        padding: 14px !important;
        flex-direction: column !important;
        align-items: stretch !important;
      }
      .ob-sj-search-wrap {
        min-width: 100% !important;
      }
      
      .ob-sj-banner-text span {
        display: none !important;
      }
    }
  </style>

  <div class="ob-sj-container">

    <!-- Breadcrumb Navigation -->
    <nav class="ob-sj-breadcrumbs" aria-label="Breadcrumb">
      <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
      <span class="ob-sj-breadcrumbs-sep">&rsaquo;</span>
      <span class="ob-sj-breadcrumbs-current">India Expansion &amp; Operations Blog</span>
    </nav>

    <!-- IMAGE 1 REFERENCE: HERO BANNER IN EXACT OB YELLOW (#ffc700) WITH SPLIT FORM -->
    <header class="ob-sj-hero-card">
      <div class="ob-sj-hero-left">
        <h1>
          India Expansion Blog
        </h1>
        <p>
          This is the official India expansion, entity setup, and operational scaling blog run by Overseas Bridge. It offers a wealth of actionable frameworks, regulatory guides, and practical intelligence on the ever-evolving South India business ecosystem — covering corporate incorporation, FDI compliance, zero-CapEx offices, and high-velocity team scaling.
        </p>
        <div class="ob-sj-hero-badges">
          <span class="ob-sj-hero-badge">⚡ 100% Automatic FDI Route</span>
          <span class="ob-sj-hero-badge">🏙️ BLR &bull; MAA &bull; HYD &bull; CJB</span>
          <span class="ob-sj-hero-badge">🛡️ Zero CapEx Setup</span>
        </div>
      </div>

      <!-- Strategy Blueprint Lead Form (Matching Image 1 Right Side) -->
      <div class="ob-sj-form-card">
        <h2>Get An India Expansion Strategy For Your Business <span>Worth $1997 for FREE</span></h2>
        
        <form id="obSjBlueprintForm" onsubmit="handleSjFormSubmit(event)">
          <div class="ob-sj-form-grid">
            <div class="ob-sj-form-group">
              <input type="text" id="sjName" class="ob-sj-input" placeholder="Name*" required />
            </div>
            <div class="ob-sj-form-group">
              <input type="email" id="sjEmail" class="ob-sj-input" placeholder="Work Email*" required />
            </div>
            <div class="ob-sj-form-group">
              <input type="tel" id="sjPhone" class="ob-sj-input" placeholder="Phone / WhatsApp*" required />
            </div>
            <div class="ob-sj-form-group">
              <select id="sjService" class="ob-sj-input" required>
                <option value="" disabled selected>Service Interest*</option>
                <option value="India Entry & Entity Setup">India Entry &amp; Entity Setup</option>
                <option value="Office, BPO & GCC Pod">Office, BPO &amp; GCC Pod</option>
                <option value="Studio Setup">Professional Studio Setup</option>
                <option value="Factory Setup">Factory &amp; Manufacturing</option>
                <option value="Marketing & Growth">Marketing &amp; Growth</option>
                <option value="Business Support & Tax">Business Support &amp; Tax</option>
              </select>
            </div>
            <div class="ob-sj-form-group is-full">
              <textarea id="sjMessage" class="ob-sj-textarea" placeholder="Tell us about your team size, target city, or specific requirements*..." required></textarea>
            </div>
            <div class="ob-sj-form-group is-full">
              <button type="submit" class="ob-sj-submit-btn">
                <span>Request Free Strategy Blueprint</span> &rarr;
              </button>
            </div>
          </div>
        </form>

        <div id="obSjFormSuccess" class="ob-sj-form-success">
          <div style="font-size: 1.5rem; margin-bottom: 6px;">🎉</div>
          <h3 style="font-size: 1.15rem; margin: 0 0 6px 0; color: #ffc700; font-weight: 850;">Strategy Request Received!</h3>
          <p style="font-size: 0.88rem; color: #cbd5e1; margin: 0;">Our South India expansion director will contact you with your custom blueprint within 24 hours.</p>
        </div>
      </div>
    </header>

    <!-- CATEGORY FILTER & LIVE SEARCH BAR -->
    <div class="ob-sj-filter-bar">
      <div class="ob-sj-filter-pills">
        <button class="ob-sj-pill is-active" data-cat="all" onclick="selectSjCategory(this, 'all')">
          All Guides (4)
        </button>
        <button class="ob-sj-pill" data-cat="entity" onclick="selectSjCategory(this, 'entity')">
          Entity Setup &amp; FDI
        </button>
        <button class="ob-sj-pill" data-cat="cost" onclick="selectSjCategory(this, 'cost')">
          Capital &amp; Costs
        </button>
        <button class="ob-sj-pill" data-cat="city" onclick="selectSjCategory(this, 'city')">
          South India Hubs
        </button>
        <button class="ob-sj-pill" data-cat="team" onclick="selectSjCategory(this, 'team')">
          Team Scaling
        </button>
      </div>

      <div class="ob-sj-search-wrap">
        <span class="ob-sj-search-icon">🔍</span>
        <input 
          type="text" 
          id="obSjSearchInput" 
          class="ob-sj-search-input" 
          placeholder="Search guides..." 
          onkeyup="filterSjCards()"
        />
      </div>
    </div>

    <!-- IMAGE 2 & 3 REFERENCE: 3-COLUMN "BLOGS IN BOXES" GRID -->
    <div class="ob-sj-grid" id="obSjBlogGrid">

      <!-- BOX 1: How to Set Up a Business in India as a Foreign Company -->
      <a href="<?php echo esc_url(home_url('/how-to-set-up-business-in-india-as-foreign-company/')); ?>" class="ob-sj-card" data-category="entity" data-keywords="how to set up business in india foreign company entity private limited wos llp incorporation fdi rbi spice mca">
        <div class="ob-sj-card-thumb">
          <span class="ob-sj-card-cat-pill">Entity Setup &amp; FDI</span>
          <img 
            src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=700&q=80" 
            alt="How to Set Up a Business in India as a Foreign Company" 
            class="ob-sj-card-img"
            loading="lazy"
          />
        </div>
        <div class="ob-sj-card-body">
          <h2 class="ob-sj-card-title">
            HOW TO SET UP A BUSINESS IN INDIA AS A FOREIGN COMPANY: A STEP-BY-STEP GUIDE
          </h2>
          <div class="ob-sj-card-meta">
            by Overseas Bridge | Sep 2026 | Entity Setup &amp; FDI | 0 Comments
          </div>
          <p class="ob-sj-card-excerpt">
            A definitive guide covering corporate entity selection (WOS vs. LLP vs. Branch Office), SPICe+ MCA incorporation, RBI Automatic FDI routes, statutory PAN/TAN filings, and corporate bank accounts.
          </p>
          <div class="ob-sj-card-footer">
            <span style="font-size: 0.8rem; color: #64748b; font-weight: 700;">7 min read</span>
            <span class="ob-sj-read-link">Read Full Guide &rarr;</span>
          </div>
        </div>
      </a>

      <!-- BOX 2: How Much Does It Cost to Set Up and Run a Business in India? -->
      <a href="<?php echo esc_url(home_url('/cost-to-set-up-business-in-india/')); ?>" class="ob-sj-card" data-category="cost" data-keywords="how much does it cost to set up and run business in india budget 200 capital hardware leasing office rent salary taxes accounting">
        <div class="ob-sj-card-thumb">
          <span class="ob-sj-card-cat-pill">Capital &amp; Costs</span>
          <img 
            src="https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?auto=format&fit=crop&w=700&q=80" 
            alt="How Much Does It Cost to Set Up and Run a Business in India" 
            class="ob-sj-card-img"
            loading="lazy"
          />
        </div>
        <div class="ob-sj-card-body">
          <h2 class="ob-sj-card-title">
            HOW MUCH DOES IT COST TO SET UP AND RUN A BUSINESS IN INDIA?
          </h2>
          <div class="ob-sj-card-meta">
            by Overseas Bridge | Sep 2026 | Capital &amp; Costs | 0 Comments
          </div>
          <p class="ob-sj-card-excerpt">
            Clear financial blueprint demystifying entry expenses: US$200 lean capitalization models, Zero CapEx hardware leasing, Grade-A office rent benchmarks, and recurring compliance costs.
          </p>
          <div class="ob-sj-card-footer">
            <span style="font-size: 0.8rem; color: #64748b; font-weight: 700;">6 min read</span>
            <span class="ob-sj-read-link">Read Full Guide &rarr;</span>
          </div>
        </div>
      </a>

      <!-- BOX 3: Bengaluru vs Chennai vs Hyderabad vs Coimbatore -->
      <a href="<?php echo esc_url(home_url('/bengaluru-vs-chennai-vs-hyderabad-vs-coimbatore-business-setup/')); ?>" class="ob-sj-card" data-category="city" data-keywords="bengaluru vs chennai vs hyderabad vs coimbatore where should you set up your india operations cities south india gcc talent">
        <div class="ob-sj-card-thumb">
          <span class="ob-sj-card-cat-pill">South India Hubs</span>
          <img 
            src="https://images.unsplash.com/photo-1596176530529-78163a4f7af2?auto=format&fit=crop&w=700&q=80" 
            alt="Bengaluru vs Chennai vs Hyderabad vs Coimbatore" 
            class="ob-sj-card-img"
            loading="lazy"
          />
        </div>
        <div class="ob-sj-card-body">
          <h2 class="ob-sj-card-title">
            BENGALURU VS CHENNAI VS HYDERABAD VS COIMBATORE: WHERE SHOULD YOU SET UP?
          </h2>
          <div class="ob-sj-card-meta">
            by Overseas Bridge | Sep 2026 | South India Hubs | 0 Comments
          </div>
          <p class="ob-sj-card-excerpt">
            A strategic, 4-city decision matrix comparing engineering talent density, Grade-A commercial rentals, deep-water port logistics, airport connectivity, and operational costs.
          </p>
          <div class="ob-sj-card-footer">
            <span style="font-size: 0.8rem; color: #64748b; font-weight: 700;">8 min read</span>
            <span class="ob-sj-read-link">Read Full Guide &rarr;</span>
          </div>
        </div>
      </a>

      <!-- BOX 4: Start with 2 Employees, Scale to 500+ -->
      <a href="<?php echo esc_url(home_url('/build-scale-team-india-2-to-500-employees/')); ?>" class="ob-sj-card" data-category="team" data-keywords="start with 2 employees scale to 500 how to build your india operations hiring gcc bpo pod remote turnkey workforce">
        <div class="ob-sj-card-thumb">
          <span class="ob-sj-card-cat-pill">Team Scaling</span>
          <img 
            src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=700&q=80" 
            alt="Start with 2 Employees Scale to 500+" 
            class="ob-sj-card-img"
            loading="lazy"
          />
        </div>
        <div class="ob-sj-card-body">
          <h2 class="ob-sj-card-title">
            START WITH 2 EMPLOYEES, SCALE TO 500+: HOW TO BUILD YOUR INDIA OPERATIONS
          </h2>
          <div class="ob-sj-card-meta">
            by Overseas Bridge | Sep 2026 | Team Scaling | 0 Comments
          </div>
          <p class="ob-sj-card-excerpt">
            How foreign enterprises launch lean 2-specialist pilot pods today and scale systematically into 500+ seat Global Capability Centres without upfront capital overheads.
          </p>
          <div class="ob-sj-card-footer">
            <span style="font-size: 0.8rem; color: #64748b; font-weight: 700;">9 min read</span>
            <span class="ob-sj-read-link">Read Full Guide &rarr;</span>
          </div>
        </div>
      </a>

      <!-- DYNAMIC WORDPRESS POSTS LOOP (For client to add posts seamlessly via WP Admin) -->
      <?php
      $custom_query = new WP_Query(array(
          'post_type'      => 'post',
          'post_status'    => 'publish',
          'posts_per_page' => 12,
          'post__not_in'   => array(1) // Exclude default Hello World
      ));

      if ($custom_query->have_posts()) :
          while ($custom_query->have_posts()) : $custom_query->the_post();
              $slug = get_post_field('post_name', get_the_ID());
              // Skip if already hard-highlighted above to prevent duplication
              if (in_array($slug, array('how-to-set-up-business-in-india-as-foreign-company', 'cost-to-set-up-business-in-india', 'bengaluru-vs-chennai-vs-hyderabad-vs-coimbatore-business-setup', 'build-scale-team-india-2-to-500-employees'))) {
                  continue;
              }

              $thumb_url = get_the_post_thumbnail_url(get_the_ID(), 'large');
              if (!$thumb_url) {
                  $thumb_url = 'https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&w=700&q=80';
              }
              $cats = get_the_category();
              $cat_name = !empty($cats) ? esc_html($cats[0]->name) : 'Insight';
      ?>
      <a href="<?php the_permalink(); ?>" class="ob-sj-card" data-category="all" data-keywords="<?php echo esc_attr(strtolower(get_the_title() . ' ' . strip_tags(get_the_excerpt()))); ?>">
        <div class="ob-sj-card-thumb">
          <span class="ob-sj-card-cat-pill"><?php echo $cat_name; ?></span>
          <img 
            src="<?php echo esc_url($thumb_url); ?>" 
            alt="<?php the_title_attribute(); ?>" 
            class="ob-sj-card-img"
            loading="lazy"
          />
        </div>
        <div class="ob-sj-card-body">
          <h2 class="ob-sj-card-title">
            <?php the_title(); ?>
          </h2>
          <div class="ob-sj-card-meta">
            by <?php the_author(); ?> | <?php echo get_the_date('M j, Y'); ?> | <?php echo $cat_name; ?> | 0 Comments
          </div>
          <p class="ob-sj-card-excerpt">
            <?php echo wp_trim_words(get_the_excerpt(), 22, '...'); ?>
          </p>
          <div class="ob-sj-card-footer">
            <span style="font-size: 0.8rem; color: #64748b; font-weight: 700;">Article</span>
            <span class="ob-sj-read-link">Read Full Guide &rarr;</span>
          </div>
        </div>
      </a>
      <?php
          endwhile;
          wp_reset_postdata();
      endif;
      ?>

      <!-- Empty state when search yields no matches -->
      <div class="ob-sj-no-results" id="obSjNoResults">
        <h3 style="font-size: 1.25rem; color: #050b1a; margin: 0 0 8px 0;">🔍 No matching guides found</h3>
        <p style="font-size: 0.95rem; color: #64748b; margin: 0;">Try searching for other terms like "Entity", "Cost", "Bengaluru", "Chennai", "Team", or "FDI".</p>
      </div>

    </div>

    

  </div>

  <!-- IMAGE 1 BOTTOM REFERENCE: STICKY AUDIT BANNER IN OB YELLOW (#ffc700) -->
  <aside id="obSjBottomBanner" class="ob-sj-bottom-banner" aria-label="Expansion Audit Banner">
    <div class="ob-sj-banner-text">
      🚀 <strong>Schedule Your Free India Expansion Audit</strong>
      <span>Discover exactly how international brands launch in South India in under 14 days.</span>
    </div>
    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="ob-sj-banner-btn">
      Get Free Audit &rarr;
    </a>
    <button class="ob-sj-banner-close" onclick="dismissSjBanner()" aria-label="Close Announcement">&times;</button>
  </aside>

</main>

<script id="ob-sj-instant-filter-script">
document.addEventListener('DOMContentLoaded', function() {
  // Reading Progress Bar & Back to Top Logic
  window.addEventListener('scroll', function() {
    var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
    var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    var scrolled = (height > 0) ? (winScroll / height) * 100 : 0;
    
    var pBar = document.getElementById('obReadingProgressBar');
    if (pBar) {
      pBar.style.width = scrolled + '%';
    }
    
    var btt = document.getElementById('obBackToTop');
    var circle = document.getElementById('obProgressCircle');
    if (btt && circle) {
      if (winScroll > 300) {
        btt.classList.add('is-visible');
        var offset = 144.5 - (144.5 * (scrolled / 100));
        circle.style.strokeDashoffset = offset;
      } else {
        btt.classList.remove('is-visible');
      }
    }
  });

  var bttBtn = document.getElementById('obBackToTop');
  if (bttBtn) {
    bttBtn.addEventListener('click', function() {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  }
});

// Category & Search Filter Logic
var currentSjCategory = 'all';

function selectSjCategory(btn, cat) {
  var pills = document.querySelectorAll('.ob-sj-pill');
  pills.forEach(function(p) { p.classList.remove('is-active'); });
  btn.classList.add('is-active');
  currentSjCategory = cat;
  filterSjCards();
}

function filterSjCards() {
  var searchVal = (document.getElementById('obSjSearchInput').value || '').toLowerCase().trim();
  var cards = document.querySelectorAll('.ob-sj-card');
  var visibleCount = 0;

  cards.forEach(function(card) {
    var cat = card.getAttribute('data-category') || 'all';
    var keywords = (card.getAttribute('data-keywords') || '').toLowerCase();
    var title = (card.querySelector('.ob-sj-card-title') ? card.querySelector('.ob-sj-card-title').innerText : '').toLowerCase();

    var matchesCat = (currentSjCategory === 'all') || (cat === currentSjCategory);
    var matchesSearch = (searchVal === '') || (keywords.indexOf(searchVal) !== -1) || (title.indexOf(searchVal) !== -1);

    if (matchesCat && matchesSearch) {
      card.style.display = 'flex';
      visibleCount++;
    } else {
      card.style.display = 'none';
    }
  });

  var noResults = document.getElementById('obSjNoResults');
  if (noResults) {
    if (visibleCount === 0) {
      noResults.style.display = 'block';
    } else {
      noResults.style.display = 'none';
    }
  }
}

// Strategy Form Handler
function handleSjFormSubmit(e) {
  e.preventDefault();
  var form = document.getElementById('obSjBlueprintForm');
  var success = document.getElementById('obSjFormSuccess');
  if (form && success) {
    form.style.display = 'none';
    success.style.display = 'block';
  }
}

// Sticky Banner Dismiss
function dismissSjBanner() {
  var banner = document.getElementById('obSjBottomBanner');
  if (banner) {
    banner.classList.add('is-hidden');
  }
}
</script>

<?php get_footer(); ?>
