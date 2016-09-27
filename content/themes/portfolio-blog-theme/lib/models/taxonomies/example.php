<?php

/**
 *******************************************************************************
 * Example
 *******************************************************************************
 *
 * This is an example taxonomy which you can use as a baseline for your
 * project's needs.
 *
 */



function wpst_taxonomy_example () {
    register_taxonomy(
        'example',
        array( 'post-type' ),
        array(
            'labels' => array(
                'name' => __( 'Examples' ),
                'singular_name' => __( 'Example' ),
                'search_items' => __( 'Search Examples' ),
                'popular_items' => __( 'Popular Examples' ),
                'all_items' => __( 'All Examples' ),
                'parent_item' => __( 'Parent Example' ),
                'parent_item_colon' => __( 'Parent Example:' ),
                'edit_item' => __( 'Edit Example' ),
                'update_item' => __( 'Update Example' ),
                'add_new_item' => __( 'Add New Example' ),
                'new_item_name' => __( 'New Example' ),
            ),
            'public' => true,
            'show_in_nav_menus' => true,
            'show_ui' => true,
            'hierarchical' => true,
            'query_var' => true,
            'rewrite' => array( 'slug' => 'examples', 'with_front' => false ),
        )
    );
}

add_action('init', 'wpst_taxonomy_example');

// // My bit

// add_filter( 'category_rewrite_rules', 'vipx_filter_category_rewrite_rules' );
// function vipx_filter_category_rewrite_rules( $rules ) {
 
//     $categories = get_categories( array( 'hide_empty' => false ) );
 
//     if ( is_array( $categories ) &amp;&amp; ! empty( $categories ) ) {
//         $slugs = array();
 
//         foreach ( $categories as $category ) {
//             if ( is_object( $category ) &amp;&amp; ! is_wp_error( $category ) ) {
//                 if ( 0 == $category->category_parent )
//                     $slugs[] = $category->slug;
//                 else
//                     $slugs[] = trim( get_category_parents( $category->term_id, false, '/', true ), '/' );
//             }
//         }
 
//         if ( ! empty( $slugs ) ) {
//             $rules = array();
 
//             foreach ( $slugs as $slug ) {
//                 $rules[ '(' . $slug . ')/feed/(feed|rdf|rss|rss2|atom)?/?$' ] = 'index.php?category_name=$matches[1]&amp;feed=$matches[2]';
//                 $rules[ '(' . $slug . ')/(feed|rdf|rss|rss2|atom)/?$' ] = 'index.php?category_name=$matches[1]&amp;feed=$matches[2]';
//                 $rules[ '(' . $slug . ')(/page/(\d+))?/?$' ] = 'index.php?category_name=$matches[1]&amp;paged=$matches[3]';
//             }
//         }
//     }
//     return $rules;
// }
