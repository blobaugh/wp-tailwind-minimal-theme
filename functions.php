<?php

function theme_add_theme_support() {
	add_theme_support( 'post-formats', [ 'image', 'aside', 'gallery', 'link' ] );
	add_theme_support( 'post-thumbnails' );
}

add_action( 'after_setup_theme', 'theme_add_theme_support' );

function theme_register_nav_menu() {
	register_nav_menu( 'header', __( 'Header Menu' ) );
}
add_action( 'init', 'theme_register_nav_menu' );


/**
 * Pagination for archive, taxonomy, category, tag and search results pages
 *
 * @global $wp_query https://codex.wordpress.org/Class_Reference/WP_Query
 * @return Prints the HTML for the pagination if a template is $paged
 */
function base_pagination() {
    global $wp_query;
var_dump( $wp_query->max_num_pages );
    $big = 999999999; // This needs to be an unlikely integer

    // For more options and info view the docs for paginate_links()
    // https://codex.wordpress.org/Function_Reference/paginate_links
    $paginate_links = paginate_links( array(
        'base' => str_replace( $big, '%#%', get_pagenum_link($big) ),
        'current' => max( 1, get_query_var('paged') ),
        'total' => $wp_query->max_num_pages,
        'mid_size' => 5
    ) );

    // Display the pagination if more than one page is found
    if ( $paginate_links ) {
        echo '<div class="pagination">';
        echo $paginate_links;
        echo '</div><!--// end .pagination -->';
    }
}