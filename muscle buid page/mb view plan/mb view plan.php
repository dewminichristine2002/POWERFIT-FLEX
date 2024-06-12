<?php
  session_start();
//connect to the database
$view = new mysqli("localhost","root","","powerfit flex");

//check connection
if ($view->connect_error)
{
die("Connection failed: " . $view->connect_error);
}

//fetching the last entered string data from the gender,fitness_levell, workout_place columns 
$mbsql1 = "SELECT gender FROM bmdetails WHERE gender IS NOT NULL ORDER BY client_id_bm DESC LIMIT 1";
$mbresult1 = $view->query($mbsql1);

//checks whether there are rows 
if ($mbresult1->num_rows > 0) {
    $row1 = $mbresult1->fetch_assoc();   //read the data 
    $Gen = $row1["gender"];  //assign it to a variable
}

$mbsql2 = "SELECT fitness_level FROM bmdetails WHERE fitness_level IS NOT NULL ORDER BY client_id_bm DESC LIMIT 1";
$mbresult2 = $view->query($mbsql2);

if ($mbresult2->num_rows > 0) {
    $row2 = $mbresult2->fetch_assoc();
    $level = $row2["fitness_level"];
}

$mbsql3 = "SELECT workout_place FROM bmdetails WHERE workout_place IS NOT NULL ORDER BY client_id_bm DESC LIMIT 1";
$mbresult3 = $view->query($mbsql3);

if ($mbresult3->num_rows > 0) {
	$row3 = $mbresult3->fetch_assoc();
    $place = $row3["workout_place"];
}

//making the logic using logical operaters and redirect the user to the plan
if ($Gen == "male" && $level == "beginner" && $place == "home"){
   header("Location: \POWERFIT FLEX\muscle buid page\mb view plan\plan 01.php");
}
else if ($Gen == "male" && $level == "intermidiate" && $place == "home"){
   header("Location: \POWERFIT FLEX\muscle buid page\mb view plan\plan 02.php");
}
else if ($Gen == "male" && $level == "advance" && $place == "home"){
   header("Location: \POWERFIT FLEX\muscle buid page\mb view plan\plan 03.php");
}
else if ($Gen == "male" && $level == "beginner" && $place == "gym"){
   header("Location: \POWERFIT FLEX\muscle buid page\mb view plan\plan 04.php");
}
else if ($Gen == "male" && $level == "intermidiate" && $place == "gym"){
   header("Location: \POWERFIT FLEX\muscle buid page\mb view plan\plan 05.php");
}
else if ($Gen == "male" && $level == "advance" && $place == "gym"){
   header("Location: \POWERFIT FLEX\muscle buid page\mb view plan\plan 06.php");
}
else if ($Gen == "female" && $level == "beginner" && $place == "home"){
   header("Location: \POWERFIT FLEX\muscle buid page\mb view plan\plan 07.php");
}
else if ($Gen == "female" && $level == "intermidiate" && $place == "home"){
   header("Location: \POWERFIT FLEX\muscle buid page\mb view plan\plan 08.php");
}
else if ($Gen == "female" && $level == "advance" && $place == "home"){
   header("Location: \POWERFIT FLEX\muscle buid page\mb view plan\plan 09.php");
}
else if ($Gen == "female" && $level == "beginner" && $place == "gym"){
   header("Location: \POWERFIT FLEX\muscle buid page\mb view plan\plan 10.php");
}
else if ($Gen == "female" && $level == "intermidiate" && $place == "gym"){
   header("Location: \POWERFIT FLEX\muscle buid page\mb view plan\plan 11.php");
}
else if ($Gen == "female" && $level == "advance" && $place == "gym"){
   header("Location: \POWERFIT FLEX\muscle buid page\mb view plan\plan 12.php");
}

$view->close();  //close the connection

?>



