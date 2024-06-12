<?php
// Connect to the database
$con = new mysqli("localhost", "root", "", "powerfit flex");

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

    $inquireid = $_GET['id'];

    // Delete the inquiry if it belongs to the logged-in user
    $deleteQuery = "DELETE FROM Inquiredetails WHERE inquireid = '$inquireid'";

    if ($con->query($deleteQuery)) {
        echo "Inquiry deleted successfully.";
        echo"<br><a href='\POWERFIT FLEX\contact us\contact us\contact us page.php'>Go back</a>";
    } else {
        echo "Error deleting inquiry: " . $con->error;
    }

$con->close();
?>
