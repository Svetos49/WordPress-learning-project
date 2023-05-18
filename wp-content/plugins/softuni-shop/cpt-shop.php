<?php
/**
 * Register a custom post type called "job".
 *
 * @see get_post_type_labels() for label keys.
 */
function softuni_shop_cpt() {
	$labels = array(
		'name'                  => _x( 'Shops', 'Post type general name', 'softuni' ),
		'singular_name'         => _x( 'Shop', 'Post type singular name', 'softuni' ),
		'menu_name'             => _x( 'Shops', 'Admin Menu text', 'softuni' ),
		'name_admin_bar'        => _x( 'Shop', 'Add New on Toolbar', 'softuni' ),
		'add_new'               => __( 'Add New', 'softuni' ),
		'add_new_item'          => __( 'Add New Shop', 'softuni' ),
		'new_item'              => __( 'New Shop', 'softuni' ),
		'edit_item'             => __( 'Edit Shop', 'softuni' ),
		'view_item'             => __( 'View Shop', 'softuni' ),
		'all_items'             => __( 'All Shops', 'softuni' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'shop' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'revisions' ),
        'show_in_rest'       => true
	);

	register_post_type( 'shop', $args );

    flush_rewrite_rules();
}
add_action( 'init', 'softuni_shop_cpt' );