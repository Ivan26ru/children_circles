<?php include "header.php"; ?>

<div class="block_map">
	<div class="wrap">
		<div>Тут будет карта</div>
		<div class="form">тут форма из cf7</div>
	</div>
</div>

<div class="block_children_circles">
	<div class="wrap">
		<p class="title_block">ДЕТСКИЕ КРУЖКИ В МОСКВЕ</p>
		<div class="bcc_container">
			<?php for ($i = 0; $i < 3; $i++) { ?>
				<div class="bcc_col">
					<?php for ($i2 = 0; $i2 < 3; $i2++) { ?>
						<div class="bcc_item">
							<div class="bcc_item_wrap_img">
								<img src="assets/img/children_circles.png" alt="">
							</div>
							<div class="bcc_item_info">
								<p class="bcc_item_title">ИЗО студия</p>
								<p class="bcc_item_text">Метро: Площадь Ильича<br>Срок обучения: от 2 недель</p>
							</div>
							<div class="bcc_item_read_more">
								<a href="#" class="bcc_item_read_more_a">Подробнее</a>
							</div>
							<span class="bcc_item_discount">-10%</span>
						</div>
					<? }; ?>
				</div>
				<div class="bcc_col">
					<?php for ($i2 = 0; $i2 < 3; $i2++) { ?>
						<div class="bcc_item">
							<div class="bcc_item_wrap_img">
								<img src="assets/img/children_circles.png" alt="">
							</div>
							<div class="bcc_item_info">
								<p class="bcc_item_title">ИЗО студия</p>
								<p class="bcc_item_text">Метро: Площадь Ильича<br>Срок обучения: от 2 недель</p>
							</div>
							<div class="bcc_item_read_more">
								<a href="#" class="bcc_item_read_more_a">Подробнее</a>
							</div>
							<span class="bcc_item_discount">-10%</span>
						</div>
					<? }; ?>
				</div>
			<? } ?>
		</div>
	</div>
</div>

<div class="block_trial_lesson">
	<div class="wrap">
		<div class="btl_container">
			<div class="btl_item">
				<p class="btl_item_title">Пробное занятие бесплатно</p>
				<p class="btl_item_text">Акция действует до 03.02.2022</p>
				<p class="btl_item_text">Времени осталось: <span>2 дн. 16 час. 34 мин. 20 сек</span></p>
				<p class="btl_item_total"><span class="btl_item_total_old">1000</span> = 0</p>
			</div>
			<div class="btl_item">
				<div class="btl_form">
					<div class="icon_fire">
						<img src="assets/img/fire.png" alt="">
					</div>
					<form action="">
						<p class="btl_form_title">Текущая акция</p>
						<div class="btl_form_wrap_input">
							<input type="text" placeholder="Ваше имя">
							<input type="text" placeholder="Контактный номер">
							<input type="submit" value="Записаться">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="block_pre-school_development">
	<div class="wrap">
		<div class="bpsd_container">
			<p class="title_block">Студия дошкольного развития в Москве</p>
			<p class="text_block">Увы, не все родители знают, что в Петербурге много бесплатных кружков и секций для детей. Или думают, что устроить в них ребенка трудно.
				На самом деле таких кружков много, и они вполне приличного качества. Накануне начала массового набора в них «Литтлван» составил подробную инструкцию, где в разных районах города можно заниматься спортом, наукой, музыкой и рисованием бесплатно. В обзор не вошли художественные, музыкальные и спортивные школы, а также занятия при общеобразовательных школах. О них, полагаем, вы и так знаете. </p>

			<div class="bpsd_wrap_card">
				<?php for ($i = 0; $i < 3; $i++) { ?>
					<div class="bpsd_item_card">
						<p class="bpst_ic_title">Стоимость обучения</p>
						<div class="bpsd_ic_block">
							<p class="bpsp_ic_block_title">Лучшее предложение в Москве</p>
							<ul class="bpsd_ic_block_list">
								<li>Стоимость занятия от 1000 руб.</li>
								<li>Более 10 лет опыта</li>
								<li>Помощь преподавателей</li>
								<li>Оплата по договору</li>
							</ul>
							<a href="#" class="bpsd_ic_block_read_more read_more_orange">Подробнее</a>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
</div>

<div class="block_training_with_us">
	<div class="wrap">
		<p class="title_block">Обучение у нас</p>


	</div>
</div>

<div class="block_we_teach">
	<div class="wrap">
		<p class="title_block">Мы обучаем</p>
		<ul class="container_we_teach">
			<?php for ($i = 0; $i < 15; $i++) { ?>
				<li class="cwt_item"><a href="#">Театральная студия2</a></li>
			<?php } ?>
		</ul>
	</div>
</div>

<div class="block_gratitude">
	<div class="wrap">
		<p class="title_block">Благодарности</p>
		<div class="container_gratitude">
			<?php for ($i = 0; $i < 5; $i++) { ?>
				<div class="cg_item">
					<div class="cg_wrap_img">
						<img src="assets/img/img_gratitude.png" alt="">
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</div>

<div class="block_ratings_and_reviews">
	<div class="wrap">
		<p class="title_block">Рейтинги и отзывы</p>
		<div class="rar_container">
			<?php for ($i = 0; $i < 4; $i++) { ?>
				<div class="rar_col">
					<?php for ($i2 = 0; $i2 < 2; $i2++) { ?>
						<div class="rar_item">
							<div class="rar_item_wrap_img">
								<img src="assets/img/img_rar.png" alt="">
							</div>
							<div class="rar_item_info">
								<p class="rar_item_title">Ирина</p>
								<p class="rar_item_text">Понравилась студия, дочка занимается ИЗО уже третий год</p>
								<div class="rar_item_wrap_star">
									<?php $max_star = rand(1, 5);
									for ($i3 = 0; $i3 < $max_star; $i3++) { ?>
										<div class="wrap_star_img">
											<img src="assets/img/star.png" alt="">
										</div>
									<?php } ?>
								</div>
							</div>
						</div>
					<? }; ?>
				</div>
			<? } ?>
		</div>
	</div>
</div>

<div class="block_special_offers">
	<div class="wrap">
		<p class="title_block">Спецпредложения и акции</p>
		<div class="bso_wrap_card">
			<?php for ($i = 0; $i < 3; $i++) { ?>
				<div class="bso_item_card">
					<div class="bso_card_wrap_img">
						<img src="assets/img/img_bso.png" alt="">
					</div>
					<p class="bso_ic_title">Пробное занятие бесплатно</p>
					<p class="bso_card_text">Попробуйте бесплатно</p>
					<a href="#" class="bso_ic_block_read_more read_more_orange">Подробнее</a>
					<div class="icon_fire">
						<img src="assets/img/fire.png" alt="">
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</div>

<div class="block_teachers">
	<div class="wrap">
		<p class="title_block">Преподаватели</p>
		<div class="bt_container">
			<?php for ($i = 0; $i < 8; $i++) { ?>
				<div class="bt_wrap_slider_item">
					<div class="bt_item">
						<div class="bt_avatar_wrap">
							<img src="/assets/img/bt_avatar.png" alt="">
						</div>
						<p class="bt_item_name">Ирина Владимирована</p>
						<p class="bt_item_experience">(10 лет опыта)</p>
					</div>
				</div>
			<?php } ?>
		</div>

	</div>
</div>

<div class="block_our_mugs">
	<div class="wrap">
		<p class="title_block">Наши кружки</p>
		<div class="bom_container">
			<?php for ($i = 0; $i < 4; $i++) { ?>
				<div class="bom_item">
					<div class="bom_item_wrap_img">
						<img src="assets/img/bom_img.png" alt="">
					</div>
					<a href="#" class="bom_item_title">Работы в ИЗО студии</a>
				</div>
			<? }; ?>
		</div>
	</div>
</div>

<div class="block_map">
	<div class="wrap">
		<div>Тут будет карта</div>
		<div class="form">тут форма из cf7</div>
	</div>
</div>

<?php include "footer.php"; ?>