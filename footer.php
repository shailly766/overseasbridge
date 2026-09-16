<?php
/**
 * Master Site Footer Template (Section 10 - Editorial Closing Experience)
 *
 * @package Overseas_Bridge
 */
?>
<footer class="ob-s10-footer" id="site-footer" role="contentinfo">

  <!-- SCOPED MASTER CSS FOR SECTION 10 FOOTER -->
  <style id="ob-s10-scoped-master-css">
    /* ==========================================================================
       SECTION 10 MASTER SCOPED CSS (PREMIUM EDITORIAL CLOSING FOOTER)
       ========================================================================== */
    .ob-s10-footer {
      background: #fffdf9 !important;
      position: relative !important;
      overflow: hidden !important;
      padding: 100px 0 45px 0 !important;
      border-top: 1px solid #fef3c7 !important;
      box-sizing: border-box !important;
      font-family: 'Outfit', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif !important;
      color: #0f172a !important;
    }

    /* --------------------------------------------------------------------------
       1. UNIQUE SECTION 10 BACKGROUND ATMOSPHERE (PEARL CANVAS + RADIAL BLOBS)
       -------------------------------------------------------------------------- */
    .ob-s10-bg-blob {
      position: absolute;
      border-radius: 50%;
      filter: blur(95px);
      pointer-events: none;
      z-index: 1;
      opacity: 0.38;
      will-change: transform;
    }
    .ob-s10-blob-blue {
      width: 520px;
      height: 520px;
      background: radial-gradient(circle, #bae6fd 0%, rgba(186, 230, 253, 0) 70%);
      top: -60px;
      left: 2%;
      animation: obS10FloatA 24s ease-in-out infinite alternate !important;
    }
    .ob-s10-blob-lavender {
      width: 480px;
      height: 480px;
      background: radial-gradient(circle, #ddd6fe 0%, rgba(221, 214, 254, 0) 70%);
      top: 25%;
      right: 4%;
      animation: obS10FloatB 28s ease-in-out infinite alternate !important;
    }
    .ob-s10-blob-peach {
      width: 460px;
      height: 460px;
      background: radial-gradient(circle, #fed7aa 0%, rgba(254, 215, 170, 0) 70%);
      bottom: -30px;
      left: 30%;
      animation: obS10FloatC 22s ease-in-out infinite alternate !important;
    }
    .ob-s10-blob-mint {
      width: 440px;
      height: 440px;
      background: radial-gradient(circle, #bbf7d0 0%, rgba(187, 247, 208, 0) 70%);
      bottom: 10%;
      right: 25%;
      animation: obS10FloatD 26s ease-in-out infinite alternate !important;
    }

    @keyframes obS10FloatA {
      0% { transform: translate(0, 0) scale(1); }
      100% { transform: translate(32px, -20px) scale(1.08); }
    }
    @keyframes obS10FloatB {
      0% { transform: translate(0, 0) scale(0.95); }
      100% { transform: translate(-28px, 26px) scale(1.10); }
    }
    @keyframes obS10FloatC {
      0% { transform: translate(0, 0) scale(1); }
      100% { transform: translate(25px, 20px) scale(1.06); }
    }
    @keyframes obS10FloatD {
      0% { transform: translate(0, 0) scale(1.05); }
      100% { transform: translate(-20px, -24px) scale(0.95); }
    }

    /* Floating vector objects */
    .ob-s10-decor-obj {
      position: absolute;
      pointer-events: none;
      z-index: 3;
      opacity: 0.70;
      will-change: transform;
      transition: transform 0.25s cubic-bezier(0.16, 1, 0.3, 1);
    }
    .ob-s10-decor-1 { top: 8%; left: 4%; animation: obS10Spin 18s linear infinite !important; }
    .ob-s10-decor-2 { top: 22%; right: 6%; animation: obS10FloatV 10s ease-in-out infinite alternate !important; }
    .ob-s10-decor-3 { top: 60%; left: 2%; animation: obS10FloatH 14s ease-in-out infinite alternate !important; }
    .ob-s10-decor-4 { bottom: 16%; right: 5%; animation: obS10FloatV 12s ease-in-out infinite alternate !important; }

    @keyframes obS10FloatV {
      0% { transform: translateY(0); }
      100% { transform: translateY(-15px); }
    }
    @keyframes obS10FloatH {
      0% { transform: translateX(0); }
      100% { transform: translateX(16px); }
    }
    @keyframes obS10Spin {
      0% { transform: rotate(0deg); }
      100% { transform: rotate(360deg); }
    }

    /* --------------------------------------------------------------------------
       2. TOP FLOWING TRANSITION WAVE
       -------------------------------------------------------------------------- */
    .ob-s10-transition-wave {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 48px;
      pointer-events: none;
      z-index: 4;
    }

    /* --------------------------------------------------------------------------
       3. CONTAINER & LEVEL 1: FOOTER TOP CLOSING CTA BLOCK
       -------------------------------------------------------------------------- */
    .ob-s10-container {
      max-width: 1280px;
      margin: 0 auto;
      padding: 0 24px;
      position: relative;
      z-index: 10;
      box-sizing: border-box;
    }

    .ob-s10-top-cta {
      background: rgba(255, 255, 255, 0.95);
      backdrop-filter: blur(20px);
      -webkit-backdrop-filter: blur(20px);
      border: 1.5px solid #fde68a;
      border-radius: 24px;
      padding: 32px 40px;
      margin-bottom: 64px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 24px;
      box-shadow: 0 16px 40px -10px rgba(245, 158, 11, 0.14), 0 2px 6px rgba(0, 0, 0, 0.02);
      position: relative;
    }
    .ob-s10-top-cta-left {
      flex: 1;
    }
    .ob-s10-top-cta-badge {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      font-size: 0.74rem;
      font-weight: 800;
      letter-spacing: 0.08em;
      text-transform: uppercase;
      color: #b45309;
      background: #fef3c7;
      border: 1px solid #fde68a;
      border-radius: 16px;
      padding: 4px 12px;
      margin-bottom: 10px;
    }
    .ob-s10-top-cta-title {
      font-size: clamp(22px, 2.4vw, 30px) !important;
      font-weight: 800 !important;
      color: #0f172a !important;
      line-height: 1.25 !important;
      margin: 0 0 6px 0 !important;
      letter-spacing: -0.02em !important;
    }
    .ob-s10-top-cta-desc {
      font-size: 0.96rem !important;
      color: #64748b !important;
      margin: 0 !important;
    }
    .ob-s10-top-cta-btn {
      display: inline-flex;
      align-items: center;
      gap: 10px;
      padding: 16px 36px !important;
      font-size: 1rem !important;
      font-weight: 800 !important;
      border-radius: 50px !important;
      background: #f59e0b !important;
      color: #0f172a !important;
      text-decoration: none !important;
      box-shadow: 0 10px 24px -4px rgba(245, 158, 11, 0.40) !important;
      white-space: nowrap !important;
      transition: transform 0.28s cubic-bezier(0.16, 1, 0.3, 1), 
                  box-shadow 0.28s cubic-bezier(0.16, 1, 0.3, 1), 
                  background-color 0.28s ease !important;
    }
    .ob-s10-top-cta-btn svg {
      transition: transform 0.28s cubic-bezier(0.16, 1, 0.3, 1);
    }
    @media (hover: hover) {
      .ob-s10-top-cta-btn:hover {
        transform: translateY(-3px) !important;
        box-shadow: 0 16px 32px -6px rgba(245, 158, 11, 0.52) !important;
        background: #fbbf24 !important;
      }
      .ob-s10-top-cta-btn:hover svg {
        transform: translateX(5px);
      }
    }

    /* --------------------------------------------------------------------------
       4. LEVEL 2: 4-COLUMN EDITORIAL NAVIGATION GRID
       -------------------------------------------------------------------------- */
    .ob-s10-grid {
      display: grid;
      grid-template-columns: 34% 21% 21% 24%;
      gap: 36px;
      margin-bottom: 56px;
      align-items: start;
    }

    /* Column 1: Brand & Animated Connection Visual */
    .ob-s10-brand-col {
      display: flex;
      flex-direction: column;
    }
    .ob-s10-logo {
      display: inline-flex;
      align-items: center;
      gap: 10px;
      text-decoration: none;
      color: #0f172a;
      font-size: 1.55rem;
      font-weight: 800;
      letter-spacing: -0.03em;
      transition: transform 0.3s ease;
    }
    .ob-s10-logo:hover {
      transform: scale(1.02);
    }
    .ob-s10-logo-badge {
      width: 38px;
      height: 38px;
      border-radius: 50%;
      background: #ffc700;
      color: #0f172a;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      font-weight: 900;
      font-size: 1.25rem;
      box-shadow: 0 4px 12px rgba(255, 199, 0, 0.35);
    }
    .ob-s10-brand-desc {
      color: #475569;
      font-size: 0.90rem;
      line-height: 1.68;
      margin: 16px 0 20px 0;
      max-width: 360px;
    }

    /* Animated Global Connection Visual */
    .ob-s10-connection-visual {
      background: rgba(255, 255, 255, 0.90);
      border: 1px solid #e2e8f0;
      border-radius: 18px;
      padding: 14px 18px;
      margin-bottom: 20px;
      max-width: 360px;
      box-shadow: 0 4px 14px rgba(0, 0, 0, 0.02);
    }
    .ob-s10-connection-title {
      font-size: 0.76rem;
      font-weight: 800;
      letter-spacing: 0.06em;
      text-transform: uppercase;
      color: #64748b;
      margin-bottom: 8px;
      display: flex;
      align-items: center;
      gap: 6px;
    }
    .ob-s10-connection-svg {
      width: 100%;
      height: 48px;
      overflow: visible;
    }
    .ob-s10-conn-line {
      stroke: #cbd5e1;
      stroke-width: 2;
      stroke-linecap: round;
      fill: none;
    }
    .ob-s10-conn-pulse-dot {
      fill: #f59e0b;
      animation: obS10ParticleFlow 6s linear infinite !important;
    }
    @keyframes obS10ParticleFlow {
      0% { offset-distance: 0%; opacity: 0; }
      10% { opacity: 1; }
      90% { opacity: 1; }
      100% { offset-distance: 100%; opacity: 0; }
    }

    /* Social Media Area */
    .ob-s10-social-wrap {
      display: flex;
      gap: 12px;
      align-items: center;
    }
    .ob-s10-social-btn {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      background: #ffffff;
      border: 1.5px solid #e2e8f0;
      color: #334155;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      text-decoration: none;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.04);
      transition: transform 0.28s cubic-bezier(0.16, 1, 0.3, 1), 
                  border-color 0.28s ease, 
                  background-color 0.28s ease, 
                  color 0.28s ease, 
                  box-shadow 0.28s ease;
    }
    .ob-s10-social-btn svg {
      width: 18px;
      height: 18px;
      transition: transform 0.28s cubic-bezier(0.16, 1, 0.3, 1);
    }
    @media (hover: hover) {
      .ob-s10-social-btn:hover {
        transform: translateY(-4px);
        box-shadow: 0 8px 18px rgba(0, 0, 0, 0.08);
      }
      .ob-s10-social-btn:hover svg {
        transform: rotate(8deg) scale(1.1);
      }
      .ob-s10-social-btn.is-linkedin:hover { background: #0077b5; border-color: #0077b5; color: #ffffff; }
      .ob-s10-social-btn.is-instagram:hover { background: #e4405f; border-color: #e4405f; color: #ffffff; }
      .ob-s10-social-btn.is-facebook:hover { background: #1877f2; border-color: #1877f2; color: #ffffff; }
      .ob-s10-social-btn.is-whatsapp:hover { background: #25d366; border-color: #25d366; color: #ffffff; }
    }

    /* Columns 2 & 3: Navigation Columns */
    .ob-s10-col-title {
      font-size: 1rem !important;
      font-weight: 800 !important;
      color: #0f172a !important;
      margin: 0 0 20px 0 !important;
      letter-spacing: -0.015em !important;
      position: relative;
      display: inline-block;
    }
    .ob-s10-col-title::after {
      content: '';
      position: absolute;
      left: 0;
      bottom: -6px;
      width: 24px;
      height: 2.5px;
      background: #f59e0b;
      border-radius: 2px;
    }
    .ob-s10-links {
      list-style: none !important;
      padding: 0 !important;
      margin: 0 !important;
      display: flex !important;
      flex-direction: column !important;
      gap: 12px !important;
    }
    .ob-s10-link-item a {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      color: #475569;
      text-decoration: none;
      font-size: 0.92rem;
      font-weight: 600;
      transition: transform 0.28s cubic-bezier(0.16, 1, 0.3, 1), color 0.24s ease;
    }
    .ob-s10-link-arrow {
      opacity: 0;
      transform: translateX(-4px);
      transition: opacity 0.24s ease, transform 0.24s cubic-bezier(0.16, 1, 0.3, 1);
      color: #d97706;
      font-weight: 800;
    }
    @media (hover: hover) {
      .ob-s10-link-item a:hover {
        color: #d97706;
        transform: translateX(5px);
      }
      .ob-s10-link-item a:hover .ob-s10-link-arrow {
        opacity: 1;
        transform: translateX(0);
      }
    }

    /* Column 4: Contact & Newsletter Hub */
    .ob-s10-contact-items {
      display: flex;
      flex-direction: column;
      gap: 12px;
      margin-bottom: 24px;
    }
    .ob-s10-contact-item {
      display: flex;
      align-items: flex-start;
      gap: 10px;
      font-size: 0.88rem;
      color: #475569;
      line-height: 1.45;
    }
    .ob-s10-contact-icon {
      width: 28px;
      height: 28px;
      border-radius: 8px;
      background: #f8fafc;
      border: 1px solid #e2e8f0;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      color: #0284c7;
      flex-shrink: 0;
      margin-top: -2px;
    }
    .ob-s10-contact-icon svg {
      width: 14px;
      height: 14px;
    }
    .ob-s10-contact-link { color: inherit !important; text-decoration: none !important; transition: color 0.2s ease !important; }
    .ob-s10-contact-link:hover { color: #d97706 !important; text-decoration: underline !important; }
    .ob-s10-contact-strong {
      color: #0f172a;
      font-weight: 700;
    }

    /* Compact Newsletter Box */
    .ob-s10-newsletter-box {
      background: rgba(255, 255, 255, 0.95);
      border: 1.5px solid #fde68a;
      border-radius: 18px;
      padding: 16px 18px;
      box-shadow: 0 6px 18px -4px rgba(245, 158, 11, 0.10);
    }
    .ob-s10-news-title {
      font-size: 0.86rem !important;
      font-weight: 800 !important;
      color: #0f172a !important;
      margin: 0 0 4px 0 !important;
    }
    .ob-s10-news-desc {
      font-size: 0.78rem !important;
      color: #64748b !important;
      margin: 0 0 10px 0 !important;
      line-height: 1.4 !important;
    }
    .ob-s10-news-form {
      display: flex;
      gap: 8px;
    }
    .ob-s10-news-input {
      flex: 1;
      padding: 8px 12px;
      font-size: 0.84rem;
      border-radius: 10px;
      border: 1px solid #cbd5e1;
      background: #f8fafc;
      outline: none;
      color: #0f172a;
      transition: border-color 0.24s ease, box-shadow 0.24s ease;
    }
    .ob-s10-news-input:focus {
      border-color: #f59e0b;
      box-shadow: 0 0 0 2px rgba(245, 158, 11, 0.2);
      background: #ffffff;
    }
    .ob-s10-news-btn {
      padding: 8px 14px;
      font-size: 0.82rem;
      font-weight: 800;
      border-radius: 10px;
      background: #f59e0b;
      color: #0f172a;
      border: none;
      cursor: pointer;
      white-space: nowrap;
      transition: background-color 0.24s ease, transform 0.24s ease;
    }
    .ob-s10-news-btn:hover {
      background: #fbbf24;
      transform: translateY(-1px);
    }

    /* --------------------------------------------------------------------------
       5. LEVEL 3: TRUST INDICATORS & PILLS BAR
       -------------------------------------------------------------------------- */
    .ob-s10-trust-bar {
      display: flex;
      align-items: center;
      justify-content: center;
      flex-wrap: wrap;
      gap: 14px 20px;
      margin-bottom: 40px;
      padding: 16px 20px;
      border-radius: 20px;
      background: rgba(255, 255, 255, 0.85);
      border: 1px solid #fde68a;
      box-shadow: 0 4px 16px rgba(0, 0, 0, 0.02);
    }
    .ob-s10-trust-badge {
      display: inline-flex;
      align-items: center;
      gap: 7px;
      font-size: 0.82rem;
      font-weight: 700;
      color: #334155;
    }
    .ob-s10-trust-icon {
      color: #f59e0b;
      font-size: 0.95rem;
    }
    .ob-s10-trust-divider {
      color: #cbd5e1;
      font-size: 0.8rem;
    }

    /* --------------------------------------------------------------------------
       6. LEVEL 4: GRADIENT DIVIDER & BOTTOM LEGAL ROW
       -------------------------------------------------------------------------- */
    .ob-s10-divider {
      height: 1px;
      width: 100%;
      background: linear-gradient(90deg, rgba(245, 158, 11, 0) 0%, rgba(245, 158, 11, 0.4) 30%, rgba(14, 165, 233, 0.4) 70%, rgba(14, 165, 233, 0) 100%);
      margin-bottom: 24px;
      position: relative;
    }

    .ob-s10-bottom {
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
      gap: 16px;
      font-size: 0.86rem;
      color: #64748b;
    }
    .ob-s10-copyright {
      display: flex;
      align-items: center;
      gap: 8px;
    }
    .ob-s10-copyright-dot {
      width: 7px;
      height: 7px;
      border-radius: 50%;
      background: #10b981;
      box-shadow: 0 0 0 rgba(16, 185, 129, 0.5);
      animation: obS10DotPulse 2s infinite !important;
    }
    @keyframes obS10DotPulse {
      0% { box-shadow: 0 0 0 0 rgba(16, 185, 129, 0.7); }
      70% { box-shadow: 0 0 0 6px rgba(16, 185, 129, 0); }
      100% { box-shadow: 0 0 0 0 rgba(16, 185, 129, 0); }
    }
    .ob-s10-legal-links {
      display: flex;
      gap: 20px;
      align-items: center;
    }
    .ob-s10-legal-link {
      color: #64748b;
      text-decoration: none;
      font-weight: 600;
      transition: color 0.24s ease;
    }
    .ob-s10-legal-link:hover {
      color: #0f172a;
    }

    /* --------------------------------------------------------------------------
       7. RESPONSIVE DESIGN (TABLET & MOBILE)
       -------------------------------------------------------------------------- */
    @media (max-width: 1024px) {
      .ob-s10-footer {
        padding: 80px 0 35px 0 !important;
      }
      .ob-s10-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 36px;
      }
      .ob-s10-top-cta {
        flex-direction: column;
        align-items: flex-start;
        padding: 28px 24px;
      }
      .ob-s10-top-cta-btn {
        width: 100%;
        justify-content: center;
      }
    }

    @media (max-width: 640px) {
      .ob-s10-footer {
        padding: 60px 0 30px 0 !important;
      }
      .ob-s10-container {
        padding: 0 16px;
      }
      .ob-s10-grid {
        grid-template-columns: 1fr;
        gap: 32px;
      }
      .ob-s10-trust-bar {
        flex-direction: column;
        align-items: flex-start;
        gap: 10px;
      }
      .ob-s10-trust-divider {
        display: none;
      }
      .ob-s10-bottom {
        flex-direction: column;
        align-items: flex-start;
        gap: 12px;
      }
      .ob-s10-legal-links {
        flex-wrap: wrap;
        gap: 14px;
      }
    }

    /* Accessibility reduced motion */
    @media (prefers-reduced-motion: reduce) {
      .ob-s10-bg-blob,
      .ob-s10-decor-obj,
      .ob-s10-conn-pulse-dot {
        animation: none !important;
        transition: none !important;
      }
    }
  </style>

  <!-- BACKGROUND ATMOSPHERIC RADIAL BLOBS -->
  <div class="ob-s10-bg-blob ob-s10-blob-blue"></div>
  <div class="ob-s10-bg-blob ob-s10-blob-lavender"></div>
  <div class="ob-s10-bg-blob ob-s10-blob-peach"></div>
  <div class="ob-s10-bg-blob ob-s10-blob-mint"></div>

  <!-- FLOATING VECTOR GRAPHIC OBJECTS -->
  <svg class="ob-s10-decor-obj ob-s10-decor-1" width="22" height="22" viewBox="0 0 24 24" fill="none">
    <path d="M12 0L14.5 9.5L24 12L14.5 14.5L12 24L9.5 14.5L0 12L9.5 9.5L12 0Z" fill="#F59E0B" opacity="0.65"/>
  </svg>
  <svg class="ob-s10-decor-obj ob-s10-decor-2" width="26" height="26" viewBox="0 0 32 32" fill="none">
    <circle cx="16" cy="16" r="13" stroke="#0EA5E9" stroke-width="2" stroke-dasharray="3 3"/>
  </svg>
  <svg class="ob-s10-decor-obj ob-s10-decor-3" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#8B5CF6" stroke-width="2.2" stroke-linecap="round">
    <line x1="7" y1="17" x2="17" y2="7"></line>
    <polyline points="7 7 17 7 17 17"></polyline>
  </svg>
  <svg class="ob-s10-decor-obj ob-s10-decor-4" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2" stroke-linecap="round">
    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
    <polyline points="9 12 11 14 15 10"></polyline>
  </svg>

  <div class="ob-s10-container">

    <!-- LEVEL 1: FOOTER TOP CLOSING CTA BLOCK -->
    <div class="ob-s10-top-cta">
      <div class="ob-s10-top-cta-left">
        <div class="ob-s10-top-cta-badge">THE FINAL INDIA CONNECTION</div>
        <h3 class="ob-s10-top-cta-title">Ready to Build Your India Roadmap?</h3>
        <p class="ob-s10-top-cta-desc">Let's turn your India expansion goals into a practical, structured next step.</p>
      </div>
      <a href="<?php echo esc_url( home_url( '/#roadmap-form-section' ) ); ?>" class="ob-s10-top-cta-btn" onclick="if(document.getElementById('roadmap-form-section')){ event.preventDefault(); document.getElementById('roadmap-form-section').scrollIntoView({behavior: 'smooth'}); }">
        <span>Start Your India Roadmap</span>
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
          <path d="M5 12h14M12 5l7 7-7 7"/>
        </svg>
      </a>
    </div>

    <!-- LEVEL 2: 4-COLUMN EDITORIAL NAVIGATION & BRAND GRID -->
    <div class="ob-s10-grid">

      <!-- COLUMN 1: BRAND AREA & ANIMATED CONNECTION VISUAL -->
      <div class="ob-s10-brand-col">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="ob-s10-logo">
          <svg class="ob-s10-logo-svg" viewBox="0 0 270 188" width="40" height="28" fill="none" xmlns="http://www.w3.org/2000/svg" style="height: 28px; width: auto; flex-shrink: 0; display: inline-block; vertical-align: middle; margin-right: 8px;" aria-hidden="true">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M67.5 0A67.5 67.5 0 0 1 135 67.5V120.5A67.5 67.5 0 0 1 67.5 188A67.5 67.5 0 0 1 0 120.5V67.5A67.5 67.5 0 0 1 67.5 0ZM67.5 41.5A26.5 26.5 0 0 1 94 68V120A26.5 26.5 0 0 1 67.5 146.5A26.5 26.5 0 0 1 41 120V68A26.5 26.5 0 0 1 67.5 41.5Z" fill="#FDC002"/>
            <path d="M146 0H226A44 44 0 0 1 270 44A44 44 0 0 1 226 88H146V0Z" fill="#080C16"/>
            <path d="M146 100H226A44 44 0 0 1 270 144A44 44 0 0 1 226 188H146V100Z" fill="#080C16"/>
          </svg>
          <span>Overseas<span style="color: #d97706;">Bridge</span></span>
        </a>

        <p class="ob-s10-brand-desc">
          Overseas Bridge supports international businesses entering and operating in India by coordinating strategy, setup, compliance and operational workstreams. Legal, tax, audit and regulated professional services are delivered or reviewed by appropriately qualified professionals, as applicable to the agreed scope.
        </p>

        <!-- Animated Global Connection Metaphor Visual -->
        <div class="ob-s10-connection-visual">
          <div class="ob-s10-connection-title">
            <span style="width: 6px; height: 6px; border-radius: 50%; background: #f59e0b; display: inline-block;"></span>
            <span>Global to India Connection Mesh</span>
          </div>
          <svg class="ob-s10-connection-svg" viewBox="0 0 320 48" fill="none">
            <path id="ob-s10-conn-path" class="ob-s10-conn-line" d="M 20 24 C 80 8, 120 40, 180 24 C 240 8, 260 36, 300 24" />
            <!-- Nodes -->
            <circle cx="20" cy="24" r="5" fill="#0284c7" />
            <circle cx="100" cy="18" r="4" fill="#7c3aed" />
            <circle cx="180" cy="24" r="4" fill="#059669" />
            <circle cx="300" cy="24" r="6" fill="#f59e0b" />
            <!-- Flowing particle -->
            <circle class="ob-s10-conn-pulse-dot" r="4">
              <animateMotion dur="4s" repeatCount="indefinite" path="M 20 24 C 80 8, 120 40, 180 24 C 240 8, 260 36, 300 24" />
            </circle>
          </svg>
        </div>

        <!-- Social Media Buttons -->
        <div class="ob-s10-social-wrap">
          <a href="<?php echo esc_url( get_theme_mod( 'social_linkedin', 'https://linkedin.com' ) ); ?>" class="ob-s10-social-btn is-linkedin" target="_blank" rel="noopener" aria-label="LinkedIn">
            <svg fill="currentColor" viewBox="0 0 24 24"><path d="M19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14m-.5 15.5v-5.3a3.26 3.26 0 0 0-3.26-3.26c-.85 0-1.84.52-2.28 1.3v-1.11h-2.79v8.37h2.79v-4.93c0-.77.62-1.4 1.39-1.4a1.4 1.4 0 0 1 1.4 1.4v4.93h2.75M6.88 8.56a1.68 1.68 0 0 0 1.68-1.68c0-.93-.75-1.69-1.68-1.69a1.69 1.69 0 0 0-1.69 1.69c0 .93.76 1.68 1.69 1.68m1.39 9.94v-8.37H5.5v8.37h2.77z"/></svg>
          </a>
          <a href="<?php echo esc_url( get_theme_mod( 'social_instagram', 'https://instagram.com' ) ); ?>" class="ob-s10-social-btn is-instagram" target="_blank" rel="noopener" aria-label="Instagram">
            <svg fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
          </a>
          <a href="<?php echo esc_url( get_theme_mod( 'social_facebook', 'https://facebook.com' ) ); ?>" class="ob-s10-social-btn is-facebook" target="_blank" rel="noopener" aria-label="Facebook">
            <svg fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
          </a>
          <a href="<?php echo esc_url( get_theme_mod( 'social_whatsapp', 'https://wa.me/18005550199' ) ); ?>" class="ob-s10-social-btn is-whatsapp" target="_blank" rel="noopener" aria-label="WhatsApp">
            <svg fill="currentColor" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
          </a>
        </div>
      </div>

      <!-- COLUMN 2: SERVICES -->
      <div>
        <h4 class="ob-s10-col-title">Services</h4>
        <ul class="ob-s10-links">
            <li class="ob-s10-link-item"><a href="<?php echo esc_url( home_url( '/india-entry-strategy' ) ); ?>"><span>India Entry &amp; Business Setup</span><span class="ob-s10-link-arrow">&rarr;</span></a></li>
            <li class="ob-s10-link-item"><a href="<?php echo esc_url( home_url( '/company-entity-setup' ) ); ?>"><span>Office, BPO &amp; GCC Setup in India</span><span class="ob-s10-link-arrow">&rarr;</span></a></li>
            <li class="ob-s10-link-item"><a href="<?php echo esc_url( home_url( '/studio-setup' ) ); ?>"><span>Professional Studio Setup in India</span><span class="ob-s10-link-arrow">&rarr;</span></a></li>
            <li class="ob-s10-link-item"><a href="<?php echo esc_url( home_url( '/factory-manufacturing-setup' ) ); ?>"><span>Factory &amp; Manufacturing Setup in India</span><span class="ob-s10-link-arrow">&rarr;</span></a></li>
            <li class="ob-s10-link-item"><a href="<?php echo esc_url( home_url( '/marketing-for-businesses' ) ); ?>"><span>Marketing Services for Businesses in India</span><span class="ob-s10-link-arrow">&rarr;</span></a></li>
            <li class="ob-s10-link-item"><a href="<?php echo esc_url( home_url( '/business-support-services' ) ); ?>"><span>Business Support Services in India</span><span class="ob-s10-link-arrow">&rarr;</span></a></li>
        </ul>
      </div>

      <!-- COLUMN 3: RESOURCES & COMPANY -->
      <div>
        <h4 class="ob-s10-col-title">Resources &amp; Company</h4>
        <ul class="ob-s10-links">
          <li class="ob-s10-link-item"><a href="<?php echo esc_url( home_url( '/about-us' ) ); ?>"><span>About Overseas Bridge</span><span class="ob-s10-link-arrow">&rarr;</span></a></li>
          <li class="ob-s10-link-item"><a href="<?php echo esc_url( home_url( '/#why-us' ) ); ?>"><span>Why Choose Us</span><span class="ob-s10-link-arrow">&rarr;</span></a></li>
          <li class="ob-s10-link-item"><a href="<?php echo esc_url( home_url( '/industries-served' ) ); ?>"><span>Industries &amp; Case Studies</span><span class="ob-s10-link-arrow">&rarr;</span></a></li>
          <li class="ob-s10-link-item"><a href="<?php echo esc_url( home_url( '/insights' ) ); ?>"><span>India Entry Options Guide</span><span class="ob-s10-link-arrow">&rarr;</span></a></li>
          <li class="ob-s10-link-item"><a href="<?php echo esc_url( home_url( '/faqs' ) ); ?>"><span>Setup Cost &amp; Timeline FAQ</span><span class="ob-s10-link-arrow">&rarr;</span></a></li>
          <li class="ob-s10-link-item"><a href="<?php echo esc_url( home_url( '/contact-us' ) ); ?>"><span>Contact Us</span><span class="ob-s10-link-arrow">&rarr;</span></a></li>
        </ul>
      </div>

      <!-- COLUMN 4: CONTACT & NEWSLETTER HUB -->
      <div>
        <h4 class="ob-s10-col-title">Contact</h4>
        <div class="ob-s10-contact-items">
          <div class="ob-s10-contact-item">
            <span class="ob-s10-contact-icon">
              <!-- Location Icon -->
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
            </span>
            <div>
              <span class="ob-s10-contact-strong">Address:</span> 
              <a href="https://maps.app.goo.gl/B3PJG5bR3sAU11deA" target="_blank" rel="noopener noreferrer" class="ob-s10-contact-link" title="Open Google Maps Location">
                No. 412, Kammanahalli Main Road, 2nd Block, HRBR Layout, Kalyan Nagar, Bengaluru, Karnataka 560043, India.
              </a>
            </div>
          </div>

          <div class="ob-s10-contact-item">
            <span class="ob-s10-contact-icon">
              <!-- Mail Icon -->
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
            </span>
            <div>
              <span class="ob-s10-contact-strong">Email:</span> 
              <a href="mailto:support@overseasbridge.com" class="ob-s10-contact-link">support@overseasbridge.com</a>
            </div>
          </div>

          <div class="ob-s10-contact-item">
            <span class="ob-s10-contact-icon">
              <!-- Clock Icon -->
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
            </span>
            <div><span class="ob-s10-contact-strong">Working Hours:</span> 9:00 to 17:00</div>
          </div>
        </div>

        <!-- Compact Newsletter Box -->
        <div class="ob-s10-newsletter-box">
          <div class="ob-s10-news-title">Stay Connected With India</div>
          <p class="ob-s10-news-desc">Get practical insights on India entry, setup and regulatory updates.</p>
          <form class="ob-s10-news-form" onsubmit="event.preventDefault(); alert('Thank you for subscribing to Overseas Bridge insights!');">
            <input type="email" class="ob-s10-news-input" placeholder="Enter your work email" required />
            <button type="submit" class="ob-s10-news-btn">Subscribe &rarr;</button>
          </form>
        </div>
      </div>

    </div>

    <!-- LEVEL 3: TRUST INDICATORS PILL BAR -->
    <div class="ob-s10-trust-bar">
      <div class="ob-s10-trust-badge">
        <span class="ob-s10-trust-icon">⭐</span>
        <span>India Entry Specialists</span>
      </div>
      <div class="ob-s10-trust-divider">|</div>
      <div class="ob-s10-trust-badge">
        <span class="ob-s10-trust-icon">🌐</span>
        <span>Multi-Workstream Support</span>
      </div>
      <div class="ob-s10-trust-divider">|</div>
      <div class="ob-s10-trust-badge">
        <span class="ob-s10-trust-icon">🚀</span>
        <span>Strategy &rarr; Setup &rarr; Launch</span>
      </div>
      <div class="ob-s10-trust-divider">|</div>
      <div class="ob-s10-trust-badge">
        <span class="ob-s10-trust-icon">📍</span>
        <span>25+ India Cities Supported</span>
      </div>
    </div>

    <!-- LEVEL 4: GRADIENT DIVIDER & BOTTOM LEGAL ROW -->
    <div class="ob-s10-divider"></div>

    <div class="ob-s10-bottom">
      <div class="ob-s10-copyright">
        <span class="ob-s10-copyright-dot"></span>
        <span><?php echo esc_html( get_theme_mod( 'footer_copyright', '© ' . date('Y') . ' Overseas Bridge Technologies Inc. All rights reserved.' ) ); ?></span>
      </div>
      <div class="ob-s10-legal-links">
        <a href="<?php echo esc_url( home_url( '/privacy-policy' ) ); ?>" class="ob-s10-legal-link">Privacy Policy</a>
        <span style="color: #cbd5e1;">•</span>
        <a href="<?php echo esc_url( home_url( '/terms-of-service' ) ); ?>" class="ob-s10-legal-link">Terms &amp; Conditions</a>
        <span style="color: #cbd5e1;">•</span>
        <a href="<?php echo esc_url( home_url( '/disclaimer' ) ); ?>" class="ob-s10-legal-link">Regulatory Disclaimer</a>
      </div>
    </div>

  </div>

</footer>

<?php wp_footer(); ?>
</body>
</html>