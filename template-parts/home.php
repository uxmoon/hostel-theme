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
        <div class="slider-home bxslider">
          <?php $images = rwmb_meta( 'image_advanced', 'type=image&size=full_url' );
          foreach ( $images as $image ) {
            echo "<div><img src='{$image['url']}' width='{$image['width']}' height='{$image['height']}' alt='Hosteria Los Leños'></div>";
          } ?>
        </div>

        <!-- featured services bg image -->
          <?php
          $images = rwmb_meta( 'home_featured_bg_image', 'type=image&size=full' );
          foreach ( $images as $image )
          {
            echo "<div style='background-image: url({$image['url']});'>";
          }
          ?>

        <div class="home-featured-services">
          <div class="row">
          <div class="one-third">
              <?php
              $images = rwmb_meta( 'first_featured_media', 'type=image&size=full' );
              foreach ( $images as $image )
              {
                echo "<div class='item' style='background-image:url({$image['url']});'>";
              }
              ?>
              <h2><?php echo rwmb_meta( 'first_featured_title' ); ?></h2>
            </div>
          </div>
          <div class="one-third">
            <?php
            $images = rwmb_meta( 'second_featured_media', 'type=image&size=full' );
            foreach ( $images as $image )
            {
              echo "<div class='item' style='background-image:url({$image['url']});'>";
            }
            ?>
              <h2><?php echo rwmb_meta( 'second_featured_title' ); ?></h2>
            </div>
          </div>
          <div class="one-third">
            <?php
            $images = rwmb_meta( 'third_featured_media', 'type=image&size=full' );
            foreach ( $images as $image )
            {
              echo "<div class='item' style='background-image:url({$image['url']});'>";
            }
            ?>
              <h2><?php echo rwmb_meta( 'third_featured_title' ); ?></h2>
            </div>
          </div>
          </div>
        </div>

        <!-- featured text -->
        <div class="home-featured-text">
          <?php echo rwmb_meta( 'featured_text' ); ?>
        </div>

        <!-- tourism text -->
        <div class="row home-tourism-text">
          <div class="sidebar">
            <h3>Elija hacer <strong>turismo tranquilo</strong></h3>
            <div class="decoration decoration-01"></div>
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
