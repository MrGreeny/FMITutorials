<?php get_template_part( 'doctype' ); ?> 



<!--attachment.php-->



<?php $childishlysimple_file_name='attachment'; // Used in     post_class();   ?>



<?php get_header( ); ?>



<?php 										
	if (( $childishlysimple_site_details['site_layout']=='two_col_cont_right' ) || ( $childishlysimple_site_details['site_layout']=='three_col_cont_middle' )  || ( $childishlysimple_site_details['site_layout']=='three_col_cont_right' )) get_sidebar( 'left' );

	if ( $childishlysimple_site_details['site_layout']=='three_col_cont_right' ) get_sidebar( 'right' );
?>



<div id="content">



<div class="header-container">
&nbsp;
</div><!-- End header-container -->



<?php  if ( have_posts( ) ) : while ( have_posts( ) ) : the_post( ); //	The start of the loop	?>



<div <?php post_class( $childishlysimple_file_name );?>>



<p class="post-date">
	<a class="date-permalink" href="<?php the_permalink( ); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute( ); ?>">
		<span class="post-month"><?php the_time( 'M' );?></span>
		<span class="post-day"><?php the_time( 'j' );?></span>
		<span class="post-year"><?php the_time( 'Y' );?></span>
	</a>
</p>



<h1 class="post-title attachment"><a class="permalink" href="<?php the_permalink( ) ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute( ); ?>"><?php the_title_attribute( );?></a></h1>



<p  class="post-info-top">

<span class="by">By</span> <span class="post-author"><?php the_author( );?></span>

	<?php  
	$comment_count = get_comment_count( $post->ID ); 
	if ( ! post_password_required() ) {	// If this isn't a password-protected post. If it is password-protected then 	comments_popup_link	adds a message, further down
	echo '<span class="meta-info">';


	//	If there are no comments and comments are closed then display  0 comments (unlinked)
	if (( ! comments_open( )) && ( $comment_count['approved'] == 0 ))  echo '<span class="number-of-comments">0 comments</span>';


	//	If there are no comments and comments are open then display 0 comments (linked) 
	if (( comments_open( )) && ( $comment_count['approved'] == 0 ))  { ?>
	<span class="number-of-comments"><a href="<?php the_permalink( ); ?>#respond" class="comment-link" title="Permanent Link to <?php the_title_attribute( ); ?>">0 comments</a></span>
<?php }


	//	If there are comments then show the number of comments (linked)
	comments_popup_link( '&nbsp;', '1 Comment &nbsp;', '% Comments &nbsp;', 'comment-link', '&nbsp;' ); 


	//	If comments are closed then link to the closed comments
	if ( ! comments_open( )) { ?>
	
<span class="comments-closed"><a href="<?php the_permalink( ); ?>#comments" class="comments-closed" title="Permanent Link to <?php the_title_attribute( ); ?>">(comments  closed)</a></span>

<?php } 


	echo '&nbsp;</span><!--Close meta-info-->' . "\n\n"; 
}	//	End 	if ( ! post_password_required()) 
?>
</p>



<div class="entry">

	<div class="file">

		<a href="<?php echo wp_get_attachment_url( $post->ID ); ?>"><?php echo wp_get_attachment_image( $attachment_id, $size='thumbnail', $icon = true ); ?></a>


		<div class="caption">
			<?php if ( !empty( $post->post_excerpt ) ) the_excerpt( ); ?>
			&nbsp;
		</div><!--Close caption-->


		<div class="description">
			<?php the_content( );  ?>
			&nbsp;
		</div><!--Close description--> 


	</div><!--Close file-->

</div> <!--Close entry-->



<?php if ( has_category() ) { ?>
	<p class="post-info-bottom-categories">Categories: <span class="categories"> <?php the_category( ', ' ) ?>&nbsp;</span></p>
<?php } 	?>



<?php if (has_tag()) { ?>
	<p class="post-info-bottom-tags">Tags: <span class="tags"> <?php the_tags( '',', ', '' ) ?>&nbsp;</span></p>
<?php }   ?>



<?php /* get_template_part( 'comments-pings-trackbacks-allowed' ); */ ?>



<?php edit_post_link( 'Edit this post', '<p class="edit-post">', '</p>' ); ?>



</div><!--Close  post htentry  etc. -->  



<?php endwhile;  ?>



<?php /* comments_template( '', true ); */ ?>



<?php else : 	//	If no posts were found do something ?>



<?php get_search_form( ); 	//	Show a search form using searchform.php  ?> 



<?php endif; 	//	End of the the Loop	?>



<?php wp_reset_query( );?>



</div><!--Close content-->


<?php 
if (( $childishlysimple_site_details['site_layout']=='three_col_cont_left' ) ) get_sidebar( 'left' );

if (( $childishlysimple_site_details['site_layout']=='two_col_cont_left' ) || ( $childishlysimple_site_details['site_layout']== 'three_col_cont_left' ) || ( $childishlysimple_site_details['site_layout']== 'three_col_cont_middle' ) ) get_sidebar( 'right' );
?>



<?php get_footer( ); ?>



</body>
</html>