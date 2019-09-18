<div class="footer">
    

    <div class="footer-name">
        <h1><a href="#">EXPERT CASTING</a></h1>
    </div>
    
    <div class="operation">

        <?php $location = new WP_Query(array(
            'posts_per_page' => 2,
            'post_type' => 'operation',

        )); 
        
        
        while($location -> have_posts()){
            $location ->the_post(); ?>



            <h3><?php the_title(); ?></h3>
            <p><?php the_content(); ?></p>




     <?php   }  ?>
             <a href="https://www.google.com/maps/dir//Expert+Castings,+736+Granville+St,+Vancouver,+BC+V6Z+1G3/@49.2819857,-123.1537073,13z/data=!4m8!4m7!1m0!1m5!1m1!1s0x5486717f0f212d97:0x734a6619811e96ed!2m2!1d-123.118688!2d49.281935" target="_blank" class="directions">Directions</a>
    </div>

<div class="services-nav">
    <h3>Services</h3>
    <ul>
        <?php wp_list_pages(array(
            'title_li' => '',
            'post_type' => 'service'
        )); ?>
    </ul>
</div>


    <div class="footer-nav">

        <?php wp_list_pages(array(
            'title_li' => '',
            'post_type' => 'page'
        )); ?>

    </div>

    <div class="copyright">
        <p>&copy; 2019 Expert Casting<p></p>
    </div>

</div>
<div class="return"><a href="#"><i class="fa fa-arrow-up fa-2x"></i></a></div>

</div>

</div>

      <?php wp_footer(); ?>
      </body>
      </html>