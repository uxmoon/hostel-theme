<?php
    $settings = get_option( 'my_options' );
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
    </header>
    <div class="entry-content">

    <?php
    $field_phone = 'general_phone';
    if ( isset( $settings[$field_phone] ) )
    {
        echo '<p>Puede contactarnos a los siguientes teléfonos:' . $settings[$field_phone];
    }

    $field_cellphone = 'general_cellphone';
    if ( isset( $settings[$field_cellphone] ) )
    {
        echo $settings[$field_cellphone] . '</p>';
    }


    $field_email = 'general_email';
    if ( isset( $settings[$field_email] ) ) {
        echo '<p>O enviarnos un mail a: ' . $settings[$field_email] . '</p>';
    }
    ?>

        <?php the_content(); ?>
    </div>
</article>