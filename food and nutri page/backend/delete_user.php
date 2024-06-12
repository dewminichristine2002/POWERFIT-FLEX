<?php
include 'components/connect.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM userdetails WHERE id = $id";
    
    if ($connection->query($sql) === TRUE) {
        header("Location: backend-usedetails.php"); 
        exit();
    } else {
        echo "Error deleting record: " . $connection->error;
    }
}
?>