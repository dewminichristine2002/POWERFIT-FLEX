
<?php
//connect to the database
$con = new mysqli("localhost","root","","powerfit flex");

//check connection
if ($con->connect_error)
{
die("Connection failed: " . $con->connect_error);
}


$uname = $_POST["username"];
$Age =$_POST["age"];
$Gen =$_POST["gender"];
$level=$_POST["flevel"];
$at= $_POST["place"];
$npushup= $_POST["pushup"];

$sql = "INSERT INTO bmdetails (`username`, `age`, `gender`, `fitness_level`, `workout_place`, `push-ups`) VALUES ('$uname', '$Age', '$Gen', '$level', '$at', '$npushup')";

if($con->query($sql)){
 
header("Location: \POWERFIT FLEX\muscle buid page\mb content\mb content.php");

}
else{
echo "Error:". $con->error;
}
$con->close();
?>

