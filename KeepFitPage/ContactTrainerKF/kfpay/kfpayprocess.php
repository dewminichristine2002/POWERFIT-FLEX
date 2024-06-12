<?php
// CONNECT TO THE DATABASE
    $con = new mysqli("localhost", "root", "", "powerfit flex");

    // CHECK CONNECTION
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }


    $ctype =$_POST["cardtype"];
    $cname = $_POST["cardname"]; 
    $cnumber =$_POST["cardnumber"];
    $exMonth =$_POST["expirationmonth"]; 
    $exYear =$_POST["expirationyear"];
    $cvc =$_POST["cvc"]; 
    $amount =$_POST["amt"];

    $sql = "INSERT INTO kfpay(`card_type` , `name_of_the_card` , `card_number`, `expiration_Month`, `expiration_Year` , `cvc_digits` , `package` ) VALUES ('$ctype' , '$cname' ,' $cnumber' , '$exMonth' , '$exYear' ,'$cvc' , '$amount')";


    if($con->query($sql)){
        echo"Payment Successfully";
        header("");
    }
    else{
        echo"ERROR" .$con->error;
    }

    $con->close();

?>
