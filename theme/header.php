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

	<header class="sticky top-0 flex bg-primary text-white z-50 max-sm:hidden">
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
									<?php echo svg('ipl', '30', '30') ?>
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
									<?php echo svg('news', '30', '30') ?>
									<span class="text-xl">News</span>
								</div>
							</div>
						</a>
					</li>
				</ol>
			</nav>
		</div>
	</header>

	<!-- Mobile header -->
	<div class="sticky top-0 py-2 pl-[18px] bg-[#F1F5F9] md:hidden z-50">
		<a href="/">
			<img alt="cdcSVG" loading="lazy" class="h-[70px]"
				src="<?php echo get_stylesheet_directory_uri() ?>/assets/svg/logo-mobile.svg" />
		</a>
	</div>
	<div class="fixed bottom-0 bg-primary text-white md:hidden z-50 w-full">
		<nav class="flex h-full items-center justify-center">
			<ol class="flex gap-[10px] h-full">
				<li
					class="flex relative text-xs py-4 flex-col items-center h-auto min-w-20 z-[99999] md:cursor-pointer transition ease-in duration-150 group px-2 bg-[#5C5C5C4D] hover:bg-[#5C5C5C4D] after:content-[''] after:block after:absolute after:bottom-0 after:w-full after:h-[2px] after:bg-[#DF6E26] hover:after:bg-[#DF6E26] max-sm:py-3">
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
					class="flex relative text-xs py-4 flex-col items-center h-auto min-w-20 z-[99999] md:cursor-pointer transition ease-in duration-150 group px-2 hover:bg-[#5C5C5C4D] after:content-[''] after:block after:absolute after:bottom-0 after:w-full after:h-[2px] after:bg-transparent hover:after:bg-[#DF6E26] max-sm:py-3">
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
					class="flex relative text-xs py-4 flex-col items-center h-auto min-w-20 z-[99999] md:cursor-pointer transition ease-in duration-150 group px-2 hover:bg-[#5C5C5C4D] after:content-[''] after:block after:absolute after:bottom-0 after:w-full after:h-[2px] after:bg-transparent hover:after:bg-[#DF6E26] max-sm:py-3">
					<a href="#">
						<div class="grid justify-items-center">
							<div class="flex items-center justify-center flex-col">
								<?php echo svg('ipl', '30', '30') ?>
								<span class="text-xl">IPL</span>
							</div>
						</div>
					</a>
				</li>

				<li
					class="flex relative text-xs py-4 flex-col items-center h-auto min-w-20 z-[99999] md:cursor-pointer transition ease-in duration-150 group px-2 hover:bg-[#5C5C5C4D] after:content-[''] after:block after:absolute after:bottom-0 after:w-full after:h-[2px] after:bg-transparent hover:after:bg-[#DF6E26] max-sm:py-3">
					<a href="#">
						<div class="grid justify-items-center">
							<div class="flex items-center justify-center flex-col">
								<?php echo svg('news', '30', '30') ?>
								<span class="text-xl">News</span>
							</div>
						</div>
					</a>
				</li>
			</ol>
		</nav>
	</div>

	<nav class="fixed right-0 top-1/2 -translate-y-1/2 max-sm:hidden">
		<div
			class="flex flex-col gap-[21px] p-4 bg-gradient-to-r from-[#5BACF2] to-[#1489EC] rounded-tl-[11px] rounded-br-[9px]">
			<div><?php echo svg('upp', '30', '30') ?></div>
			<div><?php echo svg('dl', '30', '30') ?></div>
			<div><?php echo svg('question', '30', '30') ?></div>
			<div><?php echo svg('contact', '30', '30') ?></div>
		</div>
	</nav>