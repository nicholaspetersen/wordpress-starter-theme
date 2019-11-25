<?php 

/************* LOGIN ********************/

// Add custom image for the Login page.
function my_login_logo() { ?>
	<style type="text/css">
		body.login div#login h1 a {
			background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/login-logo.png);
			padding-bottom: 30px;
			margin: 0 auto;
			width: 200px;
			background-size: 200px 105px;
		}
	</style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );
