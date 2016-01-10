<?php
/*
Template Name: Rates
*/
get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <?php
            while ( have_posts() ) : the_post();

                get_template_part( 'template-parts/content', 'page-rates' );

            endwhile; ?>

        </main>
    </div>

<?php get_footer(); ?>
