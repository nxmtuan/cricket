<?php

/**
Template Name: News Details
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
            <h1>No Century, Still A Masterclass: Beth Mooney Brings Out The Dawg In Lucknow</h1>
            <div class="flex items-center justify-center gap-2 mt-3">
                <div class="max-sm:hidden"><?php echo svg('user', '18', 18) ?></div>
                <span>Gaurav Nandan Tripathi</span>
                <div class="w-[2px] h-full bg-black"></div>
                <span><b>Last updated on 03 Mar 2025 | 06:21 PM</b></span>
            </div>
        </div>
        <div
            class="flex flex-col gap-[18px] bg-white p-[10px] rounded-[14px] shadow max-sm:bg-transparent max-sm:rounded-none max-sm:shadow-none max-sm:px-0">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/img10.png" alt="" loading="lazy"
                draggable="false">

            <div class="flex gap-[10px] mt-[10px] p-[10px] max-sm:flex-col max-sm:px-[18px]">
                <div class="w-2/3 pr-[50px] border-r-2 border-[#D9D9D9] max-sm:w-full max-sm:border-none max-sm:pr-0">
                    <div class="the_content"><?php the_content() ?></div>
                    <div class="mt-[10px]">
                        <div class="font-bold"><?php _e('Tags', 'gnws'); ?></div>
                        <div class="flex gap-[10px] flex-wrap mt-3">
                            <a draggable="false" href="/"
                                class="uppercase font-bold rounded py-[5px] px-[9px] text-xs text-[#056BEB] border-2 border-[#056BEB]">
                                <?php _e('Womens Premier League, 2025', 'gnws'); ?>
                            </a>
                            <a draggable="false" href="/"
                                class="uppercase font-bold rounded py-[5px] px-[9px] text-xs text-[#056BEB] border-2 border-[#056BEB]">
                                <?php _e('ICC Champions Trophy, 2025', 'gnws'); ?>
                            </a>
                            <a draggable="false" href="/"
                                class="uppercase font-bold rounded py-[5px] px-[9px] text-xs text-[#056BEB] border-2 border-[#056BEB]">
                                <?php _e('india', 'gnws'); ?>
                            </a>
                            <a draggable="false" href="/"
                                class="uppercase font-bold rounded py-[5px] px-[9px] text-xs text-[#056BEB] border-2 border-[#056BEB]">
                                <?php _e('ICC Champions ', 'gnws'); ?>
                            </a>
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
                        for ($i = 0; $i < 4; $i++) {
                            ?>
                            <a draggable="false" href="/" class="flex gap-[15px]">
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
        </div>
    </section>
</main>

<?php
get_footer();