<?php
/**
 * Шаблон шапки (header.php)
 * @package WordPress
 * @subpackage this_my_theme
 */
?>
<!DOCTYPE html><!--[if lt IE 7 ]>
<html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>
<html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>
<html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html <?php language_attributes(); // вывод атрибутов языка ?>>
<head>
	<meta charset="<?php bloginfo('charset'); // кодировка ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php /* RSS и всякое */ ?>
	<link rel="alternate" type="application/rdf+xml" title="RDF mapping" href="<?php bloginfo('rdf_url'); ?>">
	<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php bloginfo('rss_url'); ?>">
	<link rel="alternate" type="application/rss+xml" title="Comments RSS" href="<?php bloginfo('comments_rss2_url'); ?>">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>

	<!--[if lt IE 9]>
	<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<?php wp_head(); // необходимо для работы плагинов и функционала ?>
</head>
<body <?php body_class(); // все классы для body ?>>
<!--<a href="#" class="btn_orange btn_open_popup popmake-114">Записаться</a>-->
<header>
	<div class="wrap">
		<div class="header_logo">
			<a href="<?php echo get_site_url(); ?>" class="block_logo">
				<div class="wrap_logo">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="">
				</div>
				<div class="block_logo_text">
					<p class="blt_title">ДОПОЛНИТЕЛЬНОЕ ОБУЧЕНИЕ</p>
					<div class="blt_line"></div>
					<p class="blt_description">Подготовительные курсы, занятия, кружки</p>
				</div>
			</a>
		</div>
		<div class="header_center">
			<div class="hc_line2">
				<?php
				// Вставка меню в тему
				$args = array(
						'theme_location' => 'top', // область темы
						'container' => 'div', // блок, в который нужно поместить меню, укажите false, чтобы не помещать в блок
						'container_id'         => 'my_mobile_menu',
						'container_class' => 'my_mobile_menu', // css-класс блока div
						'menu_class' => 'menu_header_ul', // css-класс ul
						'echo' => true, // вывести или записать в переменную
						'depth' => 0 // количество уровней вложенности
				);

				wp_nav_menu($args);
				?>
			</div>
		</div>
		<div class="header_info">
			<p class="header_soc">
				<a href="#" class="header_logo_soc"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/tg.png" alt=""></a>
				<a href="#" class="header_logo_soc"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ws.png" alt=""></a>
				<a href="#" class="header_tell">8 (800) 758-770-02</a>
			</p>
			<p class="header_contact">с 8:00 до 22:00</p>
			<a href="#" class="header_contact">info@dadastiopa.ru</a>
		</div>

		<button class="btn_orange btn_orange_header popmake-114">Записаться</button>

		<div class="menu__burger" id="burger-menu">
			<div class="menu__burger_wrap_img">
				<img alt="меню" title="меню" data-src="<?php echo get_template_directory_uri(); ?>/assets/img/burger.png" class="lazy-loaded ls-is-cached lazyloaded" src="https://tz-sound-origin.loc/wp-content/themes/wp_theme_tzsound/img/burger.png"><noscript><img src="https://tz-sound-origin.loc/wp-content/themes/wp_theme_tzsound/img/burger.png" alt="меню" title="меню"/></noscript>
			</div>
		</div>
	</div>
</header>