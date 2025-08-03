<?php
require 'con.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOH</title>
    <link rel="icon" type="image/png" href="res/logo.png">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/SignIn.css">
    <style>
        
    </style>
</head>
<body>
    <div id="all">
    <header>
        <nav>
            <img id="logo" src="res/logo.png" alt="logo">

            <h1>Sign in</h1>

            <a href="SignUp.php">Sign Up</a>
        </nav>
    </header>

    <main>
        <div>
        <form method="post" action="">
                <h4>Login Info:</h4>

                <label for="email">Email or username</label>
                <input type="text" placeholder="email or username" id="email" name="email" required>
        
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="password" required>
        
                <button type="submit" name="butnn">Login</button>
                <?php

                if (isset($_POST["butnn"])) {
                $username = $_POST['email'];
                $password = $_POST['password'];

                $sql = "SELECT * from users WHERE (email='$username' OR username='$username') AND password='$password'";
                $result = mysqli_query($con, $sql);
                $userDetails = mysqli_fetch_assoc($result);
                $id= $userDetails['id'];
                
                 if($userDetails){
                    session_start();
                    $_SESSION['id'] = $id;
                    header("Location: index.php");
                }else{
                    echo "<p>Invalid email or password</p>";
                }



            }
                ?>
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
</body>
</html>