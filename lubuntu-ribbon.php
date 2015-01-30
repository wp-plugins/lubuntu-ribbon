<?php
/**
 * @package lubuntu-ribbon
 * @version 0.1
 */
/*
Plugin Name: Lubuntu Ribbon
Plugin URI: http://wordpress.org/plugins/lubuntu-ribbon
Description: When activated, this plugin will put a Lubuntu ribbon on the top right corner of your website. This is a fork of Stop censorship plugin.
Author: Željko Popivoda
Version: 0.1
License: GPLv2
Author URI: http://popivoda.com
*/

function render_lubuntu_ribbon() {
	$ribbon_url = plugins_url('lubuntu-ribbon.png', __FILE__ );
	if(function_exists('is_admin_bar_showing')) {
		$padding_top = is_admin_bar_showing() ? 28 : 0;
	} else {
		$padding_top = 0;
	}
	echo "<a target='_blank' class='lubuntu-ribbon' href='http://lubuntu.net'><img src='{$ribbon_url}' alt='Lubuntu' style='position: fixed; top: ".$padding_top ."px; right: 0; z-index: 100000; cursor: pointer; border:none;' /></a>";
}
add_action('wp_footer', 'render_lubuntu_ribbon');
