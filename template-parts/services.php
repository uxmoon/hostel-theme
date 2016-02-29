<?php
/*
Template Name: Services
*/
get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <?php while ( have_posts() ) : the_post();  ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header row">
                    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                </header>
                <div class="entry-content">

                    <div class="hosteria-services-list row">
                        <?php the_content(); ?>
                    </div>

                    <div class="hosteria-services-tourism">
                        <div class="row">
                            <span class="decoration decoration-03"></span>
                            <?php echo rwmb_meta( 'services_tourism_other' ); ?>
                        </div>
                    </div>

                    <?php
                        $images = rwmb_meta( 'services_tourism_media', 'type=image&size=full' );
                        foreach ( $images as $image )
                        {
                            echo "<img src='{$image['url']}' width='{$image['width']}' height='{$image['height']}' alt='{$image['alt']}' />";
                        }
                    ?>
                    <?php echo rwmb_meta( 'services_tourism_text' ); ?>


                    <?php echo rwmb_meta( 'services_pilars_text' ); ?>
                    <?php echo rwmb_meta( 'services_pilars_text_2' ); ?>
                </div>
            </article>

            <?php endwhile; ?>

        </main>
    </div>

<?php get_footer(); ?>
