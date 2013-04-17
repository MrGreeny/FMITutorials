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
	<a class="permalink" href="<?php the_permalink( ); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute( ); ?>">Just an aside ....</a>
</h2>



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



<?php  the_post_thumbnail( 'thumbnail' );  ?>



<?php  the_content( '<span class="more">(continue reading...)   </span>' ); ?>



</div> <!--Close entry-->



<p class="read-more-and-comment-link">
	<span class="number-of-comments"><?php comments_popup_link( 'Leave a comment', '1 comment', '% comments', 'comment-link', 'Comments closed' ); ?></span>
</p>



<?php edit_post_link( 'Edit this post', '<p class="edit-post">', '</p>' ); ?>



</div><!--Close  post htentry  etc. -->  