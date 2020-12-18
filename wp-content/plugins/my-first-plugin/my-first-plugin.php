<?php
/*
Plugin Name: My-First-plugin111
Plugin URI: https://daniiltrutnev.ikt.khk.ee/wordpress/
Description: This is my first WordPress Plugin
Author: Daniil 
Author URI: https://daniiltrutnev.ikt.khk.ee/wordpress/
Version: 1.0
*/

/*************************** 
 *  global variables
 * ************************/
 
function dh_modify_read_more_link() {
 return '<a class="more-link" href="' . get_permalink() . '">Click to Read!</a>';
}
add_filter( 'the_content_more_link', 'dh_modify_read_more_link' );