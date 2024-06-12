<!DOCTYPE html>
<html>
    <head>
    <link href="\POWERFIT FLEX\logo page\create new account\register styles.css" rel="stylesheet">
    </head>
    <header>
    <?php  
include '\xampp\htdocs\POWERFIT FLEX\all common\nav.php';

?>
    </header>
    <body>

    <script>// Add options for Date of Birth (Day, Month, Year) fields
   function populateDateOfBirth() {
    var dayDropdown = document.getElementById("dob");
    var monthDropdown = document.getElementsByName("dob_month")[0];
    var yearDropdown = document.getElementsByName("dob_year")[0];

    // Populate Day (1 - 31)
    for (var i = 1; i <= 31; i++) {
        var option = document.createElement("option");
        option.value = i;
        option.text = i;
        dayDropdown.appendChild(option);
    }

    // Populate Month (1 - 12)
    for (var i = 1; i <= 12; i++) {
        var option = document.createElement("option");
        option.value = i;
        option.text = i;
        monthDropdown.appendChild(option);
    }

    // Populate Year (1955 - 2015)
    for (var i = 1955; i <= 2015; i++) {
        var option = document.createElement("option");
        option.value = i;
        option.text = i;
        yearDropdown.appendChild(option);
    }
}

// Call the function ageto populate Date of Birth options when the page loads
window.onload = populateDateOfBirth;
</script>

    <div class="formclass">
         <h1>Registration Form</h1>
    <form action="\POWERFIT FLEX\logo page\create new account\register process.php" method="post" onsubmit="return checkPassword()">

        <label for="fname">First Name : </label><br>
        <input type="text" name="fname" id="fname" required>
        <br><br>

        <label for="lname">Last Name : </label><br>
        <input type="text" name="lname" id="lname" required>
        <br><br>

        <label for="dob">Date of Birth:</label>
        <select id="dob" name="dob_day" required>
            <!-- Options for days 1 - 31 (populate these) -->
        </select>
        <select name="dob_month" required>
            <!-- Options for months 1 - 12 (populate these) -->
        </select>
        <select name="dob_year" required>
            <!-- Options for years 1955 - 2015 (populate these) -->
        </select>
        <br><br>

        <label for="email" >Email : </label><br>
        <input type="text" name="email" id="email" required pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}">
        <br><br>

        <label for="contact">Contact Number : </label><br>
        <input type="tel" name="contact" id="contact" pattern="[0-9]{10}" required>
        <br><br>

        <label for="uname">Userame : </label><br>
        <input type="text" name="uname" id="uname" required>
        <br><br>
 
        <label for="psw">Password : </label><br>
        <input type="password" placeholder="Enter Password" name="psw" id="psw" required>
        <br><br>

        <label for="psw-repeat">Repeat Password : </label><br>
         <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
         <br><br>

         <div>
            <a class="cancelbtn" href="\POWERFIT FLEX\logo page\login form\Login form.php">Cancel</a>
            <button type="submit" class="signupbtn" name="submit">Submit</button>
         </div>

    </div>        
    </form>
   
     
        
    </body>
    <footer>

    </footer>
</html>
<?php  
    include '\xampp\htdocs\POWERFIT FLEX\all common\footer.php';
?>