<?php get_template_part( 'doctype' ); ?> 



<!--index.php-->



<?php $childishlysimple_file_name='index'; //	Used in     post_class();   ?>



<?php get_header( ); ?>



<?php 										
	if (( $childishlysimple_site_details['site_layout']=='two_col_cont_right' ) || ( $childishlysimple_site_details['site_layout']=='three_col_cont_middle' )  || ( $childishlysimple_site_details['site_layout']=='three_col_cont_right' )) get_sidebar( 'left' );

	if ( $childishlysimple_site_details['site_layout']=='three_col_cont_right' ) get_sidebar( 'right' );
?>



<div id="content">



<div class="header-container">
	<h1 class="multiple-post-heading index">
		<?php if(isset( $childishlysimple_site_details['index_heading'] )) echo $childishlysimple_site_details['index_heading']; ?>
	&nbsp;</h1>
</div><!-- End header-container -->



<?php   $index_loop= new WP_Query( array( 'order' => 'DESC',  'post_type' => array( 'post', 'review'), 'paged' =>$paged ) ); ?>



<?php $childishlysimple_post_count = 0; ?>



<?php if ( $index_loop->have_posts( ) ) :  while ( $index_loop->have_posts( ) ) : $index_loop->the_post( ); ?>



<?php 
$childishlysimple_post_count++; 
if ( $childishlysimple_post_count <= 2000 ) : 
?>



<div <?php post_class( $childishlysimple_file_name ); ?>>



<?php get_template_part( 'multiple-post-format', get_post_format() ); ?>



<?php else : // Show excerpts  ?>



<div <?php post_class( $childishlysimple_file_name );?>>



<p class="post-date">
	<a class="date-permalink" href="<?php the_permalink( ); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute( ); ?>">
		<span class="post-month"><?php the_time( 'M' );?></span>
		<span class="post-day"><?php the_time( 'j' );?></span>
		<span class="post-year"><?php the_time( 'Y' );?></span>
	</a>
</p>



<h2 class="post-title <?php echo $childishlysimple_file_name; ?>">
	<a class="permalink" href="<?php the_permalink( ); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute( ); ?>"><?php the_title_attribute( );?></a>
</h2>



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
$childishlysimple_found_posts = $index_loop->found_posts; 
$childishlysimple_post_count =  $index_loop->post_count;
if ( $childishlysimple_found_posts > $childishlysimple_post_count  ) {?>

<div class="multiple-posts-navigation">
	<span class="multiple-nav-left"><?php next_posts_link( '&laquo; Older Entries' ) ?> &nbsp; </span>
	<span class="multiple-nav-right">&nbsp; <?php previous_posts_link( 'Newer Entries &raquo;' ) ?></span>
</div><!--Close multiple-posts-navigation-->

<?php }?>



<?php else : ?>



<?php get_search_form( );   ?> 



<?php endif; ?>



<?php wp_reset_query( );?>



</div><!--Close content-->



<?php 
if (( $childishlysimple_site_details['site_layout']=='three_col_cont_left' ) ) get_sidebar( 'left' );

if (( $childishlysimple_site_details['site_layout']=='two_col_cont_left' ) || ( $childishlysimple_site_details['site_layout']== 'three_col_cont_left' ) || ( $childishlysimple_site_details['site_layout']== 'three_col_cont_middle' ) ) get_sidebar( 'right' );
?>



<?php 
$childishlysimple_wordpress_link = 'index'; //	To use in footer to display wordpress link  
$childishlysimple_alchemweb_link = 'index'; //	To use in footer to display alchemweb link
?>



<?php get_footer( ); ?>

<?php /* bloginfo('description'); Keeps the theme uploader happy */?> 

</body>
</html>