<?php

	$labels = array(
		'name' => __( 'Alerts', 'Post Type General Name', 'sage' ),
		'singular_name' => __( 'Alert', 'Post Type Singular Name', 'sage' ),
		'menu_name' => __( 'Alerts', 'sage' ),
		'name_admin_bar' => __( 'Alert', 'sage' ),
		'archives' => __( 'Alert Archives', 'sage' ),
		'attributes' => __( 'Alert Attributes', 'sage' ),
		'parent_item_colon' => __( 'Parent Alert:', 'sage' ),
		'all_items' => __( 'All Alerts', 'sage' ),
		'add_new_item' => __( 'Add New Alert', 'sage' ),
		'add_new' => __( 'Add New', 'sage' ),
		'new_item' => __( 'New Alert', 'sage' ),
		'edit_item' => __( 'Edit Alert', 'sage' ),
		'update_item' => __( 'Update Alert', 'sage' ),
		'view_item' => __( 'View Alert', 'sage' ),
		'view_items' => __( 'View Alerts', 'sage' ),
		'search_items' => __( 'Search Alert', 'sage' ),
		'not_found' => __( 'Not found', 'sage' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'sage' ),
		'featured_image' => __( 'Featured Image', 'sage' ),
		'set_featured_image' => __( 'Set featured image', 'sage' ),
		'remove_featured_image' => __( 'Remove featured image', 'sage' ),
		'use_featured_image' => __( 'Use as featured image', 'sage' ),
		'insert_into_item' => __( 'Insert into Alert', 'sage' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Alert', 'sage' ),
		'items_list' => __( 'Alerts list', 'sage' ),
		'items_list_navigation' => __( 'Alerts list navigation', 'sage' ),
		'filter_items_list' => __( 'Filter Alerts list', 'sage' ),
	);
	$args = array(
		'label' => __( 'Alert', 'sage' ),
		'description' => __( 'Alerts', 'sage' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-editor-quote',
		'supports' => array('title'),
		'taxonomies' => array(''),
		'public' => false,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 9,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => false,
		'can_export' => true,
		'hierarchical' => true,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'cpt_alerts', $args );