<?php
header('Content-Type: application/json');
$api_url = 'https://crm2.techadmire.agency/api/get-jobs';
$jobs1 = [];
try {
    if (isset($_GET['search'])) {
        $search_query = [];
        if (!empty($_GET['name'])) {
            $search_keyword = urlencode($_GET['name']);
            $search_query[] = "search_keyword=$search_keyword";
        }
        if (!empty($_GET['choices-location'])) {
            $location = urlencode($_GET['choices-location']);
            $search_query[] = "location=$location";
        }
        if (!empty($_GET['choices-type'])) {
            $job_type = ($_GET['choices-type'] == 1) ? 'full_time' : 'part_time';
            $search_query[] = "job_type=$job_type";
        }
        if (!empty($search_query)) {
            $api_url = 'https://crm2.techadmire.agency/api/search-jobs?' . implode('&', $search_query);
        }
    }
    $response = file_get_contents($api_url);
    $jobsData = json_decode($response, true);
    $jobs1 = isset($jobsData['data']) ? $jobsData['data'] : [];
    echo json_encode(['status' => 'success', 'data' => $jobs1]);
} catch (Exception $e) {
    echo json_encode(['status' => 'error', 'message' => $e->getMessage()]);
}
?>
