<?php get_header(); ?>		
		<section id="main">
<?php 
if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article>
	<div class="images">
		<?php 
             $args = array(
			   'post_type' => 'attachment',
			   'numberposts' => -1,
			   'post_status' => null,
			   'post_parent' => $post->ID
			  );
			
			  $attachments = get_posts( $args );
		     if ( $attachments ) {
		        foreach ( $attachments as $attachment ) {
		        	$src = wp_get_attachment_image_src( $attachment->ID, 'full' );
		        	echo '<a href="'.$src[0].'" rel="gallery" />';
		           echo wp_get_attachment_image( $attachment->ID, 'thumbnail' );
		           	echo '</a>';
		          }
		     } 
		?>
	</div>
	<div class="content_wrapper">
		<h2>
			<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>">
				<?php the_title(); ?>
			</a>
		</h2>, 
		<h3>
			<?php the_time('j. F Y'); ?>
		</h3> 
		<span><?php _e('Autor: '); the_author(); ?> &sdot; 
				<?php _e('Kategorie: '); the_category(', '); ?>
					<?php if(has_tag()) : ?> &sdot; 
					<?php _e('Tags: '); the_tags('', ', '); endif; ?> &sdot; 
						<?php if(comments_open()) : if(have_comments()) : ?>
						<?php comments_number(); _e(' Kommentar(e)') ?>
						<?php else : _e('Keine Kommentare'); endif; else : _e(' Kommentare deaktiviert'); endif;?></span>
		<div class="content">
			<?php the_content(); ?>
		</div>
	</div>
</article>
<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
<div class="pagination"><?php posts_nav_link(' &#124; ','&larr;&nbsp;Neuer','&Auml;lter&nbsp;&rarr;'); ?></div>
		</section><!-- /main -->		
<?php get_footer(); ?>
