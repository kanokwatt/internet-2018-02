<?php

    // initialize
    $book = "";
    $game = "";

    $fname  = $_REQUEST['fname'];
    $lname  = $_REQUEST['lname'];
    $gender = $_REQUEST['gender'];
    $status = $_REQUEST['status'];

    if(isset($_REQUEST['book'])) $book = $_REQUEST['book'];
    if(isset($_REQUEST['game'])) $game = $_REQUEST['game'];      

    echo "Hi, " . $fname . "   " . $lname . "<br>" ;
    echo "Gender: " . $gender . "<br>";
    echo "Status: " . $status . "<br>" ;
    echo "Hobby: " . $game . ", " . $book;
?>