<?php
include "/xampp/htdocs/htilarProject/configuration/dbConfig.php";
include "/xampp/htdocs/htilarProject/admin/dashboard/webpage/check.php";

$fetching_contact = mysqli_query($con, "SELECT * FROM contact");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../webpage/style/booking.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- Font and Icon links -->
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
</head>
 <!-- Custom CSS -->
 <style>
        body {
            font-family: 'Lora', serif;
        }

        .left {
            position: fixed;
            top: 0;
            bottom: 0;
            width: 250px; /* Adjust the width as needed */
            background-color:  #08121e;
            
            overflow-y: auto;
        }

        .right {
            margin-left: 250px; /* Same width as the fixed sidebar */
            padding: 20px;
            height: 100vh;
            overflow-y: auto;
        }
    </style>
<body>
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <!-- Left sidebar -->
         
            <div class="col-auto left">
                <a href="#" class="d-flex text-decoration-none align-items-center mt-2">
                    <span class="text-white text-uppercase text-center">Admin Panel</span>
                </a>
                <ul class="nav nav-pills flex-column mt-5">
                    <li class="nav-item"><a class="nav-link text-white" href="../webpage/booking.php">Booking</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="../webpage/adminRoom.php">Manage Rooms</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="../webpage/manageAvality.php">Available Room</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="../webpage/manageRoom.php">Room Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="../webpage/roomNumber.php">Manage Reservation</a></li>
                    <li class="nav-item"><a class="nav-link text-white active" href="../webpage/manageDish.php">Manage Contact</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="../webpage/manageEvent.php">Manage Events</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="../webpage/eventDashboard.php">Event Dashboard</a></li>
                </ul>

                <a href="../webpage/login.php" class="text-white " style="text-decoration:none;display:flex;margin-top:100px;margin-left:17px">log out</a>
            </div>
            
            <!-- Right content area -->
            <div class="col right">
                <?php 
                while ($row = mysqli_fetch_assoc($fetching_contact)) {
                ?>
                    <table class="table table-striped">
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th>Message</th>
                            <th>Date</th>
                        </tr>
                        <tr>
                            <td><?php echo $row["name"]; ?></td>
                            <td><?php echo $row["email"]; ?></td>
                            <td><?php echo $row["subject"]; ?></td>
                            <td><?php echo $row["message"]; ?></td>
                            <td><?php echo $row["date"]; ?></td>
                        </tr>
                    </table>
                <?php } ?>
            </div>
        </div>
    </div>
</body>

</html>
