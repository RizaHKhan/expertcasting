<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="<?php bloginfo('description'); ?>">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Oswald:700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Monoton|Montserrat:400,700,800,900,900i&display=swap" rel="stylesheet">
  <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title();?></title>
  <?php wp_head(); ?>
</head>
<body>
  

<div class="container-outter">
<div class="container-inner">

<div class="header">

  <h1><a href="<?php echo get_home_url(); ?>" class="companyname">EXPERT CASTING</a><span><a href="tel:6044842169" class="ph">604-484-2169</a><a href="mailto:khanriza@gmail.com" class="email">info@expertcasting.ca</a></span></h1>

  <nav>
    <ul>
      <li id="services"><a href="<?php echo site_url('/service'); ?>">SERVICES</a></li>
      <li><a href="<?php echo site_url('/price'); ?>">PRICE LIST</a></li>
      <li><a href="<?php echo get_permalink(get_page_by_path('contact')); ?>">CONTACT</a></li>
    </ul>

    <div class="social">
        <i class="fa fa-search fa-1x"></i>
        <a href="http://www.facebook.com/pages/Expert-Casting-Ltd-engraving/130757043661708" target="_blank"><i class="fa fa-facebook"></i></a>
        <a href="http://www.yelp.ca/biz/expert-casting-ltd-vancouver" target="_blank"><i class="fa fa-yelp"></i></a>
    </div>
  </nav>
</div>