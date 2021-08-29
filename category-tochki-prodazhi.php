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
          <div name="" size=19 id="" class="points-wrap-left-select">
            <?php
              $parent_id = 8;
              $sub_cats = get_categories(array(
                'child_of' => $parent_id,
                'order'    => 'DESC',
                'hide_empty' => 0
              ));
              if ($sub_cats) {
                foreach ($sub_cats as $cat) {

                  $is_parent = 'sales-child';
                  $is_active = '';
                  $sales_term = get_term($cat->term_id);

                  if ($sales_term->parent == $parent_id) {
                    $is_parent = 'sales-parent';
                  }

                  if ($_REQUEST["region"] == $cat->cat_ID) {
                    $is_active = 'active';
                  }
                  echo '<a class="points-wrap-left-select__opt points-wrap-left-select__opt-link '. $is_active .' '. $is_parent .'" href="' . get_category_link($parent_id) . '?region=' . $cat->cat_ID . '&caname=' . $cat->name . '" value="">' . $cat->name . '</a>';
                }
                wp_reset_postdata();
              }
              ?>
          </div>
          <div class="dropdown">
            <button class="dropdown__button">Москва и область</button>
            <ul class="dropdown-list">
              <?php
              $parent_id = 8;
              $sub_cats = get_categories(array(
                'child_of' => $parent_id,
                'order'    => 'DESC',
                'hide_empty' => 0
              ));
              if ($sub_cats) {
                foreach ($sub_cats as $cat) {

                  $is_parent = 'sales-child';
                  $is_active = '';
                  $sales_term = get_term($cat->term_id);

                  if ($sales_term->parent == $parent_id) {
                    $is_parent = 'sales-parent';
                  }

                  if ($_REQUEST["region"] == $cat->cat_ID) {
                    $is_active = 'active';
                  }

                  echo '<li class="dropdown-list__item '. $is_active .' '. $is_parent .'" data-value="first"><a href="' . get_category_link($parent_id) . '?region=' . $cat->cat_ID . '&caname=' . $cat->name . '" value="">' . $cat->name . '</a></li>';
                }
                wp_reset_postdata();
              }
              ?>
            </ul>
            <input type="text" class="dropdown__input" value="">
          </div>
        </div>
        <div class="points-wrap-partners">
          <?php
          if (empty($_REQUEST["region"])) {
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
            }
          } else {
            echo '<h2 class="points-wrap-partners__title">' . $_REQUEST["caname"] . '</h2>
                <div class="points-wrap-partners-cards">';

            $myposts = get_posts(array(
              'numberposts' => -1,
              'category'    => $_REQUEST["region"],
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
          ?>
        </div>
      </div>
    </div>
  </section>
  <?php get_template_part('template-parts/subscription-section'); ?>
</main>
<?php get_footer(); ?>