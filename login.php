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

unset($_SESSION['username']);
if (isset($_SESSION['username'])) {
    header('Location: http://localhost/jobsadmire-website-2/templates.php');
    exit();
}
?>

<link rel="stylesheet" href="./cvmaker-assets/css/bootstrap.min.css">
<link rel="icon" href="./cvmaker-assets/images/logo-icon.png" type="/assets/images/logo-icon.png">
<link rel="icon" href="./cvmaker-assets/images/logo-icon.png">
<link rel="stylesheet" href="./cvmaker-assets/css/login.css?v=<?php echo time(); ?>">
<link href="//fonts.googleapis.com/css2?family=Jost:wght@300;400;600&display=swap" rel="stylesheet">
<section class="mt-32 forms">
    <div class="container">

        <?php
        if (isset($_SESSION['success'])) {
            echo "
                                        <div style='padding-top:20px;'>
                                        <div class='alert alert-success'><b>Success!</b> Your account has been successfully created. You can now proceed to login </div>
                                        </div>
                                        ";
        }
        ?>

        <div class="logo">
            <a class="brand-logo" href="#">Login To Your Account</a>
        </div>
        <div class="forms-grid">
            <div class="login">
                <span class="fas fa-sign-in-alt"></span>
                <strong>Welcome!</strong>
                <span>Sign in to your account</span>

                <form method="post" class="login-form">
                    <fieldset>
                        <div class="form">
                            <div class="form-row">
                                <span class="fas fa-user"></span>
                                <label class="form-label" for="input">Email</label>
                                <input type="email" class="form-text" name="email" required>
                            </div>
                            <div class="form-row">
                                <span class="fas fa-eye"></span>
                                <label class="form-label" for="input">Password</label>
                                <input type="password" class="form-text" name="password" required>
                            </div>
                            <div class="form-row bottom">
                                <div class="form-check">
                                    <input type="checkbox" id="remenber" name="remenber" value="remenber">
                                    <label for="remenber"> remember me?</label>
                                </div>
                                <a href="register.php" class="forgot">Create Account!</a>
                            </div>
                            <div class="form-row button-login">
                                <button class="btn btn-login" name="login">Login <span class="fas fa-arrow-right"></span></button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</section>
<?php

if (isset($_POST['login'])) {
    $mail = $_POST['email'];
    $pass = $_POST['password'];
    $query = mysqli_query($con, "select * from register where email='$mail' && password='$pass' ");
    $check = mysqli_num_rows($query);

    if ($check > 0) {
        $session_Data = mysqli_fetch_array($query);
        $_SESSION['user_id'] = $session_Data[0];
        $_SESSION['username'] = $session_Data[1];
        $_SESSION['contact'] = $session_Data[2];
        $_SESSION['address'] = $session_Data[3];
        $_SESSION['email'] = $session_Data[4];
        $_SESSION['password'] = $session_Data[5];
        $_SESSION['user_img'] = $session_Data[6];
        header('location:http://localhost/jobsadmire-website-2/templates.php');
    } else {
        echo "<script>alert('Login failed...')</script>";
        echo "<script>window.location.href = 'http://localhost/jobsadmire-website-2/login.php';</script>";
    }
    unset($_SESSION['success']);
}

$hero_content = ob_get_clean();
include "$base_dir/base.php";
include "$base_dir/quick-job-apply.php";
?>
