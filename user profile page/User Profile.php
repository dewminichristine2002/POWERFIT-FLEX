<?php  
     include '\xampp\htdocs\POWERFIT FLEX\all common\nav.php';
     session_start();
    
 ?>
<!DOCTYPE html>
<html>
    <head>
        <title>User Profile</title>
       
        <style>

body{
    
    display: block;
    margin: 0 auto;
    text-align:center;
    background-image: url('probg.avif');
    background-size: cover;
    background-repeat: no-repeat;
}

h1{
    text-align: center;
    font-size: 40px;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
}
.link container{
    display: flex;
   
}
#logoutbutton{
  
    width: 100px;
    height:35px;
    background-color: lightgreen;
    border-radius: 10px;
    border:2px solid gray;
    margin: 0 110px 15px 110px;
}
#logoutbutton:hover{
 background-color: lightcyan;
 color: black;
}
#changePW{
    margin: 0 110px 15px 110px;
    text-decoration: none;
    background-color: lightgreen;
    border-radius: 10px;
    border:2px solid gray;
    width: 150px;
    height:35px;
}
#changePW:hover{
    background-color: lightcyan;
 color: black;
}
table{
    margin:0 auto;
    width: 40%;
}
td{
    text-align: justify;
    height:35px;
    width: 45px;
    font-family: Georgia, 'Times New Roman', Times, serif;
    font-weight: bold;
}

#up{
    text-decoration: none;
    background: #0056b3;
    color: lightgray;
    border: 2px solid blue;
}
#up:hover{
    background-color: lightblue;
    color: black;
}

button{
    font-family: Georgia, 'Times New Roman', Times, serif;
    font-weight: bold;
}
#delete_cnumButton:hover{
    color: red;
}
#delete_cnumButton{
    border: 3px solid red;
    width: 60px; 
}
#delete_emailButton{
    border: 3px solid red;
    width: 60px;
}
#delete_emailButton:hover{
    color: red;
}
#delete_accountButton{
    border: 3px solid red;
    border-radius: 20px;
    width: 150px;
    height: 50px;
   
}
#delete_accountButton:hover{
    color: red;
}


        </style>
    </head>
    <body>
        <h1>Personal Details</h1>
        <div class="profile-photo">
            <img src="\POWERFIT FLEX\user profile page\images.png" alt="profile-photo">
            <button id="delete_accountButton">Delete Account</button> 

    <script>
    document.getElementById("delete_accountButton").addEventListener("click", function() {
    alert("Your Account will be deleted. Please confirm.");
    // Redirect to another page
    window.location.href = "deleteaccount.php";
     });
    </script>
        </div>
        <br>


    <?php
    //connect to the database
   $con = new mysqli("localhost","root","","powerfit flex");

    //check connection
    if ($con->connect_error)
     {
    die("Connection failed: " . $con->connect_error);
    }

       $Uname = $_SESSION['UserName'];
     
       if(isset($_SESSION["UserName"])){
        $query = "SELECT f_name, l_name, UserName, user_email, User_contact_no FROM register_user WHERE UserName = '$Uname'";
    
        $result = $con->query($query);

           
           if ($result->num_rows == 1){
           // User found, fetch their data
           $row = $result->fetch_assoc();

           $fname = $row['f_name'];
           $lname = $row['l_name'];
           $uname = $row['UserName'];
           $email =$row['user_email'];
           $conum =$row['User_contact_no'];
           
           echo "<table>";

           echo '<tr>';
           echo '<td>'."Username: ". $uname.'</td>';
           echo '</tr>';
   
           echo '<tr>';
           echo '<td>'."First Name: ". $fname.'</td>';
           echo '<td>'.'<a href="\POWERFIT FLEX\user profile page\update_fname.php" id="up">'."Update".'</a>'.'</td>';
           echo '</tr>';
   
           echo '<tr>';
           echo '<td>'."Last Name: ". $lname.'</td>';
           echo '<td>'.'<a href="\POWERFIT FLEX\user profile page\update_lname.php"  id="up">'."Update".'</a>'.'</td>';
           echo '</tr>';

           echo '<tr>';
           echo '<td>'."Contact No.: ". $conum.'</td>';
           echo '<td>'.'<a href="\POWERFIT FLEX\user profile page\update_conumber.php" id="up">'."Update".'</a>'.'</td>';
           echo '<td>'.'<button id="delete_cnumButton">'."Delete".'</button>'.'</td>';
           echo '</tr>';
   
           echo '<tr>';
           echo '<td>'."Email: ". $email.'</td>';
           echo '<td>'.'<a href="\POWERFIT FLEX\user profile page\update_email.php"  id="up">'."Update".'</a>'.'</td>';
           echo '<td>'.'<button id="delete_emailButton">'."Delete".'</button>'.'</td>';
           echo '</tr>';
   
           echo "</table>";
           
   
           $con->close();   
       
           }
        }
        else {
            echo '<p style= "text-align:center;font-weight:bolder; font-size:large; color:red;">'."Please login to view your profile."."</p>";
        }
    ?>
<script>
document.getElementById("delete_cnumButton").addEventListener("click", function() {
    alert("The given Email will be deleted.Please confirm.");
    // Redirect to another page
    window.location.href = "delete_contactno.php";
});

document.getElementById("delete_emailButton").addEventListener("click", function() {
    alert("The given Email will be deleted.Please confirm.");
    // Redirect to another page
    window.location.href = "delete_email.php";
});

</script>

     
   <br><br>
        <div class="link container">
           <button id="changePW">Change Password</button>
           <button id="logoutbutton">Log Out</button> 
        </div>
        

<script>
document.getElementById("logoutbutton").addEventListener("click", function() {
   
    // Redirect to another page
    window.location.href = "logout.php";
    
});
</script>

    </body>

</html>

<?php  
    include '\xampp\htdocs\POWERFIT FLEX\all common\footer.php';
?>