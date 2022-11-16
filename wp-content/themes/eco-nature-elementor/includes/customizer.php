<?php

if ( class_exists("Kirki")){

	//ADDITIONAL SETTINGS

	Kirki::add_section( 'eco_nature_elementor_additional_setting', array(
	    'title'          => esc_html__( 'Additional Settings', 'eco-nature-elementor' ),
	    'description'    => esc_html__( 'Additional Settings of themes', 'eco-nature-elementor' ),
	    'priority'       => 10,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'eco_nature_elementor_preloader_hide',
		'label'       => esc_html__( 'Here you can enable or disable your preloader.', 'eco-nature-elementor' ),
		'section'     => 'eco_nature_elementor_additional_setting',
		'default'     => '0',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'eco_nature_elementor_scroll_enable_setting',
		'label'       => esc_html__( 'Here you can enable or disable your scroller.', 'eco-nature-elementor' ),
		'section'     => 'eco_nature_elementor_additional_setting',
		'default'     => '0',
		'priority'    => 10,
	] );


	// HEADER SECTION

	Kirki::add_section( 'eco_nature_elementor_section_header', array(
	    'title'          => esc_html__( 'Header Settings', 'eco-nature-elementor' ),
	    'description'    => esc_html__( 'Here you can add header information.', 'eco-nature-elementor' ),
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'eco_nature_elementor_enable_email_heading',
		'section'     => 'eco_nature_elementor_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Add Email Address', 'eco-nature-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'    =>  esc_html__( 'Email ID', 'eco-nature-elementor' ),
		'settings' => 'eco_nature_elementor_header_email',
		'section'  => 'eco_nature_elementor_section_header',
		'default'  => '',
		'sanitize_callback' => 'sanitize_email',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'eco_nature_elementor_enable_location_heading',
		'section'     => 'eco_nature_elementor_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Add Location', 'eco-nature-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'    =>  esc_html__( 'Location Address', 'eco-nature-elementor' ),
		'settings' => 'eco_nature_elementor_header_location',
		'section'  => 'eco_nature_elementor_section_header',
		'default'  => '',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'eco_nature_elementor_header_phone_number_heading',
		'section'     => 'eco_nature_elementor_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Add Phone Number', 'eco-nature-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'    =>  esc_html__( 'Text', 'eco-nature-elementor' ),
		'settings' => 'eco_nature_elementor_header_phone_number_text',
		'section'  => 'eco_nature_elementor_section_header',
		'default'  => '',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'    =>  esc_html__( 'Phone Number', 'eco-nature-elementor' ),
		'settings' => 'eco_nature_elementor_header_phone_number',
		'section'  => 'eco_nature_elementor_section_header',
		'default'  => '',
		'sanitize_callback' => 'eco_nature_elementor_sanitize_phone_number',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'eco_nature_elementor_enable_button_heading',
		'section'     => 'eco_nature_elementor_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( ' Header Button', 'eco-nature-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'    =>  esc_html__( 'Button Text', 'eco-nature-elementor' ),
		'settings' => 'eco_nature_elementor_header_button_text',
		'section'  => 'eco_nature_elementor_section_header',
		'default'  => '',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'url',
		'label'    =>  esc_html__( 'Button URL', 'eco-nature-elementor' ),
		'settings' => 'eco_nature_elementor_header_button_url',
		'section'  => 'eco_nature_elementor_section_header',
		'default'  => '',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'eco_nature_elementor_enable_socail_link',
		'section'     => 'eco_nature_elementor_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Social Media Link', 'eco-nature-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'repeater',
		'section'     => 'eco_nature_elementor_section_header',
		'row_label' => [
			'type'  => 'field',
			'value' => esc_html__( 'Social Icon', 'eco-nature-elementor' ),
			'field' => 'link_text',
		],
		'button_label' => esc_html__('Add New Social Icon', 'eco-nature-elementor' ),
		'settings'     => 'eco_nature_elementor_social_links_settings',
		'default'      => '',
		'fields' 	   => [
			'link_text' => [
				'type'        => 'text',
				'label'       => esc_html__( 'Icon', 'eco-nature-elementor' ),
				'description' => esc_html__( 'Add the fontawesome class ex: "fab fa-facebook-f".', 'eco-nature-elementor' ),
				'default'     => '',
			],
			'link_url' => [
				'type'        => 'url',
				'label'       => esc_html__( 'Social Link', 'eco-nature-elementor' ),
				'description' => esc_html__( 'Add the social icon url here.', 'eco-nature-elementor' ),
				'default'     => '',
			],
		],
		'choices' => [
			'limit' => 20
		],
	] );

	// FOOTER SECTION

	Kirki::add_section( 'eco_nature_elementor_footer_section', array(
        'title'          => esc_html__( 'Footer Settings', 'eco-nature-elementor' ),
        'description'    => esc_html__( 'Here you can change copyright text', 'eco-nature-elementor' ),
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'eco_nature_elementor_footer_text_heading',
		'section'     => 'eco_nature_elementor_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Text', 'eco-nature-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'eco_nature_elementor_footer_text',
		'section'  => 'eco_nature_elementor_footer_section',
		'default'  => '',
		'priority' => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'eco_nature_elementor_footer_enable_heading',
		'section'     => 'eco_nature_elementor_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Footer Link', 'eco-nature-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'eco_nature_elementor_copyright_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'eco-nature-elementor' ),
		'section'     => 'eco_nature_elementor_footer_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'eco-nature-elementor' ),
			'off' => esc_html__( 'Disable', 'eco-nature-elementor' ),
		],
	] );
}
