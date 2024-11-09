<?php   
include "/xampp/htdocs/htilarProject/configuration/dbConfig.php";

if (isset($_POST["submit"])) {
   
    $room_id = intval($_POST["roomId"]); 
    $price=$_POST["price"];
    



    $update_query = "UPDATE room SET price=? WHERE room_id = ?";


    $stmt = mysqli_prepare($con, $update_query);

    if ($stmt) {
      
        mysqli_stmt_bind_param($stmt, "ii", $price,$room_id);

        if (mysqli_stmt_execute($stmt)) {
           header('Location:'."../webpage/manageRoom.php" );
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
