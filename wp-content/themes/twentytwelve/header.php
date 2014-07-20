<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<!-- load font -->
<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300,700,400' rel='stylesheet' type='text/css'>
<!-- load jQuery -->
<?php wp_enqueue_script("jquery"); ?>
		


<?php wp_head(); ?>

</head>

<body <?php body_class(); ?> >

	<!-- load plugins for smoothscroll -->
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.nav.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/smooth.js"></script>


<div id="page" class="hfeed site">
	<header id="masthead" class="site-header" role="banner">
		
			<!-- call single/page nav -->
				<script type="text/javascript">
					jQuery(document).ready(function() {
					  jQuery('#site-navigation').onePageNav();
					});
				</script>
			
		

		<nav id="site-navigation" class="main-navigation" role="navigation">
			
			<!-- cues the nav -->
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
			
			
		</nav><!-- #site-navigation -->

		
	</header><!-- #masthead -->

	<div id="main" class="wrapper">