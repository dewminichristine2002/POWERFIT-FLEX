<?php  
include '\xampp\htdocs\POWERFIT FLEX\all common\nav.php';
session_start();
?> 
<!DOCTYPE html>
<html>
<head>
    <title>Payment Form</title>
<style>

        
/* Center align the text and form */
.center {
    text-align: center;
}

/* Style the main heading */
h1 {
    font-size: 24px;
    color: #333;
}

/* Style the secondary heading */
h3 {
    font-size: 18px;
    color: #666;
}

/* Style the form container */
form {
    height:750px;
    width:550px;
    padding: 55px;
    background: #f5f5f5;
    border: 1px solid #ddd;
    border-radius: 5px;
    margin:20px auto;
}

/* Style the card type section */
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

/* Style input fields */
input[type="text"] {
    width: 100%;
    padding: 10px;
    margin: 5px 0;
    border: 1px solid #ccc;
    border-radius: 3px;
}

/* Style the two columns */
.two-columns {
    display: flex;
    justify-content: space-between;
}

/* Style the CVC input */
.cvc {
    width: 40%;
}

/* Style the amount select */
.lwpayamount {
    margin: 10px 0;
}

select {
    width: 100%;
    padding: 10px;
    margin: 5px 0;
    border: 1px solid #ccc;
    border-radius: 3px;
}

/* Style the buttons */
.subuttons {
    display: flex;
    padding:40px 40px;
    
    
}

.subu {
    padding: 15px 15px;
    background: #007BFF;
    color: black;
    border: none;
    border-radius: 3px;
    cursor: pointer;
    width:80px;
    height:20px;
    margin: 0px 54px;
    text-align: center;
    

}
button{
    text-align:center;
    
}

/* Style the Back button */
.subuttons .subu:first-child {
    background: #ccc;
}

.subu:hover {
    background: #0056b3; /* Darker blue on hover */
}




    </style>
    
</head>
<header>
  
</header>
<body>

        <form action="\POWERFIT FLEX\muscle buid page\mbContact Trainer\mb py process.php" method="post"  onsubmit="return validateFormsu();">

            <h1 class ="center">PAY ONLINE</h1>
            <h3 class="center">Card Details</h3>

            <label>Card Type:</label>
            <div class="card-type">
                <input type="radio" name="card-type" value="visa" id="visa">
                <label for="visa"><img src="master.png" width="20%" height="62px" alt="Visa"></label>
                <input type="radio" name="card-type" value="mastercard" id="mastercard">
                <label for="mastercard"><img src="visa.png" width="20%" height="47px" alt="Mastercard"></label>
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



             
            <div class="lwpayamount">
                <label for="amt">Amount:</label>
                <select id="amt" name="amt" required>
                    <option value="$90">$90</option>
                    <option value="$160">$160</option>
                    <option value="$280">$280</option>
                </select>
            </div>



            <div class="subuttons">
                <a href="\POWERFIT FLEX\muscle buid page\mbContact Trainer\mbtrainer.php" class="subu">Back</a>
                <button class="subu" type="submit">Pay Now</button>
            </div>
            




        </form>


    
</body>
</html>

<script>
    function validateFormsu() {
        var cardName = document.getElementById('card-name');
        var cardNumber = document.getElementById('card-number');
        var expirationMonth = document.getElementById('expiration-month');
        var expirationYear = document.getElementById('expiration-year');
        var cvc = document.getElementById('cvc');
        var amt = document.getElementById('amt');

        // Check if Card Name is not empty
        if (cardName.value === '') {
            alert('Please enter the Name of the Card');
            cardName.focus();
            return false;
        }

        // Check if Card Number is not empty and consists of 16 digits
        if (cardNumber.value === '' || isNaN(cardNumber.value) || cardNumber.value.length !== 16) {
            alert('Please enter a valid Card Number (16 digits)');
            cardNumber.focus();
            return false;
        }

        // Check if Expiration Month is a valid 2-digit number (01-12)
        if (isNaN(expirationMonth.value) || expirationMonth.value < 1 || expirationMonth.value > 12 || expirationMonth.value.length !== 2) {
            alert('Please enter a valid Expiration Month (01-12)');
            expirationMonth.focus();
            return false;
        }

        // Check if Expiration Year is a valid 4-digit number
        if (isNaN(expirationYear.value) || expirationYear.value.length !== 4) {
            alert('Please enter a valid Expiration Year (4 digits)');
            expirationYear.focus();
            return false;
        }

        // Check if CVC is a valid 3-digit number
        if (isNaN(cvc.value) || cvc.value.length !== 3) {
            alert('Please enter a valid CVC (3 digits)');
            cvc.focus();
            return false;
        }

        // Check if an Amount is selected
        if (amt.value === '') {
            alert('Please select an Amount');
            amt.focus();
            return false;
        }

        // If all validations pass, the form will be submitted
        return true;
    }
</script>

  
  <?php  
    include '\xampp\htdocs\POWERFIT FLEX\all common\footer.php';
?>

