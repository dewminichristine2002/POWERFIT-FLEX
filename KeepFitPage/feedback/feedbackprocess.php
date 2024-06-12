<?php
// CONNECT TO THE DATABASE
    $con = new mysqli("localhost", "root", "", "powerfit flex");

    // CHECK CONNECTION
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }



    $fusername =$_POST["username"];
    $fuseremail =$_POST["email"]; 
    $fuserfeedback =$_POST["feedback"];
  
    $sql = "INSERT INTO feedback( `username` , `email` , `feedback` ) VALUES ('$fusername' , '$fuseremail' ,' $fuserfeedback' )";


    if($con->query($sql)){
        echo "Feedback Submitted";
    
    }
    else{
        echo"ERROR" .$CON->error;
    }

    $con->close();

?>