<?php
//Tutorial: https://www.tutorialrepublic.com/php-tutorial/php-mysql-login-system.php



$host = 'db';

// Database use name
$user = 'MYSQL_USER';

//database user password
$pass = 'MYSQL_PASSWORD';

// database name
$mydatabase = 'MYSQL_DATABASE';
// check the mysql connection status

$link = new mysqli($host, $user, $pass, $mydatabase);
 




// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>

