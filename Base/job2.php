<?php
$api_url = 'https://crm2.techadmire.agency/api/get-jobs';
$jobs1 = [];
try {
    if ($api_url) {
        $response = file_get_contents($api_url);
        $jobsData = json_decode($response, true);

        $jobs1 = isset($jobsData['data']) ? $jobsData['data'] : [];
        $jobs1 = array_slice($jobs1, 0, 4);
    } else {
        $jobs1 = [];
    }
} catch (Exception $e) {
    echo "Error fetching jobs: " . $e->getMessage();
}
?>
<div class="grid md:grid-cols-2 mt-8 gap-[30px]">
    <?php foreach ($jobs1 as $item): ?>
        <div class="p-4 border border-gray-300 rounded-lg shadow-md">
            <h3 class="text-lg font-semibold text-center">
                We are looking for a <span class="text-blue-600"><?php echo $item['title']; ?></span> in
                <span class="text-gray-700 dark:text-white"><?php echo $item['location']; ?></span>
            </h3>
            <div class="grid grid-cols-4 gap-4 mt-4 text-gray-600 text-sm text-center dark:text-white">
                <!-- Increase width -->
                <div class="col-span-2">
                    <p class="font-semibold">Salary /month</p>
                    <p><?php echo $item['currency'] . ' ' . $item['salary_start'] . ' - ' . $item['currency'] . ' ' . $item['salary_end']; ?></p>
                </div>

                <!-- Decrease width -->
                <div class="col-span-1">
                    <p class="font-semibold">Position</p>
                    <p><?php echo $item['job_type']; ?></p>
                </div>

                <div class="col-span-1">
                    <div class="size-14 mx-auto flex items-center justify-center bg-white shadow-md rounded-md p-2">
                        <img src="<?php echo $item['logo']; ?>" class="size-8" alt="">
                    </div>
                </div>
            </div>
            <hr class="my-4 border-gray-300">
            <div class="flex justify-between items-center text-sm">
                <span class="text-gray-600 flex items-center"><i class="uil uil-map-marker mr-1"></i><?php echo $item['location']; ?></span>
                <a href="job-detail-one?id=<?php echo $item['job_id']; ?>" class="text-pink-600 flex items-center">
                    Detail<i class="uil uil-angle-right-b ml-1"></i>
                </a>
            </div>
        </div>
    <?php endforeach; ?>
</div>