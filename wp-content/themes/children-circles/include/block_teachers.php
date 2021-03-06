<div class="block_teachers">
	<div class="wrap">
		<p class="title_block"><?php echo get_field('teachers', 'option') ?></p>
		<div class="bt_container">
			<?php
			// Check rows exists.
			if (have_rows('teachers_item', 'option')):
				// Loop through rows.
				while (have_rows('teachers_item', 'option')) :
					the_row();
					$name = get_sub_field('name');
					$description = get_sub_field('description');
					$avatar = wp_get_attachment_image(get_sub_field('avatar'), 'full','', array(
							'alt' => $name,
							'title' => $name,
					));
					?>
					<div class="bt_wrap_slider_item">
						<div class="bt_item">
							<div class="bt_avatar_wrap">
								<?php echo $avatar; ?>
							</div>
							<p class="bt_item_name"><?php echo $name; ?></p>
							<p class="bt_item_experience"><?php echo $description; ?></p>
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