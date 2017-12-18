<?php
session_start();
// Connect to database
include 'db_connection.php';
// Variables taken from form
$username = Trim(stripslashes($_POST['username']));
$password = Trim(stripslashes($_POST['password']));
// Accessing account from database
$sql = "SELECT * FROM users WHERE username='$username'";
// Getting result from database
$result = mysqli_query($mysqli, $sql);
// Counting amount of records
$count = mysqli_num_rows($result);
// If theres one record carry one
if ($count == 1) {
  // Convert DB result array into text
  while ($row = mysqli_fetch_array($result)) {
    // Assigning variable to password record
    $dbPass = $row['password'];
  }
  // Verifying password
  if (password_verify($password, $dbPass)) {
    $_SESSION['login_session']=$username;
    header("location: profile.php");
  } else {
    header("location: index.php");
  }
  mysqli_close($mysqli);
}







 ?>
