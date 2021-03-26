<?php
/**Custom post types */
function beglamrs_init() {
    $labels = array(
        'name'                  => _x( 'Tutorials', 'Post type general name', 'tutorial' ),
        'singular_name'         => _x( 'Tutorial', 'Post type singular name', 'tutorial' ),
        'menu_name'             => _x( 'Tutorials', 'Admin Menu text', 'tutorial' ),
        'name_admin_bar'        => _x( 'Tutorial', 'Add New on Toolbar', 'tutorial' ),
        'add_new'               => __( 'Add New', 'tutorial' ),
        'add_new_item'          => __( 'Add New tutorial', 'tutorial' ),
        'new_item'              => __( 'New utorial', 'tutorial'),
        'edit_item'             => __( 'Edit utorial', 'tutorial' ),
        'view_item'             => __( 'View utorial', 'tutorial' ),
        'all_items'             => __( 'All tutorials', 'tutorial' ),
        'search_items'          => __( 'Search tutorials', 'tutorial' ),
        'parent_item_colon'     => __( 'Parent tutorials:', 'tutorial' ),
        'not_found'             => __( 'No Tutorial found.', 'tutorial' ),
        'not_found_in_trash'    => __( 'No Tutorials found in Trash.', 'tutorial' ),
        'featured_image'        => _x( 'Tutorial Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'tutorial' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'tutorial' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'tutorial' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'tutorial' ),
        'archives'              => _x( 'Tutorial archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'tutorial' ),
        'insert_into_item'      => _x( 'Insert into Tutorial', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'tutorial' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this Tutorial', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'tutorial' ),
        'filter_items_list'     => _x( 'Filter Tutorials list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'tutorial' ),
        'items_list_navigation' => _x( 'Tutorials list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'tutorial' ),
        'items_list'            => _x( 'Tutorials list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'tutorial' ),
    );     
    $args = array(
        'labels'             => $labels,
        'description'        => 'Tutorial custom post type.',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'tutorials' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 20,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail' ),
        'taxonomies'         => array( 'category', 'post_tag' ),
        'show_in_rest'       => true,
    );

    register_post_type( 'beglamrs_tutorial', $args );
}
add_action( 'init', 'beglamrs_init' );