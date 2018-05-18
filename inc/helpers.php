<?php
/**
 * Tabula Rasa Helpers
 *
 * @package Tabula_Rasa
 */

/**
 * Print Pre: outputs a pre-styled block to make debug prints more easy to read.
 *
 * @param string $stuff_to_print Text to be wrapped in styled pre-tag.
 */
function print_pre( $stuff_to_print ) {
	echo '<pre style="
		background:#ededed;
		color:#444;
		border:1px solid #ccc;
		border-radius:10px;
		font-size:10px;
		padding:10px;
		margin:10px;
	">';
	print( esc_attr( $stuff_to_print ) );
	echo '</pre>';
}

// Disable Admin Bar
if ( current_user_can('delete_plugins') ) {
    // Disable the Admin Bar By Default
    add_filter( 'show_admin_bar', '__return_false' );
    // Remove the Admin Bar preference in user profile to remove temptation...
    remove_action( 'personal_options', '_admin_bar_preferences' );
}

// Excerpt on pages
add_post_type_support( 'page', 'excerpt' );


// Google API key
function my_acf_init() {
    acf_update_setting('google_api_key', 'AIzaSyAUh4otABlZG8K52orgNDOibXX-1-c5YYY');
}
add_action('acf/init', 'my_acf_init');