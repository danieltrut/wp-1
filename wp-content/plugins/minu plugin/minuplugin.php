<?php
/*
Plugin Name: My First plugin
Plugin URI: https://daniiltrutnev.ikt.khk.ee/wordpress/
Description: This is my first WordPress Plugin
Author: Daniil 
Author URI: https://daniiltrutnev.ikt.khk.ee/wordpress/
Version: 1.0
*/

/*************************** 
 *  global variables
 * ************************/
 
$mfwp_prefix = 'mfwp_';
$mfwp_plugin_nam = 'My first wordpress plugin';

/*************************** 
 *  includes
 * ************************/
 
 include('includes/scripts.php'); // this controls all js / css
 include('includes/data-processing.php'); // this controls all saving of data
  include('includes/display-functions.php'); // this controls all saving of data