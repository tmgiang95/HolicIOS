<?php
/**
 * Storefront engine room
 *
 * @package storefront
 */

/**
 * Assign the Storefront version to a var
 */
$theme              = wp_get_theme( 'storefront' );
$storefront_version = $theme['Version'];

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 980; /* pixels */
}

$storefront = (object) array(
	'version' => $storefront_version,

	/**
	 * Initialize all the things.
	 */
	'main'       => require 'inc/class-storefront.php',
	'customizer' => require 'inc/customizer/class-storefront-customizer.php',
);

require 'inc/storefront-functions.php';
require 'inc/storefront-template-hooks.php';
require 'inc/storefront-template-functions.php';

if ( class_exists( 'Jetpack' ) ) {
	$storefront->jetpack = require 'inc/jetpack/class-storefront-jetpack.php';
}

if ( storefront_is_woocommerce_activated() ) {
	$storefront->woocommerce = require 'inc/woocommerce/class-storefront-woocommerce.php';

	require 'inc/woocommerce/storefront-woocommerce-template-hooks.php';
	require 'inc/woocommerce/storefront-woocommerce-template-functions.php';
}

if ( is_admin() ) {
	$storefront->admin = require 'inc/admin/class-storefront-admin.php';

	require 'inc/admin/class-storefront-plugin-install.php';
}

/**
 * NUX
 * Only load if wp version is 4.7.3 or above because of this issue;
 * https://core.trac.wordpress.org/ticket/39610?cversion=1&cnum_hist=2
 */
if ( version_compare( get_bloginfo( 'version' ), '4.7.3', '>=' ) && ( is_admin() || is_customize_preview() ) ) {
	require 'inc/nux/class-storefront-nux-admin.php';
	require 'inc/nux/class-storefront-nux-guided-tour.php';

	if ( defined( 'WC_VERSION' ) && version_compare( WC_VERSION, '3.0.0', '>=' ) ) {
		require 'inc/nux/class-storefront-nux-starter-content.php';
	}
}

/**
 * Note: Do not add any custom code here. Please use a custom plugin so that your customizations aren't lost during updates.
 * https://github.com/woocommerce/theme-customisations
 */

add_action( 'rest_api_init', function () {
    register_rest_route( 'holic', '/products', array(
        'methods' => 'GET',
        'callback' => 'getproducts',
    ) );
    register_rest_route( 'holic', '/orders', array(
        'methods' => 'GET',
        'callback' => 'getorders',
    ) );
} );

function getproducts( ) {
    require_once 'class-wc-api-client.php';

    $consumer_key = 'ck_e5d3051f4ae096916d3741317dd21b18421039c6'; // Add your own Consumer Key here
    $consumer_secret = 'cs_6073ebaad2768feb7ceaec259924128d19740495'; // Add your own Consumer Secret here
    $store_url = 'http://localhost:8888/wordpress'; // Add the home URL to the store you want to connect to here

    // Initialize the class
    $wc_api = new WC_API_Client( $consumer_key, $consumer_secret, $store_url );
    return $wc_api->get_products();
}
function getorders( ) {
    require_once 'class-wc-api-client.php';

    $consumer_key = 'ck_e5d3051f4ae096916d3741317dd21b18421039c6'; // Add your own Consumer Key here
    $consumer_secret = 'cs_6073ebaad2768feb7ceaec259924128d19740495'; // Add your own Consumer Secret here
    $store_url = 'http://localhost:8888/wordpress'; // Add the home URL to the store you want to connect to here

    // Initialize the class
    $wc_api = new WC_API_Client( $consumer_key, $consumer_secret, $store_url );
    return $wc_api->get_products();
}




