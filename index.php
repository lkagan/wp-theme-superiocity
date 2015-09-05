<?php get_header(); ?>
<?php if ( is_home() && get_option( 'page_for_posts' ) ) : ?>
	<header class="entry-header">
		<h1 class="entry-title"><?php echo apply_filters( 'the_title',
				get_page( get_option( 'page_for_posts' ) )->post_title ); ?></h1>
	</header>
<?php endif; ?>
<div class="blog-container">
	<div class="entries">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
				<?php include( TEMPLATEPATH . '/inc/meta.php' ); ?>
				<div class="entry">
					<?php the_excerpt(); ?>
				</div>
			</div>
		<?php endwhile; ?>
			<?php include( TEMPLATEPATH . '/inc/nav.php' ); ?>
		<?php else : ?>
			<h2>Not Found</h2>
		<?php endif; ?>
	</div>
	<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>