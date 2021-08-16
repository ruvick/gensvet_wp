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

  <?
  $pagenumber = !empty($_REQUEST["pagenumber"]) ? $_REQUEST["pagenumber"] : 1;
  $search = !empty($_REQUEST["search"]) ? $_REQUEST["search"] : "";
  $countInPage = !empty($_REQUEST["countinpage"]) ? $_REQUEST["countinpage"] : "5";

  $complex = carbon_get_post_meta($post->ID, 'complex_file_list');

  $fullCount = 0;

  $searchedArray = array();
  foreach ($complex as $item) {
    if ((!empty($search)) && (strripos($item['file_title'], $search) === false)) continue;
    $searchedArray[] = $item;
    $fullCount++;
  }

  $startPos = ($pagenumber-1) * $countInPage;

  if ($startPos > $fullCount) {
    $pagenumber = 1;
    $startPos = ($pagenumber-1) * $countInPage;

  }

  ?>

  <section class="files">
    <div class="container">
      <h1 class="files__title">IES-файлы</h1>
      <form action="" method="get" class="files-search">
        <img src="<?php echo get_template_directory_uri(); ?>/img/home/zoom.svg" alt="" class="files-search__img">
        <input name="countinpage" id="ddFilesCountInPageToSearch" type="hidden" value="<? echo $countInPage; ?>">
        <input name="pagenumber" id="ddFilesNumberInPageToSearch" type="hidden" value="<? echo $pagenumber; ?>">
        <input name="search" type="text" class="files-search__input" placeholder="Поиск по названию изделия..." minlength="2" maxlength="40" value="<? echo $_REQUEST["search"] ?>">
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
        <?php

        $fileIndex = 0;
       
        
        if (!empty($complex)) : ?>
          <?php


          

          foreach ($searchedArray as $item) : ?>

            <?
              if ($startPos > $fileIndex) {
                $fileIndex++;
                continue;
              }
              if ($startPos + $countInPage - 1 < $fileIndex) break;
            ?>

            <div class="files-table-row">
              <div class="files-table-row-cell">
                <p class="files-table-row-cell__desc"><? echo $item['file_title']; ?></p>
              </div>
              <div class="files-table-row-cell">
                <p class="files-table-row-cell__desc"><? echo $item['file_volume']; ?></p>
              </div>
              <div class="files-table-row-cell">
                <?php
                printf('<a href="%s" download class="files-table-row-cell__btn">Скачать</a>', $item['file_list']);
                printf('<a href="%s" download class="files-table-row-cell-btn-375"><img src="' . get_template_directory_uri() . '/img/files/files-download.svg" alt="" class="files-table-row-cell-btn-375__img"></a>', $item['file_list']);
                ?>
              </div>
            </div>
          <?php
            $fileIndex++;
          endforeach;
          ?>
        <?php endif; ?>
      </div>
      <form id="filesDropdownForm" action="" method="get" class="lines-wrap-tables-wrap">

        <div class="lines-wrap-tables-wrap-buttons">
          <div class="options">
            
          <?
          
            $pagenCount = intdiv($fullCount, $countInPage);
            if (($fullCount % $countInPage) != 0) $pagenCount++;


            for($i = 1; $i <= $pagenCount; $i++ ) {
          ?>
            <label for="paginf-<?echo $i; ?>" class="option lines-wrap-tables-wrap-buttons__btn <? echo ($i == $pagenumber)?"active":""; ?>">
              <?echo $i; ?>
              <input onclick  = "filesDropdownForm.submit()" id="paginf-<?echo $i; ?>" type="radio" value="<?echo $i; ?>" name="pagenumber">
            </label>
          <?}?>

            
            <!-- <label for="paginf-2" class="option lines-wrap-tables-wrap-buttons__btn">
              2
              <input id="paginf-2" type="radio" value="2" name="pagenumber">
            </label>
            <label for="paginf-3" class="option lines-wrap-tables-wrap-buttons__btn">
              3
              <input id="paginf-3" type="radio" value="2" name="pagenumber">
            </label>
            <label for="paginf-4" class="option lines-wrap-tables-wrap-buttons__btn">
              4
              <input id="paginf-4" type="radio" value="2" name="pagenumber">
            </label>
            <label for="paginf-5" class="option lines-wrap-tables-wrap-buttons__btn">
              5
              <input id="paginf-5" type="radio" value="2" name="pagenumber">
            </label>
            <label for="paginf-6" class="option lines-wrap-tables-wrap-buttons__btn">
              6
              <input id="paginf-6" type="radio" value="2" name="pagenumber">
            </label>
            <label for="paginf-7" class="option lines-wrap-tables-wrap-buttons__btn">
              7
              <input id="paginf-7" type="radio" value="2" name="pagenumber">
            </label> -->
          </div>
        </div>

        <div class="lines-wrap-tables-wrap-quant">
          <p class="lines-wrap-tables-wrap-quant__desc">Файлов <br>на странице:</p>
          <!-- <select class="lines-wrap-tables-wrap-quant-select">
                            <option class="lines-wrap-tables-wrap-quant-select__num">50</option>
                            <option class="lines-wrap-tables-wrap-quant-select__num">100</option>
                            <option class="lines-wrap-tables-wrap-quant-select__num">200</option>  
                        </select> -->
          <div class="dropdown dropdown--files">
            <button id="filesDropdownBtn" type="button" class="dropdown__button dropdown__button--files"><? echo $countInPage; ?></button>
            <ul id="filesDropdown" class="dropdown-list dropdown-list--files">
              <li class="dropdown-list__item dropdown-list__item--files dropdown-list__item--files_true" data-value="5">5</li>
              <li class="dropdown-list__item dropdown-list__item--files dropdown-list__item--files_true" data-value="10">10</li>
              <li class="dropdown-list__item dropdown-list__item--files dropdown-list__item--files_true" data-value="15">15</li>
            </ul>
            
            <input type="hidden" name="search" value="<? echo $_REQUEST["search"] ?>">
            <input name="countinpage" type="text" class="dropdown__input" value="<? echo $countInPage; ?>">
          </div>
        </div>
      </form>
    </div>
  </section>
  <?php get_template_part('template-parts/subscription-section'); ?>
</main>

<?php get_footer(); ?>