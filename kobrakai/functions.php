<?php
//Remove Width & Heights
			/*	function remove_wp_width_height($html){
				return preg_replace('/(width|height)=\"\d*\"\s/', '',$html);
				}
				add_filter( 'post_thumbnail_html', 'remove_wp_width_height', 10,1); */

//Register Custom Menu				
				add_action('init', 'register_main_menu');
				 
				function register_main_menu() {
					register_nav_menu('main_menu', __('Main Menu'));
				}
				
/*
 * Modify home query to only show 3 posts
 *
 * @param WP_Query $query
 * @return WP_Query
 */
				function limit_posts( $query = false ) {
				
					// Bail if not home, not a query, not main query, or no featured posts
					if ( ! is_home() || ! is_a( $query, 'WP_Query' ) || ! $query->is_main_query() )
						return;
				
					// Home only gets 3 posts
					$query->set( 'posts_per_page', 1 );
				}
				add_action( 'pre_get_posts', 'limit_posts' );
				
//Last Menu Link
				function nav_menu_classes( $items ) {
				    // Find the last menu item and append
				    //  custom class before 'menu-item' class
				    $pos = strrpos($items, 'class="menu-item', -1);
				    $items=substr_replace($items, 'menu-item-last ', $pos+7, 0);
				 
				    // Find first menu item and do same thing
				    $pos = strpos($items, 'class="menu-item');
				    $items=substr_replace($items, 'menu-item-first ', $pos+7, 0);
				 
				    return $items;
				}
				add_filter( 'wp_nav_menu_items', 'nav_menu_classes' );


?>