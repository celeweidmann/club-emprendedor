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

//Cambiar el usuario por defecto
function user_role_to_new_blog($blog_id, $user_id) {
	add_user_to_blog($blog_id, $user_id, 'emprendedor' );
}
add_action( 'wpmu_new_blog', 'user_role_to_new_blog', 10, 2 );

//Ocultar menu Ajuster
add_action( 'admin_init', 'my_remove_menu_pages' );
function my_remove_menu_pages() {
	global $user_ID;
	$user = wp_get_current_user();
	if ($user->roles[0] == 'emprendedor' ){
		remove_menu_page( 'options-general.php' );
		remove_menu_page( 'branding' );
		remove_menu_page( 'tools.php' );
	}
}

// Agrego el archivo admin.css para cambiar cosas del admin
function admin_style() {
	wp_enqueue_style('admin-styles', get_stylesheet_directory_uri().'/admin.css');
  }
add_action('admin_enqueue_scripts', 'admin_style');

//Agrego la clase pagina-new solo si estoy como usuario emprendedor para ocultar el menú Agregar pagina
function add_admin_class() {
	$user = wp_get_current_user();
	if ($user->roles[0] == 'emprendedor' ){
		$find = '#menu-pages .wp-submenu li ';
    	$add_class = 'pagina-new';
	    echo '"<script type="text/javascript">
        	jQuery(function() {
            jQuery("' . $find . '").addClass("' . $add_class . '");
        	});
		</script>"';
	}
}
add_action('admin_footer', 'add_admin_class');
?>
