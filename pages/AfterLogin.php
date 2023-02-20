 <!--Head-->
 <?php
$page_title = 'Test 2';
include($_SERVER['DOCUMENT_ROOT'].'/pages/global/header.php');
?>
 <!--Head-->

 <!--Body-->
 <script src="\bootstrap-5.3.0-alpha1-dist\js\bootstrap.bundle.min.js"></script>

 <!--Navbar-->
 <nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-center">
 <form class="form-inline">
    <button class="btn btn-outline-success" type="button">Global settings</button>
    <button class="btn btn-outline-success disabled" type="button">Session code: +++++++++</button>
    <button class="btn btn-sm btn-outline-secondary" type="button">Reset</button>
  </form>
</nav>
 <!--Navbar-->

 <!--Dropup button-->
 <div class="menu" style="position: fixed;bottom: 10px;right: 10px;">
  <div class="item"><span>Twitter</span></div>
  <div class="item"><span>Instagram</span></div>
  <div class="item"><span>Flickr</span></div>
  <div class="item"><span>Behance</span></div>
  <div class="item"><span>MixCloud</span></div>
  <div class="label">Follow Me</div>
</div>

<!--Dropup button-->

<!--Body-->

<!--Footer-->
<?php
include($_SERVER['DOCUMENT_ROOT'].'/pages/global/footer.php');
?> 
<!--Footer-->