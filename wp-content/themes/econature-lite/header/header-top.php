<?php
/**
 * The Top Bar for our theme.
 *
 * Display all information related to top bar
 *
 * @package Econature Lite
 */

$naturetphead = get_theme_mod('nature_hide_tphead','1');

if( empty( $naturetphead ) ) {
	
	$getheadphn = get_theme_mod('nature_tpbr_phn');
	$getheadmail = get_theme_mod('nature_tpbr_mail');
	
	$gettpbrfb = get_theme_mod('nature_tpbr_fb');
	$gettpbrtw = get_theme_mod('nature_tpbr_tw');
	$gettpbryt = get_theme_mod('nature_tpbr_yt');
	$gettpbrin = get_theme_mod('nature_tpbr_in');
	$gettpbrpi = get_theme_mod('nature_tpbr_pin');
	
?>
<div class="header-top-head">
	<div class="container">
		<div class="flex-box">
			<?php if( !empty( $getheadphn || $getheadmail ) ) { ?>
			<div class="header-top-left">
				<ul>
					<?php 
						if( !empty( $getheadphn ) ) {
							echo '<li><i class="fa fa-phone"></i> '.$getheadphn.'</li>';
						} if( !empty( $getheadmail ) ) {
							echo '<li><i class="fa fa-envelope-o"></i> <a href="mailto:'.$getheadmail.'">'.$getheadmail.'</a></li>';
						}
					?>
				</ul>
			</div><!-- left -->
			<?php } if( !empty( $gettpbrfb || $gettpbrtw || $gettpbryt || $gettpbrin || $gettpbrpi ) ) { ?>
			<div class="header-top-right">
				<div class="topbar-social">
					<?php
						if( !empty( $gettpbrfb ) ){
						echo '<a href="'.esc_url( $gettpbrfb ).'" target="_blank" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>';
						}
						if( !empty( $gettpbrtw ) ){
							echo '<a href="'.esc_url( $gettpbrtw ).'" target="_blank" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>';
						}
						if( !empty( $gettpbryt ) ){
							echo '<a href="'.esc_url( $gettpbryt ).'" target="_blank" title="YouTube"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>';
						}
						if( !empty( $gettpbrin ) ){
							echo '<a href="'.esc_url( $gettpbrin ).'" target="_blank" title="Linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>';
						}
						if( !empty( $gettpbrpi ) ){
							echo '<a href="'.esc_url( $gettpbrpi ).'" target="_blank" title="Pinterest"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>';
						}
					?>
				</div><!-- social -->
			</div><!-- right -->
			<?php } ?>
		</div>
	</div>
</div>
<?php 
}
?>