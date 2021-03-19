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

<body class="<?php echo !is_front_page() ? 'grid' : 'home'; ?>">

	<!-- Hide header on Home page -->
	<?php if ( !is_front_page() ) : ?>
	<header class="header grid-center">

		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="header__logo">TP</a>	
		<?php echo display_menu('primary'); ?>
		<hr class="line">
		
	</header><!-- #masthead -->	
	<?php endif; ?>

	<main class="<?php echo !is_front_page() ? 'content grid-center' : 'intro'; ?>">