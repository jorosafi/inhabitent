<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">

				<div class="footer-html">
					<div class="business-info">
						<h3>Contact Info</h3>
						<p><i class="fa fa-envelope"></i> info@inhabitent.com</p>
						<p><i class="fa fa-phone"></i> 778-456-7891</p>
						<ul class="social-font-icons">
							<li class="font-icons"><i class="fab fa-facebook-square"></i></li>
							<li class="font-icons"><i class="fab fa-twitter-square"></i></li>
							<li class="font-icons"><i class="fab fa-google-plus-square"></i></li>
						</ul>
					</div> 

					<div class="business-hours">
						<h3>Business Hours</h3>
						<p><strong>Monday-Friday:</strong>9am to 5pm</p>
						<p><strong>Saturday:</strong>10am to 2pm</p>
						<p><strong>Sunday:</strong>Closed</p>
					</div>

					<div class="footer-logo"><img src="<?php echo get_template_directory_uri(); ?>/images/logo/inhabitent-logo-text.svg)"></div>
				</div> <!--end footer-html -->

				<div class="copyright">
					<p>Copyright 	&copy; 2017 Inhabitent</p>
				</div><!-- .site-info -->

			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
