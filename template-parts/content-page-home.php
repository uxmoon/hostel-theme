<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php // the_title( '<h1 class="entry-title">', '</h1>' ); ?>
    </header>
    <div class="entry-content">
        <?php // the_content(); ?>

        <!-- slider -->
        <div class="slider-home">
            <?php $images = rwmb_meta( 'image_advanced', 'type=image&size=full_url' );
            foreach ( $images as $image ) {
                echo "<div><img src='{$image['url']}' width='{$image['width']}' height='{$image['height']}' alt='Hosteria Los Leños'></div>";
            } ?>
        </div>

        <!-- featured services bg image -->
        <?php
            $images = rwmb_meta( 'home_featured_bg_image', 'type=image&size=full' );
            foreach ( $images as $image )
            {
                echo "<div style='background-image: url({$image['url']});'>";
            }
        ?>

        <!-- featured service -->
        <?php echo rwmb_meta( 'first_featured_title' ); ?>
        <?php
            $images = rwmb_meta( 'first_featured_media', 'type=image&size=full' );
            foreach ( $images as $image )
            {
                echo "<img src='{$image['url']}' width='{$image['width']}' height='{$image['height']}' alt='{$image['alt']}' />";
            }
        ?>

        <!-- featured service -->
        <?php echo rwmb_meta( 'second_featured_title' ); ?>
        <?php
            $images = rwmb_meta( 'second_featured_media', 'type=image&size=full' );
            foreach ( $images as $image )
            {
                echo "<img src='{$image['url']}' width='{$image['width']}' height='{$image['height']}' alt='{$image['alt']}' />";
            }
        ?>

        <!-- featured service -->
        <?php echo rwmb_meta( 'third_featured_title' ); ?>
        <?php
            $images = rwmb_meta( 'third_featured_media', 'type=image&size=full' );
            foreach ( $images as $image )
            {
                echo "<img src='{$image['url']}' width='{$image['width']}' height='{$image['height']}' alt='{$image['alt']}' />";
            }
        ?>
        </div>

        <!-- featured text -->
        <?php echo rwmb_meta( 'featured_text' ); ?>

        <!-- tourism text -->
        <h3>Elija hacer turismo tranquilo</h3>
        <?php echo rwmb_meta( 'home_tourism_text' ); ?>
    </div>
</article>