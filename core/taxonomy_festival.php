<?php



// register new taxonomy which applies to posts and artists (or attachments/posts)

function add_festival_taxonomy() {

    $labels = array(

        'name'              => 'festivals',

        'singular_name'     => 'Festival',

        'search_items'      => 'Search Festival',

        'all_items'         => 'All Festivals',

        'parent_item'       => 'Parent Festival',

        'parent_item_colon' => 'Parent Festival:',

        'edit_item'         => 'Edit Festival',

        'update_item'       => 'Update Festival',

        'add_new_item'      => 'Add New Festival',

        'new_item_name'     => 'New Festival Name',

        'menu_name'         => 'Festival',

    );



    $args = array(

        'labels' => $labels,

        'hierarchical' => true,

        'public' => true,

        'show_ui' => true,

        'show_admin_column' => true,

        'show_in_nav_menus' => true,

        'show_tagcloud' => true,

        'query_var' => true,

        'exclude_from_search' => false,

        'rewrite' => true,

        'show_in_rest' => true, // important for metabox display!

    );



    //register_taxonomy( 'Festival', array( 'attachment', 'post', 'artist' ), $args );

   register_taxonomy( 'festivals', array( 'post', 'artist' ), $args );

}

add_action( 'init', 'add_festival_taxonomy' );



// source: https://code.tutsplus.com/articles/applying-categories-tags-and-custom-taxonomies-to-media-attachments--wp-32319



function festival_rest_route( $route, $term ) {

    if ( $term->taxonomy === 'festivals' ) {

        $route = '/wp/v2/festival/' . $term->term_id;

    }

    return $route;

}

add_filter( 'rest_route_for_term', 'festival_rest_route', 10, 2 );
