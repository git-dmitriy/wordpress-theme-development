<?php

add_action('after_setup_theme', 'si_setup');
// // add_filter('show_admin_bar', '__return_false');
add_action('wp_enqueue_scripts', 'si_scripts');
add_action('widgets_init', 'si_register');

function si_setup()
{
  register_nav_menu('menu-header', 'Меню в шапке');
  register_nav_menu('menu-footer', 'Меню в подвале');

  add_theme_support('custom-logo');
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
}

function si_scripts()
{
  wp_enqueue_script('js', _si_assets_path('js/js.js'), [], '1.0', true);
  wp_enqueue_style('si-styles', _si_assets_path('css/styles.css'), [], '1.0', 'all');
}

function si_register()
{
  register_sidebar([
    'name' => 'Сайдбар в шапке сайта',
    'id' => 'si-header',
    'before_widget' => null,
    'after_widget' => null
  ]);
}

function _si_assets_path($path)
{
  return get_template_directory_uri() . '/assets/' . $path;
}
