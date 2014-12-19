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

	<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon.ico">

	<meta name="MobileOptimized" content="width">
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php if ( is_singular() ) wp_enqueue_script('comment-reply'); ?>

	<?php wp_head(); ?>
	<!--[if lt IE 7.]>
	<script defer type="text/javascript" src="<?php bloginfo('template_url'); ?>/javascript/pngfix.js"></script>
	<![endif]-->
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/javascript/main.js"></script>
</head>

<body <?php body_class(); ?>>
	<div id="layout">
	 <div id="nameHeader">
        <a href="/"><img src="/wp-content/themes/superiocity.com/images/header.png" width="681" height="245" alt="Superiocity Logo and header image" /></a>
    </div>
    <div id="phoneNumber">
       (561) 674-5123
    </div>
	<div id="menu">
        <div id="links">
            <a href="/" title="Home">Home</a> |
            <a href="/services/" title="Services">Services</a> |
            <a href="/about/" title="About">About</a>  |
            <a href="/testimonials/" title="Testimonials">Testimonials</a> |
            <a href="/portfolio/" title="Portfolio">Portfolio</a> |
            <a href="/contact/" title="Contact">Contact</a>
        </div>
	</div>
    <div id="content">
