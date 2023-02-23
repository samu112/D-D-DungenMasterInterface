<?php
    //usage example: <a href="\scripts\php_scripts\logout.php">Logout</a>
    session_start();
    session_destroy();
    //Redirect to main page
    header('Location: /index.php');
    exit;
?>