<?php 

/************* EXCERPT ********************/

//EXCERPT LENGTH
function custom_excerpt_length( $length ) {
  return 8;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

/*
 * Replaces the excerpt "more" text by a link
 */

function new_excerpt_more($more) {
	   global $post;
  //return '... <a class="moretag" href="'. get_permalink($post->ID) . '">Read More</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');


