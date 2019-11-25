<?php 

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
