<?php
/***
* Clients Post Type
***/

if(! class_exists('ScriptCrown_Clients_Post_Type')):
class ScriptCrown_Clients_Post_Type {

	function __construct(){
		// Adds the clients post type and taxonomies
		add_action('init',array(&$this,'clients_init'),0);
		// Thumbnail support for clients posts
		add_theme_support('post-thumbnails',array('clients'));
	}

	function clients_init(){
		/**
		 * Enable the Clients_init custom post type
		 * http://codex.wordpress.org/Function_Reference/register_post_type
		 */
		$labels=array(
			'name'					=> __('Clients','ScriptCrown'),
			'singular_name'		=> __('Client Name','ScriptCrown'),
			'add_new'				=> __('Add New','ScriptCrown'),
			'add_new_item'			=> __('Add New Client','ScriptCrown'),
			'edit_item'			=> __('Edit Client','ScriptCrown'),
			'new_item'				=> __('Add New Client','ScriptCrown'),
			'view_item'			=> __('View Client','ScriptCrown'),
			'search_items'			=> __('Search Clients','ScriptCrown'),
			'not_found'			=> __('No clients items found','ScriptCrown'),
			'not_found_in_trash'	=> __('No clients found in trash','ScriptCrown')
		);
		
		$args=array(
		    'labels'=> $labels,
			'public'=> true,
			'publicly_queryable'=> true,
			'show_ui'=> true,
			'query_var'=> true,
			'menu_icon'=> 'dashicons-businessman',
			'rewrite'=> true,			
			'map_meta_cap'=> true,
			'hierarchical'=> false,
			'menu_position'=> 5,
			'supports'=> array('title','thumbnail','page-attributes')
		); 
		
		$args=apply_filters('ScriptCrown_clients_args',$args);
		register_post_type('clients',$args);
	}
}
new ScriptCrown_Clients_Post_Type;
endif;