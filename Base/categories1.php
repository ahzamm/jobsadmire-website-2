<?php
// $categories1 = [
//     [
//         'icon' => 'uil uil-brackets-curly',
//         'title1' => 'Software',
//         'title2' => 'Development',
//         'job' => '74 Jobs',
//     ],
//     [
//         'icon' => 'uil uil-shield-check',
//         'title1' => 'Cybersecurity',
//         'title2' => '',
//         'job' => '20 Jobs',
//     ],
//     [
//         'icon' => 'uil uil-palette',
//         'title1' => 'UI/UX',
//         'title2' => '',
//         'job' => '35 Jobs',
//     ],
//     [
//         'icon' => 'uil uil-process',
//         'title1' => 'DevOps',
//         'title2' => '',
//         'job' => '46 Jobs',
//     ],
//     [
//         'icon' => 'uil uil-brain',
//         'title1' => 'AI &',
//         'title2' => 'Machine Learning',
//         'job' => '60 Jobs',
//     ]
// ];
$api_url = 'https://crm2.techadmire.agency/api/get-categories';
$categories1 = []; // Initialize the array
try {
    $response = file_get_contents($api_url); // Fetch the API response
    $jobsData = json_decode($response, true); // Decode JSON response into an array

    if (isset($jobsData['data'])) {
        $categories1 = $jobsData['data']; // Assign API data to $categories1
        $categories1 = array_slice($categories1, 0, 5); // Limit to 5 categories
    }
} catch (Exception $e) {
    // Handle errors (e.g., API not reachable)
    echo "Error fetching jobs: " . $e->getMessage();
}

?>
<style>
@keyframes fadeUp {
    0% {
        opacity: 0;
        transform: translateY(20px);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Items are initially visible */
.fade-up-hidden {
    opacity: 1;
    transform: translateY(0);
}

/* Animation applies when active */
.fade-up-active {
    animation: fadeUp 0.8s ease-out;
}
</style>
<div class="grid grid-cols-1 pb-8 text-center">
    <!-- <a href="job-categories.php"> -->
    <h3 class="mb-4 md:text-[26px] md:leading-normal text-2xl leading-normal font-semibold">Popular Categories</h3>
    <!-- </a> -->
    <p class="text-slate-400 max-w-xl mx-auto text-lg">From Hotel Management, Receptionist to IT Manager, every professional is welcome to look at the list of job opportunities, salary estimates according to the role you're looking for & learn by reading reviews of companies worldwide.</p>
</div><!--end grid-->
<div id="categories-section" class="grid lg:grid-cols-5 md:grid-cols-3 sm:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">
    <?php foreach ($categories1 as $index => $item): ?>
        <a href="jobs-grid?category_id=<?php echo $item['id']; ?>"
            class="group px-3 py-10 rounded-full shadow dark:shadow-gray-700 hover:shadow-emerald-600/10 
            dark:hover:shadow-emerald-600/10 text-center bg-white dark:bg-slate-900 hover:bg-emerald-600/5 
            dark:hover:bg-emerald-600/5 transition duration-500 fade-up-hidden"
            style="animation-delay: <?php echo $index * 0.2; ?>s;">
            
            <div class="size-16 bg-emerald-600/5 group-hover:bg-emerald-600 text-emerald-600 
            group-hover:text-white rounded-full text-2xl flex align-middle justify-center items-center 
            shadow-sm dark:shadow-gray-700 transition duration-500 mx-auto">
                <?php
                if ($item['id'] == 8) {
                ?>
                    <i class="dark:text-white uil uil-shield"></i>
                <?php
                } else if ($item['id'] == 5) {
                ?>
                    <i class="dark:text-white uil uil-heartbeat"></i>
                <?php
                } else if ($item['id'] == 2) {
                ?>
                    <i class="dark:text-white uil uil-desktop"></i>
                <?php
                } else if ($item['id'] == 3) {
                ?>
                    <i class="dark:text-white uil uil-plane"></i>
                <?php
                } else if ($item['id'] == 7) {
                ?>
                    <i class="dark:text-white uil uil-wrench"></i>
                <?php
                }
                ?>
            </div>

            <div class="content mt-6 transition duration-500 transform group-hover:scale-105">
                <h3 class="title text-lg font-bold hover:text-emerald-600 transition duration-500"><?php echo $item['title']; ?></h3>
            </div>
        </a>
    <?php endforeach; ?>
</div>



<!--end grid-->


<!-- <script>
    document.getElementById('').onclick = function() {
        const keyword = document.getElementById('job-keyword').value;
        const queryParams = new URLSearchParams();
        if (keyword) queryParams.append('name', keyword);
        queryParams.append('search', 1);
        window.location.href = `jobs-grid?${queryParams.toString()}`;
    };
</script> -->
<script>
document.addEventListener("DOMContentLoaded", function () {
    let elements = document.querySelectorAll("#categories-section a");

    if (elements.length === 0) {
        console.error("No category elements found!");
        return;
    }

    let observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add("fade-up-active");
                entry.target.classList.remove("fade-up-hidden");
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1 });

    elements.forEach(item => {
        observer.observe(item);
    });
});
</script>