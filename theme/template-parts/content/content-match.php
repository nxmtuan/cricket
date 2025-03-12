<?php
if (isset($args['wrap']) && $args['wrap'] == 'big') {
    $padding = 'p-[9px]';
} else {
    $padding = 'p-5';
}
?>
<div
    class="bg-white md:rounded-lg rounded-none md:p-[10px] <?php echo $padding ?> max-sm:bg-[#F1F5F9] border-[#E2E8F0] border">
    <?php if (isset($args['wrap']) && $args['wrap'] == 'big') { ?>
        <div class="p-2">
        <?php } ?>
        <?php if (isset($args['league']) && $args['league']) { ?>
            <h2 class="w-full text-xs font-medium text-[#363636]">
                ICC Champions Trophy, 2025
            </h2>
            <div class="w-full h-[2px] bg-gradient-to-r from-transparent via-[#CCCCCC] to-transparent md:my-2 my-[10px]">
            </div>
        <?php } ?>
        <p class="text-xs text-[#898989] flex items-center font-medium">
            2nd Semi-Final <span class="mx-[10px] text-[#CCCCCC]">|</span>
            <span class="mr-[3px]"><?php echo svg('location', '10', '13') ?></span>
            Lahore
        </p>

        <div class="md:mt-2 mt-[10px] md:py-[6.5px] py-[14px] flex flex-col gap-[7px]">
            <div class="flex items-center gap-7 w-full">
                <div class="w-fit flex gap-[10px] items-center pr-7 border-r-2 border-[#CCCCCC]">
                    <!-- Add a placeholder div for consistency when no flag is present -->
                    <div class="w-[30px] h-5"></div>
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

        <?php if (isset($args['no_odd']) && $args['no_odd']) {
            ?>
            <div class="mt-4 text-sm text-[#555A64] font-semibold">
                <?php _e('Win projections to be updated soon...', 'gnws'); ?>
            </div>
            <?php
        } else {
            ?>
            <p class="md:mt-2 mt-[10px] text-xs font-medium text-[#020817]">13 mins to toss
            </p>

            <div class="flex flex-col w-full items-center">
                <div class="md:w-full w-[90%] bg-gray-300 h-1.5 rounded-full mt-2 relative">
                    <div class="bg-[#EF4444] h-1.5 rounded-l-full absolute left-0 top-0" style="width: 61%;">
                    </div>
                    <div class="bg-[#60A5FA] h-1.5 rounded-r-full absolute right-0 top-0" style="width: 39%;">
                    </div>
                </div>

                <div class="md:w-full w-[90%] flex justify-between md:mt-2 mt-[10px]">
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
        <?php } ?>

        <?php if (isset($args['button']) && $args['button']) { ?>
            <div class="w-full h-[2px] bg-gradient-to-r from-transparent via-[#CCCCCC] to-transparent md:my-2 my-[10px]">
            </div>
            <div class="flex justify-end gap-[10px] text-[#007BBD] text-xs font-semibold">
                <a href="#" class="hover:underline"><?php _e('Schedule', 'gnws'); ?></a>
                <a href="#" class="hover:underline"><?php _e('Points Table', 'gnws'); ?></a>
            </div>
        <?php } ?>

        <?php if (isset($args['wrap']) && $args['wrap'] == 'big') { ?>
        </div>
    <?php } ?>
</div>