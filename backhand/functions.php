<?php
if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
    ));

//remove new emoji code
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );


global $wp_query;

//adds paginated links
$big = 999999999; // need an unlikely integer
$translated = __( 'Page', 'mytextdomain' ); // Supply translatable string

echo paginate_links( array(
	'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
	'format' => '?paged=%#%',
	'show_all' => true,
	'current' => max( 1, get_query_var('paged') ),
	'total' => $wp_query->max_num_pages,
        'before_page_number' => '<span class="screen-reader-text">'.$translated.' </span>'
) );

//adds a custom image for sharing
function jeherve_custom_image( $media, $post_id, $args ) {
    if ( $media ) {
        return $media;
    } else {
        $permalink = get_permalink( $post_id );
        $url = apply_filters( 'jetpack_photon_url', 'http://www.backhandstories.com/wp-content/uploads/2016/07/fb_default.png' );
     
        return array( array(
            'type'  => 'image',
            'from'  => 'custom_fallback',
            'src'   => esc_url( $url ),
            'href'  => $permalink,
        ) );
    }
}
add_filter( 'jetpack_images_get_images', 'jeherve_custom_image', 10, 3 );

//adds a custom og & twitter description for non-post pages
function tweakjp_custom_twitter_site( $og_tags ) {
    if ( !(is_single()) ) {
    $og_tags['twitter:description'] = 'Backhand Stories is a creative writing blog that publishes new short stories, flash fiction, non-fiction and essays by new and unpublished writers. Submit your own short story!';
    $og_tags['twitter:card'] = 'summary';
    $og_tags['twitter:title'] = 'Backhand Stories. The Creative Writing Blog.';
    return $og_tags;
} else {
    return $og_tags;
}
}
add_filter( 'jetpack_open_graph_tags', 'tweakjp_custom_twitter_site', 11 );

//removes anchor in article page where more link is
function remove_more_link_scroll( $link ) {
    $link = preg_replace( '|#more-[0-9]+|', '', $link );
    return $link;
}
add_filter( 'the_content_more_link', 'remove_more_link_scroll' );


//Insert ads after second paragraph of single post content.

add_filter( 'the_content', 'prefix_insert_post_ads' );

function prefix_insert_post_ads( $content ) {
    
    $ad_code = '<div class="content_ad">
        <p>Content continues after advertisement</p>
            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <!-- content_body-->
            <ins class="adsbygoogle"
            style="display:block"
            data-ad-client="ca-pub-3583480902555622"
            data-ad-slot="6749575955"
            data-ad-format="auto"></ins>
            <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        </div>';

    if ( is_single() && ! is_admin() ) {
        return prefix_insert_after_paragraph( $ad_code, 1, $content );
    }
    
    return $content;
}
 
// Parent Function that makes the magic happen
 
function prefix_insert_after_paragraph( $insertion, $paragraph_id, $content ) {
    $closing_p = '</p>';
    $paragraphs = explode( $closing_p, $content );
    foreach ($paragraphs as $index => $paragraph) {

        if ( trim( $paragraph ) ) {
            $paragraphs[$index] .= $closing_p;
        }

        if ( $paragraph_id == $index + 1 ) {
            $paragraphs[$index] .= $insertion;
        }
    }
    
    return implode( '', $paragraphs );
}

/**
 * Filter the "read more" excerpt string link to the post.
 *
 * @param string $more "Read more" excerpt string.
 * @return string (Maybe) modified "read more" excerpt string.
 */
function wpdocs_excerpt_more( $more ) {
    return sprintf( '<a class="read-more" href="%1$s">%2$s</a>',
        get_permalink( get_the_ID() ),
        __( '... Continue >>', 'textdomain' )
    );
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

/**
 * Filter the except length to 20 characters.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
    return 120;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

 ?>
