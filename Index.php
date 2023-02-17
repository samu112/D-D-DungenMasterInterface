
 <!--Head-->
<?php
$page_title = 'Login';
include($_SERVER['DOCUMENT_ROOT'].'/pages/global/header.php');
?>
 <!--Head-->

<!--Body-->

    <form action="/action_page.php" method="post">
        <div class="container h-100">
            <div class="row h-100 justify-content-center align-items-center">
                <form class="col-12">
                <div class="form-group text-center">
                    <label class="form-label" for="form2Example2">Password</label>
                    <input type="password" id="form2Example2" class="form-control" />
                </div>
                <div class="form-group text-center">
                    <button type="button" class="btn btn-primary btn-block mb-4">Sign in</button>
                </div>
                </form>   
            </div>
        </div>
    </form>







<!--Body-->

<!--Footer-->
<?php
include($_SERVER['DOCUMENT_ROOT'].'/pages/global/footer.php');
?> 
<!--Footer-->