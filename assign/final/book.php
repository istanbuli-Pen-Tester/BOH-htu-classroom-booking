<?php

require 'con.php';
session_start();
if(isset($_POST['bookform'])){

    print_r($_POST);

    $id=$_SESSION['id'];
    $name = $_POST['name'];
    $room = $_POST['room'];
    $num_of_stud = $_POST['students'];
    $date = $_POST['date'];
    $from_t = $_POST['from'];
    $to_t = $_POST['to'];


    $sql = "INSERT INTO bookings (user_id, name, room, num_of_stud, date, from_t, to_t) VALUES ('$id', '$name', '$room', '$num_of_stud', '$date', '$from_t', '$to_t')";
if(mysqli_query($con, $sql)){
    header("Location: bookingHistory.php");
}else {
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
    <link rel="stylesheet" href="css/book.css">
    <link rel="stylesheet" href="css/up.css">

    <style>
     
    </style>
</head>
<body>
    <div id="all">
        <header>
            <nav>
                <img id="logo" src="res/logo.png" alt="logo">
                <h1>Book</h1>
                <a href="index.php">Home</a>
            </nav>
        </header>

        <main>
            <div>
                <form id="bookform" method="post">
                    <h4>put your info to send a request</h4>

                    <label for="name">name:</label>
                    <input type="text" placeholder="name" id="name" name="name" required>

                    <label for="room">choose the room you want to book</label>
                    <select id="room" name="room">
                        <option value="S-217">S-217</option>
                        <option value="S-207">S-207</option>
                        <option value="S-212">S-212</option>
                        <option value="W-201">W-201</option>
                        <option value="W-202">W-202</option>
                        <option value="W-203">W-203</option>
                    </select>

                    <label for="students">number of students</label>
                    <input type="number" id="students" name="students" value="10" min="1" max="30">

                    <label for="date">date</label>
                    <input type="date" id="date" name="date" value="2024-07-31">

                    <label for="from">from</label>
                    <input type="time" id="from" name="from">

                    <label for="to">to</label>
                    <input type="time" id="to" name="to">

                    <button type="submit" name="bookform">submit request</button>
                </form>
            </div>
        </main>

        <footer>
            <p>all rights are resourved &#169;</p>
            <a href="https://jo.linkedin.com/in/abdullah-istanbuli-593598244?trk=people-guest_people_search-card">
                <img src="https://upload.wikimedia.org/wikipedia/commons/c/ca/LinkedIn_logo_initials.png" alt="LinkedIn">
            </a>
        </footer>
    </div>
</body>
</html>