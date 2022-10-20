<?php

// register new posttype
function add_artist_post_type() {

    // Set UI labels for Custom Post Type
    $labels = array(
          'name'                => _x( 'artists', 'Post Type General Name', 'Divi' ),
          'singular_name'       => _x( 'Artist', 'Post Type Singular Name', 'Divi' ),
          'menu_name'           => __( 'Artists', 'Divi' ),
          'parent_item_colon'   => __( 'Parent Artist', 'Divi' ),
          'all_items'           => __( 'All Artists', 'Divi' ),
          'view_item'           => __( 'View Artist', 'Divi' ),
          'add_new_item'        => __( 'Add New Artist', 'Divi' ),
          'add_new'             => __( 'Add New', 'Divi' ),
          'edit_item'           => __( 'Edit artist', 'Divi' ),
          'update_item'         => __( 'Update artist', 'Divi' ),
          'search_items'        => __( 'Search artist', 'Divi' ),
          'not_found'           => __( 'Not Found', 'Divi' ),
          'not_found_in_trash'  => __( 'Not found in Trash', 'Divi' ),
    );

    $args = array(
        'label'               => __( 'artists', 'Divi' ),
        'description'         => __( 'artist info and media', 'Divi' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', 'page-attributes','capabilities'),
        'taxonomies'          => array( 'festival', 'category', 'post_tag' ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'menu_icon'           =>'dashicons-portfolio',
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest'        => true,
    );
    register_post_type( 'artist',  $args );
}
add_action( 'init', 'add_artist_post_type' );

/* apply festival to artist post type */
// https://developer.wordpress.org/reference/functions/register_taxonomy/
// https://developer.wordpress.org/reference/functions/register_taxonomy_for_artist_type/
// source https://code.tutsplus.com/articles/applying-categories-tags-and-custom-taxonomies-to-media-attachments--wp-32319

// apply festival to artists
/*
function add_festivals_to_artists() {
    register_taxonomy_for_artist_type( 'festivals', 'artist' );
}
add_action( 'init' , 'add_festival_to_artists' );
*/

/*
// apply categories to artists
function add_categories_to_artists() {
    register_taxonomy_for_artist_type( 'category', 'artist' );
}
add_action( 'init' , 'add_categories_to_artists' );

// apply tags to artists
function add_tags_to_artists() {
    register_taxonomy_for_artist_type( 'post_tag', 'artist' );
}
add_action( 'init' , 'add_tags_to_artists' );

// rest route
function add_artists_rest_route( $route, $post ) {
    if ( $post->post_type === 'artist' ) {
        $route = '/wp/v2/artist/' . $post->ID;
    }
    return $route;
}
add_filter( 'rest_route_for_post', 'add_artists_rest_route', 10, 2 );
*/
