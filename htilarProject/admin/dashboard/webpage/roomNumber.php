<?php
include "/xampp/htdocs/htilarProject/configuration/dbConfig.php";
include "/xampp/htdocs/htilarProject/admin/dashboard/webpage/check.php";

if (isset($_POST["submit"])) {
    $room_number = intval($_POST["roomno"]);
    $room_id = intval($_POST["roomId"]);
    $status = intval($_POST["status"]);


    $stmt = $con->prepare("INSERT INTO room_avaliable (room_no, status, room_id) VALUES (?, ?, ?)");
    $stmt->bind_param("iii", $room_number, $status, $room_id);

    if ($stmt->execute()) {
        header("Location: ../webpage/manageAvality.php");
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

mysqli_close($con);
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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>

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
<body style="font-family:  'Lora', serif;">
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-4 col-lg-3 min-vh-100">
                <div class="left p-2">
                    <a href="" class="d-flex text-decoration-none align-items-center mt-2">
                        <span class="text-white text-uppercase text-center">Admin Panel</span>
                    </a>
                    <ul class="nav nav-pills flex-column mt-5">

                        <li class="nav-item"><a class="nav-link text-white" href="../webpage/booking.php">Booking</a></li>
                        <li class="nav-item"><a class="nav-link text-white" href="../webpage/adminRoom.php">manage rooms</a></li>
                        <li class="nav-item"><a class="nav-link text-white" href="../webpage/manageAvality.php">available room</a></li>
                        <li class="nav-item"><a class="nav-link text-white" href="../webpage/manageRoom.php">room dashboard</a></li>
                        <li class="nav-item"><a class="nav-link text-white active" href="../webpage/roomNumber.php">manage reservation</a></li>
                        <li class="nav-item"><a class="nav-link text-white" href="../webpage/manageDish.php">manage contact</a></li>
                        <li class="nav-item"><a class="nav-link text-white" href="../webpage/manageEvent.php">manage events</a></li>
                        <li class="nav-item"><a class="nav-link text-white" href="../webpage/eventDashboard.php">event dashboard</a></li>
                    </ul>

                    <a href="../webpage/login.php" class="text-white " style="text-decoration:none;display:flex;margin-top:100px;margin-left:17px">log out</a>
                </div>

                
            </div>
            <div class="col-auto col-md-8 col-lg-9 min-vh-100">
                <div class="container">
                    <h2 class="text-center">Upload Room</h2>
                    <form action="../webpage/roomNumber.php" method="post">
                        <div class="mb-3">
                            <label for="roomno" class="form-label">Enter Room Number</label>
                            <input type="number" class="form-control" id="roomno" name="roomno">
                        </div>
                        <div class="mb-3">
                            <label for="roomId" class="form-label">Enter Room Type Id</label>
                            <input type="text" class="form-control" id="roomId" name="roomId">
                        </div>
                        <div class="mb-3">
                            <label for="status" class="form-label">Enter Status</label>
                            <input type="text" class="form-control" id="status" name="status">
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Upload</button>
                    </form>
                    <br><br><br>
                    <h2 class="text-center">Update Room</h2>
                    <form action="../service/updateRoom.php" method="post">
                        <div class="mb-3">
                            <label for="roomno" class="form-label">Enter Room Number</label>
                            <input type="number" class="form-control" id="roomno" name="roomno">
                        </div>
                        <div class="mb-3">
                            <label for="roomId" class="form-label">Enter Room Type Id</label>
                            <input type="text" class="form-control" id="roomId" name="roomId">
                        </div>

                        <button type="submit" name="submit" class="btn btn-primary">Update</button>
                    </form>
                    <br><br><br>
                    <h2 class="text-center">Update Status</h2>
                    <form action="../service/updateStatus.php" method="post">
                        <div class="mb-3">
                            <label for="roomno" class="form-label">Enter Room Number</label>
                            <input type="number" class="form-control" id="roomno" name="roomno">
                        </div>
                        <div class="mb-3">
                            <label for="status" class="form-label">Enter Status</label>
                            <input type="text" class="form-control" id="status" name="status">
                        </div>

                        <button type="submit" name="submit" class="btn btn-primary">Update Status</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>