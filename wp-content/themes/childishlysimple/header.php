<?php
global $childishlysimple_is_the_theme_activated;
global $childishlysimple_miscellaneous_stuff;
global $childishlysimple_site_details; 
global $childishlysimple_footer_items;



$childishlysimple_site_details = array();
$childishlysimple_site_details = get_option( 'childishlysimple01_layout_details' ); 
if( $childishlysimple_site_details =='' ) $childishlysimple_is_the_theme_activated ='not_yet_activated'; 
// 	A default layout is set at the top of internal-style-sheet.php
//	The unactivated width of the site etc. is set in style.css

		

$childishlysimple_miscellaneous_stuff = array( );
$childishlysimple_miscellaneous_stuff = $childishlysimple_site_details ['selected_miscellaneous_stuff'];
if( $childishlysimple_site_details['errors'] == 'errors' ) $childishlysimple_miscellaneous_stuff = array_flip( $childishlysimple_site_details['default_miscellaneous_stuff'] );
if( $childishlysimple_site_details =='' ) $childishlysimple_miscellaneous_stuff = array( 1,2 );	// Create a placeholder array for first installation



if ( in_array( 'noindex', $childishlysimple_miscellaneous_stuff ) ){
		if ( ( is_date( ) ) || ( is_author( ) ) ||  ( is_search( ) )  ||  ( is_tag( ) ) || ( is_tax( ) ) ){ 
		echo '<meta name="robots" content="noindex, nofollow" />' ;
	}
} ?>



<!-- This is the free WordPress Childishly Simple theme from Alchemweb.co.uk -->


<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />



<?php get_template_part( 'internal-style-sheet' ); ?> 



<?php wp_head( ); ?>


</head>



<body class = "<?php $body_class = get_body_class( ); foreach ( $body_class as $body_class_value ) {echo $body_class_value . ' '; }  echo $childishlysimple_site_details['site_layout']; ?>">



<div id="wrapper">  



<?php 
//	Top search box 
if ( in_array( 'topsearch', $childishlysimple_miscellaneous_stuff ) ){ ?>

<div class="top-search"> 
	<form method="get" class="top-search-form" action="<?php echo home_url();?>/">
		<fieldset class="top-search">
			<input type="text"  onfocus="this.value=''" value="Search this site"  name="s" id="top-search-input"  />
			<input  type="submit" id="top-search-submit" value="" />  
		</fieldset>
	</form>
</div><!--Close top search-->

<?php } ?>



<img class="header"  src="<?php header_image(); ?>"  alt="header image" />



<?php wp_nav_menu( array( 	// Registered in functions.php with register_nav_menus
		'theme_location' => 'menu-1',  		
		'menu' => 'MyNewMenu',  	 	
		'container' => 'div', 				
		'container_class' => 'top-navigation',	
		'container_id' => '',					
		'menu_class' => 'top-navigation', 		
		'menu_id' => '', 
		'fallback_cb' => '',	
		'before' => '',					
		'after' => '',					
		'link_before' => '',			
		'link_after' => '',			
		'depth' => '6',					
		//	'walker' => '',			
		'echo' => 'true',			
)); 
?>



<div id="inner-wrapper">