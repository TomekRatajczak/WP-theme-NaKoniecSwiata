<?php

if(!defined('NAKONIECSWIATA_THEME_DIR')) {
	
	define('NAKONIECSWIATA_THEME_DIR', get_theme_root().'/'.get_template().'/');
}	

if(!defined('NAKONIECSWIATA_THEME_URL')) {
	define('NAKONIECSWIATA_THEME_URL', WP_CONTENT_URL.'/themes/'.get_template().'/');
}

require_once NAKONIECSWIATA_THEME_DIR.'libs/posttypes.php';
// require_once NAKONIECSWIATA_THEME_DIR.'libs/utils.php';

if(function_exists('register_nav_menus')){
	register_nav_menus(array( 
		'main_nav' => 'Główne menu nawigacji',
	));
}

add_theme_support( 'post-thumbnails', array('post', 'offers') );
?>





