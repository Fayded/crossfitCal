<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package crossfit
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]><script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<!--[if gte IE 9]><style type="text/css">.gradient {filter: none;}</style><![endif]-->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<div id="sticky-header">
		<div id="sticky-header-signup">
			<h2 id="sticky-header-text">Sign Up Now</h2>
		</div> 
		<div id="sticky-subscribe">
			email form here
		</div>
		<div id="sticky-social-icons">
			social icons here
		</div>
	</div>
	<header id="masthead" class="site-header" role="banner">
		<div class="container">
		<div class="site-branding">
			<h1><a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url') ?>/images/logo.png" alt="<?php bloginfo('description'); ?>" title="<?php bloginfo('name'); ?>" /></a></h1>		
		</div>

		<nav id="site-navigation" class="navigation-main" role="navigation">
			<h1 class="menu-toggle"><?php _e( 'Menu', 'crossfit' ); ?></h1>
			<div class="screen-reader-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'crossfit' ); ?>"><?php _e( 'Skip to content', 'crossfit' ); ?></a></div>

			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- #site-navigation -->
		</div>
	</header><!-- #masthead -->

	<div id="main" class="site-main">