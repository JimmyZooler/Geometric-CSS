<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>
			
    <section class="hero" style="background: url('<?php the_field('hero_image'); ?>') no-repeat center center fixed; -webkit-background-size: cover; background-size: cover; width: 100%; height: 100vh; overflow: hidden;">
        <div class="row intro">
            <div class="small-centered medium-uncentered large-12 medium-12 columns">
                
                <h1 class="hero-heading"><?php the_field('heading_'); ?></h1>
                <h3 class="hero-heading"><?php the_field('heading_2'); ?></h3>
            </div>
        </div>
    </section>
    <section class="second-section">
        <h2>Our Story</h2>
        <img width="50px" class="hr-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/hr_image.png">
        <div class="row">
            <div class="left-column">
                <p><?php the_field('column_1_content'); ?></p>
            </div>
            <div class="right-column">
                <?php the_field('column_2_content'); ?>
            </div>
        </div>

    </section>
<section id="services" style="background: url('<?php echo get_template_directory_uri(); ?>/assets/images/offic_desk.jpg');">
    <div class="container">
        <h2>What We Do</h2>
        <img width="50px" class="hr-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/hr_image_white.png">
        <div class="row">
            <div class="column medium-4">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pencil.png">
                <h3>Branding and Logo Design</h3>
            </div>
            <div class="column medium-4">
                <img width="64px" src="<?php echo get_template_directory_uri(); ?>/assets/images/design.png">
                <h3>Website Design</h3>
            </div>
            <div class="column medium-4">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/development.png">
                <h3>Custom Development</h3>
            </div>
        </div>
        <div class="row">
            <div class="column medium-4">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/marketing_2.png">
                <h3>SEO and Social Media Marketing</h3>
            </div>
            <div class="column medium-4">
                <img width="64px" src="<?php echo get_template_directory_uri(); ?>/assets/images/shopify-logo.png">
                <h3>E-Commerce with Shopify</h3>
            </div>
            <div class="column medium-4">
                <img width="64px" src="<?php echo get_template_directory_uri(); ?>/assets/images/hosting_new.png">
                <h3>Premium Hosting and Management Plans</h3>
            </div>
        </div>
    </div>
</section>
<section id="partners">
    <div class="row">
        <div class="">
            <h3>Technology Partners</h3><hr>
        </div>
    </div>
    <div class="row partners-images">
        <div class="column small-6 medium-3">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/wordpress-logo.png" />
        </div>
        <div class="column small-6 medium-3">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shopify-logo-main.png" />
        </div>
        <div class="column small-6 medium-3">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_full_white.png" />
        </div>
        <div class="column small-6 medium-3">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mc_script.png" />
        </div>
    </div>
</section>

<?php get_footer(); ?>
