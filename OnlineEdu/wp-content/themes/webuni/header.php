<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="description" content="WebUni Education Template">
  <meta name="keywords" content="webuni, education, creative, html">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title><?php echo get_bloginfo('name');?></title>
  <!-- Favicon -->   
  <link href="<?php echo get_bloginfo('template_directory');?>/img/favicon.ico" rel="shortcut icon"/>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory');?>/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory');?>/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory');?>/css/owl.carousel.css">
  <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory');?>/css/style.css">
  <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory');?>/style.css">


  <?php wp_head(); ?>
</head>

<body>


  <!-- Header section -->
  <header class="header-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-3">
          <div class="site-logo">
             <img src="<?php echo get_theme_mod('logo_setting', get_bloginfo('template_directory').'/img/logo-2.png')?>" alt="">
          </div>
          <div class="nav-switch">
            <i class="fa fa-bars"></i>
          </div>
        </div>
        <div class="col-lg-9 col-md-9">
          <a href="" class="site-btn header-btn">Login</a>
          <nav class="main-menu">
            <?php 
              //output the main nav
            $args = array(
              'theme-location'=>'main-menu',
              'container'=>'ul'
            );
            wp_nav_menu($args);

            ?>
            <!-- <ul>
              <li><a href="index.html">Home</a></li>
              <li><a href="#">About us</a></li>
              <li><a href="courses.html">Courses</a></li>
              <li><a href="blog.html">News</a></li>
              <li><a href="contact.html">Contact</a></li>
            </ul> -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- Header section end -->

  
</div>
</div>
</nav>








