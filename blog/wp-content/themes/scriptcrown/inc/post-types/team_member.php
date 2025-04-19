<?php
/***
* Team Members Post Type
***/

if(! class_exists('ScriptCrown_Team_Members_Post_Type')):
class ScriptCrown_Team_Members_Post_Type {

	function __construct(){
		// Adds the team_members post type and taxonomies
		add_action('init',array(&$this,'team_members_init'),0);
		// Thumbnail support for team_members posts
		add_theme_support('post-thumbnails',array('team_members'));
	}

	function team_members_init(){
		/**
		 * Enable the Team Members_init custom post type
		 * http://codex.wordpress.org/Function_Reference/register_post_type
		 */
		$labels=array(
			'name'					=> __('Team Members','ScriptCrown'),
			'singular_name'		=> __('Team Member Name','ScriptCrown'),
			'add_new'				=> __('Add New','ScriptCrown'),
			'add_new_item'			=> __('Add New Team Member','ScriptCrown'),
			'edit_item'			=> __('Edit Team Member','ScriptCrown'),
			'new_item'				=> __('Add New Team Member','ScriptCrown'),
			'view_item'			=> __('View Team Member','ScriptCrown'),
			'search_items'			=> __('Search Team Members','ScriptCrown'),
			'not_found'			=> __('No Team Members found','ScriptCrown'),
			'not_found_in_trash'	=> __('No Team Members found in trash','ScriptCrown')
		);
		
		$args=array(
		    'labels'=> $labels,
			'public'=> true,
			'publicly_queryable'=> true,
			'show_ui'=> true,
			'query_var'=> true,
			'menu_icon'=> 'dashicons-groups',
			'rewrite'=> array('slug'=>'team-members'),			
			'map_meta_cap'=> true,
			'hierarchical'=> false,
			'menu_position'=> 5,
			'supports'=> array('title','editor','thumbnail','page-attributes')
		); 
		
		$args=apply_filters('ScriptCrown_team_members_args',$args);
		register_post_type('team_members',$args);
	}
}
new ScriptCrown_Team_Members_Post_Type;
endif;