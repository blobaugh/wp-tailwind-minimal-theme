<?php

/**
 * Add theme features.
 */
add_action(
	'after_setup_theme',
	function() {

		// Add the format types.
		add_theme_support( 'post-formats', [ 'image', 'aside', 'gallery', 'link' ] );

		// Let WordPress manage the document title.
		add_theme_support( 'title-tag' );

		// Enable support for Post Thumbnails on posts and pages.
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menu( 'header', __( 'Header Menu' ) );

		add_theme_support( 'automatic-feed-links' );
	}
);


function theme_enqueue_scripts() {
	wp_enqueue_style('theme_style', get_theme_file_uri('assets/css/main.min.css'));
	wp_dequeue_style( 'wp-block-library' );
}
add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');

/**
 * Comment output template.
 */
function theme_comment_template( $comment, $args, $depth ) {
	if ( in_array( $comment->comment_type, [ 'pingback', 'trackback' ] ) ) { ?>
		<li <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
				<?php __( 'Pingback:', 'lovecraft' ); ?> <?php comment_author_link(); ?> <?php edit_comment_link( __( 'Edit', 'lovecraft' ), '<span class="edit-link">', '</span>' ); ?>
		</li>

		<?php
	} else {
		global $post;

		$class_depth = '';

		if ( $depth > 1 ) {
			$class_depth = 'pl-24';
		}
		?>

		<li <?php comment_class( [ 'flex', 'flex-row', 'gap-4', 'm-8', 'tracking-wide', $class_depth ] ); ?> id="li-comment-<?php comment_ID(); ?>">
			<div class="flex-none">
				<?php echo get_avatar( $comment, 96, '', '', [ 'class' => 'rounded-full' ] ); ?>
			</div>

			<div class="comment-inner bg-gray-200 flex-grow p-4 rounded-2xl">
				<div class="comment-header">
						<span class="font-bold"><?php echo get_comment_author_link(); ?></span>
						<span class="text-gray-500 text-xs">(<?php echo get_comment_date( get_option( 'date_format' ) ); ?>)</span>
				</div>

				<div class="comment-content py-4">
						<?php comment_text(); ?>
				</div>
			</div>
		</li>
		<?php
	}
}

/*
 * Disable emojis.
 *
 * There have been security issues, plus it simply provides better
 * performance not to load unecessary core crap all the time.
 */
function theme_remove_emoji() {
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );

	// Remove from TinyMCE
	add_filter( 'tiny_mce_plugins', 'theme_remove_tinymce_emoji' );
}
add_action( 'init', 'theme_remove_emoji' );

/**
 * Filter out the tinymce emoji plugin.
 */
function theme_remove_tinymce_emoji( $plugins ) {

	if ( ! is_array( $plugins ) ) {
			return [];
	}

	return array_diff( $plugins, [ 'wpemoji' ] );
}

// Remove xmlrpc
remove_action( 'wp_head', 'rsd_link' );

// Remove Live Writer config manifest
remove_action( 'wp_head', 'wlwmanifest_link' );

// Remove the REST API lines from the HTML Header
remove_action( 'wp_head', 'rest_output_link_wp_head', 10 );
remove_action( 'wp_head', 'wp_oembed_add_discovery_links', 10 );

// Remove the REST API endpoint.
remove_action( 'rest_api_init', 'wp_oembed_register_route' );

// Don't filter oEmbed results.
remove_action( 'template_redirect', 'rest_output_link_header', 11 );

// Remove oEmbed discovery links.
remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );

// Remove oEmbed-specific JavaScript from the front-end and back-end.
remove_action( 'wp_head', 'wp_oembed_add_host_js' );

// Remove generator tag that shows WordPress
remove_action( 'wp_head', 'wp_generator' );

// Automattic spy? Remove it in case.
add_filter( 'emoji_svg_url', '__return_false' );

function theme_excerpt_more( $more ) {
	global $post;
	return '<div class="pt-4"><a href="' . get_permalink( $post->ID ) . '"  class="bg-red-900 hover:bg-red-100 hover:border-red-900 rounded-lg p-4 text-gray-100 hover:text-black">Continue reading...</a></div>';
}
add_filter( 'excerpt_more', 'theme_excerpt_more' );


function theme_paginate_links() {
	global $wp_query, $wp_rewrite;

	// Setting up default values based on the current URL.
	$pagenum_link = html_entity_decode( get_pagenum_link() );
	$url_parts    = explode( '?', $pagenum_link );

	// Get max pages and current page out of the current query, if available.
	$total   = isset( $wp_query->max_num_pages ) ? $wp_query->max_num_pages : 1;
	$current = get_query_var( 'paged' ) ? (int) get_query_var( 'paged' ) : 1;

	// Append the format placeholder to the base URL.
	$pagenum_link = trailingslashit( $url_parts[0] ) . '%_%';

	// URL base depends on permalink settings.
	$format  = $wp_rewrite->using_index_permalinks() && ! strpos( $pagenum_link, 'index.php' ) ? 'index.php/' : '';
	$format .= $wp_rewrite->using_permalinks() ? user_trailingslashit( $wp_rewrite->pagination_base . '/%#%', 'paged' ) : '?paged=%#%';

	$args = [
		'base'               => $pagenum_link, // http://example.com/all_posts.php%_% : %_% is replaced by format (below).
		'format'             => $format, // ?page=%#% : %#% is replaced by the page number.
		'total'              => $total,
		'current'            => $current,
		'aria_current'       => 'page',
		'show_all'           => false,
		'prev_next'          => true,
		'prev_text'          => __( 'Previous' ),
		'next_text'          => __( 'Next' ),
		'end_size'           => 3,
		'mid_size'           => 1,
		'type'               => 'plain',
		'before_page_number' => '',
		'after_page_number'  => '',
	];

	$total = (int) $args['total'];
	if ( $total < 2 ) {
		return;
	}

	$current = (int) $args['current'];

	$r          = '';
	$page_links = [];
	$dots       = false;

	// START PREVIOUS LINK
		$link = str_replace( '%_%', 2 == $current ? '' : $args['format'], $args['base'] );
		$link = str_replace( '%#%', $current - 1, $link );

		$page_links[] = sprintf(
			'<span class="flex-1"><a class="prev page-numbers bg-gray-200 p-4 rounded-full" href="%s">%s</a></span>',
			/**
			 * Filters the paginated links for the given archive pages.
			 *
			 * @since 3.0.0
			 *
			 * @param string $link The paginated link URL.
			 */
			esc_url( $link ),
			$args['prev_text']
		);
	// END PREVIOUS LINK

	// START PAGE NUMBER LINKS
	$page_links[] = '<span class="flex-grow space-x-3 hidden md:block">';
	for ( $n = 1; $n <= $total; $n++ ) :

		if ( $n == $current ) :
			$page_links[] = sprintf(
				'<span aria-current="%s" class="page-numbers current bg-gray-200 p-2 rounded-full font-bold">%s</span>',
				esc_attr( $args['aria_current'] ),
				$args['before_page_number'] . number_format_i18n( $n ) . $args['after_page_number']
			);

			$dots = true;
		else :
			if ( $args['show_all']
					|| ( $n <= $args['end_size']
					|| ( $current && $n >= $current - $args['mid_size'] && $n <= $current + $args['mid_size'] )
					|| $n > $total - $args['end_size'] )
				) :
				$link = str_replace( '%_%', 1 == $n ? '' : $args['format'], $args['base'] );
				$link = str_replace( '%#%', $n, $link );
				if ( $add_args ) {
					$link = add_query_arg( $add_args, $link );
				}
				$link .= $args['add_fragment'];

				$page_links[] = sprintf(
					'<a class="page-numbers" href="%s">%s</a>',
					/** This filter is documented in wp-includes/general-template.php */
					esc_url( apply_filters( 'paginate_links', $link ) ),
					$args['before_page_number'] . number_format_i18n( $n ) . $args['after_page_number']
				);

				$dots = true;
			elseif ( $dots && ! $args['show_all'] ) :
				$page_links[] = '<span class="page-numbers dots">' . __( '&hellip;' ) . '</span>';

				$dots = false;
			endif;
		endif;
	endfor;
	$page_links[] = '</span>';
	// END PAGE NUMBER LINKS

	if ( $args['prev_next'] && $current && $current < $total ) :
		$link = str_replace( '%_%', $args['format'], $args['base'] );
		$link = str_replace( '%#%', $current + 1, $link );
		if ( $add_args ) {
			$link = add_query_arg( $add_args, $link );
		}
		$link .= $args['add_fragment'];

		$page_links[] = sprintf(
			'<span class="flex-1"><a class="next page-numbers bg-gray-200 p-4 rounded-full" href="%s">%s</a></span>',
			/** This filter is documented in wp-includes/general-template.php */
			esc_url( apply_filters( 'paginate_links', $link ) ),
			$args['next_text']
		);
	endif;

	switch ( $args['type'] ) {
		case 'array':
			return $page_links;

		case 'list':
			$r .= "<ul class='page-numbers'>\n\t<li>";
			$r .= implode( "</li>\n\t<li>", $page_links );
			$r .= "</li>\n</ul>\n";
			break;

		default:
			$r = implode( "\n", $page_links );
			break;
	}

	/**
	 * Filters the HTML output of paginated links for archives.
	 *
	 * @since 5.7.0
	 *
	 * @param string $r    HTML output.
	 * @param array  $args An array of arguments. See paginate_links()
	 *                     for information on accepted arguments.
	 */
	$r = apply_filters( 'paginate_links_output', $r, $args );

	echo $r;
}

/**
 * Retrieve an SVG from the assets folder
 */
function get_svg( $svg ) {
	// @todo sanitize $svg
	$file = get_template_directory() . "/assets/svg/$svg.svg";
	if ( file_exists( $file ) ) {
		require( $file );
		return;
	}
}
