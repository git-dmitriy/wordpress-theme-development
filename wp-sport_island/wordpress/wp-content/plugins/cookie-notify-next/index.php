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

  if (!empty($_POST)) {
    update_option('cnn_bg', $_POST['cnn_bg']);
    update_option('cnn_color', $_POST['cnn_color']);
    update_option('cnn_text', $_POST['cnn_text']);
    update_option('cnn_position', $_POST['cnn_position']);
  }

  $bg = get_option('cnn_bg');
  $color = get_option('cnn_color');
  $text = get_option('cnn_text');
  $position = get_option('cnn_position');

?>
  <h2>Настройки уведомления:</h2>
  <form method="POST">
    <p>
      <label>
        Введите значение для цвета фона:
        <input type="text" name="cnn_bg" value="<?php echo $bg; ?>">
      </label>
    </p>
    <p>
      <label>
        Введите значение для цвета текста:
        <input type="text" name="cnn_color" value="<?php echo $color; ?>">
      </label>
    </p>
    <p>
      <label>
        Введите текст уведомления:
        <input type="text" name="cnn_text" value="<?php echo $text; ?>">
      </label>
    </p>


    <fieldset>
      <legend>
        Выберите положение для уведомления:
      </legend>
      <br>
      <label>
        Сверху
        <input type="radio" name="cnn_position" value="top" <?php checked('top', $position, true);  ?>>
      </label>
      <label>
        Снизу
        <input type="radio" name="cnn_position" value="bottom" <?php checked('bottom', $position, true);  ?>>
      </label>
    </fieldset>
    <br>
    <br>
    <button type="submit">Сохранить настройки</button>
  </form>
  <?php
}


add_action('wp_footer', 'cnn_front_page_view');

function cnn_front_page_view()
{
  if ($_COOKIE['cnn_cookie_agreement'] !== 'agreed') :
    $bg = get_option('cnn_bg');
    $color = get_option('cnn_color');
    $text = get_option('cnn_text');
    $position = get_option('cnn_position');
    $css = $position . ': 0;'; // top|bottom: 0;
  ?>

    <div class="alert">
      <div class="wrapper">
        <?php echo $text; ?>
        <br>
        <button class="alert__btn">Я согласен</button>
      </div>
      <style>
        .alert {
          color: <?php echo $color; ?>;
          background-color: <?php echo $bg; ?>;
          position: fixed;
          <?php echo $css; ?>;
          left: 0;
          right: 0;
          z-index: 9999999;
          text-align: center;
          font-size: 30px;
          padding: 20px 10px;
        }

        .alert button {
          border: 1px solid <?php echo $color; ?>;
          background-color: transparent;
          font: inherit;
          font-size: 14px;
          color: <?php echo $color; ?>;
          padding: 10px 20px;
          cursor: pointer;
          transition: .3s;
        }

        .alert button:hover {
          background-color: <?php echo $color; ?>;
          color: <?php echo $bg; ?>;
        }

        .alert button:active {
          background-color: <?php echo $bg; ?>;
          color: <?php echo $color; ?>;
        }
      </style>
      <script>
        const url = "<?php echo esc_url(admin_url('admin-ajax.php')) ?>";
        const btn = document.querySelector('.alert__btn');
        console.log('btn:', btn.parentElement.parentElement)
        btn.addEventListener('click', function(e) {
          const data = new FormData();
          data.append('action', 'cnn_cookie_ajax');
          const xhr = new XMLHttpRequest();
          xhr.open('POST', url);
          xhr.send(data);
          xhr.addEventListener('readystatechange', function() {
            if (xhr.readyState !== 4) return;
            if (xhr.status === 200) {
              btn.parentElement.parentElement.remove();
            }
          })
        });
      </script>
    </div>

<?php
  endif;
}

add_action('wp_ajax_nopriv_cnn_cookie_ajax', 'cnn_ajax_handler');
add_action('wp_ajax_cnn_cookie_ajax', 'cnn_ajax_handler');

function cnn_ajax_handler()
{
  setcookie('cnn_cookie_agreement', 'agreed', time() + 60 * 60 * 24 * 30, '/');
  echo 'ok';
  wp_die();
}
