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

<body <?php body_class('font-body font-light text-textColor bg-[#F1F5F9]'); ?>>

	<?php wp_body_open(); ?>

	<header class="sticky top-0 flex bg-primary text-white z-50 max-sm:hidden">
		<div class="container flex gap-10 w-full items-center justify-center h-full">

			<?php
			$custom_logo_id = get_theme_mod('custom_logo');
			$image = wp_get_attachment_image_src($custom_logo_id, 'full');

			if ($image) {
				$site_url = get_bloginfo('url');
				$site_description = get_bloginfo('description');
				$logo_url = $image[0];
				?>
				<a href="<?php echo esc_url($site_url); ?>" title="<?php echo esc_attr($site_description); ?>"
					class="table-cell align-middle">
					<img src="<?php echo esc_url($logo_url); ?>" alt="Logo" class="h-[70px] object-cover">
				</a>
				<?php
			}
			?>

			<nav class="flex h-full items-center justify-center">
				<ol class="grid grid-cols-4 gap-[30px] h-full">
					<li
						class="w-full flex relative text-xs py-[13.5px] px-[21p.5px] flex-col items-center h-auto min-w-20 z-[99999] md:cursor-pointer transition ease-in duration-150 group [&:not(.active)]:after:bg-transparent [&:not(.active)]:bg-transparent bg-[#5C5C5C4D] hover:!bg-[#5C5C5C4D] after:content-[''] after:block after:absolute after:bottom-0 after:w-full after:h-[2px] after:bg-[#DF6E26] hover:after:!bg-[#DF6E26] active">
						<a href="/">
							<div class="grid justify-items-center">
								<div class="flex items-center justify-center flex-col">
									<?php echo svg('home', '30', '30') ?>
									<span class="text-xl font-semibold leading-4 text-center mt-[3px]">Home</span>
								</div>
							</div>
						</a>
					</li>

					<li
						class="w-full flex relative text-xs py-[13.5px] px-1 flex-col items-center h-auto min-w-20 z-[99999] md:cursor-pointer transition ease-in duration-150 group [&:not(.active)]:after:bg-transparent [&:not(.active)]:bg-transparent bg-[#5C5C5C4D] hover:!bg-[#5C5C5C4D] after:content-[''] after:block after:absolute after:bottom-0 after:w-full after:h-[2px] after:bg-[#DF6E26] hover:after:!bg-[#DF6E26]">
						<a href="/schedule">
							<div class="grid justify-items-center">
								<div class="flex items-center justify-center flex-col">
									<?php echo svg('schedule', '30', '30') ?>
									<span class="text-xl font-semibold leading-4 text-center mt-[3px]">Schedule</span>
								</div>
							</div>
						</a>
					</li>

					<li
						class="w-full flex relative text-xs py-[13.5px] px-1 flex-col items-center h-auto min-w-20 z-[99999] md:cursor-pointer transition ease-in duration-150 group [&:not(.active)]:after:bg-transparent [&:not(.active)]:bg-transparent bg-[#5C5C5C4D] hover:!bg-[#5C5C5C4D] after:content-[''] after:block after:absolute after:bottom-0 after:w-full after:h-[2px] after:bg-[#DF6E26] hover:after:!bg-[#DF6E26]">
						<a href="/ipl">
							<div class="grid justify-items-center">
								<div class="flex items-center justify-center flex-col">
									<?php echo svg('ipl', '30', '30') ?>
									<span class="text-xl font-semibold leading-4 text-center mt-[3px]">IPL</span>
								</div>
							</div>
						</a>
					</li>

					<li
						class="w-full flex relative text-xs py-[13.5px] px-1 flex-col items-center h-auto min-w-20 z-[99999] md:cursor-pointer transition ease-in duration-150 group [&:not(.active)]:after:bg-transparent [&:not(.active)]:bg-transparent bg-[#5C5C5C4D] hover:!bg-[#5C5C5C4D] after:content-[''] after:block after:absolute after:bottom-0 after:w-full after:h-[2px] after:bg-[#DF6E26] hover:after:!bg-[#DF6E26]">
						<a href="/news">
							<div class="grid justify-items-center">
								<div class="flex items-center justify-center flex-col">
									<?php echo svg('news', '30', '30') ?>
									<span class="text-xl font-semibold leading-4 text-center mt-[3px]">News</span>
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

	<div class="fixed bottom-0 bg-[#1489EC] text-white md:hidden z-50 w-full">
		<nav class="flex h-full items-center justify-center">
			<ol class="grid grid-cols-4 gap-[10px] h-full">
				<li
					class="w-full flex relative text-xs py-[13.5px] px-[21p.5px] flex-col items-center h-auto min-w-20 z-[99999] md:cursor-pointer transition ease-in duration-150 group [&:not(.active)]:after:bg-transparent [&:not(.active)]:bg-transparent bg-[#5C5C5C4D] hover:!bg-[#5C5C5C4D] after:content-[''] after:block after:absolute after:bottom-0 after:w-full after:h-[2px] after:bg-[#DF6E26] hover:after:!bg-[#DF6E26] active">
					<a href="/">
						<div class="grid justify-items-center">
							<div class="flex items-center justify-center flex-col">
								<?php echo svg('home', '30', '30') ?>
								<span class="text-xl font-semibold leading-4 text-center mt-[3px]">Home</span>
							</div>
						</div>
					</a>
				</li>

				<li
					class="w-full flex relative text-xs py-[13.5px] px-1 flex-col items-center h-auto min-w-20 z-[99999] md:cursor-pointer transition ease-in duration-150 group [&:not(.active)]:after:bg-transparent [&:not(.active)]:bg-transparent bg-[#5C5C5C4D] hover:!bg-[#5C5C5C4D] after:content-[''] after:block after:absolute after:bottom-0 after:w-full after:h-[2px] after:bg-[#DF6E26] hover:after:!bg-[#DF6E26]">
					<a href="/schedule">
						<div class="grid justify-items-center">
							<div class="flex items-center justify-center flex-col">
								<?php echo svg('schedule', '30', '30') ?>
								<span class="text-xl font-semibold leading-4 text-center mt-[3px]">Schedule</span>
							</div>
						</div>
					</a>
				</li>

				<li
					class="w-full flex relative text-xs py-[13.5px] px-1 flex-col items-center h-auto min-w-20 z-[99999] md:cursor-pointer transition ease-in duration-150 group [&:not(.active)]:after:bg-transparent [&:not(.active)]:bg-transparent bg-[#5C5C5C4D] hover:!bg-[#5C5C5C4D] after:content-[''] after:block after:absolute after:bottom-0 after:w-full after:h-[2px] after:bg-[#DF6E26] hover:after:!bg-[#DF6E26]">
					<a href="/ipl">
						<div class="grid justify-items-center">
							<div class="flex items-center justify-center flex-col">
								<?php echo svg('ipl', '30', '30') ?>
								<span class="text-xl font-semibold leading-4 text-center mt-[3px]">IPL</span>
							</div>
						</div>
					</a>
				</li>

				<li
					class="w-full flex relative text-xs py-[13.5px] px-1 flex-col items-center h-auto min-w-20 z-[99999] md:cursor-pointer transition ease-in duration-150 group [&:not(.active)]:after:bg-transparent [&:not(.active)]:bg-transparent bg-[#5C5C5C4D] hover:!bg-[#5C5C5C4D] after:content-[''] after:block after:absolute after:bottom-0 after:w-full after:h-[2px] after:bg-[#DF6E26] hover:after:!bg-[#DF6E26]">
					<a href="/news">
						<div class="grid justify-items-center">
							<div class="flex items-center justify-center flex-col">
								<?php echo svg('news', '30', '30') ?>
								<span class="text-xl font-semibold leading-4 text-center mt-[3px]">News</span>
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
			<a href="#"><?php echo svg('upp', '30', '30') ?></a>
			<a href="#"><?php echo svg('dl', '30', '30') ?></a>
			<a href="#"><?php echo svg('question', '30', '30') ?></a>
			<a href="#"><?php echo svg('contact', '30', '30') ?></a>
		</div>
	</nav>