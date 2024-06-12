<?php  
include '\xampp\htdocs\POWERFIT FLEX\all common\nav.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Form</title>
    <link rel="stylesheet" type="text/css" href="style.css"> 
    
   
</head>
<header>

</header>
<body>
     
    <div class="dv">
        <h1 align="center">Eat Smart, Live Better</h1>
    </div>

    <form action="process_form.php" method="post" class="fill-form">
        <table>
            <tr>
                <td><label for="name">Name:</label></td>
                <td><input type="text" id="name" name="name" required></td>
            </tr>
            <tr>
                <td><label for="age">Age:</label></td>
                <td><input type="number" id="age" name="age" required></td>
            </tr>
            <tr>
                <td><label for="weight">Weight:</label></td>
                <td><input type="text" id="weight" name="weight" required placeholder="Use Kg"></td>
            </tr>
            <tr>
                <td><label for="height">Height:</label></td>
                <td><input type="text" id="height" name="height" required placeholder="Use cm"></td>
            </tr>
            <tr>
                <td><label>Gender:</label></td>
                <td>
                    <input type="radio" id="male" name="gender" value="male">
                    <label for="male">Male</label>
                    <input type="radio" id="female" name="gender" value="female">
                    <label for="female">Female</label>
                </td>
            </tr>
            <tr>
                <td><label for="category">Category:</label></td>
                <td>
                    <select id="category" name="category">
                        <option value="beginner">Beginner</option>
                        <option value="intermediate">Intermediate</option>
                        <option value="advanced">Advanced</option>
                    </select>
                </td>
            </tr>
        </table>
        <button type="button" onclick="window.location.href='food&nutrition.php'">Cancel</button>
    <button type="submit">Submit</button>
    
    </form>
    <script>
        var message = "<?php echo $message; ?>";
        if (message !== "") {
            alert(message);
            console.log(message); // Check the message in the browser console
            window.history.back(); // Redirect the user to the previous page
        }
    </script>
</body>
</html>
<?php  
    include '\xampp\htdocs\POWERFIT FLEX\all common\footer.php';
    ?>

