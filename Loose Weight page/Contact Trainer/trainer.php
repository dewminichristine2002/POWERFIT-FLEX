<?php  
include '\xampp\htdocs\POWERFIT FLEX\all common\nav.php';

?>
<!DOCTYPE html>
<html>
<head>
    <title>Trainer Profile</title>
    
</head>
<header>

</header>
<body>


    <div class="trai-full">
    
    
    <div class="profile-container">
        <img class="profile-image" src="tr3.jpg" alt="Trainer's Profile Picture">
        <div class="profile-details">
            <h2>John Anderson</h2>
            <p>
                <strong>Age:</strong>31<br><br>
                <strong>Specialization:</strong> Weight loss through customized exercise plans<br><br>
                <strong>Experience:</strong> 8 years<br><br>
                <strong>Certification:</strong> Certified by the American Council on Exercise (ACE) and the National Academy of Sports Medicine (NASM)<br>
                <p> Emily's specialization is in the holistic approach to weight loss, combining yoga, meditation, and mindful eating. Her programs not only focus on physical weight loss but also on emotional and mental well-being.</p> 
            </p>
        </div>
    </div>

    <div class="pricing-sec">
        <h1 class="section-tital">packages</h1>
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
                <a href="\POWERFIT FLEX\Loose Weight page\lwpay.php">Pay Now</a>
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
                <a href="\POWERFIT FLEX\Loose Weight page\lwpay.php">Pay Now</a>
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
                <a href="\POWERFIT FLEX\Loose Weight page\lwpay.php">Pay Now</a>
            </div>
        </div>
    </div>
</div>


<footer>

</footer>


</body>
</html>


<style>
    
.profile-container {
    display: flex;
    align-items: center;
    margin: 20px;
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
}
.pricing-sec{
    padding: 1px 2px ;
    background:url('back\ tar.webp');
    background-repeat: no-repeat;
    background-size: cover;
    height: 500px;
    border-radius: 1%;
    margin : 50px 20px 20px 20px;
    padding: 10px 10px 20px 20px;

}
.section-tital{
    text-align: center;
    color: rgb(255, 0, 0) ;
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
    border: 4px solid white;
    position: relative;
    transition: var(--transition);


}
.price-card h4{
    font-size: 25px;
}
.price-card :hover{
    transform: scale(1.4);
}

.price-title{
    color: rgb(255, 0, 0);
    margin: 5px;
    font-size: 25px;
    text-transform: uppercase;

}
.price-title ul li{
    margin-top: 5px;
    color:wheat;
}
.price-card a{
    color: white;
    padding: 8px 1.5px;
    margin-top: 2px;
    background: gray;
    border:2px solid white;
    transition: var(--transition);

}
.price-card a:hover{
    background: blue;
    ;
}




</style>
<?php  
    include '\xampp\htdocs\POWERFIT FLEX\all common\footer.php';
    ?>