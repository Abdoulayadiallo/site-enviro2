<?php
	
require get_template_directory() . '/includes/tgm/class-tgm-plugin-activation.php';

/**
 * Recommended plugins.
 */
function eco_nature_elementor_register_recommended_plugins() {
	$plugins = array(
		array(
			'name'             => __( 'Kirki Customizer Framework', 'eco-nature-elementor' ),
			'slug'             => 'kirki',
			'required'         => false,
			'force_activation' => false,
		),
		array(
			'name'             => __( 'WPElemento Importer', 'eco-nature-elementor' ),
			'slug'             => 'wpelemento-importer',
			'required'         => false,
			'force_activation' => false,
		),
	);
	$config = array();
	eco_nature_elementor_tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'eco_nature_elementor_register_recommended_plugins' );