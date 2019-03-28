<?php
// student.php
    require("connectDB.php");

    /********************/
    // 2. SELECT (SQL)
    /********************/
    $sql = "SELECT STUDENT_ID, FIRST_NAME, LAST_NAME, DEPT_ID, PASSWORD FROM student";

    /********************/
    // 3. EXECUTE (SQL)
    /********************/
    $result = mysqli_query($conn, $sql); 

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        echo "<table border='1'>";
            echo "<tr>";
                echo "<td>STUDENT_ID</td>";
                echo "<td>FIRST_NAME</td>";
                echo "<td>LAST_NAME</td>";
                echo "<td>DEPT_ID</td>";
                echo "<td>PASSWORD</td>";
            echo "</tr>";
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
                echo "<td>" . $row["STUDENT_ID"]. "</td>";
                echo "<td>" . $row["FIRST_NAME"]. "</td>";
                echo "<td>" . $row["LAST_NAME"]. "</td>";
                echo "<td>" . $row["DEPT_ID"]. "</td>";
                echo "<td>" . $row["PASSWORD"]. "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
    
    mysqli_close($conn);

?>