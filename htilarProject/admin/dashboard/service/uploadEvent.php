<?php
include "/xampp/htdocs/htilarProject/configuration/dbConfig.php";
include "/xampp/htdocs/htilarProject/admin/dashboard/webpage/check.php";

if (isset($_POST["submit"])) {
    // Room view
    $file_name = $_FILES["image"]["name"];
    $temp_name = $_FILES["image"]["tmp_name"];
    $folder = "C:/xampp/htdocs/htilarProject/client/assets/" . $file_name;

    // Check if there was an error during file upload
    if ($_FILES['image']['error'] !== UPLOAD_ERR_OK) {
        echo "<h2>Upload failed: " . $_FILES['image']['error'] . "</h2>";
        exit;
    }

    // Room view end
    $title = mysqli_real_escape_string($con, $_POST["title"]);
    $description = mysqli_real_escape_string($con, $_POST["description"]);
    $date = date("Y-m-d");

    // Ensure column names are specified
    $insert_query = mysqli_query($con, "INSERT INTO event (image, title, description, date) VALUES ('$file_name', '$title', '$description', '$date')");

    if ($insert_query) {
      
        if (move_uploaded_file($temp_name, $folder)) {
            echo "<h2>Upload successful</h2>";
            // Redirect to event dashboard
            header('Location: ../webpage/eventDashboard.php');
        } else {
            echo "<h2>File move failed</h2>";
        }
    } else {
        echo "Error: " . mysqli_error($con);
    }
}

mysqli_close($con);
?>
