<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Kobrakai &mdash; Benjamin Milde</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/reset.css?v=1.0">
  <link href='http://fonts.googleapis.com/css?family=Vollkorn:400italic,700italic,400,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>?v=0.1">
  <?php wp_head(); ?>
  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>
<body <?php body_class(); ?>>
	<aside>
		<a href="<?php bloginfo( 'url' ) ?>/" title="<?php bloginfo( 'name' ) ?>" rel="home">
			<img src="<?php bloginfo('template_directory'); ?>/img/logo.gif" alt="Black Logo" />
			<h1>Kobrakai</h1>
		</a>
		<nav>
			<?php
			$args=array(
			  'orderby' => 'name',
			  'order' => 'ASC'
			  );
			$categories=get_categories($args);
			  foreach($categories as $category) { 
			  	echo '<a href="'.get_category_link($category->term_id).'" title="'.$category->name.'">'.$category->name.'</a>';
			  	
			    //echo '<p>Category: <a href="'.get_category_link($category->term_id).'" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '>' . $category->name.'</a> </p> ';
			    //echo '<p> Description:'. $category->description . '</p>';
			    //echo '<p> Post Count: '. $category->count . '</p>';  
			    
			    } 
			?>
		</nav>
	</aside>
	<div class="wrapper">
		<?php while ( have_posts() ) : the_post() ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php if ( has_post_thumbnail() ) {
				the_post_thumbnail('full');
			} ?>
			<span class="copyright"><?php the_title(); ?> &mdash; <span class="author"><?php the_author(); ?></span></span>
		</article>
		<?php endwhile; ?>
	</div>
	<footer>
		<img src="<?php bloginfo('template_directory'); ?>/img/last.gif" style="display: block; margin: 0 auto; width: 50px; opacity: 0.3" />
		<a href="#">Impressum</a>
	</footer>
</body>
</html>
		; bloginfo(