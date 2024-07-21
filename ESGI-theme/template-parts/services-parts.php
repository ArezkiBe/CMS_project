<div class="services-images">
  <?php for ($i = 1; $i <= 4; $i++) : ?>
    <?php if ($image = get_theme_mod('service_image_' . $i)) : ?>
      <div class="service-image">
        <img src="<?php echo esc_url($image); ?>" alt="Service Image <?php echo $i; ?>">
      </div>
    <?php endif; ?>
  <?php endfor; ?>
</div>