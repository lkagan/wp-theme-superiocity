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
    <link href='http://fonts.googleapis.com/css?family=Muli' rel='stylesheet' type='text/css'>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="<?= bloginfo('template_url') ?>/images/favicon.png" type="image/png">
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/javascript/jquery.bxslider/jquery.bxslider.min.js"></script>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<?php if ( is_singular() ) wp_enqueue_script('comment-reply'); ?>
	<?php wp_head(); ?>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/javascript/main.js"></script>
</head>

<body <?php body_class(); ?>>
    <div class="page">
        <header class="clearfix">
            <a href="/">
                <img src="<?= bloginfo('template_url'); ?>/images/superiocity.svg" width="80" alt="Superiocity Web Development and Design"><h1>Superiocity</h1>
            </a>
            <div class="contact">
                <span class="phone"><i class="fa fa-phone"></i><a href="tel:5616745123">(561) 674-5123</a></span><br>
                <span class="email"><i class="fa fa-envelope"></i> 
            <script type="text/javascript">
//<![CDATA[
<!--
var x="function f(x){var i,o=\"\",ol=x.length,l=ol;while(x.charCodeAt(l/13)!" +
"=50){try{x+=x;l+=l;}catch(e){}}for(i=l-1;i>=0;i--){o+=x.charAt(i);}return o" +
".substr(0,ol);}f(\")32,\\\"EMGRXG130\\\\XJ030\\\\330\\\\020\\\\\\\\\\\\010\\"+
"\\400\\\\600\\\\r\\\\200\\\\500\\\\130\\\\710\\\\130\\\\530\\\\420\\\\&000\\"+
"\\700\\\\n\\\\420\\\\320\\\\500\\\\,`771\\\\000\\\\y600\\\\d=;\\\"\\\\< spr" +
"\\\\= -c5?#*'.4 461100\\\\%\\\\\\\\WKN^I300\\\\WCZ\\\\\\\\U^020\\\\mr\\\\IK" +
"_D310\\\\K520\\\\n\\\\710\\\\HIAWKSW1jsyvozws\\\"(f};o nruter};))++y(^)i(tA" +
"edoCrahc.x(edoCrahCmorf.gnirtS=+o;721=%y;2=*y))y+32(>i(fi{)++i;l<i;0=i(rof;" +
"htgnel.x=l,\\\"\\\"=o,i rav{)y,x(f noitcnuf\")"                              ;
while(x=eval(x));
//-->
//]]>
</script></span>
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
