<?php
$base_dir = __DIR__ . '/Base';
$static_url = './assets'; // Ensure this is the correct path

// Include the common navlink content
ob_start();
include "$base_dir/header.php"; // This file contains the shared navlink content
$navlink_content = ob_get_clean(); // Capture the navlink content
$page = 'blog-detail';

// Optionally define the Hero block content
ob_start();
?>

<!-- Start Hero -->
<!-- <section class="relative table w-full py-36 bg-[url('../../<?php echo $static_url; ?>/images/hero/bg.jpg')] bg-top bg-no-repeat bg-cover">
    <div class="absolute inset-0 bg-blue-950/90"></div>
    <div class="container">
        <div class="grid grid-cols-1 text-center mt-10">
            <h3 class="md:text-3xl text-2xl md:leading-snug tracking-wide leading-snug font-medium text-white mb-3">Balancing Work and Life: Tips for a Healthier Career Journey</h3>
            <ul class="list-none mt-6 text-[20px] sm:text-[10px] flex flex-wrap justify-center items-center space-y-2 sm:space-y-0 sm:space-x-5">
                <li class="text-white/50 flex items-center space-x-1">
                    <span class="text-white">Author :</span>
                    <span>Job Admire</span>
                </li>
                <li class="text-white/50 flex items-center space-x-1">
                    <span class="text-white">Date :</span>
                    <span>26th December, 2024</span>
                </li>
                <li class="text-white/50 flex items-center space-x-1">
                    <span class="text-white">Time :</span>
                    <span>15 Min Read</span>
                </li>
            </ul>

        </div>
    </div>

    <div class="absolute text-center z-10 bottom-5 start-0 end-0 mx-3">
        <ul class="breadcrumb tracking-[0.5px] breadcrumb-light mb-0 inline-block">
            <li class="inline breadcrumb-item text-[15px] font-semibold duration-500 ease-in-out text-white/50 hover:text-white"><a href="index">Job Admire</a></li>
            <li class="inline breadcrumb-item text-[15px] font-semibold duration-500 ease-in-out text-white/50 hover:text-white"><a href="blogs">Blogs</a></li>
            <li class="inline breadcrumb-item text-[15px] font-semibold duration-500 ease-in-out text-white" aria-current="page">Single</li>
        </ul>
    </div>
</section> -->
<!-- <div class="relative">
    <div class="shape absolute start-0 end-0 sm:-bottom-px -bottom-[2px] overflow-hidden z-1 text-white dark:text-slate-900">
        <svg class="w-full h-auto" viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
        </svg>
    </div>
</div> -->
<!-- End Hero -->

<section class="md:mt-32 mt-12 relative md:py-24 py-16">
    <div class="container">
        <div class="lg:p-4 grid md:grid-cols-12 grid-cols-1 gap-[30px]">
            <div class="lg:col-span-12 md:col-span-6">
                <div class="text-center space-y-6 mb-12">
                    <span class="text-lg font-semibold text-blue-600 tracking-wide uppercase">BLOG</span>
                    <h1 class="text-4xl font-semibold text-gray-900 dark:text-white leading-snug">
                    Balancing Work and Life: Tips for a Healthier Career Journey
                    </h1>
                    <p class="text-gray-500 dark:text-gray-400 text-xl font-medium">January 30, 2025</p>
                </div>
                <div class="relative overflow-hidden dark:shadow-gray-800 grid place-items-center">
                    <img class="rounded-md shadow" src="<?php echo $static_url; ?>/images/blog/12.jpeg" alt="">

                    <div class="sidebar p-4">
                        <div class="table-of-contents sticky top-5 dark:bg-slate-800 bg-white p-6 mt-8 border-gray-300 text-left text-[#323847] text-[18px] leading-[28px] border border-gray-300 rounded-lg shadow">
                            <h2 class="text-2xl font-bold text-center text-gray-800 uppercase mb-4">Table of Contents</h2>
                            <ul class="space-y-2">
                                <li class="text-[18px] font-normal leading-[28px]">
                                    <a href="#work-life-balancing" class="block hover:bg-blue-900 hover:text-white px-2 py-1 rounded">

                                        1. Importance of Balancing Work and Life
                                    </a>
                                </li>
                                <li class="text-[18px] font-normal leading-[28px]">
                                    <a href="#strategies-maintaining-work-life" class="block hover:bg-blue-900 hover:text-white px-2 py-1 rounded">

                                        2. Strategies for Maintaining Work-Life Balance
                                    </a>
                                    <ul class=" ml-4 list-disc list-inside text-gray-700">
                                        <li class="text-[18px] font-normal leading-[28px]">2.1 Set Clear Boundaries</li>
                                        <li class="text-[18px] font-normal leading-[28px]">2.2 Prioritize Time Management</li>
                                        <li class="text-[18px] font-normal leading-[28px]">2.3 Learn to Say No</li>
                                        <li class="text-[18px] font-normal leading-[28px]">2.4 Take Regular Breaks</li>
                                    </ul>
                                </li>
                                <li class="text-[18px] font-normal leading-[28px]">
                                    <a href="#mental-health" class="block hover:bg-blue-900 hover:text-white px-2 py-1 rounded">

                                        3.Role of Mental and Physical Health in the Workplace
                                    </a>
                                    <ul class=" ml-4 list-disc list-inside text-gray-700">
                                        <li class="text-[18px] font-normal leading-[28px]">3.1 Mental Health</li>
                                        <li class="text-[18px] font-normal leading-[28px]">3.2 Physical Health</li>

                                    </ul>
                                </li>
                                <li class="text-[18px] font-normal leading-[28px]">
                                    <a href="#work-life-balance-matters" class="block hover:bg-blue-900 hover:text-white px-2 py-1 rounded">

                                        4. Why Work-Life Balance Matters
                                    </a>
                                    <ul class=" ml-4 list-disc list-inside text-gray-700">
                                        <li class="text-[18px] font-normal leading-[28px]">4.1 Enhanced Productivity</li>
                                        <li class="text-[18px] font-normal leading-[28px]">4.2 Better Relationships</li>
                                        <li class="text-[18px] font-normal leading-[28px]">4.3 Long-Term Health</li>
                                    </ul>
                                </li>

                            </ul>
                        </div>
                    </div>

                    <div class="sticky top-5 dark:bg-slate-800 bg-white p-6 border-gray-300 text-left text-[#323847] text-[18px] font-normal leading-[28px]">
                        <b>
                            <h1 id="work-life-balancing" class="text-2xl font-bold mt-4 mr-4 mb-2">Balancing Work and Life: Tips for a Healthier Career Journey</h1>
                        </b>
                        <p class="">Both physical and mental health is important and so is the effective and efficient performance of the job. But in today’s world, it is indeed difficult that one could have a balanced life to avail the best of the career without affecting the business, health and welfare in a negative way.
                        </p>
                        <div class="flex justify-center items-center m-8">
                            <div class="bg-blue-50 p-4 rounded-md sm:w-[100%] md:w-[60%] lg:w-[50%] text-center">
                                <p class="text-blue-700 text-lg">
                                    Tech isn’t the only sector that’s expanding in Ireland!
                                    Learn more about
                                    <a href="#" class="text-blue-600 underline hover:text-blue-800">
                                        some of the most in-demand careers in Ireland.
                                    </a>
                                </p>
                            </div>
                        </div>

                        <div class="flex justify-center items-center m-8">
                            <div class="w-[50%] text-center">
                                <img src="<?php echo $static_url; ?>/images/blog/bd1.png" class="mx-auto">
                            </div>
                        </div>
                        <b>
                            <h1 id="strategies-maintaining-work-life" class="text-2xl font-bold mt-4 mr-4">Strategies for Maintaining Work-Life Balance
                            </h1>
                        </b>
                        <p class="">Time to work should be defined and followed strictly.
                        </p>

                        <p class="font-semibold ml-4 mb-2">1. Set Clear Boundaries
                        </p>
                        <ul class="list-none text-[#323847] text-[18px] font-normal leading-[28px] space-y-3 ml-4">
                            <li class="text-[18px] font-normal leading-[28px]"><i class="uil uil-arrow-right text-blue-900 me-1"></i>Define work hours and stick to them. Avoid checking emails or taking calls after work hours unless absolutely necessary.
                            </li>
                            <li class="text-[18px] font-normal leading-[28px] mb-2"><i class="uil uil-arrow-right text-blue-900 me-1"></i>Communicate your boundaries to colleagues and managers to manage expectations.

                            </li>

                        </ul>

                        <p class="font-semibold ml-4 mb-2">2. Prioritize Time Management


                        </p>
                        <ul class="list-none text-[#323847] text-[18px] font-normal leading-[28px] space-y-3 ml-4">
                            <li class="text-[18px] font-normal leading-[28px]"><i class="uil uil-arrow-right text-blue-900 me-1"></i>Use tools like calendars and to-do lists to plan your day effectively.
                            </li>
                            <li class="text-[18px] font-normal leading-[28px] mb-2"><i class="uil uil-arrow-right text-blue-900 me-1"></i>Break tasks into smaller, manageable chunks to stay productive without feeling overwhelmed.
                            </li>

                        </ul>

                        <p class="font-semibold ml-4 mb-2">3. Learn to Say No

                        </p>
                        <ul class="list-none text-[#323847] text-[18px] font-normal leading-[28px] space-y-3 ml-4">
                            <li class="text-[18px] font-normal leading-[28px]"><i class="uil uil-arrow-right text-blue-900 me-1"></i>Avoid overloading yourself with commitments. Saying no to do more than you can handle does not make you a rude person.

                            </li>
                            <li class="text-[18px] font-normal leading-[28px] mb-2"><i class="uil uil-arrow-right text-blue-900 me-1"></i>The productivity should be optimal rather than the quantity of tasks performed or the number of social activities carried out. </li>
                            <li class="text-[18px] font-normal leading-[28px] mb-2"><i class="uil uil-arrow-right text-blue-900 me-1"></i>Get up from your workplace after every few hours to gain some energy.
                            </li>

                        </ul>

                        <p class="font-semibold ml-4 mb-2">4. Take Regular Breaks


                        </p>
                        <ul class="list-none text-[#323847] text-[18px] font-normal leading-[28px] space-y-3 ml-4">
                            <li class="text-[18px] font-normal leading-[28px]"><i class="uil uil-arrow-right text-blue-900 me-1"></i>Step away from your desk periodically to recharge. Even a simple walk or some stretching can help take walking breaks and drastically decrease stress levels.

                            </li>
                            <li class="text-[18px] font-normal leading-[28px] mb-2"><i class="uil uil-arrow-right text-blue-900 me-1"></i>Accrue vacation days to take them in order to get a complete rest. </li>


                        </ul>
                        <div class="flex justify-center items-center m-8">
                            <div class="bg-blue-50 p-4 rounded-md sm:w-[100%] md:w-[60%] lg:w-[50%] text-center">
                                <p class="text-blue-700 text-lg">
                                    Tech isn’t the only sector that’s expanding in Ireland!
                                    Learn more about
                                    <a href="#" class="text-blue-600 underline hover:text-blue-800">
                                        some of the most in-demand careers in Ireland.
                                    </a>
                                </p>
                            </div>
                        </div>

                        <div class="flex justify-center items-center m-8">
                            <div class="w-[50%] text-center">
                                <img src="<?php echo $static_url; ?>/images/blog/bd2.png" class="mx-auto">
                            </div>
                        </div>
                        <b>
                            <h1 id="mental-health" class="text-2xl font-bold mt-4 mr-4">Role of Mental and Physical Health in Workplace.

                            </h1>
                        </b>


                        <p class="font-semibold ml-4 mb-2">1. Mental Health
                        </p>
                        <ul class="list-none text-[#323847] text-[18px] font-normal leading-[28px] space-y-3 ml-4">
                            <li class="text-[18px] font-normal leading-[28px]"><i class="uil uil-arrow-right text-blue-900 me-1"></i><b>Stress Management:</b> One of the affects of stress is that it causes burnout. Meditate or take 20minutes to spend time reflecting on your worries so that you can overcome stress.
                            </li>
                            <li class="text-[18px] font-normal leading-[28px] mb-2"><i class="uil uil-arrow-right text-blue-900 me-1"></i><b>Seek Support: </b> mental health and illness and ask for a professional help if necessary. At present, most establishments avail an Employee Assistance Program or commonly known as EAP.

                            </li>

                        </ul>

                        <p class="font-semibold ml-4 mb-2">2. Physical Health


                        </p>
                        <ul class="list-none text-[#323847] text-[18px] font-normal leading-[28px] space-y-3 ml-4">
                            <li class="text-[18px] font-normal leading-[28px]"><i class="uil uil-arrow-right text-blue-900 me-1"></i><b>Stay Active:</b> make it point to exercise, at least for 30 minutes a day. Exercise increases mood and vigor. </li>
                            <li class="text-[18px] font-normal leading-[28px] mb-2"><i class="uil uil-arrow-right text-blue-900 me-1"></i><b>Healthy Eating:</b> Feed your body healthy meals and snacks that will keep you alert and productive all the time.

                            </li>

                            <li class="text-[18px] font-normal leading-[28px] mb-2"><i class="uil uil-arrow-right text-blue-900 me-1"></i><b>Adequate Sleep:</b> Most adults should strive to get between seven and nine hours of good quality of sleep every night.

                            </li>
                        </ul>
                        <div class="flex justify-center items-center m-8">
                            <div class="bg-blue-50 p-4 rounded-md sm:w-[100%] md:w-[60%] lg:w-[50%] text-center">
                                <p class="text-blue-700 text-lg">
                                    Tech isn’t the only sector that’s expanding in Ireland!
                                    Learn more about
                                    <a href="#" class="text-blue-600 underline hover:text-blue-800">
                                        some of the most in-demand careers in Ireland.
                                    </a>
                                </p>
                            </div>
                        </div>

                        <div class="flex justify-center items-center m-8">
                            <div class="w-[50%] text-center">
                                <img src="<?php echo $static_url; ?>/images/blog/bd3.png" class="mx-auto">
                            </div>
                        </div>
                        <b>
                            <p id="work-life-balance-matters" class="text-2xl font-semibold mt-4 mr-4 mb-2"> Why Work-Life Balance Matters</p>
                        </b>
                        <ul class="list-none text-[#323847] text-[18px] font-normal leading-[28px] space-y-3 ml-4">
                            <li class="text-[18px] font-normal leading-[28px]"><i class="uil uil-arrow-right text-blue-900 me-1"></i><b>Enhanced Productivity:</b> Maintenance of good work life balance is important because employees are usually more alert in workplace.
                            </li>
                            <li class="text-[18px] font-normal leading-[28px] mb-2"><i class="uil uil-arrow-right text-blue-900 me-1"></i><b>Better Relationships:</b> Scheduling regular time for family, friends and pastime has a positive impact in instituting friendship and general well-being.
                            </li>

                            <li class="text-[18px] font-normal leading-[28px] mb-2"><i class="uil uil-arrow-right text-blue-900 me-1"></i><b>Long-Term Health:</b> The study shows that overworking cuts down the chances of developing stress-related diseases such as heart diseases and depression as using up time achieves balance.
                            </li>
                        </ul>
                        <p class=" ml-6 mb-2">As with all things in life, a good work-life balance is something that must be learned and worked at. When barrier are defined, stress is controlled and the health is properly valued, a complete career path filled with personal and professional development is created.
                        </p>
                        <div class="flex justify-center items-center m-8">
                            <div class="bg-blue-50 p-4 rounded-md sm:w-[100%] md:w-[60%] lg:w-[50%] text-center">
                                <p class="text-blue-700 text-lg">
                                    Tech isn’t the only sector that’s expanding in Ireland!
                                    Learn more about
                                    <a href="#" class="text-blue-600 underline hover:text-blue-800">
                                        some of the most in-demand careers in Ireland.
                                    </a>
                                </p>
                            </div>
                        </div>

                        <div class="flex justify-center items-center m-8">
                            <div class="w-[50%] text-center">
                                <img src="<?php echo $static_url; ?>/images/blog/bd1.png" class="mx-auto">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="p-6 rounded-md shadow dark:shadow-gray-800 mt-8">
                    <h5 class="text-2xl font-semibold">Leave A Comment:</h5>

                    <form class="mt-8">
                        <div class="grid lg:grid-cols-12 lg:gap-6">
                            <div class="lg:col-span-6 mb-5">
                                <div class="text-start">
                                    <label for="name" class="font-semibold">Your Name:</label>
                                    <div class="form-icon relative mt-2">
                                        <i data-feather="user" class="size-4 absolute top-3 start-4"></i>
                                        <input name="name" id="name" type="text" class="form-input ps-11" placeholder="Name :">
                                    </div>
                                </div>
                            </div>

                            <div class="lg:col-span-6 mb-5">
                                <div class="text-start">
                                    <label for="email" class="font-semibold">Your Email:</label>
                                    <div class="form-icon relative mt-2">
                                        <i data-feather="mail" class="size-4 absolute top-3 start-4"></i>
                                        <input name="email" id="email" type="email" class="form-input ps-11" placeholder="Email :">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="grid grid-cols-1">
                            <div class="mb-5">
                                <div class="text-start">
                                    <label for="comments" class="font-semibold">Your Comment:</label>
                                    <div class="form-icon relative mt-2">
                                        <i data-feather="message-circle" class="size-4 absolute top-3 start-4"></i>
                                        <textarea name="comments" id="comments" class="form-input ps-11 h-28" placeholder="Message :"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" id="submit" name="send" class="btn bg-blue-900 hover:bg-blue-950 border-blue-900 hover:border-blue-950 text-white rounded-md w-full">Send Message</button>
                    </form>
                </div>
                <br>
                <div class="sticky top-20">
                    <h5 class="text-2xl font-medium bg-gray-50 dark:bg-slate-800 shadow dark:shadow-gray-800 rounded-md p-2 text-center">Author</h5>
                    <div class="text-center mt-8">
                        <img src="<?php echo $static_url; ?>/images/team/09.jpg" class="size-20 mx-auto rounded-full shadow mb-4" alt="">

                        <a href="" class="text-2xl font-medium hover:text-blue-900 transition-all duration-500 ease-in-out h5">Maryum</a>
                        <p class="">Content Writer</p>
                    </div>

                    <h5 class="text-2xl font-medium bg-gray-50 dark:bg-slate-800 shadow dark:shadow-gray-800 rounded-md p-2 text-center mt-8">Social sites</h5>
                    <ul class="list-none text-center mt-8 space-x-0.5">
                        <li class="inline"><a href="" class="btn btn-icon btn-sm border border-gray-100 dark:border-gray-800 rounded-md  hover:border-blue-900 hover:text-white hover:bg-blue-900"><i data-feather="facebook" class="size-4"></i></a></li>
                        <li class="inline"><a href="" class="btn btn-icon btn-sm border border-gray-100 dark:border-gray-800 rounded-md  hover:border-blue-900 hover:text-white hover:bg-blue-900"><i data-feather="instagram" class="size-4"></i></a></li>
                        <li class="inline"><a href="" class="btn btn-icon btn-sm border border-gray-100 dark:border-gray-800 rounded-md  hover:border-blue-900 hover:text-white hover:bg-blue-900"><i data-feather="twitter" class="size-4"></i></a></li>
                        <li class="inline"><a href="" class="btn btn-icon btn-sm border border-gray-100 dark:border-gray-800 rounded-md  hover:border-blue-900 hover:text-white hover:bg-blue-900"><i data-feather="linkedin" class="size-4"></i></a></li>
                        <li class="inline"><a href="" class="btn btn-icon btn-sm border border-gray-100 dark:border-gray-800 rounded-md  hover:border-blue-900 hover:text-white hover:bg-blue-900"><i data-feather="github" class="size-4"></i></a></li>
                        <li class="inline"><a href="" class="btn btn-icon btn-sm border border-gray-100 dark:border-gray-800 rounded-md  hover:border-blue-900 hover:text-white hover:bg-blue-900"><i data-feather="youtube" class="size-4"></i></a></li>
                        <li class="inline"><a href="" class="btn btn-icon btn-sm border border-gray-100 dark:border-gray-800 rounded-md  hover:border-blue-900 hover:text-white hover:bg-blue-900"><i data-feather="gitlab" class="size-4"></i></a></li>
                    </ul><!--end icon-->
                </div>
            </div>


        </div>
    </div>

    <div class="container lg:mt-24 mt-16">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 md:text-[26px] md:leading-normal text-2xl leading-normal font-semibold">Related Blogs</h3>

            <p class=" dark:text-slate-300 max-w-xl mx-auto">Search all the open positions on the web. Get your own personalized salary estimate. Read reviews on over 30+ companies worldwide.</p>
        </div><!--end grid-->


        <!-- blog code  -->
        <?php
        include "$base_dir/blog.php";
        ?>

    </div><!--end container-->

    <div class="container-fluid md:mt-24 mt-16">
        <div class="container">

            <!-- exploreJob code  -->
            <?php
            include "$base_dir/exploreJob.php";
            ?>

        </div><!--end container-->
    </div><!--end container-->
</section><!--end section-->
<!-- End -->




<?php
$hero_content = ob_get_clean(); // Capture the hero content

// $button_style = 'simple'; // Set the button style for index2
// $navbar_style = 'nav-light'; // Define the navbar style for index22

// Include the base template
include "$base_dir/base.php";
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