<?php
/**
 * Master Homepage Template (PDF Content + High-End 3D Visual Graphics & Fail-Safe Animations)
 *
 * @package Overseas_Bridge
 */

get_header();
?>


    <div class="opening-status-text">Initializing Gateway Telemetry...</div>
  </div>
</div>

<!-- SECTION 1: HERO SECTION (PDF SECTION 1 COPY & ABSTRACT INDIA-TO-WORLD BRIDGE VISUAL) -->
<section class="hero-section hero-pdf-layout">
  <!-- SCOPED HERO ENHANCEMENT STYLES: LARGER VISUAL + ZERO AWKWARD GAP + 100% RESPONSIVE -->
  <style id="ob-hero-layout-master-enhancement">
    .hero-section {
      min-height: 85vh !important;
      padding-top: 140px !important;
      padding-bottom: 70px !important;
      overflow: visible !important;
    }
    .hero-grid {
      display: grid !important;
      grid-template-columns: 1fr 1.08fr !important;
      gap: 32px !important;
      align-items: center !important;
      width: 100% !important;
    }
    .hero-content {
      max-width: 580px !important;
      width: 100% !important;
      grid-column: 1 !important;
      order: 1 !important;
    }
    .hero-visual {
      grid-column: 2 !important;
      order: 2 !important;
      display: flex !important;
      align-items: center !important;
      justify-content: center !important;
      width: 100% !important;
      position: relative !important;
      overflow: visible !important;
      padding: 0 !important;
    }
    .hugo-network-container {
      position: relative !important;
      width: 540px !important;
      height: 500px !important;
      max-width: 100% !important;
      transform: scale(1.16) !important;
      transform-origin: center center !important;
      margin: 10px auto !important;
      display: flex !important;
      align-items: center !important;
      justify-content: center !important;
      transition: transform 0.35s ease !important;
    }
    .hero-network-float {
      animation: heroFloatBig 5s ease-in-out infinite alternate !important;
    }
    @keyframes heroFloatBig {
      0% { transform: scale(1.16) translateY(0px); }
      100% { transform: scale(1.16) translateY(-10px); }
    }
    .node-avatar-ring {
      transition: transform 0.3s cubic-bezier(0.16, 1, 0.3, 1), box-shadow 0.3s ease !important;
    }
    .hugo-team-node:hover .node-avatar-ring {
      transform: scale(1.12) !important;
    }
    .ring-yellow { box-shadow: 0 0 28px rgba(255, 199, 0, 0.65), 0 8px 20px rgba(0, 0, 0, 0.12) !important; }
    .ring-purple { box-shadow: 0 0 28px rgba(192, 132, 252, 0.65), 0 8px 20px rgba(0, 0, 0, 0.12) !important; }
    .ring-orange { box-shadow: 0 0 28px rgba(249, 115, 22, 0.65), 0 8px 20px rgba(0, 0, 0, 0.12) !important; }
    .ring-green { box-shadow: 0 0 28px rgba(16, 185, 129, 0.65), 0 8px 20px rgba(0, 0, 0, 0.12) !important; }
    .ring-cyan { box-shadow: 0 0 28px rgba(0, 180, 216, 0.65), 0 8px 20px rgba(0, 0, 0, 0.12) !important; }
    .ring-amber { box-shadow: 0 0 28px rgba(245, 158, 11, 0.65), 0 8px 20px rgba(0, 0, 0, 0.12) !important; }

    /* Laptops (1025px - 1280px) */
    @media (max-width: 1280px) and (min-width: 1025px) {
      .hero-grid {
        grid-template-columns: 1fr 1fr !important;
        gap: 24px !important;
      }
      .hugo-network-container {
        transform: scale(1.04) !important;
      }
      @keyframes heroFloatBig {
        0% { transform: scale(1.04) translateY(0px); }
        100% { transform: scale(1.04) translateY(-8px); }
      }
    }

    /* Tablets (769px - 1024px) */
    @media (max-width: 1024px) and (min-width: 769px) {
      .hero-section {
        padding-top: 135px !important;
        padding-bottom: 60px !important;
      }
      .hero-grid {
        display: flex !important;
        flex-direction: column !important;
        align-items: center !important;
        gap: 36px !important;
      }
      .hero-content {
        max-width: 680px !important;
        text-align: center !important;
        display: flex !important;
        flex-direction: column !important;
        align-items: center !important;
      }
      .hero-actions {
        justify-content: center !important;
      }
      .hero-proof-card {
        margin-left: auto !important;
        margin-right: auto !important;
      }
      .hugo-network-container {
        transform: scale(0.95) !important;
        transform-origin: center top !important;
        margin: 10px auto -15px auto !important;
      }
      @keyframes heroFloatBig {
        0% { transform: scale(0.95) translateY(0px); }
        100% { transform: scale(0.95) translateY(-6px); }
      }
    }

    /* Mobile Smartphones (<= 768px) */
    @media (max-width: 768px) {
      .hero-grid {
        display: flex !important;
        flex-direction: column !important;
        gap: 24px !important;
      }
      .hugo-network-container {
        transform: scale(0.72) !important;
        transform-origin: center top !important;
        margin: 0 auto -120px auto !important;
      }
      @keyframes heroFloatBig {
        0% { transform: scale(0.72) translateY(0px); }
        100% { transform: scale(0.72) translateY(-4px); }
      }
    }

    /* Narrow Mobile Smartphones (<= 480px) */
    @media (max-width: 480px) {
      .hugo-network-container {
        transform: scale(0.62) !important;
        transform-origin: center top !important;
        margin: 0 auto -160px auto !important;
      }
      @keyframes heroFloatBig {
        0% { transform: scale(0.62) translateY(0px); }
        100% { transform: scale(0.62) translateY(-3px); }
      }
    }
  </style>
  <div class="theme-container">
    <div class="hero-grid">
      <!-- LEFT COLUMN: PDF H1, COPY, & CTAS -->
      <div class="hero-content hero-entrance-anim" style="grid-column: 1; order: 1;">
        <div class="hero-section-tag-pill">
          <span>INDIA MARKET ENTRY & OPERATIONS</span>
        </div>

                                <h1 class="hero-pdf-h1">
          <span class="hero-title-line line-1">Set Up and Operate</span>
          <span class="hero-title-line line-2">Your Business in India</span>
        </h1>

        <p class="hero-subtitle">
          From market-entry strategy and company formation to banking, compliance, hiring and operational launch—Overseas Bridge brings every workstream together through one clear plan and one accountable point of contact.
        </p>

        <div class="hero-actions">
          <a href="#roadmap-form-section" class="btn-primary hero-btn-glow">
            <span>Request Your India Setup Roadmap</span>
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>

          <a href="<?php echo esc_url( home_url( '/services-overview' ) ); ?>" class="btn-secondary">Explore Our Services &rarr;</a>
        </div>

                <!-- HERO SPOTLIGHT PROOF CARD (COMPACT HIGH-EFFICIENCY HORIZONTAL LAYOUT - 280px-340px MAX) -->
        <div class="spotlight-badge-card hero-proof-card" style="background: #a2ecec !important; border: 1px solid #7dd3fc !important; border-radius: 24px !important; padding: 18px 24px !important; box-shadow: 0 12px 30px rgba(15, 23, 42, 0.07) !important; margin-top: 20px !important; position: relative !important; overflow: hidden !important; width: 100% !important; max-width: 600px !important; min-height: 128px !important; box-sizing: border-box !important;">
          <div style="display: flex !important; align-items: center !important; gap: 16px !important; height: 100% !important; min-height: 100% !important;">
            
            <!-- LEFT: COMPACT AVATAR (72px / GRADIENT RING) -->
            <div style="flex-shrink: 0 !important; position: relative !important;">
              <div class="spotlight-avatar-ring" style="width: 72px !important; height: 72px !important; min-width: 72px !important; min-height: 72px !important; aspect-ratio: 1 / 1 !important; border-radius: 50% !important; background: linear-gradient(135deg, #ffc700 0%, #00b4d8 100%) !important; padding: 3px !important; box-shadow: 0 6px 16px rgba(0, 180, 216, 0.2) !important; overflow: hidden !important; display: flex !important; align-items: center !important; justify-content: center !important; flex-shrink: 0 !important;">
                <img id="spotlight-img" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/team-avatar-lead.jpg' ); ?>" alt="Spotlight Specialist" width="72" height="72" style="width: 100% !important; height: 100% !important; aspect-ratio: 1 / 1 !important; border-radius: 50% !important; object-fit: cover !important; display: block !important;" />
              </div>
            </div>

            <!-- CENTER & RIGHT: COMPACT HEADING + DESCRIPTION + INLINE PROGRESS -->
            <div style="flex-grow: 1 !important; min-width: 0 !important; display: flex !important; flex-direction: column !important; justify-content: center !important;">
              <h3 id="spotlight-author" style="font-family: 'Outfit', 'Inter', sans-serif !important; font-size: 1.05rem !important; font-weight: 800 !important; color: #080c16 !important; margin: 0 0 4px 0 !important; line-height: 1.28 !important; letter-spacing: -0.01em !important; min-height: 2.56em !important; display: flex !important; align-items: center !important;">
                India Operating System – Turnkey Execution Model
              </h3>
              
              <div style="display: flex !important; align-items: center !important; justify-content: space-between !important; gap: 14px !important; min-height: 2.8em !important;">
                <p id="spotlight-quote" style="color: #1e293b !important; font-size: 0.86rem !important; line-height: 1.4 !important; margin: 0 !important; font-weight: 500 !important; flex: 1 1 auto !important; min-height: 2.8em !important; display: flex !important; align-items: center !important;">
                  Legal, finance, banking, people, premises and operational dependencies mapped into one clear, accountable roadmap for your business.
                </p>
                
                <!-- RIGHT: COMPACT PROGRESS PILL (110px TRACK) -->
                <div class="spotlight-progress-wrap" style="flex-shrink: 0 !important; width: 110px !important; height: 7px !important; background: #080c16 !important; border-radius: 10px !important; position: relative !important; overflow: hidden !important; display: flex !important; align-items: center !important;">
                  <!-- SLIDING CYAN FILL BAR -->
                  <div id="spotlight-fill" style="position: absolute !important; top: 0 !important; left: 0 !important; height: 100% !important; width: 0% !important; background: #00b4d8 !important; border-radius: 10px !important; transition: width 0.05s linear !important;"></div>
                  <!-- WHITE SEGMENT DOT BREAKS -->
                  <div style="position: absolute !important; left: 25% !important; width: 6px !important; height: 6px !important; background: #ffffff !important; border-radius: 50% !important; transform: translateX(-50%) !important; z-index: 5 !important;"></div>
                  <div style="position: absolute !important; left: 50% !important; width: 6px !important; height: 6px !important; background: #ffffff !important; border-radius: 50% !important; transform: translateX(-50%) !important; z-index: 5 !important;"></div>
                  <div style="position: absolute !important; left: 75% !important; width: 6px !important; height: 6px !important; background: #ffffff !important; border-radius: 50% !important; transform: translateX(-50%) !important; z-index: 5 !important;"></div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

      <!-- RIGHT COLUMN: ABSTRACT INDIA-TO-WORLD BRIDGE & OPERATIONAL NETWORK ANIMATION -->
      <div class="hero-visual" style="grid-column: 2; order: 2;">
        <div class="hugo-network-container hero-network-float">

          <!-- FLOATING LIVE TELEMETRY BADGES (4 CORNERS) -->
          <div class="hugo-kpi-badge kpi-top-left badge-pulse-anim">
            <span class="kpi-dot-pulse"></span>
            <span>⚡ 100% Turnkey India Ops</span>
          </div>

          <div class="hugo-kpi-badge kpi-top-right badge-pulse-anim">
            <span class="kpi-dot-pulse" style="background: #a855f7; box-shadow: 0 0 8px #a855f7;"></span>
            <span>🚀 2-4 Wks Incorporation</span>
          </div>

          <div class="hugo-kpi-badge kpi-bottom-left badge-pulse-anim">
            <span class="kpi-dot-pulse" style="background: #00b4d8; box-shadow: 0 0 8px #00b4d8;"></span>
            <span>🛡️ 24/7 FDI & FEMA SLA</span>
          </div>

          <div class="hugo-kpi-badge kpi-bottom-right badge-pulse-anim">
            <span class="kpi-dot-pulse" style="background: #10b981; box-shadow: 0 0 8px #10b981;"></span>
            <span>🌐 500+ Pod Specialists</span>
          </div>

          <!-- FLOATING SPARKLE ACCENTS -->
          <div class="hugo-sparkle sparkle-1">✨</div>
          <div class="hugo-sparkle sparkle-2">✦</div>
          <div class="hugo-sparkle sparkle-3">⭐</div>

          <!-- DENSE 6-NODE INTERCONNECTED ABSTRACT BRIDGE SVG NETWORK -->
          <svg class="hugo-network-svg" viewBox="0 0 540 500" fill="none" xmlns="http://www.w3.org/2000/svg">
            <defs>
              <filter id="neon-glow" x="-20%" y="-20%" width="140%" height="140%">
                <feGaussianBlur stdDeviation="3" result="blur" />
                <feMerge>
                  <feMergeNode in="blur" />
                  <feMergeNode in="SourceGraphic" />
                </feMerge>
              </filter>

              <linearGradient id="grad-yellow" x1="0%" y1="0%" x2="100%" y2="100%">
                <stop offset="0%" stop-color="#ffc700" />
                <stop offset="100%" stop-color="#ff9900" />
              </linearGradient>

              <linearGradient id="grad-cyan" x1="0%" y1="0%" x2="100%" y2="100%">
                <stop offset="0%" stop-color="#00f0ff" />
                <stop offset="100%" stop-color="#0077b6" />
              </linearGradient>

              <linearGradient id="grad-purple" x1="0%" y1="0%" x2="100%" y2="100%">
                <stop offset="0%" stop-color="#c084fc" />
                <stop offset="100%" stop-color="#7e22ce" />
              </linearGradient>

              <linearGradient id="grad-coral" x1="0%" y1="0%" x2="100%" y2="100%">
                <stop offset="0%" stop-color="#ff7b00" />
                <stop offset="100%" stop-color="#ea580c" />
              </linearGradient>

              <linearGradient id="grad-green" x1="0%" y1="0%" x2="100%" y2="100%">
                <stop offset="0%" stop-color="#34d399" />
                <stop offset="100%" stop-color="#059669" />
              </linearGradient>
            </defs>

            <!-- Background Intersecting Ring Grid -->
            <circle cx="270" cy="110" r="70" stroke="rgba(255, 199, 0, 0.25)" stroke-width="2" stroke-dasharray="4 6"/>
            <circle cx="420" cy="190" r="70" stroke="rgba(192, 132, 252, 0.25)" stroke-width="2" stroke-dasharray="4 6"/>
            <circle cx="410" cy="340" r="75" stroke="rgba(249, 115, 22, 0.25)" stroke-width="2" stroke-dasharray="4 6"/>
            <circle cx="270" cy="410" r="70" stroke="rgba(16, 185, 129, 0.25)" stroke-width="2" stroke-dasharray="4 6"/>
            <circle cx="130" cy="340" r="75" stroke="rgba(0, 180, 216, 0.25)" stroke-width="2" stroke-dasharray="4 6"/>
            <circle cx="120" cy="190" r="70" stroke="rgba(245, 158, 11, 0.25)" stroke-width="2" stroke-dasharray="4 6"/>

            <!-- Interconnecting S-Curves & Flow Lines -->
            <path d="M 270 110 C 350 130, 420 150, 420 190" stroke="url(#grad-yellow)" stroke-width="4" stroke-linecap="round" class="hugo-svg-path" filter="url(#neon-glow)"/>
            <path d="M 420 190 C 440 260, 430 300, 410 340" stroke="url(#grad-purple)" stroke-width="4" stroke-linecap="round" class="hugo-svg-path" filter="url(#neon-glow)"/>
            <path d="M 410 340 C 350 380, 310 400, 270 410" stroke="url(#grad-coral)" stroke-width="4" stroke-linecap="round" class="hugo-svg-path" filter="url(#neon-glow)"/>
            <path d="M 270 410 C 190 390, 150 370, 130 340" stroke="url(#grad-green)" stroke-width="4" stroke-linecap="round" class="hugo-svg-path" filter="url(#neon-glow)"/>
            <path d="M 130 340 C 110 270, 115 230, 120 190" stroke="url(#grad-cyan)" stroke-width="4" stroke-linecap="round" class="hugo-svg-path" filter="url(#neon-glow)"/>
            <path d="M 120 190 C 180 140, 220 120, 270 110" stroke="url(#grad-yellow)" stroke-width="4" stroke-linecap="round" class="hugo-svg-path" filter="url(#neon-glow)"/>

            <!-- Cross-Mesh Inner Star Connectors -->
            <path d="M 270 110 L 270 410" stroke="rgba(255, 199, 0, 0.2)" stroke-width="2" stroke-dasharray="6 6"/>
            <path d="M 130 340 L 420 190" stroke="rgba(0, 180, 216, 0.2)" stroke-width="2" stroke-dasharray="6 6"/>
            <path d="M 120 190 L 410 340" stroke="rgba(249, 115, 22, 0.2)" stroke-width="2" stroke-dasharray="6 6"/>

            <!-- Rotating Neon Arc Rings -->
            <circle cx="270" cy="110" r="70" stroke="url(#grad-yellow)" stroke-width="5" stroke-linecap="round" stroke-dasharray="120 360" class="hugo-rotating-arc arc-1"/>
            <circle cx="420" cy="190" r="70" stroke="url(#grad-purple)" stroke-width="5" stroke-linecap="round" stroke-dasharray="130 360" class="hugo-rotating-arc arc-2"/>
            <circle cx="410" cy="340" r="75" stroke="url(#grad-coral)" stroke-width="5" stroke-linecap="round" stroke-dasharray="140 360" class="hugo-rotating-arc arc-3"/>
            <circle cx="270" cy="410" r="70" stroke="url(#grad-green)" stroke-width="5" stroke-linecap="round" stroke-dasharray="120 360" class="hugo-rotating-arc arc-4"/>
            <circle cx="130" cy="340" r="75" stroke="url(#grad-cyan)" stroke-width="5" stroke-linecap="round" stroke-dasharray="140 360" class="hugo-rotating-arc arc-5"/>
            <circle cx="120" cy="190" r="70" stroke="#f59e0b" stroke-width="5" stroke-linecap="round" stroke-dasharray="120 360" class="hugo-rotating-arc arc-6"/>
          </svg>

          <!-- 6 AVATAR TEAM NODES WITH RICH GRADIENT BADGES -->
          <div class="hugo-team-node" style="top: 110px; left: 270px;">
            <div class="node-avatar-ring ring-yellow">
              <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/team-avatar-lead.jpg' ); ?>" alt="Expansion Lead" class="node-avatar-img"/>
            </div>
            <div class="node-tag-badge badge-yellow">👑 Expansion Strategy</div>
          </div>

          <div class="hugo-team-node" style="top: 190px; left: 420px;">
            <div class="node-avatar-ring ring-purple">
              <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/team-avatar-legal.jpg' ); ?>" alt="Legal & Compliance" class="node-avatar-img"/>
            </div>
            <div class="node-tag-badge badge-purple">⚖️ FDI & Legal Entity</div>
          </div>

          <div class="hugo-team-node" style="top: 340px; left: 410px;">
            <div class="node-avatar-ring ring-orange">
              <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/team-avatar-ops.jpg' ); ?>" alt="Digital Ops Director" class="node-avatar-img"/>
            </div>
            <div class="node-tag-badge badge-orange">⚡ Banking & Finance</div>
          </div>

          <div class="hugo-team-node" style="top: 410px; left: 270px;">
            <div class="node-avatar-ring ring-green">
              <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/team-avatar-cx.jpg' ); ?>" alt="CX Operations Lead" class="node-avatar-img"/>
            </div>
            <div class="node-tag-badge badge-green">🎧 Hiring & Payroll</div>
          </div>

          <div class="hugo-team-node" style="top: 340px; left: 130px;">
            <div class="node-avatar-ring ring-cyan">
              <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/team-avatar-tech.jpg' ); ?>" alt="AI & Tech Pod Architect" class="node-avatar-img"/>
            </div>
            <div class="node-tag-badge badge-cyan">🤖 Workspace & Tech</div>
          </div>

          <div class="hugo-team-node" style="top: 190px; left: 120px;">
            <div class="node-avatar-ring ring-amber">
              <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/team-avatar-mfg.jpg' ); ?>" alt="Factory & Mfg Lead" class="node-avatar-img"/>
            </div>
            <div class="node-tag-badge badge-amber">🏭 Facility Launch</div>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>

<!-- 10 — TRUST & CLIENT MARQUEE (ULTRA-ATTRACTIVE BRAND BADGE SLIDER) -->
<section class="logo-marquee-section" style="padding: 40px 0 !important; background: linear-gradient(180deg, #fffdf5 0%, #fffbeb 100%) !important; border-top: 1px solid #fde68a !important; border-bottom: 1px solid #fde68a !important; overflow: hidden !important; width: 100% !important;">
  <div class="theme-container" style="text-align: center; margin-bottom: 24px;">
    <div style="display: inline-flex !important; align-items: center !important; gap: 10px !important; padding: 8px 20px !important; background: #ffffff !important; border: 1px solid #fde68a !important; border-radius: 30px !important; box-shadow: 0 6px 18px rgba(15, 23, 42, 0.05) !important; font-size: 0.8rem !important; font-weight: 800 !important; color: #0f172a !important; letter-spacing: 0.12em !important; text-transform: uppercase !important;">
      <span style="width: 8px !important; height: 8px !important; border-radius: 50% !important; background: #ffc700 !important; box-shadow: 0 0 10px #ffc700 !important; display: inline-block !important;"></span>
      <span>TRUSTED BY AMBITIOUS ENTERPRISES & UNICORNS WORLDWIDE</span>
    </div>
  </div>

  <div style="width: 100% !important; overflow: hidden !important; white-space: nowrap !important; position: relative !important;">
    <marquee behavior="scroll" direction="left" scrollamount="7" onmouseover="this.stop();" onmouseout="this.start();" style="display: block !important; width: 100% !important; white-space: nowrap !important;">
      <div style="display: inline-flex !important; flex-direction: row !important; align-items: center !important; gap: 20px !important; white-space: nowrap !important;">
        <span style="display: inline-flex !important; align-items: center !important; gap: 10px !important; padding: 12px 24px !important; background: #ffffff !important; border: 1px solid #cbd5e1 !important; border-radius: 30px !important; font-family: 'Outfit', 'Inter', sans-serif !important; font-size: 1.05rem !important; font-weight: 800 !important; color: #0f172a !important; box-shadow: 0 6px 20px rgba(15,23,42,0.04) !important; white-space: nowrap !important;">⚡ FINTECH PLUS</span>
        <span style="color: #ffc700 !important; font-size: 1.3rem !important; display: inline-block !important;">✦</span>

        <span style="display: inline-flex !important; align-items: center !important; gap: 10px !important; padding: 12px 24px !important; background: #ffffff !important; border: 1px solid #cbd5e1 !important; border-radius: 30px !important; font-family: 'Outfit', 'Inter', sans-serif !important; font-size: 1.05rem !important; font-weight: 800 !important; color: #0f172a !important; box-shadow: 0 6px 20px rgba(15,23,42,0.04) !important; white-space: nowrap !important;">🤖 NEXUS AI</span>
        <span style="color: #ffc700 !important; font-size: 1.3rem !important; display: inline-block !important;">✦</span>

        <span style="display: inline-flex !important; align-items: center !important; gap: 10px !important; padding: 12px 24px !important; background: #ffffff !important; border: 1px solid #cbd5e1 !important; border-radius: 30px !important; font-family: 'Outfit', 'Inter', sans-serif !important; font-size: 1.05rem !important; font-weight: 800 !important; color: #0f172a !important; box-shadow: 0 6px 20px rgba(15,23,42,0.04) !important; white-space: nowrap !important;">🌐 LOGIX GLOBAL</span>
        <span style="color: #ffc700 !important; font-size: 1.3rem !important; display: inline-block !important;">✦</span>

        <span style="display: inline-flex !important; align-items: center !important; gap: 10px !important; padding: 12px 24px !important; background: #fffdf5 !important; border: 1px solid #ffc700 !important; border-radius: 30px !important; font-family: 'Outfit', 'Inter', sans-serif !important; font-size: 1.05rem !important; font-weight: 800 !important; color: #080c16 !important; box-shadow: 0 8px 24px rgba(255, 199, 0, 0.25) !important; white-space: nowrap !important;">💊 APEX HEALTH</span>
        <span style="color: #ffc700 !important; font-size: 1.3rem !important; display: inline-block !important;">✦</span>

        <span style="display: inline-flex !important; align-items: center !important; gap: 10px !important; padding: 12px 24px !important; background: #ffffff !important; border: 1px solid #cbd5e1 !important; border-radius: 30px !important; font-family: 'Outfit', 'Inter', sans-serif !important; font-size: 1.05rem !important; font-weight: 800 !important; color: #0f172a !important; box-shadow: 0 6px 20px rgba(15,23,42,0.04) !important; white-space: nowrap !important;">☁️ CLOUDSCALE</span>
        <span style="color: #ffc700 !important; font-size: 1.3rem !important; display: inline-block !important;">✦</span>

        <span style="display: inline-flex !important; align-items: center !important; gap: 10px !important; padding: 12px 24px !important; background: #ffffff !important; border: 1px solid #cbd5e1 !important; border-radius: 30px !important; font-family: 'Outfit', 'Inter', sans-serif !important; font-size: 1.05rem !important; font-weight: 800 !important; color: #0f172a !important; box-shadow: 0 6px 20px rgba(15,23,42,0.04) !important; white-space: nowrap !important;">⚛️ QUANTUM DYNAMICS</span>
        <span style="color: #ffc700 !important; font-size: 1.3rem !important; display: inline-block !important;">✦</span>

        <span style="display: inline-flex !important; align-items: center !important; gap: 10px !important; padding: 12px 24px !important; background: #ffffff !important; border: 1px solid #cbd5e1 !important; border-radius: 30px !important; font-family: 'Outfit', 'Inter', sans-serif !important; font-size: 1.05rem !important; font-weight: 800 !important; color: #0f172a !important; box-shadow: 0 6px 20px rgba(15,23,42,0.04) !important; white-space: nowrap !important;">🚀 HYPERFLOW OPS</span>
        <span style="color: #ffc700 !important; font-size: 1.3rem !important; display: inline-block !important;">✦</span>

        <span style="display: inline-flex !important; align-items: center !important; gap: 10px !important; padding: 12px 24px !important; background: #ffffff !important; border: 1px solid #cbd5e1 !important; border-radius: 30px !important; font-family: 'Outfit', 'Inter', sans-serif !important; font-size: 1.05rem !important; font-weight: 800 !important; color: #0f172a !important; box-shadow: 0 6px 20px rgba(15,23,42,0.04) !important; white-space: nowrap !important;">🔬 VORTEX LABS</span>
        <span style="color: #ffc700 !important; font-size: 1.3rem !important; display: inline-block !important;">✦</span>

        <!-- DUPLICATE FOR INFINITE SMOOTH LOOP -->
        <span style="display: inline-flex !important; align-items: center !important; gap: 10px !important; padding: 12px 24px !important; background: #ffffff !important; border: 1px solid #cbd5e1 !important; border-radius: 30px !important; font-family: 'Outfit', 'Inter', sans-serif !important; font-size: 1.05rem !important; font-weight: 800 !important; color: #0f172a !important; box-shadow: 0 6px 20px rgba(15,23,42,0.04) !important; white-space: nowrap !important;">⚡ FINTECH PLUS</span>
        <span style="color: #ffc700 !important; font-size: 1.3rem !important; display: inline-block !important;">✦</span>

        <span style="display: inline-flex !important; align-items: center !important; gap: 10px !important; padding: 12px 24px !important; background: #ffffff !important; border: 1px solid #cbd5e1 !important; border-radius: 30px !important; font-family: 'Outfit', 'Inter', sans-serif !important; font-size: 1.05rem !important; font-weight: 800 !important; color: #0f172a !important; box-shadow: 0 6px 20px rgba(15,23,42,0.04) !important; white-space: nowrap !important;">🤖 NEXUS AI</span>
        <span style="color: #ffc700 !important; font-size: 1.3rem !important; display: inline-block !important;">✦</span>

        <span style="display: inline-flex !important; align-items: center !important; gap: 10px !important; padding: 12px 24px !important; background: #ffffff !important; border: 1px solid #cbd5e1 !important; border-radius: 30px !important; font-family: 'Outfit', 'Inter', sans-serif !important; font-size: 1.05rem !important; font-weight: 800 !important; color: #0f172a !important; box-shadow: 0 6px 20px rgba(15,23,42,0.04) !important; white-space: nowrap !important;">🌐 LOGIX GLOBAL</span>
        <span style="color: #ffc700 !important; font-size: 1.3rem !important; display: inline-block !important;">✦</span>

        <span style="display: inline-flex !important; align-items: center !important; gap: 10px !important; padding: 12px 24px !important; background: #fffdf5 !important; border: 1px solid #ffc700 !important; border-radius: 30px !important; font-family: 'Outfit', 'Inter', sans-serif !important; font-size: 1.05rem !important; font-weight: 800 !important; color: #080c16 !important; box-shadow: 0 8px 24px rgba(255, 199, 0, 0.25) !important; white-space: nowrap !important;">💊 APEX HEALTH</span>
        <span style="color: #ffc700 !important; font-size: 1.3rem !important; display: inline-block !important;">✦</span>
      </div>
    </marquee>
  </div>
</section>

<!-- SECTION 02: WHY INDIA (MASTER ANIMATED INDIA EXPANSION NETWORK & CONTINUOUS EDITORIAL ROADMAP) -->
<section class="why-india-section ob-section-2" id="why-india-roadmap" style="padding: 105px 0 110px 0 !important; background: #fffdf5 !important; border-top: 1px solid #fef08a !important; border-bottom: 1px solid #fef08a !important; overflow: hidden !important; width: 100% !important; position: relative !important;">
  
  <!-- SCOPED INLINE MASTER CSS FOR SECTION 2 -->
  <style id="ob-s2-scoped-master-css">
    /* ==========================================================================
       SECTION 02 MASTER SCOPED CSS (.ob-section-2 NAMESPACE)
       ========================================================================== */
    .ob-section-2 {
      position: relative !important;
      opacity: 1 !important;
    }

    /* --------------------------------------------------------------------------
       1. ABSTRACT INDIA EXPANSION NETWORK BACKGROUND ANIMATIONS
       -------------------------------------------------------------------------- */
    /* SOFT MOVING GRADIENT BLOBS (12-18s Ease-in-out Infinite) */
    .ob-s2-bg-blob {
      position: absolute;
      border-radius: 50%;
      filter: blur(70px);
      pointer-events: none;
      z-index: 0;
      opacity: 0.18;
      will-change: transform;
    }
    .ob-s2-blob-yellow {
      width: 480px;
      height: 480px;
      background: radial-gradient(circle, #ffc700 0%, rgba(255,199,0,0) 70%);
      top: -60px;
      right: -80px;
      animation: obS2BlobA 16s ease-in-out infinite alternate !important;
    }
    .ob-s2-blob-cyan {
      width: 440px;
      height: 440px;
      background: radial-gradient(circle, #00b4d8 0%, rgba(0,180,216,0) 70%);
      bottom: -60px;
      left: -80px;
      animation: obS2BlobB 18s ease-in-out infinite alternate !important;
    }
    .ob-s2-blob-green {
      width: 380px;
      height: 380px;
      background: radial-gradient(circle, #10b981 0%, rgba(16,185,129,0) 70%);
      top: 40%;
      left: 35%;
      animation: obS2BlobC 14s ease-in-out infinite alternate !important;
    }

    @keyframes obS2BlobA {
      0% { transform: translate(0px, 0px) scale(1); }
      50% { transform: translate(-30px, 25px) scale(1.08); }
      100% { transform: translate(25px, -20px) scale(0.95); }
    }
    @keyframes obS2BlobB {
      0% { transform: translate(0px, 0px) scale(1); }
      50% { transform: translate(35px, -30px) scale(1.06); }
      100% { transform: translate(-20px, 20px) scale(0.96); }
    }
    @keyframes obS2BlobC {
      0% { transform: translate(0px, 0px) scale(0.95); }
      50% { transform: translate(-25px, -20px) scale(1.1); }
      100% { transform: translate(30px, 25px) scale(1); }
    }

    /* ROADMAP AMBIENT RADIAL GLOW (BREATHING 6-8s) */
    .ob-s2-roadmap-ambient-glow {
      position: absolute;
      top: 50%;
      right: 5%;
      transform: translateY(-50%);
      width: 520px;
      height: 520px;
      background: radial-gradient(circle, rgba(255, 199, 0, 0.22) 0%, rgba(255, 255, 255, 0) 70%);
      pointer-events: none;
      z-index: 1;
      animation: obS2GlowBreathe 7s ease-in-out infinite alternate !important;
    }
    @keyframes obS2GlowBreathe {
      0% { opacity: 0.12; transform: translateY(-50%) scale(0.96); }
      100% { opacity: 0.24; transform: translateY(-50%) scale(1.06); }
    }

    /* LEFT CARDS AMBIENT GLOW (12s HORIZONTAL DRIFT) */
    .ob-s2-left-ambient-glow {
      position: absolute;
      top: 45%;
      left: 6%;
      transform: translateY(-50%);
      width: 480px;
      height: 480px;
      background: radial-gradient(circle, rgba(0, 180, 216, 0.12) 0%, rgba(255, 255, 255, 0) 70%);
      pointer-events: none;
      z-index: 1;
      animation: obS2LeftGlowDrift 12s ease-in-out infinite alternate !important;
    }
    @keyframes obS2LeftGlowDrift {
      0% { transform: translateY(-50%) translateX(-15px); }
      100% { transform: translateY(-50%) translateX(15px); }
    }

    /* FLOATING PARTICLES & STARS LAYER */
    .ob-s2-particles-layer {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      pointer-events: none;
      z-index: 1;
      overflow: hidden;
    }

    .ob-s2-particle {
      position: absolute;
      border-radius: 50%;
      animation: obS2ParticleFloat 5s ease-in-out infinite alternate !important;
    }
    .ob-s2-p1 { width: 8px; height: 8px; background: #ffc700; top: 18%; left: 4%; opacity: 0.55; animation-duration: 4.5s !important; }
    .ob-s2-p2 { width: 6px; height: 6px; background: #00b4d8; top: 28%; left: 46%; opacity: 0.45; animation-duration: 6.2s !important; animation-delay: 1s !important; }
    .ob-s2-p3 { width: 10px; height: 10px; background: #10b981; top: 75%; left: 8%; opacity: 0.40; animation-duration: 5.4s !important; animation-delay: 0.5s !important; }
    .ob-s2-p4 { width: 6px; height: 6px; background: #ff9900; top: 12%; right: 12%; opacity: 0.50; animation-duration: 7s !important; animation-delay: 2s !important; }
    .ob-s2-p5 { width: 8px; height: 8px; background: #00b4d8; bottom: 15%; right: 6%; opacity: 0.45; animation-duration: 5.8s !important; animation-delay: 1.2s !important; }
    .ob-s2-p6 { width: 5px; height: 5px; background: #ffc700; bottom: 35%; right: 48%; opacity: 0.55; animation-duration: 6.5s !important; animation-delay: 0.8s !important; }
    .ob-s2-p7 { width: 7px; height: 7px; background: #8b5cf6; top: 60%; left: 48%; opacity: 0.35; animation-duration: 5.0s !important; animation-delay: 1.6s !important; }

    @keyframes obS2ParticleFloat {
      0% { transform: translateY(0px); opacity: 0.35; }
      100% { transform: translateY(-14px); opacity: 0.80; }
    }

    /* 4-POINT EDITORIAL STARS */
    .ob-s2-star-decor {
      position: absolute;
      user-select: none;
      pointer-events: none;
      animation: obS2StarPulse 4.5s ease-in-out infinite alternate !important;
    }
    .ob-s2-star-1 { top: 8%; left: 7%; font-size: 1.4rem; color: #ffc700; }
    .ob-s2-star-2 { top: 14%; right: 8%; font-size: 1.25rem; color: #00b4d8; animation-delay: 1.2s !important; }
    .ob-s2-star-3 { bottom: 12%; left: 45%; font-size: 1.1rem; color: #ffc700; opacity: 0.65; animation-delay: 2.4s !important; }

    @keyframes obS2StarPulse {
      0% { transform: translateY(0px) rotate(0deg) scale(0.9); opacity: 0.6; }
      100% { transform: translateY(-8px) rotate(10deg) scale(1.15); opacity: 1; filter: drop-shadow(0 0 8px rgba(255,199,0,0.5)); }
    }

    /* ANIMATED CURVED ORBIT LINES (SVG STROKE DRAW ON ENTRANCE) */
    .ob-s2-orbit-svg-layer {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      pointer-events: none;
      z-index: 1;
      opacity: 0.22;
    }
    .ob-s2-orbit-path {
      stroke-dasharray: 1200;
      stroke-dashoffset: 1200;
      transition: stroke-dashoffset 2.2s cubic-bezier(0.22, 1, 0.36, 1) 0.3s;
    }

    /* --------------------------------------------------------------------------
       2. MASKED HEADINGS & TYPOGRAPHY FLOW
       -------------------------------------------------------------------------- */
    .ob-s2-mask {
      display: block !important;
      overflow: hidden !important;
      position: relative !important;
    }

    .ob-s2-h2-line-1,
    .ob-s2-h2-line-2 {
      display: block !important;
      color: #080c16 !important;
      transform: translateY(115%);
      opacity: 0;
      transition: transform 0.95s cubic-bezier(0.22, 1, 0.36, 1), opacity 0.95s ease;
      will-change: transform, opacity;
    }

    .ob-s2-h2-line-2 {
      display: inline-block !important;
      position: relative !important;
    }

    .ob-s2-desc-text {
      transform: translateY(35px);
      opacity: 0;
      transition: transform 0.85s cubic-bezier(0.22, 1, 0.36, 1) 0.28s, opacity 0.85s ease 0.28s;
      will-change: transform, opacity;
    }

    /* --------------------------------------------------------------------------
       3. LEFT SIDE: 3 STAGGERED PILLAR CARDS (REAL PHYSICAL TRANSLATION)
       -------------------------------------------------------------------------- */
    .ob-s2-pillar-card {
      position: relative !important;
      background: #ffffff !important;
      border: 1.5px solid #fef08a !important;
      border-radius: 22px !important;
      padding: 22px 24px !important;
      box-shadow: 0 10px 28px rgba(15, 23, 42, 0.04) !important;
      display: flex !important;
      align-items: flex-start !important;
      gap: 18px !important;
      cursor: default !important;
      opacity: 0;
      transition: transform 0.75s cubic-bezier(0.22, 1, 0.36, 1), opacity 0.75s ease, box-shadow 0.35s ease, border-color 0.35s ease !important;
      will-change: transform, opacity;
      z-index: 2 !important;
    }

    .ob-s2-pillar-card.p-1 {
      transform: translateX(-45px) translateY(20px);
      transition-delay: 0.30s;
    }
    .ob-s2-pillar-card.p-2 {
      transform: translateX(-55px) translateY(20px);
      transition-delay: 0.42s;
    }
    .ob-s2-pillar-card.p-3 {
      transform: translateX(-65px) translateY(20px);
      transition-delay: 0.54s;
    }

    /* INTERNAL CARD MICRO-SEQUENCED ELEMENTS */
    .ob-s2-card-icon {
      width: 48px !important;
      height: 48px !important;
      min-width: 48px !important;
      border-radius: 14px !important;
      display: flex !important;
      align-items: center !important;
      justify-content: center !important;
      font-size: 1.30rem !important;
      flex-shrink: 0 !important;
      transform: scale(0.75) rotate(-4deg);
      opacity: 0;
      transition: transform 0.65s cubic-bezier(0.34, 1.56, 0.64, 1), opacity 0.65s ease, box-shadow 0.3s ease !important;
    }
    .ob-s2-pillar-card.p-1 .ob-s2-card-icon { transition-delay: 0.40s; }
    .ob-s2-pillar-card.p-2 .ob-s2-card-icon { transition-delay: 0.52s; }
    .ob-s2-pillar-card.p-3 .ob-s2-card-icon { transition-delay: 0.64s; }

    .ob-s2-card-title {
      font-family: 'Outfit', 'Inter', sans-serif !important;
      font-size: 1.10rem !important;
      font-weight: 800 !important;
      color: #080c16 !important;
      margin: 0 0 5px 0 !important;
      transform: translateY(12px);
      opacity: 0;
      transition: transform 0.60s cubic-bezier(0.22, 1, 0.36, 1), opacity 0.60s ease !important;
    }
    .ob-s2-pillar-card.p-1 .ob-s2-card-title { transition-delay: 0.48s; }
    .ob-s2-pillar-card.p-2 .ob-s2-card-title { transition-delay: 0.60s; }
    .ob-s2-pillar-card.p-3 .ob-s2-card-title { transition-delay: 0.72s; }

    .ob-s2-card-desc {
      color: #475569 !important;
      font-size: 0.92rem !important;
      line-height: 1.58 !important;
      margin: 0 !important;
      transform: translateY(12px);
      opacity: 0;
      transition: transform 0.60s cubic-bezier(0.22, 1, 0.36, 1), opacity 0.60s ease !important;
    }
    .ob-s2-pillar-card.p-1 .ob-s2-card-desc { transition-delay: 0.56s; }
    .ob-s2-pillar-card.p-2 .ob-s2-card-desc { transition-delay: 0.68s; }
    .ob-s2-pillar-card.p-3 .ob-s2-card-desc { transition-delay: 0.80s; }

    /* CARD HOVER PHYSICS */
    .ob-s2-pillar-card:hover {
      transform: translateY(-6px) scale(1.01) !important;
      box-shadow: 0 22px 48px rgba(15, 23, 42, 0.09) !important;
      border-color: #ffc700 !important;
    }
    .ob-s2-pillar-card:hover .ob-s2-card-icon {
      transform: scale(1.08) translateY(-2px) !important;
    }

    /* LEFT EDITORIAL CONNECTOR ARROW (SVG STROKE DRAW) */
    .ob-s2-editorial-arrow {
      position: absolute;
      right: -44px;
      top: 42%;
      transform: translateY(-50%);
      z-index: 10;
      pointer-events: none;
      opacity: 0;
      transition: opacity 0.6s ease 0.65s;
    }

    .ob-s2-arrow-drawn-path {
      stroke-dasharray: 240;
      stroke-dashoffset: 240;
      transition: stroke-dashoffset 0.90s cubic-bezier(0.22, 1, 0.36, 1) 0.70s;
    }

    /* "FAST-TRACK" PILL BADGE */
    .ob-s2-fast-badge {
      display: inline-block;
      font-family: 'Outfit', sans-serif;
      font-size: 0.72rem;
      font-weight: 800;
      color: #080c16;
      background: #ffc700;
      padding: 3px 10px;
      border-radius: 12px;
      transform: translateX(-15px) scale(0.9) rotate(3deg);
      opacity: 0;
      box-shadow: 0 4px 12px rgba(255,199,0,0.45);
      margin-top: -6px;
      transition: transform 0.65s cubic-bezier(0.34, 1.56, 0.64, 1) 0.85s, opacity 0.65s ease 0.85s;
    }
    .ob-s2-fast-badge:hover {
      transform: scale(1.06) rotate(3deg) !important;
    }

    /* CTA BUTTON */
    .ob-s2-cta-wrap {
      transform: translateY(25px);
      opacity: 0;
      transition: transform 0.75s cubic-bezier(0.22, 1, 0.36, 1) 0.78s, opacity 0.75s ease 0.78s;
      margin-top: 6px !important;
      z-index: 2 !important;
    }

    .ob-s2-cta-btn {
      display: inline-flex !important;
      align-items: center !important;
      gap: 10px !important;
      padding: 15px 34px !important;
      border-radius: 30px !important;
      transition: transform 0.25s cubic-bezier(0.16, 1, 0.3, 1), box-shadow 0.25s ease !important;
    }
    .ob-s2-cta-btn svg {
      transition: transform 0.25s cubic-bezier(0.16, 1, 0.3, 1) !important;
    }
    .ob-s2-cta-btn:hover {
      transform: translateY(-2px) !important;
      box-shadow: 0 10px 25px rgba(255, 199, 0, 0.35) !important;
    }
    .ob-s2-cta-btn:hover svg {
      transform: translateX(6px) !important;
    }

    /* --------------------------------------------------------------------------
       4. RIGHT COLUMN: MASTER INTERACTIVE ROADMAP & CONTINUOUS DECORATIVE LAYER
       -------------------------------------------------------------------------- */
    .ob-s2-roadmap-box,
    .ob-section-2 .ob-s2-roadmap-box {
      background: #DDF7FA !important;
      background-color: #DDF7FA !important;
      border: 1.5px solid #fde68a !important;
      border-radius: 28px !important;
      padding: 34px 30px !important;
      box-shadow: 0 24px 60px rgba(15, 23, 42, 0.08) !important;
      position: relative !important;
      transform: translateY(40px) scale(0.96);
      opacity: 0;
      transition: transform 0.9s cubic-bezier(0.22, 1, 0.36, 1) 0.35s, opacity 0.9s ease 0.35s, box-shadow 0.35s ease, border-color 0.35s ease;
      will-change: transform, opacity;
      z-index: 2 !important;
      overflow: visible !important;
    }

    .ob-s2-roadmap-box:hover {
      transform: translateY(-5px) scale(1.005) !important;
      box-shadow: 0 32px 75px rgba(15, 23, 42, 0.11) !important;
      border-color: #ffc700 !important;
    }

    /* ROADMAP CONTENT INNER CONTAINER (Z-INDEX 2) */
    .ob-s2-roadmap-inner {
      position: relative !important;
      z-index: 2 !important;
    }

    /* CONTINUOUS EDITORIAL DECORATIVE LAYER (Z-INDEX 1) */
    .ob-s2-roadmap-decor {
      position: absolute !important;
      top: 0 !important;
      left: 0 !important;
      width: 100% !important;
      height: 100% !important;
      pointer-events: none !important;
      z-index: 1 !important;
      overflow: visible !important;
    }

    /* 1. CONTINUOUSLY ANIMATED DOTTED CURVED SVG PATH */
    .ob-s2-decor-curve-svg {
      position: absolute;
      top: -25px;
      left: -20px;
      width: calc(100% + 40px);
      height: calc(100% + 50px);
      pointer-events: none;
      overflow: visible;
    }

    .ob-s2-flowing-dotted-path {
      stroke-dasharray: 6 10;
      animation: obS2DottedFlow 6s linear infinite !important;
    }
    @keyframes obS2DottedFlow {
      0% { stroke-dashoffset: 0; }
      100% { stroke-dashoffset: -128; }
    }

    /* 2. CONTINUOUSLY MOVING ACCENT DOT ALONG THE CURVE */
    .ob-s2-decor-traveling-dot {
      position: absolute;
      width: 7px;
      height: 7px;
      border-radius: 50%;
      background: #ffc700;
      box-shadow: 0 0 12px #ffc700;
      animation: obS2TravelingSignal 8s ease-in-out infinite alternate !important;
    }
    @keyframes obS2TravelingSignal {
      0% { top: 16%; left: 8%; opacity: 0.3; transform: scale(0.8); }
      25% { top: 6%; left: 48%; opacity: 0.95; transform: scale(1.15); }
      50% { top: 20%; left: 90%; opacity: 0.85; transform: scale(1.0); }
      75% { top: 80%; left: 78%; opacity: 0.95; transform: scale(1.15); }
      100% { top: 72%; left: 14%; opacity: 0.3; transform: scale(0.8); }
    }

    /* 3. CONTINUOUSLY FLOATING EDITORIAL STAR (UPPER-LEFT / UPPER-MIDDLE) */
    .ob-s2-decor-star {
      position: absolute;
      top: -14px;
      left: 22%;
      font-size: 1.35rem;
      color: #ffc700;
      user-select: none;
      animation: obS2StarContinuous 4.5s ease-in-out infinite alternate !important;
    }
    @keyframes obS2StarContinuous {
      0% { transform: translate(-8px, 0px) rotate(-4deg) scale(0.92); opacity: 0.55; }
      100% { transform: translate(8px, -5px) rotate(4deg) scale(1.08); opacity: 1; filter: drop-shadow(0 0 8px rgba(255,199,0,0.6)); }
    }

    /* 4. CONTINUOUSLY FLOATING EDITORIAL OUTLINE HEART (LOWER-LEFT) */
    .ob-s2-decor-heart {
      position: absolute;
      bottom: 84px;
      left: -14px;
      user-select: none;
      animation: obS2HeartFloat 4.8s ease-in-out infinite alternate !important;
    }
    @keyframes obS2HeartFloat {
      0% { transform: translate(0px, 0px) rotate(-3deg) scale(0.96); opacity: 0.65; }
      100% { transform: translate(6px, -10px) rotate(3deg) scale(1.04); opacity: 1; filter: drop-shadow(0 0 6px rgba(255,153,0,0.4)); }
    }

    /* 5. CONTINUOUSLY FLOATING EDITORIAL SPEECH BUBBLE (LOWER-RIGHT) */
    .ob-s2-decor-bubble {
      position: absolute;
      bottom: 44px;
      right: -12px;
      user-select: none;
      animation: obS2BubbleFloat 5.5s ease-in-out infinite alternate !important;
    }
    @keyframes obS2BubbleFloat {
      0% { transform: translateY(0px) rotate(0deg); opacity: 0.60; }
      100% { transform: translateY(-7px) rotate(4deg); opacity: 0.95; }
    }

    /* 6. CONTINUOUSLY ANIMATED EDITORIAL CURVED STROKE (UPPER-RIGHT) */
    .ob-s2-decor-curved-mark {
      position: absolute;
      top: -12px;
      right: 28%;
      animation: obS2CurvedMarkMotion 4.8s ease-in-out infinite alternate !important;
    }
    @keyframes obS2CurvedMarkMotion {
      0% { transform: translateX(-3px) rotate(-2deg); opacity: 0.7; }
      100% { transform: translateX(3px) rotate(2deg); opacity: 1; }
    }

    /* 7. DELIBERATELY PLACED DECORATIVE ACCENT DOTS */
    .ob-s2-decor-dot {
      position: absolute;
      border-radius: 50%;
      animation: obS2DotBreathe 4s ease-in-out infinite alternate !important;
    }
    .ob-s2-decor-dot.dot-1 { width: 6px; height: 6px; background: #ffc700; top: 12%; left: 8%; animation-delay: 0.5s !important; }
    .ob-s2-decor-dot.dot-2 { width: 5px; height: 5px; background: #00b4d8; top: 8%; right: 18%; animation-delay: 1.8s !important; }
    .ob-s2-decor-dot.dot-3 { width: 6px; height: 6px; background: #10b981; bottom: 22%; left: 4%; animation-delay: 1.2s !important; }
    .ob-s2-decor-dot.dot-4 { width: 5px; height: 5px; background: #ff9900; bottom: 18%; right: 4%; animation-delay: 2.5s !important; }

    @keyframes obS2DotBreathe {
      0% { transform: translateY(0) scale(0.85); opacity: 0.35; }
      100% { transform: translateY(-8px) scale(1.15); opacity: 0.85; }
    }

    /* ROADMAP CONNECTING PATH DRAW (1.8s ENTRANCE) */
    .ob-s2-track-stroke {
      stroke-dasharray: 600;
      stroke-dashoffset: 600;
      transition: stroke-dashoffset 1.8s cubic-bezier(0.22, 1, 0.36, 1) 0.50s;
    }

    /* MOVING PROGRESS ACCENT DOT (ENTRANCE) */
    .ob-s2-traveling-dot {
      opacity: 0;
      transition: opacity 0.4s ease 1.45s;
      animation: obS2DotPulse 2s ease-in-out infinite alternate !important;
    }
    @keyframes obS2DotPulse {
      0% { filter: drop-shadow(0 0 4px #ffc700); }
      100% { filter: drop-shadow(0 0 16px #ff9900); }
    }

    /* 5 ROADMAP STAGES (STAGGERED POP-IN: 120ms Stagger) */
    .ob-s2-milestone {
      transform: scale(0.75) translateY(10px);
      opacity: 0;
      transition: transform 0.60s cubic-bezier(0.34, 1.56, 0.64, 1), opacity 0.60s ease;
      cursor: pointer;
    }
    .ob-s2-milestone.m-1 { transition-delay: 0.65s; }
    .ob-s2-milestone.m-2 { transition-delay: 0.77s; }
    .ob-s2-milestone.m-3 { transition-delay: 0.89s; }
    .ob-s2-milestone.m-4 { transition-delay: 1.01s; }
    .ob-s2-milestone.m-5 { transition-delay: 1.13s; }

    .ob-s2-milestone:hover .ob-s2-node-badge {
      transform: translateY(-4px) scale(1.15) !important;
      box-shadow: 0 12px 26px rgba(255, 199, 0, 0.45) !important;
    }
    .ob-s2-milestone:hover .ob-s2-node-label {
      color: #ff9900 !important;
    }

    /* ACTIVE STAGE PULSE (STAGE 03 - COMPLIANCE) */
    .ob-s2-milestone.m-3.active-pulse .ob-s2-node-badge {
      animation: obS2ActiveStagePulse 3s ease-in-out infinite alternate !important;
    }
    @keyframes obS2ActiveStagePulse {
      0% { box-shadow: 0 8px 24px rgba(16,185,129,0.45); transform: scale(1); }
      100% { box-shadow: 0 12px 32px rgba(16,185,129,0.75); transform: scale(1.06); }
    }

    /* STAGE INSPECTOR PREVIEW BAR */
    .ob-s2-inspector-panel {
      background: #f8fafc;
      border: 1px solid #e2e8f0;
      border-radius: 14px;
      padding: 10px 16px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-top: 14px;
      transition: all 0.3s ease;
    }

    /* TIME ESTIMATE BANNER */
    .ob-s2-turnkey-banner {
      font-family: 'Outfit', sans-serif;
      font-size: 0.86rem;
      font-weight: 800;
      color: #64748b;
      letter-spacing: 0.1em;
      text-transform: uppercase;
      transform: translateY(14px);
      opacity: 0;
      transition: transform 0.6s ease 1.20s, opacity 0.6s ease 1.20s;
      display: inline-block;
    }

    /* METRIC CARDS & GROWING PROGRESS BARS */
    .ob-s2-metric-box-1 {
      background: #f8fafc !important;
      border: 1px solid #e2e8f0 !important;
      border-radius: 16px !important;
      padding: 14px !important;
      transform: translateY(20px);
      opacity: 0;
      transition: transform 0.65s cubic-bezier(0.22, 1, 0.36, 1) 1.30s, opacity 0.65s ease 1.30s;
    }

    .ob-s2-metric-box-2 {
      background: #f8fafc !important;
      border: 1px solid #e2e8f0 !important;
      border-radius: 16px !important;
      padding: 14px !important;
      transform: translateY(20px);
      opacity: 0;
      transition: transform 0.65s cubic-bezier(0.22, 1, 0.36, 1) 1.40s, opacity 0.65s ease 1.40s;
    }

    .ob-s2-meter-fill {
      transform: scaleX(0);
      transform-origin: left center;
      transition: transform 1.0s cubic-bezier(0.22, 1, 0.36, 1) 1.45s;
    }

    /* DIRECTOR STRIP */
    .ob-s2-director-strip {
      display: flex !important;
      align-items: center !important;
      gap: 12px !important;
      background: #fffdf5 !important;
      border: 1px solid #fde68a !important;
      border-radius: 16px !important;
      padding: 10px 14px !important;
      transform: translateY(20px);
      opacity: 0;
      transition: transform 0.65s cubic-bezier(0.22, 1, 0.36, 1) 1.55s, opacity 0.65s ease 1.55s;
    }

    .ob-s2-director-avatar {
      width: 40px !important;
      height: 40px !important;
      border-radius: 50% !important;
      object-fit: cover !important;
      display: block !important;
      border: 1.5px solid #ffc700 !important;
      transform: scale(0.9);
      transition: transform 0.5s ease 1.60s;
    }

    /* ==========================================================================
       5. ACTIVE STATE TRIGGERED BY JS (.is-visible)
       ========================================================================== */
    .ob-section-2.is-visible .ob-s2-orbit-path {
      stroke-dashoffset: 0 !important;
    }

    .ob-section-2.is-visible .ob-s2-h2-line-1 {
      transform: translateY(0) !important;
      opacity: 1 !important;
    }
    .ob-section-2.is-visible .ob-s2-h2-line-2 {
      transform: translateY(0) !important;
      opacity: 1 !important;
      transition-delay: 0.14s !important;
    }
    .ob-section-2.is-visible .ob-s2-desc-text,
    .ob-section-2.is-visible .ob-s2-pillar-card,
    .ob-section-2.is-visible .ob-s2-card-title,
    .ob-section-2.is-visible .ob-s2-card-desc,
    .ob-section-2.is-visible .ob-s2-cta-wrap,
    .ob-section-2.is-visible .ob-s2-roadmap-box,
    .ob-section-2.is-visible .ob-s2-turnkey-banner,
    .ob-section-2.is-visible .ob-s2-metric-box-1,
    .ob-section-2.is-visible .ob-s2-metric-box-2,
    .ob-section-2.is-visible .ob-s2-director-strip {
      transform: translate(0, 0) scale(1) !important;
      opacity: 1 !important;
    }

    .ob-section-2.is-visible .ob-s2-card-icon {
      transform: scale(1) rotate(0deg) !important;
      opacity: 1 !important;
    }

    .ob-section-2.is-visible .ob-s2-director-avatar {
      transform: scale(1) !important;
    }

    .ob-section-2.is-visible .ob-s2-editorial-arrow {
      opacity: 1 !important;
    }

    .ob-section-2.is-visible .ob-s2-arrow-drawn-path {
      stroke-dashoffset: 0 !important;
    }

    .ob-section-2.is-visible .ob-s2-fast-badge {
      transform: translateX(0) scale(1) rotate(3deg) !important;
      opacity: 1 !important;
    }

    .ob-section-2.is-visible .ob-s2-track-stroke {
      stroke-dashoffset: 0 !important;
    }

    .ob-section-2.is-visible .ob-s2-milestone {
      transform: scale(1) translateY(0) !important;
      opacity: 1 !important;
    }

    .ob-section-2.is-visible .ob-s2-traveling-dot {
      opacity: 1 !important;
    }

    .ob-section-2.is-visible .ob-s2-meter-fill {
      transform: scaleX(1) !important;
    }

    /* RESPONSIVE DESIGN */
    @media (max-width: 1024px) {
      .ob-s2-main-grid {
        grid-template-columns: 1fr !important;
        gap: 46px !important;
      }
      .ob-s2-editorial-arrow,
      .ob-s2-orbit-svg-layer {
        display: none !important;
      }
    }

    @media (max-width: 640px) {
      .ob-s2-h2-title {
        font-size: clamp(1.85rem, 6.2vw, 2.3rem) !important;
      }
      .ob-s2-svg-track-wrap {
        display: none !important;
      }
      .ob-s2-milestones-row {
        flex-direction: column !important;
        gap: 12px !important;
      }
      .ob-s2-milestone {
        flex-direction: row !important;
        gap: 14px !important;
        text-align: left !important;
        background: #f8fafc;
        padding: 10px 14px;
        border-radius: 14px;
        width: 100% !important;
      }
      .ob-s2-node-badge {
        margin-bottom: 0 !important;
        width: 38px !important;
        height: 38px !important;
      }
      .ob-s2-decor-bubble,
      .ob-s2-decor-heart {
        display: none !important;
      }
    }

    @media (prefers-reduced-motion: reduce) {
      .ob-s2-bg-blob,
      .ob-s2-particle,
      .ob-s2-star-decor,
      .ob-s2-roadmap-ambient-glow,
      .ob-s2-left-ambient-glow,
      .ob-s2-flowing-dotted-path,
      .ob-s2-decor-traveling-dot,
      .ob-s2-decor-star,
      .ob-s2-decor-heart,
      .ob-s2-decor-bubble,
      .ob-s2-decor-curved-mark,
      .ob-s2-decor-dot {
        animation: none !important;
      }
      .ob-s2-h2-line-1,
      .ob-s2-h2-line-2,
      .ob-s2-desc-text,
      .ob-s2-pillar-card,
      .ob-s2-card-icon,
      .ob-s2-card-title,
      .ob-s2-card-desc,
      .ob-s2-cta-wrap,
      .ob-s2-roadmap-box,
      .ob-s2-milestone,
      .ob-s2-track-stroke,
      .ob-s2-meter-fill,
      .ob-s2-fast-badge,
      .ob-s2-editorial-arrow,
      .ob-s2-orbit-path {
        transition: none !important;
        opacity: 1 !important;
        transform: none !important;
        stroke-dashoffset: 0 !important;
      }
    }
  </style>

  <!-- 1. SOFT MOVING GRADIENT BLOBS LAYER (12-18s) -->
  <div class="ob-s2-bg-blob ob-s2-blob-yellow"></div>
  <div class="ob-s2-bg-blob ob-s2-blob-cyan"></div>
  <div class="ob-s2-bg-blob ob-s2-blob-green"></div>

  <!-- 2. AMBIENT ROADMAP & LEFT CARD GLOWS -->
  <div class="ob-s2-roadmap-ambient-glow"></div>
  <div class="ob-s2-left-ambient-glow"></div>

  <!-- 3. ABSTRACT INDIA EXPANSION NETWORK ORBIT LINES SVG -->
  <svg class="ob-s2-orbit-svg-layer" viewBox="0 0 1440 800" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M-50 200 C 300 80, 600 350, 1100 150 C 1300 70, 1400 220, 1500 180" stroke="#ffc700" stroke-width="2" stroke-linecap="round" stroke-dasharray="6 10" class="ob-s2-orbit-path"/>
    <path d="M-20 620 C 400 750, 800 480, 1200 680 C 1350 750, 1450 620, 1520 640" stroke="#00b4d8" stroke-width="1.8" stroke-linecap="round" stroke-dasharray="4 8" class="ob-s2-orbit-path"/>
  </svg>

  <!-- 4. FLOATING PARTICLES & EDITORIAL STARS LAYER -->
  <div class="ob-s2-particles-layer">
    <div class="ob-s2-particle ob-s2-p1"></div>
    <div class="ob-s2-particle ob-s2-p2"></div>
    <div class="ob-s2-particle ob-s2-p3"></div>
    <div class="ob-s2-particle ob-s2-p4"></div>
    <div class="ob-s2-particle ob-s2-p5"></div>
    <div class="ob-s2-particle ob-s2-p6"></div>
    <div class="ob-s2-particle ob-s2-p7"></div>
    <!-- 4-POINT EDITORIAL STARS -->
    <div class="ob-s2-star-decor ob-s2-star-1">✦</div>
    <div class="ob-s2-star-decor ob-s2-star-2">★</div>
    <div class="ob-s2-star-decor ob-s2-star-3">✦</div>
  </div>

  <div class="theme-container" style="max-width: 1240px !important; margin: 0 auto !important; padding: 0 24px !important; position: relative !important; z-index: 2 !important;">
    
    <!-- TOP CENTERED EDITORIAL HEADLINE (TWO STRICT CLEAN LINES • PHYSICAL FLOW REVEAL) -->
    <div class="ob-s2-header-section" style="text-align: center !important; max-width: 920px !important; margin: 0 auto 56px auto !important; position: relative !important;">
      
      <!-- MAIN HEADING (MASKED VERTICAL REVEAL) -->
      <h2 class="ob-s2-h2-title" style="font-family: 'Outfit', 'Inter', sans-serif !important; font-size: clamp(2.35rem, 4.3vw, 3.6rem) !important; font-weight: 800 !important; line-height: 1.16 !important; color: #080c16 !important; margin: 0 0 18px 0 !important; letter-spacing: -0.025em !important; cursor: default !important;">
        <span class="ob-s2-mask">
          <span class="ob-s2-h2-line-1">India Offers Opportunity.</span>
        </span>
        <span class="ob-s2-mask" style="padding-top: 4px;">
          <span class="ob-s2-h2-line-2">
            Entry Requires the Right Plan.
            <!-- HAND-DRAWN SKETCH UNDERLINE ACCENT -->
            <svg class="ob-s2-underline-svg" viewBox="0 0 320 14" fill="none" xmlns="http://www.w3.org/2000/svg" style="position: absolute; bottom: -8px; left: 0; width: 100%; height: 12px; pointer-events: none;">
              <path d="M4 9C70 4 200 3 316 8C240 5 130 6 24 11" stroke="#ffc700" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </span>
        </span>
      </h2>

      <!-- SUPPORTING PARAGRAPH -->
      <div class="ob-s2-mask">
        <p class="ob-s2-desc-text" style="font-size: 1.15rem !important; color: #475569 !important; line-height: 1.68 !important; margin: 0 auto !important; max-width: 800px !important;">
          You deserve an India expansion model that resolves legal, banking, tax, and talent complexity before you deploy capital.
        </p>
      </div>
    </div>

    <!-- 2-COLUMN EDITORIAL VISUAL STORYTELLING GRID -->
    <div class="ob-s2-main-grid">
      
      
      <div class="ob-s2-left-stack" style="display: flex !important; flex-direction: column !important; gap: 18px !important; position: relative !important;">
        
        
        <div class="ob-s2-editorial-arrow">
          <svg width="60" height="70" viewBox="0 0 60 70" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M8 10 C 36 6, 50 20, 44 48 M 32 40 L 44 50 L 54 42" stroke="#080c16" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="ob-s2-arrow-drawn-path"/>
          </svg>
          <span class="ob-s2-fast-badge">Fast-Track</span>
        </div>

        <!-- PILLAR CARD 1: TALENT & MARKET ACCESS -->
        <div class="ob-s2-pillar-card p-1">
          <div class="ob-s2-card-icon" style="background: #fffdf0 !important; border: 1.5px solid #ffc700 !important; color: #080c16 !important; box-shadow: 0 4px 12px rgba(255,199,0,0.25) !important;">
            ⚡
          </div>
          <div>
            <h4 class="ob-s2-card-title">Talent & Market Access</h4>
            <p class="ob-s2-card-desc">Tap into skilled engineering, SaaS, creative, and operations hubs across Bengaluru, Mumbai, Delhi NCR, and Hyderabad.</p>
          </div>
        </div>

        <!-- PILLAR CARD 2: CONNECTED LEGAL & FEMA GOVERNANCE -->
        <div class="ob-s2-pillar-card p-2">
          <div class="ob-s2-card-icon" style="background: #f0fdfa !important; border: 1.5px solid #00b4d8 !important; color: #0077b6 !important; box-shadow: 0 4px 12px rgba(0,180,216,0.18) !important;">
            🛡️
          </div>
          <div>
            <h4 class="ob-s2-card-title">Connected Legal & FEMA Governance</h4>
            <p class="ob-s2-card-desc">Entity choice (WOS/LLP/Branch), 100% FDI automatic approvals, banking KYC, and tax structures mapped into one clear timeline.</p>
          </div>
        </div>

        <!-- PILLAR CARD 3: ONE ACCOUNTABLE PARTNER -->
        <div class="ob-s2-pillar-card p-3">
          <div class="ob-s2-card-icon" style="background: #f0fdf4 !important; border: 1.5px solid #10b981 !important; color: #059669 !important; box-shadow: 0 4px 12px rgba(16,185,129,0.18) !important;">
            🎯
          </div>
          <div>
            <h4 class="ob-s2-card-title">One Accountable Partner</h4>
            <p class="ob-s2-card-desc">Eliminate fragmented local vendors with a single dedicated India Expansion Director guiding every workstream.</p>
          </div>
        </div>

        <!-- CTA BUTTON (FLOWS IN AT ~480ms) -->
        <div class="ob-s2-cta-wrap">
          <a href="#roadmap-form-section" class="btn-primary hero-btn-glow ob-s2-cta-btn">
            <span>Discuss Your India Plans</span>
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
        </div>
      </div>

      <!-- RIGHT COLUMN: MASTER REBUILT INTERACTIVE ROADMAP (VISUAL CENTERPIECE + CONTINUOUS EDITORIAL LAYER) -->
      <div class="ob-s2-right-stack">
        <div class="ob-s2-roadmap-box" style="background: #DDF7FA !important; background-color: #DDF7FA !important;">
          
          <!-- CONTINUOUS EDITORIAL DECORATIVE LAYER (BEHIND CONTENT • Z-INDEX 1) -->
          <div class="ob-s2-roadmap-decor">
            
            <!-- 1. CONTINUOUSLY ANIMATED DOTTED CURVED SVG PATH -->
            <svg class="ob-s2-decor-curve-svg" viewBox="0 0 540 440" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M 20 70 C 160 10, 400 10, 500 80 C 550 160, 520 330, 420 370 C 300 410, 100 360, 30 300" stroke="rgba(255, 199, 0, 0.40)" stroke-width="2.4" stroke-linecap="round" class="ob-s2-flowing-dotted-path"/>
            </svg>

            <!-- 2. CONTINUOUSLY MOVING ACCENT DOT ALONG THE CURVE -->
            <div class="ob-s2-decor-traveling-dot"></div>

            <!-- 3. FLOATING EDITORIAL 4-POINT STAR (UPPER-LEFT / UPPER-MIDDLE) -->
            <div class="ob-s2-decor-star">✦</div>

            <!-- 4. FLOATING OUTLINE HEART (LOWER-LEFT) -->
            <div class="ob-s2-decor-heart">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#ff9900" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
              </svg>
            </div>

            <!-- 5. FLOATING EDITORIAL SPEECH BUBBLE MARK (LOWER-RIGHT) -->
            <div class="ob-s2-decor-bubble">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#00b4d8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"/>
              </svg>
            </div>

            <!-- 6. CURVED HAND-DRAWN EDITORIAL ANNOTATION STROKE (UPPER-RIGHT) -->
            <div class="ob-s2-decor-curved-mark">
              <svg width="44" height="24" viewBox="0 0 44 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4 20 C 18 4, 30 6, 40 18" stroke="#ffc700" stroke-width="2.5" stroke-linecap="round"/>
              </svg>
            </div>

            <!-- 7. DELIBERATELY PLACED DECORATIVE ACCENT DOTS -->
            <div class="ob-s2-decor-dot dot-1"></div>
            <div class="ob-s2-decor-dot dot-2"></div>
            <div class="ob-s2-decor-dot dot-3"></div>
            <div class="ob-s2-decor-dot dot-4"></div>
          </div>

          <!-- ROADMAP CONTENT INNER CONTAINER (Z-INDEX 2) -->
          <div class="ob-s2-roadmap-inner">
            
            <!-- TOP CARD HEADER: STATUS BADGE + TURNKEY PILL -->
            <div style="display: flex !important; align-items: center !important; justify-content: space-between !important; margin-bottom: 26px !important; border-bottom: 1px dashed #e2e8f0 !important; padding-bottom: 16px !important; position: relative !important;">
              <div style="display: inline-flex !important; align-items: center !important; gap: 8px !important; padding: 6px 14px !important; background: #fffdf5 !important; border: 1px solid #fde68a !important; border-radius: 20px !important; font-size: 0.76rem !important; font-weight: 800 !important; color: #080c16 !important;">
                <span style="width: 8px !important; height: 8px !important; border-radius: 50% !important; background: #ffc700 !important; box-shadow: 0 0 10px #ffc700 !important; display: inline-block !important;"></span>
                <span>INDIA EXPANSION ROADMAP</span>
              </div>

              <div style="display: inline-flex !important; align-items: center !important; gap: 6px !important; font-family: 'Outfit', sans-serif !important; font-size: 0.76rem !important; font-weight: 800 !important; color: #0077b6 !important; background: #e0f2fe !important; padding: 5px 12px !important; border-radius: 14px !important;">
                <span>⚡ 100% Turnkey</span>
              </div>
            </div>

            <!-- CLEAN 5-STAGE VISUAL TIMELINE WITH SVG STROKE DRAW & TRAVELING DOT -->
            <div class="ob-s2-timeline-visual" style="position: relative !important; margin: 10px 0 20px 0 !important;">
              
              <!-- SVG CONNECTING DRAWING TRACK -->
              <div class="ob-s2-svg-track-wrap" style="position: absolute; top: 22px; left: 8%; right: 8%; height: 6px; z-index: 1; pointer-events: none;">
                <svg viewBox="0 0 450 6" fill="none" xmlns="http://www.w3.org/2000/svg" style="width: 100%; height: 100%; display: block; overflow: visible;">
                  <line x1="0" y1="3" x2="450" y2="3" stroke="#f1f5f9" stroke-width="6" stroke-linecap="round"/>
                  <line x1="0" y1="3" x2="450" y2="3" stroke="url(#obTrackGrad)" stroke-width="4" stroke-linecap="round" class="ob-s2-track-stroke"/>
                  <circle cx="225" cy="3" r="6.5" fill="#ffc700" class="ob-s2-traveling-dot"/>
                  <defs>
                    <linearGradient id="obTrackGrad" x1="0%" y1="0%" x2="100%" y2="0%">
                      <stop offset="0%" stop-color="#ffc700"/>
                      <stop offset="35%" stop-color="#00b4d8"/>
                      <stop offset="65%" stop-color="#10b981"/>
                      <stop offset="100%" stop-color="#080c16"/>
                    </linearGradient>
                  </defs>
                </svg>
              </div>

              <!-- 5 DISTINCT PROPORTIONAL NODES (ZERO CLASH) -->
              <div class="ob-s2-milestones-row" style="display: flex !important; justify-content: space-between !important; position: relative !important; z-index: 2 !important;">
                
                <!-- 01 STRATEGY -->
                <div class="ob-s2-milestone m-1" onmouseenter="obUpdateStagePreview('01 STRATEGY', 'Market Entry Strategy, Legal Entity Choice &amp; Feasibility', '#ffc700')" onclick="obUpdateStagePreview('01 STRATEGY', 'Market Entry Strategy, Legal Entity Choice &amp; Feasibility', '#ffc700')">
                  <div class="ob-s2-node-badge" style="width: 44px; height: 44px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 0.82rem; margin: 0 auto 8px auto; background: #ffffff; border: 2.5px solid #ffc700; color: #080c16; box-shadow: 0 6px 18px rgba(255,199,0,0.35); transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);">
                    01
                  </div>
                  <div class="ob-s2-node-label" style="font-family: 'Outfit', sans-serif; font-size: 0.72rem; font-weight: 800; color: #080c16; text-align: center; white-space: nowrap; transition: color 0.25s ease;">STRATEGY</div>
                </div>

                <!-- 02 SETUP -->
                <div class="ob-s2-milestone m-2" onmouseenter="obUpdateStagePreview('02 SETUP', 'MCA Incorporation, DIN/DSC, PAN/TAN &amp; Statutory Filings', '#00b4d8')" onclick="obUpdateStagePreview('02 SETUP', 'MCA Incorporation, DIN/DSC, PAN/TAN &amp; Statutory Filings', '#00b4d8')">
                  <div class="ob-s2-node-badge" style="width: 44px; height: 44px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 0.82rem; margin: 0 auto 8px auto; background: #ffffff; border: 2.5px solid #00b4d8; color: #0077b6; box-shadow: 0 6px 18px rgba(0,180,216,0.25); transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);">
                    02
                  </div>
                  <div class="ob-s2-node-label" style="font-family: 'Outfit', sans-serif; font-size: 0.72rem; font-weight: 800; color: #080c16; text-align: center; white-space: nowrap; transition: color 0.25s ease;">SETUP</div>
                </div>

                <!-- 03 COMPLIANCE (ACTIVE STAGE WITH GLOW) -->
                <div class="ob-s2-milestone m-3 active-pulse" onmouseenter="obUpdateStagePreview('03 COMPLIANCE', 'GST, Direct Tax, Labor Governance, Payroll &amp; Accounting', '#10b981')" onclick="obUpdateStagePreview('03 COMPLIANCE', 'GST, Direct Tax, Labor Governance, Payroll &amp; Accounting', '#10b981')">
                  <div class="ob-s2-node-badge" style="width: 48px; height: 48px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 900; font-size: 0.88rem; margin: 0 auto 8px auto; background: #10b981; border: 2.5px solid #080c16; color: #ffffff; box-shadow: 0 8px 26px rgba(16,185,129,0.55); transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);">
                    03
                  </div>
                  <div class="ob-s2-node-label" style="font-family: 'Outfit', sans-serif; font-size: 0.76rem; font-weight: 900; color: #080c16; text-align: center; white-space: nowrap; transition: color 0.25s ease;">COMPLIANCE</div>
                </div>

                <!-- 04 BANKING -->
                <div class="ob-s2-milestone m-4" onmouseenter="obUpdateStagePreview('04 BANKING', 'Corporate Bank Account, FDI/FEMA Reporting &amp; Capital Inward', '#ffc700')" onclick="obUpdateStagePreview('04 BANKING', 'Corporate Bank Account, FDI/FEMA Reporting &amp; Capital Inward', '#ffc700')">
                  <div class="ob-s2-node-badge" style="width: 44px; height: 44px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 0.82rem; margin: 0 auto 8px auto; background: #ffffff; border: 2.5px solid #ffc700; color: #b45309; box-shadow: 0 6px 18px rgba(255,199,0,0.35); transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);">
                    04
                  </div>
                  <div class="ob-s2-node-label" style="font-family: 'Outfit', sans-serif; font-size: 0.72rem; font-weight: 800; color: #080c16; text-align: center; white-space: nowrap; transition: color 0.25s ease;">BANKING</div>
                </div>

                <!-- 05 LAUNCH -->
                <div class="ob-s2-milestone m-5" onmouseenter="obUpdateStagePreview('05 LAUNCH 🚀', 'Dedicated Talent Pods, Infrastructure &amp; Operational Go-Live', '#080c16')" onclick="obUpdateStagePreview('05 LAUNCH 🚀', 'Dedicated Talent Pods, Infrastructure &amp; Operational Go-Live', '#080c16')">
                  <div class="ob-s2-node-badge" style="width: 44px; height: 44px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 0.82rem; margin: 0 auto 8px auto; background: #080c16; border: 2.5px solid #ffc700; color: #ffffff; box-shadow: 0 6px 18px rgba(8,12,22,0.35); transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);">
                    05
                  </div>
                  <div class="ob-s2-node-label" style="font-family: 'Outfit', sans-serif; font-size: 0.72rem; font-weight: 800; color: #080c16; text-align: center; white-space: nowrap; transition: color 0.25s ease;">LAUNCH 🚀</div>
                </div>

              </div>

              <!-- INTERACTIVE STAGE INSPECTOR PANEL (DYNAMICALLY UPDATES ON HOVER/CLICK) -->
              <div id="ob-s2-inspector" class="ob-s2-inspector-panel">
                <div style="display: flex; align-items: center; gap: 8px;">
                  <span id="ob-s2-insp-tag" style="font-family: 'Outfit', sans-serif; font-size: 0.72rem; font-weight: 900; background: #10b981; color: #ffffff; padding: 2px 8px; border-radius: 10px;">03 COMPLIANCE</span>
                  <span id="ob-s2-insp-desc" style="font-size: 0.74rem; color: #334155; font-weight: 600;">GST, Direct Tax, Labor Governance, Payroll &amp; Accounting</span>
                </div>
                <span style="font-size: 0.68rem; color: #94a3b8; font-weight: 700;">Hover stages ▾</span>
              </div>

            </div>

            <!-- TIME ESTIMATE STRIP -->
            <div style="text-align: center; margin: 8px 0 18px 0;">
              <span class="ob-s2-turnkey-banner">
                — 2 TO 4 WEEKS TURNKEY LAUNCH —
              </span>
            </div>

            <!-- LIVE METRICS SUMMARY GRID -->
            <div class="ob-s2-metrics-row" style="display: grid !important; grid-template-columns: 1fr 1fr !important; gap: 14px !important; margin-bottom: 20px !important;">
              
              <div class="ob-s2-metric-box-1">
                <div style="font-size: 0.74rem !important; font-weight: 700 !important; color: #64748b !important; margin-bottom: 6px !important;">FDI & FEMA SLA</div>
                <div style="display: flex !important; align-items: center !important; justify-content: space-between !important; margin-bottom: 8px !important;">
                  <span id="ob-sla-counter" style="font-family: 'Outfit', 'Inter', sans-serif !important; font-size: 1.25rem !important; font-weight: 900 !important; color: #080c16 !important;">100%</span>
                  <span style="font-size: 0.68rem !important; font-weight: 800 !important; background: #dcfce7 !important; color: #15803d !important; padding: 2px 7px !important; border-radius: 10px !important;">Automatic</span>
                </div>
                <div style="height: 6px !important; background: #e2e8f0 !important; border-radius: 10px !important; overflow: hidden !important;">
                  <div class="ob-s2-meter-fill" style="height: 100% !important; width: 100% !important; background: #10b981 !important; border-radius: 10px !important;"></div>
                </div>
              </div>

              <div class="ob-s2-metric-box-2">
                <div style="font-size: 0.74rem !important; font-weight: 700 !important; color: #64748b !important; margin-bottom: 6px !important;">Talent Deployment</div>
                <div style="display: flex !important; align-items: center !important; justify-content: space-between !important; margin-bottom: 8px !important;">
                  <span style="font-family: 'Outfit', 'Inter', sans-serif !important; font-size: 1.25rem !important; font-weight: 900 !important; color: #080c16 !important;">&lt; 21 Days</span>
                  <span style="font-size: 0.68rem !important; font-weight: 800 !important; background: #e0f2fe !important; color: #0369a1 !important; padding: 2px 7px !important; border-radius: 10px !important;">-40% SLA</span>
                </div>
                <div style="height: 6px !important; background: #e2e8f0 !important; border-radius: 10px !important; overflow: hidden !important;">
                  <div class="ob-s2-meter-fill" style="height: 100% !important; width: 88% !important; background: #00b4d8 !important; border-radius: 10px !important;"></div>
                </div>
              </div>

            </div>

            <!-- BOTTOM EXPANSION DIRECTOR ACCOUNTABILITY STRIP -->
            <div class="ob-s2-director-strip">
              <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/team-avatar-lead.jpg' ); ?>" alt="Rajesh Kumar" class="ob-s2-director-avatar" />
              <div>
                <div style="font-size: 0.86rem !important; font-weight: 800 !important; color: #080c16 !important;">Rajesh Kumar &bull; India Expansion Director</div>
                <div style="font-size: 0.72rem !important; color: #64748b !important;">🟢 Bengaluru &bull; Mumbai &bull; NCR &bull; Hyderabad Hubs Live</div>
              </div>
            </div>

          </div>

        </div>
      </div>

    </div>

  </div>
</section>

<!-- SECTION 02 BULLETPROOF ANIMATION TRIGGER & INTERACTIVE INSPECTOR SCRIPT -->
<script id="ob-s2-master-trigger-js">
function obUpdateStagePreview(tag, desc, color) {
  var tagEl = document.getElementById('ob-s2-insp-tag');
  var descEl = document.getElementById('ob-s2-insp-desc');
  if (tagEl && descEl) {
    tagEl.innerText = tag;
    tagEl.style.background = color;
    tagEl.style.color = (color === '#080c16' || color === '#10b981' ? '#ffffff' : '#080c16');
    descEl.innerText = desc;
  }
}

(function() {
  function initSectionTwoMasterFlow() {
    var sec = document.getElementById('why-india-roadmap');
    if (!sec) return;
    
    function triggerMotion() {
      if (!sec.classList.contains('is-visible')) {
        sec.classList.add('is-visible');
        
        // SLA 100% Count-Up Effect
        var countEl = document.getElementById('ob-sla-counter');
        if (countEl) {
          var curr = 0;
          var timer = setInterval(function() {
            curr += 5;
            if (curr >= 100) {
              curr = 100;
              clearInterval(timer);
            }
            countEl.innerText = curr + '%';
          }, 30);
        }
      }
    }

    // 1. Direct viewport check on load
    var rect = sec.getBoundingClientRect();
    if (rect.top < window.innerHeight * 0.95 && rect.bottom > 0) {
      setTimeout(triggerMotion, 100);
    }

    // 2. IntersectionObserver for scroll
    if ('IntersectionObserver' in window) {
      var observer = new IntersectionObserver(function(entries) {
        entries.forEach(function(entry) {
          if (entry.isIntersecting) {
            triggerMotion();
          }
        });
      }, { threshold: 0.12, rootMargin: '60px 0px 60px 0px' });

      observer.observe(sec);
    }

    // 3. Fallback Scroll Listener
    window.addEventListener('scroll', function() {
      if (!sec.classList.contains('is-visible')) {
        var r = sec.getBoundingClientRect();
        if (r.top < window.innerHeight * 0.90) {
          triggerMotion();
        }
      }
    }, { passive: true });
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initSectionTwoMasterFlow);
  } else {
    initSectionTwoMasterFlow();
  }
  window.addEventListener('load', initSectionTwoMasterFlow);
})();
</script>

<!-- ==========================================================================
     SECTION 3: EVERYTHING YOU NEED TO ENTER INDIA AND BECOME OPERATIONAL (HUGO INC 8-CARD EDITORIAL GRID - REF: IMAGES 2 & 3)
     ========================================================================== -->
<section class="section-padding ob-hugo-services-section" id="ob-services-spectrum">
  
  <!-- SCOPED INLINE MASTER CSS FOR HUGO-TIER SECTION 3 -->
  <style id="ob-s3-scoped-master-css">
    /* ==========================================================================
       HUGO-TIER SECTION 03 MASTER DESIGN SYSTEM (.ob-hugo-services-section)
       ========================================================================== */
    .ob-hugo-services-section {
      background: #fafbfd !important;
      padding: 110px 0 120px 0 !important;
      position: relative !important;
      overflow: hidden !important;
      width: 100% !important;
      font-family: 'Outfit', 'Inter', -apple-system, BlinkMacSystemFont, sans-serif !important;
      color: #080c16 !important;
    }

    /* Ambient Background Blobs */
    .ob-s3-bg-ambient {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      pointer-events: none;
      z-index: 1;
      overflow: hidden;
    }

    .ob-s3-orb {
      position: absolute;
      border-radius: 50%;
      filter: blur(100px);
      opacity: 0.45;
    }

    .ob-s3-orb-1 {
      top: -60px;
      left: 2%;
      width: 500px;
      height: 500px;
      background: radial-gradient(circle, rgba(254, 240, 138, 0.7) 0%, rgba(255, 255, 255, 0) 70%);
      animation: obS3FloatA 22s ease-in-out infinite alternate;
    }

    .ob-s3-orb-2 {
      bottom: -80px;
      right: 2%;
      width: 540px;
      height: 540px;
      background: radial-gradient(circle, rgba(167, 243, 208, 0.6) 0%, rgba(255, 255, 255, 0) 70%);
      animation: obS3FloatB 24s ease-in-out infinite alternate;
    }

    .ob-s3-orb-3 {
      top: 45%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 440px;
      height: 440px;
      background: radial-gradient(circle, rgba(186, 230, 253, 0.5) 0%, rgba(255, 255, 255, 0) 70%);
      animation: obS3FloatA 18s ease-in-out infinite alternate;
    }

    @keyframes obS3FloatA {
      0% { transform: translateY(0) scale(1); }
      100% { transform: translateY(-28px) scale(1.06); }
    }

    @keyframes obS3FloatB {
      0% { transform: translateY(0) scale(1.05); }
      100% { transform: translateY(28px) scale(0.95); }
    }

    /* Section Container & Header */
    .ob-s3-container {
      max-width: 1320px;
      margin: 0 auto;
      padding: 0 24px;
      position: relative;
      z-index: 3;
    }

    .ob-s3-header {
      text-align: center;
      max-width: 900px;
      margin: 0 auto 60px;
    }

    .ob-s3-pill-badge {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      background: #fefce8;
      border: 1.5px solid #fde047;
      border-radius: 9999px;
      padding: 6px 20px;
      font-size: 0.78rem;
      font-weight: 800;
      letter-spacing: 0.08em;
      text-transform: uppercase;
      color: #b45309;
      margin-bottom: 22px;
      box-shadow: 0 4px 14px rgba(245, 158, 11, 0.1);
    }

    .ob-s3-pulse-dot {
      width: 8px;
      height: 8px;
      border-radius: 50%;
      background: #f59e0b;
      box-shadow: 0 0 0 0 rgba(245, 158, 11, 0.7);
      animation: obS3DotPulse 2s infinite;
    }

    @keyframes obS3DotPulse {
      0% { transform: scale(0.95); box-shadow: 0 0 0 0 rgba(245, 158, 11, 0.7); }
      70% { transform: scale(1); box-shadow: 0 0 0 8px rgba(245, 158, 11, 0); }
      100% { transform: scale(0.95); box-shadow: 0 0 0 0 rgba(245, 158, 11, 0); }
    }

    .ob-s3-main-title {
      font-size: clamp(2.2rem, 4.2vw, 3.5rem) !important;
      font-weight: 900 !important;
      color: #080c16 !important;
      line-height: 1.18 !important;
      letter-spacing: -0.025em !important;
      margin: 0 0 20px 0 !important;
    }

    .ob-s3-title-underline {
      position: relative;
      display: inline-block;
      white-space: nowrap;
    }

    .ob-s3-title-underline::after {
      content: '';
      position: absolute;
      bottom: -6px;
      left: 0;
      width: 100%;
      height: 5.5px;
      background: #f59e0b;
      border-radius: 3px;
      transform-origin: left;
      animation: obS3UnderlineGrow 1.5s cubic-bezier(0.16, 1, 0.3, 1) forwards;
    }

    @keyframes obS3UnderlineGrow {
      from { transform: scaleX(0); }
      to { transform: scaleX(1); }
    }

    .ob-s3-main-sub {
      font-size: 1.15rem !important;
      color: #475569 !important;
      line-height: 1.65 !important;
      max-width: 780px;
      margin: 0 auto;
    }

    /* 8-Card Grid Area */
    .ob-s3-grid-wrapper {
      position: relative;
      margin-bottom: 56px;
    }

    .ob-s3-cards-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 28px;
      position: relative;
      z-index: 2;
    }

    /* Hugo Inc Editorial Card Component (Ref: Image 2 & 3) */
    .ob-s3-editorial-card {
      background: #ffffff;
      border-radius: 22px;
      padding: 18px 18px 24px 18px;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      position: relative;
      transition: all 0.38s cubic-bezier(0.16, 1, 0.3, 1);
      box-shadow: 0 6px 24px rgba(15, 23, 42, 0.05);
      border: 1.5px solid #e2e8f0;
      overflow: hidden;
      text-decoration: none !important;
      color: inherit !important;
    }

    .ob-s3-editorial-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 22px 50px rgba(15, 23, 42, 0.12);
    }

    /* Color Variant Borders & Accent Glows */
    .ob-s3-card-gold { border-color: #fef08a; }
    .ob-s3-card-gold:hover { border-color: #f59e0b; box-shadow: 0 22px 50px rgba(245, 158, 11, 0.15); }
    
    .ob-s3-card-cyan { border-color: #bae6fd; }
    .ob-s3-card-cyan:hover { border-color: #0284c7; box-shadow: 0 22px 50px rgba(2, 132, 199, 0.15); }

    .ob-s3-card-purple { border-color: #e9d5ff; }
    .ob-s3-card-purple:hover { border-color: #9333ea; box-shadow: 0 22px 50px rgba(147, 51, 234, 0.15); }

    .ob-s3-card-green { border-color: #bbf7d0; }
    .ob-s3-card-green:hover { border-color: #10b981; box-shadow: 0 22px 50px rgba(16, 185, 129, 0.15); }

    .ob-s3-card-orange { border-color: #fed7aa; }
    .ob-s3-card-orange:hover { border-color: #f97316; box-shadow: 0 22px 50px rgba(249, 115, 22, 0.15); }

    .ob-s3-card-blue { border-color: #c7d2fe; }
    .ob-s3-card-blue:hover { border-color: #4f46e5; box-shadow: 0 22px 50px rgba(79, 70, 229, 0.15); }

    .ob-s3-card-indigo { border-color: #ddd6fe; }
    .ob-s3-card-indigo:hover { border-color: #7c3aed; box-shadow: 0 22px 50px rgba(124, 58, 237, 0.15); }

    .ob-s3-card-pink { border-color: #fbcfe8; }
    .ob-s3-card-pink:hover { border-color: #db2777; box-shadow: 0 22px 50px rgba(219, 39, 119, 0.15); }

    /* Top Rich Visual Graphic Box (Hugo Editorial Stage) */
    .ob-s3-card-visual-stage {
      width: 100%;
      height: 180px;
      border-radius: 16px;
      position: relative;
      overflow: hidden;
      margin-bottom: 20px;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: transform 0.4s ease;
    }

    .ob-s3-editorial-card:hover .ob-s3-card-visual-stage {
      transform: scale(1.02);
    }

    /* Gradients for Visual Boxes */
    .ob-stage-gold { background: linear-gradient(135deg, #fef9c3 0%, #fef08a 60%, #fed7aa 100%); }
    .ob-stage-cyan { background: linear-gradient(135deg, #e0f2fe 0%, #bae6fd 60%, #c7d2fe 100%); }
    .ob-stage-purple { background: linear-gradient(135deg, #f3e8ff 0%, #e9d5ff 60%, #ddd6fe 100%); }
    .ob-stage-green { background: linear-gradient(135deg, #dcfce7 0%, #bbf7d0 60%, #a7f3d0 100%); }
    .ob-stage-orange { background: linear-gradient(135deg, #ffedd5 0%, #fed7aa 60%, #fecdd3 100%); }
    .ob-stage-blue { background: linear-gradient(135deg, #e0e7ff 0%, #c7d2fe 60%, #bae6fd 100%); }
    .ob-stage-indigo { background: linear-gradient(135deg, #ede9fe 0%, #ddd6fe 60%, #e9d5ff 100%); }
    .ob-stage-pink { background: linear-gradient(135deg, #fce7f3 0%, #fbcfe8 60%, #fed7aa 100%); }

    /* Hugo Signature Circular Stamp Badge (Top Right of Visual) */
    .ob-hugo-stamp-badge {
      position: absolute;
      top: 10px;
      right: 10px;
      width: 44px;
      height: 44px;
      border-radius: 50%;
      border: 1.5px dashed rgba(255, 255, 255, 0.85);
      background: #ea580c;
      color: #ffffff;
      font-size: 0.62rem;
      font-weight: 900;
      letter-spacing: 0.04em;
      text-transform: uppercase;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      text-align: center;
      transform: rotate(-10deg);
      box-shadow: 0 4px 12px rgba(234, 88, 12, 0.35);
      z-index: 5;
      line-height: 1.1;
      padding: 2px;
      transition: transform 0.3s ease;
    }

    .ob-s3-editorial-card:hover .ob-hugo-stamp-badge {
      transform: rotate(0deg) scale(1.08);
    }

    .ob-stamp-gold { background: #d97706; box-shadow: 0 4px 12px rgba(217, 119, 6, 0.4); }
    .ob-stamp-cyan { background: #0284c7; box-shadow: 0 4px 12px rgba(2, 132, 199, 0.4); }
    .ob-stamp-purple { background: #7c3aed; box-shadow: 0 4px 12px rgba(124, 58, 237, 0.4); }
    .ob-stamp-green { background: #059669; box-shadow: 0 4px 12px rgba(5, 150, 105, 0.4); }
    .ob-stamp-orange { background: #ea580c; box-shadow: 0 4px 12px rgba(234, 88, 12, 0.4); }
    .ob-stamp-blue { background: #3730a3; box-shadow: 0 4px 12px rgba(55, 48, 163, 0.4); }
    .ob-stamp-indigo { background: #6d28d9; box-shadow: 0 4px 12px rgba(109, 40, 217, 0.4); }
    .ob-stamp-pink { background: #be185d; box-shadow: 0 4px 12px rgba(190, 24, 93, 0.4); }

    /* Glassmorphic Live Telemetry UI Card inside Visual */
    .ob-visual-glass-card {
      position: relative;
      z-index: 2;
      background: rgba(255, 255, 255, 0.88);
      backdrop-filter: blur(10px);
      -webkit-backdrop-filter: blur(10px);
      border: 1px solid rgba(255, 255, 255, 0.95);
      border-radius: 14px;
      padding: 12px 16px;
      box-shadow: 0 8px 24px rgba(15, 23, 42, 0.08);
      width: 82%;
      display: flex;
      align-items: center;
      gap: 12px;
      transition: transform 0.3s ease;
    }

    .ob-s3-editorial-card:hover .ob-visual-glass-card {
      transform: translateY(-3px);
    }

    .ob-vgc-icon-ring {
      width: 44px;
      height: 44px;
      border-radius: 12px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.4rem;
      background: #ffffff;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.06);
      flex-shrink: 0;
    }

    .ob-vgc-info {
      display: flex;
      flex-direction: column;
      gap: 2px;
      overflow: hidden;
    }

    .ob-vgc-label {
      font-size: 0.70rem;
      font-weight: 800;
      letter-spacing: 0.06em;
      text-transform: uppercase;
      color: #64748b;
    }

    .ob-vgc-metric {
      font-size: 0.88rem;
      font-weight: 800;
      color: #080c16;
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
    }

    .ob-vgc-status-dot {
      display: inline-block;
      width: 6px;
      height: 6px;
      border-radius: 50%;
      background: #10b981;
      margin-right: 4px;
    }

    /* Card Content Area */
    .ob-s3-card-content {
      display: flex;
      flex-direction: column;
      flex-grow: 1;
      padding: 0 6px;
    }

    .ob-s3-card-meta-row {
      display: flex;
      align-items: center;
      gap: 8px;
      margin-bottom: 10px;
    }

    .ob-s3-card-date {
      font-size: 0.74rem;
      font-weight: 800;
      letter-spacing: 0.06em;
      text-transform: uppercase;
      color: #64748b;
    }

    .ob-s3-meta-tag {
      font-size: 0.74rem;
      font-weight: 800;
      color: #0d9488;
      text-decoration: underline;
    }

    .ob-s3-card-title {
      font-size: 1.25rem !important;
      font-weight: 800 !important;
      color: #080c16 !important;
      margin: 0 0 12px 0 !important;
      line-height: 1.3 !important;
      letter-spacing: -0.015em !important;
      transition: color 0.25s ease;
    }

    .ob-s3-editorial-card:hover .ob-s3-card-title {
      color: #0d9488 !important;
    }

    .ob-s3-card-desc {
      font-size: 0.92rem !important;
      color: #475569 !important;
      line-height: 1.58 !important;
      margin: 0 0 20px 0 !important;
      flex-grow: 1;
    }

    /* Card CTA Link */
    .ob-s3-card-footer {
      padding-top: 14px;
      border-top: 1px dashed #e2e8f0;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    .ob-s3-card-btn-link {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      font-size: 0.90rem;
      font-weight: 800;
      color: #080c16;
      transition: all 0.25s ease;
    }

    .ob-s3-card-btn-link span.arrow {
      color: #d97706;
      font-weight: 900;
      transition: transform 0.25s ease;
    }

    .ob-s3-editorial-card:hover .ob-s3-card-btn-link {
      color: #d97706;
    }

    .ob-s3-editorial-card:hover .ob-s3-card-btn-link span.arrow {
      transform: translateX(4px);
    }

    .ob-s3-card-num-chip {
      font-size: 0.75rem;
      font-weight: 900;
      color: #94a3b8;
      background: #f1f5f9;
      padding: 3px 8px;
      border-radius: 6px;
    }

    
    /* Bottom Action Bar (Ultra-Luxury Editorial Conversion Ribbon - Zero Negative Space) */
    .ob-s3-bottom-actions {
      position: relative !important;
      display: flex !important;
      flex-direction: row !important;
      align-items: center !important;
      justify-content: space-between !important;
      gap: 32px !important;
      background: linear-gradient(135deg, #FFFFFF 0%, #FFFDF8 45%, #FFFBEB 100%) !important;
      border: 1.5px solid #FDE68A !important;
      border-radius: 24px !important;
      padding: 32px 42px !important;
      box-shadow: 0 16px 40px rgba(217, 119, 6, 0.09), 0 2px 6px rgba(0, 0, 0, 0.02) !important;
      overflow: hidden !important;
      transition: all 0.35s cubic-bezier(0.16, 1, 0.3, 1) !important;
      margin-top: 40px !important;
      box-sizing: border-box !important;
      width: 100% !important;
    }
    .ob-s3-bottom-actions:hover {
      border-color: #F59E0B !important;
      box-shadow: 0 24px 54px rgba(217, 119, 6, 0.14) !important;
      transform: translateY(-2px) !important;
    }
    .ob-s3-act-glow {
      position: absolute !important;
      top: -50px !important;
      right: -50px !important;
      width: 240px !important;
      height: 240px !important;
      background: radial-gradient(circle, rgba(254, 240, 138, 0.5) 0%, rgba(255, 255, 255, 0) 70%) !important;
      pointer-events: none !important;
      border-radius: 50% !important;
      filter: blur(40px) !important;
    }
    .ob-s3-act-left {
      position: relative !important;
      z-index: 2 !important;
      flex: 1 1 auto !important;
      max-width: 640px !important;
      text-align: left !important;
    }
    .ob-s3-act-badge {
      display: inline-flex !important;
      align-items: center !important;
      gap: 7px !important;
      background: #FEF3C7 !important;
      border: 1px solid #FDE68A !important;
      padding: 4px 12px !important;
      border-radius: 9999px !important;
      font-size: 10.5px !important;
      font-weight: 800 !important;
      color: #B45309 !important;
      letter-spacing: 0.8px !important;
      margin-bottom: 10px !important;
      text-transform: uppercase !important;
    }
    .ob-s3-act-pulse {
      width: 6px !important;
      height: 6px !important;
      border-radius: 50% !important;
      background: #D97706 !important;
      box-shadow: 0 0 6px #D97706 !important;
      animation: obPulseAct 2s infinite ease-in-out !important;
    }
    @keyframes obPulseAct {
      0%, 100% { transform: scale(1); opacity: 1; }
      50% { transform: scale(1.4); opacity: 0.5; }
    }
    .ob-s3-act-title {
      font-size: clamp(19px, 1.8vw, 24px) !important;
      font-weight: 800 !important;
      color: #0F172A !important;
      margin: 0 0 6px 0 !important;
      line-height: 1.3 !important;
      letter-spacing: -0.015em !important;
    }
    .ob-s3-act-desc {
      font-size: 14.5px !important;
      color: #475569 !important;
      margin: 0 0 14px 0 !important;
      line-height: 1.6 !important;
      font-weight: 400 !important;
    }
    .ob-s3-act-pills {
      display: flex !important;
      align-items: center !important;
      flex-wrap: wrap !important;
      gap: 8px !important;
    }
    .ob-s3-act-pill {
      display: inline-flex !important;
      align-items: center !important;
      background: #FFFFFF !important;
      border: 1px solid #E2E8F0 !important;
      border-radius: 6px !important;
      padding: 3px 10px !important;
      font-size: 12px !important;
      font-weight: 700 !important;
      color: #334155 !important;
      box-shadow: 0 1px 3px rgba(0, 0, 0, 0.03) !important;
    }
    .ob-s3-act-right {
      position: relative !important;
      z-index: 2 !important;
      display: flex !important;
      align-items: center !important;
      gap: 14px !important;
      flex-shrink: 0 !important;
    }
    .ob-s3-action-btn-main {
      display: inline-flex !important;
      align-items: center !important;
      gap: 10px !important;
      background: linear-gradient(135deg, #F59E0B 0%, #D97706 100%) !important;
      color: #FFFFFF !important;
      font-weight: 800 !important;
      font-size: 15px !important;
      padding: 14px 28px !important;
      border-radius: 9999px !important;
      text-decoration: none !important;
      white-space: nowrap !important;
      box-shadow: 0 8px 24px rgba(217, 119, 6, 0.35) !important;
      transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1) !important;
    }
    .ob-s3-action-btn-main svg {
      transition: transform 0.3s ease !important;
    }
    .ob-s3-action-btn-main:hover {
      background: linear-gradient(135deg, #FBBF24 0%, #F59E0B 100%) !important;
      color: #FFFFFF !important;
      transform: translateY(-2px) !important;
      box-shadow: 0 12px 30px rgba(217, 119, 6, 0.48) !important;
    }
    .ob-s3-action-btn-main:hover svg {
      transform: translateX(4px) !important;
    }
    .ob-s3-action-btn-sub {
      display: inline-flex !important;
      align-items: center !important;
      gap: 8px !important;
      font-size: 14.5px !important;
      font-weight: 700 !important;
      color: #B45309 !important;
      background: #FFFFFF !important;
      border: 1.5px solid #FDE68A !important;
      padding: 13px 24px !important;
      border-radius: 9999px !important;
      text-decoration: none !important;
      white-space: nowrap !important;
      box-shadow: 0 2px 8px rgba(217, 119, 6, 0.06) !important;
      transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1) !important;
    }
    .ob-s3-action-btn-sub svg {
      transition: transform 0.3s ease !important;
    }
    .ob-s3-action-btn-sub:hover {
      background: #FFFBEB !important;
      border-color: #F59E0B !important;
      color: #92400E !important;
      transform: translateY(-2px) !important;
      box-shadow: 0 6px 18px rgba(217, 119, 6, 0.12) !important;
    }
    .ob-s3-action-btn-sub:hover svg {
      transform: translateX(3px) !important;
    }


    /* Scroll Reveal Initial States */
    .ob-s3-reveal {
      opacity: 0;
      transform: translateY(24px);
      transition: opacity 0.8s cubic-bezier(0.16, 1, 0.3, 1), transform 0.8s cubic-bezier(0.16, 1, 0.3, 1);
    }

    .ob-s3-revealed {
      opacity: 1 !important;
      transform: translateY(0) !important;
    }

    /* Responsive Breakpoints */
    @media (max-width: 1200px) {
      .ob-s3-cards-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 24px;
      }
    }

    @media (max-width: 768px) {
      .ob-hugo-services-section {
        padding: 70px 0 80px 0 !important;
      }
      .ob-s3-header {
        margin-bottom: 40px;
      }
      .ob-s3-card-visual-stage {
        height: 160px;
      }
      .ob-s3-bottom-actions {
        flex-direction: column !important;
        align-items: flex-start !important;
        padding: 24px 20px !important;
        gap: 20px !important;
      }
      .ob-s3-act-left {
        max-width: 100% !important;
      }
      .ob-s3-act-right {
        width: 100% !important;
        flex-direction: column !important;
        gap: 10px !important;
      }
      .ob-s3-action-btn-main,
      .ob-s3-action-btn-sub {
        width: 100% !important;
        justify-content: center !important;
        padding: 13px 20px !important;
      }
    }

    @media (max-width: 640px) {
      .ob-s3-cards-grid {
        grid-template-columns: 1fr;
        gap: 20px;
      }
      .ob-s3-editorial-card {
        padding: 16px 16px 20px 16px;
      }
      .ob-s3-main-title {
        font-size: 1.95rem !important;
      }
    }
  </style>

  <!-- Ambient Light Blobs -->
  <div class="ob-s3-bg-ambient">
    <div class="ob-s3-orb ob-s3-orb-1"></div>
    <div class="ob-s3-orb ob-s3-orb-2"></div>
    <div class="ob-s3-orb ob-s3-orb-3"></div>
  </div>

  <div class="ob-s3-container">

    <!-- Section Header (Ref: Image 2) -->
    <div class="ob-s3-header ob-s3-reveal">
      <div class="ob-s3-pill-badge">
        <span class="ob-s3-pulse-dot"></span>
        <span>COMPLETE INDIA MARKET OPERATING SYSTEM</span>
      </div>
      <h2 class="ob-s3-main-title">
        Everything You Need to Enter India and <span class="ob-s3-title-underline">Become Operational</span>
      </h2>
      <p class="ob-s3-main-sub">
        Focus on high-level growth. Overseas Bridge sources, coordinates, and executes every legal, financial, operational, and regulatory workstream with world-class precision.
      </p>
    </div>

    <!-- 8-Card Grid Area (Hugo Case Studies Pattern - Ref: Image 2 & 3) -->
    <div class="ob-s3-grid-wrapper">
      <div class="ob-s3-cards-grid">

        <!-- CARD 01: India Entry Strategy -->
        <a href="<?php echo esc_url( home_url( '/india-entry-strategy' ) ); ?>" class="ob-s3-editorial-card ob-s3-card-gold ob-s3-reveal">
          <div class="ob-s3-card-visual-stage ob-stage-gold">
            <div class="ob-hugo-stamp-badge ob-stamp-gold">
              <span>WORK</span>
              <span>01</span>
            </div>
            <div class="ob-visual-glass-card">
              <div class="ob-vgc-icon-ring" style="color: #d97706;">🧭</div>
              <div class="ob-vgc-info">
                <span class="ob-vgc-label">Strategy Blueprint</span>
                <span class="ob-vgc-metric"><span class="ob-vgc-status-dot"></span>WOS / LLP Models</span>
              </div>
            </div>
          </div>
          <div class="ob-s3-card-content">
            <div class="ob-s3-card-meta-row">
              <span class="ob-s3-card-date">WORKSTREAM 01</span>
              <span style="color: #cbd5e1;">•</span>
              <span class="ob-s3-meta-tag">Strategy &amp; FDI</span>
            </div>
            <h3 class="ob-s3-card-title">India Entry Strategy</h3>
            <p class="ob-s3-card-desc">
              Compare entry structures, operating models, locations, investment requirements and implementation risks before committing.
            </p>
            <div class="ob-s3-card-footer">
              <span class="ob-s3-card-btn-link">Explore Strategy <span class="arrow">&rarr;</span></span>
              <span class="ob-s3-card-num-chip">01</span>
            </div>
          </div>
        </a>

        <!-- CARD 02: Company & Entity Setup -->
        <a href="<?php echo esc_url( home_url( '/company-entity-setup' ) ); ?>" class="ob-s3-editorial-card ob-s3-card-cyan ob-s3-reveal">
          <div class="ob-s3-card-visual-stage ob-stage-cyan">
            <div class="ob-hugo-stamp-badge ob-stamp-cyan">
              <span>WORK</span>
              <span>02</span>
            </div>
            <div class="ob-visual-glass-card">
              <div class="ob-vgc-icon-ring" style="color: #0284c7;">🏢</div>
              <div class="ob-vgc-info">
                <span class="ob-vgc-label">Entity Formation</span>
                <span class="ob-vgc-metric"><span class="ob-vgc-status-dot"></span>MCA Fast-Track</span>
              </div>
            </div>
          </div>
          <div class="ob-s3-card-content">
            <div class="ob-s3-card-meta-row">
              <span class="ob-s3-card-date">WORKSTREAM 02</span>
              <span style="color: #cbd5e1;">•</span>
              <span class="ob-s3-meta-tag">Incorporation</span>
            </div>
            <h3 class="ob-s3-card-title">Company &amp; Entity Setup</h3>
            <p class="ob-s3-card-desc">
              Support for a wholly owned subsidiary, LLP, branch office, liaison office, project office or joint venture, subject to eligibility and specialist advice.
            </p>
            <div class="ob-s3-card-footer">
              <span class="ob-s3-card-btn-link">Explore Formation <span class="arrow">&rarr;</span></span>
              <span class="ob-s3-card-num-chip">02</span>
            </div>
          </div>
        </a>

        <!-- CARD 03: Registrations & Approvals -->
        <a href="<?php echo esc_url( home_url( '/services-overview' ) ); ?>" class="ob-s3-editorial-card ob-s3-card-purple ob-s3-reveal">
          <div class="ob-s3-card-visual-stage ob-stage-purple">
            <div class="ob-hugo-stamp-badge ob-stamp-purple">
              <span>WORK</span>
              <span>03</span>
            </div>
            <div class="ob-visual-glass-card">
              <div class="ob-vgc-icon-ring" style="color: #7c3aed;">🛡️</div>
              <div class="ob-vgc-info">
                <span class="ob-vgc-label">Statutory Clearance</span>
                <span class="ob-vgc-metric"><span class="ob-vgc-status-dot"></span>GST, PAN &amp; Trade</span>
              </div>
            </div>
          </div>
          <div class="ob-s3-card-content">
            <div class="ob-s3-card-meta-row">
              <span class="ob-s3-card-date">WORKSTREAM 03</span>
              <span style="color: #cbd5e1;">•</span>
              <span class="ob-s3-meta-tag">Licensing</span>
            </div>
            <h3 class="ob-s3-card-title">Registrations &amp; Approvals</h3>
            <p class="ob-s3-card-desc">
              Coordinate tax, labour, trade, import-export, state and industry-specific registrations based on your actual activities and thresholds.
            </p>
            <div class="ob-s3-card-footer">
              <span class="ob-s3-card-btn-link">Explore Licensing <span class="arrow">&rarr;</span></span>
              <span class="ob-s3-card-num-chip">03</span>
            </div>
          </div>
        </a>

        <!-- CARD 04: Banking & Finance Setup -->
        <a href="<?php echo esc_url( home_url( '/business-support-services' ) ); ?>" class="ob-s3-editorial-card ob-s3-card-green ob-s3-reveal">
          <div class="ob-s3-card-visual-stage ob-stage-green">
            <div class="ob-hugo-stamp-badge ob-stamp-green">
              <span>WORK</span>
              <span>04</span>
            </div>
            <div class="ob-visual-glass-card">
              <div class="ob-vgc-icon-ring" style="color: #059669;">📊</div>
              <div class="ob-vgc-info">
                <span class="ob-vgc-label">Corporate Banking</span>
                <span class="ob-vgc-metric"><span class="ob-vgc-status-dot"></span>Cross-Border KYC</span>
              </div>
            </div>
          </div>
          <div class="ob-s3-card-content">
            <div class="ob-s3-card-meta-row">
              <span class="ob-s3-card-date">WORKSTREAM 04</span>
              <span style="color: #cbd5e1;">•</span>
              <span class="ob-s3-meta-tag">Finance Readiness</span>
            </div>
            <h3 class="ob-s3-card-title">Banking &amp; Finance Setup</h3>
            <p class="ob-s3-card-desc">
              Prepare corporate bank-account documentation, ownership and KYC information, finance processes, accounting and reporting readiness.
            </p>
            <div class="ob-s3-card-footer">
              <span class="ob-s3-card-btn-link">Explore Banking <span class="arrow">&rarr;</span></span>
              <span class="ob-s3-card-num-chip">04</span>
            </div>
          </div>
        </a>

        <!-- CARD 05: Hiring, Payroll & HR -->
        <a href="<?php echo esc_url( home_url( '/build-your-dream-team' ) ); ?>" class="ob-s3-editorial-card ob-s3-card-orange ob-s3-reveal">
          <div class="ob-s3-card-visual-stage ob-stage-orange">
            <div class="ob-hugo-stamp-badge ob-stamp-orange">
              <span>WORK</span>
              <span>05</span>
            </div>
            <div class="ob-visual-glass-card">
              <div class="ob-vgc-icon-ring" style="color: #ea580c;">👥</div>
              <div class="ob-vgc-info">
                <span class="ob-vgc-label">Talent Sourcing</span>
                <span class="ob-vgc-metric"><span class="ob-vgc-status-dot"></span>Top 3% Dedicated Pods</span>
              </div>
            </div>
          </div>
          <div class="ob-s3-card-content">
            <div class="ob-s3-card-meta-row">
              <span class="ob-s3-card-date">WORKSTREAM 05</span>
              <span style="color: #cbd5e1;">•</span>
              <span class="ob-s3-meta-tag">Team &amp; Payroll</span>
            </div>
            <h3 class="ob-s3-card-title">Hiring, Payroll &amp; HR</h3>
            <p class="ob-s3-card-desc">
              Plan the India team, recruitment, employment documentation, payroll administration and applicable employee registrations.
            </p>
            <div class="ob-s3-card-footer">
              <span class="ob-s3-card-btn-link">Explore Hiring <span class="arrow">&rarr;</span></span>
              <span class="ob-s3-card-num-chip">05</span>
            </div>
          </div>
        </a>

        <!-- CARD 06: Office & Operational Setup -->
        <a href="<?php echo esc_url( home_url( '/studio-setup' ) ); ?>" class="ob-s3-editorial-card ob-s3-card-blue ob-s3-reveal">
          <div class="ob-s3-card-visual-stage ob-stage-blue">
            <div class="ob-hugo-stamp-badge ob-stamp-blue">
              <span>WORK</span>
              <span>06</span>
            </div>
            <div class="ob-visual-glass-card">
              <div class="ob-vgc-icon-ring" style="color: #3730a3;">🏛️</div>
              <div class="ob-vgc-info">
                <span class="ob-vgc-label">Workspace &amp; Tech</span>
                <span class="ob-vgc-metric"><span class="ob-vgc-status-dot"></span>Tier-1 Hub Launch</span>
              </div>
            </div>
          </div>
          <div class="ob-s3-card-content">
            <div class="ob-s3-card-meta-row">
              <span class="ob-s3-card-date">WORKSTREAM 06</span>
              <span style="color: #cbd5e1;">•</span>
              <span class="ob-s3-meta-tag">Facilities</span>
            </div>
            <h3 class="ob-s3-card-title">Office &amp; Operational Setup</h3>
            <p class="ob-s3-card-desc">
              Coordinate workspace, technology, vendors, administration and launch requirements for an office, delivery centre, studio or operational unit.
            </p>
            <div class="ob-s3-card-footer">
              <span class="ob-s3-card-btn-link">Explore Workspaces <span class="arrow">&rarr;</span></span>
              <span class="ob-s3-card-num-chip">06</span>
            </div>
          </div>
        </a>

        <!-- CARD 07: FDI, FEMA, Tax & Compliance -->
        <a href="<?php echo esc_url( home_url( '/business-support-services' ) ); ?>" class="ob-s3-editorial-card ob-s3-card-indigo ob-s3-reveal">
          <div class="ob-s3-card-visual-stage ob-stage-indigo">
            <div class="ob-hugo-stamp-badge ob-stamp-indigo">
              <span>WORK</span>
              <span>07</span>
            </div>
            <div class="ob-visual-glass-card">
              <div class="ob-vgc-icon-ring" style="color: #6d28d9;">⚖️</div>
              <div class="ob-vgc-info">
                <span class="ob-vgc-label">FEMA Governance</span>
                <span class="ob-vgc-metric"><span class="ob-vgc-status-dot"></span>RBI &amp; Transfer Tax</span>
              </div>
            </div>
          </div>
          <div class="ob-s3-card-content">
            <div class="ob-s3-card-meta-row">
              <span class="ob-s3-card-date">WORKSTREAM 07</span>
              <span style="color: #cbd5e1;">•</span>
              <span class="ob-s3-meta-tag">Governance</span>
            </div>
            <h3 class="ob-s3-card-title">FDI, FEMA, Tax &amp; Compliance</h3>
            <p class="ob-s3-card-desc">
              Coordinate qualified support for foreign investment, corporate, tax, transfer-pricing and ongoing statutory obligations.
            </p>
            <div class="ob-s3-card-footer">
              <span class="ob-s3-card-btn-link">Explore Compliance <span class="arrow">&rarr;</span></span>
              <span class="ob-s3-card-num-chip">07</span>
            </div>
          </div>
        </a>

        <!-- CARD 08: Operate & Grow -->
        <a href="<?php echo esc_url( home_url( '/pricing' ) ); ?>" class="ob-s3-editorial-card ob-s3-card-pink ob-s3-reveal">
          <div class="ob-s3-card-visual-stage ob-stage-pink">
            <div class="ob-hugo-stamp-badge ob-stamp-pink">
              <span>WORK</span>
              <span>08</span>
            </div>
            <div class="ob-visual-glass-card">
              <div class="ob-vgc-icon-ring" style="color: #be185d;">🚀</div>
              <div class="ob-vgc-info">
                <span class="ob-vgc-label">Scale &amp; Expansion</span>
                <span class="ob-vgc-metric"><span class="ob-vgc-status-dot"></span>Continuous Operations</span>
              </div>
            </div>
          </div>
          <div class="ob-s3-card-content">
            <div class="ob-s3-card-meta-row">
              <span class="ob-s3-card-date">WORKSTREAM 08</span>
              <span style="color: #cbd5e1;">•</span>
              <span class="ob-s3-meta-tag">Scale &amp; Growth</span>
            </div>
            <h3 class="ob-s3-card-title">Operate &amp; Grow</h3>
            <p class="ob-s3-card-desc">
              Continue with accounting, payroll, compliance coordination, vendor support, reporting and expansion after launch.
            </p>
            <div class="ob-s3-card-footer">
              <span class="ob-s3-card-btn-link">Explore Operations <span class="arrow">&rarr;</span></span>
              <span class="ob-s3-card-num-chip">08</span>
            </div>
          </div>
        </a>

      </div>
    </div>

    <!-- Bottom Action Bar (Ultra-Luxury Editorial Conversion Ribbon - Zero Negative Space) -->
    <div class="ob-s3-bottom-actions ob-s3-reveal">
      <div class="ob-s3-act-glow" aria-hidden="true"></div>
      
      <!-- LEFT COLUMN: VALUE PROPOSITION & HIGHLIGHT PILLS -->
      <div class="ob-s3-act-left">
        <div class="ob-s3-act-badge">
          <span class="ob-s3-act-pulse"></span>
          <span>FULL EXPANSION SUITE</span>
        </div>
        <h3 class="ob-s3-act-title">Ready to Plan Your Custom India Setup?</h3>
        <p class="ob-s3-act-desc">Explore all 8 turnkey expansion disciplines or connect with our senior solutions architects for an itemized execution roadmap.</p>
        
        <!-- MICRO VALUE HIGHLIGHTS -->
        <div class="ob-s3-act-pills">
          <span class="ob-s3-act-pill">✓ 100% FDI Compliant</span>
          <span class="ob-s3-act-pill">✓ 14-Day Rapid Setup</span>
          <span class="ob-s3-act-pill">✓ Zero Asset Lock-In</span>
        </div>
      </div>

      <!-- RIGHT COLUMN: DUAL ACTION BUTTONS -->
      <div class="ob-s3-act-right">
        <a href="<?php echo esc_url( home_url( '/services-overview' ) ); ?>" class="ob-s3-action-btn-main">
          <span>View All Services</span>
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
            <line x1="5" y1="12" x2="19" y2="12"></line>
            <polyline points="12 5 19 12 12 19"></polyline>
          </svg>
        </a>
        <a href="<?php echo esc_url( home_url( '/contact-us' ) ); ?>" class="ob-s3-action-btn-sub">
          <span>Discuss Your India Plans</span>
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
            <line x1="5" y1="12" x2="19" y2="12"></line>
            <polyline points="12 5 19 12 12 19"></polyline>
          </svg>
        </a>
      </div>
    </div>

  </div>
</section>

<!-- Scoped Section 3 Intersection Observer Script -->
<script>
document.addEventListener('DOMContentLoaded', function() {
  const revealElements = document.querySelectorAll('.ob-s3-reveal');
  if ('IntersectionObserver' in window) {
    const observer = new IntersectionObserver((entries, obs) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('ob-s3-revealed');
          obs.unobserve(entry.target);
        }
      });
    }, { threshold: 0.1, rootMargin: '0px 0px -40px 0px' });
    revealElements.forEach(el => observer.observe(el));
  } else {
    revealElements.forEach(el => el.classList.add('ob-s3-revealed'));
  }
});
</script>


<!-- ==========================================================================
     SECTION 4: CHOOSE THE RIGHT INDIA ENTRY ROUTE (MASTER PURE WHITE LIVING INFOGRAPHIC HERO)
     ========================================================================== -->

<!-- 1. TOP SUBTLE DELICATE FLOWING TRANSITION (ON PURE WHITE CANVAS) -->
<div class="ob-s4-top-trans-wrap" style="position: relative; width: 100%; overflow: hidden; line-height: 0; background: #ffffff; margin-bottom: -1px; z-index: 2;">
  <svg class="ob-s4-top-trans-svg" viewBox="0 0 1440 60" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" style="width: 100%; height: 40px; display: block;">
    <!-- DELICATE FLOWING CURVES -->
    <path d="M0,25 C320,50 680,10 1040,40 C1240,55 1380,25 1440,15 L1440,60 L0,60 Z" fill="#E5F7EE" fill-opacity="0.50" class="ob-s4-curve-green"/>
    <path d="M0,32 C280,10 620,52 960,25 C1200,5 1360,35 1440,25 L1440,60 L0,60 Z" fill="#DDF7FB" fill-opacity="0.60" class="ob-s4-curve-blue"/>
    <path d="M0,42 C360,65 720,18 1080,45 C1260,60 1380,38 1440,32 L1440,60 L0,60 Z" fill="#ffffff" class="ob-s4-curve-white"/>
  </svg>
</div>

<section class="section-padding ob-s4-section" id="ob-section-entry-routes" style="background: #ffffff !important; border-top: 1px solid #f1f5f9 !important; border-bottom: 1px solid #f1f5f9 !important; padding: 90px 0 100px 0 !important; position: relative !important; overflow: hidden !important; width: 100% !important;">
  
  <!-- SCOPED MASTER CSS FOR SECTION 4 PURE WHITE LIVING INFOGRAPHIC -->
  <style id="ob-s4-scoped-master-css">
    /* ==========================================================================
       SECTION 04 MASTER SCOPED CSS (PURE WHITE + LIVING INDIA HERO INFOGRAPHIC)
       ========================================================================== */
    .ob-s4-section {
      background: #ffffff !important;
      position: relative !important;
      opacity: 1 !important;
    }

    /* --------------------------------------------------------------------------
       1. SUBTLE AMBIENT GRADIENT GLOW ORBS
       -------------------------------------------------------------------------- */
    .ob-s4-glow-orb {
      position: absolute;
      border-radius: 50%;
      filter: blur(95px);
      pointer-events: none;
      z-index: 0;
      opacity: 0.18;
      will-change: transform;
    }
    .ob-s4-orb-blue {
      width: 480px;
      height: 480px;
      background: radial-gradient(circle, #22B8CF 0%, rgba(34,184,207,0) 70%);
      top: -30px;
      right: 5%;
      animation: obS4OrbMotionA 18s ease-in-out infinite alternate !important;
    }
    .ob-s4-orb-green {
      width: 440px;
      height: 440px;
      background: radial-gradient(circle, #20B486 0%, rgba(32,180,134,0) 70%);
      bottom: 20px;
      right: 15%;
      animation: obS4OrbMotionB 20s ease-in-out infinite alternate !important;
    }
    .ob-s4-orb-yellow {
      width: 420px;
      height: 420px;
      background: radial-gradient(circle, #FFC400 0%, rgba(255,196,0,0) 70%);
      top: 20%;
      left: -40px;
      animation: obS4OrbMotionC 16s ease-in-out infinite alternate !important;
    }
    .ob-s4-orb-pink {
      width: 380px;
      height: 380px;
      background: radial-gradient(circle, #F8DDE0 0%, rgba(248,221,224,0) 70%);
      bottom: -20px;
      left: 20%;
      animation: obS4OrbMotionA 22s ease-in-out infinite alternate !important;
    }

    @keyframes obS4OrbMotionA {
      0% { transform: translate(0, 0) scale(1); }
      100% { transform: translate(30px, -25px) scale(1.08); }
    }
    @keyframes obS4OrbMotionB {
      0% { transform: translate(0, 0) scale(1); }
      100% { transform: translate(-30px, 25px) scale(1.06); }
    }
    @keyframes obS4OrbMotionC {
      0% { transform: translate(0, 0) scale(0.95); }
      100% { transform: translate(25px, 20px) scale(1.10); }
    }

    /* --------------------------------------------------------------------------
       2. LIVING BUSINESS NETWORK SVG BACKGROUND (CONNECTED NODES & PATHS)
       -------------------------------------------------------------------------- */
    .ob-s4-network-bg {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      pointer-events: none;
      z-index: 1;
      opacity: 0.55;
    }
    .ob-s4-net-path {
      stroke-dasharray: 4 6;
      animation: obS4NetFlow 30s linear infinite !important;
    }
    @keyframes obS4NetFlow {
      from { stroke-dashoffset: 0; }
      to { stroke-dashoffset: 200; }
    }
    .ob-s4-net-pulse-dot {
      animation: obS4NetPulse 3.5s ease-in-out infinite alternate !important;
    }
    @keyframes obS4NetPulse {
      0% { transform: scale(0.8); opacity: 0.3; }
      100% { transform: scale(1.3); opacity: 0.9; filter: drop-shadow(0 0 4px currentColor); }
    }

    /* --------------------------------------------------------------------------
       3. 16+ LIVING DECORATIVE BUSINESS ICONS & FLOATING OBJECTS
       -------------------------------------------------------------------------- */
    .ob-s4-decor-icon {
      position: absolute;
      pointer-events: none;
      z-index: 1;
      opacity: 0.42;
      transition: opacity 0.3s ease;
      will-change: transform;
    }
    .ob-s4-decor-icon:hover { opacity: 0.85; }

    .ob-s4-decor-1 { top: 60px; left: 6%; animation: obS4FloatItem 6.5s ease-in-out infinite alternate !important; }
    .ob-s4-decor-2 { top: 180px; left: 3%; animation: obS4FloatItem 8.2s ease-in-out infinite alternate 1.2s !important; }
    .ob-s4-decor-3 { bottom: 120px; left: 7%; animation: obS4FloatItem 7.4s ease-in-out infinite alternate 2.1s !important; }
    .ob-s4-decor-4 { top: 50px; right: 8%; animation: obS4FloatItem 6.8s ease-in-out infinite alternate 0.8s !important; }
    .ob-s4-decor-5 { top: 220px; right: 2%; animation: obS4FloatItem 8.6s ease-in-out infinite alternate 1.8s !important; }
    .ob-s4-decor-6 { bottom: 90px; right: 6%; animation: obS4FloatItem 7.0s ease-in-out infinite alternate 2.6s !important; }
    .ob-s4-decor-7 { top: 40px; left: 45%; animation: obS4FloatItem 9.0s ease-in-out infinite alternate 1.5s !important; }

    @keyframes obS4FloatItem {
      0% { transform: translateY(0) rotate(-4deg); }
      50% { transform: translateY(-7px) rotate(0deg); }
      100% { transform: translateY(6px) rotate(5deg); }
    }

    /* FLOATING STARS & ARROWS */
    .ob-s4-star {
      position: absolute;
      pointer-events: none;
      z-index: 1;
      animation: obS4StarGlide 4.5s ease-in-out infinite alternate !important;
      user-select: none;
    }
    .ob-s4-star.st-1 { top: 45px; left: 18%; font-size: 1.3rem; color: #FFC400; }
    .ob-s4-star.st-2 { top: 75px; right: 26%; font-size: 1.25rem; color: #22B8CF; animation-delay: 1.4s !important; }
    .ob-s4-star.st-3 { bottom: 70px; left: 24%; font-size: 1.35rem; color: #20B486; animation-delay: 2.2s !important; }
    .ob-s4-star.st-4 { bottom: 110px; right: 20%; font-size: 1.2rem; color: #8B5CF6; animation-delay: 1.8s !important; }

    @keyframes obS4StarGlide {
      0% { transform: translate(-4px, 0) rotate(-6deg) scale(0.9); opacity: 0.5; }
      100% { transform: translate(5px, -6px) rotate(6deg) scale(1.1); opacity: 0.95; filter: drop-shadow(0 0 5px currentColor); }
    }

    /* EDITORIAL CURVED ARROWS */
    .ob-s4-arrow-item {
      position: absolute;
      pointer-events: none;
      z-index: 1;
      animation: obS4ArrowGlide 6s ease-in-out infinite alternate !important;
    }
    .ob-s4-arrow-item.a-1 { top: 32px; left: 28%; }
    .ob-s4-arrow-item.a-2 { top: 48%; right: 48%; animation-delay: 1.6s !important; }
    .ob-s4-arrow-item.a-3 { bottom: 75px; left: 32%; animation-delay: 2.5s !important; }

    @keyframes obS4ArrowGlide {
      0% { transform: translate(0, 0) rotate(-2deg); opacity: 0.6; }
      100% { transform: translate(5px, -4px) rotate(3deg); opacity: 0.95; }
    }

    /* --------------------------------------------------------------------------
       4. MASKED HEADINGS & FLOWING REVEAL (NO BADGE)
       -------------------------------------------------------------------------- */
    .ob-s4-mask {
      display: block !important;
      overflow: hidden !important;
      position: relative !important;
    }
    .ob-s4-heading-line {
      display: block !important;
      color: #080c16 !important;
      transform: translateY(38px);
      opacity: 0;
      transition: transform 0.90s cubic-bezier(0.22, 1, 0.36, 1), opacity 0.90s ease;
      will-change: transform, opacity;
    }
    .ob-s4-desc-para {
      transform: translateY(26px);
      opacity: 0;
      transition: transform 0.85s cubic-bezier(0.22, 1, 0.36, 1) 0.16s, opacity 0.85s ease 0.16s;
      will-change: transform, opacity;
    }

    /* --------------------------------------------------------------------------
       5. LEFT SIDE 4 ROUTE CARDS (PREMIUM WHITE WITH CURATED ACCENTS)
       -------------------------------------------------------------------------- */
    .ob-s4-route-card {
      background: #ffffff !important;
      border: 1.5px solid #e2e8f0 !important;
      border-radius: 20px !important;
      padding: 22px 24px !important;
      box-shadow: 0 4px 18px rgba(15, 23, 42, 0.03) !important;
      position: relative !important;
      overflow: visible !important;
      cursor: pointer !important;
      opacity: 0;
      transform: translateY(40px);
      transition: transform 0.60s cubic-bezier(0.22, 1, 0.36, 1), opacity 0.60s ease, box-shadow 0.30s ease, border-color 0.30s ease !important;
      will-change: transform, opacity;
    }
    .ob-s4-route-card.rc-1 { transition-delay: 0.18s; }
    .ob-s4-route-card.rc-2 { transition-delay: 0.30s; }
    .ob-s4-route-card.rc-3 { transition-delay: 0.42s; }
    .ob-s4-route-card.rc-4 { transition-delay: 0.54s; }

    /* ACCENT LINE ON TOP */
    .ob-s4-route-card::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 3.5px;
      border-top-left-radius: 20px;
      border-top-right-radius: 20px;
      transform: scaleX(0);
      transform-origin: left center;
      transition: transform 0.40s cubic-bezier(0.16, 1, 0.3, 1);
    }
    .ob-s4-route-card.rc-1::before { background: #FFC400; }
    .ob-s4-route-card.rc-2::before { background: #22B8CF; }
    .ob-s4-route-card.rc-3::before { background: #20B486; }
    .ob-s4-route-card.rc-4::before { background: #8B5CF6; }

    .ob-s4-section.is-visible .ob-s4-route-card::before {
      transform: scaleX(1);
    }

    /* CARD HOVER PHYSICS & INTERACTION */
    .ob-s4-route-card:hover,
    .ob-s4-route-card.is-active {
      transform: translateY(-5px) scale(1.015) !important;
      box-shadow: 0 16px 36px rgba(15, 23, 42, 0.08) !important;
    }
    .ob-s4-route-card.rc-1:hover, .ob-s4-route-card.rc-1.is-active { border-color: #FFC400 !important; }
    .ob-s4-route-card.rc-2:hover, .ob-s4-route-card.rc-2.is-active { border-color: #22B8CF !important; }
    .ob-s4-route-card.rc-3:hover, .ob-s4-route-card.rc-3.is-active { border-color: #20B486 !important; }
    .ob-s4-route-card.rc-4:hover, .ob-s4-route-card.rc-4.is-active { border-color: #8B5CF6 !important; }

    .ob-s4-card-indicator {
      width: 36px;
      height: 36px;
      border-radius: 12px;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
      transition: transform 0.30s cubic-bezier(0.16, 1, 0.3, 1);
    }
    .ob-s4-route-card:hover .ob-s4-card-indicator {
      transform: scale(1.12) rotate(4deg);
    }

    /* --------------------------------------------------------------------------
       6. RIGHT SIDE LIVING INDIA ENTRY INFOGRAPHIC HERO (NO BOUNDING CARD BOX)
       -------------------------------------------------------------------------- */
    .ob-s4-hero-infographic {
      position: relative !important;
      width: 100% !important;
      min-height: 520px !important;
      display: flex !important;
      align-items: center !important;
      justify-content: center !important;
      opacity: 0;
      transform: translateY(40px) scale(0.96);
      transition: transform 0.85s cubic-bezier(0.22, 1, 0.36, 1) 0.25s, opacity 0.85s ease 0.25s !important;
      z-index: 2 !important;
    }

    /* CENTRAL INDIA SILHOUETTE WITH BREATHING PULSE */
    .ob-s4-india-core-hub {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 220px;
      height: 220px;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      z-index: 3;
      animation: obS4IndiaBreathe 5.5s ease-in-out infinite alternate !important;
    }
    @keyframes obS4IndiaBreathe {
      0% { transform: translate(-50%, -50%) scale(0.98); }
      100% { transform: translate(-50%, -50%) scale(1.03); }
    }

    .ob-s4-india-silhouette-svg {
      width: 150px;
      height: 150px;
      filter: drop-shadow(0 10px 25px rgba(34, 184, 207, 0.20));
      transition: filter 0.4s ease;
    }

    /* RADAR ORBIT RINGS */
    .ob-s4-radar-ring {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      border-radius: 50%;
      pointer-events: none;
      z-index: 2;
    }
    .ob-s4-radar-1 {
      width: 320px;
      height: 320px;
      border: 1.5px dashed rgba(34, 184, 207, 0.30);
      animation: obS4SpinRadar 24s linear infinite !important;
    }
    .ob-s4-radar-2 {
      width: 440px;
      height: 440px;
      border: 1px dashed rgba(255, 196, 0, 0.25);
      animation: obS4SpinRadar 32s linear infinite reverse !important;
    }
    @keyframes obS4SpinRadar {
      from { transform: translate(-50%, -50%) rotate(0deg); }
      to { transform: translate(-50%, -50%) rotate(360deg); }
    }

    /* 5 SURROUNDING JOURNEY NODES */
    .ob-s4-journey-node {
      position: absolute;
      background: #ffffff;
      border: 1.5px solid #e2e8f0;
      border-radius: 16px;
      padding: 10px 14px;
      display: flex;
      align-items: center;
      gap: 10px;
      box-shadow: 0 8px 24px rgba(15, 23, 42, 0.06);
      transition: all 0.35s cubic-bezier(0.16, 1, 0.3, 1);
      cursor: pointer;
      z-index: 4;
      will-change: transform;
    }
    .ob-s4-journey-node:hover,
    .ob-s4-journey-node.is-active {
      transform: translateY(-4px) scale(1.06);
      box-shadow: 0 14px 34px rgba(15, 23, 42, 0.12);
    }

    /* NODE POSITIONS */
    .ob-s4-node-strat { top: 18px; left: 8%; }
    .ob-s4-node-wos { top: 40px; right: 6%; }
    .ob-s4-node-bank { top: 48%; right: -10px; }
    .ob-s4-node-comp { bottom: 35px; right: 10%; }
    .ob-s4-node-ops { bottom: 25px; left: 12%; }

    /* FLOATING MINI DATA CHIPS */
    .ob-s4-data-chip {
      position: absolute;
      background: #ffffff;
      border: 1px solid #cbd5e1;
      border-radius: 20px;
      padding: 5px 12px;
      font-size: 0.72rem;
      font-weight: 700;
      color: #080c16;
      box-shadow: 0 6px 16px rgba(15, 23, 42, 0.04);
      z-index: 4;
      pointer-events: none;
      animation: obS4ChipDrift 5s ease-in-out infinite alternate !important;
      transition: all 0.35s ease;
    }
    .ob-s4-chip-1 { top: 140px; left: 2%; color: #FFC400; border-color: #fde68a; }
    .ob-s4-chip-2 { top: 160px; right: 2%; color: #22B8CF; border-color: #a5f3fc; animation-delay: 1.2s !important; }
    .ob-s4-chip-3 { bottom: 140px; right: 0%; color: #20B486; border-color: #bbf7d0; animation-delay: 2.1s !important; }
    .ob-s4-chip-4 { bottom: 150px; left: 4%; color: #8B5CF6; border-color: #ddd6fe; animation-delay: 1.7s !important; }

    @keyframes obS4ChipDrift {
      0% { transform: translateY(0); }
      100% { transform: translateY(-6px); }
    }

    /* --------------------------------------------------------------------------
       7. ACTIVE STATE TRIGGERED BY JS (.is-visible)
       -------------------------------------------------------------------------- */
    .ob-s4-section.is-visible .ob-s4-heading-line {
      transform: translateY(0) !important;
      opacity: 1 !important;
    }
    .ob-s4-section.is-visible .ob-s4-desc-para {
      transform: translateY(0) !important;
      opacity: 1 !important;
    }
    .ob-s4-section.is-visible .ob-s4-route-card {
      transform: translateY(0) !important;
      opacity: 1 !important;
    }
    .ob-s4-section.is-visible .ob-s4-hero-infographic {
      transform: translateY(0) scale(1) !important;
      opacity: 1 !important;
    }

        /* ==========================================================================
       SECTION 4 RESPONSIVE MULTI-DEVICE MASTER RULES (MOBILE, TABLET, LAPTOP, DESKTOP)
       ========================================================================== */
    .ob-s4-section {
      overflow-x: clip !important;
      position: relative !important;
      width: 100% !important;
    }

    .ob-s4-hero-infographic {
      width: 100% !important;
      max-width: 540px !important;
      margin: 0 auto !important;
      position: relative !important;
    }

    /* Laptop & Small Desktop (1041px - 1280px) */
    @media (max-width: 1280px) {
      .ob-s4-node-bank {
        right: 0px !important;
      }
    }

    /* Tablet & Medium Screens (769px - 1040px) */
    @media (max-width: 1040px) {
      .ob-s4-layout-grid {
        grid-template-columns: 1fr !important;
        gap: 36px !important;
      }
      .ob-s4-hero-infographic {
        min-height: 480px !important;
        max-width: 500px !important;
      }
      .ob-s4-node-bank {
        right: 0px !important;
      }
    }

    /* Mobile Phones & Phablets (<= 768px) */
    @media (max-width: 768px) {
      .ob-s4-section {
        padding: 40px 0 !important;
      }
      .ob-s4-layout-grid {
        grid-template-columns: 1fr !important;
        gap: 28px !important;
      }
      
      /* Hide desktop background floating decor on mobile for clean modern focus */
      .ob-s4-decor-icon,
      .ob-s4-star,
      .ob-s4-arrow-item,
      .ob-s4-data-chip,
      .ob-s4-radar-ring,
      .ob-s4-hero-infographic > svg {
        display: none !important;
      }

      /* Infographic Container on Mobile becomes a structured grid */
      .ob-s4-hero-infographic {
        display: grid !important;
        grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
        gap: 12px !important;
        min-height: auto !important;
        height: auto !important;
        width: 100% !important;
        max-width: 100% !important;
        margin: 20px 0 10px 0 !important;
        padding: 0 !important;
        position: relative !important;
      }

      /* Centerpiece India Hub Showcase */
      .ob-s4-india-core-hub {
        grid-column: 1 / -1 !important;
        position: relative !important;
        top: auto !important;
        left: auto !important;
        transform: none !important;
        width: 190px !important;
        height: 180px !important;
        margin: 10px auto 14px auto !important;
        display: flex !important;
        flex-direction: column !important;
        align-items: center !important;
        justify-content: center !important;
        z-index: 5 !important;
      }

      .ob-s4-india-silhouette-svg {
        width: 105px !important;
        height: 105px !important;
      }

      .ob-s4-radar-ring {
        position: absolute !important;
        top: 50% !important;
        left: 50% !important;
        transform: translate(-50%, -50%) !important;
      }
      .ob-s4-radar-1 {
        width: 165px !important;
        height: 165px !important;
      }
      .ob-s4-radar-2 {
        width: 210px !important;
        height: 210px !important;
      }

      /* 5 Setup Milestone Nodes in Clean Structured Matrix */
      .ob-s4-journey-node {
        position: relative !important;
        top: auto !important;
        left: auto !important;
        right: auto !important;
        bottom: auto !important;
        transform: none !important;
        width: 100% !important;
        min-width: 0 !important;
        box-sizing: border-box !important;
        padding: 12px 14px !important;
        border-radius: 14px !important;
        background: #ffffff !important;
        border: 1.5px solid #e2e8f0 !important;
        box-shadow: 0 4px 14px rgba(15, 23, 42, 0.05) !important;
        display: flex !important;
        align-items: center !important;
        gap: 10px !important;
        z-index: 6 !important;
      }

      .ob-s4-journey-node:hover,
      .ob-s4-journey-node.is-active {
        transform: translateY(-2px) !important;
        box-shadow: 0 8px 20px rgba(15, 23, 42, 0.10) !important;
        border-color: #22B8CF !important;
      }

      #ob-s4-hnode-1 { grid-column: 1 / 2 !important; }
      #ob-s4-hnode-2 { grid-column: 2 / 3 !important; }
      #ob-s4-hnode-3 { grid-column: 1 / 2 !important; }
      #ob-s4-hnode-4 { grid-column: 2 / 3 !important; }
      #ob-s4-hnode-5 { grid-column: 1 / -1 !important; } /* Full width highlight banner on mobile */

      .ob-s4-heading-title {
        font-size: clamp(1.85rem, 6.2vw, 2.3rem) !important;
      }
      .ob-s4-desc-para {
        font-size: 0.98rem !important;
        line-height: 1.6 !important;
      }
    }

    /* Small Mobile Phones (<= 480px) */
    @media (max-width: 480px) {
      .ob-s4-hero-infographic {
        gap: 10px !important;
        margin: 14px 0 10px 0 !important;
      }
      .ob-s4-journey-node {
        padding: 10px 10px !important;
        gap: 8px !important;
        border-radius: 12px !important;
      }
      .ob-s4-journey-node > div:first-child,
      #ob-s4-entity-badge-num {
        width: 26px !important;
        height: 26px !important;
        font-size: 0.70rem !important;
        border-radius: 7px !important;
        flex-shrink: 0 !important;
      }
      .ob-s4-journey-node div:last-child > div:first-child,
      #ob-s4-entity-title {
        font-size: 0.78rem !important;
        font-weight: 800 !important;
        line-height: 1.25 !important;
      }
      .ob-s4-journey-node div:last-child > div:last-child,
      #ob-s4-entity-sub {
        font-size: 0.65rem !important;
        line-height: 1.2 !important;
      }
    }

    /* Extra Small Screen (<= 360px) */
    @media (max-width: 360px) {
      .ob-s4-hero-infographic {
        grid-template-columns: 1fr !important;
        gap: 8px !important;
      }
      #ob-s4-hnode-1,
      #ob-s4-hnode-2,
      #ob-s4-hnode-3,
      #ob-s4-hnode-4,
      #ob-s4-hnode-5 {
        grid-column: 1 / -1 !important;
      }
    }
    
    @media (prefers-reduced-motion: reduce) {
      .ob-s4-heading-line,
      .ob-s4-desc-para,
      .ob-s4-route-card,
      .ob-s4-hero-infographic,
      .ob-s4-route-card::before {
        transition: none !important;
        opacity: 1 !important;
        transform: none !important;
      }
      .ob-s4-orb-blue,
      .ob-s4-orb-green,
      .ob-s4-orb-yellow,
      .ob-s4-orb-pink,
      .ob-s4-india-core-hub,
      .ob-s4-radar-1,
      .ob-s4-radar-2,
      .ob-s4-star,
      .ob-s4-arrow-item,
      .ob-s4-decor-icon,
      .ob-s4-data-chip {
        animation: none !important;
      }
    }
  </style>

  <!-- 4 SUBTLE AMBIENT GRADIENT GLOW ORBS -->
  <div class="ob-s4-glow-orb ob-s4-orb-blue"></div>
  <div class="ob-s4-glow-orb ob-s4-orb-green"></div>
  <div class="ob-s4-glow-orb ob-s4-orb-yellow"></div>
  <div class="ob-s4-glow-orb ob-s4-orb-pink"></div>

  <!-- LIVING BUSINESS NETWORK SVG BACKGROUND (CONNECTED NODES & PATHS) -->
  <svg class="ob-s4-network-bg" viewBox="0 0 1440 900" fill="none" xmlns="http://www.w3.org/2000/svg">
    <!-- NETWORK CONNECTOR PATHS -->
    <path d="M120,180 C320,100 500,280 720,220 C960,160 1180,300 1340,240" stroke="#22B8CF" stroke-width="1.2" stroke-opacity="0.30" class="ob-s4-net-path"/>
    <path d="M160,720 C380,620 620,780 840,680 C1080,580 1260,740 1380,660" stroke="#20B486" stroke-width="1.2" stroke-opacity="0.25" class="ob-s4-net-path"/>
    <path d="M720,220 C760,420 800,520 840,680" stroke="#FFC400" stroke-width="1.2" stroke-opacity="0.25" class="ob-s4-net-path"/>
    
    <!-- NETWORK PULSING NODES -->
    <circle cx="120" cy="180" r="4" fill="#22B8CF" class="ob-s4-net-pulse-dot" style="color: #22B8CF;"/>
    <circle cx="720" cy="220" r="5" fill="#FFC400" class="ob-s4-net-pulse-dot" style="color: #FFC400;"/>
    <circle cx="1340" cy="240" r="4.5" fill="#20B486" class="ob-s4-net-pulse-dot" style="color: #20B486;"/>
    <circle cx="840" cy="680" r="5" fill="#8B5CF6" class="ob-s4-net-pulse-dot" style="color: #8B5CF6;"/>
  </svg>

  <!-- 16+ LIVING DECORATIVE BUSINESS OBJECTS & OUTLINES -->
  <!-- 1. Corporate Building Outline -->
  <div class="ob-s4-decor-icon ob-s4-decor-1">
    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#22B8CF" stroke-width="1.8" stroke-linecap="round"><rect x="4" y="2" width="16" height="20" rx="2"/><line x1="9" y1="6" x2="9" y2="6.01"/><line x1="15" y1="6" x2="15" y2="6.01"/><line x1="9" y1="10" x2="9" y2="10.01"/><line x1="15" y1="10" x2="15" y2="10.01"/><line x1="9" y1="14" x2="9" y2="14.01"/><line x1="15" y1="14" x2="15" y2="14.01"/><path d="M9 22v-4h6v4"/></svg>
  </div>
  <!-- 2. Legal Document Outline -->
  <div class="ob-s4-decor-icon ob-s4-decor-2">
    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#20B486" stroke-width="1.8" stroke-linecap="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
  </div>
  <!-- 3. Banking Card Outline -->
  <div class="ob-s4-decor-icon ob-s4-decor-3">
    <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="#FFC400" stroke-width="1.8" stroke-linecap="round"><rect x="1" y="4" width="22" height="16" rx="2"/><line x1="1" y1="10" x2="23" y2="10"/></svg>
  </div>
  <!-- 4. Globe Icon -->
  <div class="ob-s4-decor-icon ob-s4-decor-4">
    <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="#22B8CF" stroke-width="1.8" stroke-linecap="round"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>
  </div>
  <!-- 5. Briefcase Outline -->
  <div class="ob-s4-decor-icon ob-s4-decor-5">
    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#8B5CF6" stroke-width="1.8" stroke-linecap="round"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>
  </div>
  <!-- 6. Rupee Symbol Badge Outline -->
  <div class="ob-s4-decor-icon ob-s4-decor-6">
    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#20B486" stroke-width="1.8" stroke-linecap="round"><path d="M6 3h12M6 8h12M6 13l8.5 8M6 13h3a4 4 0 0 0 0-8"/></svg>
  </div>
  <!-- 7. Growth Trajectory Chart -->
  <div class="ob-s4-decor-icon ob-s4-decor-7">
    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#FFC400" stroke-width="1.8" stroke-linecap="round"><line x1="18" y1="20" x2="18" y2="10"/><line x1="12" y1="20" x2="12" y2="4"/><line x1="6" y1="20" x2="6" y2="14"/></svg>
  </div>

  <!-- FLOATING STARS -->
  <div class="ob-s4-star st-1">✦</div>
  <div class="ob-s4-star st-2">★</div>
  <div class="ob-s4-star st-3">✦</div>
  <div class="ob-s4-star st-4">★</div>

  
  <div class="ob-s4-arrow-item a-1">
    <svg width="55" height="32" viewBox="0 0 55 32" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M4 22 C 18 6, 36 6, 49 16 M 40 16 L 50 17 L 48 8" stroke="#FFC400" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
  </div>
  <div class="ob-s4-arrow-item a-2">
    <svg width="50" height="30" viewBox="0 0 50 30" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M45 22 C 32 6, 16 6, 5 16 M 14 16 L 4 17 L 7 8" stroke="#22B8CF" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
  </div>
  <div class="ob-s4-arrow-item a-3">
    <svg width="60" height="36" viewBox="0 0 60 36" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M5 26 C 20 8, 40 10, 53 22 M 44 22 L 54 23 L 51 14" stroke="#20B486" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
  </div>

  <div class="theme-container" style="max-width: 1240px !important; margin: 0 auto !important; padding: 0 24px !important; position: relative !important; z-index: 2 !important;">
    
    <!-- TOP EDITORIAL HEADER (CLEAN & SPACIOUS ON PURE WHITE) -->
    <div style="text-align: center !important; margin-bottom: 50px !important;">

      <!-- MAIN HEADING (MASKED FLOWING REVEAL) -->
      <h2 class="ob-s4-heading-title" style="font-family: 'Outfit', 'Inter', sans-serif !important; font-size: clamp(2.2rem, 3.8vw, 3.2rem) !important; font-weight: 800 !important; line-height: 1.18 !important; color: #080c16 !important; margin: 0 0 16px 0 !important; letter-spacing: -0.025em !important;">
        <span class="ob-s4-mask">
          <span class="ob-s4-heading-line line-1">Choose the Right India Entry Route</span>
        </span>
      </h2>

      <!-- SUPPORTING PARAGRAPH -->
      <div class="ob-s4-mask">
        <p class="ob-s4-desc-para" style="font-size: 1.10rem !important; color: #475569 !important; line-height: 1.68 !important; margin: 0 auto 20px auto !important; max-width: 840px !important;">
          There is no single structure that is right for every foreign business. The correct route depends on your activity, revenue model, ownership, investment, tax position, local presence and long-term plans.
        </p>
      </div>

    </div>

    <!-- MAIN TWO-COLUMN WORKBENCH (LEFT CARDS + RIGHT LIVING HERO INFOGRAPHIC) -->
    <div class="ob-s4-layout-grid">
      
      <!-- LEFT COLUMN: 4 INTERACTIVE ENTRY STRUCTURE CARDS -->
      <div style="display: flex !important; flex-direction: column !important; gap: 16px !important;">
        
        <!-- CARD 1: WHOLLY OWNED SUBSIDIARY (WARM YELLOW) -->
        <div class="ob-s4-route-card rc-1 is-active" onmouseenter="obSelectHeroNode(1)" onclick="obSelectHeroNode(1)">
          <div style="display: flex; align-items: flex-start; justify-content: space-between; gap: 14px;">
            <div style="flex: 1;">
              <div style="font-size: 0.72rem; font-weight: 800; color: #FFC400; letter-spacing: 0.08em; text-transform: uppercase; margin-bottom: 6px;">CONTROLLED OPERATING COMPANY</div>
              <h3 style="font-family: 'Outfit', sans-serif; font-size: 1.20rem; font-weight: 800; color: #080c16; margin: 0 0 6px 0;">Wholly Owned Subsidiary</h3>
              <p style="color: #475569; font-size: 0.93rem; line-height: 1.58; margin: 0;">
                For a foreign parent evaluating a controlled Indian operating company, subject to sector and FDI conditions.
              </p>
            </div>
            <div class="ob-s4-card-indicator" style="background: #fffdf0; border: 1.5px solid #FFC400; color: #FFC400;">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"><rect x="3" y="3" width="18" height="18" rx="3"/><circle cx="12" cy="12" r="4"/></svg>
            </div>
          </div>
        </div>

        <!-- CARD 2: BRANCH / LIAISON / PROJECT OFFICE (SKY BLUE) -->
        <div class="ob-s4-route-card rc-2" onmouseenter="obSelectHeroNode(2)" onclick="obSelectHeroNode(2)">
          <div style="display: flex; align-items: flex-start; justify-content: space-between; gap: 14px;">
            <div style="flex: 1;">
              <div style="font-size: 0.72rem; font-weight: 800; color: #22B8CF; letter-spacing: 0.08em; text-transform: uppercase; margin-bottom: 6px;">PERMITTED SPECIFIC FRAMEWORK</div>
              <h3 style="font-family: 'Outfit', sans-serif; font-size: 1.20rem; font-weight: 800; color: #080c16; margin: 0 0 6px 0;">Branch / Liaison / Project Office</h3>
              <p style="color: #475569; font-size: 0.93rem; line-height: 1.58; margin: 0;">
                For eligible foreign companies undertaking permitted or project-specific activities under the applicable framework.
              </p>
            </div>
            <div class="ob-s4-card-indicator" style="background: #f0fdfa; border: 1.5px solid #22B8CF; color: #22B8CF;">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"><line x1="6" y1="3" x2="6" y2="15"/><circle cx="18" cy="6" r="3"/><circle cx="6" cy="18" r="3"/><path d="M18 9a9 9 0 0 1-9 9"/></svg>
            </div>
          </div>
        </div>

        <!-- CARD 3: LIMITED LIABILITY PARTNERSHIP (LLP) (GREEN) -->
        <div class="ob-s4-route-card rc-3" onmouseenter="obSelectHeroNode(3)" onclick="obSelectHeroNode(3)">
          <div style="display: flex; align-items: flex-start; justify-content: space-between; gap: 14px;">
            <div style="flex: 1;">
              <div style="font-size: 0.72rem; font-weight: 800; color: #20B486; letter-spacing: 0.08em; text-transform: uppercase; margin-bottom: 6px;">FLEXIBLE PARTNERSHIP STRUCTURE</div>
              <h3 style="font-family: 'Outfit', sans-serif; font-size: 1.20rem; font-weight: 800; color: #080c16; margin: 0 0 6px 0;">Limited Liability Partnership (LLP)</h3>
              <p style="color: #475569; font-size: 0.93rem; line-height: 1.58; margin: 0;">
                For activities and investment structures where the LLP route is legally and commercially suitable.
              </p>
            </div>
            <div class="ob-s4-card-indicator" style="background: #f0fdf4; border: 1.5px solid #20B486; color: #20B486;">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"><circle cx="9" cy="12" r="5"/><circle cx="15" cy="12" r="5"/></svg>
            </div>
          </div>
        </div>

        <!-- CARD 4: JOINT VENTURE (PURPLE) -->
        <div class="ob-s4-route-card rc-4" onmouseenter="obSelectHeroNode(4)" onclick="obSelectHeroNode(4)">
          <div style="display: flex; align-items: flex-start; justify-content: space-between; gap: 14px;">
            <div style="flex: 1;">
              <div style="font-size: 0.72rem; font-weight: 800; color: #8B5CF6; letter-spacing: 0.08em; text-transform: uppercase; margin-bottom: 6px;">STRATEGIC LOCAL PARTNER</div>
              <h3 style="font-family: 'Outfit', sans-serif; font-size: 1.20rem; font-weight: 800; color: #080c16; margin: 0 0 6px 0;">Joint Venture</h3>
              <p style="color: #475569; font-size: 0.93rem; line-height: 1.58; margin: 0;">
                For businesses entering India with an Indian commercial or strategic partner and a carefully designed governance model.
              </p>
            </div>
            <div class="ob-s4-card-indicator" style="background: #faf5ff; border: 1.5px solid #8B5CF6; color: #8B5CF6;">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
            </div>
          </div>
        </div>

      </div>

      <!-- RIGHT COLUMN: LIVING INDIA ENTRY INFOGRAPHIC HERO (NO CARD/BOX - BREATHES ON CANVAS) -->
      <div class="ob-s4-hero-infographic">
        
        <!-- ROTATING RADAR ORBIT RINGS -->
        <div class="ob-s4-radar-ring ob-s4-radar-1"></div>
        <div class="ob-s4-radar-ring ob-s4-radar-2"></div>

        <!-- SVG CONNECTING FLOW RAYS -->
        <svg viewBox="0 0 540 500" fill="none" xmlns="http://www.w3.org/2000/svg" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; pointer-events: none; z-index: 2;">
          <!-- RAY 1: STRATEGY (TOP-LEFT) -> INDIA -->
          <path id="ob-s4-ray-1" d="M100,70 C170,110 210,180 270,250" stroke="#FFC400" stroke-width="2" stroke-dasharray="4 4" stroke-opacity="0.6"/>
          <!-- RAY 2: ENTITY (TOP-RIGHT) -> INDIA -->
          <path id="ob-s4-ray-2" d="M440,80 C380,120 330,190 270,250" stroke="#22B8CF" stroke-width="2.2" stroke-dasharray="4 4" stroke-opacity="0.8"/>
          <!-- RAY 3: BANKING (RIGHT) -> INDIA -->
          <path id="ob-s4-ray-3" d="M460,250 C380,250 330,250 270,250" stroke="#20B486" stroke-width="2" stroke-dasharray="4 4" stroke-opacity="0.6"/>
          <!-- RAY 4: COMPLIANCE (BOTTOM-RIGHT) -> INDIA -->
          <path id="ob-s4-ray-4" d="M420,420 C360,370 320,310 270,250" stroke="#8B5CF6" stroke-width="2" stroke-dasharray="4 4" stroke-opacity="0.6"/>
          <!-- RAY 5: OPERATIONS (BOTTOM-LEFT) -> INDIA -->
          <path id="ob-s4-ray-5" d="M120,410 C180,360 220,310 270,250" stroke="#FFC400" stroke-width="2" stroke-dasharray="4 4" stroke-opacity="0.6"/>
          
          <!-- TRAVELING SIGNAL PULSE PARTICLES -->
          <circle cx="270" cy="250" r="5" fill="#22B8CF" class="ob-s4-net-pulse-dot" style="color: #22B8CF;"/>
        </svg>

        <!-- CENTRAL INDIA SILHOUETTE HUB -->
        <div class="ob-s4-india-core-hub">
          <!-- ABSTRACT STYLIZED INDIA MAP SILHOUETTE SVG -->
          <svg class="ob-s4-india-silhouette-svg" viewBox="0 0 200 220" fill="none" xmlns="http://www.w3.org/2000/svg">
            <defs>
              <linearGradient id="indiaGrad" x1="0%" y1="0%" x2="100%" y2="100%">
                <stop offset="0%" stop-color="#DDF7FB"/>
                <stop offset="50%" stop-color="#E5F7EE"/>
                <stop offset="100%" stop-color="#FFF9E8"/>
              </linearGradient>
            </defs>
            <!-- STYLIZED GEOMETRIC INDIA SILHOUETTE -->
            <path d="M95,15 L125,45 L155,55 L165,85 L145,115 L160,135 L125,185 L95,210 L80,185 L65,145 L40,115 L45,85 L65,55 L80,35 Z" fill="url(#indiaGrad)" stroke="#22B8CF" stroke-width="2" stroke-linejoin="round"/>
            <!-- INTERNAL EXPANSION ARCS -->
            <circle cx="100" cy="115" r="30" stroke="#FFC400" stroke-width="1.5" stroke-dasharray="2 3" opacity="0.6"/>
            <circle cx="100" cy="115" r="50" stroke="#20B486" stroke-width="1.5" stroke-dasharray="3 4" opacity="0.4"/>
            <!-- ACTIVE CAPITAL LOCATION MARKER -->
            <circle cx="100" cy="115" r="7" fill="#080c16"/>
            <circle cx="100" cy="115" r="3.5" fill="#FFC400"/>
          </svg>
          <!-- CENTER LABEL -->
          <div style="font-family: 'Outfit', sans-serif; font-size: 0.82rem; font-weight: 900; color: #080c16; letter-spacing: 0.08em; text-transform: uppercase; margin-top: 4px; background: rgba(255,255,255,0.92); padding: 2px 10px; border-radius: 12px; box-shadow: 0 4px 12px rgba(15,23,42,0.06); border: 1px solid #e2e8f0;">
            INDIA HUB
          </div>
        </div>

        <!-- 5 FLOATING JOURNEY MILESTONE NODES -->
        <!-- 01 STRATEGY -->
        <div id="ob-s4-hnode-1" class="ob-s4-journey-node ob-s4-node-strat" onclick="obSelectHeroNode(1)">
          <div style="width: 28px; height: 28px; border-radius: 8px; background: #fffdf0; border: 1px solid #FFC400; color: #FFC400; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 0.75rem;">01</div>
          <div>
            <div style="font-family: 'Outfit', sans-serif; font-size: 0.82rem; font-weight: 800; color: #080c16;">Strategy</div>
            <div style="font-size: 0.68rem; color: #64748b;">Route Evaluation</div>
          </div>
        </div>

        <!-- 02 ENTITY (ACTIVE/REACTIVE TO LEFT CARDS) -->
        <div id="ob-s4-hnode-2" class="ob-s4-journey-node ob-s4-node-wos is-active" onclick="obSelectHeroNode(1)">
          <div id="ob-s4-entity-badge-num" style="width: 28px; height: 28px; border-radius: 8px; background: #fffdf0; border: 1px solid #FFC400; color: #FFC400; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 0.75rem;">02</div>
          <div>
            <div id="ob-s4-entity-title" style="font-family: 'Outfit', sans-serif; font-size: 0.84rem; font-weight: 800; color: #080c16;">Subsidiary (WOS)</div>
            <div id="ob-s4-entity-sub" style="font-size: 0.68rem; color: #64748b;">100% Equity &bull; FDI SLA</div>
          </div>
        </div>

        <!-- 03 BANKING -->
        <div id="ob-s4-hnode-3" class="ob-s4-journey-node ob-s4-node-bank" onclick="obSelectHeroNode(2)">
          <div style="width: 28px; height: 28px; border-radius: 8px; background: #f0fdfa; border: 1px solid #22B8CF; color: #22B8CF; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 0.75rem;">03</div>
          <div>
            <div style="font-family: 'Outfit', sans-serif; font-size: 0.82rem; font-weight: 800; color: #080c16;">Banking</div>
            <div style="font-size: 0.68rem; color: #64748b;">Multi-Currency & FDI</div>
          </div>
        </div>

        <!-- 04 COMPLIANCE -->
        <div id="ob-s4-hnode-4" class="ob-s4-journey-node ob-s4-node-comp" onclick="obSelectHeroNode(3)">
          <div style="width: 28px; height: 28px; border-radius: 8px; background: #f0fdf4; border: 1px solid #20B486; color: #20B486; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 0.75rem;">04</div>
          <div>
            <div style="font-family: 'Outfit', sans-serif; font-size: 0.82rem; font-weight: 800; color: #080c16;">Compliance</div>
            <div style="font-size: 0.68rem; color: #64748b;">FEMA & Statutory</div>
          </div>
        </div>

        <!-- 05 LAUNCH & OPERATE -->
        <div id="ob-s4-hnode-5" class="ob-s4-journey-node ob-s4-node-ops" onclick="obSelectHeroNode(4)">
          <div style="width: 28px; height: 28px; border-radius: 8px; background: #faf5ff; border: 1px solid #8B5CF6; color: #8B5CF6; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 0.75rem;">05</div>
          <div>
            <div style="font-family: 'Outfit', sans-serif; font-size: 0.82rem; font-weight: 800; color: #080c16;">Launch & Ops</div>
            <div style="font-size: 0.68rem; color: #64748b;">Turnkey Readiness</div>
          </div>
        </div>

        <!-- 4 FLOATING MINI DATA CHIPS -->
        <div class="ob-s4-data-chip ob-s4-chip-1">✦ 100% FDI Automatic</div>
        <div class="ob-s4-data-chip ob-s4-chip-2">★ Turnkey 2-4 Wks</div>
        <div class="ob-s4-data-chip ob-s4-chip-3">✦ FEMA & RBI Ready</div>
        <div class="ob-s4-data-chip ob-s4-chip-4">★ Fast-Track Setup</div>

      </div>

    </div>

    <!-- IMPORTANT LEGAL NOTICE BOX (CLEAN WHITE CARD) -->
    <div style="margin-top: 45px !important; padding: 22px 28px !important; background: #ffffff !important; border: 1.5px solid #fde68a !important; border-radius: 20px !important; box-shadow: 0 8px 25px rgba(15, 23, 42, 0.04) !important; display: flex !important; align-items: center !important; justify-content: space-between !important; flex-wrap: wrap !important; gap: 20px !important;">
      <div style="text-align: left !important; max-width: 680px !important;">
        <div style="font-size: 0.78rem !important; font-weight: 800 !important; color: #b45309 !important; text-transform: uppercase !important; letter-spacing: 0.10em !important; margin-bottom: 4px !important;">IMPORTANT NOTICE</div>
        <div style="color: #080c16 !important; font-size: 0.95rem !important; font-weight: 600 !important; line-height: 1.6 !important;">
          Final structure selection should follow current legal, tax and FDI/FEMA review. Overseas Bridge coordinates the decision process and implementation scope.
        </div>
      </div>
      <a href="<?php echo esc_url( home_url( '/india-entry-business-setup' ) ); ?>" class="btn-primary" style="display: inline-flex !important; align-items: center !important; gap: 8px !important; padding: 13px 26px !important; border-radius: 30px !important; font-weight: 800 !important; background: #080c16 !important; color: #FFC400 !important; text-decoration: none !important; box-shadow: 0 6px 18px rgba(8,12,22,0.25) !important; transition: transform 0.25s ease !important;">
        <span>Compare India Entry Options</span>
        <span style="font-size: 1.1rem;">&rarr;</span>
      </a>
    </div>

  </div>
</section>

<!-- 2. BOTTOM SUBTLE DELICATE FLOWING TRANSITION (ON PURE WHITE CANVAS) -->
<div class="ob-s4-bottom-trans-wrap" style="position: relative; width: 100%; overflow: hidden; line-height: 0; background: #ffffff; margin-top: -1px; z-index: 2;">
  <svg class="ob-s4-bottom-trans-svg" viewBox="0 0 1440 60" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" style="width: 100%; height: 40px; display: block;">
    <!-- DELICATE FLOWING TRANSITION LEADING TO SECTION 5 -->
    <path d="M0,20 C360,50 720,10 1080,42 C1280,58 1380,22 1440,18 L1440,60 L0,60 Z" fill="#E5F7EE" fill-opacity="0.50" class="ob-s4-curve-green"/>
    <path d="M0,30 C320,10 680,50 1040,24 C1240,10 1380,38 1440,28 L1440,60 L0,60 Z" fill="#DDF7FB" fill-opacity="0.60" class="ob-s4-curve-blue"/>
    <path d="M0,45 C380,68 760,25 1120,52 C1280,65 1390,44 1440,38 L1440,60 L0,60 Z" fill="#fffbeb" class="ob-s4-curve-white"/>
  </svg>
</div>

<!-- SECTION 04 BULLETPROOF ANIMATION TRIGGER & INTERACTIVE HERO CONTROLLER SCRIPT -->
<script id="ob-s4-master-trigger-js">
var obHeroRouteData = {
  1: {
    title: "Subsidiary (WOS)",
    sub: "100% Equity • FDI SLA",
    color: "#FFC400",
    bg: "#fffdf0"
  },
  2: {
    title: "Branch / Liaison",
    sub: "RBI / Permitted Scope",
    color: "#22B8CF",
    bg: "#f0fdfa"
  },
  3: {
    title: "LLP Structure",
    sub: "Flexible Pass-Through",
    color: "#20B486",
    bg: "#f0fdf4"
  },
  4: {
    title: "Joint Venture",
    sub: "Strategic Local Partner",
    color: "#8B5CF6",
    bg: "#faf5ff"
  }
};

function obSelectHeroNode(id) {
  // Update Left Cards Active State
  var cards = document.querySelectorAll('.ob-s4-route-card');
  cards.forEach(function(c, idx) {
    if (idx + 1 === id) {
      c.classList.add('is-active');
    } else {
      c.classList.remove('is-active');
    }
  });

  // Update Right Entity Node Data
  var data = obHeroRouteData[id];
  var entityNode = document.getElementById('ob-s4-hnode-2');
  var badgeNum = document.getElementById('ob-s4-entity-badge-num');
  var titleEl = document.getElementById('ob-s4-entity-title');
  var subEl = document.getElementById('ob-s4-entity-sub');
  var ray2 = document.getElementById('ob-s4-ray-2');

  if (data && entityNode && badgeNum && titleEl && subEl) {
    entityNode.style.borderColor = data.color;
    badgeNum.style.borderColor = data.color;
    badgeNum.style.background = data.bg;
    badgeNum.style.color = data.color;
    badgeNum.innerText = "0" + id;
    titleEl.innerText = data.title;
    subEl.innerText = data.sub;

    if (ray2) {
      ray2.setAttribute('stroke', data.color);
    }
  }
}

(function() {
  function initSectionFourMasterFlow() {
    var sec = document.getElementById('ob-section-entry-routes');
    if (!sec) return;
    
    function triggerMotion() {
      if (!sec.classList.contains('is-visible')) {
        sec.classList.add('is-visible');
      }
    }

    // 1. Direct viewport check on load
    var rect = sec.getBoundingClientRect();
    if (rect.top < window.innerHeight * 0.95 && rect.bottom > 0) {
      setTimeout(triggerMotion, 60);
    }

    // 2. IntersectionObserver for scroll
    if ('IntersectionObserver' in window) {
      var observer = new IntersectionObserver(function(entries) {
        entries.forEach(function(entry) {
          if (entry.isIntersecting) {
            triggerMotion();
          }
        });
      }, { threshold: 0.10, rootMargin: '80px 0px 80px 0px' });

      observer.observe(sec);
    }

    // 3. Fallback Scroll & Parallax Listener
    window.addEventListener('scroll', function() {
      var r = sec.getBoundingClientRect();
      if (!sec.classList.contains('is-visible') && r.top < window.innerHeight * 0.90) {
        triggerMotion();
      }

      // Parallax for Background Network & Floating Elements
      if (r.top < window.innerHeight && r.bottom > 0) {
        var offset = (window.innerHeight - r.top) * 0.025;
        var netBg = document.querySelector('.ob-s4-network-bg');
        var indiaHub = document.querySelector('.ob-s4-india-core-hub');

        if (netBg) netBg.style.transform = 'translateY(' + (offset * 0.4) + 'px)';
        if (indiaHub) indiaHub.style.transform = 'translate(-50%, calc(-50% + ' + (-offset * 0.3) + 'px))';
      }
    }, { passive: true });
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initSectionFourMasterFlow);
  } else {
    initSectionFourMasterFlow();
  }
  window.addEventListener('load', initSectionFourMasterFlow);
})();
</script>

<!-- ==========================================================================
     SECTION 5: BUILT FOR INTERNATIONAL BUSINESSES WITH REAL OPERATING GOALS (HUGO CASE STUDY 6-CARD GRID - REF: IMAGES 3 & 4)
     ========================================================================== -->

<!-- Top Organic Wave Transition -->
<div class="ob-hugo-wave-wrap" style="position: relative; width: 100%; overflow: hidden; line-height: 0; background: #ffffff; margin-bottom: -1px; z-index: 3;">
  <svg class="ob-hugo-wave-svg" viewBox="0 0 1440 80" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" style="width: 100%; height: 50px; display: block;">
    <path d="M0,35 C320,70 680,15 1040,55 C1240,75 1380,35 1440,25 L1440,80 L0,80 Z" fill="#FDF8EE"/>
  </svg>
</div>

<section class="section-padding ob-hugo-ind-section" id="ob-section-operating-goals">
  
  <!-- SCOPED INLINE MASTER CSS FOR SECTION 5 -->
  <style id="ob-s5-scoped-master-css">
    /* ==========================================================================
       SECTION 05 MASTER DESIGN SYSTEM (.ob-hugo-ind-section)
       ========================================================================== */
    .ob-hugo-ind-section {
      background: #FDF8EE !important;
      padding: 90px 0 120px 0 !important;
      position: relative !important;
      overflow: hidden !important;
      width: 100% !important;
      font-family: 'Outfit', 'Inter', -apple-system, BlinkMacSystemFont, sans-serif !important;
      color: #080c16 !important;
    }

    /* Ambient Background Atmosphere */
    .ob-s5-bg-ambient {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      pointer-events: none;
      z-index: 1;
      overflow: hidden;
    }

    .ob-s5-orb {
      position: absolute;
      border-radius: 50%;
      filter: blur(100px);
      opacity: 0.45;
    }

    .ob-s5-orb-1 {
      top: -80px;
      left: 3%;
      width: 520px;
      height: 520px;
      background: radial-gradient(circle, rgba(254, 240, 138, 0.7) 0%, rgba(253, 248, 238, 0) 70%);
      animation: obS5FloatA 22s ease-in-out infinite alternate;
    }

    .ob-s5-orb-2 {
      bottom: -100px;
      right: 3%;
      width: 560px;
      height: 560px;
      background: radial-gradient(circle, rgba(186, 230, 253, 0.6) 0%, rgba(253, 248, 238, 0) 70%);
      animation: obS5FloatB 24s ease-in-out infinite alternate;
    }

    .ob-s5-orb-3 {
      top: 45%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 480px;
      height: 480px;
      background: radial-gradient(circle, rgba(254, 215, 170, 0.5) 0%, rgba(253, 248, 238, 0) 70%);
      animation: obS5FloatA 18s ease-in-out infinite alternate;
    }

    @keyframes obS5FloatA {
      0% { transform: translateY(0) scale(1); }
      100% { transform: translateY(-28px) scale(1.06); }
    }

    @keyframes obS5FloatB {
      0% { transform: translateY(0) scale(1.05); }
      100% { transform: translateY(28px) scale(0.95); }
    }

    /* Section Container & Header */
    .ob-s5-container {
      max-width: 1320px;
      margin: 0 auto;
      padding: 0 24px;
      position: relative;
      z-index: 3;
    }

    .ob-s5-header {
      text-align: center;
      max-width: 920px;
      margin: 0 auto 60px;
    }

    .ob-s5-pill-badge {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      background: #ffffff;
      border: 1.5px solid #fde047;
      border-radius: 9999px;
      padding: 6px 20px;
      font-size: 0.78rem;
      font-weight: 800;
      letter-spacing: 0.08em;
      text-transform: uppercase;
      color: #b45309;
      margin-bottom: 22px;
      box-shadow: 0 4px 14px rgba(245, 158, 11, 0.12);
    }

    .ob-s5-pulse-dot {
      width: 8px;
      height: 8px;
      border-radius: 50%;
      background: #f59e0b;
      box-shadow: 0 0 0 0 rgba(245, 158, 11, 0.7);
      animation: obS5DotPulse 2s infinite;
    }

    @keyframes obS5DotPulse {
      0% { transform: scale(0.95); box-shadow: 0 0 0 0 rgba(245, 158, 11, 0.7); }
      70% { transform: scale(1); box-shadow: 0 0 0 8px rgba(245, 158, 11, 0); }
      100% { transform: scale(0.95); box-shadow: 0 0 0 0 rgba(245, 158, 11, 0); }
    }

    .ob-s5-main-title {
      font-size: clamp(2.2rem, 4.2vw, 3.5rem) !important;
      font-weight: 900 !important;
      color: #080c16 !important;
      line-height: 1.18 !important;
      letter-spacing: -0.025em !important;
      margin: 0 0 20px 0 !important;
    }

    .ob-s5-title-underline {
      position: relative;
      display: inline-block;
      white-space: nowrap;
    }

    .ob-s5-title-underline::after {
      content: '';
      position: absolute;
      bottom: -6px;
      left: 0;
      width: 100%;
      height: 5.5px;
      background: #f59e0b;
      border-radius: 3px;
      transform-origin: left;
      animation: obS5UnderlineGrow 1.5s cubic-bezier(0.16, 1, 0.3, 1) forwards;
    }

    @keyframes obS5UnderlineGrow {
      from { transform: scaleX(0); }
      to { transform: scaleX(1); }
    }

    .ob-s5-main-sub {
      font-size: 1.15rem !important;
      color: #475569 !important;
      line-height: 1.65 !important;
      max-width: 800px;
      margin: 0 auto;
    }

    /* 6-Card Grid Area (Hugo Case Study Layout - 3 Cols x 2 Rows) */
    .ob-s5-grid-wrapper {
      position: relative;
      margin-bottom: 50px;
    }

    .ob-s5-cards-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 32px;
      position: relative;
      z-index: 2;
    }

    /* Hugo Inc Editorial Card Component (Ref: Images 4 & 5) */
    .ob-s5-editorial-card {
      background: #ffffff;
      border-radius: 22px;
      padding: 20px 20px 26px 20px;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      position: relative;
      transition: all 0.38s cubic-bezier(0.16, 1, 0.3, 1);
      box-shadow: 0 8px 26px rgba(15, 23, 42, 0.05);
      border: 1.5px solid #e2e8f0;
      overflow: hidden;
      text-decoration: none !important;
      color: inherit !important;
    }

    .ob-s5-editorial-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 24px 55px rgba(15, 23, 42, 0.12);
    }

    /* Color Variant Borders & Accent Glows */
    .ob-s5-card-gold { border-color: #fef08a; }
    .ob-s5-card-gold:hover { border-color: #f59e0b; box-shadow: 0 24px 55px rgba(245, 158, 11, 0.16); }

    .ob-s5-card-orange { border-color: #fed7aa; }
    .ob-s5-card-orange:hover { border-color: #f97316; box-shadow: 0 24px 55px rgba(249, 115, 22, 0.16); }

    .ob-s5-card-cyan { border-color: #bae6fd; }
    .ob-s5-card-cyan:hover { border-color: #0284c7; box-shadow: 0 24px 55px rgba(2, 132, 199, 0.16); }

    .ob-s5-card-purple { border-color: #e9d5ff; }
    .ob-s5-card-purple:hover { border-color: #9333ea; box-shadow: 0 24px 55px rgba(147, 51, 234, 0.16); }

    .ob-s5-card-green { border-color: #bbf7d0; }
    .ob-s5-card-green:hover { border-color: #10b981; box-shadow: 0 24px 55px rgba(16, 185, 129, 0.16); }

    .ob-s5-card-indigo { border-color: #ddd6fe; }
    .ob-s5-card-indigo:hover { border-color: #7c3aed; box-shadow: 0 24px 55px rgba(124, 58, 237, 0.16); }

    /* Top Rich Visual Graphic Box (Hugo Editorial Stage) */
    .ob-s5-card-visual-stage {
      width: 100%;
      height: 195px;
      border-radius: 16px;
      position: relative;
      overflow: hidden;
      margin-bottom: 22px;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: transform 0.4s ease;
    }

    .ob-s5-editorial-card:hover .ob-s5-card-visual-stage {
      transform: scale(1.02);
    }

    /* Gradients for Visual Boxes */
    .ob-stage-gold5 { background: linear-gradient(135deg, #fef9c3 0%, #fef08a 60%, #fed7aa 100%); }
    .ob-stage-orange5 { background: linear-gradient(135deg, #ffedd5 0%, #fed7aa 60%, #fecdd3 100%); }
    .ob-stage-cyan5 { background: linear-gradient(135deg, #e0f2fe 0%, #bae6fd 60%, #c7d2fe 100%); }
    .ob-stage-purple5 { background: linear-gradient(135deg, #f3e8ff 0%, #e9d5ff 60%, #ddd6fe 100%); }
    .ob-stage-green5 { background: linear-gradient(135deg, #dcfce7 0%, #bbf7d0 60%, #a7f3d0 100%); }
    .ob-stage-indigo5 { background: linear-gradient(135deg, #ede9fe 0%, #ddd6fe 60%, #e9d5ff 100%); }

    /* Hugo Signature Circular Stamp Badge (Top Right of Visual) */
    .ob-hugo-stamp-badge5 {
      position: absolute;
      top: 12px;
      right: 12px;
      width: 48px;
      height: 48px;
      border-radius: 50%;
      border: 1.5px dashed rgba(255, 255, 255, 0.9);
      color: #ffffff;
      font-size: 0.64rem;
      font-weight: 900;
      letter-spacing: 0.04em;
      text-transform: uppercase;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      text-align: center;
      transform: rotate(-10deg);
      z-index: 5;
      line-height: 1.1;
      padding: 2px;
      transition: transform 0.3s ease;
    }

    .ob-s5-editorial-card:hover .ob-hugo-stamp-badge5 {
      transform: rotate(0deg) scale(1.08);
    }

    .ob-stamp-gold5 { background: #d97706; box-shadow: 0 4px 14px rgba(217, 119, 6, 0.4); }
    .ob-stamp-orange5 { background: #ea580c; box-shadow: 0 4px 14px rgba(234, 88, 12, 0.4); }
    .ob-stamp-cyan5 { background: #0284c7; box-shadow: 0 4px 14px rgba(2, 132, 199, 0.4); }
    .ob-stamp-purple5 { background: #7c3aed; box-shadow: 0 4px 14px rgba(124, 58, 237, 0.4); }
    .ob-stamp-green5 { background: #059669; box-shadow: 0 4px 14px rgba(5, 150, 105, 0.4); }
    .ob-stamp-indigo5 { background: #6d28d9; box-shadow: 0 4px 14px rgba(109, 40, 217, 0.4); }

    /* Glassmorphic Telemetry UI Box inside Visual */
    .ob-visual-glass-card5 {
      position: relative;
      z-index: 2;
      background: rgba(255, 255, 255, 0.92);
      backdrop-filter: blur(12px);
      -webkit-backdrop-filter: blur(12px);
      border: 1.5px solid rgba(255, 255, 255, 0.95);
      border-radius: 14px;
      padding: 14px 18px;
      box-shadow: 0 10px 28px rgba(15, 23, 42, 0.08);
      width: 86%;
      display: flex;
      align-items: center;
      gap: 14px;
      transition: transform 0.3s ease;
    }

    .ob-s5-editorial-card:hover .ob-visual-glass-card5 {
      transform: translateY(-3px);
    }

    .ob-vgc-icon-ring5 {
      width: 48px;
      height: 48px;
      border-radius: 14px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.55rem;
      background: #ffffff;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.06);
      flex-shrink: 0;
    }

    .ob-vgc-info5 {
      display: flex;
      flex-direction: column;
      gap: 3px;
      overflow: hidden;
    }

    .ob-vgc-label5 {
      font-size: 0.72rem;
      font-weight: 800;
      letter-spacing: 0.06em;
      text-transform: uppercase;
      color: #64748b;
    }

    .ob-vgc-metric5 {
      font-size: 0.92rem;
      font-weight: 800;
      color: #080c16;
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
    }

    .ob-vgc-status-dot5 {
      display: inline-block;
      width: 7px;
      height: 7px;
      border-radius: 50%;
      background: #10b981;
      margin-right: 4px;
    }

    /* Card Content Area */
    .ob-s5-card-content {
      display: flex;
      flex-direction: column;
      flex-grow: 1;
      padding: 0 6px;
    }

    .ob-s5-card-meta-row {
      display: flex;
      align-items: center;
      gap: 8px;
      margin-bottom: 10px;
    }

    .ob-s5-card-date {
      font-size: 0.75rem;
      font-weight: 800;
      letter-spacing: 0.06em;
      text-transform: uppercase;
      color: #64748b;
    }

    .ob-s5-meta-tag {
      font-size: 0.75rem;
      font-weight: 800;
      color: #0d9488;
      text-decoration: underline;
    }

    .ob-s5-card-title {
      font-size: 1.35rem !important;
      font-weight: 800 !important;
      color: #080c16 !important;
      margin: 0 0 12px 0 !important;
      line-height: 1.3 !important;
      letter-spacing: -0.015em !important;
      transition: color 0.25s ease;
    }

    .ob-s5-editorial-card:hover .ob-s5-card-title {
      color: #0d9488 !important;
    }

    .ob-s5-card-desc {
      font-size: 0.96rem !important;
      color: #475569 !important;
      line-height: 1.6 !important;
      margin: 0 0 22px 0 !important;
      flex-grow: 1;
    }

    /* Card Footer & CTA Link */
    .ob-s5-card-footer {
      padding-top: 16px;
      border-top: 1px dashed #e2e8f0;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    .ob-s5-card-btn-link {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      font-size: 0.92rem;
      font-weight: 800;
      color: #080c16;
      transition: all 0.25s ease;
    }

    .ob-s5-card-btn-link span.arrow {
      color: #d97706;
      font-weight: 900;
      transition: transform 0.25s ease;
    }

    .ob-s5-editorial-card:hover .ob-s5-card-btn-link {
      color: #d97706;
    }

    .ob-s5-editorial-card:hover .ob-s5-card-btn-link span.arrow {
      transform: translateX(4px);
    }

    .ob-s5-card-num-chip {
      font-size: 0.78rem;
      font-weight: 900;
      color: #94a3b8;
      background: #f1f5f9;
      padding: 4px 10px;
      border-radius: 6px;
    }

    /* Bottom Action Bar (Image 3) */
    .ob-s5-bottom-bar-card {
      background: #f5b82e;
      border-radius: 16px;
      padding: 24px 36px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 20px;
      box-shadow: 0 12px 32px rgba(245, 184, 46, 0.3);
      transition: all 0.35s cubic-bezier(0.16, 1, 0.3, 1);
      position: relative;
      overflow: hidden;
    }

    .ob-s5-bottom-bar-card:hover {
      transform: translateY(-3px);
      box-shadow: 0 18px 40px rgba(245, 184, 46, 0.4);
      background: #f7be3b;
    }

    .ob-s5-bottom-bar-left {
      display: flex;
      flex-direction: column;
      gap: 4px;
    }

    .ob-s5-bottom-bar-title {
      font-size: 1.28rem;
      font-weight: 900;
      color: #080c16;
      letter-spacing: -0.015em;
    }

    .ob-s5-bottom-bar-sub {
      font-size: 0.95rem;
      font-weight: 600;
      color: rgba(8, 12, 22, 0.82);
    }

    .ob-s5-bottom-bar-btn {
      display: inline-flex;
      align-items: center;
      gap: 10px;
      background: #080c16;
      color: #ffffff !important;
      font-weight: 900;
      font-size: 1.02rem;
      padding: 14px 32px;
      border-radius: 9999px;
      text-decoration: none !important;
      box-shadow: 0 6px 18px rgba(8, 12, 22, 0.25);
      transition: all 0.25s ease;
      white-space: nowrap;
      flex-shrink: 0;
    }

    .ob-s5-bottom-bar-btn:hover {
      background: #1e293b;
      transform: translateX(4px);
      color: #ffffff !important;
    }

    .ob-s5-bottom-bar-btn span.arrow {
      color: #f5b82e;
      font-size: 1.2rem;
      transition: transform 0.25s ease;
    }

    .ob-s5-bottom-bar-btn:hover span.arrow {
      transform: translateX(4px);
    }

    /* Scroll Reveal Initial States */
    .ob-s5-reveal {
      opacity: 0;
      transform: translateY(24px);
      transition: opacity 0.8s cubic-bezier(0.16, 1, 0.3, 1), transform 0.8s cubic-bezier(0.16, 1, 0.3, 1);
    }

    .ob-s5-revealed {
      opacity: 1 !important;
      transform: translateY(0) !important;
    }

    /* Responsive Breakpoints */
    @media (max-width: 1200px) {
      .ob-s5-cards-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 28px;
      }
    }

    @media (max-width: 768px) {
      .ob-hugo-ind-section {
        padding: 70px 0 80px 0 !important;
      }
      .ob-s5-header {
        margin-bottom: 40px;
      }
      .ob-s5-card-visual-stage {
        height: 170px;
      }
      .ob-s5-bottom-bar-card {
        flex-direction: column;
        text-align: center;
        padding: 24px 20px;
        align-items: stretch;
      }
      .ob-s5-bottom-bar-left {
        align-items: center;
      }
      .ob-s5-bottom-bar-btn {
        width: 100%;
        justify-content: center;
      }
    }

    @media (max-width: 640px) {
      .ob-s5-cards-grid {
        grid-template-columns: 1fr;
        gap: 20px;
      }
      .ob-s5-editorial-card {
        padding: 16px 16px 22px 16px;
      }
      .ob-s5-main-title {
        font-size: 1.95rem !important;
      }
    }
  </style>

  <!-- Ambient Light Blobs -->
  <div class="ob-s5-bg-ambient">
    <div class="ob-s5-orb ob-s5-orb-1"></div>
    <div class="ob-s5-orb ob-s5-orb-2"></div>
    <div class="ob-s5-orb ob-s5-orb-3"></div>
  </div>

  <div class="ob-s5-container">

    <!-- Section Header (Ref: Image 3) -->
    <div class="ob-s5-header ob-s5-reveal">
      <div class="ob-s5-pill-badge">
        <span class="ob-s5-pulse-dot"></span>
        <span>SECTION 05 &bull; INDUSTRY SOLUTIONS &amp; OPERATING GOALS</span>
      </div>
      <h2 class="ob-s5-main-title">
        Built for International Businesses with <span class="ob-s5-title-underline">Real Operating Goals</span>
      </h2>
      <p class="ob-s5-main-sub">
        We source, train, and assemble dedicated India teams around your workflows, systems, compliance requirements, and KPIs under one accountable partner.
      </p>
    </div>

    <!-- 6-Card Grid Area (Hugo Case Studies Pattern - Ref: Images 3, 4 & 5) -->
    <div class="ob-s5-grid-wrapper">
      <div class="ob-s5-cards-grid">

        <!-- CARD 01: Technology & SaaS -->
        <a href="<?php echo esc_url( home_url( '/industries-served' ) ); ?>" class="ob-s5-editorial-card ob-s5-card-gold ob-s5-reveal">
          <div class="ob-s5-card-visual-stage ob-stage-gold5">
            <div class="ob-hugo-stamp-badge5 ob-stamp-gold5">
              <span>TECH</span>
              <span>01</span>
            </div>
            <div class="ob-visual-glass-card5">
              <div class="ob-vgc-icon-ring5" style="color: #d97706;">💻</div>
              <div class="ob-vgc-info5">
                <span class="ob-vgc-label5">SaaS &amp; Tech Hub</span>
                <span class="ob-vgc-metric5"><span class="ob-vgc-status-dot5"></span>Sales &amp; Eng Pods</span>
              </div>
            </div>
          </div>
          <div class="ob-s5-card-content">
            <div class="ob-s5-card-meta-row">
              <span class="ob-s5-card-date">SECTOR 01</span>
              <span style="color: #cbd5e1;">•</span>
              <span class="ob-s5-meta-tag">Tech &amp; Cloud</span>
            </div>
            <h3 class="ob-s5-card-title">Technology &amp; SaaS</h3>
            <p class="ob-s5-card-desc">
              Build an India sales, engineering, product, customer-success or support team.
            </p>
            <div class="ob-s5-card-footer">
              <span class="ob-s5-card-btn-link">Explore Solutions <span class="arrow">&rarr;</span></span>
              <span class="ob-s5-card-num-chip">01</span>
            </div>
          </div>
        </a>

        <!-- CARD 02: Creative, Design & Post-Production -->
        <a href="<?php echo esc_url( home_url( '/studio-setup' ) ); ?>" class="ob-s5-editorial-card ob-s5-card-orange ob-s5-reveal">
          <div class="ob-s5-card-visual-stage ob-stage-orange5">
            <div class="ob-hugo-stamp-badge5 ob-stamp-orange5">
              <span>STUDIO</span>
              <span>02</span>
            </div>
            <div class="ob-visual-glass-card5">
              <div class="ob-vgc-icon-ring5" style="color: #ea580c;">🎨</div>
              <div class="ob-vgc-info5">
                <span class="ob-vgc-label5">Creative Studio</span>
                <span class="ob-vgc-metric5"><span class="ob-vgc-status-dot5"></span>VFX &amp; Workflow Hub</span>
              </div>
            </div>
          </div>
          <div class="ob-s5-card-content">
            <div class="ob-s5-card-meta-row">
              <span class="ob-s5-card-date">SECTOR 02</span>
              <span style="color: #cbd5e1;">•</span>
              <span class="ob-s5-meta-tag">Media &amp; Design</span>
            </div>
            <h3 class="ob-s5-card-title">Creative, Design &amp; Post-Production</h3>
            <p class="ob-s5-card-desc">
              Establish a studio or delivery team with people, systems, workspace and workflow support.
            </p>
            <div class="ob-s5-card-footer">
              <span class="ob-s5-card-btn-link">Explore Solutions <span class="arrow">&rarr;</span></span>
              <span class="ob-s5-card-num-chip">02</span>
            </div>
          </div>
        </a>

        <!-- CARD 03: Consulting & Professional Services -->
        <a href="<?php echo esc_url( home_url( '/industries-served' ) ); ?>" class="ob-s5-editorial-card ob-s5-card-cyan ob-s5-reveal">
          <div class="ob-s5-card-visual-stage ob-stage-cyan5">
            <div class="ob-hugo-stamp-badge5 ob-stamp-cyan5">
              <span>ADVISORY</span>
              <span>03</span>
            </div>
            <div class="ob-visual-glass-card5">
              <div class="ob-vgc-icon-ring5" style="color: #0284c7;">📈</div>
              <div class="ob-vgc-info5">
                <span class="ob-vgc-label5">Advisory &amp; Delivery</span>
                <span class="ob-vgc-metric5"><span class="ob-vgc-status-dot5"></span>Client Service Presence</span>
              </div>
            </div>
          </div>
          <div class="ob-s5-card-content">
            <div class="ob-s5-card-meta-row">
              <span class="ob-s5-card-date">SECTOR 03</span>
              <span style="color: #cbd5e1;">•</span>
              <span class="ob-s5-meta-tag">Professional Services</span>
            </div>
            <h3 class="ob-s5-card-title">Consulting &amp; Professional Services</h3>
            <p class="ob-s5-card-desc">
              Create an India client-service, research, delivery or shared-services presence.
            </p>
            <div class="ob-s5-card-footer">
              <span class="ob-s5-card-btn-link">Explore Solutions <span class="arrow">&rarr;</span></span>
              <span class="ob-s5-card-num-chip">03</span>
            </div>
          </div>
        </a>

        <!-- CARD 04: BPO, Back Office & Shared Services -->
        <a href="<?php echo esc_url( home_url( '/company-entity-setup' ) ); ?>" class="ob-s5-editorial-card ob-s5-card-purple ob-s5-reveal">
          <div class="ob-s5-card-visual-stage ob-stage-purple5">
            <div class="ob-hugo-stamp-badge5 ob-stamp-purple5">
              <span>BPO</span>
              <span>04</span>
            </div>
            <div class="ob-visual-glass-card5">
              <div class="ob-vgc-icon-ring5" style="color: #7c3aed;">🎧</div>
              <div class="ob-vgc-info5">
                <span class="ob-vgc-label5">GCC Operations</span>
                <span class="ob-vgc-metric5"><span class="ob-vgc-status-dot5"></span>24/7 Shared Services</span>
              </div>
            </div>
          </div>
          <div class="ob-s5-card-content">
            <div class="ob-s5-card-meta-row">
              <span class="ob-s5-card-date">SECTOR 04</span>
              <span style="color: #cbd5e1;">•</span>
              <span class="ob-s5-meta-tag">Shared Services</span>
            </div>
            <h3 class="ob-s5-card-title">BPO, Back Office &amp; Shared Services</h3>
            <p class="ob-s5-card-desc">
              Launch a dedicated operations centre with staffing, payroll, infrastructure and governance.
            </p>
            <div class="ob-s5-card-footer">
              <span class="ob-s5-card-btn-link">Explore Solutions <span class="arrow">&rarr;</span></span>
              <span class="ob-s5-card-num-chip">04</span>
            </div>
          </div>
        </a>

        <!-- CARD 05: Trading, Sourcing & Distribution -->
        <a href="<?php echo esc_url( home_url( '/services-overview' ) ); ?>" class="ob-s5-editorial-card ob-s5-card-green ob-s5-reveal">
          <div class="ob-s5-card-visual-stage ob-stage-green5">
            <div class="ob-hugo-stamp-badge5 ob-stamp-green5">
              <span>TRADE</span>
              <span>05</span>
            </div>
            <div class="ob-visual-glass-card5">
              <div class="ob-vgc-icon-ring5" style="color: #059669;">🚢</div>
              <div class="ob-vgc-info5">
                <span class="ob-vgc-label5">Supply &amp; Commerce</span>
                <span class="ob-vgc-metric5"><span class="ob-vgc-status-dot5"></span>Import-Export Network</span>
              </div>
            </div>
          </div>
          <div class="ob-s5-card-content">
            <div class="ob-s5-card-meta-row">
              <span class="ob-s5-card-date">SECTOR 05</span>
              <span style="color: #cbd5e1;">•</span>
              <span class="ob-s5-meta-tag">Trade &amp; Logistics</span>
            </div>
            <h3 class="ob-s5-card-title">Trading, Sourcing &amp; Distribution</h3>
            <p class="ob-s5-card-desc">
              Plan the entity, import-export readiness, vendor network, warehousing and commercial processes.
            </p>
            <div class="ob-s5-card-footer">
              <span class="ob-s5-card-btn-link">Explore Solutions <span class="arrow">&rarr;</span></span>
              <span class="ob-s5-card-num-chip">05</span>
            </div>
          </div>
        </a>

        <!-- CARD 06: Manufacturing & Site Setup -->
        <a href="<?php echo esc_url( home_url( '/factory-manufacturing-setup' ) ); ?>" class="ob-s5-editorial-card ob-s5-card-indigo ob-s5-reveal">
          <div class="ob-s5-card-visual-stage ob-stage-indigo5">
            <div class="ob-hugo-stamp-badge5 ob-stamp-indigo5">
              <span>FACTORY</span>
              <span>06</span>
            </div>
            <div class="ob-visual-glass-card5">
              <div class="ob-vgc-icon-ring5" style="color: #6d28d9;">🏭</div>
              <div class="ob-vgc-info5">
                <span class="ob-vgc-label5">Factory &amp; Site</span>
                <span class="ob-vgc-metric5"><span class="ob-vgc-status-dot5"></span>Industrial Execution</span>
              </div>
            </div>
          </div>
          <div class="ob-s5-card-content">
            <div class="ob-s5-card-meta-row">
              <span class="ob-s5-card-date">SECTOR 06</span>
              <span style="color: #cbd5e1;">•</span>
              <span class="ob-s5-meta-tag">Manufacturing</span>
            </div>
            <h3 class="ob-s5-card-title">Manufacturing &amp; Site Setup</h3>
            <p class="ob-s5-card-desc">
              Evaluate location, land or premises, approvals, workforce and local implementation partners.
            </p>
            <div class="ob-s5-card-footer">
              <span class="ob-s5-card-btn-link">Explore Solutions <span class="arrow">&rarr;</span></span>
              <span class="ob-s5-card-num-chip">06</span>
            </div>
          </div>
        </a>

      </div>
    </div>

    <!-- Distinct Yellow Action Banner Card (Exact Reference: Image 3) -->
    <div class="ob-s5-bottom-bar-card ob-s5-reveal">
      <div class="ob-s5-bottom-bar-left">
        <span class="ob-s5-bottom-bar-title">Explore Solutions for Your Business</span>
        <span class="ob-s5-bottom-bar-sub">Tailored operational setups, staffing, and regulatory roadmaps for your industry.</span>
      </div>
      <div>
        <a href="<?php echo esc_url( home_url( '/industries-served' ) ); ?>" class="ob-s5-bottom-bar-btn">
          <span>Explore Solutions for Your Business</span>
          <span class="arrow">&rarr;</span>
        </a>
      </div>
    </div>

  </div>
</section>

<!-- Scoped Section 5 Intersection Observer Script -->
<script>
document.addEventListener('DOMContentLoaded', function() {
  const revealElements5 = document.querySelectorAll('.ob-s5-reveal');
  if ('IntersectionObserver' in window) {
    const observer5 = new IntersectionObserver((entries, obs) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('ob-s5-revealed');
          obs.unobserve(entry.target);
        }
      });
    }, { threshold: 0.1, rootMargin: '0px 0px -40px 0px' });
    revealElements5.forEach(el => observer5.observe(el));
  } else {
    revealElements5.forEach(el => el.classList.add('ob-s5-revealed'));
  }
});
</script>



<!-- ==========================================================================
     SECTION: BUILD YOUR INDIA OPERATION WITHOUT BUILDING EVERYTHING UPFRONT (PREMIUM ANIMATED LIVING SYSTEM)
     ========================================================================== -->
<section class="ob-lean-scale-section" id="ob-section-lean-scaling">
  <!-- Dynamic Moving Background Atmosphere & Floating Elements -->
  <div class="ob-ls-glow ob-ls-glow-1" aria-hidden="true"></div>
  <div class="ob-ls-glow ob-ls-glow-2" aria-hidden="true"></div>
  <div class="ob-ls-glow ob-ls-glow-3" aria-hidden="true"></div>
  <div class="ob-ls-pattern-overlay" aria-hidden="true"></div>

  <!-- Floating Moving Glyphs & Particles -->
  <div class="ob-ls-moving-item ob-ls-float-ring-1" aria-hidden="true"></div>
  <div class="ob-ls-moving-item ob-ls-float-ring-2" aria-hidden="true"></div>
  <div class="ob-ls-moving-item ob-ls-float-diamond" aria-hidden="true"></div>
  <div class="ob-ls-moving-item ob-ls-float-plus" aria-hidden="true">+</div>
  <div class="ob-ls-moving-item ob-ls-float-plus-2" aria-hidden="true">+</div>

  <div class="ob-ls-container">
    
    <!-- Section Header -->
    <div class="ob-ls-header ob-ls-reveal">
      <div class="ob-ls-badge">
        <span class="ob-ls-badge-dot"></span>
        <span>AGILE &amp; SCALABLE EXPANSION MODEL</span>
      </div>
      <h2 class="ob-ls-title">
        Build Your India Operation <span class="ob-ls-title-highlight">Without Building Everything Upfront.</span>
      </h2>
      <p class="ob-ls-subtitle">
        International expansion doesn't have to begin with a large office, hundreds of employees, or significant investment in owned infrastructure. Overseas Bridge helps businesses establish the operation they need today, with the flexibility to expand as their requirements grow.
      </p>
    </div>

    <!-- Main Two-Column Bento Layout -->
    <div class="ob-ls-bento-grid">

      <!-- LEFT COLUMN: 3D Holographic Operations Visual & Comprehensive Scaling Matrix (NO NEGATIVE SPACE) -->
      <div class="ob-ls-visual-col ob-ls-reveal">
        <div class="ob-ls-visual-card">
          
          <!-- Card Top Bar -->
          <div class="ob-ls-visual-header">
            <div class="ob-ls-visual-title-wrap">
              <span class="ob-ls-visual-indicator"></span>
              <span class="ob-ls-visual-title">OPERATIONAL CAPACITY ARCHITECTURE</span>
            </div>
            <span class="ob-ls-visual-chip">MODULAR SCALE</span>
          </div>

          <!-- Hero 3D Showcase Image -->
          <div class="ob-ls-image-wrap">
            <img 
              src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/modular-india-operation-3d.jpg' ); ?>" 
              alt="Modular Agile India Business Operations Architecture" 
              class="ob-ls-image"
              loading="lazy"
            />
            <div class="ob-ls-image-overlay">
              <div class="ob-ls-overlay-badge">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#D97706" stroke-width="2.5">
                  <path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/>
                </svg>
                <span>Zero Capex Friction</span>
              </div>
            </div>
          </div>

          <!-- Interactive Capacity Tier Selector Bar -->
          <div class="ob-ls-capacity-bar">
            <div class="ob-ls-cap-node active" data-tier="1">
              <span class="ob-ls-cap-num">01</span>
              <div class="ob-ls-cap-info">
                <strong>2-5 Seats</strong>
                <span>Specialist Pod</span>
              </div>
            </div>
            <div class="ob-ls-cap-sep">➔</div>
            <div class="ob-ls-cap-node" data-tier="2">
              <span class="ob-ls-cap-num">02</span>
              <div class="ob-ls-cap-info">
                <strong>10-50 Seats</strong>
                <span>Dedicated Studio</span>
              </div>
            </div>
            <div class="ob-ls-cap-sep">➔</div>
            <div class="ob-ls-cap-node" data-tier="3">
              <span class="ob-ls-cap-num">03</span>
              <div class="ob-ls-cap-info">
                <strong>100-500+ Seats</strong>
                <span>Enterprise Hub</span>
              </div>
            </div>
          </div>

          <!-- Live Dynamic Operational Telemetry Box (Fills Negative Space Perfectly) -->
          <div class="ob-ls-telemetry-box">
            <div class="ob-ls-telemetry-header">
              <span class="ob-ls-telemetry-dot"></span>
              <span class="ob-ls-telemetry-title">MODULAR EXPANSION METRICS</span>
            </div>
            <div class="ob-ls-telemetry-grid">
              <div class="ob-ls-telemetry-item">
                <div class="ob-ls-t-icon ob-ls-t-amber">
                  <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                </div>
                <div class="ob-ls-t-data">
                  <div class="ob-ls-t-val">14-Day Ramp</div>
                  <div class="ob-ls-t-lbl">Rapid Operational Launch</div>
                </div>
              </div>

              <div class="ob-ls-telemetry-item">
                <div class="ob-ls-t-icon ob-ls-t-cyan">
                  <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>
                </div>
                <div class="ob-ls-t-data">
                  <div class="ob-ls-t-val">100% Leased</div>
                  <div class="ob-ls-t-lbl">Computers, Desks &amp; Office</div>
                </div>
              </div>

              <div class="ob-ls-telemetry-item">
                <div class="ob-ls-t-icon ob-ls-t-emerald">
                  <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                </div>
                <div class="ob-ls-t-data">
                  <div class="ob-ls-t-val">Zero Capex</div>
                  <div class="ob-ls-t-lbl">No Long-Term Asset Lock-in</div>
                </div>
              </div>

              <div class="ob-ls-telemetry-item">
                <div class="ob-ls-t-icon ob-ls-t-indigo">
                  <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M5 12.55a11 11 0 0 1 14.08 0"/><path d="M1.42 9a16 16 0 0 1 21.16 0"/><path d="M8.53 16.11a6 6 0 0 1 6.95 0"/><line x1="12" y1="20" x2="12.01" y2="20"/></svg>
                </div>
                <div class="ob-ls-t-data">
                  <div class="ob-ls-t-val">1Gbps Redundant</div>
                  <div class="ob-ls-t-lbl">Enterprise Fiber &amp; Backup</div>
                </div>
              </div>
            </div>
          </div>
          
          <!-- Bottom Verification Chips -->
          <div class="ob-ls-visual-footer">
            <div class="ob-ls-feat-pill">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#059669" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              <span>Asset-Light Deployment</span>
            </div>
            <div class="ob-ls-feat-pill">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#059669" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              <span>Rapid 14-Day Setup</span>
            </div>
            <div class="ob-ls-feat-pill">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#059669" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              <span>Zero Long-Term Lock-In</span>
            </div>
          </div>

        </div>
      </div>

      <!-- RIGHT COLUMN: 5 Core Value Pillars -->
      <div class="ob-ls-cards-col">

        <!-- Pillar 1: 2 to 500+ Employees -->
        <div class="ob-ls-card ob-ls-card-featured ob-ls-reveal">
          <div class="ob-ls-card-top">
            <div class="ob-ls-icon-box ob-ls-icon-gold">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                <circle cx="9" cy="7" r="4"></circle>
                <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
              </svg>
            </div>
            <span class="ob-ls-card-tag">TEAM SCALABILITY</span>
          </div>
          <h3 class="ob-ls-card-title">2 to 500+ Employees</h3>
          <p class="ob-ls-card-desc">
            Begin with a small specialist team or build a larger operation as your business develops.
          </p>
          <div class="ob-ls-card-metric-badge">
            <span class="ob-ls-metric-dot"></span>
            <span>Flexible Pod Sizing &amp; Seamless Ramp-Up</span>
          </div>
        </div>

        <!-- Pillar 2: Entity Capital from Approximately US$200* -->
        <div class="ob-ls-card ob-ls-reveal">
          <div class="ob-ls-card-top">
            <div class="ob-ls-icon-box ob-ls-icon-emerald">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                <line x1="12" y1="1" x2="12" y2="23"></line>
                <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
              </svg>
            </div>
            <span class="ob-ls-card-tag">CAPITAL EFFICIENCY</span>
          </div>
          <h3 class="ob-ls-card-title">Entity Capital from Approximately US$200*</h3>
          <p class="ob-ls-card-desc">
            For suitable structures and activities, an India entity may be established with relatively modest initial capital.
          </p>
        </div>

        <!-- Pillar 3: Hire Infrastructure Instead of Buying -->
        <div class="ob-ls-card ob-ls-reveal">
          <div class="ob-ls-card-top">
            <div class="ob-ls-icon-box ob-ls-icon-cyan">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                <rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect>
                <line x1="8" y1="21" x2="16" y2="21"></line>
                <line x1="12" y1="17" x2="12" y2="21"></line>
              </svg>
            </div>
            <span class="ob-ls-card-tag">ASSET-LIGHT MODEL</span>
          </div>
          <h3 class="ob-ls-card-title">Hire Infrastructure Instead of Buying</h3>
          <p class="ob-ls-card-desc">
            Access computers, furniture, workstations, and managed office solutions without necessarily purchasing everything upfront.
          </p>
        </div>

        <!-- Pillar 4: Professional, Business-Ready Infrastructure -->
        <div class="ob-ls-card ob-ls-reveal">
          <div class="ob-ls-card-top">
            <div class="ob-ls-icon-box ob-ls-icon-indigo">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
              </svg>
            </div>
            <span class="ob-ls-card-tag">ENTERPRISE READY</span>
          </div>
          <h3 class="ob-ls-card-title">Professional, Business-Ready Infrastructure</h3>
          <p class="ob-ls-card-desc">
            High-speed internet, modern workspaces, technology infrastructure, and facilities designed around your operational requirements.
          </p>
        </div>

        <!-- Pillar 5: Clear Scope. Clear Costs. No Hidden Surprises. -->
        <div class="ob-ls-card ob-ls-reveal">
          <div class="ob-ls-card-top">
            <div class="ob-ls-icon-box ob-ls-icon-amber">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="10"></circle>
                <polyline points="12 6 12 12 14 14"></polyline>
              </svg>
            </div>
            <span class="ob-ls-card-tag">100% TRANSPARENCY</span>
          </div>
          <h3 class="ob-ls-card-title">Clear Scope. Clear Costs. No Hidden Surprises.</h3>
          <p class="ob-ls-card-desc">
            Understand the agreed services, expected costs, and responsibilities before implementation begins.
          </p>
        </div>

      </div>

    </div>

    <!-- Bottom Action Ribbon / CTA -->
    <div class="ob-ls-bottom-action ob-ls-reveal">
      <div class="ob-ls-action-content">
        <div class="ob-ls-action-text">
          <h4>Ready to Plan Your Modular India Setup?</h4>
          <p>Get an itemized operational structure and transparent roadmap tailored to your exact team size.</p>
        </div>
        <a href="<?php echo esc_url( home_url( '/#roadmap-form-section' ) ); ?>" class="ob-ls-cta-btn" onclick="if(document.getElementById('roadmap-form-section')){ event.preventDefault(); document.getElementById('roadmap-form-section').scrollIntoView({behavior: 'smooth'}); }">
          <span>Explore Your India Setup Options</span>
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
            <line x1="5" y1="12" x2="19" y2="12"></line>
            <polyline points="12 5 19 12 12 19"></polyline>
          </svg>
        </a>
      </div>
    </div>

  </div>

  <!-- SCOPED MASTER STYLES FOR LEAN SCALING SECTION (COHESIVE WARM EDITORIAL LUXURY WITH LIVING ANIMATIONS) -->
  <style id="ob-lean-scale-scoped-css">
    .ob-lean-scale-section {
      position: relative !important;
      background: #FAF8F5 !important;
      color: #0F172A !important;
      padding: 110px 0 120px 0 !important;
      overflow: hidden !important;
      font-family: 'Outfit', 'Inter', -apple-system, BlinkMacSystemFont, sans-serif !important;
      box-sizing: border-box !important;
      border-top: 1px solid #EFE8DA !important;
      border-bottom: 1px solid #EFE8DA !important;
      width: 100% !important;
    }
    .ob-lean-scale-section *, 
    .ob-lean-scale-section *::before, 
    .ob-lean-scale-section *::after {
      box-sizing: border-box !important;
    }
    
    /* Ambient Glow Orbs with Continuous Fluid Drift */
    .ob-ls-glow {
      position: absolute !important;
      border-radius: 50% !important;
      pointer-events: none !important;
      filter: blur(100px) !important;
      z-index: 0 !important;
    }
    .ob-ls-glow-1 {
      top: -60px !important;
      left: 5% !important;
      width: 520px !important;
      height: 520px !important;
      background: radial-gradient(circle, rgba(254, 240, 138, 0.65) 0%, rgba(250, 248, 245, 0) 70%) !important;
      animation: obLsFloatOrb1 18s ease-in-out infinite alternate !important;
    }
    .ob-ls-glow-2 {
      bottom: -60px !important;
      right: 5% !important;
      width: 560px !important;
      height: 560px !important;
      background: radial-gradient(circle, rgba(186, 230, 253, 0.55) 0%, rgba(250, 248, 245, 0) 70%) !important;
      animation: obLsFloatOrb2 22s ease-in-out infinite alternate !important;
    }
    .ob-ls-glow-3 {
      top: 40% !important;
      left: 45% !important;
      width: 440px !important;
      height: 440px !important;
      background: radial-gradient(circle, rgba(254, 215, 170, 0.4) 0%, rgba(250, 248, 245, 0) 70%) !important;
      animation: obLsFloatOrb3 20s ease-in-out infinite alternate !important;
    }

    @keyframes obLsFloatOrb1 {
      0% { transform: translate(0, 0) scale(1); }
      100% { transform: translate(40px, 30px) scale(1.12); }
    }
    @keyframes obLsFloatOrb2 {
      0% { transform: translate(0, 0) scale(1); }
      100% { transform: translate(-35px, -30px) scale(1.08); }
    }
    @keyframes obLsFloatOrb3 {
      0% { transform: translate(0, 0) scale(0.95); opacity: 0.5; }
      100% { transform: translate(25px, -20px) scale(1.15); opacity: 0.8; }
    }

    /* Floating Moving Geometric Shapes & Particle Elements */
    .ob-ls-moving-item {
      position: absolute !important;
      pointer-events: none !important;
      z-index: 1 !important;
      opacity: 0.5 !important;
    }
    .ob-ls-float-ring-1 {
      top: 15% !important;
      left: 3% !important;
      width: 60px !important;
      height: 60px !important;
      border-radius: 50% !important;
      border: 2px dashed rgba(217, 119, 6, 0.35) !important;
      animation: obLsRotateClockwise 25s linear infinite !important;
    }
    .ob-ls-float-ring-2 {
      bottom: 20% !important;
      right: 4% !important;
      width: 75px !important;
      height: 75px !important;
      border-radius: 50% !important;
      border: 2px solid rgba(2, 132, 199, 0.25) !important;
      animation: obLsFloatSlow 8s ease-in-out infinite alternate !important;
    }
    .ob-ls-float-diamond {
      top: 25% !important;
      right: 6% !important;
      width: 20px !important;
      height: 20px !important;
      background: rgba(245, 158, 11, 0.15) !important;
      border: 1px solid rgba(217, 119, 6, 0.4) !important;
      transform: rotate(45deg) !important;
      animation: obLsFloatSlow 7s ease-in-out infinite alternate !important;
    }
    .ob-ls-float-plus {
      top: 70% !important;
      left: 6% !important;
      font-size: 24px !important;
      font-weight: 300 !important;
      color: rgba(217, 119, 6, 0.35) !important;
      animation: obLsFloatSlow 6s ease-in-out infinite alternate 1s !important;
    }
    .ob-ls-float-plus-2 {
      top: 12% !important;
      right: 25% !important;
      font-size: 20px !important;
      font-weight: 300 !important;
      color: rgba(2, 132, 199, 0.3) !important;
      animation: obLsFloatSlow 9s ease-in-out infinite alternate 2s !important;
    }

    @keyframes obLsRotateClockwise {
      from { transform: rotate(0deg); }
      to { transform: rotate(360deg); }
    }
    @keyframes obLsFloatSlow {
      0% { transform: translateY(0) rotate(0deg); }
      50% { transform: translateY(-15px) rotate(10deg); }
      100% { transform: translateY(0) rotate(0deg); }
    }

    .ob-ls-pattern-overlay {
      position: absolute !important;
      top: 0 !important; left: 0 !important; right: 0 !important; bottom: 0 !important;
      background-image: radial-gradient(#D97706 0.8px, transparent 0.8px) !important;
      background-size: 28px 28px !important;
      opacity: 0.045 !important;
      pointer-events: none !important;
      z-index: 0 !important;
    }

    /* Container */
    .ob-ls-container {
      position: relative !important;
      z-index: 2 !important;
      max-width: 1280px !important;
      margin: 0 auto !important;
      padding: 0 24px !important;
    }

    /* Header */
    .ob-ls-header {
      text-align: center !important;
      max-width: 880px !important;
      margin: 0 auto 60px auto !important;
    }
    .ob-ls-badge {
      display: inline-flex !important;
      align-items: center !important;
      gap: 8px !important;
      background: #FEF3C7 !important;
      border: 1px solid #FDE68A !important;
      border-radius: 999px !important;
      padding: 6px 16px !important;
      font-size: 11px !important;
      font-weight: 700 !important;
      letter-spacing: 1.5px !important;
      text-transform: uppercase !important;
      color: #B45309 !important;
      margin-bottom: 20px !important;
      box-shadow: 0 2px 8px rgba(217, 119, 6, 0.08) !important;
    }
    .ob-ls-badge-dot {
      width: 7px !important;
      height: 7px !important;
      border-radius: 50% !important;
      background: #D97706 !important;
      box-shadow: 0 0 8px #D97706 !important;
      animation: ob-ls-pulse 2s infinite ease-in-out !important;
    }
    @keyframes ob-ls-pulse {
      0%, 100% { transform: scale(1); opacity: 1; }
      50% { transform: scale(1.4); opacity: 0.6; }
    }
    .ob-ls-title {
      font-size: clamp(28px, 3.5vw, 44px) !important;
      font-weight: 800 !important;
      line-height: 1.25 !important;
      letter-spacing: -0.02em !important;
      color: #0F172A !important;
      margin: 0 0 20px 0 !important;
    }
    .ob-ls-title-highlight {
      background: linear-gradient(135deg, #B45309 0%, #D97706 50%, #F59E0B 100%) !important;
      -webkit-background-clip: text !important;
      -webkit-text-fill-color: transparent !important;
      display: inline-block !important;
    }
    .ob-ls-subtitle {
      font-size: clamp(15.5px, 1.15vw, 17.5px) !important;
      line-height: 1.7 !important;
      color: #475569 !important;
      margin: 0 !important;
      font-weight: 400 !important;
    }

    /* Bento Grid */
    .ob-ls-bento-grid {
      display: grid !important;
      grid-template-columns: 1fr 1fr !important;
      gap: 28px !important;
      align-items: stretch !important;
      margin-bottom: 44px !important;
    }

    /* Visual Card (Left Column) */
    .ob-ls-visual-col {
      display: flex !important;
    }
    .ob-ls-visual-card {
      background: #FFFFFF !important;
      border: 1px solid #EAE5DC !important;
      border-radius: 22px !important;
      padding: 24px !important;
      display: flex !important;
      flex-direction: column !important;
      width: 100% !important;
      box-shadow: 0 12px 36px rgba(15, 23, 42, 0.05), 0 1px 3px rgba(0, 0, 0, 0.02) !important;
      transition: all 0.35s cubic-bezier(0.16, 1, 0.3, 1) !important;
    }
    .ob-ls-visual-card:hover {
      border-color: #F59E0B !important;
      box-shadow: 0 20px 48px rgba(217, 119, 6, 0.12) !important;
      transform: translateY(-3px) !important;
    }
    .ob-ls-visual-header {
      display: flex !important;
      align-items: center !important;
      justify-content: space-between !important;
      margin-bottom: 16px !important;
      padding-bottom: 12px !important;
      border-bottom: 1px solid #F1ECE3 !important;
    }
    .ob-ls-visual-title-wrap {
      display: flex !important;
      align-items: center !important;
      gap: 8px !important;
    }
    .ob-ls-visual-indicator {
      width: 8px !important;
      height: 8px !important;
      border-radius: 50% !important;
      background: #10B981 !important;
      box-shadow: 0 0 8px #10B981 !important;
    }
    .ob-ls-visual-title {
      font-size: 11px !important;
      font-weight: 700 !important;
      letter-spacing: 1px !important;
      color: #64748B !important;
    }
    .ob-ls-visual-chip {
      background: #FEF3C7 !important;
      color: #B45309 !important;
      font-size: 10px !important;
      font-weight: 700 !important;
      letter-spacing: 0.8px !important;
      padding: 3px 10px !important;
      border-radius: 999px !important;
      border: 1px solid #FDE68A !important;
    }
    .ob-ls-image-wrap {
      position: relative !important;
      border-radius: 16px !important;
      overflow: hidden !important;
      aspect-ratio: 16 / 9.5 !important;
      background: #0F172A !important;
      margin-bottom: 16px !important;
      border: 1px solid #E2E8F0 !important;
      box-shadow: 0 4px 16px rgba(0, 0, 0, 0.08) !important;
    }
    .ob-ls-image {
      width: 100% !important;
      height: 100% !important;
      object-fit: cover !important;
      display: block !important;
      transition: transform 0.6s cubic-bezier(0.16, 1, 0.3, 1) !important;
    }
    .ob-ls-visual-card:hover .ob-ls-image {
      transform: scale(1.03) !important;
    }
    .ob-ls-image-overlay {
      position: absolute !important;
      bottom: 12px !important;
      left: 12px !important;
      z-index: 2 !important;
    }
    .ob-ls-overlay-badge {
      display: inline-flex !important;
      align-items: center !important;
      gap: 6px !important;
      background: rgba(255, 255, 255, 0.95) !important;
      backdrop-filter: blur(8px) !important;
      border: 1px solid #FDE68A !important;
      padding: 5px 12px !important;
      border-radius: 999px !important;
      font-size: 11px !important;
      font-weight: 700 !important;
      color: #92400E !important;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1) !important;
    }

    /* Capacity Progress Node Bar */
    .ob-ls-capacity-bar {
      display: flex !important;
      align-items: center !important;
      justify-content: space-between !important;
      background: #F8FAFC !important;
      border: 1px solid #E2E8F0 !important;
      border-radius: 12px !important;
      padding: 10px 14px !important;
      margin-bottom: 16px !important;
    }
    .ob-ls-cap-node {
      display: flex !important;
      align-items: center !important;
      gap: 8px !important;
      cursor: pointer !important;
      transition: all 0.2s ease !important;
    }
    .ob-ls-cap-num {
      width: 24px !important;
      height: 24px !important;
      border-radius: 6px !important;
      background: #FEF3C7 !important;
      color: #B45309 !important;
      border: 1px solid #FDE68A !important;
      font-size: 10.5px !important;
      font-weight: 800 !important;
      display: flex !important;
      align-items: center !important;
      justify-content: center !important;
    }
    .ob-ls-cap-node.active .ob-ls-cap-num {
      background: #D97706 !important;
      color: #FFFFFF !important;
      box-shadow: 0 0 10px rgba(217, 119, 6, 0.35) !important;
    }
    .ob-ls-cap-info strong {
      display: block !important;
      font-size: 11.5px !important;
      color: #0F172A !important;
      line-height: 1.2 !important;
    }
    .ob-ls-cap-info span {
      display: block !important;
      font-size: 10px !important;
      color: #64748B !important;
    }
    .ob-ls-cap-sep {
      color: #94A3B8 !important;
      font-size: 11px !important;
    }

    /* Live Dynamic Operational Telemetry Box (Fills Negative Space Perfectly) */
    .ob-ls-telemetry-box {
      background: linear-gradient(135deg, #FFFDF9 0%, #FFFBEB 100%) !important;
      border: 1px solid #FDE68A !important;
      border-radius: 14px !important;
      padding: 14px 16px !important;
      margin-bottom: 16px !important;
      box-shadow: 0 4px 14px rgba(217, 119, 6, 0.05) !important;
    }
    .ob-ls-telemetry-header {
      display: flex !important;
      align-items: center !important;
      gap: 6px !important;
      margin-bottom: 10px !important;
    }
    .ob-ls-telemetry-dot {
      width: 6px !important;
      height: 6px !important;
      border-radius: 50% !important;
      background: #10B981 !important;
      box-shadow: 0 0 6px #10B981 !important;
    }
    .ob-ls-telemetry-title {
      font-size: 10px !important;
      font-weight: 700 !important;
      letter-spacing: 0.8px !important;
      color: #92400E !important;
      text-transform: uppercase !important;
    }
    .ob-ls-telemetry-grid {
      display: grid !important;
      grid-template-columns: 1fr 1fr !important;
      gap: 10px !important;
    }
    .ob-ls-telemetry-item {
      display: flex !important;
      align-items: center !important;
      gap: 10px !important;
      background: rgba(255, 255, 255, 0.85) !important;
      border: 1px solid #FEE2E2 !important;
      border-color: rgba(245, 158, 11, 0.2) !important;
      padding: 8px 10px !important;
      border-radius: 10px !important;
      transition: all 0.25s ease !important;
    }
    .ob-ls-telemetry-item:hover {
      background: #FFFFFF !important;
      border-color: #F59E0B !important;
      transform: translateY(-1px) !important;
      box-shadow: 0 4px 12px rgba(217, 119, 6, 0.08) !important;
    }
    .ob-ls-t-icon {
      width: 30px !important;
      height: 30px !important;
      border-radius: 8px !important;
      display: flex !important;
      align-items: center !important;
      justify-content: center !important;
      flex-shrink: 0 !important;
    }
    .ob-ls-t-amber { background: #FEF3C7 !important; color: #D97706 !important; }
    .ob-ls-t-cyan { background: #E0F2FE !important; color: #0284C7 !important; }
    .ob-ls-t-emerald { background: #D1FAE5 !important; color: #059669 !important; }
    .ob-ls-t-indigo { background: #EEF2FF !important; color: #4F46E5 !important; }
    .ob-ls-t-val {
      font-size: 11.5px !important;
      font-weight: 700 !important;
      color: #0F172A !important;
      line-height: 1.2 !important;
    }
    .ob-ls-t-lbl {
      font-size: 9.5px !important;
      color: #64748B !important;
      line-height: 1.2 !important;
    }

    /* Visual Footer Pills */
    .ob-ls-visual-footer {
      display: flex !important;
      flex-wrap: wrap !important;
      gap: 8px !important;
    }
    .ob-ls-feat-pill {
      display: inline-flex !important;
      align-items: center !important;
      gap: 6px !important;
      background: #F1F5F9 !important;
      border: 1px solid #E2E8F0 !important;
      padding: 6px 12px !important;
      border-radius: 8px !important;
      font-size: 11px !important;
      font-weight: 600 !important;
      color: #334155 !important;
    }

    /* Cards Column (Right Column) */
    .ob-ls-cards-col {
      display: grid !important;
      grid-template-columns: 1fr 1fr !important;
      gap: 16px !important;
    }
    .ob-ls-card {
      background: #FFFFFF !important;
      border: 1px solid #EAE5DC !important;
      border-radius: 18px !important;
      padding: 22px 20px !important;
      display: flex !important;
      flex-direction: column !important;
      transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1) !important;
      position: relative !important;
      overflow: hidden !important;
      box-shadow: 0 6px 20px rgba(15, 23, 42, 0.03) !important;
    }
    .ob-ls-card::before {
      content: '' !important;
      position: absolute !important;
      top: 0 !important; left: 0 !important; right: 0 !important;
      height: 3px !important;
      background: linear-gradient(90deg, #D97706, #F59E0B) !important;
      opacity: 0 !important;
      transition: opacity 0.3s ease !important;
    }
    .ob-ls-card:hover {
      transform: translateY(-4px) !important;
      border-color: #F59E0B !important;
      box-shadow: 0 16px 36px rgba(217, 119, 6, 0.12) !important;
    }
    .ob-ls-card:hover::before {
      opacity: 1 !important;
    }

    /* Featured Card (Card 1: 2 to 500+ Employees) spans 2 columns */
    .ob-ls-card-featured {
      grid-column: span 2 !important;
      background: linear-gradient(135deg, #FFFDF8 0%, #FFFBEB 100%) !important;
      border-color: #FDE68A !important;
    }
    .ob-ls-card-featured .ob-ls-card-title {
      font-size: 20px !important;
      color: #0F172A !important;
    }

    .ob-ls-card-top {
      display: flex !important;
      align-items: center !important;
      justify-content: space-between !important;
      margin-bottom: 14px !important;
    }
    .ob-ls-icon-box {
      width: 44px !important;
      height: 44px !important;
      border-radius: 12px !important;
      display: flex !important;
      align-items: center !important;
      justify-content: center !important;
    }
    .ob-ls-icon-gold {
      background: #FEF3C7 !important;
      color: #D97706 !important;
      border: 1px solid #FDE68A !important;
    }
    .ob-ls-icon-emerald {
      background: #D1FAE5 !important;
      color: #059669 !important;
      border: 1px solid #A7F3D0 !important;
    }
    .ob-ls-icon-cyan {
      background: #E0F2FE !important;
      color: #0284C7 !important;
      border: 1px solid #BAE6FD !important;
    }
    .ob-ls-icon-indigo {
      background: #EEF2FF !important;
      color: #4F46E5 !important;
      border: 1px solid #C7D2FE !important;
    }
    .ob-ls-icon-amber {
      background: #FFFBEB !important;
      color: #B45309 !important;
      border: 1px solid #FDE68A !important;
    }
    .ob-ls-card-tag {
      font-size: 10px !important;
      font-weight: 700 !important;
      letter-spacing: 0.8px !important;
      color: #64748B !important;
      text-transform: uppercase !important;
    }
    .ob-ls-card-title {
      font-size: 16.5px !important;
      font-weight: 700 !important;
      color: #0F172A !important;
      margin: 0 0 8px 0 !important;
      line-height: 1.35 !important;
    }
    .ob-ls-card-desc {
      font-size: 13.5px !important;
      line-height: 1.6 !important;
      color: #475569 !important;
      margin: 0 !important;
      font-weight: 400 !important;
    }
    .ob-ls-card-metric-badge {
      display: inline-flex !important;
      align-items: center !important;
      gap: 6px !important;
      margin-top: 14px !important;
      padding: 5px 14px !important;
      background: #FEF3C7 !important;
      border: 1px solid #FDE68A !important;
      border-radius: 999px !important;
      font-size: 11.5px !important;
      font-weight: 700 !important;
      color: #B45309 !important;
      width: fit-content !important;
    }
    .ob-ls-metric-dot {
      width: 6px !important;
      height: 6px !important;
      border-radius: 50% !important;
      background: #D97706 !important;
    }

    /* Bottom Action Ribbon (Luxury Executive Navy & Gold Contrast) */
    .ob-ls-bottom-action {
      background: linear-gradient(135deg, #0F172A 0%, #1E293B 100%) !important;
      border: 1px solid #334155 !important;
      border-radius: 20px !important;
      padding: 26px 36px !important;
      box-shadow: 0 16px 40px rgba(15, 23, 42, 0.12) !important;
    }
    .ob-ls-action-content {
      display: flex !important;
      align-items: center !important;
      justify-content: space-between !important;
      gap: 24px !important;
    }
    .ob-ls-action-text h4 {
      font-size: 19px !important;
      font-weight: 700 !important;
      color: #FFFFFF !important;
      margin: 0 0 4px 0 !important;
    }
    .ob-ls-action-text p {
      font-size: 14px !important;
      color: #94A3B8 !important;
      margin: 0 !important;
    }
    .ob-ls-cta-btn {
      display: inline-flex !important;
      align-items: center !important;
      gap: 10px !important;
      background: linear-gradient(135deg, #F59E0B 0%, #D97706 100%) !important;
      color: #FFFFFF !important;
      font-size: 14.5px !important;
      font-weight: 700 !important;
      padding: 14px 28px !important;
      border-radius: 999px !important;
      text-decoration: none !important;
      white-space: nowrap !important;
      box-shadow: 0 8px 24px rgba(217, 119, 6, 0.35) !important;
      transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1) !important;
      flex-shrink: 0 !important;
      cursor: pointer !important;
    }
    .ob-ls-cta-btn:hover {
      transform: translateY(-2px) !important;
      box-shadow: 0 12px 30px rgba(217, 119, 6, 0.5) !important;
      background: linear-gradient(135deg, #FBBF24 0%, #F59E0B 100%) !important;
      color: #FFFFFF !important;
    }
    .ob-ls-cta-btn svg {
      transition: transform 0.3s ease !important;
    }
    .ob-ls-cta-btn:hover svg {
      transform: translateX(4px) !important;
    }

    /* Scroll Reveal Animations */
    .ob-ls-reveal {
      opacity: 0 !important;
      transform: translateY(28px) !important;
      transition: opacity 0.8s cubic-bezier(0.16, 1, 0.3, 1), transform 0.8s cubic-bezier(0.16, 1, 0.3, 1) !important;
    }
    .ob-ls-reveal.ob-ls-in-view {
      opacity: 1 !important;
      transform: translateY(0) !important;
    }

    /* Responsive Media Queries */
    @media (max-width: 1024px) {
      .ob-lean-scale-section {
        padding: 85px 0 95px 0 !important;
      }
      .ob-ls-bento-grid {
        grid-template-columns: 1fr !important;
        gap: 28px !important;
      }
      .ob-ls-action-content {
        flex-direction: column !important;
        text-align: center !important;
        gap: 18px !important;
      }
      .ob-ls-cta-btn {
        width: 100% !important;
        justify-content: center !important;
      }
    }

    @media (max-width: 640px) {
      .ob-lean-scale-section {
        padding: 65px 0 75px 0 !important;
      }
      .ob-ls-container {
        padding: 0 16px !important;
      }
      .ob-ls-header {
        margin-bottom: 40px !important;
      }
      .ob-ls-badge {
        font-size: 10px !important;
        padding: 5px 12px !important;
      }
      .ob-ls-visual-card {
        padding: 16px !important;
      }
      .ob-ls-capacity-bar {
        flex-direction: column !important;
        align-items: flex-start !important;
        gap: 10px !important;
      }
      .ob-ls-cap-sep {
        display: none !important;
      }
      .ob-ls-telemetry-grid {
        grid-template-columns: 1fr !important;
        gap: 8px !important;
      }
      .ob-ls-cards-col {
        grid-template-columns: 1fr !important;
        gap: 14px !important;
      }
      .ob-ls-card-featured {
        grid-column: span 1 !important;
      }
      .ob-ls-bottom-action {
        padding: 20px 18px !important;
      }
      .ob-ls-action-text h4 {
        font-size: 16px !important;
      }
      .ob-ls-action-text p {
        font-size: 13px !important;
      }
      .ob-ls-cta-btn {
        padding: 12px 20px !important;
        font-size: 13.5px !important;
      }
    }
  </style>

  <!-- SCOPED JS FOR SCROLL REVEAL, NODE CLICKING & INTERACTIVITY -->
  <script id="ob-lean-scale-scoped-js">
  (function() {
    function initLeanScalingSection() {
      var revealEls = document.querySelectorAll('#ob-section-lean-scaling .ob-ls-reveal');
      if (revealEls.length) {
        if ('IntersectionObserver' in window) {
          var obs = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
              if (entry.isIntersecting) {
                entry.target.classList.add('ob-ls-in-view');
                obs.unobserve(entry.target);
              }
            });
          }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });

          revealEls.forEach(function(el, idx) {
            el.style.transitionDelay = (idx * 0.08) + 's';
            obs.observe(el);
          });
        } else {
          revealEls.forEach(function(el) {
            el.classList.add('ob-ls-in-view');
          });
        }
      }

      // Interactive tier nodes
      var nodes = document.querySelectorAll('#ob-section-lean-scaling .ob-ls-cap-node');
      nodes.forEach(function(node) {
        node.addEventListener('click', function() {
          nodes.forEach(function(n) { n.classList.remove('active'); });
          node.classList.add('active');
        });
      });
    }

    if (document.readyState === 'loading') {
      document.addEventListener('DOMContentLoaded', initLeanScalingSection);
    } else {
      initLeanScalingSection();
    }
    window.addEventListener('load', initLeanScalingSection);
  })();
  </script>
</section>


<!-- ==========================================================================
     SECTION 6: LAUNCH IN 5 CLEAR STEPS (TECHNICAL LAUNCH MAP BACKGROUND ECOSYSTEM)
     ========================================================================== -->

<section class="section-padding ob-s6-section" id="ob-section-launch-steps">
  
  <!-- SCOPED MASTER CSS FOR SECTION 6 -->
  <style id="ob-s6-scoped-master-css">
    /* ==========================================================================
       SECTION 06 MASTER SCOPED CSS (TECHNICAL LAUNCH MAP BACKGROUND SYSTEM)
       ========================================================================== */
    .ob-s6-section {
      background: #fafbfc !important;
      border-top: 1px solid #eef2f6 !important;
      border-bottom: 1px solid #eef2f6 !important;
      padding: 105px 0 115px 0 !important;
      position: relative !important;
      overflow: hidden !important;
      width: 100% !important;
      box-sizing: border-box !important;
      font-family: 'Outfit', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif !important;
    }

    /* --------------------------------------------------------------------------
       LAYER 1: SUBTLE TECHNICAL COORDINATE GRID (Z-INDEX 1)
       -------------------------------------------------------------------------- */
    .ob-s6-grid-canvas {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      pointer-events: none;
      z-index: 1;
      opacity: 0.55;
      background-image: 
        radial-gradient(circle, #cbd5e1 1px, transparent 1px),
        linear-gradient(to right, rgba(226, 232, 240, 0.4) 1px, transparent 1px),
        linear-gradient(to bottom, rgba(226, 232, 240, 0.4) 1px, transparent 1px);
      background-size: 48px 48px, 144px 144px, 144px 144px;
      animation: obS6GridDrift 60s linear infinite !important;
    }
    @keyframes obS6GridDrift {
      0% { background-position: 0 0, 0 0, 0 0; }
      100% { background-position: 48px 24px, 144px 72px, 144px 72px; }
    }

    /* --------------------------------------------------------------------------
       LAYER 2: FULL-BLEED ABSTRACT ROUTE MAP SVG (Z-INDEX 2)
       -------------------------------------------------------------------------- */
    .ob-s6-route-map-svg {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      pointer-events: none;
      z-index: 2;
    }

    /* Route corridor lines */
    .ob-s6-route-path-primary {
      stroke: #cbd5e1;
      stroke-width: 1.8;
      stroke-linecap: round;
      fill: none;
      stroke-dasharray: 6 6;
      animation: obS6RouteFlow1 30s linear infinite !important;
    }
    .ob-s6-route-path-secondary {
      stroke: #94a3b8;
      stroke-width: 1.5;
      stroke-linecap: round;
      fill: none;
      stroke-dasharray: 4 8;
      animation: obS6RouteFlow2 24s linear infinite !important;
    }
    .ob-s6-route-path-solid {
      stroke: #e2e8f0;
      stroke-width: 2;
      stroke-linecap: round;
      fill: none;
    }

    /* Signature Flowing Energy Gradient Line */
    .ob-s6-signature-energy-path {
      stroke: url(#ob-s6-signature-gradient);
      stroke-width: 3;
      stroke-linecap: round;
      fill: none;
      stroke-dasharray: 12 8;
      opacity: 0.75;
      animation: obS6SignatureDash 20s linear infinite !important;
    }

    @keyframes obS6RouteFlow1 {
      from { stroke-dashoffset: 240; }
      to { stroke-dashoffset: 0; }
    }
    @keyframes obS6RouteFlow2 {
      from { stroke-dashoffset: 0; }
      to { stroke-dashoffset: 240; }
    }
    @keyframes obS6SignatureDash {
      from { stroke-dashoffset: 320; }
      to { stroke-dashoffset: 0; }
    }

    /* Continuous Route Particles */
    .ob-s6-map-particle {
      filter: drop-shadow(0 0 5px currentColor);
    }

    /* --------------------------------------------------------------------------
       LAYER 3: LARGE DESTINATION RADAR & ORBIT SYSTEM (Z-INDEX 3)
       -------------------------------------------------------------------------- */
    .ob-s6-destination-radar {
      position: absolute;
      top: 16%;
      right: -2%;
      width: 480px;
      height: 480px;
      pointer-events: none;
      z-index: 3;
      opacity: 0.65;
    }
    .ob-s6-radar-ring {
      stroke: #cbd5e1;
      stroke-width: 1.2;
      fill: none;
    }
    .ob-s6-radar-ring-dashed {
      stroke: #94a3b8;
      stroke-width: 1.4;
      stroke-dasharray: 4 6;
      fill: none;
      animation: obS6RotateFocal 36s linear infinite !important;
      transform-origin: center;
    }
    .ob-s6-radar-beam {
      transform-origin: center;
      animation: obS6RadarSpin 16s linear infinite !important;
    }
    @keyframes obS6RadarSpin {
      from { transform: rotate(0deg); }
      to { transform: rotate(360deg); }
    }

    /* --------------------------------------------------------------------------
       LAYER 5: LARGE MOVING HAND-DRAWN / ROUTE ARROWS (Z-INDEX 4)
       -------------------------------------------------------------------------- */
    .ob-s6-map-arrow {
      position: absolute;
      pointer-events: none;
      z-index: 4;
    }
    .ob-s6-map-arrow-1 {
      top: 6%;
      left: 28%;
      width: 72px;
      height: 48px;
      animation: obS6ArrowSway 8s ease-in-out infinite alternate !important;
    }
    .ob-s6-map-arrow-2 {
      bottom: 12%;
      right: 18%;
      width: 84px;
      height: 56px;
      animation: obS6ArrowSway 9s ease-in-out infinite alternate !important;
    }

    /* --------------------------------------------------------------------------
       LAYER 6: 18 ASYMMETRIC VECTOR NAVIGATION OBJECTS (Z-INDEX 4)
       -------------------------------------------------------------------------- */
    .ob-s6-nav-obj {
      position: absolute;
      pointer-events: none;
      z-index: 4;
      opacity: 0.72;
      will-change: transform;
      transition: transform 0.25s cubic-bezier(0.16, 1, 0.3, 1);
    }

    /* Individual Object Keyframe Routines */
    .ob-s6-obj-pin-1 { top: 16%; left: 2%; animation: obS6FloatV 11s ease-in-out infinite alternate !important; }
    .ob-s6-obj-compass-1 { top: 28%; left: 8%; animation: obS6SpinClockwise 22s linear infinite !important; }
    .ob-s6-obj-doc-1 { top: 42%; left: 2%; animation: obS6FloatH 14s ease-in-out infinite alternate !important; }
    .ob-s6-obj-check-1 { bottom: 22%; left: 6%; animation: obS6FloatV 9s ease-in-out infinite alternate !important; }
    .ob-s6-obj-diamond-1 { bottom: 12%; left: 14%; animation: obS6SpinClockwise 18s linear infinite !important; }
    .ob-s6-obj-cross-1 { top: 8%; left: 46%; animation: obS6FloatV 7s ease-in-out infinite alternate !important; }
    .ob-s6-obj-radar-1 { top: 22%; right: 14%; animation: obS6FloatPulse 12s ease-in-out infinite alternate !important; }
    .ob-s6-obj-arrow-vect { top: 40%; right: 4%; animation: obS6FloatV 10s ease-in-out infinite alternate !important; }
    .ob-s6-obj-gear-1 { bottom: 32%; right: 3%; animation: obS6SpinCounter 24s linear infinite !important; }
    .ob-s6-obj-rocket-1 { bottom: 14%; right: 6%; animation: obS6RocketDrift 8s ease-in-out infinite alternate !important; }
    .ob-s6-obj-ring-1 { bottom: 6%; right: 35%; animation: obS6FloatPulse 16s ease-in-out infinite alternate !important; }

    @keyframes obS6FloatV {
      0% { transform: translateY(0); }
      100% { transform: translateY(-14px); }
    }
    @keyframes obS6FloatH {
      0% { transform: translateX(0); }
      100% { transform: translateX(16px); }
    }
    @keyframes obS6SpinClockwise {
      0% { transform: rotate(0deg); }
      100% { transform: rotate(360deg); }
    }
    @keyframes obS6SpinCounter {
      0% { transform: rotate(0deg); }
      100% { transform: rotate(-360deg); }
    }
    @keyframes obS6FloatPulse {
      0% { transform: scale(1); opacity: 0.55; }
      100% { transform: scale(1.18); opacity: 0.90; }
    }
    @keyframes obS6RocketDrift {
      0% { transform: translate(0, 0) rotate(0deg); }
      100% { transform: translate(6px, -12px) rotate(4deg); }
    }

    /* --------------------------------------------------------------------------
       LAYER 7: MAIN CONTENT CONTAINER (Z-INDEX 10)
       -------------------------------------------------------------------------- */
    .ob-s6-container {
      max-width: 1280px;
      margin: 0 auto;
      padding: 0 24px;
      position: relative;
      z-index: 10;
      box-sizing: border-box;
    }
    .ob-s6-header {
      text-align: center;
      margin-bottom: 54px;
      position: relative;
    }
    .ob-s6-heading-wrap {
      display: inline-block;
      position: relative;
    }
    .ob-s6-title {
      font-size: clamp(40px, 4.6vw, 58px) !important;
      font-weight: 800 !important;
      color: #0f172a !important;
      line-height: 1.15 !important;
      letter-spacing: -0.03em !important;
      margin: 0 0 16px 0 !important;
      text-align: center !important;
    }
    .ob-s6-subtitle {
      font-size: clamp(16px, 1.25vw, 18.5px) !important;
      line-height: 1.62 !important;
      color: #64748b !important;
      max-width: 820px !important;
      margin: 0 auto !important;
      font-weight: 400 !important;
      text-align: center !important;
    }

    /* Hand-Drawn SVG Curved Arrow */
    .ob-s6-hand-arrow {
      position: absolute;
      top: -20px;
      right: -62px;
      width: 56px;
      height: 52px;
      pointer-events: none;
      animation: obS6ArrowSway 7s ease-in-out infinite alternate !important;
    }
    .ob-s6-hand-arrow-path {
      stroke-dasharray: 90;
      stroke-dashoffset: 0;
      animation: obS6ArrowDraw 3.5s cubic-bezier(0.16, 1, 0.3, 1) forwards !important;
    }
    @keyframes obS6ArrowDraw {
      0% { stroke-dashoffset: 90; }
      100% { stroke-dashoffset: 0; }
    }
    @keyframes obS6ArrowSway {
      0% { transform: rotate(0deg) translate(0, 0); }
      100% { transform: rotate(6deg) translate(4px, -3px); }
    }

    /* --------------------------------------------------------------------------
       2-COLUMN INTERACTIVE GRID LAYOUT (50% / 50%)
       -------------------------------------------------------------------------- */
    .ob-s6-grid {
      display: grid;
      grid-template-columns: 50% 50%;
      gap: 32px;
      align-items: stretch;
      margin-bottom: 52px;
      position: relative;
    }

    /* --------------------------------------------------------------------------
       LEFT SIDE: 5 INTERACTIVE STEP CARDS (ACCORDION STACK)
       -------------------------------------------------------------------------- */
    .ob-s6-cards-stack {
      display: flex;
      flex-direction: column;
      gap: 13px;
      justify-content: space-between;
    }

    .ob-s6-step-card {
      background: #ffffff;
      border: 1.5px solid #e2e8f0;
      border-radius: 20px;
      padding: 18px 22px;
      cursor: pointer;
      position: relative;
      overflow: hidden;
      outline: none;
      user-select: none;
      box-shadow: 0 4px 14px -2px rgba(15, 23, 42, 0.04), 0 1px 3px rgba(0, 0, 0, 0.02);
      transition: transform 0.32s cubic-bezier(0.16, 1, 0.3, 1), 
                  box-shadow 0.32s cubic-bezier(0.16, 1, 0.3, 1), 
                  border-color 0.32s cubic-bezier(0.16, 1, 0.3, 1), 
                  background-color 0.32s cubic-bezier(0.16, 1, 0.3, 1);
    }
    .ob-s6-step-card:focus-visible {
      border-color: #0284c7 !important;
      box-shadow: 0 0 0 3px rgba(2, 132, 199, 0.25) !important;
    }

    /* Left accent indicator strip */
    .ob-s6-step-card::before {
      content: '';
      position: absolute;
      left: 0;
      top: 0;
      bottom: 0;
      width: 4.5px;
      background: transparent;
      transition: background-color 0.32s ease, width 0.32s ease;
    }

    /* Card Top Row */
    .ob-s6-card-header {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 14px;
    }
    .ob-s6-card-left {
      display: flex;
      align-items: center;
      gap: 14px;
      flex: 1;
      min-width: 0;
    }

    /* Step Number Badge */
    .ob-s6-card-num-badge {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 42px;
      height: 42px;
      border-radius: 12px;
      font-size: 1.02rem;
      font-weight: 800;
      letter-spacing: -0.02em;
      flex-shrink: 0;
      transition: transform 0.32s cubic-bezier(0.16, 1, 0.3, 1), background-color 0.32s ease, color 0.32s ease;
    }

    /* Step Living SVG Icon Container */
    .ob-s6-card-icon-box {
      width: 36px;
      height: 36px;
      border-radius: 10px;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
      transition: transform 0.32s cubic-bezier(0.16, 1, 0.3, 1), background-color 0.32s ease;
    }
    .ob-s6-card-icon-box svg {
      width: 20px;
      height: 20px;
      transition: transform 0.32s cubic-bezier(0.16, 1, 0.3, 1);
    }

    /* Card Title & Brief */
    .ob-s6-card-text {
      flex: 1;
      min-width: 0;
    }
    .ob-s6-card-title {
      font-size: 1.12rem !important;
      font-weight: 700 !important;
      color: #0f172a !important;
      margin: 0 0 3px 0 !important;
      line-height: 1.25 !important;
      letter-spacing: -0.015em !important;
      transition: color 0.25s ease;
    }
    .ob-s6-card-desc {
      font-size: 0.88rem !important;
      line-height: 1.45 !important;
      color: #64748b !important;
      margin: 0 !important;
      transition: color 0.25s ease;
    }

    /* Plus/Minus Indicator Button */
    .ob-s6-card-toggle-btn {
      width: 34px;
      height: 34px;
      border-radius: 50%;
      background: #f1f5f9;
      border: 1px solid #e2e8f0;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
      transition: transform 0.35s cubic-bezier(0.16, 1, 0.3, 1), background-color 0.32s ease, border-color 0.32s ease;
    }
    .ob-s6-toggle-icon {
      width: 14px;
      height: 14px;
      position: relative;
      transition: transform 0.35s cubic-bezier(0.16, 1, 0.3, 1);
    }
    .ob-s6-toggle-icon::before,
    .ob-s6-toggle-icon::after {
      content: '';
      position: absolute;
      background: #475569;
      border-radius: 2px;
      transition: transform 0.35s cubic-bezier(0.16, 1, 0.3, 1), background-color 0.32s ease;
    }
    .ob-s6-toggle-icon::before {
      top: 6px;
      left: 0;
      width: 14px;
      height: 2px;
    }
    .ob-s6-toggle-icon::after {
      top: 0;
      left: 6px;
      width: 2px;
      height: 14px;
    }

    /* Expandable Drawer (CSS Grid) */
    .ob-s6-card-drawer {
      display: grid;
      grid-template-rows: 0fr;
      transition: grid-template-rows 0.38s cubic-bezier(0.16, 1, 0.3, 1);
    }
    .ob-s6-drawer-inner {
      overflow: hidden;
      opacity: 0;
      transform: translateY(-6px);
      transition: opacity 0.32s cubic-bezier(0.16, 1, 0.3, 1), transform 0.32s cubic-bezier(0.16, 1, 0.3, 1);
    }

    .ob-s6-drawer-content {
      padding-top: 14px;
      margin-top: 12px;
      border-top: 1px dashed rgba(148, 163, 184, 0.32);
      display: flex;
      flex-direction: column;
      align-items: flex-start;
      gap: 8px;
      width: 100%;
    }
    .ob-s6-drawer-pill {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      font-size: 0.80rem;
      font-weight: 600;
      padding: 6px 14px;
      border-radius: 20px;
      background: #ffffff;
      border: 1px solid #e2e8f0;
      color: #334155;
      box-shadow: 0 1px 3px rgba(0, 0, 0, 0.03);
      max-width: 100%;
      box-sizing: border-box;
      line-height: 1.4;
    }
    .ob-s6-drawer-pill-dot {
      width: 6px;
      height: 6px;
      border-radius: 50%;
      flex-shrink: 0;
    }

    /* --------------------------------------------------------------------------
       INDIVIDUAL STEP COLOR ACCENTS (01-05)
       -------------------------------------------------------------------------- */
    .ob-s6-step-01 {
      --step-theme: #d97706;
      --step-soft-bg: #fffdf5;
      --step-badge-bg: #fef3c7;
      --step-badge-text: #b45309;
      --step-border: #fbbf24;
      --step-glow: rgba(245, 158, 11, 0.20);
    }
    .ob-s6-step-01 .ob-s6-card-num-badge { background: #fef3c7; color: #b45309; }
    .ob-s6-step-01 .ob-s6-card-icon-box { background: #fffbeb; color: #d97706; }

    .ob-s6-step-02 {
      --step-theme: #0284c7;
      --step-soft-bg: #f5faff;
      --step-badge-bg: #e0f2fe;
      --step-badge-text: #0369a1;
      --step-border: #38bdf8;
      --step-glow: rgba(14, 165, 233, 0.20);
    }
    .ob-s6-step-02 .ob-s6-card-num-badge { background: #e0f2fe; color: #0369a1; }
    .ob-s6-step-02 .ob-s6-card-icon-box { background: #f0f9ff; color: #0284c7; }

    .ob-s6-step-03 {
      --step-theme: #059669;
      --step-soft-bg: #f4fdf8;
      --step-badge-bg: #d1fae5;
      --step-badge-text: #047857;
      --step-border: #34d399;
      --step-glow: rgba(16, 185, 129, 0.20);
    }
    .ob-s6-step-03 .ob-s6-card-num-badge { background: #d1fae5; color: #047857; }
    .ob-s6-step-03 .ob-s6-card-icon-box { background: #ecfdf5; color: #059669; }

    .ob-s6-step-04 {
      --step-theme: #7c3aed;
      --step-soft-bg: #faf7ff;
      --step-badge-bg: #ede9fe;
      --step-badge-text: #6d28d9;
      --step-border: #a78bfa;
      --step-glow: rgba(139, 92, 246, 0.20);
    }
    .ob-s6-step-04 .ob-s6-card-num-badge { background: #ede9fe; color: #6d28d9; }
    .ob-s6-step-04 .ob-s6-card-icon-box { background: #f5f3ff; color: #7c3aed; }

    .ob-s6-step-05 {
      --step-theme: #ea580c;
      --step-soft-bg: #fff9f5;
      --step-badge-bg: #ffedd5;
      --step-badge-text: #c2410c;
      --step-border: #fb923c;
      --step-glow: rgba(234, 88, 12, 0.20);
    }
    .ob-s6-step-05 .ob-s6-card-num-badge { background: #ffedd5; color: #c2410c; }
    .ob-s6-step-05 .ob-s6-card-icon-box { background: #fff7ed; color: #ea580c; }

    /* Hover & Active States */
    @media (hover: hover) {
      .ob-s6-step-card:hover {
        transform: translateY(-4px);
        border-color: var(--step-border);
        box-shadow: 0 14px 28px -6px var(--step-glow), 0 3px 8px rgba(0, 0, 0, 0.03);
      }
      .ob-s6-step-card:hover .ob-s6-card-num-badge { transform: scale(1.06); }
      .ob-s6-step-card:hover .ob-s6-card-icon-box svg { transform: scale(1.12) rotate(4deg); }
      .ob-s6-step-card:hover .ob-s6-toggle-icon { transform: rotate(20deg); }
    }

    .ob-s6-step-card.is-active {
      background: var(--step-soft-bg);
      border-color: var(--step-theme);
      box-shadow: 0 18px 36px -8px var(--step-glow), 0 0 0 1.5px var(--step-theme);
      transform: translateY(-2px);
    }
    .ob-s6-step-card.is-active::before { background: var(--step-theme); }
    .ob-s6-step-card.is-active .ob-s6-card-toggle-btn { background: var(--step-theme); border-color: var(--step-theme); }
    .ob-s6-step-card.is-active .ob-s6-toggle-icon::before,
    .ob-s6-step-card.is-active .ob-s6-toggle-icon::after { background: #ffffff; }
    .ob-s6-step-card.is-active .ob-s6-toggle-icon::after { transform: scaleY(0); }
    .ob-s6-step-card.is-active .ob-s6-card-drawer { grid-template-rows: 1fr; }
    .ob-s6-step-card.is-active .ob-s6-drawer-inner { opacity: 1; transform: translateY(0); }
    .ob-s6-step-card.is-active .ob-s6-card-title { color: var(--step-theme) !important; }

    /* --------------------------------------------------------------------------
       RIGHT SIDE: MASTER "INDIA LAUNCH JOURNEY" ANIMATED DASHBOARD
       -------------------------------------------------------------------------- */
    .ob-s6-visual-wrapper {
      background: #ffffff;
      border: 1.5px solid #e2e8f0;
      border-radius: 24px;
      padding: 24px;
      position: relative;
      overflow: hidden;
      box-shadow: 0 18px 40px -8px rgba(15, 23, 42, 0.08), 0 4px 12px rgba(0, 0, 0, 0.02);
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      min-height: 560px;
    }

    /* Top Live Pill & Stage Status */
    .ob-s6-visual-topbar {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 12px;
      margin-bottom: 6px;
      position: relative;
      z-index: 5;
    }
    .ob-s6-status-pill {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      background: #f8fafc;
      border: 1px solid #e2e8f0;
      border-radius: 20px;
      padding: 6px 14px;
      font-size: 0.76rem;
      font-weight: 700;
      letter-spacing: 0.04em;
      color: #334155;
      text-transform: uppercase;
      box-shadow: 0 1px 3px rgba(0, 0, 0, 0.02);
    }
    .ob-s6-pulse-dot {
      width: 8px;
      height: 8px;
      border-radius: 50%;
      background: #10b981;
      box-shadow: 0 0 0 rgba(16, 185, 129, 0.5);
      animation: obS6DotPulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite !important;
    }
    @keyframes obS6DotPulse {
      0% { box-shadow: 0 0 0 0 rgba(16, 185, 129, 0.7); }
      70% { box-shadow: 0 0 0 8px rgba(16, 185, 129, 0); }
      100% { box-shadow: 0 0 0 0 rgba(16, 185, 129, 0); }
    }

    .ob-s6-stage-counter {
      font-size: 0.80rem;
      font-weight: 700;
      color: #64748b;
      letter-spacing: 0.02em;
    }
    .ob-s6-stage-num {
      color: #0f172a;
      font-weight: 800;
    }

    /* Visual Canvas Area */
    .ob-s6-canvas-area {
      position: relative;
      width: 100%;
      height: 410px;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    /* SVG Roadmap Stage */
    .ob-s6-svg-stage {
      width: 100%;
      height: 100%;
      position: absolute;
      top: 0;
      left: 0;
      pointer-events: none;
      z-index: 2;
    }

    /* Journey Gradient Background Path & Active Highlight */
    .ob-s6-base-path {
      stroke: #e2e8f0;
      stroke-width: 4.5;
      stroke-linecap: round;
      fill: none;
    }
    .ob-s6-gradient-path {
      stroke: url(#ob-s6-journey-grad);
      stroke-width: 5;
      stroke-linecap: round;
      fill: none;
      stroke-dasharray: 8 8;
      animation: obS6FlowDash 26s linear infinite !important;
    }
    @keyframes obS6FlowDash {
      from { stroke-dashoffset: 240; }
      to { stroke-dashoffset: 0; }
    }

    /* Continuous Glowing Light Particle */
    .ob-s6-journey-particle {
      filter: drop-shadow(0 0 8px rgba(245, 158, 11, 0.9));
    }

    /* Focal Highlight Circle Ring */
    .ob-s6-focal-circle {
      position: absolute;
      width: 76px;
      height: 76px;
      border-radius: 50%;
      border: 2px dashed #f59e0b;
      pointer-events: none;
      z-index: 2;
      opacity: 0.85;
      transition: all 0.55s cubic-bezier(0.16, 1, 0.3, 1);
      animation: obS6RotateFocal 20s linear infinite !important;
    }
    @keyframes obS6RotateFocal {
      from { transform: translate(-50%, -50%) rotate(0deg); }
      to { transform: translate(-50%, -50%) rotate(360deg); }
    }

    /* Floating Roadmap Nodes (62px) */
    .ob-s6-node {
      position: absolute;
      width: 62px;
      height: 62px;
      border-radius: 50%;
      background: #ffffff;
      border: 2px solid #e2e8f0;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      z-index: 4;
      box-shadow: 0 6px 18px rgba(15, 23, 42, 0.08);
      transform: translate(-50%, -50%);
      transition: transform 0.45s cubic-bezier(0.16, 1, 0.3, 1), 
                  border-color 0.35s ease, 
                  box-shadow 0.35s ease, 
                  background-color 0.35s ease;
    }
    .ob-s6-node-icon {
      width: 26px;
      height: 26px;
      color: #64748b;
      transition: transform 0.35s ease, color 0.35s ease;
    }
    .ob-s6-node-num {
      position: absolute;
      bottom: -6px;
      right: -6px;
      width: 22px;
      height: 22px;
      border-radius: 50%;
      background: #f1f5f9;
      color: #475569;
      font-size: 0.70rem;
      font-weight: 800;
      display: flex;
      align-items: center;
      justify-content: center;
      border: 1.5px solid #ffffff;
      box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12);
      transition: background-color 0.35s ease, color 0.35s ease;
    }
    .ob-s6-node-label {
      position: absolute;
      bottom: -22px;
      font-size: 0.74rem;
      font-weight: 700;
      color: #64748b;
      white-space: nowrap;
      pointer-events: none;
      transition: color 0.35s ease, transform 0.35s ease;
    }

    /* Node Floating Motions */
    .ob-s6-node-1 { top: 14%; left: 20%; animation: obS6NodeFloatA 7s ease-in-out infinite alternate !important; }
    .ob-s6-node-2 { top: 28%; left: 78%; animation: obS6NodeFloatB 8.5s ease-in-out infinite alternate !important; }
    .ob-s6-node-3 { top: 50%; left: 22%; animation: obS6NodeFloatC 6.5s ease-in-out infinite alternate !important; }
    .ob-s6-node-4 { top: 68%; left: 78%; animation: obS6NodeFloatA 9s ease-in-out infinite alternate !important; }
    .ob-s6-node-5 { top: 86%; left: 48%; animation: obS6NodeFloatB 7.5s ease-in-out infinite alternate !important; }

    @keyframes obS6NodeFloatA {
      0% { margin-top: 0px; }
      100% { margin-top: -8px; }
    }
    @keyframes obS6NodeFloatB {
      0% { margin-top: 0px; }
      100% { margin-top: 9px; }
    }
    @keyframes obS6NodeFloatC {
      0% { margin-top: 0px; }
      100% { margin-top: -7px; }
    }

    /* Active Node State */
    .ob-s6-node.is-active {
      transform: translate(-50%, -50%) scale(1.22);
      z-index: 10;
      box-shadow: 0 14px 32px -4px rgba(15, 23, 42, 0.18);
    }
    .ob-s6-node.is-active .ob-s6-node-label {
      font-weight: 800;
      transform: translateY(2px);
    }
    .ob-s6-node.is-active .ob-s6-node-icon {
      transform: scale(1.10);
    }

    .ob-s6-node-1.is-active { border-color: #f59e0b; background: #fffbeb; }
    .ob-s6-node-1.is-active .ob-s6-node-icon { color: #d97706; }
    .ob-s6-node-1.is-active .ob-s6-node-num { background: #f59e0b; color: #ffffff; }
    .ob-s6-node-1.is-active .ob-s6-node-label { color: #b45309; }

    .ob-s6-node-2.is-active { border-color: #0ea5e9; background: #f0f9ff; }
    .ob-s6-node-2.is-active .ob-s6-node-icon { color: #0284c7; }
    .ob-s6-node-2.is-active .ob-s6-node-num { background: #0ea5e9; color: #ffffff; }
    .ob-s6-node-2.is-active .ob-s6-node-label { color: #0369a1; }

    .ob-s6-node-3.is-active { border-color: #10b981; background: #ecfdf5; }
    .ob-s6-node-3.is-active .ob-s6-node-icon { color: #059669; }
    .ob-s6-node-3.is-active .ob-s6-node-num { background: #10b981; color: #ffffff; }
    .ob-s6-node-3.is-active .ob-s6-node-label { color: #047857; }

    .ob-s6-node-4.is-active { border-color: #8b5cf6; background: #f5f3ff; }
    .ob-s6-node-4.is-active .ob-s6-node-icon { color: #7c3aed; }
    .ob-s6-node-4.is-active .ob-s6-node-num { background: #8b5cf6; color: #ffffff; }
    .ob-s6-node-4.is-active .ob-s6-node-label { color: #6d28d9; }

    .ob-s6-node-5.is-active { border-color: #f97316; background: #fff7ed; }
    .ob-s6-node-5.is-active .ob-s6-node-icon { color: #ea580c; }
    .ob-s6-node-5.is-active .ob-s6-node-num { background: #f97316; color: #ffffff; }
    .ob-s6-node-5.is-active .ob-s6-node-label { color: #c2410c; }

    /* Bottom Live Stage Summary Card */
    .ob-s6-visual-summary {
      background: #f8fafc;
      border: 1px solid #e2e8f0;
      border-radius: 18px;
      padding: 16px 20px;
      margin-top: 10px;
      position: relative;
      z-index: 5;
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 16px;
      transition: background-color 0.35s ease, border-color 0.35s ease;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.02);
    }
    .ob-s6-summary-left {
      flex: 1;
      min-width: 0;
    }
    .ob-s6-summary-step-tag {
      font-size: 0.74rem;
      font-weight: 800;
      letter-spacing: 0.04em;
      text-transform: uppercase;
      margin-bottom: 3px;
      transition: color 0.35s ease;
    }
    .ob-s6-summary-title {
      font-size: 1.02rem;
      font-weight: 700;
      color: #0f172a;
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
      margin: 0;
    }
    .ob-s6-summary-badge {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      font-size: 0.78rem;
      font-weight: 700;
      padding: 6px 14px;
      border-radius: 20px;
      background: #ffffff;
      border: 1px solid #e2e8f0;
      color: #0f172a;
      flex-shrink: 0;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.04);
    }

    /* --------------------------------------------------------------------------
       SECTION CTA & NOTE
       -------------------------------------------------------------------------- */
    .ob-s6-cta-wrapper {
      text-align: center;
      margin-top: 10px;
      position: relative;
      z-index: 10;
    }
    .ob-s6-cta-btn {
      display: inline-flex;
      align-items: center;
      gap: 10px;
      padding: 16px 42px !important;
      font-size: 1.05rem !important;
      font-weight: 700 !important;
      border-radius: 50px !important;
      background: #0f172a !important;
      color: #ffffff !important;
      text-decoration: none !important;
      box-shadow: 0 10px 24px -4px rgba(15, 23, 42, 0.25) !important;
      transition: transform 0.28s cubic-bezier(0.16, 1, 0.3, 1), 
                  box-shadow 0.28s cubic-bezier(0.16, 1, 0.3, 1), 
                  background-color 0.28s ease !important;
    }
    .ob-s6-cta-arrow {
      display: inline-block;
      transition: transform 0.28s cubic-bezier(0.16, 1, 0.3, 1);
    }
    @media (hover: hover) {
      .ob-s6-cta-btn:hover {
        transform: translateY(-3px) !important;
        box-shadow: 0 16px 32px -6px rgba(15, 23, 42, 0.35) !important;
        background: #1e293b !important;
      }
      .ob-s6-cta-btn:hover .ob-s6-cta-arrow {
        transform: translateX(6px);
      }
    }
    .ob-s6-cta-btn:active {
      transform: scale(0.98) translateY(0) !important;
    }
    .ob-s6-bottom-disclaimer-row {
      display: flex !important;
      align-items: center !important;
      justify-content: center !important;
      margin-top: 18px !important;
      position: relative !important;
      z-index: 10 !important;
      max-width: 100% !important;
    }
    .ob-s6-cta-note {
      font-size: 0.85rem !important;
      color: #64748b !important;
      margin: 0 !important;
      font-style: italic !important;
      line-height: 1.4 !important;
      text-align: center !important;
    }

    /* --------------------------------------------------------------------------
       RESPONSIVE DESIGN FOR TABLET & MOBILE
       -------------------------------------------------------------------------- */
    @media (max-width: 992px) {
      .ob-s6-section {
        padding: 70px 0 80px 0 !important;
      }
      .ob-s6-grid {
        grid-template-columns: 1fr;
        gap: 32px;
      }
      .ob-s6-visual-wrapper {
        order: 1;
        min-height: 480px;
        padding: 20px;
      }
      .ob-s6-cards-stack {
        order: 2;
      }
      .ob-s6-canvas-area {
        height: 340px;
      }
      .ob-s6-hand-arrow {
        display: none;
      }
      .ob-s6-nav-obj,
      .ob-s6-destination-radar {
        display: none;
      }
      .ob-s6-bottom-disclaimer-row {
        flex-direction: column !important;
        align-items: center !important;
        text-align: center !important;
        gap: 10px !important;
      }
      .ob-s6-cta-note {
        text-align: center !important;
        font-size: 0.78rem !important;
        max-width: 90% !important;
      }
    }

    @media (max-width: 640px) {
      .ob-s6-section {
        padding: 55px 0 65px 0 !important;
      }
      .ob-s6-container {
        padding: 0 16px;
      }
      .ob-s6-step-card {
        padding: 16px 18px;
        border-radius: 16px;
      }
      .ob-s6-card-num-badge {
        width: 38px;
        height: 38px;
        font-size: 0.95rem;
      }
      .ob-s6-card-icon-box {
        width: 32px;
        height: 32px;
      }
      .ob-s6-card-icon-box svg {
        width: 18px;
        height: 18px;
      }
      .ob-s6-card-title {
        font-size: 1.05rem !important;
      }
      .ob-s6-card-desc {
        font-size: 0.85rem !important;
      }
      .ob-s6-visual-wrapper {
        min-height: 420px;
        padding: 16px;
      }
      .ob-s6-canvas-area {
        height: 290px;
      }
      .ob-s6-node {
        width: 50px;
        height: 50px;
      }
      .ob-s6-node-icon {
        width: 22px;
        height: 22px;
      }
      .ob-s6-node-label {
        font-size: 0.68rem;
        bottom: -18px;
      }
      .ob-s6-cta-btn {
        width: 100%;
        justify-content: center;
        padding: 15px 24px !important;
      }
    }

    /* --------------------------------------------------------------------------
       ACCESSIBILITY / PREFERS REDUCED MOTION
       -------------------------------------------------------------------------- */
    @media (prefers-reduced-motion: reduce) {
      .ob-s6-grid-canvas,
      .ob-s6-route-path-primary,
      .ob-s6-route-path-secondary,
      .ob-s6-signature-energy-path,
      .ob-s6-radar-beam,
      .ob-s6-radar-ring-dashed,
      .ob-s6-map-particle,
      .ob-s6-nav-obj,
      .ob-s6-focal-circle,
      .ob-s6-gradient-path,
      .ob-s6-journey-particle,
      .ob-s6-node,
      .ob-s6-pulse-dot {
        animation: none !important;
        transition: none !important;
      }
    }
  </style>

  <!-- ========================================================================
       NEW TECHNICAL LAUNCH MAP BACKGROUND SYSTEM (LAYERS 1 - 6)
       ======================================================================== -->

  <!-- LAYER 1: TECHNICAL COORDINATE GRID -->
  <div class="ob-s6-grid-canvas"></div>

  <!-- LAYER 2: FULL-BLEED ABSTRACT ROUTE MAP SVG & FLOWING PARTICLES -->
  <svg class="ob-s6-route-map-svg" viewBox="0 0 1440 900" fill="none" preserveAspectRatio="none">
    <defs>
      <!-- Signature Energy Line Gradient (Yellow -> Sky Blue -> Purple -> Orange) -->
      <linearGradient id="ob-s6-signature-gradient" x1="0%" y1="20%" x2="100%" y2="80%">
        <stop offset="0%" stop-color="#F59E0B" stop-opacity="0.8"/>
        <stop offset="35%" stop-color="#0EA5E9" stop-opacity="0.8"/>
        <stop offset="70%" stop-color="#8B5CF6" stop-opacity="0.8"/>
        <stop offset="100%" stop-color="#F97316" stop-opacity="0.8"/>
      </linearGradient>

      <filter id="ob-s6-glow-amber" x="-20%" y="-20%" width="140%" height="140%">
        <feGaussianBlur stdDeviation="3" result="blur"/>
        <feComposite in="SourceGraphic" in2="blur" operator="over"/>
      </filter>
      <filter id="ob-s6-glow-cyan" x="-20%" y="-20%" width="140%" height="140%">
        <feGaussianBlur stdDeviation="3" result="blur"/>
        <feComposite in="SourceGraphic" in2="blur" operator="over"/>
      </filter>
      <filter id="ob-s6-glow-emerald" x="-20%" y="-20%" width="140%" height="140%">
        <feGaussianBlur stdDeviation="3" result="blur"/>
        <feComposite in="SourceGraphic" in2="blur" operator="over"/>
      </filter>
    </defs>

    <!-- Background Route Paths -->
    <!-- Route Alpha (Top-Left -> Mid-Center -> Top-Right) -->
    <path id="ob-s6-bg-route-alpha" class="ob-s6-route-path-primary" d="M 40 120 C 220 80, 480 180, 720 130 C 960 80, 1180 190, 1400 110" />

    <!-- Route Beta (Bottom-Left -> Mid-Left -> Center-Right -> Mid-Right) -->
    <path id="ob-s6-bg-route-beta" class="ob-s6-route-path-secondary" d="M 60 780 C 180 620, 360 480, 640 520 C 920 560, 1140 380, 1380 440" />

    <!-- Route Gamma (Top-Right -> Mid-Center -> Bottom-Right) -->
    <path id="ob-s6-bg-route-gamma" class="ob-s6-route-path-primary" d="M 1360 180 C 1120 260, 840 320, 680 460 C 520 600, 780 780, 1120 820" />

    <!-- Transfer Connection Segments -->
    <path class="ob-s6-route-path-solid" d="M 180 140 L 260 280 L 160 490" />
    <path class="ob-s6-route-path-solid" d="M 1240 220 L 1180 460 L 1320 680" />
    <path class="ob-s6-route-path-solid" d="M 680 130 L 720 340 L 640 520" />

    <!-- Prominent Sweeping Signature Energy Line -->
    <path id="ob-s6-bg-signature-path" class="ob-s6-signature-energy-path" d="M 20 240 C 240 180, 420 360, 700 280 C 980 200, 1180 460, 1420 320" />

    <!-- Continuous Flowing Glowing Particles along Routes -->
    <!-- Particle Alpha (Warm Yellow) -->
    <circle class="ob-s6-map-particle" r="4.5" fill="#F59E0B" filter="url(#ob-s6-glow-amber)">
      <animateMotion dur="13s" repeatCount="indefinite" rotate="auto">
        <mpath href="#ob-s6-bg-route-alpha"/>
      </animateMotion>
    </circle>
    <!-- Particle Beta (Sky Blue) -->
    <circle class="ob-s6-map-particle" r="4.5" fill="#0EA5E9" filter="url(#ob-s6-glow-cyan)">
      <animateMotion dur="15s" repeatCount="indefinite" rotate="auto">
        <mpath href="#ob-s6-bg-route-beta"/>
      </animateMotion>
    </circle>
    <!-- Particle Gamma (Emerald Mint) -->
    <circle class="ob-s6-map-particle" r="4.5" fill="#10B981" filter="url(#ob-s6-glow-emerald)">
      <animateMotion dur="11s" repeatCount="indefinite" rotate="auto">
        <mpath href="#ob-s6-bg-route-gamma"/>
      </animateMotion>
    </circle>
    <!-- Particle Signature Energy Line (Vivid Purple/Cyan Aura) -->
    <circle class="ob-s6-map-particle" r="6" fill="#8B5CF6" filter="url(#ob-s6-glow-cyan)">
      <animateMotion dur="9s" repeatCount="indefinite" rotate="auto">
        <mpath href="#ob-s6-bg-signature-path"/>
      </animateMotion>
    </circle>
    <circle class="ob-s6-map-particle" r="14" fill="#8B5CF6" opacity="0.25">
      <animateMotion dur="9s" repeatCount="indefinite" rotate="auto">
        <mpath href="#ob-s6-bg-signature-path"/>
      </animateMotion>
    </circle>
  </svg>

  <!-- LAYER 3: LARGE DESTINATION RADAR OBJECT (BEHIND RIGHT DASHBOARD) -->
  <svg class="ob-s6-destination-radar" viewBox="0 0 400 400" fill="none">
    <circle cx="200" cy="200" r="180" class="ob-s6-radar-ring" stroke-dasharray="2 4"/>
    <circle cx="200" cy="200" r="135" class="ob-s6-radar-ring"/>
    <circle cx="200" cy="200" r="90" class="ob-s6-radar-ring-dashed"/>
    <circle cx="200" cy="200" r="45" class="ob-s6-radar-ring"/>
    <circle cx="200" cy="200" r="4" fill="#0EA5E9"/>
    <!-- Radar Crosshairs -->
    <line x1="20" y1="200" x2="380" y2="200" stroke="#CBD5E1" stroke-width="1.2" stroke-dasharray="4 4"/>
    <line x1="200" y1="20" x2="200" y2="380" stroke="#CBD5E1" stroke-width="1.2" stroke-dasharray="4 4"/>
    <!-- Rotating Sweep Beam -->
    <g class="ob-s6-radar-beam">
      <path d="M 200 200 L 380 200 A 180 180 0 0 0 327 73 Z" fill="url(#ob-s6-radar-sweep-grad)" opacity="0.4"/>
      <defs>
        <radialGradient id="ob-s6-radar-sweep-grad" cx="200" cy="200" r="180" gradientUnits="userSpaceOnUse">
          <stop offset="0%" stop-color="#0EA5E9" stop-opacity="0.3"/>
          <stop offset="100%" stop-color="#0EA5E9" stop-opacity="0.02"/>
        </radialGradient>
      </defs>
    </g>
    <!-- Orbiting Destination Beacon -->
    <circle r="5" fill="#0EA5E9">
      <animateMotion dur="8s" repeatCount="indefinite" path="M 200 65 A 135 135 0 1 1 199.9 65 Z"/>
    </circle>
  </svg>

  
  <svg class="ob-s6-map-arrow ob-s6-map-arrow-1" viewBox="0 0 80 50" fill="none">
    <path d="M 6 12 C 30 6, 60 14, 68 40 M 68 40 L 56 36 M 68 40 L 72 28" stroke="#0f172a" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="80" stroke-dashoffset="0"/>
  </svg>
  <svg class="ob-s6-map-arrow ob-s6-map-arrow-2" viewBox="0 0 90 60" fill="none">
    <path d="M 10 50 C 40 46, 65 35, 78 12 M 78 12 L 66 18 M 78 12 L 80 26" stroke="#0f172a" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="90" stroke-dashoffset="0"/>
  </svg>

  <!-- LAYER 6: 18 ASYMMETRICAL FLOATING VECTOR NAVIGATION OBJECTS -->
  <!-- 1. Location Pin -->
  <svg class="ob-s6-nav-obj ob-s6-obj-pin-1" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#0EA5E9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
    <circle cx="12" cy="10" r="3"></circle>
  </svg>

  <!-- 2. Navigational Compass Crosshair -->
  <svg class="ob-s6-nav-obj ob-s6-obj-compass-1" width="28" height="28" viewBox="0 0 32 32" fill="none" stroke="#F59E0B" stroke-width="1.8">
    <circle cx="16" cy="16" r="12" stroke-dasharray="3 3"/>
    <line x1="16" y1="2" x2="16" y2="30"/>
    <line x1="2" y1="16" x2="30" y2="16"/>
  </svg>

  <!-- 3. Blueprint Document -->
  <svg class="ob-s6-nav-obj ob-s6-obj-doc-1" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#8B5CF6" stroke-width="2" stroke-linecap="round">
    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
    <polyline points="14 2 14 8 20 8"></polyline>
    <line x1="16" y1="13" x2="8" y2="13"></line>
    <line x1="16" y1="17" x2="8" y2="17"></line>
  </svg>

  <!-- 4. Checkmark Status Badge -->
  <svg class="ob-s6-nav-obj ob-s6-obj-check-1" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2" stroke-linecap="round">
    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
    <polyline points="9 12 11 14 15 10"></polyline>
  </svg>

  <!-- 5. Route Diamond Waypoint -->
  <svg class="ob-s6-nav-obj ob-s6-obj-diamond-1" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#F97316" stroke-width="2.2">
    <rect x="12" y="2" width="14" height="14" transform="rotate(45 12 2)"/>
  </svg>

  <!-- 6. Intersect Plus Cross -->
  <svg class="ob-s6-nav-obj ob-s6-obj-cross-1" width="16" height="16" viewBox="0 0 20 20" fill="none" stroke="#64748B" stroke-width="2" stroke-linecap="round">
    <line x1="10" y1="2" x2="10" y2="18"></line>
    <line x1="2" y1="10" x2="18" y2="10"></line>
  </svg>

  <!-- 7. Technical Radar Orbit Ring -->
  <svg class="ob-s6-nav-obj ob-s6-obj-radar-1" width="34" height="34" viewBox="0 0 36 36" fill="none">
    <circle cx="18" cy="18" r="15" stroke="#0EA5E9" stroke-width="1.5" stroke-dasharray="4 4"/>
    <circle cx="18" cy="18" r="6" stroke="#0EA5E9" stroke-width="1.5"/>
  </svg>

  
  <svg class="ob-s6-nav-obj ob-s6-obj-arrow-vect" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#8B5CF6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
    <line x1="7" y1="17" x2="17" y2="7"></line>
    <polyline points="7 7 17 7 17 17"></polyline>
  </svg>

  <!-- 9. Technical Gear Cog -->
  <svg class="ob-s6-nav-obj ob-s6-obj-gear-1" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="#64748B" stroke-width="2" stroke-linecap="round">
    <circle cx="12" cy="12" r="3"></circle>
    <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path>
  </svg>

  <!-- 10. Launch Rocket Glyph -->
  <svg class="ob-s6-nav-obj ob-s6-obj-rocket-1" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#F97316" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
    <path d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.13-.09-2.91a2.18 2.18 0 0 0-2.91-.09z"></path>
    <path d="M12 15l-3-3a22 22 0 0 1 2-3.95A12.88 12.88 0 0 1 22 2c0 2.72-.78 7.5-6 11a22.35 22.35 0 0 1-4 2z"></path>
    <path d="M9 12H4s.55-3.03 2-4.5c1.62-1.63 5-2.5 5-2.5"></path>
    <path d="M15 12v5s3.03-.55 4.5-2c1.63-1.62 2.5-5 2.5-5"></path>
  </svg>

  <!-- ========================================================================
       LAYER 7: MAIN SECTION 6 CONTENT
       ======================================================================== -->
  <div class="ob-s6-container">

    
    <div class="ob-s6-header">
      <div class="ob-s6-heading-wrap">
        <h2 class="ob-s6-title">Launch in 5 Clear Steps</h2>
        
        <svg class="ob-s6-hand-arrow" viewBox="0 0 60 50" fill="none">
          <path class="ob-s6-hand-arrow-path" d="M6 8C22 4 48 10 52 38M52 38L42 34M52 38L56 26" stroke="#0f172a" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </div>
      <p class="ob-s6-subtitle">
        From initial planning to operational readiness, every step is mapped around decisions, dependencies and accountability.
      </p>
    </div>

    <!-- 2. MAIN 2-COLUMN INTERACTIVE ECOSYSTEM -->
    <div class="ob-s6-grid">

      <!-- LEFT SIDE: 5 INTERACTIVE STEP CARDS (ACCORDION STACK) -->
      <div class="ob-s6-cards-stack" id="ob-s6-cards-container">

        <!-- CARD 01 -->
        <div class="ob-s6-step-card ob-s6-step-01 is-active" data-step="1" tabindex="0" role="button" aria-expanded="true" aria-controls="ob-s6-drawer-1">
          <div class="ob-s6-card-header">
            <div class="ob-s6-card-left">
              <div class="ob-s6-card-num-badge">01</div>
              <div class="ob-s6-card-icon-box">
                <!-- Strategy / Target Icon -->
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <circle cx="12" cy="12" r="10"></circle>
                  <circle cx="12" cy="12" r="6"></circle>
                  <circle cx="12" cy="12" r="2"></circle>
                </svg>
              </div>
              <div class="ob-s6-card-text">
                <h3 class="ob-s6-card-title">Share Your India Goals</h3>
                <p class="ob-s6-card-desc">Tell us your planned activity, ownership, team size, location preferences and target launch.</p>
              </div>
            </div>
            <div class="ob-s6-card-toggle-btn" aria-label="Toggle step details">
              <span class="ob-s6-toggle-icon"></span>
            </div>
          </div>
          <div class="ob-s6-card-drawer" id="ob-s6-drawer-1">
            <div class="ob-s6-drawer-inner">
              <div class="ob-s6-drawer-content">
                <span class="ob-s6-drawer-pill">
                  <span class="ob-s6-drawer-pill-dot" style="background: #f59e0b;"></span>
                  Focus: Scope, Activity & Structure Intent
                </span>
                <span class="ob-s6-drawer-pill">
                  <span class="ob-s6-drawer-pill-dot" style="background: #10b981;"></span>
                  Deliverable: Initial Entity Fit Assessment
                </span>
                <span class="ob-s6-drawer-pill">
                  <span class="ob-s6-drawer-pill-dot" style="background: #0ea5e9;"></span>
                  Timeline: Day 1–3 Alignment
                </span>
              </div>
            </div>
          </div>
        </div>

        <!-- CARD 02 -->
        <div class="ob-s6-step-card ob-s6-step-02" data-step="2" tabindex="0" role="button" aria-expanded="false" aria-controls="ob-s6-drawer-2">
          <div class="ob-s6-card-header">
            <div class="ob-s6-card-left">
              <div class="ob-s6-card-num-badge">02</div>
              <div class="ob-s6-card-icon-box">
                <!-- Roadmap / Document Icon -->
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                  <polyline points="14 2 14 8 20 8"></polyline>
                  <line x1="16" y1="13" x2="8" y2="13"></line>
                  <line x1="16" y1="17" x2="8" y2="17"></line>
                  <polyline points="10 9 9 9 8 9"></polyline>
                </svg>
              </div>
              <div class="ob-s6-card-text">
                <h3 class="ob-s6-card-title">Receive Your Setup Roadmap</h3>
                <p class="ob-s6-card-desc">We identify the structures to evaluate, required workstreams, documents, risks and indicative sequence.</p>
              </div>
            </div>
            <div class="ob-s6-card-toggle-btn" aria-label="Toggle step details">
              <span class="ob-s6-toggle-icon"></span>
            </div>
          </div>
          <div class="ob-s6-card-drawer" id="ob-s6-drawer-2">
            <div class="ob-s6-drawer-inner">
              <div class="ob-s6-drawer-content">
                <span class="ob-s6-drawer-pill">
                  <span class="ob-s6-drawer-pill-dot" style="background: #0284c7;"></span>
                  Focus: Sequence, Clear Dependencies & Budgets
                </span>
                <span class="ob-s6-drawer-pill">
                  <span class="ob-s6-drawer-pill-dot" style="background: #10b981;"></span>
                  Deliverable: Bespoke Market Entry Blueprint
                </span>
                <span class="ob-s6-drawer-pill">
                  <span class="ob-s6-drawer-pill-dot" style="background: #8b5cf6;"></span>
                  Governance: Risk & Regulatory Mapping
                </span>
              </div>
            </div>
          </div>
        </div>

        <!-- CARD 03 -->
        <div class="ob-s6-step-card ob-s6-step-03" data-step="3" tabindex="0" role="button" aria-expanded="false" aria-controls="ob-s6-drawer-3">
          <div class="ob-s6-card-header">
            <div class="ob-s6-card-left">
              <div class="ob-s6-card-num-badge">03</div>
              <div class="ob-s6-card-icon-box">
                <!-- Legal / Shield Icon -->
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                  <polyline points="9 12 11 14 15 10"></polyline>
                </svg>
              </div>
              <div class="ob-s6-card-text">
                <h3 class="ob-s6-card-title">Establish Legal Foundation</h3>
                <p class="ob-s6-card-desc">Coordinate incorporation, registrations, regulatory requirements and banking documentation.</p>
              </div>
            </div>
            <div class="ob-s6-card-toggle-btn" aria-label="Toggle step details">
              <span class="ob-s6-toggle-icon"></span>
            </div>
          </div>
          <div class="ob-s6-card-drawer" id="ob-s6-drawer-3">
            <div class="ob-s6-drawer-inner">
              <div class="ob-s6-drawer-content">
                <span class="ob-s6-drawer-pill">
                  <span class="ob-s6-drawer-pill-dot" style="background: #059669;"></span>
                  Focus: MCA Filings, PAN/TAN, GST & RBI Compliance
                </span>
                <span class="ob-s6-drawer-pill">
                  <span class="ob-s6-drawer-pill-dot" style="background: #0284c7;"></span>
                  Deliverable: Incorporated Entity & Active Bank Accounts
                </span>
                <span class="ob-s6-drawer-pill">
                  <span class="ob-s6-drawer-pill-dot" style="background: #f59e0b;"></span>
                  Security: Full Statutory Readiness
                </span>
              </div>
            </div>
          </div>
        </div>

        <!-- CARD 04 -->
        <div class="ob-s6-step-card ob-s6-step-04" data-step="4" tabindex="0" role="button" aria-expanded="false" aria-controls="ob-s6-drawer-4">
          <div class="ob-s6-card-header">
            <div class="ob-s6-card-left">
              <div class="ob-s6-card-num-badge">04</div>
              <div class="ob-s6-card-icon-box">
                <!-- Operations / Gear Platform Icon -->
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <circle cx="12" cy="12" r="3"></circle>
                  <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path>
                </svg>
              </div>
              <div class="ob-s6-card-text">
                <h3 class="ob-s6-card-title">Build Operating Platform</h3>
                <p class="ob-s6-card-desc">Prepare people, payroll, finance, workspace, technology, vendors and internal processes.</p>
              </div>
            </div>
            <div class="ob-s6-card-toggle-btn" aria-label="Toggle step details">
              <span class="ob-s6-toggle-icon"></span>
            </div>
          </div>
          <div class="ob-s6-card-drawer" id="ob-s6-drawer-4">
            <div class="ob-s6-drawer-inner">
              <div class="ob-s6-drawer-content">
                <span class="ob-s6-drawer-pill">
                  <span class="ob-s6-drawer-pill-dot" style="background: #7c3aed;"></span>
                  Focus: Team Hiring, Payroll & Workspace Setup
                </span>
                <span class="ob-s6-drawer-pill">
                  <span class="ob-s6-drawer-pill-dot" style="background: #0ea5e9;"></span>
                  Deliverable: Active Operational Infrastructure
                </span>
                <span class="ob-s6-drawer-pill">
                  <span class="ob-s6-drawer-pill-dot" style="background: #10b981;"></span>
                  Integration: Local Vendor & Banking Workflows
                </span>
              </div>
            </div>
          </div>
        </div>

        <!-- CARD 05 -->
        <div class="ob-s6-step-card ob-s6-step-05" data-step="5" tabindex="0" role="button" aria-expanded="false" aria-controls="ob-s6-drawer-5">
          <div class="ob-s6-card-header">
            <div class="ob-s6-card-left">
              <div class="ob-s6-card-num-badge">05</div>
              <div class="ob-s6-card-icon-box">
                <!-- Launch Rocket Icon -->
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.13-.09-2.91a2.18 2.18 0 0 0-2.91-.09z"></path>
                  <path d="M12 15l-3-3a22 22 0 0 1 2-3.95A12.88 12.88 0 0 1 22 2c0 2.72-.78 7.5-6 11a22.35 22.35 0 0 1-4 2z"></path>
                  <path d="M9 12H4s.55-3.03 2-4.5c1.62-1.63 5-2.5 5-2.5"></path>
                  <path d="M15 12v5s3.03-.55 4.5-2c1.63-1.62 2.5-5 2.5-5"></path>
                </svg>
              </div>
              <div class="ob-s6-card-text">
                <h3 class="ob-s6-card-title">Launch and Grow</h3>
                <p class="ob-s6-card-desc">Begin operations with a defined handover and continue with post-launch support where required.</p>
              </div>
            </div>
            <div class="ob-s6-card-toggle-btn" aria-label="Toggle step details">
              <span class="ob-s6-toggle-icon"></span>
            </div>
          </div>
          <div class="ob-s6-card-drawer" id="ob-s6-drawer-5">
            <div class="ob-s6-drawer-inner">
              <div class="ob-s6-drawer-content">
                <span class="ob-s6-drawer-pill">
                  <span class="ob-s6-drawer-pill-dot" style="background: #ea580c;"></span>
                  Focus: Day-1 Go-Live, Smooth Handover & Scaling
                </span>
                <span class="ob-s6-drawer-pill">
                  <span class="ob-s6-drawer-pill-dot" style="background: #10b981;"></span>
                  Deliverable: Live Market Presence & Post-Launch SLAs
                </span>
                <span class="ob-s6-drawer-pill">
                  <span class="ob-s6-drawer-pill-dot" style="background: #0284c7;"></span>
                  Growth: Ongoing Corporate Advisory Support
                </span>
              </div>
            </div>
          </div>
        </div>

      </div>

      <!-- RIGHT SIDE: MASTER "INDIA LAUNCH JOURNEY" ANIMATED DASHBOARD -->
      <div class="ob-s6-visual-wrapper" id="ob-s6-roadmap-dashboard">

        <!-- Top Live Status Bar -->
        <div class="ob-s6-visual-topbar">
          <div class="ob-s6-status-pill">
            <span class="ob-s6-pulse-dot"></span>
            <span>INDIA LAUNCH JOURNEY</span>
          </div>
          <div class="ob-s6-stage-counter">
            ACTIVE: <span class="ob-s6-stage-num" id="ob-s6-active-counter-text">STEP 01 OF 05</span>
          </div>
        </div>

        <!-- Visual Canvas Stage -->
        <div class="ob-s6-canvas-area" id="ob-s6-canvas-stage">

          <!-- SVG Journey Flowing Path & Particle -->
          <svg class="ob-s6-svg-stage" viewBox="0 0 540 400" fill="none" preserveAspectRatio="xMidYMid meet">
            <defs>
              <linearGradient id="ob-s6-journey-grad" x1="0%" y1="0%" x2="100%" y2="100%">
                <stop offset="0%" stop-color="#F59E0B" />
                <stop offset="25%" stop-color="#0EA5E9" />
                <stop offset="50%" stop-color="#10B981" />
                <stop offset="75%" stop-color="#8B5CF6" />
                <stop offset="100%" stop-color="#F97316" />
              </linearGradient>
            </defs>

            <!-- Decorative Outlined Background Circle Geometry (Editorial Aesthetic) -->
            <g opacity="0.38" stroke="#CBD5E1" stroke-width="1.2" stroke-dasharray="4 4" fill="none">
              <circle cx="270" cy="200" r="175" />
              <circle cx="270" cy="200" r="120" />
              <circle cx="270" cy="200" r="65" />
              <line x1="50" y1="200" x2="490" y2="200" opacity="0.25" />
              <line x1="270" y1="25" x2="270" y2="375" opacity="0.25" />
            </g>

            <!-- Static Underlay Base Path -->
            <path id="ob-s6-path-base" class="ob-s6-base-path" d="M 108 56 C 260 20, 420 60, 421 112 C 422 165, 120 150, 118 200 C 116 250, 420 230, 421 272 C 422 315, 260 350, 259 344" />

            <!-- Animated Multi-Color Gradient Flowing Path -->
            <path id="ob-s6-path-grad" class="ob-s6-gradient-path" d="M 108 56 C 260 20, 420 60, 421 112 C 422 165, 120 150, 118 200 C 116 250, 420 230, 421 272 C 422 315, 260 350, 259 344" />

            <!-- Continuous Flowing Glowing Particle (01 -> 02 -> 03 -> 04 -> 05 -> Loop) -->
            <circle class="ob-s6-journey-particle" r="6.5" fill="#F59E0B">
              <animateMotion dur="10s" repeatCount="indefinite" rotate="auto">
                <mpath href="#ob-s6-path-base"/>
              </animateMotion>
            </circle>
            <!-- Particle Halo -->
            <circle class="ob-s6-journey-particle" r="16" fill="#F59E0B" opacity="0.28">
              <animateMotion dur="10s" repeatCount="indefinite" rotate="auto">
                <mpath href="#ob-s6-path-base"/>
              </animateMotion>
            </circle>
          </svg>

          <!-- Focal Highlight Circle Ring -->
          <div class="ob-s6-focal-circle" id="ob-s6-focal-ring" style="top: 14%; left: 20%;"></div>

          <!-- FIVE FLOATING INTERACTIVE NODES (01 - 05) -->
          <!-- Node 01 -->
          <div class="ob-s6-node ob-s6-node-1 is-active" data-step="1" tabindex="0" role="button" aria-label="Step 1: Strategy & Goals">
            <svg class="ob-s6-node-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <circle cx="12" cy="12" r="10"></circle>
              <circle cx="12" cy="12" r="6"></circle>
              <circle cx="12" cy="12" r="2"></circle>
            </svg>
            <span class="ob-s6-node-num">01</span>
            <span class="ob-s6-node-label">Strategy</span>
          </div>

          <!-- Node 02 -->
          <div class="ob-s6-node ob-s6-node-2" data-step="2" tabindex="0" role="button" aria-label="Step 2: Setup Roadmap">
            <svg class="ob-s6-node-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
              <polyline points="14 2 14 8 20 8"></polyline>
              <line x1="16" y1="13" x2="8" y2="13"></line>
              <line x1="16" y1="17" x2="8" y2="17"></line>
            </svg>
            <span class="ob-s6-node-num">02</span>
            <span class="ob-s6-node-label">Roadmap</span>
          </div>

          <!-- Node 03 -->
          <div class="ob-s6-node ob-s6-node-3" data-step="3" tabindex="0" role="button" aria-label="Step 3: Legal & Regulatory">
            <svg class="ob-s6-node-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
              <polyline points="9 12 11 14 15 10"></polyline>
            </svg>
            <span class="ob-s6-node-num">03</span>
            <span class="ob-s6-node-label">Legal & Bank</span>
          </div>

          <!-- Node 04 -->
          <div class="ob-s6-node ob-s6-node-4" data-step="4" tabindex="0" role="button" aria-label="Step 4: Operating Platform">
            <svg class="ob-s6-node-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <circle cx="12" cy="12" r="3"></circle>
              <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path>
            </svg>
            <span class="ob-s6-node-num">04</span>
            <span class="ob-s6-node-label">Platform</span>
          </div>

          <!-- Node 05 -->
          <div class="ob-s6-node ob-s6-node-5" data-step="5" tabindex="0" role="button" aria-label="Step 5: Launch and Grow">
            <svg class="ob-s6-node-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.13-.09-2.91a2.18 2.18 0 0 0-2.91-.09z"></path>
              <path d="M12 15l-3-3a22 22 0 0 1 2-3.95A12.88 12.88 0 0 1 22 2c0 2.72-.78 7.5-6 11a22.35 22.35 0 0 1-4 2z"></path>
              <path d="M9 12H4s.55-3.03 2-4.5c1.62-1.63 5-2.5 5-2.5"></path>
              <path d="M15 12v5s3.03-.55 4.5-2c1.63-1.62 2.5-5 2.5-5"></path>
            </svg>
            <span class="ob-s6-node-num">05</span>
            <span class="ob-s6-node-label">Launch Live</span>
          </div>

        </div>

        <!-- Bottom Stage Live Deliverable Summary Bar -->
        <div class="ob-s6-visual-summary" id="ob-s6-stage-summary">
          <div class="ob-s6-summary-left">
            <div class="ob-s6-summary-step-tag" id="ob-s6-summary-tag" style="color: #d97706;">PHASE 01 • INITIAL ALIGNMENT</div>
            <h4 class="ob-s6-summary-title" id="ob-s6-summary-title">Share Your India Goals</h4>
          </div>
          <div class="ob-s6-summary-badge" id="ob-s6-summary-badge">
            <span style="color: #10b981;">●</span>
            <span id="ob-s6-summary-badge-text">Target: Clear Scope</span>
          </div>
        </div>

      </div>

    </div>

    <!-- 3. SECTION CTA & DISCLAIMER ROW (RESPONSIVE STABLE LAYOUT) -->
    <div class="ob-s6-cta-wrapper">
      <a href="#roadmap-form-section" class="btn-primary ob-s6-cta-btn">
        <span>Start with an India Setup Consultation</span>
        <span class="ob-s6-cta-arrow">&rarr;</span>
      </a>

      <!-- RESPONSIVE BOTTOM ROW: DISCLAIMER NOTE -->
      <div class="ob-s6-bottom-disclaimer-row">
        <div class="ob-s6-cta-note">
          Note: Authority, bank, document and licence timelines vary based on eligibility and jurisdiction.
        </div>
      </div>
    </div>

  </div>

  <!-- SCOPED CLIENT-SIDE INTERACTION JAVASCRIPT -->
  <script id="ob-s6-scoped-master-js">
  (function() {
    'use strict';

    function initSectionSixLaunchJourney() {
      var sec = document.getElementById('ob-section-launch-steps');
      if (!sec) return;

      var cards = sec.querySelectorAll('.ob-s6-step-card');
      var nodes = sec.querySelectorAll('.ob-s6-node');
      var focalRing = sec.getElementById ? sec.getElementById('ob-s6-focal-ring') : sec.querySelector('#ob-s6-focal-ring');
      var stageCounter = sec.querySelector('#ob-s6-active-counter-text');
      var summaryTag = sec.querySelector('#ob-s6-summary-tag');
      var summaryTitle = sec.querySelector('#ob-s6-summary-title');
      var summaryBadgeText = sec.querySelector('#ob-s6-summary-badge-text');

      var stepData = {
        '1': {
          tag: 'PHASE 01 • INITIAL ALIGNMENT',
          title: 'Share Your India Goals',
          badge: 'Target: Clear Scope',
          color: '#d97706',
          ringTop: '14%',
          ringLeft: '20%'
        },
        '2': {
          tag: 'PHASE 02 • ARCHITECTURE & PLAN',
          title: 'Receive Your Setup Roadmap',
          badge: 'Deliverable: Blueprint',
          color: '#0284c7',
          ringTop: '28%',
          ringLeft: '78%'
        },
        '3': {
          tag: 'PHASE 03 • STATUTORY FORMATION',
          title: 'Establish Legal Foundation',
          badge: 'Status: Legal & Bank Active',
          color: '#059669',
          ringTop: '50%',
          ringLeft: '22%'
        },
        '4': {
          tag: 'PHASE 04 • INFRASTRUCTURE & TALENT',
          title: 'Build Operating Platform',
          badge: 'Platform: Ready to Run',
          color: '#7c3aed',
          ringTop: '68%',
          ringLeft: '78%'
        },
        '5': {
          tag: 'PHASE 05 • EXECUTION & EXPANSION',
          title: 'Launch and Grow',
          badge: 'Launch: Live Market Operations',
          color: '#ea580c',
          ringTop: '86%',
          ringLeft: '48%'
        }
      };

      function setActiveStep(stepNum) {
        var s = String(stepNum);
        if (!stepData[s]) return;

        // 1. Update Left Cards
        cards.forEach(function(card) {
          var cStep = card.getAttribute('data-step');
          if (cStep === s) {
            card.classList.add('is-active');
            card.setAttribute('aria-expanded', 'true');
          } else {
            card.classList.remove('is-active');
            card.setAttribute('aria-expanded', 'false');
          }
        });

        // 2. Update Right Visual Nodes
        nodes.forEach(function(node) {
          var nStep = node.getAttribute('data-step');
          if (nStep === s) {
            node.classList.add('is-active');
          } else {
            node.classList.remove('is-active');
          }
        });

        // 3. Update Focal Ring Position
        if (focalRing) {
          focalRing.style.top = stepData[s].ringTop;
          focalRing.style.left = stepData[s].ringLeft;
          focalRing.style.borderColor = stepData[s].color;
        }

        // 4. Update Header & Summary Information
        if (stageCounter) {
          stageCounter.textContent = 'STEP 0' + s + ' OF 05';
        }
        if (summaryTag) {
          summaryTag.textContent = stepData[s].tag;
          summaryTag.style.color = stepData[s].color;
        }
        if (summaryTitle) {
          summaryTitle.textContent = stepData[s].title;
        }
        if (summaryBadgeText) {
          summaryBadgeText.textContent = stepData[s].badge;
        }
      }

      // Bind Card Clicks & Keyboard Enter/Space
      cards.forEach(function(card) {
        card.addEventListener('click', function(e) {
          var step = this.getAttribute('data-step');
          setActiveStep(step);
        });

        card.addEventListener('keydown', function(e) {
          if (e.key === 'Enter' || e.key === ' ') {
            e.preventDefault();
            var step = this.getAttribute('data-step');
            setActiveStep(step);
          }
        });
      });

      // Bind Node Clicks on Right Visual
      nodes.forEach(function(node) {
        node.addEventListener('click', function(e) {
          var step = this.getAttribute('data-step');
          setActiveStep(step);
        });

        node.addEventListener('keydown', function(e) {
          if (e.key === 'Enter' || e.key === ' ') {
            e.preventDefault();
            var step = this.getAttribute('data-step');
            setActiveStep(step);
          }
        });
      });

      // 5. Desktop Subtle Mouse Parallax (Technical Map Objects)
      if (window.innerWidth > 1024) {
        sec.addEventListener('mousemove', function(e) {
          var rect = sec.getBoundingClientRect();
          var x = (e.clientX - rect.left) / rect.width - 0.5;
          var y = (e.clientY - rect.top) / rect.height - 0.5;

          var navObjs = sec.querySelectorAll('.ob-s6-nav-obj');
          navObjs.forEach(function(obj, idx) {
            var factor = (idx % 3 + 1) * 6;
            obj.style.transform = 'translate(' + (x * factor) + 'px, ' + (y * factor) + 'px)';
          });

          var radar = sec.querySelector('.ob-s6-destination-radar');
          if (radar) {
            radar.style.transform = 'translate(' + (x * 4) + 'px, ' + (y * 4) + 'px)';
          }
        });
      }
    }

    if (document.readyState === 'loading') {
      document.addEventListener('DOMContentLoaded', initSectionSixLaunchJourney);
    } else {
      initSectionSixLaunchJourney();
    }
    window.addEventListener('load', initSectionSixLaunchJourney);
  })();
  </script>
</section>

<!-- ==========================================================================
     SECTION 7: ONE INDIA PARTNER. EVERY CONNECTED WORKSTREAM. (MULTI-COLOR FLUID WAVE REDESIGN)
     ========================================================================== -->

<section class="section-padding ob-s7-section" id="ob-section-why-partner">

  <!-- SCOPED MASTER CSS FOR SECTION 7 -->
  <style id="ob-s7-scoped-master-css">
    /* ==========================================================================
       SECTION 07 MASTER SCOPED CSS (PREMIUM MULTI-COLOR FLUID WAVE ECOSYSTEM)
       ========================================================================== */
    .ob-s7-section {
      background: #fafaf9 !important;
      position: relative !important;
      overflow: hidden !important;
      padding: 110px 0 120px 0 !important;
      border-top: 1px solid #f1f5f9 !important;
      border-bottom: 1px solid #f1f5f9 !important;
      box-sizing: border-box !important;
      font-family: 'Outfit', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif !important;
    }

    /* --------------------------------------------------------------------------
       1. LARGE VIBRANT MULTI-COLOR FLUID WAVE / RIBBON BANNER (INSPIRED BY IMAGE 2)
       -------------------------------------------------------------------------- */
    .ob-s7-fluid-wave-bg {
      position: absolute;
      top: 50%;
      left: 50%;
      width: 140%;
      height: 75%;
      transform: translate(-50%, -50%) rotate(-3deg);
      pointer-events: none;
      z-index: 1;
      opacity: 0.85;
      border-radius: 40px;
      background: linear-gradient(
        105deg,
        rgba(186, 230, 253, 0.70) 0%,   /* Sky Blue */
        rgba(192, 132, 252, 0.65) 28%,  /* Soft Lavender */
        rgba(244, 114, 182, 0.60) 52%,  /* Soft Pink */
        rgba(254, 215, 170, 0.65) 75%,  /* Warm Peach */
        rgba(187, 247, 208, 0.70) 100%  /* Mint Green */
      );
      filter: blur(55px);
      animation: obS7FluidWaveDrift 24s ease-in-out infinite alternate !important;
      will-change: transform;
    }

    @keyframes obS7FluidWaveDrift {
      0% {
        transform: translate(-50%, -50%) rotate(-3deg) scale(1);
      }
      50% {
        transform: translate(-48%, -52%) rotate(2deg) scale(1.05);
      }
      100% {
        transform: translate(-52%, -48%) rotate(-2deg) scale(0.98);
      }
    }

    /* Secondary Organic Floating Mesh Halos */
    .ob-s7-mesh-halo {
      position: absolute;
      border-radius: 50%;
      filter: blur(80px);
      pointer-events: none;
      z-index: 1;
      opacity: 0.45;
      will-change: transform;
    }
    .ob-s7-halo-cyan {
      width: 440px;
      height: 440px;
      background: radial-gradient(circle, #7DD3FC 0%, rgba(125, 211, 252, 0) 70%);
      top: -30px;
      left: 5%;
      animation: obS7HaloFloatA 20s ease-in-out infinite alternate !important;
    }
    .ob-s7-halo-purple {
      width: 480px;
      height: 480px;
      background: radial-gradient(circle, #C084FC 0%, rgba(192, 132, 252, 0) 70%);
      top: 15%;
      right: 25%;
      animation: obS7HaloFloatB 26s ease-in-out infinite alternate !important;
    }
    .ob-s7-halo-mint {
      width: 460px;
      height: 460px;
      background: radial-gradient(circle, #86EFAC 0%, rgba(134, 239, 172, 0) 70%);
      bottom: -40px;
      right: 4%;
      animation: obS7HaloFloatC 22s ease-in-out infinite alternate !important;
    }

    @keyframes obS7HaloFloatA {
      0% { transform: translate(0, 0) scale(1); }
      100% { transform: translate(30px, -20px) scale(1.10); }
    }
    @keyframes obS7HaloFloatB {
      0% { transform: translate(0, 0) scale(0.95); }
      100% { transform: translate(-25px, 30px) scale(1.08); }
    }
    @keyframes obS7HaloFloatC {
      0% { transform: translate(0, 0) scale(1); }
      100% { transform: translate(20px, 25px) scale(1.05); }
    }

    /* --------------------------------------------------------------------------
       2. AROUND-THE-CARD CONNECTING SVG MESH
       -------------------------------------------------------------------------- */
    .ob-s7-connectors-svg {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      pointer-events: none;
      z-index: 2;
    }
    .ob-s7-connector-line {
      stroke: rgba(148, 163, 184, 0.35);
      stroke-width: 1.8;
      stroke-linecap: round;
      fill: none;
      stroke-dasharray: 6 6;
      animation: obS7ConnectorDash 24s linear infinite !important;
    }
    @keyframes obS7ConnectorDash {
      from { stroke-dashoffset: 160; }
      to { stroke-dashoffset: 0; }
    }

    /* --------------------------------------------------------------------------
       3. FLOATING VECTOR BUSINESS & GROWTH OBJECTS
       -------------------------------------------------------------------------- */
    .ob-s7-decor-obj {
      position: absolute;
      pointer-events: none;
      z-index: 3;
      opacity: 0.75;
      will-change: transform;
      transition: transform 0.25s cubic-bezier(0.16, 1, 0.3, 1);
    }
    .ob-s7-decor-1 { top: 12%; left: 4%; animation: obS7FloatSpin 16s ease-in-out infinite alternate !important; }
    .ob-s7-decor-2 { top: 22%; left: 9%; animation: obS7FloatV 10s ease-in-out infinite alternate !important; }
    .ob-s7-decor-3 { top: 8%; right: 7%; animation: obS7FloatH 14s ease-in-out infinite alternate !important; }
    .ob-s7-decor-4 { top: 46%; left: 2%; animation: obS7FloatV 12s ease-in-out infinite alternate !important; }
    .ob-s7-decor-5 { top: 58%; right: 3%; animation: obS7FloatSpin 20s linear infinite !important; }
    .ob-s7-decor-6 { bottom: 12%; left: 5%; animation: obS7FloatPulse 14s ease-in-out infinite alternate !important; }
    .ob-s7-decor-7 { bottom: 8%; right: 6%; animation: obS7FloatH 11s ease-in-out infinite alternate !important; }

    @keyframes obS7FloatV {
      0% { transform: translateY(0); }
      100% { transform: translateY(-16px); }
    }
    @keyframes obS7FloatH {
      0% { transform: translateX(0); }
      100% { transform: translateX(18px); }
    }
    @keyframes obS7FloatSpin {
      0% { transform: rotate(0deg); }
      100% { transform: rotate(360deg); }
    }
    @keyframes obS7FloatPulse {
      0% { transform: scale(1); opacity: 0.55; }
      100% { transform: scale(1.15); opacity: 0.90; }
    }

    /* --------------------------------------------------------------------------
       4. SECTION CONTAINER & HEADER
       -------------------------------------------------------------------------- */
    .ob-s7-container {
      max-width: 1280px;
      margin: 0 auto;
      padding: 0 24px;
      position: relative;
      z-index: 10;
      box-sizing: border-box;
    }

    .ob-s7-header {
      text-align: center;
      margin-bottom: 36px;
      position: relative;
    }
    .ob-s7-title {
      font-size: clamp(36px, 4.2vw, 54px) !important;
      font-weight: 800 !important;
      color: #0f172a !important;
      line-height: 1.18 !important;
      letter-spacing: -0.03em !important;
      margin: 0 auto !important;
      max-width: 920px !important;
      text-align: center !important;
    }

    /* --------------------------------------------------------------------------
       5. PROOF STRIP PILL BAR
       -------------------------------------------------------------------------- */
    .ob-s7-proof-bar {
      display: flex;
      align-items: center;
      justify-content: center;
      flex-wrap: wrap;
      gap: 16px 24px;
      background: rgba(255, 255, 255, 0.92);
      backdrop-filter: blur(16px);
      -webkit-backdrop-filter: blur(16px);
      border: 1px solid rgba(226, 232, 240, 0.9);
      border-radius: 50px;
      padding: 12px 32px;
      max-width: 980px;
      margin: 0 auto 52px auto;
      box-shadow: 0 6px 20px -4px rgba(15, 23, 42, 0.05), 0 2px 6px rgba(0, 0, 0, 0.02);
      box-sizing: border-box;
    }
    .ob-s7-proof-item {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      font-size: 0.92rem;
      font-weight: 700;
      color: #1e293b;
      white-space: nowrap;
    }
    .ob-s7-proof-icon {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      font-size: 1rem;
    }
    .ob-s7-proof-divider {
      color: #cbd5e1;
      font-weight: 300;
    }

    /* --------------------------------------------------------------------------
       6. 3x2 INTERACTIVE VALUE PROPOSITION CARDS GRID
       -------------------------------------------------------------------------- */
    .ob-s7-cards-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 26px;
      position: relative;
      z-index: 5;
    }

    .ob-s7-card {
      background: rgba(255, 255, 255, 0.94);
      backdrop-filter: blur(20px);
      -webkit-backdrop-filter: blur(20px);
      border: 1.5px solid rgba(226, 232, 240, 0.85);
      border-radius: 24px;
      padding: 34px 30px;
      position: relative;
      overflow: hidden;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      cursor: pointer;
      box-shadow: 0 10px 30px -6px rgba(15, 23, 42, 0.06), 0 2px 8px rgba(0, 0, 0, 0.02);
      transition: transform 0.4s cubic-bezier(0.16, 1, 0.3, 1), 
                  box-shadow 0.4s cubic-bezier(0.16, 1, 0.3, 1), 
                  border-color 0.35s ease, 
                  background-color 0.35s ease;
    }

    /* Top Color Accent Strip */
    .ob-s7-card::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 4px;
      background: var(--card-accent);
      opacity: 0.65;
      transition: opacity 0.35s ease, height 0.35s ease;
    }

    /* Card Icon Area with Living Animation & Click-Reaction */
    .ob-s7-icon-wrap {
      width: 58px;
      height: 58px;
      border-radius: 16px;
      background: var(--card-soft-bg);
      border: 1px solid var(--card-accent-border);
      display: inline-flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 22px;
      position: relative;
      color: var(--card-accent);
      cursor: pointer;
      user-select: none;
      transition: transform 0.35s cubic-bezier(0.16, 1, 0.3, 1), 
                  box-shadow 0.35s ease, 
                  background-color 0.35s ease;
    }
    .ob-s7-icon-wrap svg {
      width: 28px;
      height: 28px;
      transition: transform 0.35s cubic-bezier(0.16, 1, 0.3, 1);
    }

    /* Micro-burst particles on icon click */
    .ob-s7-burst-ring {
      position: absolute;
      top: -8px;
      left: -8px;
      right: -8px;
      bottom: -8px;
      border-radius: 20px;
      border: 2px solid var(--card-accent);
      opacity: 0;
      pointer-events: none;
      transform: scale(0.8);
      transition: transform 0.5s cubic-bezier(0.16, 1, 0.3, 1), opacity 0.5s ease;
    }
    .ob-s7-icon-wrap.is-bursting .ob-s7-burst-ring {
      opacity: 0.8;
      transform: scale(1.35);
    }
    .ob-s7-icon-wrap.is-bursting {
      transform: scale(1.15) rotate(6deg) !important;
      box-shadow: 0 0 20px var(--card-glow);
    }

    /* Card Content */
    .ob-s7-card-title {
      font-size: 1.25rem !important;
      font-weight: 800 !important;
      color: #0f172a !important;
      line-height: 1.3 !important;
      letter-spacing: -0.02em !important;
      margin: 0 0 12px 0 !important;
      transition: color 0.3s ease;
    }
    .ob-s7-card-desc {
      font-size: 0.96rem !important;
      line-height: 1.62 !important;
      color: #64748b !important;
      margin: 0 0 18px 0 !important;
      flex-grow: 1;
    }

    /* Card Bottom Active Status Bar */
    .ob-s7-card-footer {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding-top: 14px;
      border-top: 1px dashed rgba(203, 213, 225, 0.6);
      font-size: 0.80rem;
      font-weight: 700;
      color: #64748b;
      letter-spacing: 0.02em;
    }
    .ob-s7-card-badge {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      color: var(--card-accent);
    }
    .ob-s7-card-arrow {
      color: #94a3b8;
      transition: transform 0.35s cubic-bezier(0.16, 1, 0.3, 1), color 0.35s ease;
    }

    /* --------------------------------------------------------------------------
       INDIVIDUAL CARD COLOR IDENTITIES (CARDS 1 - 6)
       -------------------------------------------------------------------------- */
    /* Card 1: Amber Gold */
    .ob-s7-card-1 {
      --card-accent: #d97706;
      --card-soft-bg: #fffbeb;
      --card-accent-border: #fde68a;
      --card-glow: rgba(245, 158, 11, 0.22);
    }

    /* Card 2: Sky Blue */
    .ob-s7-card-2 {
      --card-accent: #0284c7;
      --card-soft-bg: #f0f9ff;
      --card-accent-border: #bae6fd;
      --card-glow: rgba(14, 165, 233, 0.22);
    }

    /* Card 3: Emerald Mint */
    .ob-s7-card-3 {
      --card-accent: #059669;
      --card-soft-bg: #ecfdf5;
      --card-accent-border: #a7f3d0;
      --card-glow: rgba(16, 185, 129, 0.22);
    }

    /* Card 4: Violet Lavender */
    .ob-s7-card-4 {
      --card-accent: #7c3aed;
      --card-soft-bg: #f5f3ff;
      --card-accent-border: #ddd6fe;
      --card-glow: rgba(139, 92, 246, 0.22);
    }

    /* Card 5: Coral Rose */
    .ob-s7-card-5 {
      --card-accent: #e11d48;
      --card-soft-bg: #fff1f2;
      --card-accent-border: #fecdd3;
      --card-glow: rgba(244, 63, 94, 0.22);
    }

    /* Card 6: Electric Indigo */
    .ob-s7-card-6 {
      --card-accent: #4f46e5;
      --card-soft-bg: #eef2ff;
      --card-accent-border: #c7d2fe;
      --card-glow: rgba(99, 102, 241, 0.22);
    }

    /* --------------------------------------------------------------------------
       CARD HOVER & ACTIVE STATES
       -------------------------------------------------------------------------- */
    @media (hover: hover) {
      .ob-s7-card:hover {
        transform: translateY(-8px);
        border-color: var(--card-accent);
        box-shadow: 0 20px 40px -10px var(--card-glow), 0 4px 12px rgba(0, 0, 0, 0.03);
      }
      .ob-s7-card:hover::before {
        opacity: 1;
        height: 6px;
      }
      .ob-s7-card:hover .ob-s7-icon-wrap {
        transform: translateY(-2px) scale(1.06);
        box-shadow: 0 6px 16px -2px var(--card-glow);
      }
      .ob-s7-card:hover .ob-s7-card-title {
        color: var(--card-accent) !important;
      }
      .ob-s7-card:hover .ob-s7-card-arrow {
        transform: translateX(6px);
        color: var(--card-accent);
      }
    }

    .ob-s7-card.is-active {
      transform: translateY(-4px);
      border-color: var(--card-accent);
      box-shadow: 0 16px 36px -8px var(--card-glow), 0 0 0 1.5px var(--card-accent);
    }
    .ob-s7-card.is-active::before {
      opacity: 1;
      height: 6px;
    }
    .ob-s7-card.is-active .ob-s7-card-title {
      color: var(--card-accent) !important;
    }

    /* --------------------------------------------------------------------------
       LIVING CONTINUOUS ICON ANIMATIONS
       -------------------------------------------------------------------------- */
    /* Icon 1: Orbiting Satellite Coordinator Node */
    .ob-s7-sat-node {
      animation: obS7SatOrbit 8s linear infinite !important;
      transform-origin: 12px 12px;
    }
    @keyframes obS7SatOrbit {
      from { transform: rotate(0deg); }
      to { transform: rotate(360deg); }
    }

    /* Icon 2: Pulsing Strategic Lightbulb Waves */
    .ob-s7-light-ray {
      animation: obS7RayPulse 3s ease-in-out infinite alternate !important;
    }
    @keyframes obS7RayPulse {
      0% { opacity: 0.3; transform: scale(0.9); }
      100% { opacity: 1; transform: scale(1.1); }
    }

    /* Icon 3: Interconnected Network Energy Flow */
    .ob-s7-net-dot {
      animation: obS7NetPulse 2.5s ease-in-out infinite alternate !important;
    }
    @keyframes obS7NetPulse {
      0% { r: 2; opacity: 0.6; }
      100% { r: 3.5; opacity: 1; }
    }

    /* Icon 4: Scanning Laser Beam */
    .ob-s7-scan-beam {
      animation: obS7ScanMove 3.5s ease-in-out infinite alternate !important;
    }
    @keyframes obS7ScanMove {
      0% { transform: translateY(0); opacity: 0.3; }
      100% { transform: translateY(8px); opacity: 1; }
    }

    /* Icon 5: Security Shield Radar Ring */
    .ob-s7-shield-ring {
      animation: obS7ShieldPulse 3s ease-in-out infinite !important;
    }
    @keyframes obS7ShieldPulse {
      0% { transform: scale(0.8); opacity: 0.8; }
      100% { transform: scale(1.3); opacity: 0; }
    }

    /* Icon 6: Rocket Floating Drift */
    .ob-s7-rocket-icon {
      animation: obS7RocketSway 4s ease-in-out infinite alternate !important;
    }
    @keyframes obS7RocketSway {
      0% { transform: translateY(0) rotate(0deg); }
      100% { transform: translateY(-4px) rotate(4deg); }
    }

    /* --------------------------------------------------------------------------
       RESPONSIVE DESIGN (TABLET & MOBILE)
       -------------------------------------------------------------------------- */
    @media (max-width: 1024px) {
      .ob-s7-section {
        padding: 80px 0 90px 0 !important;
      }
      .ob-s7-cards-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
      }
      .ob-s7-proof-bar {
        padding: 10px 20px;
        gap: 12px 18px;
      }
    }

    @media (max-width: 640px) {
      .ob-s7-section {
        padding: 60px 0 70px 0 !important;
      }
      .ob-s7-container {
        padding: 0 16px;
      }
      .ob-s7-cards-grid {
        grid-template-columns: 1fr;
        gap: 16px;
      }
      .ob-s7-card {
        padding: 24px 20px;
        border-radius: 20px;
      }
      .ob-s7-proof-bar {
        flex-direction: column;
        align-items: flex-start;
        border-radius: 20px;
        padding: 16px 20px;
        gap: 10px;
      }
      .ob-s7-proof-divider {
        display: none;
      }
      .ob-s7-fluid-wave-bg {
        width: 180%;
        height: 60%;
      }
      .ob-s7-decor-obj {
        display: none;
      }
    }

    /* Reduced motion accessibility */
    @media (prefers-reduced-motion: reduce) {
      .ob-s7-fluid-wave-bg,
      .ob-s7-mesh-halo,
      .ob-s7-decor-obj,
      .ob-s7-connector-line,
      .ob-s7-sat-node,
      .ob-s7-light-ray,
      .ob-s7-net-dot,
      .ob-s7-scan-beam,
      .ob-s7-shield-ring,
      .ob-s7-rocket-icon {
        animation: none !important;
        transition: none !important;
      }
    }
  </style>

  <!-- LAYER 1: LARGE VIBRANT MULTI-COLOR FLUID WAVE BANNER -->
  <div class="ob-s7-fluid-wave-bg"></div>

  <!-- SECONDARY ORGANIC COLOR HALOS -->
  <div class="ob-s7-mesh-halo ob-s7-halo-cyan"></div>
  <div class="ob-s7-mesh-halo ob-s7-halo-purple"></div>
  <div class="ob-s7-mesh-halo ob-s7-halo-mint"></div>

  <!-- LAYER 2: AROUND-THE-CARD CONNECTING SVG MESH -->
  <svg class="ob-s7-connectors-svg" viewBox="0 0 1440 800" fill="none" preserveAspectRatio="none">
    <path class="ob-s7-connector-line" d="M 240 320 C 440 280, 520 340, 720 310 C 920 280, 1020 330, 1200 290" />
    <path class="ob-s7-connector-line" d="M 240 580 C 440 620, 520 560, 720 590 C 920 620, 1020 570, 1200 610" />
    <path class="ob-s7-connector-line" d="M 360 420 L 360 480" />
    <path class="ob-s7-connector-line" d="M 720 420 L 720 480" />
    <path class="ob-s7-connector-line" d="M 1080 420 L 1080 480" />
  </svg>

  <!-- LAYER 3: FLOATING BUSINESS & GROWTH VECTOR OBJECTS -->
  <!-- 1. Sparkle Star -->
  <svg class="ob-s7-decor-obj ob-s7-decor-1" width="24" height="24" viewBox="0 0 24 24" fill="none">
    <path d="M12 0L14.5 9.5L24 12L14.5 14.5L12 24L9.5 14.5L0 12L9.5 9.5L12 0Z" fill="#F59E0B" opacity="0.65"/>
  </svg>
  <!-- 2. Cyan Orbit Ring -->
  <svg class="ob-s7-decor-obj ob-s7-decor-2" width="28" height="28" viewBox="0 0 32 32" fill="none">
    <circle cx="16" cy="16" r="13" stroke="#0EA5E9" stroke-width="2" stroke-dasharray="4 4"/>
  </svg>
  
  <svg class="ob-s7-decor-obj ob-s7-decor-3" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#8B5CF6" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
    <line x1="7" y1="17" x2="17" y2="7"></line>
    <polyline points="7 7 17 7 17 17"></polyline>
  </svg>
  <!-- 4. Emerald Check Hexagon -->
  <svg class="ob-s7-decor-obj ob-s7-decor-4" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2" stroke-linecap="round">
    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
    <polyline points="9 12 11 14 15 10"></polyline>
  </svg>
  <!-- 5. Coral Cross -->
  <svg class="ob-s7-decor-obj ob-s7-decor-5" width="18" height="18" viewBox="0 0 20 20" fill="none" stroke="#F43F5E" stroke-width="2.5" stroke-linecap="round">
    <line x1="10" y1="2" x2="10" y2="18"></line>
    <line x1="2" y1="10" x2="18" y2="10"></line>
  </svg>
  <!-- 6. Electric Indigo Diamond -->
  <svg class="ob-s7-decor-obj ob-s7-decor-6" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#6366F1" stroke-width="2.2">
    <rect x="12" y="2" width="14" height="14" transform="rotate(45 12 2)"/>
  </svg>
  
  <svg class="ob-s7-decor-obj ob-s7-decor-7" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#059669" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
    <line x1="12" y1="19" x2="12" y2="5"></line>
    <polyline points="5 12 12 5 19 12"></polyline>
  </svg>

  <!-- LAYER 4: MAIN CONTENT (Z-INDEX 10) -->
  <div class="ob-s7-container">

    <!-- 1. SECTION HEADING (NO SECTION 7 BADGE, CLEAN & SIZED) -->
    <div class="ob-s7-header">
      <h2 class="ob-s7-title">One India Partner. Every Connected Workstream.</h2>
    </div>

    <!-- 2. PROOF STRIP PILL BAR -->
    <div class="ob-s7-proof-bar">
      <div class="ob-s7-proof-item">
        <span class="ob-s7-proof-icon" style="color: #10b981;">✓</span>
        <span>Verified Client Outcomes</span>
      </div>
      <div class="ob-s7-proof-divider">|</div>
      <div class="ob-s7-proof-item">
        <span class="ob-s7-proof-icon" style="color: #0ea5e9;">🌐</span>
        <span>25+ Countries Served</span>
      </div>
      <div class="ob-s7-proof-divider">|</div>
      <div class="ob-s7-proof-item">
        <span class="ob-s7-proof-icon" style="color: #f43f5e;">📍</span>
        <span>All India Major Cities Covered</span>
      </div>
      <div class="ob-s7-proof-divider">|</div>
      <div class="ob-s7-proof-item">
        <span class="ob-s7-proof-icon" style="color: #f59e0b;">🤝</span>
        <span>Named Leadership & Specialist Partners</span>
      </div>
    </div>

    <!-- 3. 6 VALUE PROPOSITION INTERACTIVE CARDS (3x2 GRID) -->
    <div class="ob-s7-cards-grid" id="ob-s7-cards-container">

      <!-- CARD 1: SINGLE POINT OF ACCOUNTABILITY -->
      <div class="ob-s7-card ob-s7-card-1 is-active" data-card="1" tabindex="0" role="button">
        <div>
          <div class="ob-s7-icon-wrap" aria-label="Accountability Hub">
            <span class="ob-s7-burst-ring"></span>
            <!-- Living Compass Target with Orbiting Satellite Node -->
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <circle cx="12" cy="12" r="9"></circle>
              <circle cx="12" cy="12" r="3" fill="currentColor"></circle>
              <!-- Orbiting Satellite Coordinator Node -->
              <g class="ob-s7-sat-node">
                <circle cx="12" cy="3.5" r="2.2" fill="#d97706" stroke="#ffffff" stroke-width="1"></circle>
              </g>
            </svg>
          </div>
          <h3 class="ob-s7-card-title">Single Point of Accountability</h3>
          <p class="ob-s7-card-desc">One project lead coordinates the plan, specialists, dependencies, updates and handover.</p>
        </div>
        <div class="ob-s7-card-footer">
          <span class="ob-s7-card-badge">
            <span>●</span>
            <span>Dedicated Lead</span>
          </span>
          <span class="ob-s7-card-arrow">&rarr;</span>
        </div>
      </div>

      <!-- CARD 2: BUSINESS-FIRST ADVICE -->
      <div class="ob-s7-card ob-s7-card-2" data-card="2" tabindex="0" role="button">
        <div>
          <div class="ob-s7-icon-wrap" aria-label="Business Advice">
            <span class="ob-s7-burst-ring"></span>
            <!-- Strategic Lightbulb with Radiating Waves -->
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M9 18h6"></path>
              <path d="M10 22h4"></path>
              <path d="M15.09 14c.18-.98.65-1.74 1.41-2.5A4.65 4.65 0 0 0 18 8 6 6 0 0 0 6 8c0 1 .23 2.23 1.5 3.5.76.76 1.23 1.52 1.41 2.5"></path>
              <!-- Radiating Strategy Waves -->
              <line class="ob-s7-light-ray" x1="12" y1="2" x2="12" y2="4"></line>
              <line class="ob-s7-light-ray" x1="4.93" y1="4.93" x2="6.34" y2="6.34"></line>
              <line class="ob-s7-light-ray" x1="19.07" y1="4.93" x2="17.66" y2="6.34"></line>
            </svg>
          </div>
          <h3 class="ob-s7-card-title">Business-First Advice</h3>
          <p class="ob-s7-card-desc">Recommendations begin with how you intend to operate and grow—not with a predetermined entity.</p>
        </div>
        <div class="ob-s7-card-footer">
          <span class="ob-s7-card-badge">
            <span>●</span>
            <span>Growth-Aligned</span>
          </span>
          <span class="ob-s7-card-arrow">&rarr;</span>
        </div>
      </div>

      <!-- CARD 3: LOCAL EXECUTION NETWORK -->
      <div class="ob-s7-card ob-s7-card-3" data-card="3" tabindex="0" role="button">
        <div>
          <div class="ob-s7-icon-wrap" aria-label="Execution Network">
            <span class="ob-s7-burst-ring"></span>
            <!-- Connected India Ecosystem Nodes -->
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <circle cx="18" cy="5" r="3"></circle>
              <circle cx="6" cy="12" r="3"></circle>
              <circle cx="18" cy="19" r="3"></circle>
              <line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line>
              <line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line>
              <!-- Pulsing Center Energy Dot -->
              <circle class="ob-s7-net-dot" cx="12" cy="12" r="2.5" fill="#059669"></circle>
            </svg>
          </div>
          <h3 class="ob-s7-card-title">Local Execution Network</h3>
          <p class="ob-s7-card-desc">We bring together the India expertise and implementation support required for your agreed scope.</p>
        </div>
        <div class="ob-s7-card-footer">
          <span class="ob-s7-card-badge">
            <span>●</span>
            <span>Pan-India Reach</span>
          </span>
          <span class="ob-s7-card-arrow">&rarr;</span>
        </div>
      </div>

      <!-- CARD 4: TRANSPARENT DELIVERY -->
      <div class="ob-s7-card ob-s7-card-4" data-card="4" tabindex="0" role="button">
        <div>
          <div class="ob-s7-icon-wrap" aria-label="Transparent Delivery">
            <span class="ob-s7-burst-ring"></span>
            <!-- Blueprint Document with Scanning Beam -->
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
              <polyline points="14 2 14 8 20 8"></polyline>
              <line x1="16" y1="13" x2="8" y2="13"></line>
              <line x1="16" y1="17" x2="8" y2="17"></line>
              <!-- Scanning Laser Beam -->
              <line class="ob-s7-scan-beam" x1="6" y1="11" x2="18" y2="11" stroke="#7c3aed" stroke-width="2.2"></line>
            </svg>
          </div>
          <h3 class="ob-s7-card-title">Transparent Delivery</h3>
          <p class="ob-s7-card-desc">Clear scope, responsibilities, assumptions, status reporting and next actions throughout the project.</p>
        </div>
        <div class="ob-s7-card-footer">
          <span class="ob-s7-card-badge">
            <span>●</span>
            <span>Zero Surprises</span>
          </span>
          <span class="ob-s7-card-arrow">&rarr;</span>
        </div>
      </div>

      <!-- CARD 5: PRACTICAL RISK AWARENESS -->
      <div class="ob-s7-card ob-s7-card-5" data-card="5" tabindex="0" role="button">
        <div>
          <div class="ob-s7-icon-wrap" aria-label="Risk Awareness">
            <span class="ob-s7-burst-ring"></span>
            <!-- Security Shield with Expanding Radar Wave -->
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
              <circle class="ob-s7-shield-ring" cx="12" cy="11" r="5" stroke="#e11d48" stroke-dasharray="2 2"></circle>
              <polyline points="9 11 11 13 15 9"></polyline>
            </svg>
          </div>
          <h3 class="ob-s7-card-title">Practical Risk Awareness</h3>
          <p class="ob-s7-card-desc">Potential issues are raised early, including documents, ownership, banking, tax, employment and approvals.</p>
        </div>
        <div class="ob-s7-card-footer">
          <span class="ob-s7-card-badge">
            <span>●</span>
            <span>Early Mitigation</span>
          </span>
          <span class="ob-s7-card-arrow">&rarr;</span>
        </div>
      </div>

      <!-- CARD 6: SUPPORT BEYOND INCORPORATION -->
      <div class="ob-s7-card ob-s7-card-6" data-card="6" tabindex="0" role="button">
        <div>
          <div class="ob-s7-icon-wrap" aria-label="Beyond Incorporation">
            <span class="ob-s7-burst-ring"></span>
            <!-- Launch Rocket & Infinity Scaling Loop -->
            <svg class="ob-s7-rocket-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.13-.09-2.91a2.18 2.18 0 0 0-2.91-.09z"></path>
              <path d="M12 15l-3-3a22 22 0 0 1 2-3.95A12.88 12.88 0 0 1 22 2c0 2.72-.78 7.5-6 11a22.35 22.35 0 0 1-4 2z"></path>
              <path d="M9 12H4s.55-3.03 2-4.5c1.62-1.63 5-2.5 5-2.5"></path>
              <path d="M15 12v5s3.03-.55 4.5-2c1.63-1.62 2.5-5 2.5-5"></path>
            </svg>
          </div>
          <h3 class="ob-s7-card-title">Support Beyond Incorporation</h3>
          <p class="ob-s7-card-desc">Continue with finance, compliance, payroll, HR, workplace and expansion support after launch.</p>
        </div>
        <div class="ob-s7-card-footer">
          <span class="ob-s7-card-badge">
            <span>●</span>
            <span>Lifecycle Partner</span>
          </span>
          <span class="ob-s7-card-arrow">&rarr;</span>
        </div>
      </div>

    </div>

  </div>

  <!-- SCOPED CLIENT-SIDE INTERACTION JAVASCRIPT -->
  <script id="ob-s7-scoped-master-js">
  (function() {
    'use strict';

    function initSectionSevenWhyPartner() {
      var sec = document.getElementById('ob-section-why-partner');
      if (!sec) return;

      var cards = sec.querySelectorAll('.ob-s7-card');
      var iconWraps = sec.querySelectorAll('.ob-s7-icon-wrap');

      // 1. Handle Card Clicks (Active selection state)
      cards.forEach(function(card) {
        card.addEventListener('click', function(e) {
          cards.forEach(function(c) { c.classList.remove('is-active'); });
          this.classList.add('is-active');
        });

        card.addEventListener('keydown', function(e) {
          if (e.key === 'Enter' || e.key === ' ') {
            e.preventDefault();
            cards.forEach(function(c) { c.classList.remove('is-active'); });
            this.classList.add('is-active');
          }
        });
      });

      // 2. Handle Icon Micro-Burst Interaction
      iconWraps.forEach(function(icon) {
        icon.addEventListener('click', function(e) {
          e.stopPropagation(); // Avoid triggering parent if needed
          var parentCard = this.closest('.ob-s7-card');
          if (parentCard) {
            cards.forEach(function(c) { c.classList.remove('is-active'); });
            parentCard.classList.add('is-active');
          }

          var wrap = this;
          wrap.classList.add('is-bursting');
          setTimeout(function() {
            wrap.classList.remove('is-bursting');
          }, 600);
        });
      });

      // 3. Desktop Subtle Mouse Parallax on Background Objects
      if (window.innerWidth > 1024) {
        sec.addEventListener('mousemove', function(e) {
          var rect = sec.getBoundingClientRect();
          var x = (e.clientX - rect.left) / rect.width - 0.5;
          var y = (e.clientY - rect.top) / rect.height - 0.5;

          var decorObjs = sec.querySelectorAll('.ob-s7-decor-obj');
          decorObjs.forEach(function(obj, idx) {
            var factor = (idx % 3 + 1) * 7;
            obj.style.transform = 'translate(' + (x * factor) + 'px, ' + (y * factor) + 'px)';
          });

          var wave = sec.querySelector('.ob-s7-fluid-wave-bg');
          if (wave) {
            wave.style.transform = 'translate(' + (-50 + x * 10) + '%, ' + (-50 + y * 10) + '%) rotate(-3deg)';
          }
        });
      }
    }

    if (document.readyState === 'loading') {
      document.addEventListener('DOMContentLoaded', initSectionSevenWhyPartner);
    } else {
      initSectionSevenWhyPartner();
    }
    window.addEventListener('load', initSectionSevenWhyPartner);
  })();
  </script>
</section>

<!-- ==========================================================================
     SECTION 8: QUESTIONS OVERSEAS COMPANIES ASK (EDITORIAL KNOWLEDGE HUB)
     ========================================================================== -->

<section class="section-padding ob-s8-section" id="ob-section-faq-knowledge-hub">

  <!-- SCOPED MASTER CSS FOR SECTION 8 -->
  <style id="ob-s8-scoped-master-css">
    /* ==========================================================================
       SECTION 08 MASTER SCOPED CSS (PREMIUM EDITORIAL FAQ & KNOWLEDGE HUB)
       ========================================================================== */
    .ob-s8-section {
      background: #fafaf8 !important;
      position: relative !important;
      overflow: hidden !important;
      padding: 110px 0 120px 0 !important;
      border-top: 1px solid #f1f5f9 !important;
      box-sizing: border-box !important;
      font-family: 'Outfit', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif !important;
    }

    /* --------------------------------------------------------------------------
       1. UNIQUE SECTION 8 BACKGROUND ATMOSPHERE (PEARL CANVAS + RADIAL ZONES)
       -------------------------------------------------------------------------- */
    .ob-s8-bg-radial {
      position: absolute;
      border-radius: 50%;
      filter: blur(85px);
      pointer-events: none;
      z-index: 1;
      opacity: 0.35;
      will-change: transform;
    }
    .ob-s8-radial-blue {
      width: 480px;
      height: 480px;
      background: radial-gradient(circle, #bae6fd 0%, rgba(186, 230, 253, 0) 70%);
      top: -40px;
      left: 2%;
      animation: obS8FloatA 22s ease-in-out infinite alternate !important;
    }
    .ob-s8-radial-lavender {
      width: 520px;
      height: 520px;
      background: radial-gradient(circle, #ddd6fe 0%, rgba(221, 214, 254, 0) 70%);
      top: 25%;
      right: 5%;
      animation: obS8FloatB 26s ease-in-out infinite alternate !important;
    }
    .ob-s8-radial-peach {
      width: 450px;
      height: 450px;
      background: radial-gradient(circle, #fed7aa 0%, rgba(254, 215, 170, 0) 70%);
      bottom: -30px;
      left: 25%;
      animation: obS8FloatC 20s ease-in-out infinite alternate !important;
    }

    @keyframes obS8FloatA {
      0% { transform: translate(0, 0) scale(1); }
      100% { transform: translate(32px, -22px) scale(1.08); }
    }
    @keyframes obS8FloatB {
      0% { transform: translate(0, 0) scale(0.95); }
      100% { transform: translate(-28px, 28px) scale(1.10); }
    }
    @keyframes obS8FloatC {
      0% { transform: translate(0, 0) scale(1); }
      100% { transform: translate(25px, 20px) scale(1.06); }
    }

    /* --------------------------------------------------------------------------
       2. EDITORIAL BACKGROUND NETWORK & CONNECTORS
       -------------------------------------------------------------------------- */
    .ob-s8-network-svg {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      pointer-events: none;
      z-index: 2;
    }
    .ob-s8-network-line {
      stroke: rgba(203, 213, 225, 0.45);
      stroke-width: 1.5;
      stroke-linecap: round;
      fill: none;
      stroke-dasharray: 6 6;
      animation: obS8NetDash 28s linear infinite !important;
    }
    @keyframes obS8NetDash {
      from { stroke-dashoffset: 180; }
      to { stroke-dashoffset: 0; }
    }

    /* Floating vector elements */
    .ob-s8-decor-obj {
      position: absolute;
      pointer-events: none;
      z-index: 3;
      opacity: 0.70;
      will-change: transform;
      transition: transform 0.25s cubic-bezier(0.16, 1, 0.3, 1);
    }
    .ob-s8-decor-1 { top: 8%; left: 4%; animation: obS8Spin 16s linear infinite !important; }
    .ob-s8-decor-2 { top: 18%; right: 6%; animation: obS8FloatV 11s ease-in-out infinite alternate !important; }
    .ob-s8-decor-3 { top: 48%; left: 1%; animation: obS8FloatH 14s ease-in-out infinite alternate !important; }
    .ob-s8-decor-4 { bottom: 18%; right: 4%; animation: obS8FloatV 10s ease-in-out infinite alternate !important; }
    .ob-s8-decor-5 { bottom: 8%; left: 8%; animation: obS8Spin 22s linear infinite !important; }

    @keyframes obS8FloatV {
      0% { transform: translateY(0); }
      100% { transform: translateY(-15px); }
    }
    @keyframes obS8FloatH {
      0% { transform: translateX(0); }
      100% { transform: translateX(16px); }
    }
    @keyframes obS8Spin {
      0% { transform: rotate(0deg); }
      100% { transform: rotate(360deg); }
    }

    /* --------------------------------------------------------------------------
       3. SECTION HEADER & EDITORIAL ACCENTS
       -------------------------------------------------------------------------- */
    .ob-s8-container {
      max-width: 1280px;
      margin: 0 auto;
      padding: 0 24px;
      position: relative;
      z-index: 10;
      box-sizing: border-box;
    }

    .ob-s8-header {
      text-align: center;
      margin-bottom: 56px;
      position: relative;
    }
    .ob-s8-badge {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      font-size: 0.76rem;
      font-weight: 800;
      letter-spacing: 0.08em;
      text-transform: uppercase;
      color: #b45309;
      background: #fef3c7;
      border: 1px solid #fde68a;
      border-radius: 20px;
      padding: 5px 16px;
      margin-bottom: 16px;
      box-shadow: 0 2px 6px rgba(245, 158, 11, 0.1);
    }
    .ob-s8-heading-wrap {
      display: inline-block;
      position: relative;
    }
    .ob-s8-title {
      font-size: clamp(34px, 3.8vw, 48px) !important;
      font-weight: 800 !important;
      color: #0f172a !important;
      line-height: 1.2 !important;
      letter-spacing: -0.03em !important;
      margin: 0 0 16px 0 !important;
      max-width: 900px !important;
      text-align: center !important;
    }
    .ob-s8-subtitle {
      font-size: clamp(15.5px, 1.2vw, 18px) !important;
      line-height: 1.62 !important;
      color: #64748b !important;
      max-width: 780px !important;
      margin: 0 auto !important;
      text-align: center !important;
    }

    /* Decorative Header Arrow */
    .ob-s8-header-arrow {
      position: absolute;
      top: -10px;
      right: -58px;
      width: 48px;
      height: 44px;
      pointer-events: none;
      animation: obS8ArrowSway 6s ease-in-out infinite alternate !important;
    }
    @keyframes obS8ArrowSway {
      0% { transform: translate(0, 0) rotate(0deg); }
      100% { transform: translate(6px, -4px) rotate(5deg); }
    }

    /* Animated Underline */
    .ob-s8-underline-highlight {
      position: relative;
      display: inline-block;
      white-space: nowrap;
    }
    .ob-s8-underline-highlight::after {
      content: '';
      position: absolute;
      left: 0;
      bottom: 2px;
      width: 100%;
      height: 7px;
      background: linear-gradient(90deg, #f59e0b, #0ea5e9);
      opacity: 0.35;
      border-radius: 4px;
      z-index: -1;
      transform-origin: left;
      animation: obS8LineGrow 1.5s cubic-bezier(0.16, 1, 0.3, 1) forwards !important;
    }
    @keyframes obS8LineGrow {
      0% { transform: scaleX(0); }
      100% { transform: scaleX(1); }
    }

    /* --------------------------------------------------------------------------
       4. 2-COLUMN ASYMMETRIC EDITORIAL GRID (LEFT 54% / RIGHT 46%)
       -------------------------------------------------------------------------- */
    .ob-s8-grid {
      display: grid;
      grid-template-columns: 54% 46%;
      gap: 36px;
      align-items: start;
      margin-bottom: 48px;
      position: relative;
    }

    /* --------------------------------------------------------------------------
       5. LEFT COLUMN: 6 INTERACTIVE FAQ CARDS
       -------------------------------------------------------------------------- */
    .ob-s8-faq-stack {
      display: flex;
      flex-direction: column;
      gap: 14px;
    }

    .ob-s8-faq-card {
      background: #ffffff;
      border: 1.5px solid #e2e8f0;
      border-radius: 20px;
      padding: 20px 24px;
      cursor: pointer;
      position: relative;
      overflow: hidden;
      outline: none;
      user-select: none;
      box-shadow: 0 4px 14px -2px rgba(15, 23, 42, 0.04), 0 1px 3px rgba(0, 0, 0, 0.02);
      transition: transform 0.35s cubic-bezier(0.16, 1, 0.3, 1), 
                  box-shadow 0.35s cubic-bezier(0.16, 1, 0.3, 1), 
                  border-color 0.35s cubic-bezier(0.16, 1, 0.3, 1), 
                  background-color 0.35s cubic-bezier(0.16, 1, 0.3, 1);
    }
    .ob-s8-faq-card:focus-visible {
      border-color: #0284c7 !important;
      box-shadow: 0 0 0 3px rgba(2, 132, 199, 0.25) !important;
    }

    /* Left accent indicator strip */
    .ob-s8-faq-card::before {
      content: '';
      position: absolute;
      left: 0;
      top: 0;
      bottom: 0;
      width: 4px;
      background: transparent;
      transition: background-color 0.35s ease;
    }

    /* FAQ Card Header Row */
    .ob-s8-faq-header {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 16px;
    }
    .ob-s8-faq-left {
      display: flex;
      align-items: center;
      gap: 14px;
      flex: 1;
      min-width: 0;
    }

    /* Question Number Badge */
    .ob-s8-faq-num {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 38px;
      height: 38px;
      border-radius: 12px;
      font-size: 0.95rem;
      font-weight: 800;
      letter-spacing: -0.02em;
      flex-shrink: 0;
      transition: transform 0.32s ease, background-color 0.32s ease, color 0.32s ease;
    }

    /* Living SVG Icon Container */
    .ob-s8-faq-icon-wrap {
      width: 38px;
      height: 38px;
      border-radius: 12px;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
      position: relative;
      cursor: pointer;
      transition: transform 0.32s cubic-bezier(0.16, 1, 0.3, 1), background-color 0.32s ease;
    }
    .ob-s8-faq-icon-wrap svg {
      width: 20px;
      height: 20px;
      transition: transform 0.32s cubic-bezier(0.16, 1, 0.3, 1);
    }

    /* Micro-burst ring on click */
    .ob-s8-icon-burst {
      position: absolute;
      top: -4px;
      left: -4px;
      right: -4px;
      bottom: -4px;
      border-radius: 16px;
      border: 1.5px solid currentColor;
      opacity: 0;
      transform: scale(0.8);
      pointer-events: none;
      transition: transform 0.45s cubic-bezier(0.16, 1, 0.3, 1), opacity 0.45s ease;
    }
    .ob-s8-faq-icon-wrap.is-bursting .ob-s8-icon-burst {
      opacity: 0.8;
      transform: scale(1.35);
    }
    .ob-s8-faq-icon-wrap.is-bursting {
      transform: scale(1.15) rotate(4deg) !important;
    }

    /* Question Title */
    .ob-s8-faq-question-text {
      font-size: 1.08rem !important;
      font-weight: 700 !important;
      color: #0f172a !important;
      margin: 0 !important;
      line-height: 1.35 !important;
      letter-spacing: -0.015em !important;
      transition: color 0.25s ease;
    }

    /* Plus/Minus Indicator Button */
    .ob-s8-faq-toggle-btn {
      width: 32px;
      height: 32px;
      border-radius: 50%;
      background: #f1f5f9;
      border: 1px solid #e2e8f0;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
      transition: transform 0.35s cubic-bezier(0.16, 1, 0.3, 1), background-color 0.32s ease, border-color 0.32s ease;
    }
    .ob-s8-toggle-cross {
      width: 14px;
      height: 14px;
      position: relative;
      transition: transform 0.35s cubic-bezier(0.16, 1, 0.3, 1);
    }
    .ob-s8-toggle-cross::before,
    .ob-s8-toggle-cross::after {
      content: '';
      position: absolute;
      background: #475569;
      border-radius: 2px;
      transition: transform 0.35s cubic-bezier(0.16, 1, 0.3, 1), background-color 0.32s ease;
    }
    .ob-s8-toggle-cross::before {
      top: 6px;
      left: 0;
      width: 14px;
      height: 2px;
    }
    .ob-s8-toggle-cross::after {
      top: 0;
      left: 6px;
      width: 2px;
      height: 14px;
    }

    /* Smooth CSS Grid Accordion Drawer */
    .ob-s8-faq-drawer {
      display: grid;
      grid-template-rows: 0fr;
      transition: grid-template-rows 0.38s cubic-bezier(0.16, 1, 0.3, 1);
    }
    .ob-s8-drawer-wrapper {
      overflow: hidden;
      opacity: 0;
      transform: translateY(-6px);
      transition: opacity 0.32s cubic-bezier(0.16, 1, 0.3, 1), transform 0.32s cubic-bezier(0.16, 1, 0.3, 1);
    }
    .ob-s8-faq-answer-content {
      padding-top: 14px;
      margin-top: 14px;
      border-top: 1px dashed rgba(148, 163, 184, 0.35);
    }
    .ob-s8-faq-answer-text {
      font-size: 0.94rem !important;
      line-height: 1.62 !important;
      color: #475569 !important;
      margin: 0 0 12px 0 !important;
    }
    .ob-s8-faq-tags {
      display: flex;
      flex-wrap: wrap;
      gap: 8px;
    }
    .ob-s8-faq-tag-pill {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      font-size: 0.78rem;
      font-weight: 700;
      padding: 4px 10px;
      border-radius: 16px;
      background: #f8fafc;
      border: 1px solid #e2e8f0;
      color: #334155;
    }
    .ob-s8-faq-tag-dot {
      width: 6px;
      height: 6px;
      border-radius: 50%;
    }

    /* --------------------------------------------------------------------------
       INDIVIDUAL FAQ CARD COLOR PALETTES
       -------------------------------------------------------------------------- */
    /* Item 01: Amber Gold */
    .ob-s8-card-01 {
      --faq-theme: #d97706;
      --faq-soft-bg: #fffdf5;
      --faq-badge-bg: #fef3c7;
      --faq-badge-text: #b45309;
      --faq-border: #fbbf24;
      --faq-glow: rgba(245, 158, 11, 0.18);
    }
    .ob-s8-card-01 .ob-s8-faq-num { background: #fef3c7; color: #b45309; }
    .ob-s8-card-01 .ob-s8-faq-icon-wrap { background: #fffbeb; color: #d97706; }

    /* Item 02: Sky Blue */
    .ob-s8-card-02 {
      --faq-theme: #0284c7;
      --faq-soft-bg: #f5faff;
      --faq-badge-bg: #e0f2fe;
      --faq-badge-text: #0369a1;
      --faq-border: #38bdf8;
      --faq-glow: rgba(14, 165, 233, 0.18);
    }
    .ob-s8-card-02 .ob-s8-faq-num { background: #e0f2fe; color: #0369a1; }
    .ob-s8-card-02 .ob-s8-faq-icon-wrap { background: #f0f9ff; color: #0284c7; }

    /* Item 03: Emerald Mint */
    .ob-s8-card-03 {
      --faq-theme: #059669;
      --faq-soft-bg: #f4fdf8;
      --faq-badge-bg: #d1fae5;
      --faq-badge-text: #047857;
      --faq-border: #34d399;
      --faq-glow: rgba(16, 185, 129, 0.18);
    }
    .ob-s8-card-03 .ob-s8-faq-num { background: #d1fae5; color: #047857; }
    .ob-s8-card-03 .ob-s8-faq-icon-wrap { background: #ecfdf5; color: #059669; }

    /* Item 04: Violet Lavender */
    .ob-s8-card-04 {
      --faq-theme: #7c3aed;
      --faq-soft-bg: #faf7ff;
      --faq-badge-bg: #ede9fe;
      --faq-badge-text: #6d28d9;
      --faq-border: #a78bfa;
      --faq-glow: rgba(139, 92, 246, 0.18);
    }
    .ob-s8-card-04 .ob-s8-faq-num { background: #ede9fe; color: #6d28d9; }
    .ob-s8-card-04 .ob-s8-faq-icon-wrap { background: #f5f3ff; color: #7c3aed; }

    /* Item 05: Coral Rose */
    .ob-s8-card-05 {
      --faq-theme: #e11d48;
      --faq-soft-bg: #fff5f6;
      --faq-badge-bg: #ffe4e6;
      --faq-badge-text: #be123c;
      --faq-border: #fb7185;
      --faq-glow: rgba(244, 63, 94, 0.18);
    }
    .ob-s8-card-05 .ob-s8-faq-num { background: #ffe4e6; color: #be123c; }
    .ob-s8-card-05 .ob-s8-faq-icon-wrap { background: #fff1f2; color: #e11d48; }

    /* Item 06: Electric Indigo */
    .ob-s8-card-06 {
      --faq-theme: #4f46e5;
      --faq-soft-bg: #f5f7ff;
      --faq-badge-bg: #e0e7ff;
      --faq-badge-text: #3730a3;
      --faq-border: #818cf8;
      --faq-glow: rgba(99, 102, 241, 0.18);
    }
    .ob-s8-card-06 .ob-s8-faq-num { background: #e0e7ff; color: #3730a3; }
    .ob-s8-card-06 .ob-s8-faq-icon-wrap { background: #eef2ff; color: #4f46e5; }

    /* Card Hover & Active States */
    @media (hover: hover) {
      .ob-s8-faq-card:hover {
        transform: translateY(-4px);
        border-color: var(--faq-border);
        box-shadow: 0 14px 28px -6px var(--faq-glow), 0 3px 8px rgba(0, 0, 0, 0.03);
      }
      .ob-s8-faq-card:hover .ob-s8-faq-num { transform: scale(1.06); }
      .ob-s8-faq-card:hover .ob-s8-faq-icon-wrap svg { transform: scale(1.12); }
      .ob-s8-faq-card:hover .ob-s8-toggle-cross { transform: rotate(20deg); }
    }

    .ob-s8-faq-card.is-active {
      background: var(--faq-soft-bg);
      border-color: var(--faq-theme);
      box-shadow: 0 16px 36px -8px var(--faq-glow), 0 0 0 1.5px var(--faq-theme);
      transform: translateY(-2px);
    }
    .ob-s8-faq-card.is-active::before { background: var(--faq-theme); }
    .ob-s8-faq-card.is-active .ob-s8-faq-toggle-btn { background: var(--faq-theme); border-color: var(--faq-theme); }
    .ob-s8-faq-card.is-active .ob-s8-toggle-cross::before,
    .ob-s8-faq-card.is-active .ob-s8-toggle-cross::after { background: #ffffff; }
    .ob-s8-faq-card.is-active .ob-s8-toggle-cross::after { transform: scaleY(0); }
    .ob-s8-faq-card.is-active .ob-s8-faq-drawer { grid-template-rows: 1fr; }
    .ob-s8-faq-card.is-active .ob-s8-drawer-wrapper { opacity: 1; transform: translateY(0); }
    .ob-s8-faq-card.is-active .ob-s8-faq-question-text { color: var(--faq-theme) !important; }

    /* --------------------------------------------------------------------------
       6. RIGHT COLUMN: EDITORIAL VISUAL SCENE & CHECKLIST
       -------------------------------------------------------------------------- */
    .ob-s8-editorial-scene {
      position: relative;
      display: flex;
      flex-direction: column;
      gap: 20px;
    }

    /* Staggered Editorial Cards Container */
    .ob-s8-image-showcase {
      position: relative;
      min-height: 280px;
    }

    /* Editorial Image Card 1: Modern Corporate Financial Architecture */
    .ob-s8-image-card-1 {
      position: relative;
      width: 82%;
      height: 220px;
      border-radius: 24px;
      overflow: hidden;
      box-shadow: 0 16px 36px -8px rgba(15, 23, 42, 0.12);
      border: 2px solid #ffffff;
      background: #0f172a;
      transition: transform 0.4s cubic-bezier(0.16, 1, 0.3, 1), box-shadow 0.4s ease;
      animation: obS8ImageFloatA 10s ease-in-out infinite alternate !important;
    }
    .ob-s8-image-card-1 img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      opacity: 0.90;
      transition: transform 0.6s ease;
    }
    @media (hover: hover) {
      .ob-s8-image-card-1:hover {
        transform: translateY(-6px) scale(1.02);
        box-shadow: 0 22px 48px -10px rgba(15, 23, 42, 0.18);
      }
      .ob-s8-image-card-1:hover img {
        transform: scale(1.06);
      }
    }

    /* Editorial Visual Card 2: India Entry Advisory (Interactive Corporate Strategic Map & FDI Network) */
    .ob-s8-image-card-2 {
      position: absolute;
      top: 100px;
      right: 0;
      width: 62%;
      height: 190px;
      border-radius: 22px;
      overflow: hidden;
      box-shadow: 0 18px 40px -6px rgba(15, 23, 42, 0.14), 0 2px 8px rgba(0, 0, 0, 0.03);
      border: 3px solid #ffffff;
      background: linear-gradient(135deg, #ffffff 0%, #f8fafc 42%, #eff6ff 80%, #f0fdfa 100%);
      z-index: 4;
      box-sizing: border-box !important;
      transition: transform 0.4s cubic-bezier(0.16, 1, 0.3, 1), box-shadow 0.4s ease;
      animation: obS8ImageFloatB 12s ease-in-out infinite alternate !important;
      user-select: none;
    }
    .ob-s8-adv-bg-mesh {
      position: absolute;
      inset: 0;
      background: radial-gradient(circle at 85% 25%, rgba(2, 132, 199, 0.09) 0%, transparent 55%),
                  radial-gradient(circle at 15% 80%, rgba(245, 158, 11, 0.08) 0%, transparent 50%),
                  radial-gradient(circle at 55% 50%, rgba(99, 102, 241, 0.06) 0%, transparent 60%);
      pointer-events: none;
    }
    .ob-s8-adv-svg {
      width: 100%;
      height: 100%;
      position: absolute;
      top: 0;
      left: 0;
      display: block;
      pointer-events: none;
    }
    .ob-s8-adv-pulse-glow {
      animation: obAdvGlowPulse 6s ease-in-out infinite alternate;
    }
    .ob-s8-adv-pulse-glow-alt {
      animation: obAdvGlowPulse 8s ease-in-out infinite alternate-reverse;
    }
    @keyframes obAdvGlowPulse {
      0% { opacity: 0.4; transform: scale(0.95); }
      100% { opacity: 0.85; transform: scale(1.08); }
    }
    .ob-s8-adv-india-polygon {
      filter: drop-shadow(0 3px 10px rgba(2, 132, 199, 0.12));
      transition: stroke 0.3s ease;
    }
    .ob-s8-adv-route-line {
      stroke-dasharray: 6 4;
      animation: obAdvRouteFlow 12s linear infinite;
    }
    .ob-s8-adv-route-2 {
      animation-duration: 15s;
    }
    .ob-s8-adv-route-3 {
      animation-duration: 10s;
    }
    @keyframes obAdvRouteFlow {
      from { stroke-dashoffset: 200; }
      to { stroke-dashoffset: 0; }
    }
    .ob-s8-hub-pulse-ring {
      transform-origin: center;
      animation: obAdvHubPulse 2.8s cubic-bezier(0.16, 1, 0.3, 1) infinite;
    }
    @keyframes obAdvHubPulse {
      0% { r: 4px; opacity: 0.9; }
      50% { opacity: 0.4; }
      100% { r: 16px; opacity: 0; }
    }
    .ob-s8-adv-packet {
      filter: drop-shadow(0 0 4px currentColor);
    }
    /* Floating Micro Badges inside visual */
    .ob-s8-adv-pill {
      position: absolute;
      display: inline-flex;
      align-items: center;
      gap: 5px;
      padding: 3px 9px;
      border-radius: 12px;
      font-size: 0.68rem;
      font-weight: 700;
      backdrop-filter: blur(10px);
      -webkit-backdrop-filter: blur(10px);
      box-shadow: 0 4px 12px rgba(15, 23, 42, 0.08);
      z-index: 5;
      pointer-events: none;
      white-space: nowrap;
    }
    .ob-s8-adv-pill-fdi {
      top: 12px;
      right: 12px;
      background: rgba(240, 253, 250, 0.94);
      color: #0f766e;
      border: 1px solid #99f6e4;
      animation: obAdvPillFloatA 5s ease-in-out infinite alternate;
    }
    .ob-s8-adv-pill-fdi .ob-s8-pill-icon {
      display: flex;
      align-items: center;
      color: #0d9488;
    }
    .ob-s8-adv-pill-fdi .ob-s8-pill-icon svg {
      width: 11px;
      height: 11px;
    }
    .ob-s8-adv-pill-compliance {
      top: 12px;
      left: 12px;
      background: rgba(254, 243, 199, 0.94);
      color: #92400e;
      border: 1px solid #fde68a;
      animation: obAdvPillFloatB 6s ease-in-out infinite alternate;
    }
    .ob-s8-adv-pill-compliance .ob-s8-pill-dot {
      width: 5px;
      height: 5px;
      border-radius: 50%;
      background: #f59e0b;
      box-shadow: 0 0 6px #f59e0b;
    }
    @keyframes obAdvPillFloatA {
      0% { transform: translateY(0); }
      100% { transform: translateY(-4px); }
    }
    @keyframes obAdvPillFloatB {
      0% { transform: translateY(0); }
      100% { transform: translateY(3px); }
    }
    .ob-s8-badge-live-beacon {
      width: 6px;
      height: 6px;
      border-radius: 50%;
      background: #0284c7;
      box-shadow: 0 0 0 0 rgba(2, 132, 199, 0.7);
      animation: obAdvBadgePulse 2s infinite;
      display: inline-block;
    }
    @keyframes obAdvBadgePulse {
      0% { box-shadow: 0 0 0 0 rgba(2, 132, 199, 0.7); }
      70% { box-shadow: 0 0 0 6px rgba(2, 132, 199, 0); }
      100% { box-shadow: 0 0 0 0 rgba(2, 132, 199, 0); }
    }
    @media (hover: hover) {
      .ob-s8-image-card-2:hover {
        transform: translateY(-6px) scale(1.02);
        box-shadow: 0 24px 50px -8px rgba(15, 23, 42, 0.20);
      }
      .ob-s8-image-card-2:hover .ob-s8-adv-india-polygon {
        stroke: rgba(2, 132, 199, 0.75);
      }
    }

    @keyframes obS8ImageFloatA {
      0% { transform: translateY(0) rotate(0deg); }
      100% { transform: translateY(-8px) rotate(-1deg); }
    }
    @keyframes obS8ImageFloatB {
      0% { transform: translateY(0) rotate(0deg); }
      100% { transform: translateY(9px) rotate(1.5deg); }
    }

    /* Floating Category Badges on Images */
    .ob-s8-badge-float {
      position: absolute;
      top: 14px;
      left: 14px;
      display: inline-flex;
      align-items: center;
      gap: 6px;
      font-size: 0.72rem;
      font-weight: 800;
      letter-spacing: 0.06em;
      text-transform: uppercase;
      padding: 5px 12px;
      border-radius: 20px;
      backdrop-filter: blur(8px);
      -webkit-backdrop-filter: blur(8px);
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
      z-index: 5;
    }
    .ob-s8-badge-legal {
      background: rgba(254, 243, 199, 0.95);
      color: #92400e;
      border: 1px solid #fde68a;
    }
    .ob-s8-badge-strategy {
      top: auto !important;
      bottom: 14px !important;
      left: 14px !important;
      background: rgba(224, 242, 254, 0.95);
      color: #0369a1;
      border: 1px solid #bae6fd;
    }

    /* Floating Mini Checklist Card */
    .ob-s8-checklist-card {
      background: rgba(255, 255, 255, 0.95);
      backdrop-filter: blur(20px);
      -webkit-backdrop-filter: blur(20px);
      border: 1.5px solid #e2e8f0;
      border-radius: 24px;
      padding: 26px 28px;
      margin-top: 30px;
      box-shadow: 0 16px 36px -6px rgba(15, 23, 42, 0.08), 0 2px 6px rgba(0, 0, 0, 0.02);
      position: relative;
      z-index: 5;
    }
    .ob-s8-checklist-top {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-bottom: 16px;
      padding-bottom: 12px;
      border-bottom: 1px dashed #e2e8f0;
    }
    .ob-s8-checklist-title {
      font-size: 0.88rem !important;
      font-weight: 800 !important;
      letter-spacing: 0.04em !important;
      color: #0f172a !important;
      text-transform: uppercase !important;
      margin: 0 !important;
      display: flex;
      align-items: center;
      gap: 8px;
    }
    .ob-s8-checklist-live-dot {
      width: 8px;
      height: 8px;
      border-radius: 50%;
      background: #10b981;
      box-shadow: 0 0 0 rgba(16, 185, 129, 0.5);
      animation: obS8DotPulse 2s infinite !important;
    }
    @keyframes obS8DotPulse {
      0% { box-shadow: 0 0 0 0 rgba(16, 185, 129, 0.7); }
      70% { box-shadow: 0 0 0 8px rgba(16, 185, 129, 0); }
      100% { box-shadow: 0 0 0 0 rgba(16, 185, 129, 0); }
    }

    .ob-s8-checklist-items {
      display: flex;
      flex-direction: column;
      gap: 11px;
    }
    .ob-s8-checklist-item {
      display: flex;
      align-items: center;
      gap: 10px;
      font-size: 0.86rem;
      font-weight: 600;
      color: #334155;
    }
    .ob-s8-check-icon {
      width: 20px;
      height: 20px;
      border-radius: 50%;
      background: #ecfdf5;
      color: #059669;
      border: 1px solid #a7f3d0;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 0.75rem;
      font-weight: 800;
      flex-shrink: 0;
    }

    /* --------------------------------------------------------------------------
       7. SECTION CTA & BUTTON
       -------------------------------------------------------------------------- */
    .ob-s8-cta-wrapper {
      text-align: center;
      margin-top: 16px;
      position: relative;
      z-index: 10;
    }
    .ob-s8-cta-btn {
      display: inline-flex;
      align-items: center;
      gap: 10px;
      padding: 16px 40px !important;
      font-size: 1.05rem !important;
      font-weight: 700 !important;
      border-radius: 50px !important;
      background: #f59e0b !important;
      color: #0f172a !important;
      text-decoration: none !important;
      box-shadow: 0 10px 24px -4px rgba(245, 158, 11, 0.35) !important;
      transition: transform 0.28s cubic-bezier(0.16, 1, 0.3, 1), 
                  box-shadow 0.28s cubic-bezier(0.16, 1, 0.3, 1), 
                  background-color 0.28s ease !important;
    }
    .ob-s8-cta-arrow {
      display: inline-block;
      transition: transform 0.28s cubic-bezier(0.16, 1, 0.3, 1);
    }
    @media (hover: hover) {
      .ob-s8-cta-btn:hover {
        transform: translateY(-3px) !important;
        box-shadow: 0 16px 32px -6px rgba(245, 158, 11, 0.45) !important;
        background: #fbbf24 !important;
      }
      .ob-s8-cta-btn:hover .ob-s8-cta-arrow {
        transform: translateX(6px);
      }
    }

    /* --------------------------------------------------------------------------
       8. RESPONSIVE DESIGN (TABLET & MOBILE)
       -------------------------------------------------------------------------- */
    @media (max-width: 1024px) {
      .ob-s8-section {
        padding: 80px 0 90px 0 !important;
      }
      .ob-s8-grid {
        grid-template-columns: 1fr;
        gap: 40px;
      }
      .ob-s8-editorial-scene {
        order: 2;
      }
      .ob-s8-faq-stack {
        order: 1;
      }
      .ob-s8-header-arrow {
        display: none;
      }
    }

    @media (max-width: 640px) {
      .ob-s8-section {
        padding: 60px 0 70px 0 !important;
      }
      .ob-s8-container {
        padding: 0 16px;
      }
      .ob-s8-faq-card {
        padding: 16px 18px;
        border-radius: 16px;
      }
      .ob-s8-faq-num,
      .ob-s8-faq-icon-wrap {
        width: 32px;
        height: 32px;
        font-size: 0.85rem;
      }
      .ob-s8-faq-question-text {
        font-size: 0.98rem !important;
      }
      .ob-s8-image-showcase {
        min-height: 220px;
      }
      .ob-s8-image-card-1 {
        width: 90%;
        height: 170px;
      }
      .ob-s8-image-card-2 {
        width: 70%;
        height: 140px;
        top: 80px;
      }
      .ob-s8-adv-pill {
        font-size: 0.58rem;
        padding: 2px 6px;
      }
      .ob-s8-adv-pill-compliance {
        display: none;
      }
      .ob-s8-badge-strategy {
        font-size: 0.64rem;
        padding: 4px 8px;
        bottom: 8px !important;
        left: 8px !important;
      }
      .ob-s8-checklist-card {
        padding: 20px;
        border-radius: 18px;
      }
      .ob-s8-cta-btn {
        width: 100%;
        justify-content: center;
        padding: 15px 24px !important;
      }
    }

    /* Accessibility reduced motion */
    @media (prefers-reduced-motion: reduce) {
      .ob-s8-bg-radial,
      .ob-s8-decor-obj,
      .ob-s8-header-arrow,
      .ob-s8-image-card-1,
      .ob-s8-image-card-2,
      .ob-s8-network-line,
      .ob-s8-adv-route-line,
      .ob-s8-hub-pulse-ring,
      .ob-s8-adv-pill-fdi,
      .ob-s8-adv-pill-compliance,
      .ob-s8-badge-live-beacon {
        animation: none !important;
        transition: none !important;
      }
    }
  </style>

  <!-- BACKGROUND ATMOSPHERIC RADIAL GLOWS -->
  <div class="ob-s8-bg-radial ob-s8-radial-blue"></div>
  <div class="ob-s8-bg-radial ob-s8-radial-lavender"></div>
  <div class="ob-s8-bg-radial ob-s8-radial-peach"></div>

  <!-- EDITORIAL CONNECTING NETWORK LINES -->
  <svg class="ob-s8-network-svg" viewBox="0 0 1440 900" fill="none" preserveAspectRatio="none">
    <path class="ob-s8-network-line" d="M 120 160 C 340 120, 520 220, 720 180 C 920 140, 1140 260, 1360 200" />
    <path class="ob-s8-network-line" d="M 80 640 C 280 580, 520 720, 780 660 C 1040 600, 1220 740, 1400 680" />
    <path class="ob-s8-network-line" d="M 720 180 L 720 440 L 780 660" />
  </svg>

  <!-- 5 FLOATING VECTOR GRAPHIC OBJECTS -->
  <svg class="ob-s8-decor-obj ob-s8-decor-1" width="22" height="22" viewBox="0 0 24 24" fill="none">
    <path d="M12 0L14.5 9.5L24 12L14.5 14.5L12 24L9.5 14.5L0 12L9.5 9.5L12 0Z" fill="#F59E0B" opacity="0.6"/>
  </svg>
  <svg class="ob-s8-decor-obj ob-s8-decor-2" width="26" height="26" viewBox="0 0 32 32" fill="none">
    <circle cx="16" cy="16" r="13" stroke="#0EA5E9" stroke-width="2" stroke-dasharray="3 3"/>
  </svg>
  <svg class="ob-s8-decor-obj ob-s8-decor-3" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#8B5CF6" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
    <line x1="7" y1="17" x2="17" y2="7"></line>
    <polyline points="7 7 17 7 17 17"></polyline>
  </svg>
  <svg class="ob-s8-decor-obj ob-s8-decor-4" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2" stroke-linecap="round">
    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
    <polyline points="9 12 11 14 15 10"></polyline>
  </svg>
  <svg class="ob-s8-decor-obj ob-s8-decor-5" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#F97316" stroke-width="2">
    <rect x="12" y="2" width="14" height="14" transform="rotate(45 12 2)"/>
  </svg>

  <div class="ob-s8-container">

    <!-- 1. SECTION INTRO (EDITORIAL BADGE & ANIMATED HEADING) -->
    <div class="ob-s8-header">
      <div class="ob-s8-badge">BEFORE YOU ENTER INDIA • KNOWLEDGE HUB</div>
      <div class="ob-s8-heading-wrap">
        <h2 class="ob-s8-title">Questions Overseas Companies Ask Before Entering India</h2>
        
        <svg class="ob-s8-header-arrow" viewBox="0 0 50 45" fill="none">
          <path d="M6 10 C20 4, 38 12, 42 32 M42 32 L32 28 M42 32 L44 20" stroke="#f59e0b" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </div>
      <p class="ob-s8-subtitle">
        Practical answers to the essential structural, regulatory, operational and banking questions international businesses ask when <span class="ob-s8-underline-highlight">planning their India launch</span>.
      </p>
    </div>

    <!-- 2. 2-COLUMN ASYMMETRIC EDITORIAL GRID -->
    <div class="ob-s8-grid">

      <!-- LEFT COLUMN: 6 INTERACTIVE FAQ CARDS -->
      <div class="ob-s8-faq-stack" id="ob-s8-faq-container">

        <!-- FAQ 01 -->
        <div class="ob-s8-faq-card ob-s8-card-01 is-active" data-faq="1" tabindex="0" role="button" aria-expanded="true" aria-controls="ob-s8-ans-1">
          <div class="ob-s8-faq-header">
            <div class="ob-s8-faq-left">
              <div class="ob-s8-faq-num">01</div>
              <div class="ob-s8-faq-icon-wrap" aria-label="Ownership Icon">
                <span class="ob-s8-icon-burst"></span>
                <!-- Corporate Ownership Building Icon -->
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M3 21h18"></path>
                  <path d="M5 21V7l8-4v18"></path>
                  <path d="M19 21V11l-6-3"></path>
                  <circle cx="9" cy="9" r="1"></circle>
                  <circle cx="9" cy="13" r="1"></circle>
                  <circle cx="9" cy="17" r="1"></circle>
                </svg>
              </div>
              <h3 class="ob-s8-faq-question-text">Can a foreign company own 100% of an Indian company?</h3>
            </div>
            <div class="ob-s8-faq-toggle-btn" aria-label="Toggle answer">
              <span class="ob-s8-toggle-cross"></span>
            </div>
          </div>
          <div class="ob-s8-faq-drawer" id="ob-s8-ans-1">
            <div class="ob-s8-drawer-wrapper">
              <div class="ob-s8-faq-answer-content">
                <p class="ob-s8-faq-answer-text">
                  Foreign investment up to 100% is permitted under the automatic route in many sectors, but the answer depends on the activity, sectoral conditions, investor jurisdiction and ownership chain. Confirm the position before choosing the structure.
                </p>
                <div class="ob-s8-faq-tags">
                  <span class="ob-s8-faq-tag-pill">
                    <span class="ob-s8-faq-tag-dot" style="background: #f59e0b;"></span>
                    100% FDI Automatic Route
                  </span>
                  <span class="ob-s8-faq-tag-pill">
                    <span class="ob-s8-faq-tag-dot" style="background: #10b981;"></span>
                    Sectoral Cap Verification
                  </span>
                  <span class="ob-s8-faq-tag-pill">
                    <span class="ob-s8-faq-tag-dot" style="background: #0ea5e9;"></span>
                    Ownership Chain Analysis
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- FAQ 02 -->
        <div class="ob-s8-faq-card ob-s8-card-02" data-faq="2" tabindex="0" role="button" aria-expanded="false" aria-controls="ob-s8-ans-2">
          <div class="ob-s8-faq-header">
            <div class="ob-s8-faq-left">
              <div class="ob-s8-faq-num">02</div>
              <div class="ob-s8-faq-icon-wrap" aria-label="Structure Matrix Icon">
                <span class="ob-s8-icon-burst"></span>
                <!-- Structural Matrix & Modular Blocks -->
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <rect x="2" y="2" width="8" height="8" rx="2"></rect>
                  <rect x="14" y="2" width="8" height="8" rx="2"></rect>
                  <rect x="2" y="14" width="8" height="8" rx="2"></rect>
                  <rect x="14" y="14" width="8" height="8" rx="2"></rect>
                </svg>
              </div>
              <h3 class="ob-s8-faq-question-text">Which structure is best: subsidiary, branch office, liaison office or LLP?</h3>
            </div>
            <div class="ob-s8-faq-toggle-btn" aria-label="Toggle answer">
              <span class="ob-s8-toggle-cross"></span>
            </div>
          </div>
          <div class="ob-s8-faq-drawer" id="ob-s8-ans-2">
            <div class="ob-s8-drawer-wrapper">
              <div class="ob-s8-faq-answer-content">
                <p class="ob-s8-faq-answer-text">
                  Each route has different permitted activities, ownership, tax, regulatory and operational implications. The right choice requires a comparison based on what you plan to do in India and how you expect the operation to evolve.
                </p>
                <div class="ob-s8-faq-tags">
                  <span class="ob-s8-faq-tag-pill">
                    <span class="ob-s8-faq-tag-dot" style="background: #0284c7;"></span>
                    Wholly Owned Subsidiary (WOS)
                  </span>
                  <span class="ob-s8-faq-tag-pill">
                    <span class="ob-s8-faq-tag-dot" style="background: #8b5cf6;"></span>
                    Branch / Liaison Office
                  </span>
                  <span class="ob-s8-faq-tag-pill">
                    <span class="ob-s8-faq-tag-dot" style="background: #10b981;"></span>
                    Tax & Scope Comparative
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- FAQ 03 -->
        <div class="ob-s8-faq-card ob-s8-card-03" data-faq="3" tabindex="0" role="button" aria-expanded="false" aria-controls="ob-s8-ans-3">
          <div class="ob-s8-faq-header">
            <div class="ob-s8-faq-left">
              <div class="ob-s8-faq-num">03</div>
              <div class="ob-s8-faq-icon-wrap" aria-label="Timeline Rocket Icon">
                <span class="ob-s8-icon-burst"></span>
                <!-- Timeline & Launch Rocket -->
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <circle cx="12" cy="12" r="10"></circle>
                  <polyline points="12 6 12 12 16 14"></polyline>
                </svg>
              </div>
              <h3 class="ob-s8-faq-question-text">How long will it take to set up and launch?</h3>
            </div>
            <div class="ob-s8-faq-toggle-btn" aria-label="Toggle answer">
              <span class="ob-s8-toggle-cross"></span>
            </div>
          </div>
          <div class="ob-s8-faq-drawer" id="ob-s8-ans-3">
            <div class="ob-s8-drawer-wrapper">
              <div class="ob-s8-faq-answer-content">
                <p class="ob-s8-faq-answer-text">
                  Incorporation, bank KYC, registrations, licences, premises and hiring follow different timelines. A reliable proposal separates these workstreams, states its assumptions and identifies dependencies rather than promising one fixed date.
                </p>
                <div class="ob-s8-faq-tags">
                  <span class="ob-s8-faq-tag-pill">
                    <span class="ob-s8-faq-tag-dot" style="background: #059669;"></span>
                    Incorporation: 2–3 Weeks
                  </span>
                  <span class="ob-s8-faq-tag-pill">
                    <span class="ob-s8-faq-tag-dot" style="background: #f59e0b;"></span>
                    Parallel Banking KYC
                  </span>
                  <span class="ob-s8-faq-tag-pill">
                    <span class="ob-s8-faq-tag-dot" style="background: #0284c7;"></span>
                    Clear Milestones
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- FAQ 04 -->
        <div class="ob-s8-faq-card ob-s8-card-04" data-faq="4" tabindex="0" role="button" aria-expanded="false" aria-controls="ob-s8-ans-4">
          <div class="ob-s8-faq-header">
            <div class="ob-s8-faq-left">
              <div class="ob-s8-faq-num">04</div>
              <div class="ob-s8-faq-icon-wrap" aria-label="Documents Icon">
                <span class="ob-s8-icon-burst"></span>
                <!-- Document Checklist & Notarization Seal -->
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                  <polyline points="14 2 14 8 20 8"></polyline>
                  <line x1="16" y1="13" x2="8" y2="13"></line>
                  <line x1="16" y1="17" x2="8" y2="17"></line>
                </svg>
              </div>
              <h3 class="ob-s8-faq-question-text">What documents will the foreign parent and directors need?</h3>
            </div>
            <div class="ob-s8-faq-toggle-btn" aria-label="Toggle answer">
              <span class="ob-s8-toggle-cross"></span>
            </div>
          </div>
          <div class="ob-s8-faq-drawer" id="ob-s8-ans-4">
            <div class="ob-s8-drawer-wrapper">
              <div class="ob-s8-faq-answer-content">
                <p class="ob-s8-faq-answer-text">
                  Requirements depend on the investor, jurisdiction and structure. Foreign documents may require notarisation, apostille or consularisation. We help prepare a structure-specific checklist before filing begins.
                </p>
                <div class="ob-s8-faq-tags">
                  <span class="ob-s8-faq-tag-pill">
                    <span class="ob-s8-faq-tag-dot" style="background: #7c3aed;"></span>
                    Parent Certificate & Charter
                  </span>
                  <span class="ob-s8-faq-tag-pill">
                    <span class="ob-s8-faq-tag-dot" style="background: #0284c7;"></span>
                    Director KYC & Passports
                  </span>
                  <span class="ob-s8-faq-tag-pill">
                    <span class="ob-s8-faq-tag-dot" style="background: #10b981;"></span>
                    Apostille & Notarization Checklist
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- FAQ 05 -->
        <div class="ob-s8-faq-card ob-s8-card-05" data-faq="5" tabindex="0" role="button" aria-expanded="false" aria-controls="ob-s8-ans-5">
          <div class="ob-s8-faq-header">
            <div class="ob-s8-faq-left">
              <div class="ob-s8-faq-num">05</div>
              <div class="ob-s8-faq-icon-wrap" aria-label="Resident Director Icon">
                <span class="ob-s8-icon-burst"></span>
                <!-- Resident Director & Registered Office Shield -->
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                  <circle cx="9" cy="7" r="4"></circle>
                  <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                  <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                </svg>
              </div>
              <h3 class="ob-s8-faq-question-text">Do we need a resident director and a registered office?</h3>
            </div>
            <div class="ob-s8-faq-toggle-btn" aria-label="Toggle answer">
              <span class="ob-s8-toggle-cross"></span>
            </div>
          </div>
          <div class="ob-s8-faq-drawer" id="ob-s8-ans-5">
            <div class="ob-s8-drawer-wrapper">
              <div class="ob-s8-faq-answer-content">
                <p class="ob-s8-faq-answer-text">
                  An Indian company must meet the applicable resident-director and registered-office requirements. The arrangement should be practical, compliant and understood before incorporation.
                </p>
                <div class="ob-s8-faq-tags">
                  <span class="ob-s8-faq-tag-pill">
                    <span class="ob-s8-faq-tag-dot" style="background: #e11d48;"></span>
                    182+ Days Resident Director
                  </span>
                  <span class="ob-s8-faq-tag-pill">
                    <span class="ob-s8-faq-tag-dot" style="background: #0ea5e9;"></span>
                    Commercial Office Address
                  </span>
                  <span class="ob-s8-faq-tag-pill">
                    <span class="ob-s8-faq-tag-dot" style="background: #10b981;"></span>
                    Statutory Compliance
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- FAQ 06 -->
        <div class="ob-s8-faq-card ob-s8-card-06" data-faq="6" tabindex="0" role="button" aria-expanded="false" aria-controls="ob-s8-ans-6">
          <div class="ob-s8-faq-header">
            <div class="ob-s8-faq-left">
              <div class="ob-s8-faq-num">06</div>
              <div class="ob-s8-faq-icon-wrap" aria-label="Ongoing Support Icon">
                <span class="ob-s8-icon-burst"></span>
                <!-- Ongoing Support & Expansion Horizon -->
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                  <polyline points="22 4 12 14.01 9 11.01"></polyline>
                </svg>
              </div>
              <h3 class="ob-s8-faq-question-text">Can Overseas Bridge help after the company is registered?</h3>
            </div>
            <div class="ob-s8-faq-toggle-btn" aria-label="Toggle answer">
              <span class="ob-s8-toggle-cross"></span>
            </div>
          </div>
          <div class="ob-s8-faq-drawer" id="ob-s8-ans-6">
            <div class="ob-s8-drawer-wrapper">
              <div class="ob-s8-faq-answer-content">
                <p class="ob-s8-faq-answer-text">
                  Yes, subject to scope. Support can continue across accounting, payroll, HR administration, compliance coordination, workspace, vendors and expansion.
                </p>
                <div class="ob-s8-faq-tags">
                  <span class="ob-s8-faq-tag-pill">
                    <span class="ob-s8-faq-tag-dot" style="background: #4f46e5;"></span>
                    Accounting & Payroll SLAs
                  </span>
                  <span class="ob-s8-faq-tag-pill">
                    <span class="ob-s8-faq-tag-dot" style="background: #10b981;"></span>
                    Ongoing Tax & GST Filings
                  </span>
                  <span class="ob-s8-faq-tag-pill">
                    <span class="ob-s8-faq-tag-dot" style="background: #f59e0b;"></span>
                    Corporate Advisory
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

      <!-- RIGHT COLUMN: EDITORIAL VISUAL SCENE & CHECKLIST CARD -->
      <div class="ob-s8-editorial-scene">

        <!-- STAGGERED EDITORIAL IMAGES -->
        <div class="ob-s8-image-showcase">
          <!-- Card 1: Modern Corporate Architecture -->
          <div class="ob-s8-image-card-1">
            <span class="ob-s8-badge-float ob-s8-badge-legal">LEGAL &amp; FDI HUBS</span>
            <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=800&q=80" alt="Modern Indian Corporate District" loading="lazy" />
          </div>

          <!-- Card 2: India Entry Advisory - Interactive Modern Corporate Strategic Vector Visual -->
          <div class="ob-s8-image-card-2 ob-s8-advisory-visual-card" aria-label="India Market Entry &amp; Corporate Advisory Visual">
            
            <!-- Atmospheric Glow & Background Mesh -->
            <div class="ob-s8-adv-bg-mesh"></div>
            
            <!-- Vector Composition: Global Connectivity, Strategic India Map & Corporate FDI Routes -->
            <svg class="ob-s8-adv-svg" viewBox="0 0 380 200" fill="none" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg">
              <defs>
                <!-- Gradients -->
                <linearGradient id="s8AdvIndiaGrad" x1="0%" y1="0%" x2="100%" y2="100%">
                  <stop offset="0%" stop-color="rgba(2, 132, 199, 0.12)" />
                  <stop offset="50%" stop-color="rgba(99, 102, 241, 0.10)" />
                  <stop offset="100%" stop-color="rgba(245, 158, 11, 0.14)" />
                </linearGradient>
                
                <linearGradient id="s8AdvRouteGrad1" x1="0%" y1="0%" x2="100%" y2="0%">
                  <stop offset="0%" stop-color="#38bdf8" stop-opacity="0.2" />
                  <stop offset="40%" stop-color="#0284c7" stop-opacity="0.85" />
                  <stop offset="100%" stop-color="#f59e0b" stop-opacity="0.95" />
                </linearGradient>

                <linearGradient id="s8AdvRouteGrad2" x1="0%" y1="0%" x2="100%" y2="100%">
                  <stop offset="0%" stop-color="#818cf8" stop-opacity="0.2" />
                  <stop offset="60%" stop-color="#6366f1" stop-opacity="0.8" />
                  <stop offset="100%" stop-color="#0d9488" stop-opacity="0.9" />
                </linearGradient>
                
                <linearGradient id="s8AdvRouteGrad3" x1="100%" y1="0%" x2="0%" y2="100%">
                  <stop offset="0%" stop-color="#f59e0b" stop-opacity="0.2" />
                  <stop offset="50%" stop-color="#d97706" stop-opacity="0.8" />
                  <stop offset="100%" stop-color="#0284c7" stop-opacity="0.9" />
                </linearGradient>

                <radialGradient id="s8AdvGlowTeal" cx="50%" cy="50%" r="50%">
                  <stop offset="0%" stop-color="#06b6d4" stop-opacity="0.3" />
                  <stop offset="100%" stop-color="#06b6d4" stop-opacity="0" />
                </radialGradient>

                <radialGradient id="s8AdvGlowAmber" cx="50%" cy="50%" r="50%">
                  <stop offset="0%" stop-color="#f59e0b" stop-opacity="0.28" />
                  <stop offset="100%" stop-color="#f59e0b" stop-opacity="0" />
                </radialGradient>

                <radialGradient id="s8AdvGlowIndigo" cx="50%" cy="50%" r="50%">
                  <stop offset="0%" stop-color="#6366f1" stop-opacity="0.25" />
                  <stop offset="100%" stop-color="#6366f1" stop-opacity="0" />
                </radialGradient>

                <!-- Soft Grid Pattern -->
                <pattern id="s8AdvIsoGrid" width="24" height="24" patternUnits="userSpaceOnUse">
                  <path d="M 24 0 L 0 0 0 24" fill="none" stroke="rgba(148, 163, 184, 0.12)" stroke-width="0.75" />
                  <circle cx="24" cy="0" r="1" fill="rgba(148, 163, 184, 0.2)" />
                </pattern>
              </defs>

              <!-- Grid Canvas Background -->
              <rect width="100%" height="100%" fill="url(#s8AdvIsoGrid)" />
              
              <!-- Background Radial Lighting -->
              <circle cx="250" cy="100" r="85" fill="url(#s8AdvGlowTeal)" class="ob-s8-adv-pulse-glow" />
              <circle cx="220" cy="65" r="60" fill="url(#s8AdvGlowAmber)" class="ob-s8-adv-pulse-glow-alt" />
              <circle cx="80" cy="140" r="70" fill="url(#s8AdvGlowIndigo)" />

              <!-- Strategic India Silhouette Outline & Geometry -->
              <g class="ob-s8-adv-india-group" transform="translate(45, -8)">
                <!-- Soft Filled Silhouette -->
                <path d="M190 28 L202 24 L212 32 L206 48 L218 60 L234 68 L244 82 L238 98 L248 108 L232 128 L220 152 L204 186 L194 182 L184 150 L176 132 L164 122 L150 114 L146 98 L160 92 L172 82 L178 58 L184 42 Z" 
                      fill="url(#s8AdvIndiaGrad)" 
                      stroke="rgba(2, 132, 199, 0.4)" 
                      stroke-width="1.2" 
                      stroke-linejoin="round"
                      class="ob-s8-adv-india-polygon" />
                
                <!-- Coordinate Gridlines inside India -->
                <path d="M165 80 Q 200 86 235 80" stroke="rgba(2, 132, 199, 0.18)" stroke-width="0.8" stroke-dasharray="3 3" />
                <path d="M160 110 Q 200 118 240 110" stroke="rgba(2, 132, 199, 0.18)" stroke-width="0.8" stroke-dasharray="3 3" />
                <path d="M174 140 Q 200 146 226 140" stroke="rgba(2, 132, 199, 0.18)" stroke-width="0.8" stroke-dasharray="3 3" />
                <path d="M200 30 L200 180" stroke="rgba(245, 158, 11, 0.15)" stroke-width="0.8" stroke-dasharray="3 3" />
              </g>

              <!-- Global Connection Entry Routes (Curved Inbound Arcs with Dash Animation) -->
              <g class="ob-s8-adv-routes">
                <!-- Route 1: US / Americas Gateway -> Delhi (NCR Regulatory Hub) -->
                <path d="M 22,35 C 80,18 160,30 242,54" 
                      stroke="url(#s8AdvRouteGrad1)" 
                      stroke-width="1.8" 
                      stroke-linecap="round" 
                      class="ob-s8-adv-route-line ob-s8-adv-route-1" />
                
                <!-- Route 2: EMEA / London Gateway -> Mumbai (Financial & Banking Hub) -->
                <path d="M 18,95 C 75,70 140,85 218,110" 
                      stroke="url(#s8AdvRouteGrad2)" 
                      stroke-width="2" 
                      stroke-linecap="round" 
                      class="ob-s8-adv-route-line ob-s8-adv-route-2" />

                <!-- Route 3: APAC / Singapore Gateway -> Bengaluru (Technology & Operations Hub) -->
                <path d="M 360,50 C 320,68 280,110 248,138" 
                      stroke="url(#s8AdvRouteGrad3)" 
                      stroke-width="1.8" 
                      stroke-linecap="round" 
                      class="ob-s8-adv-route-line ob-s8-adv-route-3" />

                <!-- Route 4: Domestic Corridor (Delhi -> Mumbai -> Bengaluru) -->
                <path d="M 242,54 Q 225,82 218,110 T 248,138" 
                      stroke="rgba(245, 158, 11, 0.55)" 
                      stroke-width="1.2" 
                      stroke-dasharray="2 4" 
                      fill="none" />
              </g>

              <!-- Global Gateway Source Points (Left & Right) -->
              <g class="ob-s8-adv-global-gateways">
                <!-- Global Origin 1 -->
                <circle cx="22" cy="35" r="3" fill="#0284c7" />
                <circle cx="22" cy="35" r="6" stroke="#0284c7" stroke-width="0.8" opacity="0.5" />
                <text x="32" y="38" font-size="7" font-weight="700" fill="#64748b" letter-spacing="0.05em">US / EMEA</text>

                <!-- Global Origin 2 -->
                <circle cx="18" cy="95" r="3" fill="#6366f1" />
                <circle cx="18" cy="95" r="6" stroke="#6366f1" stroke-width="0.8" opacity="0.5" />
                <text x="28" y="98" font-size="7" font-weight="700" fill="#64748b" letter-spacing="0.05em">GLOBAL HQ</text>

                <!-- Global Origin 3 (APAC) -->
                <circle cx="360" cy="50" r="3" fill="#f59e0b" />
                <circle cx="360" cy="50" r="6" stroke="#f59e0b" stroke-width="0.8" opacity="0.5" />
                <text x="320" y="44" font-size="7" font-weight="700" fill="#64748b" letter-spacing="0.05em">APAC / SG</text>
              </g>

              <!-- Pulsing Strategic Hub Nodes in India -->
              <g class="ob-s8-adv-hubs">
                <!-- Hub 1: Delhi / NCR (MCA / Legal / Policy) -->
                <g class="ob-s8-adv-hub ob-s8-hub-delhi" transform="translate(242, 54)">
                  <circle cx="0" cy="0" r="10" fill="rgba(245, 158, 11, 0.15)" class="ob-s8-hub-pulse-ring" />
                  <circle cx="0" cy="0" r="5.5" fill="rgba(245, 158, 11, 0.3)" />
                  <circle cx="0" cy="0" r="3.2" fill="#d97706" />
                  <text x="12" y="3" font-size="7.5" font-weight="800" fill="#0f172a">DELHI / MCA</text>
                </g>

                <!-- Hub 2: Mumbai (Financial & FDI Gateway) -->
                <g class="ob-s8-adv-hub ob-s8-hub-mumbai" transform="translate(218, 110)">
                  <circle cx="0" cy="0" r="12" fill="rgba(2, 132, 199, 0.18)" class="ob-s8-hub-pulse-ring" style="animation-delay: 0.6s;" />
                  <circle cx="0" cy="0" r="6" fill="rgba(2, 132, 199, 0.35)" />
                  <circle cx="0" cy="0" r="3.5" fill="#0284c7" />
                  <text x="-48" y="3" font-size="7.5" font-weight="800" fill="#0f172a">MUMBAI</text>
                </g>

                <!-- Hub 3: Bengaluru (Tech & Global Capability Center) -->
                <g class="ob-s8-adv-hub ob-s8-hub-blr" transform="translate(248, 138)">
                  <circle cx="0" cy="0" r="10" fill="rgba(99, 102, 241, 0.18)" class="ob-s8-hub-pulse-ring" style="animation-delay: 1.2s;" />
                  <circle cx="0" cy="0" r="5.5" fill="rgba(99, 102, 241, 0.3)" />
                  <circle cx="0" cy="0" r="3.2" fill="#6366f1" />
                  <text x="12" y="3" font-size="7.5" font-weight="800" fill="#0f172a">BENGALURU</text>
                </g>
              </g>

              <!-- Animated Data Pulses Traveling Along Routes -->
              <circle cx="0" cy="0" r="2.5" fill="#f59e0b" class="ob-s8-adv-packet ob-s8-packet-1">
                <animateMotion path="M 22,35 C 80,18 160,30 242,54" dur="3.5s" repeatCount="indefinite" />
              </circle>
              <circle cx="0" cy="0" r="2.5" fill="#0284c7" class="ob-s8-adv-packet ob-s8-packet-2">
                <animateMotion path="M 18,95 C 75,70 140,85 218,110" dur="4.2s" repeatCount="indefinite" begin="0.8s" />
              </circle>
              <circle cx="0" cy="0" r="2.5" fill="#6366f1" class="ob-s8-adv-packet ob-s8-packet-3">
                <animateMotion path="M 360,50 C 320,68 280,110 248,138" dur="3.8s" repeatCount="indefinite" begin="1.5s" />
              </circle>
            </svg>

            <!-- Floating Micro Metric Badges (Corporate Advisory & FDI Highlights) -->
            <div class="ob-s8-adv-pill ob-s8-adv-pill-fdi" aria-hidden="true">
              <span class="ob-s8-pill-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                </svg>
              </span>
              <span class="ob-s8-pill-text">100% FDI Route</span>
            </div>

            <div class="ob-s8-adv-pill ob-s8-adv-pill-compliance" aria-hidden="true">
              <span class="ob-s8-pill-dot"></span>
              <span class="ob-s8-pill-text">MCA &amp; RBI Advisory</span>
            </div>

            <!-- Primary Category Badge (Cleanly Integrated) -->
            <span class="ob-s8-badge-float ob-s8-badge-strategy">
              <span class="ob-s8-badge-live-beacon"></span>
              INDIA ENTRY ADVISORY
            </span>

          </div>
        </div>

        <!-- FLOATING MINI INDIA ENTRY CHECKLIST CARD -->
        <div class="ob-s8-checklist-card">
          <div class="ob-s8-checklist-top">
            <h4 class="ob-s8-checklist-title">
              <span class="ob-s8-checklist-live-dot"></span>
              <span>India Entry Readiness Checklist</span>
            </h4>
            <span style="font-size: 0.76rem; font-weight: 700; color: #64748b;">STAGE 01 READY</span>
          </div>
          <div class="ob-s8-checklist-items">
            <div class="ob-s8-checklist-item">
              <span class="ob-s8-check-icon">✓</span>
              <span>Entity Structure &amp; Permitted Activity Match</span>
            </div>
            <div class="ob-s8-checklist-item">
              <span class="ob-s8-check-icon">✓</span>
              <span>Foreign Direct Investment (FDI) Route Review</span>
            </div>
            <div class="ob-s8-checklist-item">
              <span class="ob-s8-check-icon">✓</span>
              <span>Resident Director &amp; Registered Office Validation</span>
            </div>
            <div class="ob-s8-checklist-item">
              <span class="ob-s8-check-icon">✓</span>
              <span>Multi-Currency Corporate Banking Protocol</span>
            </div>
            <div class="ob-s8-checklist-item">
              <span class="ob-s8-check-icon">✓</span>
              <span>Post-Incorporation GST, PAN &amp; Statutory Setup</span>
            </div>
          </div>
        </div>

      </div>

    </div>

    <!-- 3. SECTION CTA -->
    <div class="ob-s8-cta-wrapper">
      <a href="<?php echo esc_url( home_url( '/faqs' ) ); ?>" class="ob-s8-cta-btn">
        <span>View All India Setup FAQs</span>
        <span class="ob-s8-cta-arrow">&rarr;</span>
      </a>
    </div>

  </div>

  <!-- SCOPED CLIENT-SIDE INTERACTION JAVASCRIPT -->
  <script id="ob-s8-scoped-master-js">
  (function() {
    'use strict';

    function initSectionEightKnowledgeHub() {
      var sec = document.getElementById('ob-section-faq-knowledge-hub');
      if (!sec) return;

      var cards = sec.querySelectorAll('.ob-s8-faq-card');
      var iconWraps = sec.querySelectorAll('.ob-s8-faq-icon-wrap');

      // 1. Accordion Toggle Logic
      cards.forEach(function(card) {
        card.addEventListener('click', function(e) {
          var isCurrentlyActive = this.classList.contains('is-active');
          cards.forEach(function(c) {
            c.classList.remove('is-active');
            c.setAttribute('aria-expanded', 'false');
          });
          if (!isCurrentlyActive) {
            this.classList.add('is-active');
            this.setAttribute('aria-expanded', 'true');
          }
        });

        card.addEventListener('keydown', function(e) {
          if (e.key === 'Enter' || e.key === ' ') {
            e.preventDefault();
            var isCurrentlyActive = this.classList.contains('is-active');
            cards.forEach(function(c) {
              c.classList.remove('is-active');
              c.setAttribute('aria-expanded', 'false');
            });
            if (!isCurrentlyActive) {
              this.classList.add('is-active');
              this.setAttribute('aria-expanded', 'true');
            }
          }
        });
      });

      // 2. Micro-burst reaction on icon click
      iconWraps.forEach(function(icon) {
        icon.addEventListener('click', function(e) {
          e.stopPropagation();
          var parentCard = this.closest('.ob-s8-faq-card');
          if (parentCard) {
            var isCurrentlyActive = parentCard.classList.contains('is-active');
            cards.forEach(function(c) {
              c.classList.remove('is-active');
              c.setAttribute('aria-expanded', 'false');
            });
            if (!isCurrentlyActive) {
              parentCard.classList.add('is-active');
              parentCard.setAttribute('aria-expanded', 'true');
            }
          }

          var wrap = this;
          wrap.classList.add('is-bursting');
          setTimeout(function() {
            wrap.classList.remove('is-bursting');
          }, 500);
        });
      });

      // 3. Subtle Desktop Mouse Parallax on Visual Cards
      if (window.innerWidth > 1024) {
        sec.addEventListener('mousemove', function(e) {
          var rect = sec.getBoundingClientRect();
          var x = (e.clientX - rect.left) / rect.width - 0.5;
          var y = (e.clientY - rect.top) / rect.height - 0.5;

          var img1 = sec.querySelector('.ob-s8-image-card-1');
          var img2 = sec.querySelector('.ob-s8-image-card-2');
          var checklist = sec.querySelector('.ob-s8-checklist-card');

          if (img1) img1.style.transform = 'translate(' + (x * 8) + 'px, ' + (y * 8) + 'px)';
          if (img2) img2.style.transform = 'translate(' + (x * -10) + 'px, ' + (y * -10) + 'px)';
          if (checklist) checklist.style.transform = 'translate(' + (x * 5) + 'px, ' + (y * 5) + 'px)';
        });
      }
    }

    if (document.readyState === 'loading') {
      document.addEventListener('DOMContentLoaded', initSectionEightKnowledgeHub);
    } else {
      initSectionEightKnowledgeHub();
    }
    window.addEventListener('load', initSectionEightKnowledgeHub);
  })();
  </script>
</section>

<!-- ==========================================================================
     SECTION 9: GET A PRACTICAL INDIA ENTRY ROADMAP (FINAL LEAD GENERATION)
     ========================================================================== -->

<section class="section-padding ob-s9-section" id="roadmap-form-section">

  <!-- SCOPED MASTER CSS FOR SECTION 9 -->
  <style id="ob-s9-scoped-master-css">
    /* ==========================================================================
       SECTION 09 MASTER SCOPED CSS (PREMIUM PLAYFUL & EDITORIAL CONVERSION)
       ========================================================================== */
    .ob-s9-section {
      background: #fffdf9 !important;
      position: relative !important;
      overflow: hidden !important;
      padding: 110px 0 125px 0 !important;
      border-top: 1px solid #fef3c7 !important;
      box-sizing: border-box !important;
      font-family: 'Outfit', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif !important;
    }

    /* --------------------------------------------------------------------------
       1. UNIQUE SECTION 9 BACKGROUND ATMOSPHERE (WARM CREAM + SOFT COLOR BLOBS)
       -------------------------------------------------------------------------- */
    .ob-s9-bg-blob {
      position: absolute;
      border-radius: 50%;
      filter: blur(90px);
      pointer-events: none;
      z-index: 1;
      opacity: 0.40;
      will-change: transform;
    }
    .ob-s9-blob-amber {
      width: 520px;
      height: 520px;
      background: radial-gradient(circle, #fde68a 0%, rgba(253, 230, 138, 0) 70%);
      top: -60px;
      right: 5%;
      animation: obS9FloatA 22s ease-in-out infinite alternate !important;
    }
    .ob-s9-blob-cyan {
      width: 500px;
      height: 500px;
      background: radial-gradient(circle, #bae6fd 0%, rgba(186, 230, 253, 0) 70%);
      bottom: -40px;
      left: 3%;
      animation: obS9FloatB 26s ease-in-out infinite alternate !important;
    }
    .ob-s9-blob-lavender {
      width: 460px;
      height: 460px;
      background: radial-gradient(circle, #ede9fe 0%, rgba(237, 233, 254, 0) 70%);
      top: 35%;
      left: 20%;
      animation: obS9FloatC 20s ease-in-out infinite alternate !important;
    }

    @keyframes obS9FloatA {
      0% { transform: translate(0, 0) scale(1); }
      100% { transform: translate(-30px, 25px) scale(1.08); }
    }
    @keyframes obS9FloatB {
      0% { transform: translate(0, 0) scale(0.95); }
      100% { transform: translate(30px, -28px) scale(1.10); }
    }
    @keyframes obS9FloatC {
      0% { transform: translate(0, 0) scale(1); }
      100% { transform: translate(-22px, -20px) scale(1.06); }
    }

    /* Floating Playful Abstract Graphic Objects */
    .ob-s9-decor-obj {
      position: absolute;
      pointer-events: none;
      z-index: 3;
      opacity: 0.75;
      will-change: transform;
      transition: transform 0.25s cubic-bezier(0.16, 1, 0.3, 1);
    }
    .ob-s9-decor-1 { top: 12%; left: 3%; animation: obS9FloatSpin 18s linear infinite !important; }
    .ob-s9-decor-2 { top: 22%; left: 40%; animation: obS9FloatV 9s ease-in-out infinite alternate !important; }
    .ob-s9-decor-3 { top: 8%; right: 4%; animation: obS9FloatH 12s ease-in-out infinite alternate !important; }
    .ob-s9-decor-4 { bottom: 25%; left: 2%; animation: obS9FloatV 14s ease-in-out infinite alternate !important; }
    .ob-s9-decor-5 { bottom: 12%; right: 5%; animation: obS9FloatSpin 22s linear infinite !important; }
    .ob-s9-decor-6 { top: 52%; right: 2%; animation: obS9SmileBob 8s ease-in-out infinite alternate !important; }

    @keyframes obS9FloatV {
      0% { transform: translateY(0); }
      100% { transform: translateY(-16px); }
    }
    @keyframes obS9FloatH {
      0% { transform: translateX(0); }
      100% { transform: translateX(18px); }
    }
    @keyframes obS9FloatSpin {
      0% { transform: rotate(0deg); }
      100% { transform: rotate(360deg); }
    }
    @keyframes obS9SmileBob {
      0% { transform: translateY(0) rotate(0deg); }
      100% { transform: translateY(-12px) rotate(-6deg); }
    }

    /* --------------------------------------------------------------------------
       2. SECTION CONTAINER & HEADER
       -------------------------------------------------------------------------- */
    .ob-s9-container {
      max-width: 1280px;
      margin: 0 auto;
      padding: 0 24px;
      position: relative;
      z-index: 10;
      box-sizing: border-box;
    }

    .ob-s9-header {
      text-align: center;
      margin-bottom: 52px;
      position: relative;
    }
    .ob-s9-heading-wrap {
      display: inline-block;
      position: relative;
    }
    .ob-s9-title {
      font-size: clamp(34px, 3.8vw, 48px) !important;
      font-weight: 800 !important;
      color: #0f172a !important;
      line-height: 1.2 !important;
      letter-spacing: -0.03em !important;
      margin: 0 0 16px 0 !important;
      max-width: 900px !important;
      text-align: center !important;
    }
    .ob-s9-subtitle {
      font-size: clamp(15.5px, 1.2vw, 18px) !important;
      line-height: 1.62 !important;
      color: #64748b !important;
      max-width: 780px !important;
      margin: 0 auto !important;
      text-align: center !important;
    }

    /* Decorative Header Arrow */
    .ob-s9-header-arrow {
      position: absolute;
      top: -12px;
      right: -60px;
      width: 48px;
      height: 44px;
      pointer-events: none;
      animation: obS9ArrowSway 5s ease-in-out infinite alternate !important;
    }
    @keyframes obS9ArrowSway {
      0% { transform: translate(0, 0) rotate(0deg); }
      100% { transform: translate(6px, -5px) rotate(6deg); }
    }

    /* Animated Underline */
    .ob-s9-underline-highlight {
      position: relative;
      display: inline-block;
      white-space: nowrap;
    }
    .ob-s9-underline-highlight::after {
      content: '';
      position: absolute;
      left: 0;
      bottom: 2px;
      width: 100%;
      height: 7px;
      background: linear-gradient(90deg, #f59e0b, #e11d48);
      opacity: 0.35;
      border-radius: 4px;
      z-index: -1;
      transform-origin: left;
      animation: obS9LineGrow 1.5s cubic-bezier(0.16, 1, 0.3, 1) forwards !important;
    }
    @keyframes obS9LineGrow {
      0% { transform: scaleX(0); }
      100% { transform: scaleX(1); }
    }

    /* --------------------------------------------------------------------------
       3. ASYMMETRIC 2-COLUMN GRID (44% VISUAL STORY / 56% FORM CARD)
       -------------------------------------------------------------------------- */
    .ob-s9-grid {
      display: grid;
      grid-template-columns: 44% 56%;
      gap: 36px;
      align-items: start;
      position: relative;
    }

    /* --------------------------------------------------------------------------
       4. LEFT COLUMN: VISUAL STORYTELLING & INDIA ENTRY JOURNEY
       -------------------------------------------------------------------------- */
    .ob-s9-visual-story {
      position: relative;
      display: flex;
      flex-direction: column;
      gap: 22px;
    }

    /* Staggered Visual Image Cards */
    .ob-s9-showcase {
      position: relative;
      min-height: 270px;
    }
    .ob-s9-img-card-1 {
      position: relative;
      width: 84%;
      height: 210px;
      border-radius: 24px;
      overflow: hidden;
      box-shadow: 0 16px 36px -8px rgba(15, 23, 42, 0.12);
      border: 2px solid #ffffff;
      background: #0f172a;
      animation: obS9ImgFloatA 11s ease-in-out infinite alternate !important;
      transition: transform 0.4s ease, box-shadow 0.4s ease;
    }
    .ob-s9-img-card-1 img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      opacity: 0.92;
      transition: transform 0.6s ease;
    }
    .ob-s9-img-card-2 {
      position: absolute;
      top: 95px;
      right: 0;
      width: 64%;
      height: 180px;
      border-radius: 22px;
      overflow: hidden;
      box-shadow: 0 18px 40px -6px rgba(15, 23, 42, 0.18);
      border: 3px solid #ffffff;
      background: #0c152c;
      z-index: 4;
      animation: obS9ImgFloatB 13s ease-in-out infinite alternate !important;
      transition: transform 0.4s ease, box-shadow 0.4s ease;
    }
    .ob-s9-network-svg {
      width: 100%;
      height: 100%;
      display: block;
      object-fit: cover;
    }
    .ob-s9-node-pulse {
      animation: obS9NodePulseRing 2.6s ease-out infinite;
      transform-origin: center;
    }
    @keyframes obS9NodePulseRing {
      0% { r: 5; opacity: 0.8; }
      70% { r: 12; opacity: 0; }
      100% { r: 12; opacity: 0; }
    }
    .ob-s9-map-path {
      animation: obS9MapGlow 6s ease-in-out infinite alternate;
    }
    @keyframes obS9MapGlow {
      0% { stroke-opacity: 0.35; filter: drop-shadow(0 0 4px rgba(14, 165, 233, 0.2)); }
      100% { stroke-opacity: 0.7; filter: drop-shadow(0 0 12px rgba(14, 165, 233, 0.5)); }
    }
    .ob-s9-img-card-2 img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      opacity: 0.94;
      transition: transform 0.6s ease;
    }

    @keyframes obS9ImgFloatA {
      0% { transform: translateY(0) rotate(0deg); }
      100% { transform: translateY(-7px) rotate(-1deg); }
    }
    @keyframes obS9ImgFloatB {
      0% { transform: translateY(0) rotate(0deg); }
      100% { transform: translateY(8px) rotate(1.5deg); }
    }

    @media (hover: hover) {
      .ob-s9-img-card-1:hover,
      .ob-s9-img-card-2:hover {
        transform: translateY(-5px) scale(1.02);
        box-shadow: 0 24px 48px -10px rgba(15, 23, 42, 0.22);
      }
      .ob-s9-img-card-1:hover img {
        transform: scale(1.06);
      }
    }

    /* Floating Image Badges */
    .ob-s9-img-badge {
      position: absolute;
      top: 12px;
      left: 12px;
      display: inline-flex;
      align-items: center;
      gap: 6px;
      font-size: 0.70rem;
      font-weight: 800;
      letter-spacing: 0.06em;
      text-transform: uppercase;
      padding: 4px 11px;
      border-radius: 16px;
      backdrop-filter: blur(8px);
      -webkit-backdrop-filter: blur(8px);
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
      z-index: 5;
    }
    .ob-s9-badge-gold {
      background: rgba(254, 243, 199, 0.95);
      color: #92400e;
      border: 1px solid #fde68a;
    }
    .ob-s9-badge-blue {
      background: rgba(224, 242, 254, 0.95);
      color: #0369a1;
      border: 1px solid #bae6fd;
    }

    /* Roadmap Generation Process Flow Card */
    .ob-s9-process-card {
      background: rgba(255, 255, 255, 0.96);
      backdrop-filter: blur(20px);
      -webkit-backdrop-filter: blur(20px);
      border: 1.5px solid #fde68a;
      border-radius: 24px;
      padding: 24px 26px;
      margin-top: 24px;
      box-shadow: 0 16px 36px -6px rgba(245, 158, 11, 0.08), 0 2px 6px rgba(0, 0, 0, 0.02);
      position: relative;
      z-index: 5;
    }
    .ob-s9-process-header {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-bottom: 16px;
      padding-bottom: 12px;
      border-bottom: 1px dashed #fde68a;
    }
    .ob-s9-process-title {
      font-size: 0.86rem !important;
      font-weight: 800 !important;
      letter-spacing: 0.04em !important;
      color: #0f172a !important;
      text-transform: uppercase !important;
      margin: 0 !important;
      display: flex;
      align-items: center;
      gap: 8px;
    }
    .ob-s9-live-dot {
      width: 8px;
      height: 8px;
      border-radius: 50%;
      background: #f59e0b;
      box-shadow: 0 0 0 rgba(245, 158, 11, 0.5);
      animation: obS9DotPulse 2s infinite !important;
    }
    @keyframes obS9DotPulse {
      0% { box-shadow: 0 0 0 0 rgba(245, 158, 11, 0.7); }
      70% { box-shadow: 0 0 0 8px rgba(245, 158, 11, 0); }
      100% { box-shadow: 0 0 0 0 rgba(245, 158, 11, 0); }
    }

    .ob-s9-process-nodes {
      display: flex;
      flex-direction: column;
      gap: 12px;
      position: relative;
    }
    .ob-s9-process-node {
      display: flex;
      align-items: center;
      gap: 12px;
      font-size: 0.86rem;
      font-weight: 700;
      color: #334155;
    }
    .ob-s9-node-num {
      width: 24px;
      height: 24px;
      border-radius: 50%;
      background: #fef3c7;
      color: #b45309;
      border: 1px solid #fde68a;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 0.75rem;
      font-weight: 800;
      flex-shrink: 0;
    }

    /* Hand-Drawn Connecting SVG Arrow from Visual to Form */
    
    
    @keyframes obS9ArrowDash {
      from { stroke-dashoffset: 80; }
      to { stroke-dashoffset: 0; }
    }

    /* --------------------------------------------------------------------------
       5. RIGHT COLUMN: PREMIUM "INDIA ENTRY PLANNER" FORM CARD
       -------------------------------------------------------------------------- */
    .ob-s9-form-card {
      background: rgba(255, 255, 255, 0.97) !important;
      backdrop-filter: blur(24px) !important;
      -webkit-backdrop-filter: blur(24px) !important;
      border: 1.5px solid #fde68a !important;
      border-radius: 28px !important;
      padding: 36px 40px !important;
      box-shadow: 0 24px 56px -12px rgba(245, 158, 11, 0.12), 0 4px 16px rgba(15, 23, 42, 0.03) !important;
      position: relative;
      z-index: 5;
    }

    .ob-s9-form-header {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-bottom: 24px;
      padding-bottom: 16px;
      border-bottom: 1px dashed #e2e8f0;
    }
    .ob-s9-form-badge {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      font-size: 0.76rem;
      font-weight: 800;
      letter-spacing: 0.08em;
      text-transform: uppercase;
      color: #b45309;
      background: #fef3c7;
      border: 1px solid #fde68a;
      border-radius: 16px;
      padding: 4px 14px;
    }
    .ob-s9-form-scope-tag {
      font-size: 0.78rem;
      font-weight: 700;
      color: #059669;
      display: flex;
      align-items: center;
      gap: 6px;
    }

        /* 2-Column Responsive Form Grid (With minmax to prevent column squeezing) */
    .ob-s9-form-grid {
      display: grid !important;
      grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
      gap: 18px 20px !important;
      width: 100% !important;
    }

    .ob-s9-field-group {
      display: flex !important;
      flex-direction: column !important;
      position: relative !important;
      min-width: 0 !important;
      width: 100% !important;
      box-sizing: border-box !important;
    }
    .ob-s9-field-span2 {
      grid-column: 1 / -1 !important;
      min-width: 0 !important;
      width: 100% !important;
    }

    .ob-s9-label {
      font-size: 0.86rem !important;
      font-weight: 700 !important;
      color: #334155 !important;
      margin-bottom: 7px !important;
      display: flex;
      align-items: center;
      gap: 6px;
    }
    .ob-s9-req-star {
      color: #e11d48;
      font-weight: 800;
    }

    /* Input Field Container with SVG Icon */
    .ob-s9-input-wrap {
      position: relative;
      display: flex;
      align-items: center;
    }
    .ob-s9-field-icon {
      position: absolute;
      left: 14px;
      width: 18px;
      height: 18px;
      color: #94a3b8;
      pointer-events: none;
      transition: color 0.28s ease, transform 0.28s ease;
      z-index: 2;
    }

    .ob-s9-input,
    .ob-s9-select,
    .ob-s9-textarea {
      width: 100% !important;
      padding: 13px 14px 13px 42px !important;
      font-size: 0.94rem !important;
      font-family: inherit !important;
      color: #0f172a !important;
      background: #f8fafc !important;
      border: 1.5px solid #e2e8f0 !important;
      border-radius: 14px !important;
      box-sizing: border-box !important;
      outline: none !important;
      transition: border-color 0.28s cubic-bezier(0.16, 1, 0.3, 1), 
                  box-shadow 0.28s cubic-bezier(0.16, 1, 0.3, 1), 
                  background-color 0.28s ease !important;
    }
    .ob-s9-textarea {
      padding-top: 14px !important;
      min-height: 105px !important;
      resize: vertical !important;
    }

    /* Polished Field Focus States */
    .ob-s9-input:focus,
    .ob-s9-select:focus,
    .ob-s9-textarea:focus {
      background: #ffffff !important;
      border-color: #f59e0b !important;
      box-shadow: 0 0 0 3.5px rgba(245, 158, 11, 0.18) !important;
    }
    .ob-s9-input-wrap:focus-within .ob-s9-field-icon {
      color: #d97706 !important;
      transform: scale(1.12);
    }

    /* --------------------------------------------------------------------------
       6. FORM CTA BUTTON & SUBMISSION FEEDBACK
       -------------------------------------------------------------------------- */
    .ob-s9-submit-wrap {
      grid-column: span 2;
      text-align: center;
      margin-top: 8px;
    }
    .ob-s9-submit-btn {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 10px;
      width: 100%;
      padding: 16px 36px !important;
      font-size: 1.05rem !important;
      font-weight: 800 !important;
      border-radius: 16px !important;
      border: none !important;
      background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%) !important;
      color: #ffffff !important;
      cursor: pointer !important;
      box-shadow: 0 12px 28px -4px rgba(245, 158, 11, 0.45) !important;
      transition: transform 0.28s cubic-bezier(0.16, 1, 0.3, 1), 
                  box-shadow 0.28s cubic-bezier(0.16, 1, 0.3, 1), 
                  filter 0.28s ease !important;
    }
    .ob-s9-submit-btn svg {
      transition: transform 0.28s cubic-bezier(0.16, 1, 0.3, 1);
    }
    @media (hover: hover) {
      .ob-s9-submit-btn:hover {
        transform: translateY(-3px) !important;
        box-shadow: 0 16px 36px -6px rgba(245, 158, 11, 0.55) !important;
        filter: brightness(1.04);
      }
      .ob-s9-submit-btn:hover svg {
        transform: translateX(5px);
      }
    }
    .ob-s9-submit-btn:active {
      transform: translateY(1px) scale(0.99) !important;
    }

    .ob-s9-response-msg {
      margin-top: 16px;
      padding: 14px 20px;
      border-radius: 14px;
      background: #ecfdf5;
      color: #065f46;
      border: 1px solid #a7f3d0;
      font-size: 0.92rem;
      font-weight: 700;
      line-height: 1.5;
      text-align: left;
    }

        /* ==========================================================================
       SECTION 9 RESPONSIVE MULTI-DEVICE MASTER RULES (MOBILE, TABLET, LAPTOP, DESKTOP)
       ========================================================================== */
    .ob-s9-section {
      overflow-x: clip !important;
      position: relative !important;
      width: 100% !important;
    }

    @media (max-width: 1024px) {
      .ob-s9-section {
        padding: 80px 0 90px 0 !important;
      }
      .ob-s9-grid {
        grid-template-columns: 1fr !important;
        gap: 44px !important;
      }
      .ob-s9-visual-story {
        order: 2 !important;
      }
      .ob-s9-form-card {
        order: 1 !important;
        padding: 32px 28px !important;
      }
    }

    /* Tablet, Large Phone & Mobile 1-Column Responsive Stacking (<= 860px) */
    @media (max-width: 860px) {
      .ob-s9-section {
        padding: 60px 0 70px 0 !important;
      }
      .ob-s9-container {
        padding: 0 16px !important;
        max-width: 100% !important;
      }
      .ob-s9-form-card {
        padding: 26px 20px !important;
        border-radius: 22px !important;
        width: 100% !important;
        box-sizing: border-box !important;
      }
      .ob-s9-form-grid {
        display: flex !important;
        flex-direction: column !important;
        gap: 16px !important;
        width: 100% !important;
      }
      .ob-s9-field-group,
      .ob-s9-field-span2,
      .ob-s9-submit-wrap {
        width: 100% !important;
        min-width: 0 !important;
        grid-column: 1 / -1 !important;
      }
      .ob-s9-input,
      .ob-s9-select,
      .ob-s9-textarea {
        width: 100% !important;
        font-size: 0.95rem !important;
        box-sizing: border-box !important;
      }
      .ob-s9-showcase {
        min-height: 220px !important;
      }
      .ob-s9-img-card-1 {
        width: 90% !important;
        height: 170px !important;
      }
      .ob-s9-img-card-2 {
        width: 70% !important;
        height: 140px !important;
        top: 80px !important;
      }
      .ob-s9-process-card {
        padding: 20px 18px !important;
        border-radius: 18px !important;
      }
      .ob-s9-submit-btn {
        width: 100% !important;
        padding: 16px 24px !important;
        font-size: 1rem !important;
      }
    }

    /* Small Mobile Devices (<= 480px) */
    @media (max-width: 480px) {
      .ob-s9-form-card {
        padding: 20px 14px !important;
        border-radius: 18px !important;
      }
      .ob-s9-form-header {
        flex-direction: column !important;
        align-items: flex-start !important;
        gap: 8px !important;
        margin-bottom: 18px !important;
      }
      .ob-s9-label {
        font-size: 0.82rem !important;
        margin-bottom: 5px !important;
      }
      .ob-s9-input,
      .ob-s9-select,
      .ob-s9-textarea {
        padding: 12px 12px 12px 38px !important;
        font-size: 0.88rem !important;
        border-radius: 12px !important;
      }
      .ob-s9-field-icon {
        left: 11px !important;
        width: 16px !important;
        height: 16px !important;
      }
      .ob-s9-textarea {
        min-height: 90px !important;
      }
      .ob-s9-title {
        font-size: clamp(1.70rem, 6.5vw, 2.1rem) !important;
      }
    }

    /* Accessibility reduced motion */
    @media (prefers-reduced-motion: reduce) {
      .ob-s9-bg-blob,
      .ob-s9-decor-obj,
      .ob-s9-header-arrow,
      .ob-s9-img-card-1,
      .ob-s9-img-card-2,
      
    }
  </style>

  <!-- BACKGROUND ATMOSPHERIC RADIAL BLOBS -->
  <div class="ob-s9-bg-blob ob-s9-blob-amber"></div>
  <div class="ob-s9-bg-blob ob-s9-blob-cyan"></div>
  <div class="ob-s9-bg-blob ob-s9-blob-lavender"></div>

  <!-- 6 PLAYFUL FLOATING VECTOR GRAPHIC OBJECTS -->
  <svg class="ob-s9-decor-obj ob-s9-decor-1" width="22" height="22" viewBox="0 0 24 24" fill="none">
    <path d="M12 0L14.5 9.5L24 12L14.5 14.5L12 24L9.5 14.5L0 12L9.5 9.5L12 0Z" fill="#F59E0B" opacity="0.65"/>
  </svg>
  <svg class="ob-s9-decor-obj ob-s9-decor-2" width="26" height="26" viewBox="0 0 32 32" fill="none">
    <circle cx="16" cy="16" r="13" stroke="#0EA5E9" stroke-width="2" stroke-dasharray="3 3"/>
  </svg>
  <svg class="ob-s9-decor-obj ob-s9-decor-3" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#8B5CF6" stroke-width="2.2" stroke-linecap="round">
    <line x1="7" y1="17" x2="17" y2="7"></line>
    <polyline points="7 7 17 7 17 17"></polyline>
  </svg>
  <svg class="ob-s9-decor-obj ob-s9-decor-4" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2" stroke-linecap="round">
    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
    <polyline points="9 12 11 14 15 10"></polyline>
  </svg>
  <svg class="ob-s9-decor-obj ob-s9-decor-5" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#F43F5E" stroke-width="2">
    <rect x="12" y="2" width="14" height="14" transform="rotate(45 12 2)"/>
  </svg>
  <!-- Playful smile arc -->
  <svg class="ob-s9-decor-obj ob-s9-decor-6" width="32" height="22" viewBox="0 0 32 22" fill="none">
    <path d="M4 6 C12 18, 20 18, 28 6" stroke="#d97706" stroke-width="2.5" stroke-linecap="round"/>
  </svg>

  <div class="ob-s9-container">

    <!-- 1. SECTION INTRO (NO SECTION 9 BADGE, EDITORIAL HEADING & UNDERLINE) -->
    <div class="ob-s9-header">
      <div class="ob-s9-heading-wrap">
        <h2 class="ob-s9-title">Get a Practical <span class="ob-s9-underline-highlight">India Entry Roadmap</span></h2>
        
        <svg class="ob-s9-header-arrow" viewBox="0 0 50 45" fill="none">
          <path d="M6 10 C20 4, 38 12, 42 32 M42 32 L32 28 M42 32 L44 20" stroke="#f59e0b" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </div>
      <p class="ob-s9-subtitle">
        Tell us what your company wants to achieve in India. We will help identify the entry options to evaluate, key workstreams, required information, major dependencies and the next decisions to make.
      </p>
    </div>

    <!-- 2. ASYMMETRIC 2-COLUMN GRID (44% VISUAL STORY / 56% FORM CARD) -->
    <div class="ob-s9-grid">

      <!-- LEFT COLUMN: VISUAL STORYTELLING & PROCESS NODES -->
      <div class="ob-s9-visual-story">

        <!-- STAGGERED EDITORIAL IMAGES -->
        <div class="ob-s9-showcase">
          <!-- Card 1: Modern Corporate Architecture -->
          <div class="ob-s9-img-card-1">
            <span class="ob-s9-img-badge ob-s9-badge-gold">CROSS-BORDER EXPANSION</span>
            <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=800&q=80" alt="Modern Corporate Architecture" loading="lazy" />
          </div>

          <!-- Card 2: India Operations Network (Animated Visual Card) -->
          <div class="ob-s9-img-card-2 ob-s9-network-card" role="img" aria-label="India Operations Network Visual">
            <span class="ob-s9-img-badge ob-s9-badge-blue">INDIA OPERATIONS NETWORK</span>
            
            <svg class="ob-s9-network-svg" viewBox="0 0 360 200" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid meet">
              <defs>
                <!-- Background Micro Grid -->
                <pattern id="obS9NetGrid" width="18" height="18" patternUnits="userSpaceOnUse">
                  <path d="M 18 0 L 0 0 0 18" fill="none" stroke="rgba(255, 255, 255, 0.05)" stroke-width="1"/>
                </pattern>
                <!-- Ambient Glow behind India Map -->
                <radialGradient id="obS9IndiaGlow" cx="62%" cy="55%" r="50%">
                  <stop offset="0%" stop-color="#0ea5e9" stop-opacity="0.30"/>
                  <stop offset="60%" stop-color="#0284c7" stop-opacity="0.08"/>
                  <stop offset="100%" stop-color="#0f172a" stop-opacity="0"/>
                </radialGradient>
                <!-- Gradients for City Nodes -->
                <linearGradient id="obS9GradCyan" x1="0" y1="0" x2="1" y2="1">
                  <stop offset="0%" stop-color="#38bdf8"/>
                  <stop offset="100%" stop-color="#0284c7"/>
                </linearGradient>
                <linearGradient id="obS9GradGold" x1="0" y1="0" x2="1" y2="1">
                  <stop offset="0%" stop-color="#fbbf24"/>
                  <stop offset="100%" stop-color="#d97706"/>
                </linearGradient>
                <linearGradient id="obS9GradEmerald" x1="0" y1="0" x2="1" y2="1">
                  <stop offset="0%" stop-color="#34d399"/>
                  <stop offset="100%" stop-color="#059669"/>
                </linearGradient>
              </defs>

              <!-- Card Tech Canvas Background -->
              <rect width="360" height="200" fill="#0c152c"/>
              <rect width="360" height="200" fill="url(#obS9NetGrid)"/>
              <rect width="360" height="200" fill="url(#obS9IndiaGlow)"/>

              <!-- STYLIZED INDIA MAP GEOGRAPHY SILHOUETTE (Shifted center-right to keep top-left badge clean) -->
              <g transform="translate(110, 14) scale(0.68)">
                <path d="M 140 18 C 150 10, 165 12, 172 20 C 180 30, 195 28, 205 38 C 215 48, 235 45, 245 58 C 255 70, 248 85, 240 95 C 235 105, 230 118, 238 128 C 248 140, 255 152, 245 162 C 235 172, 225 180, 218 198 C 210 215, 195 235, 185 248 C 178 258, 170 265, 162 275 C 158 270, 150 252, 142 238 C 135 225, 122 205, 118 190 C 112 175, 105 160, 110 148 C 115 135, 125 125, 118 112 C 110 98, 95 90, 102 75 C 110 60, 128 40, 135 28 Z" 
                      fill="rgba(14, 165, 233, 0.08)" 
                      stroke="rgba(56, 189, 248, 0.45)" 
                      stroke-width="1.8" 
                      stroke-dasharray="4 2" 
                      class="ob-s9-map-path"/>
                
                <!-- Lat/Long Contour Lines -->
                <path d="M 115 100 Q 170 90 235 100" stroke="rgba(255,255,255,0.08)" stroke-width="1" fill="none"/>
                <path d="M 120 150 Q 170 140 235 150" stroke="rgba(255,255,255,0.08)" stroke-width="1" fill="none"/>
                <path d="M 135 200 Q 170 190 215 200" stroke="rgba(255,255,255,0.08)" stroke-width="1" fill="none"/>
                <path d="M 170 30 L 170 265" stroke="rgba(255,255,255,0.08)" stroke-width="1" stroke-dasharray="2 4" fill="none"/>
              </g>

              <!-- NETWORK CORRIDOR CONNECTIVITY PATHS -->
              <path id="obS9Route1" d="M 220 52 Q 195 75 190 102" stroke="rgba(56, 189, 248, 0.55)" stroke-width="1.8" stroke-dasharray="3 3" fill="none"/>
              <path id="obS9Route2" d="M 190 102 L 202 118" stroke="rgba(56, 189, 248, 0.55)" stroke-width="1.8" stroke-dasharray="3 3" fill="none"/>
              <path id="obS9Route3" d="M 202 118 Q 210 135 218 155" stroke="rgba(56, 189, 248, 0.55)" stroke-width="1.8" stroke-dasharray="3 3" fill="none"/>
              <path id="obS9Route4" d="M 218 155 Q 235 142 242 125" stroke="rgba(56, 189, 248, 0.55)" stroke-width="1.8" stroke-dasharray="3 3" fill="none"/>
              <path id="obS9Route5" d="M 242 125 Q 245 85 220 52" stroke="rgba(56, 189, 248, 0.55)" stroke-width="1.8" stroke-dasharray="3 3" fill="none"/>
              <path id="obS9Route6" d="M 218 155 L 248 158" stroke="rgba(56, 189, 248, 0.55)" stroke-width="1.8" stroke-dasharray="3 3" fill="none"/>

              <!-- ANIMATED TRAVELLING BEACONS -->
              <circle r="3" fill="#38bdf8" class="ob-s9-data-packet">
                <animateMotion dur="4.5s" repeatCount="indefinite" path="M 220 52 Q 195 75 190 102 L 202 118 Q 210 135 218 155"/>
              </circle>
              <circle r="3" fill="#fbbf24" class="ob-s9-data-packet">
                <animateMotion dur="5.2s" repeatCount="indefinite" path="M 218 155 Q 235 142 242 125 Q 245 85 220 52"/>
              </circle>
              <circle r="2.5" fill="#34d399" class="ob-s9-data-packet">
                <animateMotion dur="3.8s" repeatCount="indefinite" path="M 190 102 L 202 118 Q 235 142 248 158"/>
              </circle>

              <!-- 6 CONNECTED OPERATIONAL NODES -->
              <!-- Node 1: Delhi (Setup) -->
              <g class="ob-s9-net-node" transform="translate(220, 52)">
                <circle r="8" fill="none" stroke="#38bdf8" stroke-width="1.2" opacity="0.6" class="ob-s9-node-pulse"/>
                <circle r="4.5" fill="url(#obS9GradCyan)"/>
                <rect x="8" y="-9" width="44" height="15" rx="7.5" fill="rgba(15, 23, 42, 0.85)" stroke="rgba(56, 189, 248, 0.4)" stroke-width="1"/>
                <text x="30" y="2" font-family="'Outfit', sans-serif" font-size="7.5" font-weight="700" fill="#ffffff" text-anchor="middle">SETUP</text>
              </g>

              <!-- Node 2: Mumbai (Banking) -->
              <g class="ob-s9-net-node" transform="translate(190, 102)">
                <circle r="7" fill="none" stroke="#fbbf24" stroke-width="1.2" opacity="0.6" class="ob-s9-node-pulse"/>
                <circle r="4" fill="url(#obS9GradGold)"/>
                <rect x="-52" y="-8" width="46" height="15" rx="7.5" fill="rgba(15, 23, 42, 0.85)" stroke="rgba(251, 191, 36, 0.4)" stroke-width="1"/>
                <text x="-29" y="3" font-family="'Outfit', sans-serif" font-size="7.5" font-weight="700" fill="#ffffff" text-anchor="middle">BANKING</text>
              </g>

              <!-- Node 3: Pune (Compliance) -->
              <g class="ob-s9-net-node" transform="translate(202, 118)">
                <circle r="6" fill="none" stroke="#34d399" stroke-width="1" opacity="0.6" class="ob-s9-node-pulse"/>
                <circle r="3.5" fill="url(#obS9GradEmerald)"/>
              </g>

              <!-- Node 4: Bengaluru (Operations) -->
              <g class="ob-s9-net-node" transform="translate(218, 155)">
                <circle r="9" fill="none" stroke="#38bdf8" stroke-width="1.2" opacity="0.7" class="ob-s9-node-pulse"/>
                <circle r="5" fill="url(#obS9GradCyan)"/>
                <rect x="-56" y="-8" width="50" height="15" rx="7.5" fill="rgba(15, 23, 42, 0.85)" stroke="rgba(56, 189, 248, 0.4)" stroke-width="1"/>
                <text x="-31" y="3" font-family="'Outfit', sans-serif" font-size="7.5" font-weight="700" fill="#ffffff" text-anchor="middle">OPERATIONS</text>
              </g>

              <!-- Node 5: Hyderabad (Talent) -->
              <g class="ob-s9-net-node" transform="translate(242, 125)">
                <circle r="7" fill="none" stroke="#a78bfa" stroke-width="1.2" opacity="0.6" class="ob-s9-node-pulse"/>
                <circle r="4" fill="#8b5cf6"/>
                <rect x="8" y="-8" width="44" height="15" rx="7.5" fill="rgba(15, 23, 42, 0.85)" stroke="rgba(139, 92, 246, 0.4)" stroke-width="1"/>
                <text x="30" y="3" font-family="'Outfit', sans-serif" font-size="7.5" font-weight="700" fill="#ffffff" text-anchor="middle">TALENT</text>
              </g>

              <!-- Node 6: Chennai (Infrastructure) -->
              <g class="ob-s9-net-node" transform="translate(248, 158)">
                <circle r="6" fill="none" stroke="#38bdf8" stroke-width="1" opacity="0.6" class="ob-s9-node-pulse"/>
                <circle r="3.5" fill="url(#obS9GradCyan)"/>
              </g>
            </svg>
          </div>
        </div>

        <!-- PROCESS FLOW VISUAL CARD (WHAT HAPPENS NEXT) -->
        <div class="ob-s9-process-card">
          <div class="ob-s9-process-header">
            <h4 class="ob-s9-process-title">
              <span class="ob-s9-live-dot"></span>
              <span>Your Information → Practical Roadmap</span>
            </h4>
            <span style="font-size: 0.74rem; font-weight: 800; color: #b45309;">4-STEP SYNCHRONIZATION</span>
          </div>
          <div class="ob-s9-process-nodes">
            <div class="ob-s9-process-node">
              <span class="ob-s9-node-num">01</span>
              <span>Your Expansion Goals &amp; Activity Scope</span>
            </div>
            <div class="ob-s9-process-node">
              <span class="ob-s9-node-num">02</span>
              <span>FDI Route &amp; Ownership Chain Assessment</span>
            </div>
            <div class="ob-s9-process-node">
              <span class="ob-s9-node-num">03</span>
              <span>Entity Structure &amp; Banking Feasibility Blueprint</span>
            </div>
            <div class="ob-s9-process-node">
              <span class="ob-s9-node-num">04</span>
              <span>Detailed Timeline, Dependencies &amp; Deliverables</span>
            </div>
          </div>
        </div>

        
        

      </div>

      <!-- RIGHT COLUMN: PREMIUM "INDIA ENTRY PLANNER" FORM CARD -->
      <div class="ob-s9-form-card">

        <div class="ob-s9-form-header">
          <div class="ob-s9-form-badge">INDIA ENTRY PLANNER</div>
          <div class="ob-s9-form-scope-tag">
            <span style="width: 7px; height: 7px; border-radius: 50%; background: #10b981; display: inline-block;"></span>
            <span>Active Planning Scope</span>
          </div>
        </div>

        <!-- FORM WITH EXACT FIELDS & IDs PRESERVED -->
        <form id="india-setup-roadmap-form" class="ob-s9-form-grid" action="#" method="post">

          <!-- 1. FULL NAME -->
          <div class="ob-s9-field-group">
            <label class="ob-s9-label" for="form_name">
              <span>Full Name</span>
              <span class="ob-s9-req-star">*</span>
            </label>
            <div class="ob-s9-input-wrap">
              <!-- Person Icon -->
              <svg class="ob-s9-field-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                <circle cx="12" cy="7" r="4"></circle>
              </svg>
              <input class="ob-s9-input" type="text" id="form_name" name="name" placeholder="John Doe" required />
            </div>
          </div>

          <!-- 2. WORK EMAIL -->
          <div class="ob-s9-field-group">
            <label class="ob-s9-label" for="form_email">
              <span>Work Email</span>
              <span class="ob-s9-req-star">*</span>
            </label>
            <div class="ob-s9-input-wrap">
              <!-- Mail Icon -->
              <svg class="ob-s9-field-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                <polyline points="22,6 12,13 2,6"></polyline>
              </svg>
              <input class="ob-s9-input" type="email" id="form_email" name="email" placeholder="john@company.com" required />
            </div>
          </div>

          <!-- 3. COMPANY NAME -->
          <div class="ob-s9-field-group">
            <label class="ob-s9-label" for="form_company">
              <span>Company Name</span>
              <span class="ob-s9-req-star">*</span>
            </label>
            <div class="ob-s9-input-wrap">
              <!-- Building Icon -->
              <svg class="ob-s9-field-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <rect x="4" y="2" width="16" height="20" rx="2" ry="2"></rect>
                <line x1="9" y1="22" x2="9" y2="22.01"></line>
                <line x1="15" y1="22" x2="15" y2="22.01"></line>
                <line x1="9" y1="6" x2="9" y2="6.01"></line>
                <line x1="15" y1="6" x2="15" y2="6.01"></line>
                <line x1="9" y1="10" x2="9" y2="10.01"></line>
                <line x1="15" y1="10" x2="15" y2="10.01"></line>
                <line x1="9" y1="14" x2="9" y2="14.01"></line>
                <line x1="15" y1="14" x2="15" y2="14.01"></line>
                <line x1="9" y1="18" x2="9" y2="18.01"></line>
                <line x1="15" y1="18" x2="15" y2="18.01"></line>
              </svg>
              <input class="ob-s9-input" type="text" id="form_company" name="company" placeholder="Acme Global Inc" required />
            </div>
          </div>

          <!-- 4. HOME COUNTRY -->
          <div class="ob-s9-field-group">
            <label class="ob-s9-label" for="form_country">
              <span>Home Country</span>
              <span class="ob-s9-req-star">*</span>
            </label>
            <div class="ob-s9-input-wrap">
              <!-- Globe Icon -->
              <svg class="ob-s9-field-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="10"></circle>
                <line x1="2" y1="12" x2="22" y2="12"></line>
                <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
              </svg>
              <input class="ob-s9-input" type="text" id="form_country" name="country" placeholder="United States / UK / Singapore" required />
            </div>
          </div>

          <!-- 5. INDUSTRY -->
          <div class="ob-s9-field-group">
            <label class="ob-s9-label" for="form_industry">
              <span>Industry</span>
              <span class="ob-s9-req-star">*</span>
            </label>
            <div class="ob-s9-input-wrap">
              <!-- Briefcase Icon -->
              <svg class="ob-s9-field-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect>
                <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
              </svg>
              <select class="ob-s9-select" id="form_industry" name="industry" required>
                <option value="">Select your industry...</option>
                <option value="Technology & SaaS">Technology &amp; SaaS</option>
                <option value="Creative & Post-Production">Creative &amp; Post-Production</option>
                <option value="Consulting & Professional Services">Consulting &amp; Professional Services</option>
                <option value="BPO & Shared Services">BPO &amp; Shared Services</option>
                <option value="Trading & Import-Export">Trading &amp; Import-Export</option>
                <option value="Manufacturing & Site Setup">Manufacturing &amp; Site Setup</option>
                <option value="Other Industry">Other Industry</option>
              </select>
            </div>
          </div>

          <!-- 6. INTENDED INDIA ACTIVITY -->
          <div class="ob-s9-field-group">
            <label class="ob-s9-label" for="form_activity">
              <span>Intended India Activity</span>
              <span class="ob-s9-req-star">*</span>
            </label>
            <div class="ob-s9-input-wrap">
              <!-- Target Compass Icon -->
              <svg class="ob-s9-field-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="10"></circle>
                <polygon points="16.24 7.76 14.12 14.12 7.76 16.24 9.88 9.88 16.24 7.76"></polygon>
              </svg>
              <select class="ob-s9-select" id="form_activity" name="activity" required>
                <option value="">Select intended activity...</option>
                <option value="Hire & Build Team">Hire &amp; Build Dedicated Team</option>
                <option value="Sell & Market Products">Sell &amp; Market Products in India</option>
                <option value="Office & BPO Setup">Office &amp; BPO Center Setup</option>
                <option value="Manufacturing & Plant">Factory / Manufacturing Facility</option>
                <option value="R&D / Delivery Hub">R&amp;D / Shared Services Hub</option>
              </select>
            </div>
          </div>

          <!-- 7. EXPECTED FIRST-YEAR TEAM SIZE -->
          <div class="ob-s9-field-group">
            <label class="ob-s9-label" for="form_team_size">
              <span>Expected First-Year Team Size</span>
            </label>
            <div class="ob-s9-input-wrap">
              <!-- People Icon -->
              <svg class="ob-s9-field-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                <circle cx="9" cy="7" r="4"></circle>
                <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
              </svg>
              <input class="ob-s9-input" type="text" id="form_team_size" name="team_size" placeholder="e.g. 5-25 specialists" />
            </div>
          </div>

          <!-- 8. PREFERRED CITY -->
          <div class="ob-s9-field-group">
            <label class="ob-s9-label" for="form_city">
              <span>Preferred City (if known)</span>
            </label>
            <div class="ob-s9-input-wrap">
              <!-- Location Pin Icon -->
              <svg class="ob-s9-field-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                <circle cx="12" cy="10" r="3"></circle>
              </svg>
              <input class="ob-s9-input" type="text" id="form_city" name="city" placeholder="Bengaluru, Gurugram, Mumbai, etc." />
            </div>
          </div>

          <!-- 9. TARGET LAUNCH MONTH & MESSAGE -->
          <div class="ob-s9-field-group ob-s9-field-span2">
            <label class="ob-s9-label" for="form_launch_month">
              <span>Target Launch Month &amp; Message</span>
            </label>
            <div class="ob-s9-input-wrap">
              <!-- Document Icon -->
              <svg class="ob-s9-field-icon" style="top: 14px;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                <polyline points="14 2 14 8 20 8"></polyline>
                <line x1="16" y1="13" x2="8" y2="13"></line>
                <line x1="16" y1="17" x2="8" y2="17"></line>
              </svg>
              <textarea class="ob-s9-textarea" id="form_launch_month" name="message" rows="4" placeholder="Tell us about your launch targets, ownership structure, and any specific questions..."></textarea>
            </div>
          </div>

          <!-- SUBMIT CTA -->
          <div class="ob-s9-submit-wrap">
            <button type="submit" class="ob-s9-submit-btn">
              <span>Request Your India Setup Roadmap</span>
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                <path d="M5 12h14M12 5l7 7-7 7"/>
              </svg>
            </button>
            <div id="roadmap-form-response" class="ob-s9-response-msg" style="display: none;">
              Thank you! We will review your India plans and contact you to clarify the activity, ownership, team, location and target timeline before recommending the next step.
            </div>
          </div>

        </form>

      </div>

    </div>

  </div>

  <!-- SCOPED CLIENT-SIDE INTERACTION JAVASCRIPT -->
  <script id="ob-s9-scoped-master-js">
  (function() {
    'use strict';

    function initSectionNineRoadmap() {
      var sec = document.getElementById('roadmap-form-section');
      if (!sec) return;

      // Desktop Subtle Mouse Parallax on Left Visual Cards
      if (window.innerWidth > 1024) {
        sec.addEventListener('mousemove', function(e) {
          var rect = sec.getBoundingClientRect();
          var x = (e.clientX - rect.left) / rect.width - 0.5;
          var y = (e.clientY - rect.top) / rect.height - 0.5;

          var img1 = sec.querySelector('.ob-s9-img-card-1');
          var img2 = sec.querySelector('.ob-s9-img-card-2');
          var proc = sec.querySelector('.ob-s9-process-card');

          if (img1) img1.style.transform = 'translate(' + (x * 8) + 'px, ' + (y * 8) + 'px)';
          if (img2) img2.style.transform = 'translate(' + (x * -10) + 'px, ' + (y * -10) + 'px)';
          if (proc) proc.style.transform = 'translate(' + (x * 5) + 'px, ' + (y * 5) + 'px)';
        });
      }
    }

    if (document.readyState === 'loading') {
      document.addEventListener('DOMContentLoaded', initSectionNineRoadmap);
    } else {
      initSectionNineRoadmap();
    }
    window.addEventListener('load', initSectionNineRoadmap);
  })();
  </script>
</section>

?>
<!-- MASTER HOMEPAGE RESPONSIVE OVERHAUL (PERFECT FIT FOR ALL MOBILE, TABLETS, & DESKTOPS) -->

<?php
?>
<!-- MASTER HOMEPAGE RESPONSIVE OVERHAUL (MOBILE, TABLETS, & LAPTOPS) -->
<style id="ob-homepage-responsive-master-css">
/* ==========================================================================
   0. GLOBAL FIX: PREVENT HORIZONTAL SCROLL & OVERFLOW
   ========================================================================== */
html, body {
  overflow-x: clip !important;
  max-width: 100vw !important;
  width: 100% !important;
  box-sizing: border-box !important;
  position: relative !important;
}

*, *::before, *::after {
  box-sizing: border-box !important;
}

.theme-container {
  width: 100% !important;
  max-width: 1280px !important;
  padding-left: 20px !important;
  padding-right: 20px !important;
  margin-left: auto !important;
  margin-right: auto !important;
  box-sizing: border-box !important;
}

/* SECTION 2 DEFAULT DESKTOP GRID */
.ob-s2-main-grid {
  display: grid !important;
  grid-template-columns: 1fr 1.15fr !important;
  gap: 48px !important;
  align-items: center !important;
}

/* SECTION 4 DEFAULT DESKTOP GRID */
.ob-s4-layout-grid {
  display: grid !important;
  grid-template-columns: 1fr 1fr !important;
  gap: 40px !important;
  align-items: center !important;
}

/* ==========================================================================
   1. TABLETS & MEDIUM SCREENS (<= 1024px)
   ========================================================================== */
@media (max-width: 1024px) {
  /* Section 2: Why India Grid -> 1 COLUMN STACK */
  .ob-s2-main-grid {
    display: flex !important;
    flex-direction: column !important;
    gap: 36px !important;
    width: 100% !important;
  }
  .ob-s2-left-stack {
    width: 100% !important;
    max-width: 100% !important;
    display: flex !important;
    flex-direction: column !important;
    gap: 16px !important;
  }
  .ob-s2-pillar-card {
    width: 100% !important;
    box-sizing: border-box !important;
  }
  .ob-s2-roadmap-box {
    width: 100% !important;
    max-width: 580px !important;
    margin: 0 auto !important;
    box-sizing: border-box !important;
  }
  .ob-s2-editorial-arrow,
  .ob-s2-orbit-svg-layer {
    display: none !important;
  }

  /* Section 3: Services Grid */
  .ob-s3-cards-grid {
    grid-template-columns: repeat(2, 1fr) !important;
    gap: 20px !important;
  }

  /* Section 4: Entry Routes Grid -> 1 COLUMN STACK */
  .ob-s4-section {
    padding: 60px 0 !important;
    overflow: hidden !important;
  }
  .ob-s4-layout-grid {
    display: flex !important;
    flex-direction: column !important;
    gap: 32px !important;
    width: 100% !important;
  }
  .ob-s4-infographic-column {
    width: 100% !important;
    order: 1 !important;
    display: flex !important;
    justify-content: center !important;
    align-items: center !important;
    overflow: hidden !important;
  }
  .ob-s4-routes-column {
    width: 100% !important;
    order: 2 !important;
    display: flex !important;
    flex-direction: column !important;
    gap: 16px !important;
  }
  .ob-s4-route-card {
    width: 100% !important;
    opacity: 1 !important;
    transform: none !important;
  }
  .ob-s4-hero-infographic {
    width: 100% !important;
    max-width: 500px !important;
    min-width: 0 !important;
    height: 460px !important;
    min-height: 460px !important;
    max-height: none !important;
    margin: 0 auto !important;
    opacity: 1 !important;
    position: relative !important;
    display: block !important;
  }

  /* Section 5: Industries Grid */
  .ob-s5-cards-grid {
    grid-template-columns: repeat(2, 1fr) !important;
    gap: 20px !important;
  }

  /* Section 6: Process Roadmap Grid */
  .ob-s6-section {
    padding: 60px 0 !important;
  }
  .ob-s6-layout-grid {
    grid-template-columns: 1fr !important;
    gap: 36px !important;
  }
  .ob-s6-step-card {
    width: 100% !important;
  }

  /* Section 7: Why Choose Us Grid */
  .ob-s7-cards-grid {
    grid-template-columns: repeat(2, 1fr) !important;
    gap: 20px !important;
  }

  /* Section 8: FAQ Layout */
  .ob-s8-layout-grid {
    grid-template-columns: 1fr !important;
    gap: 36px !important;
  }

  /* Section 9: CTA Roadmap Grid */
  .ob-s9-layout-grid {
    grid-template-columns: 1fr !important;
    gap: 36px !important;
  }
  .ob-s9-form-card {
    width: 100% !important;
  }
}

/* ==========================================================================
   2. MOBILE SMARTPHONES (<= 768px)
   ========================================================================== */
@media (max-width: 768px) {
  /* --- A. HEADER CLEARANCE & HERO SECTION OVERFLOW FIX --- */
  .hero-section,
  .hero-pdf-layout {
    padding-top: 155px !important;
    padding-bottom: 50px !important;
    overflow: hidden !important;
    min-height: auto !important;
  }
  .hero-grid {
    display: flex !important;
    flex-direction: column !important;
    gap: 28px !important;
    width: 100% !important;
  }
  .hero-content {
    width: 100% !important;
    order: 1 !important;
    text-align: left !important;
  }
  .hero-section-tag-pill {
    margin-bottom: 14px !important;
    display: inline-block !important;
  }
  .hero-pdf-h1 {
    font-size: clamp(1.95rem, 6.8vw, 2.5rem) !important;
    line-height: 1.15 !important;
    margin-bottom: 16px !important;
    letter-spacing: -0.02em !important;
  }
  .hero-subtitle {
    font-size: 0.92rem !important;
    line-height: 1.5 !important;
    margin-bottom: 22px !important;
    color: #334155 !important;
  }
  .hero-actions {
    display: flex !important;
    flex-direction: column !important;
    gap: 12px !important;
    width: 100% !important;
    margin-bottom: 20px !important;
  }
  .hero-actions .btn-primary,
  .hero-actions .btn-secondary,
  .hero-actions a {
    width: 100% !important;
    justify-content: center !important;
    text-align: center !important;
    padding: 14px 20px !important;
    font-size: 0.92rem !important;
    border-radius: 100px !important;
  }
  .hero-proof-card {
    width: 100% !important;
    max-width: 100% !important;
    padding: 14px 16px !important;
    margin-top: 16px !important;
    border-radius: 18px !important;
  }

  /* --- B. HERO VISUAL & HUGO NETWORK CONTAINER COMPACT SCALING --- */
  .hero-visual {
    width: 100% !important;
    max-width: 100% !important;
    order: 2 !important;
    display: flex !important;
    justify-content: center !important;
    align-items: center !important;
    margin: 10px auto 0 auto !important;
    overflow: hidden !important;
    padding: 0 !important;
  }
  .hugo-network-container {
    width: 540px !important;
    min-width: 540px !important;
    height: 500px !important;
    transform: scale(0.64) !important;
    transform-origin: center top !important;
    margin: 0 auto -165px auto !important;
    display: flex !important;
    opacity: 1 !important;
    position: relative !important;
  }
  .hugo-kpi-badge.kpi-top-left {
    left: 10px !important;
    top: 10px !important;
  }
  .hugo-kpi-badge.kpi-top-right {
    right: 10px !important;
    top: 10px !important;
  }
  .hugo-kpi-badge.kpi-bottom-left {
    left: 10px !important;
    bottom: 10px !important;
  }
  .hugo-kpi-badge.kpi-bottom-right {
    right: 10px !important;
    bottom: 10px !important;
  }

  /* --- C. SECTION 2 (WHY INDIA) MOBILE FIX --- */
  .ob-section-2 {
    padding: 50px 0 !important;
  }
  .ob-s2-header-section {
    margin-bottom: 32px !important;
  }
  .ob-s2-h2-title {
    font-size: clamp(1.8rem, 6.5vw, 2.2rem) !important;
    line-height: 1.18 !important;
  }
  .ob-s2-main-grid {
    display: flex !important;
    flex-direction: column !important;
    gap: 28px !important;
    width: 100% !important;
  }
  .ob-s2-left-stack {
    width: 100% !important;
    gap: 14px !important;
  }
  .ob-s2-pillar-card {
    padding: 16px 18px !important;
    width: 100% !important;
    border-radius: 18px !important;
  }
  .ob-s2-card-title {
    font-size: 1.02rem !important;
  }
  .ob-s2-card-desc {
    font-size: 0.86rem !important;
    line-height: 1.5 !important;
  }
  .ob-s2-roadmap-box {
    width: 100% !important;
    max-width: 100% !important;
    padding: 24px 18px !important;
    border-radius: 20px !important;
    margin: 0 !important;
  }
  .ob-s2-metrics-row {
    grid-template-columns: 1fr 1fr !important;
    gap: 10px !important;
  }

  /* --- D. SECTION 3 (SERVICES) MOBILE FIX --- */
  .ob-s3-cards-grid {
    grid-template-columns: 1fr !important;
    gap: 16px !important;
  }
  .ob-s3-service-card {
    width: 100% !important;
    padding: 20px !important;
  }
  .ob-s3-heading-title {
    font-size: clamp(1.8rem, 6.5vw, 2.2rem) !important;
  }

  /* --- E. SECTION 4 (ENTRY ROUTES) MOBILE FIX --- */
  .ob-s4-section {
    padding: 45px 0 !important;
    overflow-x: clip !important;
  }
  .ob-s4-layout-grid {
    display: flex !important;
    flex-direction: column !important;
    gap: 28px !important;
    width: 100% !important;
  }
  .ob-s4-hero-infographic {
    display: grid !important;
    grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
    gap: 12px !important;
    min-height: auto !important;
    height: auto !important;
    max-height: none !important;
    width: 100% !important;
    min-width: 0 !important;
    max-width: 100% !important;
    transform: none !important;
    margin: 16px auto 10px auto !important;
    padding: 0 !important;
    position: relative !important;
    opacity: 1 !important;
  }
  .ob-s4-india-core-hub {
    grid-column: 1 / -1 !important;
    position: relative !important;
    top: auto !important;
    left: auto !important;
    transform: none !important;
    width: 160px !important;
    height: 160px !important;
    margin: 10px auto 16px auto !important;
    display: flex !important;
    flex-direction: column !important;
    align-items: center !important;
    justify-content: center !important;
    z-index: 5 !important;
  }
  .ob-s4-india-silhouette-svg {
    width: 95px !important;
    height: 95px !important;
  }
  .ob-s4-radar-ring,
  .ob-s4-hero-infographic > svg,
  .ob-s4-data-chip,
  .ob-s4-decor-icon,
  .ob-s4-star,
  .ob-s4-arrow-item {
    display: none !important;
  }
  .ob-s4-journey-node {
    position: relative !important;
    top: auto !important;
    left: auto !important;
    right: auto !important;
    bottom: auto !important;
    transform: none !important;
    width: 100% !important;
    min-width: 0 !important;
    box-sizing: border-box !important;
    padding: 12px 14px !important;
    border-radius: 14px !important;
    background: #ffffff !important;
    border: 1.5px solid #e2e8f0 !important;
    box-shadow: 0 4px 14px rgba(15, 23, 42, 0.05) !important;
    display: flex !important;
    align-items: center !important;
    gap: 10px !important;
    z-index: 6 !important;
    cursor: pointer !important;
    transition: transform 0.25s ease, box-shadow 0.25s ease, border-color 0.25s ease !important;
  }
  .ob-s4-journey-node:hover,
  .ob-s4-journey-node.is-active {
    transform: translateY(-2px) !important;
    box-shadow: 0 8px 20px rgba(15, 23, 42, 0.10) !important;
    border-color: #22B8CF !important;
  }
  #ob-s4-hnode-1 { grid-column: 1 / 2 !important; }
  #ob-s4-hnode-2 { grid-column: 2 / 3 !important; }
  #ob-s4-hnode-3 { grid-column: 1 / 2 !important; }
  #ob-s4-hnode-4 { grid-column: 2 / 3 !important; }
  #ob-s4-hnode-5 { grid-column: 1 / -1 !important; }
  .ob-s4-route-card {
    padding: 18px 20px !important;
    margin-bottom: 0 !important;
    width: 100% !important;
  }
  .ob-s4-heading-title {
    font-size: clamp(1.8rem, 6.5vw, 2.2rem) !important;
  }

  /* --- F. SECTION 5 (INDUSTRIES) MOBILE FIX --- */
  .ob-s5-cards-grid {
    grid-template-columns: 1fr !important;
    gap: 16px !important;
  }
  .ob-s5-ind-card {
    width: 100% !important;
    padding: 20px !important;
  }
  .ob-s5-heading-title {
    font-size: clamp(1.8rem, 6.5vw, 2.2rem) !important;
  }

  /* --- G. SECTION 6 (PROCESS ROADMAP) MOBILE FIX --- */
  .ob-s6-step-card {
    padding: 20px !important;
  }
  .ob-s6-heading-title {
    font-size: clamp(1.8rem, 6.5vw, 2.2rem) !important;
  }

  /* --- H. SECTION 7 (WHY CHOOSE US) MOBILE FIX --- */
  .ob-s7-cards-grid {
    grid-template-columns: 1fr !important;
    gap: 16px !important;
  }
  .ob-s7-pillar-card {
    width: 100% !important;
    padding: 20px !important;
  }
  .ob-s7-heading-title {
    font-size: clamp(1.8rem, 6.5vw, 2.2rem) !important;
  }

  /* --- I. SECTION 8 (FAQ) MOBILE FIX --- */
  .ob-s8-faq-item {
    padding: 16px 18px !important;
  }
  .ob-s8-heading-title {
    font-size: clamp(1.8rem, 6.5vw, 2.2rem) !important;
  }

  /* --- J. SECTION 9 (CTA ROADMAP) MOBILE FIX --- */
  .ob-s9-form-card {
    padding: 22px 18px !important;
  }
  .ob-s9-form-row {
    grid-template-columns: 1fr !important;
    gap: 14px !important;
  }
  .ob-s9-heading-title {
    font-size: clamp(1.8rem, 6.5vw, 2.2rem) !important;
  }

  /* --- K. INSTANT CONTENT VISIBILITY ON MOBILE (NO SCROLL DELAYS) --- */
  .ob-s2-h2-line-1,
  .ob-s2-h2-line-2,
  .ob-s2-desc-text,
  .ob-s2-pillar-card,
  .ob-s2-card-icon,
  .ob-s2-card-title,
  .ob-s2-card-desc,
  .ob-s2-fast-badge,
  .ob-s2-cta-wrap,
  .ob-s2-roadmap-box,
  .ob-s2-milestone,
  .ob-s2-turnkey-banner,
  .ob-s2-metric-box-1,
  .ob-s2-metric-box-2,
  .ob-s2-director-strip,
  .ob-s3-service-card,
  .ob-s4-route-card,
  .ob-s4-hero-infographic,
  .ob-s5-ind-card,
  .ob-s6-step-card,
  .ob-s7-pillar-card,
  .ob-s8-faq-item,
  .ob-s9-form-card {
    opacity: 1 !important;
    transform: none !important;
    visibility: visible !important;
  }
}

/* ==========================================================================
   3. NARROW SMARTPHONES (<= 480px)
   ========================================================================== */
@media (max-width: 480px) {
  /* Extra Header Clearance for 2-line announcement banner */
  .hero-section,
  .hero-pdf-layout {
    padding-top: 168px !important;
    padding-bottom: 40px !important;
  }
  .theme-container {
    padding-left: 16px !important;
    padding-right: 16px !important;
  }
  .hero-pdf-h1 {
    font-size: clamp(1.75rem, 6.5vw, 2.15rem) !important;
  }

  /* Scaled down hero visual for compact screens */
  .hugo-network-container {
    transform: scale(0.57) !important;
    transform-origin: center top !important;
    margin: 0 auto -195px auto !important;
  }

  /* Section 2 Roadmap compact padding */
  .ob-s2-roadmap-box {
    padding: 20px 14px !important;
  }
  .ob-s2-metrics-row {
    grid-template-columns: 1fr !important;
  }

  /* Scaled down section 4 infographic for compact screens */
  .ob-s4-hero-infographic {
    display: grid !important;
    grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
    gap: 10px !important;
    width: 100% !important;
    min-width: 0 !important;
    height: auto !important;
    max-height: none !important;
    transform: none !important;
    margin: 12px auto 10px auto !important;
  }
  .ob-s4-journey-node {
    padding: 10px 10px !important;
    gap: 8px !important;
    border-radius: 12px !important;
  }
  .ob-s4-journey-node > div:first-child,
  #ob-s4-entity-badge-num {
    width: 26px !important;
    height: 26px !important;
    font-size: 0.70rem !important;
    border-radius: 7px !important;
    flex-shrink: 0 !important;
  }
  .ob-s4-journey-node div:last-child > div:first-child,
  #ob-s4-entity-title {
    font-size: 0.78rem !important;
    font-weight: 800 !important;
    line-height: 1.25 !important;
  }
  .ob-s4-journey-node div:last-child > div:last-child,
  #ob-s4-entity-sub {
    font-size: 0.65rem !important;
    line-height: 1.2 !important;
  }
}

/* ==========================================================================
   4. EXTRA SMALL SMARTPHONES (<= 375px)
   ========================================================================== */
@media (max-width: 375px) {
  .hero-section,
  .hero-pdf-layout {
    padding-top: 175px !important;
    padding-bottom: 35px !important;
  }
  .hugo-network-container {
    transform: scale(0.50) !important;
    transform-origin: center top !important;
    margin: 0 auto -230px auto !important;
  }
  .ob-s4-hero-infographic {
    grid-template-columns: 1fr !important;
    gap: 8px !important;
    transform: none !important;
    margin: 10px auto !important;
    width: 100% !important;
    min-width: 0 !important;
    height: auto !important;
    max-height: none !important;
  }
  #ob-s4-hnode-1,
  #ob-s4-hnode-2,
  #ob-s4-hnode-3,
  #ob-s4-hnode-4,
  #ob-s4-hnode-5 {
    grid-column: 1 / -1 !important;
  }
}
</style>
<?php
get_footer();
