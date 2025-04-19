<?php

/***

* Faqs Post Type

***/



if(! class_exists('ScriptCrown_Faqs_Post_Type')):

class ScriptCrown_Faqs_Post_Type {

	function __construct(){
		// Adds the faqs post type and taxonomies
		add_action('init',array(&$this,'faqs_init'),0);
		// Thumbnail support for faqs posts
		add_theme_support('post-thumbnails',array('faqs'));
	}

	function faqs_init(){

		$labels=array(
			'name'					=> __('Faqs','ScriptCrown'),
			'singular_name'		=> __('Faq Name','ScriptCrown'),
			'add_new'				=> __('Add New','ScriptCrown'),
			'add_new_item'			=> __('Add New Faq','ScriptCrown'),
			'edit_item'			=> __('Edit Faq','ScriptCrown'),
			'new_item'				=> __('Add New Faq','ScriptCrown'),
			'view_item'			=> __('View Faq','ScriptCrown'),
			'search_items'			=> __('Search Faqs','ScriptCrown'),
			'not_found'			=> __('No faqs items found','ScriptCrown'),
			'not_found_in_trash'	=> __('No faqs found in trash','ScriptCrown')
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

		$args=apply_filters('ScriptCrown_faqs_args',$args);
		register_post_type('faqs',$args);
	}

}

new ScriptCrown_Faqs_Post_Type;

endif;