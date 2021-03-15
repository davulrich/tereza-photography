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
	<footer class="site-footer container-fluid">
		<div class="row">
			<div class="site-info col-sm-6 text-center">
				<h4 class="mb-2 mb-sm-0"><a href="<?php echo esc_url( home_url( '/' ) );?>" class="brand"><?php bloginfo('name');?></a></h4>
			</div>
			<div class="site-info col-sm-6 text-center">
				<p class="mb-2 mb-sm-0">Copyright © <?php echo the_time('Y') . ' ' . get_bloginfo('name');?></p>
			</div>
		</div>
	</footer>
	<?php endif; ?>

<?php wp_footer(); ?>

</body>
</html>
