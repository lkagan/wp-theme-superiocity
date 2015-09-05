<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" />
	<?php } ?>
	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
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
	        <div class="branding" itemscope itemtype="https://schema.org/Brand">
            <div itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
                  <meta itemprop="ratingValue" content="5">
                  <meta itemprop="bestRating" content="5">
                  <meta itemprop="ratingCount" content="12">
            </div>
		        <a href="/"><img itemprop="logo" src="<?= bloginfo('template_url'); ?>/images/superiocity.svg" width="120" alt="Superiocity Web Development and Design"></a>
		        <div class="comp-name">

			        <?php if ( is_front_page() ): ?>
						<a href="/"><h1 class="company-name" itemprop="name">Superiocity</h1></a>
			        <?php else: ?>
				        <a href="/"><h2 class="company-name" itemprop="name">Superiocity</h2></a>
			        <?php endif; ?><span class="trademark">SM</span>
                    <meta itemprop="url" content="<?php echo esc_url( site_url() ) ?>">
					<h2 style="text-docoration: none !important;">Web &amp; Mobile Development &amp; Design</h2>
				</div>
	        </div>
            <div class="contact">
                <span class="phone"><i class="fa fa-phone"></i><?= eeb_content('<a href="tel:5613361119">(561) 336-1119</a>'); ?></span><br>
                <span class="email"><i class="fa fa-envelope"></i><span class="emailLink"><?= eeb_content('<a href="mailto:service@superiocity.com">service@superiocity.com</a>'); ?></span></span>
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
            <nav class="menu-button">
                <ul class="clearfix">
                    <li><a href="#" id="menu-button"><i class="fa fa-bars"></i> Menu</a></li>
                </ul>
            </nav>
            <?php wp_nav_menu( array( 'container' => 'nav' )); ?>
            <div class="main clearfix">
