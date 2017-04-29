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
    <section class="second-section" id="about">
        <h2>About Us</h2>
        <img width="50px" class="hr-image" src="<?php echo get_template_directory_uri(); ?>/dist/images/hr_image.png">
        <div class="left-column">
            <p><?php the_field('column_1_content'); ?></p>
        </div>
        <div class="right-column">
            <div class="row">
                <div class='column medium-4'>
                    <img src="<?php the_field('craig_image'); ?>"/>
                </div>
                <div class='column medium-8'>
                    <?php the_field('column_2_content'); ?>
                </div>
            </div>
        </div>
    </section>
<section id="services" style="background: url('<?php echo get_template_directory_uri(); ?>/dist/images/offic_desk.jpg');background-attachment: fixed;">
    <div class="container">
        <h2>What We Do</h2>
        <img width="50px" class="hr-image" src="<?php echo get_template_directory_uri(); ?>/dist/images/hr_image_white.png">
        <div class="row">
            <div class="column medium-4">
                <img src="<?php echo get_template_directory_uri(); ?>/dist/images/pencil.png">
                <h3>Branding and Logo Design</h3>
            </div>
            <div class="column medium-4">
                <img width="64px" src="<?php echo get_template_directory_uri(); ?>/dist/images/design.png">
                <h3>Website Design</h3>
            </div>
            <div class="column medium-4">
                <img src="<?php echo get_template_directory_uri(); ?>/dist/images/development.png">
                <h3>Custom Development</h3>
            </div>
        </div>
        <div class="row">
            <div class="column medium-4">
                <img src="<?php echo get_template_directory_uri(); ?>/dist/images/marketing_2.png">
                <h3>SEO and Social Media Marketing</h3>
            </div>
            <div class="column medium-4">
                <img width="64px" src="<?php echo get_template_directory_uri(); ?>/dist/images/shopify-logo.png">
                <h3>E-Commerce with Shopify</h3>
            </div>
            <div class="column medium-4">
                <img width="64px" src="<?php echo get_template_directory_uri(); ?>/dist/images/hosting_new.png">
                <h3>Premium Hosting and Management Plans</h3>
            </div>
        </div>
    </div>
</section>
<section id="contact" class="contact-form-section">
    <div class="row">
        <div class="contact-icons medium-6 large-5 large-offset-1 columns">
            <h2>Let's Connect</h2>
            <p id="contact-heading"><?php the_field('contact_heading'); ?></p>
            <ul class="contact">
                <li><p><i class="fi-telephone"></i>+1-819-592-1855</p></li>
                <li><p><i class="fi-mail"></i>hi@geometricwebdesign.com</p></li>
            </ul>             
        </div>
        <div class="medium-6 large-5 columns float-left">            
                <div class="contact-form">
                    <?php the_field('contact_form'); ?>
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
            <img src="<?php echo get_template_directory_uri(); ?>/dist/images/wordpress-logo.png" />
        </div>
        <div class="column small-6 medium-3">
            <img src="<?php echo get_template_directory_uri(); ?>/dist/images/shopify-logo-main.png" />
        </div>
        <div class="column small-6 medium-3">
            <img src="<?php echo get_template_directory_uri(); ?>/dist/images/logo_full_white.png" />
        </div>
        <div class="column small-6 medium-3">
            <img src="<?php echo get_template_directory_uri(); ?>/dist/images/mc_script.png" />
        </div>
    </div>
</section>

<?php get_footer(); ?>
