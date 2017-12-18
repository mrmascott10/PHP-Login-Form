<?php
include 'db_connection.php';
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Profile Page!</title>
  </head>
  <body>
    <div id="profile">
      <p><h1>Welcome: </h1> <?php echo $login_session; ?></p>
    </div>
  </body>
</html>
