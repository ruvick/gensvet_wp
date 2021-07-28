<a href="<?echo get_the_permalink(get_the_ID());?>" class="catalog-list-item">
  <img src="<?php  $imgTm = get_the_post_thumbnail_url( get_the_ID(), "tominiatyre" ); echo empty($imgTm)?get_bloginfo("template_url")."/img/no-photo.jpg":$imgTm; ?>" alt="" class="catalog-list-item__img">
  <div class="catalog-list-item-link">
  	<h3 class="catalog-list-item-link__title"><? the_title();?></h3>
  </div>
  <p class="catalog-list-item__desc"><?echo carbon_get_post_meta(get_the_ID(),"offer_power"); ?></p>
  <div class="catalog-list-item-link">
    <p class="catalog-list-item-link__desc">Подробнее</p>
    <img src="<?php echo get_template_directory_uri();?>/img/home/header-arrow-right.svg" alt="" class="catalog-list-item-link__img">
  </div>
</a>

