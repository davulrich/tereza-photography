<?php
/**
 * Template name: Gallery
 */

get_header();
?>

    <h1 class="content__title"><?php echo get_the_title( get_the_ID() );?></h1>

    <?php echo display_images_from_folder(get_field('gallery_name')); ?>

<?php 
get_footer();