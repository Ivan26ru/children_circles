<div class="block_pre-school_development">
	<p class="title_block"><?php echo get_field('block_pre-school_development_title', 'option') ?></p>
	<div class="wrap">
		<div class="bpsd_container">
			<!--			<p class="text_block">Увы, не все родители знают, что в Петербурге много бесплатных кружков и секций для детей. Или думают, что устроить в них ребенка трудно.-->
			<!--				На самом деле таких кружков много, и они вполне приличного качества. Накануне начала массового набора в них «Литтлван» составил подробную инструкцию, где в разных районах города можно заниматься спортом, наукой, музыкой и рисованием бесплатно. В обзор не вошли художественные, музыкальные и спортивные школы, а также занятия при общеобразовательных школах. О них, полагаем, вы и так знаете. </p>-->
			<div class="bpsd_wrap_card">


				<?php
				// Check rows exists.
				if (have_rows('block_pre-school_development_item', 'option')):
					// Loop through rows.
					while (have_rows('block_pre-school_development_item', 'option')) :
						the_row();

						$title = get_sub_field('title');
						$name_list = get_sub_field('name_list');
						$img_list = wp_get_attachment_image(get_sub_field('img_list'), 'full','', array(
								'alt' => $title,
								'title' => $title,
						));
						$list_item = 'list_item';

						?>
						<div class="bpsd_item_card">
							<p class="bpst_ic_title"><?php echo $title; ?></p>
							<div class="bpsd_ic_block">
								<div class="bpsd_ic_name_list">
									<div class="bpsd_ic_nl_wrap_img"><?php echo $img_list; ?></div>
									<p class="bpsp_ic_block_title"><?php echo $name_list; ?></p>
								</div>
								<ul class="bpsd_ic_block_list">
									<?php if (have_rows($list_item)): while (have_rows($list_item)) :
										the_row();
										$text = get_sub_field('text');
										?>
										<li><?php echo $text; ?></li>
									<?php endwhile; endif; ?>
								</ul>
								<a href="#" class="bpsd_ic_block_read_more read_more_orange btn_orange">Подробнее</a>
							</div>
						</div>
					<?php
						// End loop.
					endwhile;
				endif; ?>
			</div>
		</div>
	</div>
</div>