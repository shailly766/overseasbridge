<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <style id="ob-global-mobile-overflow-fix">
    html, body {
      overflow-x: hidden !important;
      max-width: 100% !important;
      width: 100% !important;
      position: relative !important;
    }
    .website-opening-preloader {
      display: none !important;
    }
    .mobile-drawer-backdrop {
      position: fixed !important;
      top: 0 !important;
      left: 0 !important;
      width: 100vw !important;
      height: 100vh !important;
      background: rgba(15, 23, 42, 0.6) !important;
      backdrop-filter: blur(4px) !important;
      -webkit-backdrop-filter: blur(4px) !important;
      z-index: 10001 !important;
      opacity: 0 !important;
      pointer-events: none !important;
      transition: opacity 0.3s ease !important;
    }
    .mobile-drawer-backdrop.active {
      opacity: 1 !important;
      pointer-events: auto !important;
    }
  </style>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <style id="overseas-critical-logo-fix">
    .hero-content h1 span,
    .hero-content h1 mark,
    .hero-section h1 span,
    h1 span {
      background: transparent !important;
      background-color: transparent !important;
      padding: 0 !important;
      border-radius: 0 !important;
      border: none !important;
      box-shadow: none !important;
      color: #ffc700 !important;
    }
    .header-master-wrapper {
      position: fixed !important;
      top: 0 !important;
      left: 0 !important;
      width: 100% !important;
      z-index: 10000 !important;
      display: flex !important;
      flex-direction: column !important;
      transition: all 0.3s ease !important;
    }
    .top-announcement-bar {
      position: relative !important;
      top: 0 !important;
      left: 0 !important;
      width: 100% !important;
      background: #ffc700 !important;
      border-bottom: 1px solid #e6b200 !important;
      color: #080c16 !important;
      font-size: 0.85rem !important;
      font-weight: 700 !important;
      text-align: center !important;
      padding: 9px 16px !important;
      margin: 0 !important;
      z-index: 2 !important;
      display: block !important;
    }
    .top-announcement-bar a {
      color: #080c16 !important;
      font-weight: 800 !important;
      text-decoration: underline !important;
      margin-left: 6px !important;
    }
    .site-header {
      position: relative !important;
      top: 0 !important;
      left: 0 !important;
      width: 100% !important;
      padding: 12px 0 !important;
      background: rgba(255, 255, 255, 0.98) !important;
      backdrop-filter: blur(16px) !important;
      -webkit-backdrop-filter: blur(16px) !important;
      border-bottom: 1px solid rgba(15, 23, 42, 0.08) !important;
      z-index: 1 !important;
      margin: 0 !important;
    }
                    /* CRISP VECTOR LOGO STYLES (100% RAZOR SHARP ON ALL MOBILES, TABLETS, LAPTOPS & DESKTOPS) */
    .brand-logo-wrap,
    .custom-logo-link,
    .brand-logo {
      display: flex !important;
      align-items: center !important;
      justify-content: center !important;
      flex-shrink: 0 !important;
      height: auto !important;
      max-height: none !important;
      overflow: visible !important;
      text-decoration: none !important;
      padding: 0 !important;
      margin: 0 !important;
      background: transparent !important;
      border: none !important;
    }
    .custom-logo,
    .ob-navbar-logo,
    svg.ob-navbar-logo,
    .brand-logo svg,
    .brand-logo-wrap svg,
    .custom-logo-link svg,
    header svg.ob-navbar-logo,
    .site-header svg.ob-navbar-logo {
      height: 38px !important;
      width: auto !important;
      max-height: 38px !important;
      max-width: 56px !important;
      display: block !important;
      border-radius: 0 !important;
      filter: drop-shadow(0 2px 4px rgba(0,0,0,0.04)) !important;
      transition: transform 0.25s cubic-bezier(0.16, 1, 0.3, 1) !important;
    }
    .custom-logo-link:hover .custom-logo,
    .custom-logo-link:hover .ob-navbar-logo,
    .brand-logo:hover svg {
      transform: scale(1.08) !important;
    }
    @media (max-width: 1024px) {
      .custom-logo,
      .ob-navbar-logo,
      svg.ob-navbar-logo,
      .brand-logo svg,
      .brand-logo-wrap svg,
      .custom-logo-link svg,
      header svg.ob-navbar-logo,
      .site-header svg.ob-navbar-logo {
        height: 34px !important;
        max-height: 34px !important;
        max-width: 50px !important;
      }
    }
    @media (max-width: 768px) {
      .custom-logo,
      .ob-navbar-logo,
      svg.ob-navbar-logo,
      .brand-logo svg,
      .brand-logo-wrap svg,
      .custom-logo-link svg,
      header svg.ob-navbar-logo,
      .site-header svg.ob-navbar-logo {
        height: 30px !important;
        max-height: 30px !important;
        max-width: 44px !important;
      }
    }
    @media (max-width: 480px) {
      .site-header {
        padding: 10px 0 !important;
      }
      .custom-logo,
      .ob-navbar-logo,
      svg.ob-navbar-logo,
      .brand-logo svg,
      .brand-logo-wrap svg,
      .custom-logo-link svg,
      header svg.ob-navbar-logo,
      .site-header svg.ob-navbar-logo {
        height: 28px !important;
        max-height: 28px !important;
        max-width: 40px !important;
      }
    }

    /* DROPDOWN MENU & ROCK-SOLID HOVER TUNNEL BRIDGE (FIXED) */
    .has-dropdown {
      position: relative !important;
      padding-bottom: 12px !important;
      margin-bottom: -12px !important;
    }
    .hugo-nav-chevron {
      display: inline-block !important;
      margin-left: 6px !important;
      vertical-align: middle !important;
      stroke: #080c16 !important;
      transition: transform 0.25s cubic-bezier(0.16, 1, 0.3, 1), stroke 0.25s ease !important;
      pointer-events: none !important;
    }
    .has-dropdown:hover .hugo-nav-chevron,
    .has-dropdown.is-open .hugo-nav-chevron {
      transform: rotate(180deg) !important;
      stroke: #ffc700 !important;
    }

    /* INVISIBLE HOVER BRIDGE ON PARENT LI */
    .has-dropdown::after {
      content: '' !important;
      position: absolute !important;
      bottom: -18px !important;
      left: -20px !important;
      right: -20px !important;
      height: 28px !important;
      background: transparent !important;
      pointer-events: auto !important;
      z-index: 999 !important;
    }

    .dropdown-menu {
      position: absolute !important;
      top: calc(100% + 2px) !important;
      left: -14px !important;
      background: #ffffff !important;
      border: 2px solid #fde68a !important;
      border-radius: 20px !important;
      box-shadow: 0 24px 56px -8px rgba(15, 23, 42, 0.16), 0 0 25px rgba(255, 199, 0, 0.12) !important;
      padding: 12px 14px !important;
      min-width: 280px !important;
      list-style: none !important;
      opacity: 0 !important;
      visibility: hidden !important;
      pointer-events: none !important;
      transform: translateY(10px) scale(0.98) !important;
      transition: opacity 0.25s cubic-bezier(0.16, 1, 0.3, 1), transform 0.25s cubic-bezier(0.16, 1, 0.3, 1), visibility 0.25s !important;
      transition-delay: 0.12s !important; /* Grace period prevents abrupt disappearance */
      z-index: 1000 !important;
      margin: 0 !important;
    }

    /* INVISIBLE HOVER TUNNEL BRIDGE ON DROPDOWN */
    .dropdown-menu::before {
      content: '' !important;
      position: absolute !important;
      top: -24px !important;
      left: 0 !important;
      width: 100% !important;
      height: 30px !important;
      background: transparent !important;
      pointer-events: auto !important;
      z-index: 1 !important;
    }

    .has-dropdown:hover .dropdown-menu,
    .has-dropdown.is-open .dropdown-menu,
    .has-dropdown:focus-within .dropdown-menu,
    .dropdown-menu:hover {
      opacity: 1 !important;
      visibility: visible !important;
      pointer-events: auto !important;
      transform: translateY(0) scale(1) !important;
      transition-delay: 0s !important;
    }

    .dropdown-menu li {
      margin-bottom: 4px !important;
      display: block !important;
      position: relative !important;
    }
    .dropdown-menu li:last-child {
      margin-bottom: 0 !important;
    }

    .dropdown-menu a {
      display: flex !important;
      align-items: center !important;
      justify-content: flex-start !important;
      padding: 11px 14px !important;
      border-radius: 14px !important;
      color: #0f172a !important;
      font-size: 0.95rem !important;
      font-weight: 700 !important;
      text-decoration: none !important;
      transition: all 0.2s cubic-bezier(0.16, 1, 0.3, 1) !important;
      white-space: nowrap !important;
      position: relative !important;
      z-index: 2 !important;
    }

    .dropdown-menu a:hover,
    .dropdown-menu a:focus {
      background: #fffdf5 !important;
      border: 1px solid #fde68a !important;
      color: #080c16 !important;
      transform: translateX(5px) scale(1.02) !important;
      box-shadow: 0 4px 14px rgba(245, 158, 11, 0.15) !important;
    }

    .dropdown-item-left {
      display: flex !important;
      align-items: center !important;
      gap: 12px !important;
      width: 100% !important;
    }

    .dropdown-item-icon {
      width: 32px !important;
      height: 32px !important;
      border-radius: 10px !important;
      display: flex !important;
      align-items: center !important;
      justify-content: center !important;
      flex-shrink: 0 !important;
      transition: transform 0.2s ease !important;
    }

    .dropdown-menu a:hover .dropdown-item-icon {
      transform: scale(1.15) rotate(5deg) !important;
    }

    .dropdown-item-arrow {
      display: none !important;
    }

    /* 3D GLASS ANALYTICS CHART HIGH-ATTRACTION ANIMATIONS */
    @keyframes glassFloatLevitate {
      0% {
        transform: perspective(1000px) rotateX(2deg) rotateY(-3deg) translateY(0px) !important;
        box-shadow: 0 15px 35px rgba(15, 23, 42, 0.12), 0 0 20px rgba(255, 199, 0, 0.25) !important;
      }
      50% {
        transform: perspective(1000px) rotateX(-2deg) rotateY(3deg) translateY(-14px) !important;
        box-shadow: 0 30px 60px rgba(15, 23, 42, 0.22), 0 0 40px rgba(255, 199, 0, 0.5) !important;
      }
      100% {
        transform: perspective(1000px) rotateX(2deg) rotateY(-3deg) translateY(0px) !important;
        box-shadow: 0 15px 35px rgba(15, 23, 42, 0.12), 0 0 20px rgba(255, 199, 0, 0.25) !important;
      }
    }
    @keyframes glassShineSweep {
      0% { left: -100% !important; }
      35% { left: 160% !important; }
      100% { left: 160% !important; }
    }
    @keyframes kpiPulseFloat {
      0%, 100% { transform: translateY(0) scale(1) !important; }
      50% { transform: translateY(-7px) scale(1.04) !important; }
    }
    .hero-3d-glass-wrapper {
      position: relative !important;
      width: 100% !important;
      border-radius: 20px !important;
      overflow: hidden !important;
      background: #ffffff !important;
      border: 2px solid #ffc700 !important;
      animation: glassFloatLevitate 4.2s ease-in-out infinite !important;
      transform-style: preserve-3d !important;
      will-change: transform, box-shadow !important;
    }
    .hero-3d-glass-wrapper::after {
      content: '' !important;
      position: absolute !important;
      top: 0 !important;
      left: -100% !important;
      width: 60% !important;
      height: 100% !important;
      background: linear-gradient(90deg, rgba(255,255,255,0) 0%, rgba(255,255,255,0.55) 50%, rgba(255,255,255,0) 100%) !important;
      transform: skewX(-25deg) !important;
      animation: glassShineSweep 3.5s ease-in-out infinite !important;
      pointer-events: none !important;
      z-index: 3 !important;
    }
    .hero-3d-glass-image {
      width: 100% !important;
      height: 350px !important;
      object-fit: cover !important;
      display: block !important;
      transition: transform 0.5s cubic-bezier(0.16, 1, 0.3, 1) !important;
    }
    .hero-3d-glass-wrapper:hover .hero-3d-glass-image {
      transform: scale(1.05) !important;
    }
    .floating-kpi-card {
      animation: kpiPulseFloat 3s ease-in-out infinite !important;
    }
    .kpi-top-right { animation-delay: 0s !important; }
    .kpi-bottom-left { animation-delay: 1.5s !important; }

    /* EVERY-ELEMENT ANIMATIONS OVERLAY MATRIX */
    .element-animation-overlay {
      position: absolute !important;
      top: 0 !important;
      left: 0 !important;
      width: 100% !important;
      height: 100% !important;
      pointer-events: none !important;
      z-index: 4 !important;
    }
    .anim-element {
      position: absolute !important;
      pointer-events: none !important;
    }
    .anim-donut-halo {
      border-radius: 50% !important;
      box-shadow: 0 0 20px rgba(0, 240, 255, 0.6), inset 0 0 15px rgba(255, 199, 0, 0.6) !important;
      animation: donutPulseGlow 3s ease-in-out infinite alternate !important;
    }
    @keyframes donutPulseGlow {
      0% { opacity: 0.3; transform: scale(0.96) rotate(0deg); }
      100% { opacity: 0.95; transform: scale(1.04) rotate(180deg); }
    }
    .anim-pill-beam {
      border-radius: 4px !important;
      background: linear-gradient(90deg, rgba(0,240,255,0) 0%, rgba(255,255,255,0.9) 50%, rgba(0,240,255,0) 100%) !important;
      animation: pillScanBeam 2.4s ease-in-out infinite !important;
    }
    @keyframes pillScanBeam {
      0% { opacity: 0; transform: translateX(-40%); }
      50% { opacity: 1; transform: translateX(40%); }
      100% { opacity: 0; transform: translateX(80%); }
    }
    .gold-node-pulse {
      position: absolute !important;
      width: 12px !important;
      height: 12px !important;
      margin-left: -6px !important;
      margin-top: -6px !important;
      border-radius: 50% !important;
      background: #ffc700 !important;
      box-shadow: 0 0 12px #ffc700, 0 0 20px #ff9900 !important;
      animation: nodePulseExpand 2s cubic-bezier(0.16, 1, 0.3, 1) infinite !important;
    }
    @keyframes nodePulseExpand {
      0% { transform: scale(0.7); opacity: 0.4; box-shadow: 0 0 4px #ffc700; }
      50% { transform: scale(1.6); opacity: 1; box-shadow: 0 0 16px #ffc700, 0 0 25px #ff9900; }
      100% { transform: scale(0.7); opacity: 0.4; box-shadow: 0 0 4px #ffc700; }
    }
    .gold-arrow-sparkle {
      position: absolute !important;
      width: 18px !important;
      height: 18px !important;
      margin-left: -9px !important;
      margin-top: -9px !important;
      background: radial-gradient(circle, #ffffff 20%, #ffc700 60%, transparent 80%) !important;
      border-radius: 50% !important;
      box-shadow: 0 0 20px #ffc700, 0 0 40px #ff9900 !important;
      animation: arrowSparkleFlash 1.6s ease-in-out infinite alternate !important;
    }
    @keyframes arrowSparkleFlash {
      0% { transform: scale(0.8) rotate(0deg); opacity: 0.5; }
      100% { transform: scale(1.5) rotate(90deg); opacity: 1; filter: drop-shadow(0 0 10px #ffffff); }
    }
    .bar-light-surge {
      position: absolute !important;
      border-radius: 4px !important;
      background: linear-gradient(0deg, rgba(0, 150, 255, 0.1) 0%, rgba(255, 255, 255, 0.7) 80%, rgba(0, 240, 255, 0.9) 100%) !important;
      animation: barSurgeRise 2.8s cubic-bezier(0.16, 1, 0.3, 1) infinite !important;
    }
    @keyframes barSurgeRise {
      0% { opacity: 0.2; transform: scaleY(0.4); transform-origin: bottom; }
      50% { opacity: 0.9; transform: scaleY(1.05); transform-origin: bottom; }
      100% { opacity: 0.2; transform: scaleY(0.4); transform-origin: bottom; }
    }

    /* ULTRA-ATTRACTIVE 6-NODE HUGO INC-STYLE INTERCONNECTED NETWORK VISUAL */
    .hugo-network-container {
      position: relative !important;
      width: 100% !important;
      height: 500px !important;
      background: transparent !important;
      border-radius: 0 !important;
      border: none !important;
      box-shadow: none !important;
      overflow: visible !important;
      display: flex !important;
      align-items: center !important;
      justify-content: center !important;
      transition: transform 0.4s cubic-bezier(0.16, 1, 0.3, 1) !important;
    }

    .hugo-network-svg {
      position: absolute !important;
      top: 0 !important;
      left: 0 !important;
      width: 100% !important;
      height: 100% !important;
      pointer-events: none !important;
    }

    .hugo-rotating-arc {
      transform-origin: center !important;
      animation: hugoArcRotate 12s linear infinite !important;
    }
    .arc-1 { transform-origin: 270px 110px !important; animation-duration: 14s !important; }
    .arc-2 { transform-origin: 420px 190px !important; animation-duration: 10s !important; animation-direction: reverse !important; }
    .arc-3 { transform-origin: 410px 340px !important; animation-duration: 16s !important; }
    .arc-4 { transform-origin: 270px 410px !important; animation-duration: 12s !important; animation-direction: reverse !important; }
    .arc-5 { transform-origin: 130px 340px !important; animation-duration: 15s !important; }
    .arc-6 { transform-origin: 120px 190px !important; animation-duration: 11s !important; animation-direction: reverse !important; }

    @keyframes hugoArcRotate {
      0% { transform: rotate(0deg); }
      100% { transform: rotate(360deg); }
    }

    .hugo-svg-path {
      stroke-dasharray: 12 8 !important;
      animation: strokeDashMove 2.5s linear infinite !important;
    }
    @keyframes strokeDashMove {
      0% { stroke-dashoffset: 0; }
      100% { stroke-dashoffset: -40; }
    }

    .hugo-team-node {
      position: absolute !important;
      transform: translate(-50%, -50%) !important;
      display: flex !important;
      flex-direction: column !important;
      align-items: center !important;
      z-index: 5 !important;
      cursor: pointer !important;
      transition: transform 0.35s cubic-bezier(0.16, 1, 0.3, 1) !important;
    }
    .hugo-team-node:hover {
      transform: translate(-50%, -58%) scale(1.15) !important;
      z-index: 12 !important;
    }

    .node-avatar-ring {
      width: 72px !important;
      height: 72px !important;
      border-radius: 50% !important;
      padding: 3px !important;
      background: #ffffff !important;
      position: relative !important;
      display: flex !important;
      align-items: center !important;
      justify-content: center !important;
      transition: all 0.3s ease !important;
    }
    .ring-yellow { border: 3px solid #ffc700 !important; box-shadow: 0 0 25px rgba(255, 199, 0, 0.6) !important; }
    .ring-purple { border: 3px solid #c084fc !important; box-shadow: 0 0 25px rgba(192, 132, 252, 0.6) !important; }
    .ring-orange { border: 3px solid #f97316 !important; box-shadow: 0 0 25px rgba(249, 115, 22, 0.6) !important; }
    .ring-green { border: 3px solid #10b981 !important; box-shadow: 0 0 25px rgba(16, 185, 129, 0.6) !important; }
    .ring-cyan { border: 3px solid #00b4d8 !important; box-shadow: 0 0 25px rgba(0, 180, 216, 0.6) !important; }
    .ring-amber { border: 3px solid #f59e0b !important; box-shadow: 0 0 25px rgba(245, 158, 11, 0.6) !important; }

    .node-avatar-img {
      width: 100% !important;
      height: 100% !important;
      border-radius: 50% !important;
      object-fit: cover !important;
      display: block !important;
    }

    .node-tag-badge {
      margin-top: 6px !important;
      color: #ffffff !important;
      font-size: 0.72rem !important;
      font-weight: 800 !important;
      padding: 4px 10px !important;
      border-radius: 12px !important;
      white-space: nowrap !important;
      box-shadow: 0 6px 16px rgba(15, 23, 42, 0.25) !important;
      backdrop-filter: blur(8px) !important;
    }
    .badge-yellow { background: linear-gradient(135deg, #080c16 0%, #1e293b 100%) !important; border: 1px solid #ffc700 !important; }
    .badge-purple { background: linear-gradient(135deg, #4c1d95 0%, #1e1b4b 100%) !important; border: 1px solid #c084fc !important; }
    .badge-orange { background: linear-gradient(135deg, #7c2d12 0%, #451a03 100%) !important; border: 1px solid #f97316 !important; }
    .badge-green { background: linear-gradient(135deg, #064e3b 0%, #022c22 100%) !important; border: 1px solid #10b981 !important; }
    .badge-cyan { background: linear-gradient(135deg, #0c4a6e 0%, #082f49 100%) !important; border: 1px solid #00b4d8 !important; }
    .badge-amber { background: linear-gradient(135deg, #78350f 0%, #451a03 100%) !important; border: 1px solid #f59e0b !important; }

    .hugo-kpi-badge {
      position: absolute !important;
      background: rgba(255, 255, 255, 0.95) !important;
      backdrop-filter: blur(12px) !important;
      border: 1px solid rgba(15, 23, 42, 0.12) !important;
      border-radius: 30px !important;
      padding: 8px 14px !important;
      font-size: 0.78rem !important;
      font-weight: 800 !important;
      color: #0f172a !important;
      box-shadow: 0 12px 30px rgba(15, 23, 42, 0.12) !important;
      z-index: 8 !important;
      display: flex !important;
      align-items: center !important;
      gap: 6px !important;
      animation: kpiFloat 3.5s ease-in-out infinite alternate !important;
    }
    .kpi-top-left { top: 16px !important; left: 16px !important; }
    .kpi-top-right { top: 16px !important; right: 16px !important; animation-delay: 1.2s !important; }
    .kpi-bottom-left { bottom: 16px !important; left: 16px !important; animation-delay: 2.4s !important; }
    .kpi-bottom-right { bottom: 16px !important; right: 16px !important; animation-delay: 1.8s !important; }

    .kpi-dot-pulse {
      width: 8px !important;
      height: 8px !important;
      border-radius: 50% !important;
      background: #ffc700 !important;
      box-shadow: 0 0 8px #ffc700 !important;
      display: inline-block !important;
    }
    @keyframes kpiFloat {
      0% { transform: translateY(0px); }
      100% { transform: translateY(-8px); }
    }

    .hugo-sparkle {
      position: absolute !important;
      font-size: 1.2rem !important;
      color: #ffc700 !important;
      pointer-events: none !important;
      z-index: 4 !important;
      animation: sparkleTwinkle 2.5s ease-in-out infinite alternate !important;
    }
    .sparkle-1 { top: 22%; left: 32%; animation-delay: 0.3s !important; }
    .sparkle-2 { top: 68%; left: 65%; animation-delay: 1.1s !important; }
    .sparkle-3 { top: 40%; right: 28%; animation-delay: 1.8s !important; }

    @keyframes sparkleTwinkle {
      0% { transform: scale(0.6) rotate(0deg); opacity: 0.3; }
      100% { transform: scale(1.3) rotate(45deg); opacity: 1; filter: drop-shadow(0 0 10px #ffc700); }
    }

    /* WEBSITE OPENING / LAUNCH SPLASH WELCOME PRELOADER OVERLAY */
    .website-opening-preloader {
      position: fixed !important;
      top: 0 !important;
      left: 0 !important;
      width: 100vw !important;
      height: 100vh !important;
      background: #080c16 !important;
      z-index: 999999 !important;
      display: flex !important;
      align-items: center !important;
      justify-content: center !important;
      color: #ffffff !important;
      transition: transform 0.8s cubic-bezier(0.77, 0, 0.175, 1), opacity 0.8s ease !important;
    }
    .website-opening-preloader.fade-out {
      opacity: 0 !important;
      pointer-events: none !important;
      transform: translateY(-100%) !important;
    }
    .opening-splash-content {
      text-align: center !important;
      max-width: 480px !important;
      padding: 20px !important;
    }
    .opening-logo-badge {
      width: 64px !important;
      height: 64px !important;
      border-radius: 18px !important;
      background: #ffc700 !important;
      color: #080c16 !important;
      font-size: 2.2rem !important;
      font-weight: 900 !important;
      display: flex !important;
      align-items: center !important;
      justify-content: center !important;
      margin: 0 auto 16px auto !important;
      box-shadow: 0 0 40px rgba(255, 199, 0, 0.6) !important;
      animation: logoBadgePulse 1.8s ease-in-out infinite alternate !important;
    }
    @keyframes logoBadgePulse {
      0% { transform: scale(0.9); box-shadow: 0 0 20px rgba(255, 199, 0, 0.4); }
      100% { transform: scale(1.1); box-shadow: 0 0 50px rgba(255, 199, 0, 0.8); }
    }
    .opening-brand-name {
      font-size: 2.2rem !important;
      font-weight: 900 !important;
      color: #ffffff !important;
      margin-bottom: 6px !important;
      letter-spacing: -0.02em !important;
    }
    .opening-brand-name span { color: #ffc700 !important; }
    .opening-tagline {
      font-size: 0.78rem !important;
      font-weight: 800 !important;
      color: #94a3b8 !important;
      letter-spacing: 0.18em !important;
      margin-bottom: 24px !important;
    }
    .opening-progress-bar {
      width: 100% !important;
      height: 6px !important;
      background: rgba(255, 255, 255, 0.1) !important;
      border-radius: 10px !important;
      overflow: hidden !important;
      margin-bottom: 12px !important;
    }
    .opening-progress-fill {
      width: 0% !important;
      height: 100% !important;
      background: linear-gradient(90deg, #ffc700 0%, #00b4d8 100%) !important;
      border-radius: 10px !important;
      animation: openingFill 1.8s cubic-bezier(0.16, 1, 0.3, 1) forwards !important;
    }
    @keyframes openingFill {
      0% { width: 0%; }
      100% { width: 100%; }
    }
    .opening-status-text {
      font-size: 0.8rem !important;
      color: #cbd5e1 !important;
      font-weight: 600 !important;
    }

    /* PDF SECTION LAYOUT & SCROLL REVEAL ANIMATIONS */
    .section-tag-pill {
      display: inline-block !important;
      padding: 6px 16px !important;
      background: #fffbeb !important;
      border: 1px solid #fde68a !important;
      border-radius: 20px !important;
      color: #b45309 !important;
      font-size: 0.78rem !important;
      font-weight: 800 !important;
      letter-spacing: 0.1em !important;
      margin-bottom: 16px !important;
    }

    /* 8-CARD GRID STYLING AS SPECIFIED IN PDF DEVELOPER PATTERN */
    .service-8-card {
      display: flex !important;
      flex-direction: column !important;
      justify-content: space-between !important;
      padding: 24px !important;
      background: #ffffff !important;
      border: 1px solid #e2e8f0 !important;
      border-radius: 18px !important;
      transition: all 0.35s cubic-bezier(0.16, 1, 0.3, 1) !important;
    }
    .service-8-card:hover {
      transform: translateY(-8px) !important;
      border-color: #ffc700 !important;
      box-shadow: 0 20px 40px rgba(15, 23, 42, 0.12), 0 0 25px rgba(255, 199, 0, 0.25) !important;
    }
    .service-card-number {
      font-family: var(--font-heading) !important;
      font-size: 1.5rem !important;
      font-weight: 900 !important;
      color: #ffc700 !important;
      margin-bottom: 10px !important;
    }
    .service-card-title {
      font-size: 1.15rem !important;
      font-weight: 800 !important;
      color: #0f172a !important;
      margin-bottom: 10px !important;
      line-height: 1.35 !important;
    }
    .service-card-desc {
      color: #475569 !important;
      font-size: 0.92rem !important;
      line-height: 1.6 !important;
      margin-bottom: 16px !important;
    }
    .service-card-link {
      color: #080c16 !important;
      font-weight: 800 !important;
      font-size: 0.9rem !important;
      text-decoration: none !important;
      display: inline-flex !important;
      align-items: center !important;
      gap: 6px !important;
      transition: color 0.2s ease !important;
    }
    .service-card-link:hover { color: #d97706 !important; }

    /* 5-STEP JOURNEY CARDS */
    .process-step-card {
      background: #ffffff !important;
      border: 1px solid #e2e8f0 !important;
      border-radius: 18px !important;
      padding: 24px 18px !important;
      text-align: center !important;
      transition: all 0.3s ease !important;
    }
    .process-step-card:hover {
      border-color: #ffc700 !important;
      transform: translateY(-6px) !important;
      box-shadow: 0 16px 32px rgba(15, 23, 42, 0.1) !important;
    }
    .step-card-num {
      width: 44px !important;
      height: 44px !important;
      border-radius: 50% !important;
      background: #ffc700 !important;
      color: #080c16 !important;
      font-weight: 900 !important;
      font-size: 1.15rem !important;
      display: flex !important;
      align-items: center !important;
      justify-content: center !important;
      margin: 0 auto 14px auto !important;
      box-shadow: 0 6px 16px rgba(255, 199, 0, 0.3) !important;
    }
    .step-card-title {
      font-size: 1.05rem !important;
      font-weight: 800 !important;
      color: #0f172a !important;
      margin-bottom: 8px !important;
      line-height: 1.3 !important;
    }
    .step-card-desc {
      font-size: 0.88rem !important;
      color: #64748b !important;
      line-height: 1.55 !important;
    }

    /* PROOF STRIP BAR */
    .proof-strip-bar {
      display: flex !important;
      align-items: center !important;
      justify-content: center !important;
      flex-wrap: wrap !important;
      gap: 16px !important;
      padding: 16px 24px !important;
      background: #ffffff !important;
      border: 1px solid #fde68a !important;
      border-radius: 40px !important;
      box-shadow: 0 10px 30px rgba(15, 23, 42, 0.05) !important;
    }
    .proof-item {
      font-size: 0.9rem !important;
      font-weight: 800 !important;
      color: #0f172a !important;
    }
    .proof-divider { color: #cbd5e1 !important; font-weight: 300 !important; }

    /* ROUTE COMPARISON CARDS */
    .route-card {
      padding: 28px !important;
      background: #ffffff !important;
      border: 1px solid #e2e8f0 !important;
      border-radius: 20px !important;
      transition: all 0.3s ease !important;
    }
    .route-card:hover {
      border-color: #ffc700 !important;
      box-shadow: 0 18px 36px rgba(15, 23, 42, 0.1) !important;
    }
    .route-card-tag {
      font-size: 0.75rem !important;
      font-weight: 800 !important;
      color: #b45309 !important;
      letter-spacing: 0.1em !important;
      margin-bottom: 8px !important;
    }

    /* ACCORDION FAQ STYLES */
    .faq-accordion-container {
      display: flex !important;
      flex-direction: column !important;
      gap: 16px !important;
    }
    .faq-item {
      background: #ffffff !important;
      border: 1px solid #e2e8f0 !important;
      border-radius: 16px !important;
      overflow: hidden !important;
      transition: border-color 0.3s ease !important;
    }
    .faq-item.active {
      border-color: #ffc700 !important;
      box-shadow: 0 10px 25px rgba(15, 23, 42, 0.06) !important;
    }
    .faq-question {
      width: 100% !important;
      padding: 20px 24px !important;
      background: transparent !important;
      border: none !important;
      display: flex !important;
      align-items: center !important;
      justify-content: space-between !important;
      font-family: var(--font-heading) !important;
      font-size: 1.1rem !important;
      font-weight: 800 !important;
      color: #0f172a !important;
      text-align: left !important;
      cursor: pointer !important;
    }
    .faq-icon {
      transition: transform 0.3s ease !important;
      stroke: #0f172a !important;
      flex-shrink: 0 !important;
    }
    .faq-item.active .faq-icon {
      transform: rotate(180deg) !important;
      stroke: #d97706 !important;
    }
    .faq-answer {
      max-height: 0 !important;
      overflow: hidden !important;
      transition: max-height 0.4s cubic-bezier(0.16, 1, 0.3, 1), padding 0.4s ease !important;
      padding: 0 24px !important;
    }
    .faq-item.active .faq-answer {
      max-height: 300px !important;
      padding: 0 24px 20px 24px !important;
    }
    .faq-answer p {
      color: #475569 !important;
      font-size: 0.98rem !important;
      line-height: 1.65 !important;
      margin: 0 !important;
    }

    /* ROADMAP FORM GRID */
    .roadmap-form-grid {
      display: grid !important;
      grid-template-columns: repeat(2, 1fr) !important;
      gap: 20px !important;
    }
    .form-group {
      display: flex !important;
      flex-direction: column !important;
      gap: 6px !important;
    }
    .form-group label {
      font-size: 0.88rem !important;
      font-weight: 800 !important;
      color: #0f172a !important;
    }
    .form-group input,
    .form-group select,
    .form-group textarea {
      padding: 12px 16px !important;
      border: 1px solid #cbd5e1 !important;
      border-radius: 12px !important;
      font-family: inherit !important;
      font-size: 0.95rem !important;
      color: #0f172a !important;
      background: #f8fafc !important;
      transition: all 0.2s ease !important;
    }
    .form-group input:focus,
    .form-group select:focus,
    .form-group textarea:focus {
      outline: none !important;
      border-color: #ffc700 !important;
      background: #ffffff !important;
      box-shadow: 0 0 0 3px rgba(255, 199, 0, 0.2) !important;
    }

    /* GUARANTEED NATIVE MOVING & SCROLLING LOGO MARQUEE TICKER */
    .logo-marquee-section {
      padding: 44px 0 !important;
      border-top: 1px solid #fde68a !important;
      border-bottom: 1px solid #fde68a !important;
      background: #fffbeb !important;
      overflow: hidden !important;
      position: relative !important;
      width: 100% !important;
    }
    .marquee-title {
      text-align: center !important;
      font-size: 0.85rem !important;
      text-transform: uppercase !important;
      letter-spacing: 0.15em !important;
      color: #64748b !important;
      margin-bottom: 24px !important;
      font-weight: 700 !important;
    }
    .marquee-track-container {
      width: 100% !important;
      overflow: hidden !important;
      white-space: nowrap !important;
      position: relative !important;
      display: block !important;
      mask-image: linear-gradient(90deg, transparent 0%, #000 6%, #000 94%, transparent 100%) !important;
      -webkit-mask-image: linear-gradient(90deg, transparent 0%, #000 6%, #000 94%, transparent 100%) !important;
    }
    .marquee-content-flex {
      display: inline-flex !important;
      align-items: center !important;
      gap: 30px !important;
      padding: 6px 0 !important;
    }
    .marquee-item {
      font-family: 'Outfit', 'Inter', sans-serif !important;
      font-weight: 800 !important;
      font-size: 1.35rem !important;
      color: #0f172a !important;
      opacity: 0.9 !important;
      white-space: nowrap !important;
      display: inline-block !important;
      cursor: pointer !important;
      transition: color 0.2s ease, transform 0.2s ease !important;
    }
    .marquee-star {
      color: #ffc700 !important;
      font-size: 1.1rem !important;
      margin: 0 10px !important;
      display: inline-block !important;
    }
    /* SECTION 3D GLASS IMAGE WRAPPER & HOVER TRANSITIONS */
    .section-image-wrapper {
      position: relative !important;
      border-radius: 24px !important;
      overflow: hidden !important;
      border: 1px solid #fde68a !important;
      box-shadow: 0 20px 50px rgba(15, 23, 42, 0.12), 0 0 30px rgba(255, 199, 0, 0.2) !important;
      transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1) !important;
    }
    .section-image-wrapper:hover {
      transform: translateY(-6px) scale(1.01) !important;
      box-shadow: 0 30px 65px rgba(15, 23, 42, 0.16), 0 0 45px rgba(255, 199, 0, 0.35) !important;
    }
    .section-interactive-image {
      width: 100% !important;
      height: auto !important;
      display: block !important;
      object-fit: cover !important;
      transition: transform 0.6s cubic-bezier(0.16, 1, 0.3, 1) !important;
    }
    .section-image-wrapper:hover .section-interactive-image {
      transform: scale(1.04) !important;
    }
    .image-overlay-badge {
      position: absolute !important;
      bottom: 20px !important;
      left: 20px !important;
      background: rgba(8, 12, 22, 0.85) !important;
      backdrop-filter: blur(12px) !important;
      border: 1px solid rgba(255, 199, 0, 0.4) !important;
      border-radius: 30px !important;
      padding: 8px 16px !important;
      color: #ffffff !important;
      font-size: 0.82rem !important;
      font-weight: 800 !important;
      display: flex !important;
      align-items: center !important;
      gap: 8px !important;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3) !important;
    }
    .badge-dot {
      width: 8px !important;
      height: 8px !important;
      border-radius: 50% !important;
      background: #ffc700 !important;
      box-shadow: 0 0 8px #ffc700 !important;
    }

    /* NAV LINK REFINED UNDERLINE & COLOR REVEAL HOVER */
    .nav-links > li > a {
      position: relative !important;
      transition: color 0.25s ease !important;
    }
    .nav-links > li > a::after {
      content: '' !important;
      position: absolute !important;
      bottom: -4px !important;
      left: 0 !important;
      width: 100% !important;
      height: 2px !important;
      background: #ffc700 !important;
      transform: scaleX(0) !important;
      transform-origin: right !important;
      transition: transform 0.3s cubic-bezier(0.16, 1, 0.3, 1) !important;
    }
    .nav-links > li > a:hover::after {
      transform: scaleX(1) !important;
      transform-origin: left !important;
    }

    /* CARD HOVER LINK ARROW MOTION & TACTILE LIFT */
    .glass-card, .service-8-card, .route-card, .process-step-card {
      will-change: transform, box-shadow !important;
    }
    .glass-card:hover .service-card-link,
    .service-8-card:hover .service-card-link {
      color: #d97706 !important;
    }

    /* ACCESSIBILITY & PREFERS REDUCED MOTION OVERRIDES */
    @media (prefers-reduced-motion: reduce) {
      *, ::before, ::after {
        animation-duration: 0.01ms !important;
        animation-iteration-count: 1 !important;
        transition-duration: 0.01ms !important;
        scroll-behavior: auto !important;
      }
      .website-opening-preloader { display: none !important; }
      .hugo-rotating-arc, .bar-light-surge, .hugo-sparkle, .kpi-dot-pulse { animation: none !important; }
      .hero-network-float { transform: none !important; }
    }
      /* COMPACT HERO SPOTLIGHT FEATURE CARD RESPONSIVE STYLES */
    .spotlight-badge-card.hero-proof-card {
      width: 100% !important;
      max-width: 600px !important;
      min-height: 128px !important;
      box-sizing: border-box !important;
      transition: border-color 0.3s ease, box-shadow 0.3s ease !important;
    }
    .spotlight-avatar-ring {
      width: 72px !important;
      height: 72px !important;
      min-width: 72px !important;
      min-height: 72px !important;
      aspect-ratio: 1 / 1 !important;
      flex-shrink: 0 !important;
    }
    #spotlight-author {
      min-height: 2.56em !important;
      line-height: 1.28 !important;
      display: flex !important;
      align-items: center !important;
    }
    #spotlight-quote {
      min-height: 2.8em !important;
      line-height: 1.4 !important;
      display: flex !important;
      align-items: center !important;
    }
    @media (max-width: 640px) {
      .spotlight-badge-card.hero-proof-card {
        padding: 14px 16px !important;
        border-radius: 18px !important;
        margin-top: 16px !important;
        min-height: 114px !important;
      }
      .spotlight-avatar-ring {
        width: 56px !important;
        height: 56px !important;
        min-width: 56px !important;
        min-height: 56px !important;
      }
      #spotlight-author {
        font-size: 0.92rem !important;
        line-height: 1.24 !important;
        min-height: 2.5em !important;
        margin-bottom: 2px !important;
      }
      #spotlight-quote {
        font-size: 0.78rem !important;
        line-height: 1.35 !important;
        min-height: 2.7em !important;
      }
      .spotlight-progress-wrap {
        width: 80px !important;
        height: 6px !important;
        flex-shrink: 0 !important;
      }
    }
    @media (max-width: 480px) {
      .spotlight-badge-card.hero-proof-card {
        padding: 12px 14px !important;
        min-height: 112px !important;
      }
      .spotlight-avatar-ring {
        width: 48px !important;
        height: 48px !important;
        min-width: 48px !important;
        min-height: 48px !important;
      }
      #spotlight-author {
        font-size: 0.84rem !important;
        line-height: 1.22 !important;
        min-height: 2.5em !important;
        margin-bottom: 2px !important;
      }
      #spotlight-quote {
        font-size: 0.72rem !important;
        line-height: 1.3 !important;
        min-height: 2.6em !important;
      }
      .spotlight-progress-wrap {
        width: 75px !important;
      }
    }
      /* ==========================================================================
       HERO HEADING SIZE (12% SLIGHTLY SMALLER) & PREMIUM ENTRANCE ANIMATIONS
       ========================================================================== */
    .hero-pdf-h1,
    .hero-content h1,
    .hero-section h1 {
      font-size: clamp(2.65rem, 4.3vw, 3.85rem) !important;
      font-weight: 800 !important;
      line-height: 1.12 !important;
      letter-spacing: -0.025em !important;
      color: #080c16 !important;
      margin-bottom: 20px !important;
      will-change: transform, opacity !important;
      opacity: 0;
      transform: translateY(22px);
      animation: heroHeadingEntrance 0.85s cubic-bezier(0.22, 1, 0.36, 1) forwards !important;
      animation-delay: 0.22s !important;
    }

    .hero-section-tag-pill {
      display: inline-block !important;
      will-change: transform, opacity !important;
      opacity: 0;
      transform: translateY(12px);
      animation: heroEyebrowEntrance 0.65s cubic-bezier(0.22, 1, 0.36, 1) forwards !important;
      animation-delay: 0.08s !important;
    }

    .hero-subtitle {
      will-change: transform, opacity !important;
      opacity: 0;
      transform: translateY(16px);
      animation: heroSubtitleEntrance 0.75s cubic-bezier(0.22, 1, 0.36, 1) forwards !important;
      animation-delay: 0.42s !important;
    }

    @keyframes heroEyebrowEntrance {
      0% {
        opacity: 0;
        transform: translateY(12px);
      }
      100% {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @keyframes heroHeadingEntrance {
      0% {
        opacity: 0;
        transform: translateY(22px);
      }
      100% {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @keyframes heroSubtitleEntrance {
      0% {
        opacity: 0;
        transform: translateY(16px);
      }
      100% {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @media (max-width: 1024px) {
      .hero-pdf-h1,
      .hero-content h1,
      .hero-section h1 {
        font-size: clamp(2.25rem, 3.8vw, 3.2rem) !important;
        line-height: 1.15 !important;
      }
    }

    @media (max-width: 640px) {
      .hero-pdf-h1,
      .hero-content h1,
      .hero-section h1 {
        font-size: clamp(1.9rem, 6.2vw, 2.4rem) !important;
        line-height: 1.18 !important;
      }
    }

    @media (prefers-reduced-motion: reduce) {
      .hero-section-tag-pill,
      .hero-pdf-h1,
      .hero-content h1,
      .hero-section h1,
      .hero-subtitle {
        animation: none !important;
        opacity: 1 !important;
        transform: none !important;
      }
    }
      /* ==========================================================================
       HERO PREMIUM STAGGERED TEXT ENTRANCE ANIMATIONS (EYEBROW -> H1 L1 -> H1 L2 -> PARAGRAPH)
       ========================================================================== */
    .hero-section-tag-pill {
      display: inline-block !important;
      opacity: 0;
      transform: translateY(15px);
      animation: heroEyebrowReveal 0.6s cubic-bezier(0.22, 1, 0.36, 1) forwards !important;
      animation-delay: 0.05s !important;
      will-change: transform, opacity !important;
    }

    .hero-pdf-h1,
    .hero-content h1,
    .hero-section h1 {
      font-size: clamp(2.65rem, 4.3vw, 3.85rem) !important;
      font-weight: 800 !important;
      line-height: 1.12 !important;
      letter-spacing: -0.025em !important;
      color: #080c16 !important;
      margin-bottom: 20px !important;
      animation: none !important;
      opacity: 1 !important;
      transform: none !important;
    }

    .hero-pdf-h1 .hero-title-line {
      display: block !important;
      will-change: transform, opacity !important;
    }

    .hero-pdf-h1 .hero-title-line.line-1 {
      opacity: 0;
      transform: translateY(30px);
      animation: heroHeadingReveal 0.85s cubic-bezier(0.22, 1, 0.36, 1) forwards !important;
      animation-delay: 0.16s !important;
    }

    .hero-pdf-h1 .hero-title-line.line-2 {
      opacity: 0;
      transform: translateY(30px);
      animation: heroHeadingReveal 0.85s cubic-bezier(0.22, 1, 0.36, 1) forwards !important;
      animation-delay: 0.30s !important;
    }

    .hero-subtitle {
      opacity: 0;
      transform: translateY(20px);
      animation: heroParagraphReveal 0.72s cubic-bezier(0.22, 1, 0.36, 1) forwards !important;
      animation-delay: 0.55s !important;
      will-change: transform, opacity !important;
    }

    @keyframes heroEyebrowReveal {
      0% {
        opacity: 0;
        transform: translateY(15px);
      }
      100% {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @keyframes heroHeadingReveal {
      0% {
        opacity: 0;
        transform: translateY(30px);
      }
      100% {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @keyframes heroParagraphReveal {
      0% {
        opacity: 0;
        transform: translateY(20px);
      }
      100% {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @media (max-width: 1024px) {
      .hero-pdf-h1,
      .hero-content h1,
      .hero-section h1 {
        font-size: clamp(2.25rem, 3.8vw, 3.2rem) !important;
        line-height: 1.15 !important;
      }
    }

    @media (max-width: 640px) {
      .hero-pdf-h1,
      .hero-content h1,
      .hero-section h1 {
        font-size: clamp(1.9rem, 6.2vw, 2.4rem) !important;
        line-height: 1.18 !important;
      }
    }

    @media (prefers-reduced-motion: reduce) {
      .hero-section-tag-pill,
      .hero-pdf-h1,
      .hero-pdf-h1 .hero-title-line,
      .hero-pdf-h1 .hero-title-line.line-1,
      .hero-pdf-h1 .hero-title-line.line-2,
      .hero-subtitle {
        animation: none !important;
        opacity: 1 !important;
        transform: none !important;
      }
    }
      /* ==========================================================================
       HERO ENTRANCE TIMELINE (AUTO-LOAD) + SUBTLE BLACK HEADING HOVER EFFECT
       ========================================================================== */
    /* 1. EYEBROW TAG ANIMATION (0ms - 600ms) */
    .hero-section-tag-pill {
      display: inline-block !important;
      opacity: 0;
      transform: translateY(15px);
      animation: heroEyebrowReveal 0.6s cubic-bezier(0.22, 1, 0.36, 1) forwards !important;
      animation-delay: 0.05s !important;
      will-change: transform, opacity !important;
    }

    /* 2. MAIN HEADING: STRICTLY BLACK, SMOOTH HOVER LIFT & SHADOW */
    .hero-pdf-h1,
    .hero-content h1,
    .hero-section h1 {
      font-size: clamp(2.65rem, 4.3vw, 3.85rem) !important;
      font-weight: 800 !important;
      line-height: 1.12 !important;
      letter-spacing: -0.025em !important;
      color: #080c16 !important;
      margin-bottom: 20px !important;
      animation: none !important;
      opacity: 1 !important;
      cursor: default !important;
      transition: transform 0.3s cubic-bezier(0.16, 1, 0.3, 1), text-shadow 0.3s ease !important;
      will-change: transform !important;
    }

    /* 3. HEADING HOVER INTERACTION (STRICTLY PRESERVES BLACK TEXT COLOR) */
    .hero-pdf-h1:hover,
    .hero-content h1:hover {
      color: #080c16 !important;
      transform: translateY(-2px) !important;
      text-shadow: 0 4px 16px rgba(8, 12, 22, 0.12) !important;
    }

    .hero-pdf-h1 .hero-title-line {
      display: block !important;
      color: #080c16 !important;
      will-change: transform, opacity !important;
    }

    /* 4. HEADING LINE 1 AUTO ENTRANCE (150ms start) */
    .hero-pdf-h1 .hero-title-line.line-1 {
      opacity: 0;
      transform: translateY(30px);
      animation: heroHeadingReveal 0.8s cubic-bezier(0.22, 1, 0.36, 1) forwards !important;
      animation-delay: 0.15s !important;
    }

    /* 5. HEADING LINE 2 AUTO ENTRANCE (280ms start - 130ms staggered delay) */
    .hero-pdf-h1 .hero-title-line.line-2 {
      opacity: 0;
      transform: translateY(30px);
      animation: heroHeadingReveal 0.8s cubic-bezier(0.22, 1, 0.36, 1) forwards !important;
      animation-delay: 0.28s !important;
    }

    /* 6. PARAGRAPH AUTO ENTRANCE (550ms start) */
    .hero-subtitle {
      opacity: 0;
      transform: translateY(15px);
      animation: heroParagraphReveal 0.7s cubic-bezier(0.22, 1, 0.36, 1) forwards !important;
      animation-delay: 0.55s !important;
      will-change: transform, opacity !important;
    }

    @keyframes heroEyebrowReveal {
      0% {
        opacity: 0;
        transform: translateY(15px);
      }
      100% {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @keyframes heroHeadingReveal {
      0% {
        opacity: 0;
        transform: translateY(30px);
      }
      100% {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @keyframes heroParagraphReveal {
      0% {
        opacity: 0;
        transform: translateY(15px);
      }
      100% {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @media (max-width: 1024px) {
      .hero-pdf-h1,
      .hero-content h1,
      .hero-section h1 {
        font-size: clamp(2.25rem, 3.8vw, 3.2rem) !important;
        line-height: 1.15 !important;
      }
    }

    @media (max-width: 640px) {
      .hero-pdf-h1,
      .hero-content h1,
      .hero-section h1 {
        font-size: clamp(1.9rem, 6.2vw, 2.4rem) !important;
        line-height: 1.18 !important;
      }
    }

    @media (prefers-reduced-motion: reduce) {
      .hero-section-tag-pill,
      .hero-pdf-h1,
      .hero-pdf-h1 .hero-title-line,
      .hero-pdf-h1 .hero-title-line.line-1,
      .hero-pdf-h1 .hero-title-line.line-2,
      .hero-subtitle {
        animation: none !important;
        opacity: 1 !important;
        transform: none !important;
      }
    }
      
      /* STRICT 2-LINE HERO HEADING LOCK */
    .hero-pdf-h1,
    .hero-content h1,
    .hero-section h1 {
      font-size: clamp(2.45rem, 3.9vw, 3.5rem) !important;
      font-weight: 800 !important;
      line-height: 1.12 !important;
      letter-spacing: -0.025em !important;
      color: #080c16 !important;
      margin-bottom: 20px !important;
      max-width: 100% !important;
    }

    .hero-pdf-h1 .hero-title-line {
      display: block !important;
      white-space: nowrap !important;
      color: #080c16 !important;
    }

    @media (max-width: 768px) {
      .hero-pdf-h1,
      .hero-content h1,
      .hero-section h1 {
        font-size: clamp(1.9rem, 6vw, 2.5rem) !important;
        line-height: 1.15 !important;
      }
      .hero-pdf-h1 .hero-title-line {
        white-space: normal !important;
      }
    }
  </style>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- MASTER COMBINED HEADER WRAPPER (BOTH BARS BOUND TOGETHER — ZERO OVERLAPPING) -->
<div class="header-master-wrapper">
  <!-- TOP ANNOUNCEMENT BANNER (OB LOGO MATCHING YELLOW) -->
  <div class="top-announcement-bar">
    <span>Transparent commercial models for your South India expansion &amp; GCC setup.</span>
    <a href="<?php echo esc_url( home_url( '/pricing' ) ); ?>">Explore Pricing &rarr;</a>
  </div>

  <header class="site-header" role="banner">
    <div class="theme-container">
      <div class="header-inner">
                        <div class="brand-logo-wrap">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="custom-logo-link brand-logo" rel="home" aria-label="Overseas Bridge Home">
            <svg class="custom-logo ob-navbar-logo" viewBox="0 0 270 188" width="55" height="38" fill="none" xmlns="http://www.w3.org/2000/svg" aria-label="Overseas Bridge OB Logo" role="img">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M67.5 0A67.5 67.5 0 0 1 135 67.5V120.5A67.5 67.5 0 0 1 67.5 188A67.5 67.5 0 0 1 0 120.5V67.5A67.5 67.5 0 0 1 67.5 0ZM67.5 41.5A26.5 26.5 0 0 1 94 68V120A26.5 26.5 0 0 1 67.5 146.5A26.5 26.5 0 0 1 41 120V68A26.5 26.5 0 0 1 67.5 41.5Z" fill="#FDC002"/>
              <path d="M146 0H226A44 44 0 0 1 270 44A44 44 0 0 1 226 88H146V0Z" fill="#080C16"/>
              <path d="M146 100H226A44 44 0 0 1 270 144A44 44 0 0 1 226 188H146V100Z" fill="#080C16"/>
            </svg>
          </a>
        </div>

        <!-- HUGO INC DROPDOWN CARD & NAVIGATION MENU (NO RIGHT ARROWS IN DROPDOWN) -->
        <nav class="nav-desktop" role="navigation" aria-label="Primary Navigation">
          <ul class="nav-links">
            <!-- SERVICES DROPDOWN (COLORED ICONS ONLY — NO RIGHT ARROWS) -->
            <li class="has-dropdown">
              <a href="<?php echo esc_url( home_url( '/services-overview' ) ); ?>">
                Services
                <svg class="hugo-nav-chevron" width="10" height="6" viewBox="0 0 10 6" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M1 1l4 4 4-4"/></svg>
              </a>
              <ul class="dropdown-menu">
                <!-- 1. India Entry & Business Setup -->
                <li>
                  <a href="<?php echo esc_url( home_url( '/india-entry-strategy' ) ); ?>">
                    <div class="dropdown-item-left">
                      <span class="dropdown-item-icon" style="color: #00b4d8; background: rgba(0, 180, 216, 0.12);">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10"/><polygon points="16.24 7.76 14.12 14.12 7.76 16.24 9.88 9.88 16.24 7.76"/></svg>
                      </span>
                      <span>India Entry &amp; Business Setup</span>
                    </div>
                  </a>
                </li>
                <!-- 2. Office, BPO & GCC Setup in India -->
                <li>
                  <a href="<?php echo esc_url( home_url( '/company-entity-setup' ) ); ?>">
                    <div class="dropdown-item-left">
                      <span class="dropdown-item-icon" style="color: #10b981; background: rgba(16, 185, 129, 0.12);">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><rect x="4" y="2" width="16" height="20" rx="2" ry="2"/><line x1="9" y1="22" x2="9" y2="22.01"/><line x1="15" y1="22" x2="15" y2="22.01"/><line x1="9" y1="6" x2="9" y2="6.01"/><line x1="15" y1="6" x2="15" y2="6.01"/><line x1="9" y1="10" x2="9" y2="10.01"/><line x1="15" y1="10" x2="15" y2="10.01"/><line x1="9" y1="14" x2="9" y2="14.01"/><line x1="15" y1="14" x2="15" y2="14.01"/><line x1="9" y1="18" x2="9" y2="18.01"/><line x1="15" y1="18" x2="15" y2="18.01"/></svg>
                      </span>
                      <span>Office, BPO &amp; GCC Setup in India</span>
                    </div>
                  </a>
                </li>
                <!-- 3. Professional Studio Setup in India -->
                <li>
                  <a href="<?php echo esc_url( home_url( '/studio-setup' ) ); ?>">
                    <div class="dropdown-item-left">
                      <span class="dropdown-item-icon" style="color: #f97316; background: rgba(249, 115, 22, 0.12);">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M23 7l-7 5 7 5V7z"/><rect x="1" y="5" width="15" height="14" rx="2" ry="2"/></svg>
                      </span>
                      <span>Professional Studio Setup in India</span>
                    </div>
                  </a>
                </li>
                <!-- 4. Factory & Manufacturing Setup in India -->
                <li>
                  <a href="<?php echo esc_url( home_url( '/factory-manufacturing-setup' ) ); ?>">
                    <div class="dropdown-item-left">
                      <span class="dropdown-item-icon" style="color: #8b5cf6; background: rgba(139, 92, 246, 0.12);">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M2 20a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8l-7 5V8l-7 5V4a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2Z"/></svg>
                      </span>
                      <span>Factory &amp; Manufacturing Setup in India</span>
                    </div>
                  </a>
                </li>
                <!-- 5. Marketing Services for Businesses in India -->
                <li>
                  <a href="<?php echo esc_url( home_url( '/marketing-for-businesses' ) ); ?>">
                    <div class="dropdown-item-left">
                      <span class="dropdown-item-icon" style="color: #ef4444; background: rgba(239, 68, 68, 0.12);">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                      </span>
                      <span>Marketing Services for Businesses in India</span>
                    </div>
                  </a>
                </li>
                <!-- 6. Business Support Services in India -->
                <li>
                  <a href="<?php echo esc_url( home_url( '/business-support-services' ) ); ?>">
                    <div class="dropdown-item-left">
                      <span class="dropdown-item-icon" style="color: #f59e0b; background: rgba(245, 158, 11, 0.12);">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                      </span>
                      <span>Business Support Services in India</span>
                    </div>
                  </a>
                </li>
                <!-- 7. Architectural & Design Studio Setup in India -->
                <li>
                  <a href="<?php echo esc_url( home_url( '/architectural-design-studio-setup-india' ) ); ?>">
                    <div class="dropdown-item-left">
                      <span class="dropdown-item-icon" style="color: #06b6d4; background: rgba(6, 182, 212, 0.12);">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="m2 22 1-1h3l9-9"/><path d="M14 8 8 14"/><path d="m18 10 4-4a2.828 2.828 0 1 0-4-4l-4 4"/><path d="m14 4 6 6"/><circle cx="5" cy="19" r="2"/></svg>
                      </span>
                      <span>Architectural &amp; Design Studio Setup in India</span>
                    </div>
                  </a>
                </li>
              </ul>
            </li>

            <!-- DIRECT SINGLE LINKS -->
            <li><a href="<?php echo esc_url( home_url( '/industries-served' ) ); ?>">Industries</a></li>
            <li><a href="<?php echo esc_url( home_url( '/about-us' ) ); ?>">About</a></li>

            <!-- RESOURCES DROPDOWN (COLORED ICONS ONLY — NO RIGHT ARROWS) -->
            <li class="has-dropdown">
              <a href="<?php echo esc_url( home_url( '/insights' ) ); ?>">
                Resources
                <svg class="hugo-nav-chevron" width="10" height="6" viewBox="0 0 10 6" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M1 1l4 4 4-4"/></svg>
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a href="<?php echo esc_url( home_url( '/insights' ) ); ?>">
                    <div class="dropdown-item-left">
                      <span class="dropdown-item-icon" style="color: #00b4d8; background: rgba(0, 180, 216, 0.12);">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
                      </span>
                      <span>Blogs</span>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="<?php echo esc_url( home_url( '/faqs' ) ); ?>">
                    <div class="dropdown-item-left">
                      <span class="dropdown-item-icon" style="color: #ffc700; background: rgba(255, 199, 0, 0.15);">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>
                      </span>
                      <span>FAQs & Knowledge Base</span>
                    </div>
                  </a>
                </li>
              </ul>
            </li>

            <!-- PRICING DIRECT SINGLE LINK -->
            <li><a href="<?php echo esc_url( home_url( '/pricing' ) ); ?>" class="<?php echo is_page('pricing') ? 'current-menu-item' : ''; ?>">Pricing</a></li>

            <!-- CONTACT DIRECT SINGLE LINK -->
            <li><a href="<?php echo esc_url( home_url( '/contact-us' ) ); ?>">Contact</a></li>
          </ul>
        </nav>

        <div class="header-actions" style="display: flex; align-items: center; gap: 16px;">
          <a href="<?php echo esc_url( get_theme_mod( 'hero_primary_cta_url', home_url( '/build-your-dream-team' ) ) ); ?>" class="btn-primary">
            <span><?php echo esc_html( get_theme_mod( 'hero_primary_cta_text', 'Get Started' ) ); ?></span>
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>

          <button class="mobile-toggle" aria-label="Open mobile navigation menu">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 12h18M3 6h18M3 18h18"/></svg>
          </button>
        </div>
      </div>
    </div>
  
<script>
document.addEventListener('DOMContentLoaded', function() {
  // Desktop Dropdowns
  const dropdownParents = document.querySelectorAll('.has-dropdown');
  dropdownParents.forEach(function(item) {
    let leaveTimer = null;
    const menu = item.querySelector('.dropdown-menu');
    item.addEventListener('mouseenter', function() {
      if (leaveTimer) clearTimeout(leaveTimer);
      item.classList.add('is-open');
    });
    item.addEventListener('mouseleave', function() {
      leaveTimer = setTimeout(function() { item.classList.remove('is-open'); }, 220);
    });
    if (menu) {
      menu.addEventListener('mouseenter', function() { if (leaveTimer) clearTimeout(leaveTimer); item.classList.add('is-open'); });
      menu.addEventListener('mouseleave', function() { leaveTimer = setTimeout(function() { item.classList.remove('is-open'); }, 220); });
    }
  });
  document.addEventListener('click', function(e) {
    if (!e.target.closest('.has-dropdown')) {
      dropdownParents.forEach(function(item) { item.classList.remove('is-open'); });
    }
  });

  // Mobile Navigation Drawer Controller
  const mobileToggle = document.querySelector('.mobile-toggle');
  const mobileClose = document.querySelector('.mobile-close');
  const mobileDrawer = document.querySelector('.mobile-nav-drawer');
  let mobileBackdrop = document.querySelector('.mobile-drawer-backdrop');

  if (!mobileBackdrop) {
    mobileBackdrop = document.createElement('div');
    mobileBackdrop.className = 'mobile-drawer-backdrop';
    document.body.appendChild(mobileBackdrop);
  }

  function openMobileMenu() {
    if (mobileDrawer) mobileDrawer.classList.add('active');
    if (mobileBackdrop) mobileBackdrop.classList.add('active');
    document.body.style.overflow = 'hidden';
  }

  function closeMobileMenu() {
    if (mobileDrawer) mobileDrawer.classList.remove('active');
    if (mobileBackdrop) mobileBackdrop.classList.remove('active');
    document.body.style.overflow = '';
  }

  if (mobileToggle) {
    mobileToggle.addEventListener('click', function(e) {
      e.preventDefault();
      openMobileMenu();
    });
  }

  if (mobileClose) {
    mobileClose.addEventListener('click', function(e) {
      e.preventDefault();
      closeMobileMenu();
    });
  }

  if (mobileBackdrop) {
    mobileBackdrop.addEventListener('click', closeMobileMenu);
  }

  // Close drawer on clicking non-dropdown links
  document.querySelectorAll('.mobile-nav-links a:not(.mobile-dropdown-toggle)').forEach(function(link) {
    link.addEventListener('click', function() {
      closeMobileMenu();
    });
  });

  // Remove any legacy preloader immediately
  var preloader = document.getElementById('website-opening-preloader');
  if (preloader) {
    preloader.style.display = 'none';
    preloader.remove();
  }
});
</script>

</header>
</div>

<!-- Mobile Navigation Drawer -->
<div class="mobile-nav-drawer" role="dialog" aria-modal="true" aria-label="Mobile Navigation">
  <button class="mobile-close" aria-label="Close menu">&times;</button>
  <ul class="mobile-nav-links">
    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
    <li class="mobile-has-dropdown">
      <a href="<?php echo esc_url( home_url( '/services-overview' ) ); ?>" style="display: flex; justify-content: space-between; align-items: center;">
        <span>Services</span>
        <span style="font-size: 0.9rem; color: #ffc700;">▾</span>
      </a>
      <ul class="mobile-submenu" style="list-style: none; padding: 8px 0 8px 16px; margin: 0; display: flex; flex-direction: column; gap: 12px;">
        <li><a href="<?php echo esc_url( home_url( '/india-entry-strategy' ) ); ?>" style="font-size: 0.95rem; font-weight: 600; color: #475569;">• India Entry &amp; Business Setup</a></li>
        <li><a href="<?php echo esc_url( home_url( '/company-entity-setup' ) ); ?>" style="font-size: 0.95rem; font-weight: 600; color: #475569;">• Office, BPO &amp; GCC Setup in India</a></li>
        <li><a href="<?php echo esc_url( home_url( '/studio-setup' ) ); ?>" style="font-size: 0.95rem; font-weight: 600; color: #475569;">• Professional Studio Setup in India</a></li>
        <li><a href="<?php echo esc_url( home_url( '/factory-manufacturing-setup' ) ); ?>" style="font-size: 0.95rem; font-weight: 600; color: #475569;">• Factory &amp; Manufacturing Setup in India</a></li>
        <li><a href="<?php echo esc_url( home_url( '/marketing-for-businesses' ) ); ?>" style="font-size: 0.95rem; font-weight: 600; color: #475569;">• Marketing Services for Businesses in India</a></li>
        <li><a href="<?php echo esc_url( home_url( '/business-support-services' ) ); ?>" style="font-size: 0.95rem; font-weight: 600; color: #475569;">• Business Support Services in India</a></li>
        <li><a href="<?php echo esc_url( home_url( '/architectural-design-studio-setup-india' ) ); ?>" style="font-size: 0.95rem; font-weight: 600; color: #475569;">• Architectural &amp; Design Studio Setup in India</a></li>
      </ul>
    </li>
    <li><a href="<?php echo esc_url( home_url( '/industries-served' ) ); ?>">Industries</a></li>
    <li><a href="<?php echo esc_url( home_url( '/about-us' ) ); ?>">About</a></li>
    <li class="mobile-has-dropdown">
      <a href="<?php echo esc_url( home_url( '/insights' ) ); ?>" style="display: flex; justify-content: space-between; align-items: center;">
        <span>Resources</span>
        <span style="font-size: 0.9rem; color: #ffc700;">▾</span>
      </a>
      <ul class="mobile-submenu" style="list-style: none; padding: 8px 0 8px 16px; margin: 0; display: flex; flex-direction: column; gap: 12px;">
        <li><a href="<?php echo esc_url( home_url( '/insights' ) ); ?>" style="font-size: 0.95rem; font-weight: 600; color: #475569;">• Blogs</a></li>
        <li><a href="<?php echo esc_url( home_url( '/faqs' ) ); ?>" style="font-size: 0.95rem; font-weight: 600; color: #475569;">• FAQs &amp; Knowledge Base</a></li>
      </ul>
    </li>
    <li><a href="<?php echo esc_url( home_url( '/pricing' ) ); ?>" class="<?php echo is_page('pricing') ? 'current-menu-item' : ''; ?>">Pricing</a></li>
    <li><a href="<?php echo esc_url( home_url( '/contact-us' ) ); ?>">Contact</a></li>
    <li><a href="<?php echo esc_url( home_url( '/build-your-dream-team' ) ); ?>" style="color: #ffc700;">Build Your Dream Team</a></li>
  </ul>
</div>
