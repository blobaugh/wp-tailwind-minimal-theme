<?php // <img src="https://source.unsplash.com/1600x900/?lost" class="w-full" /> ?>
<div class="bg-white p-5 md:p-16 lg:p-28">
	
	<section class="container mx-auto relative z-10">
		<h1 class="text-4xl mb-4">Not Found</h1>
		<p>Hrm. It would seem you attempted to access a page that does not exist.</p>
		<p class="mt-4">Maybe you could try searching below?</p>
        <div class="m-auto bg-gray-200 rounded-xl p-12 mt-8">
            <form role="search" method="get" id="searchform" class="searchform flex flex-row space-x-2" action="/">
				<input type="text" class="flex-grow" value="<?php echo ( !empty( $_GET['s'] ) ) ? esc_html( $_GET['s'] ): ''; ?>" name="s" id="s">
				<input type="submit" id="searchsubmit" value="Search">
			</form>
        </div>
	</section>
</div>