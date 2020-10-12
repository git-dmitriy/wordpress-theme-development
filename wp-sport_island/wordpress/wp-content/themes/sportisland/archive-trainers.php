<?php
get_header();
?>

<main class="main-content">
  <div class="wrapper">
    <ul class="breadcrumbs">
      <li class="breadcrumbs__item breadcrumbs__item_home">
        <a href="index.html" class="breadcrumbs__link">Главная</a>
      </li>
      <li class="breadcrumbs__item">
        <a href="trainers.html" class="breadcrumbs__link">Тренеры</a>
      </li>
    </ul>
  </div>
  <section class="trainers">
    <div class="wrapper">
      <h1 class="main-heading trainers__h">Тренеры</h1>
      <ul class="trainers-list">
        <li class="trainers-list__item">
          <article class="trainer">
            <img src="img/trainers__trainer_pic1.png" alt="" class="trainer__thumb">
            <div class="trainer__wrap">
              <h2 class="trainer__name"> Комзова Ольга </h2>
              <p class="trainer__text"> Сертифицированный специалист по Пилатесу (Matwork, Ring, Ball, miniball) и ZUMBA, ZUMBA by strong. </p>
            </div>
            <a href="#" class="trainer__subscribe btn">записаться</a>
          </article>
        </li>
        <li class="trainers-list__item">
          <article class="trainer">
            <img src="img/trainers__trainer_pic2.png" alt="" class="trainer__thumb">
            <div class="trainer__wrap">
              <h2 class="trainer__name"> Юзвак Дмитрий </h2>
              <p class="trainer__text"> Хореограф. Преподаватель Dance Mix, Twerk, Strip dance и др направлений. Официальный представитель UBPF. Чемпионка Европы по фитнес Бикини. Тренер по дефиле. Персональный тренер тренажерного зала. </p>
            </div>
            <a href="#" class="trainer__subscribe btn">записаться</a>
          </article>
        </li>
        <li class="trainers-list__item">
          <article class="trainer">
            <img src="img/trainers__trainer_pic3.png" alt="" class="trainer__thumb">
            <div class="trainer__wrap">
              <h2 class="trainer__name"> Рудь Валерий </h2>
              <p class="trainer__text"> Персональный тренер. МСМК по пауерлифтингу, неоднократный победитель соревнований. </p>
            </div>
            <a href="#" class="trainer__subscribe btn">записаться</a>
          </article>
        </li>
      </ul>
    </div>
  </section>
</main>


<?php
get_footer();
?>