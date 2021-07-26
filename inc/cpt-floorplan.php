<?
function cptui_register_my_cpts() {

	/**
	 * Post Type: floorplans.
	 */

	$labels = [
		"name" => __( "floorplans", "hello-elementor-child" ),
		"singular_name" => __( "floorplan", "hello-elementor-child" ),
		"menu_name" => __( "My floorplans", "hello-elementor-child" ),
		"all_items" => __( "All floorplans", "hello-elementor-child" ),
		"add_new" => __( "Add new", "hello-elementor-child" ),
		"add_new_item" => __( "Add new floorplan", "hello-elementor-child" ),
		"edit_item" => __( "Edit floorplan", "hello-elementor-child" ),
		"new_item" => __( "New floorplan", "hello-elementor-child" ),
		"view_item" => __( "View floorplan", "hello-elementor-child" ),
		"view_items" => __( "View floorplans", "hello-elementor-child" ),
		"search_items" => __( "Search floorplans", "hello-elementor-child" ),
		"not_found" => __( "No floorplans found", "hello-elementor-child" ),
		"not_found_in_trash" => __( "No floorplans found in trash", "hello-elementor-child" ),
		"parent" => __( "Parent floorplan:", "hello-elementor-child" ),
		"featured_image" => __( "Featured image for this floorplan", "hello-elementor-child" ),
		"set_featured_image" => __( "Set featured image for this floorplan", "hello-elementor-child" ),
		"remove_featured_image" => __( "Remove featured image for this floorplan", "hello-elementor-child" ),
		"use_featured_image" => __( "Use as featured image for this floorplan", "hello-elementor-child" ),
		"archives" => __( "floorplan archives", "hello-elementor-child" ),
		"insert_into_item" => __( "Insert into floorplan", "hello-elementor-child" ),
		"uploaded_to_this_item" => __( "Upload to this floorplan", "hello-elementor-child" ),
		"filter_items_list" => __( "Filter floorplans list", "hello-elementor-child" ),
		"items_list_navigation" => __( "floorplans list navigation", "hello-elementor-child" ),
		"items_list" => __( "floorplans list", "hello-elementor-child" ),
		"attributes" => __( "floorplans attributes", "hello-elementor-child" ),
		"name_admin_bar" => __( "floorplan", "hello-elementor-child" ),
		"item_published" => __( "floorplan published", "hello-elementor-child" ),
		"item_published_privately" => __( "floorplan published privately.", "hello-elementor-child" ),
		"item_reverted_to_draft" => __( "floorplan reverted to draft.", "hello-elementor-child" ),
		"item_scheduled" => __( "floorplan scheduled", "hello-elementor-child" ),
		"item_updated" => __( "floorplan updated.", "hello-elementor-child" ),
		"parent_item_colon" => __( "Parent floorplan:", "hello-elementor-child" ),
	];

	$args = [
		"label" => __( "floorplans", "hello-elementor-child" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => true,
		"rewrite" => [ "slug" => "floorplan", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-admin-home",
		"supports" => [ "title", "editor", "thumbnail", "custom-fields" ],
		"taxonomies" => [ "category" ],
		"show_in_graphql" => false,
	];

	register_post_type( "floorplan", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );
