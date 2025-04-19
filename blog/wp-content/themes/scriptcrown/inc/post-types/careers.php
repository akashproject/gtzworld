<?php
/***
* Carrers Post Type
***/

if(! class_exists('ScriptCrown_Careers_Post_Type')):
class ScriptCrown_Careers_Post_Type {

	function __construct(){
		// Adds the careers post type and taxonomies
		add_action('init',array(&$this,'careers_init'),0);
		// Thumbnail support for careers posts
		add_theme_support('post-thumbnails',array('careers'));
	}

	function careers_init(){
		/**
		 * Enable the careers_init custom post type
		 * http://codex.wordpress.org/Function_Reference/register_post_type
		 */
		$labels=array(
			'name'					=> __('Careers','ScriptCrown'),
			'singular_name'		=> __('Career','ScriptCrown'),
			'add_new'				=> __('Add New','ScriptCrown'),
			'add_new_item'			=> __('Position Title','ScriptCrown'),
			'edit_item'			=> __('Edit Career','ScriptCrown'),
			'new_item'				=> __('Add New Career','ScriptCrown'),
			'view_item'			=> __('View Career','ScriptCrown'),
			'search_items'			=> __('Search Careers','ScriptCrown'),
			'not_found'			=> __('No Career items found','ScriptCrown'),
			'not_found_in_trash'	=> __('No Career found in trash','ScriptCrown')
		);
		
		$args=array(
		    'labels'=> $labels,
			'public'=> true,
			'publicly_queryable'=> true,
			'show_ui'=> true,
			'query_var'=> true,
			'menu_icon'=> 'dashicons-megaphone',
			'rewrite'=> true,			
			'map_meta_cap'=> true,
			'hierarchical'=> false,
			'menu_position'=> 5,
			'supports'=> array('title','page-attributes')
		); 
		
		$args=apply_filters('ScriptCrown_careers_args',$args);
		register_post_type('careers',$args);
	}
}
new ScriptCrown_Careers_Post_Type;
endif;