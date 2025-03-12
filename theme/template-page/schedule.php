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
            <?php
            for ($i = 0; $i < 9; $i++) {
                get_template_part(
                    'template-parts/content/content',
                    'match',
                    array(
                        'league' => false,
                        'button' => false,
                        'wrap' => 'big'
                    )
                );
            }
            ?>
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
            for ($i = 0; $i < 9; $i++) {
                get_template_part(
                    'template-parts/content/content',
                    'match',
                    array(
                        'league' => false,
                        'button' => false,
                        'wrap' => 'big',
                        'no_odd' => true
                    )
                );
            }
            ?>
        </div>
    </section>
</main>

<?php
get_footer();