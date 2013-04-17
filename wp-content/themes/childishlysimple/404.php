<?php get_template_part( 'doctype' ); ?> 


<!-- 404.php -->


<meta name="robots" content="noindex, nofollow" /> 


<?php get_header( ); ?>


<div id="content" style="width:100%;">


<div class="header-container">
&nbsp;
</div><!-- End header-container -->

	<h1 class="post-title error"> OOPS - sorry, there's  been a mistake. </h1>
	<h1 class="post-title error"> Please use the navigation or the search box below to find what you're looking for</h1>
	<br /><br /><br />

	<div class="error-404-search">
	 	<?php get_search_form( $echo ); ?> 
	</div><!-- Close error-404-search-->
	
	<br /><br /><br />
	<h1 class="post-title error">404 error ( file not found )</h1>
	<br /><br /><br />

</div><!--Close content-->
</div><!-- Close inner-wrapper-->



<div class="footer">
<div class="inner-footer">
<br />



</div><!--Close inner-footer-->
</div><!--Close footer-->


</div><!--Close wrapper-->



</body>
</html>