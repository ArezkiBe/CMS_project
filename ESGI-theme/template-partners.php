<?php
/*
Template Name: Partners
*/
?>

<?php
get_header();
?>

<div class="partners-container">
    <h1><?php the_title(); ?></h1>
    <?php
    get_template_part('template-parts/partners-logos');
    ?>
</div>

<?php
get_footer();
?>