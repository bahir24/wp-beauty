<?php
/*
Plugin Name: Bootstrap and Font Awesome by HocWP Team
Plugin URI: http://hocwp.net/project/
Description: Bootstrap and Font Awesome by HocWP Team is a plugin that allows to load Twitter Bootstrap and Font Awesome on your WordPress site.
Author: HocWP Team
Version: 2.0.0
Author URI: http://hocwp.net/
Text Domain: hocwp-tbfa
Domain Path: /languages/
*/
define( 'HOCWP_TBFA_FILE', __FILE__ );
define( 'HOCWP_TBFA_PATH', dirname( HOCWP_TBFA_FILE ) );
define( 'HOCWP_TBFA_URL', plugins_url( '', HOCWP_TBFA_FILE ) );

function hocwp_tbfa_wp_enqueue_scripts_action() {
	wp_enqueue_style( 'font-awesome-style', HOCWP_TBFA_URL . '/lib/font-awesome/css/font-awesome.min.css' );
	wp_enqueue_style( 'bootstrap-style', HOCWP_TBFA_URL . '/lib/bootstrap/css/bootstrap.min.css' );

	wp_enqueue_script( 'bootstrap', HOCWP_TBFA_URL . '/lib/bootstrap/js/bootstrap.min.js', array( 'jquery' ), false, true );
}

add_action( 'wp_enqueue_scripts', 'hocwp_tbfa_wp_enqueue_scripts_action' );