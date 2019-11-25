<?php 

/************* GOOGLE MAPS API for ACF ********************/

function my_acf_init() {
	acf_update_setting('google_api_key', 'AIzaSyDrl7jvs2sSW-IKllVsm4v38Wdn_twaB1M');
}

add_action('acf/init', 'my_acf_init');
