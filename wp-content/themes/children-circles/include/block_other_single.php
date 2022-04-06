<div class="block_teachers block_other_single">
	<div class="wrap">
		<p class="title_block">Другие статьи</p>
		<div class="bt_container">

			<?php
			$categories = get_the_category($post->ID);
			if ($categories) {
				$category_ids = array();
				foreach ($categories as $individual_category) $category_ids[] = $individual_category->term_id;

				$args = array(
						'category__in'     => $category_ids,
						'post__not_in'     => array($post->ID),
						'showposts'        => 5,
						'orderby'          => 'rand',
						'caller_get_posts' => 1
				);
				$my_query = new wp_query($args);
				if ($my_query->have_posts()) {
					while ($my_query->have_posts()) {
						$my_query->the_post();
						$this_img = get_the_post_thumbnail($post->ID, 'thumbnail');
						$this_title = get_the_title();
						$this_permalink = get_the_permalink();
						if (!$this_img) {
							$this_img = '<img src="' . get_template_directory_uri() . '/assets/img/1.png" alt="' . $this_title . '" title="' . $this_title . '"/>';
						}
						include "loop_other.php";
					}
				}
				wp_reset_query();
			} ?>

		</div>
	</div>
</div>