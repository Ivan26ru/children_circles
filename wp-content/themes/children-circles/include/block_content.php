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
						<p class="f_adress">Центральный офис:<br>Россия, г. Москва,<br>ул.Профсоюзная, д.115, к.1</p>
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
						<?php if (is_category()) {
							$catID = get_query_var('cat');
							if ($cat_desc = category_description($catID)) echo $cat_desc;
						} else {
							if (have_posts()) while (have_posts()) : the_post(); // старт цикла
								the_content();
							endwhile; // конец цикла
						} ?>
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
