<?php

/***

* Courses Post Type

***/



if(! class_exists('ScriptCrown_Courses_Post_Type')):

class ScriptCrown_Courses_Post_Type {



	function __construct(){

		// Adds the courses post type and taxonomies

		add_action('init',array(&$this,'courses_init'),0);

		// Thumbnail support for courses posts

		add_theme_support('post-thumbnails',array('courses'));

	}



	function courses_init(){

		/**

		 * Enable the Courses_init custom post type

		 * http://codex.wordpress.org/Function_Reference/register_post_type

		 */

		$labels=array(

			'name'					=> __('Courses','ScriptCrown'),

			'singular_name'		=> __('Course Name','ScriptCrown'),

			'add_new'				=> __('Add New','ScriptCrown'),

			'add_new_item'			=> __('Add New Course','ScriptCrown'),

			'edit_item'			=> __('Edit Course','ScriptCrown'),

			'new_item'				=> __('Add New Course','ScriptCrown'),

			'view_item'			=> __('View Course','ScriptCrown'),

			'search_items'			=> __('Search Courses','ScriptCrown'),

			'not_found'			=> __('No courses items found','ScriptCrown'),

			'not_found_in_trash'	=> __('No courses found in trash','ScriptCrown')

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

			'supports'=> array('title','thumbnail','editor','page-attributes','excerpt', 'comments')

		); 

		

		$args=apply_filters('ScriptCrown_courses_args',$args);

		register_post_type('courses',$args);

		// Add new taxonomy,NOT hierarchical(like tags)

		$labels_one=array(

			'name'             => _x('Types','taxonomy general name'),

			'singular_name'    => _x('Type','taxonomy singular name'),

			'search_items'     => __('Search Types'),

			'popular_items'    => __('Popular Types'),

			'all_items'        => __('All Types'),

			'parent_item'      => null,

			'parent_item_colon'=> null,

			'edit_item'        => __('Edit Type'),

			'update_item'      => __('Update Type'),

			'add_new_item'     => __('Add New Type'),

			'new_item_name'    => __('New Type Name'),

			'separate_items_with_commas'=> __('Separate types with commas'),

			'add_or_remove_items'=> __('Add or remove types'),

			'choose_from_most_used'=> __('Choose from the most used types'),

			'not_found'        => __('No types found.'),

			'menu_name'        => __('Types'),

		);

	

		$args_one=array(

			'hierarchical'=> true,

			'labels'      => $labels_one,

			'show_ui'     => true,

			'show_admin_column'=> true,

			'update_count_callback'=> '_update_post_term_count',

			'query_var'   => true,

			'rewrite'     => array('slug'=> 'course_type'),

		);

	

		register_taxonomy('course_type','courses',$args_one);	

	}

}

new ScriptCrown_Courses_Post_Type;

endif;