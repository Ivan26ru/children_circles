<div class="block_children_circles">
	<div class="wrap">
		<p class="title_block">ОБРАЗОВАНИЕ, КРУЖКИ И СЕКЦИИ В МОСКВЕ</p>
		<div class="bcc_container">
			<?php

			$count_item = 0;//начало счетчика
			$col_item = 3;//количество элементов в блоке
			$col_start = '<div class="bcc_col">'; //Начало блока
			$col_end = '</div>'; //Конец блока

			for ($i = 0; $i < 10; $i++) {

				if ($count_item === 0) {
					echo $col_start;
					$count_item++;
				} elseif ($count_item === $col_item) {
					$count_item = 1;
					echo $col_end . $col_start;
				} else {
					$count_item++;
				} ?>
				<div class="bcc_item">
					<div class="bcc_item_wrap_img">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/children_circles.png" alt="">
					</div>
					<div class="bcc_item_info">
						<a href="#" class="bcc_item_title">ИЗО студия <?php echo $i; ?></a>
						<p class="bcc_item_text">Метро: Площадь Ильича<br>Срок обучения: от 2 недель</p>
					</div>
					<div class="bcc_item_read_more">
						<a href="#" class="bcc_item_read_more_a">Подробнее</a>
					</div>
					<span class="bcc_item_discount">-10%</span>
				</div>
				<?php

			}
			echo $col_end; ?>

		</div>
	</div>
</div>