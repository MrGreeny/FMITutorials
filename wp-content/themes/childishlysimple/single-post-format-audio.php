<?php 
	global $childishlysimple_is_the_theme_activated;
	global $childishlysimple_miscellaneous_stuff;
	global $childishlysimple_site_details; 
	global $childishlysimple_footer_items;
	global $childishlysimple_file_name;
?>



<?php  if ( have_posts( ) ) : while ( have_posts( ) ) : the_post( ); 	?>



<div <?php post_class( $childishlysimple_file_name );?>>



<p class="post-date">
	<a class="date-permalink" href="<?php the_permalink( ); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute( ); ?>">
		<span class="post-month"><?php the_time( 'M' );?></span>
		<span class="post-day"><?php the_time( 'j' );?></span>
		<span class="post-year"><?php the_time( 'Y' );?></span>
	</a>
</p>



<h1 class="post-title index"><?php the_title_attribute( );?></h1>



<p  class="post-info-top">
	<span class="by">By</span> <span class="post-author"><?php the_author( );?></span>
</p>



<div class="entry">



<?php the_content( ); ?>



</div> <!--Close entry-->



<?php if ( ( 'open' == $post-> comment_status ) && ( 'open' == $post->ping_status ) ) { ?>

<p class="comments-and-trackbacks">You can leave  comments by clicking <a href="#respond">here</a>, leave a trackback at <?php trackback_url( true ); ?> or subscibe to the RSS <?php post_comments_feed_link( 'Comments Feed', '','' ); ?> for this post.</p>

<?php } 


elseif ( ! ( 'open' == $post-> comment_status ) && ( 'open' == $post->ping_status ) ) { ?>

<p class="trackback-only">You can't leave comments on this post but you can leave  a trackback here:<br /> <?php trackback_url( true ); ?></p>

<?php } 


elseif ( ( 'open' == $post-> comment_status ) && ! ( 'open' == $post->ping_status ) ) { ?>
			
<p class="comments-only">You can leave  <a href="#respond">comments</a> on this post but not trackbacks. Follow recent comments using this   <?php post_comments_feed_link( 'Comments Feed', '','' ); ?>.</p>

<?php }


elseif ( ! ( 'open' == $post-> comment_status ) && ! ( 'open' == $post->ping_status ) ) {

		 $comment_count = get_comment_count( $post->ID ); if ( $comment_count['approved'] > 0 ) {?>
		<p class="no-comments-no-trackbacks">Sorry, comments and trackbacks have now been closed.</p>
		
<?php } 


else {?>
			
		<p class="no-comments-no-trackbacks">Sorry, no comments or trackbacks are allowed on this post.</p>
<?php }

}?>



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



<?php comments_template( '', true ); ?>



<?php else : ?>



<?php get_search_form( );   ?> 



<?php endif; ?>



<?php wp_reset_query( );?>