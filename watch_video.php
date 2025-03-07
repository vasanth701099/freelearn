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
    <title>watch-video</title>
     <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
   <!-- css file link -->
    <link rel="stylesheet" href="style.css">
    <!-- google font -->
<!--     <link rel="preconnect" href="https://fonts.googleapis.com">
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

     <div class="side-bar">
        <header>Courses</header>
       
        <ul>
            <li><a href="playlist.php"><i class="fab fa-html5"></i>HTML</a></li>
            <li><a href="playlist.php"><i class="fab fa-css3-alt"></i>CSS</a></li>
            <li><a href="playlist.php"><i class="fab fa-js"></i>Javascript</a></li>
            <li><a href="playlist.php"><i class="fab fa-python"></i>Python</a></li>
            <li><a href="playlist.php"><i class="fab fa-java"></i>Java</a></li>
            <li><a href="playlist.php"><i class="fab fa-php"></i>php</a></li>
            <li><a href="playlist.php"><i class="fab fa-node-js"></i>Node-js</a></li>
            <li><a href="playlist.php"><i class="fab fa-react"></i>React</a></li>
            <li><a href="playlist.php"><i class="fab fa-angular"></i>Angular</a></li>
            <li><a href="playlist.php"><i class="fab fa-git"></i>Git</a></li>
            <li><a href="playlist.php"><i class="fab fa-swift"></i>Swift</a></li>
            <li><a href="playlist.php"><i class="fab fa-kotlin"></i>Kotlin</a></li>
            <li><a href="playlist.php"><i class="fab fa-rust"></i>Rust</a></li>
            <li><a href="playlist.php"><i class="fab fa-sharp"></i>C#</a></li>
            <li><a href="playlist.php"><i class="fab fa-suttlefish"></i>C++</a></li>
            <li><a href="playlist.php"><i class="fab fa-js-square"></i>Typescript</a></li>
        </ul>
    </div>

    <!-- section1 watch-video -->
     <div class="video-wathcing">
        <video src="videos/vid-1.mp4" controls width="1050px"></video>
     </div>

    
</body>
</html>