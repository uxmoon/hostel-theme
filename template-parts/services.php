<?php
/*
Template Name: Services
*/
get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main row" role="main">

            <?php while ( have_posts() ) : the_post();  ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">
                    <div class="row">
                        <div class="small-12 columns">
                            <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                        </div>
                    </div>
                </header>
                <div class="entry-content">
                    <div class="row">
                        <div class="small-12 columns">
                            <?php the_content(); ?>
                        </div>
                    </div>

                    <!-- services other -->
                    <div class="hl-row">
                        <div class="row">
                            <div class="small-12 columns">
                            <?php echo rwmb_meta( 'services_tourism_other' ); ?>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="small-12 columns">
                        <!-- services tourism -->
                        <?php
                            $images = rwmb_meta( 'services_tourism_media', 'type=image&size=full' );
                            foreach ( $images as $image )
                            {
                                echo "<img src='{$image['url']}' width='{$image['width']}' height='{$image['height']}' alt='{$image['alt']}' />";
                            }
                        ?>
                        <?php echo rwmb_meta( 'services_tourism_text' ); ?>

                        <!-- services pilars -->
                        <div class="hl-pilars">
                            <div class="row">
                                <div class="small-12 medium-6 columns">
                                    <?php echo rwmb_meta( 'services_pilars_text' ); ?>
                                </div>
                                <div class="small-12 medium-6 columns">
                                    <div class="hl-pilars-last">
                                        <?php echo rwmb_meta( 'services_pilars_text_2' ); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </article>

            <?php endwhile; ?>

        </main>
    </div>

<?php get_footer(); ?>
