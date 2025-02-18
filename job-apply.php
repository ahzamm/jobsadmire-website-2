<?php
$base_dir = __DIR__ . '/Base';
$static_url = './assets';
ob_start();
include "$base_dir/header.php";
$navlink_content = ob_get_clean();
$page = 'job-apply';

$api_url = 'https://crm2.techadmire.agency/api/get-jobs';
ob_start();
?>

<!-- Start Hero -->
<section class="relative table w-full py-36 bg-[url('../../<?php echo $static_url; ?>/images/hero/bg.jpg')] bg-top bg-no-repeat bg-cover">
    <div class="absolute inset-0 bg-blue-950/90"></div>
    <div class="container">
        <div class="grid grid-cols-1 text-center mt-10">
            <h1 class="md:text-3xl text-2xl md:leading-snug tracking-wide leading-snug font-medium text-white">Application Form</h1>

        </div><!--end grid-->
    </div><!--end container-->

    <div class="absolute text-center z-10 bottom-5 start-0 end-0 mx-3">
        <ul class="breadcrumb tracking-[0.5px] breadcrumb-light mb-0 inline-block">
            <li class="inline breadcrumb-item text-[15px] font-semibold duration-500 ease-in-out text-white/50 hover:text-white"><a href="index.php">Job Admire</a></li>
            <li class="inline breadcrumb-item text-[15px] font-semibold duration-500 ease-in-out text-white" aria-current="page">Job apply form</li>
        </ul>
    </div>
</section><!--end section-->
<div class="relative">
    <div class="shape absolute start-0 end-0 sm:-bottom-px -bottom-[2px] overflow-hidden z-1 text-slate-50 dark:text-slate-800">
        <svg class="w-full h-auto" viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
        </svg>
    </div>
</div>
<!-- End Hero -->

<!-- Start -->
<section class="relative bg-slate-50 dark:bg-slate-800 lg:py-24 py-16">
    <div class="container">
        <div class="md:flex justify-center">
            <div class="lg:w-2/4 md:w-2/3">
                <div class="p-6 bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-md">
                    <form class="text-start" enctype="multipart/form-data" onsubmit="save(event)">
                        <div class="grid grid-cols-1">
                            <!-- Job Categories -->
                            <div class="mb-4 text-start">
                                <label for="job" class="font-semibold">Job</label>
                                <select name="job" id="job" class="form-select form-input border border-slate-100 dark:border-slate-800 mt-1">
                                    <option value="WD">Select</option>

                                </select>
                            </div>
                            <!-- Name -->
                            <div class="mb-4 text-start">
                                <label class="font-semibold" for="RegisterName">Your Name:</label>
                                <input id="RegisterName" name="name" type="text" class="form-input border border-slate-100 dark:border-slate-800 mt-1" placeholder="Harry">
                            </div>

                            <!-- Email -->
                            <div class="mb-4 text-start">
                                <label class="font-semibold" for="LoginEmail">Email Address:</label>
                                <input id="LoginEmail" name="email" type="email" class="form-input border border-slate-100 dark:border-slate-800 mt-1" placeholder="name@example.com">
                            </div>

                            <!-- Phone -->
                            <div class="mb-4 text-start">
                                <label class="font-semibold" for="PhoneNo">Phone No.:</label>
                                <input id="PhoneNo" name="phone" type="number" class="form-input border border-slate-100 dark:border-slate-800 mt-1" placeholder="+458 854-8965">
                            </div>
                            <!-- Location -->
                            <div class="mb-4 text-start">
                                <label for="statename" class="font-semibold">City:</label>
                                <input id="statename" name="city" type="text" class="form-input border border-slate-100 dark:border-slate-800 mt-1" placeholder="Antalya">

                            </div>

                            <!-- Cover Letter -->
                            <div class="mb-2 text-start">
                                <label for="comments" class="font-semibold">Cover Letter:</label>
                                <textarea name="cover_letter" id="comments" class="form-input border border-slate-100 dark:border-slate-800 mt-1 textarea" placeholder="Message :"></textarea>
                            </div>

                            <!-- Upload Resume -->
                            <div class="mb-4 text-start">
                                <label class="font-semibold" for="multiple_files">Upload Resume:</label>
                                <input name="resume" id="multiple_files" class="relative form-input border border-slate-100 dark:border-slate-800 mt-1" type="file">
                            </div>

                            <!-- Submit Button -->
                            <div>
                                <button type="submit" id="submit" name="send" class="btn rounded-md bg-blue-900 hover:bg-blue-950 border-blue-900 hover:border-blue-950 text-white">Send</button>
                            </div>
                        </div>
                    </form>


                </div>
            </div>
        </div><!--end flex-->
    </div><!--end container-->
</section><!--end section-->
<!-- End -->




<?php
$hero_content = ob_get_clean(); 
include "$base_dir/base.php";
?>

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