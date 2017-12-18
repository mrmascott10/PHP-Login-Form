<?php
//Connect to database
include 'db_connection.php';
//Variables
$name = Trim(stripslashes($_POST['name']));
$username = Trim(stripslashes($_POST['username']));
$email = Trim(stripslashes($_POST['email']));
$password = Trim(stripslashes($_POST['password']));

$encryptedPass = password_hash($password, PASSWORD_DEFAULT);
//$encryptedPass = $password;

$sqlUsrCheck = "SELECT Username FROM users WHERE username = '$username'";

//REMEMBER THE 'I'.
if (filter_var($email, FILTER_VALIDATE_EMAIL) && MYSQLI_NUM_ROWS($mysqli->query($sqlUsrCheck)) == 0) {
  //valid email
  $sqlInsertDetails = "INSERT INTO users (name, username, email, password) VALUES ('$name', '$username', '$email', '$encryptedPass')";
  $sqlInsertDetailsResult = $mysqli->query($sqlInsertDetails);
  echo "<br>Details entered successfully";
} else {
  //invalid email
  echo "<br>Email is invalid";
}





























?>
