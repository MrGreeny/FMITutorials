<?php
global $childishlysimple_is_the_theme_activated;
global $childishlysimple_miscellaneous_stuff;
global $childishlysimple_site_details; 
global $childishlysimple_footer_items;
?>



<style type = "text/css">
<?php  
	//	If the theme is being installed for the first time then no options - not even defaults - have been saved. 
	//	The site is then set to the default layout set in function-to-create-layout.php, which in this case is three columns content middle.  
	//	The following styles are also output
	if ( $childishlysimple_site_details =='' ) {
	$childishlysimple_site_details['site_layout'] = 'three_col_cont_middle';
	echo 'p {position:relative;}'; // So that there are no empty style tags
}


//	If there are no major errors on the Childishly Simple Options page in Admin
elseif ( $childishlysimple_site_details['major_errors'] == '' ) {  


//	Body background
echo 'body {background-color:'. $childishlysimple_site_details['body_background_color'] . ';}' . "\n\n"; 	


//	Body links
echo 'a:link,a:visited, div.entry a.more-link:link, div.entry a.more-link:visited, p.post-info-top span.number-of-comments, p.post-info-top span.meta-info,span.comment-link, a.comments-closed:link, a.comments-closed:visited {color:' . $childishlysimple_site_details['body_and_post_link_color'] . ';}' ."\n";

echo 'a:hover, div.entry a.more-link:hover,a.comments-closed:hover {color:' . $childishlysimple_site_details['body_and_post_hover_color'] . ';}' ."\n\n";	


//	Site width and border color
//	No border for 100% width or there'll be a scroll bar. Also make sure no space at top and bottom of the site.
$wrapper_border = '';
if($childishlysimple_site_details ['site_width_number'] == 100) {
$wrapper_border = ';border:none;margin-top:0';
echo 'body {padding-bottom:0;}' . "\n\n";
}

echo 'div#wrapper {width:' .  $childishlysimple_site_details ['site_width'] . '; margin-left:auto;margin-right:auto; border-color:' . $childishlysimple_site_details ['site_border_color'] . $wrapper_border .';}' . "\n\n";


//	top navigation bar background color
echo '.top-navigation {background-color:'. $childishlysimple_site_details['top_navigation_bar_background_color'] . '; }' ."\n"; 


//	top navigation bar border color
echo 'div.top-navigation {border-top-color:' . $childishlysimple_site_details['top_navigation_bar_top_border_color'] . '; border-bottom-color:' . $childishlysimple_site_details['top_navigation_bar_bottom_border_color'] .	'; }' ."\n"; 


//	top navigation bar link color
echo 'div.top-navigation a {color:'. $childishlysimple_site_details['top_navigation_bar_link_color'] . ';}' ."\n"; 



//	top navigation bar link hover color
echo 'div.top-navigation li:hover > a,  div.top-navigation a:focus {color:'. $childishlysimple_site_details['top_navigation_bar_hover_color'] . ';}' ."\n\n"; 



//	top dropdown menu font color, background color, border color
echo 'ul.top-navigation li li a:link, ul.top-navigation li li a:visited {color:' . $childishlysimple_site_details['top_dropdown_menu_font_color'] .  '; background-color:' . 	$childishlysimple_site_details['top_dropdown_menu_link_background_color']  .'; border-color: ' . $childishlysimple_site_details ['top_dropdown_menu_border_color'] . ';} ' ."\n" ; 



//	top dropdown menu color, background color, border color when the menu is hovered over		
echo 'ul.top-navigation li li a:hover {color:' . $childishlysimple_site_details['top_dropdown_menu_hover_font_color'] .  '; background-color:' . $childishlysimple_site_details['top_dropdown_menu_hover_background_color']  . '; border-color: ' . $childishlysimple_site_details ['top_dropdown_menu_border_color'] . ';} ' ."\n" ; 


//	top dropdown menu background color when the menu is clicked					
echo 'ul.top-navigation li li a:active {color:' . $childishlysimple_site_details['top_dropdown_menu_font_color'] .  '; background-color:' . $childishlysimple_site_details['top_dropdown_menu_active_background_color']  . '; border-color: ' . $childishlysimple_site_details ['top_dropdown_menu_border_color'] . ';} ' ."\n\n" ; 


//	contains the posts
echo 'div#inner-wrapper{background-color:'. $childishlysimple_site_details['content_background_color'] . ';}' ."\n"; 


//	content width (contains all the posts)
echo 'div#content{width:' .  $childishlysimple_site_details ['content_width']  . ';}'. "\n\n"; 	


//	Sidebar top-item spacing				
echo 'div.sidebar{padding-top:' .  $childishlysimple_site_details ['sidebar_top_spacing'] .';}'. "\n"; 


//	left sidebar width and short left sidebar background color					
echo 'div.left-sidebar{width:' .  $childishlysimple_site_details ['left_sidebar_width'] .  ';background-color:'. $childishlysimple_site_details['short_left_sidebar_background_color'] . '}'. "\n"; 


// 	long left sidebar background color, width, position
$left_position = '';

if ($childishlysimple_site_details['site_layout'] == 'three_col_cont_left') {
$left_position = 'right:' .  $childishlysimple_site_details['right_sidebar_width'] . ';';
} else {
	$left_position = 'left:0px;';
	}
echo 'div#inner-wrapper div.long-left-sidebar-background{background-color:'. $childishlysimple_site_details['long_left_sidebar_background_color'] . '; width:'. $childishlysimple_site_details['left_sidebar_width'] . ';' . $left_position . '}'. "\n"; 


//	left sidebar item background color and border color
echo 'div.left-sidebar-item {background-color:'. $childishlysimple_site_details['left_sidebar_item_background_color'] . '; border-color:'. $childishlysimple_site_details['left_sidebar_item_border_color'] . ';color:'. $childishlysimple_site_details['left_sidebar_font_color'] . '}' . "\n"; 


//	left sidebar heading background color
echo 'div.left-sidebar-item h2.widgettitle, div.left-sidebar-item h2.left-sidebar-item {background-color:' .  $childishlysimple_site_details['left_sidebar_item_heading_background_color'] . '; color:' . $childishlysimple_site_details['left_sidebar_item_heading_font_color'] .  ';}' ."\n\n";      


//	left sidebar link and visited  color
echo 'div.left-sidebar-item a:link, div.left-sidebar-item a:visited, a.url:link, a.url:visited {color:'. $childishlysimple_site_details['left_sidebar_link_color'] . ' !important;}' . "\n"; 


//	left sidebar hover color
echo 'div.left-sidebar-item a:hover, a.url:hover {color:'. $childishlysimple_site_details['left_sidebar_hover_color'] . ' !important;}' . "\n\n"; 


//	right sidebar width and short right sidebar background color
echo 'div.right-sidebar{width:' .  $childishlysimple_site_details ['right_sidebar_width']  . ';background-color:'. $childishlysimple_site_details['short_right_sidebar_background_color'] . ';}'. "\n"; 


// 	long right sidebar background color, width, position
$right_position = '';

if ($childishlysimple_site_details['site_layout'] == 'three_col_cont_right') {
$right_position = 'left:' .  $childishlysimple_site_details['left_sidebar_width'] . ';';
} else {
	$right_position = 'right:0px;';
	}
echo 'div#inner-wrapper div.long-right-sidebar-background{background-color:'. $childishlysimple_site_details['long_right_sidebar_background_color'] . '; width:'. $childishlysimple_site_details['right_sidebar_width'] . ';' . $right_position . '}'. "\n"; 


//	right sidebar item background color and border color
echo 'div.right-sidebar-item {background-color:'. $childishlysimple_site_details['right_sidebar_item_background_color'] . ';border-color:'. $childishlysimple_site_details['right_sidebar_item_border_color'] . ';color:'. $childishlysimple_site_details['right_sidebar_font_color'] . ';}' . "\n"; 


//	right sidebar heading background color
echo 'div.right-sidebar-item h2.widgettitle, div.right-sidebar-item h2.right-sidebar-item {background-color:' .  $childishlysimple_site_details['right_sidebar_item_heading_background_color'] . ';color:' . $childishlysimple_site_details['right_sidebar_item_heading_font_color'] .  ';}' ."\n\n";      


//	right sidebar link and visited color
echo 'div.right-sidebar-item a:link, div.right-sidebar-item a:visited, a.url:link, a.url:visited {color:'. $childishlysimple_site_details['right_sidebar_link_color'] . ' !important;}' . "\n"; 


//	right sidebar hover color
echo 'div.right-sidebar-item a:hover, a.url:hover {color:'. $childishlysimple_site_details['right_sidebar_hover_color'] . ' !important;}' . "\n\n"; 


//	category heading font color and navigation link colors	
echo 'h1.multiple-post-heading,  span.multiple-nav-left a:link, span.multiple-nav-left a:hover, span.multiple-nav-left a:visited,  span.multiple-nav-right a:link, span.multiple-nav-right a:hover,  span.multiple-nav-right a:visited, p.single-left, p.single-right, p.single-left a:link, p.single-left a:visited, p.single-left a:hover, p.single-right a:link, p.single-right a:visited, p.single-right a:hover {color:'. $childishlysimple_site_details['category_heading_font_color'] . ';}' . "\n\n"; 


//	post title link color, visited color, page title color
echo 'h1.post-title,  h1.page,  h2.post-title, a.permalink:link, a.permalink:visited  {color:' .  $childishlysimple_site_details ['post_title_font_color']  . ';}'. "\n"; 


//	post title hover color
echo 'a.permalink:hover {color:' .  $childishlysimple_site_details ['post_title_font_hover_color']  . ';}'. "\n\n"; 


//	post border color, background color and font color
echo 'div.post, div.review, div.page, div.attachment {border-color:'. $childishlysimple_site_details['post_border_color'] . '; background-color:'. $childishlysimple_site_details['post_background_color'] .  '; color:' .  $childishlysimple_site_details['post_font_color'] .';}' ."\n\n"; 	


// 	Caption text color
echo '.wp-caption-text {color:' .  $childishlysimple_site_details['post_font_color'] .';}' ."\n\n"; 


//	post bottom border margin
echo 'div.post, div.review, div.page, div.attachment {margin-bottom:'. $childishlysimple_site_details['post_margin_bottom'] . ';}' ."\n\n"; 


//	sticky post border - same color, wider (width set in style.css)
echo 'div.sticky {border-color: '. $childishlysimple_site_details['post_border_color'] . ';}' ."\n\n";  


//	bottom navigation bar background color
echo '.bottom-navigation {background-color:'. $childishlysimple_site_details['bottom_navigation_bar_background_color'] . '; }' ."\n"; 


//	bottom navigation bar border color
echo 'div.bottom-navigation {border-top-color:' . $childishlysimple_site_details['bottom_navigation_bar_top_border_color'] . '; border-bottom-color:' . $childishlysimple_site_details['bottom_navigation_bar_bottom_border_color'] .	'; }' ."\n"; 


//	bottom navigation bar link color 
echo 'div.bottom-navigation a {color:'. $childishlysimple_site_details['bottom_navigation_bar_link_color'] . ';}' ."\n"; 


//	bottom navigation bar hover color 
echo 'div.bottom-navigation li:hover > a,  div.bottom-navigation a:focus {color:'. $childishlysimple_site_details['bottom_navigation_bar_hover_color'] . ';}' ."\n\n"; 


//	bottom dropdown menu font color, background color, border color
echo 'ul.bottom-navigation li li a:link, ul.bottom-navigation li li a:visited {color:' . $childishlysimple_site_details['bottom_dropdown_menu_font_color'] .  '; background-color:' . 	$childishlysimple_site_details['bottom_dropdown_menu_link_background_color']  .'; border-color: ' . $childishlysimple_site_details ['bottom_dropdown_menu_border_color'] . ';} ' ."\n" ; 


//	bottom dropdown menu color, background color, border color when the menu is hovered over			
echo 'ul.bottom-navigation li li a:hover {color:' . $childishlysimple_site_details['bottom_dropdown_menu_hover_font_color'] .  '; background-color:' . $childishlysimple_site_details['bottom_dropdown_menu_hover_background_color']  . '; border-color: ' . $childishlysimple_site_details ['bottom_dropdown_menu_border_color'] . ';} ' ."\n" ; 


//	bottom dropdown menu background color when the menu item is clicked				
echo 'ul.bottom-navigation li li a:active {color:' . $childishlysimple_site_details['bottom_dropdown_menu_font_color'] .  '; background-color:' . $childishlysimple_site_details['bottom_dropdown_menu_active_background_color']  . '; border-color: ' . $childishlysimple_site_details ['bottom_dropdown_menu_border_color'] . ';} ' ."\n\n" ; 


//	footer background color, footer item width, footer item background color, footer item border and font color
echo 'div.footer {background-color:'. $childishlysimple_site_details['footer_background_color'] . ';}' . "\n";			
echo 'div.outer-footer-item {width:' . $childishlysimple_site_details['outer_footer_item_width'] . ';}' . "\n";
echo 'div.inner-footer-item {background-color:'. $childishlysimple_site_details['footer_item_background_color'] . ';border-color:'. $childishlysimple_site_details['footer_item_border_color'] .  ';color:'. $childishlysimple_site_details['footer_font_color'] . ';}' . "\n"; 


//	footer heading background color and font color
echo 'h2.footer-item, h2.widgettitle {background-color:'. $childishlysimple_site_details['footer_item_heading_background_color'] . ';color:'. $childishlysimple_site_details['footer_item_heading_font_color'] . ';}' ."\n\n"; 


//	footer item link and visited color
echo 'div.inner-footer-item a:link, div.inner-footer-item a:visited {color:'. $childishlysimple_site_details['footer_link_color'] . ' !important;}' . "\n"; 


// footer item hover color
echo 'div.inner-footer-item a:hover {color:'. $childishlysimple_site_details['footer_hover_color'] . ' !important;}' . "\n\n"; 


//	footer spacer, which pushes footer items down the page
echo 'div.footer-spacer {height:'. $childishlysimple_site_details['footer_spacing'] . ';}' ."\n\n"; 


//	link color of RSS feed links, powered by WordPress link, Alchemweb link and copyright notice
echo'p.copyright, a.powered-by:link, a.designed-by:link, a.rss-all-posts:link, a.rss-all-comments:link, a.rss-comments-single-post:link, a.powered-by:visited, a.designed-by:visited, a.rss-all-posts:visited, a.rss-all-comments:visited, a.rss-comments-single-post:visited {color:' . $childishlysimple_site_details['utility_link_color'] . ';}' ."\n\n"; 


//	Hover color of RSS feed links, powered by WordPress links
echo'a.powered-by:hover, a.designed-by:hover, a.rss-all-posts:hover, a.rss-all-comments:hover, a.rss-comments-single-post:hover {color:' . $childishlysimple_site_details['utility_hover_color'] . ';}' ."\n\n"; 




// Miscellaneous items
$miscellaneous_items = array( );
$miscellaneous_items = $childishlysimple_site_details['selected_miscellaneous_stuff'];


//	Rounded corners on nearly everything. With thanks to the WordPress  Twenty Eleven theme
if( in_array( 'rounded_everything', $miscellaneous_items ) ) { 

echo 'div.entry img, div.post, div.review, div.page, div.attachment, div.comment-body{-moz-border-radius: 10px;-webkit-border-radius: 10px;border-radius:10px}' ."\n\n";


echo 'div.left-sidebar-item, h2.left-sidebar-item,  div.right-sidebar-item, h2.right-sidebar-item, div.inner-footer-item, h2.footer-item, div.left-sidebar-item h2.widgettitle:first-child, div.right-sidebar-item h2.widgettitle:first-child, div.inner-footer-item h2.widgettitle:first-child   {-moz-border-radius-topleft: 10px; -moz-border-radius-topright: 10px;-webkit-border-top-left-radius: 10px;-webkit-border-top-right-radius: 10px;border-top-right-radius:10px;border-top-left-radius:10px;}' ."\n\n\n";


echo 'div.left-sidebar-item,div.right-sidebar-item, div.inner-footer-item {-moz-border-radius-bottomleft: 10px; -moz-border-radius-bottomright: 10px;-webkit-border-bottom-left-radius: 10px;-webkit-border-bottom-right-radius: 10px;border-bottom-right-radius:10px;border-bottom-left-radius:10px;}' ."\n\n\n";


echo 'div#wrapper, img.header {-moz-border-radius-topleft: 10px; -moz-border-radius-topright: 10px;-webkit-border-top-left-radius: 10px;-webkit-border-top-right-radius: 10px;border-top-right-radius:10px;border-top-left-radius:10px;}' . "\n\n\n";

echo 'div#wrapper, div.footer {-moz-border-radius-bottomleft: 10px; -moz-border-radius-bottomright: 10px;-webkit-border-bottom-left-radius: 10px;-webkit-border-bottom-right-radius: 10px;border-bottom-right-radius:10px;border-bottom-left-radius:10px;}' . "\n\n\n";

echo 'img.avatar {-moz-border-radius: 3px;border-radius: 3px;-webkit-box-shadow: 0 1px 2px #bbb;-moz-box-shadow: 0 1px 2px #bbb;box-shadow: 0 1px 2px #bbb;}' . "\n\n\n";

echo 'a.page-numbers:link, a.page-numbers:visited, a.page-numbers:hover,span.current {-moz-border-radius: 3px;border-radius: 3px;-webkit-box-shadow: 0 1px 2px #bbb;-moz-box-shadow: 0 1px 2px #bbb;box-shadow: 0 1px 2px #bbb;}' . "\n\n\n";
	} else {
	echo 'div.entry img, div.post, div.review, div.page, div.attachment, div.comment-body,
	div.left-sidebar-item, h2.left-sidebar-item,  div.right-sidebar-item, h2.right-sidebar-item, 
	div.inner-footer-item, h2.footer-item, div.left-sidebar-item h2.widgettitle:first-child, 
	div.right-sidebar-item h2.widgettitle:first-child, div.inner-footer-item h2.widgettitle:first-child,
	div.left-sidebar-item,div.right-sidebar-item, div.inner-footer-item,div#wrapper, img.header,
	div#wrapper, div.footer,img.avatar, a.page-numbers:link, a.page-numbers:visited, a.page-numbers:hover,span.current {
	border-radius:0;
	box-shadow: none;
	-moz-border-radius: 0;
	-moz-box-shadow: none;
	-webkit-border-radius: 0;
	-webkit-box-shadow: none;
	} '. "\n\n";
	}
	
	
	
	


//	Square corners on top banner image
if( in_array( 'square_top_banner', $miscellaneous_items ) ) {
echo 'div#wrapper, img.header {-moz-border-radius-topleft: 0px; -moz-border-radius-topright: 0px;-webkit-border-top-left-radius: 0px;-webkit-border-top-right-radius: 0px;border-top-right-radius:0px;border-top-left-radius:0px;}' . "\n\n\n";
}


	
//	Square corners on images in posts
if( in_array( 'square_images_in_posts', $miscellaneous_items ) ) { 
echo 'div.entry img{-moz-border-radius: 0px;-webkit-border-radius: 0px;border-radius:0px}' ."\n\n";
}



//	Square top corners on sidebar items
if( in_array( 'square_top_sidebar_items', $miscellaneous_items ) ) { 
echo 'div.left-sidebar-item, h2.left-sidebar-item,  div.right-sidebar-item, h2.right-sidebar-item, div.left-sidebar-item h2.widgettitle:first-child, div.right-sidebar-item h2.widgettitle:first-child {-moz-border-radius-topleft: 0px; -moz-border-radius-topright: 0px;-webkit-border-top-left-radius: 0px;-webkit-border-top-right-radius: 0px;border-top-right-radius:0px;border-top-left-radius:0px;}' ."\n\n\n";
}



//	Square bottom corners on sidebar items
if( in_array( 'square_bottom_sidebar_items', $miscellaneous_items ) ) { 
echo 'div.left-sidebar-item,div.right-sidebar-item{-moz-border-radius-bottomleft: 0px; -moz-border-radius-bottomright: 0px;-webkit-border-bottom-left-radius: 0px;-webkit-border-bottom-right-radius: 0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;}' ."\n\n\n";
}



//	Square top corners on footer items
if( in_array( 'square_top_footer_items', $miscellaneous_items ) ) {
echo 'div.inner-footer-item, h2.footer-item, div.inner-footer-item h2.widgettitle:first-child   {-moz-border-radius-topleft: 0px; -moz-border-radius-topright: 0px;-webkit-border-top-left-radius: 0px;-webkit-border-top-right-radius: 0px;border-top-right-radius:0px;border-top-left-radius:0px;}' ."\n\n\n";
}



//      Square bottom corners on footer items
if( in_array( 'square_bottom_footer_items', $miscellaneous_items ) ) {
echo 'div.inner-footer-item {-moz-border-radius-bottomleft: 0px; -moz-border-radius-bottomright: 0px;-webkit-border-bottom-left-radius: 0px;-webkit-border-bottom-right-radius: 0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;}' ."\n\n\n";
}



//	No top border on footer items
if( in_array( 'no_top_border_footer', $miscellaneous_items ) ) {
echo 'div.inner-footer-item {border-top:none;}' ."\n\n\n";
}



//	Square corners on posts
if( in_array( 'square_posts', $miscellaneous_items ) ) {
echo 'div.post, div.review, div.page, div.attachment{-moz-border-radius: 0px;-webkit-border-radius: 0px;border-radius:0px}' ."\n\n";
}


}	//	End if there are no major errors

					
//	If there are major errors on the Childishly Simple Options page in Admin 
//	display the default colours from style.css and default widths from function-to-create-layout.php
				
elseif( $childishlysimple_site_details['major_errors'] == 'major_errors' ) {	 
			if ( $childishlysimple_site_details['liquid_or_fixed_default'] == 'liquid' ) {				
				echo 'div#wrapper{width:' .  $childishlysimple_site_details ['site_width_default'] . '; margin-left:auto; margin-right:auto;}' . "\n";
				echo 'div.left-sidebar{width:' .  $childishlysimple_site_details ['left_sidebar_width_default']  . ';}'. "\n";
				echo 'div.right-sidebar{width:' .  $childishlysimple_site_details ['right_sidebar_width_default']  .';}'. "\n";
				echo 'div#content{width:' .  $childishlysimple_site_details ['content_width_default']  .';}'. "\n";
				echo 'div.outer-footer-item {width:' . $childishlysimple_site_details['outer_footer_item_width_default'] . ';}' . "\n";
	}							
			if ( $childishlysimple_site_details['liquid_or_fixed_default'] == 'fixed' ) {					
				echo 'div#wrapper{width:' .  $childishlysimple_site_details ['site_width_default'] . '; margin-left:auto; margin-right:auto;}' . "\n";
				echo 'div.left-sidebar{width:' .  $childishlysimple_site_details ['left_sidebar_width_default']  . ';}'. "\n";
				echo 'div.right-sidebar{width:' .  $childishlysimple_site_details ['right_sidebar_width_default']  . ';}'. "\n";
				echo 'div#content{width:' .  $childishlysimple_site_details ['content_width_default']  .';}'. "\n";
				echo 'div.outer-footer-item {width:' . $childishlysimple_site_details['outer_footer_item_width_default'] . ';}' . "\n";
	}
		
	//	For both liquid and fixed layouts	
		echo 'div.long-left-sidebar-background, div.long-right-sidebar-background {display:none;}' ."\n";
			
	//	The layout reverts to the default layout set in function-to-create-layout.php					
	$childishlysimple_site_details['site_layout'] = $childishlysimple_site_details['site_layout_default'];  
	
}	//	End if there are errors	
?>






<?php /*
These styles will over ride any set previously in this internal-style-sheet.php  Images are uploaded to the parent theme's    'images'   directory

Make sure that the dropdown menus align with the left of individual background images in the top bar rather than align with the left of link text

.top-navigation ul ul,
.bottom-navigation ul ul{
left:0;
}


Example background image for the whole length of horizontal menu bars

.bottom-navigation,
.top-navigation {
background:transparent url('<?php echo get_template_directory_uri() ;?>/images/myimage.jpg') 123px  456px no-repeat;
border-right:1px solid white;
}


Example background image for each individual link before it's hovered over in the horizontal menu bars

.top-navigation li,
.bottom-navigation li{
background:blue url('<?php echo get_template_directory_uri() ;?>/images/myimage.jpg') 123px  456px no-repeat;
border-right:1px solid white;
}


Example background image for each individual link after it's hovered over in the horizontal menu bars

.top-navigation li:hover,
.bottom-navigation li:hover{
background:transparent url('<?php echo get_template_directory_uri() ;?>/images/myimage.jpg') 123px  456px no-repeat;
border-right:1px solid white;
}



If you don't want to use background images and would like to use gradients replace every example of  'background  with the following groups of styles
Taken from the Twenty Eleven theme. Can be used in the dropdown menus as well as in the horizontal menu bars that are styled here.
Show a solid color first for older browsers. More modern styles follow the solid color and therefore over ride it.
    
background: #f9f9f9; 
background: -moz-linear-gradient(#f9f9f9, #e5e5e5);
background: -o-linear-gradient(#f9f9f9, #e5e5e5);
background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#f9f9f9), to(#e5e5e5)); 
background: -webkit-linear-gradient(#f9f9f9, #e5e5e5);


*/?>


</style>