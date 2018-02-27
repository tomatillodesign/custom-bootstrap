<?php

namespace clb_custom_bootstrap;

/*

Contributors: chrisliubeers
Tags: bootstrap, collapse, toggles, modal, modals, nav, nav tabs
Requires at least: 4.7
Tested up to: 4.9.4
Stable tag: 1.0.0
Plugin Name: Custom Bootstrap
Plugin URI: http://www.tomatillodesign.com
Description: Adds a customized version of Bootstrap 4.0 to any WordPress website: Collapse, Modal, Nav Tabs
Author: Chris Liu-Beers
Version: 1.0.0
Author URI: http://www.tomatillodesign.com
License: GPL-2.0+
License URI: http://www.gnu.org/licenses/gpl-2.0.txt

This plugin adds a customized version of Bootstrap to any WordPress website: Collapse, Modal, Nav Tabs

See: https://getbootstrap.com/docs/4.0/components/alerts/

*/

if ( ! defined( 'ABSPATH' ) ) {
				die;
}



/**
* Register and Enqueue Scripts and Styles.
*
* @since 1.0.0
*/
function clb_scripts_styles() {

	wp_register_script( 'clbcustomjs' , plugins_url( '/js/clb-custom-bootstrap.js',  __FILE__), array( 'jquery' ), '4.0.0', true );
	wp_register_style( 'clbcustomcss' , plugins_url( '/css/clb-custom-bootstrap.css',  __FILE__), '' , '4.0.0', 'all' );

	wp_enqueue_script( 'clbcustomjs' );
	wp_enqueue_style( 'clbcustomcss' );

}
add_action( 'wp_enqueue_scripts',  'clb_scripts_styles' );
