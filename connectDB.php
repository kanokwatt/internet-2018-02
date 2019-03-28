<?php
//connectDB.php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "up";

    /********************/
    // 1. CONNECT (DB)
    /********************/
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    mysqli_set_charset($conn,"utf8"); // charset to utf-8

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    //echo "Connected successfully";
?>