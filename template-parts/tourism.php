<?php
/*
Template Name: Tourism
*/
get_header(); ?>

<div id="primary" class="content-area page-tourism">
  <main id="main" class="site-main row" role="main">

    <?php while ( have_posts() ) : the_post(); ?>

      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="entry-content">
          <div class="hosteria-tourism-nav entry-sidebar">
            <?php wp_nav_menu(
              array(
                'theme_location' => 'sidebar',
                'menu_id'        => '',
                'container'      => '',
                )
              );
              ?>
            </div>
            <div class="hosteria-tourism-history entry-column">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/turismo-en-papagayos.png" alt="Turismo en Papagayos. Tradición de palmeras." class="logo">
              <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
              <?php the_content(); ?>

              <?php if( is_page('30') ){ ?>
              <div class="hosteria-location-map">
                <?php

                $args = array(
                  'type'         => 'map',
                  'width'        => '100%',
                  'height'       => '480px',
                  'marker'       => true,
                  'js_options'   => array(
                    'mapTypeId'        => 'HYBRID',
                    'zoomControl'      => false,
                    'zoom'             => 17,
                    'scrollwheel'      => false,
                    'disableDefaultUI' => true,
                    )
                  );
                echo rwmb_meta( 'location_map_tourism', $args );
                ?>
              </div>
              <?php } ?>

            </div>
          </div>
        </div>
      </article>

    <?php endwhile; ?>

  </main>
</div>

<?php get_footer(); ?>
