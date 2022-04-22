<div class="block_map">
	<div class="bm_wrap_map">

		<?php
		if (!isset($yandexMapNumber)) {//условие для вывода одинаковых карт на одной странице
			$yandexMapNumber = 1; ?>
			<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
			<style>        .ballon_header {
					font-size: 16px;
					margin-top: 0;
					margin-bottom: 10px;
					color: #708090;
				}

				.ballon_body {
					font-size: 14px;
					text-align: center;
				}

				.ballon_footer {
					font-size: 12px;
					text-align: right;
					color: #7D7D7D;
					margin-top: 10px;
				}</style>
			<?php
		} else {
			$yandexMapNumber++;
		}
		$yandexMapAttrId = "yandexmap" . $yandexMapNumber;
		$yandexMapInit = "init" . $yandexMapAttrId;
		?>


		<div id="<?php echo $yandexMapAttrId; ?>" style="width: 100%; height: 100%" class="pe-n!"></div>
		<script>
			function <?php echo $yandexMapInit ?>() {

				var mapCenter = [55.60, 37.40],
						map = new ymaps.Map('<?php echo $yandexMapAttrId ?>', {
							center: mapCenter,
							zoom: 10,
							controls: []
						});

				// Создаем собственный макет с информацией о выбранном геообъекте.
				var customItemContentLayout = ymaps.templateLayoutFactory.createClass(
						// Флаг "raw" означает, что данные вставляют "как есть" без экранирования html.
						'<h2 class=ballon_header>{{ properties.balloonContentHeader|raw }}</h2>' +
						'<div class=ballon_body>{{ properties.balloonContentBody|raw }}</div>' +
						'<div class=ballon_footer>{{ properties.balloonContentFooter|raw }}</div>'
				);

				var clusterer = new ymaps.Clusterer({
					clusterDisableClickZoom: true,
					clusterOpenBalloonOnClick: true,
					// Устанавливаем стандартный макет балуна кластера "Карусель".
					clusterBalloonContentLayout: 'cluster#balloonCarousel',
					// Устанавливаем собственный макет.
					clusterBalloonItemContentLayout: customItemContentLayout,
					// Устанавливаем режим открытия балуна.
					// В данном примере балун никогда не будет открываться в режиме панели.
					clusterBalloonPanelMaxMapArea: 0,
					// Устанавливаем размеры макета контента балуна (в пикселях).
					clusterBalloonContentLayoutWidth: 200,
					clusterBalloonContentLayoutHeight: 130,
					// Устанавливаем максимальное количество элементов в нижней панели на одной странице
					clusterBalloonPagerSize: 5
					// Настройка внешнего вида нижней панели.
					// Режим marker рекомендуется использовать с небольшим количеством элементов.
					// clusterBalloonPagerType: 'marker',
					// Можно отключить зацикливание списка при навигации при помощи боковых стрелок.
					// clusterBalloonCycling: false,
					// Можно отключить отображение меню навигации.
					// clusterBalloonPagerVisible: false
				});

				// Заполняем кластер геообъектами со случайными позициями.
				var placemarks = [];
				<?php $args = array(
					'post_type' => 'section',
					'nopaging'  => true,

			);
				$query = new WP_Query($args);

				// Цикл
				if ($query->have_posts()) {
				while ($query->have_posts()) {
				$query->the_post();?>

				var placemark = new ymaps.Placemark([<?php the_field('lat'); ?>, <?php the_field('lng'); ?>], {
					// Устаналиваем данные, которые будут отображаться в балуне.
					balloonContentHeader: '<?php the_title(); ?>',
					balloonContentBody: '<?php the_field('adress'); ?>',
					// balloonContentFooter: 'Мацуо Басё'
				});
				placemarks.push(placemark);

				<?php }
				} wp_reset_postdata();
				?>


				clusterer.add(placemarks);
				map.geoObjects.add(clusterer);

				// clusterer.balloon.open(clusterer.getClusters()[0]);

			}

			ymaps.ready(<?php echo $yandexMapInit ?>);
		</script>

	</div>
	<div class="wrap pe-n">
		<div class="form_map">
			<div class="my_cf7_form my_cf7_magenta"><?php echo do_shortcode(get_field('cf7_map', 'option')); ?></div>
		</div>
	</div>
</div>