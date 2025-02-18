<?php
$base_dir = __DIR__ . '/Base';
$static_url = './assets'; // Ensure this is the correct path

// Include the common navlink content
ob_start();
include "$base_dir/header.php"; // This file contains the shared navlink content
$navlink_content = ob_get_clean(); // Capture the navlink content
$page = 'privacy';

// Optionally define the Hero block content
ob_start();
?>

<!-- Start Hero -->
<section class="relative table w-full py-36 bg-[url('../../<?php echo $static_url; ?>/images/hero/bg.jpg')] bg-top bg-no-repeat bg-cover">
    <div class="absolute inset-0 bg-blue-950"></div>
    <div class="container">
        <div class="grid grid-cols-1 text-center mt-10">
            <h3 class="md:text-3xl text-2xl md:leading-snug tracking-wide leading-snug font-medium text-white">PRIVACY POLICY</h3>
        </div><!--end grid-->
    </div><!--end container-->

    <div class="absolute text-center z-10 bottom-5 start-0 end-0 mx-3">
        <ul class="breadcrumb tracking-[0.5px] breadcrumb-light mb-0 inline-block">
            <li class="inline breadcrumb-item text-[15px] font-semibold duration-500 ease-in-out text-white/50 hover:text-white"><a href="index.php">Jobsadmire</a></li>
            <li class="inline breadcrumb-item text-[15px] font-semibold duration-500 ease-in-out text-white" aria-current="page">Privacy Policy</li>
        </ul>
    </div>
</section><!--end section-->
<div class="relative">
    <div class="shape overflow-hidden z-1 text-white dark:text-slate-900">
        <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
        </svg>
    </div>
</div>
<!-- End Hero -->

<br>

<section>
    <!-- Title Container -->
    <div class="flex h-auto w-full flex-col items-center justify-center bg-gray-100 py-6 md:h-64">
        <div class="flex flex-col items-center gap-y-4 py-5">
            <h1 class="text-4xl font-bold md:text-6xl">TERMS OF SERVICE</h1>
            <p class="text-lg text-gray-500 sm:text-base"> Last Updated as of October 17, 2022 </p>
        </div>
    </div>
    <div class="flex flex-col items-center justify-center px-5 md:px-10">
        <!-- Content Container -->
        <div class="mx-auto w-full max-w-5xl py-12 md:py-16 lg:py-20">
            <!-- Component -->
            <div class="flex flex-col items-center gap-y-14">
                <p class="max-w-3xl text-center text-lg sm:text-base">Welcome to <b>Jobs Admire</b> ("Company," "we," "our," "us"). Protecting your personal data is a priority for us. This Privacy Policy explains how we collect, use, share, and protect your information in compliance with <b>Turkish Law No. 6698 on the Protection of Personal Data (KVKK)</b> and other relevant regulations. </p>
                <div class="flex min-w-full flex-col gap-y-10">
                    <div class="flex min-w-full py-4  border-b border-gray-300">
                        <h6 class="text-base font-bold"> GENERAL TERMS &amp; CONDITIONS </h6>
                    </div>
                    <div class="flex flex-col gap-y-10">
                        <div class="flex min-w-full flex-col items-start gap-y-6">
                            <div class="flex flex-col items-start gap-y-3">
                                <p class="text-lg font-bold">Data Controller Information</p>
                                <p class="text-lg"> Jobs Admire operates as a private employment agency under the <b>Turkish Employment Agency</b> (İŞKUR) with permit number <b>1730 dated 19.09.2024</b>. As the Data Controller, we ensure compliance with KVKK regarding the collection and processing of personal data. </p>
                            </div>
                            <div class="flex flex-col items-start gap-y-3">
                                <p class="text-lg font-bold">Personal Data We Collect</p>
                                <p class="text-lg">We may collect the following personal data:</p>
                                <ul class="text-lg marker:text-green list-outside list-disc ml-6">

                                    <li class="text-red-500">
                                        <div class="text-black">
                                            <b>Job Seekers:</b>Name, contact, CV, experience, education, skills, and job application details
                                        </div>
                                    </li>
                                    <li class="text-red-500">
                                        <div class="text-black">
                                            <b>Employers:</b> Company name, representative details, contact information, and job vacancy details.
                                        </div>
                                    </li>
                                    <li class="text-red-500">
                                        <div class="text-black">
                                            <b>Website Visitors:</b> IP address, device information, cookies, and browsing behavior.
                                        </div>
                                    </li>

                                </ul>
                            </div>
                            <div class="flex flex-col items-start gap-y-3">
                                <p class="text-lg font-bold">Purpose of Data Processing</p>
                                <p class="text-lg"> We process personal data for the following purposes: </p>

                                <ul class="text-lg marker:text-green list-outside list-disc ml-6">

                                    <li class="text-red-500">
                                        <div class="text-black">
                                            Facilitating job placements between job seekers and employers.
                                        </div>
                                    </li>
                                    <li class="text-red-500">
                                        <div class="text-black">
                                            Verifying user identity and qualifications.
                                        </div>
                                    </li>
                                    <li class="text-red-500">
                                        <div class="text-black">
                                            Communicating job opportunities and recruitment-related services.
                                        </div>
                                    </li>
                                    <li class="text-red-500">
                                        <div class="text-black">
                                            Compliance with legal obligations under Turkish law.
                                        </div>
                                    </li>
                                    <li class="text-red-500">
                                        <div class="text-black">
                                            Improving website functionality and user experience.
                                        </div>
                                    </li>
                                </ul>

                            </div>
                            <div class="flex flex-col items-start gap-y-3">
                                <p class="text-lg font-bold">Legal Basis for Data Processing</p>
                                <p class="text-lg">We process your data based on the following legal grounds:</p>
                                <ul class="text-lg marker:text-green list-outside list-disc ml-6">

                                    <li class="text-red-500">
                                        <div class="text-black">
                                            <b>Explicit consent</b> where required.
                                        </div>
                                    </li>
                                    <li class="text-red-500">
                                        <div class="text-black">
                                            <b>Performance of a contract</b> between job seekers and employers.
                                        </div>
                                    </li>
                                    <li class="text-red-500">
                                        <div class="text-black">
                                            <b>Legal obligations</b> under Turkish employment and data protection laws.
                                        </div>
                                    </li>
                                    <li class="text-red-500">
                                        <div class="text-black">
                                            <b>Legitimate interests</b> such as fraud prevention, security, and service improvements.
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="flex flex-col items-start gap-y-3">
                                <p class="text-lg font-bold">Data Sharing and Transfers</p>
                                <p class="text-lg"> We may share personal data with:</p>

                                <ul class="text-lg marker:text-green list-outside list-disc ml-6">

                                    <li class="text-red-500">
                                        <div class="text-black">
                                            <b>Employers</b> seeking candidates for job vacancies.
                                        </div>
                                    </li>
                                    <li class="text-red-500">
                                        <div class="text-black">
                                            <b>Service providers</b> assisting in our operations (e.g., hosting, IT support).
                                        </div>
                                    </li>
                                    <li class="text-red-500">
                                        <div class="text-black">
                                            <b>Regulatory authorities</b> when required by law.
                                        </div>
                                    </li>

                                </ul>
                                <p class="text-lg">
                                    If data is transferred outside Turkey, we ensure adequate protection in compliance with KVKK regulations.</p>
                            </div>
                            <div class="flex flex-col items-start gap-y-3">
                                <p class="text-lg font-bold">Data Retention Period</p>
                                <p class="text-lg">Personal data will be retained as long as necessary for the purposes outlined in this policy or as required by Turkish laws. Unnecessary data will be securely deleted or anonymized. </p>
                            </div>
                            <div class="flex flex-col items-start gap-y-3">
                                <p class="text-lg font-bold">Your Rights Under KVKK</p>
                                <p class="text-lg"> As per <b>Article 11 of KVKK</b>, you have the following rights:</p>

                                <ul class="text-lg marker:text-green list-outside list-disc ml-6">

                                    <li class="text-red-500">
                                        <div class="text-black">
                                            Request access to your personal data.
                                        </div>
                                    </li>
                                    <li class="text-red-500">
                                        <div class="text-black">
                                        Request correction of inaccurate or incomplete data.
                                        </div>
                                    </li>
                                    <li class="text-red-500">
                                        <div class="text-black">
                                        Request deletion of your data under applicable conditions.
                                        </div>
                                    </li>
                                    <li class="text-red-500">
                                        <div class="text-black">
                                        Object to processing for certain purposes.
                                        </div>
                                    </li>
                                    <li class="text-red-500">
                                        <div class="text-black">
                                        Request data portability where applicable.
                                        </div>
                                    </li>

                                </ul>
                                <p class="text-lg">To exercise your rights, contact us at <b>Info@jobsadmire.com</b> </p>
                            </div>
                            <div class="flex flex-col items-start gap-y-3">
                                <p class="text-lg font-bold">Data Security</p>
                                <p class="text-lg">We implement technical and administrative security measures to protect your personal data against unauthorized access, alteration, or disclosure. </p>
                            </div>

                            <div class="flex flex-col items-start gap-y-3">
                                <p class="text-lg font-bold">Updates to this Policy</p>
                                <p class="text-lg">We may update this Privacy Policy periodically. Changes will be posted on this page with the updated date. </p>
                            </div>



                        </div>
                        <div class="min-h-[1px] min-w-full bg-gray-300"></div>
                        <div class="flex flex-col items-start gap-y-3">
                            <p class="text-lg font-bold">Contact Us</p>
                            <p class="text-lg"> For inquiries or to exercise your data rights, please contact </p>
                        </div>
                        <p class="text-lg"> Jobs Admire Özel İstihdam Bürosu Sanayi ve Ticaret Limited Şirketi
                            <br>
                            Tahilpazari Mah. Adnan Menderes Blv. Erkal Apt. A Blok No: 7 İç Kapı No: 6 Muratpaşa/Antalya
                            <br>
                            Info@jobsadmire.com
                            <br>
                            +90 501 124 03 40
                            <br>
                            <br>
                            By using our website and services, you acknowledge that you have read and understood this Privacy Policy
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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