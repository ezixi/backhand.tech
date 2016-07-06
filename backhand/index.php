<?php get_header(); ?>
<div class="container">
	<div class="jumbotron">
		<h2 id="about">Backhand Stories is a <strong>creative writing blog</strong> that publishes new <a href="<?php echo get_option('home'); ?>/fiction">short stories</a>, flash fiction, <a href="<?php echo get_option('home'); ?>/non-fiction">non-fiction</a> and <a href="<?php echo get_option('home'); ?>/essays">essays</a> by new and unpublished writers. <a id="submit"href="http://www.backhandstories.com/submission-guidelines/">Submit</a> your own short story!</h2>
	</div>
	<div class="row">
		<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
		<article class="post col-md-6" id="post-<?php the_ID(); ?>">
			<h2><?php the_category(', ') ?>: <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
			<div class="entry">
				<?php the_content('Read the rest of this story &raquo;'); ?>
				<p class="postmetadata"><!-- google_ad_section_start --><?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p><!-- google_ad_section_end -->
			</div>
		</article>
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
</div>
	<?php get_footer(); ?>