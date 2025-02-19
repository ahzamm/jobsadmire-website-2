<?php
session_start();
session_unset(); // Unset all session variables
session_destroy(); // Destroy the session

// Redirect to login page
header("Location: /jobsadmire-website-2/login.php");
exit();
?>
