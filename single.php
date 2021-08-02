<?php get_header(); ?>

<?php get_template_part('template-parts/header-section'); ?>

<main class="page">

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
      <h1><?php the_title(); ?></h1>
      <?php the_content(); ?>
    </div>
  </section>

</main>

<?php get_footer();
