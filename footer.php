<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package terezaphotography
 */

?>

	</main><!-- #content -->

	<!-- Hide footer on Home page -->
	<?php if ( !is_front_page() ) : ?>
	<footer class="footer">
		
		<div class="footer__social">
			<a class="intro__social-icon" href="https://instagram.com/terezpav" target="_blank"><?php echo file_get_contents(get_template_directory_uri() . '/assets/dist/img/icon-instagram.svg'); ?></a>
		</div>

		<div class="footer__info">
			<span class="footer__url">terezaphotography.com</span>
			<span class="footer__copyright"><?php echo esc_html( wp_date('Y') );?> &copy; <?php echo esc_html( bloginfo('name') ); ?></span>
		</div>

	</footer>
	<?php endif; ?>

<?php wp_footer(); ?>

</body>
</html>
