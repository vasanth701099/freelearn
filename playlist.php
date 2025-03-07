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
    <title>playlist</title>
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

 
   <!-- side menu bar -->
    <div class="side-bar">
        <header>Courses</header>
       
        <ul>
            <li><a href="#html_courses"><i class="fab fa-html5"></i>HTML</a></li>
            <li><a href="#css_courses"><i class="fab fa-css3-alt"></i>CSS</a></li>
            <li><a href="#js_courses"><i class="fab fa-js"></i>Javascript</a></li>
            <li><a href=""><i class="fab fa-python"></i>Python</a></li>
            <li><a href=""><i class="fab fa-java"></i>Java</a></li>
            <li><a href=""><i class="fab fa-php"></i>php</a></li>
            <li><a href=""><i class="fab fa-node-js"></i>Node-js</a></li>
            <li><a href=""><i class="fab fa-react"></i>React</a></li>
            <li><a href=""><i class="fab fa-angular"></i>Angular</a></li>
            <li><a href=""><i class="fab fa-git"></i>Git</a></li>
            <li><a href=""><i class="fab fa-swift"></i>Swift</a></li>
            <li><a href=""><i class="fab fa-kotlin"></i>Kotlin</a></li>
            <li><a href=""><i class="fab fa-rust"></i>Rust</a></li>
            <li><a href=""><i class="fab fa-sharp"></i>C#</a></li>
            <li><a href=""><i class="fab fa-suttlefish"></i>C++</a></li>
            <li><a href=""><i class="fab fa-js-square"></i>Typescript</a></li>
        </ul>
    </div>
    
   <!--  video playlist  -->
    
     
    <div class="video-playlist-section" >
      <img src="images/coures video banner.jpg" alt="" class="video-wathcing-img">
    <!-- html courses -->
   <section class="playlist-details" >

    <h1 class="heading" id="html_courses">playlist details</h1>
    <hr>
    <div class="row">
 
       <div class="column">
        <div class="thumb">
             <img src="images/thumb-1.png" alt="">
        </div>

       </div>
       <div class="column">
          <div class="tutor">
             <img src="images/thumb-1.png" alt="">
             <div>
                <h3>john deo</h3>
                <span>21-10-2022</span>
             </div>
          </div>
    
          <div class="details">
             <h3>complete HTML tutorial</h3>
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum minus reiciendis, error sunt veritatis exercitationem deserunt velit doloribus itaque voluptate.</p>
             <a href="teacher_profile.html" class="inline-btn">view profile</a>
          </div>
       </div>
    </div>
 
 </section>
 
 <section class="playlist-videos">
 
    <h1 class="heading">playlist videos</h1>
    <hr>
 
    <div class="box-container">
 
       <a class="box" href="watch_video.php">
          <i class="fas fa-play"></i>
          <img src="images/post-1-1.png" alt="">
          <h4>complete HTML tutorial (part 01)</h4>
         
       </a>
 
       <a class="box" href="watch_video.php">
          <i class="fas fa-play"></i>
          <img src="images/post-1-2.png" alt="">
          <h4>complete HTML tutorial (part 02)</h4>
       </a>
 
       <a class="box" href="watch_video.php">
          <i class="fas fa-play"></i>
          <img src="images/post-1-3.png" alt="">
          <h4>complete HTML tutorial (part 03)</h4>
       </a>
 
       <a class="box" href="watch_video.php">
          <i class="fas fa-play"></i>
          <img src="images/post-1-4.png" alt="">
          <h4>complete HTML tutorial (part 04)</h4>
       </a>
 
       <a class="box" href="watch_video.php">
          <i class="fas fa-play"></i>
          <img src="images/post-1-5.png" alt="">
          <h4>complete HTML tutorial (part 05)</h4>
       </a>
 
       <a class="box" href="watch_video.php">
          <i class="fas fa-play"></i>
          <img src="images/post-1-6.png" alt="">
          <h4>complete HTML tutorial (part 06)</h4>
       </a>
 
    </div>
 
 </section>


 <!-- css courses -->
  
 
 <section class="playlist-details">

    <h1 class="heading"  id="css_courses" >playlist details</h1>
    <hr>
    <div class="row">
 
       <div class="column">
        <div class="thumb">
             <img src="images/thumb-2.png" alt="">
        </div>

       </div>
       <div class="column">
          <div class="tutor">
             <img src="images/thumb-2.png" alt="">
             <div>
                <h3>john deo</h3>
                <span>21-10-2022</span>
             </div>
          </div>
    
          <div class="details">
             <h3>complete CSS tutorial</h3>
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum minus reiciendis, error sunt veritatis exercitationem deserunt velit doloribus itaque voluptate.</p>
             <a href="teacher_profile.html" class="inline-btn">view profile</a>
          </div>
       </div>
    </div>
 
 </section>
 
 <section class="playlist-videos">
 
    <h1 class="heading">playlist videos</h1>
    <hr>
 
    <div class="box-container">
 
       <a class="box" href="watch_video.php">
          <i class="fas fa-play"></i>
          <img src="images/post-2-1.png" alt="">
          <h4>complete CSS tutorial (part 01)</h4>
       </a>
 
       <a class="box" href="watch_video.php">
          <i class="fas fa-play"></i>
          <img src="images/post-2-2.png" alt="">
          <h4>complete CSS tutorial (part 02)</h4>
       </a>
 
       <a class="box" href="watch_video.php">
          <i class="fas fa-play"></i>
          <img src="images/post-2-3.png" alt="">
          <h4>complete CSS tutorial (part 03)</h4>
       </a>
 
       <a class="box" href="watch_video.php">
          <i class="fas fa-play"></i>
          <img src="images/post-2-4.png" alt="">
          <h4>complete CSS tutorial (part 04)</h4>
       </a>
 
       <a class="box" href="watch_video.php">
          <i class="fas fa-play"></i>
          <img src="images/post-2-5.png" alt="">
          <h4>complete CSS tutorial (part 05)</h4>
       </a>
 
      
 
    </div>
 
 </section>
 
</div>
 

       
</body>

</html>