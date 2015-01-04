<?php
/**
 * Editor functions and definitions
 *
 * @package Sub-Editor
 */

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/editor-style.css' );
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/rtl.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_uri(), array( 'parent-style' ) );
}

// Custom widget area.
register_sidebar( array(
	'name'          => __( 'Primary Sidebar', 'editor' ),
	'id'            => 'sidebar-0',
	'description'   => 'Widget area for primary sidebar',
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget'  => '</aside>',
	'before_title'  => '<h2 class="widget-title">',
	'after_title'   => '</h2>',
) );	

?>

