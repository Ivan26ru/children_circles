<div class="block_teachers block_other_single">
	<div class="wrap">
		<p class="title_block">Другие рубрики</p>
		<div class="bt_container">
			<?php
			$catID = get_the_category()[0]->term_id;
			$categories = get_categories([
					'taxonomy'     => 'category',
					'type'         => 'post',
					'child_of'     => 0,
					'parent'       => '',
					'orderby'      => 'name',
					'order'        => 'ASC',
					'hide_empty'   => 1,
					'hierarchical' => 1,
					'exclude'      => $catID,
					'include'      => '',
					'number'       => '',
					'pad_counts'   => false,
			]);

			shuffle($categories);
			$categories = array_slice($categories, 0, 4);

			if ($categories) {
				foreach ($categories as $cat) {
					$this_img = wp_get_attachment_image(get_field("imgcat1", $cat), 'thumbnail');
					$this_title = $cat->name;
					$this_permalink = get_category_link($cat->term_id);
					if (!$this_img) {
						$this_img = '<img src="' . get_template_directory_uri() . '/assets/img/1.png" alt="' . $this_title . '" title="' . $this_title . '"/>';
					}
					include "loop_other.php";;
				}
			}
			?>

		</div>
	</div>
</div>