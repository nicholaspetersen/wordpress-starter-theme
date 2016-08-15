<?php

/************* GET STARTED ********************/

function lessis_starter() {
	//Allow editor style.
	add_editor_style( get_stylesheet_directory_uri() . '/library/css/editor-style.css' );
}
add_action( 'after_setup_theme', 'lessis_starter' );


/************* CLEANUP WORDPRESS ********************/

function clean_header(){
	wp_deregister_script( 'comment-reply' );
}
add_action('init','clean_header');

//Remove jquery
add_action( 'wp_enqueue_scripts', 'remove_jquery' );
function remove_jquery() {
		wp_deregister_script('jquery'); 
		wp_register_script('jquery', '', '', '', true);
}


/************* LOGIN ********************/

// Add custom image for the Login page.
function my_login_logo() { ?>
	<style type="text/css">
		body.login div#login h1 a {
			background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/login-logo.png);
			padding-bottom: 30px;
			margin: 0 auto;
			width: 200px;
			background-size: 200px 105px;
		}
	</style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );


/************* MENUS ********************/

function register_my_menu() {
	register_nav_menus(
		array( 
			'main-menu' => __( 'Main Menu'),
			'footer-menu' => __( 'Footer Menu'),
		)
	);
}
add_action( 'init', 'register_my_menu' );


/************* SIDEBARS ********************/

if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'name' => 'Sidebar',
		'before_widget' => '<div class="block %1$s %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
));
	
if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'name' => 'Sidebar2',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => '',
));
	
if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'name' => 'Sidebar3',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => '',
));


/************* THUMBNAILS/POST IMAGES ********************/

// Add post thumbnail functionality to new post page.
add_theme_support( 'post-thumbnails' );
add_image_size( 'custom-size', 375, 375, true ); // Hard Crop Mode


/************* BODY CLASSES ******************/

//Add page slug as body class. also include the page parent.
function my_body_classes($classes, $class='') {
	global $wp_query;
	$post_id = $wp_query->post->ID;
	if(is_page($post_id )){
		$page = get_page($post_id);
		//check for parent
		if($page->post_parent>0){
			$parent = get_page($page->post_parent);
			$classes[] = 'page-'.sanitize_title($parent->post_title);
		}
		$classes[] = 'page-'.sanitize_title($page->post_title);
	}
	return $classes;// return the $classes array
}
add_filter('body_class','my_body_classes');


/************* EXCERPT ********************/
//EXCERPT LENGTH
function custom_excerpt_length( $length ) {
  return 50;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

/*
 * Replaces the excerpt "more" text by a link
 */

function new_excerpt_more($more) {
	   global $post;
  return '... <a class="moretag" href="'. get_permalink($post->ID) . '">Read More</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');


/************* CLEANUP IMG ********************/
/*
 * Remove p tags around img
 */

function filter_ptags_on_images($content){
   return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
}
add_filter('the_content', 'filter_ptags_on_images');


function img_unautop($pee) {
	$pee = preg_replace('/<p>\\s*?(<a .*?><img.*?><\\/a>|<img.*?>)?\\s*<\\/p>/s', '$1', $pee);
	return $pee;
}
add_filter( 'acf_the_content', 'img_unautop', 30 );


/************* SHORTCODES ********************/

//Button Shortcode
function button($atts, $content = null) {
  extract( shortcode_atts( array(
	'url' => '#',
	'color' => ''
  ), $atts ) );
  return '<a href="'.$url.'" class="btn btn-'.$color.'"><span>' . do_shortcode($content) . '</span></a>';
}
add_shortcode('button', 'button');


/************* FLEXIBLE CONTENT TITLE ********************/

function my_acf_flexible_content_layout_title( $title, $field, $layout, $i ) {
	// remove layout title from text
	//$title = '';
	
	// load sub field image
	// note you may need to add extra CSS to the page t style these elements
	if( $image = get_sub_field('image') ) {	
		$title .= '<div class="thumbnail"><img src="' . $image['sizes']['thumbnail'] . '" height="36px" /></div>';
	}	
	
	// load text sub field
	if( $text = get_sub_field('section_label') ) {
		$title = '';
		$title .= '' . $text . '';
	}
	
	// return
	return $title;
	
}
add_filter('acf/fields/flexible_content/layout_title', 'my_acf_flexible_content_layout_title', 10, 4);


/************* AFC OPTIONS PAGE ********************/
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();
}

/************* CUSTOM WYSIWYG EDITOR ********************/

//Add Custom Colors
function my_mce4_options($init) {
  $default_colours = '"2b2b2b", "Black",
					  "ffffff", "White",
					  "f7f7f7", "Lighter Grey",
					  "a7a9ac", "Grey",
					  "7f7f7f", "Dark Grey",
					  "52ade0", "Blue",
					  "e64b3b", "Red",
					  "8ec958", "Green",
					  "f8b413", "Yellow"';

  $custom_colours =  '"000000", "Rich Black",
					  "ffffff", "White"';

  // build colour grid default+custom colors
  $init['textcolor_map'] = '['.$default_colours.','.$custom_colours.']';

  // enable 6th row for custom colours in grid
  $init['textcolor_rows'] = 6;

  return $init;
}
add_filter('tiny_mce_before_init', 'my_mce4_options');


//Add the 'Formats' button
function fb_mce_editor_buttons( $buttons ) {
	array_unshift( $buttons, 'styleselect' );
	return $buttons;
}
add_filter( 'mce_buttons_2', 'fb_mce_editor_buttons' );

//Add styles/classes to the "Styles" drop-down
add_filter( 'tiny_mce_before_init', 'fb_mce_before_init' );

function fb_mce_before_init( $settings ) {

	$style_formats = array(
		// Each array child is a format with it's own settings
		
		array(
			'title' => 'h1 (p tag)',
			'block' => 'p',
			'classes' => 'h1',
		),
		array(
			'title' => 'h2 (p tag)',
			'block' => 'p',
			'classes' => 'h2',
		),
		array(
			'title' => 'h3 (p tag)',
			'block' => 'p',
			'classes' => 'h3',
		),
		array(
			'title' => 'h4 (p tag)',
			'block' => 'p',
			'classes' => 'h4',
		),
		array(
			'title' => 'h5 (p tag)',
			'block' => 'p',
			'classes' => 'h5',
		),
		array(
			'title' => 'h6 (p tag)',
			'block' => 'p',
			'classes' => 'h6',
		),
		array(
			'title' => 'Buttons',
				'items' => array(
				array(
					'title' => 'Basic Button',
					'selector' => 'a',
					'classes' => 'btn',
				),
				array(
					'title' => 'Border Button',
					'selector' => 'a',
					'classes' => 'btn-border',
				),
				array(
					'title' => 'Small Button',
					'selector' => 'a',
					'classes' => 'btn-small',
				),
				array(
					'title' => 'Big Button',
					'selector' => 'a',
					'classes' => 'btn-big',
				),
				array(
					'title' => 'Wide Button',
					'selector' => 'a',
					'classes' => 'btn-wide',
				),
				array(
					'title' => 'Grey Button',
					'selector' => 'a',
					'classes' => 'btn-grey',
				)
			)
		),
		array(
			'title' => 'Popup Video',
			'block' => 'a',
			'classes' => 'lightbox',
		)
	);

	$settings['style_formats'] = json_encode( $style_formats );

	return $settings;
}

