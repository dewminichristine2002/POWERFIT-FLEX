<?php
//connect to the database
$kfview = new mysqli("localhost","root","","powerfit flex");

//check connection
if ($kfview->connect_error)
{
die("Connection failed: " . $kfview->connect_error);
}

//fetching the last entered string data from the gender,fitness_level, workout_place columns and assign it to a variable
$kfsql1 = "SELECT gender FROM kfdetails WHERE gender IS NOT NULL ORDER BY client_id_kf DESC LIMIT 1";
$kfresult1 = $kfview->query($kfsql1);

//checks whether there are rows 
if ($kfresult1->num_rows > 0) {
   $row1 = $kfresult1->fetch_assoc();   //read the data 
   $gender = $row1["gender"];  //assign it to a variable
}

$kfsql2 = "SELECT fitness_level FROM kfdetails WHERE fitness_level IS NOT NULL ORDER BY client_id_kf DESC LIMIT 1";
$kfresult2 = $kfview->query($kfsql2);

if ($kfresult2->num_rows > 0) {
    $row2 = $kfresult2->fetch_assoc();
    $fitnessLevel = $row2["fitness_level"];
}

$kfsql3 = "SELECT workout_place FROM kfdetails WHERE workout_place IS NOT NULL ORDER BY client_id_kf DESC LIMIT 1";
$kfresult3 = $kfview->query($kfsql3);

if ($kfresult3->num_rows > 0) {
	$row3 = $kfresult3->fetch_assoc();
   $workoutPlace = $row3["workout_place"];
}

//making the logic using logical operaters and redirect the user to the plan
if ($gender == "male" && $fitnessLevel == "beginner" && $workoutPlace == "athome"){
   header("Location: \POWERFIT FLEX\KeepFitPage\KeepFitPage\KFWorkout Plans\kfplan01.php");
}
else if ($gender == "male" && $fitnessLevel == "intermediate" && $workoutPlace == "athome"){
   header("Location: \POWERFIT FLEX\KeepFitPage\KeepFitPage\KFWorkout Plans\kfplan02.php");
}
else if ($gender == "male" && $fitnessLevel == "advance" && $workoutPlace == "athome"){
   header("Location: \POWERFIT FLEX\KeepFitPage\KeepFitPage\KFWorkout Plans\kfplan03.php");
}
else if ($gender == "male" && $fitnessLevel == "beginner" && $workoutPlace == "atgym"){
   header("Location: \POWERFIT FLEX\KeepFitPage\KeepFitPage\KFWorkout Plans\kfplan04.php");
}
else if ($gender == "male" && $fitnessLevel == "intermediate" && $workoutPlace == "atgym"){
   header("Location: \POWERFIT FLEX\KeepFitPage\KeepFitPage\KFWorkout Plans\kfplan05.php");
}
else if ($gender == "male" && $fitnessLevel == "advance" && $workoutPlace == "atgym"){
   header("Location: \POWERFIT FLEX\KeepFitPage\KeepFitPage\KFWorkout Plans\kfplan06.php");
}
else if ($gender == "female" && $fitnessLevel == "beginner" && $workoutPlace == "athome"){
   header("Location: \POWERFIT FLEX\KeepFitPage\KeepFitPage\KFWorkout Plans\kfplan07.php");
}
else if ($gender == "female" && $fitnessLevel == "intermediate" && $workoutPlace == "athome"){
   header("Location: \POWERFIT FLEX\KeepFitPage\KeepFitPage\KFWorkout Plans\kfplan08.php");
}
else if ($gender == "female" && $fitnessLevel == "advance" && $workoutPlace == "athome"){
   header("Location: \POWERFIT FLEX\KeepFitPage\KeepFitPage\KFWorkout Plans\kfplan09.php");
}
else if ($gender == "female" && $fitnessLevel == "beginner" && $workoutPlace == "atgym"){
   header("Location: \POWERFIT FLEX\KeepFitPage\KeepFitPage\KFWorkout Plans\kfplan10.php");
}
else if ($gender == "female" && $fitnessLevel == "intermediate" && $workoutPlace == "atgym"){
   header("Location: \POWERFIT FLEX\KeepFitPage\KeepFitPage\KFWorkout Plans\kfplan11.php");
}
else if ($gender == "female" && $fitnessLevel == "advance" && $workoutPlace == "atgym"){
   header("Location: \POWERFIT FLEX\KeepFitPage\KeepFitPage\KFWorkout Plans\kfplan12.php");
}

$kfview->close();

?>



