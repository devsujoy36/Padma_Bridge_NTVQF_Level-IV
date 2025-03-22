<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="author" content="Furni" />

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>" type="text/css" media="all" />
    
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('PADMA MULTIPURPOSE BRIDGE'); ?>
    </title>
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/fabicon.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap');

        body {
            font-family: "Open Sans", sans-serif;
        }
    </style>
	<?php wp_head(); ?>
</head>
<body>

<!-- header section  -->
<header>
    <div class="relative">
        <div class="absolute z-30 top-0 w-full m-2">
            <div class="flex justify-between items-center ">
                <a href=""><img class="md:h-fit h-[50px] md:w-fit " src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt=""></a>
                <a href=""><img class="md:h-fit h-[50px] md:w-fit " src="<?php echo get_template_directory_uri(); ?>/images/bdlogo.png" alt=""></a>
            </div>
        </div>

        <!-- slider section  -->
        <div>
            <div class="carousel md:h-[50vh] h-[30vh] w-full">
                <div id="slide2" class="carousel-item relative w-full">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/slide12.jpg" class="w-full" />
                    <div class="absolute left-5 right-5 top-1/2 flex -translate-y-1/2 transform justify-between">
                        <a href="#slide1" class="btn btn-circle">❮</a>
                        <a href="#slide3" class="btn btn-circle">❯</a>
                    </div>
                </div>
                <div id="slide1" class="carousel-item relative w-full">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/slide11.jpg" class="w-full" />
                    <div class="absolute left-5 right-5 top-1/2 flex -translate-y-1/2 transform justify-between">
                        <a href="#slide4" class="btn btn-circle">❮</a>
                        <a href="#slide2" class="btn btn-circle">❯</a>
                    </div>
                </div>
                <div id="slide3" class="carousel-item relative w-full">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/slide_13.jpg" class="w-full" />
                    <div class="absolute left-5 right-5 top-1/2 flex -translate-y-1/2 transform justify-between">
                        <a href="#slide2" class="btn btn-circle">❮</a>
                        <a href="#slide4" class="btn btn-circle">❯</a>
                    </div>
                </div>
                <div id="slide4" class="carousel-item relative w-full">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/slide_14.jpg" class="w-full" />
                    <div class="absolute left-5 right-5 top-1/2 flex -translate-y-1/2 transform justify-between">
                        <a href="#slide3" class="btn btn-circle">❮</a>
                        <a href="#slide1" class="btn btn-circle">❯</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- nav bar section  -->
    <div class="w-full my-5">
        <div class="max-w-7xl md:mx-auto mx-10">
            <div class="text-xs  font-semibold flex justify-center gap-2 items-center flex-wrap">
                <a href="" class="bg-[#344807] md:p-5 p-2 transition-all text-white">Home</a>
                <a href="" class="hover:bg-[#344807] hover:text-white border-r border-gray-400 transition-all md:p-5 p-2 ">Project Overview</a>
                <a href="" class="hover:bg-[#344807] hover:text-white border-r border-gray-400 transition-all md:p-5 p-2 ">Activities & Impact</a>
                <a href="" class="hover:bg-[#344807] hover:text-white border-r border-gray-400 transition-all md:p-5 p-2 ">Project Team</a>
                <a href="" class="hover:bg-[#344807] hover:text-white border-r border-gray-400 transition-all md:p-5 p-2 ">Project</a>
                <a href="" class="hover:bg-[#344807] hover:text-white border-r border-gray-400 transition-all md:p-5 p-2 ">Gallery</a>
                <a href="" class="hover:bg-[#344807] hover:text-white border-r border-gray-400 transition-all md:p-5 p-2 ">News & Event</a>
                <a href="" class="hover:bg-[#344807] hover:text-white border-r border-gray-400 transition-all md:p-5 p-2 ">Tender</a>
                <a href="" class="hover:bg-[#344807] hover:text-white transition-all md:p-5 p-2 ">Contact</a>
            </div>
        </div>
    </div>


</header>

