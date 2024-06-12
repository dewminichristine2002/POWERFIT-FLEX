<?php  
include '\xampp\htdocs\POWERFIT FLEX\all common\nav.php';
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
    <link href="\POWERFIT FLEX\Loose Weight page\lwtbsryle.css" rel="stylesheet">
    </head>
<header>

</header>
<body>
   <div class="tablediv">
<?php


//connect to the database
$lwviewplan = new mysqli("localhost","root","","powerfit flex");

//check connection
if ($lwviewplan->connect_error)
{
die("Connection failed: " . $lwviewplan->connect_error);
}

$lwplan1 = "SELECT username FROM lwdetails WHERE username IS NOT NULL ORDER BY client_id_lw DESC LIMIT 1";

$lwresultsplan = $lwviewplan->query($lwplan1);

if($lwresultsplan->num_rows > 0){
    //read data
    $lwclientname = $lwresultsplan->fetch_assoc();
echo "<p>HELLO! </p>";
echo '<p>' . $lwclientname["username"] . '</p>';
echo "<p>This is your Loose Weight Exercise List.</p><br><br>";
    }
    else
    {
    echo "no results";
    }

    $lwexplan = "SELECT * FROM lwplan2";
    $lwexercise = $lwviewplan->query($lwexplan);
    
    echo '<table>';
    echo '<tr> <th>Exercise</th> <th>Description</th> </tr>';

    if ($lwexercise->num_rows>0) {
       
        while ($row = $lwexercise->fetch_assoc()) {
            $image = $row['lw_ex_image'];
            $description = $row['lw_ex_description'];
           
            echo '<tr>';
           
            echo '<td><img src="data:image/gif;base64,' . base64_encode($image) . '" alt="Image" length=200px width="200px"></td>';
            echo "<td>$description</td>";
            
            echo '</tr>';
        }
        echo '</table>';
    } else {
        echo "No data found.";
    }
    


//close the connection
$lwviewplan->close();
?>


</div>

</body>

</html>
<?php  
    include '\xampp\htdocs\POWERFIT FLEX\all common\footer.php';
    ?>