<?php
get_header();
if (is_home()) :
?>

  <main class="main-content">
    <h1 class="sr-only">Страница категорий блога на сайте спорт-клуба SportIsland</h1>
    <div class="wrapper">
      <ul class="breadcrumbs">
        <li class="breadcrumbs__item breadcrumbs__item_home">
          <a href="index.html" class="breadcrumbs__link">Главная</a>
        </li>
        <li class="breadcrumbs__item">
          <a href="blog.html" class="breadcrumbs__link">Блог</a>
        </li>
      </ul>
    </div>

    <?php if (have_posts()) : ?>

      <section class="last-posts">
        <div class="wrapper">
          <h2 class="main-heading last-posts__h"> последние записи </h2>
          <ul class="posts-list">
            <?php while (have_posts()) :
              the_post();
            ?>
              <li class="last-post">
                <a href="<?php the_permalink(); ?>" class="last-post__link" aria-label="Читать текст статьи: <?php the_title(); ?>">
                  <figure class="last-post__thumb">
                    <!-- <img src="img/blog__article_thmb1.jpg" alt="" class="last-post__img"> -->

                    <?php the_post_thumbnail('full', ['class' => 'last-post__img']) ?>
                  </figure>
                  <div class="last-post__wrap">
                    <h3 class="last-post__h"> <?php the_title(); ?> </h3>
                    <p class="last-post__text"> <?php echo get_the_excerpt(); ?> </p>
                    <span class="last-post__more link-more">Подробнее</span>
                  </div>
                </a>
              </li>

            <?php endwhile; ?>
          </ul>
        </div>
      </section>

    <?php else : ?>
      <section class="last-posts">
        <div class="wrapper">
          <h2 class="main-heading last-posts__h"> Нет записей </h2>
        </div>
      </section>
    <?php endif; ?>
    <section class="categories">
      <div class="wrapper">
        <h2 class="categories__h main-heading"> категории </h2>
        <ul class="categories-list">
          <li class="category">
            <a href="category.html" class="category__link">
              <img src="img/blog__category_thmb1.jpg" alt="" class="category__thumb">
              <span class="category__name">Груповые занятия</span>
            </a>
          </li>
          <li class="category">
            <a href="category.html" class="category__link">
              <img src="img/blog__category_thmb2.jpg" alt="" class="category__thumb">
              <span class="category__name">Кардио</span>
            </a>
          </li>
          <li class="category">
            <a href="category.html" class="category__link">
              <img src="img/blog__category_thmb3.jpg" alt="" class="category__thumb">
              <span class="category__name">Йога</span>
            </a>
          </li>
        </ul>
      </div>
    </section>
  </main>

<?php
else :
?>
  <main class="main-content">
    <h1 class="sr-only">Страница на сайте спорт-клуба SportIsland</h1>
    <div class="wrapper">
      <ul class="breadcrumbs">
        <li class="breadcrumbs__item breadcrumbs__item_home">
          <a href="index.html" class="breadcrumbs__link">Главная</a>
        </li>
        <li class="breadcrumbs__item">
          <a href="blog.html" class="breadcrumbs__link">Блог</a>
        </li>
      </ul>
    </div>
    <section class="last-posts">
      <div class="wrapper">
        <h2 class="main-heading last-posts__h"> Записи </h2>
        <ul class="posts-list">
          <li class="last-post">
            <a href="single.html" class="last-post__link" aria-label="Читать текст статьи: Растяжка от болей в мышцах">
              <figure class="last-post__thumb">
                <img src="img/blog__article_thmb1.jpg" alt="" class="last-post__img">
              </figure>
              <div class="last-post__wrap">
                <h3 class="last-post__h"> Растяжка от болей в мышцах </h3>
                <p class="last-post__text"> Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев более менее осмысленного текста рыбы на русском языке, а начинающему оратору отточить навык публичных выступлений в домашних условиях. </p>
                <span class="last-post__more link-more">Подробнее</span>
              </div>
            </a>
          </li>
          <li class="last-post">
            <a href="single.html" class="last-post__link" aria-label="Читать текст статьи: Бег помогает похудеть">
              <figure class="last-post__thumb">
                <img src="img/blog__article_thmb2.jpg" alt="" class="last-post__img">
              </figure>
              <div class="last-post__wrap">
                <h3 class="last-post__h"> Бег помогает похудеть </h3>
                <p class="last-post__text"> Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев более менее осмысленного текста рыбы на русском языке, а начинающему оратору отточить навык публичных выступлений в домашних условиях. </p>
                <span class="last-post__more link-more">Подробнее</span>
              </div>
            </a>
          </li>
        </ul>
      </div>
    </section>
    <section class="categories">
      <div class="wrapper">
        <h2 class="categories__h main-heading"> категории </h2>
        <ul class="categories-list">
          <li class="category">
            <a href="category.html" class="category__link">
              <img src="img/blog__category_thmb1.jpg" alt="" class="category__thumb">
              <span class="category__name">Груповые занятия</span>
            </a>
          </li>
          <li class="category">
            <a href="category.html" class="category__link">
              <img src="img/blog__category_thmb2.jpg" alt="" class="category__thumb">
              <span class="category__name">Кардио</span>
            </a>
          </li>
          <li class="category">
            <a href="category.html" class="category__link">
              <img src="img/blog__category_thmb3.jpg" alt="" class="category__thumb">
              <span class="category__name">Йога</span>
            </a>
          </li>
        </ul>
      </div>
    </section>
  </main>
<?php
endif;
get_footer();
?>