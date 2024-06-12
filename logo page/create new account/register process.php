<!DOCTYPE html>
<html>


<?php

//connect to the database
$con = new mysqli("localhost","root","","powerfit flex");

//check connection
if ($con->connect_error)
{
die("Connection failed: " . $con->connect_error);
}

$firstname = $_POST["fname"];
$lastname = $_POST["lname"];
$day = $_POST["dob_day"];
$month = $_POST["dob_month"];
$year = $_POST["dob_year"];
$mail= $_POST["email"];
$cnumber =$_POST["contact"];
$Uname =$_POST["uname"];
$password =$_POST["psw"];
$repassword =$_POST["psw-repeat"];

$date_of_birth = "$year.''.$month .''.$day";

$check = "SELECT UserName FROM register_user WHERE UserName = '$Uname'";

$result = $con->query($check);

if ($result->num_rows > 0){
  echo '<script type="text/javascript">alert("Username already Exists. Try another Username.");
  window.history.back();
  </script>';
}



if ($password !== $repassword ){
                     
echo '<script type="text/javascript">alert("Passwords do not match. Please Check the password and re-Enter.");
      window.history.back();
      </script>';
        
}

else{
 
  $reg = "INSERT INTO register_user (`f_name`, `l_name`, `DOB`, `user_email`, `User_contact_no`, `UserName`,`User_password`,`User_Re_password`) VALUES ('$firstname', '$lastname', '$date_of_birth','$mail', '$cnumber', '$Uname', '$password','$repassword')";

    if($con->query($reg)){
        header("Location:\POWERFIT FLEX\logo page\login form\Login form.php");
        
        }
        else{
        echo "Error:". $con->error;
        }
}



$con->close();
?>

</html>


















