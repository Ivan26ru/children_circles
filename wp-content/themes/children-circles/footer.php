<?php
/**
 * Шаблон подвала (footer.php)
 * @package WordPress
 * @subpackage this_my_theme
 */
?>
<footer>
	<div class="wrap">
		<div class="footer_container">
			<div class="f_col f_col1">
				<p class="footer_title">Образование</p>
				<?php
				// Вставка меню в тему
				$args = array(
						'theme_location'  => 'footer1', // область темы
						'container'       => 'div', // блок, в который нужно поместить меню, укажите false, чтобы не помещать в блок
						'container_class' => 'footer_wrap_menu_1', // css-класс блока div
						'menu_class'      => 'fwm1_ul', // css-класс ul
						'echo'            => true, // вывести или записать в переменную
						'depth'           => 0 // количество уровней вложенности
				);

				wp_nav_menu($args);
				?>
				<p class="f_best_offer">Лучшее предложение в Москве</p>
			</div>
			<div class="f_line"></div>
			<div class="f_col f_col2">
				<p class="footer_title">Кружки</p>
				<?php
				// Вставка меню в тему
				$args = array(
						'theme_location'  => 'footer2', // область темы
						'container'       => 'div', // блок, в который нужно поместить меню, укажите false, чтобы не помещать в блок
						'container_class' => 'footer_wrap_menu_2', // css-класс блока div
						'menu_class'      => 'fwm2_ul', // css-класс ul
						'echo'            => true, // вывести или записать в переменную
						'depth'           => 0 // количество уровней вложенности
				);

				wp_nav_menu($args);
				?>
			</div>
			<div class="f_line"></div>
			<div class="f_col f_col3">
				<a href="#" class="block_logo">
					<div class="wrap_logo">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="">
					</div>
					<div class="block_logo_text">
						<p class="blt_title">ДОПОЛНИТЕЛЬНОЕ ОБУЧЕНИЕ</p>
						<div class="blt_line"></div>
						<p class="blt_description">Подготовительные курсы, занятия, кружки</p>
					</div>
				</a>
				<p class="f_adress">г.Москва, ул.Степана Супруна, д.4</p>
				<div class="f_soc">
					<p class="header_soc">
						<a href="#" class="header_logo_soc"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/tg.png" alt=""></a>
						<a href="#" class="header_logo_soc"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ws.png" alt=""></a>
						<a href="#" class="header_tell">8 (800) 758-770-02</a>
					</p>
				</div>
				<p class="header_contact">с 8:00 до 22:00</p>
				<a href="/sitemap.xml" class="f_sitemap">Карта сайта</a>
			</div>
		</div>
	</div>
</footer>
<?php include "include/block_bottom_mobile.php"; ?>
<?php wp_footer(); // необходимо для работы плагинов и функционала  ?>

<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/assets/libs/html5shiv/es5-shim.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/libs/html5shiv/html5shiv.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/libs/html5shiv/html5shiv-printshiv.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/libs/respond/respond.min.js"></script><![endif]-->
</body>
</html>