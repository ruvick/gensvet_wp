<?php

/*
Template Name: Шаблон карточки товаров
WP Post Template: Шаблон карточки товаров
Template Post Type: post
*/

get_header(); ?>

<?php get_template_part('template-parts/header-section'); ?>

<main onload="printit()" class="main">
  <section class="breadcrumb">
    <div class="container">
      <div class="breadcrumb-wrap">
        <?php
        if (function_exists('yoast_breadcrumb')) {
          yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
        }
        ?>
      </div>
    </div>
  </section>
  <section class="card">
    <div class="container">
      <h1 class="card__title"><?php the_title(); ?></h1>
      <div class="card-wrap">
        <div class="card-wrap-img">
          <img src="<?php $imgTm = get_the_post_thumbnail_url(get_the_ID(), "tominiatyre");
                    echo empty($imgTm) ? get_bloginfo("template_url") . "/img/no-photo.jpg" : $imgTm; ?>" alt="" class="card-wrap-img__img">
          <?
          $sticker = carbon_get_post_meta(get_the_ID(), "offer_sticker");
          if (!empty($sticker)) { ?>
            <p class="card-wrap-img__teg"><? echo $sticker; ?></p>
          <? } ?>
        </div>
        <div class="card-wrap-properties">
          <h3 class="card-wrap-properties__title">выберите свойства</h3>
          <div class="card-wrap-properties-features">
            <p class="card-wrap-properties-features__desc">Мощность</p>
            <!-- <select name="" id="" class="card-wrap-properties-features-select">
                                <option value="" class="card-wrap-properties-features-select__opt">36 Вт</option>
                                <option value="" class="card-wrap-properties-features-select__opt">24 Вт</option>
                                <option value="" class="card-wrap-properties-features-select__opt">36 Вт</option>
                                <option value="" class="card-wrap-properties-features-select__opt">42 Вт</option>
                                <option value="" class="card-wrap-properties-features-select__opt">45 Вт</option>
                                <option value="" class="card-wrap-properties-features-select__opt">48 Вт</option>
                                <option value="" class="card-wrap-properties-features-select__opt">54 Вт</option>
                                <option value="" class="card-wrap-properties-features-select__opt">60 Вт</option>
                                <option value="" class="card-wrap-properties-features-select__opt">63 Вт</option>
                                <option value="" class="card-wrap-properties-features-select__opt">66 Вт</option>
                                <option value="" class="card-wrap-properties-features-select__opt">72 Вт</option>
                                <option value="" class="card-wrap-properties-features-select__opt">81 Вт</option>
                                <option value="" class="card-wrap-properties-features-select__opt">90 Вт</option>
                                <option value="" class="card-wrap-properties-features-select__opt">108 Вт</option>
                                <option value="" class="card-wrap-properties-features-select__opt">150 Вт</option>
                            </select> -->
            <div class="dropdown">
              <button class="dropdown__button">36 Bm</button>
              <ul class="dropdown-list">
                <? $power = carbon_get_the_post_meta('offer_power_complex');
                if ($power) {
                  $powerIndex = 0;
                  foreach ($power as $item) {
                ?>
                    <li class="dropdown-list__item" data-value="first"><? echo $item['offer_power_denomination']; ?> Bm</li>
                <?
                    $powerIndex++;
                  }
                }
                ?>
              </ul>
              <input type="text" class="dropdown__input" value="">
            </div>
          </div>
          <div class="card-wrap-properties-features">
            <p class="card-wrap-properties-features__desc">Световой поток</p>
            <div class="dropdown">
              <button class="dropdown__button">Световой поток</button>
              <ul class="dropdown-list">
                <? $light_flow = carbon_get_the_post_meta('light_flow_complex');
                if ($light_flow) {
                  $light_flowIndex = 0;
                  foreach ($light_flow as $item) {
                ?>
                    <li class="dropdown-list__item" data-value="first"><? echo $item['light_flow_denomination']; ?> Лм</li>
                <?
                    $light_flowIndex++;
                  }
                }
                ?>
              </ul>
              <input type="text" class="dropdown__input" value="">
            </div>
          </div>
          <div class="card-wrap-properties-features">
            <p class="card-wrap-properties-features__desc">Цветовая температура</p>
            <div class="dropdown">
              <button class="dropdown__button">Цветовая температура</button>
              <ul class="dropdown-list">
                <? $colour_temp = carbon_get_the_post_meta('colour_temp_complex');
                if ($colour_temp) {
                  $colour_tempIndex = 0;
                  foreach ($colour_temp as $item) {
                ?>
                    <li class="dropdown-list__item" data-value="first"><? echo $item['colour_temp_denomination']; ?> К</li>
                <?
                    $colour_tempIndex++;
                  }
                }
                ?>
              </ul>
              <input type="text" class="dropdown__input" value="">
            </div>
          </div>
          <div class="card-wrap-properties-features">
            <p class="card-wrap-properties-features__desc">Рассеиватель</p>
            <div class="dropdown">
              <button class="dropdown__button">Выберите рассеиватель</button>
              <ul class="dropdown-list">
                <? $diffuser = carbon_get_the_post_meta('diffuser_complex');
                if ($diffuser) {
                  $diffuserIndex = 0;
                  foreach ($diffuser as $item) {
                ?>
                    <li class="dropdown-list__item" data-value="first"><? echo $item['diffuser_denomination']; ?> К</li>
                <?
                    $diffuserIndex++;
                  }
                }
                ?>
              </ul>
              <input type="text" class="dropdown__input" value="">
            </div>
          </div>

          <h3 class="card-wrap-properties__title">Выберите драйвер</h3>
          <div class="card-wrap-properties-features">
            <div class="dropdown dropdown--long">
              <button class="dropdown__button">Драйвер универсальный 12-36Вт для светильников ГЕНСВЕТ</button>
              <ul class="dropdown-list">
                <? $driver = carbon_get_the_post_meta('driver_complex');
                if ($driver) {
                  $driverIndex = 0;
                  foreach ($driver as $item) {
                ?>
                    <li class="dropdown-list__item" data-value="first"><? echo $item['driver_denomination']; ?></li>
                <?
                    $driverIndex++;
                  }
                }
                ?>
              </ul>
              <input type="text" class="dropdown__input" value="">
            </div>
          </div>
          <div class="card-wrap-properties-links">
            <?php $certificate = carbon_get_post_meta($post->ID, 'download_certificate');
            if (!empty($certificate)) : ?>
              <?php foreach ($certificate as $item) : ?>
                <?php if (!empty($item['checkbox_certificate'])) {
                  printf('<a href="%s" download class="card-wrap-properties-links-link">
                          <img src="' . get_template_directory_uri() . '/img/product-card/card-pdf.svg" alt="" class="card-wrap-properties-links-link__img">
                          <p class="card-wrap-properties-links-link__desc">Скачать сертификат (PDF)</p>
                        </a>', $item['file_certificate']);
                } else {
                  echo '<a href="' . $item['link_certificate'] . '" class="card-wrap-properties-links-link">
                          <img src="' . get_template_directory_uri() . '/img/product-card/card-pdf.svg" alt="" class="card-wrap-properties-links-link__img">
                          <p class="card-wrap-properties-links-link__desc">Скачать сертификат (PDF)</p>
                        </a>';
                }
                ?>
              <?php endforeach; ?>
            <?php endif; ?>
            <?php $passport = carbon_get_post_meta($post->ID, 'download_passport');
            if (!empty($passport)) : ?>
              <?php foreach ($passport as $item) : ?>
                <?php if (!empty($item['checkbox_passport'])) {
                  printf('<a href="%s" download class="card-wrap-properties-links-link">
                          <img src="' . get_template_directory_uri() . '/img/product-card/card-pdf.svg" alt="" class="card-wrap-properties-links-link__img">
                          <p class="card-wrap-properties-links-link__desc">Скачать паспорт (PDF)</p>
                        </a>', $item['file_passport']);
                } else {
                  echo '<a href="' . $item['link_passport'] . '" class="card-wrap-properties-links-link">
                          <img src="' . get_template_directory_uri() . '/img/product-card/card-pdf.svg" alt="" class="card-wrap-properties-links-link__img">
                          <p class="card-wrap-properties-links-link__desc">Скачать паспорт (PDF)</p>
                        </a>';
                }
                ?>
              <?php endforeach; ?>
            <?php endif; ?>
            <a href="" class="card-wrap-properties-links-link">
              <img src="<?php echo get_template_directory_uri(); ?>/img/product-card/card-pdf.svg" alt="" class="card-wrap-properties-links-link__img">
              <p class="card-wrap-properties-links-link__desc">Скачать страницу в PDF</p>
            </a>
            <a href="#" class="card-wrap-properties-links-link" onclick="printit()">
              <img src="<?php echo get_template_directory_uri(); ?>/img/product-card/card-print.svg" alt="" class="card-wrap-properties-links-link__img">
              <p class="card-wrap-properties-links-link__desc">Распечатать страницу</p>
            </a>
          </div>
          <a href="<? echo carbon_get_post_meta(get_the_ID(), "consultation_link"); ?>" target="_blank" class="card-wrap-properties-btn">
            <img src="<?php echo get_template_directory_uri(); ?>/img/product-card/card-wsapp.svg" alt="" class="card-wrap-properties-btn__img">
            <p class="card-wrap-properties-btn__desc">получить консультацию</p>
          </a>
          <p class="card-wrap-properties__desc--hidden">Специалисты отвечают в ПН-ПТ с 09:00 до 17:00</p>
          <a href="<?php echo get_category_link(8); ?>" class="card-wrap-properties-link">
            <img src="<?php echo get_template_directory_uri(); ?>/img/product-card/card-location.svg" alt="" class="card-wrap-properties-link__img">
            <p class="card-wrap-properties-link__desc">точки продажи</p>
          </a>
          <p class="card-wrap-properties__desc">Специалисты отвечают в ПН-ПТ с 09:00 до 17:00</p>
        </div>
      </div>
      <div class="card-tabs">
        <div class="card-tabs-buttons">
          <button class="card-tabs-buttons__btn active" data-target="1">Характеристики светильника</button>
          <button class="card-tabs-buttons__btn" data-target="2">Характеристики драйвера</button>
          <button class="card-tabs-buttons__btn" data-target="3">описание</button>
        </div>
        <div class="card-tabs-wrap">
          <div class="card-tabs-wrap-features active" data-target="1">
            <div class="card-tabs-wrap-features-wrap">
              <div class="card-tabs-wrap-features-wrap-column">

                <div class="card-tabs-wrap-features-wrap-column-table">
                  <? $tab = carbon_get_the_post_meta('offer_cherecter_light');
                  if ($tab) {
                    $tabIndex = 0;
                    foreach ($tab as $tabs) {
                  ?>
                      <div class="card-tabs-wrap-features-wrap-column-table-row">
                        <div class="card-tabs-wrap-features-wrap-column-table-row-cell">
                          <p class="card-tabs-wrap-features-wrap-column-table-row-cell__desc"><? echo $tabs['tab_name_light']; ?></p>
                        </div>
                        <div class="card-tabs-wrap-features-wrap-column-table-row-cell">
                          <p class="card-tabs-wrap-features-wrap-column-table-row-cell__desc"><? echo $tabs['tab_val_light']; ?>
                          </p>
                        </div>
                      </div>
                  <?
                      $tabIndex++;
                    }
                  }
                  ?>
                </div>
              </div>
              <div class="card-tabs-wrap-features-wrap-column">
                <div class="card-tabs-wrap-features-wrap-column-table">
                  <? $tabr = carbon_get_the_post_meta('offer_cherecter_light-r');
                  if ($tabr) {
                    $tabrIndex = 0;
                    foreach ($tabr as $tabs) {
                  ?>
                      <div class="card-tabs-wrap-features-wrap-column-table-row">
                        <div class="card-tabs-wrap-features-wrap-column-table-row-cell">
                          <p class="card-tabs-wrap-features-wrap-column-table-row-cell__desc"><? echo $tabs['tab_name_light-r']; ?></p>
                        </div>
                        <div class="card-tabs-wrap-features-wrap-column-table-row-cell">
                          <p class="card-tabs-wrap-features-wrap-column-table-row-cell__desc"><? echo $tabs['tab_val_light-r']; ?>
                          </p>
                        </div>
                      </div>
                  <?
                      $tabrIndex++;
                    }
                  }
                  ?>
                </div>
              </div>
            </div>
          </div>
          <div class="card-tabs-wrap-features" data-target="2">
            <div class="card-tabs-wrap-features-wrap">
              <div class="card-tabs-wrap-features-wrap-column">
                <div class="card-tabs-wrap-features-wrap-column-table">
                  <? $tabdr = carbon_get_the_post_meta('offer_cherecter_driver');
                  if ($tabdr) {
                    $$tabdrIndex = 0;
                    foreach ($tabdr as $tabs) {
                  ?>
                      <div class="card-tabs-wrap-features-wrap-column-table-row">
                        <div class="card-tabs-wrap-features-wrap-column-table-row-cell">
                          <p class="card-tabs-wrap-features-wrap-column-table-row-cell__desc"><? echo $tabs['tab_name_driver']; ?></p>
                        </div>
                        <div class="card-tabs-wrap-features-wrap-column-table-row-cell">
                          <p class="card-tabs-wrap-features-wrap-column-table-row-cell__desc"><? echo $tabs['tab_val_driver']; ?></p>
                        </div>
                      </div>
                  <?
                      $tabdrIndex++;
                    }
                  }
                  ?>
                </div>
              </div>
              <div class="card-tabs-wrap-features-wrap-column">
                <div class="card-tabs-wrap-features-wrap-column-table">
                  <? $tabdrr = carbon_get_the_post_meta('offer_cherecter_driver-r');
                  if ($tabdrr) {
                    $$tabdrrIndex = 0;
                    foreach ($tabdrr as $tabs) {
                  ?>
                      <div class="card-tabs-wrap-features-wrap-column-table-row">
                        <div class="card-tabs-wrap-features-wrap-column-table-row-cell">
                          <p class="card-tabs-wrap-features-wrap-column-table-row-cell__desc"><? echo $tabs['tab_name_driver-r']; ?></p>
                        </div>
                        <div class="card-tabs-wrap-features-wrap-column-table-row-cell">
                          <p class="card-tabs-wrap-features-wrap-column-table-row-cell__desc"><? echo $tabs['tab_val_driver-r']; ?></p>
                        </div>
                      </div>
                  <?
                      $tabdrrIndex++;
                    }
                  }
                  ?>
                </div>
              </div>
            </div>
          </div>
          <div class="card-tabs-wrap-features" data-target="3">
            <?php the_content(); ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php get_template_part('template-parts/subscription-section'); ?>

</main>

<?php get_footer();
