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
add_action('add_meta_boxes', 'si_meta_boxes');
// add_action('save_post', 'si_save_like_meta');
add_action('admin_init', 'si_register_slogan');
add_action('admin_post_nopriv_si-modal-form', 'si_modal_form_handler');
add_action('admin_post_si-modal-form', 'si_modal_form_handler');
add_action('wp_ajax_nopriv_post-likes', 'si_likes');
add_action('wp_ajax_post-likes', 'si_likes');

add_action('manage_posts_custom_column', 'si_like_column', 5, 2);

add_shortcode('si-paste-link', 'si_paste_link');


add_filter('si_widget_text', 'do_shortcode');
add_filter('manage_posts_columns', 'si_add_col_likes');

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

    register_post_type('trainers', [
      'labels' => [
        'name'               => 'Тренеры', // основное название для типа записи
        'singular_name'      => 'Тренер', // название для одной записи этого типа
        'add_new'            => 'Добавить нового Тренера', // для добавления новой записи
        'add_new_item'       => 'Добавить нового Тренер', // заголовка у вновь создаваемой записи в админ-панели.
        'edit_item'          => 'Редактировать Тренера', // для редактирования типа записи
        'new_item'           => 'Новый Тренер', // текст новой записи
        'view_item'          => 'Смотреть Тренер', // для просмотра записи этого типа.
        'search_items'       => 'Искать Тренер', // для поиска по этим типам записи
        'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
        'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
        'parent_item_colon'  => '', // для родителей (у древовидных типов)
        'menu_name'          => 'Тренеры', // название меню
      ],
      'public'              => true,
      'menu_position'       => 20,
      'menu_icon'           => 'dashicons-admin-users',
      'hierarchical'        => false,
      'supports'            => ['title'],
      'has_archive' => true
    ]);

    register_post_type('schedule', [
      'labels' => [
        'name'               => 'Занятия', // основное название для типа записи
        'singular_name'      => 'Занятие', // название для одной записи этого типа
        'add_new'            => 'Добавить новоe Занятие', // для добавления новой записи
        'add_new_item'       => 'Добавить новоe Занятие', // заголовка у вновь создаваемой записи в админ-панели.
        'edit_item'          => 'Редактировать Занятие', // для редактирования типа записи
        'new_item'           => 'Новое Занятие', // текст новой записи
        'view_item'          => 'Смотреть Занятие', // для просмотра записи этого типа.
        'search_items'       => 'Искать Занятия', // для поиска по этим типам записи
        'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
        'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
        'parent_item_colon'  => '', // для родителей (у древовидных типов)
        'menu_name'          => 'Занятия', // название меню
      ],
      'public'              => true,
      'menu_position'       => 20,
      'menu_icon'           => 'dashicons-list-view',
      'hierarchical'        => false,
      'supports'            => ['title'],
      'has_archive' => true
    ]);


    register_taxonomy('schedule_days', ['schedule'], [
      'labels'                => [
        'name'              => 'Дни недели',
        'singular_name'     => 'День недели',
        'search_items'      => 'Найти день недели',
        'all_items'         => 'Все дни недели',
        'view_item '        => 'Посмотреть дни недели',
        'edit_item'         => 'Редактировать дни недели',
        'update_item'       => 'Обновить',
        'add_new_item'      => 'Добавить день недели',
        'new_item_name'     => 'Добавить день недели',
        'menu_name'         => 'Все дни недели',
      ],
      'description'           => '', // описание таксономии
      'public'                => true,
      'hierarchical'          => true,
    ]);

    register_taxonomy('places', ['schedule'], [
      'labels'                => [
        'name'              => 'Залы',
        'singular_name'     => 'Зал',
        'search_items'      => 'Найти залы',
        'all_items'         => 'Все залы',
        'view_item '        => 'Посмотреть залы',
        'edit_item'         => 'Редактировать залы',
        'update_item'       => 'Обновить',
        'add_new_item'      => 'Добавить залы',
        'new_item_name'     => 'Добавить залы',
        'menu_name'         => 'Все залы',
      ],
      'description'           => '', // описание таксономии
      'public'                => true,
      'hierarchical'          => true,
    ]);

    register_post_type('prices', [
      'labels' => [
        'name'               => 'Прайсы', // основное название для типа записи
        'singular_name'      => 'Прайс', // название для одной записи этого типа
        'add_new'            => 'Добавить новый прайс', // для добавления новой записи
        'add_new_item'       => 'Добавить новый прайс', // заголовка у вновь создаваемой записи в админ-панели.
        'edit_item'          => 'Редактировать прайс', // для редактирования типа записи
        'new_item'           => 'Новый прайс', // текст новой записи
        'view_item'          => 'Смотреть прайсы', // для просмотра записи этого типа.
        'search_items'       => 'Искать прайсы', // для поиска по этим типам записи
        'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
        'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
        'parent_item_colon'  => '', // для родителей (у древовидных типов)
        'menu_name'          => 'Прайсы', // название меню
      ],
      'public'              => true,
      'menu_position'       => 20,
      'menu_icon'           => 'dashicons-media-spreadsheet',
      'hierarchical'        => false,
      'supports'            => ['title'],
      'has_archive' => true
    ]);

    register_post_type('cards', [
      'labels' => [
        'name'               => 'Клубные карты', // основное название для типа записи
        'singular_name'      => 'Клубная карта', // название для одной записи этого типа
        'add_new'            => 'Добавить новую клубную карту', // для добавления новой записи
        'add_new_item'       => 'Добавить новую клубную карту', // заголовка у вновь создаваемой записи в админ-панели.
        'edit_item'          => 'Редактировать клубные карты', // для редактирования типа записи
        'new_item'           => 'Новая клубная карта', // текст новой записи
        'view_item'          => 'Смотреть клубные карты', // для просмотра записи этого типа.
        'search_items'       => 'Искать клубные карты', // для поиска по этим типам записи
        'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
        'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
        'parent_item_colon'  => '', // для родителей (у древовидных типов)
        'menu_name'          => 'Клубные карты', // название меню
      ],
      'public'              => true,
      'menu_position'       => 20,
      'menu_icon'           => 'dashicons-tickets-alt',
      'hierarchical'        => false,
      'supports'            => ['title'],
      'has_archive' => false
    ]);


    register_post_type('orders', [
      'labels' => [
        'name'               => 'Заявки', // основное название для типа записи
        'singular_name'      => 'Заявка', // название для одной записи этого типа
        'add_new'            => 'Добавить новую заявку', // для добавления новой записи
        'add_new_item'       => 'Добавить новую заявку', // заголовка у вновь создаваемой записи в админ-панели.
        'edit_item'          => 'Редактировать заявку', // для редактирования типа записи
        'new_item'           => 'Новая заявка', // текст новой записи
        'view_item'          => 'Смотреть заявки', // для просмотра записи этого типа.
        'search_items'       => 'Искать заявки', // для поиска по этим типам записи
        'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
        'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
        'parent_item_colon'  => '', // для родителей (у древовидных типов)
        'menu_name'          => 'Заявки', // название меню
      ],
      'public'              => false,
      'show_ui'             => true,
      'show_in_menu'        => true,
      'menu_position'       => 20,
      'menu_icon'           => 'dashicons-cart',
      'hierarchical'        => false,
      'supports'            => ['title'],
      'has_archive'         => false
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


function si_meta_boxes()
{
  add_meta_box(
    'si_like',
    'Количество лайков: ',
    'si_meta_like_cb',
    'post'
  );

  $fields = [
    'si_order_date' => 'Дата заявки: ',
    'si_order_name' => 'Имя клиента: ',
    'si_order_phone' => 'Номер телефона: ',
    'si_order_choice' => 'Выбор клиента: '
  ];

  foreach ($fields as $slug => $text) {
    add_meta_box(
      $slug,
      $text,
      'si_order_fields_cb',
      'orders',
      'advanced',
      'default',
      $slug,
    );
  }
}

function si_order_fields_cb($post_obj, $slug)
{
  $slug = $slug['args'];

  switch ($slug) {
    case 'si_order_date':
      $data =  $post_obj->post_date;
      break;
    case 'si_order_choice':
      $id = get_post_meta($post_obj->ID, $slug, true);
      $title = get_the_title($id);
      $type = get_post_type_object(get_post_type($id))->labels->name;
      $data = 'Клиент выбрал: <strong>' . $title . '</strong>. <br/> Из раздела: <strong>' . $type . '</strong>';
      break;
    default:
      $data = get_post_meta($post_obj->ID, $slug, true);
      $data = $data ?  $data : 'Нет данных';
      break;
  }

  echo '<p>' . $data . '</p>';
}

function si_register_slogan()
{
  add_settings_field(
    'si_option_field_slogan',
    'Слоган вашего сайта',
    'si_option_slogan_cb',
    'general',
    'default',
    ['label_for' => 'si_option_field_slogan']
  );

  register_setting(
    'general',
    'si_option_field_slogan',
    'strval'
  );
}


function si_modal_form_handler()
{
  $name = $_POST['si-user-name'] ? $_POST['si-user-name'] : 'Аноним';
  $phone = $_POST['si-user-phone'] ? $_POST['si-user-phone'] : false;
  $choice = $_POST['form-post-id'] ? $_POST['form-post-id'] : 'empty';

  if ($phone) {
    $name = wp_strip_all_tags($name);
    $phone = wp_strip_all_tags($phone);
    $choice = wp_strip_all_tags($choice);
    $id = wp_insert_post(wp_slash([
      'post_title' => 'Заявка № ',
      'post_type' => 'orders',
      'post_status' => 'publish',
      'meta_input' => [
        'si_order_name' => $name,
        'si_order_phone' => $phone,
        'si_order_choice' => $choice
      ]
    ]));
    if ($id !== 0) {
      wp_update_post([
        'ID' => $id,
        'post_title' => 'Заявка № ' . $id,
      ]);
      update_field('order_status', 'new', $id);
    }
  }
  header('Location: ' . home_url());
}

function si_likes()
{

  $id = $_POST['id'];
  $todo = $_POST['todo'];
  $current_data = get_post_meta($id, 'si-like', true);
  $current_data = $current_data ? $current_data : 0;
  if ($todo === 'plus') {
    $current_data++;
  } else if ($current_data === 'minus') {
    $current_data--;
  }
  $res = update_post_meta($id, 'si-like', $current_data);
  if ($res) {
    echo $current_data;
    wp_die();
  } else {
    wp_die('Что-то пошло не так, попробуйте еще раз', 500);
  }
}

function si_option_slogan_cb($args)
{
  $slug = $args['label_for'];

?>
  <input type="text" id="<?php echo $slug; ?>" value="<?php echo get_option($slug); ?>" name="<?php echo $slug; ?>" class="regular-text code">
<?php
}

function si_like_column($col_name, $id)
{
  if ($col_name !== 'col_like') return;
  $likes = get_post_meta($id, 'si-like', true);
  echo $likes ? $likes : 0;
}

function si_add_col_likes($defaults)
{
  $types = get_current_screen();

  if ($types->post_type === 'post') {
    $defaults['col_like'] = 'Лайки';
  }
  return $defaults;
}

function _si_assets_path($path)
{
  return get_template_directory_uri() . '/assets/' . $path;
}
