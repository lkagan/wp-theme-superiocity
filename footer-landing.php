            </div> <!-- .main -->
            <footer class="site-footer">
                <div class="arrow-down light"></div>
                <?php if( function_exists( 'get_field' ) ) {
                echo get_field_object( 'footer_text', $GLOBALS['post']->ID, false )['value'];
                }
                ?>
				<div class="copyright">
					&copy; 2007-<?php echo date('Y'); ?> Superiocity, Inc.
				</div>
            </footer>
    </div> <!-- .page -->
<?php wp_footer(); ?>
</body>
</html>
