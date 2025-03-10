<?php

/**
Template Name: News
 */

get_header();
?>

<main class="news-page bg-[#F1F5F9]">
    <section class="flex justify-center py-[15px]">
        <div class="flex py-[10px] gap-[5px]">
            <div class="bg-secondary w-[84px] text-white px-[3px] text-center text-sm rounded-[10px] overflow-hidden">
                All Matches
            </div>
            <div class="bg-transparent w-[84px] text-black px-[3px] text-center text-sm rounded-[10px] overflow-hidden">
                ICT</div>
            <div class="bg-transparent w-[84px] text-black px-[3px] text-center text-sm rounded-[10px] overflow-hidden">
                WPL</div>
            <div class="bg-transparent w-[84px] text-black px-[3px] text-center text-sm rounded-[10px] overflow-hidden">
                IMLT</div>
            <div class="bg-transparent w-[84px] text-black px-[3px] text-center text-sm rounded-[10px] overflow-hidden">
                RT</div>
            <div class="bg-transparent w-[84px] text-black px-[3px] text-center text-sm rounded-[10px] overflow-hidden">
                TFT</div>
        </div>
    </section>

    <section class="container flex flex-col gap-[18px] bg-white p-[15px] rounded-[14px] shadow mb-[15px]">
        <a href="/">
            <div class="flex flex-col bg-white rounded overflow-hidden justify-around">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/img8.png" alt=""
                    class="w-full rounded-[10px] overflow-hidden" loading="lazy">

                <div class="flex flex-col justify-between w-full mt-[10px]">
                    <div class="flex flex-col gap-[5px]">
                        <div class="tracking-wider dark:text-white text-black font-bold">Steve Smith Has
                            His Say On India Playing All Their Games In Dubai</div>
                        <h2 class="mt-2 font-bold line-clamp-2 w-full md:text-sm text-xs leading-5 text-[#3F4B62]">
                            In a Cricket.com exclusive, the Australian left-hander spoke about her obsessive reverse
                            sweep disorder, playing hockey, her role as a batter and her ability to switch batting
                            orders with ease
                        </h2>
                    </div>
                    <div class="text-xs flex flex-row justify-between text-[#8C98B0] mt-[10px]">
                        <div>By: cricket.top staff</div>
                        <div>29 minutes ago</div>
                    </div>
                </div>
            </div>
        </a>

        <div class="w-full h-[15px] bg-[#8f8f8f]"></div>

        <a href="/">
            <div class="flex gap-[15px] bg-white rounded justify-around">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/img9.png" alt=""
                    class="w-2/5 rounded-[10px] overflow-hidden" loading="lazy">
                <div class="w-3/5 flex flex-col justify-between py-2">
                    <div class="">
                        <div class=" md:text-md tracking-wider dark:text-white text-black font-bold">Steve Smith Has His
                            Say On India Playing All Their Games In Dubai</div>
                        <h2 class="line-clamp-3 lg:text-sm text-xs hidden lg:inline-flex leading-5 text-[#3F4B62]">
                            In a Cricket.com exclusive, the Australian left-hander spoke about her obsessive reverse
                            sweep disorder, playing hockey, her role as a batter and her ability to switch batting
                            orders with ease</h2>
                    </div>
                    <div class="text-xs flex flex-row justify-between text-[#8C98B0]">
                        <div>By: cricket.com staff</div>
                        <div>37 minutes ago</div>
                    </div>
                </div>
            </div>
        </a>

        <div class="w-2/5 h-[15px] bg-[#8f8f8f]"></div>

        <a href="/">
            <div class="flex gap-[15px] bg-white rounded justify-around">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/img9.png" alt=""
                    class="w-2/5 rounded-[10px] overflow-hidden" loading="lazy">
                <div class="w-3/5 flex flex-col justify-between py-2">
                    <div class="">
                        <div class=" md:text-md tracking-wider dark:text-white text-black font-bold">Steve Smith Has His
                            Say On India Playing All Their Games In Dubai</div>
                        <h2 class="line-clamp-3 lg:text-sm text-xs hidden lg:inline-flex leading-5 text-[#3F4B62]">
                            In a Cricket.com exclusive, the Australian left-hander spoke about her obsessive reverse
                            sweep disorder, playing hockey, her role as a batter and her ability to switch batting
                            orders with ease</h2>
                    </div>
                    <div class="text-xs flex flex-row justify-between text-[#8C98B0]">
                        <div>By: cricket.top staff</div>
                        <div>37 minutes ago</div>
                    </div>
                </div>
            </div>
        </a>

    </section>

    <section class="container flex flex-col gap-[18px] bg-white p-[15px] rounded-[14px] shadow">
        <a href="/">
            <div class="flex gap-[15px] bg-white rounded justify-around">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/img9.png" alt=""
                    class="w-2/5 rounded-[10px] overflow-hidden" loading="lazy">
                <div class="w-3/5 flex flex-col justify-between py-2">
                    <div class="">
                        <div class=" md:text-md tracking-wider dark:text-white text-black font-bold">Steve Smith Has His
                            Say On India Playing All Their Games In Dubai</div>
                        <h2 class="line-clamp-3 lg:text-sm text-xs hidden lg:inline-flex leading-5 text-[#3F4B62]">
                            In a Cricket.com exclusive, the Australian left-hander spoke about her obsessive reverse
                            sweep disorder, playing hockey, her role as a batter and her ability to switch batting
                            orders with ease</h2>
                    </div>
                    <div class="text-xs flex flex-row justify-between text-[#8C98B0]">
                        <div>By: cricket.top staff</div>
                        <div>37 minutes ago</div>
                    </div>
                </div>
            </div>
        </a>
    </section>

    <div class="flex justify-center text-center gap-[106px] py-20">
        <a href="/"
            class="w-[223px] uppercase font-bold rounded py-[5px] px-[9px] text-xs text-[#056BEB] border-2 border-[#056BEB]">
            <?php _e('prev', 'gnws'); ?>
        </a>
        <a href="/"
            class="w-[223px] uppercase font-bold rounded py-[5px] px-[9px] text-xs text-[#056BEB] border-2 border-[#056BEB]">
            <?php _e('next', 'gnws'); ?>
        </a>
    </div>
</main>

<?php
get_footer();