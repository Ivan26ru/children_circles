<div class="block_children_circles">
	<div class="wrap">
		<p class="title_block">ОБРАЗОВАНИЕ, КРУЖКИ И СЕКЦИИ В МОСКВЕ</p>
		<div class="bcc_container">
			<?php
			$count_item = 0;//начало счетчика
			$col_item = 3;//количество элементов в блоке
			$col_start = '<div class="bcc_col">'; //Начало блока
			$col_end = '</div>'; //Конец блока
			if (have_rows('block_children_circles', 'option')): ?><?php while (have_rows('block_children_circles', 'option')): the_row();

				if ($count_item === 0) {
					echo $col_start;
					$count_item++;
				} elseif ($count_item === $col_item) {
					$count_item = 1;
					echo $col_end . $col_start;
				} else {
					$count_item++;
				}

				$img_src = get_url_img_is_sub_field('img', 'full', get_template_directory_uri() . '/assets/img/children_circles.png');
				$title = get_sub_field('title');
				$img = '<img src="' . $img_src . '" alt="' . $title . '" title="' . $title . '">';
				$metro = get_sub_field('metro');
				$time_learning = get_sub_field('time_learning');
				$link = get_sub_field('link');
				$bonus = (get_sub_field('bonus')) ? '<span class="bcc_item_discount">-10%</span>' : '';
				?>


				<div class="bcc_item">
					<div class="bcc_item_wrap_img">
						<?php echo $img; ?>
					</div>
					<div class="bcc_item_info">
						<a href="<?php echo $link; ?>" class="bcc_item_title"><?php echo $title; ?></a>
						<p class="bcc_item_text">Длительность: <?php echo $metro; ?>
							<br>Возраст: <?php echo $time_learning; ?></p>
					</div>
					<div class="bcc_item_read_more">
						<a href="#" class="bcc_item_read_more_a">Подробнее</a>
					</div>
					<?php echo $bonus; ?>
				</div>
			<?php
			endwhile; endif;
			echo $col_end;
			?>

		</div>
	</div>
</div>