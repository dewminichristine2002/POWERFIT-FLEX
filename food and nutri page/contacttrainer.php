<?php  
include '\xampp\htdocs\POWERFIT FLEX\all common\nav.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Contact Trainer</title>
    <link rel="stylesheet" type="text/css" href="style.css"> 
   
</head>
<body>
  
<style>



ul {
  list-style: none;
}

.main__heading {
  font-weight: 600;
  font-size: 2.25em;
  margin-bottom: 0.75em;
  text-align: center;
  color: #eceff1;
}

.cards {
  position: relative;
}

.cards__inner {
  display: flex;
  flex-wrap: wrap;
  gap: 2.5em;
}

.card {
  --flow-space: 0.5em;
  --hsl: var(--hue), var(--saturation), var(--lightness);
  flex: 1 1 14rem;
  padding: 1.5em 2em;
  display: grid;
  grid-template-rows: auto auto auto 1fr;
  align-items: start;
  gap: 0rem;
  color: #eceff1;
  background-color: #2b2b2b;
  border: 1px solid #eceff133;
  border-radius: 15px;
}


.card__bullets {
  line-height: 1.4;
}

.card__bullets li::before {
  display: inline-block;
  content: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512' width='16' title='check' fill='%23dddddd'%3E%3Cpath d='M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z' /%3E%3C/svg%3E");
  transform: translatey(0.25ch);
  margin-right: 1ch;
}

.card__heading {
  font-size: 1.05em;
  font-weight: 600;
  margin-bottom:-15px;
}

.card__price {
  font-size: 1.75em;
  font-weight: 700;
  margin-bottom:-1px;
  
}



.cta {
  display: block;
  align-self: end;
  margin: 0rem -10px 0rem 0;
  text-align: center;
  text-decoration: none;
  color: #fff;
  background-color: #0d0d0d;
  padding: 0.7em;
  border-radius: 10px;
  font-size: 1rem;
  font-weight: 600;
}


.trainer {
    width: 100%;
    height: 100%;
    background-color: white;
    flex-shrink: 0;
}
.container {
    border: 3px solid blue;
    border-radius: 20px;
    margin: 20px 100px;
 color:white;
    background-color: black;
    background-size: cover; 
    background-repeat: no-repeat; 
    background-position: center; 
} 
     
        .columns {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .left-column {
            flex: 1;
            margin-left:100px;
            margin-right:-270px;
        }


        .right-column {
            flex: 2;
            padding-left: 20px;
        }

 

    
    </style>

<section class="banner2">
    <h3>Contact Trainer</h3>
</section>

<div class="trainer">
    <div class="container">
        <div class="inner-container">
            <div class="columns">
                <div class="left-column">
                   <img src="images/trainer1.png"alt="Trainer Image" width="150">
                </div>
                <div class="right-column">
                        <h2>John Smith</h2>
                        <p>John Smith is a certified fitness trainer with over 10 years of experience in the fitness industry. He specializes in strength training, cardiovascular fitness, and nutrition planning. John has helped hundreds of clients achieve their fitness goals, whether it's weight loss, muscle gain, or overall health improvement.</p>
                </div>
            </div>
             
    <h1 class="main__heading">Select your Price Plan</h1>
    <div class="main__cards cards">
      <div class="cards__inner">
        <div class="cards__card card">
          <h2 class="card__heading">Basic</h2>
          <p class="card__price"> $60</p>
          <ul role="list" class="card__bullets flow">
                <li>Duration: 1 month</li>
                <li>Number of sessions: 12</li>
                <li>Frequency: 3 sessions per week</li>
                <li>Session Duration: 1 hour per session</li>
                <li>Personalized workout plans</li>
                <li>Basic dietary guidance</li>  
                <li>Access to the gym during training sessions</li>
          </ul>
          <a href="payment.php" class="card__cta cta">PAY NOW</a>
        </div>

        <div class="cards__card card">
          <h2 class="card__heading">Pro</h2>
          <p class="card__price">$85</p>
          <ul role="list" class="card__bullets flow">
            
                <li>Duration: 3 months</li>
                <li>Number of sessions: 36</li>
                <li>Frequency: 3 sessions per week</li>
                <li>Session Duration: 1 hour per session</li>
                <li>Customized fitness program</li>
                <li>Nutrition consultations</li>
                <li>Bi-weekly progress tracking</li>
                <li>Access to the gym during training sessions</li>

          </ul>
          <a href="payment.php" class="card__cta cta">PAY NOW</a>
        </div>

        <div class="cards__card card">
          <h2 class="card__heading">Ultimate</h2>
          <p class="card__price">$100</p>
          <ul role="list" class="card__bullets flow">
           

            <li>Duration: 6 months</li>
            <li>Number of sessions: 72</li>
            <li>Frequency: 3 sessions per week</li>
            <li>Session Duration: 1 hour per session</li>
            <li>Personalized training and nutrition plans</li>
            <li>Weekly progress assessments</li>
            <li>Unlimited access to the gym during operating hours</li>
            <li>Email and phone support for fitness and nutrition questions</li>

          </ul>
          <a href="payment.php" class="card__cta cta">PAY NOW</a>
        </div>
      </div>

      <div class="overlay cards__inner"></div>
    </div>
 

        </div>
    </div>
</div>
<br><br><br><br><br><br><br><br><br><br><br>


</body>
</html>
<?php include 'components/footer.php'; ?>
