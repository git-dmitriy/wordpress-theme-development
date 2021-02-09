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

      <?php
      if (have_posts()) :
      ?>
        <ul class="trainers-list">

          <?php
          while (have_posts()) :
            the_post();
          ?>

            <li class="trainers-list__item">
              <article class="trainer">
                <img src="<?php echo get_field('trainers_pic')['url']; ?>" alt="<?php echo get_field('trainers_pic')['alt']; ?>" class="trainer__thumb">
                <div class="trainer__wrap">
                  <h2 class="trainer__name"> <?php the_title(); ?> </h2>
                  <p class="trainer__text"><?php the_field('trainer_description'); ?></p>
                </div>
                <a href="#modal-form" class="trainer__subscribe btn btn_modal" data-post-id="<?php echo $id; ?>">записаться</a>
              </article>
            </li>

          <?php endwhile;  ?>

        </ul>

      <?php
      else :
        get_template_part('tmp/no-posts.php');
      endif;
      ?>
    </div>
  </section>
</main>


<?php
get_footer();
?>