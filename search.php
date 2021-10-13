<?php

/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
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

	<section class="products">
		<div class="container">
			<form role="search" method="get" id="searchform" action="<?php echo home_url('/') ?>" class="header-bottom-wrap-search page-search-form">
				<img src="<?php echo get_template_directory_uri(); ?>/img/home/zoom.svg" alt="" class="header-bottom-wrap-search-hidden__img">
				<input type="text" value="<?php echo get_search_query() ?>" name="s" id="s" class="header-bottom-wrap-search-hidden__input" placeholder="Введите название или артикул товара..." minlength="2" maxlength="40" required>
				<button type="submit" tabindex="2" id="searchsubmit" value="" class="header-bottom-wrap-search-hidden__btn sub-search">найти</button>
			</form>
			<h1>Результаты поиска</h1>
			<div class="products-wrap">
				<?php
				while (have_posts()) :
					the_post();
					get_template_part('template-parts/product-elem');
				endwhile;
				?>
				<?php if (!have_posts()) {
					echo '<p>По указанным данным ничего не найдено, измените параметры поиска.</p>';
				} ?>
			</div>
			<?php if (function_exists('wp_corenavi')) wp_corenavi(); ?>
		</div>
	</section>
	<?php get_template_part('template-parts/subscription-section'); ?>
</main>

<?php get_footer(); ?>