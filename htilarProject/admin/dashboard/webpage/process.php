<?php 
include "/xampp/htdocs/htilarProject/configuration/dbConfig.php";

session_start(); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    } else {
      
        $stmt = $con->prepare("SELECT * FROM admin WHERE email = ? AND password = ?");
        $stmt->bind_param("ss", $email, $password);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows == 1) {
         
            $user = $result->fetch_assoc();

           
            $_SESSION['user_id'] = $user['id']; 
            $_SESSION['logged_in'] = true;

            // Redirect to dashboard
            header("Location: ../webpage/adminRoom.php");
            exit();
        } else {
            // Redirect to login page with an error message
            header("Location: ../webpage/login.php?error=invalid_credentials");
            exit();
        }

        $stmt->close();
        $con->close();
    }
}
?>
