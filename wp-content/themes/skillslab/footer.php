<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

		</section>
		<div id="back-to-top">
			<i class="fa fa-arrow-circle-up" aria-hidden="true"></i>
		</div>
		<div id="footer-container">
			<footer id="footer">
			<div class="content">
			<p>Copyright &copy; NYC Skills Lab <?php echo date('Y'); ?>, All rights reserved.</p><p class="right"><a href="/about/#more-info">Contact</a>  |  <a href="/Partners">Partners</a>  |  <a href="/blog">Blog</a></p>
						<p class="social">				
				<a class="facebook" href="https://www.facebook.com/NYCSkillsLab/" target="_blank"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
				<a class="linkedin" href="https://www.linkedin.com/company/nyc-skills-lab/" target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
			</p>

			</div>
			</footer>
		</div>

		<?php do_action( 'foundationpress_layout_end' ); ?>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>
		</div><!-- Close off-canvas wrapper inner -->
	</div><!-- Close off-canvas wrapper -->
</div><!-- Close off-canvas content wrapper -->
<?php endif; ?>


<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
</body>
</html>
