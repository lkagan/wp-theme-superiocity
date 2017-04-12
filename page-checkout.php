<?php
/*
Template Name: Checkout
Template Post Type: page
*/

get_header( 'checkout' );
?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="post centered-block" id="post-<?php the_ID(); ?>">
		<h1><?php the_title(); ?></h1>
		<div class="entry">
			<?php the_content(); ?>
		</div>
	</div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>