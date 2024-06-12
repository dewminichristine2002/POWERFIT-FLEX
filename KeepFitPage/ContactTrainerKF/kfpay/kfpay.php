<?php  
     include '\xampp\htdocs\POWERFIT FLEX\all common\nav.php';
     session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
    <title>Payment Form</title>
    <script src="\POWERFIT FLEX\KeepFitPage\ContactTrainerKF\kfpay\kfpay.js"></script>
    <style>
        

    body, h1, h3, label {
        margin: 0;
        padding: 0px;
    }

    .center {
        text-align: center;
    }

    
    form {
        width: 400px;
        height: 700px;
        margin: 0 auto;
        padding: 55px;
        background: #f5f5f5;
        border: 2px black;
        border-radius: 5px;
    }
    
    
    .card-type {
        margin: 10px 0;
    }
    
    .card-type label {
        margin: 0 5px;
        cursor: pointer;
    }
    
    .card-type img {
        max-width: 100%;
    }
    
   
    input[type="text"] {
        width: 100%;
        padding: 10px;
        margin: 5px 0;
        border: 1px solid #ccc;
        border-radius: 3px;
    }
    

    .two-columns {
        display:inline;
        justify-content: space-between;
    }
    
  
    .cvc {
        width: 40%;
    }

    .payamount {
        margin: 10px 0;
    }
    
    select {
        width: 100%;
        padding: 10px;
        margin: 5px 0;
        border: 1px solid #ccc;
        border-radius: 3px;
    }
    
 
    .buttons {
        display: flex;
        justify-content: space-between;
        margin-top: 20px;
    }
    
    button {
        padding: 10px 20px;
        background: #007BFF;
        color: #fff;
        border: none;
        border-radius: 3px;
        cursor: pointer;
    }
    
    
   .left-button{
    float:right;
   }
   .right-button{
    float: right;
   }
    
    button:hover {
        background: darkblue; 
    }
    
    
    
    </style>

    
</head>
<body>

    <form action="\POWERFIT FLEX\KeepFitPage\ContactTrainerKF\kfpay\kfpayprocess.php" method="post"  onsubmit="return validateForm();">

        <h1 class="center">PAY ONLINE</h1>
        <h3 class="center">Card Details</h3>
     
        <label>Card Type:</label>
        <div class="card-type">
            <input type="radio" name="cardtype" value="visa" id="cardtype">
            <label for="visa"><img src="\POWERFIT FLEX\KeepFitPage\KeepFitPage\ContactTrainerKF\kfpay\visa-payment-card1873.jpg" width="20%" height="62px" alt="Visa"></label>
            <input type="radio" name="cardtype" value="mastercard" id="">
            <label for="mastercard"><img src="\POWERFIT FLEX\KeepFitPage\KeepFitPage\ContactTrainerKF\kfpay\MasterCard_Logo.svg.png" width="20%" height="47px" alt="Mastercard"></label>
        </div><br>

        <label for="cardname">Name of the Card:</label>
        <input type="text" id="cardname" name="cardname" required><br>

        <label for="cardnumber">Card Number:</label>
        <input type="text" id="cardnumber" name="cardnumber" required><br>

        <div class="two-columns">

            <div class="columns">
                <label for="expirationmonth">Expiration Month:</label>
                <input type="text" id="expirationmonth" name="expirationmonth" required>
            </div>
            <div class="columns">
                <label for="expirationyear">Expiration Year:</label>
                <input type="text" id="expirationyear" name="expirationyear" required>
            </div>
        </div>
        <label for="cvc">CVC Digits:</label><br>
        <input type="text" class="cvc" id="cvc" name="cvc" required>



        </div> 
        <div class="payamount">
            <label for="amt">Amount:</label>
            <select id="amt" name="amt" required>
                <option value="$90">$90</option>
                <option value="$160">$160</option>
                <option value="$280">$280</option>
            </select>
        </div>



        <div class="buttons">
            <div class="left-button">
            <a href="\POWERFIT FLEX\KeepFitPage\keepfit.php" class="button" type="button">Back</button></a>
            </div>
            <div class="right-button">
            <a href="\POWERFIT FLEX\KeepFitPage\KeepFitPage\ContactTrainerKF\kfpay\kfpaysuccessful.php" class="button" type="submit">Pay Now</button></a>
            </div>
        </div>
    

    </form>
</body>
</html>
<?php  
    include '\xampp\htdocs\POWERFIT FLEX\all common\footer.php';
    ?>