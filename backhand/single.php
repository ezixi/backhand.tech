<?php get_header(); ?>
<div class="row">
	<article class="col-md-10">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<div class="post" id="post-<?php the_ID(); ?>">
			<h2><a href="<?php echo get_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
			<div class="entry">
				<?php the_content('<p class="serif">Read the rest of this story &raquo;</p>'); ?>
				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
				<?php the_tags( '<p>Tags: ', ', ', '</p>'); ?>
			</div>
			
		</div>
		<?php comments_template(); ?>
		<?php endwhile; else: ?>
		<p>Sorry, no posts matched your criteria.</p>
		<?php endif; ?>
		<div class="navigation">
			
			<p>Previous: <?php previous_post_link('&laquo; %link') ?></p>
			
			<p>Next: <?php next_post_link('%link &raquo;') ?></p>
		</div>
	</article>
	<div class="col-md-2">
		<?php get_sidebar(); ?>
	</div>
	<?php get_footer(); ?>