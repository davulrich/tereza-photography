<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package terezaphotography
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<?php wp_head(); ?>
	
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<header id="masthead" class="navbar navbar-expand-md navbar-light">
		<?php
		the_custom_logo();
		if ( is_front_page() && is_home() ) :
			?>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="site-branding navbar-brand d-none d-lg-inline-block"><?php bloginfo( 'name' ); ?></a>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="site-branding navbar-brand d-inline-block d-lg-none"><?php echo 'TP'; ?></a>	
			<?php
		else :
			?>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="site-branding navbar-brand d-none d-lg-inline-block"><?php bloginfo( 'name' ); ?></a>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="site-branding navbar-brand d-inline-block d-lg-none"><?php echo 'TP'; ?></a>	
			<?php
		endif;
		$terezaphotography_description = get_bloginfo( 'description', 'display' );
		if ( $terezaphotography_description || is_customize_preview() ) :
			?>
			<p class="site-description"><?php echo $terezaphotography_description; /* WPCS: xss ok. */ ?></p>
		<?php endif; ?>

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-navbar-colapse" aria-controls="bs-navbar-colapse" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

	</header><!-- #masthead -->

	<main id="content" class="site-content">