<?php
/* 
    This is function file of theme
*/

// Hide admin bar from live preview
show_admin_bar(false);

// Setup theme supports
function wplearning_theme_setup() {
    // Add Custom logo support
    add_theme_support('custom-logo');

    // Add title tag support
    add_theme_support( 'title-tag' );

    // Add Featured image or Post thumbnail support
    add_theme_support( 'post-thumbnails' );

    // Add image size support
    add_image_size('home-featured', 640, 400, array('center', 'center'));

    // Add Automatic feed links support
    add_theme_support( 'automatic-feed-links' );

    // Register main navigation menu
    register_nav_menus( array(
        'primary'   => __( 'Primary Menu', 'wplearning' )
    ) );

    // Add custom header support
    $args = array (
        'default-image'      => get_template_directory_uri().'/assets/img/header.jpg',
        'default-text-color' => '000',
        'width'              => 1920,
        'height'             => 400,
        'flex-width'         => true,
        'flex-height'        => true,
    );
    add_theme_support( 'custom-header', $args );
}

// Execute function
add_action('after_setup_theme', 'wplearning_theme_setup');

// Link all scripts
function wplearning_theme_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri()."/assets/bootstrap/css/bootstrap.min.css" );
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri()."/assets/bootstrap/js/bootstrap.min.js" );
}

// Get scripts into action
add_action( 'wp_enqueue_scripts', 'wplearning_theme_scripts' );

// Registering Sidebar & widgets area
function wplearning_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Primary Sidebar', 'theme_name' ),
        'id'            => 'main-sidebar',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer Widget 1', 'theme_name' ),
        'id'            => 'footer-widget-1',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer Widget 2', 'theme_name' ),
        'id'            => 'footer-widget-2',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer Widget 3', 'theme_name' ),
        'id'            => 'footer-widget-3',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'wplearning_widgets_init' );

?>