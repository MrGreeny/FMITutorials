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
An interesting link...</h2>



<p  class="post-info-top">&nbsp;</p>



<div class="entry">



<?php  the_content( '<span class="more">(continue reading...)   </span>' ); ?>



</div> <!--Close entry-->



<?php edit_post_link( 'Edit this post', '<p class="edit-post">', '</p>' ); 	 ?>



</div><!--Close  post htentry  etc. -->  