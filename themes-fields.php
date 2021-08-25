<?

// Описание полей для Carbon_Fields производим только в этом файле
// 1. В начале идет описание полей - Настройки темы  далее категорий (если необходимо) в конце аблонов страниц и записей
// 2. Префиксы проставляем каждый раз новые осмысленно по имени проекта 
// 3. Для Полей которые входят в состав составново схема именования следующая <Общий префикс>_<название составного поля>_<имя поля>
// 4. Название секций Так же придумываем осмысленные на русском языке чтобы небыло сплошных Доп. полей
// 5. Каждый блок комментируем


use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make('theme_options', __('Настройки темы', 'crb'))
  ->add_tab('Главная', array(
    // Field::make( 'image', 'as_logo', 'Логотип в шапке')
    //   ->set_width(30),
    // Field::make( 'image', 'as_logo_white', 'Логотип в подвале')
    //   ->set_width(30),
    Field::make('text', 'about_home_title', 'Заголовок на главной'),
    Field::make('text', 'about_home_subtitle', 'Заголовок инструкции'),
    // Field::make('rich_text', 'about_home', 'О нашей компании') 
  ))
  ->add_tab('Контакты', array(
    Field::make('text', 'as_company', __('Название'))
      ->set_width(50),
    Field::make('text', 'as_schedule', __('Режим работы'))
      ->set_width(50),
    Field::make('text', 'as_phones_wa', __('Телефон для WhatsApp'))
      ->set_width(100),
    Field::make('text', 'as_phones_1', __('Телефон'))
      ->set_width(50),
    Field::make('text', 'as_phone_2', __('Телефон на стр.Контаткы'))
      ->set_width(50),
    Field::make('text', 'as_email', __('Email'))
      ->set_width(50),
    Field::make('text', 'as_email_send', __('Email для отправки'))
      ->set_width(50),
    Field::make('text', 'as_inn', __('ИНН'))
      ->set_width(50),
    Field::make('text', 'as_orgn', __('ОРГН'))
      ->set_width(50),
    Field::make('text', 'as_kpp', __('КПП'))
      ->set_width(50),
    Field::make('text', 'as_address_1', __('Адрес в шапке'))
      ->set_width(50),
    Field::make('text', 'as_address_2', __('Адрес в подвале'))
      ->set_width(50),
    Field::make('text', 'as_address_3', __('Фактический адрес'))
      ->set_width(50),
    Field::make('text', 'as_address_4', __('Юридический адрес'))
      ->set_width(50),
    Field::make('text', 'as_bik', __('БИК'))
      ->set_width(50),
    Field::make('text', 'as_rs', __('Р/С'))
      ->set_width(50),
    Field::make('text', 'as_ks', __('К/С'))
      ->set_width(50),
    Field::make('text', 'as_bank', __('БАНК'))
      ->set_width(50),
    Field::make('text', 'as_youtube', __('youtube'))
      ->set_width(50),
    Field::make('text', 'as_insta', __('instagram'))
      ->set_width(50),
    Field::make('text', 'as_telegr', __('telegram'))
      ->set_width(50),
    Field::make('text', 'as_ok', __('одноклассники'))
      ->set_width(50),
    Field::make('text', 'as_face', __('facebook'))
      ->set_width(50),
    Field::make('text', 'as_vk', __('Вконтакте'))
      ->set_width(50),
    Field::make('text', 'map_point', 'Координаты карты')
      ->set_width(50),
  ))
  ->add_tab('Файлы', array(
    Field::make('file', 'file_presentation', 'Презентация компании')
      ->set_value_type('url'),
    Field::make('file', 'file_catalog_gensvet', 'Каталог ГЕНСВЕТ (вставить в меню)')
      ->set_value_type('url'),
    Field::make('file', 'file_catalog_dekolabs', 'Каталог DEKOlabs (вставить в меню)')
      ->set_value_type('url'),
    // Field::make('file', 'file_price_list', 'Прайс-лист (вставить в меню)')
    //   ->set_value_type('url'),
  ))
  ->add_tab('Всплывающее окно "Инструкция"', array(
    Field::make('text', 'popup_guide_title', __('Заголовок окна')),
    Field::make('text', 'popup_guide_thanks', __('Текст "Спасибо"')),
  ))
  ->add_tab('Всплывающее окно "Прайс-лист"', array(
    Field::make('text', 'popup_price_title', __('Заголовок окна')),
    Field::make('text', 'popup_price_thanks', __('Текст "Спасибо"')),
  ));

Container::make('post_meta', 'ultra_product', 'Характеристики товара')
  ->show_on_post_type(array('ultra'))
  ->add_fields(array(
    Field::make('complex', 'offer_description_complex', 'Описание товара')
      ->add_fields(array(
        Field::make('text', 'offer_description_title', 'Заголовок')
          ->set_width(50),
        Field::make('text', 'offer_description_descp', 'Описание')
          ->set_width(50),
      )),
    Field::make('text', 'offer_sticker', 'Стикер')->set_width(50),
    Field::make('text', 'offer_sku', 'Артикул товара')->set_width(50),
    Field::make('text', 'offer_power', 'Мощность товара')->set_width(50),
    Field::make('text', 'offer_light_flow', 'Световой поток товара')->set_width(50),
    Field::make('text', 'offer_size', 'Размер товара')->set_width(50),
    Field::make('text', 'offer_colour_temp', 'Цветовая температура товара')->set_width(50),
    Field::make('text', 'offer_diffuser', 'Рассеиватель товара')->set_width(50),
    Field::make('text', 'offer_light_effect', 'Световой эффект товара')->set_width(50),
    Field::make('text', 'offer_price', 'Цена')->set_width(100),
  ));

Container::make('post_meta', 'ultra_product_cr', 'Дополнительные харрактеристики товара')
  ->show_on_post_type(array('ultra'))
  ->add_fields(array(
    Field::make('complex', 'offer_power_complex', "Мощность")->set_width(50)
      ->add_fields(array(
        Field::make('text', 'offer_power_denomination', 'Номинал')->set_width(50),
      )),

    Field::make('complex', 'light_flow_complex', "Световой поток")->set_width(50)
      ->add_fields(array(
        Field::make('text', 'light_flow_denomination', 'Номинал')->set_width(50),
      )),
    Field::make('complex', 'colour_temp_complex', "Цветовая температура")->set_width(50)
      ->add_fields(array(
        Field::make('text', 'colour_temp_denomination', 'Номинал')->set_width(50),
      )),

    Field::make('complex', 'diffuser_complex', "Выберите рассеиватель")->set_width(50)
      ->add_fields(array(
        Field::make('text', 'diffuser_denomination', 'Рассеиватель')->set_width(50),
      )),

    Field::make('complex', 'driver_complex', "Выберите драйвер")->set_width(50)
      ->add_fields(array(
        Field::make('text', 'driver_denomination', 'Драйвер')->set_width(50),
      )),

    Field::make('complex', 'download_certificate', 'Скачать сертификат (PDF)')
      ->set_max(1) // Можно будет выбрать только 1 пункт
      ->add_fields(array(
        Field::make("checkbox", "checkbox_certificate", "Активна ссылка на файл"),
        // ->help_text('Меняет местами картинку и текст"'),
        Field::make("file", "file_certificate", "Загрузить сертификат (PDF)")
          ->set_value_type('url') // сохранить в метаполе ссылку на файл
          ->set_width(50),
        Field::make('text', 'link_certificate', 'Ссылка на сертификат (PDF)')
          ->set_width(50),
      )),

    Field::make('complex', 'download_passport', 'Скачать паспорт (PDF)')
      ->set_max(1) // Можно будет выбрать только 1 пункт
      ->add_fields(array(
        Field::make("checkbox", "checkbox_passport", "Активна ссылка на файл"),
        // ->help_text('Меняет местами картинку и текст"'),
        Field::make("file", "file_passport", "Загрузить паспорт (PDF)")
          ->set_value_type('url') // сохранить в метаполе ссылку на файл
          ->set_width(50),
        Field::make('text', 'link_passport', 'Ссылка на паспорт (PDF)')
          ->set_width(50),
      )),
    // Field::make('text', 'consultation_link', 'Получить консультацию. Ссылка')->set_width(100),

    Field::make('complex', 'offer_cherecter_light', "Характеристики светильника. Табы, левая колонка")->set_width(50)
      ->add_fields(array(
        Field::make('text', 'tab_name_light', 'Наименование параметра')->set_width(100),
        Field::make('text', 'tab_val_light',  'Значение')->set_width(100),
      )),

    Field::make('complex', 'offer_cherecter_light-r', "Характеристики светильника. Табы, правая колонка")->set_width(50)
      ->add_fields(array(
        Field::make('text', 'tab_name_light-r', 'Наименование параметра')->set_width(100),
        Field::make('text', 'tab_val_light-r',  'Значение')->set_width(100),
      )),

    Field::make('complex', 'offer_cherecter_driver', "Характеристики драйвера. Табы, одна колонка")->set_width(50)
      ->add_fields(array(
        Field::make('text', 'tab_name_driver', 'Наименование параметра')->set_width(100),
        Field::make('text', 'tab_val_driver',  'Значение')->set_width(100),
      )),
    // Field::make('complex', 'offer_cherecter_driver-r', "Характеристики драйвера. Табы, правая колонка")->set_width(50)
    //   ->add_fields(array(
    //     Field::make('text', 'tab_name_driver-r', 'Наименование параметра')->set_width(100),
    //     Field::make('text', 'tab_val_driver-r',  'Значение')->set_width(100),
    //   )),
  ));

Container::make('post_meta', 'single-point', 'Контакты')
  ->show_on_template(array('single-point.php'))
  ->add_fields(array(
    Field::make('text', 'point_address', __('Адрес'))
      ->set_width(50),
    Field::make('text', 'point_phones', __('Телефон'))
      ->set_width(50),
    Field::make('text', 'point_email', __('Email'))
      ->set_width(50),
    Field::make('text', 'point_website', __('Сайт'))
      ->set_width(50),
  ));

Container::make('post_meta', 'page-about', 'Контент страницы')
  ->show_on_template(array('page-about.php'))
  ->add_fields(array(
    Field::make('complex', 'picture_complex_about', 'Картинка с текстом')
      // ->set_max(3) // Можно будет выбрать только 5 постов
      ->add_fields(array(
        Field::make("checkbox", "checkbox_pay_exc", "Текст слева, Картинка справа")
          ->help_text('Меняет местами картинку и текст"'),
        Field::make('image', 'picture_img_about', 'Картинка')
          ->set_width(30),
        Field::make('text', 'picture_text_about', 'Текст')
          ->set_width(30),
      )),
    Field::make('text', 'about_text_center', __('Текстовый блок по сережине'))
      ->set_width(50),
    Field::make('text', 'about_choose', __('Почему выбирают нас. Текст'))
      ->set_width(50),
    Field::make('complex', 'about_choose_blocks', 'Текстовые блоки')
      // ->set_max(3) // Можно будет выбрать только 5 постов
      ->add_fields(array(
        Field::make('text', 'about_choose_blocks_title', 'Заголовок')
          ->set_width(30),
        Field::make('text', 'about_choose_blocks__text', 'Текст')
          ->set_width(30),
      )),
  ));

Container::make('post_meta', 'page-certificates', 'Сертификаты и награды')
  ->show_on_template(array('page-certificates.php'))
  ->add_fields(array(
    Field::make('complex', 'complex_certificates', 'Сертификаты')
      // ->set_max(3) // Можно будет выбрать только 5 постов
      ->add_fields(array(
        Field::make('image', 'certificates_img', 'Картинка')
          ->set_width(30),
        Field::make('text', 'certificates_title', 'Название')
          ->set_width(30),
        Field::make('text', 'certificates_text', 'Текст')
          ->set_width(30),
      )),
    Field::make('complex', 'complex_awards', 'Награды')
      // ->set_max(3) // Можно будет выбрать только 5 постов
      ->add_fields(array(
        Field::make('image', 'awards_img', 'Картинка')
          ->set_width(30),
        Field::make('text', 'awards_title', 'Название')
          ->set_width(30),
        Field::make('text', 'awards_text', 'Текст')
          ->set_width(30),
      )),
  ));

Container::make('post_meta', 'page-files', 'Файлы')
  ->show_on_template(array('page-files.php'))
  ->add_fields(array(
    Field::make('complex', 'complex_file_list', 'Добавить файл')
      // ->set_max(3) // Можно будет выбрать только 5 постов
      ->add_fields(array(
        Field::make("file", "file_list", "Файл")
          ->set_value_type('url'), // сохранить в метаполе ссылку на файл
        Field::make('text', 'file_title', 'Имя файла')
          ->set_width(30),
        Field::make('text', 'file_volume', 'Объем файла')
          ->set_width(30),
      )),
  )); 

  // Container::make('post_meta', 'page-gallery-tkaney-obivki-sidenii', 'Характеристики записи')
  // ->show_on_template(array('page-gallery-tkaney-obivki-sidenii.php'))
  //     ->add_fields(array(   
  //     Field::make( 'complex', 'galery_velours', "Велюр" )
  //     ->add_fields( array(
  //       Field::make('image', 'galery_velours_img', 'Изображение' )->set_width(30),
  //       Field::make('text', 'galery_velours_img_alt', 'alt и title')->set_width(30)        
  //     ) ),

  //     Field::make( 'complex', 'galery_eco', "Эко-Кожа" )
  //     ->add_fields( array(
  //       Field::make('image', 'galery_eco_img', 'Изображение' )->set_width(30),
  //       Field::make('text', 'galery_eco_img_alt', 'alt и title')->set_width(30)        
  //     ) ),

  //     Field::make( 'complex', 'galery_leather', "Кожа" )
  //     ->add_fields( array(
  //       Field::make('image', 'galery_leather_img', 'Изображение' )->set_width(30),
  //       Field::make('text', 'galery_leather_img_alt', 'alt и title')->set_width(30)        
  //     ) ),

  // ));

      // Field::make('text', 'offer_power', 'Мощность')->set_width(50),
    // Field::make('textarea', 'offer_smile_descr', 'Краткое описание')->set_width(100),
    // Field::make('text', 'offer_name', 'Название товара')->set_width(30),
    // Field::make('text', 'offer_label', 'Метка на товаре')->set_width(30),
    // Field::make('text', 'offer_weight', 'Вес')->set_width(50),
    // Field::make('text', 'offer_allsearch', 'Все артикулы для поиска')->set_width(50),
    // Field::make('text', 'offer_siries', 'Серия (для сопутствующих)')->set_width(30),

    // Field::make('text', 'offer_price', 'Цена')->set_width(50),
    // Field::make('text', 'offer_number', 'Колличество')->set_width(50), 


    // Field::make('text', 'offer_benefit', 'Выгода')->set_width(50),
    // Field::make('rich_text', 'prod_descrip', 'Описание товара')->set_width(100),
    // Field::make('text', 'offer_calories', 'Калории')->set_width(50),
    // Field::make('text', 'offer_protein', 'Белки')->set_width(50),
    // Field::make('text', 'offer_fats', 'Жиры')->set_width(50),
    // Field::make('text', 'offer_carbohyd', 'Углеводы')->set_width(50),

    // Field::make( 'complex', 'offer_cherecter', "Характеристики товара табы, левая колонка" )
    // ->add_fields( array(
    //   Field::make( 'text', 'tab_name', 'Наименование параметра' )->set_width(50),
    //   Field::make( 'text', 'tab_val',  'Значение' )->set_width(50),
    // ) ),
    // Field::make( 'complex', 'offer_cherecter-r', "Характеристики товара табы, правая колонка" )
    // ->add_fields( array(
    //   Field::make( 'text', 'tab_name-r', 'Наименование параметра' )->set_width(50),
    //   Field::make( 'text', 'tab_val-r',  'Значение' )->set_width(50),
    // ) ),
    // Field::make('rich_text', 'acses_text', 'Аксесуары')->set_width(100),

    // Field::make('text', 'offer_old_price', 'Старая цена (Базовая)')->set_width(50),

    // Field::make( 'complex', 'offer_modification', "Модификация товара" )
    // ->add_fields( array(
    //   Field::make('text', 'mod_name', 'Наименование модификации' )->set_width(20),
    //   Field::make('text', 'mod_sku', 'Артикул модификации')->set_width(20),
    //   Field::make('text', 'mod_price', 'Цена модификации')->set_width(20),
    //   Field::make('text', 'mod_old_price', 'Старая цена модификации')->set_width(20),
    //   Field::make('text', 'mod_picture_id', 'Изображения модификации')->set_width(20),
    // ) ),

    // Field::make('complex', 'offer_picture', "Галерея товара")
    //   ->add_fields(array(
    //     Field::make('image', 'gal_img', 'Изображение')->set_width(30),
    //     Field::make('text', 'gal_img_sku', 'ID для модификации')->set_width(30),
    //     Field::make('text', 'gal_img_alt', 'alt и title')->set_width(30)
    //   )),

    //   Field::make('complex', 'complex_analogs', 'Ближайшие аналоги')
    //     ->set_max(4) // Можно будет выбрать только 5 постов
    //   ->add_fields(array(
    //     Field::make('image', 'img_analogs', 'Фото')
    //       ->set_width(33),
    //     Field::make('text', 'price_analogs', 'Цена') 
    //       ->set_width(33),
    //     Field::make('text', 'link_analogs', 'Ссылка на товар') 
    //       ->set_width(33),
    // ))
