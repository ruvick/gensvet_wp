<header class="header">
	<div class="header-top">
		<div class="container">
			<ul class="header-top-nav">
				<li class="header-top-nav-item">
					<a href="<?php echo get_permalink(136); ?>" class="header-top-nav-item__link">О компании</a>
				</li>
				<li class="header-top-nav-item">
					<a href="<?php echo get_permalink(6); ?>" class="header-top-nav-item__link">Презентация компании</a>
				</li>
				<li class="header-top-nav-item">
					<a href="<?php echo get_permalink(149); ?>" class="header-top-nav-item__link">Сертификаты и награды</a>
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
					<a href="tel:<? echo preg_replace('/[^0-9]/', '', $tel); ?>" class="header-top-nav-item__link">
						<span class="icon-points-phone"></span>
						<p class="header-top-nav-item__link--bold"><? echo $tel = carbon_get_theme_option("as_phones_1"); ?></p>
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
				<a href="tel:+73832485548" class="header-bottom-wrap-btn-375">
					<img src="<?php echo get_template_directory_uri(); ?>/img/home/header-phone-375.svg" alt="" class="header-bottom-wrap-btn-375__img">
				</a>
				<ul class="header-bottom-wrap-menu">
					<li class="header-bottom-wrap-menu-item">
						<a href="#" class="header-bottom-wrap-menu-item__link">продукция генсвет <img src="<?php echo get_template_directory_uri(); ?>/img/home/header-menu-arrow-down.svg" alt="" class="header-bottom-wrap-menu-item-down__img"></a>
						<ul class="header-bottom-wrap-menu-item-submenu">
							<li class="header-bottom-wrap-menu-item-submenu-item">
								<a href="#" class="header-bottom-wrap-menu-item-submenu-item__link">Коммерческое и офисное освещение (IP40) <img src="<?php echo get_template_directory_uri(); ?>/img/home/header-menu-arrow-right.svg" alt="" class="header-bottom-wrap-menu-item-submenu-item-right__img"></a>
								<ul class="header-bottom-wrap-menu-item-submenu-item-subsubmenu">
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 600 (Армстронг)</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 600 (Грильято)</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 150</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 180</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 300</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 600</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 300</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 150</a>
									</li>
								</ul>
							</li>
							<li class="header-bottom-wrap-menu-item-submenu-item">
								<a href="#" class="header-bottom-wrap-menu-item-submenu-item__link">Освещение для чистых помещений (IP54) <img src="<?php echo get_template_directory_uri(); ?>/img/home/header-menu-arrow-right.svg" alt="" class="header-bottom-wrap-menu-item-submenu-item-right__img"></a>
								<ul class="header-bottom-wrap-menu-item-submenu-item-subsubmenu">
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 600 (Армстронг)</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 600 (Грильято)</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 150</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 180</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 300</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 600</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 300</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 150</a>
									</li>
								</ul>
							</li>
							<li class="header-bottom-wrap-menu-item-submenu-item">
								<a href="#" class="header-bottom-wrap-menu-item-submenu-item__link">Промышленное освещение (IP40 / IP65) <img src="<?php echo get_template_directory_uri(); ?>/img/home/header-menu-arrow-right.svg" alt="" class="header-bottom-wrap-menu-item-submenu-item-right__img"></a>
								<ul class="header-bottom-wrap-menu-item-submenu-item-subsubmenu">
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 600 (Армстронг)</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 600 (Грильято)</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 150</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 180</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 300</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 600</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 300</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 150</a>
									</li>
								</ul>
							</li>
							<li class="header-bottom-wrap-menu-item-submenu-item">
								<a href="#" class="header-bottom-wrap-menu-item-submenu-item__link">Линейные светильники (IP40) <img src="<?php echo get_template_directory_uri(); ?>/img/home/header-menu-arrow-right.svg" alt="" class="header-bottom-wrap-menu-item-submenu-item-right__img"></a>
								<ul class="header-bottom-wrap-menu-item-submenu-item-subsubmenu">
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 600 (Армстронг)</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 600 (Грильято)</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 150</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 180</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 300</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 600</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 300</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 150</a>
									</li>
								</ul>
							</li>
							<li class="header-bottom-wrap-menu-item-submenu-item">
								<a href="#" class="header-bottom-wrap-menu-item-submenu-item__link">Для образовательных учреждений <img src="<?php echo get_template_directory_uri(); ?>/img/home/header-menu-arrow-right.svg" alt="" class="header-bottom-wrap-menu-item-submenu-item-right__img"></a>
								<ul class="header-bottom-wrap-menu-item-submenu-item-subsubmenu">
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 600 (Армстронг)</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 600 (Грильято)</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 150</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 180</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 300</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 600</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 300</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 150</a>
									</li>
								</ul>
							</li>
							<li class="header-bottom-wrap-menu-item-submenu-item">
								<a href="#" class="header-bottom-wrap-menu-item-submenu-item__link">Специальные серии <img src="<?php echo get_template_directory_uri(); ?>/img/home/header-menu-arrow-right.svg" alt="" class="header-bottom-wrap-menu-item-submenu-item-right__img"></a>
								<ul class="header-bottom-wrap-menu-item-submenu-item-subsubmenu">
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 600 (Армстронг)</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 600 (Грильято)</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 150</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 180</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 300</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 600</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 300</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 150</a>
									</li>
								</ul>
							</li>
							<li class="header-bottom-wrap-menu-item-submenu-item">
								<a href="#" class="header-bottom-wrap-menu-item-submenu-item__link">Светильники на заказ <img src="<?php echo get_template_directory_uri(); ?>/img/home/header-menu-arrow-right.svg" alt="" class="header-bottom-wrap-menu-item-submenu-item-right__img"></a>
								<ul class="header-bottom-wrap-menu-item-submenu-item-subsubmenu">
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 600 (Армстронг)</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 600 (Грильято)</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 150</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 180</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 300</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 600</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 300</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 150</a>
									</li>
								</ul>
							</li>
							<li class="header-bottom-wrap-menu-item-submenu-item">
								<a href="#" class="header-bottom-wrap-menu-item-submenu-item__link">Драйверы и БАП для светильников ГЕНСВЕТ <img src="<?php echo get_template_directory_uri(); ?>/img/home/header-menu-arrow-right.svg" alt="" class="header-bottom-wrap-menu-item-submenu-item-right__img"></a>
								<ul class="header-bottom-wrap-menu-item-submenu-item-subsubmenu">
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 600 (Армстронг)</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 600 (Грильято)</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 150</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 180</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 300</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 600</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 300</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 150</a>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<li class="header-bottom-wrap-menu-item">
						<a href="#" class="header-bottom-wrap-menu-item__link">продукция dekolabs <img src="<?php echo get_template_directory_uri(); ?>/img/home/header-menu-arrow-down.svg" alt="" class="header-bottom-wrap-menu-item-down__img"></a>
						<ul class="header-bottom-wrap-menu-item-submenu">
							<li class="header-bottom-wrap-menu-item-submenu-item">
								<a href="#" class="header-bottom-wrap-menu-item-submenu-item__link">Наружное освещение <img src="<?php echo get_template_directory_uri(); ?>/img/home/header-menu-arrow-right.svg" alt="" class="header-bottom-wrap-menu-item-submenu-item-right__img"></a>
								<ul class="header-bottom-wrap-menu-item-submenu-item-subsubmenu">
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 600 (Армстронг)</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 600 (Грильято)</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 150</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 180</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 300</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 600</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 300</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 150</a>
									</li>
								</ul>
							</li>
							<li class="header-bottom-wrap-menu-item-submenu-item">
								<a href="#" class="header-bottom-wrap-menu-item-submenu-item__link">Внутреннее освещение <img src="<?php echo get_template_directory_uri(); ?>/img/home/header-menu-arrow-right.svg" alt="" class="header-bottom-wrap-menu-item-submenu-item-right__img"></a>
								<ul class="header-bottom-wrap-menu-item-submenu-item-subsubmenu">
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 600 (Армстронг)</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 600 (Грильято)</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 150</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 180</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 300</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 600</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 300</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 150</a>
									</li>
								</ul>
							</li>
							<li class="header-bottom-wrap-menu-item-submenu-item">
								<a href="#" class="header-bottom-wrap-menu-item-submenu-item__link">Интерьерное освещение <img src="<?php echo get_template_directory_uri(); ?>/img/home/header-menu-arrow-right.svg" alt="" class="header-bottom-wrap-menu-item-submenu-item-right__img"></a>
								<ul class="header-bottom-wrap-menu-item-submenu-item-subsubmenu">
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 600 (Армстронг)</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 600 (Грильято)</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 150</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 180</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 300</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 600</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 300</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 150</a>
									</li>
								</ul>
							</li>
							<li class="header-bottom-wrap-menu-item-submenu-item">
								<a href="#" class="header-bottom-wrap-menu-item-submenu-item__link">Светодиодные лампы <img src="<?php echo get_template_directory_uri(); ?>/img/home/header-menu-arrow-right.svg" alt="" class="header-bottom-wrap-menu-item-submenu-item-right__img"></a>
								<ul class="header-bottom-wrap-menu-item-submenu-item-subsubmenu">
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 600 (Армстронг)</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 600 (Грильято)</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 150</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 180</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 300</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 600</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 300</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 150</a>
									</li>
								</ul>
							</li>
							<li class="header-bottom-wrap-menu-item-submenu-item">
								<a href="#" class="header-bottom-wrap-menu-item-submenu-item__link">Светодиодна лента <img src="<?php echo get_template_directory_uri(); ?>/img/home/header-menu-arrow-right.svg" alt="" class="header-bottom-wrap-menu-item-submenu-item-right__img"></a>
								<ul class="header-bottom-wrap-menu-item-submenu-item-subsubmenu">
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 600 (Армстронг)</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 600 (Грильято)</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 150</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 180</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 300</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 600</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 300</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 150</a>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<li class="header-bottom-wrap-menu-item">
						<a href="#" class="header-bottom-wrap-menu-item__link">сервисы <img src="<?php echo get_template_directory_uri(); ?>/img/home/header-menu-arrow-down.svg" alt="" class="header-bottom-wrap-menu-item-down__img"></a>
						<ul class="header-bottom-wrap-menu-item-submenu">
							<li class="header-bottom-wrap-menu-item-submenu-item">
								<a href="#" class="header-bottom-wrap-menu-item-submenu-item__link">Каталог ГЕНСВЕТ <img src="<?php echo get_template_directory_uri(); ?>/img/home/header-menu-arrow-right.svg" alt="" class="header-bottom-wrap-menu-item-submenu-item-right__img"></a>
								<ul class="header-bottom-wrap-menu-item-submenu-item-subsubmenu">
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 600 (Армстронг)</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 600 (Грильято)</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 150</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 180</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 300</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 600</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 300</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 150</a>
									</li>
								</ul>
							</li>
							<li class="header-bottom-wrap-menu-item-submenu-item">
								<a href="#" class="header-bottom-wrap-menu-item-submenu-item__link">Каталог DEKOlabs <img src="<?php echo get_template_directory_uri(); ?>/img/home/header-menu-arrow-right.svg" alt="" class="header-bottom-wrap-menu-item-submenu-item-right__img"></a>
								<ul class="header-bottom-wrap-menu-item-submenu-item-subsubmenu">
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 600 (Армстронг)</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 600 (Грильято)</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 150</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 180</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 300</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 600</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 300</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 150</a>
									</li>
								</ul>
							</li>
							<li class="header-bottom-wrap-menu-item-submenu-item">
								<a href="#" class="header-bottom-wrap-menu-item-submenu-item__link">Калькулятор освещенности <img src="<?php echo get_template_directory_uri(); ?>/img/home/header-menu-arrow-right.svg" alt="" class="header-bottom-wrap-menu-item-submenu-item-right__img"></a>
								<ul class="header-bottom-wrap-menu-item-submenu-item-subsubmenu">
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 600 (Армстронг)</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 600 (Грильято)</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 150</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 180</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 300</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 600</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 300</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 150</a>
									</li>
								</ul>
							</li>
							<li class="header-bottom-wrap-menu-item-submenu-item">
								<a href="#" class="header-bottom-wrap-menu-item-submenu-item__link">Видео-обзоры <img src="<?php echo get_template_directory_uri(); ?>/img/home/header-menu-arrow-right.svg" alt="" class="header-bottom-wrap-menu-item-submenu-item-right__img"></a>
								<ul class="header-bottom-wrap-menu-item-submenu-item-subsubmenu">
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 600 (Армстронг)</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 600 (Грильято)</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 150</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 180</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 300</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 600</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 300</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 150</a>
									</li>
								</ul>
							</li>
							<li class="header-bottom-wrap-menu-item-submenu-item">
								<a href="#" class="header-bottom-wrap-menu-item-submenu-item__link">Прайс-лист <img src="<?php echo get_template_directory_uri(); ?>/img/home/header-menu-arrow-right.svg" alt="" class="header-bottom-wrap-menu-item-submenu-item-right__img"></a>
								<ul class="header-bottom-wrap-menu-item-submenu-item-subsubmenu">
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 600 (Армстронг)</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 600 (Грильято)</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 150</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 180</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 300</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 600</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 300</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 150</a>
									</li>
								</ul>
							</li>
							<li class="header-bottom-wrap-menu-item-submenu-item">
								<a href="#" class="header-bottom-wrap-menu-item-submenu-item__link">IES-файлы <img src="<?php echo get_template_directory_uri(); ?>/img/home/header-menu-arrow-right.svg" alt="" class="header-bottom-wrap-menu-item-submenu-item-right__img"></a>
								<ul class="header-bottom-wrap-menu-item-submenu-item-subsubmenu">
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 600 (Армстронг)</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 600 (Грильято)</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 150</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 180</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 300</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 600</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 300</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 150</a>
									</li>
								</ul>
							</li>
							<li class="header-bottom-wrap-menu-item-submenu-item">
								<a href="#" class="header-bottom-wrap-menu-item-submenu-item__link">Технические задания <img src="<?php echo get_template_directory_uri(); ?>/img/home/header-menu-arrow-right.svg" alt="" class="header-bottom-wrap-menu-item-submenu-item-right__img"></a>
								<ul class="header-bottom-wrap-menu-item-submenu-item-subsubmenu">
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 600 (Армстронг)</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 600 (Грильято)</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 150</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 180</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 300</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 600</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 300</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 150</a>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<li class="header-bottom-wrap-menu-item">
						<a href="<?php echo get_category_link(8); ?>" class="header-bottom-wrap-menu-item__link">точки продажи</a>
					</li>
				</ul>
				<button class="header-bottom-wrap-menu-btn-767">
					<img src="./img/home/header-menu-375.svg" alt="" class="header-bottom-wrap-menu-btn-767__img active">
					<img src="./img/home/close.svg" alt="" class="header-bottom-wrap-menu-btn-767__img--close">
					<p class="header-bottom-wrap-menu-btn-767__desc">Меню</p>
				</button>
				<ul class="header-bottom-wrap-menu-767">
					<li class="header-bottom-wrap-menu-item">
						<a href="#" class="header-bottom-wrap-menu-item__link">продукция генсвет <img src="<?php echo get_template_directory_uri(); ?>/img/home/header-menu-arrow-down.svg" alt="" class="header-bottom-wrap-menu-item-down__img"></a>
						<ul class="header-bottom-wrap-menu-item-submenu">
							<li class="header-bottom-wrap-menu-item-submenu-item">
								<a href="#" class="header-bottom-wrap-menu-item-submenu-item__link">Коммерческое и офисное освещение (IP40) <img src="<?php echo get_template_directory_uri(); ?>/img/home/header-menu-arrow-right.svg" alt="" class="header-bottom-wrap-menu-item-submenu-item-right__img"></a>
								<ul class="header-bottom-wrap-menu-item-submenu-item-subsubmenu">
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 600 (Армстронг)</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 600 (Грильято)</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 150</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 180</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 300</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 600</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 300</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 150</a>
									</li>
								</ul>
							</li>
							<li class="header-bottom-wrap-menu-item-submenu-item">
								<a href="#" class="header-bottom-wrap-menu-item-submenu-item__link">Освещение для чистых помещений (IP54) <img src="<?php echo get_template_directory_uri(); ?>/img/home/header-menu-arrow-right.svg" alt="" class="header-bottom-wrap-menu-item-submenu-item-right__img"></a>
								<ul class="header-bottom-wrap-menu-item-submenu-item-subsubmenu">
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 600 (Армстронг)</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 600 (Грильято)</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 150</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 180</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 300</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 600</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 300</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 150</a>
									</li>
								</ul>
							</li>
							<li class="header-bottom-wrap-menu-item-submenu-item">
								<a href="#" class="header-bottom-wrap-menu-item-submenu-item__link">Промышленное освещение (IP40 / IP65) <img src="<?php echo get_template_directory_uri(); ?>/img/home/header-menu-arrow-right.svg" alt="" class="header-bottom-wrap-menu-item-submenu-item-right__img"></a>
								<ul class="header-bottom-wrap-menu-item-submenu-item-subsubmenu">
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 600 (Армстронг)</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 600 (Грильято)</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 150</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 180</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 300</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 600</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 300</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 150</a>
									</li>
								</ul>
							</li>
							<li class="header-bottom-wrap-menu-item-submenu-item">
								<a href="#" class="header-bottom-wrap-menu-item-submenu-item__link">Линейные светильники (IP40) <img src="<?php echo get_template_directory_uri(); ?>/img/home/header-menu-arrow-right.svg" alt="" class="header-bottom-wrap-menu-item-submenu-item-right__img"></a>
								<ul class="header-bottom-wrap-menu-item-submenu-item-subsubmenu">
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 600 (Армстронг)</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 600 (Грильято)</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 150</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 180</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 300</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 600</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 300</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 150</a>
									</li>
								</ul>
							</li>
							<li class="header-bottom-wrap-menu-item-submenu-item">
								<a href="#" class="header-bottom-wrap-menu-item-submenu-item__link">Для образовательных учреждений <img src="<?php echo get_template_directory_uri(); ?>/img/home/header-menu-arrow-right.svg" alt="" class="header-bottom-wrap-menu-item-submenu-item-right__img"></a>
								<ul class="header-bottom-wrap-menu-item-submenu-item-subsubmenu">
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 600 (Армстронг)</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 600 (Грильято)</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 150</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 180</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 300</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 600</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 300</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 150</a>
									</li>
								</ul>
							</li>
							<li class="header-bottom-wrap-menu-item-submenu-item">
								<a href="#" class="header-bottom-wrap-menu-item-submenu-item__link">Специальные серии <img src="<?php echo get_template_directory_uri(); ?>/img/home/header-menu-arrow-right.svg" alt="" class="header-bottom-wrap-menu-item-submenu-item-right__img"></a>
								<ul class="header-bottom-wrap-menu-item-submenu-item-subsubmenu">
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 600 (Армстронг)</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 600 (Грильято)</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 150</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 180</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 300</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 600</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 300</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 150</a>
									</li>
								</ul>
							</li>
							<li class="header-bottom-wrap-menu-item-submenu-item">
								<a href="#" class="header-bottom-wrap-menu-item-submenu-item__link">Светильники на заказ <img src="<?php echo get_template_directory_uri(); ?>/img/home/header-menu-arrow-right.svg" alt="" class="header-bottom-wrap-menu-item-submenu-item-right__img"></a>
								<ul class="header-bottom-wrap-menu-item-submenu-item-subsubmenu">
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 600 (Армстронг)</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 600 (Грильято)</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 150</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 180</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 300</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 600</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 300</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 150</a>
									</li>
								</ul>
							</li>
							<li class="header-bottom-wrap-menu-item-submenu-item">
								<a href="#" class="header-bottom-wrap-menu-item-submenu-item__link">Драйверы и БАП для светильников ГЕНСВЕТ <img src="<?php echo get_template_directory_uri(); ?>/img/home/header-menu-arrow-right.svg" alt="" class="header-bottom-wrap-menu-item-submenu-item-right__img"></a>
								<ul class="header-bottom-wrap-menu-item-submenu-item-subsubmenu">
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 600 (Армстронг)</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 600 (Грильято)</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 150</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 180</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 300</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 600</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 300</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 150</a>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<li class="header-bottom-wrap-menu-item">
						<a href="#" class="header-bottom-wrap-menu-item__link">продукция dekolabs <img src="<?php echo get_template_directory_uri(); ?>/img/home/header-menu-arrow-down.svg" alt="" class="header-bottom-wrap-menu-item-down__img"></a>
						<ul class="header-bottom-wrap-menu-item-submenu">
							<li class="header-bottom-wrap-menu-item-submenu-item">
								<a href="#" class="header-bottom-wrap-menu-item-submenu-item__link">Наружное освещение <img src="<?php echo get_template_directory_uri(); ?>/img/home/header-menu-arrow-right.svg" alt="" class="header-bottom-wrap-menu-item-submenu-item-right__img"></a>
								<ul class="header-bottom-wrap-menu-item-submenu-item-subsubmenu">
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 600 (Армстронг)</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 600 (Грильято)</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 150</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 180</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 300</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 600</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 300</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 150</a>
									</li>
								</ul>
							</li>
							<li class="header-bottom-wrap-menu-item-submenu-item">
								<a href="#" class="header-bottom-wrap-menu-item-submenu-item__link">Внутреннее освещение <img src="<?php echo get_template_directory_uri(); ?>/img/home/header-menu-arrow-right.svg" alt="" class="header-bottom-wrap-menu-item-submenu-item-right__img"></a>
								<ul class="header-bottom-wrap-menu-item-submenu-item-subsubmenu">
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 600 (Армстронг)</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 600 (Грильято)</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 150</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 180</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 300</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 600</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 300</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 150</a>
									</li>
								</ul>
							</li>
							<li class="header-bottom-wrap-menu-item-submenu-item">
								<a href="#" class="header-bottom-wrap-menu-item-submenu-item__link">Интерьерное освещение <img src="<?php echo get_template_directory_uri(); ?>/img/home/header-menu-arrow-right.svg" alt="" class="header-bottom-wrap-menu-item-submenu-item-right__img"></a>
								<ul class="header-bottom-wrap-menu-item-submenu-item-subsubmenu">
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 600 (Армстронг)</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 600 (Грильято)</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 150</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 180</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 300</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 600</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 300</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 150</a>
									</li>
								</ul>
							</li>
							<li class="header-bottom-wrap-menu-item-submenu-item">
								<a href="#" class="header-bottom-wrap-menu-item-submenu-item__link">Светодиодные лампы <img src="<?php echo get_template_directory_uri(); ?>/img/home/header-menu-arrow-right.svg" alt="" class="header-bottom-wrap-menu-item-submenu-item-right__img"></a>
								<ul class="header-bottom-wrap-menu-item-submenu-item-subsubmenu">
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 600 (Армстронг)</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 600 (Грильято)</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 150</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 180</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 300</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 600</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 300</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 150</a>
									</li>
								</ul>
							</li>
							<li class="header-bottom-wrap-menu-item-submenu-item">
								<a href="#" class="header-bottom-wrap-menu-item-submenu-item__link">Светодиодна лента <img src="<?php echo get_template_directory_uri(); ?>/img/home/header-menu-arrow-right.svg" alt="" class="header-bottom-wrap-menu-item-submenu-item-right__img"></a>
								<ul class="header-bottom-wrap-menu-item-submenu-item-subsubmenu">
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 600 (Армстронг)</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 600 (Грильято)</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 150</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 180</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 300</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 600</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 300</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 150</a>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<li class="header-bottom-wrap-menu-item">
						<a href="#" class="header-bottom-wrap-menu-item__link">сервисы <img src="<?php echo get_template_directory_uri(); ?>/img/home/header-menu-arrow-down.svg" alt="" class="header-bottom-wrap-menu-item-down__img"></a>
						<ul class="header-bottom-wrap-menu-item-submenu">
							<li class="header-bottom-wrap-menu-item-submenu-item">
								<a href="#" class="header-bottom-wrap-menu-item-submenu-item__link">Каталог ГЕНСВЕТ <img src="<?php echo get_template_directory_uri(); ?>/img/home/header-menu-arrow-right.svg" alt="" class="header-bottom-wrap-menu-item-submenu-item-right__img"></a>
								<ul class="header-bottom-wrap-menu-item-submenu-item-subsubmenu">
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 600 (Армстронг)</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 600 (Грильято)</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 150</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 180</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 300</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 600</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 300</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 150</a>
									</li>
								</ul>
							</li>
							<li class="header-bottom-wrap-menu-item-submenu-item">
								<a href="#" class="header-bottom-wrap-menu-item-submenu-item__link">Каталог DEKOlabs <img src="<?php echo get_template_directory_uri(); ?>/img/home/header-menu-arrow-right.svg" alt="" class="header-bottom-wrap-menu-item-submenu-item-right__img"></a>
								<ul class="header-bottom-wrap-menu-item-submenu-item-subsubmenu">
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 600 (Армстронг)</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 600 (Грильято)</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 150</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 180</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 300</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 600</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 300</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 150</a>
									</li>
								</ul>
							</li>
							<li class="header-bottom-wrap-menu-item-submenu-item">
								<a href="#" class="header-bottom-wrap-menu-item-submenu-item__link">Калькулятор освещенности <img src="<?php echo get_template_directory_uri(); ?>/img/home/header-menu-arrow-right.svg" alt="" class="header-bottom-wrap-menu-item-submenu-item-right__img"></a>
								<ul class="header-bottom-wrap-menu-item-submenu-item-subsubmenu">
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 600 (Армстронг)</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 600 (Грильято)</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 150</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 180</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 300</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 600</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 300</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 150</a>
									</li>
								</ul>
							</li>
							<li class="header-bottom-wrap-menu-item-submenu-item">
								<a href="#" class="header-bottom-wrap-menu-item-submenu-item__link">Видео-обзоры <img src="<?php echo get_template_directory_uri(); ?>/img/home/header-menu-arrow-right.svg" alt="" class="header-bottom-wrap-menu-item-submenu-item-right__img"></a>
								<ul class="header-bottom-wrap-menu-item-submenu-item-subsubmenu">
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 600 (Армстронг)</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 600 (Грильято)</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 150</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 180</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 300</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 600</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 300</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 150</a>
									</li>
								</ul>
							</li>
							<li class="header-bottom-wrap-menu-item-submenu-item">
								<a href="#" class="header-bottom-wrap-menu-item-submenu-item__link">Прайс-лист <img src="<?php echo get_template_directory_uri(); ?>/img/home/header-menu-arrow-right.svg" alt="" class="header-bottom-wrap-menu-item-submenu-item-right__img"></a>
								<ul class="header-bottom-wrap-menu-item-submenu-item-subsubmenu">
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 600 (Армстронг)</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 600 (Грильято)</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 150</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 180</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 300</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 600</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 300</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 150</a>
									</li>
								</ul>
							</li>
							<li class="header-bottom-wrap-menu-item-submenu-item">
								<a href="#" class="header-bottom-wrap-menu-item-submenu-item__link">IES-файлы <img src="<?php echo get_template_directory_uri(); ?>/img/home/header-menu-arrow-right.svg" alt="" class="header-bottom-wrap-menu-item-submenu-item-right__img"></a>
								<ul class="header-bottom-wrap-menu-item-submenu-item-subsubmenu">
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 600 (Армстронг)</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 600 (Грильято)</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 150</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 180</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 300</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 600</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 300</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 150</a>
									</li>
								</ul>
							</li>
							<li class="header-bottom-wrap-menu-item-submenu-item">
								<a href="#" class="header-bottom-wrap-menu-item-submenu-item__link">Технические задания <img src="<?php echo get_template_directory_uri(); ?>/img/home/header-menu-arrow-right.svg" alt="" class="header-bottom-wrap-menu-item-submenu-item-right__img"></a>
								<ul class="header-bottom-wrap-menu-item-submenu-item-subsubmenu">
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 600 (Армстронг)</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 600 (Грильято)</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 150</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 180</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 300</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">1200 × 600</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 300</a>
									</li>
									<li class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item">
										<a href="#" class="header-bottom-wrap-menu-item-submenu-item-subsubmenu-item__link">600 × 150</a>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<li class="header-bottom-wrap-menu-item">
						<a href="#" class="header-bottom-wrap-menu-item__link">точки продажи</a>
					</li>
				</ul>
				<form role="search" method="get" id="searchform" action="<?php echo home_url('/') ?>" class="header-bottom-wrap-search">
					<button href="#" class="header-bottom-wrap-search-btn">
						<img src="./img/home/zoom.svg" alt="" class="header-bottom-wrap-search-btn__img">
						<p class="header-bottom-wrap-search-btn__desc">Поиск...</p>
					</button>
					<div class="header-bottom-wrap-search-hidden">
						<img src="./img/home/zoom.svg" alt="" class="header-bottom-wrap-search-hidden__img">
						<input type="text" value="<?php echo get_search_query() ?>" name="s" id="s" class="header-bottom-wrap-search-hidden__input" placeholder="введите название или артикул товара..." minlength="2" maxlength="40" required>
						<button type="submit" tabindex="2" id="searchsubmit" value="" class="header-bottom-wrap-search-hidden__btn sub-search">найти</button>
					</div>
				</form>
				<button class="production-top-right__btn hidden">Скачать инструкцию</button>
			</div>
		</div>
	</div>
</header>