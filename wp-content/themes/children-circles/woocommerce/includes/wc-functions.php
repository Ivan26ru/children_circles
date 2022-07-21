<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

if ( ! function_exists( 'woocommerce_single_variation' ) ) {

	/**
	 * Output placeholders for the single variation.
	 */
	function woocommerce_single_variation() {
		echo '<div class="woo-block__item"><div class="woocommerce-variation single_variation"></div><label>Стоимость занятия</label></div>';
	}
}