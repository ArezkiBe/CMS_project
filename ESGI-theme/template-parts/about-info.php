<div class="about-container">
  <div class="about-image">
    <?php
    $side_image = get_theme_mod('side_image'); // Image collée à gauche
    if ($side_image) {
      echo '<img src="' . esc_url($side_image) . '" alt="Side Image">';
    }
    ?>
  </div>
  <div class="about-content">
    <?php
    for ($i = 1; $i <= 3; $i++) {
      $block_title = get_theme_mod('block_' . $i . '_title');
      $block_description = get_theme_mod('block_' . $i . '_description');
      if ($block_title && $block_description) {
        echo '<h3>' . esc_html($block_title) . '</h3>';
        echo '<p>' . esc_html($block_description) . '</p>';
      }
    }
    ?>
  </div>
</div>