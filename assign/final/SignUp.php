<?php

require 'con.php';

if (isset($_POST['signup'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";

    if (mysqli_query($con, $sql)) {
        header("Location: SignIn.php");
    } else {
        echo "Error: " . mysqli_error($con);
    }    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOH</title>
    <link rel="icon" type="image/png" href="res/logo.png">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/SiginUp.css">

    
</head>
<body>
    <div id="all">
    <header>
        <nav>
            <img id="logo" src="res/logo.png" alt="logo">

            <h1>Sign up</h1>

            <a href="SignIn.php">Sign In</a>
        </nav>
    </header>

    <main>
        <div>
            <form id="signupForm" method="post" onsubmit="return validatePasswords()">
                <h4>put your info here:</h4>
                <label for="username">UserName</label>
                <input type="text" placeholder="Username" id="username" name="username" required>
    
                <label for="email">email</label>
                <input type="email" placeholder="email" id="email" name="email" required>
                
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="password" required>
                
                <label for="repassword">re-write Password</label>
                <input type="password" name="repassword" id="repassword" placeholder="re-write Password" required>
                
                <button type="submit" id="createAccount" name="signup">create account</button>
                
                </form>

        </div>
    </main>


    <footer>
        <p>all rights are resourved &#169;</p>
        <a href="https://jo.linkedin.com/in/abdullah-istanbuli-593598244?trk=people-guest_people_search-card">
            <img src="https://upload.wikimedia.org/wikipedia/commons/c/ca/LinkedIn_logo_initials.png" alt="LinkedIn" >
        </a>
          
          
    </footer>
</div>
<script src="js/pass.js"></script>
</body>
</html>