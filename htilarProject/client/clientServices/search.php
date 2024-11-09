<?php
include "/xampp/htdocs/htilarProject/configuration/dbConfig.php";



     $email = $_POST["email"];


    $fetching_bookings=mysqli_query($con,"SELECT 
        booking.*, 
        room_avaliable.*, 
        room.* 
    FROM 
        booking
    INNER JOIN 
        room_avaliable ON booking.room_no = room_avaliable.room_no
    INNER JOIN 
        room ON room_avaliable.room_id = room.room_id
    WHERE booking.email = '$email'");

    // $fetching_booking = mysqli_query($con, $fetching_rooms);


    if (!$fetching_bookings) {
        die("Query Failed: " . mysqli_error($con));
    }

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="x-icon" href="../assets/logo.jpg">
    <title>Home</title>
    <link rel="stylesheet" href="../style/room.css">
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

<body class="vh-100 overflow-x-hidden">
    <!-- nav bar -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="home.php">Ha Tinh</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ml">
                        <li class="nav-item mx-2">
                            <a class="nav-link active" aria-current="page" href="../webpage/home.php">Home</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="../webpage/room.php">Rooms</a>
                        </li>
                        <li class="nav-item dropdown mx-2">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Facilities
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="../webpage/restaurant.php">restaurant</a></li>
                                
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                          
                                <li><a class="dropdown-item" href="event.php">Event</a></li>
                            </ul>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link active" aria-current="page" href="../webpage/contact.php">Contact</a>
                        </li>
                       


                    </ul>

                </div>
            </div>

        </nav>
    </header>
    <!--content  -->
    <br><br><br>
    <div class="container">

        <?php
      
            while ($row = mysqli_fetch_assoc($fetching_bookings)) {
        ?>
                <!-- new card -->
                <div class="card mb-3" style="max-width: 1000px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="/htilarProject/client/assets/<?php echo $row["room_view"] ?>" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title text-uppercase">Room Number: <?php echo $row["room_no"] ?></h5>
                               
                                <ul>
                                    <li>User Name: <?php echo $row["u_name"] ?></li>
                                    <li>Email: <?php echo $row["email"] ?></li>
                                    <li>Phone Number: <?php echo $row["ph_no"] ?></li>
                                    <li>Date: <?php echo $row["date"] ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
        <?php
            } // End while
        
        ?>
    </div>

    <!--content end-->
    <br>
    <br>
    <br>
    <!-- my footer start -->
    <!-- Remove the container if you want to extend the Footer to full width. -->


    <footer style="background-color: #031b17;color:white">
        <div class="container p-4">
            <div class="row">
                <div class="col-lg-6 col-md-12 mb-4">
                    <h5 class="mb-3 text-white">Ha Tinh Resort</h5>
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste atque ea quis
                        molestias. Fugiat pariatur maxime quis culpa corporis vitae repudiandae aliquam
                        voluptatem veniam.
                    </p>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5 class="mb-3 text-white">links</h5>
                    <ul class="list-unstyled mb-0">
                        <li class="mb-1">
                            <a href="#!" style="color:	#FFFFFF;">FAQ</a>
                        </li>
                        <li class="mb-1">
                            <p href="#!" style="color:	#FFFFFF;"><i class="bi bi-telephone"></i>&nbsp;&nbsp;+95 683 776 164</p>
                        </li>
                        <li class="mb-1">
                            <p href="#!" style="color:	#FFFFFF;"><i class="bi bi-envelope"></i>&nbsp;&nbsp;yezawhlaing0@gmail.com</p>
                        </li>
                        <li>
                            <p href="#!" style="color:	#FFFFFF;"><i class="bi bi-house-door"></i>&nbsp;&nbsp;Mandalay,29,78x79</p>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5 class="mb-1 text-white">opening hours</h5>
                    <table class="table" style="border-color: #666;">
                        <tbody>
                            <tr>
                                <td>Mon - Fri:</td>
                                <td>8am - 9pm</td>
                            </tr>
                            <tr>
                                <td>Sat - Sun:</td>
                                <td>8am - 1am</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2020 Copyright:
            <a class="text-white" href="https://mdbootstrap.com/">www.hatinh.com</a>
        </div>
        <!-- Copyright -->
    </footer>


    <!-- End of .container -->
</body>




</html>