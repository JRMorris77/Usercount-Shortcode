<?php
/*
Plugin Name: Usercount Shortcode
Plugin URI: https://premium.wpmudev.org
Description: A plugin through which we can display the total network user count by shortcode
Version: 1.0
Author: James Morris
Author URI: https://premium.wpmudev.org/profile/jrmorris77
License: GPL2
*/
function wpb_user_count() {
	$usercount = get_user_count();
	return $usercount; 
}
// Creating a shortcode to display user count
add_shortcode('user_count', 'wpb_user_count');
?>