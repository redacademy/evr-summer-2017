<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Register Custom Post Type: Workshops
function evr_cpt_workshop() {
  
    $labels = array(
      'name'                  => 'Workshops',
      'singular_name'         => 'Workshop',
      'menu_name'             => 'Workshops',
      'name_admin_bar'        => 'Workshop',
      'archives'              => 'Workshop Archives',
      'attributes'            => 'Workshop Attributes',
      'parent_item_colon'     => 'Parent Workshop:',
      'all_items'             => 'All Workshops',
      'add_new_item'          => 'Add New Workshop',
      'add_new'               => 'Add New',
      'new_item'              => 'New Workshop',
      'edit_item'             => 'Edit Workshop',
      'update_item'           => 'Update Workshop',
      'view_item'             => 'View Workshop',
      'view_items'            => 'View Workshops',
      'search_items'          => 'Search Workshop',
      'not_found'             => 'Not found',
      'not_found_in_trash'    => 'Not found in Trash',
      'featured_image'        => 'Featured Image',
      'set_featured_image'    => 'Set featured image',
      'remove_featured_image' => 'Remove featured image',
      'use_featured_image'    => 'Use as featured image',
      'insert_into_item'      => 'Insert into workshop',
      'uploaded_to_this_item' => 'Uploaded to this workshop',
      'items_list'            => 'Workshops list',
      'items_list_navigation' => 'Workshops list navigation',
      'filter_items_list'     => 'Filter workshops list',
    );
    $args = array(
      'label'                 => 'Workshop',
      'description'           => 'EVR workshop custom post type',
      'labels'                => $labels,
      'supports'              => array( ),
      'hierarchical'          => false,
      'public'                => true,
      'show_ui'               => true,
      'show_in_menu'          => true,
      'menu_position'         => 5,
      'menu_icon'             => 'dashicons-megaphone',
      'show_in_admin_bar'     => true,
      'show_in_nav_menus'     => true,
      'can_export'            => true,
      'has_archive'           => true,		
      'exclude_from_search'   => false,
      'publicly_queryable'    => true,
      'capability_type'       => 'page',
      'show_in_rest'          => true,
    );
    register_post_type( 'workshop', $args );
  
  }
  add_action( 'init', 'evr_cpt_workshop', 0 );
