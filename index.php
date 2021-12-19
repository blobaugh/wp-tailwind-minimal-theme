<?php
/**
 * Default single page tempalte
 */

 get_header();
?>

<?php

if ( have_posts() ) {

	$i = 1;


	while ( have_posts() ) {
		the_post();

		if ( has_post_format( 'image' ) ) {
			echo get_template_part( 'templates/single', 'image' );
			continue;
		}

		echo get_template_part( 'templates/single', 'article' );
	}
}
?>

 <?php
	get_footer();
