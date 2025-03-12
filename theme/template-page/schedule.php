<?php

/**
Template Name: Schedule
 */

get_header();
?>

<main class="schedule-page flex flex-col gap-5 pt-5 pb-20 bg-[#F1F5F9] max-sm:pb-[85px] max-sm:pt-0">
    <section class="container md:bg-white bg-[#f1f5f9] rounded-md overflow-hidden p-4">
        <div class="bg-white flex items-center mb-2 px-[10px] py-[14px] border-2 rounded-md overflow-hidden">
            <div class="flex items-center gap-2">
                <div class="bg-[#9F0C30] text-sm text-white px-2 py-[2px] uppercase rounded">INT</div>
                <span class="text-base font-semibold"><?php _e('ICC Champions Trophy, 2025', 'gnws'); ?></span>
            </div>
            <div class="ml-auto "><?php echo svg('chevron-right') ?></div>
        </div>
        <div class="md:bg-white bg-[#F1F5F9] grid grid-cols-3 gap-1 max-sm:grid-cols-1">

            <div class="bg-white rounded-lg overflow-hidden p-[9px] border border-[#E2E8F0]">
                <div class="p-2">
                    <p class="text-xs text-[#898989] flex items-center font-medium">
                        Final <span class="mx-[10px] text-[#CCCCCC]">|</span>
                        <?php echo svg('location', '10', '13') ?>
                        Lahore
                    </p>

                    <div class="md:mt-2 mt-[10px] md:py-[6.5px] py-[14px] flex flex-col gap-[7px]">
                        <div class="flex items-center gap-7 w-full">
                            <div class="w-fit flex gap-[10px] items-center pr-7 border-r-2 border-[#CCCCCC]">
                                <img src="https://flagcdn.com/w40/za.png" alt="" class="w-[30px] h-5 rounded"
                                    loading="lazy" draggable="false">
                                <span class="text-sm font-medium text-[#282828]">SA</span>
                            </div>
                            <span class="w-2/3 text-sm text-[#020817] font-medium">5th March</span>
                        </div>

                        <div class="flex items-center gap-7 mt-2 w-full">
                            <div class="w-fit flex gap-[10px] items-center pr-7 border-r-2 border-[#CCCCCC]">
                                <img src="https://flagcdn.com/w40/nz.png" class="w-[30px] h-5 rounded" loading="lazy"
                                    draggable="false">
                                <span class="text-sm font-medium text-[#282828]">NZ</span>
                            </div>
                            <span class="w-2/3 text-sm text-[#020817] font-medium">09:00 AM</span>
                        </div>
                    </div>

                    <p id="countdown" class="md:mt-2 mt-[10px] text-xs font-medium text-[#020817]">09 March, 09:00 AM
                    </p>

                    <div class="mt-4 text-sm text-[#555A64] font-semibold hidden">
                        <?php _e('Win projections to be updated soon...', 'gnws'); ?>
                    </div>

                    <div class="flex flex-col w-full items-center">
                        <div class="w-full bg-gray-300 h-1.5 rounded-full mt-2 relative">
                            <div class="bg-[#EF4444] h-1.5 rounded-l-full absolute left-0 top-0" style="width: 61%;">
                            </div>
                            <div class="bg-[#60A5FA] h-1.5 rounded-r-full absolute right-0 top-0" style="width: 39%;">
                            </div>
                        </div>

                        <div class="w-full flex justify-between md:mt-2 mt-[10px]">
                            <div class="flex gap-[3px] items-center">
                                <div class="size-[6px] rounded-full bg-[#EF4444]"></div>
                                <span class="text-[#555A64] text-xs font-semibold">SA (61%)</span>
                            </div>
                            <div class="flex gap-[3px] items-center">
                                <div class="size-[6px] rounded-full bg-[#60A5FA]"></div>
                                <span class="text-[#555A64] text-xs font-semibold">NZ (39%)</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="container md:bg-white bg-[#f1f5f9] rounded-md overflow-hidden p-4">
        <div class="bg-white flex items-center mb-2 px-[10px] py-[14px] border-2 rounded-md overflow-hidden">
            <div class="flex items-center gap-2">
                <div class="bg-[#496780] text-sm text-white px-2 py-[2px] uppercase rounded">DOM</div>
                <span
                    class="text-base font-semibold"><?php _e('CSA Provincial One-Day Challenge Division One, 2025', 'gnws'); ?></span>
            </div>
            <div class="ml-auto "><?php echo svg('chevron-right') ?></div>
        </div>
        <div class="md:bg-white bg-[#F1F5F9] grid grid-cols-3 gap-1 max-sm:grid-cols-1">
            <?php
            for ($i = 0; $i < 3; $i++) {
                ?>
                <div class="bg-white rounded-lg overflow-hidden p-[9px] border border-[#E2E8F0]">
                    <div class="p-2">
                        <p class="text-xs text-[#898989] flex items-center font-medium">
                            Group D - Qualifier 2 <span class="mx-[10px] text-[#CCCCCC]">|</span>
                            <?php echo svg('location', '10', '13') ?>
                            Dubai
                        </p>

                        <div class="md:mt-2 mt-[10px] md:py-[6.5px] py-[14px] flex flex-col gap-[7px]">
                            <div class="flex items-center gap-7 w-full">
                                <div class="w-fit flex gap-[10px] items-center pr-7 border-r-2 border-[#CCCCCC]">
                                    <img src="https://flagcdn.com/w40/za.png" alt="" class="w-[30px] h-5 rounded"
                                        loading="lazy" draggable="false">
                                    <span class="text-sm font-medium text-[#282828]">SA</span>
                                </div>
                                <span class="w-2/3 text-sm text-[#020817] font-medium">5th March</span>
                            </div>

                            <div class="flex items-center gap-7 mt-2 w-full">
                                <div class="w-fit flex gap-[10px] items-center pr-7 border-r-2 border-[#CCCCCC]">
                                    <img src="https://flagcdn.com/w40/nz.png" class="w-[30px] h-5 rounded" loading="lazy"
                                        draggable="false">
                                    <span class="text-sm font-medium text-[#282828]">NZ</span>
                                </div>
                                <span class="w-2/3 text-sm text-[#020817] font-medium">09:00 AM</span>
                            </div>
                        </div>

                        <p id="countdown" class="md:mt-2 mt-[10px] text-xs font-medium text-[#020817]">3 hrs 29 mins to toss
                        </p>

                        <div class="mt-4 text-sm text-[#555A64] font-semibold">
                            <?php _e('Win projections to be updated soon...', 'gnws'); ?>
                        </div>

                        <div class="hidden">
                            <div class="flex flex-col w-full items-center">
                                <div class="w-full bg-gray-300 h-1.5 rounded-full mt-2 relative">
                                    <div class="bg-[#EF4444] h-1.5 rounded-l-full absolute left-0 top-0"
                                        style="width: 61%;">
                                    </div>
                                    <div class="bg-[#60A5FA] h-1.5 rounded-r-full absolute right-0 top-0"
                                        style="width: 39%;">
                                    </div>
                                </div>

                                <div class="w-full flex justify-between md:mt-2 mt-[10px]">
                                    <div class="flex gap-[3px] items-center">
                                        <div class="size-[6px] rounded-full bg-[#EF4444]"></div>
                                        <span class="text-[#555A64] text-xs font-semibold">SA (61%)</span>
                                    </div>
                                    <div class="flex gap-[3px] items-center">
                                        <div class="size-[6px] rounded-full bg-[#60A5FA]"></div>
                                        <span class="text-[#555A64] text-xs font-semibold">NZ (39%)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </section>
</main>

<?php
get_footer();