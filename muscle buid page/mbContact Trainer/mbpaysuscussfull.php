<?php  
include '\xampp\htdocs\POWERFIT FLEX\all common\nav.php';
session_start();
?>
<!DOCTYPE html>
<html >
<head>
    
    <title>Payment Successfully</title>
</head>
<header>

</header>
<body>
  <a href="\POWERFIT FLEX\muscle buid page\mbContact Trainer\mbtrainer.php">
      <div class="suc">
      <h1 id="paySuccessfully1">Thank You</h1>
      <img id="paySuccessfullyimg" src="\POWERFIT FLEX\muscle buid page\mbContact Trainer\check_mark.jpg">
      <h1 id="paySuccessfully2">Payment Successfully</h1>
      </div>
    </a>
</body>
</html>

<style>
   .suc {
      border : 2px solid black;
      width : 500px;
      height: 600px;
      margin: 10px auto;
      border-radius: 20%;
      text-decoration: none;
    }

  #paySuccessfully1 {
    text-align: center;
    font-size: 40px;
    
    
    
  }

  #paySuccessfully2 {
    text-align: center;
    font-size: 40px;
    text-decoration :none;
    
  }
  #paySuccessfullyimg{
    display :flex;
    height: 400px;
    width: 400px;
    margin: 0 auto;
  
  }

  
</style>

<?php  
    include '\xampp\htdocs\POWERFIT FLEX\all common\footer.php';
    ?>