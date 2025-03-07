<?php
include 'process.php';
session_start();

if(isset($_POST['logIn'])){
    $email = $conn->real_escape_string($_POST['email']);
    $password = $conn->real_escape_string($_POST['password']);

    $query = "SELECT * FROM signup WHERE email='$email'";
    $result = $conn->query($query);

    if($result->num_rows === 1){
        $user = $result->fetch_assoc();

        if(password_verify($password, $user['password'])){
            $_SESSION['user_id']=$user['id'];
            $_SESSION['email']=$user['email'];

            header("location: home.php");
            exit();
        }else{
            echo "<script>alert('Invalid email or password')</script>";
        }
    }else{
        echo "<script>alert('Invalid email or password')</script>";
    }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
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
                <a href="home.html">FreeLearn.</a>
            </div>
             <div class="nav-bar">
                <a href="home.html">Home</a>
                <a href="about.html">About</a>
                <a href="course.html">Courses</a>
                <a href="faculty.html">Faculty</a>
                <a href="contact.html">Contact</a>
            </div>
       </div>
     </header>
<div class="login-page">
      

     <div class="login-section">
        <div>
        <h2>Log-in</h2>
        <form action="" method="post">
            <input type="email" placeholder="Email" name="email" required> <br>
            <input type="password" placeholder="password" name="password" required> <br>
            
            <input type="submit" value="Login" class="submit-btn" name="logIn">
        </form>
    </div>
    <div class="login-section-2">
        <h4>Don't have an account?</h4>
        <a href="signin.html">Sign up</a>
    </div>
     </div>

     <div>
        <img src="images/login img.webp" alt="">
     </div>


</div> 

<footer>
    <div class="qlinks">
        <div>
            <h3>Quick Links</h3>
        </div>
        
        <div>
            <a href="home.html">Home</a>
            <a href="about.html">About</a>
            <a href="course.html">Courses</a>
            <a href="faculty.html">Faculty</a>
            <a href="contact.html">Contact</a>
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
