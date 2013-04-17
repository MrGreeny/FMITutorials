<?php get_header(); ?>

<div id="info"><h2>Tutorials &amp; Articles - recently added</h2></div>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<div class="content">
<div class="thumb">
<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
<img src="<?php echo get_post_meta($post->ID, "thumb", true); ?>" alt="<?php the_title(); ?>"  />
</a>
</div>
<div class="entry">
			<div class="post" id="post-<?php the_ID(); ?>">
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
	
					<?php the_content_rss('', TRUE, '', 20); ?>

				<div class="meta"><p>Posted in <?php the_category(', ') ?> | <span class="white"><?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></span> <?php edit_post_link('Edit', '[ ', ' ]'); ?></p></div>

</div>
</div>
<div class="clear"></div>
</div>
<div class="clear"></div>
		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Older Tutorials') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Tutorials &raquo;') ?></div>
		</div>

	<?php else : ?>
<div class="content">
<center>
		<h2>Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>
		<?php include (TEMPLATEPATH . "/searchform.php"); ?>
<br /><br />
</center>
</div>

	<?php endif; ?>
	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
