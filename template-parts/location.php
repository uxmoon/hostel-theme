<?php
/*
Template Name: Location
*/
get_header(); ?>

    <div id="primary" class="content-area page-location">
        <main id="main" class="site-main" role="main">

            <?php while ( have_posts() ) : the_post(); ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header row">
                    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                </header>
                <div class="entry-content">

                    <div class="row">
                        <?php the_content(); ?>
                    </div>

                    <div class="hosteria-location-map-text-container">
                        <div class="hosteria-location-map-text">
                            <?php echo rwmb_meta( 'location_map_text' ); ?>
                        </div>
                    </div>

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
                    echo rwmb_meta( 'location_map', $args );
                    ?>
                    </div>

                    <div class="row">
                        <div class="sidebar">
                        <?php
                            $images = rwmb_meta( 'location_drive_directions_media', 'type=image&size=full' );
                            foreach ( $images as $image )
                            {
                                echo "<img src='{$image['url']}' width='{$image['width']}' height='{$image['height']}' alt='{$image['alt']}' />";
                            }
                        ?>
                        </div>
                        <div class="column hosteria-location-text">
                            <?php echo rwmb_meta( 'location_drive_directions_text' ); ?>
                        </div>
                    </div>
                </div>
            </article>

            <?php endwhile; ?>

        </main>
    </div>

<?php get_footer(); ?>
