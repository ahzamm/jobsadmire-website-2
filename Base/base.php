<?php
// $base_dir = __DIR__ . '/Base';
$static_url = './assets';

// Define the content for the navlink block
ob_start();
?>



<!DOCTYPE html>
<html lang="en" class="light scroll-smooth" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title>Job Admire - Job Portal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Job Listing Landing Template" name="description">
    <meta content="Job, CV, Career, Resume, Job Portal, Create Job, Post job, tailwind Css" name="keywords">
    <meta name="author" content="Shreethemes">
    <meta name="website" content="https://shreethemes.in">
    <meta name="email" content="support@shreethemes.in">
    <meta name="version" content="1.5.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- favicon -->
    <link rel="shortcut icon" href="<?php echo $static_url; ?>/images/Asset-4.png">

    <!-- Css -->
    <link href="<?php echo $static_url; ?>/libs/tobii/css/tobii.min.css" rel="stylesheet">
    <link href="<?php echo $static_url; ?>/libs/tiny-slider/tiny-slider.css" rel="stylesheet">
    <link href="<?php echo $static_url; ?>/libs/choices.js/public/assets/styles/choices.min.css" rel="stylesheet">
    <!-- Main Css -->
    <link href="<?php echo $static_url; ?>/libs/@iconscout/unicons/css/line.css" type="text/css" rel="stylesheet">
    <link href="<?php echo $static_url; ?>/libs/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $static_url; ?>/css/tailwind.css" rel="stylesheet" type="text/css">


</head>

<body class="dark:bg-slate-900">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class', // or 'media' for system-based dark mode
        }
    </script>
    <?php
    // Example condition


    if ($page == 'end') {
        include 'header_end.php'; // 
    } elseif ($page == 'start') {
        include 'header_start.php'; //
    } elseif ($page == 'center-dark') {
        include 'header_center-dark.php'; //
    } elseif ($page == 'single-page') {
        include 'no-header.php'; //
    } elseif ($page == 'new') {
        include 'header_new.php'; //
    } else {
        include 'header.php'; // 
    }
    ?>


    <!-- Main Content -->
    <main>
        <?php echo $hero_content ?? '<!-- Default hero content here -->'; ?>
    </main>

    <?php
    include 'footer.php'; // Include the footer
    ?>

    <!-- Switcher -->
    <div class="fixed top-1/4 -right-2 z-50">
        <span class="relative inline-block rotate-90">
            <input type="checkbox" class="checkbox opacity-0 absolute" id="chk">
            <label class="label bg-slate-900 dark:bg-white shadow dark:shadow-gray-800 cursor-pointer rounded-full flex justify-between items-center p-1 w-14 h-8" for="chk">
                <i class="uil uil-moon text-[20px] text-yellow-500"></i>
                <i class="uil uil-sun text-[20px] text-yellow-500"></i>
                <span class="ball bg-white dark:bg-slate-900 rounded-full absolute top-[2px] left-[2px] size-7"></span>
            </label>
        </span>
    </div>

    <!-- <div class="fixed top-1/2 -right-11 z-50 hidden sm:block">
            <a href="https://1.envato.market/jobstack" target="_blank" class="py-1 px-3 relative inline-block rounded-t-md -rotate-90 bg-white dark:bg-slate-900 shadow-md dark:shadow dark:shadow-gray-800 font-semibold"><i class="mdi mdi-cart-outline me-1"></i> Download</a>
        </div> -->
    <!-- Switcher -->

    <!-- LTR & RTL Mode Code -->
    <div class="fixed top-[40%] -right-3 z-50">
        <a href="" id="switchRtl">
            <span class="py-1 px-3 relative inline-block rounded-t-md -rotate-90 bg-white dark:bg-slate-900 shadow-md dark:shadow dark:shadow-gray-800 font-semibold rtl:block ltr:hidden">LTR</span>
            <span class="py-1 px-3 relative inline-block rounded-t-md -rotate-90 bg-white dark:bg-slate-900 shadow-md dark:shadow dark:shadow-gray-800 font-semibold ltr:block rtl:hidden">RTL</span>
        </a>
    </div>
    <!-- LTR & RTL Mode Code -->

    <button id="whatsapp-btn"
        class="fixed bottom-14 right-4 z-50 bg-green-500 p-3 rounded-full shadow-lg hover:bg-green-600 transition">
        <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" class="w-10 h-10" alt="Chat on WhatsApp">
    </button>

    <!-- WhatsApp Chat Box -->
    <div id="whatsapp-chatbox"
        class="hidden fixed bottom-24 right-4 w-64 bg-white border border-gray-300 shadow-lg rounded-lg p-4">
        <div class="flex justify-between items-center border-b pb-2">
            <span class="text-lg font-semibold text-gray-700">Chat with us</span>
            <button id="close-chat" class="text-gray-500 hover:text-red-500">✖</button>
        </div>
        <div class="mt-2">
            <textarea id="whatsapp-message" class="w-full p-2 border rounded-md text-gray-700"
                placeholder="Type your message..."></textarea>
            <button id="send-whatsapp"
                class="w-full mt-2 bg-green-500 text-white p-2 rounded-md hover:bg-green-600 transition">Send</button>
        </div>
    </div>

    <!-- Back to top -->
    <a href="#" onclick="topFunction()" id="back-to-top" class="back-to-top fixed hidden text-lg rounded-full z-10 bottom-4 end-5 size-9 text-center bg-blue-900 text-blue-400 justify-center items-center"><i class="uil uil-arrow-up"></i></a>
    <!-- Back to top -->

    <!-- JAVASCRIPTS -->
    <script src="<?php echo $static_url; ?>/libs/tobii/js/tobii.min.js"></script>
    <script src="<?php echo $static_url; ?>/libs/tiny-slider/min/tiny-slider.js"></script>
    <script src="<?php echo $static_url; ?>/libs/jarallax/jarallax.min.js"></script>
    <script src="<?php echo $static_url; ?>/libs/choices.js/public/assets/scripts/choices.min.js"></script>
    <script src="<?php echo $static_url; ?>/libs/feather-icons/feather.min.js"></script>
    <script src="<?php echo $static_url; ?>/js/plugins.init.js"></script>
    <script src="<?php echo $static_url; ?>/js/app.js"></script>



    <!-- JavaScript -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const chatbox = document.getElementById("whatsapp-chatbox");
            const chatButton = document.getElementById("whatsapp-btn");
            const closeChat = document.getElementById("close-chat");
            const sendButton = document.getElementById("send-whatsapp");

            // Show chatbox when clicking the WhatsApp button
            chatButton.addEventListener("click", function() {
                chatbox.classList.toggle("hidden");
            });

            // Close chatbox
            closeChat.addEventListener("click", function() {
                chatbox.classList.add("hidden");
            });

            // Send message to WhatsApp
            sendButton.addEventListener("click", function() {
                const message = document.getElementById("whatsapp-message").value.trim();
                if (message !== "") {
                    const phoneNumber = "905011240340"; // Your WhatsApp number
                    const whatsappURL = `https://wa.me/${phoneNumber}?text=${encodeURIComponent(message)}`;
                    window.open(whatsappURL, "_blank");
                }
            });

            // Close when clicking outside the chatbox
            document.addEventListener("click", function(event) {
                if (!chatbox.contains(event.target) && !chatButton.contains(event.target)) {
                    chatbox.classList.add("hidden");
                }
            });
        });
    </script>


    <!-- JAVASCRIPTS -->

</body>

</html>