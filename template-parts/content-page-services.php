<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
    </header>
    <div class="entry-content">
        <?php the_content(); ?>

        <!-- services other -->
        <?php echo rwmb_meta( 'services_tourism_other' ); ?>

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
        <?php echo rwmb_meta( 'services_pilars_text' ); ?>
    </div>
</article>