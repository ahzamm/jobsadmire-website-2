<?php
$base_dir = __DIR__ . '/Base';
$static_url = './assets'; // Ensure this is the correct path

// Include the common navlink content
ob_start();
include "$base_dir/header.php"; // This file contains the shared navlink content
$navlink_content = ob_get_clean(); // Capture the navlink content
$page = 'license-list';

// Optionally define the Hero block content
ob_start();
?>

<!-- Start Hero -->
<section class="relative table w-full py-36 bg-[url('../../<?php echo $static_url; ?>/images/hero/bg.jpg')] bg-top bg-no-repeat bg-cover">
    <div class="absolute inset-0 bg-blue-950/90"></div>
    <div class="container">
        <div class="grid grid-cols-1 text-center mt-10">
            <h1 class="md:text-3xl text-2xl md:leading-snug tracking-wide leading-snug font-medium text-white">Licenses</h1>
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
<!-- End Hero -->

<!-- Start -->
<section class="relative md:py-24 py-16">
    <div class="container py-8">
        <div class="grid grid-cols-1 lg:grid-cols-1 gap-4">
            <!-- Image Section -->
            <div class="flex justify-center items-center lg:w-[650px] lg:h-[600px] mx-auto">
                <div class="relative overflow-hidden rounded-lg shadow-md">
                    <img src="<?php echo $static_url; ?>/images/license/2.jpg" alt="License" class="w-full h-auto object-cover">
                </div>
            </div>

            <!-- Text Section -->
            <div class="text-center md:px-24">
                <h5 class="text-lg font-semibold">
                License and Authorization Details for Jobs Admire
                </h5>
                <p class="text-slate-400 mt-2 text-lg">
                    Jobs Admire Özel İstihdam Bürosu proudly holds an official license issued by
                    <em>Türkiye İş Kurumu (İŞKUR)</em>, the Turkish Employment Agency, granting us the authority
                    to operate as a private employment bureau. This certification underscores our commitment to providing
                    legitimate, professional, and high-quality employment services in full compliance with Turkish labor
                    laws and regulations.
                </p>
                <!-- <h6 class="font-semibold mt-4">License Information:</h6> -->
                <div class="flex justify-center items-center">
    <div class="flex justify-center items-center text-left text-slate-400 italic border-x-4 border-blue-900 rounded-ss-xl rounded-ee-xl mt-4 p-3 w-[600px]">
        <ul class="list-disc ml-5">
            <li><strong>License Number:</strong> 1730</li>
            <li><strong>Issue Date:</strong> 18th September 2024</li>
            <li><strong>Validity Period:</strong> 23rd September 2024 to 22nd September 2027</li>
            <li><strong>Issued By:</strong> Türkiye İş Kurumu Genel Müdürlüğü (Antalya Çalışma ve İş Kurumu İl Müdürlüğü)</li>
            <li><strong>Authorization Reference:</strong> Decision Number 16705944</li>
        </ul>
    </div>
</div>
            </div>
        </div>

        <!-- <div class="grid grid-cols-1 lg:grid-cols-12 gap-4 mt-8">
            <div class="lg:col-span-5">
                <h6 class="font-semibold text-slate-700"><span class="lg:inline-block hidden lg:mr-3">01. </span> What This License Means:</h6>
                <ol class="list-decimal ml-5 mt-4 text-slate-400 text-lg">
                    <li><strong>Regulatory Compliance:</strong> Our license reflects adherence to all Turkish employment laws and guidelines, ensuring ethical and transparent operations.</li>
                    <li><strong>Quality Assurance:</strong> It certifies that Jobs Admire meets the high standards set by İŞKUR for private employment bureaus, guaranteeing trustworthy and effective services.</li>
                    <li><strong>Scope of Services:</strong> As a licensed private employment bureau, we are authorized to connect job seekers with reputable employers across various industries.</li>
                </ol>
                
            </div>
            <div class="lg:col-span-1 flex justify-center">
                <div class="border-l border-slate-300 h-full"></div>
            </div>
            <div class="lg:col-span-6">
                
                <h6 class="font-semibold text-slate-700"><span class="lg:inline-block hidden lg:mr-3">03. </span>  Our Commitment to You:</h6>
                <p class="text-slate-400 mt-4 text-lg">
                    At Jobs Admire, we take pride in our role as a bridge between job seekers and employers. Our license
                    is a testament to our dedication to delivering exceptional service while maintaining the highest
                    standards of professionalism and integrity. If you have any questions about our licensing or services,
                    please feel free to contact us.
                </p>
            </div>
        </div> -->
    </div>

    <!-- Explore Jobs Section -->
    <div class="container-fluid md:mt-24 mt-16 py-8">
        <div class="container">
            <?php include "$base_dir/exploreJob.php"; ?>
        </div>
    </div>
</section>

<!-- End -->



<?php
$hero_content = ob_get_clean();

include "$base_dir/base.php";
include "$base_dir/quick-job-apply.php";

?>