<?php 
  include "/xampp/htdocs/htilarProject/configuration/dbConfig.php";
  include "/xampp/htdocs/htilarProject/admin/dashboard/webpage/check.php";

  $fetching_rooms=mysqli_query($con,"SELECT room.*, room_avaliable.*
          FROM room
          INNER JOIN room_avaliable ON room.room_id = room_avaliable.room_id
          ");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
    <link rel="stylesheet" href="../webpage/style/manageAvality.css">
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
            
            overflow-y: auto;
        }

        .right {
            margin-left: 250px; /* Same width as the fixed sidebar */
            padding: 20px;
            height: 100vh;
            overflow-y: auto;
        }
    </style>
<body  style="font-family:  'Lora', serif;">
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
                            <a class="nav-link text-white" href="../webpage/adminRoom.php">manage rooms</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-white" href="../webpage/manageAvality.php">avaliable room</a>
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
                  <!--content  -->
    <div class="container">
       
       
<?php 
    while($row=mysqli_fetch_assoc($fetching_rooms)){
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
                         
                            <li>Room Type:<?php echo $row["type"] ?> </li>
                            <li>from <?php echo $row["price"] ?> USD/night</li>
                            <li>bed:<?php echo $row["bed"] ?> bed</li>
                            <li>max:<?php echo $row["adult"] ?> adult</li>
                            <li>size:<?php echo $row["size"] ?></li>
                            <li>price:<?php echo $row["price"] ?> USD</li>

                        </ul>
                        <?php if( $row["status"]==1){
                            echo "<button type='button' class='btn btn-primary text-white'>Active</button>";
                        }
                            else{
                                echo "<button type='button' class='btn btn-warning text-white'>InActive</button>";

                            } 
                        
                        ?>
                
                        
                       
                    </div>
                </div>
            </div>
        </div>
           <!-- new card end -->

           <?php } ?>
           
    </div>

    <!--content end-->
            </div>
             <!-- right end -->
        </div>
    </div>
</body>

</html>