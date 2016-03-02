<?php
/*
Template Name: Contact Page
*/
?>

<?php get_header(); ?>

    <section class="hero" style=" background: url('<?php the_field('hero_image'); ?>') no-repeat center center; -webkit-background-size: cover; background-size: cover; width: 100%; height: 100vh; overflow: hidden;">
        <div class="row intro">
            <div class="small-centered medium-uncentered large-12 medium-12 columns">
                
                <h1 class="hero-heading"><?php the_field('heading'); ?></h1>
              
            </div>
        </div>
    </section>





<?php get_footer(); ?>

