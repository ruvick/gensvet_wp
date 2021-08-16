<?php

/*
Template Name: Страница О компании
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

	<section class="company">
		<div class="container">
			<h1 class="company__title"><?php the_title(); ?></h1>
			<!-- <p class="company__desc"></p> -->
			<div class="company__desc">
				<?php the_content(); ?>
			</div>

			<div class="company-wrap">
				<?php $complex = carbon_get_post_meta($post->ID, 'picture_complex_about');
				if (!empty($complex)) : ?>
					<?php foreach ($complex as $item) : ?>

						<?php if (!empty($item['checkbox_pay_exc'])) {
							echo '    
              <div class="company-wrap-card">
                <p class="company-wrap-card__desc">' . $item['picture_text_about'] . '</p>
                <img src="' . wp_get_attachment_image_src($item['picture_img_about'], 'large')[0] . '" alt="" class="company-wrap-card__img">
              </div>';
						} else {
							echo '
              <div class="company-wrap-card">
                <img src="' . wp_get_attachment_image_src($item['picture_img_about'], 'large')[0] . '" alt="" class="company-wrap-card__img">
                <p class="company-wrap-card__desc">' . $item['picture_text_about'] . '</p>
              </div>';
						}
						?>
					<?php endforeach; ?>
				<?php endif; ?>
			</div>

			<? $abouttc = carbon_get_post_meta(get_the_ID(), "about_text_center");
			if (!empty($abouttc)) { ?>
				<p class="company__tagline"><? echo $abouttc; ?></p>
			<? } ?>
		</div>
	</section>
	<section class="why">
		<div class="container">
			<? $ab_choose = carbon_get_post_meta(get_the_ID(), "about_choose");
			if (!empty($ab_choose)) { ?>
				<h2 class="why__title">Почему выбирают нас?</h2>
				<p class="why__desc"><? echo $ab_choose; ?></p>
			<? } ?>
			<div class="why-wrap">
				<? $choose_bs = carbon_get_the_post_meta('about_choose_blocks');
				if ($choose_bs) {
					$choose_bsIndex = 0;
					foreach ($choose_bs as $item) {
				?>
						<div class="why-wrap-card">
							<h3 class="why-wrap-card__title"><? echo $item['about_choose_blocks_title']; ?></h3>
							<p class="why-wrap-card__desc"><? echo $item['about_choose_blocks__text']; ?></p>
						</div>
				<?
						$choose_bsIndex++;
					}
				}
				?>
			</div>
		</div>
	</section>

	<section class="banners">
		<div class="container">
			<div class="banners-wrap">
				<div class="banners-wrap-card">
					<a href="<?php echo get_category_link(7); ?>" class="banners-wrap-card-link">
						<h2 class="banners-wrap-card-link__title">Продукция<br> генсвет</h2>
						<img src="<?php echo get_template_directory_uri(); ?>/img/about/banners-bg-1.svg" alt="" class="banners-wrap-card-link__bg">
						<img src="<?php echo get_template_directory_uri(); ?>/img/about/banners-1.png" alt="" class="banners-wrap-card-link__img">
					</a>
				</div>
				<div class="banners-wrap-card">
					<a href="<?php echo get_category_link(7); ?>" class="banners-wrap-card-link">
						<h2 class="banners-wrap-card-link__title">Продукция<br>dekolabs</h2>
						<img src="<?php echo get_template_directory_uri(); ?>/img/about/banners-bg-2.svg" alt="" class="banners-wrap-card-link__bg">
						<img src="<?php echo get_template_directory_uri(); ?>/img/about/banners-2.png" alt="" class="banners-wrap-card-link__img">
					</a>
				</div>
				<div class="banners-wrap-card">
					<a href="<?php echo get_category_link(8); ?>" class="banners-wrap-card-link">
						<h2 class="banners-wrap-card-link__title">Точки<br> продажи</h2>
						<img src="<?php echo get_template_directory_uri(); ?>/img/about/banners-bg.svg" alt="" class="banners-wrap-card-link__bg">
						<img src="<?php echo get_template_directory_uri(); ?>/img/about/banners-3.svg" alt="" class="banners-wrap-card-link__img">
					</a>
				</div>
			</div>
		</div>
	</section>
	<?php get_template_part('template-parts/subscription-section'); ?>
</main>

<?php get_footer(); ?>