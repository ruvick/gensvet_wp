<?php get_header(); ?>

<?php get_template_part('template-parts/header-section'); ?>

<main id="primary" class="main">
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
	<section class="newscom">
		<div class="container">
			<h1 class="newscom__title"><? single_cat_title(); ?></h1>
			<div class="newscom-wrap">
				<?php if (have_posts()) {
					while (have_posts()) {
						the_post(); ?>


				<?php 	} //конец while
				} //конец if 
				?>
			</div>
		</div>
	</section>
	<?php get_template_part('template-parts/subscription-section'); ?>
</main>
<?php get_footer(); ?>