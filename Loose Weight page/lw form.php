<?php  
    include '\xampp\htdocs\POWERFIT FLEX\all common\nav.php';
    session_start();
?>  
<!DOCTYPE html>
<html>
<head>
    <title>Fitness Details Form</title>
      <style>
        body {
            font-family: Arial, sans-serif;
            background:url('img/lwformback.jpg');
            background-size: contain;
            background-repeat: no-repeat;
            background-size: cover;
           
        }
        .sucontainer {
            
            width: 600px;
            height:650px;
            padding: 30px 40px;
            border-radius: 10px;
            margin: 30px auto;
            background:transparent;
            border: 2px solid black;
            backdrop-filter: blur(100px);
            box-shadow: 0 0 10px rgb(0,0,0.2);
            color:azure;
            border-radius: 20px;

        }
        
        h1 {
            text-align: center;
        }
      
        label {
            font-weight: bold;
        }
        
        input[type="text"],
        input[type="number"],
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        
        .form-group label,
        .button-container {
            display: block;
        }

        .button-container {
            margin:60px auto;
        }
        
        .left-button {
            float: left;
            width : 85px;
            height : 50px;
            background-color: black;
            color: white;
            border-radius: 10%;
            font-weight: bolder;
            margin: 5px 150px;
        }
        .right-button {
            float: right;
            width : 85px;
            height : 50px;
            background-color:black;
            color: white;
            border-radius: 10%;
            font-weight: bolder;
            margin: 5px 5px;
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
<body>
    <div class="sucontainer">
        <h1>Fitness Details</h1>
        <form action="\POWERFIT FLEX\Loose Weight page\lw form process.php" method="post" >
            <div class="form-group">
                <label for="lwname">Name:</label>
                <input type="text" id="lwname" name="lwname" required>
            </div><br>
            <div class="form-group">
                <label for="lwage">Age:</label>
                <input type="number" id="lwage" name="lwage" required>
            </div><br>
            <div id="subulw">
                <label>Gender:</label>
                <input type="radio" name="lws1" value="male" required>
                <label for="lws1">Male</label>
                <input type="radio" name="lws1" value="female" required>
                <label for="lws1">Female</label>
            </div>
            <br>
            <div id="subulw">
                <label>Where will You Workout:</label>
                <input type="radio" id="lwr2" name="lwr2" value="athome" required>
                <label for="lwr2">At Home</label>
                <input type="radio" id="lwr2" name="lwr2" value="atgym" required>
                <label for="lwr2">At Gym</label>
            </div>
            <br>
            <div class="form-group">
                <label for="lwfitness-level">Fitness Level:</label>
                <select id="lwfitness-level" name="lwfitness-level" required>
                    <option value="beginner">Beginner</option>
                    <option value="intermediate">Intermediate</option>
                    <option value="advanced">Advance</option>
                </select>
            </div>
            <br>
            <div class="form-group">
                <label for="lwpushups">Number of Pushups:</label>
                <select id="lwpushups" name="lwpushups" required>
                    <option value="less-than-5">Less than 5</option>
                    <option value="6-14">6-14</option>
                    <option value="15-plus">15+</option>
                </select>
            </div>
            <div class="button-container">
                <button class="left-button" type="reset">Reset</button>
                <button class="right-button" type="submit">Submit</button>
            </div>
        </form>
    </div>
    
</body>
</html>
<?php  
    include '\xampp\htdocs\POWERFIT FLEX\all common\footer.php';
?>