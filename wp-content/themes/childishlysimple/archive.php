<?php get_template_part( 'doctype' ); ?> 



<!--archive.php-->



<?php $childishlysimple_file_name='archive';  ?>



<?php get_header( ); ?>



<?php 										
	if (( $childishlysimple_site_details['site_layout']=='two_col_cont_right' ) || ( $childishlysimple_site_details['site_layout']=='three_col_cont_middle' )  || ( $childishlysimple_site_details['site_layout']=='three_col_cont_right' )) get_sidebar( 'left' );

	if ( $childishlysimple_site_details['site_layout']=='three_col_cont_right' ) get_sidebar( 'right' );
?>



<div id="content">



<?php  if ( is_day( ) ) { ?>
	<div class="header-container">
		<h1 class="multiple-post-heading archive">All posts in <?php the_time( 'F jS, Y' ); ?></h1>
	</div><!-- End header-container -->


<?php  } elseif ( is_month( ) ) { ?>
	<div class="header-container">
		<h1 class="multiple-post-heading archive">All posts in <?php the_time( 'F, Y' ); ?></h1>
	</div><!-- End header-container -->


<?php  } elseif ( is_year( ) ) { ?>
	<div class="header-container">
		<h1 class="multiple-post-heading archive">All posts in <?php the_time( 'Y' ); ?></h1>
	</div><!-- End header-container -->
<?php }?>



<?php query_posts( $query_string . '&order=DESC&ignore_sticky_posts=1' ); ?>



<?php $childishlysimple_post_count = 0; //	A variable used in the creation of excerpts ?>



<?php  if ( have_posts( ) ) : while ( have_posts( ) ) : the_post( ); //	The start of the loop. ?>



<?php 
$childishlysimple_post_count++; 
if ( $childishlysimple_post_count <= 2000 ) : 
?>



<div <?php post_class( $childishlysimple_file_name );?>>



<?php get_template_part( 'multiple-post-format', get_post_format() ); ?>



<?php else : // Show excerpts ?>



<div <?php post_class( $childishlysimple_file_name );?>>



<p class="post-date">
	<a class="date-permalink" href="<?php the_permalink( ); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute( ); ?>">
		<span class="post-month"><?php the_time( 'M' );?></span>
		<span class="post-day"><?php the_time( 'j' );?></span>
		<span class="post-year"><?php the_time( 'Y' );?></span>
	</a>
</p>



<h2 class="post-title <?php echo $childishlysimple_file_name; ?>"><a class="permalink" href="<?php the_permalink( ); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute( ); ?>"><?php the_title_attribute( );?></a></h2>



<p  class="post-info-excerpt-spacer">&nbsp;</p>



<div class="entry">



<?php the_post_thumbnail( 'thumbnail' ); ?>



<?php  the_excerpt( ); ?>  



</div> <!--Close entry-->



<?php edit_post_link( 'Edit this post', '<p class="edit-post">', '</p>' ); ?>



</div><!--Close  post htentry  etc. -->  



<?php endif; ?>



<?php endwhile; ?>


 

<?php 
function show_posts_nav() {
	global $wp_query;
	return ($wp_query->max_num_pages > 1);
} ?>

<?php if (show_posts_nav()) : ?>
	<div class="multiple-posts-navigation">
		<span class="multiple-nav-left"><?php next_posts_link( '&laquo; Older Entries' ) ?> &nbsp; </span>
		<span class="multiple-nav-right">&nbsp; <?php previous_posts_link( 'Newer Entries &raquo;' ) ?></span>
	</div><!--Close multiple-posts-navigation-->
<?php endif; 	//	With thanks to  http://www.ericmmartin.com/conditional-pagepost-navigation-links-in-wordpress-redux/ 	?>



<?php else : ?>



<?php get_search_form( ); ?>



<?php endif; ?>



</div><!--Close content-->



<?php 
if (( $childishlysimple_site_details['site_layout']=='three_col_cont_left' ) ) get_sidebar( 'left' );

if (( $childishlysimple_site_details['site_layout']=='two_col_cont_left' ) || ( $childishlysimple_site_details['site_layout']== 'three_col_cont_left' ) || ( $childishlysimple_site_details['site_layout']== 'three_col_cont_middle' ) ) get_sidebar( 'right' );
?>



<?php get_footer( ); ?>



</body>
</html>