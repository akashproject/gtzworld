<?php
function get_site_logo(){ return get_template_directory_uri().'/images/logo.png';	}

function all_default_values($field){
$default=array();
//Header
$default['scriptcrown_header_logo']=get_site_logo();
$default['scriptcrown_copyright_text']='Copyright 2018 &copy; Weavers Web. All rights reserved.';	

return $default[$field];
}
?>