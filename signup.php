<?php
$base_dir = __DIR__ . '/Base';
$static_url = './assets'; // Ensure this is the correct path

// Define the content for the navlink block
ob_start();
?>
<?php
$navlink_content = ob_get_clean(); // Capture the navlink content

// Optionally define the Hero block content
ob_start();
?>

<!-- Hero Start -->
<section class="h-screen flex items-center justify-center relative overflow-hidden bg-[url('../../<?php echo $static_url; ?>/images/hero/bg3.jpg')] bg-no-repeat bg-center bg-cover">
    <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black"></div>
    <div class="container">
        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1">
            <div class="relative overflow-hidden bg-white dark:bg-slate-900 shadow-md dark:shadow-gray-800 rounded-md">
                <div class="p-6">
                    <a href="">
                        <img src="<?php echo $static_url; ?>/images/Asset-2.png" class="mx-auto h-[24px] block dark:hidden" alt="">
                        <img src="<?php echo $static_url; ?>/images/Asset-5.png" class="mx-auto h-[24px] dark:block hidden" alt="">
                    </a>
                    <h1 class="my-6 text-xl font-semibold">Signup</h1>
                    <form action="signup-success.php" class="text-start" method="post" name="myForm" id="myForm">
                    <p class="mb-0" id="error-msg"></p>
                    <div id="simple-msg"></div>
                        <div class="grid grid-cols-1">
                            <div class="mb-4 text-start">
                                <label class="font-semibold" for="RegisterName">Your Name:</label>
                                <input id="RegisterName" type="text" class="form-input mt-3 rounded-md" placeholder="Harry">
                            </div>

                            <div class="mb-4 text-start">
                                <label class="font-semibold" for="LoginEmail">Email Address:</label>
                                <input id="LoginEmail" type="email" class="form-input mt-3 rounded-md" placeholder="name@example.com">
                            </div>

                            <div class="mb-4 text-start">
                                <label class="font-semibold" for="LoginPassword">Phone:</label>
                                <input id="LoginPassword" type="number" class="form-input mt-3 rounded-md" placeholder="Phone:">
                            </div>

                            <div class="mb-4 text-start">
                                <label class="font-semibold" for="Type">Type:</label>
                                <select id="type" class="form-input mt-3 rounded-md">
                                    <option value="">Select Please</option>
                                    <option value="agent">Agent</option>
                                    <option value="company">Company</option>
                                    <option value="candidate">Candidate</option>
                                </select>
                            </div>

                            <div class="mb-4">
                                <div class="flex items-center mb-0">
                                    <input class="form-checkbox rounded border-gray-200 dark:border-gray-800 text-emerald-600 focus:border-emerald-300 focus:ring focus:ring-offset-0 focus:ring-emerald-200 focus:ring-opacity-50 me-2" type="checkbox" value="" id="Accept:T&C">
                                    <label class="form-checkbox-label text-slate-400" for="Accept:T&C">I Accept <a href="" class="text-emerald-600">Terms And Condition</a></label>
                                </div>
                            </div>

                            <div class="mb-4">
                                <input type="submit" id="submit" name="send" class="btn bg-emerald-600 hover:bg-emerald-700 border-emerald-600 hover:border-emerald-700 text-white rounded-md w-full" value="Register">
                            </div>

                            <div class="text-center">
                                <span class="text-slate-400 me-2">Already have an account ? </span> <a href="https://crm2.techadmire.agency/login" class="text-black dark:text-white font-bold">Sign in</a>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="px-6 py-2 bg-slate-50 dark:bg-slate-800 text-center">
                    <p class="mb-0 text-gray-400 font-medium">© <script>
                            document.write(new Date().getFullYear())
                        </script> Job Admire.</p>
                </div>
            </div>
        </div>
    </div>
</section><!--end section -->
<!-- Hero End -->

<?php
$hero_content = ob_get_clean(); // Capture the hero content

// Include the base template
include "$base_dir/no-header.php";
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $('#myForm').on('submit', function(e) {
            e.preventDefault();

            const formData = {
                name: $('#RegisterName').val(),
                email: $('#LoginEmail').val(),
                phone: $('#LoginPassword').val(),
                type: $('#type').val(),
            };

            $.ajax({
                url: 'https://crm2.techadmire.agency/api/registration',
                method: 'POST',
                contentType: 'application/json',
                data: JSON.stringify(formData),
                dataType: 'json',
                success: function(response) {
                    if (response.status === 1) {
                        $('#simple-msg').html('<p class="text-green-500">Register successfully!</p>');
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