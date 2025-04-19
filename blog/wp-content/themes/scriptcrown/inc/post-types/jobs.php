<?php
/***
* Jobs Post Type
***/

if(! class_exists('ScriptCrown_Jobs_Post_Type')):
class ScriptCrown_Jobs_Post_Type {

	function __construct(){
		// Adds the jobs post type and taxonomies
		add_action('init',array(&$this,'jobs_init'),0);
		// Thumbnail support for jobs posts
		add_theme_support('post-thumbnails',array('jobs'));
	}

	function jobs_init(){
		/**
		 * Enable the Jobs_init custom post type
		 * http://codex.wordpress.org/Function_Reference/register_post_type
		 */
		$labels=array(
			'name'					=> __('Jobs','ScriptCrown'),
			'singular_name'		=> __('Job Name','ScriptCrown'),
			'add_new'				=> __('Add New','ScriptCrown'),
			'add_new_item'			=> __('Add New Job','ScriptCrown'),
			'edit_item'			=> __('Edit Job','ScriptCrown'),
			'new_item'				=> __('Add New Job','ScriptCrown'),
			'view_item'			=> __('View Job','ScriptCrown'),
			'search_items'			=> __('Search Jobs','ScriptCrown'),
			'not_found'			=> __('No jobs items found','ScriptCrown'),
			'not_found_in_trash'	=> __('No jobs found in trash','ScriptCrown')
		);
		
		$args=array(
		    'labels'=> $labels,
			'public'=> true,
			'publicly_queryable'=> true,
			'show_ui'=> true,
			'query_var'=> true,
			'menu_icon'=> 'dashicons-id',
			'rewrite'=> true,			
			'map_meta_cap'=> true,
			'hierarchical'=> false,
			'menu_position'=> 5,
			'supports'=> array('title','thumbnail','editor','page-attributes')
		); 
		
		$args=apply_filters('ScriptCrown_jobs_args',$args);
		register_post_type('jobs',$args);
	}
}
new ScriptCrown_Jobs_Post_Type;
endif;