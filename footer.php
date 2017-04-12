			</div> <!-- .main -->
			<footer class="site-footer">
				<div class="arrow-down light"></div>
                <div class="centered-block">
					<div class="columns">
						<div class="column1">
                            <h4>Superiocity Web Development &amp; Design</h4>
							<div class="phone"><i class="fa fa-phone"></i> <?php if( function_exists( 'eeb_content' ) )  echo eeb_content('<a href="tel:5613361119">(561) 336-1119</a>'); ?></div>
							<div class="email"><i class="fa fa-envelope"></i> <span class="emailLink"><?php if( function_exists( 'eeb_content' ) ) echo eeb_content('<a href="mailto:service@superiocity.com">service@superiocity.com</a>'); ?></span></div>
                            <i class="fa fa-map-marker"></i>
                            <address>
                                3516 Hudson Lane<br />
                                Boynton Beach, FL 33436<br />
                            </address>
						</div><!-- .column1 -->
						<div class="column2">
                            <h4>Office Hours</h4>
							Monday - Friday<br />
							9 am - 5 pm Eastern
						</div><!-- .column2 -->
					</div><!-- .columns -->
                </div><!-- .centered-block -->
                <div class="copyright">
                    <span class="links">
						<span class="item"><a href="/privacy-policy/" title="privacy policy">privacy</a></span>
						<span class="seperator">|</span>
						<span class="item"><a href="/terms-of-service/" title="terms of service">terms</a></span>
						<span class="seperator">|</span>
						<span class="item"><a href="/sitemap/" title="sitemap">sitemap</a></span>
                    </span><!-- .links -->
					<span class="seperator">|</span>
					<span class="item">&copy; 2007-<?php echo date('Y'); ?> Superiocity, Inc.</span>
                </div>
			</footer>
		</div> <!-- .page -->
<?php wp_footer(); ?>
</body>
</html>
