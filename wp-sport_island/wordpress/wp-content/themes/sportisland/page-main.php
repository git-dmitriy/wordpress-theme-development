<?php
/*
Template Name: Шаблон для главной страницы
*/
get_header();
?>

<main class="main-content">
  <h1 class="sr-only"> Домашняя страница спортклуба SportIsland. </h1>
  <div class="banner">
    <span class="sr-only">Будь в форме!</span>
    <a href="trainers.html" class="banner__link btn">записаться</a>
  </div>
  <article class="about">
    <div class="wrapper about__flex">
      <div class="about__wrap">
        <h2 class="main-heading about__h"> кто мы такие </h2>
        <p class="about__text"> Спортивный клуб SPORTISLAND существует уже более 5 лет. За это время большое количество посетителей получили положительный результат от своих тренировок. Мы предлагаем посещать просторный и укомплектованный тренажерный зал с персональными тренерами, массаж, групповые занятия (фитнес), занятия единоборствами в группах и индивидуально, и большое количество тренировок для детей. В каждый абонемент входит посещение финской сауны </p>
        <a href="blog.html" class="about__link btn">подробнее</a>
      </div>
      <figure class="about__thumb">
        <img src="<?php echo _si_assets_path('img/index__about_img.jpg') ?>" alt="Power lifter">
      </figure>
    </div>
  </article>
  <section class="sales">
    <div class="wrapper">
      <header class="sales__header">
        <h2 class="main-heading sales__h"> акции и скидки </h2>
        <p class="sales__btns">
          <button class="sales__btn sales__btn_prev">
            <span class="sr-only"> Предыдущие акции </span>
          </button>
          <button class="sales__btn sales__btn_next">
            <span class="sr-only"> Следующие акции </span>
          </button>
        </p>
      </header>
      <div class="sales__slider slider">
        <section class="slider__slide stock">
          <a href="blog.html" class="stock__link" aria-label="Подробнее об акции скидка 20% на групповые занятия">
            <img src="<?php echo _si_assets_path('img/index__sales_pic1.jpg') ?>" alt="" class="stock__thumb">
            <h3 class="stock__h"> Групповые занятия 20% скидка </h3>
            <p class="stock__text"> Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев более менее осмысленного текста рыбы на русском языке. </p>
            <span class="stock__more link-more_inverse link-more">Подробнее</span>
          </a>
        </section>
        <section class="slider__slide stock">
          <a href="blog.html" class="stock__link" aria-label="Подробнее об акции Скидка 30% на занятия с тренером">
            <img src="<?php echo _si_assets_path('img/index__sales_pic2.jpg') ?> " alt="" class="stock__thumb">
            <h3 class="stock__h"> Скидка 30% на занятия с тренером </h3>
            <p class="stock__text"> Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев более менее осмысленного текста рыбы на русском языке. </p>
            <span class="stock__more  link-more_inverse link-more">Подробнее</span>
          </a>
        </section>
        <section class="slider__slide stock">
          <a href="blog.html" class="stock__link" aria-label="Подробнее об акции Скидка 30% на занятия с тренером">
            <img src="<?php echo _si_assets_path('img/index__sales_pic2.jpg') ?>" alt="" class="stock__thumb">
            <h3 class="stock__h"> Скидка 30% на занятия с тренером </h3>
            <p class="stock__text"> Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев более менее осмысленного текста рыбы на русском языке. </p>
            <span class="stock__more  link-more_inverse link-more">Подробнее</span>
          </a>
        </section>
      </div>
    </div>
  </section>
  <section class="cards cards_index">
    <div class="wrapper">
      <h2 class="main-heading cards__h"> клубные карты </h2>
      <ul class="cards__list row">
        <li class="card">
          <h3 class="card__name"> полный день </h3>
          <p class="card__time"> 7:00 &ndash; 22:00 </p>
          <p class="card__price price"> 3200 <span class="price__unit" aria-label="рублей в месяц">р.-/мес.</span>
          </p>
          <ul class="card__features">
            <li class="card__feature">Безлимит посещений клуба</li>
            <li class="card__feature">Вводный инструктаж</li>
            <li class="card__feature">Групповые занятия</li>
            <li class="card__feature">Сауна</li>
          </ul>
          <a data-post-id="99" href="#modal-form" class="card__buy btn btn_modal">купить</a>
        </li>
        <li class="card card_profitable">
          <h3 class="card__name"> полный день </h3>
          <p class="card__time"> 7:00 &ndash; 22:00 </p>
          <p class="card__price price"> 3200 <span class="price__unit" aria-label="рублей в месяц">р.-/мес.</span>
          </p>
          <ul class="card__features">
            <li class="card__feature">Безлимит посещений клуба</li>
            <li class="card__feature">Вводный инструктаж</li>
            <li class="card__feature">Групповые занятия</li>
            <li class="card__feature">Сауна</li>
          </ul>
          <a data-post-id="99" href="#modal-form" class="card__buy btn btn_modal">купить</a>
        </li>
        <li class="card">
          <h3 class="card__name"> полный день </h3>
          <p class="card__time"> 7:00 &ndash; 22:00 </p>
          <p class="card__price price"> 3200 <span class="price__unit" aria-label="рублей в месяц">р.-/мес.</span>
          </p>
          <ul class="card__features">
            <li class="card__feature">Безлимит посещений клуба</li>
            <li class="card__feature">Вводный инструктаж</li>
            <li class="card__feature">Групповые занятия</li>
            <li class="card__feature">Сауна</li>
          </ul>
          <a data-post-id="99" href="#modal-form" class="card__buy btn btn_modal">купить</a>
        </li>
        <li class="card">
          <h3 class="card__name"> полный день </h3>
          <p class="card__time"> 7:00 &ndash; 22:00 </p>
          <p class="card__price price"> 3200 <span class="price__unit" aria-label="рублей в месяц">р.-/мес.</span>
          </p>
          <ul class="card__features">
            <li class="card__feature">Безлимит посещений клуба</li>
            <li class="card__feature">Вводный инструктаж</li>
            <li class="card__feature">Групповые занятия</li>
            <li class="card__feature">Сауна</li>
          </ul>
          <a data-post-id="99" href="#modal-form" class="card__buy btn btn_modal">купить</a>
        </li>
      </ul>
    </div>
  </section>
</main>

<?php
get_footer();
?>