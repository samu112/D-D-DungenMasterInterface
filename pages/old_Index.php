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
 <!--Head-->
 <?php
$page_title = 'Test 2';
include($_SERVER['DOCUMENT_ROOT'].'/pages/global/header.php');
?>
 <!--Head-->

 <!--Body-->
  
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

<!--Body-->

<!--Footer-->
<?php
include($_SERVER['DOCUMENT_ROOT'].'/pages/global/footer.php');
?> 
<!--Footer-->