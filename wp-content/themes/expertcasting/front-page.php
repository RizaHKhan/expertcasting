<?php get_header() ?>


<div class="hero">

  <h1>Vancouver's best equipped casting shop. We can service all your <i>casting</i> needs.</h1>

  <div class="right">
    <a href="<?php echo get_permalink(get_page_by_path('contact')); ?>" class="cta">Contact Us</a>
    <p>Our in-house laser welder helps us provide excellent finishes to all materials. </p>
  </div>

</div>

<h2 id="servicesSection">What to expect from us</h2>

<div class="features">

  <?php $promotion = new WP_Query(array(
    'posts_per_page' => -1,
    'post_type' => 'promotion'
  )); 
  
    while($promotion->have_posts()) {
      if($promotion -> have_posts()) {
        $promotion -> the_post(); ?>

<div class="feature-post">
      <p><?php the_content(); ?></p>
      </div>
    <?php  }}  ?>

</div>

<div class="services">

<h2 id="servicesSection">Services We Offer</h2>

<div class="service-wrapper">

<?php
$x;

$service = new WP_Query(array(
    'posts_per_page' => -1,
    'post_type' => 'service'
));

if($service -> have_posts()) {
    while($service -> have_posts()) {
       $service -> the_post();
        
        ?>

<div class="service <?php 

    if($x % 2 == 0) {echo 'first';
} else {
    echo ''; 
    }?>

">
  <div class="service-container">  
      <h2> <a href="<?php the_permalink();?> "><?php the_title(); ?></a> </h2>
      <p> <?php the_excerpt(); ?> </p>
  </div>
      <?php the_post_thumbnail(); ?>
</div>

<?php $x++; }
} ?>

</div>

</div>

<div class="features">

  <?php $feature = new WP_Query(array(
    'posts_per_page' => -1,
    'post_type' => 'feature'
  )); 
    
    while($feature->have_posts()) {
      if($feature -> have_posts()) {
        $feature -> the_post(); ?>

<div class="feature-post">
      <h2><?php the_title(); ?></h2>
      <p><?php the_content(); ?></p>
      </div>
    <?php  }}  ?>

</div>

<?php get_footer() ?>