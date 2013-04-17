<?php 
global $childishlysimple_is_the_theme_activated;
global $childishlysimple_miscellaneous_stuff;
global $childishlysimple_site_details; 
global $childishlysimple_footer_items;
global $childishlysimple_file_name;
?>



<?php  if ( have_posts( ) ) : while ( have_posts( ) ) : the_post( ); //	The start of the loop	?>



<div <?php post_class( $childishlysimple_file_name );?>>



<p class="post-date">
	<a class="date-permalink" href="<?php the_permalink( ); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute( ); ?>">
		<span class="post-month"><?php the_time( 'M' );?></span>
		<span class="post-day"><?php the_time( 'j' );?></span>
		<span class="post-year"><?php the_time( 'Y' );?></span>
	</a>
</p>



<h1 class="post-title index">Just an aside ....</h1>



<p  class="post-info-top">
	<span class="by">By</span> <span class="post-author"><?php the_author( );?></span>


	<?php 
	$comment_count = get_comment_count( $post->ID ); 
	if ( ! post_password_required() ) {	
		echo '<span class="meta-info">';


		//	If there are no comments and comments are closed then display  0 comments (unlinked)
		if ( ( ! comments_open( ) ) && ( $comment_count['approved'] == 0 ) )  echo '<span class="number-of-comments">0 comments</span>';


		//	If there are no comments and comments are open then display 0 comments (linked) 
		if ( ( comments_open( ) ) && ( $comment_count['approved'] == 0 ) )  { ?>
			<span class="number-of-comments">
				<a href="<?php the_permalink( ); ?>#respond" class="comment-link" title="Permanent Link to <?php the_title_attribute( ); ?>">0 comments</a>
			</span>
<?php }


		//	If there are comments then show the number of comments (linked) 
		comments_popup_link( '&nbsp;', '1 Comment &nbsp;', '% Comments &nbsp;', 'comment-link', '&nbsp;' ); 


		//	If comments are closed then link to the closed comments
		if ( ! comments_open( ) ) { ?>
		
			<span class="comments-closed">
				<a href="<?php the_permalink( ); ?>#comments" class="comments-closed" title="Permanent Link to <?php the_title_attribute( ); ?>">(comments  closed)</a>
			</span>
			
<?php } 


		echo '&nbsp;</span><!--Close meta-info-->' . "\n\n"; 
}		//	End 	if ( ! post_password_required() ) 
?>
</p>



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



<?php edit_post_link( 'Edit this post', '<p class="edit-post">', '</p>' ); ?>



</div><!--Close  post htentry  etc. -->  



<?php endwhile; ?>


<div class="single-post-navigation">
	<p class="single-left"> <?php previous_post_link( '&laquo; %link' ); ?></p><!--Close single-left-->
	<p class="single-right"><?php next_post_link( ' %link &raquo;' ); ?></p><!--Close single-right-->
</div><!--Close single-post-navigation-->






<?php else : ?>



<?php get_search_form( );   ?> 



<?php endif; ?>



<?php wp_reset_query( );?>