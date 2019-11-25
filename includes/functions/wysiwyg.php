<?php

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
			'title' => 'small (p tag)',
			'block' => 'p',
			'classes' => 'small',
		),
		array(
			'title' => 'large (p tag)',
			'block' => 'p',
			'classes' => 'large',
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
					'title' => 'Fancy Button',
					'selector' => 'a',
					'classes' => 'btn--fancy',
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