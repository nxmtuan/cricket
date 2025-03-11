<?php

/**
Template Name: Home
 */

get_header();
?>

<main class="home-page bg-[#F1F5F9] max-sm:pb-[85px]">
    <section class="bg-white flex justify-center py-[15px] max-sm:bg-[#F1F5F9]">
        <div class="flex py-[10px] gap-[5px] max-sm:gap-[10px]">
            <div
                class="bg-secondary w-[84px] text-white px-[3px] text-center text-sm rounded-[10px] overflow-hidden max-sm:w-fit max-sm:px-[6px]">
                All Matches
            </div>
            <div
                class="bg-transparent w-[84px] text-black px-[3px] text-center text-sm rounded-[10px] overflow-hidden max-sm:w-fit max-sm:px-[6px]">
                ICT</div>
            <div
                class="bg-transparent w-[84px] text-black px-[3px] text-center text-sm rounded-[10px] overflow-hidden max-sm:w-fit max-sm:px-[6px]">
                WPL</div>
            <div
                class="bg-transparent w-[84px] text-black px-[3px] text-center text-sm rounded-[10px] overflow-hidden max-sm:w-fit max-sm:px-[6px]">
                IMLT</div>
            <div
                class="bg-transparent w-[84px] text-black px-[3px] text-center text-sm rounded-[10px] overflow-hidden max-sm:w-fit max-sm:px-[6px]">
                RT</div>
            <div
                class="bg-transparent w-[84px] text-black px-[3px] text-center text-sm rounded-[10px] overflow-hidden max-sm:w-fit max-sm:px-[6px]">
                TFT</div>
        </div>
    </section>

    <section class="bg-[#808080D1] max-sm:bg-[#f1f5f9]">
        <div class="container py-5 max-sm:px-0">
            <div class="-mx-[5px]"
                data-flickity='{ "draggable": true,"wrapAround": true,"imagesLoaded": true,"prevNextButtons": true, "pageDots": true, "cellAlign": "left","contain": true, "autoPlay":false}'>
                <?php
                for ($i = 0; $i < 9; $i++) {
                    ?>
                    <div class="lg:w-1/3 md:w-1/2 w-full px-[5px]">

                        <div
                            class=" bg-white shadow-md rounded-lg p-4 border max-sm:bg-[#F1F5F9] max-sm:rounded-none max-sm:mr-0 max-sm:border-none">
                            <h2 class="w-full pb-2 text-[15px] font-medium text-gray-900 border-b-2 border-[#CCCCCC]">
                                ICC Champions
                                Trophy, 2025</h2>
                            <p class="text-[13px] text-gray-500 flex items-center mt-2 gap-2">
                                2nd Semi-Final <span class="mx-1 text-[#CCCCCC]">|</span>
                                <?php echo svg('location', '10', '13') ?>
                                Lahore
                            </p>

                            <div class="mt-2 py-[7px]">
                                <div class="flex items-center gap-7 w-full">
                                    <div class="w-1/3 flex items-center space-x-2 border-r-2 border-[#CCCCCC]">
                                        <img src="https://flagcdn.com/w40/za.png" alt="" class="w-5 h-4" loading="lazy"
                                            draggable="false">
                                        <span class="text-sm font-medium">SA</span>
                                    </div>
                                    <span class="w-2/3 text-sm text-gray-600">5th March</span>
                                </div>

                                <div class="flex items-center gap-7 mt-2 w-full">
                                    <div class="w-1/3 flex items-center space-x-2 border-r-2 border-[#CCCCCC]">
                                        <img src="https://flagcdn.com/w40/nz.png" class="w-5 h-4" loading="lazy"
                                            draggable="false">
                                        <span class="text-sm font-medium">NZ</span>
                                    </div>
                                    <span class="w-2/3 text-sm text-gray-600">09:00 AM</span>
                                </div>
                            </div>

                            <p id="countdown" class="mt-3 text-[13px] font-medium text-gray-800">13 mins to toss</p>

                            <div class="w-full bg-gray-300 h-1.5 rounded-full mt-2 relative">
                                <div class="bg-red-500 h-1.5 rounded-full absolute left-0 top-0" style="width: 61%;">
                                </div>
                                <div class="bg-blue-500 h-1.5 rounded-full absolute right-0 top-0" style="width: 39%;">
                                </div>
                            </div>

                            <div class="flex justify-between text-xs text-gray-600 mt-1 pb-2 border-b-2 border-[#CCCCCC]">
                                <span class="text-red-500">SA (61%)</span>
                                <span class="text-blue-500">NZ (39%)</span>
                            </div>

                            <div class="flex justify-end space-x-6 text-blue-500 text-[13px] font-medium pt-2">
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

    <section class="container py-[5px] px-5 flex gap-[10px] max-sm:flex-col max-sm:px-0">
        <div class="w-2/3 max-sm:w-full">

            <section
                class="mx-3 mb-[5px] shadow border border-gray/20 md:mx-0  dark:bg-gray bg-white p-3 md:px-6 md:p-4 rounded max-sm:mx-0 max-sm:px-[17px]">
                <div class="mb-3">
                    <div class="relative flex flex-col gap-1">
                        <div class="font-semibold text-sm md:text-base mb-1"><?php _e('Articles', 'gnws'); ?></div>
                        <div class="absolute bottom-0 w-12 h-1 rounded-md bg-[#6A91A9]"></div>
                    </div>
                </div>
                <div class="flex flex-col">
                    <div class="mb-2">
                        <div class="w-full">
                            <a href="/" class="select-none">
                                <div class="flex flex-col  w-full lg:cursor-pointer">
                                    <div class="w-full rounded-md overflow-hidden">
                                        <div class="">
                                            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/img1.png"
                                                alt="" class="w-full" loading="lazy" draggable="false">
                                        </div>
                                    </div>
                                    <h3
                                        class="overflow-hidden mt-2 text-sm text-ellipsis text-left line-clamp-2 lg:line-clamp-1 font-semibold md:text-base">
                                        Phoebe Litchfield: The Hockey Wunderkind Who Loves Reverse Sweeps And Ramp
                                    </h3>
                                    <h4
                                        class="text-xs lg:text-sm leading-5 text-gray-9 font-medium text-left line-clamp-2 mt-2">
                                        In a Cricket.com exclusive, the Australian left-hander spoke about her obsessive
                                        reverse sweep disorder, playing hockey, her role as a batter and her ability to
                                        switch batting orders with ease</h4>
                                    <div class="flex items-center text-[#8C98B0] justify-start mt-2">
                                        <p class=" text-gray-2 text-xs  line-clamp-1  border-r-2 pr-2">Anirudh Suresh
                                        </p>
                                        <p class="text-gray-2 text-xs pl-2">09 Mar 2025</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="mt-3 pt-1 pb-[9px] -mx-2"
                        data-flickity='{ "draggable": true,"wrapAround": false,"imagesLoaded": true,"prevNextButtons": false, "pageDots": false, "cellAlign": "left","contain": true, "autoPlay":false}'>
                        <?php
                        for ($i = 0; $i < 8; $i++) {
                            ?>
                            <div class="lg:w-1/4 md:w-1/3 w-1/2 px-2 text-sm">
                                <div class="w-full">
                                    <a href="/" class="select-none">
                                        <div class="rounded-md lg:cursor-pointer self-stretch">
                                            <div
                                                class="flex items-center justify-center overflow-hidden relative rounded-md">
                                                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/img2.png"
                                                    alt="" class="w-full" loading="lazy" draggable="false">
                                            </div>
                                            <h3 class="mt-2 md:text-sm md:font-semibold text-xs line-clamp-2 ">Varun
                                                Chakaravarthy: The X-Factor India Need To…</h3>
                                            <div class="flex items-center justify-between text-[#8C98B0]">
                                                <p class=" text-gray-2 text-xs w-6/12 line-clamp-1 border-r-2">Pramod Ananth
                                                </p>
                                                <p class="text-gray-2 text-xs">09 Mar 2025</p>
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
                <div class="md:flex w-max ml-auto mt-3 mb-[5px] hidden">
                    <a href="/"
                        class="uppercase font-bold rounded py-[5px] px-[9px] text-xs text-[#056BEB] border-2 border-[#056BEB]">
                        <?php _e('more articles', 'gnws'); ?>
                    </a>
                </div>
            </section>

            <section
                class="mx-3 my-[5px] shadow border border-gray/20  md:mx-0  dark:bg-gray bg-white p-3 md:px-6 md:p-4  rounded max-sm:mx-0 max-sm:px-[17px]">
                <div class="mb-3">
                    <div class="relative flex flex-col gap-1">
                        <div class="font-semibold text-sm md:text-base mb-1"><?php _e('Featured Videos', 'gnws'); ?>
                        </div>
                        <div class="absolute bottom-0 w-12 h-1 rounded-md bg-[#6A91A9]"></div>
                    </div>
                </div>
                <div class="flex flex-col">
                    <div class="mb-2">
                        <div class="w-full">
                            <a href="/" class="select-none">
                                <div class="flex flex-col  w-full lg:cursor-pointer">
                                    <div class="w-full rounded-md overflow-hidden">
                                        <div class="">
                                            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/img3.png"
                                                alt="" class="w-full" loading="lazy" draggable="false">
                                        </div>
                                    </div>
                                    <h3
                                        class="overflow-hidden mt-2 text-sm text-ellipsis text-left line-clamp-2 lg:line-clamp-1 font-semibold md:text-base">
                                        Phoebe Litchfield: The Hockey Wunderkind Who Loves Reverse Sweeps And Ramp
                                    </h3>
                                    <h4
                                        class="text-xs lg:text-sm leading-5 text-gray-9 font-medium text-left line-clamp-2 mt-2">
                                        In a Cricket.com exclusive, the Australian left-hander spoke about her obsessive
                                        reverse sweep disorder, playing hockey, her role as a batter and her ability to
                                        switch batting orders with ease</h4>
                                    <div class="flex items-center text-[#8C98B0] justify-start mt-2">
                                        <p class=" text-gray-2 text-xs  line-clamp-1  border-r-2 pr-2">Anirudh Suresh
                                        </p>
                                        <p class="text-gray-2 text-xs pl-2">09 Mar 2025</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="mt-3 pt-1 pb-[9px] -mx-2"
                        data-flickity='{ "draggable": true,"wrapAround": false,"imagesLoaded": true,"prevNextButtons": false, "pageDots": false, "cellAlign": "left","contain": true, "autoPlay":false}'>
                        <?php
                        for ($i = 0; $i < 8; $i++) {
                            ?>
                            <div class="lg:w-1/4 md:w-1/3 w-1/2 px-2 text-sm">
                                <div class="w-full">
                                    <a href="/" class="select-none">
                                        <div class="rounded-md lg:cursor-pointer self-stretch">
                                            <div
                                                class="flex items-center justify-center overflow-hidden relative rounded-md">
                                                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/img3.png"
                                                    alt="" class="w-full" loading="lazy" draggable="false">
                                            </div>
                                            <h3 class="mt-2 md:text-sm md:font-semibold text-xs line-clamp-2 ">Varun
                                                Chakaravarthy: The X-Factor India Need To…</h3>
                                            <div class="flex items-center justify-between text-[#8C98B0]">
                                                <p class=" text-gray-2 text-xs w-6/12 line-clamp-1 border-r-2">Pramod Ananth
                                                </p>
                                                <p class="text-gray-2 text-xs">09 Mar 2025</p>
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
                <div class="md:flex w-max ml-auto mt-3 mb-[5px] hidden">
                    <a href="/"
                        class="uppercase font-bold rounded py-[5px] px-[9px] text-xs text-[#056BEB] border-2 border-[#056BEB]">
                        <?php _e('more articles', 'gnws'); ?>
                    </a>
                </div>
            </section>

            <section
                class="mx-3 my-[5px] shadow border border-gray/20  md:mx-0  dark:bg-gray bg-white p-3 md:px-6 md:p-4  rounded max-sm:mx-0 max-sm:px-[17px]">
                <div class="mb-3">
                    <div class="relative flex flex-col gap-1">
                        <div class="font-semibold text-sm md:text-base mb-1">
                            <?php _e('ICC Champions Trophy, 2025', 'gnws'); ?>
                        </div>
                        <div class="absolute bottom-0 w-12 h-1 rounded-md bg-[#6A91A9]"></div>
                    </div>
                </div>
                <div class="flex flex-col">
                    <div class="mt-3 pt-1 pb-[9px] -mx-2"
                        data-flickity='{ "draggable": true,"wrapAround": false,"imagesLoaded": true,"prevNextButtons": false, "pageDots": false, "cellAlign": "left","contain": true, "autoPlay":false}'>
                        <?php
                        for ($i = 0; $i < 8; $i++) {
                            ?>
                            <div class="lg:w-1/4 md:w-1/3 w-1/2 px-2 text-sm">
                                <div class="w-full">
                                    <a href="/" class="select-none">
                                        <div class="rounded-md lg:cursor-pointer self-stretch">
                                            <div
                                                class="flex items-center justify-center overflow-hidden relative rounded-md">
                                                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/img4.png"
                                                    alt="" class="w-full" loading="lazy" draggable="false">
                                            </div>
                                            <h3 class="mt-2 md:text-sm md:font-semibold text-xs line-clamp-2 ">Varun
                                                Chakaravarthy: The X-Factor India Need To…</h3>
                                            <div class="flex items-center justify-between text-[#8C98B0]">
                                                <p class=" text-gray-2 text-xs w-6/12 line-clamp-1 border-r-2">Pramod Ananth
                                                </p>
                                                <p class="text-gray-2 text-xs">09 Mar 2025</p>
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
                <div class="md:flex w-max ml-auto mt-3 mb-[5px] hidden">
                    <a href="/"
                        class="uppercase font-bold rounded py-[5px] px-[9px] text-xs text-[#056BEB] border-2 border-[#056BEB]">
                        <?php _e('more articles', 'gnws'); ?>
                    </a>
                </div>
            </section>

            <section
                class="mx-3 my-[5px] shadow border border-gray/20  md:mx-0  dark:bg-gray bg-white p-3 md:px-6 md:p-4  rounded max-sm:mx-0 max-sm:px-[17px]">
                <div class="mb-3">
                    <div class="relative flex flex-col gap-1">
                        <div class="font-semibold text-sm md:text-base mb-1">
                            <?php _e('Indian Premier League, 2025', 'gnws'); ?>
                        </div>
                        <div class="absolute bottom-0 w-12 h-1 rounded-md bg-[#6A91A9]"></div>
                    </div>
                </div>
                <div class="flex flex-col">
                    <div class="mt-3 pt-1 pb-[9px] -mx-2"
                        data-flickity='{ "draggable": true,"wrapAround": false,"imagesLoaded": true,"prevNextButtons": false, "pageDots": false, "cellAlign": "left","contain": true, "autoPlay":false}'>
                        <?php
                        for ($i = 0; $i < 8; $i++) {
                            ?>
                            <div class="lg:w-1/4 md:w-1/3 w-1/2 px-2 text-sm">
                                <div class="w-full">
                                    <a href="/" class="select-none">
                                        <div class="rounded-md lg:cursor-pointer self-stretch">
                                            <div
                                                class="flex items-center justify-center overflow-hidden relative rounded-md">
                                                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/img5.png"
                                                    alt="" class="w-full" loading="lazy" draggable="false">
                                            </div>
                                            <h3 class="mt-2 md:text-sm md:font-semibold text-xs line-clamp-2 ">Varun
                                                Chakaravarthy: The X-Factor India Need To…</h3>
                                            <div class="flex items-center justify-between text-[#8C98B0]">
                                                <p class=" text-gray-2 text-xs w-6/12 line-clamp-1 border-r-2">Pramod Ananth
                                                </p>
                                                <p class="text-gray-2 text-xs">09 Mar 2025</p>
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
                <div class="md:flex w-max ml-auto mt-3 mb-[5px] hidden">
                    <a href="/"
                        class="uppercase font-bold rounded py-[5px] px-[9px] text-xs text-[#056BEB] border-2 border-[#056BEB]">
                        <?php _e('more articles', 'gnws'); ?>
                    </a>
                </div>
            </section>

            <section
                class="mx-3 my-[5px] shadow border border-gray/20  md:mx-0  dark:bg-gray bg-white p-3 md:px-6 md:p-4  rounded max-sm:mx-0 max-sm:px-[17px]">
                <div class="mb-3">
                    <div class="relative flex flex-col gap-1">
                        <div class="font-semibold text-sm md:text-base mb-1">
                            <?php _e('Womens Premier League, 2025', 'gnws'); ?>
                        </div>
                        <div class="absolute bottom-0 w-12 h-1 rounded-md bg-[#6A91A9]"></div>
                    </div>
                </div>
                <div class="flex flex-col">
                    <div class="mt-3 pt-1 pb-[9px] -mx-2"
                        data-flickity='{ "draggable": true,"wrapAround": false,"imagesLoaded": true,"prevNextButtons": false, "pageDots": false, "cellAlign": "left","contain": true, "autoPlay":false}'>
                        <?php
                        for ($i = 0; $i < 8; $i++) {
                            ?>
                            <div class="lg:w-1/4 md:w-1/3 w-1/2 px-2 text-sm">
                                <div class="w-full">
                                    <a href="/" class="select-none">
                                        <div class="rounded-md lg:cursor-pointer self-stretch">
                                            <div
                                                class="flex items-center justify-center overflow-hidden relative rounded-md">
                                                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/img6.png"
                                                    alt="" class="w-full" loading="lazy" draggable="false">
                                            </div>
                                            <h3 class="mt-2 md:text-sm md:font-semibold text-xs line-clamp-2 ">Varun
                                                Chakaravarthy: The X-Factor India Need To…</h3>
                                            <div class="flex items-center justify-between text-[#8C98B0]">
                                                <p class=" text-gray-2 text-xs w-6/12 line-clamp-1 border-r-2">Pramod Ananth
                                                </p>
                                                <p class="text-gray-2 text-xs">09 Mar 2025</p>
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
                <div class="md:flex w-max ml-auto mt-3 mb-[5px] hidden">
                    <a href="/"
                        class="uppercase font-bold rounded py-[5px] px-[9px] text-xs text-[#056BEB] border-2 border-[#056BEB]">
                        <?php _e('more articles', 'gnws'); ?>
                    </a>
                </div>
            </section>

            <section
                class="mx-3 my-[5px] shadow border border-gray/20  md:mx-0  dark:bg-gray bg-white p-3 md:px-6 md:p-4  rounded max-sm:mx-0 max-sm:px-[17px]">
                <div class="mb-3">
                    <div class="relative flex flex-col gap-1">
                        <div class="font-semibold text-sm md:text-base mb-1">
                            <?php _e('Ranji Trophy, 2024/25', 'gnws'); ?>
                        </div>
                        <div class="absolute bottom-0 w-12 h-1 rounded-md bg-[#6A91A9]"></div>
                    </div>
                </div>
                <div class="flex flex-col">
                    <div class="mt-3 pt-1 pb-[9px] -mx-2"
                        data-flickity='{ "draggable": true,"wrapAround": false,"imagesLoaded": true,"prevNextButtons": false, "pageDots": false, "cellAlign": "left","contain": true, "autoPlay":false}'>
                        <?php
                        for ($i = 0; $i < 8; $i++) {
                            ?>
                            <div class="lg:w-1/4 md:w-1/3 w-1/2 px-2 text-sm">
                                <div class="w-full">
                                    <a href="/" class="select-none">
                                        <div class="rounded-md lg:cursor-pointer self-stretch">
                                            <div
                                                class="flex items-center justify-center overflow-hidden relative rounded-md">
                                                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/img7.png"
                                                    alt="" class="w-full" loading="lazy" draggable="false">
                                            </div>
                                            <h3 class="mt-2 md:text-sm md:font-semibold text-xs line-clamp-2 ">Varun
                                                Chakaravarthy: The X-Factor India Need To…</h3>
                                            <div class="flex items-center justify-between text-[#8C98B0]">
                                                <p class=" text-gray-2 text-xs w-6/12 line-clamp-1 border-r-2">Pramod Ananth
                                                </p>
                                                <p class="text-gray-2 text-xs">09 Mar 2025</p>
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
                <div class="md:flex w-max ml-auto mt-3 mb-[5px] hidden">
                    <a href="/"
                        class="uppercase font-bold rounded py-[5px] px-[9px] text-xs text-[#056BEB] border-2 border-[#056BEB]">
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
                                    class="uppercase font-bold rounded py-[5px] px-[9px] text-xs text-[#056BEB] border-2 border-[#056BEB] ml-auto">
                                    <?php _e('view more', 'gnws'); ?>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="relative">
                        <select class="w-full p-[10px] rounded-lg text-gray-600 text-sm bg-white shadow-md">
                            <option value="wpl" selected>Women’s Premier League, 2025</option>
                        </select>
                    </div>

                    <table class="w-full mt-2 border-collapse">
                        <thead>
                            <tr class="text-gray-700 text-sm border-b">
                                <th class="p-2 text-left">Team</th>
                                <th class="p-2">M</th>
                                <th class="p-2">W</th>
                                <th class="p-2">L</th>
                                <th class="p-2">T</th>
                                <th class="p-2">NR</th>
                                <th class="p-2">PT</th>
                                <th class="p-2">NRR</th>
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
                <div class="bg-white shadow rounded-md p-[10px] w-full border border-[#2B323F33]">
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
                                    class="uppercase font-bold rounded py-[5px] px-[9px] text-xs text-[#056BEB] border-2 border-[#056BEB] ml-auto">
                                    <?php _e('view more', 'gnws'); ?>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="flex justify-between gap-[10px] mt-3">
                        <button
                            class="w-1/3 px-4 py-1 text-white bg-blue-600 rounded-full text-sm font-medium">Test</button>
                        <button
                            class="w-1/3 px-4 py-1 bg-gray-300 rounded-full text-sm font-medium text-gray-700">ODI</button>
                        <button
                            class="w-1/3 px-4 py-1 bg-gray-300 rounded-full text-sm font-medium text-gray-700">T20</button>
                    </div>

                    <div class="flex justify-between text-center mt-3 text-sm font-medium text-gray-500 border-b">
                        <span class="w-1/4 cursor-pointer text-blue-600 border-b-2 border-blue-600 pb-1">Test</span>
                        <span class="w-1/4 cursor-pointer pb-1">Batter</span>
                        <span class="w-1/4 cursor-pointer pb-1">Bowler</span>
                        <span class="w-1/4 cursor-pointer pb-1">ALR</span>
                    </div>

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

    </section>
</main>

<?php
get_footer();