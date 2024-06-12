<?php
    // CONNECT TO THE DATABASE
    $con = new mysqli("localhost", "root", "", "powerfit flex");

    // CHECK CONNECTION
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }



    $lwuname = $_POST["lwname"];
    $lwsuage =  $_POST["lwage"]; 
    $lwgen =  $_POST["lws1"];
    $lwat =  $_POST["lwr2"];
    $lwlevel =  $_POST["lwfitness-level"]; 
    $lwnumpush =  $_POST["lwpushups"]; 

    $sql = "INSERT INTO lwdetails(`username` , `age` , `gender`, `fitness_level` , `workout_place` , `push_ups`) VALUES ('$lwuname' , '$lwsuage' , '$lwgen' , '$lwlevel' ,'$lwat' , '$lwnumpush'   )";


    if($con->query($sql)){
        header("Location: \POWERFIT FLEX\Loose Weight page\lw content.php");
    }
    else{
        echo"ERROR" .$CON->error;
    }

    $con->close();

?>
