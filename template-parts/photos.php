<?php
/*
Template Name: Photos
*/
get_header(); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main row" role="main">

    <?php while ( have_posts() ) : the_post(); ?>

      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="entry-content">

          <?php
          $args = array(
            'showposts' => '-1',
            'post_type' => 'fotos',
            );

          $the_query = new WP_Query( $args );
          ?>

          <?php if ( $the_query->have_posts() ) : ?>

            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

            <div class="hosteria-galeria">
                <?php the_title('<h2>','</h2>'); ?>

                <div class="bxfotos">
                  <?php
                  $images = rwmb_meta( 'loslenos_imgadv', 'type=image&size=fotos-thumbnail' );
                  foreach ( $images as $image ) {
                    echo "<div><img src='{$image['url']}' width='{$image['width']}' height='{$image['height']}' alt='{$image['alt']}' /></div>\n";
                  } ?>
                </div>
            </div>
              <?php endwhile; ?>

            <?php wp_reset_postdata(); ?>

          <?php else: ?>

            <p><?php _e( 'En este momento no hay fotos publicadas.' ); ?></p>

          <?php endif; ?>
        </div>
      </article>

    <?php endwhile; ?>

  </main>
</div>

<?php get_footer(); ?>
