<?php
$base_dir = __DIR__ . '/Base';
$static_url = './assets'; // Ensure this is the correct path

// Include the common navlink content
ob_start();
include "$base_dir/header_end.php"; // This file contains the shared navlink content
$navlink_content = ob_get_clean(); // Capture the navlink content
$page = 'end';

// Optionally define the Hero block content
ob_start();
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<style>
    .slide1 {
        overflow: hidden;
        height: 40px;
        /* Height should match a single word's height */
        display: inline-block;
    }

    .slide1 div {
        display: block;
    }

    .slide1 div div {
        display: inline-block;
        color: white;
        padding: 4px 12px;
        border-radius: 2px;
        margin-bottom: 10px;
    }

    /* Background colors */
    .slide1 div:nth-child(1) div {
        background: #2C3E50;
    }

    /* Dark Blue Gray */
    .slide1 div:nth-child(2) div {
        background: #1ABC9C;
    }

    /* Turquoise */
    .slide1 div:nth-child(3) div {
        background: #34495E;
    }

    /* Deep Gray Blue */
    .slide1 div:nth-child(4) div {
        background: #E74C3C;
    }

    /* Professional Red */
    .slide1 div:nth-child(5) div {
        background: #F39C12;
    }

    /* Muted Orange */
    .slide1 div:nth-child(6) div {
        background: #16A085;
    }

    /* Teal Green */
    .slide1 div:nth-child(7) div {
        background: #8E44AD;
    }

    /* Elegant Purple */
    .slide1 div:nth-child(8) div {
        background: #2980B9;
    }

    /* Refined Blue */
    .slide1 div:nth-child(9) div {
        background: #D35400;
    }

    /* Burnt Orange */
    .slide1 div:nth-child(10) div {
        background: #2ECC71;
    }

    /* Fresh Green */
    .slide1 div:nth-child(11) div {
        background: #BDC3C7;
    }

    /* Soft Gray */


    .slide1 div:first-child {
        animation: animate 15s linear infinite;
    }

    /* Adjusted animation for 11 words */
    @keyframes animate {
        0% {
            margin-top: -700px;
        }

        /* Start from the last word */
        6% {
            margin-top: -650px;
        }

        12% {
            margin-top: -600px;
        }

        18% {
            margin-top: -550px;
        }

        24% {
            margin-top: -500px;
        }

        30% {
            margin-top: -450px;
        }

        36% {
            margin-top: -400px;
        }

        42% {
            margin-top: -350px;
        }

        48% {
            margin-top: -300px;
        }

        54% {
            margin-top: -250px;
        }

        60% {
            margin-top: -200px;
        }

        66% {
            margin-top: -150px;
        }

        72% {
            margin-top: -100px;
        }

        78% {
            margin-top: -50px;
        }

        84% {
            margin-top: 0px;
        }

        /* Last word reaches the top */
        100% {
            margin-top: -700px;
        }

        /* Loop restarts */
    }

    .slide2 {
        overflow: hidden;
        width: 100%;
        height: 200px;
        display: flex;
        flex-direction: column;
        align-items: center;
        position: relative;
        background: rgb(197, 195, 195);
    }


    /* Wrapper for smooth sliding effect */
    .slide2 .slider-wrapper {
        display: flex;
        flex-wrap: nowrap;
        gap: 30px;
        /* Space between images */
        animation: slideAnimation 6s linear infinite;
        width: max-content;
        /* Ensures images stay in a row */
    }

    /* Ensures all images maintain a uniform size */
    .slide2 img {
        height: 100px;
        /* Adjust as needed */
        width: auto;
    }

    /* Continuous right-to-left sliding effect */
    @keyframes slideAnimation {
        0% {
            transform: translateX(100%);
        }

        100% {
            transform: translateX(-100%);
        }
    }
</style>
<!-- Start -->

<!-- <section class="py-36 h-auto items-center flex relative overflow-hidden bg-gradient-to-b from-emerald-600/20 dark:from-emerald-600/40 via-emerald-600/10 dark:via-emerald-600/20 to-transparent" id="home"> -->
<section
    class="py-36 md:mt-32 items-center flex relative overflow-hidden bg-cover bg-center lg:h-[85vh]"
    style="background-image: url('<?php echo $static_url; ?>/images/Artboard.png');"
    id="home">
    <!-- <div class="absolute inset-0 bg-gradient-to-r from-blue-300 to-blue-0/90"></div> -->




    <div class="container-fluid relative md:ml-[200px] mx-2">
        <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px]">
            <div class="lg:col-span-7 md:col-span-6 md:mt-0">
                <div class="md:me-8 md:mt-16">
                    <h1 class="md:leading-normal text-4xl lg:text-6xl mb-5 font-sans text-gray-900">
                        Find the<br><span class="text-blue-500 italic">Dream</span>
                        <div class="slide1 text-white font-bold text-[42px] font-sans">
                            <div>
                                <div>Job</div>
                            </div>
                            <div>
                                <div>Team</div>
                            </div>
                            <div>
                                <div>Career</div>
                            </div>
                            <div>
                                <div>Match</div>
                            </div>
                            <div>
                                <div>Talent</div>
                            </div>
                            <div>
                                <div>Staff</div>
                            </div>
                            <div>
                                <div>Role</div>
                            </div>
                            <div>
                                <div>Position</div>
                            </div>
                            <div>
                                <div>Profession</div>
                            </div>
                            <div>
                                <div>Opportunity</div>
                            </div>
                            <div>
                                <div>Employment</div>
                            </div>
                        </div>
                        <!-- </span> -->
                        <br>
                        for yourself
                        </h4>

                        <p class="text-slate-400 text-lg max-w-sm">Connecting top talent with the right opportunities—whether you're hiring or job hunting!</p>

                        <!-- <div class="bg-white dark:bg-slate-900 border-0 shadow rounded p-3 mt-4">
                        <div class="registration-form text-dark text-start">
                            <div class="flex flex-wrap items-center lg:gap-6 gap-4">
                                <div class="filter-search-form relative filter-border flex-grow">
                                    <i class="uil uil-briefcase-alt icons" style="color: #1e3a8a;"></i>
                                    <input name="name" type="text" id="job-keyword"
                                        class="form-input filter-input-box bg-gray-50 dark:bg-slate-800 border-0 w-full"
                                        placeholder="Search...">
                                </div>
                                <button id="search" name="search"
                                    style="height: 60px;"
                                    class="btn bg-blue-900 hover:bg-blue-950 border-blue-900 hover:border-blue-950 text-white px-6 mx-auto lg:mx-0 md:w-1/3 w-full">
                                    Search
                                </button>
                            </div>
                        </div>
                    </div>


                    <div class="mt-2">
                        <span class="text-slate-400">
                            <span class="text-dark">Popular Searches :</span> Designer, Developer, Web, IOS, PHP Senior Engineer
                        </span>
                    </div> -->


                        <div class="mt-4">
                            <div class="registration-form text-dark text-start">
                                <div class="grid lg:grid-cols-2 md:grid-cols-2 grid-cols-1 lg:gap-0 gap-6">

                                    <!-- <button id="employee_looking" name="employee_looking" style="height: 70px;" class="btn bg-sky-700 hover:bg-sky-800 border-sky-700 hover:border-sky-800 text-white text-xl searchbtn w-100">
                                    <span style="font-size: 15px; font-family: Helvetica;">I'm Looking for Staff</span>
                                    <br>
                                    <span style="font-size: 12px; font-family: Helvetica;" class="text-white">
                                        Need staff for home or business?
                                    </span>
                                </button>

                                <button id="job_looking" name="job_looking" style="height: 70px;" class="btn bg-cyan-900 hover:bg-cyan-950 border-cyan-900 hover:border-cyan-950 text-white text-xl searchbtn w-100">
                                    <span style="font-size: 15px; font-family: Helvetica;">I'm looking for a Job</span>
                                    <br>
                                    <span style="font-size: 12px; font-family: Helvetica;" class="text-white">
                                        Submit details, let jobs find you!
                                    </span>
                                </button> -->

                                    <button id="employee_looking" name="employee_looking"
                                        class="m-1 text-white font-semibold px-6 py-3 rounded-lg shadow-lg transition-all duration-300 ease-in-out"
                                        style="background: linear-gradient(90deg, #0f172a, #1e293b); border: none;">
                                        I'm Looking to Recruit
                                    </button>

                                    <button id="job_looking" name="job_looking"
                                        class="m-1 text-white font-semibold px-6 py-3 rounded-lg shadow-lg transition-all duration-300 ease-in-out"
                                        style="background: linear-gradient(90deg, #3b82f6, #2563eb); border: none;">
                                        I'm Looking for a Job
                                    </button>



                                </div><!--end grid-->

                            </div><!--end container-->
                        </div>




                </div>

            </div>

            <div class="lg:col-span-5 md:col-span-6">
                <div class="relative">
                    <!-- <div class="relative flex justify-end">
                        <div class="absolute lg:bottom-20 -bottom-24 xl:-end-20 lg:-end-10 end-2 p-4 rounded-lg shadow-md dark:shadow-gray-800 bg-white dark:bg-slate-900 w-60 z-2">
                            <h5 class="text-lg font-semibold mb-3">500+ jobs</h5>

                            <ul class="list-none relative">
                                <li class="inline-block relative"><a href=""><img src="<?php echo $static_url; ?>/images/team/01.jpg" class="size-10 rounded-full shadow-md dark:shadow-gray-700 border-4 border-white dark:border-slate-900 relative hover:z-1 hover:scale-105 transition-all duration-500" alt=""></a></li>
                                <li class="inline-block relative -ms-3"><a href=""><img src="<?php echo $static_url; ?>/images/team/02.jpg" class="size-10 rounded-full shadow-md dark:shadow-gray-700 border-4 border-white dark:border-slate-900 relative hover:z-1 hover:scale-105 transition-all duration-500" alt=""></a></li>
                                <li class="inline-block relative -ms-3"><a href=""><img src="<?php echo $static_url; ?>/images/team/03.jpg" class="size-10 rounded-full shadow-md dark:shadow-gray-700 border-4 border-white dark:border-slate-900 relative hover:z-1 hover:scale-105 transition-all duration-500" alt=""></a></li>
                                <li class="inline-block relative -ms-3"><a href=""><img src="<?php echo $static_url; ?>/images/team/04.jpg" class="size-10 rounded-full shadow-md dark:shadow-gray-700 border-4 border-white dark:border-slate-900 relative hover:z-1 hover:scale-105 transition-all duration-500" alt=""></a></li>
                                <li class="inline-block relative -ms-3"><a href=""><img src="<?php echo $static_url; ?>/images/team/05.jpg" class="size-10 rounded-full shadow-md dark:shadow-gray-700 border-4 border-white dark:border-slate-900 relative hover:z-1 hover:scale-105 transition-all duration-500" alt=""></a></li>
                            </ul>
                        </div>
                    </div> -->
                    <!-- <div class="absolute md:-start-5 start-0 -bottom-16">

                        <div class="absolute flex justify-between items-center -top-6 md:-start-10 start-2 p-4 rounded-lg shadow-md dark:shadow-gray-800 bg-white dark:bg-slate-900 w-max">
                            <i class="uil uil-bell text-[24px] text-amber-500"></i>
                            <p class="text-lg font-semibold mb-0 ms-2">Job Alert Subscribe</p>
                        </div>
                    </div> -->

                </div>
            </div>
        </div>
    </div><!--end container-->

</section><!--end section-->
<!-- End -->

<!-- <div class="slide2">
    <h3 class="mb-4 mt-4 md:text-[26px] md:leading-normal text-2xl leading-normal font-semibold">Our Partners</h3>

    <div class="slider-wrapper">
        <div><img src="<?php echo $static_url; ?>/images/partner/2.png"></div>
        <div><img src="<?php echo $static_url; ?>/images/partner/1.png"></div>

        <div><img src="<?php echo $static_url; ?>/images/partner/3.png"></div>
        <div><img src="<?php echo $static_url; ?>/images/partner/1.png"></div>

        <div><img src="<?php echo $static_url; ?>/images/partner/2.png"></div>
        <div><img src="<?php echo $static_url; ?>/images/partner/1.png"></div>

        <div><img src="<?php echo $static_url; ?>/images/partner/3.png"></div>
    </div>
</div> -->


<!-- Start -->
<section class="relative md:pb-24 pb-16 mt-8">
    <div class="container">

        <!-- categories1 code  -->
        <?php
        include "$base_dir/categories1.php";
        ?>

    </div><!--end container-->




    <div class="container">
        <div class="max-w-full mx-auto text-center py-12 px-6 rounded-lg">
            <h3 class="mb-4 md:text-[26px] md:leading-normal text-2xl leading-normal font-semibold">Hire the Right Talent in 3 Easy Steps!
            </h3>
            <p class="text-slate-400 max-w-xl mx-auto text-lg">
                Looking to build a strong workforce for your company? We’ve got you covered. Here's how you can hire top-tier employees effortlessly:
            </p>

            <div class="mt-10 grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                <div class="relative flex justify-center">
                    <img id="serviceImage" src="<?php echo $static_url; ?>/images/123/image1.png" alt="Service Professionals" class="max-w-full h-auto rounded-lg shadow-md">
                </div>

                <div class="space-y-8 text-left">
                    <div class="flex items-start space-x-4 group"
                        onmouseover="changeImage('<?php echo $static_url; ?>/images/123/image1.png')"
                        onmouseout="changeImage('<?php echo $static_url; ?>/images/123/image1.png')">

                        <div class="w-28 h-16 flex items-center justify-center bg-emerald-600/5 text-blue-950 font-bold rounded-full cursor-pointer group-hover:bg-emerald-600 group-hover:text-white transition duration-300">
                            1
                        </div>

                        <div>
                            <h3 class="text-lg font-semibold text-gray-900">Create a Job Request</h3>
                            <p class="text-slate-400 max-w-xl mx-auto text-lg">
                                Share the roles you’re hiring for, including job descriptions and qualifications.
                            </p>
                        </div>
                    </div>


                    <div class="flex items-start space-x-4 group"
                        onmouseover="changeImage('<?php echo $static_url; ?>/images/123/image2.png')"
                        onmouseout="changeImage('<?php echo $static_url; ?>/images/123/image2.png')">

                        <div class="w-28 h-16 flex items-center justify-center bg-emerald-600/5 text-blue-950 font-bold rounded-full cursor-pointer group-hover:bg-emerald-600 group-hover:text-white transition duration-300">
                            2
                        </div>

                        <div>
                            <h3 class="text-lg font-semibold text-gray-900">Evaluate Candidate Profiles</h3>
                            <p class="text-slate-400 max-w-xl mx-auto text-lg">
                                Review a curated list of pre-screened candidates tailored to your needs.
                            </p>
                        </div>
                    </div>


                    <div class="flex items-start space-x-4 group"
                        onmouseover="changeImage('<?php echo $static_url; ?>/images/123/image3.png')"
                        onmouseout="changeImage('<?php echo $static_url; ?>/images/123/image3.png')">

                        <div class="w-32 h-16 flex items-center justify-center bg-emerald-600/5 text-blue-950 font-bold rounded-full cursor-pointer group-hover:bg-emerald-600 group-hover:text-white transition duration-300">
                            3
                        </div>

                        <div>
                            <h3 class="text-lg font-semibold text-gray-900">Hire with Confidence</h3>
                            <p class="text-slate-400 max-w-xl mx-auto text-lg">
                                Select the perfect fit and let us assist with onboarding to ensure a smooth start.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="container md:mt-22 mt-16">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 md:text-[26px] md:leading-normal text-2xl leading-normal font-semibold">Popular Jobs</h3>

            <p class="text-slate-400 max-w-xl mx-auto text-lg">Search all the open 100+ positions on the web. Get your own personalized salary estimate. Read reviews on over 30+ companies worldwide.</p>

        </div><!--end grid-->

        <!-- job2 code  -->
        <?php
        include "$base_dir/job2.php";
        ?>


        <div class="grid md:grid-cols-12 grid-cols-1 mt-8">
            <div class="md:col-span-12 text-center">
                <a href="jobs-grid" class="btn btn-link text-slate-400 hover:text-emerald-600 after:bg-emerald-600 duration-500 ease-in-out text-lg">See More Jobs <i class="uil uil-arrow-right align-middle"></i></a>
            </div>
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End -->

<section class="py-20 w-full table relative bg-[url('../../<?php echo $static_url; ?>/images/bb2.png')] bg-top bg-no-repeat bg-cover">
    <div class="absolute inset-0"></div>
    <div class="container-fluid md:ml-32 lg:ml-32 m-4 relative">
        <div class="grid grid-cols-1">
            <h3 class="mb-4 md:text-[26px] text-2xl text-black font-medium">Looking for Talented Employees?</h3>
            <p class="text-black/80 max-w-xl text-left text-lg">
                Join thousands of companies that have found the perfect candidates with us. Post your job now and connect with skilled professionals ready to join your team.

            </p>
            <div class="grid md:grid-cols-12 grid-cols-1 gap-0">
                <div class="lg:col-span-3 md:col-span-3">
                    <button id="post_a_job" name="post_a_job"
                        class="mt-4 px-6 py-2 w-50 bg-gradient-to-r from-blue-600 to-sky-500 text-white font-semibold rounded-full shadow-lg hover:from-blue-700 hover:to-sky-600 transition-all duration-300 ease-in-out transform hover:scale-105">
                        Post Your Job Today
                    </button>
                </div>
                <!-- <div class="lg:col-span-3 md:col-span-3">
                    <a href="tel:+905011240340">
                        <p class="mt-4 text-black/80 text-lg mt-2">📞 +90 501 124 03 40</p>
                    </a>
                </div> -->
            </div>
        </div>
    </div><!--end container-->
</section><!--end section-->
<!-- End -->
<!-- Start -->
<section class="relative md:py-24 py-16">
    <div class="container">

        <!-- jobNumbers code  -->
        <?php
        include "$base_dir/jobNumbers.php";
        ?>

    </div><!--end container-->

    <!-- <div class="container md:mt-24 mt-16"> -->
    <!-- <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 md:text-[26px] md:leading-normal text-2xl leading-normal font-semibold">Find Best Companies</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Explore the top employers in the Tourism and IT sectors. Provide a sense of market rates for jobs and an idea of the company’s working environment to help with better career choices.</p>
        </div> -->

    <!-- bestCompanies1 code  -->
    <?php
    // include "$base_dir/bestCompanies1.php";
    ?>

    <!-- <div class="grid md:grid-cols-12 grid-cols-1 mt-6">
            <div class="md:col-span-12 text-center">
                <a href="" class="btn btn-link text-slate-400 hover:text-blue-900 after:bg-blue-900 duration-500 ease-in-out">See More Companies <i class="uil uil-arrow-right align-middle"></i></a>
            </div>
        </div>
    </div> -->
    <div class="container md:mt-24 mt-16">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 md:text-[26px] md:leading-normal text-2xl leading-normal font-semibold">Testmonial</h3>

            <p class="text-slate-400 max-w-xl mx-auto text-lg">Hear from our satisfied clients who have experienced our exceptional services and insights.</p>
        </div><!--end grid-->

        <!-- blog code  -->
        <?php
        include "$base_dir/testimonials.php";
        ?>

    </div><!--end container-->
    <div class="container md:mt-24 mt-16">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 md:text-[26px] md:leading-normal text-2xl leading-normal font-semibold">Latest Blog or News</h3>

            <p class="text-slate-400 max-w-xl mx-auto text-lg">Make sure you’re following our Latest Blog or News for good tips & suggestions from professionals.</p>
        </div><!--end grid-->


        <!-- blog code  -->
        <?php
        include "$base_dir/blog.php";
        ?>

    </div><!--end container-->


</section><!--end section-->
<!-- End -->

<!-- <div id="quotePopup" class="fixed inset-0 flex items-center justify-center bg-gray-800 bg-opacity-50 z-[1000]">
    <div class="bg-white w-[800px] max-w-full rounded-lg shadow-lg p-8 relative flex flex-col max-h-[90vh] overflow-hidden">
        <button id="closePopupButton" class="absolute top-4 right-4 text-gray-600 hover:text-gray-900">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
        <h2 class="text-2xl font-bold text-gray-800 mb-4 text-center">
            Employee <span class="text-blue-600">Hiring Form</span>
        </h2>
        <div class="flex flex-col items-center overflow-y-auto w-full max-h-[70vh] px-4">
            <form class="flex flex-col gap-4 w-full max-w-lg" method="post" name="myForm" id="myForm">

                <p class="mb-0 col-span-2" id="error-msg"></p>
                <div id="simple-msg" class="col-span-2"></div>

                <input name="title" id="title" type="text" placeholder="Job Title" class="border border-gray-300 rounded-lg px-4 py-2">
                <input name="location" id="location" type="text" placeholder="Job Location" class="border border-gray-300 rounded-lg px-4 py-2">
                <input name="position" id="position" type="number" placeholder="Available Position" class="border border-gray-300 rounded-lg px-4 py-2">
                <input name="salary_from" id="salary_from" type="text" placeholder="Starting Salary" class="border border-gray-300 rounded-lg px-4 py-2">
                <input name="salary_to" id="salary_to" type="text" placeholder="Ending Salary" class="border border-gray-300 rounded-lg px-4 py-2">
                <input name="start_date" id="start_date" type="date" placeholder="Start Date" class="border border-gray-300 rounded-lg px-4 py-2">
                <input name="end_date" id="end_date" type="date" placeholder="End Date" class="border border-gray-300 rounded-lg px-4 py-2">
                <input name="skill" id="skill" type="text" placeholder="Required Skills" class="border border-gray-300 rounded-lg px-4 py-2">

                <select id="job_type" name="job_type" class="border border-gray-300 rounded-lg px-4 py-2">
                    <option value="">Select Job Type</option>
                    <option value="full_name">Full Time</option>
                    <option value="part_time">Part Time</option>
                    <option value="intern">Intern</option>
                    <option value="freelancer">Freelance</option>
                </select>
                <input name="requirement" id="requirement" type="text" placeholder="Requirement" class="border border-gray-300 rounded-lg px-4 py-2">

                <textarea placeholder="Description" class="border border-gray-300 rounded-lg px-4 py-2 col-span-2"></textarea>

                <div class="flex justify-center mt-4 col-span-2">
                    <button type="submit" id="submit" name="send" class="bg-blue-600 text-white rounded-lg px-6 py-2 hover:bg-blue-700">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div> -->


<div id="quotePopup" class="fixed inset-0 flex items-center hidden justify-center bg-gray-800 bg-opacity-50 z-[1000]">
    <div class="bg-white w-[90%] max-w-[800px] rounded-lg shadow-lg p-8 flex relative overflow-y-auto max-h-[90vh]">
        <button id="closePopupButton" class="absolute top-4 right-4 text-gray-600 hover:text-gray-900">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
        <form id="jobForm" class="flex w-full flex-col sm:flex-row sm:space-x-8 justify-between overflow-y-auto">
            <div class="w-full sm:w-1/2 pr-0 sm:pr-8 mb-8 sm:mb-0">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">
                    Employee <span class="text-blue-600">Hiring</span>
                </h2>
                <h3 class="text-lg font-semibold text-gray-800 mb-3">Looking for...</h3>
                <div class="flex flex-wrap gap-2 mb-4">
                    <button class="px-4 py-2 bg-gray-200 text-gray-700 rounded-lg" onclick="toggleSelection(this)">Factory Worker</button>
                    <button class="px-4 py-2 bg-gray-200 text-gray-700 rounded-lg" onclick="toggleSelection(this)">Restaurant Helper</button>
                    <button class="px-4 py-2 bg-gray-200 text-gray-700 rounded-lg" onclick="toggleSelection(this)">Graphic designer</button>
                    <button class="px-4 py-2 bg-gray-200 text-gray-700 rounded-lg" onclick="toggleSelection(this)">Hotel Managers</button>
                    <button class="px-4 py-2 bg-gray-200 text-gray-700 rounded-lg" onclick="toggleSelection(this)">Other</button>
                </div>
                <script>
                    function toggleSelection(button) {
                        button.classList.toggle('bg-blue-500');
                        button.classList.toggle('text-white');
                        button.classList.toggle('bg-gray-200');
                        button.classList.toggle('text-gray-700');
                    }
                </script>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <input name="title" id="title" type="text" placeholder="Job Title" class="border border-gray-300 rounded-lg px-4 py-2">
                    <input name="location" id="location" type="text" placeholder="Job Location" class="border border-gray-300 rounded-lg px-4 py-2">
                    <input name="position" id="position" type="number" placeholder="Available Position" class="border border-gray-300 rounded-lg px-4 py-2">
                    <select id="category" name="category" class="border border-gray-300 rounded-lg px-4 py-2">
                        <option value="">Select Job Category</option>
                        <option value="1">Industry</option>
                        <option value="2">Management</option>
                    </select>
                    <input name="salary_from" id="salary_from" type="text" placeholder="Starting Salary" class="border border-gray-300 rounded-lg px-4 py-2">
                    <input name="salary_to" id="salary_to" type="text" placeholder="Ending Salary" class="border border-gray-300 rounded-lg px-4 py-2">
                    <input name="start_date" id="start_date" type="date" placeholder="Start Date" class="border border-gray-300 rounded-lg px-4 py-2">
                    <input name="end_date" id="end_date" type="date" placeholder="End Date" class="border border-gray-300 rounded-lg px-4 py-2">
                    <input name="skill" id="skill" type="text" placeholder="Required Skills" class="border border-gray-300 rounded-lg px-4 py-2">
                    <select id="job_type" name="job_type" class="border border-gray-300 rounded-lg px-4 py-2">
                        <option value="">Select Job Type</option>
                        <option value="full_time">Full Time</option>
                        <option value="part_time">Part Time</option>
                        <option value="intern">Intern</option>
                        <option value="freelancer">Freelance</option>
                    </select>
                    <input name="requirement" id="requirement" type="text" placeholder="Requirement" class="border border-gray-300 rounded-lg px-4 py-2">
                </div>
                <br>
                <textarea name="description" id="description" placeholder="Description" class="w-full border border-gray-300 rounded-lg px-4 py-2 mb-4"></textarea>
                <button type="submit" class="w-full bg-blue-600 text-white rounded-lg px-4 py-2 hover:bg-blue-700 mt-4">Submit</button>
            </div>
        </form>

    </div>
</div>








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


<script>
    document.addEventListener('DOMContentLoaded', function() {
        const getQuoteButton = document.getElementById('employee_looking');
        const quotePopup = document.getElementById('quotePopup');
        const closePopupButton = document.getElementById('closePopupButton');
        // Open popup
        getQuoteButton.addEventListener('click', () => {
            quotePopup.classList.remove('hidden');
        });
        // Close popup when clicking the "x"
        closePopupButton.addEventListener('click', () => {
            quotePopup.classList.add('hidden');
        });
        // Close popup when clicking outside the popup
        quotePopup.addEventListener('click', (e) => {
            if (e.target === quotePopup) {
                quotePopup.classList.add('hidden');
            }
        });

        function toggleSelection(button) {
            // Toggle the 'selected' state by adding/removing the 'bg-blue-500' and 'text-white' classes
            button.classList.toggle('bg-blue-900');
            button.classList.toggle('text-white');
            button.classList.toggle('bg-gray-200');
            button.classList.toggle('text-gray-700');
        }
    });

    document.addEventListener('DOMContentLoaded', function() {
        const getQuoteButton = document.getElementById('post_a_job');
        const quotePopup = document.getElementById('quotePopup');
        const closePopupButton = document.getElementById('closePopupButton');
        // Open popup
        getQuoteButton.addEventListener('click', () => {
            quotePopup.classList.remove('hidden');
        });
        // Close popup when clicking the "x"
        closePopupButton.addEventListener('click', () => {
            quotePopup.classList.add('hidden');
        });
        // Close popup when clicking outside the popup
        quotePopup.addEventListener('click', (e) => {
            if (e.target === quotePopup) {
                quotePopup.classList.add('hidden');
            }
        });

        function toggleSelection(button) {
            // Toggle the 'selected' state by adding/removing the 'bg-blue-500' and 'text-white' classes
            button.classList.toggle('bg-blue-900');
            button.classList.toggle('text-white');
            button.classList.toggle('bg-gray-200');
            button.classList.toggle('text-gray-700');
        }
    });

    document.getElementById('job_looking').onclick = function() {
        window.location.href = 'job-apply';
    };




    document.getElementById('search').onclick = function() {
        const keyword = document.getElementById('job-keyword').value.trim(); // Remove leading/trailing whitespace
        if (!keyword) {
            alert('Please enter a search term before proceeding.');
            return; // Stop further execution if the keyword is empty
        }
        const queryParams = new URLSearchParams();
        queryParams.append('name', keyword);
        queryParams.append('search', 1);
        window.location.href = `jobs-grid?${queryParams.toString()}`;
    };

    function changeImage(imageSrc) {
        document.getElementById('serviceImage').src = imageSrc;
    }
</script>



<script>
    $(document).ready(function() {
        $('#jobForm').on('submit', function(e) {
            e.preventDefault();
            // alert("ok");
            const formData = {
                title: $('#title').val(),
                location: $('#location').val(),
                position: $('#position').val(),
                salary_from: $('#salary_from').val(),
                salary_to: $('#salary_to').val(),
                start_date: $('#start_date').val(),
                end_date: $('#end_date').val(),
                job_type: $('#job_type').val(),
                skill: $('#skill').val(),
                description: $('#description').val(),
                status: 'active',
                custom_question: 'NULL',
                recruitment_type: 'internal',
                category: $('#category').val(),
                requirement: $('#requirement').val(),
                custom_question: []
            };

            $.ajax({
                url: 'https://crm2.techadmire.agency/api/post-job',
                method: 'POST',
                contentType: 'application/json',
                data: JSON.stringify(formData),
                dataType: 'json',
                success: function(response) {
                    if (response.status === 200) {
                        alert('Job posted successfully!');
                        $('#jobForm')[0].reset();
                    } else {
                        alert('Error: ' + response.message);
                    }
                },
                error: function() {
                    alert('There was an error processing your request.');
                }
            });
        });
    });
</script>