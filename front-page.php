<?php
/**
 * The front page of the site.
 */
get_header(); ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
			<div class="entry">


				<div class="quote-wrapper">
					<div class="centered-block">
						<h2>Superior Service</h2>
						<?php if ( have_rows( 'reviews' ) ) : ?>
							<ul class="quotes">
								<?php while ( have_rows( 'reviews' ) ) : the_row() ?>
									<li>
										<?php
										$super_image = get_sub_field( 'source_photo' );
										$super_source = get_sub_field( 'review_source' );

										switch ( $super_source ) {
											case 'Google':
												$super_link            = 'https://www.google.com/search?q=superiocity&oq=superiocity&aqs=chrome..69i57j69i60l3j69i65.6498j0j7&ie=UTF-8#lrd=0x88d9275ff906471d:0x11b3c594b8bece30,1,';
												$super_logo['path']    = '/wp-content/uploads/2017/04/google-logo-sm.png';
												$super_logo['height']  = '26';
												$super_logo['width']   = '75';
												$super_stars['path']   = '/wp-content/uploads/2017/04/google-5stars.png';
												$super_stars['width']  = '75';
												$super_stars['height'] = '13';
												break;
											case 'Yelp':
												$super_link            = 'https://www.yelp.com/biz/superiocity-boynton-beach';
												$super_logo['path']    = '/wp-content/uploads/2017/04/yelp-logo-sm.png';
												$super_logo['height']  = '26';
												$super_logo['width']   = '75';
												$super_stars['path']   = '/wp-content/uploads/2017/04/yelp-5stars.png';
												$super_stars['width']  = '75';
												$super_stars['height'] = '14';
												break;
										}

										if ( $super_image ) : ?>
											<img src="<?php echo esc_attr( $super_image['url'] ) ?>"
												 alt="<?php echo esc_attr( $super_image['alt'] ) ?>"
												 width="100" height="100" class="photo">
										<?php endif; ?>
										<div class="quote"><?php the_sub_field( 'review' ) ?></div>
										<div class="bottom">
											<div class="reviewer">
												<div class="name"><?php the_sub_field( 'source_name' ); ?></div>
												<div class="company"><?php the_sub_field( 'source_company' ); ?></div>
											</div><!-- .reviewer -->
											<div class="rating-details">
												<div class="source">
													<img src="<?php echo esc_url( $super_logo['path'] ) ?>"
														 alt="website review from <?php echo esc_attr( $super_source ) ?>"
														 height="<?php echo $super_logo['height'] ?>" width="<?php echo $super_logo['width'] ?>">
												</div>
												<div class="rating">
													<img src="<?php echo $super_stars['path']; ?>"
														 alt="<?php echo $super_source . ' ' . get_sub_field( 'rating' ); ?> star rating"
														 height="<?php echo $super_stars['height'] ?>" width="<?php echo $super_stars['width'] ?>">
												</div>
												<div class="link">
													<a href="<?php echo esc_url( $super_link ) ?>"
													   target="reviews">More on <?php echo esc_html( $super_source ) ?> <i class="fa fa-external-link"></i></a>
												</div>
											</div><!-- .rating-details -->
										</div><!-- .bottom -->
									</li>
								<?php endwhile; ?>
							</ul> <!-- .quotes-->
						<?php endif; ?>
						<a href="/reviews/" title="more reviews" class="button">more reviews <i class="fa fa-arrow-circle-right"></i></a>
					</div><!-- .centered-block -->
				</div><!-- .quote-wrapper -->
				<?php the_content(); ?>
			</div>
		</div>
	<?php
		endwhile;
	endif;
get_footer();
