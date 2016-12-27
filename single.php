<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php if ( ! is_front_page() ): ?>
		<h1><?php the_title(); ?></h1>
	<?php endif; ?>
	<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
		<div class="blog-container">
			<article class="entry">
				<?php if ( has_post_thumbnail() ): ?>
					<div
						class="featured-image"><?php echo the_post_thumbnail() ?></div>
				<?php endif; ?>
				<?php the_content(); ?>
				<?php wp_link_pages( array(
					'before'         => 'Pages: ',
					'next_or_number' => 'number',
				) ); ?>
				<?php the_tags( 'Tags: ', ', ', '' ); ?>
				<?php edit_post_link( 'Edit this entry', '', '.' ); ?>
				<?php comments_template(); ?>
			</article>
			<?php get_sidebar(); ?>
		</div>
	</div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>