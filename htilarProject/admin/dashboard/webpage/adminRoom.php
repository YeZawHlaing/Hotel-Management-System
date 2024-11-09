<?php
include "/xampp/htdocs/htilarProject/configuration/dbConfig.php";
include "/xampp/htdocs/htilarProject/admin/dashboard/webpage/check.php";

if (isset($_POST["submit"])) {
    // Room view
    $file_name = $_FILES["photo"]["name"];
    $temp_name = $_FILES["photo"]["tmp_name"];
    $folder = "C:/xampp/htdocs/htilarProject/client/assets/" . $file_name;

    // Room view end
    $room_type = $_POST["type"];
    $price = $_POST["price"];
    $bed = $_POST["bed"];
    $adult = $_POST["adult"];
    $size = $_POST["size"];


    $insert_query = mysqli_query($con, "INSERT INTO room (room_view, type, price, bed, adult, size) VALUES ('$file_name', '$room_type', '$price', '$bed', '$adult', '$size')");

    if (move_uploaded_file($temp_name, $folder)) {
        header("Location: ../webpage/adminRoom.php");
    } else {
        echo "<h2>Upload failed</h2>";
    }

    if ($insert_query) {
        echo "Room uploaded successfully";
    } else {
        echo "Error: " . mysqli_error($con);
    }
}

mysqli_close($con);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
    <link rel="stylesheet" href="../webpage/style/adminRoom.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- font link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">

    <!-- icon link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> -->



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
            height: 100vh;
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

                        <li class="nav-item">
                            <a class="nav-link text-white" href="../webpage/booking.php">Booking</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-white" href="../webpage/adminRoom.php">manage rooms</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  text-white" href="../webpage/manageAvality.php">avaliable room</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  text-white" href="../webpage/manageRoom.php">room dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  text-white" href="../webpage/roomNumber.php">manage reservation</a>
                        </li>
                        <li class="nav-item"><a class="nav-link text-white" href="../webpage/manageDish.php">manage contact</a></li>
                        <li class="nav-item"><a class="nav-link text-white" href="../webpage/manageEvent.php">manage events</a></li>
                        <li class="nav-item"><a class="nav-link text-white " href="../webpage/eventDashboard.php">event dashboard</a></li>
                    </ul>
                    <a href="../webpage/login.php" class="text-white " style="text-decoration:none;display:flex;margin-top:100px;margin-left:17px">log out</a>
                </div>
            </div>
            <!-- right -->
            <div class="col-auto col-md-8 col-lg-9 min-vh-100">
                <form id="body" method="post" action="../webpage/adminRoom.php" enctype="multipart/form-data" autocomplete="off"> <!--form-->
                    <div class="container-sm text-black">
                        <div class="text-center pt-5">
                            <h3>Upload Room</h3>
                        </div>
                        <div class="row g-3">
                            <div class="col">
                                <div class="mt-1">
                                    <label for="#">Room Type</label>
                                    <input
                                        type="text"
                                        name="type"
                                        class="form-control text-black "
                                        placeholder="room type" />
                                </div>

                                <div class="mt-3">
                                    <label for="exampleFormControlInput1" class="form-label">Price</label>
                                    <input
                                        type="text"
                                        name="price"
                                        class="form-control text-black"
                                        id="exampleFormControlInput1"
                                        placeholder="price" />
                                </div>
                                <div class="mt-3">
                                    <label for="exampleFormControlInput1" class="form-label">Bed</label>
                                    <input
                                        type="text"
                                        name="bed"
                                        class="form-control text-black"
                                        id="exampleFormControlInput1"
                                        placeholder="bed" />
                                </div>

                                <div class="mt-3">

                                </div>

                                <div class="form-group mt-3">
                                    <label for="dob">adult</label>
                                    <input
                                        type="text"
                                        name="adult"
                                        placeholder="adult"
                                        id="dob"
                                        class="form-control form-control-sm rounded-0 text-black " />
                                </div>
                                <div class="form-group mt-3">
                                    <label for="dob">size</label>
                                    <input
                                        type="text"
                                        name="size"
                                        placeholder="size"
                                        id="size"
                                        class="form-control form-control-sm rounded-0 text-black " />
                                </div>

                            </div>

                            <!-- image upload -->
                            <div class="col mt-5">
                                <div class="row row-cols-2 row-cols-lg-3 g-2 g-lg-3">
                                    <div class="col">
                                        <div class="pic">
                                            <label for="photoUpload" class="plusIcon"> <i class="bi bi-plus"></i></label>
                                            <input class="plusIcon" type="file" id="photoUpload" name="photo">


                                        </div>
                                    </div>


                                </div>

                                <div class="atLeast">

                                    <span>Add Room view</span>
                                </div>

                            </div>

                        </div>


                        <div class="text-center">

                            <input class=" mt-3 py-2 px-5 btn btn-primary  fw-bold" type="submit" name="submit" value="Upload">
                        </div>

                    </div>
                </form>
                <br><br><br>
                <h2 class="text-center">Update Room</h2>
                <form action="../service/updateRoomCate.php" method="post">
                    <div class="mb-3">
                        <label for="roomId" class="form-label">Enter Room id</label>
                        <input type="number" class="form-control" id="roomId" name="roomId">
                    </div>
                    <div class="mb-3">
                        <label for="roomprice" class="form-label">Update Price</label>
                        <input type="text" class="form-control" id="roomId" name="price">
                    </div>
                  

                    <button type="submit" name="submit" class="btn btn-primary">Update</button>
                </form>

                <br><br><br>
                <h2 class="text-center">Update Room_View</h2>
                <form action="../service/updateRoomImg.php" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                        <label for="roomId" class="form-label">Enter Room id</label>
                        <input type="number" class="form-control" id="roomId" name="roomId">
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">update file</label>
                        <input class="form-control" type="file" id="formFile" name="photo">
                    </div>

                    <button type="submit" name="submit" class="btn btn-primary">Update</button>
                </form>


            </div>
            <!-- right end -->
        </div>
    </div>

</body>

</html>