<?php

/************************
** create Custom Taxonomies for portfolio post type
************************/
add_action( 'init', 'gsa_custom_tax', 0 );
function gsa_custom_tax() 
{
    $my_taxonomies = array(
        array(
          'labels' => array(
            'name' => _x( 'Modules Categories', 'taxonomy general name' ),
            'singular_name' => _x( 'Modules Categories', 'taxonomy singular name' ),
            'search_items' =>  __( 'Search Modules Categories','codzilla' ),
            'popular_items' => __( 'Popular Modules Categories' ,'codzilla'),
            'all_items' => __( 'All Modules Categories' ),
            'parent_item' => __('Parent'),
            'parent_item_colon' => null,
            'edit_item' => __( 'Edit Modules Categories' ), 
            'update_item' => __( 'Update Modules Categories' ),
            'add_new_item' => __( 'Add New Modules Categories' ),
            'new_item_name' => __( 'New Modules Categories' ),
            'separate_items_with_commas' => __( 'Separate Modules Categories with commas' ),
            'add_or_remove_items' => __( 'Add or remove Modules Categories' ),
            'choose_from_most_used' => __( 'Choose from the most used Modules Categories' ),
            'menu_name' => __( 'Modules Categories' ),
          ),
          'tax_name' => 'tips',
          'post_types' =>  array('module'),
          'slug' => 'tips'          
        ),
    );

  // Add new taxonomy, NOT hierarchical (like tags)
    foreach ($my_taxonomies as $tax) {
      register_taxonomy($tax['tax_name'],$tax['post_types'],array(
        'hierarchical' => true,
        'labels' => $tax['labels'],
        'show_ui' => true,
        'update_count_callback' => '_update_post_term_count',
        'query_var' => true,
        'rewrite' => array( 'slug' => $tax['slug'] ),
      ));
    }
}

