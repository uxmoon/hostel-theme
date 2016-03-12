<?php
/*
Template Name: Homepage
*/
get_header(); ?>

<div id="primary" class="content-area page-home">
  <main id="main" class="site-main" role="main">
    <?php
    while ( have_posts() ) : the_post();
    ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <div class="entry-content">

        <!-- slider -->
        <div class="slider-home">
          <?php $images = rwmb_meta( 'image_advanced', 'type=image&size=full_url' );
          foreach ( $images as $image ) {
            echo "<div><img src='{$image['url']}' width='{$image['width']}' height='{$image['height']}' alt='Hosteria Los Leños'></div>";
          } ?>
        </div>

        <!-- featured services bg image -->
        <div class="row">
          <?php
          $images = rwmb_meta( 'home_featured_bg_image', 'type=image&size=full' );
          foreach ( $images as $image )
          {
            echo "<div style='background-image: url({$image['url']});'>";
          }
          ?>

          <!-- featured service -->
          <?php echo rwmb_meta( 'first_featured_title' ); ?>
          <?php
          $images = rwmb_meta( 'first_featured_media', 'type=image&size=full' );
          foreach ( $images as $image )
          {
            echo "<img src='{$image['url']}' width='{$image['width']}' height='{$image['height']}' alt='{$image['alt']}' />";
          }
          ?>

          <!-- featured service -->
          <?php echo rwmb_meta( 'second_featured_title' ); ?>
          <?php
          $images = rwmb_meta( 'second_featured_media', 'type=image&size=full' );
          foreach ( $images as $image )
          {
            echo "<img src='{$image['url']}' width='{$image['width']}' height='{$image['height']}' alt='{$image['alt']}' />";
          }
          ?>

          <!-- featured service -->
          <?php echo rwmb_meta( 'third_featured_title' ); ?>
          <?php
          $images = rwmb_meta( 'third_featured_media', 'type=image&size=full' );
          foreach ( $images as $image )
          {
            echo "<img src='{$image['url']}' width='{$image['width']}' height='{$image['height']}' alt='{$image['alt']}' />";
          }
          ?>
        </div>

        <!-- featured text -->
        <div class="home-featured-text">
          <?php echo rwmb_meta( 'featured_text' ); ?>
        </div>

        <!-- tourism text -->
        <div class="row">
          <div class="sidebar">
            <h3>Elija hacer turismo tranquilo</h3>
          </div>
          <div class="content">
            <?php echo rwmb_meta( 'home_tourism_text' ); ?>
          </div>
        </div>

      </div>
    </article>

    <?php
    endwhile;
    ?>

  </main>
</div>

<?php get_footer(); ?>
