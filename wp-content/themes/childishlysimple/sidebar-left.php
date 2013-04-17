<?php
global $has_this_got_widgets;	
$has_this_got_widgets = 'yes'; 

global $childishlysimple_is_the_theme_activated;
global $childishlysimple_miscellaneous_stuff;
global $childishlysimple_site_details; 
global $childishlysimple_footer_items;
?>




<div class="long-left-sidebar-background">
&nbsp;
</div>  




<div class="sidebar left-sidebar">




<?php
$childishlysimple_left_sidebar_items = array( );
if( ! isset( $childishlysimple_site_details[ 'selected_left_sidebar_items' ] ) ) {
		$childishlysimple_left_sidebar_items = array( 1,2 );
		
		
		
		echo '<div class="sidebar-item left-sidebar-item left-sidebar-home-item">';
	
		echo '<h2 class="left-sidebar-item  left-sidebar-home">Home</h2>';
		echo '<ul class="left-sidebar-item left-sidebar-home">';
		echo '<li class="left-sidebar-home">';
		echo '<a class="right-sidebar-home" href="' . home_url('/'). '">Home</a>';
		echo '</li>';
		echo '</ul>';

		echo '</div><!--End left-sidebar-item-->';
		
		
		
		
		
		echo '<div class="sidebar-item left-sidebar-item left-sidebar-all-categories-item">';
		echo '<h2 class="left-sidebar-item  left-sidebar-all-categories">All categories</h2>';
		echo '<ul class="left-sidebar-item left-sidebar-all-categories">';
		wp_list_categories( 'title_li=' ); 
		echo '</ul>';
		echo '</div><!--End left-sidebar-item-->';
		
		
		
		
		echo '<div class="sidebar-item left-sidebar-item left-sidebar-pages-item">';
		echo '<h2 class="left-sidebar-item  pages"> All  pages</h2>';
		echo '<ul class="left-sidebar-item left-sidebar-pages">';
		wp_list_pages( 'title_li=' );
		echo '</ul>';
		echo '</div><!--End left-sidebar-item-->';





		echo '<div class="sidebar-item left-sidebar-item left-sidebar-widget left-sidebar-widget-13-item">';

			if ( is_active_sidebar( 'left_sidebar_widget_13' ) ) : 
			dynamic_sidebar( 'left_sidebar_widget_13' ); 
			
			else : ?>

				<h2 class="widgettitle left-sidebar-item  left-sidebar-widget-13">Left Sidebar Widget 13</h2>
				<ul class="left-sidebar-item left-sidebar-widget-13">
				<li class="explanation">This is the Left Sidebar Widget 13 container in sidebar-left.php. This text disappears and the title changes when you add a widget and give it a title in Admin / Appearance / Widgets. <br /><br />To remove this widget click on Appearance / Childishly Simple Options / Choose your sidebar items<br /><br />
				</li>
				</ul>

			<?php endif; 

		echo '</div><!--End left-sidebar-item-->';





} elseif ( $childishlysimple_site_details['errors'] == 'errors' ) {	
	$childishlysimple_left_sidebar_items = array_flip( $childishlysimple_site_details['left_sidebar_items_default'] );

} else {	
$childishlysimple_left_sidebar_items = $childishlysimple_site_details['selected_left_sidebar_items'];
}
?>




<?php
if( in_array( 'left_sidebar_home', $childishlysimple_left_sidebar_items ) ) { ?>

<div class="sidebar-item left-sidebar-item left-sidebar-home-item"> 

	<h2 class="left-sidebar-item  left-sidebar-home">Home</h2>
		<ul class="left-sidebar-item left-sidebar-home">
			<li class="left-sidebar-home">
			<?php echo '<a class="left-sidebar-home" href="' . home_url('/'). '">Home</a>'; ?>
			</li>
		</ul>	

</div><!--End left-sidebar-item-->

<?php } ?>




<?php
if( in_array( 'left_sidebar_widget_01', $childishlysimple_left_sidebar_items ) ) { ?>

<div class="sidebar-item left-sidebar-item left-sidebar-widget left-sidebar-widget-01-item"> 

	<?php if ( is_active_sidebar( 'left_sidebar_widget_01' ) ) : 
	dynamic_sidebar( 'left_sidebar_widget_01' ); 
	else : ?>

		<h2 class="widgettitle left-sidebar-item  left-sidebar-widget-01">Left Sidebar Widget 01</h2>
			<ul class="left-sidebar-item left-sidebar-widget-01">
				<li class="explanation">This is the Left Sidebar Widget 01 container in sidebar-left.php. This text disappears and the title changes when you add a widget and give it a title in Admin / Appearance / Widgets.<br /><br />
				</li>
			</ul>

<?php endif; ?>

</div><!--End left-sidebar-item-->

<?php } ?>




<?php
if( in_array( 'left_sidebar_most_recent', $childishlysimple_left_sidebar_items ) ) { ?>

<div class="sidebar-item left-sidebar-item left-sidebar-most-recent-posts-item"> 
	<h2 class="left-sidebar-item  left-sidebar-most-recent-posts">Most recent posts</h2>
		<ul class="left-sidebar-item most-recent-posts left-sidebar-most-recent-posts">
			<?php wp_get_archives( 'type=postbypost&limit=10' ); ?>
		</ul>
</div><!--End left-sidebar-item-->

<?php } ?>




<?php
if( in_array( 'left_sidebar_widget_02', $childishlysimple_left_sidebar_items ) ){ ?>

<div class="sidebar-item left-sidebar-item left-sidebar-widget left-sidebar-widget-02-item"> 

	<?php 
	if ( is_active_sidebar( 'left_sidebar_widget_02' ) ) : 
	dynamic_sidebar( 'left_sidebar_widget_02' ); 
	else : 
	?>

		<h2 class="widgettitle left-sidebar-item  left-sidebar-widget-02">Left Sidebar Widget 02</h2>
			<ul class="left-sidebar-item left-sidebar-widget-02">
				<li class="explanation">This is the Left Sidebar Widget 02 container in sidebar-left.php. This text disappears and the title changes when you add a widget and give it a title in Admin / Appearance / Widgets.<br /><br />
				</li>
			</ul>

<?php endif; ?>

</div><!--End left-sidebar-item-->

<?php } ?>




<?php
if( in_array( 'left_sidebar_most_popular', $childishlysimple_left_sidebar_items ) ) { ?>

	<div class="sidebar-item left-sidebar-item left-sidebar-popular-item"> 
		<h2 class="left-sidebar-item  left-sidebar-popular">Most popular posts</h2>
			<ul class="left-sidebar-item left-sidebar-popular">

			<?php      
			$loop_most_popular3 = new WP_Query( 'orderby=comment_count&posts_per_page=10&ignore_sticky_posts=1' );?>

<?php 
if ( $loop_most_popular3->have_posts( ) ) :  while ( $loop_most_popular3->have_posts( ) ) : $loop_most_popular3->the_post( ); ?>

	<li class="left-sidebar-popular">

		<?php     
			$shortened_title = '';
			$limit = "25";  
			$ending="...";
			$shortened_title = the_title_attribute (array('echo' => 0) );
			if( strlen( $shortened_title ) >= ( $limit ) ) {
			$shortened_title = substr( $shortened_title, 0, $limit ) . $ending; 
}
?>

			<a class="left-sidebar-popular" href="<?php the_permalink( ) ?>" rel="bookmark" title="Permanent Link to <?php echo $shortened_title; ?>"><?php echo $shortened_title; ?>(<?php comments_number('0','1','%'); ?>)</a>
		</li>

<?php endwhile;  ?> 

</ul>

<?php 
else : 
endif; 
wp_reset_query( );
?>

</div><!--End left-sidebar-item-->

<?php } ?>




<?php
if( in_array( 'left_sidebar_widget_03', $childishlysimple_left_sidebar_items ) ){ ?>

	<div class="sidebar-item left-sidebar-item left-sidebar-widget left-sidebar-widget-03-item"> 

		<?php 
		if ( is_active_sidebar( 'left_sidebar_widget_03' ) ) : 
		dynamic_sidebar( 'left_sidebar_widget_03' ); 
		else : 
		?>

		<h2 class="widgettitle left-sidebar-item  left-sidebar-widget-03">Left Sidebar Widget 03</h2>
			<ul class="left-sidebar-item left-sidebar-widget-03">
				<li class="explanation">This is the Left Sidebar Widget 03 container in sidebar-left.php. This text disappears and the title changes when you add a widget and give it a title in Admin / Appearance / Widgets.<br /><br />
				</li>
			</ul>

<?php endif; ?>

</div><!--End left-sidebar-item-->

<?php } ?>




<?php
if( in_array( 'left_sidebar_latest_comments', $childishlysimple_left_sidebar_items ) ) { ?>

	<div class="sidebar-item left-sidebar-item left-sidebar-latest-comments-item"> 
		<h2 class="left-sidebar-item  left-sidebar-latest-comments"> Latest Comments</h2>
			<ul class="left-sidebar-item left-sidebar-latest-comments">

<?php
$recent_comments = get_comments( 'status=approve&number=5' );
foreach( $recent_comments as $comment ) :

$random = rand( 1,3 );	

$images_url = get_template_directory_uri();

$default_avatar_url = $images_url.'/images/gravatar'.$random.'.gif';

$avatar_alt =''; 
?>

					<li class="left-sidebar-latest-comments">
					<?php  echo get_avatar( $comment->comment_author_email, 32, $default_avatar_url , $avatar_alt ); 	//	Output the gravatar ?>

						<span class="left-sidebar-latest-comments-author">By  <?php echo ( get_comment_author_link( ) ) ?> on </span>
						<span class="left-sidebar-latest-comments-date"><?php  echo mysql2date( 'j-m-y', $comment->comment_date ); ?></span>

							<p class="latest-comments-excerpt left-sidebar-latest-comments-excerpt">

<?php  
$latest_posts_post_ID = $comment->comment_post_ID ; $post_info = get_post( $latest_posts_post_ID ); $title = $post_info->post_title;

	$excerpt = wp_html_excerpt( $comment->comment_content, 70 ); 
	$excerpt = $excerpt .'...'; //	Add some dots after the excerpt
	echo $excerpt;  
?>

<a class="sidebar-latest-comments-more left-sidebar-latest-comments-more" href="<?php echo get_permalink( $comment->comment_post_ID ); ?>#comment-<?php echo $comment->comment_ID?>" title="Comment on <?php echo $title; ?>">Read more</a>   

							</p>
					</li> 
					
				<?php endforeach; ?>
  
				</ul>
</div><!--End left-sidebar-item-->

<?php } ?>




<?php
if( in_array( 'left_sidebar_widget_04', $childishlysimple_left_sidebar_items ) ) { ?>

<div class="sidebar-item left-sidebar-item left-sidebar-widget left-sidebar-widget-04-item"> 

	<?php if ( is_active_sidebar( 'left_sidebar_widget_04' ) ) : 
	dynamic_sidebar( 'left_sidebar_widget_04' ); 
	else : ?>

		<h2 class="widgettitle left-sidebar-item  left-sidebar-widget-04">Left Sidebar Widget 04</h2>
			<ul class="left-sidebar-item left-sidebar-widget-04">
				<li class="explanation">This is the Left Sidebar Widget 04 container in sidebar-left.php. This text disappears and the title changes when you add a widget and give it a title in Admin / Appearance / Widgets.<br /><br />
				</li>
			</ul>

<?php endif; ?>

</div><!--End left-sidebar-item-->

<?php } ?>




<?php
if( in_array( 'left_sidebar_calendar', $childishlysimple_left_sidebar_items ) ){ ?>

<div class="sidebar-item left-sidebar-item left-sidebar-calendar-item"> 
	<h2 class="left-sidebar-item  calendar"> Calendar</h2>

		<?php get_calendar( true ); ?>

</div><!--End left-sidebar-item-->

<?php } ?>




<?php
if( in_array( 'left_sidebar_widget_05', $childishlysimple_left_sidebar_items ) ){ ?>

<div class="sidebar-item left-sidebar-item left-sidebar-widget left-sidebar-widget-05-item"> 

	<?php if ( is_active_sidebar( 'left_sidebar_widget_05' ) ) : 
	dynamic_sidebar( 'left_sidebar_widget_05' ); 
	else : ?>

	<h2 class="widgettitle left-sidebar-item  left-sidebar-widget-05">Left Sidebar Widget 05</h2>
		<ul class="left-sidebar-item left-sidebar-widget-05">
			<li class="explanation">This is the Left Sidebar Widget 05 container in sidebar-left.php. This text disappears and the title changes when you add a widget and give it a title in Admin / Appearance / Widgets.<br /><br />
			</li>
		</ul>

<?php endif; ?>

</div><!--End left-sidebar-item-->

<?php } ?>




<?php
if( in_array( 'left_sidebar_all_categories', $childishlysimple_left_sidebar_items ) ) { ?>

<div class="sidebar-item left-sidebar-item left-sidebar-all-categories-item"> 
	<h2 class="left-sidebar-item  left-sidebar-all-categories">All categories</h2>
		<ul class="left-sidebar-item left-sidebar-all-categories">
			<?php wp_list_categories( 'title_li=' ); ?>
		</ul>
</div><!--End left-sidebar-item-->

<?php } ?>




<?php
if( in_array( 'left_sidebar_widget_06', $childishlysimple_left_sidebar_items ) ) { ?>

<div class="sidebar-item left-sidebar-item left-sidebar-widget left-sidebar-widget-06-item"> 

	<?php if ( is_active_sidebar( 'left_sidebar_widget_06' ) ) : 
	dynamic_sidebar( 'left_sidebar_widget_06' ); 
	else : ?>

		<h2 class="widgettitle left-sidebar-item  left-sidebar-widget-06">Left Sidebar Widget 06</h2>
			<ul class="left-sidebar-item left-sidebar-widget-06">
				<li class="explanation">This is the Left Sidebar Widget 06 container in sidebar-left.php. This text disappears and the title changes when you add a widget and give it a title in Admin / Appearance / Widgets.<br /><br />
				</li>
			</ul>

<?php endif; ?>

</div><!--End left-sidebar-item-->

<?php } ?>




<?php
if( in_array( 'left_sidebar_child_categories', $childishlysimple_left_sidebar_items ) ) { ?>

<div class="sidebar-item left-sidebar-item left-sidebar-child-categories-item"> 
	<h2 class="left-sidebar-item  left-sidebar-child-categories">Child Categories</h2>
		<ul class="left-sidebar-item left-sidebar-child-categories">
				<?php wp_list_categories( 'child_of=4&title_li=' ); ?>
			</ul>
</div><!--End left-sidebar-item-->

<?php } ?>




<?php
if( in_array( 'left_sidebar_widget_07', $childishlysimple_left_sidebar_items ) ){ ?>

<div class="sidebar-item left-sidebar-item left-sidebar-widget left-sidebar-widget-07-item"> 

	<?php if ( is_active_sidebar( 'left_sidebar_widget_07' ) ) : 
	dynamic_sidebar( 'left_sidebar_widget_07' ); 
	else : ?>

		<h2 class="widgettitle left-sidebar-item  left-sidebar-widget-07">Left Sidebar Widget 07</h2>
			<ul class="left-sidebar-item left-sidebar-widget-07">
				<li class="explanation">This is the Left Sidebar Widget 07 container in sidebar-left.php. This text disappears and the title changes when you add a widget and give it a title in Admin / Appearance / Widgets.<br /><br />
				</li>
			</ul>

<?php endif; ?>

</div><!--End left-sidebar-item-->

<?php } ?>




<?php
if( in_array( 'left_sidebar_pages', $childishlysimple_left_sidebar_items ) ){ ?>

<div class="sidebar-item left-sidebar-item left-sidebar-pages-item"> 
	<h2 class="left-sidebar-item  pages"> All  pages</h2>
		<ul class="left-sidebar-item left-sidebar-pages">
			<?php wp_list_pages( 'title_li=' );?>
		</ul>
</div><!--End left-sidebar-item-->

<?php } ?>




<?php
if( in_array( 'left_sidebar_widget_08', $childishlysimple_left_sidebar_items ) ) { ?>

<div class="sidebar-item left-sidebar-item left-sidebar-widget left-sidebar-widget-08-item"> 

	<?php if ( is_active_sidebar( 'left_sidebar_widget_08' ) ) : 
	dynamic_sidebar( 'left_sidebar_widget_08' ); 
	else : ?>

	<h2 class="widgettitle left-sidebar-item  left-sidebar-widget-08">Left Sidebar Widget 08</h2>
		<ul class="left-sidebar-item left-sidebar-widget-08">
			<li class="explanation">This is the Left Sidebar Widget 08 container in sidebar-left.php. This text disappears and the title changes when you add a widget and give it a title in Admin / Appearance / Widgets.<br /><br />
			</li>
		</ul>

<?php endif; ?>

</div><!--End left-sidebar-item-->

<?php } ?>




<?php
if( in_array( 'left_sidebar_archives', $childishlysimple_left_sidebar_items ) ) { ?>

<div class="sidebar-item left-sidebar-item left-sidebar-archives-item"> 
	<h2 class="left-sidebar-item  archives">Archives</h2>
		<ul class="left-sidebar-item left-sidebar-archives">
			<?php wp_get_archives( 'type=monthly' ); ?>
		</ul>
</div><!--End left-sidebar-item-->

<?php } ?>




<?php
if( in_array( 'left_sidebar_widget_09', $childishlysimple_left_sidebar_items ) ){ ?>

<div class="sidebar-item left-sidebar-item left-sidebar-widget left-sidebar-widget-09-item"> 

	<?php if ( is_active_sidebar( 'left_sidebar_widget_09' ) ) : 
	dynamic_sidebar( 'left_sidebar_widget_09' ); 
	else : ?>

		<h2 class="widgettitle left-sidebar-item  left-sidebar-widget-09">Left Sidebar Widget 09</h2>
			<ul class="left-sidebar-item left-sidebar-widget-09">
				<li class="explanation">This is the Left Sidebar Widget 09 container in sidebar-left.php. This text disappears and the title changes when you add a widget and give it a title in Admin / Appearance / Widgets.<br /><br />
				</li>
			</ul>

<?php endif; ?>

</div><!--End left-sidebar-item-->

<?php } ?>




<?php
if( in_array( 'left_sidebar_bookmarks', $childishlysimple_left_sidebar_items ) ) { ?>

<div class="sidebar-item left-sidebar-item left-sidebar-bookmarks-item"> 
	<h2 class="left-sidebar-item  left-sidebar-bookmarks">Bookmarks</h2>
		<ul class="left-sidebar-item left-sidebar-bookmarks">
			<?php wp_list_bookmarks( 'categorize=0&title_li=' ); ?>
		</ul>
</div><!--End left-sidebar-item-->

<?php } ?>




<?php
if( in_array( 'left_sidebar_widget_10', $childishlysimple_left_sidebar_items ) ){ ?>

<div class="sidebar-item left-sidebar-item left-sidebar-widget left-sidebar-widget-10-item"> 

	<?php if ( is_active_sidebar( 'left_sidebar_widget_10' ) ) : 
	dynamic_sidebar( 'left_sidebar_widget_10' ); 
	else : ?>

		<h2 class="widgettitle left-sidebar-item  left-sidebar-widget-10">Left Sidebar Widget 10</h2>
			<ul class="left-sidebar-item left-sidebar-widget-10">
				<li class="explanation">This is the Left Sidebar Widget 10 container in sidebar-left.php. This text disappears and the title changes when you add a widget and give it a title in Admin / Appearance / Widgets.<br /><br />
				</li>
			</ul>

<?php endif; ?>

</div><!--End left-sidebar-item-->

<?php } ?>




<?php
if( in_array( 'left_sidebar_authors', $childishlysimple_left_sidebar_items ) ) { ?>

<div class="sidebar-item left-sidebar-item left-sidebar-authors-item"> 
	<h2 class="left-sidebar-item  authors">Authors</h2>
		<ul class="left-sidebar-item left-sidebar-authors">
			<?php wp_list_authors( 'exclude_admin=0' ); ?>
		</ul>
</div><!--End left-sidebar-item-->

<?php } ?>




<?php
if( in_array( 'left_sidebar_widget_11', $childishlysimple_left_sidebar_items ) ){ ?>

	<div class="sidebar-item left-sidebar-item left-sidebar-widget left-sidebar-widget-11-item"> 

		<?php if ( is_active_sidebar( 'left_sidebar_widget_11' ) ) : 
		dynamic_sidebar( 'left_sidebar_widget_11' ); 
		else : ?>

			<h2 class="widgettitle left-sidebar-item  left-sidebar-widget-11">Left Sidebar Widget 11</h2>
				<ul class="left-sidebar-item left-sidebar-widget-11">
					<li class="explanation">This is the Left Sidebar Widget 11 container in sidebar-left.php. This text disappears and the title changes when you add a widget and give it a title in Admin / Appearance / Widgets.<br /><br />
					</li>
				</ul>

<?php endif; ?>

</div><!--End left-sidebar-item-->

<?php } ?>




<?php
if( in_array( 'left_sidebar_tag_cloud', $childishlysimple_left_sidebar_items ) ) { ?>

	<div class="sidebar-item left-sidebar-item left-sidebar-tag-cloud-item"> 
		<h2 class="left-sidebar-item  left-sidebar-tag-cloud"> Tag cloud</h2> 
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

</div><!--End left-sidebar-item-->

<?php } ?>




<?php
if( in_array( 'left_sidebar_widget_12', $childishlysimple_left_sidebar_items ) ){ ?>

<div class="sidebar-item left-sidebar-item left-sidebar-widget left-sidebar-widget-12-item"> 

	<?php if ( is_active_sidebar( 'left_sidebar_widget_12' ) ) : 
	dynamic_sidebar( 'left_sidebar_widget_12' ); 
	else : ?>

		<h2 class="widgettitle left-sidebar-item  left-sidebar-widget-12">Left Sidebar Widget 12</h2>
			<ul class="left-sidebar-item left-sidebar-widget-12">
				<li class="explanation">This is the Left Sidebar Widget 12 container in sidebar-left.php. This text disappears and the title changes when you add a widget and give it a title in Admin / Appearance / Widgets.<br /><br />
				</li>
			</ul>

<?php endif; ?>

</div><!--End left-sidebar-item-->

<?php } ?>




<?php
if( in_array( 'left_sidebar_register_or_login', $childishlysimple_left_sidebar_items ) ) { ?>

<div class="sidebar-item left-sidebar-item left-sidebar-register-item"> 
	<h2 class="left-sidebar-item  left-sidebar-register">Register or Log in</h2>
		<ul class="left-sidebar-item left-sidebar-register">
		
			<?php wp_register( );  ?>
			
				<li><?php wp_loginout( ); ?></li>  

<?php wp_meta( ); //	A hook for plugins ?>

		</ul>

</div><!--End left-sidebar-item-->

<?php } ?>




<?php
if( in_array( 'left_sidebar_widget_13', $childishlysimple_left_sidebar_items ) ){ ?>

<div class="sidebar-item left-sidebar-item left-sidebar-widget left-sidebar-widget-13-item"> 

	<?php if ( is_active_sidebar( 'left_sidebar_widget_13' ) ) : 
	dynamic_sidebar( 'left_sidebar_widget_13' ); 
	else : ?>

		<h2 class="widgettitle left-sidebar-item  left-sidebar-widget-13">Left Sidebar Widget 13</h2>
			<ul class="left-sidebar-item left-sidebar-widget-13">
				<li class="explanation">This is the Left Sidebar Widget 13 container in sidebar-left.php. This text disappears and the title changes when you add a widget and give it a title in Admin / Appearance / Widgets.<br /><br />
				</li>
			</ul>

<?php endif; ?>

</div><!--End left-sidebar-item-->

<?php } ?>


 

</div><!--End left-sidebar-->

<?php $has_this_got_widgets = 'no'; ?>