<?php get_header(); ?>

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
    <section class="products">
        <div class="container">
            <h1 class="products__title"><?php single_cat_title('', true); ?></h1>
            <div class="products-wrap">
                <a href="" class="catalog-list-item">
                    <img src="./img/catalog/products-1.png" alt="" class="catalog-list-item__img">
                    <div class="catalog-list-item-link">
                        <h3 class="catalog-list-item-link__title">Коммерческое и офисное<br> освещение (IP40)</h3>
                    </div>
                    <p class="catalog-list-item__desc">Мощность — от 36 Вт до 150 Вт</p>
                    <div class="catalog-list-item-link">
                        <p class="catalog-list-item-link__desc">Подробнее</p>
                        <img src="./img/home/header-arrow-right.svg" alt="" class="catalog-list-item-link__img">
                    </div>
                </a>
                <a href="" class="catalog-list-item">
                    <img src="./img/catalog/products-2.png" alt="" class="catalog-list-item__img">
                    <div class="catalog-list-item-link">
                        <h3 class="catalog-list-item-link__title">Освещение для чистых<br> помещений (IP54)</h3>
                    </div>
                    <p class="catalog-list-item__desc">Мощность — от 36 Вт до 150 Вт</p>
                    <div class="catalog-list-item-link">
                        <p class="catalog-list-item-link__desc">Подробнее</p>
                        <img src="./img/home/header-arrow-right.svg" alt="" class="catalog-list-item-link__img">
                    </div>
                </a>
                <a href="" class="catalog-list-item">
                    <img src="./img/catalog/products-3.png" alt="" class="catalog-list-item__img">
                    <div class="catalog-list-item-link">
                        <h3 class="catalog-list-item-link__title">Промышленное<br> освещение (IP40 / IP65)</h3>
                    </div>
                    <p class="catalog-list-item__desc">Мощность — от 36 Вт до 150 Вт</p>
                    <div class="catalog-list-item-link">
                        <p class="catalog-list-item-link__desc">Подробнее</p>
                        <img src="./img/home/header-arrow-right.svg" alt="" class="catalog-list-item-link__img">
                    </div>
                </a>
                <a href="" class="catalog-list-item">
                    <img src="./img/catalog/products-4.png" alt="" class="catalog-list-item__img">
                    <div class="catalog-list-item-link">
                        <h3 class="catalog-list-item-link__title">Линейные светильники (IP40)</h3>
                    </div>
                    <p class="catalog-list-item__desc">Мощность — от 36 Вт до 150 Вт</p>
                    <div class="catalog-list-item-link">
                        <p class="catalog-list-item-link__desc">Подробнее</p>
                        <img src="./img/home/header-arrow-right.svg" alt="" class="catalog-list-item-link__img">
                    </div>
                </a>
                <a href="" class="catalog-list-item">
                    <img src="./img/catalog/products-5.png" alt="" class="catalog-list-item__img">
                    <div class="catalog-list-item-link">
                        <h3 class="catalog-list-item-link__title">Для образовательных<br> учреждений</h3>
                    </div>
                    <p class="catalog-list-item__desc">Мощность — от 36 Вт до 150 Вт</p>
                    <div class="catalog-list-item-link">
                        <p class="catalog-list-item-link__desc">Подробнее</p>
                        <img src="./img/home/header-arrow-right.svg" alt="" class="catalog-list-item-link__img">
                    </div>
                </a>
                <a href="" class="catalog-list-item">
                    <img src="./img/catalog/products-6.png" alt="" class="catalog-list-item__img">
                    <div class="catalog-list-item-link">
                        <h3 class="catalog-list-item-link__title">Специальные серии</h3>
                    </div>
                    <p class="catalog-list-item__desc">Мощность — от 36 Вт до 150 Вт</p>
                    <div class="catalog-list-item-link">
                        <p class="catalog-list-item-link__desc">Подробнее</p>
                        <img src="./img/home/header-arrow-right.svg" alt="" class="catalog-list-item-link__img">
                    </div>
                </a>
                <a href="" class="catalog-list-item">
                    <img src="./img/catalog/products-7.png" alt="" class="catalog-list-item__img">
                    <div class="catalog-list-item-link">
                        <h3 class="catalog-list-item-link__title">Светильники на заказ</h3>
                    </div>
                    <p class="catalog-list-item__desc">Мощность — от 36 Вт до 150 Вт</p>
                    <adiv class="catalog-list-item-link">
                        <p class="catalog-list-item-link__desc">Подробнее</p>
                        <img src="./img/home/header-arrow-right.svg" alt="" class="catalog-list-item-link__img">
                    </adiv>
                </a>
                <a href="" class="catalog-list-item">
                    <img src="./img/catalog/products-8.png" alt="" class="catalog-list-item__img">
                    <div class="catalog-list-item-link">
                        <h3 class="catalog-list-item-link__title">Драйверы и БАП для<br> светильников ГЕНСВЕТ</h3>
                    </div>
                    <p class="catalog-list-item__desc">Мощность — от 36 Вт до 150 Вт</p>
                    <div class="catalog-list-item-link">
                        <p class="catalog-list-item-link__desc">Подробнее</p>
                        <img src="./img/home/header-arrow-right.svg" alt="" class="catalog-list-item-link__img">
                    </div>
                </a>
            </div>
        </div>
    </section>
    <?php get_template_part('template-parts/subscription-section'); ?>
</main>

<?php get_footer(); ?>