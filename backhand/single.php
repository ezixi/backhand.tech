<?php get_header(); ?>
<?php get_sidebar(); ?>
	<div id="content" class="widecolumn">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	

		<div class="post" id="post-<?php the_ID(); ?>">
			<h2><a href="<?php echo get_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

			<div class="entry">
				<?php the_content('<p class="serif">Read the rest of this story &raquo;</p>'); ?>
<div id="socialBookmarks">
<h3>Did you like this short story? Recommend it to your friends...</h3>
	
		<a href="http://twitter.com/share" class="twitter-share-button" data-count="none" data-via="backhandstories" onClick="recordOutboundLink(this, 'TwitterShare', '<?php the_title(); ?>');return false;">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
		<a href="http://twitter.com/Backhandstories" class="twitter-follow-button" onClick="recordOutboundLink(this, 'TwitterFollow', '<?php the_title(); ?>');return false;">Follow @Backhandstories</a><script src="http://platform.twitter.com/widgets.js" type="text/javascript"></script>
	<g:plusone></g:plusone>
		<iframe id="fbookframe" src="http://www.facebook.com/plugins/like.php?href=<?php the_permalink() ?>&amp;layout=standard&amp;show_faces=false&amp;width=300&amp;action=like&amp;font=arial&amp;colorscheme=light&amp;height=35" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:300px; height:35px;" allowTransparency="true"></iframe>

		
	

</div>
				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
				<?php the_tags( '<p>Tags: ', ', ', '</p>'); ?>
				</div>
<div class="secondAd" style="text-align: center;">
<div style="text-align: center;">
<script type="text/javascript"><!--
adroll_width = 468;
adroll_height = 60;
adroll_a_id = "7IGULJ7LKFGQPKGV2VONVR";
adroll_s_id = "HWAHKIBOMZCFLLZ7P3PBMO";
adroll_render_link = true;
//--></script>
<script type="text/javascript" src="http://a.adroll.com/j/rolling.js"></script>
</div>
</div>
				<p class="postmetadata alt">
					<small>
						This entry was posted
						<?php /* This is commented, because it requires a little adjusting sometimes.
							You'll need to download this plugin, and follow the instructions:
							http://binarybonsai.com/archives/2004/08/17/time-since-plugin/ */
							/* $entry_datetime = abs(strtotime($post->post_date) - (60*120)); echo time_since($entry_datetime); echo ' ago'; */ ?>
						on <?php the_time('l, F jS, Y') ?> at <?php the_time() ?>
						and is filed under <?php the_category(', ') ?>.
						You can follow any responses to this entry through the <?php comments_rss_link('RSS 2.0'); ?> feed.

						<?php if (('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
							// Both Comments and Pings are open ?>
							You can <a href="#respond">leave a response</a>, or <a href="<?php trackback_url(); ?>" rel="trackback">trackback</a> from your own site.

						<?php } elseif (!('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
							// Only Pings are Open ?>
							Responses are currently closed, but you can <a href="<?php trackback_url(); ?> " rel="trackback">trackback</a> from your own site.

						<?php } elseif (('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
							// Comments are open, Pings are not ?>
							You can skip to the end and leave a response. Pinging is currently not allowed.

						<?php } elseif (!('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
							// Neither Comments, nor Pings are open ?>
							Both comments and pings are currently closed.

						<?php } edit_post_link('Edit this entry.','',''); ?>

					</small>
				</p>

			
		</div>

	<?php comments_template(); ?>

	<?php endwhile; else: ?>

		<p>Sorry, no posts matched your criteria.</p>

<?php endif; ?>
	<div class="navigation">
	
			<p>Previous: <?php previous_post_link('&laquo; %link') ?></p>
			
			<p>Next: <?php next_post_link('%link &raquo;') ?></p>
		</div>


	</div>

<?php get_footer(); ?>
