<?php get_header(); ?>


<div class="services">

<h2 id="servicesSection">Price Table</h2>

<div class="price-wrapper">

<?php
 
    

    $pricesPost = new WP_Query(array(
        'post_type' => 'price'
    ));

if($pricesPost -> have_posts()) {
    while($pricesPost -> have_posts()) {
       

        $pricesPost -> the_post();
        
        
        $theParent = wp_get_post_parent_id(get_the_ID());

        if($theParent) {
            continue;
        } else {

        

        ?>

<div class="price">

                  <?php echo 
                    wp_list_pages(array(
                        'title_li' => NULL,
                        'post_type' => 'price',
                        'child_of' => get_the_ID()

                    ))
                  ?>
      <h2><?php the_title(); ?></h2>
      <p> <?php the_content(); ?> </p>
  
  
</div>

<?php }}
} ?>



</div>

</div>


<?php get_footer(); ?>