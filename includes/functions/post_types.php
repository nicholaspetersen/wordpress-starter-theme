<?php 

/************* CUSTOM POST TYPES (CPT) ******************/

function cptui_register_my_cpts() {

	/**
	 * Post Type: Team.
	 */

	$labels = array(
		'name' => __( 'Team', '' ),
		'singular_name' => __( 'Team', '' ),
	);

	$args = array(
		'label' => __( 'Team', '' ),
		'labels' => $labels,
		'description' => '',
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_rest' => false,
		'rest_base' => '',
		'has_archive' => false,
		'show_in_menu' => true,
		'exclude_from_search' => false,
		'capability_type' => 'post',
		'map_meta_cap' => true,
		'hierarchical' => false,
		'rewrite' => array( 'slug' => 'team', 'with_front' => true ),
		'query_var' => true,
		'supports' => array( 'title', 'editor', 'thumbnail' ),
	);

	register_post_type( 'team', $args );

}

add_action( 'init', 'cptui_register_my_cpts' );
