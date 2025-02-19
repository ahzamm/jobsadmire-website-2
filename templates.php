<?php
$base_dir = __DIR__ . '/Base';
$static_url = './assets';
ob_start();
include "$base_dir/header.php";
$navlink_content = ob_get_clean();
$page = 'aboutus';
ob_start();
session_start();
// echo $_SESSION["username"];
if (!isset($_SESSION["username"])) {
    header("Location: http://localhost/jobsadmire-website-2/login.php");
    exit;
}
?>

<link rel="stylesheet" href="./cvmaker-assets/css/style-starter.css">
<section class="mt-32 mb-32 bannerw3l-hnyv">
    <div class="col-md-12 resume-head">
        <div class="container">
            <h4 class="pt-5">RESUME TEMPLATES</h4>
            <h1>Select your job-winning resume template</h1>
            <p class="h5 pt-2">Create your Resume in just 5 minutes using our easy-to-use template</p>
        </div>
    </div>
    <div class="container mb-5">
        <div class="row mt-5">
            <div class="col-md-4 mt-2">
                <div class="cv-temp mb-5">
                    <img src="./cvmaker-assets/images/resumeImg2.png" alt="">
                    <form action="checkTemp.php?id=1" method="post">
                        <button class="btn btn-primary btn-lg text-white tmpBtn">Use this template</button>
                    </form>
                    <h4 class="p-2">Clean</h4>
                </div>
            </div>
            <div class="col-md-4 mt-2">
                <div class="cv-temp mb-5">
                    <img src="./cvmaker-assets/images/resumeImg3.png" alt="">
                    <form action="checkTemp.php?id=2" method="post">
                        <button class="btn btn-primary btn-lg text-white tmpBtn">Use this template</button>
                    </form>
                    <h4 class="p-2">Professional</h4>
                </div>
            </div>
            <div class="col-md-4 mt-2">
                <div class="cv-temp mb-5">
                    <img src="./cvmaker-assets/images/resumeIdea1.png" alt="">
                    <form action="checkTemp.php?id=3" method="post">
                        <button class="btn btn-primary btn-lg text-white tmpBtn">Use this template</button>
                    </form>
                    <h4 class="p-2">Advanced</h4>

                </div>
            </div>
        </div>
    </div>
</section>
<script>
    $(".navbar-toggler").on("click", function() {
        $("header").toggleClass("active");
    });
    $(document).on("ready", function() {
        if ($(window).width() > 991) {
            $("header").removeClass("active");
        }
        $(window).on("resize", function() {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
        });
    });
</script>
<script src="./cvmaker-assets/js/bootstrap.min.js"></script>

<?php
include "$base_dir/base.php";
?>
