            </div> <!-- .main -->
            <footer>
	            <div class="copyright">
					&copy; 2007-<?php echo date('Y'); ?> Superiocity, Inc.
				</div>
	            <?php if ( SUPERIOCITY_IS_MAIN_SITE ) : ?>
				<div class="nav">
					<a href="/sitemap/" title="sitemap">sitemap</a>
				</div>
	            <?php endif; ?>
            </footer>       
        </div>  <!-- .contiguous -->
    </div> <!-- .page -->
	<?php if( empty( $_COOKIE['hideSubscribeForm'] ) ): ?>
	<div class="list-subscribe">
		<span class="hide-toggle"><i class="fa fa-close"></i></span>
		<form action="//superiocity.us10.list-manage.com/subscribe/post?u=6be4a034b5cc0a29677d2cb10&amp;id=8816f39906" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
			<div id="mc_embed_signup_scroll" class="form-parts">
				<div class="text">
					<label for="mce-EMAIL">Get the most from your website with our free newsletter. </label><br>
					<span class="fineprint">Your email address will <em>not</em> be shared. Unsubscribe anytime. ~1 email per month.</span>
				</div>
				<div class="fields">
					<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
					<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
					<div style="position: absolute; left: -5000px;"><input type="text" name="b_6be4a034b5cc0a29677d2cb10_8816f39906" tabindex="-1" value=""></div>
					<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
				</div>
			</div>
		</form>
	</div> <!-- .list-subscribe -->
	<?php endif; ?>
<?php wp_footer(); ?>
</body>
</html>
