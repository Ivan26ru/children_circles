<?php
/**
 * Функции шаблона (function.php)
 * @package WordPress
 * @subpackage this_my_theme
 */

add_theme_support('title-tag'); // теперь тайтл управляется самим вп

register_nav_menus(array( // Регистрируем 2 меню
						  'top'      => 'Верхнее', // Верхнее
						  'footer1'  => 'Нижнее1', // Верхнее
						  'footer2'  => 'Нижнее2', // Верхнее
						  'sl_menu1' => 'Сайт бар 1', // Верхнее
						  'sl_menu2' => 'Сайт бар 2', // Верхнее
));

add_theme_support('post-thumbnails'); // включаем поддержку миниатюр
set_post_thumbnail_size(250, 150); // задаем размер миниатюрам 250x150
add_image_size('big-thumb', 400, 400, true); // добавляем еще один размер картинкам 400x400 с обрезкой
add_image_size('bom_item_img', 270, 150, true); // добавляем еще один размер картинкам 400x400 с обрезкой
add_image_size('icon', 30, 30, false); // добавляем еще один размер картинкам 400x400 с обрезкой

register_sidebar(array( // регистрируем левую колонку, этот кусок можно повторять для добавления новых областей для виджитов
						'name'          => 'Сайдбар', // Название в админке
						'id'            => "sidebar", // идентификатор для вызова в шаблонах
						'description'   => 'Обычная колонка в сайдбаре', // Описалово в админке
						'before_widget' => '<div id="%1$s" class="widget %2$s">', // разметка до вывода каждого виджета
						'after_widget'  => "</div>\n", // разметка после вывода каждого виджета
						'before_title'  => '<span class="widgettitle">', //  разметка до вывода заголовка виджета
						'after_title'   => "</span>\n", //  разметка после вывода заголовка виджета
));

if (!class_exists('clean_comments_constructor')) { // если класс уже есть в дочерней теме - нам не надо его определять
	class clean_comments_constructor extends Walker_Comment
	{ // класс, который собирает всю структуру комментов
		public function start_lvl(&$output, $depth = 0, $args = array())
		{ // что выводим перед дочерними комментариями
			$output .= '<ul class="children">' . "\n";
		}

		public function end_lvl(&$output, $depth = 0, $args = array())
		{ // что выводим после дочерних комментариев
			$output .= "</ul><!-- .children -->\n";
		}

		protected function comment($comment, $depth, $args)
		{ // разметка каждого комментария, без закрывающего </li>!
			$classes = implode(' ', get_comment_class()) . ($comment->comment_author_email == get_the_author_meta('email') ? ' author-comment' : ''); // берем стандартные классы комментария и если коммент пренадлежит автору поста добавляем класс author-comment
			echo '<li id="comment-' . get_comment_ID() . '" class="' . $classes . ' media">' . "\n"; // родительский тэг комментария с классами выше и уникальным якорным id
			echo '<div class="media-left">' . get_avatar($comment, 64, '', get_comment_author(), array('class' => 'media-object')) . "</div>\n"; // покажем аватар с размером 64х64
			echo '<div class="media-body">';
			echo '<span class="meta media-heading">Автор: ' . get_comment_author() . "\n"; // имя автора коммента
			//echo ' '.get_comment_author_email(); // email автора коммента, плохой тон выводить почту
			echo ' ' . get_comment_author_url(); // url автора коммента
			echo ' Добавлено ' . get_comment_date('F j, Y в H:i') . "\n"; // дата и время комментирования
			if ('0' == $comment->comment_approved) echo '<br><em class="comment-awaiting-moderation">Ваш комментарий будет опубликован после проверки модератором.</em>' . "\n"; // если комментарий должен пройти проверку
			echo "</span>";
			comment_text() . "\n"; // текст коммента
			$reply_link_args = array( // опции ссылки "ответить"
									  'depth'      => $depth, // текущая вложенность
									  'reply_text' => 'Ответить', // текст
									  'login_text' => 'Вы должны быть залогинены' // текст если юзер должен залогинеться
			);
			echo get_comment_reply_link(array_merge($args, $reply_link_args)); // выводим ссылку ответить
			echo '</div>' . "\n"; // закрываем див
		}

		public function end_el(&$output, $comment, $depth = 0, $args = array())
		{ // конец каждого коммента
			$output .= "</li><!-- #comment-## -->\n";
		}
	}
}

if (!function_exists('pagination')) { // если ф-я уже есть в дочерней теме - нам не надо её определять
	function pagination()
	{ // функция вывода пагинации
		global $wp_query; // текущая выборка должна быть глобальной
		$big = 999999999; // число для замены
		$links = paginate_links(array( // вывод пагинации с опциями ниже
									   'base'               => str_replace($big, '%#%', esc_url(get_pagenum_link($big))), // что заменяем в формате ниже
									   'format'             => '?paged=%#%', // формат, %#% будет заменено
									   'current'            => max(1, get_query_var('paged')), // текущая страница, 1, если $_GET['page'] не определено
									   'type'               => 'array', // нам надо получить массив
									   'prev_text'          => 'Назад', // текст назад
									   'next_text'          => 'Вперед', // текст вперед
									   'total'              => $wp_query->max_num_pages, // общие кол-во страниц в пагинации
									   'show_all'           => false, // не показывать ссылки на все страницы, иначе end_size и mid_size будут проигнорированны
									   'end_size'           => 15, //  сколько страниц показать в начале и конце списка (12 ... 4 ... 89)
									   'mid_size'           => 15, // сколько страниц показать вокруг текущей страницы (... 123 5 678 ...).
									   'add_args'           => false, // массив GET параметров для добавления в ссылку страницы
									   'add_fragment'       => '',    // строка для добавления в конец ссылки на страницу
									   'before_page_number' => '', // строка перед цифрой
									   'after_page_number'  => '' // строка после цифры
		));
		if (is_array($links)) { // если пагинация есть
			echo '<ul class="pagination">';
			foreach ($links as $link) {
				if (strpos($link, 'current') !== false) echo "<li class='active'>$link</li>"; // если это активная страница
				else echo "<li>$link</li>";
			}
			echo '</ul>';
		}
	}
}


add_action('wp_footer', 'add_scripts'); // приклеем ф-ю на добавление скриптов в футер
if (!function_exists('add_scripts')) { // если ф-я уже есть в дочерней теме - нам не надо её определять
	wp_deregister_script('jquery'); // выключаем стандартный jquery
	wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-2.2.0.min.js', '', '', true); // добавляем свой jq
	function add_scripts()
	{ // добавление скриптов
		wp_enqueue_script('animate-css.js', get_template_directory_uri() . '/assets/libs/animate/animate-css.js', '', '', true); // и скрипты шаблона
		wp_enqueue_script('slick.js', get_template_directory_uri() . '/assets/libs/slick/slick.js', '', '', true); // и скрипты шаблона
		wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', '', '', true); // и скрипты шаблона
	}
}

add_action('wp_print_styles', 'add_styles'); // приклеем ф-ю на добавление стилей в хедер
if (!function_exists('add_styles')) { // если ф-я уже есть в дочерней теме - нам не надо её определять
	function add_styles()
	{ // добавление стилей
		wp_enqueue_style('main_reset', get_template_directory_uri() . '/assets/css/reset.css');
		wp_enqueue_style('style_wp', get_template_directory_uri() . '/assets/css/style_wp.css');
		wp_enqueue_style('font-awesome.min', get_template_directory_uri() . '/assets/css/font-awesome.min.css');
		wp_enqueue_style('main_fonts', get_template_directory_uri() . '/assets/fonts/fonts.css');
		wp_enqueue_style('slick', get_template_directory_uri() . '/assets/libs/slick/slick.css');
		wp_enqueue_style('slick-theme', get_template_directory_uri() . '/assets/libs/slick/slick-theme.css');
		wp_enqueue_style('main', get_template_directory_uri() . '/style.css?' . date('U'));
		wp_enqueue_style('main_media', get_template_directory_uri() . '/assets/css/media.css');
		wp_enqueue_style('tablepress_style', get_template_directory_uri() . '/assets/css/tablepress_style.css');
	}
}


// создание произвольной страницы используя плагин acf
if (function_exists('acf_add_options_page')) {

	acf_add_options_page(array(
		'page_title' => 'Основные настройки',
		'menu_title' => 'Настройки темы',
		'menu_slug'  => 'theme-general-settings',
		'capability' => 'edit_posts',
		'redirect'   => false
	));

//	acf_add_options_sub_page(array(
//		'page_title'  => 'Настройки шапки',
//		'menu_title'  => 'Шапка',
//		'parent_slug' => 'theme-general-settings',
//	));

//	acf_add_options_sub_page(array(
//		'page_title'  => 'Настройки подвала',
//		'menu_title'  => 'Подвал',
//		'parent_slug' => 'theme-general-settings',
//	));

}

// Method 2: Setting.
function my_acf_init() {
	acf_update_setting('google_api_key', 'AIzaSyC4vEAW-s167o-qcgYjo_mpm-Zd50vjCww');
}
add_action('acf/init', 'my_acf_init');

function get_url_img_is_sub_field($name_field_image_id, $img_size = 'full', $img_default = '') {

	if (get_sub_field($name_field_image_id)) {
		$resoult = wp_get_attachment_image_url(get_sub_field($name_field_image_id), $img_size);
	} else {
		$resoult = $img_default;
	}

	return $resoult;
}

// тайтл тукущей страницы, записи, категории
function site_h1(){
	if (is_category()) {
		echo single_cat_title();
	}elseif (is_single()) {
		$url = $_SERVER['REQUEST_URI'];
		$postid = url_to_postid($url);
		echo get_the_title( $postid );
		//	}elseif (is_front_page()) {
		//		the_field('title_block_video','options');
	}elseif (is_page()) {
		$url = $_SERVER['REQUEST_URI'];
		$postid = url_to_postid($url);
		echo get_the_title( $postid );
	}elseif (is_404()) {
		echo "Страница не найдена";
	};
};

// Override img caption shortcode to fix 10px issue.
add_filter('img_caption_shortcode', 'fix_img_caption_shortcode', 10, 3);

function fix_img_caption_shortcode($val, $attr, $content = null) {
	extract(shortcode_atts(array(
		'id'    => '',
		'align' => '',
		'width' => '',
		'caption' => ''
	), $attr));

	if ( 1 > (int) $width || empty($caption) ) return $val;

	return '<div id="' . $id . '" class="wp-caption ' . esc_attr($align) . '" style="width: ' . (0 + (int) $width) . 'px">' . do_shortcode( $content ) . '<p class="wp-caption-text">' . $caption . '</p></div>';
}


// фильтр для заголовков таблицы
add_filter('tablepress_print_name_html_tag', 'tablepress_print_name_html_tag_function', 10, 1);
function tablepress_print_name_html_tag_function($str) {
	$str = 'h3';
	return $str;
}

// фильтр для описания таблицы
add_filter('tablepress_print_description_html_tag', 'tablepress_print_description_html_tag_function', 10, 1);
function tablepress_print_description_html_tag_function($str) {
	$str = 'span';
	return $str;
}

// добавление таблице обертки и контейнера для заголовков
add_filter('tablepress_table_output', 'tablepress_table_output_function', 10, 1);
function tablepress_table_output_function($table) {
	$tablepress__header_tag = 'div';
	$tablepress__header_class = 'tablepress__header';
	$tablepress__header_start = '<' . $tablepress__header_tag . ' class="' . $tablepress__header_class . '">';
	$tablepress__header_end = '</' . $tablepress__header_tag . '>';

	$is_table_name = substr_count($table, '"tablepress-table-name');
	$is_table_description = substr_count($table, '"tablepress-table-description');

	$replacement = $tablepress__header_start . '${0}' . $tablepress__header_end;
	$subject = $table;
	if ($is_table_name && $is_table_description) {
		$pattern = '/^[\W\w]*?<\/span>/i';
		$return_table = preg_replace($pattern, $replacement, $subject);
	} elseif ($is_table_name) {
		$pattern = '/^[\W\w]*?<\/h3>/i';
		$return_table = preg_replace($pattern, $replacement, $subject);
	} elseif ($is_table_description) {
		$pattern = '/^[\W\w]*?<\/span>/i';
		$return_table = preg_replace($pattern, $replacement, $subject);
	} else {
		$return_table = $table;
	}

	$return_table = '<div class="tablepress__wrap">' . $return_table . '</div>';

	$resoult = $return_table;
	return $resoult;
}
?>