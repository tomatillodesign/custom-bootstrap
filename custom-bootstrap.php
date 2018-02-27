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
function clb_enqueue_custom_scripts_styles() {

	wp_register_script( 'clbcustomjs' , plugins_url( '/js/clb-custom-bootstrap.js',  __FILE__), array( 'jquery' ), '4.0.0', true );
	wp_register_style( 'clbcustomcss' , plugins_url( '/css/clb-custom-bootstrap.css',  __FILE__), '' , '4.0.0', 'all' );

	wp_enqueue_script( 'clbcustomjs' );
	wp_enqueue_style( 'clbcustomcss' );

	wp_enqueue_style( 'dashicons' );

}
add_action( 'wp_enqueue_scripts',  __NAMESPACE__ . '\\clb_enqueue_custom_scripts_styles' );





/////////// COLLAPSE ///////////////////////////////////////

// Add Shortcode
function clb_collapse_section( $atts , $content = null ) {
	// Attributes
	$atts = shortcode_atts(
		array(
			'title' => 'Title_Here',
		),
		$atts
	);
	$title =  $atts['title'];
	$slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $title)));
     $output = '<div class="clb-collapse-area"><a class="collapse-section" data-toggle="collapse" href="#' . $slug . '" aria-expanded="false" aria-controls="' . $slug . '"><div class="collapse-button-area">' . $title .'</div></a><div class="collapse" id="' . $slug . '"><div class="collapse-text">' . $content . '</div></div></div>';
	return $output;
}
add_shortcode( 'collapse', __NAMESPACE__ . '\\clb_collapse_section' );




/////////// NAV TABS ///////////////////////////////////////


function clb_tabgroup_shortcode( $atts, $content = null ) {
	// Extract and parse attributes
	extract( shortcode_atts( array(), $atts ) );
	preg_match_all( '/tab title="([^\"]+)"/i', $content, $matches, PREG_OFFSET_CAPTURE );
	$tab_titles = array();
	if ( isset($matches[1]) ){ $tab_titles = $matches[1]; }
	$output = '';
	if ( count($tab_titles) ){
		$output .= '<div class="clb-nav-tabs-top">';
		$output .= '<ul class="nav nav-tabs" role="tablist">';
			$i = 0;
		foreach( $tab_titles as $tab ){
			$i++;
			if( $i == 1 ) { $active = 'active'; }
			$output .= '<li class="nav-item"><a class="nav-link ' . $active . '" data-toggle="tab" role="tab" href="#' . sanitize_title( $tab[0] ) .'">' . $tab[0] . '</a></li>';
			$active = NULL;
		}
		$output .= '</ul></div><div class="tab-content">';
		// foreach( $tab_titles as $tab ){
		//
		// 	$output .= '<div class="tab-pane fade" id="' . $tab[0] . '" role="tabpanel">'. do_shortcode( '[tab]' . $content . '[/tab]' ) . '</div>';
		//
		// }
		//$output .= do_shortcode( $content );
		$output .= do_shortcode( $content );
		$output .= '</div>';
	} else {
		$output .= do_shortcode( $content );
	}
	// Return output
	return $output;
}
add_shortcode( 'tabs', __NAMESPACE__ . '\\clb_tabgroup_shortcode' );


function clb_tab_shortcode( $atts, $content = null ) {
	$atts = shortcode_atts(
		array(
			'title' => 'First_Tab',
		),
		$atts
	);
	$title = $atts[title];
	$slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $title)));
	// Return output
	$output = '<div class="tab-pane fade" id="' . $slug . '" role="tabpanel">' . do_shortcode( $content ) . '</div>';
	return $output;
}
add_shortcode( 'tab', __NAMESPACE__ . '\\clb_tab_shortcode' );
