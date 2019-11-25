<?php 

/************* CUSTOM POST TYPES (CPT) ******************/

function cptui_register_my_taxes() {


	/**
	 * Taxonomy: Speaker (Sermons).
	 */

	$labels = array(
		'name' => __( 'Speaker', '' ),
		'singular_name' => __( '', '' ),
	);

	$args = array(
		'label' => __( 'Speaker', '' ),
		'labels' => $labels,
		'public' => true,
		'hierarchical' => 1,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'sermon/speaker', 'with_front' => false, ),
		'show_admin_column' => true,
		'show_in_rest' => false,
		'rest_base' => '',
		'show_in_quick_edit' => true,
	);
	register_taxonomy( 'speaker', array( 'sermons' ), $args );

	/**
	 * Taxonomy: Series (Sermons).
	 */

	$labels = array(
		'name' => __( 'Series', '' ),
		'singular_name' => __( '', '' ),
	);

	$args = array(
		'label' => __( 'Series', '' ),
		'labels' => $labels,
		'public' => true,
		'hierarchical' => 1,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'sermon/series', 'with_front' => false, ),
		'show_admin_column' => true,
		'show_in_rest' => false,
		'rest_base' => '',
		'show_in_quick_edit' => true,
	);
	register_taxonomy( 'series', array( 'sermons' ), $args );

	/**
	 * Taxonomy: Service Type (Sermons).
	 */

	$labels = array(
		'name' => __( 'Service Types', '' ),
		'singular_name' => __( 'Service Type', '' ),
	);

	$args = array(
		'label' => __( 'Service Type', '' ),
		'labels' => $labels,
		'public' => true,
		'hierarchical' => 1,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'sermon/service_type', 'with_front' => false, ),
		'show_admin_column' => true,
		'show_in_rest' => false,
		'rest_base' => '',
		'show_in_quick_edit' => true,
	);
	register_taxonomy( 'service_type', array( 'sermons' ), $args );

		/**
	 * Taxonomy: Topics (Sermons).
	 */

	$labels = array(
		'name' => __( 'Topics', '' ),
		'singular_name' => __( 'Topic', '' ),
	);

	$args = array(
		'label' => __( 'Topics', '' ),
		'labels' => $labels,
		'public' => true,
		'hierarchical' => 1,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'sermon/topic', 'with_front' => false, ),
		'show_admin_column' => true,
		'show_in_rest' => false,
		'rest_base' => '',
		'show_in_quick_edit' => true,
	);
	register_taxonomy( 'topic', array( 'sermons' ), $args );


}

add_action( 'init', 'cptui_register_my_taxes' );
