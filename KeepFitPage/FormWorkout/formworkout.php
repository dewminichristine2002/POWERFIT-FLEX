<?php  
include '\xampp\htdocs\POWERFIT FLEX\all common\nav.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitness Details Form</title>

    <style>
        	.container{
			margin: 10px auto;
			border: 2px solid black;
			border-radius: 5px;
			width: 40%;
			height: 700px;

		}

        body {
            font-family: Arial, sans-serif;
            background-size: cover;
            background-repeat: no-repeat;
            justify-content: center;
            align-items: center;
        }
        .container {
            
            width: 500px;
            height:550px;
            padding: 30px 40px;
        
            border: 1px solid black;
            border-radius: 10px;
            margin: 15px auto;
        }
        
        h1 {
            text-align: center;
        }
      
        label {
            font-weight: bold;
			margin: 5px 5px 5px 10px;
        }
        
        input[type="text"],
        input[type="number"],
        select {
            width: 80%;
            padding: 10px;
			margin: 5px 5px 5px 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        
        .form-group label,
        .button-container {
            display: block;
        }
        
        .left-button {
            float: left;
            width : 85px;
            height : 50px;
            background-color: black;
            color: white;
            border-radius: 10%;
            margin: 20px 50px;
            font-weight: bolder;
        }
        .right-button {
            float: right;
            width : 85px;
            height : 50px;
            margin: 20px 50px;
            background-color:black;
            color: white;
            border-radius: 10%;
            font-weight: bolder;
        }
        .radio group{
            margin: 15px auto;
        }
        button:hover{
            color:black;
            background-color: gray;
        }
        .form-group{
            margin: 5px auto;
        }
    </style>

</head>
<body>
    <div class="container">   
        <h1>Fitness Details</h1>
        <form action="\POWERFIT FLEX\KeepFitPage\KeepFitPage\FormWorkout\processkf.php" method="POST" validateForm()>
            <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            </div>
            
            <div class="form-group">
            <label for="age">Age:</label>
            <input type="number" id="age" name="age" required>
            </div><br>


            <div class="radio group">
            <label>Gender:</label>
            <input type="radio" id="male" name="gender" value="male" required>
            <label for="male">Male</label>

            <input type="radio" id="female" name="gender" value="female" required>
            <label for="female">Female</label>
            </div><br>

            <div class="radio group">
                <label>Where will You Workout:</label>
                    <input type="radio" id="at-home" name="workoutplace" value="athome" required>
                    <label for="at-home">At Home</label>

                    <input type="radio" id="at-gym" name="workoutplace" value="atgym" required>
                    <label for="at-gym">At Gym</label>
            </div><br>


            <div class="form-group">
                <label for="fitnesslevel">Fitness Level:</label>
                <select id="fitnesslevel" name="fitnesslevel" required>
                    <option value="beginner">Beginner</option>
                    <option value="intermediate">Intermediate</option>
                    <option value="advance">Advance</option>
                </select>
            </div>

            <div class="form-group">
                <label for="pushups">Number of Pushups:</label>
                <select id="pushups" name="pushups" required>
                    <option value="less-than-5">Less than 5</option>
                    <option value="6-14">6-14</option>
                    <option value="15-plus">15+</option>
                </select>
            </div>
            <div class="button-container">
                <button class="left-button" type="reset">Reset</button>
                <button class="right-button" type="submit" id="submitbtn">Submit</button>
            </div>
        </form>
    </div>
    
</body>

<script>
    function validateForm(){
    document.getElementById("Fitness Details").addEventListener("submit", function (event) {
        var name = document.getElementById("name").value;
        var age = document.getElementById("age").value;
    
        // Simple validation
        if (name.trim() === "") {
            alert("Name must not be empty.");
            event.preventDefault(); // Prevent form submission
        } 
         else if (age <= 0) {
            alert("Age must be a positive number.");
            event.preventDefault();
        }
    });

}
</script>

</html>

<?php  
    include '\xampp\htdocs\POWERFIT FLEX\all common\footer.php';
    ?>