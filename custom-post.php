<?php
function custom_post_type() {
$labels = array(
    'name'                => _x( 'Hotel', 'Post Type General Name', 'text_domain' ),
    'singular_name'       => _x( 'Hotel', 'Post Type Singular Name', 'text_domain' ),
    'menu_name'           => __( 'Hotel', 'text_domain' ),
    'parent_item_colon'   => __( 'Parent Hotel:', 'text_domain' ),
    'all_items'           => __( 'All Hotels', 'text_domain' ),
    'view_item'           => __( 'View Hotel', 'text_domain' ),
    'add_new_item'        => __( 'Add New Hotel', 'text_domain' ),
    'add_new'             => __( 'New Hotel', 'text_domain' ),
    'edit_item'           => __( 'Edit Hotel', 'text_domain' ),
    'update_item'         => __( 'Update Hotel', 'text_domain' ),
    'search_items'        => __( 'Search Hotels', 'text_domain' ),
    'not_found'           => __( 'No Hotels found', 'text_domain' ),
    'not_found_in_trash'  => __( 'No Hotels found in Trash', 'text_domain' ),
);
$args = array(
    'label'               => __( 'Hotel', 'text_domain' ),
    'description'         => __( 'Hotel information pages', 'text_domain' ),
    'labels'              => $labels,
    'supports'            => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
    'taxonomies'          => array( 'hotel_category', 'post_tag' ),
    'hierarchical'        => false,
    'public'              => true,
    'menu_icon'           => 'dashicons-admin-generic',
    'show_ui'             => true,
    'show_in_menu'        => true,
    'show_in_nav_menus'   => true,
    'show_in_admin_bar'   => true,
    'menu_position'       => 5,
    'can_export'          => true,
    'has_archive'         => true,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'capability_type'     => 'post',
);
register_post_type( 'hotel', $args );
}
register_taxonomy('hotel_category', ['hotel'], [
        'label' => __('Hotel Category', 'txtdomain'),
        'hierarchical' => true,
        'rewrite' => ['slug' => 'hotel_category'],
        'show_admin_column' => true,
        'show_in_rest' => true,
        'labels' => [
            'singular_name' => __('Hotel Category', 'txtdomain'),
            'all_items' => __('All Hotel Categories', 'txtdomain'),
            'edit_item' => __('Add New Hotel Category', 'txtdomain'),
            'view_item' => __('View Hotel Category', 'txtdomain'),
            'update_item' => __('Update Hotel Category', 'txtdomain'),
            'add_new_item' => __('Add New Hotel Category', 'txtdomain'),
            'new_item_name' => __('New Hotel Category Name', 'txtdomain'),
            'search_items' => __('Search Hotel Category', 'txtdomain'),
            'parent_item' => __('Parent Hotel Category', 'txtdomain'),
            'parent_item_colon' => __('Parent Hotel Category:', 'txtdomain'),
            'not_found' => __('No Hotel Category found', 'txtdomain'),
        ]
    ]);
    register_taxonomy_for_object_type('hotel_category', 'hotel');
add_action( 'init', 'custom_post_type' );