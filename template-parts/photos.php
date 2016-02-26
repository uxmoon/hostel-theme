<?php
/*
Template Name: Photos
*/
get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main row" role="main">

            <?php while ( have_posts() ) : the_post(); ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">
                    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                </header>
                <div class="entry-content">
                    <?php //the_content(); ?>

                    <?php
                    $args = array(
                        'showposts' => '-1',
                        'post_type' => 'fotos',
                    );

                    $the_query = new WP_Query( $args );
                    ?>

                    <?php if ( $the_query->have_posts() ) : ?>

                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                    <?php the_title(); ?>

                    <div class="slider-fotos">
                    <?php
                    $images = rwmb_meta( 'loslenos_imgadv', 'type=image&size=fotos-thumbnail' );
                    foreach ( $images as $image ) {
                        echo "<div class='slider-fotos-item'><img src='{$image['url']}' width='{$image['width']}' height='{$image['height']}' alt='{$image['alt']}' /></div>\n";
                    } ?>
                    <div class="slider-fotos-nav"></div>
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
