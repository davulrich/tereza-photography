<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package terezaphotography
 */

	if( !is_front_page() || !is_home() ) {
		the_title( '<h1 class="entry-title">', '</h1>' );
		terezaphotography_post_thumbnail(); 
 	}

	the_content();
?>

