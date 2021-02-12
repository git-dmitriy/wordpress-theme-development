<?php
get_header();
?>

<main class="main-content">
  <h1 class="sr-only">Цены на наши услуги и клубные карты</h1>
  <div class="wrapper">
    <?php get_template_part('tmp/breadcrumbs'); ?>
    <section class="prices">
      <h2 class="main-heading prices__h">Цены</h2>

      <?php
      if (have_posts()) :
        while (have_posts()) :
          the_post();
          if (!get_field('prices_show')) {
            continue;
          }
          the_content();

        endwhile;
      else :
        get_template_part('tmp/no-posts.php');
      endif;
      ?>

      <!-- <table>
        <thead>
          <tr>
            <td>Услуга</td>
            <td>Разовая покупка</td>
            <td>1 месяц</td>
            <td>6 месяцев</td>
            <td>12 месяцев</td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td> Фитнес </td>
            <td> 200 <span> р.- </span>
            </td>
            <td> 900 <span> р.- </span>
            </td>
            <td> 4800 <span> р.- </span>
            </td>
            <td> 9000 <span> р.- </span>
            </td>
          </tr>
          <tr>
            <td> Тренажерный зал </td>
            <td> 200 <span> р.- </span>
            </td>
            <td> 900 <span> р.- </span>
            </td>
            <td> 4800 <span> р.- </span>
            </td>
            <td> 9000 <span> р.- </span>
            </td>
          </tr>
          <tr>
            <td> Женский фитнес </td>
            <td> 200 <span> р.- </span>
            </td>
            <td> 1100 <span> р.- </span>
            </td>
            <td> 6000 <span> р.- </span>
            </td>
            <td> 11000 <span> р.- </span>
            </td>
          </tr>
          <tr>
            <td> Бокс </td>
            <td> 200 <span> р.- </span>
            </td>
            <td> 900 <span> р.- </span>
            </td>
            <td> 4800 <span> р.- </span>
            </td>
            <td> 9000 <span> р.- </span>
            </td>
          </tr>
        </tbody>
      </table> -->
    </section>

    <?php
    $query = new WP_Query([
      'numberposts' => -1,
      'post_type' => 'cards',
      'meta_key' => 'club_order',
      'orderby' => 'meta_value_num',
      'order' => 'ASC'
    ]);
    if ($query->have_posts()) :
    ?>

      <section class="cards">
        <h2 class="main-heading cards__h"> клубные карты </h2>
        <ul class="cards__list row">
          <?php
          while ($query->have_posts()) :
            $query->the_post();
            $profit_class = '';
            if (get_field('club_profit')) {
              $profit_class = " card_profitable";
            }
            $benefits = get_field('club_benefits');
            $benefits = explode("\n", $benefits);

            $bg = get_field('club_bg');
            $bg_default = _si_assets_path('img/index__cards_card3.jpg');
            $bg = $bg ?
              "style=\"background-image: url(${bg});\"" :
              "style=\"background-image: url(${bg_default});\"";
          ?>
            <li class="card <?php echo $profit_class; ?>" <?php echo $bg ?>>
              <h3 class="card__name">
                <?php the_title(); ?>
              </h3>
              <p class="card__time">
                <?php the_field('club_time_start'); ?>
                &ndash;
                <?php the_field('club_time_end'); ?>
              </p>
              <p class="card__price price">
                <?php the_field('club_price'); ?>
                <span class="price__unit" aria-label="рублей в месяц">р.-/мес.</span>
              </p>
              <ul class="card__features">
                <?php foreach ($benefits as $bn) : ?>
                  <li class="card__feature">
                    <?php echo $bn; ?>
                  </li>
                <?php endforeach; ?>
              </ul>
              <a data-post-id="<?php echo $id; ?>" href="#modal-form" class="card__buy btn btn_modal">купить</a>
            </li>
          <?php
          endwhile;
          wp_reset_postdata();
          ?>
        </ul>
      </section>
    <?php
    endif;
    ?>

  </div>
</main>

<?php
get_footer();
?>