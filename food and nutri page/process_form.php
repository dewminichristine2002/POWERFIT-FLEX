<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "powerfit flex";

$connection =new mysqli($servername, $username, $password, $database);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

$name = $_POST['name'];
$age = $_POST['age'];
$weight = $_POST['weight'];
$height = $_POST['height'];
$gender = $_POST['gender'];
$category = $_POST['category'];

$sql = "INSERT INTO userdetails (name, age, weight, height, gender, category)
        VALUES ('$name', $age, $weight, $height, '$gender', '$category')";

if ($connection->query($sql) === TRUE) {
    $message = "Record inserted successfully!";
} else {
    $message = "Error: " . $sql . "<br>" . $connection->error;
}


// Retrieve weight and height values from the form
$weight = $_POST['weight'];
$height_cm = $_POST['height']; // Height in centimeters

// Convert height from centimeters to meters
$height_meters = $height_cm / 100;

// Calculate BMI
$bmi = $weight / ($height_meters * $height_meters);

// Determine the BMI range and message
if ($bmi <= 17) {
    $bmiRange = "Malnutrition";
} elseif ($bmi > 17 && $bmi <= 21) {
    $bmiRange = "Healthy";
} elseif ($bmi > 21 && $bmi <= 25) {
    $bmiRange = "Overweight";
} else {
    $bmiRange = "Obesity";
}

$message = "Your BMI is $bmi. BMI Range: $bmiRange";
$user_id = mysqli_insert_id($connection); // Get the ID of the last inserted user
$sql = "INSERT INTO bmi_records (user_id, bmi, bmi_range) VALUES ($user_id, $bmi, '$bmiRange')";

if ($connection->query($sql) === TRUE) {
    // BMI record inserted successfully
} else {
    // Handle the error if insertion fails
    $message .= " Error inserting BMI record: " . $connection->error;
}

$connection->close();

?>

<script>
    var message = "<?php echo $message; ?>";
    if (message !== "") {
        alert(message);
        console.log(message);

        // Redirect the user based on BMI range
        if ("<?php echo $bmiRange; ?>" === "Malnutrition") {
            window.location.href = 'malnutrition.php';
        } else if ("<?php echo $bmiRange; ?>" === "Healthy") {
            window.location.href = 'healthy.php';
        } else if ("<?php echo $bmiRange; ?>" === "Overweight") {
            window.location.href = 'overweight.php';
        } else {
            window.location.href = 'obesity.php';
        }
    }
</script>
