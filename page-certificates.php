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
      <?php
      if (function_exists('yoast_breadcrumb')) {
        yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
      }
      ?>
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
            <div class="certificates-wrap-tabs-tab-card" data-target="cert1">
              <a href="#" class="certificates-wrap-tabs-tab-card-wrap">
                <img src="<?php echo get_template_directory_uri(); ?>/img/certificates/cert-1.png" alt="" class="certificates-wrap-tabs-tab-card-wrap__img">
              </a>
              <p class="certificates-wrap-tabs-tab-card__desc">Сертификат соответствия
                <br>№ НСОПБ.СН.ПР026
              </p>
            </div>
            <div class="certificates-wrap-tabs-tab-card" data-target="cert2">
              <a href="#" class="certificates-wrap-tabs-tab-card-wrap">
                <img src="<?php echo get_template_directory_uri(); ?>/img/certificates/cert-2.png" alt="" class="certificates-wrap-tabs-tab-card-wrap__img">
              </a>
              <p class="certificates-wrap-tabs-tab-card__desc">Сертификат соответствия
                <br>№ НСОПБ.СН.ПР026
              </p>
            </div>
            <div class="certificates-wrap-tabs-tab-card" data-target="cert3">
              <a href="#" class="certificates-wrap-tabs-tab-card-wrap">
                <img src="<?php echo get_template_directory_uri(); ?>/img/certificates/cert-3.png" alt="" class="certificates-wrap-tabs-tab-card-wrap__img">
              </a>
              <p class="certificates-wrap-tabs-tab-card__desc">Сертификат соответствия
                <br>№ НСОПБ.СН.ПР026
              </p>
            </div>
            <div class="certificates-wrap-tabs-tab-card" data-target="cert4">
              <a href="#" class="certificates-wrap-tabs-tab-card-wrap">
                <img src="<?php echo get_template_directory_uri(); ?>/img/certificates/cert-4.png" alt="" class="certificates-wrap-tabs-tab-card-wrap__img">
              </a>
              <p class="certificates-wrap-tabs-tab-card__desc">Сертификат соответствия
                <br>№ НСОПБ.СН.ПР026
              </p>
            </div>
            <div class="certificates-wrap-tabs-tab-card" data-target="cert5">
              <a href="#" class="certificates-wrap-tabs-tab-card-wrap">
                <img src="<?php echo get_template_directory_uri(); ?>/img/certificates/cert-1.png" alt="" class="certificates-wrap-tabs-tab-card-wrap__img">
              </a>
              <p class="certificates-wrap-tabs-tab-card__desc">Сертификат соответствия
                <br>№ НСОПБ.СН.ПР026
              </p>
            </div>
            <div class="certificates-wrap-tabs-tab-card" data-target="cert6">
              <a href="#" class="certificates-wrap-tabs-tab-card-wrap">
                <img src="<?php echo get_template_directory_uri(); ?>/img/certificates/cert-2.png" alt="" class="certificates-wrap-tabs-tab-card-wrap__img">
              </a>
              <p class="certificates-wrap-tabs-tab-card__desc">Сертификат соответствия
                <br>№ НСОПБ.СН.ПР026
              </p>
            </div>
            <div class="certificates-wrap-tabs-tab-card" data-target="cert7">
              <a href="#" class="certificates-wrap-tabs-tab-card-wrap">
                <img src="<?php echo get_template_directory_uri(); ?>/img/certificates/cert-3.png" alt="" class="certificates-wrap-tabs-tab-card-wrap__img">
              </a>
              <p class="certificates-wrap-tabs-tab-card__desc">Сертификат соответствия
                <br>№ НСОПБ.СН.ПР026
              </p>
            </div>
            <div class="certificates-wrap-tabs-tab-card" data-target="cert8">
              <a href="#" class="certificates-wrap-tabs-tab-card-wrap">
                <img src="<?php echo get_template_directory_uri(); ?>/img/certificates/cert-4.png" alt="" class="certificates-wrap-tabs-tab-card-wrap__img">
              </a>
              <p class="certificates-wrap-tabs-tab-card__desc">Сертификат соответствия
                <br>№ НСОПБ.СН.ПР026
              </p>
            </div>
            <div class="certificates-wrap-tabs-tab-card" data-target="cert9">
              <a href="#" class="certificates-wrap-tabs-tab-card-wrap">
                <img src="<?php echo get_template_directory_uri(); ?>/img/certificates/cert-1.png" alt="" class="certificates-wrap-tabs-tab-card-wrap__img">
              </a>
              <p class="certificates-wrap-tabs-tab-card__desc">Сертификат соответствия
                <br>№ НСОПБ.СН.ПР026
              </p>
            </div>
            <div class="certificates-wrap-tabs-tab-card" data-target="cert10">
              <a href="#" class="certificates-wrap-tabs-tab-card-wrap">
                <img src="<?php echo get_template_directory_uri(); ?>/img/certificates/cert-2.png" alt="" class="certificates-wrap-tabs-tab-card-wrap__img">
              </a>
              <p class="certificates-wrap-tabs-tab-card__desc">Сертификат соответствия
                <br>№ НСОПБ.СН.ПР026
              </p>
            </div>
            <div class="certificates-wrap-tabs-tab-card" data-target="cert11">
              <a href="#" class="certificates-wrap-tabs-tab-card-wrap">
                <img src="<?php echo get_template_directory_uri(); ?>/img/certificates/cert-3.png" alt="" class="certificates-wrap-tabs-tab-card-wrap__img">
              </a>
              <p class="certificates-wrap-tabs-tab-card__desc">Сертификат соответствия
                <br>№ НСОПБ.СН.ПР026
              </p>
            </div>
            <div class="certificates-wrap-tabs-tab-card" data-target="cert12">
              <a href="#" class="certificates-wrap-tabs-tab-card-wrap">
                <img src="<?php echo get_template_directory_uri(); ?>/img/certificates/cert-4.png" alt="" class="certificates-wrap-tabs-tab-card-wrap__img">
              </a>
              <p class="certificates-wrap-tabs-tab-card__desc">Сертификат соответствия
                <br>№ НСОПБ.СН.ПР026
              </p>
            </div>
            <div class="certificates-wrap-tabs-tab-card" data-target="cert13">
              <a href="#" class="certificates-wrap-tabs-tab-card-wrap">
                <img src="<?php echo get_template_directory_uri(); ?>/img/certificates/cert-1.png" alt="" class="certificates-wrap-tabs-tab-card-wrap__img">
              </a>
              <p class="certificates-wrap-tabs-tab-card__desc">Сертификат соответствия
                <br>№ НСОПБ.СН.ПР026
              </p>
            </div>
            <div class="certificates-wrap-tabs-tab-card" data-target="cert14">
              <a href="#" class="certificates-wrap-tabs-tab-card-wrap">
                <img src="<?php echo get_template_directory_uri(); ?>/img/certificates/cert-2.png" alt="" class="certificates-wrap-tabs-tab-card-wrap__img">
              </a>
              <p class="certificates-wrap-tabs-tab-card__desc">Сертификат соответствия
                <br>№ НСОПБ.СН.ПР026
              </p>
            </div>
            <div class="certificates-wrap-tabs-tab-card" data-target="cert15">
              <a href="#" class="certificates-wrap-tabs-tab-card-wrap">
                <img src="<?php echo get_template_directory_uri(); ?>/img/certificates/cert-3.png" alt="" class="certificates-wrap-tabs-tab-card-wrap__img">
              </a>
              <p class="certificates-wrap-tabs-tab-card__desc">Сертификат соответствия
                <br>№ НСОПБ.СН.ПР026
              </p>
            </div>
          </div>
          <div class="certificates-wrap-tabs-tab" data-target="2">
            <div class="certificates-wrap-tabs-tab-card" data-target="cert3">
              <a href="#" class="certificates-wrap-tabs-tab-card-wrap">
                <img src="<?php echo get_template_directory_uri(); ?>/img/certificates/cert-3.png" alt="" class="certificates-wrap-tabs-tab-card-wrap__img">
              </a>
              <p class="certificates-wrap-tabs-tab-card__desc">Сертификат соответствия
                <br>№ НСОПБ.СН.ПР026
              </p>
            </div>
            <div class="certificates-wrap-tabs-tab-card" data-target="cert1">
              <a href="#" class="certificates-wrap-tabs-tab-card-wrap">
                <img src="<?php echo get_template_directory_uri(); ?>/img/certificates/cert-1.png" alt="" class="certificates-wrap-tabs-tab-card-wrap__img">
              </a>
              <p class="certificates-wrap-tabs-tab-card__desc">Сертификат соответствия
                <br>№ НСОПБ.СН.ПР026
              </p>
            </div>
            <div class="certificates-wrap-tabs-tab-card" data-target="cert2">
              <a href="#" class="certificates-wrap-tabs-tab-card-wrap">
                <img src="<?php echo get_template_directory_uri(); ?>/img/certificates/cert-2.png" alt="" class="certificates-wrap-tabs-tab-card-wrap__img">
              </a>
              <p class="certificates-wrap-tabs-tab-card__desc">Сертификат соответствия
                <br>№ НСОПБ.СН.ПР026
              </p>
            </div>
            <div class="certificates-wrap-tabs-tab-card" data-target="cert4">
              <a href="#" class="certificates-wrap-tabs-tab-card-wrap">
                <img src="<?php echo get_template_directory_uri(); ?>/img/certificates/cert-4.png" alt="" class="certificates-wrap-tabs-tab-card-wrap__img">
              </a>
              <p class="certificates-wrap-tabs-tab-card__desc">Сертификат соответствия
                <br>№ НСОПБ.СН.ПР026
              </p>
            </div>
            <div class="certificates-wrap-tabs-tab-card" data-target="cert5">
              <a href="#" class="certificates-wrap-tabs-tab-card-wrap">
                <img src="<?php echo get_template_directory_uri(); ?>/img/certificates/cert-1.png" alt="" class="certificates-wrap-tabs-tab-card-wrap__img">
              </a>
              <p class="certificates-wrap-tabs-tab-card__desc">Сертификат соответствия
                <br>№ НСОПБ.СН.ПР026
              </p>
            </div>
            <div class="certificates-wrap-tabs-tab-card" data-target="cert6">
              <a href="#" class="certificates-wrap-tabs-tab-card-wrap">
                <img src="<?php echo get_template_directory_uri(); ?>/img/certificates/cert-2.png" alt="" class="certificates-wrap-tabs-tab-card-wrap__img">
              </a>
              <p class="certificates-wrap-tabs-tab-card__desc">Сертификат соответствия
                <br>№ НСОПБ.СН.ПР026
              </p>
            </div>
            <div class="certificates-wrap-tabs-tab-card" data-target="cert7">
              <a href="#" class="certificates-wrap-tabs-tab-card-wrap">
                <img src="<?php echo get_template_directory_uri(); ?>/img/certificates/cert-3.png" alt="" class="certificates-wrap-tabs-tab-card-wrap__img">
              </a>
              <p class="certificates-wrap-tabs-tab-card__desc">Сертификат соответствия
                <br>№ НСОПБ.СН.ПР026
              </p>
            </div>
            <div class="certificates-wrap-tabs-tab-card" data-target="cert8">
              <a href="#" class="certificates-wrap-tabs-tab-card-wrap">
                <img src="<?php echo get_template_directory_uri(); ?>/img/certificates/cert-4.png" alt="" class="certificates-wrap-tabs-tab-card-wrap__img">
              </a>
              <p class="certificates-wrap-tabs-tab-card__desc">Сертификат соответствия
                <br>№ НСОПБ.СН.ПР026
              </p>
            </div>
            <div class="certificates-wrap-tabs-tab-card" data-target="cert9">
              <a href="#" class="certificates-wrap-tabs-tab-card-wrap">
                <img src="<?php echo get_template_directory_uri(); ?>/img/certificates/cert-1.png" alt="" class="certificates-wrap-tabs-tab-card-wrap__img">
              </a>
              <p class="certificates-wrap-tabs-tab-card__desc">Сертификат соответствия
                <br>№ НСОПБ.СН.ПР026
              </p>
            </div>
            <div class="certificates-wrap-tabs-tab-card" data-target="cert10">
              <a href="#" class="certificates-wrap-tabs-tab-card-wrap">
                <img src="<?php echo get_template_directory_uri(); ?>/img/certificates/cert-2.png" alt="" class="certificates-wrap-tabs-tab-card-wrap__img">
              </a>
              <p class="certificates-wrap-tabs-tab-card__desc">Сертификат соответствия
                <br>№ НСОПБ.СН.ПР026
              </p>
            </div>
            <div class="certificates-wrap-tabs-tab-card" data-target="cert11">
              <a href="#" class="certificates-wrap-tabs-tab-card-wrap">
                <img src="<?php echo get_template_directory_uri(); ?>/img/certificates/cert-3.png" alt="" class="certificates-wrap-tabs-tab-card-wrap__img">
              </a>
              <p class="certificates-wrap-tabs-tab-card__desc">Сертификат соответствия
                <br>№ НСОПБ.СН.ПР026
              </p>
            </div>
            <div class="certificates-wrap-tabs-tab-card" data-target="cert12">
              <a href="#" class="certificates-wrap-tabs-tab-card-wrap">
                <img src="<?php echo get_template_directory_uri(); ?>/img/certificates/cert-4.png" alt="" class="certificates-wrap-tabs-tab-card-wrap__img">
              </a>
              <p class="certificates-wrap-tabs-tab-card__desc">Сертификат соответствия
                <br>№ НСОПБ.СН.ПР026
              </p>
            </div>
            <div class="certificates-wrap-tabs-tab-card" data-target="cert13">
              <a href="#" class="certificates-wrap-tabs-tab-card-wrap">
                <img src="<?php echo get_template_directory_uri(); ?>/img/certificates/cert-1.png" alt="" class="certificates-wrap-tabs-tab-card-wrap__img">
              </a>
              <p class="certificates-wrap-tabs-tab-card__desc">Сертификат соответствия
                <br>№ НСОПБ.СН.ПР026
              </p>
            </div>
            <div class="certificates-wrap-tabs-tab-card" data-target="cert14">
              <a href="#" class="certificates-wrap-tabs-tab-card-wrap">
                <img src="<?php echo get_template_directory_uri(); ?>/img/certificates/cert-2.png" alt="" class="certificates-wrap-tabs-tab-card-wrap__img">
              </a>
              <p class="certificates-wrap-tabs-tab-card__desc">Сертификат соответствия
                <br>№ НСОПБ.СН.ПР026
              </p>
            </div>
            <div class="certificates-wrap-tabs-tab-card" data-target="cert15">
              <a href="#" class="certificates-wrap-tabs-tab-card-wrap">
                <img src="<?php echo get_template_directory_uri(); ?>/img/certificates/cert-3.png" alt="" class="certificates-wrap-tabs-tab-card-wrap__img">
              </a>
              <p class="certificates-wrap-tabs-tab-card__desc">Сертификат соответствия
                <br>№ НСОПБ.СН.ПР026
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="certificates-article">
        <p class="certificates-article__desc">Цель и миссия компании «ДЕКО» заключается в том, чтобы создать
          комфортную световую среду для человека. Мы предоставляем комплексные решения по освещению
          объектов по всей территории России. Наша компания занимается проектированием, разработкой,
          производством, поставкой, монтажом и автоматизацией систем освещения. Каждый объект, которому
          требуется освещение, получает его на максимально качественном уровне, благодаря работе наших
          мастеров и компонентам ведущих мировых и федеральных брендов: LEDIL, CREE, Osram, ИПС Аргос и
          MeanWell.</p>
        <p class="certificates-article__desc">За плечами у компании «ДЕКО» более 3 лет опыта и более 650
          выполненных проектов. В течении этого времени, мы помогли создать освещение для многих крупных
          компаний. Например: РЖД, Норникель, Березовский угольный завод, Красноярская ТЭЦ.</p>
        <p class="certificates-article__desc">Убедитесь, что светильники отлично подходят Вашему объекту,
          закажите тестовый образец. Также, мы предоставляем безусловную гарантию 5 лет! Если в течении
          этого времени светильники выйдут из строя, мы бесплатно заменим их.</p>
      </div>
    </div>

  </section>
  <?php get_template_part('template-parts/subscription-section'); ?>
</main>

<?php get_footer(); ?>