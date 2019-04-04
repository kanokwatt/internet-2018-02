<?php
session_start();

if(!isset($_SESSION['user'])) header("Location:login.php");

// CONNECT
require("connectDB.php");

// SELECT (SQL)
$sql = "DELETE FROM student WHERE STUDENT_ID=" . $_REQUEST['id'];
echo $sql;

// EXECUTE (SQL)
if(mysqli_query($conn, $sql)) {
    header("Location:student.php");
}
else{
    echo "Delete Failed!";
}
?>