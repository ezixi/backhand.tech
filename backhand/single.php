<?php get_header(); ?>
<div class="container">
	<div class="row">
		<div class="col-md-10 content">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
			<article class="post" id="post-<?php the_ID(); ?>">
				<h2><a href="<?php echo get_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				<div class="entry">
						<?php include (TEMPLATEPATH . "/ads.php"); ?>
				<?php the_content('<p class="serif">Read the rest of this story &raquo;</p>'); ?>
		<div class="in-page ad">
						<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
						<!-- main square -->
						<ins class="adsbygoogle"
						style="display:block"
						data-ad-client="ca-pub-3583480902555622"
						data-ad-slot="9254863950"
						data-ad-format="auto"></ins>
						<script>
						(adsbygoogle = window.adsbygoogle || []).push({});
						</script>
						</div>
					<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
					<?php the_tags( '<p>Tags: ', ', ', '</p>'); ?>
				</div>
				
			</article>
			<?php comments_template(); ?>
			<?php endwhile; else: ?>
			<p>Sorry, no posts matched your criteria.</p>
			<?php endif; ?>
		</div>
		<div class="col-md-2" id="sidebar">
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>