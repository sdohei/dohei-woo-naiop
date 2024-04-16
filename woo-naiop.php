<?php

/**
 * Plugin Name:         WooCommerce NAIOP
 * Description:         WooCommerce customizations for NAIOP
 * Author:              Scott Dohei
 * GitHub Plugin URI:   https://github.com/sdohei/dohei-woo-naiop
 * Version:             1.3
 */

add_action('woocommerce_after_order_notes', 'custom_field');

function custom_field($checkout) {
    echo '<div id="naiop_checkout_diet"><h3>' . __('Please Provide The Custom Data') . '</h3>';

    woocommerce_form_field('naiop_checkout_diet',
        array(
            'type' => 'text',
            'required' => 'true',
            'class' => array(
                'my-field-class form-row-wide'
            ),
            'label' => __('Custom Field'),
            'placeholder' => __('Enter Custom Data'),
        ),
        $checkout->get_value('naiop_checkout_diet')
    );

    echo '</div>';
}