<?php
/**
 * Header-v1 template.
 *
 * @author     ThemeFusion
 * @copyright  (c) Copyright by ThemeFusion
 * @link       http://theme-fusion.com
 * @package    Avada
 * @subpackage Core
 */

// Do not allow directly accessing this file.
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}
?>
<div class="fusion-header-sticky-height"></div>
<div class="fusion-header custom-header-v1">
	<div class="fusion-row">
		<?php if ( 'flyout' === Avada()->settings->get( 'mobile_menu_design' ) ) : ?>
			<div class="fusion-header-has-flyout-menu-content">
		<?php endif; ?>
		<?php avada_logo(); ?>
		<div class="nav_wrapper">
		<?php avada_main_menu(); ?>
		<div class="right_btn_v1" >
			<a href="https://getstarted2.tradestation.com/intro?_ga=2.206087963.904236960.1587653255-1719907153.1584990457"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/trade-header-button.png" class="trade_hd_v1"></a>
			<?php /* wp_nav_menu(
				array(
					  'theme_location' => 'Top Navigation', 
					  'container' => '', 
					  'menu_class' => 'nav navbar-nav menu__list', 
					  'menu' => 'yct-zero-nav'
					)
				);  */
			?>	
			<?php if ( is_user_logged_in() ) { ?>
					<a href="<?php echo esc_url( get_permalink(12120) ); ?>"><button type="button" class="btn nav_login">Dashboard</button></a>
					<a href="<?php echo site_url(); ?>/wp-login.php?loggedout=true""><button type="button" class="btn btn-primary  nav_signup">LogOut</button></a>					
					<?php 
				} else { ?>
					<a href="<?php echo site_url(); ?>/wp-login.php?action=login"><button type="button" class="btn nav_login">Login</button></a>
					<a href="<?php echo esc_url( get_permalink(15284) ); ?>"><button type="button" class="btn btn-primary  nav_signup">Sign Me Up!</button></a>
				<?php } 
			?>
			
		</div>
		</div>
		<?php if ( 'flyout' === Avada()->settings->get( 'mobile_menu_design' ) ) : ?>
			</div>
		<?php endif; ?>
	</div>
</div>
