<?php
/**
 * Template Name: Industries Master
 * Description: High-conversion enterprise template for industries served.
 */

// Instant LiteSpeed and CDN Cache Invalidation
if (!headers_sent()) {
    header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
    header('Cache-Control: post-check=0, pre-check=0', false);
    header('Pragma: no-cache');
    header('X-LiteSpeed-Purge: *');
    header('X-LiteSpeed-Cache-Control: no-cache');
}

get_header();
?>

<!-- Google Fonts & Master Assets -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800;900&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=JetBrains+Mono:wght@500;600;700;800&display=swap" rel="stylesheet">

<style id="hugo-industries-master-styles">
  /* ==========================================================================
     0. ROOT DESIGN SYSTEM — HUGO INC AESTHETICS (OVERSEAS MOGULS THEME)
     ========================================================================== */
  #hugo-ind-root {
    --hg-gold: #ffc700;
    --hg-gold-hover: #f59e0b;
    --hg-gold-glow: rgba(255, 199, 0, 0.45);
    --hg-gold-light: #fffbeb;
    --hg-gold-border: #fde68a;
    
    --hg-dark: #080c16;
    --hg-dark-card: #0d1322;
    --hg-dark-border: rgba(255, 255, 255, 0.12);
    
    --hg-navy: #0f172a;
    --hg-body: #334155;
    --hg-muted: #64748b;
    
    --hg-cyan: #06b6d4;
    --hg-cyan-light: #ecfeff;
    --hg-cyan-border: #a5f3fc;
    
    --hg-violet: #8b5cf6;
    --hg-violet-light: #f5f3ff;
    --hg-violet-border: #ddd6fe;
    
    --hg-emerald: #10b981;
    --hg-emerald-light: #ecfdf5;
    --hg-emerald-border: #a7f3d0;
    
    --hg-rose: #f43f5e;
    --hg-rose-light: #fff1f2;
    --hg-rose-border: #fecdd3;
    
    --hg-amber: #f59e0b;
    --hg-amber-light: #fffbeb;
    
    background: #fffdf5;
    color: var(--hg-body);
    font-family: 'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
    overflow-x: clip;
    position: relative;
    width: 100%;
    line-height: 1.65;
    font-size: 16px;
    -webkit-font-smoothing: antialiased;
  }

  #hugo-ind-root * {
    box-sizing: border-box;
  }

  #hugo-ind-root h1, 
  #hugo-ind-root h2, 
  #hugo-ind-root h3, 
  #hugo-ind-root h4, 
  #hugo-ind-root h5 {
    font-family: 'Outfit', sans-serif;
    color: var(--hg-dark);
    letter-spacing: -0.025em;
    font-weight: 800;
    line-height: 1.15;
    margin: 0;
  }

  .hg-mono {
    font-family: 'JetBrains Mono', monospace;
  }

  /* Animated Interactive Particle Canvas */
  #hugo-galaxy-canvas {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    pointer-events: none;
    z-index: 1;
    opacity: 0.85;
  }

  /* Multi-Color Ambient Aurora Glow Mesh */
  .hg-ambient-orb {
    position: absolute;
    border-radius: 50%;
    filter: blur(140px);
    pointer-events: none;
    z-index: 1;
    opacity: 0.6;
    will-change: transform;
  }

  .hg-orb-gold {
    width: 700px;
    height: 700px;
    background: radial-gradient(circle, #fde68a 0%, rgba(253, 230, 138, 0) 70%);
    top: 1%;
    right: -120px;
    animation: hgOrbDriftA 22s ease-in-out infinite alternate;
  }

  .hg-orb-cyan {
    width: 750px;
    height: 750px;
    background: radial-gradient(circle, #bae6fd 0%, rgba(186, 230, 253, 0) 70%);
    top: 20%;
    left: -160px;
    animation: hgOrbDriftB 26s ease-in-out infinite alternate;
  }

  .hg-orb-violet {
    width: 650px;
    height: 650px;
    background: radial-gradient(circle, #e9d5ff 0%, rgba(233, 213, 255, 0) 70%);
    top: 45%;
    right: -100px;
    animation: hgOrbDriftC 24s ease-in-out infinite alternate;
  }

  .hg-orb-emerald {
    width: 680px;
    height: 680px;
    background: radial-gradient(circle, #a7f3d0 0%, rgba(167, 243, 208, 0) 70%);
    top: 70%;
    left: -120px;
    animation: hgOrbDriftA 28s ease-in-out infinite alternate;
  }

  .hg-orb-amber {
    width: 600px;
    height: 600px;
    background: radial-gradient(circle, #fed7aa 0%, rgba(254, 215, 170, 0) 70%);
    bottom: 2%;
    right: 5%;
    animation: hgOrbDriftB 22s ease-in-out infinite alternate;
  }

  @keyframes hgOrbDriftA {
    0% { transform: translate(0, 0) scale(1); }
    100% { transform: translate(-70px, 80px) scale(1.15); }
  }
  @keyframes hgOrbDriftB {
    0% { transform: translate(0, 0) scale(1); }
    100% { transform: translate(80px, -60px) scale(1.12); }
  }
  @keyframes hgOrbDriftC {
    0% { transform: translate(0, 0) scale(1); }
    100% { transform: translate(-60px, -70px) scale(1.18); }
  }

  /* Background Grid Overlay */
  .hg-bg-grid-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: 
      linear-gradient(to right, rgba(15, 23, 42, 0.035) 1px, transparent 1px),
      linear-gradient(to bottom, rgba(15, 23, 42, 0.035) 1px, transparent 1px);
    background-size: 56px 56px;
    pointer-events: none;
    z-index: 1;
  }

  /* Layout Containers */
  #hugo-ind-root .hg-container {
    width: 92%;
    max-width: 1320px;
    margin: 0 auto;
    padding-left: 20px;
    padding-right: 20px;
    position: relative;
    z-index: 3;
  }

  #hugo-ind-root .hg-section {
    padding: 100px 0;
    position: relative;
  }

  #hugo-ind-root .hg-hero-section {
    padding-top: 156px !important;
    padding-bottom: 76px !important;
  }

  @media (max-width: 1024px) {
    #hugo-ind-root .hg-section {
      padding: 76px 0;
    }
    #hugo-ind-root .hg-hero-section {
      padding-top: 136px !important;
      padding-bottom: 60px !important;
    }
  }

  @media (max-width: 768px) {
    #hugo-ind-root .hg-section {
      padding: 56px 0;
    }
    #hugo-ind-root .hg-hero-section {
      padding-top: 116px !important;
      padding-bottom: 48px !important;
    }
  }

  /* ==========================================================================
     HUGO KINETIC SCROLL & FLOAT MOTION SYSTEM
     ========================================================================== */
  .hg-float-reveal {
    opacity: 0;
    transform: translateY(38px);
    filter: blur(6px);
    transition: opacity 0.85s cubic-bezier(0.16, 1, 0.3, 1), 
                transform 0.85s cubic-bezier(0.16, 1, 0.3, 1), 
                filter 0.85s cubic-bezier(0.16, 1, 0.3, 1);
    will-change: transform, opacity, filter;
  }

  .hg-float-reveal.is-inview {
    opacity: 1;
    transform: translateY(0);
    filter: blur(0);
  }

  /* Continuous Scroll Parallax Translation Wrapper */
  .hg-scroll-kinetic {
    will-change: transform;
    transition: transform 0.15s cubic-bezier(0, 0, 0.2, 1);
  }

  /* Eyebrow Pill */
  .hg-tag-pill {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    padding: 7px 22px;
    background: #ffffff;
    border: 1.5px solid var(--hg-gold-border);
    border-radius: 9999px;
    color: #92400e;
    font-size: 0.82rem;
    font-weight: 800;
    letter-spacing: 0.08em;
    text-transform: uppercase;
    margin-bottom: 22px;
    box-shadow: 0 4px 18px rgba(245, 158, 11, 0.14);
    transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
  }

  .hg-tag-pill:hover {
    border-color: var(--hg-gold);
    box-shadow: 0 8px 24px rgba(245, 158, 11, 0.25);
    transform: translateY(-2px);
  }

  .hg-tag-dot {
    width: 8px;
    height: 8px;
    border-radius: 50%;
    background: #f59e0b;
    box-shadow: 0 0 12px #f59e0b;
    animation: hgDotPulse 2s infinite;
  }

  @keyframes hgDotPulse {
    0%, 100% { transform: scale(1); opacity: 1; }
    50% { transform: scale(1.6); opacity: 0.45; }
  }

  /* Typography Master Classes */
  #hugo-ind-root .hg-h1 {
    font-size: clamp(2.7rem, 4.6vw, 4.3rem) !important;
    font-weight: 900 !important;
    line-height: 1.08 !important;
    letter-spacing: -0.04em !important;
    color: #080c16 !important;
    margin: 0 0 24px 0 !important;
    text-align: left !important;
    display: flex !important;
    flex-direction: column !important;
    gap: 4px !important;
  }

  #hugo-ind-root .hg-h1 .hg-h1-row {
    display: block !important;
    text-align: left !important;
    margin: 0 !important;
    padding: 0 !important;
    line-height: 1.08 !important;
  }

  #hugo-ind-root .hg-h1 .hg-row-dark {
    color: #080c16 !important;
    -webkit-text-fill-color: #080c16 !important;
    background: none !important;
    font-weight: 900 !important;
  }

  #hugo-ind-root .hg-h1 .hg-row-accent {
    color: #d97706 !important;
    background: linear-gradient(135deg, #b45309 0%, #ea580c 45%, #d97706 100%) !important;
    -webkit-background-clip: text !important;
    -webkit-text-fill-color: transparent !important;
    background-clip: text !important;
    text-fill-color: transparent !important;
    font-weight: 900 !important;
    text-shadow: none !important;
    display: inline-block !important;
    max-width: fit-content !important;
  }

  @supports not (-webkit-background-clip: text) {
    #hugo-ind-root .hg-h1 .hg-row-accent {
      color: #b45309 !important;
      -webkit-text-fill-color: #b45309 !important;
    }
  }

  .hg-hero-intro-stack {
    margin: 0 0 28px 0;
    display: flex;
    flex-direction: column;
    gap: 16px;
    max-width: 640px;
    text-align: left;
  }

  .hg-lead-strong {
    font-size: clamp(1.15rem, 1.35vw, 1.28rem);
    font-weight: 700;
    color: #080c16;
    line-height: 1.5;
    margin: 0;
    text-align: left;
  }

  .hg-body-p {
    font-size: clamp(0.98rem, 1.08vw, 1.05rem);
    color: #334155;
    line-height: 1.72;
    margin: 0;
    text-align: left;
  }

  .hg-h2 {
    font-size: clamp(2rem, 3.5vw, 3.2rem);
    font-weight: 800;
    line-height: 1.14;
    letter-spacing: -0.025em;
    color: var(--hg-dark);
    margin-bottom: 18px;
  }

  .hg-h3 {
    font-size: clamp(1.4rem, 2.2vw, 1.85rem);
    font-weight: 700;
    line-height: 1.25;
    color: var(--hg-dark);
    margin-bottom: 14px;
  }

  .hg-lead {
    font-size: clamp(1.05rem, 1.3vw, 1.22rem);
    line-height: 1.7;
    color: var(--hg-body);
    font-weight: 500;
  }

  /* Magnetic Action Buttons with Shimmer Wave */
  .hg-btn-primary {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 12px;
    padding: 16px 36px;
    background: var(--hg-gold);
    color: var(--hg-dark);
    font-family: 'Outfit', sans-serif;
    font-weight: 800;
    font-size: 1.05rem;
    border-radius: 9999px;
    text-decoration: none;
    border: 1px solid #e6b200;
    box-shadow: 0 10px 28px rgba(255, 199, 0, 0.4);
    transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
    position: relative;
    overflow: hidden;
    cursor: pointer;
    white-space: nowrap;
  }

  .hg-btn-primary::after {
    content: '';
    position: absolute;
    top: -50%;
    left: -60%;
    width: 220%;
    height: 200%;
    background: linear-gradient(60deg, transparent 42%, rgba(255, 255, 255, 0.5) 50%, transparent 58%);
    transform: rotate(25deg);
    animation: hgButtonShine 4s ease-in-out infinite;
    pointer-events: none;
  }

  @keyframes hgButtonShine {
    0%, 65% { transform: translateX(-100%) rotate(25deg); }
    100% { transform: translateX(100%) rotate(25deg); }
  }

  .hg-btn-primary:hover {
    background: #ffcf1a;
    transform: translateY(-3px) scale(1.02);
    box-shadow: 0 16px 36px rgba(255, 199, 0, 0.55);
    color: #000;
  }

  .hg-btn-primary svg {
    transition: transform 0.25s ease;
  }

  .hg-btn-primary:hover svg {
    transform: translateX(4px);
  }

  .hg-btn-secondary {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    padding: 14px 28px;
    background: #ffffff;
    border: 1.5px solid rgba(15, 23, 42, 0.12);
    color: var(--hg-dark);
    font-family: 'Outfit', sans-serif;
    font-weight: 700;
    font-size: 0.98rem;
    border-radius: 9999px;
    text-decoration: none;
    box-shadow: 0 4px 16px rgba(15, 23, 42, 0.04);
    transition: all 0.25s cubic-bezier(0.16, 1, 0.3, 1);
  }

  .hg-btn-secondary:hover {
    border-color: var(--hg-gold);
    color: #080c16;
    background: #fffdf5;
    transform: translateY(-2px);
    box-shadow: 0 8px 22px rgba(255, 199, 0, 0.22);
  }

  /* ==========================================================================
     HUGO MAGNETIC FLOATING CAPSULES (VIBRANT PASTEL PILL CLUSTER)
     ========================================================================== */
  .hg-capsules-cluster {
    display: flex;
    flex-wrap: wrap;
    gap: 12px;
    margin: 32px 0;
    position: relative;
  }

  .hg-capsule-pill {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    padding: 10px 22px;
    border-radius: 9999px;
    font-size: 0.92rem;
    font-weight: 700;
    font-family: 'Outfit', sans-serif;
    background: #ffffff;
    box-shadow: 0 6px 18px rgba(15, 23, 42, 0.05);
    transition: transform 0.35s cubic-bezier(0.16, 1, 0.3, 1), box-shadow 0.35s ease;
    cursor: default;
    will-change: transform;
  }

  .hg-capsule-pill:hover {
    transform: translateY(-5px) scale(1.05) !important;
    box-shadow: 0 12px 28px rgba(15, 23, 42, 0.12);
  }

  .hg-capsule-amber {
    border: 1.5px solid #f59e0b;
    color: #b45309;
    background: #fffbeb;
    transform: rotate(-3deg);
    animation: hgPillFloatA 5s ease-in-out infinite alternate;
  }

  .hg-capsule-cyan {
    border: 1.5px solid #06b6d4;
    color: #0e7490;
    background: #ecfeff;
    transform: rotate(3deg);
    animation: hgPillFloatB 5.5s ease-in-out infinite alternate 0.5s;
  }

  .hg-capsule-purple {
    border: 1.5px solid #a855f7;
    color: #7e22ce;
    background: #faf5ff;
    transform: rotate(-4deg);
    animation: hgPillFloatC 6s ease-in-out infinite alternate 1s;
  }

  .hg-capsule-emerald {
    border: 1.5px solid #10b981;
    color: #065f46;
    background: #ecfdf5;
    transform: rotate(4deg);
    animation: hgPillFloatA 5.2s ease-in-out infinite alternate 1.5s;
  }

  @keyframes hgPillFloatA {
    0% { transform: translateY(0) rotate(-3deg); }
    100% { transform: translateY(-8px) rotate(-1deg); }
  }
  @keyframes hgPillFloatB {
    0% { transform: translateY(0) rotate(3deg); }
    100% { transform: translateY(-9px) rotate(5deg); }
  }
  @keyframes hgPillFloatC {
    0% { transform: translateY(0) rotate(-4deg); }
    100% { transform: translateY(-7px) rotate(-2deg); }
  }

  /* ==========================================================================
     SECTION 1: HUGO INC DYNAMIC ATMOSPHERE & KINETIC BACKGROUND ENGINE
     ========================================================================== */
  #hugo-ind-root .hg-hero-section {
    position: relative;
    overflow: hidden;
    background: #fffdf8 !important;
  }

  /* 1. Dedicated Interactive Neural Canvas (60fps Particles + Constellations) */
  .hg-hero-neural-canvas {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    pointer-events: none;
    z-index: 1;
    opacity: 0.90;
  }

  /* 2. Kinetic Multi-Color Ambient Aurora Light Orbs */
  .hg-hero-aurora-mesh {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    pointer-events: none;
    z-index: 1;
    overflow: hidden;
  }

  .hg-hero-aurora-orb {
    position: absolute;
    border-radius: 50%;
    pointer-events: none;
    will-change: transform;
  }

  .hg-aurora-cyan {
    width: 560px;
    height: 560px;
    top: -60px;
    right: -80px;
    background: radial-gradient(circle, rgba(6, 182, 212, 0.28) 0%, rgba(6, 182, 212, 0.05) 50%, transparent 70%);
    filter: blur(80px);
    animation: hgHeroOrbFloatA 15s ease-in-out infinite alternate;
  }

  .hg-aurora-gold {
    width: 500px;
    height: 500px;
    top: 30px;
    left: -80px;
    background: radial-gradient(circle, rgba(255, 199, 0, 0.25) 0%, rgba(245, 158, 11, 0.05) 50%, transparent 70%);
    filter: blur(80px);
    animation: hgHeroOrbFloatB 18s ease-in-out infinite alternate;
  }

  .hg-aurora-violet {
    width: 540px;
    height: 540px;
    bottom: -80px;
    left: 35%;
    background: radial-gradient(circle, rgba(139, 92, 246, 0.20) 0%, rgba(99, 102, 241, 0.04) 50%, transparent 70%);
    filter: blur(90px);
    animation: hgHeroOrbFloatC 16s ease-in-out infinite alternate;
  }

  @keyframes hgHeroOrbFloatA {
    0% { transform: translate(0, 0) scale(1); }
    100% { transform: translate(-60px, 70px) scale(1.15); }
  }

  @keyframes hgHeroOrbFloatB {
    0% { transform: translate(0, 0) scale(1); }
    100% { transform: translate(70px, -50px) scale(1.12); }
  }

  @keyframes hgHeroOrbFloatC {
    0% { transform: translate(0, 0) scale(1); }
    100% { transform: translate(-50px, -60px) scale(1.18); }
  }

  /* 3. Dynamic Moving Tech Matrix Grid */
  .hg-hero-grid-matrix {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: 
      linear-gradient(to right, rgba(6, 182, 212, 0.07) 1px, transparent 1px),
      linear-gradient(to bottom, rgba(6, 182, 212, 0.07) 1px, transparent 1px);
    background-size: 52px 52px;
    pointer-events: none;
    z-index: 1;
  }

  /* 4. Diagonal Laser Shimmer Beam Sweep */
  .hg-hero-laser-sweep {
    position: absolute;
    top: -40%;
    left: -60%;
    width: 220%;
    height: 220%;
    background: linear-gradient(
      65deg,
      transparent 40%,
      rgba(6, 182, 212, 0.10) 46%,
      rgba(255, 199, 0, 0.14) 50%,
      rgba(139, 92, 246, 0.08) 54%,
      transparent 60%
    );
    transform: rotate(-22deg);
    pointer-events: none;
    z-index: 1;
    animation: hgHeroLaserSweep 10s ease-in-out infinite;
  }

  @keyframes hgHeroLaserSweep {
    0% { transform: translateX(-65%) rotate(-22deg); opacity: 0; }
    15% { opacity: 0.95; }
    50% { opacity: 1; }
    85% { opacity: 0.95; }
    100% { transform: translateX(65%) rotate(-22deg); opacity: 0; }
  }

  /* 5. Subtle Wireframe Geometric Dashed Orbitals in outer margins */
  .hg-hero-ambient-ring {
    position: absolute;
    border-radius: 50%;
    pointer-events: none;
    z-index: 1;
    border: 1.5px dashed rgba(6, 182, 212, 0.28);
  }

  .hg-ambient-ring-tr {
    width: 280px;
    height: 280px;
    top: -60px;
    right: -60px;
    animation: hgRingSpinLinear 35s linear infinite;
  }

  .hg-ambient-ring-bl {
    width: 240px;
    height: 240px;
    bottom: -60px;
    left: -60px;
    border-color: rgba(245, 158, 11, 0.25);
    animation: hgRingSpinRevLinear 40s linear infinite;
  }

  @keyframes hgRingSpinLinear {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
  }

  @keyframes hgRingSpinRevLinear {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(-360deg); }
  }


  /* ==========================================================================
     SECTION 1: HUGO INC ULTRA-ATTRACTIVE KINETIC NEURAL MATRIX ANIMATION
     ========================================================================== */
  .hg-hero-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 48px;
    align-items: stretch;
  }

  .hg-hero-left {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
  }

  .hg-hugo-direct-stage {
    position: relative;
    width: 100%;
    max-width: 640px;
    height: 100%;
    min-height: 700px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    align-items: center;
    background: transparent !important;
    border: none !important;
    box-shadow: none !important;
    margin: 0 auto;
    user-select: none;
    perspective: 1200px;
  }

  /* Full-Size SVG Curve Overlay */
  .hg-hugo-matrix-svg {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 2;
    pointer-events: none;
    overflow: visible;
  }

  .hg-hugo-curve {
    fill: none;
    stroke-linecap: round;
    stroke-linejoin: round;
  }

  .hg-curve-grad-teal {
    stroke: url(#hgTealCyanGrad);
    stroke-width: 8;
    filter: drop-shadow(0 2px 10px rgba(6, 182, 212, 0.45));
    stroke-dasharray: 240 50;
    animation: hgCurveFlowDirect 24s linear infinite;
  }

  .hg-curve-grad-cyan {
    stroke: url(#hgCyanBlueGrad);
    stroke-width: 8;
    filter: drop-shadow(0 2px 10px rgba(14, 165, 233, 0.45));
    stroke-dasharray: 220 40;
    animation: hgCurveFlowDirectRev 20s linear infinite;
  }

  .hg-curve-grad-purple {
    stroke: url(#hgBlueVioletGrad);
    stroke-width: 7.5;
    filter: drop-shadow(0 2px 8px rgba(139, 92, 246, 0.4));
    stroke-dasharray: 180 35;
    animation: hgCurveFlowDirect 18s linear infinite;
  }

  .hg-curve-grad-gold {
    stroke: url(#hgGoldAmberGrad);
    stroke-width: 7;
    filter: drop-shadow(0 2px 10px rgba(245, 158, 11, 0.45));
    stroke-dasharray: 200 40;
    animation: hgCurveFlowDirect 22s linear infinite;
  }

  @keyframes hgCurveFlowDirect {
    0% { stroke-dashoffset: 0; }
    100% { stroke-dashoffset: -800; }
  }

  @keyframes hgCurveFlowDirectRev {
    0% { stroke-dashoffset: 0; }
    100% { stroke-dashoffset: 800; }
  }

  /* Direct Matrix Grid (6x4 Full Height) */
  .hg-direct-matrix-grid {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    width: 100%;
    height: 100%;
    position: relative;
    z-index: 3;
    padding: 12px 0;
  }

  .hg-direct-row {
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 100%;
  }

  /* Luminous Frosted Glassmorphism Circle Nodes (86px) */
  .hg-direct-circle {
    width: 86px;
    height: 86px;
    border-radius: 50%;
    background: radial-gradient(circle at 35% 35%, rgba(255, 255, 255, 0.85) 0%, rgba(236, 254, 255, 0.75) 45%, rgba(6, 182, 212, 0.18) 100%);
    border: 2.5px solid rgba(6, 182, 212, 0.4);
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    backdrop-filter: blur(8px);
    -webkit-backdrop-filter: blur(8px);
    transition: all 0.35s cubic-bezier(0.16, 1, 0.3, 1);
    box-shadow: 0 8px 24px rgba(6, 182, 212, 0.12), inset 0 2px 6px rgba(255, 255, 255, 0.8);
    cursor: pointer;
  }

  .hg-direct-circle:hover {
    transform: scale(1.16) translateY(-4px);
    background: radial-gradient(circle at 35% 35%, rgba(255, 255, 255, 0.95) 0%, rgba(207, 250, 254, 0.9) 50%, rgba(6, 182, 212, 0.35) 100%);
    border-color: #06b6d4;
    box-shadow: 0 14px 34px rgba(6, 182, 212, 0.45), 0 0 24px rgba(6, 182, 212, 0.3), inset 0 2px 8px rgba(255, 255, 255, 0.9);
  }

  .hg-direct-circle::after {
    content: '';
    position: absolute;
    inset: -4px;
    border-radius: 50%;
    border: 1px dashed rgba(6, 182, 212, 0.25);
    opacity: 0;
    transition: opacity 0.3s ease, transform 0.3s ease;
    transform: scale(0.9);
  }

  .hg-direct-circle:hover::after {
    opacity: 1;
    transform: scale(1.08);
    animation: hgSpin 16s linear infinite;
  }

  .hg-dicon {
    font-size: 1.75rem;
    line-height: 1;
    transition: transform 0.3s cubic-bezier(0.16, 1, 0.3, 1);
    filter: drop-shadow(0 2px 4px rgba(0,0,0,0.08));
  }

  .hg-direct-circle:hover .hg-dicon {
    transform: scale(1.22);
  }

  /* Live Animated Typing Dots for Chat Bubble Node */
  .hg-typing-node {
    position: relative;
  }

  .hg-typing-dot-pulse {
    position: absolute;
    top: 14px;
    right: 14px;
    width: 9px;
    height: 9px;
    border-radius: 50%;
    background: #06b6d4;
    box-shadow: 0 0 8px #06b6d4;
    animation: hgBeaconPulse 1.8s infinite;
  }

  /* Rotating TAT Clock Second Hand */
  .hg-clock-spin {
    display: inline-block;
    animation: hgClockWobble 4s ease-in-out infinite;
  }

  @keyframes hgClockWobble {
    0%, 100% { transform: rotate(0deg); }
    50% { transform: rotate(15deg); }
  }

  /* Executive Team Avatar Circles (Large 96px with Neon Halo) */
  .hg-direct-avatar-circle {
    width: 96px;
    height: 96px;
    border-radius: 50%;
    padding: 3.5px;
    background: linear-gradient(135deg, #06b6d4 0%, #3b82f6 50%, #8b5cf6 100%);
    box-shadow: 0 12px 32px rgba(6, 182, 212, 0.35), 0 0 20px rgba(6, 182, 212, 0.25);
    position: relative;
    transition: transform 0.35s cubic-bezier(0.16, 1, 0.3, 1), box-shadow 0.35s ease;
    cursor: pointer;
  }

  .hg-avatar-float-1 {
    animation: hgAvatarFloatDirect 4.2s ease-in-out infinite alternate 0.2s;
  }
  .hg-avatar-float-2 {
    animation: hgAvatarFloatDirect 4.8s ease-in-out infinite alternate 0.8s;
  }
  .hg-avatar-float-3 {
    animation: hgAvatarFloatDirect 4.5s ease-in-out infinite alternate 1.4s;
  }

  @keyframes hgAvatarFloatDirect {
    0% { transform: translateY(0); }
    100% { transform: translateY(-12px); }
  }

  .hg-direct-avatar-circle:hover {
    transform: scale(1.18) translateY(-6px) !important;
    box-shadow: 0 18px 44px rgba(6, 182, 212, 0.55), 0 0 30px rgba(59, 130, 246, 0.45);
  }

  .hg-avatar-inner {
    width: 100%;
    height: 100%;
    border-radius: 50%;
    overflow: hidden;
    position: relative;
    background: #ffffff;
  }

  .hg-avatar-inner img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
  }

  .hg-davatar-status {
    position: absolute;
    bottom: 4px;
    right: 4px;
    width: 18px;
    height: 18px;
    border-radius: 50%;
    background: #10b981;
    border: 3px solid #ffffff;
    box-shadow: 0 0 12px #10b981;
    animation: hgBeaconPulse 2s infinite;
    z-index: 2;
  }

  @keyframes hgBeaconPulse {
    0%, 100% { transform: scale(1); opacity: 1; box-shadow: 0 0 10px #10b981; }
    50% { transform: scale(1.35); opacity: 0.7; box-shadow: 0 0 20px #10b981; }
  }

  /* Avatar Hover Tooltip Chip */
  .hg-avatar-tooltip {
    position: absolute;
    bottom: -32px;
    left: 50%;
    transform: translateX(-50%) translateY(8px);
    background: #080c16;
    color: #ffffff;
    font-size: 0.74rem;
    font-weight: 800;
    font-family: 'Outfit', sans-serif;
    padding: 4px 12px;
    border-radius: 9999px;
    white-space: nowrap;
    opacity: 0;
    pointer-events: none;
    transition: all 0.25s cubic-bezier(0.16, 1, 0.3, 1);
    box-shadow: 0 6px 18px rgba(0,0,0,0.25);
    border: 1px solid rgba(255, 255, 255, 0.15);
    z-index: 10;
  }

  .hg-direct-avatar-circle:hover .hg-avatar-tooltip {
    opacity: 1;
    transform: translateX(-50%) translateY(0);
  }

  /* Central High-Tech Command Nexus Disc (154px) */
  .hg-direct-core-disc {
    position: absolute;
    top: 51%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 154px;
    height: 154px;
    border-radius: 50%;
    background: radial-gradient(circle at 35% 30%, #06b6d4 0%, #0891b2 45%, #0f766e 85%, #0d1322 100%);
    color: #ffffff;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    box-shadow: 0 0 65px rgba(6, 182, 212, 0.8), 0 20px 45px rgba(2, 132, 199, 0.5), inset 0 2px 10px rgba(255, 255, 255, 0.6);
    z-index: 5;
    animation: hgCorePulseDirect 3.5s ease-in-out infinite;
    cursor: pointer;
    transition: transform 0.35s ease;
  }

  .hg-direct-core-disc:hover {
    transform: translate(-50%, -50%) scale(1.12);
    box-shadow: 0 0 90px rgba(6, 182, 212, 1), 0 26px 55px rgba(2, 132, 199, 0.65), inset 0 2px 14px rgba(255, 255, 255, 0.9);
  }

  @keyframes hgCorePulseDirect {
    0%, 100% { transform: translate(-50%, -50%) scale(1); box-shadow: 0 0 50px rgba(6, 182, 212, 0.7); }
    50% { transform: translate(-50%, -50%) scale(1.07); box-shadow: 0 0 85px rgba(6, 182, 212, 0.95); }
  }

  .hg-dcore-ring {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    border-radius: 50%;
    pointer-events: none;
  }

  .hg-dring-1 {
    width: 215px;
    height: 215px;
    border: 2px dashed rgba(6, 182, 212, 0.55);
    animation: hgSpin 22s linear infinite;
  }

  .hg-dring-2 {
    width: 275px;
    height: 275px;
    border: 1.5px solid rgba(245, 158, 11, 0.45);
    animation: hgSpinRev 28s linear infinite;
  }

  .hg-dring-3 {
    width: 320px;
    height: 320px;
    border: 1px dashed rgba(139, 92, 246, 0.35);
    animation: hgSpin 36s linear infinite;
  }

  .hg-dcore-center {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    gap: 2px;
  }

  .hg-dcore-star {
    font-size: 2.2rem;
    line-height: 1;
    color: #ffffff;
    filter: drop-shadow(0 0 10px rgba(255, 255, 255, 0.9));
    animation: hgStarGlow 2.5s ease-in-out infinite alternate;
  }

  @keyframes hgStarGlow {
    0% { transform: scale(1) rotate(0deg); opacity: 0.9; }
    100% { transform: scale(1.18) rotate(15deg); opacity: 1; }
  }

  .hg-dcore-label {
    font-size: 0.72rem;
    font-weight: 900;
    font-family: 'Outfit', sans-serif;
    letter-spacing: 0.14em;
    text-transform: uppercase;
    color: #ecfeff;
    text-shadow: 0 2px 6px rgba(0,0,0,0.3);
  }

  /* Floating Hugo Space Chips */
  .hg-direct-float-chip {
    position: absolute;
    z-index: 6;
    background: rgba(255, 255, 255, 0.92);
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
    border: 1.5px solid rgba(6, 182, 212, 0.4);
    border-radius: 9999px;
    padding: 10px 22px;
    font-size: 0.92rem;
    font-weight: 800;
    font-family: 'Outfit', sans-serif;
    color: #080c16;
    box-shadow: 0 12px 30px rgba(15, 23, 42, 0.12);
    display: inline-flex;
    align-items: center;
    gap: 10px;
    white-space: nowrap;
    animation: hgFloatTagDirect 4.5s ease-in-out infinite alternate;
  }

  .hg-chip-top {
    top: -18px;
    left: 20px;
    animation-delay: 0.3s;
  }

  .hg-chip-top-right {
    top: -18px;
    right: 20px;
    border-color: rgba(245, 158, 11, 0.45);
    animation-delay: 0.9s;
  }

  .hg-chip-bottom {
    bottom: -20px;
    right: 20px;
    animation-delay: 1.2s;
  }

  .hg-chip-bottom-left {
    bottom: -20px;
    left: 20px;
    border-color: rgba(139, 92, 246, 0.4);
    animation-delay: 1.6s;
  }

  .hg-chip-dot {
    width: 9px;
    height: 9px;
    border-radius: 50%;
    background: #10b981;
    box-shadow: 0 0 10px #10b981;
    animation: hgBeaconPulse 2s infinite;
  }

  .hg-chip-dot-gold {
    width: 9px;
    height: 9px;
    border-radius: 50%;
    background: #f59e0b;
    box-shadow: 0 0 10px #f59e0b;
  }

  @keyframes hgFloatTagDirect {
    0% { transform: translateY(0); }
    100% { transform: translateY(-10px); }
  }

  @media (max-width: 1200px) {
    .hg-direct-circle { width: 72px; height: 72px; }
    .hg-direct-avatar-circle { width: 80px; height: 80px; }
    .hg-direct-core-disc { width: 130px; height: 130px; }
    .hg-dring-1 { width: 180px; height: 180px; }
    .hg-dring-2 { width: 230px; height: 230px; }
    .hg-dring-3 { width: 270px; height: 270px; }
    .hg-hugo-direct-stage { min-height: 640px; }
  }

  @media (max-width: 992px) {
    .hg-hero-grid {
      grid-template-columns: 1fr;
      gap: 56px;
    }
    .hg-hugo-direct-stage {
      max-width: 560px;
      min-height: 520px;
      height: 520px;
    }
    .hg-direct-circle { width: 58px; height: 58px; }
    .hg-direct-avatar-circle { width: 64px; height: 64px; }
    .hg-direct-core-disc { width: 110px; height: 110px; }
  }

  @media (max-width: 600px) {
    .hg-direct-circle { width: 44px; height: 44px; border-width: 2px; }
    .hg-direct-avatar-circle { width: 48px; height: 48px; }
    .hg-direct-core-disc { width: 88px; height: 88px; }
    .hg-dicon { font-size: 1.1rem; }
    .hg-hugo-direct-stage { height: 380px; min-height: 380px; }
  }

  
  /* ==========================================================================
     CREATIVE FLOATING 3D GLASS INDUSTRY VISUAL CARDS & AMBIENT ANIMATIONS
     ========================================================================== */
  .hg-floating-visual-card {
    position: absolute;
    z-index: 2;
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 10px 16px 10px 10px;
    background: rgba(255, 255, 255, 0.88);
    backdrop-filter: blur(16px);
    -webkit-backdrop-filter: blur(16px);
    border: 1.5px solid rgba(255, 255, 255, 0.95);
    border-radius: 18px;
    box-shadow: 0 16px 36px rgba(15, 23, 42, 0.08), 0 0 20px rgba(6, 182, 212, 0.12);
    transition: all 0.35s cubic-bezier(0.16, 1, 0.3, 1);
    pointer-events: auto;
    cursor: default;
    will-change: transform;
  }

  .hg-floating-visual-card:hover {
    transform: translateY(-8px) scale(1.06) !important;
    background: rgba(255, 255, 255, 0.98);
    border-color: #06b6d4;
    box-shadow: 0 24px 48px rgba(15, 23, 42, 0.14), 0 0 32px rgba(6, 182, 212, 0.35);
    z-index: 10;
  }

  .hg-fvc-thumb {
    width: 50px;
    height: 50px;
    border-radius: 13px;
    overflow: hidden;
    position: relative;
    flex-shrink: 0;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.12);
    border: 1.5px solid rgba(255, 255, 255, 0.8);
  }

  .hg-fvc-thumb img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
    transition: transform 0.4s ease;
  }

  .hg-floating-visual-card:hover .hg-fvc-thumb img {
    transform: scale(1.15);
  }

  .hg-fvc-body {
    display: flex;
    flex-direction: column;
    gap: 2px;
  }

  .hg-fvc-header {
    display: flex;
    align-items: center;
    gap: 6px;
  }

  .hg-fvc-title {
    font-family: 'Outfit', sans-serif;
    font-weight: 800;
    font-size: 0.86rem;
    color: #080c16;
    line-height: 1.2;
  }

  .hg-fvc-dot {
    width: 7px;
    height: 7px;
    border-radius: 50%;
    background: #10b981;
    box-shadow: 0 0 8px #10b981;
    animation: hgBeaconPulse 2s infinite;
  }

  .hg-fvc-dot-gold {
    width: 7px;
    height: 7px;
    border-radius: 50%;
    background: #f59e0b;
    box-shadow: 0 0 8px #f59e0b;
    animation: hgBeaconPulse 2.2s infinite;
  }

  .hg-fvc-dot-purple {
    width: 7px;
    height: 7px;
    border-radius: 50%;
    background: #8b5cf6;
    box-shadow: 0 0 8px #8b5cf6;
    animation: hgBeaconPulse 2.4s infinite;
  }

  .hg-fvc-subtitle {
    font-size: 0.74rem;
    color: #64748b;
    font-weight: 600;
    line-height: 1.2;
  }

  /* Strategic Floating Positions */
  .hg-fvc-top-left {
    top: -30px;
    left: 20px;
    animation: hgFloatVisualCard1 7s ease-in-out infinite alternate;
  }

  .hg-fvc-mid-left {
    bottom: -25px;
    left: 40px;
    animation: hgFloatVisualCard2 8s ease-in-out infinite alternate 1s;
  }

  .hg-fvc-top-right {
    top: -25px;
    right: 20px;
    animation: hgFloatVisualCard3 7.5s ease-in-out infinite alternate 0.5s;
  }

  .hg-fvc-bottom-right {
    bottom: -30px;
    right: 40px;
    animation: hgFloatVisualCard4 8.5s ease-in-out infinite alternate 1.5s;
  }

  @keyframes hgFloatVisualCard1 {
    0% { transform: translateY(0) rotate(-1.5deg); }
    100% { transform: translateY(-15px) rotate(1deg); }
  }

  @keyframes hgFloatVisualCard2 {
    0% { transform: translateY(0) rotate(1.5deg); }
    100% { transform: translateY(-16px) rotate(-1deg); }
  }

  @keyframes hgFloatVisualCard3 {
    0% { transform: translateY(0) rotate(-2deg); }
    100% { transform: translateY(-14px) rotate(1.5deg); }
  }

  @keyframes hgFloatVisualCard4 {
    0% { transform: translateY(0) rotate(1deg); }
    100% { transform: translateY(-15px) rotate(-2deg); }
  }

  /* Creative Background Flow Wave Lines */
  .hg-bg-wave-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    pointer-events: none;
    z-index: 1;
    overflow: hidden;
    opacity: 0.7;
  }

  .hg-bg-wave-path {
    fill: none;
    stroke-width: 2;
    opacity: 0.35;
    animation: hgBgWaveFlow 20s ease-in-out infinite alternate;
  }

  @keyframes hgBgWaveFlow {
    0% { transform: translateY(0) scaleY(1); }
    100% { transform: translateY(-20px) scaleY(1.05); }
  }

  @media (max-width: 1300px) {
    .hg-floating-visual-card {
      display: none;
    }
  }


  
  /* ==========================================================================
     HUGO-STYLE CREATIVE ANIMATED MOVING HERO BACKGROUND SYSTEM
     ========================================================================== */
  .hg-hero-section {
    position: relative;
    overflow: hidden;
  }

  /* 1. Diagonal Shimmer Ray Sweep */
  .hg-hero-shimmer-ray {
    position: absolute;
    top: -20%;
    left: -50%;
    width: 200%;
    height: 200%;
    background: linear-gradient(
      60deg,
      transparent 42%,
      rgba(6, 182, 212, 0.06) 48%,
      rgba(255, 199, 0, 0.08) 52%,
      transparent 58%
    );
    transform: rotate(-25deg);
    pointer-events: none;
    z-index: 1;
    animation: hgHeroShimmerRaySweep 14s ease-in-out infinite;
  }

  @keyframes hgHeroShimmerRaySweep {
    0% { transform: translateX(-60%) rotate(-25deg); opacity: 0; }
    20% { opacity: 1; }
    80% { opacity: 1; }
    100% { transform: translateX(60%) rotate(-25deg); opacity: 0; }
  }

  /* 2. Floating Kinetic Background Shapes (Hugo Style) */
  .hg-kinetic-bg-shape {
    position: absolute;
    pointer-events: none;
    z-index: 1;
    border-radius: 50%;
    will-change: transform;
  }

  /* Floating Glass Ring 1 (Top-Left) */
  .hg-shape-ring-1 {
    width: 140px;
    height: 140px;
    top: 60px;
    left: -40px;
    border: 3px solid rgba(6, 182, 212, 0.25);
    background: radial-gradient(circle, rgba(6, 182, 212, 0.06) 0%, transparent 70%);
    box-shadow: 0 0 25px rgba(6, 182, 212, 0.15);
    animation: hgKineticRingFloatA 9s ease-in-out infinite alternate;
  }

  .hg-shape-ring-1::after {
    content: '';
    position: absolute;
    inset: 18px;
    border-radius: 50%;
    border: 1.5px dashed rgba(245, 158, 11, 0.35);
    animation: hgSpin 20s linear infinite;
  }

  /* Floating Glass Ring 2 (Bottom-Right) */
  .hg-shape-ring-2 {
    width: 180px;
    height: 180px;
    bottom: 40px;
    right: -50px;
    border: 3px solid rgba(245, 158, 11, 0.22);
    background: radial-gradient(circle, rgba(245, 158, 11, 0.05) 0%, transparent 70%);
    box-shadow: 0 0 30px rgba(245, 158, 11, 0.12);
    animation: hgKineticRingFloatB 11s ease-in-out infinite alternate;
  }

  .hg-shape-ring-2::after {
    content: '';
    position: absolute;
    inset: 22px;
    border-radius: 50%;
    border: 1.5px dashed rgba(139, 92, 246, 0.3);
    animation: hgSpinRev 25s linear infinite;
  }

  /* Floating Specular Glow Spheres */
  .hg-shape-sphere-1 {
    width: 70px;
    height: 70px;
    top: 25%;
    left: 45%;
    background: radial-gradient(circle at 35% 35%, rgba(255, 255, 255, 0.9) 0%, rgba(6, 182, 212, 0.25) 50%, rgba(6, 182, 212, 0) 100%);
    box-shadow: 0 10px 25px rgba(6, 182, 212, 0.2);
    filter: blur(1px);
    animation: hgKineticSphereFloat 8s ease-in-out infinite alternate;
  }

  .hg-shape-sphere-2 {
    width: 55px;
    height: 55px;
    bottom: 20%;
    left: 20%;
    background: radial-gradient(circle at 35% 35%, rgba(255, 255, 255, 0.9) 0%, rgba(245, 158, 11, 0.3) 50%, rgba(245, 158, 11, 0) 100%);
    box-shadow: 0 8px 20px rgba(245, 158, 11, 0.2);
    filter: blur(1px);
    animation: hgKineticSphereFloatRev 10s ease-in-out infinite alternate;
  }

  @keyframes hgKineticRingFloatA {
    0% { transform: translateY(0) rotate(0deg) scale(1); }
    100% { transform: translateY(-24px) rotate(30deg) scale(1.08); }
  }

  @keyframes hgKineticRingFloatB {
    0% { transform: translateY(0) rotate(0deg) scale(1); }
    100% { transform: translateY(-28px) rotate(-35deg) scale(1.1); }
  }

  @keyframes hgKineticSphereFloat {
    0% { transform: translate(0, 0) scale(1); opacity: 0.7; }
    50% { transform: translate(18px, -22px) scale(1.15); opacity: 1; }
    100% { transform: translate(-15px, -35px) scale(0.95); opacity: 0.75; }
  }

  @keyframes hgKineticSphereFloatRev {
    0% { transform: translate(0, 0) scale(1); opacity: 0.65; }
    50% { transform: translate(-20px, 18px) scale(1.18); opacity: 0.95; }
    100% { transform: translate(16px, 30px) scale(0.9); opacity: 0.7; }
  }

  /* 3. Floating Kinetic Hugo Micro-Pills in Background */
  .hg-bg-floating-pill {
    position: absolute;
    z-index: 1;
    pointer-events: none;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 6px 16px;
    background: rgba(255, 255, 255, 0.8);
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
    border: 1.5px solid rgba(255, 255, 255, 0.9);
    border-radius: 9999px;
    box-shadow: 0 10px 25px rgba(15, 23, 42, 0.06);
    font-family: 'Outfit', sans-serif;
    font-size: 0.78rem;
    font-weight: 800;
    color: #080c16;
    opacity: 0.85;
    will-change: transform;
  }

  .hg-bg-pill-1 {
    top: 70px;
    left: 42%;
    border-color: rgba(6, 182, 212, 0.35);
    animation: hgFloatBgPill1 8.5s ease-in-out infinite alternate;
  }

  .hg-bg-pill-2 {
    bottom: 50px;
    left: 28%;
    border-color: rgba(245, 158, 11, 0.35);
    animation: hgFloatBgPill2 9.5s ease-in-out infinite alternate 0.8s;
  }

  .hg-bg-pill-3 {
    top: 48%;
    left: -15px;
    border-color: rgba(139, 92, 246, 0.35);
    animation: hgFloatBgPill3 10s ease-in-out infinite alternate 1.4s;
  }

  @keyframes hgFloatBgPill1 {
    0% { transform: translateY(0) rotate(-1deg); }
    100% { transform: translateY(-18px) rotate(2deg); }
  }

  @keyframes hgFloatBgPill2 {
    0% { transform: translateY(0) rotate(2deg); }
    100% { transform: translateY(-20px) rotate(-1deg); }
  }

  @keyframes hgFloatBgPill3 {
    0% { transform: translateY(0) rotate(-2deg); }
    100% { transform: translateY(-16px) rotate(1deg); }
  }

  /* 4. Pulsing Grid Intersection Crosshairs */
  .hg-grid-crosshair {
    position: absolute;
    width: 14px;
    height: 14px;
    pointer-events: none;
    z-index: 1;
    opacity: 0.65;
  }

  .hg-grid-crosshair::before,
  .hg-grid-crosshair::after {
    content: '';
    position: absolute;
    background: #06b6d4;
    border-radius: 2px;
  }

  .hg-grid-crosshair::before {
    top: 6px;
    left: 0;
    width: 14px;
    height: 2px;
  }

  .hg-grid-crosshair::after {
    top: 0;
    left: 6px;
    width: 2px;
    height: 14px;
  }

  .hg-cross-1 { top: 112px; left: 280px; animation: hgCrosshairPulse 3s ease-in-out infinite; }
  .hg-cross-2 { top: 280px; left: 56px; animation: hgCrosshairPulse 3.5s ease-in-out infinite 0.5s; }
  .hg-cross-3 { top: 448px; left: 392px; animation: hgCrosshairPulse 4s ease-in-out infinite 1s; }
  .hg-cross-4 { top: 616px; left: 168px; animation: hgCrosshairPulse 3.2s ease-in-out infinite 1.5s; }
  .hg-cross-5 { top: 224px; right: 112px; animation: hgCrosshairPulse 3.8s ease-in-out infinite 0.7s; }

  @keyframes hgCrosshairPulse {
    0%, 100% { transform: scale(1); opacity: 0.45; }
    50% { transform: scale(1.4); opacity: 1; filter: drop-shadow(0 0 6px #06b6d4); }
  }

  @media (max-width: 1024px) {
    .hg-bg-floating-pill { display: none; }
    .hg-shape-ring-1, .hg-shape-ring-2 { display: none; }
  }


  /* ==========================================================================
   TRANSITION DIVIDER: HERO -> SECTION 2 DIRECTIONAL WAVE RIBBON ANIMATION
   ========================================================================== */
#hugo-ind-root .hg-hero-sec2-divider-wrap {
  position: relative;
  width: 100%;
  height: 120px;
  overflow: hidden;
  margin-top: -30px;
  margin-bottom: -20px;
  z-index: 8;
  pointer-events: none;
  background: transparent;
}

.hg-wave-ribbon-stage {
  position: relative;
  width: 100%;
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
}

.hg-wave-ribbon-svg {
  width: 100%;
  height: 100%;
  display: block;
  overflow: visible;
  filter: drop-shadow(0 8px 24px rgba(245, 158, 11, 0.18));
}

/* Initial Un-revealed States for Scroll-Driven Entrance */
.hg-ribbon-path {
  opacity: 0;
  clip-path: polygon(0 0, 0 0, 0 100%, 0 100%);
  will-change: clip-path, opacity;
}

.hg-directional-stroke-line {
  opacity: 0;
  stroke-dasharray: 1600;
  stroke-dashoffset: 1600;
  will-change: stroke-dashoffset, opacity;
}

/* When Scrolled Into View (.is-inview): Trigger Directional Reveal from LEFT -> RIGHT */
#hg-hero-sec2-divider.is-inview .hg-ribbon-layer-1 {
  animation: hgRibbonSweepLtoR 1100ms cubic-bezier(0.16, 1, 0.3, 1) 0.05s forwards;
}

#hg-hero-sec2-divider.is-inview .hg-ribbon-layer-2 {
  animation: hgRibbonSweepLtoR 1200ms cubic-bezier(0.16, 1, 0.3, 1) 0.16s forwards;
}

#hg-hero-sec2-divider.is-inview .hg-ribbon-layer-3 {
  animation: hgRibbonSweepLtoR 1300ms cubic-bezier(0.16, 1, 0.3, 1) 0.28s forwards;
}

#hg-hero-sec2-divider.is-inview .hg-stroke-line-top {
  animation: hgStrokeLineDrawLtoR 1150ms cubic-bezier(0.16, 1, 0.3, 1) 0.10s forwards;
}

#hg-hero-sec2-divider.is-inview .hg-stroke-line-mid {
  animation: hgStrokeLineDrawLtoR 1200ms cubic-bezier(0.16, 1, 0.3, 1) 0.22s forwards;
}

#hg-hero-sec2-divider.is-inview .hg-stroke-line-bold {
  animation: hgStrokeLineDrawLtoR 1350ms cubic-bezier(0.16, 1, 0.3, 1) 0.32s forwards;
}

#hg-hero-sec2-divider.is-inview .hg-wave-ribbon-stage {
  animation: hgWaveGentleSway 8s ease-in-out 1.6s infinite alternate;
}

@keyframes hgRibbonSweepLtoR {
  0% {
    clip-path: polygon(0 0, 0 0, 0 100%, 0 100%);
    opacity: 0;
  }
  15% {
    opacity: 1;
  }
  100% {
    clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
    opacity: 1;
  }
}

@keyframes hgStrokeLineDrawLtoR {
  0% {
    stroke-dashoffset: 1600;
    opacity: 0;
  }
  15% {
    opacity: 1;
  }
  100% {
    stroke-dashoffset: 0;
    opacity: 1;
  }
}

@keyframes hgWaveGentleSway {
  0% {
    transform: translateY(0) scaleY(1);
  }
  50% {
    transform: translateY(-3px) scaleY(1.02);
  }
  100% {
    transform: translateY(2px) scaleY(0.98);
  }
}

/* ==========================================================================
   RESPONSIVE BREAKPOINTS (Desktop, Laptop, Tablet, Mobile)
   ========================================================================== */
@media (max-width: 1200px) {
  #hugo-ind-root .hg-hero-sec2-divider-wrap {
    height: 100px;
    margin-top: -24px;
    margin-bottom: -16px;
  }
}

@media (max-width: 992px) {
  #hugo-ind-root .hg-hero-sec2-divider-wrap {
    height: 80px;
    margin-top: -18px;
    margin-bottom: -12px;
  }
}

@media (max-width: 768px) {
  #hugo-ind-root .hg-hero-sec2-divider-wrap {
    height: 60px;
    margin-top: -14px;
    margin-bottom: -8px;
  }
}

@media (max-width: 480px) {
  #hugo-ind-root .hg-hero-sec2-divider-wrap {
    height: 48px;
    margin-top: -10px;
    margin-bottom: -6px;
  }
}

/* Accessibility */
@media (prefers-reduced-motion: reduce) {
  .hg-ribbon-path {
    opacity: 1 !important;
    clip-path: none !important;
    animation: none !important;
  }
  .hg-directional-stroke-line {
    opacity: 1 !important;
    stroke-dashoffset: 0 !important;
    animation: none !important;
  }
  .hg-wave-ribbon-stage {
    animation: none !important;
  }
}


          /* ==========================================================================
     SECTION 2: SOLUTIONS BUILT AROUND YOUR INDUSTRY (EXECUTIVE CAPABILITY MATRIX)
     ========================================================================== */
  #hugo-ind-root .hg-sector-3d-section {
    position: relative;
    padding: 100px 0 115px;
    background: radial-gradient(circle at 50% 10%, #0d1b38 0%, #050a18 60%, #02040a 100%) !important;
    overflow: hidden;
    color: #f8fafc !important;
  }

  /* Ambient Mesh & Luminous Accents */
  #hugo-ind-root .hg-s2-aurora-mesh {
    position: absolute;
    inset: 0;
    pointer-events: none;
    z-index: 1;
    overflow: hidden;
  }
  #hugo-ind-root .hg-s2-aurora-orb {
    position: absolute;
    border-radius: 50%;
    filter: blur(110px);
    opacity: 0.28;
    animation: hgOrbFloat 16s ease-in-out infinite alternate;
  }
  #hugo-ind-root .hg-s2-orb-gold {
    width: 550px;
    height: 550px;
    background: radial-gradient(circle, #f59e0b 0%, rgba(245,158,11,0) 70%);
    top: -120px;
    right: 5%;
  }
  #hugo-ind-root .hg-s2-orb-cyan {
    width: 650px;
    height: 650px;
    background: radial-gradient(circle, #00f2fe 0%, rgba(0,242,254,0) 70%);
    top: 35%;
    left: -150px;
    animation-delay: -5s;
  }
  #hugo-ind-root .hg-s2-orb-violet {
    width: 550px;
    height: 550px;
    background: radial-gradient(circle, #a855f7 0%, rgba(168,85,247,0) 70%);
    bottom: -100px;
    right: 15%;
    animation-delay: -10s;
  }
  @keyframes hgOrbFloat {
    0% { transform: translate(0, 0) scale(1); }
    50% { transform: translate(40px, -30px) scale(1.1); }
    100% { transform: translate(-30px, 40px) scale(0.95); }
  }

  #hugo-ind-root .hg-s2-grid-matrix {
    position: absolute;
    inset: 0;
    background-image: 
      linear-gradient(to right, rgba(255, 255, 255, 0.035) 1px, transparent 1px),
      linear-gradient(to bottom, rgba(255, 255, 255, 0.035) 1px, transparent 1px);
    background-size: 44px 44px;
    mask-image: radial-gradient(circle at 50% 40%, black 45%, transparent 85%);
    -webkit-mask-image: radial-gradient(circle at 50% 40%, black 45%, transparent 85%);
    pointer-events: none;
    z-index: 2;
  }

  /* Section Header */
  #hugo-ind-root .hg-sector-header-wrap {
    text-align: center;
    max-width: 860px;
    margin: 0 auto 36px;
    position: relative;
    z-index: 5;
  }
  #hugo-ind-root .hg-sector-header-wrap .hg-tag-pill {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 6px 16px;
    background: rgba(255, 255, 255, 0.07);
    border: 1px solid rgba(255, 255, 255, 0.16);
    border-radius: 999px;
    font-size: 0.82rem;
    font-weight: 700;
    letter-spacing: 0.12em;
    text-transform: uppercase;
    color: #38bdf8 !important;
    margin-bottom: 18px;
    backdrop-filter: blur(12px);
    -webkit-backdrop-filter: blur(12px);
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.25);
  }
  #hugo-ind-root .hg-sector-header-wrap .hg-tag-dot {
    width: 8px;
    height: 8px;
    background: #38bdf8;
    border-radius: 50%;
    box-shadow: 0 0 10px #38bdf8, 0 0 20px #38bdf8;
    animation: hgPulseDot 2s infinite ease-in-out;
  }
  @keyframes hgPulseDot {
    0%, 100% { transform: scale(1); opacity: 1; }
    50% { transform: scale(1.4); opacity: 0.6; }
  }
  #hugo-ind-root .hg-sector-header-wrap .hg-h2 {
    font-size: 2.75rem;
    font-weight: 800;
    line-height: 1.2;
    letter-spacing: -0.025em;
    color: #ffffff !important;
    -webkit-text-fill-color: #ffffff !important;
    margin: 0 0 14px;
  }
  #hugo-ind-root .hg-sector-header-wrap .hg-lead {
    font-size: 1.15rem;
    line-height: 1.65;
    color: #94a3b8 !important;
    -webkit-text-fill-color: #94a3b8 !important;
    margin: 0;
  }

  /* 8 Sector Quick Nav Switcher Bar */
  #hugo-ind-root .hg-sector-nav-outer {
    position: relative;
    max-width: 1260px;
    margin: 0 auto 36px;
    z-index: 10;
  }
  #hugo-ind-root .hg-sector-nav-bar {
    display: flex;
    gap: 10px;
    overflow-x: auto;
    padding: 10px 14px;
    background: rgba(15, 23, 42, 0.85);
    border: 1px solid rgba(255, 255, 255, 0.12);
    border-radius: 999px;
    backdrop-filter: blur(20px);
    -webkit-backdrop-filter: blur(20px);
    box-shadow: 0 16px 40px rgba(0, 0, 0, 0.45);
    scrollbar-width: none;
    -ms-overflow-style: none;
    scroll-behavior: smooth;
  }
  #hugo-ind-root .hg-sector-nav-bar::-webkit-scrollbar {
    display: none;
  }
  #hugo-ind-root .hg-sector-tab-btn {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 11px 20px;
    background: rgba(255, 255, 255, 0.05);
    border: 1px solid rgba(255, 255, 255, 0.08);
    border-radius: 999px;
    font-size: 0.90rem;
    font-weight: 600;
    color: #cbd5e1 !important;
    -webkit-text-fill-color: #cbd5e1 !important;
    cursor: pointer;
    white-space: nowrap;
    transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
    flex-shrink: 0;
    user-select: none;
  }
  #hugo-ind-root .hg-sector-tab-btn:hover {
    color: #ffffff !important;
    -webkit-text-fill-color: #ffffff !important;
    background: rgba(255, 255, 255, 0.12);
    border-color: rgba(255, 255, 255, 0.22);
    transform: translateY(-2px);
  }
  #hugo-ind-root .hg-sector-tab-btn.is-active {
    background: linear-gradient(135deg, #0284c7 0%, #0369a1 100%) !important;
    color: #ffffff !important;
    -webkit-text-fill-color: #ffffff !important;
    border-color: #38bdf8 !important;
    box-shadow: 0 0 24px rgba(56, 189, 248, 0.5), 0 4px 12px rgba(0,0,0,0.3);
    transform: translateY(-2px);
  }
  #hugo-ind-root .hg-tab-num {
    font-size: 0.74rem;
    font-weight: 700;
    opacity: 0.85;
    background: rgba(0, 0, 0, 0.35);
    color: #38bdf8 !important;
    -webkit-text-fill-color: #38bdf8 !important;
    padding: 2px 7px;
    border-radius: 999px;
  }
  #hugo-ind-root .hg-sector-tab-btn.is-active .hg-tab-num {
    background: rgba(255, 255, 255, 0.25);
    color: #ffffff !important;
    -webkit-text-fill-color: #ffffff !important;
  }

  /* Sector Showcase Panels Container */
  #hugo-ind-root .hg-sector-panels-stage {
    position: relative;
    max-width: 1260px;
    margin: 0 auto;
    min-height: 540px;
    z-index: 5;
  }

  /* Single Active Sector Bento Board */
  #hugo-ind-root .hg-sector-panel {
    display: none;
    opacity: 0;
    transform: translateY(22px) scale(0.99);
    transition: opacity 0.45s cubic-bezier(0.16, 1, 0.3, 1), transform 0.45s cubic-bezier(0.16, 1, 0.3, 1);
  }
  #hugo-ind-root .hg-sector-panel.is-active {
    display: flex;
    flex-direction: column;
    gap: 26px;
    opacity: 1;
    transform: translateY(0) scale(1);
  }

  /* Top Banner Card for Active Sector */
  #hugo-ind-root .hg-bento-top-banner {
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 16px;
    background: rgba(15, 23, 42, 0.75);
    border: 1px solid rgba(255, 255, 255, 0.12);
    border-radius: 20px;
    padding: 24px 32px;
    backdrop-filter: blur(16px);
    -webkit-backdrop-filter: blur(16px);
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
  }
  #hugo-ind-root .hg-bento-title-box h3,
  #hugo-ind-root .hg-bento-title-box h3 *,
  #hugo-ind-root .hg-sector-panel h3 {
    font-size: clamp(1.4rem, 2.2vw, 1.95rem) !important;
    font-weight: 800 !important;
    line-height: 1.25 !important;
    margin: 0 !important;
    color: #ffffff !important;
    -webkit-text-fill-color: #ffffff !important;
    letter-spacing: -0.02em !important;
  }
  #hugo-ind-root .hg-bento-status-badge {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 8px 18px;
    background: rgba(56, 189, 248, 0.12);
    border: 1px solid rgba(56, 189, 248, 0.3);
    border-radius: 999px;
    font-size: 0.82rem;
    font-weight: 700;
    letter-spacing: 0.08em;
    text-transform: uppercase;
    color: #38bdf8 !important;
    -webkit-text-fill-color: #38bdf8 !important;
  }

  /* 2-Column Split: Challenges (Left) vs How We Help (Right) */
  #hugo-ind-root .hg-bento-dual-split {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 26px;
    align-items: stretch;
  }

  /* LEFT COLUMN: Common Challenges Card */
  #hugo-ind-root .hg-challenges-col-card {
    display: flex;
    flex-direction: column;
    gap: 18px;
    background: rgba(15, 23, 42, 0.75);
    border: 1px solid rgba(255, 255, 255, 0.12);
    border-radius: 22px;
    padding: 28px 30px;
    backdrop-filter: blur(16px);
    -webkit-backdrop-filter: blur(16px);
    box-shadow: 0 12px 36px rgba(0, 0, 0, 0.3);
  }
  #hugo-ind-root .hg-card-header-bar {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 4px;
    gap: 12px;
  }
  #hugo-ind-root .hg-card-header-title,
  #hugo-ind-root .hg-card-header-title span,
  #hugo-ind-root .hg-challenges-col-card h4,
  #hugo-ind-root .hg-solution-col-card h4 {
    font-size: 1.35rem !important;
    font-weight: 800 !important;
    color: #ffffff !important;
    -webkit-text-fill-color: #ffffff !important;
    margin: 0 !important;
    display: flex;
    align-items: center;
    gap: 10px;
  }
  #hugo-ind-root .hg-badge-warning {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    font-size: 0.76rem;
    font-weight: 700;
    letter-spacing: 0.08em;
    text-transform: uppercase;
    color: #f59e0b !important;
    -webkit-text-fill-color: #f59e0b !important;
    background: rgba(245, 158, 11, 0.14);
    padding: 4px 12px;
    border-radius: 999px;
    border: 1px solid rgba(245, 158, 11, 0.3);
    white-space: nowrap;
  }
  #hugo-ind-root .hg-challenges-list {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 10px;
    margin: 10px 0;
  }
  #hugo-ind-root .hg-challenge-box {
    display: flex;
    align-items: flex-start;
    gap: 10px;
    background: rgba(255, 255, 255, 0.035);
    border: 1px solid rgba(255, 255, 255, 0.08);
    border-radius: 12px;
    padding: 12px 14px;
    transition: all 0.25s ease;
  }
  #hugo-ind-root .hg-challenge-box:hover {
    background: rgba(255, 255, 255, 0.08);
    border-color: rgba(56, 189, 248, 0.35);
    transform: translateY(-2px);
  }
  #hugo-ind-root .hg-ch-num {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 22px;
    height: 22px;
    background: rgba(56, 189, 248, 0.15);
    border: 1px solid rgba(56, 189, 248, 0.3);
    border-radius: 6px;
    font-size: 0.72rem;
    font-weight: 800;
    color: #38bdf8 !important;
    -webkit-text-fill-color: #38bdf8 !important;
    flex-shrink: 0;
    margin-top: 1px;
  }
  #hugo-ind-root .hg-ch-text {
    font-size: 0.90rem !important;
    font-weight: 600 !important;
    line-height: 1.42 !important;
    color: #ffffff !important;
    -webkit-text-fill-color: #ffffff !important;
    margin: 0 !important;
  }
  #hugo-ind-root .hg-challenges-sub-note {
    font-size: 0.92rem !important;
    line-height: 1.62 !important;
    color: #e2e8f0 !important;
    -webkit-text-fill-color: #e2e8f0 !important;
    padding-top: 12px;
    border-top: 1px solid rgba(255, 255, 255, 0.08);
    margin: 0 !important;
  }

  /* RIGHT COLUMN: How Overseas Moguls Helps Card */
  #hugo-ind-root .hg-solution-col-card {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    gap: 20px;
    background: linear-gradient(135deg, rgba(14, 38, 76, 0.85) 0%, rgba(10, 24, 52, 0.95) 100%);
    border: 1px solid rgba(56, 189, 248, 0.4);
    border-radius: 22px;
    padding: 28px 30px;
    backdrop-filter: blur(16px);
    -webkit-backdrop-filter: blur(16px);
    box-shadow: 0 12px 36px rgba(2, 132, 199, 0.25);
    position: relative;
    overflow: hidden;
  }
  #hugo-ind-root .hg-solution-col-card::before {
    content: '';
    position: absolute;
    left: 0;
    top: 0;
    bottom: 0;
    width: 5px;
    background: linear-gradient(180deg, #38bdf8 0%, #0284c7 100%);
  }
  #hugo-ind-root .hg-badge-solution {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    font-size: 0.76rem;
    font-weight: 700;
    letter-spacing: 0.08em;
    text-transform: uppercase;
    color: #38bdf8 !important;
    -webkit-text-fill-color: #38bdf8 !important;
    background: rgba(56, 189, 248, 0.16);
    padding: 4px 12px;
    border-radius: 999px;
    border: 1px solid rgba(56, 189, 248, 0.35);
    white-space: nowrap;
  }
  #hugo-ind-root .hg-helps-body {
    display: flex;
    flex-direction: column;
    gap: 14px;
  }
  #hugo-ind-root .hg-helps-text {
    font-size: 1rem !important;
    line-height: 1.7 !important;
    color: #ffffff !important;
    -webkit-text-fill-color: #ffffff !important;
    margin: 0 !important;
  }
  #hugo-ind-root .hg-relevant-solutions-box {
    padding-top: 14px;
    border-top: 1px solid rgba(255, 255, 255, 0.1);
  }
  #hugo-ind-root .hg-rel-title {
    font-size: 0.78rem;
    font-weight: 700;
    letter-spacing: 0.1em;
    text-transform: uppercase;
    color: #94a3b8 !important;
    -webkit-text-fill-color: #94a3b8 !important;
    margin-bottom: 8px;
    display: block;
  }
  #hugo-ind-root .hg-rel-pills-row {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
  }
  #hugo-ind-root .hg-rel-pill {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    padding: 6px 14px;
    background: rgba(255, 255, 255, 0.08);
    border: 1px solid rgba(255, 255, 255, 0.16);
    border-radius: 999px;
    font-size: 0.84rem;
    font-weight: 600;
    color: #ffffff !important;
    -webkit-text-fill-color: #ffffff !important;
  }

  /* In-Page Modal Trigger Button */
  #hugo-ind-root .hg-open-modal-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    padding: 16px 28px;
    background: linear-gradient(135deg, #0284c7 0%, #0369a1 100%);
    border: 1px solid #38bdf8;
    border-radius: 14px;
    font-size: 1.02rem;
    font-weight: 700;
    color: #ffffff !important;
    -webkit-text-fill-color: #ffffff !important;
    cursor: pointer;
    box-shadow: 0 6px 20px rgba(2, 132, 199, 0.4), 0 0 15px rgba(56, 189, 248, 0.25);
    transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
    align-self: flex-start;
    margin-top: 8px;
  }
  #hugo-ind-root .hg-open-modal-btn:hover {
    background: linear-gradient(135deg, #0369a1 0%, #075985 100%);
    box-shadow: 0 8px 30px rgba(2, 132, 199, 0.65), 0 0 25px rgba(56, 189, 248, 0.5);
    transform: translateY(-3px) scale(1.02);
    color: #ffffff !important;
    -webkit-text-fill-color: #ffffff !important;
  }
  #hugo-ind-root .hg-open-modal-btn svg {
    transition: transform 0.3s ease;
  }
  #hugo-ind-root .hg-open-modal-btn:hover svg {
    transform: translateX(4px);
  }

  /* ==========================================================================
     IN-PAGE SECTOR INQUIRY MODAL (DOES NOT NAVIGATE OR JUMP TO ANOTHER SECTION)
     ========================================================================== */
  #hugo-ind-root .hg-sector-modal-overlay {
    position: fixed;
    inset: 0;
    background: rgba(3, 7, 18, 0.85);
    backdrop-filter: blur(14px);
    -webkit-backdrop-filter: blur(14px);
    z-index: 99999;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 20px;
    opacity: 0;
    pointer-events: none;
    transition: opacity 0.35s ease;
  }
  #hugo-ind-root .hg-sector-modal-overlay.is-open {
    opacity: 1;
    pointer-events: auto;
  }
  #hugo-ind-root .hg-sector-modal-card {
    position: relative;
    width: 100%;
    max-width: 620px;
    background: linear-gradient(135deg, #0b1730 0%, #070e1f 100%);
    border: 1px solid rgba(56, 189, 248, 0.4);
    border-radius: 24px;
    padding: 36px 40px;
    box-shadow: 0 25px 60px rgba(0, 0, 0, 0.65), 0 0 40px rgba(2, 132, 199, 0.3);
    transform: translateY(30px) scale(0.95);
    transition: transform 0.35s cubic-bezier(0.16, 1, 0.3, 1);
    color: #ffffff !important;
  }
  #hugo-ind-root .hg-sector-modal-overlay.is-open .hg-sector-modal-card {
    transform: translateY(0) scale(1);
  }
  #hugo-ind-root .hg-modal-close-btn {
    position: absolute;
    top: 20px;
    right: 20px;
    width: 36px;
    height: 36px;
    background: rgba(255, 255, 255, 0.08);
    border: 1px solid rgba(255, 255, 255, 0.15);
    border-radius: 50%;
    color: #94a3b8;
    font-size: 1.2rem;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: all 0.2s ease;
  }
  #hugo-ind-root .hg-modal-close-btn:hover {
    background: rgba(255, 255, 255, 0.2);
    color: #ffffff;
    transform: scale(1.1);
  }
  #hugo-ind-root .hg-modal-tag {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    font-size: 0.78rem;
    font-weight: 700;
    letter-spacing: 0.1em;
    text-transform: uppercase;
    color: #38bdf8 !important;
    background: rgba(56, 189, 248, 0.14);
    padding: 4px 12px;
    border-radius: 999px;
    border: 1px solid rgba(56, 189, 248, 0.3);
    margin-bottom: 12px;
  }
  #hugo-ind-root .hg-modal-h3 {
    font-size: 1.65rem !important;
    font-weight: 800 !important;
    color: #ffffff !important;
    -webkit-text-fill-color: #ffffff !important;
    margin: 0 0 8px !important;
  }
  #hugo-ind-root .hg-modal-desc {
    font-size: 0.94rem !important;
    color: #cbd5e1 !important;
    margin: 0 0 24px !important;
    line-height: 1.55 !important;
  }
  #hugo-ind-root .hg-modal-form-group {
    display: flex;
    flex-direction: column;
    gap: 12px;
    margin-bottom: 20px;
  }
  #hugo-ind-root .hg-modal-input {
    width: 100%;
    padding: 13px 18px;
    background: rgba(255, 255, 255, 0.06);
    border: 1px solid rgba(255, 255, 255, 0.14);
    border-radius: 12px;
    color: #ffffff !important;
    font-size: 0.92rem;
    outline: none;
    transition: border-color 0.2s ease;
  }
  #hugo-ind-root .hg-modal-input:focus {
    border-color: #38bdf8;
    background: rgba(255, 255, 255, 0.09);
  }
  #hugo-ind-root .hg-modal-submit-btn {
    width: 100%;
    padding: 15px 24px;
    background: linear-gradient(135deg, #0284c7 0%, #0369a1 100%);
    border: 1px solid #38bdf8;
    border-radius: 12px;
    color: #ffffff !important;
    -webkit-text-fill-color: #ffffff !important;
    font-size: 1rem;
    font-weight: 700;
    cursor: pointer;
    box-shadow: 0 6px 20px rgba(2, 132, 199, 0.4);
    transition: all 0.3s ease;
  }
  #hugo-ind-root .hg-modal-submit-btn:hover {
    background: linear-gradient(135deg, #0369a1 0%, #075985 100%);
    transform: translateY(-2px);
  }
  #hugo-ind-root .hg-modal-success-msg {
    display: none;
    padding: 20px;
    background: rgba(16, 185, 129, 0.15);
    border: 1px solid #10b981;
    border-radius: 12px;
    color: #6ee7b7 !important;
    text-align: center;
    font-weight: 600;
  }

  /* ==========================================================================
     RESPONSIVE MEDIA QUERIES (MOBILES, TABLETS, LAPTOPS)
     ========================================================================== */
  
  /* Laptops & Small Desktops (1024px - 1280px) */
  @media (max-width: 1280px) {
    #hugo-ind-root .hg-sector-nav-outer,
    #hugo-ind-root .hg-sector-panels-stage {
      max-width: 100%;
    }
    #hugo-ind-root .hg-bento-dual-split {
      gap: 20px;
    }
    #hugo-ind-root .hg-challenges-col-card,
    #hugo-ind-root .hg-solution-col-card {
      padding: 24px 22px;
    }
  }

  /* Tablets (768px - 1023px) */
  @media (max-width: 1023px) {
    #hugo-ind-root .hg-sector-3d-section {
      padding: 80px 0 90px;
    }
    #hugo-ind-root .hg-bento-dual-split {
      grid-template-columns: 1fr;
      gap: 22px;
    }
    #hugo-ind-root .hg-challenges-list {
      grid-template-columns: 1fr 1fr;
      gap: 10px;
    }
    #hugo-ind-root .hg-bento-top-banner {
      padding: 20px 24px;
      gap: 12px;
    }
    #hugo-ind-root .hg-open-modal-btn {
      align-self: flex-start;
    }
  }

  /* Mobiles & Small Screens (< 768px) */
  @media (max-width: 767px) {
    #hugo-ind-root .hg-sector-3d-section {
      padding: 56px 0 68px;
    }
    #hugo-ind-root .hg-sector-header-wrap {
      margin-bottom: 24px;
      padding: 0 8px;
    }
    #hugo-ind-root .hg-sector-header-wrap .hg-h2 {
      font-size: clamp(1.75rem, 6.5vw, 2.15rem) !important;
    }
    #hugo-ind-root .hg-sector-header-wrap .hg-lead {
      font-size: 0.98rem !important;
    }
    #hugo-ind-root .hg-sector-nav-outer {
      margin-bottom: 24px;
    }
    #hugo-ind-root .hg-sector-nav-bar {
      padding: 8px 10px;
      gap: 8px;
    }
    #hugo-ind-root .hg-sector-tab-btn {
      padding: 9px 14px;
      font-size: 0.82rem;
    }
    #hugo-ind-root .hg-bento-top-banner {
      padding: 16px 18px;
      border-radius: 16px;
      flex-direction: column;
      align-items: flex-start;
      gap: 10px;
    }
    #hugo-ind-root .hg-challenges-col-card,
    #hugo-ind-root .hg-solution-col-card {
      padding: 20px 16px;
      border-radius: 18px;
    }
    #hugo-ind-root .hg-card-header-bar {
      flex-direction: column;
      align-items: flex-start;
      gap: 8px;
    }
    #hugo-ind-root .hg-challenges-list {
      grid-template-columns: 1fr;
      gap: 8px;
    }
    #hugo-ind-root .hg-challenge-box {
      padding: 10px 12px;
      border-radius: 10px;
    }
    #hugo-ind-root .hg-open-modal-btn {
      width: 100%;
      text-align: center;
      justify-content: center;
      padding: 14px 20px;
      font-size: 0.95rem;
    }
    #hugo-ind-root .hg-sector-modal-card {
      padding: 26px 18px;
      border-radius: 20px;
      width: calc(100% - 20px);
      max-height: 92vh;
      overflow-y: auto;
    }
  }

  /* Extra Small Devices (< 480px) */
  @media (max-width: 479px) {
    #hugo-ind-root .hg-bento-title-box h3 {
      font-size: 1.25rem !important;
    }
    #hugo-ind-root .hg-card-header-title {
      font-size: 1.15rem !important;
    }
    #hugo-ind-root .hg-ch-text {
      font-size: 0.85rem !important;
    }
    #hugo-ind-root .hg-rel-pill {
      font-size: 0.78rem;
      padding: 5px 10px;
    }
  }


/* ==========================================================================
   TRANSITION DIVIDER: SECTION 2 -> SECTION 3 DIRECTIONAL WAVE RIBBON ANIMATION
   ========================================================================== */
#hugo-ind-root .hg-sec2-sec3-divider-wrap {
  position: relative;
  width: 100%;
  height: 120px;
  overflow: hidden;
  margin-top: -30px;
  margin-bottom: -20px;
  z-index: 8;
  pointer-events: none;
  background: transparent;
}

#hg-sec2-sec3-divider.is-inview .hg-ribbon-layer-1 {
  animation: hgRibbonSweepLtoR 1100ms cubic-bezier(0.16, 1, 0.3, 1) 0.05s forwards;
}

#hg-sec2-sec3-divider.is-inview .hg-ribbon-layer-2 {
  animation: hgRibbonSweepLtoR 1200ms cubic-bezier(0.16, 1, 0.3, 1) 0.16s forwards;
}

#hg-sec2-sec3-divider.is-inview .hg-ribbon-layer-3 {
  animation: hgRibbonSweepLtoR 1300ms cubic-bezier(0.16, 1, 0.3, 1) 0.28s forwards;
}

#hg-sec2-sec3-divider.is-inview .hg-stroke-line-top {
  animation: hgStrokeLineDrawLtoR 1150ms cubic-bezier(0.16, 1, 0.3, 1) 0.10s forwards;
}

#hg-sec2-sec3-divider.is-inview .hg-stroke-line-mid {
  animation: hgStrokeLineDrawLtoR 1200ms cubic-bezier(0.16, 1, 0.3, 1) 0.22s forwards;
}

#hg-sec2-sec3-divider.is-inview .hg-stroke-line-bold {
  animation: hgStrokeLineDrawLtoR 1350ms cubic-bezier(0.16, 1, 0.3, 1) 0.32s forwards;
}

#hg-sec2-sec3-divider.is-inview .hg-wave-ribbon-stage {
  animation: hgWaveGentleSway 8s ease-in-out 1.6s infinite alternate;
}

@media (max-width: 1200px) {
  #hugo-ind-root .hg-sec2-sec3-divider-wrap {
    height: 100px;
    margin-top: -24px;
    margin-bottom: -16px;
  }
}

@media (max-width: 992px) {
  #hugo-ind-root .hg-sec2-sec3-divider-wrap {
    height: 80px;
    margin-top: -18px;
    margin-bottom: -12px;
  }
}

@media (max-width: 768px) {
  #hugo-ind-root .hg-sec2-sec3-divider-wrap {
    height: 60px;
    margin-top: -14px;
    margin-bottom: -8px;
  }
}

@media (max-width: 480px) {
  #hugo-ind-root .hg-sec2-sec3-divider-wrap {
    height: 48px;
    margin-top: -10px;
    margin-bottom: -6px;
  }
}


  /* ==========================================================================
   TRANSITION DIVIDER: SECTION 3 -> SECTION 4 DIRECTIONAL 3D LAYERED WAVE RIBBON
   ========================================================================== */
#hugo-ind-root .hg-sec3-sec4-divider-wrap {
  position: relative;
  width: 100%;
  height: 90px;
  overflow: hidden;
  margin-top: -24px;
  margin-bottom: -16px;
  z-index: 8;
  pointer-events: none;
  background: transparent;
}

#hg-sec3-sec4-divider .hg-3d-ribbon-stage {
  position: relative;
  width: 100%;
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
}

#hg-sec3-sec4-divider .hg-3d-ribbon-svg {
  width: 100%;
  height: 100%;
  display: block;
  filter: drop-shadow(0 4px 14px rgba(245, 158, 11, 0.18));
}

/* Layer Sweep Animation (LEFT to RIGHT) */
#hg-sec3-sec4-divider .hg-3d-ribbon-layer {
  clip-path: polygon(0 0, 0 0, 0 100%, 0 100%);
  opacity: 0;
  transition: none;
}

#hg-sec3-sec4-divider.is-inview .hg-ribbon-top-tier {
  animation: hg3DRibbonSweep 1000ms cubic-bezier(0.16, 1, 0.3, 1) 0.05s forwards;
}

#hg-sec3-sec4-divider.is-inview .hg-ribbon-mid-tier {
  animation: hg3DRibbonSweep 1100ms cubic-bezier(0.16, 1, 0.3, 1) 0.16s forwards;
}

#hg-sec3-sec4-divider.is-inview .hg-ribbon-bottom-tier {
  animation: hg3DRibbonSweep 1200ms cubic-bezier(0.16, 1, 0.3, 1) 0.28s forwards;
}

@keyframes hg3DRibbonSweep {
  0% {
    clip-path: polygon(0 0, 0 0, 0 100%, 0 100%);
    opacity: 0;
  }
  15% {
    opacity: 1;
  }
  100% {
    clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
    opacity: 1;
  }
}

/* Stroke Line Draw Animation (LEFT to RIGHT) */
#hg-sec3-sec4-divider .hg-3d-stroke-line {
  stroke-dasharray: 1600;
  stroke-dashoffset: 1600;
  opacity: 0;
  transition: none;
}

#hg-sec3-sec4-divider.is-inview .hg-3d-stroke-top {
  animation: hg3DStrokeDraw 1050ms cubic-bezier(0.16, 1, 0.3, 1) 0.08s forwards;
}

#hg-sec3-sec4-divider.is-inview .hg-3d-stroke-mid {
  animation: hg3DStrokeDraw 1150ms cubic-bezier(0.16, 1, 0.3, 1) 0.20s forwards;
}

#hg-sec3-sec4-divider.is-inview .hg-3d-stroke-bottom {
  animation: hg3DStrokeDraw 1250ms cubic-bezier(0.16, 1, 0.3, 1) 0.32s forwards;
}

@keyframes hg3DStrokeDraw {
  0% {
    stroke-dashoffset: 1600;
    opacity: 0;
  }
  10% {
    opacity: 1;
  }
  100% {
    stroke-dashoffset: 0;
    opacity: 1;
  }
}

/* Subtle Continuous Kinetic Breathing */
#hg-sec3-sec4-divider.is-inview .hg-3d-ribbon-stage {
  animation: hg3DRibbonFloat 6.5s ease-in-out 1.5s infinite alternate;
}

@keyframes hg3DRibbonFloat {
  0% { transform: translateY(0); }
  100% { transform: translateY(-4px); }
}

/* Responsive Scaling */
@media (max-width: 1200px) {
  #hugo-ind-root .hg-sec3-sec4-divider-wrap {
    height: 80px;
    margin-top: -20px;
    margin-bottom: -14px;
  }
}

@media (max-width: 992px) {
  #hugo-ind-root .hg-sec3-sec4-divider-wrap {
    height: 68px;
    margin-top: -16px;
    margin-bottom: -10px;
  }
}

@media (max-width: 768px) {
  #hugo-ind-root .hg-sec3-sec4-divider-wrap {
    height: 54px;
    margin-top: -12px;
    margin-bottom: -8px;
  }
}

@media (max-width: 480px) {
  #hugo-ind-root .hg-sec3-sec4-divider-wrap {
    height: 42px;
    margin-top: -8px;
    margin-bottom: -4px;
  }
}

  /* ==========================================================================
     SECTION 3: HUGO-INSPIRED PASTEL CYAN SCALE BANNER & ANIMATED DOODLES
     ========================================================================== */
  .hg-scale-section {
    position: relative;
    padding: 60px 0 80px 0;
    overflow: hidden;
  }

  /* Hugo Signature Wavy Pastel Cyan Banner Container */
  .hg-scale-hugo-banner {
    position: relative;
    background: linear-gradient(
      90deg,
      #d4f7fa 0%,
      #b9f2f8 14%,
      #9aeaf5 28%,
      #7ce2f1 42%,
      #6dddee 56%,
      #9aeaf5 70%,
      #b9f2f8 85%,
      #d4f7fa 100%
    );
    border: 3px solid rgba(255, 255, 255, 0.95);
    border-radius: 48px;
    padding: 76px 64px;
    color: #080c16;
    box-shadow: 
      0 30px 70px rgba(6, 182, 212, 0.22),
      0 12px 28px rgba(15, 23, 42, 0.08),
      inset 0 2px 6px rgba(255, 255, 255, 0.8);
    overflow: hidden;
    transition: transform 0.4s ease, box-shadow 0.4s ease;
  }

  /* Subtle Vertical Pastel Wave Stripes Overlay */
  .hg-scale-hugo-banner::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: repeating-linear-gradient(
      90deg,
      transparent,
      transparent 70px,
      rgba(255, 255, 255, 0.18) 70px,
      rgba(255, 255, 255, 0.18) 140px
    );
    pointer-events: none;
    z-index: 1;
  }

  /* Header Box */
  .hg-scale-header-wrap {
    position: relative;
    z-index: 3;
    text-align: center;
    max-width: 900px;
    margin: 0 auto 52px auto;
  }

  /* Badge Pill */
  .hg-scale-tag-pill {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    background: rgba(255, 255, 255, 0.85);
    backdrop-filter: blur(10px);
    border: 2px solid #080c16;
    border-radius: 9999px;
    padding: 8px 22px;
    font-size: 0.88rem;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 0.08em;
    color: #080c16;
    margin-bottom: 24px;
    box-shadow: 0 4px 14px rgba(8, 12, 22, 0.08);
    transition: transform 0.3s ease;
  }

  .hg-scale-tag-dot {
    width: 9px;
    height: 9px;
    border-radius: 50%;
    background: #ffc700;
    box-shadow: 0 0 8px #ffc700;
  }

  /* Main Headline */
  .hg-scale-main-title {
    font-family: 'Outfit', sans-serif;
    font-size: clamp(2.4rem, 4.5vw, 3.8rem);
    font-weight: 900;
    color: #080c16;
    line-height: 1.14;
    letter-spacing: -0.03em;
    margin: 0 0 20px 0;
    position: relative;
    display: inline-block;
  }

  .hg-scale-title-line {
    display: block;
  }

  .hg-scale-title-underline-wrap {
    position: relative;
    display: inline-block;
  }

  /* Animated Hand-Drawn SVG Underline (LEFT to RIGHT) */
  .hg-scale-underline-svg {
    position: absolute;
    bottom: -16px;
    left: -4%;
    width: 108%;
    height: 28px;
    pointer-events: none;
    overflow: visible;
  }

  .hg-scale-underline-path {
    stroke: #080c16;
    stroke-width: 6.5;
    stroke-linecap: round;
    stroke-linejoin: round;
    stroke-dasharray: 680;
    stroke-dashoffset: 680;
    opacity: 0;
    transition: none;
  }

  .hg-scale-underline-accent {
    stroke: #ffc700;
    stroke-width: 4;
    stroke-linecap: round;
    stroke-linejoin: round;
    stroke-dasharray: 580;
    stroke-dashoffset: 580;
    opacity: 0;
    transition: none;
  }

  /* Repeatable Scroll-Driven Animation: Triggered when .is-inview is added */
  #hg-scale-banner.is-inview .hg-scale-underline-path {
    animation: hgUnderlineDrawLtoR 0.85s cubic-bezier(0.16, 1, 0.3, 1) 0.2s forwards;
  }

  #hg-scale-banner.is-inview .hg-scale-underline-accent {
    animation: hgUnderlineDrawLtoR 0.85s cubic-bezier(0.16, 1, 0.3, 1) 0.4s forwards;
  }

  @keyframes hgUnderlineDrawLtoR {
    0% {
      stroke-dashoffset: 680;
      opacity: 0;
    }
    10% {
      opacity: 1;
    }
    100% {
      stroke-dashoffset: 0;
      opacity: 1;
    }
  }

  /* Lead Description */
  .hg-scale-lead-desc {
    font-size: clamp(1.05rem, 1.6vw, 1.25rem);
    color: #1e293b;
    font-weight: 500;
    line-height: 1.65;
    max-width: 780px;
    margin: 22px auto 0 auto;
  }

  /* Hugo Signature Playful Floating Doodles */
  .hg-scale-doodle {
    position: absolute;
    pointer-events: none;
    z-index: 4;
    transition: transform 0.6s cubic-bezier(0.16, 1, 0.3, 1), opacity 0.5s ease;
    opacity: 0;
    transform: scale(0.6) rotate(-10deg);
  }

  #hg-scale-banner.is-inview .hg-scale-doodle {
    opacity: 1;
    transform: scale(1) rotate(0deg);
  }

  /* Doodle 1: Smiling Face in Top Right */
  .hg-doodle-face-top-right {
    top: 36px;
    right: 48px;
    width: 82px;
    height: 72px;
    animation: hgDoodleFloat1 4.5s ease-in-out infinite alternate;
  }

  @keyframes hgDoodleFloat1 {
    0% { transform: translateY(0) rotate(0deg); }
    100% { transform: translateY(-10px) rotate(6deg); }
  }

  /* Doodle 2: Glasses Face on Left */
  .hg-doodle-face-left {
    top: 110px;
    left: 42px;
    width: 78px;
    height: 78px;
    animation: hgDoodleFloat2 5s ease-in-out infinite alternate 0.5s;
  }

  @keyframes hgDoodleFloat2 {
    0% { transform: translateY(0) rotate(0deg); }
    100% { transform: translateY(12px) rotate(-8deg); }
  }

  /* Doodle Arrows & Bursts */
  .hg-doodle-arrow-tl {
    position: absolute;
    top: -26px;
    left: -22px;
    width: 36px;
    height: 36px;
  }

  .hg-doodle-arrow-br {
    position: absolute;
    bottom: -24px;
    right: -24px;
    width: 38px;
    height: 38px;
  }

  .hg-doodle-burst-left {
    position: absolute;
    left: -32px;
    top: 50%;
    transform: translateY(-50%);
    width: 28px;
    height: 28px;
  }

  .hg-doodle-burst-right {
    position: absolute;
    right: -32px;
    top: 50%;
    transform: translateY(-50%);
    width: 28px;
    height: 28px;
  }

  /* ==========================================================================
     4 SCALE PILLARS CARDS (IMAGE 2 EDITORIAL CARD AESTHETIC WITH UPPER ANIMATION)
     ========================================================================== */
  .hg-scale-cards-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 22px;
    margin: 48px 0 52px 0;
    position: relative;
    z-index: 3;
  }

  /* Image 2 Card Container: Pure White, Rounded, Polished Shadow */
  .hg-scale-card {
    background: #ffffff;
    border: 1.5px solid rgba(8, 12, 22, 0.08);
    border-radius: 24px;
    padding: 16px 16px 24px 16px;
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    position: relative;
    box-shadow: 
      0 12px 32px rgba(8, 12, 22, 0.06),
      0 3px 10px rgba(6, 182, 212, 0.05);
    transition: transform 0.4s cubic-bezier(0.16, 1, 0.3, 1), box-shadow 0.4s cubic-bezier(0.16, 1, 0.3, 1), border-color 0.3s ease;
    opacity: 0;
    transform: translateY(50px); /* Initial state: down for UPPER scroll animation */
    overflow: hidden;
  }

  /* UPPER DIRECTION ENTRANCE ANIMATION ON SCROLL (REPEATABLE) */
  #hg-scale-banner.is-inview .hg-scale-card:nth-child(1) {
    animation: hgCardUpperSlide 0.75s cubic-bezier(0.16, 1, 0.3, 1) 0.12s forwards;
  }
  #hg-scale-banner.is-inview .hg-scale-card:nth-child(2) {
    animation: hgCardUpperSlide 0.75s cubic-bezier(0.16, 1, 0.3, 1) 0.24s forwards;
  }
  #hg-scale-banner.is-inview .hg-scale-card:nth-child(3) {
    animation: hgCardUpperSlide 0.75s cubic-bezier(0.16, 1, 0.3, 1) 0.36s forwards;
  }
  #hg-scale-banner.is-inview .hg-scale-card:nth-child(4) {
    animation: hgCardUpperSlide 0.75s cubic-bezier(0.16, 1, 0.3, 1) 0.48s forwards;
  }

  @keyframes hgCardUpperSlide {
    0% {
      opacity: 0;
      transform: translateY(50px) scale(0.96);
    }
    100% {
      opacity: 1;
      transform: translateY(0) scale(1);
    }
  }

  .hg-scale-card:hover {
    transform: translateY(-10px) scale(1.015);
    border-color: #080c16;
    box-shadow: 
      0 26px 56px rgba(8, 12, 22, 0.15),
      0 0 25px rgba(255, 199, 0, 0.25);
  }

  /* Card Visual Header Box (Image 2 Style Illustration Banner) */
  .hg-card-visual-box {
    position: relative;
    width: 100%;
    height: 168px;
    border-radius: 16px;
    overflow: hidden;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 18px;
    transition: transform 0.4s cubic-bezier(0.16, 1, 0.3, 1);
  }

  .hg-scale-card:hover .hg-card-visual-box {
    transform: scale(1.025);
  }

  /* Color Schemes for Visual Headers */
  .hg-visual-yellow {
    background: linear-gradient(135deg, #fffbeb 0%, #fef08a 50%, #fde047 100%);
    border: 1px solid rgba(234, 179, 8, 0.35);
  }

  .hg-visual-green {
    background: linear-gradient(135deg, #f0fdf4 0%, #bbf7d0 50%, #86efac 100%);
    border: 1px solid rgba(34, 197, 94, 0.35);
  }

  .hg-visual-blue {
    background: linear-gradient(135deg, #f0f9ff 0%, #bae6fd 50%, #7dd3fc 100%);
    border: 1px solid rgba(14, 165, 233, 0.35);
  }

  .hg-visual-purple {
    background: linear-gradient(135deg, #faf5ff 0%, #ddd6fe 50%, #c4b5fd 100%);
    border: 1px solid rgba(168, 85, 247, 0.35);
  }

  /* Inner SVG Illustration Layer */
  .hg-card-visual-svg {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    pointer-events: none;
  }

  /* Center Badge in Visual Box */
  .hg-card-center-badge {
    position: relative;
    z-index: 2;
    background: #080c16;
    color: #ffffff;
    font-family: 'Outfit', sans-serif;
    font-size: 1.35rem;
    font-weight: 900;
    padding: 8px 18px;
    border-radius: 9999px;
    border: 2px solid #ffffff;
    box-shadow: 0 8px 20px rgba(8, 12, 22, 0.25);
    display: inline-flex;
    align-items: center;
    gap: 8px;
    transition: transform 0.3s ease, background 0.3s ease;
  }

  .hg-scale-card:hover .hg-card-center-badge {
    transform: scale(1.08);
    background: #000000;
    border-color: #ffc700;
  }

  .hg-badge-highlight {
    color: #ffc700;
  }

  /* Top Right Circular Stamp (Image 2 Style) */
  .hg-card-corner-stamp {
    position: absolute;
    top: 10px;
    right: 10px;
    z-index: 3;
    width: 38px;
    height: 38px;
    border-radius: 50%;
    background: rgba(8, 12, 22, 0.88);
    color: #ffffff;
    border: 1.5px solid rgba(255, 255, 255, 0.85);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 0.92rem;
    box-shadow: 0 4px 10px rgba(8, 12, 22, 0.2);
    transition: transform 0.3s ease;
  }

  .hg-scale-card:hover .hg-card-corner-stamp {
    transform: rotate(15deg) scale(1.1);
  }

  /* Card Body Content */
  .hg-card-body-content {
    padding: 0 6px 4px 6px;
    display: flex;
    flex-direction: column;
  }

  /* Metadata Tag Row (Image 2 Style: Date/Tags with Subtle Line) */
  .hg-card-meta-tags {
    display: flex;
    align-items: center;
    gap: 8px;
    margin-bottom: 10px;
    font-size: 0.74rem;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 0.06em;
    color: #64748b;
  }

  .hg-meta-tag-item {
    display: inline-block;
    padding-bottom: 2px;
    border-bottom: 1.5px solid rgba(8, 12, 22, 0.25);
    color: #334155;
    transition: color 0.2s ease, border-color 0.2s ease;
  }

  .hg-scale-card:hover .hg-meta-tag-item {
    color: #080c16;
    border-color: #080c16;
  }

  .hg-meta-dot {
    color: #94a3b8;
    font-size: 0.65rem;
  }

  /* Card Heading Title */
  .hg-scale-card h4 {
    font-family: 'Outfit', sans-serif;
    font-size: 1.26rem;
    font-weight: 800;
    color: #080c16;
    margin: 0 0 10px 0;
    line-height: 1.3;
    letter-spacing: -0.01em;
    transition: color 0.2s ease;
  }

  .hg-scale-card:hover h4 {
    color: #080c16;
  }

  /* Card Paragraph */
  .hg-scale-card p {
    font-size: 0.92rem;
    color: #475569;
    line-height: 1.6;
    margin: 0;
    font-weight: 500;
  }

  /* Hugo Signature Black Pill Bottom Takeaway Box */
  .hg-scale-takeaway-wrap {
    position: relative;
    z-index: 3;
    display: flex;
    justify-content: center;
    margin-top: 10px;
  }

  .hg-scale-takeaway-box {
    position: relative;
    background: #080c16;
    border: 2px solid rgba(255, 255, 255, 0.3);
    border-radius: 9999px;
    padding: 18px 42px;
    display: inline-flex;
    align-items: center;
    gap: 16px;
    color: #ffffff;
    font-family: 'Outfit', sans-serif;
    font-size: clamp(0.98rem, 1.3vw, 1.15rem);
    font-weight: 700;
    box-shadow: 
      0 18px 42px rgba(8, 12, 22, 0.28),
      0 0 30px rgba(6, 182, 212, 0.3);
    transition: all 0.35s ease;
    opacity: 0;
    transform: translateY(20px);
  }

  #hg-scale-banner.is-inview .hg-scale-takeaway-box {
    animation: hgCardUpperSlide 0.7s cubic-bezier(0.16, 1, 0.3, 1) 0.65s forwards;
  }

  .hg-scale-takeaway-box:hover {
    transform: translateY(-4px) scale(1.02);
    border-color: #ffc700;
    box-shadow: 
      0 24px 50px rgba(8, 12, 22, 0.35),
      0 0 35px rgba(255, 199, 0, 0.4);
  }

  .hg-scale-lightning-icon {
    width: 24px;
    height: 24px;
    flex-shrink: 0;
    color: #ffc700;
    filter: drop-shadow(0 0 6px rgba(255, 199, 0, 0.6));
    animation: hgLightningPulse 2.5s ease-in-out infinite;
  }

  @keyframes hgLightningPulse {
    0%, 100% { transform: scale(1); }
    50% { transform: scale(1.25) rotate(6deg); }
  }

  /* Responsive Rules */
  @media (max-width: 1200px) {
    .hg-scale-hugo-banner {
      padding: 64px 44px;
    }
    .hg-scale-cards-grid {
      grid-template-columns: repeat(2, 1fr);
      gap: 20px;
    }
    .hg-doodle-face-top-right {
      right: 24px;
      top: 24px;
      width: 68px;
      height: 60px;
    }
    .hg-doodle-face-left {
      left: 20px;
      top: 80px;
      width: 64px;
      height: 64px;
    }
  }

  @media (max-width: 992px) {
    .hg-scale-hugo-banner {
      padding: 56px 32px;
      border-radius: 36px;
    }
    .hg-scale-cards-grid {
      grid-template-columns: repeat(2, 1fr);
      gap: 16px;
      margin: 36px 0 42px 0;
    }
    .hg-card-visual-box {
      height: 150px;
    }
    .hg-scale-takeaway-box {
      border-radius: 24px;
      padding: 16px 28px;
      text-align: center;
    }
  }

  @media (max-width: 640px) {
    .hg-scale-hugo-banner {
      padding: 42px 18px;
      border-radius: 28px;
    }
    .hg-scale-tag-pill {
      font-size: 0.78rem;
      padding: 6px 16px;
      margin-bottom: 18px;
    }
    .hg-scale-cards-grid {
      grid-template-columns: 1fr;
      gap: 16px;
      margin: 28px 0 34px 0;
    }
    .hg-scale-card {
      padding: 14px 14px 20px 14px;
    }
    .hg-card-visual-box {
      height: 140px;
    }
    .hg-doodle-face-top-right {
      right: 12px;
      top: 14px;
      width: 48px;
      height: 42px;
    }
    .hg-doodle-face-left {
      display: none;
    }
    .hg-scale-takeaway-box {
      flex-direction: column;
      gap: 10px;
      padding: 18px 20px;
      border-radius: 20px;
      font-size: 0.95rem;
    }
    .hg-doodle-arrow-tl, .hg-doodle-arrow-br, .hg-doodle-burst-left, .hg-doodle-burst-right {
      display: none;
    }
  }

  /* ==========================================================================
     SECTION 4: HUGO-INSPIRED PANORAMIC REGIONAL HUBS SHOWCASE (IMAGE 3 REFERENCE)
     ========================================================================== */
  .hg-regional-section {
    position: relative;
    padding: 90px 0 100px 0;
    background: #fbf9f4;
    overflow: hidden;
    border-top: 1px solid rgba(8, 12, 22, 0.06);
    border-bottom: 1px solid rgba(8, 12, 22, 0.06);
  }

  /* Soft Geo-Map Background Watermark (Like Image 3) */
  .hg-regional-map-bg {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    pointer-events: none;
    background-image: radial-gradient(circle at 50% 40%, rgba(255, 199, 0, 0.08) 0%, transparent 65%);
    opacity: 0.7;
    z-index: 1;
  }

  .hg-regional-map-svg {
    position: absolute;
    top: 5%;
    left: 50%;
    transform: translateX(-50%);
    width: 1200px;
    height: 700px;
    opacity: 0.12;
    pointer-events: none;
  }

  /* Header Box */
  .hg-regional-header {
    position: relative;
    z-index: 3;
    text-align: center;
    max-width: 880px;
    margin: 0 auto 48px auto;
    opacity: 0;
    transform: translateY(35px);
    transition: opacity 0.7s cubic-bezier(0.16, 1, 0.3, 1), transform 0.7s cubic-bezier(0.16, 1, 0.3, 1);
  }

  #hg-regional-hubs.is-inview .hg-regional-header {
    opacity: 1;
    transform: translateY(0);
  }

  .hg-regional-header h2 {
    font-family: 'Outfit', sans-serif;
    font-size: clamp(2.3rem, 4.2vw, 3.6rem);
    font-weight: 900;
    color: #080c16;
    letter-spacing: -0.03em;
    line-height: 1.15;
    margin: 16px 0 14px 0;
  }

  .hg-regional-lead-sub {
    font-size: clamp(1.15rem, 1.8vw, 1.35rem);
    font-weight: 800;
    color: #080c16;
    margin-bottom: 12px;
  }

  .hg-regional-lead-p {
    font-size: 1.08rem;
    color: #475569;
    line-height: 1.65;
    margin: 0;
  }

  /* ==========================================================================
     PANORAMIC CAROUSEL STAGE (CENTER ACTIVE + PEEKING SIDES + YELLOW ARROWS)
     ========================================================================== */
  .hg-panoramic-stage-wrap {
    position: relative;
    z-index: 3;
    width: 100%;
    max-width: 1240px;
    margin: 0 auto;
    padding: 0 70px;
    box-sizing: border-box;
  }

  .hg-panoramic-carousel {
    position: relative;
    width: 100%;
    height: 520px;
    display: flex;
    align-items: center;
    justify-content: center;
    perspective: 1200px;
  }

  /* Individual Panoramic Hub Card */
  .hg-panoramic-card {
    position: absolute;
    width: 100%;
    max-width: 780px;
    height: 480px;
    border-radius: 32px;
    overflow: hidden;
    background: #080c16;
    box-shadow: 0 24px 60px rgba(8, 12, 22, 0.28);
    border: 3px solid rgba(255, 255, 255, 0.85);
    transition: all 0.65s cubic-bezier(0.16, 1, 0.3, 1);
    cursor: pointer;
    user-select: none;
    opacity: 0;
    transform: scale(0.75) translateZ(-200px);
    pointer-events: none;
    z-index: 1;
  }

  /* Center Active Card (Image 3 Style) */
  .hg-panoramic-card.is-active {
    opacity: 1;
    transform: scale(1) translateX(0) translateZ(0);
    pointer-events: auto;
    z-index: 10;
    box-shadow: 
      0 32px 80px rgba(8, 12, 22, 0.35),
      0 0 40px rgba(255, 199, 0, 0.22);
    border-color: #ffffff;
  }

  /* Left Peeking Card */
  .hg-panoramic-card.is-prev {
    opacity: 0.65;
    transform: scale(0.84) translateX(-420px) translateZ(-80px) rotateY(8deg);
    pointer-events: auto;
    z-index: 5;
    filter: brightness(0.8) blur(0.5px);
  }

  /* Right Peeking Card */
  .hg-panoramic-card.is-next {
    opacity: 0.65;
    transform: scale(0.84) translateX(420px) translateZ(-80px) rotateY(-8deg);
    pointer-events: auto;
    z-index: 5;
    filter: brightness(0.8) blur(0.5px);
  }

  /* Far cards */
  .hg-panoramic-card.is-hidden {
    opacity: 0;
    transform: scale(0.6) translateZ(-300px);
    pointer-events: none;
    z-index: 0;
  }

  /* Card Background Image Layer with Zoom on Hover */
  .hg-panoramic-card-bg {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.8s cubic-bezier(0.16, 1, 0.3, 1);
  }

  .hg-panoramic-card.is-active:hover .hg-panoramic-card-bg {
    transform: scale(1.06);
  }

  /* Dark Vignette Overlay for High Readability */
  .hg-panoramic-card-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(
      180deg,
      rgba(8, 12, 22, 0.3) 0%,
      rgba(8, 12, 22, 0.65) 50%,
      rgba(8, 12, 22, 0.95) 100%
    );
    z-index: 2;
  }

  /* Top Right Stamp (Image 3 Style) */
  .hg-panoramic-card-stamp {
    position: absolute;
    top: 24px;
    right: 28px;
    z-index: 3;
    background: rgba(255, 255, 255, 0.92);
    backdrop-filter: blur(10px);
    border: 1.5px solid #080c16;
    border-radius: 9999px;
    padding: 6px 16px;
    font-size: 0.78rem;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 0.08em;
    color: #080c16;
    box-shadow: 0 4px 14px rgba(8, 12, 22, 0.2);
  }

  /* Center Brand / City Name (Like 'Bloomberg' in Image 3) */
  .hg-panoramic-center-brand {
    position: absolute;
    top: 36%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 3;
    text-align: center;
    width: 90%;
    pointer-events: none;
  }

  .hg-panoramic-city-title {
    font-family: 'Outfit', sans-serif;
    font-size: clamp(2.4rem, 4.5vw, 3.8rem);
    font-weight: 900;
    color: #ffffff;
    letter-spacing: -0.02em;
    text-shadow: 0 4px 20px rgba(0, 0, 0, 0.6), 0 0 40px rgba(255, 199, 0, 0.35);
    margin: 0 0 6px 0;
  }

  .hg-panoramic-city-tagline {
    font-family: 'Outfit', sans-serif;
    font-size: clamp(0.95rem, 1.4vw, 1.15rem);
    font-weight: 700;
    color: #ffc700;
    text-transform: uppercase;
    letter-spacing: 0.1em;
    text-shadow: 0 2px 10px rgba(0, 0, 0, 0.8);
  }

  /* Bottom Content Info Box */
  .hg-panoramic-bottom-info {
    position: absolute;
    bottom: 24px;
    left: 28px;
    right: 28px;
    z-index: 3;
    background: rgba(255, 255, 255, 0.12);
    backdrop-filter: blur(16px);
    -webkit-backdrop-filter: blur(16px);
    border: 1.5px solid rgba(255, 255, 255, 0.25);
    border-radius: 20px;
    padding: 16px 22px;
    color: #ffffff;
  }

  .hg-panoramic-sectors-row {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
    margin-bottom: 8px;
  }

  .hg-p-sector-pill {
    background: rgba(255, 199, 0, 0.22);
    border: 1px solid rgba(255, 199, 0, 0.5);
    color: #fef08a;
    font-size: 0.74rem;
    font-weight: 800;
    padding: 3px 10px;
    border-radius: 6px;
    letter-spacing: 0.03em;
  }

  .hg-panoramic-desc {
    font-size: 0.92rem;
    color: #e2e8f0;
    line-height: 1.5;
    margin: 0 0 8px 0;
  }

  .hg-panoramic-stats-row {
    display: flex;
    align-items: center;
    gap: 16px;
    font-size: 0.78rem;
    font-weight: 700;
    color: #38bdf8;
    border-top: 1px solid rgba(255, 255, 255, 0.15);
    padding-top: 8px;
  }

  .hg-p-stat-item {
    display: inline-flex;
    align-items: center;
    gap: 5px;
  }

  /* ==========================================================================
     YELLOW CIRCULAR NAVIGATION ARROWS (IMAGE 3 SIGNATURE FEATURE)
     ========================================================================== */
  .hg-panoramic-arrow {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    width: 54px;
    height: 54px;
    border-radius: 50%;
    background: #ffc700;
    border: 2px solid #080c16;
    color: #080c16;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    z-index: 20;
    box-shadow: 
      0 8px 24px rgba(8, 12, 22, 0.2),
      0 0 16px rgba(255, 199, 0, 0.4);
    transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
  }

  .hg-panoramic-arrow-prev {
    left: 4px;
  }

  .hg-panoramic-arrow-next {
    right: 4px;
  }

  .hg-panoramic-arrow:hover {
    transform: translateY(-50%) scale(1.15);
    background: #fde047;
    box-shadow: 
      0 12px 30px rgba(8, 12, 22, 0.3),
      0 0 25px rgba(255, 199, 0, 0.7);
  }

  .hg-panoramic-arrow svg {
    width: 24px;
    height: 24px;
    stroke: #080c16;
    stroke-width: 2.8;
  }

  /* Repeatable Scroll Entrance for Arrows */
  #hg-regional-hubs.is-inview .hg-panoramic-arrow-prev {
    animation: hgArrowPopIn 0.6s cubic-bezier(0.16, 1, 0.3, 1) 0.3s backwards;
  }
  #hg-regional-hubs.is-inview .hg-panoramic-arrow-next {
    animation: hgArrowPopIn 0.6s cubic-bezier(0.16, 1, 0.3, 1) 0.3s backwards;
  }

  @keyframes hgArrowPopIn {
    0% { transform: translateY(-50%) scale(0.4); opacity: 0; }
    70% { transform: translateY(-50%) scale(1.2); opacity: 1; }
    100% { transform: translateY(-50%) scale(1); opacity: 1; }
  }

  /* Navigation City Selector Tabs (Below Carousel) */
  .hg-panoramic-tabs-wrap {
    position: relative;
    z-index: 3;
    display: flex;
    justify-content: center;
    gap: 10px;
    margin: 32px 0 38px 0;
    flex-wrap: wrap;
  }

  .hg-panoramic-tab-btn {
    background: #ffffff;
    border: 2px solid rgba(8, 12, 22, 0.12);
    border-radius: 9999px;
    padding: 10px 22px;
    font-family: 'Outfit', sans-serif;
    font-size: 0.92rem;
    font-weight: 800;
    color: #334155;
    cursor: pointer;
    box-shadow: 0 4px 14px rgba(8, 12, 22, 0.05);
    transition: all 0.3s ease;
    display: inline-flex;
    align-items: center;
    gap: 8px;
  }

  .hg-panoramic-tab-btn:hover {
    border-color: #080c16;
    color: #080c16;
    transform: translateY(-2px);
  }

  .hg-panoramic-tab-btn.is-active {
    background: #080c16;
    color: #ffffff;
    border-color: #080c16;
    box-shadow: 0 8px 24px rgba(8, 12, 22, 0.22);
    transform: translateY(-3px) scale(1.04);
  }

  .hg-panoramic-tab-btn.is-active .hg-tab-dot {
    background: #ffc700;
    box-shadow: 0 0 8px #ffc700;
  }

  .hg-tab-dot {
    width: 8px;
    height: 8px;
    border-radius: 50%;
    background: #94a3b8;
    transition: all 0.3s ease;
  }

  /* Bottom Regional Advisory Box */
  .hg-regional-advisory-box {
    position: relative;
    z-index: 3;
    background: #ffffff;
    border: 2px solid rgba(255, 199, 0, 0.6);
    border-radius: 28px;
    padding: 30px 38px;
    display: flex;
    align-items: center;
    gap: 24px;
    box-shadow: 0 16px 45px rgba(8, 12, 22, 0.06);
    max-width: 1080px;
    margin: 0 auto;
    opacity: 0;
    transform: translateY(30px);
    transition: opacity 0.7s cubic-bezier(0.16, 1, 0.3, 1) 0.35s, transform 0.7s cubic-bezier(0.16, 1, 0.3, 1) 0.35s;
  }

  #hg-regional-hubs.is-inview .hg-regional-advisory-box {
    opacity: 1;
    transform: translateY(0);
  }

  .hg-regional-advisory-icon {
    width: 52px;
    height: 52px;
    border-radius: 16px;
    background: #080c16;
    color: #ffc700;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    box-shadow: 0 6px 18px rgba(8, 12, 22, 0.15);
  }

  .hg-regional-advisory-box p {
    margin: 0;
    font-size: 1.05rem;
    color: #1e293b;
    font-weight: 600;
    line-height: 1.7;
  }

  /* Responsive Rules */
  @media (max-width: 1200px) {
    .hg-panoramic-card {
      max-width: 700px;
      height: 460px;
    }
    .hg-panoramic-card.is-prev {
      transform: scale(0.82) translateX(-360px) translateZ(-60px);
    }
    .hg-panoramic-card.is-next {
      transform: scale(0.82) translateX(360px) translateZ(-60px);
    }
    .hg-panoramic-stage-wrap {
      padding: 0 50px;
    }
  }

  @media (max-width: 992px) {
    .hg-panoramic-carousel {
      height: 480px;
    }
    .hg-panoramic-card {
      max-width: 600px;
      height: 440px;
      border-radius: 26px;
    }
    .hg-panoramic-card.is-prev {
      transform: scale(0.78) translateX(-280px) translateZ(-50px);
      opacity: 0.45;
    }
    .hg-panoramic-card.is-next {
      transform: scale(0.78) translateX(280px) translateZ(-50px);
      opacity: 0.45;
    }
    .hg-panoramic-arrow {
      width: 48px;
      height: 48px;
    }
  }

  @media (max-width: 768px) {
    .hg-regional-section {
      padding: 60px 0 70px 0;
    }
    .hg-panoramic-stage-wrap {
      padding: 0 10px;
    }
    .hg-panoramic-carousel {
      height: 480px;
    }
    .hg-panoramic-card {
      max-width: 100%;
      height: 460px;
      border-radius: 22px;
    }
    .hg-panoramic-card.is-prev,
    .hg-panoramic-card.is-next {
      display: none; /* Mobile pristine view: clean active focus */
    }
    .hg-panoramic-arrow-prev {
      left: 10px;
    }
    .hg-panoramic-arrow-next {
      right: 10px;
    }
    .hg-panoramic-bottom-info {
      left: 16px;
      right: 16px;
      bottom: 16px;
      padding: 12px 16px;
    }
    .hg-panoramic-center-brand {
      top: 30%;
    }
    .hg-panoramic-stats-row {
      flex-wrap: wrap;
      gap: 8px;
      font-size: 0.72rem;
    }
    .hg-regional-advisory-box {
      flex-direction: column;
      padding: 24px 20px;
      border-radius: 20px;
      text-align: center;
    }
  }

  /* ==========================================================================
   TRANSITION DIVIDER: SECTION 4 -> SECTION 5 (HUGO ORGANIC CYAN WAVE ARCH)
   ========================================================================== */
#hugo-ind-root .hg-sec4-sec5-divider-wrap {
  position: relative;
  width: 100%;
  height: 80px;
  overflow: hidden;
  margin-top: -2px;
  margin-bottom: -15px;
  z-index: 8;
  pointer-events: none;
  background: transparent;
}

#hg-sec4-sec5-divider .hg-curve-arch-stage {
  position: relative;
  width: 100%;
  height: 100%;
}

#hg-sec4-sec5-divider .hg-curve-arch-svg {
  width: 100%;
  height: 100%;
  display: block;
  filter: drop-shadow(0 4px 16px rgba(6, 182, 212, 0.22));
}

/* Left to Right Sweep Animation */
#hg-sec4-sec5-divider .hg-curve-path {
  clip-path: polygon(0 0, 0 0, 0 100%, 0 100%);
  opacity: 0;
  transition: none;
}

#hg-sec4-sec5-divider.is-inview .hg-curve-layer-main {
  animation: hgCurveArchSweep 1000ms cubic-bezier(0.16, 1, 0.3, 1) 0.05s forwards;
}

#hg-sec4-sec5-divider.is-inview .hg-curve-layer-accent {
  animation: hgCurveArchSweep 1150ms cubic-bezier(0.16, 1, 0.3, 1) 0.18s forwards;
}

@keyframes hgCurveArchSweep {
  0% {
    clip-path: polygon(0 0, 0 0, 0 100%, 0 100%);
    opacity: 0;
  }
  15% {
    opacity: 1;
  }
  100% {
    clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
    opacity: 1;
  }
}

/* Left to Right Stroke Draw Animation */
#hg-sec4-sec5-divider .hg-curve-stroke-line {
  stroke-dasharray: 1550;
  stroke-dashoffset: 1550;
  opacity: 0;
  transition: none;
}

#hg-sec4-sec5-divider.is-inview .hg-curve-stroke-line {
  animation: hgCurveStrokeDraw 1100ms cubic-bezier(0.16, 1, 0.3, 1) 0.10s forwards;
}

@keyframes hgCurveStrokeDraw {
  0% {
    stroke-dashoffset: 1550;
    opacity: 0;
  }
  10% {
    opacity: 1;
  }
  100% {
    stroke-dashoffset: 0;
    opacity: 1;
  }
}

/* Responsive Scaling */
@media (max-width: 1200px) {
  #hugo-ind-root .hg-sec4-sec5-divider-wrap {
    height: 70px;
    margin-bottom: -12px;
  }
}

@media (max-width: 992px) {
  #hugo-ind-root .hg-sec4-sec5-divider-wrap {
    height: 58px;
    margin-bottom: -10px;
  }
}

@media (max-width: 768px) {
  #hugo-ind-root .hg-sec4-sec5-divider-wrap {
    height: 46px;
    margin-bottom: -8px;
  }
}

@media (max-width: 480px) {
  #hugo-ind-root .hg-sec4-sec5-divider-wrap {
    height: 36px;
    margin-bottom: -6px;
  }
}

  /* ==========================================================================
     SECTION 5: WHY BUSINESSES CHOOSE OVERSEAS MOGULS (IMAGE 2 EDITORIAL CARDS)
     ========================================================================== */
  .hg-why-section {
    position: relative;
    padding: 90px 0 100px 0;
    background: #ffffff;
    overflow: hidden;
  }

  /* Header Box */
  .hg-why-header {
    position: relative;
    z-index: 3;
    text-align: center;
    max-width: 860px;
    margin: 0 auto 52px auto;
    opacity: 0;
    transform: translateY(35px);
    transition: opacity 0.7s cubic-bezier(0.16, 1, 0.3, 1), transform 0.7s cubic-bezier(0.16, 1, 0.3, 1);
  }

  #hg-why-us.is-inview .hg-why-header {
    opacity: 1;
    transform: translateY(0);
  }

  .hg-why-header h2 {
    font-family: 'Outfit', sans-serif;
    font-size: clamp(2.3rem, 4.2vw, 3.6rem);
    font-weight: 900;
    color: #080c16;
    letter-spacing: -0.03em;
    line-height: 1.15;
    margin: 16px 0 14px 0;
  }

  .hg-why-lead-sub {
    font-size: clamp(1.1rem, 1.6vw, 1.28rem);
    font-weight: 700;
    color: #475569;
    margin: 0;
  }

  /* 4 Strategy Cards Grid (Image 2 Editorial Layout) */
  .hg-why-cards-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 24px;
    position: relative;
    z-index: 3;
    margin-bottom: 48px;
  }

  /* Image 2 Style Card Container */
  .hg-why-strategy-card {
    background: #ffffff;
    border: 1.5px solid rgba(8, 12, 22, 0.09);
    border-radius: 24px;
    padding: 16px 16px 26px 16px;
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    position: relative;
    box-shadow: 
      0 14px 34px rgba(8, 12, 22, 0.06),
      0 3px 10px rgba(6, 182, 212, 0.04);
    transition: transform 0.4s cubic-bezier(0.16, 1, 0.3, 1), box-shadow 0.4s cubic-bezier(0.16, 1, 0.3, 1), border-color 0.3s ease;
    opacity: 0;
    transform: translateY(55px); /* Upward direction entrance */
    overflow: hidden;
  }

  /* Repeatable Upward Scroll-Driven Stagger */
  #hg-why-us.is-inview .hg-why-strategy-card:nth-child(1) {
    animation: hgWhyCardSlideUp 0.75s cubic-bezier(0.16, 1, 0.3, 1) 0.10s forwards;
  }
  #hg-why-us.is-inview .hg-why-strategy-card:nth-child(2) {
    animation: hgWhyCardSlideUp 0.75s cubic-bezier(0.16, 1, 0.3, 1) 0.22s forwards;
  }
  #hg-why-us.is-inview .hg-why-strategy-card:nth-child(3) {
    animation: hgWhyCardSlideUp 0.75s cubic-bezier(0.16, 1, 0.3, 1) 0.34s forwards;
  }
  #hg-why-us.is-inview .hg-why-strategy-card:nth-child(4) {
    animation: hgWhyCardSlideUp 0.75s cubic-bezier(0.16, 1, 0.3, 1) 0.46s forwards;
  }

  @keyframes hgWhyCardSlideUp {
    0% {
      opacity: 0;
      transform: translateY(55px) scale(0.96);
    }
    100% {
      opacity: 1;
      transform: translateY(0) scale(1);
    }
  }

  .hg-why-strategy-card:hover {
    transform: translateY(-10px) scale(1.015);
    border-color: #080c16;
    box-shadow: 
      0 26px 58px rgba(8, 12, 22, 0.15),
      0 0 25px rgba(255, 199, 0, 0.28);
  }

  /* Top Visual Media Box (Image 2 Style) */
  .hg-why-visual-box {
    position: relative;
    width: 100%;
    height: 180px;
    border-radius: 16px;
    overflow: hidden;
    margin-bottom: 18px;
    background: #080c16;
  }

  .hg-why-visual-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
    transition: transform 0.6s cubic-bezier(0.16, 1, 0.3, 1);
  }

  .hg-why-strategy-card:hover .hg-why-visual-img {
    transform: scale(1.08);
  }

  .hg-why-visual-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(180deg, rgba(8, 12, 22, 0.15) 0%, rgba(8, 12, 22, 0.65) 100%);
    pointer-events: none;
  }

  /* Circular Stamp in Top Right (Image 2 Style) */
  .hg-why-corner-stamp {
    position: absolute;
    top: 10px;
    right: 10px;
    z-index: 3;
    width: 38px;
    height: 38px;
    border-radius: 50%;
    background: #ffc700;
    color: #080c16;
    font-family: 'Outfit', sans-serif;
    font-size: 0.85rem;
    font-weight: 900;
    display: flex;
    align-items: center;
    justify-content: center;
    border: 2px solid #080c16;
    box-shadow: 0 4px 10px rgba(8, 12, 22, 0.25);
    transition: transform 0.3s ease;
  }

  .hg-why-strategy-card:hover .hg-why-corner-stamp {
    transform: rotate(15deg) scale(1.12);
  }

  /* Floating Telemetry Chip on Visual Box */
  .hg-why-visual-chip {
    position: absolute;
    bottom: 10px;
    left: 10px;
    z-index: 3;
    background: rgba(8, 12, 22, 0.88);
    backdrop-filter: blur(8px);
    border: 1px solid rgba(255, 255, 255, 0.3);
    border-radius: 9999px;
    padding: 5px 12px;
    font-family: 'Outfit', sans-serif;
    font-size: 0.72rem;
    font-weight: 800;
    color: #fef08a;
    letter-spacing: 0.04em;
    text-transform: uppercase;
  }

  /* Card Body Content */
  .hg-why-card-body {
    padding: 0 4px;
    display: flex;
    flex-direction: column;
  }

  /* Metadata Tag Row (Image 2 Style) */
  .hg-why-meta-tags {
    display: flex;
    align-items: center;
    gap: 8px;
    margin-bottom: 10px;
    font-size: 0.74rem;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 0.06em;
    color: #64748b;
  }

  .hg-why-meta-item {
    display: inline-block;
    padding-bottom: 2px;
    border-bottom: 1.5px solid rgba(8, 12, 22, 0.25);
    color: #334155;
    transition: color 0.2s ease, border-color 0.2s ease;
  }

  .hg-why-strategy-card:hover .hg-why-meta-item {
    color: #080c16;
    border-color: #080c16;
  }

  .hg-why-meta-dot {
    color: #94a3b8;
    font-size: 0.65rem;
  }

  /* Card Heading Title */
  .hg-why-strategy-card h4 {
    font-family: 'Outfit', sans-serif;
    font-size: 1.28rem;
    font-weight: 800;
    color: #080c16;
    margin: 0 0 10px 0;
    line-height: 1.3;
    letter-spacing: -0.01em;
  }

  /* Card Paragraph */
  .hg-why-strategy-card p {
    font-size: 0.92rem;
    color: #475569;
    line-height: 1.6;
    margin: 0;
    font-weight: 500;
  }

  /* Responsive Breakpoints */
  @media (max-width: 1200px) {
    .hg-why-cards-grid {
      grid-template-columns: repeat(2, 1fr);
      gap: 20px;
    }
    .hg-why-visual-box {
      height: 170px;
    }
  }

  @media (max-width: 992px) {
    .hg-why-section {
      padding: 70px 0 80px 0;
    }
    .hg-why-cards-grid {
      grid-template-columns: repeat(2, 1fr);
      gap: 16px;
    }
  }

  @media (max-width: 640px) {
    .hg-why-section {
      padding: 50px 0 60px 0;
    }
    .hg-why-cards-grid {
      grid-template-columns: 1fr;
      gap: 16px;
      margin-bottom: 36px;
    }
    .hg-why-strategy-card {
      padding: 14px 14px 20px 14px;
    }
    .hg-why-visual-box {
      height: 160px;
    }
  }

  /* ==========================================================================
     SECTION 6: HUGO-INSPIRED STRATEGY CONSULTATION STAGE (IMAGE 3 & 4 REFERENCE)
     ========================================================================== */
  .hg-consultation-section {
    position: relative;
    padding: 90px 0 110px 0;
    background: #faf8f5;
    overflow: hidden;
    border-top: 1px solid rgba(8, 12, 22, 0.06);
  }

  /* Colorful Pastel Horizontal Wave Ribbons Backdrop (Image 3 Reference) */
  .hg-consultation-backdrop-ribbons {
    position: absolute;
    top: 50%;
    left: 0;
    right: 0;
    transform: translateY(-50%);
    height: 480px;
    pointer-events: none;
    z-index: 1;
    opacity: 0.85;
  }

  .hg-backdrop-ribbon-svg {
    width: 100%;
    height: 100%;
    display: block;
  }

  /* Section Header */
  .hg-consultation-header {
    position: relative;
    z-index: 3;
    text-align: center;
    max-width: 860px;
    margin: 0 auto 48px auto;
    opacity: 0;
    transform: translateY(30px);
    transition: opacity 0.7s cubic-bezier(0.16, 1, 0.3, 1), transform 0.7s cubic-bezier(0.16, 1, 0.3, 1);
  }

  #hg-consultation-section.is-inview .hg-consultation-header {
    opacity: 1;
    transform: translateY(0);
  }

  /* Main Featured Showcase Card (Image 3 & 4 Wide Editorial Landscape Stage) */
  .hg-consultation-main-card {
    position: relative;
    z-index: 3;
    background: #ffffff;
    border: 3px solid rgba(255, 255, 255, 0.95);
    border-radius: 36px;
    padding: 40px;
    box-shadow: 
      0 32px 80px rgba(8, 12, 22, 0.12),
      0 12px 30px rgba(6, 182, 212, 0.08);
    opacity: 0;
    transform: translateY(45px) scale(0.97);
    transition: all 0.75s cubic-bezier(0.16, 1, 0.3, 1);
  }

  #hg-consultation-section.is-inview .hg-consultation-main-card {
    opacity: 1;
    transform: translateY(0) scale(1);
  }

  .hg-consultation-grid {
    display: grid;
    grid-template-columns: 1.05fr 1fr;
    gap: 44px;
    align-items: center;
  }

  /* ==========================================================================
     LEFT COLUMN: INTERACTIVE STRATEGY MEDIA STAGE WITH ROTATING BADGE (IMAGE 3)
     ========================================================================== */
  .hg-strategy-media-stage {
    position: relative;
    width: 100%;
    height: 440px;
    border-radius: 26px;
    overflow: hidden;
    background: #080c16;
    box-shadow: 0 20px 50px rgba(8, 12, 22, 0.25);
  }

  .hg-strategy-media-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
    transition: transform 0.8s cubic-bezier(0.16, 1, 0.3, 1);
  }

  .hg-strategy-media-stage:hover .hg-strategy-media-img {
    transform: scale(1.06);
  }

  .hg-strategy-media-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(
      180deg,
      rgba(8, 12, 22, 0.25) 0%,
      rgba(8, 12, 22, 0.55) 50%,
      rgba(8, 12, 22, 0.85) 100%
    );
  }

  /* Rotating Circular Action Badge (Image 3 Signature Feature) */
  .hg-rotating-action-badge {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 124px;
    height: 124px;
    border-radius: 50%;
    background: #ffc700;
    border: 3px solid #080c16;
    box-shadow: 
      0 0 35px rgba(255, 199, 0, 0.7),
      0 12px 30px rgba(8, 12, 22, 0.4);
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 5;
    cursor: pointer;
    transition: transform 0.35s ease, box-shadow 0.35s ease;
  }

  .hg-rotating-action-badge:hover {
    transform: translate(-50%, -50%) scale(1.12);
    box-shadow: 
      0 0 50px rgba(255, 199, 0, 0.9),
      0 18px 40px rgba(8, 12, 22, 0.5);
  }

  /* Spinning SVG Text Ring */
  .hg-badge-text-svg {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    animation: hgBadgeSpin 18s linear infinite;
  }

  @keyframes hgBadgeSpin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
  }

  .hg-badge-text-svg text {
    font-family: 'Outfit', sans-serif;
    font-size: 10.5px;
    font-weight: 900;
    fill: #080c16;
    letter-spacing: 0.12em;
    text-transform: uppercase;
  }

  /* Center Play / Action Icon */
  .hg-badge-center-icon {
    width: 32px;
    height: 32px;
    color: #080c16;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    z-index: 6;
  }

  .hg-badge-center-icon svg {
    width: 28px;
    height: 28px;
    fill: #080c16;
  }

  /* Floating Telemetry Chips on Media Stage */
  .hg-media-chip-top {
    position: absolute;
    top: 18px;
    left: 18px;
    z-index: 4;
    background: rgba(8, 12, 22, 0.88);
    backdrop-filter: blur(8px);
    border: 1px solid rgba(255, 255, 255, 0.25);
    border-radius: 9999px;
    padding: 6px 16px;
    font-family: 'Outfit', sans-serif;
    font-size: 0.76rem;
    font-weight: 800;
    color: #fef08a;
    display: inline-flex;
    align-items: center;
    gap: 6px;
  }

  .hg-chip-pulse-dot {
    width: 8px;
    height: 8px;
    border-radius: 50%;
    background: #10b981;
    box-shadow: 0 0 8px #10b981;
    animation: hgDotPulse 1.8s infinite;
  }

  @keyframes hgDotPulse {
    0%, 100% { transform: scale(1); opacity: 1; }
    50% { transform: scale(1.4); opacity: 0.6; }
  }

  .hg-media-chip-bottom {
    position: absolute;
    bottom: 18px;
    left: 18px;
    right: 18px;
    z-index: 4;
    background: rgba(255, 255, 255, 0.95);
    backdrop-filter: blur(10px);
    border: 1.5px solid #080c16;
    border-radius: 14px;
    padding: 10px 16px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    font-family: 'Outfit', sans-serif;
    font-size: 0.82rem;
    font-weight: 800;
    color: #080c16;
  }

  /* ==========================================================================
     RIGHT COLUMN: EDITORIAL BLUEPRINT & ACTION CTA (IMAGE 4 REFERENCE)
     ========================================================================== */
  .hg-strategy-content-box {
    display: flex;
    flex-direction: column;
    justify-content: center;
  }

  /* Metadata Tag Line (Image 4 Style) */
  .hg-strategy-meta-row {
    display: flex;
    align-items: center;
    gap: 12px;
    margin-bottom: 14px;
    font-size: 0.76rem;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 0.06em;
    color: #64748b;
  }

  .hg-strategy-meta-link {
    display: inline-block;
    padding-bottom: 2px;
    border-bottom: 1.5px solid #080c16;
    color: #080c16;
  }

  /* Bold Main Title with Left -> Right Underline (Image 4 Style) */
  .hg-strategy-title {
    font-family: 'Outfit', sans-serif;
    font-size: clamp(2.1rem, 3.4vw, 3.0rem);
    font-weight: 900;
    color: #080c16;
    line-height: 1.18;
    letter-spacing: -0.02em;
    margin: 0 0 14px 0;
  }

  .hg-strategy-underline-wrap {
    position: relative;
    display: inline-block;
  }

  .hg-strategy-underline-svg {
    position: absolute;
    bottom: -10px;
    left: 0;
    width: 100%;
    height: 18px;
    pointer-events: none;
    overflow: visible;
  }

  .hg-strategy-underline-path {
    stroke: #080c16;
    stroke-width: 5;
    stroke-linecap: round;
    stroke-linejoin: round;
    stroke-dasharray: 550;
    stroke-dashoffset: 550;
    opacity: 0;
    transition: none;
  }

  #hg-consultation-section.is-inview .hg-strategy-underline-path {
    animation: hgStrategyLineDraw 0.85s cubic-bezier(0.16, 1, 0.3, 1) 0.25s forwards;
  }

  @keyframes hgStrategyLineDraw {
    0% { stroke-dashoffset: 550; opacity: 0; }
    15% { opacity: 1; }
    100% { stroke-dashoffset: 0; opacity: 1; }
  }

  .hg-strategy-lead-sub {
    font-size: 1.15rem;
    font-weight: 800;
    color: #d97706;
    margin-bottom: 12px;
  }

  .hg-strategy-desc {
    font-size: 1.02rem;
    color: #475569;
    line-height: 1.65;
    margin: 0 0 22px 0;
  }

  /* 3 Checkpoint Pillars */
  .hg-strategy-checkpoints {
    display: flex;
    flex-direction: column;
    gap: 10px;
    margin-bottom: 28px;
  }

  .hg-checkpoint-item {
    display: flex;
    align-items: center;
    gap: 12px;
    font-family: 'Outfit', sans-serif;
    font-size: 0.95rem;
    font-weight: 700;
    color: #1e293b;
  }

  .hg-checkpoint-icon {
    width: 24px;
    height: 24px;
    border-radius: 50%;
    background: #fef08a;
    border: 1.5px solid #080c16;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    font-size: 0.80rem;
    color: #080c16;
  }

  /* CTA Button Container with Doodle Arrow */
  .hg-strategy-cta-wrap {
    position: relative;
    display: inline-flex;
    align-items: center;
  }

  .hg-consultation-cta-btn {
    background: #080c16;
    color: #ffffff;
    font-family: 'Outfit', sans-serif;
    font-size: 1.10rem;
    font-weight: 800;
    padding: 18px 38px;
    border-radius: 9999px;
    border: 2px solid #080c16;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 12px;
    box-shadow: 
      0 14px 35px rgba(8, 12, 22, 0.25),
      0 0 20px rgba(255, 199, 0, 0.35);
    transition: all 0.35s cubic-bezier(0.16, 1, 0.3, 1);
  }

  .hg-consultation-cta-btn:hover {
    background: #ffc700;
    color: #080c16;
    transform: translateY(-4px) scale(1.03);
    box-shadow: 
      0 20px 48px rgba(8, 12, 22, 0.30),
      0 0 35px rgba(255, 199, 0, 0.7);
  }

  .hg-cta-btn-arrow {
    width: 20px;
    height: 20px;
    transition: transform 0.3s ease;
  }

  .hg-consultation-cta-btn:hover .hg-cta-btn-arrow {
    transform: translateX(4px);
  }

  /* Responsive Rules */
  @media (max-width: 1200px) {
    .hg-consultation-main-card {
      padding: 32px;
    }
    .hg-consultation-grid {
      gap: 32px;
    }
    .hg-strategy-media-stage {
      height: 400px;
    }
  }

  @media (max-width: 992px) {
    .hg-consultation-grid {
      grid-template-columns: 1fr;
      gap: 36px;
    }
    .hg-strategy-media-stage {
      height: 340px;
    }
    .hg-rotating-action-badge {
      width: 104px;
      height: 104px;
    }
  }

  @media (max-width: 640px) {
    .hg-consultation-section {
      padding: 50px 0 60px 0;
    }
    .hg-consultation-main-card {
      padding: 20px 16px;
      border-radius: 26px;
    }
    .hg-strategy-media-stage {
      height: 260px;
      border-radius: 18px;
    }
    .hg-rotating-action-badge {
      width: 86px;
      height: 86px;
    }
    .hg-badge-text-svg text {
      font-size: 8px;
    }
    .hg-consultation-cta-btn {
      width: 100%;
      justify-content: center;
      padding: 16px 24px;
      font-size: 1.0rem;
    }
  }

  /* ==========================================================================
     SECTION 7: HUGO-INSPIRED FREQUENTLY ASKED QUESTIONS (IMAGE 2 REFERENCE)
     ========================================================================== */
  .hg-faq-section {
    position: relative;
    padding: 0 0 100px 0;
    background: #ffffff;
    overflow: hidden;
  }

  /* Warm Pastel Cream Header Canvas (Image 2 Reference) */
  .hg-faq-header-stage {
    position: relative;
    background: #fbf8f2;
    padding: 80px 24px 70px 24px;
    text-align: center;
    border-top: 1px solid rgba(8, 12, 22, 0.06);
  }

  /* Bottom Organic Curve Wave Transition */
  .hg-faq-header-wave {
    position: absolute;
    bottom: -1px;
    left: 0;
    width: 100%;
    height: 48px;
    pointer-events: none;
    z-index: 2;
  }

  .hg-faq-header-inner {
    position: relative;
    max-width: 860px;
    margin: 0 auto;
    z-index: 3;
    opacity: 0;
    transform: translateY(30px);
    transition: opacity 0.7s cubic-bezier(0.16, 1, 0.3, 1), transform 0.7s cubic-bezier(0.16, 1, 0.3, 1);
  }

  #industry-faqs.is-inview .hg-faq-header-inner {
    opacity: 1;
    transform: translateY(0);
  }

  /* Hand-Drawn Doodle Arrow (Image 2 Style) */
  .hg-faq-doodle-arrow {
    position: absolute;
    top: -28px;
    left: 18%;
    width: 44px;
    height: 44px;
    pointer-events: none;
    opacity: 0;
    transform: scale(0.6) rotate(-15deg);
    transition: all 0.6s cubic-bezier(0.16, 1, 0.3, 1) 0.2s;
  }

  #industry-faqs.is-inview .hg-faq-doodle-arrow {
    opacity: 1;
    transform: scale(1) rotate(0deg);
  }

  /* Main Title with Hand-Drawn Underline */
  .hg-faq-title {
    font-family: 'Outfit', sans-serif;
    font-size: clamp(2.5rem, 5vw, 4.2rem);
    font-weight: 900;
    color: #080c16;
    line-height: 1.12;
    letter-spacing: -0.03em;
    margin: 0 0 10px 0;
  }

  .hg-faq-underline-wrap {
    position: relative;
    display: inline-block;
  }

  .hg-faq-underline-svg {
    position: absolute;
    bottom: -12px;
    left: -4%;
    width: 108%;
    height: 20px;
    pointer-events: none;
    overflow: visible;
  }

  .hg-faq-underline-path {
    stroke: #080c16;
    stroke-width: 5.5;
    stroke-linecap: round;
    stroke-linejoin: round;
    stroke-dasharray: 280;
    stroke-dashoffset: 280;
    opacity: 0;
    transition: none;
  }

  #industry-faqs.is-inview .hg-faq-underline-path {
    animation: hgFAQUnderlineDraw 0.75s cubic-bezier(0.16, 1, 0.3, 1) 0.25s forwards;
  }

  @keyframes hgFAQUnderlineDraw {
    0% { stroke-dashoffset: 280; opacity: 0; }
    15% { opacity: 1; }
    100% { stroke-dashoffset: 0; opacity: 1; }
  }

  /* ==========================================================================
     FILTER & SEARCH TOOLBAR (IMAGE 2 SIGNATURE FEATURE)
     ========================================================================== */
  .hg-faq-toolbar-wrap {
    position: relative;
    z-index: 4;
    max-width: 920px;
    margin: 40px auto 20px auto;
    padding: 0 20px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 16px;
    border-bottom: 2px solid #080c16;
    padding-bottom: 16px;
  }

  /* Category Filter Pill Dropdown / Tabs */
  .hg-faq-cat-filter {
    display: flex;
    align-items: center;
    gap: 8px;
    flex-wrap: wrap;
  }

  .hg-faq-filter-btn {
    background: transparent;
    border: 1.5px solid transparent;
    border-radius: 9999px;
    padding: 6px 14px;
    font-family: 'Outfit', sans-serif;
    font-size: 0.88rem;
    font-weight: 800;
    color: #475569;
    cursor: pointer;
    transition: all 0.25s ease;
  }

  .hg-faq-filter-btn:hover {
    color: #080c16;
    background: rgba(8, 12, 22, 0.05);
  }

  .hg-faq-filter-btn.is-active {
    background: #080c16;
    color: #ffffff;
  }

  /* Live Search Input Box */
  .hg-faq-search-box {
    position: relative;
    display: flex;
    align-items: center;
    min-width: 240px;
  }

  .hg-faq-search-input {
    width: 100%;
    padding: 8px 36px 8px 14px;
    border-radius: 9999px;
    border: 1.5px solid rgba(8, 12, 22, 0.18);
    font-family: 'Outfit', sans-serif;
    font-size: 0.88rem;
    font-weight: 600;
    color: #080c16;
    background: #ffffff;
    outline: none;
    transition: all 0.25s ease;
  }

  .hg-faq-search-input:focus {
    border-color: #080c16;
    box-shadow: 0 0 0 3px rgba(255, 199, 0, 0.35);
  }

  .hg-faq-search-icon {
    position: absolute;
    right: 12px;
    width: 18px;
    height: 18px;
    pointer-events: none;
    color: #64748b;
  }

  /* ==========================================================================
     SLEEK HUGO MINIMALIST FAQ ACCORDION ROWS (IMAGE 2 STYLE)
     ========================================================================== */
    /* ==========================================================================
     SLEEK HUGO MINIMALIST FAQ ACCORDION ROWS & INTERACTIVE MODULES
     ========================================================================== */
  .hg-hugo-faq-list {
    max-width: 920px;
    margin: 0 auto;
    padding: 0 20px;
    display: flex;
    flex-direction: column;
    gap: 16px;
  }

  .hg-faq-row {
    background: #ffffff;
    border: 1.5px solid rgba(8, 12, 22, 0.08);
    border-radius: 16px;
    overflow: hidden;
    transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
  }

  .hg-faq-row:hover {
    border-color: rgba(8, 12, 22, 0.22);
    box-shadow: 0 8px 24px rgba(8, 12, 22, 0.06);
  }

  .hg-faq-row.active {
    border-color: #080c16;
    box-shadow: 0 12px 32px rgba(8, 12, 22, 0.09);
  }

  .hg-faq-trigger {
    width: 100%;
    padding: 22px 26px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    background: none;
    border: none;
    cursor: pointer;
    text-align: left;
    font-family: 'Outfit', sans-serif;
    font-size: 1.08rem;
    font-weight: 800;
    color: #080c16;
    gap: 16px;
  }

  .hg-faq-trigger span:first-child {
    flex: 1;
  }

  .hg-faq-icon {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 32px;
    height: 32px;
    border-radius: 50%;
    background: #fff8e6;
    color: #080c16;
    font-size: 1.3rem;
    font-weight: 700;
    line-height: 1;
    transition: transform 0.3s cubic-bezier(0.16, 1, 0.3, 1), background 0.25s ease;
    flex-shrink: 0;
  }

  .hg-faq-row.active .hg-faq-icon {
    transform: rotate(45deg);
    background: #ffc700;
  }

  .hg-faq-content {
    max-height: 0;
    overflow: hidden;
    padding: 0 26px;
    transition: max-height 0.4s cubic-bezier(0.16, 1, 0.3, 1), padding 0.3s ease;
    font-size: 0.98rem;
    line-height: 1.75;
    color: #475569;
  }

  .hg-faq-row.active .hg-faq-content {
    max-height: 500px;
    padding-bottom: 24px;
  }

  /* Sector Cards Grid System */
  .hg-ind-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 28px;
    max-width: 1240px;
    margin: 0 auto;
    padding: 0 24px;
  }

  .hg-ind-card {
    background: #ffffff;
    border: 1.5px solid rgba(8, 12, 22, 0.08);
    border-radius: 20px;
    padding: 36px 30px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    transition: all 0.35s cubic-bezier(0.16, 1, 0.3, 1);
    position: relative;
    box-shadow: 0 8px 24px rgba(8, 12, 22, 0.03);
  }

  .hg-ind-card:hover {
    transform: translateY(-6px);
    border-color: #080c16;
    box-shadow: 0 20px 48px rgba(8, 12, 22, 0.12);
  }

  .hg-ind-card-tag {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    font-size: 0.78rem;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 0.06em;
    padding: 5px 12px;
    border-radius: 9999px;
    width: fit-content;
    margin-bottom: 18px;
  }

  .hg-tag-tech { background: #eff6ff; color: #1d4ed8; }
  .hg-tag-fin { background: #ecfdf5; color: #047857; }
  .hg-tag-health { background: #fdf2f8; color: #be185d; }
  .hg-tag-ecom { background: #fff7ed; color: #c2410c; }
  .hg-tag-studio { background: #faf5ff; color: #7e22ce; }
  .hg-tag-mfg { background: #fffbeb; color: #b45309; }

  .hg-ind-card h3 {
    font-size: 1.45rem;
    font-weight: 800;
    color: #080c16;
    margin-bottom: 12px;
    line-height: 1.25;
  }

  .hg-ind-card-desc {
    font-size: 0.95rem;
    color: #64748b;
    line-height: 1.65;
    margin-bottom: 22px;
  }

  .hg-ind-features {
    list-style: none;
    padding: 0;
    margin: 0 0 28px 0;
    display: flex;
    flex-direction: column;
    gap: 10px;
  }

  .hg-ind-features li {
    display: flex;
    align-items: center;
    gap: 10px;
    font-size: 0.92rem;
    font-weight: 600;
    color: #334155;
  }

  .hg-ind-features li svg {
    flex-shrink: 0;
    color: #10b981;
  }

  .hg-ind-card-footer {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding-top: 20px;
    border-top: 1px solid rgba(8, 12, 22, 0.07);
    margin-top: auto;
  }

  .hg-ind-stat-badge {
    display: flex;
    flex-direction: column;
  }

  .hg-ind-stat-val {
    font-family: 'JetBrains Mono', monospace;
    font-size: 1.15rem;
    font-weight: 800;
    color: #080c16;
  }

  .hg-ind-stat-lbl {
    font-size: 0.72rem;
    font-weight: 700;
    text-transform: uppercase;
    color: #64748b;
  }

  .hg-ind-btn {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    font-size: 0.88rem;
    font-weight: 800;
    color: #080c16 !important;
    text-decoration: none !important;
    transition: transform 0.2s ease;
  }

  .hg-ind-btn:hover {
    transform: translateX(4px);
    color: #f59e0b !important;
  }

  /* Responsive Rules */
  @media (max-width: 1024px) {
    .hg-ind-grid {
      grid-template-columns: repeat(2, 1fr);
      gap: 22px;
    }
  }

  @media (max-width: 768px) {
    .hg-ind-grid {
      grid-template-columns: 1fr;
      gap: 18px;
    }
    .hg-faq-toolbar-wrap {
      flex-direction: column;
      align-items: stretch;
      gap: 12px;
    }
    .hg-faq-search-box {
      width: 100%;
    }
    .hg-faq-trigger {
      padding: 18px 20px;
      font-size: 1rem;
    }
    .hg-faq-content {
      padding: 0 20px;
    }
    .hg-hero-section {
      padding: 50px 20px 40px 20px !important;
    }
  }
</style>

<!-- MAIN HUGO INDUSTRIES CONTENT ROOT -->
<div id="hugo-ind-root">

  <!-- Ambient Floating Background Blobs -->
  <div class="hg-ambient-orb hg-orb-gold" style="top: 80px; left: -100px; width: 420px; height: 420px; border-radius: 50%; background: radial-gradient(circle, rgba(255,199,0,0.18) 0%, transparent 70%); position: absolute; pointer-events: none; z-index: 1;"></div>
  <div class="hg-ambient-orb hg-orb-cyan" style="top: 350px; right: -120px; width: 500px; height: 500px; border-radius: 50%; background: radial-gradient(circle, rgba(6,182,212,0.14) 0%, transparent 70%); position: absolute; pointer-events: none; z-index: 1;"></div>
  <div class="hg-bg-grid-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-image: radial-gradient(rgba(8,12,22,0.06) 1px, transparent 0); background-size: 32px 32px; pointer-events: none; z-index: 1;"></div>

  <!-- SECTION 1: HERO SECTION -->
  <section class="hg-section hg-hero-section" style="position: relative; z-index: 3; padding: 80px 24px 60px 24px; text-align: center; max-width: 1100px; margin: 0 auto;">
    
    <!-- Hero Badge -->
    <div style="display: inline-flex; align-items: center; gap: 8px; background: rgba(255, 199, 0, 0.22); border: 1.5px solid #ffc700; border-radius: 9999px; padding: 7px 18px; margin-bottom: 24px;">
      <span style="width: 8px; height: 8px; border-radius: 50%; background: #080c16; display: inline-block;"></span>
      <span style="font-family: 'Outfit', sans-serif; font-size: 0.85rem; font-weight: 800; color: #080c16; text-transform: uppercase; letter-spacing: 0.06em;">Industries We Support &bull; Sector Solutions</span>
    </div>

    <!-- Main Title -->
    <h1 style="font-size: clamp(2.4rem, 5vw, 4rem); font-weight: 900; line-height: 1.12; color: #080c16; letter-spacing: -0.03em; margin: 0 0 22px 0;">
      Enterprise Expansion Built <br/>
      <span style="color: #ffc700; background: #080c16; padding: 0 16px; border-radius: 12px; display: inline-block; transform: rotate(-0.5deg); margin-top: 4px;">Around Your Industry</span>
    </h1>

    <!-- Subtitle Lead -->
    <p style="font-size: clamp(1.05rem, 2vw, 1.25rem); color: #475569; max-width: 820px; margin: 0 auto 36px auto; line-height: 1.7; font-weight: 500;">
      Tailored operational setups, specialized staffing pods, regulatory roadmaps, and turnkey facilities engineered specifically for global enterprises scaling their footprint in India.
    </p>

    <!-- Hero CTA Buttons -->
    <div style="display: flex; gap: 16px; justify-content: center; align-items: center; flex-wrap: wrap;">
      <a href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>" style="display: inline-flex; align-items: center; gap: 10px; background: #080c16; color: #ffffff !important; font-family: 'Outfit', sans-serif; font-weight: 800; font-size: 1.05rem; padding: 15px 34px; border-radius: 9999px; text-decoration: none !important; box-shadow: 0 8px 24px rgba(8,12,22,0.25); transition: transform 0.2s ease;">
        <span>Schedule Industry Consultation</span>
        <span>&rarr;</span>
      </a>
      <a href="#sectors-grid" style="display: inline-flex; align-items: center; gap: 8px; background: #ffffff; color: #080c16 !important; font-family: 'Outfit', sans-serif; font-weight: 800; font-size: 1.02rem; padding: 14px 30px; border-radius: 9999px; text-decoration: none !important; border: 2px solid #080c16; transition: background 0.2s ease;">
        <span>Explore All 6 Sectors</span>
      </a>
    </div>

    <!-- Quick Pill Badges -->
    <div style="display: flex; gap: 10px; justify-content: center; flex-wrap: wrap; margin-top: 42px;">
      <span style="background: #ffffff; border: 1px solid rgba(8,12,22,0.12); border-radius: 9999px; padding: 6px 16px; font-size: 0.84rem; font-weight: 700; color: #334155;">&bull; Tech &amp; SaaS</span>
      <span style="background: #ffffff; border: 1px solid rgba(8,12,22,0.12); border-radius: 9999px; padding: 6px 16px; font-size: 0.84rem; font-weight: 700; color: #334155;">&bull; Banking &amp; FinTech</span>
      <span style="background: #ffffff; border: 1px solid rgba(8,12,22,0.12); border-radius: 9999px; padding: 6px 16px; font-size: 0.84rem; font-weight: 700; color: #334155;">&bull; Healthcare &amp; BioTech</span>
      <span style="background: #ffffff; border: 1px solid rgba(8,12,22,0.12); border-radius: 9999px; padding: 6px 16px; font-size: 0.84rem; font-weight: 700; color: #334155;">&bull; E-Commerce &amp; Retail</span>
      <span style="background: #ffffff; border: 1px solid rgba(8,12,22,0.12); border-radius: 9999px; padding: 6px 16px; font-size: 0.84rem; font-weight: 700; color: #334155;">&bull; Creative Studios</span>
      <span style="background: #ffffff; border: 1px solid rgba(8,12,22,0.12); border-radius: 9999px; padding: 6px 16px; font-size: 0.84rem; font-weight: 700; color: #334155;">&bull; Manufacturing</span>
    </div>
  </section>

  <!-- SECTION 2: INDUSTRY CAPABILITY MATRIX (6 SECTORS) -->
  <section id="sectors-grid" style="position: relative; z-index: 3; padding: 60px 0 80px 0;">
    <div style="text-align: center; max-width: 800px; margin: 0 auto 50px auto; padding: 0 20px;">
      <h2 style="font-size: clamp(1.9rem, 3.5vw, 2.7rem); font-weight: 900; color: #080c16; letter-spacing: -0.025em; margin-bottom: 14px;">Specialized Capabilities by Sector</h2>
      <p style="font-size: 1.05rem; color: #64748b; line-height: 1.65;">Every industry has unique compliance mandates, talent profiles, and operational standards. We provide battle-tested playbooks customized for your sector.</p>
    </div>

    <div class="hg-ind-grid">

      <!-- Sector Card 1: Tech & SaaS -->
      <div class="hg-ind-card">
        <div>
          <span class="hg-ind-card-tag hg-tag-tech">Software &bull; Cloud &bull; AI</span>
          <h3>Technology, Cloud &amp; SaaS</h3>
          <p class="hg-ind-card-desc">Scale high-velocity engineering pods, AI/ML research labs, and 24/7 global cloud SRE teams in India's top tech hubs.</p>
          <ul class="hg-ind-features">
            <li>
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
              <span>Dedicated Global Capability Centers (GCCs)</span>
            </li>
            <li>
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
              <span>Follow-the-Sun DevOps &amp; Support</span>
            </li>
            <li>
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
              <span>SOC2 Type II &amp; ISO 27001 Workstations</span>
            </li>
          </ul>
        </div>
        <div class="hg-ind-card-footer">
          <div class="hg-ind-stat-badge">
            <span class="hg-ind-stat-val">65-70%</span>
            <span class="hg-ind-stat-lbl">Cost Efficiency</span>
          </div>
          <a href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>" class="hg-ind-btn">
            <span>Inquire Sector</span>
            <span>&rarr;</span>
          </a>
        </div>
      </div>

      <!-- Sector Card 2: Banking & FinTech -->
      <div class="hg-ind-card">
        <div>
          <span class="hg-ind-card-tag hg-tag-fin">Banking &bull; Quant &bull; RegTech</span>
          <h3>Financial Services &amp; FinTech</h3>
          <p class="hg-ind-card-desc">Bank-grade operational setups with end-to-end regulatory adherence, financial modeling, AML/KYC pods, and quant risk teams.</p>
          <ul class="hg-ind-features">
            <li>
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
              <span>RBI, SEBI &amp; Cross-Border Compliance</span>
            </li>
            <li>
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
              <span>Air-Gapped Secure Infrastructure</span>
            </li>
            <li>
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
              <span>Specialized Chartered Accountancy &amp; Tax</span>
            </li>
          </ul>
        </div>
        <div class="hg-ind-card-footer">
          <div class="hg-ind-stat-badge">
            <span class="hg-ind-stat-val">100%</span>
            <span class="hg-ind-stat-lbl">Audit Ready</span>
          </div>
          <a href="<?php echo esc_url( home_url( '/banking-finance-setup/' ) ); ?>" class="hg-ind-btn">
            <span>Inquire Sector</span>
            <span>&rarr;</span>
          </a>
        </div>
      </div>

      <!-- Sector Card 3: Healthcare & Life Sciences -->
      <div class="hg-ind-card">
        <div>
          <span class="hg-ind-card-tag hg-tag-health">Clinical &bull; BioTech &bull; HealthTech</span>
          <h3>Healthcare &amp; Life Sciences</h3>
          <p class="hg-ind-card-desc">HIPAA-compliant data workflows, clinical research documentation, telehealth back-office, and specialized biomedical analysis.</p>
          <ul class="hg-ind-features">
            <li>
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
              <span>HIPAA &amp; GDPR Data Governance</span>
            </li>
            <li>
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
              <span>Certified Clinical Data Management</span>
            </li>
            <li>
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
              <span>24/7 Medical Coding &amp; Billing Teams</span>
            </li>
          </ul>
        </div>
        <div class="hg-ind-card-footer">
          <div class="hg-ind-stat-badge">
            <span class="hg-ind-stat-val">99.9%</span>
            <span class="hg-ind-stat-lbl">Data Accuracy</span>
          </div>
          <a href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>" class="hg-ind-btn">
            <span>Inquire Sector</span>
            <span>&rarr;</span>
          </a>
        </div>
      </div>

      <!-- Sector Card 4: E-Commerce & Retail -->
      <div class="hg-ind-card">
        <div>
          <span class="hg-ind-card-tag hg-tag-ecom">Supply Chain &bull; Retail &bull; D2C</span>
          <h3>E-Commerce &amp; Retail</h3>
          <p class="hg-ind-card-desc">High-scale catalog enrichment, digital merchandising, supply chain logistics management, and 24/7 omnichannel customer experience.</p>
          <ul class="hg-ind-features">
            <li>
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
              <span>Global 24/7 CX &amp; VIP Concierge</span>
            </li>
            <li>
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
              <span>Real-Time Catalog &amp; Media Enrichment</span>
            </li>
            <li>
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
              <span>Vendor Onboarding &amp; Reconciliation</span>
            </li>
          </ul>
        </div>
        <div class="hg-ind-card-footer">
          <div class="hg-ind-stat-badge">
            <span class="hg-ind-stat-val">2.4M+</span>
            <span class="hg-ind-stat-lbl">Tickets / Year</span>
          </div>
          <a href="<?php echo esc_url( home_url( '/customer-experience/' ) ); ?>" class="hg-ind-btn">
            <span>Inquire Sector</span>
            <span>&rarr;</span>
          </a>
        </div>
      </div>

      <!-- Sector Card 5: Creative & Media Studios -->
      <div class="hg-ind-card">
        <div>
          <span class="hg-ind-card-tag hg-tag-studio">VFX &bull; 3D &bull; Animation &bull; Gaming</span>
          <h3>Creative &amp; Media Studios</h3>
          <p class="hg-ind-card-desc">State-of-the-art production studios, Unreal Engine pipelines, 3D architectural rendering, and dedicated VFX animation squads.</p>
          <ul class="hg-ind-features">
            <li>
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
              <span>High-End GPU Hardware &amp; Render Farms</span>
            </li>
            <li>
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
              <span>TPN &amp; Motion Picture Security Standards</span>
            </li>
            <li>
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
              <span>Acoustically Calibrated Sound/Video Pods</span>
            </li>
          </ul>
        </div>
        <div class="hg-ind-card-footer">
          <div class="hg-ind-stat-badge">
            <span class="hg-ind-stat-val">4K / 8K</span>
            <span class="hg-ind-stat-lbl">Pipeline Ready</span>
          </div>
          <a href="<?php echo esc_url( home_url( '/studio-setup/' ) ); ?>" class="hg-ind-btn">
            <span>Inquire Sector</span>
            <span>&rarr;</span>
          </a>
        </div>
      </div>

      <!-- Sector Card 6: Advanced Manufacturing -->
      <div class="hg-ind-card">
        <div>
          <span class="hg-ind-card-tag hg-tag-mfg">Industrial &bull; Hardware &bull; Logistics</span>
          <h3>Manufacturing &amp; Engineering</h3>
          <p class="hg-ind-card-desc">Strategic factory site selection, vendor quality engineering, state subsidy navigation, and industrial import/export clearances.</p>
          <ul class="hg-ind-features">
            <li>
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
              <span>Industrial Land &amp; Facility Scouting</span>
            </li>
            <li>
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
              <span>Pollution &amp; Factory Inspector Approvals</span>
            </li>
            <li>
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
              <span>PLI &amp; State Government Incentive Claims</span>
            </li>
          </ul>
        </div>
        <div class="hg-ind-card-footer">
          <div class="hg-ind-stat-badge">
            <span class="hg-ind-stat-val">30-40%</span>
            <span class="hg-ind-stat-lbl">Capex Savings</span>
          </div>
          <a href="<?php echo esc_url( home_url( '/factory-manufacturing-setup/' ) ); ?>" class="hg-ind-btn">
            <span>Inquire Sector</span>
            <span>&rarr;</span>
          </a>
        </div>
      </div>

    </div>
  </section>

  <!-- SECTION 3: WHY BUSINESSES CHOOSE OVERSEAS MOGULS -->
  <section style="position: relative; z-index: 3; padding: 70px 24px; background: #080c16; color: #ffffff; margin-top: 40px;">
    <div style="max-width: 1200px; margin: 0 auto;">
      <div style="text-align: center; max-width: 800px; margin: 0 auto 50px auto;">
        <span style="font-family: 'JetBrains Mono', monospace; font-size: 0.82rem; font-weight: 700; color: #ffc700; text-transform: uppercase; letter-spacing: 0.1em; display: inline-block; margin-bottom: 12px;">Enterprise Assurance</span>
        <h2 style="font-size: clamp(2rem, 4vw, 3rem); font-weight: 900; color: #ffffff; letter-spacing: -0.025em; margin-bottom: 16px;">Why Enterprise Leaders Partner with Overseas Moguls</h2>
        <p style="font-size: 1.05rem; color: #94a3b8; line-height: 1.65;">Eliminating cross-border friction with institutional-grade governance, battle-tested talent infrastructure, and transparent execution.</p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 24px;">
        <div style="background: rgba(255, 255, 255, 0.04); border: 1px solid rgba(255, 255, 255, 0.1); border-radius: 16px; padding: 32px 24px;">
          <div style="font-family: 'JetBrains Mono', monospace; font-size: 2.4rem; font-weight: 800; color: #ffc700; margin-bottom: 8px;">99.8%</div>
          <h4 style="font-size: 1.15rem; font-weight: 800; color: #ffffff; margin-bottom: 10px;">Operational SLA</h4>
          <p style="font-size: 0.92rem; color: #94a3b8; line-height: 1.6; margin: 0;">Rigorous uptime, enterprise-grade facilities with dual power grids, and redundant high-speed fiber backbones.</p>
        </div>

        <div style="background: rgba(255, 255, 255, 0.04); border: 1px solid rgba(255, 255, 255, 0.1); border-radius: 16px; padding: 32px 24px;">
          <div style="font-family: 'JetBrains Mono', monospace; font-size: 2.4rem; font-weight: 800; color: #ffc700; margin-bottom: 8px;">60-70%</div>
          <h4 style="font-size: 1.15rem; font-weight: 800; color: #ffffff; margin-bottom: 10px;">Cost Advantage</h4>
          <p style="font-size: 0.92rem; color: #94a3b8; line-height: 1.6; margin: 0;">Drastically optimize engineering, operational, and administrative cost structures without sacrificing quality.</p>
        </div>

        <div style="background: rgba(255, 255, 255, 0.04); border: 1px solid rgba(255, 255, 255, 0.1); border-radius: 16px; padding: 32px 24px;">
          <div style="font-family: 'JetBrains Mono', monospace; font-size: 2.4rem; font-weight: 800; color: #ffc700; margin-bottom: 8px;">14 Days</div>
          <h4 style="font-size: 1.15rem; font-weight: 800; color: #ffffff; margin-bottom: 10px;">Rapid Deployment</h4>
          <p style="font-size: 0.92rem; color: #94a3b8; line-height: 1.6; margin: 0;">Pre-built operational frameworks, existing plug-and-play real estate, and active talent pipelines for instant ramp-up.</p>
        </div>

        <div style="background: rgba(255, 255, 255, 0.04); border: 1px solid rgba(255, 255, 255, 0.1); border-radius: 16px; padding: 32px 24px;">
          <div style="font-family: 'JetBrains Mono', monospace; font-size: 2.4rem; font-weight: 800; color: #ffc700; margin-bottom: 8px;">100%</div>
          <h4 style="font-size: 1.15rem; font-weight: 800; color: #ffffff; margin-bottom: 10px;">IP Protection</h4>
          <p style="font-size: 0.92rem; color: #94a3b8; line-height: 1.6; margin: 0;">Watertight bilateral employment agreements, direct IP assignment covenants, and SOC2 compliant physical/cloud security.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 4: FREQUENTLY ASKED QUESTIONS ACCORDION -->
  <section style="position: relative; z-index: 3; padding: 80px 24px 60px 24px;">
    <div style="text-align: center; max-width: 800px; margin: 0 auto 40px auto;">
      <span style="font-family: 'JetBrains Mono', monospace; font-size: 0.82rem; font-weight: 700; color: #b45309; text-transform: uppercase; letter-spacing: 0.1em; display: inline-block; margin-bottom: 10px;">Got Questions?</span>
      <h2 style="font-size: clamp(1.9rem, 3.5vw, 2.7rem); font-weight: 900; color: #080c16; letter-spacing: -0.025em; margin-bottom: 12px;">Frequently Asked Questions</h2>
      <p style="font-size: 1.02rem; color: #64748b; line-height: 1.6;">Key details regarding sector timelines, regulatory frameworks, IP ownership, and staffing structures.</p>
    </div>

    <!-- Live FAQ List Accordion -->
    <div class="hg-hugo-faq-list">

      <div class="hg-faq-row active">
        <button class="hg-faq-trigger" type="button" aria-expanded="true">
          <span>How fast can an industry-specific operation be launched in India?</span>
          <span class="hg-faq-icon">+</span>
        </button>
        <div class="hg-faq-content" style="max-height: 500px; padding-bottom: 24px;">
          Depending on your model, teams can be deployed in as little as 14 to 21 days under our Employer of Record (EOR) / Managed Services framework. For custom dedicated Global Capability Centers (GCCs) or physical factory/studio setups, typical execution timelines range from 4 to 8 weeks.
        </div>
      </div>

      <div class="hg-faq-row">
        <button class="hg-faq-trigger" type="button" aria-expanded="false">
          <span>How does Overseas Moguls protect our intellectual property and client data?</span>
          <span class="hg-faq-icon">+</span>
        </button>
        <div class="hg-faq-content">
          All contracts are governed by bilateral international agreements with strict, non-negotiable IP assignment clauses. Workstations and facilities are equipped with enterprise endpoint security, encrypted VPNs, role-based access control, and complete compliance with SOC2, ISO 27001, and HIPAA where required.
        </div>
      </div>

      <div class="hg-faq-row">
        <button class="hg-faq-trigger" type="button" aria-expanded="false">
          <span>Which Indian cities are best suited for our specific industry?</span>
          <span class="hg-faq-icon">+</span>
        </button>
        <div class="hg-faq-content">
          Different cities excel in specific domains: Bengaluru and Hyderabad are optimal for SaaS, AI, and Tech R&amp;D; Mumbai and Pune lead in FinTech, BFSI, and Automotive Engineering; Delhi-NCR and Chennai excel in Hardware Manufacturing, E-Commerce, and Telecom. We conduct detailed demographic and real-estate feasibility studies for your sector.
        </div>
      </div>

      <div class="hg-faq-row">
        <button class="hg-faq-trigger" type="button" aria-expanded="false">
          <span>What engagement models do you offer for global enterprises?</span>
          <span class="hg-faq-icon">+</span>
        </button>
        <div class="hg-faq-content">
          We offer three primary engagement models: (1) Turnkey GCC Setup &amp; Transfer (BOT - Build, Operate, Transfer), (2) Dedicated Managed Services &amp; Staffing Pods, and (3) Strategic Advisory for Entity Incorporation, Licensing, and Real Estate Build-out.
        </div>
      </div>

      <div class="hg-faq-row">
        <button class="hg-faq-trigger" type="button" aria-expanded="false">
          <span>Can we visit the facilities and participate in candidate interviews?</span>
          <span class="hg-faq-icon">+</span>
        </button>
        <div class="hg-faq-content">
          Absolutely. You have 100% executive oversight. You interview and approve every candidate on your team, dictate culture and software toolchains, and are welcome to tour our hubs or host on-site executive workshops at any time.
        </div>
      </div>

    </div>
  </section>

  <!-- SECTION 5: FINAL STRATEGY CONSULTATION CTA BANNER -->
  <section style="position: relative; z-index: 3; padding: 40px 24px 80px 24px; max-width: 1100px; margin: 0 auto;">
    <div style="background: #f5b82e; border-radius: 24px; padding: 48px 40px; display: flex; align-items: center; justify-content: space-between; gap: 32px; flex-wrap: wrap; box-shadow: 0 16px 40px rgba(245, 184, 46, 0.35);">
      <div style="flex: 1; min-width: 280px;">
        <h3 style="font-size: clamp(1.8rem, 3vw, 2.4rem); font-weight: 900; color: #080c16; margin-bottom: 12px; line-height: 1.2;">Ready to Build Your Industry Footprint in India?</h3>
        <p style="font-size: 1.05rem; font-weight: 600; color: rgba(8, 12, 22, 0.85); margin: 0; line-height: 1.6;">Schedule an executive strategy session with our sector leads to map out your timeline, staffing models, and regulatory roadmaps.</p>
      </div>
      <div>
        <a href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>" style="display: inline-flex; align-items: center; gap: 10px; background: #080c16; color: #ffffff !important; font-family: 'Outfit', sans-serif; font-weight: 800; font-size: 1.05rem; padding: 16px 36px; border-radius: 9999px; text-decoration: none !important; box-shadow: 0 8px 24px rgba(8,12,22,0.3); transition: transform 0.2s ease;">
          <span>Schedule Strategy Session</span>
          <span>&rarr;</span>
        </a>
      </div>
    </div>
  </section>

</div>

<!-- INTERACTIVE ACCORDION JAVASCRIPT -->
<script>
document.addEventListener('DOMContentLoaded', function() {
  const faqRows = document.querySelectorAll('.hg-faq-row');
  faqRows.forEach(function(row) {
    const trigger = row.querySelector('.hg-faq-trigger');
    const content = row.querySelector('.hg-faq-content');
    if (!trigger || !content) return;

    trigger.addEventListener('click', function(e) {
      e.preventDefault();
      const isActive = row.classList.contains('active');

      // Close all other rows
      faqRows.forEach(function(other) {
        if (other !== row) {
          other.classList.remove('active');
          const otherTrigger = other.querySelector('.hg-faq-trigger');
          const otherContent = other.querySelector('.hg-faq-content');
          if (otherTrigger) otherTrigger.setAttribute('aria-expanded', 'false');
          if (otherContent) otherContent.style.maxHeight = '0px';
        }
      });

      // Toggle current
      if (isActive) {
        row.classList.remove('active');
        trigger.setAttribute('aria-expanded', 'false');
        content.style.maxHeight = '0px';
      } else {
        row.classList.add('active');
        trigger.setAttribute('aria-expanded', 'true');
        content.style.maxHeight = content.scrollHeight + 30 + 'px';
      }
    });
  });
});
</script>

<?php
get_footer();
