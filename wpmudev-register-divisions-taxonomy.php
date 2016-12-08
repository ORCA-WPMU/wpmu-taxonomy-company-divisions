<?php
/**
* Plugin Name: WPMU DEV Register Division Taxonomy
* Plugin URI: https://github.com/rachelmccollin/wpmu-taxonomy-company-divisions
* Description: Registers a 'division' taxomy for use in your copmany website.
* Version: 1.0
* Author: Rachel McCollin
* Author URI: http://rachelmccollin.co.uk
*/

function wpmudev_register_taxonomy() {

  $labels = array(
		'name'              => __( 'Divisions' ),
		'singular_name'     => __( 'Division' ),
		'search_items'      => __( 'Search Divisions' ),
		'all_items'         => __( 'All Divisions' ),
		'edit_item'         => __( 'Edit Divisions' ),
		'update_item'       => __( 'Update Divisions' ),
		'add_new_item'      => __( 'Add New Division' ),
		'new_item_name'     => __( 'New Division Name' ),
		'menu_name'         => __( 'Divisions' ),
	);
	
	$args = array(
		'labels' => $labels,
		'hierarchical' => true,
		'sort' => true,
		'args' => array( 'orderby' => 'term_order' ),
		'show_admin_column' => true
	);
	
	register_taxonomy( 'division', array( 'post', 'page' ), $args);
	
}
add_action( 'init', 'wpmudev_register_taxonomy' );

