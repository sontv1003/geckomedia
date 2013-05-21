<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage blankSlate
 * @since blankSlate 3.5
 */
?><!DOCTYPE html>

<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged,$cat_id, $wpdb;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

	?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-1.8.2.min.js"></script>
	<!-- CSS
  ================================================== -->

	<!-- CSS for Nivo Slider -->
	<link rel="stylesheet" href="<?php echo bloginfo('template_directory');?>/css/themes/default/default.css">
    <link rel="stylesheet" href="<?php echo bloginfo('template_directory');?>/css/nivo-slider.css">
    <link rel="stylesheet" href="<?php echo bloginfo('template_directory');?>/css/nivo-style.css">
    
    <!-- css site style -->
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<link rel="stylesheet" href="<?php echo bloginfo('template_directory');?>/css/skeleton.css">
	<link rel="stylesheet" href="<?php echo bloginfo('template_directory');?>/css/layout.css">
	<link rel="stylesheet" href="<?php echo bloginfo('template_directory');?>/css/buttons.css">
	<link rel="stylesheet" href="<?php echo bloginfo('template_directory');?>/css/mediaquery.css">
	
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!--[if IE 9]>
		<link rel="stylesheet" href="stylesheets/layout-ie9.css">
	<![endif]-->

	<!--[if IE 8]>
		<link rel="stylesheet" href="stylesheets/layout-ie8.css">
	<![endif]-->

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="<?php echo bloginfo('template_directory');?>/images/favicon.ico">
	<link rel="apple-touch-icon" href="<?php echo bloginfo('template_directory');?>/images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo bloginfo('template_directory');?>/images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo bloginfo('template_directory');?>/images/apple-touch-icon-114x114.png">
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="boxcontainer">
	<div class="boxview">
    
		<div class="header">		
			<header class="header-content">
		
				<h1 class="logo"><a href=".">Gecko Media</a></h1>
										
					<div class="navigation">
		
						<nav class="primary">					
								<ul id="nav">								
									<?php wp_nav_menu(array('theme_location'=> 'header','container' =>''));?>									
                                                                </ul>
						</nav><!--end container-->
						
						<div class="clearfix"></div>
						
					</div><!--end band navigation-->							
		
			</header><!--end container-->
			
		</div><!--end band-->	