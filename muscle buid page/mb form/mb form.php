<?php  
include '\xampp\htdocs\POWERFIT FLEX\all common\nav.php';
session_start();
?>
<!DOCTYPE html>
<html >
<head>
    <title>Workout Plan Form</title>
    <style>
		.container{
			margin: 10px auto;
			border: 2px solid black;
			border-radius: 5px;
			width: 40%;
			height: 700px;
            backdrop-filter: blur(100px);
            box-shadow: 0 0 10px rgb(0,0,0.2);
            color:black;
            border-radius: 20px;

		}

        body {
            font-family: Arial, sans-serif;
            background-image: url('mbformbg.webp');
            background-size: cover;
            background-repeat: no-repeat;
            justify-content: center;
            align-items: center;
        }
        .sucontainer {
            
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
        #subulw{
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
<header>

</header>
<body>
<script>
function populateage() {
    var ageDropdown = document.getElementById("age");
   

   
    for (var i = 1; i <= 75; i++) {
        var option = document.createElement("option");
        option.value = i;
        option.text = i;
        ageDropdown.appendChild(option);
    }
}
window.onload = populateage;
    </script>
<div class="container">
	<h1>Fitness Details</h1>
	
	<form action="\POWERFIT FLEX\muscle buid page\mb form\mb proccess.php" method="POST">

	    <div class="form-group">
	    <label for="username">Username :</label>
		<input type="text" name="username" id="username">
	    </div><br>
        
        <div class="form-group">
		<label for="age">Age :</label>
        <select id="age" name="age" required>

        </select>
		</div><br>
        
		<div id="subulw">
		<label>Gender :</label>
		<input type="radio" name="gender" id="male" value="male">
		<label for="male">Male</label>

		<input type="radio" name="gender" id="female" value="female">
		<label for="female">Female</label>
		</div><br>
           
		<div class="form-group">
		<label for="flevel">Fitness Level :</label>
		<select name="flevel" id="flevel">
			<option value="beginner" >Beginner</option>
			<option value="intermidiate">Intermidiate</option>
			<option value="advance">Advance</option>
		</select>
		</div><br>
        
		<div id="subulw">
		<label>Where will you workout? </label>
		<input type="radio" name="place" id="home" value="home">
		<label for="home">At Home</label>

		<input type="radio" name="place" id="gym" value="gym">
		<label for="gym">At Gym</label>
		</div><br>
        
		<div class="form-group">
		<label for="pushups">No of Push-ups :</label>
		<select name="pushup" id="pushup">
			<option value="Less than 5" >Less than 5</option>
			<option value="6-14">6-14</option>
			<option value="15+">15+</option>
		</select>
	    </div><br>
		<div class="button-container">
                <button class="left-button" type="reset"> Reset</button>
                <button class="right-button" type="submit" id="submitbtn">Submit</button>
        </div>
		
		
	</form>
</div>


</body>
</html>
<?php  
    include '\xampp\htdocs\POWERFIT FLEX\all common\footer.php';
    ?>