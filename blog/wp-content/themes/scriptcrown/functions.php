<?php
/**
* ScriptCrown functions and definitions
**/
$functions_path=get_template_directory().'/functions/';
$post_type_path=get_template_directory().'/inc/post-types/';
$theme_function_path=get_template_directory().'/inc/theme-functions/';
/*--------------------------------------*/
/* Optional Panel Helper Functions
/*--------------------------------------*/
require_once($functions_path.'admin-functions.php');
require_once($functions_path.'admin-interface.php');
require_once($functions_path.'theme-options.php');
require_once($functions_path.'default-values.php'); 
require_once($theme_function_path.'comment-helper.php'); 
function scriptcrown_ftn_wp_enqueue_scripts(){
    if(!is_admin()){
        wp_enqueue_script('jquery');
        if(is_singular()and get_site_option('thread_comments')){
            wp_print_scripts('comment-reply');
		}
	}
}
add_action('wp_enqueue_scripts','scriptcrown_ftn_wp_enqueue_scripts');
function scriptcrown_ftn_get_option($name){
    $options=get_option('scriptcrown_ftn_options');
    if(isset($options[$name]))
        return $options[$name];
}

function scriptcrown_ftn_update_option($name,$value){
    $options=get_option('scriptcrown_ftn_options');
    $options[$name]=$value;
    return update_option('scriptcrown_ftn_options',$options);
}

function scriptcrown_ftn_delete_option($name){
    $options=get_option('scriptcrown_ftn_options');
    unset($options[$name]);
    return update_option('scriptcrown_ftn_options',$options);
}

function get_theme_value($field){	
	$field1=scriptcrown_ftn_get_option($field);
	$field_default=all_default_values($field);
	if(!empty($field1)){
		$field_val=$field1;
	}else{
		$field_val=$field_default;	
	}
	return	$field_val;
}
/*--------------------------------------*/
/* Post Type Helper Functions
/*--------------------------------------*/
require_once($post_type_path.'clients.php');
/*--------------------------------------*/
/* Theme Functions
/*--------------------------------------*/
require_once($theme_function_path.'extra-functions.php');
/*--------------------------------------*/
/* Theme Helper Functions
/*--------------------------------------*/
if(!function_exists('scriptcrown_theme_setup')): 
	function scriptcrown_theme_setup(){
		add_theme_support('title-tag');
		add_theme_support('post-thumbnails');
		register_nav_menus(array('primary'=> __('Primary Menu','scriptcrown'),'secondary'=> __('Secondary Menu','scriptcrown'),'footer-one'=> __('Footer Menu','scriptcrown'),'footer-course'=> __('Footer Course Menu','scriptcrown')));
		add_theme_support('html5',array('search-form','comment-form','comment-list','gallery','caption'));
	}
endif;

add_action('after_setup_theme','scriptcrown_theme_setup');
function scriptcrown_widgets_init(){
	register_sidebar(array(
		'name'=> __('Widget Area','scriptcrown'),
		'id'  => 'sidebar-1',
		'description'=> __('Add widgets here to appear in your sidebar.','scriptcrown'),
		'before_widget'=> '<div id="%1$s" class="widget %2$s">',
		'after_widget'=> '</div>',
		'before_title'=> '<h2 class="widget-title">',
		'after_title'=> '</h2>',
	));
}

add_action('widgets_init','scriptcrown_widgets_init');
function scriptcrown_scripts(){
	wp_enqueue_style('scriptcrown-bootstrap',get_template_directory_uri().'/css/bootstrap.min.css',array());
	wp_enqueue_style('scriptcrown-custom-style',get_template_directory_uri().'/css/style.css',array());
}

add_action('wp_enqueue_scripts','scriptcrown_scripts');
// function register_custom_widget() {
//     register_widget('Custom_Widget');
// }
// add_action('widgets_init', 'register_custom_widget');

function theme_widgets_init() {
    register_sidebar(array(
        'name' => 'Custom Widget Area',
        'id' => 'custom_widget_area',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h5 class="widget-title">',
        'after_title' => '</h5>',
    ));
}

add_action('widgets_init', 'theme_widgets_init');
function gt_get_post_view() {
    $count = get_post_meta( get_the_ID(), 'post_views_count', true );
    return "$count views";
}
function gt_set_post_view() {
    $key = 'post_views_count';
    $post_id = get_the_ID();
    $count = (int) get_post_meta( $post_id, $key, true );
    $count++;
    update_post_meta( $post_id, $key, $count );
}
function gt_posts_column_views( $columns ) {
    $columns['post_views'] = 'Views';
    return $columns;
}
function gt_posts_custom_column_views( $column ) {
    if ( $column === 'post_views') {
        echo gt_get_post_view();
    }
}
add_filter( 'manage_posts_columns', 'gt_posts_column_views' );
add_action( 'manage_posts_custom_column', 'gt_posts_custom_column_views' );