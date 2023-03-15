<?php
/**
 *  @package: pms plugin
 */
/*
Plugin Name: Pms-plugin
Plugin URI: http://URI_Of_Page_Describing_Plugin_and_Updates
Description: A brief description of the Plugin.
Tags: buddypress
Version: The Plugin's Version Number, e.g.: 1.0
Author: Name Of The Plugin Author
Author URI: http://URI_Of_The_Plugin_Author
License: A "Slug" license name e.g. GPL2
*/

if (! defined('ABSPATH')){die;}

/* Checking if the file exists and if it does, it will require it. */
if(file_exists(dirname(__FILE__). '/vendor/autoload.php')){
    require_once dirname(__FILE__). '/vendor/autoload.php';
}

;