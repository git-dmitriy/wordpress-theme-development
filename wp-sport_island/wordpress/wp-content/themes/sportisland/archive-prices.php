<?php
get_header();
?>

<main class="main-content">
  <h1 class="sr-only">Цены на наши услуги и клубные карты</h1>
  <div class="wrapper">
    <?php get_template_part('tmp/breadcrumbs'); ?>
    <section class="prices">
      <h2 class="main-heading prices__h">Цены</h2>
      <table>
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
      </table>
    </section>
    <section class="cards">
      <h2 class="page-heading cards__h"> клубные карты </h2>
      <ul class="cards__list row">
        <li class="card">
          <h3 class="card__name"> полный день </h3>
          <p class="card__time"> 7:00 &ndash; 22:00 </p>
          <p class="card__price price"> 3200 <span class="price__unit">р.-/мес.</span>
          </p>
          <ul class="card__features">
            <li class="card__feature">Безлимит посещений клуба</li>
            <li class="card__feature">Вводный инструктаж</li>
            <li class="card__feature">Групповые занятия</li>
            <li class="card__feature">Сауна</li>
          </ul>
          <a href="#" class="card__buy btn">купить</a>
        </li>
        <li class="card card_profitable">
          <h3 class="card__name"> полный день </h3>
          <p class="card__time"> 7:00 &ndash; 22:00 </p>
          <p class="card__price price"> 3200 <span class="price__unit">р.-/мес.</span>
          </p>
          <ul class="card__features">
            <li class="card__feature">Безлимит посещений клуба</li>
            <li class="card__feature">Вводный инструктаж</li>
            <li class="card__feature">Групповые занятия</li>
            <li class="card__feature">Сауна</li>
          </ul>
          <a href="#" class="card__buy btn">купить</a>
        </li>
        <li class="card">
          <h3 class="card__name"> полный день </h3>
          <p class="card__time"> 7:00 &ndash; 22:00 </p>
          <p class="card__price price"> 3200 <span class=" price__unit">р.-/мес.</span>
          </p>
          <ul class="card__features">
            <li class="card__feature">Безлимит посещений клуба</li>
            <li class="card__feature">Вводный инструктаж</li>
            <li class="card__feature">Групповые занятия</li>
            <li class="card__feature">Сауна</li>
          </ul>
          <a href="#" class="card__buy btn">купить</a>
        </li>
      </ul>
    </section>
  </div>
</main>

<?php
get_footer();
?>