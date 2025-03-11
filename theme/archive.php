<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gnws
 */

get_header();
?>
<main class="news-page bg-[#F1F5F9] pb-20 max-sm:pb-[85px]">
	<section class="bg-white flex justify-center py-[15px] max-sm:bg-[#F1F5F9]">
		<div class="flex py-[10px] gap-[5px] max-sm:gap-[10px]">
			<div
				class="bg-secondary active [&:not(.active)]:bg-transparent [&:not(.active)]:text-black w-[84px] text-white px-[3px] text-center text-sm rounded-[10px] overflow-hidden max-sm:w-fit max-sm:px-[6px]">
				<a href="">All Matches</a>
			</div>
			<div
				class="bg-secondary [&:not(.active)]:bg-transparent [&:not(.active)]:text-black w-[84px] text-white px-[3px] text-center text-sm rounded-[10px] overflow-hidden max-sm:w-fit max-sm:px-[6px]">
				<a href="">ICT</a>
			</div>
			<div
				class="bg-secondary [&:not(.active)]:bg-transparent [&:not(.active)]:text-black w-[84px] text-white px-[3px] text-center text-sm rounded-[10px] overflow-hidden max-sm:w-fit max-sm:px-[6px]">
				<a href="">WPL</a>
			</div>
			<div
				class="bg-secondary [&:not(.active)]:bg-transparent [&:not(.active)]:text-black w-[84px] text-white px-[3px] text-center text-sm rounded-[10px] overflow-hidden max-sm:w-fit max-sm:px-[6px]">
				<a href="">IMLT</a>
			</div>
			<div
				class="bg-secondary [&:not(.active)]:bg-transparent [&:not(.active)]:text-black w-[84px] text-white px-[3px] text-center text-sm rounded-[10px] overflow-hidden max-sm:w-fit max-sm:px-[6px]">
				<a href="">RT</a>
			</div>
			<div
				class="bg-secondary [&:not(.active)]:bg-transparent [&:not(.active)]:text-black w-[84px] text-white px-[3px] text-center text-sm rounded-[10px] overflow-hidden max-sm:w-fit max-sm:px-[6px]">
				<a href="">TFT</a>
			</div>
		</div>
	</section>

	<!-- desktop -->
	<section
		class="container flex flex-col gap-[18px] bg-white p-[15px] mt-5 rounded-[14px] shadow mb-[15px] max-sm:hidden">

		<?php
		if (have_posts()) {
			$counter = 0; // Biến đếm để xác định bài viết đầu tiên
		
			while (have_posts()) {
				the_post();

				if ($counter == 0) { // Bài viết đầu tiên dùng post__item-big
					?>
					<div class="post__item-big">
						<a draggable="false" href="<?php the_permalink(); ?>">
							<div class="flex flex-col bg-white rounded overflow-hidden justify-around">
								<img src="<?php gnws_post_thumbnail_full() ?>" alt="<?php the_title(); ?>"
									class="w-full rounded-[10px] overflow-hidden" loading="lazy" draggable="false">
								<div class="flex flex-col justify-between w-full mt-[10px]">
									<div class="flex flex-col gap-[5px]">
										<div class="tracking-wider dark:text-white text-black font-bold"><?php the_title(); ?></div>
										<h2 class="mt-2 font-bold line-clamp-2 w-full md:text-sm text-xs leading-5 text-[#3F4B62]">
											<?php echo wp_trim_words(get_the_excerpt(), 30); ?>
										</h2>
									</div>
									<div class="text-xs flex flex-row justify-between text-[#8C98B0] mt-[10px]">
										<div>By: <?php the_author(); ?></div>
										<div><?php echo human_time_diff(get_the_time('U'), current_time('timestamp')) . ' ago'; ?>
										</div>
									</div>
								</div>
							</div>
						</a>
						<div class="w-full h-[15px] bg-[#8f8f8f] mt-[18px]"></div>
					</div>
					<?php
				} else { // Các bài viết còn lại dùng post__item
					?>
					<div class="post__item">
						<a draggable="false" href="<?php the_permalink(); ?>">
							<div class="flex gap-[15px] bg-white rounded justify-around">
								<img src="<?php gnws_post_thumbnail_full() ?>" alt="<?php the_title(); ?>"
									class="w-2/5 rounded-[10px] overflow-hidden" loading="lazy" draggable="false">
								<div class="w-3/5 flex flex-col justify-between py-2">
									<div class="">
										<div class="md:text-md tracking-wider dark:text-white text-black font-bold">
											<?php the_title(); ?>
										</div>
										<h2 class="line-clamp-3 lg:text-sm text-xs hidden lg:inline-flex leading-5 text-[#3F4B62]">
											<?php echo wp_trim_words(get_the_excerpt(), 30); ?>
										</h2>
									</div>
									<div class="text-xs flex flex-row justify-between text-[#8C98B0]">
										<div>By: <?php the_author(); ?></div>
										<div><?php echo human_time_diff(get_the_time('U'), current_time('timestamp')) . ' ago'; ?>
										</div>
									</div>
								</div>
							</div>
						</a>
						<div class="w-2/5 h-[15px] bg-[#8f8f8f] mt-[18px]"></div>
					</div>
					<?php
				}
				$counter++; // Tăng biến đếm sau mỗi bài viết
			}

			// Lấy số trang hiện tại và tổng số trang
			$current_page = max(1, get_query_var('paged')); // Trang hiện tại, mặc định là 1 nếu không có paged
			$total_pages = $wp_query->max_num_pages; // Tổng số trang
		
			// Chỉ hiển thị phân trang nếu có hơn 1 trang
			if ($total_pages > 1) {
				// Tính toán trang trước và trang sau
				$prev_page = $current_page - 1;
				$next_page = $current_page + 1;
				?>
				<!-- Nút phân trang Prev và Next -->
				<div class="flex justify-center text-center gap-[106px] py-20 max-sm:hidden">
					<?php
					// Nút Prev
					if ($prev_page >= 1) {
						echo '<a draggable="false" href="' . get_pagenum_link($prev_page) . '"
                    class="w-[223px] uppercase font-bold rounded py-[5px] px-[9px] text-xs text-[#056BEB] border-2 border-[#056BEB]">' . __('prev', 'gnws') . '</a>';
					} else {
						echo '<a draggable="false" href="#" class="w-[223px] uppercase font-bold rounded py-[5px] px-[9px] text-xs text-[#056BEB] border-2 border-[#056BEB] opacity-50 pointer-events-none">' . __('prev', 'gnws') . '</a>';
					}

					// Nút Next
					if ($next_page <= $total_pages) {
						echo '<a draggable="false" href="' . get_pagenum_link($next_page) . '"
                    class="w-[223px] uppercase font-bold rounded py-[5px] px-[9px] text-xs text-[#056BEB] border-2 border-[#056BEB]">' . __('next', 'gnws') . '</a>';
					} else {
						echo '<a draggable="false" href="#" class="w-[223px] uppercase font-bold rounded py-[5px] px-[9px] text-xs text-[#056BEB] border-2 border-[#056BEB] opacity-50 pointer-events-none">' . __('next', 'gnws') . '</a>';
					}
					?>
				</div>
				<?php
			}
		}
		?>

	</section>



	<!-- desktop END -->


	<!-- Mobile -->
	<div class="md:hidden">
		<section
			class="mx-3 mb-[5px] shadow border border-gray/20 md:mx-0  dark:bg-gray bg-white p-3 md:px-6 md:p-4 rounded max-sm:mx-0 max-sm:px-[17px]">
			<div class="mb-3">
				<div class="relative flex flex-col gap-1">
					<div class="font-semibold text-sm md:text-base mb-1"><?php _e('Articles', 'gnws'); ?></div>
					<div class="absolute bottom-0 w-12 h-1 rounded-md bg-[#6A91A9]"></div>
				</div>
			</div>
			<div class="flex flex-col">
				<div class="mb-2">
					<div class="w-full">
						<a href="/">
							<div class="flex flex-col  w-full lg:cursor-pointer">
								<div class="w-full rounded-md overflow-hidden">
									<div class="">
										<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/img1.png"
											alt="" class="w-full" loading="lazy" draggable="false">
									</div>
								</div>
								<h3
									class="overflow-hidden mt-2 text-sm text-ellipsis text-left line-clamp-2 lg:line-clamp-1 font-semibold md:text-base">
									Phoebe Litchfield: The Hockey Wunderkind Who Loves Reverse Sweeps And Ramp
								</h3>
								<h4
									class="text-xs lg:text-sm leading-5 text-gray-9 font-medium text-left line-clamp-2 mt-2">
									In a Cricket.com exclusive, the Australian left-hander spoke about her obsessive
									reverse sweep disorder, playing hockey, her role as a batter and her ability to
									switch batting orders with ease</h4>
								<div class="flex items-center text-[#8C98B0] justify-start mt-2">
									<p class=" text-gray-2 text-xs  line-clamp-1  border-r-2 pr-2">Anirudh Suresh
									</p>
									<p class="text-gray-2 text-xs pl-2">09 Mar 2025</p>
								</div>
							</div>
						</a>
					</div>
				</div>
				<div class="flex mt-3 pt-1 pb-[9px] overflow-x-auto no-scrollbar">
					<?php
					for ($i = 0; $i < 8; $i++) {
						?>
						<div class="w-40 md:w-44 mr-2 md:mr-3 text-sm">
							<div class="w-full">
								<a href="/" class="select-none">
									<div class="rounded-md lg:cursor-pointer w-40 md:w-44 self-stretch">
										<div class="flex items-center justify-center overflow-hidden relative rounded-md">
											<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/img2.png"
												alt="" class="w-full" loading="lazy" draggable="false">
										</div>
										<h3 class="mt-2 md:text-sm md:font-semibold text-xs line-clamp-2 ">Varun
											Chakaravarthy: The X-Factor India Need To…</h3>
										<div class="flex items-center justify-between text-[#8C98B0]">
											<p class=" text-gray-2 text-xs w-6/12 line-clamp-1 border-r-2">Pramod Ananth
											</p>
											<p class="text-gray-2 text-xs">09 Mar 2025</p>
										</div>
									</div>
								</a>
							</div>
						</div>
						<?php
					}
					?>
				</div>
			</div>
			<div class="md:flex w-max ml-auto mt-3 mb-[5px] hidden">
				<a href="/"
					class="uppercase font-bold rounded py-[5px] px-[9px] text-xs text-[#056BEB] border-2 border-[#056BEB]">
					<?php _e('more articles', 'gnws'); ?>
				</a>
			</div>
		</section>

		<section
			class="mx-3 my-[5px] shadow border border-gray/20  md:mx-0  dark:bg-gray bg-white p-3 md:px-6 md:p-4  rounded max-sm:mx-0 max-sm:px-[17px]">
			<div class="mb-3">
				<div class="relative flex flex-col gap-1">
					<div class="font-semibold text-sm md:text-base mb-1"><?php _e('Featured Videos', 'gnws'); ?>
					</div>
					<div class="absolute bottom-0 w-12 h-1 rounded-md bg-[#6A91A9]"></div>
				</div>
			</div>
			<div class="flex flex-col">
				<div class="mb-2">
					<div class="w-full">
						<a href="/">
							<div class="flex flex-col  w-full lg:cursor-pointer">
								<div class="w-full rounded-md overflow-hidden">
									<div class="">
										<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/img3.png"
											alt="" class="w-full" loading="lazy" draggable="false">
									</div>
								</div>
								<h3
									class="overflow-hidden mt-2 text-sm text-ellipsis text-left line-clamp-2 lg:line-clamp-1 font-semibold md:text-base">
									Phoebe Litchfield: The Hockey Wunderkind Who Loves Reverse Sweeps And Ramp
								</h3>
								<h4
									class="text-xs lg:text-sm leading-5 text-gray-9 font-medium text-left line-clamp-2 mt-2">
									In a Cricket.com exclusive, the Australian left-hander spoke about her obsessive
									reverse sweep disorder, playing hockey, her role as a batter and her ability to
									switch batting orders with ease</h4>
								<div class="flex items-center text-[#8C98B0] justify-start mt-2">
									<p class=" text-gray-2 text-xs  line-clamp-1  border-r-2 pr-2">Anirudh Suresh
									</p>
									<p class="text-gray-2 text-xs pl-2">09 Mar 2025</p>
								</div>
							</div>
						</a>
					</div>
				</div>
				<div class="flex mt-3 pt-1 pb-[9px] overflow-x-auto no-scrollbar">
					<?php
					for ($i = 0; $i < 8; $i++) {
						?>
						<div class="w-40 md:w-44 mr-2 md:mr-3 text-sm">
							<div class="w-full">
								<a href="/" class="select-none">
									<div class="rounded-md lg:cursor-pointer w-40 md:w-44 self-stretch">
										<div class="flex items-center justify-center overflow-hidden relative rounded-md">
											<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/img3.png"
												alt="" class="w-full" loading="lazy" draggable="false">
										</div>
										<h3 class="mt-2 md:text-sm md:font-semibold text-xs line-clamp-2 ">Varun
											Chakaravarthy: The X-Factor India Need To…</h3>
										<div class="flex items-center justify-between text-[#8C98B0]">
											<p class=" text-gray-2 text-xs w-6/12 line-clamp-1 border-r-2">Pramod Ananth
											</p>
											<p class="text-gray-2 text-xs">09 Mar 2025</p>
										</div>
									</div>
								</a>
							</div>
						</div>
						<?php
					}
					?>
				</div>
			</div>
			<div class="md:flex w-max ml-auto mt-3 mb-[5px] hidden">
				<a draggable="false" href="/"
					class="uppercase font-bold rounded py-[5px] px-[9px] text-xs text-[#056BEB] border-2 border-[#056BEB]">
					<?php _e('more articles', 'gnws'); ?>
				</a>
			</div>
		</section>

		<section
			class="mx-3 my-[5px] shadow border border-gray/20  md:mx-0  dark:bg-gray bg-white p-3 md:px-6 md:p-4  rounded max-sm:mx-0 max-sm:px-[17px]">
			<div class="mb-3">
				<div class="relative flex flex-col gap-1">
					<div class="font-semibold text-sm md:text-base mb-1">
						<?php _e('ICC Champions Trophy, 2025', 'gnws'); ?>
					</div>
					<div class="absolute bottom-0 w-12 h-1 rounded-md bg-[#6A91A9]"></div>
				</div>
			</div>
			<div class="flex flex-col">
				<div class="flex mt-3 pt-1 pb-[9px] overflow-x-auto no-scrollbar">
					<?php
					for ($i = 0; $i < 8; $i++) {
						?>
						<div class="w-40 md:w-44 mr-2 md:mr-3 text-sm">
							<div class="w-full">
								<a href="/" class="select-none">
									<div class="rounded-md lg:cursor-pointer w-40 md:w-44 self-stretch">
										<div class="flex items-center justify-center overflow-hidden relative rounded-md">
											<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/img4.png"
												alt="" class="w-full" loading="lazy" draggable="false">
										</div>
										<h3 class="mt-2 md:text-sm md:font-semibold text-xs line-clamp-2 ">Varun
											Chakaravarthy: The X-Factor India Need To…</h3>
										<div class="flex items-center justify-between text-[#8C98B0]">
											<p class=" text-gray-2 text-xs w-6/12 line-clamp-1 border-r-2">Pramod Ananth
											</p>
											<p class="text-gray-2 text-xs">09 Mar 2025</p>
										</div>
									</div>
								</a>
							</div>
						</div>
						<?php
					}
					?>
				</div>
			</div>
			<div class="md:flex w-max ml-auto mt-3 mb-[5px] hidden">
				<a draggable="false" href="/"
					class="uppercase font-bold rounded py-[5px] px-[9px] text-xs text-[#056BEB] border-2 border-[#056BEB]">
					<?php _e('more articles', 'gnws'); ?>
				</a>
			</div>
		</section>

		<section
			class="mx-3 my-[5px] shadow border border-gray/20  md:mx-0  dark:bg-gray bg-white p-3 md:px-6 md:p-4  rounded max-sm:mx-0 max-sm:px-[17px]">
			<div class="mb-3">
				<div class="relative flex flex-col gap-1">
					<div class="font-semibold text-sm md:text-base mb-1">
						<?php _e('Indian Premier League, 2025', 'gnws'); ?>
					</div>
					<div class="absolute bottom-0 w-12 h-1 rounded-md bg-[#6A91A9]"></div>
				</div>
			</div>
			<div class="flex flex-col">
				<div class="flex mt-3 pt-1 pb-[9px] overflow-x-auto no-scrollbar">
					<?php
					for ($i = 0; $i < 8; $i++) {
						?>
						<div class="w-40 md:w-44 mr-2 md:mr-3 text-sm">
							<div class="w-full">
								<a href="/" class="select-none">
									<div class="rounded-md lg:cursor-pointer w-40 md:w-44 self-stretch">
										<div class="flex items-center justify-center overflow-hidden relative rounded-md">
											<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/img5.png"
												alt="" class="w-full" loading="lazy" draggable="false">
										</div>
										<h3 class="mt-2 md:text-sm md:font-semibold text-xs line-clamp-2 ">Varun
											Chakaravarthy: The X-Factor India Need To…</h3>
										<div class="flex items-center justify-between text-[#8C98B0]">
											<p class=" text-gray-2 text-xs w-6/12 line-clamp-1 border-r-2">Pramod Ananth
											</p>
											<p class="text-gray-2 text-xs">09 Mar 2025</p>
										</div>
									</div>
								</a>
							</div>
						</div>
						<?php
					}
					?>
				</div>
			</div>
			<div class="md:flex w-max ml-auto mt-3 mb-[5px] hidden">
				<a href="/"
					class="uppercase font-bold rounded py-[5px] px-[9px] text-xs text-[#056BEB] border-2 border-[#056BEB]">
					<?php _e('more articles', 'gnws'); ?>
				</a>
			</div>
		</section>

		<section
			class="mx-3 my-[5px] shadow border border-gray/20  md:mx-0  dark:bg-gray bg-white p-3 md:px-6 md:p-4  rounded max-sm:mx-0 max-sm:px-[17px]">
			<div class="mb-3">
				<div class="relative flex flex-col gap-1">
					<div class="font-semibold text-sm md:text-base mb-1">
						<?php _e('Womens Premier League, 2025', 'gnws'); ?>
					</div>
					<div class="absolute bottom-0 w-12 h-1 rounded-md bg-[#6A91A9]"></div>
				</div>
			</div>
			<div class="flex flex-col">
				<div class="flex mt-3 pt-1 pb-[9px] overflow-x-auto no-scrollbar">
					<?php
					for ($i = 0; $i < 8; $i++) {
						?>
						<div class="w-40 md:w-44 mr-2 md:mr-3 text-sm">
							<div class="w-full">
								<a href="/" class="select-none">
									<div class="rounded-md lg:cursor-pointer w-40 md:w-44 self-stretch">
										<div class="flex items-center justify-center overflow-hidden relative rounded-md">
											<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/img6.png"
												alt="" class="w-full" loading="lazy" draggable="false">
										</div>
										<h3 class="mt-2 md:text-sm md:font-semibold text-xs line-clamp-2 ">Varun
											Chakaravarthy: The X-Factor India Need To…</h3>
										<div class="flex items-center justify-between text-[#8C98B0]">
											<p class=" text-gray-2 text-xs w-6/12 line-clamp-1 border-r-2">Pramod Ananth
											</p>
											<p class="text-gray-2 text-xs">09 Mar 2025</p>
										</div>
									</div>
								</a>
							</div>
						</div>
						<?php
					}
					?>
				</div>
			</div>
			<div class="md:flex w-max ml-auto mt-3 mb-[5px] hidden">
				<a href="/"
					class="uppercase font-bold rounded py-[5px] px-[9px] text-xs text-[#056BEB] border-2 border-[#056BEB]">
					<?php _e('more articles', 'gnws'); ?>
				</a>
			</div>
		</section>

		<section
			class="mx-3 my-[5px] shadow border border-gray/20  md:mx-0  dark:bg-gray bg-white p-3 md:px-6 md:p-4  rounded max-sm:mx-0 max-sm:px-[17px]">
			<div class="mb-3">
				<div class="relative flex flex-col gap-1">
					<div class="font-semibold text-sm md:text-base mb-1">
						<?php _e('Ranji Trophy, 2024/25', 'gnws'); ?>
					</div>
					<div class="absolute bottom-0 w-12 h-1 rounded-md bg-[#6A91A9]"></div>
				</div>
			</div>
			<div class="flex flex-col">
				<div class="flex mt-3 pt-1 pb-[9px] overflow-x-auto no-scrollbar">
					<?php
					for ($i = 0; $i < 8; $i++) {
						?>
						<div class="w-40 md:w-44 mr-2 md:mr-3 text-sm">
							<div class="w-full">
								<a href="/" class="select-none">
									<div class="rounded-md lg:cursor-pointer w-40 md:w-44 self-stretch">
										<div class="flex items-center justify-center overflow-hidden relative rounded-md">
											<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/img7.png"
												alt="" class="w-full" loading="lazy" draggable="false">
										</div>
										<h3 class="mt-2 md:text-sm md:font-semibold text-xs line-clamp-2 ">Varun
											Chakaravarthy: The X-Factor India Need To…</h3>
										<div class="flex items-center justify-between text-[#8C98B0]">
											<p class=" text-gray-2 text-xs w-6/12 line-clamp-1 border-r-2">Pramod Ananth
											</p>
											<p class="text-gray-2 text-xs">09 Mar 2025</p>
										</div>
									</div>
								</a>
							</div>
						</div>
						<?php
					}
					?>
				</div>
			</div>
			<div class="md:flex w-max ml-auto mt-3 mb-[5px] hidden">
				<a href="/"
					class="uppercase font-bold rounded py-[5px] px-[9px] text-xs text-[#056BEB] border-2 border-[#056BEB]">
					<?php _e('more articles', 'gnws'); ?>
				</a>
			</div>
		</section>

		<div class="w-full py-[10px] px-[21px]">
			<div class="mb-3">
				<div class="relative flex flex-col gap-1">
					<div class="font-semibold text-sm md:text-base mb-1">
						<?php _e('Related Articles', 'gnws'); ?>
					</div>
					<div class="absolute bottom-0 w-12 h-1 rounded-md bg-[#6A91A9]"></div>
				</div>
			</div>
			<div class="flex flex-col gap-[10px]">
				<?php
				for ($i = 0; $i < 4; $i++) {
					?>
					<a href="/" class="flex gap-[15px]">
						<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/img11.png" alt=""
							class="w-2/5 object-cover rounded-[10px]" loading="lazy" draggable="false">
						<div class="w-3/5">
							<h3 class="line-clamp-2 text-xs font-bold text-black mb-[7px]">Mohammed Shami Flips Spin
								Script
								In Dubai To Outfox Australia</h3>
							<p class="line-clamp-2 text-xs text-[#020817] mb-[7px]">On the day, Mohammed Shami came,
								he saw,
								and he
								conquered</p>
							<div class="flex justify-between text-xs text-[#8C98B0]">
								<span>17 hours ago</span>
								<span>Anirudh Suresh</span>
							</div>
						</div>
					</a>
					<?php
				}
				?>
			</div>
		</div>
	</div>
	<!-- Mobile END -->
</main>
<?php
get_footer();
