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
<?php include "include/block_teachers.php"; ?>
<?php include "include/block_map.php"; ?>

	<!--<section>--><!--	<div class="container">--><!--		<div class="row">--><!--			<div class="">--><!--				--><?php //if ( have_posts() ) while ( have_posts() ) : the_post(); // старт цикла ?>
	<!--					<article id="post---><?php //the_ID(); ?><!--" --><?php //post_class(); ?><!--> --><?php //// контэйнер с классами и id ?>
	<!--						<h1>--><?php //the_title(); // заголовок поста ?><!--</h1>--><!--						--><?php //the_content(); // контент ?>
	<!--					</article>--><!--				--><?php //endwhile; // конец цикла ?>
	<!--			</div>--><!--			--><?php //get_sidebar(); // подключаем sidebar.php ?>
	<!--		</div>--><!--	</div>--><!--</section>-->
<?php get_footer(); // подключаем footer.php ?>