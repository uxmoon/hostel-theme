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
                <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                <?php the_content(); ?>
              </div>
            </div>
          </div>
        </article>

      <?php endwhile; ?>

    </main>
  </div>

  <?php get_footer(); ?>
