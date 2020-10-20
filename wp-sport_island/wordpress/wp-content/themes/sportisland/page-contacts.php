<?php
/*
Template Name: Шаблона для страницы контакты
*/
get_header();
?>

<main class="main-content">
  <div class="wrapper">
    <?php get_template_part('tmp/breadcrumbs'); ?>
  </div>
  <section class="contacts">
    <?php
    while (have_posts()) :
      the_post(); ?>

      <div class="wrapper">
        <h1 class="contacts__h main-heading"><?php the_title(); ?></h1>
        <div class="map">
          <a href="#" class="map__fallback">
            <img src="<?php echo _si_assets_path('img/map.jpg'); ?>" alt="Карта клуба SportIsland">
            <span class="sr-only"> Карта </span>
          </a>
          <?php if (is_active_sidebar('si-map')) {
            dynamic_sidebar('si-map');
          }
          ?>
        </div>
        <p class="contacts__info">
          <?php if (is_active_sidebar('si-after-map')) {
            dynamic_sidebar('si-after-map');
          }
          ?>
        </p>

        <?php the_content(); ?>
        <form action="#" class="contacts__form contacts-form">
          <label class="contacts-form__label">
            <span class="sr-only"> Имя </span>
            <input type="text" class="contacts-form__input" placeholder="Ваше имя">
          </label>
          <label class="contacts-form__label">
            <span class="sr-only"> Телефон </span>
            <input type="text" class="contacts-form__input" placeholder="Ваш телефон">
          </label>
          <label class="contacts-form__label">
            <span class="sr-only"> Почта </span>
            <input type="text" class="contacts-form__input" placeholder="Ваша почта">
          </label>
          <label class="contacts-form__label contacts-form__label_textarea">
            <span class="sr-only"> Комментарий </span>
            <textarea name="" id="" cols="30" rows="10" class="contacts-form__textarea" placeholder="Ваше сообщение"></textarea>
          </label>
          <button class="contacts-form__btn btn"> Отправить </button>
        </form>

      </div>
    <?php
    endwhile;
    ?>
  </section>
</main>

<?php
get_footer();
?>