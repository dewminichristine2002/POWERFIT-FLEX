<?php
include 'components/connect.php';

if (isset($_GET['id'])) {
    // Sanitize the input to prevent SQL injection
    $id = mysqli_real_escape_string($connection, $_GET['id']);
    $sql = "DELETE FROM userdetails WHERE id = $id";

    if ($connection->query($sql) === TRUE) {
        header("Location: view_users.php"); // Redirect back to the user listing page after successful deletion.
        exit();
    } else {
        echo "Error deleting record: " . $connection->error;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="components/style.css"> 
    <title>View Users</title>
</head>
<body>
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


<header>
        <div class="logo">
            <img src="images/logo.jpeg" alt="Your Logo">
        </div>
        <h3>now you can delete your user details</h3>
        <nav>
            <ul>
                <li><a href="backend-usedetails.php">View Users</a></li>
               
                
              
            </ul>
        </nav>
    </header>
    <br>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>age</th>
                <th>weight</th>
                <th>height</th>
                <th>gender</th>
                <th>category</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM userdetails";
            $result = $connection->query($sql);

            if (!$result) {
                die("Invalid query: " . $connection->error);
            }
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>" . $row["id"] . "</td>
                    <td>" . $row["name"] . "</td>
                    <td>" . $row["age"] . "</td>
                    <td>" . $row["weight"] . "</td>
                    <td>" . $row["height"] . "</td>
                    <td>" . $row["gender"] . "</td>
                    <td>" . $row["category"] . "</td>
                    <td>
                      
                        <a href='delete_user.php?id=" . $row["id"] . "' onclick='return confirm(\"Are you sure you want to delete this user?\");'>Delete</a>
                    </td>
                </tr>";
            }
            ?>
        </tbody>
    </table>


<br>
<br>

    <div class="footer">
        &copy; 2023 Powerfit Flex
    </div>
    
</body>
</html>
