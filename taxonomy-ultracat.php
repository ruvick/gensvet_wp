<?php get_header(); ?>

<?php get_template_part('template-parts/header-section'); ?>

<main class="main">

	<section class="breadcrumb">
		<div class="container">
			<div class="breadcrumb-wrap">
				<?php if (function_exists('kama_breadcrumbs')) kama_breadcrumbs(); ?>
			</div>
		</div>
	</section>

	<section class="lines">
		<div class="container">
			<h1 class="lines__title"><?php single_cat_title('', true); ?></h1>
			<button class="lines-button-767">
				<img src="<?php echo get_template_directory_uri(); ?>/img/lines/lines-button.svg" alt="" class="lines-button-767__img">
				<p class="lines-button-767__desc">фильтр</p>
				<p class="lines-button-767__count">3</p>
				<img src="<?= get_template_directory_uri(); ?>/img/home/header-menu-arrow-down.svg" alt="" class="lines-button-767-arrow__img">
			</button>
			<div class="lines-wrap">
				<div class="lines-wrap-filter">
					<div class="lines-wrap-filter-card">
						<button class="lines-wrap-filter-card-btn">
							<h4 class="lines-wrap-filter-card-btn__title">Размеры</h4>
							<img src="<?= get_template_directory_uri(); ?>/img/home/header-menu-arrow-down.svg" alt="" class="lines-wrap-filter-card-btn__img">
						</button>
						<div class="lines-wrap-filter-card-features">
							<ul class="lines-wrap-filter-card-features-list">
								<li class="lines-wrap-filter-card-features-list-item">
									<input name="user-check" type="checkbox" class="subscription-wrap-form-wrap__checkbox-hidden" required hidden checked data-value="595×595×40">
									<span class="subscription-wrap-form-wrap__checkbox"></span>
									<p class="lines-wrap-filter-card-features-list-item__desc">595×595×40</p>
								</li>
								<li class="lines-wrap-filter-card-features-list-item">
									<input name="user-check" type="checkbox" class="subscription-wrap-form-wrap__checkbox-hidden" required hidden checked data-value="595×595×40">
									<span class="subscription-wrap-form-wrap__checkbox"></span>
									<p class="lines-wrap-filter-card-features-list-item__desc">595×595×40</p>

								</li>
								<li class="lines-wrap-filter-card-features-list-item">
									<input name="user-check" type="checkbox" class="subscription-wrap-form-wrap__checkbox-hidden" required hidden checked data-value="595×595×40">
									<span class="subscription-wrap-form-wrap__checkbox"></span>
									<p class="lines-wrap-filter-card-features-list-item__desc">595×595×40</p>
								</li>
							</ul>
						</div>
					</div>
					<div class="dropdown dropdown--lines">
						<button class="dropdown__button dropdown__button--lines">Тип диодов</button>
						<ul class="dropdown-list dropdown-list--lines">
							<li class="dropdown-list__item" data-value="first">1</li>
							<li class="dropdown-list__item" data-value="first">2</li>
							<li class="dropdown-list__item" data-value="first">3</li>
						</ul>
						<input type="text" class="dropdown__input" value="">
					</div>
					<div class="lines-wrap-filter-card">
						<button class="lines-wrap-filter-card-btn">
							<h4 class="lines-wrap-filter-card-btn__title">Комплектация</h4>
							<img src="<?= get_template_directory_uri(); ?>/img/home/header-menu-arrow-down.svg" alt="" class="lines-wrap-filter-card-btn__img">
						</button>
						<div class="lines-wrap-filter-card-features">
							<ul class="lines-wrap-filter-card-features-list">
								<li class="lines-wrap-filter-card-features-list-item">
									<input name="user-check" type="checkbox" class="subscription-wrap-form-wrap__checkbox-hidden" required hidden checked data-value="595×595×40">
									<span class="subscription-wrap-form-wrap__checkbox"></span>
									<p class="lines-wrap-filter-card-features-list-item__desc">Только с драйвером
									</p>
								</li>
							</ul>
						</div>
					</div>
					<div class="lines-wrap-filter-card">
						<button class="lines-wrap-filter-card-btn">
							<h4 class="lines-wrap-filter-card-btn__title">Мощность</h4>
							<img src="<?= get_template_directory_uri(); ?>/img/home/header-menu-arrow-down.svg" alt="" class="lines-wrap-filter-card-btn__img">
						</button>
						<div class="lines-wrap-filter-card-features">
							<button class="lines-wrap-filter-card-features__btn">24 Вт</button>
							<button class="lines-wrap-filter-card-features__btn">30 Вт</button>
							<button class="lines-wrap-filter-card-features__btn">36 Вт</button>
							<button class="lines-wrap-filter-card-features__btn">42 Вт</button>
							<button class="lines-wrap-filter-card-features__btn">45 Вт</button>
							<button class="lines-wrap-filter-card-features__btn">48 Вт</button>
							<button class="lines-wrap-filter-card-features__btn">54 Вт</button>
							<button class="lines-wrap-filter-card-features__btn">60 Вт</button>
							<button class="lines-wrap-filter-card-features__btn">63 Вт</button>
							<button class="lines-wrap-filter-card-features__btn">66 Вт</button>
							<button class="lines-wrap-filter-card-features__btn">72 Вт</button>
							<button class="lines-wrap-filter-card-features__btn">81 Вт</button>
							<button class="lines-wrap-filter-card-features__btn">81 Вт</button>
							<button class="lines-wrap-filter-card-features__btn">90 Вт</button>
							<button class="lines-wrap-filter-card-features__btn">108 Вт</button>
						</div>
					</div>
					<div class="dropdown dropdown--lines">
						<button class="dropdown__button dropdown__button--lines">Световой поток</button>
						<ul class="dropdown-list dropdown-list--lines">
							<li class="dropdown-list__item" data-value="first">3600 Лм</li>
							<li class="dropdown-list__item" data-value="first">4000 Лм</li>
							<li class="dropdown-list__item" data-value="first">4800 Лм</li>
						</ul>
						<input type="text" class="dropdown__input" value="">
					</div>
					<div class="lines-wrap-filter-card">
						<button class="lines-wrap-filter-card-btn">
							<h4 class="lines-wrap-filter-card-btn__title">Рассеиватель</h4>
							<img src="<?= get_template_directory_uri(); ?>/img/home/header-menu-arrow-down.svg" alt="" class="lines-wrap-filter-card-btn__img">
						</button>
						<div class="lines-wrap-filter-card-features">
							<ul class="lines-wrap-filter-card-features-list">
								<li class="lines-wrap-filter-card-features-list-item">
									<input name="user-check" type="checkbox" class="subscription-wrap-form-wrap__checkbox-hidden" required hidden checked data-value="595×595×40">
									<span class="subscription-wrap-form-wrap__checkbox"></span>
									<p class="lines-wrap-filter-card-features-list-item__desc">Опал</p>
								</li>
								<li class="lines-wrap-filter-card-features-list-item">
									<input name="user-check" type="checkbox" class="subscription-wrap-form-wrap__checkbox-hidden" required hidden checked data-value="595×595×40">
									<span class="subscription-wrap-form-wrap__checkbox"></span>
									<p class="lines-wrap-filter-card-features-list-item__desc">Матовый</p>
								</li>
								<li class="lines-wrap-filter-card-features-list-item">
									<input name="user-check" type="checkbox" class="subscription-wrap-form-wrap__checkbox-hidden" required hidden checked data-value="595×595×40">
									<span class="subscription-wrap-form-wrap__checkbox"></span>
									<p class="lines-wrap-filter-card-features-list-item__desc">Глянцевый</p>
								</li>
							</ul>
						</div>
					</div>
					<div class="lines-wrap-filter-card">
						<button class="lines-wrap-filter-card-btn">
							<h4 class="lines-wrap-filter-card-btn__title">Световая температура</h4>
							<img src="<?= get_template_directory_uri(); ?>/img/home/header-menu-arrow-down.svg" alt="" class="lines-wrap-filter-card-btn__img">
						</button>
						<div class="lines-wrap-filter-card-range">
							<label for="" class="lines-wrap-filter-card-range-label">
								<span class="lines-wrap-filter-card-range__span">от</span>
								<input id="input-0" type="number" name="от" value="2100" min="1000" max="6900" step="1000" class="lines-wrap-filter-card-range__input">
								<span class="lines-wrap-filter-card-range__span">К</span>
							</label>
							<label for="" class="lines-wrap-filter-card-range-label">
								<span class="lines-wrap-filter-card-range__span">до</span>
								<input id="input-1" type="number" name="от" value="5000" min="1000" max="6900" step="1000" class="lines-wrap-filter-card-range__input">
								<span class="lines-wrap-filter-card-range__span">К</span>
							</label>
							<div id="range-slider" class="lines-wrap-filter-card-range__slider"></div>

							<!--                                 
                                <input type="range" min="1000" step="100" max="6900" value="2100" class="lines-wrap-filter-card-features__range">
                                <input type="range" min="1100" step="100" max="7000" value="5000" class="lines-wrap-filter-card-features__range"> -->
						</div>
					</div>
					<button class="lines-wrap-filter__btn">применить фильтр</button>
					<div class="lines-wrap-filter-clear">
						<button class="lines-wrap-filter-clear__btn">Очистить фильтр</button>
					</div>
				</div>
				<div class="lines-wrap-tables">

					<div class="lines-wrap-tables-table">
						<h2 class="lines-wrap-tables-table__title">серия ГСО-Премьер</h2>

						<div class="lines-wrap-tables-table-rows">
							<div class="lines-wrap-tables-table-rows-row">
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">Артикул</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">Мощность</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">Световой поток</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">Размер</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">Цветовая <br>температура
									</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">Рассеиватель</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">Световой <br>эффект</p>
								</div>
							</div>

							<!-- Раскомментировать, сейчас выводит пустые значения -->
							<!-- <a href="#" class="lines-wrap-tables-table-rows-row">
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">
										<? echo carbon_get_post_meta(get_the_ID(), "offer_sku"); ?>
									</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">
										<? echo carbon_get_post_meta(get_the_ID(), "offer_power"); ?> Вт
									</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">
										<? echo carbon_get_post_meta(get_the_ID(), "offer_light_flow"); ?> Лм
									</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">
										<? echo carbon_get_post_meta(get_the_ID(), "offer_size"); ?>
									</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">
										<? echo carbon_get_post_meta(get_the_ID(), "offer_colour_temp"); ?> К
									</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">
										<? echo carbon_get_post_meta(get_the_ID(), "offer_diffuser"); ?>
									</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">
										<? echo carbon_get_post_meta(get_the_ID(), "offer_light_effect"); ?>
									</p>
								</div>
							</a> -->

							<a href="#" class="lines-wrap-tables-table-rows-row">
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">ГСО-0001</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">36 Вт</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">3600 Лм</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">595×595×40</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">4000 К</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">опал</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">стандартный</p>
								</div>
							</a>

							<a href="#" class="lines-wrap-tables-table-rows-row">
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">ГСО-0002</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">36 Вт</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">3600 Лм</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">595×595×40</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">5700 К</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">опал</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">стандартный</p>
								</div>
							</a>

							<a href="#" class="lines-wrap-tables-table-rows-row">
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">ГСО-0001</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">36 Вт</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">3600 Лм</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">595×595×40</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">4000 К</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">опал</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">стандартный</p>
								</div>
							</a>

							<a href="#" class="lines-wrap-tables-table-rows-row">
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">ГСО-0002</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">36 Вт</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">3600 Лм</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">595×595×40</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">5700 К</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">опал</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">стандартный</p>
								</div>
							</a>

							<a href="#" class="lines-wrap-tables-table-rows-row">
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">ГСО-0001</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">36 Вт</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">3600 Лм</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">595×595×40</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">4000 К</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">опал</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">стандартный</p>
								</div>
							</a>

							<a href="#" class="lines-wrap-tables-table-rows-row">
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">ГСО-0002</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">36 Вт</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">3600 Лм</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">595×595×40</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">5700 К</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">опал</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">стандартный</p>
								</div>
							</a>

						</div>

					</div>

					<div class="lines-wrap-tables-table">
						<h2 class="lines-wrap-tables-table__title">серия ГСО-ПРЕМИУМ</h2>
						<div class="lines-wrap-tables-table-rows">
							<div class="lines-wrap-tables-table-rows-row">
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">Артикул</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">Мощность</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">Световой поток</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">Размер</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">Цветовая <br>температура
									</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">Рассеиватель</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">Световой <br>эффект</p>
								</div>
							</div>
							<a href="#" class="lines-wrap-tables-table-rows-row">
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">ГСО-0004</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">100 Вт</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">4000 Лм</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">595×595×40</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">4000 К</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">опал</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">заливной</p>
								</div>
							</a>
							<a href="#" class="lines-wrap-tables-table-rows-row">
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">ГСО-0005</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">110 Вт</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">4000 Лм</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">595×595×40</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">5700 К</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">опал</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">заливной</p>
								</div>
							</a>
							<a href="#" class="lines-wrap-tables-table-rows-row">
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">ГСО-0004</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">100 Вт</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">4000 Лм</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">595×595×40</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">4000 К</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">опал</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">заливной</p>
								</div>
							</a>
							<a href="#" class="lines-wrap-tables-table-rows-row">
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">ГСО-0005</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">110 Вт</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">4000 Лм</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">595×595×40</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">5700 К</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">опал</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">заливной</p>
								</div>
							</a>
							<a href="#" class="lines-wrap-tables-table-rows-row">
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">ГСО-0004</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">100 Вт</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">4000 Лм</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">595×595×40</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">4000 К</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">опал</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">заливной</p>
								</div>
							</a>
						</div>
					</div>
					<div class="lines-wrap-tables-table">
						<h2 class="lines-wrap-tables-table__title">серия ГСО-Премьер/150</h2>
						<div class="lines-wrap-tables-table-rows">
							<div class="lines-wrap-tables-table-rows-row">
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">Артикул</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">Мощность</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">Световой поток</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">Размер</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">Цветовая <br>температура
									</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">Рассеиватель</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">Световой <br>эффект</p>
								</div>
							</div>
							<a href="#" class="lines-wrap-tables-table-rows-row">
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">ГСО-0006</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">150 Вт</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">4800 Лм</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">595×595×40</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">4000 К</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">опал</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">яркий</p>
								</div>
							</a>
							<a href="#" class="lines-wrap-tables-table-rows-row">
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">ГСО-0007</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">150 Вт</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">4800 Лм</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">595×595×40</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">5700 К</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">опал</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">яркий</p>
								</div>
							</a>
							<a href="#" class="lines-wrap-tables-table-rows-row">
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">ГСО-0006</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">150 Вт</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">4800 Лм</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">595×595×40</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">4000 К</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">опал</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">яркий</p>
								</div>
							</a>
							<a href="#" class="lines-wrap-tables-table-rows-row">
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">ГСО-0007</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">150 Вт</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">4800 Лм</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">595×595×40</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">5700 К</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">опал</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">яркий</p>
								</div>
							</a>
							<a href="#" class="lines-wrap-tables-table-rows-row">
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">ГСО-0006</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">150 Вт</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">4800 Лм</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">595×595×40</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">4000 К</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">опал</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">яркий</p>
								</div>
							</a>
							<a href="#" class="lines-wrap-tables-table-rows-row">
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">ГСО-0007</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">150 Вт</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">4800 Лм</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">595×595×40</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">5700 К</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">опал</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">яркий</p>
								</div>
							</a>
							<a href="#" class="lines-wrap-tables-table-rows-row">
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">ГСО-0006</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">150 Вт</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">4800 Лм</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">595×595×40</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">4000 К</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">опал</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">яркий</p>
								</div>
							</a>
							<a href="#" class="lines-wrap-tables-table-rows-row">
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">ГСО-0007</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">150 Вт</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">4800 Лм</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">595×595×40</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">5700 К</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">опал</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">яркий</p>
								</div>
							</a>
							<a href="#" class="lines-wrap-tables-table-rows-row">
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">ГСО-0006</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">150 Вт</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">4800 Лм</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">595×595×40</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">4000 К</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">опал</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">яркий</p>
								</div>
							</a>
							<a href="#" class="lines-wrap-tables-table-rows-row">
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">ГСО-0007</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">150 Вт</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">4800 Лм</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">595×595×40</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">5700 К</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">опал</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">яркий</p>
								</div>
							</a>
							<a href="#" class="lines-wrap-tables-table-rows-row">
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">ГСО-0006</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">150 Вт</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">4800 Лм</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">595×595×40</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">4000 К</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">опал</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">яркий</p>
								</div>
							</a>
							<a href="#" class="lines-wrap-tables-table-rows-row">
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">ГСО-0007</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">150 Вт</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">4800 Лм</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">595×595×40</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">5700 К</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">опал</p>
								</div>
								<div class="lines-wrap-tables-table-rows-row-cell">
									<p class="lines-wrap-tables-table-rows-row-cell__desc">яркий</p>
								</div>
							</a>
						</div>
					</div>
					<div class="lines-wrap-tables-wrap">
						<div class="lines-wrap-tables-wrap-buttons">
							<button class="lines-wrap-tables-wrap-buttons__btn active">1</button>
							<button class="lines-wrap-tables-wrap-buttons__btn">2</button>
							<button class="lines-wrap-tables-wrap-buttons__btn">3</button>
							<button class="lines-wrap-tables-wrap-buttons__btn">4</button>
							<button class="lines-wrap-tables-wrap-buttons__btn">5</button>
							<button class="lines-wrap-tables-wrap-buttons__btn">6</button>
							<button class="lines-wrap-tables-wrap-buttons__btn">7</button>
						</div>
						<div class="lines-wrap-tables-wrap-quant">
							<p class="lines-wrap-tables-wrap-quant__desc">Товаров <br>на странице:</p>
							<!-- <select class="lines-wrap-tables-wrap-quant-select">
                                    <option class="lines-wrap-tables-wrap-quant-select__num">50</option>
                                    <option class="lines-wrap-tables-wrap-quant-select__num">100</option>
                                    <option class="lines-wrap-tables-wrap-quant-select__num">200</option>  
                                </select> -->
							<div class="dropdown dropdown--files">
								<button class="dropdown__button dropdown__button--files">200</button>
								<ul class="dropdown-list dropdown-list--files">
									<li class="dropdown-list__item dropdown-list__item--files" data-value="first">200</li>
									<li class="dropdown-list__item dropdown-list__item--files" data-value="second">100</li>
									<li class="dropdown-list__item dropdown-list__item--files" data-value="third">50</li>
								</ul>
								<input type="text" class="dropdown__input" value="">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php get_template_part('template-parts/subscription-section'); ?>
</main>

<?php get_footer(); ?>