<?php

/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 */

get_header(); ?>

<?php get_template_part('template-parts/header-section'); ?>

<main id="primary" class="main">

	<section class="breadcrumb">
		<div class="container">
			<?php
			if (function_exists('yoast_breadcrumb')) {
				yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
			}
			?>
		</div>
	</section>

	<section class="content">
		<div class="container">

			<h1>Результаты поиска</h1>

			<div class="products-wrap">

				<?php
				while (have_posts()) :
					the_post();
					get_template_part('template-parts/product-elem');
				endwhile;
				?>

			</div>

			<?php if (function_exists('wp_corenavi')) wp_corenavi(); ?>

		</div>
	</section>

	<?php get_template_part('template-parts/subscription-section'); ?>

</main>

<?php get_footer(); ?>