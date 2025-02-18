<?php
$base_dir = __DIR__ . '/Base';
$env = parse_ini_file(__DIR__ . '/.env');
$static_url = './assets';
if ($env['APP_ENV'] === 'development') {
    $backend_url = $env['BACKEND_URL_DEV'];
} else {
    $backend_url = $env['BACKEND_URL_PROD'];
}
ob_start();
include "$base_dir/header.php";
$navlink_content = ob_get_clean();
$page = 'job-grid';
ob_start();

?>
<style>
    #loader {
        display: none;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 9999;
    }

    #loader img {
        width: 100px;
        height: 100px;
    }

    body.loading {
        overflow: hidden;
    }

    body.loading::before {
        content: '';
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        z-index: 9998;
    }
</style>
<section class="md:mt-32 relative table w-full py-36 bg-[url('../../<?php echo $static_url; ?>/images/hero/bg.jpg')] bg-top bg-no-repeat bg-cover">
    <div class="absolute inset-0 bg-blue-950/90"></div>
    <div class="container">
        <div class="grid grid-cols-1 text-center mt-10">
            <h3 class="md:text-3xl text-2xl md:leading-snug tracking-wide leading-snug font-medium text-white">Available Jobs</h3>
        </div><!--end grid-->
    </div><!--end container-->
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
<section class="relative -mt-[42px] md:pb-24 pb-16">
    <div class="container z-1">
        <div class="d-flex" id="reserve-form">
            <div class="md:w-5/6 mx-auto">
                <div class="lg:col-span-10">
                    <div class="bg-white dark:bg-slate-900 border-0 shadow rounded-md p-3">
                        <form action="" method="GET">
                            <div class="registration-form text-dark text-start">
                                <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 lg:gap-0 gap-6">
                                    <!-- Keyword Input -->
                                    <div class="filter-search-form relative filter-border">
                                        <i class="uil uil-briefcase-alt icons" style="color: #1e3a8a;"></i>
                                        <input
                                            name="name"
                                            type="text"
                                            id="job-keyword"
                                            class="form-input filter-input-box bg-gray-50 dark:bg-slate-800 border-0"
                                            placeholder="Search your Keywords"
                                            value="<?php echo isset($_GET['name']) ? htmlspecialchars($_GET['name']) : ''; ?>">
                                    </div>

                                    <!-- Location Input -->
                                    <div class="filter-search-form relative filter-border">
                                        <i class="uil uil-map-marker icons" style="color: #1e3a8a;"></i>
                                        <input
                                            name="choices-location-not-type"
                                            type="text"
                                            id="location-keyword"
                                            class="form-input filter-input-box bg-gray-50 dark:bg-slate-800 border-0"
                                            placeholder="Location"
                                            value="<?php echo isset($_GET['choices-location-not-type']) ? htmlspecialchars($_GET['choices-location-not-type']) : ''; ?>">
                                    </div>

                                    <div class="filter-search-form relative filter-border">
                                        <i class="uil uil-briefcase-alt icons" style="color: #1e3a8a;"></i>
                                        <select

                                            class="form-select"
                                            data-trigger
                                            name="choices-location"
                                            id="choices-location"
                                            aria-label="Default select example">
                                            <option value="">Select Job Type</option>
                                            <option value="full_time" <?php echo (isset($_GET['choices-type']) && $_GET['choices-type'] == 'full_time') ? 'selected' : ''; ?>>Full Time</option>
                                            <option value="part_time" <?php echo (isset($_GET['choices-type']) && $_GET['choices-type'] == 'part_time') ? 'selected' : ''; ?>>Part Time</option>
                                        </select>
                                    </div>

                                    <!-- Submit Button -->
                                    <input
                                        type="submit"
                                        id="search"
                                        name="search"
                                        style="height: 60px;"
                                        class="btn bg-blue-900 hover:bg-blue-950 border-blue-900 hover:border-blue-950 text-white searchbtn submit-btn w-100"
                                        value="Search">
                                </div>
                            </div>
                        </form>
                    </div>
                </div><!--ed col-->
            </div>
        </div><!--end grid-->
    </div><!--end container-->

    <div class="container mt-10">
        <div id="loader" style="display: none;">
            <img src="<?php echo $static_url; ?>/images/loader.gif" alt="Loading...">
        </div>
        <div id="job-results" class="grid lg:grid-cols-3 md:grid-cols-2 gap-[30px]">

        </div>
        <div id="error">

        </div>

    </div>
    <div class="container md:mt-24 mt-16">
        <div class="grid grid-cols-1 text-center">
            <h3 class="mb-4 md:text-[26px] md:leading-normal text-2xl leading-normal font-semibold">What Makes Job Admire Stand Out?</h3>

            <p class="text-slate-400 max-w-xl mx-auto text-lg">Job Admire connects you to diverse opportunities in IT and tourism, with tailored insights and over 100 global company reviews to guide your career journey.</p>
        </div>
        <!-- features code  -->
        <?php
        include "$base_dir/features.php";
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
$hero_content = ob_get_clean();

include "$base_dir/base.php";
include "$base_dir/quick-job-apply.php";

?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        search_jobs();
        $('#search').on('click', function(e) {
            e.preventDefault();
            search_jobs();
        });
    });

    function search_jobs() {
        const urlParams = new URLSearchParams(window.location.search);
        const categoryId = urlParams.get('category_id');
        const formData = {
            'search_keyword': $('#job-keyword').val(),
            'location': $('#location-keyword').val(),
            'job_type': $('#choices-location').val(),
            'category_id': categoryId
        };

        // Show loader
        $('#loader').show();
        $('#job-results').html(''); // Clear previous results

        $.ajax({
            url: 'https://crm2.techadmire.agency/api/get-jobs',
            method: 'GET',
            data: formData,
            dataType: 'json',
            success: function(response) {
                // Hide loader
                $('#loader').hide();
                $('#error').empty();

                if (response.status === 200 && response.data.length > 0) {
                    var jobs = response.data;
                    let jobHtml = '';

                    jobs.forEach(job => {
                        jobHtml += `
                        <div class="p-4 border border-gray-300 rounded-lg shadow-md">
    <h3 class="text-lg font-semibold text-center">
        We are looking for a <span class="text-blue-600">${job.title}</span> in 
        <span class="">${job.location}</span>
    </h3>
    <div class="grid grid-cols-2 gap-4 mt-4 text-gray-600 dark:text-white text-sm text-center">
        
        <div>
            <p class="font-semibold">Position</p>
            <p>${job.job_type}</p>
        </div>
        <div>
            <p class="font-semibold">Salary /month</p>
            <p>${job.currency} ${job.salary_start} - ${job.salary_end}</p>
        </div>
    </div>
    <hr class="my-4 border-gray-300">
    <div class="flex justify-between items-center text-sm">
        <span class="text-blue-500 flex items-center"><i class="uil uil-check-circle mr-1"></i>Active</span>
        <span class="text-gray-600 flex items-center"><i class="uil uil-map-marker mr-1"></i>${job.location}</span>
        <a href="job-detail-one?id=${job.job_id}" class="text-pink-600 flex items-center">
            Detail<i class="uil uil-angle-right-b ml-1"></i>
        </a>
    </div>
</div>
`;
                    });
                    $('#job-results').html(jobHtml);
                } else {

                    $('#error').html(`
                             <p class="justify-center items-center text-red-500 text-center text-xl">No jobs found.</p>
`);

                }
            },
            error: function() {
                $('#loader').hide();
                $('#error').html('<p>There was an error processing your request.</p>');
            }
        });
    }
</script>