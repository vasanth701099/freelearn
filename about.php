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
    <title>about</title>
     <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
   <!-- css file link -->
    <link rel="stylesheet" href="style.css">
    <!-- google font -->
<!--  <link rel="preconnect" href="https://fonts.googleapis.com">
 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet"> -->
</head>

<body>
    <!-- header section -->
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

   <!--section 1  -->

   <div class="about-section-1">
     <div class="about-img">
        <img src="images/about img.webp" alt="image">
     </div>
      <div class="about-text">
        <h2>Skills are the key to unlocking potential</h2>
        <p>Whether you want to learn a new skill, train your teams, or share what you know with the world, you’re in the right place. As a leader in online learning, we’re here to help you achieve your goals and transform your life.</p>
     </div>
   </div>

   <!-- section 2 -->

   <div class="about-section-2">
    <div>
    <div class="title">
        <h2>Creating impact around the world</h2>
    </div>
    <div class="title">
        <p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; With our global catalog spanning the latest skills and topics,<br> people and organizations everywhere are able to adapt to change and thrive.</p>
    </div>
</div>
    <div class="course-details">
       <div class="bg-btn">
        <div><h1>75M</h1></div>
        <div><p>Learners</p></div>
      </div>
       <div class="bg-btn">
       <div> <h1>75K+</h1></div>
        <div><p>Instructors</p></div>
       </div>
       <div class="bg-btn">
       <div><h1>250K+</h1></div> 
        <div><p>Courses</p></div>
       </div>
       <div class="bg-btn">
        <div><h1>1B+</h1></div>
        <div><p>Course enrollments</p></div>
       </div>
       <div class="bg-btn">
        <div><h1>75</h1></div>
       <div><p>Languages</p></div> 
       </div>
       <div class="bg-btn">
       <div> <h1>17K</h1></div>
        <div><p>Enterprise customers</p></div>
       </div> 
    </div>
   </div>

   <!-- section 3 -->
    <div class="about-section-3">
          
            <div class="sec-3-text">
            <h2>We Collaborate with 100+ leading universities and companies</h2>
            <p>At Educa, we believe in empowering people to achieve their dreams. We partner with world-class institutions and companies to offer the best <br> education and training for our students. Our mission is to create a world where every person has the opportunity to learn and grow.</p>
            </div>
            
            <div class="company-logo">
            <marquee>
                <img src="images/company 1.webp" alt="img">
                <img src="images/company 2.png" alt="img">
                <img src="images/company 3.jpg" alt="img">
                <img src="images/company 4.jpg" alt="img">
                <img src="images/company 10.webp" alt="img">
                <img src="images/company 5.jpg" alt="img">
                <img src="images/company 11.jpg" alt="img">
                <img src="images/company 7.png" alt="img">
                <img src="images/university logo 1.jpg" alt="img">
                <img src="images/company 8.png" alt="img">
                <img src="images/university logo 2.jpg" alt="img">
                <img src="images/university logo 3.jpg" alt="img">
                <img src="images/university logo 4.png" alt="img">
                <img src="images/university logo 5.jpg" alt="img">
                <img src="images/company 9.webp" alt="img">
            </marquee>
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
                <a href="facebook.com"><i class="fab fa-facebook"></i></a>
                <a href="twitter.com"><i class="fab fa-twitter"></i></a>
                <a href="instagram.com"><i class="fab fa-instagram"></i></a>
                <a href="youtube.com"><i class="fab fa-youtube"></i></a>
        
        </div>
     </footer>
</body>
</html>
