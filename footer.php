            </div> <!-- .main -->
            <footer class="site-footer">
                <div class="arrow-down light"></div>
                <div class="column1">
                    <div class="phone"><i class="fa fa-phone"></i> <?php if( function_exists( 'eeb_content' ) )  echo eeb_content('<a href="tel:5613361119">(561) 336-1119</a>'); ?></div>
                    <div class="email"><i class="fa fa-envelope"></i> <span class="emailLink"><?php if( function_exists( 'eeb_content' ) ) echo eeb_content('<a href="mailto:larry@superiocity.com">larry@superiocity.com</a>'); ?></span></div>
                </div>
                <div class="column2">
                    <div class="nav">
                        <a href="/sitemap/" title="sitemap">sitemap</a>
                    </div>
                    <div class="copyright">
                        &copy; 2007-<?php echo date('Y'); ?> Superiocity, Inc.
                    </div>
                </div>
            </footer>
    </div> <!-- .page -->
<?php wp_footer(); ?>
</body>
</html>
