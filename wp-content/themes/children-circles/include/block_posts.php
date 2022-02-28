<div class="block_children_circles block_posts">
	<div class="wrap">
		<p class="title_block">Записи в рубриках</p>
		<div class="bcc_container">
			<?php
			$count_item = 0;//начало счетчика
			$col_item = 3;//количество элементов в блоке
			$col_start = '<div class="bcc_col">'; //Начало блока
			$col_end = '</div>'; //Конец блока

			// Цикл WordPress
			if (have_posts()) {
				while (have_posts()) {
					the_post();
					// здесь оформляем данные для каждого поста в цикле

					if ($count_item === 0) {
						echo $col_start;
						$count_item++;
					} elseif ($count_item === $col_item) {
						$count_item = 1;
						echo $col_end . $col_start;
					} else {
						$count_item++;
					}

					if (has_post_thumbnail()) {
						$avatar = get_the_post_thumbnail();
					} else {
						$avatar = "<img src='" . get_template_directory_uri() . "/assets/img/img_bso.png' />";
					}
					$name = get_the_title();
					$description = "";
					$stars_count = 0;
					?>

					<div class="bcc_item">
						<div class="bcc_item_wrap_img">
							<?php echo $avatar; ?>
						</div>
						<div class="bcc_item_info">
							<p class="bcc_item_title"><?php echo $name; ?></p>
<!--							<p class="bcc_item_text">Метро: Площадь Ильича<br>Срок обучения: от 2 недель</p>-->
							<a href="<?php echo get_the_permalink(); ?>" class="bp_readmore">Подробнее</a>
						</div>
<!--						<div class="bcc_item_read_more">-->
<!--						</div>-->
<!--						<span class="bcc_item_discount">-10%</span>-->
					</div>

					<?php
				}
				echo $col_end;
				wp_reset_query();
			} else {
				// текст/код, если постов нет
			}
			?>

		</div>
	</div>
</div>