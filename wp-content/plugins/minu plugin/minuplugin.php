<?php
/*
Plugin Name: My First plugin
Plugin URI: https://daniiltrutnev.ikt.khk.ee/wordpress/
Description: This is my first WordPress Plugin
Author: Daniil 
Author URI: https://daniiltrutnev.ikt.khk.ee/wordpress/
Version: 1.0
*/

function my_plugin_test() {
	echo 'Hello World'; exit;
}
add_action('admin_head', 'my_plugin_test');
