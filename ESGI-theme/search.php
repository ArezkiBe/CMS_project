<?php
get_header();

if (isset($_GET['s'])) {
    $search_query = sanitize_text_field($_GET['s']);
} else {
    $search_query = '';
}

$args = array(
    's' => $search_query,
    'post_type' => array('post', 'page')
);
$the_query = new WP_Query($args);
?>

<div class="search-results-container">
    <h1>Search results for: <span><?php echo esc_html($search_query); ?></span></h1>
    <div class="search-results">
        <?php
        if ($the_query->have_posts()) {
            while ($the_query->have_posts()) {
                $the_query->the_post();
                ?>
                <div class="search-result-item">
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <p class="post-meta"><?php echo get_the_date(); ?></p>
                    <p><?php echo get_the_excerpt(); ?></p>
                </div>
                <?php
            }
        } else {
            ?>
            <p>No results found.</p>
            <?php
        }
        wp_reset_postdata();
        ?>
    </div>
</div>

<?php
get_footer();
?>
