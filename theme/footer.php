<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the `#content` element and all content thereafter.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gnws
 */

?>
<footer class="bg-[#25262C] flex flex-col items-center py-6 max-sm:hidden">
	<div class="flex mb-5 gap-[50px] w-fit">
		<a href="/">
			<img alt="cdcSVG" loading="lazy" class="h-[70px]"
				src="<?php echo get_stylesheet_directory_uri() ?>/assets/svg/logo.svg" />
		</a>
		<a href="#" class="text-[#555861]"><?php echo svg('facebook', '45', '45') ?></a>
		<a href="#" class="text-[#555861]"><?php echo svg('youtube', '45', '45') ?></a>
		<a href="#" class="text-[#555861]"><?php echo svg('tiktok', '45', '45') ?></a>
		<a href="#" class="text-[#555861]"><?php echo svg('telegram', '45', '45') ?></a>
		<a href="#" class="text-[#555861]"><?php echo svg('instagram', '45', '45') ?></a>
	</div>
	<div class="flex gap-[86px] mb-7">
		<a href="#" class="text-white text-lg">About Us</a>
		<a href="#" class="text-white text-lg">User Agreement</a>
		<a href="#" class="text-white text-lg">Commitment from Cricket.top</a>
		<a href="#" class="text-white text-lg">Privacy Policy</a>
		<a href="#" class="text-white text-lg">Contact</a>
	</div>
	<div class="">
		<a href="#" class="text-white text-xs">Copyright @2025 Cricket.top - All rights reserved</a>
	</div>
</footer>
<!-- <div
	class="back-to-top fixed bottom-14 right-7 w-10 h-10 rounded-full m-auto bg-slate-200  cursor-pointer transition-all duration-500 hover:bg-primary text-primary hover:text-white">
	<?php echo svg('back-top', '20', '20') ?>
</div> -->
<?php wp_footer(); ?>

</body>

</html>