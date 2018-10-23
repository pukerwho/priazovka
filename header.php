<!doctype html>
<html <?php language_attributes(); ?> class="no-js no-svg">

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
  <link rel="profile" href="http://gmpg.org/xfn/11">

  <?php
  // ENQUEUE your css and js in inc/enqueues.php

    wp_head();
  ?>
  <?php echo get_option('google_analytics'); ?>

</head>
<body <?php echo body_class(); ?>>
  <!-- <div class="preloader"></div> -->
  
  <header class="sticky-top">
    <nav class="navbar navbar-expand-lg navbar-light justify-content-between">
      <a class="navbar-brand" href="<?php echo home_url(); ?>">
        Genichesk.com.ua
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
        <!-- <ul class="navbar-nav mx-auto">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo home_url(); ?>">Главная</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html">Форум</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html">Фотоальбом</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="ServicesNavbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Дополнительно
            </a>
            <div class="dropdown-menu" aria-labelledby="ServicesNavbarDropdown">
              <?php $menuParameters = array(
                'menu'            => 'mainmenu', 
                'container'       => false, 
                'echo'            => false,
                'fallback_cb'     => 'wp_page_menu',
                'items_wrap'      => '%3$s',
                'depth'           => 0,
              ); ?>
              <?php echo strip_tags(wp_nav_menu( $menuParameters ), '<a>' ); ?>
            </div>
          </li>
        </ul> -->
        <div class="header-search">
          <?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>  
        </div>
        <!-- <button class="btn btn-outline-success my-2 my-sm-0 mr-sm-2" type="submit">Быстрая связь</button> -->
      </div>
    </nav>
  </header>
  <section id="content" role="main">