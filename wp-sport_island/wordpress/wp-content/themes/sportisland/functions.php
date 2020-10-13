<?php

add_action('after_setup_theme', 'si_setup');

function si_setup()
{
  add_theme_support('custom-logo');
}

function _si_assets_path($path)
{
  return get_template_directory_uri() . 'assets/' . $path;
}
