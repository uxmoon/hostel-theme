<?php
/*
Template Name: Contact
*/

// load cf7 scripts only in contact page
if ( function_exists( 'wpcf7_enqueue_scripts' ) ) {
    wpcf7_enqueue_scripts();
}
get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <?php
            while ( have_posts() ) : the_post();

                get_template_part( 'template-parts/content', 'page-contact' );

            endwhile; ?>

        </main>
    </div>

<?php get_footer(); ?>
