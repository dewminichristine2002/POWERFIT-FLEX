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

<header>

</header>

<body>

<h1 align="center">PAY ONLINE</h1>
<h3 align="center">Card Details</h3>

<style>
    form{
        border: solid 2px grey;
        border-radius:8px;
    }
   
    .card-type {
        display: flex;
        align-items: center;
        margin: 0px -50px;
        padding: 0px;
    }

    .buttons {
        margin-top:10px;
        display: flex;
        
       
    }

    

    label, input {
        width: 100%;
        margin-bottom: 10px;
        padding:6px 0px;
    }

  
    .two-columns {
        display: flex;
        justify-content: space-between;
    }

    .columns {
       width:45%;
    }
    .cvc{
        width:45%;
    }
</style>

<form action="success.php" method="post" onsubmit="return validateForm();">

   
    <label>Card Type:</label>
    <div class="card-type">
        <input type="radio" name="card-type" value="visa" id="visa">
        <label for="visa"><img src="images/visa.png" width="40%" height="22px" alt="Visa"></label>
        <input type="radio" name="card-type" value="mastercard" id="mastercard">
        <label for="mastercard"><img src="images/master.png" width="30%" height="37px" alt="Mastercard"></label>
    </div>


    <label for="card-name">Name of the Card:</label>
    <input type="text" id="card-name" name="card-name" required>

   
    <label for="card-number">Card Number:</label>
    <input type="text" id="card-number" name="card-number" required>

    
    <div class="two-columns">
        <div class="columns">
            <label for="expiration-month">Expiration Month:</label>
            <input type="text" id="expiration-month" name="expiration-month" required>
        </div>
        <div class="columns">
            <label for="expiration-year">Expiration Year:</label>
            <input type="text" id="expiration-year" name="expiration-year" required>
        </div>
    </div>


    <label for="cvc">CVC Digits:</label><br>
    <input type="text" class="cvc" id="cvc" name="cvc" required>


    <div class="buttons">
    <a href="contacttrainer.php"><button class="button" type="button">Back</button></a>
    <button class="button" type="submit" style="background-color: #007BFF; border-radius: 25px; padding: 1.3vh 3vh; padding-bottom:25px; margin-top:1px;">PayNow</button>

</div>
</form>
<br><br>


<script>
    function validateForm() {
        var cardType = document.querySelector('input[name="card-type"]:checked');
        var cardName = document.getElementById('card-name');
        var cardNumber = document.getElementById('card-number');
        var expirationMonth = document.getElementById('expiration-month');
        var expirationYear = document.getElementById('expiration-year');
        var cvc = document.getElementById('cvc');
        
      
        if (!cardType || !cardName.value || !cardNumber.value || !expirationMonth.value || !expirationYear.value || !cvc.value) {
            alert('Please fill out all required fields.');
            return false; 
        }


        return true;
    }
</script>
</body>
</html>
<?php  
    include '\xampp\htdocs\POWERFIT FLEX\all common\footer.php';
    ?>