<?php
/**
 * Element Eco Nature Theme page
 *
 * @package Element Eco Nature
 */

if ( ! defined( 'ECO_NATURE_ELEMENTOR_SUPPORT' ) ) {
	define( 'ECO_NATURE_ELEMENTOR_SUPPORT', 'https://wordpress.org/support/theme/eco-nature-elementor' );
}
if ( ! defined( 'ECO_NATURE_ELEMENTOR_REVIEW' ) ) {
	define( 'ECO_NATURE_ELEMENTOR_REVIEW', 'https://wordpress.org/support/theme/eco-nature-elementor/reviews/#new-post' );
}
if ( ! defined( 'ECO_NATURE_ELEMENTOR_LIVE_DEMO' ) ) {
	define( 'ECO_NATURE_ELEMENTOR_LIVE_DEMO', 'https://www.wpelemento.com/demo/eco-nature-elementor/' );
}
if ( ! defined( 'ECO_NATURE_ELEMENTOR_BUY_NOW' ) ) {
	define( 'ECO_NATURE_ELEMENTOR_BUY_NOW', 'https://www.wpelemento.com/elementor/eco-nature-wordpress-theme/' );
}

//Admin Enqueue for Admin
function eco_nature_elementor_admin_enqueue_scripts(){
	wp_enqueue_style('eco-nature-elementor-admin-style', esc_url( get_template_directory_uri() ) . '/includes/about-theme/css/admin.css');
}
add_action( 'admin_enqueue_scripts', 'eco_nature_elementor_admin_enqueue_scripts' );

/**
 * Add theme page
 */
function eco_nature_elementor_menu() {
	add_theme_page( esc_html__( 'About Theme', 'eco-nature-elementor' ), esc_html__( 'About Theme', 'eco-nature-elementor' ), 'edit_theme_options', 'eco-nature-elementor-about', 'eco_nature_elementor_about_display' );
}
add_action( 'admin_menu', 'eco_nature_elementor_menu' );

/**
 * Display About page
 */
function eco_nature_elementor_about_display() {
	$theme = wp_get_theme(); ?>
	<div class="wrap about-wrap full-width-layout">
		<div class="about-theme">
			<h1><?php echo esc_html( $theme ); ?></h1>
			<div class="theme-description">
				<p class="about-text">
					<?php
					// Remove last sentence of description.
					$description = explode( '. ', $theme->get( 'Description' ) );

					array_pop( $description );

					$description = implode( '. ', $description );

					echo esc_html( $description . '.' );
				?></p>
			</div>
		</div>

		<?php
			eco_nature_elementor_main_screen();
		?>

		<div class="return-to-dashboard">
			<?php if ( current_user_can( 'update_core' ) && isset( $_GET['updated'] ) ) : ?>
				<a href="<?php echo esc_url( self_admin_url( 'update-core.php' ) ); ?>">
					<?php is_multisite() ? esc_html_e( 'Return to Updates', 'eco-nature-elementor' ) : esc_html_e( 'Return to Dashboard &rarr; Updates', 'eco-nature-elementor' ); ?>
				</a> |
			<?php endif; ?>
			<a href="<?php echo esc_url( self_admin_url() ); ?>"><?php is_blog_admin() ? esc_html_e( 'Go to Dashboard &rarr; Home', 'eco-nature-elementor' ) : esc_html_e( 'Go to Dashboard', 'eco-nature-elementor' ); ?></a>
		</div>
	</div>
	<?php
}

/**
 * Output the main about screen.
 */
function eco_nature_elementor_main_screen() {
	$theme = wp_get_theme(); ?>
	<div class="feature-section">
		<div class="card">
			<h2 class="title"><?php esc_html_e( 'Theme Customizer', 'eco-nature-elementor' ); ?></h2>
			<p><?php esc_html_e( 'Easy Customization options are available on custumizer screen.', 'eco-nature-elementor' ) ?></p>
			<p><a href="<?php echo esc_url( admin_url( 'customize.php' ) ); ?>" class="button button-primary" target="_blank"><?php esc_html_e( 'Customize', 'eco-nature-elementor' ); ?></a></p>
		</div>		

		<div class="card">
			<h2 class="title"><?php esc_html_e( 'Support', 'eco-nature-elementor' ); ?></h2>
			<p><?php esc_html_e( 'Get quick support from genuine people who deliver tailored solutions to your questions.', 'eco-nature-elementor' ) ?></p>
			<p><a href="<?php echo esc_url( ECO_NATURE_ELEMENTOR_SUPPORT ); ?>" class="button button-primary" target="_blank"><?php esc_html_e( 'Support', 'eco-nature-elementor' ); ?></a></p>
		</div>

		<div class="card">
			<h2 class="title"><?php esc_html_e( 'Review', 'eco-nature-elementor' ); ?></h2>
			<p><?php esc_html_e( 'Show us support by reveiwing our theme. Click here to leave your reveiw.', 'eco-nature-elementor' ) ?></p>
			<p><a href="<?php echo esc_url( ECO_NATURE_ELEMENTOR_REVIEW ); ?>" class="button button-primary" target="_blank"><?php esc_html_e( 'Review', 'eco-nature-elementor' ); ?></a></p>
		</div>
	</div>
	<div class="pro-feature-section">
		<h2 class="title"><?php esc_html_e( 'Eco Nature Elementor Pro', 'eco-nature-elementor' ); ?></h2>
		<div class="pro-buttons">
			<a href="<?php echo esc_url( ECO_NATURE_ELEMENTOR_LIVE_DEMO ); ?>" class="button button-primary live-preview" target="_blank"><?php esc_html_e( 'Live Preview', 'eco-nature-elementor' ); ?></a>
			<a href="<?php echo esc_url( ECO_NATURE_ELEMENTOR_BUY_NOW ); ?>" class="button button-primary buy-nw" target="_blank"><?php esc_html_e( 'Buy Now', 'eco-nature-elementor' ); ?></a>
		</div>
		<img src="<?php echo esc_url( $theme->get_screenshot() ); ?>" />
	</div>
	<?php
}
