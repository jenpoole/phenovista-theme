<?php
/*
Template Name: Contact Page
*/
?>

<?php get_header(); ?>

<div class="feature-section contact-form" id="" style="margin-top: 70px; padding-top: 100px; padding-bottom: 100px;">
  <div class="container">
    
    <div class="feature">
        
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
            <?php the_content(); ?>
    
        <?php endwhile; else: ?>
    
            <h1 style="letter-spacing: 0;">Coming Soon!</h1>
            <p style="text-align: center;">Sorry, we haven't added this page yet. Please check back later!</p>
    
        <?php endif; ?>
        
   </div>
    
  </div> <!-- .container -->
</div> <!-- .services-section -->

<?php get_footer(); ?>