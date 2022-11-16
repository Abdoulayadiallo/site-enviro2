<?php
/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 */

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 *
	 * @since Econature Lite 1.0
	 *
	 * @return void
	 */
	function econature_lite_register_block_styles() {
		// Columns: Overlap.
		register_block_style(
			'core/columns',
			array(
				'name'  => 'econature-lite-columns-overlap',
				'label' => esc_html__( 'Overlap', 'econature-lite' ),
			)
		);

		// Cover: Borders.
		register_block_style(
			'core/cover',
			array(
				'name'  => 'econature-lite-border',
				'label' => esc_html__( 'Borders', 'econature-lite' ),
			)
		);

		// Group: Borders.
		register_block_style(
			'core/group',
			array(
				'name'  => 'econature-lite-border',
				'label' => esc_html__( 'Borders', 'econature-lite' ),
			)
		);

		// Image: Borders.
		register_block_style(
			'core/image',
			array(
				'name'  => 'econature-lite-border',
				'label' => esc_html__( 'Borders', 'econature-lite' ),
			)
		);

		// Image: Frame.
		register_block_style(
			'core/image',
			array(
				'name'  => 'econature-lite-image-frame',
				'label' => esc_html__( 'Frame', 'econature-lite' ),
			)
		);

		// Latest Posts: Dividers.
		register_block_style(
			'core/latest-posts',
			array(
				'name'  => 'econature-lite-latest-posts-dividers',
				'label' => esc_html__( 'Dividers', 'econature-lite' ),
			)
		);

		// Latest Posts: Borders.
		register_block_style(
			'core/latest-posts',
			array(
				'name'  => 'econature-lite-latest-posts-borders',
				'label' => esc_html__( 'Borders', 'econature-lite' ),
			)
		);

		// Media & Text: Borders.
		register_block_style(
			'core/media-text',
			array(
				'name'  => 'econature-lite-border',
				'label' => esc_html__( 'Borders', 'econature-lite' ),
			)
		);

		// Separator: Thick.
		register_block_style(
			'core/separator',
			array(
				'name'  => 'econature-lite-separator-thick',
				'label' => esc_html__( 'Thick', 'econature-lite' ),
			)
		);

		// Social icons: Dark gray color.
		register_block_style(
			'core/social-links',
			array(
				'name'  => 'econature-lite-social-icons-color',
				'label' => esc_html__( 'Dark gray', 'econature-lite' ),
			)
		);
	}
	add_action( 'init', 'econature_lite_register_block_styles' );
}
