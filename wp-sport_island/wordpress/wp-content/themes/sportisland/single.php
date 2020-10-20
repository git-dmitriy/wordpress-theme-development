<?php
get_header();
?>

<main class="main-content">
  <div class="wrapper">
    <?php get_template_part('tmp/breadcrumbs'); ?>
  </div>

  <?php
  if (have_posts()) :
    while (have_posts()) :
      the_post();
  ?>
      <article class="main-article wrapper">
        <header class="main-article__header">
          <!-- <img src="img/blog__article_full.jpg" alt="" class="main-article__thumb"> -->
          <?php the_post_thumbnail('full', ['class' => 'main-article__thumb']) ?>
          <h1 class="main-article__h"><?php the_title(); ?></h1>
        </header>
        <?php the_content(); ?>
        <footer class="main-article__footer">
          <time datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('d F Y'); ?></time>
          <a href="#" class="main-article__like like">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 51.997 51.997" style="enable-background:new 0 0 51.997 51.997;" xml:space="preserve">
              <style>
                path {
                  fill: #666;
                }
              </style>
              <path d="M51.911,16.242C51.152,7.888,45.239,1.827,37.839,1.827c-4.93,0-9.444,2.653-11.984,6.905
	c-2.517-4.307-6.846-6.906-11.697-6.906c-7.399,0-13.313,6.061-14.071,14.415c-0.06,0.369-0.306,2.311,0.442,5.478
	c1.078,4.568,3.568,8.723,7.199,12.013l18.115,16.439l18.426-16.438c3.631-3.291,6.121-7.445,7.199-12.014
	C52.216,18.553,51.97,16.611,51.911,16.242z" />
            </svg>
            <span class="like__text">Нравится </span>
            <span class="like__count">46</span>
          </a>
        </footer>
      </article>
  <?php
    endwhile;
  endif; ?>
</main>

<?php
get_footer();
?>