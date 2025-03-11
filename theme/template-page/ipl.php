<?php

/**
Template Name: IPL
 */

get_header();
?>

<main class="ipl-page pt-5 pb-20 bg-[#F1F5F9] max-sm:pt-0">
    <section class="container rounded-b-lg shadow bg-white mb-4 px-0">
        <div
            class="flex justify-between text-sm font-semibold text-center bg-[#131B2A] text-[#A1A1A1] p-2 gap-2 max-sm:px-0">
            <div
                class="w-1/4 flex gap-1 items-center justify-center py-[10px] border-b-2 border-white text-white duration-300 cursor-default hover:text-white hover:border-white max-sm:text-xs">
                <?php _e('Overview', 'gnws'); ?>
            </div>
            <div
                class="w-1/4 flex gap-1 items-center justify-center py-[10px] border-b-2 border-transparent duration-300 cursor-default hover:text-white hover:border-white max-sm:text-xs">
                <?php _e('Auction', 'gnws'); ?> <span
                    class="bg-[#D0D0D0] text-[#131B2A] uppercase px-2 py-[2px] rounded-full max-sm:text-[8px]"><?php _e('completed', 'gnws'); ?></span>
            </div>
            <div
                class="w-1/4 flex gap-1 items-center justify-center py-[10px] border-b-2 border-transparent duration-300 cursor-default hover:text-white hover:border-white max-sm:text-xs">
                <?php _e('Teams', 'gnws'); ?>
            </div>
            <div
                class="w-1/4 flex gap-1 items-center justify-center py-[10px] border-b-2 border-transparent duration-300 cursor-default hover:text-white hover:border-white max-sm:text-xs">
                <?php _e('Ranking', 'gnws'); ?>
            </div>
        </div>
        <div class="p-4">
            <div class="flex gap-4 items-center max-sm:flex-col">
                <div class="h-full w-1/2 flex flex-col gap-3 max-sm:w-full">
                    <div
                        class="relative w-full h-1/2 bg-[#F3F3F3] rounded-md overflow-hidden before:content-[''] before:absolute before:left-0 before:block before:w-[6px] before:h-full before:bg-[#119247] before:rounded">
                        <div class="px-3 py-5 w-full">
                            <div class="flex text-base mb-[18px]">
                                <span><?php _e('Indian Player', 'gnws'); ?></span>
                                <span class="ml-auto font-semibold">120</span>
                            </div>
                            <div class="flex text-base">
                                <span><?php _e('Sold', 'gnws'); ?></span>
                                <span class="ml-auto"><?php _e('Total', 'gnws'); ?></span>
                            </div>
                        </div>
                    </div>
                    <div
                        class="relative w-full h-1/2 bg-[#F3F3F3] rounded-md overflow-hidden before:content-[''] before:absolute before:left-0 before:block before:w-[6px] before:h-full before:bg-[#119247] before:rounded">
                        <div class="px-3 py-5 w-full">
                            <div class="flex text-base mb-[18px]">
                                <span><?php _e('International Player', 'gnws'); ?></span>
                                <span class="ml-auto font-semibold">62</span>
                            </div>
                            <div class="flex text-base">
                                <span><?php _e('Sold', 'gnws'); ?></span>
                                <span class="ml-auto"><?php _e('Total', 'gnws'); ?></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="h-full w-1/2 max-sm:w-full">
                    <div class="text-sm font-semibold"><?php _e('Most Expensive Players', 'gnws'); ?></div>
                    <div class="mt-2 flex flex-col gap-2">
                        <?php
                        for ($i = 0; $i < 3; $i++) {
                            ?>
                            <div class="flex items-center border rounded-md border-[#E2E8F0] overflow-hidden p-[10px]">
                                <?php echo svg('avt', '40', '40') ?>
                                <div class="ml-2">
                                    <div>Rishabh Pant</div>
                                    <div>WK</div>
                                </div>
                                <div class="ml-auto flex items-center gap-8">
                                    <div class="text-xs text-center">
                                        <div><?php _e('Price', 'gnws'); ?></div>
                                        <div class="font-semibold">₹27.00 Cr</div>
                                    </div>
                                    <div class="text-xs text-center text-[#119247]">
                                        <div><?php _e('Sold to', 'gnws'); ?></div>
                                        <div class="uppercase">LSG</div>
                                    </div>
                                    <a draggable="false" href="/" class="text-xs text-center text-[#007BBD] w-7">
                                        <?php _e('View Bids', 'gnws'); ?>
                                    </a>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>

            <div class="mt-3 text-center text-[#007BBD]">
                <?php _e('View Auction Results', 'gnws'); ?>
            </div>
        </div>
    </section>

    <section class="container rounded-lg shadow bg-white px-0 mb-16">
        <div class="p-4 grid grid-cols-4 gap-2 max-sm:grid-cols-2">
            <?php
            for ($i = 0; $i < 10; $i++) {
                ?>
                <div class="border border-[#D1D5DB] rounded-md overflow-hidden">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/img12.png" alt="" loading="lazy"
                        class="w-full object-cover" draggable="false">
                    <div class="p-3 flex flex-col gap-[3px] text-xs">
                        <span class="font-semibold">MI</span>
                        <span><?php _e('Indian - 15 Players', 'gnws'); ?></span>
                        <span><?php _e('Overseas - 8 Players', 'gnws'); ?></span>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </section>

    <section class="container px-0">
        <span class="max-sm:px-2"><?php _e('Ranking', 'gnws'); ?></span>
        <div class="flex mt-2 justify-between max-sm:px-2">
            <div class="bg-white w-2/5 flex gap-1 text-black">
                <div
                    class="w-1/2 py-[10px] uppercase text-sm text-center border-b-2 border-transparent duration-300 cursor-default hover:text-[#852121] hover:border-[#852121]">
                    <?php _e('women', 'gnws'); ?>
                </div>
                <div
                    class="w-1/2 py-[10px] uppercase text-sm text-center text-[#852121] border-b-2 border-[#852121] duration-300 cursor-default hover:text-[#852121] hover:border-[#852121]">
                    <?php _e('men', 'gnws'); ?>
                </div>
            </div>
            <div class="w-2/5 flex gap-1 text-black">
                <div
                    class="w-1/2 py-[10px] uppercase text-sm text-center bg-[#852121] text-white rounded-full duration-300 cursor-default hover:text-white hover:bg-[#852121]">
                    <?php _e('teams', 'gnws'); ?>
                </div>
                <div
                    class="w-1/2 py-[10px] uppercase text-sm text-center bg-[#E4E4E7] rounded-full duration-300 cursor-default hover:text-white hover:bg-[#852121]">
                    <?php _e('Players', 'gnws'); ?>
                </div>
            </div>
        </div>

        <div class="p-[13px]">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/ad.png" alt="" loading="lazy"
                class="w-full h-[250px] object-cover" draggable="false">
        </div>

        <div class="flex gap-2 p-2 max-sm:flex-col max-sm:gap-4">
            <?php
            for ($i = 0; $i < 3; $i++) {
                ?>
                <div class="w-1/3 bg-white shadow max-sm:w-full">
                    <div class="text-white text-center">
                        <p class="bg-[#b1252b] w-full p-[5px] font-semibold text-start">ODI</p>
                        <div class="bg-[#852121] flex justify-between items-center py-[26px] px-8">
                            <p class="text-xl font-bold">1</p>
                            <div class="flex gap-1 items-center">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/au.png" alt=""
                                    loading="lazy" class="w-8 h-5 object-cover" draggable="false">
                                <div class="text-xl">IND</div>
                            </div>
                            <p class="text-xl font-bold">122</p>
                        </div>
                    </div>
                    <table class="w-full text-sm text-center">
                        <thead class="bg-[#e5e7eb]">
                            <tr>
                                <th class="py-[18px] px-2"><?php _e('Rank', 'gnws'); ?></th>
                                <th class="py-[18px] px-2"><?php _e('Team', 'gnws'); ?></th>
                                <th class="py-[18px] px-2"><?php _e('Rating', 'gnws'); ?></th>
                            </tr>
                        </thead>
                        <tbody class="divide-y font-semibold">
                            <tr class="bg-gray-50">
                                <td class="py-[18px] px-2">2</td>
                                <td class="py-[18px] px-2 flex justify-center items-center space-x-2">
                                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/au.png" alt=""
                                        loading="lazy" class="w-8 h-5 object-cover" draggable="false"> <span>AUS</span>
                                </td>
                                <td class="py-[18px] px-2">110</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <?php
            }
            ?>
        </div>
    </section>
</main>

<?php
get_footer();