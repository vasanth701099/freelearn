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
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

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
            <a href="course.php">Course</a>
            <a href="faculty.php">Faculty</a>
            <a href="contact.php">Contact</a>
        </div>
   </div>
 </header>
   <!--image section  -->
<div class="body">
 <main>
    <div class="banner">
        <img src="images/banner2.webp" alt="banner-image">
    </div>
   
    <div class="qoute">
        <h1 id="name"></h1>
        <h1>Finding the best courses & <br> Upgrade your skill :)</h1>
        <p>E-learning is one of the most effective and economically affordable learning  tools available today. More people choose this quick & accessible mode of  learning to gain more knowledge or expertise about a particular subject or any  field of education.</p>
        
    </div>
    <div class="log-in">
        <a href="login.php">Log-in</a>
        <a href="signin.php">sign-in</a>
    </div>

 </main>
    <!-- course display section -->
 <div class="course">
    <h2>Our courses Offered</h2>
    <div class="list-course">
        <div>
            <li>Software Development</li>
            <li>Digital Marketing</li>
            <li>Web Development</li>
            <li>Mobile App Development</li>
        </div>
        <div>
           <li>Machine Learning</li>
           <li>Data Science</li>
           <li>Cybersecurity</li>
           <li>Al</li>
        </div>
        <div>
            <li>Big Data Analyst</li>
            <li>Java</li>
            <li>Animation Course</li>
            <li>Blockchain</li>
        </div>
       <div>
        <li>DevOps</li>
        <li>Data analysis</li>
        <li>Full Stack Architect</li>
        <li>Web Design</li>
       </div>

    </div>
 </div>
   <!-- video section -->
 <div class="video-course">
    <section class="courses">

        <h1 class="heading">Popular Programs</h1>
        <p>Learn from global experts and get certified by the world's leading universities and technology companies.</p>

        <h2>Web Development Courses</h2>

     
        <div class="box-container">
         <div class="courses-box">
          <div class="box">
              <div class="thumb">
                 <img src="images/thumb-1.png" alt="">
              </div>
              <h3 class="title">complete HTML tutorial</h3>
          </div>
     
           <div class="box">
              <div class="thumb">
                 <img src="images/thumb-2.png" alt="">
             </div>
              <h3 class="title">complete CSS tutorial</h3>
          </div>
     
           <div class="box">
             <div class="thumb">
                 <img src="images/thumb-3.png" alt="">
              </div>
              <h3 class="title">complete JS tutorial</h3>
          </div>
          
         </div>

         <h2>Introduction to Programming Languages</h2>
         

         <div class="courses-box">
     
           <div class="box">
              
              <div class="thumb">
                 <img src="images/c.jpg" alt="">

              </div>
              <h3 class="title">complete C Programming </h3>
              
           </div>
     
           <div class="box">
              
              <div class="thumb">
                 <img src="images/java.jpg" alt="">

              </div>
              <h3 class="title">complete Java Programming </h3>
            
           </div>
     
           <div class="box">
              
              <div class="thumb">
                 <img src="images/python.jpg" alt="">

              </div>
              <h3 class="title">complete Python Programming</h3>
             
           </div>
           <button><a href="course.php" class="courses-btn">View All Courses</a></button>
         </div>
        </section>
        
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
</div>

<script src="script.js"></script>
</body>

</html>
