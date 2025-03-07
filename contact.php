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
    <title>contact</title>
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

     <!-- section 1 contact page -->
<div class="contact-section1">
    <div class="contact-text">
        <h2> <span>24/7/365</span> <br>Connecting people <br>with knowledge</h2>
    </div>
    <div class="contact-banner">
        <img src="images/contact banner3.jpg" alt="img">
      </div>
</div>
<!-- section 2 -->
 <div class="contact-section2">
    <h2>Contact us</h2>
    <p>The quickest way to get in touch with us is by using the contact information below.</p>
    <h2>Our Company in world</h2>
    <div class="place-img">
        <div class="contact">
            <img src="images/place1.jpg" alt="">
            <h1>India</h1>
            
        </div>
        <div class="contact">
            <img src="images/place2.jpg" alt="">
            <h1>Canada</h1>
            
        </div>
        <div class="contact">
            <img src="images/place3.jpg" alt="">
            <h1>Japan</h1>
            
        </div>
        <div class="contact">
            <img src="images/place4.jpg" alt="">
            <h1>Germany</h1>
            
        </div>
        <div class="contact">
            <img src="images/place5.jpg" alt="">
            <h1>Switzerland</h1>
            
        </div>
        <div class="contact">
            <img src="images/place6.jpg" alt="">
            <h1>Russia</h1>
            
        </div>
       
    </div>

 </div>

 <!-- section3 -->
  <div class="contact-section3">
    <div class="section3-left">
    <h2>Get in touch</h2>
    <form action="">
        <input type="text" name="name" placeholder="Name" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="tel" name="phone" placeholder="Phone" required>
        <textarea name="message" placeholder="Message" required></textarea>
        <input type="submit" value="Submit" class="submit-btn">


    </form>
  </div>

  <div class="section3-right">
    <img src="images/contact img2.jpg" alt="img">
  </div>

  </div>

  <!-- section 4 -->
   
    <div class="contact-section4">

        <div class="box-info">
           <i class="fas fa-phone"></i>
           <h3>phone number</h3>
           <a href="tel:1234567890">7010998494</a> <br>
           <a href="tel:1112223333">111-222-3333</a>
        </div>
        
        <div class="box-info">
           <i class="fas fa-envelope"></i>
           <h3>email address</h3>
           <a href="mailto:shaikhanas@gmail.com" >vasanthkumar7600@gmail.come</a> <br>
           <a href="mailto:anasbhai@gmail.com">educa@gmail.come</a>
        </div>
  
        <div class="box-info">
           <i class="fas fa-map-marker-alt"></i>
           <h3>office address</h3>
           <a href="#">flat no. 1, a-1 building, jogeshwari, mumbai, <br> india - 400104</a>
        </div>
  
     </div>

     <!-- footer -->

     <footer>
        <div class="qlinks">
            <div>
                <h3>Quick Links</h3>
            </div>
            
            <div>
                <a href="home.php">Home</a>
                <a href="about.php">About</a>
                <a href="course.php">Courses</a>
                <a href="faculty.php">Faculty</a>
                <a href="contact.php">Contact</a>
            </div>
        </div>
    
        <div class="email">
            <div>
                <h3>E-Mail</h3>
            </div>
            
            <div>
                <p>vasanthkumar7600@gamil.com</p>
                <p>educa@gmail.com</p>
            </div>
        </div>
    
        <div class="contact">
            <div>
                <h3>Contact</h3>
            </div>
           
            <div>
                <p>7010998494</p>
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