<?php get_header(); ?>

<?php get_template_part('template-parts/header-section'); ?>

<main class="main">

  <section class="breadcrumb">
    <div class="container">
      <div class="breadcrumb-wrap">
        <?php if (function_exists('kama_breadcrumbs')) kama_breadcrumbs(); ?>
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
