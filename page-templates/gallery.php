<?php
/**
 * Template name: Gallery
 */

get_header();

// echo '<pre>';
// print_r( get_field('gallery') );
// echo '</pre>';
// die();

//ACF variables
$images = get_field('gallery');
?>

<section class="container container-margin">
    <div class="row">
        <h1 class="site-title"><?php echo get_the_title( get_the_ID() );?></h1>
    </div>

    <?php if( $images) :?>

        <div class="row spotlight-group" data-control="fullscreen,page">
        
        <?php foreach( $images as $image) : ?>
            <div class="col-md-4">
                <div class="card border-0 rounded-0">
                    <a href="<?php echo esc_url( $image['url'] ); ?>" class="spotlight">
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="card-img">
                    </a>
                </div>
            </div>
        <?php endforeach; ?>

        </div>

    <?php endif; ?>

</section>

<?php 
get_footer();