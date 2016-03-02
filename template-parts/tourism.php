<?php
/*
Template Name: Tourism
*/
get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main row" role="main">

            <?php while ( have_posts() ) : the_post(); ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header row">
                    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                </header>
                <div class="entry-content">
                    <div class="row">
                        <div class="one-third">
                        <?php wp_nav_menu(
                            array(
                                'theme_location' => 'sidebar',
                                'menu_id'        => '',
                                'container'      => '',
                                )
                            );
                        ?>
                        </div>
                        <div class="two-thirds hosteria-tourism-history">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
            </article>

            <?php endwhile; ?>

        </main>
    </div>

<?php get_footer(); ?>
