<?php
add_action('init','scriptcrown_ftn_options');
if(!function_exists('scriptcrown_ftn_options')){
	function scriptcrown_ftn_options(){
		$imagepath=get_stylesheet_directory_uri().'/images/';
		$options=array(
			/* ---------------------------------------------------------------------------- */
			/* Header Setting */
			/* ---------------------------------------------------------------------------- */
			array("name"=> "Header Section",
				"type"=> "heading"),
			array("name"=> "Choose Site Logo",
				"desc"=> "Optimal size: 123px width by 57px height.",
				"id"=> "scriptcrown_header_logo",
				"std"=> all_default_values('scriptcrown_header_logo'),
				"type"=> "upload"),	
			array("name"=> "Choose Footer Logo",
				"desc"=> "Optimal size: 123px width by 57px height.",
				"id"=> "scriptcrown_footer_logo",
				"std"=> all_default_values('scriptcrown_footer_logo'),
				"type"=> "upload"),	
			/* ---------------------------------------------------------------------------- */
			/* Contact Setting */
			/* ---------------------------------------------------------------------------- */
			array("name"=> "Contact Section",
				"type"=> "heading"),
			array("name"=> "Mobile",
				"desc"=> "Enter Mobile Number",
				"id"=> "scriptcrown_mobile",
				"std"=> all_default_values('scriptcrown_mobile'),
				"type"=> "text"),
			array("name"=> "Whatsapp No",
				"desc"=> "Enter Whatsapp Number",
				"id"=> "scriptcrown_whatsappno",
				"std"=> all_default_values('scriptcrown_whatsappno'),
				"type"=> "text"),
			array("name"=> "Email",
				"desc"=> "Enter Email Address",
				"id"=> "scriptcrown_email",
				"std"=> all_default_values('scriptcrown_email'),
				"type"=> "text"),
			array("name"=> "Address",
				"desc"=> "Enter Address",
				"id"=> "scriptcrown_address",
				"std"=> all_default_values('scriptcrown_address'),
				"type"=> "textarea"),
			array("name"=> "gmap",
				"desc"=> "Enter Google Map Code",
				"id"=> "scriptcrown_gmap",
				"std"=> all_default_values('scriptcrown_gmap'),
				"type"=> "textarea"),
			
			/* ---------------------------------------------------------------------------- */
			/* Social Setting */
			/* ---------------------------------------------------------------------------- */
			array("name"=> "Social Section",
				"type"=> "heading"),
			array("name"=> "Facebook",
				"desc"=> "Enter Facebook Url",
				"id"=> "scriptcrown_facebook",
				"std"=> all_default_values('scriptcrown_facebook'),
				"type"=> "text"),
			array("name"=> "Whatsapp",
				"desc"=> "Enter Whatsapp Url",
				"id"=> "scriptcrown_whatsapp",
				"std"=> all_default_values('scriptcrown_whatsapp'),
				"type"=> "text"),
			array("name"=> "Twitter",
				"desc"=> "Enter Twitter Address",
				"id"=> "scriptcrown_twitter",
				"std"=> all_default_values('scriptcrown_twitter'),
				"type"=> "text"),
			array("name"=> "Linkedin",
				"desc"=> "Enter Linkedin Url",
				"id"=> "scriptcrown_linkedin",
				"std"=> all_default_values('scriptcrown_linkedin'),
				"type"=> "text"),
			array("name"=> "Youtube",
				"desc"=> "Enter Youtube Url",
				"id"=> "scriptcrown_youtube",
				"std"=> all_default_values('scriptcrown_youtube'),
				"type"=> "text"),
			/* ---------------------------------------------------------------------------- */
			/* UTM Setting */
			/* ---------------------------------------------------------------------------- */
			array("name"=> "UTM Section",
				"type"=> "heading"),
			array("name"=> "Utm Campaign",
				"desc"=> "Enter utm campaign content",
				"id"=> "scriptcrown_campaign_text",
				"std"=> all_default_values('scriptcrown_campaign_text'),
				"type"=> "text"),
			array("name"=> "Utm Source",
				"desc"=> "Enter utm source content",
				"id"=> "scriptcrown_source_text",
				"std"=> all_default_values('scriptcrown_source_text'),
				"type"=> "text"),
			/* ---------------------------------------------------------------------------- */
			/* OTP Setting */
			/* ---------------------------------------------------------------------------- */
			array("name"=> "One Time Password",
				"type"=> "heading"),
			array("name"=> "One Time Password",
				"desc"=> "Enable One Time Password",
				"id"=> "scriptcrown_otp_text",
				"std"=> all_default_values('scriptcrown_otp_text'),
				"type"=> "checkbox"),
			/* ---------------------------------------------------------------------------- */
			/* Footer Setting */
			/* ---------------------------------------------------------------------------- */
			array("name"=> "Footer Section",
				"type"=> "heading"),
			array("name"=> "Copyright",
				"desc"=> "Enter copyright text content",
				"id"=> "scriptcrown_copyright_text",
				"std"=> all_default_values('scriptcrown_copyright_text'),
				"type"=> "textarea"),	
			
			);		
		scriptcrown_ftn_update_option('of_template',$options);
		}
	}
?>