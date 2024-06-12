<?php
// Connect to the database
$con = new mysqli("localhost","root","","powerfit flex");

//Check Connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

if (isset($_GET['feedback_id'])) {
    $feedbackid = $_GET['feedback_id'];

    $deleteQuery = "DELETE FROM feedback WHERE feedback_id = '$feedbackid'";

    if ($con->query($deleteQuery)) {
        echo "Feedback deleted successfully.";
    } else {
        echo "Error deleting feedback: " . $con->error;
    }
} else {

    echo "No Feedback Found!";
}

$con->close();
?>

