<div class="block_training_with_us">
	<div class="wrap">
		<p class="title_block">Обучение у нас</p>        <br>
		<?php echo do_shortcode(get_field('training_with_us_video', 'option')); ?>
		<!--		<div class="bltwu_block_1">-->
		<!--		</div>-->

		<div class="bltwu_block_2" id="bltwu_block_2">
			<div class="bltwu_block_2_table">
				<?php echo do_shortcode(get_field('training_with_us_table', 'option')); ?>
			</div>
			<div class="bltwu_block_2_cf7">
				<div class="bltwu_form_wrap" id="bltwu_form_wrap">
					<div class="my_cf7_form my_cf7_magenta">
						<?php echo do_shortcode(get_field('training_with_us_cf7', 'option')); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>