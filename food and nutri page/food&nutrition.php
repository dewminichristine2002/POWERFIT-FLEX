<?php  
include '\xampp\htdocs\POWERFIT FLEX\all common\nav.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>FOOD & NUTRITION</title>
    <link rel="stylesheet" type="text/css" href="style.css"> 

</head>
<header>

</header>
<body>

    <section class="banner3">
        <h3>FOOD & NUTRITION</h3>
        </section>

        <div class="video-container">
            <video src="images/video.mp4" autoplay loop muted>
                Your browser does not support the video tag.
            </video>
        </div>

        <div class="center-justify">
            <p>
            Proper nutrition is the cornerstone of good health. A well-balanced diet that includes a variety of foods rich in essential nutrients like vitamins, minerals, carbohydrates, proteins, and fats is crucial for providing our bodies with the energy and tools they need to function optimally. Paying attention to portion sizes, choosing nutrient-dense foods, and staying hydrated are fundamental principles for maintaining a healthy lifestyle. Moreover, nutrition plays a vital role in disease prevention and overall well-being, making informed food choices a key component of a long and healthy life.</P>
          </div>

          <div class="button-container">
            <a href="form.php" class="button">Form</a>
            <a class="button" id="viewPlanButton" href="redirect.php">View Plan</a>

            <a href="contacttrainer.php" class="button">Contact Dietitian</a>
            <a href="\POWERFIT FLEX\food and nutri page\food and nutri page\backend\backend-usedetails.php" class="button">user detail</a>
        </div>
        <script>
        document.getElementById("viewPlanButton").addEventListener("click", function (event) {
            event.preventDefault(); // Prevent the default link behavior
            window.location.href = this.href; // Redirect to the 'redirect.php' file
        });
    </script>







</body>
</html>
<?php  
    include '\xampp\htdocs\POWERFIT FLEX\all common\footer.php';
    ?>