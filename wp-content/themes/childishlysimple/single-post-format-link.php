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



<h1 class="post-title index">An interesting link ... </h1>



<p  class="post-info-top">
	<span class="by">By</span> <span class="post-author"><?php the_author( );?></span>
</p>



<div class="entry">



<?php the_content( ); ?>



</div> <!--Close entry-->



<?php edit_post_link( 'Edit this post', '<p class="edit-post">', '</p>' ); ?>



</div><!--Close  post htentry  etc. -->  



<?php endwhile; ?>




<?php else : ?>



<?php get_search_form( );   ?> 



<?php endif; ?>



<?php wp_reset_query( );?>