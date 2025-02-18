<?php
$base_dir = __DIR__ . '/Base';
$static_url = './assets';
ob_start();
include "$base_dir/header.php";
$navlink_content = ob_get_clean();
$page = 'aboutus';
ob_start();
?>
<!-- Start Hero -->
<section class="md:mt-32 relative table w-full py-36 bg-[url('../../<?php echo $static_url; ?>/images/hero/bg.jpg')] bg-top bg-no-repeat bg-cover">
    <div class="absolute inset-0 bg-blue-950/90"></div>
    <div class="container">
        <div class="grid grid-cols-1 text-center mt-10">
            <h3 class="md:text-3xl text-2xl md:leading-snug tracking-wide leading-snug font-medium text-white">About Us</h3>
        </div><!--end grid-->
    </div><!--end container-->
    <div class="absolute text-center z-10 bottom-5 start-0 end-0 mx-3">
        <ul class="breadcrumb tracking-[0.5px] breadcrumb-light mb-0 inline-block">
            <li class="inline breadcrumb-item text-[15px] font-semibold duration-500 ease-in-out text-white/50 hover:text-white"><a href="index">Job Admire</a></li>
            <li class="inline breadcrumb-item text-[15px] font-semibold duration-500 ease-in-out text-white" aria-current="page">About Us</li>
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
    <div class="container-fuild">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 md:text-[26px] md:leading-normal text-2xl leading-normal font-bold pt-16">Our Story</h3>

        </div><!--end grid-->

        <!-- blog code  -->
        <?php
        include "$base_dir/our-story.php";
        ?>

    </div><!--end container-->

    <div class="container md:pb-16">
        <h3 class="mb-4 md:text-[26px] md:leading-normal text-2xl leading-normal font-bold pt-32 text-center pb-12">At Jobs Admire, We’re Committed to Our Values</h3>

        <?php
        include "$base_dir/core-values.php";
        ?>

    </div>
    <div class="container md:pb-16">
        <h3 class="mb-4 md:text-[26px] md:leading-normal text-2xl leading-normal font-bold pt-32 text-center pb-12">Our History</h3>

        <?php
        include "$base_dir/our-history.php";
        ?>

    </div>

    <div class="container md:pb-16">
        <h3 class="mb-4 md:text-[26px] md:leading-normal text-2xl leading-normal font-bold pt-32 text-center pb-2">Recruiter Worldwide</h3>
        <p class="text-gray-600 mb-12 text-center">Our 1,000+ recruiters are as diverse as the students we support!</p>

        <?php
        include "$base_dir/our-worldwide.php";
        ?>

    </div>

    <div class="container md:pb-16">
        <?php
        include "$base_dir/about.php";
        ?>
    </div>
    <!-- <h1 class="text-3xl font-bold text-blue-700 mb-4 dark:text-white">Our Certifications</h1> -->
    <div class="pt-12">
        <?php
        include "$base_dir/license.php";
        ?>
    </div>
    <!-- <div class="container-fluid ">
        <div class="container">
            <div class="flex flex-col items-center py-12">
                <h1 class="text-3xl font-bold text-blue-700 mb-4 dark:text-white">What We Do</h1>
                <p class="text-slate-400 text-center text-lg">Jobs Admire offers features designed to help employers find the ideal candidates for the tourism and IT sectors. With our expertise in these rapidly growing industries, we focus on placing qualified professionals in positions that align with their skills and career goals. Whether you're applying for a job in Turkey or looking to explore opportunities worldwide, Jobs Admire is here to support you every step of the way. From the initial application to securing the right role, we provide personalized assistance tailored to the specific needs of the IT and tourism sectors, ensuring a smooth and successful career transition.
                </p>
            </div>
        </div>
    </div> -->
    <!-- <div class="container-fluid">
        <div class="container">
            <div class="flex flex-col items-center py-12">
                <h1 class="text-3xl font-bold text-blue-700 mb-4 dark:text-white">Why <span class="text-black dark:text-white">Job Admire</span> ?</h1>
                </p>
            </div>
            <div class="flex flex-wrap justify-center gap-6 p-6">

                <div class="bg-white rounded-lg shadow-lg p-6 w-80 relative group transform transition-transform duration-500 hover:-translate-y-2">
                    <div class="flex items-center mb-3">
                        <i data-feather="globe" class="h-8 text-blue-900 me-3"></i>
                        <h3 class="text-lg font-semibold text-gray-800">Global Network</h3>
                    </div>
                    <p class="text-slate-400 mb-4 text-lg">
                        We connect you to jobs in leading markets worldwide, ensuring the right opportunity is always within reach.
                    </p>
                    <div class="absolute bottom-0 left-0 w-full h-1 bg-blue-900 group-hover:h-0 transition-all duration-500 rounded-full"></div>
                </div>
                <div class="bg-white rounded-lg shadow-lg p-6 w-80 relative group transform transition-transform duration-500 hover:-translate-y-2">
                    <div class="flex items-center mb-3">
                        <i data-feather="lock" class="h-8 text-blue-900 me-3"></i>
                        <h3 class="text-lg font-semibold text-gray-800">Personalized Support</h3>
                    </div>
                    <p class="text-slate-400 mb-4 text-lg">
                        Every candidate and employer is unique, and our tailored approach reflects that.
                    </p>
                    <div class="absolute bottom-0 left-0 w-full h-1 bg-blue-900 group-hover:h-0 transition-all duration-500 rounded-full"></div>
                </div>
                <div class="bg-white rounded-lg shadow-lg p-6 w-80 relative group transform transition-transform duration-500 hover:-translate-y-2">
                    <div class="flex items-center mb-3">
                        <i data-feather="check-circle" class="h-8 text-blue-900 me-3"></i>
                        <h3 class="text-lg font-semibold text-gray-800">Licensed and Trusted</h3>
                    </div>
                    <p class="text-slate-400 mb-4 text-lg">
                        As a certified company, we uphold transparency, integrity, and fairness in all we do.
                    </p>
                    <div class="absolute bottom-0 left-0 w-full h-1 bg-blue-900 group-hover:h-0 transition-all duration-500 rounded-full"></div>
                </div>
            </div>
            <div class="container md:mt-24 mt-16">
                <?php
                // include "$base_dir/jobNumbers.php";
                ?>
            </div>
        </div>
    </div> -->
    <!-- <div class="container-fluid md:mt-24 mt-16">
        <div class="container">
            <div class="flex flex-col items-center py-12">

                <h1 class="text-3xl font-bold text-blue-700 mb-4 dark:text-white ">Our Mission</h1>

                <p class="text-slate-400 text-center text-lg">Our mission is to help professionals reach their career goals. Simultaneously, we support businesses in building proffessional teams by connecting them with the most suitable candidates. With a personalized approach, we ensure that both individuals and organizations can flourish, creating a motivated and effective workforce that contributes to success and growth. Whether you're aiming for the next milestone in your career or searching for exceptional talent to enhance your team, we're dedicated to assisting you throughout the entire process.

                </p>
            </div>

            <div class="flex flex-wrap justify-center gap-6 p-6">
                <div class="bg-white rounded-lg shadow-lg p-8 w-96 relative group transform transition-transform duration-500 hover:-translate-y-2">
                    <div class="flex items-center mb-5">
                        <i data-feather="award" class="h-10 text-blue-900 me-3"></i>
                        <h3 class="text-xl font-bold text-gray-900">Our Core Values</h3>
                    </div>
                    <hr class="border-t-2 border-blue-100 mb-5">
                    <ul class="list-none text-gray-700 leading-relaxed text-lg">
                        <li class="flex mb-2">
                            <i class="uil uil-rocket text-blue-600 text-xl me-2"></i>
                            <span><b>Empowerment:</b> We’re here to inspire confidence and open doors.</span>
                        </li>
                        <li class="flex mb-2">
                            <i class="uil uil-shield-check text-blue-600 text-xl me-2"></i>
                            <span><b>Integrity:</b> Honesty and fairness guide our every decision.</span>
                        </li>
                        <li class="flex mb-2">
                            <i class="uil uil-users-alt text-purple-600 text-xl me-2"></i>
                            <span><b>Diversity:</b> We celebrate different perspectives and believe in everyone.</span>
                        </li>
                        <li class="flex">
                            <i class="uil uil-trophy text-yellow-500 text-xl me-2"></i>
                            <span><b>Excellence:</b> We deliver results that exceed expectations.</span>
                        </li>
                    </ul>
                    <div class="absolute bottom-0 left-0 w-full h-1 bg-blue-900 group-hover:h-0 transition-all duration-500 rounded-full"></div>
                </div>

                <div class="bg-white rounded-lg shadow-lg p-8 w-96 relative group transform transition-transform duration-500 hover:-translate-y-2">
                    <div class="flex items-center mb-5">
                        <i data-feather="navigation" class="h-10 text-blue-900 me-3"></i>
                        <h3 class="text-xl font-bold text-gray-900">Your Journey Starts Here</h3>
                    </div>
                    <hr class="border-t-2 border-blue-100 mb-5">
                    <p class="text-gray-700 text-lg leading-relaxed mb-5">
                        <b>Jobs Admire</b> is more than just a recruitment agency—it’s your partner in creating a better future. Whether you’re taking your first career step, making a bold change, or expanding your company, we are here to support you with expertise and care. <br><br>
                        Take the first step today. With <b>Jobs Admire</b>, your goals aren’t just dreams—they’re within reach.
                    </p>
                    <a href="services" class="block text-center bg-blue-900 text-white font-semibold py-2 px-4 rounded-lg hover:bg-blue-950 transition-all duration-300">
                        Learn More
                    </a>
                    <div class="absolute bottom-0 left-0 w-full h-1 bg-blue-900 group-hover:h-0 transition-all duration-500 rounded-full"></div>
                </div>
            </div>

        </div>
    </div> -->
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
$hero_content = ob_get_clean();
include "$base_dir/base.php";
include "$base_dir/quick-job-apply.php";

?>