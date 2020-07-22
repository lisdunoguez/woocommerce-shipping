<?php
/**
 * Plugin Name: Price Hide (Custom Functions)
 * Plugin URI: 
 * Description: Hides the price of shipping options per Duane's request.
 * Author: Lisette D
 * Author URI: 
 * Version: 0.1.0
 */

/* Place custom code below this line. */

/*
 * Hide zero value on any zero cost shipping methods
 *
 */

add_filter( 'woocommerce_cart_shipping_method_full_label', function( $label, $method ) {

    if ( $method->cost <= 0 ) {

        $label = $method->get_label();
    }

    return $label;

}, 10, 2 );

/*____________________________________*/

add_filter( 'woocommerce_cart_shipping_method_full_label', function( $label, $method ) {

    if ( $method->cost <= 1 ) {

        $label = $method->get_label();
    }

    return $label;

}, 10, 2 );

/*__________________________________*/

// removes (free) from free shipping methods
 
add_filter( 'woocommerce_cart_shipping_method_full_label', 'remove_free_label', 10, 2 );
 
function remove_free_label($full_label, $method) {
$full_label = str_replace("(Free Shipping)","",$full_label);
return $full_label;
}

/* Place custom code above this line. */
?>