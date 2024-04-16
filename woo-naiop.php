<?php

/**
 * Plugin Name: WooCommerce customizations for NAIOP
 * GitHub Plugin URI: https://github.com/sdohei/dohei-woo-naiop
 * Version:     1.1
 */

 function display_page() {
    echo 'hello world';
  }
  function hello_admin_menu() {
    add_menu_page('hello', 'hello', 'manage_options', 'hello-world', 'display_page');
  }
  add_action('admin_menu', 'hello_admin_menu');