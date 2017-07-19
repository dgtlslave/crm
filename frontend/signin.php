<?php
  include "../classes/DBRequest.php";
  include "../classes/DBAccess.php";

  if (isset($_POST['signin'])) {

    $errors = array();

    $user = DBRequest::signInCheck($__conn, $_POST['login'], $_POST['password']);

    if ($user == true) {
      $_SESSION['logged_user'] = $user;
      header("Location: index.php");
    } else {
       $errors[] = "Login or password are incorrect.";
    }
    if (!empty($errors)) {
      echo "<div class=\"sign_in_mssg\">".array_shift($errors)."</div>";
    }
  }
 ?>

 <!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PMI Workflow</title>
    <link rel="shortcut icon" href="../image/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="../css/reset.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>

<body class="body">

  <span class="logo_index"><img height="100" width="200" src="../image/pmibig.png"></span>

  <header class="header_index">
    <div class="nav_bar_index">
      <a href="index.php">home</a>
    </div>

  </header>

  <main class="main_signin">
    <div class="reg">
    <form class="signin" action="signin.php" method="POST">
      <p>
        <input type="text" name="login" value="<?php echo @$_POST['login']?>">
      </p>
      <p>
        <input type="password" name="password">
      </p>
      <p>
        <button class="submit_signin" type="submit" name="signin">GO</button>
      </p>
    </form>
    </div>
  </main>

  <footer class="footer_signin">
    <span class="copyright">2017 &copy alex slavko. all right reserved</span>
  </footer>

</body>

</html>
