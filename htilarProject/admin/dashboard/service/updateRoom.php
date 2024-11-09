<?php   
include "/xampp/htdocs/htilarProject/configuration/dbConfig.php";

if (isset($_POST["submit"])) {
    $room_number = intval($_POST["roomno"]);
    $room_id = intval($_POST["roomId"]); 


    $update_query = "UPDATE room_avaliable SET room_id = ? WHERE room_no = ?";


    $stmt = mysqli_prepare($con, $update_query);

    if ($stmt) {
      
        mysqli_stmt_bind_param($stmt, "ii", $room_id, $room_number);

        if (mysqli_stmt_execute($stmt)) {
           header('Location:'."../webpage/manageAvality.php" );
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
