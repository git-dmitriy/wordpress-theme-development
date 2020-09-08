<?php
add_action('wp_enqueue_scripts', 'theme_styles');
add_action('wp_enqueue_scripts', 'theme_scripts');
add_action('after_setup_theme', 'register_navigations');
add_action('widgets_init', 'register_my_widget');

function theme_styles()
{
  wp_enqueue_style('styles', get_stylesheet_uri());
  wp_enqueue_style('default', get_template_directory_uri() . '/assets/css/default.css');
  wp_enqueue_style('layout', get_template_directory_uri() . '/assets/css/layout.css');
  wp_enqueue_style('fonts', get_template_directory_uri() . '/assets/css/fonts.css');
  wp_enqueue_style('media-queries', get_template_directory_uri() . '/assets/css/media-queries.css');
}


function theme_scripts()
{
  wp_deregister_script('jquery');
  wp_register_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js');
  wp_enqueue_script('jquery');
  wp_enqueue_script('flexslider', get_template_directory_uri() . '/assets/js/jquery.flexslider.js', ['jquery'], null, true);

  wp_enqueue_script('doubletaptogo', get_template_directory_uri() . '/assets/js/doubletaptogo.js', ['jquery'], null, true);
  wp_enqueue_script('init', get_template_directory_uri() . '/assets/js/init.js', ['jquery'], null, true);

  wp_enqueue_script('modernizr', get_template_directory_uri() . '/assets/js/modernizr.js', null, null, false);
}

function register_navigations()
{
  register_nav_menu('top', 'Меню в шапке');
  register_nav_menu('footer', 'Меню в подвале');
  add_theme_support('title-tag');
}



function register_my_widget()
{
  register_sidebar(array(
    'name'          => 'right_sidebar',
    'id'            => "right_sidebar",
    'description'   => 'Правый сайдбар сайта',
    'class'         => '',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => "</div>\n",
    'before_title'  => '<h5 class="widgettitle">',
    'after_title'   => "</h5>\n",
  ));
}
