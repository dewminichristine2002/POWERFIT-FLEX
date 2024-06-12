<?php  
include '\xampp\htdocs\POWERFIT FLEX\all common\nav.php';
session_start();
?>
<!DOCTYPE html>
<html >
<head>
    <title>Lose Weight</title>

    <script>
        var currentDate = new Date();
        var options = { day: 'numeric', month: 'numeric', year: 'numeric' };
        var formattedDate = currentDate.toLocaleDateString(undefined, options);
        
            var systemDateElement = document.getElementById('systemDate');
            systemDateElement.textContent = formattedDate;
    </script>
    
      
</head>
<header>

</header>
<body>
    

    <div class="imagesuki">
        <img src="\POWERFIT FLEX\Loose Weight page\img\loosewe.jpeg" alt="Loosewe1" id="image">
        <img src="\POWERFIT FLEX\Loose Weight page\img\losemypi1.avif" alt="Loosewe2" id="image">
        <img src="img/loose3.jpeg" alt="Loosewe3" id="image">
    </div>

    <h1> "You're getting stronger every day and moving closer to achieving your weight loss goals."</h1>
    <p class="MainParasu1">
        your one-stop destination for achieving your weight loss goals and embracing a healthier, more vibrant lifestyle. We understand that embarking on a weight loss journey can be both exciting and challenging, which is why we're here to guide you every step of the way.

     we're passionate about helping you reach your fitness aspirations through a comprehensive approach that includes personalized exercise plans and access to expert trainers. Our user-friendly form allows you to input crucial information about your fitness objectives, current fitness level, and any specific requirements. Once you've completed the form, you'll receive a customized exercise plan tailored to your unique needs and goals.

    But we don't stop there. We believe that the guidance of an experienced trainer can be a game-changer. You have the option to contact our skilled trainers for more information and to explore our three comprehensive packages, each designed to provide one-on-one coachingand ongoing support.
    </p>
    <br>
    <br>

    <div class="paragraph-containersu">
    <p class="parasubsu">Fill out the form and get your Exercise plan.</p>
    <p class="parasubsu">View your Plan After File the Form</p>
    <p class="parasubsu">Contact with our Online Trainers</p>
    </div>

    <p id="systemDate"></p>

    <form>
    <div class="sukibuton">
        <a href="\POWERFIT FLEX\Loose Weight page\lw form.php" class="but1">Form</a>
        <a href="\POWERFIT FLEX\Loose Weight page\lw plan process.php" class="but1">View Plan</a>
        <a href="\POWERFIT FLEX\Loose Weight page\Contact Trainer\trainer.php" class="but1" >Contact Trainer </a>
    </div>
    </form>
    
    
</body>
</html>
<?php  
    include '\xampp\htdocs\POWERFIT FLEX\all common\footer.php';
    ?>

<style>
    #image  {
    width:33.3%;
    height:350px;
}
.imagesuki{
    display: flex;
}
h1{
    font-size:38px;
    color:black;
    padding : 15px 25px;
    margin: 0 50px;
    text-align:center;
}
.MainParasu1{
    font-size:25px;
    text-align:center;
    padding:25px 50px;
    background-color:gray;
    color: black;
    border-radius : 10px;
    width: 80%;
    margin: 0 auto;
    font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    font-size: large;
    font-weight: 5px;
    line-height: 1.15cm;

}
.paragraph-containersu{
    display: flex;
    flex-direction: row;
    justify-content: space-around;
    font-size: 14px;
    font-style: normal;
    font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    padding-bottom: 0px;
}

.parasubsu{
    font-size: 24px;
    max-width: 45%;
    text-align:center;
    padding-left: 20px;
    padding-right: 20px;
}
.button-container{
    display: flex;
    flex-direction: row;
    align-items: center;
    margin:0 auto;

}
.sukibuton{
    display:flex;
    margin:0 auto;

}

.but1{
    border: 2px;
    background-color: Black;
    color: White;
    font-weight: bold;
    padding: 16px 32px;
    font-size: 18px;
    cursor: pointer;
    text-align:center;
    width: 140px;
    height: 42px;
    border-radius: 40px;
    margin:20px 174px;
    text-decoration:none;
}
#systemDate{
    color:black;
}

</style>
