<?php

/*
Template Name: Страница Калькулятор
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

	<section class="calculator">
		<div class="calculator-top">
			<div class="container">
				<h1 class="calculator-top__title"><?php the_title(); ?></h1>
				<div class="calculator-top-buttons">
					<button class="calculator-top-buttons__btn active" data-target="1">По всем товарам</button>
					<button class="calculator-top-buttons__btn" data-target="2">По одному товару</button>
				</div>
			</div>
		</div>
		<div class="calculator-bottom">
			<div class="container">
				<div class="calculator-bottom-wrap">
					<div class="calculator-bottom-wrap-left">
						<h2 class="calculator-bottom-wrap-left__title">укажите параметры помещения</h2>
						<div class="calculator-bottom-wrap-left-form">
							<div class="calculator-bottom-wrap-left-form-block">
								<p class="calculator-bottom-wrap-left-form-block__desc">Тип помещения</p>

								<div class="dropdown dropdown--calc">
									<button class="dropdown__button">Жилое</button>
									<ul class="dropdown-list">
										<li class="dropdown-list__item" data-value="Жилое">Жилое</li>
										<li class="dropdown-list__item" data-value="Нежилое">Нежилое</li>

									</ul>
									<input type="text" class="dropdown__input" value="">
								</div>
							</div>
							<div class="calculator-bottom-wrap-left-form-block">
								<p class="calculator-bottom-wrap-left-form-block__desc">Длина, м</p>
								<input type="number" min="1" max="120" step="0.1" class="calculator-bottom-wrap-left-form-block__input" required>
							</div>
							<div class="calculator-bottom-wrap-left-form-block">
								<p class="calculator-bottom-wrap-left-form-block__desc">Ширина, м</p>
								<input type="number" min="1" max="120" step="0.1" class="calculator-bottom-wrap-left-form-block__input" required>
							</div>
							<div class="calculator-bottom-wrap-left-form-block">
								<p class="calculator-bottom-wrap-left-form-block__desc">Высота, м</p>
								<input type="number" min="1" max="120" step="0.1" class="calculator-bottom-wrap-left-form-block__input" required>
							</div>
						</div>
						<button class="calculator-bottom-wrap-left-add">
							<p class="calculator-bottom-wrap-left-add__desc">Дополнительные параметры</p>
							<img src="<?= get_template_directory_uri(); ?>/img/home/header-menu-arrow-down.svg" alt="" class="calculator-bottom-wrap-left-add__img">
						</button>
						<div class="calculator-bottom-wrap-left-options">
							<div class="calculator-bottom-wrap-left-form-block">
								<p class="calculator-bottom-wrap-left-form-block__desc">Индекс помещения</p>
								<input type="number" min="1" max="120" class="calculator-bottom-wrap-left-form-block__input">
							</div>
							<div class="calculator-bottom-wrap-left-form-block">
								<p class="calculator-bottom-wrap-left-form-block__desc">Коэффициент использования</p>
								<input type="number" min="1" max="120" class="calculator-bottom-wrap-left-form-block__input">
							</div>
							<div class="calculator-bottom-wrap-left-form-block">
								<p class="calculator-bottom-wrap-left-form-block__desc">Отражение</p>
								<div class="calculator-bottom-wrap-left-form-block-wrap">
									<div class="calculator-bottom-wrap-left-form-block-wrap-card">
										<input type="number" min="1" max="120" class="calculator-bottom-wrap-left-form-block-wrap-card__input">
										<p class="calculator-bottom-wrap-left-form-block-wrap-card__desc">Потолок</p>
									</div>
									<div class="calculator-bottom-wrap-left-form-block-wrap-card">
										<input type="number" min="1" max="120" class="calculator-bottom-wrap-left-form-block-wrap-card__input">
										<p class="calculator-bottom-wrap-left-form-block-wrap-card__desc">Стены</p>
									</div>
									<div class="calculator-bottom-wrap-left-form-block-wrap-card">
										<input type="number" min="1" max="120" class="calculator-bottom-wrap-left-form-block-wrap-card__input">
										<p class="calculator-bottom-wrap-left-form-block-wrap-card__desc">Пол</p>
									</div>
								</div>
							</div>
							<div class="calculator-bottom-wrap-left-form-block">
								<p class="calculator-bottom-wrap-left-form-block__desc">Требуемое освещение</p>
								<input type="number" min="10" max="500" class="calculator-bottom-wrap-left-form-block__input">
							</div>
						</div>
						<button class="calculator-bottom-wrap-left-btn">
							<img src="<?php echo get_template_directory_uri(); ?>/img/calculator/calc.svg" alt="" class="calculator-bottom-wrap-left-btn__img">
							<p class="calculator-bottom-wrap-left-btn__desc">рассчитать</p>
						</button>
						<div class="calculator-bottom-wrap-left-email">
							<h2 class="calculator-bottom-wrap-left-email__title">Отправить расчет на электронную почту</h2>
							<input type="email" placeholder="Ваш e-mail" class="calculator-bottom-wrap-left-email__input" required>
							<button class="calculator-bottom-wrap-left-email__btn">отправить</button>
						</div>
					</div>
					<div class="calculator-bottom-wrap-right">
						<div class="calculator-bottom-tab active" data-target="1">
							<div class="calculator-bottom-wrap-right-table">
								<div class="calculator-bottom-wrap-right-table-row">
									<div class="calculator-bottom-wrap-right-table-row-cell">
										<p class="calculator-bottom-wrap-right-table-row-cell__desc">Наименование светильника</p>
									</div>
									<div class="calculator-bottom-wrap-right-table-row-cell">
										<p class="calculator-bottom-wrap-right-table-row-cell__desc">Необходимо</p>
									</div>
								</div>
								<div class="calculator-bottom-wrap-right-table-row">
									<div class="calculator-bottom-wrap-right-table-row-cell">
										<a href="" class="calculator-bottom-wrap-right-table-row-cell__desc">Светильник с декоративной
											подсветкой 12+4Вт 5700К синий 190(160)мм 3 режима DEKOlabs (Номенклатура)</a>
									</div>
									<div class="calculator-bottom-wrap-right-table-row-cell">
										<p class="calculator-bottom-wrap-right-table-row-cell__desc">~ 9 шт.</p>
									</div>
								</div>
								<div class="calculator-bottom-wrap-right-table-row">
									<div class="calculator-bottom-wrap-right-table-row-cell">
										<a href="" class="calculator-bottom-wrap-right-table-row-cell__desc">Светильник 12Вт накладной
											круг белый 3000К металл 115мм DEKOlabs</a>
									</div>
									<div class="calculator-bottom-wrap-right-table-row-cell">
										<p class="calculator-bottom-wrap-right-table-row-cell__desc">~ 9 шт.</p>
									</div>
								</div>
								<div class="calculator-bottom-wrap-right-table-row">
									<div class="calculator-bottom-wrap-right-table-row-cell">
										<a href="" class="calculator-bottom-wrap-right-table-row-cell__desc">Светильник 12Вт накладной
											круг белый 4000К металл 115мм DEKOlabs</a>
									</div>
									<div class="calculator-bottom-wrap-right-table-row-cell">
										<p class="calculator-bottom-wrap-right-table-row-cell__desc">~ 10 шт.</p>
									</div>
								</div>
								<div class="calculator-bottom-wrap-right-table-row">
									<div class="calculator-bottom-wrap-right-table-row-cell">
										<a href="" class="calculator-bottom-wrap-right-table-row-cell__desc">Светильник 12Вт накладной
											квадрат белый 3000К металл 115мм DEKOlabs</a>
									</div>
									<div class="calculator-bottom-wrap-right-table-row-cell">
										<p class="calculator-bottom-wrap-right-table-row-cell__desc">~ 10 шт.</p>
									</div>
								</div>
								<div class="calculator-bottom-wrap-right-table-row">
									<div class="calculator-bottom-wrap-right-table-row-cell">
										<a href="" class="calculator-bottom-wrap-right-table-row-cell__desc">Светильник 12Вт накладной
											квадрат белый 4000К металл 115мм DEKOlabs</a>
									</div>
									<div class="calculator-bottom-wrap-right-table-row-cell">
										<p class="calculator-bottom-wrap-right-table-row-cell__desc">~ 11 шт.</p>
									</div>
								</div>
								<div class="calculator-bottom-wrap-right-table-row">
									<div class="calculator-bottom-wrap-right-table-row-cell">
										<a href="" class="calculator-bottom-wrap-right-table-row-cell__desc">Светильник 12Вт встраиваемый
											круг белый 3000К металл 123(107)мм (ультратонкий) DEKOlabs</a>
									</div>
									<div class="calculator-bottom-wrap-right-table-row-cell">
										<p class="calculator-bottom-wrap-right-table-row-cell__desc">~ 11 шт.</p>
									</div>
								</div>
								<div class="calculator-bottom-wrap-right-table-row">
									<div class="calculator-bottom-wrap-right-table-row-cell">
										<a href="" class="calculator-bottom-wrap-right-table-row-cell__desc">Светильник 12Вт встраиваемый
											квадрат белый 4000К металл 120(105)мм (ультратонкий) DEKOlabs</a>
									</div>
									<div class="calculator-bottom-wrap-right-table-row-cell">
										<p class="calculator-bottom-wrap-right-table-row-cell__desc">~ 11 шт.</p>
									</div>
								</div>
								<div class="calculator-bottom-wrap-right-table-row">
									<div class="calculator-bottom-wrap-right-table-row-cell">
										<a href="" class="calculator-bottom-wrap-right-table-row-cell__desc">Светодиодная лампа А60 Е27
											9Вт 810лм 5700К термопластик белый DEKOlabs</a>
									</div>
									<div class="calculator-bottom-wrap-right-table-row-cell">
										<p class="calculator-bottom-wrap-right-table-row-cell__desc">~ 11 шт.</p>
									</div>
								</div>
								<div class="calculator-bottom-wrap-right-table-row">
									<div class="calculator-bottom-wrap-right-table-row-cell">
										<a href="" class="calculator-bottom-wrap-right-table-row-cell__desc">Светодиодная лампа А55 E27
											7Вт 630лм 5700К термопластик белый DEKOlabs</a>
									</div>
									<div class="calculator-bottom-wrap-right-table-row-cell">
										<p class="calculator-bottom-wrap-right-table-row-cell__desc">~ 13 шт.</p>
									</div>
								</div>
								<div class="calculator-bottom-wrap-right-table-row">
									<div class="calculator-bottom-wrap-right-table-row-cell">
										<a href="" class="calculator-bottom-wrap-right-table-row-cell__desc">Светильник 6Вт встраиваемый
											квадрат белый 3000К металл 85(70)мм (ультратонкий) DEKOlabs</a>
									</div>
									<div class="calculator-bottom-wrap-right-table-row-cell">
										<p class="calculator-bottom-wrap-right-table-row-cell__desc">~ 13 шт.</p>
									</div>
								</div>
								<div class="calculator-bottom-wrap-right-table-row">
									<div class="calculator-bottom-wrap-right-table-row-cell">
										<a href="" class="calculator-bottom-wrap-right-table-row-cell__desc">Светильник с декоративной
											подсветкой 12+4Вт 5700К синий 190(160)мм 3 режима DEKOlabs (Номенклатура)</a>
									</div>
									<div class="calculator-bottom-wrap-right-table-row-cell">
										<p class="calculator-bottom-wrap-right-table-row-cell__desc">~ 9 шт.</p>
									</div>
								</div>
								<div class="calculator-bottom-wrap-right-table-row">
									<div class="calculator-bottom-wrap-right-table-row-cell">
										<a href="" class="calculator-bottom-wrap-right-table-row-cell__desc">Светильник 12Вт накладной
											круг белый 3000К металл 115мм DEKOlabs</a>
									</div>
									<div class="calculator-bottom-wrap-right-table-row-cell">
										<p class="calculator-bottom-wrap-right-table-row-cell__desc">~ 9 шт.</p>
									</div>
								</div>
								<div class="calculator-bottom-wrap-right-table-row">
									<div class="calculator-bottom-wrap-right-table-row-cell">
										<a href="" class="calculator-bottom-wrap-right-table-row-cell__desc">Светильник 12Вт накладной
											круг белый 4000К металл 115мм DEKOlabs</a>
									</div>
									<div class="calculator-bottom-wrap-right-table-row-cell">
										<p class="calculator-bottom-wrap-right-table-row-cell__desc">~ 10 шт.</p>
									</div>
								</div>
								<div class="calculator-bottom-wrap-right-table-row">
									<div class="calculator-bottom-wrap-right-table-row-cell">
										<a href="" class="calculator-bottom-wrap-right-table-row-cell__desc">Светильник 12Вт накладной
											квадрат белый 3000К металл 115мм DEKOlabs</a>
									</div>
									<div class="calculator-bottom-wrap-right-table-row-cell">
										<p class="calculator-bottom-wrap-right-table-row-cell__desc">~ 10 шт.</p>
									</div>
								</div>
								<div class="calculator-bottom-wrap-right-table-row">
									<div class="calculator-bottom-wrap-right-table-row-cell">
										<a href="" class="calculator-bottom-wrap-right-table-row-cell__desc">Светильник 12Вт накладной
											квадрат белый 4000К металл 115мм DEKOlabs</a>
									</div>
									<div class="calculator-bottom-wrap-right-table-row-cell">
										<p class="calculator-bottom-wrap-right-table-row-cell__desc">~ 11 шт.</p>
									</div>
								</div>
								<div class="calculator-bottom-wrap-right-table-row">
									<div class="calculator-bottom-wrap-right-table-row-cell">
										<a href="" class="calculator-bottom-wrap-right-table-row-cell__desc">Светильник 12Вт встраиваемый
											круг белый 3000К металл 123(107)мм (ультратонкий) DEKOlabs</a>
									</div>
									<div class="calculator-bottom-wrap-right-table-row-cell">
										<p class="calculator-bottom-wrap-right-table-row-cell__desc">~ 11 шт.</p>
									</div>
								</div>
								<div class="calculator-bottom-wrap-right-table-row">
									<div class="calculator-bottom-wrap-right-table-row-cell">
										<a href="" class="calculator-bottom-wrap-right-table-row-cell__desc">Светильник 12Вт встраиваемый
											квадрат белый 4000К металл 120(105)мм (ультратонкий) DEKOlabs</a>
									</div>
									<div class="calculator-bottom-wrap-right-table-row-cell">
										<p class="calculator-bottom-wrap-right-table-row-cell__desc">~ 11 шт.</p>
									</div>
								</div>
								<div class="calculator-bottom-wrap-right-table-row">
									<div class="calculator-bottom-wrap-right-table-row-cell">
										<a href="" class="calculator-bottom-wrap-right-table-row-cell__desc">Светодиодная лампа А60 Е27
											9Вт 810лм 5700К термопластик белый DEKOlabs</a>
									</div>
									<div class="calculator-bottom-wrap-right-table-row-cell">
										<p class="calculator-bottom-wrap-right-table-row-cell__desc">~ 11 шт.</p>
									</div>
								</div>
								<div class="calculator-bottom-wrap-right-table-row">
									<div class="calculator-bottom-wrap-right-table-row-cell">
										<a href="" class="calculator-bottom-wrap-right-table-row-cell__desc">Светодиодная лампа А55 E27
											7Вт 630лм 5700К термопластик белый DEKOlabs</a>
									</div>
									<div class="calculator-bottom-wrap-right-table-row-cell">
										<p class="calculator-bottom-wrap-right-table-row-cell__desc">~ 13 шт.</p>
									</div>
								</div>
								<div class="calculator-bottom-wrap-right-table-row">
									<div class="calculator-bottom-wrap-right-table-row-cell">
										<a href="" class="calculator-bottom-wrap-right-table-row-cell__desc">Светильник 6Вт встраиваемый
											квадрат белый 3000К металл 85(70)мм (ультратонкий) DEKOlabs</a>
									</div>
									<div class="calculator-bottom-wrap-right-table-row-cell">
										<p class="calculator-bottom-wrap-right-table-row-cell__desc">~ 13 шт.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="calculator-bottom-tab" data-target="2">
							<div class="calculator-bottom-wrap-right-solo">
								<div class="calculator-bottom-wrap-right-solo-search">
									<img src="<?php echo get_template_directory_uri(); ?>/img/home/zoom.svg" alt="" class="calculator-bottom-wrap-right-solo-search__img">
									<input name="search" type="text" class="calculator-bottom-wrap-right-solo-search__input" placeholder="Введите название или артикул..." minlength="2" maxlength="40" required>
									<button class="calculator-bottom-wrap-right-solo-search__btn">найти</button>
									<button class="files-search-375-btn">
										<img src="<?php echo get_template_directory_uri(); ?>/img/home/zoom.svg" alt="" class="files-search-375-btn__img">
									</button>
								</div>
								<div class="calculator-bottom-wrap-right-solo-wrap">
									<img src="<?php echo get_template_directory_uri(); ?>/img/home/catalog-1.png" alt="" class="calculator-bottom-wrap-right-solo-wrap__img">
									<div class="calculator-bottom-wrap-right-solo-wrap-right">
										<a href="" class="calculator-bottom-wrap-right-solo-wrap-right__name">Светильник с декоративной
											подсветкой 12+4Вт 5700К синий 190(160)мм 3 режима DEKOlabs (Номенклатура)</a>
										<p class="calculator-bottom-wrap-right-solo-wrap-right__desc">Необходимо <br>
											<span class="calculator-bottom-wrap-right-solo-wrap-right__desc--bold">~ 9 шт.</span>
										</p>
										<p class="calculator-bottom-wrap-right-solo-wrap-right__desc">Рекомендуемая сетка <br>
											<span class="calculator-bottom-wrap-right-solo-wrap-right__desc--bold">2×4</span>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<a href="#" class="calculator-link-375">
				<img src="<?php echo get_template_directory_uri(); ?>/img/calculator/calc-mail-375.svg" alt="" class="calculator-link-375__img">
			</a>
		</div>
	</section>
	<?php get_template_part('template-parts/subscription-section'); ?>
</main>

<?php get_footer(); ?>