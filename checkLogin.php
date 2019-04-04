<?php
// checkLogin.php

// Start using SESSION
session_start();

/*************************/
// STEP 1: CONNECT
/*************************/
require("connectDB.php");

$user = $_REQUEST["user"];
$pwd = $_REQUEST["pwd"];

/*************************/
// STEP 2: SELECT (SQL)
/*************************/
$sql = "SELECT * FROM student WHERE STUDENT_ID=". $user . " AND PASSWORD='" . $pwd ."'";
//echo $sql;

/*************************/
// STEP 3: EXECUTE (SQL)
/*************************/
$result = mysqli_query($conn, $sql); 

if (mysqli_num_rows($result) > 0) {
    //echo "Login OK!";

    $row = mysqli_fetch_assoc($result);
    $_SESSION['user']=$row['FIRST_NAME'];

    header("Location: student.php");
}
else {
    //echo "Login Failed!";
    header("Location: login.php?status=-1");
}

?>