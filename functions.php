<?php
if ( ! function_exists( 'hosteria_setup' ) ) :
function hosteria_setup() {

  // Add default posts and comments RSS feed links to head.
  add_theme_support( 'automatic-feed-links' );

  /*
   * Let WordPress manage the document title.
   */
  add_theme_support( 'title-tag' );

  /*
   * Enable support for Post Thumbnails on posts and pages.
   */
  add_theme_support( 'post-thumbnails' );

  // This theme uses wp_nav_menu() in one location.
  register_nav_menus( array(
    'primary' => esc_html__( 'Principal', 'hosteria' ),
    'footer'  => esc_html__( 'Footer', 'hosteria' ),
    'sidebar' => esc_html__( 'Sidebar', 'hosteria' ),
  ) );

  /*
   * Switch default core markup for search form, comment form, and comments
   * to output valid HTML5.
   */
  add_theme_support( 'html5', array(
    'gallery',
  ) );
}
endif;
add_action( 'after_setup_theme', 'hosteria_setup' );

function hosteria_content_width() {
  $GLOBALS['content_width'] = apply_filters( 'hosteria_content_width', 640 );
}
add_action( 'after_setup_theme', 'hosteria_content_width', 0 );

/**
 * Register widget area.
 */
function hosteria_widgets_init() {
  register_sidebar( array(
    'name'          => esc_html__( 'Clima', 'hosteria' ),
    'id'            => 'sidebar-1',
    'description'   => '',
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
  ) );
}
add_action( 'widgets_init', 'hosteria_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function hosteria_scripts() {
  // wp_enqueue_style( 'hosteria-style', get_stylesheet_uri() );
  wp_enqueue_style( 'hosteria-css', get_template_directory_uri() . '/css/app.css' );

  wp_enqueue_script( 'hosteria-slider', get_template_directory_uri() . '/js/jquery.bxslider.min.js', array(), '', true );
  wp_enqueue_script( 'hosteria-js', get_template_directory_uri() . '/js/app.js', array(), '', true );
}
add_action( 'wp_enqueue_scripts', 'hosteria_scripts' );


/**
 * Load Metabox Settings Page
 */
require get_template_directory() . '/inc/mb-settings-page.php';

/**
 * Load Metabox Settings Page
 */
require get_template_directory() . '/inc/mb-pages.php';

/**
 * Wordpress and Plugins Tweaks
 */
require get_template_directory() . '/inc/wp-tweaks.php';
