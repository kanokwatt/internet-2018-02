<?php
  $status = 0;

  if (isset($_REQUEST['status'])) {
      $status = $_REQUEST['status'];
  }
?>
<html>
    <head>เข้าใช้งานระบบ</head>
    <body>
    <?php
      if ($status == -1) {
          echo "<h3>Incorrect username or password!</h3>";
      }
    ?>
        <form action="checkLogin.php">
            Username: <input type="text" name="user"><br>
            Password: <input type="text" name="pwd"><br>
            <input type="submit" value="Login">

        </form>
    </body>
</html>