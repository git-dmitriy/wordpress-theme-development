<?php
/*
Plugin Name: Cookie-notify-next
Description: Выводит уведомление пользователям сайта о том, что сайт использует cookie.
License:     GPL2

Cookie-notify-next is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

Cookie-notify-next is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Cookie-notify-next. If not, see https://sport-island.ru/.
*/

register_activation_hook(__FILE__, 'cnn_activation');
register_deactivation_hook(__FILE__, 'cnn_deactivation');

function options()
{
  return [
    'cnn_bg' => '#000',
    'cnn_color' => '#fff',
    'cnn_text' => 'Мы используем куки',
    'cnn_position' => 'bottom',
  ];
}

function cnn_activation()
{
  $options = options();

  foreach ($options as $key => $value) {
    update_option($key, $value);
  }
}

function cnn_deactivation()
{
  $options = options();

  foreach ($options as $key => $value) {
    delete_option($key);
  }
}

// add_action('wp_footer', function () {
//   $options = options();

//   foreach ($options as $key => $value) {
//     echo $key . '=>' .  get_option($key, $value) . '<br>';
//   }
// });


add_action('admin_menu', 'cnn_register_menu');

function cnn_register_menu()
{
  add_menu_page(
    'Cookie уведомления',
    'Cookie уведомления',
    'manage_options',
    'cnn-settings',
    'cnn_admin_page_view',
    'dashicons-warning'
  );
}

function cnn_admin_page_view()
{
  echo '<h1>Hello world!</h1>';
}
