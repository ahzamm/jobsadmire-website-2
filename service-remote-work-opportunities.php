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
<section class="md:mt-32 relative table w-full py-36 bg-[url('../../<?php echo $static_url; ?>/images/service/Remote_Work.png')] bg-top bg-no-repeat bg-cover">
    <!-- <div class="absolute inset-0 bg-blue-950/90"></div> -->
    <div class="container">
        <div class="grid grid-cols-1 text-center mt-10">
            <!-- <h1 class="md:text-3xl text-2xl md:leading-snug tracking-wide leading-snug font-medium text-white">Remote Work Opportunities -->
            </h1>

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
                <h2 class="mb-8 text-3xl font-bold md:text-5xl">Remote Work Opportunities Service</h2>
                <p class="text-sm sm:text-base">
                    We offer an opportunity to find high-quality REMOTE WORK and work from anywhere in the world; it is also a great link between employees and employers. We want to help you work remotely, both to find job offers and the best practices for applying for a job. Each job posted is reviewed by our team, we make sure it meets all the requirements. We lead by example. Our entire team works remotely.
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
                    src="<?php echo $static_url; ?>/images/service/remote/1.jpg"
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
            Unlock Global Careers from Anywhere
        </h2>
        <p class="mb-8 max-w-lg text-sm text-gray-500 sm:text-base md:mb-16">
            The future of work is remote, and JobsAdmire is here to help you tap into global opportunities without leaving your home. We connect you with leading remote employers across various industries, allowing you to build a fulfilling career on your terms.
        </p>
        <div class="grid gap-8 md:grid-cols-2 md:gap-10">
            <img src="<?php echo $static_url; ?>/images/service/remote/2.jpg" alt="" class="inline-block h-full w-full rounded-2xl object-cover shadow" />
            <div class="flex flex-col gap-5 rounded-2xl border border-solid border-black p-10 sm:p-12">
                <h2 class="text-3xl font-bold md:text-5xl">Flexible Careers for a Balanced Lifestyle</h2>
                <p class="text-sm text-gray-500 sm:text-base">
                    Whether you’re a digital nomad, a parent seeking flexibility, or someone looking for a better work-life balance, we help you find remote jobs that match your skills and career aspirations. From job search strategies to remote work best practices, we guide you every step of the way to ensure your success in the virtual workspace.
                    <br />
                    <br />
                    Discover the freedom of flexible careers with our tailored support for remote work opportunities. Whether you're a digital nomad or balancing family commitments, we help you find jobs that fit your lifestyle. Our expert guidance on job search strategies and remote work success ensures you thrive in a virtual environment while achieving the perfect work-life balance.
                  </p>
            </div>
        </div>
    </div>
</section>

<section class="relative md:py-24 py-16">
    <div class="container py-8">
        <h2 class="mb-8 text-3xl font-bold md:text-5xl md:mb-10">
        Remote Job Placement Services
        </h2>
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-4">

            <!-- Text Content Section -->
            <div class="lg:col-span-6 text-lg">

            <ul class="list-none space-y-4">
    <li class="flex items-start gap-3 p-4 rounded-lg border border-gray-300 shadow-sm transition-transform transform hover:scale-105 hover:shadow-md">
        <span class="text-blue-500 text-lg">🎯</span>
        <div class="flex flex-col">
            <span class="text-gray-700 font-medium">Capture Skills and Experience:</span>
            <p class="text-gray-500 text-sm">We gather detailed information on candidates' skills, experiences, and industries of interest to match them with the right remote opportunities.</p>
        </div>
    </li>
    <li class="flex items-start gap-3 p-4 rounded-lg border border-gray-300 shadow-sm transition-transform transform hover:scale-105 hover:shadow-md">
        <span class="text-blue-500 text-lg">📍</span>
        <div class="flex flex-col">
            <span class="text-gray-700 font-medium">Assign Relevant Remote Jobs:</span>
            <p class="text-gray-500 text-sm">We ensure candidates are placed in remote roles that align with their skills and career objectives, boosting their chances of success in telecommuting positions.</p>
        </div>
    </li>
    <li class="flex items-start gap-3 p-4 rounded-lg border border-gray-300 shadow-sm transition-transform transform hover:scale-105 hover:shadow-md">
        <span class="text-blue-500 text-lg">💻</span>
        <div class="flex flex-col">
            <span class="text-gray-700 font-medium">Evaluate Teleworking Potential:</span>
            <p class="text-gray-500 text-sm">Assess candidates' technical abilities, self-organization, and effectiveness in teleworking environments to ensure they thrive in remote roles.</p>
        </div>
    </li>
    <li class="flex items-start gap-3 p-4 rounded-lg border border-gray-300 shadow-sm transition-transform transform hover:scale-105 hover:shadow-md">
        <span class="text-blue-500 text-lg">📝</span>
        <div class="flex flex-col">
            <span class="text-gray-700 font-medium">Cover Letter Guidelines for Remote Jobs:</span>
            <p class="text-gray-500 text-sm">Provide candidates with expert tips on writing compelling cover letters tailored for remote positions, focusing on key aspects like time management and independence.</p>
        </div>
    </li>
</ul>


            </div><!--end col-->
            <!-- Image Section -->
            <div class="lg:col-span-6 flex justify-center items-center">
                <div class="relative overflow-hidden rounded-lg shadow-md">
                    <img src="<?php echo $static_url; ?>/images/service/remote/3.jpg" alt="Company Image" class="w-full h-auto object-cover">
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