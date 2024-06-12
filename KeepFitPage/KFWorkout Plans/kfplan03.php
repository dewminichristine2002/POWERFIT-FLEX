<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="\POWERFIT FLEX\KeepFitPage\KeepFitPage\KFWorkout Plans\kfplan.css">
    </head>
<body>
   <div class="tablekf">
<?php


//connect to the database
$viewplan1 = new mysqli("localhost","root","","powerfit flex");

//check connection
if ($viewplan1->connect_error)
{
die("Connection failed: " . $viewplan1->connect_error);
}

$plan1 = "SELECT username FROM kfdetails WHERE username IS NOT NULL ORDER BY client_id_kf DESC LIMIT 1";

$resultsplan = $viewplan1->query($plan1);

if($resultsplan->num_rows > 0){
    //read data
    $kfclientname = $resultsplan->fetch_assoc();
echo "<p>HELLO! </p>";
echo '<p>' . $kfclientname["username"] . '</p>';
echo "<p>This is your Keep Fit Exercise List.</p><br><br>";
    }
    else
    {
    echo "no results";
    }

    $kfexplan = "SELECT * FROM kfplan03";
    $kfexercise = $viewplan1->query($kfexplan);
    
    echo '<table>';
    echo '<tr> <th>Exercise</th> <th>Description</th> </tr>';

    if ($kfexercise->num_rows>0) {
       
        while ($row = $kfexercise->fetch_assoc()) {
            $image = $row['kf_ex_image'];
            $description = $row['kf_ex_description'];
           
            echo '<tr>';
           
            echo '<td><img src="data:image/gif;base64,' . base64_encode($image) . '" alt="Image  width="200px" height="200px""></td>';
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