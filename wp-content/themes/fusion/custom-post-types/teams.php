<?php
// Register Custom Post Type
function fusion_cpt_team() {

	$labels = array(
		'name'                  => _x( 'Teams', 'Post Type General Name', 'fusion' ),
		'singular_name'         => _x( 'Team', 'Post Type Singular Name', 'fusion' ),
		'menu_name'             => __( 'Teams', 'fusion' ),
		'name_admin_bar'        => __( 'Team', 'fusion' ),
		'archives'              => __( 'Team Archives', 'fusion' ),
		'attributes'            => __( 'Team Attributes', 'fusion' ),
		'parent_item_colon'     => __( 'Parent Team:', 'fusion' ),
		'all_items'             => __( 'All Teams', 'fusion' ),
		'add_new_item'          => __( 'Add New Team', 'fusion' ),
		'add_new'               => __( 'Add New', 'fusion' ),
		'new_item'              => __( 'New Team', 'fusion' ),
		'edit_item'             => __( 'Edit Team', 'fusion' ),
		'update_item'           => __( 'Update Team', 'fusion' ),
		'view_item'             => __( 'View Team', 'fusion' ),
		'view_items'            => __( 'View Teams', 'fusion' ),
		'search_items'          => __( 'Search Team', 'fusion' ),
		'not_found'             => __( 'Not found', 'fusion' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'fusion' ),
		'featured_image'        => __( 'Featured Image', 'fusion' ),
		'set_featured_image'    => __( 'Set featured image', 'fusion' ),
		'remove_featured_image' => __( 'Remove featured image', 'fusion' ),
		'use_featured_image'    => __( 'Use as featured image', 'fusion' ),
		'insert_into_item'      => __( 'Insert into Team', 'fusion' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Team', 'fusion' ),
		'items_list'            => __( 'Teams list', 'fusion' ),
		'items_list_navigation' => __( 'Teams list navigation', 'fusion' ),
		'filter_items_list'     => __( 'Filter Teams list', 'fusion' ),
	);
	$args = array(
		'label'                 => __( 'Team', 'fusion' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'team', $args );

}
add_action( 'init', 'fusion_cpt_team', 0 );
?>