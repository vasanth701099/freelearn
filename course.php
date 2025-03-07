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
    <title>course</title>
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
    <!--  navbar section -->
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

     <!-- section 1 -->
     <section class="courses">

        <h1 class="heading">Popular Programs</h1>
        <p>Learn from global experts and get certified by the world's leading universities and technology companies.</p>

        <h2>Web Development Courses</h2>
        <p>Web development refers to the creating, building, and maintaining of websites. It includes aspects such as web design, web publishing, web programming, and database management. It is the creation of an application that works over the internet i.e. websites. Web development is typically broken down into 3 core areas: Frontend, Backend, Full Stack Development.</p>
     
        <div class="box-container">
         <div class="courses-box">

          <div class="box">
            <a href="playlist.php" class="thumb">
                <div class="video-img">
                <img src="images/thumb-1.png" alt="">
                </div>
                <div>
                 <i class="fas fa-play"></i>
                </div>
              <h3>complete HTML course</h3>
            </a>
         </div>
     
           <div class="box">
            <a href="" class="thumb">
                <div>
                <img src="images/thumb-2.png" alt="">
                </div>
                <div>
                 <i class="fas fa-play"></i>
                </div>
              <h3>complete CSS course</h3>
            </a>
          </div>
     
           <div class="box">
            <a href="" class="thumb">
                <div>
                <img src="images/thumb-3.png" alt="">
                </div>
                <div>
                 <i class="fas fa-play"></i>
                </div>
              <h3>complete JS course</h3>
            </a>
    
          </div>
           <button><a href="playlist.php" class="courses-btn">View Courses</a></button>
         </div>

         <h2>Introduction to Programming Languages</h2>
         <p>A programming language is a formal language that specifies a set of instructions for a computer to perform specific tasks. It’s used to write  software programs and applications, and to control and manipulate computer systems. There are many different programming languages, each with its own syntax, structure, and set of commands. Some of the most commonly used programming languages include Java, Python, <br> C++, JavaScript, and C#. The choice of programming language depends on the specific requirements of a project, including the platform being cused, the intended audience, and the desired outcome. </p>

         <div class="courses-box">
     
           <div class="box">
              
                <div class="thumb">
                    <img src="images/c.jpg" alt="image">
                   
   
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
           <button><a href="playlist.php" class="courses-btn">View Courses</a></button>
         </div>

         <h2>AI in Cybersecurity </h2>
         <p>AI in cybersecurity is revolutionizing the way organizations protect their digital assets and respond to cyber threats. By leveraging artificial  intelligence, cybersecurity systems can analyze vast amounts of data, detect anomalies, predict potential attacks, and automate responses in real-time. This dynamic and adaptive approach enhances the accuracy, efficiency, and speed of threat detection and mitigation.</p>
           
         <div class="courses-box">
           <div class="box">
              
              <div class="thumb">
                 <img src="images/Ai.avif" alt="">
                 
              </div>
              <h3 class="title"> Aritificial Intelligence</h3>

           </div>
     
           <div class="box">
              
              <div class="thumb">
                 <img src="images/Ml.jpg" alt="">
                 
              </div>
              <h3 class="title">Machine Learning</h3>

           </div>
     
           <div class="box">
             
              <div class="thumb">
                 <img src="images/cyber security.png" alt="">

              </div>
              <h3 class="title">Cyber Security</h3>

           </div>
           <button><a href="playlist.php" class="courses-btn">View All Courses</a></button>
         </div>
     
        </div>
     
     </section>

     <!-- section 2 -->

     <div class="courses-section-2">
        <h2>Find the best online training courses for your team</h2>
     <div class="section-2-container">
        <div class="section-2-img">
            <img src="images/graducation.jpg" alt="">
            <h4>Learning & Development</h4>
            <p>Deliver L&D programs that upskill your entire workforce with courses taught by instructors from across the globe in a variety of dynamic formats.</p>
        </div>
        <div class="section-2-img">
            <img src="images/handshake.jpg" alt="">
            <h4>Human Resources</h4>
            <p>Prepare your HR team to attract, grow, and retain talent by equipping them with the tools and skills they need to do their best work.</p>
        </div>
        <div class="section-2-img">
            <img src="images/engineering.jpg" alt="">
            <h4>Engineering</h4>
            <p>Upgrade skills to stay ahead of the curve. Offer hands-on practice and training on cutting-edge technologies.</p>
        </div>
        <div class="section-2-img">
            <img src="images/operations.jpg" alt="">
            <h4>IT Operations</h4>
            <p>Give your team anytime access to the latest cloud skills and security certifications.</p>
        </div>
        <div class="section-2-img ">
            <img src="images/datascience.jpg" alt="">
            <h4>Data Science</h4>
            <p>Make data-driven business decisions. Train your team on visualization tools, analytics platforms, and more to generate and share key insights.</p>
        </div>
        <div class="section-2-img">
            <img src="images/teching.webp" alt="">
            <h4>Leaders & Managers</h4>
            <p>Empower your leaders and managers to learn together, so they can impact cultural change at your company and drive business results.</p>
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