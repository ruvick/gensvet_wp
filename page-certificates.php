<?php

/*
Template Name: Страница Сертификаты
Template Post Type: page
*/

get_header(); ?>

<?php get_template_part('template-parts/header-section'); ?>

<main class="main">

  <section class="breadcrumb">
    <div class="container">
      <div class="breadcrumb-wrap">
        <?php if (function_exists('kama_breadcrumbs')) kama_breadcrumbs(); ?>
      </div>
    </div>
  </section>

  <section class="certificates">
    <div class="container">
      <h1 class="certificates__title"><?php the_title(); ?></h1>
      <div class="certificates-wrap">
        <div class="certificates-wrap-buttons">
          <button class="certificates-wrap-buttons__btn active" data-target="1">Сертификаты</button>
          <button class="certificates-wrap-buttons__btn" data-target="2">Награды</button>
        </div>
        <div class="certificates-wrap-tabs">
          <div class="certificates-wrap-tabs-tab active" data-target="1">
            <?
            $cert = carbon_get_the_post_meta('complex_certificates');
            if ($cert) {
              $certIndex = 0;
              foreach ($cert as $item) {
            ?>
                <div class="certificates-wrap-tabs-tab-card" data-target="cert1">
                  <a href="#" class="certificates-wrap-tabs-tab-card-wrap">
                    <img src="<?php echo wp_get_attachment_image_src($item['certificates_img'], 'large')[0]; ?>" alt="" class="certificates-wrap-tabs-tab-card-wrap__img">
                  </a>
                  <p class="certificates-wrap-tabs-tab-card__desc"><? echo $item['certificates_title']; ?></p>
                </div>
            <?
                $certIndex++;
              }
            }
            ?>
          </div>

          <div class="certificates-wrap-tabs-tab" data-target="2">
            <?
            $awards = carbon_get_the_post_meta('complex_awards');
            if ($awards) {
              $awardsIndex = 0;
              foreach ($awards as $item) {
            ?>
                <div class="certificates-wrap-tabs-tab-card" data-target="cert3">
                  <a href="#" class="certificates-wrap-tabs-tab-card-wrap">
                    <img src="<?php echo wp_get_attachment_image_src($item['awards_img'], 'large')[0]; ?>" alt="" class="certificates-wrap-tabs-tab-card-wrap__img">
                  </a>
                  <p class="certificates-wrap-tabs-tab-card__desc"><? echo $item['awards_title']; ?></p>
                </div>
            <?
                $awardsIndex++;
              }
            }
            ?>
          </div>

        </div>
      </div>
      <div class="certificates-article">
        <!-- <p class="certificates-article__desc"></p> -->
        <?php the_content(); ?>
      </div>
    </div>

  </section>
  <?php get_template_part('template-parts/subscription-section'); ?>
</main>

<?php get_footer(); ?>