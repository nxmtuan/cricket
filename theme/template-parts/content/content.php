<div class="post__item">
	<a draggable="false" href="<?php the_permalink(); ?>">
		<div class="flex gap-[15px] bg-white rounded justify-around">
			<img src="<?php gnws_post_thumbnail_full() ?>" alt="<?php the_title(); ?>"
				class="w-2/5 rounded-[10px] overflow-hidden" loading="lazy" draggable="false">
			<div class="w-3/5 flex flex-col justify-between py-2">
				<div class="">
					<div class="md:text-md tracking-wider dark:text-white text-black font-bold"><?php the_title(); ?>
					</div>
					<h2 class="line-clamp-3 lg:text-sm text-xs hidden lg:inline-flex leading-5 text-[#3F4B62]">
						<?php echo wp_trim_words(get_the_excerpt(), 30); ?>
					</h2>
				</div>
				<div class="text-xs flex flex-row justify-between text-[#8C98B0]">
					<div>By: <?php the_author(); ?></div>
					<div><?php echo human_time_diff(get_the_time('U'), current_time('timestamp')) . ' ago'; ?></div>
				</div>
			</div>
		</div>
	</a>
	<div class="w-2/5 h-[15px] bg-[#8f8f8f]"></div>
</div>