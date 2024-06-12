<?php  
include '\xampp\htdocs\POWERFIT FLEX\all common\nav.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Trainer Profile</title>
    <link rel="stylesheet" href="\POWERFIT FLEX\muscle buid page\mbContact Trainer\mbtrainer styles.css">
</head>
<body>


    <div class="trai-full">
    
    
    <div class="profile-container">
        <img class="profile-image" src="mbtr1.jpg" alt="Trainer's Profile Picture">
        <div class="profile-details">
            <h2>Devin Mitchell</h2>
            <p>
                <strong>Age:</strong>31<br><br>
                <strong>Specialization:</strong>Build Muscle<br><br>
                <strong>Experience:</strong> 12 years<br><br>
                <strong>Certification:</strong> CrossFit Level 2 Trainer<br>
                <p> Mark Mitchell, at 32, is a seasoned fitness pro specializing in strength training. With a decade of experience and ACE certification, she's a pillar in the muscle-building world. Sarah goes the extra mile by providing personalized nutritional guidance to complement her clients' workouts, ensuring they achieve their fitness goals. Her approach is rooted in customization, and her warm and motivating personality creates a supportive environment where clients thrive.</p> 
            </p>
        </div>
    </div>

    <div class="pricing-sec">
        <h1 class="section-tital">Packages</h1>
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
                <a href="\POWERFIT FLEX\muscle buid page\mbContact Trainer\mbpayform.php" id="pn">Pay Now</a>
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
                <a href="\POWERFIT FLEX\muscle buid page\mbContact Trainer\mbpayform.php" id="pn">Pay Now</a>
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
                <a href="\POWERFIT FLEX\muscle buid page\mbContact Trainer\mbpayform.php" id="pn">Pay Now</a>
            </div>
        </div>
    </div>
</div>


</body>
</html>



<?php  
    include '\xampp\htdocs\POWERFIT FLEX\all common\footer.php';
?>