<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
		
		<link rel="stylesheet" href="<?php echo site_url(); ?>/wp-content/themes/sodeninsurance/css/fontawesome-all.css">
		<link rel="stylesheet" href="<?php echo site_url(); ?>/wp-content/themes/sodeninsurance/css/bootstrap.css"> 

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="<?php echo site_url(); ?>/wp-content/themes/sodeninsurance/js/bootstrap.min.js"></script>


	 

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<script>
function goBack() {
	window.history.go(-1);
}
</script>
	
<div id="page" class="site">
	<div class="site-inner">
	 
		<header id="masthead" class="site-header" role="banner">
        <div class="head">
			<div class="container">
				<div class="row">   
                
                
                
					<div class="col-lg-6 logo-block">
						<?php twentysixteen_the_custom_logo(); ?>
					</div>
					<div class="col-lg-6 text-right">
                   
						<?php dynamic_sidebar('header-1'); ?>
					</div>
				</div><!-- .site-branding --> 
                
                </div>
                </div>
                <div class="menus">
                <div class="container">
				<div class="row">
					<div class="col-sm-12">
						<?php if ( has_nav_menu( 'primary' ) || has_nav_menu( 'social' ) ) : ?>
							<button id="menu-toggle" class="menu-toggle"><?php _e( 'Menu', 'twentysixteen' ); ?></button>
							<div id="site-header-menu" class="site-header-menu">
								<?php if ( has_nav_menu( 'primary' ) ) : ?>
									<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'twentysixteen' ); ?>">
										<?php
											wp_nav_menu( array(
												'theme_location' => 'primary',
												'menu_class'     => 'primary-menu',
											 ) );
										?>
									</nav><!-- .main-navigation -->
								<?php endif; ?>
							</div><!-- .site-header-menu -->
						<?php endif; ?>
					</div>
				</div>
                </div>
                </div>
			</div><!-- .site-header-main -->
		</header><!-- .site-header -->

		<div id="content" class="site-content">
