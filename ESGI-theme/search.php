<?php get_header(); ?>

  <main id="main">

      <header class="site-header">
          <h1>
              <?php printf( esc_html__( 'Résultats de la recherche pour : %s', 'ESGI_theme' ), '<span>' . get_search_query() . '</span>' ); ?>
          </h1>
      </header>

      <?php
      $search_query = get_search_query();
      
      $args_pages = array(
          'post_type' => 'page',
          's' => $search_query,
          'posts_per_page' => -1
      );
      $pages_query = new WP_Query( $args_pages );

      $args_posts = array(
          'post_type' => 'post',
          's' => $search_query,
          'posts_per_page' => -1
      );
      $posts_query = new WP_Query( $args_posts );

      if ( $pages_query->have_posts() ) : ?>
          <section>
              <h2><?php printf( esc_html__( '%d page(s) trouvée(s)', 'ESGI_theme' ), $pages_query->found_posts ); ?></h2>
              <ul>
                  <?php while ( $pages_query->have_posts() ) : $pages_query->the_post(); ?>
                      <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                  <?php endwhile; ?>
              </ul>
          </section>
      <?php endif; 
      wp_reset_postdata();

      if ( $posts_query->have_posts() ) : ?>
          <section>
              <h2><?php printf( esc_html__( '%d article(s) trouvé(s)', 'ESGI_theme' ), $posts_query->found_posts ); ?></h2>
              <ul>
                  <?php while ( $posts_query->have_posts() ) : $posts_query->the_post(); ?>
                      <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                  <?php endwhile; ?>
              </ul>
          </section>
      <?php endif; 
      wp_reset_postdata();

      if ( !$pages_query->have_posts() && !$posts_query->have_posts() ) : ?>
          <p><?php esc_html_e( 'Aucun résultat trouvé.', 'ESGI_theme' ); ?></p>
      <?php endif; ?>

  </main>

<?php get_footer(); ?>
