<?php
function register_my_menu() {
register_nav_menus(
array( 'main-menu' => __( 'Main Menu'),'footer-menu' => __( 'Footer Menu'),

)
);
}
add_action( 'init', 'register_my_menu' );

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

// Add post thumbnail functionality to new post page.
add_theme_support( 'post-thumbnails' );

// Add custom image for the Login page.
function custom_admin_logo() {
echo '		<style type="text/css">#header-logo { background-image: url('.get_bloginfo('template_directory').'images/adminlogo.png) !important; }</style>';
}
add_action('admin_head', 'custom_admin_logo');


?>