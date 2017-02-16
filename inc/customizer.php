<?php
	function iwebsg_customize_register($wp_customize){

		//Hero section
		$wp_customize->add_section('hero', array(
				'title'			=> __('Hero', 'iwebsg'),
				'description'	=> sprintf( __('Options for hero area', 'iwebsg')
					),
				'priority'		=> 130,
			));

		//Hero header setting
		$wp_customize->add_setting( 'hero_header', array(
			  'type' => 'theme_mod',
			  'default' => _x('Hi, welcome to my portfolio site', 'iwebsg')
			));

		//Hero header control
		$wp_customize->add_control( 'hero_header', array(
			  'priority' => 1, // Within the section.
			  'section' => 'hero', // Required, core or custom.
			  'label' => __( 'Hero Header', 'iwebsg' ),
	  		));

		//Hero subheader setting
		$wp_customize->add_setting( 'hero_subheader', array(
			  'type' => 'theme_mod',
			  'default' => _x('Front end web developer', 'iwebsg')
			));

		//Hero subheading control
		$wp_customize->add_control( 'hero_subheader', array(
			  'priority' => 2, // Within the section.
			  'section' => 'hero', // Required, core or custom.
			  'label' => __( 'Hero Sub-header', 'iwebsg' ),
	  		));

		//Hero description setting
		$wp_customize->add_setting( 'hero_description', array(
			  'type' => 'theme_mod',
			  'default' => _x('Aspiring world changer, one line of code at a time', 'iwebsg')
			));

		//Hero description control
		$wp_customize->add_control( 'hero_description', array(
			  'priority' => 3, // Within the section.
			  'section' => 'hero', // Required, core or custom.
			  'label' => __( 'Hero Description', 'iwebsg' ),
	  		));

		//Hero button setting
		$wp_customize->add_setting( 'hero_button', array(
			  'type' => 'theme_mod',
			  'default' => _x('iwebsg.com/contact', 'iwebsg')
			));

		//Hero button control
		$wp_customize->add_control( 'hero_button', array(
			  'priority' => 3, // Within the section.
			  'section' => 'hero', // Required, core or custom.
			  'label' => __( 'Hero Button Text', 'iwebsg' ),
	  		));

		//Hero button text setting
		$wp_customize->add_setting( 'hero_button', array(
			  'type' => 'theme_mod',
			  'default' => _x('Hire me!', 'iwebsg')
			));

		//Hero button text control
		$wp_customize->add_control( 'hero_button', array(
			  'priority' => 3, // Within the section.
			  'section' => 'hero', // Required, core or custom.
			  'label' => __( 'Hero Button', 'iwebsg' ),
	  		));

		//Social section
		$wp_customize->add_section('social', array(
				'title'			=> __('Social', 'iwebsg'),
				'description'	=> sprintf( __('Social media URLs', 'iwebsg')
					),
				'priority'		=> 140,
			));

		//Twitter URL Setting 
		$wp_customize->add_setting( 'twitter_url', array(
			  'type' => 'theme_mod',
			  'default' => _x('http://www.twitter.com', 'iwebsg')
			));

		//Twitter URL Controls 
		$wp_customize->add_control( 'twitter_url', array(
			  'priority' => 2, // Within the section.
			  'section' => 'social', // Required, core or custom.
			  'label' => __( 'Twitter URL', 'iwebsg' ),
	  		));

		//LinkedIn URL Setting 
		$wp_customize->add_setting( 'linkedin_url', array(
			  'type' => 'theme_mod',
			  'default' => _x('http://www.linkedin.com', 'iwebsg')
			));

		//Linkedin URL Controls 
		$wp_customize->add_control( 'linkedin_url', array(
			  'priority' => 2, // Within the section.
			  'section' => 'social', // Required, core or custom.
			  'label' => __( 'Linkedin URL', 'iwebsg' ),
	  		));

		//Github URL Setting 
		$wp_customize->add_setting( 'github_url', array(
			  'type' => 'theme_mod',
			  'default' => _x('http://www.github.com', 'iwebsg')
			));

		//Github URL Controls 
		$wp_customize->add_control( 'github_url', array(
			  'priority' => 3, // Within the section.
			  'section' => 'social', // Required, core or custom.
			  'label' => __( 'Github URL', 'iwebsg' ),
	  		));

		// Showcase section A
		$wp_customize->add_section('showcase_section', array(
				'title'	=> __('Showcase Section A', 'iwebsg'),
				'panel' => 'showcase',
				'description'	=> sprintf( __('Options for showcase area', 'iwebsg')
					),
				'priority'		=> 135,
			));

		//Section Heading setting
		$wp_customize->add_setting( 'showcase_header_title', array(
			  'type' => 'theme_mod',
			  'default' => _x('Front End Projects', 'iwebsg')
			));

		//Section heading control
		$wp_customize->add_control( 'showcase_header_title', array(
			  'priority' => 1, // Within the section.
			  'section' => 'showcase', // Required, core or custom.
			  'label' => __( 'Section Header', 'iwebsg' ),
	  		));

		//Title setting
		$wp_customize->add_setting( 'showcase_item_title', array(
			  'type' => 'theme_mod',
			  'default' => _x('My Awesome App', 'iwebsg')
			));

		//Title control
		$wp_customize->add_control( 'showcase_item_title', array(
			  'priority' => 1, // Within the section.
			  'section' => 'showcase', // Required, core or custom.
			  'label' => __( 'Title of work', 'iwebsg' ),
	  		));

		//Text Setting 
		$wp_customize->add_setting( 'showcase_text', array(
			  'type' => 'theme_mod',
			  'default' => _x('My Awesome App was made with plain awesomeness Javascript.', 'iwebsg')
			));

		//Text Controls 
		$wp_customize->add_control( 'showcase_text', array(
			  'priority' => 2, // Within the section.
			  'section' => 'showcase', // Required, core or custom.
			  'label' => __( 'Description', 'iwebsg' ),
	  		));

		//URL Setting 
		$wp_customize->add_setting( 'showcase_url', array(
			  'type' => 'theme_mod',
			  'default' => _x('http://iwebsg.com/portfolio', 'iwebsg')
			));

		//URL Controls 
		$wp_customize->add_control( 'showcase_url', array(
			  'priority' => 3, // Within the section.
			  'section' => 'showcase', // Required, core or custom.
			  'label' => __( 'Link to work', 'iwebsg' ),
	  		));

/* No tagging yet!
		
		//Tag Setting 
		$wp_customize->add_setting( 'showcase_tag', array(
			  'type' => 'theme_mod',
			  'default' => _x('Javascript', 'iwebsg')
			));

		//Tag Controls 
		$wp_customize->add_control( 'showcase_tag', array(
			  'priority' => 4, // Within the section.
			  'section' => 'showcase', // Required, core or custom.
			  'label' => __( 'Tag', 'iwebsg' ),
	  		));

		//Tag Color Setting 
		$wp_customize->add_setting( 'showcase_tag_color', array(
			  'type' => 'theme_mod',
			  'default' => _x('#ccc', 'iwebsg')
			));

		//Tag Color Controls 
		$wp_customize->add_control( 'showcase_tag_color', array(
			  'priority' => 5, // Within the section.
			  'section' => 'showcase', // Required, core or custom.
			  'label' => __( 'Tag Color', 'iwebsg' ),
	  		));
*/
		}

	add_action('customize_register', 'iwebsg_customize_register');