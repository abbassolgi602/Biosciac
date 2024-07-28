<?php

// Register event Post Type
add_action( 'init', 'event_post_type', 0 );

function event_post_type() {

	$labels = array(

		'name'                => __( 'رویدادها', 'webtinus' ),

		'singular_name'       => __( 'رویدادها', 'webtinus' ),

		'menu_name'           => __( 'رویدادها', 'webtinus' ),

		'name_admin_bar'      => __( 'رویدادها', 'webtinus' ),

		'add_new_item'          => __( 'افزودن رویداد', 'webtinus' ),

		'add_new'               => __( 'افزودن رویداد', 'webtinus' ),

		'new_item'              => __( 'رویدادها جدید', 'webtinus' ),

	);

	$args = array(

		'label'               => __( 'رویدادها', 'webtinus' ),

		'description'         => __( 'رویدادها', 'webtinus' ),

		'labels'              => $labels,

		'supports'            => array( 'title', 'editor', 'thumbnail', 'excerpt' ),

		'hierarchical'        => true,

		'public'              => true,

		'show_ui'             => true,

		'show_in_menu'        => true,

		'menu_position'       => 6,

		'show_in_admin_bar'   => true,

		'show_in_nav_menus'   => true,

		'can_export'          => true,

		'has_archive'         => true,		

		'exclude_from_search' => false, 

		'publicly_queryable'  => true,

		'rewrite'             => true,

		'show_in_rest' 		  => true, // Disable Gutenberg

		'capability_type'     => 'post',

	);

	register_post_type( 'event', $args );

}



// Contact Form
add_action( 'init', 'contact_post_type', 0 );
function contact_post_type() {
	$labels = array(
		'name'                => __( 'پیام ها', 'webtinus' ),
		'singular_name'       => __( 'پیام ها', 'webtinus' ),
		'menu_name'           => __( 'پیام ها', 'webtinus' ),
		'name_admin_bar'      => __( 'پیام ها', 'webtinus' ),
		'add_new_item'          => __( 'افزودن پیام', 'webtinus' ),
		'add_new'               => __( 'افزودن پیام', 'webtinus' ),
		'new_item'              => __( 'پیام جدید', 'webtinus' ),
	);
	$args = array(
		'label'               => __( 'پیام', 'webtinus' ),
		'description'         => __( 'پیام', 'webtinus' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'author', 'custom-fields'),
		'hierarchical'        => true,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 6,
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,		
		'exclude_from_search' => true, 
		'publicly_queryable'  => false,
		'rewrite'             => true,
		'show_in_rest' 		  => true, // Disable Gutenberg
		'capability_type'     => 'post',
	);
	register_post_type( 'contact', $args );
}
?>