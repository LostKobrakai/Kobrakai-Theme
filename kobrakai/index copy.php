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
	<link href='http://fonts.googleapis.com/css?family=Gentium+Book+Basic:400,400italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,800,600,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/reset.css?v=1">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/style.css?v=0.1">
	<!-- Uncomment if you are specifically targeting less enabled mobile browsers
	<link rel="stylesheet" media="handheld" href="css/handheld.css?v=1">  -->
	<!-- !Modernizr - All other JS at bottom 
	<script src="js/modernizr-1.5.min.js"></script>-->
	<?php wp_head(); ?>
</head>
<!-- !Body -->
<body>
	<div id="container">
		<header>
			<hgroup>
				<a href="<?php echo home_url(); ?>" title="<?php bloginfo('name'); ?>">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo.jpg" alt="Signee mB in gebrochener Schrift" />
					<div>
						<h1><?php bloginfo('name'); ?></h1>
						<h2><?php bloginfo('description'); ?></h2>
					</div>
				</a>
			</hgroup><nav>
				<?php wp_nav_menu(array('before' => '&rsaquo; ', 'depth' => 0)); ?>
			</nav><!-- /#nav  -->
		</header><!-- /header -->		
		<section id="main">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="media">
				<?php the_post_thumbnail('large'); ?>
			</div>
			<div class="linkleiste">
				<span class="next"><?php next_post('&larr; %', '', 'yes'); ?></span> &sdot; 
				<span class="head"><?php the_title(); ?></span> &sdot; 
				<span class="head">Kommentare: 2</span> &sdot; 
				<span class="head">Kommentieren</span> &sdot; 
				<span class="past"><?php previous_post('% &rarr;', '', 'yes'); ?></span>
			</div>
<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
		</section><!-- /main -->		
		<footer>
		</footer><!-- /footer -->
	</div><!--!/#container -->
	<!-- !Javascript - at the bottom for fast page loading -->
	<!-- Grab Google CDN's jQuery. fall back to local if necessary -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
	<script>!window.jQuery && document.write('<script src="js/jquery-1.4.2.min.js"><\/script>')</script>
	<!--
	<script src="js/plugins.js?v=1"></script>
	<script src="js/script.js?v=1"></script>
	-->
</body>
</html>