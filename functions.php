<?php

add_filter( 'show_admin_bar' , '__return_false' );

add_action( 'after_setup_theme', 'webtinus_theme_setup' );

function webtinus_theme_setup() {

	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	// This theme uses wp_nav_menu() in one location.

	register_nav_menus( array(
		'header_page' => 'هدر',
		'footer2' => 'فوتر 2',
		'footer3' => 'فوتر 3',
	) );

	add_image_size( 'event-size', 300, 200, true );
}



/*

**************   REGISTER STYLE AND SCRIPT   **************

*/


add_action( 'wp_enqueue_scripts', 'webtinus_name_scripts' ); 

function webtinus_name_scripts() {
	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery.js', array(), '1.0', true );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/css/bootstrap.min.css', false, null );    
	wp_enqueue_script( 'bootstrap.min', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '1.0.0', true );  
	wp_enqueue_script( 'owljs',  get_template_directory_uri().'/js/owl.carousel.min.js' , array(), '2.0', true );
    wp_enqueue_style( 'owlcss', get_template_directory_uri().'/css/owl.carousel.css');
	wp_enqueue_script( 'mainjs',  get_template_directory_uri().'/js/main.js' , array(), '2.0', true );
	wp_enqueue_style( 'style', get_template_directory_uri().'/style.css', false, null );
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }


}



add_filter( 'style_loader_tag',  'preload_filter', 10, 2 );
function preload_filter( $html, $handle ){
    if (strcmp($handle, 'preload-style') == 0) {
        $html = str_replace("rel='stylesheet'", "rel='preload' as='style' ", $html);
    }
    return $html;
}




/**

 * Implement the Post Type & Taxonomy.

 */

require get_template_directory() . '/inc/post-type.php';


/**

 * Implement the site settings in menu.

 */

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(

		'page_title' 	=> 'تنظیمات سایت',

		'menu_title'	=> 'تنظیمات سایت',

		'menu_slug' 	=> 'theme-general-settings',

		'capability'	=> 'edit_posts',

		'redirect'		=> true

	));

	acf_add_options_sub_page(array(

		'page_title' 	=> 'تنظیمات هدر',

		'menu_title'	=> 'هدر',

		'menu_slug'		=> 'header',

		'parent_slug'	=> 'theme-general-settings',

	));

	acf_add_options_sub_page(array(

		'page_title' 	=> 'تنطیمات فوتر',

		'menu_title'	=> 'فوتر',

		'menu_slug'		=> 'footer',

		'parent_slug'	=> 'theme-general-settings',

	));

}







add_filter( 'wpseo_breadcrumb_single_link', 'doublee_filter_yoast_breadcrumb_items', 10, 2 );
function doublee_filter_yoast_breadcrumb_items( $link_output, $link ) {

	for ($i = 0; $i <= count($link) - 1; $i++) {
		if ( strpos( $link_output, 'breadcrumb_last' ) !== false ) {
			$new_link_output = '<li>';
			$new_link_output .= '<span property="name">' . $link['text'] . '</span>';
			$new_link_output .= '</li>';
		} else {
			$new_link_output = '<li property="itemListElement" typeof="ListItem" class="breadcrumb-item">';
			$new_link_output .= '<a property="item" typeof="WebPage" href="' . $link['url'] . '"><span property="name">' . $link['text'] . '</span></a>
			<meta property="position" content="'.$i.'">';
			$new_link_output .= '</li>';
		}
	 
	}
	return $new_link_output;
}
add_filter( 'wpseo_breadcrumb_output', 'doublee_filter_yoast_breadcrumb_output' );

function doublee_filter_yoast_breadcrumb_output( $output ){

	$from = '<span>';
	$to = '</span>';
	$output = str_replace( $from, $to, $output );

	return $output;
}

?>