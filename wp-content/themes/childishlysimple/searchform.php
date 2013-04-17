<?php
//	Show a different form if this is within a widget   http://codex.wordpress.org/Function_Reference/is_dynamic_sidebar
//	This is because the sidebars and footer items (including widget search boxes) can be various widths

global $has_this_got_widgets;	// Set in footer.php, sidebar-left.php, sidebar-right.php
	if  ($has_this_got_widgets == 'no') { ?>

		<div class="no-posts">
			<h2 class="no-posts">Sorry! </h2>
				<p class="no-posts">No posts were found - try searching for something else!</p>
					<form method="get" class="no-posts" action="<?php echo home_url();?>">
						<fieldset class="no-posts">
							<input type="text" onfocus="this.value=''"  value="Try another search" name="s" id="no-posts-input" />
							<input type="submit" id="no-posts-submit" value="" /> 
						</fieldset>
					</form>
		</div><!--Close no-posts-->
	
<?php 
	} else { ?>

	<form method="get" class="widget-search" action="<?php echo home_url();?>">
		<fieldset class="widget-search">
			<input type="text"  value="" name="s" class="widget-search-input" />
			<input type="submit" class="widget-search-submit" value="Search" /> 
		</fieldset>
	</form>

<?php } ?>