<?php
/************* ADD STYLES/SCRIPTS ********************/

/**
 * Enqueue scripts and styles.
 */
function lessis_scripts() {
	//wp_enqueue_style( 'hooch-style', get_template_directory_uri() . '/style.min.css' );
	wp_enqueue_style( 'lessis-style', get_template_directory_uri() . '/style.css' );

	//wp_enqueue_script( 'kingsway-js', get_template_directory_uri() . '/js/dist/scripts.min.js', array('jquery'), '1.0.0', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'lessis_scripts' );


