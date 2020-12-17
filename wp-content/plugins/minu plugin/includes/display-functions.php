<?php


/*************************** 
 *  display control
 * ************************/
 
 function mfwp_add_content($content){
     return $content. 'this is returns';
 }
 add_filter('the content', 'mfwp_add_content');
 