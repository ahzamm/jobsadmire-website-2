<?php
$base_dir = __DIR__ . '/Base';
$static_url = './assets'; // Ensure this is the correct path

// Include the common navlink content
ob_start();
include "$base_dir/header_end.php"; // This file contains the shared navlink content
$navlink_content = ob_get_clean(); // Capture the navlink content
$page = 'end';

// Optionally define the Hero block content
ob_start();

$contacts = [
    [
        'icon' => 'uil uil-phone',
        'name' => 'Phone',
        'title' => 'For any query call us',
        'info' => '+90 501 124 03 40 ',
        'url' => 'tel:+905011240340'
    ],
    [
        'icon' => 'uil uil-envelope',
        'name' => 'Email',
        'title' => 'Contact us via a official email address',
        'info' => 'Info@jobsadmire.com',
        'url' => 'mailto:Info@jobsadmire.com'
    ],
    [
        'icon' => 'uil uil-map-marker',
        'name' => 'Location',
        'title' => 'Come on-site',
        'info' => 'View on Google map',
        'url' => 'https://www.google.com/maps/search/?api=1&query=Tahilpazarı+Mah.+Adnan+Menderes+Blv.+Erkal+Apt.+A+Blok+No:+7+İç+Kapı+No:+6+Muratpaşa/Antalya'
    ]
];
?>




<!-- Start Section-->
<section class="md:mt-32 relative lg:py-24 py-16">
    <div class="container">
        <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px]">
            <div class="lg:col-span-7 md:col-span-6">
                <img src="<?php echo $static_url; ?>/images/svg/contact.svg" alt="">
            </div>

            <div class="lg:col-span-5 md:col-span-6">
                <div class="lg:ms-5">
                    <div class="bg-white dark:bg-slate-900 rounded-md shadow dark:shadow-gray-700 p-6">
                        <h1 class="mb-6 text-2xl leading-normal font-semibold">Get in touch !</h1>

                        <form method="post" name="myForm" id="myForm">
                            <p class="mb-0" id="error-msg"></p>
                            <div id="simple-msg"></div>
                            <div class="grid lg:grid-cols-12 lg:gap-6">
                                <div class="lg:col-span-6 mb-5">
                                    <label for="name" class="font-semibold">Name:</label>
                                    <input name="name" id="name" type="text" class="form-input border border-slate-100 dark:border-slate-800 mt-2" placeholder="Name :">
                                </div>
                                <div class="lg:col-span-6 mb-5">
                                    <label for="phoneno" class="font-semibold">Phone:</label>
                                    <input name="phoneno" id="phoneno" type="number" class="form-input border border-slate-100 dark:border-slate-800 mt-2" placeholder="Phone :">
                                </div>
                            </div>
                            <div class="grid grid-cols-1">
                                <div class="mb-5">
                                    <label for="email" class="font-semibold">Email:</label>
                                    <input name="email" id="email" type="email" class="form-input border border-slate-100 dark:border-slate-800 mt-2" placeholder="Email :">
                                </div>
                            </div>
                            <div class="grid grid-cols-1">
                                <div class="mb-5">
                                    <label for="subject" class="font-semibold">Subject:</label>
                                    <input name="subject" id="subject" class="form-input border border-slate-100 dark:border-slate-800 mt-2" placeholder="Subject :">
                                </div>
                                <div class="mb-5">
                                    <label for="comments" class="font-semibold">Comment:</label>
                                    <textarea name="comments" id="comments" class="form-input border border-slate-100 dark:border-slate-800 mt-2 textarea" placeholder="Message :"></textarea>
                                </div>
                            </div>
                            <button type="submit" id="submit" name="send" class="btn bg-blue-900 hover:bg-blue-950 text-white rounded-md">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!--end container-->

    <div class="container lg:mt-24 mt-16">
        <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 gap-[30px]">
            <?php foreach ($contacts as $item): ?>
                <div class="text-center px-6">
                    <div class="relative text-transparent">
                        <div class="size-14 bg-blue-900/5 text-blue-900 rounded-xl text-2xl flex align-middle justify-center items-center mx-auto shadow-sm dark:shadow-gray-800">
                            <i class="<?php echo $item['icon']; ?>"></i>
                        </div>
                    </div>

                    <div class="content mt-7">
                        <h5 class="title h5 text-lg font-semibold"><?php echo $item['name']; ?></h5>
                        <p class="text-slate-400 mt-3"><?php echo $item['title']; ?></p>

                        <div class="mt-5">
                            <a href="<?php echo $item['url']; ?>" class="btn btn-link text-blue-900 hover:text-blue-900 after:bg-blue-900 transition duration-500"><?php echo $item['info']; ?></a>
                        </div>
                    </div>
                </div>

            <?php endforeach; ?>
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End Section-->

<!-- Google Map -->
 
<div class="container-fluid relative">
    <div class="grid grid-cols-1">
        <div class="w-full leading-[0] border-0">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5366.30774447688!2d30.70705974403267!3d36.89451838762447!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c38ffd0935f491%3A0x5db1bbe9dc274bef!2sTah%C4%B1lpazar%C4%B1%2C%20Adnan%20Menderes%20Blv.%20No%3A7%2C%2007040%20Muratpa%C5%9Fa%2FAntalya!5e0!3m2!1sen!2str!4v1734988993722!5m2!1sen!2str"
                style="border:0"
                class="w-full h-[500px]"
                allowfullscreen>
            </iframe>
        </div>
    </div><!--end grid-->
</div><!--end container-->
<!-- Google Map -->

<?php
$hero_content = ob_get_clean(); // Capture the hero content

// $button_style = 'simple'; // Set the button style for index2
// $navbar_style = 'nav-light'; // Define the navbar style for index22

// Include the base template
include "$base_dir/base.php";
include "$base_dir/quick-job-apply.php";

?>

<!-- JAVASCRIPTS -->
<script>
    easy_background("#home", {
        slide: ["<?php echo $static_url; ?>/images/bg/1.jpg"],
        delay: [4000, 4000, 4000]
    });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<script>
    $(document).ready(function() {
        $('#myForm').on('submit', function(e) {
            e.preventDefault();

            const formData = {
                name: $('#name').val(),
                phone: $('#phoneno').val(),
                email: $('#email').val(),
                subject: $('#subject').val(),
                message: $('#comments').val()
            };

            $.ajax({
                url: 'https://crm2.techadmire.agency/api/lead-save',
                method: 'POST',
                contentType: 'application/json',
                data: JSON.stringify(formData),
                dataType: 'json',
                success: function(response) {
                    if (response.status === 1) {
                        $('#simple-msg').html('<p class="text-green-500">Message sent successfully!</p>');
                        $('#myForm')[0].reset();
                    } else {
                        $('#error-msg').html('<p class="text-red-500">Error: ' + response.message + '</p>');
                    }
                },
                error: function() {
                    $('#error-msg').html('<p class="text-red-500">There was an error processing your request.</p>');
                }
            });
        });
    });
</script>