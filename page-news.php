<?php

/*
Template Name: Страница Новости компании
Template Post Type: page
*/

get_header(); ?>

<?php get_template_part('template-parts/header-section');?> 

<main id="primary" class="main"> 

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
                        <li class="breadcrumb-list-item">
                            <a href="" class="breadcrumb-list-item__link">Новости</a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="newscom">
            <div class="container">
                <h1 class="newscom__title">Новости компании</h1>
                <div class="newscom-wrap">
                    <a href="" class="newscom-wrap-card">
                        <div class="newscom-wrap-card-right">
                            <div class="newscom-wrap-card-right-date">
                                <span class="newscom-wrap-card-right-date__bold">12</span>
                                <span class="newscom-wrap-card-right-date__grey">/ 05</span>
                            </div>
                            <p class="newscom-wrap-card-right__desc">Прошла очередная конференция, на которой инженеры предприятия выступили с докладом</p>
                            <div class="newscom-wrap-card-right-link">
                                <p class="points-wrap-partners-cards-card-link__desc">Подробнее</p>
                                <img src="./img/home/header-arrow-right.svg" alt="" class="points-wrap-partners-cards-card-link__img">
                            </div>
                        </div>
                        <div class="newscom-wrap-card-link"> 
                            <img src="./img/home/news-1.png" alt="" class="newscom-wrap-card-link__img">
                        </div>
                    </a>
                    <a href="" class="newscom-wrap-card">
                        <div class="newscom-wrap-card-right">
                            <div class="newscom-wrap-card-right-date">
                                <span class="newscom-wrap-card-right-date__bold">04</span>
                                <span class="newscom-wrap-card-right-date__grey">/ 05</span>
                            </div>
                            <p class="newscom-wrap-card-right__desc">Краткий обзор выставки «Электроника – Урал – 2021»</p>
                            <div class="newscom-wrap-card-right-link">
                                <p class="points-wrap-partners-cards-card-link__desc">Подробнее</p>
                                <img src="./img/home/header-arrow-right.svg" alt="" class="points-wrap-partners-cards-card-link__img">
                            </div>
                        </div>
                        <div class="newscom-wrap-card-link">     
                            <img src="./img/home/news-2.png" alt="" class="newscom-wrap-card-link__img">
                        </div>
                    </a>
                    <a href="" class="newscom-wrap-card">
                        <div class="newscom-wrap-card-right">
                            <div class="newscom-wrap-card-right-date">
                                <span class="newscom-wrap-card-right-date__bold">20</span>
                                <span class="newscom-wrap-card-right-date__grey">/ 04</span>
                            </div>
                            <p class="newscom-wrap-card-right__desc">Краткий обзор выставки «Интерсвет – 2021»</p>
                            <div class="newscom-wrap-card-right-link">
                                <p class="points-wrap-partners-cards-card-link__desc">Подробнее</p>
                                    <img src="./img/home/header-arrow-right.svg" alt="" class="points-wrap-partners-cards-card-link__img">
                            </div>
                        </div>
                        <div class="newscom-wrap-card-link">
                            <img src="./img/home/news-3.png" alt="" class="newscom-wrap-card-link__img">
                        </div>
                    </a>
                    <a href="" class="newscom-wrap-card">
                        <div class="newscom-wrap-card-right">
                            <div class="newscom-wrap-card-right-date">
                                <span class="newscom-wrap-card-right-date__bold">26</span>
                                <span class="newscom-wrap-card-right-date__grey">/ 04</span>
                            </div>
                            <p class="newscom-wrap-card-right__desc">Получена лицензия на изготовление оборудования для ядерных установок</p>
                            <div class="newscom-wrap-card-right-link">
                                <p class="points-wrap-partners-cards-card-link__desc">Подробнее</p>
                                    <img src="./img/home/header-arrow-right.svg" alt="" class="points-wrap-partners-cards-card-link__img">
                            </div>
                        </div>
                        <div class="newscom-wrap-card-link">
                            <img src="./img/home/news-4.png" alt="" class="newscom-wrap-card-link__img">
                        </div>
                    </a>
                    <a href="" class="newscom-wrap-card">
                        <div class="newscom-wrap-card-right">
                            <div class="newscom-wrap-card-right-date">
                                <span class="newscom-wrap-card-right-date__bold">19</span>
                                <span class="newscom-wrap-card-right-date__grey">/ 03</span>
                            </div>
                            <p class="newscom-wrap-card-right__desc">Компания ГЕНСВЕТ вошла в состав комиссии</p>
                            <div class="newscom-wrap-card-right-link">
                                <p class="points-wrap-partners-cards-card-link__desc">Подробнее</p>
                                    <img src="./img/home/header-arrow-right.svg" alt="" class="points-wrap-partners-cards-card-link__img">
                            </div>
                        </div>
                        <div class="newscom-wrap-card-link">
                            <img src="./img/home/news-5.png" alt="" class="newscom-wrap-card-link__img">
                        </div>
                    </a>
                </div>
            </div>
        </section>
        <section class="subscription">
            <div class="container">
                <div class="subscription-wrap">
                    <h2 class="subscription-wrap__title">Получайте первыми<br> информацию<br> о новинках и акциях</h2>
                    <div class="subscription-wrap-form">
                        <input name="email" type="text" class="subscription-wrap-form__input" placeholder="Введите адрес электронной почты" minlength="2" maxlength="40" required>
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