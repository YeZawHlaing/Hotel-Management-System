<?php   
include "/xampp/htdocs/htilarProject/configuration/dbConfig.php";

if (isset($_POST["submit"])) {
   
    $e_id =$_POST["e_id"]; 
    $title=$_POST["title"];
   
     // Room view
     $file_name = $_FILES["image"]["name"];
     $temp_name = $_FILES["image"]["tmp_name"];
     $folder = "C:/xampp/htdocs/htilarProject/client/assets/" . $file_name;
 
     // Room view end



    $update_query = "UPDATE event SET image='$file_name',title='$title' WHERE e_id = '$e_id'";


    $stmt = mysqli_prepare($con, $update_query);

    if ($stmt) {
      
        // mysqli_stmt_bind_param($stmt, "ii", $file_name,$room_id);

        if (mysqli_stmt_execute($stmt)) {
           header('Location:'."../webpage/eventDashboard.php" );
        } else {
            echo "Error executing statement: " . mysqli_stmt_error($stmt);
        }
      

    
        mysqli_stmt_close($stmt);
    } else {
        echo "Error preparing statement: " . mysqli_error($con);
    }
    if (move_uploaded_file($temp_name, $folder)) {
        echo "<h2>Update successful</h2>";
    } else {
        echo "<h2>Upload failed</h2>";
    }
}

mysqli_close($con);
?>
