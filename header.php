<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<html <?php language_attributes(); ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title(' | ', true, 'right'); ?><?php bloginfo('name'); ?></title>
	<meta name="description" content="">
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo('name'); ?>">

	<meta property="og:title" content="<?php echo get_the_title(); ?>">
	<meta property="og:type" content="company" />
	<meta property="og:description" content="">
	<meta property="og:image" content="<?php bloginfo('template_directory'); ?>/images/og-1200x630.jpg">
	<meta property="og:url" content="<?php echo get_permalink( $post->ID ); ?>">
	<meta name="twitter:card" content="summary_large_image">
	<meta property="og:site_name" content="<?php bloginfo('name'); ?>">
	<meta name="twitter:image:alt" content="">

	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico" />
	
	<!--[if lt IE 9]>
	<script src="<?php bloginfo('template_directory'); ?>/js/html5shiv.js"></script>
	<![endif]-->
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!--[if lt IE 7]>
	<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
 <![endif]-->
<header class="header">
	<a href="<?php echo home_url() ?>/" class="header__logo" title="<?php bloginfo( 'name' ) ?>" rel="home"><?php bloginfo( 'name' ) ?></a>
	<nav role="navigation" class="">
		<?php wp_nav_menu( array( 'theme_location' => 'header__nav', 'container' => '' ) ); ?>
	</nav>
</header>
