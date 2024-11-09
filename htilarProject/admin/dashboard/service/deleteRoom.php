<?php
include "/xampp/htdocs/htilarProject/configuration/dbConfig.php"; 

if (isset($_POST["delete"])) {
    $room_id = $_POST["room_id"];  

    $delete_query = "DELETE FROM room WHERE room_id = ?";

    $stmt = mysqli_prepare($con, $delete_query);

    if ($stmt) {
        
        mysqli_stmt_bind_param($stmt, "i", $room_id);

        if (mysqli_stmt_execute($stmt)) {
            header('Location: ../webpage/manageRoom.php');
            exit();
        } else {
            echo "Error executing statement: " . mysqli_stmt_error($stmt);
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "Error preparing statement: " . mysqli_error($con);
    }
}

mysqli_close($con); 
?>
