<div class="block_map">
	<div class="bm_wrap_map">

		<?php
		if (!isset($yandexMapNumber)) {//условие для вывода одинаковых карт на одной странице
			$yandexMapNumber = 1; ?>
			<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
			<?php
		} else {
			$yandexMapNumber++;
		}
		$yandexMapAttrId = "yandexmap" . $yandexMapNumber;
		$yandexMapInit = "init" . $yandexMapAttrId;
		?>


		<div id="<?php echo $yandexMapAttrId; ?>" style="width: 100%; height: 100%"></div>
		<script>
			function <?php echo $yandexMapInit ?>() {
				var myMap = new ymaps.Map(<?php echo $yandexMapAttrId ?>, {
					center: [55.76, 37.64],
					zoom: 10
				}, {
					searchControlProvider: 'yandex#search'
				});

				// Создаем геообъект с типом геометрии "Точка".

				myMap.geoObjects

				<?php $args = array(
						'post_type' => 'section',
				);
				$query = new WP_Query($args);


				// Цикл
				if ($query->have_posts()) {
				while ($query->have_posts()) {
				$query->the_post();?>
						.add(new ymaps.Placemark([<?php the_field('lat'); ?>, <?php the_field('lng'); ?>], {
							// balloonContent: '',
							iconCaption: '<?php the_title(); ?>',
						}, {
							preset: 'islands#dotIcon',
							iconColor: '#735184'
						}))

				<?php }
				} else {
					// Постов не найдено
				}
				// Возвращаем оригинальные данные поста. Сбрасываем $post.
				wp_reset_postdata();
				?>
				;
			}

			ymaps.ready(<?php echo $yandexMapInit ?>);
		</script>

	</div>
	<div class="wrap">
		<div class="form_map">
			<div class="my_cf7_form my_cf7_magenta">
				<?php echo do_shortcode(get_field('cf7_map', 'option')); ?></div>
		</div>
	</div>
</div>