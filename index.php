<!-- Connect to database -->
<?php include 'db_connection.php' ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Index</title>
  </head>
  <body>
    <!-- SIGN UP -->
    <h1>Please enter details to sign up</h1>
    <form action="signup.php" method="post"><br>
      <input type="text" name="name" placeholder="Name" required /><br>
      <input type="text" name="username" placeholder="Username" required /><br>
      <input type="text" name="email" placeholder="Email" required /><br>
      <input type="password" name="password" placeholder="Password" required /><br>
      <input type="submit" name="submit" value="Submit" />
    </form>

    <!-- LOGIN -->
    <h1>Please enter details to log in</h1>
    <form action="login.php" method="post"><br>
      <input type="text" name="username" placeholder="Username" value="<?php echo $_COOKIE['remember_me'];?>"><br>
      <input type="password" name="password" placeholder="Password" /><br>
      <input type="checkbox" name="remember" value="1">Remember Me <br>
      <input type="submit" name="submit" value="Submit" />
    </form>
  </body>
</html>
