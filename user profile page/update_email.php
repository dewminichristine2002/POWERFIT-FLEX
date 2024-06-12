<?php  
     include '\xampp\htdocs\POWERFIT FLEX\all common\nav.php';
     session_start();
 ?>

<!DOCTYPE html>
<html>
    <head>
    <link href="\POWERFIT FLEX\user profile page\update styles.css" rel="stylesheet">
    </head>
    <body>
    <form  method="post">
     <fieldset>
        <label for="uemail">Enter your New Email:</label>
        <input type="text" id="uemail" name="uemail" required pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}">
        <br><br>

        <input type="submit" Value="Save changes">

        <legend>
            Update Email:
        </legend>
     </fieldset>
    </form>    

    </body>


</html>

<?php
 if ($_SERVER['REQUEST_METHOD'] === 'POST') {
 //connect to the database
 $con = new mysqli("localhost","root","","powerfit flex");

 //check connection
 if ($con->connect_error)
  {
 die("Connection failed: " . $con->connect_error);
 }

 $Uname = $_SESSION['UserName'];
 $uEmail = $_POST['uemail'];

$sql = "UPDATE register_user SET user_email = '$uEmail' WHERE UserName = '$Uname'";



if ($con->query($sql) === TRUE) {
    echo '<p style= "text-align:center;font-weight:bolder; font-size:large;">'."Profile updated successfully."."</p>"."<br><br>";
    echo '<a href="\POWERFIT FLEX\user profile page\User Profile.php" id="back">'.'Back'.'</a>'; 
    
} else {
    echo "Error updating profile: " . $con->error;
}

$con->close();
 }

  
    include '\xampp\htdocs\POWERFIT FLEX\all common\footer.php';
?>