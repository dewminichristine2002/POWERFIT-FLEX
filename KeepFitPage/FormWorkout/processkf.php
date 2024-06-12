<?php 

// Connect to the database
$con = new mysqli("localhost","root","","powerfit flex");

// Check connection
if ($con->connect_error) {
    die("Connection Failed: " . $con->connect_error); // Corrected variable name here
}

$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$fitnessLevel = $_POST['fitnesslevel'];
$workoutPlace = $_POST['workoutplace'];
$pushups = $_POST['pushups'];

$sql = "INSERT INTO kfdetails (`username`, `age`, `gender`, `fitness_level`, `workout_place`, `push_ups`) VALUES ('$name', '$age', '$gender', '$fitnessLevel', '$workoutPlace', '$pushups')";

if($con->query($sql)) {
   header("Location: \POWERFIT FLEX\KeepFitPage\KeepFitPage\keepfit.php ");
}
else{
    echo "Error:". $con->error;
}

// Close the database connection
$con->close();
?>

























//connect to the database 
//$conn= new mysquli("localhost","root","powerfit flex");

//check connection
//if($conn->connect_error){
 //   die("Connection Failed: ".$con->connect_error)
//}


//$name = $_POST['name'];
//$age = $_POST['age'];
//$gender = $_POST['gender'];
//$workoutPlace = $_POST['workout-place'];
//$fitnessLevel = $_POST['fitness-level'];
//$pushups = $_POST['pushups'];

//$sql = "INSERT INTO kfdetails (`username`, `age`, `gender`,  `fitness_level` , `workout_place`, `push-ups`) VALUES ('$name', '$age', '$gender', '$workoutPlace', '$fitnessLevel', '$pushups')";

//if ($conn->query($sql) === true) {
//    echo "Hello" $name "! This is your Keep Fit Workout Plan.";
//} 
//else {
//    echo "Error: " $conn->error;
//}

// Close the database connection
//$conn->close();
