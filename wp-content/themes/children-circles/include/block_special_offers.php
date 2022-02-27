<div class="block_special_offers">
	<div class="wrap">
		<p class="title_block"><?php echo get_field('special_offers', 'option') ?></p>
		<div class="bso_wrap_card">
			<?php
			// Check rows exists.
			if (have_rows('special_offers_item', 'option')):
				// Loop through rows.
				while (have_rows('special_offers_item', 'option')) :
					the_row();

					// Load sub field value.
					$img = wp_get_attachment_image(get_sub_field('img'), 'full');
					$title = get_sub_field('title');
					$description = get_sub_field('description');

					?>
					<div class="bso_item_card">
						<div class="bso_card_wrap_img">
							<img src="<?php echo $img; ?>" alt="">
						</div>
						<p class="bso_ic_title"><?php echo $title; ?></p>
						<p class="bso_card_text"><?php echo $description; ?></p>
						<a href="#" class="bso_ic_block_read_more">Подробнее</a>
						<div class="icon_fire">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/fire.png" alt="">
						</div>
					</div>
				<?php
					// End loop.
				endwhile;

			// No value.
			else :
				// Do something...
			endif; ?>
		</div>
	</div>
</div>