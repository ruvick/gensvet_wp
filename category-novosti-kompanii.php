<?php get_header(); ?>

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

	<section class="newscom">
		<div class="container">

			<h1 class="newscom__title"><? single_cat_title(); ?></h1>

			<div class="newscom-wrap">
				<?php
				while (have_posts()) :
					the_post();
					get_template_part('template-parts/news-elem');
				endwhile;
				?>
			</div>

		</div>
	</section>

	<?php get_template_part('template-parts/subscription-section'); ?>

</main>
<?php get_footer(); ?>