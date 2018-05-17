<?php
/**
 * Template used to display post content.
 *
 * @package storefront
 */
    require_once( 'lib/woocommerce-api.php' );
    
    $options = array(
                     'ssl_verify'      => false,
                     );
    
    try {
        $consumer_key = 'ck_e5d3051f4ae096916d3741317dd21b18421039c6';
        $consumer_secret = 'cs_6073ebaad2768feb7ceaec259924128d19740495';
        $client = new WC_API_Client( 'http://localhost/wordpress', $consumer_key, $consumer_secret, $options );
        
    } catch ( WC_API_Client_Exception $e ) {
        
        echo $e->getMessage() . PHP_EOL;
        echo $e->getCode() . PHP_EOL;
        
        if ( $e instanceof WC_API_Client_HTTP_Exception ) {
            
            print_r( $e->get_request() );
            print_r( $e->get_response() );
        }
    }
?>

