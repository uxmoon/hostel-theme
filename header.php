<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>

<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
    <header id="masthead" class="site-header" role="banner">
        <div class="site-branding">
            <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?>. <?php bloginfo( 'description' ); ?>.</a></h1>
        </div>

        <nav id="site-navigation" class="main-navigation" role="navigation">
            <a href="#" class="site-menu-mobile">Menu</a>
            <?php wp_nav_menu(
                array(
                    'theme_location' => 'primary',
                    'container'      => '',
                    'menu_class'     => 'site-menu'
                    )
                );
            ?>
        </nav>
    </header>

    <div id="content" class="site-content">
