<div class="article-tags pt-16 space-y-4 space-x-4">
	<?php
		$tags = wp_get_post_tags( $post->ID ); // this is the adjustment, all the rest is bhlarsen

	foreach ( $tags as $tag ) {
		$tag_link = get_tag_link( $tag->term_id );

		echo "<a href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug} bg-gray-200 px-4 py-2 rounded-full'>{$tag->name}</a>";
	}
	?>
	
</div>
