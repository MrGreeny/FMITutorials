<?php get_template_part( 'doctype' ); ?> 



<!--page.php-->



<?php $childishlysimple_file_name='page'; //	Used in     post_class();  ?>



<?php get_header( ); ?>



<?php 										
	if (( $childishlysimple_site_details['site_layout']=='two_col_cont_right' ) || ( $childishlysimple_site_details['site_layout']=='three_col_cont_middle' )  || ( $childishlysimple_site_details['site_layout']=='three_col_cont_right' )) get_sidebar( 'left' );

	if ( $childishlysimple_site_details['site_layout']=='three_col_cont_right' ) get_sidebar( 'right' );
?>



<div id="content">



<div class="header-container">
	 &nbsp;
</div><!-- End header-container -->



<?php  if ( have_posts( ) ) : while ( have_posts( ) ) : the_post( ); 	?>



<div <?php post_class( $childishlysimple_file_name );?>>


<h1 class="page"><?php the_title_attribute( );?></h1>


<div class="entry">



<?php the_content( ); ?>



</div> <!--Close entry-->







<?php 
     $childishlysimple_args = array(
   	  'before'           => '<div class="post-links"><p class="post-links">',	
 	   'after'            => '</p></div>',								
  	  'link_before'      => '<span class="post-links">',					
  	  'link_after'       => '</span>',								
 	  'next_or_number'   => 'number',	
  	  'nextpagelink'     => 'Next page',						
  	  'previouspagelink' => 'Previous page',						
  	  'pagelink'         => '%',					
  	  'more_file'        => '' ,
  	  'echo'             => 1 ); 					

 		wp_link_pages( $childishlysimple_args ); 	 
?>


<?php /* get_template_part( 'comments-pings-trackbacks-allowed' ); */ ?>



<?php edit_post_link( 'Edit this page', '<p class="edit-post">', '</p>' ); ?>



</div><!--Close  post htentry  etc. -->  



<?php endwhile; ?>



<?php comments_template( '', true ); ?>



<?php else : ?>



<?php get_search_form( );   ?> 



<?php endif; ?>



<?php wp_reset_query( );?>



</div><!--End content-->



<?php 
if (( $childishlysimple_site_details['site_layout']=='three_col_cont_left' ) ) get_sidebar( 'left' );

if (( $childishlysimple_site_details['site_layout']=='two_col_cont_left' ) || ( $childishlysimple_site_details['site_layout']== 'three_col_cont_left' ) || ( $childishlysimple_site_details['site_layout']== 'three_col_cont_middle' ) ) get_sidebar( 'right' );
?>



<?php get_footer( ); ?>



</body>
</html>