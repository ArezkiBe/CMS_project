<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>
</head>

<!-- Begin Header -->
<header class="site-header">
  <div class="header-content" id="header-content">
    <div class="logo">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/ESGI_logo.svg">
    </div>
    <div class="burger-menu" id="burger-menu">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/open_menu.svg">
    </div>
  </div>
  <nav class="nav-menu" id="nav-menu">
    <div class="nav-header">
      <div class="logo">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/ESGI_logo.svg">
        <p>Or try Search</p>
      </div>
      <div class="close-menu" id="close-menu">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/close.svg">
      </div>
    </div>
    <ul class="nav-links">
        <?php
            if (has_nav_menu('primary_menu')) {
                wp_nav_menu([
                    'menu' => 'primary_menu',
                    'container' => 'nav',
                    'container_class' => 'main-menu',
                    'add_li_class'  => 'nav-item'

                ]);
            }
        ?>
    </ul>
  </nav>
</header>
<!-- End Header -->
