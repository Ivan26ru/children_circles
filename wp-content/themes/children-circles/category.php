<?php
/**
 * Шаблон обычной страницы (page.php)
 * @package WordPress
 * @subpackage this_my_theme
 */
get_header(); // подключаем header.php ?>

<?php include "include/block_map.php"; ?>
<?php include "include/block_trial_lesson.php"; ?>
<?php include "include/block_content.php"; ?>
<?php include "include/block_our_mugs.php"; ?>
<?php include "include/block_gratitude.php"; ?>
<?php include "include/ratings_and_reviews.php"; ?>
<?php include "include/block_special_offers.php"; ?>
<?php include "include/block_other_category.php"; ?>
<?php include "include/block_posts.php"; ?>
<?php include "include/block_map.php"; ?>
<?php get_footer(); // подключаем footer.php ?>