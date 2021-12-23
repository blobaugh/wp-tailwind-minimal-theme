<?php
/**
 * The template for displaying comments.
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link    https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Freeshifter
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}

if ( have_comments() ) : ?>
	<h2 class="comments-title">
		<?php
		printf(
			esc_html( _nx( 'One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'wp-tailwind' ) ),
			number_format_i18n( get_comments_number() ),
			'<span>' . get_the_title() . '</span>'
		);
		?>
	</h2>

	<ol class="comment-list">
		<?php
		wp_list_comments(
			[
				'style'      => 'ol',
				'short_ping' => true,
				'callback'   => 'theme_comment_template',
				'per_page'   => -1,
			]
		);
		?>
	</ol>

	<?php
endif;

comment_form(
	[
		'class_container'    => 'comment-inner bg-gray-200 p-8 rounded-2xl',
		'class_form'         => 'w-full',
		'title_reply_before' => '<div class="clear-both mb-4 font-bold">',
		'title_reply_after'  => '</div>',
		'class_submit'       => ' p-4 font-bold my-4 rounded-md',
	]
);
