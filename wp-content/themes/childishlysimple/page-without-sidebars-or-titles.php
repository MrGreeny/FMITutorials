<?php /*
Template Name: Page Without Sidebars or Titles
*/ ?>



<?php get_template_part( 'doctype' ); ?> 



<!--page-without-sidebars.php-->



<?php $childishlysimple_file_name='page-without-comments'; //	Used in     post_class();  ?>



<?php get_header( ); ?>



<div id="content-page-without-sidebars">



<div class="header-container">
 &nbsp;
</div><!-- End header-container -->



<?php  if ( have_posts( ) ) : while ( have_posts( ) ) : the_post( ); /****	The start of the loop ****/	?>



<div <?php post_class( $childishlysimple_file_name );?>>



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


 		wp_link_pages( $childishlysimple_args ); 	/****	http://codex.wordpress.org/Function_Reference/wp_link_pages ****/ 
?>
 

 
 <?php /* get_template_part( 'comments-pings-trackbacks-allowed' ); */ ?>
 
 
 
<?php edit_post_link( 'Edit this page', '<p class="edit-post">', '</p>' ); ?>



</div><!--Close  post htentry  etc. -->  



<?php endwhile; ?>



<?php comments_template( '', true ); ?>



<?php else :  ?>



<?php get_search_form( );  ?> 



<?php endif;  ?>



<?php wp_reset_query( );?>



</div><!--End content-->



<?php get_footer( ); ?>



</body>
</html>