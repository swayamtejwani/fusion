<?php
// Register Custom Post Type
function fusion_cpt_cients() {

	$labels = array(
		'name'                  => _x( 'Clients', 'Post Type General Name', 'fusion' ),
		'singular_name'         => _x( 'Client', 'Post Type Singular Name', 'fusion' ),
		'menu_name'             => __( 'Clients', 'fusion' ),
		'name_admin_bar'        => __( 'Post Type', 'fusion' ),
		'archives'              => __( 'Client Archives', 'fusion' ),
		'attributes'            => __( 'Clients Attributes', 'fusion' ),
		'parent_item_colon'     => __( 'Parent Client:', 'fusion' ),
		'all_items'             => __( 'All Clients', 'fusion' ),
		'add_new_item'          => __( 'Add New Client', 'fusion' ),
		'add_new'               => __( 'Add New', 'fusion' ),
		'new_item'              => __( 'New Client', 'fusion' ),
		'edit_item'             => __( 'Edit Client', 'fusion' ),
		'update_item'           => __( 'Update Client', 'fusion' ),
		'view_item'             => __( 'View Client', 'fusion' ),
		'view_items'            => __( 'View Clients', 'fusion' ),
		'search_items'          => __( 'Search Client', 'fusion' ),
		'not_found'             => __( 'Not found', 'fusion' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'fusion' ),
		'featured_image'        => __( 'Featured Image', 'fusion' ),
		'set_featured_image'    => __( 'Set featured image', 'fusion' ),
		'remove_featured_image' => __( 'Remove featured image', 'fusion' ),
		'use_featured_image'    => __( 'Use as featured image', 'fusion' ),
		'insert_into_item'      => __( 'Insert into Client', 'fusion' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Client', 'fusion' ),
		'items_list'            => __( 'Clients list', 'fusion' ),
		'items_list_navigation' => __( 'Clients list navigation', 'fusion' ),
		'filter_items_list'     => __( 'Filter Clients list', 'fusion' ),
	);
	$args = array(
		'label'                 => __( 'Client', 'fusion' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'client', $args );

}
add_action( 'init', 'fusion_cpt_cients', 0 );
?>