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
			<h1 class="calculator-top__title"><?php the_title(); ?></h1>
			<p>Страница в разработке...</p>
		</div>
	</section>

	<section class="calculator">
		<!-- <div class="calculator-top">
			<div class="container">
				<h1 class="calculator-top__title"><?php the_title(); ?></h1>
				<div class="calculator-top-buttons">
					<button class="calculator-top-buttons__btn active" data-target="1">По всем товарам</button>
					<button class="calculator-top-buttons__btn" data-target="2">По одному товару</button>
				</div>
			</div>
		</div> -->
		<!-- <div class="calculator-bottom">
			<div class="container">
				<div class="calculator-bottom-wrap">
					<div class="calculator-bottom-wrap-left">
						<h2 class="calculator-bottom-wrap-left__title">укажите параметры помещения</h2>
						<form method = "GET" id = "calcParamForm">
							<div class="calculator-bottom-wrap-left-form">
								<div class="calculator-bottom-wrap-left-form-block">
									<p class="calculator-bottom-wrap-left-form-block__desc">Длина, м</p>
									<input type="number" min="1" max="120" step="0.01" name = "pom_a" value = "<? echo !empty($_REQUEST["pom_a"])?$_REQUEST["pom_a"]:"6"; ?>" class="calculator-bottom-wrap-left-form-block__input" required>
								</div>
								<div class="calculator-bottom-wrap-left-form-block">
									<p class="calculator-bottom-wrap-left-form-block__desc">Ширина, м</p>
									<input type="number" min="1" max="120" step="0.01" name = "pom_b" value = "<? echo !empty($_REQUEST["pom_b"])?$_REQUEST["pom_b"]:"9"; ?>" class="calculator-bottom-wrap-left-form-block__input" required>
								</div>
								<div class="calculator-bottom-wrap-left-form-block">
									<p class="calculator-bottom-wrap-left-form-block__desc">Высота, м</p>
									<input type="number" min="1" max="120" step="0.01" name = "pom_h" value = "<? echo !empty($_REQUEST["pom_h"])?$_REQUEST["pom_h"]:"3.2"; ?>" class="calculator-bottom-wrap-left-form-block__input" required>
								</div>
								<div class="calculator-bottom-wrap-left-form-block">
									<p class="calculator-bottom-wrap-left-form-block__desc">Требуемое освещение, Лк</p>
									<input type="number" min="10" max="500" name = "treb_osv" value = "<? echo !empty($_REQUEST["treb_osv"])?$_REQUEST["treb_osv"]:"300"; ?>" class="calculator-bottom-wrap-left-form-block__input" required>
								</div>
								<div class="calculator-bottom-wrap-left-form-block">
									<p class="calculator-bottom-wrap-left-form-block__desc">Высота расчетной поверхности, м</p>
									<input type="number" min="0" max="120" step="0.01" name = "pom_h2" value = "<? echo !empty($_REQUEST["pom_h2"])?$_REQUEST["pom_h2"]:"0.8"; ?>" class="calculator-bottom-wrap-left-form-block__input" required>
								</div>
							</div>
							<button type = "button"class="calculator-bottom-wrap-left-add">
								<p class="calculator-bottom-wrap-left-add__desc">Дополнительные параметры</p>
								<img src="<?= get_template_directory_uri(); ?>/img/home/header-menu-arrow-down.svg" alt="" class="calculator-bottom-wrap-left-add__img">
							</button>
							<div class="calculator-bottom-wrap-left-options">
								<div class="calculator-bottom-wrap-left-form-block">
									<p class="calculator-bottom-wrap-left-form-block__desc">Коэффициент использования</p>
									<input type="number" min="0" max="120" step="0.01" name = "koof_isp" value = "<? echo !empty($_REQUEST["koof_isp"])?$_REQUEST["koof_isp"]:"1"; ?>" class="calculator-bottom-wrap-left-form-block__input" required>
								</div>
								<div class="calculator-bottom-wrap-left-form-block">
									<p class="calculator-bottom-wrap-left-form-block__desc">Индекс помещения</p>
									<input type="text" min="1" max="120" name = "pom_type" class="calculator-bottom-wrap-left-form-block__input" value = "<? echo !empty($_REQUEST["pom_type"])?$_REQUEST["pom_type"]:"1"; ?>">
								</div>
								<div class="calculator-bottom-wrap-left-form-block">
									<p class="calculator-bottom-wrap-left-form-block__desc">Отражение</p>
									<div class="calculator-bottom-wrap-left-form-block-wrap">
										<div class="calculator-bottom-wrap-left-form-block-wrap-card">
											<input type="number" min="1" max="120" class="calculator-bottom-wrap-left-form-block-wrap-card__input" value = "70">
											<p class="calculator-bottom-wrap-left-form-block-wrap-card__desc">Потолок</p>
										</div>
										<div class="calculator-bottom-wrap-left-form-block-wrap-card">
											<input type="number" min="1" max="120" class="calculator-bottom-wrap-left-form-block-wrap-card__input" value = "50">
											<p class="calculator-bottom-wrap-left-form-block-wrap-card__desc">Стены</p>
										</div>
										<div class="calculator-bottom-wrap-left-form-block-wrap-card">
											<input type="number" min="1" max="120" class="calculator-bottom-wrap-left-form-block-wrap-card__input" value = "20">
											<p class="calculator-bottom-wrap-left-form-block-wrap-card__desc">Пол</p>
										</div>
									</div>
								</div>
							</div>
							<button name = "calc_all"  type = "submit" class="calculator-bottom-wrap-left-btn">
								<img src="<?php echo get_template_directory_uri(); ?>/img/calculator/calc.svg" alt="" class="calculator-bottom-wrap-left-btn__img">
								<p class="calculator-bottom-wrap-left-btn__desc">рассчитать</p>
							</button>
						</form>
						<div class="calculator-bottom-wrap-left-email">
							<h2 class="calculator-bottom-wrap-left-email__title">Отправить расчет на электронную почту</h2>
							<div class="calculator-bottom-wrap-left-email-wrap">
								<input type="email" placeholder="Ваш e-mail" class="calculator-bottom-wrap-left-email__input" required>
							</div>
							<div class="SendetMsg" style="display:none;">
								<input type="email" disabled placeholder="Ваша заявка отправлена!" class="calculator-bottom-wrap-left-email__input" required>
							</div>
							<button class="calculator-bottom-wrap-left-email__btn calculatorFormBtn">отправить</button>
						</div>
					</div>
					<div class="calculator-bottom-wrap-right">
						<div class="calculator-bottom-tab active" data-target="1">
							<div class="calculator-bottom-wrap-right-table" id = "calcAjax" data-countinpage = "10">
								<div class="calculator-bottom-wrap-right-table-row">
									<div class="calculator-bottom-wrap-right-table-row-cell">
										<p class="calculator-bottom-wrap-right-table-row-cell__desc">Наименование светильника</p>
									</div>
									<div class="calculator-bottom-wrap-right-table-row-cell">
										<p class="calculator-bottom-wrap-right-table-row-cell__desc">Необходимо</p>
									</div>
								</div>

								<?
										$queryParam = array(
											'post_type' => 'ultra',
											'posts_per_page' => 10,
										);
									
										$queryCalc = new WP_Query($queryParam);
									

										// echo "<pre>";
										// print_r($queryCalc);
										// echo "</pre>";

										

										foreach ($queryCalc->posts as $tovarLg) {
											// if (isset($_REQUEST["calc_all"])) {
												$tov_light_flow = carbon_get_post_meta($tovarLg->ID, "offer_light_flow");  //сетовой поток
												$koof_zap = empty($_REQUEST["pom_type"])?"1":$_REQUEST["pom_type"];
												$dlinna = empty($_REQUEST["pom_a"])?"6":$_REQUEST["pom_a"];
												$shirina = empty($_REQUEST["pom_b"])?"9":$_REQUEST["pom_b"];
												$visota = empty($_REQUEST["pom_h"])?"3.2":$_REQUEST["pom_h"];
												$visotaRp = empty($_REQUEST["pom_h2"])?"0.8":$_REQUEST["pom_h2"];
												$koof_isp = empty($_REQUEST["koof_isp"])?"1":$_REQUEST["koof_isp"];
												$teb_osv = empty($_REQUEST["treb_osv"])?"300":$_REQUEST["treb_osv"];


												$count = get_count_lamp(
													$tov_light_flow,
													$koof_zap,
													$dlinna,
													$shirina,
													$visota,
													$visotaRp,
													$koof_isp,
													$teb_osv
												);
											// }
											
										
								?>

								
								<div class="calculator-bottom-wrap-right-table-row">
									<div class="calculator-bottom-wrap-right-table-row-cell">
										<a href="<? echo get_the_permalink($tovarLg->ID); ?>" class="calculator-bottom-wrap-right-table-row-cell__desc"><?echo carbon_get_post_meta($tovarLg->ID, "offer_sku"); ?> - <? echo $tovarLg->post_title; ?> </a>
									</div>
									<div class="calculator-bottom-wrap-right-table-row-cell">
										<p class="calculator-bottom-wrap-right-table-row-cell__desc"> <? echo !empty($count)?"~ ".$count." шт.":"-"; ?> </p>
									</div>
								</div>

								<?
									}
								?>


								
							</div>

							<a id = "loadAndCalc" class="calculator-bottom-wrap-right__btn" href = "#">Еще товары...</a>
						</div>
						<div class="calculator-bottom-tab" data-target="2">
							<div class="calculator-bottom-wrap-right-solo">
								<div class="calculator-bottom-wrap-right-solo-search">
									<img src="<?php echo get_template_directory_uri(); ?>/img/home/zoom.svg" alt="" class="calculator-bottom-wrap-right-solo-search__img">
									<input id = "oneCalcSearchFeild" name="search" type="text" class="calculator-bottom-wrap-right-solo-search__input" placeholder="Введите название или артикул..." minlength="2" maxlength="40" required>
									<button class="calculator-bottom-wrap-right-solo-search__btn" id = "oneCalcSearchBtn">найти</button>
									<button  class="files-search-375-btn">
										<img src="<?php echo get_template_directory_uri(); ?>/img/home/zoom.svg" alt="" class="files-search-375-btn__img">
									</button>
								</div>
								<div id = "ajaxOneLoad">

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<a href="#" class="calculator-link-375">
				<img src="<?php echo get_template_directory_uri(); ?>/img/calculator/calc-mail-375.svg" alt="" class="calculator-link-375__img">
			</a>
		</div> -->
	</section>
	<?php get_template_part('template-parts/subscription-section'); ?>
</main>

<?php get_footer(); ?>