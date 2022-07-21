<?php
/**
 * Шаблон обычной страницы (page.php)
 * @package WordPress
 * @subpackage this_my_theme
 */
get_header(); // подключаем header.php ?>

<?php include "include/block_map.php"; ?><?php include "include/block_h1.php"; ?><?php include "include/block_trial_lesson.php"; ?>
	<div class="block_content" id="block_content">
		<div class="wrap">
			<div class="bc_container">
				<div class="sidebar_left">
					<div class="sidebar_left_container" id="sidebar_left_container">
						<div class="sl_item_menu sl_item_menu_1">
							<p class="sl_menu_title">Обучение</p>
							<hr>
							<?php
							// Вставка меню в тему
							$args = array(
									'theme_location'  => 'sl_menu1', // область темы
									'container'       => 'div', // блок, в который нужно поместить меню, укажите false, чтобы не помещать в блок
									'container_class' => 'sl_menu', // css-класс блока div
									'menu_class'      => 'sl_menu_ul', // css-класс ul
									'echo'            => true, // вывести или записать в переменную
									'depth'           => 1 // количество уровней вложенности
							);

							wp_nav_menu($args);
							?>
						</div>
						<div class="sl_item_menu sl_item_menu_2">
							<p class="sl_menu_title">Кружки</p>
							<hr>
							<?php
							// Вставка меню в тему
							$args = array(
									'theme_location'  => 'sl_menu2', // область темы
									'container'       => 'div', // блок, в который нужно поместить меню, укажите false, чтобы не помещать в блок
									'container_class' => 'sl_menu', // css-класс блока div
									'menu_class'      => 'sl_menu_ul', // css-класс ul
									'echo'            => true, // вывести или записать в переменную
									'depth'           => 1 // количество уровней вложенности
							);

							wp_nav_menu($args);
							?>
						</div>
						<div class="sl_item_map">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/sl_map.png" alt="Карта" title="Карта">
						</div>
						<div class="sl_item_contacts">
							<p class="f_adress">Центральный офис:<br>Россия, г. Москва,<br>ул.Профсоюзная, д.115, к.1
							</p>
							<a href="tel:84952200396" class="sl_tel">8 495 220 03 96</a>
							<div class="sl_work_time">
								<p class="sl_soc">
									<a href="#" class="header_logo_soc"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/tg.png" alt="Телеграмм" title="Телеграмм"></a>
									<a href="#" class="header_logo_soc"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ws.png" alt="Ватсап" title="Ватсап"></a>
								</p>
								<p class="sl_contact">с 10:00 до 22:00</p>
							</div>
							<a href="#" class="sl_email">kf@okcuzao.ru</a>
						</div>
					</div>
				</div>
				<div class="bc_wrap">
					<div class="bc_item_breadcrumbs">
						<?php
						if (function_exists('yoast_breadcrumb')) {
							yoast_breadcrumb('<p id="breadcrumbs" class="breadcrumbs">', '</p>');
						}
						?>
					</div>
					<div class="bc_content">
						<div class="bcc_content block_content_seo">


							<h1>test page</h1>

							<?php
							//							add_action( 'action_name1', function( $first ){
							//								get_vd('Добавили любой текст 1: '. $first);
							//							} );
							//							add_action( 'action_name2', function( $first ){
							//								get_vd('Добавили любой текст 2: '. $first);
							//							} );
							function action1($var) {
								echo "action1 " . $var . "<br>";
							}

							function action2($var) {
								echo "action2 " . "---" . $var . "--- <br>";
							}

							add_action('my_action', 'action1', 5);
							add_action('my_action', 'action2', 10);
							remove_action('my_action', 'action1', 2);
//							do_action('my_action', 'text'); // выведет> string(0) ""
							do_action('my_action111', 'text'); // выведет> string(0) "" ?>
							<?php // Запрос к БД


							$args = array(
									'post_type' => 'product',
							);
							$query = new WP_Query($args);

							// Цикл
							while ($query->have_posts()) {
								$query->the_post();
								echo '<li>' . get_the_title() . '</li>';
							}

							/*
							Восстанавливаем оригинальные данные.
							Мы используем new WP_Query, а значит мы не влияем на глобальную
							переменную `$wp_query`, поэтому нет необходимости сбрасывать запрос и
							можно сбросить только данные поста.
							*/
							wp_reset_postdata();

							// Второй запрос (без глобальной переменной)
							$query2 = new WP_Query($args2);

							// 2-й Цикл
							while ($query2->have_posts()) {
								$query2->next_post();
								echo '<li>' . get_the_title($query2->post->ID) . '</li>';
							}

							// Восстанавливаем оригинальные данные поста
							wp_reset_postdata(); ?>

						</div>
					</div>
				</div>
				<div class="sidebar_right">
					<div class="sidebar_right_container" id="sidebar_right_container">
						<p class="sr_title">Дополнительное обучение</p>
						<div class="sr_info">
							<p class="text_orange">Детские кружки</p>
							<p>Мастер классы</p>
							<p>Образование</p>
						</div>
						<hr>
						<br>
						<p>Пробное занятие бесплатно</p>
						<p class="sr_discount"><span>1000</span> = 0</p>
						<a href="#" class="btn_find_out_more btn_orange">Узнать больше</a>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php include "include/block_our_mugs.php"; ?><?php include "include/block_gratitude.php"; ?><?php include "include/ratings_and_reviews.php"; ?><?php include "include/block_special_offers.php"; ?><?php include "include/block_other_single.php"; ?><?php include "include/block_map.php"; ?><?php get_footer(); // подключаем footer.php ?>