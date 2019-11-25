<?php

/************* CLEANUP WORDPRESS ********************/

function clean_header(){
	wp_deregister_script( 'comment-reply' );
}
add_action('init','clean_header');

remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
