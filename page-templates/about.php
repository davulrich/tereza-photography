<?php
/**
 * Template name: About me
 */

get_header();
?>

    <h1 class="content__title"><?php echo get_the_title( get_the_ID() );?></h1>
    <div class="about">
        <?php echo get_field('text_about_me'); ?>
        <h2 class="about__title">- <?php echo get_field('author_name'); ?> -</h2>
    </div>
    
    

    

<?php 
get_footer();