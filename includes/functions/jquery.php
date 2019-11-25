<?php

/************* jquery ********************/

function remove_jquery() {
	wp_deregister_script('jquery'); 
	wp_register_script('jquery', '', '', '', true);
}
add_action( 'wp_enqueue_scripts', 'remove_jquery' );
