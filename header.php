<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" />
	<?php } ?>

	<?php if ( is_front_page() ): ?>
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
			   echo ' Archive: ';
		   } elseif ( is_search() ) {
			   echo 'Search for &quot;' . wp_specialchars( $s ) . '&quot; - ';
		   } elseif ( ! ( is_404() ) && ( is_single() ) || ( is_page() ) ) {
			   wp_title( '' );
			   echo ': ';
		   } elseif ( is_404() ) {
			   echo 'Not Found: ';
		   }
		   if ( is_home() ) {
			   echo 'Articles: ';
			   bloginfo( 'name' );
		   } else {
			   bloginfo( 'name' );
		   }
		   if ( $paged > 1 ) {
			   echo ': page ' . $paged;
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

<body <?php body_class(); ?>>
    <div class="page">
        <header class="clearfix">
	        <div class="branding">
		        <a href="/"><img src="<?= bloginfo('template_url'); ?>/images/superiocity.svg" width="120" alt="Superiocity Web Development and Design"></a>
		        <div class="comp-name">
			        <?php if ( is_front_page() ): ?>
						<a href="/"><h1 class="company-name">Superiocity</h1></a>
			        <?php else: ?>
				        <a href="/"><h2 class="company-name">Superiocity</h2></a>
			        <?php endif; ?><span class="trademark">SM</span>
                    <h2 style="text-docoration: none !important;"><?php bloginfo( 'description' ) ?></h2>
				</div>
	        </div>
            <div class="contact">
                <span class="phone"><i class="fa fa-phone"></i><?php if( function_exists( 'eeb_content' ) )  echo eeb_content('<a href="tel:5613361119">(561) 336-1119</a>'); ?></span><br>
                <span class="email"><i class="fa fa-envelope"></i><span class="emailLink"><?php if( function_exists( 'eeb_content' ) ) echo eeb_content('<a href="mailto:service@superiocity.com">service@superiocity.com</a>'); ?></span></span>
            </div>
        </header>
        <div class="contiguous">
            <div class="masthead">
                <dl class="text">
                    <dt>[soo-peer-ee-os-i-tee]:</dt>
                    <dd><em>noun</em>: The ability to provide superior web and mobile development services, on time and within budget.</dd>
                </dl> 
                <img class="larry" src="<?= bloginfo('template_url'); ?>/images/me2.png">
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
