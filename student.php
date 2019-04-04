<?php
// student.php

    /********************/
    // Start using SESSION
    /********************/
    session_start();
    
    if(!isset($_SESSION['user'])) header("Location:login.php");

    echo "Welcome, " . $_SESSION['user'];

    /********************/
    require("connectDB.php");

    /********************/
    // 2. SELECT (SQL)
    /********************/
    $find = "";
    if(isset($_REQUEST['txtSearch'])) $find = $_REQUEST['txtSearch'];

    //$sql = "SELECT STUDENT_ID, FIRST_NAME, LAST_NAME, DEPT_ID, PASSWORD FROM student";
    $sql = "SELECT STUDENT_ID, FIRST_NAME, LAST_NAME, student.DEPT_ID, DEPT_NAME, PASSWORD FROM student JOIN department ON student.DEPT_ID = department.DEPT_ID";
    $sql = $sql . " WHERE FIRST_NAME LIKE '%" . $find . "%'";

    //echo $sql;

    /********************/
    // 3. EXECUTE (SQL)
    /********************/
    $result = mysqli_query($conn, $sql); 

    echo "<form action='student.php'>";
        echo "<input type='text' name='txtSearch'>";
        echo "<input type='submit' value='ค้นหา'>";
    echo "</form>";

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        echo "<table border='1'>";
            echo "<tr>";
                echo "<td>STUDENT_ID</td>";
                echo "<td>FIRST_NAME</td>";
                echo "<td>LAST_NAME</td>";
                echo "<td>DEPT_ID</td>";
                echo "<td>DEPT_NAME</td>";
                echo "<td>PASSWORD</td>";
                echo "<td>DELETE</td>";
            echo "</tr>";
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
                echo "<td>" . $row["STUDENT_ID"]. "</td>";
                echo "<td>" . $row["FIRST_NAME"]. "</td>";
                echo "<td>" . $row["LAST_NAME"]. "</td>";
                echo "<td>" . $row["DEPT_ID"]. "</td>";
                echo "<td>" . $row["DEPT_NAME"]. "</td>";
                echo "<td>" . $row["PASSWORD"]. "</td>";
                echo "<td><a href='delete.php?id=". $row["STUDENT_ID"] . "'>DELETE</a></td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
    
    mysqli_close($conn);

    echo "<a href='logout.php'>Logout</a>";
?>