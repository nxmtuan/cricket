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
	<section class="flex justify-center py-[15px] bg-[#F1F5F9]">
		<div class="md:grid flex grid-cols-6 py-[10px] gap-[10px] auto-cols-max">
			<a href="/"
				class="bg-secondary active [&:not(.active)]:bg-transparent [&:not(.active)]:text-[#020817] text-white font-semibold text-center text-sm rounded-[10px] overflow-hidden min-w-max max-sm:w-fit md:px-3 px-[6px] hover:!bg-secondary hover:!text-white duration-150">
				All Matches
			</a>
			<a href="/"
				class="bg-secondary [&:not(.active)]:bg-transparent [&:not(.active)]:text-[#020817] text-white font-semibold text-center text-sm rounded-[10px] overflow-hidden min-w-max max-sm:w-fit md:px-3 px-[6px] hover:!bg-secondary hover:!text-white duration-150">
				ICT
			</a>
			<a href="/"
				class="bg-secondary [&:not(.active)]:bg-transparent [&:not(.active)]:text-[#020817] text-white font-semibold text-center text-sm rounded-[10px] overflow-hidden min-w-max max-sm:w-fit md:px-3 px-[6px] hover:!bg-secondary hover:!text-white duration-150">
				WPL
			</a>
			<a href="/"
				class="bg-secondary [&:not(.active)]:bg-transparent [&:not(.active)]:text-[#020817] text-white font-semibold text-center text-sm rounded-[10px] overflow-hidden min-w-max max-sm:w-fit md:px-3 px-[6px] hover:!bg-secondary hover:!text-white duration-150">
				IMLT
			</a>
			<a href="/"
				class="bg-secondary [&:not(.active)]:bg-transparent [&:not(.active)]:text-[#020817] text-white font-semibold text-center text-sm rounded-[10px] overflow-hidden min-w-max max-sm:w-fit md:px-3 px-[6px] hover:!bg-secondary hover:!text-white duration-150">
				RT
			</a>
			<a href="/"
				class="bg-secondary [&:not(.active)]:bg-transparent [&:not(.active)]:text-[#020817] text-white font-semibold text-center text-sm rounded-[10px] overflow-hidden min-w-max max-sm:w-fit md:px-3 px-[6px] hover:!bg-secondary hover:!text-white duration-150">
				TFT
			</a>
		</div>
	</section>

	<section class="container max-sm:px-0">

		<?php
		if (have_posts()) {
			$counter = 0; // Biến đếm để xác định bài viết đầu tiên
		
			while (have_posts()) {
				the_post();

				if ($counter == 0) { // Bài viết đầu tiên dùng post__item-big
					?>
					<div class="post__item-big">
						<div class="flex flex-col bg-white gap-[18px] p-[15px] md:rounded-[14px] rounded-sm md:shadow mb-[15px]">
							<a draggable="false" href="<?php the_permalink(); ?>">
								<div class="flex flex-col bg-white rounded overflow-hidden justify-around">
									<img src="<?php gnws_post_thumbnail_full() ?>" alt="<?php the_title(); ?>"
										class="w-full rounded-[10px] overflow-hidden" loading="lazy" draggable="false">
									<div class="flex flex-col justify-between w-full mt-[10px]">
										<div class="flex flex-col gap-[5px]">
											<div class="tracking-wider dark:text-white text-black font-bold"><?php the_title(); ?>
											</div>
											<h2
												class="mt-2 font-bold line-clamp-2 w-full md:text-sm text-xs leading-5 text-[#3F4B62]">
												<?php echo wp_trim_words(get_the_excerpt(), 30); ?>
											</h2>
										</div>
										<div class="text-xs flex flex-row justify-between text-[#8C98B0] mt-[10px]">
											<div>By: <?php the_author(); ?></div>
											<div>
												<?php echo human_time_diff(get_the_time('U'), current_time('timestamp')) . ' ago'; ?>
											</div>
										</div>
									</div>
								</div>
							</a>
						</div>
					</div>
					<?php
				} else { // Các bài viết còn lại dùng post__item
					?>
					<div class="post__item">
						<div class="md:bg-white bg-[#F1F5F9] md:p-[15px] px-2 rounded-[14px] md:shadow mb-[15px]">
							<a draggable="false" href="<?php the_permalink(); ?>">
								<div class="flex gap-[15px] md:bg-white bg-[#F1F5F9] rounded justify-around">
									<img src="<?php gnws_post_thumbnail_full() ?>" alt="<?php the_title(); ?>"
										class="w-2/5 rounded-[10px] overflow-hidden" loading="lazy" draggable="false">
									<div class="w-3/5 flex flex-col justify-between py-2">
										<div class="">
											<div
												class="md:text-md tracking-wider dark:text-white text-black font-bold overflow-hidden line-clamp-2">
												<?php the_title(); ?>
											</div>
											<h2
												class="md:line-clamp-3 lg:text-sm text-xs hidden lg:inline-flex leading-5 text-[#3F4B62] overflow-hidden line-clamp-2">
												<?php echo wp_trim_words(get_the_excerpt(), 30); ?>
											</h2>
										</div>
										<div class="text-xs flex flex-row justify-between text-[#8C98B0]">
											<div>By: <?php the_author(); ?></div>
											<div>
												<?php echo human_time_diff(get_the_time('U'), current_time('timestamp')) . ' ago'; ?>
											</div>
										</div>
									</div>
								</div>
							</a>
						</div>
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
				<div class="flex justify-center text-center md:gap-[106px] gap-12 py-3 max-sm:px-8">
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
</main>
<?php
get_footer();
