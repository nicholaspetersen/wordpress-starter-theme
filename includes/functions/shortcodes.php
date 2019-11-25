<?php

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

function responsiveVideo($atts, $content = null) {
  return '<div class="responsive-video">' . $content . '</div>';
}
add_shortcode('responsiveVideo', 'responsiveVideo');