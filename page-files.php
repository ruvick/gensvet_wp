<?php

/*
Template Name: Страница IES-файлы
Template Post Type: page
*/

get_header(); ?>

<?php get_template_part('template-parts/header-section'); ?>

<main class="main">

  <section class="breadcrumb">
    <div class="container">
      <div class="breadcrumb-wrap">
        <?php if (function_exists('kama_breadcrumbs')) kama_breadcrumbs(); ?>
      </div>
    </div>
  </section>

  <section class="files">
    <div class="container">
      <h1 class="files__title">IES-файлы</h1>
      <form action = "" method = "get" class="files-search">
        <img src="<?php echo get_template_directory_uri(); ?>/img/home/zoom.svg" alt="" class="files-search__img">
        <input name = "countinpage" id = "ddFilesCountInPageToSearch" type="hidden" value = "50" >
        <input name="search" type="text" class="files-search__input" placeholder="Поиск по названию изделия..." minlength="2" maxlength="40" required value = "<? echo $_REQUEST["search"]?>">
        <button type="submit" class="files-search__btn">найти</button>
        <button type="submit" class="files-search-375-btn">
          <img src="<?php echo get_template_directory_uri(); ?>/img/home/zoom.svg" alt="" class="files-search-375-btn__img">
        </button>
      </form>
      <div class="files-table">

        <div class="files-table-row">
          <div class="files-table-row-cell">
            <p class="files-table-row-cell__desc">Наименование светильника</p>
          </div>
          <div class="files-table-row-cell">
            <p class="files-table-row-cell__desc">Объем файла</p>
          </div>
          <div class="files-table-row-cell">
          </div>
        </div>
        <?php $complex = carbon_get_post_meta($post->ID, 'complex_file_list');
        // $file = get_post_meta($file['ID'], '_wp_attached_file', true);
        // $data = get_post($file);
        if (!empty($complex)) : ?>
          <?php foreach ($complex as $item) : ?>
            <div class="files-table-row">
              <div class="files-table-row-cell">
                <p class="files-table-row-cell__desc"><?php echo $post->post_title; ?></p>
              </div>
              <div class="files-table-row-cell">
                <p class="files-table-row-cell__desc">1.4 МБ</p>
              </div>
              <div class="files-table-row-cell">
                <?php
                printf('<a href="%s" download class="files-table-row-cell__btn">Скачать</a>', $item['file_list']);
                printf('<a href="%s" download class="files-table-row-cell-btn-375"><img src="' . get_template_directory_uri() . '/img/files/files-download.svg" alt="" class="files-table-row-cell-btn-375__img"></a>', $item['file_list']);
                ?>
              </div>
            </div>
          <?php endforeach; ?>
        <?php endif; ?>
      </div>
      <div class="lines-wrap-tables-wrap">
        <div class="lines-wrap-tables-wrap-buttons">
          <button class="lines-wrap-tables-wrap-buttons__btn active">1</button>
          <button class="lines-wrap-tables-wrap-buttons__btn">2</button>
          <button class="lines-wrap-tables-wrap-buttons__btn">3</button>
          <button class="lines-wrap-tables-wrap-buttons__btn">4</button>
          <button class="lines-wrap-tables-wrap-buttons__btn">5</button>
          <button class="lines-wrap-tables-wrap-buttons__btn">6</button>
          <button class="lines-wrap-tables-wrap-buttons__btn">7</button>
        </div>
        <div class="lines-wrap-tables-wrap-quant">
          <p class="lines-wrap-tables-wrap-quant__desc">Файлов <br>на странице:</p>
          <!-- <select class="lines-wrap-tables-wrap-quant-select">
                            <option class="lines-wrap-tables-wrap-quant-select__num">50</option>
                            <option class="lines-wrap-tables-wrap-quant-select__num">100</option>
                            <option class="lines-wrap-tables-wrap-quant-select__num">200</option>  
                        </select> -->
          <form id = "filesDropdownForm" action = "" method = "get" class="dropdown dropdown--files">
            <button id = "filesDropdownBtn" type = "button" class="dropdown__button dropdown__button--files">50</button>
            <ul id = "filesDropdown" class="dropdown-list dropdown-list--files">
              <li class="dropdown-list__item dropdown-list__item--files dropdown-list__item--files_true" data-value="50">50</li>
              <li class="dropdown-list__item dropdown-list__item--files dropdown-list__item--files_true" data-value="100">100</li>
              <li class="dropdown-list__item dropdown-list__item--files dropdown-list__item--files_true" data-value="150">150</li>
            </ul>
            <input name = "countinpage" type="text" class="dropdown__input" value="">
          </form>
        </div>
      </div>
    </div>
  </section>
  <?php get_template_part('template-parts/subscription-section'); ?>
</main>

<?php get_footer(); ?>