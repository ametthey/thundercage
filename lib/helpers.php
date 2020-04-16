<?php 

// function thundercage_image_configuration() {
// 	add_image_size('gallery', 700, 0);
//
// }
// add_action( 'after_setup_theme', 'thundercage_image_configuration' );


// Register Custom Post Type Exhibition
// Post Type Key: custompost
function create_exhibition_cpt() {

	$labels = array(
		'name' => _x( 'Exhibitions', 'Post Type General Name', 'thundercage' ),
		'singular_name' => _x( 'Exhibition', 'Post Type Singular Name', 'thundercage' ),
		'menu_name' => _x( 'Exhibitions', 'Admin Menu text', 'thundercage' ),
		'name_admin_bar' => _x( 'Exhibition', 'Add New on Toolbar', 'thundercage' ),
		'archives' => __( 'Exhibition Archives', 'thundercage' ),
		'attributes' => __( 'Exhibition Attributes', 'thundercage' ),
		'parent_item_colon' => __( 'Parent Exhibition:', 'thundercage' ),
		'all_items' => __( 'All Exhibitions', 'thundercage' ),
		'add_new_item' => __( 'Add New Exhibition', 'thundercage' ),
		'add_new' => __( 'Add New', 'thundercage' ),
		'new_item' => __( 'New Exhibition', 'thundercage' ),
		'edit_item' => __( 'Edit Exhibition', 'thundercage' ),
		'update_item' => __( 'Update Exhibition', 'thundercage' ),
		'view_item' => __( 'View Exhibition', 'thundercage' ),
		'view_items' => __( 'View Exhibitions', 'thundercage' ),
		'search_items' => __( 'Search Exhibition', 'thundercage' ),
		'not_found' => __( 'Not found', 'thundercage' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'thundercage' ),
		'featured_image' => __( 'Featured Image', 'thundercage' ),
		'set_featured_image' => __( 'Set featured image', 'thundercage' ),
		'remove_featured_image' => __( 'Remove featured image', 'thundercage' ),
		'use_featured_image' => __( 'Use as featured image', 'thundercage' ),
		'insert_into_item' => __( 'Insert into Exhibition', 'thundercage' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Exhibition', 'thundercage' ),
		'items_list' => __( 'Exhibitions list', 'thundercage' ),
		'items_list_navigation' => __( 'Exhibitions list navigation', 'thundercage' ),
		'filter_items_list' => __( 'Filter Exhibitions list', 'thundercage' ),
	);
	$args = array(
		'label' => __( 'Exhibition', 'thundercage' ),
		'description' => __( 'All Exhibitions', 'thundercage' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-palmtree',
		'supports' => array('title', 'editor', 'page-attributes'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 10,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'exhibition', $args );

}
add_action( 'init', 'create_exhibition_cpt', 0 );


/**
 * Removes some menus by page.
 */
function wpdocs_remove_menus(){

  remove_menu_page( 'index.php' );                  //Dashboard
  remove_menu_page( 'jetpack' );                    //Jetpack*
  remove_menu_page( 'edit.php' );                   //Posts
  // remove_menu_page( 'upload.php' );                 //Media
  // remove_menu_page( 'edit.php?post_type=page' );    //Pages
  remove_menu_page( 'edit-comments.php' );          //Comments
  // remove_menu_page( 'themes.php' );                 //Appearance
  // remove_menu_page( 'plugins.php' );                //Plugins
  // remove_menu_page( 'users.php' );                  //Users
  // remove_menu_page( 'tools.php' );                  //Tools
  // remove_menu_page( 'options-general.php' );        //Settings

}
add_action( 'admin_menu', 'wpdocs_remove_menus' );
?>
