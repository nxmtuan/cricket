<?php
/**
 * The header for our theme
 *
 * This is the template that displays the `head` element and everything up
 * until the `#content` element.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gnws
 */

?><!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class('text-textColor'); ?>>

	<?php wp_body_open(); ?>

	<header class="flex bg-primary text-white">
		<div class="container flex gap-10 w-full items-center justify-center h-full">
			<a href="/">
				<img alt="cdcSVG" loading="lazy" class="h-[70px]"
					src="<?php echo get_stylesheet_directory_uri() ?>/assets/svg/logo.svg" />
			</a>

			<nav class="flex h-full items-center justify-center">
				<ol class="flex gap-10 h-full">
					<li
						class="flex relative text-xs py-4 flex-col items-center h-auto min-w-20 z-[99999] md:cursor-pointer transition ease-in duration-150 group px-2 bg-[#5C5C5C4D] hover:bg-[#5C5C5C4D] after:content-[''] after:block after:absolute after:bottom-0 after:w-full after:h-[2px] after:bg-[#DF6E26] hover:after:bg-[#DF6E26]">
						<a href="#">
							<div class="grid justify-items-center">
								<div class="flex items-center justify-center flex-col">
									<?php echo svg('home', '30', '30') ?>
									<span class="text-xl">Home</span>
								</div>
							</div>
						</a>
					</li>

					<li
						class="flex relative text-xs py-4 flex-col items-center h-auto min-w-20 z-[99999] md:cursor-pointer transition ease-in duration-150 group px-2 hover:bg-[#5C5C5C4D] after:content-[''] after:block after:absolute after:bottom-0 after:w-full after:h-[2px] after:bg-transparent hover:after:bg-[#DF6E26]">
						<a href="#">
							<div class="grid justify-items-center">
								<div class="flex items-center justify-center flex-col">
									<?php echo svg('schedule', '30', '30') ?>
									<span class="text-xl">Schedule</span>
								</div>
							</div>
						</a>
					</li>

					<li
						class="flex relative text-xs py-4 flex-col items-center h-auto min-w-20 z-[99999] md:cursor-pointer transition ease-in duration-150 group px-2 hover:bg-[#5C5C5C4D] after:content-[''] after:block after:absolute after:bottom-0 after:w-full after:h-[2px] after:bg-transparent hover:after:bg-[#DF6E26]">
						<a href="#">
							<div class="grid justify-items-center">
								<div class="flex items-center justify-center flex-col">
									<?php echo svg('home', '30', '30') ?>
									<span class="text-xl">IPL</span>
								</div>
							</div>
						</a>
					</li>

					<li
						class="flex relative text-xs py-4 flex-col items-center h-auto min-w-20 z-[99999] md:cursor-pointer transition ease-in duration-150 group px-2 hover:bg-[#5C5C5C4D] after:content-[''] after:block after:absolute after:bottom-0 after:w-full after:h-[2px] after:bg-transparent hover:after:bg-[#DF6E26]">
						<a href="#">
							<div class="grid justify-items-center">
								<div class="flex items-center justify-center flex-col">
									<?php echo svg('home', '30', '30') ?>
									<span class="text-xl">News</span>
								</div>
							</div>
						</a>
					</li>
				</ol>
			</nav>
		</div>
	</header>