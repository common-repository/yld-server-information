<?php
/**
 * Plugin Name: YLD Server Information
 * Description: Show all server information
 * Version:     1.2
 * Author:      Yinlong
 * Author URI:  https://www.linkedin.com/in/yinlong-shao-559605189/
 * Donate link: https://www.paypal.me/shaoyinlong
 * License:     GPL2
 */
add_action('admin_menu', 'yld_create_menu');
function yld_create_menu(){
    add_menu_page('YLD server info', 'Server Info', 'manage_options', 'yld-main-menu', 'yld_server_info'); 
}

include 'functions.php';
function yld_server_info(){
    $info = yld_get_info();
    include 'table_template.php';
}