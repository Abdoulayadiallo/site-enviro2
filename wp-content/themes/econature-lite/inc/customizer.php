<?php
/**
 * Econature Lite Theme Customizer
 *
 * @package Econature Lite
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function econature_lite_customize_register( $wp_customize ) {
	
	function econature_lite_sanitize_checkbox( $checked ) {
		// Boolean check.
		return ( ( isset( $checked ) && true == $checked ) ? true : false );
	}
	
	$wp_customize->get_setting( 'blogname' )->tranport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->tranport  = 'postMessage';

	$wp_customize->selective_refresh->add_partial( 'blogname', array(
	    'selector' => 'h1.site-title',
	    'render_callback' => 'econature_lite_customize_partial_blogname',
	) );

	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
	    'selector' => 'p.site-description',
	    'render_callback' => 'econature_lite_customize_partial_blogdescription',
	) );
	
	/***************************************
	** Color Scheme
	***************************************/
	$wp_customize->add_setting('color_scheme', array(
		'default' => '#6ab43e',
		'sanitize_callback'	=> 'sanitize_hex_color',
	));

	$wp_customize->add_control(
		new WP_Customize_Color_Control($wp_customize,'color_scheme',array(
			'label' => __('Color Scheme','econature-lite'),
			'description' => __('Select color from here.','econature-lite'),
			'section' => 'colors',
			'settings' => 'color_scheme'
		))
	);

	$wp_customize->add_setting('nature_headerbg_color', array(
		'default' => '#ffffff',
		'sanitize_callback'	=> 'sanitize_hex_color',
	));

	$wp_customize->add_control(
		new WP_Customize_Color_Control($wp_customize,'nature_headerbg_color',array(
			'label' => __('Header Background color','econature-lite'),
			'description'	=> __('Select background color for header.','econature-lite'),
			'section' => 'colors',
			'settings' => 'nature_headerbg_color'
		))
	);

	$wp_customize->add_setting('nature_footer_color', array(
		'default' => '#2e1b06',
		'sanitize_callback'	=> 'sanitize_hex_color',
	));

	$wp_customize->add_control(
		new WP_Customize_Color_Control($wp_customize,'nature_footer_color',array(
			'label' => __('Footer Background Color','econature-lite'),
			'description' => __('Select background color for footer.','econature-lite'),
			'section' => 'colors',
			'settings' => 'nature_footer_color'
		))
	);

	/***************************************
	** Registerd Theme Setup Panel
	***************************************/
	$wp_customize->add_panel( 'nature_theme_panel',
		array(
			'title'            => __( 'Setting up Theme', 'econature-lite' ),
			'description'      => __( 'Theme Modifications like color scheme, theme texts and layout preferences can be done here', 'econature-lite' ),
		)
	);
	
	/***************************************
	** Top Header
	***************************************/
	$wp_customize->add_section( 'nature_tp_head',
		array(
			'title' => __('Top Header', 'econature-lite'),
			'priority' => null,
			'description' => __('Add information to top header bar here','econature-lite'),
			'panel' => 'nature_theme_panel',
		)
	);
	
	$wp_customize->add_setting('nature_tpbr_phn',array(
		'sanitize_callback'	=> 'wp_filter_nohtml_kses',
		'transport' => 'refresh'
	));
	
	$wp_customize->add_control('nature_tpbr_phn',array(
		'type'	=> 'text',
		'label'	=> __('Add Phone Number here.','econature-lite'),
		'section'	=> 'nature_tp_head'
	));
	
	$wp_customize->selective_refresh->add_partial('nature_tpbr_phn', array(
        'selector' => '.header-top-left li:first-child'
    ));

	$wp_customize->add_setting('nature_tpbr_mail',array(
		'sanitize_callback'	=> 'wp_filter_nohtml_kses',
		'transport' => 'refresh'
	));
	
	$wp_customize->add_control('nature_tpbr_mail',array(
		'type'	=> 'text',
		'label'	=> __('Add Email Address here.','econature-lite'),
		'section'	=> 'nature_tp_head'
	));
	
	$wp_customize->selective_refresh->add_partial('nature_tpbr_mail', array(
        'selector' => '.header-top-left li a'
    ));
	
	$wp_customize->add_setting('nature_tpbr_fb',array(
		'sanitize_callback'	=> 'esc_url_raw',
		'transport' => 'refresh'
	));

	$wp_customize->add_control('nature_tpbr_fb',array(
		'type'	=> 'url',
		'label'	=> __('Add Facebook link here.','econature-lite'),
		'section'	=> 'nature_tp_head'
	));
	
	$wp_customize->selective_refresh->add_partial('nature_tpbr_fb', array(
        'selector' => '.header-top-right'
    ));
	
	$wp_customize->add_setting('nature_tpbr_tw',array(
		'sanitize_callback'	=> 'esc_url_raw'
	));

	$wp_customize->add_control('nature_tpbr_tw',array(
		'type'	=> 'url',
		'label'	=> __('Add Twitter link here.','econature-lite'),
		'section'	=> 'nature_tp_head'
	));

	$wp_customize->add_setting('nature_tpbr_yt',array(
		'sanitize_callback'	=> 'esc_url_raw'
	));

	$wp_customize->add_control('nature_tpbr_yt',array(
		'type'	=> 'url',
		'label'	=> __('Add Youtube link here.','econature-lite'),
		'section'	=> 'nature_tp_head'
	));

	$wp_customize->add_setting('nature_tpbr_in',array(
		'sanitize_callback'	=> 'esc_url_raw'
	));

	$wp_customize->add_control('nature_tpbr_in',array(
		'type'	=> 'url',
		'label'	=> __('Add Linkedin link here.','econature-lite'),
		'section'	=> 'nature_tp_head'
	));

	$wp_customize->add_setting('nature_tpbr_pin',array(
		'sanitize_callback'	=> 'esc_url_raw'
	));

	$wp_customize->add_control('nature_tpbr_pin',array(
		'type'	=> 'url',
		'label'	=> __('Add Pinterest link here.','econature-lite'),
		'section'	=> 'nature_tp_head'
	));
	
	$wp_customize->add_setting('nature_hide_tphead',array(
		'default' => true,
		'sanitize_callback' => 'econature_lite_sanitize_checkbox',
		'capability' => 'edit_theme_options',
	));	 

	$wp_customize->add_control( 'nature_hide_tphead', array(
	   'settings' => 'nature_hide_tphead',
	   'section'   => 'nature_tp_head',
	   'label'     => __('Check this to hide Top Header.','econature-lite'),
	   'type'      => 'checkbox'
	));
	
	/***************************************
	** Header Button
	***************************************/
	$wp_customize->add_section(
		'nature_cta_btn',
		array(
			'title' => __('Header Button', 'econature-lite'),
			'priority' => null,
			'description'	=> __('Add text and link for header button','econature-lite'),
			'panel' => 'nature_theme_panel',
		)
	);

	$wp_customize->add_setting('nature_cta_lbl',array(
		'sanitize_callback'	=> 'wp_filter_nohtml_kses',
		'transport' => 'refresh'
	));

	$wp_customize->add_control('nature_cta_lbl',array(
		'type'	=> 'text',
		'label'	=> __('Add header button text here','econature-lite'),
		'section'	=> 'nature_cta_btn'
	));

	$wp_customize->add_setting('nature_cta_link',array(
		'sanitize_callback'	=> 'esc_url_raw'
	));

	$wp_customize->add_control('nature_cta_link',array(
		'type'	=> 'url',
		'label'	=> __('Add header button link here.','econature-lite'),
		'section'	=> 'nature_cta_btn'
	));
	$wp_customize->selective_refresh->add_partial('nature_cta_lbl', array(
        'selector' => '.header-btn a'
    ));
	
	/***************************************
	** Slider Section
	***************************************/
	$wp_customize->add_section(
		'nature_theme_slider',
		array(
			'title' => __('Theme Slider', 'econature-lite'),
			'priority' => null,
			'description'	=> __('Recommended image size (1600x900). Slider will work only when you select the static front page.','econature-lite'),
			'panel' => 'nature_theme_panel',
		)
	);

	$wp_customize->add_setting('slide1',array(
			'default' => '0',
			'capability' => 'edit_theme_options',
			'sanitize_callback'	=> 'absint'
	));

	$wp_customize->add_control('slide1',array(
			'type'	=> 'dropdown-pages',
			'label'	=> __('Select page for slide one:','econature-lite'),
			'section'	=> 'nature_theme_slider'
	));

	$wp_customize->add_setting('slide2',array(
			'default' => '0',
			'capability' => 'edit_theme_options',
			'sanitize_callback'	=> 'absint'
	));

	$wp_customize->add_control('slide2',array(
			'type'	=> 'dropdown-pages',
			'label'	=> __('Select page for slide two:','econature-lite'),
			'section'	=> 'nature_theme_slider'
	));

	$wp_customize->add_setting('slide3',array(
			'default' => '0',
			'capability' => 'edit_theme_options',
			'sanitize_callback'	=> 'absint'
	));

	$wp_customize->add_control('slide3',array(
			'type'	=> 'dropdown-pages',
			'label'	=> __('Select page for slide three:','econature-lite'),
			'section'	=> 'nature_theme_slider'
	));

	$wp_customize->add_setting('slide_more',array(
		'default'	=> __('Read More','econature-lite'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));

	$wp_customize->add_control('slide_more',array(
		'label'	=> __('Add slider link button text.','econature-lite'),
		'section'	=> 'nature_theme_slider',
		'setting'	=> 'slide_more',
		'type'	=> 'text'
	));

	$wp_customize->add_setting('nature_hide_slider',array(
		'default' => true,
		'sanitize_callback' => 'econature_lite_sanitize_checkbox',
		'capability' => 'edit_theme_options',
	)); 

	$wp_customize->add_control( 'nature_hide_slider', array(
	   'settings' => 'nature_hide_slider',
	   'section'   => 'nature_theme_slider',
	   'label'     => __('Check this to hide slider.','econature-lite'),
	   'type'      => 'checkbox'
	));
	
	/***************************************
	** First Section
	***************************************/
	$wp_customize->add_section(
		'nature_first_sec',
		array(
			'title' => __('First Section', 'econature-lite'),
			'priority' => null,
			'description'	=> __('Select pages for homepage fisrt section. This section will be displayed only when you select the static front page.','econature-lite'),
			'panel' => 'nature_theme_panel',
		)
	);
	
	$wp_customize->add_setting('fsec1',array(
		'default' => '0',
		'capability' => 'edit_theme_options',
		'sanitize_callback'	=> 'absint'
	));

	$wp_customize->add_control('fsec1',array(
		'type'	=> 'dropdown-pages',
		'label'	=> __('Select page for first column','econature-lite'),
		'section'	=> 'nature_first_sec'
	));

	$wp_customize->add_setting('fsec2',array(
		'default' => '0',
		'capability' => 'edit_theme_options',
		'sanitize_callback'	=> 'absint'
	));

	$wp_customize->add_control('fsec2',array(
		'type'	=> 'dropdown-pages',
		'label'	=> __('Select page for second column','econature-lite'),
		'section'	=> 'nature_first_sec'
	));

	$wp_customize->add_setting('fsec3',array(
		'default' => '0',
		'capability' => 'edit_theme_options',
		'sanitize_callback'	=> 'absint'
	));

	$wp_customize->add_control('fsec3',array(
		'type'	=> 'dropdown-pages',
		'label'	=> __('Select page for third column','econature-lite'),
		'section'	=> 'nature_first_sec'
	));
	
	$wp_customize->add_setting('fsec4',array(
		'default' => '0',
		'capability' => 'edit_theme_options',
		'sanitize_callback'	=> 'absint'
	));

	$wp_customize->add_control('fsec4',array(
		'type'	=> 'dropdown-pages',
		'label'	=> __('Select page for fourth column','econature-lite'),
		'section'	=> 'nature_first_sec'
	));
	
	$wp_customize->add_setting('fsec_more',array(
		'default'	=> __('Read More','econature-lite'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));

	$wp_customize->add_control('fsec_more',array(
		'label'	=> __('Add read more button text.','econature-lite'),
		'section'	=> 'nature_first_sec',
		'setting'	=> 'fsec_more',
		'type'	=> 'text'
	));
	
	$wp_customize->add_setting('nature_hide_fsec',array(
		'default' => true,
		'sanitize_callback' => 'econature_lite_sanitize_checkbox',
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control( 'nature_hide_fsec', array(
	   'settings' => 'nature_hide_fsec',
	   'section'   => 'nature_first_sec',
	   'label'     => __('Check this to hide first section.','econature-lite'),
	   'type'      => 'checkbox'
	));
	
	/***************************************
	** Second Section
	***************************************/
	$wp_customize->add_section(
		'nature_intro_sec',
		array(
			'title' => __('Second Section', 'econature-lite'),
			'priority' => null,
			'description'	=> __('Select page for homepage second section. This section will be displayed only when you select the static front page.','econature-lite'),
			'panel' => 'nature_theme_panel',
		)
	);
	
	$wp_customize->add_setting('nature_intro',array(
		'default' => '0',
		'capability' => 'edit_theme_options',
		'sanitize_callback'	=> 'absint',
		'transport' => 'refresh'
	));

	$wp_customize->add_control('nature_intro',array(
		'type'	=> 'dropdown-pages',
		'label'	=> __('Select page for display second section','econature-lite'),
		'section'	=> 'nature_intro_sec'
	));
	
	$wp_customize->selective_refresh->add_partial('nature_intro', array(
        'selector' => '.intro-content'
    ));
	
	$wp_customize->add_setting('intro_more',array(
		'default'	=> __('Read More','econature-lite'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));

	$wp_customize->add_control('intro_more',array(
		'label'	=> __('Add read more button text.','econature-lite'),
		'section'	=> 'nature_intro_sec',
		'setting'	=> 'intro_more',
		'type'	=> 'text'
	));
	
	$wp_customize->add_setting('nature_hide_intro',array(
		'default' => true,
		'sanitize_callback' => 'econature_lite_sanitize_checkbox',
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control( 'nature_hide_intro', array(
	   'settings' => 'nature_hide_intro',
	   'section'   => 'nature_intro_sec',
	   'label'     => __('Check this to hide second section.','econature-lite'),
	   'type'      => 'checkbox'
	));
}
add_action( 'customize_register', 'econature_lite_customize_register' );

function econature_lite_css_func(){ ?>
<style>
	a,
	.tm_client strong,
	.postmeta a:hover,
	#sidebar ul li a:hover,
	.blog-post h3.entry-title,
	a.blog-more:hover,
	#commentform input#submit,
	input.search-submit,
	.blog-date .date,
	.sitenav ul li.current_page_item a,
	.sitenav ul li a:hover, 
	.sitenav ul li.current_page_item ul li a:hover{
		color:<?php echo esc_attr(get_theme_mod('color_scheme','#6ab43e'));?>;
	}
	h3.widget-title,
	.nav-links .current,
	.nav-links a:hover,
	p.form-submit input[type="submit"],
	.header-btn a,
	.nature-slider .inner-caption .sliderbtn,
	.read-more,
	.nivo-controlNav a,
	.header-top-head,
	.intro-content .section_head h2.section_title:after,
	.feat-box{
		background-color:<?php echo esc_attr(get_theme_mod('color_scheme','#6ab43e'));?>;
	}
	#header{
		background-color:<?php echo esc_attr(get_theme_mod('nature_headerbg_color','#ffffff'));?>;
	}
	.copyright-wrapper{
		background-color:<?php echo esc_attr(get_theme_mod('nature_footer_color','#2e1b06'));?>;
	}
</style>
<?php }
add_action('wp_head','econature_lite_css_func');

function econature_lite_customize_preview_js() {
	wp_enqueue_script( 'econature-lite-customize-preview', get_template_directory_uri() . '/js/customize-preview.js', array( 'customize-preview' ), '20141216', true );
}
add_action( 'customize_preview_init', 'econature_lite_customize_preview_js' );