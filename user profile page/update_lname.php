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
        <label for="ulname">Enter your updated Last Name:</label>
        <input type="text" id="ulname" name="ulname">
        <br><br>

        <input type="submit" Value="Save changes">

        <legend>
            Update Last Name:
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
 $uLname = $_POST['ulname'];

$sql = "UPDATE register_user SET l_name = '$uLname' WHERE UserName = '$Uname'";



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