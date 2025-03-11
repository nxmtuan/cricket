<?php

/**
Template Name: Schedule
 */

get_header();
?>

<main class="schedule-page flex flex-col gap-5 pt-5 pb-20 bg-[#F1F5F9] max-sm:pb-[85px] max-sm:pt-0">
    <section class="container bg-white rounded-md overflow-hidden p-4">
        <div class="flex items-center mb-2 px-[10px] py-[14px] border-2 rounded-md overflow-hidden">
            <div class="flex items-center gap-2">
                <div class="bg-[#9F0C30] text-sm text-white px-2 py-[2px] uppercase rounded">INT</div>
                <span class="text-base font-semibold"><?php _e('ICC Champions Trophy, 2025', 'gnws'); ?></span>
            </div>
            <div class="ml-auto "><?php echo svg('chevron-right', '8', '15') ?></div>
        </div>
        <div class="grid grid-cols-3 gap-1 max-sm:grid-cols-1">
            <div class="bg-white rounded-lg p-4 w-full border mr-[10px] max-sm:mr-0">
                <p class="text-xs text-gray-500 flex items-center mt-2 gap-2">
                    Final <span class="mx-1 text-[#CCCCCC]">|</span>
                    <?php echo svg('location', '10', '13') ?>
                    Dubai
                </p>

                <div class="mt-2 py-[7px]">
                    <div class="flex items-center gap-7 w-full">
                        <div class="w-1/3 flex items-center space-x-2 border-r-2 border-[#CCCCCC]">
                            <img src="https://flagcdn.com/w40/za.png" class="w-5 h-4">
                            <span class="text-xs font-medium">SA</span>
                        </div>
                        <span class="w-2/3 text-sm text-gray-600">9th March</span>
                    </div>

                    <div class="flex items-center gap-7 mt-2 w-full">
                        <div class="w-1/3 flex items-center space-x-2 border-r-2 border-[#CCCCCC]">
                            <img src="https://flagcdn.com/w40/nz.png" class="w-5 h-4">
                            <span class="text-xs font-medium">NZ</span>
                        </div>
                        <span class="w-2/3 text-sm text-gray-600">09:00 AM</span>
                    </div>
                </div>

                <p class="mt-3 text-xs font-medium text-gray-800">09 March, 09:00 AM</p>

                <div class="mt-4 text-sm text-[#555A64] font-semibold hidden">
                    <?php _e('Win projections to be updated soon...', 'gnws'); ?>
                </div>

                <div class="block">
                    <div class="w-full bg-gray-300 h-1.5 rounded-full mt-4 relative">
                        <div class="bg-red-500 h-1.5 rounded-full absolute left-0 top-0" style="width: 61%;"></div>
                        <div class="bg-blue-500 h-1.5 rounded-full absolute right-0 top-0" style="width: 39%;"></div>
                    </div>

                    <div class="flex justify-between text-xs text-gray-600 mt-1 pb-2">
                        <span class="text-red-500">SA (61%)</span>
                        <span class="text-blue-500">NZ (39%)</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container bg-white rounded-md overflow-hidden p-4">
        <div class="flex items-center mb-2 px-[10px] py-[14px] border-2 rounded-md overflow-hidden">
            <div class="flex items-center gap-2">
                <div class="bg-[#496780] text-sm text-white px-2 py-[2px] uppercase rounded">DOM</div>
                <span
                    class="text-base font-semibold"><?php _e('CSA Provincial One-Day Challenge Division One, 2025', 'gnws'); ?></span>
            </div>
            <div class="ml-auto "><?php echo svg('chevron-right', '8', '15') ?></div>
        </div>
        <div class="grid grid-cols-3 gap-1 max-sm:grid-cols-1">
            <?php
            for ($i = 0; $i < 3; $i++) {
                ?>
                <div class="bg-white rounded-lg p-4 w-full border mr-[10px] max-sm:mr-0">
                    <p class="text-xs text-gray-500 flex items-center mt-2 gap-2">
                        Group D - Qualifier 2 <span class="mx-1 text-[#CCCCCC]">|</span>
                        <?php echo svg('location', '10', '13') ?>
                        Dubai
                    </p>

                    <div class="mt-2 py-[7px]">
                        <div class="flex items-center gap-7 w-full">
                            <div class="w-1/3 flex items-center space-x-2 border-r-2 border-[#CCCCCC]">
                                <img src="https://flagcdn.com/w40/za.png" class="w-5 h-4">
                                <span class="text-xs font-medium">SA</span>
                            </div>
                            <span class="w-2/3 text-sm text-gray-600">9th March</span>
                        </div>

                        <div class="flex items-center gap-7 mt-2 w-full">
                            <div class="w-1/3 flex items-center space-x-2 border-r-2 border-[#CCCCCC]">
                                <img src="https://flagcdn.com/w40/nz.png" class="w-5 h-4">
                                <span class="text-xs font-medium">NZ</span>
                            </div>
                            <span class="w-2/3 text-sm text-gray-600">09:00 AM</span>
                        </div>
                    </div>

                    <p class="mt-3 text-xs font-medium text-gray-800">3 hrs 29 mins to toss</p>

                    <div class="mt-4 text-sm text-[#555A64] font-semibold">
                        <?php _e('Win projections to be updated soon...', 'gnws'); ?>
                    </div>

                    <div class="hidden">
                        <div class="w-full bg-gray-300 h-1.5 rounded-full mt-4 relative">
                            <div class="bg-red-500 h-1.5 rounded-full absolute left-0 top-0" style="width: 61%;"></div>
                            <div class="bg-blue-500 h-1.5 rounded-full absolute right-0 top-0" style="width: 39%;"></div>
                        </div>

                        <div class="flex justify-between text-xs text-gray-600 mt-1 pb-2">
                            <span class="text-red-500">SA (61%)</span>
                            <span class="text-blue-500">NZ (39%)</span>
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