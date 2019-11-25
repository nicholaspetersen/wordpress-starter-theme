<?php

/************* THUMBNAILS/POST IMAGES ********************/

// Add post thumbnail functionality to new post page.
add_theme_support( 'post-thumbnails' );

//Custom post thumbnail sizes
add_image_size( 'tiny', 75, 75, false );
add_image_size( 'custom-small', 450, 450, false ); 
add_image_size( 'custom-medium', 800, 800, false ); 
add_image_size( 'custom-large', 1280, 1280, false ); 
add_image_size( 'custom-extralarge', 1920, 1920, false ); 

