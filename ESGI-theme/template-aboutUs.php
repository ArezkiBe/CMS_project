<?php
/*
Template Name: About Us
*/

get_header(); ?>

<div class="about-us-container">
  <h1><?php _e('About Us', 'your-theme-textdomain'); ?></h1>

  <div class="about-us-image">
    <?php
    $image = get_theme_mod('about_us_image');
    if ($image) {
      echo '<img src="' . esc_url($image) . '" alt="About Us Image">';
    }
    ?>
  </div>

  <div class="about-us-content">
    <h2><?php wp_title(); ?></h2>
    <div class="about-us-body">
      <?php
      while (have_posts()) : the_post();
        the_content();
      endwhile;
      ?>
    </div>
  </div>

  <?php
  get_template_part('template-parts/about-info');
  ?>



  <div class="about-us-footer">
    <h2><?php _e('Our Team', 'your-theme-textdomain'); ?></h2>
    <div class="team-blocks">
      <?php
      for ($i = 1; $i <= 4; $i++) {
        $team_image = get_theme_mod('team_' . $i . '_image');
        $team_title = get_theme_mod('team_' . $i . '_title');
        $team_phone = get_theme_mod('team_' . $i . '_phone');
        $team_email = get_theme_mod('team_' . $i . '_email');
        if ($team_image && $team_title && $team_phone && $team_email) {
          echo '<div class="team-block">';
          echo '<img src="' . esc_url($team_image) . '" alt="' . esc_attr($team_title) . '">';
          echo '<h4>' . esc_html($team_title) . '</h4>';
          echo '<p>' . esc_html($team_phone) . '</p>';
          echo '<p>' . esc_html($team_email) . '</p>';
          echo '</div>';
        }
      }
      ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>