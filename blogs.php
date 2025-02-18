<?php
$base_dir = __DIR__ . '/Base';
$static_url = './assets'; // Ensure this is the correct path

// Include the common navlink content
ob_start();
include "$base_dir/header.php"; // This file contains the shared navlink content
$navlink_content = ob_get_clean(); // Capture the navlink content
$page = 'blogs';

// Optionally define the Hero block content
ob_start();

$products = [
    [
        'img_frame' => '/images/blog/blog2.png',
        'img' => '/images/blog/21.jpg',
        'tag' => 'Skill',
        'title' => 'Top 10 In-Demand Skills Employers Are Looking For in 2025',
        'date' => '17th December, 2024',
        'company' => 'Job Admire',
        'url' => 'blog-demand-skills'
    ],
    [
        'img_frame' => '/images/blog/blog2.png',
        'img' => '/images/blog/02.jpg',
        'tag' => 'Interview',
        'title' => 'The Role of Private Employment Bureaus in Bridging Talent Gaps',
        'date' => '20th December, 2024',
        'company' => 'Job Admire',
        'url' => 'blog-role-of-private-employment'

    ],
    [
        'img_frame' => '/images/blog/blog2.png',
        'img' => '/images/blog/06.jpg',
        'tag' => 'Interview',
        'title' => 'Interview Tips: How to Ace Your Next Job Interview',
        'date' => '23th December, 2024',
        'company' => 'Job Admire',
        'url' => 'blog-interview-tips'
    ],
    [
        'img_frame' => '/images/blog/blog2.png',
        'img' => '/images/blog/07.jpg',
        'tag' => 'Life',
        'title' => 'Workplace Trends to Watch: Preparing for the Future of Work',
        'date' => '23th December, 2024',
        'company' => 'Job Admire',
        'url' => 'blog-workplace-trends'
    ],

    [
        'img_frame' => '/images/blog/blog2.png',
        'img' => '/images/blog/12.jpeg',
        'tag' => 'Life',
        'title' => 'Balancing Work and Life: Tips for a Healthier Career Journey',
        'date' => '25th December, 2024',
        'company' => 'Job Admire',
        'url' => 'blog-balancing-work-life'
    ],

    [
        'img_frame' => '/images/blog/blog2.png',
        'img' => '/images/blog/11.jpg',
        'tag' => 'Life',
        'title' => 'The Importance of Networking: Building Connections for Career Growth',
        'date' => '28th December, 2023',
        'company' => 'Job Admire',
        'url' => 'blog-importance-of-networking'
    ],

    [
        'img_frame' => '/images/blog/blog2.png',
        'img' => '/images/blog/16.jpg',
        'tag' => 'Life',
        'title' => 'The Ultimate Guide to Switching Careers Successfully',
        'date' => '29th December, 2023',
        'company' => 'Job Admire',
        'url' => 'blog-switching-careers'
    ],

    [
        'img_frame' => '/images/blog/blog2.png',
        'img' => '/images/blog/15.jpg',
        'tag' => 'Life',
        'title' => 'Why Soft Skills Are as Important as Technical Skills in Todays Job Market',
        'date' => '30th December, 2023',
        'company' => 'Job Admire',
        'url' => 'blog-soft-skills'
    ],


    [
        'img_frame' => '/images/blog/blog2.png',
        'img' => '/images/blog/18.jpeg',
        'tag' => 'Life',
        'title' => 'Understanding Salary Trends: What to Expect in 2025',
        'date' => '31th December, 2023',
        'company' => 'Job Admire',
        'url' => 'blog-salary-trends'
    ],

    [
        'img_frame' => '/images/blog/blog2.png',
        'img' => '/images/blog/14.jpg',
        'tag' => 'Life',
        'title' => 'How to Write a Winning Resume: Tips from Recruitment Experts?',
        'date' => '31th December, 2023',
        'company' => 'Job Admire',
        'url' => 'blog-winning-resume'
    ],


    // [
    //     'img' => '/images/blog/04.jpg',
    //     'tag' => 'Arts',
    //     'title' => '11 Tips to Help You Get New Clients Through Cold Calling',
    //     'date' => '20th February, 2023',
    //     'company' => 'Google'
    // ],
    // [
    //     'img' => '/images/blog/05.jpg',
    //     'tag' => 'Illustration',
    //     'title' => 'DigitalOcean launches first Canadian data centre in Toronto',
    //     'date' => '20th February, 2023',
    //     'company' => 'Facebook'
    // ],
    // [
    //     'img' => '/images/blog/06.jpg',
    //     'tag' => 'Music',
    //     'title' => 'Using Banner Stands To Increase Trade Show Traffic',
    //     'date' => '20th February, 2023',
    //     'company' => 'Linkedin'
    // ],
    // [
    //     'img' => '/images/blog/07.jpg',
    //     'tag' => 'Arts',
    //     'title' => '11 Tips to Help You Get New Clients Through Cold Calling',
    //     'date' => '20th February, 2023',
    //     'company' => 'Google'
    // ],
    // [
    //     'img' => '/images/blog/08.jpg',
    //     'tag' => 'Illustration',
    //     'title' => 'DigitalOcean launches first Canadian data centre in Toronto',
    //     'date' => '20th February, 2023',
    //     'company' => 'Facebook'
    // ],
    // [
    //     'img' => '/images/blog/09.jpg',
    //     'tag' => 'Music',
    //     'title' => 'Using Banner Stands To Increase Trade Show Traffic',
    //     'date' => '20th February, 2023',
    //     'company' => 'Linkedin'
    // ],
];

?>

<!-- Start Hero -->
<section class="md:mt-32 relative table w-full py-36 bg-[url('../../<?php echo $static_url; ?>/images/hero/bg.jpg')] bg-top bg-no-repeat bg-cover">
    <div class="absolute inset-0 bg-blue-950/90"></div>
    <div class="container">
        <div class="grid grid-cols-1 text-center mt-10">
            <h1 class="md:text-3xl text-2xl md:leading-snug tracking-wide leading-snug font-medium text-white">Blog or News</h1>
        </div><!--end grid-->
    </div><!--end container-->

    <div class="absolute text-center z-10 bottom-5 start-0 end-0 mx-3">
        <ul class="breadcrumb tracking-[0.5px] breadcrumb-light mb-0 inline-block">
            <li class="inline breadcrumb-item text-[15px] font-semibold duration-500 ease-in-out text-white/50 hover:text-white"><a href="index">Job Admire</a></li>
            <li class="inline breadcrumb-item text-[15px] font-semibold duration-500 ease-in-out text-white" aria-current="page">Blogs</li>
        </ul>
    </div>
</section><!--end section-->
<div class="relative">
    <div class="shape absolute start-0 end-0 sm:-bottom-px -bottom-[2px] overflow-hidden z-1 text-white dark:text-slate-900">
        <svg class="w-full h-auto" viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
        </svg>
    </div>
</div>
<!-- End Hero -->

<!-- Start -->
<section class="relative md:py-24 py-16">
    <div class="container">
        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-[30px]">
            <?php foreach ($products as $product): ?>
                <div class="group relative overflow-hidden bg-white dark:bg-slate-900 rounded-md shadow dark:shadow-gray-700">
                    <div class="relative overflow-hidden">
                        <img src="<?php echo $static_url, $product['img']; ?>"
                            class="scale-110 group-hover:scale-100 transition-all duration-500"
                            alt="">
                        <img src="<?php echo $static_url, $product['img_frame']; ?>"
                            class="absolute top-0 left-0 w-full h-full object-cover"
                            alt="">
                    </div>

                    <div class="relative p-6">
                        <div class="absolute start-6 -top-4">
                            <span class="bg-blue-900 text-white text-[12px] px-2.5 py-1 font-semibold rounded-full h-5"><?php echo $product['tag']; ?></span>
                        </div>

                        <div class="">
                            <div class="flex mb-4">
                                <span class="text-slate-400 text-sm"><i class="uil uil-calendar-alt text-slate-900 dark:text-white me-2"></i><?php echo $product['date']; ?></span>
                                <span class="text-slate-400 text-sm ms-3"><i class="uil uil-clock text-slate-900 dark:text-white me-2"></i>5 min read</span>
                            </div>

                            <a href="<?php echo $product['url']; ?>" class="title text-lg font-semibold hover:text-blue-900 duration-500 ease-in-out"><?php echo $product['title']; ?></a>

                            <div class="flex justify-between items-center mt-3">
                                <a href="<?php echo $product['url']; ?>" class="btn btn-link hover:text-blue-900 after:bg-blue-900 duration-500 ease-in-out">Read More <i class="uil uil-arrow-right"></i></a>
                                <span class="text-slate-400 text-sm">by <a href="" class="text-slate-900 dark:text-white hover:text-blue-900 dark:hover:text-blue-900 font-medium"><?php echo $product['company']; ?></a></span>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div><!--end grid-->

        <!-- <div class="grid md:grid-cols-12 grid-cols-1 mt-8">
            <div class="md:col-span-12 text-center">
                <nav aria-label="Page navigation example">
                    <ul class="inline-flex items-center -space-x-px">
                        <li>
                            <a href="#" class="size-[40px] inline-flex justify-center items-center text-slate-400 bg-white dark:bg-slate-900 rounded-s-3xl hover:text-white border border-gray-100 dark:border-gray-800 hover:border-blue-900 dark:hover:border-blue-900 hover:bg-blue-900 dark:hover:bg-blue-900">
                                <i class="uil uil-angle-left text-[20px] rtl:rotate-180 rtl:-mt-1"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="size-[40px] inline-flex justify-center items-center text-slate-400 hover:text-white bg-white dark:bg-slate-900 border border-gray-100 dark:border-gray-800 hover:border-blue-900 dark:hover:border-blue-900 hover:bg-blue-900 dark:hover:bg-blue-900">1</a>
                        </li>
                        <li>
                            <a href="#" class="size-[40px] inline-flex justify-center items-center text-slate-400 hover:text-white bg-white dark:bg-slate-900 border border-gray-100 dark:border-gray-800 hover:border-blue-900 dark:hover:border-blue-900 hover:bg-blue-900 dark:hover:bg-blue-900">2</a>
                        </li>
                        <li>
                            <a href="#" aria-current="page" class="z-10 size-[40px] inline-flex justify-center items-center text-white bg-blue-900 border border-blue-900">3</a>
                        </li>
                        <li>
                            <a href="#" class="size-[40px] inline-flex justify-center items-center text-slate-400 hover:text-white bg-white dark:bg-slate-900 border border-gray-100 dark:border-gray-800 hover:border-blue-900 dark:hover:border-blue-900 hover:bg-blue-900 dark:hover:bg-blue-900">4</a>
                        </li>
                        <li>
                            <a href="#" class="size-[40px] inline-flex justify-center items-center text-slate-400 hover:text-white bg-white dark:bg-slate-900 border border-gray-100 dark:border-gray-800 hover:border-blue-900 dark:hover:border-blue-900 hover:bg-blue-900 dark:hover:bg-blue-900">5</a>
                        </li>
                        <li>
                            <a href="#" class="size-[40px] inline-flex justify-center items-center text-slate-400 bg-white dark:bg-slate-900 rounded-e-3xl hover:text-white border border-gray-100 dark:border-gray-800 hover:border-blue-900 dark:hover:border-blue-900 hover:bg-blue-900 dark:hover:bg-blue-900">
                                <i class="uil uil-angle-right text-[20px] rtl:rotate-180 rtl:-mt-1"></i>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div> -->
    </div>
</section><!--end section-->
<!-- End -->




<?php
$hero_content = ob_get_clean(); // Capture the hero content

// $button_style = 'simple'; // Set the button style for index2
// $navbar_style = 'nav-light'; // Define the navbar style for index22

// Include the base template
include "$base_dir/base.php";
include "$base_dir/quick-job-apply.php";

?>

<!-- JAVASCRIPTS -->
<!-- <script>
            easy_background("#home",
                {
                    slide: ["assets/images/bg/1.jpg"],
                    delay: [4000, 4000, 4000]
                }
            );
        </script> -->