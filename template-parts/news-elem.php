<a href="<? echo get_the_permalink(get_the_ID()); ?>" class="newscom-wrap-card">
  <div class="newscom-wrap-card-right">
    <div class="newscom-wrap-card-right-date">
      <span class="newscom-wrap-card-right-date__bold"><?php the_time('j') ?></span>
      <span class="newscom-wrap-card-right-date__grey">/ <?php the_time('m') ?></span>
    </div>
    <p class="newscom-wrap-card-right__desc"><?php the_title(); ?></p>
    <div class="newscom-wrap-card-right-link">
      <p class="points-wrap-partners-cards-card-link__desc">Подробнее</p>
      <img src="<?php echo get_template_directory_uri(); ?>/img/home/header-arrow-right.svg" alt="" class="points-wrap-partners-cards-card-link__img">
    </div>
  </div>
  <div class="newscom-wrap-card-link">
    <img src="<?php $imgTm = get_the_post_thumbnail_url(get_the_ID(), "tominiatyre");
              echo empty($imgTm) ? get_bloginfo("template_url") . "/img/no-photo.jpg" : $imgTm; ?>" alt="" class="newscom-wrap-card-link__img">
  </div>
</a>