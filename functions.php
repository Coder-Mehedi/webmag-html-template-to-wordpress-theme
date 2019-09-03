<?php 

function webmag_theme_files() {
	wp_enqueue_style( 'bootStrap', get_template_directory_uri(). '/css/bootstrap.min.css', array(), '1.0' , 'all' );
	wp_enqueue_style( 'fontAwesome', get_template_directory_uri(). '/css/font-awesome.min.css', array(), '1.0', 'all');
	wp_enqueue_style( 'solarisStyle', get_stylesheet_uri());

	wp_enqueue_script( 'bootStrap',get_template_directory_uri(). '/js/bootstrap.min.js', array('jquery'), '1.0', true );

	wp_enqueue_script( 'magScript', get_template_directory_uri(). '/js/main.js', array('jquery'), '1.0', true );

}

add_action('wp_enqueue_scripts', 'webmag_theme_files');



function solaris_theme_supports() {
	// loading theme textdomain
	load_theme_textdomain( 'webmag-mehedi', get_template_directory(). '/languages');

	// Generate automated feedlink on head
	add_theme_support( 'automatic-feed-links' );

	// adding support for automatic title tag
	add_theme_support( 'title-tag' );

	// enablingpost thumbnail support
	add_theme_support( 'post-thumbnails' );

}

add_action('after_setup_theme', 'solaris_theme_supports'); 

register_nav_menus([
	'header_menu' => 'Header Menu',
	'footer_menu' => 'Footer Menu'
]);

function webmag_widgets_init() {

	register_sidebar(
		array(
			'name'          => __( 'Primary Sidebar', 'webmag' ),
			'id'            => 'sidebar-1',
			'description'   => __( 'Add widgets here to appear in your footer.', 'webmag' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

}
add_action( 'widgets_init', 'webmag_widgets_init' );