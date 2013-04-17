<!-- footer.php -->		
<?php global $tpinfo;?>
		<div class="clear"></div>
	</div></div></div><!--  #container_btm, #container_top, #container -->

	<div id="footer">
		<div id="flickrrss"><?php if(function_exists('get_flickrRSS')) get_flickrRSS(array('num_items'=>5));?></div>
		<div id="footer_credit">
		&copy; <?php echo date("Y");?> - <?php bloginfo('name'); ?><br/>
		<?php /*Please leave 1 credit line to the theme designer. Thanks.*/ theme_credit();?><br/>
	</div>
	</div><!-- footer -->
</div></div></div><!-- #base_btm ,#base_top, #base -->
</div></div><!-- #bg_btm, #bg_top -->
<div class="hide-div"><?php echo !empty($tpinfo['templatelite_analytics'])? stripslashes($tpinfo['templatelite_analytics']):"";?></div><?php // hide-div ?>
<?php wp_footer();?>
</body>
</html>