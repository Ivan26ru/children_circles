<div class="block_training_with_us">
	<div class="wrap">
		<p class="title_block">Обучение у нас</p>
		<div class="bltwu_block_1">
			<a href="#" class="bltwu_block_1_item">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/1.png" alt="">
				<img class="bltwu_btn_youtube" src="<?php echo get_template_directory_uri(); ?>/assets/img/btn_youtube.png" alt="">
			</a>
			<a href="#" class="bltwu_block_1_item">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/2.png" alt="">
				<img class="bltwu_btn_youtube" src="<?php echo get_template_directory_uri(); ?>/assets/img/btn_youtube.png" alt="">
			</a>
		</div>

		<div class="bltwu_block_2">
			<div class="bltwu_block_2_table">
				<div class="bltwu_block_2_table_wrap">
					<div class="wrap_table_title">
						<p class="table_title">Цены на кружки</p>
						<p class="table_description">Лучшее предложение<br>в Москве</p>
					</div>
					<?php echo do_shortcode(get_field('training_with_us_table', 'option')); ?>
				</div>
			</div>
			<div class="bltwu_block_2_cf7">
				<div class="bltwu_form_wrap">
					<div class="my_cf7_form my_cf7_magenta">
						<?php echo do_shortcode(get_field('training_with_us_cf7', 'option')); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>