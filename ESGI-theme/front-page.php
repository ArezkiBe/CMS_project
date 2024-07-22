<?php
get_header();
?>

<div class="custom-page-container">
  <h1 class="page-title">
    <?php
    $home_post = get_post(32);
    if ($home_post) {
      echo esc_html($home_post->post_title);
    }
    ?>
  </h1>


  <div class="image-block">
    <?php $custom_image = get_theme_mod('custom_image_setting'); ?>
    <?php if ($custom_image) : ?>
      <img src="<?php echo esc_url($custom_image); ?>" class="custom-image" alt="Custom Image">
    <?php endif; ?>
  </div>


  <!-- Contenu de la page "About Us" (post ID 54) -->
  <div class="about-us-content">
    <?php
    $about_us_post = get_post(35);
    if ($about_us_post) {
      echo '<h2>' . esc_html($about_us_post->post_title) . '</h2>';
      echo apply_filters('the_content', $about_us_post->post_content);
    }
    ?>
  </div>

  <!-- Section "Our Services" -->
  <div class="our-services">
    <h2>Our Services</h2>
    <?php get_template_part('template-parts/services-parts'); ?>
  </div>

  <div class="our-partners">
    <h2>Our Partners</h2>
    <?php get_template_part('template-parts/partners-logos'); ?>
  </div>
</div>

<?php
get_footer();
?>