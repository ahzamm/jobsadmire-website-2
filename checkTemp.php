<?php
include('./db/connection.php');

session_start();

$username = $_SESSION['username'];
$query = "select * from cv_data where username = '$username'";
$query_run = mysqli_query($con, $query);
$row = mysqli_fetch_array($query_run);


// var_dump($row[3]);
// die();

if ($username == $row[3]) {
    $fetch_id = $_GET["id"];

    if ($fetch_id == 1) {
        echo "<script>window.location.href = 'http://localhost/jobsadmire-website-2/template/clean-resume.php';</script>";
    } else if ($fetch_id == 2) {
        echo "<script>window.location.href = 'http://localhost/jobsadmire-website-2/template/professional-resume.php';</script>";
    } else {
        echo "<script>window.location.href = 'http://localhost/jobsadmire-website-2/template/your_resume.php';</script>";
    }
} else {
    header('location:resume.php');
}
?>