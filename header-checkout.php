<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="format-detection" content="telephone=no">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?= bloginfo('template_url') ?>/images/favicon.png" type="image/png">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class( 'checkout inner' ); ?>>
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
			</header>
        <div class="main clearfix" >
