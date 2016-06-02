<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">

<input type="image" src="<?php bloginfo('template_url'); ?>/images/searchButton.gif" id="searchsubmit" value="Search"  alt="search"  /><br />
<input type="text" value="<?php the_search_query(); ?>" name="s" id="s" />

</form>
