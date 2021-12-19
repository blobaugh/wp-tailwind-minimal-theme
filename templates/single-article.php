<?php

$article_classes = '';

if ( ! is_singular() ) {
	$article_classes .= "mb-28";
}
?>

<article class="bg-white shadow-2xl <?php echo $article_classes; ?>">
	<!-- Featured Image -->
	<?php if ( has_post_thumbnail() ) { ?>
		<div class="flex flex-col items-center justify-center bg-gray-900">                 
			<a href="<?php echo get_post_permalink(); ?>" class="w-full">
				<img src="<?php echo get_the_post_thumbnail_url(); ?>" class="w-full" />
			</a>
		</div>
	<?php } ?>
	<!-- End Featured Image -->

	<!-- Article Content -->
	<div class="bg-white p-5 md:p-16 lg:p-28">

		<a href="<?php echo get_post_permalink(); ?>">
			<h1 class="text-5xl uppercase mb-5"><?php the_title(); ?></h1>
		</a>
				
		<div id="article-meta" class="mb-12 text-gray-400 uppercase"><?php echo get_the_date(); ?></div>

		<div id="article-content" class="leading-loose text-gray-800 tracking-wider">
				<?php the_content(); ?>
		</div>

		<?php echo get_template_part( 'templates/single', 'tags' ); ?>
	</div>
	<!-- End Article Content -->
</article>
