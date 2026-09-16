<?php
/**
 * 404 Error Page Template
 *
 * @package Overseas_Bridge
 */

get_header();
?>

<section class="hero-section" style="min-height: 70vh; padding-top: 180px; padding-bottom: 80px; text-align: center;">
  <div class="theme-container">
    <div class="glass-card" style="max-width: 650px; margin: 0 auto; padding: 60px 40px;">
      <div style="font-family: var(--font-heading); font-size: 5rem; font-weight: 800; color: var(--accent-cyan); line-height: 1;">404</div>
      <h1 style="font-size: 2.2rem; font-weight: 800; margin: 16px 0;">Page Not Found</h1>
      <p style="color: var(--text-secondary); margin-bottom: 32px; font-size: 1.05rem;">
        The operational resource or page you requested could not be located on Overseas Bridge servers.
      </p>
      <div style="display: flex; justify-content: center; gap: 16px;">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn-primary">Return to Homepage</a>
        <a href="<?php echo esc_url( home_url( '/build-your-dream-team' ) ); ?>" class="btn-secondary">Talent Wizard</a>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
