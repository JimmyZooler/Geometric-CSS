<?php
/*
Template Name: Contact Page
*/
?>

<?php get_header(); ?>

    <section class="hero" style=" background: url('<?php the_field('hero_image'); ?>') no-repeat top center fixed; -webkit-background-size: cover; background-size: cover; width: 100%; height: 100vh; overflow: hidden;">
        <div class="row intro">
            <div class="small-centered medium-uncentered large-12 medium-12 columns contact-h1">
                
                <h1 class="hero-heading"><?php the_field('heading'); ?></h1>
                <h3 class="hero-heading"><?php the_field('heading_2'); ?></h3>
              
            </div>
        </div>
    </section>
<section class="contact-form-section">
    <div class="row">
        <div class="medium-offset-2 medium-8 columns">
            <p id="contact-heading"><?php the_field('contact_heading'); ?></p>
            
                <div class="contact-form">
                    <?php the_field('contact_form'); ?>
                </div>
<!--                <div class="contact-icons medium-12 large-5 columns">
                    <ul class="contact">
                        <li><p><i class="fi-telephone"></i>+1-819-592-1855</p></li>
                        <li><p><i class="fi-mail"></i>hi@geometricwebdesign.com</p></li>
                    </ul>             
                </div>-->
        </div>
        
    </div>
</section>





<?php get_footer(); ?>

