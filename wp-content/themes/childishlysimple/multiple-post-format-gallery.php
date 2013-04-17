<?php 
global $childishlysimple_is_the_theme_activated;
global $childishlysimple_miscellaneous_stuff;
global $childishlysimple_site_details; 
global $childishlysimple_footer_items;
global $childishlysimple_file_name;
?>



<p class="post-date">
	<a class="date-permalink" href="<?php the_permalink( ); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute( ); ?>">
		<span class="post-month"><?php the_time( 'M' );?></span>
		<span class="post-day"><?php the_time( 'j' );?></span>
		<span class="post-year"><?php the_time( 'Y' );?></span>
	</a>
</p>



<h2 class="post-title <?php echo $childishlysimple_file_name; ?> ">
	<a class="permalink" href="<?php the_permalink( ); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute( ); ?>"><?php the_title_attribute( );?></a>
</h2>



<p  class="post-info-top">&nbsp;</p>



<div class="entry">



<?php  the_content( '<span class="more">(continue reading...)   </span>' ); ?>



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



</div> <!--Close entry-->



<p class="read-more-and-comment-link">
	<span class="number-of-comments"><?php comments_popup_link( 'Leave a comment', '1 comment', '% comments', 'comment-link', 'Comments closed' ); ?></span>
</p>



<?php edit_post_link( 'Edit this post', '<p class="edit-post">', '</p>' ); 	 ?>



</div><!--Close  post htentry  etc. -->  