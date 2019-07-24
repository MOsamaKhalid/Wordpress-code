<?php

function mytesttheme_resources()
{
	 wp_enqueue_style('style' , get_stylesheet_uri());
}

add_action('wp_enqueue_scripts','
	mytesttheme_resources');

//Navigation Menus
register_nav_menus(array(
	'header' => __('Header Menu'),
	'footer' => __('Footer Menu'),
));

?>