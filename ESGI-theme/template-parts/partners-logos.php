<div class="partners-logos">
  <?php for ($i = 1; $i <= 6; $i++) : ?>
    <?php if ($logo = get_theme_mod('partner_logo_' . $i)) : ?>
      <div class="partner-logo">
        <img src="<?php echo esc_url($logo); ?>" alt="Partner Logo <?php echo $i; ?>">
      </div>
    <?php endif; ?>
  <?php endfor; ?>
</div>