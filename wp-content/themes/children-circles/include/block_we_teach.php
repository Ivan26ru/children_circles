<div class="block_we_teach">
	<div class="wrap">
		<p class="title_block"><?php echo get_field('block_we_teach', 'option') ?></p>
		<ul class="container_we_teach">
			<?php
			if (have_rows('block_we_teach_item', 'option')):
				// Loop through rows.
				while (have_rows('block_we_teach_item', 'option')) :
					the_row();
					$title = get_sub_field('title');
					?>
					<li class="cwt_item"><a href="#"><?php echo $title; ?></a></li>
				<?php
					// End loop.
				endwhile;

			// No value.
			else :
				// Do something...
			endif; ?>
		</ul>
	</div>
</div>