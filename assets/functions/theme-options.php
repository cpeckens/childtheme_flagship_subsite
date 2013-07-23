<?php
/**
 * Define our settings sections
 *
 * array key=$id, array value=$title in: add_settings_section( $id, $title, $callback, $page );
 * @return array
 */
function flagship_sub_options_page_sections() {
	
	$sections = array();
	// $sections[$id] 				= __($title, 'flagship_sub_textdomain');
	$sections['select_section'] 	= __('Theme Options', 'flagship_sub_textdomain');
	return $sections;	
}

/**
 * Define our form fields (settings) 
 *
 * @return array
 */
function flagship_sub_options_page_fields() {
	// Text Form Fields section
	// Select Form Fields section
	$options[0] = 
	array(
		"section" => "select_section",
		"id"      => FLAGSHIP_SUB_SHORTNAME . "_parent_id",
		"title"   => __( 'Site Parent - Body Class', 'flagship_sub_textdomain' ),
		"desc"    => __( 'Choose the page parent of this site.  This sets the background image by assigning the correct body class', 'flagship_sub_textdomain' ),
		"type"    => "select",
		"std"    => "research",
		"choices" => array( "about", "academics", "admissions", "research", "news", "giving"));
	$options[1] =
	array (		
		"section" => "select_section",
		"id"      => FLAGSHIP_SUB_SHORTNAME . "_menu_id",
		"title"   => __( 'Site Parent - Menu ID', 'flagship_sub_textdomain' ),
		"desc"    => __( 'Enter the menu-item number of the page parent', 'flagship_sub_textdomain' ),
		"type"    => "text",
		"class"   => "numeric",
		"std"    => "");
	$options[2] =
	array (		
		"section" => "select_section",
		"id"      => FLAGSHIP_SUB_SHORTNAME . "_feed_name",
		"title"   => __( 'Homepage Sub-head', 'flagship_sub_textdomain' ),
		"desc"    => __( 'Enter the headline for the news feed on the homepage', 'flagship_sub_textdomain' ),
		"type"    => "text",
		"class"   => "nohtml",
		"std"    => "");
	$options[3] =
	array (		
		"section" => "select_section",
		"id"      => FLAGSHIP_SUB_SHORTNAME . "_news_quantity",
		"title"   => __( 'Homepage Posts', 'flagship_sub_textdomain' ),
		"desc"    => __( 'Enter the number of posts you would like displayed on the homepage', 'flagship_sub_textdomain' ),
		"type"    => "text",
		"class"   => "numeric",
		"std"    => "");
	$options[4] =
	array (		
		"section" => "select_section",
		"id"      => FLAGSHIP_SUB_SHORTNAME . "_breadcrumbs",
		"title"   => __( 'Breadcrumbs', 'flagship_sub_textdomain' ),
		"desc"    => __( 'Do you want breadcrumb navigation on your subpages?', 'flagship_sub_textdomain' ),
		"type"    => "checkbox",
		"std"    => "1");	
	$options[5] =
	array (		
		"section" => "select_section",
		"id"      => FLAGSHIP_SUB_SHORTNAME . "_breadcrumb_home",
		"title"   => __( 'Breadcrumb Name', 'flagship_sub_textdomain' ),
		"desc"    => __( 'What do you want Home to be called in your breadcrumb navigation?', 'flagship_sub_textdomain' ),
		"type"    => "text",
		"class"   => "nohtml",
		"std"    => "Home");
	$options[6] =
	array (		
		"section" => "select_section",
		"id"      => FLAGSHIP_SUB_SHORTNAME . "_google_analytics",
		"title"   => __( 'Google Analytics ID', 'flagship_sub_textdomain' ),
		"desc"    => __( 'Enter your Google Analytics ID ie. UA-2497774-9', 'flagship_sub_textdomain' ),
		"type"    => "text",
		"class"   => "nohtml",
		"std"    => "UA-40512757-1");
	$options[7] =
	array (		
		"section" => "select_section",
		"id"      => FLAGSHIP_SUB_SHORTNAME . "_profile_search",
		"title"   => __( 'Profile Search', 'flagship_sub_textdomain' ),
		"desc"    => __( 'Do you want a search box on your research profile index page?', 'flagship_sub_textdomain' ),
		"type"    => "checkbox",
		"std"    => "0");		
	return $options;	
}

?>