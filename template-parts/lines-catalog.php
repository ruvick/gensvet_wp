<?php get_header(); ?>

<?php get_template_part('template-parts/header-section'); ?>

<main class="main">
	<div id = "tovarCategoryId" data-id = "<? echo get_queried_object()->term_id; ?>"></div>
	<section class="breadcrumb">
		<div class="container">
			<div class="breadcrumb-wrap">
				<?php if (function_exists('kama_breadcrumbs')) kama_breadcrumbs(); ?>
			</div>
		</div>
	</section>

	<?
		$pagenumber = !empty($_REQUEST["pagenumber"]) ? $_REQUEST["pagenumber"] : 1;
		$countInPage = !empty($_REQUEST["countinpage"]) ? $_REQUEST["countinpage"] : "30";
	?>
	<section class="lines">
		<div class="container">
			<h1 class="lines__title"><?php single_cat_title('', true); ?></h1>
			<button class="lines-button-767">
				<img src="<?php echo get_template_directory_uri(); ?>/img/lines/lines-button.svg" alt="" class="lines-button-767__img">
				<p class="lines-button-767__desc">фильтр</p>
				<!-- <p class="lines-button-767__count">3</p> -->
				<img src="<?= get_template_directory_uri(); ?>/img/home/header-menu-arrow-down.svg" alt="" class="lines-button-767-arrow__img">
			</button>
			<div class="lines-wrap">
				<div class = "loaderSize" id = "categoryFilterLoader">Загрузка...</div>	
				<form method="get" class="lines-wrap-filter" id = 'categoryFilterForm'>
					<input type = "hidden" name = "countinpage" value = "<? echo $countInPage ?>">	
					<input type = "hidden" name = "pagenumber"  value = "1">	
				<div class="lines-wrap-filter-card">
						<button type = "button" class="lines-wrap-filter-card-btn">
							<h4 class="lines-wrap-filter-card-btn__title">Размеры</h4>
							<img src="<?= get_template_directory_uri(); ?>/img/home/header-menu-arrow-down.svg" alt="" class="lines-wrap-filter-card-btn__img">
						</button>
						<div class="lines-wrap-filter-card-features">
							<ul class="lines-wrap-filter-card-features-list" id = "sizeFilterList">
								<li class="lines-wrap-filter-card-features-list-item li_checbox">
									<input id = "size_595_595_40" name="sizecheck[]" type="checkbox" class="subscription-wrap-form-wrap__checkbox-hidden" hidden checked  data-value="595×595×40">
									<label  for = "size_595_595_40" class=" lines-wrap-filter-card-features-list-item__desc">595×595×40</label>
								</li>
								<li class="lines-wrap-filter-card-features-list-item li_checbox">
									<input id = "size_595_595_41" name="sizecheck[]" type="checkbox" class="subscription-wrap-form-wrap__checkbox-hidden" hidden  data-value="595×595×40">
									<label for = "size_595_595_41" class="lines-wrap-filter-card-features-list-item__desc">595×595×40</label>

								</li>
								<li class="lines-wrap-filter-card-features-list-item li_checbox">
									<input id = "size_595_595_42" name="sizecheck[]" type="checkbox" class="subscription-wrap-form-wrap__checkbox-hidden" hidden  data-value="595×595×40">
									<label for = "size_595_595_42" class="lines-wrap-filter-card-features-list-item__desc">595×595×40</label>
								</li>
							</ul>
						</div>
					</div>
					<div class="lines-wrap-filter-card">
						<button type = "button" class="lines-wrap-filter-card-btn">
							<h4 class="lines-wrap-filter-card-btn__title">Световой эффект</h4>
							<img src="<?= get_template_directory_uri(); ?>/img/home/header-menu-arrow-down.svg" alt="" class="lines-wrap-filter-card-btn__img">
						</button>
						<div class="lines-wrap-filter-card-features">
							<ul class="lines-wrap-filter-card-features-list li_checbox" id = "dtypeFilterList" >
								<li class="lines-wrap-filter-card-features-list-item">
									<input id = "dtype" name="diodtype[]" value="1" type="checkbox" class="subscription-wrap-form-wrap__checkbox-hidden"  hidden data-value="595×595×40" <? if (!empty($_REQUEST["diodtype"])) echo "checked"; ?>>
									<label  for = "dtype" class="lines-wrap-filter-card-features-list-item__desc" >Нормальный</label>
								</li>
							</ul>
						</div>
					</div>
					<div class="lines-wrap-filter-card">
						<button type = "button" class="lines-wrap-filter-card-btn">
							<h4 class="lines-wrap-filter-card-btn__title">Драйвер</h4>
							<img src="<?= get_template_directory_uri(); ?>/img/home/header-menu-arrow-down.svg" alt="" class="lines-wrap-filter-card-btn__img">
						</button>
						<div class="lines-wrap-filter-card-features">
							<ul class="lines-wrap-filter-card-features-list li_checbox" id = "komplFilterList" >
								<li class="lines-wrap-filter-card-features-list-item">
									<input id = "str_only" name="drivercheck[]" value="1" type="checkbox" class="subscription-wrap-form-wrap__checkbox-hidden"  hidden data-value="595×595×40" <? if (!empty($_REQUEST["drivercheck"])) echo "checked"; ?>>
									<label  for = "str_only" class="lines-wrap-filter-card-features-list-item__desc" >Только с драйвером</label>
								</li>
							</ul>
						</div>
					</div>
					<div class="lines-wrap-filter-card">
						<button type = "button" class="lines-wrap-filter-card-btn">
							<h4 class="lines-wrap-filter-card-btn__title">Мощность</h4>
							<img src="<?= get_template_directory_uri(); ?>/img/home/header-menu-arrow-down.svg" alt="" class="lines-wrap-filter-card-btn__img">
						</button>
						<div class="lines-wrap-filter-card-features lines-wrap-power" id = "powerFilterList">
							<input id="vt24" type="checkbox" value="24" name="power[]" <? if (!empty($_REQUEST["power"]) && in_array(24, $_REQUEST["power"])) echo "checked"; ?>>	
							<label for="vt24" class="lines-wrap-filter-card-features__btn option">24 Вт</label>
						</div>
					</div>
					<div class="lines-wrap-filter-card">
						<button type = "button" class="lines-wrap-filter-card-btn">
							<h4 class="lines-wrap-filter-card-btn__title">Световой поток</h4>
							<img src="<?= get_template_directory_uri(); ?>/img/home/header-menu-arrow-down.svg" alt="" class="lines-wrap-filter-card-btn__img">
						</button>
						<div class="lines-wrap-filter-card-features lines-wrap-power" id = "lightflowFilterList">
							<input id="lightflow" type="checkbox" value="24" name="lightflow[]" <? if (!empty($_REQUEST["lightflow"]) && in_array(24, $_REQUEST["lightflow"])) echo "checked"; ?>>	
							<label for="lightflow" class="lines-wrap-filter-card-features__btn option">0 Лм</label>
						</div>
					</div>
					<div class="lines-wrap-filter-card">
						<button type = "button" class="lines-wrap-filter-card-btn">
							<h4 class="lines-wrap-filter-card-btn__title">Рассеиватель</h4>
							<img src="<?= get_template_directory_uri(); ?>/img/home/header-menu-arrow-down.svg" alt="" class="lines-wrap-filter-card-btn__img">
						</button>
						<div class="lines-wrap-filter-card-features">
							<ul class="lines-wrap-filter-card-features-list li_checbox" id = "diffuserFilterList">
								<li class="lines-wrap-filter-card-features-list-item">
									<input id = "ras_opal" name="rscheck[0]" value = "Опал" type="checkbox" class="subscription-wrap-form-wrap__checkbox-hidden"  hidden data-value="595×595×40" <? if (!empty($_REQUEST["rscheck"]) && in_array("Опал", $_REQUEST["rscheck"])) echo "checked"; ?>>
									<label for = "ras_opal" class="lines-wrap-filter-card-features-list-item__desc">Опал</label>
								</li>
								<li class="lines-wrap-filter-card-features-list-item">
									<input id = "ras_mat" name="rscheck[1]" value = "Матовый" type="checkbox" class="subscription-wrap-form-wrap__checkbox-hidden"  hidden data-value="595×595×40" <? if (!empty($_REQUEST["rscheck"]) && in_array("Матовый", $_REQUEST["rscheck"])) echo "checked"; ?>>
									<label for = "ras_mat" class="lines-wrap-filter-card-features-list-item__desc">Матовый</label>
								</li>
								<li class="lines-wrap-filter-card-features-list-item">
									<input id = "ras_gl" name="rscheck[2]" value = "Глянцевый" type="checkbox" class="subscription-wrap-form-wrap__checkbox-hidden"  hidden data-value="595×595×40" <? if (!empty($_REQUEST["rscheck"]) && in_array("Глянцевый", $_REQUEST["rscheck"])) echo "checked"; ?>>
									<label for = "ras_gl" class="lines-wrap-filter-card-features-list-item__desc">Глянцевый</label>
								</li>
							</ul>
						</div>
					</div>
					<div class="lines-wrap-filter-card">
						<button type = "button" class="lines-wrap-filter-card-btn">
							<h4 class="lines-wrap-filter-card-btn__title">Световая температура</h4>
							<img src="<?= get_template_directory_uri(); ?>/img/home/header-menu-arrow-down.svg" alt="" class="lines-wrap-filter-card-btn__img">
						</button>
						<div class="lines-wrap-filter-card-features">
							<ul class="lines-wrap-filter-card-features-list li_checbox" id = "colortypeFilterList" >
								<li class="lines-wrap-filter-card-features-list-item">
									<input id = "color_" name="colortype[]" value="1" type="checkbox" class="subscription-wrap-form-wrap__checkbox-hidden"  hidden data-value="595×595×40" <? if (!empty($_REQUEST["color_check"])) echo "checked"; ?>>
									<label  for = "color_" class="lines-wrap-filter-card-features-list-item__desc" >0 K</label>
								</li>
							</ul>
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

						



						$term = get_term_by('id', $child, $taxonomyName);
						$term_id = $term->term_taxonomy_id; ?>

								<?php

								$arg = $wp_query->query;
								// Фильтрация по световой температуре
								if (!empty($_REQUEST["colortype"])) {
									$metaquery["colorQuery"] = array(
										'relation' => 'OR',
									);
									
									for ($i = 0; $i<count($_REQUEST["colortype"]); $i++) {
										$metaquery["colorQuery"]["colortype".$i] = array(
											'key'     => '_offer_colour_temp',
											'value' => $_REQUEST["colortype"][$i],
											'compare' => '=',
											'type'    => 'CHAR',
										);
									} 
								}


								// Фильтрация по размеру
								if (!empty($_REQUEST["sizecheck"])) {
									$metaquery["sizecheckQuery"] = array(
										'relation' => 'OR',
									);
									
									for ($i = 0; $i<count($_REQUEST["sizecheck"]); $i++) {
										$metaquery["sizecheckQuery"]["size".$i] = array(
											'key'     => '_offer_size',
											'value' => $_REQUEST["sizecheck"][$i],
											'compare' => '=',
											'type'    => 'CHAR',
										);
									} 
								}


								// Фильтрация по мощьности
								if (!empty($_REQUEST["power"])) {
									$metaquery["powerQuery"] = array(
										'relation' => 'OR',
									);
									
									for ($i = 0; $i<count($_REQUEST["power"]); $i++) {
										$metaquery["powerQuery"]["power".$i] = array(
											'key'     => '_offer_power',
											'value' => $_REQUEST["power"][$i],
											'compare' => '=',
											'type'    => 'CHAR',
										);
									} 
								}
								// Фильтрация по типу рассеевателя
								if (!empty($_REQUEST["rscheck"])) {
									$metaquery["rsQuery"] = array(
										'relation' => 'OR',
									);
									
									for ($i = 0; $i<count($_REQUEST["rscheck"]); $i++) {
										$metaquery["rsQuery"]["rscheck".$i] = array(
											'key'     => '_offer_diffuser',
											'value' => $_REQUEST["rscheck"][$i],
											'compare' => '=',
											'type'    => 'CHAR',
										);
									} 
								}

								if (!empty($_REQUEST["drivercheck"])) {
									$metaquery["driverQuery"] = array(
										'relation' => 'OR',
									);
									
									for ($i = 0; $i<count($_REQUEST["drivercheck"]); $i++) {
										$metaquery["driverQuery"]["drivercheck".$i] = array(
											'key'     => '_driver_complex|driver_denomination|0|0|value',
											'value' => $_REQUEST["drivercheck"][$i],
											'compare' => 'LIKE',
											'type'    => 'CHAR',
										);
									} 
								}
								// Фильтрация по световому потоку
								if (!empty($_REQUEST["lightflow"])) {
									$metaquery["lightflowQuery"] = array(
										'relation' => 'OR',
									);
									
									for ($i = 0; $i<count($_REQUEST["lightflow"]); $i++) {
										$metaquery["lightflowQuery"]["lightflow".$i] = array(
											'key'     => '_offer_light_flow',
											'value' => $_REQUEST["lightflow"][$i],
											'compare' => '=',
											'type'    => 'CHAR',
										);
									} 
								}
								// Фильтрация по световому эффекту
								if (!empty($_REQUEST["diodtype"])) {
									$metaquery["diodtypeQuery"] = array(
										'relation' => 'OR',
									);
									
									for ($i = 0; $i<count($_REQUEST["diodtype"]); $i++) {
										$metaquery["diodtypeQuery"]["diodtype".$i] = array(
											'key'     => '_offer_light_effect',
											'value' => $_REQUEST["diodtype"][$i],
											'compare' => '=',
											'type'    => 'CHAR',
										);
									} 
								}



							  
								
								$mypostCount = array(
									'post_type' => 'ultra',
									'posts_per_page' => -1,
									'meta_query' => $metaquery,
									'exclude' => array(417),
									'tax_query' => array(
										array(
											'taxonomy' => 'ultracat',
											'field' => 'id',
											'terms' => strval($termID)
										),
									),
								);

								

								$Count = new WP_Query($mypostCount);
              					// echo "<pre>";	
								// 	var_dump($Count->post_count);
								// echo "</pre>";


								$fullCount = $Count->post_count;
							  
				  
								$startPos = ($pagenumber - 1) * $countInPage;
							  
								if ($startPos > $fullCount) {
								  $pagenumber = 1;
								  $startPos = ($pagenumber - 1) * $countInPage;
								}
								
								$mypost = array(
									'post_type' => 'ultra',
									'posts_per_page' => $countInPage,
									'offset' => $startPos,
									'meta_query' => $metaquery,
									'meta_key' => '_offer_power',
									'orderby' => 'meta_value_num',
									'order' => 'ASC',
									'exclude' => array(417),
									'tax_query' => array(
										array(
											'taxonomy' => 'ultracat',
											'field' => 'id',
											'terms' => strval($termID)
										),
									),
								);

						 
								



								$loop = new WP_Query($mypost);
								
								$rezMass = [];
								foreach ($loop->posts as $element) {
									$catsName = wp_get_post_terms( $element->ID, 'ultracat', array('fields' => 'names') );
									$rezMass[$catsName[1]][] = $element;
								}

								
						?>

						<?php foreach ($rezMass as $key => $value) { ?>

						<div class="lines-wrap-tables-table">
							
							<h2 class="lines-wrap-tables-table__title"><?= $key; ?></h2>

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
										<p class="lines-wrap-tables-table-rows-row-cell__desc">Цветовая <br>температура</p>
									</div>
									<div class="lines-wrap-tables-table-rows-row-cell">
										<p class="lines-wrap-tables-table-rows-row-cell__desc">Рассеиватель</p>
									</div>
									<div class="lines-wrap-tables-table-rows-row-cell">
										<p class="lines-wrap-tables-table-rows-row-cell__desc">Драйвер</p>
									</div>
									<div class="lines-wrap-tables-table-rows-row-cell">
										<p class="lines-wrap-tables-table-rows-row-cell__desc">Световой <br>эффект</p>
									</div>
								</div>
								<?php foreach ($value as $pElem) { ?>
									<!-- Цикл с выводом записей дочерних категорий таксономии -->
									<a href="<?php echo get_permalink($pElem->ID); ?>" class="lines-wrap-tables-table-rows-row">
										<div class="lines-wrap-tables-table-rows-row-cell">
											<p class="lines-wrap-tables-table-rows-row-cell__desc">
												<? echo carbon_get_post_meta($pElem->ID, "offer_sku"); ?> 
											</p>
										</div>
										<div class="lines-wrap-tables-table-rows-row-cell">
											<p class="lines-wrap-tables-table-rows-row-cell__desc">
												<? echo carbon_get_post_meta($pElem->ID, "offer_power"); ?> Вт
											</p>
										</div>
										<div class="lines-wrap-tables-table-rows-row-cell">
											<p class="lines-wrap-tables-table-rows-row-cell__desc">
												<? echo carbon_get_post_meta($pElem->ID, "offer_light_flow"); ?> Лм
											</p>
										</div>
										<div class="lines-wrap-tables-table-rows-row-cell">
											<p class="lines-wrap-tables-table-rows-row-cell__desc">
												<? echo carbon_get_post_meta($pElem->ID, "offer_size"); ?>
											</p>
										</div>
										<div class="lines-wrap-tables-table-rows-row-cell">
											<p class="lines-wrap-tables-table-rows-row-cell__desc">
												<? echo carbon_get_post_meta($pElem->ID, "offer_colour_temp"); ?> К
											</p>
										</div>
										<div class="lines-wrap-tables-table-rows-row-cell">
											<p class="lines-wrap-tables-table-rows-row-cell__desc">
												<? echo carbon_get_post_meta($pElem->ID, "offer_diffuser"); ?>
											</p>
										</div>
										<div class="lines-wrap-tables-table-rows-row-cell">
											<p class="lines-wrap-tables-table-rows-row-cell__desc">
												<?php $product_driver =  carbon_get_post_meta($pElem->ID, "driver_complex"); ?>
												<?php echo $product_driver[0]['driver_denomination']; ?>
											</p>
										</div>
										<div class="lines-wrap-tables-table-rows-row-cell">
											<p class="lines-wrap-tables-table-rows-row-cell__desc">
												<? echo carbon_get_post_meta($pElem->ID, "offer_light_effect"); ?>
											</p>
										</div>
									</a>
									<!-- Конец цикла -->
								<?php } ?>
							</div>



						</div>
						<?php } ?>

					<form id="categoryDropdownForm" action="" method="get" class="lines-wrap-tables-wrap">

					<? 
					if (isset($_REQUEST["sizecheck"]))
					foreach ($_REQUEST["sizecheck"] as $elem) {?>
						<input type = "hidden" name = "sizecheck[]" value = "<? echo $elem; ?>">	
					<?}?>

					<? 
					if (isset($_REQUEST["diodtype"]))
					foreach ($_REQUEST["diodtype"] as $elem) {?>
						<input type = "hidden" name = "diodtype[]" value = "<? echo $elem;?>">	
					<?}?>

					<? 
					if (isset($_REQUEST["drivercheck"]))
					foreach ($_REQUEST["drivercheck"] as $elem) {?>
						<input type = "hidden" name = "drivercheck[]" value = "<? echo $elem;?>">
					<?}?>
					
					<? 
					if (isset($_REQUEST["power"]))
					foreach ($_REQUEST["power"] as $elem) {?>
						<input type = "hidden" name = "power[]" value = "<? echo $elem;?>">	
					<?}?>

					<? 
					if (isset($_REQUEST["lightflow"]))
					foreach ($_REQUEST["lightflow"] as $elem) {?>
						<input type = "hidden" name = "lightflow[]" value = "<? echo $elem;?>">	
					<?}?>

					<? 
					if (isset($_REQUEST["rscheck"]))
					foreach ($_REQUEST["rscheck"] as $elem) {?>
						<input type = "hidden" name = "rscheck[]" value = "<? echo $elem;?>">	
					<?}?>

					<? 
					if (isset($_REQUEST["colortype"]))
					foreach ($_REQUEST["colortype"] as $elem) {?>
						<input type = "hidden" name = "colortype[]" value = "<? echo $elem;?>">	
					<?}?>
        <div class="lines-wrap-tables-wrap-buttons">
          <div class="options">
            <?
            $pagenCount = intdiv($fullCount, $countInPage);
            if (($fullCount % $countInPage) != 0) $pagenCount++;
            for ($i = 1; $i <= $pagenCount; $i++) {
            ?>
              <label for="paginf-<? echo $i; ?>" class="option lines-wrap-tables-wrap-buttons__btn <? echo ($i == $pagenumber) ? "active" : ""; ?>">
                <? echo $i; ?>
                <input onclick="categoryDropdownForm.submit()" id="paginf-<? echo $i; ?>" type="radio" value="<? echo $i; ?>" name="pagenumber">
              </label>
            <? } ?>
          </div>
        </div>
        <div class="lines-wrap-tables-wrap-quant">
          <p class="lines-wrap-tables-wrap-quant__desc">Товаров <br>на странице:</p>
          <div class="dropdown dropdown--category">
            <button id="categoryDropdownBtn" type="button" class="dropdown__button dropdown__button--category"><? echo $countInPage; ?></button>
            <ul id="categoryDropdown" class="dropdown-list dropdown-list--category">
              <li class="dropdown-list__item dropdown-list__item--category dropdown-list__item--category_true" data-value="30">30</li>
              <li class="dropdown-list__item dropdown-list__item--category dropdown-list__item--category_true" data-value="70">70</li>
              <li class="dropdown-list__item dropdown-list__item--category dropdown-list__item--category_true" data-value="100">100</li>
            </ul>
            <input type="hidden" name="search" value="<? echo $_REQUEST["search"] ?>">
            <input name="countinpage" type="text" class="dropdown__input" value="<? echo $countInPage; ?>">
          </div>
        </div>
      </form>
					<!-- Конец цикла -->
				</div>
			</div>
		</div>
	</section>
	<?php get_template_part('template-parts/subscription-section'); ?>
</main>

<?php get_footer(); ?>