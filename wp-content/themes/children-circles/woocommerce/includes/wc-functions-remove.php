<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}


add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' ); //remove css woo
add_filter('woocommerce_reset_variations_link', '__return_empty_string'); //remove reset inputs

//add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields' );
//
//function custom_override_checkout_fields( $fields ) {
//	unset($fields['billing']['billing_company']);
//	unset($fields['billing']['billing_address_2']);
//	unset($fields['billing']['billing_country']);
//	unset($fields['billing']['billing_state']);
//	unset($fields['billing']['billing_postcode']);
//	unset($fields['billing']['billing_city']);
//	return $fields;
//}