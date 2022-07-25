<?php
/**
 * Шаблон обычной страницы (page.php)
 * @package WordPress
 * @subpackage this_my_theme
 */
get_header(); // подключаем header.php ?>

<?php require get_template_directory() . "/include/block_map.php"; ?>
<?php require get_template_directory() . "/include/block_h1.php"; ?>
<?php require get_template_directory() . "/include/block_trial_lesson.php"; ?>
<?php require get_template_directory() . "/include/block_content.php"; ?>
<?php require get_template_directory() . "/include/block_our_mugs.php"; ?>
<?php require get_template_directory() . "/include/block_gratitude.php"; ?>
<?php require get_template_directory() . "/include/ratings_and_reviews.php"; ?>
<?php require get_template_directory() . "/include/block_special_offers.php"; ?>
<?php require get_template_directory() . "/include/block_other_category.php"; ?>
<?php require get_template_directory() . "/include/block_posts.php"; ?>
<?php require get_template_directory() . "/include/block_map.php"; ?>
<?php get_footer(); // подключаем footer.php ?>