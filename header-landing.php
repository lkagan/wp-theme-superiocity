<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="format-detection" content="telephone=no">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?= bloginfo('template_url') ?>/images/favicon.png" type="image/png">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<?php if ( is_singular() ) wp_enqueue_script('comment-reply'); ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class( is_front_page() ? 'home' : 'inner' . ' landing' ); ?>>
    <div class="page">
		<header class="site-header">
			<div class="branding">
				<div class="first-line">
					<?php
					if( function_exists( 'get_field' ) ) {
						$landing_home_url = get_field( 'home_url', $GLOBALS['post']->ID );
					}
					?>
					<a href="<?= $landing_home_url ?>"><img src="<?= bloginfo('template_url'); ?>/images/superiocity.svg" width="120" class="logo" alt="Superiocity Web Development and Design"></a>
					<div class="comp-name">
						<a href="<?= $landing_home_url ?>"><h1 class="company-name"><?php echo get_the_title( $_POST['id'] ?? null ); ?></h1></a>
                        <a href="/"><div class="by-line">by Superiocity <span class="trademark">&reg;</span></div></a>
					</div>
				</div>
			</div>
		</header>
            <div class="masthead">
                <div class="background-overlay"></div>
                <div class="video-bg">
                    <video id="bubble-video" src="<?php echo get_template_directory_uri() ?>/bubbles.mp4" autoplay loop poster="<?php echo get_template_directory_uri() ?>/images/bubbles-poster.jpg">
                        <source src="<?php echo get_template_directory_uri() ?>/bubbles.webm">
                        <source src="<?php echo get_template_directory_uri() ?>/bubbles.mp4">
                    </video>
                </div>
                <div class="wrapper">
					<div class="text">
						<?php
						if( function_exists( 'get_field' ) ) {
							echo get_field_object( 'masthead_content', $GLOBALS['post']->ID, false )['value'];
						}
						?>
					</div><!-- .text -->
                    <a href="#lower" class="angle-down"><i id="lower" class="fa-angle-down fa"></i></a>
                </div><!-- .wrapper -->
                <div class="arrow-down dark"></div>
            </div><!-- .masthead -->
        <div class="main clearfix" >
