<?php

/*
Template Name: Шаблон карточки товаров
WP Post Template: Шаблон карточки товаров
Template Post Type: post
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
            <a href="" class="breadcrumb-list-item__link">Продукция ГЕНСВЕТ</a>
          </li>
          <li class="breadcrumb-list-item">
            <a href="" class="breadcrumb-list-item__link">Коммерческое и офисное освещение (IP40)</a>
          </li>
          <li class="breadcrumb-list-item">
            <a href="" class="breadcrumb-list-item__link">600х600 (Армстронг)</a>
          </li>
          <li class="breadcrumb-list-item">
            <a href="" class="breadcrumb-list-item__link">Светодиодный светильник ГСО-ПРЕМИУМ-595 36Вт</a>
          </li>
        </ul>
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
          <p class="card-wrap-img__teg">новинка</p>
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
                <li class="dropdown-list__item" data-value="first">24 Bm</li>
                <li class="dropdown-list__item" data-value="first">36 Bm</li>
                <li class="dropdown-list__item" data-value="first">42 Bm</li>
                <li class="dropdown-list__item" data-value="first">45 Bm</li>
                <li class="dropdown-list__item" data-value="first">48 Bm</li>
                <li class="dropdown-list__item" data-value="first">54 Bm</li>
                <li class="dropdown-list__item" data-value="first">60 Bm</li>
                <li class="dropdown-list__item" data-value="first">63 Bm</li>
                <li class="dropdown-list__item" data-value="first">66 Bm</li>
                <li class="dropdown-list__item" data-value="first">72 Bm</li>
                <li class="dropdown-list__item" data-value="first">81 Bm</li>
                <li class="dropdown-list__item" data-value="first">90 Bm</li>
                <li class="dropdown-list__item" data-value="first">108 Bm</li>
                <li class="dropdown-list__item" data-value="first">150 Bm</li>

              </ul>
              <input type="text" class="dropdown__input" value="">
            </div>
          </div>
          <div class="card-wrap-properties-features">
            <p class="card-wrap-properties-features__desc">Световой поток</p>
            <div class="dropdown">
              <button class="dropdown__button">Световой поток</button>
              <ul class="dropdown-list">
                <li class="dropdown-list__item" data-value="first">3600 Лм</li>
                <li class="dropdown-list__item" data-value="first">4000 Лм</li>
                <li class="dropdown-list__item" data-value="first">4800 Лм</li>
              </ul>
              <input type="text" class="dropdown__input" value="">
            </div>
          </div>
          <div class="card-wrap-properties-features">
            <p class="card-wrap-properties-features__desc">Цветовая температура</p>
            <div class="dropdown">
              <button class="dropdown__button">Цветовая температура</button>
              <ul class="dropdown-list">
                <li class="dropdown-list__item" data-value="first">2100 К</li>
                <li class="dropdown-list__item" data-value="first">3000 К</li>
                <li class="dropdown-list__item" data-value="first">4000 К</li>
                <li class="dropdown-list__item" data-value="first">5700 К</li>
              </ul>
              <input type="text" class="dropdown__input" value="">
            </div>
          </div>
          <div class="card-wrap-properties-features">
            <p class="card-wrap-properties-features__desc">Рассеиватель</p>
            <div class="dropdown">
              <button class="dropdown__button">Выберите рассеиватель</button>
              <ul class="dropdown-list">
                <li class="dropdown-list__item" data-value="first">опал</li>
                <li class="dropdown-list__item" data-value="first">матовый</li>
                <li class="dropdown-list__item" data-value="first">прозрачный</li>
                <li class="dropdown-list__item" data-value="first">призма</li>
                <li class="dropdown-list__item" data-value="first">микропризма</li>
              </ul>
              <input type="text" class="dropdown__input" value="">
            </div>
          </div>

          <h3 class="card-wrap-properties__title">Выберите драйвер</h3>
          <div class="card-wrap-properties-features">
            <div class="dropdown dropdown--long">
              <button class="dropdown__button">Драйвер универсальный 12-36Вт для светильников ГЕНСВЕТ</button>
              <ul class="dropdown-list">
                <li class="dropdown-list__item" data-value="first">Драйвер универсальный 12-36Вт для светильников ГЕНСВЕТ</li>
              </ul>
              <input type="text" class="dropdown__input" value="">
            </div>
          </div>
          <div class="card-wrap-properties-links">
            <a href="" class="card-wrap-properties-links-link">
              <img src="./img/product-card/card-pdf.svg" alt="" class="card-wrap-properties-links-link__img">
              <p class="card-wrap-properties-links-link__desc">Скачать сертификат (PDF)</p>
            </a>
            <a href="" class="card-wrap-properties-links-link">
              <img src="./img/product-card/card-pdf.svg" alt="" class="card-wrap-properties-links-link__img">
              <p class="card-wrap-properties-links-link__desc">Скачать паспорт (PDF)</p>
            </a>
            <a href="" class="card-wrap-properties-links-link">
              <img src="./img/product-card/card-pdf.svg" alt="" class="card-wrap-properties-links-link__img">
              <p class="card-wrap-properties-links-link__desc">Скачать страницу в PDF</p>
            </a>
            <a href="" class="card-wrap-properties-links-link">
              <img src="./img/product-card/card-print.svg" alt="" class="card-wrap-properties-links-link__img">
              <p class="card-wrap-properties-links-link__desc">Распечатать страницу</p>
            </a>
          </div>
          <button class="card-wrap-properties-btn">
            <img src="./img/product-card/card-wsapp.svg" alt="" class="card-wrap-properties-btn__img">
            <p class="card-wrap-properties-btn__desc">получить консультацию</p>
          </button>
          <p class="card-wrap-properties__desc--hidden">Специалисты отвечают в ПН-ПТ с 09:00 до 17:00</p>
          <a href="" class="card-wrap-properties-link">
            <img src="./img/product-card/card-location.svg" alt="" class="card-wrap-properties-link__img">
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
                  <div class="card-tabs-wrap-features-wrap-column-table-row">
                    <div class="card-tabs-wrap-features-wrap-column-table-row-cell">
                      <p class="card-tabs-wrap-features-wrap-column-table-row-cell__desc">Артикул</p>
                    </div>
                    <div class="card-tabs-wrap-features-wrap-column-table-row-cell">
                      <p class="card-tabs-wrap-features-wrap-column-table-row-cell__desc">ГСО-1322
                      </p>
                    </div>
                  </div>
                  <div class="card-tabs-wrap-features-wrap-column-table-row">
                    <div class="card-tabs-wrap-features-wrap-column-table-row-cell">
                      <p class="card-tabs-wrap-features-wrap-column-table-row-cell__desc">Габаритные размеры</p>
                    </div>
                    <div class="card-tabs-wrap-features-wrap-column-table-row-cell">
                      <p class="card-tabs-wrap-features-wrap-column-table-row-cell__desc">595×595×40 мм</p>
                    </div>
                  </div>
                  <div class="card-tabs-wrap-features-wrap-column-table-row">
                    <div class="card-tabs-wrap-features-wrap-column-table-row-cell">
                      <p class="card-tabs-wrap-features-wrap-column-table-row-cell__desc">Мощность</p>
                    </div>
                    <div class="card-tabs-wrap-features-wrap-column-table-row-cell">
                      <p class="card-tabs-wrap-features-wrap-column-table-row-cell__desc">36 Вт</p>
                    </div>
                  </div>
                  <div class="card-tabs-wrap-features-wrap-column-table-row">
                    <div class="card-tabs-wrap-features-wrap-column-table-row-cell">
                      <p class="card-tabs-wrap-features-wrap-column-table-row-cell__desc">Световой поток после рассеивателя</p>
                    </div>
                    <div class="card-tabs-wrap-features-wrap-column-table-row-cell">
                      <p class="card-tabs-wrap-features-wrap-column-table-row-cell__desc">4000 Лм</p>
                    </div>
                  </div>
                  <div class="card-tabs-wrap-features-wrap-column-table-row">
                    <div class="card-tabs-wrap-features-wrap-column-table-row-cell">
                      <p class="card-tabs-wrap-features-wrap-column-table-row-cell__desc">Цветовая температура</p>
                    </div>
                    <div class="card-tabs-wrap-features-wrap-column-table-row-cell">
                      <p class="card-tabs-wrap-features-wrap-column-table-row-cell__desc">4000 К</p>
                    </div>
                  </div>
                  <div class="card-tabs-wrap-features-wrap-column-table-row">
                    <div class="card-tabs-wrap-features-wrap-column-table-row-cell">
                      <p class="card-tabs-wrap-features-wrap-column-table-row-cell__desc">Материал корпуса</p>
                    </div>
                    <div class="card-tabs-wrap-features-wrap-column-table-row-cell">
                      <p class="card-tabs-wrap-features-wrap-column-table-row-cell__desc">оцинкованный металл</p>
                    </div>
                  </div>
                  <div class="card-tabs-wrap-features-wrap-column-table-row">
                    <div class="card-tabs-wrap-features-wrap-column-table-row-cell">
                      <p class="card-tabs-wrap-features-wrap-column-table-row-cell__desc">Тип рассеивателя</p>
                    </div>
                    <div class="card-tabs-wrap-features-wrap-column-table-row-cell">
                      <p class="card-tabs-wrap-features-wrap-column-table-row-cell__desc">Опал</p>
                    </div>
                  </div>
                  <div class="card-tabs-wrap-features-wrap-column-table-row">
                    <div class="card-tabs-wrap-features-wrap-column-table-row-cell">
                      <p class="card-tabs-wrap-features-wrap-column-table-row-cell__desc">Монтаж</p>
                    </div>
                    <div class="card-tabs-wrap-features-wrap-column-table-row-cell">
                      <p class="card-tabs-wrap-features-wrap-column-table-row-cell__desc">накладной / встраиваемый (Армстронг)</p>
                    </div>
                  </div>
                  <div class="card-tabs-wrap-features-wrap-column-table-row">
                    <div class="card-tabs-wrap-features-wrap-column-table-row-cell">
                      <p class="card-tabs-wrap-features-wrap-column-table-row-cell__desc">Индекс цветопередачи (CRI)</p>
                    </div>
                    <div class="card-tabs-wrap-features-wrap-column-table-row-cell">
                      <p class="card-tabs-wrap-features-wrap-column-table-row-cell__desc">80
                      </p>
                    </div>
                  </div>
                  <div class="card-tabs-wrap-features-wrap-column-table-row">
                    <div class="card-tabs-wrap-features-wrap-column-table-row-cell">
                      <p class="card-tabs-wrap-features-wrap-column-table-row-cell__desc">Степень защиты</p>
                    </div>
                    <div class="card-tabs-wrap-features-wrap-column-table-row-cell">
                      <p class="card-tabs-wrap-features-wrap-column-table-row-cell__desc">IP40</p>
                    </div>
                  </div>
                  <div class="card-tabs-wrap-features-wrap-column-table-row">
                    <div class="card-tabs-wrap-features-wrap-column-table-row-cell">
                      <p class="card-tabs-wrap-features-wrap-column-table-row-cell__desc">Температура эксплуатации</p>
                    </div>
                    <div class="card-tabs-wrap-features-wrap-column-table-row-cell">
                      <p class="card-tabs-wrap-features-wrap-column-table-row-cell__desc">от -20◦С до +40◦С</p>
                    </div>
                  </div>
                  <div class="card-tabs-wrap-features-wrap-column-table-row">
                    <div class="card-tabs-wrap-features-wrap-column-table-row-cell">
                      <p class="card-tabs-wrap-features-wrap-column-table-row-cell__desc">Климатическое исполнение</p>
                    </div>
                    <div class="card-tabs-wrap-features-wrap-column-table-row-cell">
                      <p class="card-tabs-wrap-features-wrap-column-table-row-cell__desc">УХЛ 3</p>
                    </div>
                  </div>
                  <div class="card-tabs-wrap-features-wrap-column-table-row">
                    <div class="card-tabs-wrap-features-wrap-column-table-row-cell">
                      <p class="card-tabs-wrap-features-wrap-column-table-row-cell__desc">Класс защиты от поражения эл.током</p>
                    </div>
                    <div class="card-tabs-wrap-features-wrap-column-table-row-cell">
                      <p class="card-tabs-wrap-features-wrap-column-table-row-cell__desc">I</p>
                    </div>
                  </div>
                  <div class="card-tabs-wrap-features-wrap-column-table-row">
                    <div class="card-tabs-wrap-features-wrap-column-table-row-cell">
                      <p class="card-tabs-wrap-features-wrap-column-table-row-cell__desc">Категория по ограничению яркости</p>
                    </div>
                    <div class="card-tabs-wrap-features-wrap-column-table-row-cell">
                      <p class="card-tabs-wrap-features-wrap-column-table-row-cell__desc">2</p>
                    </div>
                  </div>
                  <div class="card-tabs-wrap-features-wrap-column-table-row">
                    <div class="card-tabs-wrap-features-wrap-column-table-row-cell">
                      <p class="card-tabs-wrap-features-wrap-column-table-row-cell__desc">Класс светораспределения</p>
                    </div>
                    <div class="card-tabs-wrap-features-wrap-column-table-row-cell">
                      <p class="card-tabs-wrap-features-wrap-column-table-row-cell__desc">П</p>
                    </div>
                  </div>
                  <div class="card-tabs-wrap-features-wrap-column-table-row">
                    <div class="card-tabs-wrap-features-wrap-column-table-row-cell">
                      <p class="card-tabs-wrap-features-wrap-column-table-row-cell__desc">Кривая силы света</p>
                    </div>
                    <div class="card-tabs-wrap-features-wrap-column-table-row-cell">
                      <p class="card-tabs-wrap-features-wrap-column-table-row-cell__desc">Д</p>
                    </div>
                  </div>
                  <div class="card-tabs-wrap-features-wrap-column-table-row">
                    <div class="card-tabs-wrap-features-wrap-column-table-row-cell">
                      <p class="card-tabs-wrap-features-wrap-column-table-row-cell__desc">Габаритная яркость</p>
                    </div>
                    <div class="card-tabs-wrap-features-wrap-column-table-row-cell">
                      <p class="card-tabs-wrap-features-wrap-column-table-row-cell__desc">&lt5000 кд/м² </p>
                    </div>
                  </div>
                  <div class="card-tabs-wrap-features-wrap-column-table-row">
                    <div class="card-tabs-wrap-features-wrap-column-table-row-cell">
                      <p class="card-tabs-wrap-features-wrap-column-table-row-cell__desc">Срок службы диодов</p>
                    </div>
                    <div class="card-tabs-wrap-features-wrap-column-table-row-cell">
                      <p class="card-tabs-wrap-features-wrap-column-table-row-cell__desc">50 000 часов</p>
                    </div>
                  </div>
                  <div class="card-tabs-wrap-features-wrap-column-table-row">
                    <div class="card-tabs-wrap-features-wrap-column-table-row-cell">
                      <p class="card-tabs-wrap-features-wrap-column-table-row-cell__desc">Гарантия на светильник</p>
                    </div>
                    <div class="card-tabs-wrap-features-wrap-column-table-row-cell">
                      <p class="card-tabs-wrap-features-wrap-column-table-row-cell__desc">5 лет</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-tabs-wrap-features-wrap-column">
                <div class="card-tabs-wrap-features-wrap-column-table">
                  <div class="card-tabs-wrap-features-wrap-column-table-row">
                    <div class="card-tabs-wrap-features-wrap-column-table-row-cell">
                      <p class="card-tabs-wrap-features-wrap-column-table-row-cell__desc">Артикул</p>
                    </div>
                    <div class="card-tabs-wrap-features-wrap-column-table-row-cell">
                      <p class="card-tabs-wrap-features-wrap-column-table-row-cell__desc">ГСО-1322
                      </p>
                    </div>
                  </div>
                  <div class="card-tabs-wrap-features-wrap-column-table-row">
                    <div class="card-tabs-wrap-features-wrap-column-table-row-cell">
                      <p class="card-tabs-wrap-features-wrap-column-table-row-cell__desc">Габаритные размеры</p>
                    </div>
                    <div class="card-tabs-wrap-features-wrap-column-table-row-cell">
                      <p class="card-tabs-wrap-features-wrap-column-table-row-cell__desc">595×595×40 мм</p>
                    </div>
                  </div>
                  <div class="card-tabs-wrap-features-wrap-column-table-row">
                    <div class="card-tabs-wrap-features-wrap-column-table-row-cell">
                      <p class="card-tabs-wrap-features-wrap-column-table-row-cell__desc">Мощность</p>
                    </div>
                    <div class="card-tabs-wrap-features-wrap-column-table-row-cell">
                      <p class="card-tabs-wrap-features-wrap-column-table-row-cell__desc">36 Вт</p>
                    </div>
                  </div>
                  <div class="card-tabs-wrap-features-wrap-column-table-row">
                    <div class="card-tabs-wrap-features-wrap-column-table-row-cell">
                      <p class="card-tabs-wrap-features-wrap-column-table-row-cell__desc">Световой поток после рассеивателя</p>
                    </div>
                    <div class="card-tabs-wrap-features-wrap-column-table-row-cell">
                      <p class="card-tabs-wrap-features-wrap-column-table-row-cell__desc">4000 Лм</p>
                    </div>
                  </div>
                  <div class="card-tabs-wrap-features-wrap-column-table-row">
                    <div class="card-tabs-wrap-features-wrap-column-table-row-cell">
                      <p class="card-tabs-wrap-features-wrap-column-table-row-cell__desc">Цветовая температура</p>
                    </div>
                    <div class="card-tabs-wrap-features-wrap-column-table-row-cell">
                      <p class="card-tabs-wrap-features-wrap-column-table-row-cell__desc">4000 К</p>
                    </div>
                  </div>
                  <div class="card-tabs-wrap-features-wrap-column-table-row">
                    <div class="card-tabs-wrap-features-wrap-column-table-row-cell">
                      <p class="card-tabs-wrap-features-wrap-column-table-row-cell__desc">Материал корпуса</p>
                    </div>
                    <div class="card-tabs-wrap-features-wrap-column-table-row-cell">
                      <p class="card-tabs-wrap-features-wrap-column-table-row-cell__desc">оцинкованный металл</p>
                    </div>
                  </div>
                  <div class="card-tabs-wrap-features-wrap-column-table-row">
                    <div class="card-tabs-wrap-features-wrap-column-table-row-cell">
                      <p class="card-tabs-wrap-features-wrap-column-table-row-cell__desc">Тип рассеивателя</p>
                    </div>
                    <div class="card-tabs-wrap-features-wrap-column-table-row-cell">
                      <p class="card-tabs-wrap-features-wrap-column-table-row-cell__desc">Опал</p>
                    </div>
                  </div>
                  <div class="card-tabs-wrap-features-wrap-column-table-row">
                    <div class="card-tabs-wrap-features-wrap-column-table-row-cell">
                      <p class="card-tabs-wrap-features-wrap-column-table-row-cell__desc">Монтаж</p>
                    </div>
                    <div class="card-tabs-wrap-features-wrap-column-table-row-cell">
                      <p class="card-tabs-wrap-features-wrap-column-table-row-cell__desc">накладной / встраиваемый (Армстронг)</p>
                    </div>
                  </div>
                  <div class="card-tabs-wrap-features-wrap-column-table-row">
                    <div class="card-tabs-wrap-features-wrap-column-table-row-cell">
                      <p class="card-tabs-wrap-features-wrap-column-table-row-cell__desc">Индекс цветопередачи (CRI)</p>
                    </div>
                    <div class="card-tabs-wrap-features-wrap-column-table-row-cell">
                      <p class="card-tabs-wrap-features-wrap-column-table-row-cell__desc">80
                      </p>
                    </div>
                  </div>
                  <div class="card-tabs-wrap-features-wrap-column-table-row">
                    <div class="card-tabs-wrap-features-wrap-column-table-row-cell">
                      <p class="card-tabs-wrap-features-wrap-column-table-row-cell__desc">Степень защиты</p>
                    </div>
                    <div class="card-tabs-wrap-features-wrap-column-table-row-cell">
                      <p class="card-tabs-wrap-features-wrap-column-table-row-cell__desc">IP40</p>
                    </div>
                  </div>
                  <div class="card-tabs-wrap-features-wrap-column-table-row">
                    <div class="card-tabs-wrap-features-wrap-column-table-row-cell">
                      <p class="card-tabs-wrap-features-wrap-column-table-row-cell__desc">Температура эксплуатации</p>
                    </div>
                    <div class="card-tabs-wrap-features-wrap-column-table-row-cell">
                      <p class="card-tabs-wrap-features-wrap-column-table-row-cell__desc">от -20◦С до +40◦С</p>
                    </div>
                  </div>
                  <div class="card-tabs-wrap-features-wrap-column-table-row">
                    <div class="card-tabs-wrap-features-wrap-column-table-row-cell">
                      <p class="card-tabs-wrap-features-wrap-column-table-row-cell__desc">Климатическое исполнение</p>
                    </div>
                    <div class="card-tabs-wrap-features-wrap-column-table-row-cell">
                      <p class="card-tabs-wrap-features-wrap-column-table-row-cell__desc">УХЛ 3</p>
                    </div>
                  </div>
                  <div class="card-tabs-wrap-features-wrap-column-table-row">
                    <div class="card-tabs-wrap-features-wrap-column-table-row-cell">
                      <p class="card-tabs-wrap-features-wrap-column-table-row-cell__desc">Класс защиты от поражения эл.током</p>
                    </div>
                    <div class="card-tabs-wrap-features-wrap-column-table-row-cell">
                      <p class="card-tabs-wrap-features-wrap-column-table-row-cell__desc">I</p>
                    </div>
                  </div>
                  <div class="card-tabs-wrap-features-wrap-column-table-row">
                    <div class="card-tabs-wrap-features-wrap-column-table-row-cell">
                      <p class="card-tabs-wrap-features-wrap-column-table-row-cell__desc">Категория по ограничению яркости</p>
                    </div>
                    <div class="card-tabs-wrap-features-wrap-column-table-row-cell">
                      <p class="card-tabs-wrap-features-wrap-column-table-row-cell__desc">2</p>
                    </div>
                  </div>
                  <div class="card-tabs-wrap-features-wrap-column-table-row">
                    <div class="card-tabs-wrap-features-wrap-column-table-row-cell">
                      <p class="card-tabs-wrap-features-wrap-column-table-row-cell__desc">Класс светораспределения</p>
                    </div>
                    <div class="card-tabs-wrap-features-wrap-column-table-row-cell">
                      <p class="card-tabs-wrap-features-wrap-column-table-row-cell__desc">П</p>
                    </div>
                  </div>
                  <div class="card-tabs-wrap-features-wrap-column-table-row">
                    <div class="card-tabs-wrap-features-wrap-column-table-row-cell">
                      <p class="card-tabs-wrap-features-wrap-column-table-row-cell__desc">Кривая силы света</p>
                    </div>
                    <div class="card-tabs-wrap-features-wrap-column-table-row-cell">
                      <p class="card-tabs-wrap-features-wrap-column-table-row-cell__desc">Д</p>
                    </div>
                  </div>
                  <div class="card-tabs-wrap-features-wrap-column-table-row">
                    <div class="card-tabs-wrap-features-wrap-column-table-row-cell">
                      <p class="card-tabs-wrap-features-wrap-column-table-row-cell__desc">Габаритная яркость</p>
                    </div>
                    <div class="card-tabs-wrap-features-wrap-column-table-row-cell">
                      <p class="card-tabs-wrap-features-wrap-column-table-row-cell__desc">&lt5000 кд/м² </p>
                    </div>
                  </div>
                  <div class="card-tabs-wrap-features-wrap-column-table-row">
                    <div class="card-tabs-wrap-features-wrap-column-table-row-cell">
                      <p class="card-tabs-wrap-features-wrap-column-table-row-cell__desc">Срок службы диодов</p>
                    </div>
                    <div class="card-tabs-wrap-features-wrap-column-table-row-cell">
                      <p class="card-tabs-wrap-features-wrap-column-table-row-cell__desc">50 000 часов</p>
                    </div>
                  </div>
                  <div class="card-tabs-wrap-features-wrap-column-table-row">
                    <div class="card-tabs-wrap-features-wrap-column-table-row-cell">
                      <p class="card-tabs-wrap-features-wrap-column-table-row-cell__desc">Гарантия на светильник</p>
                    </div>
                    <div class="card-tabs-wrap-features-wrap-column-table-row-cell">
                      <p class="card-tabs-wrap-features-wrap-column-table-row-cell__desc">5 лет</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card-tabs-wrap-features" data-target="2">
            <div class="card-tabs-wrap-features-wrap">
              <div class="card-tabs-wrap-features-wrap-column">
                <div class="card-tabs-wrap-features-wrap-column-table">
                  <div class="card-tabs-wrap-features-wrap-column-table-row">
                    <div class="card-tabs-wrap-features-wrap-column-table-row-cell">
                      <p class="card-tabs-wrap-features-wrap-column-table-row-cell__desc">Способ крепления</p>
                    </div>
                    <div class="card-tabs-wrap-features-wrap-column-table-row-cell">
                      <p class="card-tabs-wrap-features-wrap-column-table-row-cell__desc">магнитный</p>
                    </div>
                  </div>
                  <div class="card-tabs-wrap-features-wrap-column-table-row">
                    <div class="card-tabs-wrap-features-wrap-column-table-row-cell">
                      <p class="card-tabs-wrap-features-wrap-column-table-row-cell__desc">Диапазон рабочего входящего напряжения питания</p>
                    </div>
                    <div class="card-tabs-wrap-features-wrap-column-table-row-cell">
                      <p class="card-tabs-wrap-features-wrap-column-table-row-cell__desc">165-265 В</p>
                    </div>
                  </div>
                  <div class="card-tabs-wrap-features-wrap-column-table-row">
                    <div class="card-tabs-wrap-features-wrap-column-table-row-cell">
                      <p class="card-tabs-wrap-features-wrap-column-table-row-cell__desc">Частота питающей сети</p>
                    </div>
                    <div class="card-tabs-wrap-features-wrap-column-table-row-cell">
                      <p class="card-tabs-wrap-features-wrap-column-table-row-cell__desc">50-60 Гц</p>
                    </div>
                  </div>
                  <div class="card-tabs-wrap-features-wrap-column-table-row">
                    <div class="card-tabs-wrap-features-wrap-column-table-row-cell">
                      <p class="card-tabs-wrap-features-wrap-column-table-row-cell__desc">Коэффициент мощности</p>
                    </div>
                    <div class="card-tabs-wrap-features-wrap-column-table-row-cell">
                      <p class="card-tabs-wrap-features-wrap-column-table-row-cell__desc">≥0,9</p>
                    </div>
                  </div>
                  <div class="card-tabs-wrap-features-wrap-column-table-row">
                    <div class="card-tabs-wrap-features-wrap-column-table-row-cell">
                      <p class="card-tabs-wrap-features-wrap-column-table-row-cell__desc">Коэффициент пульсации</p>
                    </div>
                    <div class="card-tabs-wrap-features-wrap-column-table-row-cell">
                      <p class="card-tabs-wrap-features-wrap-column-table-row-cell__desc">&lt1%</p>
                    </div>
                  </div>
                  <div class="card-tabs-wrap-features-wrap-column-table-row">
                    <div class="card-tabs-wrap-features-wrap-column-table-row-cell">
                      <p class="card-tabs-wrap-features-wrap-column-table-row-cell__desc">Выходное напряжение</p>
                    </div>
                    <div class="card-tabs-wrap-features-wrap-column-table-row-cell">
                      <p class="card-tabs-wrap-features-wrap-column-table-row-cell__desc">60-120 В</p>
                    </div>
                  </div>
                  <div class="card-tabs-wrap-features-wrap-column-table-row">
                    <div class="card-tabs-wrap-features-wrap-column-table-row-cell">
                      <p class="card-tabs-wrap-features-wrap-column-table-row-cell__desc">Выходной ток</p>
                    </div>
                    <div class="card-tabs-wrap-features-wrap-column-table-row-cell">
                      <p class="card-tabs-wrap-features-wrap-column-table-row-cell__desc">300 мА</p>
                    </div>
                  </div>
                  <div class="card-tabs-wrap-features-wrap-column-table-row">
                    <div class="card-tabs-wrap-features-wrap-column-table-row-cell">
                      <p class="card-tabs-wrap-features-wrap-column-table-row-cell__desc">Защита от КЗ</p>
                    </div>
                    <div class="card-tabs-wrap-features-wrap-column-table-row-cell">
                      <p class="card-tabs-wrap-features-wrap-column-table-row-cell__desc">да</p>
                    </div>
                  </div>
                  <div class="card-tabs-wrap-features-wrap-column-table-row">
                    <div class="card-tabs-wrap-features-wrap-column-table-row-cell">
                      <p class="card-tabs-wrap-features-wrap-column-table-row-cell__desc">Гальваническая развязка</p>
                    </div>
                    <div class="card-tabs-wrap-features-wrap-column-table-row-cell">
                      <p class="card-tabs-wrap-features-wrap-column-table-row-cell__desc">нет</p>
                    </div>
                  </div>
                  <div class="card-tabs-wrap-features-wrap-column-table-row">
                    <div class="card-tabs-wrap-features-wrap-column-table-row-cell">
                      <p class="card-tabs-wrap-features-wrap-column-table-row-cell__desc">Аварийный режим</p>
                    </div>
                    <div class="card-tabs-wrap-features-wrap-column-table-row-cell">
                      <p class="card-tabs-wrap-features-wrap-column-table-row-cell__desc">нет</p>
                    </div>
                  </div>
                  <div class="card-tabs-wrap-features-wrap-column-table-row">
                    <div class="card-tabs-wrap-features-wrap-column-table-row-cell">
                      <p class="card-tabs-wrap-features-wrap-column-table-row-cell__desc">Гарантия</p>
                    </div>
                    <div class="card-tabs-wrap-features-wrap-column-table-row-cell">
                      <p class="card-tabs-wrap-features-wrap-column-table-row-cell__desc">3 года</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card-tabs-wrap-features" data-target="3">
            <div class="card-tabs-wrap-desc-wrap">
              <h4 class="card-tabs-wrap-desc-wrap__title">Заливной свет</h4>
              <p class="card-tabs-wrap-desc-wrap__desc">На рассеивателе образуется сплошное световое пятно, без перепадов по яркости. Светодиоды через рассеиватель не видно</p>
            </div>
            <div class="card-tabs-wrap-desc-wrap">
              <h4 class="card-tabs-wrap-desc-wrap__title">Легкий доступ в светильник
              </h4>
              <p class="card-tabs-wrap-desc-wrap__desc">С помощью боковой откидной планки доступ осуществляется без использования инструментов
              </p>
            </div>
            <div class="card-tabs-wrap-desc-wrap">
              <h4 class="card-tabs-wrap-desc-wrap__title">Магнитное крепление драйверов</h4>
              <p class="card-tabs-wrap-desc-wrap__desc">Упрощает монтаж и позволяет размещать драйвера как снаружи корпуса
                (для встраиваемого монтажа), так и внутри корпуса (для накладного монтажа)</p>
            </div>
            <div class="card-tabs-wrap-desc-wrap">
              <h4 class="card-tabs-wrap-desc-wrap__title">Полная ремонтопригодность для удобного и недорого постгарантийного обслуживания </h4>
              <p class="card-tabs-wrap-desc-wrap__desc">Драйвера и светодиодные модули легко снимаются и имеют коннекторное соединение для их простой замены, что делает постгарантийное обслуживание удобным и недорогим</p>
            </div>
            <div class="card-tabs-wrap-desc-wrap">
              <h4 class="card-tabs-wrap-desc-wrap__title">Оцинкованный корпус и качественная краска </h4>
              <p class="card-tabs-wrap-desc-wrap__desc">Позволит корпусу светильника прослужить долгие годы в т.ч. в постгарантийный период</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="subscription">
    <div class="container">
      <div class="subscription-wrap">
        <h2 class="subscription-wrap__title">Получайте первыми<br> информацию<br> о новинках и акциях</h2>
        <div class="subscription-wrap-form">
          <input name="email" type="text" class="subscription-wrap-form__input" placeholder="Введите адрес электронной почты" minlength="2" maxlength="40" required>
          <button class="subscription-wrap__btn-767">подписаться</button>
          <div class="subscription-wrap-form-wrap">
            <input name="user-check" type="checkbox" class="subscription-wrap-form-wrap__checkbox-hidden" required hidden checked>
            <span class="subscription-wrap-form-wrap__checkbox"></span>
            <p class="subscription-wrap-form-wrap__desc">Отправляя форму, я соглашаюсь с условиями
              <a href="#" class="subscription-wrap-form-wrap__link"> политики персональных данных</a>
            </p>
          </div>
        </div>
        <button class="subscription-wrap__btn">подписаться</button>
      </div>
    </div>
  </section>
</main>

<?php get_footer();
