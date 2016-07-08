<?php get_header(); ?>
<div class="container">
  <div class="row">
        <div class="col-md-3">
          <img src="<?php bloginfo('template_url'); ?>/images/bin.jpg" alt="trash can for broken dreams" class="img-responsive">
        </div>
        <div class="col-md-7">
        <h2>Sorry, we couldn't find that page.</h2>
          <p>It must've been thrown in the rubbish bin along with all the other heartbroken drafts, bad ideas and drunken three-in-the-morning scrawls.</p>
          <p><em>Try searching...?</em></p>
          <?php include (TEMPLATEPATH . '/searchform.php'); ?>
        </div>

      <div class="col-md-2" id="sidebar">
        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
</div>
  <?php get_footer(); ?>