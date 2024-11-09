<?php
include "/xampp/htdocs/htilarProject/configuration/dbConfig.php";

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="x-icon" href="../assets/logo.jpg">
    <title>Home</title>
    <link rel="stylesheet" href="../style/home.css">
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
                            <a class="nav-link active" aria-current="page" href="../webpage/contact.php">Contact</a>
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

                <img src="../assets/modern-resort.jpg" class="d-block w-100 c-img img-fluid" alt="...">

                <!-- label start -->
                <div class="carousel-caption mt-2 mb-5 d-md-block" style="font-family:  'Lora', serif;">
                    <p class="text-uppercase">Ha Tinh Resort</p>
                    <h5 class="text-uppercase display-5 fw-bold mb-4">Stay with us, feel<br> as home</h5>
                 
                </div>
                <!-- label end -->
                <!-- booking start -->
                 <div class="align-center" style="background-color: #031b17;padding:12px;display:flex;">
                <form class="d-flex" style="margin-left: 22%;" method="post" action="../clientServices/search.php">
        <input class="form-control me-2" type="search" placeholder="Search booking with email" aria-label="Search" name="email" style="width: 600px;">
        <button class="btn btn-outline-primary text-white" type="submit">Search</button>
      </form>
                 </div>
                <!-- booking end -->
            </div>
            <!-- image end -->
        </div>
    </div>
    <!-- hero section end -->
    <!-- sign in  start-->
    <!-- <div id="sign-in">
         <form action="" method="post">
         <label for="exampleFormControlInput1" class="form-label">Email address</label>
         <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
         </form>

      </div> -->

    <!-- sign in end -->
    <!-- mid section -->
    <div class="container mt-5">
        <div class="row align-items-center">
            <!-- left side -->
            <div class="left-side col-lg-6 col-md-12 mb-4" style="font-family:  'Lora', serif;">
                <h5 class="text-uppercase display-5 fw-bold mb-2">relax in our<br> resort</h5>
                <p class="text-uppercase">Standing in the heart of the city, our resort invites locals and travellers alike to enjoy style and design in a soulful setting. Take a moment for yourself with stunning city skyline views, or soak up the social buzz of the city in one of our atmospheric bars.</p>
            </div>
            <!-- left side end -->
            <!-- right side -->
            <div class="right-side col-lg-6 col-md-12">
                <div class="row">
                    <div class="col-6 mb-2">
                        <img src="https://cdna.artstation.com/p/assets/images/images/013/228/482/large/motaz-mostafa-ps-6.jpg?1538649768" class="w-100 shadow-1-strong rounded mb-1 img-fluid" alt="Boat on Calm Water" />
                    </div>
                    <div class="col-6 mb-2">
                        <img src="https://img.freepik.com/premium-photo/luxury-modern-hotel-resort-facade-architecture-coast-villa-picture-ai-generated-art_848903-2636.jpg" class="w-100 shadow-1-strong rounded mb-1 img-fluid" alt="Wintry Mountain Landscape" />
                    </div>
                    <div class="col-6 mb-2">
                        <img src="https://img.freepik.com/premium-photo/luxury-modern-hotel-resort-facade-architecture-coast-villa-picture-ai-generated-art_848903-2636.jpg" class="w-100 shadow-1-strong rounded mb-1 img-fluid" alt="Mountains in the Clouds" />
                    </div>
                    <div class="col-6 mb-2">
                        <img src="https://cdna.artstation.com/p/assets/images/images/013/228/482/large/motaz-mostafa-ps-6.jpg?1538649768" class="w-100 shadow-1-strong rounded mb-1 img-fluid" alt="Boat on Calm Water" />
                    </div>
                </div>
            </div>
            <!-- right side end -->
        </div>
    </div>
    <!-- mid section end -->
    <!-- card -->
    <div class="container mt-5 card-section">
        <div class="row align-items-center">
            <!-- left side -->
            <div class="right-side col-lg-6 col-md-12">
                <div class="row">
                    <div class="col-6 mb-2">
                        <div class="card" style="width: 12rem;">
                            <img src="../assets/room1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 mb-2">
                        <div class="card" style="width: 12rem;">
                            <img src="../assets/room1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- left side end -->
            <!-- right side -->
            <div class="left-side col-lg-6 col-md-12" style="font-family:  'Lora', serif;">

                <h5 class="text-uppercase display-5 fw-bold mb-2">rooms<br>
                    <!-- space -->
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <!-- space -->
                    & suites
                </h5>

                <p class="text-uppercase">Inspired by the playful synergy of the world’s natural elements, each of our 237 rooms and suites have been designed with comfort and style in mind.</p>
                <a href="../webpage/room.php"> <button type="button" class="btn btn-outline-primary text-black">View Rooms</button> </a>
            </div>
            <!-- right side end -->
        </div>
    </div>
    <!-- card end -->

    <!-- gallery-->
    <div class="gallery container">
        <div class="row align-items-center">
            <!-- left side -->
            <div class="left-side col-lg-6 col-md-12" style="font-family:  'Lora', serif; color:white;">
                <h5 class="text-uppercase display-5 fw-bold mb-2">why choose us</h5>
                <p class="text-uppercase">“Facilities” is a broad term. The dictionary definition could technically refer to any aspect of a hotel property, from the guest rooms to the car park.</p>

            </div>
            <!-- left side end -->
            <!-- right side -->
            <div class="right-side col-lg-6 col-md-12 p-0">
                <img class="img-fluid w-100" src="../assets/Vacation-House-in-South-Africa-designrulz-001.jpg" alt="">
            </div>
            <!-- right side end -->
        </div>
    </div>

    <!-- gallery end-->

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