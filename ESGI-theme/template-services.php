<?php
/*
Template Name: Services
*/

get_header();
?>

<div class="services-container">
    <h1>Our Services.</h1>
    <?php
    get_template_part('template-parts/services-parts');
    ?>
    <h2 class="services-title"><?php the_title(); ?></h2>
    <div class="services-content">
        <?php the_content(); ?>
    </div>
    <div class="services-bottom-image">
        <?php if ($bottom_image = get_theme_mod('service_bottom_image')) : ?>
            <img src="<?php echo esc_url($bottom_image); ?>" alt="Bottom Image">
        <?php endif; ?>
    </div>
</div>

<?php
get_footer();
?>