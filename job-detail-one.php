<?php
$base_dir = __DIR__ . '/Base';
$static_url = './assets'; // Ensure this is the correct path

// Include the common navlink content
ob_start();
include "$base_dir/header.php"; // This file contains the shared navlink content
$navlink_content = ob_get_clean(); // Capture the navlink content
$page = 'job-detail-one';
$jobId = isset($_GET['id']) ? $_GET['id'] : null;

if ($jobId) {
    // API endpoint with dynamic job ID
    $apiUrl = "https://crm2.techadmire.agency/api/get-job-detail?id=" . $jobId;

    // Fetch data using file_get_contents or cURL
    $response = file_get_contents($apiUrl);
    if ($response === false) {
        die("Failed to fetch job details.");
    }

    $jobData = json_decode($response, true);
    if (!$jobData || $jobData['status'] !== 200) {
        die("Invalid job details or API error.");
    }

    // Access job data
    $jobDetails = $jobData['data'];
} else {
    die("No job ID provided.");
}
// Optionally define the Hero block content
ob_start();
?>

<!-- Start Hero -->
<section class="mt-32 relative table w-full py-36 bg-[url('../../<?php echo $static_url; ?>/images/hero/bg.jpg')] bg-top bg-no-repeat bg-cover">
    <div class="absolute inset-0 bg-blue-950/90"></div>
    <div class="container">
        <div class="grid grid-cols-1 text-center mt-10">
            <h1 class="md:text-3xl text-2xl md:leading-snug tracking-wide leading-snug font-medium text-white">
                <?php echo $jobDetails['title']; ?>

            </h1>

        </div><!--end grid-->
    </div><!--end container-->

    <div class="absolute text-center z-10 bottom-5 start-0 end-0 mx-3">
        <ul class="breadcrumb tracking-[0.5px] breadcrumb-light mb-0 inline-block">
            <li class="inline breadcrumb-item text-[15px] font-semibold duration-500 ease-in-out text-white/50 hover:text-white"><a href="index">Job Admire</a></li>
            <li class="inline breadcrumb-item text-[15px] font-semibold duration-500 ease-in-out text-white/50 hover:text-white"><a href="jobs-grid.php">Jobs</a></li>
            <li class="inline breadcrumb-item text-[15px] font-semibold duration-500 ease-in-out text-white" aria-current="page">Job Detail</li>
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
<!-- Start -->
<section class="relative md:py-24 py-16">
    <div class="container">
        <!-- <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px]">
            <div class="lg:col-span-4 md:col-span-6">
                <div class="shadow dark:shadow-gray-700 rounded-md bg-white dark:bg-slate-900 sticky top-20">
                    <div class="p-6">
                        <h5 class="text-lg font-semibold">Job Information</h5>
                    </div>
                    <div class="p-6 border-t border-slate-100 dark:border-t-gray-700">
                        <ul class="list-none">
                            <li class="flex items-center">
                                <i data-feather="user-check" class="size-5"></i>

                                <div class="ms-4">
                                    <p class="font-medium">Employee Type:</p>
                                    <span class="text-emerald-600 font-medium text-sm">
                                        <?php echo $jobDetails['job_type']; ?>
                                    </span>
                                </div>
                            </li>

                            <li class="flex items-center mt-3">
                                <i data-feather="map-pin" class="size-5"></i>

                                <div class="ms-4">
                                    <p class="font-medium">Location:</p>
                                    <span class="text-emerald-600 font-medium text-sm">
                                        <?php echo $jobDetails['location']; ?>

                                    </span>
                                </div>
                            </li>



                            <li class="flex items-center mt-3">
                                <div class="w-2 h-2 mr-3">
                                    <i data-feather="book" class="size-5"></i>
                                </div>

                                <div class="ms-4">
                                    <p class="font-medium">Address:</p>
                                    <span class="text-emerald-600 font-medium text-sm">
                                        <?php echo $jobDetails['address']; ?>

                                    </span>
                                </div>
                            </li>

                            <li class="flex items-center mt-3">
                                <i data-feather="dollar-sign" class="size-5"></i>

                                <div class="ms-4">
                                    <p class="font-medium">Salary:</p>
                                    <span class="text-emerald-600 font-medium text-sm">
                                        <?php echo $jobDetails['currency'] . ' ' . $jobDetails['salary_start'] . ' - ' . $jobDetails['currency'] . ' ' . $jobDetails['salary_end']; ?>
                                    </span>
                                </div>
                            </li>

                            <li class="flex items-center mt-3">
                                <i data-feather="clock" class="size-5"></i>

                                <div class="ms-4">
                                    <p class="font-medium">Date posted:</p>
                                    <span class="text-emerald-600 font-medium text-sm">
                                        <?php echo htmlspecialchars($jobDetails['job_posted'], ENT_QUOTES, 'UTF-8'); ?>

                                    </span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-8 md:col-span-6 text-center md:!text-left ">
                <h5 class="text-lg font-semibold">Job Description:</h5>

                <p class="text-slate-400 max-w-xl text-lg list-disc">
                    <?php echo htmlspecialchars_decode($jobDetails['description']); ?>

                </p>

                <h5 class="text-lg font-semibold mt-6">Responsibilities and Duties: </h5>
                <p class="text-slate-400 max-w-xl text-lg list-none">
                    <?php echo htmlspecialchars_decode($jobDetails['requirement']); ?>
                </p>


                <div class="mt-5">
                    <a href="job-apply.php?job_id=<?php echo $_GET['id']; ?>" class="btn rounded-md bg-emerald-600 hover:bg-emerald-700 border-emerald-600 hover:border-emerald-700 text-white md:ms-2 w-full md:w-auto">Apply Now</a>
                </div>
            </div>
        </div> -->

        <div class="grid md:grid-cols-12 grid-cols-1 gap-6">
            <!-- Job Information Section -->
            <div class="lg:col-span-8 md:col-span-6">
                <div class="shadow-lg rounded-md p-6 border">
                    <h2 class="text-2xl font-semibold text-center">We are looking for a <?php echo $jobDetails['title']; ?> in <?php echo $jobDetails['location']; ?></h2>

                    <div class="grid grid-cols-2 gap-4 mt-4">
                        <div class="flex items-center"><i data-feather="hash" class="size-5"></i> <span class="ml-2">Ad Number: <?php echo $_GET['id']; ?></span></div>
                        <div class="flex items-center"><i data-feather="map-pin" class="size-5"></i> <span class="ml-2">Location: <?php echo $jobDetails['location']; ?></span></div>
                        <div class="flex items-center"><i data-feather="users" class="size-5"></i> <span class="ml-2">Gender: Woman</span></div>
                        <div class="flex items-center"><i data-feather="calendar" class="size-5"></i> <span class="ml-2">Age Range: 25 - 45</span></div>
                        <div class="flex items-center"><i data-feather="briefcase" class="size-5"></i> <span class="ml-2">Position: <?php echo $jobDetails['title']; ?></span></div>
                        <div class="flex items-center"><i data-feather="dollar-sign" class="size-5"></i> <span class="ml-2">Salary: <?php echo $jobDetails['currency'] . ' ' . $jobDetails['salary_start'] . ' - ' . $jobDetails['currency'] . ' ' . $jobDetails['salary_end']; ?></span></div>
                    </div>
                </div>

                <div class="shadow-lg rounded-md p-6 border mt-6">
                    <h3 class="text-xl font-semibold">Job Description</h3>
                    <ul class="mt-2 list-disc pl-5">
                        <?php echo htmlspecialchars_decode($jobDetails['description']); ?>

                    </ul>
                </div>

                <div class="shadow-lg rounded-md p-6 border mt-6">
                    <h3 class="text-xl font-semibold">General Qualifications</h3>
                    <ul class="mt-2 list-disc pl-5">
                        <?php echo htmlspecialchars_decode($jobDetails['requirement']); ?>

                    </ul>
                </div>
                <br>
                <!-- <div class="flex justify-end">
                    <a href="job-apply.php?job_id=<?php echo $_GET['id']; ?>"
                        class="btn rounded-md bg-blue-900 hover:bg-blue-950 border-blue-900 hover:border-blue-950 text-white md:ms-2 w-full md:w-auto">
                        Apply Now
                    </a>
                </div> -->




            </div>

            <!-- Apply Form Section -->
            <div class="lg:col-span-4 md:col-span-6">
                <div class="shadow-lg rounded-md p-6 border">
                    <h3 class="text-xl font-semibold text-center">Job application form</h3>
                    <p class="text-sm text-gray-600 text-center">You can also apply for the job here by filling this form.</p>
                    <form class="mt-4" enctype="multipart/form-data" onsubmit="save(event)">
                        <div class="grid grid-cols-1">
                            <!-- Job Categories -->
                            <div class="mb-4 text-start">
                                <!-- <label for="job" class="font-semibold">Job</label> -->
                                <select name="job" id="job" class="form-select form-input border border-slate-100 dark:border-slate-800 mt-1">
                                    <option value="WD">Select</option>

                                </select>
                            </div>
                            <!-- Name -->
                            <div class="mb-4 text-start">
                                <!-- <label class="font-semibold" for="RegisterName">Your Name:</label> -->
                                <input id="RegisterName" name="name" type="text" class="form-input w-full p-2 border rounded-md mb-2" placeholder="Harry">
                            </div>

                            <!-- Email -->
                            <div class="mb-4 text-start">
                                <!-- <label class="font-semibold" for="LoginEmail">Email Address:</label> -->
                                <input id="LoginEmail" name="email" type="email" class="form-input border border-slate-100 dark:border-slate-800 mt-1" placeholder="name@example.com">
                            </div>

                            <!-- Phone -->
                            <div class="mb-4 text-start">
                                <!-- <label class="font-semibold" for="PhoneNo">Phone No.:</label> -->
                                <input id="PhoneNo" name="phone" type="number" class="form-input border border-slate-100 dark:border-slate-800 mt-1" placeholder="+458 854-8965">
                            </div>
                            <!-- Location -->
                            <div class="mb-4 text-start">
                                <!-- <label for="statename" class="font-semibold">City:</label> -->
                                <input id="statename" name="city" type="text" class="form-input border border-slate-100 dark:border-slate-800 mt-1" placeholder="Antalya">

                            </div>

                            <!-- Cover Letter -->
                            <div class="mb-2 text-start">
                                <!-- <label for="comments" class="font-semibold">Cover Letter:</label> -->
                                <textarea name="cover_letter" id="comments" class="form-input border border-slate-100 dark:border-slate-800 mt-1 textarea" placeholder="Message :"></textarea>
                            </div>

                            <!-- Upload Resume -->
                            <div class="mb-4 text-start">
                                <label class="font-semibold" for="multiple_files">Upload Resume:</label>
                                <input name="resume" id="multiple_files" class="relative form-input border border-slate-100 dark:border-slate-800 mt-1" type="file">
                            </div>

                            <!-- Submit Button -->
                            <div>
                                <button type="submit" id="submit" name="send" class="w-full bg-blue-900 text-white p-2 rounded-md hover:bg-blue-950">Apply</button>

                                <!-- <button type="submit" id="submit" name="send" class="btn rounded-md bg-blue-900 hover:bg-blue-950 border-blue-900 hover:border-blue-950 text-white">Send</button> -->
                            </div>
                        </div>
                    </form>

                    <!-- <form class="">
                        <input type="text" placeholder="Name" class="w-full p-2 border rounded-md mb-2">
                        <input type="text" placeholder="My Surname" class="w-full p-2 border rounded-md mb-2">
                        <input type="text" placeholder="Gender" class="w-full p-2 border rounded-md mb-2">
                        <input type="text" placeholder="Nationality (leave blank if local)" class="w-full p-2 border rounded-md mb-2">
                        <input type="text" placeholder="Select City" class="w-full p-2 border rounded-md mb-2">
                        <input type="text" placeholder="Select District" class="w-full p-2 border rounded-md mb-2">
                        <input type="email" placeholder="Email" class="w-full p-2 border rounded-md mb-2">
                        <input type="text" placeholder="Mobile Phone" class="w-full p-2 border rounded-md mb-2">
                        <input type="password" placeholder="Your password" class="w-full p-2 border rounded-md mb-2">
                        <button class="w-full bg-emerald-600 text-white p-2 rounded-md hover:bg-emerald-700">Become a Member and Apply</button>
                    </form> -->
                    <p class="text-center text-sm mt-2">If you have previously left a CV / applied, <a href="https://crm2.techadmire.agency/login" class="text-blue-500">Login</a> or <a href="signup" class="text-blue-500">Sign up</a></p>
                </div>

                <div class="text-center mt-4">
                    <p class="text-sm">Contact Us:</p>
                    <a href="tel:+9050112403406">
                        <button href="tel:+9050112403406" class="flex items-center justify-center w-full bg-green-500 text-white p-2 rounded-md my-1">
                            <i data-feather="message-circle" class="size-5 mr-2"></i> Whatsapp
                        </button>
                    </a>
                    <a href="mailto:Info@jobsadmire.com">
                        <button class="flex items-center justify-center w-full bg-blue-500 text-white p-2 rounded-md my-1">
                            <i data-feather="send" class="size-5 mr-2"></i> Mail
                        </button>
                    </a>
                </div>
            </div>
        </div>

    </div>

    <div class="container lg:mt-24 mt-16">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 md:text-[26px] md:leading-normal text-2xl leading-normal font-semibold">Related Jobs</h3>

            <p class="text-slate-400 dark:text-slate-300 max-w-xl mx-auto">Search all the open positions on the web. Get your own personalized salary estimate. Read reviews on over 30+ companies worldwide.</p>
        </div><!--end grid-->

        <!-- <div class="grid lg:grid-cols-3 md:grid-cols-2 mt-8 gap-[30px]"> -->

        <!-- jobD1 code  -->
        <?php
        include "$base_dir/jobD1.php";
        ?>

        <!-- </div> -->
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


<script>
    const loadJobs = async () => {
        try {
            const response = await fetch('https://crm2.techadmire.agency/api/get-jobs');
            if (!response.ok) {
                throw new Error('Failed to fetch jobs');
            }
            const json = await response.json();
            if (json.status === 200 && Array.isArray(json.data)) {
                const jobs = json.data;
                const jobDropdown = document.getElementById('job');
                const urlParams = new URLSearchParams(window.location.search);
                const selectedJobId = urlParams.get('job_id');
                jobs.forEach((job) => {
                    const option = document.createElement('option');
                    option.value = job.job_id;
                    option.textContent = job.title;
                    if (job.job_id == selectedJobId) {
                        option.selected = true;
                    }
                    jobDropdown.appendChild(option);
                });
            } else {
                console.error('Invalid API response structure');
            }
        } catch (error) {
            console.error('Error loading jobs:', error);
        }
    };
    const save = async (event) => {
        event.preventDefault();
        const form = event.target.closest('form');
        const formData = new FormData(form);
        try {
            const response = await fetch('https://crm2.techadmire.agency/api/job-application-post', {
                method: 'POST',
                body: formData,
            });
            if (response.ok) {
                const result = await response.json();
                alert('Application submitted successfully!');
            } else {
                const errorData = await response.json();
                console.error('Error:', errorData);
                alert('Failed to submit the application.');
            }
        } catch (error) {
            console.error('Error:', error);
            alert('An error occurred while submitting the application.');
        }
    };
    document.addEventListener('DOMContentLoaded', loadJobs);

</script>