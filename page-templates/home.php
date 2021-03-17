<?php
/*
 * Template Name: Home
 */

get_header(); ?>
    
    <div class="intro__logo-box">
        <span class="intro__logo">TP</span>
        <span class="intro__logo-url">terezephotography.com</span>
    </div>

    <div class="intro__content-box">
        <h1 class="intro__heading"><?php echo esc_html( get_bloginfo('name') ); ?></h1>

        <?php echo display_menu('primary'); ?>
    </div>

    <div class="intro__social">
        
        <a class="intro__social-icon" href="https://instagram.com/terezpav" target="_blank"><?php echo file_get_contents(get_template_directory_uri() . '/assets/dist/img/icon-instagram.svg'); ?></a>

    </div>

<?php
get_footer();