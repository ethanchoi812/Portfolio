<?php
	function iwebsg_customize_register($wp_customize){
		// Showcase section
		$wp_customize->add_section('showcase', array(
				'title'			=> __('Showcase', 'iwebsg'),
				'description'	=> sprintf( __('Options for showcase area', 'iwebsg')
					),
				'priority'		=> 130,
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

		}

	add_action('customize_register', 'iwebsg_customize_register');