<?php

/**
Template Name: News
 */

get_header();
?>

<main class="news-page bg-[#F1F5F9] max-sm:pb-[85px]">
    <section class="flex justify-center py-[15px] bg-[#F1F5F9]">
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

    <!-- desktop -->
    <section class="container flex flex-col gap-[18px] bg-white p-[15px] rounded-[14px] shadow mb-[15px] max-sm:hidden">
        <div class="">
            <a draggable="false" href="/">
                <div class="flex flex-col gap-[10px] bg-white rounded overflow-hidden justify-around">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/img8.png" alt=""
                        class="w-full rounded-[10px] overflow-hidden" loading="lazy" draggable="false">

                    <div class="flex flex-col gap-[10px] justify-between w-full">
                        <div class="flex flex-col gap-[5px]">
                            <div class="tracking-wider text-lg text-black font-bold">Steve Smith Has
                                His Say On India Playing All Their Games In Dubai</div>
                            <h2 class="font-medium line-clamp-2 w-full md:text-base text-xs leading-5 text-[#3F4B62]">
                                In a Cricket.com exclusive, the Australian left-hander spoke about her obsessive reverse
                                sweep disorder, playing hockey, her role as a batter and her ability to switch batting
                                orders with ease
                            </h2>
                        </div>
                        <div class="text-sm flex flex-row justify-between text-[#8C98B0]">
                            <div>By: cricket.top staff</div>
                            <div>29 minutes ago</div>
                        </div>
                    </div>
                </div>
            </a>

            <div class="w-full h-[15px] bg-[#8f8f8f] mt-[18px]"></div>
        </div>

        <div class="">
            <a draggable="false" href="/">
                <div class="flex gap-[15px] bg-white rounded justify-around">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/img9.png" alt=""
                        class="w-2/5 rounded-[10px] overflow-hidden" loading="lazy" draggable="false">
                    <div class="w-3/5 flex flex-col justify-between py-2">
                        <div class="">
                            <div class="md:text-lg tracking-wider dark:text-white text-black font-bold">Steve Smith Has
                                His
                                Say On India Playing All Their Games In Dubai</div>
                            <h2
                                class="font-medium line-clamp-3 lg:text-base text-xs hidden lg:inline-flex leading-5 text-[#3F4B62]">
                                In a Cricket.com exclusive, the Australian left-hander spoke about her obsessive reverse
                                sweep disorder, playing hockey, her role as a batter and her ability to switch batting
                                orders with ease</h2>
                        </div>
                        <div class="text-sm flex flex-row justify-between text-[#8C98B0]">
                            <div>By: cricket.com staff</div>
                            <div>37 minutes ago</div>
                        </div>
                    </div>
                </div>
            </a>

            <div class="w-2/5 h-[15px] bg-[#8f8f8f] mt-[18px]"></div>
        </div>
    </section>

    <div class="flex justify-center text-center gap-[106px] py-20 max-sm:hidden">
        <a draggable="false" href="/"
            class="w-[223px] uppercase font-bold rounded py-[5px] px-[9px] text-xs text-[#056BEB] border-2 border-[#056BEB]  hover:scale-105 transition-all duration-150">
            <?php _e('prev', 'gnws'); ?>
        </a>
        <a draggable="false" href="/"
            class="w-[223px] uppercase font-bold rounded py-[5px] px-[9px] text-xs text-[#056BEB] border-2 border-[#056BEB]  hover:scale-105 transition-all duration-150">
            <?php _e('next', 'gnws'); ?>
        </a>
    </div>
    <!-- desktop END -->


    <!-- Mobile -->
    <div class="md:hidden">
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
                            <h4 class="text-xs lg:text-sm leading-5 font-medium text-left line-clamp-2 text-[#3F4B62]">
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
                                        <div class="flex items-center justify-center overflow-hidden relative rounded-md">
                                            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/img2.png"
                                                alt="" class="w-full" loading="lazy" draggable="false">
                                        </div>
                                        <h3 class="mt-2 md:text-sm md:font-semibold font-medium text-xs line-clamp-2 ">
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
                            <h4 class="text-xs lg:text-sm leading-5 font-medium text-left line-clamp-2 text-[#3F4B62]">
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
                                        <div class="flex items-center justify-center overflow-hidden relative rounded-md">
                                            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/img3.png"
                                                alt="" class="w-full" loading="lazy" draggable="false">
                                        </div>
                                        <h3 class="mt-2 md:text-sm md:font-semibold font-medium text-xs line-clamp-2 ">
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
                                        <div class="flex items-center justify-center overflow-hidden relative rounded-md">
                                            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/img4.png"
                                                alt="" class="w-full" loading="lazy" draggable="false">
                                        </div>
                                        <h3 class="mt-2 md:text-sm md:font-semibold font-medium text-xs line-clamp-2 ">
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
                                        <div class="flex items-center justify-center overflow-hidden relative rounded-md">
                                            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/img5.png"
                                                alt="" class="w-full" loading="lazy" draggable="false">
                                        </div>
                                        <h3 class="mt-2 md:text-sm md:font-semibold font-medium text-xs line-clamp-2 ">
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
                                        <div class="flex items-center justify-center overflow-hidden relative rounded-md">
                                            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/img6.png"
                                                alt="" class="w-full" loading="lazy" draggable="false">
                                        </div>
                                        <h3 class="mt-2 md:text-sm md:font-semibold font-medium text-xs line-clamp-2 ">
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
                                        <div class="flex items-center justify-center overflow-hidden relative rounded-md">
                                            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/img7.png"
                                                alt="" class="w-full" loading="lazy" draggable="false">
                                        </div>
                                        <h3 class="mt-2 md:text-sm md:font-semibold font-medium text-xs line-clamp-2 ">
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

        <div class="w-full py-[10px] px-[21px]">
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
                    <a href="/" class="flex gap-[15px]">
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
    <!-- Mobile END -->
</main>

<?php
get_footer();