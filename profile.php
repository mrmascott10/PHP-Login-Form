<?php
session_start();
include('db_connection.php');
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Profile Page!</title>
  </head>
  <body>
    <div id="profile">
      <p><strong>Welcome: </strong> <?php echo $login_user = $_SESSION['login_user']; ?></p>
      <br><br>
      <a href="logout.php">Logout</a>
    </div>
  </body>
</html>
