<?php
/**
 * Miscellaneous setup for the superiocity theme.
 *
 * @package superiocity
 */

declare(strict_types = 1);

/**
 * Theme initialization.
 */
function superiocity_init() {
	// Add RSS links to <head> section.
	add_theme_support( 'automatic-feed-link' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'menus' );
	add_theme_support( 'post-thumbnails', array( 'post' ) );
}

add_action( 'init', 'superiocity_init' );

/**
 * Enqueue script and styles.
 */
function enqueue_superiocity_scripts() {
	if ( ! is_admin() ) {
		wp_enqueue_script( 'jquery' );
		wp_register_script( 'superiocity-main',
			get_bloginfo( 'template_url' ) . '/javascript/main.min.js', false,
			'20150113', false );
		wp_enqueue_script( 'superiocity-main' );

		wp_register_style( 'font-awesome',
			get_stylesheet_directory_uri() . '/css/font-awesome-4.7.0/css/font-awesome.min.css',
			false );
		wp_enqueue_style( 'font-awesome' );
	}
}

add_action( 'wp_enqueue_scripts', 'enqueue_superiocity_scripts' );

// Clean up the <head>
function remove_head_links() {
	remove_action( 'wp_head', 'rsd_link' );
	remove_action( 'wp_head', 'wlwmanifest_link' );
}

add_action( 'init', 'remove_head_links' );
remove_action( 'wp_head', 'wp_generator' );

// Declare sidebar widget zone
if ( function_exists( 'register_sidebar' ) ) {
	register_sidebar( array (
		'name'          => 'Sidebar Widgets',
		'id'            => 'sidebar-widgets',
		'description'   => 'These are widgets for the sidebar.',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );
}


register_nav_menu( 'superiocity-main', 'Superiocity Main Menu' );

function new_excerpt_more( $more ) {
	return '... <a class="read-more" href="' . get_permalink( get_the_ID() ) . '">' . __( 'read more' ) . '</a>';
}

add_filter( 'excerpt_more', 'new_excerpt_more' );
