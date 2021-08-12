<?php get_header(); ?>

<?php get_template_part('template-parts/header-section'); ?>

<main class="main">
	<section class="breadcrumb">
		<div class="container">
			<div class="breadcrumb-wrap">
				<?php
				if (function_exists('yoast_breadcrumb')) {
					yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
				}
				?>
			</div>
		</div>
	</section>
	<section class="products">
		<div class="container">
			<h1 class="products__title">Каталог</h1>
			<div class="products-wrap">
				<?php
				$terms = get_terms('ultracat');

				if ($terms && !is_wp_error($terms)) {

					foreach ($terms as $term) {

						$term_id = $term->term_taxonomy_id;
						// получим ID картинки из метаполя термина
						$image_id = get_term_meta($term_id, '_thumbnail_id', 1);
						// ссылка на полный размер картинки по ID вложения
						$image_url = wp_get_attachment_image_url($image_id, 'full');

						$description = term_description($term_id);

						echo '<a href="' . get_term_link($term->term_id, $term->taxonomy) . '" class="catalog-list-item">
						<img src="' . $image_url . '" alt="" class="catalog-list-item__img">
						<div class="catalog-list-item-link">
							<h3 class="catalog-list-item-link__title">' . $term->name . '</h3>
						</div>
						<p class="catalog-list-item__desc">' . $description . '</p>
						<div class="catalog-list-item-link">
							<p class="catalog-list-item-link__desc">Подробнее</p>
							<img src="' . get_template_directory_uri() . '/img/home/header-arrow-right.svg" alt="" class="catalog-list-item-link__img">
						</div>
					</a>';
					}
				}
				?>
			</div>
		</div>
	</section>
	<?php get_template_part('template-parts/subscription-section'); ?>
</main>

<?php get_footer(); ?>