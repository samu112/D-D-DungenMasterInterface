 <!--Head-->
 <?php
$page_title = 'Test 2';
include($_SERVER['DOCUMENT_ROOT'].'/pages/global/header.php');
include 'CSS/style.css';
?>
 <!--Head-->

 <!--Body-->
 <script src="\bootstrap-5.3.0-alpha1-dist\js\bootstrap.bundle.min.js"></script>

<div id="footer">
    <div id="footerleftpane" runat="server">
        <a>Global settings</a>
    </div>
    <div id="footerMidPane" runat="server">
        <a>Session code</a>
    </div>
    <div id="footerRightPane" runat="server">
        <a>Reset</a>
    </div> 
</div>


<!--Body-->

<!--Footer-->
<?php
include($_SERVER['DOCUMENT_ROOT'].'/pages/global/footer.php');
?> 
<!--Footer-->