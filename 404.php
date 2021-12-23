<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Freeshifter
 */

get_header(); ?>
<img src="https://source.unsplash.com/1600x900/?lost" class="w-full" />
<div class="bg-white p-5 md:p-16 lg:p-28">
	
	<section class="container mx-auto relative z-10">
		<h1 class="text-4xl mb-4">Not Found</h1>
		<p>Hrm. It would seem you attempted to access a page that does not exist.</p>
		<p class="mt-4">Maybe you could try searching again?</p>
	</section>
</div>

<?php
get_footer();
