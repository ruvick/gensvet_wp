<?php

/*
Template Name: Страница О компании
Template Post Type: page
*/

get_header(); ?>

<?php get_template_part('template-parts/header-section'); ?>

<main class="main">
  <section class="breadcrumb">
    <div class="container">
      <div class="breadcrumb-wrap">
        <ul class="breadcrumb-list">
          <li class="breadcrumb-list-item">
            <a href="" class="breadcrumb-list-item__link">Каталог</a>
          </li>
          <li class="breadcrumb-list-item">
            <a href="" class="breadcrumb-list-item__link">О компании</a>
          </li>
        </ul>
      </div>
    </div>
  </section>
  <section class="company">
    <div class="container">
      <h1 class="company__title"><?php the_title(); ?></h1>
      <p class="company__desc">Производство световых решений – важная и ответственная сфера. Здесь создаются
        не только продукты, но атмосфера и благоприятная среда, которую они приносят при использовании. Мы
        стремимся, чтобы вся продукция была удобна в эксплуатации, выполнена с учетом индивидуальных
        особенностей и гарантировано имела долгий срок службы.</p>
      <div class="company-wrap">
        <div class="company-wrap-card">
          <img src="<?php echo get_template_directory_uri(); ?>/img/about/company-1.png" alt="" class="company-wrap-card__img">
          <p class="company-wrap-card__desc">Такие светодиодные светильники и комплектующие к ним
            выпускает Торгово-производственная компания «ДЕКО».<br><br>
            Освещение – многофункциональная и комплексная задача, поэтому мы производим как готовые
            светильники, так и комплектующие к ним. Наши заводы находятся на территориях Российской
            Федерации и Китая, а продукция торговых марок: ГЕНСВЕТ и DEKOlabs реализуются не только на
            территории России, но и в странах Ближнего Зарубежья.<br><br>
            Нам важно качество, выпускаемых товаров и комплектующих именно поэтому в компании существует
            слаженный производственный цикл.</p>
        </div>
        <div class="company-wrap-card">
          <p class="company-wrap-card__desc">Все начинается с идеи. В этой точке мы спрашиваем клиентов:
            что важно для них при выборе световых решений? Какие моменты в дальнейшей эксплуатации стоит
            учесть? И только после этого разрабатываем тестовый образец.<br><br>
            Когда он пройдет лабораторные испытания, и будут получены все необходимые разрешительные
            документы, светильник будет запущен в массовое производство.</p>
          <img src="<?php echo get_template_directory_uri(); ?>/img/about/company-2.png" alt="" class="company-wrap-card__img">
        </div>
        <div class="company-wrap-card">
          <img src="<?php echo get_template_directory_uri(); ?>/img/about/company-3.png" alt="" class="company-wrap-card__img">
          <p class="company-wrap-card__desc">Производственный цикл построен так, что на каждом этапе
            изделие проходит контроль специалистами ОТК, каждое изделие проверяется на соответствие
            заявленным характеристикам и выпускается строго по технологическим картам.<br><br>
            Благодаря такому подходу продукция Торговых марок ГЕНСВЕТ и DEKOlabs отвечает требованиям
            технических условий, проектно-конструкторской и технологической документации, включая ГОСТы,
            а так же заявленным характеристикам и нормативам рынка светотехники.</p>
        </div>
      </div>
      <p class="company__tagline">Каждый светильник, выпущенный ТПК «ДЕКО» максимально качественный,<br> что
        достигается за счет синергии экспертного уровня наших сотрудников и<br> осознанного выбора сырья и
        материалов для его производства от ведущих<br> мировых и федеральных брендов.</p>
    </div>
  </section>
  <section class="why">
    <div class="container">
      <h2 class="why__title">Почему выбирают нас?</h2>
      <p class="why__desc">Наша компания опирается на ряд основополагающих принципов, которые как мозаика
        встроены в каждый элемент нашей структуры и помогают клиентам выбирать функциональную, безопасную и
        доступную по цене светодиодную продукцию:</p>
      <div class="why-wrap">
        <div class="why-wrap-card">
          <h3 class="why-wrap-card__title">Качество</h3>
          <p class="why-wrap-card__desc">Мы разрабатываем удобные, функциональные продукты, используя
            комплектующие и сырье проверенных поставщиков, а также современное производственное
            оборудование. Каждая деталь продуктовых линеек подбирается с учетом будущих условий монтажа
            и дальнейшей эксплуатации, проверяется на всех этапах выпуска и имеет возможность
            постгарантийного обслуживания</p>
        </div>
        <div class="why-wrap-card">
          <h3 class="why-wrap-card__title">Клиентоориен<br>тированность</h3>
          <p class="why-wrap-card__desc">Мы слышим наших клиентов. Продукты компании создаются с учётом
            индивидуальных задач заказчика. Гибкая система производства позволят выпускать светильники и
            комплектующие к ним любыми партиями с соблюдением необходимых сроков</p>
        </div>
        <div class="why-wrap-card">
          <h3 class="why-wrap-card__title">Масштабность</h3>
          <p class="why-wrap-card__desc">Нашу продукцию можно приобрести на всей территории Российской
            Федерации и в некоторых городах Республики Казахстан. Торговые сети дилеров удобно
            расположены, а персонал имеет необходимую квалификацию для грамотной поддержки покупателей
          </p>
        </div>
        <div class="why-wrap-card">
          <h3 class="why-wrap-card__title">Постоянное развитие</h3>
          <p class="why-wrap-card__desc">Мы изучаем новые технологии и инновационные продукты, внедряем на
            производстве лучшие практики, инструменты бережливого производства, Soft skills и Agile, а
            иногда изобретаем их сами, полагаясь на опыт, знания и умения наших экспертов</p>
        </div>
        <div class="why-wrap-card">
          <h3 class="why-wrap-card__title">Надежность</h3>
          <p class="why-wrap-card__desc">Мы делаем так, чтобы каждый этап взаимодействия соответствовал
            этому принципу, начиная от качества продукции до требуемых сроков поставок.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="content">
    <div class="container">
      <?php the_content(); ?>
    </div>
  </section>

  <section class="banners">
    <div class="container">
      <div class="banners-wrap">
        <div class="banners-wrap-card">
          <a href="" class="banners-wrap-card-link">
            <h2 class="banners-wrap-card-link__title">Продукция<br> генсвет</h2>
            <img src="<?php echo get_template_directory_uri(); ?>/img/about/banners-bg-1.svg" alt="" class="banners-wrap-card-link__bg">
            <img src="<?php echo get_template_directory_uri(); ?>/img/about/banners-1.png" alt="" class="banners-wrap-card-link__img">
          </a>
        </div>
        <div class="banners-wrap-card">
          <a href="" class="banners-wrap-card-link">
            <h2 class="banners-wrap-card-link__title">Продукция<br>dekolabs</h2>
            <img src="<?php echo get_template_directory_uri(); ?>/img/about/banners-bg-2.svg" alt="" class="banners-wrap-card-link__bg">
            <img src="<?php echo get_template_directory_uri(); ?>/img/about/banners-2.png" alt="" class="banners-wrap-card-link__img">
          </a>
        </div>
        <div class="banners-wrap-card">
          <a href="" class="banners-wrap-card-link">
            <h2 class="banners-wrap-card-link__title">Точки<br> продажи</h2>
            <img src="<?php echo get_template_directory_uri(); ?>/img/about/banners-bg.svg" alt="" class="banners-wrap-card-link__bg">
            <img src="<?php echo get_template_directory_uri(); ?>/img/about/banners-3.svg" alt="" class="banners-wrap-card-link__img">
          </a>
        </div>
      </div>
    </div>
  </section>
  <?php get_template_part('template-parts/subscription-section'); ?>
</main>

<?php get_footer(); ?>