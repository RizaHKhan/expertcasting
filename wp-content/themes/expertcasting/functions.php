<?php 

    function addingResources() {
        wp_enqueue_style('style', get_stylesheet_uri());
        wp_enqueue_style('topology', get_template_directory_uri() . '/public/style/topology.css');
        wp_enqueue_style('layout', get_template_directory_uri() . '/public/style/layout.css');
        wp_enqueue_script('animation', get_template_directory_uri() . '/public/js/animation.js', '', '', true);
        wp_enqueue_script('modal', get_template_directory_uri() . '/public/js/modal.js', '', '', true);
        wp_enqueue_script('livesearch', get_template_directory_uri() . '/public/js/livesearch.js', '', '', true);
        wp_localize_script('livesearch', 'livesearch_data', array(
            'root_url' => get_site_url(),
            
        ));
    }

    add_action('wp_enqueue_scripts', 'addingResources');
  
    //ADDS FEATURED IMAGES
    function new_features() {
        add_theme_support('post-thumbnails');
    }

    add_action('after_setup_theme', 'new_features');


?>