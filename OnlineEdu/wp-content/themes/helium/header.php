<!DOCTYPE html>
<html lang="en">

<head>
  <!-- meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Bootstrap UI Kit">
  <meta name="keywords" content="ui kit">
  <meta name="author" content="UIdeck">

  <title><?php echo get_bloginfo('name');?></title>

  <!-- CSS Files -->
  <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory');?>/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory');?>/css/main.css">
  <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory');?>/css/animate.css">
  <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory');?>/css/owl.carousel.css">
  <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory');?>/css/owl.theme.css">
  <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory');?>/css/responsive.css">


  <!-- Fonts icons -->
  <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory');?>/css/font-awesome.min.css">


  <?php wp_head(); ?>
</head>

<body>

  <!-- Page Wrapper Start -->
  <div class="wrapper">
    <!-- Nav -->
    <nav class="navbar navbar-toggleable-sm navbar-light bg-black">
      <div class="container">
        <a class="navbar-brand" href="index.html">

          <img src="<?php echo get_theme_mod('logo_setting', get_bloginfo('template_directory').'/img/logo-2.png')?>" alt="">

        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar4" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbar4">
            <?php 
              //output the main nav
              $args = array(
                  'theme-location'=>'main-menu',
                  'container'=>'ul',
                  'menu_class'=>'navbar-nav'

              );
              wp_nav_menu($args);

            ?>
<!--      <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="home.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="services.html">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="portfolio.html">Portfolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact</a>
            </li>
        
          </ul> -->
          <form class="form-inline hidden-sm-down" action="<?php echo home_url('/') ?>">
            <div class="top_search_con">
              <input class="form-control mr-sm-2" name="s" placeholder="Search Here ..." type="text">
              <span class="top_search_icon"><i class="fa fa-search"></i></span>
            </div>
          </form>

          <?php //get_search_form(); ?>
        </div>
      </div>
    </nav>








