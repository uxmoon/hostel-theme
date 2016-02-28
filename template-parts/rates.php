<?php
/*
Template Name: Rates
*/
get_header(); ?>

    <div id="primary" class="content-area page-bottom">
        <main id="main" class="site-main" role="main">

            <?php while ( have_posts() ) : the_post(); ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header row">
                    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                </header>
                <div class="entry-content">
                    <div class="hosteria-rates">
                        <div class="row">
                            <h2>Precios por día</h2>
                        </div>
                        <div class="row">
                            <div class="one-third">
                                <p>Habitación Doble <strong><?php echo rwmb_meta( 'rates_double_room_rate' ); ?></strong></p>
                            </div>
                            <div class="one-third">
                                <p>Habitación Triple <strong><?php echo rwmb_meta( 'rates_triple_room_rate' ); ?></strong></p>
                            </div>
                            <div class="one-third">
                                <p>Habitación Cuádruple <strong><?php echo rwmb_meta( 'rates_quadruple_room_rate' ); ?></strong></p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="hosteria-hours half">
                            <p>Check In: <?php echo rwmb_meta( 'rates_checkin_hour' ); ?> - Check Out: <?php echo rwmb_meta( 'rates_checkout_hour' ); ?></p>
                            <p><strong>Late Check Out:</strong> <?php echo rwmb_meta( 'rates_late_checkout' ); ?></p>
                        </div>
                        <div class="hosteria-restrictions half">
                            <p><?php echo rwmb_meta( 'rates_restrictions' ); ?></p>
                        </div>
                    </div>

                </div>
            </article>
            <div class="hosteria-contact-us">
                <div class="row">
                    <span class="decoration decoration-04"></span>
                    <p>Si quiere realizar una reserva o hacernos alguna consulta puede <a href="<?php echo esc_url( home_url( '/' ) ); ?>/contacto" class="button">contactarnos</a></p>
                </div>
            </div>
            <?php endwhile; ?>
        </main>
    </div>

<?php get_footer(); ?>
