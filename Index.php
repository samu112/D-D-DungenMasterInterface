<?php
session_start();

// if counter is not set, set to zero
if(!isset($_SESSION['counter'])) {
    $_SESSION['counter'] = 0;
}

// if button is pressed, increment counter
if(isset($_POST['button'])) {
    ++$_SESSION['counter'];
}    

// reset counter
if(isset($_POST['reset'])) {
    $_SESSION['counter'] = 0;
}

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="\bootstrap-5.3.0-alpha1-dist\css\bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
  
    <h1>Hello, world!</h1>
    <h2>Teszt<h2>
    <script src="\bootstrap-5.3.0-alpha1-dist\js\bootstrap.bundle.min.js"></script>
    <form method="POST">
    <input type="hidden" name="counter" class="btn btn-primary" value="<?php echo $_SESSION['counter']; ?>" />
    <input type="submit" name="button" class="btn btn-primary" value="Counter" <?php if ($_SESSION['counter'] == 10){ ?> disabled <?php   } ?>/>
    <input type="submit" name="reset" class="btn btn-danger" value="Reset" <?php if ($_SESSION['counter'] != 10){ ?> disabled <?php   } ?>/>
</form>
    <div class="progress">
      <?php
      function Healthpoint(){
        $HP = 100 - 10*$_SESSION['counter'];
        if ($HP > 0) {
          echo $HP;
        }
        else{echo '';}
      }
      ?>
  <div class="progress-bar" role="progressbar" style="width: <?php Healthpoint() ?>%" aria-valuenow="<?php Healthpoint() ?>" aria-valuemin="0" aria-valuemax="100"><?php Healthpoint() ?></div>
</div>
  </body>
</html>