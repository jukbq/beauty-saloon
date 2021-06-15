<?php

function bs_style() {
	wp_enqueue_style( 'main-style', get_template_directory_uri() . '/assets/css/style.css' );
	

}
function bs_scripts() {
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js');
	wp_enqueue_script( 'jquery' );
    
    
    wp_enqueue_script( 'main-script', get_template_directory_uri() . '/assets/js/main.js');
	
}

add_filter( 'template_include', 'bs_template', 99 );

function bs_template ( $template ) {
	if( is_page('services')  ){
		if ( $new_template = locate_template( array( '/page/services.phpp' ) ) )
			$template = $new_template ;
	;}	

	if( is_page('services_more')  ){
		if ( $new_template = locate_template( array( '/page/services_more.phpp' ) ) )
			$template = $new_template ;
	;}	


	if( is_page('gallery-page')  ){
		if ( $new_template = locate_template( array( '/page/gallery-page.php' ) ) )
			$template = $new_template ;
	
	};




	return $template;
}

include('customizer.php');
add_action( 'wp_enqueue_scripts', 'bs_style' );
add_action( 'wp_enqueue_scripts', 'bs_scripts', 11 );
add_action( 'after_setup_theme', 'bs_menu');
add_action( 'after_setup_theme', 'bs_setuplogo' );

function bs_menu(){
	register_nav_menus( [
		'header_menu' => 'Меню в шапці',
		'footer_menu' => 'Меню в підвалі',
	] );
} ;
function bs_setuplogo() {
add_theme_support( 'custom-logo', [
	'height'      => '65',
	'width'       => '65',
	'flex-width'  => false,
	'flex-height' => false,
	'header-text' => '',
	'unlink-homepage-logo' => false
] );
}

function root_acf_format_value( $value, $post_id, $field ) {
	
	$value = do_shortcode($value);
	
	return $value;
}

add_filter('acf/format_value/type=textarea', 'root_acf_format_value', 10, 3);
