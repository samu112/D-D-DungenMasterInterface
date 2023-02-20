 <!--Head-->
 <?php
 $extraHeaders = '<link href="\css\hover css.css" rel="stylesheet">';
$page_title = 'Global settings';
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
 <div class="menuX">
  <div class="itemX"><span>Twitter</span></div>
  <div class="itemX"><span>Instagram</span></div>
  <div class="itemX"><span>Flickr</span></div>
  <div class="itemX"><span>Behance</span></div>
  <div class="itemX"><span>MixCloud</span></div>
  <svg class="labelX" xmlns="http://www.w3.org/2000/svg" width="5vw" height="5vh" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
  <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
  <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
</svg>
</div>
<!--Dropup button-->

<!--Body-->

<!--Footer-->
<?php
include($_SERVER['DOCUMENT_ROOT'].'/pages/global/footer.php');
?> 
<!--Footer-->