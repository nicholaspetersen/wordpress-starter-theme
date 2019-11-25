<?php 

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
	if( $text = get_sub_field('section_name') ) {
		$title = '';
		$title .= '' . $text . '';
	}
	
	// return
	return $title;
	
}
add_filter('acf/fields/flexible_content/layout_title', 'my_acf_flexible_content_layout_title', 10, 4);
