<?php get_header(); ?>


<div class="services">

<h2 id="servicesSection">Services We Offer</h2>

<div class="service-wrapper">

<?php
$x;

if(have_posts()) {
    while(have_posts()) {
        the_post();
        
        ?>

<a href="<?php the_permalink();?>" class="service <?php 

    if($x % 2 == 0) {echo 'first';
} else {
    echo ''; 
    }?>

">
  <div class="service-container">  
      <h2> <?php the_title(); ?> </h2>
      <p> <?php the_excerpt(); ?> </p>
  </div>
      <?php the_post_thumbnail(); ?>
</a>

<?php $x++; }
} ?>



</div>

</div>


<?php get_footer(); ?>