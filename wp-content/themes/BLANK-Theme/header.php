<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
	
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	
	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
	</title>
	
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/swipebox.css" type="text/css" />
	<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300,700,400' rel='stylesheet' type='text/css'>
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />


	
	
	
	
	
	<!--<script type="text/javascript">
	$(document).ready(function() {
	  $('#nav').onePageNav();
	});
	</script>-->


	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

	<?php wp_enqueue_script("jquery"); ?>

	<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>

	<?php wp_head(); ?>


	
</head>

<body <?php body_class(); ?>>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.nav.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/smooth.js"></script>
	<div id="page-wrap">

		<div id="header" class="pageTitle">
			
		</div>
	<header id="title" class="pageTitle">
		<h1 class="nameTitle">Matthew Logan</h1>
		<h2 class="nameTitle">Artist</h2>
	</header>

