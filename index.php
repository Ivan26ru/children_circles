<!DOCTYPE html><!--[if lt IE 7 ]>
<html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>
<html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>
<html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="ru"> <!--<![endif]-->

<head>

	<meta charset="utf-8">

	<title>Главная</title>
	<meta name="description" content="">

	<link rel="shortcut icon" href="assets/img/favicon/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" href="assets/img/favicon/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="assets/img/favicon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="assets/img/favicon/apple-touch-icon-114x114.png">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link rel="stylesheet" href="assets/css/reset.css">

	<link rel="stylesheet" href="assets/libs/animate/animate.css">

	<!--	slick-->
	<link rel="stylesheet" type="text/css" href="assets/libs/slick/slick.css">
	<link rel="stylesheet" type="text/css" href="assets/libs/slick/slick-theme.css">

	<link rel="stylesheet" href="assets/fonts/fonts.css">
	<link rel="stylesheet" href="assets/css/main.css">
	<link rel="stylesheet" href="assets/css/media.css">

	<script src="assets/libs/modernizr/modernizr.js"></script>


</head>

<body>

<header>
	<div class="wrap">
		<a href="#" class="block_logo">
			<div class="wrap_logo">
				<img src="assets/img/circle.png" alt="">
			</div>
			<div class="block_logo_text">
				<p class="blt_title">Детские кружки</p>
				<div class="blt_line"></div>
				<p class="blt_description">Детские кружки в Москве</p>
			</div>
		</a>
		<div class="header_center">
			<div class="hc_line1">
				<a href="#">
					<div class="hc_line1_wrap_img"><img src="assets/img/lic.png" alt=""></div>
					Лицензия 77Л01 №0010539</a>
			</div>
			<div class="hc_line2">
				<div class="menu_header">
					<ul class="menu_header_ul">
						<li><a href="#">Цены</a></li>
						<li><a href="#">Обучение</a></li>
						<li><a href="#">Секции</a></li>
						<li><a href="#">Контакты</a></li>
						<li><a href="#">Акции</a></li>
						<li><a href="#">О нас</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="header_info">
			<p class="header_soc">
				<a href="#" class="header_logo_soc"><img src="assets/img/tg.png" alt=""></a>
				<a href="#" class="header_logo_soc"><img src="assets/img/ws.png" alt=""></a>
				<a href="#" class="header_tell">8 (800) 758-770-02</a>
			</p>
			<p class="header_contact">с 8:00 до 22:00</p>
			<a href="#" class="header_contact">info@dadastiopa.ru</a>
		</div>
	</div>
</header>

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
					<div class="wrap_fire">
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
							<p class="bpsd_ic_block_read_more">Подробнее</p>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
</div>



<!--[if lt IE 9]>
<script src="assets/libs/html5shiv/es5-shim.min.js"></script>
<script src="assets/libs/html5shiv/html5shiv.min.js"></script>
<script src="assets/libs/html5shiv/html5shiv-printshiv.min.js"></script>
<script src="assets/libs/respond/respond.min.js"></script>
<![endif]-->

<!--<script src="assets/libs/jquery/jquery-1.11.2.min.js"></script>-->
<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="assets/libs/animate/animate-css.js"></script>

<script src="assets/libs/slick/slick.js" type="text/javascript" charset="utf-8"></script>

<script src="assets/js/main.js"></script>


</body>
</html>