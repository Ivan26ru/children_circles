<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}


add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' ); //remove css woo
add_filter('woocommerce_reset_variations_link', '__return_empty_string'); //remove reset inputs