<div class="wrap childishlysimple-options-wrapper tabs">
	<h2 class="layout">Childishly Simple theme options</h2>
	<h5 class="layout">Click here to see demos of different layouts: <a href="http://alchemweb.co.uk/demo/1-col/">1 column</a>, &nbsp;<a href="http://alchemweb.co.uk/demo/2-col-cont-left/">2 column content left</a>,  &nbsp;<a href="http://alchemweb.co.uk/demo/2-col-cont-right/">2 column content right</a>,  &nbsp;<a href="http://alchemweb.co.uk/demo/3-col-cont-left/">3 column content left</a>,  &nbsp;<a href="http://alchemweb.co.uk/demo/3-col-cont-middle/">3 column content middle</a> and  &nbsp;<a href="http://alchemweb.co.uk/demo/3-col-cont-right/">3 column content right</a></h5>
	<h5 class="layout">Click <a href="http://www.alchemweb.co.uk/wordpress-childishlysimple-theme/#childishly-simple-changelog">here</a> to check that you have the latest version (see 'Changelog') as minor bug fixes are uploaded to my site immediately</h5>
	<h4 class="layout">To select a color click on the colored boxes by the side of each item. To close the color-picker click on the colored box again.</h4>
		<form method="post" action="options.php" enctype="multipart/form-data">
		
		
		
		
			<?php 
				settings_fields( 'register_this_layout' ); //	http://codex.wordpress.org/Function_Reference/settings_fields
					$errors = '';
					$major_errors = ''; 
					$first_time_use = array ( );	//	Used in setting default checkboxes when the theme is installed for the first time
					$first_time_use  = get_option ( 'childishlysimple01_layout_details' ); 
			?>
				




<table  class="form-table layout"><!-- The table that holds all the options -->
	<tr class="layout"><!-- Liquid or fixed layout-->
		<td class="layout">
			<p class="submit"> <input type="submit" class="button-primary" value="<?php echo 'Save Changes' ?>" /> </p>  
				<h3 class="layout site-width">Site width</h3>
					<div class = "options-container fixed-or-liqud">
					  





<?php	//	Liquid or fixed layout
	$liquid_or_fixed_hardcoded_radio_array = array( 
	'fixed' => 'Fixed', 
	'liquid' => 'Liquid',  
 );
	$liquid_or_fixed_radio = 'childishlysimple01_liquid_or_fixed';
	$liquid_or_fixed_default ='fixed';   
	$liquid_or_fixed_label ='Fixed or \'liquid\' width';	
	
	$liquid_or_fixed_description = 'You can  have either a fixed width or a \'liquid\' width (explained below) for your website.<br /> <br /><span style="font-weight:bold;">Note: Chrome 19, Safari 5.1.4 and Opera 11.64 </span>(and IE 8 at certain resolutions) have a bug and can\'t calculate liquid layouts properly. If you use strongly contrasting colors for your sidebars you might see an unexpected and narrow line of color on the right side of your website. See <a href="http://www.alchemweb.co.uk/liquid-layout-bug-in-chrome-safari-opera/">this page</a> for details. <br /> <br />  A fixed width website looks exactly as you planned it but can look too small on a high-resolution monitor. <br />A \'liquid\' width works on percentages and is commonly used to make a site proportionally fit the screen of any monitor - but bits of it can sometimes look strange. '; 	
	$liquid_or_fixed_id = "liquid_or_fixed";
	
		echo '<p class="layout  liquid-or-fixed-label">'. $liquid_or_fixed_label . '</p>' . "\n\n";
		add_option( "$liquid_or_fixed_radio", "$liquid_or_fixed_default" ); 
			

		$liquid_or_fixed = get_option( "$liquid_or_fixed_radio" ); 
			$i= 1;
				foreach ( $liquid_or_fixed_hardcoded_radio_array as $liquid_or_fixed_radio_key => $liquid_or_fixed_radio_value ){
					if ( $liquid_or_fixed  == '' ) { 	 
						echo '<label class="layout  liquid-or-fixed" for="a_'. $liquid_or_fixed_id . $i . '">'. $liquid_or_fixed_radio_value . '</label>'."\n";
						echo '<input class="layout  liquid-or-fixed" type="radio" id="a_'. $liquid_or_fixed_id . $i++ .'" name="'. $liquid_or_fixed_radio . '" value="' . $liquid_or_fixed_radio_key .'"' ;
							checked( $liquid_or_fixed_default, $liquid_or_fixed_radio_key ); 
							echo ' /><br />' ."\n\n";
		
} else { 	

	echo '<label class="layout  liquid-or-fixed" for="a_'. $liquid_or_fixed_id .   $i .'">'. $liquid_or_fixed_radio_value . '</label>'."\n";
	echo '<input class="layout  liquid-or-fixed" type="radio" id="a_'. $liquid_or_fixed_id . $i++ .'" name="'. $liquid_or_fixed_radio . '" value="' . $liquid_or_fixed_radio_key . '"';
		checked( $liquid_or_fixed, $liquid_or_fixed_radio_key );
		echo ' /><br />' ."\n\n";
	}
}

	echo "\n\n".'<p class="layout-description liquid-or-fixed">', $liquid_or_fixed_description, '</p>', "\n";

	$childishlysimple_layout_details = array( );
	$childishlysimple_layout_details['liquid_or_fixed'] = $liquid_or_fixed;	
	$childishlysimple_layout_details['liquid_or_fixed_default'] = $liquid_or_fixed_default;  
?>
		
</div><!-- Close options-container-->







	<div class = "options-container site-width">

<?php	//	Site width
	$liquid_site_width_default ='80'; // The default liquid or fixed layout was set above
	$fixed_site_width_default ='980'; // The default liquid or fixed layout was set above
		if ( $liquid_or_fixed_default =='liquid' )  $site_width_default = $liquid_site_width_default;
		else $site_width_default = $fixed_site_width_default;

		$fixed_site_width_minimum = '700';
		$fixed_site_width_maximum = '2000';
		$liquid_site_width_minimum = '30';
		$liquid_site_width_maximum = '100';

		$site_width_option ='childishlysimple01_site_width';   
		$site_width_option_label = 'Set the width of your website';  	 

$site_width_option_description = '<span style="font-weight:bold">Check the sidebar widths (further down this page) </span>to make sure that they\'re appropriately fixed or flexible width.  <br /><br />  If you\'ve chosen a \'liquid\' (or percentage) width then enter a number between ' . $liquid_site_width_minimum . ' and '  . $liquid_site_width_maximum .  '. The default percentage  of the screen width is '. $liquid_site_width_default . '% <br />
If you\'ve chosen a fixed width (in pixels) then enter a number between ' .  $fixed_site_width_minimum  . ' and '  .  $fixed_site_width_maximum  .'. The default width in pixels is '. $fixed_site_width_default .'px'; 	

	$site_width_option_id = "site_width"; 

			if( $site_width_default == $fixed_site_width_default ) $site_width_default_units = 'px';
			if( $site_width_default == $liquid_site_width_default ) $site_width_default_units = '%'; 

				add_option( "$site_width_option", "$site_width_default" ); 
				$site_width = get_option( "$site_width_option" );  

					$allowed_html = array();
					$site_width =  wp_kses($site_width , $allowed_html);
					$site_width = esc_attr( $site_width ); 

		if( $site_width == '' ) {	
		if ( $liquid_or_fixed == 'liquid' ) $site_width = $liquid_site_width_default;
		if ( $liquid_or_fixed == 'fixed' ) $site_width = $fixed_site_width_default; 
}  	
		
$site_width_error ='';
$site_width_units = '';
	if ( $liquid_or_fixed == 'liquid' ) {
		if ( ( ctype_digit( $site_width ) ) &&  ( $liquid_site_width_minimum <=  $site_width ) && ( $site_width  <=  $liquid_site_width_maximum ) ){
			$site_width = $site_width; 
			$site_width_units = '%';
	} else {
		$site_width_error = 'style = "color:red;" ';  
		$major_errors = 'major_errors'; 	
		$site_width_error_message =  '<h4 class="layout-error">You\'ve chosen a liquid width (as a percentage). Enter numbers only between ' . $liquid_site_width_minimum . ' and ' . $liquid_site_width_maximum  . ', no spaces or decimal points etc. You entered ' .  $site_width . '</h4>'; 
		$site_width = 'Oops'; 	
		} 
}
	
		
	if ( $liquid_or_fixed == 'fixed' ){
		if ( ( ctype_digit( $site_width ) ) && ( $fixed_site_width_minimum <=  $site_width ) && ( $site_width  <= $fixed_site_width_maximum ) ){
				$site_width = $site_width; 
				$site_width_units = 'px';
	} else {
		$site_width_error = 'style = "color:red;" '; 	
		$major_errors = 'major_errors'; 	
		$site_width_error_message = '<h4 class="layout-error">You\'ve chosen a fixed width (in pixels). Enter numbers only between ' . $fixed_site_width_minimum . ' and ' .   $fixed_site_width_maximum  . ', no spaces or decimal points etc. You entered ' . $site_width. '</h4>';   
		$site_width = 'Oops'; 
		}  	
}	

echo '<label '.  $site_width_error . ' class="layout  site-width" for="a_'.  $site_width_option_id . '">'. $site_width_option_label . '</label><br />' . "\n";
echo '<input ' . $site_width_error .  'class="layout  site-width" type="text" id="a_'.  $site_width_option_id .'" name="'. $site_width_option . '" value="'.   $site_width  .'" />'."\n".'<br />';

if ( isset( $site_width_error_message ) ) echo $site_width_error_message; 
	echo "\n\n".'<p class="layout-description site-width">', $site_width_option_description, '</p>', "\n"; 

		$childishlysimple_layout_details['site_width_number'] = $site_width; 
		$childishlysimple_layout_details['site_width'] = $site_width  .  $site_width_units; 
		$childishlysimple_layout_details['site_width_number_default'] = $site_width_default; 
		$childishlysimple_layout_details['site_width_default'] = $site_width_default . $site_width_default_units; 
?>

</div><!-- Close options-container site-width-->







<?php 	//	Site layout e.g. 2 column content left
	$site_layout_hardcoded_array = array( 
		'one_col' => '1 column &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;', 
		'two_col_cont_left' => '2 col. content left',  
		'two_col_cont_right' => '2 col. content right',
		'three_col_cont_left' => '3 col. content left',
		'three_col_cont_middle' => '3 col. content middle',
		'three_col_cont_right' => '3 col. content right',
 		);

		$site_layout_radio = 'childishlysimple01_sitewide_layout'; 
		$site_layout_default ='three_col_cont_middle';   
		$site_layout_description = 'Choose your site layout<br /> Changing the layout doesn\'t affect widgets (see further down the page). The widgets reappear when you return to your original layout'; 	
		$site_layout_id = "my_site_layout";

			echo '<h3 class="layout"> Site layout</h3>' ."\n\n";
			
				add_option( "$site_layout_radio", "$site_layout_default" ); 
				$site_layout = get_option( "$site_layout_radio" ); 
	
	$i = 1;
		foreach ( $site_layout_hardcoded_array as $layout_radio_key => $layout_radio_value ){
		if ( $site_layout  == '' ) { 	 
						echo "\n\n" . '<div class="site-layout">'."\n";
						echo '<label class="layout  site-layout" for="a_'. $site_layout_id . $i .'">'. $layout_radio_value . '</label>'."\n";
						echo '<input class="layout  site-layout" type="radio" id="a_'. $site_layout_id . $i ++ .'" name="'. $site_layout_radio . '" value="' . $layout_radio_key .'"';
						checked( $site_layout_default, $layout_radio_key ); 
						echo' />' ."\n" ;
						echo '<img  class="site-layout" src="'; 
						echo get_template_directory_uri() ;
						echo '/images/site_layout_' .$layout_radio_key.  '.gif" alt="Site layout image" title="Site layout image"/>' . "\n";
						echo '</div>'."\n\n";
						
						} else { 	

		echo "\n\n" .'<div class="site-layout">'."\n";
		echo '<label class="layout  site-layout" for="a_'. $site_layout_id . $i .'">'. $layout_radio_value . '</label>'."\n";
		echo '<input class="layout  site-layout" type="radio" id="a_'. $site_layout_id . $i ++ .'" name="'. $site_layout_radio. '" value="' . $layout_radio_key . '"';
	checked( $site_layout, $layout_radio_key ); 	
		echo ' />' ."\n";
	
		echo '<img  class="site-layout" src="'; 
		echo get_template_directory_uri() ;
		echo '/images/site_layout_' .$layout_radio_key.  '.gif" alt="Site layout image" title="Site layout image"/>' . "\n";
	
		echo '</div>';
		}
}

	echo "\n\n".'<p class="layout-description site-layout-description">', $site_layout_description, '</p>', "\n";

	$childishlysimple_layout_details['site_layout'] = $site_layout; 
	$childishlysimple_layout_details['site_layout_default'] = $site_layout_default; 
?>









	<h3 class="layout"> Sidebar widths</h3>
		<div class = "options-container left-sidebar-width">

	<?php 	//	Left sidebar width 
		$liquid_or_fixed_for_left_sidebar = 'childishlysimple01_liquid_or_fixed';
		$left_sidebar_option='childishlysimple01_left_sidebar';
		$left_sidebar_label = 'Set the width of the left sidebar';

		$fixed_left_sidebar_default ='190';
		$liquid_left_sidebar_default ='18';


			if( $liquid_or_fixed_default =='liquid' ) {
			$left_sidebar_default = $liquid_left_sidebar_default;
			$left_sidebar_default_units = '%';
			} else {		//	Sidebar left default. 
				$left_sidebar_default = $fixed_left_sidebar_default;
				$left_sidebar_default_units = 'px';
				} 

$fixed_left_sidebar_minimum = '100';
$fixed_left_sidebar_maximum = '300';     

$liquid_left_sidebar_minimum = '10';
$liquid_left_sidebar_maximum = '30';

$left_sidebar_description = 'If your chosen layout has a left sidebar then set the width of the left sidebar. <br /><br /> For Liquid layouts the number should be between ' . $liquid_left_sidebar_minimum  .  ' and ' . $liquid_left_sidebar_maximum .  '. The default width is ' . $liquid_left_sidebar_default . '% <br /><br />
For Fixed layouts the number should be between ' . $fixed_left_sidebar_minimum  . ' and ' .  $fixed_left_sidebar_maximum . '. The default width is ' . $fixed_left_sidebar_default . 'px'; 	

$left_sidebar_id = "left_sidebar"; 


add_option( "$left_sidebar_option", "$left_sidebar_default" ); 

$left_sidebar = get_option( "$left_sidebar_option" ); 

	$allowed_html = array();
	$left_sidebar =  wp_kses($left_sidebar , $allowed_html);
	$left_sidebar = esc_attr( $left_sidebar );

	$liquid_or_fixed_left_sidebar = get_option( "$liquid_or_fixed_for_left_sidebar" ); //	Is this layout Liquid or Fixed?

		if( $left_sidebar=='' ) {	//	If nothing is entered into the site width textbox
				if ( $liquid_or_fixed_left_sidebar == 'liquid' ) $left_sidebar = $liquid_left_sidebar_default;
				if ( $liquid_or_fixed_left_sidebar == 'fixed' ) $left_sidebar = $fixed_left_sidebar_default;
		}  	
		

$left_sidebar_error = '';
$make_it_obvious_left = '';
$left_sidebar_units = '';

if ( $site_layout =='two_col_cont_right'  || $site_layout =='three_col_cont_left' ||	$site_layout == 'three_col_cont_middle'	|| $site_layout =='three_col_cont_right' ) {

if ( $liquid_or_fixed_left_sidebar == 'liquid' ){
	if ( ( ctype_digit( $left_sidebar ) ) &&  ( $liquid_left_sidebar_minimum <=  $left_sidebar ) && ( $left_sidebar  <= $liquid_left_sidebar_maximum ) ){
	$left_sidebar_units = '%';
	
} else {
	$left_sidebar_error = 'style = "color:red;" ';
	$major_errors = 'major_errors'; 
	$left_sidebar_error_message =  '<h4 class="layout-error">You\'ve chosen a liquid width (as a percentage). <br />Enter numbers only between '. $liquid_left_sidebar_minimum .' and '. $liquid_left_sidebar_maximum . ', no spaces or decimal points etc. You entered '. $left_sidebar . '</h4>'; 					

	$left_sidebar = 'Oops'; 
	$make_it_obvious_left = '<p class="make-it-obvious-left">' . $liquid_left_sidebar_minimum . ' - ' . $liquid_left_sidebar_maximum; 
	} 
}
}



if ( $site_layout =='two_col_cont_right'  || $site_layout =='three_col_cont_left' ||	$site_layout == 'three_col_cont_middle'	|| $site_layout =='three_col_cont_right' ) {

if ( $liquid_or_fixed_left_sidebar == 'fixed' ){
	if ( ( ctype_digit( $left_sidebar ) ) && ( $fixed_left_sidebar_minimum <=  $left_sidebar ) && ( $left_sidebar  <= $fixed_left_sidebar_maximum ) ){
	$left_sidebar_units = 'px';	
	} else {
		$left_sidebar_error = 'style = "color:red;" ';
		$major_errors = 'major_errors'; 
		$left_sidebar_error_message = '<h4 class="layout-error">You\'ve chosen a fixed width (in pixels). <br />Enter numbers only between ' . $fixed_left_sidebar_minimum . ' and ' . $fixed_left_sidebar_maximum . ', no spaces or decimal points etc. You entered ' . $left_sidebar. '</h4>';
		$left_sidebar = 'Oops';
		$make_it_obvious_left = '<p class="make-it-obvious-left">' . $fixed_left_sidebar_minimum . ' - ' . $fixed_left_sidebar_maximum; 
		}  	
}
}
		
		
echo '<label '.  $left_sidebar_error . ' class="layout  left-sidebar-width" for="a_'.  $left_sidebar_id . '">'. $left_sidebar_label . '</label><br />' . "\n";

echo '<input ' . $left_sidebar_error .  'class="layout  left-sidebar-width" type="text" id="a_'.  $left_sidebar_id .'" name="'. $left_sidebar_option . '" value="'. $left_sidebar .'" />'."\n".'<br />';

if ( isset( $left_sidebar_error_message ) ) echo $left_sidebar_error_message;

echo "\n\n".'<p class="layout-description left-sidebar-width">', $left_sidebar_description, '</p>', "\n";

$childishlysimple_layout_details['left_sidebar_width_number'] = $left_sidebar; 
$childishlysimple_layout_details['left_sidebar_width'] = $left_sidebar . $left_sidebar_units; 
$childishlysimple_layout_details['left_sidebar_width_number_default'] = $left_sidebar_default; 
$childishlysimple_layout_details['left_sidebar_width_default'] = $left_sidebar_default . $left_sidebar_default_units; 
?>


		<div class="left-sidebar-width-image">
			<img  class="layout sidebar-width left-sidebar-width-image" src="<?php echo get_template_directory_uri() ; ?>/images/left-sidebar-width.gif" alt="sidebar image" title="sidebar image"/>

			<?php echo $make_it_obvious_left;	//	If there are errors, show the permissible range of numbers ?>

		</div> <!-- End left-sidebar-width-image -->
</div><!-- Close options-container left-sidebar-width-->







<div class = "options-container right-sidebar-width">

<?php //	Right sidebar width
	$liquid_or_fixed_for_right_sidebar = 'childishlysimple01_liquid_or_fixed';
	$right_sidebar_option='childishlysimple01_right_sidebar';
	$right_sidebar_label = 'Set the width of the right sidebar'; 

	$fixed_right_sidebar_default ='190'; 	//	Default ( pixels ) if a fixed layout is selected
	$liquid_right_sidebar_default ='18'; 	//	Default ( percent ) if a liquid layout is selected

		if( $liquid_or_fixed_default =='liquid' ) {
		$right_sidebar_default = $liquid_right_sidebar_default;
		$right_sidebar_default_units = '%';
		} else {	//	Sidebar right default. 
			$right_sidebar_default = $fixed_right_sidebar_default;
			$right_sidebar_default_units = 'px';
			} 

$fixed_right_sidebar_minimum = '100';
$fixed_right_sidebar_maximum = '300';     

$liquid_right_sidebar_minimum = '10';
$liquid_right_sidebar_maximum = '30';

$right_sidebar_description = 'If your chosen layout has a right sidebar then set the width of the right sidebar.  <br /><br /> For Liquid layouts the number should be between ' . $liquid_right_sidebar_minimum  .  ' and ' . $liquid_right_sidebar_maximum .  '. The default width is ' . $liquid_right_sidebar_default . '% <br /><br />
For Fixed layouts the number should be between ' . $fixed_right_sidebar_minimum  . ' and ' .  $fixed_right_sidebar_maximum . '. The default width is ' . $fixed_right_sidebar_default . 'px'; 	
$right_sidebar_id = "right_sidebar"; 

add_option( "$right_sidebar_option", "$right_sidebar_default" ); 
$right_sidebar = get_option( "$right_sidebar_option" );

$allowed_html = array();
$right_sidebar =  wp_kses($right_sidebar , $allowed_html);
$right_sidebar = esc_attr( $right_sidebar ); 

$liquid_or_fixed_right_sidebar = get_option( "$liquid_or_fixed_for_right_sidebar" ); //		Is this layout Liquid or Fixed?

	if( $right_sidebar=='' ) {		//		If nothing is entered into the site width textbox
			if ( $liquid_or_fixed_right_sidebar == 'liquid' ) $right_sidebar = $liquid_right_sidebar_default; //	For a liquid layout, a default liquid width
			if ( $liquid_or_fixed_right_sidebar == 'fixed' ) $right_sidebar = $fixed_right_sidebar_default; //	For a fixed layout, a  default fixed width
	}  	
		
		
$right_sidebar_error = '';
$make_it_obvious_right = '';
$right_sidebar_units = '';

if ( $site_layout =='two_col_cont_left'  || $site_layout =='three_col_cont_left' ||	$site_layout == 'three_col_cont_middle'	|| $site_layout =='three_col_cont_right' ) {

if ( $liquid_or_fixed_right_sidebar == 'liquid' ){
	if ( ( ctype_digit( $right_sidebar ) ) &&  ( $liquid_right_sidebar_minimum <=  $right_sidebar ) && ( $right_sidebar  <= $liquid_right_sidebar_maximum ) ){
				$right_sidebar_units = '%';
	} else {
		$right_sidebar_error = 'style = "color:red;" ';  
		$major_errors = 'major_errors'; 
		$right_sidebar_error_message =  '<h4 class="layout-error">You\'ve chosen a liquid width (as a percentage). <br />Enter numbers only between '. $liquid_right_sidebar_minimum .' and '. $liquid_right_sidebar_maximum . ', no spaces or decimal points etc. You entered '. $right_sidebar . '</h4>'; 	
		$right_sidebar = 'Oops'; 
		$make_it_obvious_right = '<p class="make-it-obvious-right">' . $liquid_right_sidebar_minimum . ' - ' . $liquid_right_sidebar_maximum; 
		} 
}
}
	
	
	if ( $site_layout =='two_col_cont_left'  || $site_layout =='three_col_cont_left' ||	$site_layout == 'three_col_cont_middle'	|| $site_layout =='three_col_cont_right' ) {
	
	if ( $liquid_or_fixed_right_sidebar == 'fixed' ){
	if ( ( ctype_digit( $right_sidebar ) ) && ( $fixed_right_sidebar_minimum <=  $right_sidebar ) && ( $right_sidebar  <= $fixed_right_sidebar_maximum ) ){
					$right_sidebar_units = 'px';
	} else {
		$right_sidebar_error = 'style = "color:red;" '; 
		$major_errors = 'major_errors'; 
		$right_sidebar_error_message = '<h4 class="layout-error">You\'ve chosen a fixed width (in pixels). <br />Enter numbers only between ' . $fixed_right_sidebar_minimum . ' and ' . $fixed_right_sidebar_maximum . ', no spaces or decimal points etc. You entered ' . $right_sidebar. '</h4>';
		$right_sidebar = 'Oops'; 
		$make_it_obvious_right = '<p class="make-it-obvious-right">' . $fixed_right_sidebar_minimum . ' - ' . $fixed_right_sidebar_maximum; 
		} 
}
}
		
		
echo '<label '.  $right_sidebar_error . ' class="layout  right-sidebar-width" for="a_'.  $right_sidebar_id . '">'. $right_sidebar_label . '</label><br />' . "\n";

echo '<input ' . $right_sidebar_error .  'class="layout  right-sidebar-width" type="text" id="a_'.  $right_sidebar_id .'" name="'. $right_sidebar_option . '" value="'. $right_sidebar .'" />'."\n".'<br />';

if ( isset( $right_sidebar_error_message ) ) echo $right_sidebar_error_message;

echo "\n\n".'<p class="layout-description right-sidebar-width">', $right_sidebar_description, '</p>', "\n";

$childishlysimple_layout_details['right_sidebar_width_number'] = $right_sidebar; 
$childishlysimple_layout_details['right_sidebar_width'] = $right_sidebar . $right_sidebar_units; 
$childishlysimple_layout_details['right_sidebar_width_number_default'] = $right_sidebar_default; 
$childishlysimple_layout_details['right_sidebar_width_default'] = $right_sidebar_default . $right_sidebar_default_units; 
?>


	<div class="right-sidebar-width-image">
		<img  class="layout sidebar-width right-sidebar-width-image" src="<?php echo get_template_directory_uri() ; ?>/images/right-sidebar-width.gif" alt="sidebar image" title="sidebar image"/>

		<?php echo $make_it_obvious_right; 	//	If there are errors, show the permissible range of numbers ?>

	</div> <!-- End right-sidebar-width-image -->
</div><!-- Close options-container right-sidebar-width -->






<h3 class="layout">Move the first item in the sidebars up or down in order to align it with posts</h3>

<div class = "options-container sidebar-top-spacing">

<?php
	$sidebar_top_spacing_default ='3.4';	
	$sidebar_top_spacing_minimum = '0';
	$sidebar_top_spacing_maximum = '10';
	$sidebar_top_spacing_option ='childishlysimple01_sidebar_top_spacing';
	$sidebar_top_spacing_option_label = 'Move the first item in the sidebars up or down the page';
	$sidebar_top_spacing_option_description = 'Enter a number (with or without a decimal point) between ' .  $sidebar_top_spacing_minimum  . ' and '  .  $sidebar_top_spacing_maximum  .'. The default vertical spacing in ems is '. $sidebar_top_spacing_default .'em'; 	
	$sidebar_top_spacing_option_id = "sidebar_top_spacing"; 
	$sidebar_top_spacing_units = 'em';
	$sidebar_top_spacing_default_units = 'em';

add_option( "$sidebar_top_spacing_option", "$sidebar_top_spacing_default" ); 
$sidebar_top_spacing = get_option( "$sidebar_top_spacing_option" );

		$allowed_html = array();
		$sidebar_top_spacing = wp_kses($sidebar_top_spacing, $allowed_html); 
		$sidebar_top_spacing = esc_attr( $sidebar_top_spacing);			
	
		if( $sidebar_top_spacing =='' ) $sidebar_top_spacing = $sidebar_top_spacing_default;	


		$sidebar_top_spacing_error = '';
		$is_decimal = preg_match('/^\d+(\.\d+)?$/', $sidebar_top_spacing);

			if (! ( ($is_decimal ==1 )  && ( $sidebar_top_spacing_minimum <=  $sidebar_top_spacing ) && ( $sidebar_top_spacing  <= $sidebar_top_spacing_maximum )) ) {
				$sidebar_top_spacing_error = 'style = "color:red;" '; 
				$errors = 'errors'; 
				$sidebar_top_spacing_error_message = '<h4 class="layout-error">Enter numbers only between ' . $sidebar_top_spacing_minimum . ' and ' .   $sidebar_top_spacing_maximum  . ', no spaces and only one decimal point maximum. You entered ' . $sidebar_top_spacing. '</h4>';   
				$sidebar_top_spacing = $sidebar_top_spacing_default;
			} 
	
	
echo '<label '.  $sidebar_top_spacing_error . ' class="layout  sidebar-top-spacing" for="a_'.  $sidebar_top_spacing_option_id . '">'. $sidebar_top_spacing_option_label . '</label><br />' . "\n";

echo '<input ' . $sidebar_top_spacing_error .  'class="layout  sidebar-top-spacing" type="text" id="a_'.  $sidebar_top_spacing_option_id .'" name="'. $sidebar_top_spacing_option . '" value="'. $sidebar_top_spacing .'" />'."\n".'<br />';

if ( isset( $sidebar_top_spacing_error_message ) ) echo $sidebar_top_spacing_error_message; 

echo "\n\n".'<p class="layout-description sidebar-top-spacing">', $sidebar_top_spacing_option_description, '</p>', "\n"; 


$childishlysimple_layout_details['sidebar_top_spacing_number'] = $sidebar_top_spacing; 
$childishlysimple_layout_details['sidebar_top_spacing'] = $sidebar_top_spacing  .  $sidebar_top_spacing_units; 
$childishlysimple_layout_details['sidebar_top_spacing_number_default'] = $sidebar_top_spacing_default; 
$childishlysimple_layout_details['sidebar_top_spacing_default'] = $sidebar_top_spacing_default . $sidebar_top_spacing_default_units; 
?>

</div><!-- End options-container sidebar-top-spacing-->







<h3 class="layout"> To upload the image that goes across the top of your website go to Appearance / Header in the left sidebar on this page</h3>

<div class = "options-container banner">

<p class="layout-description banner">When you've selected and uploaded your banner image you have the option to crop it. Place your cursor on the image and drag the box that appears. If you don't need to make any change to your image then drag the box to cover the whole image </p>

</div> <!-- End options-container banner -->





<h3 class="layout">Body background, site border, content background</h3>

<div class="options-container body-and-content-background">
	
	<h4 class="layout">The body background color can be over-ridden with more options using Appearance/Background</h4>
		<div class="options-left-container body-background">
			
<?php 	//	Body background  color 
	$body_background_color_option='childishlysimple01_body_background_color';  
	$body_background_color_label = 'Set the body background color';  
	$body_background_color_default = '#8fe7a3';
	$body_background_color_description = 'Enter the hexadecimal color of your website\'s background.<br /><br /> NOTE: this background color is over-ridden by Appearance/Background<br /><br />Use numbers 0-9 and letters a - f, case insensitive, with the hash tag. <br /> The default color is ' . $body_background_color_default ;
	$body_background_color_id = "field_moves"; 

		add_option( "$body_background_color_option", "$body_background_color_default" ); 
		$body_background_color = get_option( "$body_background_color_option" );  

			$allowed_html = array();
			$body_background_color =  wp_kses($body_background_color , $allowed_html);
			$body_background_color = esc_attr( $body_background_color ); 

				if( $body_background_color=='' ) $body_background_color = $body_background_color_default; 
				$body_background_color_error ='';
	
		if( ! preg_match( '/^#[a-f0-9]{6}$/i', $body_background_color ) ) {

				$body_background_color_error = 'style = "color:red;" ';  
				$errors = 'errors';	
				$body_background_color_error_message =  '<h4 class="layout-error"> Enter  a hexadecimal number for the color. <br />
				This has a hash tag followed by 6 characters and uses numbers between 0 - 9 and letters between A - F ( case insensitive). <br />
				You entered '. $body_background_color . '  &nbsp; The default color is ' . $body_background_color_default . '<br />
				You might have entered a O instead of a zero or had too few or too many characters.</h4>'; 					
  				$body_background_color = $body_background_color_default;
		}

	echo '<label '.  $body_background_color_error . ' class="layout  body-background-color" for="a_'.  $body_background_color_id . '">'. $body_background_color_label . '</label><br />' . "\n";
	echo '<input ' . $body_background_color_error .  'class="layout  body-background-color childishlysimple-colors" type="text" id="a_'.  $body_background_color_id .'" name="'. $body_background_color_option . '" value="'. $body_background_color .'" />'."\n".'<br />';

	if ( isset( $body_background_color_error_message ) ) echo $body_background_color_error_message;
	
		echo "\n\n".'<p class="layout-description  body-background-color">', $body_background_color_description, '</p>', "\n";

			$childishlysimple_layout_details['body_background_color'] = $body_background_color;
			$childishlysimple_layout_details['body_background_color_default'] = $body_background_color_default;
?>

</div> <!-- end options-left-container body-background -->







<div class="options-right-container site-border-color">

<?php 	//	Site border  color
	$site_border_color_option='childishlysimple01_site_border_color';   
	$site_border_color_label = 'Set the border color of the site';  
	$site_border_color_default = '#ffffff';
	$site_border_color_description = 'Enter the hexadecimal color of your website\'s border.<br /> 
	Use numbers 0-9 and letters a - f, case insensitive, with the hash tag. <br /> 
	The default color is ' . $site_border_color_default ;

	$site_border_color_id = "toe_pick"; 

		add_option( "$site_border_color_option", "$site_border_color_default" ); 
		$site_border_color = get_option( "$site_border_color_option" );  

			$allowed_html = array();
			$site_border_color =  wp_kses($site_border_color , $allowed_html);
			$site_border_color = esc_attr( $site_border_color ); 

				if( $site_border_color=='' ) $site_border_color = $site_border_color_default;
	
					$site_border_color_error ='';
					if( ! preg_match( '/^#[a-f0-9]{6}$/i', $site_border_color ) ) { 
						$site_border_color_error = 'style = "color:red;" ';  
						$errors = 'errors';
						$site_border_color_error_message =  '<h4 class="layout-error"> Enter  a hexadecimal number for the color. <br />
						This has a hash tag followed by 6 characters and uses numbers between 0 - 9 and letters between A - F ( case insensitive). <br />
						You entered '. $site_border_color . '  &nbsp; The default color is ' . $site_border_color_default . '<br />
						You might have entered a O instead of a zero or had too few or too many characters.</h4>'; 					
						$site_border_color =  $site_border_color_default;	// Error message in text box
					}

	echo '<label '.  $site_border_color_error . ' class="layout  body-background-color" for="a_'.  $site_border_color_id . '">'. $site_border_color_label . '</label><br />' . "\n";
	echo '<input ' . $site_border_color_error .  'class="layout  body-background-color childishlysimple-colors" type="text" id="a_'.  $site_border_color_id .'" name="'. 		$site_border_color_option . '" value="'. $site_border_color .'" />'."\n".'<br />';

		if ( isset( $site_border_color_error_message ) ) echo $site_border_color_error_message; 
		
			echo "\n\n".'<p class="layout-description  site-border-color">', $site_border_color_description, '</p>', "\n";

				$childishlysimple_layout_details['site_border_color'] = $site_border_color;
				$childishlysimple_layout_details['site_border_color_default'] = $site_border_color_default;
?>

</div> <!-- end options-right-container site-border-color -->








<div class="options-left-container content-background">

<?php 	//	Content background  color
	$content_background_color_option='childishlysimple01_content_background_color';
	$content_background_color_label = 'Set the content background color';
	$content_background_color_default = '#ffffff'; 
	$content_background_color_description = 'Enter the hexadecimal color of your content background  (the area that contains all your posts) using numbers 0-9 and letters a - f, case insensitive, with the hash tag. <br /> 
The default color is ' . $content_background_color_default;
	$content_background_color_id = "landing_position";

		add_option( "$content_background_color_option", "$content_background_color_default" ); 
		$content_background_color = get_option( "$content_background_color_option" ); 

			$allowed_html = array();
			$content_background_color =  wp_kses($content_background_color , $allowed_html);
			$content_background_color = esc_attr( $content_background_color ); 

			if( $content_background_color=='' ) $content_background_color = $content_background_color_default; 

	$content_background_color_error = '';
	if( ! ( preg_match( '/^#[a-f0-9]{6}$/i', $content_background_color ) ) ||  ( strtolower( $content_background_color ) == 'transparent' ) ) {
		
				$content_background_color_error = 'style = "color:red;" ';  
				$errors = 'errors'; 
				$content_background_color_error_message =  '<h4 class="layout-error"> Enter a hexadecimal number for the color. <br />
				This has a hash tag followed by 6 characters and uses numbers between 0 - 9 and letters between A - F ( case insensitive). <br />
				You entered '. $content_background_color . '  &nbsp; The default color is ' . $content_background_color_default . '<br />
				You might have entered a O instead of a zero or had too few or too many characters.</h4>'; 					
  				$content_background_color = $content_background_color_default; 
	}

	echo '<label '.  $content_background_color_error . ' class="layout  content-background-color" for="a_'.  $content_background_color_id . '">'. $content_background_color_label . '</label><br />' . "\n";
	echo '<input ' . $content_background_color_error .  'class="layout  content-background-color childishlysimple-colors" type="text" id="a_'.  $content_background_color_id .'" name="'. $content_background_color_option . '" value="'. $content_background_color .'" />'."\n".'<br />';

		if( isset( $content_background_color_error_message ) ) echo $content_background_color_error_message;

			echo "\n\n".'<p class="layout-description   content-background-color">', $content_background_color_description, '</p>', "\n";

				$childishlysimple_layout_details['content_background_color'] = $content_background_color;
				$childishlysimple_layout_details['content_background_color_default'] = $content_background_color_default;
?>

</div> <!-- end options-left-container content-background -->

</div><!-- close body-and-content-background -->





	
<h3 class="layout">Drop-down menus (create these in Appearance/Menus)</h3>

<div class="options-container navigation-stuff">
		
		<div class="options-left-container top-navigation-stuff">
			<h3 class="layout top-drop-down-menu">Top drop-down menu</h3>

<?php // Set the top navigation bar background  color 
	$top_navigation_bar_background_color_option='childishlysimple01_top_navigation_bar_background_color';   
	$top_navigation_bar_background_color_label = 'Set the background color of the top navigation bar';  	 
	$top_navigation_bar_background_color_default = '#3cd55e'; 
	$top_navigation_bar_background_color_description = 'Enter the hexadecimal background color of your top navigation bar (use numbers 0-9 and letters a - f, case insensitive) with the hash tag.  <br />The default color is ' . $top_navigation_bar_background_color_default;
	$top_navigation_bar_background_color_id = "throw_jump"; 

add_option( "$top_navigation_bar_background_color_option", "$top_navigation_bar_background_color_default" ); 
$top_navigation_bar_background_color = get_option( "$top_navigation_bar_background_color_option" );  

$allowed_html = array();
$top_navigation_bar_background_color =  wp_kses( $top_navigation_bar_background_color , $allowed_html );
$top_navigation_bar_background_color = esc_attr( $top_navigation_bar_background_color ); 

	if( $top_navigation_bar_background_color=='' ) 	$top_navigation_bar_background_color = $top_navigation_bar_background_color_default; 

	$top_navigation_bar_background_color_error = '';
	if( ! ( preg_match( '/^#[a-f0-9]{6}$/i', $top_navigation_bar_background_color ) ) ||  ( strtolower( $top_navigation_bar_background_color ) == 'transparent' ) ){

				$top_navigation_bar_background_color_error = 'style = "color:red;" ';  
				$errors = 'errors'; 
					
				$top_navigation_bar_background_color_error_message =  '<h4 class="layout-error"> Enter a hexadecimal number for the color. <br />
				This has a hash tag followed by 6 characters and uses numbers between 0 - 9 and letters between A - F ( case insensitive). <br />
				You entered '. $top_navigation_bar_background_color . '  &nbsp; The default color is ' . $top_navigation_bar_background_color_default . '<br />
				You might have entered a O instead of a zero or had too few or too many characters.</h4>'; 						

  				$top_navigation_bar_background_color = $top_navigation_bar_background_color_default;
	}
	
echo '<label '.  $top_navigation_bar_background_color_error . ' class="layout  top-navigation-background-color" for="a_'.  $top_navigation_bar_background_color_id . '">'. $top_navigation_bar_background_color_label . '</label><br />' . "\n";

echo '<input ' . $top_navigation_bar_background_color_error .  'class="layout  top-navigation-background-color childishlysimple-colors" type="text" id="a_'.  $top_navigation_bar_background_color_id .'" name="'. $top_navigation_bar_background_color_option . '" value="'. $top_navigation_bar_background_color .'" />'."\n".'<br />';

if ( isset( $top_navigation_bar_background_color_error_message ) ) echo $top_navigation_bar_background_color_error_message; 

echo "\n\n".'<p class="layout-description small-menu-item top-navigation-bar-background-color">', $top_navigation_bar_background_color_description, '</p>', "\n";

$childishlysimple_layout_details['top_navigation_bar_background_color'] = $top_navigation_bar_background_color; 
$childishlysimple_layout_details['top_navigation_bar_background_color_default'] = $top_navigation_bar_background_color_default;
?>







<?php // Set the top navigation bar top border color 
	$top_navigation_bar_top_border_color_option='childishlysimple01_top_navigation_bar_top_border_color';   
	$top_navigation_bar_top_border_color_label = 'Set the top border color of the top navigation bar';  	 
	$top_navigation_bar_top_border_color_default = '#ffffff'; 
	$top_navigation_bar_top_border_color_description = 'Enter the hexadecimal top border color of your top  navigation bar (use numbers 0-9 and letters a - f, case insensitive) with the hash tag. The default color is ' . $top_navigation_bar_top_border_color_default;
	$top_navigation_bar_top_border_color_id = "closed_choctaw"; 

add_option( "$top_navigation_bar_top_border_color_option", "$top_navigation_bar_top_border_color_default" ); 
$top_navigation_bar_top_border_color = get_option( "$top_navigation_bar_top_border_color_option" );  

$allowed_html = array();
$top_navigation_bar_top_border_color =  wp_kses( $top_navigation_bar_top_border_color , $allowed_html );
$top_navigation_bar_top_border_color = esc_attr( $top_navigation_bar_top_border_color ); 

	if( $top_navigation_bar_top_border_color=='' ) $top_navigation_bar_top_border_color = $top_navigation_bar_top_border_color_default; 

	$top_navigation_bar_top_border_color_error = '';
	if( ! ( preg_match( '/^#[a-f0-9]{6}$/i', $top_navigation_bar_top_border_color ) ) ||  ( strtolower( $top_navigation_bar_top_border_color ) == 'transparent' ) ){

				$top_navigation_bar_top_border_color_error = 'style = "color:red;" ';  
				$errors = 'errors'; 
					
				$top_navigation_bar_top_border_color_error_message =  '<h4 class="layout-error"> Enter a hexadecimal number for the color. <br />
				This has a hash tag followed by 6 characters and uses numbers between 0 - 9 and letters between A - F ( case insensitive). <br />
				You entered '. $top_navigation_bar_top_border_color . '  &nbsp; The default color is ' . $top_navigation_bar_top_border_color_default . '<br />
				You might have entered a O instead of a zero or had too few or too many characters.</h4>'; 					
				
  				$top_navigation_bar_top_border_color = $top_navigation_bar_top_border_color_default;
	}
	
echo '<label '.  $top_navigation_bar_top_border_color_error . ' class="layout  top-navigation-top-border-color" for="a_'.  $top_navigation_bar_top_border_color_id . '">'. $top_navigation_bar_top_border_color_label . '</label><br />' . "\n";

echo '<input ' . $top_navigation_bar_top_border_color_error .  'class="layout  top-navigation-top-border-color childishlysimple-colors" type="text" id="a_'.  $top_navigation_bar_top_border_color_id .'" name="'. $top_navigation_bar_top_border_color_option . '" value="'. $top_navigation_bar_top_border_color .'" />'."\n".'<br />';

if ( isset( $top_navigation_bar_top_border_color_error_message ) ) echo $top_navigation_bar_top_border_color_error_message;

echo "\n\n".'<p class="layout-description small-menu-item top-navigation-bar-top-border-color">', $top_navigation_bar_top_border_color_description, '</p>', "\n";

$childishlysimple_layout_details['top_navigation_bar_top_border_color'] = $top_navigation_bar_top_border_color; 
$childishlysimple_layout_details['top_navigation_bar_top_border_color_default'] = $top_navigation_bar_top_border_color_default;
?>







<?php // Set the top navigation bar bottom border color 
	$top_navigation_bar_bottom_border_color_option='childishlysimple01_top_navigation_bar_bottom_border_color';   
	$top_navigation_bar_bottom_border_color_label = 'Set the bottom border color of the top navigation bar';  	 
	$top_navigation_bar_bottom_border_color_default = '#ffffff'; 
	$top_navigation_bar_bottom_border_color_description = 'Enter the hexadecimal bottom border color of your top navigation bar (use numbers 0-9 and letters a - f, case insensitive) with the hash tag. The default color is ' . $top_navigation_bar_bottom_border_color_default;
	$top_navigation_bar_bottom_border_color_id = "run"; 

add_option( "$top_navigation_bar_bottom_border_color_option", "$top_navigation_bar_bottom_border_color_default" ); 
$top_navigation_bar_bottom_border_color = get_option( "$top_navigation_bar_bottom_border_color_option" );  

$allowed_html = array();
$top_navigation_bar_bottom_border_color =  wp_kses( $top_navigation_bar_bottom_border_color , $allowed_html );
$top_navigation_bar_bottom_border_color = esc_attr( $top_navigation_bar_bottom_border_color ); 

	if( $top_navigation_bar_bottom_border_color=='' ) $top_navigation_bar_bottom_border_color = $top_navigation_bar_bottom_border_color_default; 

	$top_navigation_bar_bottom_border_color_error = '';
	if( ! ( preg_match( '/^#[a-f0-9]{6}$/i', $top_navigation_bar_bottom_border_color ) ) ||  ( strtolower( $top_navigation_bar_bottom_border_color ) == 'transparent' ) ){

				$top_navigation_bar_bottom_border_color_error = 'style = "color:red;" ';  
				$errors = 'errors'; 
					
				$top_navigation_bar_bottom_border_color_error_message =  '<h4 class="layout-error"> Enter a hexadecimal number for the color. <br />
				This has a hash tag followed by 6 characters and uses numbers between 0 - 9 and letters between A - F ( case insensitive). <br />
				You entered '. $top_navigation_bar_bottom_border_color . '  &nbsp; The default color is ' . $top_navigation_bar_bottom_border_color_default . '<br />
				You might have entered a O instead of a zero or had too few or too many characters.</h4>'; 					
				
  				$top_navigation_bar_bottom_border_color = $top_navigation_bar_bottom_border_color_default;
	}
	
echo '<label '.  $top_navigation_bar_bottom_border_color_error . ' class="layout  top-navigation-bottom-border-color" for="a_'.  $top_navigation_bar_bottom_border_color_id . '">'. $top_navigation_bar_bottom_border_color_label . '</label><br />' . "\n";

echo '<input ' . $top_navigation_bar_bottom_border_color_error .  'class="layout  top-navigation-bottom-border-color childishlysimple-colors" type="text" id="a_'.  $top_navigation_bar_bottom_border_color_id .'" name="'. $top_navigation_bar_bottom_border_color_option . '" value="'. $top_navigation_bar_bottom_border_color .'" />'."\n".'<br />';

if ( isset( $top_navigation_bar_bottom_border_color_error_message ) ) echo $top_navigation_bar_bottom_border_color_error_message;

echo "\n\n".'<p class="layout-description small-menu-item top-navigation-bar-bottom-border-color">', $top_navigation_bar_bottom_border_color_description, '</p>', "\n";

$childishlysimple_layout_details['top_navigation_bar_bottom_border_color'] = $top_navigation_bar_bottom_border_color; 
$childishlysimple_layout_details['top_navigation_bar_bottom_border_color_default'] = $top_navigation_bar_bottom_border_color_default;
?>






<?php // Set the top navigation bar link  color 
	$top_navigation_bar_link_color_option='childishlysimple01_top_navigation_bar_link_color';   
	$top_navigation_bar_link_color_label = 'Set the color of the links in the top navigation bar';  	 
	$top_navigation_bar_link_color_default = '#ffffff'; 
	$top_navigation_bar_link_color_description = 'Enter the hexadecimal color of the links in the top navigation bar (use numbers 0-9 and letters a - f, case insensitive) with the hash tag. <br />  The default color is ' . $top_navigation_bar_link_color_default;
	$top_navigation_bar_link_color_id = "backflip"; 

add_option( "$top_navigation_bar_link_color_option", "$top_navigation_bar_link_color_default" ); 

$top_navigation_bar_link_color = get_option( "$top_navigation_bar_link_color_option" );  

$allowed_html = array();
$top_navigation_bar_link_color =  wp_kses( $top_navigation_bar_link_color , $allowed_html );
$top_navigation_bar_link_color = esc_attr( $top_navigation_bar_link_color ); 

	if( $top_navigation_bar_link_color=='' ) $top_navigation_bar_link_color = $top_navigation_bar_link_color_default; 

$top_navigation_bar_link_color_error ='';
if( ! ( preg_match( '/^#[a-f0-9]{6}$/i', $top_navigation_bar_link_color ) ) ) {

				$top_navigation_bar_link_color_error = 'style = "color:red;" ';  
				$errors = 'errors'; 
					
				$top_navigation_bar_link_color_error_message =  '<h4 class="layout-error"> Enter a hexadecimal number for the color. <br />
				This has a hash tag followed by 6 characters and uses numbers between 0 - 9 and letters between A - F ( case insensitive). <br />
				You entered '. $top_navigation_bar_link_color . '  &nbsp; The default color is ' . $top_navigation_bar_link_color_default . '<br />
				You might have entered a O instead of a zero or had too few or too many characters.</h4>'; 					

  				$top_navigation_bar_link_color = $top_navigation_bar_link_color_default;
}
      
	
echo '<label '.  $top_navigation_bar_link_color_error . ' class="layout  top-navigation-background-color" for="a_'.  $top_navigation_bar_link_color_id . '">'. $top_navigation_bar_link_color_label . '</label><br />' . "\n";

echo '<input ' . $top_navigation_bar_link_color_error .  'class="layout  top-navigation-background-color childishlysimple-colors" type="text" id="a_'.  $top_navigation_bar_link_color_id .'" name="'. $top_navigation_bar_link_color_option . '" value="'. $top_navigation_bar_link_color .'" />'."\n".'<br />';

if ( isset( $top_navigation_bar_link_color_error_message ) ) echo $top_navigation_bar_link_color_error_message; 

echo "\n\n".'<p class="layout-description small-menu-item top-navigation-bar-link-color">', $top_navigation_bar_link_color_description, '</p>', "\n";

$childishlysimple_layout_details['top_navigation_bar_link_color'] = $top_navigation_bar_link_color; 
$childishlysimple_layout_details['top_navigation_bar_link_color_default'] = $top_navigation_bar_link_color_default;
?>






<?php //	Set  the top navigation bar hover  color 
	$top_navigation_bar_hover_color_option='childishlysimple01_top_navigation_bar_hover_color';   
	$top_navigation_bar_hover_color_label = 'Set the color of the hovered-over links in the top navigation bar';  	 
	$top_navigation_bar_hover_color_default = '#1a772f';  
	$top_navigation_bar_hover_color_description = 'Enter the hexadecimal color of the hovered-over links in the top navigation bar (use numbers 0-9 and letters a - f, case insensitive) with the hash tag. <br /> The default color is ' . $top_navigation_bar_hover_color_default;
	$top_navigation_bar_hover_color_id = "centered"; 

add_option( "$top_navigation_bar_hover_color_option", "$top_navigation_bar_hover_color_default" ); 
$top_navigation_bar_hover_color = get_option( "$top_navigation_bar_hover_color_option" );  

$allowed_html = array();
$top_navigation_bar_hover_color =  wp_kses( $top_navigation_bar_hover_color , $allowed_html );
$top_navigation_bar_hover_color = esc_attr( $top_navigation_bar_hover_color ); 

	if( $top_navigation_bar_hover_color=='' ) $top_navigation_bar_hover_color = $top_navigation_bar_hover_color_default; 

	$top_navigation_bar_hover_color_error = '';
	if( ! ( preg_match( '/^#[a-f0-9]{6}$/i', $top_navigation_bar_hover_color ) ) ){

				$top_navigation_bar_hover_color_error = 'style = "color:red;" ';  
				$errors = 'errors'; 
					
				$top_navigation_bar_hover_color_error_message =  '<h4 class="layout-error"> Enter a hexadecimal number for the color. <br />
				This has a hash tag followed by 6 characters and uses numbers between 0 - 9 and letters between A - F ( case insensitive). <br />
				You entered '. $top_navigation_bar_hover_color . '  &nbsp; The default color is ' . $top_navigation_bar_hover_color_default . '<br />
				You might have entered a O instead of a zero or had too few or too many characters.</h4>'; 					
				
  				$top_navigation_bar_hover_color = $top_navigation_bar_hover_color_default;
}
      
	
echo '<label '.  $top_navigation_bar_hover_color_error . ' class="layout  top-navigation-background-color" for="a_'.  $top_navigation_bar_hover_color_id . '">'. $top_navigation_bar_hover_color_label . '</label><br />' . "\n";

echo '<input ' . $top_navigation_bar_hover_color_error .  'class="layout  top-navigation-background-color childishlysimple-colors" type="text" id="a_'.  $top_navigation_bar_hover_color_id .'" name="'. $top_navigation_bar_hover_color_option . '" value="'. $top_navigation_bar_hover_color .'" />'."\n".'<br />';

if ( isset( $top_navigation_bar_hover_color_error_message ) ) echo $top_navigation_bar_hover_color_error_message; 

echo "\n\n".'<p class="layout-description small-menu-item top-navigation-bar-hover-color">', $top_navigation_bar_hover_color_description, '</p>', "\n";

$childishlysimple_layout_details['top_navigation_bar_hover_color'] = $top_navigation_bar_hover_color; 
$childishlysimple_layout_details['top_navigation_bar_hover_color_default'] = $top_navigation_bar_hover_color_default;
?>






<?php //	Set the top dropdown menu background  color 
	$top_dropdown_menu_link_background_color_option='childishlysimple01_top_dropdown_menu_background_color';   
	$top_dropdown_menu_link_background_color_label = 'Set the top dropdown  menu background color';  	 
	$top_dropdown_menu_link_background_color_default = '#d7f7de'; 
	$top_dropdown_menu_link_background_color_description = 'Enter the hexadecimal background color of your top menu (use numbers 0-9 and letters a - f, case insensitive) with the hash tag.  This is the background color of menu items before they\'ve been clicked on.<br /> The default color is ' . $top_dropdown_menu_link_background_color_default;
	$top_dropdown_menu_link_background_color_id = "arabesque"; 

add_option( "$top_dropdown_menu_link_background_color_option", "$top_dropdown_menu_link_background_color_default" ); 
$top_dropdown_menu_link_background_color = get_option( "$top_dropdown_menu_link_background_color_option" );  

$allowed_html = array();
$top_dropdown_menu_link_background_color =  wp_kses( $top_dropdown_menu_link_background_color , $allowed_html );
$top_dropdown_menu_link_background_color = esc_attr( $top_dropdown_menu_link_background_color ); 

	if( $top_dropdown_menu_link_background_color=='' ) $top_dropdown_menu_link_background_color = $top_dropdown_menu_link_background_color_default; 

	$top_dropdown_menu_link_background_color_error = '';
	if( ! ( preg_match( '/^#[a-f0-9]{6}$/i', $top_dropdown_menu_link_background_color ) ) ||  ( strtolower( $top_dropdown_menu_link_background_color ) == 'transparent' ) ){
	
				$top_dropdown_menu_link_background_color_error = 'style = "color:red;" ';  
				$errors = 'errors'; 
					
				$top_dropdown_menu_link_background_color_error_message =  '<h4 class="layout-error"> Enter a hexadecimal number for the color. <br />
				This has a hash tag followed by 6 characters and uses numbers between 0 - 9 and letters between A - F ( case insensitive). <br />
				You entered '. $top_dropdown_menu_link_background_color . '  &nbsp; The default color is ' . $top_dropdown_menu_link_background_color_default . '<br />
				You might have entered a O instead of a zero or had too few or too many characters.</h4>'; 					
				
  				$top_dropdown_menu_link_background_color = $top_dropdown_menu_link_background_color_default;
}
      
	
echo '<label '.  $top_dropdown_menu_link_background_color_error . ' class="layout  top-menu-link-background-color" for="a_'.  $top_dropdown_menu_link_background_color_id . '">'. $top_dropdown_menu_link_background_color_label . '</label><br />' . "\n";

echo '<input ' . $top_dropdown_menu_link_background_color_error .  'class="layout  top-menu-link-background-color childishlysimple-colors" type="text" id="a_'.  $top_dropdown_menu_link_background_color_id .'" name="'. $top_dropdown_menu_link_background_color_option . '" value="'. $top_dropdown_menu_link_background_color .'" />'."\n".'<br />';

if ( isset( $top_dropdown_menu_link_background_color_error_message ) ) echo $top_dropdown_menu_link_background_color_error_message; 

echo "\n\n".'<p class="layout-description small-menu-item top-menu-color">', $top_dropdown_menu_link_background_color_description, '</p>', "\n";

$childishlysimple_layout_details['top_dropdown_menu_link_background_color'] = $top_dropdown_menu_link_background_color; 
$childishlysimple_layout_details['top_dropdown_menu_link_background_color_default'] = $top_dropdown_menu_link_background_color_default;
?>






<?php //	Set the top dropdown menu hover link background  color 
	$top_dropdown_menu_hover_background_color_option='childishlysimple01_top_dropdown_menu_hover_background_color';   
	$top_dropdown_menu_hover_background_color_label = 'Set the top dropdown menu hover background color';  	 
	$top_dropdown_menu_hover_background_color_default = '#b7f0c4'; 
	$top_dropdown_menu_hover_background_color_description = 'Enter the hexadecimal background color of your top menu hovered over link (use numbers 0-9 and letters a - f, case insensitive) with the hash tag.  <br /> This is the background color of menu items when they\'re hoverd over. The default color is ' . $top_dropdown_menu_hover_background_color_default;
	$top_dropdown_menu_hover_background_color_id = "counter_turn"; 

add_option( "$top_dropdown_menu_hover_background_color_option", "$top_dropdown_menu_hover_background_color_default" ); 
$top_dropdown_menu_hover_background_color = get_option( "$top_dropdown_menu_hover_background_color_option" );  

$allowed_html = array();
$top_dropdown_menu_hover_background_color =  wp_kses( $top_dropdown_menu_hover_background_color , $allowed_html );
$top_dropdown_menu_hover_background_color = esc_attr( $top_dropdown_menu_hover_background_color ); 

	if( $top_dropdown_menu_hover_background_color=='' )  $top_dropdown_menu_hover_background_color = $top_dropdown_menu_hover_background_color_default; 

	$top_dropdown_menu_hover_background_color_error = '';
	if( ! ( preg_match( '/^#[a-f0-9]{6}$/i', $top_dropdown_menu_hover_background_color ) ) ||  ( strtolower( $top_dropdown_menu_hover_background_color ) == 'transparent' ) ){
	
				$top_dropdown_menu_hover_background_color_error = 'style = "color:red;" ';  
				$errors = 'errors'; 
					
				$top_dropdown_menu_hover_background_color_error_message =  '<h4 class="layout-error"> Enter a hexadecimal number for the color. <br />
				This has a hash tag followed by 6 characters and uses numbers between 0 - 9 and letters between A - F ( case insensitive). <br />
				You entered '. $top_dropdown_menu_hover_background_color . '  &nbsp; The default color is ' . $top_dropdown_menu_hover_background_color_default . '<br /> You might have entered a O instead of a zero or had too few or too many characters.</h4>'; 					
  				$top_dropdown_menu_hover_background_color = $top_dropdown_menu_hover_background_color_default;
	}

echo '<label '.  $top_dropdown_menu_hover_background_color_error . ' class="layout  top-menu-hover-color" for="a_'.  $top_dropdown_menu_hover_background_color_id . '">'. $top_dropdown_menu_hover_background_color_label . '</label><br />' . "\n";

echo '<input ' . $top_dropdown_menu_hover_background_color_error .  'class="layout  top-menu-hover-color childishlysimple-colors" type="text" id="a_'.  $top_dropdown_menu_hover_background_color_id .'" name="'. $top_dropdown_menu_hover_background_color_option . '" value="'. $top_dropdown_menu_hover_background_color .'" />'."\n".'<br />';

if ( isset( $top_dropdown_menu_hover_background_color_error_message ) ) echo $top_dropdown_menu_hover_background_color_error_message; 

echo "\n\n".'<p class="layout-description small-menu-item top-menu-hover-color">', $top_dropdown_menu_hover_background_color_description, '</p>', "\n";

$childishlysimple_layout_details['top_dropdown_menu_hover_background_color'] = $top_dropdown_menu_hover_background_color; 
$childishlysimple_layout_details['top_dropdown_menu_hover_background_color_default'] = $top_dropdown_menu_hover_background_color_default;
?>







<?php //	Set the top dropdown menu active link background  color
	$top_dropdown_menu_active_background_color_option='childishlysimple01_top_dropdown_menu_active_background_color';   
	$top_dropdown_menu_active_background_color_label = 'Set the top dropdown menu active background color';  	 
	$top_dropdown_menu_active_background_color_default = '#99eaab'; 
	$top_dropdown_menu_active_background_color_description = 'Enter the hexadecimal background color of your top menu active link (use numbers 0-9 and letters a - f, case insensitive) with the hash tag.  <br /> This is the background color of menu items the moment that they\'re clicked. The default color is ' . $top_dropdown_menu_active_background_color_default;
	$top_dropdown_menu_active_background_color_id = "hop"; 

add_option( "$top_dropdown_menu_active_background_color_option", "$top_dropdown_menu_active_background_color_default" ); 
$top_dropdown_menu_active_background_color = get_option( "$top_dropdown_menu_active_background_color_option" );  

$allowed_html = array();
$top_dropdown_menu_active_background_color =  wp_kses( $top_dropdown_menu_active_background_color , $allowed_html );
$top_dropdown_menu_active_background_color = esc_attr( $top_dropdown_menu_active_background_color );

	if( $top_dropdown_menu_active_background_color=='' ) $top_dropdown_menu_active_background_color = $top_dropdown_menu_active_background_color_default; 

	$top_dropdown_menu_active_background_color_error ='';
	if( ! ( preg_match( '/^#[a-f0-9]{6}$/i', $top_dropdown_menu_active_background_color ) ) ||  ( strtolower( $top_dropdown_menu_active_background_color ) == 'transparent' ) ){
				$top_dropdown_menu_active_background_color_error = 'style = "color:red;" ';  
				$errors = 'errors'; 
					
				$top_dropdown_menu_active_background_color_error_message =  '<h4 class="layout-error"> Enter a hexadecimal number for the color. <br />
				This has a hash tag followed by 6 characters and uses numbers between 0 - 9 and letters between A - F ( case insensitive). <br />
				You entered '. $top_dropdown_menu_active_background_color . '  &nbsp; The default color is ' . $top_dropdown_menu_active_background_color_default . '<br /> You might have entered a O instead of a zero or had too few or too many characters.</h4>'; 					
				$top_dropdown_menu_active_background_color = $top_dropdown_menu_active_background_color_default;
	}
      
	
echo '<label '.  $top_dropdown_menu_active_background_color_error . ' class="layout  top-menu-active-color" for="a_'.  $top_dropdown_menu_active_background_color_id . '">'. $top_dropdown_menu_active_background_color_label . '</label><br />' . "\n";

echo '<input ' . $top_dropdown_menu_active_background_color_error .  'class="layout  top-menu-active-color childishlysimple-colors" type="text" id="a_'.  $top_dropdown_menu_active_background_color_id .'" name="'. $top_dropdown_menu_active_background_color_option . '" value="'. $top_dropdown_menu_active_background_color .'" />'."\n".'<br />';

if ( isset( $top_dropdown_menu_active_background_color_error_message ) ) echo $top_dropdown_menu_active_background_color_error_message; 

echo "\n\n".'<p class="layout-description small-menu-item top-menu-active-color">', $top_dropdown_menu_active_background_color_description, '</p>', "\n";

$childishlysimple_layout_details['top_dropdown_menu_active_background_color'] = $top_dropdown_menu_active_background_color; 
$childishlysimple_layout_details['top_dropdown_menu_active_background_color_default'] = $top_dropdown_menu_active_background_color_default;
?>






<?php //	Set the top dropdown menu item border  color
	$top_dropdown_menu_border_color_option='childishlysimple01_top_dropdown_menu_border_color';   
	$top_dropdown_menu_border_color_label = 'Set the top menu dropdown border color';  	 
	$top_dropdown_menu_border_color_default = '#0e411a'; 
	$top_dropdown_menu_border_color_description = 'Enter the hexadecimal background color of your top menu dropdown border color (use numbers 0-9 and letters a - f, case insensitive) with the hash tag. <br /> The default color is ' . $top_dropdown_menu_border_color_default ;
	$top_dropdown_menu_border_color_id = "cross_stroke"; 

add_option( "$top_dropdown_menu_border_color_option", "$top_dropdown_menu_border_color_default" ); 
$top_dropdown_menu_border_color = get_option( "$top_dropdown_menu_border_color_option" );  

$allowed_html = array();
$top_dropdown_menu_border_color =  wp_kses( $top_dropdown_menu_border_color , $allowed_html );
$top_dropdown_menu_border_color = esc_attr( $top_dropdown_menu_border_color );

	if( $top_dropdown_menu_border_color=='' ) $top_dropdown_menu_border_color = $top_dropdown_menu_border_color_default; 
	
$top_dropdown_menu_border_color_error = '';
if( ! ( preg_match( '/^#[a-f0-9]{6}$/i', $top_dropdown_menu_border_color ) ) ||  ( strtolower( $top_dropdown_menu_border_color ) == 'transparent' ) ) {

				$top_dropdown_menu_border_color_error = 'style = "color:red;" ';  
				$errors = 'errors'; 
					
				$top_dropdown_menu_border_color_error_message =  '<h4 class="layout-error"> Enter a hexadecimal number for the color. <br />
				This has a hash tag followed by 6 characters and uses numbers between 0 - 9 and letters between A - F ( case insensitive). <br />
				You entered '. $top_dropdown_menu_border_color . '  &nbsp; The default color is ' . $top_dropdown_menu_border_color_default . '<br />
				You might have entered a O instead of a zero or had too few or too many characters.</h4>'; 					
				
  				$top_dropdown_menu_border_color = $top_dropdown_menu_border_color_default;
	}
      	
echo '<label '.  $top_dropdown_menu_border_color_error . ' class="layout  top-menu-border-color" for="a_'.  $top_dropdown_menu_border_color_id . '">'. $top_dropdown_menu_border_color_label . '</label><br />' . "\n";

echo '<input ' . $top_dropdown_menu_border_color_error .  'class="layout  top-menu-border-color childishlysimple-colors" type="text" id="a_'.  $top_dropdown_menu_border_color_id .'" name="'. $top_dropdown_menu_border_color_option . '" value="'. $top_dropdown_menu_border_color .'" />'."\n".'<br />';

if ( isset( $top_dropdown_menu_border_color_error_message ) ) echo $top_dropdown_menu_border_color_error_message; 

echo "\n\n".'<p class="layout-description small-menu-item top-menu-border-color">', $top_dropdown_menu_border_color_description, '</p>', "\n";

$childishlysimple_layout_details['top_dropdown_menu_border_color'] = $top_dropdown_menu_border_color; 
$childishlysimple_layout_details['top_dropdown_menu_border_color_default'] = $top_dropdown_menu_border_color_default;
?>






<?php //	Set the top dropdown menu dropdown font   color 
	$top_dropdown_menu_font_color_option='childishlysimple01_top_dropdown_menu_font_color';   
	$top_dropdown_menu_font_color_label = 'Set the top menu dropdown font color';  	 
	$top_dropdown_menu_font_color_default = '#0e411a'; 
	$top_dropdown_menu_font_color_description = 'Enter the hexadecimal font color of the top menu dropdown items (use numbers 0-9 and letters a - f, case insensitive) with the hash tag. <br /> The default color is ' . $top_dropdown_menu_font_color_default;
	$top_dropdown_menu_font_color_id = "crouch"; 

add_option( "$top_dropdown_menu_font_color_option", "$top_dropdown_menu_font_color_default" ); 
$top_dropdown_menu_font_color = get_option( "$top_dropdown_menu_font_color_option" );  

$allowed_html = array();
$top_dropdown_menu_font_color =  wp_kses( $top_dropdown_menu_font_color , $allowed_html );
$top_dropdown_menu_font_color = esc_attr( $top_dropdown_menu_font_color ); 

	if( $top_dropdown_menu_font_color=='' ) $top_dropdown_menu_font_color = $top_dropdown_menu_font_color_default; 

	$top_dropdown_menu_font_color_error = '';
	if( ! preg_match( '/^#[a-f0-9]{6}$/i', $top_dropdown_menu_font_color ) ) {

				$top_dropdown_menu_font_color_error = 'style = "color:red;" ';  
				$errors = 'errors'; 
					
				$top_dropdown_menu_font_color_error_message = '<h4 class="layout-error"> Enter a hexadecimal number for the font color. <br />
				This has a hash tag followed by 6 characters and uses numbers between 0 - 9 and letters between A - F ( case insensitive). <br />
				You entered '. $top_dropdown_menu_font_color . '  &nbsp; The default color is ' . $top_dropdown_menu_font_color_default . '<br />
				You might have entered a O instead of a zero or had too few or too many characters.</h4>'; 					
				
  				$top_dropdown_menu_font_color = $top_dropdown_menu_font_color_default; 
	}

echo '<label '.  $top_dropdown_menu_font_color_error . ' class="layout  top-menu-font-color" for="a_'.  $top_dropdown_menu_font_color_id . '">'. $top_dropdown_menu_font_color_label . '</label><br />' . "\n";

echo '<input ' . $top_dropdown_menu_font_color_error .  'class="layout  top-menu-font-color childishlysimple-colors" type="text" id="a_'.  $top_dropdown_menu_font_color_id .'" name="'. $top_dropdown_menu_font_color_option . '" value="'. $top_dropdown_menu_font_color .'" />'."\n".'<br />';

if ( isset( $top_dropdown_menu_font_color_error_message ) ) echo $top_dropdown_menu_font_color_error_message; 

echo "\n\n".'<p class="layout-description small-menu-item top-menu-font-color">', $top_dropdown_menu_font_color_description, '</p>', "\n";

$childishlysimple_layout_details['top_dropdown_menu_font_color'] = $top_dropdown_menu_font_color; 
$childishlysimple_layout_details['top_dropdown_menu_font_color_default'] = $top_dropdown_menu_font_color_default;
?>






<?php //	Set the top dropdown menu hovered over dropdown font   color 
	$top_dropdown_menu_hover_font_color_option='childishlysimple01_top_dropdown_menu_hover_font_color';   
	$top_dropdown_menu_hover_font_color_label = 'Set the top menu dropdown hovered over font color';  	 
	$top_dropdown_menu_hover_font_color_default = '#18742d'; 
	$top_dropdown_menu_hover_font_color_description = 'Enter the hexadecimal font color of the top menu hovered over dropdown items (use numbers 0-9 and letters a - f, case insensitive) with the hash tag. <br /> The default color is ' . $top_dropdown_menu_hover_font_color_default;
	$top_dropdown_menu_hover_font_color_id = "camel_spin"; 

add_option( "$top_dropdown_menu_hover_font_color_option", "$top_dropdown_menu_hover_font_color_default" ); 
$top_dropdown_menu_hover_font_color = get_option( "$top_dropdown_menu_hover_font_color_option" );  

$allowed_html = array();
$top_dropdown_menu_hover_font_color =  wp_kses( $top_dropdown_menu_hover_font_color , $allowed_html );
$top_dropdown_menu_hover_font_color = esc_attr( $top_dropdown_menu_hover_font_color ); 

	if( $top_dropdown_menu_hover_font_color=='' ) $top_dropdown_menu_hover_font_color = $top_dropdown_menu_hover_font_color_default; 

	$top_dropdown_menu_hover_font_color_error = '';
	if( ! preg_match( '/^#[a-f0-9]{6}$/i', $top_dropdown_menu_hover_font_color ) ) {

				$top_dropdown_menu_hover_font_color_error = 'style = "color:red;" ';  
				$errors = 'errors'; 
					
				$top_dropdown_menu_hover_font_color_error_message = '<h4 class="layout-error"> Enter a hexadecimal number for the font color. <br />
				This has a hash tag followed by 6 characters and uses numbers between 0 - 9 and letters between A - F ( case insensitive). <br />
				You entered '. $top_dropdown_menu_hover_font_color . '  &nbsp; The default color is ' . $top_dropdown_menu_hover_font_color_default . '<br />
				You might have entered a O instead of a zero or had too few or too many characters.</h4>'; 					
				
  				$top_dropdown_menu_hover_font_color = $top_dropdown_menu_hover_font_color_default;
	}

echo '<label '.  $top_dropdown_menu_hover_font_color_error . ' class="layout  top-menu-hover-font-color" for="a_'.  $top_dropdown_menu_hover_font_color_id . '">'. $top_dropdown_menu_hover_font_color_label . '</label><br />' . "\n";

echo '<input ' . $top_dropdown_menu_hover_font_color_error .  'class="layout  top-menu-hover-font-color childishlysimple-colors" type="text" id="a_'.  $top_dropdown_menu_hover_font_color_id .'" name="'. $top_dropdown_menu_hover_font_color_option . '" value="'. $top_dropdown_menu_hover_font_color .'" />'."\n".'<br />';

if ( isset( $top_dropdown_menu_hover_font_color_error_message ) ) echo $top_dropdown_menu_hover_font_color_error_message; 

echo "\n\n".'<p class="layout-description small-menu-item top-menu-hover-font-color">', $top_dropdown_menu_hover_font_color_description, '</p>', "\n";

$childishlysimple_layout_details['top_dropdown_menu_hover_font_color'] = $top_dropdown_menu_hover_font_color; 
$childishlysimple_layout_details['top_dropdown_menu_hover_font_color_default'] = $top_dropdown_menu_hover_font_color_default;
?>

</div> <!-- end options-left-container top-navigation-stuff-->






<div class="options-right-container bottom-navigation-stuff">
	<h3 class="layout bottom-drop-down-menu">Bottom drop-down menu</h3>

<?php //	Set the bottom navigation bar background  color 
	$bottom_navigation_bar_background_color_option='childishlysimple01_bottom_navigation_bar_background_color';   
	$bottom_navigation_bar_background_color_label = 'Set the background color of the bottom navigation bar';  	 
	$bottom_navigation_bar_background_color_default = '#3cd55e'; 
	$bottom_navigation_bar_background_color_description = 'Enter the hexadecimal background color of your bottom navigation bar (use numbers 0-9 and letters a - f, case insensitive) with the hash tag.  <br /> The default color is ' . $bottom_navigation_bar_background_color_default;
	$bottom_navigation_bar_background_color_id = "bracket_turn"; 
	

add_option( "$bottom_navigation_bar_background_color_option", "$bottom_navigation_bar_background_color_default" ); 
$bottom_navigation_bar_background_color = get_option( "$bottom_navigation_bar_background_color_option" );  

$allowed_html = array();
$bottom_navigation_bar_background_color =  wp_kses( $bottom_navigation_bar_background_color , $allowed_html );
$bottom_navigation_bar_background_color = esc_attr( $bottom_navigation_bar_background_color );

	if( $bottom_navigation_bar_background_color=='' ) $bottom_navigation_bar_background_color = $bottom_navigation_bar_background_color_default;

	$bottom_navigation_bar_background_color_error = '';
	if( ! ( preg_match( '/^#[a-f0-9]{6}$/i', $bottom_navigation_bar_background_color ) ) ||  ( strtolower( $bottom_navigation_bar_background_color ) == 'transparent' ) ) {

				$bottom_navigation_bar_background_color_error = 'style = "color:red;" ';  
				$errors = 'errors'; 
					
				$bottom_navigation_bar_background_color_error_message =  '<h4 class="layout-error"> Enter a hexadecimal number for the color. <br />
				This has a hash tag followed by 6 characters and uses numbers between 0 - 9 and letters between A - F ( case insensitive). <br />
				You entered '. $bottom_navigation_bar_background_color . '  &nbsp; The default color is ' . $bottom_navigation_bar_background_color_default . '<br />
				You might have entered a O instead of a zero or had too few or too many characters.</h4>'; 					
				
  				$bottom_navigation_bar_background_color = $bottom_navigation_bar_background_color_default;
	}
      	
echo '<label '.  $bottom_navigation_bar_background_color_error . ' class="layout  bottom-navigation-background-color" for="a_'.  $bottom_navigation_bar_background_color_id . '">'. $bottom_navigation_bar_background_color_label . '</label><br />' . "\n";

echo '<input ' . $bottom_navigation_bar_background_color_error .  'class="layout  bottom-navigation-bar-background-color childishlysimple-colors" type="text" id="a_'.  $bottom_navigation_bar_background_color_id .'" name="'. $bottom_navigation_bar_background_color_option . '" value="'. $bottom_navigation_bar_background_color .'" />'."\n".'<br />';

if ( isset( $bottom_navigation_bar_background_color_error_message ) ) echo $bottom_navigation_bar_background_color_error_message; 

echo "\n\n".'<p class="layout-description small-menu-item bottom-navigation-bar-background-color">', $bottom_navigation_bar_background_color_description, '</p>', "\n";

$childishlysimple_layout_details['bottom_navigation_bar_background_color'] = $bottom_navigation_bar_background_color; 
$childishlysimple_layout_details['bottom_navigation_bar_background_color_default'] = $bottom_navigation_bar_background_color_default;
?>







<?php // Set the bottom navigation bar top border color 
	$bottom_navigation_bar_top_border_color_option='childishlysimple01_bottom_navigation_bar_top_border_color';   
	$bottom_navigation_bar_top_border_color_label = 'Set the top border color of the bottom navigation bar';  	 
	$bottom_navigation_bar_top_border_color_default = '#ffffff'; 
	$bottom_navigation_bar_top_border_color_description = 'Enter the hexadecimal top border color of your bottom navigation bar (use numbers 0-9 and letters a - f, case insensitive) with the hash tag. The default color is ' . $bottom_navigation_bar_top_border_color_default;
	$bottom_navigation_bar_top_border_color_id = "flying_back_camel"; 

add_option( "$bottom_navigation_bar_top_border_color_option", "$bottom_navigation_bar_top_border_color_default" ); 
$bottom_navigation_bar_top_border_color = get_option( "$bottom_navigation_bar_top_border_color_option" );  

$allowed_html = array();
$bottom_navigation_bar_top_border_color =  wp_kses( $bottom_navigation_bar_top_border_color , $allowed_html );
$bottom_navigation_bar_top_border_color = esc_attr( $bottom_navigation_bar_top_border_color );

	if( $bottom_navigation_bar_top_border_color=='' ) $bottom_navigation_bar_top_border_color = $bottom_navigation_bar_top_border_color_default; 

	$bottom_navigation_bar_top_border_color_error = '';
	if( ! ( preg_match( '/^#[a-f0-9]{6}$/i', $bottom_navigation_bar_top_border_color ) ) ||  ( strtolower( $bottom_navigation_bar_top_border_color ) == 'transparent' ) ){

				$bottom_navigation_bar_top_border_color_error = 'style = "color:red;" ';  
				$errors = 'errors'; 
					
				$bottom_navigation_bar_top_border_color_error_message =  '<h4 class="layout-error"> Enter a hexadecimal number for the color. <br />
				This has a hash tag followed by 6 characters and uses numbers between 0 - 9 and letters between A - F ( case insensitive). <br />
				You entered '. $bottom_navigation_bar_top_border_color . '  &nbsp; The default color is ' . $bottom_navigation_bar_top_border_color_default . '<br />
				You might have entered a O instead of a zero or had too few or too many characters.</h4>'; 					
				
  				$bottom_navigation_bar_top_border_color = $bottom_navigation_bar_top_border_color_default;
	}
	
echo '<label '.  $bottom_navigation_bar_top_border_color_error . ' class="layout  bottom-navigation-top-border-color" for="a_'.  $bottom_navigation_bar_top_border_color_id . '">'. $bottom_navigation_bar_top_border_color_label . '</label><br />' . "\n";

echo '<input ' . $bottom_navigation_bar_top_border_color_error .  'class="layout  bottom-navigation-top-border-color childishlysimple-colors" type="text" id="a_'.  $bottom_navigation_bar_top_border_color_id .'" name="'. $bottom_navigation_bar_top_border_color_option . '" value="'. $bottom_navigation_bar_top_border_color .'" />'."\n".'<br />';

if ( isset( $bottom_navigation_bar_top_border_color_error_message ) ) echo $bottom_navigation_bar_top_border_color_error_message;

echo "\n\n".'<p class="layout-description small-menu-item bottom-navigation-bar-top-border-color">', $bottom_navigation_bar_top_border_color_description, '</p>', "\n";

$childishlysimple_layout_details['bottom_navigation_bar_top_border_color'] = $bottom_navigation_bar_top_border_color; 
$childishlysimple_layout_details['bottom_navigation_bar_top_border_color_default'] = $bottom_navigation_bar_top_border_color_default;
?>






<?php // Set the bottom navigation bar bottom border color 
	$bottom_navigation_bar_bottom_border_color_option='childishlysimple01_bottom_navigation_bar_bottom_border_color';   
	$bottom_navigation_bar_bottom_border_color_label = 'Set the bottom border color of the bottom navigation bar';  	 
	$bottom_navigation_bar_bottom_border_color_default = '#ffffff'; 
	$bottom_navigation_bar_bottom_border_color_description = 'Enter the hexadecimal bottom border color of your bottom navigation bar (use numbers 0-9 and letters a - f, case insensitive) with the hash tag. The default color is ' . $bottom_navigation_bar_bottom_border_color_default;
	$bottom_navigation_bar_bottom_border_color_id = "compulsory_dance"; 

add_option( "$bottom_navigation_bar_bottom_border_color_option", "$bottom_navigation_bar_bottom_border_color_default" ); 
$bottom_navigation_bar_bottom_border_color = get_option( "$bottom_navigation_bar_bottom_border_color_option" );  

$allowed_html = array();
$bottom_navigation_bar_bottom_border_color =  wp_kses( $bottom_navigation_bar_bottom_border_color , $allowed_html );
$bottom_navigation_bar_bottom_border_color = esc_attr( $bottom_navigation_bar_bottom_border_color );

	if( $bottom_navigation_bar_bottom_border_color=='' ) $bottom_navigation_bar_bottom_border_color = $bottom_navigation_bar_bottom_border_color_default; 

	$bottom_navigation_bar_bottom_border_color_error = '';
	if( ! ( preg_match( '/^#[a-f0-9]{6}$/i', $bottom_navigation_bar_bottom_border_color ) ) ||  ( strtolower( $bottom_navigation_bar_bottom_border_color ) == 'transparent' ) ){

				$bottom_navigation_bar_bottom_border_color_error = 'style = "color:red;" ';  
				$errors = 'errors'; 
					
				$bottom_navigation_bar_bottom_border_color_error_message =  '<h4 class="layout-error"> Enter a hexadecimal number for the color. <br />
				This has a hash tag followed by 6 characters and uses numbers between 0 - 9 and letters between A - F ( case insensitive). <br />
				You entered '. $bottom_navigation_bar_bottom_border_color . '  &nbsp; The default color is ' . $bottom_navigation_bar_bottom_border_color_default . '<br />
				You might have entered a O instead of a zero or had too few or too many characters.</h4>'; 					
				
  				$bottom_navigation_bar_bottom_border_color = $bottom_navigation_bar_bottom_border_color_default;
	}
	
echo '<label '.  $bottom_navigation_bar_bottom_border_color_error . ' class="layout  bottom-navigation-bottom-border-color" for="a_'.  $bottom_navigation_bar_bottom_border_color_id . '">'. $bottom_navigation_bar_bottom_border_color_label . '</label><br />' . "\n";

echo '<input ' . $bottom_navigation_bar_bottom_border_color_error .  'class="layout  bottom-navigation-bottom-border-color childishlysimple-colors" type="text" id="a_'.  $bottom_navigation_bar_bottom_border_color_id .'" name="'. $bottom_navigation_bar_bottom_border_color_option . '" value="'. $bottom_navigation_bar_bottom_border_color .'" />'."\n".'<br />';

if ( isset( $bottom_navigation_bar_bottom_border_color_error_message ) ) echo $bottom_navigation_bar_bottom_border_color_error_message;

echo "\n\n".'<p class="layout-description small-menu-item bottom-navigation-bar-bottom-border-color">', $bottom_navigation_bar_bottom_border_color_description, '</p>', "\n";

$childishlysimple_layout_details['bottom_navigation_bar_bottom_border_color'] = $bottom_navigation_bar_bottom_border_color; 
$childishlysimple_layout_details['bottom_navigation_bar_bottom_border_color_default'] = $bottom_navigation_bar_bottom_border_color_default;
?>






<?php //	Set the bottom navigation bar link  color
	$bottom_navigation_bar_link_color_option='childishlysimple01_bottom_navigation_bar_link_color';   
	$bottom_navigation_bar_link_color_label = 'Set the color of the links in the bottom navigation bar';  	 
	$bottom_navigation_bar_link_color_default = '#ffffff'; 
	$bottom_navigation_bar_link_color_description = 'Enter the hexadecimal color of the links in the bottom navigation bar (use numbers 0-9 and letters a - f, case insensitive) with the hash tag. <br />  The default color is ' . $bottom_navigation_bar_link_color_default;
	$bottom_navigation_bar_link_color_id = "butterfly_jump"; 

add_option( "$bottom_navigation_bar_link_color_option", "$bottom_navigation_bar_link_color_default" ); 
$bottom_navigation_bar_link_color = get_option( "$bottom_navigation_bar_link_color_option" );  

$allowed_html = array();
$bottom_navigation_bar_link_color =  wp_kses( $bottom_navigation_bar_link_color , $allowed_html );
$bottom_navigation_bar_link_color = esc_attr( $bottom_navigation_bar_link_color );

	if( $bottom_navigation_bar_link_color=='' ) $bottom_navigation_bar_link_color = $bottom_navigation_bar_link_color_default; 

$bottom_navigation_bar_link_color_error = '';
if( ! preg_match( '/^#[a-f0-9]{6}$/i', $bottom_navigation_bar_link_color ) ) {

				$bottom_navigation_bar_link_color_error = 'style = "color:red;" ';  
				$errors = 'errors'; 
					
				$bottom_navigation_bar_link_color_error_message =  '<h4 class="layout-error"> Enter a hexadecimal number for the color. <br />
				This has a hash tag followed by 6 characters and uses numbers between 0 - 9 and letters between A - F ( case insensitive). <br />
				You entered '. $bottom_navigation_bar_link_color . '  &nbsp; The default color is ' . $bottom_navigation_bar_link_color_default . '<br />
				You might have entered a O instead of a zero or had too few or too many characters.</h4>'; 					

  				$bottom_navigation_bar_link_color = $bottom_navigation_bar_link_color_default;
	}

echo '<label '.  $bottom_navigation_bar_link_color_error . ' class="layout  bottom-navigation-background-color" for="a_'.  $bottom_navigation_bar_link_color_id . '">'. $bottom_navigation_bar_link_color_label . '</label><br />' . "\n";

echo '<input ' . $bottom_navigation_bar_link_color_error .  'class="layout  bottom-navigation-background-color childishlysimple-colors" type="text" id="a_'.  $bottom_navigation_bar_link_color_id .'" name="'. $bottom_navigation_bar_link_color_option . '" value="'. $bottom_navigation_bar_link_color .'" />'."\n".'<br />';

if ( isset( $bottom_navigation_bar_link_color_error_message ) ) echo $bottom_navigation_bar_link_color_error_message; 

echo "\n\n".'<p class="layout-description small-menu-item bottom-navigation-bar-link-color">', $bottom_navigation_bar_link_color_description, '</p>', "\n";

$childishlysimple_layout_details['bottom_navigation_bar_link_color'] = $bottom_navigation_bar_link_color; 
$childishlysimple_layout_details['bottom_navigation_bar_link_color_default'] = $bottom_navigation_bar_link_color_default;
?>






<?php //	Set the bottom navigation bar hover  color 
	$bottom_navigation_bar_hover_color_option='childishlysimple01_bottom_navigation_bar_hover_color';   
	$bottom_navigation_bar_hover_color_label = 'Set the color of the hovered-over links in the bottom navigation bar';  	 
	$bottom_navigation_bar_hover_color_default = '#1a772f'; 
	$bottom_navigation_bar_hover_color_description = 'Enter the hexadecimal color of the hovered-over links in the bottom navigation bar (use numbers 0-9 and letters a - f, case insensitive) with the hash tag. <br />  The default color is ' . $bottom_navigation_bar_hover_color_default;
	$bottom_navigation_bar_hover_color_id = "catch_foot"; 

add_option( "$bottom_navigation_bar_hover_color_option", "$bottom_navigation_bar_hover_color_default" ); 
$bottom_navigation_bar_hover_color = get_option( "$bottom_navigation_bar_hover_color_option" );  

$allowed_html = array();
$bottom_navigation_bar_hover_color =  wp_kses( $bottom_navigation_bar_hover_color , $allowed_html );
$bottom_navigation_bar_hover_color = esc_attr( $bottom_navigation_bar_hover_color ); 

	if( $bottom_navigation_bar_hover_color=='' ) $bottom_navigation_bar_hover_color = $bottom_navigation_bar_hover_color_default; 

	$bottom_navigation_bar_hover_color_error = '';
	if( ! preg_match( '/^#[a-f0-9]{6}$/i', $bottom_navigation_bar_hover_color ) ) {

				$bottom_navigation_bar_hover_color_error = 'style = "color:red;" ';  
				$errors = 'errors'; 
					
				$bottom_navigation_bar_hover_color_error_message =  '<h4 class="layout-error"> Enter a hexadecimal number for the color. <br />
				This has a hash tag followed by 6 characters and uses numbers between 0 - 9 and letters between A - F ( case insensitive). <br />
				You entered '. $bottom_navigation_bar_hover_color . '  &nbsp; The default color is ' . $bottom_navigation_bar_hover_color_default . '<br />
				You might have entered a O instead of a zero or had too few or too many characters.</h4>'; 					
				
  				$bottom_navigation_bar_hover_color = $bottom_navigation_bar_hover_color_default;
}

echo '<label '.  $bottom_navigation_bar_hover_color_error . ' class="layout  bottom-navigation-background-color" for="a_'.  $bottom_navigation_bar_hover_color_id . '">'. $bottom_navigation_bar_hover_color_label . '</label><br />' . "\n";

echo '<input ' . $bottom_navigation_bar_hover_color_error .  'class="layout  bottom-navigation-background-color childishlysimple-colors" type="text" id="a_'.  $bottom_navigation_bar_hover_color_id .'" name="'. $bottom_navigation_bar_hover_color_option . '" value="'. $bottom_navigation_bar_hover_color .'" />'."\n".'<br />';

if ( isset( $bottom_navigation_bar_hover_color_error_message ) ) echo $bottom_navigation_bar_hover_color_error_message; 

echo "\n\n".'<p class="layout-description small-menu-item bottom-navigation-bar-hover-color">', $bottom_navigation_bar_hover_color_description, '</p>', "\n";

$childishlysimple_layout_details['bottom_navigation_bar_hover_color'] = $bottom_navigation_bar_hover_color; 
$childishlysimple_layout_details['bottom_navigation_bar_hover_color_default'] = $bottom_navigation_bar_hover_color_default;
?>






<?php // Set the bottom dropdown menu background  color 
	$bottom_dropdown_menu_link_background_color_option='childishlysimple01_bottom_dropdown_menu_link_background_color';   
	$bottom_dropdown_menu_link_background_color_label = 'Set the bottom dropdown  menu background color';  	 
	$bottom_dropdown_menu_link_background_color_default = '#d7f7de'; 
	$bottom_dropdown_menu_link_background_color_description = 'Enter the hexadecimal background color of your bottom menu (use numbers 0-9 and letters a - f, case insensitive) with the hash tag.  This is the background color of menu items before they\'ve been clicked on. <br /> The default color is ' . $bottom_dropdown_menu_link_background_color_default;
	$bottom_dropdown_menu_link_background_color_id = "element"; 

add_option( "$bottom_dropdown_menu_link_background_color_option", "$bottom_dropdown_menu_link_background_color_default" ); 
$bottom_dropdown_menu_link_background_color = get_option( "$bottom_dropdown_menu_link_background_color_option" );  

$allowed_html = array();
$bottom_dropdown_menu_link_background_color =  wp_kses( $bottom_dropdown_menu_link_background_color , $allowed_html );
$bottom_dropdown_menu_link_background_color = esc_attr( $bottom_dropdown_menu_link_background_color );

	if( $bottom_dropdown_menu_link_background_color=='' ) $bottom_dropdown_menu_link_background_color = $bottom_dropdown_menu_link_background_color_default;

	$bottom_dropdown_menu_link_background_color_error = '';
	if( ! ( preg_match( '/^#[a-f0-9]{6}$/i', $bottom_dropdown_menu_link_background_color ) ) ||  ( strtolower( $bottom_dropdown_menu_link_background_color ) == 'transparent' ) ) {

				$bottom_dropdown_menu_link_background_color_error = 'style = "color:red;" ';  
				$errors = 'errors'; 
					
				$bottom_dropdown_menu_link_background_color_error_message =  '<h4 class="layout-error"> Enter a hexadecimal number for the color. <br />
				This has a hash tag followed by 6 characters and uses numbers between 0 - 9 and letters between A - F ( case insensitive). <br />
				You entered '. $bottom_dropdown_menu_link_background_color . '  &nbsp; The default color is ' . $bottom_dropdown_menu_link_background_color_default . '<br /> You might have entered a O instead of a zero or had too few or too many characters.</h4>'; 					
				
  				$bottom_dropdown_menu_link_background_color = $bottom_dropdown_menu_link_background_color_default;
	}

echo '<label '.  $bottom_dropdown_menu_link_background_color_error . ' class="layout  bottom-menu-color" for="a_'.  $bottom_dropdown_menu_link_background_color_id . '">'. $bottom_dropdown_menu_link_background_color_label . '</label><br />' . "\n";

echo '<input ' . $bottom_dropdown_menu_link_background_color_error .  'class="layout  bottom-menu-color childishlysimple-colors" type="text" id="a_'.  $bottom_dropdown_menu_link_background_color_id .'" name="'. $bottom_dropdown_menu_link_background_color_option . '" value="'. $bottom_dropdown_menu_link_background_color .'" />'."\n".'<br />';

if ( isset( $bottom_dropdown_menu_link_background_color_error_message ) ) echo $bottom_dropdown_menu_link_background_color_error_message; 

echo "\n\n".'<p class="layout-description small-menu-item bottom-menu-color">', $bottom_dropdown_menu_link_background_color_description, '</p>', "\n";

$childishlysimple_layout_details['bottom_dropdown_menu_link_background_color'] = $bottom_dropdown_menu_link_background_color; 
$childishlysimple_layout_details['bottom_dropdown_menu_link_background_color_default'] = $bottom_dropdown_menu_link_background_color_default;
?>






<?php //	Set the bottom dropdown menu hover link background  color
	$bottom_dropdown_menu_hover_background_color_option='childishlysimple01_bottom_dropdown_menu_hover_background_color';   
	$bottom_dropdown_menu_hover_background_color_label = 'Set the bottom dropdown menu hover background color';  	 
	$bottom_dropdown_menu_hover_background_color_default = '#b7f0c4'; 
	$bottom_dropdown_menu_hover_background_color_description = 'Enter the hexadecimal background color of your bottom menu hovered over link (use numbers 0-9 and letters a - f, case insensitive) with the hash tag.  <br /> This is the background color of menu items when they\'re hoverd over. The default color is ' . $bottom_dropdown_menu_hover_background_color_default;
	$bottom_dropdown_menu_hover_background_color_id = "flying_sit_spin"; 

add_option( "$bottom_dropdown_menu_hover_background_color_option", "$bottom_dropdown_menu_hover_background_color_default" ); 
$bottom_dropdown_menu_hover_background_color = get_option( "$bottom_dropdown_menu_hover_background_color_option" );  

$allowed_html = array();
$bottom_dropdown_menu_hover_background_color =  wp_kses( $bottom_dropdown_menu_hover_background_color , $allowed_html );
$bottom_dropdown_menu_hover_background_color = esc_attr( $bottom_dropdown_menu_hover_background_color );

if( $bottom_dropdown_menu_hover_background_color=='' ) $bottom_dropdown_menu_hover_background_color = $bottom_dropdown_menu_hover_background_color_default; 		

	$bottom_dropdown_menu_hover_background_color_error = '';
	if( ! ( preg_match( '/^#[a-f0-9]{6}$/i', $bottom_dropdown_menu_hover_background_color ) ) ||  ( strtolower( $bottom_dropdown_menu_hover_background_color ) == 'transparent' ) ) {
				$bottom_dropdown_menu_hover_background_color_error = 'style = "color:red;" ';  
				$errors = 'errors'; 
					
				$bottom_dropdown_menu_hover_background_color_error_message =  '<h4 class="layout-error"> Enter a hexadecimal number for the color. <br />
				This has a hash tag followed by 6 characters and uses numbers between 0 - 9 and letters between A - F ( case insensitive). <br />
				You entered '. $bottom_dropdown_menu_hover_background_color . '  &nbsp; The default color is ' . $bottom_dropdown_menu_hover_background_color_default . '<br />
				You might have entered a O instead of a zero or had too few or too many characters.</h4>'; 					
				
  				$bottom_dropdown_menu_hover_background_color = $bottom_dropdown_menu_hover_background_color_default;
	}

echo '<label '.  $bottom_dropdown_menu_hover_background_color_error . ' class="layout  bottom-menu-hover-color" for="a_'.  $bottom_dropdown_menu_hover_background_color_id . '">'. $bottom_dropdown_menu_hover_background_color_label . '</label><br />' . "\n";

echo '<input ' . $bottom_dropdown_menu_hover_background_color_error .  'class="layout  bottom-menu-hover-color childishlysimple-colors" type="text" id="a_'.  $bottom_dropdown_menu_hover_background_color_id .'" name="'. $bottom_dropdown_menu_hover_background_color_option . '" value="'. $bottom_dropdown_menu_hover_background_color .'" />'."\n".'<br />';

if ( isset( $bottom_dropdown_menu_hover_background_color_error_message ) ) echo $bottom_dropdown_menu_hover_background_color_error_message; 

echo "\n\n".'<p class="layout-description small-menu-item bottom-menu-hover-color">', $bottom_dropdown_menu_hover_background_color_description, '</p>', "\n";

$childishlysimple_layout_details['bottom_dropdown_menu_hover_background_color'] = $bottom_dropdown_menu_hover_background_color; 
$childishlysimple_layout_details['bottom_dropdown_menu_hover_background_color_default'] = $bottom_dropdown_menu_hover_background_color_default;
?>






<?php //	Set the bottom dropdown menu active link background  color
	$bottom_dropdown_menu_active_background_color_option='childishlysimple01_bottom_dropdown_menu_active_background_color';   
	$bottom_dropdown_menu_active_background_color_label = 'Set the bottom dropdown menu active background color';  	 
	$bottom_dropdown_menu_active_background_color_default = '#99eaab'; 
	$bottom_dropdown_menu_active_background_color_description = 'Enter the hexadecimal background color of your bottom menu active link (use numbers 0-9 and letters a - f, case insensitive) with the hash tag.  <br /> This is the background color of menu items the moment that they\'re clicked. The default color is ' . $bottom_dropdown_menu_active_background_color_default;
	$bottom_dropdown_menu_active_background_color_id = "free_dance"; 

add_option( "$bottom_dropdown_menu_active_background_color_option", "$bottom_dropdown_menu_active_background_color_default" ); 
$bottom_dropdown_menu_active_background_color = get_option( "$bottom_dropdown_menu_active_background_color_option" );  

$allowed_html = array();
$bottom_dropdown_menu_active_background_color =  wp_kses( $bottom_dropdown_menu_active_background_color , $allowed_html );
$bottom_dropdown_menu_active_background_color = esc_attr( $bottom_dropdown_menu_active_background_color );

if( $bottom_dropdown_menu_active_background_color=='' ) $bottom_dropdown_menu_active_background_color = $bottom_dropdown_menu_active_background_color_default;
	
	$bottom_dropdown_menu_active_background_color_error  = '';
	if( ! ( preg_match( '/^#[a-f0-9]{6}$/i', $bottom_dropdown_menu_active_background_color ) ) ||  ( strtolower( $bottom_dropdown_menu_active_background_color ) == 'transparent' ) ){
				$bottom_dropdown_menu_active_background_color_error = 'style = "color:red;" ';  
				$errors = 'errors'; 
					
				$bottom_dropdown_menu_active_background_color_error_message =  '<h4 class="layout-error"> Enter a hexadecimal number for the color. <br />
				This has a hash tag followed by 6 characters and uses numbers between 0 - 9 and letters between A - F ( case insensitive). <br />
				You entered '. $bottom_dropdown_menu_active_background_color . '  &nbsp; The default color is ' . $bottom_dropdown_menu_active_background_color_default . '<br />
				You might have entered a O instead of a zero or had too few or too many characters.</h4>'; 					
				
  				$bottom_dropdown_menu_active_background_color = $bottom_dropdown_menu_active_background_color_default;
	}
	
echo '<label '.  $bottom_dropdown_menu_active_background_color_error . ' class="layout  bottom-menu-active-color" for="a_'.  $bottom_dropdown_menu_active_background_color_id . '">'. $bottom_dropdown_menu_active_background_color_label . '</label><br />' . "\n";

echo '<input ' . $bottom_dropdown_menu_active_background_color_error .  'class="layout  bottom-menu-active-color childishlysimple-colors" type="text" id="a_'.  $bottom_dropdown_menu_active_background_color_id .'" name="'. $bottom_dropdown_menu_active_background_color_option . '" value="'. $bottom_dropdown_menu_active_background_color .'" />'."\n".'<br />';

if ( isset( $bottom_dropdown_menu_active_background_color_error_message ) ) echo $bottom_dropdown_menu_active_background_color_error_message; 

echo "\n\n".'<p class="layout-description small-menu-item bottom-menu-active-color">', $bottom_dropdown_menu_active_background_color_description, '</p>', "\n";

$childishlysimple_layout_details['bottom_dropdown_menu_active_background_color'] = $bottom_dropdown_menu_active_background_color; 
$childishlysimple_layout_details['bottom_dropdown_menu_active_background_color_default'] = $bottom_dropdown_menu_active_background_color_default;
?>






<?php //	Set the bottom dropdown menu item border  color 
	$bottom_dropdown_menu_border_color_option='childishlysimple01_bottom_dropdown_menu_border_color';   
	$bottom_dropdown_menu_border_color_label = 'Set the bottom menu dropdown border color';  	 
	$bottom_dropdown_menu_border_color_default = '#0e411a'; 
	$bottom_dropdown_menu_border_color_description = 'Enter the hexadecimal background color of your bottom menu dropdown border color (use numbers 0-9 and letters a - f, case insensitive) with the hash tag. <br />	The default color is ' . $bottom_dropdown_menu_border_color_default;
	$bottom_dropdown_menu_border_color_id = "footwork_sequence"; 

add_option( "$bottom_dropdown_menu_border_color_option", "$bottom_dropdown_menu_border_color_default" ); 
$bottom_dropdown_menu_border_color = get_option( "$bottom_dropdown_menu_border_color_option" );  

$allowed_html = array();
$bottom_dropdown_menu_border_color =  wp_kses( $bottom_dropdown_menu_border_color , $allowed_html );
$bottom_dropdown_menu_border_color = esc_attr( $bottom_dropdown_menu_border_color );

	if( $bottom_dropdown_menu_border_color=='' ) $bottom_dropdown_menu_border_color = $bottom_dropdown_menu_border_color_default; 
	//	If nothing is entered into the background color textbox
			
	$bottom_dropdown_menu_border_color_error ='';
	if( ! ( preg_match( '/^#[a-f0-9]{6}$/i', $bottom_dropdown_menu_border_color ) ) ||  ( strtolower( $bottom_dropdown_menu_border_color ) == 'transparent' ) ){

				$bottom_dropdown_menu_border_color_error = 'style = "color:red;" ';  
				$errors = 'errors'; 
					
				$bottom_dropdown_menu_border_color_error_message =  '<h4 class="layout-error"> Enter a hexadecimal number for the color. <br />
				This has a hash tag followed by 6 characters and uses numbers between 0 - 9 and letters between A - F ( case insensitive). <br />
				You entered '. $bottom_dropdown_menu_border_color . '  &nbsp; The default color is ' . $bottom_dropdown_menu_border_color_default . '<br />
				You might have entered a O instead of a zero or had too few or too many characters.</h4>'; 					
				
  				$bottom_dropdown_menu_border_color = $bottom_dropdown_menu_border_color_default;
	}

echo '<label '.  $bottom_dropdown_menu_border_color_error . ' class="layout  bottom-menu-border-color" for="a_'.  $bottom_dropdown_menu_border_color_id . '">'. $bottom_dropdown_menu_border_color_label . '</label><br />' . "\n";

echo '<input ' . $bottom_dropdown_menu_border_color_error .  'class="layout  bottom-menu-border-color childishlysimple-colors" type="text" id="a_'.  $bottom_dropdown_menu_border_color_id .'" name="'. $bottom_dropdown_menu_border_color_option . '" value="'. $bottom_dropdown_menu_border_color .'" />'."\n".'<br />';

if ( isset( $bottom_dropdown_menu_border_color_error_message ) ) echo $bottom_dropdown_menu_border_color_error_message; 

echo "\n\n".'<p class="layout-description small-menu-item bottom-menu-border-color">', $bottom_dropdown_menu_border_color_description, '</p>', "\n";

$childishlysimple_layout_details['bottom_dropdown_menu_border_color'] = $bottom_dropdown_menu_border_color; 
$childishlysimple_layout_details['bottom_dropdown_menu_border_color_default'] = $bottom_dropdown_menu_border_color_default;
?>







<?php // Set the bottom  dropdown menu font   color
	$bottom_dropdown_menu_font_color_option='childishlysimple01_bottom_dropdown_menu_font_color';   
	$bottom_dropdown_menu_font_color_label = 'Set the bottom menu dropdown font color';  	 
	$bottom_dropdown_menu_font_color_default = '#0e411a'; 
	$bottom_dropdown_menu_font_color_description = 'Enter the hexadecimal font color of the bottom menu dropdown items (use numbers 0-9 and letters a - f, case insensitive) with the hash tag. <br /> The default color is ' . $bottom_dropdown_menu_font_color_default;
	$bottom_dropdown_menu_font_color_id = "ina_bauer"; 

add_option( "$bottom_dropdown_menu_font_color_option", "$bottom_dropdown_menu_font_color_default" ); 
$bottom_dropdown_menu_font_color = get_option( "$bottom_dropdown_menu_font_color_option" );  

$allowed_html = array();
$bottom_dropdown_menu_font_color =  wp_kses( $bottom_dropdown_menu_font_color , $allowed_html );
$bottom_dropdown_menu_font_color = esc_attr( $bottom_dropdown_menu_font_color );

	if( $bottom_dropdown_menu_font_color=='' ) $bottom_dropdown_menu_font_color = $bottom_dropdown_menu_font_color_default; 

	$bottom_dropdown_menu_font_color_error = '';
	if( !  preg_match( '/^#[a-f0-9]{6}$/i', $bottom_dropdown_menu_font_color ) ) {
	
				$bottom_dropdown_menu_font_color_error = 'style = "color:red;" ';  
				$errors = 'errors'; 
					
				$bottom_dropdown_menu_font_color_error_message = '<h4 class="layout-error"> Enter a hexadecimal number for the font color. <br />
				This has a hash tag followed by 6 characters and uses numbers between 0 - 9 and letters between A - F ( case insensitive). <br />
				You entered '. $bottom_dropdown_menu_font_color . '  &nbsp; The default color is ' . $bottom_dropdown_menu_font_color_default . '<br />
				You might have entered a O instead of a zero or had too few or too many characters.</h4>'; 					
				
  				$bottom_dropdown_menu_font_color = $bottom_dropdown_menu_font_color_default;
	}
      
	
echo '<label '.  $bottom_dropdown_menu_font_color_error . ' class="layout  bottom-menu-font-color" for="a_'.  $bottom_dropdown_menu_font_color_id . '">'. $bottom_dropdown_menu_font_color_label . '</label><br />' . "\n";

echo '<input ' . $bottom_dropdown_menu_font_color_error .  'class="layout  bottom-menu-font-color childishlysimple-colors" type="text" id="a_'.  $bottom_dropdown_menu_font_color_id .'" name="'. $bottom_dropdown_menu_font_color_option . '" value="'. $bottom_dropdown_menu_font_color .'" />'."\n".'<br />';

if ( isset( $bottom_dropdown_menu_font_color_error_message ) ) echo $bottom_dropdown_menu_font_color_error_message; 

echo "\n\n".'<p class="layout-description small-menu-item bottom-menu-font-color">', $bottom_dropdown_menu_font_color_description, '</p>', "\n";

$childishlysimple_layout_details['bottom_dropdown_menu_font_color'] = $bottom_dropdown_menu_font_color; 
$childishlysimple_layout_details['bottom_dropdown_menu_font_color_default'] = $bottom_dropdown_menu_font_color_default;
?>






<?php //	Set the bottom dropdown menu hovered over dropdown font   color 
	$bottom_dropdown_menu_hover_font_color_option='childishlysimple01_bottom_dropdown_menu_hover_font_color';   
	$bottom_dropdown_menu_hover_font_color_label = 'Set the bottom menu dropdown hovered over font color';  	 
	$bottom_dropdown_menu_hover_font_color_default = '#0e411a'; 
	$bottom_dropdown_menu_hover_font_color_description = 'Enter the hexadecimal font color of the bottom menu hovered over dropdown items (use numbers 0-9 and letters a - f, case insensitive) with the hash tag. <br /> The default color is ' . $bottom_dropdown_menu_hover_font_color_default;
	$bottom_dropdown_menu_hover_font_color_id = "flying_camel"; 

add_option( "$bottom_dropdown_menu_hover_font_color_option", "$bottom_dropdown_menu_hover_font_color_default" ); 
$bottom_dropdown_menu_hover_font_color = get_option( "$bottom_dropdown_menu_hover_font_color_option" );  

$allowed_html = array();
$bottom_dropdown_menu_hover_font_color =  wp_kses( $bottom_dropdown_menu_hover_font_color , $allowed_html );
$bottom_dropdown_menu_hover_font_color = esc_attr( $bottom_dropdown_menu_hover_font_color );

	if( $bottom_dropdown_menu_hover_font_color=='' ) $bottom_dropdown_menu_hover_font_color = $bottom_dropdown_menu_hover_font_color_default; 

	$bottom_dropdown_menu_hover_font_color_error = '';
	if( ! preg_match( '/^#[a-f0-9]{6}$/i', $bottom_dropdown_menu_hover_font_color ) ) {

				$bottom_dropdown_menu_hover_font_color_error = 'style = "color:red;" ';  
				$errors = 'errors'; 
					
				$bottom_dropdown_menu_hover_font_color_error_message = '<h4 class="layout-error"> Enter a hexadecimal number for the font color. <br />
				This has a hash tag followed by 6 characters and uses numbers between 0 - 9 and letters between A - F ( case insensitive). <br />
				You entered '. $bottom_dropdown_menu_hover_font_color . '  &nbsp; The default color is ' . $bottom_dropdown_menu_hover_font_color_default . '<br />
				You might have entered a O instead of a zero or had too few or too many characters.</h4>'; 					
				
  				$bottom_dropdown_menu_hover_font_color = $bottom_dropdown_menu_hover_font_color_default;
	}

echo '<label '.  $bottom_dropdown_menu_hover_font_color_error . ' class="layout  bottom-menu-hover-font-color" for="a_'.  $bottom_dropdown_menu_hover_font_color_id . '">'. $bottom_dropdown_menu_hover_font_color_label . '</label><br />' . "\n";

echo '<input ' . $bottom_dropdown_menu_hover_font_color_error .  'class="layout  bottom-menu-hover-font-color childishlysimple-colors" type="text" id="a_'.  $bottom_dropdown_menu_hover_font_color_id .'" name="'. $bottom_dropdown_menu_hover_font_color_option . '" value="'. $bottom_dropdown_menu_hover_font_color .'" />'."\n".'<br />';

if ( isset( $bottom_dropdown_menu_hover_font_color_error_message ) ) echo $bottom_dropdown_menu_hover_font_color_error_message; 

echo "\n\n".'<p class="layout-description small-menu-item bottom-menu-hover-font-color">', $bottom_dropdown_menu_hover_font_color_description, '</p>', "\n";

$childishlysimple_layout_details['bottom_dropdown_menu_hover_font_color'] = $bottom_dropdown_menu_hover_font_color; 
$childishlysimple_layout_details['bottom_dropdown_menu_hover_font_color_default'] = $bottom_dropdown_menu_hover_font_color_default;
?>

	</div><!-- end options-right-container bottom-navigation-stuff-->
</div><!-- End options-container navigation-stuff-->




<h3 class="layout"> Sidebar background colors</h3>

<div class="options-container sidebar-background-colors">

<div class="options-left-container short-left-sidebar-background-color">

<?php	//	Left sidebar  background  color options
	$short_left_sidebar_background_color_option='childishlysimple01_short_left_sidebar_background_color';  
	$short_left_sidebar_background_color_label = 'Set the background color of the left sidebar (extends down only as far as the last sidebar item)';  	 
	$short_left_sidebar_background_color_default = '#ffff55';
	$short_left_sidebar_background_color_description = 'Enter the hexadecimal background color of your left sidebar (use numbers 0-9 and letters a - f, case insensitive) with the hash tag. <br /><br /> 
	This background color only extends down the page as far as the last item in the left sidebar. <br /><br /> 
	The default color is ' . $short_left_sidebar_background_color_default;
	$short_left_sidebar_background_color_id = "open_choctaw";

		add_option( "$short_left_sidebar_background_color_option", "$short_left_sidebar_background_color_default" ); 
		$short_left_sidebar_background_color = get_option( "$short_left_sidebar_background_color_option" );

			$allowed_html = array();
			$short_left_sidebar_background_color =  wp_kses( $short_left_sidebar_background_color , $allowed_html );
			$short_left_sidebar_background_color = esc_attr( $short_left_sidebar_background_color );

				if( $short_left_sidebar_background_color=='' ) $short_left_sidebar_background_color = $short_left_sidebar_background_color_default; 

		$short_left_sidebar_background_color_error  = '';
		if( ! ( preg_match( '/^#[a-f0-9]{6}$/i', $short_left_sidebar_background_color ) ) ||  ( strtolower( $short_left_sidebar_background_color ) == 'transparent' ) ) {
				$short_left_sidebar_background_color_error = 'style = "color:red;" ';  
				$errors = 'errors'; 	
				$short_left_sidebar_background_color_error_message =  '<h4 class="layout-error"> Enter a hexadecimal number for the color. <br />
				This has a hash tag followed by 6 characters and uses numbers between 0 - 9 and letters between A - F ( case insensitive). <br />
				You entered '. $short_left_sidebar_background_color . '  &nbsp; The default color is ' . $short_left_sidebar_background_color_default . '<br />
				You might have entered a O instead of a zero or had too few or too many characters.</h4>'; 					
  				$short_left_sidebar_background_color = $short_left_sidebar_background_color_default;
		}
      	
	echo '<label '.  $short_left_sidebar_background_color_error . ' class="layout  short-left-sidebar-background-color" for="a_'.  $short_left_sidebar_background_color_id . '">'. $short_left_sidebar_background_color_label . '</label><br />' . "\n";
	echo '<input ' . $short_left_sidebar_background_color_error .  'class="layout  short-left-sidebar-background-color childishlysimple-colors" type="text" id="a_'.  $short_left_sidebar_background_color_id .'" name="'. $short_left_sidebar_background_color_option . '" value="'. $short_left_sidebar_background_color .'" />'."\n".'<br />';

		if ( isset( $short_left_sidebar_background_color_error_message ) ) echo $short_left_sidebar_background_color_error_message; 

			echo "\n\n".'<p class="layout-description short-left-sidebar-background-color">', $short_left_sidebar_background_color_description, '</p>', "\n";

				$childishlysimple_layout_details['short_left_sidebar_background_color'] = $short_left_sidebar_background_color; 
				$childishlysimple_layout_details['short_left_sidebar_background_color_default'] = $short_left_sidebar_background_color_default;
?>

</div><!-- end options-left-container short-left-sidebar-background-color -->





	
<div class="options-right-container short-right-sidebar-background-color">
	
<?php	//	Right sidebar background  color
	$short_right_sidebar_background_color_option='childishlysimple01_short_right_sidebar_background_color'; 
	$short_right_sidebar_background_color_label = 'Set the background color of the right sidebar (extends down only as far as the last sidebar item)';  	 
	$short_right_sidebar_background_color_default = '#ffff55'; 
	$short_right_sidebar_background_color_description = 'Enter the hexadecimal background color of your right sidebar (use numbers 0-9 and letters a - f, case insensitive) with the hash tag. <br /><br /> 
	This background color only extends down the page as far as the last item in the right sidebar.<br /><br /> 
	The default color is ' . $short_right_sidebar_background_color_default;
	$short_right_sidebar_background_color_id = "toe_step"; 

		add_option( "$short_right_sidebar_background_color_option", "$short_right_sidebar_background_color_default" ); 
		$short_right_sidebar_background_color = get_option( "$short_right_sidebar_background_color_option" ); 

			$allowed_html = array();
			$short_right_sidebar_background_color =  wp_kses( $short_right_sidebar_background_color , $allowed_html );
			$short_right_sidebar_background_color = esc_attr( $short_right_sidebar_background_color );

				if( $short_right_sidebar_background_color=='' ) $short_right_sidebar_background_color = $short_right_sidebar_background_color_default; 

					$short_right_sidebar_background_color_error = '';
					if( ! ( preg_match( '/^#[a-f0-9]{6}$/i', $short_right_sidebar_background_color ) ) ||  ( strtolower( $short_right_sidebar_background_color ) == 'transparent' ) ) {
						$short_right_sidebar_background_color_error = 'style = "color:red;" ';  
						$errors = 'errors'; 
						$short_right_sidebar_background_color_error_message =  '<h4 class="layout-error"> Enter a hexadecimal number for the color. <br />
						This has a hash tag followed by 6 characters and uses numbers between 0 - 9 and letters between A - F ( case insensitive). <br />
						You entered '. $short_right_sidebar_background_color . '  &nbsp; The default color is ' . $short_right_sidebar_background_color_default . '<br />
						You might have entered a O instead of a zero or had too few or too many characters.</h4>'; 					
						$short_right_sidebar_background_color = $short_right_sidebar_background_color_default;
				}
      
	echo '<label '.  $short_right_sidebar_background_color_error . ' class="layout  short-right-sidebar-background-color" for="a_'.  $short_right_sidebar_background_color_id . '">'. $short_right_sidebar_background_color_label . '</label><br />' . "\n";
	echo '<input ' . $short_right_sidebar_background_color_error .  'class="layout  short-right-sidebar-background-color childishlysimple-colors" type="text" id="a_'.  $short_right_sidebar_background_color_id .'" name="'. $short_right_sidebar_background_color_option . '" value="'. $short_right_sidebar_background_color .'" />'."\n".'<br />';

	if( isset( $short_right_sidebar_background_color_error_message ) ) echo $short_right_sidebar_background_color_error_message; 
	
		echo "\n\n".'<p class="layout-description short-right-sidebar-background-color">', $short_right_sidebar_background_color_description, '</p>', "\n";

			$childishlysimple_layout_details['short_right_sidebar_background_color'] = $short_right_sidebar_background_color; 
			$childishlysimple_layout_details['short_right_sidebar_background_color_default'] = $short_right_sidebar_background_color_default;
?>

</div> <!-- end options-right-container short-right-sidebar-background-color -->






<div class="options-left-container long-left-sidebar-background-color">

<?php	//	Left sidebar  background  color options
	$long_left_sidebar_background_color_option='childishlysimple01_long_left_sidebar_background_color';  
	$long_left_sidebar_background_color_label = 'Set the background color of the full-length left sidebar';  	 
	$long_left_sidebar_background_color_default = '#ffff55'; 
	$long_left_sidebar_background_color_description = 'Enter the hexadecimal background color of your left sidebar (use numbers 0-9 and letters a - f, case insensitive) with the hash tag. <br /><br /> 
	This background color extends to the bottom of the page. You can make it the same color as the shorter sidebar if you want. <br /><br /> 
	The default color is ' . $long_left_sidebar_background_color_default;
	$long_left_sidebar_background_color_id = "back_sit_spin";

		add_option( "$long_left_sidebar_background_color_option", "$long_left_sidebar_background_color_default" ); 
		$long_left_sidebar_background_color = get_option( "$long_left_sidebar_background_color_option" );

			$allowed_html = array();
			$long_left_sidebar_background_color =  wp_kses( $long_left_sidebar_background_color , $allowed_html );
			$long_left_sidebar_background_color = esc_attr( $long_left_sidebar_background_color );

				if( $long_left_sidebar_background_color=='' ) $long_left_sidebar_background_color = $long_left_sidebar_background_color_default; 

		$long_left_sidebar_background_color_error  = '';
		if( ! ( preg_match( '/^#[a-f0-9]{6}$/i', $long_left_sidebar_background_color ) ) ||  ( strtolower( $long_left_sidebar_background_color ) == 'transparent' ) ) {
				$long_left_sidebar_background_color_error = 'style = "color:red;" ';  
				$errors = 'errors'; 	
				$long_left_sidebar_background_color_error_message =  '<h4 class="layout-error"> Enter a hexadecimal number for the color. <br />
				This has a hash tag followed by 6 characters and uses numbers between 0 - 9 and letters between A - F ( case insensitive). <br />
				You entered '. $long_left_sidebar_background_color . '  &nbsp; The default color is ' . $long_left_sidebar_background_color_default . '<br />
				You might have entered a O instead of a zero or had too few or too many characters.</h4>'; 					
  				$long_left_sidebar_background_color = $long_left_sidebar_background_color_default;
		}
      	
	echo '<label '.  $long_left_sidebar_background_color_error . ' class="layout  long-left-sidebar-background-color" for="a_'.  $long_left_sidebar_background_color_id . '">'. $long_left_sidebar_background_color_label . '</label><br />' . "\n";
	echo '<input ' . $long_left_sidebar_background_color_error .  'class="layout  long-left-sidebar-background-color childishlysimple-colors" type="text" id="a_'.  $long_left_sidebar_background_color_id .'" name="'. $long_left_sidebar_background_color_option . '" value="'. $long_left_sidebar_background_color .'" />'."\n".'<br />';

		if ( isset( $long_left_sidebar_background_color_error_message ) ) echo $long_left_sidebar_background_color_error_message; 

			echo "\n\n".'<p class="layout-description long-left-sidebar-background-color">', $long_left_sidebar_background_color_description, '</p>', "\n";

				$childishlysimple_layout_details['long_left_sidebar_background_color'] = $long_left_sidebar_background_color; 
				$childishlysimple_layout_details['long_left_sidebar_background_color_default'] = $long_left_sidebar_background_color_default;
?>

</div><!-- end options-left-container long-left-sidebar-background-color -->







<div class="options-right-container long-right-sidebar-background-color">

<?php	//	right sidebar  background  color options
	$long_right_sidebar_background_color_option='childishlysimple01_long_right_sidebar_background_color';  
	$long_right_sidebar_background_color_label = 'Set the background color of the full-length right sidebar';  	 
	$long_right_sidebar_background_color_default = '#ffff55'; 
	$long_right_sidebar_background_color_description = 'Enter the hexadecimal background color of your right sidebar (use numbers 0-9 and letters a - f, case insensitive) with the hash tag. <br /><br /> 
	This background color extends to the bottom of the page. You can make it the same color as the shorter sidebar if you want.<br /><br /> 
	The default color is ' . $long_right_sidebar_background_color_default;
	$long_right_sidebar_background_color_id = "haircutter";

		add_option( "$long_right_sidebar_background_color_option", "$long_right_sidebar_background_color_default" ); 
		$long_right_sidebar_background_color = get_option( "$long_right_sidebar_background_color_option" );

			$allowed_html = array();
			$long_right_sidebar_background_color =  wp_kses( $long_right_sidebar_background_color , $allowed_html );
			$long_right_sidebar_background_color = esc_attr( $long_right_sidebar_background_color );

				if( $long_right_sidebar_background_color=='' ) $long_right_sidebar_background_color = $long_right_sidebar_background_color_default; 

		$long_right_sidebar_background_color_error  = '';
		if( ! ( preg_match( '/^#[a-f0-9]{6}$/i', $long_right_sidebar_background_color ) ) ||  ( strtolower( $long_right_sidebar_background_color ) == 'transparent' ) ) {
				$long_right_sidebar_background_color_error = 'style = "color:red;" ';  
				$errors = 'errors'; 	
				$long_right_sidebar_background_color_error_message =  '<h4 class="layout-error"> Enter a hexadecimal number for the color. <br />
				This has a hash tag followed by 6 characters and uses numbers between 0 - 9 and letters between A - F ( case insensitive). <br />
				You entered '. $long_right_sidebar_background_color . '  &nbsp; The default color is ' . $long_right_sidebar_background_color_default . '<br />
				You might have entered a O instead of a zero or had too few or too many characters.</h4>'; 					
  				$long_right_sidebar_background_color = $long_right_sidebar_background_color_default;
		}
      	
	echo '<label '.  $long_right_sidebar_background_color_error . ' class="layout  long-right-sidebar-background-color" for="a_'.  $long_right_sidebar_background_color_id . '">'. $long_right_sidebar_background_color_label . '</label><br />' . "\n";
	echo '<input ' . $long_right_sidebar_background_color_error .  'class="layout  long-right-sidebar-background-color childishlysimple-colors" type="text" id="a_'.  $long_right_sidebar_background_color_id .'" name="'. $long_right_sidebar_background_color_option . '" value="'. $long_right_sidebar_background_color .'" />'."\n".'<br />';

		if ( isset( $long_right_sidebar_background_color_error_message ) ) echo $long_right_sidebar_background_color_error_message; 

			echo "\n\n".'<p class="layout-description long-right-sidebar-background-color">', $long_right_sidebar_background_color_description, '</p>', "\n";

				$childishlysimple_layout_details['long_right_sidebar_background_color'] = $long_right_sidebar_background_color; 
				$childishlysimple_layout_details['long_right_sidebar_background_color_default'] = $long_right_sidebar_background_color_default;
?>

	</div><!-- end options-right-container long-right-sidebar-background-color -->

</div><!-- End options-container sidebar-background-colors -->










<h3 class="layout"> Choose your sidebar items</h3>

<div class="options-container sidebar-item-stuff">

		<div class="options-left-container left-sidebar-items"><!--left sidebar stuff -->

<?php
	$left_sidebar_items_hardcoded_checkbox_array = array( 
		'left_sidebar_home' => 'Left Sidebar Home', 
		'left_sidebar_widget_01' => 'Left Sidebar Widget 01', 
		'left_sidebar_most_recent' => 'Left Sidebar Most Recent Posts', 
		'left_sidebar_widget_02' => 'Left Sidebar Widget 02', 
		'left_sidebar_most_popular' => 'Left Sidebar Most Popular Posts',
		'left_sidebar_widget_03' => 'Left Sidebar Widget 03', 
		'left_sidebar_latest_comments' => 'Left Sidebar Latest Comments',  
		'left_sidebar_widget_04' => 'Left Sidebar Widget 04', 
		'left_sidebar_calendar' => 'Left Sidebar Calendar', 
		'left_sidebar_widget_05' => 'Left Sidebar Widget 05', 
		'left_sidebar_all_categories' => 'Left Sidebar All Categories',
		'left_sidebar_widget_06' => 'Left Sidebar Widget 06', 
		'left_sidebar_child_categories' => 'Left Sidebar Child Categories',  
		'left_sidebar_widget_07' => 'Left Sidebar Widget 07', 
		'left_sidebar_pages' => 'Left Sidebar Pages', 
		'left_sidebar_widget_08' => 'Left Sidebar Widget 08', 
		'left_sidebar_archives' => 'Left Sidebar Archives',
		'left_sidebar_widget_09' => 'Left Sidebar Widget 09', 
		'left_sidebar_bookmarks' => 'Left Sidebar Bookmarks',  
		'left_sidebar_widget_10' => 'Left Sidebar Widget 10', 
		'left_sidebar_authors' => 'Left Sidebar Authors', 
		'left_sidebar_widget_11' => 'Left Sidebar Widget 11', 
		'left_sidebar_tag_cloud' => 'Left Sidebar Tag Cloud',
		'left_sidebar_widget_12' => 'Left Sidebar Widget 12', 
		'left_sidebar_register_or_login' => 'Left Sidebar Register or Log in',  
		'left_sidebar_widget_13' => 'Left Sidebar Widget 13', 
 );


$left_sidebar_items_checkbox = 'childishlysimple01_left_sidebar_items_selected'; 
$left_sidebar_items_default_checkboxes = array( 
		'left_sidebar_home' => 'Left Sidebar Home', 
		'left_sidebar_all_categories' => 'Left Sidebar All Categories',
		'left_sidebar_pages' => 'Left Sidebar Pages',
		'left_sidebar_widget_13' => 'Left Sidebar Widget 13', 
 );


$maximum_number_of_left_sidebar_items = 1000;
$left_sidebar_items_checkbox_label ='Select your Left Sidebar items';

$left_sidebar_items_checkbox_description = 'Select the left sidebar items that you want to display. &nbsp; &nbsp;  &nbsp;  &nbsp;  &nbsp; <br /> Widgets can be found in Appearance/Widgets. <br />Click on the Plugins / Add New link in the left sidebar to add new widgets.<br /> Deleting a Widget sends it to the Inactive Widgets section (Appearance/Widgets)'; 

$left_sidebar_items_checkbox_id = "salchow";


$left_sidebar_items_default_checkboxes_reversed = array_flip( $left_sidebar_items_default_checkboxes ); 
add_option( $left_sidebar_items_checkbox, $left_sidebar_items_default_checkboxes_reversed ); 

$left_sidebar_items_checked_checkboxes = array( );
$left_sidebar_items_checked_checkboxes = get_option( $left_sidebar_items_checkbox ); 

if ( $left_sidebar_items_checked_checkboxes == '' ) $left_sidebar_items_checked_checkboxes = array ( 1,2 );


echo '<p class="layout  left-sidebar-item-label">'.$left_sidebar_items_checkbox_label. '</p>'."\n\n";

	$i = 1;
	$number_of_left_sidebar_items = 0;	

		foreach ( $left_sidebar_items_hardcoded_checkbox_array as $left_sidebar_items_checkbox_key => $left_sidebar_items_checkbox_value ) {
			echo '<label for="a_'. $left_sidebar_items_checkbox_id . $i . '" class="choose-item-checkbox left-sidebar-item">' . $left_sidebar_items_checkbox_value .  '</label>'."\n"; 
			echo '<input type="checkbox" id="a_' . $left_sidebar_items_checkbox_id . $i ++ . '"  class="choose-item-checkbox left-sidebar-item"';

				if( count( $first_time_use ) == 0 ){ 	//	Set defaults if no options have been saved yet												
		foreach ( $left_sidebar_items_default_checkboxes as $left_sidebar_items_default_checkboxes_key => $left_sidebar_items_default_checkboxes_value ){
		checked (  $left_sidebar_items_checkbox_key, 	$left_sidebar_items_default_checkboxes_value );
		}

		  	if ( array_key_exists ( $left_sidebar_items_checkbox_key, $left_sidebar_items_default_checkboxes ) ) {
			$number_of_left_sidebar_items ++; //	Increment a counter -  limits number of items to show, particularly useful in footer	
			}						
				} else {	//	End 	if( count( $first_time_use ) == 0 ) 	i.e. if options have already been saved

	
			
		foreach ( $left_sidebar_items_checked_checkboxes as $left_sidebar_items_checked_checkboxes_key => $left_sidebar_items_checked_checkboxes_value ){
		checked (  $left_sidebar_items_checkbox_key, 	$left_sidebar_items_checked_checkboxes_value );
		}

		  	if ( in_array ( $left_sidebar_items_checkbox_key, $left_sidebar_items_checked_checkboxes ) ) {
			$number_of_left_sidebar_items ++; //	Increment a counter -  limits number of items to show, particularly useful in footer	
			}
				}  	// End else

echo ' name="'. $left_sidebar_items_checkbox . '[]" value="' . $left_sidebar_items_checkbox_key . '" /><br />' .  "\n\n" ; //		Finish off the HTML

}	//	End 	foreach ( $left_sidebar_items_hardcoded_checkbox_array as $left_sidebar_items_checkbox_key 
 
 
 

		if ( $number_of_left_sidebar_items > $maximum_number_of_left_sidebar_items ) {
		$major_errors = 'major_errors'; 
		echo '<h4 class="layout-error">You\'ve selected ' . $number_of_left_sidebar_items  . ' items. The maximum number allowed is '. $maximum_number_of_left_sidebar_items  . '</h4>';
		}						
									
echo "\n\n".'<p class="layout-description left-sidebar-items">', $left_sidebar_items_checkbox_description, '</p>', "\n";

$childishlysimple_layout_details['selected_left_sidebar_items'] = $left_sidebar_items_checked_checkboxes;
$childishlysimple_layout_details['left_sidebar_items_default'] =  $left_sidebar_items_default_checkboxes;
$childishlysimple_layout_details['maximum_number_of_left_sidebar_items'] = $maximum_number_of_left_sidebar_items;
$childishlysimple_layout_details['number_of_left_sidebar_items'] = $number_of_left_sidebar_items;
?>

</div><!-- End left-sidebar-items-->







<div class="options-right-container right-sidebar-items"> <!-- Start div for right-sidebar-items -->

<?php 	//	Right sidebar items
	$right_sidebar_items_hardcoded_checkbox_array = array( 
		'right_sidebar_home' => 'Right Sidebar Home', 
		'right_sidebar_widget_01' => 'Right Sidebar Widget 01', 
		'right_sidebar_most_recent' => 'Right Sidebar Most Recent Posts', 
		'right_sidebar_widget_02' => 'Right Sidebar Widget 02', 
		'right_sidebar_most_popular' => 'Right Sidebar Most Popular Posts',
		'right_sidebar_widget_03' => 'Right Sidebar Widget 03', 
		'right_sidebar_latest_comments' => 'Right Sidebar Latest Comments',  
		'right_sidebar_widget_04' => 'Right Sidebar Widget 04', 
		'right_sidebar_calendar' => 'Right Sidebar Calendar', 
		'right_sidebar_widget_05' => 'Right Sidebar Widget 05', 
		'right_sidebar_all_categories' => 'Right Sidebar All Categories',
		'right_sidebar_widget_06' => 'Right Sidebar Widget 06', 
		'right_sidebar_child_categories' => 'Right Sidebar Child Categories',  
		'right_sidebar_widget_07' => 'Right Sidebar Widget 07', 
		'right_sidebar_pages' => 'Right Sidebar Pages', 
		'right_sidebar_widget_08' => 'Right Sidebar Widget 08', 
		'right_sidebar_archives' => 'Right Sidebar Archives',
		'right_sidebar_widget_09' => 'Right Sidebar Widget 09', 
		'right_sidebar_bookmarks' => 'Right Sidebar Bookmarks',  
		'right_sidebar_widget_10' => 'Right Sidebar Widget 10', 
		'right_sidebar_authors' => 'Right Sidebar Authors', 
		'right_sidebar_widget_11' => 'Right Sidebar Widget 11', 
		'right_sidebar_tag_cloud' => 'Right Sidebar Tag Cloud',
		'right_sidebar_widget_12' => 'Right Sidebar Widget 12', 
		'right_sidebar_register_or_login' => 'Right Sidebar Register or Log in',  
		'right_sidebar_widget_13' => 'Right Sidebar Widget 13', 
 );


$right_sidebar_items_checkbox = 'childishlysimple01_right_sidebar_items_selected';
$right_sidebar_items_default_checkboxes = array( 
		'right_sidebar_home' => 'Right Sidebar Home', 
		'right_sidebar_all_categories' => 'Right Sidebar All Categories',
		'right_sidebar_pages' => 'Right Sidebar Pages', 
		'right_sidebar_widget_13' => 'Right Sidebar Widget 13', 
);


$maximum_number_of_right_sidebar_items = 10000; 

$right_sidebar_items_checkbox_label ='Select your Right Sidebar items';

$right_sidebar_items_checkbox_description = 'Select the right sidebar items that you want to display. &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; <br /> Widgets can be found in Appearance/Widgets.<br />Click on the Plugins / Add New link in the left sidebar to add new widgets.<br /> Deleting a Widget sends it to the Inactive Widgets section (Appearance/Widgets)'; 

$right_sidebar_items_checkbox_id = "sit_spin";


$right_sidebar_items_default_checkboxes_reversed = array_flip( $right_sidebar_items_default_checkboxes ); 

add_option( $right_sidebar_items_checkbox, $right_sidebar_items_default_checkboxes_reversed );

$right_sidebar_items_checked_checkboxes = array( );
$right_sidebar_items_checked_checkboxes = get_option( $right_sidebar_items_checkbox ); 

if ( $right_sidebar_items_checked_checkboxes == '' )  $right_sidebar_items_checked_checkboxes = array ( 1,2 ); 


echo '<p class="layout  right-sidebar-item-label">'.$right_sidebar_items_checkbox_label. '</p>'."\n\n";

$i = 1;
$number_of_right_sidebar_items = 0;	

foreach ( $right_sidebar_items_hardcoded_checkbox_array as $right_sidebar_items_checkbox_key => $right_sidebar_items_checkbox_value ){
echo '<label for="a_'. $right_sidebar_items_checkbox_id . $i . '" class="choose-item-checkbox right-sidebar-item">' . $right_sidebar_items_checkbox_value .  '</label>'."\n"; 
echo '<input type="checkbox" id="a_' . $right_sidebar_items_checkbox_id . $i ++ . '"  class="choose-item-checkbox right-sidebar-item"';

	if( count( $first_time_use ) == 0 ){ 	//	Set defaults if no options have been saved yet
		foreach ( $right_sidebar_items_default_checkboxes as $right_sidebar_items_default_checkboxes_key => $right_sidebar_items_default_checkboxes_value ){
		  checked (  $right_sidebar_items_checkbox_key, 	$right_sidebar_items_default_checkboxes_value );
		}
		  			
		  		if ( array_key_exists ( $right_sidebar_items_checkbox_key, $right_sidebar_items_default_checkboxes ) ) {
				$number_of_right_sidebar_items ++; //	Increment a counter -  limits number of items to show, particularly useful in footer	
				}				
			
	} else {		//	If options have already been saved
				
		foreach ( $right_sidebar_items_checked_checkboxes as $right_sidebar_items_checked_checkboxes_key => $right_sidebar_items_checked_checkboxes_value ){
		checked (  $right_sidebar_items_checkbox_key, 	$right_sidebar_items_checked_checkboxes_value );
		}
		  			
		  	if ( in_array ( $right_sidebar_items_checkbox_key, $right_sidebar_items_checked_checkboxes ) ) {
			$number_of_right_sidebar_items ++; //	Increment a counter -  limits number of items to show, particularly useful in footer	
			}						
		}	// End else
	
echo ' name="'. $right_sidebar_items_checkbox . '[]" value="' . $right_sidebar_items_checkbox_key . '" /><br />' .  "\n\n" ; 
 	
 }	//	End foreach ( $right_sidebar_items_hardcoded_checkbox_array as $right_sidebar_items_checkbox_key
 
		if ( $number_of_right_sidebar_items > $maximum_number_of_right_sidebar_items ) {
		$major_errors = 'major_errors'; 
		echo '<h4 class="layout-error">You\'ve selected ' . $number_of_right_sidebar_items  . ' items. The maximum number allowed is '.  $maximum_number_of_right_sidebar_items  . '</h4>';   //	More specific admin error message
		}						
						
echo "\n\n".'<p class="layout-description right-sidebar-items">', $right_sidebar_items_checkbox_description, '</p>', "\n";

$childishlysimple_layout_details['selected_right_sidebar_items'] = $right_sidebar_items_checked_checkboxes;
$childishlysimple_layout_details['right_sidebar_items_default'] =  $right_sidebar_items_default_checkboxes;
$childishlysimple_layout_details['maximum_number_of_right_sidebar_items'] = $maximum_number_of_right_sidebar_items;
$childishlysimple_layout_details['number_of_right_sidebar_items'] = $number_of_right_sidebar_items;
?>

</div> <!--End div for right-sidebar-items -->







<div class="options-left-container left-sidebar-item-colors">

<?php 	//	Set the left sidebar item headings background   color 
	$left_sidebar_item_heading_background_color_option='childishlysimple01_left_sidebar_item_heading_background_color';  
	$left_sidebar_item_heading_background_color_label = 'Set the background color of the left sidebar item headings';
	$left_sidebar_item_heading_background_color_default = '#a3dab1'; 

	$left_sidebar_item_heading_background_color_description = 'Enter the hexadecimal background color of your left sidebar item headings (use numbers 0-9 and letters a - f, case insensitive) with the hash tag. The default color is ' . $left_sidebar_item_heading_background_color_default;
	$left_sidebar_item_heading_background_color_id = "choctaw";


add_option( "$left_sidebar_item_heading_background_color_option", "$left_sidebar_item_heading_background_color_default" ); 
$left_sidebar_item_heading_background_color = get_option( "$left_sidebar_item_heading_background_color_option" );

$allowed_html = array();
$left_sidebar_item_heading_background_color =  wp_kses( $left_sidebar_item_heading_background_color , $allowed_html );
$left_sidebar_item_heading_background_color = esc_attr( $left_sidebar_item_heading_background_color );

	if( $left_sidebar_item_heading_background_color=='' ) $left_sidebar_item_heading_background_color = $left_sidebar_item_heading_background_color_default; 
 	

	$left_sidebar_item_heading_background_color_error = '';
	if( ! ( preg_match( '/^#[a-f0-9]{6}$/i', $left_sidebar_item_heading_background_color ) ) ||  ( strtolower( $left_sidebar_item_heading_background_color ) == 'transparent' ) ) {

			$left_sidebar_item_heading_background_color_error = 'style = "color:red;" ';
			$errors = 'errors';
					
			$left_sidebar_item_heading_background_color_error_message = '<h4 class="layout-error"> Enter  a hexadecimal number for the color. <br />
			This has a hash tag followed by 6 characters and uses numbers between 0 - 9 and letters between A - F ( case insensitive). <br />
			You entered '. $left_sidebar_item_heading_background_color . '  &nbsp; The default color is ' . $left_sidebar_item_heading_background_color_default . '<br />
			You might have entered a O instead of a zero or had too few or too many characters.</h4>'; 					

  			$left_sidebar_item_heading_background_color = $left_sidebar_item_heading_background_color_default;
      	}
      
	
echo '<label '.  $left_sidebar_item_heading_background_color_error . ' class="layout  left-sidebar-item-heading-background-color" for="a_'.  $left_sidebar_item_heading_background_color_id . '">'. $left_sidebar_item_heading_background_color_label . '</label><br />' . "\n";

echo '<input ' . $left_sidebar_item_heading_background_color_error .  'class="layout  left-sidebar-item-heading-background-color childishlysimple-colors" type="text" id="a_'.  $left_sidebar_item_heading_background_color_id .'" name="'. $left_sidebar_item_heading_background_color_option . '" value="'. $left_sidebar_item_heading_background_color .'" />'."\n".'<br />';

if ( isset( $left_sidebar_item_heading_background_color_error_message ) ) echo $left_sidebar_item_heading_background_color_error_message; 

echo "\n\n".'<p class="layout-description small-sidebar-item left-sidebar-item-heading-background-color">', $left_sidebar_item_heading_background_color_description, '</p>', "\n";

$childishlysimple_layout_details['left_sidebar_item_heading_background_color'] = $left_sidebar_item_heading_background_color;
$childishlysimple_layout_details['left_sidebar_item_heading_background_color_default'] = $left_sidebar_item_heading_background_color_default;
?>








<?php // Set the left sidebar items background  color 
	$left_sidebar_item_background_color_option='childishlysimple01_left_sidebar_item_background_color';
	$left_sidebar_item_background_color_label = 'Set the background color of the left sidebar items';
	$left_sidebar_item_background_color_default = '#d9ffe4'; 

	$left_sidebar_item_background_color_description = 'Enter the hexadecimal background color of your left sidebar items (use numbers 0-9 and letters a - f, case insensitive) with the hash tag. <br /> The default color is ' . $left_sidebar_item_background_color_default;
	$left_sidebar_item_background_color_id = "rocker";

add_option( "$left_sidebar_item_background_color_option", "$left_sidebar_item_background_color_default" ); 
$left_sidebar_item_background_color = get_option( "$left_sidebar_item_background_color_option" );

$allowed_html = array();
$left_sidebar_item_background_color =  wp_kses( $left_sidebar_item_background_color , $allowed_html );
$left_sidebar_item_background_color = esc_attr( $left_sidebar_item_background_color );

	if( $left_sidebar_item_background_color=='' ) $left_sidebar_item_background_color = $left_sidebar_item_background_color_default; 

		$left_sidebar_item_background_color_error = '';
		if( ! ( preg_match( '/^#[a-f0-9]{6}$/i', $left_sidebar_item_background_color ) ) ||  ( strtolower( $left_sidebar_item_background_color ) == 'transparent' ) ) {

				$left_sidebar_item_background_color_error = 'style = "color:red;" ';
				$errors = 'errors';
					
					$left_sidebar_item_background_color_error_message =  '<h4 class="layout-error"> Enter a hexadecimal number for the color. <br />
					This has a hash tag followed by 6 characters and uses numbers between 0 - 9 and letters between A - F ( case insensitive). <br />
					You entered '. $left_sidebar_item_background_color . '  &nbsp; The default color is ' . $left_sidebar_item_background_color_default . '<br />
					You might have entered a O instead of a zero or had too few or too many characters.</h4>'; 					

  					$left_sidebar_item_background_color = $left_sidebar_item_background_color_default;
		}
      
	
echo '<label '.  $left_sidebar_item_background_color_error . ' class="layout  left-sidebar-item-background-color" for="a_'.  $left_sidebar_item_background_color_id . '">'. $left_sidebar_item_background_color_label . '</label><br />' . "\n";

echo '<input ' . $left_sidebar_item_background_color_error .  'class="layout  left-sidebar-item-background-color childishlysimple-colors" type="text" id="a_'.  $left_sidebar_item_background_color_id .'" name="'. $left_sidebar_item_background_color_option . '" value="'. $left_sidebar_item_background_color .'" />'."\n".'<br />';

if ( isset( $left_sidebar_item_background_color_error_message ) ) echo $left_sidebar_item_background_color_error_message;

echo "\n\n".'<p class="layout-description small-sidebar-item left-sidebar-item-background-color">', $left_sidebar_item_background_color_description, '</p>', "\n";

$childishlysimple_layout_details['left_sidebar_item_background_color'] = $left_sidebar_item_background_color;
$childishlysimple_layout_details['left_sidebar_item_background_color_default'] = $left_sidebar_item_background_color_default;
?>







<?php 	// Set the left sidebar items  border color 
	$left_sidebar_item_border_color_option='childishlysimple01_left_sidebar_item_border_color';
	$left_sidebar_item_border_color_label = 'Set the border color of the &nbsp;left &nbsp;sidebar items';
	$left_sidebar_item_border_color_default = '#46b562';
	$left_sidebar_item_border_color_description = 'Enter the hexadecimal color of your left sidebar item borders (use numbers 0-9 and letters a - f, case insensitive) with the hash tag. <br /> If you donn\'t want a border, make the border the same color as the background.<br />The default color is ' . $left_sidebar_item_border_color_default;
	$left_sidebar_item_border_color_id = "spiral";

add_option( "$left_sidebar_item_border_color_option", "$left_sidebar_item_border_color_default" ); 
$left_sidebar_item_border_color = get_option( "$left_sidebar_item_border_color_option" );

$allowed_html = array();
$left_sidebar_item_border_color =  wp_kses( $left_sidebar_item_border_color , $allowed_html );
$left_sidebar_item_border_color = esc_attr( $left_sidebar_item_border_color );

	if( $left_sidebar_item_border_color=='' ) $left_sidebar_item_border_color = $left_sidebar_item_border_color_default; 

	$left_sidebar_item_border_color_error = '';
	if( ! ( preg_match( '/^#[a-f0-9]{6}$/i', $left_sidebar_item_border_color ) ) ||  ( strtolower( $left_sidebar_item_border_color ) == 'transparent' ) ){

				$left_sidebar_item_border_color_error = 'style = "color:red;" ';
				$errors = 'errors';
					
					$left_sidebar_item_border_color_error_message =  '<h4 class="layout-error"> Enter a hexadecimal number for the color. <br />
					This has a hash tag followed by 6 characters and uses numbers between 0 - 9 and letters between A - F ( case insensitive). <br />
					You entered '. $left_sidebar_item_border_color . '  &nbsp; The default color is ' . $left_sidebar_item_border_color_default . '<br />
					You might have entered a O instead of a zero or had too few or too many characters.</h4>'; 					

  					$left_sidebar_item_border_color = $left_sidebar_item_border_color_default;
      					}
	
echo '<label '.  $left_sidebar_item_border_color_error . ' class="layout  left-sidebar-item-border-color" for="a_'.  $left_sidebar_item_border_color_id . '">'. $left_sidebar_item_border_color_label . '</label><br />' . "\n";

echo '<input ' . $left_sidebar_item_border_color_error .  'class="layout  left-sidebar-item-border-color childishlysimple-colors" type="text" id="a_'.  $left_sidebar_item_border_color_id .'" name="'. $left_sidebar_item_border_color_option . '" value="'. $left_sidebar_item_border_color .'" />'."\n".'<br />';

if ( isset( $left_sidebar_item_border_color_error_message ) ) echo $left_sidebar_item_border_color_error_message;

echo "\n\n".'<p class="layout-description small-sidebar-item left-sidebar-item-border-color">', $left_sidebar_item_border_color_description, '</p>', "\n";

$childishlysimple_layout_details['left_sidebar_item_border_color'] = $left_sidebar_item_border_color;
$childishlysimple_layout_details['left_sidebar_item_border_color_default'] = $left_sidebar_item_border_color_default;
?>







<?php 	// 	Set the left sidebar item headings font   color 
	$left_sidebar_item_heading_font_color_option='childishlysimple01_left_sidebar_item_heading_font_color';
	$left_sidebar_item_heading_font_color_label = 'Set the font color of the left sidebar item headings';
	$left_sidebar_item_heading_font_color_default = '#ffffff';
	$left_sidebar_item_heading_font_color_description = 'Enter the hexadecimal font color of your left sidebar item headings (use numbers 0-9 and letters a - f, case insensitive) with the hash tag. <br /> The default color is ' . $left_sidebar_item_heading_font_color_default;

	$left_sidebar_item_heading_font_color_id = "chasse";


add_option( "$left_sidebar_item_heading_font_color_option", "$left_sidebar_item_heading_font_color_default" ); 
$left_sidebar_item_heading_font_color = get_option( "$left_sidebar_item_heading_font_color_option" );

$allowed_html = array();
$left_sidebar_item_heading_font_color =  wp_kses( $left_sidebar_item_heading_font_color , $allowed_html );
$left_sidebar_item_heading_font_color = esc_attr( $left_sidebar_item_heading_font_color );

	if( $left_sidebar_item_heading_font_color=='' ) $left_sidebar_item_heading_font_color = $left_sidebar_item_heading_font_color_default; 	

		$left_sidebar_item_heading_font_color_error ='';
		if( ! preg_match( '/^#[a-f0-9]{6}$/i', $left_sidebar_item_heading_font_color ) ) {

				$left_sidebar_item_heading_font_color_error = 'style = "color:red;" ';
				$errors = 'errors';
					
				$left_sidebar_item_heading_font_color_error_message = '<h4 class="layout-error"> Enter a hexadecimal number for the font color. <br />
				This has a hash tag followed by 6 characters and uses numbers between 0 - 9 and letters between A - F ( case insensitive). <br />
				You entered '. $left_sidebar_item_heading_font_color . '  &nbsp; The default color is ' . $left_sidebar_item_heading_font_color_default . '<br />
				You might have entered a O instead of a zero or had too few or too many characters.</h4>'; 					
				

  				$left_sidebar_item_heading_font_color = $left_sidebar_item_heading_font_color_default;
		}

echo '<label '.  $left_sidebar_item_heading_font_color_error . ' class="layout  left-sidebar-item-heading-font-color" for="a_'.  $left_sidebar_item_heading_font_color_id . '">'. $left_sidebar_item_heading_font_color_label . '</label><br />' . "\n";

echo '<input ' . $left_sidebar_item_heading_font_color_error .  'class="layout  left-sidebar-item-heading-font-color childishlysimple-colors" type="text" id="a_'.  $left_sidebar_item_heading_font_color_id .'" name="'. $left_sidebar_item_heading_font_color_option . '" value="'. $left_sidebar_item_heading_font_color .'" />'."\n".'<br />';

if ( isset( $left_sidebar_item_heading_font_color_error_message ) ) echo $left_sidebar_item_heading_font_color_error_message;

echo "\n\n".'<p class="layout-description small-sidebar-item left-sidebar-item-heading-font-color">', $left_sidebar_item_heading_font_color_description, '</p>', "\n";

$childishlysimple_layout_details['left_sidebar_item_heading_font_color'] = $left_sidebar_item_heading_font_color;
$childishlysimple_layout_details['left_sidebar_item_heading_font_color_default'] = $left_sidebar_item_heading_font_color_default;
?>







<?php 	//	Set the left sidebar font color
	$left_sidebar_font_color_option='childishlysimple01_left_sidebar_font_color'; 
	$left_sidebar_font_color_label = 'Set the left sidebar text color'; 
	$left_sidebar_font_color_default = '#000000'; 
	$left_sidebar_font_color_description = 'Enter the hexadecimal  color of your left sidebar text (use numbers 0-9 and letters a - f, case insensitive) with the hash tag. <br /> The default color is ' . $left_sidebar_font_color_default;
	$left_sidebar_font_color_id = "crossed_chasse";

add_option( "$left_sidebar_font_color_option", "$left_sidebar_font_color_default" ); 
$left_sidebar_font_color = get_option( "$left_sidebar_font_color_option" );

$allowed_html = array();
$left_sidebar_font_color =  wp_kses( $left_sidebar_font_color , $allowed_html );
$left_sidebar_font_color = esc_attr( $left_sidebar_font_color );

	if( $left_sidebar_font_color=='' ) $left_sidebar_font_color = $left_sidebar_font_color_default; 

		$left_sidebar_font_color_error = '';
		if( ! preg_match( '/^#[a-f0-9]{6}$/i', $left_sidebar_font_color ) )  {

				$left_sidebar_font_color_error = 'style = "color:red;" ';
				$errors = 'errors';
					
				$left_sidebar_font_color_error_message = '<h4 class="layout-error"> Enter a hexadecimal number for the font color. <br />
				This has a hash tag followed by 6 characters and uses numbers between 0 - 9 and letters between A - F ( case insensitive). <br />
				You entered '. $left_sidebar_font_color . '  &nbsp; The default color is ' . $left_sidebar_font_color_default . '<br />
				You might have entered a O instead of a zero or had too few or too many characters.</h4>'; 					
				

  				$left_sidebar_font_color = $left_sidebar_font_color_default;
		}
      
	
echo '<label '.  $left_sidebar_font_color_error . ' class="layout  left-sidebar-font-color" for="a_'.  $left_sidebar_font_color_id . '">'. $left_sidebar_font_color_label . '</label><br />' . "\n";

echo '<input ' . $left_sidebar_font_color_error .  'class="layout  left-sidebar-font-color childishlysimple-colors" type="text" id="a_'.  $left_sidebar_font_color_id .'" name="'. $left_sidebar_font_color_option . '" value="'. $left_sidebar_font_color .'" />'."\n".'<br />';

if ( isset( $left_sidebar_font_color_error_message ) ) echo $left_sidebar_font_color_error_message;

echo "\n\n".'<p class="layout-description small-sidebar-item left-sidebar-font-color">', $left_sidebar_font_color_description, '</p>', "\n";

$childishlysimple_layout_details['left_sidebar_font_color'] = $left_sidebar_font_color;
$childishlysimple_layout_details['left_sidebar_font_color_default'] = $left_sidebar_font_color_default;
?>








<?php 	// 	Set the left sidebar link color
	$left_sidebar_link_color_option='childishlysimple01_left_sidebar_link_color';
	$left_sidebar_link_color_label = 'Set the left sidebar link color'; 
	$left_sidebar_link_color_default = '#006f00'; 
	$left_sidebar_link_color_description = 'Enter the hexadecimal  color of your left sidebar links (use numbers 0-9 and letters a - f, case insensitive) with the hash tag. <br /> The default color is ' . $left_sidebar_link_color_default;

	$left_sidebar_link_color_id = "crossed_step_behind";

add_option( "$left_sidebar_link_color_option", "$left_sidebar_link_color_default" ); 
$left_sidebar_link_color = get_option( "$left_sidebar_link_color_option" );

$allowed_html = array();
$left_sidebar_link_color =  wp_kses( $left_sidebar_link_color , $allowed_html );
$left_sidebar_link_color = esc_attr( $left_sidebar_link_color );

if( $left_sidebar_link_color=='' ) $left_sidebar_link_color = $left_sidebar_link_color_default;

	$left_sidebar_link_color_error = '';
	if( ! preg_match( '/^#[a-f0-9]{6}$/i', $left_sidebar_link_color ) ) {	
	//	If a hexadecimical color  hasn't been entered

				$left_sidebar_link_color_error = 'style = "color:red;" ';
				$errors = 'errors';
					
				$left_sidebar_link_color_error_message = '<h4 class="layout-error"> Enter a hexadecimal number for the link color. <br />
				This has a hash tag followed by 6 characters and uses numbers between 0 - 9 and letters between A - F ( case insensitive). <br />
				You entered '. $left_sidebar_link_color . '  &nbsp; The default color is ' . $left_sidebar_link_color_default . '<br />
				You might have entered a O instead of a zero or had too few or too many characters.</h4>'; 					

  				$left_sidebar_link_color = $left_sidebar_link_color_default;
	}

echo '<label '.  $left_sidebar_link_color_error . ' class="layout  left-sidebar-link-color" for="a_'.  $left_sidebar_link_color_id . '">'. $left_sidebar_link_color_label . '</label><br />' . "\n";

echo '<input ' . $left_sidebar_link_color_error .  'class="layout  left-sidebar-link-color childishlysimple-colors" type="text" id="a_'.  $left_sidebar_link_color_id .'" name="'. $left_sidebar_link_color_option . '" value="'. $left_sidebar_link_color .'" />'."\n".'<br />';

if ( isset( $left_sidebar_link_color_error_message ) ) echo $left_sidebar_link_color_error_message;

echo "\n\n".'<p class="layout-description small-sidebar-item left-sidebar-link-color">', $left_sidebar_link_color_description, '</p>', "\n";

$childishlysimple_layout_details['left_sidebar_link_color'] = $left_sidebar_link_color;
$childishlysimple_layout_details['left_sidebar_link_color_default'] = $left_sidebar_link_color_default;


// Set the left sidebar hover color

$left_sidebar_hover_color_option='childishlysimple01_left_sidebar_hover_color';
$left_sidebar_hover_color_label = 'Set the color of your hovered-over left sidebar links'; 
$left_sidebar_hover_color_default = '#009700'; 
$left_sidebar_hover_color_description = 'Enter the hexadecimal  color of your hovered-over left sidebar links  (use numbers 0-9 and letters a - f, case insensitive) with the hash tag. <br /> The default color is ' . $left_sidebar_hover_color_default;
$left_sidebar_hover_color_id = "outside_edge";


add_option( "$left_sidebar_hover_color_option", "$left_sidebar_hover_color_default" ); 
$left_sidebar_hover_color = get_option( "$left_sidebar_hover_color_option" );

$allowed_html = array();
$left_sidebar_hover_color =  wp_kses( $left_sidebar_hover_color , $allowed_html );
$left_sidebar_hover_color = esc_attr( $left_sidebar_hover_color );

if( $left_sidebar_hover_color=='' ) $left_sidebar_hover_color = $left_sidebar_hover_color_default; 

	$left_sidebar_hover_color_error = '';
	if( ! preg_match( '/^#[a-f0-9]{6}$/i', $left_sidebar_hover_color ) )  {	

				$left_sidebar_hover_color_error = 'style = "color:red;" ';
				$errors = 'errors';
					
				$left_sidebar_hover_color_error_message = '<h4 class="layout-error"> Enter a hexadecimal number for the link hover color. <br />
				This has a hash tag followed by 6 characters and uses numbers between 0 - 9 and letters between A - F ( case insensitive). <br />
				You entered '. $left_sidebar_hover_color . '  &nbsp; The default color is ' . $left_sidebar_hover_color_default . '<br />
				You might have entered a O instead of a zero or had too few or too many characters.</h4>'; 					

  				$left_sidebar_hover_color = $left_sidebar_hover_color_default;
	}

echo '<label '.  $left_sidebar_hover_color_error . ' class="layout  left-sidebar-hover-color" for="a_'.  $left_sidebar_hover_color_id . '">'. $left_sidebar_hover_color_label . '</label><br />' . "\n";

echo '<input ' . $left_sidebar_hover_color_error .  'class="layout  left-sidebar-hover-color childishlysimple-colors" type="text" id="a_'.  $left_sidebar_hover_color_id .'" name="'. $left_sidebar_hover_color_option . '" value="'. $left_sidebar_hover_color .'" />'."\n".'<br />';

if ( isset( $left_sidebar_hover_color_error_message ) ) echo $left_sidebar_hover_color_error_message;

echo "\n\n".'<p class="layout-description small-sidebar-item left-sidebar-hover-color">', $left_sidebar_hover_color_description, '</p>', "\n";

$childishlysimple_layout_details['left_sidebar_hover_color'] = $left_sidebar_hover_color;
$childishlysimple_layout_details['left_sidebar_hover_color_default'] = $left_sidebar_hover_color_default;
?>

</div> <!-- End left-sidebar-item-colors -->







<div class="options-right-container right-sidebar-item-colors">

<?php 	//	Set the right sidebar item headings background   color 
	$right_sidebar_item_heading_background_color_option='childishlysimple01_right_sidebar_item_heading_background_color';
	$right_sidebar_item_heading_background_color_label = 'Set the background color of the right sidebar item headings'; 
	$right_sidebar_item_heading_background_color_default = '#a3dab1'; 
	$right_sidebar_item_heading_background_color_description = 'Enter the hexadecimal background color of your right sidebar item headings (use numbers 0-9 and letters a - f, case insensitive) with the hash tag. The default color is ' . $right_sidebar_item_heading_background_color_default;

	$right_sidebar_item_heading_background_color_id = "flip_jump";

add_option( "$right_sidebar_item_heading_background_color_option", "$right_sidebar_item_heading_background_color_default" ); 
$right_sidebar_item_heading_background_color = get_option( "$right_sidebar_item_heading_background_color_option" );

$allowed_html = array();
$right_sidebar_item_heading_background_color =  wp_kses( $right_sidebar_item_heading_background_color , $allowed_html );
$right_sidebar_item_heading_background_color = esc_attr( $right_sidebar_item_heading_background_color );

	if( $right_sidebar_item_heading_background_color=='' ) $right_sidebar_item_heading_background_color = $right_sidebar_item_heading_background_color_default; 
		
	$right_sidebar_item_heading_background_color_error ='';
	if( ! ( preg_match( '/^#[a-f0-9]{6}$/i', $right_sidebar_item_heading_background_color ) ) || ( strtolower( $right_sidebar_item_heading_background_color ) == 'transparent' ) ){
	
				$right_sidebar_item_heading_background_color_error = 'style = "color:red;" ';
				$errors = 'errors';
					
				$right_sidebar_item_heading_background_color_error_message = '<h4 class="layout-error"> Enter a hexadecimal number for the color. <br />
				This has a hash tag followed by 6 characters and uses numbers between 0 - 9 and letters between A - F ( case insensitive). <br />
				You entered '. $right_sidebar_item_heading_background_color . '  &nbsp; The default color is ' . $right_sidebar_item_heading_background_color_default . '<br /> You might have entered a O instead of a zero or had too few or too many characters.</h4>'; 					

  				$right_sidebar_item_heading_background_color = $right_sidebar_item_heading_background_color_default;
	}

echo '<label '.  $right_sidebar_item_heading_background_color_error . ' class="layout  right-sidebar-item-heading-background-color" for="a_'.  $right_sidebar_item_heading_background_color_id . '">'. $right_sidebar_item_heading_background_color_label . '</label><br />' . "\n";

echo '<input ' . $right_sidebar_item_heading_background_color_error .  'class="layout  right-sidebar-item-heading-background-color childishlysimple-colors" type="text" id="a_'.  $right_sidebar_item_heading_background_color_id .'" name="'. $right_sidebar_item_heading_background_color_option . '" value="'. $right_sidebar_item_heading_background_color .'" />'."\n".'<br />';

if ( isset( $right_sidebar_item_heading_background_color_error_message ) ) echo $right_sidebar_item_heading_background_color_error_message;

echo "\n\n".'<p class="layout-description small-sidebar-item right-sidebar-item-heading-background-color">', $right_sidebar_item_heading_background_color_description, '</p>', "\n";

$childishlysimple_layout_details['right_sidebar_item_heading_background_color'] = $right_sidebar_item_heading_background_color;
$childishlysimple_layout_details['right_sidebar_item_heading_background_color_default'] = $right_sidebar_item_heading_background_color_default;
?>






<?php 	// Set the right sidebar items  background color 
	$right_sidebar_item_background_color_option='childishlysimple01_right_sidebar_item_background_color';
	$right_sidebar_item_background_color_label = 'Set the background color of the right sidebar items';
	$right_sidebar_item_background_color_default = '#d9ffe4'; 

	$right_sidebar_item_background_color_description = 'Enter the hexadecimal background color of your right sidebar items (use numbers 0-9 and letters a - f, case insensitive) with the hash tag. <br /> The default color is ' . $right_sidebar_item_background_color_default;


$right_sidebar_item_background_color_id = "biellmann_spin";

add_option( "$right_sidebar_item_background_color_option", "$right_sidebar_item_background_color_default" ); 

$right_sidebar_item_background_color = get_option( "$right_sidebar_item_background_color_option" );

$allowed_html = array();
$right_sidebar_item_background_color =  wp_kses( $right_sidebar_item_background_color , $allowed_html );
$right_sidebar_item_background_color = esc_attr( $right_sidebar_item_background_color );

	if( $right_sidebar_item_background_color=='' ) 	$right_sidebar_item_background_color = $right_sidebar_item_background_color_default; 

	$right_sidebar_item_background_color_error  = '';
	if( ! ( preg_match( '/^#[a-f0-9]{6}$/i', $right_sidebar_item_background_color ) ) ||  ( strtolower( $right_sidebar_item_background_color ) == 'transparent' ) ) {

				$right_sidebar_item_background_color_error = 'style = "color:red;" ';
				$errors = 'errors';
					
				$right_sidebar_item_background_color_error_message =  '<h4 class="layout-error"> Enter a hexadecimal number for the color. <br />
				This has a hash tag followed by 6 characters and uses numbers between 0 - 9 and letters between A - F ( case insensitive). <br />
				You entered '. $right_sidebar_item_background_color . '  &nbsp; The default color is ' . $right_sidebar_item_background_color_default . '<br />
				You might have entered a O instead of a zero or had too few or too many characters.</h4>'; 					

  				$right_sidebar_item_background_color = $right_sidebar_item_background_color_default;
	}

echo '<label '.  $right_sidebar_item_background_color_error . ' class="layout  right-sidebar-item-color" for="a_'.  $right_sidebar_item_background_color_id . '">'. $right_sidebar_item_background_color_label . '</label><br />' . "\n";

echo '<input ' . $right_sidebar_item_background_color_error .  'class="layout  right-sidebar-item-color childishlysimple-colors" type="text" id="a_'.  $right_sidebar_item_background_color_id .'" name="'. $right_sidebar_item_background_color_option . '" value="'. $right_sidebar_item_background_color .'" />'."\n".'<br />';

if ( isset( $right_sidebar_item_background_color_error_message ) ) echo $right_sidebar_item_background_color_error_message;

echo "\n\n".'<p class="layout-description small-sidebar-item right-sidebar-item-background-color">', $right_sidebar_item_background_color_description, '</p>', "\n";

$childishlysimple_layout_details['right_sidebar_item_background_color'] = $right_sidebar_item_background_color;
$childishlysimple_layout_details['right_sidebar_item_background_color_default'] = $right_sidebar_item_background_color_default;
?>







<?php 	// 	Set the right sidebar items  border color 
	$right_sidebar_item_border_color_option='childishlysimple01_right_sidebar_item_border_color';
	$right_sidebar_item_border_color_label = 'Set the border color of the right sidebar items';
	$right_sidebar_item_border_color_default = '#46b562'; 

	$right_sidebar_item_border_color_description = 'Enter the hexadecimal color of your right sidebar item borders (use numbers 0-9 and letters a - f, case insensitive) with the hash tag. <br /> If you don\'t want a border, make the border the same color as the background.<br /> The default color is ' . $right_sidebar_item_border_color_default;

	$right_sidebar_item_border_color_id = "scissors";


add_option( "$right_sidebar_item_border_color_option", "$right_sidebar_item_border_color_default" ); 
$right_sidebar_item_border_color = get_option( "$right_sidebar_item_border_color_option" );

$allowed_html = array();
$right_sidebar_item_border_color =  wp_kses( $right_sidebar_item_border_color , $allowed_html );
$right_sidebar_item_border_color = esc_attr( $right_sidebar_item_border_color );

	if( $right_sidebar_item_border_color=='' ) $right_sidebar_item_border_color = $right_sidebar_item_border_color_default; 

		$right_sidebar_item_border_color_error ='';
		if( ! ( preg_match( '/^#[a-f0-9]{6}$/i', $right_sidebar_item_border_color ) ) ||  ( strtolower( $right_sidebar_item_border_color ) == 'transparent' ) ) {
	
				$right_sidebar_item_border_color_error = 'style = "color:red;" ';
				$errors = 'errors';
					
				$right_sidebar_item_border_color_error_message =  '<h4 class="layout-error"> Enter a hexadecimal number for the color. <br />
				This has a hash tag followed by 6 characters and uses numbers between 0 - 9 and letters between A - F ( case insensitive). <br />
				You entered '. $right_sidebar_item_border_color . '  &nbsp; The default color is ' . $right_sidebar_item_border_color_default . '<br />
				You might have entered a O instead of a zero or had too few or too many characters.</h4>'; 					

  				$right_sidebar_item_border_color = $right_sidebar_item_border_color_default;
		}
      
	
echo '<label '.  $right_sidebar_item_border_color_error . ' class="layout  right-sidebar-item-border-color" for="a_'.  $right_sidebar_item_border_color_id . '">'. $right_sidebar_item_border_color_label . '</label><br />' . "\n";

echo '<input ' . $right_sidebar_item_border_color_error .  'class="layout  right-sidebar-item-border-color childishlysimple-colors" type="text" id="a_'.  $right_sidebar_item_border_color_id .'" name="'. $right_sidebar_item_border_color_option . '" value="'. $right_sidebar_item_border_color .'" />'."\n".'<br />';

if ( isset( $right_sidebar_item_border_color_error_message ) ) echo $right_sidebar_item_border_color_error_message;

echo "\n\n".'<p class="layout-description small-sidebar-item right-sidebar-item-border-color">', $right_sidebar_item_border_color_description, '</p>', "\n";

$childishlysimple_layout_details['right_sidebar_item_border_color'] = $right_sidebar_item_border_color;
$childishlysimple_layout_details['right_sidebar_item_border_color_default'] = $right_sidebar_item_border_color_default;
?>







<?php	// Set the right sidebar item headings font   color 
	$right_sidebar_item_heading_font_color_option='childishlysimple01_right_sidebar_item_heading_font_color';
	$right_sidebar_item_heading_font_color_label = 'Set the font color of the right sidebar item headings';
	$right_sidebar_item_heading_font_color_default = '#ffffff';
	$right_sidebar_item_heading_font_color_description = 'Enter the hexadecimal font color of your right sidebar item headings (use numbers 0-9 and letters a - f, case insensitive) with the hash tag. <br /> 	The default color is ' . $right_sidebar_item_heading_font_color_default;
	$right_sidebar_item_heading_font_color_id = "lutz_jump";

add_option( "$right_sidebar_item_heading_font_color_option", "$right_sidebar_item_heading_font_color_default" ); 
$right_sidebar_item_heading_font_color = get_option( "$right_sidebar_item_heading_font_color_option" );

$allowed_html = array();
$right_sidebar_item_heading_font_color =  wp_kses( $right_sidebar_item_heading_font_color , $allowed_html );
$right_sidebar_item_heading_font_color = esc_attr( $right_sidebar_item_heading_font_color );

	if( $right_sidebar_item_heading_font_color=='' )  $right_sidebar_item_heading_font_color = $right_sidebar_item_heading_font_color_default; 

	$right_sidebar_item_heading_font_color_error = '';
	if( ! preg_match( '/^#[a-f0-9]{6}$/i', $right_sidebar_item_heading_font_color ) ) {

				$right_sidebar_item_heading_font_color_error = 'style = "color:red;" ';
				$errors = 'errors';
					
				$right_sidebar_item_heading_font_color_error_message = '<h4 class="layout-error"> Enter a hexadecimal number for the font color. <br />
				This has a hash tag followed by 6 characters and uses numbers between 0 - 9 and letters between A - F ( case insensitive). <br />
				You entered '. $right_sidebar_item_heading_font_color . '  &nbsp; The default color is ' . $right_sidebar_item_heading_font_color_default . '<br />
				You might have entered a O instead of a zero or had too few or too many characters.</h4>'; 					

  				$right_sidebar_item_heading_font_color = $right_sidebar_item_heading_font_color_default;
	}
      
	
echo '<label '.  $right_sidebar_item_heading_font_color_error . ' class="layout  right-sidebar-item-heading-font-color" for="a_'.  $right_sidebar_item_heading_font_color_id . '">'. $right_sidebar_item_heading_font_color_label . '</label><br />' . "\n";

echo '<input ' . $right_sidebar_item_heading_font_color_error .  'class="layout  right-sidebar-item-heading-font-color childishlysimple-colors" type="text" id="a_'.  $right_sidebar_item_heading_font_color_id .'" name="'. $right_sidebar_item_heading_font_color_option . '" value="'. $right_sidebar_item_heading_font_color .'" />'."\n".'<br />';

if ( isset( $right_sidebar_item_heading_font_color_error_message ) ) echo $right_sidebar_item_heading_font_color_error_message;

echo "\n\n".'<p class="layout-description small-sidebar-item right-sidebar-item-heading-font-color">', $right_sidebar_item_heading_font_color_description, '</p>', "\n";

$childishlysimple_layout_details['right_sidebar_item_heading_font_color'] = $right_sidebar_item_heading_font_color;
$childishlysimple_layout_details['right_sidebar_item_heading_font_color_default'] = $right_sidebar_item_heading_font_color_default;
?>







<?php 	//	 Set the right sidebar font color
	$right_sidebar_font_color_option='childishlysimple01_right_sidebar_font_color';
	$right_sidebar_font_color_label = 'Set the right sidebar text color'; 
	$right_sidebar_font_color_default = '#000000'; 
	$right_sidebar_font_color_description = 'Enter the hexadecimal  color of your right sidebar text (use numbers 0-9 and letters a - f, case insensitive) with the hash tag. <br /> The default color is ' . $right_sidebar_font_color_default;

	$right_sidebar_font_color_id = "extension";

add_option( "$right_sidebar_font_color_option", "$right_sidebar_font_color_default" ); 
$right_sidebar_font_color = get_option( "$right_sidebar_font_color_option" );

$allowed_html = array();
$right_sidebar_font_color =  wp_kses( $right_sidebar_font_color , $allowed_html );
$right_sidebar_font_color = esc_attr( $right_sidebar_font_color );

	if( $right_sidebar_font_color=='' ) $right_sidebar_font_color = $right_sidebar_font_color_default; 

	$right_sidebar_font_color_error = '';
	if( ! preg_match( '/^#[a-f0-9]{6}$/i', $right_sidebar_font_color ) ) {	

				$right_sidebar_font_color_error = 'style = "color:red;" ';
				$errors = 'errors';
					
				$right_sidebar_font_color_error_message = '<h4 class="layout-error"> Enter a hexadecimal number for the font color. <br />
				This has a hash tag followed by 6 characters and uses numbers between 0 - 9 and letters between A - F ( case insensitive). <br />
				You entered '. $right_sidebar_font_color . '  &nbsp; The default color is ' . $right_sidebar_font_color_default . '<br />
				You might have entered a O instead of a zero or had too few or too many characters.</h4>'; 					

  				$right_sidebar_font_color = $right_sidebar_font_color_default;
	}
      
	
echo '<label '.  $right_sidebar_font_color_error . ' class="layout  right-sidebar-font-color" for="a_'.  $right_sidebar_font_color_id . '">'. $right_sidebar_font_color_label . '</label><br />' . "\n";

echo '<input ' . $right_sidebar_font_color_error .  'class="layout  right-sidebar-font-color childishlysimple-colors" type="text" id="a_'.  $right_sidebar_font_color_id .'" name="'. $right_sidebar_font_color_option . '" value="'. $right_sidebar_font_color .'" />'."\n".'<br />';

if ( isset( $right_sidebar_font_color_error_message ) ) echo $right_sidebar_font_color_error_message;

echo "\n\n".'<p class="layout-description small-sidebar-item right-sidebar-font-color">', $right_sidebar_font_color_description, '</p>', "\n";

$childishlysimple_layout_details['right_sidebar_font_color'] = $right_sidebar_font_color;
$childishlysimple_layout_details['right_sidebar_font_color_default'] = $right_sidebar_font_color_default;
?>






<?php	//	Set the right sidebar link color
	$right_sidebar_link_color_option='childishlysimple01_right_sidebar_link_color';
	$right_sidebar_link_color_label = 'Set the right sidebar link color'; 
	$right_sidebar_link_color_default = '#006f00'; 
	$right_sidebar_link_color_description = 'Enter the hexadecimal  color of your right sidebar links (use numbers 0-9 and letters a - f, case insensitive) with the hash tag. <br /> The default color is ' . $right_sidebar_link_color_default;
	$right_sidebar_link_color_id = "fan_spiral";

add_option( "$right_sidebar_link_color_option", "$right_sidebar_link_color_default" ); 
$right_sidebar_link_color = get_option( "$right_sidebar_link_color_option" );

$allowed_html = array();
$right_sidebar_link_color =  wp_kses( $right_sidebar_link_color , $allowed_html );
$right_sidebar_link_color = esc_attr( $right_sidebar_link_color );

	if( $right_sidebar_link_color=='' ) $right_sidebar_link_color = $right_sidebar_link_color_default; 

	$right_sidebar_link_color_error = '';
	if( ! preg_match( '/^#[a-f0-9]{6}$/i', $right_sidebar_link_color ) )  {

				$right_sidebar_link_color_error = 'style = "color:red;" ';
				$errors = 'errors';
					
				$right_sidebar_link_color_error_message = '<h4 class="layout-error"> Enter a hexadecimal number for the link color. <br />
				This has a hash tag followed by 6 characters and uses numbers between 0 - 9 and letters between A - F ( case insensitive). <br />
				You entered '. $right_sidebar_link_color . '  &nbsp; The default color is ' . $right_sidebar_link_color_default . '<br />
				You might have entered a O instead of a zero or had too few or too many characters.</h4>'; 					

  				$right_sidebar_link_color = $right_sidebar_link_color_default;
	}
      
	
echo '<label '.  $right_sidebar_link_color_error . ' class="layout  right-sidebar-link-color" for="a_'.  $right_sidebar_link_color_id . '">'. $right_sidebar_link_color_label . '</label><br />' . "\n";

echo '<input ' . $right_sidebar_link_color_error .  'class="layout  right-sidebar-link-color childishlysimple-colors" type="text" id="a_'.  $right_sidebar_link_color_id .'" name="'. $right_sidebar_link_color_option . '" value="'. $right_sidebar_link_color .'" />'."\n".'<br />';

if ( isset( $right_sidebar_link_color_error_message ) ) echo $right_sidebar_link_color_error_message;

echo "\n\n".'<p class="layout-description small-sidebar-item right-sidebar-link-color">', $right_sidebar_link_color_description, '</p>', "\n";

$childishlysimple_layout_details['right_sidebar_link_color'] = $right_sidebar_link_color;
$childishlysimple_layout_details['right_sidebar_link_color_default'] = $right_sidebar_link_color_default;
?>






<?php	//	Set the right sidebar hover color
	$right_sidebar_hover_color_option='childishlysimple01_right_sidebar_hover_color';
	$right_sidebar_hover_color_label = 'Set the color of your hovered-over right sidebar links'; 
	$right_sidebar_hover_color_default = '#009700'; 
	$right_sidebar_hover_color_description = 'Enter the hexadecimal  color of your hovered-over right sidebar links  (use numbers 0-9 and letters a - f, case insensitive) with the hash tag. <br /> The default color is ' . $right_sidebar_hover_color_default;
	$right_sidebar_hover_color_id = "crossovers";

add_option( "$right_sidebar_hover_color_option", "$right_sidebar_hover_color_default" ); 
$right_sidebar_hover_color = get_option( "$right_sidebar_hover_color_option" );

$allowed_html = array();
$right_sidebar_hover_color =  wp_kses( $right_sidebar_hover_color , $allowed_html );
$right_sidebar_hover_color = esc_attr( $right_sidebar_hover_color );

	if( $right_sidebar_hover_color=='' ) $right_sidebar_hover_color = $right_sidebar_hover_color_default; 

	$right_sidebar_hover_color_error = '';
	if( ! preg_match( '/^#[a-f0-9]{6}$/i', $right_sidebar_hover_color ) ) {

				$right_sidebar_hover_color_error = 'style = "color:red;" ';
				$errors = 'errors';
					
				$right_sidebar_hover_color_error_message = '<h4 class="layout-error"> Enter a hexadecimal number for the link hover color. <br />
				This has a hash tag followed by 6 characters and uses numbers between 0 - 9 and letters between A - F ( case insensitive). <br />
				You entered '. $right_sidebar_hover_color . '  &nbsp; The default color is ' . $right_sidebar_hover_color_default . '<br />
				You might have entered a O instead of a zero or had too few or too many characters.</h4>'; 					

  				$right_sidebar_hover_color = $right_sidebar_hover_color_default;
	}

echo '<label '.  $right_sidebar_hover_color_error . ' class="layout  right-sidebar-hover-color" for="a_'.  $right_sidebar_hover_color_id . '">'. $right_sidebar_hover_color_label . '</label><br />' . "\n";

echo '<input ' . $right_sidebar_hover_color_error .  'class="layout  right-sidebar-hover-color childishlysimple-colors" type="text" id="a_'.  $right_sidebar_hover_color_id .'" name="'. $right_sidebar_hover_color_option . '" value="'. $right_sidebar_hover_color .'" />'."\n".'<br />';

if ( isset( $right_sidebar_hover_color_error_message ) ) echo $right_sidebar_hover_color_error_message;

echo "\n\n".'<p class="layout-description small-sidebar-item right-sidebar-hover-color">', $right_sidebar_hover_color_description, '</p>', "\n";

$childishlysimple_layout_details['right_sidebar_hover_color'] = $right_sidebar_hover_color;
$childishlysimple_layout_details['right_sidebar_hover_color_default'] = $right_sidebar_hover_color_default;
?>

	</div> <!-- options-right-container right-sidebar-item-colors-->
</div> <!-- end options-container sidebar-item-stuff -->





<h3 class="layout"> Set the heading on your home page</h3>

<div class = "options-container index-heading">

<?php 	//	 Index page heading
	$index_heading_option='childishlysimple01_index_heading';
	$index_heading_label = 'Set the heading';
	$index_heading_default = 'Childishly Simple Theme'; 
	$index_heading_description = 'Enter the heading that will show on your home page. <br /> You can leave it blank if you want. <br />The default heading is: ' . $index_heading_default . '<br /> Keep this heading relatively short because it won\'t go to a new line (depending on the width of the website). <br />To change the color, change the category heading font color (below)';
	$index_heading_id = "lunge"; 

		add_option( "$index_heading_option", "$index_heading_default" ); 
		$index_heading = get_option( "$index_heading_option" ); 

			$allowed_html = array();
			$index_heading =  wp_kses($index_heading , $allowed_html);
			$index_heading = esc_attr( $index_heading);


					echo '<label  class="layout  index-heading" for="a_'.  $index_heading_id . '">'. $index_heading_label . '</label><br />' . "\n";
					echo '<input class="layout  index-heading " type="text" id="a_'.  $index_heading_id .'" name="'. $index_heading_option . '" value="'. $index_heading .'" />'."\n".'<br />';

						if ( isset( $index_heading_error_message ) ) echo $index_heading_error_message; 
							echo "\n\n".'<p class="layout-description  index-heading">', $index_heading_description, '</p>', "\n";
								$childishlysimple_layout_details['index_heading'] = $index_heading; 
								$childishlysimple_layout_details['index_heading_default'] = $index_heading_default;
?>

</div><!-- Close options-container index-heading-->





<h3 class="layout">Posts</h3>

<div class="options-container font-colors">

<?php 
	$category_heading_font_color_option='childishlysimple01_category_heading_font_color';   
	$category_heading_font_color_label = 'Set the category heading font color';  	 
	$category_heading_font_color_default = '#535353'; 
	$category_heading_font_color_description = 'Enter the hexadecimal font color of your category titles (use numbers 0-9 and letters a - f, case insensitive) with the hash tag. <br /> 	<span style="color:red;">These titles are at the top of category pages, the search results, archives, tag pages, the home page etc.</span> <br /> The default color is ' . $category_heading_font_color_default;
	$category_heading_font_color_id = "charlotte_spiral"; 


add_option( "$category_heading_font_color_option", "$category_heading_font_color_default" ); 
$category_heading_font_color = get_option( "$category_heading_font_color_option" );  

$allowed_html = array();
$category_heading_font_color =  wp_kses( $category_heading_font_color , $allowed_html );
$category_heading_font_color = esc_attr( $category_heading_font_color );

	if( $category_heading_font_color=='' ) $category_heading_font_color = $category_heading_font_color_default; 

	$category_heading_font_color_error = '';
	if( ! preg_match( '/^#[a-f0-9]{6}$/i', $category_heading_font_color ) ) {

				$category_heading_font_color_error = 'style = "color:red;" ';  
				$errors = 'errors'; 
					
				$category_heading_font_color_error_message = '<h4 class="layout-error"> Enter a hexadecimal number for the font color. <br />
				This has a hash tag followed by 6 characters and uses numbers between 0 - 9 and letters between A - F ( case insensitive). <br />
				You entered '. $category_heading_font_color . '  &nbsp; The default color is ' . $category_heading_font_color_default . '<br />
				You might have entered a O instead of a zero or had too few or too many characters.</h4>'; 					
				
  				$category_heading_font_color = $category_heading_font_color_default;
	}

echo '<label '.  $category_heading_font_color_error . ' class="layout  category-heading-font-color" for="a_'.  $category_heading_font_color_id . '">'. $category_heading_font_color_label . '</label><br />' . "\n";

echo '<input ' . $category_heading_font_color_error .  'class="layout  category-heading-font-color childishlysimple-colors" type="text" id="a_'.  $category_heading_font_color_id .'" name="'. $category_heading_font_color_option . '" value="'. $category_heading_font_color .'" />'."\n".'<br />';

if ( isset( $category_heading_font_color_error_message ) ) echo $category_heading_font_color_error_message; 

echo "\n\n".'<p class="layout-description category-heading-font-color">', $category_heading_font_color_description, '</p>', "\n";

$childishlysimple_layout_details['category_heading_font_color'] = $category_heading_font_color; 
$childishlysimple_layout_details['category_heading_font_color_default'] = $category_heading_font_color_default;
?>







<?php
	$post_title_font_color_option='childishlysimple01_post_title_font_color';   
	$post_title_font_color_label = 'Set the post title font color';  	 
	$post_title_font_color_default = '#828282'; 
	$post_title_font_color_description = 'Enter the hexadecimal font color of your post titles (use numbers 0-9 and letters a - f, case insensitive) with the hash tag. <br /> 
The default color is ' . $post_title_font_color_default;
	$post_title_font_color_id = "cantilever"; 


add_option( "$post_title_font_color_option", "$post_title_font_color_default" ); 
$post_title_font_color = get_option( "$post_title_font_color_option" );  

$allowed_html = array();
$post_title_font_color =  wp_kses( $post_title_font_color , $allowed_html );
$post_title_font_color = esc_attr( $post_title_font_color );

	if( $post_title_font_color=='' ) $post_title_font_color = $post_title_font_color_default; 
		
	$post_title_font_color_error = '';
	if( ! preg_match( '/^#[a-f0-9]{6}$/i', $post_title_font_color ) ) {

				$post_title_font_color_error = 'style = "color:red;" ';  
				$errors = 'errors'; 
					
				$post_title_font_color_error_message = '<h4 class="layout-error"> Enter a hexadecimal number for the font color. <br />
				This has a hash tag followed by 6 characters and uses numbers between 0 - 9 and letters between A - F ( case insensitive). <br />
				You entered '. $post_title_font_color . '  &nbsp; The default color is ' . $post_title_font_color_default . '<br />
				You might have entered a O instead of a zero or had too few or too many characters.</h4>'; 					
				
  				$post_title_font_color = $post_title_font_color_default;
}

echo '<label '.  $post_title_font_color_error . ' class="layout  post-title-font-color" for="a_'.  $post_title_font_color_id . '">'. $post_title_font_color_label . '</label><br />' . "\n";

echo '<input ' . $post_title_font_color_error .  'class="layout  post-title-font-color childishlysimple-colors" type="text" id="a_'.  $post_title_font_color_id .'" name="'. $post_title_font_color_option . '" value="'. $post_title_font_color .'" />'."\n".'<br />';

if ( isset( $post_title_font_color_error_message ) ) echo $post_title_font_color_error_message;

echo "\n\n".'<p class="layout-description post-title-font-color">', $post_title_font_color_description, '</p>', "\n";

$childishlysimple_layout_details['post_title_font_color'] = $post_title_font_color; 

$childishlysimple_layout_details['post_title_font_color_default'] = $post_title_font_color_default;
?>







<?php //  Set the post title font hover  color 
	$post_title_font_hover_color_option='childishlysimple01_post_title_font_hover_color';   
	$post_title_font_hover_color_label = 'Set the post title hover font color';  	 
	$post_title_font_hover_color_default = '#b1b1b1'; 
	$post_title_font_hover_color_description = 'Enter the hexadecimal hover color of your post titles (use numbers 0-9 and letters a - f, case insensitive) with the hash tag. <br /> The default color is ' . $post_title_font_hover_color_default;
	$post_title_font_hover_color_id = "i_spin"; 

add_option( "$post_title_font_hover_color_option", "$post_title_font_hover_color_default" ); 
$post_title_font_hover_color = get_option( "$post_title_font_hover_color_option" );  

$allowed_html = array();
$post_title_font_hover_color =  wp_kses( $post_title_font_hover_color , $allowed_html );
$post_title_font_hover_color = esc_attr( $post_title_font_hover_color );

	if( $post_title_font_hover_color=='' ) $post_title_font_hover_color = $post_title_font_hover_color_default; 
	
$post_title_font_hover_color_error = '';
if( ! preg_match( '/^#[a-f0-9]{6}$/i', $post_title_font_hover_color ) ) {

				$post_title_font_hover_color_error = 'style = "color:red;" ';  
				$errors = 'errors'; 
					
				$post_title_font_hover_color_error_message = '<h4 class="layout-error"> Enter a hexadecimal number for the font color. <br />
				This has a hash tag followed by 6 characters and uses numbers between 0 - 9 and letters between A - F ( case insensitive). <br />
				You entered '. $post_title_font_hover_color . '  &nbsp; The default color is ' . $post_title_font_hover_color_default . '<br />
				You might have entered a O instead of a zero or had too few or too many characters.</h4>'; 					

  				$post_title_font_hover_color = $post_title_font_hover_color_default;
}

echo '<label '.  $post_title_font_hover_color_error . ' class="layout  post-title-font-hover-color" for="a_'.  $post_title_font_hover_color_id . '">'. $post_title_font_hover_color_label . '</label><br />' . "\n";

echo '<input ' . $post_title_font_hover_color_error .  'class="layout  post-title-font-hover-color childishlysimple-colors" type="text" id="a_'.  $post_title_font_hover_color_id .'" name="'. $post_title_font_hover_color_option . '" value="'. $post_title_font_hover_color .'" />'."\n".'<br />';

if ( isset( $post_title_font_hover_color_error_message ) ) echo $post_title_font_hover_color_error_message; 

echo "\n\n".'<p class="layout-description post-title-font-hover-color">', $post_title_font_hover_color_description, '</p>', "\n";

$childishlysimple_layout_details['post_title_font_hover_color'] = $post_title_font_hover_color; 
$childishlysimple_layout_details['post_title_font_hover_color_default'] = $post_title_font_hover_color_default;








// Set the post and body font color
	$post_font_color_option='childishlysimple01_post_font_color';   
	$post_font_color_label = 'Set the post font color'; 
	$post_font_color_default = '#000000'; 
	$post_font_color_description = 'Enter the hexadecimal  color of your post text (use numbers 0-9 and letters a - f, case insensitive) with the hash tag. <br /> The default color is ' . $post_font_color_default;
	$post_font_color_id = "patch_times"; 

add_option( "$post_font_color_option", "$post_font_color_default" ); 
$post_font_color = get_option( "$post_font_color_option" );  //	Get the user's input 

$allowed_html = array();
$post_font_color =  wp_kses( $post_font_color , $allowed_html );
$post_font_color = esc_attr( $post_font_color );


	if( $post_font_color=='' ) $post_font_color = $post_font_color_default; 


	$post_font_color_error = '';
	if( ! preg_match( '/^#[a-f0-9]{6}$/i', $post_font_color ) ) {

				$post_font_color_error = 'style = "color:red;" ';  
				$errors = 'errors'; 
					
				$post_font_color_error_message = '<h4 class="layout-error"> Enter a hexadecimal number for the font color. <br />
				This has a hash tag followed by 6 characters and uses numbers between 0 - 9 and letters between A - F ( case insensitive). <br />
				You entered '. $post_font_color . '  &nbsp; The default color is ' . $post_font_color_default . '<br />
				You might have entered a O instead of a zero or had too few or too many characters.</h4>'; 					
				
  				$post_font_color = $post_font_color_default;
	}
      
	
echo '<label '.  $post_font_color_error . ' class="layout  body-and-post-font-color" for="a_'.  $post_font_color_id . '">'. $post_font_color_label . '</label><br />' . "\n";
echo '<input ' . $post_font_color_error .  'class="layout  body-and-post-font-color childishlysimple-colors" type="text" id="a_'.  $post_font_color_id .'" name="'. $post_font_color_option . '" value="'. $post_font_color .'" />'."\n".'<br />';

if ( isset( $post_font_color_error_message ) ) echo $post_font_color_error_message; 

echo "\n\n".'<p class="layout-description body-and-post-font-color">', $post_font_color_description, '</p>', "\n";

$childishlysimple_layout_details['post_font_color'] = $post_font_color; 
$childishlysimple_layout_details['post_font_color_default'] = $post_font_color_default;








//	Set the post and body link color
	$body_and_post_link_color_option='childishlysimple01_body_and_post_link_color';   
	$body_and_post_link_color_label = 'Set the post link color'; 
	$body_and_post_link_color_default = '#047cb7'; 
	$body_and_post_link_color_description = 'Enter the hexadecimal  color of your post links (use numbers 0-9 and letters a - f, case insensitive) with the hash tag. This will affect the color of some other links and text e.g. the number of comments, links to tags.<br /> The default color is ' . $body_and_post_link_color_default;
	$body_and_post_link_color_id = "layback_spin"; 


add_option( "$body_and_post_link_color_option", "$body_and_post_link_color_default" ); 
$body_and_post_link_color = get_option( "$body_and_post_link_color_option" );  //	Get the user's input 

$allowed_html = array();
$body_and_post_link_color =  wp_kses( $body_and_post_link_color , $allowed_html );
$body_and_post_link_color = esc_attr( $body_and_post_link_color ); 


	if( $body_and_post_link_color=='' ) $body_and_post_link_color = $body_and_post_link_color_default; 

	
	$body_and_post_link_color_error = '';
	if( ! preg_match( '/^#[a-f0-9]{6}$/i', $body_and_post_link_color ) ) {

				$body_and_post_link_color_error = 'style = "color:red;" ';  
				$errors = 'errors'; 
					
				$body_and_post_link_color_error_message = '<h4 class="layout-error"> Enter a hexadecimal number for the link color. <br />
				This has a hash tag followed by 6 characters and uses numbers between 0 - 9 and letters between A - F ( case insensitive). <br />
				You entered '. $body_and_post_link_color . '  &nbsp; The default color is ' . $body_and_post_link_color_default . '<br />
				You might have entered a O instead of a zero or had too few or too many characters.</h4>'; 					

  				$body_and_post_link_color = $body_and_post_link_color_default;
	}
      
	
echo '<label '.  $body_and_post_link_color_error . ' class="layout  body-and-post-link-color" for="a_'.  $body_and_post_link_color_id . '">'. $body_and_post_link_color_label . '</label><br />' . "\n";

echo '<input ' . $body_and_post_link_color_error .  'class="layout  body-and-post-link-color childishlysimple-colors" type="text" id="a_'.  $body_and_post_link_color_id .'" name="'. $body_and_post_link_color_option . '" value="'. $body_and_post_link_color .'" />'."\n".'<br />';

if ( isset( $body_and_post_link_color_error_message ) ) echo $body_and_post_link_color_error_message; 

echo "\n\n".'<p class="layout-description body-and-post-link-color">', $body_and_post_link_color_description, '</p>', "\n";

$childishlysimple_layout_details['body_and_post_link_color'] = $body_and_post_link_color; 
$childishlysimple_layout_details['body_and_post_link_color_default'] = $body_and_post_link_color_default;








// Set the post and body hover color
	$body_and_post_hover_color_option='childishlysimple01_body_and_post_hover_color';   
	$body_and_post_hover_color_label = 'Set the color of your hovered-over post links'; 
	$body_and_post_hover_color_default = '#05a2ed'; 
	$body_and_post_hover_color_description = 'Enter the hexadecimal  color of your hovered-over post links  (use numbers 0-9 and letters a - f, case insensitive) with the hash tag. <br /> The default color is ' . $body_and_post_hover_color_default;
	$body_and_post_hover_color_id = "leg_wrap"; 

add_option( "$body_and_post_hover_color_option", "$body_and_post_hover_color_default" ); 
$body_and_post_hover_color = get_option( "$body_and_post_hover_color_option" );  //	Get the user's input 

$allowed_html = array();
$body_and_post_hover_color =  wp_kses( $body_and_post_hover_color , $allowed_html );
$body_and_post_hover_color = esc_attr( $body_and_post_hover_color );

	if( $body_and_post_hover_color=='' ) $body_and_post_hover_color = $body_and_post_hover_color_default; 

	$body_and_post_hover_color_error = '';
	if( ! preg_match( '/^#[a-f0-9]{6}$/i', $body_and_post_hover_color ) )  {

				$body_and_post_hover_color_error = 'style = "color:red;" ';  
				$errors = 'errors'; 
					
				$body_and_post_hover_color_error_message = '<h4 class="layout-error"> Enter a hexadecimal number for the link hover color. <br />
				This has a hash tag followed by 6 characters and uses numbers between 0 - 9 and letters between A - F ( case insensitive). <br />
				You entered '. $body_and_post_hover_color . '  &nbsp; The default color is ' . $body_and_post_hover_color_default . '<br />
				You might have entered a O instead of a zero or had too few or too many characters.</h4>'; 					
				
  				$body_and_post_hover_color = $body_and_post_hover_color_default;
	}
      
	
echo '<label '.  $body_and_post_hover_color_error . ' class="layout  body-and-post-hover-color" for="a_'.  $body_and_post_hover_color_id . '">'. $body_and_post_hover_color_label . '</label><br />' . "\n";

echo '<input ' . $body_and_post_hover_color_error .  'class="layout  body-and-post-hover-color childishlysimple-colors" type="text" id="a_'.  $body_and_post_hover_color_id .'" name="'. $body_and_post_hover_color_option . '" value="'. $body_and_post_hover_color .'" />'."\n".'<br />';

if ( isset( $body_and_post_hover_color_error_message ) ) echo $body_and_post_hover_color_error_message; 

echo "\n\n".'<p class="layout-description body-and-post-hover-color">', $body_and_post_hover_color_description, '</p>', "\n";

$childishlysimple_layout_details['body_and_post_hover_color'] = $body_and_post_hover_color; 
$childishlysimple_layout_details['body_and_post_hover_color_default'] = $body_and_post_hover_color_default;
?>







<?php //	Set the post background  color
	$post_background_color_option='childishlysimple01_post_background_color';   
	$post_background_color_label = 'Set the post background color';  	 
	$post_background_color_default = '#ffffff'; 
	$post_background_color_description = 'Enter the hexadecimal background color of your post background color (use numbers 0-9 and letters a - f, case insensitive) with the hash tag. <br /> The default color is ' . $post_background_color_default;
	$post_background_color_id = "stag_jump"; 

add_option( "$post_background_color_option", "$post_background_color_default" ); 
$post_background_color = get_option( "$post_background_color_option" );  

$allowed_html = array();
$post_background_color =  wp_kses( $post_background_color , $allowed_html );
$post_background_color = esc_attr( $post_background_color );

	if( $post_background_color=='' ) $post_background_color = $post_background_color_default; 
		
	$post_background_color_error ='';
	if( ! ( preg_match( '/^#[a-f0-9]{6}$/i', $post_background_color ) ) ||  ( strtolower( $post_background_color ) == 'transparent' ) ) {

				$post_background_color_error = 'style = "color:red;" ';  
				$errors = 'errors'; 
					
				$post_background_color_error_message =  '<h4 class="layout-error"> Enter a hexadecimal number for the color. <br />
				This has a hash tag followed by 6 characters and uses numbers between 0 - 9 and letters between A - F ( case insensitive). <br />
				You entered '. $post_background_color . '  &nbsp; The default color is ' . $post_background_color_default . '<br />
				You might have entered a O instead of a zero or had too few or too many characters.</h4>'; 					

  				$post_background_color = $post_background_color_default;
	}
      
	
echo '<label '.  $post_background_color_error . ' class="layout  post-background-color" for="a_'.  $post_background_color_id . '">'. $post_background_color_label . '</label><br />' . "\n";

echo '<input ' . $post_background_color_error .  'class="layout  post-background-color childishlysimple-colors" type="text" id="a_'.  $post_background_color_id .'" name="'. $post_background_color_option . '" value="'. $post_background_color .'" />'."\n".'<br />';

if ( isset( $post_background_color_error_message ) ) echo $post_background_color_error_message; 

echo "\n\n".'<p class="layout-description post-background-color">', $post_background_color_description, '</p>', "\n";

$childishlysimple_layout_details['post_background_color'] = $post_background_color; 
$childishlysimple_layout_details['post_background_color_default'] = $post_background_color_default;
?>






<?php // Set the post border  color 
	$post_border_color_option='childishlysimple01_post_border_color';   
	$post_border_color_label = 'Set the post border color';  	 
	$post_border_color_default = '#ffffff'; 
	$post_border_color_description = 'Enter the hexadecimal background color of your post border color (use numbers 0-9 and letters a - f, case insensitive) with the hash tag. <br />The default color is ' . $post_border_color_default . '<br /> Sticky posts have an identical color but a slightly wider border';
	$post_border_color_id = "clean_program"; 

add_option( "$post_border_color_option", "$post_border_color_default" ); 
$post_border_color = get_option( "$post_border_color_option" );  

$allowed_html = array();
$post_border_color =  wp_kses( $post_border_color , $allowed_html );
$post_border_color = esc_attr( $post_border_color );

	if( $post_border_color=='' ) $post_border_color = $post_border_color_default; 

	$post_border_color_error ='';
	if( ! ( preg_match( '/^#[a-f0-9]{6}$/i', $post_border_color ) ) ||  ( strtolower( $post_border_color ) == 'transparent' ) ){

				$post_border_color_error = 'style = "color:red;" ';  
				$errors = 'errors'; 
					
				$post_border_color_error_message =  '<h4 class="layout-error"> Enter a hexadecimal number for the color. <br />
				This has a hash tag followed by 6 characters and uses numbers between 0 - 9 and letters between A - F ( case insensitive). <br />
				You entered '. $post_border_color . '  &nbsp; The default color is ' . $post_border_color_default . '<br />
				You might have entered a O instead of a zero or had too few or too many characters.</h4>'; 					
				
  				$post_border_color = $post_border_color_default;
	}

echo '<label '.  $post_border_color_error . ' class="layout  post-border-color" for="a_'.  $post_border_color_id . '">'. $post_border_color_label . '</label><br />' . "\n";

echo '<input ' . $post_border_color_error .  'class="layout  post-border-color childishlysimple-colors" type="text" id="a_'.  $post_border_color_id .'" name="'. $post_border_color_option . '" value="'. $post_border_color .'" />'."\n".'<br />';

if ( isset( $post_border_color_error_message ) ) echo $post_border_color_error_message; 

echo "\n\n".'<p class="layout-description post-border-color">', $post_border_color_description, '</p>', "\n";

$childishlysimple_layout_details['post_border_color'] = $post_border_color; 
$childishlysimple_layout_details['post_border_color_default'] = $post_border_color_default;
?>










<?php
	$post_margin_bottom_default ='30';	
	$post_margin_bottom_minimum = '0';
	$post_margin_bottom_maximum = '300';
	$post_margin_bottom_option ='childishlysimple01_post_margin_bottom';
	$post_margin_bottom_option_label = 'Set the vertical distance between posts on multiple post pages';
	$post_margin_bottom_option_description = 'Enter a number between ' .  $post_margin_bottom_minimum  . ' and '  .  $post_margin_bottom_maximum  .'. The default vertical spacing is '. $post_margin_bottom_default .'px'; 	
	$post_margin_bottom_option_id = "post_margin_bottom"; 
	$post_margin_bottom_units = 'px';
	$post_margin_bottom_default_units = 'px';

add_option( "$post_margin_bottom_option", "$post_margin_bottom_default" ); 
$post_margin_bottom = get_option( "$post_margin_bottom_option" );

		$allowed_html = array();
		$post_margin_bottom = wp_kses($post_margin_bottom, $allowed_html); 
		$post_margin_bottom = esc_attr( $post_margin_bottom);			
	
		if( $post_margin_bottom =='' ) $post_margin_bottom = $post_margin_bottom_default;	

		$post_margin_bottom_error = '';
			if (! ( ctype_digit( $post_margin_bottom )  && ( $post_margin_bottom_minimum <=  $post_margin_bottom ) && ( $post_margin_bottom  <= $post_margin_bottom_maximum ))) {
				$errors = 'errors'; 
				$post_margin_bottom_error = 'style = "color:red;" '; 
				$post_margin_bottom_error_message = '<h4 class="layout-error">Enter numbers only between ' . $post_margin_bottom_minimum . ' and ' .   $post_margin_bottom_maximum  . ', no spaces or decimal points etc. You entered ' . $post_margin_bottom. '</h4>';   
				$post_margin_bottom = $post_margin_bottom_default; 
			} 
	
	
echo '<label '.  $post_margin_bottom_error . ' class="layout  post-margin-bottom" for="a_'.  $post_margin_bottom_option_id . '">'. $post_margin_bottom_option_label . '</label><br />' . "\n";

echo '<input ' . $post_margin_bottom_error .  'class="layout  post-margin-bottom" type="text" id="a_'.  $post_margin_bottom_option_id .'" name="'. $post_margin_bottom_option . '" value="'. $post_margin_bottom .'" />'."\n".'<br />';

if ( isset( $post_margin_bottom_error_message ) ) echo $post_margin_bottom_error_message; 

echo "\n\n".'<p class="layout-description post-margin-bottom">', $post_margin_bottom_option_description, '</p>', "\n"; 


$childishlysimple_layout_details['post_margin_bottom_number'] = $post_margin_bottom; 
$childishlysimple_layout_details['post_margin_bottom'] = $post_margin_bottom  .  $post_margin_bottom_units; 
$childishlysimple_layout_details['post_margin_bottom_number_default'] = $post_margin_bottom_default; 
$childishlysimple_layout_details['post_margin_bottom_default'] = $post_margin_bottom_default . $post_margin_bottom_default_units; 
?>

</div><!--end options-container font-colors -->





<h3 class="layout"> Footer items</h3>

<div class="options-container footer-stuff">

<div class="full-width footer-background-color">

<?php	// Set footer background  color 
	$footer_background_color_option='childishlysimple01_footer_background_color'; 
	$footer_background_color_label = 'Set the background color of the footer (contains bottom navigation, footer items, copyright notice etc.)';  	 
	$footer_background_color_default = '#ffff55'; 

	$footer_background_color_description = 'Enter the hexadecimal background color of the footer (use numbers 0-9 and letters a - f, case insensitive) with the hash tag. <br />
The default color is ' . $footer_background_color_default;


	$footer_background_color_id = "stroking";


add_option( "$footer_background_color_option", "$footer_background_color_default" ); 
$footer_background_color = get_option( "$footer_background_color_option" );

$allowed_html = array();
$footer_background_color =  wp_kses( $footer_background_color , $allowed_html );
$footer_background_color = esc_attr( $footer_background_color );

	if( $footer_background_color=='' ) $footer_background_color = $footer_background_color_default; 

	$footer_background_color_error = '';

	if( ! ( preg_match( '/^#[a-f0-9]{6}$/i', $footer_background_color ) ) ||  ( strtolower( $footer_background_color ) == 'transparent' ) ){

				$footer_background_color_error = 'style = "color:red;" ';
				$errors = 'errors';
					
				$footer_background_color_error_message =  '<h4 class="layout-error"> Enter a hexadecimal number for the color. <br />
				This has a hash tag followed by 6 characters and uses numbers between 0 - 9 and letters between A - F ( case insensitive). <br />
				You entered '. $footer_background_color . '  &nbsp; The default color is ' . $footer_background_color_default . '<br />
				You might have entered a O instead of a zero or had too few or too many characters.</h4>'; 					

  				$footer_background_color = $footer_background_color_default;
	}
      


echo '<label '.  $footer_background_color_error . ' class="layout  footer-background-color" for="a_'.  $footer_background_color_id . '">'. $footer_background_color_label . '</label><br />' . "\n";

echo '<input ' . $footer_background_color_error .  'class="layout  footer-background-color childishlysimple-colors" type="text" id="a_'.  $footer_background_color_id .'" name="'. $footer_background_color_option . '" value="'. $footer_background_color .'" />'."\n".'<br />';

if ( isset( $footer_background_color_error_message ) ) echo $footer_background_color_error_message; 

echo "\n\n".'<p class="layout-description footer-background-color">', $footer_background_color_description, '</p>', "\n";

$childishlysimple_layout_details['footer_background_color'] = $footer_background_color; 
$childishlysimple_layout_details['footer_background_color_default'] = $footer_background_color_default;
?>

</div><!-- end full-width footer-background-color-->
	
	
	




<div class = "full-width admin-footer-spacer">

<?php
	$footer_spacing_default ='10';	
	$footer_spacing_minimum = '0';
	$footer_spacing_maximum = '200';
	$footer_spacing_option ='childishlysimple01_footer_spacing';
	$footer_spacing_option_label = 'Move the footer items down the page';
	$footer_spacing_option_description = 'Enter a number between ' .  $footer_spacing_minimum  . ' and '  .  $footer_spacing_maximum  .'. The default height in pixels is '. $footer_spacing_default .'px'; 	
	$footer_spacing_option_id = "footer_spacing"; 
	$footer_spacing_units = 'px';
	$footer_spacing_default_units = 'px';

add_option( "$footer_spacing_option", "$footer_spacing_default" ); 
$footer_spacing = get_option( "$footer_spacing_option" );

		$allowed_html = array();
		$footer_spacing = wp_kses($footer_spacing, $allowed_html); 
		$footer_spacing = esc_attr( $footer_spacing);			
	
		if( $footer_spacing =='' ) $footer_spacing = $footer_spacing_default;	

		$footer_spacing_error = '';
			if (! ( ctype_digit( $footer_spacing )  && ( $footer_spacing_minimum <=  $footer_spacing ) && ( $footer_spacing  <= $footer_spacing_maximum ))) {
				$footer_spacing_error = 'style = "color:red;" '; 
				$errors = 'errors'; 
				$footer_spacing_error_message = '<h4 class="layout-error">Enter numbers only between ' . $footer_spacing_minimum . ' and ' .   $footer_spacing_maximum  . ', no spaces or decimal points etc. You entered ' . $footer_spacing. '</h4>';   
				$footer_spacing = $footer_spacing_default;
			} 
	
	
echo '<label '.  $footer_spacing_error . ' class="layout  footer-spacing" for="a_'.  $footer_spacing_option_id . '">'. $footer_spacing_option_label . '</label><br />' . "\n";

echo '<input ' . $footer_spacing_error .  'class="layout  footer-spacing" type="text" id="a_'.  $footer_spacing_option_id .'" name="'. $footer_spacing_option . '" value="'. $footer_spacing .'" />'."\n".'<br />';

if ( isset( $footer_spacing_error_message ) ) echo $footer_spacing_error_message; 

echo "\n\n".'<p class="layout-description admin-footer-spacer">', $footer_spacing_option_description, '</p>', "\n"; 


$childishlysimple_layout_details['footer_spacing_number'] = $footer_spacing; 
$childishlysimple_layout_details['footer_spacing'] = $footer_spacing  .  $footer_spacing_units; 
$childishlysimple_layout_details['footer_spacing_number_default'] = $footer_spacing_default; 
$childishlysimple_layout_details['footer_spacing_default'] = $footer_spacing_default . $footer_spacing_default_units; 
?>

</div><!-- End full-width admin-footer-spacer-->







	
<div class="options-left-container footer-items">
		
<?php	//	Select footer items 

	$footer_items_hardcoded_checkbox_array = array( 
		'footer_home' => 'Footer Home', 
		'footer_widget_01' => 'Footer Widget 01', 
		'footer_most_recent' => 'Footer Most Recent Posts', 
		'footer_widget_02' => 'Footer Widget 02', 
		'footer_most_popular' => 'Footer Most Popular Posts',
		'footer_widget_03' => 'Footer Widget 03', 
		'footer_latest_comments' => 'Footer Latest Comments',  
		'footer_widget_04' => 'Footer Widget 04', 
		'footer_calendar' => 'Footer Calendar', 
		'footer_widget_05' => 'Footer Widget 05', 
		'footer_all_categories' => 'Footer All Categories',
		'footer_widget_06' => 'Footer Widget 06', 
		'footer_child_categories' => 'Footer Child Categories',  
		'footer_widget_07' => 'Footer Widget 07', 
		'footer_pages' => 'Footer Pages', 
		'footer_widget_08' => 'Footer Widget 08', 
		'footer_archives' => 'Footer Archives',
		'footer_widget_09' => 'Footer Widget 09', 
		'footer_bookmarks' => 'Footer Bookmarks',  
		'footer_widget_10' => 'Footer Widget 10', 
		'footer_authors' => 'Footer Authors', 
		'footer_widget_11' => 'Footer Widget 11', 
		'footer_tag_cloud' => 'Footer Tag Cloud',
		'footer_widget_12' => 'Footer Widget 12', 
		'footer_register_or_login' => 'Footer Register or Log in',  
		'footer_widget_13' => 'Footer Widget 13', 
 );


$footer_items_checkbox = 'childishlysimple01_footer_items_selected'; 

$footer_items_default_checkboxes = array( 
		'footer_calendar' => 'Footer Calendar', 
		'footer_register_or_login' => 'Footer Register or Log in', 
		'footer_bookmarks' => 'Footer Bookmarks',
 );

$number_of_footer_items_default = count( $footer_items_default_checkboxes );
$maximum_number_of_footer_items = 8;
$footer_items_checkbox_label ='Select your footer items';

$footer_items_checkbox_description = 'Select the footer items that you want to display. <br /> Footer Widget 01  is to the left. <br />
<span style = "color:red;">The maximum number of items you can show is ' . $maximum_number_of_footer_items . '</span><br /> Widgets can be found in Appearance/Widgets. <br />Click on the Plugins / Add New link in the left sidebar to add new widgets.<br /> Deleting a Widget sends it to the Inactive Widgets section (Appearance/Widgets)<br /><br /><br /><br /><br /><br /><br />'; 

$footer_items_checkbox_id = "mohawk";


$footer_items_default_checkboxes_reversed = array_flip( $footer_items_default_checkboxes );
add_option( $footer_items_checkbox, $footer_items_default_checkboxes_reversed ); 

$footer_items_checked_checkboxes = array( );
$footer_items_checked_checkboxes = get_option( $footer_items_checkbox ); 

if ( $footer_items_checked_checkboxes == '' ) $footer_items_checked_checkboxes = array ( 1,2 );


echo '<p class="layout  footer-item-label">'.$footer_items_checkbox_label. '</p>'."\n\n";

$i = 1;
$number_of_footer_items = 0;	

	foreach ( $footer_items_hardcoded_checkbox_array as $footer_items_checkbox_key => $footer_items_checkbox_value ) {
	echo '<label for="a_'. $footer_items_checkbox_id . $i . '" class="choose-item-checkbox footer-item">' . $footer_items_checkbox_value .  '</label>'."\n"; 
	echo '<input type="checkbox" id="a_' . $footer_items_checkbox_id . $i ++ . '"  class="choose-item-checkbox footer-item"';

		if( count( $first_time_use ) == 0 ){ 	
			
				foreach ( $footer_items_default_checkboxes as $footer_items_default_checkboxes_key => $footer_items_default_checkboxes_value ) {
				  checked (  $footer_items_checkbox_key, 	$footer_items_default_checkboxes_value );
				}
		  			
					if ( array_key_exists ( $footer_items_checkbox_key, $footer_items_default_checkboxes ) ) $number_of_footer_items ++; 
					
							
} else {	//	If options have already been saved
		
		foreach ( $footer_items_checked_checkboxes as $footer_items_checked_checkboxes_key => $footer_items_checked_checkboxes_value ) {
		 checked (  $footer_items_checkbox_key, 	$footer_items_checked_checkboxes_value );
		}
		  			
		  		if ( in_array ( $footer_items_checkbox_key, $footer_items_checked_checkboxes ) )  $number_of_footer_items ++;
				
	}  	//	End else

echo ' name="'. $footer_items_checkbox . '[]" value="' . $footer_items_checkbox_key . '" /><br />' .  "\n\n" ; 


} //	End  foreach ( $footer_items_hardcoded_checkbox_array ....
 
		if ( $number_of_footer_items > $maximum_number_of_footer_items ) {
		$major_errors = 'major_errors'; 

		echo '<h4 class="layout-error">You\'ve selected ' . $number_of_footer_items  . ' items. The maximum number allowed is '.  $maximum_number_of_footer_items  . '</h4>';   
		}						
			

echo "\n\n".'<p class="layout-description footer-items">', $footer_items_checkbox_description, '</p>', "\n";


$childishlysimple_layout_details['selected_footer_items'] = $footer_items_checked_checkboxes;
$childishlysimple_layout_details['footer_items_default'] =  $footer_items_default_checkboxes;
$childishlysimple_layout_details['maximum_number_of_footer_items'] = $maximum_number_of_footer_items;
$childishlysimple_layout_details['number_of_footer_items'] = $number_of_footer_items;
$childishlysimple_layout_details['number_of_footer_items_default'] = $number_of_footer_items_default;
?>

</div><!--  End options-left-container footer-items -->







<div class="options-right-container footer-item-colors">


<?php //  Set the footer item headings background   color 
	$footer_item_heading_background_color_option='childishlysimple01_footer_item_heading_background_color';
	$footer_item_heading_background_color_label = 'Set the background color of the footer item headings &nbsp;  &nbsp;  &nbsp;  &nbsp; &nbsp; ';  	 
	$footer_item_heading_background_color_default = '#a3dab1'; 

	$footer_item_heading_background_color_description = 'Enter the hexadecimal background color of your footer item headings (use numbers 0-9 and letters a - f, case insensitive) with the hash tag. <br /> The default color is ' . $footer_item_heading_background_color_default;


$footer_item_heading_background_color_id = "cherry_flip";


add_option( "$footer_item_heading_background_color_option", "$footer_item_heading_background_color_default" ); 
$footer_item_heading_background_color = get_option( "$footer_item_heading_background_color_option" );

$allowed_html = array();
$footer_item_heading_background_color =  wp_kses( $footer_item_heading_background_color , $allowed_html );
$footer_item_heading_background_color = esc_attr( $footer_item_heading_background_color );

	if( $footer_item_heading_background_color=='' ) $footer_item_heading_background_color = $footer_item_heading_background_color_default; 


$footer_item_heading_background_color_error ='';

	if( ! ( preg_match( '/^#[a-f0-9]{6}$/i', $footer_item_heading_background_color ) ) ||  ( strtolower( $footer_item_heading_background_color ) == 'transparent' ) ) {

				$footer_item_heading_background_color_error = 'style = "color:red;" ';
				$errors = 'errors';
					
				$footer_item_heading_background_color_error_message = '<h4 class="layout-error"> Enter a hexadecimal number for the color. <br />
				This has a hash tag followed by 6 characters and uses numbers between 0 - 9 and letters between A - F ( case insensitive). <br />
				You entered '. $footer_item_heading_background_color . '  &nbsp; The default color is ' . $footer_item_heading_background_color_default . '<br />
				You might have entered a O instead of a zero or had too few or too many characters.</h4>'; 					

  				$footer_item_heading_background_color = $footer_item_heading_background_color_default;
	}
      
	
echo '<label '.  $footer_item_heading_background_color_error . ' class="layout  footer-item-heading-background-color" for="a_'.  $footer_item_heading_background_color_id . '">'. $footer_item_heading_background_color_label . '</label><br />' . "\n";

echo '<input ' . $footer_item_heading_background_color_error .  'class="layout  footer-item-heading-background-color childishlysimple-colors" type="text" id="a_'.  $footer_item_heading_background_color_id .'" name="'. $footer_item_heading_background_color_option . '" value="'. $footer_item_heading_background_color .'" />'."\n".'<br />';

if ( isset( $footer_item_heading_background_color_error_message ) ) echo $footer_item_heading_background_color_error_message;

echo "\n\n".'<p class="layout-description small-footer-item footer-item-heading-background-color">', $footer_item_heading_background_color_description, '</p>', "\n";

$childishlysimple_layout_details['footer_item_heading_background_color'] = $footer_item_heading_background_color;
$childishlysimple_layout_details['footer_item_heading_background_color_default'] = $footer_item_heading_background_color_default;
?>







<?php // Set the footer items  background color 
	$footer_item_background_color_option='childishlysimple01_footer_item_background_color';
	$footer_item_background_color_label = 'Set the background color of the footer items';
	$footer_item_background_color_default = '#d9ffe4';

	$footer_item_background_color_description = 'Enter the hexadecimal background color of your footer items (use numbers 0-9 and letters a - f, case insensitive) with the hash tag. <br /> The default color is ' . $footer_item_background_color_default;


$footer_item_background_color_id = "three_turn";


add_option( "$footer_item_background_color_option", "$footer_item_background_color_default" ); 
$footer_item_background_color = get_option( "$footer_item_background_color_option" );

$allowed_html = array();
$footer_item_background_color =  wp_kses( $footer_item_background_color , $allowed_html );
$footer_item_background_color = esc_attr( $footer_item_background_color );

	if( $footer_item_background_color=='' ) $footer_item_background_color = $footer_item_background_color_default; 
	 	
$footer_item_background_color_error = '';

	if( ! ( preg_match( '/^#[a-f0-9]{6}$/i', $footer_item_background_color ) ) ||  ( strtolower( $footer_item_background_color ) == 'transparent' ) ) {

				$footer_item_background_color_error = 'style = "color:red;" ';
				$errors = 'errors';
					
				$footer_item_background_color_error_message =  '<h4 class="layout-error"> Enter a hexadecimal number for the color. <br />
				This has a hash tag followed by 6 characters and uses numbers between 0 - 9 and letters between A - F ( case insensitive). <br />
				You entered '. $footer_item_background_color . '  &nbsp; The default color is ' . $footer_item_background_color_default . '<br />
				You might have entered a O instead of a zero or had too few or too many characters.</h4>'; 					

  				$footer_item_background_color = $footer_item_background_color_default;
	}
      
	
echo '<label '.  $footer_item_background_color_error . ' class="layout  footer-item-color" for="a_'.  $footer_item_background_color_id . '">'. $footer_item_background_color_label . '</label><br />' . "\n";

echo '<input ' . $footer_item_background_color_error .  'class="layout  footer-item-color childishlysimple-colors" type="text" id="a_'.  $footer_item_background_color_id .'" name="'. $footer_item_background_color_option . '" value="'. $footer_item_background_color .'" />'."\n".'<br />';

if ( isset( $footer_item_background_color_error_message ) ) echo $footer_item_background_color_error_message;

echo "\n\n".'<p class="layout-description small-footer-item footer-item-background-color">', $footer_item_background_color_description, '</p>', "\n";

$childishlysimple_layout_details['footer_item_background_color'] = $footer_item_background_color;
$childishlysimple_layout_details['footer_item_background_color_default'] = $footer_item_background_color_default;
?>







<?php 	// 	Set the footer items  border color
	$footer_item_border_color_option='childishlysimple01_footer_item_border_color';
	$footer_item_border_color_label = 'Set the border color of the footer items';
	$footer_item_border_color_default = '#46b562';

	$footer_item_border_color_description = 'Enter the hexadecimal color of your footer item borders (use numbers 0-9 and letters a - f, case insensitive) with the hash tag. 
The default color is ' . $footer_item_border_color_default;


$footer_item_border_color_id = "quadruple_jump";


add_option( "$footer_item_border_color_option", "$footer_item_border_color_default" ); 
$footer_item_border_color = get_option( "$footer_item_border_color_option" );

$allowed_html = array();
$footer_item_border_color =  wp_kses( $footer_item_border_color , $allowed_html );
$footer_item_border_color = esc_attr( $footer_item_border_color );

	if( $footer_item_border_color=='' ) $footer_item_border_color = $footer_item_border_color_default; 

$footer_item_border_color_error = '';

	if( ! ( preg_match( '/^#[a-f0-9]{6}$/i', $footer_item_border_color ) ) ||  ( strtolower( $footer_item_border_color ) == 'transparent' ) ){
	
				$footer_item_border_color_error = 'style = "color:red;" ';
				$errors = 'errors';
					
				$footer_item_border_color_error_message =  '<h4 class="layout-error"> Enter a hexadecimal number for the color. <br />
				This has a hash tag followed by 6 characters and uses numbers between 0 - 9 and letters between A - F ( case insensitive). <br />
				You entered '. $footer_item_border_color . '  &nbsp; The default color is ' . $footer_item_border_color_default . '<br />
				You might have entered a O instead of a zero or had too few or too many characters.</h4>'; 					

  				$footer_item_border_color = $footer_item_border_color_default;
	}
      
	
echo '<label '.  $footer_item_border_color_error . ' class="layout  footer-item-border-color" for="a_'.  $footer_item_border_color_id . '">'. $footer_item_border_color_label . '</label><br />' . "\n";

echo '<input ' . $footer_item_border_color_error .  'class="layout  footer-item-border-color childishlysimple-colors" type="text" id="a_'.  $footer_item_border_color_id .'" name="'. $footer_item_border_color_option . '" value="'. $footer_item_border_color .'" />'."\n".'<br />';

if ( isset( $footer_item_border_color_error_message ) ) echo $footer_item_border_color_error_message;

echo "\n\n".'<p class="layout-description small-footer-item footer-item-border-color">', $footer_item_border_color_description, '</p>', "\n";

$childishlysimple_layout_details['footer_item_border_color'] = $footer_item_border_color;
$childishlysimple_layout_details['footer_item_border_color_default'] = $footer_item_border_color_default;
?>







<?php 	// Set the footer item headings font   color
	$footer_item_heading_font_color_option='childishlysimple01_footer_item_heading_font_color';
	$footer_item_heading_font_color_label = 'Set the font color of the footer item headings';
	$footer_item_heading_font_color_default = '#ffffff'; 
	$footer_item_heading_font_color_description = 'Enter the hexadecimal font color of your footer item headings (use numbers 0-9 and letters a - f, case insensitive) with the hash tag. <br /> The default color is ' . $footer_item_heading_font_color_default;

	$footer_item_heading_font_color_id = "flying_spin";

add_option( "$footer_item_heading_font_color_option", "$footer_item_heading_font_color_default" ); 
$footer_item_heading_font_color = get_option( "$footer_item_heading_font_color_option" ); 

$allowed_html = array();
$footer_item_heading_font_color =  wp_kses( $footer_item_heading_font_color , $allowed_html );
$footer_item_heading_font_color = esc_attr( $footer_item_heading_font_color );

	if( $footer_item_heading_font_color=='' ) $footer_item_heading_font_color = $footer_item_heading_font_color_default; 

	$footer_item_heading_font_color_error = '';
	if( ! preg_match( '/^#[a-f0-9]{6}$/i', $footer_item_heading_font_color ) ) {

				$footer_item_heading_font_color_error = 'style = "color:red;" '; 
				$errors = 'errors';
					
				$footer_item_heading_font_color_error_message = '<h4 class="layout-error"> Enter a hexadecimal number for the font color. <br />
				This has a hash tag followed by 6 characters and uses numbers between 0 - 9 and letters between A - F ( case insensitive). <br />
				You entered '. $footer_item_heading_font_color . '  &nbsp; The default color is ' . $footer_item_heading_font_color_default . '<br />
				You might have entered a O instead of a zero or had too few or too many characters.</h4>'; 					

  				$footer_item_heading_font_color = $footer_item_heading_font_color_default; 
	}
      
	
echo '<label '.  $footer_item_heading_font_color_error . ' class="layout  footer-item-heading-font-color" for="a_'.  $footer_item_heading_font_color_id . '">'. $footer_item_heading_font_color_label . '</label><br />' . "\n";

echo '<input ' . $footer_item_heading_font_color_error .  'class="layout  footer-item-heading-font-color childishlysimple-colors" type="text" id="a_'.  $footer_item_heading_font_color_id .'" name="'. $footer_item_heading_font_color_option . '" value="'. $footer_item_heading_font_color .'" />'."\n".'<br />';

if ( isset( $footer_item_heading_font_color_error_message ) ) echo $footer_item_heading_font_color_error_message;

echo "\n\n".'<p class="layout-description small-footer-item footer-item-heading-font-color">', $footer_item_heading_font_color_description, '</p>', "\n";

$childishlysimple_layout_details['footer_item_heading_font_color'] = $footer_item_heading_font_color;
$childishlysimple_layout_details['footer_item_heading_font_color_default'] = $footer_item_heading_font_color_default;
?>







<?php	//	Set the footer font color
	$footer_font_color_option='childishlysimple01_footer_font_color';
	$footer_font_color_label = 'Set the footer text color'; 
	$footer_font_color_default = '#000000'; 
	$footer_font_color_description = 'Enter the hexadecimal  color of your footer text (use numbers 0-9 and letters a - f, case insensitive) with the hash tag. <br /> The default color is ' . $footer_font_color_default;


	$footer_font_color_id = "crossed_step_forward";


add_option( "$footer_font_color_option", "$footer_font_color_default" ); 
$footer_font_color = get_option( "$footer_font_color_option" );

$allowed_html = array();
$footer_font_color =  wp_kses( $footer_font_color , $allowed_html );
$footer_font_color = esc_attr( $footer_font_color );

	if( $footer_font_color=='' ) $footer_font_color = $footer_font_color_default; 

$footer_font_color_error = '';

	if( ! preg_match( '/^#[a-f0-9]{6}$/i', $footer_font_color ) ) {

				$footer_font_color_error = 'style = "color:red;" ';
				$errors = 'errors';
					
				$footer_font_color_error_message = '<h4 class="layout-error"> Enter a hexadecimal number for the font color. <br />
				This has a hash tag followed by 6 characters and uses numbers between 0 - 9 and letters between A - F ( case insensitive). <br />
				You entered '. $footer_font_color . '  &nbsp; The default color is ' . $footer_font_color_default . '<br />
				You might have entered a O instead of a zero or had too few or too many characters.</h4>'; 					

  				$footer_font_color = $footer_font_color_default;
	}

echo '<label '.  $footer_font_color_error . ' class="layout  footer-font-color" for="a_'.  $footer_font_color_id . '">'. $footer_font_color_label . '</label><br />' . "\n";

echo '<input ' . $footer_font_color_error .  'class="layout  footer-font-color childishlysimple-colors" type="text" id="a_'.  $footer_font_color_id .'" name="'. $footer_font_color_option . '" value="'. $footer_font_color .'" />'."\n".'<br />';

if ( isset( $footer_font_color_error_message ) ) echo $footer_font_color_error_message;

echo "\n\n".'<p class="layout-description small-footer-item footer-font-color">', $footer_font_color_description, '</p>', "\n";

$childishlysimple_layout_details['footer_font_color'] = $footer_font_color;
$childishlysimple_layout_details['footer_font_color_default'] = $footer_font_color_default;







//	Set the footer link color
$footer_link_color_option='childishlysimple01_footer_link_color';
$footer_link_color_label = 'Set the footer link color'; 
$footer_link_color_default = '#006f00';  
$footer_link_color_description = 'Enter the hexadecimal  color of your footer links (use numbers 0-9 and letters a - f, case insensitive) with the hash tag. <br /> The default color is ' . $footer_link_color_default;

$footer_link_color_id = "dance_spin";

add_option( "$footer_link_color_option", "$footer_link_color_default" ); 
$footer_link_color = get_option( "$footer_link_color_option" );

$allowed_html = array();
$footer_link_color =  wp_kses( $footer_link_color , $allowed_html );
$footer_link_color = esc_attr( $footer_link_color );

	if( $footer_link_color=='' ) $footer_link_color = $footer_link_color_default; 

	$footer_link_color_error = '';

	if( ! preg_match( '/^#[a-f0-9]{6}$/i', $footer_link_color ) ) {

				$footer_link_color_error = 'style = "color:red;" ';
				$errors = 'errors';
					
				$footer_link_color_error_message = '<h4 class="layout-error"> Enter a hexadecimal number for the link color. <br />
				This has a hash tag followed by 6 characters and uses numbers between 0 - 9 and letters between A - F ( case insensitive). <br />
				You entered '. $footer_link_color . '  &nbsp; The default color is ' . $footer_link_color_default . '<br />
				You might have entered a O instead of a zero or had too few or too many characters.</h4>'; 					

  				$footer_link_color = $footer_link_color_default;
	}
      
	
echo '<label '.  $footer_link_color_error . ' class="layout  footer-link-color" for="a_'.  $footer_link_color_id . '">'. $footer_link_color_label . '</label><br />' . "\n";

echo '<input ' . $footer_link_color_error .  'class="layout  footer-link-color childishlysimple-colors" type="text" id="a_'.  $footer_link_color_id .'" name="'. $footer_link_color_option . '" value="'. $footer_link_color .'" />'."\n".'<br />';

if ( isset( $footer_link_color_error_message ) ) echo $footer_link_color_error_message;

echo "\n\n".'<p class="layout-description small-footer-item footer-link-color">', $footer_link_color_description, '</p>', "\n";

$childishlysimple_layout_details['footer_link_color'] = $footer_link_color;
$childishlysimple_layout_details['footer_link_color_default'] = $footer_link_color_default;







//	Set the footer hover color
$footer_hover_color_option='childishlysimple01_footer_hover_color';
$footer_hover_color_label = 'Set the color of your hovered-over footer links'; 
$footer_hover_color_default = '#009700'; 

$footer_hover_color_description = 'Enter the hexadecimal  color of your hovered-over footer links  (use numbers 0-9 and letters a - f, case insensitive) with the hash tag. <br /> The default color is ' . $footer_hover_color_default;


$footer_hover_color_id = "edge_jump";


add_option( "$footer_hover_color_option", "$footer_hover_color_default" ); 
$footer_hover_color = get_option( "$footer_hover_color_option" );

$allowed_html = array();
$footer_hover_color =  wp_kses( $footer_hover_color , $allowed_html );
$footer_hover_color = esc_attr( $footer_hover_color );

	if( $footer_hover_color=='' ) $footer_hover_color = $footer_hover_color_default; 


$footer_hover_color_error = '';

	if( ! preg_match( '/^#[a-f0-9]{6}$/i', $footer_hover_color ) )  {

				$footer_hover_color_error = 'style = "color:red;" ';
				$errors = 'errors';
					
				$footer_hover_color_error_message = '<h4 class="layout-error"> Enter a hexadecimal number for the link hover color. <br />
				This has a hash tag followed by 6 characters and uses numbers between 0 - 9 and letters between A - F ( case insensitive). <br />
				You entered '. $footer_hover_color . '  &nbsp; The default color is ' . $footer_hover_color_default . '<br />
				You might have entered a O instead of a zero or had too few or too many characters.</h4>'; 					

  				$footer_hover_color = $footer_hover_color_default;
	}
      
	
echo '<label '.  $footer_hover_color_error . ' class="layout  footer-hover-color" for="a_'.  $footer_hover_color_id . '">'. $footer_hover_color_label . '</label><br />' . "\n";

echo '<input ' . $footer_hover_color_error .  'class="layout  footer-hover-color childishlysimple-colors" type="text" id="a_'.  $footer_hover_color_id .'" name="'. $footer_hover_color_option . '" value="'. $footer_hover_color .'" />'."\n".'<br />';

if ( isset( $footer_hover_color_error_message ) ) echo $footer_hover_color_error_message;

echo "\n\n".'<p class="layout-description small-footer-item footer-hover-color">', $footer_hover_color_description, '</p>', "\n";

$childishlysimple_layout_details['footer_hover_color'] = $footer_hover_color;
$childishlysimple_layout_details['footer_hover_color_default'] = $footer_hover_color_default;
?>

</div> <!-- options-right-container footer-item-colors -->

</div><!-- options-container footer-stuff -->





<h3 class="layout">RSS feeds</h3>

<div class = "options-container rss-links">

	<div class = "options-left-container utility-links">

<?php // Set the utility links color 
	$utility_link_color_option='childishlysimple01_utility_link_color';
	$utility_link_color_label = 'Set the link color of the RSS feeds, Powered by WordPress notice and Alchemweb links, and the text color of the copyright notice'; 
	$utility_link_color_default = '#000000'; 

	$utility_link_color_description = 'Enter the hexadecimal color of your RSS feed links, Powered by Wordpress and Alchemweb links, and the copyright notice (use numbers 0-9 and letters a - f, case insensitive) with the hash tag. <br /> The default color is ' . $utility_link_color_default;


	$utility_link_color_id = "twizzle"; 


add_option( "$utility_link_color_option", "$utility_link_color_default" ); 
$utility_link_color = get_option( "$utility_link_color_option" );  

$allowed_html = array();
$utility_link_color =  wp_kses( $utility_link_color , $allowed_html );
$utility_link_color = esc_attr( $utility_link_color );

	if( $utility_link_color=='' ) $utility_link_color = $utility_link_color_default; 

$utility_link_color_error = '';
	if( ! ( preg_match( '/^#[a-f0-9]{6}$/i', $utility_link_color ) ) ||  ( strtolower( $utility_link_color ) == 'transparent' ) ) {

			$utility_link_color_error = 'style = "color:red;" ';
			$errors = 'errors';
					
			$utility_link_color_error_message =  '<h4 class="layout-error"> Enter a hexadecimal number for the color. <br />
			This has a hash tag followed by 6 characters and uses numbers between 0 - 9 and letters between A - F ( case insensitive). <br />
			You entered '. $utility_link_color . '  &nbsp; The default color is ' . $utility_link_color_default . '<br />
			You might have entered a O instead of a zero or had too few or too many characters.</h4>'; 					

  			$utility_link_color = $utility_link_color_default;
}
      
	
echo '<label '.  $utility_link_color_error . ' class="layout  utility-link" for="a_'.  $utility_link_color_id . '">'. $utility_link_color_label . '</label><br />' . "\n";

echo '<input ' . $utility_link_color_error .  'class="layout  utility-link childishlysimple-colors" type="text" id="a_'.  $utility_link_color_id .'" name="'. $utility_link_color_option . '" value="'. $utility_link_color .'" />'."\n".'<br />';

if ( isset( $utility_link_color_error_message ) ) echo $utility_link_color_error_message; 

echo "\n\n".'<p class="layout-description small-sidebar-item utility-link">', $utility_link_color_description, '</p>', "\n";

$childishlysimple_layout_details['utility_link_color'] = $utility_link_color; 
$childishlysimple_layout_details['utility_link_color_default'] = $utility_link_color_default;
?>

</div><!-- end options-left-container utility-links -->







<div class = "options-right-container utility-links">

<?php // Set the utility hover color 
	$utility_hover_color_option='childishlysimple01_utility_hover_color';
	$utility_hover_color_label = 'Set the hover color of the RSS feed links, and Powered by WordPress notice and Alchemweb links &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp; '; 
	$utility_hover_color_default = '#574e4e'; 
	$utility_hover_color_description = 'Enter the hexadecimal hover color of your RSS feed links, and Powered by Wordpress and Alchemweb links (use numbers 0-9 and letters a - f, case insensitive) with the hash tag. <br /> The default color is ' . $utility_hover_color_default;
	$utility_hover_color_id = "closed_mohawk";


add_option( "$utility_hover_color_option", "$utility_hover_color_default" ); 
$utility_hover_color = get_option( "$utility_hover_color_option" );  

$allowed_html = array();
$utility_hover_color =  wp_kses( $utility_hover_color , $allowed_html );
$utility_hover_color = esc_attr( $utility_hover_color );

	if( $utility_hover_color=='' ) $utility_hover_color = $utility_hover_color_default; 

	$utility_hover_color_error = '';
	if( ! ( preg_match( '/^#[a-f0-9]{6}$/i', $utility_hover_color ) ) ||  ( strtolower( $utility_hover_color ) == 'transparent' ) ) {

				$utility_hover_color_error = 'style = "color:red;" '; 
				$errors = 'errors';
					
				$utility_hover_color_error_message =  '<h4 class="layout-error"> Enter a hexadecimal number for the color. <br />
				This has a hash tag followed by 6 characters and uses numbers between 0 - 9 and letters between A - F ( case insensitive). <br />
				You entered '. $utility_hover_color . '  &nbsp; The default color is ' . $utility_hover_color_default . '<br />
				You might have entered a O instead of a zero or had too few or too many characters.</h4>'; 					

  				$utility_hover_color = $utility_hover_color_default;
	}
      
	
echo '<label '.  $utility_hover_color_error . ' class="layout  utility-hover" for="a_'.  $utility_hover_color_id . '">'. $utility_hover_color_label . '</label><br />' . "\n";

echo '<input ' . $utility_hover_color_error .  'class="layout  utility-hover childishlysimple-colors" type="text" id="a_'.  $utility_hover_color_id .'" name="'. $utility_hover_color_option . '" value="'. $utility_hover_color .'" />'."\n".'<br />';

if ( isset( $utility_hover_color_error_message ) ) echo $utility_hover_color_error_message; 

echo "\n\n".'<p class="layout-description small-sidebar-item utility-hover">', $utility_hover_color_description, '</p>', "\n";

$childishlysimple_layout_details['utility_hover_color'] = $utility_hover_color; 

$childishlysimple_layout_details['utility_hover_color_default'] = $utility_hover_color_default;
?>

	</div><!-- options-right-container utility-links -->

</div><!-- options-container rss-links-->





<h3 class="layout">Miscellaneous Items</h3>

<div class="options-container miscellaneous-stuff"> <!-- Start div for miscellaneous stuff -->

<?php //	Set miscellaneous items 
	$miscellaneous_hardcoded_checkbox_array = array( 
	'topsearch' => 'Show top search box', 
	'rss' => 'Show RSS feed icons', 
	'poweredby' => 'Show \'Powered by Wordpress\' on the home page', 
	'copyright' => 'Show copyright notice (website home address) on all pages',
	'noindex' => 'Ask search engines NOT to index possible duplicate content. <br /> noindex, nofollow is added to the following files: archive.php,  author.php, search.php, tag.php and taxonomy.php. ',
	'rounded_everything' => 'Show rounded corners on nearly everything',
	'square_top_banner' => 'Square top corners on the banner image',
	'square_images_in_posts' =>  'Square corners on images in posts',
	'square_top_sidebar_items' => 'Square top corners on sidebar items (sidebar widgets etc.)',
	'square_bottom_sidebar_items' => 'Square bottom corners on sidebar items  (sidebar widgets etc.)',
	'square_top_footer_items' => 'Square top corners on footer items (footer widgets etc.)',
	'square_bottom_footer_items' => 'Square bottom corners on footer items (footer widgets etc.)',
	'no_top_border_footer' => 'No top border on footer items',
	'square_posts' => 'Square corners on posts',
	'alchemweb_link' => 'Show \'Designed by Alchemweb\' on the home page <br /> (helps me get work)', 
	 );


	$miscellaneous_default_checkboxes = array( 
	'topsearch' => 'Show top search box', 
	'rss' => 'Show RSS feed icons', 
	'poweredby' => 'Show \'Powered by Wordpress\' on the home page', 
	'noindex' => 'Ask search engines NOT to index possible duplicate content. <br /> noindex, nofollow is added to the following files: archive.php,  author.php, search.php, tag.php and taxonomy.php. ',
	'rounded_everything' => 'Show rounded corners on nearly everything',
	 );

$miscellaneous_checkbox = 'childishlysimple01_miscellaneous_stuff'; 
$miscellaneous_checkbox_label ='<span class="miscellaneous-first-line">Select the miscellaneous items that you want to show</span>';
$miscellaneous_checkbox_description = 'Select the miscellaneous items that you want to display. <br /> <br />'; 
$miscellaneous_checkbox_id = "flying_sit_spin"; 


$miscellaneous_default_checkboxes_reversed = array_flip( $miscellaneous_default_checkboxes ); 
add_option( $miscellaneous_checkbox, $miscellaneous_default_checkboxes_reversed ); 

$miscellaneous_checked_checkboxes = array( );
$miscellaneous_checked_checkboxes = get_option( $miscellaneous_checkbox ); 

if( $miscellaneous_checked_checkboxes == '' ) $miscellaneous_checked_checkboxes = array ( 1,2 );

echo '<p class="layout  miscellaneous-item-label">'.$miscellaneous_checkbox_label. '</p>'."\n\n";

$i = 1;

foreach( $miscellaneous_hardcoded_checkbox_array as $miscellaneous_checkbox_key => $miscellaneous_checkbox_value ) {
	echo '<div class="miscellaneous-item '. $miscellaneous_checkbox_key. '">' ."\n\n";
	echo '<label for="a_'. $miscellaneous_checkbox_id . $i . '" class="choose-item-checkbox miscellaneous-item">' . $miscellaneous_checkbox_value .  '</label>'."\n"; 
	echo '<input type="checkbox" id="a_' . $miscellaneous_checkbox_id . $i ++ . '"  class="choose-item-checkbox miscellaneous-item"';

		if( count( $first_time_use ) == 0 ) { //	Set defaults if no options have been saved yet

				foreach ( $miscellaneous_default_checkboxes as $miscellaneous_default_checkboxes_key => $miscellaneous_default_checkboxes_value ) {
					 checked (  $miscellaneous_checkbox_key, 	$miscellaneous_default_checkboxes_value );
				}	
				
		}  else { 	//	If options have already been saved

				foreach ( $miscellaneous_checked_checkboxes as $miscellaneous_checked_checkboxes_key => $miscellaneous_checked_checkboxes_value ){
					 checked (  $miscellaneous_checkbox_key, 	$miscellaneous_checked_checkboxes_value );
				}										
			  }  // 	end else

	
echo ' name="'. $miscellaneous_checkbox . '[]" value="' . $miscellaneous_checkbox_key . '" /><br />' .  "\n "; 
echo '</div> <!-- End miscellaneous-item -->'. "\n\n\n\n" ;   //	Finish off the HTML
 	
} //	End foreach ( $miscellaneous_hardcoded_checkbox_array 

echo "\n\n".'<p class="layout-description miscellaneous-items">', $miscellaneous_checkbox_description, '</p>', "\n";

$childishlysimple_layout_details['selected_miscellaneous_stuff'] = $miscellaneous_checked_checkboxes; 
$childishlysimple_layout_details['default_miscellaneous_stuff'] =  $miscellaneous_default_checkboxes;
?>

</div><!-- end options-container miscellaneous-stuff -->







<?php //	Set layout details option  for the first time  
	$childishlysimple_layout_details['errors'] = $errors; //	Were there any errors? If so, add them to this array.
	$childishlysimple_layout_details['major_errors'] = $major_errors;
	
	add_option ( 'childishlysimple01_layout_details', $childishlysimple_layout_details ); 
	update_option ( 'childishlysimple01_layout_details', $childishlysimple_layout_details ); 
?>


<?php	// Work out any calculations that need to be made 

$work_it_all_out = array( );
$work_it_all_out = get_option ( 'childishlysimple01_layout_details' );

$content_width_units = '';
$content_width_number = '';
if( $work_it_all_out['major_errors'] == '' ) { //	If there are no major errors then work stuff out. If there are errors then defaults will be used, worked out a little way below this.


//	Work out the content width for fixed layouts

	if( $work_it_all_out['liquid_or_fixed'] == 'fixed' ) {
		$content_width_units = 'px';
		
		if( $work_it_all_out['site_layout'] == 'one_col' ) $content_width_number = $work_it_all_out['site_width_number']; 


		if( $work_it_all_out['site_layout'] == 'two_col_cont_left' ) $content_width_number = $work_it_all_out['site_width_number'] - $work_it_all_out ['right_sidebar_width_number']; 


		if( $work_it_all_out['site_layout'] == 'two_col_cont_right' )  $content_width_number = $work_it_all_out['site_width_number'] - $work_it_all_out ['left_sidebar_width_number']; 


		if( $work_it_all_out['site_layout'] == 'three_col_cont_left' ||  $work_it_all_out['site_layout'] == 'three_col_cont_right' ||  $work_it_all_out['site_layout'] == 'three_col_cont_middle' ){	
$content_width_number = $work_it_all_out['site_width_number'] - ( $work_it_all_out ['right_sidebar_width_number'] + $work_it_all_out ['left_sidebar_width_number'] ); 
}		
		
} //	End if( $work_it_all_out['liquid_or_fixed'] == 'fixed' ) 

			
			
	
	


	
//	Work out content width for liquid  layouts
		
	elseif( $work_it_all_out['liquid_or_fixed'] == 'liquid' ) {	//	Work out the content width for liquid layout
		$content_width_units = '%';
						
			if( $work_it_all_out['site_layout'] == 'one_col' )  $content_width_number = 100; 
							
		
			if( $work_it_all_out['site_layout'] == 'two_col_cont_left' ) $content_width_number = 100 - $work_it_all_out ['right_sidebar_width_number']; 
			 
			
			if( $work_it_all_out['site_layout'] == 'two_col_cont_right' )  $content_width_number = 100 - $work_it_all_out ['left_sidebar_width_number']; 
						

			if( $work_it_all_out['site_layout'] == 'three_col_cont_left' ||  $work_it_all_out['site_layout'] == 'three_col_cont_right' ||  $work_it_all_out['site_layout'] == 'three_col_cont_middle' ){	
					$content_width_number = 100 - ( $work_it_all_out ['right_sidebar_width_number'] + $work_it_all_out ['left_sidebar_width_number'] ); 
}

} //	End elseif( $work_it_all_out['liquid_or_fixed'] == 'liquid' )





// Work out the  width of footer items 

if( $work_it_all_out['number_of_footer_items'] == 0 ) {$work_it_all_out['number_of_footer_items'] = 100;} 
//	If no footer items are selected, can't divide by zero so create arbitrary value


$outer_footer_item_width_number ='';
$outer_footer_item_units ='';
if( $liquid_or_fixed == 'fixed' ) {
$outer_footer_item_width_number = $work_it_all_out['site_width_number'] / $work_it_all_out['number_of_footer_items'];
$outer_footer_item_units = 'px';
} 


	if( $liquid_or_fixed == 'liquid' ) {
	$outer_footer_item_width_number = 100 / $work_it_all_out['number_of_footer_items'];
	$outer_footer_item_units = '%';
	} 


$childishlysimple_layout_details ['outer_footer_item_width_number'] =  floor(( $outer_footer_item_width_number) * 100 )  * .01;
$childishlysimple_layout_details['outer_footer_item_width'] = (floor(( $outer_footer_item_width_number) * 100 )  *.01) . $outer_footer_item_units;

} //	End if no major errors i.e. end   if( $work_it_all_out['major_errors'] == '' ) 






// Work out content width for default fixed  layouts 
  
if( $work_it_all_out['liquid_or_fixed_default'] == 'fixed' ) {	//	Work out the default content width for a fixed layout
		$content_width_default_units = 'px';
		
		if( $work_it_all_out['site_layout_default'] == 'one_col' )  $content_width_number_default = $work_it_all_out['site_width_number_default'];

		if( $work_it_all_out['site_layout_default'] == 'two_col_cont_left' ) $content_width_number_default = $work_it_all_out['site_width_number_default'] - $work_it_all_out ['right_sidebar_width_number_default'] ;
							
		if( $work_it_all_out['site_layout_default'] == 'two_col_cont_right' )  $content_width_number_default = $work_it_all_out['site_width_number_default'] - $work_it_all_out ['left_sidebar_width_number_default'] ;
					
		if( $work_it_all_out['site_layout_default'] == 'three_col_cont_left' ||  $work_it_all_out['site_layout_default'] == 'three_col_cont_right' ||  $work_it_all_out['site_layout_default'] == 'three_col_cont_middle' ){	
$content_width_number_default = $work_it_all_out['site_width_number_default'] - ( $work_it_all_out ['right_sidebar_width_number_default'] + $work_it_all_out ['left_sidebar_width_number_default'] );
	}


} elseif( $work_it_all_out['liquid_or_fixed_default'] == 'liquid' ) {	//	Work out the default content width for a liquid layout

		$content_width_default_units = '%';

		if( $work_it_all_out['site_layout_default'] == 'one_col' ) $content_width_number_default = 100;					
	
		
		if( $work_it_all_out['site_layout_default'] == 'two_col_cont_left' )  $content_width_number_default = 100 - $work_it_all_out ['right_sidebar_width_number_default'];							
							
			
		if( $work_it_all_out['site_layout_default'] == 'two_col_cont_right' )  $content_width_number_default = 100 - $work_it_all_out ['left_sidebar_width_number_default'] ;
									
	
		if( $work_it_all_out['site_layout_default'] == 'three_col_cont_left' ||  $work_it_all_out['site_layout_default'] == 'three_col_cont_right' ||  $work_it_all_out['site_layout_default'] == 'three_col_cont_middle' ){	
$content_width_number_default = 100 - ( $work_it_all_out ['right_sidebar_width_number_default'] + $work_it_all_out ['left_sidebar_width_number_default'] );
	}

} //	End elseif( $work_it_all_out['liquid_or_fixed_default'] == 'liquid' ) 






//	Add various calculations to the array $childishlysimple_layout_details
	$childishlysimple_layout_details['content_width_number'] = floor( $content_width_number ); 
	$childishlysimple_layout_details['content_width'] = floor( $content_width_number ) . $content_width_units; 
	$childishlysimple_layout_details['content_width_number_default'] = floor( $content_width_number_default ); 
	$childishlysimple_layout_details['content_width_default'] = floor( $content_width_number_default ) . $content_width_default_units; 



// Work out the default width of footer items
//	If there are no default footer items then we can't divide by zero so we create an arbitrary value
if( $work_it_all_out['number_of_footer_items_default'] == 0 ) $work_it_all_out['number_of_footer_items_default'] = 100;


	if( $liquid_or_fixed_default == 'fixed' ) {	
	$outer_footer_item_width_number_default = $work_it_all_out['site_width_number_default'] / $work_it_all_out['number_of_footer_items_default'];
	$outer_footer_item_units = 'px';
	} 


		if( $liquid_or_fixed_default == 'liquid' ) {
		$outer_footer_item_width_number_default = 100 / $work_it_all_out['number_of_footer_items_default'];
		$outer_footer_item_units = '%';
		} 


$childishlysimple_layout_details ['outer_footer_item_width_number_default'] = floor( $outer_footer_item_width_number_default );
$childishlysimple_layout_details['outer_footer_item_width_default'] = floor( $outer_footer_item_width_number_default ) . $outer_footer_item_units;






// Update layout details option  for the second time 
	update_option ( 'childishlysimple01_layout_details', $childishlysimple_layout_details ); 

//	This updates the  $childishlysimple_layout_details array (again) after stuff has been worked out. 
//	This array will now be used in the template files to retrieve options. See header.php
?>
	
	



<p class="submit"> <input type="submit" class="button-primary" value="<?php echo 'Save Changes' ?>" /> </p>    



<br />
<br />
<br />


			</td>
		</tr>
	</table><!-- Close form-table example -->
</form>





	<?php
		if( $errors == 'errors' ) {	//	Generic errors message
	echo '<h3 class="layout-error-top">Oops! Check for mistakes highlighted in red (below)</h3>' . "\n";
	echo '<h3 class = "layout-error-bottom">Oops! Check for mistakes highlighted in red (above)</h3>'. "\n";
	}
	
	
	if( $major_errors == 'major_errors' ) {	//	Generic errors message
	echo '<h3 class="layout-error-top">Oops! Check for mistakes highlighted in red (below)</h3>' . "\n";
	echo '<h5 class="layout-error-top">Your site will revert to the default layout until this is sorted out</h5><!--set at the bottom of internal-style-sheet.php--> '. "\n";
	
	echo '<h3 class = "layout-error-bottom">Oops! Check for mistakes highlighted in red (above)</h3>'. "\n";
	echo '<h5 class="layout-error-bottom">Your site will revert to the default layout until this is sorted out</h5><!--set at the bottom of internal-style-sheet.php -->'. "\n";
	}
	?>


</div><!-- End wrap childishlysimple-options-wrapper tabs-->

