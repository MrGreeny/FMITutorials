<?php
if ( ( 'open' == $post-> comment_status ) && ( 'open' == $post->ping_status ) ) { ?>

<p class="comments-and-trackbacks">You can leave  comments by clicking <a href="#respond">here</a>, leave a trackback at <?php trackback_url( true ); ?> or subscibe to the RSS <?php post_comments_feed_link( 'Comments Feed', '','' ); ?> for this post.</p>

<?php }



elseif ( ! ( 'open' == $post-> comment_status ) && ( 'open' == $post->ping_status ) ) { ?>
<p class="trackback-only">You can't leave comments on this post but you can leave  a trackback here:<br /> <?php trackback_url( true ); ?></p>
<?php }



elseif ( ( 'open' == $post-> comment_status ) && !( 'open' == $post->ping_status ) ) { ?>
		
<p class="comments-only">You can leave  <a href="#respond">comments</a> on this post but not trackbacks. Follow recent comments using this   <?php post_comments_feed_link( 'Comments Feed', '','' ); ?>.</p>

<?php }



elseif ( ! ( 'open' == $post-> comment_status ) && ! ( 'open' == $post->ping_status ) ) {
		 $comment_count = get_comment_count( $post->ID ); 
		if ( $comment_count['approved'] > 0 ) {?>
		 
		<p class="no-comments-no-trackbacks">Sorry, comments and trackbacks have now been closed.</p>

<?php }



else {?>
			
<p class="no-comments-no-trackbacks">Sorry, no comments or trackbacks are allowed on this post.</p>

<?php }
}
?>