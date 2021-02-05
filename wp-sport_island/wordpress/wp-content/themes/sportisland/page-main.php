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
    <a href="<?php echo get_post_type_archive_link('services'); ?>" class="banner__link btn">записаться</a>
  </div>

  <?php
  $post_about = get_post(120);
  if ($post_about) :
  ?>

    <article class="about">
      <div class="wrapper about__flex">
        <div class="about__wrap">
          <h2 class="main-heading about__h"><?php echo $post_about->post_title; ?></h2>
          <p class="about__text">
            <?php echo $post_about->post_excerpt; ?>
          </p>
          <a href="<?php echo get_the_permalink($post_about->ID); ?>" class="about__link btn">подробнее</a>
        </div>
        <figure class="about__thumb">
          <?php echo get_the_post_thumbnail($post_about->ID, 'full'); ?>
        </figure>
      </div>
    </article>

  <?php
  endif;
  $sales = get_posts([
    'numberposts' => -1,
    'category_name' => 'sales',
    'meta_key' => 'sales_actual',
    'meta_value' => '1'
  ]);

  // var_dump($sales);
  // var_dump($sales[0]);
  // var_dump($sales[0]->ID);
  // var_dump(get_field('sales-actual', $sales[0]->ID));
  // var_dump(get_post_meta($sales[0]->ID, 'sales-actual', true));

  if ($sales) :

  ?>

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
          <?php
          global $post;
          foreach ($sales as $post) :
            setup_postdata($post);
          ?>
            <section class="slider__slide stock">
              <a href="<?php the_permalink(); ?>" class="stock__link" aria-label="Подробнее об акции скидка 20% на групповые занятия">
                <?php the_post_thumbnail('full', ['class' => 'stock__thumb']); ?>
                <h3 class="stock__h"> <?php the_title(); ?> </h3>
                <p class="stock__text">
                  <?php echo get_the_excerpt(); ?>
                </p>
                <span class="stock__more link-more_inverse link-more">Подробнее</span>
              </a>
            </section>
          <?php
          endforeach;
          wp_reset_postdata();
          ?>
        </div>
      </div>
    </section>

  <?php endif; ?>

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