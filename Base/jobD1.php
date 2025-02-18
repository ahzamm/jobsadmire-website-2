<?php
$api_url = 'https://crm2.techadmire.agency/api/get-jobs';
$jobs1 = [];
try {
    if ($api_url) {
        $response = file_get_contents($api_url);
        $jobsData = json_decode($response, true);
        $jobs1 = isset($jobsData['data']) ? $jobsData['data'] : [];
    } else {
        $jobs1 = []; 
    }
} catch (Exception $e) {
    echo "Error fetching jobs: " . $e->getMessage();
}

?>
<!-- Owl Carousel CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />

<!-- jQuery (required for Owl Carousel) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Owl Carousel JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<div class="owl-carousel">
    <?php foreach ($jobs1 as $item): ?>
        <div class="p-4 border border-gray-300 rounded-lg shadow-md">
            <h3 class="text-lg font-semibold text-center">
                We are looking for a <span class="text-blue-600"><?php echo $item['title']; ?></span> in 
                <span class="text-gray-700"><?php echo $item['location']; ?></span>
            </h3>
            <div class="grid grid-cols-3 gap-4 mt-4 text-gray-600 text-sm text-center">
                <div>
                    <p class="font-semibold">Salary /month</p>
                    <p><?php echo $item['currency'] . ' ' . $item['salary_start'] . ' - ' . $item['currency'] . ' ' . $item['salary_end']; ?></p>
                </div>
                <div>
                    <p class="font-semibold">Position</p>
                    <p><?php echo $item['job_type']; ?></p>
                </div>
                <div>
                    <div class="size-14 mx-auto flex items-center justify-center shadow-md rounded-md p-2">
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



<script>
    $(document).ready(function() {
        $(".owl-carousel").owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            center: true,
            navText: [
                "<i class='fa fa-angle-left'></i>",
                "<i class='fa fa-angle-right'></i>"
            ],
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 3
                }
            }
        });
    });
</script>

<style>
    html {
        scroll-behavior: smooth;
    }

    body {
        font-family: 'Noto Sans HK', sans-serif;
        background: #fff;
    }

    .slider {
        margin-bottom: 30px;
        position: relative;
    }

    .slider .owl-item.active.center .slider-card {
        transform: scale(1.15);
        opacity: 1;
        background: rgb(108, 151, 190);
        background: -webkit-linear-gradient(to bottom, rgb(26, 131, 201), rgb(108, 151, 190));
        background: linear-gradient(to bottom, rgb(26, 131, 201), rgb(108, 151, 190));
        color: #fff;
    }

    .slider-card {
        background: #fff;
        padding: 0px 0px;
        margin: 50px 15px 90px 15px;
        border-radius: 5px;
        box-shadow: 0 15px 45px -20px rgb(0 0 0 / 73%);
        transform: scale(0.9);
        opacity: 0.5;
        transition: all 0.3s;
    }

    .slider-card img {
        border-radius: 5px 5px 0px 0px;
    }

    .owl-nav .owl-prev {
        position: absolute;
        top: calc(50% - 25px);
        left: 0;
        opacity: 1;
        font-size: 30px !important;
        z-index: 1;
    }

    .owl-nav .owl-next {
        position: absolute;
        top: calc(50% - 25px);
        right: 0;
        opacity: 1;
        font-size: 30px !important;
        z-index: 1;
    }

    .owl-dots {
        text-align: center;
    }

    .owl-dots .owl-dot {
        height: 10px;
        width: 10px;
        border-radius: 10px;
        background: #ccc !important;
        margin-left: 3px;
        margin-right: 3px;
        outline: none;
    }

    .owl-dots .owl-dot.active {
        background: rgb(59, 69, 160) !important;
    }
</style>