
<?php
/*
Plugin Name: MInu uus plugin
Plugin URI: https://daniiltrutnev.ikt.khk.ee/wordpress/
Description: This is my first WordPress Plugin
Author: Daniil 
Author URI: https://daniiltrutnev.ikt.khk.ee/wordpress/
Version: 1.0
*/


define( 'DC_PLUGIN_BASENAME', plugin_basename( __FILE__ ) );

//functions for plugin administration
include( 'includes/developer.php' );

//create & manage plugin settings
include( 'includes/settings.php' );

//holds the "heart" of the plugin (sorry!)
include( 'includes/valentines-hearts.php' );
