<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="components/style.css"> 
    <title>View bm calculations</title>
</head>
<header>
        <div class="logo">
            <img src="images/logo.jpeg" alt="Your Logo">
        </div>
        <h3>Welcome Admin!</h3>
        <nav>
            <ul>
                <li><a href="backend-usedetails.php">View Users</a></li>
               
                <li><a href="bmcalculations.php">View BM Calculations</a></li>
                <li><a href="viewcontact.php">View Contacts</a></li>
            </ul>
        </nav>
    </header>
    <style>
        
        
body{
    margin:0;
    padding:0;
}
header {
    
    background-color: black;
    color: white;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding:20px 100px;

}


.logo img {
    width: 100px;
}


nav ul {
    list-style-type: none;
}

nav ul li {
    display: inline;
    margin-right: 20px; 
}

nav ul li:last-child {
    margin-right: 0; 
}

nav a {
    text-decoration: none;
    color: white;
    font-weight: bold;
}

table{
  width:88%;
    
 margin-left:80px
}
.footer {
            background-color: black;
            color: white;
            text-align: center;
            padding: 10px 0;
        }

        </style>
<br>
<?php

$servername = "localhost";
$username = "root";       
$password = "";            
$dbname = "powerfit_flex"; 


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT * FROM bmi_records";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    echo "<table border='1'>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>User ID</th>";
    echo "<th>BMI</th>";
    echo "<th>BMI Range</th>";
    echo "<th>Timestamp</th>";
    echo "</tr>";

    
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["user_id"] . "</td>";
        echo "<td>" . $row["bmi"] . "</td>";
        echo "<td>" . $row["bmi_range"] . "</td>";
        echo "<td>" . $row["timestamp"] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No records found";
}


$conn->close();


?>
<br>
<br>
<div class="footer">
        &copy; 2023 Powerfit Flex
    </div>