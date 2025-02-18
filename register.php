<?php

$base_dir = __DIR__ . '/Base';
$static_url = './assets';
ob_start();
include "$base_dir/header.php";
$navlink_content = ob_get_clean();
$page = 'aboutus';
ob_start();

include './db/connection.php';
session_start();

if (isset($_SESSION["username"])) {
    header("Location: http://localhost/jobsadmire-website-2/templates.php");
    exit;
} else {

?>
<link rel="stylesheet" href="./cvmaker-assets/css/bootstrap.min.css">
<link rel="icon" href="./cvmaker-assets/images/logo-icon.png" type="/assets/images/logo-icon.png">
<link rel="icon" href="./cvmaker-assets/images/logo-icon.png">
<link rel="stylesheet" href="./cvmaker-assets/css/login.css?v=<?php echo time(); ?>">
<link href="//fonts.googleapis.com/css2?family=Jost:wght@300;400;600&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/af562a2a63.js" crossorigin="anonymous"></script>
<section class="mt-32 forms">
    <div class="container">
        <div class="logo">
            <a class="brand-logo" href="#">Sign Up To Your Account</a>
        </div>
        <div class="forms-grid">
            <div class="register">
                <span class="fas fa-user-circle"></span>
                <strong>Create account!</strong>
                <form method="post" class="register-form" enctype="multipart/form-data">
                    <fieldset>
                        <div class="form">
                            <div class="form-row">
                                <span class="fas fa-user"></span>
                                <label class="form-label" for="input">Name</label>
                                <input type="text" class="form-text" name="username" required>
                            </div>
                            <div class="form-row">
                                <span class="fas fa-phone"></span>
                                <label class="form-label" for="input">Contact</label>
                                <input type="number" class="form-text" name="con" required>
                            </div>
                            <div class="form-row">
                                <span class="fas fa-map"></span>
                                <label class="form-label" for="input">Address</label>
                                <input type="text" class="form-text" name="address" required>
                            </div>
                            <div class="form-row">
                                <span class="fas fa-envelope"></span>
                                <label class="form-label" for="input">E-mail</label>
                                <input type="email" class="form-text" name="email" required>
                            </div>
                            <div class="form-row">
                                <span class="fas fa-lock"></span>
                                <label class="form-label" for="input">Password</label>
                                <input type="password" class="form-text" name="password" required>
                            </div>

                            <div class="form-row">
                                <span class="fas fa-image"></span>
                                <label class="form-label" for="input">Image</label>
                                <input type="file" class="form-text" name="txtfile" required>
                            </div>

                            <div class="form-row button-login">
                                <button class="btn btn-login" name="btn">Create <span class="fas fa-arrow-right"></span></button>
                            </div>
                        </div>
                    </fieldset>
                </form>
                <span class="create-account">Already have an account! <a href="login.php" class="forgot">Login</a></span>
            </div>
        </div>
    </div>
</section>

<?php
if (isset($_POST['btn'])) {
    var_dump($_POST); // To check if form data is being sent correctly
    var_dump($_FILES); // To check if the image is being uploaded correctly
    // die();

    $name = $_POST['username'];
    $phone = $_POST['con'];
    $add = $_POST['address'];
    $mail = $_POST['email'];
    $pass = $_POST['password'];
    $filename = $_FILES['txtfile']['name'];
    $oldLocation = $_FILES['txtfile']['tmp_name'];
    $newlocation = './cvmaker-assets/images/' . $filename;
    move_uploaded_file($oldLocation, $newlocation);

    $_SESSION['success'] = 'success';

    $query = mysqli_query(
    $con,
    "INSERT INTO register (username, email, password)
    VALUES ('$name', '$mail', '$pass')"
);

if ($query) {
    echo "Data inserted successfully";
} else {
    echo "Error: " . mysqli_error($con);
}

    if ($query > 0) {
        echo "
                  <script>window.location.href = 'http://localhost/jobsadmire-website-2/login.php';</script>
                ";
        exit();
    }
}
$hero_content = ob_get_clean();
include "$base_dir/base.php";
include "$base_dir/quick-job-apply.php";

}

?>
