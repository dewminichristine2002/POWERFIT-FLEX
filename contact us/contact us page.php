<?php  
include '\xampp\htdocs\POWERFIT FLEX\all common\nav.php';
?>  
<!DOCTYPE html>
<html>
<head>
    <title>Contact Us</title>
</head>
<header>

</header>
<body>
    
    <section class="banner2">
        <h3>Contact Us</h3>
        </section>
        

    <div class="contact-section">
        <div class="column">
            <h2>Contact Us</h2>
            <form  method="post" action="\POWERFIT FLEX\contact us\contact us\contactusprosses.php">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" placeholder="Enter your name" required><br><br>
                
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required><br><br>
                
                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="4" placeholder="Enter your message" required></textarea><br><br>
                <input type="submit" value="Mark and Inquiry">
                <br><br>
            <br><br>
            </form>

            <form  method="post" action="\POWERFIT FLEX\contact us\contact us\viewinq.php">
            <h2>Type your Name and View the Inquiries</h2>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" placeholder="Enter your name" required><br><br>
                <input type="submit" value="View Your Inquiry">
                

            </form>

        </div>

        <div class="column">
            <h2>Contact Information</h2>
            <p>Email: powerfitflex@gmail.com</p>
            <p>Hotline: (415) 456-4318 </p>
            <p>Mobile: (415) 927-2582 </p>
            <img class="gmail" src="images/gmail.webp">
            
        
            <h2>Connect with Us</h2>
            <a href="https://instagram.com/powerfit__flex?igshid=NzZlODBkYWE4Ng=="><img src="images/Instergramsuki.png" class="instersuki" ></a>
            <a href="https://www.facebook.com/profile.php?id=61552162211536&mibextid=ZbWKwL"><img src="images/facebooksuki.avif" class="instersuki" ></a>
            <a href="https://t.me/+B8nOmBsPugMwYWFl"><img src="images/teligramsuki.png" class="telisuki"></a> 
            <a href="https://twitter.com/PowerfitF10772"><img src="images/tueesu.jpg" class="twtersuki"></a>
            
        </div>

       
    </div>


  <div class="contactuscontent">
    <h3>Welcome to our Fitness and Health Center</h3>
    <p>Discover the path to a healthier and more active lifestyle. Our expert trainers and nutritionists are here to guide you on your fitness journey. Whether you're a beginner or an experienced athlete, we have programs tailored to your needs.</p>
  </div>




</body>

</html>

<style>
    
.contact-section {
    display: flex;
    justify-content: space-between;
    background-color: #f2f2f2;
    padding: 20px;
}


.column {
    flex:1;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
    margin: 10px;
}




input[type="text"],
input[type="email"],
textarea {
    width: 95%;
    padding: 10px;
   
    border: 1px solid #858585;
    border-radius: 5px;
   
}

button {
    
    background-color: black;
    color: blue;
    border: none;
    padding: 30px 40px;
    border-radius: 5px;
    cursor: pointer;
}

button:hover {
    background-color: #0056b3;
}

a {
    text-decoration: none;
    color: #000000;
    margin-right: 20px;
    
}


iframe {
    width: 100%;
    border:solid 2px #000;
}

form button {
    display: block;
    margin: 0 auto;
}

.gmail {
    height: auto;
    width: 50px;
}
.instersuki{
  height: auto;
  width: 85px;
}


.telisuki{
  height: auto;
  width: 47px;
}
.twtersuki{
  height: auto;
  width: 65px;
}

.banner2 {
    background-image: url('images/banner2.jpg.png'); 
    background-size: cover; 
    background-position: center; 
    text-align: center; 
    color: white; 
    font-weight: bold; 
    padding-top: 20px; 
    padding-bottom: 20px; 
    text-shadow: 2px 2px 4px rgb(0, 0, 0);
    font-size: 20px;
 
  }

  .contactuscontent{
    background-size: cover; 
    padding: 20px;
    border-radius: 25px;
    margin-left: 50px;
    margin-right: 50px;
    margin-top: 30px;
    margin-bottom: 30px;
    background-image: url('images/banner3.png') ;
    color: #ffffff;
    text-align: center;
  }

  #viewinq{
    margin-top: 30px;
  }
  #inbysu{
    padding: 5px 5px;
    color:white;
    background-color:black;
  }
  #inbysu:hover{
    background: #0056b3;
  }
  #viewinq{
    padding: 5px 5px;
    color:white;
    background-color:black;
  }
  #viewinq:hover{
    background: #0056b3;
  }
  

</style>
<?php  
    include '\xampp\htdocs\POWERFIT FLEX\all common\footer.php';
    ?>
