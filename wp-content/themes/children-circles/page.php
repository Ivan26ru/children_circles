<?php
/**
 * Шаблон обычной страницы (page.php)
 * @package WordPress
 * @subpackage this_my_theme
 */
?>
<?php if (is_woo_page()) { ?>
	<?php get_header(); // подключаем header.php ?>

<!--	--><?php //require get_template_directory() . "/include/block_map.php"; ?>
	<div class="block_h1">
		<div class="wrap">
			<h1>ЗАПИСЬ НА ЗАНЯТИЕ</h1>
		</div>
	</div>
<!--	--><?php //require get_template_directory() . "/include/block_trial_lesson.php"; ?>
<!--	--><?php //require get_template_directory() . "/include/block_content.php"; ?>
	<div class="block-woo">
<!--		<p class="title_block">Запись на занятие</p>-->
		<div class="block-container">
			<div class="wrap">
				<?php
				if (have_posts()) while (have_posts()) : the_post(); // старт цикла
					the_content();
				endwhile; // конец цикла ?>
			</div>
		</div>
	</div>
<!--	--><?php //require get_template_directory() . "/include/block_our_mugs.php"; ?>
	<?php require get_template_directory() . "/include/block_gratitude.php"; ?>
	<?php require get_template_directory() . "/include/ratings_and_reviews.php"; ?>
<!--	--><?php //require get_template_directory() . "/include/block_special_offers.php"; ?>
<!--	--><?php //require get_template_directory() . "/include/block_other_single.php"; ?>
<!--	--><?php //require get_template_directory() . "/include/block_map.php"; ?>
	<?php get_footer(); // подключаем footer.php ?>
<?php } else { ?>
	<?php get_header(); // подключаем header.php ?>

	<?php require get_template_directory() . "/include/block_map.php"; ?>
	<?php require get_template_directory() . "/include/block_h1.php"; ?>
	<?php require get_template_directory() . "/include/block_trial_lesson.php"; ?>
	<?php require get_template_directory() . "/include/block_content.php"; ?>
	<?php require get_template_directory() . "/include/block_our_mugs.php"; ?>
	<?php require get_template_directory() . "/include/block_gratitude.php"; ?>
	<?php require get_template_directory() . "/include/ratings_and_reviews.php"; ?>
	<?php require get_template_directory() . "/include/block_special_offers.php"; ?>
	<?php require get_template_directory() . "/include/block_other_single.php"; ?>
	<?php require get_template_directory() . "/include/block_map.php"; ?>
	<?php get_footer(); // подключаем footer.php ?>
<?php } ?>
