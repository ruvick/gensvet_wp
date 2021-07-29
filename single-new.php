<?php

/*
Template Name: Шаблон записи новости
WP Post Template: записи новости
Template Post Type: post
*/

get_header(); ?>

<?php get_template_part('template-parts/header-section'); ?>

<main class="main">
  <section class="article">
    <div class="container">
      <a href="<?php echo get_category_link(4); ?>" class="partner-link">
        <img src="<?php echo get_template_directory_uri(); ?>/img/points/points-arrow.svg" alt="" class="partner-link__img">
        <p class="partner-link__desc">Все новости</p>
      </a>
      <h1 class="article__title"><?php the_title(); ?></h1>
      <p class="article__date"><?php the_date('j F Y'); ?></p>
      <div class="article-wrap">
        <img src="<?php $imgTm = get_the_post_thumbnail_url(get_the_ID(), "tominiatyre");
                  echo empty($imgTm) ? get_bloginfo("template_url") . "/img/no-photo.jpg" : $imgTm; ?>" alt="" class="article-wrap__img">
        <p class="article-wrap__desc">
          <?php the_content(); ?>
        </p>
      </div>
    </div>
  </section>

  <?php get_template_part('template-parts/subscription-section'); ?>

</main>

<?php get_footer();
