<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!-->
<html class="no-js" <?php language_attributes(); ?>>
<!--<![endif]-->

<head>

  <!--- Basic Page Needs
   ================================================== -->
  <meta charset="<?php bloginfo('charset'); ?>">
  <title><?php bloginfo('name'); ?></title>
  <meta name="description" content=" <?php bloginfo('description') ?>">
  <meta name="author" content="">

  <!-- Mobile Specific Metas
   ================================================== -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- CSS
    ================================================== -->


  <!-- Script
   ================================================== -->


  <!-- Favicons
	================================================== -->
  <link rel="shortcut icon" href="favicon.ico">

  <?php wp_head(); ?>

</head>

<body>

  <!-- Header
   ================================================== -->
  <header>

    <div class="row">

      <div class="twelve columns">

        <div class="logo">
          <a href="<?php home_url(); ?>">
            <div><?php bloginfo('name'); ?></div>
            <img alt="" src="images/logo.png">
          </a>
        </div>



        <nav id="nav-wrap">
          <?php
          wp_nav_menu([
            'theme_location'  => 'top',
            'menu'            => '',
            'container'       => 'false',
            'container_class' => '',
            'container_id'    => '',
            'menu_class'      => 'nav',
            'menu_id'         => 'nav',
            'echo'            => true,
            'fallback_cb'     => 'wp_page_menu',
            'before'          => '',
            'after'           => '',
            'link_before'     => '',
            'link_after'      => '',
            'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            'depth'           => 0,
            'walker'          => '',
          ]);
          ?>


          <a class="mobile-btn" href="#nav-wrap" title="Show navigation">Show navigation</a>
          <a class="mobile-btn" href="#" title="Hide navigation">Hide navigation</a>


<!-- 
          <ul id="nav" class="nav">

            <li class="current"><a href="index.htm">Home</a></li>
            <li><span><a href="blog.html">Blog</a></span>
              <ul>
                <li><a href="blog.html">Blog Index</a></li>
                <li><a href="single.html">Post</a></li>
              </ul>
            </li>
            <li><span><a href="portfolio-index.html">Portfolio</a></span>
              <ul>
                <li><a href="portfolio-index.html">Portfolio Index</a></li>
                <li><a href="portfolio.html">Portfolio Entry</a></li>
              </ul>
            </li>
            <li><a href="about.html">About</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li><a href="styles.html">Features</a></li>

          </ul> -->

        </nav> <!-- end #nav-wrap -->

      </div>

    </div>

  </header> <!-- Header End -->