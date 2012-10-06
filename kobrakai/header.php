<!DOCTYPE html>   
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> 
<html <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<!--[if IE]><![endif]-->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title><?php
	global $page, $paged;
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
	<meta name="description" content="">
	<meta name="keywords" content="" />
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width; initial-scale=1.0">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<!-- !CSS -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300italic,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/style.css" />
	<!-- Uncomment if you are specifically targeting less enabled mobile browsers
	<link rel="stylesheet" media="handheld" href="css/handheld.css?v=1">  -->
	<!-- !Modernizr - All other JS at bottom 
	<script src="js/modernizr-1.5.min.js"></script>-->
	<?php wp_head(); ?>
</head>
<!-- !Body -->
<body <?php body_class(); ?>>
	<header>		
		<a href="<?php echo home_url(); ?>" title="<?php bloginfo('name'); ?>">
			<img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo.png" class="header_logo" alt="Signee mB in gebrochener Schrift" />
			<div class="header_text">
				<hgroup class="header">
					<h1 class="header_name"><?php bloginfo('name'); ?></h1>
					<h2 class="header_desc"><?php bloginfo('description'); ?></h2>
				</hgroup><nav>
					<?php wp_nav_menu(array('menu' => 'main_menu', 'after' => '<span class="seperator"> //</span>',  'depth' => 0)); ?>
				</nav>
			</div>
		</a>
		<!-- /#nav  -->
	</header><!-- /header -->
	<div id="container">