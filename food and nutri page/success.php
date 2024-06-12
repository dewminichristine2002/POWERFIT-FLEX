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
<header>
  
</header>

<br>
<style>
    .container{
        margin-left:450px;
        border:2px solid grey;
        border-radius:20px;
        background-color:#fff;
        width:40%
    }

        .payment-success {
            background-color: #08FF08;
            color: white;
            border-radius: 20px;
            text-align: center;
            padding: 20px;
            margin: 10px 50px;
        }

        .payment-success img {
            display: block;
            margin: 20px auto;
        }

        .download-button, .return-button {
            background-color: blue;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 10px;
            cursor: pointer;
        }
    </style>
   <div class="payment-success">
        <p>Payment Successful !</p>
    </div>
    
    <div>

    <div class="container">
    
    <center>
    <img src="images/right.png" >
    </center>
    <center>
    <div class="payment-details"><br>
      <p>Payment Type: Online</p>
      <p>Transfer Method: V4sD</p>
      <p>Company: POWERFIT FLEX</p>
      <p>Transaction Id: 9943748374873</p>
      <p>Transaction Subject: fitness</p>
    </div>
  <div>
        
        
  

        
    </center>
    </div>
    
<br>
<br>
<?php include 'components/footer.php'; ?>
</body>
</html>