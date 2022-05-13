<?php $gratitude_title = get_field('gratitude','option'); ?>
<div class="block_gratitude">
	<div class="wrap">
		<p class="title_block"><?php echo $gratitude_title; ?></p>
		<div class="container_gratitude">
			<?php

			$images = get_field('gratitude_item','option');
			$size = 'full'; // (thumbnail, medium, large, full or custom size)
			if ($images): ?>
					<?php foreach ($images as $image_id): ?>
					<div class="cg_item">
						<div class="cg_wrap_img">
							<?php echo wp_get_attachment_image($image_id, $size,'', array(
									'alt' => $gratitude_title,
									'title' => $gratitude_title,
							)); ?>
						</div>
					</div>
					<?php endforeach; ?>
			<?php endif; ?>

		</div>
	</div>
</div>

