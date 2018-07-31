<?php
add_action( 'wp_enqueue_scripts', 'emprendedor_style' );
function emprendedor_style() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}

add_filter( 'woocommerce_payment_gateways', 'growdev_remove_unused_payment_gateways', 20, 1 );
/**
 *  This function will remove all of the WooCommerce standard gateways from the 
 *  WooCommerce > Settings > Checkout dashboard.
 */
function growdev_remove_unused_payment_gateways( $load_gateways ) {
	$remove_gateways = array( 
		'WC_Gateway_BACS',
        	'WC_Gateway_Cheque',
        	'WC_Gateway_COD',
		'WC_Gateway_Paypal',
		'WC_Gateway_Simplify_Commerce',
		'WC_Addons_Gateway_Simplify_Commerce'
	);
	foreach ( $load_gateways as $key => $value ) {
		if ( in_array( $value, $remove_gateways ) ) {
			unset( $load_gateways[ $key ] );
		}
	}
	return $load_gateways;
}
?>
