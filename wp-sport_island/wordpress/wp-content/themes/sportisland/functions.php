<?php

$widgets = [
  'widget-text.php',
  'widget-contacts.php',
  'widget-email.php',
  'widget-social-links.php',
  'widget-iframe.php',
  'widget-info.php',
];

foreach ($widgets as $widget) {
  require_once(__DIR__ . '/inc/' . $widget);
}


add_action('after_setup_theme', 'si_setup');
// // add_filter('show_admin_bar', '__return_false');
add_action('wp_enqueue_scripts', 'si_scripts');
add_action('widgets_init', 'si_register');
add_action('init', 'si_register_types');
add_shortcode('si-paste-link', 'si_paste_link');


add_filter('si_widget_text', 'do_shortcode');

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

function si_paste_link($attr)
{
  $params = shortcode_atts([
    'link' => '',
    'text' => '',
    'type' => 'link',
  ], $attr);
  $params['text'] = $params['text'] ? $params['text'] : $params['link'];
  if ($params['link']) {
    $protocol = '';
    switch ($params['type']) {
      case 'email':
        $protocol = 'mailto:';
        break;
      case 'phone':
        $protocol = 'tel:';
        $params['link'] = preg_replace('/[^+0-9]/', '', $params['link']);
        break;
      default:
        $protocol = '';
        break;
    }
    $link = $protocol . $params['link'];
    $text = $params['text'];

    return "<a href=\"${link}\">${text}</a>";
  } else {
    return '';
  }
}

function si_register()
{
  register_sidebar([
    'name' => 'Контакты в шапке сайта',
    'id' => 'si-header-contacts',
    'before_widget' => null,
    'after_widget' => null
  ]);

  function si_register_types()
  {
    register_post_type('services', [
      'labels' => [
        'name'               => 'Услуги', // основное название для типа записи
        'singular_name'      => 'Услуга', // название для одной записи этого типа
        'add_new'            => 'Добавить новую услугу', // для добавления новой записи
        'add_new_item'       => 'Добавить новую услугу', // заголовка у вновь создаваемой записи в админ-панели.
        'edit_item'          => 'Редактировать услугу', // для редактирования типа записи
        'new_item'           => 'Новая услуга', // текст новой записи
        'view_item'          => 'Смотреть услуги', // для просмотра записи этого типа.
        'search_items'       => 'Искать услуги', // для поиска по этим типам записи
        'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
        'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
        'parent_item_colon'  => '', // для родителей (у древовидных типов)
        'menu_name'          => 'Услуги', // название меню
      ],
      'public'              => true,
      'menu_position'       => 20,
      'menu_icon'           => 'dashicons-smiley',
      'hierarchical'        => false,
      'supports'            => ['title'],
      'has_archive' => true
    ]);
  }

  register_sidebar([
    'name' => 'Контакты в подвале сайта',
    'id' => 'si-footer-contacts',
    'before_widget' => null,
    'after_widget' => null
  ]);

  register_sidebar([
    'name' => 'Сайдбар в подвале колонка-1',
    'id' => 'si-footer-col-1',
    'before_widget' => null,
    'after_widget' => null
  ]);
  register_sidebar([
    'name' => 'Сайдбар в подвале колонка-2',
    'id' => 'si-footer-col-2',
    'before_widget' => null,
    'after_widget' => null
  ]);
  register_sidebar([
    'name' => 'Сайдбар в подвале колонка-3',
    'id' => 'si-footer-col-3',
    'before_widget' => null,
    'after_widget' => null
  ]);
  register_sidebar([
    'name' => 'Карта',
    'id' => 'si-map',
    'before_widget' => null,
    'after_widget' => null
  ]);
  register_sidebar([
    'name' => 'Данные под картой',
    'id' => 'si-after-map',
    'before_widget' => null,
    'after_widget' => null
  ]);

  register_widget('si_widget_text');
  register_widget('si_widget_contacts');
  register_widget('si_widget_contacts_mail');
  register_widget('si_widget_social_links');
  register_widget('si_widget_iframe');
  register_widget('si_widget_info');
}

function _si_assets_path($path)
{
  return get_template_directory_uri() . '/assets/' . $path;
}
