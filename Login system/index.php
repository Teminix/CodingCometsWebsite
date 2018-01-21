<?php
session_start();
?>
<html>
  <head>
    <title>Very depressing website</title>
  <link rel="stylesheet" href="../Core-styles.css">
  <style>
    body {
      background-image: url("loginGif.gif");
      text-align: center;
    }
    h1 {
      padding-top: 10px;
      font-family: xirod;
      color: white;
    }
  </style>
  </head>
  <body>
    <h1> Sign Up and Log In </h1><br>
    <div id="back"></div>
    <form action="login.php" method="POST">
      <input type="text" name="uid" placeholder="username"><br>
      <input type="password" name="pwd" placeholder="password"><br>
      <button type="submit">Log In</button>
    </form>
    <?php
    if (isset($_SESSION['id'])) {
      echo "Session Id: " . $_SESSION['id'];
    } else {
      echo "You are not logged in!";
    }
    ?>
    <br><br><br>
<form action="su.php" method="POST">
  <input type="text" name="uid" placeholder="username"><br>
  <input type="password" name="pwd" placeholder="password"><br>
  <button type="submit">Sign up</button>
</form>

<br><br><br>

<form action="logout.php">
  <button>Log Out</button>
</form>

  </body>
</html>
