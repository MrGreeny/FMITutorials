<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html <?php language_attributes(); ?> xmlns="http://www.w3.org/1999/xhtml">

<head profile="http://gmpg.org/xfn/11">

<meta http-equiv="Content-Type" content="<?php bloginfo( 'html_type' ); ?>; charset=<?php bloginfo( 'charset' ); ?>" />

<title><?php wp_title( ':', true, 'right'); 	// The title  is filtered using the callback function 	childishlysimple_filter_wp_title	 in functions.php ?></title>



<?php /* 
doctype.php allows a user to put universal code for all template files in the head. For code related to a specific template file but still within the head place it in the template file before header.php is called 
*/ ?>