<?php
// CONNECT TO THE DATABASE
    $con = new mysqli("localhost", "root", "", "powerfit flex");

    // CHECK CONNECTION
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }



    $cousuname = $_POST["name"];
    $cousemail =  $_POST["email"]; 
    $cousmsg =  $_POST["message"];
  
    $sql = "INSERT INTO Inquiredetails( `inqname` , `inqemail` , `inqmessage` ) VALUES ('$cousuname' , '$cousemail' ,' $cousmsg' )";


    if($con->query($sql)){
        echo"Inquiry sent";
        echo"<br><a href='contact us page.php'>Go Back<a>";
    }
    else{
        echo"ERROR" .$CON->error;
    }

    $con->close();

?>
