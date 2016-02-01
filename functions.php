<?php

/************* GET STARTED ********************/

function lessis_starter() {
	//Allow editor style.
	add_editor_style( get_stylesheet_directory_uri() . '/library/css/editor-style.css' );
}
add_action( 'after_setup_theme', 'lessis_starter' );


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




/************* THUMBNAILS ********************/

// Add post thumbnail functionality to new post page.
add_theme_support( 'post-thumbnails' );
add_image_size( 'custom-size', 375, 375, true ); // Hard Crop Mode

function clean_header(){
	wp_deregister_script( 'comment-reply' );
         }
add_action('init','clean_header');


/************* DON'T REMEMBER WHAT THIS IS ********************/

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


/************* REMOVE STUFF I DON'T WANT ********************/

//Remove jquery
add_action( 'wp_enqueue_scripts', 'remove_jquery' );
function remove_jquery() {
		wp_deregister_script('jquery'); 
		wp_register_script('jquery', '', '', '', true);
}


?>


