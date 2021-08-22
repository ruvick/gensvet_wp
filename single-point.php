<?php

/*
Template Name: Шаблон точка продажи
WP Post Template: точка продажи
Template Post Type: post
*/

get_header(); ?>

<?php get_template_part('template-parts/header-section'); ?>

<main class="main">
  <section class="partner">
    <div class="container">
      <a href="<?php echo get_category_link(8); ?>" class="partner-link">
        <img src="<?php echo get_template_directory_uri(); ?>/img/points/points-arrow.svg" alt="" class="partner-link__img">
        <p class="partner-link__desc">Все точки продажи</p>
      </a>
      <div class="partner-wrap">
        <div class="partner-wrap-wrap">
          <img src="<?php $imgTm = get_the_post_thumbnail_url(get_the_ID(), "tominiatyre"); echo empty($imgTm) ? get_bloginfo("template_url") . "/img/no-photo.jpg" : $imgTm; ?>" alt="" class="partner-wrap__img">
        </div>
        <div class="partner-wrap-contacts">
          <h2 class="partner-wrap-contacts__title"><?php the_title(); ?></h2>
          <? $adr_p = carbon_get_the_post_meta("point_address");
          if (!empty($adr_p)) { ?>
            <div class="partner-wrap-contacts-addres">
              <img src="<?php echo get_template_directory_uri(); ?>/img/points/points-addres.svg" alt="" class="partner-wrap-contacts-addres__img">
              <p class="partner-wrap-contacts-addres__desc"><? echo $adr_p; ?></p>
            </div>
          <? } ?>
          <h3 class="partner-wrap-contacts__subtitle">Контакты:</h3>
          <div class="partner-wrap-contacts-links">
            <? $telp = carbon_get_the_post_meta("point_phones");
            if (!empty($telp)) { ?>
              <div class="partner-wrap-contacts-links-wrap">
                <img src="<?php echo get_template_directory_uri(); ?>/img/points/points-phone.svg" alt="" class="partner-wrap-contacts-links-wrap__img">
                <a href="tel:<? echo preg_replace('/[^0-9]/', '', $telp); ?>" class="partner-wrap-contacts-links-wrap__link partner-wrap-contacts-links-wrap__link--nondec"><? echo $telp; ?></a>
              </div>
            <? } ?>
            <? $mailp = carbon_get_the_post_meta("point_email");
            if (!empty($mailp)) { ?>
              <div class="partner-wrap-contacts-links-wrap">
                <img src="<?php echo get_template_directory_uri(); ?>/img/points/points-email.svg" alt="" class="partner-wrap-contacts-links-wrap__img">
                <a href="mailto:<? echo $mail; ?>" class="partner-wrap-contacts-links-wrap__link"><? echo $mailp; ?></a>
              </div>
            <? } ?>
            <? $website = carbon_get_the_post_meta("point_website");
            if (!empty($website)) { ?>
              <div class="partner-wrap-contacts-links-wrap">
                <img src="<?php echo get_template_directory_uri(); ?>/img/points/points-web.svg" alt="" class="partner-wrap-contacts-links-wrap__img">
                <a href="<? echo $website; ?>" class="partner-wrap-contacts-links-wrap__link"><? echo $website; ?></a>
              </div>
            <? } ?>
          </div>
        </div>
      </div>
      <div class="partner-wrap-article">
        <?php the_content(); ?>
      </div>
    </div>
  </section>
  <?php get_template_part('template-parts/subscription-section'); ?>
</main>

<?php get_footer();
