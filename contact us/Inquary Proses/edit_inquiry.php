<?php
// Connect to the database
$con = new mysqli("localhost", "root", "", "powerfit flex");

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}



    $id=$_POST["id"];
    $message=$_POST["newMessage"];
    $updateQuery = "UPDATE Inquiredetails SET  inqmessage = '$message' WHERE inquireid = '$id'";

    if ($con->query($updateQuery)) {
        echo "Inquiry updated successfully.";
        echo"<br><a href='\POWERFIT FLEX\contact us\contact us\contact us page.php'>Go back</a>";
    } else {
        echo "Error updating inquiry: " . $con->error;
    }

$con->close();
?>
