<?php
/***
* Case Studies Post Type
***/

if(! class_exists('ScriptCrown_Case_Studies_Post_Type')):
class ScriptCrown_Case_Studies_Post_Type {

	function __construct(){
		// Adds the case_studies post type and taxonomies
		add_action('init',array(&$this,'case_studies_init'),0);
		// Thumbnail support for case_studies posts
		add_theme_support('post-thumbnails',array('case_studies'));
	}

	function case_studies_init(){
		/**
		 * Enable the Case Studies_init custom post type
		 * http://codex.wordpress.org/Function_Reference/register_post_type
		 */
		$labels=array(
			'name'					=> __('Case Studies','ScriptCrown'),
			'singular_name'		=> __('Case Study Name','ScriptCrown'),
			'add_new'				=> __('Add New','ScriptCrown'),
			'add_new_item'			=> __('Add New Case Study','ScriptCrown'),
			'edit_item'			=> __('Edit Case Study','ScriptCrown'),
			'new_item'				=> __('Add New Case Study','ScriptCrown'),
			'view_item'			=> __('View Case Study','ScriptCrown'),
			'search_items'			=> __('Search Case Studies','ScriptCrown'),
			'not_found'			=> __('No Case Studies found','ScriptCrown'),
			'not_found_in_trash'	=> __('No Case Studies found in trash','ScriptCrown')
		);
		
		$args=array(
		    'labels'=> $labels,
			'public'=> true,
			'publicly_queryable'=> true,
			'show_ui'=> true,
			'query_var'=> true,
			'menu_icon'=> 'dashicons-book-alt',
			'rewrite'=> array('slug'=>'case-studies'),			
			'map_meta_cap'=> true,
			'hierarchical'=> false,
			'menu_position'=> 5,
			'supports'=> array('title','editor','thumbnail','page-attributes')
		); 
		
		$args=apply_filters('ScriptCrown_case_studies_args',$args);
		register_post_type('case_studies',$args);
		
	 // Add new taxonomy,NOT hierarchical(like tags)
		$labels_one=array(
			'name'             => _x('Service Types','taxonomy general name'),
			'singular_name'    => _x('Service Type','taxonomy singular name'),
			'search_items'     => __('Search Service Types'),
			'popular_items'    => __('Popular Service Types'),
			'all_items'        => __('All Service Types'),
			'parent_item'      => null,
			'parent_item_colon'=> null,
			'edit_item'        => __('Edit Service Type'),
			'update_item'      => __('Update Service Type'),
			'add_new_item'     => __('Add New Service Type'),
			'new_item_name'    => __('New Service Type Name'),
			'separate_items_with_commas'=> __('Separate service types with commas'),
			'add_or_remove_items'=> __('Add or remove service types'),
			'choose_from_most_used'=> __('Choose from the most used service types'),
			'not_found'        => __('No service types found.'),
			'menu_name'        => __('Service Types'),
		);
	
		$args_one=array(
			'hierarchical'=> true,
			'labels'      => $labels_one,
			'show_ui'     => true,
			'show_admin_column'=> true,
			'update_count_callback'=> '_update_post_term_count',
			'query_var'   => true,
			'rewrite'     => array('slug'=> 'service_type'),
		);
	
		register_taxonomy('service_type','case_studies',$args_one);	
		
	  // Add new taxonomy,NOT hierarchical(like tags)
		$labels_two=array(
			'name'             => _x('Industry Types','taxonomy general name'),
			'singular_name'    => _x('Industry Type','taxonomy singular name'),
			'search_items'     => __('Search Industry Types'),
			'popular_items'    => __('Popular Industry Types'),
			'all_items'        => __('All Industry Types'),
			'parent_item'      => null,
			'parent_item_colon'=> null,
			'edit_item'        => __('Edit Industry Type'),
			'update_item'      => __('Update Industry Type'),
			'add_new_item'     => __('Add New Industry Type'),
			'new_item_name'    => __('New Industry Type Name'),
			'separate_items_with_commas'=> __('Separate Industry types with commas'),
			'add_or_remove_items'=> __('Add or remove Industry types'),
			'choose_from_most_used'=> __('Choose from the most used Industry types'),
			'not_found'        => __('No Industry types found.'),
			'menu_name'        => __('Industry Types'),
		);
	
		$args_two=array(
			'hierarchical'=> true,
			'labels'      => $labels_two,
			'show_ui'     => true,
			'show_admin_column'=> true,
			'update_count_callback'=> '_update_post_term_count',
			'query_var'   => true,
			'rewrite'     => array('slug'=> 'industry_type'),
		);
	
		register_taxonomy('industry_type','case_studies',$args_two);	
	}
}
new ScriptCrown_Case_Studies_Post_Type;
endif;