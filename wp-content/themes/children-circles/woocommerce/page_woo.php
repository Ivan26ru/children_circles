<div class="block-woo">
	<p class="title_block">Запись на занятие</p>
	<div class="block-container">
		<div class="wrap">
			<?php
			if (have_posts()) while (have_posts()) : the_post(); // старт цикла
				the_content();
			endwhile; // конец цикла ?>
		</div>
	</div>
</div>