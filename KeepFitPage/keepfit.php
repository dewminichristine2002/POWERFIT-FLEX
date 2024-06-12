<?php  
include '\xampp\htdocs\POWERFIT FLEX\all common\nav.php';
?>
session_start();
<!DOCTYPE html>
<html>
       <head>
            
            <title>Keep Fit</title>
            <style>
              
.image-container{
    display: inline-flex;
    width: 100%;
}
img{
    width: 33.3%;
    height:350px;
}

body{
    background-color:white;
    font-size: medium;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

.content{
    padding: 5px;
}

h1{
    text-align: center;
    font-size: 42px;
    font-weight: bold;
    font-style: normal;
    color: darkblue;
}

.MainPara{
    text-align:center;
    font: size 24px;
    color:white;
    font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    padding: 50px;
    background-color: black;
    line-height: 1.15cm;
}


.paragraph{
    font-size: 20px;
    font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    text-align: center;
    line-height: 1.15cm;
    padding: 5px 30px;
}


.paragraph-container{
    display:inline-flex;
    flex-direction: row;
    justify-content: space-around;
    font-size: 14px;
    font-style: normal;
    font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
}



.parasub{
    font-size: 24px;
    max-width: 45%;
    text-align:center;
    padding:50px;
    margin: 40px;
}
 

.button-container{
    display: flex;
    flex-direction: row;
    justify-content: space-around;
    align-items: center;
    padding-bottom: 25px;

}


.but1{
    border: 2px;
    background-color: grey;
    color: black;
    font-weight: bold;
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
    text-align:center;
    width: 120px;
    height: 40px;
    border-radius: 40px;
    text-decoration: none;

}

.but1:hover{
    color: red;
    background: lightblue;
}




            </style>
    </head>
        <body>
            <div class="image-container">
                    <img src="\POWERFIT FLEX\KeepFitPage\KeepFitPage\Images\keepfit1.jpg" alt="keepfit1">
                    <img src="\POWERFIT FLEX\KeepFitPage\KeepFitPage\Images\keepfit2.jpg" alt="keepfit2">
                    <img src="\POWERFIT FLEX\KeepFitPage\KeepFitPage\Images\keepfit3.png" alt="keepfit3">
            </div>
<div class=content>
            <h1> "Maintaining fitness isn't a destination; it's a lifestyle."</h1>
            <p class="MainPara">
            Welcome to our 'Keep Fit' haven, where the pursuit of fitness transcends the ordinary 
            and becomes an extraordinary journey of well-being and vitality. As your dedicated online 
            fitness trainers, we're here to guide, motivate, and empower you to achieve and sustain the 
            peak of your physical and mental health. 'Keeping fit' isn't just a catchphrase; it's a 
            philosophy that champions strength, resilience, and the boundless potential within each of us. 
            In this realm, we don't just focus on the 'ideal' body; we celebrate every step you take 
            towards a healthier, happier you. It's about achieving your personal best, forging a profound 
            connection between your mind and body, and embracing a life of vitality and wellness. Join us on 
            this invigorating journey to 'Keep Fit' and experience the transformation of a lifetime.
            </p>

            
            <p class="paragraph">  
            Celestial Fitness is your guiding star on the path to 'Keeping Fit,' a journey designed for those 
            who seek enduring wellness without the pressures of extreme athleticism. With our time-tested fitness 
            methodology and a promise of 'maximum results with minimal effort,' we've been the cornerstone of transformation 
            for individuals worldwide. Our unwavering commitment is to empower ordinary men and women to embrace a lifestyle 
            of vitality, vigor, and self-assuredness. We're here to make your fitness aspirations a living reality, ensuring 
            that every step you take with us leaves you feeling stronger, healthier, and more in tune with your inner well-being.
            </p>
</div>            
            <br>
            <br>

            <div class="paragraph-container">
            <p class="parasub">Click here to <br> fill the Fitness Details form.</p>
            <p class="parasub">Click here to <br>View your personalized Workout Plan.</p>
            <p class="parasub">Click here to <br> Contact a Fitness Trainer.</p>
            </div>


            <form>
            <div class="button-container">
                <a href="\POWERFIT FLEX\KeepFitPage\KeepFitPage\FormWorkout\formworkout.php" class="but1">Form</a>
                <a href="\POWERFIT FLEX\KeepFitPage\KeepFitPage\KFWorkout Plans\kfViewPlan.php" class="but1">View Plan</a>
                <a href="\POWERFIT FLEX\KeepFitPage\KeepFitPage\ContactTrainerKF\trainer.php" class="but1">Contact Trainer</a>

             
            </div>
            </form>
                 
       </body>
</html>
<?php  
    include '\xampp\htdocs\POWERFIT FLEX\all common\footer.php';
    ?> 
























