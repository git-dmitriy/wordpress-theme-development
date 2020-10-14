<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv='X-UA-Compatible' content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title> Главная </title>
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,800,900&display=swap&subset=cyrillic" rel="preload stylesheet">
  <?php wp_head(); ?>
  <!-- <link rel="stylesheet" href="./css/styles.css"> -->
</head>

<body>
  <header class="main-header">
    <div class="wrapper main-header__wrap">
      <?php the_custom_logo(); ?>
      <?php wp_nav_menu([
        'theme_location' => 'menu-header',
        'container' => 'nav',
        'container_class' => 'main-navigation',
        'menu_class' => 'main-navigation__list',
        'items_wrap' => '<ul class="%2$s">%3$s</ul>',
      ]) ?>

      <address class="main-header__widget widget-contacts">
        <a href="tel:88007003030" class="widget-contacts__phone"> 8 800 700 30 30 </a>
        <p class="widget-contacts__address"> ул. Приречная 11 </p>
      </address>
      <button class="main-header__mobile">
        <span class="sr-only">Открыть мобильное меню</span>
      </button>
    </div>
  </header>