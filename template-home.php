<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>
			
    <section class="hero" style=" background: url('<?php the_field('hero_image'); ?>') no-repeat center center; -webkit-background-size: cover; background-size: cover; width: 100%; height: 100vh; overflow: hidden;">
        <div class="row intro">
            <div class="small-centered medium-uncentered large-12 medium-12 columns">
                
                <h1 class="hero-heading"><?php the_field('heading_'); ?></h1>
                <h3 class="hero-heading"><?php the_field('heading_2'); ?></h3>
            </div>
        </div>
    </section>
    <section class="second-section">
        <div class="row">
            <div class="left-column medium-12 large-4 columns">
                <?php the_field('column_1_content'); ?>
            </div>
            <div class="right-column medium-12 large-8 columns">
                <?php the_field('column_2_content'); ?>
            </div>
        </div>

    </section>

<?php get_footer(); ?>
