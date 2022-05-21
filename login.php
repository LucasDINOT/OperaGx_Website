<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="login.css" />

</head>

<body>


  <?php
  require('config.php');
  session_start();
  if (isset($_POST['username'])) {
    $username = stripslashes($_REQUEST['username']);
    $username = mysqli_real_escape_string($conn, $username);
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($conn, $password);
    $query = "SELECT * FROM `users` WHERE username='$username' and password='$password'";
    $result = mysqli_query($conn, $query) or die();
    $rows = mysqli_num_rows($result);
    if ($rows == 1) {
      $_SESSION['username'] = $username;
      header("Location: index.php");
    } else {
      $message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
    }
  }
  ?>




<form class="box" action="" method="post" name="login">
    <h1 class="box-logo box-title">Connexion</h1>
    <?php
    if (isset($_SESSION['username'])) {
      echo "Bienvenue " . $_SESSION['username'] . " !<br><br>";
    }
    ?>
    <input type="text" class="box-input" name="username" placeholder="Nom d'utilisateur" value="<?php if (isset($_SESSION['username'])) {
                                                                                                  echo $_SESSION['username'];
                                                                                                } ?>">
    <input type="password" class="box-input" name="password" placeholder="Mot de passe">
    <input type="submit" value="Connexion " name="submit" class="box-button">
    <p class="box-register">Vous êtes nouveau ici ? <a href="register.php">S'inscrire</a></p>
    <?php
    if (isset($_SESSION['username'])) {
      echo "<p class=\"box-register\"><a href=\"logout.php\">Se déconnecter</a></p>";
    }
    ?>
    <p class="box-register"><a href="index.php">Annuler</a></p>
    <?php if (!empty($message)) { ?>
      <p class="errorMessage"><?php echo $message; ?></p>
    <?php } ?>
  </form>
  
</body>
</html>