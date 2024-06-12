<?php  
include '\xampp\htdocs\POWERFIT FLEX\all common\nav.php';
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="\POWERFIT FLEX\muscle buid page\mb view plan\mb plan.css">
    </head>
<header>

</header>
<body>
   <div class="tablediv">
<?php


//connect to the database
$viewplan1 = new mysqli("localhost","root","","powerfit flex");

//check connection
if ($viewplan1->connect_error)
{
die("Connection failed: " . $viewplan1->connect_error);
}

$plan1 = "SELECT username FROM bmdetails WHERE username IS NOT NULL ORDER BY client_id_bm DESC LIMIT 1";

$resultsplan = $viewplan1->query($plan1);

if($resultsplan->num_rows > 0){
    //read data
    $mbclientname = $resultsplan->fetch_assoc();
echo "<p>HELLO! </p>";
echo '<p>' . $mbclientname["username"] . '</p>';
echo "<p>This is your Muscle Build Exercise List.</p><br><br>";
    }
    else
    {
    echo "no results";
    }

    $mbexplan = "SELECT * FROM bmplan_10";
    $mbexercise = $viewplan1->query($mbexplan);
    
    echo '<table>';
    echo '<tr> <th>Exercise</th> <th>Description</th> </tr>';

    if ($mbexercise->num_rows>0) {
       
        while ($row = $mbexercise->fetch_assoc()) {
            $image = $row['ex_image'];
            $description = $row['ex_description'];
           
            echo '<tr>';
           
            echo '<td><img src="data:image/gif;base64,' . base64_encode($image) . '" alt="Image"></td>';
            echo "<td>$description</td>";
            
            echo '</tr>';
        }
        echo '</table>';
    } else {
        echo "No data found.";
    }
    


//close the connection
$viewplan1->close();
?>


</div>

</body>

</html>
<?php  
    include '\xampp\htdocs\POWERFIT FLEX\all common\footer.php';
    ?>