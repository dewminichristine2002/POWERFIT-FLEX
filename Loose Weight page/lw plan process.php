<?php
//connect to the database
$lwview = new mysqli("localhost","root","","powerfit flex");

//check connection
if ($lwview->connect_error)
{
die("Connection failed: " . $lwview->connect_error);
}

//fetching the last entered string data from the gender,fitness_levell, workout_place columns and assign it to a variable
$lwsql1 = "SELECT gender FROM lwdetails WHERE gender IS NOT NULL ORDER BY client_id_lw DESC LIMIT 1";
$lwresult1 = $lwview->query($lwsql1);

//checks whether there are rows 
if ($lwresult1->num_rows > 0) {
    $lwrow1 = $lwresult1->fetch_assoc();
    $lwGen = $lwrow1["gender"];
    
}

$lwsql2 = "SELECT fitness_level FROM lwdetails WHERE fitness_level IS NOT NULL ORDER BY client_id_lw DESC LIMIT 1";
$lwresult2 = $lwview->query($lwsql2);

if ($lwresult2->num_rows > 0) {
    $lwrow2 = $lwresult2->fetch_assoc();
    $lwlevel = $lwrow2["fitness_level"];
    
   }

$lwsql3 = "SELECT workout_place FROM lwdetails WHERE workout_place IS NOT NULL ORDER BY client_id_lw DESC LIMIT 1";
$lwresult3 = $lwview->query($lwsql3);

if ($lwresult3->num_rows > 0) {
	$lwrow3 = $lwresult3->fetch_assoc();
    $lwplace = $lwrow3["workout_place"];
    
   }

if ($lwGen == "male" && $lwlevel == "beginner" && $lwplace == "athome"){
   header("Location:\POWERFIT FLEX\Loose Weight page\lwplan1.php");
   
}
else if ($lwGen == "male" && $lwlevel == "intermediate" && $lwplace == "athome"){
   header("Location:\POWERFIT FLEX\Loose Weight page\lwplan2.php ");
}
else if ($lwGen == "male" && $lwlevel == "advanced" && $lwplace == "athome"){
   header("Location:\POWERFIT FLEX\Loose Weight page\lwplan3.php ");
}
else if ($lwGen == "male" && $lwlevel == "beginner" && $lwplace == "atgym"){
   header("Location:\POWERFIT FLEX\Loose Weight page\lwplan4.php ");
}
else if ($lwGen == "male" && $lwlevel == "intermediate" && $lwplace == "atgym"){
   header("Location:\POWERFIT FLEX\Loose Weight page\lwplan5.php");
}
else if ($lwGen == "male" && $lwlevel == "advanced" && $lwplace == "atgym"){
   header("Location:\POWERFIT FLEX\Loose Weight page\lwplan6.php");
}
else if ($lwGen == "female" && $lwlevel == "beginner" && $lwplace == "athome"){
   header("Location:\POWERFIT FLEX\Loose Weight page\lwplan7.php");
}
else if ($lwGen == "female" && $lwlevel == "intermediate" && $lwplace == "athome"){
   header("Location:\POWERFIT FLEX\Loose Weight page\lwplan8.php ");
}
else if ($lwGen == "female" && $lwlevel == "advanced" && $lwplace == "athome"){
   header("Location:\POWERFIT FLEX\Loose Weight page\lwplan9.php ");
}
else if ($lwGen == "female" && $lwlevel == "beginner" && $lwplace == "atgym"){
   header("Location:\POWERFIT FLEX\Loose Weight page\lwplan10.php ");
}
else if ($lwGen == "female" && $lwlevel == "intermediate" && $lwplace == "atgym"){
   header("Location:\POWERFIT FLEX\Loose Weight page\lwplan11.php");
}
else if ($lwGen == "female" && $lwlevel == "advanced" && $lwplace == "atgym"){
   header("Location:\POWERFIT FLEX\Loose Weight page\lwplan12.php");
}

$lwview->close();

?>


