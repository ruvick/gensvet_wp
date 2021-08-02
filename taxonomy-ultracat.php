<?php get_header(); ?>

<?php get_template_part('template-parts/header-section'); ?>

<main class="main">
	<section class="breadcrumb">
		<div class="container">
			<?php
			if (function_exists('yoast_breadcrumb')) {
				yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
			}
			?>
		</div>
	</section>
	<section class="products">
		<div class="container">
			<h1 class="products__title"><?php single_cat_title('', true); ?></h1>
			<div class="products-wrap">
				<?php
				while (have_posts()) :
					the_post();
					get_template_part('template-parts/product-elem');
				endwhile;
				?>
			</div>
		</div>
	</section>
	<?php get_template_part('template-parts/subscription-section'); ?>
</main>

<?php get_footer(); ?>