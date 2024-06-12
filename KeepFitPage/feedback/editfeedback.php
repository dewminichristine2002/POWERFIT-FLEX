<?php
 //Connect to the database
$con = new mysqli("localhost","root","","powerfit flex");

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

if (isset($_GET['feedback_id'])) {
    $feedbackid = $_GET['feedback_id'];


    $query = "SELECT * FROM feedback WHERE feedback_id = '$feedbackid'";
    $result = $con->query($query);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $fusername = $row['username'];
        $fuseremail = $row['email'];
        $fuserfeedback = $row['feedback'];

    } else {
        echo "Feedback not found or you do not have permission to edit it.";
        exit();
    }
} else {

    echo "No Feedback specified for editing.";
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $newUsername = $_POST["name"];
    $newEmail = $_POST["email"];
    $newFeedback = $_POST["feedback"];

    $updateQuery = "UPDATE feedback SET username = '$newUsername', email = '$newEmail', feedback = '$newFeedback' WHERE feedback_id = '$feedbackid'";

    if ($con->query($updateQuery)) {
        echo "Feedback updated successfully.";
    } else {
        echo "Error! " . $con->error;
    }
}

$con->close();



?>
