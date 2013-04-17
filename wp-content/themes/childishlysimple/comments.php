<?php  
if ( post_password_required( ) ) {
		echo '<p class="password-protected-comments">Comments hidden. Please enter your password.</p>';
	return;
}






		comment_form( array(
		'comment_field' => "\n" . '<p class="allowed-tags">Allowed XHTML: '. allowed_tags( ) . '</p>' . "\n\n" .
		'<fieldset id="fieldset-comment-form">' . "\n\n" .
		'<textarea id="comment" name="comment" rows="10" cols="40"></textarea>' . "\n\n".
		'</fieldset>',

		'must_log_in' => '<p class="must-be-logged-in">' .  sprintf( __( 'You must be <a href="%s">logged in</a> to post a comment.' ), wp_login_url( get_permalink() ) ) . '</p>',

		'logged_in_as' => '<p class="logged-in-as">' . sprintf( __( 'Logged in as <a class= "logged-in-as" href="%1$s">%2$s</a><span class="log-out"><a class="log-out" href="%3$s" title="Log out of this account">Click here to log out</a></span>' ), admin_url( 'profile.php' ), $user_identity, wp_logout_url( get_permalink() ) ) . '</p>',

		'comment_notes_before' => '',

		'comment_notes_after' => '',
		
		'id_form' => 'form-comment-form',
		
		'id_submit' => 'comment-submit',

		'label_submit' => 'Submit Comment',

		'title_reply' => 'Leave a Reply',
		
		'title_reply_to' => 'Leave a Reply to %s',

		'cancel_reply_link' =>  'or click here to cancel replying to this person' ,
		
		'fields' => array(
		'author' => "\n" . '<p class="label-and-input"><label id="label-author"'.   ( $req ? ' class="required" for="input-author">Your name (required)' : ' for= "input-author">Your name (optional)') . '</label>
		<input type="text" name="author" id="input-author" value="'.   esc_attr( $commenter['comment_author'] ) . '"  size="22"  tabindex="1" /></p>' . "\n",
					
		'email' => "\n" . '<p class="label-and-input"><label id="label-email"'.   ( $req ? ' class="required" for="input-email">Email (required, not displayed)' : ' for= "input-email">Email (not displayed)') . '</label>
		<input type="text" name="email" id="input-email" value="'.   esc_attr( $commenter['comment_author_email'] ) . '"  size="22"  tabindex="2" /></p>' . "\n",

		'url' => "\n" . '<p class="label-and-input"><label id="label-url" for="input-url">Your website url (optional) </label>
		<input type="text" name="url" id="input-url" value="'.   esc_attr( $commenter['comment_author_url'] ) . '"  size="22"  tabindex="3" /></p>' . "\n",
				), 		
));




if ( have_comments( ) ) : 

$childishlysimple_count_comments = 0;

$comments_by_type = &separate_comments( $comments );


if ( ! empty( $comments_by_type['comment'] ) ) : 

$childishlysimple_comment_count = count( $comments_by_type[ 'comment' ] );
( $childishlysimple_comment_count !== 1 ) ? $single_or_plural_comments = "Comments" : $single_or_plural_comments = "Comment"; 

$childishlysimple_ping_count = count( $comments_by_type[ 'pings' ] );
( $childishlysimple_ping_count !== 1 ) ? $single_or_plural_pings= "Pings" : $single_or_plural_pings = "Ping"; 
?>



<h3 id="comments"><?php echo $childishlysimple_comment_count . " " . $single_or_plural_comments; ?> &nbsp;  &nbsp; <?php echo $childishlysimple_ping_count . " " . $single_or_plural_pings; ?></h3>



<div class="commentlist">



<?php wp_list_comments( 'type=comment&callback=childishlysimple_list_comments&style=div' ); ?>



<?php 
$childishlysimple_comments_links = '';  
$childishlysimple_comments_links = paginate_comments_links( array (
	  'show_all' => 'true', 	
	  
//	'format' => '?page=%#%',	

//	'base' => '%_%',	 	

	'type' => 'plain',		  
	
 //	'total'        => 2,		 
 
//	'current'      => 0,	

//	'end_size'     => 1,	

//	'mid_size'     => 1,		

	'prev_next'    => false,	
	
//	'prev_text'    => __('&laquo; Previous'),	

//	'next_text'    => __('Next &raquo;'),		

//	'add_args'     => false,		

//	'add_fragment' => 'test',		
					    
	 'echo' => false		
 ) ) ;
 ?>

 


</div><!--Close commentlist for comments-->



<?php endif;  ?>



<?php $childishlysimple_ping_count = 0;     ?>



<?php $comments_by_type = &separate_comments( $comments ); ?>



<?php if ( ! empty( $comments_by_type['pings'] ) ) :  ?>



<div class="pinglist">	



<?php wp_list_comments( 'type=pings&callback=childishlysimple_list_pings&style=div' );  //	Output the pings using childishlysimple_list_pings in functions.php?>



</div><!--Close pinglist-->



<?php endif;  ?> 



<div class="comment-navigation">
	<p class = "comment-navigation"><?php echo $childishlysimple_comments_links;?></p>
</div><!--Close comment-navigation-->



<?php else : ?>



<?php if ( comments_open( ) ) :    ?>



<?php else :    ?>



<?php endif;  ?>


	
<?php endif;  ?>

