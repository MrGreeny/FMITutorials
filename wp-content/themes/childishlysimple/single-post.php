<?php get_template_part( 'doctype' ); ?> 



<!--single-post.php-->



<?php $childishlysimple_file_name='single-post'; //	Used in     post_class();   ?>



<?php wp_enqueue_script( 'comment-reply' );?>



<?php get_header( ); ?>



<?php 										
	if (( $childishlysimple_site_details['site_layout']=='two_col_cont_right' ) || ( $childishlysimple_site_details['site_layout']=='three_col_cont_middle' )  || ( $childishlysimple_site_details['site_layout']=='three_col_cont_right' )) get_sidebar( 'left' );

	if ( $childishlysimple_site_details['site_layout']=='three_col_cont_right' ) get_sidebar( 'right' );
?>



<div id="content">



<div class="header-container">
	&nbsp;
</div><!-- End header-container -->



<?php   get_template_part( 'single-post-format', get_post_format() );  ?>



</div><!--Close content-->



<?php 
if (( $childishlysimple_site_details['site_layout']=='three_col_cont_left' ) ) get_sidebar( 'left' );

if (( $childishlysimple_site_details['site_layout']=='two_col_cont_left' ) || ( $childishlysimple_site_details['site_layout']== 'three_col_cont_left' ) || ( $childishlysimple_site_details['site_layout']== 'three_col_cont_middle' ) ) get_sidebar( 'right' );
?>



<?php get_footer( ); ?>


</body>
</html>