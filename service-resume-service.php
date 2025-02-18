<?php
$base_dir = __DIR__ . '/Base';
$static_url = './assets';
ob_start();
include "$base_dir/header.php";
$navlink_content = ob_get_clean();
$page = 'service-detail';
ob_start();
?>

<section class="md:mt-32 relative table w-full py-36 bg-[url('../../<?php echo $static_url; ?>/images/service/resume_services.png')] bg-top bg-no-repeat bg-cover">
    <div class="container">
        <div class="grid grid-cols-1 text-center mt-10">
        </div>
    </div>
</section>
<div class="relative">
    <div class="shape absolute start-0 end-0 sm:-bottom-px -bottom-[2px] overflow-hidden z-1 text-white dark:text-slate-900">
        <svg class="w-full h-auto" viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
        </svg>
    </div>
</div>
<section>
    <div class="mx-auto w-full max-w-7xl px-5 py-12 md:px-6 md:py-12">
        <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[120px]">
            <div class="lg:col-span-7 md:col-span-7">
                <h2 class="mb-8 text-3xl font-bold md:text-5xl">Resume Service</h2>
                <p class="text-sm sm:text-base">
                    It’s time for you to make an impactful impression on employers with a professionally designed resume. A CV is not just your work history or a list of your academic certificates.
                    The CV should be geared towards meeting the needs of the employer. Therefore, you must demonstrate how your attributes, technical, and transferable skills will help you
                    successfully perform the job you want. We tailor each resume to align with your goals and the expectations of your desired industry.
                </p>
                <br>
                <div class="my-8 h-px w-full bg-black"></div>
                <div class="grid gap-8 md:grid-cols-2 md:gap-4">
                    <div class="flex flex-col gap-4 rounded-md border border-solid bg-gray-100 p-6 md:p-4">
                        <p class="text-sm">
                            We struggled to find skilled workers until we partnered with Jobs Admire. Their platform provided us with reliable candidates who fit our needs perfectly. It has improved
                            our productivity and efficiency significantly.
                        </p>
                        <div class="flex items-center gap-2 sm:gap-x-4">
                            <div class="flex items-center gap-x-2">
                                <img src="<?php echo $static_url; ?>/images/testi/11.jpg" alt="" class="h-8 w-8 rounded-full object-cover" />
                                <p class="text-sm font-semibold sm:text-base">
                                    Mehmet K.
                                </p>
                            </div>
                            <div class="h-5 w-px bg-gray-300"></div>
                            <div class="flex items-center gap-x-2">
                                <p class="text-sm font-semibold sm:text-base">5.0</p>
                                <div class="flex text-yellow-500">
                                    <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08l4.15-2.5z">
                                        </path>
                                    </svg>
                                    <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08l4.15-2.5z">
                                        </path>
                                    </svg>
                                    <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08l4.15-2.5z">
                                        </path>
                                    </svg>
                                    <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08l4.15-2.5z">
                                        </path>
                                    </svg>
                                    <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08l4.15-2.5z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col gap-4 rounded-md border border-solid bg-gray-100 p-6 md:p-4">
                        <p class="text-sm">
                            Jobs Admire helped me find a stable job in a well-known factory. The process was smooth, and their team guided me at every step. Now, I have a secure income and a better
                            future for my family. Highly recommend!
                        </p>
                        <div class="flex items-center gap-2 sm:gap-x-4">
                            <div class="flex items-center gap-x-2">
                                <img src="<?php echo $static_url; ?>/images/testi/12.jpg" alt="" class="h-8 w-8 rounded-full object-cover" />
                                <p class="text-sm font-semibold sm:text-base">
                                    Ahmed R.
                                </p>
                            </div>
                            <div class="h-5 w-px bg-gray-300"></div>
                            <div class="flex items-center gap-x-2">
                                <p class="text-sm font-semibold sm:text-base">5.0</p>
                                <div class="flex text-yellow-500">
                                    <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08l4.15-2.5z">
                                        </path>
                                    </svg>
                                    <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08l4.15-2.5z">
                                        </path>
                                    </svg>
                                    <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08l4.15-2.5z">
                                        </path>
                                    </svg>
                                    <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08l4.15-2.5z">
                                        </path>
                                    </svg>
                                    <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08l4.15-2.5z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-5 md:col-span-5">
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
    <div class="mx-auto w-full max-w-7xl px-5 py-16 md:px-10 md:py-20">
        <h2 class="mb-8 text-3xl font-bold md:text-5xl md:mb-10">
            Crafting Resumes That Get You Hired
        </h2>
        <p class="mb-8 max-w-lg text-sm text-gray-500 sm:text-base md:mb-16">
            Your resume is more than just a document—it’s your first impression. At JobsAdmire, we create professional, ATS-optimized resumes that highlight your strengths, experience, and
            achievements, ensuring you stand out in today’s competitive job market.
        </p>
        <div class="grid gap-8 md:grid-cols-2 md:gap-10">
            <img src="<?php echo $static_url; ?>/images/service/resume/2.jpg" alt="" class="inline-block h-full w-full rounded-2xl object-cover shadow" />
            <div class="flex flex-col gap-5 rounded-2xl border border-solid border-black p-10 sm:p-12">
                <h2 class="text-3xl font-bold md:text-5xl">Tailored for Your Career Success</h2>
                <p class="text-sm text-gray-500 sm:text-base">
                    Whether you're a recent graduate, mid-level professional, or executive leader, our expert writers craft customized resumes that align with your career goals.
                    With a modern design, keyword optimization, and compelling content, we help you land interviews and take the next step in your career.

                    <br />
                    <br />
                    Tailored for your career success, we create resumes that highlight your skills, experience, and achievements. Whether you're a recent graduate, mid-level professional, or executive
                    leader, our expert writers craft personalized documents to align with your goals. With modern designs and keyword optimization, we ensure your resume stands out to hiring managers
                    and ATS systems. Our compelling content showcases your strengths, increasing your chances of landing interviews. Let us help you take the next step in your career with confidence.
                </p>
                <a href="/jobsadmire-website-2/cv-maker.php">
                    <button class="text-primary"><strong>Create Your Resume</strong></button>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="relative md:py-24 py-16">
    <div class="container py-8">
        <h2 class="mb-8 text-3xl font-bold md:text-5xl md:mb-10">
            Comprehensive Resume Enhancement Services
        </h2>
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-4">
            <div class="lg:col-span-6 text-lg">

                <ul class="list-none space-y-4">
                    <li class="flex items-start gap-3 p-4 rounded-lg border border-gray-300 shadow-sm transition-transform transform hover:scale-105 hover:shadow-md">
                        <span class="text-blue-500 text-lg">✅</span>
                        <div class="flex flex-col">
                            <span class="text-gray-700 font-medium">Resume Consultation:</span>
                            <p class="text-gray-500 text-sm">Our team will conduct in-depth discussions with you to understand your career objectives, skills, and experiences.</p>
                        </div>
                    </li>
                    <li class="flex items-start gap-3 p-4 rounded-lg border border-gray-300 shadow-sm transition-transform transform hover:scale-105 hover:shadow-md">
                        <span class="text-blue-500 text-lg">📝</span>
                        <div class="flex flex-col">
                            <span class="text-gray-700 font-medium">Custom Resume Writing:</span>
                            <p class="text-gray-500 text-sm">We help you get tailored resumes for specific industries and job roles.</p>
                        </div>
                    </li>
                    <li class="flex items-start gap-3 p-4 rounded-lg border border-gray-300 shadow-sm transition-transform transform hover:scale-105 hover:shadow-md">
                        <span class="text-blue-500 text-lg">🎨</span>
                        <div class="flex flex-col">
                            <span class="text-gray-700 font-medium">Professional Formatting:</span>
                            <p class="text-gray-500 text-sm">Visually appealing resumes designed to maximize visibility.</p>
                        </div>
                    </li>
                    <li class="flex items-start gap-3 p-4 rounded-lg border border-gray-300 shadow-sm transition-transform transform hover:scale-105 hover:shadow-md">
                        <span class="text-blue-500 text-lg">🔍</span>
                        <div class="flex flex-col">
                            <span class="text-gray-700 font-medium">Highlight Key Skills:</span>
                            <p class="text-gray-500 text-sm">Emphasize transferable skills and core competencies to align with employer requirements.</p>
                        </div>
                    </li>
                    <li class="flex items-start gap-3 p-4 rounded-lg border border-gray-300 shadow-sm transition-transform transform hover:scale-105 hover:shadow-md">
                        <span class="text-blue-500 text-lg">✉️</span>
                        <div class="flex flex-col">
                            <span class="text-gray-700 font-medium">Cover Letter Creation:</span>
                            <p class="text-gray-500 text-sm">Write persuasive and customized cover letters to complement your resume.</p>
                        </div>
                    </li>
                </ul>

            </div>
            <div class="lg:col-span-6 flex justify-center items-center">
                <div class="relative overflow-hidden rounded-lg shadow-md">
                    <img src="<?php echo $static_url; ?>/images/service/resume/3.jpg" alt="Company Image" class="w-full h-auto object-cover">
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid md:mt-20 mt-12">
        <div class="container">
            <?php
            include "$base_dir/exploreJob.php";
            ?>
        </div>
    </div>
</section>
<?php
$hero_content = ob_get_clean();

include "$base_dir/base.php";
?>
