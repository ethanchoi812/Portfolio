<?php

//Theme support
function iwebsg_theme_support(){

	// nav menus
	register_nav_menus(array(
		'primary'	=>	__('Primary Menu'),
		'footer'	=> __('Footer Menu')
		));
	}

add_action('after_setup_theme', 'iwebsg_theme_support');

// Add customizer functionality
require get_template_directory().'/inc/customizer.php';
?>