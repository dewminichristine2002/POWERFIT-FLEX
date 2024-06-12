<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "powerfit flex";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to fetch the last entered BMI value
$sql = "SELECT bmi FROM bmi_records ORDER BY timestamp DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $bmi = $row["bmi"];

    // Determine the redirection based on the BMI value
    if ($bmi <= 17) {
        header("Location: malnutrition.php");
    } elseif ($bmi >= 18 && $bmi <= 21) {
        header("Location: healthy.php");
    } elseif ($bmi >= 22 && $bmi <= 25) {
        header("Location: overweight.php");
    } else {
        header("Location: obesity.php");
    }
} else {
    // Handle the case where no BMI data is available
    echo "No BMI data available.";
}

// Close the database connection
$conn->close();
?>
