<?php
/* Replace projects with custom posttype
// source: https://www.garethjmsaunders.co.uk/2015/03/07/changing-the-divi-projects-custom-post-type-to-anything-you-want/

function child_et_pb_register_posttypes() { $labels = array( 'add_new' => __( 'Add New', 'Divi' ),
    'add_new_item' => __( 'Add New Artist', 'Divi' ),
    'all_items' => __( 'All Artists', 'Divi' ),
    'edit_item' => __( 'Edit Artist', 'Divi' ),
    'menu_name' => __( 'Artists', 'Divi' ),
    'name' => __( 'Artists', 'Divi' ),
    'new_item' => __( 'New Artist', 'Divi' ),
    'not_found' => __( 'Nothing found', 'Divi' ),
    'not_found_in_trash' => __( 'Nothing found in Trash', 'Divi' ),
    'parent_item_colon' => '',
    'search_items' => __( 'Search Artists', 'Divi' ),
    'singular_name' => __( 'Artist', 'Divi' ),
    'view_item' => __( 'View Artist', 'Divi' ),
);

$args = array( 
    'can_export' => true,
    'capability_type' => 'post',
    'has_archive' => true,
    'hierarchical' => false,
    'labels' => $labels,
    'menu_icon' => 'dashicons-admin-home',
    'menu_position' => 5,
    'public' => true,
    'publicly_queryable' => true,
    'query_var' => true,
    'show_in_menu' => true,
    'show_in_nav_menus' => true,
    'show_ui' => true,
    'rewrite' => apply_filters( 'et_project_posttype_rewrite_args', array(
    'feeds' => true,
    'slug' => 'artist',
    'with_front' => false,
    'exclude_from_search' => false,
    'show_in_rest'        => true,
)),
'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments', 'revisions', 'custom-fields' ),
);

register_post_type( 'project', apply_filters( 'et_project_posttype_args', $args ) );

$labels = array(
    'name' => _x( 'Categories', 'Artist category name', 'Divi' ),
    'singular_name' => _x( 'Category', 'Artist category singular name', 'Divi' ),
    'search_items' => __( 'Search Categories', 'Divi' ),
    'all_items' => __( 'All Categories', 'Divi' ),
    'parent_item' => __( 'Parent Category', 'Divi' ),
    'parent_item_colon' => __( 'Parent Category:', 'Divi' ),
    'edit_item' => __( 'Edit Category', 'Divi' ),
    'update_item' => __( 'Update Category', 'Divi' ),
    'add_new_item' => __( 'Add New Category', 'Divi' ),
    'new_item_name' => __( 'New Category Name', 'Divi' ),
    'menu_name' => __( 'Categories', 'Divi' ),
);

register_taxonomy( 'project_category', array( 'project' ), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_in_menu' => true,
    'show_admin_column' => true,
    'query_var' => true,
) );

$labels = array(
    'name' => _x( 'Tags', 'Artist Tag name', 'Divi' ),
    'singular_name' => _x( 'Tag', 'Artist tag singular name', 'Divi' ),
    'search_items' => __( 'Search Tags', 'Divi' ),
    'all_items' => __( 'All Tags', 'Divi' ),
    'parent_item' => __( 'Parent Tag', 'Divi' ),
    'parent_item_colon' => __( 'Parent Tag:', 'Divi' ),
    'edit_item' => __( 'Edit Tag', 'Divi' ),
    'update_item' => __( 'Update Tag', 'Divi' ),
    'add_new_item' => __( 'Add New Tag', 'Divi' ),
    'new_item_name' => __( 'New Tag Name', 'Divi' ),
    'menu_name' => __( 'Tags', 'Divi' ),
);

register_taxonomy( 'project_tag', array( 'project' ), array(
    'hierarchical' => false,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
) );

$labels = array(
    'name' => _x( 'Layouts', 'Layout type general name', 'Divi' ),
    'singular_name' => _x( 'Layout', 'Layout type singular name', 'Divi' ),
    'add_new' => _x( 'Add New', 'Layout item', 'Divi' ),
    'add_new_item' => __( 'Add New Layout', 'Divi' ),
    'edit_item' => __( 'Edit Layout', 'Divi' ),
    'new_item' => __( 'New Layout', 'Divi' ),
    'all_items' => __( 'All Layouts', 'Divi' ),
    'view_item' => __( 'View Layout', 'Divi' ),
    'search_items' => __( 'Search Layouts', 'Divi' ),
    'not_found' => __( 'Nothing found', 'Divi' ),
    'not_found_in_trash' => __( 'Nothing found in Trash', 'Divi' ),
    'parent_item_colon' => '',
);

$args = array(
    'labels' => $labels,
    'public' => false,
    'can_export' => true,
    'query_var' => false,
    'has_archive' => false,
    'capability_type' => 'post',
    'hierarchical' => false,
    'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments', 'revisions', 'custom-fields' ),
);

register_post_type( 'et_pb_layout', apply_filters( 'et_pb_layout_args', $args ) );
}

function remove_et_pb_actions() {
    remove_action( 'init', 'et_pb_register_posttypes', 15 );
}

add_action( 'init', 'remove_et_pb_actions');
add_action( 'init', 'child_et_pb_register_posttypes', 20 );

*/
