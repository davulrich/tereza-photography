<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package terezaphotography
 */

get_header();
?>
		<h1 class="content__title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'terezaphotography' ); ?></h1>
		<section class="error-404">

			<span class="error-404__status-code">404</span>
			<p class="error-404__text">The page you're after no longer exists here. Check out <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="error-404__link">the homepage</a> instead, it's usually nicer than this page.</p>



		</section><!-- .error-404 -->

<?php
get_footer();
