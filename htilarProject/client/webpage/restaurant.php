<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="x-icon" href="../assets/logo.jpg">
    <title>Home</title>
    <link rel="stylesheet" href="../style/restaurant.css">
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

                <img src="../assets/res.jpg" class="d-block w-100 c-img img-fluid" alt="...">
                <!-- <img src="../assets/" class="d-block w-100 c-img img-fluid" alt="..."> -->


            </div>
            <!-- image end -->
        </div>
    </div>
    <!-- hero section end -->
    <br>
    <!--greeting-->
    <!-- line -->
    <div class="container position-relative">
        <i class="bi bi-x-diamond-fill position-absolute start-0 translate-middle-y" style="top: 50%;"></i>
        <h2 class="text-uppercase fw-bold tt"><span id="s">Dinning</span></h2>
        <i class="bi bi-x-diamond-fill position-absolute end-0 translate-middle-y" style="top: 50%;"></i>
    </div>
    <!-- line end -->
    <div class="container">

        <p class="text-uppercase text-center">
            Inspire yourself with an exquisite culinary journey that combines local cuisine with wellbeing cuisine,
            cooked with a contemporary flair by our talented chefs. Experience gastronomy that goes beyond
            nourishment, with a symphony of flavors in an elegant yet comforting atmosphere.
        </p>
    </div>

    <!-- greeting end -->
    <br><br>
    <!-- first session -->
    <div class="container first">
        <div class="row align-items-center">
            <!-- left side -->
            <div class="left-side col-lg-6 col-md-12" style="font-family:  'Lora', serif;">
                <h5 class="text-uppercase display-5 fw-bold mb-2 text-center">Breakfast</h5>
                <p class="text-uppercase text-center">“Facilities” is a broad term. The dictionary definition could technically refer to any aspect of a hotel property.</p>

            </div>
            <!-- left side end -->
            <!-- right side -->
            <div class="right-side col-lg-6 col-md-12 p-0">
                <img class="img-fluid w-100" src="https://vcdn1-english.vnecdn.net/2023/10/19/anansaigon33jpg1686303587-1697-1391-3214-1697679526.jpg?w=1200&h=0&q=100&dpr=1&fit=crop&s=20tV-hEhD1KeWk0mriDh8Q" alt="" style="border-top-left-radius: 220px;">
            </div>
            <!--right side end -->

        </div>
    </div>

    <!-- first seesion end -->
    <br>
    <!-- second session -->
    <div class="container second">
        <div class="row align-items-center">

            <!-- left side -->
            <div class="right-side col-lg-6 col-md-12 p-0">
                <img class="img-fluid w-100" src="../assets/bar.jpg" style="border-bottom-right-radius: 66px; filter: brightness(0.8);" alt="">
            </div>
            <!-- left side end -->

            <!-- right side -->
            <div class="left-side col-lg-6 col-md-12 d-flex flex-column align-items-center" style="font-family: 'Lora', serif; color:white">
                <h5 class="text-uppercase display-6 fw-bold mb-2 text-center">Sky Bar</h5>
                <p class="text-uppercase text-center">The dictionary definition could technically refer to any aspect of a hotel property.</p>
                <!-- <button class="btn btn-outline-warning text-white" style="margin-right: 25px; margin-bottom:13px;">Cocktails</button> -->
            </div>
            <!-- right side end -->

        </div>
    </div>

    <!-- second session end -->
    <br><br>
    <!-- list -->
    <div class="gallery container">
        <div class="row align-items-center">
            <!-- left side -->
            <div class="right-side col-lg-6 col-md-12">
                <div class="row">
                    <div class="col-6 mb-2">
                        <img src="../assets/food.jpeg" class="w-100 shadow-1-strong  mb-1 img-fluid" alt="Boat on Calm Water" style="border-top-left-radius: 90px;" />
                    </div>
                    <div class="col-6 mb-2">
                        <img src="../assets/vietking-vietnamese-cuisine-darby-street-cooks-hill-newcastle-21.jpg" class="w-100 shadow-1-strong  mb-1 img-fluid" alt="Boat on Calm Water" style="border-top-right-radius: 90px;" />
                    </div>
                </div>
            </div>
            <!-- left side end -->
            <!-- right side -->
            <div class="left-side col-lg-6 col-md-12" style="font-family:  'Lora', serif; color:black;">
                <h5 class="text-uppercase display-5 fw-bold mb-2 text-center">why choose us</h5>
                <p class="text-uppercase text-center">“Facilities” is a broad term. The dictionary definition could technically refer to any aspect of a hotel property, from the guest rooms to the car park.</p>

            </div>
            <!-- right side end -->

        </div>
    </div>
    <!-- list end -->
    <br><br>
    <!-- line -->
    <div class="container position-relative">
        <i class="bi bi-x-diamond-fill position-absolute start-0 translate-middle-y" style="top: 50%;"></i>
        <h3 class="text-uppercase fw-bold tt"><span id="s">special dish</span></h3>
        <i class="bi bi-x-diamond-fill position-absolute end-0 translate-middle-y" style="top: 50%;"></i>
    </div>
    <!-- line end -->
    <br>
    <!-- menu -->
    <div class="container">
        <div class="row">
            <!-- card1 -->
            <div class="col-lg-3 col-md-4 col-6 mb-4">
                <div class="card rounded" style="width: 100%; height:18rem;">
                    <img src="https://vietnamnomad.com/wp-content/uploads/2022/01/Top-Vietnamese-foods-in-2023-Nem-Ran.jpg" class="card-img-top img-fluid rounded" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">Nam run</h5>
                        <p class="card-text">$23.00</p>
                    </div>
                </div>
            </div>
            <!-- card1 end -->

            <!-- card2 -->
            <div class="col-lg-3 col-md-4 col-6 mb-4">
                <div class="card rounded" style="width: 100%; height:18rem;">
                    <img src="https://vietnamnomad.com/wp-content/uploads/2022/01/Top-Vietnamese-foods-in-2023-Goi-Cuon.jpg" class="card-img-top img-fluid rounded" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">Goi cuon</h5>
                        <p class="card-text">$28.00</p>
                    </div>
                </div>
            </div>
            <!-- card2 end -->

            <!-- card3 -->
            <div class="col-lg-3 col-md-4 col-6 mb-4">
                <div class="card rounded" style="width: 100%; height:18rem;">
                    <img src="https://vietnamnomad.com/wp-content/uploads/2022/01/Top-Vietnamese-foods-in-2023-Pho.jpg" class="card-img-top img-fluid rounded" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">Pho</h5>
                        <p class="card-text">$33.00</p>
                    </div>
                </div>
            </div>
            <!-- card3 end -->

            <!-- card4 -->
            <div class="col-lg-3 col-md-4 col-6 mb-4">
                <div class="card rounded" style="width: 100%; height:18rem;">
                    <img src="https://vietnamnomad.com/wp-content/uploads/2022/01/Top-Vietnamese-foods-in-2023-Bun-Bo-Hue.jpg" class="card-img-top img-fluid rounded" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">Bun bo Hue</h5>
                        <p class="card-text">$40.00</p>
                    </div>
                </div>
            </div>
            <!-- card4 end -->
        </div>
    </div>

    <!-- menu end -->
    <br><br>
    <!-- line -->
    <div class="container position-relative">
        <i class="bi bi-x-diamond-fill position-absolute start-0 translate-middle-y" style="top: 50%;"></i>
        <h3 class="text-uppercase fw-bold tt"><span id="s">enjoy your meal</span></h3>
        <i class="bi bi-x-diamond-fill position-absolute end-0 translate-middle-y" style="top: 50%;"></i>
    </div>
    <!-- line end -->
    <br>
    <div class="container">
    <p class="text-uppercase" style="font-family:'Lora', serif;text-align:center;">“Facilities” is a broad term. The dictionary definition could technically refer to any aspect of a hotel property, from the guest rooms to the car park.</p>

    </div>
    <!-- pic -->
    <div class="container d-flex justify-content-center">

<img src="../assets/res3.png" class="img-fluid w-80" alt="" style="object-fit: fill; border-top-left-radius: 100px; border-bottom-right-radius: 100px;">
</div>
    <!-- pic end -->
  

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
                            <p href="#!" style="color:	#FFFFFF;"><i class="bi bi-telephone" style="color:#FFFFFF"></i>&nbsp;&nbsp;+95 683 776 164</p>
                        </li>
                        <li class="mb-1">
                            <p href="#!" style="color:	#FFFFFF;"><i class="bi bi-envelope" style="color:#FFFFFF"></i>&nbsp;&nbsp;yezawhlaing0@gmail.com</p>
                        </li>
                        <li>
                            <p href="#!" style="color:	#FFFFFF;"><i class="bi bi-house-door" style="color:#FFFFFF"></i>&nbsp;&nbsp;Mandalay,29,78x79</p>
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