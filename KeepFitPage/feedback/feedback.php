<?php  
include '\xampp\htdocs\POWERFIT FLEX\all common\nav.php';
?>  
session_start();
<html>
    <head>
      <title>Feedback Form</TITLE>
      <link rel="stylesheet" href="\POWERFIT FLEX\KeepFitPage\KeepFitPage\feedback\feedbackstyle.css">
</head>
    <body>
      <h1>Feedback Form</h1>
      <form action="\POWERFIT FLEX\KeepFitPage\KeepFitPage\feedback\feedbackprocess.php" method="post" enctype="text" validateForm()>
        <lable for="username">Enter Your Username: </lable> 
        <input type="text" name="username" id="username" placeholder="Enter Username here" required>
        <br>
        <br>

        <label for="email">Enter your Email: </label>
        <input type="email"  name="email" id="email" placeholder="E-mail address" required>
        <br>
        <br>

        <label for="feedback">Feedback: </label>           
          <textarea id="feedback" name="feedback" rows="4" placeholder="Enter your Feedback" required></textarea>
          <br>
          <br>
          <button-container>
            <input type="submit" value="submit">
          </button-container>

</form>

<br> <br>

      <form  method="post" action="\POWERFIT FLEX\KeepFitPage\KeepFitPage\feedback\viewfeedback.php">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" placeholder="Enter Username Here" required><br><br>
                <button-container>
                <input type="submit" value="submit">
                </button-container>

            </form> <br><br>
      
</body>  


<script>
function validateForm() {
  
    var form = document.querySelector('form');

    var username = form.querySelector('input[name="username"]').value;
    var email = form.querySelector('input[name="email"]').value;
    var feedback = form.querySelector('textarea[name="feedback"]').value;

    var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

    if (username.trim() === '') {
        alert('Please enter your username.');
        return false;
    }

    if (!email.match(emailPattern)) {
        alert('Please enter a valid email address.');
        return false;
    }

    if (feedback.trim() === '') {
        alert('Please enter your feedback.');
        return false;
    }

    return true;
}
</script>

</html>

  <?php  
    include '\xampp\htdocs\POWERFIT FLEX\all common\footer.php';
    ?>