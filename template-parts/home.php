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

        <div class="slider-home bxslider">
          <?php $images = rwmb_meta( 'image_advanced', 'type=image&size=full' );
          foreach ( $images as $image )
          {
            echo "<div style='background-image:url({$image['url']});'></div>";
          }
          ?>
        </div>

        <div class="home-featured-services">
          <div class="row">
            <div class="one-third">
              <?php $link1 = rwmb_meta( 'first_featured_page' ); ?>

              <a href="<?php echo esc_url( get_permalink($link1) ); ?>">
                  <?php
                  $images = rwmb_meta( 'first_featured_media', 'type=image&size=full' );
                  foreach ( $images as $image )
                  {
                    echo "<div class='item' style='background-image:url({$image['url']});'>";
                  }
                  ?>

                  <h2><?php echo rwmb_meta( 'first_featured_title' ); ?></h2>
                </div>
              </a>
            </div>
            <div class="one-third">
              <?php $link2 = rwmb_meta( 'second_featured_page' ); ?>

              <a href="<?php echo esc_url( get_permalink($link2) ); ?>">
                <?php
                $images = rwmb_meta( 'second_featured_media', 'type=image&size=full' );
                foreach ( $images as $image )
                {
                  echo "<div class='item' style='background-image:url({$image['url']});'>";
                }
                ?>

                  <h2><?php echo rwmb_meta( 'second_featured_title' ); ?></h2>
                </div>
              </a>
            </div>
            <div class="one-third">
              <?php $link3 = rwmb_meta( 'third_featured_page' ); ?>

              <a href="<?php echo esc_url( get_permalink($link3) ); ?>">
                <?php
                $images = rwmb_meta( 'third_featured_media', 'type=image&size=full' );
                foreach ( $images as $image )
                {
                  echo "<div class='item' style='background-image:url({$image['url']});'>";
                }
                ?>

                  <h2><?php echo rwmb_meta( 'third_featured_title' ); ?></h2>
                </div>
              </a>
            </div>
          </div>
        </div>

        <?php
        $images = rwmb_meta( 'home_featured_bg_image', 'type=image&size=full' );
        foreach ( $images as $image )
        {
          echo "<div class='home-featured-text' style='background-image: url({$image['url']});'>";
        }
        ?>

          <?php echo rwmb_meta( 'featured_text' ); ?>
        </div>

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
