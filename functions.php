<?php

/************* GET STARTED ********************/

function lessis_starter() {

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	// Set the default content width.
	//$GLOBALS['content_width'] = 525;

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'audio',
	) );

	// Add theme support for Custom Logo.
add_theme_support( 'custom-logo', array(
		'width'       => 50,
		'height'      => 50,
		'flex-width'  => true,
	) );

	//Allow editor style.
	add_editor_style( get_stylesheet_directory_uri() . '/css/editor-style.css' );

	
}
add_action( 'after_setup_theme', 'lessis_starter' );

require_once( __DIR__ . '/includes/functions/svg.php');  
require_once( __DIR__ . '/includes/functions/wp-cleanup-header.php');  
require_once( __DIR__ . '/includes/functions/jquery.php');  
require_once( __DIR__ . '/includes/functions/wp-login.php');  
require_once( __DIR__ . '/includes/functions/sidebars.php');  
require_once( __DIR__ . '/includes/functions/post-thumbnails.php');  
require_once( __DIR__ . '/includes/functions/body-classes.php');  
require_once( __DIR__ . '/includes/functions/excerpt.php');  
require_once( __DIR__ . '/includes/functions/menus.php');  
require_once( __DIR__ . '/includes/functions/img-cleanup.php');  
require_once( __DIR__ . '/includes/functions/shortcodes.php');  
require_once( __DIR__ . '/includes/functions/acf-flexible-content-title.php');  
require_once( __DIR__ . '/includes/functions/acf-options-page.php');  
require_once( __DIR__ . '/includes/functions/acf-google-maps-api.php');  
require_once( __DIR__ . '/includes/functions/tinymce-spans.php');  
require_once( __DIR__ . '/includes/functions/wysiwyg.php');  
require_once( __DIR__ . '/includes/functions/styles_scripts.php');  
//require_once( __DIR__ . '/includes/functions/post_types.php');  
//require_once( __DIR__ . '/includes/functions/post_taxonomies.php');  
//require_once( __DIR__ . '/includes/functions/post_acf.php');  
//require_once( __DIR__ . '/includes/functions/podcast/podcast.php');  
require_once( __DIR__ . '/includes/functions/tgm-plugin-function.php');  
require_once( __DIR__ . '/includes/functions/acf-blocks.php');  
