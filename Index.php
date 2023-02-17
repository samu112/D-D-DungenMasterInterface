

<?php
$page_title = 'Login';
include($_SERVER['DOCUMENT_ROOT'].'/pages/global/header.php');
?>



<div class="flex-grow-1 logindiv">
    <form action="/action_page.php" method="post">
        <input type="text" id="form2Example2" placeholder="Password" class="form-control loginInputText text-center" />
        <button type="button" class="btn btn-warning btn-block mb-4">Sign in</button>
    </form>
</div>






<?php
include($_SERVER['DOCUMENT_ROOT'].'/pages/global/footer.php');
?> 
