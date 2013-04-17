<?php   



/*
=Post formats
*/

add_action( 'after_setup_theme', 'childishlysimple_add_post_formats' ); 

function childishlysimple_add_post_formats( ) {
add_theme_support( 'post-formats', array( 'aside', 'chat', 'gallery', 'image', 'link', 'quote', 'status', 'video', 'audio' ) ); 
}





/*
=Automatic feed links (in the <head></head> section of the web page)
*/

add_theme_support('automatic-feed-links');






/*
 =Featured images 
*/

add_theme_support( 'post-thumbnails' );







/*
=Custom background
http://codex.wordpress.org/Function_Reference/add_theme_support
*/

add_theme_support( 'custom-background' );






/* 
=Style editor
	
Thanks to: http://www.deluxeblogtips.com/2010/05/editor-style-wordpress-30.html
See also:	http://codex.wordpress.org/Function_Reference/add_editor_style
See    style-tinymce.css    for more information.
*/

add_editor_style('style-tinymce.css'); 






/*
=Excerpt length	Change the number of words shown in the default excerpt (but NOT when you manually enter an excerpt into the excerpt box beneath a post). 
*/

add_filter( 'excerpt_length', 'childishlysimple_new_excerpt_length' );

function childishlysimple_new_excerpt_length( $length ) {
return 55;
}




/*
=Untitled  Add 'Untitled' to untitled posts
*/
add_filter('the_title', 'childishlysimple_title');
function childishlysimple_title($title) {
if ($title == '') {
return 'Untitled';
} else {
return $title;
}
}




/*
=Title Filter	 Filter the title tag in the header of each page
*/

function childishlysimple_filter_wp_title( $title, $sep, $sep_location  ) {

    $site_name = get_bloginfo( 'name' );

    $filtered_title =  $title . $site_name ;

    return $filtered_title;
}

add_filter( 'wp_title', 'childishlysimple_filter_wp_title', 10, 3 );
//	Thanks to http://wikiduh.com/1102/using-the-wp_title-filter-in-wordpress
//	http://wordpress.stackexchange.com/questions/32622/when-calling-wp-title-do-you-have-to-create-some-kind-of-title-php-file






/*
=Remove 10px that WP adds to the divs around captioned images.  Thanks to:  Justin Tadlock  http://devpress.com/blog/captions-in-wordpress/
*/

add_filter( 'img_caption_shortcode', 'childishlysimple_cleaner_caption', 10, 3 );

function childishlysimple_cleaner_caption( $output, $attr, $content ) {

if ( is_feed() ) return $output;
//	We're not worried abut captions in feeds, so just return the output here. 

	$defaults = array(
		'id' => '',
		'align' => 'alignnone',
		'width' => '',
		'caption' => ''
				);
	//	Set up the default arguments.
	
	$attr = shortcode_atts( $defaults, $attr );
	//	Merge the defaults with user input. 


	if ( 1 > $attr['width'] || empty( $attr['caption'] ) ) return $content;
	//	If the width is less than 1 or there is no caption, return the content wrapped between the [caption]< tags. 
		

	$attributes = ( !empty( $attr['id'] ) ? ' id="' . esc_attr( $attr['id'] ) . '"' : '' );
	$attributes .= ' class="wp-caption ' . esc_attr( $attr['align'] ) . '"';
	$attributes .= ' style="width: ' . esc_attr( $attr['width'] ) . 'px"';
	//	Set up the attributes for the caption <div>. 

	
	$output = '<div' . $attributes .'>';
	//	Open the caption <div>.


	$output .= do_shortcode( $content );
	//	Allow shortcodes for the content the caption was created for. 

	
	$output .= '<p class="wp-caption-text">' . $attr['caption'] . '</p>';
	//	Append the caption text. 

	
	$output .= '</div>';
	//	Close the caption </div>. 

	
	return $output;
	//	Return the formatted, clean caption. 
	
}	//	End function childishlysimple_cleaner_caption






/*
=Change text [...] after the default excerpt
*/

add_filter( 'excerpt_more', 'childishlysimple_new_excerpt_more' );

function childishlysimple_new_excerpt_more( $post ) {
		global $post;
		return '<span class="more-excerpt"><a class="more-excerpt-link" href="'. get_permalink( $post->ID ) . '">' . ' (continue reading...)  ' . '</a></span>';
}






/*
=Admin screen defaults. Overcomes 3.1 problem of not showing custom fields.
Thanks to: billerickson   http://wordpress.org/support/topic/extra-fields-dissapeared-in-new-post?replies=7
*/

add_filter( 'default_hidden_meta_items', 'childishlysimple_be_hidden_meta_items', 10, 2 );

function childishlysimple_be_hidden_meta_items( $hidden, $screen ) {
		if ( 'post' == $screen->base || 'page' == $screen->base )
		$hidden = array( 'slugdiv', 'trackbacksdiv', 'postexcerpt', 'commentstatusdiv', 'commentsdiv', 'authordiv', 'revisionsdiv' ); // removed 'postcustom',
		return $hidden;
}






/*
=Default gravatar. With thanks to: http://www.wpbeginner.com/wp-tutorials/how-to-change-the-default-gravatar-on-wordpress/ 
*/

add_filter( 'avatar_defaults', 'childishlysimple_newgravatar' );

function childishlysimple_newgravatar( $avatar_defaults ) {
    $myavatar =  get_template_directory_uri()  . '/images/gravatar1.gif';
    $avatar_defaults[$myavatar] = "Another Avatar"; // The name that appears in Admin / Settings / Discussion, where you select a default avatar
    return $avatar_defaults;
}






/*
=Browser detection. Used to add a class to the body div.	With thanks to: http://www.nathanrice.net/blog/browser-detection-and-the-body_class-function/
*/

add_filter('body_class','childishlysimple_browser_body_class');
function childishlysimple_browser_body_class($classes) {
	global $is_lynx, $is_gecko, $is_IE, $is_opera, $is_NS4, $is_safari, $is_chrome, $is_iphone;

	if($is_lynx) $classes[] = 'lynx';
	elseif($is_gecko) $classes[] = 'gecko';
	elseif($is_opera) $classes[] = 'opera';
	elseif($is_NS4) $classes[] = 'ns4';
	elseif($is_safari) $classes[] = 'safari';
	elseif($is_chrome) $classes[] = 'chrome';
	elseif($is_IE) $classes[] = 'ie';
	else $classes[] = 'unknown';

	if($is_iphone) $classes[] = 'iphone';
	return $classes;
}






/*
=Custom menus
*/


add_action( 'init', 'childishlysimple_register_my_menus' );

function childishlysimple_register_my_menus( ) {
register_nav_menus( 
				array( 
					'menu-1' =>  'Top Menu (Childishly Simple Theme)' , // menu-1 ( or any other text ) is used internally by WP.  Top Menu is the user-friendly name displayed in the Admin Panel
					'menu-2' => 'Bottom Menu (Childishly Simple Theme)',
					//'menu-3' =>  'Menu Somewhere Else',
					//'menu-4' => 'Menu Some Place Else' ,
					 )
			 );
} //	End  function childishlysimple_register_my_menus( )

//	This registers some menu boxes in the Admin Panel. You then have to drag and drop links into these boxes from within the Admin Panel.
//	The menu is displayed on an appropriate template file by adding some code to that file e.g.   'theme_location' => 'menu-1' etc.   which would be  code to display    menu-1 






/*
=Childishly Simple theme options
*/

add_action( 'admin_menu', 'childishlysimple_options_layout_menu' );	
//	Comment out the above line to remove the Childishly Simple Options page completely from the Admin screen.
//	Any options that have already been saved will still exist in the database.


function childishlysimple_options_layout_menu( ) {
	global $childishlysimple_add_my_options;
	//	Add a submenu item to the Appearance menu  http://codex.wordpress.org/Function_Reference/add_theme_page 
	
		
	$childishlysimple_options_style ='';
	
	
	$childishlysimple_options_style = '<span class="childishlysimple-options-submenu" style="background:transparent url(' . get_template_directory_uri() . '/images/admin-options.gif) top left no-repeat; padding:0 0 0 20px;">Childishly Simple Options</span>';
	
	
	$childishlysimple_add_my_options = add_theme_page( 'Childishly Simple Options', $childishlysimple_options_style , 'edit_theme_options', 'childishlysimple_options','childishlysimple_function_to_create_layout');


	//	=Add scripts just to the options page
	add_action( 'admin_enqueue_scripts', 'childishlysimple_admin_layout_enqueue_scripts' );

	//	Set up the various options using register_setting
	add_action( 'admin_init', 'childishlysimple_set_up_my_layout' ); 
}







function childishlysimple_admin_layout_enqueue_scripts( $hook_suffix) {
	global 	$childishlysimple_add_my_options;
	
	if ( $childishlysimple_add_my_options == $hook_suffix ) {
	
		wp_register_style( 'style-options.css', get_template_directory_uri() . '/style-options.css', '', '', 'screen' );
		wp_enqueue_style( 'style-options.css' );
		
		wp_enqueue_style( 'wp-color-picker' );
		wp_enqueue_script( 'wp-color-picker' );
		 
		wp_register_script( 'wp-color-picker-js', get_template_directory_uri() . '/javascript/wpcolorpicker.js' );
		wp_enqueue_script( 'wp-color-picker-js' );
	
	}
}





// Child theme can add extra register_settings for an updated options page
if ( !function_exists( 'childishlysimple_set_up_my_layout' ) ) {

function childishlysimple_set_up_my_layout( ) {

	//	Start the process of setting up options. Every option has to be named here first before it can be used in     function-to-create-layout.php
	//	By prefixing each option with childishlysimple01_   you can do a search and replace at any time and thus change all options at once for testing purposes
	//	NOTE: THERE IS A 64 CHARACTER LIMIT TO THE OPTION NAME e.g.  childishlysimple01_liquid_or_fixed
	
	register_setting( 'register_this_layout', 'childishlysimple01_liquid_or_fixed', 'childishlysimple_options_sanitisation' );  //	Liquid or fixed layout
	register_setting( 'register_this_layout', 'childishlysimple01_site_width', 'childishlysimple_options_sanitisation' ); //	Site width
	register_setting( 'register_this_layout', 'childishlysimple01_sitewide_layout');  //	The site layout e.g. one-column
	
	register_setting( 'register_this_layout', 'childishlysimple01_body_background_color', 'childishlysimple_options_sanitisation'); //	Body background color
	register_setting( 'register_this_layout', 'childishlysimple01_content_background_color', 'childishlysimple_options_sanitisation' ); //	Content background color
	register_setting( 'register_this_layout', 'childishlysimple01_site_border_color', 'childishlysimple_options_sanitisation' ); //	Border background color
	register_setting( 'register_this_layout', 'childishlysimple01_site_background_color', 'childishlysimple_options_sanitisation' ); //	Site background color
	
	register_setting( 'register_this_layout', 'childishlysimple01_index_heading', 'childishlysimple_options_sanitisation' ); //	Home page heading
	
	register_setting( 'register_this_layout', 'childishlysimple01_left_sidebar', 'childishlysimple_options_sanitisation' ); //	Left sidebar width
	register_setting( 'register_this_layout', 'childishlysimple01_right_sidebar', 'childishlysimple_options_sanitisation' ); //	Right sidebar width
	register_setting( 'register_this_layout', 'childishlysimple01_sidebar_top_spacing', 'childishlysimple_options_sanitisation' ); //	Sidebar top spacing
	
	register_setting( 'register_this_layout', 'childishlysimple01_left_sidebar_items_selected' ); //	Selected left-sidebar items
	register_setting( 'register_this_layout', 'childishlysimple01_right_sidebar_items_selected' ); //	Selected right-sidebar items
	
	register_setting( 'register_this_layout', 'childishlysimple01_left_sidebar_item_background_color', 'childishlysimple_options_sanitisation' ); //	Left sidebar item background color
	register_setting( 'register_this_layout', 'childishlysimple01_left_sidebar_item_border_color', 'childishlysimple_options_sanitisation' ); //	Left sidebar item border color
	register_setting( 'register_this_layout', 'childishlysimple01_left_sidebar_item_heading_background_color', 'childishlysimple_options_sanitisation' ); //  Left sidebar item heading background color
	register_setting( 'register_this_layout', 'childishlysimple01_left_sidebar_item_heading_font_color', 'childishlysimple_options_sanitisation' ); //	Left sidebar item heading font color
	register_setting( 'register_this_layout', 'childishlysimple01_left_sidebar_font_color', 'childishlysimple_options_sanitisation' );  //	Left sidebar font color
	register_setting( 'register_this_layout', 'childishlysimple01_left_sidebar_link_color', 'childishlysimple_options_sanitisation' );  //	Left sidebar link color
	register_setting( 'register_this_layout', 'childishlysimple01_left_sidebar_hover_color', 'childishlysimple_options_sanitisation' );  //	Left sidebar hover color

	register_setting( 'register_this_layout', 'childishlysimple01_right_sidebar_item_background_color', 'childishlysimple_options_sanitisation' ); //	Right sidebar item background color
	register_setting( 'register_this_layout', 'childishlysimple01_right_sidebar_item_border_color', 'childishlysimple_options_sanitisation' ); //	Right sidebar item border color
	register_setting( 'register_this_layout', 'childishlysimple01_right_sidebar_item_heading_background_color', 'childishlysimple_options_sanitisation' ); //	Right sidebar item heading background color
	register_setting( 'register_this_layout', 'childishlysimple01_right_sidebar_item_heading_font_color', 'childishlysimple_options_sanitisation' ); //	Right sidebar item heading font color
	register_setting( 'register_this_layout', 'childishlysimple01_right_sidebar_font_color', 'childishlysimple_options_sanitisation' );  //	Right sidebar font color
	register_setting( 'register_this_layout', 'childishlysimple01_right_sidebar_link_color', 'childishlysimple_options_sanitisation');  //	Right sidebar link color
	register_setting( 'register_this_layout', 'childishlysimple01_right_sidebar_hover_color', 'childishlysimple_options_sanitisation');  //	Right sidebar hover color
	
	register_setting( 'register_this_layout', 'childishlysimple01_short_left_sidebar_background_color', 'childishlysimple_options_sanitisation' ); // Short left sidebar background color
	register_setting( 'register_this_layout', 'childishlysimple01_short_right_sidebar_background_color', 'childishlysimple_options_sanitisation' ); // Short right sidebar background color
	
	register_setting( 'register_this_layout', 'childishlysimple01_long_left_sidebar_background_color', 'childishlysimple_options_sanitisation' ); // Long left sidebar background color
	register_setting( 'register_this_layout', 'childishlysimple01_long_right_sidebar_background_color', 'childishlysimple_options_sanitisation' ); // Long right sidebar background color
	
	register_setting( 'register_this_layout', 'childishlysimple01_footer_items_selected' ); //	Selected footer boxes
	
	register_setting( 'register_this_layout', 'childishlysimple01_footer_item_background_color', 'childishlysimple_options_sanitisation'); //	Footer item color
	register_setting( 'register_this_layout', 'childishlysimple01_footer_item_border_color', 'childishlysimple_options_sanitisation' ); //	Footer item border color
	register_setting( 'register_this_layout', 'childishlysimple01_footer_item_heading_background_color', 'childishlysimple_options_sanitisation' ); //	Footer item heading background color
	register_setting( 'register_this_layout', 'childishlysimple01_footer_item_heading_font_color', 'childishlysimple_options_sanitisation' ); //	Footer item heading font color
	register_setting( 'register_this_layout', 'childishlysimple01_footer_font_color', 'childishlysimple_options_sanitisation' );  //	Footer  font color
	register_setting( 'register_this_layout', 'childishlysimple01_footer_link_color', 'childishlysimple_options_sanitisation' );  //	Footer  link color
	register_setting( 'register_this_layout', 'childishlysimple01_footer_hover_color', 'childishlysimple_options_sanitisation' );  //	Footer hover color
	
	register_setting( 'register_this_layout', 'childishlysimple01_footer_background_color', 'childishlysimple_options_sanitisation' ); //	Footer background color
	register_setting( 'register_this_layout', 'childishlysimple01_footer_spacing', 'childishlysimple_options_sanitisation' ); //	Footer spacing
	
	register_setting( 'register_this_layout', 'childishlysimple01_utility_link_color', 'childishlysimple_options_sanitisation'); //	Utility links - link color (RSS, Powered by WordPress, Copyright)
	register_setting( 'register_this_layout', 'childishlysimple01_utility_hover_color', 'childishlysimple_options_sanitisation' ); //	Utility links - hover color (RSS, Powered by WordPress, Copyright)
	
	register_setting( 'register_this_layout', 'childishlysimple01_category_heading_font_color', 'childishlysimple_options_sanitisation' ); //	Category heading font color
	register_setting( 'register_this_layout', 'childishlysimple01_post_title_font_color', 'childishlysimple_options_sanitisation' );  //	Post title font color - the title of each post
	register_setting( 'register_this_layout', 'childishlysimple01_post_title_font_hover_color', 'childishlysimple_options_sanitisation' );  //	Post title font hover color - when hovered over
	register_setting( 'register_this_layout', 'childishlysimple01_post_border_color', 'childishlysimple_options_sanitisation' ); //	Post border color
	register_setting( 'register_this_layout', 'childishlysimple01_post_margin_bottom', 'childishlysimple_options_sanitisation' ); //	Post margin bottom
	
	register_setting( 'register_this_layout', 'childishlysimple01_post_background_color', 'childishlysimple_options_sanitisation' ); //	Post background color
	register_setting( 'register_this_layout', 'childishlysimple01_post_font_color', 'childishlysimple_options_sanitisation' );  //	Post and body font color
	register_setting( 'register_this_layout', 'childishlysimple01_body_and_post_link_color', 'childishlysimple_options_sanitisation' );  //	Post and body link color
	register_setting( 'register_this_layout', 'childishlysimple01_body_and_post_hover_color', 'childishlysimple_options_sanitisation' );  //	Post and body hover color
	
	register_setting( 'register_this_layout', 'childishlysimple01_top_navigation_bar_background_color', 'childishlysimple_options_sanitisation' ); //	Top menu navigation bar background color
	register_setting( 'register_this_layout', 'childishlysimple01_top_navigation_bar_top_border_color', 'childishlysimple_options_sanitisation' ); //	Top menu navigation bar top border color
	register_setting( 'register_this_layout', 'childishlysimple01_top_navigation_bar_bottom_border_color', 'childishlysimple_options_sanitisation' ); //	Top menu navigation bar bottom border color
	register_setting( 'register_this_layout', 'childishlysimple01_top_navigation_bar_link_color', 'childishlysimple_options_sanitisation' ); //	Top menu navigation bar link color
	register_setting( 'register_this_layout', 'childishlysimple01_top_navigation_bar_hover_color', 'childishlysimple_options_sanitisation' ); //	Top menu navigation bar hover color
	
	register_setting( 'register_this_layout', 'childishlysimple01_top_dropdown_menu_background_color', 'childishlysimple_options_sanitisation' ); //	Top menu dropdown background color
	register_setting( 'register_this_layout', 'childishlysimple01_top_dropdown_menu_hover_background_color', 'childishlysimple_options_sanitisation' ); //	Top menu dropdown hover background color
	register_setting( 'register_this_layout', 'childishlysimple01_top_dropdown_menu_active_background_color', 'childishlysimple_options_sanitisation' ); //	Top menu dropdown active link background color
	register_setting( 'register_this_layout', 'childishlysimple01_top_dropdown_menu_border_color', 'childishlysimple_options_sanitisation' ); //	Top menu dropdown border color	
	register_setting( 'register_this_layout', 'childishlysimple01_top_dropdown_menu_font_color', 'childishlysimple_options_sanitisation' ); //	Top menu dropdown font color
	register_setting( 'register_this_layout', 'childishlysimple01_top_dropdown_menu_hover_font_color', 'childishlysimple_options_sanitisation' ); //	Top menu dropdown hover font color	

	register_setting( 'register_this_layout', 'childishlysimple01_miscellaneous_stuff' );  //	Miscellaneous items
	
	register_setting( 'register_this_layout', 'childishlysimple01_bottom_navigation_bar_background_color', 'childishlysimple_options_sanitisation' ); //	Bottom menu navigation bar background color	
	register_setting( 'register_this_layout', 'childishlysimple01_bottom_navigation_bar_link_color', 'childishlysimple_options_sanitisation' ); //	Bottom menu navigation bar link color
	register_setting( 'register_this_layout', 'childishlysimple01_bottom_navigation_bar_hover_color', 'childishlysimple_options_sanitisation' ); //	Bottom menu navigation bar hover color
	register_setting( 'register_this_layout', 'childishlysimple01_bottom_navigation_bar_top_border_color', 'childishlysimple_options_sanitisation' ); //	Bottom menu navigation bar top border color
	register_setting( 'register_this_layout', 'childishlysimple01_bottom_navigation_bar_bottom_border_color', 'childishlysimple_options_sanitisation' ); //	Bottom menu navigation bar bottom border color	
	
	register_setting( 'register_this_layout', 'childishlysimple01_bottom_dropdown_menu_link_background_color', 'childishlysimple_options_sanitisation' ); //	Bottom menu dropdown link background color
	register_setting( 'register_this_layout', 'childishlysimple01_bottom_dropdown_menu_hover_background_color', 'childishlysimple_options_sanitisation' ); //	Bottom menu dropdown hoverbackground color
	register_setting( 'register_this_layout', 'childishlysimple01_bottom_dropdown_menu_active_background_color', 'childishlysimple_options_sanitisation' ); //	Bottom menu dropdown active link background color
	register_setting( 'register_this_layout', 'childishlysimple01_bottom_dropdown_menu_border_color', 'childishlysimple_options_sanitisation' ); //	Bottom menu dropdown border color	
	register_setting( 'register_this_layout', 'childishlysimple01_bottom_dropdown_menu_font_color', 'childishlysimple_options_sanitisation' ); //	Bottom menu dropdown font color	
	register_setting( 'register_this_layout', 'childishlysimple01_bottom_dropdown_menu_hover_font_color', 'childishlysimple_options_sanitisation' ); //	Bottom menu dropdown hover font color	
	
	register_setting( 'register_this_layout', 'childishlysimple01_layout_details' );	//	An array of all the saved option values. including defaults and error	
}
}






function childishlysimple_options_sanitisation ($input) { 	
$childishlysimple_options_allowed_html = array('strong' => array());
$input = wp_kses($input, $childishlysimple_options_allowed_html);
$input = esc_attr($input);
return $input;
} 
// Thanks to:	http://wp.tutsplus.com/tutorials/the-complete-guide-to-the-wordpress-settings-api-part-7-validation-sanitisation-and-input-i/






// Child theme can add extra options into the options page
if ( !function_exists( 'childishlysimple_function_to_create_layout' ) ) {

	function childishlysimple_function_to_create_layout( ) { 
										   require_once ( get_template_directory() . '/function-to-create-layout.php');
	}
}







/*
=Register dynamic sidebars (for widgets)  
*/

add_action( 'widgets_init', 'childishlysimple_register_sidebars' ); //	Thanks to:  http://justintadlock.com/archives/2010/11/08/sidebars-in-wordpress

function childishlysimple_register_sidebars() {

$selected_widgets = array( );
$selected_widgets = get_option ( 'childishlysimple01_layout_details' ); 

$selected_left_sidebar_widgets = array( );
if( isset ( $selected_widgets [ 'selected_left_sidebar_items' ] ) ) {
$selected_left_sidebar_widgets = $selected_widgets [ 'selected_left_sidebar_items' ]; 
} 


$selected_right_sidebar_widgets  = array( );
if ( isset ( $selected_widgets [ 'selected_right_sidebar_items' ] ) ) {
$selected_right_sidebar_widgets = $selected_widgets ['selected_right_sidebar_items']; 	
}

$selected_footer_widgets  = array( );
if ( isset ( $selected_widgets [ 'selected_footer_items' ] ) ) {
$selected_footer_widgets = $selected_widgets [ 'selected_footer_items' ]; 
}




if ( empty ( $selected_widgets ) ) {  // If the theme is not yet activated


register_sidebar( array( 'name' => 'left sidebar widget 13', 'id' => 'left_sidebar_widget_13',  'description' => 'Drag a widget here. It will appear wherever Left Sidebar Widget 13 is on your website. To remove this widget click on Appearance / Childishly Simple Options / Choose your sidebar items', 'before_widget' => '', 'after_widget'  => '' ) );


register_sidebar( array( 'name' => 'right sidebar widget 13', 'id' => 'right_sidebar_widget_13',  'description' => 'Drag a widget here. It will appear wherever right Sidebar Widget 13 is on your website. To remove this widget click on Appearance / Childishly Simple Options / Choose your sidebar items', 'before_widget' => '', 'after_widget'  => '' ) );

} else { //	Else the theme has already been activated, in which case we start saving options






/*
Register sidebar-left dynamic sidebars  
*/

//	If no left sidedbar widgets were chosen a placeholder array is created to prevent error messages
if ( empty( $selected_widgets['selected_left_sidebar_items'] )) $selected_left_sidebar_widgets = array( 1,2 );


if( in_array( 'left_sidebar_widget_01', $selected_left_sidebar_widgets ) ) register_sidebar( array( 'name' => 'left sidebar widget 01', 'id' => 'left_sidebar_widget_01',  'description' => 'Drag a widget here. It will appear wherever Left Sidebar Widget 01 is on your website.', 'before_widget' => '', 'after_widget'  => '' ) );
	

if( in_array( 'left_sidebar_widget_02', $selected_left_sidebar_widgets ) ) register_sidebar( array( 'name' => 'left sidebar widget 02',  'id' => 'left_sidebar_widget_02',  'description' => 'Drag a widget here. It will appear wherever Left Sidebar Widget 02 is on your website.', 'before_widget' => '', 'after_widget'  => '' ) );
	
	
if( in_array( 'left_sidebar_widget_03', $selected_left_sidebar_widgets ) ) register_sidebar( array( 'name' => 'left sidebar widget 03',  'id' => 'left_sidebar_widget_03',  'description' => 'Drag a widget here. It will appear wherever Left Sidebar Widget 03 is on your website.', 'before_widget' => '', 'after_widget'  => '' ) );

	
if( in_array( 'left_sidebar_widget_04', $selected_left_sidebar_widgets ) ) register_sidebar( array( 'name' => 'left sidebar widget 04',  'id' => 'left_sidebar_widget_04',  'description' => 'Drag a widget here. It will appear wherever Left Sidebar Widget 04 is on your website.', 'before_widget' => '', 'after_widget'  => '' ) );
	

if( in_array( 'left_sidebar_widget_05', $selected_left_sidebar_widgets ) ) register_sidebar( array( 'name' => 'left sidebar widget 05', 'id' => 'left_sidebar_widget_05',  'description' => 'Drag a widget here. It will appear wherever Left Sidebar Widget 05 is on your website.', 'before_widget' => '', 'after_widget'  => '' ) );

	
if( in_array( 'left_sidebar_widget_06', $selected_left_sidebar_widgets ) ) register_sidebar( array( 'name' => 'left sidebar widget 06',  'id' => 'left_sidebar_widget_06', 'description' => 'Drag a widget here. It will appear wherever Left Sidebar Widget 06 is on your website.', 'before_widget' => '', 'after_widget'  => '' ) );
	
	
if( in_array( 'left_sidebar_widget_07', $selected_left_sidebar_widgets ) ) register_sidebar( array( 'name' => 'left sidebar widget 07',  'id' => 'left_sidebar_widget_07', 'description' => 'Drag a widget here. It will appear wherever Left Sidebar Widget 07 is on your website.', 'before_widget' => '', 'after_widget'  => '' ) );
	
	
if( in_array( 'left_sidebar_widget_08', $selected_left_sidebar_widgets ) ) register_sidebar( array( 'name' => 'left sidebar widget 08',  'id' => 'left_sidebar_widget_08', 'description' => 'Drag a widget here. It will appear wherever Left Sidebar Widget 08 is on your website.', 'before_widget' => '', 'after_widget'  => '' ) );


if( in_array( 'left_sidebar_widget_09', $selected_left_sidebar_widgets ) ) register_sidebar( array( 'name' => 'left sidebar widget 09', 'id' => 'left_sidebar_widget_09',  'description' => 'Drag a widget here. It will appear wherever Left Sidebar Widget 09 is on your website.', 'before_widget' => '', 'after_widget'  => '' ) );
	

if( in_array( 'left_sidebar_widget_10', $selected_left_sidebar_widgets ) ) register_sidebar( array( 'name' => 'left sidebar widget 10', 'id' => 'left_sidebar_widget_10',  'description' => 'Drag a widget here. It will appear wherever Left Sidebar Widget 10 is on your website.', 'before_widget' => '', 'after_widget'  => '' ) );
	

if( in_array( 'left_sidebar_widget_11', $selected_left_sidebar_widgets ) ) register_sidebar( array( 'name' => 'left sidebar widget 11', 'id' => 'left_sidebar_widget_11', 'description' => 'Drag a widget here. It will appear wherever Left Sidebar Widget 11 is on your website.', 'before_widget' => '', 'after_widget'  => '' ) );


if( in_array( 'left_sidebar_widget_12', $selected_left_sidebar_widgets ) ) register_sidebar( array( 'name' => 'left sidebar widget 12', 'id' => 'left_sidebar_widget_12',  'description' => 'Drag a widget here. It will appear wherever Left Sidebar Widget 12 is on your website.', 'before_widget' => '', 'after_widget'  => '' ) );
	
	
if( in_array( 'left_sidebar_widget_13', $selected_left_sidebar_widgets ) ) register_sidebar( array( 'name' => 'left sidebar widget 13', 'id' => 'left_sidebar_widget_13',  'description' => 'Drag a widget here. It will appear wherever Left Sidebar Widget 13 is on your website.', 'before_widget' => '', 'after_widget'  => '' ) );






/*
Register sidebar-right dynamic sidebars
*/

//	If no right sidebar widgets were chosen a placeholder array is created to prevent error messages
if ( empty( $selected_widgets['selected_right_sidebar_items'])) $selected_right_sidebar_widgets = array( 1,2 );

			
if( in_array( 'right_sidebar_widget_01', $selected_right_sidebar_widgets ) ) register_sidebar( array( 'name' => 'right sidebar widget 01',  'id' => 'right_sidebar_widget_01',  'description' => 'Drag a widget here. It will appear wherever Right Sidebar Widget 01 is on your website.', 'before_widget' => '', 'after_widget'  => '' ) );
	

if( in_array( 'right_sidebar_widget_02', $selected_right_sidebar_widgets ) ) register_sidebar( array( 'name' => 'right sidebar widget 02', 'id' => 'right_sidebar_widget_02',  'description' => 'Drag a widget here. It will appear wherever Right Sidebar Widget 02 is on your website.', 'before_widget' => '', 'after_widget'  => '' ) );
	

if( in_array( 'right_sidebar_widget_03', $selected_right_sidebar_widgets ) ) register_sidebar( array( 'name' => 'right sidebar widget 03',  'id' => 'right_sidebar_widget_03',  'description' => 'Drag a widget here. It will appear wherever Right Sidebar Widget 03 is on your website.', 'before_widget' => '', 'after_widget'  => '' ) );
	
	
if( in_array( 'right_sidebar_widget_04', $selected_right_sidebar_widgets ) ) register_sidebar( array( 'name' => 'right sidebar widget 04', 'id' => 'right_sidebar_widget_04',  'description' => 'Drag a widget here. It will appear wherever Right Sidebar Widget 04 is on your website.', 'before_widget' => '', 'after_widget'  => '' ) );
	

if( in_array( 'right_sidebar_widget_05', $selected_right_sidebar_widgets ) ) register_sidebar( array( 'name' => 'right sidebar widget 05', 'id' => 'right_sidebar_widget_05',  'description' => 'Drag a widget here. It will appear wherever Right Sidebar Widget 05 is on your website.', 'before_widget' => '', 'after_widget'  => '' ) );
	
	
if( in_array( 'right_sidebar_widget_06', $selected_right_sidebar_widgets ) ) register_sidebar( array( 'name' => 'right sidebar widget 06',  'id' => 'right_sidebar_widget_06',  'description' => 'Drag a widget here. It will appear wherever Right Sidebar Widget 06 is on your website.', 'before_widget' => '', 'after_widget'  => '' ) );
	
	
if( in_array( 'right_sidebar_widget_07', $selected_right_sidebar_widgets ) ) register_sidebar( array( 'name' => 'right sidebar widget 07', 'id' => 'right_sidebar_widget_07',  'description' => 'Drag a widget here. It will appear wherever Right Sidebar Widget 07 is on your website.', 'before_widget' => '', 'after_widget'  => '' ) );
	
	
if( in_array( 'right_sidebar_widget_08', $selected_right_sidebar_widgets ) ) register_sidebar( array( 'name' => 'right sidebar widget 08', 'id' => 'right_sidebar_widget_08',  'description' => 'Drag a widget here. It will appear wherever Right Sidebar Widget 08 is on your website.', 'before_widget' => '', 'after_widget'  => '' ) );
	

if( in_array( 'right_sidebar_widget_09', $selected_right_sidebar_widgets ) ) register_sidebar( array( 'name' => 'right sidebar widget 09', 'id' => 'right_sidebar_widget_09',  'description' => 'Drag a widget here. It will appear wherever Right Sidebar Widget 09 is on your website.', 'before_widget' => '', 'after_widget'  => '' ) );
	

if( in_array( 'right_sidebar_widget_10', $selected_right_sidebar_widgets ) ) register_sidebar( array( 'name' => 'right sidebar widget 10', 'id' => 'right_sidebar_widget_10',  'description' => 'Drag a widget here. It will appear wherever Right Sidebar Widget 10 is on your website.', 'before_widget' => '', 'after_widget'  => '' ) );
	

if( in_array( 'right_sidebar_widget_11', $selected_right_sidebar_widgets ) ) register_sidebar( array( 'name' => 'right sidebar widget 11', 'id' => 'right_sidebar_widget_11',  'description' => 'Drag a widget here. It will appear wherever Right Sidebar Widget 11 is on your website.', 'before_widget' => '', 'after_widget'  => '' ) );
	

if( in_array( 'right_sidebar_widget_12', $selected_right_sidebar_widgets ) ) register_sidebar( array( 'name' => 'right sidebar widget 12',  'id' => 'right_sidebar_widget_12',  'description' => 'Drag a widget here. It will appear wherever Right Sidebar Widget 12 is on your website.', 'before_widget' => '', 'after_widget'  => '' ) );
	
	
if( in_array( 'right_sidebar_widget_13', $selected_right_sidebar_widgets ) ) register_sidebar( array( 'name' => 'right sidebar widget 13', 'id' => 'right_sidebar_widget_13',  'description' => 'Drag a widget here. It will appear wherever Right Sidebar Widget 13 is on your website.', 'before_widget' => '', 'after_widget'  => '' ) );






/*
Register footer dynamic sidebars  
*/

//	If no footer widgets were chosen a placeholder array is created to prevent error messages
if ( empty( $selected_widgets['selected_footer_items'] )) $selected_footer_widgets = array( 1,2 );


if( in_array( 'footer_widget_01', $selected_footer_widgets ) ) register_sidebar( array( 'name' => 'footer widget 01',  'id' => 'footer_widget_01',  'description' => 'Drag a widget here. It will appear wherever Footer Widget 01 is on your website.', 'before_widget' => '', 'after_widget'  => '' ) );
	

if( in_array( 'footer_widget_02', $selected_footer_widgets ) ) register_sidebar( array( 'name' => 'footer widget 02',  'id' => 'footer_widget_02', 'description' => 'Drag a widget here. It will appear wherever Footer Widget 02 is on your website.', 'before_widget' => '', 'after_widget'  => '' ) );

	
if( in_array( 'footer_widget_03', $selected_footer_widgets ) ) register_sidebar( array( 'name' => 'footer widget 03', 'id' => 'footer_widget_03',  'description' => 'Drag a widget here. It will appear wherever Footer Widget 03 is on your website.', 'before_widget' => '', 'after_widget'  => '' ) );
	
	
if( in_array( 'footer_widget_04', $selected_footer_widgets ) ) register_sidebar( array( 'name' => 'footer widget 04', 'id' => 'footer_widget_04', 'description' => 'Drag a widget here. It will appear wherever Footer Widget 04 is on your website.', 'before_widget' => '', 'after_widget'  => '' ) );
	

if( in_array( 'footer_widget_05', $selected_footer_widgets ) )register_sidebar( array( 'name' => 'footer widget 05', 'id' => 'footer_widget_05', 'description' => 'Drag a widget here. It will appear wherever Footer Widget 05 is on your website.', 'before_widget' => '', 'after_widget'  => '' ) );
	
	
if( in_array( 'footer_widget_06', $selected_footer_widgets ) ) register_sidebar( array( 'name' => 'footer widget 06',  'id' => 'footer_widget_06', 'description' => 'Drag a widget here. It will appear wherever Footer Widget 06 is on your website.', 'before_widget' => '', 'after_widget'  => '' ) );
		
	
if( in_array( 'footer_widget_07', $selected_footer_widgets ) ) register_sidebar( array( 'name' => 'footer widget 07',  'id' => 'footer_widget_07', 'description' => 'Drag a widget here. It will appear wherever Footer Widget 07 is on your website.', 'before_widget' => '', 'after_widget'  => '' ) );
	
	
if( in_array( 'footer_widget_08', $selected_footer_widgets ) ) register_sidebar( array( 'name' => 'footer widget 08',  'id' => 'footer_widget_08', 'description' => 'Drag a widget here. It will appear wherever Footer Widget 08 is on your website.', 'before_widget' => '', 'after_widget'  => '' ) );
	

if( in_array( 'footer_widget_09', $selected_footer_widgets ) ) register_sidebar( array( 'name' => 'footer widget 09',  'id' => 'footer_widget_09', 'description' => 'Drag a widget here. It will appear wherever Footer Widget 09 is on your website.', 'before_widget' => '', 'after_widget'  => '' ) );
	

if( in_array( 'footer_widget_10', $selected_footer_widgets ) ) register_sidebar( array( 'name' => 'footer widget 10', 'id' => 'footer_widget_10',  'description' => 'Drag a widget here. It will appear wherever Footer Widget 10 is on your website.', 'before_widget' => '', 'after_widget'  => '' ) );
	

if( in_array( 'footer_widget_11', $selected_footer_widgets ) ) register_sidebar( array( 'name' => 'footer widget 11', 'id' => 'footer_widget_11',   'description' => 'Drag a widget here. It will appear wherever Footer Widget 11 is on your website.', 'before_widget' => '', 'after_widget'  => '' ) );
	

if( in_array( 'footer_widget_12', $selected_footer_widgets ) ) register_sidebar( array( 'name' => 'footer widget 12', 'id' => 'footer_widget_12',  'description' => 'Drag a widget here. It will appear wherever Footer Widget 12 is on your website.', 'before_widget' => '', 'after_widget'  => '' ) );
	
	
if( in_array( 'footer_widget_13', $selected_footer_widgets ) ) register_sidebar( array( 'name' => 'footer widget 13',  'id' => 'footer_widget_13', 'description' => 'Drag a widget here. It will appear wherever Footer Widget 13 is on your website.', 'before_widget' => '', 'after_widget'  => '' ) );


	} //	End else - if theme has been activated
} //	End function childishlysimple_register_sidebars







/*
=Add stylesheets or javascript
*/

//	Add external stylesheet to all admin pages
function childishlysimple_add_to_admin_head(){
        wp_register_style( 'style_admin_css', get_template_directory_uri() . '/style-admin.css', '', '', 'screen' );
        wp_enqueue_style( 'style_admin_css' );
}
add_action('admin_enqueue_scripts', 'childishlysimple_add_to_admin_head');



// Add external stylesheets to website
// BUT NOT style.css because child themes won't then work
	function childishlysimple_add_stylesheets() {	
	
		wp_register_style( 'childishlysimple-style-print', get_template_directory_uri() . '/style-print.css','','', 'print' );

		wp_enqueue_style( 'childishlysimple-style-print' );
}
add_action( 'wp_enqueue_scripts', 'childishlysimple_add_stylesheets' );






/*
=Custom comments - the comment bubbles
*/

function childishlysimple_list_comments( $comment, $args, $depth )  {	//	See comments.php
 $GLOBALS['comment'] = $comment; 
  

global $childishlysimple_count_comments;  
//	The variable $childishlysimple_count_comments can be used outside this function ?>
 






<?php // The space above this line makes it easier on the eye when Viewing Source ?>

<div <?php comment_class( ); ?> id="comment-<?php comment_ID( ) //	Add an ID to the div 	?>">
 		
	<div class="comment-body">

		<p class="comment-meta">

		<?php printf( __( '<span class="pre-comment-author">By</span><span class="comment-author"> %s</span> ' ), get_comment_author_link( ) ) ?>

			<span class="comment-date"><?php comment_date( 'D M jS Y' ) ?> at  <?php comment_date( 'g:i a' ) ?></span>
  
			<span class="comment-edit">
				<?php edit_comment_link(  '(Edit Comment)' ,'  ','' ) //	Link to edit the comment ( if logged in )	?>  &nbsp;
			</span>

		</p>   <?php // End comment-meta ?>

	<div class="avatar">
	
		<?php echo get_avatar( $comment, 32 ) , "\n"; ?>
		
	</div><!-- end avatar-->
	

<?php if ( $comment->comment_approved == '0' ) : ?>

	<p class="moderation"><?php echo 'Your comment is awaiting moderation. Although you can see this comment, no one else can.'  ?></p>
	<br />
	
<?php endif; //	If awaiting moderation 	?>

	<?php comment_text( ) //	The text of the comment 	?>

	<p class="comment-reply-link">
	
	<?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'reply_text' => 'Reply to this person', 'login_text' => 'Log in to reply to this', 'max_depth' => $args['max_depth'] ) ) ) ?>
	
	</p>

</div><!--End comment-body-->

<?php }






/*
=Custom pings - the ping 'bubbles'
*/

//  Uses the same HTML as the comments except for the ping count.
//  With thanks to   http://sivel.net/2008/10/wp-27-comment-separation/   

function childishlysimple_list_pings( $comment, $args, $depth ) { //	See comments.php
       $GLOBALS['comment'] = $comment;








//	The space above this line makes it easier on the eye when Viewing Source

global $childishlysimple_ping_count;    ?>

<div class="comment depth-1"> 
	<div class="comment-body ping-body">
		<p class="comment-meta">

<?php printf( __( '<span class="pre-comment-author">By</span><span class="comment-author"> %s</span> ' ), get_comment_author_link( ) )   ?>


			<span class="comment-date"><?php comment_date( 'D M jS Y' ) ?> at  <?php comment_date( 'g:i a' ) ?></span>


				<span class="comment-edit">
				<?php edit_comment_link(  '(Edit Comment)' ,'  ','' ) //	Link to edit the comment ( if logged in )?>&nbsp;
				</span>


			</p>   <?php //	End comment-meta   ?>

			<div class="ping-text">
			<?php comment_text( )  //	The ping text  ?>
			</div><!-- End ping-text -->

		</div><!--End comment-body-->

<?php }
//	The last div is added automatically by WP
//	End custom pings





/*
=Custom header - Appearance / header -  see header.php for outputting.
*/

//	http://codex.wordpress.org/Custom_Headers
//	http://codex.wordpress.org/Function_Reference/add_theme_support#Custom_Header

$defaults = array( 
	'default-image' => get_template_directory_uri() . '/images/header.jpg',
	'random-default'         => false,
	'width'                  => 1000, // Suggested height e.g. suggested cropped area when first uploaded
	'height'                 => 300, // Suggested height e.g. suggested cropped area when first uploaded
	'flex-height'            => true, // If set to false, the cropped area won't exceed the height set above
	'flex-width'             => true, // If set to false, the cropped area won't exceed the width set above
	'default-text-color'     => '',
	'header-text'            => false, // No idea how to output it anyway.
	'uploads'                => true,
	'wp-head-callback'       => '',
	'admin-head-callback'    => '',
	'admin-preview-callback' => '',
);
add_theme_support( 'custom-header', $defaults );






/*
=Error notice - admin
*/

$childishlysimple_test_for_errors = array ();
$childishlysimple_test_for_errors = get_option( 'childishlysimple01_layout_details' ); 

$childishlysimple_test_for_errors_result = '';
$childishlysimple_test_for_major_errors_result = '';

if ( ! empty ( $childishlysimple_test_for_errors['errors'] ) ) $childishlysimple_test_for_errors_result = $childishlysimple_test_for_errors['errors'];
if ( ! empty ( $childishlysimple_test_for_errors['major_errors'] ) ) $childishlysimple_test_for_major_errors_result = $childishlysimple_test_for_errors['major_errors'];


function childishly_simple_error_notice(){
    echo '<div class="error">
       <p>There are minor errors on the Childishly Simple Options page - search for the error messages highlighted in red on that page. Default options will be set.</p>
    </div>';
}

if( $childishlysimple_test_for_errors_result == 'errors' ) add_action('admin_notices', 'childishly_simple_error_notice');







function childishly_simple_major_error_notice(){
    echo '<div class="error">
       <p style="font-weight:bold;">There are major errors on the Childishly Simple Options page - search for the error messages highlighted in red on that page. YOUR SITE WILL REVERT TO ITS DEFAULT LAYOUT UNTIL THIS IS SORTED OUT.</p>
    </div>';
}

if( $childishlysimple_test_for_major_errors_result == 'major_errors' ) add_action('admin_notices', 'childishly_simple_major_error_notice');

?>