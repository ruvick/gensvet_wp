<?php get_header(); ?>

<?php get_template_part('template-parts/header-section'); ?>

<main class="main">

  <section class="breadcrumb">
    <div class="container">
      <div class="breadcrumb-wrap">
        <?php if (function_exists('kama_breadcrumbs')) kama_breadcrumbs(); ?>
      </div>
    </div>
  </section>

  <section class="points">
    <div class="container">
      <h1 class="points__title"><? single_cat_title(); ?></h1>
      <div class="points-wrap">
        <div class="points-wrap-left">
          <select name="" size=19 id="" class="points-wrap-left-select">
            <?php
            $parent_id = 8;
            // echo '<select name="" size=19 id="" class="points-wrap-left-select">';

            $sub_cats = get_categories(array(
              'child_of' => $parent_id,
              'order'    => 'DESC',
              'hide_empty' => 0
            ));
            if ($sub_cats) {
              foreach ($sub_cats as $cat) {

                echo '<option value="" class="points-wrap-left-select__opt">' . $cat->name . '</option>';

                $myposts = get_posts(array(
                  'numberposts' => -1,
                  'category'    => $cat->cat_ID,
                  'orderby'     => 'post_date',
                  'order'       => 'ASC',
                ));
              }
              wp_reset_postdata();
            }
            ?>
          </select>
          <!-- <select name="" size=19 id="" class="points-wrap-left-select">
            <option value="" class="points-wrap-left-select__opt">Москва и область</option> 
            <option value="" class="points-wrap-left-select__opt">Алтайский край</option>
            <option value="" class="points-wrap-left-select__opt">Амурская область</option>
            <option value="" class="points-wrap-left-select__opt">Архангельская область</option>
            <option value="" class="points-wrap-left-select__opt">Астраханская область</option>
            <option value="" class="points-wrap-left-select__opt">Белгородская область</option>
            <option value="" class="points-wrap-left-select__opt">Брянская область</option>
            <option value="" class="points-wrap-left-select__opt">Владимирская область</option>
            <option value="" class="points-wrap-left-select__opt">Волгоградская область</option>
            <option value="" class="points-wrap-left-select__opt">Вологодская область</option>
            <option value="" class="points-wrap-left-select__opt">Воронежская область</option>
            <option value="" class="points-wrap-left-select__opt">Еврейская автономная область</option>
            <option value="" class="points-wrap-left-select__opt">Забайкальский край</option>
            <option value="" class="points-wrap-left-select__opt">Ивановская область</option>
            <option value="" class="points-wrap-left-select__opt">Иркутская область</option>
            <option value="" class="points-wrap-left-select__opt">Кабардино-Балкарская Республика</option>
            <option value="" class="points-wrap-left-select__opt">Калининградская область</option>
            <option value="" class="points-wrap-left-select__opt">Калужская область</option>
            <option value="" class="points-wrap-left-select__opt">Калужская область</option>
            <option value="" class="points-wrap-left-select__opt">Карачаево-Черкесская Республика</option>
            <option value="" class="points-wrap-left-select__opt">Кемеровская область - Кузбасс</option>
            <option value="" class="points-wrap-left-select__opt">Кировская область</option>
            <option value="" class="points-wrap-left-select__opt">Костромская область</option>
            <option value="" class="points-wrap-left-select__opt">Краснодарский край</option>
            <option value="" class="points-wrap-left-select__opt">Красноярский край</option>
            <option value="" class="points-wrap-left-select__opt">Курганская область</option>
            <option value="" class="points-wrap-left-select__opt">Курская область</option>
            <option value="" class="points-wrap-left-select__opt">Ленинградская область</option>
            <option value="" class="points-wrap-left-select__opt">Липецкая область</option>
            <option value="" class="points-wrap-left-select__opt">Магаданская область</option>
            <option value="" class="points-wrap-left-select__opt">Мурманская область</option>
            <option value="" class="points-wrap-left-select__opt">Ненецкий автономный округ</option>
            <option value="" class="points-wrap-left-select__opt">Нижегородская область</option>
            <option value="" class="points-wrap-left-select__opt">Новгородская область</option>
            <option value="" class="points-wrap-left-select__opt">Новосибирская область</option>
            <option value="" class="points-wrap-left-select__opt">Омская область</option>
            <option value="" class="points-wrap-left-select__opt">Оренбургская область</option>
            <option value="" class="points-wrap-left-select__opt">Орловская область</option>
            <option value="" class="points-wrap-left-select__opt">Пензенская область</option>
            <option value="" class="points-wrap-left-select__opt">Пермский край</option>
            <option value="" class="points-wrap-left-select__opt">Приморский край</option>
            <option value="" class="points-wrap-left-select__opt">Псковская область</option>
            <option value="" class="points-wrap-left-select__opt">Республика Адыгея (Адыгея)</option>
            <option value="" class="points-wrap-left-select__opt">Республика Алтай</option>
            <option value="" class="points-wrap-left-select__opt">Республика Башкортостан</option>
            <option value="" class="points-wrap-left-select__opt">Республика Бурятия</option>
            <option value="" class="points-wrap-left-select__opt">Республика Дагестан</option>
            <option value="" class="points-wrap-left-select__opt">Республика Ингушетия</option>
            <option value="" class="points-wrap-left-select__opt">Республика Калмыкия</option>
            <option value="" class="points-wrap-left-select__opt">Республика Карелия</option>
            <option value="" class="points-wrap-left-select__opt">Республика Коми</option>
            <option value="" class="points-wrap-left-select__opt">Республика Крым и г.Севастополь</option>
            <option value="" class="points-wrap-left-select__opt">Республика Марий Эл</option>
            <option value="" class="points-wrap-left-select__opt">Республика Мордовия</option>
            <option value="" class="points-wrap-left-select__opt">Республика Саха (Якутия)</option>
            <option value="" class="points-wrap-left-select__opt">Республика Северная Осетия - Алания</option>
            <option value="" class="points-wrap-left-select__opt">Республика Татарстан (Татарстан)</option>
            <option value="" class="points-wrap-left-select__opt">Республика Тыва</option>
            <option value="" class="points-wrap-left-select__opt">Республика Хакасия</option>
            <option value="" class="points-wrap-left-select__opt">Ростовская область</option>
            <option value="" class="points-wrap-left-select__opt">Рязанская область</option>
            <option value="" class="points-wrap-left-select__opt">Самарская область</option>
            <option value="" class="points-wrap-left-select__opt">Санкт-Петербург</option>
            <option value="" class="points-wrap-left-select__opt">Саратовская область</option>
            <option value="" class="points-wrap-left-select__opt">Сахалинская область</option>
            <option value="" class="points-wrap-left-select__opt">Свердловская область</option>
            <option value="" class="points-wrap-left-select__opt">Севастополь</option>
            <option value="" class="points-wrap-left-select__opt">Смоленская область</option>
            <option value="" class="points-wrap-left-select__opt">Ставропольский край</option>
            <option value="" class="points-wrap-left-select__opt">Тамбовская область</option>
            <option value="" class="points-wrap-left-select__opt">Тверская область</option>
            <option value="" class="points-wrap-left-select__opt">Томская область</option>
            <option value="" class="points-wrap-left-select__opt">Тульская область</option>
            <option value="" class="points-wrap-left-select__opt">Тюменская область</option>
            <option value="" class="points-wrap-left-select__opt">Удмуртская Республика</option>
            <option value="" class="points-wrap-left-select__opt">Ульяновская область</option>
            <option value="" class="points-wrap-left-select__opt">Хабаровский край</option>
            <option value="" class="points-wrap-left-select__opt">Ханты-Мансийский автономный округ - Югра</option>
            <option value="" class="points-wrap-left-select__opt">Челябинская область</option>
            <option value="" class="points-wrap-left-select__opt">Чеченская Республика</option>
            <option value="" class="points-wrap-left-select__opt">Чувашская Республика - Чувашия</option>
            <option value="" class="points-wrap-left-select__opt">Чукотский автономный округ</option>
            <option value="" class="points-wrap-left-select__opt">Ямало-Ненецкий автономный округ</option>
            <option value="" class="points-wrap-left-select__opt">Ярославская область</option>
          </select> -->
          <div class="dropdown">
            <button class="dropdown__button">Москва и область</button>
            <ul class="dropdown-list">
              <li class="dropdown-list__item" data-value="first">Москва и область</li>
              <li class="dropdown-list__item" data-value="first">Алтайский край</li>
              <li class="dropdown-list__item" data-value="first">Амурская область</li>
            </ul>
            <input type="text" class="dropdown__input" value="">
          </div>
        </div>
        <div class="points-wrap-partners">
          <?php
          $parent_id = 8;
          $sub_cats = get_categories(array(
            'child_of' => $parent_id,
            'order'    => 'DESC',
            'hide_empty' => 0
          ));
          if ($sub_cats) {
            foreach ($sub_cats as $cat) {

              echo '<h2 class="points-wrap-partners__title">' . $cat->name . '</h2>
              <div class="points-wrap-partners-cards">';

              $myposts = get_posts(array(
                'numberposts' => -1,
                'category'    => $cat->cat_ID,
                'orderby'     => 'post_date',
                'order'       => 'ASC',
              ));
              global $post;
              foreach ($myposts as $post) {
                setup_postdata($post);
                echo '
                  <a href="' . get_permalink() . '" class="points-wrap-partners-cards-card">
                    <img src=" ' . get_the_post_thumbnail_url(get_the_ID(), "tominiatyre") . ' " alt="" class="points-wrap-partners-cards-card__img">
                    <p class="points-wrap-partners-cards-card__name">' . get_the_title() . '</p>
                    <div class="points-wrap-partners-cards-card-link">
                      <p class="points-wrap-partners-cards-card-link__desc">Подробнее</p>
                      <img src="' . get_template_directory_uri() . '/img/home/header-arrow-right.svg" alt="" class="points-wrap-partners-cards-card-link__img">
                    </div>
                  </a>';
              }
              echo '</div>';
            }
            wp_reset_postdata();
          } ?>
        </div>
      </div>
    </div>
  </section>
  <?php get_template_part('template-parts/subscription-section'); ?>
</main>
<?php get_footer(); ?>