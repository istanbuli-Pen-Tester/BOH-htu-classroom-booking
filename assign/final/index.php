<?php

require 'con.php';
session_start();
if(isset($_SESSION['id'])){
$id=$_SESSION['id'];
}else {
    header("Location: SignUp.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home.BOH</title>
    <link rel="icon" type="image/png" href="res/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <header>
        <nav>
            <img id="logo" src="res/logo.png" alt="logo">

            <h1>Welcome to BOH</h1>

            <div id="hi">
                <div class="spinner-grow text-primary" role="status">
                    <span class="visually-hidden">Loading...</span>
                  </div>
            <a href="book.php">Book Now</a>
            <a href="#about">About</a>
            <a href="#contact">Contact</a>

                <div id="dropdown">
                <img id="pfp" src="res/pfp.webp" alt="profile">
                        <div id="menu">
                        <a href="bookingHistory.php">booking history</a>
                        <a href="SignIn.php">login</a>
                        </div>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <img src="res/HTU.jpeg" alt="HTU building">
        
        
        <div id="iteam2">
            
           
        <h4 id="about">About Us</h4>
        <p>We are students at htu we created this website to facilitate finding a place to study much easier for our students,
            in this website you can book an empty room and your request will be proccessed by a teacher and then you have your studying seession 
        </p>
        </div>


    </main>
    
    
    <footer>
        <p id="contact">all rights are resourved &#169;</p>
        <a href="https://jo.linkedin.com/in/abdullah-istanbuli-593598244?trk=people-guest_people_search-card">
            <img src="https://upload.wikimedia.org/wikipedia/commons/c/ca/LinkedIn_logo_initials.png" alt="LinkedIn" >
        </a>

    </footer>
</body>
</html>