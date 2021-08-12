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

  <section class="content">
    <div class="container">
      <h1><?php the_title(); ?></h1>
      <?php the_content(); ?>
    </div>
  </section>

</main>

<?php get_footer();
