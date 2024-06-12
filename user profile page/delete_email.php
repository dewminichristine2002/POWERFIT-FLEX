<?php  

     session_start();

 //connect to the database
 $con = new mysqli("localhost","root","","powerfit flex");

 //check connection
 if ($con->connect_error)
  {
 die("Connection failed: " . $con->connect_error);
 }

 $Uname = $_SESSION['UserName'];

 $sql = "UPDATE register_user SET user_email = NULL WHERE UserName = '$Uname'";

 if ($con->query($sql) === TRUE) {
    echo '<script type="text/javascript">alert("The Email has been removed successfully.");
      window.history.back();
      </script>';
 } else {
     echo "Error deleting record: " . $con->error;
 }
 
 $con->close();

 

    
?>
