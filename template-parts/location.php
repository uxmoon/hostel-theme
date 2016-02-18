<?php
/*
Template Name: Location
*/
get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <?php while ( have_posts() ) : the_post(); ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">
                    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                </header>
                <div class="entry-content">
                    <?php the_content(); ?>

                    <!-- location map -->
                    <?php

                    $args = array(
                        'type'         => 'map',
                        'width'        => '100%', // Map width, default is 640px. Can be '%' or 'px'
                        'height'       => '480px', // Map height, default is 480px. Can be '%' or 'px'
                        // 'zoom'         => 14,  // Map zoom, default is the value set in admin, and if it's omitted - 14
                        'marker'       => true, // Display marker? Default is 'true',
                        'marker_title' => '', // Marker title when hover
                        'info_window'  => '<h3>Info Window Title</h3>Info window content. HTML <strong>allowed</strong>', // Info window content, can be anything. HTML allowed.
                        'js_options'   => array(
                            'mapTypeId'   => 'HYBRID',
                            'zoomControl' => false,
                            'scrollwheel' => false,
                            'zoom'        => 17, // You can use 'zoom' inside 'js_options' or as a separated parameter
                        )
                    );
                    echo rwmb_meta( 'location_map', $args ); // For current post
                    // echo rwmb_meta( 'loc', $args, $post_id ); // For another post with $post_id
                    ?>

                    <!-- location map text -->
                    <?php echo rwmb_meta( 'location_map_text' ); ?>

                    <!-- location media -->
                    <?php
                        $images = rwmb_meta( 'location_drive_directions_media', 'type=image&size=full' );
                        foreach ( $images as $image )
                        {
                            echo "<img src='{$image['url']}' width='{$image['width']}' height='{$image['height']}' alt='{$image['alt']}' />";
                        }
                    ?>

                    <!-- location text -->
                    <?php echo rwmb_meta( 'location_drive_directions_text' ); ?>
                </div>
            </article>

            <?php endwhile; ?>

        </main>
    </div>

<?php get_footer(); ?>
