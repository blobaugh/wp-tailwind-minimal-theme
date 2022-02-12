<?php
/**
 * Template Name: Nu Home
 */

get_header( 'page' );
?>

<!-- HOME ABOUT BEN -->
<div class="">
    <section class="bg-gray-50 pg-lib-item py-10 text-gray-500"> 
      <div data-pg-class-style="container" class="container mx-auto px-4 relative" data-pg-class-style-inline=""> 
	<div class="flex flex-wrap -mx-4  items-center" data-pg-class-style="column_parent" data-pg-class-style-inline=" items-center"> 
	  <div class="ml-auto p-4 w-full lg:order-2 lg:w-6/12"> 
		<img src="https://assets.lobaugh.net/ben.lobaugh.net/blobaugh_avatar_july_2021.jpg" />
	</div>                   
	  <div class="p-4 w-full lg:order-1 lg:w-5/12"> 
	    <h2 class="font-medium mb-1 text-red-800">About Ben</h2> 
	    <h3 class="font-bold mb-2 text-4xl text-gray-800">Howdy Friend!</h3> 
	    <p class="mb-10">
I have a passion for helping people succeed. Enjoy creative problem solving. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	    </p> 
	    <a href="/about" class="bg-red-900 hover:bg-red-100 hover:border-red-900 rounded-lg p-4 text-gray-100 hover:text-black">Read More</a> 
	  </div>                   
	</div>                 
      </div>               
    </section>
  </div>
<!-- ED HOME ABOUT BEN -->

<!-- WHAT I DO -->
<div class="">
                        <section class="bg-gray-50 pg-lib-item py-10 text-gray-500"> 
                            <div class="container mx-auto px-4"> 



			<div class="text-center -mx-4  items-center mb-4"> 
			    <div class="mx-auto px-4 w-full lg:w-8/12"> 
				<h2 class="font-medium mb-1 text-red-800">Passions</h2> 
				<h3 class="font-bold mb-1 text-3xl text-gray-900">Things I do with others</h3> 
				<p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vitae congue tortor.</p> 
			    </div>                                     
			</div>



                                <div class="flex flex-wrap -mx-4" data-pg-class-style="column_parent"> 
                                    <div class="w-full p-4  xl:w-3/12 sm:w-6/12"> 
                                        <a href="#" class="bg-gray-100 block group hover:bg-red-800 hover:text-white px-6 py-16 rounded-lg shadow-lg">
						<?php get_svg( 'icon_people' ); ?>
						<h4 class="font-bold group-hover:text-white mb-2 text-gray-900 text-xl">Growth & Leadership</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vitae congue tortor. </p>
					</a>
                                    </div>
 
                                    <div class="w-full p-4  xl:w-3/12 sm:w-6/12"> 
                                        <a href="#" class="bg-gray-100 block group hover:bg-red-800 hover:text-white px-6 py-16 rounded-lg shadow-lg">
						<?php get_svg( 'icon_rei' ); ?>
						<h4 class="font-bold group-hover:text-white mb-2 text-gray-900 text-xl">Real Estate Investing</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vitae congue tortor. </p>
					</a> 
                                    </div>      
                               
                                    <div class="w-full p-4  xl:w-3/12 sm:w-6/12"> 
                                        <a href="#" class="bg-gray-100 block group hover:bg-red-800 hover:text-white px-6 py-16 rounded-lg shadow-lg">
						<?php get_svg( 'icon_web_dev' ); ?>
						<h4 class="font-bold group-hover:text-white mb-2 text-gray-900 text-xl">Web Development</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vitae congue tortor. </p>
					</a>
                                    </div>
                                
                                    <div class="w-full p-4  xl:w-3/12 sm:w-6/12"> 
                                        <a href="#" class="bg-gray-100 block group hover:bg-red-800 hover:text-white px-6 py-16 rounded-lg shadow-lg">
						<?php get_svg( 'icon_giving_back' ); ?>
						<h4 class="font-bold group-hover:text-white mb-2 text-gray-900 text-xl">Giving Back</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vitae congue tortor.</p>
					</a> 
                                    </div>                                     
                                </div>                                 
                            </div>                             
                        </section>
                    </div>
<!-- END WHAT I DO -->

Next section can be hobbies (things i do for me)
<!--  BLOG CARDS -->
<div class="">
			<div class="relative max-w-7xl mx-auto">
				<div class="text-center">
					<h3 class="font-bold mb-1 text-3xl text-gray-900">
						From the blog
					</h3>
					<p class="mt-3 max-w-2xl mx-auto text-xl text-gray-500 sm:mt-4">
						Anything goes here! If you are looking for a particular topic, click it from above.
					</p>
				</div>
				<div class="mt-12 max-w-lg mx-auto grid gap-5 lg:grid-cols-3 lg:max-w-none">
					<div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
						<div class="flex-shrink-0">
							<img class="h-48 w-full object-cover" src="https://images.unsplash.com/photo-1496128858413-b36217c2ce36?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1679&amp;q=80" alt="">
						</div>
						<div class="flex-1 bg-white p-6 flex flex-col justify-between">
							<div class="flex-1">
								<p class="text-sm font-medium text-indigo-600">
								<a href="#" class="hover:underline">
									Article
								</a>
								</p>
								<a href="#" class="block mt-2">
									<p class="text-xl font-semibold text-gray-900">
									Boost your conversion rate
									</p>
									<p class="mt-3 text-base text-gray-500">
									Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto accusantium praesentium eius, ut atque fuga culpa, similique sequi cum eos quis dolorum.
									</p>
								</a>
							</div>
							<div class="mt-6 flex items-center">
								<div class="flex-shrink-0">
									<a href="#">
										<span class="sr-only">Roel Aufderehar</span>
										<img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt="">
									</a>
								</div>
								<div class="ml-3">
									<p class="text-sm font-medium text-gray-900">
									<a href="#" class="hover:underline">
										Roel Aufderehar
									</a>
									</p>
									<div class="flex space-x-1 text-sm text-gray-500">
										<time datetime="2020-03-16">
											Mar 16, 2020
										</time>
										<span aria-hidden="true">
											·
										</span>
										<span>
											6 min read
										</span>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
						<div class="flex-shrink-0">
							<img class="h-48 w-full object-cover" src="https://images.unsplash.com/photo-1547586696-ea22b4d4235d?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1679&amp;q=80" alt="">
						</div>
						<div class="flex-1 bg-white p-6 flex flex-col justify-between">
							<div class="flex-1">
								<p class="text-sm font-medium text-indigo-600">
								<a href="#" class="hover:underline">
									Video
								</a>
								</p>
								<a href="#" class="block mt-2">
									<p class="text-xl font-semibold text-gray-900">
									How to use search engine optimization to drive sales
									</p>
									<p class="mt-3 text-base text-gray-500">
									Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit facilis asperiores porro quaerat doloribus, eveniet dolore. Adipisci tempora aut inventore optio animi., tempore temporibus quo laudantium.
									</p>
								</a>
							</div>
							<div class="mt-6 flex items-center">
								<div class="flex-shrink-0">
									<a href="#">
										<span class="sr-only">Brenna Goyette</span>
										<img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt="">
									</a>
								</div>
								<div class="ml-3">
									<p class="text-sm font-medium text-gray-900">
									<a href="#" class="hover:underline">
										Brenna Goyette
									</a>
									</p>
									<div class="flex space-x-1 text-sm text-gray-500">
										<time datetime="2020-03-10">
											Mar 10, 2020
										</time>
										<span aria-hidden="true">
											·
										</span>
										<span>
											4 min read
										</span>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
						<div class="flex-shrink-0">
							<img class="h-48 w-full object-cover" src="https://images.unsplash.com/photo-1492724441997-5dc865305da7?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1679&amp;q=80" alt="">
						</div>
						<div class="flex-1 bg-white p-6 flex flex-col justify-between">
							<div class="flex-1">
								<p class="text-sm font-medium text-indigo-600">
								<a href="#" class="hover:underline">
									Case Study
								</a>
								</p>
								<a href="#" class="block mt-2">
									<p class="text-xl font-semibold text-gray-900">
									Improve your customer experience
									</p>
									<p class="mt-3 text-base text-gray-500">
									Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint harum rerum voluptatem quo recusandae magni placeat saepe molestiae, sed excepturi cumque corporis perferendis hic.
									</p>
								</a>
							</div>
							<div class="mt-6 flex items-center">
								<div class="flex-shrink-0">
									<a href="#">
										<span class="sr-only">Daniela Metz</span>
										<img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1487412720507-e7ab37603c6f?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt="">
									</a>
								</div>
								<div class="ml-3">
									<p class="text-sm font-medium text-gray-900">
									<a href="#" class="hover:underline">
										Daniela Metz
									</a>
									</p>
									<div class="flex space-x-1 text-sm text-gray-500">
										<time datetime="2020-02-12">
											Feb 12, 2020
										</time>
										<span aria-hidden="true">
											·
										</span>
										<span>
											11 min read
										</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
<!-- END BLOG CARDS -->
<?php
get_footer();
