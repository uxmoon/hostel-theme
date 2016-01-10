<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
    </header>
    <div class="entry-content">
        <?php //the_content(); ?>
        <h2>Precios por día</h2>
        <p>Habitación Doble <?php echo rwmb_meta( 'rates_double_room_rate' ); ?></p>
        <p>Habitación Triple <?php echo rwmb_meta( 'rates_triple_room_rate' ); ?></p>
        <p>Habitación Cuádruple <?php echo rwmb_meta( 'rates_quadruple_room_rate' ); ?></p>
        <p>Check In: <?php echo rwmb_meta( 'rates_checkin_hour' ); ?></p>
        <p>Check Out: <?php echo rwmb_meta( 'rates_checkout_hour' ); ?></p>
        <p>Late Check Out: <?php echo rwmb_meta( 'rates_late_checkout' ); ?></p>
        <p><?php echo rwmb_meta( 'rates_restrictions' ); ?></p>

        <p>Si quiere realizar una reserva o hacernos alguna consulta puede <a href="#">contactarnos</a></p>
    </div>
</article>