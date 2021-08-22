<footer class="footer">
	<?php 
	$phone = carbon_get_theme_option("as_phones_wa");
	$phone = str_replace(array('+', ' ', '(' , ')', '-'), '', $phone);
	?>
	<a href="https://wa.me/<?php echo $phone; ?>" class="footer-link-1">
		<img src="<?php echo get_template_directory_uri(); ?>/img/home/footer-whatsapp.svg" alt="" class="footer-link-1__img">
	</a>
	<a href="#top" class="footer-link-2">
		<img src="<?php echo get_template_directory_uri(); ?>/img/home/header-arrow-right.svg" alt="" class="footer-link-2__img">
	</a>
	<div class="footer-top">
		<div class="container">
			<div class="footer-top-wrap">
				<ul class="footer-top-wrap-list">
					<li class="footer-top-wrap-list-item">
						<p class="footer-top-wrap-list-item__link">Каталог</p>
						<?php wp_nav_menu(array(
							'theme_location' => 'menu_cat', 'menu_class' => 'footer-top-wrap-list-item-sublist',
							'container_class' => 'footer-top-wrap-list-item-sublist', 'container' => false
						)); ?>
					</li>
					<li class="footer-top-wrap-list-item">
						<a href="<?php echo get_permalink(136); ?>" class="footer-top-wrap-list-item__link">О компании</a>
						<?php wp_nav_menu(array(
							'theme_location' => 'menu_company', 'menu_class' => 'footer-top-wrap-list-item-sublist',
							'container_class' => 'footer-top-wrap-list-item-sublist', 'container' => false
						)); ?>
					</li>
					<li class="footer-top-wrap-list-item">
						<a href="<?php echo get_permalink(38); ?>" class="footer-top-wrap-list-item__link">контакты</a>
						<ul class="footer-top-wrap-list-item-sublist">
							<li class="footer-top-wrap-list-item-sublist-item">
								<? $tel = carbon_get_theme_option("as_phones_1");
								if (!empty($tel)) { ?><a href="tel:<? echo preg_replace('/[^0-9]/', '', $tel); ?>" class="footer-top-wrap-list-item-sublist-item__link"><? echo $tel; ?></a><? } ?>
							</li>
							<li class="footer-top-wrap-list-item-sublist-item">
								<? $mail = carbon_get_theme_option("as_email");
								if (!empty($mail)) { ?><a href="mailto:<? echo $mail; ?>" class="footer-top-wrap-list-item-sublist-item__link"><? echo $mail; ?></a><? } ?>
							</li>
							<li class="footer-top-wrap-list-item-sublist-item">
								<? $adr = carbon_get_theme_option("as_address_2");
								if (!empty($adr)) { ?><span class="footer-top-wrap-list-item-sublist-item__link"><? echo $adr; ?></span><? } ?>
							</li>
						</ul>
					</li>
				</ul>
				<div class="footer-top-wrap-links">
					<a href="<?php echo carbon_get_theme_option('as_youtube'); ?>" class="footer-top-wrap-links-link">
						<img src="<?php echo get_template_directory_uri(); ?>/img/home/footer-youtube.svg" alt="" class="footer-top-wrap-links-link__img">
					</a>
					<a href="<?php echo carbon_get_theme_option('as_insta'); ?>" class="footer-top-wrap-links-link">
						<img src="<?php echo get_template_directory_uri(); ?>/img/home/footer-inst.svg" alt="" class="footer-top-wrap-links-link__img">
					</a>
				</div>
			</div>

		</div>
	</div>
	<div class="container">
		<div class="footer-bottom">
			<p class="footer-bottom__desc">2021 © Все права защищены.</p>
			<a href="<?php echo get_permalink(6); ?>" class="footer-bottom__link">Политика конфиденциальности</a>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>
</body>

</html>