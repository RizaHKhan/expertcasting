<?php get_header() ?>

<?php 

    if(have_posts()) {

        while(have_posts()) {
            the_post(); ?>
          

    <div class="page">
    
    <h1> <?php the_title() ?> </h1>
    
    <div class="contact-content">

    <?php the_content() ?>

    </div>
    
    
    </div>






    <?php }} ?>


<?php get_footer() ?>



