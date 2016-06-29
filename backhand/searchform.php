<form  class="navbar-form navbar-right" role="search" method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
    <div class="input-group">
        <input type="text" class="form-control" placeholder="Search for..." value="<?php the_search_query(); ?>" name="s" id="s">
        <span class="input-group-btn">
        <button type="submit" class="btn btn-default">Go</button>
        </span>
    </div>
</form>