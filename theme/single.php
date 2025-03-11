<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package gnws
 */

get_header();
?>

<main class="news-detail-page bg-[#F1F5F9] max-sm:pb-[85px]">
	<section class="container pb-20 max-sm:pb-0 max-sm:px-0">
		<div class="sticky top-[9%] md:hidden bg-primary flex items-center py-[21px] px-[15px]">
			<div class="flex items-center gap-3">
				<?php echo svg('back', '25', '25') ?>
				<span class="text-white text-xl leading-4">NEWs</span>
			</div>
			<div class="ml-auto"><?php echo svg('share', '25', '25') ?></div>
		</div>
		<div class="the_content py-[15px] max-sm:px-[18px]">
			<h1><?php the_title() ?> </h1>
			<div class="flex items-center justify-center gap-2 mt-3">
				<div class="max-sm:hidden"><?php echo svg('user', '18', 18) ?></div>
				<span><?php the_author(); ?>
				</span>
				<div class="w-[2px] h-full bg-black"></div>
				<span>
					<b><?php _e('Last updated on', 'gnws') ?> <?php echo get_the_date() ?> |
						<?php echo get_the_time() ?></b></span>
			</div>
		</div>
		<div
			class="flex flex-col gap-[18px] bg-white p-[10px] rounded-[14px] shadow max-sm:bg-transparent max-sm:rounded-none max-sm:shadow-none max-sm:px-0">
			<img src="<?php gnws_post_thumbnail_full() ?>" alt="<?php the_title() ?>" loading="lazy"
				class="rounded-[10px]">
			<div class="flex gap-[10px] mt-[10px] p-[10px] max-sm:flex-col max-sm:px-[18px]">
				<div class="w-2/3 pr-[50px] border-r-2 border-[#D9D9D9] max-sm:w-full max-sm:border-none max-sm:pr-0">
					<div class="the_content"><?php the_content() ?></div>
					<div class="mt-[10px]">
						<div class="font-bold"><?php _e('Tags', 'gnws'); ?></div>
						<div class="flex gap-[10px] flex-wrap mt-3">
							<?php
							$tags = get_the_tags();
							if ($tags) {
								foreach ($tags as $tag) {
									echo '<a draggable="false" href="' . esc_url(get_tag_link($tag->term_id)) . '" class="uppercase font-bold rounded py-[5px] px-[9px] text-xs text-[#056BEB] border-2 border-[#056BEB]">' . esc_html($tag->name) . '</a>';
								}
							}
							?>
						</div>
					</div>
				</div>

				<div class="w-1/3 py-[10px] pr-[10px] max-sm:w-full">
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
						// Lấy danh mục của bài viết hiện tại
						$categories = get_the_category();
						if ($categories) {
							$category_id = $categories[0]->term_id;

							// Thiết lập tham số cho WP_Query
							$args = array(
								'post_type' => 'post',              // Chỉ lấy bài viết loại 'post'
								'posts_per_page' => 8,              // Lấy 8 bài viết
								'cat' => $category_id,              // Lấy bài viết từ danh mục cụ thể
								'post__not_in' => array(get_the_ID()) // Loại trừ bài viết hiện tại
							);

							// Tạo truy vấn
							$related_posts = new WP_Query($args);

							// Kiểm tra và lặp qua các bài viết
							if ($related_posts->have_posts()) {
								while ($related_posts->have_posts()) {
									$related_posts->the_post();
									?>
									<a draggable="false" href="<?php the_permalink(); ?>" class="flex gap-[15px]">
										<img src="<?php gnws_post_thumbnail_full() ?>" alt="<?php the_title(); ?>"
											class="w-2/5 object-cover rounded-[10px]" loading="lazy" draggable="false">
										<div class="w-3/5">
											<h3 class="line-clamp-2 text-xs font-bold text-black mb-[7px]"><?php the_title(); ?>
											</h3>
											<p class="line-clamp-2 text-xs text-[#020817] mb-[7px]">
												<?php echo wp_trim_words(get_the_excerpt(), 20); ?>
											</p>
											<div class="flex justify-between text-xs text-[#8C98B0]">
												<span><?php echo human_time_diff(get_the_time('U'), current_time('timestamp')) . ' ago'; ?></span>
												<span><?php the_author(); ?></span>
											</div>
										</div>
									</a>
									<?php
								}
								wp_reset_postdata(); // Đặt lại dữ liệu bài viết
							}
						}
						?>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>

<?php
get_footer();
