<?php
#Login SCRIPT START
#Source: https://www.tutorialrepublic.com/php-tutorial/php-mysql-login-system.php

// Initialize the session
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: /pages/AfterLogin.php");
    exit;
}
 
$host = 'db';

// Database use name
$user = 'MYSQL_USER';

//database user password
$pass = 'MYSQL_PASSWORD';

// database name
$mydatabase = 'MYSQL_DATABASE';
// check the mysql connection status

$link = new mysqli($host, $user, $pass, $mydatabase);

// Define variables and initialize with empty values
$username = $password = "";
$password_err = $login_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
     
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your code.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($password_err)){
        // Prepare a select statement
		$password=md5($password);
        $sql = "SELECT id, username, password FROM DM WHERE password = \"" . $password . "\"";
        
        if($stmt = $link->prepare($sql)){
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Store result
                $stmt->store_result();
                
                // Check if user with this password exists
                if($stmt->num_rows == 1){                    
                    // Bind result variables
                    $stmt->bind_result($id, $username, $hashed_password);
                    if($stmt->fetch()){           
						// Password is correct, so start a new session
						if(!isset($_SESSION)) 
                        { 
                            session_start(); 
                        } 
						
						// Store data in session variables
						$_SESSION["loggedin"] = true;
						$_SESSION["id"] = $id;
						$_SESSION["username"] = $username;                            
						
						// Redirect user to welcome page
						header("location: /pages/AfterLogin.php");
                    }
                } else{
                    // Password doesn't exist, display a generic error message
                    $login_err = "Invalid password!";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            $stmt->close();
        }
    }
    
    // Close connection
    $link->close();
}
#Login SCRIPT END
?>





<?php
$page_title = 'Login';
$extraHeaders="
    <script type=\"text/javascript\">
    window.onload = function()
    {
        timedHide(document.getElementById('wrong_passwrod_msg'), 3);
    }

    function timedHide(element, seconds)
    {
        if (element) {
            setTimeout(function() {
                element.style.display = 'none';
            }, seconds*1000);
        }
    }
    </script>";
include($_SERVER['DOCUMENT_ROOT'].'/pages/global/header.php');
?>
        <?php 
                    if(!empty($login_err)){
                        echo '<div class="alert text-center" id="wrong_passwrod_msg">' . $login_err . '</div>';
                    }
                ?>
        <div class="flex-grow-1 logindiv">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" autocomplete="off">   
                <input type="text" id="form2Example2"name="password" placeholder="Password" class="form-control loginInputText text-center <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" />
                <button type="submit" class="btn btn-warning btn-block mb-4">Sign in</button>
            </form>
        </div>
<?php
include($_SERVER['DOCUMENT_ROOT'].'/pages/global/footer.php');
?> 