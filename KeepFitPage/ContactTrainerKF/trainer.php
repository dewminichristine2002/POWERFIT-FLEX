<?php  
include '\xampp\htdocs\POWERFIT FLEX\all common\nav.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Trainer Profile</title>
    
<style>
.trai-full{
display: flex;
flex-direction: column;
}
.profile-container {
display: flex;
align-items: center;
margin: 20px;
color:black;
}

.profile-image {
width: 350px;
height:  350px;
border-radius: 20%;
}

.profile-details {
padding-left: 10px;
font-size: 30px;
margin-left: 20px;
font-size: medium;
color:black;
}
.pricing-sec{
padding: 1px 2px ;
background: url('card-and-checkout-header-copy-1024x421.jpg');
height: 500px;
background-size: cover;

margin: 50px 20px 20px 20px;
padding: 10px 10px 20px 20px;

}
.section-title{
text-align: center;
color: dark blue;
font-size: 40px;

}
.pricing-row{
display: flex;
justify-content: center;
gap: 200px;
padding: 1px 0;
margin-top: 2px;

}
.price-card{
padding: px;
width: 300px;
height: 350px;
border-radius: 20px;
display: flex;
flex-direction: column;
align-items: center;
border: 4px solid red;
position: relative;
transition: var(--transition);


}
.price-card h4{
font-size: 35px;
}
.price-card :hover{
transform: scale(1.4);
}

.price-title{
color:black;
margin: 5px;
font-size: 25px;
text-transform: uppercase;

}
.price-title ul li{
margin-top: 5px;
color: blue;
}
.price-card a{
padding: 8px 1.5px;
margin-top: 2px;
background: gray;
border:2px red;
transition: var(--transition);

}
.price-card a:hover{
background: transparent;
}
.link{
    -decoration:none;

}

.feedback{
padding: 8px 1.5px;
margin:0 auto;
background: gray;
border:2px red;
width:60px;
}

.feedback a:hover{
    color:red;
    background:aquablue;
}



    </style>
    
</head>
<body>


    <div class="trai-full">
    
    
    <div class="profile-container">
        <img class="profile-image" src="\POWERFIT FLEX\KeepFitPage\KeepFitPage\ContactTrainerKF\trainer.jpg" alt="Trainer's Profile Picture">
        <div class="profile-details">
            <h2>Emily Davis</h2>
            <p>
                <strong>Age:</strong>31<br><br>
                <strong>Specialization:</strong> Keep Fit<br><br>
                <strong>Experience:</strong> 8 years<br><br>
                <strong>Certification:</strong> Certified by the American Council on Exercise (ACE) and the National Academy of Sports Medicine (NASM)<br>
                <p> Emily's specialization is in the holistic approach to weight loss, combining yoga, meditation, and mindful eating. Her programs not only focus on physical weight loss but also on emotional and mental well-being.</p> 
            </p>
        </div>
    </div>

    <div class="pricing-sec">
        <h1 class="section-title">Pricing</h1>
        <div class="pricing-row">
            <div class="price-card">
                <h4>$90</h4>
                <h3 class="price-title">Starter</h3>
                <ul>
                    <li>Duration 3 Months</li>
                    <li>Progress Tracking</li>
                    <li>Personalized Plan</li>
                    <li>Regular Check-Ins</li>
                    <li>Workout Sessions</li>
                    
                </ul>
                <a class="link" href="\POWERFIT FLEX\KeepFitPage\KeepFitPage\ContactTrainerKF\kfpay\kfpay.php">Purchase</a>
            </div>
            <div class="price-card">
                <h4>$160</h4>
                <h3 class="price-title">Professional</h3>
                <ul>
                    <li>Duration 6 Months</li>
                    <li>Progress Tracking</li>
                    <li>Personalized Plan</li>
                    <li>Regular Check-Ins</li>
                    <li>Workout Sessions</li>
                </ul>
                <a class="link" href="\POWERFIT FLEX\KeepFitPage\KeepFitPage\ContactTrainerKF\kfpay\kfpay.php">Purchase</a>
            </div>
            <div class="price-card">
                <h4>$280</h4>
                <h3 class="price-title">Ultar</h3>
                <ul>
                    <li>Duration 1 year</li>
                    <li>Progress Tracking</li>
                    <li>Personalized Plan</li>
                    <li>Regular Check-Ins</li>
                    <li>Workout Sessions</li>
                </ul>
                <a class="link" href="\POWERFIT FLEX\KeepFitPage\KeepFitPage\ContactTrainerKF\kfpay\kfpay.php">Purchase</a>
                
            </div>
        </div>
       <div class="feedback"> <a class="link" href="\POWERFIT FLEX\KeepFitPage\KeepFitPage\feedback\feedback.php">Feedback</a></div>
    </div>
</div>




</body>
</html>
<?php  
    include '\xampp\htdocs\POWERFIT FLEX\all common\footer.php';
?>