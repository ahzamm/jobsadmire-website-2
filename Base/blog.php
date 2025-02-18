<?php
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
        'title' => 'The Importance of Networking for Career Growth',
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
        'title' => 'Why Soft Skills Are as Vital as Technical Skills Today',
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
        'url' => 'blog-detail-st'
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
];

?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />

<!-- jQuery (required for Owl Carousel) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Owl Carousel JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<div class="owl-carousel">

    <!-- <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 mt-8 gap-[30px]"> -->
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
    <!-- </div> -->
</div>



<script>
    $(document).ready(function() {
        $(".owl-carousel").owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            center: true,
            navText: [
                "<i class='fa fa-angle-left'></i>",
                "<i class='fa fa-angle-right'></i>"
            ],
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 3
                }
            }
        });
    });
</script>

<style>
    .owl-carousel .group {
        margin: 5px 10px;
        /* Add horizontal space between cards */
    }

    html {
        scroll-behavior: smooth;
    }

    body {
        font-family: 'Noto Sans HK', sans-serif;
        background: #fff;
    }

    .slider {
        margin-bottom: 30px;
        position: relative;
    }

    .slider .owl-item.active.center .slider-card {
        transform: scale(1.15);
        opacity: 1;
        background: rgb(108, 151, 190);
        background: -webkit-linear-gradient(to bottom, rgb(26, 131, 201), rgb(108, 151, 190));
        background: linear-gradient(to bottom, rgb(26, 131, 201), rgb(108, 151, 190));
        color: #fff;
    }

    .slider-card {
        background: #fff;
        padding: 0px 0px;
        margin: 50px 15px 90px 15px;
        border-radius: 5px;
        box-shadow: 0 15px 45px -20px rgb(0 0 0 / 73%);
        transform: scale(0.9);
        opacity: 0.5;
        transition: all 0.3s;
    }

    .slider-card img {
        border-radius: 5px 5px 0px 0px;
    }

    .owl-nav .owl-prev {
        position: absolute;
        top: calc(50% - 25px);
        left: 0;
        opacity: 1;
        font-size: 30px !important;
        z-index: 1;
    }

    .owl-nav .owl-next {
        position: absolute;
        top: calc(50% - 25px);
        right: 0;
        opacity: 1;
        font-size: 30px !important;
        z-index: 1;
    }

    .owl-dots {
        text-align: center;
    }

    .owl-dots .owl-dot {
        height: 10px;
        width: 10px;
        border-radius: 10px;
        background: #ccc !important;
        margin-left: 3px;
        margin-right: 3px;
        outline: none;
    }

    .owl-dots .owl-dot.active {
        background: rgb(59, 69, 160) !important;
    }
</style>