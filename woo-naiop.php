<?php

/**
 * Plugin Name:         WooCommerce NAIOP
 * Description:         WooCommerce customizations for NAIOP
 * Author:              Scott Dohei
 * GitHub Plugin URI:   https://github.com/sdohei/dohei-woo-naiop
 * Version:             1.4
 */

add_action('woocommerce_after_order_notes', 'custom_field');

function custom_field($checkout) {
    echo '<div id="naiop_checkout_diet"><h3>' . __('Please Provide The Custom Data') . '</h3>';


    echo '</div>';
}