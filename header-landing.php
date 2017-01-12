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

<body <?php body_class( is_front_page() ? 'home' : 'inner' ); ?>>
    <div class="page">
        <header class="site-header">
            <div class="branding">
                <div class="first-line">
					<a href="/"><img src="<?= bloginfo('template_url'); ?>/images/superiocity.svg" width="120" class="logo" alt="Superiocity Web Development and Design"></a>
					<div class="comp-name">
						<a href="/">
							<?php if ( is_front_page() ): ?>
								<h1 class="company-name">Superiocity</h1>
							<?php else: ?>
								<h2 class="company-name">Superiocity</h2>
							<?php endif; ?><span class="trademark">&reg;</span>
						</a>
					</div>
                </div>
                <h2><?php bloginfo( 'description' ) ?></h2>
            </div>
	        <?php if( has_nav_menu( 'superiocity-main' ) ): ?>
            <div class="menu-button menu-open">
                <a href="#" id="menu-button"><i class="fa fa-bars"></i> menu</a>
            </div>
            <div class="main-nav-wrapper">
                <a href="#" class="menu-close">close <i class="fa fa-angle-right"></i> </a>
				<?php wp_nav_menu( array( 'container' => 'nav' )); ?>
                <div class="menu-contact">
                    <span class="phone"><i class="fa fa-phone"></i> <?php if( function_exists( 'eeb_content' ) )  echo eeb_content('<a href="tel:5613361119">(561) 336-1119 <div class="tip"><i class="fa fa-hand-pointer-o"></i> tap to call</div></a>'); ?></span><br>
                    <span class="email"><i class="fa fa-envelope"></i> <span class="emailLink"><?php if( function_exists( 'eeb_content' ) ) echo eeb_content('<a href="mailto:larry@superiocity.com">larry@superiocity.com</a>'); ?></span></span>
                </div>
            </div>
        </header>
            <div class="masthead">
                <div class="video-bg">
                    <video id="bubble-video" src="<?php echo get_template_directory_uri() ?>/bubbles.mp4" autoplay loop poster="<?php echo get_template_directory_uri() ?>/images/bubbles-poster.jpg">
                        <source src="<?php echo get_template_directory_uri() ?>/bubbles.webm">
                        <source src="<?php echo get_template_directory_uri() ?>/bubbles.mp4">
                    </video>
                </div>
                <div class="wrapper">
					<div class="text">
                        <div class="tag1">Get Superior Results with a Superior Website</div>
                        <div class="call-to-action">
	                        <?php if( function_exists( 'eeb_content' ) )  echo eeb_content('<a href="tel:5613361119">
                            <span class="non-mobile">Call now</span>
                            <span class="mobile">Tap to call</span>
                            for a free consultation
                            <div class="phone">
								<i class="fa fa-phone"></i> (561) 336-1119</a>
                            </div>'); ?><!-- .phone -->
                        </div><!-- .call-to-action -->
					</div><!-- .text -->
                    <a href="#lower" class="angle-down"><i id="lower" class="fa-angle-down fa"></i></a>
                </div><!-- .wrapper -->
                <div class="arrow-down dark"></div>
            </div><!-- .masthead -->
			<?php endif; ?>
        <div class="main clearfix" >
