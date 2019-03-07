<?php

// Register Custom Post Type
function custom_post_type() {

	$labels = array(
		'name'                  => _x( 'Entrenador', 'Post Type General Name', 'gymclub' ),
		'singular_name'         => _x( 'Entrenador', 'Post Type Singular Name', 'gymclub' ),
		'menu_name'             => __( 'Entrenadores', 'gymclub' ),
		'name_admin_bar'        => __( 'Entrenador', 'gymclub' ),
		'archives'              => __( 'Item Archives', 'gymclub' ),
		'attributes'            => __( 'Item Attributes', 'gymclub' ),
		'parent_item_colon'     => __( 'Parent Item:', 'gymclub' ),
		'all_items'             => __( 'Todos los entrenadores', 'gymclub' ),
		'add_new_item'          => __( 'Agregar nuevo entrenador', 'gymclub' ),
		'add_new'               => __( 'Agregar nuevo entrenador', 'gymclub' ),
		'new_item'              => __( 'New Item', 'gymclub' ),
		'edit_item'             => __( 'Edit Item', 'gymclub' ),
		'update_item'           => __( 'Update Item', 'gymclub' ),
		'view_item'             => __( 'View Item', 'gymclub' ),
		'view_items'            => __( 'View Items', 'gymclub' ),
		'search_items'          => __( 'Search Item', 'gymclub' ),
		'not_found'             => __( 'Not found', 'gymclub' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'gymclub' ),
		'featured_image'        => __( 'Featured Image', 'gymclub' ),
		'set_featured_image'    => __( 'Set featured image', 'gymclub' ),
		'remove_featured_image' => __( 'Remove featured image', 'gymclub' ),
		'use_featured_image'    => __( 'Use as featured image', 'gymclub' ),
		'insert_into_item'      => __( 'Insert into item', 'gymclub' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'gymclub' ),
		'items_list'            => __( 'Items list', 'gymclub' ),
		'items_list_navigation' => __( 'Items list navigation', 'gymclub' ),
		'filter_items_list'     => __( 'Filter items list', 'gymclub' ),
	);
	$args = array(
		'label'                 => __( 'Post Type', 'gymclub' ),
		'description'           => __( 'Post Type Description', 'gymclub' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'slug', 'thumbnail') ,
		//'taxonomies'            => array( 'category', 'post_tag' ),
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
	register_post_type( 'Entrenador', $args );

}
add_action( 'init', 'custom_post_type', 0 );


/**
 * taxonomies for entrenador
 */ 

// Register Custom Taxonomy
function especialidad_entrenador() {

	$labels = array(
		'name'                       => _x( 'especialidades', 'Taxonomy General Name', 'gymclub' ),
		'singular_name'              => _x( 'especialidad', 'Taxonomy Singular Name', 'gymclub' ),
		'menu_name'                  => __( 'especialidad', 'gymclub' ),
		'all_items'                  => __( 'All especialidades', 'gymclub' ),
		'parent_item'                => __( 'Parent especialidad', 'gymclub' ),
		'parent_item_colon'          => __( 'Parent especialidad:', 'gymclub' ),
		'new_item_name'              => __( 'New especialidad Name', 'gymclub' ),
		'add_new_item'               => __( 'Add New especialidad', 'gymclub' ),
		'edit_item'                  => __( 'Edit especialidad', 'gymclub' ),
		'update_item'                => __( 'Update especialidad', 'gymclub' ),
		'view_item'                  => __( 'View Item', 'gymclub' ),
		'separate_items_with_commas' => __( 'Separate especialidades with commas', 'gymclub' ),
		'add_or_remove_items'        => __( 'Add or remove especialidades', 'gymclub' ),
		'choose_from_most_used'      => __( 'Choose from the most used especialidades', 'gymclub' ),
		'popular_items'              => __( 'Popular Items', 'gymclub' ),
		'search_items'               => __( 'Search especialidades', 'gymclub' ),
		'not_found'                  => __( 'Not Found', 'gymclub' ),
		'no_terms'                   => __( 'No items', 'gymclub' ),
		'items_list'                 => __( 'Items list', 'gymclub' ),
		'items_list_navigation'      => __( 'Items list navigation', 'gymclub' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		//'show_tagcloud'              => true,
	);
	register_taxonomy( 'especialidad', array( 'Entrenador' ), $args );

}
add_action( 'init', 'especialidad_entrenador', 0 );

?>