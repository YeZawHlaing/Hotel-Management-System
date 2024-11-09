<?php
include "/xampp/htdocs/htilarProject/configuration/dbConfig.php";

$fetching_event = mysqli_query($con, "select * from event");

?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="x-icon" href="../assets/logo.jpg">
    <title>Home</title>
    <link rel="stylesheet" href="../style/contact.css">
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
                            <a class="nav-link active" aria-current="page" href="home.php">Home</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="../webpage/room.php">Rooms</a>
                        </li>
                        <li class="nav-item dropdown mx-2">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Facilities
                            </a>

                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="restaurant.php">restaurant</a></li>

                                <li>
                                    <hr class="dropdown-divider">
                                </li>

                                <li><a class="dropdown-item" href="event.php">Event</a></li>
                            </ul>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link active" aria-current="page" href="./contact.php">Contact</a>
                        </li>


                    </ul>

                </div>
            </div>

        </nav>
    </header>
    <!--content  -->
    <!-- hero section -->
    <!-- carousel -->
    <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <!-- imgage start -->
            <div class="carousel-item active c-item">

                <img src="https://www.hawkscay.com/resources/media/user/1586185018-1585252667-Events_Header_1920x800_desktop_desktop.jpg" class="d-block w-100 c-img img-fluid" alt="..." style="filter: brightness(0.6);">


            </div>
            <!-- image end -->
            <!-- label start -->
            <div class="carousel-caption mt-2 mb-5 d-md-block" style="font-family:  'Lora', serif;">
                <h5 class="text-uppercase display-5 fw-bold mb-4">Event and Celebration</h5>
                <p class="text-uppercase">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem inventore ea a saepe, voluptatum dolor doloremque magni neque deserunt molestias, ipsum tenetur!</p>
            </div>
            <!-- label end -->
        </div>
    </div>
    <!-- hero section end -->
    <br>
    <!-- contact -->
    <?php
    while ($row = mysqli_fetch_assoc($fetching_event)) {
    ?>
        <div class="gallery container">
            <div class="row align-items-center">
                <!-- left side -->
                <div class="right-side col-lg-6 col-md-12 p-0">
                    <img class="img-fluid w-100 rounded" src="/htilarProject/client/assets/<?php echo $row["image"] ?>" alt="">
                </div>
                <!-- left side end -->
                <!-- right side -->
                <div class="left-side col-lg-6 col-md-12" style="font-family:  'Lora', serif; color:black;">
                    <h2><?php echo $row["title"] ?></h2>
                    <p><?php echo $row["description"] ?></p>

                </div>
                <!-- right side end -->

            </div>
        </div>
    <br><br><br>
        <!-- contact end -->

    <?php } ?>
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