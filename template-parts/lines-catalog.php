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
				<form method="get" class="lines-wrap-filter">
					<div class="lines-wrap-filter-card">
						<button type = "button" class="lines-wrap-filter-card-btn">
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
						<button type = "button" class="dropdown__button dropdown__button--lines">Тип диодов</button>
						<ul class="dropdown-list dropdown-list--lines">
							<li class="dropdown-list__item" data-value="first">1</li>
							<li class="dropdown-list__item" data-value="first">2</li>
							<li class="dropdown-list__item" data-value="first">3</li>
						</ul>
						<input type="text" class="dropdown__input" value="">
					</div>
					<div class="lines-wrap-filter-card">
						<button type = "button" class="lines-wrap-filter-card-btn">
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
						<button type = "button" class="lines-wrap-filter-card-btn">
							<h4 class="lines-wrap-filter-card-btn__title">Мощность</h4>
							<img src="<?= get_template_directory_uri(); ?>/img/home/header-menu-arrow-down.svg" alt="" class="lines-wrap-filter-card-btn__img">
						</button>
						<div class="lines-wrap-filter-card-features lines-wrap-power">
						<input id="vt24" type="checkbox" value="24" name="power">	
						<label for="vt24" class="lines-wrap-filter-card-features__btn option">24 Вт</label>
						
						<input id="vt30" type="checkbox" value="30" name="power">
						<label for="vt30" class="lines-wrap-filter-card-features__btn option">30 Вт</label>
						
						<input id="vt36" type="checkbox" value="36" name="power">
						<label for="vt36" class="lines-wrap-filter-card-features__btn option">36 Вт</label>
							
						<input id="vt42" type="checkbox" value="42" name="power">
						<label for="vt42" class="lines-wrap-filter-card-features__btn option">42 Вт</label>

						<input id="vt45" type="checkbox" value="45" name="power">
						<label for="vt45" class="lines-wrap-filter-card-features__btn option">45 Вт</label>
						
						<input id="vt48" type="checkbox" value="48" name="power">
						<label for="vt48" class="lines-wrap-filter-card-features__btn option">48 Вт</label>

						<input id="vt54" type="checkbox" value="54" name="power">
						<label for="vt54" class="lines-wrap-filter-card-features__btn option">54 Вт</label>

						<input id="vt60" type="checkbox" value="60" name="power">
						<label for="vt60" class="lines-wrap-filter-card-features__btn option">60 Вт</label>

						<input id="vt63" type="checkbox" value="63" name="power">
						<label for="vt63" class="lines-wrap-filter-card-features__btn option">63 Вт</label>

						<input id="vt66" type="checkbox" value="66" name="power">
						<label for="vt66" class="lines-wrap-filter-card-features__btn option">66 Вт</label>

						<input id="vt72" type="checkbox" value="72" name="power">
						<label for="vt72" class="lines-wrap-filter-card-features__btn option">72 Вт</label>

						<input id="vt81" type="checkbox" value="81" name="power">
						<label for="vt81" class="lines-wrap-filter-card-features__btn option">81 Вт</label>
						
						<input id="vt90" type="checkbox" value="90" name="power">
						<label for="vt90" class="lines-wrap-filter-card-features__btn option">90 Вт	</label>

						<input id="vt108" type="checkbox" value="108" name="power">
						<label for="vt108" class="lines-wrap-filter-card-features__btn option">108 Вт</label>

						</div>
					</div>
					<div class="dropdown dropdown--lines">
						<button type = "button" class="dropdown__button dropdown__button--lines">Световой поток</button>
						<ul class="dropdown-list dropdown-list--lines">
							<li class="dropdown-list__item" data-value="first">3600 Лм</li>
							<li class="dropdown-list__item" data-value="first">4000 Лм</li>
							<li class="dropdown-list__item" data-value="first">4800 Лм</li>
						</ul>
						<input type="text" class="dropdown__input" value="">
					</div>
					<div class="lines-wrap-filter-card">
						<button type = "button" class="lines-wrap-filter-card-btn">
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
						<button type = "button" class="lines-wrap-filter-card-btn">
							<h4 class="lines-wrap-filter-card-btn__title">Световая температура</h4>
							<img src="<?= get_template_directory_uri(); ?>/img/home/header-menu-arrow-down.svg" alt="" class="lines-wrap-filter-card-btn__img">
						</button>
						<div class="lines-wrap-filter-card-range">
							<label for="" class="lines-wrap-filter-card-range-label">
								<span class="lines-wrap-filter-card-range__span">от</span>
								<input id="input-0" type="number" name="colour_temp_from" value="0" min="0" max="6900" step="1" class="lines-wrap-filter-card-range__input">
								<span class="lines-wrap-filter-card-range__span">К</span>
							</label>
							<label for="" class="lines-wrap-filter-card-range-label">
								<span class="lines-wrap-filter-card-range__span">до</span>
								<input id="input-1" type="number" name="colour_temp_to" value="1000" min="0" max="6900" step="1" class="lines-wrap-filter-card-range__input">
								<span class="lines-wrap-filter-card-range__span">К</span>
							</label>
							<div id="range-slider" class="lines-wrap-filter-card-range__slider"></div>
						</div>
					</div>
					<button type="submit" class="lines-wrap-filter__btn">применить фильтр</button>
					<div class="lines-wrap-filter-clear">
						<button onclick = "document.location.href = location.protocol + '//' + location.host + location.pathname; return false;" class="lines-wrap-filter-clear__btn">Очистить фильтр</button>
					</div>
				</form>
				<div class="lines-wrap-tables">
					<!-- Цикл с выводом дочерних категорий таксономии -->
					<?php
					$termID = get_queried_object()->term_id;
					$taxonomyName = "ultracat";
					$termchildren = get_term_children($termID, $taxonomyName);
					foreach ($termchildren as $child) {
						$term = get_term_by('id', $child, $taxonomyName);
						$term_id = $term->term_taxonomy_id; ?>
						<div class="lines-wrap-tables-table">
							<h2 class="lines-wrap-tables-table__title"><?= $term->name; ?></h2>

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
								<?php

								$arg = $wp_query->query;
								$startClrT = empty($_REQUEST["colour_temp_from"]) ? "0" : $_REQUEST["colour_temp_from"];
								$endClrT = empty($_REQUEST["colour_temp_to"]) ? PHP_INT_MAX : $_REQUEST["colour_temp_to"];

								$metaquery = array(
									'relation' => 'AND',

									'clrtStart' => array(
										'key'     => '_offer_colour_temp',
										'value' => $startClrT,
										'compare' => '>=',
										'type'    => 'NUMERIC',
									),

									'clrtEnd' => array(
										'key'     => '_offer_colour_temp',
										'value' => $endClrT,
										'compare' => '<=',
										'type'    => 'NUMERIC',
									)
								);

								$mypost = array(
									'post_type' => 'ultra',
									'posts_per_page' => -1,
									'orderby' => 'title',
									'order' => 'ASC',
									'exclude' => array(417),
									'tax_query' => array(
										array(
											'taxonomy' => 'ultracat',
											'field' => 'id',
											'terms' => strval($term->term_id)
										),
									),

									'meta_query' => $metaquery
								);
								$loop = new WP_Query($mypost);
								?>
								<?php while ($loop->have_posts()) : $loop->the_post(); ?>
									<!-- Цикл с выводом записей дочерних категорий таксономии -->
									<a href="<?php echo get_permalink(); ?>" class="lines-wrap-tables-table-rows-row">
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
									</a>
									<!-- Конец цикла -->
								<?php endwhile; ?>
							</div>
						</div>
					<?php } ?>
					<!-- Конец цикла -->
					<!-- <div class="lines-wrap-tables-wrap">
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
					</div> -->
				</div>
			</div>
		</div>
	</section>
	<?php get_template_part('template-parts/subscription-section'); ?>
</main>

<?php get_footer(); ?>