<?php
/*
Plugin Name: uuhello Button Generator
Description: Easy and simple create booking, shopping cart, payment plugin code, just copy and paste to your website
Version: 1.0.0
Author: Harry He
Email: harry.he@gtpayment.com
Author URI: http://button.uuhello.com
Text Domain: uuhello.com

Copyright 2010 Harry He  (email : harry.he [at] gtpayment [dot] com)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/





// Hook for adding admin menus
add_action('admin_menu', 'button_generator_pages');

// action function for above hook
function button_generator_pages() {

    // Add a new top-level menu (ill-advised):
    add_menu_page(__( 'Button generator', 'uuhello-button-generator'),__( 'Button generator', 'uuhello-button-generator'), 'administrator', 'button-generator-top-level-handle', 'button_generator_toplevel_page','http://uuhello.com/button/images/button.png');

}

// mt_toplevel_page() displays the page content for the custom Test Toplevel menu
function button_generator_toplevel_page() {

global $sitepress;
if ($sitepress) $admin_lang = $sitepress->get_admin_language();

if($admin_lang=='zh-hans'){
	$lang_file_part='zh_CN';
}else{
	$lang_file_part='en';
}

$mofile_dir= ABSPATH.'/wp-content/plugins/uuhello-button-generator/languages/'.$lang_file_part.'.mo';
load_textdomain('uubutton', $mofile_dir);

	echo "<h2>" .__( 'Please Register uuhello.com to generate the button!', 'uubutton'). "</h2>	
	<iframe width='630' height='900' frameborder='0' scrolling='no' src=".__( 'http://uuhello.com/button_en','uubutton')."></iframe>";
}

?>
