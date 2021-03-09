<?php
/*
 * Template Name: Home
 */

get_header(); ?>

<section class="container-fluid home-intro w-100">
    <div class="overlay">
        <div class="jumbotron">
            <div class="contrainer">
                <h1 class="display-4"><?php echo esc_html( the_field('title' ) );?></h1>
                <p class="lead"><?php echo esc_html( the_field('sub_title') );?></p>
            </div>
        </div>
        <a id="more-info" class="btn btn-light text-center scroll-to" href="#portfolio">Pokračovat dále</a>
    </div>
</section>
<section id="portfolio" class="container container-margin">
    <div class="row">
        <h1 class="site-title"><?php echo esc_html( the_field('gallery_title') );?></h1>   
    </div>

    <?php if ( have_rows('galleries') ) : ?>
        <div class="row">

        <?php while ( have_rows('galleries') ) : the_row(); ?>

            <div class="col-md-4 p-0">
                <div class="card border-0 rounded-0">
                    <a href="<?php echo esc_html( the_sub_field('page_link') );?>">
                        <img src="<?php echo esc_html( get_sub_field('image')['url'] ) ;?>" alt="<?php echo esc_html( get_sub_field('image')['alt'] );?>" class="card-img border-0 rounded-0"/>
                        <div class="card-img-overlay">
                            <h5 class="card-title"><?php echo esc_html( the_sub_field('text_over_image') );?></h5>
                        </div>
                    </a>
                </div>
            </div> 

        <?php endwhile; ?>

        </div>

    <?php endif; ?>
   
</section>

<?php
get_footer();