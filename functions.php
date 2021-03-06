<?php

define("COMPANY_NAME", "ГЕНСВЕТ");
define("MAIL_RESEND", "noreply@ultrakresla.ru");

//----Подключене carbon fields
//----Инструкции по подключению полей см. в комментариях themes-fields.php
include "carbon-fields/carbon-fields-plugin.php";

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', 'crb_attach_theme_options');
function crb_attach_theme_options()
{
	require_once __DIR__ . "/themes-fields.php";
}

add_action('after_setup_theme', 'crb_load');
function crb_load()
{
	require_once('carbon-fields/vendor/autoload.php');
	\Carbon_Fields\Carbon_Fields::boot();
}



//-----Блок описания вывода меню =========================================================================
// 1. Осмысленные названия для алиаса и для описания на русском.
// если это меню в подвали пишем - Меню в подвале 
// если в шапке то пишем - Меню в шапке 
// если 2 меню в шапке пишем  - Меню в шапке (верхняя часть)

add_action('after_setup_theme', function () {
	register_nav_menus([
		// 'menu_hot' => 'Меню актуальных предложений (рядом с каталогом)',
		'menu_main' => 'Меню основное',
		'menu_cat' => 'Меню каталог (в подвале)',
		'menu_company' => 'Меню о компании (в подвале)',
		// 'menu_corp' => 'Общекорпоративное меню (верхняя шапка)', 
	]);
});


// Добавление стилей к пунктам меню li
add_filter('nav_menu_css_class', 'change_menu_item_css_classes', 10, 4);

function change_menu_item_css_classes($classes, $item, $args, $depth)
{
	if ($item->ID  && 'menu_cat' === $args->theme_location) {
		$classes[] = 'footer-top-wrap-list-item-sublist-item';
	}

	if ($item->ID  && 'menu_company' === $args->theme_location) {
		$classes[] = 'footer-top-wrap-list-item-sublist-item';
	}

	if ($item->ID  && 'menu_main' === $args->theme_location) {
		$classes[] = 'header-bottom-wrap-menu-item';
	}

	return $classes;
}


// Добавляет атрибут class к ссылке в пунктах меню menu_main
add_filter('nav_menu_link_attributes', 'filter_nav_menu_link_attributes', 10, 4);
function filter_nav_menu_link_attributes($atts, $item, $args, $depth)
{
	if (in_array($args->theme_location, ['menu_main'])) {
		$atts['class'] = 'header-bottom-wrap-menu-item__link';

		if ($item->current) {
			$atts['class'] .= ' menu-link--active'; //активный пункт меню
		}
	}
	return $atts;
}


// Добавляет иконку к ссылкам меню, прикрепленное к области меню menu_main
function change_menu_item_args($args)
{
	if ($args->theme_location == 'menu_main') {
		$args->link_after = '<img src="' . get_template_directory_uri() . '/img/home/header-menu-arrow-down.svg" alt="" class="header-bottom-wrap-menu-item-down__img">';
	}

	return $args;
}
add_filter('nav_menu_item_args', 'change_menu_item_args');


// Изменить css класс submenu 
add_filter('nav_menu_submenu_css_class', 'change_wp_nav_menu', 10, 3);

function change_wp_nav_menu($classes, $args, $depth)
{
	foreach ($classes as $key => $class) {
		if ($class == 'sub-menu') {
			$classes[$key] = 'header-bottom-wrap-menu-item-submenu';
		}
	}

	return $classes;
}
//----- Menu End ====================================================================================================


add_theme_support('post-thumbnails');
set_post_thumbnail_size(185, 185);

add_post_type_support('page', 'excerpt');

// Подключение стилей и nonce для Ajax в админку 
add_action('admin_head', 'my_assets_admin');
function my_assets_admin()
{
	wp_enqueue_style("style-adm", get_template_directory_uri() . "/style-admin.css");

	wp_localize_script('jquery', 'allAjax', array(
		'nonce'   => wp_create_nonce('NEHERTUTLAZIT')
	));
}

// Подключение стилей и nonce для Ajax и скриптов во фронтенд 
add_action('wp_enqueue_scripts', 'my_assets');
function my_assets()
{

	// Подключение стилей 

	$style_version = "1.0.5";
	$scrypt_version = "1.0.5";

	wp_enqueue_style("style-fonts", get_template_directory_uri() . "/css/fonts.css", array(), $style_version, 'all'); //Fonts (стили)
	wp_enqueue_style("style-icon", get_template_directory_uri() . "/css/icon.css", array(), $style_version, 'all'); //Icon (стили)
	wp_enqueue_style("style-normalize", get_template_directory_uri() . "/css/normalize.css", array(), $style_version, 'all'); //Normalize (стили)
	wp_enqueue_style("style-nouislider", get_template_directory_uri() . "/css/nouislider.min.css", array(), $style_version, 'all'); //Nouislider (стили)
	wp_enqueue_style("style-modal", get_template_directory_uri() . "/css/jquery.arcticmodal-0.3.css", array(), $style_version, 'all'); //Модальные окна (стили)

	wp_enqueue_style("main-style", get_stylesheet_uri(), array(), $style_version, 'all'); // Подключение основных стилей в самом конце 

	// Подключение скриптов

	wp_enqueue_script('jquery');

	wp_enqueue_script('dropdown', get_template_directory_uri() . '/js/dropdown.js', array(), $scrypt_version, true); //Dropdown
	wp_enqueue_script('nouislider', get_template_directory_uri() . '/js/nouislider.min.js', array(), $scrypt_version, true); //Nouislider
	wp_enqueue_script('range-slider', get_template_directory_uri() . '/js/range-slider.js', array(), $scrypt_version, true); //Range-slider
	wp_enqueue_script('mask', get_template_directory_uri() . '/js/jquery.inputmask.bundle.js', array(), $scrypt_version, true); //маска для инпутов
	wp_enqueue_script('amodal', get_template_directory_uri() . '/js/jquery.arcticmodal-0.3.min.js', array(), $scrypt_version, true); //Модальные окна 
	wp_enqueue_script('html2pdf', get_template_directory_uri() . '/js/html2pdf.bundle.js', array(), $scrypt_version, true); //Create PDF-page 

	wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array(), $scrypt_version, true); // Подключение основного скрипта в самом конце
	wp_enqueue_script('filter', get_template_directory_uri() . '/js/filter.js', array(), $scrypt_version, true); // Подключение фильтра
	wp_enqueue_script('calc', get_template_directory_uri() . '/js/lighting.calc.js', array(), $scrypt_version, true); // Калькулятор


	wp_localize_script('main', 'allAjax', array(
		'ajaxurl' => admin_url('admin-ajax.php'),
		'nonce'   => wp_create_nonce('NEHERTUTLAZIT')
	));
}



// Заготовка для вызова ajax
add_action('wp_ajax_aj_fnc', 'aj_fnc');
add_action('wp_ajax_nopriv_aj_fnc', 'aj_fnc');

function aj_fnc()
{
	if (empty($_REQUEST['nonce'])) {
		wp_die('0');
	}

	if (check_ajax_referer('NEHERTUTLAZIT', 'nonce', false)) {
	} else {
		wp_die('НО-НО-НО!', '', 403);
	}
}



// Пагинация
function wp_corenavi()
{
	global $wp_query;
	$total = isset($wp_query->max_num_pages) ? $wp_query->max_num_pages : 1;
	$a['total'] = $total;
	$a['mid_size'] = 3; // сколько ссылок показывать слева и справа от текущей
	$a['end_size'] = 1; // сколько ссылок показывать в начале и в конце
	$a['prev_text'] = ''; // текст ссылки "Предыдущая страница"
	$a['next_text'] = ''; // текст ссылки "Следующая страница"

	if ($total > 1) echo '<div class="category-pagination lines-wrap-tables-wrap-buttons">';
	echo paginate_links($a);
	if ($total > 1) echo '</div>';
}


/* Отправка почты
		
			$headers = array(
				'From: Сайт '.COMPANY_NAME.' <MAIL_RESEND>',
				'content-type: text/html',
			);
		
			add_filter('wp_mail_content_type', create_function('', 'return "text/html";'));
			
			$adr_to_send = <Присваиваем поле карбона c адресами для отправки>;
			$mail_content = "<Тело письма>";
			$mail_them = "<Тема письма>";

			if (wp_mail($adr_to_send, $mail_them, $mail_content, $headers)) {
				wp_die(json_encode(array("send" => true )));
			}
			else {
				wp_die( 'Ошибка отправки!', '', 403 );
			}
	*/


/*	Заготовка шорткода
		function true_url_external( $atts ) {
			$params = shortcode_atts( array( // в массиве укажите значения параметров по умолчанию
				'anchor' => 'Миша Рудрастых', // параметр 1
				'url' => 'https://misha.blog', // параметр 2
			), $atts );
			return "<a href='{$params['url']}' target='_blank'>{$params['anchor']}</a>";
		}
		add_shortcode( 'trueurl', 'true_url_external' );
	*/


// // Регистрация кастомного поста

add_action('init', 'create_taxonomies');

function create_taxonomies()
{

	register_taxonomy('ultracat', array('ultra'), array(
		'hierarchical'  => true,
		'labels'        => array(
			'name'              => "Категория товара",
			'singular_name'     => "Категория товара",
			'search_items'      => "Найти категорию товара",
			'all_items'         => __('Все категории'),
			'parent_item'       => __('Дочерние категории'),
			'parent_item_colon' => __('Дочерние категории:'),
			'edit_item'         => __('Редактировать категорию'),
			'update_item'       => __('Обновить категорию'),
			'add_new_item'      => __('Добавить новую категорию товара'),
			'new_item_name'     => __('Имя новой категории товара'),
			'menu_name'         => __('Категории товара'),
		),
		'description' => "Категория товаров для магазина",
		'public' => true,
		'show_ui'       => true,
		'query_var'     => true,
		'show_in_rest'  => true,
		'show_admin_column'     => true,
	));

	register_taxonomy('ultrastyle', array('ultra'), array(
		'hierarchical'  => false,
		'labels'        => array(
			'name'              => "Стиль дизайна",
			'singular_name'     => "Стиль дизайна",
			'search_items'      => "Найти стиль",
			'all_items'         => __('Все стили'),
			'parent_item'       => __('Дочерние стили'),
			'parent_item_colon' => __('Дочерние стили:'),
			'edit_item'         => __('Редактировать стиль'),
			'update_item'       => __('Обновить стиль'),
			'add_new_item'      => __('Добавить новый стиль'),
			'new_item_name'     => __('Имя новго стиля товара'),
			'menu_name'         => __('Стили товара'),
		),
		'description' => "Стиль дизайна товаров",
		'public' => true,
		'show_ui'       => true,
		'query_var'     => true,
		'show_in_rest'  => true,
		'show_admin_column'     => true,
	));
}


add_action('init', 'ultra_custom_init');

function ultra_custom_init()
{
	register_post_type('ultra', array(
		'labels'             => array(
			'name'               => 'Продукты', // Основное название типа записи
			'singular_name'      => 'Продукты', // отдельное название записи типа Book
			'add_new'            => 'Добавить новый',
			'add_new_item'       => 'Добавить новый товар',
			'edit_item'          => 'Редактировать товар',
			'new_item'           => 'Новый товар',
			'view_item'          => 'Посмотреть товар',
			'search_items'       => 'Найти товар',
			'not_found'          =>  'Товаров не найдено',
			'not_found_in_trash' => 'В корзине товаров не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'Товары'

		),
		'taxonomies' => array('ultracat'),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'show_admin_column'        => true,
		'show_in_quick_edit'        => true,
		'hierarchical'       => false,
		'menu_position'      => 5,
		'supports'           => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'page-attributes', 'post-formats')
	));
}


// // Колонки в таблицу админки

add_filter('manage_posts_columns', 'posts_columns', 5);
add_action('manage_posts_custom_column', 'posts_custom_columns', 5, 2);

function posts_columns($defaults)
{
	$defaults['riv_post_sku'] = __('Артикул');
	$defaults['riv_post_thumbs'] = __('Миниатюра');
	$defaults['riv_post_price'] = __('Цена');
	return $defaults;
}

function posts_custom_columns($column_name, $id)
{


	if ($column_name === 'riv_post_sku') {
		$SKU_t = get_post_meta(get_the_ID(), "_offer_sku", true);
		echo empty($SKU_t) ? "-" : $SKU_t;
	}

	if ($column_name === 'riv_post_thumbs') {
		$img1 = get_the_post_thumbnail_url(get_the_ID(), "thumbnail");

		if (empty($img1))
			$img1 = get_bloginfo("template_url") . "/img/no-photo.jpg";

		echo '<img width = "60" src = "' . $img1 . '" />';
	}

	if ($column_name === 'riv_post_price') {
		$PRICE = get_post_meta(get_the_ID(), "_offer_price", true);
		echo empty($PRICE) ? "0 руб." : $PRICE . " руб.";
	}
}


// Добавляем картинку в Категории =======================================================================================================
/**
 * Возможность загружать изображения для элементов указанных таксономий: категории, метки.
 *
 * Пример получения ID и URL картинки термина:
 * $image_id = get_term_meta( $term_id, '_thumbnail_id', 1 );
 * $image_url = wp_get_attachment_image_url( $image_id, 'thumbnail' );
 *
 * @author: Kama (http://wp-kama.ru)
 *
 * @ver: 2.8
 */
if (is_admin() && !class_exists('Term_Meta_Image')) {
	// init
	//add_action('current_screen', 'Term_Meta_Image_init');
	add_action('admin_init', 'Term_Meta_Image_init');
	function Term_Meta_Image_init()
	{
		$GLOBALS['Term_Meta_Image'] = new Term_Meta_Image();
	}

	class Term_Meta_Image
	{

		// для каких таксономий включить код. По умолчанию для всех публичных
		static $taxes = array(); // пример: array('category', 'post_tag');

		// название мета ключа
		static $meta_key = '_thumbnail_id';

		// URL пустой картинки
		static $add_img_url = 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkAQMAAABKLAcXAAAABlBMVEUAAAC7u7s37rVJAAAAAXRSTlMAQObYZgAAACJJREFUOMtjGAV0BvL/G0YMr/4/CDwY0rzBFJ704o0CWgMAvyaRh+c6m54AAAAASUVORK5CYII=';

		public function __construct()
		{
			if (isset($GLOBALS['Term_Meta_Image']))
				return $GLOBALS['Term_Meta_Image']; // once

			$taxes = self::$taxes ? self::$taxes : get_taxonomies(array('public' => true), 'names');

			foreach ($taxes as $taxname) {
				add_action("{$taxname}_add_form_fields",   array(&$this, 'add_term_image'),     10, 2);
				add_action("{$taxname}_edit_form_fields",  array(&$this, 'update_term_image'),  10, 2);
				add_action("created_{$taxname}",           array(&$this, 'save_term_image'),    10, 2);
				add_action("edited_{$taxname}",            array(&$this, 'updated_term_image'), 10, 2);

				add_filter("manage_edit-{$taxname}_columns",  array(&$this, 'add_image_column'));
				add_filter("manage_{$taxname}_custom_column", array(&$this, 'fill_image_column'), 10, 3);
			}
		}

		## поля при создании термина
		public function add_term_image($taxonomy)
		{
			wp_enqueue_media(); // подключим стили медиа, если их нет

			add_action('admin_print_footer_scripts', array(&$this, 'add_script'), 99);
			$this->css(); ?>
			<div class="form-field term-group">
				<label><?php _e('Image', 'default'); ?></label>
				<div class="term__image__wrapper">
					<a class="termeta_img_button" href="#">
						<img src="<?php echo self::$add_img_url ?>" alt="">
					</a>
					<input type="button" class="button button-secondary termeta_img_remove" value="<?php _e('Remove', 'default'); ?>" />
				</div>

				<input type="hidden" id="term_imgid" name="term_imgid" value="">
			</div>
		<?php
		}

		## поля при редактировании термина
		public function update_term_image($term, $taxonomy)
		{
			wp_enqueue_media(); // подключим стили медиа, если их нет

			add_action('admin_print_footer_scripts', array(&$this, 'add_script'), 99);

			$image_id = get_term_meta($term->term_id, self::$meta_key, true);
			$image_url = $image_id ? wp_get_attachment_image_url($image_id, 'thumbnail') : self::$add_img_url;
			$this->css();
		?>
			<tr class="form-field term-group-wrap">
				<th scope="row"><?php
												_e('Image', 'default');
												?></th>
				<td>
					<div class="term__image__wrapper">
						<a class="termeta_img_button" href="#">
							<?php echo '<img src="' . $image_url . '" alt="">'; ?>
						</a>
						<input type="button" class="button button-secondary termeta_img_remove" value="<?php _e('Remove', 'default'); ?>" />
					</div>
					<input type="hidden" id="term_imgid" name="term_imgid" value="<?php echo $image_id; ?>">
				</td>
			</tr>
		<?php
		}

		public function css()
		{
		?>
			<style>
				.termeta_img_button {
					display: inline-block;
					margin-right: 1em;
				}

				.termeta_img_button img {
					display: block;
					float: left;
					margin: 0;
					padding: 0;
					min-width: 100px;
					max-width: 150px;
					height: auto;
					background: rgba(0, 0, 0, .07);
				}

				.termeta_img_button:hover img {
					opacity: .8;
				}

				.termeta_img_button:after {
					content: '';
					display: table;
					clear: both;
				}
			</style>
		<?php
		}

		## Add script
		public function add_script()
		{
			// выходим если не на нужной странице таксономии
			//$cs = get_current_screen();
			//if( ! in_array($cs->base, array('edit-tags','term')) || ! in_array($cs->taxonomy, (array) $this->for_taxes) )
			//  return;

			$title = __('Featured Image', 'default');
			$button_txt = __('Set featured image', 'default');
		?>
			<script>
				jQuery(document).ready(function($) {
					var frame,
						$imgwrap = $('.term__image__wrapper'),
						$imgid = $('#term_imgid');

					// добавление
					$('.termeta_img_button').click(function(ev) {
						ev.preventDefault();

						if (frame) {
							frame.open();
							return;
						}

						// задаем media frame
						frame = wp.media.frames.questImgAdd = wp.media({
							states: [
								new wp.media.controller.Library({
									title: '<?php echo $title ?>',
									library: wp.media.query({
										type: 'image'
									}),
									multiple: false,
									//date:   false
								})
							],
							button: {
								text: '<?php echo $button_txt ?>', // Set the text of the button.
							}
						});

						// выбор
						frame.on('select', function() {
							var selected = frame.state().get('selection').first().toJSON();
							if (selected) {
								$imgid.val(selected.id);
								$imgwrap.find('img').attr('src', selected.sizes.thumbnail.url);
							}
						});

						// открываем
						frame.on('open', function() {
							if ($imgid.val())
								frame.state().get('selection').add(wp.media.attachment($imgid.val()));
						});

						frame.open();
					});

					// удаление
					$('.termeta_img_remove').click(function() {
						$imgid.val('');
						$imgwrap.find('img').attr('src', '<?php echo self::$add_img_url ?>');
					});
				});
			</script>

<?php
		}

		## Добавляет колонку картинки в таблицу терминов
		public function add_image_column($columns)
		{
			// подправим ширину колонки через css
			add_action('admin_notices', function () {
				echo '<style>.column-image{ width:50px; text-align:center; }</style>';
			});

			$num = 1; // после какой по счету колонки вставлять

			$new_columns = array('image' => ''); // колонка без названия...

			return array_slice($columns, 0, $num) + $new_columns + array_slice($columns, $num);
		}

		public function fill_image_column($string, $column_name, $term_id)
		{
			// если есть картинка
			if ($image_id = get_term_meta($term_id, self::$meta_key, 1))
				$string = '<img src="' . wp_get_attachment_image_url($image_id, 'thumbnail') . '" width="50" height="50" alt="" style="border-radius:4px;" />';

			return $string;
		}

		## Save the form field
		public function save_term_image($term_id, $tt_id)
		{
			if (isset($_POST['term_imgid']) && $image = (int) $_POST['term_imgid'])
				add_term_meta($term_id, self::$meta_key, $image, true);
		}

		## Update the form field value
		public function updated_term_image($term_id, $tt_id)
		{
			if (!isset($_POST['term_imgid']))
				return;

			if ($image = (int) $_POST['term_imgid'])
				update_term_meta($term_id, self::$meta_key, $image);
			else
				delete_term_meta($term_id, self::$meta_key);
		}
	}
}
// Добавляем картинку в Категории End =======================================================================================================


// Отправка формы Скачать инструкцию ========================================================================================================
add_action('wp_ajax_sendinstruction', 'sendinstruction');
add_action('wp_ajax_nopriv_sendinstruction', 'sendinstruction');

function sendinstruction()
{
	if (empty($_REQUEST['nonce'])) {
		wp_die('0');
	}

	if (check_ajax_referer('NEHERTUTLAZIT', 'nonce', false)) {

		$headers = array(
			'From: Сайт ' . COMPANY_NAME . ' <' . MAIL_RESEND . '>',
			'content-type: text/html',
		);

		add_filter('wp_mail_content_type', create_function('', 'return "text/html";'));

		if (wp_mail(carbon_get_theme_option('as_email_send'), 'Посетитель скачал инструкцию', '<strong>Имя:</strong> ' . $_REQUEST["name"] . ' <br/> <strong>Телефон:</strong> ' . $_REQUEST["tel"] . ' <br/> <strong>Email:</strong> ' . $_REQUEST["email"], $headers)) {

			// отправляем данные в таблицу
			$url = "https://docs.google.com/forms/d/1QsbqCzDHvWMCpiCBPJWF4Z1PYpBuXnF9NJptafbWRzA/formResponse";

			$post_data = array(
				"entry.1832350810" => $_REQUEST["email"],
				"entry.217436313" => $_REQUEST["tel"],
				"entry.1625375526" => $_REQUEST["name"],
				"entry.1169221904" => 'Скачать инструкцию',
				"draftResponse" => "[,,&quot;-6004279802167264257&quot;]",
				"pageHistory" => "0",
				"fbzx" => "-6004279802167264257"
			);

			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
			$output = curl_exec($ch);
			curl_close($ch);

			wp_die("<span style = 'color:green;'>Если скачивание файла ещё не началось, перейдите по этой <a href=''>ссылке (нажать)</a>.</span>");
		} else {
			wp_die("<span style = 'color:red;'>Сервис недоступен попробуйте позднее.</span>");
		}
	} else {
		wp_die('НО-НО-НО!', '', 403);
	}
}

// Отправка формы Скачать прайс-лист
add_action('wp_ajax_sendprice', 'sendprice');
add_action('wp_ajax_nopriv_sendprice', 'sendprice');

function sendprice()
{
	if (empty($_REQUEST['nonce'])) {
		wp_die('0');
	}

	if (check_ajax_referer('NEHERTUTLAZIT', 'nonce', false)) {

		$headers = array(
			'From: Сайт ' . COMPANY_NAME . ' <' . MAIL_RESEND . '>',
			'content-type: text/html',
		);

		add_filter('wp_mail_content_type', create_function('', 'return "text/html";'));
		if (wp_mail(carbon_get_theme_option('as_email_send'), 'Запрос прайс-листа', '<strong>Имя:</strong> ' . $_REQUEST["name"] . ' <br/> <strong>Телефон:</strong> ' . $_REQUEST["tel"] . ' <br/> <strong>Email:</strong> ' . $_REQUEST["email"], $headers)) {
			// отправляем данные в таблицу
			$url = "https://docs.google.com/forms/d/1QsbqCzDHvWMCpiCBPJWF4Z1PYpBuXnF9NJptafbWRzA/formResponse";

			$post_data = array(
				"entry.1832350810" => $_REQUEST["email"],
				"entry.217436313" => $_REQUEST["tel"],
				"entry.1625375526" => $_REQUEST["name"],
				"entry.1169221904" => 'Скачать прайс-лист',
				"draftResponse" => "[,,&quot;-6004279802167264257&quot;]",
				"pageHistory" => "0",
				"fbzx" => "-6004279802167264257"
			);

			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
			$output = curl_exec($ch);
			curl_close($ch);

			wp_die("<span style = 'color:green;'>Мы свяжемся с Вами в ближайшее время, чтобы прислать прайс-лист.</span>");
		} else {
			wp_die("<span style = 'color:red;'>Сервис недоступен попробуйте позднее.</span>");
		}
	} else {
		wp_die('НО-НО-НО!', '', 403);
	}
}

// Отправка формы Окна Подписаться
add_action('wp_ajax_sendsubscribe', 'sendsubscribe');
add_action('wp_ajax_nopriv_sendsubscribe', 'sendsubscribe');

function sendsubscribe()
{
	if (empty($_REQUEST['nonce'])) {
		wp_die('0');
	}

	if (check_ajax_referer('NEHERTUTLAZIT', 'nonce', false)) {

		$headers = array(
			'From: Сайт ' . COMPANY_NAME . ' <' . MAIL_RESEND . '>',
			'content-type: text/html',
		);

		add_filter('wp_mail_content_type', create_function('', 'return "text/html";'));
		if (wp_mail(carbon_get_theme_option('as_email_send'), 'Заявка с окна "Подписаться"', '<strong>Email:</strong> ' . $_REQUEST["email"], $headers)) {
			// отправляем данные в таблицу
			$url = "https://docs.google.com/forms/d/1QsbqCzDHvWMCpiCBPJWF4Z1PYpBuXnF9NJptafbWRzA/formResponse";

			$post_data = array(
				"entry.1832350810" => $_REQUEST["email"],
				"entry.217436313" => '',
				"entry.1625375526" => '',
				"entry.1169221904" => 'Подписаться',
				"draftResponse" => "[,,&quot;-6004279802167264257&quot;]",
				"pageHistory" => "0",
				"fbzx" => "-6004279802167264257"
			);

			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
			$output = curl_exec($ch);
			curl_close($ch);

			wp_die("<span style = 'color:green;'>Спасибо за подписку!</span>");
		} else {
			wp_die("<span style = 'color:red;'>Сервис недоступен попробуйте позднее.</span>");
		}
	} else {
		wp_die('НО-НО-НО!', '', 403);
	}
}

// Отправка формы Окна Расчёт стоимости
add_action('wp_ajax_sendcalcresult', 'sendcalcresult');
add_action('wp_ajax_nopriv_sendcalcresult', 'sendcalcresult');

function sendcalcresult()
{
	if (empty($_REQUEST['nonce'])) {
		wp_die('0');
	}

	if (check_ajax_referer('NEHERTUTLAZIT', 'nonce', false)) {

		$headers = array(
			'From: Сайт ' . COMPANY_NAME . ' <' . MAIL_RESEND . '>',
			'content-type: text/html',
		);

		add_filter('wp_mail_content_type', create_function('', 'return "text/html";'));
		if (wp_mail(carbon_get_theme_option('as_email_send'), 'Заявка с формы "Получить расчёт стоимости"', '<strong>Email:</strong> ' . $_REQUEST["email"], $headers)) {
			// отправляем данные в таблицу
			$url = "https://docs.google.com/forms/d/1QsbqCzDHvWMCpiCBPJWF4Z1PYpBuXnF9NJptafbWRzA/formResponse";

			$post_data = array(
				"entry.1832350810" => $_REQUEST["email"],
				"entry.217436313" => '',
				"entry.1625375526" => '',
				"entry.1169221904" => 'Расчёт стоимости',
				"draftResponse" => "[,,&quot;-6004279802167264257&quot;]",
				"pageHistory" => "0",
				"fbzx" => "-6004279802167264257"
			);

			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
			$output = curl_exec($ch);
			curl_close($ch);

			wp_die("<span style = 'color:green;'>Мы свяжемся с Вами в ближайшее время.</span>");
		} else {
			wp_die("<span style = 'color:red;'>Сервис недоступен попробуйте позднее.</span>");
		}
	} else {
		wp_die('НО-НО-НО!', '', 403);
	}
}

// Хлебные крошки ================================================================================================================
function kama_breadcrumbs($sep = '  ', $l10n = array(), $args = array())
{
	$kb = new Kama_Breadcrumbs;
	echo $kb->get_crumbs($sep, $l10n, $args);
}

class Kama_Breadcrumbs
{

	public $arg;

	// Локализация
	static $l10n = array(
		'home'       => 'Главная',
		'paged'      => 'Страница %d',
		'_404'       => 'Ошибка 404',
		'search'     => '<li class="breadcrumb-list-item">Результаты поиска по запросу</li><li class="breadcrumb-list-item"><b>%s</b></li>',
		'author'     => 'Архив автора: <b>%s</b>',
		'year'       => 'Архив за <b>%d</b> год',
		'month'      => 'Архив за: <b>%s</b>',
		'day'        => '',
		'attachment' => 'Медиа: %s',
		'tag'        => 'Записи по метке: <b>%s</b>',
		'tax_tag'    => '%1$s из "%2$s" по тегу: <b>%3$s</b>',
		// tax_tag выведет: 'тип_записи из "название_таксы" по тегу: имя_термина'.
		// Если нужны отдельные холдеры, например только имя термина, пишем так: 'записи по тегу: %3$s'
	);

	// Параметры по умолчанию
	static $args = array(
		'on_front_page'   => true,  // выводить крошки на главной странице
		'show_post_title' => true,  // показывать ли название записи в конце (последний элемент). Для записей, страниц, вложений
		'show_term_title' => true,  // показывать ли название элемента таксономии в конце (последний элемент). Для меток, рубрик и других такс
		'title_patt'      => '<li class="breadcrumb-list-item">%s</li>', // шаблон для последнего заголовка. Если включено: show_post_title или show_term_title
		'last_sep'        => true,  // показывать последний разделитель, когда заголовок в конце не отображается
		'markup'          => 'schema.org', // 'markup' - микроразметка. Может быть: 'rdf.data-vocabulary.org', 'schema.org', '' - без микроразметки
		// или можно указать свой массив разметки:
		// array( 'wrappatt'=>'<div class="kama_breadcrumbs">%s</div>', 'linkpatt'=>'<a href="%s">%s</a>', 'sep_after'=>'', )
		'priority_tax'    => array('category'), // приоритетные таксономии, нужно когда запись в нескольких таксах
		'priority_terms'  => array(), // 'priority_terms' - приоритетные элементы таксономий, когда запись находится в нескольких элементах одной таксы одновременно.
		// Например: array( 'category'=>array(45,'term_name'), 'tax_name'=>array(1,2,'name') )
		// 'category' - такса для которой указываются приор. элементы: 45 - ID термина и 'term_name' - ярлык.
		// порядок 45 и 'term_name' имеет значение: чем раньше тем важнее. Все указанные термины важнее неуказанных...
		'nofollow' => false, // добавлять rel=nofollow к ссылкам?

		// служебные
		'sep'             => '',
		'linkpatt'        => '',
		'pg_end'          => '',
	);

	function get_crumbs($sep, $l10n, $args)
	{
		global $post, $wp_query, $wp_post_types;

		self::$args['sep'] = $sep;

		// Фильтрует дефолты и сливает
		$loc = (object) array_merge(apply_filters('kama_breadcrumbs_default_loc', self::$l10n), $l10n);
		$arg = (object) array_merge(apply_filters('kama_breadcrumbs_default_args', self::$args), $args);

		// $arg->sep = '<span class="kb_sep">' . $arg->sep . '</span>'; // дополним

		// упростим
		$sep = &$arg->sep;
		$this->arg = &$arg;

		// микроразметка ---
		if (1) {
			$mark = &$arg->markup;

			// Разметка по умолчанию
			if (!$mark) $mark = array(
				'wrappatt'  => '<ul class="breadcrumb-list">%s</ul>',
				'linkpatt'  => '<li class="breadcrumb-list-item"><a href="%s" class="breadcrumb-list-item__link">%s</a></li>',
				'sep_after' => '',
			);
			// rdf
			elseif ($mark === 'rdf.data-vocabulary.org') $mark = array(
				'wrappatt'   => '<ul class="breadcrumb-list" prefix="v: http://rdf.data-vocabulary.org/#">%s</ul>',
				'linkpatt'   => '<li class="breadcrumb-list-item"><a href="%s" class="breadcrumb-list-item__link" rel="v:url" property="v:title">%s</a></li>',
				'sep_after'  => '', // закрываем span после разделителя!
			);
			// schema.org
			elseif ($mark === 'schema.org') $mark = array(
				'wrappatt'   => '<ul class="breadcrumb-list" itemscope itemtype="http://schema.org/BreadcrumbList">%s</ul>',
				'linkpatt'   => '<li class="breadcrumb-list-item"><a href="%s" class="breadcrumb-list-item__link" itemprop="item">%s</a></li>',
				'sep_after'  => '',
			);

			elseif (!is_array($mark))
				die(__CLASS__ . ': "markup" parameter must be array...');

			$wrappatt  = $mark['wrappatt'];
			$arg->linkpatt  = $arg->nofollow ? str_replace('<a ', '<a rel="nofollow"', $mark['linkpatt']) : $mark['linkpatt'];
			$arg->sep      .= $mark['sep_after'] . "\n";
		}

		$linkpatt = $arg->linkpatt; // упростим

		$q_obj = get_queried_object();

		// может это архив пустой таксы?
		$ptype = null;
		if (empty($post)) {
			if (isset($q_obj->taxonomy))
				$ptype = &$wp_post_types[get_taxonomy($q_obj->taxonomy)->object_type[0]];
		} else $ptype = &$wp_post_types[$post->post_type];

		// paged
		$arg->pg_end = '';
		if (($paged_num = get_query_var('paged')) || ($paged_num = get_query_var('page')))
			$arg->pg_end = $sep . sprintf($loc->paged, (int) $paged_num);

		$pg_end = $arg->pg_end; // упростим

		$out = '';

		if (is_front_page()) {
			return $arg->on_front_page ? sprintf($wrappatt, ($paged_num ? sprintf($linkpatt, get_home_url(), $loc->home) . $pg_end : $loc->home)) : '';
		}
		// страница записей, когда для главной установлена отдельная страница.
		elseif (is_home()) {
			$out = $paged_num ? (sprintf($linkpatt, get_permalink($q_obj), esc_html($q_obj->post_title)) . $pg_end) : esc_html($q_obj->post_title);
		} elseif (is_404()) {
			$out = $loc->_404;
		} elseif (is_search()) {
			$out = sprintf($loc->search, esc_html($GLOBALS['s']));
		} elseif (is_author()) {
			$tit = sprintf($loc->author, esc_html($q_obj->display_name));
			$out = ($paged_num ? sprintf($linkpatt, get_author_posts_url($q_obj->ID, $q_obj->user_nicename) . $pg_end, $tit) : $tit);
		} elseif (is_year() || is_month() || is_day()) {
			$y_url  = get_year_link($year = get_the_time('Y'));

			if (is_year()) {
				$tit = sprintf($loc->year, $year);
				$out = ($paged_num ? sprintf($linkpatt, $y_url, $tit) . $pg_end : $tit);
			}
			// month day
			else {
				$y_link = sprintf($linkpatt, $y_url, $year);
				$m_url  = get_month_link($year, get_the_time('m'));

				if (is_month()) {
					$tit = sprintf($loc->month, get_the_time('F'));
					$out = $y_link . $sep . ($paged_num ? sprintf($linkpatt, $m_url, $tit) . $pg_end : $tit);
				} elseif (is_day()) {
					$m_link = sprintf($linkpatt, $m_url, get_the_time('F'));
					$out = $y_link . $sep . $m_link . $sep . get_the_time('l');
				}
			}
		}
		// Древовидные записи
		elseif (is_singular() && $ptype->hierarchical) {
			$out = $this->_add_title($this->_page_crumbs($post), $post);
		}
		// Таксы, плоские записи и вложения
		else {
			$term = $q_obj; // таксономии

			// определяем термин для записей (включая вложения attachments)
			if (is_singular()) {
				// изменим $post, чтобы определить термин родителя вложения
				if (is_attachment() && $post->post_parent) {
					$save_post = $post; // сохраним
					$post = get_post($post->post_parent);
				}

				// учитывает если вложения прикрепляются к таксам древовидным - все бывает :)
				$taxonomies = get_object_taxonomies($post->post_type);
				// оставим только древовидные и публичные, мало ли...
				$taxonomies = array_intersect($taxonomies, get_taxonomies(array('hierarchical' => true, 'public' => true)));

				if ($taxonomies) {
					// сортируем по приоритету
					if (!empty($arg->priority_tax)) {
						usort($taxonomies, function ($a, $b) use ($arg) {
							$a_index = array_search($a, $arg->priority_tax);
							if ($a_index === false) $a_index = 9999999;

							$b_index = array_search($b, $arg->priority_tax);
							if ($b_index === false) $b_index = 9999999;

							return ($b_index === $a_index) ? 0 : ($b_index < $a_index ? 1 : -1); // меньше индекс - выше
						});
					}

					// пробуем получить термины, в порядке приоритета такс
					foreach ($taxonomies as $taxname) {
						if ($terms = get_the_terms($post->ID, $taxname)) {
							// проверим приоритетные термины для таксы
							$prior_terms = &$arg->priority_terms[$taxname];
							if ($prior_terms && count($terms) > 2) {
								foreach ((array) $prior_terms as $term_id) {
									$filter_field = is_numeric($term_id) ? 'term_id' : 'slug';
									$_terms = wp_list_filter($terms, array($filter_field => $term_id));

									if ($_terms) {
										$term = array_shift($_terms);
										break;
									}
								}
							} else
								$term = array_shift($terms);

							break;
						}
					}
				}

				if (isset($save_post)) $post = $save_post; // вернем обратно (для вложений)
			}

			// вывод

			// все виды записей с терминами или термины
			if ($term && isset($term->term_id)) {
				$term = apply_filters('kama_breadcrumbs_term', $term);

				// attachment
				if (is_attachment()) {
					if (!$post->post_parent)
						$out = sprintf($loc->attachment, esc_html($post->post_title));
					else {
						if (!$out = apply_filters('attachment_tax_crumbs', '', $term, $this)) {
							$_crumbs    = $this->_tax_crumbs($term, 'self');
							$parent_tit = sprintf($linkpatt, get_permalink($post->post_parent), get_the_title($post->post_parent));
							$_out = implode($sep, array($_crumbs, $parent_tit));
							$out = $this->_add_title($_out, $post);
						}
					}
				}
				// single
				elseif (is_single()) {
					if (!$out = apply_filters('post_tax_crumbs', '', $term, $this)) {
						$_crumbs = $this->_tax_crumbs($term, 'self');
						$out = $this->_add_title($_crumbs, $post);
					}
				}
				// не древовидная такса (метки)
				elseif (!is_taxonomy_hierarchical($term->taxonomy)) {
					// метка
					if (is_tag())
						$out = $this->_add_title('', $term, sprintf($loc->tag, esc_html($term->name)));
					// такса
					elseif (is_tax()) {
						$post_label = $ptype->labels->name;
						$tax_label = $GLOBALS['wp_taxonomies'][$term->taxonomy]->labels->name;
						$out = $this->_add_title('', $term, sprintf($loc->tax_tag, $post_label, $tax_label, esc_html($term->name)));
					}
				}
				// древовидная такса (рибрики)
				else {
					if (!$out = apply_filters('term_tax_crumbs', '', $term, $this)) {
						$_crumbs = $this->_tax_crumbs($term, 'parent');
						$out = $this->_add_title($_crumbs, $term, esc_html($term->name));
					}
				}
			}
			// влоежния от записи без терминов
			elseif (is_attachment()) {
				$parent = get_post($post->post_parent);
				$parent_link = sprintf($linkpatt, get_permalink($parent), esc_html($parent->post_title));
				$_out = $parent_link;

				// вложение от записи древовидного типа записи
				if (is_post_type_hierarchical($parent->post_type)) {
					$parent_crumbs = $this->_page_crumbs($parent);
					$_out = implode($sep, array($parent_crumbs, $parent_link));
				}

				$out = $this->_add_title($_out, $post);
			}
			// записи без терминов
			elseif (is_singular()) {
				$out = $this->_add_title('', $post);
			}
		}

		// Убрали вывод основноый таксономии Продукты
		// замена ссылки на архивную страницу для типа записи
		// $home_after = apply_filters('kama_breadcrumbs_home_after', '', $linkpatt, $sep, $ptype);

		// if ('' === $home_after) {
		// 	// Ссылка на архивную страницу типа записи для: отдельных страниц этого типа; архивов этого типа; таксономий связанных с этим типом.
		// 	if (
		// 		$ptype && $ptype->has_archive && !in_array($ptype->name, array('post', 'page', 'attachment'))
		// 		&& (is_post_type_archive() || is_singular() || (is_tax() && in_array($term->taxonomy, $ptype->taxonomies)))
		// 	) {
		// 		$pt_title = $ptype->labels->name;

		// 		// первая страница архива типа записи
		// 		if (is_post_type_archive() && !$paged_num)
		// 			$home_after = sprintf($this->arg->title_patt, $pt_title);
		// 		// singular, paged post_type_archive, tax
		// 		else {
		// 			$home_after = sprintf($linkpatt, get_post_type_archive_link($ptype->name), $pt_title);

		// 			$home_after .= (($paged_num && !is_tax()) ? $pg_end : $sep); // пагинация
		// 		}
		// 	}
		// }

		$before_out = sprintf($linkpatt, home_url(), $loc->home) . ($home_after ? $sep . $home_after : ($out ? $sep : ''));

		$out = apply_filters('kama_breadcrumbs_pre_out', $out, $sep, $loc, $arg);

		$out = sprintf($wrappatt, $before_out . $out);

		return apply_filters('kama_breadcrumbs', $out, $sep, $loc, $arg);
	}

	function _page_crumbs($post)
	{
		$parent = $post->post_parent;

		$crumbs = array();
		while ($parent) {
			$page = get_post($parent);
			$crumbs[] = sprintf($this->arg->linkpatt, get_permalink($page), esc_html($page->post_title));
			$parent = $page->post_parent;
		}

		return implode($this->arg->sep, array_reverse($crumbs));
	}

	function _tax_crumbs($term, $start_from = 'self')
	{
		$termlinks = array();
		$term_id = ($start_from === 'parent') ? $term->parent : $term->term_id;
		while ($term_id) {
			$term       = get_term($term_id, $term->taxonomy);
			$termlinks[] = sprintf($this->arg->linkpatt, get_term_link($term), esc_html($term->name));
			$term_id    = $term->parent;
		}

		if ($termlinks)
			return implode($this->arg->sep, array_reverse($termlinks)) /*. $this->arg->sep*/;
		return '';
	}

	// добалвяет заголовок к переданному тексту, с учетом всех опций. Добавляет разделитель в начало, если надо.
	function _add_title($add_to, $obj, $term_title = '')
	{
		$arg = &$this->arg; // упростим...
		$title = $term_title ? $term_title : esc_html($obj->post_title); // $term_title чиститься отдельно, теги моугт быть...
		$show_title = $term_title ? $arg->show_term_title : $arg->show_post_title;

		// пагинация
		if ($arg->pg_end) {
			$link = $term_title ? get_term_link($obj) : get_permalink($obj);
			$add_to .= ($add_to ? $arg->sep : '') . sprintf($arg->linkpatt, $link, $title) . $arg->pg_end;
		}
		// дополняем - ставим sep
		elseif ($add_to) {
			if ($show_title)
				$add_to .= $arg->sep . sprintf($arg->title_patt, $title);
			elseif ($arg->last_sep)
				$add_to .= $arg->sep;
		}
		// sep будет потом...
		elseif ($show_title)
			$add_to = sprintf($arg->title_patt, $title);

		return $add_to;
	}
}
// Хлебные крошки End ================================================================================================================

// Фильтр Start ================================================================================================================


add_action('rest_api_init', function () {
	register_rest_route('gensvet/v2', '/get_filter', array(
		'methods'  => 'GET',
		'callback' => 'get_filter',
		'args' => array(
			'catid' => array(
				'default'           => null,
				'required'          => true,
			)
		),
	));
});

//http://ruvick.site/wp-json/gensvet/v2/get_filter?catid=33
function get_filter(WP_REST_Request $request)
{

	$queryParam = array(
		'post_type' => 'ultra',
		'posts_per_page' => -1,
		'tax_query' => array(
			array(
				'taxonomy' => 'ultracat',
				'field'    => 'id',
				'terms'    => $request['catid']
			)
		)

	);

	//_offer_size - размер
	//_offer_diod_type - тип диодов
	//_offer_driver - наличие драйвера
	//_offer_power - мощьность
	//_offer_light_flow - Световой поток
	//_offer_diffuser - Рассеиватель

	$queryMain = new WP_Query($queryParam);


	$rez = array();

	$rez["offer_size"] = array();
	$rez["offer_diod_type"] = array();
	$rez["offer_driver"] = array();
	$rez["offer_power"] = array();
	$rez["offer_light_flow"] = array();
	$rez["offer_diffuser"] = array();
	$rez["offer_colour_temp"] = array();

	// $min = PHP_INT_MAX;
	// $max = PHP_INT_MIN;

	foreach ($queryMain->posts as $postM) {

		$offer_size = get_post_meta($postM->ID, "_offer_size", true);
		if (!empty($offer_size) && !in_array($offer_size, $rez["offer_size"]))
			$rez["offer_size"][] = $offer_size;

		$offer_diod_type = get_post_meta($postM->ID, "_offer_light_effect", true);
		if (!empty($offer_diod_type) && !in_array($offer_diod_type, $rez["offer_light_effect"]))
			$rez["offer_light_effect"][] = $offer_diod_type;

		$offer_driver = carbon_get_post_meta($postM->ID, "driver_complex");
		$product_driver = $offer_driver[0]['driver_denomination'];
		if (!empty($product_driver) && !in_array($product_driver, $rez["offer_driver"]))
			$rez["offer_driver"][] = $product_driver;

		$offer_power = get_post_meta($postM->ID, "_offer_power", true);
		if (!empty($offer_power) && !in_array($offer_power, $rez["offer_power"]))
			$rez["offer_power"][] = $offer_power;

		$offer_light_flow = get_post_meta($postM->ID, "_offer_light_flow", true);
		if (!empty($offer_light_flow) && !in_array($offer_light_flow, $rez["offer_light_flow"]))
			$rez["offer_light_flow"][] = $offer_light_flow;

		$offer_diffuser = get_post_meta($postM->ID, "_offer_diffuser", true);
		if (!empty($offer_diffuser) && !in_array($offer_diffuser, $rez["offer_diffuser"]))
			$rez["offer_diffuser"][] = $offer_diffuser;

		$offer_color_type = get_post_meta($postM->ID, "_offer_colour_temp", true);
		if (!empty($offer_color_type) && !in_array($offer_color_type, $rez["offer_colour_temp"]))
			$rez["offer_colour_temp"][] = $offer_color_type;

		// if ($min > (int)get_post_meta($postM->ID, "_offer_colour_temp", true))
		// 	$min = (int)get_post_meta($postM->ID, "_offer_colour_temp", true);

		// if ($max < (int)get_post_meta($postM->ID, "_offer_colour_temp", true))
		// 	$max = (int)get_post_meta($postM->ID, "_offer_colour_temp", true);
	}

	// $rez["offer_colour_temp_max"] = $max;
	// $rez["offer_colour_temp_min"] = $min;

	sort($rez["offer_size"]);
	sort($rez["offer_light_effect"]);
	sort($rez["offer_driver"]);
	sort($rez["offer_power"]);
	sort($rez["offer_light_flow"]);
	sort($rez["offer_diffuser"]);
	sort($rez["offer_colour_temp"]);

	if (!empty($rez))
		return $rez;
	else
		return new WP_Error('no_token', 'Токен не найден или пользователь уже разлогинен.', ['status' => 403]);
}

// Фильтр End ================================================================================================================

// Расчет колличества светильников Start ==============================================================================================================
function get_count_lamp(
	$tov_light_flow,
	$koof_zap,
	$dlinna,
	$shirina,
	$visota,
	$visotaRp,
	$koof_isp,
	$teb_osv
) {

	$koof_zap = floatval($koof_zap);

	$s = $dlinna * $shirina;
	if ($tov_light_flow == '-' || $tov_light_flow == '0') {
		$n = 0;
	} else {
		$n = ($teb_osv * $s * $koof_zap)/($koof_isp * $tov_light_flow);
	}
	return round($n);
}


add_action('rest_api_init', function () {
	register_rest_route('gensvet/v2', '/get_lamp_count', array(
		'methods'  => 'GET',
		'callback' => 'get_lamp_count',
		'args' => array(
			'count' => array(
				'default'           => null,
				'required'          => true,
			),

			'app' => array(
				'default'           => null,
				'required'          => true,
			),

			"koofzap" => array(
				'default'           => null,
				'required'          => true,
			),

			"dlinna" => array(
				'default'           => null,
				'required'          => true,
			),
			
			"shirina" => array(
				'default'           => null,
				'required'          => true,
			),
			
			"visota" => array(
				'default'           => null,
				'required'          => true,
			),
			
			"visotarp" => array(
				'default'           => null,
				'required'          => true,
			),
			
			"koofisp" => array(
				'default'           => null,
				'required'          => true,
			),
			
			"tebosv" => array(
				'default'           => null,
				'required'          => true,
			)
		),
	));
});


//http://ruvick.site/wp-json/gensvet/v2/get_lamp_count?count=20&app=20
function get_lamp_count(WP_REST_Request $request)
{
	$queryParam = array(
		'post_type' => 'ultra',
		'posts_per_page' => $request['app'],
		'offset' => $request['count']
	);

	$queryCalc = new WP_Query($queryParam);

	$rez = array();

	foreach ($queryCalc->posts as $tovarLg) {
		
		$tov_light_flow = carbon_get_post_meta($tovarLg->ID, "offer_light_flow");
		$count = get_count_lamp(
			$tov_light_flow,
			$request["koofzap"],
			$request["dlinna"],
			$request["shirina"],
			$request["visota"],
			$request["visotarp"],
			$request["koofisp"],
			$request["tebosv"]
		);

		$rez[] = [
					"name" => carbon_get_post_meta($tovarLg->ID, "offer_sku") . " - " .  $tovarLg->post_title, 
					"lnk" => get_the_permalink($tovarLg->ID),
					"count" => $count
		];	
	}


	return $rez;
		
}


add_action('rest_api_init', function () {
	register_rest_route('gensvet/v2', '/get_lamp_count_one', array(
		'methods'  => 'GET',
		'callback' => 'get_lamp_count_one',
		'args' => array(
			'str' => array(
				'default'           => null,
				'required'          => true,
			),

			"koofzap" => array(
				'default'           => null,
				'required'          => true,
			),

			"dlinna" => array(
				'default'           => null,
				'required'          => true,
			),
			
			"shirina" => array(
				'default'           => null,
				'required'          => true,
			),
			
			"visota" => array(
				'default'           => null,
				'required'          => true,
			),
			
			"visotarp" => array(
				'default'           => null,
				'required'          => true,
			),
			
			"koofisp" => array(
				'default'           => null,
				'required'          => true,
			),
			
			"tebosv" => array(
				'default'           => null,
				'required'          => true,
			)
		),
	));
});


//http://ruvick.site/wp-json/gensvet/v2/get_lamp_count_one?count=20&app=20
function get_lamp_count_one(WP_REST_Request $request)
{
	$queryParam = array(
		'post_type' => 'ultra',
		'posts_per_page' => -1,
		'meta_query' => [
			'relation' => 'OR',
			[
				'key' => '_offer_name',
				'value' => $request['str'],
				'compare' => "LIKE"
			],
			[
				'key' => '_offer_sku',
				'value' => $request['str'],
				'compare' => "LIKE"
			]
		]
	);

	$queryCalc = new WP_Query($queryParam);

	$rez = array();

	foreach ($queryCalc->posts as $tovarLg) {
		
		$tov_light_flow = carbon_get_post_meta($tovarLg->ID, "offer_light_flow");
		$count = get_count_lamp(
			$tov_light_flow,
			$request["koofzap"],
			$request["dlinna"],
			$request["shirina"],
			$request["visota"],
			$request["visotarp"],
			$request["koofisp"],
			$request["tebosv"]
		);

		$rez[] = [
					"img" => get_the_post_thumbnail_url($tovarLg->ID), 
					"name" => carbon_get_post_meta($tovarLg->ID, "offer_sku") . " - " .  $tovarLg->post_title, 
					"lnk" => get_the_permalink($tovarLg->ID),
					"count" => $count
		];	
	}


	return $rez;
		
}


// Расчет колличества светильников End ================================================================================================================

/* поиск по артикулу в админке */
add_action('restrict_manage_posts','custom_filter_for_posts_html');
function custom_filter_for_posts_html(){  /* это функция которая отображает сам фильтр */?>
<style>
input[type='number'] {-moz-appearance:textfield;}
input::-webkit-outer-spin-button, input::-webkit-inner-spin-button {-webkit-appearance: none;}
</style>
<label for="filter-by-field" class="screen-reader-text">Артикул</label>
<input placeholder="Артикул" type="text" value="<?php if (isset($_GET['meta_filter'])) {echo sanitize_text_field($_GET['meta_filter']);} ?>" name="meta_filter" id="filter-by-field">
<?php
}
add_filter('request','custom_filter_for_posts');
function custom_filter_for_posts($vars){
 // функция custom_filter_for_posts обрабатывает запрос и фильтрует данные
 // $vars - это стандартные параметры запроса WP. Типа как у функции get_posts
 // в итоге мы дописываем только то что нам нужно, не изменяя тех значений которые нам не нужны
 global $pagenow;
 global $post_type;

 // тут нужно указать все типы постов где нужен этот фильтр, например 'page','product' и т.д.    
 $start_in_post_types=array('ultra'); 
 
 if( !empty($pagenow) && $pagenow=='edit.php' && in_array($post_type , $start_in_post_types)){
     $contents = (string)sanitize_text_field($_GET['meta_filter']);
     if (!empty($_GET['meta_filter'])){
	$vars['meta_query']=array(
	"relation"=>'OR',
	 array(
		"key"=>"offer_sku", // ключ 1-го произвольного поля по которому идет поиск
		"value"=> $contents,
		'type' => 'char',
		'compare' => 'LIKE'
	 ),
	);
     } 
 }    
 return $vars;
}
/* end поиск по артикулу в админке */


add_filter( 'posts_clauses', 'km_metadata_search' );

# Добавляем поиск по метаполям в базовый поиск WordPress
function km_metadata_search( $clauses ){
	global $wpdb;

	if( ! is_search() || ! is_main_query() )
		return $clauses;

	$clauses['join'] .= " LEFT JOIN $wpdb->postmeta kmpm ON (ID = kmpm.post_id)";

	$clauses['where'] = preg_replace(
		"/OR +\( *$wpdb->posts.post_content +LIKE +('[^']+')/",
		"OR (kmpm.meta_value LIKE $1) $0",
		$clauses['where']
	);

	// если нужно искать в указанном метаполе
	$clauses['where'] .= $wpdb->prepare(' AND kmpm.meta_key = %s', '_offer_sku' );

	$clauses['distinct'] = 'DISTINCT';

	// дебаг итогового запроса
	0 && add_filter( 'posts_request', function( $sql ){   die( $sql );  } );

	return $clauses;
}

// Отправка корзины ==================================================================================================================
// function tovarTo1c($bascetElem) {
// 	return 
// 	"<Товар>\n\r".
// 		"<Ид>".$bascetElem->sku1c."</Ид>\n\r".
// 		'<Наименование>'.$bascetElem->name.'</Наименование>\n\r'.
// 		'<БазоваяЕдиница Код="796" НаименованиеПолное="Штука" МеждународноеСокращение="PCE">шт</БазоваяЕдиница>\n\r'.
// 		"<ЦенаЗаЕдиницу>".$bascetElem->price."</ЦенаЗаЕдиницу>\n\r".
// 		"<Количество>".$bascetElem->count."</Количество>\n\r".
// 		"<Сумма>".$bascetElem->subtotal."</Сумма>\n\r".
// 		"<ЗначенияРеквизитов>\n\r".
// 			"<ЗначениеРеквизита>\n\r".
// 				"<Наименование>ВидНоменклатуры</Наименование>\n\r".
// 				"<Значение>Товар</Значение>\n\r".
// 			"</ЗначениеРеквизита>\n\r".

// 			"<ЗначениеРеквизита>\n\r".
// 				"<Наименование>ТипНоменклатуры</Наименование>\n\r".
// 				"<Значение>Товар</Значение>\n\r".
// 			"</ЗначениеРеквизита>\n\r".
// 		"</ЗначенияРеквизитов>\n\r".
// 	"</Товар>\n\r";
// }	

// function sendToFtp($fileAdr, $zak_number) {
// 	$ftp_server = "81.177.141.133";
// 	$ftp_user_name = "asmi046_1s";
// 	$ftp_user_pass = "!#(yTY)uz9d8";

// 	$conn_id = ftp_connect($ftp_server);
// 	$login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass);
// 	ftp_pasv($conn_id, true);
// 	if ((!$conn_id) || (!$login_result)) {
// 		return false;
// 	} else {
// 		$upload = ftp_put ($conn_id, "orders/".$zak_number.".xml", $fileAdr, FTP_ASCII);
// 		return true;
// 	}
// 	ftp_close($conn_id);
// }

// add_action( 'wp_ajax_send_cart', 'send_cart' );
// add_action( 'wp_ajax_nopriv_send_cart', 'send_cart' );

// function send_cart() {
// 	if ( empty( $_REQUEST['nonce'] ) ) {
// 		wp_die( '0' );
// 	}

// 	if ( check_ajax_referer( 'NEHERTUTLAZIT', 'nonce', false ) ) {

// 		$headers = array(
// 			'From: Сайт '.COMPANY_NAME.' <'.MAIL_RESEND.'>',
// 			'content-type: text/html',
// 		); 

// 		add_filter('wp_mail_content_type', create_function('', 'return "text/html";'));

// 		$adr_to_send = carbon_get_theme_option("as_email_send");
// 		// $adr_to_send = (empty($adr_to_send))?"asmi046@gmail.com,rudikov-web@ya.ru":$adr_to_send;

// 		$zak_number = "A".date("H").date("i").date("s").rand(100,999);

// 		$mail_content = "<h1>Заказ на сайте №".$zak_number."</h1>";

// 		$bscet_dec = json_decode(stripcslashes ($_REQUEST["bascet"]));

// 		// Отправка в базу основного заказа

// 		global $wpdb;
// 		$wpdb->insert( "shop_zakhistory", array(
// 			"agent" => empty($_COOKIE["agriautorise"])?"":$_COOKIE["agriautorise"],
// 			"zak_number" => $zak_number,
// 			"zak_summ" => $_REQUEST["bascetsumm"],
// 			"zak_count" => count($bscet_dec),
// 			"client_name" => $_REQUEST["name"],
// 			"client_phone" => $_REQUEST["phone"],
// 			"client_mail" => $_REQUEST["mail"],
// 			"client_adr" => $_REQUEST["adres"],
// 			"client_comment" => $_REQUEST["comment"],
// 		) );


// 		$mail_content .= "<table style = 'text-align: left;' width = '100%'>";
// 			$mail_content .= "<tr>";
// 				$mail_content .= "<th></th>";
// 				$mail_content .= "<th>ТОВАР</th>";
// 				$mail_content .= "<th>КОЛИЧЕСТВО</th>";
// 				$mail_content .= "<th>СУММА</th>";
// 			$mail_content .= "</tr>";

// 			$toXMLstr = "";

// 			for ($i = 0; $i<count($bscet_dec); $i++) {
// 				$toXMLstr .= tovarTo1c($bscet_dec[$i]);
// 				$mail_content .= "<tr>";
// 					$mail_content .= "<td><img src = '".$bscet_dec[$i]->picture."' width = '70' height = '70'></td>";
// 					$mail_content .= "<td><a href = '".$bscet_dec[$i]->lnk."'>".$bscet_dec[$i]->name." / ".$bscet_dec[$i]->sku."</a></td>";
// 					$mail_content .= "<td>".$bscet_dec[$i]->count."</td>";
// 					$mail_content .= "<td>".$bscet_dec[$i]->subtotal." р.</td>";
// 				$mail_content .= "</tr>";

// 				// Отправка в базу содержимого корзины

// 				$wpdb->insert( "shop_zaktovar", array(
// 					"zak_number" => $zak_number,
// 					 "price" => $bscet_dec[$i]->price,
// 					 "price_old" => empty($bscet_dec[$i]->oldprice)?"":$bscet_dec[$i]->oldprice,
// 					 "subtotal" => $bscet_dec[$i]->subtotal,
// 					"sku" => $bscet_dec[$i]->sku,
// 					"lnk" => $bscet_dec[$i]->lnk,
// 					"name" => $bscet_dec[$i]->name,
// 					"count" => $bscet_dec[$i]->count,
// 					"picture" => $bscet_dec[$i]->picture,
// 				) );

// 			}

// 		$mail_content .= "</table>";
// 		$mail_content .= "<h2>Сумма: ".$_REQUEST["bascetsumm"]." р.</h2>";


// 		 $zaktpl = file_get_contents(__DIR__.'/zaktempl.xml', true);
// 		// ---- Формирование файла для 1С

// 		$clname = 	explode(" ", $_REQUEST["name"])[0];
// 		$clnames = 	explode(" ", $_REQUEST["name"])[1];

// 		 $zaktpl = str_replace("{zaknum}", $zak_number, $zaktpl);
// 		 $zaktpl = str_replace("{zakdata}", date("Y-m-d"), $zaktpl);
// 		 $zaktpl = str_replace("{zaksumm}", $_REQUEST["bascetsumm"], $zaktpl);
// 		 $zaktpl = str_replace("{zaktime}", date("H:i:s"), $zaktpl);
// 		 $zaktpl = str_replace("{name}", $clname, $zaktpl);
// 		 $zaktpl = str_replace("{inn}", ($_REQUEST["inn"] == "null")?"":$_REQUEST["inn"], $zaktpl);
// 		 $zaktpl = str_replace("{sname}", $clnames, $zaktpl);
// 		 $zaktpl = str_replace("{adr}", $_REQUEST["adres"], $zaktpl);
// 		 $zaktpl = str_replace("{clientname}", $clname." ".$clnames, $zaktpl);
// 		 $zaktpl = str_replace("{clientnamefull}", $clname." ".$clnames, $zaktpl);
// 		 $zaktpl = str_replace("{clienphone}",  $_REQUEST["phone"], $zaktpl);
// 		 $zaktpl = str_replace("{clientmail}", $_REQUEST["mail"], $zaktpl);
// 		 $zaktpl = str_replace("{zakcomment}", $_REQUEST["comment"], $zaktpl);
// 		 $zaktpl = str_replace("{tovars}", $toXMLstr, $zaktpl);

// 		 $fileAdr = __DIR__."/1s/orders/".$zak_number.".xml";
// 		 file_put_contents($fileAdr, $zaktpl);

// 		 $ftprez = sendToFtp($fileAdr, $zak_number);

// 		$mail_content .= "<strong>Имя:</strong> ".$_REQUEST["name"]."<br/>";
// 		$mail_content .= "<strong>Телефон:</strong> ".$_REQUEST["phone"]."<br/>";
// 		$mail_content .= "<strong>e-mail:</strong> ".$_REQUEST["mail"]."<br/>";
// 		$mail_content .= "<strong>Адрес:</strong> ".$_REQUEST["adres"]."<br/>";
// 		$mail_content .= "<strong>Комментарий:</strong> ".$_REQUEST["comment"]."<br/>";
// 		// $mail_content .= "<strong>FTP:</strong> ".($ftprez)?"Загружен":"Не загружен"."<br/>";

// 		$mail_them = "Заказ с сайта";



// 		if (wp_mail($adr_to_send, $mail_them, $mail_content, $headers)) 
// 		{

// 			wp_die(json_encode(array("send" => true )));
// 		}
// 		else {
// 			wp_die( 'Ошибка отправки!', '', 403 );
// 		}

// 	} else {
// 		wp_die( 'НО-НО-НО!', '', 403 );
// 	}
// }
// Отправка корзины End ==================================================================================================================
