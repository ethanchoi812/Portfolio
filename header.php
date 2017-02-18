<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
	<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/font-awesome.css">
	<link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans|Droid+Serif" rel="stylesheet">
</head>
<body>
	<header class="primary-header container group">
		<h1>
			<a class="logo" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
		</h1>
		<nav class="nav primary-nav">
			<?php
               wp_nav_menu(
                  array(
                  'theme_location' => 'primary', 
                  'container' => 'false',
                  'menu_class' => '',
                  'fallback_cb' => 'wp_page_menu',
                  'depth' => 2,
                  )
               );
          ?>
        </nav>
	</header>