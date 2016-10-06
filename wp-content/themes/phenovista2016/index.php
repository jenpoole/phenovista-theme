<?php get_header(); ?>


<?php 

// Featured image for jumbotron background image
$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );

// Custom Fields
$jumbo_headline_1 = get_field('jumbo_headline_1');

$jumbo_headline_2 = get_field('jumbo_headline_2');

?>



<!--JUMBOTRON HEADER -->
<?php if ( has_post_thumbnail() ) { ?>

<div class="jumbotron" style="background-image: url('<?php echo $thumb['0']; ?>');" >
    <div class="container">
        
        <div class="headline">
            <p><?php echo $jumbo_headline_1; ?></p>
            
            <p><?php echo $jumbo_headline_2; ?></p>
            
            <p><a class="smooth" href="#more-info">LEARN MORE >>></a> </p>
        </div>

    </div>
</div>

<?php } else { // Default ?>

<div class="jumbotron" style="background-image: url('<?php bloginfo('url'); ?>/wp-content/uploads/2016/09/library2.jpg');" >
    <div class="container">
        
        <div class="headline">
            <p><?php echo $jumbo_headline_1; ?></p>
            
            <p><?php echo $jumbo_headline_2; ?></p>
            
            <p><a class="smooth" href="#more-info">LEARN MORE >>></a> </p>
        </div>

    </div>
</div>    

<?php } ?>

<div class="divider" style="position: relative; height: 1px;">
  <img class="section-divider" src="<?php bloginfo('url'); ?>/wp-content/uploads/2016/10/section-divider.png" alt="">
  <img class="section-divider-icon" src="<?php bloginfo('url'); ?>/wp-content/uploads/2016/10/atom.png" alt="" style="z-index: 50;"> 
</div>

 <div class="feature-section" id="more-info">
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




