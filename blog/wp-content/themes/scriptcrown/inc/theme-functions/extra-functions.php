<?php
/**************************************************Admin CSS For All Starts**************************************************/
function admin_custom_css(){
	global $post_type;
	echo '<style type="text/css">
		.mf_field_wrapper .mf_textarea,.mf_field_wrapper .mf_wysiwyg { width: 99%; height: 200px; background: #FFE;}
		.mf_field_wrapper .mf_text { width: 99%; background: #FFE; }
		textarea#casestudy_second_editor { width: 99%; height: 300px; background: #FFF;}
		</style>';
		
	if((isset($_GET['page'])&& $_GET['page']=='more-fields')){
		echo '<style type="text/css">
			caption { display:none; }
			</style>';		
		}	
	}
add_action('admin_head','admin_custom_css');
/**************************************************Admin CSS For All Starts**************************************************/