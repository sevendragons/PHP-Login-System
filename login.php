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
  <h1 class="uk-text-center">Login</h1>
  <div class="uk-text-center">
    <p>
      <a href="/">Home</a>
    </p>
    
    <div class="uk-grid uk-child-width-1-3@s uk-child-width-1-1" uk-grid="">

      <form class="uk-form-horizontal uk-margin-large js-login">
        <div class="uk-margin">
            <label class="uk-form-label" for="form-horizontal-text">Email</label>
            <div class="uk-form-controls">
                <input class="uk-input" id="form-horizontal-text" required="required" type="text" placeholder="Email">
            </div>
        </div>

        <div class="uk-margin">
            <label class="uk-form-label" for="form-horizontal-text">Confirm Password</label>
            <div class="uk-form-controls">
                <input class="uk-input" id="form-horizontal-text" type="text" required="required" placeholder="Confirm Password">
            </div>
        </div>
        <div class="uk-margin">
            <label class="uk-form-label" for="form-horizontal-text">Password</label>
            <div class="uk-form-controls">
                <input class="uk-input" id="form-horizontal-text" type="text" required="required" placeholder="Password">
            </div>
        </div>

        <button class="uk-button uk-button-default" type="submit">Login</button>


      </form>
    </div>
  </div>

  <?php require_once "inc/footer.php"; ?>

</body>
</html>
