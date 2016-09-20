<?php get_header(); ?>
<div class="container" id="home">
<div class="jumbotron">
		<h2>Backhand Stories is a <strong>creative writing blog</strong> that publishes new <a href="<?php echo get_option('home'); ?>/fiction">short stories</a>, flash fiction, <a href="<?php echo get_option('home'); ?>/non-fiction">non-fiction</a> and <a href="<?php echo get_option('home'); ?>/essays">essays</a> by new and unpublished writers. <a id="submit"href="http://www.backhandstories.com/submission-guidelines/">Submit</a> your own short story!</h2>
	</div>
	<div class="row">
		<?php is_tag(); ?>
		<?php if (have_posts()) : ?>
		<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
		<?php /* If this is a category archive */ if (is_category()) { ?>
		<h2 class="pagetitle">Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category</h2>
		<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
		<h2 class="pagetitle">Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h2>
		<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		<h2 class="pagetitle">Archive for <?php the_time('F jS, Y'); ?></h2>
		<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<h2 class="pagetitle">Archive for <?php the_time('F, Y'); ?></h2>
		<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<h2 class="pagetitle">Archive for <?php the_time('Y'); ?></h2>
		<?php /* If this is an author archive */ } elseif (is_author()) { ?>
		<h2 class="pagetitle">Author Archive</h2>
		<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<h2 class="pagetitle">Blog Archives</h2>
		<?php } ?>
		<div class="col-md-4 lead ad">
			<style>
			.lead_ad { width: 320px; height: 100px; }
			@media(min-width: 768px) { .lead_ad { width: 728px; height: 90px; } }
			@media(min-width: 1001px) { .lead_ad { width: 300px; height: 600px; } }
			</style>
			<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
			<!-- indexes_lead -->
			<ins class="adsbygoogle lead_ad"
			style="display:inline-block"
			data-ad-client="ca-pub-3583480902555622"
			data-ad-slot="9254863950"></ins>
			<script>
			(adsbygoogle = window.adsbygoogle || []).push({});
			</script>
		</div>
		<?php $firstMarked = false; ?>
		<?php while (have_posts()) : the_post(); ?>
		<article class="post <?php echo !$firstMarked ? "col-md-8":"col-md-4";?> " id="post-<?php the_ID(); ?>">
			<h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
			<div class="entry">
				<?php the_excerpt(); ?>
			</div>
		</article>
		<?php $firstMarked = true;?>
		<?php endwhile; ?>
		<?php $ad_name = "indexes_end"; $slot = "3575783558"; $class = "col-md-4"; $format = "auto"; include (TEMPLATEPATH . "/ads.php"); ?>
		<?php else : ?>
		<h2 class="center">Not Found</h2>
		<?php include (TEMPLATEPATH . '/searchform.php'); ?>
		<?php endif; ?>
	</div>
	<div class="row">
		<nav class="pull-right">
			<ul class="pagination">
				<li>
					<?php echo paginate_links( $args ); ?>
				</li>
			</ul>
		</nav>
	</div>
</div>
</div>
<?php get_footer(); ?>