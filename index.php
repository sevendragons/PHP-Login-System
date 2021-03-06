<?php
  // allow config
  define('__CONFIG__', true);
  require_once "inc/config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="robots" content="follow">
  <title>Page Title</title>
  <base href="/">

  <!-- UIkit CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.26/css/uikit.min.css" />

  <!-- UIkit JS -->


  <title>PHP login</title>
</head>
<body>
  <h1 class="uk-text-center">Hello Nicky</h1>
  <?php  ?>
  <div class=" uk-text-center">
    <?php
      echo "Hello PHP; Today is: ";
      echo  date(" Y m d");
     ?>
    <p>
      <a href="/login.php">Login</a>
      <a href="/register.php">Register</a>
    </p>

  </div>

  <?php require_once "inc/footer.php"; ?>

</body>
</html>
