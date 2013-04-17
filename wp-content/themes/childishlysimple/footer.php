<?php 
/****
This is footer.php which creates the bottom of your website
****/

global $has_this_got_widgets;	//	For searchform.php
$has_this_got_widgets = 'yes'; 

global $childishlysimple_is_the_theme_activated;
global $childishlysimple_miscellaneous_stuff;
global $childishlysimple_site_details; 
global $childishlysimple_footer_items;
global $childishlysimple_wordpress_link;
global $childishlysimple_alchemweb_link;
?>



</div><!-- Close inner-wrapper -->


<div class="footer">





<?php wp_nav_menu( array( 	// Registered in functions.php with register_nav_menus
		'theme_location' => 'menu-2',    		
		'menu' => 'MyNewMenu2',  	 		
		'container' => 'div', 			
		'container_class' => 'bottom-navigation',				
		'container_id' => 'container-id-01',				
		'menu_class' => 'bottom-navigation', 				
		'menu_id' => 'menu-id-01', 
		'fallback_cb' => '',	
		'before' => '',						
		'after' => '',				
		'link_before' => '',		
		'link_after' => '',		
		'depth' => '6',			
		'walker' => '',		
		'echo' => 'true',		
)); ?>




<div class="footer-spacer"> &nbsp;</div>



<div class="inner-footer">


<?php $childishlysimple_footer_items = array( ); ?>


<?php
if( !isset( $childishlysimple_site_details[ 'selected_footer_items' ] ) ) {

		$childishlysimple_footer_items = array( 1,2 );	//  Before theme is activated, create a placeholder array to prevent error messages on the website.

	echo '<div style="width:326px;" class="outer-footer-item footer-calendar-item">';
	echo '<div class="inner-footer-item">';
	echo '<h2 class="footer-item  calendar"> Calendar</h2>';

	get_calendar( true );

	echo '</div><!-- Close inner-footer-item--></div><!--Close outer-footer-item-->';




	echo '<div  style="width:326px;" class="outer-footer-item footer-bookmarks-item">';
	echo '<div class="inner-footer-item">';
	echo '<h2 class="footer-item  footer-bookmarks">Bookmarks</h2>';
	echo '<ul class="footer-bookmarks">';

	wp_list_bookmarks( 'categorize=0&title_li=' );

	echo '</ul>';
	echo '</div><!-- Close inner-footer-item-->';
	echo '</div><!--Close outer-footer-item-->';





	echo '<div  style="width:326px;" class="outer-footer-item footer-register-item">';
	echo '<div class="inner-footer-item">';
	echo '<h2 class="footer-item  footer-register">Register or Log in</h2>';
	echo '<ul class="footer-register">';

	wp_register( ); 

	echo '<li>';

	wp_loginout( );

	echo '</li>';

	wp_meta( ); 

	echo '</ul>';
	echo '</div><!-- Close inner-footer-item-->';
	echo '</div><!--Close outer-footer-item-->';



	} elseif ( $childishlysimple_site_details['errors'] == 'errors' ) $childishlysimple_footer_items = array_flip( $childishlysimple_site_details['footer_items_default'] );
 		 else $childishlysimple_footer_items = $childishlysimple_site_details[ 'selected_footer_items' ];
?>
 
 



<?php
if( in_array( 'footer_home', $childishlysimple_footer_items ) ) { ?>

<div class="outer-footer-item footer-home-item">
	<div class="inner-footer-item">

	<h2 class="footer-item  footer-home">Home</h2>
		<ul class="footer-item footer-home">
			<li class="footer-home">
			<a class="footer-home" href="<?php echo home_url(); ?>">Home</a>
			</li>
		</ul>	
	</div><!-- End inner footer item-->
</div><!--End right-sidebar-item-->

<?php } ?>








<?php
if( in_array( 'footer_widget_01', $childishlysimple_footer_items ) ) { ?>

<div class="outer-footer-item footer-widget-01-item"> 
	<div class="inner-footer-item">
	
	<?php 
	if ( is_active_sidebar( 'footer_widget_01' ) ) : 
		 dynamic_sidebar( 'footer_widget_01' ); 
		else : ?>
		
		<h2 class="widgettitle footer-item  footer-widget-01">Footer Widget 01</h2>
			<ul class="footer-widget-01">
				<li class="explanation">This is the Footer Widget 01 container in footer.php. This text disappears and the title changes when you add a widget and give it a title in Admin / Appearance / Widgets.<br /><br />
				</li>
			</ul>
		
	<?php endif; ?>
	
	</div><!-- End inner-footer-item-->
</div><!--End outer-footer-item-->

<?php } ?>







<?php
if( in_array( 'footer_most_recent', $childishlysimple_footer_items ) ) { ?>

<div class="outer-footer-item footer-most-recent-posts-item"> 
	<div class="inner-footer-item"> 
		<h2 class="footer-item  footer-most-recent-posts">Most recent posts</h2>
			<ul class="footer-most-recent-posts">
			
			<?php wp_get_archives( 'type=postbypost&limit=5' ); ?>
			
			</ul>
	</div><!-- Close inner-footer-item-->
</div><!--Close outer-footer-item-->

<?php } ?>






<?php
if( in_array( 'footer_widget_02', $childishlysimple_footer_items ) ) { ?>

<div class="outer-footer-item footer-widget-02-item"> 
	<div class="inner-footer-item">
	
	<?php if ( is_active_sidebar( 'footer_widget_02' ) ) : dynamic_sidebar( 'footer_widget_02' ); else : ?>
		
		<h2 class="widgettitle footer-item  footer-widget-02">Footer Widget 02</h2>
			<ul class="footer-widget-02">
				<li class="explanation">This is the Footer Widget 02 container in footer.php. This text disappears and the title changes when you add a widget and give it a title in Admin / Appearance / Widgets.<br /><br />
				</li>
			</ul>
			
	<?php endif; ?>
	
	</div><!-- End inner-footer-item-->
</div><!--End outer-footer-item-->

<?php } ?>







<?php
if( in_array( 'footer_most_popular', $childishlysimple_footer_items ) ) { ?>

<div class="outer-footer-item footer-popular-item"> 
	<div class="inner-footer-item"> 
		<h2 class="footer-item  footer-popular">Most popular posts</h2>
			<ul class="footer-popular">
			
	<?php   $loop_most_popular = new WP_Query( 'orderby=comment_count&posts_per_page=10&ignore_sticky_posts=1' ); ?>
	<?php /****	How many posts to show, most commented first.  ignore_sticky_posts=1        prevents sticky posts from being at the top  ****/  ?>
	
	<?php if ( $loop_most_popular->have_posts( )) :  while ( $loop_most_popular->have_posts( )) : $loop_most_popular->the_post( ); ?>
	
				<li class="footer-popular">
				<?php     
					$shortened_title = '';
					$limit = "25";  
					$ending="...";
					$shortened_title = the_title_attribute (array('echo' => 0) );
					if(strlen( $shortened_title ) >= ( $limit )) {
					$shortened_title = substr( $shortened_title, 0, $limit ) . $ending; 
					}
				?>

					<a class="footer-popular" href="<?php the_permalink( ) ?>" rel="bookmark" title="Permanent Link to <?php echo $shortened_title; ?>"><?php echo $shortened_title; ?>(<?php comments_number('0','1','%'); ?>)</a>
				</li>




<?php endwhile;  ?>

	</ul>
	
<?php 
	else :
	endif;
 	wp_reset_query( );
 ?>
 
	</div><!-- Close inner-footer-item-->
</div><!--Close outer-footer-item-->

<?php } ?>






<?php
if( in_array( 'footer_widget_03', $childishlysimple_footer_items )) { ?>

<div class="outer-footer-item footer-widget-03-item"> 
	<div class="inner-footer-item"> 

		<?php if ( is_active_sidebar( 'footer_widget_03' ) ) : 
			dynamic_sidebar( 'footer_widget_03' ); 
			else : ?>

			<h2 class="widgettitle footer-item  footer-widget-03">Footer Widget 03</h2>
				<ul class="footer-widget-03">
					<li class="explanation">This is the Footer Widget 03 container in footer.php. This text disappears and the title changes when you add a widget and give it a title in Admin / Appearance / Widgets.<br /><br />
					</li>
				</ul>

			<?php endif; ?>

	</div><!-- End inner-footer-item-->
</div><!--End outer-footer-item-->

<?php } ?>







<?php
if( in_array( 'footer_latest_comments', $childishlysimple_footer_items ) ) { ?>

<div class="outer-footer-item footer-latest-comments-item"> 
	<div class="inner-footer-item"> 
		<h2 class="footer-item  footer-latest-comments"> Latest Comments</h2>

<?php 
$recent_comments = get_comments( 'status=approve&number=5' );
	foreach( $recent_comments as $comment ) :

$random = rand( 1,3 ); 	/****	Choose a random number between 1 and 3 ****/


$stylesheet_url = get_template_directory_uri(); 


$default_avatar_url = $stylesheet_url.'/images/gravatar'.$random.'.gif'; 


$avatar_alt =''; 
?>





<span class="footer-latest-comments-author">By  <?php echo ( get_comment_author_link( ) ) ?> on </span>
<span class="footer-latest-comments-date"><?php  echo mysql2date( 'j-m-y', $comment->comment_date ); ?></span>




<p class="footer-latest-comments-excerpt">



<?php  
$latest_posts_post_ID = $comment->comment_post_ID ; $post_info = get_post( $latest_posts_post_ID ); $title = $post_info->post_title; 


$excerpt = wp_html_excerpt( $comment->comment_content, 70 ); 
$excerpt = $excerpt .'...'; 
echo $excerpt;  
?>




<a class="footer-latest-comments-more" href="<?php echo get_permalink( $comment->comment_post_ID ); ?>#comment-<?php echo $comment->comment_ID?>" title="Comment on <?php echo $title; ?>">Read more</a>   <?php /****	Read more link ****/  ?>
</p>




<?php endforeach; ?>
  
	</div><!-- Close inner-footer-item-->
</div><!--Close outer-footer-item-->

<?php } ?>









<?php
if( in_array( 'footer_widget_04', $childishlysimple_footer_items ) ) { ?>

<div class="outer-footer-item footer-widget-04-item"> 
	<div class="inner-footer-item"> 

<?php if ( is_active_sidebar( 'footer_widget_04' ) ) : 
dynamic_sidebar( 'footer_widget_04' ); 
else : ?>

		<h2 class="widgettitle footer-item  footer-widget-04">Footer Widget 04</h2>
			<ul class="footer-widget-04">
				<li class="explanation">This is the Footer Widget 04 container in footer.php. This text disappears and the title changes when you add a widget and give it a title in Admin / Appearance / Widgets.<br /><br />
				</li>
			</ul>

<?php endif; ?>

	</div><!-- End inner-footer-item-->
</div><!--End outer-footer-item-->

<?php }  ?>









<?php 
if( in_array( 'footer_calendar', $childishlysimple_footer_items ) ) { ?>

<div class="outer-footer-item footer-calendar-item"> 
	<div class="inner-footer-item"> 

		<h2 class="footer-item  calendar"> Calendar</h2>
		<?php get_calendar( true ); ?>

	</div><!-- Close inner-footer-item-->
</div><!--Close outer-footer-item-->

<?php } ?>








<?php
if( in_array( 'footer_widget_05', $childishlysimple_footer_items ) ) { ?>

<div class="outer-footer-item footer-widget-05-item"> 
	<div class="inner-footer-item"> 

		<?php if ( is_active_sidebar( 'footer_widget_05' ) ) : 
		dynamic_sidebar( 'footer_widget_05' ); 
		else : ?>

		<h2 class="widgettitle footer-item  footer-widget-05">Footer Widget 05</h2>
			<ul class="footer-widget-05">
				<li class="explanation">This is the Footer Widget 05 container in footer.php. This text disappears and the title changes when you add a widget and give it a title in Admin / Appearance / Widgets.<br /><br />
				</li>
			</ul>

<?php endif; ?>

	</div><!-- End inner-footer-item-->
</div><!--End outer-footer-item-->

<?php }  ?>









<?php
if( in_array( 'footer_all_categories', $childishlysimple_footer_items ) ) { ?>

<div class="outer-footer-item footer-all-categories-item"> 
	<div class="inner-footer-item"> 
		<h2 class="footer-item  footer-all-categories">All categories</h2>
			<ul class="footer-all-categories">
			<?php wp_list_categories( 'title_li=' ); ?>
			</ul>
	</div><!-- Close inner-footer-item-->
</div><!--Close outer-footer-item-->

<?php } ?>









<?php
if( in_array( 'footer_widget_06', $childishlysimple_footer_items ) ) { ?>

<div class="outer-footer-item footer-widget-06-item"> 
	<div class="inner-footer-item"> 
		<?php if ( is_active_sidebar( 'footer_widget_06' ) ) : 
		dynamic_sidebar( 'footer_widget_06' ); 
		else : ?>

		<h2 class="widgettitle footer-item  footer-widget-06">Footer Widget 06</h2>
			<ul class="footer-widget-06">
				<li class="explanation">This is the Footer Widget 06 container in footer.php. This text disappears and the title changes when you add a widget and give it a title in Admin / Appearance / Widgets.<br /><br />
				</li>
			</ul>

<?php endif; ?>

	</div><!-- End inner-footer-item-->
</div><!--End outer-footer-item-->

<?php }  ?>









<?php
if( in_array( 'footer_child_categories', $childishlysimple_footer_items ) ) { ?>

<div class="outer-footer-item footer-child-categories-item"> 
	<div class="inner-footer-item"> 
		<h2 class="footer-item  footer-child-categories">Child Categories</h2>
			<ul class="footer-child-categories">			
				<?php wp_list_categories( 'child_of=4&title_li=' ); ?>
			</ul>
</div><!-- Close inner-footer-item-->
</div><!--Close outer-footer-item-->

<?php } ?>












<?php
if( in_array( 'footer_widget_07', $childishlysimple_footer_items ) ) { ?>

<div class="outer-footer-item footer-widget-07-item"> 
	<div class="inner-footer-item"> 

	<?php if ( is_active_sidebar( 'footer_widget_07' ) ) : 
	dynamic_sidebar( 'footer_widget_07' ); 
	else : ?>

		<h2 class="widgettitle footer-item  footer-widget-07">Footer Widget 07</h2>
			<ul class="footer-widget-07">
				<li class="explanation">This is the Footer Widget 07 container in footer.php. This text disappears and the title changes when you add a widget and give it a title in Admin / Appearance / Widgets.<br /><br />
				</li>
			</ul>

<?php endif; ?>

	</div><!-- End inner-footer-item-->
</div><!--End outer-footer-item-->

<?php }  ?>









<?php
if( in_array( 'footer_pages', $childishlysimple_footer_items ) ){ ?>

<div class="outer-footer-item footer-pages-item"> 
	<div class="inner-footer-item"> 
		<h2 class="footer-item  pages"> All  pages</h2>
			<ul class="footer-pages">
			<?php wp_list_pages( 'title_li=' );?>
			</ul>
	</div><!-- Close inner-footer-item-->
</div><!--Close outer-footer-item-->

<?php } ?>









<?php
if( in_array( 'footer_widget_08', $childishlysimple_footer_items ) ) { ?>

<div class="outer-footer-item footer-widget-08-item"> 
	<div class="inner-footer-item"> 

	<?php if ( is_active_sidebar( 'footer_widget_08' ) ) : 
	dynamic_sidebar( 'footer_widget_08' ); 
	else : ?>

	<h2 class="widgettitle footer-item  footer-widget-08">Footer Widget 08</h2>
		<ul class="footer-widget-08">
		<li class="explanation">This is the Footer Widget 08 container in footer.php. This text disappears and the title changes when you add a widget and give it a title in Admin / Appearance / Widgets.<br /><br />
		</li>
		</ul>

<?php endif; ?>

	</div><!-- End inner-footer-item-->
</div><!--End outer-footer-item-->

<?php } ?>










<?php
if( in_array( 'footer_archives', $childishlysimple_footer_items ) )
{ ?>

<div class="outer-footer-item footer-archives-item"> 
	<div class="inner-footer-item"> 
		<h2 class="footer-item  archives">Archives</h2>
			<ul class="footer-archives">
			<?php wp_get_archives( 'type=monthly' ); ?>
			</ul>
	</div><!-- Close inner-footer-item-->
</div><!--Close outer-footer-item-->

<?php } ?>








<?php
if( in_array( 'footer_widget_09', $childishlysimple_footer_items ) ) { ?>

<div class="outer-footer-item footer-widget-09-item"> 
	<div class="inner-footer-item"> 

	<?php if ( is_active_sidebar( 'footer_widget_09' ) ) : 
	dynamic_sidebar( 'footer_widget_09' ); 
	else : ?>

		<h2 class="widgettitle footer-item  footer-widget-09">Footer Widget 09</h2>
			<ul class="footer-widget-09">
			<li class="explanation">This is the Footer Widget 09 container in footer.php. This text disappears and the title changes when you add a widget and give it a title in Admin / Appearance / Widgets.<br /><br />
			</li>
			</ul>

<?php endif; ?>

	</div><!-- End inner-footer-item-->
</div><!--End outer-footer-item-->

<?php }  ?>








<?php
if( in_array( 'footer_bookmarks', $childishlysimple_footer_items ) )
{ ?>

<div class="outer-footer-item footer-bookmarks-item"> 
	<div class="inner-footer-item"> 
		<h2 class="footer-item  footer-bookmarks">Bookmarks</h2>
			<ul class="footer-bookmarks">
			<?php wp_list_bookmarks( 'categorize=0&title_li=' ); ?>
			</ul>
	</div><!-- Close inner-footer-item-->
</div><!--Close outer-footer-item-->

<?php } ?>









<?php
if( in_array( 'footer_widget_10', $childishlysimple_footer_items ) ) { ?>

<div class="outer-footer-item footer-widget-10-item"> 
	<div class="inner-footer-item"> 

	<?php if ( is_active_sidebar( 'footer_widget_10' ) ) : 
	dynamic_sidebar( 'footer_widget_10' ); 
	else : ?>

		<h2 class="widgettitle footer-item  footer-widget-10">Footer Widget 10</h2>
			<ul class="footer-widget-10">
				<li class="explanation">This is the Footer Widget 10 container in footer.php. This text disappears and the title changes when you add a widget and give it a title in Admin / Appearance / Widgets.<br /><br />
				</li>
			</ul>

<?php endif; ?>

	</div><!-- End inner-footer-item-->
</div><!--End outer-footer-item-->

<?php } ?>







<?php
if( in_array( 'footer_authors', $childishlysimple_footer_items ) )
{ ?>

<div class="outer-footer-item footer-authors-item"> 
	<div class="inner-footer-item"> 
		<h2 class="footer-item  authors">Authors</h2>
			<ul class="footer-authors">
			<?php wp_list_authors( ); ?>
				<li>You need to add authors other than Admin</li>
			</ul>
	</div><!-- Close inner-footer-item-->
</div><!--Close outer-footer-item-->

<?php } ?>








<?php
if( in_array( 'footer_widget_11', $childishlysimple_footer_items ) ) { ?>

<div class="outer-footer-item footer-widget-11-item"> 
	<div class="inner-footer-item"> 

	<?php if ( is_active_sidebar( 'footer_widget_11' ) ) : 
	dynamic_sidebar( 'footer_widget_11' ); 
	else : ?>

		<h2 class="widgettitle footer-item  footer-widget-11">Footer Widget 11</h2>
			<ul class="footer-widget-11">
				<li class="explanation">This is the Footer Widget 11 container in footer.php. This text disappears and the title changes when you add a widget and give it a title in Admin / Appearance / Widgets.<br /><br />
				</li>
			</ul>

<?php endif; ?>

	</div><!-- End inner-footer-item-->
</div><!--End outer-footer-item-->

<?php } ?>








<?php
if( in_array( 'footer_tag_cloud', $childishlysimple_footer_items ) )
{ ?>

<div class="outer-footer-item footer-tag-cloud-item"> 
	<div class="inner-footer-item"> 
		<h2 class="footer-item  footer-tag-cloud"> Tag cloud</h2>
		
			<?php if ( function_exists( 'wp_tag_cloud' ) ) : ?>
				<ul>
					<li>
						<?php wp_tag_cloud( 'smallest=8&largest=22&unit=pt&number=30' ); ?>
					</li>
				</ul>
			<?php endif; ?>

<?php
	$tag = array( );
	$tag = get_tags( );
	if ( ! $tag ) echo '<ul><li>You need to add tags</li></ul>';
?>
	</div><!-- Close inner-footer-item-->
</div><!--Close outer-footer-item-->

<?php } ?>







<?php
if( in_array( 'footer_widget_12', $childishlysimple_footer_items ) ) { ?>

<div class="outer-footer-item footer-widget-12-item"> 
	<div class="inner-footer-item"> 

		<?php if ( is_active_sidebar( 'footer_widget_12' ) ) : 
		dynamic_sidebar( 'footer_widget_12' ); 
		else : ?>

			<h2 class="widgettitle footer-item  footer-widget-12">Footer Widget 12</h2>
				<ul class="footer-widget-12">
					<li class="explanation">This is the Footer Widget 12 container in footer.php. This text disappears and the title changes when you add a widget and give it a title in Admin / Appearance / Widgets.<br /><br />
					</li>
				</ul>

<?php endif; ?>

	</div><!-- End inner-footer-item-->
</div><!--End outer-footer-item-->

<?php } ?>








<?php
if( in_array( 'footer_register_or_login', $childishlysimple_footer_items ) )
{ ?>

<div class="outer-footer-item footer-register-item"> 
	<div class="inner-footer-item"> 
		<h2 class="footer-item  footer-register">Register or Log in</h2>
			<ul class="footer-register">
				<?php wp_register( );  ?>
				<li><?php wp_loginout( ); ?></li> 

			<?php wp_meta( ); ?>
			</ul>
	</div><!-- Close inner-footer-item-->
</div><!--Close outer-footer-item-->

<?php } ?>








<?php
if( in_array( 'footer_widget_13', $childishlysimple_footer_items ) ) { ?>

<div class="outer-footer-item footer-widget-13-item"> 
	<div class="inner-footer-item"> 

		<?php if ( is_active_sidebar( 'footer_widget_13' ) ) : 
		dynamic_sidebar( 'footer_widget_13' ); 
		else : ?>

		<h2 class="widgettitle footer-item  footer-widget-13">Footer Widget 13</h2>
			<ul class="footer-widget-13">
				<li class="explanation">This is the Footer Widget 13 container in footer.php. This text disappears and the title changes when you add a widget and give it a title in Admin / Appearance / Widgets.<br /><br />
				</li>
			</ul>

<?php endif; ?>

	</div><!-- End inner-footer-item-->
</div><!--End outer-footer-item-->

<?php } ?>



<div class="footer-bottom-spacer">&nbsp;</div>



<?php wp_footer( ); ?>



<?php 

if( in_array( 'copyright', $childishlysimple_miscellaneous_stuff ) ) {
	if ( is_singular() ){ ?>

		<p class="copyright">Copyright &copy; <?php echo home_url(); ?>  <?php the_time( 'Y' );?> - <?php echo date("Y") ?> all rights reserved.</p>

<?php } 


else { ?>

		<p class="copyright">Copyright &copy; <?php echo home_url(); ?>  all rights reserved.</p>

<?php } 

} ?>




   




<div id="rss-feeds">&nbsp;

<?php 

if( in_array( 'rss', $childishlysimple_miscellaneous_stuff ) ) { ?>   

	<a class="rss rss-all-posts" href="<?php bloginfo( 'rss2_url' ); ?>" title="RSS feed for all posts">RSS - ALL posts on this site</a>
	<a class="rss rss-all-comments" href="<?php bloginfo( 'comments_rss2_url' ); ?>" title="RSS feed for all comments">RSS - ALL comments on this site</a>



<?php
		if (is_singular()){
		$comment_stuff=get_post_comments_feed_link( );  
		
		
		if ( ( 'open' == $post-> comment_status ) || ( 'open' == $post->ping_status ) ) echo '<a class="rss rss-comments-single-post" href="'. $comment_stuff.'" title="RSS Feed  for comments only on this post">RSS - comments on this post</a>';
} ?>




<?php 
if( in_array( 'poweredby', $childishlysimple_miscellaneous_stuff ) ) {

	if( $childishlysimple_wordpress_link =='index' ) echo '<span class="powered-by"><a href="http://wordpress.org/" class="powered-by">Powered by WordPress</a></span>';
} ?>




<?php 
if( in_array( 'alchemweb_link', $childishlysimple_miscellaneous_stuff ) ) {

	if( $childishlysimple_alchemweb_link =='index' ) echo '<span class="designed-by"><a href="http://www.alchemweb.co.uk" class="designed-by">Designed by Alchemweb</a></span>';
} ?>


<?php } ?>

</div><!-- Close rss-feeds-->







</div><!-- Close inner-footer-->

</div><!--Close footer-->

</div><!--Close wrapper-->


<?php $has_this_got_widgets = 'no'; ?>
