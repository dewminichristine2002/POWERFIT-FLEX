<?php
$id=$_GET["feedback_id"];
?>

<!DOCTYPE html>
<html>
<head>
   
    <title>Update Feedback</title>

    <style>

h1{
    font-size: 30px;
}

#cont{
    width: 360px;
    height: 400px;
    margin: auto;
}
#textarea{
    width: 300px;
    height: 20px;
}


</style>
</head>
<body>
    <fieldset id="cont">

        <h1>Update Your Feedback</h1>
        <form action="\POWERFIT FLEX\KeepFitPage\feedback\editfeedback.php" method="post" validateForm()>
            <div class="updatefeed">
            <input type="text" value="<?php echo"$id";?> " name="id" readonly>
            </div>
            <br><br><br><br><br><br>
            <label>Feedback</label>
            <input id="textarea" type="textarea" name="newFeedback">
            <br><br><br><br>
            <input type="submit" value="Submit Your Feedback">
        </form>

    </fieldset>
    
</body>

<script>
function validateForm() {
    // Get the form element by its id
    var form = document.getElementById('cont');

    // Get the value entered in the newFeedback input field
    var newFeedback = form.querySelector('input[name="newFeedback"]').value;

    // Check if the newFeedback is empty or contains only whitespace
    if (newFeedback.trim() === '') {
        alert('Please enter valid feedback.');
        return false; // Prevent form submission
    }

    // If validation passes, allow the form to submit
    return true;
}
</script>

</html>









