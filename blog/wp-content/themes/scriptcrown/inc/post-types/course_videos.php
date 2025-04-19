<?php

/***

* Course Videos Post Type

***/



if(! class_exists('ScriptCrown_Course_Videos_Post_Type')):

class ScriptCrown_Course_Videos_Post_Type {



	function __construct(){

		// Adds the course_videos post type and taxonomies

		add_action('init',array(&$this,'course_videos_init'),0);

		// Thumbnail support for course_videos posts

		add_theme_support('post-thumbnails',array('course_videos'));

	}



	function course_videos_init(){

		/**

		 * Enable the Course Videos_init custom post type

		 * http://codex.wordpress.org/Function_Reference/register_post_type

		 */

		$labels=array(

			'name'					=> __('Course Videos','ScriptCrown'),

			'singular_name'		=> __('Course Video','ScriptCrown'),

			'add_new'				=> __('Add New','ScriptCrown'),

			'add_new_item'			=> __('Add New Course Video','ScriptCrown'),

			'edit_item'			=> __('Edit Course Video','ScriptCrown'),

			'new_item'				=> __('Add New Course Video','ScriptCrown'),

			'view_item'			=> __('View Course Video','ScriptCrown'),

			'search_items'			=> __('Search Course Videos','ScriptCrown'),

			'not_found'			=> __('No Course Videos found','ScriptCrown'),

			'not_found_in_trash'	=> __('No Course Videos found in trash','ScriptCrown')

		);

		

		$args=array(

		    'labels'=> $labels,

			'public'=> true,

			'publicly_queryable'=> true,

			'show_ui'=> true,

			'query_var'=> true,

			'menu_icon'=> 'dashicons-book-alt',

			'rewrite'=> array('slug'=>'demo-class'),			

			'map_meta_cap'=> true,

			'hierarchical'=> false,

			'menu_position'=> 5,

			'supports'=> array('title','editor','thumbnail','page-attributes')

		); 

		

		$args=apply_filters('ScriptCrown_course_videos_args',$args);

		register_post_type('course_videos',$args);

	}

}

new ScriptCrown_Course_Videos_Post_Type;

endif;