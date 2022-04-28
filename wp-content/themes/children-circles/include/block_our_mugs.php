<div class="block_our_mugs">
	<div class="wrap">
		<p class="title_block"><?php echo get_field('block_our_mugs_title', 'option') ?></p>
		<div class="bom_container">
			<?php
			if (have_rows('block_our_mugs_item', 'option')):
				// Loop through rows.
				while (have_rows('block_our_mugs_item', 'option')) :
					the_row();
					$title = get_sub_field('title');
					$link = get_sub_field('link');
					$img = get_url_img_is_sub_field('img', 'bom_item_img', get_template_directory_uri() . '/assets/img/image400.png')
					?>
					<div class="bom_item">
						<div class="bom_item_wrap_img">
							<img src="<?php echo $img; ?>" alt="<?php echo $title; ?>" title="<?php echo $title; ?>">
						</div>
						<a href="<?php echo $link; ?>" class="bom_item_title"><?php echo $title; ?></a>
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