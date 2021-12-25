<?php

$article_classes = '';

if ( ! is_singular() ) {
	$article_classes .= 'mb-28';
}
?>

<article class="bg-white shadow-2xl rounded-b-lg <?php echo $article_classes; ?>">
	<!-- Featured Image -->
	<?php if ( has_post_thumbnail() ) { ?>
		<div class="flex flex-col items-center justify-center bg-gray-900">                 
			<a href="<?php echo get_post_permalink(); ?>" class="w-full">
				<img src="<?php echo get_the_post_thumbnail_url( null, 'full' ); ?>" class="w-full" />
			</a>
		</div>
	<?php } ?>
	<!-- End Featured Image -->

	<!-- Article Content -->
	<div class="bg-white p-5 md:p-16 lg:p-28 rounded-b-lg">

		<?php if ( is_user_logged_in() ) { ?>
			<p class="p-6 bg-red-50 mb-10">
				<strong class="mb-10">Article Actions </strong> 
				<br/><a href="<?php echo get_edit_post_link(); ?>">EDIT</a>
			</p>
		<?php } ?>
		<a href="<?php echo get_post_permalink(); ?>">
			<h1 class="text-5xl uppercase mb-5"><?php the_title(); ?></h1>
		</a>
				
		<div id="article-meta" class="mb-12 text-gray-400 uppercase">
			<?php
			if ( ! is_page() ) {
				echo get_the_date(); }
			?>
		</div>

		<div id="article-content" class="leading-loose text-gray-800 tracking-wider">
				<?php
				if ( is_home() || is_category() || is_archive() ) {
					the_excerpt();
				} else {
					the_content();
				}
				?>
		</div>

		<?php echo get_template_part( 'templates/single', 'tags' ); ?>

		<?php
		if ( ! is_page() ) {
			?>
			<div class="article-comments mt-12"><?php comments_template(); ?></div> <?php } ?>
				
	</div>
	<!-- End Article Content -->
</article>
