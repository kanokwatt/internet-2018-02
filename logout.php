<?php
// logout.php
session_start();    // Start session
session_destroy();  // Destroy session

// redirect to login.php
header("Location:login.php");
?>