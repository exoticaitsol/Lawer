<?php
add_action('init', 'Banner');
	function Banner() {
	$labels = array(
		'name'               => _x( 'Banner', 'post type general name' ),
		'singular_name'      => _x( 'Banner ', 'post type singular name' ),
		'add_new'            => _x( 'Add New', 'post' ),
		'add_new_item'       => __( 'Add New Banner post' ),
		'edit_item'          => __( 'Edit Banner post' ),
		'new_item'           => __( 'New Banner post' ),
		'all_items'          => __( 'All Banner post' ),
		'view_item'          => __( 'View Banner post' ),
		'search_items'       => __( 'Search Banner post' ),
		'not_found'          => __( 'No Banner post found' ),
		'not_found_in_trash' => __( 'No Banner post found' ), 
		'parent_item_colon'  => '',
		'menu_name'          => 'Banner Post'
	);
	$args = array(
		'labels'       				=> $labels,
		'description'  				=> 'Banner post',
		'public'        			=> true,
		'show_ui' 					=> true, 
		'show_in_menu'  			=> true, 
		'publicly_queryable' 		=> true,
		'menu_position'				=> 8,
		'query_var' 				=> true,
		'rewrite'					=> true,
		'capability_type' 			=> 'post',
    	'has_archive'				=> true, 
		'supports'      			=> array( 'title', 'editor', 'thumbnail', '', 'comments' ),
		'has_archive'   			=> true,
	);
	register_post_type( 'Banner', $args );	

	register_taxonomy("banner", 'banner', array("hierarchical" => true, "label" => "Banner post Category",'show_admin_column' => true, "singular_label" => "Banner Category","rewrite" => true) );
	
}

add_action('init', 'Practice');
	function Practice() {
	$labels = array(
		'name'               => _x( 'Practice', 'post type general name' ),
		'singular_name'      => _x( 'Practice ', 'post type singular name' ),
		'add_new'            => _x( 'Add New', 'post' ),
		'add_new_item'       => __( 'Add New Practice post' ),
		'edit_item'          => __( 'Edit Practice post' ),
		'new_item'           => __( 'New Practice post' ),
		'all_items'          => __( 'All Practice post' ),
		'view_item'          => __( 'View Practice post' ),
		'search_items'       => __( 'Search Banner post' ),
		'not_found'          => __( 'No Practice post found' ),
		'not_found_in_trash' => __( 'No Practice post found' ), 
		'parent_item_colon'  => '',
		'menu_name'          => 'Practice Post'
	);
	$args = array(
		'labels'       				=> $labels,
		'description'  				=> 'Practice post',
		'public'        			=> true,
		'show_ui' 					=> true, 
		'show_in_menu'  			=> true, 
		'publicly_queryable' 		=> true,
		'menu_position'				=> 9,
		'query_var' 				=> true,
		'rewrite'					=> true,
		'capability_type' 			=> 'post',
    	'has_archive'				=> true, 
		'supports'      			=> array( 'title', 'editor', 'thumbnail', '', 'comments' ),
		'has_archive'   			=> true,
	);
	register_post_type( 'Practice', $args );	

	register_taxonomy("practice", 'practice', array("hierarchical" => true, "label" => "Practice post Category",'show_admin_column' => true, "singular_label" => "Practice Category","rewrite" => true) );
	
}
add_action('init', 'Team');
	function Team() {
	$labels = array(
		'name'               => _x( 'Team', 'post type general name' ),
		'singular_name'      => _x( 'Team ', 'post type singular name' ),
		'add_new'            => _x( 'Add New', 'post' ),
		'add_new_item'       => __( 'Add New Team post' ),
		'edit_item'          => __( 'Edit Team post' ),
		'new_item'           => __( 'New Team post' ),
		'all_items'          => __( 'All Team post' ),
		'view_item'          => __( 'View Team post' ),
		'search_items'       => __( 'Search Banner post' ),
		'not_found'          => __( 'No Team post found' ),
		'not_found_in_trash' => __( 'No Team post found' ), 
		'parent_item_colon'  => '',
		'menu_name'          => 'Team Post'
	);
	$args = array(
		'labels'       				=> $labels,
		'description'  				=> 'Team post',
		'public'        			=> true,
		'show_ui' 					=> true, 
		'show_in_menu'  			=> true, 
		'publicly_queryable' 		=> true,
		'menu_position'				=> 10,
		'query_var' 				=> true,
		'rewrite'					=> true,
		'capability_type' 			=> 'post',
    	'has_archive'				=> true, 
		'supports'      			=> array( 'title', 'editor', 'thumbnail', '', 'comments' ),
		'has_archive'   			=> true,
	);
	register_post_type( 'Team', $args );	

	register_taxonomy("team", 'team', array("hierarchical" => true, "label" => "Team post Category",'show_admin_column' => true, "singular_label" => "Team Category","rewrite" => true) );
	
}

add_action('init', 'About');
	function About() {
	$labels = array(
		'name'               => _x( 'About', 'post type general name' ),
		'singular_name'      => _x( 'About ', 'post type singular name' ),
		'add_new'            => _x( 'Add New', 'post' ),
		'add_new_item'       => __( 'Add New About post' ),
		'edit_item'          => __( 'Edit About post' ),
		'new_item'           => __( 'New About post' ),
		'all_items'          => __( 'All About post' ),
		'view_item'          => __( 'View About post' ),
		'search_items'       => __( 'Search Banner post' ),
		'not_found'          => __( 'No About post found' ),
		'not_found_in_trash' => __( 'No About post found' ), 
		'parent_item_colon'  => '',
		'menu_name'          => 'About Post'
	);
	$args = array(
		'labels'       				=> $labels,
		'description'  				=> 'About post',
		'public'        			=> true,
		'show_ui' 					=> true, 
		'show_in_menu'  			=> true, 
		'publicly_queryable' 		=> true,
		'menu_position'				=> 11,
		'query_var' 				=> true,
		'rewrite'					=> true,
		'capability_type' 			=> 'post',
    	'has_archive'				=> true, 
		'supports'      			=> array( 'title', 'editor', 'thumbnail', '', 'comments' ),
		'has_archive'   			=> true,
	);
	register_post_type( 'About', $args );	

	register_taxonomy("about", 'about', array("hierarchical" => true, "label" => "About post Category",'show_admin_column' => true, "singular_label" => "About Category","rewrite" => true) );
	
}
