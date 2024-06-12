<?php
// Connect to the database
$con = new mysqli("localhost", "root", "", "powerfit flex");

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

// Fetch and display all inquiries
$name=$_POST["name"];
$query = "SELECT * FROM Inquiredetails WHERE inqname='$name'";
$result = $con->query($query);

if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>Name</th><th>Email</th><th>Message</th><th>Action</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['inqname'] . "</td>";
        echo "<td>" . $row['inqemail'] . "</td>";
        echo "<td>" . $row['inqmessage'] . "</td>";
        
        
        echo "<td><a href='\POWERFIT FLEX\contact us\contact us\Inquary Proses\updateMesage.php?id=" . $row['inquireid']. "'>Edit</a> <a href='\POWERFIT FLEX\contact us\contact us\Inquary Proses\delete_inquiry.php?id=" . $row['inquireid'] . "'>Delete</a>  </td>";

        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No inquiries found.";
}

$con->close();


?>
