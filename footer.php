<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package braintumor
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<!-- <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'braintumor' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'braintumor' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'braintumor' ), 'braintumor', '<a href="http://dtay.me">David M Taylor</a>' );
				?> -->

				<div class="quick-links">
					<h3>quick links</h3>
					<ul>
						<li><a href="#">home</a></li>
						<li><a href="#">faq</a></li>
						<li><a href="#">shop</a></li>
						<li><a href="#">terms</a></li>
						<li><a href="#">privacy</a></li>
					</ul>
				</div>
			<div class="about">
				<h3>about</h3>
				<p>Braintumor is a sustainable fashion brand founded in 2017, and our team is run by a mother-daughter duo who handmake each and every bag.
</p>
			</div>

			<button>contact</button>
		</div><!-- .site-info -->
		<span class="copyright">© 2020, Braintumor Powered by Wordpress</span>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
