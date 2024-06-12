<?php
    include '\xampp\htdocs\POWERFIT FLEX\all common\nav.php';
    session_start();
$id=$_GET["id"];
?>

<!DOCTYPE html>
<html>
<head>
   
    <title>Update Inquary</title>
    <style>
body{
    background-color: lightsteelblue;
}
legend{
    font-size: 40px;
    font-family: 'Times New Roman', Times, serif;
}

#felstsu{
    width: 360px;
    height: 350px;
    margin:50px auto;
    
}
#textarsu{
    width: 280px;
    height: 20px;
}


</style>
</head>
<body>
    <fieldset id="felstsu">

        <legend>Update Your Inquiry</legend>
        <form action="\POWERFIT FLEX\contact us\contact us\Inquary Proses\edit_inquiry.php" method="post">
            <div class="upinqsu">
            <input type="text" value="<?php echo"$id";?> " name="id" readonly>
            </div>
            <br><br><br><br><br><br>
            <label>Inquiry</label>
            <input id="textarsu" type="textarea" name="newMessage">
            <br><br><br><br>
            <input type="submit" value="Submit Your Inquiry">
        </form>

    </fieldset>
    
</body>
</html>



<?php  
        include '\xampp\htdocs\POWERFIT FLEX\all common\footer.php';
?>





