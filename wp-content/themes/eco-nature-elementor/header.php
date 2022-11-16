<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Eco Nature Elementor
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<meta http-equiv="Content-Type" content="<?php echo esc_attr(get_bloginfo('html_type')); ?>; charset=<?php echo esc_attr(get_bloginfo('charset')); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.2, user-scalable=yes" />

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<?php
	if ( function_exists( 'wp_body_open' ) )
	{
		wp_body_open();
	}else{
		do_action('wp_body_open');
	}
?>
<?php if(get_theme_mod('eco_nature_elementor_preloader_hide','')){ ?>
	<div class="loader">
		<div class="preloader">
	    <div class="diamond">
	        <span></span>
	        <span></span>
	        <span></span>
	    </div>
		</div>
	</div>
<?php } ?>
<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'eco-nature-elementor' ); ?></a>

<header id="site-navigation" class="header text-center text-md-left">
	<div class="upperheader">
		<div class="container">
			<div class="row">
				<div class="col-lg-5 col-md-4 col-sm-4">
					<?php echo '<p class="mb-0">'. esc_attr(get_bloginfo('description')) . '</p>'; ?>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4 text-center text-md-right">
					<?php if ( get_theme_mod('eco_nature_elementor_header_location') ) : ?>
						<p class="mb-0"><?php echo esc_html( get_theme_mod('eco_nature_elementor_header_location' ) ); ?></p>
					<?php endif; ?>
				</div>
				<div class="col-lg-3 col-md-4 col-sm-4 text-center text-md-right">
					<?php if ( get_theme_mod('eco_nature_elementor_header_email') ) : ?>
						<p class="mb-0"><?php echo esc_html( get_theme_mod('eco_nature_elementor_header_email' ) ); ?></p>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
	<div class="topheader py-3">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-12 col-sm-12 align-self-center">
					<div class="logo text-center text-lg-left mb-3 mb-lg-0">
			    		<div class="logo-image">
			    			<?php echo esc_url( the_custom_logo() ); ?>
				    	</div>
				    	<div class="logo-content">
					    	<?php
					    		echo '<a href="' . esc_url(home_url('/')) . '" title="' . esc_attr(get_bloginfo('name')) . '">';
						      		echo esc_attr(get_bloginfo('name'));
						      	echo '</a>';
				    		?>
						</div>
					</div>
			   	</div>
			   	<div class="col-lg-8 col-md-12 col-sm-12 align-self-center">
			   		<div class="row">
						<div class="col-lg-5 col-md-5 col-sm-4 align-self-center">
							<?php $eco_nature_elementor_settings = get_theme_mod( 'eco_nature_elementor_social_links_settings' ); ?>
							<div class="social-links text-center text-md-right">
								<?php if ( is_array($eco_nature_elementor_settings) || is_object($eco_nature_elementor_settings) ){ ?>
							    	<?php foreach( $eco_nature_elementor_settings as $eco_nature_elementor_setting ) { ?>
								        <a href="<?php echo esc_url( $eco_nature_elementor_setting['link_url'] ); ?>">
								            <i class="<?php echo esc_attr( $eco_nature_elementor_setting['link_text'] ); ?>"></i>
								        </a>
							    	<?php } ?>
								<?php } ?>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-5 col-6 align-self-center">
							<?php if ( get_theme_mod('eco_nature_elementor_header_phone_number') || get_theme_mod('eco_nature_elementor_header_phone_number_text') ) : ?>
								<div class="row header-icon">
									<div class="col-lg-3 col-md-3 col-sm-3 col-3 align-self-center">
										<i class="fas fa-phone"></i>
									</div>
									<div class="col-lg-9 col-md-9 col-sm-9 col-9 align-self-center">
										<p class="mb-0"><?php echo esc_html( get_theme_mod('eco_nature_elementor_header_phone_number_text' ) ); ?></p>
										<h6 class="mb-0"><?php echo esc_html( get_theme_mod('eco_nature_elementor_header_phone_number' ) ); ?></h6>
									</div>
								</div>
							<?php endif; ?>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-3 col-6 align-self-center head-btn text-center text-md-right">
							<?php if ( get_theme_mod('eco_nature_elementor_header_button_text') ) : ?>
								<a href="<?php echo esc_url( get_theme_mod('eco_nature_elementor_header_button_url' ) ); ?>"><?php echo esc_html( get_theme_mod('eco_nature_elementor_header_button_text' ) ); ?></a>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="menu-header">
		<div class="container">
			<div class="center-header-box">
				<div class="row">
					<div class="col-lg-11 col-md-11 col-sm-6 align-self-center">
						<?php if(has_nav_menu('main-menu')){ ?>
							<button class="menu-toggle my-2 py-2 px-3" aria-controls="top-menu" aria-expanded="false" type="button">
								<span aria-hidden="true"><?php esc_html_e( 'Menu', 'eco-nature-elementor' ); ?></span>
							</button>
							<nav id="main-menu" class="close-panal">
								<?php
									wp_nav_menu( array(
										'theme_location' => 'main-menu',
										'container' => 'false'
									));
								?>
								<button class="close-menu my-2 p-2" type="button">
									<span aria-hidden="true"><i class="fa fa-times"></i></span>
								</button>
							</nav>
						<?php }?>
					</div>
					<div class="col-lg-1 col-md-1 col-sm-6 px-md-0 align-self-center">
					<?php if ( class_exists( 'woocommerce' ) ) {?>
						<a class="cart-customlocation" href="<?php if(function_exists('wc_get_cart_url')){ echo esc_url(wc_get_cart_url()); } ?>" title="<?php esc_attr_e( 'View Shopping Cart','eco-nature-elementor' ); ?>"><i class="fas fa-shopping-basket mr-2"></i><span class="cart-item-box">( <?php echo esc_html(wp_kses_data( WC()->cart->get_cart_contents_count() ));?> )</span></a>
					<?php }?>
			   	</div>
			</div>
		</div>
	</div>
</header>
