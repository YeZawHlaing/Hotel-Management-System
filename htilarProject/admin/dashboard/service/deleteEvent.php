<?php
include "/xampp/htdocs/htilarProject/configuration/dbConfig.php"; 

if (isset($_POST["delete"])) {

    
    $e_id = $_POST["e_id"];  

    $delete_query = "DELETE FROM event WHERE e_id = ?";

    $stmt = mysqli_prepare($con, $delete_query);

    if ($stmt) {
        
        mysqli_stmt_bind_param($stmt, "i", $e_id);

        if (mysqli_stmt_execute($stmt)) {
            header('Location: ../webpage/eventDashboard.php');
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
