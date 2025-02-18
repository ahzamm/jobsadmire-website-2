<?php
$base_dir = __DIR__ . '/Base';
$static_url = './assets'; // Ensure this is the correct path

// Include the common navlink content
ob_start();
include "$base_dir/header.php"; // This file contains the shared navlink content
$navlink_content = ob_get_clean(); // Capture the navlink content
$page = 'service-detail';

// Optionally define the Hero block content
ob_start();
?>

<!-- Start Hero -->
<section class="md:mt-32 relative table w-full py-36 bg-[url('../../<?php echo $static_url; ?>/images/service/Skill_Development_Training.png')] bg-top bg-no-repeat bg-cover">
    <!-- <div class="absolute inset-0 bg-blue-950/90"></div> -->
    <div class="container">
        <div class="grid grid-cols-1 text-center mt-10">
            <!-- <h1 class="md:text-3xl text-2xl md:leading-snug tracking-wide leading-snug font-medium text-white">Skill Development Training</h1> -->

        </div><!--end grid-->
    </div><!--end container-->

    <!-- <div class="absolute text-center z-5 bottom-5 start-0 end-0 mx-3">
        <ul class="breadcrumb tracking-[0.5px] breadcrumb-light mb-0 inline-block">
            <li class="inline breadcrumb-item text-[15px] font-semibold duration-500 ease-in-out text-white/50 hover:text-white"><a href="index">Job Admire</a></li>
            <li class="inline breadcrumb-item text-[15px] font-semibold duration-500 ease-in-out text-white/50 hover:text-white"><a href="services">Services</a></li>
            <li class="inline breadcrumb-item text-[15px] font-semibold duration-500 ease-in-out text-white" aria-current="page">Service Detail</li>
        </ul>
    </div> -->
</section><!--end section-->
<div class="relative">
    <div class="shape absolute start-0 end-0 sm:-bottom-px -bottom-[2px] overflow-hidden z-1 text-white dark:text-slate-900">
        <svg class="w-full h-auto" viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
        </svg>
    </div>
</div>
<!-- End Hero -->
<section>
    <!-- Container -->
    <div class="mx-auto w-full max-w-7xl px-5 py-12 md:px-6 md:py-12">
        <!-- Component -->
        <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[120px]">
            <!-- Content -->
            <div class="lg:col-span-7 md:col-span-7">
                <h2 class="mb-8 text-3xl font-bold md:text-5xl">Skill Development Training Service</h2>
                <p class="text-sm sm:text-base">
                    With our skill development training, our clients acquire the skills, skills and knowledge they require in the today’s job market. Ideal for any students aspiring to become a professional or those in middle of their career who aim to advance in their chosen field and for those who wish to shift to a new career, our accelerated training programs are designed to offer hands-on training with industry-based exposure. The highlight of our program is the skills we prepare our students to emphasize on industry tailored skills acquired through fun training methods, online learning, and simulated projects.
                </p>
                <br>
                <!-- <a href="contact" class="w-36 rounded-md bg-black px-6 py-3 text-center font-semibold text-white">
                    Contact Us
                </a> -->
                <!-- Divider -->
                <div class="my-8 h-px w-full bg-black"></div>
                <!-- Testimonials -->
                <div class="grid gap-8 md:grid-cols-2 md:gap-4">
                    <div class="flex flex-col gap-4 rounded-md border border-solid bg-gray-100 p-6 md:p-4">
                        <p class="text-sm">
                            We struggled to find skilled workers until we partnered with Jobs Admire. Their platform provided us with reliable candidates who fit our needs perfectly. It has improved our productivity and efficiency significantly.
                        </p>
                        <div class="flex items-center gap-2 sm:gap-x-4">
                            <div class="flex items-center gap-x-2">
                                <img src="<?php echo $static_url; ?>/images/testi/11.jpg" alt="" class="h-8 w-8 rounded-full object-cover" />
                                <p class="text-sm font-semibold sm:text-base">
                                    Mehmet K.
                                </p>
                            </div>
                            <!-- Divider -->
                            <div class="h-5 w-px bg-gray-300"></div>
                            <div class="flex items-center gap-x-2">
                                <p class="text-sm font-semibold sm:text-base">5.0</p>
                                <div class="flex text-yellow-500">
                                    <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                        <path fill="currentColor" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08l4.15-2.5z"></path>
                                    </svg>
                                    <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                        <path fill="currentColor" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08l4.15-2.5z"></path>
                                    </svg>
                                    <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                        <path fill="currentColor" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08l4.15-2.5z"></path>
                                    </svg>
                                    <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                        <path fill="currentColor" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08l4.15-2.5z"></path>
                                    </svg>
                                    <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                        <path fill="currentColor" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08l4.15-2.5z"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col gap-4 rounded-md border border-solid bg-gray-100 p-6 md:p-4">
                        <p class="text-sm">
                            Jobs Admire helped me find a stable job in a well-known factory. The process was smooth, and their team guided me at every step. Now, I have a secure income and a better future for my family. Highly recommend!
                        </p>
                        <div class="flex items-center gap-2 sm:gap-x-4">
                            <div class="flex items-center gap-x-2">
                                <img src="<?php echo $static_url; ?>/images/testi/12.jpg" alt="" class="h-8 w-8 rounded-full object-cover" />
                                <p class="text-sm font-semibold sm:text-base">
                                    Ahmed R.
                                </p>
                            </div>
                            <!-- Divider -->
                            <div class="h-5 w-px bg-gray-300"></div>
                            <div class="flex items-center gap-x-2">
                                <p class="text-sm font-semibold sm:text-base">5.0</p>
                                <div class="flex text-yellow-500">
                                    <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                        <path fill="currentColor" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08l4.15-2.5z"></path>
                                    </svg>
                                    <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                        <path fill="currentColor" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08l4.15-2.5z"></path>
                                    </svg>
                                    <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                        <path fill="currentColor" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08l4.15-2.5z"></path>
                                    </svg>
                                    <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                        <path fill="currentColor" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08l4.15-2.5z"></path>
                                    </svg>
                                    <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                        <path fill="currentColor" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08l4.15-2.5z"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Image -->
            <!-- <div class="w-full rounded-md bg-gray-100 max-[991px]:h-[475px] md:w-2/5 bg-[url('../../<?php echo $static_url; ?>/images/service/resume1.png')] bg-cover bg-center"></div> -->
            <div class="lg:col-span-5 md:col-span-5">
                <!-- <img class="rounded-md bg-gray-100 md:h-[512px]"
                    src="<?php echo $static_url; ?>/images/service/skill/1.jpg"
                    alt="Resume Image"> -->
                    <div class="bg-white p-6 rounded-lg shadow-lg w-80">
                    <h2 class="text-xl font-bold text-center mb-4">Let's Connet</h2>

                    <form>
                        <div class="mb-4">
                            <label class="block text-gray-700">Enter your name*</label>
                            <input type="text" class="w-full mt-1 px-3 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-red-500" placeholder="Enter your name">
                        </div>

                        <div class="mb-4">
                            <label class="block text-gray-700">Enter your email address*</label>
                            <input type="email" class="w-full mt-1 px-3 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-red-500" placeholder="Enter your email address">
                        </div>

                        <div class="mb-4">
                            <label class="block text-gray-700">Enter your message*</label>
                            <textarea class="w-full mt-1 px-3 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-red-500" rows="3" placeholder="Enter your message"></textarea>
                        </div>

                        <button type="submit" class="w-full bg-red-600 text-white py-2 rounded-md hover:bg-red-700 transition">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


<section>
    <!-- Container -->
    <div class="mx-auto w-full max-w-7xl px-5 py-16 md:px-10 md:py-20">
        <!-- Title -->
        <h2 class="mb-8 text-3xl font-bold md:text-5xl md:mb-10">
            Skill Development & Training: Elevate Your Career Potential
        </h2>
        <p class="mb-8 max-w-lg text-sm text-gray-500 sm:text-base md:mb-16">
            In today’s competitive job market, continuous learning is key to career growth. At JobsAdmire, we offer expert-led training programs designed to enhance your skills, boost your confidence, and keep you ahead in your industry.
        </p>
        <div class="grid gap-8 md:grid-cols-2 md:gap-10">
            <img src="<?php echo $static_url; ?>/images/service/skill/2.jpg" alt="" class="inline-block h-full w-full rounded-2xl object-cover shadow" />
            <div class="flex flex-col gap-5 rounded-2xl border border-solid border-black p-10 sm:p-12">
                <h2 class="text-3xl font-bold md:text-5xl">Customized Training for Career Success</h2>
                <p class="text-sm text-gray-500 sm:text-base">
                    Our programs cover technical skills, soft skills, leadership training, and industry-specific certifications to help you stay relevant. Whether you’re looking to upskill for career advancement or transition into a new field, our hands-on training, real-world simulations, and personalized coaching will empower you to reach your full potential.
                    <br />
                    <br />
                    Gain a competitive edge with our customized training programs designed for career growth. From technical expertise to leadership development, we provide hands-on learning and industry-recognized certifications. Our personalized coaching ensures you build the skills needed to excel in your field.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="relative md:py-24 py-16">
    <div class="container py-8">
        <h2 class="mb-8 text-3xl font-bold md:text-5xl md:mb-10">
            Customized Training Solutions
        </h2>
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-4">

            <!-- Text Content Section -->
            <div class="lg:col-span-6 text-lg">

                <ul class="list-none space-y-4">
                    <li class="flex items-start gap-3 p-4 rounded-lg border border-gray-300 shadow-sm transition-transform transform hover:scale-105 hover:shadow-md">
                        <span class="text-blue-500 text-lg">🔍</span>
                        <div class="flex flex-col">
                            <span class="text-gray-700 font-medium">Training Design and Customization:</span>
                            <p class="text-gray-500 text-sm">We diagnose specific developmental needs for individuals or organizations, ensuring that the right training is designed to enhance skills effectively across sectors.</p>
                        </div>
                    </li>
                    <li class="flex items-start gap-3 p-4 rounded-lg border border-gray-300 shadow-sm transition-transform transform hover:scale-105 hover:shadow-md">
                        <span class="text-blue-500 text-lg">📚</span>
                        <div class="flex flex-col">
                            <span class="text-gray-700 font-medium">Develop Training Modules:</span>
                            <p class="text-gray-500 text-sm">We create tailored training materials and interactive workshops for various industries, offering specialized courses in fields like software engineering, data analysis, and digital marketing.</p>
                        </div>
                    </li>
                    <li class="flex items-start gap-3 p-4 rounded-lg border border-gray-300 shadow-sm transition-transform transform hover:scale-105 hover:shadow-md">
                        <span class="text-blue-500 text-lg">💬</span>
                        <div class="flex flex-col">
                            <span class="text-gray-700 font-medium">Increase Interaction Skills:</span>
                            <p class="text-gray-500 text-sm">We focus on enhancing interpersonal skills like communication, leadership, time management, and teamwork, essential for success in any professional setting.</p>
                        </div>
                    </li>
                </ul>


            </div><!--end col-->
            <!-- Image Section -->
            <div class="lg:col-span-6 flex justify-center items-center">
                <div class="relative overflow-hidden rounded-lg shadow-md">
                    <img src="<?php echo $static_url; ?>/images/service/skill/3.jpg" alt="Company Image" class="w-full h-auto object-cover">
                </div>
            </div>
        </div><!--end grid-->
    </div><!--end container-->

    <div class="container-fluid md:mt-20 mt-12">
        <div class="container">
            <!-- exploreJob code -->
            <?php
            include "$base_dir/exploreJob.php";
            ?>
        </div><!--end container-->
    </div><!--end container-->
</section>
<!-- Start -->
<!-- Start -->

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