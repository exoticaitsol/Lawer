<?php
include_once 'lib/custom_post_type.php';
function add_style() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
}

add_action( 'wp_enqueue_scripts', 'add_style' );


add_action( 'wp_enqueue_scripts', function() {
    $themeUrl = get_template_directory_uri();

    // css files
    wp_enqueue_style( 'another-css', $themeUrl . '/assets/css/bootstrap.min.css' );
    wp_enqueue_style( 'another-css', $themeUrl . '/assets/css/main.css' );
    wp_enqueue_style( 'another-css', $themeUrl . '/assets/css/slick.css' );
    wp_enqueue_style( 'another-css', $themeUrl . '/assets/css/slick-theme.css' );

    // js files
    wp_enqueue_script( 'plugin-js', $themeUrl . '/assets/js/bootstrap.bundle.min.js', array(), '1.0', true );
    wp_enqueue_script( 'main-js', $themeUrl .   '/assets/js/main.js', array(), '1.0', true );
    wp_enqueue_script( 'plugin-js', $themeUrl . '/assets/js/slick.min.js', array(), '1.0', true );
    
} );


register_sidebar( array(
    'name' => __( 'header_phone_details', 'wpb' ),
    'id' => 'sidebar-1210',
    'description' => __( 'The main sidebar appears on the right on each page except the front page template', 'wpb' ),
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
) );

register_sidebar( array(
    'name' => __( 'footer_content', 'wpb' ),
    'id' => 'sidebar-1211',
    'description' => __( 'The main sidebar appears on the right on each page except the front page template', 'wpb' ),
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
) );

register_sidebar( array(
    'name' => __( 'footer_contact_details', 'wpb' ),
    'id' => 'sidebar-1212',
    'description' => __( 'The main sidebar appears on the right on each page except the front page template', 'wpb' ),
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
) );
register_sidebar( array(
    'name' => __( 'footer_social', 'wpb' ),
    'id' => 'sidebar-1213',
    'description' => __( 'The main sidebar appears on the right on each page except the front page template', 'wpb' ),
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
) );

register_sidebar( array(
    'name' => __( 'footer_social_policy', 'wpb' ),
    'id' => 'sidebar-1213',
    'description' => __( 'The main sidebar appears on the right on each page except the front page template', 'wpb' ),
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
) );
register_sidebar( array(
    'name' => __( 'footer_copyright', 'wpb' ),
    'id' => 'sidebar-1214',
    'description' => __( 'The main sidebar appears on the right on each page except the front page template', 'wpb' ),
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
) );












