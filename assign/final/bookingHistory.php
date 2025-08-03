<?php
require 'con.php';
session_start();

$id = $_SESSION['id'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['update'])) {
        $booking_id = $_POST['booking_id'];
        $room = $_POST['room'];
        $students = $_POST['students'];
        $date = $_POST['date'];
        $from = $_POST['from'];
        $to = $_POST['to'];

        $update_query = "UPDATE bookings SET room='$room', num_of_stud='$students', date='$date', from_t='$from', to_t='$to' WHERE id='$booking_id' AND user_id='$id'";
        mysqli_query($con, $update_query);
    } elseif (isset($_POST['delete'])) {
        $booking_id = $_POST['booking_id'];
        $delete_query = "DELETE FROM bookings WHERE id='$booking_id' AND user_id='$id'";
        mysqli_query($con, $delete_query);
    }
}

$query = "SELECT * FROM bookings WHERE user_id='$id'";
$result = mysqli_query($con, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOH</title>
    <link rel="icon" type="image/png" href="res/logo.png">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/bookingHistory.css">
</head>
<body>
    <div id="all">
        <header>
            <nav>
                <img id="logo" src="res/logo.png" alt="BOH logo">
                <h1>Booking History</h1>
                <a href="index.php">Home</a>
            </nav>
        </header>

        <main>
            
                <?php while ($row = mysqli_fetch_assoc($result)) {
                    $name = $row['name'];
                    $room = $row['room'];
                    $num_of_stud = $row['num_of_stud'];
                    $date = $row['date'];
                    $from_t = $row['from_t'];
                    $to_t = $row['to_t'];
                    $booking_id = $row['id'];
                    
                ?>
                    <div class="booking-container">
                    <form method="post">
                        <div class="form-item">
                            <label for="room">Room</label>
                            <select id="room" name="room">
                                <option value="S-217" <?= $room == 'S-217' ? 'selected' : '' ?>>S-217</option>
                                <option value="S-207" <?= $room == 'S-207' ? 'selected' : '' ?>>S-207</option>
                                <option value="S-212" <?= $room == 'S-212' ? 'selected' : '' ?>>S-212</option>
                                <option value="W-201" <?= $room == 'W-201' ? 'selected' : '' ?>>W-201</option>
                                <option value="W-202" <?= $room == 'W-202' ? 'selected' : '' ?>>W-202</option>
                                <option value="W-203" <?= $room == 'W-203' ? 'selected' : '' ?>>W-203</option>
                            </select>
                        </div>

                        <div class="form-item">
                            <label for="students">Students</label>
                            <input type="number" id="students" name="students" value="<?= $num_of_stud ?>" min="1" max="30">
                        </div>

                        <div class="form-item">
                            <label for="date">Date</label>
                            <input type="date" id="date" name="date" value="<?= $date ?>">
                        </div>

                        <div class="form-item">
                            <label for="from">From</label>
                            <input type="time" id="from" name="from" value="<?= $from_t ?>">
                        </div>

                        <div class="form-item">
                            <label for="to">To</label>
                            <input type="time" id="to" name="to" value="<?= $to_t ?>">
                        </div>

                        <div class="form-item">
                            <input type="hidden" name="booking_id" value="<?= $booking_id ?>">
                            <button type="submit" name="update">Update</button>
                        </div>

                        <div class="form-item">
                            <button type="submit" name="delete">Delete</button>
                        </div>
                    </form>

                    
                    </div>
                <?php } ?>
            
        </main>

        <footer>
            <p>All rights reserved &#169;</p>
            <a href="https://jo.linkedin.com/in/abdullah-istanbuli-593598244?trk=people-guest_people_search-card">
                <img src="https://upload.wikimedia.org/wikipedia/commons/c/ca/LinkedIn_logo_initials.png" alt="LinkedIn">
            </a>
        </footer>
    </div>
</body>
</html>
