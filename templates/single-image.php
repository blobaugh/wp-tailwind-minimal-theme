<?php

$article_classes = '';

if ( ! is_singular() ) {
	$article_classes .= 'mb-28';
}
?>

<article class="bg-white shadow-2xl <?php echo $article_classes; ?>">
	<!-- Featured Image -->
	<?php if ( has_post_thumbnail() ) { ?>
		<div class="flex flex-col items-center justify-center bg-gray-900">  
			<?php
				if ( is_singular() ) { ?>               
					<a href="<?php echo get_the_post_thumbnail_url( null, 'full' ); ?>" class="w-full">
			<?php } else { ?>
					<a href="<?php echo get_post_permalink(); ?>" class="w-full">
				<?php } ?>
				<img src="<?php echo get_the_post_thumbnail_url( null, 'full' ); ?>" class="w-full" />
			</a>
		</div>
	<?php } ?>
	<!-- End Featured Image -->
</article>
