<?php
session_start();

if(!isset($_SESSION['user_id'])){
    header('location: login.php');
    exit();
}

$email = $_SESSION['email']
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty</title>
      <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
   <!-- css file link -->
    <link rel="stylesheet" href="style.css">
<!-- google font -->
 <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet"> -->
</head>

<body>
    <header>
        <div class="header">
            <div class="title">
                <a href="home.php">FreeLearn.</a>
            </div>
             <div class="nav-bar">
                <a href="home.php">Home</a>
                <a href="about.php">About</a>
                <a href="course.php">Courses</a>
                <a href="faculty.php">Faculty</a>
                <a href="contact.php">Contact</a>
            </div>
       </div>
     </header>

     <!-- section 1 faculty page -->
      <div class="faculty-section1">
        <div class="section1-faculty">
            <img src="images/faculty banner.png" alt="img">
        </div>
        <div class="section1-faculty-h3">
            <h3>One book, one pen, one child and one teacher <span>can change the world.</span></h3>
        </div>
    </div>

    <!-- section2  -->
     <div class="faculty-section2">
        <h2>Our Faculty Information</h2>
        
        <div class="faculty-info">
            <div class="faculty-img">
                <img src="images/rayan.jpg" alt="img">
            </div>
            <div class="faculty-info-details">
                <h2>N. MANIKANDAN</h2>
                <h3>Software Developer</h3>
                <h2>ZOHO</h2>
                <p>7+ Experience in IT industry</p>
                <p> <i class="fas fa-phone"></i>+91 1234567890</p>
                <p><i class="fas fa-envelope"></i>rayan@gamil.com</p>
              
            </div>
        </div>
        <div class="faculty-box2">
        <div class="faculty-info">
            <div class="faculty-img">
                <img src="images/elavarason.jpg" alt="img">
            </div>
            <div class="faculty-info-details">
                <h2>ELAVARASAN</h2>
                <h3>web Developer</h3>
                <h2>ZOHO</h2>
                <p>7+ Experience in IT industry</p>
                <p> <i class="fas fa-phone"></i>+91 1234567890</p>
                <p><i class="fas fa-envelope"></i>rayan@gamil.com</p>

            </div>
        </div>
    </div>

    <div class="faculty-info">
        <div class="faculty-img">
            <img src="images/rayan.jpg" alt="img">
        </div>
        <div class="faculty-info-details">
            <h2>N. MANIKANDAN</h2>
            <h3>Software Developer</h3>
            <h2>ZOHO</h2>
            <p>7+ Experience in IT industry</p>
            <p> <i class="fas fa-phone"></i>+91 1234567890</p>
            <p><i class="fas fa-envelope"></i>rayan@gamil.com</p>
          
        </div>
    </div>
    <div class="faculty-box2">
    <div class="faculty-info">
        <div class="faculty-img">
            <img src="images/elavarason.jpg" alt="img">
        </div>
        <div class="faculty-info-details">
            <h2>ELAVARASAN</h2>
            <h3>web Developer</h3>
            <h2>ZOHO</h2>
            <p>7+ Experience in IT industry</p>
            <p> <i class="fas fa-phone"></i>+91 1234567890</p>
            <p><i class="fas fa-envelope"></i>rayan@gamil.com</p>

        </div>
    </div>
</div>

<div class="faculty-info">
    <div class="faculty-img">
        <img src="images/rayan.jpg" alt="img">
    </div>
    <div class="faculty-info-details">
        <h2>N. MANIKANDAN</h2>
        <h3>Software Developer</h3>
        <h2>ZOHO</h2>
        <p>7+ Experience in IT industry</p>
        <p> <i class="fas fa-phone"></i>+91 1234567890</p>
        <p><i class="fas fa-envelope"></i>rayan@gamil.com</p>
      
    </div>
</div>
<div class="faculty-box2">
<div class="faculty-info">
    <div class="faculty-img">
        <img src="images/elavarason.jpg" alt="img">
    </div>
    <div class="faculty-info-details">
        <h2>ELAVARASAN</h2>
        <h3>web Developer</h3>
        <h2>ZOHO</h2>
        <p>7+ Experience in IT industry</p>
        <p> <i class="fas fa-phone"></i>+91 1234567890</p>
        <p><i class="fas fa-envelope"></i>rayan@gamil.com</p>

    </div>
</div>
</div>



    
        
     </div>
    

     <!-- footer section -->
     <footer>
        <div class="qlinks">
            <div>
                <h3>Quick Links</h3>
            </div>
            
            <div>
                <a href="home.php">Home</a>
                <a href="about.php">About</a>
                <a href="course.php">Course</a>
                <a href="faculty.php">Faculty</a>
                <a href="cantact.php">cantact</a>
            </div>
        </div>
    
        <div class="email">
            <div>
                <h3>E-Mail</h3>
            </div>
            
            <div>
                <p> vasanthkumar7600@gmail.com</p>
    
                <p>educa@gmail.com</p>
            </div>
        </div>
    
        <div class="contact">
            <div>
                <h3>Contact</h3>
            </div>
           
            <div>
                <p>+91 7010998494</p>
                <p>+91 9943542456</p>
            </div>
        </div>
    
        <div class="socialmedia">
            <div>
                <h3>Social Media</h3>
            </div>
            
            <div>
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
        
        </div>
     </footer>

</body>
</html>