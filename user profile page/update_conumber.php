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
        <label for="ucnum">Enter your updated Contact Number:</label>
        <input type="text" id="ucnum" name="ucnum">
        <br><br>

        <input type="submit" Value="Save changes">

        <legend>
            Update Contact Number 
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
 $uCnum = $_POST['ucnum'];

$sql = "UPDATE register_user SET User_contact_no = '$uCnum' WHERE UserName = '$Uname'";



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
