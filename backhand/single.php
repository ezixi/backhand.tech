<?php get_header(); ?>
<div class="container">
    <div class="row">
        <div class="col-md-10 content">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            
            <article class="post" id="post-<?php the_ID(); ?>">
            <div class="row title">
                <div class="col-md-6">
                    <h2><a href="<?php echo get_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                </div>
                <div id="sharing" class="col-md-6"></div>
            </div>
                <div class="entry">
                    <?php
                        $post_id = get_the_ID();
                        $thumbnail_id = 548;
                        if ( has_post_thumbnail() )
                            the_post_thumbnail( 'full', array( 'class' => 'default_image_hide' ) );
                        else
                            set_post_thumbnail( $post_id, $thumbnail_id);
                    ?>
                    <?php the_content('<p class="serif">Read the rest of this story &raquo;</p>'); ?>
                    <?php $ad_name = "content_end"; $slot = "2598577953"; $class = "content_ad"; $format = 'horizontal'; include (TEMPLATEPATH . "/ads.php"); ?>
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