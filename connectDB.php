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
    echo "Connected successfully";

    /********************/
    // 2. SELECT (SQL)
    /********************/
    $sql = "SELECT * FROM student";

    /********************/
    // 3. EXECUTE (SQL)
    /********************/
    $result = mysqli_query($conn, $sql); 

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            echo "id: " . $row["STUDENT_ID"]. " - Name: " . $row["FIRST_NAME"]. " " . $row["LAST_NAME"]. "<br>";
        }
    } else {
        echo "0 results";
    }
    
    mysqli_close($conn);








?>