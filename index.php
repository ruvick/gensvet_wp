<?php get_header(); ?>

<?php get_template_part('template-parts/header-section');?>

	<main class="page"> 

	<section class="production">
            <div class="container">
                <div class="production-top">
                    <h1 class="production-top__title"><?php echo carbon_get_theme_option('about_home_title'); ?></h1>
                    <div class="production-top-right">
                        <h2 class="production-top-right__subtitle">Скачайте инструкцию <br>«Кривые силы света»</h2>
                        <button class="production-top-right__btn">Скачать инструкцию</button>
                        <!-- <div class="production-top-right-wrap">
                            <p class="production-top-right-wrap__desc">О компании</p>
                            <a href="#" class="production-top-right-wrap-link">
                                <img src="./img/home/header-arrow-right.svg" alt="" class="production-top-right-wrap-link__img">
                            </a>
                        </div> -->
                    </div>
                </div>
                <div class="production-wrap">
                    <div class="production-wrap-cards">
                        <div class="production-wrap-cards-card">
                            <a href="#" class="production-wrap-cards-card-link">
                                <h3 class="production-wrap-cards-card-link__title">продукция <br>ГЕНСВЕТ</h3>
                            </a>
                            <img src="<?php echo get_template_directory_uri();?>/img/home/production-bg-1.svg" alt="" class="production-wrap-cards-card__img">
                        </div>
                        <div class="production-wrap-cards-hidden">
                            <img src="<?php echo get_template_directory_uri();?>/img/home/production-bg-hidden-1.svg" alt="" class="production-wrap-cards-hidden__img">
                            <a href="" class="production-wrap-cards-hidden-link">
                                <h3 class="production-wrap-cards-hidden-link__title">продукция <br>ГЕНСВЕТ</h3>
                            </a>
                            <ul class="production-wrap-cards-hidden-list">
                                <li class="production-wrap-cards-hidden-list-item">
                                    <a href="#" class="production-wrap-cards-hidden-list-item__link">Коммерческое и офисное освещение (IP40)</a>
                                </li>
                                <li class="production-wrap-cards-hidden-list-item">
                                    <a href="#" class="production-wrap-cards-hidden-list-item__link">Освещение для чистых помещений (IP54)</a>
                                </li>
                                <li class="production-wrap-cards-hidden-list-item">
                                    <a href="#" class="production-wrap-cards-hidden-list-item__link">Промышленное освещение (IP40 / IP65)</a>
                                </li>
                                <li class="production-wrap-cards-hidden-list-item">
                                    <a href="#" class="production-wrap-cards-hidden-list-item__link">Линейные светильники (IP40)</a>
                                </li>
                                <li class="production-wrap-cards-hidden-list-item">
                                    <a href="#" class="production-wrap-cards-hidden-list-item__link">Для образовательных учреждений</a>
                                </li>
                                <li class="production-wrap-cards-hidden-list-item">
                                    <a href="#" class="production-wrap-cards-hidden-list-item__link">Специальные серии</a>
                                </li>
                                <li class="production-wrap-cards-hidden-list-item">
                                    <a href="#" class="production-wrap-cards-hidden-list-item__link">Светильники на заказ</a>
                                </li>
                                <li class="production-wrap-cards-hidden-list-item">
                                    <a href="#" class="production-wrap-cards-hidden-list-item__link">Драйверы и БАП для  светильников ГЕНСВЕТ</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="production-wrap-cards">
                        <div class="production-wrap-cards-card">
                            <a href="#" class="production-wrap-cards-card-link">
                                <h3 class="production-wrap-cards-card-link__title">продукция <br>dekolabs</h3>
                            </a>
                            <img src="<?php echo get_template_directory_uri();?>/img/home/production-bg-2.svg" alt="" class="production-wrap-cards-card__img">
                        </div>
                        <div class="production-wrap-cards-hidden">
                            <img src="<?php echo get_template_directory_uri();?>/img/home/production-bg-hidden-2.svg" alt="" class="production-wrap-cards-hidden__img">
                            <a href="" class="production-wrap-cards-hidden-link">
                                <h3 class="production-wrap-cards-hidden-link__title">продукция <br>dekolabs</h3>
                            </a>
                            <ul class="production-wrap-cards-hidden-list">
                                <li class="production-wrap-cards-hidden-list-item">
                                    <a href="#" class="production-wrap-cards-hidden-list-item__link">Наружное освещение</a>
                                </li>
                                <li class="production-wrap-cards-hidden-list-item">
                                    <a href="#" class="production-wrap-cards-hidden-list-item__link">Внутреннее освещение</a>
                                </li>
                                <li class="production-wrap-cards-hidden-list-item">
                                    <a href="#" class="production-wrap-cards-hidden-list-item__link">Интерьерное освещение</a>
                                </li>
                                <li class="production-wrap-cards-hidden-list-item">
                                    <a href="#" class="production-wrap-cards-hidden-list-item__link">Светодиодные лампы</a>
                                </li>
                                <li class="production-wrap-cards-hidden-list-item">
                                    <a href="#" class="production-wrap-cards-hidden-list-item__link">Светодиодна лента</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="production-wrap-cards">
                        <div class="production-wrap-cards-card">
                            <a href="#" class="production-wrap-cards-card-link">
                                <h3 class="production-wrap-cards-card-link__title">Сервисы</h3>
                            </a>
                            <img src="<?php echo get_template_directory_uri();?>/img/home/production-bg-3.svg" alt="" class="production-wrap-cards-card__img">
                            <img src="<?php echo get_template_directory_uri();?>/img/home/production-3-760.svg" alt="" class="production-wrap-cards-card__img--hidden">
                        </div>
                        <div class="production-wrap-cards-hidden">
                            <img src="<?php echo get_template_directory_uri();?>/img/home/production-bg-hidden-3.svg" alt="" class="production-wrap-cards-hidden__img">
                            <a href="" class="production-wrap-cards-hidden-link">
                                <h3 class="production-wrap-cards-hidden-link__title">Сервисы</h3>
                            </a>
                            <ul class="production-wrap-cards-hidden-list">
                                <li class="production-wrap-cards-hidden-list-item">
                                    <img src="./img/home/download.svg" alt="" class="production-wrap-cards-hidden-list-item__img">
                                    <a href="#" class="production-wrap-cards-hidden-list-item__link">Каталог ГЕНСВЕТ</a>
                                </li>
                                <li class="production-wrap-cards-hidden-list-item">
                                    <img src="./img/home/download.svg" alt="" class="production-wrap-cards-hidden-list-item__img">
                                    <a href="#" class="production-wrap-cards-hidden-list-item__link">Каталог DEKOlabs</a>
                                </li>
                                <li class="production-wrap-cards-hidden-list-item">
                                    <a href="#" class="production-wrap-cards-hidden-list-item__link">Калькулятор освещенности</a>
                                </li>
                                <li class="production-wrap-cards-hidden-list-item">
                                    <a href="#" class="production-wrap-cards-hidden-list-item__link">Видео-обзоры</a>
                                </li>
                                <li class="production-wrap-cards-hidden-list-item">
                                    <a href="#" class="production-wrap-cards-hidden-list-item__link">Прайс-лист</a>
                                </li>
                                <li class="production-wrap-cards-hidden-list-item">
                                    <a href="#" class="production-wrap-cards-hidden-list-item__link">IES-файлы</a>
                                </li>
                                <li class="production-wrap-cards-hidden-list-item">
                                    <a href="#" class="production-wrap-cards-hidden-list-item__link">Технические задания</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="production-wrap-cards">
                        <div class="production-wrap-cards-card">
                            <a href="#" class="production-wrap-cards-card-link">
                                <h3 class="production-wrap-cards-card-link__title">калькулятор <br>освещенности</h3>
                                <img src="./img/home/production-bg-4.svg" alt="" class="production-wrap-cards-card-link__img">
                            </a>
                            
                        </div>
                    </div>
                    <div class="production-wrap-cards">
                        <div class="production-wrap-cards-card">
                            <a href="#" class="production-wrap-cards-card-link">
                                <h3 class="production-wrap-cards-card-link__title">Точки <br>продажи</h3>
                                <img src="./img/home/production-bg-5.svg" alt="" class="production-wrap-cards-card-link__img">
                            </a>
                            
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </section>
        <section class="news">
            <div class="container">
                <div class="news-list">
                    <div class="news-list-left">
                        <h2 class="news-list-left__title">новости<br> и события</h2>
                        <div class="news-list-left-wrap">
                            <button class="news-list-left-wrap-btn">
                                <img src="./img/home/header-arrow-right.svg" alt="" class="news-left-wrap-btn__img">
                            </button>
                            <p class="news-list-left-wrap__desc">Смотреть<br> все новости</p>
                        </div>
                    </div>
                    <div class="news-list-wrap">
                        <a href="" class="news-list-wrap-card">
                            <p class="news-list-wrap-card__date"><span class="news-list-wrap-card__date news-list-wrap-card__date--bold">12</span>/ 05</p>
                            <p class="news-list-wrap-card__desc">
                                Прошла очередная<br> конференция, на <br>которой инженеры<br> предприятия<br> выступили с докладом
                            </p>
                            <img src="<?php echo get_template_directory_uri();?>/img/home/news-1.png" alt="" class="news-list-wrap-card__img">
                        </a>
                        <a href="" class="news-list-wrap-card">
                            <p class="news-list-wrap-card__date"><span class="news-list-wrap-card__date news-list-wrap-card__date--bold">04</span> / 05</p>
                            <p class="news-list-wrap-card__desc">Краткий обзор<br> выставки<br> «Электроника – Урал –<br> 2021»</p>
                            <img src="<?php echo get_template_directory_uri();?>/img/home/news-2.png" alt="" class="news-list-wrap-card__img">
                        </a>
                        <a href="" class="news-list-wrap-card">
                            <p class="news-list-wrap-card__date"><span class="news-list-wrap-card__date news-list-wrap-card__date--bold">20</span> / 04</p>
                            <p class="news-list-wrap-card__desc">Краткий обзор<br> выставки «Интерсвет –<br> 2021»</p>
                            <img src="<?php echo get_template_directory_uri();?>/img/home/news-3.png" alt="" class="news-list-wrap-card__img">
                        </a>
                        <a href="" class="news-list-wrap-card">
                            <p class="news-list-wrap-card__date"><span class="news-list-wrap-card__date news-list-wrap-card__date--bold">26</span> / 04</p>
                            <p class="news-list-wrap-card__desc">Получена лицензия на<br> изготовление<br> оборудования для<br> ядерных установок</p>
                            <img src="<?php echo get_template_directory_uri();?>/img/home/news-4.png" alt="" class="news-list-wrap-card__img">
                        </a>
                        <a href="" class="news-list-wrap-card">
                            <p class="news-list-wrap-card__date"><span class="news-list-wrap-card__date news-list-wrap-card__date--bold">19</span> / 03</p>
                            <p class="news-list-wrap-card__desc">Компания ГЕНСВЕТ<br> вошла в состав<br> комиссии</p>
                            <img src="<?php echo get_template_directory_uri();?>/img/home/news-5.png" alt="" class="news-list-wrap-card__img">
                        </a>
                    </div>
                    <div class="news-list-left-wrap-hidden">
                        <button class="news-list-left-wrap-btn">
                            <img src="<?php echo get_template_directory_uri();?>/img/home/header-arrow-right.svg" alt="" class="news-left-wrap-btn__img">
                        </button>
                        <p class="news-list-left-wrap__desc">Смотреть<br> все новости</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="catalog">
            <div class="container">
                <h2 class="catalog__title">новинки</h2>
                <div class="catalog-list">
                    <a href="" class="catalog-list-item">
                        <img src="<?php echo get_template_directory_uri();?>/img/home/catalog-1.png" alt="" class="catalog-list-item__img">
                        <div class="catalog-list-item-link">
                            <h3 class="catalog-list-item-link__title">2 ГСО-Премьер (Армстронг)</h3>
                        </div>
                        <p class="catalog-list-item__desc">Мощность — от 36 Вт до 150 Вт</p>
                        <div class="catalog-list-item-link">
                            <p class="catalog-list-item-link__desc">Подробнее</p>
                            <img src="<?php echo get_template_directory_uri();?>/img/home/header-arrow-right.svg" alt="" class="catalog-list-item-link__img">
                        </div>
                    </a>
                    <a href="" class="catalog-list-item">
                        <img src="<?php echo get_template_directory_uri();?>/img/home/catalog-2.png" alt="" class="catalog-list-item__img">
                        <div class="catalog-list-item-link">
                            <h3 class="catalog-list-item-link__title">3 ГСО-Премьер (1190х150мм)</h3>
                        </div>
                        <p class="catalog-list-item__desc">Мощность — от 36 Вт до 150 Вт</p>
                        <div class="catalog-list-item-link">
                            <p class="catalog-list-item-link__desc">Подробнее</p>
                            <img src="<?php echo get_template_directory_uri();?>/img/home/header-arrow-right.svg" alt="" class="catalog-list-item-link__img">
                        </div>
                    </a>
                    <a href="" class="catalog-list-item">
                        <img src="<?php echo get_template_directory_uri();?>/img/home/catalog-3.png" alt="" class="catalog-list-item__img">
                        <div class="catalog-list-item-link">
                            <h3 class="catalog-list-item-link__title">7 ГСО-Спец</h3>
                        </div>
                        <p class="catalog-list-item__desc">Мощность — от 36 Вт до 150 Вт</p>
                        <div class="catalog-list-item-link">
                            <p class="catalog-list-item-link__desc">Подробнее</p>
                            <img src="<?php echo get_template_directory_uri();?>/img/home/header-arrow-right.svg" alt="" class="catalog-list-item-link__img">
                        </div>
                    </a>
                    <a href="" class="catalog-list-item">
                        <img src="<?php echo get_template_directory_uri();?>/img/home/catalog-1.png" alt="" class="catalog-list-item__img">
                        <div class="catalog-list-item-link">
                            <h3 class="catalog-list-item-link__title">1 ГСО-Премьер (Грильято)</h3>
                        </div>
                        <p class="catalog-list-item__desc">Мощность — от 36 Вт до 150 Вт</p>
                        <div class="catalog-list-item-link">
                            <p class="catalog-list-item-link__desc">Подробнее</p>
                            <img src="<?php echo get_template_directory_uri();?>/img/home/header-arrow-right.svg" alt="" class="catalog-list-item-link__img">
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

<?php get_footer(); ?> 