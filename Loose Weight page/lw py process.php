<?php
// CONNECT TO THE DATABASE
    $con = new mysqli("localhost", "root", "", "powerfit flex");

    // CHECK CONNECTION
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }



    $cdty = $_POST["card-type"];
    $nofc =  $_POST["card-name"]; 
    $crdn =  $_POST["card-number"];
    $exM =  $_POST["expiration-month"]; 
    $exYer =  $_POST["expiration-year"];
    $cvcdi =  $_POST["cvc"]; 
    $amout =  $_POST["amt"];
    $sql = "INSERT INTO lwtrainer1payment(`card type` , `name of the card` , `card number`, `expiration Month`, `expirration Year` , `cvc digits` , `package` ) VALUES ('$cdty' , '$nofc' ,' $crdn' , '$exM' , '$exYer' ,'$cvcdi' , '$amout')";


    if($con->query($sql)){
        header("Location:\POWERFIT FLEX\Loose Weight page\lwpaysuscussfull.php"); // Redirect to the appropriate URL
        exit; // Terminate the current script
    }
    else{
        echo"ERROR" .$CON->error;
    }

    $con->close();

?>
