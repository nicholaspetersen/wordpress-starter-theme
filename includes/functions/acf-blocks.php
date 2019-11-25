<?php 

/************* CUSTOM POST TYPES (CPT) ******************/

function register_acf_block_types() {

    // register a testimonial block.

    acf_register_block_type(array(
        'name'              => 'hero',
        'title'             => __('Hero'),
        'description'       => __('A custom hero section.'),
        'render_template'   => 'template-parts/blocks/hero/hero.php',
        'category'          => 'layout',
        'icon'              => 'format-image',
        'keywords'          => array( 'hero', 'header', 'image' ),
    ));

    acf_register_block_type(array(
        'name'              => 'advanced-media-text',
        'title'             => __('Advanced Media & Text'),
        'description'       => __('An advanced layout block for media & text.'),
        'render_template'   => 'template-parts/blocks/media-text/media-text.php',
        'category'          => 'layout',
        'icon'              => 'format-image',
        'icon' => '<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M13 17h8v-2h-8v2zM3 19h8V5H3v14zM13 9h8V7h-8v2zm0 4h8v-2h-8v2z"></path></svg>',

        'keywords'          => array( 'hero', 'header', 'image', 'media', 'text', 'layout' ),
    ));
}

// Check if function exists and hook into setup.
if( function_exists('acf_register_block_type') ) {
    add_action('acf/init', 'register_acf_block_types');
}

