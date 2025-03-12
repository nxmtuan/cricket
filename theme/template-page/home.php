<?php

/**
Template Name: Home
 */

get_header();
?>

<main class="home-page bg-[#F1F5F9] md:pb-[55px] pb-[85px]">
    <section class="bg-[#f1f5f9] flex justify-center py-[15px]">
        <div class="md:grid flex grid-cols-6 py-[10px] gap-[10px] auto-cols-max">
            <div
                class="bg-secondary active [&:not(.active)]:bg-transparent [&:not(.active)]:text-[#020817] text-white font-semibold text-center text-sm rounded-[10px] overflow-hidden min-w-max max-sm:w-fit md:px-3 px-[6px] hover:!bg-secondary hover:!text-white duration-150">
                <a href="">All Matches</a>
            </div>
            <div
                class="bg-secondary [&:not(.active)]:bg-transparent [&:not(.active)]:text-[#020817] text-white font-semibold text-center text-sm rounded-[10px] overflow-hidden min-w-max max-sm:w-fit md:px-3 px-[6px] hover:!bg-secondary hover:!text-white duration-150">
                <a href="">ICT</a>
            </div>
            <div
                class="bg-secondary [&:not(.active)]:bg-transparent [&:not(.active)]:text-[#020817] text-white font-semibold text-center text-sm rounded-[10px] overflow-hidden min-w-max max-sm:w-fit md:px-3 px-[6px] hover:!bg-secondary hover:!text-white duration-150">
                <a href="">WPL</a>
            </div>
            <div
                class="bg-secondary [&:not(.active)]:bg-transparent [&:not(.active)]:text-[#020817] text-white font-semibold text-center text-sm rounded-[10px] overflow-hidden min-w-max max-sm:w-fit md:px-3 px-[6px] hover:!bg-secondary hover:!text-white duration-150">
                <a href="">IMLT</a>
            </div>
            <div
                class="bg-secondary [&:not(.active)]:bg-transparent [&:not(.active)]:text-[#020817] text-white font-semibold text-center text-sm rounded-[10px] overflow-hidden min-w-max max-sm:w-fit md:px-3 px-[6px] hover:!bg-secondary hover:!text-white duration-150">
                <a href="">RT</a>
            </div>
            <div
                class="bg-secondary [&:not(.active)]:bg-transparent [&:not(.active)]:text-[#020817] text-white font-semibold text-center text-sm rounded-[10px] overflow-hidden min-w-max max-sm:w-fit md:px-3 px-[6px] hover:!bg-secondary hover:!text-white duration-150">
                <a href="">TFT</a>
            </div>
        </div>
    </section>

    <section class="bg-[#808080D1] max-sm:bg-[#f1f5f9]">
        <div class="container py-5 max-sm:px-0">
            <div class="md:-mx-[5px]"
                data-flickity='{ "draggable": true,"wrapAround": true,"imagesLoaded": true,"prevNextButtons": true, "pageDots": true, "cellAlign": "left","contain": true, "autoPlay":false}'>
                <?php
                for ($i = 0; $i < 9; $i++) {
                    ?>
                    <div class="lg:w-1/3 md:w-1/2 w-full px-[5px]">

                        <div class="bg-white md:rounded-lg rounded-none md:p-[10px] p-5 max-sm:bg-[#F1F5F9]">
                            <h2 class="w-full text-xs font-medium text-[#363636]">
                                ICC Champions Trophy, 2025
                            </h2>
                            <div
                                class="w-full h-[2px] bg-gradient-to-r from-transparent via-[#CCCCCC] to-transparent md:my-2 my-[10px]">
                            </div>
                            <p class="text-xs text-[#898989] flex items-center font-medium">
                                2nd Semi-Final <span class="mx-[10px] text-[#CCCCCC]">|</span>
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
                                        <img src="https://flagcdn.com/w40/nz.png" class="w-[30px] h-5 rounded"
                                            loading="lazy" draggable="false">
                                        <span class="text-sm font-medium text-[#282828]">NZ</span>
                                    </div>
                                    <span class="w-2/3 text-sm text-[#020817] font-medium">09:00 AM</span>
                                </div>
                            </div>

                            <p id="countdown" class="md:mt-2 mt-[10px] text-xs font-medium text-[#020817]">13 mins to toss
                            </p>

                            <div class="flex flex-col w-full items-center">
                                <div class="md:w-full w-[90%] bg-gray-300 h-1.5 rounded-full mt-2 relative">
                                    <div class="bg-[#EF4444] h-1.5 rounded-l-full absolute left-0 top-0"
                                        style="width: 61%;">
                                    </div>
                                    <div class="bg-[#60A5FA] h-1.5 rounded-r-full absolute right-0 top-0"
                                        style="width: 39%;">
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
                            <div
                                class="w-full h-[2px] bg-gradient-to-r from-transparent via-[#CCCCCC] to-transparent md:my-2 my-[10px]">
                            </div>
                            <div class="flex justify-end gap-[10px] text-[#007BBD] text-xs font-semibold">
                                <a href="#" class="hover:underline"><?php _e('Schedule', 'gnws'); ?></a>
                                <a href="#" class="hover:underline"><?php _e('Points Table', 'gnws'); ?></a>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
            <div class="mt-3"></div>
        </div>
    </section>

    <section class="container max-sm:px-0">
        <div class="flex gap-[10px] max-sm:flex-col py-[5px] md:px-[18.5px] md:mt-[5px] max-sm:pt-0 bg-white">
            <div class="flex flex-col gap-[10px] md:w-2/3 w-full max-sm:bg-[#f1f5f9]">
                <section
                    class="pt-[10px] md:pb-[18px] pb-[24.68px] md:px-[10px] px-[17px] border border-[#2B323F33] bg-white rounded shadow-[0_1px_2px_-1px_rgba(0,0,0,0.1),0_1px_3px_0px_rgba(0,0,0,0.1)]">
                    <div class="mb-[10px]">
                        <div class="relative flex flex-col gap-1 text-[#020817]">
                            <div class="font-semibold text-base mb-1"><?php _e('Articles', 'gnws'); ?></div>
                            <div class="absolute bottom-0 w-12 h-1 rounded-md bg-[#6A91A9]"></div>
                        </div>
                    </div>
                    <div class="flex flex-col gap-[10px]">
                        <div class="w-full">
                            <a href="/" class="select-none">
                                <div class="flex flex-col w-full lg:cursor-pointer">
                                    <div class="w-full rounded-md overflow-hidden mb-[7px]">
                                        <div class="">
                                            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/img1.png"
                                                alt="" class="w-full" loading="lazy">
                                        </div>
                                    </div>
                                    <h3
                                        class="overflow-hidden text-[#020817] text-sm text-ellipsis text-left line-clamp-2 lg:line-clamp-1 font-semibold md:text-base mb-[2px]">
                                        Phoebe Litchfield: The Hockey Wunderkind Who Loves Reverse Sweeps And Ramp
                                    </h3>
                                    <h4
                                        class="text-xs lg:text-sm leading-5 font-medium text-left line-clamp-2 text-[#3F4B62]">
                                        In a Cricket.com exclusive, the Australian left-hander spoke about her
                                        obsessive
                                        reverse sweep disorder, playing hockey, her role as a batter and her ability
                                        to
                                        switch batting orders with ease</h4>
                                    <div class="flex items-center text-[#8C98B0] justify-start mb-[7px]">
                                        <p class=" text-xs line-clamp-1 border-r-2 pr-2">Anirudh
                                            Suresh
                                        </p>
                                        <p class="text-xs pl-2">09 Mar 2025</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="pt-1 pb-[9px] -mx-2"
                            data-flickity='{ "draggable": true,"wrapAround": false,"imagesLoaded": true,"prevNextButtons": false, "pageDots": false, "cellAlign": "left","contain": true, "autoPlay":false}'>
                            <?php
                            for ($i = 0; $i < 8; $i++) {
                                ?>
                                <div class="lg:w-1/4 md:w-1/3 w-1/2 px-[5px] text-sm">
                                    <div class="w-full">
                                        <a href="/" class="select-none">
                                            <div class="rounded-md lg:cursor-pointer self-stretch">
                                                <div
                                                    class="flex items-center justify-center overflow-hidden relative rounded-md">
                                                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/img2.png"
                                                        alt="" class="w-full" loading="lazy" draggable="false">
                                                </div>
                                                <h3
                                                    class="mt-2 md:text-sm md:font-semibold font-medium text-xs line-clamp-2 ">
                                                    Varun
                                                    Chakaravarthy: The X-Factor India Need To…</h3>
                                                <div class="flex items-center justify-between text-[#8C98B0]">
                                                    <p class=" text-xs w-6/12 line-clamp-1 border-r-2">Pramod
                                                        Ananth
                                                    </p>
                                                    <p class="text-xs">09 Mar 2025</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                    <div class="md:flex w-max ml-auto pr-[11px] max-sm:pr-0 mt-[10px]">
                        <a href="/"
                            class="uppercase font-bold rounded py-[5px] px-[9px] text-xs text-[#056BEB] border-2 border-[#056BEB] hover:scale-105 transition-all duration-150">
                            <?php _e('more articles', 'gnws'); ?>
                        </a>
                    </div>
                </section>

                <section
                    class="pt-[10px] md:pb-[18px] pb-[24.68px] md:px-[10px] px-[17px] border border-[#2B323F33] bg-white rounded shadow-[0_1px_2px_-1px_rgba(0,0,0,0.1),0_1px_3px_0px_rgba(0,0,0,0.1)]">
                    <div class="mb-[10px]">
                        <div class="relative flex flex-col gap-1 text-[#020817]">
                            <div class="font-semibold text-base mb-1"><?php _e('Featured Videos', 'gnws'); ?></div>
                            <div class="absolute bottom-0 w-12 h-1 rounded-md bg-[#6A91A9]"></div>
                        </div>
                    </div>
                    <div class="flex flex-col gap-[10px]">
                        <div class="w-full">
                            <a href="/" class="select-none">
                                <div class="flex flex-col w-full lg:cursor-pointer">
                                    <div class="w-full rounded-md overflow-hidden mb-[7px]">
                                        <div class="">
                                            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/img3.png"
                                                alt="" class="w-full" loading="lazy">
                                        </div>
                                    </div>
                                    <h3
                                        class="overflow-hidden text-[#020817] text-sm text-ellipsis text-left line-clamp-2 lg:line-clamp-1 font-semibold md:text-base mb-[2px]">
                                        Phoebe Litchfield: The Hockey Wunderkind Who Loves Reverse Sweeps And Ramp
                                    </h3>
                                    <h4
                                        class="text-xs lg:text-sm leading-5 font-medium text-left line-clamp-2 text-[#3F4B62]">
                                        In a Cricket.com exclusive, the Australian left-hander spoke about her
                                        obsessive
                                        reverse sweep disorder, playing hockey, her role as a batter and her ability
                                        to
                                        switch batting orders with ease</h4>
                                    <div class="flex items-center text-[#8C98B0] justify-start mb-[7px]">
                                        <p class=" text-xs line-clamp-1 border-r-2 pr-2">Anirudh
                                            Suresh
                                        </p>
                                        <p class="text-xs pl-2">09 Mar 2025</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="pt-1 pb-[9px] -mx-2"
                            data-flickity='{ "draggable": true,"wrapAround": false,"imagesLoaded": true,"prevNextButtons": false, "pageDots": false, "cellAlign": "left","contain": true, "autoPlay":false}'>
                            <?php
                            for ($i = 0; $i < 8; $i++) {
                                ?>
                                <div class="lg:w-1/4 md:w-1/3 w-1/2 px-[5px] text-sm">
                                    <div class="w-full">
                                        <a href="/" class="select-none">
                                            <div class="rounded-md lg:cursor-pointer self-stretch">
                                                <div
                                                    class="flex items-center justify-center overflow-hidden relative rounded-md">
                                                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/img3.png"
                                                        alt="" class="w-full" loading="lazy" draggable="false">
                                                </div>
                                                <h3
                                                    class="mt-2 md:text-sm md:font-semibold font-medium text-xs line-clamp-2 ">
                                                    Varun
                                                    Chakaravarthy: The X-Factor India Need To…</h3>
                                                <div class="flex items-center justify-between text-[#8C98B0]">
                                                    <p class=" text-xs w-6/12 line-clamp-1 border-r-2">Pramod
                                                        Ananth
                                                    </p>
                                                    <p class="text-xs">09 Mar 2025</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                    <div class="md:flex w-max ml-auto pr-[11px] max-sm:pr-0 mt-[10px]">
                        <a href="/"
                            class="uppercase font-bold rounded py-[5px] px-[9px] text-xs text-[#056BEB] border-2 border-[#056BEB] hover:scale-105 transition-all duration-150">
                            <?php _e('more articles', 'gnws'); ?>
                        </a>
                    </div>
                </section>

                <section
                    class="pt-[10px] md:pb-[18px] pb-[24.68px] md:px-[10px] px-[17px] border border-[#2B323F33] bg-white rounded shadow-[0_1px_2px_-1px_rgba(0,0,0,0.1),0_1px_3px_0px_rgba(0,0,0,0.1)]">
                    <div class="mb-[10px]">
                        <div class="relative flex flex-col gap-1 text-[#020817]">
                            <div class="font-semibold text-base mb-1"><?php _e('ICC Champions Trophy, 2025', 'gnws'); ?>
                            </div>
                            <div class="absolute bottom-0 w-12 h-1 rounded-md bg-[#6A91A9]"></div>
                        </div>
                    </div>
                    <div class="flex flex-col gap-[10px] mb-[10px]">
                        <div class="pt-1 pb-[9px] -mx-2"
                            data-flickity='{ "draggable": true,"wrapAround": false,"imagesLoaded": true,"prevNextButtons": false, "pageDots": false, "cellAlign": "left","contain": true, "autoPlay":false}'>
                            <?php
                            for ($i = 0; $i < 8; $i++) {
                                ?>
                                <div class="lg:w-1/4 md:w-1/3 w-1/2 px-[5px] text-sm">
                                    <div class="w-full">
                                        <a href="/" class="select-none">
                                            <div class="rounded-md lg:cursor-pointer self-stretch">
                                                <div
                                                    class="flex items-center justify-center overflow-hidden relative rounded-md">
                                                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/img4.png"
                                                        alt="" class="w-full" loading="lazy" draggable="false">
                                                </div>
                                                <h3
                                                    class="mt-2 md:text-sm md:font-semibold font-medium text-xs line-clamp-2 ">
                                                    Varun
                                                    Chakaravarthy: The X-Factor India Need To…</h3>
                                                <div class="flex items-center justify-between text-[#8C98B0]">
                                                    <p class=" text-xs w-6/12 line-clamp-1 border-r-2">Pramod
                                                        Ananth
                                                    </p>
                                                    <p class="text-xs">09 Mar 2025</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                    <div class="md:flex w-max ml-auto pr-[11px] max-sm:pr-0">
                        <a href="/"
                            class="uppercase font-bold rounded py-[5px] px-[9px] text-xs text-[#056BEB] border-2 border-[#056BEB] hover:scale-105 transition-all duration-150">
                            <?php _e('more articles', 'gnws'); ?>
                        </a>
                    </div>
                </section>

                <section
                    class="pt-[10px] md:pb-[18px] pb-[24.68px] md:px-[10px] px-[17px] border border-[#2B323F33] bg-white rounded shadow-[0_1px_2px_-1px_rgba(0,0,0,0.1),0_1px_3px_0px_rgba(0,0,0,0.1)]">
                    <div class="mb-[10px]">
                        <div class="relative flex flex-col gap-1 text-[#020817]">
                            <div class="font-semibold text-base mb-1">
                                <?php _e('Indian Premier League, 2025', 'gnws'); ?>
                            </div>
                            <div class="absolute bottom-0 w-12 h-1 rounded-md bg-[#6A91A9]"></div>
                        </div>
                    </div>
                    <div class="flex flex-col gap-[10px] mb-[10px]">
                        <div class="pt-1 pb-[9px] -mx-2"
                            data-flickity='{ "draggable": true,"wrapAround": false,"imagesLoaded": true,"prevNextButtons": false, "pageDots": false, "cellAlign": "left","contain": true, "autoPlay":false}'>
                            <?php
                            for ($i = 0; $i < 8; $i++) {
                                ?>
                                <div class="lg:w-1/4 md:w-1/3 w-1/2 px-[5px] text-sm">
                                    <div class="w-full">
                                        <a href="/" class="select-none">
                                            <div class="rounded-md lg:cursor-pointer self-stretch">
                                                <div
                                                    class="flex items-center justify-center overflow-hidden relative rounded-md">
                                                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/img5.png"
                                                        alt="" class="w-full" loading="lazy" draggable="false">
                                                </div>
                                                <h3
                                                    class="mt-2 md:text-sm md:font-semibold font-medium text-xs line-clamp-2 ">
                                                    Varun
                                                    Chakaravarthy: The X-Factor India Need To…</h3>
                                                <div class="flex items-center justify-between text-[#8C98B0]">
                                                    <p class=" text-xs w-6/12 line-clamp-1 border-r-2">Pramod
                                                        Ananth
                                                    </p>
                                                    <p class="text-xs">09 Mar 2025</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                    <div class="md:flex w-max ml-auto pr-[11px] max-sm:pr-0">
                        <a href="/"
                            class="uppercase font-bold rounded py-[5px] px-[9px] text-xs text-[#056BEB] border-2 border-[#056BEB] hover:scale-105 transition-all duration-150">
                            <?php _e('more articles', 'gnws'); ?>
                        </a>
                    </div>
                </section>

                <section
                    class="pt-[10px] md:pb-[18px] pb-[24.68px] md:px-[10px] px-[17px] border border-[#2B323F33] bg-white rounded shadow-[0_1px_2px_-1px_rgba(0,0,0,0.1),0_1px_3px_0px_rgba(0,0,0,0.1)]">
                    <div class="mb-[10px]">
                        <div class="relative flex flex-col gap-1 text-[#020817]">
                            <div class="font-semibold text-base mb-1">
                                <?php _e('Womens Premier League, 2025', 'gnws'); ?>
                            </div>
                            <div class="absolute bottom-0 w-12 h-1 rounded-md bg-[#6A91A9]"></div>
                        </div>
                    </div>
                    <div class="flex flex-col gap-[10px] mb-[10px]">
                        <div class="pt-1 pb-[9px] -mx-2"
                            data-flickity='{ "draggable": true,"wrapAround": false,"imagesLoaded": true,"prevNextButtons": false, "pageDots": false, "cellAlign": "left","contain": true, "autoPlay":false}'>
                            <?php
                            for ($i = 0; $i < 8; $i++) {
                                ?>
                                <div class="lg:w-1/4 md:w-1/3 w-1/2 px-[5px] text-sm">
                                    <div class="w-full">
                                        <a href="/" class="select-none">
                                            <div class="rounded-md lg:cursor-pointer self-stretch">
                                                <div
                                                    class="flex items-center justify-center overflow-hidden relative rounded-md">
                                                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/img6.png"
                                                        alt="" class="w-full" loading="lazy" draggable="false">
                                                </div>
                                                <h3
                                                    class="mt-2 md:text-sm md:font-semibold font-medium text-xs line-clamp-2 ">
                                                    Varun
                                                    Chakaravarthy: The X-Factor India Need To…</h3>
                                                <div class="flex items-center justify-between text-[#8C98B0]">
                                                    <p class=" text-xs w-6/12 line-clamp-1 border-r-2">Pramod
                                                        Ananth
                                                    </p>
                                                    <p class="text-xs">09 Mar 2025</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                    <div class="md:flex w-max ml-auto pr-[11px] max-sm:pr-0">
                        <a href="/"
                            class="uppercase font-bold rounded py-[5px] px-[9px] text-xs text-[#056BEB] border-2 border-[#056BEB] hover:scale-105 transition-all duration-150">
                            <?php _e('more articles', 'gnws'); ?>
                        </a>
                    </div>
                </section>

                <section
                    class="pt-[10px] md:pb-[18px] pb-[24.68px] md:px-[10px] px-[17px] border border-[#2B323F33] bg-white rounded shadow-[0_1px_2px_-1px_rgba(0,0,0,0.1),0_1px_3px_0px_rgba(0,0,0,0.1)]">
                    <div class="mb-[10px]">
                        <div class="relative flex flex-col gap-1 text-[#020817]">
                            <div class="font-semibold text-base mb-1"><?php _e('Ranji Trophy, 2024/25', 'gnws'); ?>
                            </div>
                            <div class="absolute bottom-0 w-12 h-1 rounded-md bg-[#6A91A9]"></div>
                        </div>
                    </div>
                    <div class="flex flex-col gap-[10px] mb-[10px]">
                        <div class="pt-1 pb-[9px] -mx-2"
                            data-flickity='{ "draggable": true,"wrapAround": false,"imagesLoaded": true,"prevNextButtons": false, "pageDots": false, "cellAlign": "left","contain": true, "autoPlay":false}'>
                            <?php
                            for ($i = 0; $i < 8; $i++) {
                                ?>
                                <div class="lg:w-1/4 md:w-1/3 w-1/2 px-[5px] text-sm">
                                    <div class="w-full">
                                        <a href="/" class="select-none">
                                            <div class="rounded-md lg:cursor-pointer self-stretch">
                                                <div
                                                    class="flex items-center justify-center overflow-hidden relative rounded-md">
                                                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/img7.png"
                                                        alt="" class="w-full" loading="lazy" draggable="false">
                                                </div>
                                                <h3
                                                    class="mt-2 md:text-sm md:font-semibold font-medium text-xs line-clamp-2 ">
                                                    Varun
                                                    Chakaravarthy: The X-Factor India Need To…</h3>
                                                <div class="flex items-center justify-between text-[#8C98B0]">
                                                    <p class=" text-xs w-6/12 line-clamp-1 border-r-2">Pramod
                                                        Ananth
                                                    </p>
                                                    <p class="text-xs">09 Mar 2025</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                    <div class="md:flex w-max ml-auto pr-[11px] max-sm:pr-0">
                        <a href="/"
                            class="uppercase font-bold rounded py-[5px] px-[9px] text-xs text-[#056BEB] border-2 border-[#056BEB] hover:scale-105 transition-all duration-150">
                            <?php _e('more articles', 'gnws'); ?>
                        </a>
                    </div>
                </section>

            </div>

            <div class="w-1/3 max-sm:w-full">

                <section class="mb-[9px]">
                    <div class="bg-white shadow rounded-md p-[10px] w-full border border-[#2B323F33]">
                        <div class="mb-3">
                            <div class="relative flex justify-between py-[13px] px-[9px]">
                                <div class="w-1/2 relative">
                                    <div class="font-semibold text-sm md:text-base mb-1">
                                        <?php _e('Points Table', 'gnws'); ?>
                                    </div>
                                    <div class="absolute bottom-0 w-12 h-1 rounded-md bg-[#6A91A9]"></div>
                                </div>
                                <div class="w-1/2 flex">
                                    <a href="/"
                                        class="uppercase font-bold rounded py-[5px] px-[9px] text-xs text-[#056BEB] border-2 border-[#056BEB] ml-auto hover:scale-105 transition-all duration-150">
                                        <?php _e('view more', 'gnws'); ?>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="relative">
                            <button id="btnDropdown"
                                class="w-full text-left text-black text-sm font-semibold px-[7px] py-2 rounded-lg overflow-hidden bg-white flex items-center justify-between shadow-[0px_2px_4px_-2px_rgba(0,0,0,0.1),0px_4px_6px_-1px_rgba(0,0,0,0.1)]">
                                Women’s Premier League, 2025
                                <?php echo svg('chevron-down', '17', '24') ?>
                            </button>

                            <!-- Dropdown list -->
                            <ul id="dropdownList"
                                class="absolute w-full bg-white shadow-lg overflow-hidden border rounded-lg z-10 hidden text-sm font-normal">
                                <li class="px-4 py-2 hover:bg-gray-200 cursor-pointer">Bangladesh Premier League,
                                    2024/25</li>
                                <li class="px-4 py-2 hover:bg-gray-200 cursor-pointer">Big Bash League, 2024/25</li>
                                <li class="px-4 py-2 hover:bg-gray-200 cursor-pointer">Abu Dhabi T10 League, 2024</li>
                                <li class="px-4 py-2 hover:bg-gray-200 cursor-pointer">ICC Women’s T20 World Cup, 2024
                                </li>
                                <li class="px-4 py-2 hover:bg-gray-200 cursor-pointer">Caribbean Premier League, 2024
                                </li>
                            </ul>
                        </div>

                        <table class="w-full mt-2 border-collapse text-sm">
                            <thead>
                                <tr class="text-[#020817] border-b">
                                    <th class="p-2 font-medium text-left">Team</th>
                                    <th class="p-2 font-medium">M</th>
                                    <th class="p-2 font-medium">W</th>
                                    <th class="p-2 font-medium">L</th>
                                    <th class="p-2 font-medium">T</th>
                                    <th class="p-2 font-medium">NR</th>
                                    <th class="p-2 font-medium">PT</th>
                                    <th class="p-2 font-medium">NRR</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="p-2 flex items-center">
                                        <div class="mr-2"><?php echo svg('team-logo', '32', '24') ?></div>
                                        MI
                                    </td>
                                    <td class="p-2 text-center">7</td>
                                    <td class="p-2 text-center">5</td>
                                    <td class="p-2 text-center">2</td>
                                    <td class="p-2 text-center">0</td>
                                    <td class="p-2 text-center">0</td>
                                    <td class="p-2 text-center">10</td>
                                    <td class="p-2 text-center">+0.482</td>
                                </tr>
                                <tr>
                                    <td class="p-2 flex items-center">
                                        <div class="mr-2"><?php echo svg('team-logo', '32', '24') ?></div>
                                        MI
                                    </td>
                                    <td class="p-2 text-center">7</td>
                                    <td class="p-2 text-center">5</td>
                                    <td class="p-2 text-center">2</td>
                                    <td class="p-2 text-center">0</td>
                                    <td class="p-2 text-center">0</td>
                                    <td class="p-2 text-center">10</td>
                                    <td class="p-2 text-center">+0.482</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </section>

                <section class="mb-[9px]">
                    <div class="bg-white shadow rounded-md p-[10px] w-full border border-[#2B323F33] pb-[58px]">
                        <div class="mb-3">
                            <div class="relative flex justify-between py-[13px] px-[9px]">
                                <div class="w-1/2 relative">
                                    <div class="font-semibold text-sm md:text-base mb-1">
                                        <?php _e('Ranking', 'gnws'); ?>
                                    </div>
                                    <div class="absolute bottom-0 w-12 h-1 rounded-md bg-[#6A91A9]"></div>
                                </div>
                                <div class="w-1/2 flex">
                                    <a href="/"
                                        class="uppercase font-bold rounded py-[5px] px-[9px] text-xs text-[#056BEB] border-2 border-[#056BEB] ml-auto hover:scale-105 transition-all duration-150">
                                        <?php _e('view more', 'gnws'); ?>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="flex justify-between gap-[10px] mt-3">
                            <button
                                class="tab-btn w-1/3 px-4 py-1 [&:not(.active)]:text-black [&:not(.active)]:bg-[#E4E4E7] text-white bg-[#056BEB] rounded-full text-sm font-medium active"
                                data-tab="test">Test</button>
                            <button
                                class="tab-btn w-1/3 px-4 py-1 [&:not(.active)]:text-black [&:not(.active)]:bg-[#E4E4E7] text-white bg-[#056BEB] rounded-full text-sm font-medium"
                                data-tab="odi">ODI</button>
                            <button
                                class="tab-btn w-1/3 px-4 py-1 [&:not(.active)]:text-black [&:not(.active)]:bg-[#E4E4E7] text-white bg-[#056BEB] rounded-full text-sm font-medium"
                                data-tab="t20">T20</button>
                        </div>

                        <div class="sub-tabs flex justify-between text-center mt-3 text-sm font-medium border-b">
                            <span
                                class="sub-tab w-1/4 cursor-pointer [&:not(.active)]:text-[#3F4B62] [&:not(.active)]:border-transparent text-[#056BEB] border-b-2 border-[#056BEB] pb-1 active"
                                data-subtab="test-batter">Test</span>
                            <span
                                class="sub-tab w-1/4 cursor-pointer [&:not(.active)]:text-[#3F4B62] [&:not(.active)]:border-transparent text-[#056BEB] border-b-2 border-[#056BEB] pb-1"
                                data-subtab="batter">Batter</span>
                            <span
                                class="sub-tab w-1/4 cursor-pointer [&:not(.active)]:text-[#3F4B62] [&:not(.active)]:border-transparent text-[#056BEB] border-b-2 border-[#056BEB] pb-1"
                                data-subtab="bowler">Bowler</span>
                            <span
                                class="sub-tab w-1/4 cursor-pointer [&:not(.active)]:text-[#3F4B62] [&:not(.active)]:border-transparent text-[#056BEB] border-b-2 border-[#056BEB] pb-1"
                                data-subtab="alr">ALR</span>
                        </div>

                        <!-- Nội dung bảng -->
                        <div id="content">
                            <table class="w-full mt-3 text-sm">
                                <thead class="text-gray-500 text-left">
                                    <tr>
                                        <th class="pb-2 text-center">Rank</th>
                                        <th class="pb-2">Team</th>
                                        <th class="pb-2 text-center">Rating</th>
                                    </tr>
                                </thead>
                                <tbody class="text-gray-800">
                                    <tr>
                                        <td class="py-1 text-center">1</td>
                                        <td class="py-1">Australia</td>
                                        <td class="py-1 text-center">127</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>

                <section class="bg-white flex flex-col items-center shadow rounded py-4 max-sm:hidden">
                    <div class="text-lg font-bold mb-3">Follow cricket.top</div>
                    <div class="flex justify-center gap-7">
                        <a href="/"><?php echo svg('tw-1', '64', '53') ?></a>
                        <a href="/"><?php echo svg('ig-1', '64', '64') ?></a>
                        <a href="/"><?php echo svg('youtube-1', '64', '64') ?></a>
                    </div>
                </section>
            </div>
        </div>

    </section>
</main>

<?php
get_footer();