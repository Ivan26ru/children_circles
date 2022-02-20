<div class="block_ratings_and_reviews">
	<div class="wrap">
		<p class="title_block"><?php echo get_field('ratings_and_reviews', 'option') ?></p>
		<div class="rar_container">

			<?php

			// Check rows exists.
			if (have_rows('ratings_and_reviews_item', 'option')):
				$count = 0; ?>
				<div class="rar_col">
				<?php
				// Loop through rows.
				while (have_rows('ratings_and_reviews_item', 'option')) :
					the_row();

					// Load sub field value.
					$avatar = wp_get_attachment_image(get_sub_field('avatar'), 'full');
					$name = get_sub_field('name');
					$description = get_sub_field('description');
					$stars_count = get_sub_field('stars_count');


					if ($count == 0) {
						$count = 1;
					} elseif ($count == 1) {
						$count = 2;
					} else {
						$count = 1;
						?>
						</div><div class="rar_col">
						<?php
					} ?>


					<div class="rar_item">
						<div class="rar_item_wrap_img">
							<?php echo $avatar; ?>
						</div>
						<div class="rar_item_info">
							<p class="rar_item_title"><?php echo $name; ?></p>
							<p class="rar_item_text"><?php echo $description; ?></p>
							<div class="rar_item_wrap_star">
								<?php for ($i = 0; $i < $stars_count; $i++) { ?>
									<div class="wrap_star_img">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/img/star.png" alt="">
									</div>
								<?php } ?>
							</div>
						</div>
					</div>

				<?php

					// End loop.
				endwhile; ?>
				</div>
			<?php

			// No value.
			else :
				// Do something...
			endif; ?>


		</div>
	</div>
</div>