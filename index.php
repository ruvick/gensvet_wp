<?php get_header(); ?>

<?php get_template_part('template-parts/header-section'); ?>

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
						<img src="<?php echo get_template_directory_uri(); ?>/img/home/production-bg-1.svg" alt="" class="production-wrap-cards-card__img">
					</div>
					<div class="production-wrap-cards-hidden">
						<img src="<?php echo get_template_directory_uri(); ?>/img/home/production-bg-hidden-1.svg" alt="" class="production-wrap-cards-hidden__img">
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
								<a href="#" class="production-wrap-cards-hidden-list-item__link">Драйверы и БАП для светильников ГЕНСВЕТ</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="production-wrap-cards">
					<div class="production-wrap-cards-card">
						<a href="#" class="production-wrap-cards-card-link">
							<h3 class="production-wrap-cards-card-link__title">продукция <br>dekolabs</h3>
						</a>
						<img src="<?php echo get_template_directory_uri(); ?>/img/home/production-bg-2.svg" alt="" class="production-wrap-cards-card__img">
					</div>
					<div class="production-wrap-cards-hidden">
						<img src="<?php echo get_template_directory_uri(); ?>/img/home/production-bg-hidden-2.svg" alt="" class="production-wrap-cards-hidden__img">
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
						<img src="<?php echo get_template_directory_uri(); ?>/img/home/production-bg-3.svg" alt="" class="production-wrap-cards-card__img">
						<img src="<?php echo get_template_directory_uri(); ?>/img/home/production-3-760.svg" alt="" class="production-wrap-cards-card__img--hidden">
					</div>
					<div class="production-wrap-cards-hidden">
						<img src="<?php echo get_template_directory_uri(); ?>/img/home/production-bg-hidden-3.svg" alt="" class="production-wrap-cards-hidden__img">
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
						<a href="<?php echo get_category_link(4); ?>" class="news-list-left-wrap-btn">
							<img src="./img/home/header-arrow-right.svg" alt="" class="news-left-wrap-btn__img">
						</a>
						<p class="news-list-left-wrap__desc">Смотреть<br> все новости</p>
					</div>
				</div>
				<div class="news-list-wrap">
					<?php
					$posts = get_posts(array(
						'numberposts' => 5,
						'category'    => 4,
						'orderby'     => 'date',
						// 'orderby'     => '612,616,626',
						'order'       => 'DESC',
						// 'include'     => '612,608,606',
						'include'     => array(),
						'exclude'     => array(),
						'meta_key'    => '',
						'meta_value'  => '',
						'post_type'   => 'post',
						'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
					));

					$result = wp_get_recent_posts($args);

					foreach ($posts as $post) {
					?>
						<a href="<?php echo get_permalink($p['ID']) ?>" class="news-list-wrap-card">
							<p class="news-list-wrap-card__date"><span class="news-list-wrap-card__date news-list-wrap-card__date--bold"><?php the_time('j') ?></span>/ <?php the_time('m') ?></p>
							<p class="news-list-wrap-card__desc"><?php echo $post->post_title ?></p>
							<img src="<?php $imgTm = get_the_post_thumbnail_url(get_the_ID(), "tominiatyre");
												echo empty($imgTm) ? get_bloginfo("template_url") . "/img/no-photo.jpg" : $imgTm; ?>" alt="" class="news-list-wrap-card__img">
						</a>
					<?php
					}
					?>
				</div>
				<div class="news-list-left-wrap-hidden">
					<button class="news-list-left-wrap-btn">
						<img src="<?php echo get_template_directory_uri(); ?>/img/home/header-arrow-right.svg" alt="" class="news-left-wrap-btn__img">
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
				<?
				$args = array(
					'posts_per_page' => 4,
					'post_type' => 'ultra',
					'tax_query' => array(
						array(
							'taxonomy' => 'ultracat',
							'field' => 'id',
							'terms' => array(5)
						)
					)
				);
				$query = new WP_Query($args);

				foreach ($query->posts as $post) {
					$query->the_post();
					get_template_part('template-parts/product-elem');
				}
				wp_reset_postdata();
				?>
			</div>
		</div>
	</section>
	<?php get_template_part('template-parts/subscription-section'); ?>
</main>

<?php get_footer(); ?>