<?php

//Theme support
function iwebsg_theme_support(){

	// nav menus
	register_nav_menus(array(
		'primary'	=>	__('Primary Menu'),
		'footer'	=> __('Footer Menu')
		));

	//add feature image
	add_theme_support( 'post-thumbnails' ); 

	}

function new_excerpt_more( $more ) {
    return '';
}

//Widgets Location
function init_widgets($id){
	register_sidebar(array(
		'name'		=> 'Sidebar',
		'id'		=> 'sidebar',
		'before_widget'	=> '<div class="sidebar-widget">',
		'after_widget' => '</div><div class="see-all"><a href="iwebsg.com/articles">See all</a></div>',
		'before_title' => '<div class="section-heading"><h2>',
		'after_title'	=> '</h2></div>'
		));

	register_sidebar(array(
		'name'		=> 'Contact Widget',
		'id'		=> 'contact-widget',
		'before_widget'	=> '<div class="sidebar-widget contact-widget">',
		'after_widget' => '</div>',
		'before_title' => '<div class="section-heading"><h2>',
		'after_title'	=> '</h2></div>'
		));
}

add_action('widgets_init', 'init_widgets');

//remove [...] from blog page
add_filter('excerpt_more', 'new_excerpt_more');

add_action('after_setup_theme', 'iwebsg_theme_support');

// Add customizer functionality
require get_template_directory().'/inc/customizer.php';
?>