<?php get_header(); ?>


<div class="services">

<h2 id="servicesSection">Price Table</h2>

<div class="service-wrapper">

<?php
if(have_posts()) {
    while(have_posts()) {
        the_post();
        
        ?>

<div class="service">

  <div class="service-container">  
      <h2><?php the_title(); ?></h2>
      <p> <?php the_content(); ?> </p>
  </div>
      <?php the_post_thumbnail(); ?>
</div>

<?php $x++; }
} ?>



</div>

</div>


<?php get_footer(); ?>