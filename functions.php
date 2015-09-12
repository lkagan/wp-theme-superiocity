<?php

// Add RSS links to <head> section
add_theme_support( 'automatic-feed-link' );


function enqueue_superiocity_scripts() {
	if ( ! is_admin() ) {
		if ( SUPERIOCITY_IS_MAIN_SITE ) {

			wp_deregister_script( 'jquery' );
			wp_register_script( 'jquery',
				( '//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js' ),
				false );
			wp_register_script( 'superiocity-main',
				get_bloginfo( 'template_url' ) . '/javascript/main.min.js', false,
				'20150113', false );
			wp_enqueue_script( 'jquery' );
			wp_enqueue_script( 'superiocity-main' );
		}

		wp_register_style( 'font-awesome',
			'//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css',
			false );
		wp_register_style( 'google-fonts',
			'//fonts.googleapis.com/css?family=Muli', false );
		wp_enqueue_style( 'font-awesome' );
		wp_enqueue_style( 'google-fonts' );
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

if ( SUPERIOCITY_IS_MAIN_SITE ) {
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

	add_theme_support( 'menus' );
	add_theme_support( 'post-thumbnails', array ( 'post' ) );

	register_nav_menu( 'superiocity-main', 'Superiocity Main Menu' );

	function new_excerpt_more( $more ) {
		return '... <a class="read-more" href="' . get_permalink( get_the_ID() ) . '">' . __( 'read more' ) . '</a>';
	}

	add_filter( 'excerpt_more', 'new_excerpt_more' );
}

// Disable Yoast SEO structured data
add_filter( 'wpseo_json_ld_output', '__return_false' );
