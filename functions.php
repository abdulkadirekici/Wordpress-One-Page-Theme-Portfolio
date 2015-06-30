<?php 

add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );

function wpt_excerpt_length( $length ) {
	return 16;
}
add_filter( 'excerpt_length', 'wpt_excerpt_length', 999 );

function register_theme_menus() {

	register_nav_menus(
		array(
			'primary-menu' 	=> __( 'Primary Menu', 'test' )
		)
	);

}
add_action( 'init', 'register_theme_menus' );


function wpt_create_widget( $name, $id, $description ) {

	register_sidebar(array(
		'name' => __( $name ),
		'id' => $id,
		'description' => __( $description ),
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="module-heading">',
		'after_title' => '</h2>'
	));

}

wpt_create_widget( 'Page Sidebar', 'page', 'Displays on the side of pages with a sidebar' );
wpt_create_widget( 'Blog Sidebar', 'blog', 'Displays on the side of pages in the blog section' );


function wpt_theme_styles() {

    wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'animate_css', get_template_directory_uri() . '/css/animate.css' );
	wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/css/bootstrap.css' );
    wp_enqueue_style( 'linea_css', get_template_directory_uri() . '/css/linea.css' );
    wp_enqueue_style( 'elegant_css', get_template_directory_uri() . '/css/elegant.css' );
    wp_enqueue_style( 'magnific-popup_css', get_template_directory_uri() . '/css/magnific-popup.css' );
    wp_enqueue_style('opensans_css', get_template_directory_uri() . 'http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,800,700,600,300');
    wp_enqueue_style('gentium_css', get_template_directory_uri() . 'http://fonts.googleapis.com/css?family=Gentium+Basic:400,700,400italic,700italic');


}
add_action( 'wp_enqueue_scripts', 'wpt_theme_styles' );

function wpt_theme_js() {
    wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/js/bootstrap.js', array('jquery'), '', true );
    wp_enqueue_script( 'contactform_js', get_template_directory_uri() . '/js/contactform.js', array('jquery'), '', true );
    wp_enqueue_script( 'easing_js', get_template_directory_uri() . '/js/jquery.easing.js', array('jquery'), '', true );
    wp_enqueue_script( 'isotope_js', get_template_directory_uri() . '/js/isotope.pkgd.min.js', array('jquery'), '', true );
    wp_enqueue_script( 'scripts_js', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '', true );
    wp_enqueue_script( 'magnific-popup_js', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', array('jquery'), '', true );
    wp_enqueue_script( 'smoothscroll_js', get_template_directory_uri() . '/js/smoothscroll.js', '', '', true );
    wp_enqueue_script( 'classie_js', get_template_directory_uri() . '/js/classie.js', '', '', true );
    wp_enqueue_script( 'nav-active_js', get_template_directory_uri() . '/js/nav-active.js', '', '', true );
    wp_enqueue_script( 'wow_js', get_template_directory_uri() . '/js/wow.min.js', '', '', true );
}
add_action( 'wp_enqueue_scripts', 'wpt_theme_js' );
?>