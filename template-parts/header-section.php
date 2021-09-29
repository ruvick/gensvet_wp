<header class="header">
	<div class="header-top">
		<div class="container">
			<ul class="header-top-nav">
				<li class="header-top-nav-item">
					<a href="<?php echo get_permalink(136); ?>" class="header-top-nav-item__link">О компании</a>
				</li>
				<li class="header-top-nav-item">
					<a href="<?php echo carbon_get_theme_option("file_presentation"); ?>" class="header-top-nav-item__link">Презентация компании</a>
				</li>
				<li class="header-top-nav-item">
					<a href="<?php echo get_permalink(149); ?>" class="header-top-nav-item__link">Сертификаты и награды</a>
				</li>
				<li class="header-top-nav-item">
					<a href="<?php echo get_category_link(4); ?>" class="header-top-nav-item__link">Новости</a>
				</li>
				<li class="header-top-nav-item">
					<a href="<?php echo get_permalink(38); ?>" class="header-top-nav-item__link">Контакты</a>
				</li>
				<li class="header-top-nav-item">
					<img src="<?php echo get_template_directory_uri(); ?>/img/home/header-addres.svg" alt="" class="header-top-nav-item__img">
					<p class="header-top-nav-item__desc"><? echo carbon_get_theme_option("as_address_1"); ?></p>
				</li>
				<li class="header-top-nav-item">
					<a href="mailto:<? echo $mail = carbon_get_theme_option("as_email"); ?>" class="header-top-nav-item__link">
						<span class="icon-header-email"></span>
						<p class="header-top-nav-item__link-desc"><? echo $mail; ?></p>
					</a>
				</li>
				<li class="header-top-nav-item">
					<?php $tel = carbon_get_theme_option("as_phones_1"); ?>
					<a href="tel:+<? echo preg_replace('/[^0-9]/', '', $tel); ?>" class="header-top-nav-item__link">
						<span class="icon-points-phone"></span>
						<p class="header-top-nav-item__link--bold"><? echo carbon_get_theme_option("as_phones_1"); ?></p>
					</a>
				</li>
			</ul>
		</div>
	</div>
	<div class="header-bottom">
		<div class="container">
			<div class="header-bottom-wrap">
				<a href="/" class="header-bottom-wrap-link">
					<img src="<?php echo get_template_directory_uri(); ?>/img/home/logo-1.svg" alt="Генсвет" class="header-bottom-wrap-link-logo-1__img">
				</a>
				<a href="/" class="header-bottom-wrap-link">
					<img src="<?php echo get_template_directory_uri(); ?>/img/home/logo-2.svg" alt="Deco" class="header-bottom-wrap-link-logo-2__img">
				</a>
				<a href="tel:<? echo preg_replace('/[^0-9]/', '', $tel); ?>" class="header-bottom-wrap-btn-375">
					<img src="<?php echo get_template_directory_uri(); ?>/img/home/header-phone-375.svg" alt="" class="header-bottom-wrap-btn-375__img">
				</a>
				<?php wp_nav_menu(array(
					'theme_location' => 'menu_main', 'menu_class' => 'header-bottom-wrap-menu',
					'container_class' => 'header-bottom-wrap-menu', 'container' => false
				)); ?>
				<button class="header-bottom-wrap-menu-btn-767">
					<img src="<?php echo get_template_directory_uri(); ?>/img/home/header-menu-375.svg" alt="" class="header-bottom-wrap-menu-btn-767__img active">
					<img src="<?php echo get_template_directory_uri(); ?>/img/home/close.svg" alt="" class="header-bottom-wrap-menu-btn-767__img--close">
					<p class="header-bottom-wrap-menu-btn-767__desc">Меню</p>
				</button>
				<?php wp_nav_menu(array(
					'theme_location' => 'menu_main', 'menu_class' => 'header-bottom-wrap-menu-767',
					'container_class' => 'header-bottom-wrap-menu-767', 'container' => false
				)); ?>
				<form role="search" method="get" id="searchform" action="<?php echo home_url('/') ?>" class="header-bottom-wrap-search">
					<button href="#" class="header-bottom-wrap-search-btn">
						<img src="<?php echo get_template_directory_uri(); ?>/img/home/zoom.svg" alt="" class="header-bottom-wrap-search-btn__img">
						<p class="header-bottom-wrap-search-btn__desc">Поиск...</p>
					</button>
					<div class="header-bottom-wrap-search-hidden">
						<img src="<?php echo get_template_directory_uri(); ?>/img/home/zoom.svg" alt="" class="header-bottom-wrap-search-hidden__img">
						<input type="text" value="<?php echo get_search_query() ?>" name="s" id="s" class="header-bottom-wrap-search-hidden__input" placeholder="введите название или артикул товара..." minlength="2" maxlength="40" required>
						<button type="submit" tabindex="2" id="searchsubmit" value="" class="header-bottom-wrap-search-hidden__btn sub-search">найти</button>
					</div>
				</form>
				<button class="production-top-right__btn popup-instruction hidden">Файл для расчёта</button>
			</div>
		</div>
	</div>
</header>