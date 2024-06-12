<?php
// Connect to the database
$con = new mysqli("localhost","root","","powerfit flex");

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

$query = "SELECT * FROM feedback";
$result = $con->query($query);

if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>Userame</th><th>Email</th><th>Feedback</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['username'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['feedback'] . "</td>";
        echo "<td><a href='updatefeedback.php?feedback_id=" . $row['feedback_id'] . "'>Edit</a></td>";
        echo "<td><a href='deletefeedback.php?feedback_id=" . $row['feedback_id'] . "'>Delete</a></td>";
        echo "</tr>";
  
    }
    echo "</table>";
} else {
    echo "No Feedback Found!";
}

$con->close();
?>
