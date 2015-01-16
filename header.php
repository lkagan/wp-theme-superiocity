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
	<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon.png">
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
            <a href="/">
                <img src="<?= bloginfo('template_url'); ?>/images/superiocity.svg" width="80" alt="Superiocity Web Development and Design"><h1>Superiocity</h1>
            </a>
            <div class="contact">
                <span class="phone"><i class="fa fa-phone"></i><a href="tel:5616745123">(561) 674-5123</a></span><br>
                <span class="email"><i class="fa fa-envelope"></i><span class="emailLink"></span></span>
            </div>
        </header>
        <div class="contiguous">
            <div class="masthead">
                <dl class="text">
                    <dt>[soo-peer-ee-os-i-tee]:</dt>
                    <dd><em>noun</em>: The ability to provide superior web development services, on time and within budget.</dd>
                </dl> 
                <img class="larry" src="<?= bloginfo('template_url'); ?>/images/me.png">
            </div><!-- .masthead -->
            <nav class="menu-button">
                <ul class="clearfix">
                    <li><a href="#" id="menu-button"><i class="fa fa-bars"></i> Menu</a></li>
                </ul>
            </nav>
            <?php wp_nav_menu( array( 'container' => 'nav' )); ?>
            <div class="main clearfix">
