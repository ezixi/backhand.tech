<?php get_header(); ?>
<?php get_sidebar(); ?>
	<div id="content" class="narrowcolumn">
	
<!-- google_ad_section_start -->
				<h2 id="about">Backhand Stories is a <strong>creative writing blog</strong> that publishes new <a href="<?php echo get_option('home'); ?>/fiction">short stories</a>, flash fiction, <a href="<?php echo get_option('home'); ?>/non-fiction">non-fiction</a> and <a href="<?php echo get_option('home'); ?>/essays">essays</a> by new and unpublished writers. <a id="submit"href="http://www.backhandstories.com/submission-guidelines/">Submit</a> your own short story!</h2>

				
	<h3 id="newStories">Newest short stories</h3>
	<!-- google_ad_section_end -->					
			
	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

			<div class="post" id="post-<?php the_ID(); ?>">
			
				<h2><?php the_category(', ') ?>: <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				<!--<small><?php the_time('F jS, Y') ?>  <?php the_author() ?> </small>-->

				<div class="entry">
					<?php the_content('Read the rest of this story &raquo;'); ?>
<div id="socialBookmarks">
<h3>Did you like this short story? Recommend it to your friends...</h3>

		<a href="http://twitter.com/share" class="twitter-share-button" data-count="none" data-via="backhandstories" onClick="recordOutboundLink(this, 'TwitterShare', '<?php the_title(); ?>');return false;">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
		<a href="http://twitter.com/Backhandstories" class="twitter-follow-button" onClick="recordOutboundLink(this, 'TwitterFollow', '<?php the_title(); ?>');return false;">Follow @Backhandstories</a><script src="http://platform.twitter.com/widgets.js" type="text/javascript"></script>
<g:plusone></g:plusone>
<iframe id="fbookframe" src="http://www.facebook.com/plugins/like.php?href=<?php the_permalink() ?>&amp;layout=standard&amp;show_faces=false&amp;width=300&amp;action=like&amp;font=arial&amp;colorscheme=light&amp;height=35" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:300px; height:35px;" allowTransparency="true"></iframe>


</div>



				<p class="postmetadata"><!-- google_ad_section_start --><?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p><!-- google_ad_section_end -->
				</div>

			</div>

		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</div>

	<?php else : ?>

		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>
		<?php include (TEMPLATEPATH . "/searchform.php"); ?>

	<?php endif; ?>

	</div>



<?php get_footer(); ?>
