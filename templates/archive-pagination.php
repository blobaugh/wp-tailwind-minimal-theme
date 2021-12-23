<?php

global $wp_query;
$paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;

if ( $wp_query->max_num_pages > 1 ) :

	?>
	<div id="pagination" class="flex w-full md:3/4 lg:w-2/3 mx-auto px-16 text-center">
	<?php
	theme_paginate_links();



	?>
	
</div>
	<?php
endif;
