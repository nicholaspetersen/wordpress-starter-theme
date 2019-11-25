<?php

/************* CLEANUP IMG ********************/
//Remove p tags around img

function filter_ptags_on_images($content){
   return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
}
add_filter('the_content', 'filter_ptags_on_images');


function img_unautop($pee) {
	$pee = preg_replace('/<p>\\s*?(<a .*?><img.*?><\\/a>|<img.*?>)?\\s*<\\/p>/s', '$1', $pee);
	return $pee;
}
add_filter( 'acf_the_content', 'img_unautop', 30 );

