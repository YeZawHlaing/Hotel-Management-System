<?php
include "/xampp/htdocs/htilarProject/configuration/dbConfig.php";

// Check database connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST["submit"])) {
   // Sanitize user inputs
   $name = htmlspecialchars(trim($_POST["name"]));
   $email = htmlspecialchars(trim($_POST["email"]));
   $subject = htmlspecialchars(trim($_POST["subject"]));
   $message = htmlspecialchars(trim($_POST["message"]));
   $date = date("Y-m-d"); // Use a proper date format

   // Prepare and bind
   $stmt = $con->prepare("INSERT INTO contact (name, email, subject, message, date) VALUES (?, ?, ?, ?, ?)");
   
   if ($stmt) {
       $stmt->bind_param("sssss", $name, $email, $subject, $message, $date);

       // Execute the statement and check for errors
       if ($stmt->execute()) {
           header('Location: ../webpage/contact.php');
           exit; // Use exit after header to stop further script execution
       } else {
           echo "Error: " . $stmt->error;
       }

       $stmt->close();
   } else {
       echo "Error preparing statement: " . $con->error;
   }
}

mysqli_close($con);
?>
