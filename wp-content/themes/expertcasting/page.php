<?php get_header(); ?>

<div class="single">

        <?php 
        if(have_posts()) {
            while(have_posts()) {
                the_post(); ?>
            <div class="single-content">
                <h1><?php the_title(); ?></h1>
                <p><?php the_content(); ?></p>
            </div>       
   
<?php  }} ?>

</div>


<?php get_footer(); ?>