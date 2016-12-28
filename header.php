<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="format-detection" content="telephone=no">

    <?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" />
	<?php } ?>

	<?php if ( SUPERIOCITY_IS_MAIN_SITE && is_front_page() ): ?>
		<script type="application/ld+json">
		{
			"@context" : "http://schema.org",
			"@type" : "Organization",
			"url" : "https://www.superiocity.com",
			"logo" : "https://www.superiocity.com/wp-content/uploads/2015/09/superiocity-text-300x300.png",
			"contactPoint" : [{
				"@type" : "ContactPoint",
				"telephone" : "+1-561-336-1119",
				"contactType" : "customer service"
			}],
			"sameAs" : [
				"https://www.facebook.com/superiocity",
				"https://twitter.com/superiocity_web",
				"https://plus.google.com/+Superiocity-web",
				"https://www.linkedin.com/company/superiocity",
				"https://instagram.com/superiocity_web/",
				"https://www.youtube.com/channel/UCKPDVD0PMLHbyCiWYploOvA"
			]
		}
		</script>
	<?php endif; ?>
	<title>
		   <?php
		   if ( function_exists( 'is_tag' ) && is_tag() ) {
			   single_tag_title( "Tag Archive for &quot;" );
			   echo '&quot; - ';
		   } elseif ( is_archive() ) {
			   wp_title( '' );
			   echo ' Archive | ';
		   } elseif ( is_search() ) {
			   echo 'Search for &quot;' . wp_specialchars( $s ) . '&quot; - ';
		   } else if ( is_front_page() && SUPERIOCITY_IS_MAIN_SITE ) {
			   bloginfo();
			   echo ' | ';
			   wp_title();
		   } elseif ( ! ( is_404() ) && ( is_single() ) || ( is_page() ) ) {
			   wp_title();
			   echo ' | ';
			   bloginfo();
		   } elseif ( is_404() ) {
			   echo 'Not Found | ';
		   }
		   if ( is_home() ) {
			   echo 'Articles | ';
			   bloginfo();
		   } else {
		   }
		   if ( $paged > 1 ) {
			   echo ' | page ' . $paged;
		   }
		   ?>
	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?= bloginfo('template_url') ?>/images/favicon.png" type="image/png">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<?php if ( is_singular() ) wp_enqueue_script('comment-reply'); ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class( is_front_page() ? 'home' : 'inner' ); ?>>
    <div class="page">
        <header class="clearfix">
	        <div class="branding">
		        <a href="/"><img src="<?= bloginfo('template_url'); ?>/images/superiocity.svg" width="120" alt="Superiocity Web Development and Design"></a>
		        <div class="comp-name">
			        <a href="<?php echo SUPERIOCITY_IS_MAIN_SITE ? '/' : 'https://www.superiocity.com/' ?>">
			        <?php if ( is_front_page() ): ?>
						<h1 class="company-name">Superiocity</h1>
			        <?php else: ?>
				        <h2 class="company-name">Superiocity</h2>
			        <?php endif; ?><span class="trademark">&reg;</span>
				        </a>
                    <h2 style="text-docoration: none !important;"><?php bloginfo( 'description' ) ?></h2>
				</div>
	        </div>
            <div class="contact">
                <span class="phone"><i class="fa fa-phone"></i><?php if( function_exists( 'eeb_content' ) )  echo eeb_content('<a href="tel:5613361119">(561) 336-1119</a>'); ?></span><br>
                <span class="email"><i class="fa fa-envelope"></i><span class="emailLink"><?php if( function_exists( 'eeb_content' ) ) echo eeb_content('<a href="mailto:larry@superiocity.com">larry@superiocity.com</a>'); ?></span></span>
            </div>
        </header>
        <div class="contiguous">
            <div class="masthead">
                <div class="video-bg">
                    <video src="<?php echo get_template_directory_uri() ?>/bubbles.mp4" autoplay loop poster="<?php echo get_template_directory_uri() ?>/images/bubbles-poster.jpg">
                        <source src="<?php echo get_template_directory_uri() ?>/bubbles.webm">
                        <source src="<?php echo get_template_directory_uri() ?>/bubbles.mp4">
                    </video>
                </div>
                <div class="text">
					<div class="line1">Superior Websites</div>
					<div class="line2">Get Superior Results</div>
                </div>
                <img class="larry" src="<?= bloginfo('template_url'); ?>/images/me.png">
            </div><!-- .masthead -->
	        <?php if( has_nav_menu( 'superiocity-main' ) ): ?>
            <nav class="menu-button">
                <ul class="clearfix">
                    <li><a href="#" id="menu-button"><i class="fa fa-bars"></i> Menu</a></li>
                </ul>
            </nav>
            <?php wp_nav_menu( array( 'container' => 'nav' )); ?>
			<?php endif; ?>
            <div class="main clearfix">
