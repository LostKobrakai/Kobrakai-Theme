<?php
add_action('init', 'register_main_menu');
 
function register_main_menu() {
	register_nav_menu('main_menu', __('Main Menu'));
}
?>