<?php get_header(); ?>


<?php if(have_posts()) {
    while(have_posts()) {
        the_post(); ?>


        <h2> <a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2>
        <p> <?php if (has_excerpt()) {
            the_excerpt();   
        } else {
            echo '';
        }; 
        ?> </p>

<?php 
    }
} ?>


<?php get_footer(); ?>