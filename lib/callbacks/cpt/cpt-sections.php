<?php
// Register Custom Post Type Section
// Post Type Key: Section

$labels = array(
	'name' => __( 'Section', 'Post Type General Name', 'sage' ),
	'singular_name' => __( 'Section', 'Post Type Singular Name', 'sage' ),
	'menu_name' => __( 'Sections', 'sage' ),
	'name_admin_bar' => __( 'Section', 'sage' ),
	'archives' => __( 'Section Archives', 'sage' ),
	'attributes' => __( 'Section Attributes', 'sage' ),
	'parent_item_colon' => __( 'Parent Section:', 'sage' ),
	'all_items' => __( 'All Section', 'sage' ),
	'add_new_item' => __( 'Add New Section', 'sage' ),
	'add_new' => __( 'Add New', 'sage' ),
	'new_item' => __( 'New Section', 'sage' ),
	'edit_item' => __( 'Edit Section', 'sage' ),
	'update_item' => __( 'Update Section', 'sage' ),
	'view_item' => __( 'View Section', 'sage' ),
	'view_items' => __( 'View Section', 'sage' ),
	'search_items' => __( 'Search Section', 'sage' ),
	'not_found' => __( 'Not found', 'sage' ),
	'not_found_in_trash' => __( 'Not found in Trash', 'sage' ),
	'featured_image' => __( 'Featured Image', 'sage' ),
	'set_featured_image' => __( 'Set featured image', 'sage' ),
	'remove_featured_image' => __( 'Remove featured image', 'sage' ),
	'use_featured_image' => __( 'Use as featured image', 'sage' ),
	'insert_into_item' => __( 'Insert into Section', 'sage' ),
	'uploaded_to_this_item' => __( 'Uploaded to this Section', 'sage' ),
	'items_list' => __( 'Section list', 'sage' ),
	'items_list_navigation' => __( 'Section list navigation', 'sage' ),
	'filter_items_list' => __( 'Filter Section list', 'sage' ),
);
$args = array(
	'label' => __( 'Section', 'sage' ),
	'description' => __( 'Section Members', 'sage' ),
	'labels' => $labels,
	'menu_icon' => 'dashicons-list-view',
	'supports' => array('title',),
	'taxonomies' => array('sectionpage'),
	'public' => false,
	'show_ui' => true,
	'show_in_menu' => true,
	'menu_position' => 5,
	'show_in_admin_bar' => true,
	'show_in_nav_menus' => false,
	'can_export' => true,
	'has_archive' => false,
	'hierarchical' => false,
	'exclude_from_search' => true,
	'show_in_rest' => true,
	'publicly_queryable' => false,
	'capability_type' => 'post',
);
register_post_type( 'sections', $args );