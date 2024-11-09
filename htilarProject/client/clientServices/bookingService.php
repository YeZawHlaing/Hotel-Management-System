<?php
include "/xampp/htdocs/htilarProject/configuration/dbConfig.php";

$fetching_rooms=mysqli_query($con,"select * from booking");

if (isset($_POST["submit"])) {
   $u_name = $_POST["name"];
   $email = $_POST["email"];
   $ph_no = $_POST["ph_no"];
   $payment = $_POST["payment"];
   $room_number = $_POST["room_no"];
   $date = date("Y-m-d"); // Use a proper date format

   // Prepare and bind
   $stmt = $con->prepare("INSERT INTO booking (u_name, email, ph_no, payment_code, room_no, date) VALUES (?, ?, ?, ?, ?, ?)");
   $stmt->bind_param("ssssss", $u_name, $email, $ph_no, $payment, $room_number, $date);

   if ($stmt->execute()) {
       header('Location: ../webpage/room.php');
   } else {
       echo "Error: " . $stmt->error;
   }

   $stmt->close();
}

mysqli_close($con);
?>
