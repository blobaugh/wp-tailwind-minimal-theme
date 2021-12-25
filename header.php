<!DOCTYPE html>
<html lang="en">
		<head>
					<meta charset="UTF-8">
						<meta name="viewport" content="width=device-width, initial-scale=1.0">
							<title>Ben's Tailwind Playground</title>
							<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" integrity="sha512-wnea99uKIC3TJF7v4eKk4Y+lMz2Mklv18+r4na2Gn1abDRPPOeef95xTzdwGD9e6zXJBteMIhZ1+68QC5byJZw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		<?php wp_head(); ?>
			<style>
			 #commentform textarea {
				 width: 100%;
			 }
			 #commentform input {
				 width: 100%;
			 }

			 p {
				 margin-top: 10px;
			 }

			 img.alignright {float:right; margin:0 0 1em 1em}
			img.alignleft {float:left; margin:0 1em 1em 0}
			img.aligncenter {display: block; margin-left: auto; margin-right: auto}
			a img.alignright {float:right; margin:0 0 1em 1em}
			a img.alignleft {float:left; margin:0 1em 1em 0}
			a img.aligncenter {display: block; margin-left: auto; margin-right: auto}

			.header-menu ul li {
				position: relative;
			}
			.header-menu ul li>a:not(:only-child):after {
				color: #fff;
				content: ' ▾';
			}
			.header-menu ul li ul {
				display: none;
				position: absolute;
				text-align: left;
				left: 0;
				z-index: 99999;
				width: 200px;
				box-shadow: 0px 3px 3px rgba(0,0,0,0.2);
				padding: 5px 5px;
				line-height: 1.8;
				background-color: rgba(55,65,81,var(--tw-bg-opacity));
			}
			.header-menu ul li:hover > ul {
				display: block;
			}
			.current-menu-item, .current-menu-ancestor {
				border-bottom:1px solid #fff;
				padding-bottom: 1px;
			} 
			</style>

			
						</head>
		<body class="bg-gray-100">


				<!-- START HEADER AREA -->
				<div class="flex flex-col md:h-48 bg-gray-700 pt-10 w-full shadow-md">
						<header class="flex flex-col md:flex-row w-full md:w-3/4 lg:w-2/3 mx-auto items-center text-gray-50">
								<div class="flex-grow md:text-left pr-5">
										<a href="/" class="w-full"><h1 class="text-3xl">Ben Lobaugh</h1></a>
								</div>

									<?php
									if ( has_nav_menu( 'header' ) ) {
										wp_nav_menu(
											[
												'theme_location' => 'header',
												'container' => 'nav',
												'menu_id' => 'header-menu',
												'container_class' => 'header-menu rflex-grow hidden md:block text-center py-8 md:py-0',
												'menu_class' => 'flex flex-col md:flex-row space-y-5 md:space-y-0 md:space-x-5 justify-between',
											]
										);
									}
									?>

								<a id="navbar-burger" class="text-center md:hidden py-5" href="#"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" /></svg></a>

								<!-- Script that powers the hamburger icon -->
								<script>
										const btn = document.querySelector("#navbar-burger");
										const menu = document.querySelector(".header-menu");

										btn.addEventListener("click", () => {
												menu.classList.toggle("hidden");
										});
								</script>

						</header>
				</div>
				<!-- END HEADER AREA -->

				<main id="contents" class="flex flex-col w-full md:3/4 lg:w-2/3 mx-auto md:-mt-14 lg:-mt0=-20 ">
