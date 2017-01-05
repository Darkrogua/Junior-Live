<?php

remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_generator');

show_admin_bar(false);

function logo_widget_init() {

	register_sidebar( array(
		'name'          => 'логотоп SVG',
		'id'            => 'logo',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<span class="hidden">',
		'after_title'   => '</span>',
	) );

}
add_action( 'widgets_init', 'logo_widget_init' );


function video_widget_init() {

	register_sidebar( array(
		'name'          => 'видео обложка',
		'id'            => 'video',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<span class="hidden">',
		'after_title'   => '</span>',
	) );

}
add_action( 'widgets_init', 'video_widget_init' );

add_theme_support('post-thumbnails');


function languages_widget_init() {

	register_sidebar( array(
		'name'          => 'переключатель языков',
		'id'            => 'languages',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );

}
add_action( 'widgets_init', 'languages_widget_init' );

function petergof_scripts() {

wp_enqueue_style('petergof-style', get_template_directory_uri() );
wp_enqueue_style('main', get_template_directory_uri(). '/css/main.css' );
wp_enqueue_style('bootstrap', get_template_directory_uri(). '/libs/bootstrap/bootstrap-grid.min.css' );
wp_enqueue_style('font-awesome', get_template_directory_uri(). '/libs/font-awesome/css/font-awesome.min.css' );
wp_enqueue_style('linea-style', get_template_directory_uri(). '/libs/linea/styles.css' );
wp_enqueue_style('popup', get_template_directory_uri(). '/libs/magnific-popup/magnific-popup.css' );
wp_enqueue_style('owl-carousel', get_template_directory_uri(). '/libs/owl-carousel/owl.carousel.css' );
wp_enqueue_style('animate', get_template_directory_uri(). '/libs/animate/animate.min.css' );
wp_enqueue_style('fonts', get_template_directory_uri(). '/css/fonts.css' );
wp_enqueue_style('theme', get_template_directory_uri(). '/css/skins/purple.css' );
wp_enqueue_style('media', get_template_directory_uri(). '/css/media.css' );
}

add_action( 'wp_enqueue_scripts', 'petergof_scripts' );

function my_scripts_method() {
	//подключается jquery сначала деактивируется старый потом подключается из библиотеки
	wp_deregister_script( 'jquery' );
	wp_register_script('jquery', get_template_directory_uri(). '/libs/jquery/jquery-2.1.3.min.js');
	wp_enqueue_script( 'jquery' );

	wp_enqueue_script('owl_carousel', get_template_directory_uri(). '/libs/owl-carousel/owl.carousel.min.js', array('jquery'), '2', false );

	wp_deregister_script( 'common' );
	wp_register_script('common', get_template_directory_uri(). '/js/common.js', array('jquery'), '2', false );
	wp_enqueue_script( 'common' );

	wp_enqueue_script('parallax', get_template_directory_uri(). '/libs/parallax/parallax.min.js', array('common'), false , true );
	wp_enqueue_script('popup-magnific', get_template_directory_uri(). '/libs/magnific-popup/jquery.magnific-popup.min.js', array('common'), false, true );
	wp_enqueue_script('mixitup', get_template_directory_uri(). '/libs/mixitup/mixitup.min.js', array('common'), false , true );
	wp_enqueue_script('scroll2id', get_template_directory_uri(). '/libs/scroll2id/PageScroll2id.min.js', array('common'), false , true );
	wp_enqueue_script('waypoints', get_template_directory_uri(). '/libs/waypoints/waypoints.min.js', array('common'), false , true );
	wp_enqueue_script('animate', get_template_directory_uri(). '/libs/animate/animate-css.js', array('common'), false, true );
	wp_enqueue_script('bootstrap', get_template_directory_uri(). '/libs/jqBootstrapValidation/jqBootstrapValidation.js', array(), '2', true );
	wp_enqueue_script('yIPlayer', get_template_directory_uri(). '/libs/YIPlayer/jquery.mb.YTPlayer.js', array('common'), false, true );
	wp_enqueue_script('device-min', get_template_directory_uri(). '/libs/device/device.min.js', array('common'), false, true );
	wp_enqueue_script('device-js', get_template_directory_uri(). '/libs/device/device.js', array('common'), false, true );
	wp_enqueue_script('lang', get_template_directory_uri(). '/libs/lang/lang.js', array('common'), false, true );

}
add_action('wp_enqueue_scripts', 'my_scripts_method');

