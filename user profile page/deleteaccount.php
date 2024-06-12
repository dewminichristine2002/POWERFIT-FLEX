<?php
    //connect to the database
   $con = new mysqli("localhost","root","","powerfit flex");

    //check connection
    if ($con->connect_error)
     {
    die("Connection failed: " . $con->connect_error);
    }

    session_start();
    $Uname = $_SESSION['UserName'];

    $sql = "DELETE FROM register_user WHERE UserName = '$Uname'";

    if($con->query($sql)){
 
     header("Location: \POWERFIT FLEX\logo page\login form\Login form.php"); 
        
        }
    else {
        echo "Error in deleting the account.Please try again.";
    }
?>